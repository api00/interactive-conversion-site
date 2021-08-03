<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>
    <script src="view/js/home-js-validation.js"></script>
</head>
<body>
    <?php include "header.php"?>
    <h2>Conveter</h2>
<form action="<?php echo htmlspecialchars( $_SERVER['PHP_SELF']) ?>" method="GET" onsubmit="return isValid()" name="LForm">
<?php include "controller/home-action.php"; ?>
<select name="convert" id="Rname">
        <option value="">Select one</option>
        <option value="feetToinch" >feet To inch</option>
        <option value="inchTofeet">inch To feet</option>
    
        </select>  <span id="Uerror" style="color: red;"> * <?php echo $usernameEr;  ?></span> <br> <br> <br> <br>
        <label for="value">value :</label>

        <input type="number" id="value" name="value">  <span id="Perror" style="color: red;"> * <?php echo $valueEr;  ?></span> <br> <br><br> <br> 
        <input type="submit" value="convert">
</form>


</body>
</html>