<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Relation</title>
    </head>
    <body>
        <br><h1>Post_from_user</h1>
        <h2>{{$post_from_user}}</h2>
        <h3>{{$post_from_user->title}}</h3>
        <h3>{{$post_from_user->user_id}}</h3>
        <h3>{{$post_from_user->content}}</h3>
        
        <h1>User_from_post</h1>
        <h2>{{$user_from_post}}</h2>
        <h3>{{$user_from_post->name}}</h3>
        <h3>{{$user_from_post->email}}</h3>
        <h3>{{$user_from_post->created_at}}</h3>
        
        
        <?php
        // put your code here
        ?>
    </body>
</html>
