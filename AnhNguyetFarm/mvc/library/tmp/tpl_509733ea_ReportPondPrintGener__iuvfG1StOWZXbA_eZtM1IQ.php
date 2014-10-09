<?php 
function tpl_509733ea_ReportPondPrintGener__iuvfG1StOWZXbA_eZtM1IQ(PHPTAL $tpl, PHPTAL_Context $ctx) {
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
<td width="70%" rowspan="2" align="center">
				<?php /* tag "font" from line 11 */; ?>
<font size="16"><?php /* tag "b" from line 11 */; ?>
<b>THÔNG TIN TỔNG HỢP</b></font>
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
<td width="30%" align="center">ĐT: 0939.438837, Fax: 0673.123456</td>
			<?php /* tag "td" from line 19 */; ?>
<td width="70%" align="center">
				<?php /* tag "font" from line 20 */; ?>
<font size="13"><?php /* tag "B" from line 20 */; ?>
<B><?php echo phptal_escape($ctx->path($ctx->Pond, 'getName')); ?>
</B></font>
			</td>
		</tr>
	</table>
</font>

<?php /* tag "H3" from line 26 */; ?>
<H3>1. THÔNG TIN</H3>
<?php /* tag "table" from line 27 */; ?>
<table width="100%" border="0" cellpadding="2">
	<?php /* tag "tr" from line 28 */; ?>
<tr>
		<?php /* tag "td" from line 29 */; ?>
<td width="15%" align="right">Chủ đầu tư:</td>
		<?php /* tag "td" from line 30 */; ?>
<td width="30%" align="left"><?php echo phptal_escape($ctx->path($ctx->PondSession, 'getName')); ?>
</td>
		<?php /* tag "td" from line 31 */; ?>
<td width="10%"></td>
		<?php /* tag "td" from line 32 */; ?>
<td width="15%" align="right">Bắt đầu:</td>
		<?php /* tag "td" from line 33 */; ?>
<td width="30%" align="left"><?php echo phptal_escape($ctx->path($ctx->PondSession, 'getDateStartPrint')); ?>
</td>
	</tr>
	<?php /* tag "tr" from line 35 */; ?>
<tr>
		<?php /* tag "td" from line 36 */; ?>
<td width="15%" align="right">Quản lý:</td>
		<?php /* tag "td" from line 37 */; ?>
<td width="30%" align="left"><?php echo phptal_escape($ctx->path($ctx->PondSession, 'getEmployeeName')); ?>
</td>
		<?php /* tag "td" from line 38 */; ?>
<td width="10%"></td>
		<?php /* tag "td" from line 39 */; ?>
<td width="15%" align="right">Kết thúc:</td>
		<?php /* tag "td" from line 40 */; ?>
<td width="30%" align="left"><?php echo phptal_escape($ctx->path($ctx->PondSession, 'getDateEndPrint')); ?>
</td>
	</tr>
	<?php /* tag "tr" from line 42 */; ?>
<tr>
		<?php /* tag "td" from line 43 */; ?>
<td width="15%" align="right">Điện thoại:</td>
		<?php /* tag "td" from line 44 */; ?>
<td width="30%" align="left"><?php echo phptal_escape($ctx->path($ctx->PondSession, 'getEmployeePhone')); ?>
</td>
		<?php /* tag "td" from line 45 */; ?>
<td width="10%"></td>
		<?php /* tag "td" from line 46 */; ?>
<td width="15%" align="right">Tổng thời gian:</td>
		<?php /* tag "td" from line 47 */; ?>
<td width="30%" align="left"><?php echo phptal_escape($ctx->path($ctx->PondSession, 'getTimesPrint')); ?>
</td>
	</tr>
	<?php /* tag "tr" from line 49 */; ?>
<tr>
		<?php /* tag "td" from line 50 */; ?>
<td width="15%" align="right">Hình thức:</td>
		<?php /* tag "td" from line 51 */; ?>
<td width="30%" align="left"><?php echo phptal_escape($ctx->path($ctx->PondSession, 'getTypePrint')); ?>
</td>
		<?php /* tag "td" from line 52 */; ?>
<td width="10%"></td>
		<?php /* tag "td" from line 53 */; ?>
<td width="15%" align="right">Cá giống:</td>
		<?php /* tag "td" from line 54 */; ?>
<td width="30%" align="left"><?php /* tag "span" from line 54 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->PondSession, 'getCountStartPrint')); ?>
</span></td>
	</tr>	
	<?php /* tag "tr" from line 56 */; ?>
<tr>
		<?php /* tag "td" from line 57 */; ?>
<td width="15%" align="right">Lãi suất vay:</td>
		<?php /* tag "td" from line 58 */; ?>
<td width="30%" align="left"><?php /* tag "span" from line 58 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->PondSession, 'getBankRatePrint')); ?>
</span></td>
		<?php /* tag "td" from line 59 */; ?>
<td width="10%"></td>
		<?php /* tag "td" from line 60 */; ?>
<td width="15%" align="right">Lượng cá ngộp:</td>
		<?php /* tag "td" from line 61 */; ?>
<td width="30%" align="left"><?php /* tag "span" from line 61 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->PondSession, 'getCountWastePrint')); ?>
</span></td>
	</tr>
	<?php /* tag "tr" from line 63 */; ?>
<tr>
		<?php /* tag "td" from line 64 */; ?>
<td width="15%" align="right"></td>
		<?php /* tag "td" from line 65 */; ?>
<td width="30%" align="left"></td>
		<?php /* tag "td" from line 66 */; ?>
<td width="10%"></td>
		<?php /* tag "td" from line 67 */; ?>
<td align="right">Giá cá ngộp:</td>
		<?php /* tag "td" from line 68 */; ?>
<td align="left"><?php /* tag "span" from line 68 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->PondSession, 'getPriceWastePrint')); ?>
</span></td>
	</tr>
</table>

<?php /* tag "H3" from line 72 */; ?>
<H3>2. THỨC ĂN </H3>
	<?php /* tag "table" from line 73 */; ?>
<table class="hor-minimalist-a" width="100%" border="1" cellpadding="2">
		<?php /* tag "thead" from line 74 */; ?>
<thead>
			<?php /* tag "tr" from line 75 */; ?>
<tr>
				<?php /* tag "th" from line 76 */; ?>
<th width="5%" align="center"><?php /* tag "B" from line 76 */; ?>
<B>STT</B></th>
				<?php /* tag "th" from line 77 */; ?>
<th width="60%"><?php /* tag "B" from line 77 */; ?>
<B>THÁNG</B></th>				
				<?php /* tag "th" from line 78 */; ?>
<th width="35%" align="right"><?php /* tag "B" from line 78 */; ?>
<B>SỐ LƯỢNG</B></th>
			</tr>
		</thead>
		<?php /* tag "tbody" from line 81 */; ?>
<tbody>
			<?php 
/* tag "tr" from line 82 */ ;
$_tmp_1 = $ctx->repeat ;
$_tmp_1->Track = new PHPTAL_RepeatController($ctx->path($ctx->PondSession, 'getOrderTrackings'))
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->Track as $ctx->Track): ;
?>
<tr>
				<?php /* tag "td" from line 83 */; ?>
