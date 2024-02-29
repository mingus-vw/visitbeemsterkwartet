<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style link="stylesheet" href="style.css"></style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</head>

<body>

    <!-- <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
    </div>
  </div>
</nav>
<a href="thema.php">Beemster kwartet</a> -->



    <style>
    body {
        font-family: arial;
        font-size: 16px;
        display: flex;
        align-items: center;
        justify-content: center;
        min-height: 100vh;
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
        clip-path: polygon(50% 0%, 100% 50%, 50% 100%, 0% 50%);
        transform: scale(1);
        transition: all 0.25s;
    }

    .wrapper img:nth-child(7n+1) {
        grid-column: 2/span 2;
    }
    </style>

    <div class="wrapper">
        <img src="images/Vlakje_groen.svg" alt="...">
        <img src="images/Vlakje_groen.svg" alt="...">
        <img src="images/Vlakje_groen.svg" alt="...">
        <img src="images/Vlakje_geel.svg" alt="...">
        <img src="images/Vlakje_geel.svg" alt="...">
        <img src="images/Vlakje_geel.svg" alt="...">
        <img src="images/Vlakje_geel.svg" alt="...">
        <img src="images/Vlakje_rood.svg" alt="...">
        <img src="images/Vlakje_rood.svg" alt="...">
        <img src="images/Vlakje_rood.svg" alt="...">
        <img src="images/Vlakje_blauw.svg" alt="...">
        <img src="images/Vlakje_blauw.svg" alt="...">
        <img src="images/Vlakje_blauw.svg" alt="...">
        <img src="images/Vlakje_blauw.svg" alt="...">
        <img src="images/Vlakje_blauw.svg" alt="...">
        <img src="images/Vlakje_blauw.svg" alt="...">
        <img src="images/Vlakje_blauw.svg" alt="...">
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>