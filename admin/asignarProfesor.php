<?php include("../template/adm_header.php");?>
    <main>
        <div class="container px-5">
            <?php if (isset($_GET['warning'])):?>
                <div class='alert alert-danger alert-dismissible fade show text-center' role='alert'>
                    <strong>Debes seleccionar una opción válida.</strong>
                    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                </div>
            <?php endif?>
            <div class="px-lg-5">
                <table id="tbl-profesor" class="table table-secondary table-bordered mb-3" data-show-print="true">
                    <thead>
                        <tr>
                            <th scope="col">Grupo</th>
                            <th scope="col">Profesor</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            include("../db/db.php");
                            $query = "SELECT g.grupo, COALESCE(p.nombre, 'Sin asignar') AS nombre_profesor
                            FROM grupo g
                            LEFT JOIN profesor p ON g.id_profesor = p.id_profesor 
                            WHERE g.grupo NOT IN ('Ninguno')";
                            $result = $connection->query($query);

                            while ($row = $result->fetch_assoc()) {                            
                                $profesor = $row['nombre_profesor'];
                                $grupo = $row['grupo'];
 
                                $grupo_con_grado = substr_replace($grupo, '° ', 1, 0);
                        ?>
                            <tr>
                                <td><?php echo $grupo_con_grado?></td>
                                <td><?php echo $profesor?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
    
                <center>
                    <button type="button" class="btn btn-primary m-3" data-bs-toggle="modal" 
                        data-bs-target="#asignarModal">
                        Asignar profesor
                    </button>
                </center>
            </div>
        </div>

        <?php
             $query = "SELECT id_profesor, nombre FROM profesor";
             $result = $connection->query($query);
         
             // Verificar si se obtuvieron resultados
             if ($result->num_rows > 0) {
                 // Generar las opciones del elemento de selección
                 $options = "<option selected>Seleccionar</option>";
                 while ($row = $result->fetch_assoc()) {
                     $idProfesor = $row['id_profesor'];
                     $nombreProfesor = $row['nombre'];
                     $options .= "<option value='$idProfesor'>$nombreProfesor</option>";
                 }
             } else {
                 // No se encontraron profesores en la base de datos
                 $options = "<option value=''>No hay profesores disponibles</option>";
             }
        ?>

        <!-- Modal Asignar -->
        <div class="modal fade" id="asignarModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" 
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Asignar</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form method="POST" action="../db/update_asignarProfesor.php">
                            <div class="modal-body">
                                <div class="mb-3">
                                    <label class="form-label">Grupo</label>
                                    <select name="select-grupo" class="form-select mb-3" aria-label="Default select example">
                                        <option value="1" selected>1° A</option>
                                        <option value="2">1° B</option>
                                        <option value="3">2° A</option>
                                        <option value="4">2° B</option>
                                        <option value="5">3° A</option>
                                        <option value="6">3° B</option>
                                        <option value="7">4° A</option>
                                        <option value="8">4° B</option>
                                        <option value="9">5° A</option>
                                        <option value="10">5° B</option>
                                        <option value="11">6° A</option>
                                        <option value="12">6° B</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Profesor</label>
                                    <select class="form-select" name="select-profesor">
                                        <?php echo $options?>
                                    </select>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                <button type="submit" name="btnAsignar" class="btn btn-primary">Confirmar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>


    </main>
<?php include("../template/adm_footer.php");?>