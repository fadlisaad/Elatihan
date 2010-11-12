<?php
/****************************************************************************
* data/plantillas/pe.inc.php
*
* plantilla para la visualizaci�n del pie de p�gina
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

if (is_object($PFN_clases)) {
	$PFN_clases->desconectar();
}
?>
	<div id="pe_separador"></div>
</div>
<div id="pe">
	<?php if ($PFN_conf->g('usuario','descargas_maximo') || $PFN_conf->g('raiz','peso_maximo')) { ?>
	<table id="pe_utiles" summary="">
		<tr>
			<?php if ($PFN_conf->g('raiz','peso_maximo') > 0) { ?>
			<td>
				&nbsp;<?php echo $PFN_conf->t('peso_restante').': <strong>'.PFN_peso($PFN_conf->g('raiz','peso_maximo') - $PFN_conf->g('raiz','peso_actual')); ?></strong>
				<?php
				$libre = intval((($PFN_conf->g('raiz','peso_maximo') - $PFN_conf->g('raiz','peso_actual')) / $PFN_conf->g('raiz','peso_maximo')) * 100);
				$cor_libre = ($libre > 50)?'0C0':(($libre > 25)?'FC6':(($libre > 10)?'F60':'F00'));
				?>
				<br /><div style="border: 1px solid #000; width: <?php echo $libre; ?>%; background-color: #<?php echo $cor_libre; ?>; font-weight: bold;"><?php echo $libre; ?>%</div>
			</td>
			<?php } if ($PFN_conf->g('usuario','descargas_maximo') > 0) { ?>
			<td>
				&nbsp;<?php echo $PFN_conf->t('descargas_restante').': <strong>'.PFN_peso($PFN_conf->g('usuario','descargas_maximo') - $PFN_conf->g('usuario','descargas_actual')); ?></strong>
				<?php
				$libre = intval((($PFN_conf->g('usuario','descargas_maximo') - $PFN_conf->g('usuario','descargas_actual')) / $PFN_conf->g('usuario','descargas_maximo')) * 100);
				$cor_libre = ($libre > 50)?'0C0':(($libre > 25)?'FC6':(($libre > 10)?'F60':'F00'));
				?>
				<br /><div style="border: 1px solid #000; width: <?php echo $libre; ?>%; background-color: #<?php echo $cor_libre; ?>; font-weight: bold;"><?php echo $libre; ?>%</div>
			</td>
		<?php } ?>
		</tr>
	</table>
	<?php } else { ?>
	<table id="pe_utiles" summary=""><tr><td style="border: 0;">&nbsp;</td></tr></table>
	<?php } ?>
	<div id="pe_texto"><a href="http://pfn.sourceforge.net/" onclick="window.open(this.href, '_blank'); return false"><?php echo $PFN_conf->t('PFN').'</a> - '.$PFN_conf->t('tempo_execucion').': '.$PFN_tempo->total().' '.$PFN_conf->t('segundos'); ?></div>
</div>
<!--

Tempos de execucion:

<?php echo $PFN_tempo->dump(); ?>

//-->
</body>
</html>
