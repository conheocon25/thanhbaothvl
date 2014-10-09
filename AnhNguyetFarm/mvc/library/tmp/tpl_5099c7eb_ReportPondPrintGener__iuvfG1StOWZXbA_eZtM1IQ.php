<?php 
function tpl_5099c7eb_ReportPondPrintGener__iuvfG1StOWZXbA_eZtM1IQ(PHPTAL $tpl, PHPTAL_Context $ctx) {
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
<th width="20%"><?php /* tag "B" from line 101 */; ?>
<B>THÁNG</B></th>
			<?php /* tag "th" from line 102 */; ?>
<th width="25%" align="right"><?php /* tag "B" from line 102 */; ?>
<B>VỐN GỐC</B></th>
			<?php /* tag "th" from line 103 */; ?>
<th width="25%" align="right"><?php /* tag "B" from line 103 */; ?>
<B>LÃI KÉP</B></th>
			<?php /* tag "th" from line 104 */; ?>
<th width="25%" align="right"><?php /* tag "B" from line 104 */; ?>
<B>THÀNH TIỀN</B></th>
		</tr>
	</thead>
	<?php /* tag "tbody" from line 107 */; ?>
<tbody>
		<?php 
/* tag "tr" from line 108 */ ;
$_tmp_1 = $ctx->repeat ;
$_tmp_1->Track = new PHPTAL_RepeatController($ctx->path($ctx->PondSession, 'getOrderTrackings'))
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->Track as $ctx->Track): ;
?>
<tr>
			<?php /* tag "td" from line 109 */; ?>
<td width="5%" align="center"><?php /* tag "span" from line 109 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->repeat, 'Track/number')); ?>
</span></td>
			<?php /* tag "td" from line 110 */; ?>
<td width="20%"><?php /* tag "span" from line 110 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Track, 'getMonthPrint')); ?>
</span></td>			
			<?php /* tag "td" from line 111 */; ?>
<td width="25%" align="right"><?php /* tag "span" from line 111 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Track, 'getOrdersValue2BasePrint')); ?>
</span></td>
			<?php /* tag "td" from line 112 */; ?>
<td width="25%" align="right"><?php /* tag "span" from line 112 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Track, 'getOrdersValue2RatePrint')); ?>
</span></td>						
			<?php /* tag "td" from line 113 */; ?>
<td width="25%" align="right"><?php /* tag "span" from line 113 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Track, 'getOrdersValue2BasePrint')); ?>
</span></td>
		</tr><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

	</tbody>
	<?php /* tag "tfoot" from line 116 */; ?>
<tfoot>		
		<?php /* tag "tr" from line 117 */; ?>
<tr>
			<?php /* tag "th" from line 118 */; ?>
<th width="25%" align="right" colspan="2"><?php /* tag "B" from line 118 */; ?>
<B>TỔNG CỘNG</B></th>
			<?php /* tag "th" from line 119 */; ?>
<th width="25%" align="right"><?php /* tag "B" from line 119 */; ?>
<B><?php echo phptal_escape($ctx->path($ctx->PondSession, 'getOrdersValue2BasePrint')); ?>
</B></th>
			<?php /* tag "th" from line 120 */; ?>
<th width="25%" align="right"><?php /* tag "B" from line 120 */; ?>
<B><?php echo phptal_escape($ctx->path($ctx->PondSession, 'getOrdersValue2RatePrint')); ?>
</B></th>
			<?php /* tag "th" from line 121 */; ?>
<th width="25%" align="right"><?php /* tag "B" from line 121 */; ?>
<B><?php echo phptal_escape($ctx->path($ctx->PondSession, 'getOrdersValue2Print')); ?>
</B></th>
		</tr>		
	</tfoot>
</table>

<?php /* tag "H3" from line 126 */; ?>
<H3>4. CHI PHÍ</H3>	
	<?php /* tag "table" from line 127 */; ?>
<table class="hor-minimalist-a" width="100%" border="1" cellpadding="2">
		<?php /* tag "thead" from line 128 */; ?>
<thead>
			<?php /* tag "tr" from line 129 */; ?>
<tr>
				<?php /* tag "th" from line 130 */; ?>
<th width="5%" align="center"><?php /* tag "B" from line 130 */; ?>
<B>STT</B></th>
				<?php /* tag "th" from line 131 */; ?>
