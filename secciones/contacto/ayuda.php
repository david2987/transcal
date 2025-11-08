<!-- Página de Contacto - Estamos para ayudarte -->
<section class="contacto-ayuda">
    <div class="container">
        <!-- Header Principal -->
        <div class="header-principal text-center mb-5">
            <h1>
                <span class="texto-gris">Estamos para</span>
                <span class="texto-naranja">ayudarte</span>
            </h1>
        </div>

        <!-- Contenido Principal -->
        <div class="row">
            <!-- Columna Izquierda: Mapa y Ubicación -->
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="tarjeta-ubicacion">
                    <!-- Mapa -->
                    <div class="mapa-container">                       
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3380.0177258036742!2d-63.026681499999995!3d-32.095806599999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95cc43e18a0d9451%3A0x70696cb4a28ddd8d!2sTRANSCAL%20SRL!5e0!3m2!1ses!2sar!4v1757373409129!5m2!1ses!2sar" 
                            width="100%" 
                            height="300" 
                            style="border:0;" 
                            allowfullscreen="" 
                            loading="lazy" 
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>

                    <!-- Información de Ubicación -->
                    <div class="info-ubicacion">
                        <h3 class="titulo-ubicacion">Ubicación</h3>
                        <p class="direccion">
                            Ruta Nacional N° 158 km 115.40<br>
                            La Playosa, Córdoba, Argentina
                        </p>
                    </div>
                </div>
            </div>

            <!-- Columna Derecha: Formulario de Contacto -->
            <div class="col-lg-6">
                <div class="tarjeta-formulario">
                    <h3 class="titulo-formulario">Formulario de contacto</h3>

                    <form class="formulario-contacto" action="procesar_formulario.php" method="POST">
                        <!-- Primera fila -->
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <input type="text" class="form-control texto-formulario" name="nombre" placeholder="Nombre" required>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control texto-formulario" name="apellido" placeholder="Apellido" required>
                            </div>
                        </div>

                        <!-- Segunda fila -->
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <input type="text" class="form-control texto-formulario" name="empresa" placeholder="Empresa">
                            </div>
                            <div class="col-md-6">
                                <input type="email" class="form-control texto-formulario" name="email" placeholder="Email" required>
                            </div>
                        </div>

                        <!-- Tercera fila -->
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <input type="tel" class="form-control texto-formulario" name="telefono" placeholder="Teléfono">
                            </div>
                            <div class="col-md-6">
                                <select class="form-control select-formulario" name="tipo_servicio">
                                    <option value="">Tipo de servicio requerido</option>
                                    <option value="carga_general">Carga General</option>
                                    <option value="carga_peligrosa">Carga Peligrosa</option>
                                    <option value="contenedores">Contenedores</option>
                                    <option value="carga_consolidada">Carga Consolidada</option>
                                    <option value="otro">Otro</option>
                                </select>
                            </div>
                        </div>

                        <!-- Cuarta fila - Mensaje -->
                        <div class="row mb-4">
                            <div class="col-12">
                                <textarea class="form-control texto-formulario" name="mensaje" rows="5" placeholder="Mensaje" required></textarea>
                            </div>
                        </div>

                        <!-- Botón Enviar -->
                        <div class="row">
                            <div class="col-12">
                                <button type="submit" class="btn-enviar">Enviar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .contacto-ayuda {
        background-color: white;
        padding: 4rem 0;
    }

    .header-principal h1 {
        font-size: 2.5rem;
        font-weight: bold;
        font-family: 'Montserrat';
        margin-bottom: 0;
    }

    .texto-gris {
        /* Estamos para ayudarte */
        font-family: 'Montserrat';
        font-style: normal;
        font-weight: 700;
        font-size: 35px;
        line-height: 43px;

    }

    .texto-naranja {
        font-family: 'Montserrat';
        font-style: normal;
        font-weight: 700;
        font-size: 35px;
        line-height: 43px;


        color: #E95A0A;


    }

    .tarjeta-ubicacion,
    .tarjeta-formulario {
        background: #F5F5F5;
        border-radius: 24px;
        padding: 2rem;
        height: 100%;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
    }

    .mapa-container {
        margin-bottom: 1.5rem;
    }

    .mapa-container iframe {
        border-radius: 6px;
    }

    .texto-formulario {
        /* Nombre */
        font-family: 'Montserrat' !important;
        font-style: normal;
        font-weight: 400 !important;
        font-size: 14px !important;
        line-height: 17px !important;
        /* identical to box height */
        display: flex;
        align-items: center;
        color: #000000 !important;
    }

    .select-formulario {
        font-family: 'Montserrat' !important;
        font-style: normal;
        font-weight: 400 !important;
        font-size: 13px !important;
        line-height: 17px !important;
        /* identical to box height */
        display: flex;
        align-items: center;
        color: #000000 !important;
    }

    .titulo-ubicacion {
        font-size: 1.4rem;
        font-weight: bold;
        color: #333;
        margin-bottom: 1rem;
        font-family: 'Montserrat';
    }

    .direccion {
        font-size: 1rem;
        color: #333;
        line-height: 1.5;
        margin-bottom: 0;
        font-family: 'Montserrat';
    }

    .titulo-formulario {
        /* Formulario de contacto */
        font-family: 'Montserrat';
        font-style: normal;
        font-weight: 700;
        font-size: 24px;
        line-height: 29px;
        margin-bottom: 7vh;

        color: #000000;


    }

    .formulario-contacto .form-control {
        border: 1px solid #ddd;
        border-radius: 6px;
        padding: 0.75rem;
        font-size: 0.95rem;
        font-family: 'Montserrat';
        background-color: white;
    }

    .formulario-contacto .form-control:focus {
        border-color: #E95A0A;
        box-shadow: 0 0 0 0.2rem rgba(233, 90, 10, 0.25);
    }

    .formulario-contacto .form-control::placeholder {
        color: #999;
    }

    .formulario-contacto select.form-control {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 20 20'%3e%3cpath stroke='%236b7280' stroke-linecap='round' stroke-linejoin='round' stroke-width='1.5' d='m6 8 4 4 4-4'/%3e%3c/svg%3e");
        background-position: right 0.5rem center;
        background-repeat: no-repeat;
        background-size: 1.5em 1.5em;
        padding-right: 2.5rem;
    }

    .btn-enviar {
        background-color: #E95A0A;
        color: white;
        border: none;
        border-radius: 8px;
        padding: 0.75rem 2rem;
        font-size: 1rem;
        font-weight: 600;
        font-family: 'Montserrat';
        cursor: pointer;
        transition: all 0.3s ease;
        width: 100%;
    }

    .btn-enviar:hover {
        background-color: #f56a1a;
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(233, 90, 10, 0.3);
    }

    /* Responsive */
    @media (max-width: 991.98px) {
        .header-principal h1 {
            font-size: 2.2rem;
        }

        .contacto-ayuda {
            padding: 3rem 0;
        }

        .tarjeta-ubicacion,
        .tarjeta-formulario {
            padding: 1.5rem;
        }
    }

    @media (max-width: 768px) {
        .header-principal h1 {
            font-size: 2rem;
        }

        .contacto-ayuda {
            padding: 2rem 0;
        }

        .tarjeta-ubicacion,
        .tarjeta-formulario {
            padding: 1.25rem;
        }

        .titulo-ubicacion,
        .titulo-formulario {
            font-size: 1.3rem;
        }
    }

    @media (max-width: 576px) {
        .header-principal h1 {
            font-size: 1.8rem;
        }

        .tarjeta-ubicacion,
        .tarjeta-formulario {
            padding: 1rem;
        }

        .formulario-contacto .form-control {
            font-size: 0.9rem;
            padding: 0.6rem;
            margin-top: 13px;
        }
    }
</style>