<?php
include("auth.php");
?>
<?php
require('conexao.php');

?>

<?php

include_once('conexao.php');

if(isset($_GET['id'])) {

$sql = "DELETE FROM fornecedor WHERE ID_Fornecedor = '".$_GET['id']."'";
$resultado2 = mysqli_query($con,$sql);
if (!$resultado2) {
	echo "<br>";
              echo "<br>";
              
              echo "<center>Não foi possível alterar, tente novamente.</center>";
              echo "<br>";
             
          } else {
          	echo "<br>";
          
              echo "<br>";
             echo "<meta HTTP-EQUIV='refresh' CONTENT='0;MostrarFornecedor.php'>";
            
              echo "<br>";
              
             
          }

            }       


?>
