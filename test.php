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
    <img src="images/boerderijen.svg" data-bs-toggle="modal" data-bs-target="#boerderijen">
    <img src="images/dorpen.svg">
    <img src="images/dieren.svg">
    <img src="images/gebouwen.svg" data-bs-toggle="modal" data-bs-target="#bijzondere_gebouwen">
    <img src="images/vlakje_groen.svg" alt="groen">
    <img src="images/kerken.svg" data-bs-toggle="modal" data-bs-target="#kerken">
    <img src="images/streekproducten.svg" data-bs-toggle="modal" data-bs-target="#streekproducten">
    <img src="images/tuinen.svg">
    <img src="images/waterbeheer.svg" data-bs-toggle="modal" data-bs-target="#waterbeheer">
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
    <img src="images/vlakje_blauw.svg">
    <img src="images/vlakje_blauw.svg" alt="Visit Beemster">
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
          <img src="images/streekproducten.svg" alt="Logo" class="modal-logo">
          <h1 class="modal-title" id="streekproductenLabel">Streekproducten</h1>
          
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
    <div class="modal-buttons">
        <button class="btn btn-secondary" type="button" id="informatieButton_streekproducten">INFO</button>
        <button class="btn btn-secondary" type="button" id="spelButton_streekproducten">SPEL</button>
        <button class="btn btn-secondary" type="button" id="leerButton_streekproducten">LEER</button>
    </div>
    <div class="row">
        <!-- Voorbeeld voor de kaart met aardappelen -->
        <div class="col-sm-6">
            <div class="card clickable-card" style="width: 16rem;" id="cardAardappelen">
                <div class="clickable-overlay"></div>
                <img class="card-img-top" src="images/aardappelen.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Aardappelen</h5>
                    <div class="card-text content">
                        Verschillende soorten aardappel worden al ruim 400 jaar geteeld. Uniek is het soort BeemsterValery, een puur aardappeltje alleen gepoot en geoogst in de Beemster.
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card" style="width: 16rem;" id="cardKaas">
                <img class="card-img-top" src="images/kaas.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Kaas</h5>
                    <div class="card-text content">
                        Beemsterkaas van de Cono kaasmakerij is &quot;wereldberoemd&quot; en gemaakt van uitsluitend melk van koeien die in de Beemster grazen. De kaas wordt niet alleen in Nederland verkocht maar ook wereldwijd geëxporteerd. Ook is er echte boerenkaas van kaasboerderij Groot.
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <div class="card" style="width: 16rem;" id="cardFruit">
                <img class="card-img-top" src="images/fruit.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Fruit</h5>
                    <div class="card-text content">
                        Diverse rassen appels, peren en kersen worden met name in de Zuidoostbeemster geteeld. Voorjaar siert de vele bloesems dit gebied.
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card" style="width: 16rem;" id="cardKnoflook">
                <img class="card-img-top" src="images/knoflook.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Knoflook</h5>
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
          <img src="images/werelderfgoed.svg" alt="Logo" class="modal-logo">
          <h1 class="modal-title" id="wereld_erfgoedLabel">Werelderfgoed</h1>
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
              <div class="card" style="width: 16rem;" id="cardDirck">
                <img class="card-img-top" src="images/dirck.jpg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Dirck van Os</h5>
                  <div class="card-text content">
                    Dirck tekst
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="card" style="width: 16rem;" id="cardBeemster kavels">
                <img class="card-img-top" src="images/beemster.jpg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Beemster kavels</h5>
                  <div class="card-text content ">
                    Beemster kavels tekst
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6">
              <div class="card" style="width: 16rem;" id="cardKoper">
                <img class="card-img-top" src="images/koper.jpg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Kopergravure</h5>
                  <div class="card-text content">
                    Kopergravure tekst
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="card" style="width: 16rem;" id="cardWerelderfgoed">
                <img class="card-img-top" src="images/werelderfgoed_schaal.jpg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Unesco erfgoed logo</h5>
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
          <a href="https://www.werelderfgoed.nl/nl/onderwijs/quiz" target="_blank">Unesco Werelderfgoed Quiz</a>
        </div>
        <div class="leren" style="display: none;">
          <a href="https://www.werelderfgoed.nl/nl/onderwijs" target="_blank">Unesco Werelderfgoed</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Pop up modal Bijzondere gebouwen -->
  <div class="modal fade" id="bijzondere_gebouwen" tabindex="-1" aria-labelledby="bijzondere_gebouwenLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <img src="images/gebouwen.svg" alt="Logo" class="modal-logo">
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
              <div class="card" style="width: 16rem;" id="cardLinden">
                <img class="card-img-top" src="images/.jpg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Onder de Linden</h5>
                  <div class="card-text content">
                    Onder de Linden tekst
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="card" style="width: 16rem;" id="cardWesterhem">
                <img class="card-img-top" src="images/westerhem.jpg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Westerhem</h5>
                  <div class="card-text content ">
                    Westerhem tekst
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6">
              <div class="card" style="width: 16rem;" id="cardPolderhuis">
                <img class="card-img-top" src="images/polderhuis.jpg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Polderhuis</h5>
                  <div class="card-text content">
                    Polderhuis tekst
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="card" style="width: 16rem;" id="cardNachtegaal">
                <img class="card-img-top" src="images/nachtegaal.jpeg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Nachtegaal</h5>
                  <div class="card-text content">
                    Nachtegaal tekst
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
          <img src="images/historische_figuren.svg" alt="Logo" class="modal-logo">
          <h1 class="modal-title" id="histfigurenLabel">Historische Figuren</h1>
          <div class="modal-buttons">
            <button class="btn btn-success" type="button" id="informatieButton_histfiguren">
              INFO
            </button>
            <button class="btn btn-danger" type="button" id="spelButton_histfiguren">
              SPEL
            </button>
            <button class="btn btn-primary" type="button" id="leerButton_histfiguren">
              LEER
            </button>
          </div>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <!-- This is where the cards are put in -->
          <div class="row">
            <div class="col-sm-6">
              <div class="card" style="width: 16rem;" id="cardbwolff">
                <img class="card-img-top" src="images/hist_figuren_wolff.jpg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Betje Wolff</h5>
                  <div class="card-text content">
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="card" style="width: 16rem;" id="cardKoe">
                <img class="card-img-top" src="images/hist_figuren_fabritius.jpg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Fabritius</h5>
                  <div class="card-text content ">

                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6">
              <div class="card" style="width: 16rem;" id="cardSchaap">
                <img class="card-img-top" src="images/hist_figuren_leeghwater.jpg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Leeghwater</h5>
                  <div class="card-text content">
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="card" style="width: 16rem;" id="cardKip">
                <img class="card-img-top" src="images/hist_figuren_sluis.jpg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Sluis</h5>
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

  <div class="modal fade" id="waterbeheer" tabindex="-1" aria-labelledby="waterbeheerLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <img src="images/waterbeheer.svg" alt="Logo" class="modal-logo">
          <h1 class="modal-title" id="waterbeheerLabel">Waterbeheer</h1>
          <div class="modal-buttons">
            <button class="btn btn-success" type="button" id="informatieButton_waterbeheer">
              INFO
            </button>
            <button class="btn btn-danger" type="button" id="spelButton_waterbeheer">
              SPEL
            </button>
            <button class="btn btn-primary" type="button" id="leerButton_waterbeheer">
              LEER
            </button>
          </div>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <!-- This is where the cards are put in -->
          <div class="row">
            <div class="col-sm-6">
              <div class="card" style="width: 16rem;" id="cardJacobus">
                <img class="card-img-top" src="images/gemaal_jacobus_bouman.jpg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Jacobus bouman gemaal</h5>
                  <div class="card-text content">
                    Jacobus tekst
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="card" style="width: 16rem;" id="cardWouter">
                <img class="card-img-top" src="images/gemaal_wouter_sluis.jpg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Wouter Sluis gemaal</h5>
                  <div class="card-text content ">
                    Wouter tekst
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6">
              <div class="card" style="width: 16rem;" id="cardMaquette">
                <img class="card-img-top" src="images/molengangen.jpg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Molens op Maquette</h5>
                  <div class="card-text content">
                    Maquette tekst
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="card" style="width: 16rem;" id="cardRingvaart">
                <img class="card-img-top" src="images/beemsterringvaart.jpg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Beemsterringvaart</h5>
                  <div class="card-text content">
                    Ringvaart tekst
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
          <a href="https://www.hhnk.nl/leren-over-water" target="_blank">Leren over water</a>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="kerken" tabindex="-1" aria-labelledby="kerkenLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <img src="images/kerken.svg" alt="Logo" class="modal-logo">
          <h1 class="modal-title" id="kerkenLabel">Kerken</h1>
          <div class="modal-buttons">
            <button class="btn btn-success" type="button" id="informatieButton_kerken">
              INFO
            </button>
            <button class="btn btn-danger" type="button" id="spelButton_kerken">
              SPEL
            </button>
            <button class="btn btn-primary" type="button" id="leerButton_kerken">
              LEER
            </button>
          </div>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <!-- This is where the cards are put in -->
          <div class="row">
            <div class="col-sm-6">
              <div class="card" style="width: 16rem;" id="cardKeyserkerk">
                <img class="card-img-top" src="images/keyserkerk.jpg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Keyserkerk</h5>
                  <div class="card-text content">
                    Keyserkerk tekst
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="card" style="width: 16rem;" id="cardDoper">
                <img class="card-img-top" src="images/doper.jpg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Joannes de Doper, WB</h5>
                  <div class="card-text content ">
                    Doper tekst
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6">
              <div class="card" style="width: 16rem;" id="cardKapel">
                <img class="card-img-top" src="images/kapel.jpg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">NH Kapel</h5>
                  <div class="card-text content">
                    Kapel tekst
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="card" style="width: 16rem;" id="cardSchuilkerk">
                <img class="card-img-top" src="images/schuilkerk.jpg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Schuilkerk</h5>
                  <div class="card-text content">
                    Schuilkerk tekst
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

  <div class="modal fade" id="boerderijen" tabindex="-1" aria-labelledby="boerderijenLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <img src="images/boerderijen.svg" alt="Logo" class="modal-logo">
          <h1 class="modal-title" id="boerderijenLabel">Boerderijen</h1>
          <div class="modal-buttons">
            <button class="btn btn-success" type="button" id="informatieButton_boerderijen">
              INFO
            </button>
            <button class="btn btn-danger" type="button" id="spelButton_boerderijen">
              SPEL
            </button>
            <button class="btn btn-primary" type="button" id="leerButton_boerderijen">
              LEER
            </button>
          </div>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <!-- This is where the cards are put in -->
          <div class="row">
            <div class="col-sm-6">
              <div class="card" style="width: 16rem;" id="cardEenhoorn">
                <img class="card-img-top" src="images/eenhoorn.jpg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Boerderij Eenhoorn</h5>
                  <div class="card-text content">
                    Eenhoorn tekst
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="card" style="width: 16rem;" id="cardLepelaar">
                <img class="card-img-top" src="images/lepelaar.jpg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Boerderij Lepelaar</h5>
                  <div class="card-text content ">
                    Lepelaar tekst
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6">
              <div class="card" style="width: 16rem;" id="cardBroedersbouw">
                <img class="card-img-top" src="images/broedersbouw.jpg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Boerderij Broedersbouw</h5>
                  <div class="card-text content">
                    Broedersbouw tekst
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="card" style="width: 16rem;" id="cardBoschrijk">
                <img class="card-img-top" src="images/boschrijk.jpg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Booerderij Boschrijk</h5>
                  <div class="card-text content">
                    Boschrijk tekst
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
          <a href="https://www.boerderijenstichting.nl/voorlichting/leskist/" target="_blank">Boerderijen educatie</a>
        </div>
      </div>
    </div>
  </div>



  <!-- Javascript for changing the modal from information to game view, and to show and hide the text from the cards -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <script>
  document.addEventListener("DOMContentLoaded", function() {
  // Functie om de modale inhoud op te zetten met klikbare kaarten
  function setupClickableCards(cards, modal) {
    cards.forEach(function(card) {
      card.addEventListener('click', function() {
        const imgSrc = card.querySelector('.card-img-top').src;
        const cardTitle = card.querySelector('.card-title').innerText;
        const cardText = card.querySelector('.card-text').innerText;

        const modalBody = modal.querySelector('.modal-body');
        modalBody.innerHTML = `
          <div class="card-body">
            <img class="card-img-top" src="${imgSrc}" alt="Card image cap">
            <h5 class="card-title">${cardTitle}</h5>
            <div class="card-text content">${cardText}</div>
          </div>
        `;

        const modalInstance = new bootstrap.Modal(modal);
        modalInstance.show();
      });
    });
  }

  // Functie om de modale setup uit te voeren
  function setupModal(modalId, informatieButtonId, spelButtonId, leerButtonId) {
    const modal = document.getElementById(modalId);
    const cards = modal.querySelectorAll('.card');
    const modalBody = modal.querySelector('.modal-body');
    const question = modal.querySelector('.question');
    const leren = modal.querySelector('.leren');

    setupClickableCards(cards, modal);

    // Event listeners voor de knoppen buiten de modale inhoud
    const informatieButton = document.getElementById(informatieButtonId);
    const spelButton = document.getElementById(spelButtonId);
    const leerButton = document.getElementById(leerButtonId);

    informatieButton.addEventListener('click', function() {
      modalBody.style.display = 'flex';
      question.style.display = 'none';
      leren.style.display = 'none';
    });

    spelButton.addEventListener('click', function() {
      modalBody.style.display = 'none';
      question.style.display = 'block';
      leren.style.display = 'none';
    });

    leerButton.addEventListener('click', function() {
      modalBody.style.display = 'none';
      question.style.display = 'none';
      leren.style.display = 'block';
    });
  }

  // Roep setupModal aan voor elk modaal venster
  setupModal('streekproducten', 'informatieButton_streekproducten', 'spelButton_streekproducten', 'leerButton_streekproducten');
  setupModal('wereld_erfgoed', 'informatieButton_wereld_erfgoed', 'spelButton_wereld_erfgoed', 'leerButton_wereld_erfgoed');
  setupModal('bijzondere_gebouwen', 'informatieButton_bijzondere_gebouwen', 'spelButton_bijzondere_gebouwen', 'leerButton_bijzondere_gebouwen');
  setupModal('histfiguren', 'informatieButton_histfiguren', 'spelButton_histfiguren', 'leerButton_histfiguren');
  setupModal('waterbeheer', 'informatieButton_waterbeheer', 'spelButton_waterbeheer', 'leerButton_waterbeheer');
  setupModal('kerken', 'informatieButton_kerken', 'spelButton_kerken', 'leerButton_kerken');
  setupModal('boerderijen', 'informatieButton_boerderijen', 'spelButton_boerderijen', 'leerButton_boerderijen');
});

</script>




  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
  </script>
</body>

</html>