<th width="20%"><?php /* tag "B" from line 131 */; ?>
<B>THÁNG</B></th>
				<?php /* tag "th" from line 132 */; ?>
<th width="25%" align="right"><?php /* tag "B" from line 132 */; ?>
<B>VỐN GỐC</B></th>
				<?php /* tag "th" from line 133 */; ?>
<th width="25%" align="right"><?php /* tag "B" from line 133 */; ?>
<B>LÃI KÉP</B></th>
				<?php /* tag "th" from line 134 */; ?>
<th width="25%" align="right"><?php /* tag "B" from line 134 */; ?>
<B>THÀNH TIỀN</B></th>
			</tr>
		</thead>
		<?php /* tag "tbody" from line 137 */; ?>
<tbody>
			<?php 
/* tag "tr" from line 138 */ ;
$_tmp_1 = $ctx->repeat ;
$_tmp_1->Track = new PHPTAL_RepeatController($ctx->path($ctx->PondSession, 'getPaidTrackings'))
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->Track as $ctx->Track): ;
?>
<tr>
				<?php /* tag "td" from line 139 */; ?>
<td width="5%" align="center"><?php /* tag "span" from line 139 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->repeat, 'Track/number')); ?>
</span></td>
				<?php /* tag "td" from line 140 */; ?>
<td width="20%"><?php /* tag "span" from line 140 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Track, 'getMonthPrint')); ?>
</span></td>
				<?php /* tag "td" from line 141 */; ?>
<td width="25%" align="right"><?php /* tag "span" from line 141 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Track, 'getPaidsValuePrint')); ?>
</span></td>
				<?php /* tag "td" from line 142 */; ?>
<td width="25%" align="right"><?php /* tag "span" from line 142 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Track, 'getPaidsValueRatePrint')); ?>
</span></td>
				<?php /* tag "td" from line 143 */; ?>
<td width="25%" align="right"><?php /* tag "span" from line 143 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Track, 'getValuePrint')); ?>
</span></td>
			</tr><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

		</tbody>
		<?php /* tag "tfoot" from line 146 */; ?>
<tfoot>
			<?php /* tag "tr" from line 147 */; ?>
<tr>
				<?php /* tag "th" from line 148 */; ?>
<th width="25%" align="right" colspan="2"><?php /* tag "B" from line 148 */; ?>
<B>TỔNG CỘNG</B></th>
				<?php /* tag "th" from line 149 */; ?>
<th width="25%" align="right"><?php /* tag "B" from line 149 */; ?>
<B><?php echo phptal_escape($ctx->path($ctx->PondSession, 'getPaidsValue1Print')); ?>
</B></th>
				<?php /* tag "th" from line 150 */; ?>
<th width="25%" align="right"><?php /* tag "B" from line 150 */; ?>
<B><?php echo phptal_escape($ctx->path($ctx->PondSession, 'getPaidsRateValuePrint')); ?>
</B></th>
				<?php /* tag "th" from line 151 */; ?>
<th width="25%" align="right"><?php /* tag "B" from line 151 */; ?>
<B><?php echo phptal_escape($ctx->path($ctx->PondSession, 'getPaidsValuePrint')); ?>
</B></th>
			</tr>
		</tfoot>
	</table>

<?php /* tag "H3" from line 156 */; ?>
<H3>5. TỔNG KẾT</H3>
<?php /* tag "table" from line 157 */; ?>
<table width="100%" border="0" cellpadding="2">
	<?php /* tag "tr" from line 158 */; ?>
<tr>
		<?php /* tag "td" from line 159 */; ?>
<td width="5%"></td>
		<?php /* tag "td" from line 160 */; ?>
<td width="25%" align="right">CON GIỐNG</td>
		<?php /* tag "td" from line 161 */; ?>
<td width="20%" align="right"><?php /* tag "span" from line 161 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->PondSession, 'getValueStartPrint')); ?>
</span></td>
		<?php /* tag "td" from line 162 */; ?>
<td width="50%"></td>
	</tr>
	<?php /* tag "tr" from line 164 */; ?>
<tr>
		<?php /* tag "td" from line 165 */; ?>
<td></td>
		<?php /* tag "td" from line 166 */; ?>
<td align="right">VẬN CHUYỂN</td>
		<?php /* tag "td" from line 167 */; ?>
<td align="right"><?php /* tag "span" from line 167 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->PondSession, 'getShipStartPrint')); ?>
</span></td>
		<?php /* tag "td" from line 168 */; ?>
