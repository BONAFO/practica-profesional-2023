 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
 </head>

 <body>

     <table border="1" cellpadding="3" cellspacing="0">
         <tr>
             <td>Nombre y Apellido</td>
             <td>Edad</td>
             <td>Área</td>
             <td>Correo</td>
         </tr>
         <?php
            $empleados = [["Nombre" => "Marcelo", "Apellido" => "Velez", "Edad" => 25, "Area" => "Administración", "Correo" => "marceloVelez@hotmail.com",], ["Nombre" => "Alberto", "Apellido" => "Unbertini", "Edad" => 36, "Area" => "RRHH", "Correo" => "albert.unbert@hotmail.com",], ["Nombre" => "Isidora", "Apellido" => "Gutierrez", "Edad" => 33, "Area" => "Desarrollador", "Correo" => "isi_gutie@gmail.cl",], ["Nombre" => "Sebastian", "Apellido" => "Jimenez", "Edad" => 21, "Area" => "No Asignada", "Correo" => "s.jimenez@gmail.cl",], ["Nombre" => "Manuel", "Apellido" => "Osorio", "Edad" => 19, "Area" => "Desarrollador", "Correo" => "manu007@outlook.com",], ["Nombre" => "Alonso", "Apellido" => "Villa", "Edad" => 47, "Area" => "Product Manager", "Correo" => "alvilla@hotmail.com",]];
            for ($i = 0; $i < count($empleados); $i++) {
                echo "<tr>";
                echo "<td>", $empleados[$i]["Nombre"], " ", $empleados[$i]["Apellido"], "</td>";
                echo "<td>", $empleados[$i]["Edad"], "</td>";
                echo "<td>", $empleados[$i]["Area"], "</td>";
                echo "<td>", $empleados[$i]["Correo"], "</td>";
                echo "</tr>";
            };
            ?>
     </table>

     <a href="index.php">VOLVER</a>
 </body>

 </html>



 <!-- 
    
3) A partir del siguiente listado necesitamos crear una tabla que contenga la información de los empleados de los cuales su índice sea un numero impar. (opcional): Nombre y Apellido deben ir en la misma celda.
$empleados = [["Nombre" => "Marcelo","Apellido" => "Velez","Edad" => 25,"Area" => "Administración", "Correo" => "marceloVelez@hotmail.com",],["Nombre" => "Alberto","Apellido"=> "Unbertini","Edad" => 36,"Area" => "RRHH","Correo" => "albert.unbert@hotmail.com",],["Nombre"=>"Isidora","Apellido" => "Gutierrez","Edad" => 33,"Area" => "Desarrollador","Correo" => "isi_gutie@gmail.cl",],["Nombre" =>"Sebastian","Apellido" => "Jimenez","Edad" => 21,"Area" => "No Asignada","Correo" =>"s.jimenez@gmail.cl",],["Nombre" => "Manuel","Apellido" => "Osorio","Edad" => 19,"Area" =>"Desarrollador","Correo" => "manu007@outlook.com",],["Nombre" =>"Alonso","Apellido" => "Villa","Edad" => 47,"Area" => "Product Manager","Correo" =>"alvilla@hotmail.com",]];
EJM.
Nombre y Apellido Edad Área Correo
Alberto Unbertini 36 RRHH albert.unbert@hotmail.com -->