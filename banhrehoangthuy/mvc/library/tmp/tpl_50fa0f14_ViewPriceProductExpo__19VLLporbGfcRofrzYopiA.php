<?php 
function tpl_50fa0f14_ViewPriceProductExpo__19VLLporbGfcRofrzYopiA(PHPTAL $tpl, PHPTAL_Context $ctx) {
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
			"sScrollX": "100%",
			"sScrollXInner": "230%",
			"sScrollY": "100%",
			"bScrollCollapse": true,
			"bStateSave": false,
			"bFilter": false,
			"bInfo": false,
			"bSort": false,
			"bPaginate": false			
		});
		new FixedColumns( oTable, {
			"iLeftColumns": 1
		});
	});
	/*]]>*/	
	</script>
	</head>	
<?php /* tag "body" from line 32 */; ?>
<body>	
<?php /* tag "div" from line 33 */; ?>
<div id="frame">
	<?php /* tag "div" from line 34 */; ?>
<div id="page">
		<?php 
/* tag "span" from line 35 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('macros.xhtml/HeaderModuleSettings', $_thistpl) ;
$ctx->popSlots() ;
?>

		<?php /* tag "div" from line 36 */; ?>
<div id="module2">
			<?php /* tag "div" from line 37 */; ?>
<div id="nav">
				<?php /* tag "div" from line 38 */; ?>
<div id="Title">
					<?php /* tag "div" from line 39 */; ?>
<div id="Text"><?php echo phptal_escape($ctx->Title); ?>
</div>
				</div>				
			</div>
			<?php /* tag "div" from line 42 */; ?>
<div id="Column1of1">
				<?php /* tag "div" from line 43 */; ?>
<div id="Title">					
					<?php 
