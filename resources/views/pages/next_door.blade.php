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
        <h1>Widok nie powala ale to pages.nextdoor</h1>
        <form  action="#" method="post">
            {{ csrf_field() }} <?php // to musi być aby dane z formularza były obsługiwane ?>
            <input type="text" name="id"><br>
            <input type="submit" value="znajdź user-a po id"><br>
            <input  type="text" name="user_with_post"><br>
            <input type="submit" value="znajdź user-a z postami">

        <br>{{$post}}
        
        <br>{{$user}}<br>
        @foreach ($user as $user_value)
        <h2>{{$user_value->name}}</h2>
        <h2>{{$user_value->email}}</h2>
        <h2>{{$user_value->id}}</h2>
        @endforeach
        <br>
        <a href="/geting">Jeżeli chcesz dodać nowy wpis</a>

        <?php
        // @include('pages.contact')--> dodaje includa całej akcji 
        ?>
    </body>
</html>