<td width="5%" align="center"><?php /* tag "span" from line 83 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->repeat, 'Track/number')); ?>
</span></td>
				<?php /* tag "td" from line 84 */; ?>
<td width="60%"><?php /* tag "span" from line 84 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Track, 'getMonthPrint')); ?>
</span></td>
				<?php /* tag "td" from line 85 */; ?>
<td width="35%" align="right"><?php /* tag "span" from line 85 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Track, 'getOrdersCount1Print')); ?>
</span></td>
			</tr><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

		</tbody>		
		<?php /* tag "tfoot" from line 88 */; ?>
<tfoot>
			<?php /* tag "tr" from line 89 */; ?>
<tr>
				<?php /* tag "th" from line 90 */; ?>
<th width="65%" align="right" colspan="3"><?php /* tag "B" from line 90 */; ?>
<B>TỔNG CỘNG</B></th>
				<?php /* tag "th" from line 91 */; ?>
<th width="35%" align="right"><?php /* tag "B" from line 91 */; ?>
<B><?php echo phptal_escape($ctx->path($ctx->PondSession, 'getOrderTrackingsCount1Print')); ?>
</B></th>
			</tr>
		</tfoot>		
	</table>

<?php /* tag "H3" from line 96 */; ?>
<H3>3. THUỐC</H3>
<?php /* tag "table" from line 97 */; ?>
<table class="hor-minimalist-a" width="100%" border="1" cellpadding="2">
	<?php /* tag "thead" from line 98 */; ?>
