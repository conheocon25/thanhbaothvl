<?php 
function tpl_50a5b6c6_ReportPondPrintGener__iuvfG1StOWZXbA_eZtM1IQ(PHPTAL $tpl, PHPTAL_Context $ctx) {
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
	<?php 
/* tag "span" from line 73 */ ;
if ($ctx->PondSession->getType()==1?true:false):  ;
?>
<span>
		<?php /* tag "table" from line 74 */; ?>
<table class="hor-minimalist-a" width="100%" border="1" cellpadding="2">
			<?php /* tag "thead" from line 75 */; ?>
<thead>
				<?php /* tag "tr" from line 76 */; ?>
<tr>			
					<?php /* tag "th" from line 77 */; ?>
<th width="5%" align="center"><?php /* tag "B" from line 77 */; ?>
<B>STT</B></th>
					<?php /* tag "th" from line 78 */; ?>
<th width="20%"><?php /* tag "B" from line 78 */; ?>
<B>THÁNG</B></th>
					<?php /* tag "th" from line 79 */; ?>
<th width="25%" align="right"><?php /* tag "B" from line 79 */; ?>
<B>VỐN GỐC</B></th>
					<?php /* tag "th" from line 80 */; ?>
<th width="25%" align="right"><?php /* tag "B" from line 80 */; ?>
<B>LÃI KÉP</B></th>
					<?php /* tag "th" from line 81 */; ?>
<th width="25%" align="right"><?php /* tag "B" from line 81 */; ?>
<B>THÀNH TIỀN</B></th>
				</tr>
			</thead>
			<?php /* tag "tbody" from line 84 */; ?>
<tbody>
				<?php 
/* tag "tr" from line 85 */ ;
$_tmp_1 = $ctx->repeat ;
$_tmp_1->Track = new PHPTAL_RepeatController($ctx->path($ctx->PondSession, 'getOrderTrackings'))
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->Track as $ctx->Track): ;
?>
<tr>
					<?php /* tag "td" from line 86 */; ?>
<td width="5%" align="center"><?php /* tag "span" from line 86 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->repeat, 'Track/number')); ?>
</span></td>
					<?php /* tag "td" from line 87 */; ?>
<td width="20%"><?php /* tag "span" from line 87 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Track, 'getMonthPrint')); ?>
</span></td>
					<?php /* tag "td" from line 88 */; ?>
<td width="25%" align="right"><?php /* tag "span" from line 88 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Track, 'getOrdersValue1BasePrint')); ?>
</span></td>
					<?php /* tag "td" from line 89 */; ?>
<td width="25%" align="right"><?php /* tag "span" from line 89 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Track, 'getOrdersValue1RatePrint')); ?>
</span></td>						
					<?php /* tag "td" from line 90 */; ?>
<td width="25%" align="right"><?php /* tag "span" from line 90 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Track, 'getOrdersValue1BasePrint')); ?>
</span></td>
				</tr><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

			</tbody>
			<?php /* tag "tfoot" from line 93 */; ?>
<tfoot>
				<?php /* tag "tr" from line 94 */; ?>
<tr>
					<?php /* tag "th" from line 95 */; ?>
<th width="25%" align="right" colspan="2"><?php /* tag "B" from line 95 */; ?>
<B>TỔNG CỘNG</B></th>
					<?php /* tag "th" from line 96 */; ?>
<th width="25%" align="right"><?php /* tag "B" from line 96 */; ?>
<B><?php echo phptal_escape($ctx->path($ctx->PondSession, 'getOrdersValue1BasePrint')); ?>
</B></th>
					<?php /* tag "th" from line 97 */; ?>
<th width="25%" align="right"><?php /* tag "B" from line 97 */; ?>
<B><?php echo phptal_escape($ctx->path($ctx->PondSession, 'getOrdersValue1RatePrint')); ?>
</B></th>
					<?php /* tag "th" from line 98 */; ?>
<th width="25%" align="right"><?php /* tag "B" from line 98 */; ?>
<B><?php echo phptal_escape($ctx->path($ctx->PondSession, 'getOrdersValue1Print')); ?>
</B></th>
				</tr>		
			</tfoot>
		</table>
	</span><?php endif; ?>

	<?php 
