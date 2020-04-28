<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>PHP</title>
  </head>
  <body class="container bg-dark text-light">

    <?php

        echo 'Learning PHP <br>'; //output statement


        // String function

        echo '<h1 class="display-5 mt-5"> String Function </h1>';
        $myName = 'Shay';
        var_dump($myName);
        echo '<br>';
        echo 'My name is ', $myName;


        echo '<h4 class="mt-5"> Chop Function </h4>';
        echo '<br>';
        $str = "My name is Shay";
        echo $str . "<br>";
        echo chop($str,"Shay");


        echo '<h4 class="mt-5"> Chunk Split Function </h4>';
        echo '<br>';
        $str = "My name is Shay";
        echo chunk_split($str,1,".");


        echo '<h4 class="mt-5"> Explode Function </h4>';
        echo '<br>';
        $str = "My name is Shay";
        print_r (explode(" ",$str));


        echo '<h4 class="mt-5"> Implode Function </h4>';
        echo '<br>';
        $arr = array('My','name','is','Shay!');
        echo implode(" ",$arr);


        echo '<h4 class="mt-5"> Shuffle Function </h4>';
        echo '<br>';
        echo str_shuffle("My name is Shay");


        echo '<h4 class="mt-5"> String Length Function </h4>';
        echo '<br>';
        echo strlen("My name is Shay");


        echo '<h4 class="mt-5"> String Word Length Function </h4>';
        echo '<br>';
        echo str_word_count("My name is Shay");



        // Number function

        echo '<h1 class="display-5 mt-5"> Number Function </h1>';

        echo '<h4 class="mt-5"> Check if Integer </h4>';
        $x = 5985;
        echo $x;
        var_dump(is_int($x));

        $x = 59.85;
        echo $x;
        var_dump(is_int($x));


        echo '<h4 class="mt-5"> Check if Number </h4>';

        $x = 5985;
        echo $x;
        var_dump(is_numeric($x));

        $x = "5985";
        echo $x;
        var_dump(is_numeric($x));

        $x = "59.85" + 100;
        echo $x;
        var_dump(is_numeric($x));

        $x = "Hello";
        echo $x;
        var_dump(is_numeric($x));

     ?>

  </body>
</html>
