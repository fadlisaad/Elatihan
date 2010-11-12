<?php
/****************************************************************************
* data/plantillas/ver_comprimido.inc.php
*
* plantilla para la visualizaci�n del contenido de un fichero
*

PHPfileNavigator versi�n 2.1.0

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

defined('OK') && defined('ACCION') or die();
?>
		<div class="bloque_info"><h1><?php echo $PFN_conf->t('accion').' &raquo; '.$PFN_conf->t('ver_comprimido'); ?></h1></div>
		<div class="bloque_info">
			<table summary="" class="tabla_informes">
				<thead>
				<tr>
					<th><a href="accion.php?<?php echo PFN_cambia_url(array('accion','orde_comprimido','pos_comprimido','cal'),array($accion,'nome',(($orde == 'nome')?$pos:'ASC'),$cal),false); ?>"><?php echo $PFN_conf->t('nome'); ?></a></th>
					<th><a href="accion.php?<?php echo PFN_cambia_url(array('accion','orde_comprimido','pos_comprimido','cal'),array($accion,'tamano',(($orde == 'tamano')?$pos:'ASC'),$cal),false); ?>"><?php echo $PFN_conf->t('tamano'); ?></a></th>
					<th><a href="accion.php?<?php echo PFN_cambia_url(array('accion','orde_comprimido','pos_comprimido','cal'),array($accion,'data',(($orde == 'data')?$pos:'ASC'),$cal),false); ?>"><?php echo $PFN_conf->t('data'); ?></a></th>
					<th><a href="accion.php?<?php echo PFN_cambia_url(array('accion','orde_comprimido','pos_comprimido','cal'),array($accion,'propietario',(($orde == 'propietario')?$pos:'ASC'),$cal),false); ?>"><?php echo $PFN_conf->t('propietario'); ?></a></th>
					<th><a href="accion.php?<?php echo PFN_cambia_url(array('accion','orde_comprimido','pos_comprimido','cal'),array($accion,'grupo',(($orde == 'grupo')?$pos:'ASC'),$cal),false); ?>"><?php echo $PFN_conf->t('grupo'); ?></a></th>
					<th><a href="accion.php?<?php echo PFN_cambia_url(array('accion','orde_comprimido','pos_comprimido','cal'),array($accion,'permisos',(($orde == 'permisos')?$pos:'ASC'),$cal),false); ?>"><?php echo $PFN_conf->t('permisos'); ?></a></th>
				</tr>
				</thead>
				<tfoot>
				<tr>
					<td>
						<?php
						echo (($cnt_cantos['dir'] > 0)?
							($cnt_cantos['dir'].' '.$PFN_conf->t(($cnt_cantos['dir'] == 1)?'dir':'dirs')):'')
							.(($cnt_cantos['arq'] > 0)?
							((($cnt_cantos['dir'] > 0)?
							' - ':'').$cnt_cantos['arq'].' '.$PFN_conf->t(($cnt_cantos['arq'] == 1)?
							'arq':'arqs')):'');
						?>
					</td>
					<td><?php echo PFN_peso($cnt_peso); ?></td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
				</tr>
				</tfoot>
				<tbody>
				<?php echo $txt; ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
