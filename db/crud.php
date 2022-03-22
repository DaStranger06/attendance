<?php

class crud
{
    private $db;

    //constructor to initialize private variable to the database connection
    function __construct($conn)
    {
        $this->db = $conn;
    }


    public function insertAttendees($fname, $lname, $dob, $email, $contact, $proin)
    {
        try {
            $sql = "INSERT INTO attendee(firstname,lastname,dteofbirth,email,contact,proin_id) VALUES(:fname,:lname,:dob,:email,:contact,:proin)";
            $stmt = $this->db->prepare($sql);

            $stmt->bindparam(':fname', $fname);
            $stmt->bindparam(':lname', $lname);
            $stmt->bindparam(':dob', $dob);
            $stmt->bindparam(':email', $email);
            $stmt->bindparam(':contact', $contact);
            $stmt->bindparam(':proin', $proin);

            $stmt->execute();
            return true;
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }

    public function editAttendees($id, $fname, $lname, $dob, $email, $contact, $proin)
    {
        try {
            $sql = "UPDATE attendee SET firstname =:fname,lastname=:lname,dteofbirth=:dob,email=:email,contact=:contact,proin_id=:proin WHERE attendee_id = :id";

            $stmt = $this->db->prepare($sql);

            $stmt->bindparam(':id', $id);
            $stmt->bindparam(':fname', $fname);
            $stmt->bindparam(':lname', $lname);
            $stmt->bindparam(':dob', $dob);
            $stmt->bindparam(':email', $email);
            $stmt->bindparam(':contact', $contact);
            $stmt->bindparam(':proin', $proin);

            $stmt->execute();
            return true;
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }


    public function getAttendees()
    {
        try {
            $sql = "SELECT * FROM attendee a inner join specialities s on a.proin_id = s.proin_id";
            $result = $this->db->query($sql);
            return $result;
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }

    public function getAttendeeDetails($id)
    {
      try {
        $sql = "SELECT * FROM attendee a inner join specialities s on a.proin_id = s.proin_id WHERE attendee_id = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindparam(':id', $id);
        $stmt->execute();
        $result = $stmt->fetch();
        return $result;
    } catch (PDOException $e) {
        echo $e->getMessage();
        return false;
    }
    }

    public function deleteAttendee($id)
    {
        try {
            $sql = "DELETE from attendee WHERE attendee_id = :id";
            $stmt = $this->db->prepare($sql);
            $stmt->bindparam(':id', $id);
            $stmt->execute();
            return true;
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }


    public function getSpecialties()
    {
       try {
        $sql = "SELECT * FROM specialities";
        $result = $this->db->query($sql);
        return $result;
    } catch (PDOException $e) {
        echo $e->getMessage();
        return false;
    }
    }
}
