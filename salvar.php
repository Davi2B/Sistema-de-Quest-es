<?php    

include 'conexao.php';
$alternativa = $_POST['alternativa'];
$alternativa_implode = implode(",", $_POST['alternativa']);
$nome = $_POST['nome'];
$curso = $_POST['curso'];
$data = $_POST['data'];

 
 
if (isset($_POST['alternativa'])) {
	$sql = mysqli_query($conection,"INSERT INTO questoes(alternativa,nome,curso,data)
VALUES ('$alternativa_implode','$nome','$curso','$data')");
	 
	 header('location:  index.php');

}



?>