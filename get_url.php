<?php
if(isset($_POST['original_url']))
{
 $url=$_POST["shortURL:"];
 $short_url=substr($url,25);

 $select=mysqli_connect("select long URL from short URL where URL='$short_url'");

}
?>