<?php 

    //  topo

    include_once("topo.php");
    include_once("menu.php");

    //  conteúdo

    if(empty($_SERVER["QUERY_STRING"])){
        $var = "conteudo.php";
        include_once("$var");

    } else {
        $pg = $_GET['pg'];
        include_once("$pg.php");
        
    }
    
    // rodapé
    
    include_once("rodape.php");
?>