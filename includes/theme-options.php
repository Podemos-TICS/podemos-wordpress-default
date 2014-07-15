<?php

/**

 * Theme Options Page

 * Original from BootstrapWP

 * @author Gregor Hartmaier

 * @package WordPress

 * @subpackage Podemos Wordpress Theme

 */

add_action( 'admin_init', 'theme_options_init' );

add_action( 'admin_menu', 'theme_options_add_page' );



// Einstellungen registrieren (http://codex.wordpress.org/Function_Reference/register_setting)

function theme_options_init(){

	register_setting( 'podemoswp_options', 'podemoswp_theme_options', 'podemoswp_validate_options' );

}



// Seite in der Dashboard-Navigation erstellen

function theme_options_add_page() {

	add_theme_page('Optionen', 'Optionen', 'edit_theme_options', 'theme-optionen', 'podemoswp_options_page' ); 

// Seitentitel, Titel in der Navi, Berechtigung zum Editieren (http://codex.wordpress.org/Roles_and_Capabilities) , Slug, Funktion 

}



// Optionen-Seite erstellen

function podemoswp_options_page() {

global $select_options, $radio_options;

if ( ! isset( $_REQUEST['settings-updated'] ) )

	$_REQUEST['settings-updated'] = false; ?>



<div class="wrap"> 

<?php screen_icon(); ?><h2>Opciones para <?php bloginfo('name'); ?></h2> 



<?php if ( false !== $_REQUEST['settings-updated'] ) : ?> 

<div class="updated fade">

	<p><strong>¡Ajustes guardados!</strong></p>

</div>

<?php endif; ?>



  <form method="post" action="options.php">

	<?php settings_fields( 'podemoswp_options' ); ?>

	<?php $options = get_option( 'podemoswp_theme_options' ); ?>



    <table class="form-table">

      <tr valign="top">

        <th scope="row">Logo</th>

        <td><input id="podemoswp_theme_options[logo]" class="regular-text" type="text" name="podemoswp_theme_options[logo]" value="<?php esc_attr_e( $options['logo'] ); ?>" /></td>

      </tr>  

      <tr valign="top">

        <th scope="row">Favicon</th>

        <td><input id="podemoswp_theme_options[favicon]" class="regular-text" type="text" name="podemoswp_theme_options[favicon]" value="<?php esc_attr_e( $options['favicon'] ); ?>" /></td>

      </tr>        

      </tr>

      <tr valign="top">

        <th scope="row">Texto Copyright</th>

        <td><textarea id="podemoswp_theme_options[footertext]" class="large-text" cols="50" rows="2" name="podemoswp_theme_options[footertext]"><?php esc_attr_e( $options['footertext'] ); ?></textarea></td>

      </tr>  

      <tr valign="top">

        <th scope="row">Código Google Analytics</th>

        <td><textarea id="podemoswp_theme_options[analytics]" class="large-text" cols="50" rows="10" name="podemoswp_theme_options[analytics]"><?php echo esc_textarea( $options['analytics'] ); ?></textarea></td>

      </tr>

      <tr>

	 <th scope="row">¿Uso de Excerpts?</th>

		<td><input id="podemoswp_theme_options[excerpts]" name="podemoswp_theme_options[excerpts]" type="checkbox" value="1" <?php checked( '1', $options['excerpts'] ); ?> />	

	</td>

      </tr>     

      <tr>

	 <th scope="row">¿Mostrar Meta Data (Publicado .. por..)? </th>

		<td><input id="podemoswp_theme_options[meta_data]" name="podemoswp_theme_options[meta_data]" type="checkbox" value="1" <?php checked( '1', $options['meta_data'] ); ?> />	

	</td>

      </tr> 

      <tr>

	 <th scope="row">¿Mostrar Foto principal en Single Post?</th>

		<td><input id="podemoswp_theme_options[featured_single]" name="podemoswp_theme_options[featured_single]" type="checkbox" value="1" <?php checked( '1', $options['featured_single'] ); ?> />	

	</td>

      </tr> 

      <tr valign="top">

        <th scope="row">Texto a la izquierda en la cabeza</th>

        <td><textarea id="podemoswp_theme_options[top-callout]" class="large-text" cols="50" rows="2" name="podemoswp_theme_options[top-callout]"><?php esc_attr_e( $options['top-callout'] ); ?></textarea></td>

      </tr>  

    </table>

    

    <!-- submit -->

    <p class="submit"><input type="submit" class="button-primary" value="Guardar" /></p>

  </form>

</div>

<?php }





function podemoswp_validate_options( $input ) {

// Strip HTML-Code:

    // $input['footertext'] = wp_filter_nohtml_kses( $input['copyright'] );

	return $input;

}