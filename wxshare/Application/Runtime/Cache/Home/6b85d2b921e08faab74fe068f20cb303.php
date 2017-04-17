<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<meta content="telephone=no" name="format-detection">
	<title><?php echo ($config['sitename']); ?></title>
	<link rel="stylesheet" type="text/css" href="/wxshare/Public/phone/css/wap_base.css">
	<style type="text/css">
		body { }
		.user { left:15px;top:15px;padding: 3px;background-color: #7F7F7D;border-radius: 50px;padding-right: 20px;opacity: 0.85}
		.user-pic { width: 42px;height:42px;border-radius: 42px;display: block;}
		.user-wz { padding-left:17px;background:url(/wxshare/Public/phone/images/wz.jpg) no-repeat 0 0;background-size: 14px;margin-left: 50px;color: #fff}
		.user-name { margin-left: 50px;color: #fff;font-size: 14px;max-width: 100px;}
		.num { border: 2px solid #fff;width: 43px;height:43px;border-radius: 43px;right:15px;top:15px;box-shadow: inset 0px 1px 2px #666}
		.num-img { width: 25px;margin: 5px 0 0 10px;}
		.num-s { width: 100%;bottom:2px;left:0;text-align: center;color: #fff;text-shadow: 0px 1px 2px #666}
		.btn-box-bg { width: 80%;height: 46px;background-color: #000;opacity: 0.4;top:640;left:0;}
		.btn-box { width: 80%;height: 46px;top:640;line-height: 37px;z-index: 2;background: url(/wxshare/Public/phone/images/bar_bg.png)}
		.k, .a { width: 40%;height: 36px;border-radius: 36px;padding-left: 40px;box-sizing:border-box;top:5px;}
		.k { left:7%;color: #000;background:#fff url(/wxshare/Public/phone/images/k.png) no-repeat 17px 10px;background-size: 17px;}
		.a { left:50%;}
		.desc { bottom:56px;left:0;width: 90%;height: 20px;text-overflow:ellipsis;white-space:nowrap;overflow: hidden;padding:0 5%;color: #fff;font-size: 16px}
		.btn { width: 60px;height: 60px;background: url(/wxshare/Public/phone/images/play.png) no-repeat 0 0;z-index:1000;background-size: 60px;left:50%;top:50%;margin: -30px 0 0 -30px;}
		.pause { background-image: url(/wxshare/Public/phone/images/pause.png);}
		.loading { background-image: url(/wxshare/Public/phone/images/loading.gif);}

		.code {
			position: absolute;
			width:150px;
			height:150px;
			top:450px;
			right: -30px;
		}
		.code img {
			width:150px;
			height:150px;
		}
		.code p {
			color: #000;
			text-align: center;
			font-size: 16px;
		}
		.main {
			position: relative;
			margin: 0 auto;
		}
	</style>
	<script src="/wxshare/Public/phone/js/jquery-1.9.1.min.js"></script>
	<script src="/wxshare/Public/phone/js/jwplayer.js?v=5"></script>
	<script type="text/javascript">jwplayer.key="lsUqQ+PB1edH+bYoMb85Yr5CuPlXyhK/ngcyNQ==";</script>

</head>
<body onresize="resize()">

<input type="hidden" id="liveid" value="<?php echo ($liveid); ?>">
<input type="hidden" id="uid" value="<?php echo ($uid); ?>">
<input type="hidden" id="view_uid" value="<?php echo ($view_uid); ?>">

<div class="main">
	<center>
		<div style="width:360px;margin:0 auto;position: relative;">
			<div  id='container'></div>


			<div class="btn-box pa" style="width:360px;margin:0 auto;position: absolute;bottom: 0;left: 0;">
				<img src="/wxshare/Public/phone/images/mty.png" style="width:10%;">
				<img src="/wxshare/Public/phone/images/mg_room_slogan.png" id="open_logo" style="bottom: 4px;height: 36px;width: auto;">
			</div>
			<p class="desc pa"></p>
			<div class="btn play pa" id="play-control" style="display:none"></div>
			<div style="height: 60px;width:100%;top: 60%;position: absolute;z-index: 100000;color:#ffffff" id="media_status_msg"></div>
			<div class="share-box pa none"></div>
		</div>

	</center>

	<div class="user pa" style="display:none">
		<img src="" class="user-pic fl" id="portrait"/>
		<h3 class="user-name to" id="nick"></h3>
		<h4 class="user-wz" id="area" ></h4>
	</div>
	<div class="num pa" style="display:none">
		<img src="/wxshare/Public/phone/images/w_01.png" class="num-img" />
		<span class='num-s pa' id="user_num"></span>
	</div>

<!-- 	<div class="code">
		<img src="<?php echo ($siteconfig['apppic']); ?>">
		<p>扫码下载APP</p>
	</div> -->
</div>
<script>
<?php echo ($media_info); ?>


</script> 

<script type="text/javascript">
	var player = null;
	function get_user_num() {
		/*
		$.ajax( {
			url:'/s/?act=get_user_num',
			data:{
				live_id: $('#live_id').val()
			},
			type:'post',
			cache:false,
			dataType:'json',
			success:function(data) {
				if (typeof data.total != 'undefined') {
					$('#user_num').html(data.total);
				}
			},
			error : function() {

			}
		});
		*/
	}
	function getWidth(){
		return 360;
	};
	function getHeight() {
		return 640;
	};

	function play() {
		if (media_info.status == -1) {
			alert('此视频目前不能播放');
			return;
		}
		if (media_info.status == 1) {

			player = jwplayer("container").setup({
				flashplayer: '/wxshare/Public/phone/js/jwplayer.flash.swf',
				id: 'playerID',
				width: getWidth(),
				height: getHeight(),
				skin: "/wxshare/Public/phone/js/vapor.xml",
				file: media_info.file[0],
				image: media_info.image,
				primary: "flash",
				controls: false,
				events: {
					onComplete: onComplete,
					onReady: function () {
						$('#play-control').show();
						$('#media_status_msg').html('直播中，点击观看');
						set_pos();
					},
					onPlay: onPlay,
					onPause: onPause,
					onBuffer: onBuffer,
					onDisplayClick: onDisplayClick,
					onSetupError: onSetupError,
					onBufferChange: function () { console.log("onBufferChange!!!"); },
					onBufferFull: function () { console.log("onBufferFull!!!"); }
				}

			});
		}else{
         
			var playlist = [];
			for(var i = 0; i < media_info.file.length; i++) {
				playlist.push({file: media_info.file[i], image: media_info.image});
			}
			player = jwplayer("container").setup({
				flashplayer: '/wxshare/Public/phone/js/jwplayer.flash.swf',
				id: 'playerID',
				width: '368',
				height: '640',
				skin: "/wxshare/Public/phone/js/bekle.xml?t="+Math.random(),
				playlist: playlist,
				primary: "flash",
				controls: true,
				events: {
					onComplete: onComplete,
					onReady: function () {
						//$('#media_status_msg').html('24小时保鲜期已过<br>下载APP观看TA的更多直播吧');
						set_pos();
					},
					onPlay: onPlay,
					onPause: onPause,
					onBuffer: onBuffer,
					onDisplayClick: onDisplayClick,
					onSetupError: onSetupError,
					onBufferChange: function () { console.log("onBufferChange!!!"); },
					onBufferFull: function () { console.log("onBufferFull!!!"); }
				}

			});
			
		}
		get_user_num();
	}
	function onComplete() {
		//alert('播放完毕');
	}
	function onBuffer() {
		$('#media_status_msg').hide();

		if (media_info.status == 1) {
			$('#play-control').show();
			$('#play-control').attr('class', 'btn loading pa');
		}
		console.log('onBuffer');
	}
	function onPlay() {
		$('#media_status_msg').hide();
		if (media_info.status == 1) {
			$('#play-control').hide();
			$('#play-control').attr('class', 'btn play pa');
		}
	}
	function onPause() {
		$('#media_status_msg').hide();

		if (media_info.status == 1) {
			$('#play-control').show();
			$('#play-control').attr('class', 'btn play pa');
		}
		playing = false;
		console.log('onPause');
	}
	function onDisplayClick() {
		player.pause();
	}
	function onSetupError(a, b) {
		if (media_info.status == 1) {
			$('#play-control').hide();
		}

		if ((media_info.forbid == 1 && media_info.reason != '') || media_info.shieldstat === false) {
			$('#media_status_msg').html('<p style="text-align:center;color:#ffffff;">'+media_info.reason+'</p>');
			$('#media_status_msg').show();
		}
	}
	function user_show() {

		if (trim($('#nick').html()) == '') {
			$('.user').hide();
		}else{
			$('.user').show();
		}
	}
	function set_pos() {
		var play_left = $('#container_wrapper').offset().left;
		$('.user').css('left', 145);
		$('.num').css('left', 145 + getWidth() - 50);
		user_show();
		if (media_info.status == 1) {
			$('.num').show();
		}else{
			$('.num').hide();
		}
		//$('.num').show();
		//$('.user').show();
	}
	function resize() {
		set_pos();
	}

	var playing = false;

	$(document).ready(function(){
		if ((media_info.forbid == 1 && media_info.reason != '') || media_info.shieldstat === false) {
			$('#media_status_msg').html('<p style="text-align:center;color:#000;">'+media_info.reason+'</p>');
			$('#media_status_msg').show();
		}else{
			play();
			$('#play-control').click(function() {
				player.play();
			});
		}

	});

</script>

</body>
</html>