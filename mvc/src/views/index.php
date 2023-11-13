<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="../../css/web.css" rel="stylesheet"> 
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.1/themes/base/jquery-ui.css" />
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script> <!-- Actualizado a una versión más reciente de jQuery -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="http://code.jquery.com/ui/1.10.1/jquery-ui.js"></script>
    <script src="../../js/app.js" ></script>
    <title>Document</title>
</head>
<body>

    <?php require 'nav.php'; ?>

    <div class="container-fluid">
        <div class="row">
            <!-- Columna de las fotos -->
            <div class="col-md-6">
                <div id="carouselExample" class="carousel slide">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="../../img/1.jpg" class="d-block w-100" alt="">
                        </div>
                        <div class="carousel-item">
                            <img src="../../img/1.jpg" class="d-block w-100" alt="">
                        </div>
                        <div class="carousel-item">
                            <img src="../../img/1.jpg" class="d-block w-100" alt="">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>

            <!-- Columna de la explicación -->
            <div class="col-md-6">
                <div class="card" >
                    <div class="card-body">
                        <h5 class="card-title">Una Jornada de Solidaritat a Bolívia: Ajuda als Nens</h5>
                        <p class="card-text">
L'excursió següent es presenta com una oportunitat única per participar en una experiència de solidaritat i suport a nens a Bolívia. Aquest viatge no només promet descobrir la bellesa natural i cultural d'aquest fascinant país, sinó també contribuir de manera significativa al benestar dels nens necessitats.


L'objectiu principal d'aquesta excursió és brindar ajuda i suport a comunitats infantils a Bolívia. Ens embarcarem en una missió altruista per col·laborar amb organitzacions locals que treballen incansablement per millorar les condicions de vida dels nens. Aquesta experiència va més enllà de la simple visita; és un compromís amb la construcció d'un futur millor per a aquells que més ho necessiten.


Durant la nostra estada, participarem en diverses activitats dissenyades per reforçar el benestar dels nens. Des de la creació d'espais educatius fins a la distribució de subministraments essencials, cada acció té com a objectiu deixar un impacte positiu i durador. A més, tindrem l'oportunitat d'interactuar i compartir moments especials amb els nens, fomentant la connexió humana i la comprensió mútua.


A més del nostre compromís amb la tasca solidària, també explorarem la rica cultura boliviana. Des de la vibrant vida a les ciutats fins a la serenitat dels paisatges naturals, cada moment serà una oportunitat per apreciar la diversitat i l'autenticitat de Bolívia.</p>
                        <button class="btn btn-primary"><a style="color:black; text-decoration:none;"href="index.php?r=register">Inscripció</a></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
 

    <script src="../../js/app.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> 
    <div class="modal fade" id="cookieModal" tabindex="-1" aria-labelledby="cookieModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="cookieModalLabel">Aviso de Cookies</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Este sitio web utiliza cookies para garantizar que obtengas la mejor experiencia. Al continuar utilizando este sitio, aceptas nuestro uso de cookies.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Aceptar</button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
