<?php
    include 'navbar.php';
?>

<!DOCTYPE html>
<html>  
<head lang="en">  
    <meta charset="UTF-8">  
    <link type="text/css" rel="stylesheet" href="bootstrap-3.2.0-dist\css\bootstrap.css">
    <title>Add Staff</title>  
</head>
  
<?php

    include 'config.php';

    if(isset($_POST['add_staff'])){
        $staff_id = $_POST['id'];
        $username = $_POST['username'];
        $name = $_POST['name'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $password = md5($password);
        
    $conn = mysqli_connect("localhost", "root", "", "sd_g01_03");
    $sql = "INSERT INTO user (id, username, name, password, email, usertype) VALUES ('$staff_id' , '$username', '$name' , '$password' , '$email' , 'staff')";

        if ($conn->query($sql)===true){
            header("location:admin-view_staff.php");
        } else{
            die(mysqli_error($conn));
        }
    }
?>

<body>  
  
<div class="table-scrol">  
    
        <!-- Start feature Area -->
        <section class="feature-area" id="secvice">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="menu-content pb-60 col-lg-8">
                        <div class="title text-center">
                            <h1 class="mb-10"><br>Staff Tab</h1>
                            <p>Add, update and edit staff here.</p>
                        </div>
                    </div>
                </div>		

            <form action="admin-add_staff.php" class="signin-form" method="POST">				
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-10 ">
                        <div class="single-feature mb-30">
                            <div class="title d-flex flex-row pb-20 ">
                                <span class="lnr lnr-paperclip"></span>
                                <h2><a href="#">Staff</a></h2>
                            </div>
                            <div>
                                    <label class="col-md-3">Ad ID:</label>
                                    <input type="number" id="id" name="id" class="form-control" placeholder="Staff ID"required>
                            </div>
                            <div>
                                    <label class="col-md-3"><br>Username:</label>
                                    <input type="text" id="username" name="username" class="form-control" placeholder="Staff Username"required>
                            </div>	
                            <div>
                                    <label class="col-md-3"><br>Name:</label>
                                    <input type="text" id="name" name="name" class="form-control" placeholder="Staff Name"required>
                            </div>
                            <div>
                                    <label class="col-md-3"><br>Password:</label>
                                    <input type="text" id="password" name="password" class="form-control" placeholder="Staff Password"required>
                            </div>
                            <div>
                                    <label class="col-md-3"><br>Email:</label>
                                    <input type="text" id="email" name="email" class="form-control" placeholder="Staff E-mail" required>
                            </div>	
                            <div class="col-md-8">
                                <br>
                                <input type="submit" class="btn btn-primary" name="add_staff" value="Save ">
                                <br><br>
                            </div>					
                        </div>							
                    </div>			            													
                </div>
            </form>	
            </div>	
        </section>
        <!-- End feature Area -->   
        
                </div>
            </div>
            </body>
        </div>   
</html>