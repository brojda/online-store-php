<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="shortcut icon" href="../../../images/logo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="../../../css/style.css">
    <link rel="stylesheet" href="../../../css/bootstrap.min.css">
    <title>products center</title>
  </head>
  <body>
    <header>
      <?php
      $img = "../../../";
      include "../../incs/navbar.inc.php"; ?>
    </header>
    <main>
      <div class="container-fulid">
        <div class="row">
          <?php include "../../incs/nav.inc.php"; ?>
          <div class="col-9 overflow-auto" style="max-height:530px">
            <div class="container">
              <div class="row">
                <h3>My products</h3>
                <div class="col-12 overflow-auto" style="max-height:400px">
                  <table class="table table-striped w-100 table-light overflow-auto" style="max-height:300px">
                    <thead>
                      <tr class="">
                        <th scope="col">#</th>
                        <th scope="col">ID</th>
                        <th scope="col">Product</th>
                        <th scope="col">Stock</th>
                        <th scope="col">Cost</th>
                        <th scope="col">Price</th>
                        <th scope="col">Orders</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $a=0;
                      while ($a <= 10):
                        $a++ ?>
                      <tr>
                        <td><input type="checkbox" id="1"></td>
                        <td><?php echo $a; ?></td>
                        <td>The phone holder with the fair price</td>
                        <td>3423</td>
                        <td>USD 3$</td>
                        <td>USD 16$</td>
                        <td>4</td>
                      </tr>
                    <?php endwhile; ?>
                    </tbody>
                  </table>
                </div>
                <button class="btn btn-primary w-25 mx-5 me-4 mt-5">Edit</button>
                <button class="btn btn-danger w-25 mx-2 mt-5">Delete</button>
                <button class="btn btn-success w-25 mx-2 mt-5">Add</button>

              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
  </body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</html>
