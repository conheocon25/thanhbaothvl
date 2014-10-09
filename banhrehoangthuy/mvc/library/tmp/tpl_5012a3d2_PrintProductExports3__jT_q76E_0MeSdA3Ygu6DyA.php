<?php 
function tpl_5012a3d2_PrintProductExports3__jT_q76E_0MeSdA3Ygu6DyA(PHPTAL $tpl, PHPTAL_Context $ctx) {
$_thistpl = $tpl ;
$_translator = $tpl->getTranslator() ;
/* tag "documentElement" from line 1 */ ;
/* tag "table" from line 1 */ ;
?>
<table cellpadding="1" cellspacing="0" border="1">
						<?php /* tag "thead" from line 2 */; ?>
<thead>					
							<?php /* tag "tr" from line 3 */; ?>
<tr>
								<?php /* tag "th" from line 4 */; ?>
<th align="left" width="60px"><?php /* tag "B" from line 4 */; ?>
<B>NGÀY</B></th>
								<?php /* tag "th" from line 5 */; ?>
<th align="left"><?php /* tag "B" from line 5 */; ?>
<B>3g<?php /* tag "BR" from line 5 */; ?>
<BR/>dầu</B></th>
								<?php /* tag "th" from line 6 */; ?>
<th align="left"><?php /* tag "B" from line 6 */; ?>
<B>3g<?php /* tag "BR" from line 6 */; ?>
<BR/>mỡ</B></th>
								<?php /* tag "th" from line 7 */; ?>
<th align="left"><?php /* tag "B" from line 7 */; ?>
<B>3g<?php /* tag "BR" from line 7 */; ?>
<BR/>ds</B></th>
								<?php /* tag "th" from line 8 */; ?>
<th align="left"><?php /* tag "B" from line 8 */; ?>
<B>5g<?php /* tag "BR" from line 8 */; ?>
<BR/>dầu</B></th>
								<?php /* tag "th" from line 9 */; ?>
<th align="left"><?php /* tag "B" from line 9 */; ?>
<B>5g<?php /* tag "BR" from line 9 */; ?>
<BR/>mỡ</B></th>
								<?php /* tag "th" from line 10 */; ?>
<th align="left"><?php /* tag "B" from line 10 */; ?>
<B>5g<?php /* tag "BR" from line 10 */; ?>
<BR/>ds</B></th>
								<?php /* tag "th" from line 11 */; ?>
<th align="left"><?php /* tag "B" from line 11 */; ?>
<B>5.5g<?php /* tag "BR" from line 11 */; ?>
<BR/>dầu</B></th>
								<?php /* tag "th" from line 12 */; ?>
<th align="left"><?php /* tag "B" from line 12 */; ?>
<B>5.5g<?php /* tag "BR" from line 12 */; ?>
<BR/>mỡ</B></th>
								<?php /* tag "th" from line 13 */; ?>
<th align="left"><?php /* tag "B" from line 13 */; ?>
<B>6g<?php /* tag "BR" from line 13 */; ?>
<BR/>dầu</B></th>
								<?php /* tag "th" from line 14 */; ?>
<th align="left"><?php /* tag "B" from line 14 */; ?>
<B>6g<?php /* tag "BR" from line 14 */; ?>
<BR/>mỡ</B></th>
								<?php /* tag "th" from line 15 */; ?>
<th align="left"><?php /* tag "B" from line 15 */; ?>
<B>6g<?php /* tag "BR" from line 15 */; ?>
<BR/>ds</B></th>
								<?php /* tag "th" from line 16 */; ?>
<th align="left"><?php /* tag "B" from line 16 */; ?>
<B>6.5g<?php /* tag "BR" from line 16 */; ?>
<BR/>dầu</B></th>
								<?php /* tag "th" from line 17 */; ?>
<th align="left"><?php /* tag "B" from line 17 */; ?>
<B>6.5g<?php /* tag "BR" from line 17 */; ?>
<BR/>mỡ</B></th>
								<?php /* tag "th" from line 18 */; ?>
<th align="left"><?php /* tag "B" from line 18 */; ?>
<B>6.5g<?php /* tag "BR" from line 18 */; ?>
<BR/>ds</B></th>
								<?php /* tag "th" from line 19 */; ?>
<th align="left"><?php /* tag "B" from line 19 */; ?>
<B>7g<?php /* tag "BR" from line 19 */; ?>
<BR/>dầu</B></th>
								<?php /* tag "th" from line 20 */; ?>
<th align="left"><?php /* tag "B" from line 20 */; ?>
<B>7g<?php /* tag "BR" from line 20 */; ?>
<BR/>mỡ</B></th>
								<?php /* tag "th" from line 21 */; ?>
<th align="left"><?php /* tag "B" from line 21 */; ?>
<B>7g<?php /* tag "BR" from line 21 */; ?>
<BR/>ds</B></th>
								<?php /* tag "th" from line 22 */; ?>
<th align="left"><?php /* tag "B" from line 22 */; ?>
<B>8g<?php /* tag "BR" from line 22 */; ?>
<BR/>dầu</B></th>
								<?php /* tag "th" from line 23 */; ?>
<th align="left"><?php /* tag "B" from line 23 */; ?>
<B>8g<?php /* tag "BR" from line 23 */; ?>
<BR/>mỡ</B></th>
								<?php /* tag "th" from line 24 */; ?>
<th align="left"><?php /* tag "B" from line 24 */; ?>
<B>8g<?php /* tag "BR" from line 24 */; ?>
<BR/>ds</B></th>
							</tr>
						</thead>
						<?php /* tag "tbody" from line 27 */; ?>
<tbody>
							<?php 
/* tag "tr" from line 28 */ ;
$_tmp_1 = $ctx->repeat ;
$_tmp_1->PETracking = new PHPTAL_RepeatController($ctx->PETrackings)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->PETracking as $ctx->PETracking): ;
?>
<tr>								
								<?php /* tag "td" from line 29 */; ?>
