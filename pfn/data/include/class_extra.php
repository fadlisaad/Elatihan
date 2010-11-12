<?php
/*******************************************************************************
* data/include/class_extra.php
*
* Procesa y devuelve los datos de los ficheros adicionales para las raices
*

PHPfileNavigator versi�n 2.3.2

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
* class PFN_Extra
*
* clase para manejo de ficheros extra como ficheros de informacion
* adicional o imagenes reducidas
*/
class PFN_Extra {
	var $accions;

	/**
	* function accions (object $PFN_accions)
	*
	* recibe el objecto que ejecuta las acciones
	*/
	function accions (&$PFN_accions) {
		$this->accions = &$PFN_accions;
	}

	/**
	* function eliminar (string $arq, boolean $e_dir)
	*
	* elimina un fichero o directorio de informacion extra
	*
	* return boolean
	*/
	function eliminar ($arq, $e_dir) {
		$this->accions->rexistro(false);

		if ($e_dir) {
			$this->accions->eliminar(PFN_get_path_extra($arq));
		} else {
			$this->accions->eliminar($arq);
		}

		$this->accions->rexistro(true);
	}

	/**
	* function copiar (string $orixinal, string $destino)
	*
	* copia un fichero de informaci�n adicional
	* se usa siempre que se copie el fichero original asociado
	*
	* return boolean
	*/
	function copiar ($orixinal,$destino) {
		if (is_dir($destino)) {
			$orixinal = PFN_get_path_extra($orixinal);
			$destino = PFN_get_path_extra($destino);
		} else {
			$orixinal = $orixinal;
			$destino = $destino;
		}

		PFN_crea_directorio_recursivo(dirname($destino));

		$this->accions->rexistro(false);
		$ok = $this->accions->copiar($orixinal,$destino);
		$this->accions->rexistro(true);

		return $ok;
	}

	/**
	* function mover (string $orixinal, string $destino, boolean $e_dir)
	*
	* mueve un fichero de informaci�n adicional
	* se usa siempre que se mueva el fichero original asociado
	*
	* return boolean
	*/
	function mover ($orixinal,$destino,$e_dir) {
		$ok = $this->copiar($orixinal,$destino);
		$this->eliminar($orixinal,$e_dir);

		return $ok;
	}

	/**
	* function renomear (string $orixinal, string $destino, boolean $e_dir)
	*
	* renombra un fichero de informaci�n adicional
	* se usa siempre que se renombre el fichero original asociado
	*
	* return boolean
	*/
	function renomear ($orixinal,$destino, $e_dir) {
		if ($e_dir) {
			return @rename(PFN_get_path_extra($orixinal),PFN_get_path_extra($destino));
		} else {
			return @rename($orixinal,$destino);
		}
	}

	/**
	* function vacia_path (string $path, boolean $borrar_inc, boolean $borrar_imx, boolean $completo)
	*
	* Carga la eliminacion de los ficheros de informacion adicional y
	* previsualizaci�n de im�genes
	*/
	function vacia_path ($path, $borrar_inc=true, $borrar_imx=true, $completo=false) {
		if (is_dir(PFN_get_path_extra($path))) {
			$this->_vacia_path(PFN_get_path_extra($path), $borrar_inc, $borrar_imx, $completo);
		}
	}

	/**
	* function _vacia_path (string $path, boolean $borrar_inc, boolean $borrar_imx, boolean $completo)
	*
	* Elimina todos los ficheros de informaci�n adicional de una ra�z y sus
	* subdirectorios
	*/
	function _vacia_path ($path, $borrar_inc=true, $borrar_imx=true, $completo=false) {
		if (!@is_dir($path)) {
			return false;
		}

		$od = @opendir($path);

		while ($cada = @readdir($od)) {
			if ($cada == '.' || $cada == '..') {
				continue;
			}

			if (is_dir($path.$cada)) {
				$this->_vacia_path($path.$cada.'/', $borrar_inc, $borrar_imx, $completo);
			} else {
				$info_inc = preg_match('/.php$/',$cada);

				if ($completo || ($info_inc && $borrar_inc) || (!$info_inc && $borrar_imx)) {
					@unlink($path.$cada);
				}
			}
		}

		@closedir($od);

		if ($completo) {
			@rmdir($path);
		}
	}
}

$PFN_extra = new PFN_Extra;
?>
