<!-- Sección Misión, Visión y Valores -->
<section class="mision-vision-valores">
    <div class="container contenedor-mision-vision ">
        <div class="row">

         <!-- Columna derecha: Valores -->
            <div class="col-lg-6">
                <div class="seccion-valores animate-slide-left">
                    <h2 class="titulo-seccion animate-fade">Contamos con todas las<br> habilitaciones necesarias para:</h2>
                                      
                    <ul class="lista-valores">
                        <li>
                          <img loading="lazy" src="<?= URL_IMG ?>/nosotros/check-2-circle-1-10.svg" class=" d-block" >
                            <span class="valor-texto">Transporte de cargas generales</span>
                        </li>
                        <li>
                          <img loading="lazy" src="<?= URL_IMG ?>/nosotros/check-2-circle-1-10.svg" class="d-block" >
                            <span class="valor-texto">Cargas peligrosas</span>
                        </li>
                        <li>
                          <img loading="lazy" src="<?= URL_IMG ?>/nosotros/check-2-circle-1-10.svg" class="d-block" >
                            <span class="valor-texto">Cargas completas</span>
                        </li>
                        <li>
                          <img loading="lazy" src="<?= URL_IMG ?>/nosotros/check-2-circle-1-10.svg" class="d-block" >
                            <span class="valor-texto">Cargas consolidadas</span>
                        </li>
                        <li>
                          <img loading="lazy" src="<?= URL_IMG ?>/nosotros/check-2-circle-1-10.svg" class="d-block" >
                            <span class="valor-texto">Contenedores</span>
                        </li>
                        <li>
                          <img loading="lazy" src="<?= URL_IMG ?>/nosotros/check-2-circle-1-10.svg" class="d-block" >
                            <span class="valor-texto">Cargas con extra medida</span>
                        </li>
                      
                    </ul>
                </div>
            </div>
            <!-- Columna izquierda: Misión y Visión -->
            <div class="col-lg-6">
                <img loading="lazy" class="image-container parallax animate-slide-right" data-parallax="0.2" src="<?= URL_IMG ?>/experiencia/camion2.png"  alt="Flota Transcal" /> 
            </div>
            
           
        </div>
    </div>
</section>

<style>


.mision-vision-valores {
    background-color: #F4F3F3;
    padding: 4rem 0;
    min-height: 60vh;
   
}

.titulo-seccion {
    font-size: 1.8rem;
    font-weight: bold;
    color: #333;
    margin-bottom: 2.5rem;
    font-family: 'Montserrat';
}

.separador-naranja {
    width: 60px;
    height: 5px;
    background-color: #E95A0A;
    margin-bottom: 1.5rem;
}

.descripcion-seccion {

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
    margin-top: 6rem;
}

.seccion-vision {
    margin-bottom: 0;
}

.lista-valores {
    /* Frame 11 */

/* Auto layout */
display: flex;
flex-direction: column;
align-items: flex-start;
padding: 0px;


}

.lista-valores li {
    display: flex;
    align-items: center;
    margin-bottom: 1rem;    
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
/* Transporte de cargas generales */
font-family: 'Montserrat';
font-style: normal;
font-weight: 500;
font-size: 20px;
line-height: 30px;
/* identical to box height, or 150% */

color: #000000;
margin-left: 1rem;


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