/* tag "span" from line 103 */ ;
if ($ctx->PondSession->getType()==2?true:false):  ;
?>
<span>
		<?php /* tag "table" from line 104 */; ?>
<table class="hor-minimalist-a" width="100%" border="1" cellpadding="2">
			<?php /* tag "thead" from line 105 */; ?>
<thead>
				<?php /* tag "tr" from line 106 */; ?>
<tr>
					<?php /* tag "th" from line 107 */; ?>
<th width="5%" align="center"><?php /* tag "B" from line 107 */; ?>
<B>STT</B></th>
					<?php /* tag "th" from line 108 */; ?>
<th width="60%"><?php /* tag "B" from line 108 */; ?>
<B>THÁNG</B></th>				
					<?php /* tag "th" from line 109 */; ?>
<th width="35%" align="right"><?php /* tag "B" from line 109 */; ?>
<B>SỐ LƯỢNG</B></th>
				</tr>
			</thead>
			<?php /* tag "tbody" from line 112 */; ?>
<tbody>
				<?php 
/* tag "tr" from line 113 */ ;
$_tmp_1 = $ctx->repeat ;
$_tmp_1->Track = new PHPTAL_RepeatController($ctx->path($ctx->PondSession, 'getOrderTrackings'))
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->Track as $ctx->Track): ;
?>
<tr>
					<?php /* tag "td" from line 114 */; ?>
<td width="5%" align="center"><?php /* tag "span" from line 114 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->repeat, 'Track/number')); ?>
</span></td>
					<?php /* tag "td" from line 115 */; ?>
<td width="60%"><?php /* tag "span" from line 115 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Track, 'getMonthPrint')); ?>
</span></td>
					<?php /* tag "td" from line 116 */; ?>
<td width="35%" align="right"><?php /* tag "span" from line 116 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Track, 'getOrdersCount1Print')); ?>
</span></td>
				</tr><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

			</tbody>		
			<?php /* tag "tfoot" from line 119 */; ?>
<tfoot>
				<?php /* tag "tr" from line 120 */; ?>
<tr>
					<?php /* tag "th" from line 121 */; ?>
<th width="65%" align="right" colspan="3"><?php /* tag "B" from line 121 */; ?>
<B>TỔNG CỘNG</B></th>
					<?php /* tag "th" from line 122 */; ?>
<th width="35%" align="right"><?php /* tag "B" from line 122 */; ?>
<B><?php echo phptal_escape($ctx->path($ctx->PondSession, 'getOrderTrackingsCount1Print')); ?>
</B></th>
				</tr>
			</tfoot>		
		</table>
	</span><?php endif; ?>

	
<?php /* tag "H3" from line 128 */; ?>
<H3>3. THUỐC</H3>
<?php /* tag "table" from line 129 */; ?>
<table class="hor-minimalist-a" width="100%" border="1" cellpadding="2">
	<?php /* tag "thead" from line 130 */; ?>
<thead>
		<?php /* tag "tr" from line 131 */; ?>
<tr>			
			<?php /* tag "th" from line 132 */; ?>
<th width="5%" align="center"><?php /* tag "B" from line 132 */; ?>
<B>STT</B></th>
			<?php /* tag "th" from line 133 */; ?>
<th width="20%"><?php /* tag "B" from line 133 */; ?>
<B>THÁNG</B></th>
			<?php /* tag "th" from line 134 */; ?>
<th width="25%" align="right"><?php /* tag "B" from line 134 */; ?>
<B>VỐN GỐC</B></th>
			<?php /* tag "th" from line 135 */; ?>
<th width="25%" align="right"><?php /* tag "B" from line 135 */; ?>
<B>LÃI KÉP</B></th>
			<?php /* tag "th" from line 136 */; ?>
<th width="25%" align="right"><?php /* tag "B" from line 136 */; ?>
<B>THÀNH TIỀN</B></th>
		</tr>
	</thead>
	<?php /* tag "tbody" from line 139 */; ?>
<tbody>
		<?php 
/* tag "tr" from line 140 */ ;
$_tmp_1 = $ctx->repeat ;
$_tmp_1->Track = new PHPTAL_RepeatController($ctx->path($ctx->PondSession, 'getOrderTrackings'))
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->Track as $ctx->Track): ;
?>
<tr>
			<?php /* tag "td" from line 141 */; ?>
