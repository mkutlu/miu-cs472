<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>
<html class="no-js"> <![endif]-->
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
<!--[if lt IE 7]>
<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a>
    to improve your experience.</p>
<![endif]-->
<img src="images/nerd.jpg" alt="logo" width="250">
<div class="signup-container">
    <div class="signup-header">New User Signup</div>
    <form id="student-form" action="params.php" method="post" target="formSending">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value=""> <br>
        <label for="id">Gender:</label>
        <label>
            <input type="radio" value="1" name="entry">
            Male
        </label>
        <label>
            <input type="radio" value="2" name="entry">
            Female
        </label>
        <label>
            <input type="radio" value="3" name="entry">
            Other
        </label>
        <label>
            <input type="radio" value="4" name="entry">
            Prefer not to say
        </label>
        <br>
        <label for="age">Age:</label>
        <input type="number" id="age" name="age" value=""><br>
        <label for="personality">Personality Type:</label>
        <input type="text" id="personality" name="personality" value=""><br>
        <label for="os">Favourite OS:</label>
        <select name="os" id="os">
            <option value=""></option>
            <option value="Windows">Windows</option>
            <option value="Macos">Mac OS</option>
            <option value="Linux">Linux</option>
            <option value="Centos">Centos</option>
        </select><br>
        <label for="min">Seeking Age:</label>
        <input type="number" id="min" name="min" value="">
        <input type="number" id="max" name="max" value="">
        <br>
        <input type="submit" value="Sign Up">
    </form>
</div>

<p>
    This page for dingle nerds to meet and date each other! Type in <br>
    your personal information and wait for the nerdly luv to begin! <br>
    Thank you for using our site.
</p>
<p>
    Results and page (C) Copyright Nerdluv Inc.
</p>
<script src="" async defer></script>
</body>
</html>