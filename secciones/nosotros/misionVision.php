<!-- Sección Misión, Visión y Valores -->
<section class="mision-vision-valores">
    <div class="container contenedor-mision-vision ">
        <div class="row">
            <!-- Columna izquierda: Misión y Visión -->
            <div class="col-lg-6">
                <!-- MISIÓN -->
                <div class="seccion-mision">
                    <h2 class="titulo-seccion">MISIÓN</h2>
                    <div class="separador-naranja"></div>
                    <p class="descripcion-seccion">
                        Brindar soluciones logisticas a nuestros clientes para que puedan desarrollar sus negocios de la manera más eficiente posible.
                    </p>
                </div>
                
                <!-- VISIÓN -->
                <div class="seccion-vision">
                    <h2 class="titulo-seccion">VISIÓN</h2>
                    <div class="separador-naranja"></div>
                    <p class="descripcion-seccion">
                        Desarrollar una red de soluciones logisticas en la que podamos llegar a todo el Mercosur ofreciendo excelencia en el servicio.
                    </p>
                </div>
            </div>
            
            <!-- Columna derecha: Valores -->
            <div class="col-lg-6">
                <div class="seccion-valores">
                    <h2 class="titulo-seccion">NUESTROS VALORES</h2>
                    <div class="separador-naranja"></div>
                    
                    <ul class="lista-valores">
                        <li>
                          <img src="<?= URL_IMG ?>/nosotros/check-2-circle-1-10.svg" class=" d-block" >
                            <span class="valor-texto">Honestidad</span>
                        </li>
                        <li>
                          <img src="<?= URL_IMG ?>/nosotros/check-2-circle-1-10.svg" class="d-block" >
                            <span class="valor-texto">Trabajo en equipo</span>
                        </li>
                        <li>
                          <img src="<?= URL_IMG ?>/nosotros/check-2-circle-1-10.svg" class="d-block" >
                            <span class="valor-texto">Profesionalismo</span>
                        </li>
                        <li>
                          <img src="<?= URL_IMG ?>/nosotros/check-2-circle-1-10.svg" class="d-block" >
                            <span class="valor-texto">Proactividad</span>
                        </li>
                        <li>
                          <img src="<?= URL_IMG ?>/nosotros/check-2-circle-1-10.svg" class="d-block" >
                            <span class="valor-texto">Responsabilidad</span>
                        </li>
                        <li>
                          <img src="<?= URL_IMG ?>/nosotros/check-2-circle-1-10.svg" class="d-block" >
                            <span class="valor-texto">Compromiso</span>
                        </li>
                        <li>
                          <img src="<?= URL_IMG ?>/nosotros/check-2-circle-1-10.svg" class="d-block" >
                            <span class="valor-texto">Confianza con los clientes</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
.contenedor-mision-vision{
    margin-top: 10vh;
}

.mision-vision-valores {
    background-color: #F4F3F3;
    padding: 4rem 0;
    min-height: 60vh;
    margin-top: 10vh;
}

.titulo-seccion {
    font-size: 1.8rem;
    font-weight: bold;
    color: #333;
    margin-bottom: 0.5rem;
    font-family: 'Montserrat';
    text-transform: uppercase;
}

.separador-naranja {
 /* Rectangle 67 */
    width: 100px;
    height: 5px;
    background-color: #FF6B35;
    margin-top: 2rem;
    margin-bottom: 2rem;
    border-radius: 2px;

}

.descripcion-seccion {
margin-bottom: 60px;
font-family: 'Montserrat';
font-style: normal;
font-weight: 500;
font-size: 18px;
line-height: 28px;
/* or 156% */
letter-spacing: -0.01em;

color: #000000;


}

.seccion-mision,
.seccion-vision,
.seccion-valores {
    margin-bottom: 2rem;
}

.seccion-vision {
    margin-bottom: 0;
}

.lista-valores {
    list-style: none;
    padding-left: 0;
    margin-bottom: 0;
}

.lista-valores li {
    display: flex;
    align-items: center;
    margin-bottom: 1rem;
    padding: 0.5rem 0;
}

.lista-valores li:last-child {
    margin-bottom: 0;
}
/* 
.checkmark {
   background: url('<?= URL_IMG ?>/nosotros/check-2-circle-1-10.svg') ;
   background-size: contain;
   width: 20px;
   width: 20px;
} */

.valor-texto {
   /* Profesionalismo */

font-family: 'Montserrat';
font-style: normal;
font-weight: 500;
font-size: 18px;
line-height: 30px;
/* identical to box height, or 167% */

color: #000000;


/* Inside auto layout */
flex: none;
order: 1;
flex-grow: 0;

}

/* Responsive */
@media (max-width: 991.98px) {
    .mision-vision-valores {
        padding: 3rem 0;
    }
}

@media (max-width: 768px) {
    .mision-vision-valores {
        padding: 2rem 0;
    }
    
    .titulo-seccion {
        font-size: 1.6rem;
    }
    
    .descripcion-seccion {
        font-size: 0.95rem;
    }
    
    .valor-texto {
        font-size: 0.95rem;
    }
}
</style>
