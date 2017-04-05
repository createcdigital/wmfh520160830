<?php
    /**
     * 获取设备操作系统
     * @return string
     */
    function getDeviceOS()
    {
        $agent = strtolower($_SERVER['HTTP_USER_AGENT']);
        if(strpos($agent, 'windows nt')) {
            $platform = 'pc';
        } elseif(strpos($agent, 'macintosh')) {
            $platform = 'pc';
        } elseif(strpos($agent, 'ipod')) {
            $platform = 'phone';
        } elseif(strpos($agent, 'ipad')) {
            $platform = 'phone';
        } elseif(strpos($agent, 'iphone')) {
            $platform = 'phone';
        } elseif (strpos($agent, 'android')) {
            $platform = 'phone';
        } elseif(strpos($agent, 'unix')) {
            $platform = 'pc';
        } elseif(strpos($agent, 'linux')) {
            $platform = 'pc';
        } else {
            $platform = 'pc';
        }
        return $platform;
    }

    $isphone = "";
    if(getDeviceOS() == "phone"){
        if ( strpos($_SERVER['HTTP_USER_AGENT'], 'MicroMessenger') !== false ) {
            if(!isset($_COOKIE["openid"]))
            {
               // #$url = 'http://wmf.mz-weixin-qq.com'.$_SERVER["REQUEST_URI"];
               //  $url = $_SERVER["REQUEST_URI"];
               //  setcookie("url", $url, time()+7000, "/", "wmf.mz-weixin-qq.com");

               //  header("Location:weChat/autho.php");
                $openid = uniqid("MONI_", true);
                setcookie("openid", $openid, time()+315360000, "/", "wmf.mz-weixin-qq.com");
            }else{}
        }else{
             $isphone = "true";
             $_COOKIE["openid"] = uniqid("MONI_", true);
        }
     }else{
        header("Location:/wmfh520160830/pc/index.html");
     }
?>
<!DOCTYPE HTML>
<html>
<head>
    <!-- createc_ecs_2 -->
    <!-- douguomeishi share interface code-->
    <navi-items>
    <navi-item
        id = "share"
        img = "http://wmf.mz-weixin-qq.com/wmfh520160830/resource/assets/share-icon.jpg"
        title = "WMF携豪礼提醒您：秋运你团圆了吗"
        thumb = "http://wmf.mz-weixin-qq.com/wmfh520160830/resource/assets/share-icon.jpg"
        content = "【聚美味聚健康聚幸福】只需两步，把价值6888元WMF奈彩米新品带回家！"
        <?php
            if($_GET['sharId'] != null)
                echo "page = \"http://wmf.mz-weixin-qq.com/wmfh520160830/index.php?channel=".$_GET['channel']."&sharId=".$_GET['sharId']."\"";
            else
                echo "page = \"http://wmf.mz-weixin-qq.com/wmfh520160830/index.php?channel=".$_GET['channel']."\"";
        ?>
        >
    </navi-items>
    <!-- end douguomeishi share interface code -->
    <meta charset="utf-8">
    <title>德国WMF</title>
    <meta name="viewport" content="width=device-width,initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no"/>
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <meta name="full-screen" content="true"/>
    <meta name="screen-orientation" content="portrait"/>
    <meta name="x5-fullscreen" content="true"/>
    <meta name="360-fullscreen" content="true"/>
    <style>
        html, body {
            -ms-touch-action: none;
            background: #000;
            padding: 0;
            border: 0;
            margin: 0;
            height: 100%;
        }
        .sharebtn_in_con_sx {
            width: 33px;
            background: #dd1862;
            text-align: center;
            height: 32px;
            padding: 20px 0px;
            font-size: 14px;
            color: #fff;
            margin: 0px auto 0px;
            position: relative;
            top: -80px;
            border-radius: 6px;
            position: fixed;
            right: 0px;
            top: 20%;
            line-height: 16px;
            z-index: 1000;
            border-top-right-radius: 0em;
            border-bottom-right-radius: 0em;
            z-index: 999;
        }
    </style>


    <!--这个标签为通过egret提供的第三方库的方式生成的 javascript 文件。删除 modules_files 标签后，库文件加载列表将不会变化，请谨慎操作！-->
    <!--modules_files_start-->
	<script egret="lib" src="http://wmf.mz-weixin-qq.com/wmfh520160830/libs/modules/egret/egret.min.js"></script>
	<script egret="lib" src="http://wmf.mz-weixin-qq.com/wmfh520160830/libs/modules/egret/egret.web.min.js"></script>
	<script egret="lib" src="http://wmf.mz-weixin-qq.com/wmfh520160830/libs/modules/game/game.min.js"></script>
	<script egret="lib" src="http://wmf.mz-weixin-qq.com/wmfh520160830/libs/modules/game/game.web.min.js"></script>
	<script egret="lib" src="http://wmf.mz-weixin-qq.com/wmfh520160830/libs/modules/res/res.min.js"></script>
	<script egret="lib" src="http://wmf.mz-weixin-qq.com/wmfh520160830/libs/modules/tween/tween.min.js"></script>
	<!--modules_files_end-->

    <!--这个标签为不通过egret提供的第三方库的方式使用的 javascript 文件，请将这些文件放在libs下，但不要放在modules下面。-->
    <!--other_libs_files_start-->
    <!--other_libs_files_end-->

    <!--这个标签会被替换为项目中所有的 javascript 文件。删除 game_files 标签后，项目文件加载列表将不会变化，请谨慎操作！-->
    <!--game_files_start-->
	<script src="main.min.js"></script>
	<!--game_files_end-->
