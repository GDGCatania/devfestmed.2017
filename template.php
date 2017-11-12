<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="static/style.css?v=1.1">
  <title>GDG Devfest Mediterranean 2017</title>
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
</head>

<body>

  <section class="c-section">
    <div class="row">
      <div class="small-10 small-offset-1 small-order-2 medium-offset-0 medium-5 medium-order-1 column">
        <div class="row">
          <div class="column">
            <img src="static/datimages/title.svg" alt="GDG Devfest Mediterranean 2017">
          </div>
        </div>
        <div class="row">
          <div class="column">
            <div class="c-cta-box">
              <h2 class="c-cta-box__title">GDG DevFest Mediterranean 2017, cap. 2: tre giorni di formazione targati Google.</h2>
              <p>Le GDG DevFest sono grandi eventi rivolti (ma non limitati) a sviluppatori e designer incentrati sui temi del community building
            & management e sull'apprendimento delle tecnologie e delle metodologie di sviluppo made in Google.</p>
              <a class="button button--cta" href="https://www.eventbrite.it/e/biglietti-gdg-devfest-mediterranean-2017-cap-2-38979541859#tickets" target="_blank">Start playing</a>
            </div>
          </div>
        </div>
      </div>
      <div class="small-10 small-offset-1 medium-6 medium-offset-1 small-order-1 medium-order-1 column">
        <img src="static/images/claim.svg" alt="You can play if you may" class="head-claim">
      </div>
    </div>
  </section>

  <section class="c-section c-section--inverted">
    <h2 class="c-section__title">Speaker</h2>
    <hr class="c-section__divider">
    <div class="row medium-up-4 small-up-2">
      <?php foreach($data["speakers"] as $speaker): ?>
      <div class="column">
        <div class="c-speaker">
          <div style="background-image: url(static/images/speakers/<?php echo $speaker["photo"]; ?>)" class="c-speaker__photo"></div>
          <span class="c-speaker__name"><?php echo $speaker["full_name"]; ?></span>
          <span class="c-speaker__category <?php the_category_class($speaker); ?>"><?php the_category_name($speaker); ?></span>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </section>

  <section class="c-section">
    <h2 class="c-section__title">Speech</h2>
    <hr class="c-section__divider">
    <div class="row">
      <div class="column">
        <img src="static/images/speech.svg" class="show-for-medium" alt="Programma speech">
        <img src="static/images/speech1.svg" class="show-for-small-only" alt="Programma speech 17/11">
        <img src="static/images/speech2.svg" class="show-for-small-only" alt="Programma speech 18/11">
        <img src="static/images/speech3.svg" class="show-for-small-only" alt="Programma speech 19/11">
      </div>
    </div>
  </section>

  <section class="c-section">
    <h2 class="c-section__title">Attività</h2>
    <hr class="c-section__divider">
    <div class="row">
      <div class="column">
        <img src="static/images/activities.svg" class="show-for-medium" alt="Programma speech">
        <img src="static/images/activities1.svg" class="show-for-small-only" alt="Programma speech 17/11">
        <img src="static/images/activities2.svg" class="show-for-small-only" alt="Programma speech 18/11">
        <img src="static/images/activities3.svg" class="show-for-small-only" alt="Programma speech 19/11">        
      </div>
    </div>
  </section>

  <section class="c-section c-section--inverted">
    <h2 class="c-section__title">Sponsor</h2>
    <hr class="c-section__divider">
    <div class="row">
      <div class="small-10 small-offset-1 medium-offset-0 medium-12 column">
        <div class="row medium-up-8 small-up-2">
          <?php foreach ($data["sponsors"] as $sponsor) : ?>
          <div class="shrink column">
            <a href="<?php echo $sponsor["url"]; ?>" target="_blank">
              <div style="background-image: url(static/images/sponsor/<?php echo $sponsor["photo"]; ?>)" class="c-sponsor"></div>
            </a>
          </div> 
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </section>

  <section class="c-section c-section--inverted">
    <h2 class="c-section__title">Partners</h2>
    <hr class="c-section__divider">
    <div class="row">
      <div class="small-10 small-offset-1 medium-offset-0 medium-12 column">
        <div class="row medium-up-8 small-up-2">
          <?php foreach ($data["partners"] as $partner) : ?>
          <div class="column">
            <a href="<?php echo $partner["url"]; ?>" target="_blank">
              <div style="background-image: url(static/images/sponsor/<?php echo $partner["photo"]; ?>)" class="c-sponsor"></div>
            </a>
          </div> 
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </section>

  <section class="c-section c-section--inverted">
    <h2 class="c-section__title">Supporters</h2>
    <hr class="c-section__divider">
    <div class="row">
      <div class="small-10 small-offset-1 medium-offset-0 medium-12 column">
        <div class="row medium-up-8 small-up-2">
          <?php foreach ($data["supporters"] as $supporter) : ?>
          <div class="column">
            <a href="<?php echo $supporter["url"]; ?>" target="_blank">
              <div style="background-image: url(static/images/sponsor/<?php echo $supporter["photo"]; ?>)" class="c-sponsor"></div>
            </a>
          </div> 
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </section>

  <section class="c-section c-section--inverted">
    <h2 class="c-section__title">Organizers</h2>
    <hr class="c-section__divider">
    <div class="row">
      <div class="small-10 small-offset-1 medium-offset-0 medium-12 column">
        <div class="row medium-up-8 small-up-2">
          <?php foreach ($data["organizers"] as $organizer) : ?>
          <div class="column">
            <a href="<?php echo $organizer["url"]; ?>" target="_blank">
              <div style="background-image: url(static/images/sponsor/<?php echo $organizer["photo"]; ?>)" class="c-sponsor"></div>            
            </a>
          </div> 
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </section>

  <section class="c-section c-section--no-padding-bottom">
    <h2 class="c-section__title">Location</h2>
    <hr class="c-section__divider">

    <div class="row c-location">
      <div class="show-for-medium medium-7 column">
        <div class="c-location__photo" style="background-image: url(static/images/location/photo.jpg)"></div>
      </div>
      <div class="small-10 small-offset-1 medium-offset-0 medium-4 text-center medium-text-left">
        <img class="c-location__logo" src="static/images/location/logo.png" alt="Spazio Avanzamento Lavori">
        <address class="c-location__address"><strong>SAL - Spazio Avanzamento Lavori</strong> <br> Via Indaco 23 <br> 95129 Catania</address>
      </div>
    </div>

    <iframe width="100%" height="490" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJ4ZCG5Mr8ExMRyRaLwWMY7jc&key=AIzaSyBjL3pZVP5HV-KQFFtU45LpNkV5uTHxTD0"
      allowfullscreen></iframe>
  </section>

  <section class="c-section">
    <h2 class="c-section__title">About</h2>
    <hr class="c-section__divider">
    <div class="row">
      <div class="medium-10 medium-offset-1 column">
        <div class="row small-up-1 medium-up-2">
          <div class="column">
            <div class="c-organizer-info">
              <div class="row">
                <div class="shrink column">
                  <img src="static/images/gdgct.png" class="c-organizer-info__logo" alt="Google Developer Group Catania">
                </div>
                <div class="column">
                  <h3>Google Developers Group<br>Catania</h3>
                  <p>
                    Tramite i GDG (attualmente più di 600), Google supporta la comunità mondiale di sviluppatori e designer nelle attività di
                    condivisione della conoscenza riguardo alle tecnologie e metodologie di sviluppo.
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="column">
            <div class="c-organizer-info">
              <div class="row">
                <div class="shrink column">
                  <img src="static/images/wtm.png" class="c-organizer-info__logo" alt="Women Techmakers Catania">
                </div>
                <div class="column">
                  <h3>Women Techmakers<br>Catania</h3>
                    <p>Tramite Women Techmakers, Google supporta la comunità mondiale di sviluppatori e designer nelle attività di sensibilizzazione
                intorno ai temi della diversity e dell'inclusione femminile nelle professioni tech.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="c-section">
      <div class="row align-center-middle">
          <div class="shrink column text-center">
              <a href="https://www.facebook.com/gdgcatania/" target="_blank"><img src="static/images/facebook.png" alt="Facebook" class="c-social-icon"></a>
          </div>
          <div class="shrink column text-center">
              <a href="https://twitter.com/gdgcatania" target="_blank"><img src="static/images/twitter.png" alt="Twitter" class="c-social-icon"></a>
          </div>
      </div>
  </section>

</body>

</html>
