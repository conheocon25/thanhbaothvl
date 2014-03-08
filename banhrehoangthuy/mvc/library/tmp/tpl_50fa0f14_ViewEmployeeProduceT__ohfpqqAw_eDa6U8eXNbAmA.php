<?php 
function tpl_50fa0f14_ViewEmployeeProduceT__ohfpqqAw_eDa6U8eXNbAmA(PHPTAL $tpl, PHPTAL_Context $ctx) {
$_thistpl = $tpl ;
$_translator = $tpl->getTranslator() ;
/* tag "documentElement" from line 1 */ ;
$ctx->setDocType('<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">',false) ;
?>

<?php /* tag "html" from line 2 */; ?>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
	<?php /* tag "head" from line 3 */; ?>
<head>
		<?php /* tag "meta" from line 4 */; ?>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>		
		<?php /* tag "link" from line 5 */; ?>
<link rel="icon" type="image/ico" href="mvc/templates/theme/image/favicon.ico"/>
		<?php /* tag "script" from line 6 */; ?>
<script type="text/javascript" language="javascript" src="mvc/templates/script/jquery.js"></script>			
		<?php /* tag "script" from line 7 */; ?>
<script type="text/javascript" language="javascript" src="mvc/templates/script/jquery.dataTables.js"></script>
		<?php /* tag "script" from line 8 */; ?>
<script type="text/javascript" language="javascript" src="mvc/templates/script/jquery.jeditable.js"></script>
		<?php /* tag "script" from line 9 */; ?>
<script type="text/javascript" language="javascript" src="mvc/templates/script/jquery.dataTables.editable.js"></script>		
		<?php /* tag "script" from line 10 */; ?>
<script type="text/javascript" language="javascript" src="mvc/templates/script/main.js"></script>
		<?php /* tag "script" from line 11 */; ?>
<script type="text/javascript" language="javascript" src="mvc/templates/script/Button.js"></script>
		<?php /* tag "script" from line 12 */; ?>
<script type="text/javascript" language="javascript" src="mvc/templates/script/KeyTable.js"></script>
				
		<?php /* tag "link" from line 14 */; ?>
<link rel="stylesheet" type="text/css" href="mvc/templates/theme/css/data_table.css"/>
		<?php /* tag "link" from line 15 */; ?>
<link rel="stylesheet" type="text/css" href="mvc/templates/theme/css/main_2.css"/>							
		<?php /* tag "link" from line 16 */; ?>
<link rel="stylesheet" type="text/css" href="mvc/templates/theme/css/ButtonTheme.css"/>
		<?php /* tag "script" from line 17 */; ?>
<script>
	/*<![CDATA[*/
	$(document).ready(function() {
						
		$('#DataTable').find('tbody tr').hover(
			function(){ $(this).find('td').addClass('table_highlighted');}, 
			function(){	$(this).find('td').removeClass('table_highlighted');}
		);
		
		var id = -1;
		$('#DataTable').dataTable({			
			"bStateSave": true,
			"bFilter": false,
			"bInfo": false,
			"bSort": false,
			"bPaginate": false,
			bJQueryUI: true		
		}).makeEditable({				
                sUpdateURL: "?cmd=AjaxUpdateEmployeeProduce",
                "aoColumns": [
					null,
                    {
                	    indicator: 'Lưu số lượng...',
						tooltip: 'Click để chỉnh sửa số lượng 16(3g)'						
                    },
                    {
                	    indicator: 'Lưu số lượng...',
						tooltip: 'Click để chỉnh sửa số lượng 16 (5g)'
                    },
                    {
                	    indicator: 'Lưu số lượng...',
						tooltip: 'Click để chỉnh sửa số lượng'						
                    },
					{
                	    indicator: 'Lưu số lượng...',
						tooltip: 'Click để chỉnh sửa số lượng'						
                    },
					{
                	    indicator: 'Lưu số lượng...',
						tooltip: 'Click để chỉnh sửa số lượng'						
                    },
					{
                	    indicator: 'Lưu số lượng...',
						tooltip: 'Click để chỉnh sửa số lượng'						
                    },
					{
                	    indicator: 'Lưu số lượng...',
						tooltip: 'Click để chỉnh sửa số lượng'						
                    }
				],
				fnOnEditing: function(input)
				{ 	
					//$("#trace").append();
					//alert("Đang cập nhật " + input.val());
					return true;
				},
            	fnOnEdited: function(status)
				{ 	
					//$("#trace").append("Edit action finished. Status - " + status);
					//alert("Cập nhật rồi" + status);
				}
			});	
	});
	/*]]>*/	
	</script>
	</head>	
<?php /* tag "body" from line 83 */; ?>
<body>	
<?php /* tag "div" from line 84 */; ?>
<div id="frame">
	<?php /* tag "div" from line 85 */; ?>
<div id="page">
		<?php 
/* tag "span" from line 86 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('macros.xhtml/HeaderModuleFactories', $_thistpl) ;
$ctx->popSlots() ;
?>

		<?php /* tag "div" from line 87 */; ?>
<div id="module2">
			<?php /* tag "div" from line 88 */; ?>
<div id="nav">
				<?php /* tag "div" from line 89 */; ?>
<div id="Title">
					<?php /* tag "div" from line 90 */; ?>
<div id="Text"><?php echo phptal_escape($ctx->Title); ?>
</div>
				</div>
			</div>
			<?php /* tag "div" from line 93 */; ?>
<div id="Column1of1">
				<?php /* tag "div" from line 94 */; ?>
<div id="Title">
					<?php 
/* tag "a" from line 96 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Factory, 'getURLViewEmployeeProduceTrackingsNext')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a title="Tới" id="TitleButton" class="Button StateDefault ButtonIconSolo CornerAll"<?php echo $_tmp_1 ?>
>
						<?php /* tag "span" from line 97 */; ?>
<span class="ButtonIcon ButtonIconSeekNext"></span>
					</a>
					<?php 
/* tag "a" from line 100 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Factory, 'getURLViewEmployeeProduceTrackingsBefore')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a title="Lui" id="TitleButton" class="Button StateDefault ButtonIconSolo CornerAll"<?php echo $_tmp_1 ?>
>
						<?php /* tag "span" from line 101 */; ?>
<span class="ButtonIcon ButtonIconSeekPrev"></span>
					</a>
					<?php 
/* tag "a" from line 104 */ ;
if (null !== ($_tmp_1 = ($ctx->ParentsLinked))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a title="Quay lại" id="TitleButton" class="Button StateDefault ButtonIconSolo CornerAll"<?php echo $_tmp_1 ?>
>
							<?php /* tag "span" from line 105 */; ?>
<span class="ButtonIcon ButtonIconArrowreturn1-n"></span>quay lại
					</a>

					<!-- Menu In -->
					<?php 
/* tag "a" from line 110 */ ;
if (null !== ($_tmp_1 = ($ctx->PrintLinked))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a title="In Bảng mẫu chấm công của công nhân" target="blank" id="TitleButton" class="Button StateDefault ButtonIconSolo CornerAll"<?php echo $_tmp_1 ?>
>
							<?php /* tag "span" from line 111 */; ?>
<span class="ButtonIcon ButtonIconPrint"></span>quay lại
					</a>
				</div>
				<?php /* tag "div" from line 114 */; ?>
<div id="Table">
					<?php /* tag "table" from line 115 */; ?>
<table cellpadding="0" cellspacing="0" border="0" class="display" id="DataTable">
						<?php /* tag "thead" from line 116 */; ?>
<thead>					
							<?php /* tag "tr" from line 117 */; ?>
<tr>								
								<?php /* tag "th" from line 118 */; ?>
<th align="left" width="12%">TÊN</th>
								<?php /* tag "th" from line 119 */; ?>
<th align="center" width="5%">16(3g)</th>
								<?php /* tag "th" from line 120 */; ?>
<th align="center" width="5%">16(5g)</th>
								<?php /* tag "th" from line 121 */; ?>
<th align="center" width="5%">16cal(5g)</th>
								<?php /* tag "th" from line 122 */; ?>
<th align="center" width="5%">18(6g)</th>
								<?php /* tag "th" from line 123 */; ?>
<th align="center" width="5%">19(7g)</th>
								<?php /* tag "th" from line 124 */; ?>
<th align="center" width="5%">20(8g)</th>
								<?php /* tag "th" from line 125 */; ?>
<th align="center" width="5%">22(9g)</th>
							</tr>
						</thead>
						<?php /* tag "tbody" from line 128 */; ?>
<tbody>
							<?php 
/* tag "tr" from line 129 */ ;
$_tmp_1 = $ctx->repeat ;
$_tmp_1->EmployeeProduceTracking = new PHPTAL_RepeatController($ctx->EmployeeProduceTrackings)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->EmployeeProduceTracking as $ctx->EmployeeProduceTracking): ;
?>
<tr>								
								<?php /* tag "td" from line 130 */; ?>
<td align="left"><?php echo phptal_escape($ctx->path($ctx->EmployeeProduceTracking, 'getName')); ?>
</td>
								<?php /* tag "td" from line 131 */; ?>
<td align="center"><?php echo phptal_escape($ctx->path($ctx->EmployeeProduceTracking, 'getProduct01')); ?>
</td>
								<?php /* tag "td" from line 132 */; ?>
<td align="center"><?php echo phptal_escape($ctx->path($ctx->EmployeeProduceTracking, 'getProduct03')); ?>
</td>
								<?php /* tag "td" from line 133 */; ?>
<td align="center"><?php echo phptal_escape($ctx->path($ctx->EmployeeProduceTracking, 'getProduct05')); ?>
</td>
								<?php /* tag "td" from line 134 */; ?>
<td align="center"><?php echo phptal_escape($ctx->path($ctx->EmployeeProduceTracking, 'getProduct07')); ?>
</td>
								<?php /* tag "td" from line 135 */; ?>
<td align="center"><?php echo phptal_escape($ctx->path($ctx->EmployeeProduceTracking, 'getProduct09')); ?>
</td>
								<?php /* tag "td" from line 136 */; ?>
<td align="center"><?php echo phptal_escape($ctx->path($ctx->EmployeeProduceTracking, 'getProduct12')); ?>
</td>
								<?php /* tag "td" from line 137 */; ?>
<td align="center"><?php echo phptal_escape($ctx->path($ctx->EmployeeProduceTracking, 'getProduct14')); ?>
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
/* tag "span" from line 144 */ ;
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

Generated by PHPTAL from /home/a23app/public_html/banhreht/mvc/templates/ViewEmployeeProduceTrackings1.html (edit that file instead) */; ?>