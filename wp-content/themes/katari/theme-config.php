<?php

// CONSTANTES DE CONFIGURACIÓN  ......................................................

/* Usamos metadatos en páginas para identificar el tipo de página que vamos a mostrar 
(si es que se quiere personalizar). Por ejemplo, la página que corresponde al tipo
'inicio' lleva en su metadato (clave)'tipo' => (valor)'inicio'.

El nombre de esta clave puede ser cambiada en la constante TYPE_METADATA_KEY. */
const TYPE = [
	'inicio'	=> 'inicio',
	'empresa'	=> 'empresa',
	'equipo'	=> 'equipo',
	'servicios'	=> 'servicios',
	'alianzas'	=> 'alianzas',
	'contacto'	=> 'contacto'
];

// Define el nombre que llevará la clave para identificar el tipo de página en los metadatos de ésta.
const TYPE_METADATA_KEY = 'tipo';
//Nombre menú principal:
const MAIN_MENU = "menu-principal";
// Muestra dirección a imágen por defecto de slider dentro de la carpeta /img en tema.
const DEFAULT_IMG_SLIDER = 'slider-default.jpg';
// Define nombre campo para tipo de fondo.
const BG_METADATA_KEY = 'fondo';
// Debe estar siempre en FALSE.
const DEBUG_MODE = FALSE;
// Muestra u oculta sub-páginas del menú.
const SHOW_SUBPAGES = FALSE;
// Muestra u oculta sub-menús en el menú principal.
const SHOW_SUBMENUS = FALSE;
// Determina si Slider cambia automáticamente de imágen.
const SLIDER_AUTOPLAY = TRUE;
// Determina en cuánto tiempo cambia la imágen del Slider.
const SLIDER_AUTOPLAY_TIME = 7000; // 1000 = 1 segundo.

// fin CONSTANTES DE CONFIGURACIÓN  ..................................................

?>