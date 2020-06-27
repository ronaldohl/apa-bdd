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
    <div class="container ml-5 mr-5">
        <div class="container m-5">
            <form action="estado-cuenta.php" method="POST">
                <div class="form-group mt-3 mb-3">
                    <p class="masthead-subheading font-weight-light ">Nombre de Titular</p>
                    <div class="form-row  justify-content-center">
                        <div class="input-group mb-2 text-center col-11">
                            <div class="input-group-addon">
                                <div class="input-group-text">
                                    <i class="fa fa-user"></i>
                                </div>
                            </div>
                            <input type="text" name="nombre" class="form-control " placeholder="Nombre de Titular" required aria-required="true" pattern="[A-Za-z ]{1,100}" title="Sólo letras  Máximo 100" required="required" data-validation-required-message="Por favor ingresa tu nombre.">
                        </div>
                    </div>
                    <label class="form-label mt-2">Apellidos:</label>
                    <div class="form-row  justify-content-center">
                        <div class="input-group mb-2 text-center col-11">
                            <div class="input-group-addon">
                                <div class="input-group-text">
                                    <i class="fa fa-user-plus"></i>
                                </div>
                            </div>
                            <input type="text" name="apellidos" class="form-control " placeholder="Apellidos" required aria-required="true" pattern="[A-Za-z ]{1,100}" title="Sólo letras Máximo 100" required="required" data-validation-required-message="Por favor ingresa tus apellidos.">
                        </div>
                    </div>
                    <label class="form-label mt-2">Edad:</label>
                    <div class="form-row  justify-content-center">
                        <div class="input-group mb-2 text-center col-11">
                            <div class="input-group-addon">
                                <div class="input-group-text">
                                    <i class="fas fa-calendar-alt"></i>
                                </div>
                            </div>
                            <input type="number" min="18" max="120" name="edad" class="form-control " placeholder="Edad" required aria-required="true" title="Debes de ser mayor de edad" required="required" data-validation-required-message="Por favor ingresa tu edad.">
                        </div>
                    </div>
                    <label class="form-label mt-2">Número de Contrato:</label>
                    <div class="form-row  justify-content-center">
                        <div class="input-group mb-2 text-center col-11">
                            <div class="input-group-addon">
                                <div class="input-group-text"><i class="fas fa-file"></i></div>
                            </div>
                            <input type="text" name="num_contrato" class="form-control" id="inlineFormInputGroup" placeholder="Número de contrato" pattern="[0-9]{5,10}" title="Ingrese el número de contrato 5 a 10 dígitos, solo números" required="required" data-validation-required-message="Por favor ingresa tu número de contrato.">
                        </div>
                    </div>
                    <label class="form-label mt-2">Domicilio:</label>
                    <div class="form-row  justify-content-center">
                        <div class="input-group mb-2 text-center col-11">
                            <div class="input-group-addon">
                                <div class="input-group-text"><i class="fa fa-map-marker-alt"></i></div>
                            </div>
                            <input type="text" name="domicilio" title="Calle y número *Solo letras y números" class="form-control" id="inlineFormInputGroup" placeholder="Domicilio" pattern="[A-Za-z 0-9 /.#]{5,500}" required="required" data-validation-required-message="Por favor ingresa tu domicilio.">
                        </div>
                    </div>
                    <label class="form-label mt-2">Zona Habitacional:</label>
                    <div class="form-row  justify-content-center">
                        <div class="input-group mb-2 text-center col-11">
                            <div class="input-group-addon">
                                <div class="input-group-text"><i class="fa fa-map-marked-alt"></i></div>
                            </div>
                            <select class="custom-select" name="zona" id="zona" required>             
                          <option value='A'>A</option>;
                        <option value='B'>B</option>;
                        <option value='C'>C</option>;
                        <option value='D'>D</option>;
                        <option value='D'>E</option>;
                    </select>
                        </div>
                    </div>
                    <label class="form-label mt-2">Metros cúbicos consumidos:</label>
                    <div class="form-row  justify-content-center">
                        <div class="input-group mb-2 text-center col-11">
                            <div class="input-group-addon">
                                <div class="input-group-text"><i class="fas fa-faucet"></i></div>
                            </div>
                            <input type="number" min="1" step="0.01" title="Valor mínimo 1, 2 decimales como máximo" name="metros" class="form-control" id="inlineFormInputGroup" placeholder="Metros cúbicos consumidos">
                        </div>
                    </div>
    
                    <div class="form-row">
                        <div class="form-check mt-3">
                            <input class="form-check-input" type="checkbox" name="terminos" id="terminos" value="ok" required>
                            <label class="form-check-label" for="terminos">Estoy de acuerdo con enviar mis datos</label>
                        </div>
                    </div>
                    <div class="form-row ">
                        <div class="col">
                            <div class="text-right">
                                <button type="submit" class="mt-2 btn btn-success btn-xl" value="Enviar">Consultar Saldo ></button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <?php 
        include ('includes-body.php');
    ?>
</body>

</html>