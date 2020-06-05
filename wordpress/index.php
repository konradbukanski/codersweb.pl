<?php get_header(); ?>
    <section class="welcome">
        <!-- <img src="images/welcome.jpg" alt=""> -->
        <div class="welcome__text">
            <h1>Agnecja interaktywna</h1>
            <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur temporibus repellendus vel quae libero vitae natus reiciendis fugiat iste. Vero quos, perspiciatis esse qui error a repudiandae nesciunt illo harum!</span>
        </div>
        <svg id="curve" viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M-55.08,92.85 C349.55,176.74 369.86,73.13 644.69,99.76 L526.75,277.40 L-3.15,150.09 Z" style="stroke: none; fill: #fff;"></path></svg>
        <div class="scrolldown">
              <span></span>
          </div>
    </section>
    <section class="description">
        <!-- <div class="center">
            <div class="monitor">
                <div class="overlay"></div>
            </div>
        </div> -->
        <div class="description__item">
            <img src="images/website.jpg" alt="">
            <div class="description__item--text">
                <h2>Serwisy internetowe</h2>
                <span>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Error magnam saepe est aliquam fuga, incidunt repellat fugiat consequatur nam similique animi minus perferendis! Ullam consectetur velit perspiciatis dignissimos doloribus voluptatibus.</span>
            </div>
        </div>
        <div class="description__item">
            <div class="description__item--text">
                <h2>Sklepy internetowe</h2>
                <span>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Error magnam saepe est aliquam fuga, incidunt repellat fugiat consequatur nam similique animi minus perferendis! Ullam consectetur velit perspiciatis dignissimos doloribus voluptatibus.</span>
            </div>
            <img src="images/shops.jpg" alt="">
        </div>
        <div class="description__item">
            <img src="images/app.jpg" alt="">
            <div class="description__item--text">
                <h2>Aplikacje mobilne</h2>
                <span>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Error magnam saepe est aliquam fuga, incidunt repellat fugiat consequatur nam similique animi minus perferendis! Ullam consectetur velit perspiciatis dignissimos doloribus voluptatibus.</span>
            </div>
        </div>
        <button><a class="allservices" href="#">Wszystkie usługi  <i class="fas fa-arrow-right"></i></a></button>
        
    </section>
    <section class="projects">
        <h2>Poznaj wybrane realizacje</h2>
        <div class="projects__gallery">
            <div class="gallery__item"></div>
            <div class="gallery__item"></div>
            <div class="gallery__item"></div>
            <div class="gallery__item"></div>
            <div class="gallery__item"></div>
            <div class="gallery__item"></div>
        </div>
               
    </section>
    <section class="blog">
        <h2>Najnowszy wpis na blogu</h2>
        <div class="blog__item">

        </div>
        <a href="#">Zobacz inne wpisy</a>
    </section>
    <!-- <section class="contact">
        <h2>Masz pytania? Chcesz podjąć współpracę?</h2>
        <img src="images/contact.jpg" alt="">
        <a href="#">Skonaktuj się z nami  <i class="fas fa-arrow-right"></i></a>
    </section> -->
    <footer>

    </footer>
    <script src="https://code.jquery.com/jquery-3.5.0.slim.js">
    </script>
    <script src="javascript/header.js"></script>
    <script src="javascript/swiper.min.js"></script>
        <script>
            var swiper = new Swiper('.swiper-container', {
              effect: 'coverflow',
              grabCursor: true,
              centeredSlides: true,
              slidesPerView: 'auto',
              coverflowEffect: {
                rotate: 30,
                stretch: 0,
                depth: 200,
                modifier: 1,
                slideShadows : true,
              },
              pagination: {
                el: '.swiper-pagination',
              },
            });
          </script>
</body>
</html>