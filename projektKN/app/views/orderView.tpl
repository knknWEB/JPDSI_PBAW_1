{extends file="main.tpl"}
{block name=about}
    {include file="messages.tpl"}
    <section id="recent-blog-posts" class="recent-blog-posts">
      <div class="container" data-aos="fade-up">
        <header class="section-header">
        </header>
        <header class="section-header">
          <p>Złożone zamówienia</p>
          <h3>przez użytkownika {$records}</h3>
        </header>
        <div class="row">
            {foreach $orders as $o}
                {strip}
                    <div class="col-lg-4">
                        <div class="post-box">
                            <h3 class="post-title">Zamówienie nr {$o["OrderId"]} </h3>
                            <div class="price">Status: <b>{$o["OrderStatus"]}</b></div>
                            <div class="price">Złożone dnia: <b>{$o["OrderDate"]}</b></div>
                    <ul>
                        <li>Kwota zamówienia: <b>{$o["Price"]}</b><sub> PLN</sub></li>
                        <li>Zamówiony produkt: <b>{$o["ProductName"]}</b></li>
                            <ul>
                                <li>wymiary: <b>{$o["Type"]}</b></li>
                                <li>w opakowaniu: <b>{$o["QuantityInPackage"]}</b></li>
                            </uL>
                    </ul>
                    </div>
                </div>
                {/strip}
            {/foreach}
        
            
    </section>
{/block}
