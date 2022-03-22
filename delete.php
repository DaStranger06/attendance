<?php
require_once 'db/conn.php';

if (!isset($_GET['id'])) {
    include 'includes/errormsg.php';
    header("Location:viewrecs.php");
} else {
    $id = $_GET['id'];

    $result = $crud->deleteAttendee($id);

    if ($result) {
        header("Location: viewrecs.php");
    } else {
        include 'includes/errormsg.php';
    }
}
