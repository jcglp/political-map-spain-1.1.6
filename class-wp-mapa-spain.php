<?php

include "class-wp-mapa-coordenadas.php";
 
class WP_PMI_Spain extends WP_Mapa_Coordenadas{


	function __construct($width=601, $height=477) {
		
		parent::__construct();
		
	  $this->_width = $width;
	  $this->_height = $height;
	  
	  $this->_factorx = 1;
	  $this->_factory = 1;
	  
	 
	  // 15 A coruña
	  $this->_areas['15']["area_init"] = array (184,83,186,64,196,43,172,52,143,63,151,91,168,84);
	  $this->_areas['15']["area"] = $this->_areas['15']["area_init"];
	  $this->_areas['15']["href"] = "#";
	  $this->_areas['15']["href_data_filter"] = "";
	  $this->_areas['15']["title"]= "A Coruña";
	  $this->_areas['15']["alt"]  = "A Coruña";
	  	
	  // 01 Araba - Alava
	  $this->_areas['01']["area_init"] = array (324,81,335,76,343,84,344,91,348,91,361,98,356,113,340,106,333,97,336,92,334,85);
	  $this->_areas['01']["area"] = $this->_areas['01']["area_init"];
	  $this->_areas['01']["href"] = "#";
	  $this->_areas['01']["href_data_filter"] = "";
	  $this->_areas['01']["title"]= "Araba - Alava";
	  $this->_areas['01']["alt"]  = "Araba - Alava";
	  
	  // 02 Albacete
	  $this->_areas['02']["area_init"] = array (375,252,381,270,392,282,372,284,369,296,343,311,334,307,341,298,330,270,335,252,357,256);
	  $this->_areas['02']["area"] = $this->_areas['02']["area_init"];
	  $this->_areas['02']["href"] = "#";
	  $this->_areas['02']["href_data_filter"] = "";
	  $this->_areas['02']["title"]= "Albacete";
	  $this->_areas['02']["alt"]  = "Albacete";
	  
	  // 03 Alicante
	  $this->_areas['03']["area_init"] = array (394,322,430,285,421,277,402,285,390,283,386,302,386,312);
	  $this->_areas['03']["area"] = $this->_areas['03']["area_init"];
	  $this->_areas['03']["href"] = "#";
	  $this->_areas['03']["href_data_filter"] = "";
	  $this->_areas['03']["title"]= "Alicante";
	  $this->_areas['03']["alt"]  = "Alicante";
	  
	  // 04 Almeria
	  $this->_areas['04']["area_init"] = array (317,366,324,342,334,342,346,317,363,342,349,366);
	  $this->_areas['04']["area"] = $this->_areas['04']["area_init"];
	  $this->_areas['04']["href"] = "#";
	  $this->_areas['04']["href_data_filter"] = "";
	  $this->_areas['04']["title"]= "Almería";
	  $this->_areas['04']["alt"]  = "Almería";
	   
	  // 33 Asturias
	  $this->_areas['33']["area_init"] = array (217,54,295,68,279,79,221,83,214,68);
	  $this->_areas['33']["area"] = $this->_areas['33']["area_init"];
	  $this->_areas['33']["href"] = "#";
	  $this->_areas['33']["href_data_filter"] = "";
	  $this->_areas['33']["title"]= "Asturias";
	  $this->_areas['33']["alt"]  = "Asturias";
	  
	  // 05 Avila
	  $this->_areas['05']["area_init"] = array (243,198,259,210,289,194,279,168,264,165,263,178);
	  $this->_areas['05']["area"] = $this->_areas['05']["area_init"];
	  $this->_areas['05']["href"] = "#";
	  $this->_areas['05']["href_data_filter"] = "";
	  $this->_areas['05']["title"]= "Avila";
	  $this->_areas['05']["alt"]  = "Avila";
	  	
	  // 06 Badajoz
	  $this->_areas['06']["area_init"] = array (187,237,201,237,229,253,261,239,270,248,257,271,219,300,179,276,194,251);
	  $this->_areas['06']["area"] = $this->_areas['06']["area_init"];
	  $this->_areas['06']["href"] = "#";
	  $this->_areas['06']["href_data_filter"] = "";
	  $this->_areas['06']["title"]= "Badajoz";
	  $this->_areas['06']["alt"]  = "Badajoz";
	  
	  // 08 Barcelona
	  $this->_areas['08']["area_init"] = array (481,181,520,160,490,131,481,153,474,153,473,169);
	  $this->_areas['08']["area"] = $this->_areas['08']["area_init"];
	  $this->_areas['08']["href"] = "#";
	  $this->_areas['08']["href_data_filter"] = "";
	  $this->_areas['08']["title"]= "Barcelona";
	  $this->_areas['08']["alt"]  = "Barcelona";
	  	
	  // 48 Bizkaia
	  $this->_areas['48']["area_init"] = array (335,74,349,68,362,74,357,81,357,87,345,88,345,82);
	  $this->_areas['48']["area"] = $this->_areas['48']["area_init"];
	  $this->_areas['48']["href"] = "#";
	  $this->_areas['48']["href_data_filter"] = "";
	  $this->_areas['48']["title"]= "Bizkaia";
	  $this->_areas['48']["alt"]  = "Bizkaia";
	  
	  // 09 Burgos
	  $this->_areas['09']["area_init"] = array (299,97,301,145,311,153,338,131,331,127,333,84,314,85,309,94,306,98);
	  $this->_areas['09']["area"] = $this->_areas['09']["area_init"];
	  $this->_areas['09']["href"] = "#";
	  $this->_areas['09']["href_data_filter"] = "";
	  $this->_areas['09']["title"]= "Burgos";
	  $this->_areas['09']["alt"]  = "Burgos";
	  	
	  // 10 Caceres
	  $this->_areas['10']["area_init"] = array (201,196,216,199,226,191,253,209,261,238,230,251,201,236,187,236,181,219,197,218);
	  $this->_areas['10']["area"] = $this->_areas['10']["area_init"];
	  $this->_areas['10']["href"] = "#";
	  $this->_areas['10']["href_data_filter"] = "";
	  $this->_areas['10']["title"]= "Cáceres";
	  $this->_areas['10']["alt"]  = "Cáceres";
	  	
	  // 11 Cadiz
	  $this->_areas['11']["area_init"] = array (205,348,244,347,244,353,230,364,239,380,226,386,207,371);
	  $this->_areas['11']["area"] = $this->_areas['11']["area_init"];
	  $this->_areas['11']["href"] = "#";
	  $this->_areas['11']["href_data_filter"] = "";
	  $this->_areas['11']["title"]= "Cádiz";
	  $this->_areas['11']["alt"]  = "Cádiz";
	  
	  // 39 Cantabria
	  $this->_areas['39']["area_init"] = array (281,78,297,67,323,66,333,75,307,88,307,96,299,96,297,88,286,85);
	  $this->_areas['39']["area"] = $this->_areas['39']["area_init"];
	  $this->_areas['39']["href"] = "#";
	  $this->_areas['39']["href_data_filter"] = "";
	  $this->_areas['39']["title"]= "Cantabria";
	  $this->_areas['39']["alt"]  = "Cantabria";
	  	
	  // 12 Castellon
	  $this->_areas['12']["area_init"] = array (420,242,443,211,433,200,419,199,417,216,399,229,404,237);
	  $this->_areas['12']["area"] = $this->_areas['12']["area_init"];
	  $this->_areas['12']["href"] = "#";
	  $this->_areas['12']["href_data_filter"] = "";
	  $this->_areas['12']["title"]= "Castellón";
	  $this->_areas['12']["alt"]  = "Castellón";
	  	
	  // 13 Ciudad Real
	  $this->_areas['13']["area_init"] = array (258,272,273,243,286,241,289,247,308,251,327,245,333,251,328,271,332,286,281,289);
	  $this->_areas['13']["area"] = $this->_areas['13']["area_init"];
	  $this->_areas['13']["href"] = "#";
	  $this->_areas['13']["href_data_filter"] = "";
	  $this->_areas['13']["title"]= "Ciudad Real";
	  $this->_areas['13']["alt"]  = "Ciudad Real";
	  	
	  // 51 Ceuta
	  $this->_areas['51']["area_init"] = array (221,394,235,388,233,408);
	  $this->_areas['51']["area"] = $this->_areas['51']["area_init"];
	  $this->_areas['51']["href"] = "#";
	  $this->_areas['51']["href_data_filter"] = "";
	  $this->_areas['51']["title"]= "Ceuta";
	  $this->_areas['51']["alt"]  = "Ceuta";
	  	
	  // 14 Cordoba
	  $this->_areas['14']["area_init"] = array (233,293,257,273,281,292,277,313,286,329,272,339,251,317);
	  $this->_areas['14']["area"] = $this->_areas['14']["area_init"];
	  $this->_areas['14']["href"] = "#";
	  $this->_areas['14']["href_data_filter"] = "";
	  $this->_areas['14']["title"]= "Córdoba";
	  $this->_areas['14']["alt"]  = "Córdoba";
	  	
	  // 16 Cuenca
	  $this->_areas['16']["area_init"] = array (326,219,331,247,355,255,375,251,388,226,356,198);
	  $this->_areas['16']["area"] = $this->_areas['16']["area_init"];
	  $this->_areas['16']["href"] = "#";
	  $this->_areas['16']["href_data_filter"] = "";
	  $this->_areas['16']["title"]= "Cuenca";
	  $this->_areas['16']["alt"]  = "Cuenca";
	  	
	  // 20 Gipuzkoa
	  $this->_areas['20']["area_init"] = array (349,92,364,96,382,76,377,73,370,77,361,76,358,86);
	  $this->_areas['20']["area"] = $this->_areas['20']["area_init"];
	  $this->_areas['20']["href"] = "#";
	  $this->_areas['20']["href_data_filter"] = "";
	  $this->_areas['20']["title"]= "Gipuzkoa";
	  $this->_areas['20']["alt"]  = "Gipuzkoa";
	  
	  // 17 Girona
	  $this->_areas['17']["area_init"] = array (490,129,523,162,540,149,540,134,530,126);
	  $this->_areas['17']["area"] = $this->_areas['17']["area_init"];
	  $this->_areas['17']["href"] = "#";
	  $this->_areas['17']["href_data_filter"] = "";
	  $this->_areas['17']["title"]= "Girona";
	  $this->_areas['17']["alt"]  = "Girona";
	  
	  // 18 Granada
	  $this->_areas['18']["area_init"] = array (274,339,280,354,292,361,317,361,323,341,331,341,346,315,331,313,323,325,284,332);
	  $this->_areas['18']["area"] = $this->_areas['18']["area_init"];
	  $this->_areas['18']["href"] = "#";
	  $this->_areas['18']["href_data_filter"] = "";
	  $this->_areas['18']["title"]= "Granada";
	  $this->_areas['18']["alt"]  = "Granada";
	  	
	  // 19 Guadalajara
	  $this->_areas['19']["area_init"] = array (317,185,331,214,349,198,359,198,366,208,377,198,376,185,362,173,353,178,341,168,321,168);
	  $this->_areas['19']["area"] = $this->_areas['19']["area_init"];
	  $this->_areas['19']["href"] = "#";
	  $this->_areas['19']["href_data_filter"] = "";
	  $this->_areas['19']["title"]= "Guadalajara";
	  $this->_areas['19']["alt"]  = "Guadalajara";
	  
	  // 21 Huelva
	  $this->_areas['21']["area_init"] = array (188,286,217,302,206,312,204,351,166,311);
	  $this->_areas['21']["area"] = $this->_areas['21']["area_init"];
	  $this->_areas['21']["href"] = "#";
	  $this->_areas['21']["href_data_filter"] = "";
	  $this->_areas['21']["title"]= "Huelva";
	  $this->_areas['21']["alt"]  = "Huelva";
	  	
	  // 22 Huesca
	  $this->_areas['22']["area_init"] = array (412,100,453,109,450,146,441,152,443,162,426,168,403,142,402,109);
	  $this->_areas['22']["area"] = $this->_areas['22']["area_init"];
	  $this->_areas['22']["href"] = "#";
	  $this->_areas['22']["href_data_filter"] = "";
	  $this->_areas['22']["title"]= "Huesca";
	  $this->_areas['22']["alt"]  = "Huesca";
	  	
	  // 07 Illes Balears
	  $this->_areas['07']["area_init"] = array (459,297,482,328,578,263,556,240);
	  $this->_areas['07']["area"] = $this->_areas['07']["area_init"];
	  $this->_areas['07']["href"] = "#";
	  $this->_areas['07']["href_data_filter"] = "";
	  $this->_areas['07']["title"]= "Illes Balears";
	  $this->_areas['07']["alt"]  = "Illes Balears";
	  
	  // 23 Jaen
	  $this->_areas['23']["area_init"] = array (279,312,283,291,333,288,339,300,323,322,288,329);
	  $this->_areas['23']["area"] = $this->_areas['23']["area_init"];
	  $this->_areas['23']["href"] = "#";
	  $this->_areas['23']["href_data_filter"] = "";
	  $this->_areas['23']["title"]= "Jaén";
	  $this->_areas['23']["alt"]  = "Jaén";
	  
	  // 26 La Rioja
	  $this->_areas['26']["area_init"] = array (334,103,333,127,348,134,354,129,368,138,370,129,357,114,343,114);
	  $this->_areas['26']["area"] = $this->_areas['26']["area_init"];
	  $this->_areas['26']["href"] = "#";
	  $this->_areas['26']["href_data_filter"] = "";
	  $this->_areas['26']["title"]= "La Rioja";
	  $this->_areas['26']["alt"]  = "La Rioja";
	  
	  // 35 Las Palmas
	  $this->_areas['35']["area_init"] = array (111,384,167,346,174,353,160,385,124,404,107,397);
	  $this->_areas['35']["area"] = $this->_areas['35']["area_init"];
	  $this->_areas['35']["href"] = "#";
	  $this->_areas['35']["href_data_filter"] = "";
	  $this->_areas['35']["title"]= "Las Palmas";
	  $this->_areas['35']["alt"]  = "Las Palmas";
	  
	  // 27 LUGO
	  $this->_areas['27']["area_init"] = array (185,93,196,101,209,100,217,80,211,63,216,53,198,43,187,67);
	  $this->_areas['27']["area"] = $this->_areas['27']["area_init"];
	  $this->_areas['27']["href"] = "#";
	  $this->_areas['27']["href_data_filter"] = "";
	  $this->_areas['27']["title"]= "Lugo";
	  $this->_areas['27']["alt"]  = "Lugo";
	  	
	  // 24 Le�n
	  $this->_areas['24']["area_init"] = array (218,113,258,122,272,113,282,85,275,80,221,85,214,90,214,97,219,104);
	  $this->_areas['24']["area"] = $this->_areas['24']["area_init"];
	  $this->_areas['24']["href"] = "#";
	  $this->_areas['24']["href_data_filter"] = "";
	  $this->_areas['24']["title"]= "León";
	  $this->_areas['24']["alt"]  = "León";
	  
	  // 25 Lleida
	  $this->_areas['25']["area_init"] = array (442,173,444,152,452,145,454,106,489,127,480,150,472,149,471,163);
	  $this->_areas['25']["area"] = $this->_areas['25']["area_init"];
	  $this->_areas['25']["href"] = "#";
	  $this->_areas['25']["href_data_filter"] = "";
	  $this->_areas['25']["title"]= "Lleida";
	  $this->_areas['25']["alt"]  = "Lleida";
	  	
	  // 28 Madrid
	  $this->_areas['28']["area_init"] = array (279,204,318,169,322,177,317,188,329,215,305,223,307,214,292,205);
	  $this->_areas['28']["area"] = $this->_areas['28']["area_init"];
	  $this->_areas['28']["href"] = "#";
	  $this->_areas['28']["href_data_filter"] = "";
	  $this->_areas['28']["title"]= "Madrid";
	  $this->_areas['28']["alt"]  = "Madrid";
	  	
	  // 29 Malaga
	  $this->_areas['29']["area_init"] = array (234,363,247,351,247,345,262,336,274,341,278,354,290,361,239,377);
	  $this->_areas['29']["area"] = $this->_areas['29']["area_init"];
	  $this->_areas['29']["href"] = "#";
	  $this->_areas['29']["href_data_filter"] = "";
	  $this->_areas['29']["title"]= "Málaga";
	  $this->_areas['29']["alt"]  = "Málaga";
	  
	  // 52 Melilla
	  $this->_areas['52']["area_init"] = array (300,430,306,422,314,430,309,436);
	  $this->_areas['52']["area"] = $this->_areas['52']["area_init"];
	  $this->_areas['52']["href"] = "#";
	  $this->_areas['52']["href_data_filter"] = "";
	  $this->_areas['52']["title"]= "Melilla";
	  $this->_areas['52']["alt"]  = "Melilla";
	  
	  // 30 Murcia
	  $this->_areas['30']["area_init"] = array (363,340,395,327,385,311,387,287,373,284,370,297,344,309);
	  $this->_areas['30']["area"] = $this->_areas['30']["area_init"];
	  $this->_areas['30']["href"] = "#";
	  $this->_areas['30']["href_data_filter"] = "";
	  $this->_areas['30']["title"]= "Murcia";
	  $this->_areas['30']["alt"]  = "Murcia";
	  
	  // 31 Navarra
	  $this->_areas['31']["area_init"] = array (357,113,379,136,390,136,392,114,415,97,381,78);
	  $this->_areas['31']["area"] = $this->_areas['31']["area_init"];
	  $this->_areas['31']["href"] = "#";
	  $this->_areas['31']["href_data_filter"] = "";
	  $this->_areas['31']["title"]= "Navarra";
	  $this->_areas['31']["alt"]  = "Navarra";
	  
	  // 32 Ourense
	  $this->_areas['32']["area_init"] = array (174,126,206,127,219,107,211,99,204,103,192,103,185,96,170,99,179,114);
	  $this->_areas['32']["area"] = $this->_areas['32']["area_init"];
	  $this->_areas['32']["href"] = "#";
	  $this->_areas['32']["href_data_filter"] = "";
	  $this->_areas['32']["title"]= "Ourense";
	  $this->_areas['32']["alt"]  = "Ourense";
	  
	  // 34 Palencia
	  $this->_areas['34']["area_init"] = array (278,88,297,88,299,139,288,139,273,130);
	  $this->_areas['34']["area"] = $this->_areas['34']["area_init"];
	  $this->_areas['34']["href"] = "#";
	  $this->_areas['34']["href_data_filter"] = "";
	  $this->_areas['34']["title"]= "Palencia";
	  $this->_areas['34']["alt"]  = "Palencia";
	  
	  // 36 Pontevedra
	  $this->_areas['36']["area_init"] = array (151,121,173,110,168,97,184,95,184,84,152,92);
	  $this->_areas['36']["area"] = $this->_areas['36']["area_init"];
	  $this->_areas['36']["href"] = "#";
	  $this->_areas['36']["href_data_filter"] = "";
	  $this->_areas['36']["title"]= "Pontevedra";
	  $this->_areas['36']["alt"]  = "Pontevedra";
	  
	  // 37 Salamanca
	  $this->_areas['37']["area_init"] = array (241,199,262,178,262,166,219,154,208,164,204,196,216,197,226,189);
	  $this->_areas['37']["area"] = $this->_areas['37']["area_init"];
	  $this->_areas['37']["href"] = "#";
	  $this->_areas['37']["href_data_filter"] = "";
	  $this->_areas['37']["title"]= "Salamanca";
	  $this->_areas['37']["alt"]  = "Salamanca";
	  	
	  // 38 Santa Cruz de Tenerife
	  $this->_areas['38']["area_init"] = array (101,395,114,370,59,362,48,408);
	  $this->_areas['38']["area"] = $this->_areas['38']["area_init"];
	  $this->_areas['38']["href"] = "#";
	  $this->_areas['38']["href_data_filter"] = "";
	  $this->_areas['38']["title"]= "Santa Cruz de Tenerife";
	  $this->_areas['38']["alt"]  = "Santa Cruz de Tenerife";
	  
	  // 40 Segovia
	  $this->_areas['40']["area_init"] = array (280,167,290,192,327,164,318,153,310,156,304,151,287,156);
	  $this->_areas['40']["area"] = $this->_areas['40']["area_init"];
	  $this->_areas['40']["href"] = "#";
	  $this->_areas['40']["href_data_filter"] = "";
	  $this->_areas['40']["title"]= "Segovia";
	  $this->_areas['40']["alt"]  = "Segovia";
	  	
	  // 41 Sevilla
	  $this->_areas['41']["area_init"] = array (206,346,207,313,229,293,260,335,244,346);
	  $this->_areas['41']["area"] = $this->_areas['41']["area_init"];
	  $this->_areas['41']["href"] = "#";
	  $this->_areas['41']["href_data_filter"] = "";
	  $this->_areas['41']["title"]= "Sevilla";
	  $this->_areas['41']["alt"]  = "Sevilla";
	  	
	  // 42 Soria
	  $this->_areas['42']["area_init"] = array (318,152,330,165,342,166,350,176,360,174,370,142,355,130,346,137,339,133);
	  $this->_areas['42']["area"] = $this->_areas['42']["area_init"];
	  $this->_areas['42']["href"] = "#";
	  $this->_areas['42']["href_data_filter"] = "";
	  $this->_areas['42']["title"]= "Soria";
	  $this->_areas['42']["alt"]  = "Soria";
	  	
	  // 43 Tarragona
	  $this->_areas['43']["area_init"] = array (479,181,470,164,434,182,435,202,443,209);
	  $this->_areas['43']["area"] = $this->_areas['43']["area_init"];
	  $this->_areas['43']["href"] = "#";
	  $this->_areas['43']["href_data_filter"] = "";
	  $this->_areas['43']["title"]= "Tarragona";
	  $this->_areas['43']["alt"]  = "Tarragona";
	  	
	  // 44 Teruel
	  $this->_areas['44']["area_init"] = array (379,185,411,172,434,190,430,200,420,195,414,202,417,214,394,230,371,205,379,198);
	  $this->_areas['44']["area"] = $this->_areas['44']["area_init"];
	  $this->_areas['44']["href"] = "#";
	  $this->_areas['44']["href_data_filter"] = "";
	  $this->_areas['44']["title"]= "Teruel";
	  $this->_areas['44']["alt"]  = "Teruel";
	  
	  // 45 Toledo
	  $this->_areas['45']["area_init"] = array (255,213,267,243,291,238,289,245,307,250,329,242,325,219,304,226,304,215,276,205);
	  $this->_areas['45']["area"] = $this->_areas['45']["area_init"];
	  $this->_areas['45']["href"] = "#";
	  $this->_areas['45']["href_data_filter"] = "";
	  $this->_areas['45']["title"]= "Toledo";
	  $this->_areas['45']["alt"]  = "Toledo";
	  	
	  // 46 Valencia
	  $this->_areas['46']["area_init"] = array (418,242,421,276,397,283,383,271,376,245,389,229);
	  $this->_areas['46']["area"] = $this->_areas['46']["area_init"];
	  $this->_areas['46']["href"] = "#";
	  $this->_areas['46']["href_data_filter"] = "";
	  $this->_areas['46']["title"]= "Valencia";
	  $this->_areas['46']["alt"]  = "Valencia";
	  
	  // 47 Valladolid
	  $this->_areas['47']["area_init"] = array (260,123,259,162,278,167,303,150,299,141,277,137,271,117);
	  $this->_areas['47']["area"] = $this->_areas['47']["area_init"];
	  $this->_areas['47']["href"] = "#";
	  $this->_areas['47']["href_data_filter"] = "";
	  $this->_areas['47']["title"]= "Valladolid";
	  $this->_areas['47']["alt"]  = "Valladolid";
	  
	  // 49 Zamora
	  $this->_areas['49']["area_init"] = array (209,124,216,114,258,124,257,163,221,153,227,139);
	  $this->_areas['49']["area"] = $this->_areas['49']["area_init"];
	  $this->_areas['49']["href"] = "#";
	  $this->_areas['49']["href_data_filter"] = "";
	  $this->_areas['49']["title"]= "Zamora";
	  $this->_areas['49']["alt"]  = "Zamora";
	  
	  // 50 Zaragoza
	  $this->_areas['50']["area_init"] = array (401,110,402,142,425,170,437,166,440,173,430,183,412,170,377,185,361,167,371,148,369,136,377,136,388,139,394,117);
	  $this->_areas['50']["area"] = $this->_areas['50']["area_init"];
	  $this->_areas['50']["href"] = "#";
	  $this->_areas['50']["href_data_filter"] = "";
	  $this->_areas['50']["title"]= "Zaragoza";
	  $this->_areas['50']["alt"]  = "Zaragoza";
	  	
	  $this->set_dimension($width, $height);
    
	}
	

	function generar_lista_provincias()
  {
     
    $options = '';
    $options .= '<option value="">'.esc_attr(__('Seleccione Provincia', 'wpmps')).'</option>';
    
    foreach ($this->_provincias as $cod_area=>$value)
    {
      $options .= '<option value="'.$this->get_property($cod_area,'href').'" data-filter-value="'.$this->get_property($cod_area,'href_data_filter').'">'
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
  	}
  
  	return true;
  
  }
   
	  
}	