{extends file="main.tpl"}
{block name=hero}  
  {include file="messages.tpl"}
  <section id="hero" class="hero d-flex align-items-center">
  <div class="container"> 
  <div class="row">
  <div class="col-lg-6 d-flex flex-column justify-content-center">
          <h1 data-aos="fade-up">Chrońmy nasze zdrowie!</h1>
          <h2 data-aos="fade-up" data-aos-delay="400">Nie pozwólmy niszczyć naszego zdrowia i mienia! Przerwijmy ten proceder!</h2>
          <div data-aos="fade-up" data-aos-delay="600">
            <div class="text-center text-lg-start">
              <a href="#about" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                <span>Więcej o nas!</span>
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
          <img src="{$conf->app_url}/img/logoWWW.png" class="img-fluid" alt="">
        </div>
      </div>
    </div>

</section>

{/block}
{block name=about} 
  
    <section id="about" class="about">

        <div class="container" data-aos="fade-up">
            <div class="row gx-0">

            <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
                <div class="content">
                <h3>Kim jesteśmy?</h3>
                <h2>Stowarzyszenie STOP DLA ODLEWNI powstało po to, aby chronić nasze zdrowie i środowisko. Nie mamy na celu zatrzymania odlewni!</h2>
                <p>
                    Jednym z głównych celów stowarzyszenia jest powstrzymanie emisyjności pyłów – opiłków żelaza, które zanieczyszczają nasze miasto w znaczącym stopniu.
                    Wielu z mieszkańców Zawiercia ma problem z opiłkami, które osiadają na wszystkich powierzchniach i tworzą szorstką powłokę, której nie można zmyć w domowych warunkach. Zniszczone dachy, panele fotowoltaiczne, okna, ogrodzenia, samochody, ulice, chodniki, kosze na śmieci… tych rzeczy jest znacznie więcej!
                </p>
                <div class="text-center text-lg-start">
                    <a href="{$conf->action_root}news" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                    <span>Czytaj więcej</span>
                    <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
                </div>
            </div>

            <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
                <img src="{$conf->app_url}/img/dron/sen1.jpg" class="img-fluid" alt="">
            </div>

            </div>
        </div>
    </section>
{/block}
{block name=values} 
<section id="values" class="values">
    <div class="container" data-aos="fade-up">
        <header class="section-header">
          <p>„Samotni możemy zrobić niewiele; razem możemy zrobić tak wiele.”</p>
          <h2>Helen Keller</h2>
        </header>
    </div>
</section>
{/block}