/* tag "a" from line 45 */ ;
if (null !== ($_tmp_1 = ($ctx->ParentsLinked))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a title="Quay lại" id="TitleButton" class="Button StateDefault ButtonIconSolo CornerAll"<?php echo $_tmp_1 ?>
>
							<?php /* tag "span" from line 46 */; ?>
<span class="ButtonIcon ButtonIconArrowreturn1-n"></span>quay lại
					</a>					
				</div>
				<?php /* tag "div" from line 49 */; ?>
<div id="Table">
					<?php /* tag "table" from line 50 */; ?>
<table cellpadding="0" cellspacing="0" border="0" class="display" id="DataTable">
						<?php /* tag "thead" from line 51 */; ?>
<thead>					
							<?php /* tag "tr" from line 52 */; ?>
<tr>								
								<?php /* tag "th" from line 53 */; ?>
<th align="left">TÊN</th>
								<?php /* tag "th" from line 54 */; ?>
<th align="center">nhỏ<?php /* tag "BR" from line 54 */; ?>
<BR/>x6</th>
								<?php /* tag "th" from line 55 */; ?>
<th align="center">nhỏ<?php /* tag "BR" from line 55 */; ?>
<BR/>x7</th>
								<?php /* tag "th" from line 56 */; ?>
<th align="center">nhỏ<?php /* tag "BR" from line 56 */; ?>
<BR/>x10</th>
								<?php /* tag "th" from line 57 */; ?>
<th align="center">nhỏ<?php /* tag "BR" from line 57 */; ?>
<BR/>x18</th>
								<?php /* tag "th" from line 58 */; ?>
<th align="center">3g<?php /* tag "BR" from line 58 */; ?>
<BR/>dầu</th>
								<?php /* tag "th" from line 59 */; ?>
<th align="center">3g<?php /* tag "BR" from line 59 */; ?>
<BR/>mỡ</th>
								<?php /* tag "th" from line 60 */; ?>
<th align="center">3g<?php /* tag "BR" from line 60 */; ?>
<BR/>ds</th>
								<?php /* tag "th" from line 61 */; ?>
<th align="center">5g<?php /* tag "BR" from line 61 */; ?>
<BR/>dầu</th>
								<?php /* tag "th" from line 62 */; ?>
<th align="center">5g<?php /* tag "BR" from line 62 */; ?>
<BR/>mỡ</th>
								<?php /* tag "th" from line 63 */; ?>
<th align="center">5g<?php /* tag "BR" from line 63 */; ?>
<BR/>ds</th>
								<?php /* tag "th" from line 64 */; ?>
<th align="center">5g<?php /* tag "BR" from line 64 */; ?>
<BR/>cd</th>
								<?php /* tag "th" from line 65 */; ?>
<th align="center">5.5g<?php /* tag "BR" from line 65 */; ?>
<BR/>dầu</th>
								<?php /* tag "th" from line 66 */; ?>
<th align="center">5.5g<?php /* tag "BR" from line 66 */; ?>
<BR/>mỡ</th>
								<?php /* tag "th" from line 67 */; ?>
<th align="center">6g<?php /* tag "BR" from line 67 */; ?>
<BR/>dầu</th>
								<?php /* tag "th" from line 68 */; ?>
<th align="center">6g<?php /* tag "BR" from line 68 */; ?>
<BR/>mỡ</th>
								<?php /* tag "th" from line 69 */; ?>
<th align="center">6g<?php /* tag "BR" from line 69 */; ?>
<BR/>ds</th>
								<?php /* tag "th" from line 70 */; ?>
<th align="center">6.5g<?php /* tag "BR" from line 70 */; ?>
<BR/>dầu</th>
								<?php /* tag "th" from line 71 */; ?>
<th align="center">6.5g<?php /* tag "BR" from line 71 */; ?>
<BR/>mỡ</th>
								<?php /* tag "th" from line 72 */; ?>
<th align="center">6.5g<?php /* tag "BR" from line 72 */; ?>
<BR/>ds</th>
								<?php /* tag "th" from line 73 */; ?>
<th align="center">7g<?php /* tag "BR" from line 73 */; ?>
<BR/>dầu</th>
								<?php /* tag "th" from line 74 */; ?>
<th align="center">7g<?php /* tag "BR" from line 74 */; ?>
<BR/>mỡ</th>
								<?php /* tag "th" from line 75 */; ?>
<th align="center">7g<?php /* tag "BR" from line 75 */; ?>
<BR/>ds</th>
								<?php /* tag "th" from line 76 */; ?>
<th align="center">7g<?php /* tag "BR" from line 76 */; ?>
<BR/>dx45</th>
								<?php /* tag "th" from line 77 */; ?>
<th align="center">lớn<?php /* tag "BR" from line 77 */; ?>
<BR/>x8</th>
								<?php /* tag "th" from line 78 */; ?>
<th align="center">lớn<?php /* tag "BR" from line 78 */; ?>
<BR/>x10</th>
								<?php /* tag "th" from line 79 */; ?>
<th align="center">8g<?php /* tag "BR" from line 79 */; ?>
<BR/>dầu</th>
								<?php /* tag "th" from line 80 */; ?>
<th align="center">8g<?php /* tag "BR" from line 80 */; ?>
<BR/>mỡ</th>
								<?php /* tag "th" from line 81 */; ?>
<th align="center">8g<?php /* tag "BR" from line 81 */; ?>
<BR/>ds</th>
								<?php /* tag "th" from line 82 */; ?>
<th align="center">16cal<?php /* tag "BR" from line 82 */; ?>
<BR/>150</th>
								<?php /* tag "th" from line 83 */; ?>
<th align="center">16cal<?php /* tag "BR" from line 83 */; ?>
<BR/>250</th>
								<?php /* tag "th" from line 84 */; ?>
<th align="center">16cal<?php /* tag "BR" from line 84 */; ?>
<BR/>500</th>							
								<?php /* tag "th" from line 85 */; ?>
<th align="center">18cal<?php /* tag "BR" from line 85 */; ?>
<BR/>500</th>
								<?php /* tag "th" from line 86 */; ?>
<th align="center">20calT<?php /* tag "BR" from line 86 */; ?>
<BR/>500</th>
								<?php /* tag "th" from line 87 */; ?>
<th align="center">20cal<?php /* tag "BR" from line 87 */; ?>
<BR/>500</th>
								<?php /* tag "th" from line 88 */; ?>
<th align="center">20cal<?php /* tag "BR" from line 88 */; ?>
<BR/>240</th>
							</tr>
						</thead>
						<?php /* tag "tbody" from line 91 */; ?>
<tbody>
							<?php 
/* tag "tr" from line 92 */ ;
$_tmp_1 = $ctx->repeat ;
$_tmp_1->PPETracking = new PHPTAL_RepeatController($ctx->PPETrackings)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->PPETracking as $ctx->PPETracking): ;
?>
<tr>							
								<?php /* tag "td" from line 93 */; ?>
