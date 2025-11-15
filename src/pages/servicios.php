<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <link rel="stylesheet" href="./src/components/header/header.css" />
    <link rel="stylesheet" href="./src/pages/servicios.css" />
</head>

<body>
    <?php include '../components/header/header.php' ?>

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
                style="width:45px; height:45px;">🔍</button>
        </section>

        <section class="section-title mb-4">
            <h2 class="fw-bold">Servicios que brindamos de Comida</h2>
        </section>

        <section class="cards-container row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4 mb-5">

            <div class="col">
                <div class="card h-100 shadow-sm border-0">
                    <a href="pgCocina1.php">
                        <img src="../../public/assets/plato5.jpg" class="card-img-top" alt="Cocina Romana">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title">Cocina Romana</h5>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100 shadow-sm border-0">
                    <a href="pgCocina2.php">
                        <img src="../../public/assets/peru1.jpg" class="card-img-top" alt="Cocina Peruana">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title">Cocina Peruana</h5>
                        <p class="card-text text-muted">S/45 c/u • ⭐ 5.0</p>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100 shadow-sm border-0">
                    <a href="pgCocina3.php">
                        <img src="../../public/assets/argen1.jpg" class="card-img-top" alt="Cocina Argentina">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title">Cocina Argentina</h5>
                        <p class="card-text text-muted">S/80 por cada prenda • ⭐ 4.79</p>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100 shadow-sm border-0">
                    <a href="pgCocina4.php">
                        <img src="../../public/assets/peru3.jpg" class="card-img-top" alt="Cocina Española">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title">Cocina Española</h5>
                        <p class="card-text text-muted">S/210 por 2 noches • ⭐ 4.85</p>
                    </div>
                </div>
            </div>

        </section>

        <section class="section-title mb-4">
            <h2 class="fw-bold">Otros Servicios que brindamos</h2>
        </section>

        <section class="cards-container row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">

            <div class="col">
                <div class="card h-100 shadow-sm border-0">
                    <a href="#">
                        <img src="../../public/assets/trago1.jpg" class="card-img-top" alt="Bebidas">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title">Bebidas</h5>
                        <p class="card-text text-muted">S/105 c/u • ⭐ 4.78</p>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100 shadow-sm border-0">
                    <a href="#">
                        <img src="../../public/assets/spa1.jpg" class="card-img-top" alt="Spa">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title">Spa</h5>
                        <p class="card-text text-muted">S/45 c/u • ⭐ 5.0</p>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100 shadow-sm border-0">
                    <a href="#">
                        <img src="../../public/assets/traje1.jpg" class="card-img-top" alt="Trajes Típicos">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title">Trajes Típicos</h5>
                        <p class="card-text text-muted">S/80 por prenda • ⭐ 4.79</p>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100 shadow-sm border-0">
                    <a href="#">
                        <img src="../../public/assets/city1.jpg" class="card-img-top" alt="Tours">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title">Tours</h5>
                        <p class="card-text text-muted">S/210 por persona • ⭐ 4.85</p>
                    </div>
                </div>
            </div>

        </section>

    </main>


    <footer class="text-center py-3 mt-5 border-top bg-light">
        <small>© <?php echo date("Y"); ?> Airbnb Clone — Todos los derechos reservados.</small>
    </footer>
</body>

</html>