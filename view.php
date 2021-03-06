<?php
$title = 'View';
include_once 'includes/header.php';
require_once 'db/conn.php';

//get attendee by id

if (!isset($_GET['id'])) {
    include 'includes/errormsg.php';
} else {
    $id = $_GET['id'];
    $result = $crud->getAttendeeDetails($id);


?>

    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title"><?php echo $result['firstname'] . ' ' . $result['lastname']; ?></h5>
            <p class="card-text"><?php echo "Date of Birth :" . $result['dteofbirth'] . '<br/>'; ?></p>
            <h6 class="card-subtitle mb-2 text-muted"><?php echo $result['name']; ?></h6>
            <p class="card-text"><?php echo "Email :" . $result['email'] . '<br/>'; ?></p>
            <p class="card-text"><?php echo "Number :" . $result['contact'] . '<br/>'; ?></p>

        </div>
    </div>
    <br />

    <a href="viewrecs.php" class="btn btn-info">Back to List</a>
    <a href="edit.php?id=<?php echo $result['attendee_id'] ?>" class="btn btn-warning">Edit</a>
    <a onclick="return confirm('Are you sure you want to Delete?');" href="delete.php?id=<?php echo $result['attendee_id'] ?>" class="btn btn-danger">Delete</a>

<?php } ?>




<!-- footer -->
<br>
<br>
<br>
<br>
<br>
<br>
<?php require_once 'includes/footer.php' ?>