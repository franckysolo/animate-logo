<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Animation css3 lemarson</title>
    <style>
    html, body {
        height: 100%;
        margin: 0;
    }
    .container {
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100%;
    }
    </style>
    <link rel="stylesheet" href="test.css">
  </head>
  <body>
    <div class="container">
      <div class="animate-logo">
        <h1>LeMarson</h1>
        <?php for ($i=1; $i <= 10; $i++):?>
        <span class="t t<?php echo $i;?>"></span>
        <?php endfor;?>
      </div>
    </div>
  </body>
</html>
