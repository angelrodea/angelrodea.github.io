<?php include("template/header.php");?>
    <main>
        <div class="container">
            <?php
                if (isset($_GET['send'])) {
                    echo "<div class='alert alert-success alert-dismissible fade show text-center' role='alert'>
                            <strong>Se ha enviado correctamente sus datos, por favor revise su correo.</strong>
                            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                        </div>";
                }
            ?>
            <!------------------- INFO ------------------------->
            <h1 class="display-5 ms-4">Costo</h1>
            <div class="jumbotron border rounded-3 bg-border p-3 mb-5">
                <center>
                    <p class="lead"><b>El costo por cursar grado es de: </b></p><h2>$2,450.00 MXN</h2>
                    <hr class="my-4">
                    <p>El costo del uniforme: $1,200.00 el cual se pagará una vez el niño ingrese al colegio</p>
                </center>
            </div>
            <h1 class="display-5 ms-4">Proceso de admisión</h1>
            <div class="mb-5">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed quia vitae odit excepturi ipsum? 
                    Quisquam mollitia quibusdam cupiditate earum odio delectus itaque dolor, accusantium nihil quae 
                    officia vel harum cumque. Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia 
                    recusandae nostrum iure sint quod delectus accusamus ipsum, vero odio, ipsam quam, consequuntur 
                    illo pariatur quos voluptatum voluptatem reiciendis atque cupiditate.
                </p>
            </div>
            <center class="mb-4">
                <h3 class="mb-3">¡Inscríbete aquí!</h3>
                <button type="button" class="btn btn-dark btn-lg text-uppercase" data-bs-toggle="modal" 
                    data-bs-target="#filesModal">Inscripción</button>
                </div>
            </center>
        </div>

        <!-- Modal Files -->
        <div class="modal fade" id="filesModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" 
            aria-labelledby="filesModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="exampleModalLabel">Datos personales</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="db/insert_alumno.php" method="POST" enctype="multipart/form-data">
                        <div class="modal-body">
                            <div class="form-group row mb-3">
                                <label class="col-lg-2 col-form-label" for="nombre">Nombre(s)</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="ej. Maria" required>
                                </div>
                            </div>
                            <div class="form-group row mb-3">
                                <label class="col-lg-2 col-form-label" for="apPaterno">Ap. Paterno</label>
                                <div class="col-lg-4">
                                    <input type="text" class="form-control" id="apPaterno" name="apPaterno" placeholder="Maria" required>
                                </div>
                                <label class="col-lg-2 col-form-label" for="apMaterno">Ap. Materno</label>
                                <div class="col-lg-4">
                                    <input type="text" class="form-control" id="apMaterno" name="apMaterno" placeholder="Maria" required>
                                </div>
                            </div>
                            <div class="form-group row mb-3">
                                <label class="col-lg-2 col-form-label" for="edad">Edad</label>
                                <div class="col-lg-4">
                                    <input type="number" class="form-control" id="edad" name="edad" placeholder="ej. 8" required>
                                </div>
                                <label class="col-lg-2 col-form-label" for="nacimiento">Fecha de nacimeinto</label>
                                <div class="col-lg-4">
                                    <input type="date" class="form-control" id="nacimiento" name="nacimiento" required>
                                </div>
                            </div>
                            <div class="form-group row mb-3">
                                <label class="col-lg-2 col-form-label" for="curp">CURP</label>
                                <div class="col-lg-4">
                                    <input type="text" class="form-control" id="curp" name="curp" placeholder="ej. DWAD1412AWD12" required>
                                </div>
                                <label class="col-lg-2 col-form-label" for="curp">Género</label>
                                <div class="col-lg-4">
                                    <select class="form-select" name="genero" aria-label="Default select example">
                                        <option selected>Seleccionar</option>
                                        <option value="Masculino">Masculino</option>
                                        <option value="Femenino">Femenino</option>
                                        <option value="Otro">Otro</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row mb-3">
                                <label class="col-lg-3 col-form-label" for="correo">Correo electrónico</label>
                                <div class="col-lg-9">
                                    <input type="email" class="form-control" id="correo" name="correo" placeholder="ej. maria@gmail.com" 
                                        required>
                                </div>
                            </div>
                            <div class="form-group row mb-3">
                                <label class="col-lg-2 col-form-label" for="tel">Teléfono</label>
                                <div class="col-lg-10">
                                    <input type="tel" class="form-control" id="tel" name="tel" placeholder="ej. 55325426171" 
                                        required>
                                </div>
                            </div>
                            <!-- Campo para seleccionar el grado actual -->
                            <div class="form-group row mb-3">
                                <label class="col-lg-2 col-form-label" for="grado">Grado actual</label>
                                <div class="col-lg-10">
                                    <select class="form-control" name="grado" id="grado" required>
                                        <option value="">Seleccione un grado</option>
                                        <option value="1">1°</option>
                                        <option value="2">2°</option>
                                        <option value="3">3°</option>
                                        <option value="4">4°</option>
                                        <option value="5">5°</option>
                                        <option value="Ninguno">Ninguno</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row mb-3">
                                <label class="col-lg-4 col-form-label" for="tutor">Nombe del padre o tutor</label>
                                <div class="col-lg-8">
                                    <input type="text" class="form-control" id="tutor" name="tutor" placeholder="ej. Juan Quiroz Narvarte" 
                                        required>
                                </div>
                            </div>
                            <!---------------- DIRECCION ------------------>
                            <h4 class="mt-5">Dirección</h4>
                            <hr class="mb-3">
                            <div class="form-group row mb-3">
                                <label class="col-lg-1 col-form-label" for="calle">Calle</label>
                                <div class="col-lg-3">
                                    <input type="text" class="form-control" id="calle" name="calle" placeholder="ej. Calle 1" 
                                        required>
                                </div>
                                <label class="col-lg-1 col-form-label" for="num">Número</label>
                                <div class="col-lg-3">
                                    <input type="text" class="form-control" id="num" name="num" placeholder="ej. 552172617" 
                                        required>
                                </div>
                                <label class="col-lg-1 col-form-label" for="col">Colonia</label>
                                <div class="col-lg-3">
                                    <input type="text" class="form-control" id="col" name="col" placeholder="ej. Tepalcates" 
                                        required>
                                </div>
                            </div>
                            <div class="form-group row mb-3">
                                <label class="col-lg-1 col-form-label" for="cp">C.P.</label>
                                <div class="col-lg-2">
                                    <input type="text" class="form-control" id="cp" name="cp" placeholder="ej. 11899" 
                                        required>
                                </div>
                                <label class="col-lg-2 col-form-label" for="mun">Municipio</label>
                                <div class="col-lg-3">
                                    <input type="text" class="form-control" id="mun" name="mun" placeholder="ej. Iztapalapa" 
                                        required>
                                </div>
                                <label class="col-lg-1 col-form-label" for="entidad">Entidad</label>
                                <div class="col-lg-3">
                                    <input type="text" class="form-control" id="entidad" name="entidad" placeholder="ej. CDMX" 
                                        required>
                                </div>
                            </div>
                            <!---------------- DOCUMEMTOS ------------------>
                            <h4 class="mt-5">Documentos</h4>
                            <hr class="mb-3">
                            <div class="form-group row mb-2">
                                <label class="col-lg-3 col-form-label" for="doc_acta">Acta de nacimiento</label>
                                <div class="col-lg-9 mb-2">
                                    <input type="file" class="form-control" name="doc_acta" required>
                                </div>
                                <label class="col-lg-3 col-form-label" for="doc_curp">CURP</label>
                                <div class="col-lg-9 mb-2">
                                    <input type="file" class="form-control" name="doc_curp" required>
                                </div>
                                <label class="col-lg-3 col-form-label" for="doc_medico">Certificado médico</label>
                                <div class="col-lg-9 mb-2">
                                    <input type="file" class="form-control" name="doc_medico" required>
                                </div>
                                <label class="col-lg-3 col-form-label" for="doc_inscripcion">Formato inscripción</label>
                                <div class="col-lg-9 mb-2">
                                    <input type="file" class="form-control" name="doc_inscripcion" required>
                                </div>
                                <label class="col-lg-3 col-form-label" for="doc_ine">INE del tutor</label>
                                <div class="col-lg-9 mb-2">
                                    <input type="file" class="form-control" name="doc_ine" required>
                                </div>
                                <label class="col-lg-3 col-form-label" for="doc_domicilio">Comprobante de domicilio</label>
                                <div class="col-lg-9 mb-2">
                                    <input type="file" class="form-control" name="doc_domicilio" required>
                                </div>
                            </div>
                            <!-- Campo para subir la boleta -->
                            <div class="mb-2" id="campo_boleta" style="display: none;">
                                <label class="form-label">Subir boleta del grado actual</label>
                                <input type="file" class="form-control" name="doc_boleta">
                            </div>
                            <!-- Campo para subir la constancia de kinder -->
                            <div class="mb-2" id="campo_kinder" style="display: none;">
                                <label class="form-label">Subir Constancia kinder </label>
                                <input type="file" class="form-control" name="doc_kinder">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                            <button type="submit" name="btnRegistro" class="btn btn-primary">Registrarse</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
<?php include("template/footer.php");?>