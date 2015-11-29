<?php

   include("./vendor/autoload.php");

   ini_set('display_errors', 'On');

   // Authenticate via OAuth
   include("./keys.php");
   $client = new Tumblr\API\Client($a,$b,$c,$d);


   var_dump($_FILES);
   echo json_encode($_FILES["file"]["name"]);
   // Make the reques
   $data=array(
               "data" => array($_FILES["file"]["tmp_name"]),
               "type"=>"photo",
               "state"=>'queue',
               'caption' => 'Photo'
         );
   $client->createPost($blogname,$data);
?>
