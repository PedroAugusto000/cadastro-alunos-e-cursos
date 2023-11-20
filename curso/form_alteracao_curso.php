<!DOCTYPE html>
<?php
include "../inc/conectabd.inc.php";
include "../inc/funcoes.inc.php";

$id_curso = $_GET["id"];

$curso = recupera_curso($id_curso);

?>

<html>
    <head>
        <title>Cadastro de Curso</title>
        <meta charset="utf-8">
    </head>
    <body>
        <h1>Atualizar curso</h1>
        <form action="alteracao_curso.php" method="GET">

            <input type="hidden" name="id_curso" value="<?php echo $curso["id_curso"];?>">
            
            <label for="ds_curso">Curso:</label>
            <input type="text" name="ds_curso" id="ds_curso" value="<?php echo $curso["ds_curso"];?>">
            <br>
            <label for="nr_carga_horaria">Carga Horaria:</label> 
            <input type="text" name="nr_carga_horaria" id="nr_carga_horaria" value="<?php echo $curso["nr_carga_horaria"];?>">
            <br>
            <label for="dt_inicio">Data de Início:</label> 
            <input type="datetime-local" name="dt_inicio" id="dt_inicio" placeholder="yyyymmdd" value="<?php echo $curso["dt_inicio"];?>">
            <br>
            <input type="submit" value="OK">
            
        </form>
    </body>
</html>
