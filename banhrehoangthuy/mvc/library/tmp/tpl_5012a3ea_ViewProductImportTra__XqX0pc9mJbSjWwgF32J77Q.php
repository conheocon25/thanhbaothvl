<?php 
function tpl_5012a3ea_ViewProductImportTra__XqX0pc9mJbSjWwgF32J77Q(PHPTAL $tpl, PHPTAL_Context $ctx) {
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

		<?php /* tag "link" from line 5 */; ?>
<link rel="stylesheet" type="text/css" href="mvc/templates/theme/css/form.css"/>
		<?php /* tag "script" from line 6 */; ?>
<script type="text/javascript">
		/*<![CDATA[*/
		$(document).ready(
			function(){								
				var DateStart = $('#DateStart').val();
				var DateEnd = $('#DateEnd').val();
				$("#PrintLinked").attr("href", "?cmd=PrintProductImportTrackings&DateStart="+DateStart+"&DateEnd="+DateEnd);
				$('#DateStart').datepicker({
					dateFormat: 'yy-mm-dd',
					onSelect: function(dateText, inst) {						
						DateStart = dateText;
						if (DateStart>DateEnd){
							alert("Ngày bắt đầu phải lớn hơn bằng ngày kết thúc");
						}
						$("#PrintLinked").attr("href", "?cmd=PrintProductImportTrackings&DateStart="+DateStart+"&DateEnd="+DateEnd);
					}
				});
				$('#DateEnd').datepicker({					
					dateFormat: 'yy-mm-dd',
					onSelect: function(dateText, inst){
						DateEnd = dateText;
						if (DateStart>DateEnd){
							alert("Ngày bắt đầu phải lớn hơn bằng ngày kết thúc");
						}
						$("#PrintLinked").attr("href", "?cmd=PrintProductImportTrackings&DateStart="+DateStart+"&DateEnd="+DateEnd);
					}
				});
			});
		/*]]>*/
		</script>
	</head>	
<?php /* tag "body" from line 37 */; ?>
<body>	
<?php /* tag "div" from line 38 */; ?>
<div id="frame">
	<?php /* tag "div" from line 39 */; ?>
<div id="page">
		<?php 
/* tag "span" from line 40 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('macros.xhtml/HeaderModuleFactories', $_thistpl) ;
$ctx->popSlots() ;
?>

		<?php /* tag "div" from line 41 */; ?>
<div id="module2">
			<?php /* tag "div" from line 42 */; ?>
<div id="nav">
				<?php /* tag "div" from line 43 */; ?>
<div id="Title">
					<?php /* tag "div" from line 44 */; ?>
<div id="Text"><?php echo phptal_escape($ctx->Title); ?>
</div>
				</div>
			</div>
			<?php /* tag "div" from line 47 */; ?>
<div id="Column1of1">
				<?php /* tag "div" from line 48 */; ?>
<div id="Title">					
					<?php 
/* tag "a" from line 50 */ ;
if (null !== ($_tmp_1 = ($ctx->ParentsLinked))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a title="Quay lại" class="Button StateDefault ButtonIconSolo CornerAll"<?php echo $_tmp_1 ?>
>
						<?php /* tag "span" from line 51 */; ?>
<span class="ButtonIcon ButtonIconArrowreturn1-n"></span>
					</a>
				</div>
				<?php /* tag "div" from line 54 */; ?>
<div id="form1">
					<?php /* tag "form" from line 55 */; ?>
<form id="form" method="post" class="form" style="margin: 10px 0px 0px 10px;padding: 5px 5px 5px 5px;">
						<?php /* tag "table" from line 56 */; ?>
<table align="center">
							<?php /* tag "tr" from line 57 */; ?>
<tr>
								<?php /* tag "td" from line 58 */; ?>
<td align="right"><?php /* tag "LABEL" from line 58 */; ?>
<LABEL>Bắt đầu: </LABEL></td> 
								<?php /* tag "td" from line 59 */; ?>
<td align="left"><?php 
/* tag "INPUT" from line 59 */ ;
if (null !== ($_tmp_1 = ($ctx->DateStart))):  ;
$_tmp_1 = ' value="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<INPUT size="10" type="text" id="DateStart" name="DateStart"<?php echo $_tmp_1 ?>
/></td>
							</tr>
							<?php /* tag "tr" from line 61 */; ?>
<tr>
								<?php /* tag "td" from line 62 */; ?>
<td align="right"><?php /* tag "LABEL" from line 62 */; ?>
<LABEL>Kết thúc: </LABEL></td> 
								<?php /* tag "td" from line 63 */; ?>
<td align="left"><?php 
/* tag "INPUT" from line 63 */ ;
if (null !== ($_tmp_1 = ($ctx->DateEnd))):  ;
$_tmp_1 = ' value="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<INPUT size="10" type="text" id="DateEnd" name="DateEnd"<?php echo $_tmp_1 ?>
/></td>
							</tr>
						</table>
						<?php /* tag "div" from line 66 */; ?>
<div id="button1">	
						<?php /* tag "table" from line 67 */; ?>
<table align="center">
							<?php /* tag "tr" from line 68 */; ?>
<tr>
								<?php /* tag "td" from line 69 */; ?>
<td>
									<?php 
/* tag "a" from line 70 */ ;
if (null !== ($_tmp_1 = ('#'))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a id="PrintLinked" target="blank" style="float:center;" onclick="document.getElementById('form').submit()" class="Button StateDefault ButtonIconLeft CornerAll"<?php echo $_tmp_1 ?>
>
										<?php /* tag "span" from line 71 */; ?>
<span class="ButtonIcon ButtonIconPrint"></span>In bảng
									</a>
								</td>
							</tr>
						</table>
						</div>
					</form>
				</div>
			</div>
		</div>
		<?php 
/* tag "span" from line 81 */ ;
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

Generated by PHPTAL from /home/a23app/public_html/bra/mvc/templates/ViewProductImportTrackings.html (edit that file instead) */; ?>