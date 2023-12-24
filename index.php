<?php

$firstname= $_REQUEST['firstname'];
$lastname= $_REQUEST['lastname'];
$gender= $_REQUEST['gender'];
$email= $_REQUEST['email'];
$pass= $_REQUEST['pass'];

if(isset($_POST['btn'])){

    $host= "localhost";
    $user= "root";
    $password= "";
    $db= "website";

    $connect = mysqli_connect($host,$user,$password,$db);

    $insert = "insert into users values('$firstname','$lastname','$gender','$email','$pass')";

    mysqli_query($connect,$insert);

    if($connect){
        echo("<h1 style=color:green;>Welcome aboard!</h1>");
    }
    else{
        echo("<h1 style=color:red;>Error encountered!</h1>"); 
    }

}


?>