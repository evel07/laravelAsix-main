<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pàgina Principal</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #000000, #333333);
            color: white;
        }

        h1 {
            font-size: 3em;
            margin-bottom: 40px;
            text-align: center;
            color: #faf6f6; /* Color blanc */
        }

        img {
            max-width: 400px;
            margin-bottom: 40px; /* Margen inferior per separar de la imatge */
        }

        .menu {
            display: flex;
            gap: 20px;
            margin-top: 20px; /* Margen superior per separar dels altres elements */
        }

        .menu a {
            text-decoration: none;
            padding: 15px 30px;
            border-radius: 5px;
            color: white; /* Lletres en blanc */
            background-color: #ff0000; /* Fons vermell */
            font-size: 1.2em;
            font-weight: bold;
            transition: background-color 0.3s, transform 0.3s;
        }

        .menu a:hover {
            background-color: #cc0000; /* Color vermell més fosc al passar el ratolí */
            transform: scale(1.1);
        }

        footer {
            position: absolute;
            bottom: 10px;
            text-align: center;
            width: 100%;
            font-size: 0.9em;
            color: #faf6f6; /* Color blanc */
            background: linear-gradient(135deg, #ff0000, #cc0000); /* Fons roig degradat */
            padding: 10px 0; /* Afegim padding per separar el text */
        }
    </style>
</head>
<body>
<h1>Benvingut al Projecte Laravel</h1>
<img src="https://ingeniohosting.org/wp-content/uploads/2022/09/get-started-with-laravel-6-400x277-1.png" alt="Laravel Logo">
<div class="menu">
    <a href="/books">Books</a>
    <a href="/Zenless">Zenless Zone Zero</a>
</div>
<footer>
    Projecte realitzat per Evelyn Nofuentes Garcia &copy; 2025
</footer>
</body>
</html>
