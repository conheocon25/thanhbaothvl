<?php 
function tpl_5012a3ec_ViewResourceImports2__YbFdsJhi3aOeeT4AdfIV2w(PHPTAL $tpl, PHPTAL_Context $ctx) {
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
                sUpdateURL: "?cmd=UpdateResourceImport",
                "aoColumns": [
					null,	
                    {
                	    indicator: 'Lưu số lượng...',
						tooltip: 'Click để chỉnh sửa số lượng BỘT NĂNG'
                    }
				]
			});
			new FixedHeader( oTable, { "top": true, "zTop": 105 } );
	});
	/*]]>*/	
	</script>
	</head>	
<?php /* tag "body" from line 36 */; ?>
<body>	
<?php /* tag "div" from line 37 */; ?>
<div id="frame">
	<?php /* tag "div" from line 38 */; ?>
<div id="page">
		<?php 
/* tag "span" from line 39 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('macros.xhtml/HeaderModuleSuppliers', $_thistpl) ;
$ctx->popSlots() ;
?>

		<?php /* tag "div" from line 40 */; ?>
<div id="module2">
			<?php /* tag "div" from line 41 */; ?>
<div id="nav">
				<?php /* tag "div" from line 42 */; ?>
<div id="Title">
					<?php /* tag "div" from line 43 */; ?>
<div id="Text"><?php echo phptal_escape($ctx->Title); ?>
</div>					
				</div>
			</div>
			<?php /* tag "div" from line 46 */; ?>
<div id="Column1of1">
				<?php /* tag "div" from line 47 */; ?>
<div id="Title">					
					<?php 
/* tag "a" from line 49 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Supplier, 'getURLResourceImportsNext')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a title="Tới" id="TitleButton" class="Button StateDefault ButtonIconSolo CornerAll"<?php echo $_tmp_1 ?>
>
							<?php /* tag "span" from line 50 */; ?>
<span class="ButtonIcon ButtonIconSeekNext"></span>
					</a>
					<?php 
/* tag "a" from line 53 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Supplier, 'getURLResourceImportsBefore')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a title="Lui" id="TitleButton" class="Button StateDefault ButtonIconSolo CornerAll"<?php echo $_tmp_1 ?>
>
							<?php /* tag "span" from line 54 */; ?>
<span class="ButtonIcon ButtonIconSeekPrev"></span>
					</a>
					<?php 
/* tag "a" from line 57 */ ;
if (null !== ($_tmp_1 = ($ctx->ParentsLinked))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a title="Quay lại" id="TitleButton" class="Button StateDefault ButtonIconSolo CornerAll"<?php echo $_tmp_1 ?>
>
							<?php /* tag "span" from line 58 */; ?>
<span class="ButtonIcon ButtonIconArrowreturn1-n"></span>quay lại
					</a>
										
				</div>
				<?php /* tag "div" from line 62 */; ?>
<div id="Table">
					<?php /* tag "table" from line 63 */; ?>
<table cellpadding="0" cellspacing="0" border="0" class="display" id="DataTable">
						<?php /* tag "thead" from line 64 */; ?>
<thead>					
							<?php /* tag "tr" from line 65 */; ?>
<tr>								
								<?php /* tag "th" from line 66 */; ?>
<th align="center">NGÀY</th>								
								<?php /* tag "th" from line 67 */; ?>
<th align="center">Bột năng</th>
							</tr>
						</thead>
						<?php /* tag "tbody" from line 70 */; ?>
<tbody>
							<?php 
/* tag "tr" from line 71 */ ;
$_tmp_1 = $ctx->repeat ;
$_tmp_1->RIT = new PHPTAL_RepeatController($ctx->RITs)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->RIT as $ctx->RIT): ;
?>
<tr>								
								<?php /* tag "td" from line 72 */; ?>
<td align="center"><?php /* tag "b" from line 72 */; ?>
<b><?php echo phptal_escape($ctx->path($ctx->RIT, 'getDatePrint')); ?>
</b></td>								
								<?php /* tag "td" from line 73 */; ?>
<td align="center"><?php echo phptal_escape($ctx->path($ctx->RIT, 'getResource07')); ?>
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

Generated by PHPTAL from /home/a23app/public_html/bra/mvc/templates/ViewResourceImports2.html (edit that file instead) */; ?>