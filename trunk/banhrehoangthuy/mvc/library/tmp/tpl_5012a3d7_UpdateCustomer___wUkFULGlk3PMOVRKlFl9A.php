<?php 
function tpl_5012a3d7_UpdateCustomer___wUkFULGlk3PMOVRKlFl9A(PHPTAL $tpl, PHPTAL_Context $ctx) {
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
<script type="text/javascript" language="javascript" src="mvc/templates/script/jquery.ui.core.js"></script>
		
		<?php /* tag "link" from line 12 */; ?>
<link rel="stylesheet" type="text/css" href="mvc/templates/theme/css/jquery.ui.theme.css"/>
		<?php /* tag "link" from line 13 */; ?>
<link rel="stylesheet" type="text/css" href="mvc/templates/theme/css/jquery.ui.datepicker.css"/>				
		<?php /* tag "link" from line 14 */; ?>
<link rel="stylesheet" type="text/css" href="mvc/templates/theme/css/main_2.css"/>		
		<?php /* tag "link" from line 15 */; ?>
<link rel="stylesheet" type="text/css" href="mvc/templates/theme/css/form.css"/>		
		<?php /* tag "link" from line 16 */; ?>
<link rel="stylesheet" type="text/css" href="mvc/templates/theme/css/ButtonTheme.css"/>
		<?php /* tag "script" from line 17 */; ?>
<script type="text/javascript" language="javascript" src="mvc/templates/script/Button.js"></script>
	</head>
<?php /* tag "body" from line 19 */; ?>
<body>
<?php /* tag "div" from line 20 */; ?>
<div id="frame">
	<?php /* tag "div" from line 21 */; ?>
<div id="page">
		<?php 
/* tag "span" from line 22 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('macros.xhtml/HeaderModuleCustomers', $_thistpl) ;
$ctx->popSlots() ;
?>

		<?php /* tag "div" from line 23 */; ?>
<div id="module2">
			<?php /* tag "div" from line 24 */; ?>
<div id="nav">
				<?php /* tag "div" from line 25 */; ?>
<div id="Title">
					<?php /* tag "div" from line 26 */; ?>
<div id="Text"><?php echo phptal_escape($ctx->Title); ?>
</div>
				</div>				
			</div>
			<?php /* tag "div" from line 29 */; ?>
<div id="Column1of1">
				<?php /* tag "div" from line 30 */; ?>
<div id="Title">
					<?php 
/* tag "a" from line 32 */ ;
if (null !== ($_tmp_1 = ($ctx->ParentsLinked))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a title="Quay lại" id="TitleButton" class="Button StateDefault ButtonIconSolo CornerAll"<?php echo $_tmp_1 ?>
>
						<?php /* tag "span" from line 33 */; ?>
<span class="ButtonIcon ButtonIconArrowreturn1-n"></span>X
					</a>											
				</div>
				<?php /* tag "div" from line 36 */; ?>
<div id="SubColumn2of2">					
					<?php /* tag "div" from line 37 */; ?>
<div id="form1">
					<?php /* tag "form" from line 38 */; ?>
<form id="form" method="post" class="form">
						<?php /* tag "table" from line 39 */; ?>
<table align="center">							
							<?php /* tag "tr" from line 40 */; ?>
<tr>
								<?php /* tag "td" from line 41 */; ?>
<td align="right"><?php /* tag "LABEL" from line 41 */; ?>
<LABEL>Tên: </LABEL></td> 
								<?php /* tag "td" from line 42 */; ?>
<td align="left"><?php 
/* tag "INPUT" from line 42 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Customer, 'getName')))):  ;
$_tmp_1 = ' value="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<INPUT size="20" type="text" name="Name"<?php echo $_tmp_1 ?>
/></td>
							</tr>
							<?php /* tag "tr" from line 44 */; ?>
<tr>
								<?php /* tag "td" from line 45 */; ?>
<td align="right"><?php /* tag "LABEL" from line 45 */; ?>
<LABEL>Phone: </LABEL></td> 
								<?php /* tag "td" from line 46 */; ?>
<td align="left"><?php 
/* tag "INPUT" from line 46 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Customer, 'getPhone')))):  ;
$_tmp_1 = ' value="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<INPUT size="20" type="text" name="Phone"<?php echo $_tmp_1 ?>
/></td>
							</tr>
							<?php /* tag "tr" from line 48 */; ?>
<tr>
								<?php /* tag "td" from line 49 */; ?>
<td align="right"><?php /* tag "LABEL" from line 49 */; ?>
<LABEL>Địa chỉ: </LABEL></td> 
								<?php /* tag "td" from line 50 */; ?>
<td align="left"><?php 
/* tag "INPUT" from line 50 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Customer, 'getAddress')))):  ;
$_tmp_1 = ' value="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<INPUT size="20" type="text" name="Address"<?php echo $_tmp_1 ?>
/></td>
							</tr>
							<?php /* tag "tr" from line 52 */; ?>
<tr>
								<?php /* tag "td" from line 53 */; ?>
<td align="right"><?php /* tag "LABEL" from line 53 */; ?>
<LABEL>Dư nợ cũ: </LABEL></td>
								<?php /* tag "td" from line 54 */; ?>
<td align="left"><?php 
/* tag "INPUT" from line 54 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Customer, 'getBalance')))):  ;
$_tmp_1 = ' value="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<INPUT size="20" type="text" name="Balance"<?php echo $_tmp_1 ?>
/></td>
							</tr>
							<?php /* tag "tr" from line 56 */; ?>
<tr>
								<?php /* tag "td" from line 57 */; ?>
<td align="right"><?php /* tag "LABEL" from line 57 */; ?>
<LABEL>Ghi chú: </LABEL></td>
								<?php /* tag "td" from line 58 */; ?>
<td align="left"><?php 
/* tag "INPUT" from line 58 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Customer, 'getDescription')))):  ;
$_tmp_1 = ' value="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<INPUT size="20" type="text" name="Description"<?php echo $_tmp_1 ?>
/></td>
							</tr>
						</table>
						<?php /* tag "div" from line 61 */; ?>
<div id="button1">						
						<?php /* tag "table" from line 62 */; ?>
<table align="center">
							<?php /* tag "tr" from line 63 */; ?>
<tr>
								<?php /* tag "td" from line 64 */; ?>
<td style="padding-top:10px;">							
									<?php /* tag "a" from line 65 */; ?>
<a style="float:center;" href="#" onclick="document.getElementById('form').submit()" class="Button StateDefault ButtonIconLeft CornerAll">
										<?php /* tag "span" from line 66 */; ?>
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
/* tag "span" from line 77 */ ;
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

Generated by PHPTAL from /home/a23app/public_html/bra/mvc/templates/UpdateCustomer.html (edit that file instead) */; ?>