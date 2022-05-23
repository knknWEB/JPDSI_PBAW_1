{extends file="main.tpl"}

{block name=hero} 
<section id="hero" class="hero d-flex align-items-center">
    <div class="container" data-aos="fade-up">
        <div class="col-lg-12 d-flex flex-column justify-content-center">
            <h1 >Zaloguj się do systemu: </h1>
        </div>
        <form action="{$conf->action_root}login" method="post" class="pure-form bottom-margin">
            <fieldset>
                <div class="col-lg-12">
                    <label for="id_login">Wprowadź swój login: </label>
                    <input type="text" id="id_login" name="login" class="form-control" placeholder="Login" value="{$form->login}" required>
                </div>
                <div class="col-lg-12">
                   <label for="id_pass">Wprowadź swoje hasło: </label>
                    <input type="password" id="id_pass" class="form-control" name="pass" placeholder="Hasło" required>
                </div>
                <div class="col-lg-12">
                    <button type="submit" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center"/>Zaloguj się<i class="bi bi-arrow-right"></i></button>
                </div>
                {include file="messages.tpl"}
            </fieldset>
        </form>	
        <div class="col-lg-12 d-flex flex-column justify-content-center">
            <h3>Nie masz konta? <a href="{$conf->action_root}registerShow">Zarejestruj się!<a> </h3>
        </div>
</section>
{/block}