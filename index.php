<?php
$title = "Index";
require_once 'includes/header.php';
require_once 'db/conn.php';
$results = $crud->getSpecialties();
?>


<!-- 
First Name
Last Name
DoB
Pro in?
Email
Number
 -->

<h1 class="text-center" style="color: teal;"> Register Here for BlockChain</h1>


<form method="post" action="success.php">


    <div class="mb-3">
        <label for="firstname" class="form-label">First Name</label>
        <input required type="text" class="form-control" id="firstname" name="firstname">

    </div>

    <div class="mb-3">
        <label for="lastname" class="form-label">Last Name</label>
        <input required type="text" class="form-control" id="lastname" name="lastname">

    </div>

    <div class="mb-3">
        <label for="dob" class="form-label">Date of Birth</label>
        <input type="text" class="form-control" id="dob" name="dob">

    </div>

    <div class="mb-3">
        <label for="proin" class="form-label">First Name</label>
        <select class="form-control" id="proin" name="proin">

            <?php while ($r = $results->fetch(PDO::FETCH_ASSOC)) { ?>
                 
                <option value="<?php echo $r['proin_id']?>"><?php echo $r['name']; ?></option>
                

            <?php } ?>

        </select>

    </div>

    <div class="mb-3">
        <label for="email" class="form-label">Email address</label>
        <input required type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>

    <div class="mb-3">
        <label for="num" class="form-label">Phone Number</label>
        <input type="text" class="form-control" id="num" aria-describedby="phoneHelp" name="num">
        <div id="phoneHelp" class="form-text">We'll never share your number with anyone else.</div>
    </div>

    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1">
    </div>


    <button type="submit" name="submit" class="btn btn-dark">Submit</button>
</form>


<br />



<?php require_once 'includes/footer.php' ?>;