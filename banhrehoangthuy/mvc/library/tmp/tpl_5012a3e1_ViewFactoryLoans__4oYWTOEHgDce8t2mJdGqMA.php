<?php 
function tpl_5012a3e1_ViewFactoryLoans__4oYWTOEHgDce8t2mJdGqMA(PHPTAL $tpl, PHPTAL_Context $ctx) {
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
                sUpdateURL: "?cmd=UpdateFactoryLoan",
                "aoColumns": [
					null,{
                	    indicator: 'Lưu số lượng...',
						tooltip: 'Click để chỉnh sửa SỐ TIỀN ỨNG'
                    },{
                	    indicator: 'Lưu ghi chú...',
						tooltip: 'Click để ghi nhận LÍ DO ỨNG TIỀN'
                    }
				]
			});
		new FixedHeader( oTable, { "top": true, "zTop": 105 } );	
	});
	/*]]>*/	
	</script>
	</head>	
<?php /* tag "body" from line 38 */; ?>
<body>	
<?php /* tag "div" from line 39 */; ?>
<div id="frame">
	<?php /* tag "div" from line 40 */; ?>
<div id="page">
		<?php 
/* tag "span" from line 41 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('macros.xhtml/HeaderModuleFactories', $_thistpl) ;
$ctx->popSlots() ;
?>

		<?php /* tag "div" from line 42 */; ?>
<div id="module2">
			<?php /* tag "div" from line 43 */; ?>
<div id="nav">
				<?php /* tag "div" from line 44 */; ?>
<div id="Title">
					<?php /* tag "div" from line 45 */; ?>
<div id="Text"><?php echo phptal_escape($ctx->Title); ?>
</div>
				</div>
			</div>
			<?php /* tag "div" from line 48 */; ?>
<div id="Column1of1">
				<?php /* tag "div" from line 49 */; ?>
<div id="Title">
					<?php 
/* tag "a" from line 51 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Factory, 'getURLViewLoansNextMonth')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a title="Tới" id="TitleButton" class="Button StateDefault ButtonIconSolo CornerAll"<?php echo $_tmp_1 ?>
>
						<?php /* tag "span" from line 52 */; ?>
<span class="ButtonIcon ButtonIconSeekNext"></span>
					</a>
					<?php 
/* tag "a" from line 55 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Factory, 'getURLViewLoansBeforeMonth')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a title="Lui" id="TitleButton" class="Button StateDefault ButtonIconSolo CornerAll"<?php echo $_tmp_1 ?>
>
						<?php /* tag "span" from line 56 */; ?>
<span class="ButtonIcon ButtonIconSeekPrev"></span>
					</a>
					<?php 
/* tag "a" from line 59 */ ;
if (null !== ($_tmp_1 = ($ctx->ParentsLinked))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a title="Quay lại" id="TitleButton" class="Button StateDefault ButtonIconSolo CornerAll"<?php echo $_tmp_1 ?>
>
							<?php /* tag "span" from line 60 */; ?>
<span class="ButtonIcon ButtonIconArrowreturn1-n"></span>quay lại
					</a>		

					<!-- Menu In -->
					<?php 
/* tag "a" from line 65 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Factory, 'getURLPrintLoans')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a title="In bảng" target="blank" id="TitleButton" class="Button StateDefault ButtonIconSolo CornerAll"<?php echo $_tmp_1 ?>
>
							<?php /* tag "span" from line 66 */; ?>
<span class="ButtonIcon ButtonIconPrint"></span>quay lại
					</a>
				</div>
				<?php /* tag "div" from line 69 */; ?>
<div id="Table">
					<?php /* tag "table" from line 70 */; ?>
<table cellpadding="0" cellspacing="0" border="0" class="display" id="DataTable">
						<?php /* tag "thead" from line 71 */; ?>
<thead>					
							<?php /* tag "tr" from line 72 */; ?>
<tr>								
								<?php /* tag "th" from line 73 */; ?>
<th align="center" width="15%">NGÀY</th>
								<?php /* tag "th" from line 74 */; ?>
<th align="right" width="25%">TIỀN ỨNG</th>
								<?php /* tag "th" from line 75 */; ?>
<th align="left" width="60%">LÍ DO ỨNG TIỀN</th>
							</tr>
						</thead>
						<?php /* tag "tbody" from line 78 */; ?>
<tbody>
							<?php 
/* tag "tr" from line 79 */ ;
$_tmp_1 = $ctx->repeat ;
$_tmp_1->FL = new PHPTAL_RepeatController($ctx->FLs)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->FL as $ctx->FL): ;
?>
<tr>
								<?php /* tag "td" from line 80 */; ?>
<td align="center"><?php /* tag "b" from line 80 */; ?>
<b><?php echo phptal_escape($ctx->path($ctx->FL, 'getDatePrint')); ?>
</b></td>
								<?php /* tag "td" from line 81 */; ?>
<td align="right"><?php echo phptal_escape($ctx->path($ctx->FL, 'getValue')); ?>
</td>
								<?php /* tag "td" from line 82 */; ?>
<td align="left"><?php echo phptal_escape($ctx->path($ctx->FL, 'getDescription')); ?>
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
/* tag "span" from line 89 */ ;
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

Generated by PHPTAL from /home/a23app/public_html/bra/mvc/templates/ViewFactoryLoans.html (edit that file instead) */; ?>