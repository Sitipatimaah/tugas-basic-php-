<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>SELAMAT DATANG!</h1>
    <H2>Terimakasih telah Bergabung di Website kami. Media belajar kita semua!</H2>
     <?php 
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $gender = isset($_POST["gender"]) ? ($_POST["gender"]) :"Tidak ada";
    $nationality = $_POST["nationality"];
    $language = isset($_POST["bahasa"]) ? implode(", " , $_POST["bahasa"]) :"tidak ada";
    $bio = $_POST["bio"];
    
    
?>

    <h4> Hello <?= $firstname . " " . $lastname ?> </h4>
    <h4> Gender : <?= $gender ?> </h4>
    <h4> Negara : <?= $nationality ?> </h4>
    <h4> Bahasa yang kamu kuasai : <?= $language ?> </h4>
    <h4> Bio : <?= $bio ?> </h4>
    
    


</body>
</html>