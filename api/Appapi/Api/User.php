<?php
session_start();
class Api_User extends Api_Common {

	public function getRules() {
		return array(
			'iftoken' => array(
				'uid' => array('name' => 'uid', 'type' => 'int', 'min' => 1, 'require' => true, 'desc' => '用户ID'),
				'token' => array('name' => 'token', 'type' => 'string', 'require' => true, 'desc' => '用户token'),
			),
			
			'getBaseInfo' => array(
				'uid' => array('name' => 'uid', 'type' => 'int', 'min' => 1, 'require' => true, 'desc' => '用户ID'),
				'token' => array('name' => 'token', 'type' => 'string', 'require' => true, 'desc' => '用户token'),
			),
			
			'getScorerecord' => array(
					'uid' => array('name' => 'uid', 'type' => 'int', 'min' => 1, 'require' => true, 'desc' => '用户ID'),
					'token' => array('name' => 'token', 'type' => 'string', 'require' => true, 'desc' => '用户token'),
					'p' => array('name' => 'p', 'type' => 'int', 'min' => 1, 'default'=>1,'desc' => '页数'),
			),
				
			'getBaseInfos' => array(
					'uid' => array('name' => 'uid', 'type' => 'int', 'min' => 1, 'require' => true, 'desc' => '用户ID'),
			),
				
			'getRechargeList' => array(
				'uid' => array('name' => 'uid', 'type' => 'int', 'min' => 1, 'require' => true, 'desc' => '用户ID'),
				'token' => array('name' => 'token', 'type' => 'string', 'require' => true, 'desc' => '用户token'),
			),
			
			'getRechargeInfo' => array(
				'uid' => array('name' => 'uid', 'type' => 'int', 'min' => 1, 'require' => true, 'desc' => '用户ID'),
				'token' => array('name' => 'token', 'type' => 'string', 'require' => true, 'desc' => '用户token'),
			),
				
			'getExchangeInfo' => array(
					'uid' => array('name' => 'uid', 'type' => 'int', 'min' => 1, 'require' => true, 'desc' => '用户ID'),
					'token' => array('name' => 'token', 'type' => 'string', 'require' => true, 'desc' => '用户token'),
			),
			
			'getExchangeRules' => array(
					'uid' => array('name' => 'uid', 'type' => 'int', 'min' => 1, 'require' => true, 'desc' => '用户ID'),
					//'token' => array('name' => 'token', 'type' => 'string', 'require' => true, 'desc' => '用户token'),
			),
				
			'getExchangeList' => array(
					'uid' => array('name' => 'uid', 'type' => 'int', 'min' => 1, 'require' => true, 'desc' => '用户ID'),
					'token' => array('name' => 'token', 'type' => 'string', 'require' => true, 'desc' => '用户token'),
			),
			
			'getChargeRules' => array(
					'uid' => array('name' => 'uid', 'type' => 'int', 'min' => 1, 'require' => true, 'desc' => '用户ID'),
					'token' => array('name' => 'token', 'type' => 'string', 'require' => true, 'desc' => '用户token'),
			),
				
			'getLevel' => array(
					'uid' => array('name' => 'uid', 'type' => 'int', 'min' => 1, 'require' => true, 'desc' => '用户ID'),
					'token' => array('name' => 'token', 'type' => 'string', 'require' => true, 'desc' => '用户token'),
			),
				
			'getPage' => array(
					'id' => array('name' => 'id', 'type' => 'int', 'min' => 1, 'require' => true, 'desc' => '单页id 1文明公约2隐私政策3服务协议4联系我们5用户充值协议6用户兑换协议'),
			),
			
			'setAlipay' => array(
					'alipay' => array('name' => 'alipay', 'type' => 'string', 'require' => true, 'desc' => '支付宝账号'),
					'mobile' => array('name' => 'mobile', 'type' => 'string', 'require' => true, 'desc' => '手机号'),
					'real_name' => array('name' => 'real_name', 'type' => 'string', 'require' => true, 'desc' => '真实姓名'),
					'code' => array('name' => 'code', 'type' => 'string', 'require' => true, 'desc' => '验证码'),
			),
			
			'setAuth' => array(
					'uid' => array('name' => 'uid', 'type' => 'int', 'min' => 1, 'require' => true, 'desc' => '用户ID'),
					'mobile' => array('name' => 'mobile', 'type' => 'string', 'require' => true, 'desc' => '手机号'),
					'real_name' => array('name' => 'real_name', 'type' => 'string', 'require' => true, 'desc' => '真实姓名'),
					'cer_no' => array('name' => 'cer_no', 'type' => 'string', 'require' => true, 'desc' => '身份证号码'),
			),
				
			'setChargeInfo' => array(
				'id' => array('name' => 'id', 'type' => 'int', 'min' => 1, 'require' => true, 'desc' => 'id'),
				'uid' => array('name' => 'uid', 'type' => 'int', 'min' => 1, 'require' => true, 'desc' => '用户ID'),
				'touid' => array('name' => 'touid', 'type' => 'int', 'min' => 1, 'require' => true, 'desc' => '对方ID'),
				'type' => array('name' => 'type', 'type' => 'int', 'min' => 1, 'require' => true, 'desc' => '支付方式'),
			),
				
			'setExchangeInfo' => array(
					'id' => array('name' => 'id', 'type' => 'int', 'min' => 1, 'require' => false, 'desc' => 'id'),
					'uid' => array('name' => 'uid', 'type' => 'int', 'min' => 1, 'require' => true, 'desc' => '用户ID'),
					'cuckoo' => array('name' => 'cuckoo', 'type' => 'string', 'min' => 1, 'require' => true, 'desc' => '布谷�?'),
					'guzi' => array('name' => 'guzi', 'type' => 'string', 'min' => 1, 'require' => true, 'desc' => '谷子'),
			),
			
			'updateAvatar' => array(
				'uid' => array('name' => 'uid', 'type' => 'int', 'min' => 1, 'require' => true, 'desc' => '用户ID'),
				'token' => array('name' => 'token', 'type' => 'string', 'require' => true, 'desc' => '用户token'),
				'file' => array('name' => 'file','type' => 'file', 'min' => 0, 'max' => 1024 * 1024 * 30, 'range' => array('image/jpg', 'image/jpeg', 'image/png'), 'ext' => array('jpg', 'jpeg', 'png')),
			),	
			'updateFields' => array(
				'uid' => array('name' => 'uid', 'type' => 'int', 'min' => 1, 'require' => true, 'desc' => '用户ID'),
				'token' => array('name' => 'token', 'type' => 'string', 'require' => true, 'desc' => '用户token'),
				'user_nicename' => array('name' => 'user_nicename', 'type' => 'string', 'require' => false, 'desc' => '用户昵称'),
				'sex' => array('name' => 'sex', 'type' => 'int', 'max' => 2,'require' => false, 'desc' => '用户性别'),
				'birthday' => array('name' => 'birthday', 'type' => 'string', 'require' => false, 'desc' => '生日'),
				'province' => array('name' => 'province', 'type' => 'string', 'require' => false, 'desc' => '省份'),
				'city' => array('name' => 'city', 'type' => 'string', 'require' => false, 'desc' => '城市'),
				'area' => array('name' => 'area', 'type' => 'string', 'require' => false, 'desc' => '区域'),
				'signature' => array('name' => 'signature', 'type' => 'string', 'require' => false, 'desc' => '签名'),
			//array('user_nicename','province','city','area','sex','birthday','signature')
			),
			
			'updatePass' => array(
				'uid' => array('name' => 'uid', 'type' => 'int', 'min' => 1, 'require' => true, 'desc' => '用户ID'),
				'token' => array('name' => 'token', 'type' => 'string', 'require' => true, 'desc' => '用户token'),
				'oldpass' => array('name' => 'oldpass', 'type' => 'string', 'require' => true, 'desc' => '旧密码'),
				'pass' => array('name' => 'pass', 'type' => 'string', 'require' => true, 'desc' => '新密码'),
				'pass2' => array('name' => 'pass2', 'type' => 'string', 'require' => true, 'desc' => '确认密码'),
			),
			
			'getBalance' => array(
				'uid' => array('name' => 'uid', 'type' => 'int', 'min' => 1, 'require' => true, 'desc' => '用户ID'),
				'token' => array('name' => 'token', 'type' => 'string', 'require' => true, 'desc' => '用户token'),
			),
			
			'getProfit' => array(
				'uid' => array('name' => 'uid', 'type' => 'int', 'min' => 1, 'require' => true, 'desc' => '用户ID'),
				'token' => array('name' => 'token', 'type' => 'string', 'require' => true, 'desc' => '用户token'),
			),
			
			'setCash' => array(
				'uid' => array('name' => 'uid', 'type' => 'int', 'min' => 1, 'require' => true, 'desc' => '用户ID'),
				'token' => array('name' => 'token', 'type' => 'string', 'require' => true, 'desc' => '用户token'),
				'money' => array('name' => 'money', 'type' => 'int', 'require' => true, 'desc' => '提现金额'),
				'guzi' => array('name' => 'guzi', 'type' => 'int', 'require' => true, 'desc' => '谷子'),
			),
			
			'setAttent' => array(
				'uid' => array('name' => 'uid', 'type' => 'int', 'min' => 1, 'require' => true, 'desc' => '用户ID'),
				'touid' => array('name' => 'touid', 'type' => 'int', 'min' => 1, 'require' => true, 'desc' => '对方ID'),
				'token' => array('name' => 'token', 'type' => 'string', 'require' => true, 'desc' => '用户token'),
			),
			
			'isAttent' => array(
				'uid' => array('name' => 'uid', 'type' => 'int', 'min' => 1, 'require' => true, 'desc' => '用户ID'),
				'touid' => array('name' => 'touid', 'type' => 'int', 'min' => 1, 'require' => true, 'desc' => '对方ID'),
			),
			
			'isBlacked' => array(
				'uid' => array('name' => 'uid', 'type' => 'int', 'min' => 1, 'require' => true, 'desc' => '用户ID'),
				'touid' => array('name' => 'touid', 'type' => 'int', 'min' => 1, 'require' => true, 'desc' => '对方ID'),
			),

			'setBlack' => array(
				'uid' => array('name' => 'uid', 'type' => 'int', 'min' => 1, 'require' => true, 'desc' => '用户ID'),
				'touid' => array('name' => 'touid', 'type' => 'int', 'min' => 1, 'require' => true, 'desc' => '对方ID'),
			),
			
			'getBindCode' => array(
				'mobile' => array('name' => 'mobile', 'type' => 'string', 'min' => 1, 'require' => true,  'desc' => '手机�?'),
			),
			
			'setMobile' => array(
				'uid' => array('name' => 'uid', 'type' => 'int', 'min' => 1, 'require' => true, 'desc' => '用户ID'),
				'token' => array('name' => 'token', 'type' => 'string', 'require' => true, 'desc' => '用户token'),
				'mobile' => array('name' => 'mobile', 'type' => 'string', 'min' => 1, 'require' => true,  'desc' => '手机�?'),
				'code' => array('name' => 'code', 'type' => 'string', 'min' => 1, 'require' => true,   'desc' => '验证�?'),
			),
			
			'getFollowsList' => array(
				'uid' => array('name' => 'uid', 'type' => 'int', 'min' => 1, 'require' => true, 'desc' => '用户ID'),
				'touid' => array('name' => 'touid', 'type' => 'int', 'min' => 1, 'require' => true, 'desc' => '对方ID'),
				'p' => array('name' => 'p', 'type' => 'int', 'min' => 1, 'default'=>1,'desc' => '页数'),
			),
				
			'getInviteList' => array(
					'uid' => array('name' => 'uid', 'type' => 'int', 'min' => 1, 'require' => true, 'desc' => '用户ID'),
					'p' => array('name' => 'p', 'type' => 'int', 'min' => 1, 'default'=>1,'desc' => '页数'),
			),
			
			'setInvite' => array(
					'uid' => array('name' => 'uid', 'type' => 'int', 'min' => 1, 'require' => true, 'desc' => '用户ID'),
					'touid' => array('name' => 'touid', 'type' => 'int', 'min' => 1, 'default'=>1,'desc' => '对方ID'),
			),
				
			'getFansList' => array(
				'uid' => array('name' => 'uid', 'type' => 'int', 'min' => 1, 'require' => true, 'desc' => '用户ID'),
				'touid' => array('name' => 'touid', 'type' => 'int', 'min' => 1, 'require' => true, 'desc' => '对方ID'),
				'p' => array('name' => 'p', 'type' => 'int', 'min' => 1, 'default'=>1,'desc' => '页数'),
			),
			
			'getBlackList' => array(
				'uid' => array('name' => 'uid', 'type' => 'int', 'min' => 1, 'require' => true, 'desc' => '用户ID'),
				//'touid' => array('name' => 'touid', 'type' => 'int', 'min' => 1, 'require' => true, 'desc' => '对方ID'),
				'p' => array('name' => 'p', 'type' => 'int', 'min' => 1, 'default'=>1,'desc' => '页数'),
			),
			
			'getLiverecord' => array(
				'touid' => array('name' => 'touid', 'type' => 'int', 'min' => 1, 'require' => true, 'desc' => '对方ID'),
				'p' => array('name' => 'p', 'type' => 'int', 'min' => 1, 'default'=>1,'desc' => '页数'),
			),
			
			'getAliCdnRecord' => array(
                'id' => array('name' => 'id', 'type' => 'int', 'min' => 1, 'require' => true, 'desc' => '直播记录ID'),
            ),
			
			'getUserHome' => array(
				'uid' => array('name' => 'uid', 'type' => 'int', 'min' => 1, 'require' => true, 'desc' => '用户ID'),
				'touid' => array('name' => 'touid', 'type' => 'int', 'min' => 1, 'require' => true, 'desc' => '对方ID'),
			),
			
			'getContributeList' => array(
				'touid' => array('name' => 'touid', 'type' => 'int', 'min' => 1, 'require' => true, 'desc' => '对方ID'),
				'p' => array('name' => 'p', 'type' => 'int', 'default'=>'1' ,'desc' => '页数'),
			),
			
			'getPmUserInfo' => array(
				'uid' => array('name' => 'uid', 'type' => 'int', 'min' => 1, 'require' => true, 'desc' => '用户ID'),
				'touid' => array('name' => 'touid', 'type' => 'int', 'min' => 1, 'require' => true, 'desc' => '对方ID'),
			),
			
			'getMultiInfo' => array(
				'uid' => array('name' => 'uid', 'type' => 'int', 'min' => 1, 'require' => true, 'desc' => '用户ID'),
				'uids' => array('name' => 'uids', 'type' => 'string', 'min' => 1,'require' => true, 'desc' => '用户ID，多个以逗号分割'),
				'type' => array('name' => 'type', 'type' => 'int', 'require' => true, 'desc' => '关注类型�?0 未关�? 1 已关�?'),
			),
			
			'getMessage' => array(
					'uid' => array('name' => 'uid', 'type' => 'int', 'min' => 1, 'require' => true, 'desc' => '用户ID'),
					//'touid' => array('name' => 'touid', 'type' => 'int', 'min' => 1,'require' => true, 'desc' => '对方ID'),
					//'content' => array('name' => 'message', 'type' => 'string', 'require' => true, 'desc' => '消息内容'),
			),
				
			'setMessage' => array(
					'uid' => array('name' => 'uid', 'type' => 'int', 'min' => 1, 'require' => true, 'desc' => '用户ID'),
					'touid' => array('name' => 'touid', 'type' => 'int', 'min' => 1,'require' => true, 'desc' => '对方ID'),
					'content' => array('name' => 'content', 'type' => 'string', 'require' => true, 'desc' => '消息内容'),
					'type' => array('name' => 'type', 'type' => 'int', 'min' => 1, 'require' => true, 'desc' => '消息类型'),
			),
			'getTouidList' => array(
				'uid' => array('name' => 'uid', 'type' => 'int', 'min' => 1, 'require' => true, 'desc' => '用户ID'),
				'token' => array('name' => 'token', 'type' => 'string', 'require' => true, 'desc' => '用户token'),	
				'type' => array('name' => 'type', 'type' => 'int', 'desc' => '日周榜'),	
				'p' => array('name' => 'p', 'type' => 'string', 'desc' => '分页')
			),
			'getTest' => array(
				'uid' => array('name' => 'uid', 'type' => 'int', 'min' => 1, 'require' => true, 'desc' => '用户ID'),
			),
			'getUserPoin' => array(
				'uid' => array('name' => 'uid', 'type' => 'int', 'min' => 1, 'require' => true, 'desc' => '用户ID'),
				'touid' => array('name' => 'touid', 'type' => 'int', 'min' => 1,'require' => true, 'desc' => '对方ID'),
				'p' => array('name' => 'p', 'type' => 'string', 'desc' => '分页')
			),
		);
	}
	/**
	 * 判断token
	 * @desc 用于判断token
	 * @return int code 操作码，0表示成功�? 1表示用户不存�?
	 * @return array info 
	 * @return string msg 提示信息
	 */
	public function getTest(){
		
		//pd($this);
		
	}
	/**
	 * 判断token
	 * @desc 用于判断token
	 * @return int code 操作码，0表示成功�? 1表示用户不存�?
	 * @return array info
	 * @return string msg 提示信息
	 */
	public function getUserPoin(){
		
		$rs = array('code' => 0, 'msg' => '', 'info' => array());
		
		$domain = new Domain_User();
		$this->p =	!empty($this->p)?$this->p:1;
		$info = $domain->getUserPoin($this->uid,$this->p,$this->touid);
		$rs['msg'] 	=	!empty($info)?'成功返回数据':'数据未空';
	 
		$rs['info']=$info;
		return $rs;
		
	}
	
