<?php 
function tpl_50fa0f14_PrintCustomerPETrack__SkswH4LNLMEtyVs2VqWxqw(PHPTAL $tpl, PHPTAL_Context $ctx) {
$_thistpl = $tpl ;
$_translator = $tpl->getTranslator() ;
/* tag "documentElement" from line 1 */ ;
/* tag "html" from line 1 */ ;
?>
<html>	
<?php /* tag "body" from line 2 */; ?>
<body>			
				<?php /* tag "table" from line 3 */; ?>
<table border="1" cellspacing="0" cellpadding="2">
					<?php /* tag "tr" from line 4 */; ?>
<tr>
						<?php /* tag "th" from line 5 */; ?>
<th align="center" width="20%"><?php /* tag "b" from line 5 */; ?>
<b>NGÀY</b></th>
						<?php /* tag "th" from line 6 */; ?>
<th align="left"><?php /* tag "b" from line 6 */; ?>
<b>SẢN PHẨM</b></th>
						<?php /* tag "th" from line 7 */; ?>
<th align="right"><?php /* tag "b" from line 7 */; ?>
<b>SỐ LƯỢNG</b></th>
						<?php /* tag "th" from line 8 */; ?>
<th align="right"><?php /* tag "b" from line 8 */; ?>
<b>ĐƠN GIÁ</b></th>
						<?php /* tag "th" from line 9 */; ?>
<th align="right"><?php /* tag "b" from line 9 */; ?>
<b>THÀNH TIỀN</b></th>
					</tr>
					<?php 
/* tag "tr" from line 11 */ ;
$_tmp_1 = $ctx->repeat ;
$_tmp_1->PE = new PHPTAL_RepeatController($ctx->PEs)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->PE as $ctx->PE): ;
?>
<tr>
						<?php /* tag "td" from line 12 */; ?>
<td align="center"><?php echo phptal_escape($ctx->path($ctx->PE, 'getDatePrint')); ?>
</td>
						<?php /* tag "td" from line 13 */; ?>
<td align="left"><?php echo phptal_escape($ctx->path($ctx->PE, 'getNameProduct')); ?>
</td>
						<?php /* tag "td" from line 14 */; ?>
<td align="right"><?php echo phptal_escape($ctx->path($ctx->PE, 'getQuantityPrint')); ?>
</td>
						<?php /* tag "td" from line 15 */; ?>
<td align="right"><?php echo phptal_escape($ctx->path($ctx->PE, 'getPricePrint')); ?>
</td>
						<?php /* tag "td" from line 16 */; ?>
<td align="right"><?php echo phptal_escape($ctx->path($ctx->PE, 'getValuePrint')); ?>
</td>
					</tr><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

				</table>
		
</body>
</html><?php 
/* end */ ;

}

?>
<?php /* 
*** DO NOT EDIT THIS FILE ***

Generated by PHPTAL from /home/a23app/public_html/banhreht/mvc/templates/PrintCustomerPETracking.html (edit that file instead) */; ?>