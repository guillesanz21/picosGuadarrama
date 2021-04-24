$(document).ready(() => {
  $(".create-body").submit((e) => {
    let body = {};

    const titulo = $("input#nombre")[0].value;
    const descripcion = $("textarea#descripcion")[0].value;
    const fotoPortada = $("input#foto-portada")[0].files[0];
    const zona = $("select#zona")[0].value;
    const gpx = $("input#gpx")[0].files[0];
    const editorContent = tinymce.get("tinyeditor").getContent();

    body = { titulo, descripcion, editorContent, fotoPortada, zona, gpx };

    console.log(body);

    // Eliminar cuando cree un manejador al POST de crear una nueva ruta en PHP.
    return false;
  });
});
