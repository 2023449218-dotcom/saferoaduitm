<?php

/* Start user session */

session_start();

/* Include database connection */

include("db.php");

/* Retrieve login credentials from the login form */

$userid = $_POST['userid'];

$password = $_POST['password'];




// STUDENT AUTHENTICATION

$sql = "SELECT * FROM student

        WHERE Student_matricNum='$userid'

        AND Student_password='$password' ";


$result = mysqli_query($conn,$sql);


if(mysqli_num_rows($result)>0)
{

    $row = mysqli_fetch_assoc($result);


    /* Store student session */

    $_SESSION['UserID'] = $row['StudentID'];

    $_SESSION['UserName'] = $row['Student_fullName'];

    $_SESSION['Role'] = "Student";


    /* Redirect to Student Dashboard */

    header("Location: student/dashboard.php");
    exit();

}






// STAFF AUTHENTICATION

$sql = "SELECT * FROM staff

        WHERE Staff_Num='$userid'

        AND Staff_password='$password' ";

$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0)
{

    $row = mysqli_fetch_assoc($result);


     /* Store staff session */

    $_SESSION['UserID'] = $row['StaffID'];

    $_SESSION['UserName'] = $row['Staff_fullName'];

    $_SESSION['Role'] = "Staff";


    /* Redirect to Staff Dashboard */

    header("Location: staff/dashboard.php");
    exit();

}






// ADMINISTRATOR AUTHENTICATION

$sql = "SELECT *

        FROM admin

        WHERE Admin_username='$userid'

        AND Admin_password='$password'";

$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0)
{

    $row = mysqli_fetch_assoc($result);


     /* Store Admin session */

    $_SESSION['AdminID'] = $row['AdminID'];

    $_SESSION['UserID'] = $row['AdminID'];

    $_SESSION['UserName'] = $row['Admin_username'];

    $_SESSION['Role'] = "Admin";


    /* Redirect to Admin Dashboard */

    header("Location: admin/dashboard.php");

    exit();

}






// SUPERIOR AUTHENTICATION

$sql = "SELECT *

        FROM superior

        WHERE Superior_username='$userid'

        AND Superior_password='$password'";

$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0)
{

    $row = mysqli_fetch_assoc($result);


     /* Store superior session */

    $_SESSION['SuperiorID'] = $row['SuperiorID'];

    $_SESSION['UserID'] = $row['SuperiorID'];

    $_SESSION['UserName'] = $row['Superior_fullName'];

    $_SESSION['Role'] = "Superior";


    /* Redirect to Superior Dashboard */

    header("Location: superior/dashboard.php");

    exit();

}




// LOGIN FAILED

echo "

<script>

alert('Invalid Login');

window.location='index.php';

</script>

";

?>