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

add_action('customize_register', 'podemos_theme_customizer');

/*
 * Podemos Theme Customizer
 *
 */
function podemos_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport = 'postMessage';
}
add_action( 'customize_register', 'podemos_customize_register' );


function podemos_theme_customizer( $wp_customize ) {




//Añadir sección de página principal

    $wp_customize->add_section( 'podemos_portada_section' , array(
    'title'       => __( 'P&aacute;gina principal', 'podemoswp' ),
    'priority'    => 31,
    'description' => 'Configura la p&aacute;gina principal',
));

//Añadir sección de redes sociales en cabecera

    $wp_customize->add_section( 'podemos_social_section' , array(
    'title'       => __( 'Botones sociales', 'podemoswp' ),
    'priority'    => 32,
    'description' => 'Configura tus redes sociales',
));

//Home type

 $wp_customize->add_setting(
    'blog_info', array (
	'default'        => 'blog',
	));

 $wp_customize->add_control('blog_info', array(
        'label'      => __('Home type', 'podemoswp'),
        'section'    => 'podemos_portada_section',
        'settings'   => 'blog_info',
		
		'priority'    => 10,
        'type'       => 'radio',
        'choices'    => array(
            'blog' => 'Blog',
            'info' => 'Info',
            
        ),
    ));

	
//Activar botones sociales

$wp_customize->add_setting(
    'activar_sociales'
	);
	$wp_customize->add_control(
    'activar_sociales',
    array(
        'type' => 'checkbox',
        'label' => 'Activar Botones Sociales',
        'section' => 'podemos_social_section',
		'priority'    => 1,
    )
);	

//Activar Portada

$wp_customize->add_setting(
    'activar_portada'
	);
	$wp_customize->add_control(
    'activar_portada',
    array(
        'type' => 'checkbox',
        'label' => 'Activar Portada',
        'section' => 'podemos_portada_section',
		'priority'    => 1,
    )
);


//Activar Homebox



$wp_customize->add_setting(
    'activar_homebox'
	);
	$wp_customize->add_control(
    'activar_homebox',
    array(
        'type' => 'checkbox',
        'label' => 'Activar Homebox',
        'section' => 'podemos_portada_section',
		'priority'    => 20,
    )
);



//Homebox1 type

 $wp_customize->add_setting(
    'box1_type', array (
	'default'        => 'video',
	));

 $wp_customize->add_control('box1_type', array(
        'label'      => __('Homebox1 type', 'podemoswp'),
        'section'    => 'podemos_portada_section',
        'settings'   => 'box1_type',
		
		'priority'    => 21,
        'type'       => 'radio',
        'choices'    => array(
            'video' => 'Video',
            'texto' => 'Texto',
            
        ),
    ));


	
//Activar link en homebox1


$wp_customize->add_setting(
    'activar_link_homebox1'
	);
	$wp_customize->add_control(
    'activar_link_homebox1',
    array(
        'type' => 'checkbox',
        'label' => 'Link en homebox1',
        'section' => 'podemos_portada_section',
		'priority'    => 30,
    )
);
	


//Imagen Portada

$wp_customize->add_setting( 'portada_podemos' );
$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'portada_podemos', array(
    'label'    => __( 'Sube una imagen a la portada', 'podemoswp' ),
    'section'  => 'podemos_portada_section',
	'priority'    => 2,
    'settings' => 'portada_podemos',
) ) );



class Podemos_Textarea_Control extends WP_Customize_Control {
	public $type = 'textarea';
	public function render_content() {
?>
<label>
	<span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
	<textarea rows="1" style="width:100%;" <?php $this->link(); ?>><?php echo esc_textarea( $this->value() ); ?></textarea>
</label>



<?php } } 


//Social Facebook URL

$wp_customize->add_setting(
    'social_facebook_url'
	);
$wp_customize->add_control(new Podemos_Textarea_Control($wp_customize, 'social_facebook_url', array(
	'label' => 'Facebook URL',
	'section' => 'podemos_social_section',
	'priority'    => 2,
	'settings' => 'social_facebook_url',
)));


//Social Twitter URL

$wp_customize->add_setting(
    'social_twitter_url'
	);
$wp_customize->add_control(new Podemos_Textarea_Control($wp_customize, 'social_twitter_url', array(
	'label' => 'Twitter URL',
	'section' => 'podemos_social_section',
	'priority'    => 3,
	'settings' => 'social_twitter_url',
)));



//Homebox1 video URL

$wp_customize->add_setting(
    'home_video_url'
	);
$wp_customize->add_control(new Podemos_Textarea_Control($wp_customize, 'home_video_url', array(
	'label' => 'Youtube video ID',
	'section' => 'podemos_portada_section',
	'priority'    => 22,
	'settings' => 'home_video_url',
)));

//Título Texto Homebox1

$wp_customize->add_setting(
    'box1_title'
	);
