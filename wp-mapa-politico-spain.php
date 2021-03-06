<?php
/**
* Plugin Name: WP Mapa Politico España
* Plugin URI: http://mispinitoswp.wordpress.com/2014/04/07/wordpress-plugin-mapa-politico-de-espana/
* Description: Este plugin permite definir para cada una de las provincias de un mapa politico de españa un enlace.
* Version: 1.1.6
* Author: Juan Carlos Gomez-Lobo
* Author URI: http://mispinitoswp.wordpress.com/
* Text Domain: wpmps
* 
**/

/*  
 * Copyright 2014 Juan Carlos Gomez-Lobo (email: jcglp at yahoo.es)

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
*/

require_once('class-wp-mapa-spain.php');
	
if (!class_exists('WPMPS_Plugin')) {


	class WPMPS_Plugin {
		
		var $tablename;
		
		
		function __construct() {
			global $wpdb;
						
			add_action('wp_head', array($this, 'includeCss'));
			
			add_action('wp_footer', array($this, 'incluirJs'));
						
			add_action('admin_enqueue_scripts', array($this, 'incluirOptions'));	
						
			add_action('admin_menu', array($this, 'add_option_menu'));
			
			add_action('plugins_loaded', array($this, 'load_text_domain'));
				
			$this->tablename = $wpdb->prefix . "wpmps";
					
		}
		
		
		function includeCss() {
			wp_enqueue_style('wpmps', plugins_url('css/mapa-politico-spain.css', __FILE__));
		}
		
		function incluirJs($hook) {
			wp_register_script( 'wpmps_script', plugins_url(basename(dirname(__FILE__)) . '/js/mapa-politico-spain.js') );
			$translation_array = array( 'siteurl' => get_bloginfo('url')
																);
			wp_localize_script( 'wpmps_script', 'bloginfo', $translation_array );
			
			wp_enqueue_script('wpmps_script');	
		}
		
		function incluirOptions($hook) {
			wp_enqueue_style('wpmps', plugins_url('css/mapa-politico-spain.css', __FILE__));
		}
	
		function add_option_menu() {
			add_options_page(__('WP Mapa Politico España', 'wpmps'), __('WP Mapa Politico España', 'wpmps'), 'manage_options', 'wpmps-options', array(&$this, 'show_wpmps_options'));
			//add_options_page('WP Mapa Politico España','WP Mapa Politico España', 'manage_options', 'wpmps-options', array(&$this, 'show_wpmps_options'));
		}
		
		function show_wpmps_options() {
			global $wpdb;
		  ?>
		  <div id="wpmps-options-wrap" class="wrap">
				<h2><?php  _e ('WordPress Plugin - Mapa Político de España', 'wpmps'); ?></h2>
				<div>
					<ol>
						<li> Define los enlaces para cada una de las provinicas. # es un enlace vacío, a usar sino se quiere definir enlace.</li>
						<li> Define los <i>titles</i>, etiquetas que se muestran al pasar el ratón por encima.</li>
						<li> Escribir el shortcode <b>[wp-political-map-spain]</b> en los post o páginas donde mostrar el mapa político.</li> 
					</ol>
				</div>
                
				
				<?php 
					$hidden_field_name = 'mt_submit_hidden';
					
					if( isset($_POST[ $hidden_field_name ]) && $_POST[ $hidden_field_name ] == 'Y' ) {
				        // Read their posted value
						global $wpdb;
						
						foreach($_POST as $nombre_campo => $valor){
							$partes = explode("-", $nombre_campo);
							if (isset($partes[0]) && isset($partes[1]) && ($nombre_campo!='wpmps-background-color')) {
								$dml = "UPDATE {$wpdb->prefix}wpmps  SET $partes[1] = '$valor' WHERE id  = $partes[0]";
								
								//echo $nombre_campo. " = ". $valor ."<br>";
								//echo $dml."<br>";
								$wpdb->query($dml);
							}
							
						}
						
						if (isset($_POST['wpmps-background-color'])) {
							update_option( 'wpmps-background-color', $_POST['wpmps-background-color'] );
						}
									
						?>
						<div class="updated"><p><strong><?php _e ('Opciones Grabadas.', 'wpmps' ); ?></strong></p></div>
					<?php				
				    }
				    ?>
				
                <form action="" method="post">
                 	<?php submit_button(  __('Grabar Opciones', 'wpmps' )); ?>
                 	<h3><?php  _e ('Color de Fondo para el Mapa', 'wpmps'); ?></h3>
                 	<input type="text" name="wpmps-background-color" value="<?php echo get_option('wpmps-background-color'); ?>" class="wpmps-color-field" data-default-color="#f3f3f3" />
                 	
                 	<h3><?php  _e ('Enlaces Asociados a Provincias', 'wpmps'); ?></h3>
                 	
                	<table>
                		<tr>
                			<th><?php _e ('Zona', 'wpmps' ); ?></th>
                			<th><?php _e ('Href', 'wpmps' ); ?></th>
                			<th><?php _e ('Title', 'wpmps' ); ?></th>
                			<th><?php //_e('Coordenadas', 'wpmps' ); ?></th>
                		</tr>
                    <?php
                    $arrWPIMs = $wpdb->get_results("SELECT id, id_zona, desc_zona, coordenadas, href, title FROM $this->tablename", ARRAY_A);
                    foreach ($arrWPIMs as $wpim) {
                    	?>
                    	<tr>
                    	<td><?php echo $wpim["desc_zona"];?></td>
                    	
                    	<td><input style="width:400px;" type="text" name="<?php echo $wpim["id"]."-href"?>" value="<?php echo $wpim["href"];?>"></td>
                    	
                    	<td><input type="text" name="<?php echo $wpim["id"]."-title"?>" value="<?php echo $wpim["title"];?>"></td>
                    	
                    	<?php 
                    		/* Comentado la caja que muestra las coordenadas del area
                    		 * <td><input type="text" name="<?php echo $wpim["id"]."-coordenadas"?>" value="<?php echo $wpim["coordenadas"];?>"></td> 
                    		 * 
                    		 */?>
                    	
                    	</tr>
                    	<?php 
                    }
                    
                    ?>
                    </table>
                    <input type="hidden" name="mt_submit_hidden" value="Y">
                    <?php submit_button( __('Grabar Opciones', 'wpmps' )); ?>
                </form>
                
		  </div>
		  <?php
		}
		
	
		
		
		function instalar() {
			
			global $wpdb;
			$wpdb->query("CREATE TABLE IF NOT EXISTS {$wpdb->prefix}wpmps (
							id int(11) NOT NULL AUTO_INCREMENT,
							id_mapa int(11),
							id_zona varchar(11) CHARACTER SET utf8 COLLATE utf8_spanish2_ci,
							desc_zona varchar(300) CHARACTER SET utf8 COLLATE utf8_spanish2_ci,
							href varchar(300) CHARACTER SET utf8 COLLATE utf8_spanish2_ci,
							title varchar(300) CHARACTER SET utf8 COLLATE utf8_spanish2_ci,
							coordenadas varchar(4000) CHARACTER SET utf8 COLLATE utf8_spanish2_ci,			
							PRIMARY KEY (id)
							) ENGINE=InnoDB");
			
			$mapa_coordenadas920x730 = new WP_PMI_Spain(920,730);
			$mapa_coordenadas920x730->cargar_datos("{$wpdb->prefix}wpmps");
			
			update_option('wpmps_plugin_installed', 'yes');
		}
		
		function desinstalar() {
			global $wpdb;
			//02-9-2014 Al desinstalar NO borrar la tabla
			//$wpdb->query("DROP TABLE IF EXISTS {$wpdb->prefix}wpmps ");
			update_option('wpmps_plugin_installed', 'no');
		}
		
		function load_text_domain() {
			$plugin_dir = basename(dirname(__FILE__));
			load_plugin_textdomain('wpmps', false, $plugin_dir . "/languages");
			
		}
		
		
	}
	
	
	$oWPMPS = new WPMPS_Plugin();
	register_activation_hook(__FILE__, array($oWPMPS, 'instalar'));
	register_deactivation_hook(__FILE__, array($oWPMPS, 'desinstalar'));
	
	
	function wp_imgmap( $atts ){
		
		$mapa_coordenadas920x730 = new WP_PMI_Spain(920,730);
		$mapa_coordenadas920x730->recuperar_datos("wp_wpmps");
		
		$mapa_coordenadas960x763 = clone $mapa_coordenadas920x730;
		$mapa_coordenadas960x763->set_dimension(960,763);
		
		$mapa_coordenadas718x570 = clone $mapa_coordenadas920x730;
		$mapa_coordenadas718x570->set_dimension(718, 570);
		 
		$mapa_coordenadas601x477 = clone $mapa_coordenadas920x730;
		$mapa_coordenadas601x477->set_dimension(601,477);
		
		$mapa_coordenadas576x477 = clone $mapa_coordenadas920x730;
		$mapa_coordenadas576x477->set_dimension(576,477);
		
		$mapa_coordenadas571x477 = clone $mapa_coordenadas920x730;
		$mapa_coordenadas571x477->set_dimension(571,477);
			
		$mapa_coordenadas430x342 = clone $mapa_coordenadas920x730;
		$mapa_coordenadas430x342->set_dimension(430,342);
		
		$mapa_coordenadas412x317 = clone $mapa_coordenadas920x730;
		$mapa_coordenadas412x317->set_dimension(412,317);
			
		$mapa_coordenadas270x214 = clone $mapa_coordenadas920x730;
		$mapa_coordenadas270x214->set_dimension(270,214);
		
		
		
		$html_mapa = '<div class="wpim-wrap-mapa wp-border-img-mapa" style="background-color:'.get_option('wpmps-background-color').'">'
					.'<img id="wp-img-mapa" src="' . plugins_url( 'images/mapa_base_azul_claro.png' , __FILE__ ) . '"  > '
					. $mapa_coordenadas920x730->generar_mapa_coordenadas()
					. $mapa_coordenadas960x763->generar_mapa_coordenadas()
					. $mapa_coordenadas718x570->generar_mapa_coordenadas()
					. $mapa_coordenadas601x477->generar_mapa_coordenadas()
					. $mapa_coordenadas576x477->generar_mapa_coordenadas()
					. $mapa_coordenadas571x477->generar_mapa_coordenadas()
					. $mapa_coordenadas430x342->generar_mapa_coordenadas()
					. $mapa_coordenadas412x317->generar_mapa_coordenadas()
					. $mapa_coordenadas270x214->generar_mapa_coordenadas()		
					.'</div>';
		
		
		return $html_mapa;
		
	}
	add_shortcode( 'wp-political-map-spain', 'wp_imgmap' );
	
	
	
	
	
	
	
	if (is_admin()){
		add_action( 'admin_enqueue_scripts','wpmps_enqueue_color_picker');
	}
	function wpmps_enqueue_color_picker( $hook_suffix ) {
		wp_enqueue_style( 'wp-color-picker' );
		wp_enqueue_script( 'wpmps_script_color_picker', plugins_url(basename(dirname(__FILE__)) . '/js/wp-color.js'), array( 'wp-color-picker' ), false, true );
	
	}
	
		
}
	

?>