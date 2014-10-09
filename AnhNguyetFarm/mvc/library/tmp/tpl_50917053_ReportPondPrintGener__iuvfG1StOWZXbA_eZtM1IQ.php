<?php 
function tpl_50917053_ReportPondPrintGener__iuvfG1StOWZXbA_eZtM1IQ(PHPTAL $tpl, PHPTAL_Context $ctx) {
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
<b>TỔNG KẾT VỤ NUÔI <?php /* tag "span" from line 11 */; ?>
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
<td width="30%" align="center">ĐT: 0939.438837 Fax: 3??????</td>
		</tr>
	</table>
</font>

<?php /* tag "H3" from line 23 */; ?>
<H3>1. THÔNG TIN</H3>
<?php /* tag "table" from line 24 */; ?>
<table width="100%" border="0" cellpadding="2">
	<?php /* tag "tr" from line 25 */; ?>
<tr>
		<?php /* tag "td" from line 26 */; ?>
<td width="25%" align="right">Hình thức:</td>
		<?php /* tag "td" from line 27 */; ?>
<td width="75%" align="left"><?php echo phptal_escape($ctx->path($ctx->PondSession, 'getTypePrint')); ?>
</td>
	</tr>
	<?php /* tag "tr" from line 29 */; ?>
<tr>
		<?php /* tag "td" from line 30 */; ?>
<td align="right">Bắt đầu:</td>
		<?php /* tag "td" from line 31 */; ?>
<td align="left"><?php echo phptal_escape($ctx->path($ctx->PondSession, 'getDateStartPrint')); ?>
</td>
	</tr>
	<?php /* tag "tr" from line 33 */; ?>
<tr>
		<?php /* tag "td" from line 34 */; ?>
<td align="right">Kết thúc:</td>
		<?php /* tag "td" from line 35 */; ?>
<td align="left"><?php echo phptal_escape($ctx->path($ctx->PondSession, 'getDateEndPrint')); ?>
</td>
	</tr>
	<?php /* tag "tr" from line 37 */; ?>
<tr>
		<?php /* tag "td" from line 38 */; ?>
<td align="right">Tổng thời gian:</td>
		<?php /* tag "td" from line 39 */; ?>
<td align="left"><?php echo phptal_escape($ctx->path($ctx->PondSession, 'getTimesPrint')); ?>
</td>
	</tr>
	<?php /* tag "tr" from line 41 */; ?>
<tr>
		<?php /* tag "td" from line 42 */; ?>
<td align="right">Cá giống:</td>
		<?php /* tag "td" from line 43 */; ?>
<td align="left"><?php /* tag "span" from line 43 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->PondSession, 'getCountStartPrint')); ?>
</span></td>
	</tr>	
	<?php /* tag "tr" from line 45 */; ?>
<tr>
		<?php /* tag "td" from line 46 */; ?>
<td align="right">Lãi suất vay:</td>
		<?php /* tag "td" from line 47 */; ?>
<td align="left"><?php /* tag "span" from line 47 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->PondSession, 'getBankRatePrint')); ?>
</span></td>
	</tr>
	<?php /* tag "tr" from line 49 */; ?>
<tr>
		<?php /* tag "td" from line 50 */; ?>
<td align="right">Lượng cá ngộp:</td>
		<?php /* tag "td" from line 51 */; ?>
<td align="left"><?php /* tag "span" from line 51 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->PondSession, 'getCountWastePrint')); ?>
</span></td>
	</tr>
	<?php /* tag "tr" from line 53 */; ?>
<tr>
		<?php /* tag "td" from line 54 */; ?>
<td align="right">Giá cá ngộp:</td>
		<?php /* tag "td" from line 55 */; ?>
<td align="left"><?php /* tag "span" from line 55 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->PondSession, 'getPriceWastePrint')); ?>
</span></td>
	</tr>
	
</table>

<?php /* tag "H3" from line 60 */; ?>
<H3>2. THỨC ĂN </H3>
	<?php /* tag "table" from line 61 */; ?>
<table class="hor-minimalist-a" width="100%" border="1" cellpadding="2">
		<?php /* tag "thead" from line 62 */; ?>
<thead>
			<?php /* tag "tr" from line 63 */; ?>
<tr>
				<?php /* tag "th" from line 64 */; ?>
<th width="5%" align="center"><?php /* tag "B" from line 64 */; ?>
<B>STT</B></th>
				<?php /* tag "th" from line 65 */; ?>
<th width="60%"><?php /* tag "B" from line 65 */; ?>
<B>THÁNG</B></th>				
				<?php /* tag "th" from line 66 */; ?>
<th width="35%" align="right"><?php /* tag "B" from line 66 */; ?>
<B>SỐ LƯỢNG</B></th>
			</tr>
		</thead>
		<?php /* tag "tbody" from line 69 */; ?>
<tbody>
			<?php 
/* tag "tr" from line 70 */ ;
$_tmp_1 = $ctx->repeat ;
$_tmp_1->Track = new PHPTAL_RepeatController($ctx->path($ctx->PondSession, 'getOrderTrackings'))
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->Track as $ctx->Track): ;
?>
<tr>
				<?php /* tag "td" from line 71 */; ?>
