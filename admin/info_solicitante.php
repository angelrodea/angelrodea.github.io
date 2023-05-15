<?php include("../template/adm_header.php");?>
    <main>
        <!-- NO Modal -->
        <div class="modal-body container mb-3">
            <div class="row">
                <div class="col-md-3">
                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-link active" id="v-pills-datos-tab" data-bs-toggle="pill" href="#v-pills-datos" 
                            role="tab" aria-controls="v-pills-datos" aria-selected="true">
                            Datos
                        </a>
                        <a class="nav-link" id="v-pills-doc-tab" data-bs-toggle="pill" href="#v-pills-doc" role="tab" 
                            aria-controls="v-pills-doc" aria-selected="false">
                            Documentos
                        </a>
                        <a class="nav-link" href="solicitantes.php">
                            Regresar
                        </a>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active bg-border border border-dark rounded-3 p-3" 
                            id="v-pills-datos" role="tabpanel" aria-labelledby="v-pills-datos-tab">
                            <!------------ DATOS -------------------->
                            <?php
                                include("../db/db.php");
                                $id = $_GET['id'];
                                $query = "SELECT a.*, g.grupo FROM alumno a INNER JOIN grupo g 
                                        ON a.id_grupo = g.id_grupo WHERE id_alumno = $id";
                                $result = $connection->query($query);

                                while ($row = $result->fetch_assoc()) {
                                    $nombre = $row['nombre'];
                                    $apPaterno = $row['ap_paterno'];
                                    $apMaterno = $row['ap_materno'];
                                    $curp = $row['curp'];
                                    $fNacimiento = $row['fecha_nacimiento'];
                                    $genero = $row['genero'];
                                    $celular = $row['celular'];
                                    $correo = $row['correo'];
                                    $tutor = $row['tutor'];
                                    $calle = $row['dir_calle'];
                                    $numero = $row['dir_numero'];
                                    $colonia = $row['dir_colonia'];
                                    $municipio = $row['dir_municipio'];
                                    $cp = $row['dir_cp'];
                                    $entidad = $row['dir_entidad'];
                                    
                                    $grupos = $row['grupo'];
                                    $grado = $grupos[0] . "°";
                                    $grupo = substr($grupos, -1);
                            ?>
                            <h2 class="mb-3">Datos del alumno</h2>
                            <div>
                                <div class="form-group row mb-3">
                                    <label class="col-lg-1 col-form-label me-4" for="name">Nombre(s)</label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" id="name" name="name" 
                                            value="<?php echo $nombre;?>" readonly>
                                    </div>
                                </div>
                                <div class="form-group row mb-3">
                                    <label class="col-lg-1 col-form-label me-4" for="name">Apellidos</label>
                                    <div class="col-lg-5">
                                        <input type="text" class="form-control" id="name" name="name" 
                                            value="<?php echo $apPaterno?>" readonly>
                                    </div>
                                    <div class="col-lg-5">
                                        <input type="text" class="form-control" id="name" name="name" 
                                            value="<?php echo $apMaterno?>" readonly>
                                    </div>
                                </div>
                                <div class="form-group row mb-3">
                                    <label class="col-lg-1 col-form-label me-4" for="name">CURP</label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" id="name" name="name" 
                                            value="<?php echo $curp?>" readonly>
                                    </div>
                                </div>
                                <div class="form-group row mb-3">
                                    <label class="col-lg-3 col-form-label" for="name">Fecha de nacimiento</label>
                                    <div class="col-lg-2 p-0">
                                        <input type="date" class="form-control" id="name" name="name" 
                                            value="<?php echo $fNacimiento?>" readonly>
                                    </div>
                                    <label class="col-lg-2"></label>
                                    <label class="col-lg-1 col-form-label me-4" for="name">Genero</label>
                                    <div class="col-lg-2 ps-0">
                                        <select class="form-select" aria-label="Default select example" disabled>
                                            <option selected><?php echo $genero?></option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row mb-3">
                                    <label class="col-lg-3 col-form-label" for="name">Grado</label>
                                    <div class="col-lg-2 p-0">
                                        <select class="form-select" aria-label="Default select example" disabled>
                                            <option selected><?php echo $grado ?></option>
                                        </select>
                                    </div>
                                    <label class="col-lg-2"></label>
                                    <label class="col-lg-1 col-form-label me-4" for="name">Grupo</label>
                                    <div class="col-lg-2 ps-0">
                                        <select class="form-select" aria-label="Default select example" disabled>
                                            <option selected><?php echo $grupo?></option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row mb-3">
                                    <label class="col-lg-1 col-form-label me-4" for="name">Celular</label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" id="name" name="name" 
                                            value="<?php echo $celular?>" readonly>
                                    </div>
                                </div>
                                <div class="form-group row mb-3">
                                    <label class="col-lg-1 col-form-label me-4" for="name">Correo</label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" id="name" name="name" 
                                            value="<?php echo $correo?>" readonly>
                                    </div>
                                </div>
                                <div class="card position-relative">
                                    <h5 class="card-header">Dirección</h5>
                                    <div class="card-body">
                                        <div class="form-group row mb-3">
                                            <div class="col-lg-8 form-floating mb-3">
                                                <input type="text" class="form-control" name="name" 
                                                value="<?php echo $calle?>" readonly>
                                                <label for="name" class="ps-4">Calle</label>
                                            </div>
                                            <div class="col-lg-3 form-floating mb-3">
                                                <input type="text" class="form-control" name="name" 
                                                    value="<?php echo $numero?>" readonly>
                                                <label for="name" class="ps-4">Número</label>
                                            </div>
                                        </div>
                                        <div class="form-group row mb-3">
                                            <label class="col-lg-2 col-form-label me-4" for="name">Colonia</label>
                                            <div class="col-lg-3">
                                                <input type="text" class="form-control" id="name" name="name" 
                                                    value="<?php echo $colonia?>" readonly>
                                            </div>
                                            <label class="col-lg-1"></label>
                                            <label class="col-lg-2 col-form-label" for="name">Municipo</label>
                                            <div class="col-lg-3">
                                                <input type="text" class="form-control" id="name" name="name" 
                                                value="<?php echo $municipio?>" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group row mb-3">
                                            <label for="name" class="col-lg-2 col-form-label me-4">C.P.</label>
                                            <div class="col-lg-3">
                                                <input type="text" class="form-control" name="name" 
                                                    value="<?php echo $cp?>" readonly>
                                            </div>
                                            <label class="col-lg-1"></label>
                                            <label class="col-lg-2 col-form-label" for="name">Entidad</label>
                                            <div class="col-lg-3">
                                                <input type="text" class="form-control" id="name" name="name" 
                                                    value="<?php echo $entidad?>" readonly>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                        <div class="tab-pane fade p-3" id="v-pills-doc" role="tabpanel" aria-labelledby="v-pills-doc-tab">
                            <!------------- DOCUMENTOS ------------------>
                            <div class="container">
                                <div class="mb-3">
                                    <form method="POST" action="../db/update_docValidacion.php">
                                        <table class="table table-striped table-bordered">
                                            <thead class="table-secondary">
                                                <tr>
                                                    <th scope="col">Nombre del documento</th>
                                                    <th scope="col">Documento</th>
                                                    <th scope="col">Estado</th>
                                                </tr>
                                            </thead>
                                            <tbody class="table-group-divider">
                                                <?php
                                                    $query = "SELECT id_documento, documento, archivo FROM documento 
                                                    WHERE id_alumno = $id AND documento 
                                                    NOT IN ('Comprobante de pago', 'Certificado Médico')";
                                                    $result = $connection->query($query);

                                                    while ($row = $result->fetch_assoc()) {
                                                        $idDoc = $row['id_documento'];
                                                        $doc = $row['documento'];
                                                        $archivo = $row['archivo'];

                                                        $nombreArchivo = basename($archivo);
                                                ?>
                                                    <tr>
                                                        <td scope="row"><?php echo $doc?></td>
                                                        <td><a href="#"><?php echo $nombreArchivo;?></a></td>
                                                        <td>
                                                            <select name="validacion[]" id="<?php echo $idDoc?>" required>
                                                                <option selected>Seleccionar</option>
                                                                <option value="aceptado">Aceptado</option>
                                                                <option value="rechazado">No aceptado</option>
                                                            </select>
                                                            <input type="hidden" name="idDoc[]" value="<?php echo $idDoc ?>">
                                                        </td>
                                                    </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                        <center>
                                            <button type="submit" name="btnDocs" class="btn btn-primary">
                                                Validar documentos
                                            </button>
                                        </center>
                                    </form>
                                </div>

                                <div class="mb-5">
                                    <form action="">
                                        <h2 class="ms-5">Certificado Médico</h2>
                                        <table class="table table-striped table-bordered">
                                            <thead class="table-secondary">
                                                <tr>
                                                    <th scope="col">Grado</th>
                                                    <th scope="col">Documento</th>
                                                    <th scope="col">Estado</th>
                                                </tr>
                                            </thead>
                                            <tbody class="table-group-divider">
                                                <tr>
                                                    <td scope="row">
                                                        <select name="gradoMedico" id="gradoMedico" disabled>
                                                            <option selected>Seleccionar</option>
                                                            <option value="1">1°</option>
                                                            <option value="2">2°</option>
                                                            <option value="3">3°</option>
                                                            <option value="4">4°</option>
                                                            <option value="5">5°</option>
                                                        </select>
                                                    </td>
                                                    <td>Sin registro</td>
                                                    <td>
                                                        <select name="docMedico" id="docMedico" disabled>
                                                            <option selected>Seleccionar</option>
                                                            <option value="1">Aceptado</option>
                                                            <option value="2">No aceptado</option>
                                                        </select>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <center>
                                            <button type="submit" name="btnComment" class="btn btn-primary" disabled>
                                                Validar documentos
                                            </button>
                                        </center>
                                    </form>
                                </div>
                                
                                <div class="mb-3">
                                    <form action="">
                                        <h2 class="ms-5">Comprobante de pago</h2>
                                        <table class="table table-striped table-bordered">
                                            <thead class="table-secondary">
                                                <tr>
                                                    <th scope="col">Grado</th>
                                                    <th scope="col">Documento</th>
                                                    <th scope="col">Estado</th>
                                                </tr>
                                            </thead>
                                            <tbody class="table-group-divider">
                                                <tr>
                                                    <td scope="row">
                                                        <select name="gradoMedico" id="gradoMedico" disabled>
                                                            <option selected>Seleccionar</option>
                                                            <option value="1">1°</option>
                                                            <option value="2">2°</option>
                                                            <option value="3">3°</option>
                                                            <option value="4">4°</option>
                                                            <option value="5">5°</option>
                                                        </select>
                                                    </td>
                                                    <td>Sin registro</td>
                                                    <td>
                                                        <select name="docMedico" id="docMedico" disabled>
                                                            <option selected>Seleccionar</option>
                                                            <option value="1">Aceptado</option>
                                                            <option value="2">No aceptado</option>
                                                        </select>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <center>
                                            <button type="submit" name="btnComment" class="btn btn-primary" disabled>
                                                Validar documentos
                                            </button>
                                        </center>
                                    </form>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            <!---------- END MODAL BODY ------------>
        </div>
    </main>
<?php include("../template/adm_footer.php");?>