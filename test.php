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
    }

    .wrapper {
        position: relative;
        flex-grow: 1;
        margin: auto;
        max-width: auto;
        display: grid;
        grid-template-columns: repeat(8, 1fr);
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
        /* clip-path: polygon(50% 0%, 100% 50%, 50% 100%, 0% 50%); */
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
    </style>
</head>
<body>
<div class="wrapper">
<img src="images/half_rood_links.svg" alt="...">
<img src="images/half_rood_links.svg" alt="...">
</div>
</body>
</html>