<td width="5%" align="center"><?php /* tag "span" from line 71 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->repeat, 'Track/number')); ?>
</span></td>
				<?php /* tag "td" from line 72 */; ?>
<td width="60%"><?php /* tag "span" from line 72 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Track, 'getMonthPrint')); ?>
</span></td>
				<?php /* tag "td" from line 73 */; ?>
<td width="35%" align="right"><?php /* tag "span" from line 73 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Track, 'getOrdersCount1Print')); ?>
</span></td>
			</tr><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

		</tbody>		
		<?php /* tag "tfoot" from line 76 */; ?>
<tfoot>
			<?php /* tag "tr" from line 77 */; ?>
<tr>
				<?php /* tag "th" from line 78 */; ?>
<th width="65%" align="right" colspan="3"><?php /* tag "B" from line 78 */; ?>
<B>TỔNG CỘNG</B></th>
				<?php /* tag "th" from line 79 */; ?>
<th width="35%" align="right"><?php /* tag "B" from line 79 */; ?>
<B><?php echo phptal_escape($ctx->path($ctx->PondSession, 'getOrderTrackingsCount1Print')); ?>
</B></th>
			</tr>
		</tfoot>		
	</table>

<?php /* tag "H3" from line 84 */; ?>
<H3>3. THUỐC</H3>
<?php /* tag "table" from line 85 */; ?>
<table class="hor-minimalist-a" width="100%" border="1" cellpadding="2">
	<?php /* tag "thead" from line 86 */; ?>
<thead>
		<?php /* tag "tr" from line 87 */; ?>
<tr>
			<?php /* tag "th" from line 88 */; ?>
<th width="5%" align="center"><?php /* tag "B" from line 88 */; ?>
<B>STT</B></th>
			<?php /* tag "th" from line 89 */; ?>
<th width="60%"><?php /* tag "B" from line 89 */; ?>
<B>THỜI GIAN</B></th>
			<?php /* tag "th" from line 90 */; ?>
<th width="35%" align="right"><?php /* tag "B" from line 90 */; ?>
<B>SỐ TIỀN</B></th>
		</tr>
	</thead>
	<?php /* tag "tbody" from line 93 */; ?>
<tbody>
		<?php 
/* tag "tr" from line 94 */ ;
$_tmp_1 = $ctx->repeat ;
$_tmp_1->PS = new PHPTAL_RepeatController($ctx->path($ctx->PondSession, 'getOrderTrackings1'))
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->PS as $ctx->PS): ;
?>
<tr>	
			<?php /* tag "td" from line 95 */; ?>
<td width="5%" align="center"><?php echo phptal_escape($ctx->path($ctx->repeat, 'PS/number')); ?>
</td>
			<?php /* tag "td" from line 96 */; ?>
<td width="60%"><?php echo phptal_escape($ctx->path($ctx->PS, 'getDateStartPrint')); ?>
</td>
			<?php /* tag "td" from line 97 */; ?>
<td width="35%" align="right">
				<?php 
/* tag "span" from line 98 */ ;
$_tmp_2 = $ctx->repeat ;
$_tmp_2->Order = new PHPTAL_RepeatController($ctx->path($ctx->PS, 'getOrders2'))
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_2->Order as $ctx->Order): ;
?>
<span>
					<?php /* tag "span" from line 99 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Order, 'getValuePrint')); ?>
</span>
				</span><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

			</td>
		</tr><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

	</tbody>
	<?php /* tag "tfoot" from line 104 */; ?>
