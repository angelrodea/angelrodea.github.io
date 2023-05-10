<?php include("../template/adm_header.php");?>
    <main>
        <div class="container">
            <div class="mb-5">
                <form action="">
                    <div class="form-group row mb-3">
                        <label class="col-lg-1 col-form-label" for="name">Grado</label>
                        <div class="col-lg-1 p-0">
                            <select class="form-select" aria-label="Default select example"required>
                                <option value="1" selected>1°</option>
                                <option value="2">2°</option>
                                <option value="3">3°</option>
                                <option value="4">4°</option>
                                <option value="5">5°</option>
                            </select>
                        </div>
                        <label class="col-lg-1"></label>
                        <label class="col-lg-1 col-form-label me-4" for="name">Grupo</label>
                        <div class="col-lg-1 ps-0">
                            <select class="form-select" aria-label="Default select example">
                                <option value="1" selected>A</option>
                                <option value="2">B</option>
                                <option value="3">C</option>
                            </select>
                        </div>
                        <label class="col-lg-1"></label>
                        <button class="col-lg-1">Seleccionar</button>
                    </div>
                </form>
            </div>
            <div>
                <table class="table table-secondary table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Grado</th>
                            <th scope="col">Grupo</th>
                            <th scope="col">Profesor</th>
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
                            <td>1°</td>
                            <td>A</td>
                            <td>Nombre Profesor Ejemplo</td>
                            <td>
                                <button type="button" class="btn btn-danger" onclick="location.href='aspirante.php';">
                                    Eliminar
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>

                <button type="button" class="btn btn-primary">
                    Imprimir lista
                </button>
            </div>
        </div>
    </main>
<?php include("../template/adm_footer.php");?>