	/**
	 * 判断token
	 * @desc 用于判断token
	 * @return int code 操作码，0表示成功， 1表示用户不存在
	 * @return array info
	 * @return string msg 提示信息
	 */
	public function iftoken() {
		$rs = array('code' => 0, 'msg' => '', 'info' => array());
		
		$checkToken=$this->checkToken($this->uid,$this->token);
		if($checkToken==700){
			$rs['code'] = $checkToken;
			$rs['msg'] = 'Token错误或已过期，请重新登录';
			return $rs;
		}
		return $rs;
	}
	//获取关注用户头像
	public function getTouidList() {
		$rs = array('code' => 0, 'msg' => '', 'info' => array());
	
		$checkToken=$this->checkToken($this->uid,$this->token);
		
		if($checkToken==700){
			$rs['code'] = $checkToken;
			$rs['msg'] = 'Token错误或已过期，请重新登录';
			return $rs;
		}
		
		$this->p	=	!empty($this->p)?$this->p:1;
		$this->type	=	!empty($this->type)?$this->p:1;
		
		$domain 	= 	new Domain_User();
		$info = $domain->getTouidList($this->uid,$this->p,$this->type);
		
		$rs['info'] = $info;
		if(empty($info)){
			$rs['msg'] = '数据为空';
			$rs['info']=array();
		}

		return $rs;
	}
	
	
	/**
	 * 获取用户信息
	 * @desc 用于获取单个用户基本信息
	 * @return int code 操作码，0表示成功， 1表示用户不存在
	 * @return array info 
	 * @return array info[0] 用户信息
	 * @return int info[0].id 用户ID
	 * @return string info[0].level 等级
	 * @return string info[0].lives 直播数量
	 * @return string info[0].follows 关注数
	 * @return string info[0].fans 粉丝数
	 * @return string msg 提示信息
	 */
	public function getBaseInfo() {
		$rs = array('code' => 0, 'msg' => '', 'info' => array());
		
		$checkToken=$this->checkToken($this->uid,$this->token);
		if($checkToken==7000){
			$rs['code'] = 1;
			$rs['msg'] = 'Token错误或已过期，请重新登录';
			return $rs;
		}

		$domain = new Domain_User();
		$info = $domain->getBaseInfo($this->uid);
		if($info['flag']==1){
			$rs['code'] = 2;
			$rs['msg'] = '该用户未认证';
			return $rs;
		}
        else if(!$info){
			$rs['code'] = 1;
			$rs['msg'] = '数据为空';
		}
		$rs['info'][0] = $info;

		return $rs;
	}
	
