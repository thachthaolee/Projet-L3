<!DOCTYPE html>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <link rel="stylesheet" href="comparer.css" type="text/css" media="screen" />
        <title>
            Comparer
        </title>
    </head>

    <body>
        
        <form action="acces_comparaisons.php" method="post" autocomplete="off">
            <p>
                <INPUT type="number"name="annee"value=""min="2015"max="2019"placeholder="année">
            </p>
            <p>
                <INPUT class="casepays" type="text"name="pays1"value=""placeholder="Sélectionner">
            </p>
            <p>
                <INPUT class="casepays" type="text"name="pays2"value=""placeholder="Sélectionner">
            </p>
            <p>
                <input type="submit" value="Envoyer">
            </p>
        </form>
    </body>
</html>