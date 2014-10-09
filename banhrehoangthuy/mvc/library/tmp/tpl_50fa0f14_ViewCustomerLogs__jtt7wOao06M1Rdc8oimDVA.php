<?php 
function tpl_50fa0f14_ViewCustomerLogs__jtt7wOao06M1Rdc8oimDVA(PHPTAL $tpl, PHPTAL_Context $ctx) {
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
		new FixedHeader( oTable, { "top": true, "zTop": 105 } );
	});
	/*]]>*/
	</script>
	</head>	
<?php /* tag "body" from line 27 */; ?>
<body>	
<?php /* tag "div" from line 28 */; ?>
<div id="frame">
	<?php /* tag "div" from line 29 */; ?>
<div id="page">
		<?php 
/* tag "span" from line 30 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('macros.xhtml/HeaderModuleCustomers', $_thistpl) ;
$ctx->popSlots() ;
?>

		<?php /* tag "div" from line 31 */; ?>
<div id="module2">
			<?php /* tag "div" from line 32 */; ?>
<div id="nav">
				<?php /* tag "div" from line 33 */; ?>
<div id="Title">
					<?php /* tag "div" from line 34 */; ?>
<div id="Text"><?php echo phptal_escape($ctx->Title); ?>
</div>
				</div>
			</div>
			<?php /* tag "div" from line 37 */; ?>
<div id="Column1of1">
				<?php /* tag "div" from line 38 */; ?>
<div id="Title">					
					<?php 
/* tag "a" from line 39 */ ;
if (null !== ($_tmp_1 = ($ctx->InsertLogLinked))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a title="Thêm tổng kết" id="TitleButton" class="Button StateDefault ButtonIconSolo CornerAll"<?php echo $_tmp_1 ?>
>
						<?php /* tag "span" from line 40 */; ?>
<span class="ButtonIcon ButtonIconPlusthick"></span>
					</a>
					<?php 
/* tag "a" from line 43 */ ;
if (null !== ($_tmp_1 = ($ctx->ParentsLinked))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a title="Quay lại" id="TitleButton" class="Button StateDefault ButtonIconSolo CornerAll"<?php echo $_tmp_1 ?>
>
							<?php /* tag "span" from line 44 */; ?>
<span class="ButtonIcon ButtonIconArrowreturn1-n"></span>quay lại
					</a>					
				</div>
				<?php /* tag "div" from line 47 */; ?>
<div id="Table">
					<?php /* tag "table" from line 48 */; ?>
<table cellpadding="0" cellspacing="0" border="0" class="display" id="DataTable">
						<?php /* tag "thead" from line 49 */; ?>
<thead>					
							<?php /* tag "tr" from line 50 */; ?>
<tr>								
								<?php /* tag "th" from line 51 */; ?>
<th align="center" width="30%">NGÀY BẮT ĐẦU</th>
								<?php /* tag "th" from line 52 */; ?>
<th align="center" width="30%">NGÀY KẾT THÚC</th>
								<?php /* tag "th" from line 53 */; ?>
<th align="center">ĐỐI CHIẾU</th>
								<?php /* tag "th" from line 54 */; ?>
<th align="center">TỔNG KẾT</th>
								<?php /* tag "th" from line 55 */; ?>
<th align="center" width="32px"></th>
							</tr>
						</thead>
						<?php /* tag "tbody" from line 58 */; ?>
<tbody>
							<?php 
/* tag "tr" from line 59 */ ;
$_tmp_1 = $ctx->repeat ;
$_tmp_1->CL = new PHPTAL_RepeatController($ctx->CLs)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->CL as $ctx->CL): ;
?>
<tr>
								<?php /* tag "td" from line 60 */; ?>
<td align="center"><?php /* tag "B" from line 60 */; ?>
<B><?php echo phptal_escape($ctx->path($ctx->CL, 'getDateStartPrint')); ?>
</B></td>
								<?php /* tag "td" from line 61 */; ?>
<td align="center"><?php echo phptal_escape($ctx->path($ctx->CL, 'getDateEndPrint')); ?>
</td>
								<?php /* tag "td" from line 62 */; ?>
<td align="center">
									<?php 
/* tag "a" from line 63 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->CL, 'getURLViewTracking1')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a target="blank"<?php echo $_tmp_2 ?>
><?php echo 'Xem'; ?>
</a>
								</td>
								<?php /* tag "td" from line 65 */; ?>
<td align="center">
									<?php 
/* tag "a" from line 66 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->CL, 'getURLViewTracking')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a target="blank"<?php echo $_tmp_2 ?>
><?php echo 'Xem'; ?>
</a>
								</td>
								<?php /* tag "td" from line 68 */; ?>
<td align="center">
									<?php 
/* tag "a" from line 70 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->CL, 'getURLDelete')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a title="Theo dõi trả tiền" class="Button StateDefault ButtonIconSolo CornerAll"<?php echo $_tmp_2 ?>
>
										<?php /* tag "span" from line 71 */; ?>
<span class="ButtonIcon ButtonIconClose"></span>
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
/* tag "span" from line 80 */ ;
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

Generated by PHPTAL from /home/a23app/public_html/banhreht/mvc/templates/ViewCustomerLogs.html (edit that file instead) */; ?>