<?php 
function tpl_5012a3de_ViewCustomers__5iZHTqP2dl2CodCwywuj2Q(PHPTAL $tpl, PHPTAL_Context $ctx) {
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
$tpl->_executeMacroOfTemplate('macros.xhtml/HeaderModuleCustomers', $_thistpl) ;
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
					
				</div>
				<?php /* tag "div" from line 40 */; ?>
<div id="Table">
					<?php /* tag "table" from line 41 */; ?>
<table cellpadding="0" cellspacing="0" border="0" class="display" id="DataTable">
						<?php /* tag "thead" from line 42 */; ?>
<thead>					
							<?php /* tag "tr" from line 43 */; ?>
<tr>						
								<?php /* tag "th" from line 44 */; ?>
<th align="left">STT</th>
								<?php /* tag "th" from line 45 */; ?>
<th align="left">TÊN</th>
								<?php /* tag "th" from line 46 */; ?>
<th align="left">PHONE</th>
								<?php /* tag "th" from line 47 */; ?>
<th align="left">NHẬN HÀNG</th>
								<?php /* tag "th" from line 48 */; ?>
<th align="left">GIAO TIỀN</th>								
								<?php /* tag "th" from line 49 */; ?>
<th align="left">SỔ NHẬT KÍ</th>
							</tr>
						</thead>
						<?php /* tag "tbody" from line 52 */; ?>
<tbody>
							<?php 
/* tag "tr" from line 53 */ ;
$_tmp_1 = $ctx->repeat ;
$_tmp_1->Customer = new PHPTAL_RepeatController($ctx->Customers)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->Customer as $ctx->Customer): ;
?>
<tr>
								<?php /* tag "td" from line 54 */; ?>
<td align="left"><?php echo phptal_escape($ctx->path($ctx->Customer, 'getId')); ?>
</td>								
								<?php /* tag "td" from line 55 */; ?>
<td align="left">
									<?php 
/* tag "a" from line 56 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Customer, 'getURLUpdate')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
><?php echo phptal_escape($ctx->path($ctx->Customer, 'getName')); ?>
</a>
								</td>
								<?php /* tag "td" from line 58 */; ?>
<td align="left"><?php echo phptal_escape($ctx->path($ctx->Customer, 'getPhone')); ?>
</td>
								<?php /* tag "td" from line 59 */; ?>
<td align="left">
									<?php 
/* tag "a" from line 61 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Customer, 'getURLViewProductExports')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a title="Theo dõi nhận hàng" class="Button StateDefault ButtonIconSolo CornerAll"<?php echo $_tmp_2 ?>
>
										<?php /* tag "span" from line 62 */; ?>
<span class="ButtonIcon ButtonIconCart"></span>
									</a>
								</td>
								<?php /* tag "td" from line 65 */; ?>
<td>
									<?php 
/* tag "a" from line 67 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Customer, 'getURLViewPaids')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a title="Theo dõi trả tiền" class="Button StateDefault ButtonIconSolo CornerAll"<?php echo $_tmp_2 ?>
>
										<?php /* tag "span" from line 68 */; ?>
<span class="ButtonIcon ButtonIconTransferthick-e-w"></span>
									</a>
								</td>
								<?php /* tag "td" from line 71 */; ?>
<td>
									<?php 
/* tag "a" from line 73 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Customer, 'getURLViewLogs')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a title="Nhật kí tổng kết" class="Button StateDefault ButtonIconSolo CornerAll"<?php echo $_tmp_2 ?>
>
										<?php /* tag "span" from line 74 */; ?>
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
/* tag "span" from line 83 */ ;
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

Generated by PHPTAL from /home/a23app/public_html/bra/mvc/templates/ViewCustomers.html (edit that file instead) */; ?>