<td></td>
	</tr>
	<?php /* tag "tr" from line 170 */; ?>
<tr>
		<?php /* tag "td" from line 171 */; ?>
<td></td>
		<?php /* tag "td" from line 172 */; ?>
<td colspan="2" align="right">------------------------------------------------------------------</td>
		<?php /* tag "td" from line 173 */; ?>
<td></td>
	</tr>
	<?php /* tag "tr" from line 175 */; ?>
<tr>
		<?php /* tag "td" from line 176 */; ?>
<td></td>
		<?php /* tag "td" from line 177 */; ?>
<td align="right">TIỀN GIỐNG</td>
		<?php /* tag "td" from line 178 */; ?>
<td align="right"><?php /* tag "span" from line 178 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->PondSession, 'getValueStart1Print')); ?>
</span></td>
		<?php /* tag "td" from line 179 */; ?>
<td></td>
	</tr>
	<?php /* tag "tr" from line 181 */; ?>
<tr>
		<?php /* tag "td" from line 182 */; ?>
<td></td>
		<?php /* tag "td" from line 183 */; ?>
<td align="right">LÃI TIỀN GIỐNG</td>
		<?php /* tag "td" from line 184 */; ?>
<td align="right"><?php /* tag "span" from line 184 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->PondSession, 'getValueStart1RatePrint')); ?>
</span></td>
		<?php /* tag "td" from line 185 */; ?>
<td></td>
	</tr>
	<?php /* tag "tr" from line 187 */; ?>
<tr>
		<?php /* tag "td" from line 188 */; ?>
<td></td>
		<?php /* tag "td" from line 189 */; ?>
<td colspan="2" align="right">------------------------------------------------------------------</td>
		<?php /* tag "td" from line 190 */; ?>
<td></td>
	</tr>
	<?php /* tag "tr" from line 192 */; ?>
<tr>
		<?php /* tag "td" from line 193 */; ?>
<td></td>
		<?php /* tag "td" from line 194 */; ?>
<td align="right">ĐẦU TƯ GIỐNG</td>
		<?php /* tag "td" from line 195 */; ?>
<td align="right"><?php /* tag "span" from line 195 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->PondSession, 'getValueStart2Print')); ?>
</span></td>
		<?php /* tag "td" from line 196 */; ?>
<td></td>
	</tr>
	<?php /* tag "tr" from line 198 */; ?>
<tr>
		<?php /* tag "td" from line 199 */; ?>
<td></td>
		<?php /* tag "td" from line 200 */; ?>
<td colspan="2" align="left">+</td>
		<?php /* tag "td" from line 201 */; ?>
<td></td>
	</tr>
	<?php /* tag "tr" from line 203 */; ?>
<tr>
		<?php /* tag "td" from line 204 */; ?>
<td></td>
		<?php /* tag "td" from line 205 */; ?>
<td align="right">TIỀN THUỐC</td>
		<?php /* tag "td" from line 206 */; ?>
<td align="right"><?php /* tag "span" from line 206 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->PondSession, 'getOrdersValue2Print')); ?>
</span></td>
		<?php /* tag "td" from line 207 */; ?>
<td></td>
	</tr>
	<?php /* tag "tr" from line 209 */; ?>
<tr>
		<?php /* tag "td" from line 210 */; ?>
<td></td>
		<?php /* tag "td" from line 211 */; ?>
<td align="right">CHI PHÍ NUÔI</td>
		<?php /* tag "td" from line 212 */; ?>
<td align="right"><?php /* tag "span" from line 212 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->PondSession, 'getPaidsValuePrint')); ?>
</span></td>
		<?php /* tag "td" from line 213 */; ?>
<td></td>
	</tr>
	<?php /* tag "tr" from line 215 */; ?>
<tr>
		<?php /* tag "td" from line 216 */; ?>
<td></td>
		<?php /* tag "td" from line 217 */; ?>
<td colspan="2" align="right">------------------------------------------------------------------</td>
		<?php /* tag "td" from line 218 */; ?>
<td></td>
	</tr>
	<?php /* tag "tr" from line 220 */; ?>
<tr>
		<?php /* tag "td" from line 221 */; ?>
<td></td>
		<?php /* tag "td" from line 222 */; ?>
<td align="right"><?php /* tag "B" from line 222 */; ?>
<B>(1) TỔNG CHI</B></td>
		<?php /* tag "td" from line 223 */; ?>
