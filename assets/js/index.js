$(document).ready(() => {
    $(function () {
      $(".scroll-down").on("click", function (e) {
        e.preventDefault();
        $("html, body").animate(
          { scrollTop: $(this).offset().top + 100 },
          350,
          "linear"
        );
      });
    });
});