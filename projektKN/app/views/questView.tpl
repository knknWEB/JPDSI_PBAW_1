{extends file="main.tpl"}
{block name=hero} 
    <section class="breadcrumbs">
        <div class="container">
            <h1 >Uzupełnij ankietę członkostwa: </h1>
        </div>
    </section>
    <section id="hero" class="hero d-flex ">
        <div class="container" data-aos="fade-up">
         <form action="{$conf->action_root}quest" method="post" class="pure-form bottom-margin">
            <fieldset>
                <div class="col-lg-6 ">
                    <h5>Wybierz typ członkostwa: </h5>
                    <input type="radio" id="wspier" name="typeMember" value="Wspierający" required>
                    <label for="wspier">Wspierający </label><br />
                    <input type="radio" id="wplac" name="typeMember" value="Wpłacający" >
                    <label for="wplac">Wpłacający</label>
                </div>
                <div class="col-lg-6 ">
                   <label for="id_value"><h5>Podaj wartość szkody: </h5></label>
                    <input type="text" id="id_value" class="form-control" name="value" placeholder="Wartość w PLN"  required><br>
                </div>
                <div class="col-lg-6">
                    <label for="id_description"><h5>Opis szkody: </h5></label><br />
                    <textarea name="description" class="form-control" style="width:40em; height:20em;" required>
                     
                    </textarea>
                </div>
                <div class="col-lg-12">
                    <button type="submit" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center"/>Dołącz do nas!<i class="bi bi-arrow-right"></i></button>
                </div>
                {include file="messagesForm.tpl"}
            </fieldset>
        </form>	

      </div>
</section>

{/block}