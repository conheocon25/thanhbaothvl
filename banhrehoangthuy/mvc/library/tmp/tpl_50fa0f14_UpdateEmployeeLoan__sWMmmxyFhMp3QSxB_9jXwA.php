<?php 
function tpl_50fa0f14_UpdateEmployeeLoan__sWMmmxyFhMp3QSxB_9jXwA(PHPTAL $tpl, PHPTAL_Context $ctx) {
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
<link rel="stylesheet" type="text/css" href="mvc/templates/theme/css/jquery.ui.theme.css"/>
		<?php /* tag "link" from line 15 */; ?>
<link rel="stylesheet" type="text/css" href="mvc/templates/theme/css/jquery.ui.datepicker.css"/>				
		<?php /* tag "link" from line 16 */; ?>
<link rel="stylesheet" type="text/css" href="mvc/templates/theme/css/main_2.css"/>		
		<?php /* tag "link" from line 17 */; ?>
<link rel="stylesheet" type="text/css" href="mvc/templates/theme/css/form.css"/>		
		<?php /* tag "link" from line 18 */; ?>
<link rel="stylesheet" type="text/css" href="mvc/templates/theme/css/ButtonTheme.css"/>
		<?php /* tag "script" from line 19 */; ?>
<script type="text/javascript" language="javascript" src="mvc/templates/script/Button.js"></script>		
		<?php /* tag "script" from line 20 */; ?>
<script type="text/javascript">
		/*<![CDATA[*/
		$(document).ready(
			function(){
				$('#Date').datepicker({dateFormat: 'yy-mm-dd'});				
			});
		/*]]>*/
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
<LABEL>Id: </LABEL></td> 
								<?php /* tag "td" from line 52 */; ?>
<td align="left"><?php 
/* tag "INPUT" from line 52 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->EmployeeLoan, 'getId')))):  ;
$_tmp_1 = ' value="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<INPUT size="20" type="text" name="Id"<?php echo $_tmp_1 ?>
/></td>
							</tr>
							<?php /* tag "tr" from line 54 */; ?>
<tr>
								<?php /* tag "td" from line 55 */; ?>
<td align="right"><?php /* tag "LABEL" from line 55 */; ?>
<LABEL>Ngày nhận: </LABEL></td> 
								<?php /* tag "td" from line 56 */; ?>
<td align="left"><?php 
/* tag "INPUT" from line 56 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->EmployeeLoan, 'getDate')))):  ;
$_tmp_1 = ' value="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<INPUT size="20" type="text" name="Date" id="Date"<?php echo $_tmp_1 ?>
/></td>
							</tr>
							<?php /* tag "tr" from line 58 */; ?>
<tr>
								<?php /* tag "td" from line 59 */; ?>
<td align="right"><?php /* tag "LABEL" from line 59 */; ?>
<LABEL>Tiền ứng: </LABEL></td> 
								<?php /* tag "td" from line 60 */; ?>
<td align="left"><?php 
/* tag "INPUT" from line 60 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->EmployeeLoan, 'getValue')))):  ;
$_tmp_1 = ' value="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<INPUT size="20" type="text" name="Value"<?php echo $_tmp_1 ?>
/></td>
							</tr>
							<?php /* tag "tr" from line 62 */; ?>
<tr>
								<?php /* tag "td" from line 63 */; ?>
<td align="right"><?php /* tag "LABEL" from line 63 */; ?>
<LABEL>Ghi chú: </LABEL></td>
								<?php /* tag "td" from line 64 */; ?>
<td align="left"><?php 
/* tag "INPUT" from line 64 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->EmployeeLoan, 'getDescription')))):  ;
$_tmp_1 = ' value="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<INPUT size="20" type="text" name="Description"<?php echo $_tmp_1 ?>
/></td>
							</tr>
						</table>
						<?php /* tag "div" from line 67 */; ?>
<div id="button1">						
						<?php /* tag "table" from line 68 */; ?>
<table align="center">
							<?php /* tag "tr" from line 69 */; ?>
<tr>
								<?php /* tag "td" from line 70 */; ?>
<td style="padding-top:10px;">							
									<?php /* tag "a" from line 71 */; ?>
<a style="float:center;" href="#" onclick="document.getElementById('form').submit()" class="Button StateDefault ButtonIconLeft CornerAll">
										<?php /* tag "span" from line 72 */; ?>
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
/* tag "span" from line 83 */ ;
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

Generated by PHPTAL from /home/a23app/public_html/banhreht/mvc/templates/UpdateEmployeeLoan.html (edit that file instead) */; ?>