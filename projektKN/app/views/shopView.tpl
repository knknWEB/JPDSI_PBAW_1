{extends file="main.tpl"}
{block name=hero} 
    <section class="breadcrumbs">
        <div class="container">
            <h1 >Sklep materiałów reklamowych </h1>
        </div>
    </section>
{/block}
{block name="about"}
<!-- ======= Pricing Section ======= -->
<section id="pricing" class="pricing">

<div class="container" data-aos="fade-up">

  <header class="section-header">
    <h2>Materiały reklamowe</h2>
    <p>Zapoznaj się z ofertą!</p>
  </header>

  <div class="row gy-4" data-aos="fade-left">
{foreach $products as $p}
    {strip}
        <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="100">
        <div class="box">
          <h3 >{$p["ProductName"]}</h3>
          <div class="price"><sup>PLN</sup>{$p["Price"]}<span> / 00</span></div>
          <img  width="99%" src="{$conf->app_url}/img/shop/{$p["ProductId"]}.png" />
          <ul>
            <li>stopdlaodlewni.pl</li>
            <li>Rozmiar: <b>{$p["Type"]}</b></li>
            <li>Ilość w opakowaniu: {$p["QuantityInPackage"]}</li>
          </ul>
          <form action="{$conf->action_root}shopBuy" method="post" class="pure-form bottom-margin">
                <div class="col-lg-12">
                    <input type="hidden" value="{$p["Price"]}" name="price">
                    <button type="submit" value="{$p["ProductId"]}" name="produktid" class="btn-buy">Zamów teraz!<i class="bi bi-arrow-right"></i></button>
                </div>
        </form>	
          {* <a href="{$conf->action_root}shopBuy" class="btn-buy">Zamów teraz</a> *}
        </div>
      </div>
    {/strip}
{/foreach}

</div>
<section>
    <header class="section-header">
        <h2>Dla członków Wspierających</h2>
        <p>WSZYSTKIE MATERIAŁY SĄ ZA DARMO!</p>
    </header>
    
</section>

</section><!-- End Pricing Section -->
{/block}