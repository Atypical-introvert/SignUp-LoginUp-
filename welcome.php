<?php

session_start();


if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: https://localhost/18BCE0163_PHP_Sessions/login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body {
            font: 14px sans-serif;
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="page-header">
        <h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome!.</h1>
    </div>
    <p>
        <!--<a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>-->
        <a href="logout.php" class="btn btn-danger">Log Out</a>
    </p>
    <style>
        body {
            font: 14px sans-serif;
            display: flex;
            justify-content: center;
            flex-direction: column;
            background-color: #5CDB95;
        }

        .page-header {
            width: 350px;
            margin-top: 20vh;
            margin-left: 40vw;
            justify-content: center;
        }

        p {
            justify-content: center;
        }
    </style>
</body>

</html>