<?php
//including the connection file.
include_once('./connect.php');

//checking if the user has clicked s dubmit button
if(isset($_POST['contact'])){
    //geting the names of the data in respect to the method of form submission
    $name = mysqli_real_escape_string($con,$_POST['name']);
    $phone_number = mysqli_real_escape_string($con,$_POST['p_number']);
    $email =mysqli_real_escape_string($con,$_POST['email']);
    $status =mysqli_real_escape_string($con,'0');
    $message =mysqli_real_escape_string($con,$_POST['message']);

    //insert query
    $insert = "INSERT INTO `contact`(`name`, `phone_number`, `email`, `message`,`status`) VALUES ('$name',$phone_number,'$email','$message','$status')";
    $qwery = mysqli_query($con,$insert);
    //checking the success of query
    if ($qwery) {
      ?>
      <!DOCTYPE html>
      <html lang="en">
      <head>
          <meta charset="UTF-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>achet-development</title>
          <!-- linking the extenal files -->
          <link href="./style.css" rel="stylesheet">
          <link rel="icon" href="./images/IMG_20220902_222318.jpg" style="width: 50px; border-radius:3px;">
          <link rel="stylesheet" href="./css/bootstrap.min.css">
          <link rel="stylesheet" href="./css/bootstrap-utilities.min.css">
          <script src="./js/bootstrap.bundle.min.js"></script>
          <script src="./js/bootstrap.min.js"></script>
          <!-- link for bi icons -->
          <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
      </head>
      <body>
          <nav class="navbar bg-dark">
              <div class="container bg-dark">
                  <a href="./images" class="navbar-brand" data-bs-toggle="tooltip" title="about anthony torotich">
                      <img src="./images/myLogo.png" class="img-circle" style="width: 150px;" alt="">
                  </a>
                  <a href="./images" class="navbar-brand justify-contente-right" data-bs-toggle="tooltip" title="about anthony torotich">
                      <img src="./images/IMG_20220902_222318.jpg" class="rounded-circle shadow" style="width: 40px;" alt="">
                  </a>
                
              </div>
          </nav>  
          <section>
              <div class="container-fluid mt-2">
                  <div class="row">
                      <div class="col-md-4   shadow">
                          <div class="container-fluid">
                              <div class="card-check">
                                  <div class="card bg-body">
                                      <center>
                                          <img class="card-img-top
                                          justify-contente-center rounded-circle shadow
                                          " src="./images/IMG-20220419-WA0028.jpg" alt="" style="width: 85px;">
                                      </center>
                                    
                                      <div class="card-body">
                                          <h3 class="card-title text-center text-body text-decoration-underline">
                                              founder of Achet-dev.
                                          </h3>
                                          <p class="card-text text-center text-body">
                                              The founder and a developer of Achet development.
                                              <br>
                                              A freelancer, full stack developer, cyber-rsecurity guru.
                                              <br>
                                             <em class="text-success"> Want to know more? Come in touch? Then click the button below.</em>
                                              <br>
                                              <a href="./about" class="btn btn-primary">
                                                  visit this page <span class="bi bi-arrow-right"></span>
                                              </a>
                                              <br>
                                          </p>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="col-md-8 shadow">
                          <div class="container-fluid shadow mt-5">
                              <center>
                                  <iframe width="100%" height="320px" src="https://www.youtube.com/embed/mOFoh9FUR8w" title="ACHET-DEV" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                              </center>
                          </div>
                      </div>
                  </div>
              </div>
          </section>
          <br>
          <div class="container-fluid">
              <center>
                  <!-- Carousel -->
                  <div id="demo" class="carousel slideS" data-bs-ride="carousel">
                    <!-- Indicators/dots -->
                      <div class="carousel-indicators text-dark">
                         <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active">
      
                         </button>
                         <button type="button" data-bs-target="#demo" data-bs-slide-to="1">
      
                         </button>
                          <button type="button" data-bs-target="#demo" data-bs-slide-to="2">
      
                          </button>
                          <button type="button" data-bs-target="#demo" data-bs-slide-to="3">
      
                          </button>
                       </div>
                       <!-- The slideshow/carousel -->
                       <div class="carousel-inner">
                        <div class="carousel-item">
                           <div class="row bg-dark">
                              <div class="col-md-12 bg-dark">
                                  <h6 class="bg-dark text-light  text-center">
                                     A software egngineer. <span class="bi bi-java-code"></span>
                                  </h6>
                              </div>
                           </div>
                         </div>
                         <div class="carousel-item active">
                          <div class="row">
                              <div class="col-md-12 bg-dark">
                                  <h6 class="bg-dark text-light  text-center">
                                     A full stack developer. <span class="bi bi-web"></span>
                                  </h6>
                              </div>
                           </div>
                         </div>
                         <div class="carousel-item">
                          <div class="row bg-dark">
                              <div class="col-md-12 bg-dark">
                                  <h6 class="bg-dark text-light  text-center">
                                     founder and a developer at alpha-dev home.
                                  </h6>
                              </div>
                           </div>
                         </div>
                         <div class="carousel-item">
                          <div class="row bg-dark">
                              <div class="col-md-12 bg-dark">
                                  <h6 class="bg-dark text-light  text-center">
                                     still a student <span class="bi bi-mortarboard"></span>
                                  </h6>
                              </div>
                           </div>
                         </div>
                    </div>
                </center>
          </div>
          <br>
          <div class="footer  bg-dark">
              <fieldset class="fieldset">
                  <div class="row bg-dark bg-dark">
                      <br>
                      <center>
                          <div class="col-md-8 bg-dark">
                             <h5 class="text-light bg-secondary">
                                social icons
                             </h5>
                             <div class="row bg-dark bg-dark">
                               <div class="col-md-2">
                                   <h1>
                                      <a href="http://wa.me/+254707546698"  style="color:rgb(26, 236, 155);">
                                         <span class="bi bi-whatsapp"></span>
                                      </a>
                                   </h1>
                                   <p class="text-light">
                                      whatsapp
                                  </p>
                               </div>
                               <div class="col-md-2">
                                  <h1 class="text-primary">
                                      <a href="http://www.facebook.com/antony.torotich">
                                        <span class="bi bi-facebook"></span>
                                      </a>
                                  </h1>
                                  <p class="text-light">
                                      facebook
                                  </p>
                              </div>
                              <div class="col-md-2">
                                  <h1 class="text-primary">
                                      <a href="http://mobile.twitter.com/tonnyProgrammer">
                                         <span class="bi bi-twitter"></span>
                                      </a>
                                  </h1>
                                  <p class="text-light">
                                      twitter
                                  </p>
                              </div>
                              <div class="col-md-2">
                                  <h1>
                                      <a href="http://www.instagram.com/tonny_programmer" style="color:rgb(236, 26, 236);">
                                         <span class="bi bi-instagram"></span>
                                      </a>
                                  </h1>
                                  <p class="text-light">
                                      instagram
                                  </p>
                              </div>
                              <div class="col-md-2">
                                  <h1 >
                                      <a href="mailto:antonytorotich@gmail.com" class="text-light">
                                         <span class="bi bi-envelope-fill"></span>
                                      </a>
                                  </h1>
                                  <p class="text-light">
                                      gmail
                                  </p>
                              </div>
                              <div class="col-md-2">
                                  <h1 >
                                     <a href="tel:+54707546" style="color:rgb(26, 236, 155);">
                                      <span class="bi bi-telephone-fill"></span>
                                     </a>
                                  </h1>
                                  <p class="text-light">
                                     call
                                  </p>
                              </div>
                           </div>   
                          </div>
                      </center>
                  </div>
                  <br>
                  <div class="row bg-dar">
                     <div class="container ml-4 bg-dark">
                        <div class="col-md-12 bg-dark">
                            <p class="text-light text-center">
                                copyright&copy;2022-<label for="" id="copyDate" class="text-light"></label> || All rights || Founder and developer of Achet-devolopment.|| Full-stacke developer.
                            </p>
                        </div>
                     </div>
                  </div>
              </fieldset>
          </div>
          <script>
            window.alert("Thanks for contacting Achet-dev, we will contact you soon");
              let date = new Date();
              let copyDate = date.getUTCFullYear();
              document.getElementById('copyDate').innerHTML=copyDate;
          </script>
      </body>
      </html>
      <?php
    }else{
        echo 'error ->'.mysqli_connect_error($con);
    }
 
  // checking if the user has clicked the sign_up button
}elseif(isset($_POST['sign_up'])){
  // Getting the details of from the input fields
  $username =mysqli_real_escape_string($con,$_POST['username']);
  $user_code = mysqli_real_escape_string($con,rand(111111,999999));
  $user_email =mysqli_real_escape_string($con,$_POST['email']);
  $password =mysqli_real_escape_string($con,md5($_POST['password']));
  $confirm_password = mysqli_real_escape_string($con,md5($_POST['confirm_password']));
  //checking if the account already exist
  $check_ac = "SELECT * FROM `accounts_table` WHERE email = '$user_email'";
  $check_ac_query = mysqli_query($con,$check_ac);
  $account_rows = mysqli_num_rows($check_ac_query);
  if($account_rows >0){
   ?>
   <!DOCTYPE html>
        <script>
         alert("The accoount already exists, please login");
        </script>
      <style>
         .row .col-md-4{
             border-radius: 20px;
             margin-top: 27vh;
         }
         .row .col-md-4 .container form input[type=submit]{
             border-radius: 20px;
         }
         .row .col-md-4 .container form input[type=submit]:hover{
             background-color: red;
         }
         .row .col-md-4 .container form h1{
             font-size: 50px;
             font-weight: bolder;
         }
        </style>
       <html lang="en">
         <head>
             <title>sign-in</title>
             <meta charset="UTF-8">
             <meta name="viewport" content="width=device-width, initial-scale=1">
             <!-- linking the extenal files -->
             <link href="./style.css" rel="stylesheet">
             <link rel="icon" href="./images/IMG_20220902_222318.jpg" style="width: 50px; border-radius:3px;">
             <link rel="stylesheet" href="./css/bootstrap.min.css">
             <link rel="stylesheet" href="./css/bootstrap-utilities.min.css">
             <script src="./js/bootstrap.bundle.min.js"></script>
             <script src="./js/bootstrap.min.js"></script>
             <!-- link for bi icons -->
             <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
         </head>
         <body>
             <div class="row">
                 <center>
                     <div class="col-md-4 shadow">       
                         <div class="container">
                             <form action="./post" method="post" target="_self">
                                 <h1>
                                     <span class="bi bi-lock-fill"></span>
                                 </h1>
                                 <br>
                                 <input type="email" name="email" id="" class="form-control email  text-center" data-bs="tooltip" title="user email"  placeholder="Enter your email..." required autofocus>
                                 <br>
                                 <input type="password" name="password" id="" class="form-control password  text-center" data-bs="tooltip" title="correct password"  placeholder="Enter your email..." required>
                                 <a href="./Admin/prepare" class="text-right"> I forgot password.</a>
                                 <br>
                                 <br> 
                                 <input type="submit" class="btn btn-info w-50 shadow" data-bs="tooltip" title="click to login" name="login" value="login">
                             </form>
                             <br>
                             You don't have an account? <a href="./Admin/sign_up">create now.</a>
                             <br>
                             <br>
                         </div>
                     </div>
                 </center>
             </div>
         </body>
       </html>
     <?php
  }else{
    // checking if the passwords match
    if($password==$confirm_password){
       //insert the data form the user inputs into account dtable
       $create_ac = "INSERT INTO `accounts_table`(`user_code`, `username`, `email`, `password`, `confirm_password`) VALUES($user_code,'$username','$user_email','$password','$confirm_password')";
       $create_q =mysqli_query($con,$create_ac);
      //  checking the success
      if($create_q){
        ?>
        <!DOCTYPE html>
        <style>
            .row .col-md-4{
                border-radius: 20px;
                margin-top: 27vh;
            }
            .row .col-md-4 .container form input[type=submit]{
                border-radius: 20px;
            }
            .row .col-md-4 .container form input[type=submit]:hover{
                background-color: red;
            }
            .row .col-md-4 .container form h1{
                font-size: 50px;
                font-weight: bolder;
            }
        </style>
        <script>
          window.alert("Account has been created successfully you can now login");
        </script>
        <html lang="en">
            <head>
                <title>sign-in</title>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <!-- linking the extenal files -->
                <link href="./style.css" rel="stylesheet">
                <link rel="icon" href="./images/IMG_20220902_222318.jpg" style="width: 50px; border-radius:3px;">
                <link rel="stylesheet" href="./css/bootstrap.min.css">
                <link rel="stylesheet" href="./css/bootstrap-utilities.min.css">
                <script src="./js/bootstrap.bundle.min.js"></script>
                <script src="./js/bootstrap.min.js"></script>
                <!-- link for bi icons -->
                <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
            </head>
            <body>
                <div class="row">
                    <center>
                        <div class="col-md-4 shadow">       
                            <div class="container">
                                <form action="./post" method="post" target="_self">
                                    <h1>
                                        <span class="bi bi-lock-fill"></span>
                                    </h1>
                                    <br>
                                    <input type="email" name="email" id="" class="form-control email  text-center"  data-bs="tooltip" title="user email"  placeholder="Enter your email..." required autofocus>
                                    <br>
                                    <input type="password" name="password" id="" class="form-control password  text-center"  data-bs="tooltip" title="correct password"  placeholder="Enter your email..." required>
                                    <a href="./Admin/prepare" class="text-right"> I forgot password.</a>
                                    <br>
                                    <br> 
                                    <input type="submit" class="btn btn-info w-50 shadow" data-bs="tooltip" title="click to  login" name="login" value="login">
                                </form>
                                <br>
                                You don't have an account? <a href="./Admin/sign_up">create now.</a>
                                <br>
                                <br>
                            </div>
                        </div>
                    </center>
                </div>
            </body>
        </html>
      <?php
      }else{
        echo mysqli_connect_error($con);
      }
    }else{
     ?>
      <!DOCTYPE html>
      <s
          .row .col-md-4{
              border-radius: 20px;
              margin-top: 20vh;
          }
          .row .col-md-4 .container form input[type=submit]{
              border-radius: 20px;
          }
          .row .col-md-4 .container form input[type=submit]:hover{
              background-color: red;
              transition: cubic-bezier(0.075, 0.82, 0.165, 1);
          }
          
      </style>
      <script>
          function confirm(val){
              var pass , c_pass;
              pass =document.getElementById("password").value;
              c_pass = val;
              var text = document.getElementById("show");
              if(pass.length !=0){
                  if(pass==c_pass){
                     text.textContent ="passwords match";
                     text.style.backgroundColor ="green";
                  }else{
                    text.textContent ="passwords does not  match!!";
                    text.style.backgroundColor ="red";
                 }
              }else{
                   window.alert('password can not be emapty !!');
              }
          }
      </script>
      <html lang="en">
          <head>
              <title>sign-up</title>
              <meta charset="UTF-8">
              <meta name="viewport" content="width=device-width, initial-scale=1">
              <!-- linking the extenal files -->
              <link href="./style.css" rel="stylesheet">
              <link rel="icon" href="./images/IMG_20220902_222318.jpg" style="width: 50px; border-radius:3px;">
              <link rel="stylesheet" href="./css/bootstrap.min.css">
              <link rel="stylesheet" href="./css/bootstrap-utilities.min.css">
              <script src="./js/bootstrap.bundle.min.js"></script>
              <script src="./js/bootstrap.min.js"></script>
              <!-- link for bi icons -->
              <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
          </head>
          <body>
              <div class="row">
                  <center>
                      <div class="col-md-4 shadow">
                          <div class="container px-4">
                              <form action="./post" method="post" target="_self">
                                  <h1>
                                      <span class="bi bi-person-fill"></span>
                                  </h1>
                                  <input type="text" name="username" id="" class="form-control username  text-center"  data-bs="tooltip" title="username"  placeholder="Create a username..." autofocus required  autocomplete="off">
                                  <br>
                                  <input type="email" name="email" id="" class="form-control email  text-center"       data-bs="tooltip" title="user email"  placeholder="Enter your email..." required       autocomplete="off">
                                  <br>
                                  <input type="password" name="password" id="password" class="form-control password   text-center" data-bs="tooltip" title="correct password"  placeholder="Create a strong  password" required minlength="6" autocomplete="off">
                                  <br>
                                  <input type="password" name="confirm_password" id="confrim_password" class="form-control  password  text-center" data-bs="tooltip" title="confirm  password"  placeholder="Confirm  your password" required minlength="6" autocomplete="off" oninput="confirm(this.value)">
                                  <label id="show"></label>
                                  <br>
                                  <input type="submit" class="btn btn-info w-50 shadow" data-bs="tooltip" title="click to  sign-up" name="sign_up" value="Register">
                              </form>
                              <br>
                              Already have an account? <a href="./Admin/index"> Login.</a>
                              <br>
                              <br>
                          </div>
                      </div>
                  </center>
              </div>
          </body>
      </html>   
   <?php
    }
    
  }
  //checking if the user has clicked the login button
}elseif(isset($_POST['login'])){
  //geting the data of the user from the input fields
  $log_email =mysqli_real_escape_string($con,$_POST['email']);
  $log_password =mysqli_real_escape_string($con,md5($_POST['password']));
  //checking if the user email exists in the system
  $check_log_email ="SELECT * FROM `accounts_table` WHERE email = '$log_email'";
  $check_log_q =mysqli_query($con,$check_log_email);
  $log_email_rows =mysqli_num_rows($check_log_q);
  if($log_email_rows==1){
    //fetch the details of the very email
    $fetch_password = mysqli_fetch_assoc($check_log_q);
    $stored_password = $fetch_password['password'];
    if($stored_password==$log_password){
       //selecting the number of contacts

       $people_contact = "SELECT * FROM `contact`";
       $contact_q = mysqli_query($con,$people_contact);

       //counts
       $count = "SELECT COUNT(id) AS COUNT FROM contact";
       $countQ = mysqli_query($con,$count);
       $count_fetch = mysqli_fetch_assoc($countQ);
       $all_contacts = $count_fetch['COUNT'];
       $count_new= "SELECT COUNT(id) AS COUNT FROM contact WHERE status='0'";
       $countQ_new = mysqli_query($con,$count_new);
       $count_fetch_new = mysqli_fetch_assoc($countQ_new);
       $all_contacts_new= $count_fetch_new['COUNT'];
        ?>
        <!DOCTYPE html>
        <style>
          .footer{
            margin-top: 60vh;
            position:sticky;
          }
          .footer .row .col-md-12{
            border-radius: 30px;

          }
        body {
        /* Set the Serial counter to 0 */
        counter-reset: Serial; 
        }
       .a:hover{
        color: rgb(200,0,0  );
       }
        table {
            border-collapse: separate;
        }
        
        tr td:first-child:before {
            /* Increment the Serial counter */
            counter-increment: Serial;
        
            /* Display the counter */
            content:counter(Serial); 
        }
        </style>
        <html lang="en">
        <head>
          <meta charset="UTF-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <!-- linking the extenal files -->
          <link href="./style.css" rel="stylesheet">
          <link rel="icon" href="./images/IMG_20220902_222318.jpg" style="width: 50px; border-radius:3px;">
          <link rel="stylesheet" href="./css/bootstrap.min.css">
          <link rel="stylesheet" href="./css/bootstrap-utilities.min.css">
          <script src="./js/bootstrap.bundle.min.js"></script>
          <script src="./js/bootstrap.min.js"></script>
          <!-- popper script link -->
          <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"        integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>

          <!-- link for bi icons -->
          <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
          <title>reach outs</title>
        </head>
        <body>
          <div class="container mt-5">
            <center>
                <div class="row">            
                <div class="col-md-4">
                <div class="text text-center">
                    <a href="#">
                        <button class="btn btn-secondary" value="">All
                          <i class="fab fa-inbox" aria-hidden="true"></i>
                            <span class="badge bg-danger">
                            <?php
                               echo $all_contacts;
                            ?>
                            </span>
                        </button>
                    </a>
                 
                </div>
            </div>
            <div class="col-md-4">
                <div class="text text-center">
                    <form action="./post" method="POST">
                        <button type="submit" name="read_all" class="btn btn-secondary" value="">
                            <?php
                              if($all_contacts_new>0){
                                echo 'mark all as read';
                              }else{
                                echo ' read!';
                              }
                             ?>
                          <i class="fab fa-inbox" aria-hidden="true"></i>
                            <span class="badge bg-danger">
                            <?php
                               echo $all_contacts_new;
                            ?>
                            </span>
                        </button>
                    </form>
                 
                </div>
            </div>
            <div class="col-4">
                <div class="text text-center">
                    <a href="./Admin/messages">
                        <button class="btn btn-secondary" value="">new
                          <i class="fab fa-inbox" aria-hidden="true"></i>
                            <span class="badge bg-danger">
                            <?php
                               echo $all_contacts_new ;
                            ?>
                            </span>
                        </button>
                    </a>
                 
                    </div>
                </div>
                
               <table id="example" class="table table-striped table-bordered w-100 shadow mt-5">
                 <thead class="text-center text-uppercase">
                  <th>
                    No:
                  </th>
                  <th>
                     Name
                  </th>
                  <th>
                    phone number
                  </th>
                  <th>
                    email
                  </th>
                  <th>
                    message
                  </th>
                  <th>
                    status
                  </th>
                  <th>
                    date contacted
                  </th>
                  <th>
                    operations
                  </th>
                 </thead>
                 <tbody>
                  <?php
                   while($fetch_people =mysqli_fetch_assoc($contact_q)){
                    ?>
                    <tr>
                      <td></td>
                      <td>
                        <?php
                        echo $fetch_people['name'];
                        ?>
                      </td>
                      <td>
                        <?php
                        echo'0'.$fetch_people['phone_number'];
                        ?>
                      </td>
                      <td>
                        <?php
                        echo $fetch_people['email'];
                        ?>
                      </td>
                      <td>
                        <?php
                        echo $fetch_people['message'];
                        ?>
                      </td>
                      <td>
                        <?php 
                         $new = $fetch_people['status'];
                         if($new==1){
                            echo 'read';
                         }else{
                            echo 'unread';
                         }
                        ?>
                      </td>
                      <td>
                        <?php
                        echo $fetch_people['date'];
                        ?>
                      </td>
                      <td>
                        <div class="container-fluid justify-content-between text-center">
                          <div class="dropdown">
                            <button class=" btn dropdown-toggle" type="button" data-bs-toggle="dropdown" id="dropdownMenu1" aria-expanded="false">
                            </button>
                            <ul class="dropdown-menu shadow" aria-labelledby="dropdownMenu1">
                              <li>
                                <a onclick="checkEdit();" href="./Admin/update?updateId=<?php echo $fetch_people['id'];?>" class="dropdown-item text-center text-primary hover-red text-decoration-none">
                                   <span class="bi bi-pen-fill"></span>
                                  Edit 
                                </a>
                              </li>
                              <li>
                                <a onclick="checkDelete()" href="./Admin/delete?deleteId=<?php echo $fetch_people['id'];?>"class="dropdown-item text-center text-primary text-decoration-none">
                                   <span class="bi bi-trash"></span>
                                   Delete
                                </a>
                              </li>
                                <hr>
                              <li>  
                                <a href="./Admin/reply?replyId=<?php echo $fetch_people['id'];?>" class="dropdown-item text-center text-primary text-decoration-none">
                                    <span class="bi bi-reply"></span>
                                   reply
                                </a>
                              </li>  
                              <li>
                                <a onclick="checkHome()" href="./index" class="dropdown-item text-center text-primary text-decoration-none">
                                    <span class="bi bi-house-fill"></span>
                                   home
                                </a>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <?php
                    }
                  ?>
                 </tbody>
               </table>
               <div class="footer bg-dark shadow">
                <div class="row bg-dark">
                  <div class="co-md-12 bg-dark py-2">
                     <p class="h6 text-light">
                        copyright&copy;2022 - <label for="" id="copydate"></label> || Founder and Developer at Achet-dev || All rights reserved.
                     </p>
                  </div>
                </div>
               </div>
            </center>
          </div>
          <script>
            function checkEdit(){
                var edit = window.confirm("Are you sure you want to Edit the details ?");
                 if (edit==false) {
                     event.preventDefault();
                 }
            }
            function checkDelete(){
                var edit = window.confirm("Are you sure you want to delete ?");
                 if (edit==false) {
                     event.preventDefault();
                 }
            }
            function checkHome(){
                var edit = window.confirm("Are you sure you want to exit the page ?");
                 if (edit==false) {
                     event.preventDefault();
                 }
            }
           $(document).ready(function () {
             $('#example').DataTable();
          });
          var year = new Date();
          var copyDate = year.getFullYear();
          document.getElementById('copydate').innerHTML = copyDate;
        </script>
        </body>
        </html>
      <?php
    }else{
      ?>
      <!DOCTYPE html>
     <style>
         .row .col-md-4{
             border-radius: 20px;
             margin-top: 27vh;
         }
         .row .col-md-4 .container form input[type=submit]{
             border-radius: 20px;
         }
         .row .col-md-4 .container form input[type=submit]:hover{
             background-color: red;
         }
         .row .col-md-4 .container form h1{
             font-size: 50px;
             font-weight: bolder;
         }
     </style>
     <script>
       window.alert("wrong password, try again!!");
     </script>
     <html lang="en">
         <head>
             <title>sign-in</title>
             <meta charset="UTF-8">
             <meta name="viewport" content="width=device-width, initial-scale=1">
             <!-- linking the extenal files -->
             <link href="./style.css" rel="stylesheet">
             <link rel="icon" href="./images/IMG_20220902_222318.jpg" style="width: 50px; border-radius:3px;">
             <link rel="stylesheet" href="./css/bootstrap.min.css">
             <link rel="stylesheet" href="./css/bootstrap-utilities.min.css">
             <script src="./js/bootstrap.bundle.min.js"></script>
             <script src="./js/bootstrap.min.js"></script>
             <!-- link for bi icons -->
             <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
         </head>
         <body>
             <div class="row">
                 <center>
                     <div class="col-md-4 shadow">       
                         <div class="container">
                             <form action="./post" method="post" target="_self">
                                 <h1>
                                     <span class="bi bi-lock-fill"></span>
                                 </h1>
                                 <br>
                                 <input type="email" name="email" id="" class="form-control email  text-center"      data-bs="tooltip" title="user email"  placeholder="Enter your email..." required autofocus>
                                 <br>
                                 <input type="password" name="password" id="" class="form-control password  text-center" data-bs="tooltip" title="correct password"  placeholder="Enter your email..." required>
                                 <a href="./Admin/prepare" class="text-right"> I forgot password.</a>
                                 <br>
                                 <br> 
                                 <input type="submit" class="btn btn-info w-50 shadow" data-bs="tooltip" title="click to login" name="login" value="login">
                             </form>
                             <br>
                             You don't have an account? <a href="./Admin/sign_up">create now.</a>
                             <br>
                             <br>
                         </div>
                     </div>
                 </center>
             </div>
         </body>
     </html>
     <?php
   }
  }else{
    ?>
    <!DOCTYPE html>
    <style>
    .row .col-md-4{
        border-radius: 20px;
        margin-top: 27vh;
    }
    .row .col-md-4 .container form input[type=submit]{
        border-radius: 20px;
    }
    .row .col-md-4 .container form input[type=submit]:hover{
        background-color: red;
    }
    .row .col-md-4 .container form h1{
        font-size: 50px;
        font-weight: bolder;
    }
    </style>
    <script>
      window.alert("The email does not exists please check your email or try again!!");
    </script>
    <html lang="en">
        <head>
            <title>sign-in</title>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <!-- linking the extenal files -->
            <link href="./style.css" rel="stylesheet">
            <link rel="icon" href="./images/IMG_20220902_222318.jpg" style="width: 50px; border-radius:3px;">
            <link rel="stylesheet" href="./css/bootstrap.min.css">
            <link rel="stylesheet" href="./css/bootstrap-utilities.min.css">
            <script src="./js/bootstrap.bundle.min.js"></script>
            <script src="./js/bootstrap.min.js"></script>
            <!-- link for bi icons -->
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
        </head>
        <body>
            <div class="row">
                <center>
                    <div class="col-md-4 shadow">       
                        <div class="container">
                            <form action="./post" method="post" target="_self">
                                <h1>
                                    <span class="bi bi-lock-fill"></span>
                                </h1>
                                <br>
                                <input type="email" name="email" id="" class="form-control email  text-center"     data-bs="tooltip" title="user email"  placeholder="Enter your email..." required autofocus>
                                <br>
                                <input type="password" name="password" id="" class="form-control password  text-center"  data-bs="tooltip" title="correct password"  placeholder="Enter your email..." required>
                                <a href="./Admin/prepare" class="text-right"> I forgot password.</a>
                                <br>
                                <br> 
                                <input type="submit" class="btn btn-info w-50 shadow" data-bs="tooltip" title="click to  login" name="login" value="login">
                            </form>
                            <br>
                            You don't have an account? <a href="./Admin/sign_up">create now.</a>
                            <br>
                            <br>
                        </div>
                    </div>
                </center>
            </div>
        </body>
    </html>
    <?php
  }

  //reset password...........
}elseif(isset($_POST['prepare'])){
 //geting the email entered by the user
  $pre_email = mysqli_real_escape_string($con,$_POST['email']);
  $pre_check ="SELECT * FROM `accounts_table` WHERE email = '$pre_email'";
  $pre_q = mysqli_query($con,$pre_check);
  $pre_rows =mysqli_num_rows($pre_q);
  if($pre_rows==1){
    //code to send to the user email number
    $pre_code = mysqli_fetch_assoc($pre_q);
     $stored_code = $pre_code['user_code'];
     ?>
     <!DOCTYPE html>
<style>
    .row .col-md-4{
        border-radius: 20px;
        margin-top: 38vh;
    }
    .row .col-md-4 .container form input[type=submit]{
        border-radius: 20px;
    }
    .row .col-md-4 .container form input[type=submit]:hover{
        background-color: red;
        transition: cubic-bezier(0.075, 0.82, 0.165, 1);
    }
    .row .col-md-4 .container form h1{
        font-size: 50px;
        font-weight: bolder;
    }
</style>
<html lang="en">
    <head>
        <title>confirm your code</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- linking the extenal files -->
        <link href="./style.css" rel="stylesheet">
        <link rel="icon" href="./images/IMG_20220902_222318.jpg" style="width: 50px; border-radius:3px;">
        <link rel="stylesheet" href="./css/bootstrap.min.css">
        <link rel="stylesheet" href="./css/bootstrap-utilities.min.css">
        <script src="./js/bootstrap.bundle.min.js"></script>
        <script src="./js/bootstrap.min.js"></script>
        <!-- link for bi icons -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    </head>
    <body>
        <div class="row">
            <center>
                <div class="col-md-4 shadow">
                    <div class="container px-4">
                        <form action="./post" method="post" target="_self">
                            <br>
                            <p>
                                Enter the code sent to your email <?php echo $stored_code;?>
                            </p>
                            <input type="text" name="email" value="<?php echo $pre_email;?>"style="visibility:collapse;">
                            <input type="text" name="code" id="" value="<?php echo $stored_code; ?>" class="form-control input-text  text-center" data-bs="tooltip" title="user email"  placeholder="Enter the code..." required autocomplete="off" autofocus minlength="6" maxlength="6">
                            <br>
                            <input type="submit" class="btn btn-info w-50 shadow" data-bs="tooltip" title="click to start resetting your password" name="confirm" value="confirm code">
                        </form>
                        <br>
                    </div>
                </div>
            </center>
        </div>
    </body>
</html>
     <?php
  }else{
    echo "error due to ->".mysqli_connect_error($con);
  }
}elseif(isset($_POST['confirm'])){
  $reset_email = mysqli_real_escape_string($con,$_POST['email']);
  $reset_code = mysqli_real_escape_string($con,$_POST['code']);
  $reset_check = "SELECT * FROM `accounts_table` WHERE email = '$reset_email'";
  $reset_q = mysqli_query($con,$reset_check);
  $reset_rows = mysqli_num_rows($reset_q);
  if($reset_rows==1){
    $fetch_code = mysqli_fetch_assoc($reset_q);
    $fetched_code =$fetch_code['user_code'];
    if($reset_code==$fetched_code){
      ?>
      <!DOCTYPE html>
<style>
    .row .col-md-4{
        border-radius: 20px;
        margin-top: 25vh;
    }
    .row .col-md-4 .container form input[type=submit]{
        border-radius: 20px;
    }
    .row .col-md-4 .container form input[type=submit]:hover{
        background-color: red;
        transition: cubic-bezier(0.075, 0.82, 0.165, 1);
    }
    .row .col-md-4 .container form h1{
        font-size: 50px;
        font-weight: bolder;
    }
</style>
<script>
    function confirm(val){
        var pass , c_pass;
        pass =document.getElementById("password").value;
        c_pass = val;
        var text = document.getElementById("show");
        if(pass.length !=0){
            if(pass==c_pass){
               text.textContent ="passwords match";
               text.style.backgroundColor ="green";
            }else{
              text.textContent ="passwords does not  match!!";
              text.style.backgroundColor ="red";
           }
        }else{
             window.alert('password can not be emapty !!');
        }
    }
</script>
<html lang="en">
    <head>
        <title>reset your password</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- linking the extenal files -->
        <link href="./style.css" rel="stylesheet">
        <link rel="icon" href="./images/IMG_20220902_222318.jpg" style="width: 50px; border-radius:3px;">
        <link rel="stylesheet" href="./css/bootstrap.min.css">
        <link rel="stylesheet" href="./css/bootstrap-utilities.min.css">
        <script src="./js/bootstrap.bundle.min.js"></script>
        <script src="./js/bootstrap.min.js"></script>
        <!-- link for bi icons -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    </head>
    <body>
        <div class="row">
            <center>
                <div class="col-md-4 shadow">
                    <div class="container px-4">
                        <form action="./post" method="post" target="_self">
                            <h1>
                                <span class="bi bi-person-fill"></span>
                            </h1>
                            <input type="email" name="email" value="<?php echo $reset_email?>" id="" data-bs="tooltip" title="user email"  placeholder="Enter your email..." required autocomplete="off" readonly style="visibility:collapse;">
                            <br>
                            <input type="password" name="password" id="password" class="form-control password  text-center" data-bs="tooltip" title="correct password"  placeholder="Create a strong password" required minlength="6" autocomplete="off">
                            <br>
                            <input type="password" name="confirm_password" id="confrim_password" class="form-control password  text-center" data-bs="tooltip" title="confirm  password"  placeholder="Confirm your password" required minlength="6" autocomplete="off" oninput="confirm(this.value)">
                            <label id="show"></label>
                            <br>
                            <input type="submit" class="btn btn-info w-50 shadow" data-bs="tooltip" title="click to reset your password" name="reset_password" value="Reset password">
                        </form>
                        <br>
                    </div>
                </div>
            </center>
        </div>
    </body>
</html>
      <?php
    }else{
      ?>
       <!DOCTYPE html>
<style>
    .row .col-md-4{
        border-radius: 20px;
        margin-top: 38vh;
    }
    .row .col-md-4 .container form input[type=submit]{
        border-radius: 20px;
    }
    .row .col-md-4 .container form input[type=submit]:hover{
        background-color: red;
        transition: cubic-bezier(0.075, 0.82, 0.165, 1);
    }
    .row .col-md-4 .container form h1{
        font-size: 50px;
        font-weight: bolder;
    }
</style>
<script>
    window.alert('wrong code');
</script>
<html lang="en">
    <head>
        <title>confirm your code</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- linking the extenal files -->
        <link href="./style.css" rel="stylesheet">
        <link rel="icon" href="./images/IMG_20220902_222318.jpg" style="width: 50px; border-radius:3px;">
        <link rel="stylesheet" href="./css/bootstrap.min.css">
        <link rel="stylesheet" href="./css/bootstrap-utilities.min.css">
        <script src="./js/bootstrap.bundle.min.js"></script>
        <script src="./js/bootstrap.min.js"></script>
        <!-- link for bi icons -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    </head>
    <body>
        <div class="row">
            <center>
                <div class="col-md-4 shadow">
                    <div class="container px-4">
                        <form action="./post" method="post" target="_self">
                            <br>
                            <p>
                                Enter the code sent to your email <?php echo $fetched_code;?>
                            </p>
                            <input type="text" name="email" value="<?php echo $reset_email;?>"style="visibility:collapse;">
                            <input type="text" name="code" id=""  class="form-control input-text  text-center" data-bs="tooltip" title="user email"  placeholder="Enter the code..." required autocomplete="off" autofocus minlength="6" maxlength="6">
                            <br>
                            <input type="submit" class="btn btn-info w-50 shadow" data-bs="tooltip" title="click to start resetting your password" name="confirm" value="confirm code">
                        </form>
                        <br>
                    </div>
                </div>
            </center>
        </div>
    </body>
</html>
      <?php
    }

  }else{
    echo mysqli_connect_error($con);
  }
}elseif(isset($_POST['reset_password'])){
  //getting the input
  $reset_emailNumber = mysqli_real_escape_string($con,$_POST['email']);
  $reset_password = mysqli_real_escape_string($con,md5($_POST['password']));
  $confirm_reset_password =mysqli_real_escape_string($con,md5($_POST['confirm_password']));
  //checking if the passwrods match
  if($confirm_reset_password == $reset_password){
    $update_pass = "UPDATE `accounts_table` SET `password`= '$reset_password',`confirm_password`='$confirm_reset_password' WHERE  email ='$reset_emailNumber'";
    $update_pass_q = mysqli_query($con,$update_pass);
    if($update_pass_q){
      ?>
      <!DOCTYPE html>
<style>
    .row .col-md-4{
        border-radius: 20px;
        margin-top: 27vh;
    }
    .row .col-md-4 .container form input[type=submit]{
        border-radius: 20px;
    }
    .row .col-md-4 .container form input[type=submit]:hover{
        background-color: red;
    }
    .row .col-md-4 .container form h1{
        font-size: 50px;
        font-weight: bolder;
    }
</style>
<html lang="en">
    <head>
        <title>sign-in</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- linking the extenal files -->
        <link href="./style.css" rel="stylesheet">
        <link rel="icon" href="./images/IMG_20220902_222318.jpg" style="width: 50px; border-radius:3px;">
        <link rel="stylesheet" href="./css/bootstrap.min.css">
        <link rel="stylesheet" href="./css/bootstrap-utilities.min.css">
        <script src="./js/bootstrap.bundle.min.js"></script>
        <script src="./js/bootstrap.min.js"></script>
        <script>
          window.alert("Your password has been reset successfully");
        </script>
        <!-- link for bi icons -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    </head>
    <body>
        <div class="row">
            <center>
                <div class="col-md-4 shadow">       
                    <div class="container">
                        <form action="./post" method="post" target="_self">
                            <h1>
                                <span class="bi bi-lock-fill"></span>
                            </h1>
                            <br>
                            <input type="email" name="email" id="" class="form-control email  text-center" data-bs="tooltip" title="user email"  placeholder="Enter your email..." required autofocus>
                            <br>
                            <input type="password" name="password" id="" class="form-control password  text-center" data-bs="tooltip" title="correct password"  placeholder="Enter your email..." required>
                            <a href="./Admin/prepare" class="text-right"> I forgot password.</a>
                            <br>
                            <br> 
                            <input type="submit" class="btn btn-info w-50 shadow" data-bs="tooltip" title="click to login" name="login" value="login">
                        </form>
                        <br>
                        You don't have an account? <a href="./Admin/sign_up">create now.</a>
                        <br>
                        <br>
                    </div>
                </div>
            </center>
          </div>
    </body>
</html>
      <?php
    }else{
      echo mysqli_connect_error($con);
    }

  }else{
    ?>
    <!DOCTYPE html>
<style>
    .row .col-md-4{
        border-radius: 20px;
        margin-top: 38vh;
    }
    .row .col-md-4 .container form input[type=submit]{
        border-radius: 20px;
    }
    .row .col-md-4 .container form input[type=submit]:hover{
        background-color: red;
        transition: cubic-bezier(0.075, 0.82, 0.165, 1);
    }
    .row .col-md-4 .container form h1{
        font-size: 50px;
        font-weight: bolder;
    }
</style>
<html lang="en">
    <head>
        <title>confirm your email</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- linking the extenal files -->
        <link href="./style.css" rel="stylesheet">
        <link rel="icon" href="./images/IMG_20220902_222318.jpg" style="width: 50px; border-radius:3px;">
        <link rel="stylesheet" href="./css/bootstrap.min.css">
        <link rel="stylesheet" href="./css/bootstrap-utilities.min.css">
        <script src="./js/bootstrap.bundle.min.js"></script>
        <script src="./js/bootstrap.min.js"></script>
        <!-- link for bi icons -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    </head>
    <body>
        <div class="row">
            <center>
                <div class="col-md-4 shadow">
                    <div class="container px-4">
                        <form action="./post" method="post" target="_self">
                            <br>
                            <p>
                                Enter your correct email to confirm.
                            </p>
                            <input type="email" name="email" id="" class="form-control email  text-center" data-bs="tooltip" title="user email"  placeholder="Enter your email..." required autocomplete="off" autofocus>
                            <br>
                            <input type="submit" class="btn btn-info w-50 shadow" data-bs="tooltip" title="click to start resetting your password" name="prepare" value="confirm">
                        </form>
                        <br>
                    </div>
                </div>
            </center>
        </div>
        <script>
          window.alert("passwords do not match!!");
        </script>
    </body>
</html>
    <?php
  }
}elseif(isset($_POST['read'])){
    $id = mysqli_real_escape_string($con,$_POST['status']);
    $set_status = "UPDATE `contact` SET `status`='1' WHERE id=$id";
    $set_q = mysqli_query($con,$set_status);
    if ($set_q) {
 //selecting the number of contacts
       
 $people_contact = "SELECT * FROM `contact`";
 $contact_q = mysqli_query($con,$people_contact);

 //counts
 $count = "SELECT COUNT(id) AS COUNT FROM contact";
 $countQ = mysqli_query($con,$count);
 $count_fetch = mysqli_fetch_assoc($countQ);
 $all_contacts = $count_fetch['COUNT'];
 $count_new= "SELECT COUNT(id) AS COUNT FROM contact WHERE status='0'";
 $countQ_new = mysqli_query($con,$count_new);
 $count_fetch_new = mysqli_fetch_assoc($countQ_new);
 $all_contacts_new= $count_fetch_new['COUNT'];
  ?>
  <!DOCTYPE html>
  <style>
    .footer{
      margin-top: 60vh;
      position:sticky;
    }
    .footer .row .col-md-12{
      border-radius: 30px;

    }
  body {
  /* Set the Serial counter to 0 */
  counter-reset: Serial; 
  }
 .a:hover{
  color: rgb(200,0,0  );
 }
  table {
      border-collapse: separate;
  }
  
  tr td:first-child:before {
      /* Increment the Serial counter */
      counter-increment: Serial;
  
      /* Display the counter */
      content:counter(Serial); 
  }
  </style>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- linking the extenal files -->
    <link href="./style.css" rel="stylesheet">
    <link rel="icon" href="./images/IMG_20220902_222318.jpg" style="width: 50px; border-radius:3px;">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/bootstrap-utilities.min.css">
    <script src="./js/bootstrap.bundle.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <!-- popper script link -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"        integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>

    <!-- link for bi icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <title>reach outs</title>
  </head>
  <body>
    <div class="container mt-5">
      <center>
          <div class="row">    
          <div class="col-md-4">
          <div class="text text-center">
              <a href="#">
                  <button class="btn btn-secondary" value="">All
                    <i class="fab fa-inbox" aria-hidden="true"></i>
                      <span class="badge bg-danger">
                      <?php
                         echo $all_contacts;
                      ?>
                      </span>
                  </button>
              </a>
           
          </div>
      </div>
      <div class="col-md-4">
          <div class="text text-center">
              <form action="./post" method="POST">
                  <button type="submit" name="read_all" class="btn btn-secondary" value="">
                      <?php
                        if($all_contacts_new>0){
                          echo 'mark all as read';
                        }else{
                          echo ' read!';
                        }
                       ?>
                    <i class="fab fa-inbox" aria-hidden="true"></i>
                      <span class="badge bg-danger">
                      <?php
                         echo $all_contacts_new;
                      ?>
                      </span>
                  </button>
              </form>
           
          </div>
      </div>
      <div class="col-4">
          <div class="text text-center">
              <a href="./Admin/messages">
                  <button class="btn btn-secondary" value="">new
                    <i class="fab fa-inbox" aria-hidden="true"></i>
                      <span class="badge bg-danger">
                      <?php
                         echo $all_contacts_new ;
                      ?>
                      </span>
                  </button>
              </a>
           
          </div>
      </div>
          </div>
          
         <table id="example" class="table table-striped table-bordered w-100 shadow mt-5">
           <thead class="text-center text-uppercase">
            <th>
              No:
            </th>
            <th>
               Name
            </th>
            <th>
              phone number
            </th>
            <th>
              email
            </th>
            <th>
              message
            </th>
            <th>
              status
            </th>
            <th>
              date contacted
            </th>
            <th>
              operations
            </th>
           </thead>
           <tbody>
            <?php
             while($fetch_people =mysqli_fetch_assoc($contact_q)){
              ?>
              <tr>
                <td></td>
                <td>
                  <?php
                  echo $fetch_people['name'];
                  ?>
                </td>
                <td>
                  <?php
                  echo'0'.$fetch_people['phone_number'];
                  ?>
                </td>
                <td>
                  <?php
                  echo $fetch_people['email'];
                  ?>
                </td>
                <td>
                  <?php
                  echo $fetch_people['message'];
                  ?>
                </td>
                <td>
                  <?php 
                   $new = $fetch_people['status'];
                   if($new==1){
                      echo 'read';
                   }else{
                      echo 'unread';
                   }
                  ?>
                </td>
                <td>
                  <?php
                  echo $fetch_people['date'];
                  ?>
                </td>
                <td>
                  <div class="container-fluid justify-content-between text-center">
                    <div class="dropdown">
                      <button class=" btn dropdown-toggle" type="button" data-bs-toggle="dropdown" id="dropdownMenu1" aria-expanded="false">
                      </button>
                      <ul class="dropdown-menu shadow" aria-labelledby="dropdownMenu1">
                        <li>
                          <a onclick="checkEdit()" href="./Admin/update?updateId=<?php echo $fetch_people['id'];?>" class="dropdown-item text-center text-primary hover-red text-decoration-none">
                             <span class="bi bi-pen-fill"></span>
                            Edit 
                          </a>
                        </li>
                        <li>
                          <a onclick="checkDelete()" href="./Admin/delete?deleteId=<?php echo $fetch_people['id'];?>"class="dropdown-item text-center text-primary text-decoration-none">
                             <span class="bi bi-trash"></span>
                             Delete
                          </a>
                        </li>
                          <hr>
                        <li>  
                          <a href="./Admin/reply?replyId=<?php echo $fetch_people['id'];?>" class="dropdown-item text-center text-primary text-decoration-none">
                              <span class="bi bi-reply"></span>
                             reply
                          </a>
                        </li>  
                        <li>
                          <a onclick="checkHome()" href="./index" class="dropdown-item text-center text-primary text-decoration-none">
                              <span class="bi bi-house-fill"></span>
                             home
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </td>
              </tr>
              <?php
              }
            ?>
           </tbody>
         </table>
         <div class="footer bg-dark shadow">
          <div class="row bg-dark">
            <div class="co-md-12 bg-dark py-2">
               <p class="h6 text-light">
                  copyright&copy;2022 - <label for="" id="copydate"></label> || Founder and Developer at Achet-dev || All rights reserved.
               </p>
            </div>
          </div>
         </div>
      </center>
    </div>
    <script>
       function checkEdit(){
              var edit = window.confirm("Are you sure you want to Edit the details ?");
               if (edit==false) {
                   event.preventDefault();
               }
          }
          function checkDelete(){
              var edit = window.confirm("Are you sure you want to delete ?");
               if (edit==false) {
                   event.preventDefault();
               }
          }
          function checkHome(){
              var edit = window.confirm("Are you sure you want to exit the page ?");
               if (edit==false) {
                   event.preventDefault();
               }
          }
     $(document).ready(function () {
       $('#example').DataTable();
    });
    var year = new Date();
    var copyDate = year.getFullYear();
    document.getElementById('copydate').innerHTML = copyDate;
    window.alert('Data has been updated successfully');
  </script>
  </body>
  </html>
<?php
    }else{
        echo mysqli_connect_error($con);
    }
 // updating the details 
}elseif(isset($_POST['update'])){
    $u_id =mysqli_real_escape_string($con,$_POST['id']);
    $u_phone =mysqli_real_escape_string($con,$_POST['phone']);
    $u_email = mysqli_real_escape_string($con,$_POST['email']);

    $update ="UPDATE `contact` SET `phone_number`='$u_phone',`email`='$u_email'  WHERE id='$u_id'";
    $u_q = mysqli_query($con,$update);
    if($u_q){
   //selecting the number of contacts
       
   $people_contact = "SELECT * FROM `contact`";
   $contact_q = mysqli_query($con,$people_contact);

   //counts
   $count = "SELECT COUNT(id) AS COUNT FROM contact";
   $countQ = mysqli_query($con,$count);
   $count_fetch = mysqli_fetch_assoc($countQ);
   $all_contacts = $count_fetch['COUNT'];
   $count_new= "SELECT COUNT(id) AS COUNT FROM contact WHERE status='0'";
   $countQ_new = mysqli_query($con,$count_new);
   $count_fetch_new = mysqli_fetch_assoc($countQ_new);
   $all_contacts_new= $count_fetch_new['COUNT'];
    ?>
    <!DOCTYPE html>
    <style>
      .footer{
        margin-top: 60vh;
        position:sticky;
      }
      .footer .row .col-md-12{
        border-radius: 30px;

      }
    body {
    /* Set the Serial counter to 0 */
    counter-reset: Serial; 
    }
   .a:hover{
    color: rgb(200,0,0  );
   }
    table {
        border-collapse: separate;
    }
    
    tr td:first-child:before {
        /* Increment the Serial counter */
        counter-increment: Serial;
    
        /* Display the counter */
        content:counter(Serial); 
    }
    </style>
    <html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- linking the extenal files -->
      <link href="./style.css" rel="stylesheet">
      <link rel="icon" href="./images/IMG_20220902_222318.jpg" style="width: 50px; border-radius:3px;">
      <link rel="stylesheet" href="./css/bootstrap.min.css">
      <link rel="stylesheet" href="./css/bootstrap-utilities.min.css">
      <script src="./js/bootstrap.bundle.min.js"></script>
      <script src="./js/bootstrap.min.js"></script>
      <!-- popper script link -->
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"        integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>

      <!-- link for bi icons -->
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
      <title>reach outs</title>
    </head>
    <body>
      <div class="container mt-5">
        <center>
            <div class="row">    
            <div class="col-md-4">
            <div class="text text-center">
                <a href="#">
                    <button class="btn btn-secondary" value="">All
                      <i class="fab fa-inbox" aria-hidden="true"></i>
                        <span class="badge bg-danger">
                        <?php
                           echo $all_contacts;
                        ?>
                        </span>
                    </button>
                </a>
             
            </div>
        </div>
        <div class="col-md-4">
            <div class="text text-center">
                <form action="./post" method="POST">
                    <button type="submit" name="read_all" class="btn btn-secondary" value="">
                        <?php
                          if($all_contacts_new>0){
                            echo 'mark all as read';
                          }else{
                            echo ' read!';
                          }
                         ?>
                      <i class="fab fa-inbox" aria-hidden="true"></i>
                        <span class="badge bg-danger">
                        <?php
                           echo $all_contacts_new;
                        ?>
                        </span>
                    </button>
                </form>
             
            </div>
        </div>
        <div class="col-4">
            <div class="text text-center">
                <a href="./Admin/messages">
                    <button class="btn btn-secondary" value="">new
                      <i class="fab fa-inbox" aria-hidden="true"></i>
                        <span class="badge bg-danger">
                        <?php
                           echo $all_contacts_new ;
                        ?>
                        </span>
                    </button>
                </a>
             
            </div>
        </div>
            </div>
            
           <table id="example" class="table table-striped table-bordered w-100 shadow mt-5">
             <thead class="text-center text-uppercase">
              <th>
                No:
              </th>
              <th>
                 Name
              </th>
              <th>
                phone number
              </th>
              <th>
                email
              </th>
              <th>
                message
              </th>
              <th>
                status
              </th>
              <th>
                date contacted
              </th>
              <th>
                operations
              </th>
             </thead>
             <tbody>
              <?php
               while($fetch_people =mysqli_fetch_assoc($contact_q)){
                ?>
                <tr>
                  <td></td>
                  <td>
                    <?php
                    echo $fetch_people['name'];
                    ?>
                  </td>
                  <td>
                    <?php
                    echo'0'.$fetch_people['phone_number'];
                    ?>
                  </td>
                  <td>
                    <?php
                    echo $fetch_people['email'];
                    ?>
                  </td>
                  <td>
                    <?php
                    echo $fetch_people['message'];
                    ?>
                  </td>
                  <td>
                    <?php 
                     $new = $fetch_people['status'];
                     if($new==1){
                        echo 'read';
                     }else{
                        echo 'unread';
                     }
                    ?>
                  </td>
                  <td>
                    <?php
                    echo $fetch_people['date'];
                    ?>
                  </td>
                  <td>
                    <div class="container-fluid justify-content-between text-center">
                      <div class="dropdown">
                        <button class=" btn dropdown-toggle" type="button" data-bs-toggle="dropdown" id="dropdownMenu1" aria-expanded="false">
                        </button>
                        <ul class="dropdown-menu shadow" aria-labelledby="dropdownMenu1">
                          <li>
                            <a onclick="checkEdit()" href="./Admin/update?updateId=<?php echo $fetch_people['id'];?>" class="dropdown-item text-center text-primary hover-red text-decoration-none">
                               <span class="bi bi-pen-fill"></span>
                              Edit 
                            </a>
                          </li>
                          <li>
                            <a onclick="checkDelete()" href="./Admin/delete?deleteId=<?php echo $fetch_people['id'];?>"class="dropdown-item text-center text-primary text-decoration-none">
                               <span class="bi bi-trash"></span>
                               Delete
                            </a>
                          </li>
                            <hr>
                          <li>  
                            <a href="./Admin/reply?replyId=<?php echo $fetch_people['id'];?>" class="dropdown-item text-center text-primary text-decoration-none">
                                <span class="bi bi-reply"></span>
                               reply
                            </a>
                          </li>  
                          <li>
                            <a onclick="checkHome()" href="./index" class="dropdown-item text-center text-primary text-decoration-none">
                                <span class="bi bi-house-fill"></span>
                               home
                            </a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </td>
                </tr>
                <?php
                }
              ?>
             </tbody>
           </table>
           <div class="footer bg-dark shadow">
            <div class="row bg-dark">
              <div class="co-md-12 bg-dark py-2">
                 <p class="h6 text-light">
                    copyright&copy;2022 - <label for="" id="copydate"></label> || Founder and Developer at Achet-dev || All rights reserved.
                 </p>
              </div>
            </div>
           </div>
        </center>
      </div>
      <script>
         function checkEdit(){
                var edit = window.confirm("Are you sure you want to Edit the details ?");
                 if (edit==false) {
                     event.preventDefault();
                 }
            }
            function checkDelete(){
                var edit = window.confirm("Are you sure you want to delete ?");
                 if (edit==false) {
                     event.preventDefault();
                 }
            }
            function checkHome(){
                var edit = window.confirm("Are you sure you want to exit the page ?");
                 if (edit==false) {
                     event.preventDefault();
                 }
            }
       $(document).ready(function () {
         $('#example').DataTable();
      });
      var year = new Date();
      var copyDate = year.getFullYear();
      document.getElementById('copydate').innerHTML = copyDate;
      window.alert('Data has been updated successfully');
    </script>
    </body>
    </html>
   <?php

    }else{
        echo mysqli_connect_error($con);
    }
}elseif(isset($_POST['read_all'])){
    $read = "UPDATE contact SET status='1' WHERE status='0'";
    $read_q = mysqli_query($con,$read);
    if($read_q){
     //selecting the number of contacts
       
       $people_contact = "SELECT * FROM `contact`";
       $contact_q = mysqli_query($con,$people_contact);

       //counts
       $count = "SELECT COUNT(id) AS COUNT FROM contact";
       $countQ = mysqli_query($con,$count);
       $count_fetch = mysqli_fetch_assoc($countQ);
       $all_contacts = $count_fetch['COUNT'];
       $count_new= "SELECT COUNT(id) AS COUNT FROM contact WHERE status='0'";
       $countQ_new = mysqli_query($con,$count_new);
       $count_fetch_new = mysqli_fetch_assoc($countQ_new);
       $all_contacts_new= $count_fetch_new['COUNT'];
        ?>
        <!DOCTYPE html>
        <style>
          .footer{
            margin-top: 60vh;
            position:sticky;
          }
          .footer .row .col-md-12{
            border-radius: 30px;

          }
        body {
        /* Set the Serial counter to 0 */
        counter-reset: Serial; 
        }
       .a:hover{
        color: rgb(200,0,0  );
       }
        table {
            border-collapse: separate;
        }
        
        tr td:first-child:before {
            /* Increment the Serial counter */
            counter-increment: Serial;
        
            /* Display the counter */
            content:counter(Serial); 
        }
        </style>
        <html lang="en">
        <head>
          <meta charset="UTF-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <!-- linking the extenal files -->
          <link href="./style.css" rel="stylesheet">
          <link rel="icon" href="./images/IMG_20220902_222318.jpg" style="width: 50px; border-radius:3px;">
          <link rel="stylesheet" href="./css/bootstrap.min.css">
          <link rel="stylesheet" href="./css/bootstrap-utilities.min.css">
          <script src="./js/bootstrap.bundle.min.js"></script>
          <script src="./js/bootstrap.min.js"></script>
          <!-- popper script link -->
          <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"        integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>

          <!-- link for bi icons -->
          <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
          <title>reach outs</title>
        </head>
        <body>
          <div class="container mt-5">
            <center>
                <div class="row">
                <div class="col-md-4">
                <div class="text text-center">
                    <a href="#">
                        <button class="btn btn-secondary" value="">All
                          <i class="fab fa-inbox" aria-hidden="true"></i>
                            <span class="badge bg-danger">
                            <?php
                               echo $all_contacts;
                            ?>
                            </span>
                        </button>
                    </a>
                 
                </div>
            </div>
            <div class="col-md-4">
                <div class="text text-center">
                    <form action="./post" method="POST">
                        <button type="submit" name="read_all" class="btn btn-secondary" value="">
                            <?php
                              if($all_contacts_new>0){
                                echo 'mark all as read';
                              }else{
                                echo ' read!';
                              }
                             ?>
                          <i class="fab fa-inbox" aria-hidden="true"></i>
                            <span class="badge bg-danger">
                            <?php
                               echo $all_contacts_new;
                            ?>
                            </span>
                        </button>
                    </form>
                 
                </div>
            </div>
            <div class="col-4">
                <div class="text text-center">
                    <a href="./Admin/messages">
                        <button class="btn btn-secondary" value="">new
                          <i class="fab fa-inbox" aria-hidden="true"></i>
                            <span class="badge bg-danger">
                            <?php
                               echo $all_contacts_new ;
                            ?>
                            </span>
                        </button>
                    </a>
                 
                </div>
            </div>
                </div>
                
               <table id="example" class="table table-striped table-bordered w-100 shadow mt-5">
                 <thead class="text-center text-uppercase">
                  <th>
                    No:
                  </th>
                  <th>
                     Name
                  </th>
                  <th>
                    phone number
                  </th>
                  <th>
                    email
                  </th>
                  <th>
                    message
                  </th>
                  <th>
                    status
                  </th>
                  <th>
                    date contacted
                  </th>
                  <th>
                    operations
                  </th>
                 </thead>
                 <tbody>
                  <?php
                   while($fetch_people =mysqli_fetch_assoc($contact_q)){
                    ?>
                    <tr>
                      <td></td>
                      <td>
                        <?php
                        echo $fetch_people['name'];
                        ?>
                      </td>
                      <td>
                        <?php
                        echo'0'.$fetch_people['phone_number'];
                        ?>
                      </td>
                      <td>
                        <?php
                        echo $fetch_people['email'];
                        ?>
                      </td>
                      <td>
                        <?php
                        echo $fetch_people['message'];
                        ?>
                      </td>
                      <td>
                        <?php 
                         $new = $fetch_people['status'];
                         if($new==1){
                            echo 'read';
                         }else{
                            echo 'unread';
                         }
                        ?>
                      </td>
                      <td>
                        <?php
                        echo $fetch_people['date'];
                        ?>
                      </td>
                      <td>
                        <div class="container-fluid justify-content-between text-center">
                          <div class="dropdown">
                            <button class=" btn dropdown-toggle" type="button" data-bs-toggle="dropdown" id="dropdownMenu1" aria-expanded="false">
                            </button>
                            <ul class="dropdown-menu shadow" aria-labelledby="dropdownMenu1">
                              <li>
                                <a onclick="checkEdit()" href="./Admin/update?updateId=<?php echo $fetch_people['id'];?>" class="dropdown-item text-center text-primary hover-red text-decoration-none">
                                   <span class="bi bi-pen-fill"></span>
                                  Edit 
                                </a>
                              </li>
                              <li>
                                <a onclick="checkDelete()" href="./Admin/delete?deleteId=<?php echo $fetch_people['id'];?>"class="dropdown-item text-center text-primary text-decoration-none">
                                   <span class="bi bi-trash"></span>
                                   Delete
                                </a>
                              </li>
                                <hr>
                              <li>  
                                <a href="./Admin/reply?replyId=<?php echo $fetch_people['id'];?>" class="dropdown-item text-center text-primary text-decoration-none">
                                    <span class="bi bi-reply"></span>
                                   reply
                                </a>
                              </li>  
                              <li>
                                <a onclick="checkHome()" href="./index" class="dropdown-item text-center text-primary text-decoration-none">
                                    <span class="bi bi-house-fill"></span>
                                   home
                                </a>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <?php
                    }
                  ?>
                 </tbody>
               </table>
               <div class="footer bg-dark shadow">
                <div class="row bg-dark">
                  <div class="co-md-12 bg-dark py-2">
                     <p class="h6 text-light">
                        copyright&copy;2022 - <label for="" id="copydate"></label> || Founder and Developer at Achet-dev || All rights reserved.
                     </p>
                  </div>
                </div>
               </div>
            </center>
          </div>
          <script>
             function checkEdit(){
                var edit = window.confirm("Are you sure you want to Edit the details ?");
                 if (edit==false) {
                     event.preventDefault();
                 }
            }
            function checkDelete(){
                var edit = window.confirm("Are you sure you want to delete ?");
                 if (edit==false) {
                     event.preventDefault();
                 }
            }
            function checkHome(){
                var edit = window.confirm("Are you sure you want to exit the page ?");
                 if (edit==false) {
                     event.preventDefault();
                 }
            }
           $(document).ready(function () {
             $('#example').DataTable();
          });
          var year = new Date();
          var copyDate = year.getFullYear();
          document.getElementById('copydate').innerHTML = copyDate;
          window.alert('All messages has been marked as read');
        </script>
        </body>
        </html>
       
        <?php
    }else{
        echo mysqli_connect_error($con);
    }
}

?>