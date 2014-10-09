<?php 
function tpl_50fa0f14_PrintProductImports1__IifBaPUAFfdaORhn5sWtuQ(PHPTAL $tpl, PHPTAL_Context $ctx) {
$_thistpl = $tpl ;
$_translator = $tpl->getTranslator() ;
/* tag "documentElement" from line 1 */ ;
/* tag "table" from line 1 */ ;
?>
<table cellpadding="0" cellspacing="0" border="1">
						<?php /* tag "thead" from line 2 */; ?>
<thead>					
							<?php /* tag "tr" from line 3 */; ?>
<tr>								
								<?php /* tag "th" from line 4 */; ?>
<th align="right">NGÀY</th>
								<?php /* tag "th" from line 5 */; ?>
<th align="center">nhỏx6<?php /* tag "BR" from line 5 */; ?>
<BR/>(18g)</th>
								<?php /* tag "th" from line 6 */; ?>
<th align="center">nhỏx7<?php /* tag "BR" from line 6 */; ?>
<BR/>(21g)</th>
								<?php /* tag "th" from line 7 */; ?>
<th align="center">nhỏx10<?php /* tag "BR" from line 7 */; ?>
<BR/>(30g)</th>
								<?php /* tag "th" from line 8 */; ?>
<th align="center">nhỏx18<?php /* tag "BR" from line 8 */; ?>
<BR/>(54g)</th>
								<?php /* tag "th" from line 9 */; ?>
<th align="center">16x30<?php /* tag "BR" from line 9 */; ?>
<BR/>(90g)</th>
								<?php /* tag "th" from line 10 */; ?>
<th align="center">16x30<?php /* tag "BR" from line 10 */; ?>
<BR/>(150g)</th>								
								<?php /* tag "th" from line 11 */; ?>
<th align="center">16calx30<?php /* tag "BR" from line 11 */; ?>
<BR/>(150g)</th>
								<?php /* tag "th" from line 12 */; ?>
<th align="center">16calx50<?php /* tag "BR" from line 12 */; ?>
<BR/>(250g)</th>
								<?php /* tag "th" from line 13 */; ?>
<th align="center">16calx90<?php /* tag "BR" from line 13 */; ?>
<BR/>(500g)</th>
								<?php /* tag "th" from line 14 */; ?>
<th align="center">18x30<?php /* tag "BR" from line 14 */; ?>
<BR/>(180g)</th>
								<?php /* tag "th" from line 15 */; ?>
<th align="center">19x45<?php /* tag "BR" from line 15 */; ?>
<BR/>(300g)</th>
								<?php /* tag "th" from line 16 */; ?>
<th align="center">20x30<?php /* tag "BR" from line 16 */; ?>
<BR/>(210g)</th>
								<?php /* tag "th" from line 17 */; ?>
<th align="center">22x30<?php /* tag "BR" from line 17 */; ?>
<BR/>(240g)</th>
								<?php /* tag "th" from line 18 */; ?>
<th align="center">22calx60<?php /* tag "BR" from line 18 */; ?>
<BR/>(500g)</th>
								<?php /* tag "th" from line 19 */; ?>
<th align="center">18calx70<?php /* tag "BR" from line 19 */; ?>
<BR/>(500g)</th>
							</tr>
						</thead>
						<?php /* tag "tbody" from line 22 */; ?>
<tbody>
							<?php 
/* tag "tr" from line 23 */ ;
$_tmp_1 = $ctx->repeat ;
$_tmp_1->PI = new PHPTAL_RepeatController($ctx->PIs)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->PI as $ctx->PI): ;
?>
<tr>
								<?php /* tag "td" from line 24 */; ?>
<td align="right"><?php /* tag "b" from line 24 */; ?>
<b><?php echo phptal_escape($ctx->path($ctx->PI, 'getDatePrint1')); ?>
</b></td>
								<?php /* tag "td" from line 25 */; ?>
<td align="center"><?php echo phptal_escape($ctx->path($ctx->PI, 'getProduct16')); ?>
</td>
								<?php /* tag "td" from line 26 */; ?>
<td align="center"><?php echo phptal_escape($ctx->path($ctx->PI, 'getProduct17')); ?>
</td>
								<?php /* tag "td" from line 27 */; ?>
<td align="center"><?php echo phptal_escape($ctx->path($ctx->PI, 'getProduct20')); ?>
</td>
								<?php /* tag "td" from line 28 */; ?>
<td align="center"><?php echo phptal_escape($ctx->path($ctx->PI, 'getProduct21')); ?>
</td>
								<?php /* tag "td" from line 29 */; ?>
<td align="center"><?php echo phptal_escape($ctx->path($ctx->PI, 'getProduct02')); ?>
</td>
								<?php /* tag "td" from line 30 */; ?>
<td align="center"><?php echo phptal_escape($ctx->path($ctx->PI, 'getProduct04')); ?>
</td>
								<?php /* tag "td" from line 31 */; ?>
<td align="center"><?php echo phptal_escape($ctx->path($ctx->PI, 'getProduct06')); ?>
</td>
								<?php /* tag "td" from line 32 */; ?>
<td align="center"><?php echo phptal_escape($ctx->path($ctx->PI, 'getProduct10')); ?>
</td>
								<?php /* tag "td" from line 33 */; ?>
<td align="center"><?php echo phptal_escape($ctx->path($ctx->PI, 'getProduct18')); ?>
</td>
								<?php /* tag "td" from line 34 */; ?>
<td align="center"><?php echo phptal_escape($ctx->path($ctx->PI, 'getProduct08')); ?>
</td>								
								<?php /* tag "td" from line 35 */; ?>
<td align="center"><?php echo phptal_escape($ctx->path($ctx->PI, 'getProduct11')); ?>
</td>					
								<?php /* tag "td" from line 36 */; ?>
<td align="center"><?php echo phptal_escape($ctx->path($ctx->PI, 'getProduct13')); ?>
</td>
								<?php /* tag "td" from line 37 */; ?>
<td align="center"><?php echo phptal_escape($ctx->path($ctx->PI, 'getProduct15')); ?>
</td>
								<?php /* tag "td" from line 38 */; ?>
<td align="center"><?php echo phptal_escape($ctx->path($ctx->PI, 'getProduct19')); ?>
</td>
								<?php /* tag "td" from line 39 */; ?>
<td align="center"><?php echo phptal_escape($ctx->path($ctx->PI, 'getProduct22')); ?>
</td>
							</tr><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

						</tbody>
					</table><?php 
/* end */ ;

}

?>
<?php /* 
*** DO NOT EDIT THIS FILE ***

Generated by PHPTAL from /home/a23app/public_html/banhreht/mvc/templates/PrintProductImports1.html (edit that file instead) */; ?>