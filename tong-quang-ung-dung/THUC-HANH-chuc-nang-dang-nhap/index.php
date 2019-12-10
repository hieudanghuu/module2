<!DOCTYPE HTML>
<html>
<meta http-epuiv="Content-Type" content="text/html; charset=utl-8" />
<style type="text/css">
    .login {
        background-color: #C0EFEA;
        text-shadow: blue 2px 3px 4px;
        height: 180px;
        width: 230px;
        margin: 0;
        padding: 10px;
        border: 5px #0725F7 groove;
        border-radius: 15px
    }

    .login input {
        padding: 5px;
        margin: 5px
    }
</style>

<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        $username = $_GET["username"];
        $password = $_GET["password"];

        if ($username === "admin" && $password === "admin") {
            echo "<h2>Welcome <span style='color:red'>" . $username . "</span> to website</h2>";
        } else {
            echo "<h2><span style='color:red'>Login Error</span></h2>";
        }
    }
    ?>
    <form method="get">
        <div class="login">
            <h2>Login</h2>
            <input type="text" name="username" size="20" placeholder="username" />
            <input type="password" name="password" size="20" placeholder="password" />
            <input type="submit" value="Sign in" />
        </div>

    </form>
</body>

</html>