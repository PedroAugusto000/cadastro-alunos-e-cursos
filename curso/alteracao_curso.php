<!DOCTYPE html>
<!-- alteracao.php -->
<html>
    <head>
        <title>Cadastro de curso - Alteração</title>
        <meta charset="utf-8">
    </head>
    <body>
        <?php

        global $link; // !Conexão com o banco de dados ("Variável do conectbd.inc")
        $id_curso = $_GET["id_curso"];
        $ds_curso = $_GET["ds_curso"];
        $nr_carga_horaria = $_GET["nr_carga_horaria"];
        $dt_inicio = $_GET["dt_inicio"];

        include_once "../inc/conectabd.inc.php";

        // Atualiza o registro lá da tabela com as novas informações
        $query = "UPDATE tb_curso
                  SET ds_curso = '$ds_curso',
                      nr_carga_horaria = $nr_carga_horaria,
                      dt_inicio = '$dt_inicio'
                  WHERE id_Curso = $id_curso;";

        if ($result = mysqli_query($link, $query)) {
            echo "Alteração efetuada com sucesso";
        } else {
            echo mysqli_error($link);
        }

        mysqli_close($link);
        ?>
        <br>
        <a href="consulta_curso.php">Ver cursos cadastrados</a>
    </body>
</html>
