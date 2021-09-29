<html>
    <head>
        <title> BELAJAR PHP </title>
    </head>
<body>
    <?php 
        $nilai =85 ; 
        $nama = "Amir" ;

    if ($nilai >=80){
        echo $nama. " Mendapat Nilai A";
    }
    else if ($nilai >=70){
        echo $nama. " Mendapat Nilai B";
    }
    else if ($nilai >=60){
        echo $nama. " Mendapat Nilai C";
    }
    else{
        echo $nama. " Mendapat Nilai D";
    }
    ?>
</body>
</html>