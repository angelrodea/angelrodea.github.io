<?php include("template/header.php");?>
    <main>
        <div class="container">
            <div class="jumbotron mb-4">
                <h3>Nuestros Docentes</h3>
            </div>

            <?php
                include("db/db.php");
                $query = "SELECT * FROM profesor";
                $result = mysqli_query($connection, $query);

                while ($row = mysqli_fetch_assoc($result)) {
                    $id = $row['id_profesor'];
                    $name = $row['nombre'];
                    $perfil = $row['perfil'];
                    $experience = $row['experiencia'];
                    $aptitudes = $row['aptitudes'];
                    $others = $row['otros'];
            ?>

            <div class="row profesor my-3 mx-2 py-3">
                <div class="col-lg-2 text-center">
                    <img src="img/avatar.png" style="height: 130px;"/>
                    <h4 class="text-capitalize pt-3 name"><?php echo $name; ?></h4>
                </div>
                <div class="col-lg-10">
                    <div class="id" data-id="<?php echo $id; ?>"></div>
                    <h5>Perfil profesional</h5>
                    <p class="perfil"><?php echo $perfil; ?></p>
                    <h5>Experiencia laboral</h5>
                    <p class="experiencia"><?php echo $experience; ?></p>
                    <h5>Aptitudes</h5>
                    <p class="aptitudes"><?php echo $aptitudes; ?></p>
                    <h5>Otros datos</h5>
                    <p class="otros"><?php echo $others; ?></p>
                </div>
                <?php if (verifySession()): ?>
                    <form method="POST">
                        <input type="hidden" name="profesor_id" id="profesor_id" value="<?php echo $id ?>">
                        <input type="button" name="edit" value="Modificar" class="btn btn-outline-primary m-1 updateProfBtn"
                            data-bs-toggle="modal" data-bs-target="#updateProfModal" data-id="<?php echo $id; ?>">
                        
                        <input type="button" name="delete" value="Eliminar" class="btn btn-outline-danger m-1"
                        data-bs-toggle="modal" data-bs-target="#deleteModal" onclick="setId(<?php echo $id ?>)">
                    </form>
                <?php endif; ?>
            </div>

            <?php
                }
                mysqli_close($connection);
            ?>


            <?php if (verifySession()): ?>
                <center>
                    <button type="button" class="btn btn-lg btn-success m-1 mb-3" data-bs-toggle="modal" data-bs-target="#addProfModal">
                        Agregar
                    </button>
                </center>
                <!--- MODAL ADD --->
                <div class="modal fade" id="addProfModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Subir datos</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                        <form method="POST" action="db/insert_profesor.php">
                            <div class="modal-body">
                                    <div class="mb-3">
                                        <label class="form-label">Nombre</label>
                                        <input type="text" class="form-control" name="name" required>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Perfil profesional</label>
                                        <textarea class="form-control" name="perfil" rows="2" required></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Experiencia laboral</label>
                                        <textarea class="form-control" name="exp" rows="2"></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Aptitudes</label>
                                        <textarea class="form-control" name="aptitude" rows="1"></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Otros datos</label>
                                        <textarea class="form-control" name="other" rows="1"></textarea>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancelar</button>
                                    <button type="submit" name="addProfesor" class="btn btn-success">Agregar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                
                <!--- MODAL UPDATE --->
                <div class="modal fade" id="updateProfModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Editar datos</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form method="POST" action="db/update_profesor.php">
                                <div class="modal-body">
                                    <input type="hidden" id="inputId" name="inputId">
                                    <div class="mb-3">
                                        <label class="form-label">Nombre</label>
                                        <input type="text" class="form-control" id="name_upd" name="name_upd" value="">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Perfil profesional</label>
                                        <textarea class="form-control" id="perfil_profesional_upd" name="perfil_profesional_upd" 
                                            rows="2"></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Experiencia laboral</label>
                                        <textarea class="form-control" id="experiencia_laboral_upd" name="experiencia_laboral_upd" 
                                            rows="2"></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Aptitudes</label>
                                        <textarea class="form-control" id="aptitudes_upd" name="aptitudes_upd" rows="1"></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Otros datos</label>
                                        <textarea class="form-control" id="otros_datos_upd" name="otros_datos_upd" rows="1"></textarea>
                                    </div>
                                    <!--
                                    <div class="mb-3">
                                        <label for="formFile" class="form-label">Subir foto</label>
                                        <input class="form-control" type="file" name="photo">
                                    </div>
                                    -->
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancelar</button>
                                        <button type="submit" class="btn btn-primary">Modificar</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Modal Delete -->
                <div class="modal fade" id="deleteModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" 
                    aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Confirmación</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <h1 class="modal-title fs-5" id="staticBackdropLabel">
                                    ¿Seguro que deseas eliminar este profesor de forma permanente?
                                </h1>
                                <input type="hidden" id="id_profesor" name="id_profesor" value="">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancelar</button>
                                <button type="button" name="delProfesor" class="btn btn-danger" onclick="deleteProfesor()">Eliminar</button>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </main>
<?php include("template/footer.php");?>