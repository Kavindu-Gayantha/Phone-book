<?php 
include_once('connection.php');
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="script.js"></script>
    <title>My Phone Book</title>
  </head>
  <body style="background-color: rgb(8, 72, 97)">
    <div class="container">
        <div class="jumbotron bg-primary">
        <div class="alert alert-success text-center font-weight-bold h1" style="margin-top:0px">
        MyPhone Book 
        </div>
            <nav class="navbar navbar-expand-lg navbar-light bg-warning">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                                <li class="nav-item active">
                                  <!-- <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a> -->
                                </li>
                                <li class="nav-item">
                                  <!-- <a class="nav-link" href="#">Link</a> -->
                                </li>
                                <li class="nav-item dropdown">
                                  <!-- <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Dropdown
                                  </a> -->
                                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                  </div>
                                </li>
                                <!-- <li class="nav-item">
                                  <a class="nav-link disabled" href="#">Disabled</a>
                                </li> -->
                                <li class="nav-item">
                                    <button type="button" class="btn btn-outline-success" >Add contact</button>
                                </li>
                              </ul>
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search Contact</button>
                    </form>
                    <div class="alert alert-primary">
                      form
                    </div>
                
                
                
                </div>
        </div>
        <div class="jumbotron bg-primary">
            <table class="table table-hover table-dark">
                <thead class="text-success font-weight-bold text-uppercase">
                    <tr>
                        <th class="col-1" scope="col">[#]</th>
                        <th class="col" scope="col">[contact]</th>
                        <th class="col-1" scope="col">Edit</th>
                        <th class="col-1" scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                            <th scope="row">[]</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                    </tr>
                    <tr>
                            <th scope="row">[]</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                          </tr>
                          <tr>
                            <th scope="row">[]</th>
                            <td colspan="2">Larry the Bird</td>
                            <td>@twitter</td>
                          </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>