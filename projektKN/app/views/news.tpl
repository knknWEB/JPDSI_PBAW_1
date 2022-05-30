{extends file="main.tpl"}
{block name=about}
     <!-- ======= Breadcrumbs ======= -->
     <section class="breadcrumbs">
     <div class="container">

       <ol>
         <li><a href="{$conf->action_root}">Strona główna</a></li>
         <li>Aktualności</li>
       </ol>
       <h2>Aktualności</h2>

     </div>
   </section><!-- End Breadcrumbs -->

    <section id="blog" class="blog">
    <div class="container" data-aos="fade-up">

      <div class="row">

        <div class="col-lg-8 entries">
        {foreach $news as $n}
          {strip}
            <article class="entry">

            <div class="entry-img">
              <img src="{$conf->app_url}/img/blog/{$n["Photo"]}" alt="" class="img-fluid">
            </div>

            <h2 class="entry-title">
              <a>{$n["Title"]}</a>
            </h2>

            <div class="entry-meta">
              <ul>
                <li class="d-flex align-items-center"><i class="bi bi-person"></i><a>{$n["Author"]}</a></li>
                <li class="d-flex align-items-center"><i class="bi bi-clock"></i> {$n["Date"]}</a></li>
              </ul>
            </div>

            <div class="entry-content">
              <p>
              {$n["Description"]}
              </p>
            </div>

          </article><!-- End blog entry -->
          {/strip}
      {/foreach}
{/block}