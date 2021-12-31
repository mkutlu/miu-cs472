<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><html class="no-js"> <![endif]-->
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
<!--[if lt IE 7]><p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a>to improve your experience.</p><![endif]-->
<img src="images/nerd.jpg" alt="logo" width="250">
<div class="signup-container">
    <div class="signup-header">New User Signup</div>
    <div class="signup-labels">
        <label for="name">Name:</label><br>
        <label for="gender">Gender:</label><br>
        <label for="age">Age:</label><br>
        <label for="personality">Personality Type:</label><br>
        <label for="os">Favourite OS:</label><br>
        <label for="min">Seeking Age:</label>
    </div>
    <div class="signup-inputs">
        <form id="student-form" action="params.php" method="post">
            <input type="text" id="name" name="name" value="" maxlength="16"> <br>
            <label>
                <input type="radio" value="1" id="gender" name="gender">
                Male
            </label>
            <label>
                <input type="radio" value="2" id="gender"  name="gender" checked>
                Female
            </label>
            <label>
                <input type="radio" value="3" id="gender"  name="gender">
                Other
            </label>
            <label>
                <input type="radio" value="4" id="gender" name="gender">
                Prefer not to say
            </label>
            <br>
            <input type="text" pattern="\d*" maxlength="2" size="6" id="age" name="age" value=""><br>
            <input type="text" id="personality" name="personality" value="" size="6"> <a href="http://www.humanmetrics.com/cgi-win/JTypes2.asp">(Don't know your type?)</a><br>
            <select name="os" id="os">
                <option value="Windows" selected>Windows</option>
                <option value="Macos">Mac OS</option>
                <option value="Linux">Linux</option>
                <option value="Centos">Centos</option>
            </select>
            <br>
            <input type="text" id="min" name="min" value="" placeholder="min" pattern="\d*" maxlength="2" size="6" > to
            <input type="text" id="max" name="max" value="" placeholder="max" pattern="\d*" maxlength="2" size="6" >
            <br>
            <input type="submit" value="Sign Up">
        </form>
    </div>
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