<td align="left"><?php echo phptal_escape($ctx->path($ctx->PPETracking, 'getName')); ?>
</td>
								<?php /* tag "td" from line 94 */; ?>
<td align="center">
									<?php 
/* tag "a" from line 96 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->PPETracking, 'getURLUpdatePPE01')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
><?php echo phptal_escape($ctx->path($ctx->PPETracking, 'getProduct01')); ?>
</a>
								</td>								
								<?php /* tag "td" from line 98 */; ?>
<td align="center">
									<?php 
/* tag "a" from line 100 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->PPETracking, 'getURLUpdatePPE02')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
><?php echo phptal_escape($ctx->path($ctx->PPETracking, 'getProduct02')); ?>
</a>
								</td>								
								<?php /* tag "td" from line 102 */; ?>
<td align="center">
									<?php 
/* tag "a" from line 104 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->PPETracking, 'getURLUpdatePPE03')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
><?php echo phptal_escape($ctx->path($ctx->PPETracking, 'getProduct03')); ?>
</a>
								</td>								
								<?php /* tag "td" from line 106 */; ?>
<td align="center">
									<?php 
/* tag "a" from line 108 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->PPETracking, 'getURLUpdatePPE04')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
><?php echo phptal_escape($ctx->path($ctx->PPETracking, 'getProduct04')); ?>
</a>
								</td>
								<?php /* tag "td" from line 110 */; ?>
<td align="center">
									<?php 
/* tag "a" from line 112 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->PPETracking, 'getURLUpdatePPE05')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
><?php echo phptal_escape($ctx->path($ctx->PPETracking, 'getProduct05')); ?>
</a>
								</td>								
								<?php /* tag "td" from line 114 */; ?>
<td align="center">
									<?php 
/* tag "a" from line 116 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->PPETracking, 'getURLUpdatePPE06')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
><?php echo phptal_escape($ctx->path($ctx->PPETracking, 'getProduct06')); ?>
</a>
								</td>								
								<?php /* tag "td" from line 118 */; ?>
<td align="center">
									<?php 
/* tag "a" from line 120 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->PPETracking, 'getURLUpdatePPE07')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
><?php echo phptal_escape($ctx->path($ctx->PPETracking, 'getProduct07')); ?>
</a>
								</td>								
								<?php /* tag "td" from line 122 */; ?>
<td align="center">
									<?php 
/* tag "a" from line 124 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->PPETracking, 'getURLUpdatePPE08')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
><?php echo phptal_escape($ctx->path($ctx->PPETracking, 'getProduct08')); ?>
</a>
								</td>
								<?php /* tag "td" from line 126 */; ?>
<td align="center">
									<?php 
/* tag "a" from line 128 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->PPETracking, 'getURLUpdatePPE09')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
><?php echo phptal_escape($ctx->path($ctx->PPETracking, 'getProduct09')); ?>
</a>
								</td>
								<?php /* tag "td" from line 130 */; ?>
<td align="center">
									<?php 
/* tag "a" from line 132 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->PPETracking, 'getURLUpdatePPE10')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
><?php echo phptal_escape($ctx->path($ctx->PPETracking, 'getProduct10')); ?>
</a>
								</td>
								<?php /* tag "td" from line 134 */; ?>
