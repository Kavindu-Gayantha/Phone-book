<?php 
include_once('connection.php');


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="script.js"></script>
    <title>Add contact</title>
</head>
<body>
    <div class="container">
        div.alert
        <div class="alert alert-primary">
        
            <form>
                <div class="form-group">
                <label for="exampleInputname">Name</label>
                <input type="text" class="form-control" id="exampleInputName" aria-describedby="nameHelp" placeholder="Enter Name" name="input_name">
                <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                </div>
                <div class="form-group">
                <label for="exampleInputEmail">E-mail</label>
                <input type="email" class="form-control" id="exampleInputEmail" placeholder="enter e-mail" name="input_email">
                </div>
                <div class="form-inline">
                <!-- <label for="exampleInputNumber">Number</label> -->
                <input type="text" class="form-control" id="exampleInputNumber" placeholder="Number" name="input_number">
                    <button type="submit" class="btn btn-primary" name="submitContact" style="margin-left:10px;">Submit</button>
                </div>
            </form>
        </div> <!-- container ends-->

    </div>




<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  
</body>
</html>