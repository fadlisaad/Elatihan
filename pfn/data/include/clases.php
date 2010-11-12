<?php
/****************************************************************************
* data/include/clases.php
*
* Clase de interface para los datos recibidos de MySQL
*

PHPfileNavigator versi�n 2.3.0

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
* class PFN_Clases extends PFN_MySQL
*
* clase que realiza el proceso de transformaci�n de los datos
* recibidos por la ejecuci�n de una consulta
*/
class PFN_Clases extends PFN_MySQL {
	var $filas;
	var $consulta;
	var $indice;
	var $query;
	var $correxir;

	/**
	* function serializa (void)
	*
	* ejecuta una consulta y almacena el resultado de la misma.
	* la consulta ejecutada es mediante una clase que extiende a Clases
	*/
	function serializa () {
		$this->consulta = $this->recuperar($this->query);
		$this->filas = count($this->consulta);
		$this->indice = 0;
	}

	/**
	* function put_query (string $query)
	*
	* ejecuta una consulta dada
	*/
	function put_query ($query) {
		$this->query = $query;
		$this->serializa();
		return $this->filas;
	}

	/**
	* function get_query (void)
	*
	* devuelve la �ltima consulta ejecutada
	*
	* return string
	*/
	function get_query () {
		return $this->query;
	}

	/**
	* function get_consulta (void)
	*
	* devuelve el resultado de la �ltima consulta ejecutada
	*
	* return array
	*/
	function get_consulta () {
		return $this->consulta;
	}

	/**
	* function get_campos (void)
	*
	* devuelve las columnas de la tabla pedidas en la �ltima
	* consulta ejecutada
	*
	* return array
	*/
	function get_campos () {
		if (is_array($this->consulta[0])) {
			foreach ($this->consulta[0] as $k => $v) {
				if (!is_int($k)) {
					$campos[] = $k;
				}
			}

			return $campos;
		}
	}

	/**
	* function indice (int $i)
	*
	* doble funcion
	*	si no recibe ning�n parametro, devuelve la posicion actual del �ndice
	*	si recibe alg�n parametro, coloca el indice en la posici�n $i
	*
	* return integer
	*/
	function indice ($i='') {
		if (strlen($i))
			$this->indice = intval($i);
		else
			return $this->indice;
	}

	/**
	* function seguinte (int $i)
	*
	* doble funcion
	*	si no recibe ning�n parametro, suma uno al indice de posici�n actual
	*	si recibe alg�n parametro, suma $i al indice de posicion actual
	*/
	function seguinte ($i='') {
		if (empty($i))
			$this->indice++;
		else
			$this->indice += $i;
	}

	/**
	* function mais (void)
	*
	*	comprueba si se ha llegado al final de los registros
	*
	*	return boolean
	*/
	function mais () {
		if ($this->indice < $this->filas) return true;
		else return false;
	}

	/**
	* function filas (void)
	*
	*	devuelve el numero de registros de la �ltima consulta ejecutada
	*
	*	return integer
	*/
	function filas () {
		return $this->filas;
	}

	/**
	* function get (string $campo)
	*
	*	devuelve el valor de la columna $campo del registro actual
	*
	*	return string
	*/
	function get ($campo='id') {
		return $this->consulta[$this->indice][$campo];
	}

	/**
	* function indice_campo (int $indice, string $campo)
	*
	*	devuelve el valor de la columna $campo del registro con posici�n $i
	*
	*	return string
	*/
	function indice_campo ($indice, $campo='id') {
		return $this->consulta[$indice][$campo];
	}

	/**
	* function vacia (void)
	*
	* Elimina todos los datos guardados de una consulta anterior
	*/
	function vacia () {
		$this->query = '';
		$this->filas = 0;
		$this->indice = 0;
		$this->consulta = array();
	}

	/**
	* function pon_correxir (array $cales)
	*
	* Recibe un array con la lista de valores recibidos por
	* parametros que queremos o no corregir.
	*
	* Por Ejemplo:
	* pon_correxir(array(true,true))
	*
	* Esto corregir�a los campos $a1, $a2 de los
	* recibidos en la funcion
	* init($modo, $a1='', $a2='')
	*/
	function pon_correxir ($cales) {
		$this->correxir = $cales;
	}

	/**
	* function corrixe (string $campo, integer $pos)
	*
	* Realiza correcciones sobre los datos recibidos
	* para completar una consulta de MySQL y as�
	* evitar inyecciones de c�digo podr�a da�ar
	* o variar incorrectamente los datos
	*
	* return string
	*/
	function corrixe ($campo, $pos=0) {
		if (!$this->correxir[$pos]) {
			return $campo;
		}

		if (is_array($campo)) {
			foreach ($campo as $k => $v) {
				if (get_magic_quotes_gpc()) {
					$v = stripslashes($v);
					$k = stripslashes($k);
				}

				$campo[addslashes($k)] = $this->corrixe($v, $pos);
			}

			return $campo;
		} else {
			if (get_magic_quotes_gpc()) {
				$campo = stripslashes($campo);
			}

			return addslashes(trim($campo));
		}
	}
}

$PFN_clases = new PFN_Clases;
$PFN_clases->abre_conexion($PFN_conf);
?>
