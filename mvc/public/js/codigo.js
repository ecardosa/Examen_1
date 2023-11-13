$(document).ready(function() {
    $("#formIdentificacion").submit(function(e) {
        e.preventDefault();

        var codigo = $("#codigo").val();

        $.ajax({
            type: "POST",
            url: "ctrlDoLogin.php", // Ajusta la ruta según tu estructura
            data: { codi: codigo },
            dataType: "json",
            success: function(response) {
                if (response.success) {
                    // Utiliza window.location.href para redirigir
                    window.location.href = response.redirect;
                } else {
                    alert(response.error);
                }
            },
            error: function() {
                alert("Error en la solicitud AJAX");
            }
        });
    });
});