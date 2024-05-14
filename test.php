<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style link="stylesheet" href="style.css"></style>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <style>
    /* Styling for the Rhombuses and the modal with the cards. */
    body {
      font-family: arial;
      font-size: 16px;
      display: flex;
      align-items: center;
      justify-content: center;
      min-height: 100vh;
      overflow: hidden;
      margin: 0;
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

    /* This is for the positions of the rhombuses */
    .blocks {
      z-index: 1;
      grid-column: span 2;
      max-width: 100%;
      margin-bottom: -52%;
      clip-path: polygon(50% 0%, 100% 50%, 50% 100%, 0% 50%);
      transform: scale(1);
      transition: all 0.25s;
    }



    .card .content {
      display: none;
    }

    .card.expanded .content {
      display: block;
    }

    .card {
      border: 1px solid #ccc;
      padding: 10px;
      margin-bottom: 10px;
    }

    .card h2 {
      margin-top: 0;
    }

    .card button {
      cursor: pointer;
    }
  </style>
</head>

<body>

  <!-- The rhombuses -->
  <div class="wrapper">
    <img src="images/kaas.jpg" data-bs-toggle="modal" data-bs-target="#streekproducten" alt="...">
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
    <img src="images/droogmakerij.jpg" data-bs-toggle="modal" data-bs-target="#wereld_erfgoed" alt="...">
    <img src="images/vlakje_groen.svg" alt="groen">
    <img src="images/vlakje_groen.svg" alt="groen">
    <img src="images/kosterij.jpg" data-bs-toggle="modal" data-bs-target="#bijzondere_gebouwen" alt="...">
    <img src="images/vlakje_groen.svg" alt="groen">
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
    <img src="images/vlakje_blauw.svg" alt="blauw">
    <img src="images/vlakje_blauw.svg" alt="blauw">
    <img src="images/vlakje_blauw.svg" alt="blauw">
    <img src="images/vlakje_blauw.svg" alt="blauw">
    <img src="images/vlakje_blauw.svg" alt="blauw">
  </div>

  <!-- Pop up modal streekproducten -->
  <div class="modal fade" id="streekproducten" tabindex="-1" aria-labelledby="streekproductenLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="streekproductenLabel">Streekproducten</h1>
          <!-- Buttons to switch from information to game view -->
          <button class="btn btn-primary" type="button" id="informatieButton_streekproducten">
            Informatie
          </button>
          <button class="btn btn-primary" type="button" id="spelButton_streekproducten">
            Spel
          </button>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <!-- This is where the cards are put in -->
          <div class="row">
            <div class="col-sm-6">
              <div class="card" style="width: 16rem;" id="cardVarken">
                <img class="card-img-top" src="images/aardappelen.jpg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Aardappelen</h5>
                  <button class="btn btn-primary toggle-btn" type="button">
                    Lees meer
                  </button>
                  <div class="card-text content">
                    Verschillende soorten aardappel worden al ruim 400 jaar geteeld. Uniek is het soort BeemsterValery, een
                    puur aardappeltje alleen gepoot en geoogst in de Beemster.
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="card" style="width: 16rem;" id="cardKoe">
                <img class="card-img-top" src="images/kaas.jpg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Kaas</h5>
                  <button class="btn btn-primary toggle-btn" type="button">
                    Lees meer
                  </button>
                  <div class="card-text content ">
                    Beemsterkaas van de Cono kaasmakerij is &quot;wereldberoemd&quot; en gemaakt van uitsluitend melk van koeien
                    die in de Beemster grazen. De kaas wordt niet alleen in Nederland verkocht maar ook wereldwijd
                    geëxporteerd. Ook is er echte boerenkaas van kaasboerderij Groot.
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-sm-6">
              <div class="card" style="width: 16rem;" id="cardSchaap">
                <img class="card-img-top" src="images/fruit.jpg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Fruit</h5>
                  <button class="btn btn-primary toggle-btn" type="button">
                    Lees meer
                  </button>
                  <div class="card-text content">
                    Diverse rassen appels, peren en kersen worden met name in de Zuidoostbeemster geteeld.
                    Voorjaar siert de vele bloesems dit gebied.
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="card" style="width: 16rem;" id="cardKip">
                <img class="card-img-top" src="images/knoflook.jpg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Knoflook</h5>
                  <button class="btn btn-primary toggle-btn" type="button">
                    Lees meer
                  </button>
                  <div class="card-text content">
                    Pure, authentieke en unieke knoflook wordt verbouwd op de Beemsterklei.
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Game part of the modal -->
        <div class="question" style="display: none;">
          <h1>Hier komt het spel</h1>
        </div>
      </div>
    </div>
  </div>
  </div>

  <!-- Pop up modal Wereld Erfgoed -->
  <div class="modal fade" id="wereld_erfgoed" tabindex="-1" aria-labelledby="wereld_erfgoedLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="wereld_erfgoedLabel">Wereld Erfgoed</h1>
          <!-- Buttons to switch from information to game view -->
          <button class="btn btn-primary" type="button" id="informatieButton_wereld_erfgoed">
            Informatie
          </button>
          <button class="btn btn-primary" type="button" id="spelButton_wereld_erfgoed">
            Spel
          </button>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <!-- This is where the cards are put in -->
          <div class="row">
            <div class="col-sm-6">
              <div class="card" style="width: 16rem;" id="cardWaterlinie">
                <img class="card-img-top" src="images/waterlinie.jpg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Waterlinie</h5>
                  <button class="btn btn-primary toggle-btn" type="button">
                    Lees meer
                  </button>
                  <div class="card-text content">
                    Waterlinie tekst
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="card" style="width: 16rem;" id="cardDroogmakerij">
                <img class="card-img-top" src="images/droogmakerij.jpg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Droogmakerij de Beemster</h5>
                  <button class="btn btn-primary toggle-btn" type="button">
                    Lees meer
                  </button>
                  <div class="card-text content ">
                    Droogmakerij de Beemster tekst
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-sm-6">
              <div class="card" style="width: 16rem;" id="cardStelling">
                <img class="card-img-top" src="images/stelling.jpg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Stelling van Amsterdam</h5>
                  <button class="btn btn-primary toggle-btn" type="button">
                    Lees meer
                  </button>
                  <div class="card-text content">
                    Stelling van Amsterdam tekst
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="card" style="width: 16rem;" id="cardWerelderfgoed">
                <img class="card-img-top" src="images/werelderfgoedschaal.jpg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Unesco erfgoed logo</h5>
                  <button class="btn btn-primary toggle-btn" type="button">
                    Lees meer
                  </button>
                  <div class="card-text content">
                    Werelferfgoed logo teskt
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Game part of the modal -->
        <div class="question" style="display: none;">
          <h1>Hier komt het spel</h1>
        </div>
      </div>
    </div>
  </div>
  </div>

  <!-- Pop up modal Bijzondere gebouwen -->
  <div class="modal fade" id="bijzondere_gebouwen" tabindex="-1" aria-labelledby="bijzondere_gebouwenLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="bijzonder_gebouwenLabel">Bijzondere gebouwen</h1>
          <!-- Buttons to switch from information to game view -->
          <button class="btn btn-primary" type="button" id="spelButton_bijzondere_gebouwen">
            Informatie
          </button>
          <button class="btn btn-primary" type="button" id="spelButton_bijzondere_gebouwen">
            Spel
          </button>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <!-- This is where the cards are put in -->
          <div class="row">
            <div class="col-sm-6">
              <div class="card" style="width: 16rem;" id="cardKosterij">
                <img class="card-img-top" src="images/kosterij.jpg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Kosterij</h5>
                  <button class="btn btn-primary toggle-btn" type="button">
                    Lees meer
                  </button>
                  <div class="card-text content">
                    Kosterij tekst
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="card" style="width: 16rem;" id="cardKlooster">
                <img class="card-img-top" src="images/klooster.jpg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Klooster O.L.V Lourdes</h5>
                  <button class="btn btn-primary toggle-btn" type="button">
                    Lees meer
                  </button>
                  <div class="card-text content ">
                    Klooster O.L.V Lourdes tekst
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-sm-6">
              <div class="card" style="width: 16rem;" id="cardMolen">
                <img class="card-img-top" src="images/molen.jpg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Molen de Nachtegaal</h5>
                  <button class="btn btn-primary toggle-btn" type="button">
                    Lees meer
                  </button>
                  <div class="card-text content">
                    Molen de Nachtegaal teskt
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="card" style="width: 16rem;" id="cardPolderhuis">
                <img class="card-img-top" src="images/polderhuis.jpg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Polderhuis</h5>
                  <button class="btn btn-primary toggle-btn" type="button">
                    Lees meer
                  </button>
                  <div class="card-text content">
                    Polderhuis tekst
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Game part of the modal -->
        <div class="question" style="display: none;">
          <h1>Hier komt het spel</h1>
        </div>
      </div>
    </div>
  </div>
  </div>


  <!-- Javascript for changing the modal from information to game view, and to show and hide the text from the cards -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
  </script>
  <script>
    document.addEventListener("DOMContentLoaded", function() {
      const informatieButton = document.getElementById('informatieButton_streekproducten');
      const spelButton = document.getElementById('spelButton_streekproducten');
      const cards = document.querySelectorAll('.card');
      const question = document.querySelector('.question');

      informatieButton.addEventListener('click', function() {
        showCards();
        hideQuestion();
      });

      spelButton.addEventListener('click', function() {
        hideCards();
        showQuestion();
      });

      function showCards() {
        cards.forEach(function(card) {
          card.style.display = 'block';
        });
      }

      function hideCards() {
        cards.forEach(function(card) {
          card.style.display = 'none';
        });
      }

      function showQuestion() {
        question.style.display = 'block';
      }

      function hideQuestion() {
        question.style.display = 'none';
      }
    });

    document.addEventListener("DOMContentLoaded", function() {
      const toggleButtons = document.querySelectorAll('.toggle-btn');

      toggleButtons.forEach(function(btn) {
        btn.addEventListener('click', function() {
          const card = this.closest('.card');
          const otherCards = document.querySelectorAll('.card:not(.expanded)');

          card.classList.toggle('expanded');

          otherCards.forEach(function(otherCard) {
            otherCard.classList.toggle('pushed');
          });

          if (card.classList.contains('expanded')) {
            this.textContent = 'Lees minder';
          } else {
            this.textContent = 'Lees meer';
          }
        });
      });
    });
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
  </script>
</body>

</html>