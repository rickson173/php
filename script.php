<?php

$idadeBebe = 4;
$idadeCriança = 17;
$nome = $_POST["campo1"];

$idadeMaior = 18;
$idadeMelhor = 65;

echo "<br>";
echo "<br>";

echo "Seu nome é " . "<strong> $nome </strong>";

echo "<br>";
echo "<br>";

if ($_POST["campo2"] <= $idadeCriança && $_POST["campo2"] > $idadeBebe) {

	echo "Com " . $_POST["campo2"] . " anos";
	echo " você ainda é uma criança.";
}

if ( $idadeMelhor > $_POST["campo2"] && $_POST["campo2"] >=$idadeMaior) {

	echo "Com " . $_POST["campo2"] . " anos";
	echo " você é maior de idade.";
}

if ($idadeMelhor <= $_POST["campo2"]){

	echo "Com " . $_POST["campo2"] . " anos";
	echo " você já está em uma idade avançada.";
}

if ($_POST["campo2"] <= $idadeBebe){

	echo "Com " . $_POST["campo2"] . " anos";
	echo " você ainda é um bebê";
}


?>

<form action="action.php" method="post">
 <p><input type="submit" value="Novamente?" /></p>
</form>
