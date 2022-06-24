<?php
require_once '../../conexao/conexao.php';

$nome_entidade = $_POST['nomeEntidade'];
$cnpj = $_POST['CNPJ'];
$email = $_POST['email'];
$nome_usuario = $_POST['nomeUsuario'];
$senha = $_POST['senha'];
// $confirmacaoSenha = $_GET['confirmacaoSenha'];
//$imagemPerfil = $_GET['imagemPerfil'];

$consulta = "INSERT INTO entidade(nome_ent, CNPJ, email, nome_usuario, senha) VALUES ('$nome_entidade','$cnpj','$email','$nome_usuario', '$senha')";
echo $consulta;
if (!mysqli_query($conexao, $consulta)) {
    echo("Erro ao executar consulta: [$consulta]. Erro: " . mysqli_error($conexao));
}

//header('location:../index.html');

// if(isset($_FILES["imgv"])){
//     $tmp_name=$_FILES["imgv"]["tmp_name"];
//     $imname=$_FILES["imgv"]["name"];
//     $dir="fotoPerfil/";
//     move_uploaded_file($tmp_name, $dir.$imname);
//     $host="localhost";
//     $userdb="root";
//     $passdb="";
//     $namedb="no_waste";
//     $con=mysqli_connect($host, $userdb, $passdb);
//     mysqli_select_db($con, $namedb);
//     mysqli_query($con, "INSERT INTO entidade (foto_perfil) VALUES ('$imname')");
//     $q2=mysqli_query($con, "SELECT * FROM `no_waste`");
//     while($imgfn=mysqli_fetch_array($q2)){
        
        // <img src="<?php echo $dir.$imgfn['nome_img']" alt="">
        
//     }
// }



//echo($select);

?>