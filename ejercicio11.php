<?php
/*En un hospital existen tres áreas: Pediatría, Oncología y Traumatología. El presupuesto anual del hospital se
reparte conforme a la siguiente tabla:
    Pediatria:30%
    Oncologia:40%
    Traumatologia:30%*/

    $pediatria=0;
    $oncologia=0;
    $trauma=0;
    if (isset($_POST['procesar'])) {
       $presupuesto = $_POST['presupuesto'];
    
     $pediatria = $presupuesto *0.3;  
     $oncologia = $presupuesto *0.4;  
     $trauma = $presupuesto *0.3;  


    }


?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 11</title>
</head>
<body>
    <header>
        <h1>Ejercicio 1 </h1>
    </header>
   <main>
    <section>
        <h2>PRESUPUESTO ANUAL DEL HOPITAL</h2>
   <form action="ejercicio11.php" method="POST">
    <label for="presupuest">PRESUPUESTO: </label><input type="text" placeholder="0.00" name="presupuesto">

    <button type="submit" name="procesar">Enviar 🔒</button> 
</form>
<hr>
<table border="1">
    <thead>
        <tr>
            <th>PEDIATRIA</th>
            <th>ONCOLOGIA</th>
            <th>TRAUMATOLOGIA</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>💰<?php echo number_format($pediatria,2)?></td>
            <td>💰<?php echo number_format($oncologia,2)?></td>
            <td>💰<?php echo number_format($trauma,2)?></td>
        </tr>
    </tbody>
</table>
</section>
</main>
</body>
</html>