<td width="5%" align="center"><?php /* tag "span" from line 141 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->repeat, 'Track/number')); ?>
</span></td>
			<?php /* tag "td" from line 142 */; ?>
<td width="20%"><?php /* tag "span" from line 142 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Track, 'getMonthPrint')); ?>
</span></td>			
			<?php /* tag "td" from line 143 */; ?>
<td width="25%" align="right"><?php /* tag "span" from line 143 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Track, 'getOrdersValue2BasePrint')); ?>
</span></td>
			<?php /* tag "td" from line 144 */; ?>
<td width="25%" align="right"><?php /* tag "span" from line 144 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Track, 'getOrdersValue2RatePrint')); ?>
</span></td>						
			<?php /* tag "td" from line 145 */; ?>
<td width="25%" align="right"><?php /* tag "span" from line 145 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Track, 'getOrdersValue2BasePrint')); ?>
</span></td>
		</tr><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

	</tbody>
	<?php /* tag "tfoot" from line 148 */; ?>
<tfoot>		
		<?php /* tag "tr" from line 149 */; ?>
<tr>
			<?php /* tag "th" from line 150 */; ?>
<th width="25%" align="right" colspan="2"><?php /* tag "B" from line 150 */; ?>
<B>TỔNG CỘNG</B></th>
			<?php /* tag "th" from line 151 */; ?>
<th width="25%" align="right"><?php /* tag "B" from line 151 */; ?>
<B><?php echo phptal_escape($ctx->path($ctx->PondSession, 'getOrdersValue2BasePrint')); ?>
</B></th>
			<?php /* tag "th" from line 152 */; ?>
<th width="25%" align="right"><?php /* tag "B" from line 152 */; ?>
<B><?php echo phptal_escape($ctx->path($ctx->PondSession, 'getOrdersValue2RatePrint')); ?>
</B></th>
			<?php /* tag "th" from line 153 */; ?>
<th width="25%" align="right"><?php /* tag "B" from line 153 */; ?>
<B><?php echo phptal_escape($ctx->path($ctx->PondSession, 'getOrdersValue2Print')); ?>
</B></th>
		</tr>		
	</tfoot>
</table>

<?php /* tag "H3" from line 158 */; ?>
<H3>4. CHI PHÍ</H3>	
	<?php /* tag "table" from line 159 */; ?>
<table class="hor-minimalist-a" width="100%" border="1" cellpadding="2">
		<?php /* tag "thead" from line 160 */; ?>
<thead>
			<?php /* tag "tr" from line 161 */; ?>
<tr>
				<?php /* tag "th" from line 162 */; ?>
<th width="5%" align="center"><?php /* tag "B" from line 162 */; ?>
<B>STT</B></th>
				<?php /* tag "th" from line 163 */; ?>
<th width="20%"><?php /* tag "B" from line 163 */; ?>
<B>THÁNG</B></th>
				<?php /* tag "th" from line 164 */; ?>
<th width="25%" align="right"><?php /* tag "B" from line 164 */; ?>
<B>VỐN GỐC</B></th>
				<?php /* tag "th" from line 165 */; ?>
<th width="25%" align="right"><?php /* tag "B" from line 165 */; ?>
<B>LÃI KÉP</B></th>
				<?php /* tag "th" from line 166 */; ?>
<th width="25%" align="right"><?php /* tag "B" from line 166 */; ?>
<B>THÀNH TIỀN</B></th>
			</tr>
		</thead>
		<?php /* tag "tbody" from line 169 */; ?>
<tbody>
			<?php 
/* tag "tr" from line 170 */ ;
$_tmp_1 = $ctx->repeat ;
$_tmp_1->Track = new PHPTAL_RepeatController($ctx->path($ctx->PondSession, 'getPaidTrackings'))
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->Track as $ctx->Track): ;
?>
<tr>
				<?php /* tag "td" from line 171 */; ?>
<td width="5%" align="center"><?php /* tag "span" from line 171 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->repeat, 'Track/number')); ?>
</span></td>
				<?php /* tag "td" from line 172 */; ?>
