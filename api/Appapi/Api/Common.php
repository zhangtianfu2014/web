<?php

class Api_Common extends PhalApi_Api {
	function __construct(){
		DI()->redis=$this->connectionRedis();
	}
	/* Redis链接 */
	public function connectionRedis(){
		$REDIS_HOST= DI()->config->get('app.REDIS_HOST');
		$REDIS_AUTH= DI()->config->get('app.REDIS_AUTH');
		$redis = new Redis();
		$redis -> pconnect($REDIS_HOST,6379);
		$redis -> auth($REDIS_AUTH);
		
		return $redis;
	}
	/* 设置缓存 */
	public function setcache($key,$info){
		$config=$this->getConfigPri();
		if($config['cache_switch']!=1){
			return 1;
		}
		DI()->redis->set($key,json_encode($info));
		DI()->redis->setTimeout($key, $config['cache_time']); 
		return 1;
	}	
	/* 设置缓存 可自定义时间*/
	public function setcaches($key,$info,$time){

		DI()->redis->set($key,json_encode($info));
		DI()->redis->setTimeout($key, $time); 

		return 1;
	}
	/* 获取缓存 */
	public function getcache($key){
		$config=$this->getConfigPri();

		if($config['cache_switch']!=1){
			$isexist=false;
		}else{
			$isexist=DI()->redis->Get($key);
		}

		return json_decode($isexist,true);
	}		
	/* 获取缓存 不判断后台设置 */
	public function getcaches($key){
		$isexist=DI()->redis->Get($key);
		return json_decode($isexist,true);
	}
	/* 删除缓存 */
	public function delcache($key){
		$isexist=DI()->redis->delete($key);
		return 1;
	}	
	
	/* 公共配置 */
	public function getConfigPub() {
		$key='getConfigPub';
		$config=$this->getcaches($key);
		$config=false;
		if(!$config){
			$domain = new Domain_Common();
			$config = $domain->getConfigPub();
		}
        
		return 	$config;

	}	
	/* 私密配置 */
	public function getConfigPri() {
		$key='getConfigPri';
		$config=$this->getcaches($key);
		$config=false;
		if(!$config){
			$domain = new Domain_Common();
			$config = $domain->getConfigPri();
		}
		return 	$config;
	}	

	/* 判断token */
	public function checkToken($uid,$token) {
		
		$userinfo=$this->getCache("token_".$uid);
		if(!$userinfo){
			$domain = new Domain_Common();
			$rs = $domain->checkToken($uid,$token);
			return $rs;							
		}

		if($userinfo['token']!=$token || $userinfo['expiretime']<time()){
			return 700;				
		}else{
			return 	0;				
		} 

		
	}
	/* 用户基本信息 */
	public function getUserInfo($uid) {
		$info=$this->getCache("userinfo_".$uid);
		
		if(!$info){
			$domain = new Domain_Common();
			$info = $domain->getUserInfo($uid);				
		}
		
		return $info;
	}
	
	/* 判断是否关注 */
	public function isAttention($uid,$touid) {

		$domain = new Domain_Common();
		$rs = $domain->isAttention($uid,$touid);
		return $rs;
	}
	/* 是否黑名单 */
	public function isBlack($uid,$touid) {

		$domain = new Domain_Common();
		$rs = $domain->isBlack($uid,$touid);
		return $rs;
	}
	/* 判断权限 */
	public function isAdmin($uid,$liveuid) {

		$domain = new Domain_Common();
		$rs = $domain->isAdmin($uid,$liveuid);
		return $rs;
	}
	
