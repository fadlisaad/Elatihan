<?php
/****************************************************************************
* data/include/class_tempo.php
*
* Genera tiempos parciales y totales de ejecuci�n
*

PHPfileNavigator versi�n 2.2.0

Copyright (C) 2004-2005 Lito <lito@eordes.com>

http://phpfilenavigator.litoweb.net/

Este programa es software libre. Puede redistribuirlo y/o modificarlo bajo los
t�rminos de la Licencia P�blica General de GNU seg�n es publicada por la Free
Software Foundation, bien de la versi�n 2 de dicha Licencia o bien (seg�n su
elecci�n) de cualquier versi�n posterior. 

Este programa se distribuye con la esperanza de que sea �til, pero SIN NINGUNA
GARANT�A, incluso sin la garant�a MERCANTIL impl�cita o sin garantizar la
CONVENIENCIA PARA UN PROP�SITO PARTICULAR. V�ase la Licencia P�blica General de
GNU para m�s detalles. 

Deber�a haber recibido una copia de la Licencia P�blica General junto con este
programa. Si no ha sido as�, escriba a la Free Software Foundation, Inc., en
675 Mass Ave, Cambridge, MA 02139, EEUU. 
*******************************************************************************/

defined('OK') or die();

/**
* class PFN_Tempo
*
* clase para obtener el tiempo de ejecuci�n de ciertas
* fases del c�digo
*/
class PFN_Tempo {
	var $entradas = array();

	/**
	* function PFN_Tempo (void)
	*
	* inicia el contador de ejecuci�n
	*/
	function PFN_Tempo () {
		$this->entradas = array();
		$this->rexistra('inicio');
	}

	/**
	* function rexistra (string $posicion)
	*
	* a�ade una marca de tiempo al contador
	*/
	function rexistra ($posicion) {
		$entrada['tempo'] = microtime();
		$entrada['mensaxe'] = $posicion;
		array_push($this->entradas, $entrada);
	}

	/**
	* function dump (void)
	*
	* devuelve la cadena de texto con todas las
	* marcas de tiempo en formato
	* segundos.milisegundos: marca
	*
	* return string
	*/
	function dump () {
		$this->rexistra('fin');

		foreach ($this->entradas as $k => $v) {
			$a = $k;
			$str = $v['tempo'];
			$esp = strpos($str,' ');
			$seg = substr($str,$esp+1);
			$mic = substr($str,1,$esp-2);
			$txt .= $seg.$mic.': '.$v['mensaxe']."\n";
		}

		return $txt;
	}

	/**
	* function total (void)
	*
	* devuelve el tiempo total de ejecuci�n en segundos
	* desde la primera marca hasta la �ltima
	*
	* return float
	*/
	function total () {
		list ($msec, $sec) = explode(' ', $this->entradas[0]['tempo']); 
		$inicio = (float)$msec + (float)$sec;

		$fin = end($this->entradas);
		list ($msec, $sec) = explode(' ', $fin['tempo']); 
		$fin = (float)$msec + (float)$sec;

		return number_format($fin-$inicio, 4, ',', '.');
	}
}

$PFN_tempo = new PFN_Tempo();
?>
