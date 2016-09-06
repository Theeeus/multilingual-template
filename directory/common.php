<?php
session_start();
header('Cache-control: private'); // IE 6 FIX
 
if(isset($_GET['lang']))
{
$lang = $_GET['lang'];
 
// register the session and set the cookie
$_SESSION['lang'] = $lang;
 
setcookie('lang', $lang, time() + (3600 * 24 * 30));
}
else if(isset($_SESSION['lang']))
{
$lang = $_SESSION['lang'];
}
else if(isset($_COOKIE['lang']))
{
$lang = $_COOKIE['lang'];
}
else
{
$lang = 'en';
}
 
switch ($lang) {
  case 'en':
  $lang_file = 'lang.en.php';
  break;
 
  case 'pt':
  $lang_file = 'lang.pt.php';
  break;
 
  default:
  $lang_file = 'lang.en.php';
 
}
 
include ($_SERVER['DOCUMENT_ROOT'].'/directory/languages/'.$lang_file);
?>