{extends file="main.tpl"}
{block name=hero} 
    <section class="breadcrumbs">
        <div class="container">
        <ol>
        <li><a href="{$conf->action_root}">Strona główna</a></li>
        <li>Sklep</li>
      </ol>
      <h2>Sklep materiałów reklamowych</h2>
        </div>
    </section>
{/block}
{block name="about"}
<section id="pricing" class="pricing">

<div class="container" data-aos="fade-up">

  <header class="section-header">
    <h2>Materiały reklamowe</h2>
    <p>{if $isRole eq 1}Jesteś członkiem wpłacającym. Materiały są darmowe! {else}Zapoznaj się z ofertą!{/if}</p>
  </header>

  <div class="row gy-4" data-aos="fade-left">
{foreach $products as $p}
    {strip}
        <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="100">
        <div class="box">
          <h3 >{$p["ProductName"]}</h3>
            <div class="price"><sup>PLN</sup>
            {if $isRole eq 1}0
            {else}{$p["Price"]}{/if}
            <span> / 00</span></div>
          <img  width="99%" src="{$conf->app_url}/img/shop/{$p["ProductId"]}.png" />
          <ul>
            <li>stopdlaodlewni.pl</li>
            <li>Rozmiar: <b>{$p["Type"]}</b></li>
            <li>Ilość w opakowaniu: {$p["QuantityInPackage"]}</li>
          </ul>
          <a href="{$conf->action_root}shopBuy/{$p["ProductId"]}/{$p["Price"]}" class="btn-buy" onclick="return confirm(' Czy na pewno chcesz złożyć zamówienie na {$p["ProductName"]}? ')">Zamów teraz</a> 
        </div>
      </div>
    {/strip}
{/foreach}

</div>
<section>
    <header class="section-header">
        <h2>Dla członków wpłacających</h2>
        <p>WSZYSTKIE MATERIAŁY SĄ ZA DARMO!</p>
    </header>
    
</section>
</section>
{/block}