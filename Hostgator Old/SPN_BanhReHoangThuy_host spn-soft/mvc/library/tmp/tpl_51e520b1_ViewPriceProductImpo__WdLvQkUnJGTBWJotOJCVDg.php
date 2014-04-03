<?php 
function tpl_51e520b1_ViewPriceProductImpo__WdLvQkUnJGTBWJotOJCVDg(PHPTAL $tpl, PHPTAL_Context $ctx) {
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
$tpl->_executeMacroOfTemplate('macros.xhtml/HeaderModuleSettings', $_thistpl) ;
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
/* tag "a" from line 40 */ ;
if (null !== ($_tmp_1 = ('?cmd=ViewSettings'))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a title="Quay lại" id="TitleButton" class="Button StateDefault ButtonIconSolo CornerAll"<?php echo $_tmp_1 ?>
>
							<?php /* tag "span" from line 41 */; ?>
<span class="ButtonIcon ButtonIconArrowreturn1-n"></span>quay lại
					</a>					
				</div>
				<?php /* tag "div" from line 44 */; ?>
<div id="Table">
					<?php /* tag "table" from line 45 */; ?>
<table cellpadding="0" cellspacing="0" border="0" class="display" id="DataTable">
						<?php /* tag "thead" from line 46 */; ?>
<thead>					
							<?php /* tag "tr" from line 47 */; ?>
<tr>								
								<?php /* tag "th" from line 48 */; ?>
<th align="left">TÊN</th>
								<?php /* tag "th" from line 49 */; ?>
<th align="center">nhỏx6<?php /* tag "BR" from line 49 */; ?>
<BR/>(18g)</th>
								<?php /* tag "th" from line 50 */; ?>
<th align="center">nhỏx7<?php /* tag "BR" from line 50 */; ?>
<BR/>(21g)</th>
								<?php /* tag "th" from line 51 */; ?>
<th align="center">nhỏx10<?php /* tag "BR" from line 51 */; ?>
<BR/>(30g)</th>
								<?php /* tag "th" from line 52 */; ?>
<th align="center">nhỏx18<?php /* tag "BR" from line 52 */; ?>
<BR/>(54g)</th>
								<?php /* tag "th" from line 53 */; ?>
<th align="center">16x30<?php /* tag "BR" from line 53 */; ?>
<BR/>(90g)</th>
								<?php /* tag "th" from line 54 */; ?>
<th align="center">16x30<?php /* tag "BR" from line 54 */; ?>
<BR/>(150g)</th>
								<?php /* tag "th" from line 55 */; ?>
<th align="center">16Cx30<?php /* tag "BR" from line 55 */; ?>
<BR/>(150g)</th>
								<?php /* tag "th" from line 56 */; ?>
<th align="center">16Cx50<?php /* tag "BR" from line 56 */; ?>
<BR/>(250g)</th>
								<?php /* tag "th" from line 57 */; ?>
<th align="center">16Cx90<?php /* tag "BR" from line 57 */; ?>
<BR/>(500g)</th>
								<?php /* tag "th" from line 58 */; ?>
<th align="center">18x30<?php /* tag "BR" from line 58 */; ?>
<BR/>(180g)</th>
								<?php /* tag "th" from line 59 */; ?>
<th align="center">19x45<?php /* tag "BR" from line 59 */; ?>
<BR/>(300g)</th>
								<?php /* tag "th" from line 60 */; ?>
<th align="center">20x30<?php /* tag "BR" from line 60 */; ?>
<BR/>(210g)</th>
								<?php /* tag "th" from line 61 */; ?>
<th align="center">22x30<?php /* tag "BR" from line 61 */; ?>
<BR/>(240g)</th>
								<?php /* tag "th" from line 62 */; ?>
<th align="center">22Cx60<?php /* tag "BR" from line 62 */; ?>
<BR/>(500g)</th>
								<?php /* tag "th" from line 63 */; ?>
<th align="center">18Cx70<?php /* tag "BR" from line 63 */; ?>
<BR/>(500g)</th>
							</tr>
						</thead>
						<?php /* tag "tbody" from line 66 */; ?>
<tbody>
							<?php 
/* tag "tr" from line 67 */ ;
$_tmp_1 = $ctx->repeat ;
$_tmp_1->PPITracking = new PHPTAL_RepeatController($ctx->PPITrackings)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->PPITracking as $ctx->PPITracking): ;
?>
<tr>								
								<?php /* tag "td" from line 68 */; ?>
<td align="left"><?php echo phptal_escape($ctx->path($ctx->PPITracking, 'getName')); ?>
</td>
								<?php /* tag "td" from line 69 */; ?>
<td align="center">
									<?php 
/* tag "a" from line 71 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->PPITracking, 'getURLUpdatePPI16')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
><?php echo phptal_escape($ctx->path($ctx->PPITracking, 'getProduct16')); ?>
</a>
								</td>
								<?php /* tag "td" from line 73 */; ?>
<td align="center">
									<?php 
/* tag "a" from line 75 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->PPITracking, 'getURLUpdatePPI17')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
><?php echo phptal_escape($ctx->path($ctx->PPITracking, 'getProduct17')); ?>
</a>
								</td>
								<?php /* tag "td" from line 77 */; ?>
<td align="center">
									<?php 
/* tag "a" from line 79 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->PPITracking, 'getURLUpdatePPI20')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
><?php echo phptal_escape($ctx->path($ctx->PPITracking, 'getProduct20')); ?>
</a>
								</td>
								<?php /* tag "td" from line 81 */; ?>
<td align="center">
									<?php 
/* tag "a" from line 83 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->PPITracking, 'getURLUpdatePPI21')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
><?php echo phptal_escape($ctx->path($ctx->PPITracking, 'getProduct21')); ?>
</a>
								</td>
								<?php /* tag "td" from line 85 */; ?>
<td align="center">
									<?php 
/* tag "a" from line 87 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->PPITracking, 'getURLUpdatePPI02')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
><?php echo phptal_escape($ctx->path($ctx->PPITracking, 'getProduct02')); ?>
</a>
								</td>
								<?php /* tag "td" from line 89 */; ?>
<td align="center">
									<?php 
/* tag "a" from line 91 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->PPITracking, 'getURLUpdatePPI04')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
><?php echo phptal_escape($ctx->path($ctx->PPITracking, 'getProduct04')); ?>
</a>
								</td>								
								<?php /* tag "td" from line 93 */; ?>
<td align="center">
									<?php 
/* tag "a" from line 95 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->PPITracking, 'getURLUpdatePPI06')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
><?php echo phptal_escape($ctx->path($ctx->PPITracking, 'getProduct06')); ?>
</a>
								</td>
								<?php /* tag "td" from line 97 */; ?>
<td align="center">
									<?php 
/* tag "a" from line 99 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->PPITracking, 'getURLUpdatePPI10')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
><?php echo phptal_escape($ctx->path($ctx->PPITracking, 'getProduct10')); ?>
</a>
								</td>
								<?php /* tag "td" from line 101 */; ?>
<td align="center">
									<?php 
/* tag "a" from line 103 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->PPITracking, 'getURLUpdatePPI18')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
><?php echo phptal_escape($ctx->path($ctx->PPITracking, 'getProduct18')); ?>
</a>
								</td>
								<?php /* tag "td" from line 105 */; ?>
<td align="center">
									<?php 
/* tag "a" from line 107 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->PPITracking, 'getURLUpdatePPI08')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
><?php echo phptal_escape($ctx->path($ctx->PPITracking, 'getProduct08')); ?>
</a>
								</td>																
								<?php /* tag "td" from line 109 */; ?>
<td align="center">
									<?php 
/* tag "a" from line 111 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->PPITracking, 'getURLUpdatePPI11')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
><?php echo phptal_escape($ctx->path($ctx->PPITracking, 'getProduct11')); ?>
</a>
								</td>								
								<?php /* tag "td" from line 113 */; ?>
<td align="center">
									<?php 
/* tag "a" from line 115 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->PPITracking, 'getURLUpdatePPI13')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
><?php echo phptal_escape($ctx->path($ctx->PPITracking, 'getProduct13')); ?>
</a>
								</td>								
								<?php /* tag "td" from line 117 */; ?>
<td align="center">
									<?php 
/* tag "a" from line 119 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->PPITracking, 'getURLUpdatePPI15')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
><?php echo phptal_escape($ctx->path($ctx->PPITracking, 'getProduct15')); ?>
</a>
								</td>
								<?php /* tag "td" from line 121 */; ?>
<td align="center">
									<?php 
/* tag "a" from line 123 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->PPITracking, 'getURLUpdatePPI19')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
><?php echo phptal_escape($ctx->path($ctx->PPITracking, 'getProduct19')); ?>
</a>
								</td>
								<?php /* tag "td" from line 125 */; ?>
<td align="center">
									<?php 
/* tag "a" from line 127 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->PPITracking, 'getURLUpdatePPI22')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
><?php echo phptal_escape($ctx->path($ctx->PPITracking, 'getProduct22')); ?>
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
/* tag "span" from line 135 */ ;
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

Generated by PHPTAL from /home/banhreht/public_html/mvc/templates/ViewPriceProductImportTrackings.html (edit that file instead) */; ?>