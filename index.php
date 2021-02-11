<html>
<head></head>
<body>
   <form method="post" action=""><br>
   ingrese la longitud del lado:<br>
        <input type="text" name="lado"><br>
        <input type="submit" value="calcular"><br>
</body>

<?php
$lado = $_POST['lado'];

$area = (8*($lado*$lado)) / 0.027415997;

echo 'El area del octagono es igual a: ' . $area, '<br />';


?>
</html>