	public function getLevel() {
		$rs = array('code' => 0, 'msg' => '', 'info' => array());
	
		$checkToken=$this->checkToken($this->uid,$this->token);
		if($checkToken==7000){
			$rs['code'] = 1;
			$rs['msg'] = 'Token错误或已过期，请重新登录';
			return $rs;
		}
	
		$domain = new Domain_User();
		$info = $domain->getLevel($this->uid);
		if(!$info){
			$rs['code'] = 1;
			$rs['msg'] = '数据为空';
		}
		$rs['info'][0] = $info;
	
		return $rs;
	}
	
	/**
	 * 获取充值列表
	 * @desc 用于获取充值列表 
	 * @return int code 操作码，0表示成功 1表示用户不存在
	 * @return array info 
	 * @return string msg 提示信息
	 */
	public function getRechargeList() {
		$rs = array('code' => 0, 'msg' => '', 'info' => array());
		
		$checkToken=$this->checkToken($this->uid,$this->token);
		
		if($checkToken==7000){
			$rs['code'] = 1;
			$rs['msg'] = 'Token错误或已过期，请重新登录';
			return $rs;
		}

		$domain = new Domain_User();
		$info = $domain->getRechargeList($this->uid);
		
		if(!$info){
			$rs['code'] = 1;
			$rs['msg'] = '数据为空';
		}
		
		$rs['info'] = $info;
		return $rs;
	}
	
