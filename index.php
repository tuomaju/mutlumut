<?php
    session_start();
?>
<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>KORVIAHIVELEVÄ</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css">

    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body class="keltainen">
    <header>
        <h1>TERVETULOA</h1>
    </header>
    <aside>
    </aside>
    <main>
        <form method="POST" action="loginConfirm.php" id="loginForm">
            <input type="text" name='username' placeholder="Käyttäjätunnus"><br>
            <input type="password" name='pwd' placeholder="Salasana"><br>
            <input type="submit" name="loginButton" id="loginButton" value="Sisään">
            <br>
            <a href="register.php">Haluutko vittu kuolla!?!??</a>
        </form>
    </main>
    <aside>
    </aside>
</body>
</html>