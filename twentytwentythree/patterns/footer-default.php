<?php
/**
 * Title: Default Footer
 * Slug: twentytwentythree/footer-default
 * Categories: footer
 * Block Types: core/template-part/footer
 * Description: Footer with site title and powered by WordPress.
 */
?>
<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
	<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)">
		<!-- wp:columns {"align":"wide"} -->
		<div class="wp-block-columns alignwide">
			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:site-title {"level":0} /-->
				<!-- wp:paragraph {"fontSize":"small"} -->
				<p class="has-small-font-size">Compra rápida e entrega ágil na sua região.</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:heading {"level":3} -->
				<h3>Links</h3>
				<!-- /wp:heading -->
				<!-- wp:list -->
				<ul>
					<li><a href="/">Início</a></li>
					<li><a href="/shop/">Loja</a></li>
					<li><a href="/cart/">Carrinho</a></li>
					<li><a href="/contact/">Contato</a></li>
				</ul>
				<!-- /wp:list -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:heading {"level":3} -->
				<h3>Atendimento</h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"fontSize":"small"} -->
				<p class="has-small-font-size">Seg-Sáb 8h–20h<br/>WhatsApp: (00) 00000-0000<br/>Email: contato@exemplo.com</p>
				<!-- /wp:paragraph -->
				<!-- wp:social-links {"iconColor":"contrast","iconColorValue":"#000000","iconBackgroundColor":"tertiary","iconBackgroundColorValue":"#F6F6F6","layout":{"type":"flex","justifyContent":"left"}} -->
				<ul class="wp-block-social-links has-icon-color has-icon-background-color">
					<!-- wp:social-link {"service":"instagram"} /-->
					<!-- wp:social-link {"service":"facebook"} /-->
					<!-- wp:social-link {"service":"whatsapp"} /-->
				</ul>
				<!-- /wp:social-links -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->

		<!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}},"layout":{"type":"flex","justifyContent":"space-between"}} -->
		<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--40)">
			<!-- wp:paragraph {"fontSize":"x-small"} -->
			<p class="has-x-small-font-size">© <?php echo esc_html( date_i18n( 'Y' ) ); ?> <?php bloginfo( 'name' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"align":"right","fontSize":"x-small"} -->
			<p class="has-text-align-right has-x-small-font-size"><?php printf( esc_html__( 'Feito com %s', 'twentytwentythree' ), '<a href="' . esc_url( __( 'https://wordpress.org', 'twentytwentythree' ) ) . '" rel="nofollow">WordPress</a>' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