	/**
	 * 获取充值规则信息列表?
	 * @desc 用于获取充值规则信息列表
	 * @return int code 操作码，0表示成功�? 1表示用户不存�?
	 * @return array info
	 * @return string msg 提示信息
	 */
	public function getChargeRules(){
		$rs = array('code' => 0, 'msg' => '', 'info' => array());
		
		$domain = new Domain_User();
		$info = $domain->getChargeRules();
		
		$rs['info'] = $info;
		return $rs;
	}
	
	/**
	 * 获取单页页面列表
	 * @desc 用于获取单页页面列表
	 * @return int code 操作码，0表示成功  1表示用户不存在
	 * @return array info
	 * @return string info[0].id 单页id
	 * @return string info[0].post_title 单页标题
	 * @return string info[0].post_content 单页内容
	 * @return string msg 提示信息
	 */
	public function getPageList(){
		$rs = array('code' => 0, 'msg' => '', 'info' => array());
	
		$domain = new Domain_User();
		$info = $domain->getPageList();
	
		$rs['info'] = $info;
		return $rs;
	}
	
	/**
	 * 获取单页页面信息
	 * @desc 用于获取单页页面信息
	 * @return int code 操作码，0表示成功  1表示用户不存在
	 * @return array info
	 * @return string info[0].id 单页id
	 * @return string info[0].post_title 单页标题
	 * @return string info[0].post_content 单页内容
	 * @return string msg 提示信息
	 */
	public function getPage(){
		$rs = array('code' => 0, 'msg' => '', 'info' => array());
	
		$domain = new Domain_User();
		$info = $domain->getPage($this->id);
		if($info){
			$rs['info'] = $info;
			$rs['msg'] = '获取成功';
		} else {
			$rs['code'] = 1;
			$rs['msg'] = '获取失败';
		}
		return $rs;
	}
	
	/**
	 * 获取兑换规则
	 * @desc 获取兑换规则
	 * @return int code 操作码，0表示成功  1表示用户不存在
	 * @return array info
	 * @return string msg 提示信息
	 */
	public function getExchangeRules(){
		$rs = array('code' => 0, 'msg' => '', 'info' => array());
		
		$domain = new Domain_User();

		$info = $domain->getGuzi($this->uid);
		
		$rs['guzi'] = $info['guzi'] ? $info['guzi'] : "0";
		
		$rs['info'] = array(
				array('id'=>1,'guzi'=>7,'cuckoo'=>10),
				array('id'=>2,'guzi'=>70,'cuckoo'=>100),
				array('id'=>3,'guzi'=>210,'cuckoo'=>300),
				array('id'=>4,'guzi'=>2100,'cuckoo'=>3000),
				array('id'=>5,'guzi'=>3500,'cuckoo'=>5000),
				array('id'=>6,'guzi'=>2100,'cuckoo'=>3000),
				array('id'=>7,'guzi'=>3500,'cuckoo'=>5000),
				array('id'=>8,'guzi'=>7000,'cuckoo'=>10000),
		);
							
		return $rs;
	}
	
	public function getExchangeList(){
		$rs = array('code' => 0, 'msg' => '', 'info' => array());
		$checkToken=$this->checkToken($this->uid,$this->token);
		
		if($checkToken==7000){
			$rs['code'] = 1;
			$rs['msg'] = 'Token错误或已过期，请重新登录';
			return $rs;
		}

		$domain = new Domain_User();
		$info = $domain->getExchangeList($this->uid);
		
		if(!$info){
			$rs['code'] = 1;
			$rs['msg'] = '数据为空';
		}
		
		$rs['info'] = $info;
		return $rs;
	}
	
	
	public function setExchangeInfo(){
		$rs = array('code' => 1, 'msg' => '', 'info' => array());
		$domain = new Domain_User();
		$info = $domain->setExchangeInfo($this->uid,$this->guzi,$this->cuckoo);
		if($info){
			$rs['code'] = 0;
			$rs['msg'] = '兑换成功';
			$rs['info'] = $info;
		} else {
			$rs['msg'] = '兑换失败';
		}
		return $rs;
	}
	
	
	/**
	 * 设置用户充值
	 * @desc 用于设置用户充值信息
	 * @return int code 操作码，0表示成功
	 * @return array info 
	 * @return string info[0].msg 充值成功信息
	 * @return string msg 提示信息
	 */
	public function setChargeInfo(){
		$rs = array('code' => 1, 'msg' => '', 'info' => array());
		$domain = new Domain_User();
		$info = $domain->setChargeInfo($this->id,$this->uid,$this->touid,$this->type);
		if($info){
			$rs['code'] = 0;
			$rs['msg'] = '充值成功';
			$rs['info'] = $info;
		} else {
			$rs['msg'] = '充值失败';
		}
		return $rs;
	}
	
	
	/**
	 * 获取用户信息
	 * @desc 用于获取用户信息
	 * @return int code 操作码，0表示成功1表示失败
	 * @return array info
	 * @return string info[0].id 消息id
	 * @return string info[0].uid 用户id
	 * @return string info[0].touid 对方id
	 * @return string info[0].content 消息内容
	 * @return string info[0].addtime 时间
	 * @return string msg 提示信息
	 */
	public function getMessage(){
		$rs = array('code' => 0, 'msg' => '', 'info' => array());
		$domain = new Domain_User();
		$info = $domain->getMessage($this->uid);
		if($info){
			$rs['info'] = $info;
			$rs['msg'] = '获取成功';
		} else {
			$rs['code'] = 1;
			$rs['msg'] = '获取失败';
		}
		return $rs;
	}
	
	
	//获取用户等级
	/*public function getLevel(){
		$uid=I("uid");
		
		$Experlevel=M("experlevel");
		 
		$experience=M("users")->where("id='$uid'")->getField("consumption");
		
		$level=$Experlevel->where("level_up>='$experience'")->order("levelid asc")->find();
		$level2=$Experlevel->where("level_up<='$experience'")->order("levelid desc")->find();
		
		$cha=$level['level_up']+1-$experience;
		if($level2){
			$min=$level2['level_up'];
		}else{
			$min=0;
		}
		
		$rate=floor(($experience-$min)/($level['level_up']+1-$min)*100);
		
		$this->assign("experience",$experience);
		$this->assign("level",$level);
		$this->assign("cha",$cha);
		$this->assign("rate",$rate);
	}*/
	
	public function setMessage(){
		$rs = array('code' => 1, 'msg' => '', 'info' => array());
		$domain = new Domain_User();
		$info = $domain->setMessage($this->uid,$this->touid,$this->content,$this->type);
		if($info){
			$rs['code'] = 0;
			$rs['msg'] = '添加成功';
			$rs['info'] = $info;
		} else {
			$rs['msg'] = '添加失败';
		}
		return $rs;
	}
	

	/**
	 * 头像上传 (七牛)
	 * @desc 用于用户修改头像
	 * @return int code 操作码，0表示成功
	 * @return array info 
	 * @return string list[0].avatar 用户主头像
	 * @return string list[0].avatar_thumb 用户头像缩略图
	 * @return string msg 提示信息
	 */
	const CODE_MISS_UPLOAD_FILE = 1;
	const CODE_FAIL_TO_UPLOAD_FILE = 2;
	const CODE_FAIL_TO_UPDATE = 3;
 
