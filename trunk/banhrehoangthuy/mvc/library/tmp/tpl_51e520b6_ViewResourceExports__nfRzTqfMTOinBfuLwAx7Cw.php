<?php 
function tpl_51e520b6_ViewResourceExports__nfRzTqfMTOinBfuLwAx7Cw(PHPTAL $tpl, PHPTAL_Context $ctx) {
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
                sUpdateURL: "?cmd=UpdateResourceExport",
                "aoColumns": [
					null,	
                    {
                	    indicator: 'Lưu số lượng...',
						tooltip: 'Click để chỉnh sửa số lượng BỘT'
                    },{
                	    indicator: 'Lưu số lượng...',
						tooltip: 'Click để chỉnh sửa số lượng NILON'
                    },{
                	    indicator: 'Lưu số lượng...',
						tooltip: 'Click để chỉnh sửa số lượng DẦU ĐẶC'
                    },{
                	    indicator: 'Lưu số lượng...',
						tooltip: 'Click để chỉnh sửa số lượng DẦU NƯỚC'
                    },{
                	    indicator: 'Lưu số lượng...',
						tooltip: 'Click để chỉnh sửa số lượng CAL'
                    },{
                	    indicator: 'Lưu số lượng...',
						tooltip: 'Click để chỉnh sửa số lượng GAS'
                    },{
                	    indicator: 'Lưu số lượng...',
						tooltip: 'Click để chỉnh sửa số lượng BỘT NĂNG'
                    },{
                	    indicator: 'Lưu số lượng...',
						tooltip: 'Click để chỉnh sửa số lượng BỘT PHA'
                    },{
                	    indicator: 'Lưu số lượng...',
						tooltip: 'Click để chỉnh sửa số lượng MŨ CŨ'
                    }
				]
			});
			new FixedHeader( oTable, { "top": true, "zTop": 105 } );
	});
	/*]]>*/	
	</script>
	</head>	
<?php /* tag "body" from line 60 */; ?>
<body>	
<?php /* tag "div" from line 61 */; ?>
<div id="frame">
	<?php /* tag "div" from line 62 */; ?>
<div id="page">
		<?php 
/* tag "span" from line 63 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('macros.xhtml/HeaderModuleFactories', $_thistpl) ;
$ctx->popSlots() ;
?>

		<?php /* tag "div" from line 64 */; ?>
<div id="module2">
			<?php /* tag "div" from line 65 */; ?>
<div id="nav">
				<?php /* tag "div" from line 66 */; ?>
<div id="Title">
					<?php /* tag "div" from line 67 */; ?>
<div id="Text"><?php echo phptal_escape($ctx->Title); ?>
</div>					
				</div>
			</div>
			<?php /* tag "div" from line 70 */; ?>
<div id="Column1of1">
				<?php /* tag "div" from line 71 */; ?>
<div id="Title">					
					<?php 
/* tag "a" from line 73 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Factory, 'getURLViewResourceExportsNextMonth')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a title="Tới" id="TitleButton" class="Button StateDefault ButtonIconSolo CornerAll"<?php echo $_tmp_1 ?>
>
							<?php /* tag "span" from line 74 */; ?>
<span class="ButtonIcon ButtonIconSeekNext"></span>
					</a>
					<?php 
/* tag "a" from line 77 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Factory, 'getURLViewResourceExportsBeforeMonth')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a title="Lui" id="TitleButton" class="Button StateDefault ButtonIconSolo CornerAll"<?php echo $_tmp_1 ?>
>
							<?php /* tag "span" from line 78 */; ?>
<span class="ButtonIcon ButtonIconSeekPrev"></span>
					</a>
					<?php 