$wp_customize->add_control(new Podemos_Textarea_Control($wp_customize, 'box1_title', array(
	'label' => 'T&iacute;tulo homebox1',
	'section' => 'podemos_portada_section',
	'priority'    => 23,
	'settings' => 'box1_title',
)));

//Texto link homebox1

$wp_customize->add_setting(
    'box1_text_link'
	);
$wp_customize->add_control(new Podemos_Textarea_Control($wp_customize, 'box1_text_link', array(
	'label' => 'Texto link homebox1',
	'section' => 'podemos_portada_section',
	'priority'    => 31,
	'settings' => 'box1_text_link',
)));


//URL link homebox1

$wp_customize->add_setting(
    'box1_url_link'
	);
$wp_customize->add_control(new Podemos_Textarea_Control($wp_customize, 'box1_url_link', array(
	'label' => 'URL link homebox1',
	'section' => 'podemos_portada_section',
	'priority'    => 32,
	'settings' => 'box1_url_link',
)));

//Título homebox2

$wp_customize->add_setting(
    'box2_title'
	);
$wp_customize->add_control(new Podemos_Textarea_Control($wp_customize, 'box2_title', array(
	'label' => 'Título homebox2',
	'section' => 'podemos_portada_section',
	'priority'    => 40,
	'settings' => 'box2_title',
)));

//Título homebox3

$wp_customize->add_setting(
    'box3_title'
	);
$wp_customize->add_control(new Podemos_Textarea_Control($wp_customize, 'box3_title', array(
	'label' => 'Título homebox3',
	'section' => 'podemos_portada_section',
	'priority'    => 50,
	'settings' => 'box3_title',
)));

//Título homebox4

$wp_customize->add_setting(
    'box4_title'
	);
$wp_customize->add_control(new Podemos_Textarea_Control($wp_customize, 'box4_title', array(
	'label' => 'Título homebox4',
	'section' => 'podemos_portada_section',
	'priority'    => 60,
	'settings' => 'box4_title',
)));


//Texto link homebox2

$wp_customize->add_setting(
    'box2_text_link'
	);
$wp_customize->add_control(new Podemos_Textarea_Control($wp_customize, 'box2_text_link', array(
	'label' => 'Texto link homebox2',
	'section' => 'podemos_portada_section',
	'priority'    => 45,
	'settings' => 'box2_text_link',
)));


//Texto link homebox3

$wp_customize->add_setting(
    'box3_text_link'
	);
$wp_customize->add_control(new Podemos_Textarea_Control($wp_customize, 'box3_text_link', array(
	'label' => 'Texto link homebox3',
	'section' => 'podemos_portada_section',
	'priority'    => 55,
	'settings' => 'box3_text_link',
)));

//Texto link homebox4

$wp_customize->add_setting(
    'box4_text_link'
	);
$wp_customize->add_control(new Podemos_Textarea_Control($wp_customize, 'box4_text_link', array(
	'label' => 'Texto link homebox4',
	'section' => 'podemos_portada_section',
	'priority'    => 65,
	'settings' => 'box4_text_link',
)));


//Texto link homebox5

$wp_customize->add_setting(
    'box5_text_link'
	);
$wp_customize->add_control(new Podemos_Textarea_Control($wp_customize, 'box5_text_link', array(
	'label' => 'Título Anuncio',
	'section' => 'podemos_portada_section',
	'priority'    => 80,
	'settings' => 'box5_text_link',
)));


//Info Sidebar Title

$wp_customize->add_setting(
    'info_side_title'
	);
$wp_customize->add_control(new Podemos_Textarea_Control($wp_customize, 'info_side_title', array(
	'label' => 'Info Sidebar Title',
	'section' => 'podemos_portada_section',
	'priority'    => 100,
	'settings' => 'info_side_title',
)));

//Info Content Title

$wp_customize->add_setting(
    'info_content_title'
	);
$wp_customize->add_control(new Podemos_Textarea_Control($wp_customize, 'info_content_title', array(
	'label' => 'Info Content Title',
	'section' => 'podemos_portada_section',
	'priority'    => 101,
	'settings' => 'info_content_title',
)));

//Letra pequeña homebox5

$wp_customize->add_setting(
    'box5_text'
	);
$wp_customize->add_control(new Podemos_Textarea_Control($wp_customize, 'box5_text', array(
	'label' => 'Texto Anuncio',
	'section' => 'podemos_portada_section',
	'priority'    => 83,
	'settings' => 'box5_text',
)));


//URL link homebox2

$wp_customize->add_setting(
    'box2_url_link'
	);
$wp_customize->add_control(new Podemos_Textarea_Control($wp_customize, 'box2_url_link', array(
	'label' => 'URL link homebox2',
	'section' => 'podemos_portada_section',
	'priority'    => 46,
	'settings' => 'box2_url_link',
)));

//URL link homebox3

$wp_customize->add_setting(
    'box3_url_link'
	);
$wp_customize->add_control(new Podemos_Textarea_Control($wp_customize, 'box3_url_link', array(
	'label' => 'URL link homebox3',
	'section' => 'podemos_portada_section',
	'priority'    => 56,
	'settings' => 'box3_url_link',
)));

