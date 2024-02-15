<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style link="stylesheet" href="style.css"></style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="main.php">Home</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col" style="max-width: 30rem;">
            <div class="card .h-100">
                <img src="images/molen.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Molens</h5>
                    <p class="card-text">Alle informatie over Beemster molens</p>
                    <a href="#" class="btn btn-primary">Bekijk</a>
                </div>
            </div>
        </div>

        <div class="col" style="max-width: 30rem;">
            <div class="card .h-100">
                <img src="images/leeghwater.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Historische figuren</h5>
                    <p class="card-text">Alle informatie over historische figuren uit de Beemster</p>
                    <a href="#" class="btn btn-primary">Bekijk</a>
                </div>
            </div>
        </div>

        <div class="col" style="max-width: 30rem;">
            <div class="card .h-100">
                <img src="images/koe.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Dieren</h5>
                    <p class="card-text">Alle informatie over de dieren in de Beemster</p>
                    <a href="#" class="btn btn-primary">Bekijk</a>
                </div>
            </div>
        </div>
    </div>


    <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col" style="max-width: 30rem;">
            <div class="card .h-100">
                <img src="images/weiland.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Natuur</h5>
                    <p class="card-text">Alle informatie over de natuur over de Beemster</p>
                    <a href="#" class="btn btn-primary">Bekijk</a>
                </div>
            </div>
        </div>

        <div class="col" style="max-width: 30rem;">
            <div class="card .h-100">
                <img src="images/fort.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Gebouwen</h5>
                    <p class="card-text">Alle informatie over historische gebouwen in de Beemster</p>
                    <a href="#" class="btn btn-primary">Bekijk</a>
                </div>
            </div>
        </div>

        <div class="col" style="max-width: 30rem;">
            <div class="card .h-100">
                <img src="images/kaas.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Producten</h5>
                    <p class="card-text">Alle informatie over de producten uit de Beemster</p>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        bekijk
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                <button type="button" class="btn btn-secondary btn-show-general">Show General Text</button>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h1>Producten uit de Beemster</h1>
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <!-- Card 1 -->
                    <div class="col" style="max-width: 15rem;">
                        <div class="card .h-100">
                            <img src="images/kaas.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Kaas</h5>
                                <p class="card-text">Beemster kaas</p>
                                <button type="button" class="btn btn-primary bekijk-btn" data-product-text="Information about Beemster kaas">Bekijk</button>
                            </div>
                        </div>
                    </div>
                    <!-- Card 2 - Bier -->
                    <div class="col" style="max-width: 15rem;">
                        <div class="card .h-100">
                            <img src="images/bier.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Bier</h5>
                                <p class="card-text">Beemster bier</p>
                                <button type="button" class="btn btn-primary bekijk-btn" data-product-text="Information about Beemster bier">Bekijk</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div class="col" style="max-width: 15rem;">
                        <div class="card .h-100">
                            <img src="images/bier.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Bier</h5>
                                <p class="card-text">Beemster bier</p>
                                <button type="button" class="btn btn-primary bekijk-btn" data-product-text="Information about Beemster bier">Bekijk</button>
                            </div>
                        </div>
                    </div>
                    <div class="col" style="max-width: 15rem;">
                        <div class="card .h-100">
                            <img src="images/bier.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Bier</h5>
                                <p class="card-text">Beemster bier</p>
                                <button type="button" class="btn btn-primary bekijk-btn" data-product-text="Information about Beemster bier">Bekijk</button>
                            </div>
                        </div>
                    </div>
                </div>
                <p id="generalText">Beemster producten text</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

<script>
    $(document).ready(function() {
        $('.bekijk-btn').on('click', function() {
            var button = $(this);

            var cardTitle = button.siblings('.card-title').text();
            var cardText = button.siblings('.card-text').text();

            var productText = "Information about " + cardTitle + ": " + cardText;

            $('#generalText').text(productText);

            $('#exampleModal').modal('show');
        });

        $('.btn-show-general').on('click', function() {
            $('#generalText').text("Beemster producten text");
        });
    });
</script>



</body>

</html>
