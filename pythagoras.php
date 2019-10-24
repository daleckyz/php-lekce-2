<?php
$a=2;
$b=3;
$obdelnikobsah=($a * $b);
$strana=6;
$uhel=60;
$vyska=($strana * sin(deg2rad($uhel)));
$trojuhelnikobsah=round(($strana * $vyska / 2));
?>

<!doctype html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Jumbotron Template for Bootstrap 5</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="jumbotron.css" rel="stylesheet">
</head>

<body>

<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="#">Lekce 2</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Pythagoras <span class="sr-only">(current)</span></a>
            </li>
            </li>
        </ul>
    </div>
</nav>

<main role="main">

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
        <div class="container">
            <h1 class="display-3">Matematika převážně vážně</h1>
            <p></p>
        </div>
    </div>



    <div class="container">
        <!-- Example row of columns -->
        <div class="row">
            <div class="col-md-6">
                <h2>Obdelnik</h2>
                <p></p>
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Parametr</th>
                        <th scope="col">Hodnota</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row"> Delka strany A  </th>
                        <td><?php echo($a).' cm';?></td>
                    </tr>
                    <tr>
                        <th scope="row"> Delka strany B </th>
                        <td><?php echo($b).' cm'; ?> </td>
                    </tr>
                    <tr>
                        <th scope="row">Obvod obdelnika</th>
                        <td><?php echo(($a*2+$b*2).' cm');?></td>
                    </tr>
                    <tr>
                        <th scope="row">Obsah obdelnika</th>
                        <td><?php echo(($a*$b).' cm2');?></td>
                    </tr>
                    <tr>
                        <th scope="row"></th>
                        <td></td>
                    </tr>
                    </tbody>
                </table>
                <br/>

                <div class="row">
                    <div class="col-md-12">
                        <h2>Vzpominka na Pythagora</h2>
                        <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                    </div>

                </div>

            </div>
            <div class="col-md-6">
                <h2>Rovnostranny trojuhelnik</h2>
                <p></p>
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Parametr</th>
                        <th scope="col">Hodnota</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row"> Delka strany  </th>
                        <td><?php echo($strana.' cm') ;?></td>
                    </tr>
                    <tr>
                        <th scope="row"> Uhel </th>
                        <td><?php echo($uhel.' stupnu');?> </td>
                    </tr>
                    <tr>
                        <th scope="row">Obvod trojuhelnika</th>
                        <td><?php echo($a*3).' cm';?></td>
                    </tr>
                    <tr>
                        <th scope="row">Vyska trojuhelnika</th>
                        <td><?php echo($vyska).' cm' ;?></td>
                    </tr>
                    <tr>
                        <th scope="row">Obsah trojuhelnika</th>
                        <td><?php echo($trojuhelnikobsah).' cm2';?></td>
                    </tr>
                    </tbody>
                </table>
                <picture>
                    <source srcset="pythagoras_knapp.jpg" type="image/svg+xml">
                    <img src="pythagoras_knapp.jpg" class="img-fluid img-thumbnail" alt="...">
                </picture>


            </div>
        </div>
</main><!-- /.container -->

<footer class="fixed-bottom py-3 bg-light">
    <div class="container-fluid">
        &copy; Braincraft fandí starověkým matematikům
    </div>
</footer>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="js/jquery-slim.min.js"><\/script>')</script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>