	/* 会员等级 */
	public function getLevel($experience) {
		$levelid=1;
		$key='level';
		$level=$this->getCache($key);
		if(!$level){
			$domain = new Domain_Common();
			$levelid = $domain->getLevel($experience);	
			return $levelid;
		}

		foreach($level as $k=>$v){
			if( $v['level_up']>=$experience){
				$levelid=$v['levelid'];
				break;
			}
		}
		return $levelid;
	}	
	/* 数字格式化 */
	public function NumberFormat($num){
		if($num<10000){

		}else if($num<1000000){
			$num=round($num/10000,2).'万';
		}else if($num<100000000){
			$num=round($num/10000,1).'万';
		}else if($num<10000000000){
			$num=round($num/100000000,2).'亿';
		}else{
			$num=round($num/100000000,1).'亿';
		}
		return $num;
	}
	/**
	 * 返回带协议的域名
	 */
	public function get_host(){
		//$host=$_SERVER["HTTP_HOST"];
	//	$protocol=$this->is_ssl()?"https://":"http://";
		//return $protocol.$host;
		$config=$this->getConfigPub();
		return $config['site'];
	}	
	
	/**
	 * 转化数据库保存的文件路径，为可以访问的url
	 */
	public function get_upload_path($file){
		if(strpos($file,"http")===0){
			return $file;
		}else if(strpos($file,"/")===0){
			$filepath= $this->get_host().$file;
			return $filepath;
		}else{
			$space_host= DI()->config->get('app.Qiniu.space_host');
			$filepath=$space_host."/".$file;
			return $filepath;
		}
	}	
	/* 去除NULL 判断空处理 主要针对字符串类型*/
	public function checkNull($checkstr){
		$checkstr=urldecode($checkstr);
		$checkstr=htmlspecialchars($checkstr);
		$checkstr=$this->filterEmoji($checkstr);
		if( strstr($checkstr,'null') || (!$checkstr && $checkstr!=0 ) ){
			$str='';
		}else{
			$str=$checkstr;
		}
		return $str;	
	}
	
	/* 去除emoji表情 */
	public function filterEmoji($str){
		$str = preg_replace_callback(
			'/./u',
			function (array $match) {
				return strlen($match[0]) >= 4 ? '' : $match[0];
			},
			$str);
		return $str;
	}
	/* 密码检查 */
	public function passcheck($user_pass) {
		$num = preg_match("/^[a-zA-Z]+$/",$user_pass);
		$word = preg_match("/^[0-9]+$/",$user_pass);
		$check = preg_match("/^[a-zA-Z0-9]{6,12}$/",$user_pass);
		if($num || $word ){
			return 2;
		}else if(!$check){
			return 0;
		}		
		return 1;
	}
	/* 判断账号是否禁用 */
	public function isBan($uid){
		$domain = new Domain_Common();
		$rs = $domain->isBan($uid);
		return $rs;
		
	}
	/* 判断账号是否认证 */
	public function isAuth($uid){
		$domain = new Domain_Common();
		$rs = $domain->isAuth($uid);
		return $rs;
		
	}
	/* 过滤关键词 */
	public function filterField($field){
		$configpri=$this->getConfigPri();
		
		$sensitive_field=$configpri['sensitive_field'];
		
		$sensitive=explode(",",$sensitive_field);
		$replace=array();
		$preg=array();
		foreach($sensitive as $k=>$v){
			if($v){
				$re='';
				$num=mb_strlen($v);
				for($i=0;$i<$num;$i++){
					$re.='*';
				}
				$replace[$k]=$re;
				$preg[$k]='/'.$v.'/';
			}else{
				unset($sensitive[$k]);
			}
		}
		
		return preg_replace($preg,$replace,$field);
	}
	/* 检验手机号 */
	public function checkMobile($mobile){
		$ismobile = preg_match("/^1[3|4|5|7|8]\d{9}$/",$mobile);
		if($ismobile){
			return 1;
		}else{
			return 0;
		}
	}
	/* 随机数 */
	public function random($length = 6 , $numeric = 0) {
		PHP_VERSION < '4.2.0' && mt_srand((double)microtime() * 1000000);
		if($numeric) {
			$hash = sprintf('%0'.$length.'d', mt_rand(0, pow(10, $length) - 1));
		} else {
			$hash = '';
			$chars = 'ABCDEFGHJKLMNPQRSTUVWXYZ23456789abcdefghjkmnpqrstuvwxyz';
			$max = strlen($chars) - 1;
			for($i = 0; $i < $length; $i++) {
				$hash .= $chars[mt_rand(0, $max)];
			}
		}
		return $hash;
	}	
	/* 发送验证码 */
	public function sendCode($mobile,$code){
		$rs=array();
		$config = $this->getConfigPri();
		/* 互亿无线 */
		$target = "http://106.ihuyi.cn/webservice/sms.php?method=Submit";
		
		$post_data = "account=".$config['ihuyi_account']."&password=".$config['ihuyi_ps']."&mobile=".$mobile."&content=".rawurlencode("您的验证码是：".$code."。请不要把验证码泄露给其他人。");
		//密码可以使用明文密码或使用32位MD5加密
		$gets = $this->xml_to_array($this->Post($post_data, $target));

		if($gets['SubmitResult']['code']==2){
			$rs['code']=0;
		}else{
			$rs['code']=1002;
			$rs['msg']=$gets['SubmitResult']['msg'];
		} 
		return $rs;
	}
	