<tfoot>
		<?php /* tag "tr" from line 105 */; ?>
<tr>
			<?php /* tag "th" from line 106 */; ?>
<th width="65%" align="right" colspan="2"><?php /* tag "B" from line 106 */; ?>
<B>TỔNG CỘNG</B></th>
			<?php /* tag "th" from line 107 */; ?>
<th width="35%" align="right"><?php /* tag "B" from line 107 */; ?>
<B><?php echo phptal_escape($ctx->path($ctx->PondSession, 'getOrderTrackingsValue2Print')); ?>
</B></th>
		</tr>
	</tfoot>
</table>

<?php /* tag "H3" from line 112 */; ?>
<H3>4. CHI PHÍ</H3>	
	<?php /* tag "table" from line 113 */; ?>
<table class="hor-minimalist-a" width="100%" border="1" cellpadding="2">
		<?php /* tag "thead" from line 114 */; ?>
<thead>
			<?php /* tag "tr" from line 115 */; ?>
<tr>
				<?php /* tag "th" from line 116 */; ?>
<th width="5%" align="center"><?php /* tag "B" from line 116 */; ?>
<B>STT</B></th>
				<?php /* tag "th" from line 117 */; ?>
<th width="60%"><?php /* tag "B" from line 117 */; ?>
<B>THÁNG</B></th>
				<?php /* tag "th" from line 118 */; ?>
<th width="35%" align="right"><?php /* tag "B" from line 118 */; ?>
<B>SỐ TIỀN</B></th>
			</tr>
		</thead>
		<?php /* tag "tbody" from line 121 */; ?>
<tbody>
			<?php 
/* tag "tr" from line 122 */ ;
$_tmp_2 = $ctx->repeat ;
$_tmp_2->Track = new PHPTAL_RepeatController($ctx->path($ctx->PondSession, 'getPaidTrackings'))
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_2->Track as $ctx->Track): ;
?>
<tr>
				<?php /* tag "td" from line 123 */; ?>
<td width="5%" align="center"><?php /* tag "span" from line 123 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->repeat, 'Track/number')); ?>
</span></td>
				<?php /* tag "td" from line 124 */; ?>
<td width="60%"><?php /* tag "span" from line 124 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Track, 'getMonthPrint')); ?>
</span></td>
				<?php /* tag "td" from line 125 */; ?>
<td width="35%" align="right"><?php /* tag "span" from line 125 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Track, 'getPaidsValuePrint')); ?>
</span></td>
			</tr><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

		</tbody>
		<?php /* tag "tfoot" from line 128 */; ?>
<tfoot>
			<?php /* tag "tr" from line 129 */; ?>
<tr>
				<?php /* tag "th" from line 130 */; ?>
<th width="65%" align="right" colspan="2"><?php /* tag "B" from line 130 */; ?>
<B>TỔNG CỘNG</B></th>
				<?php /* tag "th" from line 131 */; ?>
<th width="35%" align="right"><?php /* tag "B" from line 131 */; ?>
<B><?php echo phptal_escape($ctx->path($ctx->PondSession, 'getPaidsValuePrint')); ?>
</B></th>
			</tr>
		</tfoot>
	</table>

<?php /* tag "H3" from line 136 */; ?>
<H3>5. TỔNG KẾT</H3>
<?php /* tag "table" from line 137 */; ?>
<table width="100%" border="0" cellpadding="2">
	<?php /* tag "tr" from line 138 */; ?>
<tr>
		<?php /* tag "td" from line 139 */; ?>
<td width="5%"></td>
		<?php /* tag "td" from line 140 */; ?>
<td width="25%" align="right">CON GIỐNG</td>
		<?php /* tag "td" from line 141 */; ?>
<td width="20%" align="right"><?php /* tag "span" from line 141 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->PondSession, 'getValueStartPrint')); ?>
</span></td>
		<?php /* tag "td" from line 142 */; ?>
<td width="50%"></td>
	</tr>
	<?php /* tag "tr" from line 144 */; ?>
<tr>
		<?php /* tag "td" from line 145 */; ?>
<td></td>
		<?php /* tag "td" from line 146 */; ?>
