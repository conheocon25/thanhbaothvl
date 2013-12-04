<?php 
function tpl_50fa0f14_ViewSupplierDebts__VTUqPi2oEIh30ktS7AoQIQ(PHPTAL $tpl, PHPTAL_Context $ctx) {
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
		}).makeEditable({
                sUpdateURL: "?cmd=UpdateSupplierDebt",
                "aoColumns": [
					null,{
                	    indicator: 'Lưu số lượng...',
						tooltip: 'Click để chỉnh sửa số tiền nhận'
                    }
				]
			});
			new FixedHeader( oTable, { "top": true, "zTop": 105 } );
	});
	/*]]>*/
	</script>
	</head>	
<?php /* tag "body" from line 35 */; ?>
<body>	
<?php /* tag "div" from line 36 */; ?>
<div id="frame">
	<?php /* tag "div" from line 37 */; ?>
<div id="page">
		<?php 
/* tag "span" from line 38 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('macros.xhtml/HeaderModuleSuppliers', $_thistpl) ;
$ctx->popSlots() ;
?>

		<?php /* tag "div" from line 39 */; ?>
<div id="module2">
			<?php /* tag "div" from line 40 */; ?>
<div id="nav">
				<?php /* tag "div" from line 41 */; ?>
<div id="Title">
					<?php /* tag "div" from line 42 */; ?>
<div id="Text"><?php echo phptal_escape($ctx->Title); ?>
</div>
				</div>
			</div>
			<?php /* tag "div" from line 45 */; ?>
<div id="Column1of1">
				<?php /* tag "div" from line 46 */; ?>
<div id="Title">
					<?php 
/* tag "a" from line 48 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Supplier, 'getURLViewDebtsNext')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a title="Tới" id="TitleButton" class="Button StateDefault ButtonIconSolo CornerAll"<?php echo $_tmp_1 ?>
>
						<?php /* tag "span" from line 49 */; ?>
<span class="ButtonIcon ButtonIconSeekNext"></span>
					</a>
					<?php 
/* tag "a" from line 52 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Supplier, 'getURLViewDebtsBefore')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a title="Lui" id="TitleButton" class="Button StateDefault ButtonIconSolo CornerAll"<?php echo $_tmp_1 ?>
>
						<?php /* tag "span" from line 53 */; ?>
<span class="ButtonIcon ButtonIconSeekPrev"></span>
					</a>
					<?php 
/* tag "a" from line 56 */ ;
if (null !== ($_tmp_1 = ($ctx->ParentsLinked))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a title="Quay lại" id="TitleButton" class="Button StateDefault ButtonIconSolo CornerAll"<?php echo $_tmp_1 ?>
>
							<?php /* tag "span" from line 57 */; ?>
<span class="ButtonIcon ButtonIconArrowreturn1-n"></span>quay lại
					</a>
					
				</div>
				<?php /* tag "div" from line 61 */; ?>
<div id="Table">
					<?php /* tag "table" from line 62 */; ?>
<table cellpadding="0" cellspacing="0" border="0" class="display" id="DataTable">
						<?php /* tag "thead" from line 63 */; ?>
<thead>					
							<?php /* tag "tr" from line 64 */; ?>
<tr>								
								<?php /* tag "th" from line 65 */; ?>
<th align="right" width="40%">NGÀY</th>
								<?php /* tag "th" from line 66 */; ?>
<th align="left" width="60%">SỐ TIỀN TRẢ</th>
							</tr>
						</thead>
						<?php /* tag "tbody" from line 69 */; ?>
<tbody>
							<?php 
/* tag "tr" from line 70 */ ;
$_tmp_1 = $ctx->repeat ;
$_tmp_1->SD = new PHPTAL_RepeatController($ctx->SDs)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->SD as $ctx->SD): ;
?>
<tr>
								<?php /* tag "td" from line 71 */; ?>
<td align="right"><?php /* tag "B" from line 71 */; ?>
<B><?php echo phptal_escape($ctx->path($ctx->SD, 'getDatePrint')); ?>
</B></td>
								<?php /* tag "td" from line 72 */; ?>
<td align="left"><?php echo phptal_escape($ctx->path($ctx->SD, 'getValue')); ?>
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
/* tag "span" from line 79 */ ;
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

Generated by PHPTAL from /home/a23app/public_html/banhreht/mvc/templates/ViewSupplierDebts.html (edit that file instead) */; ?>