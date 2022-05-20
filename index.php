 <?php
$stringa = 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ea nostrum, quam quaerat inventore incidunt maiores optio exercitationem omnis aliquid amet quos deserunt sapiente eligendi beatae corporis voluptates! Ducimus fugit similique ipsa voluptate sint tempora totam repellendus quasi enim! Nobis placeat autem iure in velit illum quia cum voluptatem, dignissimos doloremque dolorem veniam officiis voluptatibus reiciendis quis aut aperiam quidem, vero doloribus odit animi ad assumenda atque. Id earum est, fugiat saepe eligendi necessitatibus quae animi sed rem quam quas maiores at perspiciatis repellat? Repellat doloremque officiis sapiente consectetur earum. Laboriosam, accusantium. Tenetur sed incidunt amet labore aliquid! Nesciunt suscipit beatae nisi doloremque adipisci modi aut tempore illum quia aliquid laborum quisquam minima praesentium, earum officia quas unde ipsum animi. Eius necessitatibus fugiat at sunt corrupti sit! Asperiores eum earum aperiam ipsam. Quis ipsa et natus dignissimos praesentium error asperiores sit sequi eveniet reiciendis quos voluptatem repudiandae dolor dolores, ullam est!';

if(isset($_GET['parola'])){
        $parolacensurata = $_GET['parola'];
        $testoCambiato = str_replace($parolacensurata,'***', $stringa);
    }else{
        $testoCambiato = 'La parola non è presente nel testo';
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>
<body>
    <h2>Testo</h2>
    <p><?php echo $stringa ?></p>
    <p>Lunghezza stringa: <?php echo strlen($stringa) ?></p>
    <h1>Nuova Stringa con parola censurata</h1>
    <p><?php echo($testoCambiato) ?></p>

</body>
</html> 

<?php

