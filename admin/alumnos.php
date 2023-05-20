<?php include("../template/adm_header.php");?>
    <main>
        <div class="container">
            <div class="mb-5">
                <div class="form-group row my-3">
                    <label class="col-lg-1 col-form-label me-4" for="name"><b>Grupo</b></label>
                    <div class="col-lg-1 ps-0">
                        <select id="select-grupo" class="form-select mb-3" aria-label="Default select example">
                            <option value="1A" selected>1° A</option>
                            <option value="1B">1° B</option>
                            <option value="2A">2° A</option>
                            <option value="2B">2° B</option>
                            <option value="3A">3° A</option>
                            <option value="3B">3° B</option>
                            <option value="4A">4° A</option>
                            <option value="4B">4° B</option>
                            <option value="5A">5° A</option>
                            <option value="5B">5° B</option>
                            <option value="6A">6° A</option>
                            <option value="6B">6° B</option>
                        </select>
                    </div>
                </div>
            </div>
            <div>
                <table id="tbl-alumno" class="table table-secondary table-bordered" data-show-print="true">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Grado</th>
                            <th scope="col">Grupo</th>
                            <th scope="col">Profesor</th>
                            <th scope="col" class="">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!------------ get_grupo.php -------------->
                    </tbody>
                </table>

                <button type="button" class="btn btn-primary" onclick="imprimir()">
                    Imprimir lista
                </button>
            </div>
        </div>
    </main>

<!--    Scripts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.debug.js" 
    integrity="sha384-NaWTHo/8YCBYJ59830LTz/P4aQZK1sS0SneOgAvhsIl3zBu8r9RevNg5lHCHAuQ/" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.3.2/html2canvas.js" 
    integrity="sha512-sk0cNQsixYVuaLJRG0a/KRJo9KBkwTDqr+/V94YrifZ6qi8+OO3iJEoHi0LvcTVv1HaBbbIvpx+MCjOuLVnwKg==" 
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<?php include("../template/adm_footer.php");?>