<td width="20%"><?php /* tag "span" from line 172 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Track, 'getMonthPrint')); ?>
</span></td>
				<?php /* tag "td" from line 173 */; ?>
<td width="25%" align="right"><?php /* tag "span" from line 173 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Track, 'getPaidsValuePrint')); ?>
</span></td>
				<?php /* tag "td" from line 174 */; ?>
<td width="25%" align="right"><?php /* tag "span" from line 174 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Track, 'getPaidsValueRatePrint')); ?>
</span></td>
				<?php /* tag "td" from line 175 */; ?>
<td width="25%" align="right"><?php /* tag "span" from line 175 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Track, 'getValuePrint')); ?>
</span></td>
			</tr><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

		</tbody>
		<?php /* tag "tfoot" from line 178 */; ?>
<tfoot>
			<?php /* tag "tr" from line 179 */; ?>
<tr>
				<?php /* tag "th" from line 180 */; ?>
<th width="25%" align="right" colspan="2"><?php /* tag "B" from line 180 */; ?>
<B>TỔNG CỘNG</B></th>
				<?php /* tag "th" from line 181 */; ?>
<th width="25%" align="right"><?php /* tag "B" from line 181 */; ?>
<B><?php echo phptal_escape($ctx->path($ctx->PondSession, 'getPaidsValue1Print')); ?>
</B></th>
				<?php /* tag "th" from line 182 */; ?>
<th width="25%" align="right"><?php /* tag "B" from line 182 */; ?>
<B><?php echo phptal_escape($ctx->path($ctx->PondSession, 'getPaidsRateValuePrint')); ?>
</B></th>
				<?php /* tag "th" from line 183 */; ?>
<th width="25%" align="right"><?php /* tag "B" from line 183 */; ?>
<B><?php echo phptal_escape($ctx->path($ctx->PondSession, 'getPaidsValuePrint')); ?>
</B></th>
			</tr>
		</tfoot>
	</table>

<?php /* tag "H3" from line 188 */; ?>
<H3>5. TỔNG KẾT</H3>
<?php /* tag "table" from line 189 */; ?>
<table width="100%" border="0" cellpadding="2">
	<?php /* tag "tr" from line 190 */; ?>
<tr>
		<?php /* tag "td" from line 191 */; ?>
<td width="5%"></td>
		<?php /* tag "td" from line 192 */; ?>
<td width="25%" align="right">CON GIỐNG</td>
		<?php /* tag "td" from line 193 */; ?>
<td width="20%" align="right"><?php /* tag "span" from line 193 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->PondSession, 'getValueStartPrint')); ?>
</span></td>
		<?php /* tag "td" from line 194 */; ?>
<td width="50%"></td>
	</tr>
	<?php /* tag "tr" from line 196 */; ?>
<tr>
		<?php /* tag "td" from line 197 */; ?>
<td></td>
		<?php /* tag "td" from line 198 */; ?>
<td align="right">VẬN CHUYỂN</td>
		<?php /* tag "td" from line 199 */; ?>
<td align="right"><?php /* tag "span" from line 199 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->PondSession, 'getShipStartPrint')); ?>
</span></td>
		<?php /* tag "td" from line 200 */; ?>
<td></td>
	</tr>
	<?php /* tag "tr" from line 202 */; ?>
<tr>
		<?php /* tag "td" from line 203 */; ?>
<td></td>
		<?php /* tag "td" from line 204 */; ?>
<td colspan="2" align="right">------------------------------------------------------------------</td>
		<?php /* tag "td" from line 205 */; ?>
<td></td>
	</tr>
	<?php /* tag "tr" from line 207 */; ?>
<tr>
		<?php /* tag "td" from line 208 */; ?>
<td></td>
		<?php /* tag "td" from line 209 */; ?>
<td align="right">TIỀN GIỐNG</td>
		<?php /* tag "td" from line 210 */; ?>
<td align="right"><?php /* tag "span" from line 210 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->PondSession, 'getValueStart1Print')); ?>
</span></td>
		<?php /* tag "td" from line 211 */; ?>
<td></td>
	</tr>
	<?php /* tag "tr" from line 213 */; ?>
<tr>
		<?php /* tag "td" from line 214 */; ?>
<td></td>
		<?php /* tag "td" from line 215 */; ?>
