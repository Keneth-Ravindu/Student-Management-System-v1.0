<?php

$host = "localhost";

$user = "root";

$password = "";

$db = "schoolproject";

$data = mysqli_connect($host, $user, $password, $db);

if ($data === false) {
    die("Connection Error");
}

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $name = $_POST['username'];

    $pass= $_POST['password'];
    
    $sql = "select * from user where username='".$name."' AND password='".$pass."' ";

    $result = mysqli_query($data, $sql);

    $row = mysqli_fetch_array($result);

    if($row["usertype"]=="student")
    {
        header("location: studenthome.php");
    }

    elseif($row["usertype"]=="admin")
    {
        header("location: adminhome.php");
    }

    else
    {
        echo "username or password does not match";
    }

}