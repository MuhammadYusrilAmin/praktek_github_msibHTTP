<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membuat Form Dengan Method POST</title>
</head>

<body>
    <form method="POST">
        <table>
            <tr>
                <td><label for="inputUsername">Username</label></td>
                <td>:</td>
                <td><input id="inputUsername" type="text" name="username"></td>
            </tr>
            <tr>
                <td><label for="inputPassword">Password</label></td>
                <td>:</td>
                <td><input type="password" id="inputPassword" name="password"></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" value="Login" name="btn-login"></td>
            </tr>
        </table>
    </form>
    <?php
    error_reporting(0);
    $username = $_POST['username'];
    $password = $_POST['password'];
    $login = $_POST['btn-login'];
    if (isset($login)) {
        echo "Hallo " . $username . "<br> Password anda " . $password;
    }
    ?>
</body>

</html>