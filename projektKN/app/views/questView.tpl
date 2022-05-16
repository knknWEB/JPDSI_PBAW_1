{extends file="main.tpl"}
{block name=about}
<br />
 <section id="recent-blog-posts" class="recent-blog-posts">
      <div class="container" data-aos="fade-up">
      <h3>Uzupełnij ankietę członkostwa:</h3>
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
                <div class="pure-controls">
                    <input type="submit" value="Zatwierdź!" class="pure-button pure-button-primary"/>
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

      </div>
</section>

{/block}