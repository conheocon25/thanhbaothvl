<?php 
function tpl_51e520b8_ViewSuppliers__DUmv5MDA4JDdnlWm88ZlJQ(PHPTAL $tpl, PHPTAL_Context $ctx) {
$_thistpl = $tpl ;
$_translator = $tpl->getTranslator() ;
/* tag "documentElement" from line 1 */ ;
$ctx->setDocType('<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">',false) ;
?>

<?php /* tag "html" from line 2 */; ?>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
	<?php /* tag "head" from line 3 */; ?>
<head>
		<?php 
/* tag "span" from line 4 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('macros.xhtml/IncludeBase', $_thistpl) ;
$ctx->popSlots() ;
?>

		<?php /* tag "script" from line 5 */; ?>
<script>
	/*<![CDATA[*/
	$(document).ready(function() {
						
		$('#DataTable').find('tbody tr').hover(
			function(){ $(this).find('td').addClass('table_highlighted');}, 
			function(){	$(this).find('td').removeClass('table_highlighted');}
		);
		
		var oTable = $('#DataTable').dataTable({			
			"bScrollCollapse": true,					
			"bStateSave": false,
			"bFilter": false,
			"bInfo": false,
			"bSort": false,
			"bPaginate": false
		});
	});
	/*]]>*/	
	</script>
	</head>	
<?php /* tag "body" from line 26 */; ?>
<body>	
<?php /* tag "div" from line 27 */; ?>
<div id="frame">
	<?php /* tag "div" from line 28 */; ?>
<div id="page">
		<?php 
/* tag "span" from line 29 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('macros.xhtml/HeaderModuleSuppliers', $_thistpl) ;
$ctx->popSlots() ;
?>

		<?php /* tag "div" from line 30 */; ?>
<div id="module2">
			<?php /* tag "div" from line 31 */; ?>
<div id="nav">
				<?php /* tag "div" from line 32 */; ?>
<div id="Title">
					<?php /* tag "div" from line 33 */; ?>
<div id="Text"><?php echo phptal_escape($ctx->Title); ?>
</div>
				</div>
			</div>
			<?php /* tag "div" from line 36 */; ?>
<div id="Column1of1">
				<?php /* tag "div" from line 37 */; ?>
<div id="Title">
					<?php /* tag "a" from line 38 */; ?>
<a title="Thêm mới khách hàng" href="?cmd=InsertSupplier" id="TitleButton" class="Button StateDefault ButtonIconSolo CornerAll">
						<?php /* tag "span" from line 39 */; ?>
<span class="ButtonIcon ButtonIconPlusthick"></span>
					</a>
				</div>
				<?php /* tag "div" from line 42 */; ?>
<div id="Table">
					<?php /* tag "table" from line 43 */; ?>
<table cellpadding="0" cellspacing="0" border="0" class="display" id="DataTable">
						<?php /* tag "thead" from line 44 */; ?>
<thead>					
							<?php /* tag "tr" from line 45 */; ?>
<tr>						
								<?php /* tag "th" from line 46 */; ?>
<th align="left">STT</th>
								<?php /* tag "th" from line 47 */; ?>
<th align="left">TÊN</th>
								<?php /* tag "th" from line 48 */; ?>
<th align="left">PHONE</th>
								<?php /* tag "th" from line 49 */; ?>
<th align="left">ĐỊA CHỈ</th>
								<?php /* tag "th" from line 50 */; ?>
<th align="left">NGUYÊN LIỆU</th>
								<?php /* tag "th" from line 51 */; ?>
<th align="left">CHUYỂN TIỀN</th>
								<?php /* tag "th" from line 52 */; ?>
<th align="left">TỔNG KẾT</th>
							</tr>
						</thead>
						<?php /* tag "tbody" from line 55 */; ?>
<tbody>
							<?php 
/* tag "tr" from line 56 */ ;
$_tmp_1 = $ctx->repeat ;
$_tmp_1->Supplier = new PHPTAL_RepeatController($ctx->Suppliers)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->Supplier as $ctx->Supplier): ;
?>
<tr>
								<?php /* tag "td" from line 57 */; ?>
<td align="left"><?php echo phptal_escape($ctx->path($ctx->Supplier, 'getId')); ?>
</td>								
								<?php /* tag "td" from line 58 */; ?>
<td align="left">
									<?php 
/* tag "a" from line 59 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Supplier, 'getURLUpdate')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
><?php echo phptal_escape($ctx->path($ctx->Supplier, 'getName')); ?>
</a>
								</td>
								<?php /* tag "td" from line 61 */; ?>
<td align="left"><?php echo phptal_escape($ctx->path($ctx->Supplier, 'getPhone')); ?>
</td>
								<?php /* tag "td" from line 62 */; ?>
<td align="left"><?php echo phptal_escape($ctx->path($ctx->Supplier, 'getAddress')); ?>
</td>
								<?php /* tag "td" from line 63 */; ?>
<td align="left">
									<?php 
/* tag "a" from line 65 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Supplier, 'getURLResourceImports')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a title="Nhập nguyên liệu" class="Button StateDefault ButtonIconSolo CornerAll"<?php echo $_tmp_2 ?>
>
										<?php /* tag "span" from line 66 */; ?>
<span class="ButtonIcon ButtonIconCart"></span>
									</a>									
								</td>
								<?php /* tag "td" from line 69 */; ?>
<td align="left">
									<?php 
/* tag "a" from line 71 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Supplier, 'getURLViewDebts')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a title="Chuyển tiền" class="Button StateDefault ButtonIconSolo CornerAll"<?php echo $_tmp_2 ?>
>
										<?php /* tag "span" from line 72 */; ?>
<span class="ButtonIcon ButtonIconTransferthick-e-w"></span>
									</a>									
								</td>
								<?php /* tag "td" from line 75 */; ?>
<td align="left">
									<?php 
/* tag "a" from line 77 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Supplier, 'getURLViewTracking')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a title="Tổng kết" class="Button StateDefault ButtonIconSolo CornerAll"<?php echo $_tmp_2 ?>
>
										<?php /* tag "span" from line 78 */; ?>
<span class="ButtonIcon ButtonIconCalculator"></span>
									</a>									
								</td>
							</tr><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

						</tbody>
				</table>										
				</div>
			</div>
		</div>
		<?php 
/* tag "span" from line 87 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('macros.xhtml/footer', $_thistpl) ;
$ctx->popSlots() ;
?>

	</div>
</div>		

</body>
</html><?php 
/* end */ ;

}

?>
<?php /* 
*** DO NOT EDIT THIS FILE ***

Generated by PHPTAL from /home/banhreht/public_html/mvc/templates/ViewSuppliers.html (edit that file instead) */; ?>