<td align="center">
									<?php 
/* tag "a" from line 136 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->PPETracking, 'getURLUpdatePPE11')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
><?php echo phptal_escape($ctx->path($ctx->PPETracking, 'getProduct11')); ?>
</a>
								</td>
								
								<?php /* tag "td" from line 139 */; ?>
<td align="center">
									<?php 
/* tag "a" from line 141 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->PPETracking, 'getURLUpdatePPE27')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
><?php echo phptal_escape($ctx->path($ctx->PPETracking, 'getProduct27')); ?>
</a>
								</td>
								<?php /* tag "td" from line 143 */; ?>
<td align="center">
									<?php 
/* tag "a" from line 145 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->PPETracking, 'getURLUpdatePPE28')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
><?php echo phptal_escape($ctx->path($ctx->PPETracking, 'getProduct28')); ?>
</a>
								</td>
								
								<?php /* tag "td" from line 148 */; ?>
<td align="center">
									<?php 
/* tag "a" from line 150 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->PPETracking, 'getURLUpdatePPE12')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
><?php echo phptal_escape($ctx->path($ctx->PPETracking, 'getProduct12')); ?>
</a>
								</td>
								<?php /* tag "td" from line 152 */; ?>
<td align="center">
									<?php 
/* tag "a" from line 154 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->PPETracking, 'getURLUpdatePPE13')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
><?php echo phptal_escape($ctx->path($ctx->PPETracking, 'getProduct13')); ?>
</a>
								</td>
								<?php /* tag "td" from line 156 */; ?>
<td align="center">
									<?php 
/* tag "a" from line 158 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->PPETracking, 'getURLUpdatePPE14')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
><?php echo phptal_escape($ctx->path($ctx->PPETracking, 'getProduct14')); ?>
</a>
								</td>
								<?php /* tag "td" from line 160 */; ?>
<td align="center">
									<?php 
/* tag "a" from line 162 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->PPETracking, 'getURLUpdatePPE15')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
><?php echo phptal_escape($ctx->path($ctx->PPETracking, 'getProduct15')); ?>
</a>
								</td>
								<?php /* tag "td" from line 164 */; ?>
<td align="center">
									<?php 
/* tag "a" from line 166 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->PPETracking, 'getURLUpdatePPE16')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
><?php echo phptal_escape($ctx->path($ctx->PPETracking, 'getProduct16')); ?>
</a>
								</td>
								<?php /* tag "td" from line 168 */; ?>
<td align="center">
									<?php 
/* tag "a" from line 170 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->PPETracking, 'getURLUpdatePPE17')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
><?php echo phptal_escape($ctx->path($ctx->PPETracking, 'getProduct17')); ?>
</a>
								</td>
								<?php /* tag "td" from line 172 */; ?>
<td align="center">
									<?php 
/* tag "a" from line 174 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->PPETracking, 'getURLUpdatePPE18')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
><?php echo phptal_escape($ctx->path($ctx->PPETracking, 'getProduct18')); ?>
</a>
								</td>
								<?php /* tag "td" from line 176 */; ?>
<td align="center">
									<?php 
/* tag "a" from line 178 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->PPETracking, 'getURLUpdatePPE19')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
><?php echo phptal_escape($ctx->path($ctx->PPETracking, 'getProduct19')); ?>
</a>
								</td>
								<?php /* tag "td" from line 180 */; ?>
<td align="center">
									<?php 
/* tag "a" from line 182 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->PPETracking, 'getURLUpdatePPE20')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
><?php echo phptal_escape($ctx->path($ctx->PPETracking, 'getProduct20')); ?>
</a>
								</td>
								<?php /* tag "td" from line 184 */; ?>
<td align="center">
									<?php 