/* tag "a" from line 81 */ ;
if (null !== ($_tmp_1 = ($ctx->ParentsLinked))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a title="Quay lại" id="TitleButton" class="Button StateDefault ButtonIconSolo CornerAll"<?php echo $_tmp_1 ?>
>
							<?php /* tag "span" from line 82 */; ?>
<span class="ButtonIcon ButtonIconArrowreturn1-n"></span>quay lại
					</a>
					
					<!-- Menu In -->
					<?php 
/* tag "a" from line 87 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Factory, 'getURLPrintResourceExport')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a title="In bảng thống kê tháng" target="blank" id="TitleButton" class="Button StateDefault ButtonIconSolo CornerAll"<?php echo $_tmp_1 ?>
>
							<?php /* tag "span" from line 88 */; ?>
<span class="ButtonIcon ButtonIconPrint"></span>quay lại
					</a>
				</div>
				<?php /* tag "div" from line 91 */; ?>
<div id="Table">
					<?php /* tag "table" from line 92 */; ?>
<table cellpadding="0" cellspacing="0" border="0" class="display" id="DataTable">
						<?php /* tag "thead" from line 93 */; ?>
<thead>					
							<?php /* tag "tr" from line 94 */; ?>
<tr>								
								<?php /* tag "th" from line 95 */; ?>
<th align="center" width="10%">NGÀY</th>
								<?php /* tag "th" from line 96 */; ?>
<th align="center" width="10%">Bột</th>
								<?php /* tag "th" from line 97 */; ?>
<th align="center" width="10%">Nilon</th>
								<?php /* tag "th" from line 98 */; ?>
<th align="center" width="10%">Dầu đặc</th>
								<?php /* tag "th" from line 99 */; ?>
<th align="center" width="10%">Dầu nước</th>
								<?php /* tag "th" from line 100 */; ?>
<th align="center" width="10%">Cal</th>
								<?php /* tag "th" from line 101 */; ?>
<th align="center" width="10%">Gas</th>
								<?php /* tag "th" from line 102 */; ?>
<th align="center" width="10%">Bột năng</th>
								<?php /* tag "th" from line 103 */; ?>
<th align="center" width="10%">Bột pha</th>
								<?php /* tag "th" from line 104 */; ?>
<th align="center" width="10%">Mũ cũ</th>
							</tr>
						</thead>
						<?php /* tag "tbody" from line 107 */; ?>
<tbody>
							<?php 
/* tag "tr" from line 108 */ ;
$_tmp_1 = $ctx->repeat ;
$_tmp_1->RE = new PHPTAL_RepeatController($ctx->REs)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->RE as $ctx->RE): ;
?>
<tr>								
								<?php /* tag "td" from line 109 */; ?>
<td align="center"><?php /* tag "b" from line 109 */; ?>
<b><?php echo phptal_escape($ctx->path($ctx->RE, 'getDatePrint')); ?>
</b></td>
								<?php /* tag "td" from line 110 */; ?>
<td align="center"><?php echo phptal_escape($ctx->path($ctx->RE, 'getResource01')); ?>
</td>
								<?php /* tag "td" from line 111 */; ?>
<td align="center"><?php echo phptal_escape($ctx->path($ctx->RE, 'getResource02')); ?>
</td>
								<?php /* tag "td" from line 112 */; ?>
<td align="center"><?php echo phptal_escape($ctx->path($ctx->RE, 'getResource03')); ?>
</td>
								<?php /* tag "td" from line 113 */; ?>
<td align="center"><?php echo phptal_escape($ctx->path($ctx->RE, 'getResource04')); ?>
</td>
								<?php /* tag "td" from line 114 */; ?>
<td align="center"><?php echo phptal_escape($ctx->path($ctx->RE, 'getResource05')); ?>
</td>
								<?php /* tag "td" from line 115 */; ?>
<td align="center"><?php echo phptal_escape($ctx->path($ctx->RE, 'getResource06')); ?>
</td>
								<?php /* tag "td" from line 116 */; ?>
<td align="center"><?php echo phptal_escape($ctx->path($ctx->RE, 'getResource07')); ?>
</td>
								<?php /* tag "td" from line 117 */; ?>
<td align="center"><?php echo phptal_escape($ctx->path($ctx->RE, 'getResource08')); ?>
</td>
								<?php /* tag "td" from line 118 */; ?>
<td align="center"><?php echo phptal_escape($ctx->path($ctx->RE, 'getResource09')); ?>
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
/* tag "span" from line 125 */ ;
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

Generated by PHPTAL from /home/banhreht/public_html/mvc/templates/ViewResourceExports.html (edit that file instead) */; ?>