
<?php

require __DIR__ . '/functions.php';

      if (isset($_POST['submit'])){
        addmonster($_POST);
        header ('Location:index.php'); 
      }

?>


<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Monsters League</title>

        <!-- CSS files -->
        <link rel="stylesheet" href="bootstrap-4.1.3-dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">Monsters League</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                </ul>

                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </nav>

        <div class="jumbotron">
            <h1 class="display-4">Ajoute un monster</h1>
            <hr class="my-4">
        </div>

        <div class="container">
          <form action="addmonster.php" method="POST">
              <div class="form-group">
                <label>Nom</label>
                <input type="text" required class="form-control" name="name">
              </div>

              <div class="form-group">
                <label>Age</label>
                <input type="text" required class="form-control" name="age">
              </div>
           

              <div class="form-group">
                <label>Weight</label>
                <input type="text" required class="form-control" name="weight">
              </div>
           

              <div class="form-group">
                <label>Bio</label>
                <input type="text" required class="form-control" name="bio">
              </div>
           
              <div class="form-group">
                <label>filename</label>
                <input type="text"  class="form-control" name="filename">
              </div>
           
           
              <button type="submit" name="submit" required class="btn btn-primary">Submit</button>
            </form>
        </div>

    <h1></h1>






   </body>
 </html>
