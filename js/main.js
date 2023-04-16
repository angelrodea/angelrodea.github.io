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
