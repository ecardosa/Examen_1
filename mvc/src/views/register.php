<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Register</title>

    <style>
        .form {
  display: flex;
  flex-direction: column;
  gap: 10px;
  max-width: 350px;
  background-color: #fff;
  padding: 20px;
  border-radius: 20px;
  position: relative;
  box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);

}

.title {
  font-size: 28px;
  color: royalblue;
  font-weight: 600;
  letter-spacing: -1px;
  position: relative;
  display: flex;
  align-items: center;
  padding-left: 30px;
}

.title::before,.title::after {
  position: absolute;
  content: "";
  height: 16px;
  width: 16px;
  border-radius: 50%;
  left: 0px;
  background-color: royalblue;
}

.title::before {
  width: 18px;
  height: 18px;
  background-color: royalblue;
}

.title::after {
  width: 18px;
  height: 18px;
  animation: pulse 1s linear infinite;
}

.message, .signin {
  color: rgba(88, 87, 87, 0.822);
  font-size: 14px;
}

.signin {
  text-align: center;
}

.signin a {
  color: royalblue;
}

.signin a:hover {
  text-decoration: underline royalblue;
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

.form label .input + span {
  position: absolute;
  left: 10px;
  top: 15px;
  color: grey;
  font-size: 0.9em;
  cursor: text;
  transition: 0.3s ease;
}

.form label .input:placeholder-shown + span {
  top: 15px;
  font-size: 0.9em;
}

.form label .input:focus + span,.form label .input:valid + span {
  top: 30px;
  font-size: 0.7em;
  font-weight: 600;
}

.form label .input:valid + span {
  color: green;
}

.submit {
  border: none;
  outline: none;
  background-color: royalblue;
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

container{
    display: flex;
    justify-content: center;
    align-items: center;
    width:auto;
    margin-top: 5%;
}
    </style>
</head>

<body>
<container>
<form action="index.php" method="post" class="form">
<input type="hidden" name="r" value="doregister">
    <p class="title">Registrarse </p>
    <p class="message">Registrate para tener acceso total en nuestra página.  </p>
        <div class="flex">
        <label>
            <input required="" placeholder="" type="text" name="n" class="input">
            <span>Nombre</span>
        </label>

        <label>
            <input required="" placeholder="" name="lastname" type="text" class="input">
            <span>Apellidos</span>
        </label>
    </div>  
            
    <label>
        <input required="" placeholder="" name="email" type="email" class="input">
        <span>Email</span>
    </label> 
    <label>
        <input required="" placeholder="" name="phone" type="tel" class="input">
        <span>Teléfono</span>
    </label> 
    <label>
        <input required="" placeholder="" name="cardnumber" type="cardnumber" aria-label="cardnumber" class="input">
        <span>Tarjeta de crédito</span>
    </label> 
    <label>
        <input required="" placeholder="" name="pass" type="password" class="input">
        <span>Contraseña</span>
    </label>
    <p class="signin">¿Ya tienes una cuenta? <a href="index.php?r=dologin">Iniciar sesión</a> </p>
    <button class="submit">Continuar</button>
</form>
            </container>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
</body>

</html>
