<?php 
include_once('connection.php');
include_once('process.php');
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
        <div class="jumbotron bg-primary ">
          <div class="alert alert-success text-center font-weight-bold h1" style="margin-top:0px">
             MyPhone Book 
          </div>
          <nav class="navbar navbar-expand-lg navbar-light bg-dark">
            <!-- <a class="navbar-brand" href="#">Navbar</a> -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

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
                <li class="nav-item">
                  <!-- <a class="nav-link disabled" href="#">Disabled</a> -->
                </li>
                <li>
                <button class="btn btn-success" type="button" data-toggle="modal" data-target="#addContactModal">
                  Add contact
                </button>
                <!-- hiddin div starts -->
                <!-- <div class="collapse" id="collapseExample">
                    <div class="card card-body">
                      <form action="index.php" method="post" class="form-inline" style="width:100%">
                        <label for="name">Name :</label><input type="text" placeholder="Enter Name" name="input_name">
                        <label sytle="margin-left:2%" for="number">Number :</label><input type="text" placeholder="Enter Number" name="input_number"> <br>
                        <input type="email" placeholder="Enter email" name="input_email" style="margin-left:7% ">
                        <p> <br> <input class="btn btn-primary" type="submit"name="addContact" value="Add contact" style="margin-left:3%"></p>
                      </form>
                    </div>
                </div> -->
                <!-- hiddin div stops -->
                </li>
              </ul>
              <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
              </form>
            </div>
          </nav>

<!-- modal starts for form elements -->
    <div class="modal" tabindex = -1 role ="dialog" id="addContactModal">
      <div class="modal-dialog" role="document">
        <div class="modal-content text-success "style="font-weight:bold">
          <div class="modal-header">
            <h5 class="modal-title">Add Contact</h5>
            <button class="close" type="button" data-dismiss="modal" area-label="Close">
              <span area-hidden="true">&times;</span>
            </button>
          </div><!-- header ends-->
          <div class="modal-body">
            <!-- form here -->
            <form action="process.php" method="POST">
              <div class="form-group">
                <label for="name" >Name :</label>
                <input type="text" class="form-control" name="inputname" placeholder="enter name">
              </div> <!--form group ends--> 
              <div class="form-group">
                <label for="number" >Number :</label>
                <input type="text" class="form-control" name="inputnumber" placeholder="enter number">
              </div> <!--form group ends-->    
              <div class="form-group">
              <label for="name" >Email :</label>
                <input type="email" class="form-control" name="inputemail" placeholder="enter email">
              </div>    

          </div>
          <div class="modal-footer">
          <input class="btn btn-secondary" type="submit" name="addContact" value="Add contact" >
          <input class="btn btn-danger" type="submit" name="cancel" value="cancel" data-dismiss="modal" area-label="Close"  >
  
            </form>
          </div>
        </div>
      </div>
    
    </div>
    <!-- modal ends here -->
          
            
                
                
                
        </div> <!-- first jumbortron ends-->
        
        <div class="jumbotron bg-primary">
            <table class="table table-hover table-dark">
                <thead class="text-success font-weight-bold text-uppercase">
                    <tr>
                        <th class="col-1" scope="col">[#]</th>
                        <th class="col text-center" scope="col" colspan="2">[   contact   ]</th>
                        <th class="col-1" scope="col">Edit</th>
                        <th class="col-1" scope="col">Delete</th>
                    </tr>
                </thead>

      <?php
        $queryRead = "SELECT * FROM data";  // select query
        $query_run = mysqli_query($connection,$queryRead);

        if($query_run)
        {
          foreach($query_run as $row)
          {
      ?>
                <tbody>
                    <tr>
                            <th scope="row"><?php echo $row['ID'];?></th>
                            <td><?php echo $row['name'];?></td>
                            <td><?php echo $row['number'];?></td>
                            <td>edit</td>
                            <td>delete</td>
                    </tr>
                  
                </tbody>
      <?php 
            }
          }
          else
          {
            echo "no record found";
          }
          
          
      ?>
            </table>
        </div>



    </div>  <!-- container ends-->
   

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>