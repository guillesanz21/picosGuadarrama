$("document").ready(() => {
  var url = window.location.pathname;
  var dir = url.substring(0, url.lastIndexOf("/")); // url del servidor
  $.getJSON(dir + "/services/sierrajson.php?callback=?", (data) => {
    $("#zonas").html("");
    $.each(data, (i, item) => {
      //console.log(item);
      $(".zonas").append(
        `<div class="col zona">
                    <div class="card flip-card shadow-sm">
                        <div class="flip-card-inner">
                            <div class="flip-card-front">
                                <img src="assets/images/sierra/${item.acronimo}/${item.portada}" alt="Portada ${item.acronimo}">
                                <div class="card-body">
                                    <h3 class="text-center">${item.nombre}</h3>
                                </div>
                            </div>
                            <div class="flip-card-back">
                                <p class="card-text">
                                    ${item.descripcion}
                                </p>
                                <div class="d-flex justify-content-center align-items-center">
                                    <div class="btn-group mb-4">
                                        <a href="zonaEjemplo.html" type="button" class="btn btn-sm btn-primary">View</a>
                                        <button type="button" class="btn btn-sm btn-outline-primary disabled">Edit
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
         `);
    });
  });
  $(".zonas").fadeIn(2000);
});
