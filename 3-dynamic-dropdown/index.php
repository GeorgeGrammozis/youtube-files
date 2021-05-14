<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles.css">
    <title>Dynamic select box</title>
</head>
<body>

    <h2>Δυναμικό select menu</h2>

    <p>Επιλεγμένη χώρα: <strong class="selected-country"><!-- country --></strong> </p>
    <p>Επιλεγμένη πόλη: <strong class="selected-city"><!-- city --></strong> </p>

    <form>
        <select onchange="getCities(this.value)" name="countries">
            <option value="">Επιλέξτε μια χώρα</option>
            <?php 
                require("./countries.php");
                foreach($data as $key => $value){
                    ?>
                        <option value="<?php echo $key ?>"><?php echo $key ?></option>
                    <?php
                }
            ?>
        </select>

        <select onchange="displayCity(this.value)" name="cities" id="cities">
            <option value="">Επιλέξτε μια πόλη</option>
        </select>
    </form>


<script src="./script.js"></script>
</body>
</html>