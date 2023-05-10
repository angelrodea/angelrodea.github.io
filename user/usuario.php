<?php include("../template/usr_header.php");?>
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
                            <h2 class="mb-3">Mis datos</h2>
                            <form class="">
                                <div class="form-group row mb-3">
                                    <label class="col-lg-1 col-form-label me-4" for="name">Nombre(s)</label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Maria" required>
                                    </div>
                                </div>
                                <div class="form-group row mb-3">
                                    <label class="col-lg-1 col-form-label me-4" for="name">Apellidos</label>
                                    <div class="col-lg-5">
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Gerbaz" required>
                                    </div>
                                    <div class="col-lg-5">
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Rodriguez" required>
                                    </div>
                                </div>
                                <div class="form-group row mb-3">
                                    <label class="col-lg-1 col-form-label me-4" for="name">CURP</label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" id="name" name="name" placeholder="HGJFJMDFNSN067" required>
                                    </div>
                                </div>
                                <div class="form-group row mb-3">
                                    <label class="col-lg-3 col-form-label" for="name">Fecha de nacimiento</label>
                                    <div class="col-lg-2 p-0">
                                        <input type="date" class="form-control" id="name" name="name" required>
                                    </div>
                                    <label class="col-lg-2"></label>
                                    <label class="col-lg-1 col-form-label me-4" for="name">Genero</label>
                                    <div class="col-lg-2 ps-0">
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>Seleccionar</option>
                                            <option value="1">Masculino</option>
                                            <option value="2">Femenino</option>
                                            <option value="3">Otro</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row mb-3">
                                    <label class="col-lg-3 col-form-label" for="name">Grado</label>
                                    <div class="col-lg-2 p-0">
                                        <select class="form-select" aria-label="Default select example"required>
                                            <option selected>Seleccionar</option>
                                            <option value="1">1°</option>
                                            <option value="2">2°</option>
                                            <option value="3">3°</option>
                                            <option value="4">4°</option>
                                            <option value="5">5°</option>
                                        </select>
                                    </div>
                                    <label class="col-lg-2"></label>
                                    <label class="col-lg-1 col-form-label me-4" for="name">Grupo</label>
                                    <div class="col-lg-2 ps-0">
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>Seleccionar</option>
                                            <option value="1">A</option>
                                            <option value="2">B</option>
                                            <option value="3">C</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row mb-3">
                                    <label class="col-lg-1 col-form-label me-4" for="name">Celular</label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" id="name" name="name" placeholder="6655778657" required>
                                    </div>
                                </div>
                                <div class="form-group row mb-3">
                                    <label class="col-lg-1 col-form-label me-4" for="name">Correo</label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" id="name" name="name" placeholder="fdsfijds@gmail.com" 
                                            required>
                                    </div>
                                </div>
                                <div class="card position-relative">
                                    <h5 class="card-header">Dirección</h5>
                                    <div class="card-body">
                                    <form>
                                        <div class="form-group row mb-3">
                                            <div class="col-lg-8 form-floating mb-3">
                                                <input type="text" class="form-control" name="name" placeholder="Calle" required>
                                                <label for="name" class="ps-4">Calle</label>
                                            </div>
                                            <div class="col-lg-3 form-floating mb-3">
                                                <input type="text" class="form-control" name="name" placeholder="Numero" required>
                                                <label for="name" class="ps-4">Número</label>
                                            </div>
                                        </div>
                                        <div class="form-group row mb-3">
                                        <label class="col-lg-2 col-form-label me-4" for="name">Colonia</label>
                                            <div class="col-lg-3">
                                                <input type="text" class="form-control" id="name" name="name" placeholder="Tepalcates" 
                                                    required>
                                            </div>
                                            <label class="col-lg-1"></label>
                                            <label class="col-lg-2 col-form-label" for="name">Municipo</label>
                                            <div class="col-lg-3">
                                                <input type="text" class="form-control" id="name" name="name" placeholder="Iztapalapa" 
                                                    required>
                                            </div>
                                        </div>
                                        <div class="form-group row mb-3">
                                            <label for="name" class="col-lg-2 col-form-label me-4">C.P.</label>
                                            <div class="col-lg-3">
                                                <input type="text" class="form-control" name="name" placeholder="C.P." required>
                                            </div>
                                            <label class="col-lg-1"></label>
                                            <label class="col-lg-2 col-form-label" for="name">Entidad</label>
                                            <div class="col-lg-3">
                                                <input type="text" class="form-control" id="name" name="name" placeholder="CDMX" required>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="mt-3">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                <button type="submit" name="btnComment" class="btn btn-primary">Aceptar</button>
                            </div>
                            </form>
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
                                            data-bs-target="#pagoModal">
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
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>Sin registro</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">2</th>
                                                    <td>Pagado</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">3</th>
                                                    <td colspan="2">Pendiente</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">4</th>
                                                    <td colspan="2">Sin registro</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">5</th>
                                                    <td colspan="2">Sin registro</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">6</th>
                                                    <td colspan="2">Sin registro</td>
                                                </tr>
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
                                    <h2>Certificado Medico</h2>
                                    <div class="mb-5">
                                        <center>
                                            <button type="button" class="btn btn-dark" data-bs-toggle="modal" 
                                                data-bs-target="#certificadoModal">
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
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>Sin registro</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">2</th>
                                                    <td>Pagado</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">3</th>
                                                    <td colspan="2">Pendiente</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">4</th>
                                                    <td colspan="2">Sin registro</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">5</th>
                                                    <td colspan="2">Sin registro</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">6</th>
                                                    <td colspan="2">Sin registro</td>
                                                </tr>
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
                        <form method="POST" action="">
                            <div class="modal-body">
                                <div class="mb-3">
                                    <h5 class="mb-3"><b>Advertencia</b>: una vez confirmado no se podrá modificar</h5>
                                    <label class="form-label">Comprobante de pago</label>
                                    <input type="file" class="form-control" name="name" required>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancelar</button>
                                <button type="submit" name="addProfesor" class="btn btn-success">Subir</button>
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
                        <form method="POST" action="">
                            <div class="modal-body">
                                <div class="mb-3">
                                    <h5 class="mb-3"><b>Advertencia</b>: una vez confirmado no se podrá modificar</h5>
                                    <label class="form-label">Certificado medico</label>
                                    <input type="file" class="form-control" name="name" required>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancelar</button>
                                <button type="submit" name="addProfesor" class="btn btn-success">Subir</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
<?php include("../template/usr_footer.php");?>