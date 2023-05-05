<?php include("template/header.php");?>
    <main>
        <div class="container">

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
            <center>
                <h3 class="mb-3">¡Inscríbete aquí!</h3>
                <button type="button" class="btn btn-dark btn-lg text-uppercase" data-bs-toggle="modal" 
                    data-bs-target="#filesModal">Inscripción</button>
                </div>
            </center>
        </div>

        <!-- Modal Files -->
        <div class="modal fade" id="filesModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="filesModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Ingresar</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form method="POST">
                        <div class="modal-body">
                            <div class="form-group row mb-3">
                                <label class="col-lg-2 col-form-label" for="name">Nombre(s)</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="ej. Maria" required>
                                </div>
                            </div>
                            <div class="form-group row mb-3">
                                <label class="col-lg-2 col-form-label" for="name">Ap. Paterno</label>
                                <div class="col-lg-4">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Maria" required>
                                </div>
                                <label class="col-lg-2 col-form-label" for="name">Ap. Materno</label>
                                <div class="col-lg-4">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Maria" required>
                                </div>
                            </div>
                            <div class="form-group row mb-3">
                                <label class="col-lg-2 col-form-label" for="name">Edad</label>
                                <div class="col-lg-10">
                                    <input type="number" class="form-control" id="name" name="name" placeholder="ej. 8" required>
                                </div>
                            </div>
                            <div class="form-group row mb-3">
                                <label class="col-lg-3 col-form-label" for="name">Correo electrónico</label>
                                <div class="col-lg-9">
                                    <input type="email" class="form-control" id="name" name="name" placeholder="ej. maria@gmail.com" 
                                        required>
                                </div>
                            </div>
                            <div class="form-group row mb-3">
                                <label class="col-lg-2 col-form-label" for="name">Teléfono</label>
                                <div class="col-lg-10">
                                    <input type="tel" class="form-control" id="name" name="name" placeholder="ej. 55325426171" 
                                        required>
                                </div>
                            </div>
                            <!-- Campo para seleccionar el grado actual -->
                            <div class="form-group row mb-3">
                                <label class="col-lg-2 col-form-label" for="name">Grado actual</label>
                                <div class="col-lg-10">
                                    <select class="form-control" name="grado_actual" id="grado_actual" required>
                                        <option value="">Seleccione un grado</option>
                                        <option value="1">1°</option>
                                        <option value="2">2°</option>
                                        <option value="3">3°</option>
                                        <option value="4">4°</option>
                                        <option value="5">5°</option>
                                        <option value="6">Ninguno</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row mb-3">
                                <label class="col-lg-4 col-form-label" for="name">Nombe del padre o tutor</label>
                                <div class="col-lg-8">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="ej. Juan Quiroz Narvarte" 
                                        required>
                                </div>
                            </div>
                            <div class="form-group row mb-3">
                                <label class="col-lg-2 col-form-label" for="name">Dirección</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="ej. Calle 1" 
                                        required>
                                </div>
                            </div>
                            <div class="form-group row mb-2">
                                <label class="col-lg-3 col-form-label" for="name">Acta de nacimiento</label>
                                <div class="col-lg-9 mb-2">
                                    <input type="file" class="form-control" name="archivo_acta">
                                </div>
                                <label class="col-lg-3 col-form-label" for="name">CURP</label>
                                <div class="col-lg-9 mb-2">
                                    <input type="file" class="form-control" name="archivo_curp">
                                </div>
                                <label class="col-lg-3 col-form-label" for="name">Certificado médico</label>
                                <div class="col-lg-9 mb-2">
                                    <input type="file" class="form-control" name="archivo_medico">
                                </div>
                                <label class="col-lg-3 col-form-label" for="name">Formato inscripción</label>
                                <div class="col-lg-9 mb-2">
                                    <input type="file" class="form-control" name="archivo_inscripcion">
                                </div>
                                <label class="col-lg-3 col-form-label" for="name">INE del tutor</label>
                                <div class="col-lg-9 mb-2">
                                    <input type="file" class="form-control" name="archivo_ine">
                                </div>
                                <label class="col-lg-3 col-form-label" for="name">Comprobante de domicilio</label>
                                <div class="col-lg-9 mb-2">
                                    <input type="file" class="form-control" name="archivo_comprobanteDireccion">
                                </div>
                            </div>
                            <!-- Campo para subir la boleta -->
                            <div class="mb-2" id="campo_boleta" style="display: none;">
                                <label class="form-label">Subir boleta del grado actual</label>
                                <input type="file" class="form-control" name="archivo_boleta">
                            </div>
                            <!-- Campo para subir la constancia de kinder -->
                            <div class="mb-2" id="campo_kinder" style="display: none;">
                                <label class="form-label">Subir Constancia kinder </label>
                                <input type="file" class="form-control" name="archivo_kinder">
                            </div>
 
                            <!--<div class="mb-3">
                                <label class="form-label">Subir Acta de nacimiento</label>
                                <input type="file" class="form-control" name="archivo_acta">
                                <label class="form-label">Subir CURP</label>
                                <input type="file" class="form-control" name="archivo_curp">
                                <label class="form-label">Subir archivo medico</label>
                                <input type="file" class="form-control" name="archivo_medico">
                                <label class="form-label">Subir inscripción </label>
                                <input type="file" class="form-control" name="archivo_inscripcion">
                                <label class="form-label">Subir INE del tutor </label>
                                <input type="file" class="form-control" name="archivo_ine">
                                <label class="form-label">Subir Comprobante de dirección </label>
                                <input type="file" class="form-control" name="archivo_comprobanteDireccion">
                            </div>-->
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