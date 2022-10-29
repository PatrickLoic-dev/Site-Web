<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insscription</title>
    <link rel="stylesheet" href="Style.css">
</head>

<body>
<div class="container glass">
    <h1>FICHE D'INSCRIPTION</h1>
    <?php
        extract($_GET);
        if(isset($message) && !empty($message)){
            echo "$message";
        }
    ?>

    <div class="form">
        <form action="./core/createEleveve.php" method="post">

            <p>Nom</p>
            <input type="text" name="nom" required placeholder="">
            <p>Prenom</p>
            <input type="text" name="prenom" required placeholder="">
            <p>Telephone</p>
            <input type="number" name="telephone" required placeholder="">
            <p>Mail</p>
            <input type="text" name="mail" required placeholder="">
            <p>Salle</p>
            <input type="text" name="salle" required placeholder="">
            <p>Jeux</p>
            <select name="jeux" id="">
                <option value="">--SELECTIONNEZ UN JEU--</option>
                <option value="FIFA 23">FIFA 23</option>
                <option value="PES 23">PES 23</option>
                <option value="BLUR">BLUR</option>
                <option value="NARUTO ULTIMATE NINJA STORM 4">NARUTO ULTIMATE NINJA STORM 4</option>
                <option value="CALL OF DUTY">CALL OF DUTY</option>
            </select><br>
            <input type="submit" value="S'INSCRIRE" id="valid"></input>
        </form>
            <footer id="copy">COPYRIGHT @KANGUE LOIC 2022</footer>
    </div>
    
    
    
</div>



</body>

</html>