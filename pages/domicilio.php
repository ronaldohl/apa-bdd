<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Prueba</title>
    <?php 
        include ('includes-head.php');
    ?>
</head>

<body>
<div class="container m-5">
                    <form action="estado-cuenta.php" method="POST">
                        <div class="form-group mt-3 mb-3">
                            <p class="masthead-subheading font-weight-light ">ID Domicilio</p>
                            <div class="form-row  justify-content-center">
                                <div class="input-group mb-2 text-center col-11">
                                    <div class="input-group-addon">
                                        <div class="input-group-text">
                                            <i class="fa fa-user"></i>
                                        </div>
                                    </div>
                                    <input type="text" name="nombre" class="form-control " placeholder="ID Domicilio" required aria-required="true" pattern="[A-Za-z ]{1,100}" title="Sólo letras  Máximo 100" required="required" data-validation-required-message="Por favor ingresa tu nombre.">
                                </div>
                            </div>
                            <label class="form-label mt-2">Nombre de la calle:</label>
                            <div class="form-row  justify-content-center">
                                <div class="input-group mb-2 text-center col-11">
                                    <div class="input-group-addon">
                                        <div class="input-group-text">
                                            <i class="fa fa-home"></i>
                                        </div>
                                    </div>
                                    <input type="text" name="calle" class="form-control " placeholder="Calle..." required aria-required="true" pattern="[A-Za-z ]{1,100}" title="Sólo letras Máximo 100" required="required" data-validation-required-message="Por favor ingresa el nombre de la calle.">
                                </div>
                            </div>
                            <label class="form-label mt-2">Numero exterior: </label>
                            <div class="form-row  justify-content-center">
                                <div class="input-group mb-2 text-center col-11">
                                    <div class="input-group-addon">
                                        <div class="input-group-text">
                                            <i class="fa fa-building"></i>
                                        </div>
                                    </div>
                                    <input type="number" min="0" max="9999" name="numero_ext" class="form-control " placeholder="Numero" required aria-required="true">
                                </div>
                            </div>
                            <label class="form-label mt-2">Número Interior:</label>
                            <div class="form-row  justify-content-center">
                                <div class="input-group mb-2 text-center col-11">
                                    <div class="input-group-addon">
                                        <div class="input-group-text"><i class="fa fa-level-down"></i></div>
                                    </div>
                                    <input type="text" name="interior" class="form-control" id="inlineFormInputGroup" placeholder="Número interior">
                                </div>
                            </div>
                            <label class="form-label mt-2">Colonia:</label>
                            <div class="form-row  justify-content-center">
                                <div class="input-group mb-2 text-center col-11">
                                    <div class="input-group-addon">
                                        <div class="input-group-text"><i class="fa fa-location-arrow"></i></div>
                                    </div>
                                    <input type="text" name="colonia" class="form-control" id="inlineFormInputGroup" placeholder="Ingresa la colonia..." required="required" data-validation-required-message="Por favor ingresa nombre de la colonia">
                                </div>
                            </div>
                            <label class="form-label mt-2">Codigo Postal:</label>
                            <div class="form-row  justify-content-center">
                                <div class="input-group mb-2 text-center col-11">
                                    <div class="input-group-addon">
                                        <div class="input-group-text"><i class="fa fa-qrcode"></i></div>
                                    </div>
                                    <input type="text" name="cp" class="form-control" id="inlineFormInputGroup" placeholder="Ingresa el codigo postal...">
                                </div>
                            </div>
                            <label class="form-label mt-2">Municipio:</label>
                            <div class="form-row  justify-content-center">
                                <div class="input-group mb-2 text-center col-11">
                                    <div class="input-group-addon">
                                        <div class="input-group-text"><i class="fa fa-map-marker"></i></div>
                                    </div>
                                    <select class="custom-select" name="municipio" id="zona" required="required" data-validation-required-message="Por favor selecciona un municipio">             
                                  <option value='AGUASCALIENTES'>Aguascalientes</option>;
                                <option value='JESUS MARIA'>Jesus María</option>;
                                <option value='SAN FRANCISCO DE LOS ROMO'>San Francisco de los Romo</option>;
                            </select>
                                </div>
                            </div>
                            <label class="form-label mt-2">Estado:</label>
                            <div class="form-row  justify-content-center">
                                <div class="input-group mb-2 text-center col-11">
                                    <div class="input-group-addon">
                                        <div class="input-group-text"><i class="fa fa-plane"></i></div>
                                    </div>
                                    <input type="text" name="estado" class="form-control" id="inlineFormInputGroup" placeholder="Ingresa el estado de la republica..." required="required" data-validation-required-message="Por favor ingresa el nombre del estado">
                                </div>
                            </div>
                            <label class="form-label mt-2">Centro:</label>
                            <div class="form-row  justify-content-center">
                                <div class="input-group mb-2 text-center col-11">
                                    <div class="input-group-addon">
                                        <div class="input-group-text"><i class="fa fa-users"></i></div>
                                    </div>
                                    <select class="custom-select" name="centro" id="centro" required="required" data-validation-required-message="Por favor selecciona un centro de APA">             
                                  <option value='CENTRO'>Zona Centro</option>;
                                <option value='NORTE'>Zona Norte</option>;
                            </select>
                                </div>
                            </div>
                            
                            <div class="form-row ">
                                <div class="col ">
                                    <div class="text-right ">
                                        <button type="submit" class="mt-2 btn btn-success ml-5" value="Enviar">Consultar Saldo ></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

    <?php 
        include ('includes-body.php');
    ?>
</body>

</html>