<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-Badwords</title>
</head>
<body>
    <main>
        <!-- form immissione testo e parola da censurare -->
        <form action="./function.php" method="get">
            <div>
                <label for="textarea">Paragrafo</label>
                <div>
                    <textarea name="textarea" id="textare" placeholder="inserisci il testo qui..."></textarea>
                </div>
            </div>
            <div>
                <label for="word">Parola da censurare</label>
                <div>
                    <input name="word" type="text" placeholder="inserisci la parola da censurare">
                </div>
            </div>
            <button type="submit">CENSURA!</button>
        </form>
    </main>
</body>
</html>