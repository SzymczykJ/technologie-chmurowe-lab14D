<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Weryfikacja LEMP</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; background-color: #f4f6f9; color: #333; }
        .container { background: white; padding: 30px; border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); }
        h1 { color: #0066cc; }
        .status { padding: 10px; background-color: #d4edda; color: #155724; border-radius: 4px; font-weight: bold; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Laboratorium 14 - Technologie Chmurowe</h1>
        <p class="status">Stack LEMP działa poprawnie</p>
        <p><strong>Wersja PHP w kontenerze:</strong> <?php echo PHP_VERSION; ?></p>
        <p><strong>Serwer WWW:</strong> <?php echo $_SERVER['SERVER_SOFTWARE']; ?></p>
    </div>
</body>
</html>