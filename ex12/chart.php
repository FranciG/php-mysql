 <?php
      
      define('DB_HOST', '127.0.0.1');
define('DB_USERNAME', 'book_manager');
define('DB_PASSWORD', 'manager');
define('DB_NAME', 'test');

//get connection
$mysqli = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

if(!$mysqli){
  die("Connection failed: " . $mysqli->error);
}

//query to get data from the table
$query = ("SELECT pages, book_name FROM books");


//execute query

$result = mysqli_query($connect, $query); 
    

        ?>

 <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['book_name', 'pages'],
          <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                               echo "['".$row["book_name"]."', ".$row["pages"]."],";  
                          }  
                          ?>  
        ]);

        var options = {
          chart: {
            title: 'Books',
            subtitle: 'Books and number of pages',
          }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<body>
<div id="columnchart_material" style="width: 800px; height: 500px;"></div>

</body>
</html>