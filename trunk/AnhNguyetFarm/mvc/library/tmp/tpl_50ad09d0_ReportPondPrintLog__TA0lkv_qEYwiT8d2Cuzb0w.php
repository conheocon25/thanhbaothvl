<?php 
function tpl_50ad09d0_ReportPondPrintLog__TA0lkv_qEYwiT8d2Cuzb0w(PHPTAL $tpl, PHPTAL_Context $ctx) {
$_thistpl = $tpl ;
$_translator = $tpl->getTranslator() ;
/* tag "documentElement" from line 1 */ ;
/* tag "style" from line 1 */ ;
?>
<style type="text/css">
	.hor-minimalist-a{	background: #fff;margin: 45px;border-collapse: collapse;text-align: left;}
	.hor-minimalist-a th{ font-weight: normal; border: 1px solid #000; }
	.hor-minimalist-a td{ padding: 8px; border-right: 1px solid #000; border-left: 1px solid #000; }
</style>
<?php /* tag "font" from line 6 */; ?>
<font size="10">
	<?php /* tag "table" from line 7 */; ?>
<table width="100%" cellpadding="1" cellspacing="0" border="0">
		<?php /* tag "tr" from line 8 */; ?>
<tr>
			<?php /* tag "td" from line 9 */; ?>
<td width="30%" align="center">TRẠI CÁ ÁNH NGUYỆT</td>
			<?php /* tag "td" from line 10 */; ?>
<td width="70%" rowspan="3" align="center">
				<?php /* tag "font" from line 11 */; ?>
<font size="18"><?php /* tag "b" from line 11 */; ?>
<b>TỔNG HỢP NHẬT KÝ <?php /* tag "span" from line 11 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Pond, 'getName')); ?>
</span></b></font>
			</td>
		</tr>
		<?php /* tag "tr" from line 14 */; ?>
<tr>			
			<?php /* tag "td" from line 15 */; ?>
<td width="30%" align="center">An Hòa, Châu Thành, Đồng Tháp</td>
		</tr>
		<?php /* tag "tr" from line 17 */; ?>
<tr>			
			<?php /* tag "td" from line 18 */; ?>
<td width="30%" align="center">ĐT: 0939.438837 Fax: 0673.123456</td>
		</tr>
	</table>
</font>
<?php /* tag "br" from line 22 */; ?>
<br/>
<?php /* tag "table" from line 23 */; ?>
<table width="100%" border="1" cellpadding="2">
	<?php /* tag "thead" from line 24 */; ?>
<thead>
		<?php /* tag "tr" from line 25 */; ?>
<tr>
			<?php /* tag "th" from line 26 */; ?>
<th width="5%" align="center"><?php /* tag "B" from line 26 */; ?>
<B>STT</B></th>
			<?php /* tag "th" from line 27 */; ?>
<th width="15%" align="center"><?php /* tag "B" from line 27 */; ?>
<B>THỜI GIAN</B></th>
			<?php /* tag "th" from line 28 */; ?>
<th width="10%" align="right"><?php /* tag "B" from line 28 */; ?>
<B>THỨC ĂN</B></th>
			<?php /* tag "th" from line 29 */; ?>
<th width="15%" align="right"><?php /* tag "B" from line 29 */; ?>
<B>T.THỨC ĂN</B></th>
			<?php /* tag "th" from line 30 */; ?>
<th width="2%" align="right"></th>
			<?php /* tag "th" from line 31 */; ?>
<th width="10%" align="right"><?php /* tag "B" from line 31 */; ?>
<B>NHẬP VỀ</B></th>
			<?php /* tag "th" from line 32 */; ?>
<th width="15%" align="right"><?php /* tag "B" from line 32 */; ?>
<B>TỒN LẠI</B></th>
			<?php /* tag "th" from line 33 */; ?>
<th width="3%" align="right"></th>
			<?php /* tag "th" from line 34 */; ?>
<th width="10%" align="right"><?php /* tag "B" from line 34 */; ?>
<B>HAO HỤT</B></th>
			<?php /* tag "th" from line 35 */; ?>
<th width="15%" align="right"><?php /* tag "B" from line 35 */; ?>
<B>T.HAO HỤT</B></th>
		</tr>
	</thead>
	<?php /* tag "tbody" from line 38 */; ?>
<tbody>
		<?php 
/* tag "tr" from line 39 */ ;
$_tmp_1 = $ctx->repeat ;
$_tmp_1->Track = new PHPTAL_RepeatController($ctx->path($ctx->Pond, 'getCurrentSession/getLogTrackings'))
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->Track as $ctx->Track): ;
?>
<tr>
			<?php /* tag "td" from line 40 */; ?>
<td width="5%" align="center"><?php /* tag "span" from line 40 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->repeat, 'Track/number')); ?>
</span></td>
			<?php /* tag "td" from line 41 */; ?>
<td width="15%" align="center"><?php /* tag "span" from line 41 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Track, 'getDateRangePrint')); ?>
</span></td>
			<?php /* tag "td" from line 42 */; ?>
<td width="10%" align="right"><?php echo phptal_escape($ctx->path($ctx->Track, 'getOrdersCountPrint')); ?>
</td>
			<?php /* tag "td" from line 43 */; ?>
<td width="15%" align="right"><?php echo phptal_escape($ctx->path($ctx->Track, 'getSOrdersCountPrint')); ?>
</td>
			<?php /* tag "td" from line 44 */; ?>
<td width="2%" align="right"></td>
			<?php /* tag "td" from line 45 */; ?>
<td width="10%" align="right"><?php echo phptal_escape($ctx->path($ctx->Track, 'getOrderImportsCountPrint')); ?>
</td>
			<?php /* tag "td" from line 46 */; ?>
<td width="15%" align="right"><?php echo phptal_escape($ctx->path($ctx->Track, 'getSOrderImportsCountRemainPrint')); ?>
</td>
			<?php /* tag "td" from line 47 */; ?>
<td width="3%" align="right"></td>
			<?php /* tag "td" from line 48 */; ?>
<td width="10%" align="right"><?php echo phptal_escape($ctx->path($ctx->Track, 'getLogsCountPrint')); ?>
</td>
			<?php /* tag "td" from line 49 */; ?>
<td width="15%" align="right"><?php echo phptal_escape($ctx->path($ctx->Track, 'getSLogsCountPrint')); ?>
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

Generated by PHPTAL from /home/a23app/public_html/anhnguyetfarm/mvc/templates/ReportPondPrintLog.html (edit that file instead) */; ?>