<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<div class="container mt-5">
            <div class="row">
                <div class="col-sm-2"></div>
                <div class="col-sm-8">
                    <div class="jumbotron jumbotron-fluid" style="background-color:#0D8791">
        
                        <h1 class="display-5 text-center"> Control de vacunas</h1>
                        <div class="card" style="background-color:#0D8791">
                            <div class="card-body">
                                <form action="">
                                    <label for="">Nombre:</label>
                                    <input type="text" id="nombre" class="form-control" required>
                                    <hr>
                                    <h2>Vacunas</h2>
                                    <div class="row">
                                        <div class="col">
                                            <input type="checkbox" id="hepatitisA" name="hepatitisA">
                                            <label for="">Hepatitis A</label>
                                        </div>
                                        <div class="col">
                                            <input type="checkbox" id="influenza" name="influenza">
                                            <label for="">Influenza</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <input type="checkbox" id="hepatitisB" name="hepatitisB">
                                            <label for="">Hepatitis B</label>
                                        </div>
                                        <div class="col">
                                            <input type="checkbox" id="sarampion" name="sarampion">
                                            <label for="">Sarampión</label>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col">
                                            <a href="modalAgregar.php" class="btn btn-primary">Registrar</a>
                                        </div>
                                        <div class="col">
                                            <a href="modificar.php" class="btn btn-success">Modificar</a>

                                        </div>
                                        <div class="col">
                                            <a href="borrar.php" class="btn btn-danger">Borrar</a>

                                        </div>
                                        <div class="col">
                                            <a href="salir.php" class="btn btn-warning">Salir</a>

                                        </div>
                                    </div>
                                        

                                </form>
                                        
                            </div>
                        </div>
        
                    </div>
                </div>
                <div class="col-sm-2"></div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        
</body>
</html>