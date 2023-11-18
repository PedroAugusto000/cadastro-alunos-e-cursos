<!DOCTYPE html>
<html>
	<head>
	  <title>Cadastro de curso - Inclusão</title>
	  <meta charset="utf-8">
	</head>
	<body>

<?php 
  $curso = $_GET["curso"];
  $carga_horaria = $_GET["carga_horaria"];
  $data_inicio = $_GET["dt_inicio"];
  
  include_once "../inc/conectabd.inc.php";

  // Adicionando aspas simples para evitar injeção de SQL
  $curso = mysqli_real_escape_string($link, $curso);

  $query = "INSERT INTO tb_curso 
            (ds_curso, nr_carga_horaria, dt_inicio) 
            VALUES
            ('$curso', $carga_horaria, '$data_inicio');";

  if ($result = mysqli_query($link, $query)) {
    echo "Inclusão efetuada com sucesso";
  } else {
    echo "Erro na inclusão: " . mysqli_error($link);
  }

  mysqli_close($link);
?>  

 <br>
 <a href="consulta_curso.php">Ver cursos cadastrados</a>
 
 </body>
</html>
