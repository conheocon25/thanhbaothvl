<?php 
function tpl_51e520ab_UpdateFactory__lAe2zkxAzHmijSYo0XROEw(PHPTAL $tpl, PHPTAL_Context $ctx) {
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
		
		<?php /* tag "script" from line 14 */; ?>
<script type="text/javascript" language="javascript" src="mvc/templates/script/validate.js"></script>
		<?php /* tag "script" from line 15 */; ?>
<script type="text/javascript" language="javascript" src="mvc/templates/script/empty.validate.js"></script>
		<?php /* tag "script" from line 16 */; ?>
<script type="text/javascript" language="javascript" src="mvc/templates/script/char.validate.js"></script>
		<?php /* tag "script" from line 17 */; ?>
<script type="text/javascript" language="javascript" src="mvc/templates/script/number.validate.js"></script>
		<?php /* tag "script" from line 18 */; ?>
<script type="text/javascript" language="javascript" src="mvc/templates/script/phone.validate.js"></script>
		
		<?php /* tag "link" from line 20 */; ?>
<link rel="stylesheet" type="text/css" href="mvc/templates/theme/css/jquery.ui.theme.css"/>
		<?php /* tag "link" from line 21 */; ?>
<link rel="stylesheet" type="text/css" href="mvc/templates/theme/css/jquery.ui.datepicker.css"/>				
		<?php /* tag "link" from line 22 */; ?>
<link rel="stylesheet" type="text/css" href="mvc/templates/theme/css/main_2.css"/>		
		<?php /* tag "link" from line 23 */; ?>
<link rel="stylesheet" type="text/css" href="mvc/templates/theme/css/form.css"/>	
		<?php /* tag "link" from line 24 */; ?>
<link rel="stylesheet" type="text/css" href="mvc/templates/theme/css/ButtonTheme.css"/>
		<?php /* tag "script" from line 25 */; ?>
<script type="text/javascript" language="javascript" src="mvc/templates/script/Button.js"></script>
	</head>
	
<?php /* tag "body" from line 28 */; ?>
<body>
<?php /* tag "div" from line 29 */; ?>
<div id="frame">
	<?php /* tag "div" from line 30 */; ?>
<div id="page">
		<?php 
/* tag "span" from line 31 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('macros.xhtml/HeaderModuleFactories', $_thistpl) ;
$ctx->popSlots() ;
?>

		<?php /* tag "div" from line 32 */; ?>
<div id="module2">
			<?php /* tag "div" from line 33 */; ?>
<div id="nav">
				<?php /* tag "div" from line 34 */; ?>
<div id="Title">
					<?php /* tag "div" from line 35 */; ?>
<div id="Text"><?php echo phptal_escape($ctx->Title); ?>
</div>
				</div>				
			</div>
			<?php /* tag "div" from line 38 */; ?>
<div id="Column1of1">
				<?php /* tag "div" from line 39 */; ?>
<div id="Title">
					<?php 
/* tag "a" from line 41 */ ;
if (null !== ($_tmp_1 = ($ctx->ParentsLinked))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a title="Quay lại" id="TitleButton" class="Button StateDefault ButtonIconSolo CornerAll"<?php echo $_tmp_1 ?>
>
						<?php /* tag "span" from line 42 */; ?>
<span class="ButtonIcon ButtonIconArrowreturn1-n"></span>X
					</a>											
				</div>
				<?php /* tag "div" from line 45 */; ?>
<div id="SubColumn2of2">
					<?php /* tag "div" from line 46 */; ?>
<div id="form1">				
					<?php /* tag "form" from line 47 */; ?>
<form id="form" method="post" class="form">
						<?php /* tag "table" from line 48 */; ?>
<table align="center">							
							<?php /* tag "tr" from line 49 */; ?>
<tr>
								<?php /* tag "td" from line 50 */; ?>
<td align="right"><?php /* tag "LABEL" from line 50 */; ?>
<LABEL>Tên: </LABEL></td> 
								<?php /* tag "td" from line 51 */; ?>
<td align="left"><?php 
/* tag "INPUT" from line 51 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Factory, 'getName')))):  ;
$_tmp_1 = ' value="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<INPUT size="20" type="text" id="text" class="required text" name="Name"<?php echo $_tmp_1 ?>
/></td>
							</tr>
							
							<?php /* tag "tr" from line 54 */; ?>
<tr>
								<?php /* tag "td" from line 55 */; ?>
<td align="right"><?php /* tag "LABEL" from line 55 */; ?>
<LABEL>Phone: </LABEL></td> 
								<?php /* tag "td" from line 56 */; ?>
<td align="left"><?php 
/* tag "INPUT" from line 56 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Factory, 'getPhone')))):  ;
$_tmp_1 = ' value="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<INPUT size="20" type="text" id="phone" class="phone number" name="Phone"<?php echo $_tmp_1 ?>
/></td>
							</tr>
							
							<?php /* tag "tr" from line 59 */; ?>
<tr>
								<?php /* tag "td" from line 60 */; ?>
<td align="right"><?php /* tag "LABEL" from line 60 */; ?>
<LABEL>Địa chỉ: </LABEL></td> 
								<?php /* tag "td" from line 61 */; ?>
<td align="left"><?php 
/* tag "INPUT" from line 61 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Factory, 'getAddress')))):  ;
$_tmp_1 = ' value="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<INPUT size="20" type="text" id="text" class="required text"<?php echo $_tmp_1 ?>
/></td>
							</tr>							
							
							<?php /* tag "tr" from line 64 */; ?>
<tr>
								<?php /* tag "td" from line 65 */; ?>
<td align="right"><?php /* tag "LABEL" from line 65 */; ?>
<LABEL>Ghi chú: </LABEL></td>
								<?php /* tag "td" from line 66 */; ?>
<td align="left"><?php 
/* tag "INPUT" from line 66 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Factory, 'getDescription')))):  ;
$_tmp_1 = ' value="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<INPUT size="20" type="text" name="Description"<?php echo $_tmp_1 ?>
/></td>
							</tr>
						</table>
						<?php /* tag "div" from line 69 */; ?>
<div id="button1">
						<?php /* tag "table" from line 70 */; ?>
<table align="center">
							<?php /* tag "tr" from line 71 */; ?>
<tr>
								<?php /* tag "td" from line 72 */; ?>
<td><?php /* tag "span" from line 72 */; ?>
<span id="info"></span></td>
								<?php /* tag "td" from line 73 */; ?>
<td style="padding-top:10px;">							
									<?php /* tag "a" from line 74 */; ?>
<a style="float:center;" href="#" id="submit" onclick="document.getElementById('form').submit()" class="Button StateDefault ButtonIconLeft CornerAll">
										<?php /* tag "span" from line 75 */; ?>
<span class="ButtonIcon ButtonIconDisk"></span>Cập nhật
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
/* tag "span" from line 86 */ ;
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

Generated by PHPTAL from /home/banhreht/public_html/mvc/templates/UpdateFactory.html (edit that file instead) */; ?>