<!DOCTYPE html>

<html lang="es">



<head>

  <meta charset="UTF-8">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Realiza tu reserva - Airbnb Clone</title>



  <!-- Bootstrap -->

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"

    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"

    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">

  </script>



  <!-- Estilos propios -->

  <link rel="stylesheet" href="../components/header/header.css" />

  <!-- Si luego quieres estilos propios para esta página,

     crea reservas.css en esta misma carpeta y descomenta: -->

  <!-- <link rel="stylesheet" href="./reservas.css" /> -->

</head>



<body>

  <!-- Header común -->

  <?php include '../components/header/header.php'; ?>



  <main class="container py-4">



    <!-- Título -->

    <section class="section-title mb-4">

      <h2 class="fw-bold">Realiza tu reserva</h2>

      <p class="text-muted mb-0">

        Completa los datos para reservar tu alojamiento en Arequipa.

      </p>

    </section>



    <!-- CONTENIDO: FORMULARIO + RESUMEN -->

    <section class="row g-4">



      <!-- FORMULARIO -->

      <div class="col-12 col-lg-8">

        <form action="procesar_reserva.php" method="POST" class="card shadow-sm border-0 p-4">



          <!-- DATOS DEL HUÉSPED -->

          <h5 class="mb-3 fw-bold">Datos del huésped</h5>

          <div class="row g-3 mb-4">

            <div class="col-md-6">

              <label for="nombre" class="form-label">Nombre</label>

              <input type="text" class="form-control" id="nombre" name="nombre" required>

            </div>

            <div class="col-md-6">

              <label for="apellido" class="form-label">Apellido</label>

              <input type="text" class="form-control" id="apellido" name="apellido" required>

            </div>

            <div class="col-md-6">

              <label for="email" class="form-label">Correo electrónico</label>

              <input type="email" class="form-control" id="email" name="email" required>

            </div>

            <div class="col-md-6">

              <label for="telefono" class="form-label">Teléfono</label>

              <input type="tel" class="form-control" id="telefono" name="telefono" required>

            </div>

            <div class="col-md-6">

              <label for="documento" class="form-label">Documento de identidad (DNI / Pasaporte)</label>

              <input type="text" class="form-control" id="documento" name="documento">

            </div>

            <div class="col-md-6">

              <label for="pais" class="form-label">País de residencia</label>

              <input type="text" class="form-control" id="pais" name="pais">

            </div>

          </div>



          <hr>



          <!-- DETALLES DE LA RESERVA -->

          <h5 class="mb-3 fw-bold">Detalles de la reserva</h5>

          <div class="row g-3 mb-4">

            <div class="col-md-6">

              <label for="alojamiento" class="form-label">Alojamiento</label>

              <select class="form-select" id="alojamiento" name="alojamiento" required>

                <option value="" selected disabled>Selecciona una opción</option>

                <option value="Lugar para quedarse en Arequipa">Lugar para quedarse en Arequipa</option>

                <option value="Apartamento en Cayma">Apartamento en Cayma</option>

                <option value="Habitación en Arequipa">Habitación en Arequipa</option>

                <option value="Loft en Cercado de Arequipa">Loft en Cercado de Arequipa</option>

              </select>

            </div>



            <div class="col-md-6">

              <label for="ciudad" class="form-label">Ciudad / Destino</label>

              <input type="text" class="form-control" id="ciudad" name="ciudad" value="Arequipa">

            </div>



            <div class="col-md-6">

              <label for="checkin" class="form-label">Check-in</label>

              <input type="date" class="form-control" id="checkin" name="checkin" required>

            </div>



            <div class="col-md-6">

              <label for="checkout" class="form-label">Check-out</label>

              <input type="date" class="form-control" id="checkout" name="checkout" required>

            </div>



            <div class="col-md-3">

              <label for="adultos" class="form-label">Adultos</label>

              <input type="number" class="form-control" id="adultos" name="adultos" min="1" value="1"

                required>

            </div>



            <div class="col-md-3">

              <label for="ninos" class="form-label">Niños</label>

              <input type="number" class="form-control" id="ninos" name="ninos" min="0" value="0">

            </div>



            <div class="col-md-3">

              <label for="bebes" class="form-label">Bebés</label>

              <input type="number" class="form-control" id="bebes" name="bebes" min="0" value="0">

            </div>



            <div class="col-md-3">

              <label for="mascotas" class="form-label">Mascotas</label>

              <input type="number" class="form-control" id="mascotas" name="mascotas" min="0" value="0">

            </div>

          </div>



          <hr>



          <!-- PREFERENCIAS ADICIONALES -->

          <h5 class="mb-3 fw-bold">Preferencias adicionales</h5>

          <div class="row g-3 mb-4">

            <div class="col-md-6">

              <label for="horaLlegada" class="form-label">Hora aproximada de llegada</label>

              <input type="time" class="form-control" id="horaLlegada" name="horaLlegada">

            </div>



            <div class="col-md-6">

              <label for="motivo" class="form-label">Motivo del viaje</label>

              <select class="form-select" id="motivo" name="motivo">

                <option value="" selected>Selecciona una opción</option>

                <option value="Turismo">Turismo</option>

                <option value="Trabajo">Trabajo</option>

                <option value="Visita familiar">Visita familiar</option>

                <option value="Otro">Otro</option>

              </select>

            </div>



            <div class="col-12">

              <label class="form-label">Servicios adicionales</label>

              <div class="row">

                <div class="col-md-6">

                  <div class="form-check">

                    <input class="form-check-input" type="checkbox" value="Desayuno incluido"

                      id="servicioDesayuno" name="servicios[]">

                    <label class="form-check-label" for="servicioDesayuno">

                      Desayuno incluido

                    </label>

                  </div>



                  <div class="form-check">

                    <input class="form-check-input" type="checkbox" value="Transporte aeropuerto"

                      id="servicioTransporte" name="servicios[]">

                    <label class="form-check-label" for="servicioTransporte">

                      Transporte desde/hacia el aeropuerto

                    </label>

                  </div>

                </div>



                <div class="col-md-6">

                  <div class="form-check">

                    <input class="form-check-input" type="checkbox" value="Tours" id="servicioTours"

                      name="servicios[]">

                    <label class="form-check-label" for="servicioTours">

                      Tours por la ciudad

                    </label>

                  </div>



                  <div class="form-check">

                    <input class="form-check-input" type="checkbox" value="Spa" id="servicioSpa"

                      name="servicios[]">

                    <label class="form-check-label" for="servicioSpa">

                      Acceso a spa

                    </label>

                  </div>

                </div>

              </div>

            </div>



            <div class="col-12">

              <label for="mensaje" class="form-label">Mensaje para el anfitrión</label>

              <textarea class="form-control" id="mensaje" name="mensaje" rows="4"

                placeholder="Cuéntale al anfitrión el motivo de tu viaje o peticiones especiales (horarios, alergias, etc.)"></textarea>

            </div>

          </div>



          <hr>



          <!-- MÉTODO DE PAGO -->

          <h5 class="mb-3 fw-bold">Método de pago</h5>

          <div class="row g-3 mb-4">

            <div class="col-md-6">

              <label class="form-label d-block">Selecciona un método</label>



              <div class="form-check">

                <input class="form-check-input" type="radio" name="metodo_pago" id="pagoTarjeta"

                  value="Tarjeta" checked>

                <label class="form-check-label" for="pagoTarjeta">

                  Tarjeta de crédito / débito

                </label>

              </div>



              <div class="form-check">

                <input class="form-check-input" type="radio" name="metodo_pago" id="pagoYape"

                  value="Yape / Plin">

                <label class="form-check-label" for="pagoYape">

                  Yape / Plin

                </label>

              </div>



              <div class="form-check">

                <input class="form-check-input" type="radio" name="metodo_pago" id="pagoEfectivo"

                  value="Efectivo">

                <label class="form-check-label" for="pagoEfectivo">

                  Pago en efectivo al llegar

                </label>

              </div>

            </div>

          </div>



          <div class="form-check mb-3">

            <input class="form-check-input" type="checkbox" value="1" id="terminos" name="terminos" required>

            <label class="form-check-label" for="terminos">

              Acepto las políticas de cancelación y las normas del alojamiento.

            </label>

          </div>



          <div class="d-flex justify-content-end">

            <button type="submit" class="btn btn-danger btn-lg">

              Confirmar reserva

            </button>

          </div>



        </form>

      </div>



      <!-- RESUMEN DEL ALOJAMIENTO -->

      <div class="col-12 col-lg-4">

        <div class="card shadow-sm border-0">

          <!-- Imagen siguiendo la misma estructura que el resto de vistas -->

          <img src="../../public/assets/cama2.jpg" class="card-img-top" alt="Apartamento en Cayma">



          <div class="card-body">

            <h5 class="card-title">Apartamento en Cayma</h5>

            <p class="card-text text-muted mb-1">S/264 por 2 noches • ⭐ 5.0</p>

            <p class="small text-muted mb-3">Arequipa, Perú</p>



            <hr>



            <h6 class="fw-bold">Resumen estimado</h6>

            <ul class="list-unstyled small mb-3">

              <li>• S/264 por 2 noches</li>

              <li>• S/36 comisión de servicio (aprox.)</li>

              <li>• Impuestos incluidos</li>

            </ul>



            <div class="d-flex justify-content-between fw-bold">

              <span>Total</span>

              <span>S/300</span>

            </div>

            <p class="small text-muted mt-2 mb-0">

              El total puede variar según las fechas, número de huéspedes y servicios adicionales.

            </p>

          </div>

        </div>

      </div>



    </section>



  </main>



  <!-- Footer común -->

  <?php include '../components/footer/footer.php'; ?>



</body>



</html>

