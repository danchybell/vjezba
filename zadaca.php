<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
    <table border="1">
</head>
<body>
    <table>
      <tr>

        <th>Rbr.</th>
        <th>Prezime.</th>
        <th>Ime.</th>
        <th>Datum_prijave</th>
        <th>Placeno</th>

    </tr>

    <?php
      include 'data.php';
      include 'functions.php';
      foreach($data as $index => $value){
          
    ?>

    <tr>
    <td class="tablica"><?php echo$index.'.';?></td>
    <td class="tablica"><?php echo$value['Prezime'];?></td>
    <td class="tablica"><?php echo$value['Ime'];?></td>
    <td class="tablica"><?php echo data_trans($value['Datum_prijave']);?></td>
    <td class="tablica"><?php echo payed($value['Placeno']);?></td>

    </tr>

     <?php } ?>

    </table>

</body>
</html>