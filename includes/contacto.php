<section id="contact" class="section">
    <div class="container">
      <div class="title col-md-8 col-sm-10 col-xs-12">
        <h1>Contacto</h1>
        <hr>
        <p>Llámanos al Cel. (667) 336 6365 o visítanos en carretera a Culiacancito km 7<br>
          (A sólo 5 minutos de la U. de O.) </p>
      </div>
    </div>

    <!-- Map -->
    <div id="map"></div>
    <!-- End Map -->

    <!-- Contact Details -->
    <div class="contact-details">
      <div class="container">
        <div class="col-md-4 col-sm-4 col-xs-12">
          <div class="detail">
            <i class="fa fa-map-marker"></i>
            <span>La Higuerita</span>
          </div>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-12">
          <div class="detail">
            <i class="fa fa-phone"></i>
            <span>(667) 336 6365</span>
          </div>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-12">
          <div class="detail last">
            <i class="fa fa-envelope"></i>
            <span>contacto@elalamocampestre.com</span>
          </div>
        </div>
      </div>
    </div>
    <!-- End Contact Details -->
    <div class="container">
      <div class="col-md-8 col-md-offset-2">
        <!-- Contact Form -->
        <div id="contact-form">
          <div class="form-sent" id="form-sent">
            <div class="alert alert-success">
              <strong>Tu mensaje ha sido enviado con éxito.</strong> Gracias por contactarnos.
            </div>
          </div>
          <div class="form-sent" id="form-error">
            <div class="alert alert-danger">
              Favor de completar todos los campos.
            </div>
          </div>
          <form method="post" action="contact.php" id="contact-us">
            <div class="col-md-5 col-sm-5 col-xs-12 animated hiding" data-animation="slideInLeft">
              <div class="form-group" id="group-name">
                <input type="text" name="fullname" id="fullname" class="form-control input-lg" placeholder="Nombre">
              </div>
              <div class="form-group">
                <input type="email" name="email" id="email" class="form-control input-lg" placeholder="Email">
              </div>
              <div class="form-group">
                <input type="text" name="phone" id="phone" class="form-control input-lg" placeholder="Teléfono">
              </div>
            </div>
            <div class="col-md-7 col-sm-7 col-xs-12 animated hiding" data-animation="slideInRight">
              <div class="form-group">
                <textarea name="message" id="message" class="form-control input-lg" placeholder="Mensaje"></textarea>
              </div>
            </div>
            <input type="button" class="btn btn-custom up animated hiding" value="Enviar Mensaje" data-animation="fadeInUpBig" onclick="sendMail()">
          </form>
        </div>
        <!-- End Contact Form -->
      </div>
    </div>        
  </section>