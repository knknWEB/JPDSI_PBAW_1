{if $msgs->isMessage()}
    <section>
        <div class="container" data-aos="fade-up">
            <header class="section-header">
                {foreach $msgs->getMessages() as $msg}
                    {strip}
                    <div class="alert {if $msg->isInfo()}alert-success{/if}{if $msg->isWarning()}alert-warning{/if}{if $msg->isError()}alert-danger{/if}" role="alert">
                        {$msg->text}
                    </div>
                    {/strip}
                {/foreach}
            </header>
        </div>
    </section>
{/if}
