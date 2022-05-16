{extends file="main.tpl"}
{block name=about}

    <section id="recent-blog-posts" class="recent-blog-posts">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <p>Panel użytkownika - członkostwa</p>
          <h3>Witaj {$users["Name"]}!</h3>
        </header>

        <div class="row">
            <div class="col-lg-4">
                <h3 class="post-title">Członek: </h3>
                <table class="pure-table">
                    <thead>
                        <tr>
                            <td>Imię: </td>
                            <th>{$users["Name"]}</th>
                        </tr>
                        <tr>
                            <td>Nazwisko:</td>
                            <th>{$users["Surname"]}</th>
                        </tr>
                        <tr>
                            <td>Adres e-mail:</td>
                            <th>{$users["Mail"]}</th>
                        </tr>
                        <tr>
                            <td>Login:</td>
                            <th>{$users["Login"]}</th>
                        </tr>
                        <tr>
                            <td>Unikalne ID:</td>
                            <th>{$users["UserId"]}</th>
                        </tr>
                    </thead>
                </table>
            </div>
            <div class="col-lg-4">
                <h3 class="post-title">Status członkostwa: </h3>
                <table class="pure-table">
                    <thead>
                        <tr>
                            <td>Członek: </td>
                            <th>
                                {if $participant_is eq 1}{$participant["TypeOfMember"]}{/if}
                                {if $participant_no_is eq 1} Brak {/if}
                            </th>
                        </tr>
                        <tr>
                            <td>Zarejestrowany w systemie od: </td>
                            <th>
                                {if $participant_is eq 1}{$participant["ParticipeDate"]}{/if}
                                {if $participant_no_is eq 1} Brak {/if}  
                            </th>
                        </tr>
                        
                        
                    </thead>
                </table>
            </div>
            <div class="col-lg-4">
                <h3 class="post-title">Dokumenty: </h3>
                <table class="pure-table">
                    <thead>
                        <tr>
                            <td>Adres zamieszkania: </td>
                            <th>
                                <a href="{$conf->action_root}addresShow">Dodaj adres!<a>
                            </th>
                        </tr>
                        <tr>
                            <td>Ankieta członkostwa: </td>
                            <th>
                                {if $participant_is eq 1}Ankieta uzupełniona{/if}
                                {if $participant_no_is eq 1}<a href="{$conf->action_root}questView"> Uzupełnij ankietę!<a>{/if}  
                            </th>
                        </tr>
                          <tr>
                            <td>Ankieta strat: </td>
                            <th>
                                <a href="{$conf->action_root}addresShow">Wyceń straty!<a>
                            </th>
                        </tr>
                    
                    </thead>
                </table>
                <br>
            </div>
        {include file="news.tpl"}
    </section>
{/block}
