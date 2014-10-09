<?php 
function tpl_5012a3d7_UpdateEmployee__OUfXs2OnMrDz8xBUldSZGA(PHPTAL $tpl, PHPTAL_Context $ctx) {
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
		<?php /* tag "meta" from line 5 */; ?>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/> 			
		<?php /* tag "link" from line 6 */; ?>
<link rel="icon" type="image/ico" href="mvc/templates/theme/image/favicon.ico"/>
		<?php /* tag "script" from line 7 */; ?>
<script type="text/javascript" language="javascript" src="mvc/templates/script/jquery.js"></script>	
		<?php /* tag "script" from line 8 */; ?>
<script type="text/javascript" language="javascript" src="mvc/templates/script/main.js"></script>
		<?php /* tag "script" from line 9 */; ?>
<script type="text/javascript" language="javascript" src="mvc/templates/script/jquery.textchange.js"></script>		
		<?php /* tag "script" from line 10 */; ?>
<script type="text/javascript" language="javascript" src="mvc/templates/script/jquery.ui.datepicker-vi.js"></script>
		<?php /* tag "script" from line 11 */; ?>
<script type="text/javascript" language="javascript" src="mvc/templates/script/jquery.ui.datepicker.min.js"></script>
		<?php /* tag "script" from line 12 */; ?>
<script type="text/javascript" language="javascript" src="mvc/templates/script/jquery.ui.core.js"></script>
		
		<?php /* tag "link" from line 14 */; ?>
<link rel="stylesheet" type="text/css" href="mvc/templates/theme/css/form.css"/>
		<?php /* tag "link" from line 15 */; ?>
<link rel="stylesheet" type="text/css" href="mvc/templates/theme/css/jquery.ui.theme.css"/>
		<?php /* tag "link" from line 16 */; ?>
<link rel="stylesheet" type="text/css" href="mvc/templates/theme/css/jquery.ui.datepicker.css"/>				
		<?php /* tag "link" from line 17 */; ?>
<link rel="stylesheet" type="text/css" href="mvc/templates/theme/css/main_2.css"/>				
		<?php /* tag "link" from line 18 */; ?>
<link rel="stylesheet" type="text/css" href="mvc/templates/theme/css/ButtonTheme.css"/>
		<?php /* tag "script" from line 19 */; ?>
<script type="text/javascript" language="javascript" src="mvc/templates/script/Button.js"></script>
		<?php /* tag "script" from line 20 */; ?>
<script type="text/javascript">
			$(document).ready(
				function(){										
					var Sex = $('#Sex_').val();
					$('#Sex_').hide();
					$("select#Sex option[value="+Sex+"]").attr('selected', 'selected');
			});			
		</script>
	</head>
<?php /* tag "body" from line 29 */; ?>
<body>
<?php /* tag "div" from line 30 */; ?>
<div id="frame">
	<?php /* tag "div" from line 31 */; ?>
<div id="page">
		<?php 
/* tag "span" from line 32 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('macros.xhtml/HeaderModuleFactories', $_thistpl) ;
$ctx->popSlots() ;
?>

		<?php /* tag "div" from line 33 */; ?>
<div id="module2">
			<?php /* tag "div" from line 34 */; ?>
<div id="nav">
				<?php /* tag "div" from line 35 */; ?>
<div id="Title">
					<?php /* tag "div" from line 36 */; ?>
<div id="Text"><?php echo phptal_escape($ctx->Title); ?>
</div>
				</div>				
			</div>
			<?php /* tag "div" from line 39 */; ?>
<div id="Column1of1">
				<?php /* tag "div" from line 40 */; ?>
<div id="Title">
					<?php 
/* tag "a" from line 42 */ ;
if (null !== ($_tmp_1 = ($ctx->ParentsLinked))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a title="Quay lại" id="TitleButton" class="Button StateDefault ButtonIconSolo CornerAll"<?php echo $_tmp_1 ?>
>
						<?php /* tag "span" from line 43 */; ?>
<span class="ButtonIcon ButtonIconArrowreturn1-n"></span>X
					</a>											
				</div>
				<?php /* tag "div" from line 46 */; ?>
<div id="SubColumn2of2">
					<?php /* tag "div" from line 47 */; ?>
<div id="form1">
					<?php /* tag "form" from line 48 */; ?>
<form id="form" method="post" class="form">
						<?php /* tag "table" from line 49 */; ?>
<table align="center">							
							<?php /* tag "tr" from line 50 */; ?>
<tr>
								<?php /* tag "td" from line 51 */; ?>
<td align="right"><?php /* tag "LABEL" from line 51 */; ?>
<LABEL>Tên: </LABEL></td> 
								<?php /* tag "td" from line 52 */; ?>
<td align="left"><?php 
/* tag "INPUT" from line 52 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Employee, 'getName')))):  ;
$_tmp_1 = ' value="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<INPUT size="20" type="text" name="Name"<?php echo $_tmp_1 ?>
/></td>
							</tr>
							<?php /* tag "tr" from line 54 */; ?>
<tr>
								<?php /* tag "td" from line 55 */; ?>
<td align="right"><?php /* tag "LABEL" from line 55 */; ?>
<LABEL>Giới tính: </LABEL></td> 
								<?php /* tag "td" from line 56 */; ?>
<td align="left">
									<?php 
/* tag "INPUT" from line 57 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Employee, 'getSex')))):  ;
$_tmp_1 = ' value="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<INPUT size="20" type="text" id="Sex_" name="Sex_"<?php echo $_tmp_1 ?>
/>
									<?php /* tag "select" from line 58 */; ?>
<select id="Sex" name="Sex">
										<?php /* tag "option" from line 59 */; ?>
<option value="0">Nữ</option>
										<?php /* tag "option" from line 60 */; ?>
<option value="1">Nam</option>										
									</select>
								</td>
							</tr>
							<?php /* tag "tr" from line 64 */; ?>
<tr>
								<?php /* tag "td" from line 65 */; ?>
<td align="right"><?php /* tag "LABEL" from line 65 */; ?>
<LABEL>Phone: </LABEL></td> 
								<?php /* tag "td" from line 66 */; ?>
<td align="left"><?php 
/* tag "INPUT" from line 66 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Employee, 'getPhone')))):  ;
$_tmp_1 = ' value="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<INPUT size="20" type="text" name="Phone"<?php echo $_tmp_1 ?>
/></td>
							</tr>							
							<?php /* tag "tr" from line 68 */; ?>
<tr>
								<?php /* tag "td" from line 69 */; ?>
<td align="right"><?php /* tag "LABEL" from line 69 */; ?>
<LABEL>Địa chỉ: </LABEL></td>
								<?php /* tag "td" from line 70 */; ?>
<td align="left"><?php 
/* tag "INPUT" from line 70 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Employee, 'getAddress')))):  ;
$_tmp_1 = ' value="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<INPUT size="20" type="text" name="Address"<?php echo $_tmp_1 ?>
/></td>
							</tr>
						</table>
						<?php /* tag "div" from line 73 */; ?>
<div id="button1">						
						<?php /* tag "table" from line 74 */; ?>
<table align="center">
							<?php /* tag "tr" from line 75 */; ?>
<tr>
								<?php /* tag "td" from line 76 */; ?>
<td style="padding-top:10px;">							
									<?php /* tag "a" from line 77 */; ?>
<a style="float:center;" href="#" onclick="document.getElementById('form').submit()" class="Button StateDefault ButtonIconLeft CornerAll">
										<?php /* tag "span" from line 78 */; ?>
<span class="ButtonIcon ButtonIconPlus"></span>Cập nhật
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

Generated by PHPTAL from /home/a23app/public_html/bra/mvc/templates/UpdateEmployee.html (edit that file instead) */; ?>