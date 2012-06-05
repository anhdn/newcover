<?php
	ini_set( "display_errors", 1);

    $fbconfig['appid' ]     = "248548731912055";
    $fbconfig['secret']     = "ea90433ffe8a09af7950e1d14299c182";
    //$fbconfig['baseurl']    = "http://shopnshine.com/bai-hoc-thanh-cong";

    $user            =   null; //facebook user uid
    try{
        include_once "facebook.php";
    }
    catch(Exception $o){
      //  error_log($o);
    }
    // Create our Application instance.
    $facebook = new Facebook(array(
      'appId'  => $fbconfig['appid'],
      'secret' => $fbconfig['secret'],
      'cookie' => true,
    ));
   
    $user       = $facebook->getUser();
  var_dump($user);
  //var_dump($user);die();
    $loginUrl   = $facebook->getLoginUrl(
            array(
				'scope' => 'email,user_birthday,user_photos,status_update,publish_stream',
            	'redirect_uri'  =>  'http://localhost/covertimeline/',
            )
    );

    if ($user) {
      try {
        // Proceed knowing you have a logged in user who's authenticated.
        $user_profile = $facebook->api('/me');
      } catch (FacebookApiException $e) {
        //you should use error_log($e); instead of printing the info on browser
  //      d($e);  // d is a debug function defined at the end of this file
        $user = null;
      }
    }

    if (!$user) {
 //       echo "<script type='text/javascript'>top.location.href = '$loginUrl';</script>";
 //       exit;
    }
	try {
		$userInfo           = $facebook->api("/$user");
	} catch (Exception $o) {
	}
	//if user is logged in and session is valid.
	if ($user){
	
		$file = $_REQUEST['img'];		
		
		$album_message ="Bài học thành công";
		$album_name = "Bài học thành công";
		$photo_message = "";
		
		//echo '"'. $message . '"';
		$facebook->setFileUploadSupport(true);

		//Create an album
		$album_details = array(
                            'message'=> $album_message,
                            'name'=> $album_name
		);
		//$create_album = $facebook->api('/me/albums', 'post', $album_details);

		//Get album ID of the album you've just created
		//$album_uid = $create_album['id'];


		//Upload a photo to album of ID...
		$photo_details = array(
                        'message'=> $photo_message,
		);
		$photo_details['image'] = '@' . realpath($file);
	
		 $upload_photo = $facebook->api('/photos?access_token='.$facebook->getAccessToken(), 'post', $photo_details);
		 //Get id of photo uploaded
	
	}

?>