<td align="right"><?php /* tag "B" from line 223 */; ?>
<B><?php echo phptal_escape($ctx->path($ctx->PondSession, 'getValueExportPrint')); ?>
</B></td>
		<?php /* tag "td" from line 224 */; ?>
<td></td>
	</tr>
	<?php /* tag "tr" from line 226 */; ?>
<tr>
		<?php /* tag "td" from line 227 */; ?>
<td></td>
		<?php /* tag "td" from line 228 */; ?>
<td colspan="2" align="left">-</td>
		<?php /* tag "td" from line 229 */; ?>
<td></td>
	</tr>
	<?php /* tag "tr" from line 231 */; ?>
<tr>
		<?php /* tag "td" from line 232 */; ?>
<td></td>
		<?php /* tag "td" from line 233 */; ?>
<td align="right">XUẤT BÁN</td>
		<?php /* tag "td" from line 234 */; ?>
<td align="right"><?php /* tag "span" from line 234 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->PondSession, 'getCountExportPrint')); ?>
</span></td>
		<?php /* tag "td" from line 235 */; ?>
<td></td>
	</tr>
	<?php /* tag "tr" from line 237 */; ?>
<tr>
		<?php /* tag "td" from line 238 */; ?>
<td></td>
		<?php /* tag "td" from line 239 */; ?>
<td align="right">ĐỊNH MỨC</td>
		<?php /* tag "td" from line 240 */; ?>
<td align="right"><?php /* tag "span" from line 240 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->PondSession, 'getPriceExportPrint')); ?>
</span></td>
		<?php /* tag "td" from line 241 */; ?>
<td></td>
	</tr>
	<?php /* tag "tr" from line 243 */; ?>
<tr>
		<?php /* tag "td" from line 244 */; ?>
<td></td>
		<?php /* tag "td" from line 245 */; ?>
<td align="right"><?php /* tag "B" from line 245 */; ?>
<B>(2) TIỀN CÔNG</B></td>
		<?php /* tag "td" from line 246 */; ?>
<td align="right"><?php /* tag "B" from line 246 */; ?>
<B><?php echo phptal_escape($ctx->path($ctx->PondSession, 'getValueImportPrint')); ?>
</B></td>
		<?php /* tag "td" from line 247 */; ?>
<td></td>
	</tr>
	
	<?php /* tag "tr" from line 250 */; ?>
<tr>
		<?php /* tag "td" from line 251 */; ?>
<td></td>
		<?php /* tag "td" from line 252 */; ?>
<td align="right"><?php /* tag "B" from line 252 */; ?>
<B>(3) TIỀN CÁ NGỘP</B></td>
		<?php /* tag "td" from line 253 */; ?>
<td align="right"><?php /* tag "B" from line 253 */; ?>
<B><?php echo phptal_escape($ctx->path($ctx->PondSession, 'getValueWastePrint')); ?>
</B></td>
		<?php /* tag "td" from line 254 */; ?>
<td></td>
	</tr>
	
	<?php /* tag "tr" from line 257 */; ?>
<tr>
		<?php /* tag "td" from line 258 */; ?>
<td></td>
		<?php /* tag "td" from line 259 */; ?>
<td colspan="2" align="right">------------------------------------------------------------------</td>
		<?php /* tag "td" from line 260 */; ?>
<td></td>
	</tr>
	<?php /* tag "tr" from line 262 */; ?>
<tr>
		<?php /* tag "td" from line 263 */; ?>
<td></td>
		<?php /* tag "td" from line 264 */; ?>
<td align="right"><?php /* tag "B" from line 264 */; ?>
<B>LÃI = (3) + (2) - (1)</B></td>
		<?php /* tag "td" from line 265 */; ?>
<td align="right"><?php /* tag "B" from line 265 */; ?>
<B><?php echo phptal_escape($ctx->path($ctx->PondSession, 'getValuePrint')); ?>
</B></td>
		<?php /* tag "td" from line 266 */; ?>
<td></td>
	</tr>
	<?php /* tag "tr" from line 268 */; ?>
<tr>
		<?php /* tag "td" from line 269 */; ?>
