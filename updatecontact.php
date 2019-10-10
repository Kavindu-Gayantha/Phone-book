<?php 
include_once('connection.php');
include_once('process.php');

if(isset($_POST['updateContact']))
{
    $id =$_POST['update_id'];
    $name=$_POST['inputname'];
    $number=$_POST['inputnumber'];
    $email=$_POST['inputemail'];
    
    $updateQuery = "UPDATE data SET name='$name', number='$number', email='$email' WHERE id='$id' ";
    $query_run = mysqli_query($connection,$updateQuery);

    if($updateQuery)
    {
        echo "<script> alert('contact updated!!');</script>";
        header("location:index.php");
    }
    else 
    {
        echo "<script>alert('contact not updated!!');</script>";
    }
}
?>