<?php
$title = "Edit";
require_once 'includes/header.php';
require_once 'db/conn.php';
$results = $crud->getSpecialties();

if (!isset($_GET['id'])) {
    include 'includes/errormsg.php';

    header("Location:viewrecs.php");
} else {
    $id  = $_GET['id'];
    $attendee = $crud->getAttendeeDetails($id); ?>


    <!-- 

 -->

    <h1 class="text-center" style="color: teal;"> Edit Records</h1>


    <form method="post" action="editpost.php">
       
    <input type="hidden" name="id" value="<?php echo $attendee['attendee_id'] ?>" />

        <div class="mb-3">
            <label for="firstname" class="form-label">First Name</label>
            <input type="text" class="form-control" value="<?php echo $attendee['firstname'] ?>" id="firstname" name="firstname">

        </div>

        <div class="mb-3">
            <label for="lastname" class="form-label">Last Name</label>
            <input type="text" class="form-control" value="<?php echo $attendee['lastname'] ?>" id="lastname" name="lastname">

        </div>

        <div class="mb-3">
            <label for="dob" class="form-label">Date of Birth</label>
            <input type="text" class="form-control" value="<?php echo $attendee['dteofbirth'] ?>" id="dob" name="dob">

        </div>

        <div class="mb-3">
            <label for="proin" class="form-label">Speciality </label>
            <select class="form-control" id="proin" name="proin">

                <?php while ($r = $results->fetch(PDO::FETCH_ASSOC)) { ?>

                    <option  value="<?php echo $r['proin_id'] ?>" <?php if($r['proin_id']==$attendee['proin_id']) 
                    echo 'selected'?>>
                    <?php echo $r['name']; ?>
                </option>


                <?php } ?>

            </select>

        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control" value="<?php echo $attendee['email'] ?>" id="email" aria-describedby="emailHelp" name="email">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>

        <div class="mb-3">
            <label for="num" class="form-label">Phone Number</label>
            <input type="text" class="form-control" value="<?php echo $attendee['contact'] ?>" id="num" aria-describedby="phoneHelp" name="num">
            <div id="phoneHelp" class="form-text">We'll never share your number with anyone else.</div>
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1">
        </div>

        <a href="viewrecs.php" class="btn btn-default">Back To List</a>
        <button type="submit" name="submit" class="btn btn-success">Save Changes</button>
    </form>

<?php
}
?>

<br />



<?php require_once 'includes/footer.php' ?>;