<thead>
		<?php /* tag "tr" from line 99 */; ?>
<tr>
			<?php /* tag "th" from line 100 */; ?>
<th width="5%" align="center"><?php /* tag "B" from line 100 */; ?>
<B>STT</B></th>
			<?php /* tag "th" from line 101 */; ?>
<th width="60%"><?php /* tag "B" from line 101 */; ?>
<B>THỜI GIAN</B></th>
			<?php /* tag "th" from line 102 */; ?>
<th width="35%" align="right"><?php /* tag "B" from line 102 */; ?>
<B>SỐ TIỀN</B></th>
		</tr>
	</thead>
	<?php /* tag "tbody" from line 105 */; ?>
<tbody>
		<?php 
/* tag "tr" from line 106 */ ;
$_tmp_1 = $ctx->repeat ;
$_tmp_1->Track = new PHPTAL_RepeatController($ctx->path($ctx->PondSession, 'getOrderTrackings1'))
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->Track as $ctx->Track): ;
?>
<tr>
			<?php /* tag "td" from line 107 */; ?>
<td width="5%" align="center"><?php /* tag "span" from line 107 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->repeat, 'Track/number')); ?>
</span></td>
			<?php /* tag "td" from line 108 */; ?>
<td width="60%"><?php /* tag "span" from line 108 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Track, 'getMonthPrint')); ?>
</span></td>
			<?php /* tag "td" from line 109 */; ?>
<td width="35%" align="right"><?php /* tag "span" from line 109 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Track, 'getOrdersValue2Print')); ?>
</span></td>
		</tr><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

	</tbody>
	<?php /* tag "tfoot" from line 112 */; ?>
<tfoot>
		<?php /* tag "tr" from line 113 */; ?>
<tr>
			<?php /* tag "th" from line 114 */; ?>
<th width="65%" align="right" colspan="2"><?php /* tag "B" from line 114 */; ?>
<B>TỔNG CỘNG</B></th>
			<?php /* tag "th" from line 115 */; ?>
<th width="35%" align="right"><?php /* tag "B" from line 115 */; ?>
<B><?php echo phptal_escape($ctx->path($ctx->PondSession, 'getOrderTrackingsValue2Print')); ?>
</B></th>
		</tr>
	</tfoot>
</table>

<?php /* tag "H3" from line 120 */; ?>
<H3>4. CHI PHÍ</H3>	
	<?php /* tag "table" from line 121 */; ?>
<table class="hor-minimalist-a" width="100%" border="1" cellpadding="2">
		<?php /* tag "thead" from line 122 */; ?>
<thead>
			<?php /* tag "tr" from line 123 */; ?>
<tr>
				<?php /* tag "th" from line 124 */; ?>
<th width="5%" align="center"><?php /* tag "B" from line 124 */; ?>
<B>STT</B></th>
				<?php /* tag "th" from line 125 */; ?>
<th width="20%"><?php /* tag "B" from line 125 */; ?>
<B>THÁNG</B></th>
				<?php /* tag "th" from line 126 */; ?>
<th width="25%" align="right"><?php /* tag "B" from line 126 */; ?>
<B>VỐN GỐC</B></th>
				<?php /* tag "th" from line 127 */; ?>
<th width="25%" align="right"><?php /* tag "B" from line 127 */; ?>
<B>LÃI KÉP</B></th>
				<?php /* tag "th" from line 128 */; ?>
