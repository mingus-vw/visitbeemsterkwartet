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
    grid-template-columns: repeat(11, 1fr); 
    grid-template-rows: repeat(10, 1fr);
    grid-gap: 15px;
    justify-content: center;
    align-items: center;
}


    .blocks {
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

    .wrapper img:hover {
  z-index: 2;
  transform: scale(1.1);
}

.ja {
    z-index: 1;
    grid-column: span 2;
    max-width: 100%;
    margin-bottom: -52%;
    clip-path: polygon(50% 0%, 100% 50%, 50% 100%, 0% 50%);
    transform: scale(1);
    transition: all 0.25s;
}

.card .content {
  display: none; /* Initially hide the content */
}

.card.expanded .content {
  display: block; /* Display content when card is expanded */
}

/* Additional styling for card appearance */
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

<div class="wrapper">
  <img  class="ja" src="images/kip.png" data-bs-toggle="modal" data-bs-target="#exampleModal" alt="...">
  <img class="blocks" src="images/vlakje_rood.svg" alt="...">
  <img class="blocks" src="images/vlakje_rood.svg" alt="...">
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
 <a data-bs-toggle="modal" data-bs-target="#exampleModal"> <img class="blocks" src="images/vlakje_blauw.svg" alt="..."> </a>
</div>


<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Launch demo modal
</button>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#modal">
        Spel
    </button>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-sm-6">
            <div class="card" style="width: 16rem;" id="cardVarken">
              <img class="card-img-top" src="images/varken.png" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Varken</h5>
                <button class="btn btn-primary toggle-btn" type="button">
                  Lees meer
                </button>
                <div class="card-text content">
                  Varken placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="card" style="width: 16rem;" id="cardKoe">
              <img class="card-img-top" src="images/koe.png" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Koe</h5>
                <button class="btn btn-primary toggle-btn" type="button">
                  Lees meer
                </button>
                <div class="card-text content ">
                  Koe placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-6">
            <div class="card" style="width: 16rem;" id="cardSchaap">
              <img class="card-img-top" src="images/schaap.png" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Schaap</h5>
                <button class="btn btn-primary toggle-btn" type="button">
                  Lees meer
                </button>
                <div class="card-text content">
                  Schaap placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="card" style="width: 16rem;" id="cardKip">
              <img class="card-img-top" src="images/kip.png" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Kip</h5>
                <button class="btn btn-primary toggle-btn" type="button">
                  Lees meer
                </button>
                <div class="card-text content">
                  Kip placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>







<script>
document.addEventListener("DOMContentLoaded", function() {
  const toggleButtons = document.querySelectorAll('.toggle-btn');

  toggleButtons.forEach(function(btn) {
    btn.addEventListener('click', function() {
      const card = this.closest('.card');
      const otherCards = document.querySelectorAll('.card:not(.expanded)');

      // Toggle expanded class for the clicked card
      card.classList.toggle('expanded');

      // Adjust styles for other cards
      otherCards.forEach(function(otherCard) {
        otherCard.classList.toggle('pushed');
      });

      // Update button text based on card state
      if (card.classList.contains('expanded')) {
        this.textContent = 'Lees minder';
      } else {
        this.textContent = 'Lees meer';
      }
    });
  });
});
</script>




        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
        </script>
</body>

</html>