//URL link homebox4

$wp_customize->add_setting(
    'box4_url_link'
	);
$wp_customize->add_control(new Podemos_Textarea_Control($wp_customize, 'box4_url_link', array(
	'label' => 'URL link homebox4',
	'section' => 'podemos_portada_section',
	'priority'    => 66,
	'settings' => 'box4_url_link',
)));

//URL link homebox5

$wp_customize->add_setting(
    'box5_url_link'
	);
$wp_customize->add_control(new Podemos_Textarea_Control($wp_customize, 'box5_url_link', array(
	'label' => 'URL Anuncio',
	'section' => 'podemos_portada_section',
	'priority'    => 81,
	'settings' => 'box5_url_link',
)));

//Texto link featured

$wp_customize->add_setting(
    'featured_link_text'
	);
$wp_customize->add_control(new Podemos_Textarea_Control($wp_customize, 'featured_link_text', array(
	'label' => 'Featured link text',
	'section' => 'podemos_portada_section',
	'priority'    => 8,
	'settings' => 'featured_link_text',
)));

//URL link featured

$wp_customize->add_setting(
    'featured_link_url'
	);
$wp_customize->add_control(new Podemos_Textarea_Control($wp_customize, 'featured_link_url', array(
	'label' => 'Featured link URL',
	'section' => 'podemos_portada_section',
	'priority'    => 9,
	'settings' => 'featured_link_url',
)));


//Título Portada

$wp_customize->add_setting('titulo_de_portada', array('default' => '',));
$wp_customize->add_control(new Podemos_Textarea_Control($wp_customize, 'titulo_de_portada', array(
	'label' => 'T&iacute;tulo de portada',
	'section' => 'podemos_portada_section',
	'priority'    => 3,
	'settings' => 'titulo_de_portada',
)));

//Texto link Portada

$wp_customize->add_setting('texto_link_portada', array('default' => '',));
$wp_customize->add_control(new Podemos_Textarea_Control($wp_customize, 'texto_link_portada', array(
	'label' => 'Texto link portada',
	'section' => 'podemos_portada_section',
	'priority'    => 5,
	'settings' => 'texto_link_portada',
)));

//URL link Portada

$wp_customize->add_setting('url_link_portada', array('default' => '',));
$wp_customize->add_control(new Podemos_Textarea_Control($wp_customize, 'url_link_portada', array(
	'label' => 'URL link portada',
	'section' => 'podemos_portada_section',
	'priority'    => 6,
	'settings' => 'url_link_portada',
)));


class Gran_Textarea_Control extends WP_Customize_Control {
	public $type = 'textarea';
	public function render_content() {
?>

<label>
	<span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
	<textarea rows="6" style="width:100%;" <?php $this->link(); ?>><?php echo esc_textarea( $this->value() ); ?></textarea>
</label>


<?php } }



//Texto Featured

$wp_customize->add_setting('texto_featured', array('default' => '',));
$wp_customize->add_control(new Gran_Textarea_Control($wp_customize, 'texto_featured', array(
	'label' => 'Texto Featured',
	'section' => 'podemos_portada_section',
	'priority'    => 7,
	'settings' => 'texto_featured',
)));

//Texto Portada

$wp_customize->add_setting('texto_de_portada', array('default' => '',));
$wp_customize->add_control(new Gran_Textarea_Control($wp_customize, 'texto_de_portada', array(
	'label' => 'Texto de portada',
	'section' => 'podemos_portada_section',
	'priority'    => 4,
	'settings' => 'texto_de_portada',
)));

//Texto Homebox1

$wp_customize->add_setting(
    'box1_text'
	);
$wp_customize->add_control(new Gran_Textarea_Control($wp_customize, 'box1_text', array(
	'label' => 'Texto homebox1',
	'section' => 'podemos_portada_section',
	'priority'    => 24,
	'settings' => 'box1_text',
)));


//Texto Homebox2

$wp_customize->add_setting(
    'box2_text'
	);
$wp_customize->add_control(new Gran_Textarea_Control($wp_customize, 'box2_text', array(
	'label' => 'Texto homebox2',
	'section' => 'podemos_portada_section',
	'priority'    => 41,
	'settings' => 'box2_text',
)));

//Texto Homebox3

$wp_customize->add_setting(
    'box3_text'
	);
$wp_customize->add_control(new Gran_Textarea_Control($wp_customize, 'box3_text', array(
	'label' => 'Texto homebox3',
	'section' => 'podemos_portada_section',
	'priority'    => 51,
	'settings' => 'box3_text',
)));


//Texto Homebox4

$wp_customize->add_setting(
    'box4_text'
	);
$wp_customize->add_control(new Gran_Textarea_Control($wp_customize, 'box4_text', array(
	'label' => 'Texto homebox4',
	'section' => 'podemos_portada_section',
	'priority'    => 61,
	'settings' => 'box4_text',
)));



}



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