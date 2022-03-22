<?php
$title = "Success";
require_once 'includes/header.php';
require_once 'db/conn.php';
if(isset($_POST['submit']))
{  

    $fname= $_POST['firstname'];
    $lname= $_POST['lastname'];
    $dob= $_POST['dob'];
    $email= $_POST['email'];
    $contact= $_POST['num'];
    $pro = $_POST['proin'];
    

    $issucc = $crud-> insertAttendees($fname,$lname,$dob,$email,$contact,$pro);

 if($issucc)
 {
    include 'includes/successmsg.php';

 }
 else
 {
    include 'includes/errormsg.php';
     
 }


}


?>





<!-- <div class="card" style="width: 18rem;">
    <div class="card-body ">
        <h5 class="card-title"><?php //echo $_GET['firstname'].' '.$_GET['lastname'] ;?></h5>
        <h6 class="card-subtitle mb-2 text-muted"><?php //echo $_GET['proin'];?></h6>
        <p class="card-text"><?php //echo"Date of Birth :" .$_GET['dob'] . '<br/>';?></p>
        <p class="card-text"><?php //echo"Email :" .$_GET['email1'] . '<br/>';?></p>
        <p class="card-text"><?php //echo"Number :". $_GET['num'] . '<br/>';?></p>
         
    </div>
</div> -->


<!-- <?php

//echo $_GET['firstname'] . '<br/>';
//echo $_GET['lastname'] . '<br/>';
//echo $_GET['dob'] . '<br/>';
//echo $_GET['proin'] . '<br/>';
//echo $_GET['email1'] . '<br/>';
//echo $_GET['num'] . '<br/>';

?> -->

<div class="card" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title"><?php echo $_POST['firstname'].' '.$_POST['lastname'] ;?></h5>
        <h6 class="card-subtitle mb-2 text-muted"><?php echo $_POST['proin'];?></h6>
        <p class="card-text"><?php echo"Date of Birth :" .$_POST['dob'] . '<br/>';?></p>
        <p class="card-text"><?php echo"Email :" .$_POST['email'] . '<br/>';?></p>
        <p class="card-text"><?php echo"Number :". $_POST['num'] . '<br/>';?></p>
         
    </div>
</div>

<?php require_once 'includes/footer.php' ?>;