<th width="25%" align="right"><?php /* tag "B" from line 128 */; ?>
<B>THÀNH TIỀN</B></th>
			</tr>
		</thead>
		<?php /* tag "tbody" from line 131 */; ?>
<tbody>
			<?php 
/* tag "tr" from line 132 */ ;
$_tmp_1 = $ctx->repeat ;
$_tmp_1->Track = new PHPTAL_RepeatController($ctx->path($ctx->PondSession, 'getPaidTrackings'))
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->Track as $ctx->Track): ;
?>
<tr>
				<?php /* tag "td" from line 133 */; ?>
<td width="5%" align="center"><?php /* tag "span" from line 133 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->repeat, 'Track/number')); ?>
</span></td>
				<?php /* tag "td" from line 134 */; ?>
<td width="20%"><?php /* tag "span" from line 134 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Track, 'getMonthPrint')); ?>
</span></td>
				<?php /* tag "td" from line 135 */; ?>
<td width="25%" align="right"><?php /* tag "span" from line 135 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Track, 'getPaidsValuePrint')); ?>
</span></td>
				<?php /* tag "td" from line 136 */; ?>
<td width="25%" align="right"><?php /* tag "span" from line 136 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Track, 'getPaidsValueRatePrint')); ?>
</span></td>
				<?php /* tag "td" from line 137 */; ?>
<td width="25%" align="right"><?php /* tag "span" from line 137 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Track, 'getValuePrint')); ?>
</span></td>
			</tr><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

		</tbody>
		<?php /* tag "tfoot" from line 140 */; ?>
<tfoot>
			<?php /* tag "tr" from line 141 */; ?>
<tr>
				<?php /* tag "th" from line 142 */; ?>
<th width="25%" align="right" colspan="2"><?php /* tag "B" from line 142 */; ?>
<B>TỔNG CỘNG</B></th>
				<?php /* tag "th" from line 143 */; ?>
<th width="25%" align="right"><?php /* tag "B" from line 143 */; ?>
<B><?php echo phptal_escape($ctx->path($ctx->PondSession, 'getPaidsValue1Print')); ?>
</B></th>
				<?php /* tag "th" from line 144 */; ?>
<th width="25%" align="right"><?php /* tag "B" from line 144 */; ?>
<B><?php echo phptal_escape($ctx->path($ctx->PondSession, 'getPaidsRateValuePrint')); ?>
</B></th>
				<?php /* tag "th" from line 145 */; ?>
<th width="25%" align="right"><?php /* tag "B" from line 145 */; ?>
<B><?php echo phptal_escape($ctx->path($ctx->PondSession, 'getPaidsValuePrint')); ?>
</B></th>
			</tr>
		</tfoot>
	</table>

<?php /* tag "H3" from line 150 */; ?>
<H3>5. TỔNG KẾT</H3>
<?php /* tag "table" from line 151 */; ?>
<table width="100%" border="0" cellpadding="2">
	<?php /* tag "tr" from line 152 */; ?>
<tr>
		<?php /* tag "td" from line 153 */; ?>
<td width="5%"></td>
		<?php /* tag "td" from line 154 */; ?>
<td width="25%" align="right">CON GIỐNG</td>
		<?php /* tag "td" from line 155 */; ?>
<td width="20%" align="right"><?php /* tag "span" from line 155 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->PondSession, 'getValueStartPrint')); ?>
</span></td>
		<?php /* tag "td" from line 156 */; ?>
<td width="50%"></td>
	</tr>
	<?php /* tag "tr" from line 158 */; ?>
<tr>
		<?php /* tag "td" from line 159 */; ?>
<td></td>
		<?php /* tag "td" from line 160 */; ?>
<td align="right">VẬN CHUYỂN</td>
		<?php /* tag "td" from line 161 */; ?>
<td align="right"><?php /* tag "span" from line 161 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->PondSession, 'getShipStartPrint')); ?>
</span></td>
		<?php /* tag "td" from line 162 */; ?>
<td></td>
	</tr>
	<?php /* tag "tr" from line 164 */; ?>
<tr>
		<?php /* tag "td" from line 165 */; ?>
