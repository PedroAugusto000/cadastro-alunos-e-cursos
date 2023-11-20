<?php

 // var_dump($link);
 //   echo 'aqui funcoes.inc.php <br>';

function monta_select_curso(){

  global $link;
  
  // lista cursos já cadastrados
  $query = "SELECT id_curso, ds_curso FROM tb_curso;";
  if ($result = mysqli_query($link, $query)) {
	  echo "<select name=\"id_curso\">";
	  // busca os dados lidos do banco de dados
	  while ($row = mysqli_fetch_assoc($result)) {
		  $id = $row["id_curso"];
		  $curso = $row["ds_curso"];
                   // <option value="1">Anal. Des. Sist</option> 
		  echo "<option value=\"$id\">";
		  echo  $curso . '</option>';
          }
          echo "</select>";
          
	  // libera a área de memória onde está o resultado
	  mysqli_free_result($result);
  }

  }
  
  function monta_select_curso2($id_curso){
  global $link;

  // lista cursos já cadastrados
  $query = "SELECT id_curso, ds_curso FROM tb_curso;";
  if ($result = mysqli_query($link, $query)) {
	  echo "<select name=\"id_curso\">";
	  // busca os dados lidos do banco de dados
	  while ($row = mysqli_fetch_assoc($result)) {
		  $id = $row["id_curso"];
		  $curso = $row["ds_curso"];
                   // <option value="1">Anal. Des. Sist</option> 
                  echo $id_curso." == ".$id." <br>";
                  if ($id_curso == $id) {
                      $selected = 'selected';
                  } else {
                      $selected = '';
                  }
		  echo "<option value=\"$id\" $selected>";
		  echo  $curso . '</option>';
          }
          echo "</select>";
          
	  // libera a área de memória onde está o resultado
	  mysqli_free_result($result);
  }

  }
  
  
  function recupera_aluno($id){

  global $link;
  // lista cursos já cadastrados
  $query = "SELECT id_aluno, ds_aluno, id_curso FROM tb_aluno WHERE id_aluno = $id;";

  if ($result = mysqli_query($link, $query)) {
	 	  // busca os dados lidos do banco de dados
	  while ($row = mysqli_fetch_assoc($result)) {
                return $row;
          }
         
	  // libera a área de memória onde está o resultado
	  mysqli_free_result($result);
  }

  }
// monta_select_curso();  

function recupera_curso($id_curso) { //Função criada
  include "../inc/conectabd.inc.php"; //Conexão com o BD

  $query = "SELECT id_curso, ds_curso, nr_carga_horaria, dt_inicio FROM tb_curso WHERE id_curso = ?";
  
  //O $link é uma variável declarada lá no "conectbd.php" que liga o banco de dados
  if ($stmt = mysqli_prepare($link, $query)) { //Prepara a consulta 
      mysqli_stmt_bind_param($stmt, "i", $id_curso); //Vincula o $id_curso -> "i" = valor inteiro (Se não dá esse erro  The number of elements in the type definition string must match the number of bind variables)
      mysqli_stmt_execute($stmt); //Execulta a consulta

      mysqli_stmt_bind_result($stmt, $id_curso, $ds_curso, $nr_carga_horaria, $dt_inicio); //Vincula as variáveis aos resultados da consulta p q dps ele serem recuperados

      if (mysqli_stmt_fetch($stmt)) { //Buscar uma linha de resultados da consulta
          $curso = array( //Cria um array com tds as informações recuperadas

            //Aqui só vai marcando com base nos nomes das colunas do banco de dados
              "id_curso" => $id_curso,
              "ds_curso" => $ds_curso,
              "nr_carga_horaria" => $nr_carga_horaria,
              "dt_inicio" => $dt_inicio
          );

          mysqli_stmt_close($stmt); //Fecha o comando e libera os recursos
          return $curso; //Se for bem sucedido vai liberar 
      } else { // Aqui se buscar der merda ele ñ vai liberar
          mysqli_stmt_close($stmt);
          return false;
      }
  } else {
      return false; 
  }
    $id = $_GET["id"];
    $curso = recupera_curso($id);
}



  
  










