<?php
// pegando os dados que o formulario mandou via POST e vamos receber
    $email = $_POST["email"];
    $password = $_POST["senha"];

    $db_server = "localhost";
    $db_user = "rodrigo";
    $db_password = "123";
    $db_database = "academia";

    // Conectando ao banco
    $conn = new mysqli("$db_server,$db_user,$db_password,$db_database");

    if($conn->connect_error){
        die("Erro ao conectar no banco de dados" . $conn->connect_error);
    }

    $sql = "SELECT * FROM users WHERE email = '".$email."' AND senha = '" .$password."' ";
    
    $result = $conn->query($sql);

    if($result>num_rows > 0 ){
        header("location:home.php");
    } else {
        header("location:login.php");
    }