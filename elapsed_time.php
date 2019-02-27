<?php
$time = microtime();
$time = explode(' ', $time);
$time = $time[1] + $time[0];
$start = $time;
?>
<html>
 <head>
   <title>Himasis Edu</title>
   <link rel='shortcut icon' href='http://himasis.org/an-component/media/upload-gambar-pendukung/logoh.png' />
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 </head>
 <body>
   <div class="container-fluid text-center">
        <div class="fixed-top">
          <h1> COMING SOON </h1>
        </div>


        <div class=".col-md-3 .col-md-offset-3 fixed-bottom">
          <pre>
          <?php
            $time = microtime();
            $time = explode(' ', $time);
            $time = $time[1] + $time[0];
            $finish = $time;
            $total_time = round(($finish - $start), 4);
              echo 'Page generated in '.$total_time.' seconds.';
          ?>
          </pre>  
        </div>

  </div>
 </body>
</html>

