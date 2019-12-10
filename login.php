<?php
session_start();
?>
<html>
    <head>
        <title>vgMusic Secret</title>
        <meta charset="utf-8"/> 
        <meta name="description" content="Easter Egg" />
        <link rel="stylesheet" type="text/css" href="https://vgmusic.herokuapp.com/login/login.css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://vgmusic.herokuapp.com/js/loginAjax.js"></script>
        <link rel="icon" type="image/x-icon" href="../favicon2.ico"/>
    </head>
    <body>
        <h1>Login</h1>
        <form id = "loginForm">
            <label>Username:</label>
            <input id = "name" type = "text" name = "username">
            <label>Password:</label>
            <input id = "password" type = "password" name = "password">
            <input type = "submit">
        </form>
    </body>
</html>