<?php
 include_once('connection.php');
    if(isset($_POST['addContact']))
    {
        $name=$_POST['inputname'];
        $number=$_POST['inputnumber'];
        $email=$_POST['inputemail'];
        
        $insertQuery = "INSERT INTO data (name,number,email) VALUES ('$name','$number','$email')";
        $query_run = mysqli_query($connection,$insertQuery);

        if($query_run)
        {
            echo "<script>alert('number added');</script>";
            header("Location:index.php");
        }
        else 
        {
            echo "<script>alert('number not added!!!');</script>";
        }

    }
?>