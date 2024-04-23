<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: arial;
            font-size: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            overflow: hidden;
            /* Remove scrollbar */
            margin: 0;
            /* Remove default margin */
        }

        .wrapper {
            position: relative;
            flex-grow: 1;
            margin: auto;
            max-width: none;
            display: inline-grid;
            grid-template-columns: repeat(12, 1fr);
            grid-template-rows: repeat(6, 2fr);
            grid-gap: 15px;
            justify-content: center;
            align-items: center;
            width: 100vw;
            /* Ensure the wrapper spans the entire viewport width */
            height: 100vh;
            /* Ensure the wrapper spans the entire viewport height */
        }

        .wrapper img {
            z-index: 1;
            grid-column: span 2 / auto;
            max-width: 100%;
            margin-bottom: -52%;
            clip-path: polygon(50% 0%, 100% 50%, 50% 100%, 0% 50%);
            transform: scale(1);
            transition: all 0.25s;
        }

        .wrapper img:nth-child(11n+1) {
            grid-column: 2 / span 2;
        }

        .wrapper img:hover {
            z-index: 2;
            transform: scale(1.1);
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>

<body>

    <div class="wrapper">
        <img src="images/vlakje_rood.svg" alt="rood">
        <img src="images/vlakje_rood.svg" alt="rood">
        <img src="images/vlakje_rood.svg" alt="rood">
        <img src="images/vlakje_rood.svg" alt="rood">
        <img src="images/vlakje_rood.svg" alt="rood">
        <img src="images/vlakje_rood.svg" alt="rood">
        <img src="images/vlakje_rood.svg" alt="rood">
        <img src="images/vlakje_rood.svg" alt="rood">
        <img src="images/vlakje_rood.svg" alt="rood">
        <img src="images/vlakje_rood.svg" alt="rood">
        <img src="images/vlakje_rood.svg" alt="rood">
        <img src="images/vlakje_groen.svg" alt="groen">
        <img src="images/vlakje_groen.svg" alt="groen">
        <img src="images/vlakje_groen.svg" alt="groen">
        <img src="images/vlakje_groen.svg" alt="groen">
        <img src="images/vlakje_groen.svg" alt="groen">
        <img src="images/vlakje_geel.svg" alt="geel">
        <img src="images/vlakje_geel.svg" alt="geel">
        <img src="images/vlakje_geel.svg" alt="geel">
        <img src="images/vlakje_geel.svg" alt="geel">
        <img src="images/vlakje_geel.svg" alt="geel">
        <img src="images/vlakje_geel.svg" alt="geel">
        <img src="images/vlakje_geel.svg" alt="geel">
        <img src="images/vlakje_geel.svg" alt="geel">
        <img src="images/vlakje_geel.svg" alt="geel">
        <img src="images/vlakje_geel.svg" alt="geel">
        <img src="images/vlakje_geel.svg" alt="geel">
        <img src="images/vlakje_blauw.svg" alt="blauw">
        <img src="images/vlakje_blauw.svg" alt="blauw">
        <img src="images/vlakje_blauw.svg" alt="blauw">
        <img src="images/vlakje_blauw.svg" alt="blauw">
        <img src="images/vlakje_blauw.svg" alt="blauw">
        <img src="images/vlakje_blauw.svg" alt="blauw">
    </div>

</body>

</html>