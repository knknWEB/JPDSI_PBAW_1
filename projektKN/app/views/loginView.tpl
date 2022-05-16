{extends file="main.tpl"}
{block name=hero} 
<section id="hero" class="hero d-flex align-items-center">
    <div class="container" data-aos="fade-up">
        <div class="col-lg-6 d-flex flex-column justify-content-center">
            <h1 >Zaloguj się do systemu: </h1>
        </div>
        <form action="{$conf->action_root}login" method="post" class="pure-form bottom-margin">
            <fieldset>
                <div class="col-lg-6">
                    <label for="id_login">Wprowadź swój login: </label>
                    <input type="text" id="id_login" name="login" class="form-control" placeholder="Login" value="{$form->login}" required>
                </div>
                <div class="col-lg-6 ">
                   <label for="id_pass">Wprowadź swoje hasło: </label>
                    <input type="password" id="id_pass" class="form-control" name="pass" placeholder="Hasło" required><br>
                </div>
                <div class="pure-controls">
                    <input type="submit" value="Zaloguj" class="pure-button pure-button-primary"/>
                </div>
                <div>
                    {block name=messages}

                    {if $msgs->isMessage()}
                    <div class="messages bottom-margin">
                        <ul>
                        {foreach $msgs->getMessages() as $msg}
                        {strip}
                            <li class="msg {if $msg->isError()}error{/if} {if $msg->isWarning()}warning{/if} {if $msg->isInfo()}info{/if}">{$msg->text}</li>
                        {/strip}
                        {/foreach}
                        </ul>
                    </div>
                    {/if}

                    {/block}
                </div>
            </fieldset>
        </form>	
        <div class="col-lg-12 d-flex flex-column justify-content-center">
        
            <h3>Nie masz konta? <a href="{$conf->action_root}registerShow">Zarejestruj się!<a> </h3>
        </div>


</section>
{/block}