<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-Badwords</title>
</head>
<body>
    <main>
        <!-- Paragrafo pre censura -->
        <div>
            <h5>Paragrafo pre censura:</h5>
            <p>
                <?php 
                    echo $_GET['textarea'];
                ?>
            </p>
            <p>
                La lunghezza del paragrafo è di <?php echo strlen($_GET['textarea']) ?> lettere
            </p>
        </div>
        <div>
            <h5>Parola da censurare:</h5>
            <p>
                <?php 
                    echo $_GET['word'];
                ?>
            </p>
        </div>

        <!-- Paragrafo post censura -->

        <div>
            <h5>Paragrafo post censura:</h5>
            <p>
                <?php 
                    echo str_replace($_GET['word'], '***', $_GET['textarea'])  ;
                ?>
            </p>
        </div>
    </main>
</body>
</html>