<?php 
function tpl_51e5208e_PrintResourceExportT__4pRPXa_78rPi7VPaFiTQAA(PHPTAL $tpl, PHPTAL_Context $ctx) {
$_thistpl = $tpl ;
$_translator = $tpl->getTranslator() ;
/* tag "documentElement" from line 1 */ ;
/* tag "html" from line 1 */ ;
?>
<html>	
<?php /* tag "body" from line 2 */; ?>
<body>
	<?php /* tag "table" from line 3 */; ?>
<table align="center" border="1" cellspacing="0" cellpadding="2">
		<?php /* tag "tr" from line 4 */; ?>
<tr>					
			<?php /* tag "td" from line 5 */; ?>
<td align="left" width="37%"><?php /* tag "b" from line 5 */; ?>
<b>TÊN</b></td>
			<?php /* tag "td" from line 6 */; ?>
<td align="right" width="7%"><?php /* tag "b" from line 6 */; ?>
<b>Bột</b></td>
			<?php /* tag "td" from line 7 */; ?>
<td align="right" width="7%"><?php /* tag "b" from line 7 */; ?>
<b>Nilon</b></td>
			<?php /* tag "td" from line 8 */; ?>
<td align="right" width="7%"><?php /* tag "b" from line 8 */; ?>
<b>Dầu đặc</b></td>
			<?php /* tag "td" from line 9 */; ?>
<td align="right" width="7%"><?php /* tag "b" from line 9 */; ?>
<b>Dầu nước</b></td>
			<?php /* tag "td" from line 10 */; ?>
<td align="right" width="7%"><?php /* tag "b" from line 10 */; ?>
<b>Cal</b></td>
			<?php /* tag "td" from line 11 */; ?>
<td align="right" width="7%"><?php /* tag "b" from line 11 */; ?>
<b>Gas</b></td>
			<?php /* tag "td" from line 12 */; ?>
<td align="right" width="7%"><?php /* tag "b" from line 12 */; ?>
<b>Bột năng</b></td>
			<?php /* tag "td" from line 13 */; ?>
<td align="right" width="7%"><?php /* tag "b" from line 13 */; ?>
<b>Bột pha</b></td>
			<?php /* tag "td" from line 14 */; ?>
<td align="right" width="7%"><?php /* tag "b" from line 14 */; ?>
<b>Mũ cũ</b></td>
		</tr>
		<?php 
/* tag "tr" from line 16 */ ;
$_tmp_1 = $ctx->repeat ;
$_tmp_1->RET = new PHPTAL_RepeatController($ctx->RETs)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->RET as $ctx->RET): ;
?>
<tr>			
			<?php /* tag "td" from line 17 */; ?>
<td align="left"><?php echo phptal_escape($ctx->path($ctx->RET, 'getName')); ?>
</td>
			<?php /* tag "td" from line 18 */; ?>
<td align="right"><?php echo phptal_escape($ctx->path($ctx->RET, 'getResource01Print')); ?>
</td>
			<?php /* tag "td" from line 19 */; ?>
<td align="right"><?php echo phptal_escape($ctx->path($ctx->RET, 'getResource02Print')); ?>
</td>
			<?php /* tag "td" from line 20 */; ?>
<td align="right"><?php echo phptal_escape($ctx->path($ctx->RET, 'getResource03Print')); ?>
</td>
			<?php /* tag "td" from line 21 */; ?>
<td align="right"><?php echo phptal_escape($ctx->path($ctx->RET, 'getResource04Print')); ?>
</td>
			<?php /* tag "td" from line 22 */; ?>
<td align="right"><?php echo phptal_escape($ctx->path($ctx->RET, 'getResource05Print')); ?>
</td>
			<?php /* tag "td" from line 23 */; ?>
<td align="right"><?php echo phptal_escape($ctx->path($ctx->RET, 'getResource06Print')); ?>
</td>
			<?php /* tag "td" from line 24 */; ?>
<td align="right"><?php echo phptal_escape($ctx->path($ctx->RET, 'getResource07Print')); ?>
</td>
			<?php /* tag "td" from line 25 */; ?>
<td align="right"><?php echo phptal_escape($ctx->path($ctx->RET, 'getResource08Print')); ?>
</td>
			<?php /* tag "td" from line 26 */; ?>
<td align="right"><?php echo phptal_escape($ctx->path($ctx->RET, 'getResource09Print')); ?>
</td>
		</tr><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

		<?php /* tag "tr" from line 28 */; ?>
<tr>					
			<?php /* tag "td" from line 29 */; ?>
<td align="left"><?php /* tag "b" from line 29 */; ?>
<b>TỔNG</b></td>
			<?php /* tag "td" from line 30 */; ?>
<td align="right"><?php /* tag "b" from line 30 */; ?>
<b><?php echo phptal_escape($ctx->SR01); ?>
</b></td>
			<?php /* tag "td" from line 31 */; ?>
<td align="right"><?php /* tag "b" from line 31 */; ?>
<b><?php echo phptal_escape($ctx->SR02); ?>
</b></td>
			<?php /* tag "td" from line 32 */; ?>
<td align="right"><?php /* tag "b" from line 32 */; ?>
<b><?php echo phptal_escape($ctx->SR03); ?>
</b></td>
			<?php /* tag "td" from line 33 */; ?>
<td align="right"><?php /* tag "b" from line 33 */; ?>
<b><?php echo phptal_escape($ctx->SR04); ?>
</b></td>
			<?php /* tag "td" from line 34 */; ?>
<td align="right"><?php /* tag "b" from line 34 */; ?>
<b><?php echo phptal_escape($ctx->SR05); ?>
</b></td>
			<?php /* tag "td" from line 35 */; ?>
<td align="right"><?php /* tag "b" from line 35 */; ?>
<b><?php echo phptal_escape($ctx->SR06); ?>
</b></td>
			<?php /* tag "td" from line 36 */; ?>
<td align="right"><?php /* tag "b" from line 36 */; ?>
<b><?php echo phptal_escape($ctx->SR07); ?>
</b></td>
			<?php /* tag "td" from line 37 */; ?>
<td align="right"><?php /* tag "b" from line 37 */; ?>
<b><?php echo phptal_escape($ctx->SR08); ?>
</b></td>
			<?php /* tag "td" from line 38 */; ?>
<td align="right"><?php /* tag "b" from line 38 */; ?>
<b><?php echo phptal_escape($ctx->SR09); ?>
</b></td>
		</tr>
	</table>	
</body>
</html><?php 
/* end */ ;

}

?>
<?php /* 
*** DO NOT EDIT THIS FILE ***

Generated by PHPTAL from /home/banhreht/public_html/mvc/templates/PrintResourceExportTrackings.html (edit that file instead) */; ?>