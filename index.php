<?php include("template/header.php");?>
    <main>
        <div class="container mb-5">
            <?php
                if (isset($_GET)) {
                    if (isset($_GET['success'])) {
                        echo "<div class='alert alert-success alert-dismissible fade show text-center' role='alert'>
                                <strong>El comunicado se ha eliminado correctamente.</strong>
                                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                            </div>";
                    } elseif (isset($_GET['warning'])) {
                        echo "<div class='alert alert-warning alert-dismissible fade show text-center' role='alert'>
                                <strong>El archivo ya existe. Por favor, elija un nombre de archivo diferente.</strong>
                                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                            </div>";
                    } elseif (isset($_GET['error'])) {
                        echo "<div class='alert alert-danger alert-dismissible fade show text-center' role='alert'>
                                <strong>No se permiten subir archivos que no sean imagenes.</strong>
                                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                            </div>";
                    }
                }
            ?>
            <!------------------- Carousel ------------------------->
            <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <!-- 600px x 200px -->
                    <?php
                        include("db/db.php");

                        $sql = "SELECT comunicado FROM comunicado";
                        $result = $connection->query($sql);

                        $active = true; // Variable para controlar el estado de la primera imagen

                        if ($result && $result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                $comunicadoURL = $row['comunicado'];
                                ?>
                                <div class="carousel-item <?php echo ($active ? 'active' : ''); ?>">
                                    <img src="<?php echo $comunicadoURL; ?>" class="d-block w-100" alt="Comunicado">
                                </div>
                                <?php
                                $active = false; // Desactivar el estado activo después de la primera imagen
                            }
                        } else {
                            echo "No se encontraron comunicados.";
                        }

                        $connection->close();
                    ?>
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
                        <button type="button" class="btn btn-outline-success mx-2" data-bs-toggle="modal" data-bs-target="#addComModal">
                            <svg xmlns="http://www.w3.org/2000/svg" width="38" height="38" fill="currentColor" 
                            class="bi bi-plus-circle" viewBox="0 0 16 16">
                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 
                                0-1h3v-3A.5.5 0 0 1 8 4z"/>
                            </svg>
                        </button>
                        <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#rmComModal">
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
            <div class="mt-5">
                <h1>Conoce lo que tenemos para ofrecerte</h1>
                <hr class="mb-4">
                <div>
                    <h4>"Creamos el método para formar Grandes Personas"</h4>
                    <p style="text-align: justify;">
                        Para que puedan salir de la infancia y ser adultos, deseamos que nuestros alumnos sean autosuficientes, 
                        autónomos, que piensen por ellos mismos, que sean críticos, creativos y que sean capaces de disfrutar de 
                        la propia cultura. Queremos alejarlos de la irracionalidad, del fanatismo y de la superstición.
                        <br>
                        Queremos Piagetianos que adquieran los elementos suficientes para integrarse, en su momento, en el mundo 
                        del trabajo, y que a la vez les sirvan para obtener nuevos caminos para ir más allá; para encontrar soluciones 
                        personales y colectivas a los problemas que comporta vivir y convivir.
                    </p>
                </div>
                <div class="mt-4">
                    <h3>Oferta educativa</h3>
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button bg-border" type="button" data-bs-toggle="collapse" 
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Inglés
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    La materia de inglés en primaria se enfoca en introducir a los estudiantes al idioma inglés 
                                    de manera gradual y divertida. A través de actividades interactivas, canciones, juegos y 
                                    ejercicios, los alumnos aprenden vocabulario básico, frases simples y estructuras gramaticales 
                                    fundamentales. Se les enseña a escuchar, hablar, leer y escribir en inglés, fomentando el 
                                    desarrollo de habilidades comunicativas. También se exploran aspectos culturales de los países 
                                    de habla inglesa para ampliar la comprensión y apreciación de la diversidad lingüística. La 
                                    materia de inglés en primaria sienta las bases para futuros estudios del idioma y promueve la 
                                    adquisición de competencias comunicativas en inglés desde una edad temprana.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button bg-border collapsed" type="button" data-bs-toggle="collapse" 
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Matemáticas
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Las matemáticas en primaria son una materia fundamental que permite a los estudiantes 
                                    desarrollar habilidades numéricas y lógicas desde una edad temprana. A través de actividades 
                                    prácticas y ejercicios interactivos, los niños aprenden conceptos básicos como números, 
                                    operaciones aritméticas (suma, resta, multiplicación y división) y medidas. También exploran 
                                    formas geométricas, patrones y resolución de problemas. Las matemáticas en primaria promueven 
                                    el razonamiento lógico, la capacidad de pensar críticamente y la resolución de situaciones 
                                    cotidianas. Además, fomentan el desarrollo de habilidades de comunicación matemática, como 
                                    la capacidad de expresar ideas y argumentar utilizando términos matemáticos. Estas bases 
                                    sólidas en matemáticas sientan los cimientos para el estudio posterior de esta disciplina 
                                    y su aplicación en diversas áreas de la vida.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button bg-border collapsed" type="button" data-bs-toggle="collapse" 
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Geografía
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    La geografía en primaria es una materia que introduce a los estudiantes al estudio del mundo 
                                    que les rodea. A través de mapas, imágenes y actividades interactivas, los niños aprenden 
                                    acerca de los continentes, países, ciudades, cuerpos de agua y características físicas de 
                                    la Tierra, como montañas, ríos y océanos. También exploran los climas, la flora y fauna, y 
                                    las diferentes culturas presentes en distintas regiones del mundo. La geografía en primaria 
                                    promueve la comprensión del entorno, la conciencia ambiental y el respeto por la diversidad 
                                    geográfica y cultural. Además, ayuda a desarrollar habilidades de observación, análisis espacial 
                                    y orientación. Estos conocimientos y habilidades geográficas sentarán las bases para el estudio 
                                    continuo de la geografía y su aplicación en la vida cotidiana.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button bg-border collapsed" type="button" data-bs-toggle="collapse" 
                                    data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    Computación
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    La computación en primaria es una materia que enseña a los estudiantes los conceptos básicos 
                                    de la tecnología y el uso de las computadoras. A través de actividades prácticas y ejercicios 
                                    interactivos, los niños aprenden a manejar el teclado, utilizar el mouse y navegar por interfaces 
                                    gráficas. También adquieren habilidades fundamentales en el uso de software de aplicaciones, 
                                    como procesadores de texto y programas de presentación. Además, se les introduce a conceptos 
                                    de seguridad en línea y a la importancia de ser responsables y éticos en el uso de la tecnología. 
                                    La computación en primaria promueve el pensamiento lógico, la resolución de problemas y la 
                                    creatividad a través de la programación básica, utilizando herramientas amigables para los 
                                    niños. Estos conocimientos y habilidades en computación sentarán las bases para el uso efectivo 
                                    de la tecnología en el aprendizaje y en la vida diaria.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button bg-border collapsed" type="button" data-bs-toggle="collapse" 
                                    data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    Deporte
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    El deporte en primaria juega un papel crucial en el desarrollo físico, social y emocional de 
                                    los estudiantes. A través de actividades deportivas y juegos, los niños aprenden habilidades 
                                    motrices fundamentales, como correr, saltar y lanzar. También desarrollan habilidades de 
                                    coordinación, equilibrio y trabajo en equipo. El deporte en primaria fomenta la adopción de 
                                    hábitos saludables, como la actividad física regular y una alimentación equilibrada. Además, 
                                    promueve valores como el respeto, la disciplina, el fair play y la tolerancia. Participar en 
                                    actividades deportivas ayuda a los estudiantes a mejorar su autoestima, a aprender a manejar 
                                    la competencia de manera saludable y a desarrollar habilidades de liderazgo y trabajo en equipo. 
                                    El deporte en primaria crea un ambiente divertido y motivador que promueve el bienestar integral 
                                    de los estudiantes.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button bg-border collapsed" type="button" data-bs-toggle="collapse" 
                                    data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                    Danza
                                </button>
                            </h2>
                            <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    La danza en primaria es una disciplina artística que permite a los estudiantes expresarse a 
                                    través del movimiento y la música. A través de clases de danza, los niños aprenden diferentes 
                                    estilos y técnicas, desarrollando habilidades como la coordinación, la flexibilidad y el ritmo. 
                                    Además, la danza en primaria fomenta la creatividad, la expresión emocional y el trabajo en 
                                    equipo. Los estudiantes exploran diferentes formas de danza, como el ballet, el jazz, la danza 
                                    contemporánea y las danzas folklóricas. Participar en actividades de danza promueve la confianza 
                                    en sí mismos, mejora la postura y la conciencia corporal, y estimula la capacidad de concentración 
                                    y memorización. La danza en primaria es una forma divertida y artística de desarrollar habilidades 
                                    físicas y emocionales, al tiempo que se disfruta de la belleza y la expresión del arte del movimiento.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button bg-border collapsed" type="button" data-bs-toggle="collapse" 
                                    data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                    Comunicación
                                </button>
                            </h2>
                            <div id="collapseSeven" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    La comunicación oral y escrita en primaria se centra en desarrollar las habilidades de expresión 
                                    y comprensión tanto en el habla como en la escritura. A través de actividades interactivas, 
                                    ejercicios de lectura en voz alta y presentaciones orales, los estudiantes aprenden a comunicarse 
                                    de manera efectiva y clara. Se les enseña a utilizar un lenguaje apropiado, a estructurar ideas y 
                                    a expresar sus pensamientos de forma coherente. Además, se les introduce al mundo de la escritura, 
                                    donde aprenden a formar letras, a escribir palabras y oraciones, y a desarrollar textos más 
                                    complejos. La comunicación oral y escrita en primaria fomenta la escucha activa, el diálogo 
                                    respetuoso y el pensamiento crítico. También mejora la capacidad de comprensión lectora y la 
                                    habilidad para expresar ideas por escrito. Estas habilidades son fundamentales para el éxito 
                                    académico y para la comunicación efectiva en todas las áreas de la vida.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button bg-border collapsed" type="button" data-bs-toggle="collapse" 
                                    data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                    Formación cívica y ética
                                </button>
                            </h2>
                            <div id="collapseEight" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    La formación cívica y ética en primaria se centra en el desarrollo de los valores y principios 
                                    que promueven una convivencia respetuosa, responsable y justa en la sociedad. A través de 
                                    actividades interactivas y reflexiones, los estudiantes aprenden acerca de los derechos y 
                                    deberes ciudadanos, la importancia de la igualdad, la tolerancia y la inclusión. También se 
                                    les enseña a tomar decisiones éticas, a resolver conflictos de manera pacífica y a participar 
                                    activamente en la comunidad. La formación cívica y ética en primaria promueve el respeto a la 
                                    diversidad cultural, la solidaridad y el cuidado del medio ambiente. Además, fomenta el desarrollo 
                                    de habilidades como el pensamiento crítico, la empatía y la toma de conciencia sobre los problemas 
                                    sociales. Estos conocimientos y habilidades contribuyen a formar ciudadanos responsables, 
                                    comprometidos y éticos, capaces de contribuir positivamente a la sociedad en la que viven.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button bg-border collapsed" type="button" data-bs-toggle="collapse" 
                                    data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                    Historia
                                </button>
                            </h2>
                            <div id="collapseNine" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    La historia en primaria introduce a los estudiantes al estudio de los acontecimientos pasados 
                                    y su relevancia en el presente. A través de narraciones, imágenes y actividades interactivas, 
                                    los niños aprenden acerca de diferentes periodos históricos, personajes importantes y culturas 
                                    del mundo. Se les enseña a comprender el pasado, a analizar causas y consecuencias, y a 
                                    desarrollar un sentido de continuidad y cambio a lo largo del tiempo. La historia en primaria 
                                    fomenta la comprensión de la diversidad cultural, la valoración de los derechos humanos y la 
                                    apreciación de la herencia cultural. Además, desarrolla habilidades como la investigación, la 
                                    interpretación de fuentes históricas y el pensamiento crítico. Estudiar historia en primaria 
                                    ayuda a los estudiantes a comprender el mundo en el que viven, a desarrollar una identidad propia 
                                    y a formar una conciencia histórica que les permita ser ciudadanos informados y responsables.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button bg-border collapsed" type="button" data-bs-toggle="collapse" 
                                    data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                                    Ciencias
                                </button>
                            </h2>
                            <div id="collapseTen" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Las ciencias en primaria se enfocan en explorar y comprender el mundo natural que nos rodea. 
                                    A través de actividades prácticas, experimentos y observaciones, los estudiantes aprenden 
                                    acerca de diversos temas científicos, como el cuerpo humano, los animales, las plantas, la 
                                    materia, la energía y el medio ambiente. Se les enseña a formular preguntas, hacer predicciones, 
                                    recopilar datos y sacar conclusiones basadas en la evidencia. Las ciencias en primaria promueven 
                                    el pensamiento crítico, la curiosidad y la capacidad de investigar. Además, fomentan el respeto 
                                    por la naturaleza, la conciencia ambiental y la importancia de la sostenibilidad. Estudiar 
                                    ciencias en primaria sienta las bases para futuros estudios científicos y promueve la comprensión 
                                    del mundo natural, desarrollando habilidades de observación, análisis y resolución de problemas.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pr-5 mt-5">
                <h3>Ubicación</h3>
                <hr class="mb-4">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15053.612925022178!2d-99.10845910427159!3d19.39497605276242!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1fe8440061399%3A0x62ab2086d53ac1!2sCOLEGIO%20JEAN%20PIAGET%20de%20ORIENTE!5e0!3m2!1ses-419!2smx!4v1679000657950!5m2!1ses-419!2smx" 
                    width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>

        <?php if (verifySession()): ?>
            <!-- Modal AddCom -->
            <div class="modal fade" id="addComModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" 
                aria-labelledby="addComModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="exampleModalLabel">Agregar comunicado</h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action="db/update_comunicado.php" method="POST" enctype="multipart/form-data">
                            <div class="modal-body">
                                <div class="form-group mb-2">
                                    <label class="col-form-label mb-3" for="comunicado">Subir comunicado (.jpg)</label>
                                    <div class="mb-2">
                                        <input type="file" class="form-control" name="comunicado" required>
                                    </div>
                                </div> 
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                <button type="submit" name="btnAddCom" class="btn btn-primary">Subir</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            
            <!-- Modal RmCom -->
            <div class="modal fade" id="rmComModal" data-bs-backdrop="static" tabindex="-1" 
                aria-labelledby="rmModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="rmModalLabel">Quitar comunicado</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Comunicado</th>
                                        <th>Accion</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        include("db/db.php");
                                        $sql = "SELECT * FROM comunicado";
                                        $result = $connection->query($sql);

                                        if ($result && $result->num_rows > 0) {
                                            while ($row = $result->fetch_assoc()) {
                                                $id = $row['id_comunicado'];
                                                $url = $row['comunicado'];
                                                $nombre = basename($url);
                                                ?>
                                                    <tr>
                                                        <td><?php echo $id; ?></td>
                                                        <td>
                                                            <a href="<?php echo $url; ?>"><?php echo $nombre;?></a>
                                                        </td>
                                                        <td>
                                                            <a class="btn btn-danger" href="db/update_comunicado.php?id=<?php echo $id; ?>" 
                                                                role="button">Eliminar</a>
                                                        </td>
                                                    </tr>
                                                <?php
                                            }
                                        } else {
                                            echo "No se encontraron comunicados.";
                                        }

                                        $connection->close();
                                    ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                            <button type="submit" name="btnRmCom" class="btn btn-primary">Subir</button>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
        
    </main>
<?php include("template/footer.php");?>