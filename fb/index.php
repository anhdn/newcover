<?php
    include_once "fbmain.php";

	
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://www.facebook.com/2008/fbml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <title>fbapp</title>

        <style type="text/css">
    .button {
            -webkit-box-shadow: rgba(0, 0, 0, 0.199219) 0px 1px 0px 0px;
            background-color: #FA2;
            border-radius: 5px;
            border-bottom-color: #333;
            border: none;
            border-width: 0;
            box-shadow: rgba(0, 0, 0, 0.199219) 0px 1px 0px 0px;
            color: #333;
            font-family: 'Helvetica Neue', Arial, sans-serif;
            font-size: 16px;
            font-weight: bold;
            height: 32px;
            padding: 4px 16px;
            text-shadow: #FE6 0px 1px 0px;
    }

    .styled-button-3 {
            -webkit-box-shadow: rgba(0, 0, 0, 0.0.97) 0px 1px 0px 0px;
            background-color: #5B74A8;
            border: 1px solid #29447E;
            font-family: 'Lucida Grande', Tahoma, Verdana, Arial, sans-serif;
            font-size: 12px;
            font-weight: bold;
            padding: 2px 6px;
            height: 28px;
            color: #fff;
            border-radius: 5px;
    }
    .box {
    	margin-left: 40px;
    }
    </style>
        
    </head>
<body>
    
<div id="fb-root"></div>
    <script type="text/javascript" src="http://connect.facebook.net/en_US/all.js"></script>
     <script type="text/javascript">
       FB.init({
         appId  : '<?=$fbconfig['appid']?>',
         status : true, // check login status
         cookie : true, // enable cookies to allow the server to access the session
         xfbml  : true  // parse XFBML
       });
    
     </script>
	 
<!-- <img id="loader" src="ajax-loader2.gif" alt="Loading, Loading!"></img>	 -->
	<?php if ($fan) { ?>
	    <?php if (!$user) { ?>
	    <div class="box">
			 <div style="margin-left: 300px"><image src="banner.jpg"/></div><br />			 
			 <div style="margin-left: 300px"><a href="<?=$loginUrl?>" class="button">Vui lòng bấm vào đây</a></div>
			 
	   
	    </div>
	    <?php }  ?>
	    	
    <!-- all time check if user session is valid or not -->
    <?php if ($user){ ?>
    <table border="0" cellspacing="3" cellpadding="3">
        <tr>
            <td>
                <div class="box">                    
					<center>
					<!-- Begin Ad Call Tag - Do not Modify -->
<iframe width='468' height='60' frameborder='no' framespacing='0' scrolling='no' src='//ads.lfstmedia.com/slot/slot36759?ad_size=468x60&adkey=c1b'></iframe>
<!-- End of Ad Call Tag -->
					<image width="600px" src="<?php echo $file;?>" />
<!-- Begin Ad Call Tag - Do not Modify -->
<iframe width='160' height='600' frameborder='no' framespacing='0' scrolling='no' src='//ads.lfstmedia.com/slot/slot36760?ad_size=160x600&adkey=736'></iframe>
<!-- End of Ad Call Tag -->					
					</center>
                    <br /><br />
					<a href="#" onClick="top.location.href = 'http://www.facebook.com'"/><image src="postwall.png"/></a>
					<a href="#" onClick="top.location.href = 'http://www.facebook.com/pages/T%C3%B4i-th%C3%ADch-vi%E1%BA%BFt-status-m%E1%BB%97i-ng%C3%A0y-%C4%91%E1%BB%83-c%E1%BA%A3m-th%E1%BA%A5y-vui-h%C6%A1n/207701742602973?sk=app_299834746751464'"/>
					<image src="thulai.png"/></a>
                    
                </div>
            </td>
        </tr>
    </table>
    <?php } ?>
<?php } ?>
<?php if(!$fan) { ?>
	<img style="margin-left:295px" src="like.jpg" />

<?php } ?>
    </body>
</html>
