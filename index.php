<?php get_header(); ?>

<section id="content">
  <div class="container">
    <div class="col-sm-12">
      <h3>Notícias</h3>
      <hr>
      <div class="row">
      <?php query_posts('category_name=noticias&posts_per_page=3'); ?>

      <?php if( have_posts() ) : while( have_posts() ) : the_post();  ?>
      
          <?php get_template_part('content', get_post_format()); ?>

        <?php endwhile;?>
      
      <?php else : ?>
        <p class="lead"> Nenhuma publicação encontrada.</p>
      <?php endif; ?>
               
      </div>

      

      <div class="mb-5">
        <?php next_posts_link('Mais antigos'); ?>
        <?php previous_posts_link('Mais novas'); ?>
      </div>
      
      <hr>
    </div>
  </div>
</section>

<section id="galeria-de-fotos">
<div class="container">
  <div class="col-sm-12">
    <div class="row mb-2">
      <div class="col-sm">
        <h3>Galeria de fotos</h3>
      </div>
      <!-- div class="col-sm">
        <div class="row d-flex justify-content-end">
          <a href="#" class="btn btn-sm btn-success ml-2">Próximos eventos</a>
          <a href="#" class="btn btn-sm btn-ascorsan-search ml-2">Lojinha ascorsan</a>
        </div>
      </div -->
    </div>
    <div class="row">
      <div class="col-sm-3">
        <div class="card mb-4 box-shadow">
          <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Miniatura [100% x225]" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22483%22%20height%3D%22225%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20483%20225%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_16f9486d10a%20text%20%7B%20fill%3A%23eceeef%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A24pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_16f9486d10a%22%3E%3Crect%20width%3D%22483%22%20height%3D%22225%22%20fill%3D%22%2355595c%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22160.6171875%22%20y%3D%22123.3046875%22%3EThumbnail%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true" style=" width: 100%; display: block;">
          <div class="card-body">            
            <b>Titulo do album</b>
          </div>
        </div>
      </div>

      
      <div class="col-sm-3">
        <div class="card mb-4 box-shadow">
          <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Miniatura [100% x225]" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22483%22%20height%3D%22225%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20483%20225%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_16f9486d10a%20text%20%7B%20fill%3A%23eceeef%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A24pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_16f9486d10a%22%3E%3Crect%20width%3D%22483%22%20height%3D%22225%22%20fill%3D%22%2355595c%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22160.6171875%22%20y%3D%22123.3046875%22%3EThumbnail%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true" style=" width: 100%; display: block;">
          <div class="card-body">            
            <b>Titulo do album</b>
          </div>
        </div>
      </div>

      
      <div class="col-sm-3">
        <div class="card mb-4 box-shadow">
          <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Miniatura [100% x225]" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22483%22%20height%3D%22225%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20483%20225%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_16f9486d10a%20text%20%7B%20fill%3A%23eceeef%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A24pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_16f9486d10a%22%3E%3Crect%20width%3D%22483%22%20height%3D%22225%22%20fill%3D%22%2355595c%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22160.6171875%22%20y%3D%22123.3046875%22%3EThumbnail%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true" style=" width: 100%; display: block;">
          <div class="card-body">            
            <b>Titulo do album</b>
          </div>
        </div>
      </div>

      
      <div class="col-sm-3">
        <div class="card mb-4 box-shadow">
          <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Miniatura [100% x225]" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22483%22%20height%3D%22225%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20483%20225%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_16f9486d10a%20text%20%7B%20fill%3A%23eceeef%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A24pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_16f9486d10a%22%3E%3Crect%20width%3D%22483%22%20height%3D%22225%22%20fill%3D%22%2355595c%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22160.6171875%22%20y%3D%22123.3046875%22%3EThumbnail%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true" style=" width: 100%; display: block;">
          <div class="card-body">            
            <b>Titulo do album</b>
          </div>
        </div>
      </div>


    </div>
  </div>
</div>
</section>

<?php get_footer(); ?>
