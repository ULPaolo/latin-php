<?php
    if ($_SERVER ['REQUEST_METHOD'] == 'POST'){
        require_once("db.php");
        
        $id = $_POST['id'];
        $nombre = $_POST['nombre'];

    $query = "insert into pruebatbasistente (id, nombre) values ('$id', '$nombre')";
    $result = $mysql->query($query);
    
        if ($result === true){
            echo "creado";
        }else{
            echo "Error";
        }
        
     $mysql->close();
    }
 ?>