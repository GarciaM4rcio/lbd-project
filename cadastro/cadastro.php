<?php
$nome=$_POST['nome'];
$endereco=$_POST['endereco'];
$numero=$_POST['numero'];
$bairro=$_POST['bairro'];
$cidade=$_POST['cidade'];
$estado=$_POST['estado'];
$cep=$_POST['cep'];
$telefone=$_POST['telefone'];
$celular=$_POST['celular'];
$email=$_POST['email'];
$data=$_POST['data'];
$estCivil=$_POST['estCivil'];

echo "Nome: ".$nome;
echo "<br>Endereço: ".$endereco;
echo "<br>Número: ".$numero;
echo "<br>Bairro: ".$bairro;
echo "<br>Cidade: ".$cidade;
echo "<br>Estado: ".$estado;
echo "<br>Cep: ".$cep;
echo "<br>Telefone: ".$telefone;
echo "<br>Celular: ".$celular;
echo "<br>Email: ".$email;
echo "<br>Data de Nascismento: ".$data;
echo "<br>Estado Civil: ".$estCivil;

?>