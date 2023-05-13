<?php 
    include("../template/usr_header.php");
    include("../db/db.php");
?>
    <main>
        <div class="container mb-4">

            <div class="row">
                <div class="col-md-3">
                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-link active" id="v-pills-datos-tab" data-bs-toggle="pill" href="#v-pills-datos" 
                            role="tab" aria-controls="v-pills-datos" aria-selected="true">
                            Datos
                        </a>
                        <a class="nav-link" id="v-pills-pago-tab" data-bs-toggle="pill" href="#v-pills-pago" role="tab" 
                            aria-controls="v-pills-pago" aria-selected="false">
                            Registro Pago
                        </a>
                        <a class="nav-link" id="v-pills-certificado-tab" data-bs-toggle="pill" href="#v-pills-certificado" 
                            role="tab" aria-controls="v-pills-certificado" aria-selected="false">
                            Registro Certificado
                        </a>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active bg-border border border-dark rounded-3 p-3" id="v-pills-datos" 
                            role="tabpanel" aria-labelledby="v-pills-datos-tab">
                            <!------------ DATOS -------------------->
                            <?php
                                $id = $_SESSION['user']['id'];
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
                                    $status = $_SESSION['user']['status'];
                                    if($status == 'inscrito'){
                                        $grupo = substr($grupos, -1);
                                    } else {
                                        $grupo = 'Pendiente';
                                    }
                            ?>
                            <h2 class="mb-3">Mis datos</h2>
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
                        <div class="tab-pane fade p-3" id="v-pills-pago" role="tabpanel" aria-labelledby="v-pills-pago-tab">
                            <!------------- PAGO ------------------>
                            <div class="container">
                                <div class="mb-3">
                                    <h2>Forma de pago</h2>
                                    <div class="border bg-border border-dark rounded-3">
                                        <h1>1</h1>
                                        <h1>1</h1>
                                        <h1>1</h1>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <center>
                                        <button type="button" class="btn btn-dark" data-bs-toggle="modal" 
                                            data-bs-target="#pagoModal" required>
                                            Subir comprobante
                                        </button>
                                    </center>
                                </div>
                                <h2 class="mb-3">Historial de pagos</h2>
                                <div class="mb-3 px-5">
                                    <div class="container">
                                        <table class="table table-striped table-bordered">
                                            <thead class="table-secondary">
                                                <tr>
                                                    <th scope="col">Grado</th>
                                                    <th scope="col">Status</th>
                                                </tr>
                                            </thead>
                                            <tbody class="table-group-divider">
                                                <?php
                                                    $i = 0;
                                                    $query = "SELECT h.*, d.documento, d.validacion FROM historial h 
                                                    JOIN documento d ON h.id_alumno = d.id_alumno 
                                                    WHERE h.id_alumno = 50 
                                                    AND d.documento = 'Comprobante de pago' 
                                                    AND d.id_documento = h.id_documento";
                                                    $result = $connection->query($query);

                                                    while ($row = $result->fetch_assoc()) {
                                                        $i = 1;
                                                        $grado = $row['grado'];
                                                        $validacion = $row['validacion'];

                                                        $grado = $grado . "°";
                                                ?>
                                                <tr>
                                                    <th scope="row"><?php echo $grado?></th>
                                                    <td class="text-uppercase"><?php echo $validacion?></td>
                                                </tr>
                                                <?php } ?>
                                                <?php if ($i == 0):?>
                                                    <tr>
                                                        <th scope="row">-</th>
                                                        <td class="text-uppercase">Sin registro</td>
                                                    </tr>
                                                <?php endif?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-certificado" role="tabpanel" aria-labelledby="v-pills-certificado-tab">
                            <!------------- CERTIFICADO ------------------>
                            <div class="container">
                                <div class="mb-3">
                                    <h2>Certificado Médico</h2>
                                    <div class="mb-5">
                                        <center>
                                            <button type="button" class="btn btn-dark" data-bs-toggle="modal" 
                                                data-bs-target="#certificadoModal" required>
                                                Subir certificado
                                            </button>
                                        </center>
                                    </div>
                                </div>
                                <h2 class="mb-3">Registro</h2>
                                <div class="mb-3 px-5">
                                    <div class="container">
                                        <table class="table table-striped table-bordered">
                                            <thead class="table-secondary">
                                                <tr>
                                                    <th scope="col">Grado</th>
                                                    <th scope="col">Status</th>
                                                </tr>
                                            </thead>
                                            <tbody class="table-group-divider">
                                                <?php
                                                    $i = 0;
                                                    $query = "SELECT h.*, d.documento, d.validacion FROM historial h 
                                                    JOIN documento d ON h.id_alumno = d.id_alumno 
                                                    WHERE h.id_alumno = 50 
                                                    AND d.documento = 'Certificado Médico' 
                                                    AND d.id_documento = h.id_documento";
                                                    $result = $connection->query($query);
                                                    
                                                    while ($row = $result->fetch_assoc()) {
                                                        $i = 1;
                                                        $grado = $row['grado'];
                                                        $validacion = $row['validacion'];
                                                        
                                                        $grado = $grado . "°";
                                                ?>
                                                <tr>
                                                    <th scope="row"><?php echo $grado?></th>
                                                    <td class="text-uppercase"><?php echo $validacion?></td>
                                                </tr>
                                                <?php } ?>
                                                <?php if ($i == 0):?>
                                                    <tr>
                                                        <th scope="row">-</th>
                                                        <td class="text-uppercase">Sin registro</td>
                                                    </tr>
                                                <?php endif?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!--- MODAL PAGO --->
            <div class="modal fade" id="pagoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Subir datos</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form method="POST" action="../db/insert_pago.php" enctype="multipart/form-data">
                            <div class="modal-body">
                                <div class="mb-3">
                                    <h5 class="mb-3"><b>Advertencia</b>: una vez confirmado no se podrá modificar</h5>
                                    <label class="form-label">Comprobante de pago</label>
                                    <input type="file" class="form-control" name="doc_pago" required>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancelar</button>
                                <button type="submit" name="btnPago" class="btn btn-success">Enviar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!--- MODAL CERTIFICADO --->
            <div class="modal fade" id="certificadoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Subir datos</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form method="POST" action="../db/insert_certMedico.php" enctype="multipart/form-data">
                            <div class="modal-body">
                                <div class="mb-3">
                                    <h5 class="mb-3"><b>Advertencia</b>: una vez confirmado no se podrá modificar</h5>
                                    <label class="form-label">Certificado medico</label>
                                    <input type="file" class="form-control" name="doc_medico" required>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancelar</button>
                                <button type="submit" name="btnMedico" class="btn btn-success">Subir</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
<?php include("../template/usr_footer.php");?>