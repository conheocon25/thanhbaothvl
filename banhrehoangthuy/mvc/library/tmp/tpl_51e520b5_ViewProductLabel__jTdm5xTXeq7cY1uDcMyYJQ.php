<?php 
function tpl_51e520b5_ViewProductLabel__jTdm5xTXeq7cY1uDcMyYJQ(PHPTAL $tpl, PHPTAL_Context $ctx) {
$_thistpl = $tpl ;
$_translator = $tpl->getTranslator() ;
/* tag "documentElement" from line 1 */ ;
$ctx->setDocType('<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">',false) ;
?>

<?php /* tag "html" from line 3 */; ?>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
	<?php /* tag "head" from line 4 */; ?>
<head>
		<?php 
/* tag "span" from line 5 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('macros.xhtml/IncludeBase', $_thistpl) ;
$ctx->popSlots() ;
?>

		<?php /* tag "link" from line 6 */; ?>
<link rel="stylesheet" type="text/css" href="mvc/templates/theme/css/form.css"/>
		<?php /* tag "script" from line 7 */; ?>
<script type="text/javascript">
		/*<![CDATA[*/
		$(document).ready(
			function(){								
				var FullName = $('#FullName').val();
				var Quantity = $('#Quantity').val();
				$("#PrintLinked").attr("href", "?cmd=PrintProductLabel&FullName="+FullName+"&Quantity="+Quantity);				
			});
		function onChange(){
			var FullName = $('#FullName').val();
			var Quantity = $('#Quantity').val();				
			$("#PrintLinked").attr("href", "?cmd=PrintProductLabel&FullName="+FullName+"&Quantity="+Quantity);
		}	
		/*]]>*/
		</script>
	</head>
<?php /* tag "body" from line 23 */; ?>
<body>
<?php /* tag "div" from line 24 */; ?>
<div id="frame">
	<?php /* tag "div" from line 25 */; ?>
<div id="page">
		<?php 
/* tag "span" from line 26 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('macros.xhtml/HeaderModuleSettings', $_thistpl) ;
$ctx->popSlots() ;
?>

		<?php /* tag "div" from line 27 */; ?>
<div id="module2">
			<?php /* tag "div" from line 28 */; ?>
<div id="nav">
				<?php /* tag "div" from line 29 */; ?>
<div id="Title">
					<?php /* tag "div" from line 30 */; ?>
<div id="Text"><?php echo phptal_escape($ctx->Title); ?>
</div>
				</div>				
			</div>
			<?php /* tag "div" from line 33 */; ?>
<div id="Column1of1">
				<?php /* tag "div" from line 34 */; ?>
<div id="Title">
					<?php 
/* tag "a" from line 36 */ ;
if (null !== ($_tmp_1 = ($ctx->ParentsLinked))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a title="Quay lại" id="TitleButton" class="Button StateDefault ButtonIconSolo CornerAll"<?php echo $_tmp_1 ?>
>
						<?php /* tag "span" from line 37 */; ?>
<span class="ButtonIcon ButtonIconArrowreturn1-n"></span>X
					</a>											
				</div>
				<?php /* tag "div" from line 40 */; ?>
<div id="SubColumn2of2">					
					<?php /* tag "div" from line 41 */; ?>
<div id="form1">
					<?php /* tag "form" from line 42 */; ?>
<form id="form" method="post" class="form">
						<?php /* tag "table" from line 43 */; ?>
<table align="center">							
							<?php /* tag "tr" from line 44 */; ?>
<tr>
								<?php /* tag "td" from line 45 */; ?>
<td align="right"><?php /* tag "LABEL" from line 45 */; ?>
<LABEL>Tên: </LABEL></td> 
								<?php /* tag "td" from line 46 */; ?>
<td align="left"><?php 
/* tag "INPUT" from line 46 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Product, 'getFullName')))):  ;
$_tmp_1 = ' value="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<INPUT size="20" type="text" id="FullName" name="FullName" onkeyup="onChange()"<?php echo $_tmp_1 ?>
/></td>
							</tr>
							<?php /* tag "tr" from line 48 */; ?>
<tr>
								<?php /* tag "td" from line 49 */; ?>
<td align="right"><?php /* tag "LABEL" from line 49 */; ?>
<LABEL>Số gói: </LABEL></td> 
								<?php /* tag "td" from line 50 */; ?>
<td align="left"><?php 
/* tag "INPUT" from line 50 */ ;
if (null !== ($_tmp_1 = ('100'))):  ;
$_tmp_1 = ' value="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<INPUT size="20" type="text" id="Quantity" name="Quantity" onkeyup="onChange()"<?php echo $_tmp_1 ?>
/></td>
							</tr>							
						</table>
						<?php /* tag "div" from line 53 */; ?>
<div id="button1">						
						<?php /* tag "table" from line 54 */; ?>
<table align="center">
							<?php /* tag "tr" from line 55 */; ?>
<tr>
								<?php /* tag "td" from line 56 */; ?>
<td style="padding-top:10px;">							
									<?php /* tag "a" from line 57 */; ?>
<a id="PrintLinked" target="blank" style="float:center;" href="#" onclick="document.getElementById('form').submit()" class="Button StateDefault ButtonIconLeft CornerAll">
										<?php /* tag "span" from line 58 */; ?>
<span class="ButtonIcon ButtonIconPrint"></span>In
									</a>
								</td>
							</tr>
						</table>
						</div>
					</form>
					</div>
				</div>
			</div>
		</div>
		<?php 
/* tag "span" from line 69 */ ;
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

Generated by PHPTAL from /home/banhreht/public_html/mvc/templates/ViewProductLabel.html (edit that file instead) */; ?>