<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Airbnb - Inicio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <link rel="stylesheet" href="./src/components/header/header.css" />
    <link rel="stylesheet" href="./index.css" />
</head>

<body>
    <?php include './src/components/header/header.php' ?>

    <main class="container py-4">

        <section
            class="search-box d-flex align-items-center justify-content-between p-3 rounded-4 shadow-sm mb-5 bg-white">
            <div class="search-item">
                <span class="fw-semibold">Dónde</span>
                <p class="text-muted m-0">Explora destinos</p>
            </div>

            <div class="search-item">
                <span class="fw-semibold">Check-in</span>
                <p class="text-muted m-0">Agrega fecha</p>
            </div>

            <div class="search-item">
                <span class="fw-semibold">Check-out</span>
                <p class="text-muted m-0">Agrega fecha</p>
            </div>

            <div class="search-item">
                <span class="fw-semibold">Quién</span>
                <p class="text-muted m-0">¿Cuántos?</p>
            </div>

            <button class="btn btn-danger rounded-circle search-btn d-flex align-items-center justify-content-center"
                style="width:45px; height:45px;">
                🔍
            </button>
        </section>

        <section class="section-title mb-4">
            <h2 class="fw-bold">Alojamientos populares en Arequipa</h2>
        </section>

        <section class="cards-container row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
            <div class="col">
                <div class="card h-100 shadow-sm border-0">
                    <a href="pgAlojamiento1.php">
                        <img src="./public/assets/cama1.jpg" class="card-img-top" alt="Alojamiento">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title">Lugar para quedarse en Arequipa</h5>
                        <p class="card-text text-muted">S/105 por 2 noches • ⭐ 4.78</p>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100 shadow-sm border-0">
                    <a href="pgAlojamiento2.php">
                        <img src="./public/assets/cama2.jpg" class="card-img-top" alt="Apartamento en Cayma">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title">Apartamento en Cayma</h5>
                        <p class="card-text text-muted">S/264 por 2 noches • ⭐ 5.0</p>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100 shadow-sm border-0">
                    <a href="pgAlojamiento3.php">
                        <img src="./public/assets/cama3.jpg" class="card-img-top" alt="Habitación en Arequipa">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title">Habitación en Arequipa</h5>
                        <p class="card-text text-muted">S/80 por 2 noches • ⭐ 4.79</p>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100 shadow-sm border-0">
                    <a href="pgAlojamiento4.php">
                        <img src="./public/assets/cama4.jpg" class="card-img-top" alt="Loft en Cercado de Arequipa">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title">Loft en Cercado de Arequipa</h5>
                        <p class="card-text text-muted">S/210 por 2 noches • ⭐ 4.85</p>
                    </div>
                </div>
            </div>

        </section>

    </main>

    <?php include './src/components/footer/footer.php' ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
</body>

</html>