	public function Post($curlPost,$url){
		$curl = curl_init();
		curl_setopt($curl, CURLOPT_URL, $url);
		curl_setopt($curl, CURLOPT_HEADER, false);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($curl, CURLOPT_NOBODY, true);
		curl_setopt($curl, CURLOPT_POST, true);
		curl_setopt($curl, CURLOPT_POSTFIELDS, $curlPost);
		$return_str = curl_exec($curl);
		curl_close($curl);
		return $return_str;
	}
	
	public function xml_to_array($xml){
		$reg = "/<(\w+)[^>]*>([\\x00-\\xFF]*)<\\/\\1>/";
		if(preg_match_all($reg, $xml, $matches)){
			$count = count($matches[0]);
			for($i = 0; $i < $count; $i++){
			$subxml= $matches[2][$i];
			$key = $matches[1][$i];
				if(preg_match( $reg, $subxml )){
					$arr[$key] = $this->xml_to_array( $subxml );
				}else{
					$arr[$key] = $subxml;
				}
			}
		}
		return $arr;
	}
	/* 发送验证码 */
	
	/* 检测文件后缀 */
	public function checkExt($filename){
		$config=array("jpg","png","jpeg");
		$ext   =   pathinfo(strip_tags($filename), PATHINFO_EXTENSION);
		 
		return empty($config) ? true : in_array(strtolower($ext), $config);
	}	
	
	/* 同系统函数 array_column   php版本低于5.5.0 时用  */
	public function array_column2($input, $columnKey, $indexKey = NULL){
		$columnKeyIsNumber = (is_numeric($columnKey)) ? TRUE : FALSE;
		$indexKeyIsNull = (is_null($indexKey)) ? TRUE : FALSE;
		$indexKeyIsNumber = (is_numeric($indexKey)) ? TRUE : FALSE;
		$result = array();
 
		foreach ((array)$input AS $key => $row){ 
			if ($columnKeyIsNumber){
				$tmp = array_slice($row, $columnKey, 1);
				$tmp = (is_array($tmp) && !empty($tmp)) ? current($tmp) : NULL;
			}else{
				$tmp = isset($row[$columnKey]) ? $row[$columnKey] : NULL;
			}
			if (!$indexKeyIsNull){
				if ($indexKeyIsNumber){
					$key = array_slice($row, $indexKey, 1);
					$key = (is_array($key) && ! empty($key)) ? current($key) : NULL;
					$key = is_null($key) ? 0 : $key;
				}else{
					$key = isset($row[$indexKey]) ? $row[$indexKey] : 0;
				}
			}
			$result[$key] = $tmp;
		}
		return $result;
	}
	
} 
