<?php
  
    require "estudiante.php";
    function show(){
        $conexion2 = conexion();
        $sql = "SELECT * FROM users;";
        $estudiantes = $conexion2->query($sql);
        foreach ($estudiantes as $estudiante) {
            echo "Name: " . $estudiante["name2"] . " ID: " . $estudiante["id"] . " Age: " . $estudiante["edad"] . " Email: " . $estudiante["email"] . "\n";  
        }
    }
    function delete($cedula){
        $conexion = conexion();
        $sql = "DELETE FROM users WHERE id = '$cedula';";
        $conexion->query($sql);
        echo "Estudiante Eliminado!";
    }
    function update($nombre, $cedula, $edad, $correo){
        $conexion = conexion();
        $sql = "UPDATE users SET name2 = '$nombre', id = '$cedula', edad = '$edad', email = '$correo' WHERE id = '$cedula';";
        $conexion->query($sql);
        echo "Estudiante Modificado!";
    }
    echo "Seleccione una Opción: \n1- Insertar Estudiante\n2- Ver Estudiantes\n3- Eliminar Estudiantes\n4- Modificar Estudiante\n";
    $number = readline("Enter a number: ");
    if($number == 1){
        $name = readline("Enter a name: "); 
        $id = readline("Enter your id: ");
        $edad = readline("Enter an age: ");
        $correo = readline("Enter an email: ");
        $clase = new Estudiante($name,$id,$edad,$correo);
        $clase->insert();
    }
    else if($number == 2){
        show();
    }else if($number == 3){
        show();
        $cedula = readline("Input the ID to delete: ");
        delete($cedula);
    }else if($number == 4){
        show();
        $opcion = readline("Input the Student`s id you want to modify: ");
        $conexion = conexion();
        $sql = "SELECT * FROM users WHERE id = :id2";
        $info2 = $conexion->prepare($sql); 
        $info2->execute(array(':id2' => $opcion));
        $info = $info2->fetch();
        echo "What do you want to modify:\n1- Name\n2- Id\n3- Age\n4-email\n";
        $opcion2 = readline("Input the Option: ");
        if($opcion2 == 1){
            $newname = readline("Input the name: ");
            $oldid = $info["id"];
            $oldage = $info["edad"];
            $oldemail = $info["email"];
            update($newname, $oldid,$oldage,$oldemail);
        }
        else if($opcion2 == 2){
            $newid= readline("Input the ID: ");
            $oldage = $info["edad"];
            $oldname = $info["name2"];
            $oldemail = $info["email"];
            update($oldname, $newid,$oldage,$oldemail);
        }
        else if($opcion2 == 3){
            $newage= readline("Input the age: ");
            $oldid = $info["id"];
            $oldname = $info["name2"];
            $oldemail = $info["email"];
            update($oldname, $oldid,$newage,$oldemail);
        }
        else if($opcion2 == 4){
            $newemail= readline("Input the email: ");
            $oldid = $info["id"];
            $oldname = $info["name2"];
            $oldage = $info["age"];
            update($oldname, $oldid,$oldage,$newemail);
        }
    }
    
?>