<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial￾scale=1.0">
    <title>Dia da Semana</title>
</head>

<body>
    <form action="" method="POST">
        <label for="dia">Digite um número (1 a 7):</label>
        <input type="number" id="dia" name="dia" required>
        <button type="submit">Verificar</button>
    </form>
    <?php
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
 $dia = $_POST['dia'];
 switch ($dia) {
 case 1:
 echo "Domingo";
 break;
 case 2:
 echo "Segunda-feira";
 break;
 case 3:
 echo "Terça-feira";
 break;
case 4:
 echo "quarta-feira";
 break;
 case 5:
 echo "quinta-feira";
 break;
 case 6:
 echo "sexta-feira";
 break;
 case 7:
 echo "sabado";
 break;
 // Continue com os outros dias da semana
 default:
 echo "Número inválido.";
 break;
 }
 }
 ?>
</body>

</html>