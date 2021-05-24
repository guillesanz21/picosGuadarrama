$("document").ready(() => {
  var url = window.location.pathname;
  var dir = url.substring(0, url.lastIndexOf("/")); // url del servidor
  let date = "";
  const monthNames = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];

  $.getJSON(dir + "/services/rutajson.php?callback=?", (data) => {
    $(".rutas").html("");
    $.each(data, (i, item) => {
      console.log(item);
      date = new Date(item.date);
      date = "" + monthNames[date.getMonth()] + " " + date.getDate();

      $(".rutas").append(`
        <article class="col-md-6 post">
            <div class="row g-0 border rounded overflow-hidden mb-4 shadow-sm h-md-50 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                    <div class="post-zona">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-tag-fill"
                                viewBox="0 0 16 16">
                            <path d="M2 1a1 1 0 0 0-1 1v4.586a1 1 0 0 0 .293.707l7 7a1 1 0 0 0 1.414 0l4.586-4.586a1 1 0 0 0 0-1.414l-7-7A1 1 0 0 0 6.586 1H2zm4 3.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
                        </svg>
                        <strong class="d-inline-block ${item.zona}">${item.zona}</strong>
                    </div>
                    <h4 class="mb-1">${item.nombre}</h4>
                    <div class="mb-1 text-muted date">${date}</div>
                    <p class="card-text">${item.descripcion}</p>
                    <a href="rutaEjemplo.html" class="stretched-link">Continúa leyendo...</a>
                </div>
                <div class="col-auto d-none d-lg-block">
                    <img 
                        src="assets/images/rutas/${item.nombre.split(" ").join("_")}/${item.portada}" 
                        alt="portada ${item.portada}" 
                        class="bd-placeholder-img"
                        focusable="false"
                    >
                </div>
            </div>
        </article>
        `);
    });
  });
  $(".zonas").fadeIn(2000);
});
