<?php
/**
 * Template part for displaying Navigation
 *
 * @package brisko
 */

?>


<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>


<!-- ----------------------------- -->


<div class="align-items-center brisko-navigation">




<nav class="navbar navbar-expand-lg navbar-light bg-light">
	<a href="http://project-work.test/"><img src="https://pngimg.com/uploads/twitter/twitter_PNG2.png" width="30" alt=""></a>
  <a class="navbar-brand" href="http://project-work.test/" style="margin-left: 10px;">Twitter Blog</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="http://project-work.test/">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://project-work.test/?cat=3">Events</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="http://project-work.test/?cat=5">Insights</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="http://project-work.test/?cat=4">Product</a>
      </li>
    </ul>
  </div>
</nav>






	<div class="<?php Brisko\Theme::options()->navigation_width(); ?> d-flex flex-column flex-md-row align-items-center">
		<div class="mr-md-auto d-flex flex-column flex-md-row align-items-center">
			<?php if ( has_custom_logo() ) : ?>
				<div id="the-logo">
					<?php the_custom_logo(); ?>
				</div>
			<?php endif; ?>
			<div class="site-title" id="site-title">
					<a class="site-name" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<?php // bloginfo( 'name' ); ?> This is a test of Twitter’s new Edit Tweet feature. This is only a test
					</a>
					<?php
						$brisko_description = get_bloginfo( 'description', 'display' );
					if ( $brisko_description || is_customize_preview() ) :
						?>
						<small class="site-description text-muted align-items-center">
							<?php // echo $brisko_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
							<p>By Twitter on Thursday, 1 September 2022</p>
						</small>
					<?php endif; ?>
			</div>
		</div>
			
	<!-- Back up 1 -->

	</div>
</div>