<td align="right">LÃI TIỀN GIỐNG</td>
		<?php /* tag "td" from line 216 */; ?>
<td align="right"><?php /* tag "span" from line 216 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->PondSession, 'getValueStart1RatePrint')); ?>
</span></td>
		<?php /* tag "td" from line 217 */; ?>
<td></td>
	</tr>
	<?php /* tag "tr" from line 219 */; ?>
<tr>
		<?php /* tag "td" from line 220 */; ?>
<td></td>
		<?php /* tag "td" from line 221 */; ?>
<td colspan="2" align="right">------------------------------------------------------------------</td>
		<?php /* tag "td" from line 222 */; ?>
<td></td>
	</tr>
	<?php /* tag "tr" from line 224 */; ?>
<tr>
		<?php /* tag "td" from line 225 */; ?>
<td></td>
		<?php /* tag "td" from line 226 */; ?>
<td align="right">ĐẦU TƯ GIỐNG</td>
		<?php /* tag "td" from line 227 */; ?>
<td align="right"><?php /* tag "span" from line 227 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->PondSession, 'getValueStart2Print')); ?>
</span></td>
		<?php /* tag "td" from line 228 */; ?>
<td></td>
	</tr>
	<?php /* tag "tr" from line 230 */; ?>
<tr>
		<?php /* tag "td" from line 231 */; ?>
<td></td>
		<?php /* tag "td" from line 232 */; ?>
<td colspan="2" align="left">+</td>
		<?php /* tag "td" from line 233 */; ?>
<td></td>
	</tr>	
	<?php 
/* tag "tr" from line 235 */ ;
if ($ctx->PondSession->getType()==1?true:false):  ;
?>
<tr>
		<?php /* tag "td" from line 236 */; ?>
<td></td>
		<?php /* tag "td" from line 237 */; ?>
<td align="right">TIỀN THỨC ĂN</td>
		<?php /* tag "td" from line 238 */; ?>
<td align="right"><?php /* tag "span" from line 238 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->PondSession, 'getOrdersValue1Print')); ?>
</span></td>
		<?php /* tag "td" from line 239 */; ?>
<td></td>
	</tr><?php endif; ?>
	
	<?php /* tag "tr" from line 241 */; ?>
<tr>
		<?php /* tag "td" from line 242 */; ?>
<td></td>
		<?php /* tag "td" from line 243 */; ?>
<td align="right">TIỀN THUỐC</td>
		<?php /* tag "td" from line 244 */; ?>
<td align="right"><?php /* tag "span" from line 244 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->PondSession, 'getOrdersValue2Print')); ?>
</span></td>
		<?php /* tag "td" from line 245 */; ?>
<td></td>
	</tr>
	<?php /* tag "tr" from line 247 */; ?>
<tr>
		<?php /* tag "td" from line 248 */; ?>
<td></td>
		<?php /* tag "td" from line 249 */; ?>
<td align="right">CHI PHÍ NUÔI</td>
		<?php /* tag "td" from line 250 */; ?>
<td align="right"><?php /* tag "span" from line 250 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->PondSession, 'getPaidsValuePrint')); ?>
</span></td>
		<?php /* tag "td" from line 251 */; ?>
<td></td>
	</tr>
	<?php /* tag "tr" from line 253 */; ?>
<tr>
		<?php /* tag "td" from line 254 */; ?>
<td></td>
		<?php /* tag "td" from line 255 */; ?>
<td colspan="2" align="right">------------------------------------------------------------------</td>
		<?php /* tag "td" from line 256 */; ?>
<td></td>
	</tr>
	<?php /* tag "tr" from line 258 */; ?>
<tr>
		<?php /* tag "td" from line 259 */; ?>
<td></td>
		<?php /* tag "td" from line 260 */; ?>
<td align="right"><?php /* tag "B" from line 260 */; ?>
<B>(1) TỔNG CHI</B></td>
		<?php /* tag "td" from line 261 */; ?>
<td align="right"><?php /* tag "B" from line 261 */; ?>
<B><?php echo phptal_escape($ctx->path($ctx->PondSession, 'getValueExportPrint')); ?>
</B></td>
		<?php /* tag "td" from line 262 */; ?>
