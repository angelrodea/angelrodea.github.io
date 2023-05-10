<?php include("../template/adm_header.php");?>
    <main>
        <div class="container">
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
                        <tr>
                            <td scope="row">1</td>
                            <td>
                                <a class="" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                Nombre ejemplo ejemplo
                                </a>
                            </td>
                            <td>4°</td>
                            <td>XBVD230456MDFNZN05</td>
                            <td>
                                <button type="button" class="btn btn-success" onclick="location.href='aspirante.php';" disabled>
                                    Aceptar
                                </button>
                                <button type="button" class="btn btn-danger" onclick="location.href='delete_alumno.php';" disabled>
                                    Rechazar
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>


            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-fullscreen">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Nombre ejemplo ejemplo</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <!---------- MODAL BODY ------------>
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
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <div class="tab-content" id="v-pills-tabContent">
                                        <div class="tab-pane fade show active bg-border border border-dark rounded-3 p-3" id="v-pills-datos" 
                                            role="tabpanel" aria-labelledby="v-pills-datos-tab">
                                            <!------------ DATOS -------------------->
                                            <h2 class="mb-3">Datos del alumno</h2>
                                            <div>
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
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade p-3" id="v-pills-doc" role="tabpanel" aria-labelledby="v-pills-doc-tab">
                                            <!------------- DOCUMENTOS ------------------>
                                            <div class="container">
                                                <div class="mb-3">
                                                    <form>
                                                        <table class="table table-striped table-bordered">
                                                            <thead class="table-secondary">
                                                                <tr>
                                                                    <th scope="col">Nombre del documento</th>
                                                                    <th scope="col">Documento</th>
                                                                    <th scope="col">Estado</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody class="table-group-divider">
                                                                <tr>
                                                                    <td scope="row">Documento de inscripción</td>
                                                                    <td><a href="#">inscripción.pdf</a></td>
                                                                    <td>
                                                                        <select name="docInscripcion" id="docInscripcion">
                                                                            <option selected>Seleccionar</option>
                                                                            <option value="1">Aceptado</option>
                                                                            <option value="2">No aceptado</option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td scope="row">Documento de boleta</td>
                                                                    <td><a href="#">boleta.pdf</a></td>
                                                                    <td>
                                                                        <select name="docBoleta" id="docBoleta">
                                                                            <option selected>Seleccionar</option>
                                                                            <option value="1">Aceptado</option>
                                                                            <option value="2">No aceptado</option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td scope="row">Certificado kinder</td>
                                                                    <td><a href="#">kinder.pdf</a></td>
                                                                    <td>
                                                                        <select name="docKinder" id="docKinder">
                                                                            <option selected>Seleccionar</option>
                                                                            <option value="1">Aceptado</option>
                                                                            <option value="2">No aceptado</option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td scope="row">CURP</td>
                                                                    <td><a href="#">curp.pdf</a></td>
                                                                    <td>
                                                                        <select name="docCurp" id="docCurp">
                                                                            <option selected>Seleccionar</option>
                                                                            <option value="1">Aceptado</option>
                                                                            <option value="2">No aceptado</option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td scope="row">Acta de nacimiento</td>
                                                                    <td><a href="#">acta-nacimiento.pdf</a></td>
                                                                    <td>
                                                                        <select name="docActaNac" id="docActaNac">
                                                                            <option selected>Seleccionar</option>
                                                                            <option value="1">Aceptado</option>
                                                                            <option value="2">No aceptado</option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <center>
                                                            <button type="submit" name="btnComment" class="btn btn-primary">
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
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
<?php include("../template/adm_footer.php");?>