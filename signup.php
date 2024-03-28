<?php
    session_start();
   
    include("db.php");

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $capitalname = $_POST['cname'];
        $fathername = $_POST['fname'];
        $Gender = $_POST['gender'];
        $num = $_POST['number'];
        $address = $_POST['add'];
        $gmail = $_POST['mail'];
        $password = $_POST['pass'];

        if(!empty($gmail) && !empty($password) && !is_numeric($gmail))
        {
            $query = "insert into form (cname, fname, gender, cnum, address, mail, pass) values ('$capitalname', '$fathername', '$Gender', '$num', '$address', '$gmail', '$password')";

            mysqli_query($con, $query);

            echo "<script type='text/javascript'> alert('Successfully Register')</script>";
        }
        else
        {
            echo "<script type='text/javascript'> alert('Please Enter some valid Information')</script>";
        }

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Login and Register</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    <div class="signup">
        <h1>Sign Up</h1>
        <form method="POST" >
            <label>Capital Name</label>
            <input type="text" name="cname" required>
            <label>Father Name</label>
            <input type="text" name="fname" required>
            <label>Gender</label>
            <input type="text" name="gender" required>
            <label>Contact</label>
            <input type="tel" name="number" required>
            <label>Address</label>
            <input type="text" name="add" required>
            <label>Email</label>
            <input type="email" name="mail" required>
            <label>Password</label>
            <input type="password" name="pass" required>
            <input type="submit" name="submit" value="Submit">
        </form>
        <p><a href="">Terms and Condition</a> and <a href="#">Privacy Policy</a></p>
        <p>Already have an account? <a href="login.php">Login Here</a></p>
    </div>
</body>
</html>