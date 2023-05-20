<?php include("../template/adm_header.php");?>
    <main>
        <div class="container">
            <?php if (isset($_GET['warning'])):?>
                <div class='alert alert-danger alert-dismissible fade show text-center' role='alert'>
                    <strong>Debes seleccionar una opción válida para todos los elementos.</strong>
                    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                </div>
            <?php endif?>
            <div class="table-responsive">
                <table class="table table-secondary table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Grado actual</th>
                            <th scope="col">CURP</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            include("../db/db.php");
                            $query = "SELECT a.id_alumno, a.nombre, a.ap_paterno, a.ap_materno, g.grupo, a.curp FROM alumno a
                                    INNER JOIN grupo g ON a.id_grupo = g.id_grupo WHERE a.status = 'solicitante'";
                            $result = $connection->query($query);

                            function validation($valido) {
                                if ($valido == 1) {
                                    echo 'disabled';
                                }
                            }

                            while ($row = $result->fetch_assoc()) {
                                $valido = 0;
                                $id = $row['id_alumno'];
                                
                                $nombre = $row['nombre'];
                                $apPaterno = $row['ap_paterno'];
                                $apMaterno = $row['ap_materno'];
                                $nomCompleto = $nombre . " " . $apPaterno . " " . $apMaterno;
                                $curp = $row['curp'];
                                
                                $grupo = $row['grupo'];
                                if ($grupo == "Ninguno") {
                                    $grado = $grupo;
                                } else {
                                    $grado = $grupo[0] . "°";
                                }

                                $queryDocumento = "SELECT documento, validacion FROM documento 
                                                WHERE id_alumno = $id AND documento 
                                                NOT IN ('Comprobante de pago', 'Certificado Médico')";
                                $resultDocumento = $connection->query($queryDocumento);
                                
                                while ($rowDocumento = $resultDocumento->fetch_assoc()) {
                                    $documento = $rowDocumento['documento'];
                                    $statusDocumento = $rowDocumento['validacion'];
                                    if ($statusDocumento == "pendiente") {
                                        $valido = 1;
                                    }
                                }
                        ?>
                        <tr>
                            <td scope="row"><?php echo $id?></td>
                            <td>
                                <a href="info_solicitante.php?id=<?php echo $id?>">
                                    <?php echo $nomCompleto?>
                                </a>
                            </td>
                            <td><?php echo $grado?></td>
                            <td><?php echo $curp?></td>
                            <td>
                                <button type="button" class="btn btn-success" 
                                    onclick="location.href='../db/update_statusAlumno.php?id=<?php echo $id?>';" <?php validation($valido)?>>
                                    Aceptar
                                </button>
                                <button type="button" class="btn btn-danger" 
                                    onclick="location.href='../db/delete_alumno.php?id=<?php echo $id?>';" <?php validation($valido)?>>
                                    Rechazar
                                </button>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
<?php include("../template/adm_footer.php");?>