	public function updateAvatar() {
		$rs = array('code' => self::CODE_FAIL_TO_UPLOAD_FILE , 'msg' => '', 'info' => array());

		$checkToken=$this->checkToken($this->uid,$this->token);
		if($checkToken==700){
			$rs['code'] = $checkToken;
			$rs['msg'] = 'Token错误或已过期，请重新登录';
			return $rs;
		}
		
		if (!isset($_FILES['file'])) {
			$rs['code'] = self::CODE_MISS_UPLOAD_FILE;
			$rs['msg'] = T('miss upload file');
			return $rs;
		}

		if ($_FILES["file"]["error"] > 0) {
			$rs['code'] = self::CODE_FAIL_TO_UPLOAD_FILE;
			$rs['msg'] = T('failed to upload file with error: {error}', array('error' => $_FILES['file']['error']));
			DI()->logger->debug('failed to upload file with error: ' . $_FILES['file']['error']);
			return $rs;
		}

		$url = DI()->qiniu->uploadFile($_FILES['file']['tmp_name']);

		if (!empty($url)) {
				$avatar=  $url.'?imageView2/2/w/600/h/600'; //600 X 600
				$avatar_thumb=  $url.'?imageView2/2/w/200/h/200'; // 200 X 200
				$data=array(
					"avatar"=>$avatar,
					"avatar_thumb"=>$avatar_thumb,
				);
				/* 清除缓存 */
				$this->delCache("userinfo_".$this->uid);
				
				/* 统一服务�? 格式 */
				/* $space_host= DI()->config->get('app.Qiniu.space_host');
				$avatar2=str_replace($space_host.'/', "", $avatar);
				$avatar_thumb2=str_replace($space_host.'/', "", $avatar_thumb);
				$data2=array(
					"avatar"=>$avatar2,
					"avatar_thumb"=>$avatar_thumb2,
				); */
				$domain = new Domain_User();
				$info = $domain->userUpdate($this->uid,$data);

				$rs['code'] = 0;
				$rs['info'][0] = $data;
				$rs['msg'] = '';
		}
		@unlink($_FILES['file']['tmp_name']);

		return $rs;

	}
	
	/**
'uid' => array('name' => 'uid', 'type' => 'int', 'min' => 1, 'require' => true, 'desc' => '用户ID'),
'token' => array('name' => 'token', 'type' => 'string', 'require' => true, 'desc' => '用户token'),
'user_nicename' => array('name' => 'user_nicename', 'type' => 'string', 'require' => false, 'desc' => '用户昵称'),
'sex' => array('name' => 'sex', 'type' => 'int', 'max' => 2,'require' => false, 'desc' => '用户性别'),
'birthday' => array('name' => 'birthday', 'type' => 'string', 'require' => false, 'desc' => '生日'),
'province' => array('name' => 'province', 'type' => 'string', 'require' => false, 'desc' => '省份'),
'city' => array('name' => 'city', 'type' => 'string', 'require' => false, 'desc' => '城市'),
'area' => array('name' => 'area', 'type' => 'string', 'require' => false, 'desc' => '区域'),
signature' => array('name' => 'signature', 'type' => 'string', 'require' => false, 'desc' => '签名'),
	 */
	public function updateFields() {
		
		$rs = array('code' => 0, 'msg' => '', 'info' => array());
		
		$checkToken=$this->checkToken($this->uid,$this->token);
		if($checkToken==7000){
			$rs['code'] = $checkToken;
			$rs['msg'] = 'Token错误或已过期，请重新登录';
			return $rs;
		}	
		
		//$fields=json_decode($this->fields,true);
		$fields['user_nicename'] 	=	$this->user_nicename;
		$fields['sex'] 				=	$this->sex;
		$fields['birthday'] 		=	$this->birthday;
		$fields['province'] 		=	$this->province;
		$fields['city'] 			=	$this->city;
		$fields['signature'] 		=	$this->signature;
		$fields['area'] 			=	$this->area;
		
		
		$domain = new Domain_User();
		
		foreach($fields as $k=>$v){
			$fields[$k]=$this->checkNull($v);
			if($fields[$k]===''){unset($fields[$k]);}
		}
		if(empty($fields)){
			$rs['code'] = 1003;
			$rs['msg'] = '更改字段不匹配';
			return $rs;
		}
		if(array_key_exists('user_nicename', $fields)){
			$isexist = $domain->checkName($this->uid,$fields['user_nicename']);
			if(!$isexist){
				$rs['code'] = 1002;
				$rs['msg'] = '昵称重复，请修改';
				return $rs;
			}
			$fields['user_nicename']=$this->filterField($fields['user_nicename']);
		}
		
		$info = $domain->userUpdate($this->uid,$fields);
	 
		if($info===false){
			$rs['code'] = 1001;
			$rs['msg'] = '修改失败';
			return $rs;
		}
		/* 清除缓存 */
		$this->delCache("userinfo_".$this->uid);
		$rs['msg']='修改成功';
		return $rs;
	}

	/**
	 * 修改密码
	 * @desc 用于修改用户信息
	 * @return int code 操作码，0表示成功
	 * @return array info 
	 * @return string list[0].msg 修改成功提示信息
	 * @return string msg 提示信息
	 */
	public function updatePass() {
		$rs = array('code' => 0, 'msg' => '', 'info' => array());
		
		$uid=$this->uid;
		$token=$this->token;
		$oldpass=$this->oldpass;
		$pass=$this->pass;
		$pass2=$this->pass2;
		
		$checkToken=$this->checkToken($uid,$token);
		if($checkToken==7000){
			$rs['code'] = $checkToken;
			$rs['msg'] = 'Token错误或已过期，请重新登录';
			return $rs;
		}
		
		if($pass != $pass2){
			$rs['code'] = 1002;
			$rs['msg'] = '两次新密码不一致';
			return $rs;
		}
		
		$check = $this->passcheck($pass);
		if($check== 0 ){
			$rs['code'] = 1004;
			$rs['msg'] = '密码为6-12位数字与字母组合';
			return $rs;										
		}else if($check== 2){
			$rs['code'] = 1005;
			$rs['msg'] = '密码不能纯数字或纯字母';
			return $rs;										
		}
		
		$domain = new Domain_User();
		$info = $domain->updatePass($uid,$oldpass,$pass);
	 
		if($info==1003){
			$rs['code'] = 1003;
			$rs['msg'] = '旧密码错误';
			return $rs;
		}else if($info===false){
			$rs['code'] = 1001;
			$rs['msg'] = '修改失败';
			return $rs;
		}

		$rs['info'][0]['msg']='修改成功';
		return $rs;
	}	
	
