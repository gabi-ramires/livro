<a href="index.html">Inicio</a>

<?php
session_start();
echo "<pre>";
var_dump($_SESSION);

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<script>
    console.log(window.navigation.activation.from)
    alert(window.navigation.activation.from.url)
</script>    
</body>
</html>


