<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-snacks-b1</title>
    <style>       
        body {
            background-color: black;
            color: white;   
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%); 
        }       
    </style>

    <?php include "data.php";?>

</head>
<body>
    <p>
        <?php 
            
            foreach ($hotels as $hotel) {
                echo "<div style='margin: 20px 0'></div>";
                foreach ($hotel as $key => $value) {                   
                    echo $key.": ".$value."<br>";
                }
            }
        ?>
    </p>
    
        

<script src="script.js"></script>

</body>
</html>