	/**
	 * 我的钻石
	 * @desc 用于获取用户余额,充值规则 支付方式信息
	 * @return int code 操作码，0表示成功
	 * @return array info 
	 * @return string info[0].coin 用户余额
	 * @return array info[0].rules 充值规则
	 * @return string info[0].rules[].id 充值规则
	 * @return string info[0].rules[].coin 钻石
	 * @return string info[0].rules[].money 价格
	 * @return string info[0].rules[].money_ios 苹果充值价格
	 * @return string info[0].rules[].product_id 苹果项目ID
	 * @return string info[0].rules[].give 赠送钻石，为0时不显示赠送
	 * @return string info[0].aliapp_switch 支付宝开关，0表示关闭，1表示开启
	 * @return string info[0].aliapp_partner 支付宝合作者身份ID
	 * @return string info[0].aliapp_seller_id 支付宝帐号	
	 * @return string info[0].aliapp_key_android 支付宝安卓密钥
	 * @return string info[0].aliapp_key_ios 支付宝苹果密钥
	 * @return string info[0].wx_switch 微信支付开关，0表示关闭，1表示开启
	 * @return string info[0].wx_appid 开放平台账号AppID
	 * @return string info[0].wx_appsecret 微信应用appsecret
	 * @return string info[0].wx_mchid 微信商户号mchid
	 * @return string info[0].wx_key 微信密钥key
	 * @return string msg 提示信息
	 */
	public function getBalance() {
		$rs = array('code' => 0, 'msg' => '', 'info' => array());
		
		$checkToken=$this->checkToken($this->uid,$this->token);
		if($checkToken==700){
			$rs['code'] = $checkToken;
			$rs['msg'] = 'Token错误或已过期，请重新登录';
			return $rs;
		}
		
		$domain = new Domain_User();
		$info = $domain->getBalance($this->uid);
		
		$key='getChargeRules';
		$rules=$this->getcaches($key);
		$rules=false;
		if(!$rules){
			$rules= $domain->getChargeRules();
			$this->setcaches($key,$rules,60);
		}
		$info['rules'] =$rules;
		
		$configpri=$this->getConfigPri();
		
		$info['aliapp_switch']=$configpri['aliapp_switch'];
		$info['aliapp_partner']=$configpri['aliapp_switch']==1?$configpri['aliapp_partner']:'';
		$info['aliapp_seller_id']=$configpri['aliapp_switch']==1?$configpri['aliapp_seller_id']:'';
		$info['aliapp_key_android']=$configpri['aliapp_switch']==1?$configpri['aliapp_key_android']:'';
		$info['aliapp_key_ios']=$configpri['aliapp_switch']==1?$configpri['aliapp_key_ios']:'';

		$info['wx_switch']=$configpri['wx_switch'];
		$info['wx_appid']=$configpri['wx_switch']==1?$configpri['wx_appid']:'';
		$info['wx_appsecret']=$configpri['wx_switch']==1?$configpri['wx_appsecret']:'';
		$info['wx_mchid']=$configpri['wx_switch']==1?$configpri['wx_mchid']:'';
		$info['wx_key']=$configpri['wx_switch']==1?$configpri['wx_key']:'';
		
	 
		$rs['info'][0]=$info;
		return $rs;
	}
	
	/**
	 * 我的收益
	 * @desc 用于获取用户收益，包括可体现金额，今日可提现金额
	 * @return int code 操作码，0表示成功
	 * @return array info 
	 * @return string info[0].votes 总映票
	 * @return string info[0].cuckoo 谷子
	 * @return string info[0].todaycash 今日可体现金额
	 * @return string info[0].total 可体现金额
	 * @return string msg 提示信息
	 */
	 
	public function getProfit() {
		$rs = array('code' => 0, 'msg' => '', 'info' => array());
		
		$checkToken=$this->checkToken($this->uid,$this->token);
		if($checkToken==7000){
			$rs['code'] = $checkToken;
			$rs['msg'] = 'Token错误或已过期，请重新登录';
			return $rs;
		} 
		
		$domain = new Domain_User();
		$info = $domain->getProfit($this->uid);
	 
		$rs['info']=$info;
		return $rs;
	}	
	
	/**
	 * 用户提现
	 * @desc 用于进行用户提现
	 * @return int code 操作码，0表示成功
	 * @return array info 
	 * @return string info[0].msg 提现成功信息
	 * @return string msg 提示信息
	 */
	 
	public function setCash() {
		$rs = array('code' => 0, 'msg' => '', 'info' => array());
		
		$checkToken=$this->checkToken($this->uid,$this->token);
		if($checkToken==7000){
			$rs['code'] = $checkToken;
			$rs['msg'] = 'Token错误或已过期，请重新登录';
			return $rs;
		}
		
		$domain = new Domain_User();
		$info = $domain->setCash($this->uid,$this->money,$this->guzi);
		if($info==1001){
			$rs['code'] = 1001;
			$rs['msg'] = '今日提现已达上限';
			return $rs;
		}else if($info==1003){
			$rs['code'] = 1003;
			$rs['msg'] = '请先进行身份认证';
			return $rs;
		}else if($info==1004){
			$config=$this->getConfigPri();
			$rs['code'] = 1004;
			$rs['msg'] = '提现最低额度为'.$config['cash_min'].'元';
			return $rs;
		}else if($info==1005){
			$rs['code'] = 1005;
			$rs['msg'] = '提现金额不能大于可提现金额';
			return $rs;
		}else if(!$info){
			$rs['code'] = 1002;
			$rs['msg'] = '提现失败，请重试';
			return $rs;
		}
	 
		$rs['info'][0]['msg']='提现成功';
		return $rs;
	}		
	
	/**
	 * 判断是否关注
	 * @desc 用于判断是否关注
	 * @return int code 操作码，0表示成功
	 * @return array info 
	 * @return string info[0].isattent 关注信息，0表示未关注，1表示已关注
	 * @return string msg 提示信息
	 */
	public function isAttent() {
		$rs = array('code' => 0, 'msg' => '', 'info' => array());
		
		$info = $this->isAttention($this->uid,$this->touid);
	 
		$rs['info'][0]['isattent']=(string)$info;
		return $rs;
	}			
	
	/**
	 * 关注/取消关注
	 * @desc 用于关注/取消关注
	 * @return int code 操作码，0表示成功
	 * @return array info 
	 * @return string info[0].isattent 关注信息，0表示未关注，1表示已关注
	 * @return string msg 提示信息
	 */
	public function setAttent() {
		$rs = array('code' => 0, 'msg' => '', 'info' => array());	
		$checkToken=$this->checkToken($this->uid,$this->token);
		if($checkToken==700){
			$rs['code'] = $checkToken;
			$rs['msg'] = 'Token错误或已过期，请重新登录';
			return $rs;
		}
		if($this->uid==$this->touid){
			$rs['code']=1001;
			$rs['msg']='不能关注自己';
			return $rs;	
		}	
		
		$domain = new Domain_User();
		$info = $domain->setAttent($this->uid,$this->touid);
		if($info==0){
			$rs['msg']='未关注';
		}else{
			$rs['msg']='已关注';
		}
	 
		$rs['info']['isattent']=(string)$info;
		return $rs;
	}			
	
	/**
	 * 判断是否拉黑
	 * @desc 用于判断是否拉黑
	 * @return int code 操作码，0表示成功
	 * @return array info 
	 * @return string info[0].isattent  拉黑信息,0表示未拉黑，1表示已拉黑
	 * @return string msg 提示信息
	 */
	public function isBlacked() {
			$rs = array('code' => 0, 'msg' => '', 'info' => array());
			
			$info = $this->isBlack($this->uid,$this->touid);
		 
			$rs['info'][0]['isblack']=(string)$info;
			return $rs;
	}			
		
	/**
	 * 拉黑/取消拉黑
	 * @desc 用于拉黑/取消拉黑
	 * @return int code 操作码，0表示成功
	 * @return array info 
	 * @return string info[0].isblack 拉黑信息,0表示未拉黑，1表示已拉黑
	 * @return string msg 提示信息
	 */
	public function setBlack() {
			$rs = array('code' => 0, 'msg' => '', 'info' => array());
			
			$domain = new Domain_User();
			$info = $domain->setBlack($this->uid,$this->touid);
		 
			$rs['info'][0]['isblack']=(string)$info;
			return $rs;
	}		
	
