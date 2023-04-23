// Asignar el ID del comentario al modal
function setId(idComentario) {
    document.getElementById('id_comment').value = idComentario;
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