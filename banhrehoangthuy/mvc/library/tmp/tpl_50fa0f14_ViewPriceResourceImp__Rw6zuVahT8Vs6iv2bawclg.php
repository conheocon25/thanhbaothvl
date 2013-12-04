<?php 
function tpl_50fa0f14_ViewPriceResourceImp__Rw6zuVahT8Vs6iv2bawclg(PHPTAL $tpl, PHPTAL_Context $ctx) {
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
<th align="center">Bột</th>								
								<?php /* tag "th" from line 50 */; ?>
<th align="center">Nilon</th>
								<?php /* tag "th" from line 51 */; ?>
<th align="center">Dầu đặc</th>
								<?php /* tag "th" from line 52 */; ?>
<th align="center">Dầu nước</th>
								<?php /* tag "th" from line 53 */; ?>
<th align="center">Cal</th>
								<?php /* tag "th" from line 54 */; ?>
<th align="center">Gas</th>
								<?php /* tag "th" from line 55 */; ?>
<th align="center">Bột năng</th>
								<?php /* tag "th" from line 56 */; ?>
<th align="center">Bột pha</th>
								<?php /* tag "th" from line 57 */; ?>
<th align="center">Mũ cũ</th>
								<?php /* tag "th" from line 58 */; ?>
<th align="center">Thuốc</th>
							</tr>
						</thead>
						<?php /* tag "tbody" from line 61 */; ?>
<tbody>
							<?php 
/* tag "tr" from line 62 */ ;
$_tmp_1 = $ctx->repeat ;
$_tmp_1->PRITracking = new PHPTAL_RepeatController($ctx->PRITrackings)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->PRITracking as $ctx->PRITracking): ;
?>
<tr>								
								<?php /* tag "td" from line 63 */; ?>
<td align="left"><?php echo phptal_escape($ctx->path($ctx->PRITracking, 'getName')); ?>
</td>
								<?php /* tag "td" from line 64 */; ?>
<td align="center">
									<?php 
/* tag "a" from line 66 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->PRITracking, 'getURLUpdatePRE01')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
><?php echo phptal_escape($ctx->path($ctx->PRITracking, 'getResource01')); ?>
</a>
								</td>								
								<?php /* tag "td" from line 68 */; ?>
<td align="center">
									<?php 
/* tag "a" from line 70 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->PRITracking, 'getURLUpdatePRE02')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
><?php echo phptal_escape($ctx->path($ctx->PRITracking, 'getResource02')); ?>
</a>
								</td>
								<?php /* tag "td" from line 72 */; ?>
<td align="center">
									<?php 
/* tag "a" from line 74 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->PRITracking, 'getURLUpdatePRE03')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
><?php echo phptal_escape($ctx->path($ctx->PRITracking, 'getResource03')); ?>
</a>
								</td>
								<?php /* tag "td" from line 76 */; ?>
<td align="center">
									<?php 
/* tag "a" from line 78 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->PRITracking, 'getURLUpdatePRE04')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
><?php echo phptal_escape($ctx->path($ctx->PRITracking, 'getResource04')); ?>
</a>
								</td>
								<?php /* tag "td" from line 80 */; ?>
<td align="center">
									<?php 
/* tag "a" from line 82 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->PRITracking, 'getURLUpdatePRE05')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
><?php echo phptal_escape($ctx->path($ctx->PRITracking, 'getResource05')); ?>
</a>
								</td>
								<?php /* tag "td" from line 84 */; ?>
<td align="center">
									<?php 
/* tag "a" from line 86 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->PRITracking, 'getURLUpdatePRE06')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
><?php echo phptal_escape($ctx->path($ctx->PRITracking, 'getResource06')); ?>
</a>
								</td>
								<?php /* tag "td" from line 88 */; ?>
<td align="center">
									<?php 
/* tag "a" from line 90 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->PRITracking, 'getURLUpdatePRE07')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
><?php echo phptal_escape($ctx->path($ctx->PRITracking, 'getResource07')); ?>
</a>
								</td>
								<?php /* tag "td" from line 92 */; ?>
<td align="center">
									<?php 
/* tag "a" from line 94 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->PRITracking, 'getURLUpdatePRE08')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
><?php echo phptal_escape($ctx->path($ctx->PRITracking, 'getResource08')); ?>
</a>
								</td>
								<?php /* tag "td" from line 96 */; ?>
<td align="center">
									<?php 
/* tag "a" from line 98 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->PRITracking, 'getURLUpdatePRE09')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
><?php echo phptal_escape($ctx->path($ctx->PRITracking, 'getResource09')); ?>
</a>
								</td>
								<?php /* tag "td" from line 100 */; ?>
<td align="center">
									<?php 
/* tag "a" from line 102 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->PRITracking, 'getURLUpdatePRE10')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
><?php echo phptal_escape($ctx->path($ctx->PRITracking, 'getResource10')); ?>
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
/* tag "span" from line 110 */ ;
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

Generated by PHPTAL from /home/a23app/public_html/banhreht/mvc/templates/ViewPriceResourceImportTrackings.html (edit that file instead) */; ?>