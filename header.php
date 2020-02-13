<!doctype html>
<html lang="en">

<head>

	<meta charset="UTF-8">
	<title><?php wp_title(); ?></title>
	<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">

	<?php wp_head(); ?>

</head>
<body>

<div class="header"> 

	<div class="wrap">
 
		 <h1><a href="<?php echo site_url(); ?>" title="<?php bloginfo('name'); ?>" > BELWEB </a></h1>
 	
 		<div class="infor">
 	
	 	<?php
					
			$args = array('post_type' => 'page', 'pagename' => 'sobre' );
			$my_page = get_posts($args);
		 ?>

		<?php if($my_page) : foreach ( $my_page as $post ) : setup_postdata( $post ); 
				 
	 	?>

	 	<h2><?php the_title();  ?></h2>

	 	<?php the_excerpt(); //mostra todo conteudoo the_content();   ?>
			 
		 <a href="<?php the_permalink(); ?>" class="custom-botao">Leia mais</a>

		<?php endforeach; ?>
	
		<?php else: ?>

		<p> Nenhum conteúdo inserido na página SOBRE. </p>

		<?php endif; ?>

				


 			<!--	<h2> Marcello Cavalcanti de Albuquerque</h2>

 				<p>Marcello Cavalcanti de AlbuquerqueMarcello Cavalcanti de AlbuquerqueMarcello Cavalcanti de AlbuquerqueMarcello Cavalcanti de Albuquerque</p>

			 	
 				
				 <a href="" class="custom-botao">Leia mais</a>-->	

 		</div>

	</div>

</div>
