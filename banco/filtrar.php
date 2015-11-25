<?php
//Cláusulas de Busca de projetos

$pesquisa_geral = isset($_POST['pequisa_geral']) ? $_POST['pequisa_geral'] : '';
$autor = isset($_POST['autor']) ? $_POST['autor'] : '';
$titulo = isset($_POST['titulo']) ? $_POST['titulo'] : '';
$palavra_chave = isset($_POST['assunto']) ? $_POST['assunto'] : '';
$ano = isset($_POST['ano']) ? $_POST['ano'] : '';





$geral = "select * from projeto where titulo like '%".$titulo."%' and autores like '%".$autor."%' and palavrachave like '%".$palavra_chave."%' and ano like '%".$ano."%' and resumo like '%".$pesquisa_geral."%'"; 


//Função que vai retornar os dados de acordo com a clausula
function resultados ($clausula){
conecta_banco();
$sql = mysql_query($clausula);
echo '<h2>Resultados</h2>';
    while($exibe = mysql_fetch_assoc($sql)){
        //echo $exibe["titulo"] .'<br>';
        echo '<div class="list-group" id=retorno_filtro>';
            echo '<a href="../home/projeto.php?id='.$exibe["id"].'" class="list-group-item">';
                echo '<h4 class="list-group-item-heading" id = "retorno_filtro">'.$exibe["titulo"].'</h4>';
                echo '<p class="list-group-item-text">'.$exibe["autores"].'</p>';
            echo '</a>';
        echo '</div>';  
fecha_banco();
}
}
 




?>