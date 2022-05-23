{extends file="main.tpl"}
{block name=about}
    {include file="messages.tpl"}
    <section id="recent-blog-posts" class="recent-blog-posts">
      <div class="container" data-aos="fade-up">
        <header class="section-header">
        </header>
        <header class="section-header">
          <p>Panel użytkownika - członkostwa</p>
          <h3>Witaj {$users["Name"]}!</h3>
        </header>

        <div class="row">
            <div class="col-lg-4">
                <div class="post-box">
                    <h3 class="post-title">Członek: </h3>
                    <table >
                        <thead>
                            <tr>
                                <td>Imię i nazwisko: </td>
                                <th>{$users["Name"]} {$users["Surname"]}</th>
                            </tr>
                            <tr>
                                <td>Adres e-mail:</td>
                                <th>{$users["Mail"]}</th>
                            </tr>
                            <tr>
                                <td>Login:</td>
                                <th>{$users["Login"]}</th>
                            </tr>
                            <td>Adres: </td>
                                <th>
                                    {if $address_is eq 1}{$address["city"]}, {$address["postcode"]} {/if}
                                    {if $address_no_is eq 1} Nieuzupełniony! {/if}  
                                </th>
                            </tr>
                            <td>Ulica i numer: </td>
                                <th>
                                    {if $address_is eq 1}{$address["street"]}, {$address["nofHouse"]} {if $address["nofFlat"]!=null} / {$address["nofFlat"]}{/if}{/if}
                                    {if $address_no_is eq 1} Nieuzupełniony! {/if}  
                                </th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="post-box">
                    <h3 class="post-title">Status członkostwa: </h3>
                    <table>
                        <thead>
                            <tr>
                                <td>Typ członkostwa: </td>
                                <th>
                                    {if $participant_is eq 1}{$participant["TypeOfMember"]}{/if}
                                    {if $participant_no_is eq 1} Brak {/if}
                                </th>
                            </tr>
                            <tr>
                                <td>Członek stowarzyszenia od: </td>
                                <th>
                                    {if $participant_is eq 1}{$participant["ParticipeDate"]}{/if}
                                    {if $participant_no_is eq 1} Brak {/if}  
                                </th>
                            </tr>
                            <tr>
                            <td>Deklarowana kwota strat: </td>
                                <th>
                                    {if $participant_is eq 1}{$participant["ValueLoss"]} PLN{/if}
                                    {if $participant_no_is eq 1} Brak {/if}  
                                </th>
                            </tr>
                            
                            
                        </thead>
                    </table>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="post-box">                                             
                    <h3 class="post-title">Dokumenty: </h3>
                    <table>
                        <thead>
                            <tr>
                                <td>Adres zamieszkania: </td>
                                <th>
                                    {if $address_is eq 1}Adres uzupełniony{/if}
                                    {if $address_no_is eq 1}<a href="{$conf->action_root}addressView"> Uzupełnij adres!<a>{/if}  
                                </th>
                            </tr>
                            <tr>
                                <td>Ankieta członkostwa: </td>
                                <th>
                                    {if $participant_is eq 1}Ankieta uzupełniona{/if}
                                    {if $participant_no_is eq 1}<a href="{$conf->action_root}questView"> Uzupełnij ankietę!<a>{/if}  
                                </th>
                            </tr>
                        </thead>
                    </table>
                    <br>
                    
                </div>
                
            </div>
            
        {include file="newsPanel.tpl"}
    </section>
{/block}
