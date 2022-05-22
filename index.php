 <?php

$testo='Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, inventore culpa! Dolores, deleniti minus. Commodi pariatur doloribus magnam enim ratione porro corporis delectus molestiae in? Earum, explicabo? Dicta veniam quidem amet? Eius quas dolores possimus, ratione eos neque, impedit a fuga deserunt voluptas quasi? Itaque totam quis asperiores eos soluta accusamus obcaecati doloremque saepe amet repellat eaque ut officia atque deserunt vel, at cum quos voluptatum ratione aliquid dolore dolorum natus quisquam sequi. Quam nostrum est placeat dicta molestias? Aperiam dolores nemo nulla cumque error enim impedit, iste ipsa dicta officia eius dolorem distinctio cum fuga saepe doloremque necessitatibus culpa!';
if(isset($_GET['parola'])){
    $testoModificato = str_replace($_GET['parola'], '***',strtolower($testo));
}else {
    $testoModificato= 'Parola non presente nel testo';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-badwords</title>
</head>
<body>
    <h1>Testo</h1>
    <p> <?php echo $testo ?></p>
    <p>Il testo è lungo:  <?php echo strlen($testo) ?></p>
    <h2>Il testo modificato è:</h2>
    <p><?php echo ucfirst($testoModificato) ?></p>
    
    
</body>
</html>



