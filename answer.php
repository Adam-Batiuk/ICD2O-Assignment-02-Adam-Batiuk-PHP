<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="description" content="Find the Area" />
  <meta name="keywords" content="mths, ics2o" />
  <meta name="author" content="Adam" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-deep_orange.min.css" />
  <link rel="stylesheet" href="./css/style.css" />
  <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png" />
  <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png" />
  <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png" />
  <link rel="manifest" href="site.webmanifest" />
  <title>Find The Area PHP</title>
</head>

<body>
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <span class="mdl-layout-title">Find The Area Of A Triangle</span>
      </div>
    </header>
    <main class="mdl-layout__content">
      <div class="right-image">
        <img src="./images/Triangle_700.svg" alt="Triangle image" />
      </div>
      <div class="page-content-php">
        <?php
        $sideA = $_GET["side-a"];
        $sideB = $_GET["side-b"];
        $sideC = $_GET["side-c"];

        $semiPerimeter = ($sideA + $sideB + $sideC) / 2;

        $area = sqrt($semiPerimeter * ($semiPerimeter - $sideA) * ($semiPerimeter - $sideB) * ($semiPerimeter - $sideC));
        $roundArea = round($area, $precision = 2, $mode = PHP_ROUND_HALF_UP);
        $perimeter = $semiPerimeter * 2;

        if ($area != $area) {
          echo "Area is not a number";
        } else {
          echo "Area is: " . $area . " cm²";
        }
        echo ", Perimeter is: " . $perimeter . " cm";
        ?>
      </div>
    </main>
  </div>
</body>

</html>