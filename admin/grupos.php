<?php include("../template/adm_header.php");?>
    <main>
        <div class="container">
            <div>
                <table class="table table-secondary table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Grado cursado</th>
                            <th scope="col">Grado a cursar</th>
                            <th scope="col">Grupo</th>
                            <th scope="col">CURP</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <form method="POST" action="../db/update_grupoAlumno.php">
                            <?php
                                include("../db/db.php");
                                $query = "SELECT a.id_alumno, a.nombre, a.ap_paterno, a.ap_materno, g.grupo, a.curp FROM alumno a
                                INNER JOIN grupo g ON a.id_grupo = g.id_grupo WHERE a.status = 'grupos'";
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
                                        $gradoCursar = "1°";
                                    } else {
                                        $grado = $grupo[0] . "°";
                                        $gradoCursar = $grupo[0] + 1 . "°";
                                    }
                            ?>
                                <tr>
                                    <td scope="row">1</td>
                                    <td><?php echo $nomCompleto?></td>
                                    <td><?php echo $grado?></td>
                                    <td><?php echo $gradoCursar?></td>
                                    <td>
                                        <select name="group" class="form-select" aria-label="Default select example"required>
                                            <option value="1A" selected>1° A</option>
                                            <option value="1B">1° B</option>
                                            <option value="2A">2° A</option>
                                            <option value="2B">2° B</option>
                                            <option value="3A">3° A</option>
                                            <option value="3B">3° B</option>
                                            <option value="4A">4° A</option>
                                            <option value="4B">4° B</option>
                                            <option value="5A">5° A</option>
                                            <option value="5B">5° B</option>
                                            <option value="6A">6° A</option>
                                            <option value="6B">6° B</option>
                                        </select>
                                        <input type="hidden" name="idAlumno" value="<?php echo $id?>">
                                    </td>
                                    <td><?php echo $curp?></td>
                                    <td>
                                        <button type="submit" name="btnGrupo" class="btn btn-success">
                                            Confirmar
                                        </button>
                                    </td>
                                </tr>
                            <?php } ?>
                        </form>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
<?php include("../template/adm_footer.php");?>