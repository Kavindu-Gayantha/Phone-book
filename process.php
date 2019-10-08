<?php
 include_once('connection.php');
    if(isset($_POST['addContact']))
    {
        $name=$_POST['inputname'];
        $number=$_POST['inputnumber'];
        $email=$_POST['inputemail'];
       // $result = mysqli -> query("SELECT * FROM data") or die(mysqli->error);
        $mysqli->query("INSERT INTO data(name,number,email)VALUES('$name','$number','$email');") ;

    }
?>