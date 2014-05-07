<?php

include "class-wp-mapa-coordenadas.php";
 
class WP_PMI_Spain extends WP_Mapa_Coordenadas{


	function __construct($width=601, $height=477) {
		
		parent::__construct();
		
	  $this->_width = $width;
	  $this->_height = $height;
	  
	  $this->_factorx = 1;
	  $this->_factory = 1;
	  	
	  $this->set_dimension($width, $height);
    
	}
	

	function generar_lista_provincias()
  {
     
    $options = '';
    $options .= '<option value="">'.esc_attr(__('Seleccione Provincia', 'wpmps')).'</option>';
    
    foreach ($this->_provincias as $cod_area=>$value)
    {
      $options .= '<option  value="'.$this->get_property($cod_area,'href').'" data-filter-value="'.$this->get_property($cod_area,'href_data_filter').'">'
      						 .$this->get_property($cod_area,'title')
      						 .'</option>'
      						 ;
    }      
    
        	 
    return $options;
    
  }
  
  function cargar_datos($tabla)
  {
  	 
  	global $wpdb;
  
  	foreach ($this->_areas as $cod_area=>$value)
  	{
  		$wpdb->query("INSERT INTO ".$tabla
  					." (id_mapa, id_zona, desc_zona, coordenadas, title, href) "
  					." VALUES "
  					.' ( 0, "'.$cod_area
  						.'", "'.$this->get_property($cod_area,'title') 
  						.'", "'.$this->recuperar_coordenadas($cod_area) 
  						.'", "'.$this->get_property($cod_area,'title')
  						.'", "'.$this->get_property($cod_area,'href')
  						.'" )');
  		  		
  	}
    
  	return true;
  
  }
 
  function recuperar_datos($tabla)
  {
  
  	global $wpdb;
  	
  	$arrWPIMs = $wpdb->get_results("SELECT id, id_zona, desc_zona, coordenadas, href, title FROM $tabla ", ARRAY_A);
  	foreach ($arrWPIMs as $wpim) {  		
  		$this->set_property($wpim["id_zona"], 'href', $wpim["href"]);
  		$this->set_property($wpim["id_zona"], 'title', $wpim["title"]);
  		
  	}
  	return true;
  
  }
   
	  
}	