<?php
//include connection file
include_once('../connect.php');
$u_id = $_GET['updateId'];
//select update
$u_select = "SELECT * FROM contact WHERE id='$u_id'";
$u_q = mysqli_query($con,$u_select);
if($u_q){
    $fetch = mysqli_fetch_assoc($u_q);
    ?>
    <!DOCTYPE html>
    <html lang="en">
        <style>
           .container .row{
                margin-top: 10vh;
            }
            .container .row .col-md-5{
                border-radius: 50px;
                -webkit-border-radius: 50px;
                -moz-border-radius: 50px;
                -ms-border-radius: 50px;
                -o-border-radius: 50px;
            }
        </style>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Edit</title>
        <!-- linking the extenal files -->
        <link href="../style.css" rel="stylesheet">
        <link rel="icon" href="../images/IMG_20220902_222318.jpg" style="width: 50px; border-radius:3px;">
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/bootstrap-utilities.min.css">
        <script src="../js/bootstrap.bundle.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <!-- link for bi icons -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <center>
                    <div class="col-md-5 shadow px-2">
                        <form action="../post" method="post">
                            <p>
                                Editing <span class="bi bi-pen"></span> the details of <q><?php echo $fetch['name'];?></q>.
                            </p>
                            <input type="text" name="id" style="visibility:collapse;" value="<?php echo $fetch['id'];?>">
                            <div class="input-group mb-2">
                               <span class="input-group-text">username</span>
                                  <input type="text" name="username" value="<?php echo $fetch['name']; ?>" class="form-control usename text-center" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" readonly >
                            </div>
                            <div class="input-group mb-2">
                               <span class="input-group-text">phone number</span>
                                  <input type="text" name="phone" value="<?php echo '0'.$fetch['phone_number']; ?>" class="form-control phone text-center" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"  autofocus>
                            </div>
                            <div class="input-group mb-2">
                               <span class="input-group-text">email</span>
                                  <input type="text" name="email" value="<?php echo $fetch['email']; ?>" class="form-control email text-center" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"  >
                            </div>
                                <!-- you can't edit someones message -->
                            <textarea name="message" id="" cols="30" class="form-control message mb-2" readonly  rows="10"> 
                              <?php echo $fetch['message'];?>
                            </textarea>
                            <input type="submit" value="update" name="update" class="btn btn-primary w-50">
                            <br>
                            <br>
                        </form>
                    </div>
                </center>
            </div>
        </div>
        
    </body>
    </html>

    <?php

}else{
    echo'error'.mysqli_connect_error($con);
}
?>