<td colspan="3" align="center">
			(<?php /* tag "span" from line 270 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->PondSession, 'getValueStrPrint')); ?>
</span>)
		</td>
		<?php /* tag "td" from line 272 */; ?>
<td></td>
	</tr>
</table>
<?php /* tag "H3" from line 275 */; ?>
<H3>6. PHÂN TÍCH</H3>
<?php /* tag "table" from line 276 */; ?>
<table width="100%" border="0" cellpadding="2">
	<?php /* tag "tr" from line 277 */; ?>
<tr>
		<?php /* tag "td" from line 278 */; ?>
<td width="5%"></td>
		<?php /* tag "td" from line 279 */; ?>
<td width="25%" align="right">VỐC GỐC</td>
		<?php /* tag "td" from line 280 */; ?>
<td width="20%" align="right"><?php /* tag "span" from line 280 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->PondSession, 'getValueExportBasePrint')); ?>
</span></td>
		<?php /* tag "td" from line 281 */; ?>
<td width="50%"></td>
	</tr>
	<?php /* tag "tr" from line 283 */; ?>
<tr>
		<?php /* tag "td" from line 284 */; ?>
<td></td>
		<?php /* tag "td" from line 285 */; ?>
<td align="right">THỜI GIAN ĐẦU TƯ</td>
		<?php /* tag "td" from line 286 */; ?>
<td align="right"><?php /* tag "span" from line 286 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->PondSession, 'getTimesPrint')); ?>
</span></td>
		<?php /* tag "td" from line 287 */; ?>
<td></td>
	</tr>
	<?php /* tag "tr" from line 289 */; ?>
<tr>
		<?php /* tag "td" from line 290 */; ?>
<td></td>
		<?php /* tag "td" from line 291 */; ?>
<td align="right">LÃI SUẤT GỬI NGÂN HÀNG</td>
		<?php /* tag "td" from line 292 */; ?>
<td align="right"><?php /* tag "span" from line 292 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->PondSession, 'getBankRatePrint')); ?>
</span></td>
		<?php /* tag "td" from line 293 */; ?>
<td></td>
	</tr>
	<?php /* tag "tr" from line 295 */; ?>
<tr>
		<?php /* tag "td" from line 296 */; ?>
<td></td>
		<?php /* tag "td" from line 297 */; ?>
<td align="right">TIỀN LÃI GỬI NGÂN HÀNG</td>
		<?php /* tag "td" from line 298 */; ?>
<td align="right"><?php /* tag "span" from line 298 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->PondSession, 'getValueExportBaseRatePrint')); ?>
</span></td>
		<?php /* tag "td" from line 299 */; ?>
<td></td>
	</tr>
	<?php /* tag "tr" from line 301 */; ?>
<tr>
		<?php /* tag "td" from line 302 */; ?>
<td></td>
		<?php /* tag "td" from line 303 */; ?>
<td align="right">LÃI SUẤT KHI KINH DOANH</td>
		<?php /* tag "td" from line 304 */; ?>
<td align="right"><?php /* tag "span" from line 304 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->PondSession, 'getBusinessRatePrint')); ?>
</span></td>
		<?php /* tag "td" from line 305 */; ?>
<td></td>
	</tr>
	<?php /* tag "tr" from line 307 */; ?>
<tr>
		<?php /* tag "td" from line 308 */; ?>
<td></td>
		<?php /* tag "td" from line 309 */; ?>
<td align="right">TIỀN LÃI KINH DOANH</td>
		<?php /* tag "td" from line 310 */; ?>
<td align="right"><?php /* tag "span" from line 310 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->PondSession, 'getValuePrint')); ?>
</span></td>
		<?php /* tag "td" from line 311 */; ?>
<td></td>
	</tr>
	<?php /* tag "tr" from line 313 */; ?>
<tr>
		<?php /* tag "td" from line 314 */; ?>
<td></td>
		<?php /* tag "td" from line 315 */; ?>
<td align="right">SO SÁNH TỈ LỆ LÃI</td>
		<?php /* tag "td" from line 316 */; ?>
<td align="right"><?php /* tag "span" from line 316 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->PondSession, 'getCompareRatePrint')); ?>
</span></td>
		<?php /* tag "td" from line 317 */; ?>
<td></td>
	</tr>
</table><?php 
/* end */ ;

}

?>
<?php /* 
*** DO NOT EDIT THIS FILE ***

Generated by PHPTAL from /home/a23app/public_html/anhnguyetfarm/mvc/templates/ReportPondPrintGeneral.html (edit that file instead) */; ?>