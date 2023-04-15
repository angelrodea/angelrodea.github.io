<?php include("template/header.php");?>
    <main>
        <div class="container mb-5">
            <!------------------- Carousel ------------------------->
            <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/banner1.png" class="d-block w-100"> <!-- 600px x 200px --> 
                    </div>
                    <div class="carousel-item">
                        <img src="img/banner2.png" class="d-block w-100">
                    </div>
                    <div class="carousel-item">
                        <img src="img/banner3.png" class="d-block w-100">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>

                <?php if (verifySession()): ?>
                    <center class="mt-3">
                        <button type="button" class="btn btn-outline-success mx-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="38" height="38" fill="currentColor" 
                            class="bi bi-plus-circle" viewBox="0 0 16 16">
                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 
                                0-1h3v-3A.5.5 0 0 1 8 4z"/>
                            </svg>
                        </button>
                        <button type="button" class="btn btn-outline-danger">
                            <svg xmlns="http://www.w3.org/2000/svg" width="38" height="38" fill="currentColor" 
                            class="bi bi-x-circle" viewBox="0 0 16 16">
                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 
                                2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                            </svg>
                        </button>
                    </center>
                <?php endif; ?>
            </div>

            <!------------------- Info ------------------------->
            <div class="mt-4">
                <div>
                    <h3>Misión</h3>
                    <p>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Obcaecati hic natus eius error unde qui
                        quasi repudiandae in sint culpa, enim placeat ad cupiditate atque tenetur odio a, assumenda officia!
                    </p>
                </div>
                <div>
                    <h3>Visión</h3>
                    <p>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Obcaecati hic natus eius error unde qui
                        quasi repudiandae in sint culpa, enim placeat ad cupiditate atque tenetur odio a, assumenda officia!
                    </p>
                </div>
                <div>
                    <h3>Historia</h3>
                    <p>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Obcaecati hic natus eius error unde qui
                        quasi repudiandae in sint culpa, enim placeat ad cupiditate atque tenetur odio a, assumenda officia!
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Obcaecati hic natus eius error unde qui
                        quasi repudiandae in sint culpa, enim placeat ad cupiditate atque tenetur odio a, assumenda officia!
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Obcaecati hic natus eius error unde qui
                        quasi repudiandae in sint culpa, enim placeat ad cupiditate atque tenetur odio a, assumenda officia!
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Obcaecati hic natus eius error unde qui
                        quasi repudiandae in sint culpa, enim placeat ad cupiditate atque tenetur odio a, assumenda officia!
                        <br>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Obcaecati hic natus eius error unde qui
                        quasi repudiandae in sint culpa, enim placeat ad cupiditate atque tenetur odio a, assumenda officia!
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Obcaecati hic natus eius error unde qui
                        quasi repudiandae in sint culpa, enim placeat ad cupiditate atque tenetur odio a, assumenda officia!
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Obcaecati hic natus eius error unde qui
                        quasi repudiandae in sint culpa, enim placeat ad cupiditate atque tenetur odio a, assumenda officia!
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Obcaecati hic natus eius error unde qui
                        quasi repudiandae in sint culpa, enim placeat ad cupiditate atque tenetur odio a, assumenda officia!
                    </p>
                </div>
            </div>
            <div class="pr-5 mt-4">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15053.612925022178!2d-99.10845910427159!3d19.39497605276242!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1fe8440061399%3A0x62ab2086d53ac1!2sCOLEGIO%20JEAN%20PIAGET%20de%20ORIENTE!5e0!3m2!1ses-419!2smx!4v1679000657950!5m2!1ses-419!2smx" 
                width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
            </iframe>
            </div>
        </div>
    </main>
<?php include("template/footer.php");?>