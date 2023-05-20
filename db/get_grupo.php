<?php
    include("../db/db.php");

    $grupo = $_POST['grupo'];

    $query = "SELECT a.id_alumno, a.nombre, a.ap_paterno, a.ap_materno, g.grupo, a.curp, IFNULL(p.nombre, 'Sin asignar') AS nombre_profesor
          FROM alumno a
          INNER JOIN grupo g ON a.id_grupo = g.id_grupo
          LEFT JOIN profesor p ON g.id_profesor = p.id_profesor
          WHERE a.status = 'inscrito' AND g.grupo = '$grupo'";

    $result = $connection->query($query);

    $output = "";
    while ($row = $result->fetch_assoc()) {
        $id = $row['id_alumno'];

        $nombre = $row['nombre'];
        $apPaterno = $row['ap_paterno'];
        $apMaterno = $row['ap_materno'];
        $profesor = $row['nombre_profesor'];
       
        $nomCompleto = $nombre . " " . $apPaterno . " " . $apMaterno;
        $curp = $row['curp'];
        $grupos = $row['grupo'];
        if ($grupos != "Ninguno") {
            $grado = $grupos[0] . "°";
            $grupo = substr($grupos, -1);
        }
    
        $output .= "<tr>
                        <td scope='row'>$id</td>
                        <td><a id='myLink' class='' href='info_alumno.php?id=$id'>$nomCompleto</a></td>
                        <td>$grado</td>
                        <td>$grupo</td>
                        <td>$profesor</td>
                        <td class=''>
                            <button type='button' class='btn btn-danger' 
                                onclick='location.href=\"../db/delete_alumno.php?id=$id\";'>
                                Eliminar
                            </button>
                        </td>
                    </tr>";
    }
    
    echo $output;
?>    