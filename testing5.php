<html>
    <head>
        <title> BELAJAR PHP </title>
    </head>
<body>
    Tanggal Lahir :
    <select name = tanggal>
        <option value=0 selected>Tanggal
    <?php 
      for ($i=1 ; $i < 32 ; $i++)
        echo "<option value = $i>$i" ;
    ?>
</body>
</html>