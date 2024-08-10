<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action = "password.php" method = "post">
        Password: <input type = "password" name = "password"> <br>

        <input type = "submit">  

    </form>

    <br><br>

    <?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Check if the password field is set
        if (isset($_POST["password"])) {
            echo $_POST["password"]; 
        } else {
            echo "Password not provided.";
        }
    }
?>

</body>
</html>