	/**
	 * 获取找回密码短信验证码
	 * @desc 用于找回密码获取短信验证码
	 * @return int code 操作码，0表示成功,2发送失败
	 * @return array info 
	 * @return array info[0]  
	 * @return string msg 提示信息
	 */
	 
	public function getBindCode() {
		$rs = array('code' => 0, 'msg' => '', 'info' => array());
		
		$mobile = $this->mobile;
		
		$ismobile=$this->checkMobile($mobile);
		if(!$ismobile){
			$rs['code']=1001;
			$rs['msg']='请输入正确的手机码';
			return $rs;	
		}

		if($_SESSION['set_mobile']==$mobile && $_SESSION['set_mobile_expiretime']> time() ){
			$rs['code']=1002;
			$rs['msg']='验证码5分钟有效，请勿多次发送';
			return $rs;
		}

		$mobile_code = $this->random(6,1);
		
		/* 发�?�验证码 */
	/* 	$result=$this->sendCode($mobile,$mobile_code);
		if($result['code']===0){
			$_SESSION['set_mobile'] = $mobile;
			$_SESSION['set_mobile_code'] = $mobile_code;
			$_SESSION['set_mobile_expiretime'] = time() +60*5;	
		}else{
			$rs['code']=1002;
			$rs['msg']=$result['msg'];
		} */
		
		$_SESSION['set_mobile'] = $mobile;
		$_SESSION['set_mobile_code'] = $mobile_code;
		$_SESSION['set_mobile_expiretime'] = time() +60*5;
		
		return $rs;
	}	
	
	public function setAlipay(){
		$rs = array('code' => 0, 'msg' => '', 'info' => array());
		
		$alipay = $this->alipay;
		$domain = new Domain_User();
		
		if($this->mobile!=$_SESSION['reg_mobile']){
			$rs['code'] = 1001;
			$rs['msg'] = '手机号码不一致';
			return $rs;
		}
		
		if($this->code!=$_SESSION['reg_mobile_code']){
			$rs['code'] = 1002;
			$rs['msg'] = '验证码错误';
			return $rs;
		}
		
		$result = $domain->setAlipay($this->alipay,$this->mobile,$this->real_name);
		
		if($result==false){
			$rs['code'] = 1;
			$rs['msg'] = '绑定失败';
			return $rs;
		} else {
			$rs['msg'] = '绑定成功';
		}
		
		$_SESSION['set_alipay'] = $alipay;
		//$userinfo = $domain->getRealName($this->uid);
		$_SESSION['set_realname'] = $this->real_name;
		//$_SESSION['set_mobile'] = $this->mobile;
		//$_SESSION['set_mobile_code'] = $this->code;
		return $rs;
	}
	
	public function setAuth(){
		$rs = array('code' => 0, 'msg' => '', 'info' => array());
	
		$domain = new Domain_User();
	
		$result = $domain->setAuth($this->uid,$this->real_name,$this->mobile,$this->cer_no);
	
		if($result==false){
			$rs['code'] = 1;
			$rs['msg'] = '认证失败';
			return $rs;
		} else {
			$rs['msg'] = '认证成功';
		}
	
		return $rs;
	}
	
	/**
	 * 绑定提现账号
	 * @desc 用于绑定提现账号
	 * @return int code 操作码，0表示成功,2发送失败
	 * @return array info
	 * @return array info[0]
	 * @return string msg 提示信息
	 */
	public function setCashAccount(){
		$rs = array('code' => 0, 'msg' => '', 'info' => array());
		
		if($this->alipay!=$_SESSION['set_alipay']){
			$rs['code'] = 1003;
			$rs['msg'] = '支付宝不一致';
			return $rs;
		}
		
		if($this->real_name!=$_SESSION['set_realname']){
			$rs['code'] = 1004;
			$rs['msg'] = '真实姓名不一致';
			return $rs;
		}
		
		if($this->mobile!=$_SESSION['set_mobile']){
			$rs['code'] = 1001;
			$rs['msg'] = '手机号码不一致';
			return $rs;
		}
		
		if($this->code!=$_SESSION['set_mobile_code']){
			$rs['code'] = 1002;
			$rs['msg'] = '验证码错误';
			return $rs;
		}
		
		$checkToken=$this->checkToken($this->uid,$this->token);
		if($checkToken==7000){
			$rs['code'] = $checkToken;
			$rs['msg'] = 'Token错误或已过期，请重新登录';
			return $rs;
		}
			
		$domain = new Domain_User();
		
		//更新数据�?
		$data=array("mobile"=>$mobile);
		$result = $domain->userUpdate($this->uid,$data);
		
		if($result===false){
			$rs['code'] = 1003;
			$rs['msg'] = '绑定失败';
			return $rs;
		}
		
		$rs['info'][0]['msg'] = '绑定成功';
		
		return $rs;
	}

	/**
	 * 绑定手机号
	 * @desc 用于用户绑定手机号
	 * @return int code 操作码，0表示成功，非0表示有错误
	 * @return array info 
	 * @return object info[0].msg 绑定成功提示
	 * @return string msg 提示信息
	 */
	public function setMobile() {

		$rs = array('code' => 0, 'msg' => '', 'info' => array());

		if($this->mobile!=$_SESSION['set_mobile']){
			$rs['code'] = 1001;
			$rs['msg'] = '手机号码不一致';
			return $rs;					
		}

		if($this->code!=$_SESSION['set_mobile_code']){
			$rs['code'] = 1002;
			$rs['msg'] = '验证码错误';
			return $rs;					
		}	

		$checkToken=$this->checkToken($this->uid,$this->token);
		if($checkToken==700){
			$rs['code'] = $checkToken;
			$rs['msg'] = 'Token错误或已过期，请重新登录';
			return $rs;
		}
			
		$domain = new Domain_User();

		//更新数据�?
		$data=array("mobile"=>$mobile);
		$result = $domain->userUpdate($this->uid,$data);
		if($result===false){
			$rs['code'] = 1003;
			$rs['msg'] = '绑定失败';
			return $rs;
		}
	
		$rs['info'][0]['msg'] = '绑定成功';

		return $rs;
	}		
	
	/**
	 * 关注列表
	 * @desc 用于获取用户的关注列表
	 * @return int code 操作码，0表示成功
	 * @return array info 
	 * @return string info[].isattent 是否关注,0表示未关注，1表示已关注
	 * @return string msg 提示信息
	 */
	public function getFollowsList() {
		$rs = array('code' => 0, 'msg' => '', 'info' => array());
		
		$domain = new Domain_User();
		$info = $domain->getFollowsList($this->uid,$this->touid,$this->p);
	 
		$rs['info']=$info;
		return $rs;
	}	
	
	/**
	 * 邀请列表
	 * @desc 用于获取用户的邀请列表
	 * @return int code 操作码，0表示成功
	 * @return array info

	 * @return string msg 提示信息
	 */
	public function getInviteList(){
		$rs = array('code' => 0, 'msg' => '', 'info' => array());
		
		$domain = new Domain_User();
		$info = $domain->getInviteList($this->uid,$this->p);
		if($info){
			$rs['info'] = $info;
			$rs['msg'] = '获取成功';
		} else {
			$rs['msg'] = '获取失败';
		}
		return $rs;
	}
	
