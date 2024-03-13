<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <style>
        body {
            font-family: arial;
            font-size: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            max-width: 100%;
        }

        .wrapper {
            position: relative;
            flex-grow: 1;
            margin: auto;
            max-width: auto;
            display: grid;
            grid-template-columns: repeat(9, 1fr);
            grid-template-rows: repeat(10, 1fr);
            grid-gap: 15px;
            justify-content: center;
            align-items: center;
        }

        .wrapper img {
            z-index: 1;
            grid-column: span 2;
            max-width: 100%;
            margin-bottom: -52%;
            transform: scale(1);
            transition: all 0.25s;
        }

        .half-left,
        .half-right {
            clip-path: polygon(50% 0%, 100% 50%, 50% 100%, 0% 50%);
        }

        .half-left {
            grid-column: 1 / span 2;
            clip-path: polygon(50% 0%, 50% 50%, 50% 100%, 100% 50%);
        }

        .half-right {
            grid-column: 7 / span 2;
            clip-path: polygon(50% 0%, 50% 50%, 50% 100%, 0 50%);
        }

        .wrapper img:hover {
            z-index: 2;
            transform: scale(1.1);
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <img src="images/half_rood_links.svg" alt="..." class="half-left">
        <img src="images/vlakje_rood.svg" alt="...">
        <img src="images/vlakje_rood.svg" alt="...">
        <img src="images/half_rood_rechts.svg" alt="..." class="half-right">
        <img src="images/half_groen_links.svg" alt="..." class="half-left">
        <img src="images/vlakje_groen.svg" alt="...">
        <img src="images/vlakje_groen.svg" alt="...">
        <img src="images/half_groen_rechts.svg" alt="..." class="half-right">
        <img src="images/half_geel_links.svg" alt="..." class="half-left">
        <img src="images/vlakje_geel.svg" alt="...">
        <img src="images/vlakje_geel.svg" alt="...">
        <img src="images/half_geel_rechts.svg" alt="..." class="half-right">
        <img src="images/half_blauw_links.svg" alt="..." class="half-left">
        <img src="images/vlakje_blauw.svg" alt="...">
        <img src="images/vlakje_blauw.svg" alt="...">
        <img src="images/half_blauw_rechts.svg" alt="..." class="half-right">
    </div>
</body>
</html>
