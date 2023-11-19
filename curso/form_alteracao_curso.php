<!DOCTYPE html>
<?php
include "../inc/conectabd.inc.php";
include "../inc/funcoes.inc.php";

$id = $_GET["id"];
$curso = recupera_curso($id);
?>

<html>
    <head>
        <title>Cadastro de Curso</title>
        <meta charset="utf-8">
    </head>
    <body>
        <h1>Atualizar curso</h1>
        <form action="alteracao_curso.php" 
            method="GET">
                <input type="hidden" name="id_curso" value="<?php echo $curso["id_curso"];?>">
            <label for="id_curso">
            Curso:
            </label>
            <input type="text" name="ds_curso" id="id_curso" value="<?php echo $curso["ds_curso"];?>">
            <br>
            <label for="nr_carga_horaria">
                Carga Horaria:
            </label> 
            <input type="text" name="nr_carga_horaria" id="id_curso" value="<?php echo $curso["nr_carga_horaria"];?>">
            <br>
            <label for="dt_inicio">
                Data de Início:
            </label> 
            <input type="text" name="dt_inicio" id="id_curso" placeholder="yyyymmdd">
            <br>
            <input type="submit" value="OK">
        </form>
    </body>
</html>