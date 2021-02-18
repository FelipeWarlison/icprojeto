<?php
if(isset($_POST['cadastro-button'])){
include_once("dbh.inc.php");
//$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT)
$username = filter_input(INPUT_POST, 'uid', FILTER_SANITIZE_STRING);
$useremail = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL); 
$usercontato = filter_input(INPUT_POST, 'end', FILTER_SANITIZE_STRING);
$userbirthday = filter_input(INPUT_POST, 'birthday', FILTER_SANITIZE_NUMBER_INT);
$usertell = filter_input(INPUT_POST, 'tell', FILTER_SANITIZE_NUMBER_INT);
$usernivel = filter_input(INPUT_POST, 'nivel', FILTER_SANITIZE_NUMBER_INT);
//$password = password_hash( $INPUT_POST['psw'], PASSWORD_DEFAULT );

$result_usuario = "UPDATE users SET uid = '$username',email = '$useremail', end = '$usercontato', birthday = '$userbirthday', tell = '$usertell', nivel = '$usernivel' WHERE uidUsers=?;";
$resultado_usuario = mysqli_query($conn, $result_usuario);

if(mysqli_affected_rows($conn) != 0){
                echo "
                    <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/projetoy/projeto_ic/public_html/dashboardAdm.php'>
                    <script type=\"text/javascript\">
                        alert(\"Usuario cadastrado com Sucesso.\");
                    </script>
                ";    
            }else{
                echo "
                    <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/projetoy/projeto_ic/public_html/dashboardAdm.php'>
                    <script type=\"text/javascript\">
                        alert(\"O Usuario não foi cadastrado com Sucesso.\");
                    </script>
                ";    
            }

}
?>