<!-- JQuery -->
<script
    src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
    crossorigin="anonymous">
</script>
<!-- Bootstrap 5 -->
<script src="https://getbootstrap.com/docs/5.0/dist/js/bootstrap.bundle.min.js"></script>

<!-- Cambiar el class="active" en el nav -->
<script>
    $(document).ready(() => {
        const current_location = window.location.href.split("/");
        const page = current_location[current_location.length - 1];
        $('nav a.nav-link').removeClass('active');
        $('nav a.nav-link[href="' + page + '"]').addClass('active');
    });
</script>