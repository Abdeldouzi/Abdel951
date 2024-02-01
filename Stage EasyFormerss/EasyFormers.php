<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EasyFormers</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #eaf2f8;
            box-sizing: border-box;
        }

        header {
            background-color: #3498db;
            color: #fff;
            padding: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        h1 {
            margin: 0;
        }

        nav {
            margin-top: 10px;
        }

        nav ul {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
        }

        nav ul li {
            margin-right: 20px;
            position: relative;
            cursor: pointer;
        }

        nav ul ul {
            display: none;
            position: absolute;
            top: 100%;
            left: 0;
            background-color: #3498db;
        }

        nav ul li:hover > ul {
            display: flex;
            flex-direction: column;
        }

        nav ul ul li {
            margin-right: 0;
            width: 200px;
        }

        footer {
        background-color: #2e4053;
        color: #ecf0f1;
        padding: 10px;
        text-align: center;
        border-top-left-radius: 20px;
        border-top-right-radius: 20px;
        border-bottom-left-radius: 20px;
        border-bottom-right-radius: 20px;
        margin-left:20px;
            margin-right:20px;
    }

    footer button {
        background-color: #ecf0f1;
        color: #85929e;
        border: none;
        border-radius: 5px;
        padding: 8px 15px;
        margin: 0 10px;
        cursor: pointer;
    }
    .banner {
            background-color: #d4e6f1;
            padding: 20px;
            text-align: center;
            border-top-left-radius: 50px;
            border-top-right-radius: 50px;
            border-bottom-right-radius: 50px;
            border-bottom-left-radius: 50px;
            margin-top:140px;
            margin-bottom: 20px; /* Add margin between banner and footer */
            margin-left: 20px;
            margin-right: 20px;
        }
        
    </style>
</head>
<body>

<?php include 'header.php';
?>
        <div class="banner">
    Chiffre clé avec taux de satisfaction et tout 
    </div>

    <footer>
        <button>Mentions Légales</button>
        <button>Plan du site</button>
    </footer>

</body>
</html>
