<?php include("template/header.php");?>
    <main>
        <div class="container">
            <h1 class="mb-4">Comentarios</h1>
            <div class="my-3">
                <div class="mb-2 row">
                    <h4 class="col-sm-11">Nombre: Natalia Jovanna Solar</h4>
                    <div class="col-sm-1 ">
                        <?php if (verifySession()): ?>
                            <button type="button" class="btn btn-outline-danger pt-1 pb-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" 
                                class="bi bi-x-circle" viewBox="0 0 16 16">
                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                    <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 
                                    2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                                </svg>
                            </button>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="overflow-auto p-3 comentarios">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus quas, laboriosam aliquam 
                    harum ducimus eligendi alias minus officiis nihil maxime ipsa saepe placeat dolorum deleniti incidunt. 
                    Voluptates libero alias aut.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit, dolorum rem. Neque ex, illum et voluptas 
                    alias magnam saepe quisquam repellendus omnis soluta. Ipsum quod fuga cumque quisquam id nostrum?
                </div>
            </div>
            <div class="my-3">
                <div class="mb-2 row">
                    <h4 class="col-sm-11">Nombre: Javier Soldeño Guerrero</h4>
                    <div class="col-sm-1 ">
                        <?php if (verifySession()): ?>
                            <button type="button" class="btn btn-outline-danger pt-1 pb-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" 
                                class="bi bi-x-circle" viewBox="0 0 16 16">
                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                    <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 
                                    2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                                </svg>
                            </button>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="overflow-auto p-3 comentarios">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus quas, laboriosam aliquam 
                    harum ducimus eligendi alias minus officiis nihil maxime ipsa saepe placeat dolorum deleniti incidunt. 
                    Voluptates libero alias aut.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit, dolorum rem. Neque ex, illum et voluptas 
                    alias magnam saepe quisquam repellendus omnis soluta. Ipsum quod fuga cumque quisquam id nostrum?
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus recusandae totam asperiores fugit 
                    unde corrupti quam dolore officia debitis delectus nobis deleniti, vitae non dolor exercitationem laboriosam 
                </div>
            </div>
            <div class="text-center">
                <button type="button" class="btn btn-dark text-uppercase" data-bs-toggle="modal" 
                data-bs-target="#commentModal">Comentar</button>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="commentModal" tabindex="-1" aria-labelledby="commentModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Comentar</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action="">
                            <div class="modal-body">
                                <div class="mb-3">
                                    <label class="form-label">Nombre</label>
                                    <input type="text" class="form-control" id="name" placeholder="Name Example">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Clave</label>
                                    <input type="text" class="form-control" id="key" placeholder="*******">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Comentario</label>
                                    <textarea class="form-control" id="comment" rows="3"></textarea>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                <button type="submit" class="btn btn-primary">Comentar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
<?php include("template/footer.php");?>