<td align="right">VẬN CHUYỂN</td>
		<?php /* tag "td" from line 147 */; ?>
<td align="right"><?php /* tag "span" from line 147 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->PondSession, 'getShipStartPrint')); ?>
</span></td>
		<?php /* tag "td" from line 148 */; ?>
<td></td>
	</tr>
	<?php /* tag "tr" from line 150 */; ?>
<tr>
		<?php /* tag "td" from line 151 */; ?>
<td></td>
		<?php /* tag "td" from line 152 */; ?>
<td colspan="2" align="right">------------------------------------------------------------------</td>
		<?php /* tag "td" from line 153 */; ?>
<td></td>
	</tr>
	<?php /* tag "tr" from line 155 */; ?>
<tr>
		<?php /* tag "td" from line 156 */; ?>
<td></td>
		<?php /* tag "td" from line 157 */; ?>
<td align="right">TIỀN GIỐNG</td>
		<?php /* tag "td" from line 158 */; ?>
<td align="right"><?php /* tag "span" from line 158 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->PondSession, 'getValueStart1Print')); ?>
</span></td>
		<?php /* tag "td" from line 159 */; ?>
<td></td>
	</tr>
	<?php /* tag "tr" from line 161 */; ?>
<tr>
		<?php /* tag "td" from line 162 */; ?>
<td></td>
		<?php /* tag "td" from line 163 */; ?>
<td colspan="2" align="left">+</td>
		<?php /* tag "td" from line 164 */; ?>
<td></td>
	</tr>
	<?php /* tag "tr" from line 166 */; ?>
<tr>
		<?php /* tag "td" from line 167 */; ?>
<td></td>
		<?php /* tag "td" from line 168 */; ?>
<td align="right">TIỀN THUỐC</td>
		<?php /* tag "td" from line 169 */; ?>
<td align="right"><?php /* tag "span" from line 169 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->PondSession, 'getOrderTrackingsValue2Print')); ?>
</span></td>
		<?php /* tag "td" from line 170 */; ?>
<td></td>
	</tr>
	<?php /* tag "tr" from line 172 */; ?>
<tr>
		<?php /* tag "td" from line 173 */; ?>
<td></td>
		<?php /* tag "td" from line 174 */; ?>
<td align="right">CHI PHÍ NUÔI</td>
		<?php /* tag "td" from line 175 */; ?>
<td align="right"><?php /* tag "span" from line 175 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->PondSession, 'getPaidsValuePrint')); ?>
</span></td>
		<?php /* tag "td" from line 176 */; ?>
<td></td>
	</tr>
	<?php /* tag "tr" from line 178 */; ?>
<tr>
		<?php /* tag "td" from line 179 */; ?>
<td></td>
		<?php /* tag "td" from line 180 */; ?>
<td colspan="2" align="right">------------------------------------------------------------------</td>
		<?php /* tag "td" from line 181 */; ?>
<td></td>
	</tr>
	<?php /* tag "tr" from line 183 */; ?>
<tr>
		<?php /* tag "td" from line 184 */; ?>
<td></td>
		<?php /* tag "td" from line 185 */; ?>
<td align="right"><?php /* tag "B" from line 185 */; ?>
<B>(1) TỔNG CHI</B></td>
		<?php /* tag "td" from line 186 */; ?>
<td align="right"><?php /* tag "B" from line 186 */; ?>
<B><?php echo phptal_escape($ctx->path($ctx->PondSession, 'getValueExportPrint')); ?>
</B></td>
		<?php /* tag "td" from line 187 */; ?>
<td></td>
	</tr>
	<?php /* tag "tr" from line 189 */; ?>
<tr>
		<?php /* tag "td" from line 190 */; ?>
<td></td>
		<?php /* tag "td" from line 191 */; ?>
<td align="right"><?php /* tag "B" from line 191 */; ?>
<B>(2) LÃI SUẤT</B></td>
		<?php /* tag "td" from line 192 */; ?>
<td align="right"><?php /* tag "B" from line 192 */; ?>
<B><?php echo phptal_escape($ctx->path($ctx->PondSession, 'getValueExportRatePrint')); ?>
</B></td>
		<?php /* tag "td" from line 193 */; ?>
<td></td>
	</tr>
	<?php /* tag "tr" from line 195 */; ?>
