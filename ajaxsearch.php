<script type="text/javascript" src="jquery/jquery.js"></script>
<?php
include ('config.php');
 if ((isset($_GET['city']) && !empty($_GET['city']) && (isset($_GET['blood_group']) && !empty($_GET['blood_group']) )) {
   $city=$_GET['city'];
   $bloodgroup= $GET['blood_group'];
   $sql= "SELECT * FROM where city ='$city' OR blood_group ='$blood_group'";
   $result =mysqli_query($connection,$sql);

   if (mysqli_num_rows($result)>0) {
     while ($row =mysqli_fetch_assoc($result)) {
     if ($row['donation_date']=='0') {
     echo '
     <div class="container py-5 ">
       <div class="row row-cols-1 row-cols-md-3 mb-3 text-center d-flex justify-content-evenly ">
         <div class="col">
           <div class="card mb-4 rounded-3 shadow-sm border-primary">
             <div class="card-header py-3 text-white bg-primary border-primary">
               <h4 class="my-0 fw-normal">'.$row['name'].'</h4>
             </div>
             <div class="card-body">
               <h1 class="card-title pricing-card-title">'.$row['blood_group'].'<small class="text-muted fw-light"></small></h1>
               <ul class="list-unstyled mt-3 mb-4">
                 <li>'.$row['city'].'</li>
                 <li>'.$row['gender'].'</li>
                 <li>'.$row['email'].'</li>
                 <li>'.$row['contact_no'].'</li>
                   <li style="color:red;">Not Donated </li>
               </ul>

             </div>
           </div>
         </div>
         </div>
     ';
     } else {
       echo '
       <div class="container py-5 ">
         <div class="row row-cols-1 row-cols-md-3 mb-3 text-center d-flex justify-content-center ">
           <div class="col">
             <div class="card mb-4 rounded-3 shadow-sm border-primary">
               <div class="card-header py-3 text-white bg-primary border-primary">
                 <h4 class="my-0 fw-normal">'.$row['name'].'</h4>
               </div>
               <div class="card-body">
                 <h1 class="card-title pricing-card-title">'.$row['blood_group'].'<small class="text-muted fw-light"></small></h1>
                 <ul class="list-unstyled mt-3 mb-4">
                   <li>'.$row['city'].'</li>
                   <li>'.$row['blood_group'].'</li>
                   <li>'.$row['gender'].'</li>
                   
                     <li style="color:red";>Donated</li>
                 </ul>

               </div>
             </div>
           </div>
           </div>
       ';
     }

     }
   } else {
       echo ' <div class="alert alert-warning alert-dismissible fade show" role="alert">
     <strong>Holy guacamole!</strong> Data Not Found.
     <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
   </div>' ;
   }

 }

 ?>
