<?php
// Establish a database connection (replace with your own database credentials)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mkp";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle the form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve user input from the registration form
    $userIC = $_POST["UserIC"];
    $userName = $_POST["User_Name"];
    $userPhoneNo = $_POST["User_PhoneNo"];
   // $userGender = $_POST["User_Gendar"];
    $userEmail = $_POST["User_Email"];
    $userBirthDate = $_POST["User_BirthDate"];
// $userRace = $_POST["User_Race"];
    $userCitizenship = $_POST["User_Citizenship"];
    $userCareer = $_POST["User_Career"];
    $userAddress = $_POST["User_Address"];
    $userStatus = $_POST["User_Status"];
    $userRole = $_POST["User_Role"];
    $userPassword = $_POST["User_Password"];

    // Prepare and execute the SQL statement to insert user information into the database
    $stmt = $conn->prepare("INSERT INTO user_info (UserIC, User_Name, User_PhoneNo, User_Email, User_BirthDate, User_Citizenship, User_Career, User_Address, User_Status, User_Role, User_Password) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssssssss", $userIC, $userName, $userPhoneNo, $userEmail, $userBirthDate, $userCitizenship, $userCareer, $userAddress, $userStatus, $userRole, $userPassword);
    $stmt->execute();

    // Close the statement and database connection
    $stmt->close();
    $conn->close();

    // Redirect to a success page or perform additional actions
    header("Location: registration_success.php");
    exit();
}
?>

<!-- Registration Page HTML code -->

<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        body {
            background-color: lightblue;
        }

        .container {
            display: flex;
            height: 100vh;
            width: 100%;
        }

        .left-column {
            flex: 1;
            padding: 150px;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            position: relative;
            right: 200px;
            position: relative;
            bottom: 1px;
        }

        .left-column img {
            display: block;
            width: 600px;
            height: 1150px;
            position: relative;
            right: 80px;
            position: relative;
            bottom: 150px;
        }

        .right-column {
            flex: 1;
            padding: 20px;
        }

        .form {
            position: relative;
            right: 190px;
            position: relative;
            bottom: 35px;
            width: 120%;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="left-column">
            <img src="<?= BASEURL ?>/img/BG-JAIP2.png" alt="login">
        </div>
        <div class="right-column">
            <div class="body-content-incentive">
                <br><br>
                <div class="background">
                    <div class="form">
                        <center>
                            <h1>Sign up</h1>
                        </center>
                        <form action="" method="POST">
                            <input class="form-control" name="UserIC" type="text" placeholder="IC number"><br>
                            <input class="form-control" name="User_Name" type="text" placeholder="Name"><br>
                            <input class="form-control" name="User_PhoneNo" type="text" placeholder="Phone Number"><br>
                            <select class="form-select form-select-sm" name="User_Gender"
                                aria-label=".form-select-sm example">
                                <option selected>Gender</option>
                                <option value="1">Male</option>
                                <option value="2">Female</option>
                            </select><br>
                            <input class="form-control" name="User_Email" type="text" placeholder="Email"><br>
                            <label for="birthday">Date of Birth</label>
                            <input class="form-control" name="User_BirthDate" type="date"
                                placeholder="Date of Birth"><br>
                            <input class="form-control" name="User_Race" type="text" placeholder="Race"><br>
                            <input class="form-control" name="User_Citizenship" type="text"
                                placeholder="Citizenship"><br>
                            <input class="form-control" name="User_Career" type="text" placeholder="Career"><br>
                            <input class="form-control" name="User_Address" type="text" placeholder="Address"><br>
                            <input class="form-control" name="User_Status" type="text" placeholder="Status"><br>
                            <select class="form-select form-select-sm" name="User_Role"
                                aria-label=".form-select-sm example">
                                <option selected>Role</option>
                                <option value="1">User</option>
                                <option value="2">Admin</option>
                                <option value="3">Staff</option>
                                <option value="4">Advisor</option>
                            </select><br>
                            <input class="form-control" name="User_Password" type="password"
                                placeholder="Password"><br>
                            <input class="form-control" name="User_confPassword" type="password"
                                placeholder="Confirm Password"><br>
                            <center>
                                <input class="btn btn-primary" type="submit" value="Sign up"
                                    style="width:100%; ">
                            </center>
                            <br>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
