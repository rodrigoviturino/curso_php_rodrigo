<?php

    if($_GET['erro'])
?>


<form method="post" action="autenticar.php">
    <label for="">Email</label> <br>
    <input type="text" name="email"> <br>
    
    <label for="">Senha</label> <br>
    <input type="password" name="senha"> <br>

    <input type="submit" name="enviar" value="OK">
</form>