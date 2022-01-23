<?php
$host= "127.0.0.1";
$pass= "";
$dbname= "translation";
$user = "root";
$connect = new mysqli($host,$user,$pass,$dbname);

if($connect->connect_error)
{
    echo "couldn't connect".$connect->connect_error;

}
else{
    echo "connected successfull";
}
?>
