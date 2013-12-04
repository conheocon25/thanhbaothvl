<?php 
function tpl_5012a3ce_PrintEmployeeProduce__d6Za4uxGNvXah0cX7ztPow(PHPTAL $tpl, PHPTAL_Context $ctx) {
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
			<?php /* tag "th" from line 5 */; ?>
<th align="center" width="3%"><?php /* tag "B" from line 5 */; ?>
<B>STT</B></th>
			<?php /* tag "th" from line 6 */; ?>
<th align="left" width="17%"><?php /* tag "B" from line 6 */; ?>
<B>TÊN</B></th>
			<?php /* tag "th" from line 7 */; ?>
<th align="center" width="10%"><?php /* tag "B" from line 7 */; ?>
<B>16x30<?php /* tag "BR" from line 7 */; ?>
<BR/>(90g)</B></th>
			<?php /* tag "th" from line 8 */; ?>
<th align="center" width="10%"><?php /* tag "B" from line 8 */; ?>
<B>16x30<?php /* tag "BR" from line 8 */; ?>
<BR/>(150g)</B></th>								
			<?php /* tag "th" from line 9 */; ?>
<th align="center" width="10%"><?php /* tag "B" from line 9 */; ?>
<B>16calx30<?php /* tag "BR" from line 9 */; ?>
<BR/>(150g)</B></th>								
			<?php /* tag "th" from line 10 */; ?>
<th align="center" width="10%"><?php /* tag "B" from line 10 */; ?>
<B>18x30<?php /* tag "BR" from line 10 */; ?>
<BR/>(180g)</B></th>								
			<?php /* tag "th" from line 11 */; ?>
<th align="center" width="10%"><?php /* tag "B" from line 11 */; ?>
<B>19x30<?php /* tag "BR" from line 11 */; ?>
<BR/>(210g)</B></th>
			<?php /* tag "th" from line 12 */; ?>
<th align="center" width="10%"><?php /* tag "B" from line 12 */; ?>
<B>19x45<?php /* tag "BR" from line 12 */; ?>
<BR/>(300g)</B></th>								
			<?php /* tag "th" from line 13 */; ?>
<th align="center" width="10%"><?php /* tag "B" from line 13 */; ?>
<B>20x30<?php /* tag "BR" from line 13 */; ?>
<BR/>(210g)</B></th>
			<?php /* tag "th" from line 14 */; ?>
<th align="center" width="10%"><?php /* tag "B" from line 14 */; ?>
<B>22x30<?php /* tag "BR" from line 14 */; ?>
<BR/>(240g)</B></th>
		</tr>
		<?php 
/* tag "tr" from line 16 */ ;
$_tmp_1 = $ctx->repeat ;
$_tmp_1->EmployeeProduceTracking = new PHPTAL_RepeatController($ctx->EmployeeProduceTrackings)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->EmployeeProduceTracking as $ctx->EmployeeProduceTracking): ;
?>
<tr>								
			<?php /* tag "td" from line 17 */; ?>
<td align="center"><?php echo phptal_escape($ctx->path($ctx->EmployeeProduceTracking, 'getId')); ?>
</td>
			<?php /* tag "td" from line 18 */; ?>
<td align="left"><?php echo phptal_escape($ctx->path($ctx->EmployeeProduceTracking, 'getName')); ?>
</td>
			<?php /* tag "td" from line 19 */; ?>
<td align="center"><?php 
/* tag "span" from line 19 */ ;
if ($ctx->path($ctx->EmployeeProduceTracking, 'getProduct02')):  ;
?>
<span><?php echo phptal_escape($ctx->path($ctx->EmployeeProduceTracking, 'getProduct02')); ?>
</span><?php endif; ?>
</td>
			<?php /* tag "td" from line 20 */; ?>
<td align="center"><?php 
/* tag "span" from line 20 */ ;
if ($ctx->path($ctx->EmployeeProduceTracking, 'getProduct04')):  ;
?>
<span><?php echo phptal_escape($ctx->path($ctx->EmployeeProduceTracking, 'getProduct04')); ?>
</span><?php endif; ?>
</td>
			<?php /* tag "td" from line 21 */; ?>
<td align="center"><?php 
/* tag "span" from line 21 */ ;
if ($ctx->path($ctx->EmployeeProduceTracking, 'getProduct06')):  ;
?>
<span><?php echo phptal_escape($ctx->path($ctx->EmployeeProduceTracking, 'getProduct06')); ?>
</span><?php endif; ?>
</td>
			<?php /* tag "td" from line 22 */; ?>
<td align="center"><?php 
/* tag "span" from line 22 */ ;
if ($ctx->path($ctx->EmployeeProduceTracking, 'getProduct08')):  ;
?>
<span><?php echo phptal_escape($ctx->path($ctx->EmployeeProduceTracking, 'getProduct08')); ?>
</span><?php endif; ?>
</td>
			<?php /* tag "td" from line 23 */; ?>
<td align="center"><?php 
/* tag "span" from line 23 */ ;
if ($ctx->path($ctx->EmployeeProduceTracking, 'getProduct10')):  ;
?>
<span><?php echo phptal_escape($ctx->path($ctx->EmployeeProduceTracking, 'getProduct10')); ?>
</span><?php endif; ?>
</td>
			<?php /* tag "td" from line 24 */; ?>
<td align="center"><?php 
/* tag "span" from line 24 */ ;
if ($ctx->path($ctx->EmployeeProduceTracking, 'getProduct11')):  ;
?>
<span><?php echo phptal_escape($ctx->path($ctx->EmployeeProduceTracking, 'getProduct11')); ?>
</span><?php endif; ?>
</td>						
			<?php /* tag "td" from line 25 */; ?>
<td align="center"><?php 
/* tag "span" from line 25 */ ;
if ($ctx->path($ctx->EmployeeProduceTracking, 'getProduct13')):  ;
?>
<span><?php echo phptal_escape($ctx->path($ctx->EmployeeProduceTracking, 'getProduct13')); ?>
</span><?php endif; ?>
</td>			
			<?php /* tag "td" from line 26 */; ?>
<td align="center"><?php 
/* tag "span" from line 26 */ ;
if ($ctx->path($ctx->EmployeeProduceTracking, 'getProduct15')):  ;
?>
<span><?php echo phptal_escape($ctx->path($ctx->EmployeeProduceTracking, 'getProduct15')); ?>
</span><?php endif; ?>
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

Generated by PHPTAL from /home/a23app/public_html/bra/mvc/templates/PrintEmployeeProduceTrackings2.html (edit that file instead) */; ?>