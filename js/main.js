// Asignar el ID del comentario al modal
function setCommentId(idComentario) {
    document.getElementById('id_comment').value = parseInt(idComentario);
}

function deleteComment() {
    // Obtener el valor del ID del comentario del campo oculto del modal
    var idComentario = document.getElementById('id_comment').value;

    // Crear un formulario y agregar un campo con el ID del comentario
    var form = document.createElement('form');
    form.method = 'post';
    form.action = 'db/delete_comment.php';
    var input = document.createElement('input');
    input.type = 'hidden';
    input.name = 'id_comment';
    input.value = idComentario;
    form.appendChild(input);

    // Adjuntar el formulario al cuerpo del documento y enviarlo
    document.body.appendChild(form);
    form.submit();
}

function setId(idProfesor) {
    document.getElementById('profesor_id').value = idProfesor;
}

function deleteProfesor() {
    // Obtener el valor del ID del comentario del campo oculto del modal
    var idProfesor = document.getElementById('profesor_id').value;

    // Crear un formulario y agregar un campo con el ID del comentario
    var form = document.createElement('form');
    form.method = 'post';
    form.action = 'db/delete_profesor.php';
    var input = document.createElement('input');
    input.type = 'hidden';
    input.name = 'profesor_id';
    input.value = idProfesor;
    form.appendChild(input);

    // Adjuntar el formulario al cuerpo del documento y enviarlo
    document.body.appendChild(form);
    form.submit();
}

$(document).ready(function() {
    $('.updateProfBtn').click(function() {
        var id = $(this).data('id');
        $('#profesor_id').val(id);
    });

    // Obtener el valor del botón Modificar al hacer clic
    $("input[name='edit']").on('click', function() {
        // Obtener los datos del profesor desde el botón presionado
        var idProfesor = $(this).closest(".profesor").find(".id").data("id");
        var name = $(this).closest(".profesor").find(".name").text();
        var perfil = $(this).closest(".profesor").find(".perfil").text();
        var experiencia = $(this).closest(".profesor").find(".experiencia").text();
        var aptitudes = $(this).closest(".profesor").find(".aptitudes").text();
        var otros = $(this).closest(".profesor").find(".otros").text();

        // Establecer los valores en los campos del formulario del modal
        $("#inputId").val(idProfesor);
        $("#name_upd").val(name);
        $("#perfil_profesional_upd").val(perfil);
        $("#experiencia_laboral_upd").val(experiencia);
        $("#aptitudes_upd").val(aptitudes);
        $("#otros_datos_upd").val(otros);
    });
});


// VALIDACION  ADMISIONES
if (window.location.pathname.endsWith("admisiones.php")) {
    var gradoActual = document.getElementById("grado");
    var campoBoleta = document.getElementById("campo_boleta");
    var campoKinder = document.getElementById("campo_kinder");
  
    // Mostrar u ocultar el campo de entrada de archivos correspondiente según la opción seleccionada en el campo "Grado actual"
    gradoActual.addEventListener("change", function() {
        if (gradoActual.value == "Ninguno") {
            campoBoleta.style.display = "none";
            campoKinder.style.display = "block";
        } else {
            campoBoleta.style.display = "block";
            campoKinder.style.display = "none";
        }
    });
}

// PROCESO DE ADMISION
if (window.location.pathname.endsWith("alumnos.php")) {
    $(document).ready(function() {
        // Obtener el valor del grupo seleccionado
        var grupo = $("#select-grupo").val();
    
        // Cargar la tabla del grupo seleccionado
        cargarTablaAlumnos(grupo);
    
        // Manejar el evento de cambio en el select
        $("#select-grupo").change(function() {
            var grupoSeleccionado = $(this).val();
            cargarTablaAlumnos(grupoSeleccionado);
        });
    
        // Función para cargar la tabla de alumnos
        function cargarTablaAlumnos(grupo) {
            $.ajax({
                url: "../db/get_grupo.php",
                type: "POST",
                data: { grupo: grupo },
                dataType: "html",
                success: function(data) {
                    $("#tbl-alumno tbody").html(data);
                }
            });
        }
    });
}

function ocultarColumnaAcciones() {
    var links = document.querySelectorAll("#tbl-alumno a"); // Obtener todos los elementos <a> dentro de la tabla
    links.forEach(function(link) {
        link.classList.add("btn"); // Agregar la clase "btn" a cada elemento <a>
    });

    var tabla = document.getElementById('tbl-alumno');
    var filas = tabla.getElementsByTagName('tr');

    for (var i = 0; i < filas.length; i++) {
        var celdaAcciones = filas[i].getElementsByTagName('td')[5]; // Índice de la columna "Acciones"
        var celdaAccionH = filas[i].getElementsByTagName('th')[5];
        if (celdaAcciones) {
            celdaAcciones.classList.add('hide-column');
        }
        if (celdaAccionH) {
            celdaAccionH.classList.add('hide-column');
        }
    }
}

function imprimir() {
    ocultarColumnaAcciones();
    var maintable = document.getElementById('tbl-alumno');

    var doc = new jsPDF('p', 'pt', 'letter');
    var margin = 20; /*margen de la pagina*/
    var scale = (doc.internal.pageSize.width - margin * 2) / document.body.clientWidth; /*ancho de la pagina para escritorio*/
    var scale_mobile = (doc.internal.pageSize.width - margin * 2) / document.body.getBoundingClientRect();

    if(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)){
        /*Si el dispositivo es un telefono movil*/
        doc.html(maintable, {
            x: margin,
            y: margin,
            html2canvas:{
                scale: scale_mobile,
            },
            callback: function(doc){
                doc.output('dataurlnewwindow', {filename: 'pdf.pdf'});
            }
        });
    } else{
        /*Si es dispositivo es una PC o escritorio*/ 
        doc.html(maintable, {
            x: margin,
            y: margin,
            html2canvas:{
                scale: scale,
            },
            callback: function(doc){
                doc.output('dataurlnewwindow', {filename: 'pdf.pdf'}); /*crear el pdf y abrir una nueva ventana en el navegador*/
            }
        });
    }
    doc.autoPrint();
    setTimeout(function() {
        location.reload();
    }, 3000);
}