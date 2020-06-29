<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Mascota</title>
    <?php include('includes-head.php')?>
</head>
<body>
    <?php include('header.php')?>
<div class="container m-5">
                    <form action="estado-cuenta.php" method="POST">
                            <label class="form-label mt-2">Nombre de la Mascota:</label>
                            <div class="form-row  justify-content-center">
                                <div class="input-group mb-2 text-center col-11">
                                    <div class="input-group-addon">
                                        <div class="input-group-text"><i class="fa fa-paw"></i></div>
                                    </div>
                                    <input type="text" name="nombre" class="form-control" id="inlineFormInputGroup" placeholder="Nombre de la mascota..." required="required" data-validation-required-message="Por favor ingresa el nombre de la mascota">
                                </div>
                            </div>
                            <label class="form-label mt-2">Especie:</label>
                            <div class="form-row  justify-content-center">
                                <div class="input-group mb-2 text-center col-11">
                                    <div class="input-group-addon">
                                        <div class="input-group-text"><i class="fa fa-bug"></i></div>
                                    </div>
                                    <select class="custom-select" name="especie" id="especie" required="required" data-validation-required-message="Por favor selecciona una especie">             
                                  <option value='PERRO'>Perro</option>;
                                <option value='GATO'>Gato</option>;
				<option value='AVE'>Ave</option>;
                                <option value='ROEDOR'>Roedor</option>;
				<option value='PEZ'>Pez</option>;
                                <option value='OTRO'>Otro</option>;
                            </select>
                                </div>
                            </div>
                            <label class="form-label mt-2">Detalles Especie:</label>
                            <div class="form-row  justify-content-center">
                                <div class="input-group mb-2 text-center col-11">
                                    <div class="input-group-addon">
                                        <div class="input-group-text"><i class="fa fa-plus-square"></i></div>
                                    </div>
                                    <input type="text" name="detalles_especie" class="form-control" id="inlineFormInputGroup" placeholder="Ingresa detalles sobre la especie...">
                            </div>
                            </div>
                            <label class="form-label mt-2">Fecha de Nacimiento:</label>
                            <div class="form-row  justify-content-center">
                                <div class="input-group mb-2 text-center col-11">
                                    <div class="input-group-addon">
                                        <div class="input-group-text"><i class="fa fa-calendar-o"></i></div>
                                    </div>
                                    <input type="date" name="fecha_nac" class="form-control" id="inlineFormInputGroup" placeholder="Ingresa la fecha de nacimiento..." required="required" data-validation-required-message="Por favor ingresa la fecha de nacimiento">
                                </div>
                            </div>
                             <label class="form-label mt-2">Condición de Rescate:</label>
                            <div class="form-row  justify-content-center">
                                <div class="input-group mb-2 text-center col-11">
                                    <div class="input-group-addon">
                                        <div class="input-group-text"><i class="fa fa-heart"></i></div>
                                    </div>
                                    <select class="custom-select" name="condicion_rescate" id="centro" required="required" data-validation-required-message="Por favor selecciona una condicion de rescate" required="required" data-validation-required-message="Por favor ingresa una condicion de rescate">             
                                  <option value='BUENA'>Buena</option>;
                                <option value='REGULAR'>Regular</option>;
				<option value='MALA'>Mala</option>;
                            </select>
                                </div>
                            </div>
                            <label class="form-label mt-2">Fecha de Desparasitación:</label>
                            <div class="form-row  justify-content-center">
                                <div class="input-group mb-2 text-center col-11">
                                    <div class="input-group-addon">
                                        <div class="input-group-text"><i class="fa fa-asterisk"></i></div>
                                    </div>
                                    <input type="date" name="fecha_desparasitacion" class="form-control" id="inlineFormInputGroup" placeholder="Ingresa la fecha de desparasitacion...">
                                </div>
                            </div>
                            <label class="form-label mt-2">Fecha de Esterilización:</label>
                            <div class="form-row  justify-content-center">
                                <div class="input-group mb-2 text-center col-11">
                                    <div class="input-group-addon">
                                        <div class="input-group-text"><i class="fa fa-plus"></i></div>
                                    </div>
                                    <input type="date" name="fecha_esterilizacion" class="form-control" id="inlineFormInputGroup" placeholder="Ingresa la fecha de esterilización...">
                                </div>
                            </div>
                            <label class="form-label mt-2">Complicaciones:</label>
                            <div class="form-row  justify-content-center">
                                <div class="input-group mb-2 text-center col-11">
                                    <div class="input-group-addon">
                                        <div class="input-group-text"><i class="fa fa-warning"></i></div>
                                    </div>
                                    <input type="text" name="complicaciones" class="form-control" id="inlineFormInputGroup" placeholder="Ingresa una descripción si existe alguna complicación...">
                                </div>
                            </div>
			<label class="form-label mt-2">Tratamiento:</label>
                            <div class="form-row  justify-content-center">
                                <div class="input-group mb-2 text-center col-11">
                                    <div class="input-group-addon">
                                        <div class="input-group-text"><i class="fa fa-flask"></i></div>
                                    </div>
                                    <input type="text" name="tratamiento" class="form-control" id="inlineFormInputGroup" placeholder="Ingresa si lleva algun tratamiento...">
                                </div>
                            </div>
				<label class="form-label mt-2">Anotaciones:</label>
                            <div class="form-row  justify-content-center">
                                <div class="input-group mb-2 text-center col-11">
                                    <div class="input-group-addon">
                                        <div class="input-group-text"><i class="fa fa-edit"></i></div>
                                    </div>
                                    <input type="text" name="anotaciones" class="form-control" id="inlineFormInputGroup" placeholder="Ingresa alguna anotación...">
                                </div>
                            </div>
				<label class="form-label mt-2">Estatus:</label>
                            <div class="form-row  justify-content-center">
                                <div class="input-group mb-2 text-center col-11">
                                    <div class="input-group-addon">
                                        <div class="input-group-text"><i class="fa fa-exclamation-circle"></i></div>
                                    </div>
                                    <select class="custom-select" name="status" id="centro" required="required" data-validation-required-message="Por favor selecciona un estatus">             
                                  <option value='RESGUARDO-APA'>Resguardo-APA</option>;
                                <option value='ADOPCION-TEMPORAL'>Adopcion-Temporal</option>;
				<option value='ADOPCION-DEFINITIVA'>Adopcion-Definitiva</option>;
                            </select>
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
                    </form>
                </div>
                <?php include('includes-body.php')?>
</body>
</html>