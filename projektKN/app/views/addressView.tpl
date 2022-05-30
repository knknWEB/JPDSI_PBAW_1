{extends file="main.tpl"}
{block name=hero} 
    <section class="breadcrumbs">
        <div class="container">
            <h1 >Uzupełnij adres: </h1>
        </div>
    </section><!-- End Breadcrumbs -->
    <section id="hero" class="hero d-flex ">
        <div class="container" data-aos="fade-up">
         <form action="{$conf->action_root}address" method="post" class="pure-form bottom-margin">
            <fieldset>
                <div class="col-lg-6 ">
                    <label for="id_post">Podaj kod pocztowy: *</label>
                    <input type="text" id="id_post" class="form-control" name="postcode" placeholder="Kod pocztowy" value="{$form->postcode}" required>
                </div>
                <div class="col-lg-6 ">
                    <label for="id_city">Podaj miasto: *</label>
                    <input type="text" id="id_city" class="form-control" name="city" placeholder="Miasto" value="{$form->city}" required>
                </div>
                <div class="col-lg-6">
                    <label for="id_street">Podaj ulicę: *</label>
                    <input type="text" id="id_street" name="street" class="form-control" placeholder="Ulica" value="{$form->street}" required>
                </div>
                <div class="col-lg-6">
                    <label for="id_login">Numer domu: *</label>
                    <input type="text" id="id_nofHouse" name="nofHouse" class="form-control" placeholder="Numer domu" value="{$form->nofHouse}" required>
                </div>
                <div class="col-lg-6 ">
                    <label for="id_nofFlat">Numer mieszkania </label>
                    <input type="nofFlat" id="id_nofFlat" class="form-control" name="nofFlat" placeholder="Numer mieszkania"><br>
                </div>
                <div class="col-lg-12">
                    <button type="submit" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">Zatwierdź<i class="bi bi-arrow-right"></i></button>
                </div>
            {include file="messagesForm.tpl"}
            </fieldset>
        </form>	

      </div>
</section>

{/block}