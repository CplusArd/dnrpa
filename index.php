<?php

require __DIR__.'/vendor/autoload.php';
$access_token ='TEST-8168046229532498-060808-ee6f709f0735bbdbe0ee4c6c0a28e1ac-265435153';
MercadoPago\SDK::setAccessToken($access_token);
$preference = new MercadoPago\preference();
$preference -> back_urls = array(
    "success" => "http://localhost/dnrpa/correcto.php",
    "failure" => "http://localhost/dnrpa/fallo.php", 
    "pending" => "http://localhost/dnrpa/pendiente.php"
);

$producto = [];
$item = new MercadoPago\item();
$item -> title = "DNRPA";
$item -> quantity = 1;
$item -> unit_price = 1;
array_push($producto, $item);

$preference -> items = $producto;
$preference -> save();

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DRNPA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
    <div>
        <header class="navbar navbar-expand-lg bg-light" style="padding: 20px;">
            <div class="container">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent1">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    </ul>
                    <ul class="navbar-nav mt-2 mt-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" href="index.html">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="dominio.html">Informe Dominio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="historico.html">Informe Historico</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="ceta.html">Informe Ceta</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="multa.html">Informe Multas</a>
                        </li>
                    </ul>
                </div>
            </div>
        </header>

        <nav class="navbar navbar-expand-lg navbar-dark" style="padding: 20px; background-color: #38BCEC;">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent2" aria-controls="navbarSupportedContent2"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent2">
                    <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#3pasos">??Como pedirlo?</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#incluye">Lo que incluye</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#preguntas">Preguntas Frecuentes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#pagos">Medio de Pagos</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <!--Page content-->
    <div id="formulario">
    </div>
    <div class="container" style="margin-top: 50px;">
        <div class="row">
            <h1>Informe DNRPA online</h1>
            <p>Su Tr??mite Urgente Oficial
                por tan s??lo $2940.</p>
        </div>
        <div class="row">
            <div class="col-xl-8 col-12">
                <!-- <form>
                    <div class="mb-3 pt-2">
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Seleccione su Tramite</option>
                            <option value="1">Informe dominio</option>
                            <option value="2">Informe Multas</option>
                            <option value="3">informe Historico</option>
                            <option value="4">Informe Ceta</option>
                            <option value="5">Informe Dominio+Multas DESCUENTO</option>
                            <option value="6">Todos los Informes</option>
                        </select>
                    </div>
                    <div class="mb-3 pt-2">
                        <label for="exampleInputEmail1" class="form-label"></label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                            placeholder="Ingrese tu correo electronico">
                    </div>
                    <div class="mb-3 pt-2">
                        <label for="exampleInputPassword1" class="form-label"></label>
                        <input type="text" class="form-control" id="exampleInputPassword1"
                            placeholder="Ingrese su Patente">
                    </div>
                    <div class="d-grid col-6 mx-auto pb-2 mb-5 cho-container" style="margin-top: 50px;">
                    </div>

                </form> -->
                <div class="d-grid col-6 mx-auto pb-2 mb-5 cho-container" style="margin-top: 50px;">
                    </div>
            </div>
            <div class="col-xl-1">
            </div>
            <div class="col-xl-3 col-12" style="text-align: center;">
                <div>
                    <img src="img/informe.png">
                </div>
            </div>
        </div>


        <div id="3pasos">
        </div>
        <div style="margin-top: 100px;">
            <div class=" border border-primary col-6 col-xl-3"></div>
        </div>
        <div class="row" style="margin-top: 50px;">
            <h2>3 simples pasos</h2>
        </div>
        <div class="row justify-content-md-center mt-4">
            <div class="col-xl-3 col-12 mx-auto" style="text-align: center;">
                <img src="img/icono1.png" alt="" style="width: 200px;">
                <div class="col-12 col-xl-12 mx-auto mt-3" style="text-align: center;">
                    <h2>Ingresa tu Patente</h2>
                </div>
            </div>
            <div class="col-xl-1 col-12 mt-5">
            </div>
            <div class="col-xl-4 col-12 mx-auto" style="text-align: center;">
                <img src="img/icono2.png" width="100px">
                <div class="col-12 col-xl-12 mt-3" style="text-align: center;">
                    <h2>Paga como quieras</h2>
                </div>
            </div>
            <div class="col-xl-1 col-12 mt-5">
            </div>
            <div class="col-xl-3 col-12 mx-auto mt" style="text-align: center;">
                <img src="img/icono3.png">
                <div class="col-12 col-xl-12 mt-3" style="text-align: center;">
                    <h2>Lo tenes Rapido</h2>
                </div>
            </div>
        </div>

        <div id="incluye">
        </div>
        <div style="margin-top: 200px;"">
            <div class=" border border-primary col-6 col-xl-3"></div>
    </div>
    <div class="row" style="margin-top: 50px;">
        <h2>Lo que incluye</h2>
    </div>
    <div class="row justify-content-md-center">
        <div class="col-xl-3 col-12 mx-auto mt-5" style="text-align: center;">
            <img src="img/icono4.png" alt="" style="width: 75px;">
            <div class="col-12 col-xl-12 mx-auto mt-1" style="text-align: center;">
                <h5 class="mt-3">Informe de Infraccion</h5>
            </div>
            <div class="col-12 col-xl-12 mx-auto mt-1" style="text-align: center;">
                <p class="mt-3">Para toda la Republica Argentina</p>
            </div>
        </div>
        <div class="col-xl-3 col-12 mx-auto mt-5" style="text-align: center;">
            <img src="img/icono5.png" alt="" style="width: 75px;">
            <div class="col-xl-12 col-12 mx-auto mt-1" style="text-align: center;">
                <h5 class="mt-3">Informe de Libro de Deuda</h5>
            </div>
            <div class="col-xl-12 col-12 mx-auto mt-1" style="text-align: center;">
                <p>Incluye Listado de Multas, de Sanciones, de Infracciones,Nombre del titular</p>
            </div>
        </div>
        <div class="col-xl-3 col-12 mx-auto mt-5" style="text-align: center;">
            <img src="img/icono6.png" alt="" style="width: 75px;">
            <div class="col-xl-12 col-12 mx-auto mt-1" style="text-align: center;">
                <h5 class="mt-3">Para cualquier Automotor</h5>
            </div>
            <div class="col-xl-12 col-12 mx-auto mt-1" style="text-align: center;">
                <p class="mt-3">Auto, Camioneta, Camion, Moto</p>
            </div>
        </div>
        <div class="col-xl-3 col-12 mx-auto mt-5" style="text-align: center;">
            <img src="img/icono7.png" alt="" style="width: 75px;">
            <div class="col-xl-12 col-12 mx-auto mt-1" style="text-align: center;">
                <h5 class="mt-3">100% Online</h5>
            </div>
            <div class="col-xl-12 col-12 mx-auto mt-1" style="text-align: center;">
                <p class="mt-3">Pedila desde la comodidad de tu casa, y recibila en poco tiempo</p>
            </div>
        </div>
    </div>

    <div id="preguntas">
    </div>
    <div style="margin-top: 200px;"">
            <div class=" border border-primary col-6 col-xl-3"></div>
    </div>
    <div class="row" style="margin-top: 50px;">
        <h2>Frecuentes Preguntas</h2>
    </div>


    <div class="row mt-3">
        <div class="accordion accordion-flush" id="accordionFlushExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                        ??Que es un informe automotor DNRPA Oficial?
                    </button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">El informe de dominio es un documento oficial expedido por la DNRPA
                        (Direcci??n Nacional del Registro de la Propiedad del Automotor), el cual contiene toda la
                        informaci??n registrada sobre un veh??culo automotor. Este informe de dominio te permite conocer
                        la situaci??n jur??dica (prenda, robo, hurto, embargo, inhibiciones, etc.) de cualquier veh??culo
                        matriculado en nuestro pa??s, seg??n los datos con que cuenta el Registro Seccional donde est??
                        radicado ese automotor.</div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                        ??Para que me puede servir un Informe de Dominio?
                    </button>
                </h2>
                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">Tener un informe de dominio oficial te permite conocer el estado
                        actualizado de un veh??culo y evitar problemas legales. Si vas a comprar un veh??culo debes
                        asegurarte de conocer en detalle si el titular es ser quien dice ser, si existen prendas sobre
                        el veh??culo o si la persona que te va a vender se encuentra inhibida</div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                        ??Que informacion importante voy a encontrar en el Informe de Dominio?
                    </button>
                </h2>
                <div id="flush-collapseThree" class="accordion-collapse collapse text"
                    aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">El informe de dominio te muestra:<br>

                        - Datos de radicaci??n.<br>
                        - Afecciones: denuncia de robo, embargo, prenda, etc.<br>
                        - Inhibiciones del titular.<br>
                        - Caracter??sticas del rodado: marca, tipo, modelo, n??mero de motor y chasis, a??o de la primera
                        inscripci??n, usos, etc.</div>
                </div>
            </div>
        </div>
    </div>

    <div id="pagos">
    </div>
    <div style="margin-top: 200px;">
        <div class=" border border-primary col-6 col-xl-3"></div>
    </div>
    <div class="row" style="margin-top: 50px;">
        <h2>Medios de pago</h2>
    </div>


    <div class="d-grid col-8 col-xl-4 mx-auto pb-2" style="margin-top: 200px;">
        <button type="submit" class="btn rounded-pill btn-success"><a class="nav-link" href="#formulario">Obterner
                Informe</a></button>
    </div>
    </div>


    <footer class="text-white text-center text-lg-start col-xl-12"
        style="margin-top: 200px; background-color: #38BCEC;">
        <!-- Grid container -->
        <div class="container p-4">
            <!--Grid row-->
            <div class="row">
                <!--Grid column-->
                <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                    <h5 class="text-uppercase">INFORME DE DOMINIO EN TODA LA ARGENTINA:</h5>
                    <p>
                        Cuidad Aut??noma de Buenos Aires.<br>
                        Provincia de Buenos Aires.<br>
                        Provincia de C??rdoba.<br>
                        Provincia de Santa Fe.<br>
                        Provincia de Neuqu??n.<br>
                        Provincia de R??o Negro.<br>
                        Provincia de Mendoza.<br>
                        Provincia de Misiones.<br>
                        Provincia de Entre R??os.<br>
                        Provincia de Chubut.<br>
                        Provincia de Tucum??n.<br>
                        Provincia de Santa Cruz.<br>
                        Provincia de San Luis.<br>
                        Provincia de Tierra del Fuego.<br>
                        Provincia de Corrientes.<br>
                        Provincia de Salta.<br>
                        Provincia de San Juan.<br>
                        Provincia de Santiago del Estero.<br>
                        Provincia de Chaco.<br>
                        Provincia de La Pampa.<br>
                        Provincia de Jujuy.<br>
                        Provincia de La Rioja.<br>
                        Provincia de Formosa.<br>
                        Provincia de Catamarca.<br>
                </div>
                <div class="row">
                    <div class="col-xl-8">
                    </div>
                    <div class="col-xl-4" style="font-size: 14px;">
                        <p>
                            es una empresa privada de gestor??a del
                            automotor y todo el contenido que encontrar??s en esta web
                            es informativo, no tenemos ning??n contacto con entidades oficiales y/o ni
                            pretendemos reemplazar
                            la informaci??n que estas emitan
                        </p>
                    </div>
                </div>
                <!--Grid column-->

                <!-- Copyright -->
                <div class="text-center p-3" style="background-color: #38BCEC;">
                    ?? 2020 Copyright:
                    <a class="text-white" href="https://mdbootstrap.com/">LowSystem</a>
                </div>
                <!-- Copyright -->
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
    <script src="https://sdk.mercadopago.com/js/v2"></script>
    <script>
        // Agrega credenciales de SDK
        var PUBLIC_KEY = "TEST-b50443eb-1e16-4eff-b1bd-32bae1788094"
        const mp = new MercadoPago(PUBLIC_KEY, {
            locale: "es-AR",
        });

        // Inicializa el checkout
        mp.checkout({
            preference: {
                id: '<?php echo $preference->id; ?>'
            },
            render: {
                container: ".cho-container", // Indica el nombre de la clase donde se mostrar?? el bot??n de pago
                label: "Pagar", // Cambia el texto del bot??n de pago (opcional)
            }
        });
    </script>


</body>

</html>