<?php
 //include nconnection file
include_once('../connect.php');
 $count_new= "SELECT * FROM contact WHERE status = '0'";
 $countQ_new = mysqli_query($con,$count_new);
?>
<!DOCTYPE html>
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
        <center>
            <?php 
              while($count_fetch_new = mysqli_fetch_assoc($countQ_new)){
                ?>
                <div class="row">
                    <center>
                        <div class="col-md-5">
                        <div class="card text-center">
                        <h4>
                            <?php
                              echo $count_fetch_new['name'];
                            ?>
                        </h4>
                       <div class="card-body">
                         <h5 class="card-title">
                            Sent a message on <?php
                            echo $count_fetch_new['date'];
                            ?>
                         </h5>
                         <p class="card-text">
                            <?php
                              echo $count_fetch_new['message'];
                            ?>
                         </p>
                         <form action="../post.php" method="POST">
                            <input type="text" name="status" id="" value="<?php echo $count_fetch_new['id'];?>" style="visibility:collapse;">
                            <button name="read" class="btn btn-success" type="submit">
                                mark as read
                                <span class="bi bi-check"></span>
                            </button>
                         </form>
                       </div>
                       <hr>
                     </div>
                        </div>
                    </center>
                 </div>
                <?php
             }
            ?>

           
             <div class="row bg-dar">
                <div class="container ml-4 bg-dark">
                   <div class="col-md-12 bg-dark">
                       <p class="text-light text-center">
                           copyright&copy;2022-<label for="" id="copyDate" class="text-light"></label> || All rights   Founder  and developer of Achet-devolopment.|| Full-stacke developer.
                       </p>
                   </div>
                </div>
             </div>
        </center>
      <script>
          let date = new Date();
          let copyDate = date.getUTCFullYear();
          document.getElementById('copyDate').innerHTML=copyDate;
      </script>
    </body>
</html>