	/**
	 * 邀请好友
	 * @desc 用于邀请好友
	 * @return int code 操作码，0表示成功
	 * @return array info

	 * @return string msg 提示信息
	 */
	public function setInvite(){
		$rs = array('code' => 0, 'msg' => '', 'info' => array());
	
		$domain = new Domain_User();
		$info = $domain->setInvite($this->uid,$this->touid);
		if($info){
			$rs['info'] = $info;
			$rs['msg'] = '邀请成功';
		} else {
			$rs['msg'] = '邀请失败';
		}
		return $rs;
	}
	
	/**
	 * 粉丝列表
	 * @desc 用于获取用户的关注列表
	 * @return int code 操作码，0表示成功
	 * @return array info 
	 * @return string info[].isattent 是否关注,0表示未关注，1表示已关注
	 * @return string msg 提示信息
	 */
	public function getFansList() {
		$rs = array('code' => 0, 'msg' => '', 'info' => array());
		
		$domain = new Domain_User();
		$info = $domain->getFansList($this->uid,$this->touid,$this->p);
	 
		$rs['info']=$info;
		return $rs;
	}	

	/**
	 * 黑名单列表
	 * @desc 用于获取用户的名单列表
	 * @return int code 操作码，0表示成功
	 * @return array info 用户基本信息
	 * @return string msg 提示信息
	 */
	public function getBlackList() {
		$rs = array('code' => 0, 'msg' => '', 'info' => array());
		
		$domain = new Domain_User();
		$info = $domain->getBlackList($this->uid,$this->p);
	 
		$rs['info']=$info;
		return $rs;
	}		
	
	/**
	 * 直播记录
	 * @desc 用于获取用户的直播记录?
	 * @return int code 操作码，0表示成功
	 * @return array info 
	 * @return string info[].nums 观看人数
	 * @return string info[].datestarttime 格式化的直播时间?
	 * @return string info[].dateendtime 格式化的结束时间
	 * @return string info[].video_url 回放地址
	 * @return string info[].file_id 回放标示
	 * @return string msg 提示信息
	 */
	public function getLiverecord() {
		$rs = array('code' => 0, 'msg' => '', 'info' => array());
		
		$domain = new Domain_User();
		$info = $domain->getLiverecord($this->touid,$this->p);
	 
		$rs['info']=$info;
		return $rs;
	}	
	
	/**
	 * 积分记录
	 * @desc 用于获取用户的积分记录
	 * @return int code 操作码，0表示成功
	 * @return array info
	 * @return string info[].uid 用户ID
	 * @return string info[].point 积分数量
	 * @return string info[].totalscore 总积分
	 * @return string info[].type 积分变化类型 0增加 1减少
	 * @return string info[].desc 积分title
	 * @return string info[].addtime 时间
	 * @return string msg 提示信息
	 */
	public function getScorerecord() {
		$rs = array('code' => 0, 'msg' => '', 'info' => array());
		
		$domain = new Domain_User();
		$info = $domain->getScorerecord($this->uid,$this->p);
		
		$rs['info']=$info;
		return $rs;
	}

    /**
     *获取阿里云cdn录播地址
     *@desc 如果使用的阿里云cdn，则使用该接口获取录播地址?
     *@return int code 操作码，0表示成功
     *@return string info[0].url 录播视频地址
	 * @return string msg 提示信息
    */		
    public function getAliCdnRecord(){

        $rs = array('code' => 0,'msg' => '', 'info' => array());
        $domain = new Domain_User();
        $info = $domain->getAliCdnRecord($this->id);
        if($info==1001){
            $rs['code']=1001;
            $rs['msg']='Access key Id or access key secret is invalid';
            return $rs;
        }else if( $info==1002){
            $rs['code']=1002;
            $rs['msg']='直播回放不存在';
            return $rs;
        }

        $rs['info'][0]['url']=$info;

        return $rs;
    }	

    /**
     * 个人主页
     * @desc 用于获取个人主页数据
     * @return int code 操作码，0表示成功
     * @return array info
     * @return string info[0].follows 关注数
     * @return string info[0].fans 粉丝数
     * @return string info[0].isattention 是否关注，0表示未关注，1表示已关注
     * @return string info[0].isblack 我是否拉黑对方，0表示未拉黑，1表示已拉黑
     * @return string info[0].isblack2 对方是否拉黑我，0表示未拉黑，1表示已拉黑
     * @return array info[0].contribute 贡献榜前三
     * @return array info[0].contribute[].avatar 头像
     * @return string info[0].islive 是否正在直播，0表示未直播，1表示直播
     * @return array info[0].liveinfo 直播信息
     * @return array info[0].liverecord 直播记录
     * @return string msg 提示信息
     */
	public function getUserHome() {
		$rs = array('code' => 0, 'msg' => '', 'info' => array());
		
		$domain = new Domain_User();
		$info=$domain->getUserHome($this->uid,$this->touid);
		
		$rs['info'][0]=$info;
		return $rs;
	}		

	/**
	 * 个人主页 
	 * @desc 用于获取个人主页数据
	 * @return int code 操作码，0表示成功
	 * @return array info 排行榜列表?
	 * @return string info[].total 贡献总数
	 * @return string info[].userinfo 用户信息
	 * @return string msg 提示信息
	 */
	public function getContributeList() {
		$rs = array('code' => 0, 'msg' => '', 'info' => array());
		
		$domain = new Domain_User();
		$info=$domain->getContributeList($this->touid,$this->p);
		
		$rs['info']=$info;
		return $rs;
	}	
	
	/**
     * 私信用户信息
     * @desc 用于获取其他用户基本信息
     * @return int code 操作码，0表示成功，1表示用户不存在
     * @return array info   
     * @return string info[0].id 用户ID
     * @return string info[0].isattention 我是否关注对方，0未关注，1已关注
     * @return string info[0].isattention2 对方是否关注我，0未关注，1已关注
     * @return string msg 提示信息
     */
    public function getPmUserInfo() {
        $rs = array('code' => 0, 'msg' => '', 'info' => array());

        $info = $this->getUserInfo($this->touid);
		 if (empty($info)) {
            $rs['code'] = 1001;
            $rs['msg'] = T('user not exists');
            return $rs;
        }
        $info['isattention2']= (string)$this->isAttention($this->touid,$this->uid);
        $info['isattention']= (string)$this->isAttention($this->uid,$this->touid);
       
        $rs['info'][0] = $info;

        return $rs;
    }		

	/**
	 * 获取多用户信息 
	 * @desc 用于获取获取多用户信息
	 * @return int code 操作码，0表示成功
	 * @return array info 排行榜列表
	 * @return string info[].utot 是否关注，0未关注，1已关注
	 * @return string info[].ttou 对方是否关注我，0未关注，1已关注
	 * @return string msg 提示信息
	 */
	public function getMultiInfo() {
		$rs = array('code' => 0, 'msg' => '', 'info' => array());
		
		$uids=explode(",",$this->uids);

		foreach ($uids as $k=>$userId) {
			if($userId){
				$userinfo= $this->getUserInfo($userId);
				if($userinfo){
					$userinfo['utot']= $this->isAttention($this->uid,$userId);
					
					$userinfo['ttou']= $this->isAttention($userId,$this->uid);
					
					if($userinfo['utot']==$this->type){						
						$rs['info'][]=$userinfo;
					}												
				}					
			}
		}

		return $rs;
	}			
}
