<?php include("template/header.php");?>
    <main>
        <div class="container">
            <div class="jumbotron mb-4">
                <h3>Nuestros Docentes</h3>
            </div>
            <?php include("template/profesores.php") ?>
            <?php include("template/profesores.php") ?>
            <?php include("template/profesores.php") ?>
            <?php include("template/profesores.php") ?>
            <?php if (verifySession()): ?>
                <center>
                    <button type="button" class="btn btn-lg btn-outline-primary m-1 mb-3" data-bs-toggle="modal" data-bs-target="#addProfModal">
                        Agregar
                    </button>
                </center>
                <!--- MODAL --->
                <div class="modal fade" id="addProfModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Subir datos</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                        <div class="modal-body">
                            <form method="POST" action="">
                                <div class="mb-3">
                                    <label class="form-label">Nombre</label>
                                    <input type="text" class="form-control" id="name" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Perfil profesional</label>
                                    <textarea class="form-control" id="perfil" rows="2"></textarea>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Experiencia laboral</label>
                                    <textarea class="form-control" id="exp" rows="2"></textarea>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Aptitudes</label>
                                    <textarea class="form-control" id="aptitud" rows="1"></textarea>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Otros datos</label>
                                    <textarea class="form-control" id="data" rows="1"></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Subir foto</label>
                                    <input class="form-control" type="file" id="photo">
                                </div>
                            </form>
                        </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </main>
<?php include("template/footer.php");?>