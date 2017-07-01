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
            <input type="submit" value="znajdź po id">
        </form>
        
        @foreach($post as $row)
        <br>Tytuł :{{$row->title}}
        <br>Context:{{$row->content}}
        @endforeach
        <br>
        <br>
        <a href="/geting">Jeżeli chcesz dodać nowy wpis</a>

        <?php
        // @include('pages.contact')--> dodaje includa całej akcji 
        ?>
    </body>
</html>
