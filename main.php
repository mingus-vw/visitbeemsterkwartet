<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            overflow: hidden; /* Hide overflow to prevent scrollbars */
        }

        .wrapper {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(100px, 1fr)); /* Adjust column size as needed */
            grid-template-rows: repeat(auto-fill, minmax(100px, 1fr)); /* Adjust row size as needed */
            grid-gap: 15px;
            justify-content: center;
            align-items: center;
            z-index: -1; /* Move behind other content */
        }

        .blocks {
            z-index: 1;
            max-width: 100%;
            margin-bottom: -52%;
            clip-path: polygon(50% 0%, 100% 50%, 50% 100%, 0% 50%);
            transform: scale(1);
            transition: all 0.25s;
        }

        .wrapper img:nth-child(7n+1) {
            grid-column: 2/span 2;
        }

        .wrapper img:hover {
            z-index: 2;
            transform: scale(1.1);
        }

        .half-left,
        .half-right {
            max-width: 100%;
            margin-bottom: -52%;
            clip-path: polygon(50% 0%, 100% 50%, 50% 100%, 0% 50%);
            transform: scale(1);
            transition: all 0.25s;
        }

        .half-left {
            max-width: 100%;
            margin-bottom: -52%;
            clip-path: polygon(50% 0%, 50% 50%, 50% 100%, 100% 50%);
            transform: scale(1);
            transition: all 0.25s;
        }

        .half-right {
            max-width: 100%;
            margin-bottom: -52%;
            clip-path: polygon(50% 0%, 50% 50%, 50% 100%, 0% 50%);
            transform: scale(1);
            transition: all 0.25s;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <img class="blocks" src="images/vlakje_rood.svg" alt="...">
        <img class="blocks" src="images/vlakje_rood.svg" alt="...">
        <img class="blocks" src="images/vlakje_rood.svg" alt="...">
        <img class="blocks" src="images/vlakje_groen.svg" alt="...">
        <img class="blocks" src="images/vlakje_groen.svg" alt="...">
        <img class="blocks" src="images/vlakje_groen.svg" alt="...">
        <img class="blocks" src="images/vlakje_groen.svg" alt="...">
        <img class="blocks" src="images/vlakje_groen.svg" alt="...">
        <img class="blocks" src="images/vlakje_groen.svg" alt="...">
        <img class="blocks" src="images/vlakje_groen.svg" alt="...">
        <img class="blocks" src="images/vlakje_groen.svg" alt="...">
        <img class="blocks" src="images/vlakje_geel.svg" alt="...">
        <img class="blocks" src="images/vlakje_geel.svg" alt="...">
        <img class="blocks" src="images/vlakje_geel.svg" alt="...">
        <img class="blocks" src="images/vlakje_blauw.svg" alt="...">
        <img class="blocks" src="images/vlakje_blauw.svg" alt="...">
        <img class="blocks" src="images/vlakje_blauw.svg" alt="...">
        <img class="blocks" src="images/vlakje_blauw.svg" alt="...">
    </div>
</body>

</html>
