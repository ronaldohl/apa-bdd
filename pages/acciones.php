<?php
    require_once('../loads.php');
    // session_start();
    validarSesion();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acciones</title>
    <?php include('includes-head.php')?>
</head>
<body>
    <?php include('header.php')?>
        <div class="container mt-4 mb-5">
            <div class="row">
                <div class="col">
                    <div class="card ml-1 mr-1">
                        <i class="fas fa-list-alt fa-10x text-center card-img-top img-responsive mt-5 "style="font-size: 150px" ></i>
                        <div class="card-body">                                    
                            <h2 class="card-title text-center font-bold">Reportes</h2>                        
                                <p class="card-text text-center">Ver detalles de todos los reportes generados de peticiones </p>                            
                            <a href="reportes.php" class="btn btn-primary text-center d-block">Ir a Reportes <i class="fa fa-arrow-circle-o-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card ml-1 mr-1">
                        <i class="fas fa-plus-circle fa-10x text-center card-img-top img-responsive mt-5 "style="font-size: 150px" ></i>
                        <div class="card-body">                                    
                            <h2 class="card-title text-center font-bold">Rescates</h2>                        
                                <p class="card-text text-center">Ver detalles de los rescates realizados en los centros APA </p>                            
                            <a href="rescates.php" class="btn btn-primary text-center d-block">Ir a Rescates <i class="fa fa-arrow-circle-o-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card ml-1 mr-1">
                        <i class="fas fa-dog fa-10x text-center card-img-top img-responsive mt-5 "style="font-size: 150px" ></i>
                        <div class="card-body">                                    
                            <h2 class="card-title text-center font-bold" >Adopciones</h2>                        
                                <p class="card-text text-center">Ver detalles de las adopciones o registra una nueva adopción </p>                            
                            <a href="adopciones" class="btn btn-primary text-center d-block">Ir a Adopciones <i class="fa fa-arrow-circle-o-right"></i></a>
                        </div>
                    </div>
                </div>
                

                
                
            </div>
        </div>
    <?php include('includes-body.php')?>
    <?php include('footer.php')?>
</body>
</html>