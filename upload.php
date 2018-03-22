<?php 

 include 'config.php';
 include 'functions.php';

if(isset($_FILES['file'])) {
     
    if(preg_match('/[.](jpg)|(gif)|(png)|(bmp)$/', $_FILES['file']['name'])) {
         
        $filename = $_FILES['file']['name'];
        $source = $_FILES['file']['tmp_name'];   
        $target = $path_to_image_directory . $filename;
         
        move_uploaded_file($source, $target);
         
        createThumbnail($filename);     
    }
} 
 // upload all files

if(isset($target)){
	
file_put_contents('files/'.$_FILES['file']['name'], file_get_contents($target));

}else{
	
file_put_contents('files/'.$_FILES['file']['name'], file_get_contents($_FILES['file']['tmp_name']));

}




$path= $_SERVER['HTTP_HOST'].'/files'.$_FILES['file']['name'];
echo   $path; 