<?php zerif_before_our_focus_trigger(); ?><section class="focus" id="focus">	<?php zerif_top_our_focus_trigger(); ?>	<div class="container">		<!-- SECTION HEADER -->		<div class="section-header">			<!-- SECTION TITLE AND SUBTITLE -->			<?php			/* Title */			zerif_our_focus_header_title_trigger();			/* Subtitle */			zerif_our_focus_header_subtitle_trigger();			?>		</div>		<div class="row">				<?php				if ( is_active_sidebar( 'sidebar-ourfocus' ) ) {					dynamic_sidebar( 'sidebar-ourfocus' );				} elseif ( current_user_can( 'edit_theme_options' ) ) {					if ( is_customize_preview() ) {						printf( __( 'Add widgets in this area by going to the %s','zerif-lite' ), __( 'Our focus section','zerif-lite' ) );					} else {						printf( __( 'Add widgets in this area by going to the %s','zerif-lite' ), sprintf( '<a href="'.esc_url( admin_url( 'customize.php?autofocus[section]=sidebar-widgets-sidebar-ourfocus' ) ).'">%s</a>', __( 'Our focus section','zerif-lite' ) ) );					}				}				?>		</div>	</div> <!-- / END CONTAINER -->	<?php zerif_bottom_our_focus_trigger(); ?></section>  <!-- / END FOCUS SECTION --><?php zerif_after_our_focus_trigger(); ?>