<td></td>
		<?php /* tag "td" from line 166 */; ?>
<td colspan="2" align="right">------------------------------------------------------------------</td>
		<?php /* tag "td" from line 167 */; ?>
<td></td>
	</tr>
	<?php /* tag "tr" from line 169 */; ?>
<tr>
		<?php /* tag "td" from line 170 */; ?>
<td></td>
		<?php /* tag "td" from line 171 */; ?>
<td align="right">TIỀN GIỐNG</td>
		<?php /* tag "td" from line 172 */; ?>
<td align="right"><?php /* tag "span" from line 172 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->PondSession, 'getValueStart1Print')); ?>
</span></td>
		<?php /* tag "td" from line 173 */; ?>
<td></td>
	</tr>
	<?php /* tag "tr" from line 175 */; ?>
<tr>
		<?php /* tag "td" from line 176 */; ?>
<td></td>
		<?php /* tag "td" from line 177 */; ?>
<td colspan="2" align="left">+</td>
		<?php /* tag "td" from line 178 */; ?>
<td></td>
	</tr>
	<?php /* tag "tr" from line 180 */; ?>
<tr>
		<?php /* tag "td" from line 181 */; ?>
<td></td>
		<?php /* tag "td" from line 182 */; ?>
<td align="right">TIỀN THUỐC</td>
		<?php /* tag "td" from line 183 */; ?>
<td align="right"><?php /* tag "span" from line 183 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->PondSession, 'getOrderTrackingsValue2Print')); ?>
</span></td>
		<?php /* tag "td" from line 184 */; ?>
<td></td>
	</tr>
	<?php /* tag "tr" from line 186 */; ?>
<tr>
		<?php /* tag "td" from line 187 */; ?>
<td></td>
		<?php /* tag "td" from line 188 */; ?>
<td align="right">CHI PHÍ NUÔI</td>
		<?php /* tag "td" from line 189 */; ?>
<td align="right"><?php /* tag "span" from line 189 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->PondSession, 'getPaidsValuePrint')); ?>
</span></td>
		<?php /* tag "td" from line 190 */; ?>
<td></td>
	</tr>
	<?php /* tag "tr" from line 192 */; ?>
<tr>
		<?php /* tag "td" from line 193 */; ?>
<td></td>
		<?php /* tag "td" from line 194 */; ?>
<td colspan="2" align="right">------------------------------------------------------------------</td>
		<?php /* tag "td" from line 195 */; ?>
<td></td>
	</tr>
	<?php /* tag "tr" from line 197 */; ?>
<tr>
		<?php /* tag "td" from line 198 */; ?>
<td></td>
		<?php /* tag "td" from line 199 */; ?>
<td align="right"><?php /* tag "B" from line 199 */; ?>
<B>(1) TỔNG CHI</B></td>
		<?php /* tag "td" from line 200 */; ?>
<td align="right"><?php /* tag "B" from line 200 */; ?>
<B><?php echo phptal_escape($ctx->path($ctx->PondSession, 'getValueExportPrint')); ?>
</B></td>
		<?php /* tag "td" from line 201 */; ?>
<td></td>
	</tr>
	<?php /* tag "tr" from line 203 */; ?>
<tr>
		<?php /* tag "td" from line 204 */; ?>
<td></td>
		<?php /* tag "td" from line 205 */; ?>
<td align="right"><?php /* tag "B" from line 205 */; ?>
<B>(2) LÃI SUẤT</B></td>
		<?php /* tag "td" from line 206 */; ?>
<td align="right"><?php /* tag "B" from line 206 */; ?>
<B><?php echo phptal_escape($ctx->path($ctx->PondSession, 'getValueExportRatePrint')); ?>
</B></td>
		<?php /* tag "td" from line 207 */; ?>
<td></td>
	</tr>
	<?php /* tag "tr" from line 209 */; ?>
<tr>
		<?php /* tag "td" from line 210 */; ?>
<td></td>
		<?php /* tag "td" from line 211 */; ?>
<td colspan="2" align="left">-</td>
		<?php /* tag "td" from line 212 */; ?>
