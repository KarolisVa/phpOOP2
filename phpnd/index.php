<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title></title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="" />
  </head>
  <body>
    <br/>
     <?php
    include './it_imone_class.php';
    $ItImone = new ItImone("Lukas", "Linas", "Karolis");
    ItImone::sayHello();
    $ItImone-> getAll();
    $Vadovai = new Vadovai("Lukas", "Linas", "Karolis");
    $Programuotojai = new Programuotojai("Lukas", "Linas", "Karolis");
    $Testuotojai = new Testuotojai("Lukas", "Linas", "Karolis");
    $Vadovai->addVadovai("Arnas");
    $Programuotojai->addProgramuotojai("Tomas");
    $Testuotojai->addTestuotojai("Vincentas");

    $Vadovai-> getWorkers();
    $Programuotojai-> getWorkers();
    $Testuotojai-> getWorkers();
    $ItImone-> getAll();
    ?>

  </body>
</html>
