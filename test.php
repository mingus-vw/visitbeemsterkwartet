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
      <img src="images/kaas.jpg" data-bs-toggle="modal" data-bs-target="#exampleModal" alt="...">
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

  <!-- Pop up modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Streekproducten</h1>
          <!-- Buttons to switch from information to game view -->
          <button class="btn btn-primary" type="button" id="informatieButton">
            Informatie
          </button>
          <button class="btn btn-primary" type="button" id="spelButton">
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
                    Aardappelen placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
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
                    Kaas placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
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
                    Fruit placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
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
                    Knoflook placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
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
      const informatieButton = document.getElementById('informatieButton');
      const spelButton = document.getElementById('spelButton');
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