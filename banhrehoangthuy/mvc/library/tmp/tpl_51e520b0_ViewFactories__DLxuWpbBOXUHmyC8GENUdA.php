<?php 
function tpl_51e520b0_ViewFactories__DLxuWpbBOXUHmyC8GENUdA(PHPTAL $tpl, PHPTAL_Context $ctx) {
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
	$(document).ready(function(){
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
<?php /* tag "body" from line 26 */; ?>
<body>	
<?php /* tag "div" from line 27 */; ?>
<div id="frame">
	<?php /* tag "div" from line 28 */; ?>
<div id="page">
		<?php 
/* tag "span" from line 29 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('macros.xhtml/HeaderModuleFactories', $_thistpl) ;
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
<a title="Tổng kết nguyên liệu giao" href="?cmd=ViewResourceExportTrackings" id="TitleButton" class="Button StateDefault ButtonIconSolo CornerAll">
						<?php /* tag "span" from line 39 */; ?>
<span class="ButtonIcon ButtonIconStar"></span>
					</a>
					<?php /* tag "a" from line 41 */; ?>
<a title="Tổng kết sản phẩm nhận" href="?cmd=ViewProductImportTrackings" id="TitleButton" class="Button StateDefault ButtonIconSolo CornerAll">
						<?php /* tag "span" from line 42 */; ?>
<span class="ButtonIcon ButtonIconStar"></span>
					</a>
				</div>
				<?php /* tag "div" from line 45 */; ?>
<div id="Table">
					<?php /* tag "table" from line 46 */; ?>
<table cellpadding="0" cellspacing="0" border="0" class="display" id="DataTable">
						<?php /* tag "thead" from line 47 */; ?>
<thead>					
							<?php /* tag "tr" from line 48 */; ?>
<tr>
								<?php /* tag "th" from line 49 */; ?>
<th align="center">STT</th>
								<?php /* tag "th" from line 50 */; ?>
<th align="left">TÊN</th>								
								<?php /* tag "th" from line 51 */; ?>
<th align="left">PHONE</th>
								<?php /* tag "th" from line 52 */; ?>
<th align="left">CÔNG NHÂN</th>
								<?php /* tag "th" from line 53 */; ?>
<th align="left">GIAO HÀNG</th>
								<?php /* tag "th" from line 54 */; ?>
<th align="left">NGUYÊN LIỆU</th>
								<?php /* tag "th" from line 55 */; ?>
<th align="left">ỨNG TIỀN</th>
								<?php /* tag "th" from line 56 */; ?>
<th align="left">SỔ NHẬT KÍ</th>
							</tr>
						</thead>
						<?php /* tag "tbody" from line 59 */; ?>
<tbody>
							<?php 
/* tag "tr" from line 60 */ ;
$_tmp_1 = $ctx->repeat ;
$_tmp_1->Factory = new PHPTAL_RepeatController($ctx->Factories)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->Factory as $ctx->Factory): ;
?>
<tr>
								<?php /* tag "td" from line 61 */; ?>
<td align="center"><?php echo phptal_escape($ctx->path($ctx->Factory, 'getId')); ?>
</td>
								<?php /* tag "td" from line 62 */; ?>
<td align="left">
									<?php 
/* tag "a" from line 63 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Factory, 'getURLUpdate')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
><?php echo phptal_escape($ctx->path($ctx->Factory, 'getName')); ?>
</a>
								</td>
								<?php /* tag "td" from line 65 */; ?>
<td align="left"><?php echo phptal_escape($ctx->path($ctx->Factory, 'getPhone')); ?>
</td>								
								<?php /* tag "td" from line 66 */; ?>
<td align="right">
									<?php 
/* tag "span" from line 67 */ ;
if ($ctx->path($ctx->Factory, 'hasEmployees')):  ;
?>
<span>
										<?php 
/* tag "a" from line 69 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Factory, 'getURLViewEmployees')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a title="Danh sách công nhân" class="Button StateDefault ButtonIconSolo CornerAll"<?php echo $_tmp_2 ?>
>
											<?php /* tag "span" from line 70 */; ?>
<span class="ButtonIcon ButtonIconPerson"></span>
										</a>
									</span><?php endif; ?>

								</td>
								<?php /* tag "td" from line 74 */; ?>
<td align="right">
									<?php 
/* tag "a" from line 76 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Factory, 'getURLViewProductImports')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a title="Giao hàng" class="Button StateDefault ButtonIconSolo CornerAll"<?php echo $_tmp_2 ?>
>
										<?php /* tag "span" from line 77 */; ?>
<span class="ButtonIcon ButtonIconCart"></span>
									</a>
								</td>
								<?php /* tag "td" from line 80 */; ?>
<td align="right">
									<?php 
/* tag "a" from line 82 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Factory, 'getURLViewResourceExports')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a title="Nhận nguyên liệu" class="Button StateDefault ButtonIconSolo CornerAll"<?php echo $_tmp_2 ?>
>
										<?php /* tag "span" from line 83 */; ?>
<span class="ButtonIcon ButtonIconCart"></span>
									</a>
								</td>
								<?php /* tag "td" from line 86 */; ?>
<td align="center">									
									<?php 
/* tag "a" from line 88 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Factory, 'getURLViewLoans')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a title="Ứng tiền" class="Button StateDefault ButtonIconSolo CornerAll"<?php echo $_tmp_2 ?>
>
										<?php /* tag "span" from line 89 */; ?>
<span class="ButtonIcon ButtonIconTransferthick-e-w"></span>
									</a>									
								</td>
								<?php /* tag "td" from line 92 */; ?>
<td align="right">									
									<?php 
/* tag "a" from line 94 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Factory, 'getURLViewLogs')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a title="Tổng kết" class="Button StateDefault ButtonIconSolo CornerAll"<?php echo $_tmp_2 ?>
>
										<?php /* tag "span" from line 95 */; ?>
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
/* tag "span" from line 104 */ ;
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

Generated by PHPTAL from /home/banhreht/public_html/mvc/templates/ViewFactories.html (edit that file instead) */; ?>