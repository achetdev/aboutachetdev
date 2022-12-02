<?php
include_once('../connect.php');
$id = $_GET['deleteId'];
$delete = "DELETE FROM contact WHERE id=$id";
$d_q = mysqli_query($con,$delete);
if($d_q){
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
     <link href="../style.css" rel="stylesheet">
     <link rel="icon" href="../images/IMG_20220902_222318.jpg" style="width: 50px; border-radius:3px;">
     <link rel="stylesheet" href="../css/bootstrap.min.css">
     <link rel="stylesheet" href="../css/bootstrap-utilities.min.css">
     <script src="../js/bootstrap.bundle.min.js"></script>
     <script src="../js/bootstrap.min.js"></script>
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
               <form action="../post" method="POST">
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
                           <a  href="./Admin/reply?replyId=<?php echo $fetch_people['id'];?>" class="dropdown-item text-center text-primary text-decoration-none">
                               <span class="bi bi-reply"></span>
                              reply
                           </a>
                         </li>  
                         <li>
                           <a onclick="checkHome()" href="../index" class="dropdown-item text-center text-primary text-decoration-none">
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
     window.alert('data has been deleted successfully');
   </script>
   </body>
   </html>
   <?php
}else{
    echo mysqli_connect_error($con);
}

?>