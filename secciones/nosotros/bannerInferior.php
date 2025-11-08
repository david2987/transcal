  <div class="w-100  d-none d-md-block">
      <div id="carouselExampleSlidesOnly" class="carousel slide carousel-fade" data-ride="carousel">
          <div class="carousel-inner">
              <div class="carousel-item active">
                  <img class="d-block w-100" src="<?= URL_IMG ?>/nosotros/banner1.png" alt="First slide">
              </div>
              <div class="carousel-item">
                  <img class="d-block w-100" src="<?= URL_IMG ?>/nosotros/banner2.png" alt="Second slide">
              </div>
              <div class="carousel-item">
                  <img class="d-block w-100" src="<?= URL_IMG ?>/nosotros/banner3.png" alt="Third slide">
              </div>
          </div>
      </div>
  </div>
  <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-ride="carousel">
      <div class="carousel-inner">

          <!-- Slide 1 -->
          <div class="carousel-item active">
              <!-- Imagen mobile -->
              <div class="imagenBannerMobile-inferior d-block d-md-none"></div>
          </div>

           <!-- Slide 2 -->
          <div class="carousel-item ">
              <!-- Imagen mobile -->
              <div class="imagenBannerMobile-inferior-2 d-block d-md-none"></div>
          </div>

           <!-- Slide 3 -->
          <div class="carousel-item ">
              <!-- Imagen mobile -->
              <div class="imagenBannerMobile-inferior-3 d-block d-md-none"></div>
          </div>
      </div>
  </div>

  <style>
      .imagenBannerMobile-inferior {
          background-image: url('<?= URL_IMG ?>/nosotros/banner1.png');
          background-repeat: no-repeat;
          background-position: 50% 100%;
          /* El alto se ajustará para mantener la proporción de la imagen. */
          height: 400px;
          width: 100%;
        background-size: 150%;
      }

        .imagenBannerMobile-inferior-2 {
          background-image: url('<?= URL_IMG ?>/nosotros/banner2.png');
          background-repeat: no-repeat;
          background-position: 50% 100%;
          /* El alto se ajustará para mantener la proporción de la imagen. */
          height: 400px;
          width: 100%;
        background-size: 150%;
      }

        .imagenBannerMobile-inferior-3 {
          background-image: url('<?= URL_IMG ?>/nosotros/banner3.png');
          background-repeat: no-repeat;
          background-position: 50% 100%;
          /* El alto se ajustará para mantener la proporción de la imagen. */
          height: 400px;
          width: 100%;
        background-size: 150%;
      }

      /* Frame 16 */

  </style>