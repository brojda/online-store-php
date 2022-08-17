<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="shortcut icon" href="../../images/logo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <title>money center</title>
  </head>
  <body>
    <header>
      <?php
      $img = "../../";
      include "../incs/navbar.inc.php"; ?>
    </header>
    <main>
      <div class="container-fulid">
        <div class="row">
          <?php include "../incs/nav.inc.php"; ?>
          <div class="col-9 overflow-auto" style="max-height:530px">
            <div class="container">
              <div class="row">
                <h3>Total money</h3>
                <hr>
                <?php
                $values =['Revenues', 'Net profit', 'Expenses', 'Capital', 'Expected pofit', 'Expected revenues'];
                $num = 1;
                foreach ($values as $value): ?>
                <div class="col-4 mt-4">
                  <div class="container">
                    <div class="row">
                      <div class="col-12">
                        <div class="progress mx-5 <?php echo 'cla-'.$num; ?>">
                          <span class="progress-left"><span class="progress-bar"></span></span><span class="progress-right"><span class="progress-bar"></span></span>
                          <div class="progress-value">90%</div>
                        </div>
                      </div>
                      <div class="col-12 text-center">
                        <h6 class="text-info">USD <?php echo $num*12*1023; ?>$</h6>
                        <h7 class="subtitle" style="//margin-right:70px"><?php echo $value; ?></h7>
                      </div>
                    </div>
                  </div>
                </div>
                <style media="screen">
                <?php echo '.cla-'.$num; ?> .progress-left .progress-bar{
                      animation:  <?php echo 'cla-'.$num; ?>-left 1.5s linear forwards 1.8s
                }
                <?php echo '.cla-'.$num; ?> .progress-right .progress-bar{
                      animation:  <?php echo 'cla-'.$num; ?>-right 1.8s linear forwards
                }
                @keyframes  <?php echo 'cla-'.$num; ?>-right {
                    0% {
                        -webkit-transform: rotate(0deg);
                        transform: rotate(0deg)
                    }

                    100% {
                        -webkit-transform: rotate(180deg);
                        transform: rotate(180deg)
                    }
                }
                @keyframes  <?php echo 'cla-'.$num; ?>-left {
                    0% {
                        -webkit-transform: rotate(0deg);
                        transform: rotate(0deg)
                    }

                    100% {
                        -webkit-transform: rotate(1<?php echo $num*11; ?>deg);
                        transform: rotate(1<?php echo $num*12; ?>deg)
                    }
                }
                </style>
                  <?php
                  $num++;
                endforeach; ?>
                <h3>Revenues</h3>
                <hr>
                <div class="col-12 overflow-auto" style="max-height:300px">
                  <table class="table table-striped w-100 table-light overflow-auto" style="max-height:300px">
                    <thead>
                      <tr class="">
                        <th scope="col">#</th>
                        <th scope="col">Titel</th>
                        <th scope="col">Number of sales</th>
                        <th scope="col">Revenues</th>
                        <th scope="col">Net profit</th>
                        <th scope="col">Expenses</th>
                        <th scope="col">Capital</th>
                        <th scope="col">Expected pofit</th>
                        <th scope="col">Expected revenues</th>
                      </tr>
                    </thead>
                    <tbody class="overflow-auto" style="height:200px">
                      <tr>
                        <td>25341256</td>
                        <td>Some products of my store</td>
                        <td>353</td>
                        <td>2536$</td>
                        <td>2536$</td>
                        <td>2536$</td>
                        <td>2536$</td>
                        <td>2536$</td>
                        <td>2536$</td>
                      </tr>
                      <tr>
                        <td>25341256</td>
                        <td>Some products of my store</td>
                        <td>353</td>
                        <td>2536$</td>
                        <td>2536$</td>
                        <td>2536$</td>
                        <td>2536$</td>
                        <td>2536$</td>
                        <td>2536$</td>
                      </tr>
                      <tr>
                        <td>25341256</td>
                        <td>Some products of my store</td>
                        <td>353</td>
                        <td>2536$</td>
                        <td>2536$</td>
                        <td>2536$</td>
                        <td>2536$</td>
                        <td>2536$</td>
                        <td>2536$</td>
                      </tr>
                      <tr>
                        <td>25341256</td>
                        <td>Some products of my store</td>
                        <td>353</td>
                        <td>2536$</td>
                        <td>2536$</td>
                        <td>2536$</td>
                        <td>2536$</td>
                        <td>2536$</td>
                        <td>2536$</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div class="col 12 mt-5">
                  <script type="text/javascript" src="../../charts/loader.js"></script>
                  <script type="text/javascript">
                  google.charts.load('current', {'packages':['corechart']});
                  google.charts.setOnLoadCallback(drawChart);
                  function drawChart() {
                    var data = google.visualization.arrayToDataTable([
                      ['Year', 'Sales', 'Profit'],
                      ['2020',  1000,      400],
                      ['2021',  1170,      460],
                      ['2022',  660,       140],
                      ['2023',  1030,      540]
                    ]);
                    var options = {
                      title: 'Annual Performance',
                      curveType: 'function',
                      legend: { position: 'bottom' }
                    };
                    var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));
                    chart.draw(data, options);
                  }
                  google.charts.setOnLoadCallback(drawChartWeek);
                  function drawChartWeek() {
                    var data = google.visualization.arrayToDataTable([
                      ['week', 'Sales', 'Profit'],
                      ['First',  1000,      400],
                      ['Second',  1170,      460],
                      ['Third',  660,       10],
                      ['foreth',  200,       190]
                    ]);

                    var options = {
                      title: 'weekly Performance',
                      curveType: 'function',
                      legend: { position: 'bottom' }
                    };
                    var chart = new google.visualization.LineChart(document.getElementById('week_chart'));
                    chart.draw(data, options);
                  }
                  google.charts.setOnLoadCallback(drawChartMonth);
                  function drawChartMonth() {
                    var data = google.visualization.arrayToDataTable([
                      ['Month', 'Sales', 'Profit'],
                      ['Jan',  1000,      400],
                      ['Feb',  1170,      460],
                      ['Mar',  660,       10],
                      ['Apr',  1030,      540],
                      ['May', 1030,      540],
                      ['Jun',  1000,      400],
                      ['Jul',  1170,      460],
                      ['Aug',  660,       120],
                      ['Sep',  1030,      540],
                      ['Oct',  1000,      400],
                      ['Nov',  1170,      460],
                      ['Dec',  660,       550]
                    ]);

                    var options = {
                      title: 'Monthly Performance',
                      curveType: 'function',
                      legend: { position: 'bottom' }
                    };
                    var chart = new google.visualization.LineChart(document.getElementById('month_chart'));
                    chart.draw(data, options);
                  }
                  </script>
                  <div class="container-fulid">
                    <div class="row">
                      <div class="col-6">
                        <select class="form-control" name="year">
                          <center>
                            <option value="">2020-2023</option>
                            <option value="">2015-2019</option>
                          </center>
                        </select>
                        <div id="curve_chart"></div>
                      </div>
                      <div class="col-6">
                        <select class="form-control" name="month">
                          <center>
                            <option value="">2023</option>
                            <option value="">2022</option>
                            <option value="">2021</option>
                            <option value="">2020</option>
                            <option value="">2019</option>
                            <option value="">2018</option>
                            <option value="">2017</option>
                            <option value="">2016</option>
                            <option value="">2015</option>
                          </center>
                        </select>
                        <div id="week_chart"></div>
                      </div>
                      <div class="col-12">
                        <select class="form-control" name="month">
                          <center>
                            <option value="">Dec</option>
                            <option value="">Nov</option>
                            <option value="">Sep</option>
                            <option value="">Aug</option>
                            <option value="">Jul</option>
                            <option value="">Jun</option>
                            <option value="">May</option>
                            <option value="">Apr</option>
                            <option value="">Mar</option>
                            <option value="">Fep</option>
                            <option value="">Jan</option>
                          </center>
                        </select>
                        <div id="month_chart"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
  </body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</html>