<td></td>
	</tr>
	<?php /* tag "tr" from line 264 */; ?>
<tr>
		<?php /* tag "td" from line 265 */; ?>
<td></td>
		<?php /* tag "td" from line 266 */; ?>
<td colspan="2" align="left">-</td>
		<?php /* tag "td" from line 267 */; ?>
<td></td>
	</tr>
	<?php /* tag "tr" from line 269 */; ?>
<tr>
		<?php /* tag "td" from line 270 */; ?>
<td></td>
		<?php /* tag "td" from line 271 */; ?>
<td align="right">XUẤT BÁN</td>
		<?php /* tag "td" from line 272 */; ?>
<td align="right"><?php /* tag "span" from line 272 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->PondSession, 'getCountExportPrint')); ?>
</span></td>
		<?php /* tag "td" from line 273 */; ?>
<td></td>
	</tr>
	<?php /* tag "tr" from line 275 */; ?>
<tr>
		<?php /* tag "td" from line 276 */; ?>
<td></td>
		<?php /* tag "td" from line 277 */; ?>
<td align="right">ĐỊNH MỨC</td>
		<?php /* tag "td" from line 278 */; ?>
<td align="right"><?php /* tag "span" from line 278 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->PondSession, 'getPriceExportPrint')); ?>
</span></td>
		<?php /* tag "td" from line 279 */; ?>
<td></td>
	</tr>
	<?php /* tag "tr" from line 281 */; ?>
<tr>
		<?php /* tag "td" from line 282 */; ?>
<td></td>
		<?php /* tag "td" from line 283 */; ?>
<td align="right"><?php /* tag "B" from line 283 */; ?>
<B>(2) TIỀN CÔNG</B></td>
		<?php /* tag "td" from line 284 */; ?>
<td align="right"><?php /* tag "B" from line 284 */; ?>
<B><?php echo phptal_escape($ctx->path($ctx->PondSession, 'getValueImportPrint')); ?>
</B></td>
		<?php /* tag "td" from line 285 */; ?>
<td></td>
	</tr>
	
	<?php /* tag "tr" from line 288 */; ?>
<tr>
		<?php /* tag "td" from line 289 */; ?>
<td></td>
		<?php /* tag "td" from line 290 */; ?>
<td align="right"><?php /* tag "B" from line 290 */; ?>
<B>(3) TIỀN CÁ NGỘP</B></td>
		<?php /* tag "td" from line 291 */; ?>
<td align="right"><?php /* tag "B" from line 291 */; ?>
<B><?php echo phptal_escape($ctx->path($ctx->PondSession, 'getValueWastePrint')); ?>
</B></td>
		<?php /* tag "td" from line 292 */; ?>
<td></td>
	</tr>
	
	<?php /* tag "tr" from line 295 */; ?>
<tr>
		<?php /* tag "td" from line 296 */; ?>
<td></td>
		<?php /* tag "td" from line 297 */; ?>
<td colspan="2" align="right">------------------------------------------------------------------</td>
		<?php /* tag "td" from line 298 */; ?>
<td></td>
	</tr>
	<?php /* tag "tr" from line 300 */; ?>
<tr>
		<?php /* tag "td" from line 301 */; ?>
<td></td>
		<?php /* tag "td" from line 302 */; ?>
<td align="right"><?php /* tag "B" from line 302 */; ?>
<B>LÃI = (3) + (2) - (1)</B></td>
		<?php /* tag "td" from line 303 */; ?>
<td align="right"><?php /* tag "B" from line 303 */; ?>
<B><?php echo phptal_escape($ctx->path($ctx->PondSession, 'getValuePrint')); ?>
</B></td>
		<?php /* tag "td" from line 304 */; ?>
<td></td>
	</tr>
	<?php /* tag "tr" from line 306 */; ?>
<tr>
		<?php /* tag "td" from line 307 */; ?>
