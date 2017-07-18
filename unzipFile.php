<?php 
$file_path = $yourfile;
$rand128 = uniqid().date('his');
$upload_dir=mkdir("LP/".$rand128);
$zip = new ZipArchive;
$res = $zip->open($file_path);
if ($res === TRUE) {
  $zip->extractTo("LP/".$rand128);
  $zip->close();
  echo "http://".$_SERVER['HTTP_HOST']."/main-5-1-1/builder/LP/".$rand128;
} 
else {
  echo 'Something went Wrong Please content Contact to Administrator!';
}
