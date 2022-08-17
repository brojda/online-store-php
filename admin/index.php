<?php $show =false; ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="shortcut icon" href="../images/logo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <title>Happy Family basket</title>
  </head>
  <body style="background-image:url('../images/bg.png'); background-repeat:no-repeat; background-size:cover;">
    <header>
      <nav class="navbar navbar-light bg-light bg-gradient mb-5">
        <div class="container-fluid">
          <a class="navbar-brand" href="../">
            <img src="../images/logo.png" alt="" width="30" height="24" class="d-inline-block align-top">
            Happy family's basket
          </a>
        </div>
      </nav>
    </header>
    <main>
      <div class="container mt-5">
        <div class="row mt-5">
          <div class="offset-md-2 col-md-8 col-xs-12 bg-light bg-gradient mt-5">
            <br><h2 class="text-danger text-center">login form</h2><br><br><br>
            <div class="alert alert-success col-12 text-center" style="display:<?php if ($show) {echo 'inline-block';} else {echo 'none';} ?>">
              Send successfully
            </div>
              <button type="button" class="btn btn-primary col-12" onclick="window.location.replace('?login=admin');">send url</button>
              <br><br><br>
          </div>
        </div>
      </div>
    </main>
    <footer>
    </footer>
  </body>
</html>