<td colspan="3" align="center">
			(<?php /* tag "span" from line 308 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->PondSession, 'getValueStrPrint')); ?>
</span>)
		</td>
		<?php /* tag "td" from line 310 */; ?>
<td></td>
	</tr>
</table>
<?php /* tag "H3" from line 313 */; ?>
<H3>6. PHÂN TÍCH</H3>
<?php /* tag "table" from line 314 */; ?>
<table width="100%" border="0" cellpadding="2">
	<?php /* tag "tr" from line 315 */; ?>
<tr>
		<?php /* tag "td" from line 316 */; ?>
<td width="5%"></td>
		<?php /* tag "td" from line 317 */; ?>
<td width="25%" align="right">VỐC GỐC</td>
		<?php /* tag "td" from line 318 */; ?>
<td width="20%" align="right"><?php /* tag "span" from line 318 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->PondSession, 'getValueExportBasePrint')); ?>
</span></td>
		<?php /* tag "td" from line 319 */; ?>
<td width="50%"></td>
	</tr>
	<?php /* tag "tr" from line 321 */; ?>
<tr>
		<?php /* tag "td" from line 322 */; ?>
<td></td>
		<?php /* tag "td" from line 323 */; ?>
<td align="right">THỜI GIAN ĐẦU TƯ</td>
		<?php /* tag "td" from line 324 */; ?>
<td align="right"><?php /* tag "span" from line 324 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->PondSession, 'getTimesPrint')); ?>
</span></td>
		<?php /* tag "td" from line 325 */; ?>
<td></td>
	</tr>
	<?php /* tag "tr" from line 327 */; ?>
<tr>
		<?php /* tag "td" from line 328 */; ?>
<td></td>
		<?php /* tag "td" from line 329 */; ?>
<td align="right">LÃI SUẤT GỬI NGÂN HÀNG</td>
		<?php /* tag "td" from line 330 */; ?>
<td align="right"><?php /* tag "span" from line 330 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->PondSession, 'getBankRatePrint')); ?>
</span></td>
		<?php /* tag "td" from line 331 */; ?>
<td></td>
	</tr>
	<?php /* tag "tr" from line 333 */; ?>
<tr>
		<?php /* tag "td" from line 334 */; ?>
<td></td>
		<?php /* tag "td" from line 335 */; ?>
<td align="right">TIỀN LÃI GỬI NGÂN HÀNG</td>
		<?php /* tag "td" from line 336 */; ?>
<td align="right"><?php /* tag "span" from line 336 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->PondSession, 'getValueExportBaseRatePrint')); ?>
</span></td>
		<?php /* tag "td" from line 337 */; ?>
<td></td>
	</tr>
	<?php /* tag "tr" from line 339 */; ?>
<tr>
		<?php /* tag "td" from line 340 */; ?>
<td></td>
		<?php /* tag "td" from line 341 */; ?>
<td align="right">LÃI SUẤT KHI KINH DOANH</td>
		<?php /* tag "td" from line 342 */; ?>
<td align="right"><?php /* tag "span" from line 342 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->PondSession, 'getBusinessRatePrint')); ?>
</span></td>
		<?php /* tag "td" from line 343 */; ?>
<td></td>
	</tr>
	<?php /* tag "tr" from line 345 */; ?>
<tr>
		<?php /* tag "td" from line 346 */; ?>
<td></td>
		<?php /* tag "td" from line 347 */; ?>
<td align="right">TIỀN LÃI KINH DOANH</td>
		<?php /* tag "td" from line 348 */; ?>
<td align="right"><?php /* tag "span" from line 348 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->PondSession, 'getValuePrint')); ?>
</span></td>
		<?php /* tag "td" from line 349 */; ?>
<td></td>
	</tr>
	<?php /* tag "tr" from line 351 */; ?>
<tr>
		<?php /* tag "td" from line 352 */; ?>
<td></td>
		<?php /* tag "td" from line 353 */; ?>
<td align="right">SO SÁNH TỈ LỆ LÃI</td>
		<?php /* tag "td" from line 354 */; ?>
<td align="right"><?php /* tag "span" from line 354 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->PondSession, 'getCompareRatePrint')); ?>
</span></td>
		<?php /* tag "td" from line 355 */; ?>
<td></td>
	</tr>
</table><?php 
/* end */ ;

}

?>
<?php /* 
*** DO NOT EDIT THIS FILE ***

Generated by PHPTAL from /home/a23app/public_html/anhnguyetfarm/mvc/templates/ReportPondPrintGeneral.html (edit that file instead) */; ?>