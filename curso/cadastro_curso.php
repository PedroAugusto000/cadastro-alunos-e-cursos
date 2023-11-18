<!DOCTYPE html>
<html>
    <head>
	  <title>Cadastro de curso</title>
	  <meta charset="utf-8">
	</head>

<body>
    <h1> Cadastrar novo curso</h1>

    <form action="insercao_curso.php" method="GET">
        <label for="id_curso">Nome do curso:</label>
        <input type="text" name="curso" id="id_curso" placeholder="Informe o nome do curso...">
<br>
        <label for="carga_horaria">Carga horária:</label>
        <input type="text" name="carga_horaria" id="carga_horaria" placeholder="Informe a carga horária...">
<br>
        <label for="data_inicio">Data de início:</label>
        <input type="text" name="dt_inicio" id="data_inicio" placeholder="Formato: AA/MM/DD + Horário">
<br>
        <input type="submit" value="Ok">
    </form>
</body>
</html>