<td></td>
	</tr>
	<?php /* tag "tr" from line 214 */; ?>
<tr>
		<?php /* tag "td" from line 215 */; ?>
<td></td>
		<?php /* tag "td" from line 216 */; ?>
<td align="right">XUẤT BÁN</td>
		<?php /* tag "td" from line 217 */; ?>
<td align="right"><?php /* tag "span" from line 217 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->PondSession, 'getCountExportPrint')); ?>
</span></td>
		<?php /* tag "td" from line 218 */; ?>
<td></td>
	</tr>
	<?php /* tag "tr" from line 220 */; ?>
<tr>
		<?php /* tag "td" from line 221 */; ?>
<td></td>
		<?php /* tag "td" from line 222 */; ?>
<td align="right">ĐỊNH MỨC</td>
		<?php /* tag "td" from line 223 */; ?>
<td align="right"><?php /* tag "span" from line 223 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->PondSession, 'getPriceExportPrint')); ?>
</span></td>
		<?php /* tag "td" from line 224 */; ?>
<td></td>
	</tr>
	<?php /* tag "tr" from line 226 */; ?>
<tr>
		<?php /* tag "td" from line 227 */; ?>
<td></td>
		<?php /* tag "td" from line 228 */; ?>
<td align="right"><?php /* tag "B" from line 228 */; ?>
<B>(3) TIỀN CÔNG</B></td>
		<?php /* tag "td" from line 229 */; ?>
<td align="right"><?php /* tag "B" from line 229 */; ?>
<B><?php echo phptal_escape($ctx->path($ctx->PondSession, 'getValueImportPrint')); ?>
</B></td>
		<?php /* tag "td" from line 230 */; ?>
<td></td>
	</tr>
	
	<?php /* tag "tr" from line 233 */; ?>
<tr>
		<?php /* tag "td" from line 234 */; ?>
<td></td>
		<?php /* tag "td" from line 235 */; ?>
<td align="right"><?php /* tag "B" from line 235 */; ?>
<B>(4) TIỀN CÁ NGỘP</B></td>
		<?php /* tag "td" from line 236 */; ?>
<td align="right"><?php /* tag "B" from line 236 */; ?>
<B><?php echo phptal_escape($ctx->path($ctx->PondSession, 'getValueWastePrint')); ?>
</B></td>
		<?php /* tag "td" from line 237 */; ?>
<td></td>
	</tr>
	
	<?php /* tag "tr" from line 240 */; ?>
<tr>
		<?php /* tag "td" from line 241 */; ?>
<td></td>
		<?php /* tag "td" from line 242 */; ?>
<td colspan="2" align="right">------------------------------------------------------------------</td>
		<?php /* tag "td" from line 243 */; ?>
<td></td>
	</tr>
	<?php /* tag "tr" from line 245 */; ?>
<tr>
		<?php /* tag "td" from line 246 */; ?>
<td></td>
		<?php /* tag "td" from line 247 */; ?>
<td align="right"><?php /* tag "B" from line 247 */; ?>
<B>LÃI = (4) + (3) - (2) - (1)</B></td>
		<?php /* tag "td" from line 248 */; ?>
<td align="right"><?php /* tag "B" from line 248 */; ?>
<B><?php echo phptal_escape($ctx->path($ctx->PondSession, 'getValuePrint')); ?>
</B></td>
		<?php /* tag "td" from line 249 */; ?>
<td></td>
	</tr>
	<?php /* tag "tr" from line 251 */; ?>
<tr>
		<?php /* tag "td" from line 252 */; ?>
<td colspan="3" align="center">
			(<?php /* tag "span" from line 253 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->PondSession, 'getValueStrPrint')); ?>
</span>)
		</td>
		<?php /* tag "td" from line 255 */; ?>
<td></td>
	</tr>
</table><?php 
/* end */ ;

}

?>
<?php /* 
*** DO NOT EDIT THIS FILE ***

Generated by PHPTAL from /home/a23app/public_html/anhnguyetfarm/mvc/templates/ReportPondPrintGeneral.html (edit that file instead) */; ?>