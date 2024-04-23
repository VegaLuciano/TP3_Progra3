<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabrajo Practico 3</title>
    <link href="node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>  
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                    <h1>Peliculas</h1> 
            </div>
        </div>
        <div class="row">
            <div class="col-12 container d-flex justify-content-center align-items-center ">       
                <div class="table-container">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Nombre</th>
                                <th>Duracion</th>
                                <th>Genero</th>
                                <th>Idioma</th>
                            </tr>
                        </thead>

                        <?php
                        include("main.php");
                        ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
