@extends('layouts.app')
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1> Welcome to contact Page</h1>
        <h3> Write your first name and last name</h3>
        <form  action="get_some_other" method="post">
            {{ csrf_field() }} <?php // to musi być aby dane z formularza były obsługiwane ?>
            First Name: <input type="text" name="first_name"><br>
            Last  Name: <input type="text" name="last_name"><br>
            <input type="submit" value="wyślij">
        </form>
        
        <?php
        // put your code here
        ?>
    </body>
</html>