<td align="left" width="60px">
									<?php /* tag "B" from line 30 */; ?>
<B><?php echo phptal_escape($ctx->path($ctx->PETracking, 'getDatePrint')); ?>
</B>
								</td>								
								<?php /* tag "td" from line 32 */; ?>
<td align="left"><?php echo phptal_escape($ctx->path($ctx->PETracking, 'getProduct05')); ?>
</td>
								<?php /* tag "td" from line 33 */; ?>
<td align="left"><?php echo phptal_escape($ctx->path($ctx->PETracking, 'getProduct06')); ?>
</td>
								<?php /* tag "td" from line 34 */; ?>
<td align="left"><?php echo phptal_escape($ctx->path($ctx->PETracking, 'getProduct07')); ?>
</td>
								<?php /* tag "td" from line 35 */; ?>
<td align="left"><?php echo phptal_escape($ctx->path($ctx->PETracking, 'getProduct08')); ?>
</td>
								<?php /* tag "td" from line 36 */; ?>
<td align="left"><?php echo phptal_escape($ctx->path($ctx->PETracking, 'getProduct09')); ?>
</td>
								<?php /* tag "td" from line 37 */; ?>
<td align="left"><?php echo phptal_escape($ctx->path($ctx->PETracking, 'getProduct10')); ?>
</td>
								<?php /* tag "td" from line 38 */; ?>
<td align="left"><?php echo phptal_escape($ctx->path($ctx->PETracking, 'getProduct27')); ?>
</td>
								<?php /* tag "td" from line 39 */; ?>
<td align="left"><?php echo phptal_escape($ctx->path($ctx->PETracking, 'getProduct28')); ?>
</td>
								<?php /* tag "td" from line 40 */; ?>
<td align="left"><?php echo phptal_escape($ctx->path($ctx->PETracking, 'getProduct12')); ?>
</td>
								<?php /* tag "td" from line 41 */; ?>
<td align="left"><?php echo phptal_escape($ctx->path($ctx->PETracking, 'getProduct13')); ?>
</td>
								<?php /* tag "td" from line 42 */; ?>
<td align="left"><?php echo phptal_escape($ctx->path($ctx->PETracking, 'getProduct14')); ?>
</td>
								<?php /* tag "td" from line 43 */; ?>
<td align="left"><?php echo phptal_escape($ctx->path($ctx->PETracking, 'getProduct15')); ?>
</td>
								<?php /* tag "td" from line 44 */; ?>
<td align="left"><?php echo phptal_escape($ctx->path($ctx->PETracking, 'getProduct16')); ?>
</td>
								<?php /* tag "td" from line 45 */; ?>
<td align="left"><?php echo phptal_escape($ctx->path($ctx->PETracking, 'getProduct17')); ?>
</td>
								<?php /* tag "td" from line 46 */; ?>
<td align="left"><?php echo phptal_escape($ctx->path($ctx->PETracking, 'getProduct18')); ?>
</td>
								<?php /* tag "td" from line 47 */; ?>
<td align="left"><?php echo phptal_escape($ctx->path($ctx->PETracking, 'getProduct19')); ?>
</td>
								<?php /* tag "td" from line 48 */; ?>
<td align="left"><?php echo phptal_escape($ctx->path($ctx->PETracking, 'getProduct20')); ?>
</td>
								<?php /* tag "td" from line 49 */; ?>
<td align="left"><?php echo phptal_escape($ctx->path($ctx->PETracking, 'getProduct24')); ?>
</td>
								<?php /* tag "td" from line 50 */; ?>
<td align="left"><?php echo phptal_escape($ctx->path($ctx->PETracking, 'getProduct25')); ?>
</td>
								<?php /* tag "td" from line 51 */; ?>
<td align="left"><?php echo phptal_escape($ctx->path($ctx->PETracking, 'getProduct26')); ?>
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

Generated by PHPTAL from /home/a23app/public_html/bra/mvc/templates/PrintProductExports3.html (edit that file instead) */; ?>