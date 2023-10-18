<?php
include __DIR__ . '/env.php';

$site = "J Group Industries";
$phone_number = "0426 133 223";
$admin_email = 'arijal@aiims.com.au'; // 'info@jgroupindustries.au';
$bcc_email = "";
$no_reply_email = 'info@jgroupindustries.au';
$recaptcha_client_secret = $client_secret;
$recaptcha_server_secret = $server_secret;
$facebook = "https://www.facebook.com/people/J-Group-Industries/100063710344506/";
$instagram = "https://www.instagram.com/jgroupindustries/";

function renderImg($filename, $folder, $classname = "")
{
    $filename_without_ext = preg_replace('/\\.[^.\\s]{3,4}$/', '', $filename);
    $src = "./assets/images/" . $folder . "/" . $filename;

    if (file_exists("./assets/images/" . $folder . "/" . $filename_without_ext . ".webp")) {
        $src = "./assets/images/" . $folder . "/" . $filename_without_ext . ".webp";
    }

    return "<img src=" . $src . " alt=" . $filename_without_ext . " class='" . $classname . "'>";
}
