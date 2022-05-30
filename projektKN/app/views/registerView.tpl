{extends file="main.tpl"}
{block name=hero} 
    <section class="breadcrumbs">
        <div class="container">
            <h1 >Zarejestruj się do systemu: </h1>
        </div>
    </section><!-- End Breadcrumbs -->
    <section id="hero" class="hero d-flex ">
        <div class="container" data-aos="fade-up">
            
            <form action="{$conf->action_root}register" method="post" class="pure-form bottom-margin">
                <fieldset>
                    <div class="col-lg-6 ">
                    <label for="id_name">Podaj swoje imię: </label>
                        <input type="text" id="id_name" class="form-control" name="name" placeholder="Imię" value="{$form->name}" required><br>
                    </div>
                    <div class="col-lg-6 ">
                    <label for="id_surname">Podaj swoje nazwisko: </label>
                        <input type="text" id="id_surname" class="form-control" name="surname" placeholder="Nazwisko" value="{$form->surname}" required><br>
                    </div>
                    <div class="col-lg-6">
                        <label for="id_mail">Wprowadź swój adres e-mail: </label>
                        <input type="text" id="id_mail" name="mail" class="form-control" placeholder="E-mail" value="{$form->mail}" required>
                    </div>
                    <div class="col-lg-6">
                        <label for="id_login">Wprowadź swój login: </label>
                        <input type="text" id="id_login" name="login" class="form-control" placeholder="Login" value="{$form->login}" required>
                    </div>
                    <div class="col-lg-6 ">
                    <label for="id_pass">Wprowadź swoje hasło: </label>
                        <input type="password" id="id_pass" class="form-control" name="pass" placeholder="Hasło" required><br>
                    </div>
                    <div class="col-lg-6 ">
                    <label for="id_pass2">Powtórz swoje hasło: </label>
                        <input type="password" id="id_pass2" class="form-control" name="pass2" placeholder="Hasło" required><br>
                    </div>
                    <div class="col-lg-12">
                        <button type="submit" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center"/>Zarejestruj się<i class="bi bi-arrow-right"></i></button>
                    </div>
                </fieldset>
            </form>	
            {include file="messagesForm.tpl"}
            <div class="col-lg-12 d-flex flex-column justify-content-center">
                <h3>Masz już konto? <a href="{$conf->action_root}loginShow">Zaloguj się!<a> </h3>
            </div>
    </section>
    
{/block}