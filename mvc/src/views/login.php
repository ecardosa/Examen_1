<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Register</title>

    <style>
    .form {
        display: flex;
        flex-direction: column;
        gap: 10px;
        width: 50%;
        max-width: 550px;
        background-color: #fff;
        padding: 20px;
        border-radius: 20px;
        position: relative;
        box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
    }

    .title {
        font-size: 28px;
        color: brown;
        font-weight: 600;
        letter-spacing: -1px;
        position: relative;
        display: flex;
        align-items: center;
        padding-left: 30px;
    }

    .title::before,
    .title::after {
        position: absolute;
        content: "";
        height: 16px;
        width: 16px;
        border-radius: 50%;
        left: 0px;
        background-color: brown;
    }

    .title::before {
        width: 18px;
        height: 18px;
        background-color: brown;
    }

    .title::after {
        width: 18px;
        height: 18px;
        animation: pulse 1s linear infinite;
    }

    .message,
    .signin {
        color: rgba(88, 87, 87, 0.822);
        font-size: 14px;
    }

    .signin {
        text-align: center;
    }

    .signin a {
        color: brown;
    }

    .signin a:hover {
        text-decoration: underline brown;
    }

    .flex {
        display: flex;
        width: 100%;
        gap: 6px;
    }

    .form label {
        position: relative;
    }

    .form label .input {
        width: 100%;
        padding: 10px 10px 20px 10px;
        outline: 0;
        border: 1px solid rgba(105, 105, 105, 0.397);
        border-radius: 10px;
    }

    .form label .input+span {
        position: absolute;
        left: 10px;
        top: 15px;
        color: grey;
        font-size: 0.9em;
        cursor: text;
        transition: 0.3s ease;
    }

    .form label .input:placeholder-shown+span {
        top: 15px;
        font-size: 0.9em;
    }

    .form label .input:focus+span,
    .form label .input:valid+span {
        top: 30px;
        font-size: 0.7em;
        font-weight: 600;
    }

    .form label .input:valid+span {
        color: green;
    }

    .submit {
        border: none;
        outline: none;
        background-color: brown;
        padding: 10px;
        border-radius: 10px;
        color: #fff;
        font-size: 16px;
        transform: .3s ease;
    }

    .submit:hover {
        background-color: rgb(56, 90, 194);
    }

    @keyframes pulse {
        from {
            transform: scale(0.9);
            opacity: 1;
        }

        to {
            transform: scale(1.8);
            opacity: 0;
        }
    }

    container {
        display: flex;
        justify-content: center;
        align-items: center;
        width: auto;
        margin-top: 6%;
    }

    .fixed-bottom {
        position: fixed;
        bottom: 10px;
        /* Puedes ajustar este valor según sea necesario */
        left: 50%;
        transform: translateX(-50%);
        z-index: 1000;
        /* Ajusta el valor del índice z según sea necesario */
    }
    </style>

</head>

<body>
    <div class="container">
   
        <form action="index.php" method="post" class="form" id="passwordForm">
            <input type="hidden" name="r" value="dologin">
            <p class="title">Introdueix el codi per entrar</p>
            <label for="password">
                <input required="" placeholder="" id="password" name="password" type="password" class="input">
                <span>Codi</span>
            </label>
            <p class="signin"><a href="index.php">Torna a la pàgina principal</a> </p>
            <button class="submit" id="login" onclick="verifyPassword">Confirmar</button>
        </form>
    </div>
  


    <script src="
https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js
"></script>    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
   <script>

$("#login").click(verifyPassword);

function verifyPassword(event) {
    event.preventDefault(); // Prevent the default form submission behavior

    var password = $('#password').val();

    $.ajax({
        type: 'POST',
        url: 'index.php',
        data: {
            r: 'dologin',
            password: password
        },
        success: function(response) {
            if (response.trim() === 'success') {
                // Contraseña correcta, redirigir a la página de inicio
                window.location.href = 'index.php?r=llistat';
                

            } else {
                // Contraseña incorrecta, mostrar mensaje de error
                alert('Contraseña incorrecta. Por favor, inténtalo de nuevo.');
            }
        },
        error: function() {
            // Ocurrió un error en la solicitud AJAX
            alert('Error en la solicitud AJAX. Por favor, inténtalo de nuevo.');
        }
    });
}
</script>
</body>

</html>