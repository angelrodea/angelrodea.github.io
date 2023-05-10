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
                        <label class="col-lg-1 col-form-label me-4" for="name">ID</label>
                        <div class="col-lg-1 ps-0">
                            <select class="form-select" aria-label="Default select example">
                                <option value="1" selected>A</option>
                                <option value="2">B</option>
                                <option value="3">C</option>
                            </select>
                        </div>
                        <label class="col-lg-1"></label>
                        <button class="col-lg-2">Crear grupo</button>
                    </div>
                </form>
            </div>
            <div>
                <table class="table table-secondary table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Grado cursado</th>
                            <th scope="col">Grado a cursar</th>
                            <th scope="col">Grupo</th>
                            <th scope="col">Profesor</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td scope="row">1</td>
                            <td>Nombre ejemplo ejemplo</td>
                            <td>1°</td>
                            <td>
                                <select class="form-select" aria-label="Default select example"required>
                                    <option value="1" selected>1°</option>
                                    <option value="2">2°</option>
                                    <option value="3">3°</option>
                                    <option value="4">4°</option>
                                    <option value="5">5°</option>
                                </select>
                            </td>
                            <td>
                                <select class="form-select" aria-label="Default select example"required>
                                    <option value="1" selected>A</option>
                                    <option value="2">B</option>
                                    <option value="3">C</option>
                                </select>
                            </td>
                            <td>Nombre Profesor Ejemplo</td>
                            <td>
                                <button type="button" class="btn btn-success" onclick="location.href='aspirante.php';">
                                    Confirmar
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