<?php

$host="localhost";
$username="root";
$password="";
$databasename="LinkShortener";

$connect=mysqli_connect($host,$username,$password);
$database = "LinkShortener";

if(isset($_POST['shortURL']))
{
 $url=$_POST["url_value"];
 $short_url=substr(md5($url.mt_rand()),0,8);
 $mysql_query("insert into shortURLS values('','$url','$short_url')");
 echo "Your New URL Is : http://jova.com/url.php?u=".$short_url."";
}

?>