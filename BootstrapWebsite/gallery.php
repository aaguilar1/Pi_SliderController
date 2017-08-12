<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta charset = "UTF-8">    
<meta name = "viewport" content ="width=device-width, intitial-scale=1.0">

<link rel = "stylesheet" href ="CSS/gallery.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    
<title>Gallery</title>

</head>
<body>
    
    <div id="header">
    <nav class="menu">
        <a href ="contact.html" style="float:right"> Contact <br> </a> &nbsp; &nbsp; &nbsp;
        <a href="gallery.html" style="float:right"> Gallery Prints <br>  </a> &nbsp; &nbsp; &nbsp; 
        <a href="index.html" style="float:right"> Home <br> </a> &nbsp; &nbsp; &nbsp; 
        
   
    </nav>
    </div>   
<!--
    
<?php
$folder_path = 'Images/'; //image's folder path

$num_files = glob($folder_path . "*.{JPG,jpg,gif,png,bmp}", GLOB_BRACE);

$folder = opendir($folder_path);
 
if($num_files > 0)
{
 while(false !== ($file = readdir($folder))) 
 {
  $file_path = $folder_path.$file;
  $extension = strtolower(pathinfo($file ,PATHINFO_EXTENSION));
  if($extension=='jpg' || $extension =='png' || $extension == 'gif' || $extension == 'bmp') 
  {
   ?>
            <a href="<?php echo $file_path; ?>"><img src="<?php echo $file_path; ?>"  height="250" /></a>
            <?php
  }
 }
}
else
{
 echo "the folder was empty !";
}
closedir($folder);
?>
-->
</body>
</html>