/* tag "a" from line 186 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->PPETracking, 'getURLUpdatePPE21')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
><?php echo phptal_escape($ctx->path($ctx->PPETracking, 'getProduct21')); ?>
</a>
								</td>
								<?php /* tag "td" from line 188 */; ?>
<td align="center">
									<?php 
/* tag "a" from line 190 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->PPETracking, 'getURLUpdatePPE22')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
><?php echo phptal_escape($ctx->path($ctx->PPETracking, 'getProduct22')); ?>
</a>
								</td>
								<?php /* tag "td" from line 192 */; ?>
<td align="center">
									<?php 
/* tag "a" from line 194 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->PPETracking, 'getURLUpdatePPE23')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
><?php echo phptal_escape($ctx->path($ctx->PPETracking, 'getProduct23')); ?>
</a>
								</td>
								<?php /* tag "td" from line 196 */; ?>
<td align="center">
									<?php 
/* tag "a" from line 198 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->PPETracking, 'getURLUpdatePPE24')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
><?php echo phptal_escape($ctx->path($ctx->PPETracking, 'getProduct24')); ?>
</a>
								</td>
								<?php /* tag "td" from line 200 */; ?>
<td align="center">
									<?php 
/* tag "a" from line 202 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->PPETracking, 'getURLUpdatePPE25')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
><?php echo phptal_escape($ctx->path($ctx->PPETracking, 'getProduct25')); ?>
</a>
								</td>
								<?php /* tag "td" from line 204 */; ?>
<td align="center">
									<?php 
/* tag "a" from line 206 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->PPETracking, 'getURLUpdatePPE26')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
><?php echo phptal_escape($ctx->path($ctx->PPETracking, 'getProduct26')); ?>
</a>
								</td>
								<?php /* tag "td" from line 208 */; ?>
<td align="center">
									<?php 
/* tag "a" from line 210 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->PPETracking, 'getURLUpdatePPE29')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
><?php echo phptal_escape($ctx->path($ctx->PPETracking, 'getProduct29')); ?>
</a>
								</td>
								<?php /* tag "td" from line 212 */; ?>
<td align="center">
									<?php 
/* tag "a" from line 214 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->PPETracking, 'getURLUpdatePPE31')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
><?php echo phptal_escape($ctx->path($ctx->PPETracking, 'getProduct31')); ?>
</a>
								</td>
								<?php /* tag "td" from line 216 */; ?>
<td align="center">
									<?php 
/* tag "a" from line 218 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->PPETracking, 'getURLUpdatePPE30')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
><?php echo phptal_escape($ctx->path($ctx->PPETracking, 'getProduct30')); ?>
</a>
								</td>
								<?php /* tag "td" from line 220 */; ?>
<td align="center">
									<?php 
/* tag "a" from line 222 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->PPETracking, 'getURLUpdatePPE32')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
><?php echo phptal_escape($ctx->path($ctx->PPETracking, 'getProduct32')); ?>
</a>
								</td>
								<?php /* tag "td" from line 224 */; ?>
<td align="center">
									<?php 
/* tag "a" from line 226 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->PPETracking, 'getURLUpdatePPE33')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
><?php echo phptal_escape($ctx->path($ctx->PPETracking, 'getProduct33')); ?>
</a>
								</td>
								<?php /* tag "td" from line 228 */; ?>
<td align="center">
									<?php 
/* tag "a" from line 230 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->PPETracking, 'getURLUpdatePPE34')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
><?php echo phptal_escape($ctx->path($ctx->PPETracking, 'getProduct34')); ?>
</a>
								</td>
								<?php /* tag "td" from line 232 */; ?>
<td align="center">
									<?php 
/* tag "a" from line 234 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->PPETracking, 'getURLUpdatePPE35')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
><?php echo phptal_escape($ctx->path($ctx->PPETracking, 'getProduct35')); ?>
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
/* tag "span" from line 242 */ ;
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

Generated by PHPTAL from /home/a23app/public_html/banhreht/mvc/templates/ViewPriceProductExportTrackings.html (edit that file instead) */; ?>