<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
  <!-- The rhombuses -->
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
    <img src="images/icon.svg">
    <img src="images/vlakje_groen.svg" alt="groen">
    <img src="images/vlakje_groen.svg" alt="groen">
    <img src="images/vlakje_groen.svg" alt="groen">
    <img src="images/boerderijen.svg">
    <img src="images/dorpen.svg">
    <img src="images/dieren.svg">
    <img src="images/gebouwen.svg" data-bs-toggle="modal" data-bs-target="#bijzondere_gebouwen">
    <img src="images/vlakje_groen.svg" alt="groen">
    <img src="images/kerken.svg">
    <img src="images/streekproducten.svg" data-bs-toggle="modal" data-bs-target="#streekproducten">
    <img src="images/tuinen.svg">
    <img src="images/waterbeheer.svg">
    <img src="images/wegen_dijken_bruggen.svg">
    <img src="images/vlakje_geel.svg" alt="geel">
    <img src="images/werelderfgoed.svg" data-bs-toggle="modal" data-bs-target="#wereld_erfgoed">
    <img src="images/hollandse_waterlinies.svg">
    <img src="images/historische_figuren.svg" data-bs-toggle="modal" data-bs-target="#histfiguren">
    <img src="images/beemsterkleuren.svg">
    <img src="images/vlakje_geel.svg" alt="geel">
    <img src="images/vlakje_geel.svg" alt="geel">
    <img src="images/vlakje_geel.svg" alt="geel">
    <img src="images/vlakje_geel.svg" alt="geel">
    <img src="images/vlakje_geel.svg" alt="geel">
    <img src="images/vlakje_geel.svg" alt="geel">
    <img src="images/vlakje_blauw.svg" alt="blauw">
    <img src="images/vlakje_blauw.svg" alt="blauw">
    <img src="images/beemster_vanzelfsprekend.svg">
    <!-- <a class="ja" href="https://www.visitbeemster.nl" target="_blank"> -->
      <img src="images/visit_beemster.svg" alt="Visit Beemster">
    <!-- </a> -->
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
          <h1 class="modal-title" id="streekproductenLabel">Streekproducten</h1>
          <div class="modal-buttons">
            <button class="btn btn-success" type="button" id="informatieButton_streekproducten">
              INFO
            </button>
            <button class="btn btn-danger" type="button" id="spelButton_streekproducten">
              SPEL
            </button>
            <button class="btn btn-primary" type="button" id="leerButton_streekproducten">
              LEER
            </button>
          </div>
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
        <div class="leren" style="display: none;">
          <h1>Hier komen de teksten voor docenten</h1>
        </div>
      </div>
    </div>
  </div>

  <!-- Pop up modal Wereld Erfgoed -->
  <div class="modal fade" id="wereld_erfgoed" tabindex="-1" aria-labelledby="wereld_erfgoedLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title" id="wereld_erfgoedLabel">Wereld Erfgoed</h1>
          <div class="modal-buttons">
          <!-- Buttons to switch from information to game view -->
          <button class="btn btn-success" type="button" id="informatieButton_wereld_erfgoed">
            INFO
          </button>
          <button class="btn btn-danger" type="button" id="spelButton_wereld_erfgoed">
            SPEL
          </button>
          <button class="btn btn-primary" type="button" id="leerButton_wereld_erfgoed">
              LEER
            </button>
          </div>
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
                <img class="card-img-top" src="images/beemster.jpg" alt="Card image cap">
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
                <img class="card-img-top" src="images/werelderfgoed_schaal.jpg" alt="Card image cap">
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
        <div class="leren" style="display: none;">
          <h1>Leer informatie</h1>
        </div>
      </div>
    </div>
  </div>

  <!-- Pop up modal Bijzondere gebouwen -->
  <div class="modal fade" id="bijzondere_gebouwen" tabindex="-1" aria-labelledby="bijzondere_gebouwenLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title" id="bijzondere_gebouwenLabel">Bijzondere gebouwen</h1>
          <div class="modal-buttons">
          <!-- Buttons to switch from information to game view -->
          <button class="btn btn-success" type="button" id="informatieButton_bijzondere_gebouwen">
            INFO
          </button>
          <button class="btn btn-danger" type="button" id="spelButton_bijzondere_gebouwen">
            SPEL
          </button>
          <button class="btn btn-primary" type="button" id="leerButton_bijzondere_gebouwen">
              LEER
            </button>
          </div>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <!-- This is where the cards are put in -->
          <div class="row">
            <div class="col-sm-6">
              <div class="card" style="width: 16rem;" id="cardKerk">
                <img class="card-img-top" src="images/polderhuis.jpg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Kerk</h5>
                  <button class="btn btn-primary toggle-btn" type="button">
                    Lees meer
                  </button>
                  <div class="card-text content">
                    Polderhuis tekst
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="card" style="width: 16rem;" id="cardMolen">
                <img class="card-img-top" src="images/molen.jpg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Molen</h5>
                  <button class="btn btn-primary toggle-btn" type="button">
                    Lees meer
                  </button>
                  <div class="card-text content ">
                    Molen tekst
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-sm-6">
              <div class="card" style="width: 16rem;" id="cardBoerderij">
                <img class="card-img-top" src="images/klooster.jpg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Boerderij</h5>
                  <button class="btn btn-primary toggle-btn" type="button">
                    Lees meer
                  </button>
                  <div class="card-text content">
                    Klooster
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="card" style="width: 16rem;" id="cardHuis">
                <img class="card-img-top" src="images/kosterij.jpg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Kosterij</h5>
                  <button class="btn btn-primary toggle-btn" type="button">
                    Lees meer
                  </button>
                  <div class="card-text content">
                    Huis tekst
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
        <div class="leren" style="display: none;">
          <h1>Leer tekst van de modal</h1>
        </div>
      </div>
    </div>
  </div>

  <!-- Pop up modal hist figuren -->
  <div class="modal fade" id="histfiguren" tabindex="-1" aria-labelledby="histfigurenLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title" id="histfigurenLabel">Historische Figuren</h1>
          <div class="modal-buttons">
            <button class="btn btn-success" type="button" id="informatieButton_histfiguren">
              Informatie
            </button>
            <button class="btn btn-danger" type="button" id="spelButton_histfiguren">
              Spelletjes
            </button>
            <button class="btn btn-primary" type="button" id="leerButton_histfiguren">
              Leren
            </button>
          </div>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <!-- This is where the cards are put in -->
          <div class="row">
            <div class="col-sm-6">
              <div class="card" style="width: 16rem;" id="cardbwolff">
                <img class="card-img-top" src="images/man.jpg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">betje</h5>
                  <button class="btn btn-primary toggle-btn" type="button">
                    Lees meer
                  </button>
                  <div class="card-text content">
                    
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="card" style="width: 16rem;" id="cardKoe">
                <img class="card-img-top" src="images/.jpg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Kaas</h5>
                  <button class="btn btn-primary toggle-btn" type="button">
                    Lees meer
                  </button>
                  <div class="card-text content ">
                    
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-sm-6">
              <div class="card" style="width: 16rem;" id="cardSchaap">
                <img class="card-img-top" src="images/.jpg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Fruit</h5>
                  <button class="btn btn-primary toggle-btn" type="button">
                    Lees meer
                  </button>
                  <div class="card-text content">
                    
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
        <div class="leren" style="display: none;">
          <h1>Hier komen de teksten voor docenten</h1>
        </div>
      </div>
    </div>
  </div>



  <!-- Javascript for changing the modal from information to game view, and to show and hide the text from the cards -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <script>
    document.addEventListener("DOMContentLoaded", function() {
      function setupModal(modalId, informatieButtonId, spelButtonId, leerButtonId) {
        const modal = document.getElementById(modalId);
        const informatieButton = modal.querySelector(`#${informatieButtonId}`);
        const spelButton = modal.querySelector(`#${spelButtonId}`);
        const leerButton = modal.querySelector(`#${leerButtonId}`);
        const cards = modal.querySelectorAll('.card');
        const question = modal.querySelector('.question');
        const leren = modal.querySelector('.leren');

        informatieButton.addEventListener('click', function() {
          showCards(cards);
          hideQuestion(question);
          hideLeren(leren);
        });

        spelButton.addEventListener('click', function() {
          hideCards(cards);
          showQuestion(question);
          hideLeren(leren);
        });

        leerButton.addEventListener('click', function() {
          hideCards(cards);
          hideQuestion(question);
          showLeren(leren);
        });

        function showCards(cards) {
          cards.forEach(function(card) {
            card.style.display = 'block';
          });
        }

        function hideCards(cards) {
          cards.forEach(function(card) {
            card.style.display = 'none';
          });
        }

        function showQuestion(question) {
          question.style.display = 'block';
        }

        function hideQuestion(question) {
          question.style.display = 'none';
        }

        function showLeren(leren) {
          leren.style.display = 'block';
        }

        function hideLeren(leren) {
          leren.style.display = 'none';
        }
      }

      setupModal('streekproducten', 'informatieButton_streekproducten', 'spelButton_streekproducten', 'leerButton_streekproducten');
      setupModal('wereld_erfgoed', 'informatieButton_wereld_erfgoed', 'spelButton_wereld_erfgoed', 'leerButton_wereld_erfgoed');
      setupModal('bijzondere_gebouwen', 'informatieButton_bijzondere_gebouwen', 'spelButton_bijzondere_gebouwen', 'leerButton_bijzondere_gebouwen');
      setupModal('histfiguren', 'informatieButton_histfiguren', 'spelButton_histfiguren', 'leerButton_histfiguren');

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