</head>
<body>
    <div style="margin: auto;width: 100%;height: 100%;" class="egret-player"
         data-entry-class="Main"
         data-orientation="auto"
         data-scale-mode="fixedWidth"
         data-frame-rate="30"
         data-content-width="750"
         data-content-height="1208"
         data-show-paint-rect="false"
         data-multi-fingered="2"
         data-show-fps="false" data-show-log="false"
         data-show-fps-style="x:0,y:0,size:12,textColor:0xffffff,bgAlpha:0.9">
         <img width="25.5%" id="gzpng" style="display:none;top:63%;left:38%;position:absolute;z-index: 999;" height="auto" src="http://wmf.mz-weixin-qq.com/wmfh520160830/resource/assets/QRCode.png" />
         <input id="redtext" type="text" value="秋运把健康厨房神器带回家" readOnly style="background:none;border:0;display:none;top:38.6%;margin-left:-5px;width: 100%;height: 25px;position:absolute;z-index: 999;color:#000;font-size:16px;font-weight: bold;text-align:center;" />
         <img width="29.3%" id="qr" style="display:none;top:22%;left:35.3%;position:absolute;z-index: 999;" height="auto" src="http://wmf.mz-weixin-qq.com/wmfh520160830/resource/assets/QRCode.png" />
    </div>
    <script>
        /**
         * {
         * "renderMode":, //引擎渲染模式，"canvas" 或者 "webgl"
         * "audioType": "" //使用的音频类型，0:默认，1:qq audio，2:web audio，3:audio
         * }
         **/
        egret.runEgret({renderMode:"canvas", audioType:0});
    </script>
    <div id="openID" style="display:none"><?php echo $_COOKIE['openid'] ?></div>
    <div id="isphone" style="display:none"><?php echo $isphone; ?></div>

    <script>
        function shareChange(msg) {
            console.log("msg from egret : " + msg);
        }
        function tracking(a,b,c) {
            console.log("msg from egret : " + "a :" + a + "b :" + b+ "c :" + c);
        }
        function getDebugUser()
        {
            var openid = document.getElementById("openID").innerHTML;
            var user = "james" + openid.substring(0, 2);
            var phone = "135" + RandNum(8);

            return {user: user, phone: phone};
        }

        function RandNum(n){  
            var rnd="";  
            for(var i=0;i<n;i++)  
                rnd+=Math.floor(Math.random()*10);  
            return rnd;  
        }
    </script>

    <!-- wechat jssdk share interface -->
    <?php include_once 'weChat/weChatShareJS.php';?>
</body>
</html>
