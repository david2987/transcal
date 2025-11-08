<nav class="navbar navbar-expand-lg navbar-light bg-transparnt " style="position: absolute;  width: 100%; z-index: 999; " >
    <div class="container">
        <!-- Logo TRANSCAL -->
        <a class="navbar-brand" href="index.php">            
            <img src="<?= URL_IMG ?>home/logo-blanco.png" class="w-block w-100" >                        
        </a>
        
        <!-- Botón hamburguesa para móvil -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav2">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <!-- Menú de navegación -->
        <div class="collapse navbar-collapse" id="navbarNav2">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active texto-transcal-naranja" href="index.php">INICIO</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link texto-transcal-blanco" href="servicios.php">SERVICIOS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link texto-transcal-blanco" href="nosotros.php">NOSOTROS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link texto-transcal-blanco" href="experiencia.php">EXPERIENCIA</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link texto-transcal-blanco" href="contacto.php">CONTACTO</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<style>
.navbar {
    height: 72px;
    padding: 1rem 0;
}

.navbar-brand {
    font-weight: bold;
    font-size: 1.8rem;
    text-decoration: none;
}

.logo-text {
    position: relative;
    font-family: 'Arial', sans-serif;
    font-weight: bold;
}

.trans-text {
    color: #FF6B35; /* Naranja */
}

.cal-text {
    color: #1E3A8A; /* Azul oscuro */
    position: relative;
}

.cal-swoosh {
    position: absolute;
    top: -2px;
    right: -8px;
    width: 12px;
    height: 8px;
    background: #1E3A8A;
    border-radius: 0 8px 0 0;
    transform: rotate(45deg);
}

.navbar-nav .nav-link {
    font-family: "Montserrat", sans-serif;    
    font-weight: 500;
    margin: 0 0.5rem;
    padding: 0.5rem 1rem;
    transition: color 0.3s ease;
}

.navbar-nav .nav-link:hover {
    color: #FF6B35 !important;
}

.navbar-nav .nav-link.active {
    color: #FF6B35 !important;
    position: relative;
}

.navbar-nav .nav-link.active::after {
    content: '';
    position: absolute;
    bottom: -5px;
    left: 50%;
    transform: translateX(-50%);
    width: 30px;
    height: 3px;
    background-color: #FF6B35;
    border-radius: 2px;
}

/* Responsive */
@media (max-width: 991.98px) {
    .navbar-nav {
        text-align: center;
        margin-top: 1rem;
    }
    
    .navbar-nav .nav-link {
        margin: 0.25rem 0;
    }
}
</style>


