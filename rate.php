<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="view/js/rate-js-validation.js"></script>

</head>
<body>
    <?php include "header.php";
    
    ?>
     <?php include "variables.php"; ?>
     
    <h2>Conversion Rate :</h2>
    
    <form action="<?php echo htmlspecialchars( $_SERVER['PHP_SELF']) ?>" method="POST"  onsubmit="return isValid()" name="LForm">
   
      <select name="convert" id="Rname">

        <option value="">Select one</option>
        <option value="feetToinch" >feet To inch</option>
        <option value="inchTofeet">inch To feet</option>
        <option value="KgTog">kg To g</option>
    
        </select> 
        <span id="Cerror" style="color: red;"> * <?php echo $convertEr;  ?></span> <br> <br> <br> <br>
        <fieldset>
            <legend>feet to inch </legend>
            <label for="feet">feet :</label>

<input type="text" id="feet" name="feet">  <br> <br> <br> 
<label for="inch">inch :</label>
<input type="text" value="" name="inch">  <br>
           
        </fieldset>
        <fieldset>
            <legend>Kg to g </legend>
            <label for="kg">Kg :</label>

<input type="text" id="kg" name="kg">   <br> <br> <br> 
<label for="g">g :</label>
<input type="text" value="" name="g">   <br>
           
        </fieldset>
        <input type="submit" value="store">

</form>

</body>
</html>