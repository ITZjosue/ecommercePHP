<?php
$host = "localhost";
$user = 'root';
$password = '';
$database = 'negociosweb';

$cn = mysqli_connect($host,$user,$password,$database);

if(!$cn){
    die;
};

?>