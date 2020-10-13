<?php 
get_header();
?>
 <main class="landing">
        <div class="landing__description">
          <h2>
            <span> Fashion Designer </span><br />
            based in Milano
          </h2>
        </div>
        <div class="landing__name capitalize" data-aos="fade-up">
          <h1>mario mele</h1>
        </div>
        <img src="<?php echo WPE_INCLUDES ?>./img/lukania/lukania-5.jpg" alt="immagine del progetto lukania" class="landing__small-img" data-aos="fade-right" />
        <div class="landing__big-img">
          <img src="<?php echo WPE_INCLUDES ?>./img/lukania/bg_vediamo_s.png" alt="" data-aos="fade-up" />
        </div>
        <img src="<?php echo WPE_INCLUDES ?>./img/rettangolo-home.svg" alt="" class="landing__rectangle" />
        <div class="landing__scroll-down">
          <p>Dai un'occhiata ai miei progetti</p>
          <a href="#lukania"><img src="<?php echo WPE_INCLUDES ?>./img/icon-down.svg" alt="" /></a>
        </div>
      </main>
    </div>
    
    <!-- NON STATIC CONTENT -->
    <?php 
      if ( have_posts() ) {
        while ( have_posts() ) {
            the_post();
          the_content();
        }
    } else {
        get_template_part('template-parts/single/empty');
    }
    
    ?>
    <!-- <section id="lukania" class="project">
      <div class="project__gallery">
        <a href="./lukania.html">
          <div class="project__gallery__img-container">
            <img src="./img/lukania/lukania-1.jpg" alt="" /><img src="./img/lukania/lukania-7.jpg" alt="" /><img
              src="./img/lukania/lukania-2.jpg"
              alt="presentazione-galleria progetto lukania"
            />
          </div>
        </a>
      </div>
      <div class="project__description">
        <a href="#">
          <h2 class="h2-italic">. Lukania</h2>
          <p>Full/Winter 2020/2021</p>
          <p><span>@istitutomarangoni</span></p>
          <p>Palazzo Viceconte, Matera</p>
        </a>
      </div>
      <a class="project__btn" href="./lukania.html"
        ><button><p>Scopri di più</p></button></a
      >
    </section> -->
    <section id="time-is-now" class="project">
      <div class="project__video">
        <iframe
          src="https://www.youtube.com/embed/Tx9zMFodNtA"
          frameborder="0"
          allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
          allowfullscreen
        ></iframe>
      </div>
      <div class="project__description">
        <a href="#">
          <h2 class="h2-italic">. Time is now</h2>
          <p>Full/Winter 2020/2021</p>
          <p><span>@istitutomarangoni</span></p>
          <p>Palazzo Viceconte, Matera</p>
        </a>
      </div>
      <a class="project__btn" href="./time-is-now.html"
        ><button><p>Scopri di più</p></button></a
      >
    </section>
    <section id="trd-project" class="project">
      <div class="project__gallery">
        <a href="./progetto-3.html">
          <div class="project__gallery__img-container">
            <img src="./img/lukania/lukania-3.jpg" alt="" /><img src="./img/lukania/lukania-4.jpg" alt="" /><img
              src="./img/lukania/lukania-8.jpg"
              alt=""
            />
          </div>
        </a>
      </div>
      <div class="project__description">
        <a href="#">
          <h2 class="h2-italic">. Progetto 3</h2>
          <p>Full/Winter 2020/2021</p>
          <p><span>@istitutomarangoni</span></p>
          <p>Palazzo Viceconte, Matera</p>
        </a>
      </div>
      <a class="project__btn" href="./lukania.html"
        ><button><p>Scopri di più</p></button></a
      >
    </section>
    <section id="chi-sono" class="about">
      <h2 class="h2-italic">Mi presento.</h2>
      <div class="about__img-container">
        <img class="about__img-container__bio-pic" src="./img/bio-pic.jpg" alt="mario-mele" />
        <img class="about__img-container__blue-rec" src="./img/rettangolo-blu-about.svg" alt="" />
      </div>
      <div class="about__quote">
        <p class="about__quote__main">“La moda è la maniera di dire chi sei senza dover parlare.”</p>
        <p class="about__quote__author">Rachel Zoe</p>
      </div>
      <p class="about__bio paragraph">
        Amet mini <b>mollit</b> non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia <b>consequat</b> duis enim velit mollit.
        Exercitation veniam consequat sunt nostrud amet. Nulla Lorem mollit <b>cupidatat</b> irure. Laborum magna nulla duis ullamco cillum dolor.
        Voluptate <b>exercitation</b> incididunt aliquip deserunt reprehenderit elit laborum. Amet mini mollit non deserunt <b>ullamco</b> est sit
        aliqua dolor do amet sint. Velit officia <b>consequat</b> duis enim velit mollit. Exercitation veniam consequat sunt <b>nostrud</b> amet.
        Nulla Lorem mollit cupidatat irure. Laborum magna nulla duis ullamco <b>cillum</b> dolor. Voluptate exercitation incididunt aliquip deserunt
        re
      </p>
    </section>
    <section id="contattami" class="contact">
      <h2 class="h2-italic">Contattami.</h2>
      <div class="contact__info">
        <h3>e-mail</h3>
        <a href="mailto:marioemmemele@gmail.com"><p>marioemmemele@gmail.com</p></a>
        <h3>telefono</h3>
        <a href="tel:+39 3318531941"
          ><p>
            +39 331 8531941
          </p></a
        >
        <ul>
          <li>
            <a href="https://www.facebook.com/marioemmemele/"><img src="./img/fb_logo_white.svg" alt="mario-mele facebook" /></a>
          </li>
          <li>
            <a href="https://www.instagram.com/mario_emme_mele/"><img src="./img/instagram_logo_white.svg" alt="mario-mele instagram" /></a>
          </li>
        </ul>
      </div>
      <div class="contact__form">
        <!-- <form action="#">
          <input type="text" id="fname" name="firstname" placeholder="Nome" />
          <input type="text" id="email" name="email" placeholder="E-Mail" />
          <textarea type="text" id="message" name="message" placeholder="Messaggio..."></textarea>
          <button>
            <p>
              Invia
            </p>
          </button>
        </form> -->
      </div>
    </section>
<?php 
get_footer();
?>