<tr>
		<?php /* tag "td" from line 196 */; ?>
<td></td>
		<?php /* tag "td" from line 197 */; ?>
<td colspan="2" align="left">-</td>
		<?php /* tag "td" from line 198 */; ?>
<td></td>
	</tr>
	<?php /* tag "tr" from line 200 */; ?>
<tr>
		<?php /* tag "td" from line 201 */; ?>
<td></td>
		<?php /* tag "td" from line 202 */; ?>
<td align="right">XUẤT BÁN</td>
		<?php /* tag "td" from line 203 */; ?>
<td align="right"><?php /* tag "span" from line 203 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->PondSession, 'getCountExportPrint')); ?>
</span></td>
		<?php /* tag "td" from line 204 */; ?>
<td></td>
	</tr>
	<?php /* tag "tr" from line 206 */; ?>
<tr>
		<?php /* tag "td" from line 207 */; ?>
<td></td>
		<?php /* tag "td" from line 208 */; ?>
<td align="right">ĐỊNH MỨC</td>
		<?php /* tag "td" from line 209 */; ?>
<td align="right"><?php /* tag "span" from line 209 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->PondSession, 'getPriceExportPrint')); ?>
</span></td>
		<?php /* tag "td" from line 210 */; ?>
<td></td>
	</tr>
	<?php /* tag "tr" from line 212 */; ?>
<tr>
		<?php /* tag "td" from line 213 */; ?>
<td></td>
		<?php /* tag "td" from line 214 */; ?>
<td align="right"><?php /* tag "B" from line 214 */; ?>
<B>(3) TIỀN CÔNG</B></td>
		<?php /* tag "td" from line 215 */; ?>
<td align="right"><?php /* tag "B" from line 215 */; ?>
<B><?php echo phptal_escape($ctx->path($ctx->PondSession, 'getValueImportPrint')); ?>
</B></td>
		<?php /* tag "td" from line 216 */; ?>
<td></td>
	</tr>
	
	<?php /* tag "tr" from line 219 */; ?>
<tr>
		<?php /* tag "td" from line 220 */; ?>
<td></td>
		<?php /* tag "td" from line 221 */; ?>
<td align="right"><?php /* tag "B" from line 221 */; ?>
<B>(4) TIỀN CÁ NGỘP</B></td>
		<?php /* tag "td" from line 222 */; ?>
<td align="right"><?php /* tag "B" from line 222 */; ?>
<B><?php echo phptal_escape($ctx->path($ctx->PondSession, 'getValueWastePrint')); ?>
</B></td>
		<?php /* tag "td" from line 223 */; ?>
<td></td>
	</tr>
	
	<?php /* tag "tr" from line 226 */; ?>
<tr>
		<?php /* tag "td" from line 227 */; ?>
<td></td>
		<?php /* tag "td" from line 228 */; ?>
<td colspan="2" align="right">------------------------------------------------------------------</td>
		<?php /* tag "td" from line 229 */; ?>
<td></td>
	</tr>
	<?php /* tag "tr" from line 231 */; ?>
<tr>
		<?php /* tag "td" from line 232 */; ?>
<td></td>
		<?php /* tag "td" from line 233 */; ?>
<td align="right"><?php /* tag "B" from line 233 */; ?>
<B>LÃI = (4) + (3) - (2) - (1)</B></td>
		<?php /* tag "td" from line 234 */; ?>
<td align="right"><?php /* tag "B" from line 234 */; ?>
<B><?php echo phptal_escape($ctx->path($ctx->PondSession, 'getValuePrint')); ?>
</B></td>
		<?php /* tag "td" from line 235 */; ?>
<td></td>
	</tr>
	<?php /* tag "tr" from line 237 */; ?>
<tr>
		<?php /* tag "td" from line 238 */; ?>
<td colspan="3" align="center">
			(<?php /* tag "span" from line 239 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->PondSession, 'getValueStrPrint')); ?>
</span>)
		</td>
		<?php /* tag "td" from line 241 */; ?>
<td></td>
	</tr>
</table><?php 
/* end */ ;

}

?>
<?php /* 
*** DO NOT EDIT THIS FILE ***

Generated by PHPTAL from /home/a23app/public_html/anhnguyetfarm/mvc/templates/ReportPondPrintGeneral.html (edit that file instead) */; ?>