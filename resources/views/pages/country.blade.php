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
        
        <h2>{{$country_with_post}}</h2>
        @foreach ( $country_with_post as $country)
        Content:{{$country->content}}<br>
        Title:{{$country->title}}<br>
        Country_id:{{$country->country_id}}<br>
        
        @endforeach
        <?php
        // put your code here
        ?>
    </body>
</html>
