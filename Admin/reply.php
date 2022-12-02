<?php
//including connection file
include_once('../connect.php');
$id = $_GET['replyId'];
$getEmail = "SELECT * FROM `contact` WHERE  id = $id";
$getQuery = mysqli_query($con,$getEmail);
$fetchData = mysqli_fetch_assoc($getQuery);
 $email = $fetchData['email'];
?>
<!DOCTYPE html>
<style>
    .row .col-md-5{
        margin-top: 30vh;
    }
</style>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
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
        <div class="row">
            <center>
                <div class="col-md-5">
                    <form action="../post.php" method="post">
                        <input type="email" name="user_email" value="<?php echo $email;?>" id="" class="form-control email text-center" readonly>
                        <br>
                         <textarea name="message" id="" class="form-control message" cols="30" rows="10" autofocus></textarea>
                         <br>
                         <button class="btn btn-success" type="submit" name="reply">
                            send
                            <span class="bi bi-send"></span>
                         </button>
                    </form>
                </div>
            </center>
        </div>
    </body>
</html>
