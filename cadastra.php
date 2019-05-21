<?php
   try{
       $conexao = mysqli_connect("localhost", "soaresmju", "", "db_juju");
       
      $nome = $_POST['nome'];
      $email = $_POST['email'];
      $query="insert into pessoa values (null, '$nome', '$email')";
      
      mysqli_query($conexao,$query);
      
      echo "Cadastro realizado com sucesso!";
   }catch (Exception $e){
    echo "Erro ao conectar: ".$e;
   }