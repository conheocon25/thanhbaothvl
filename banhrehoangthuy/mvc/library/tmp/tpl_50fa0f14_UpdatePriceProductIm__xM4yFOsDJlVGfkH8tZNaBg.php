<?php 
function tpl_50fa0f14_UpdatePriceProductIm__xM4yFOsDJlVGfkH8tZNaBg(PHPTAL $tpl, PHPTAL_Context $ctx) {
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
	</head>
<?php /* tag "body" from line 21 */; ?>
<body>
<?php /* tag "div" from line 22 */; ?>
<div id="frame">
	<?php /* tag "div" from line 23 */; ?>
<div id="page">
		<?php 
/* tag "span" from line 24 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('macros.xhtml/HeaderModuleSettings', $_thistpl) ;
$ctx->popSlots() ;
?>

		<?php /* tag "div" from line 25 */; ?>
<div id="module2">
			<?php /* tag "div" from line 26 */; ?>
<div id="nav">
				<?php /* tag "div" from line 27 */; ?>
<div id="Title">
					<?php /* tag "div" from line 28 */; ?>
<div id="Text"><?php echo phptal_escape($ctx->Title); ?>
</div>
				</div>				
			</div>
			<?php /* tag "div" from line 31 */; ?>
<div id="Column1of1">
				<?php /* tag "div" from line 32 */; ?>
<div id="Title">
					<?php 
/* tag "a" from line 34 */ ;
if (null !== ($_tmp_1 = ($ctx->ParentsLinked))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a title="Quay lại" id="TitleButton" class="Button StateDefault ButtonIconSolo CornerAll"<?php echo $_tmp_1 ?>
>
						<?php /* tag "span" from line 35 */; ?>
<span class="ButtonIcon ButtonIconArrowreturn1-n"></span>X
					</a>											
				</div>
				<?php /* tag "div" from line 38 */; ?>
<div id="SubColumn2of2">
					<?php /* tag "div" from line 39 */; ?>
<div id="form1">	
					<?php /* tag "form" from line 40 */; ?>
<form id="form" method="post" class="form">
						<?php /* tag "table" from line 41 */; ?>
<table align="center">																					
							<?php 
/* tag "INPUT" from line 42 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->PPI, 'getId')))):  ;
$_tmp_1 = ' value="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<INPUT type="hidden" size="20" name="Id"<?php echo $_tmp_1 ?>
/>
							<?php /* tag "tr" from line 43 */; ?>
<tr>
								<?php /* tag "td" from line 44 */; ?>
<td align="right"><?php /* tag "LABEL" from line 44 */; ?>
<LABEL>Sản phẩm: </LABEL></td> 
								<?php /* tag "td" from line 45 */; ?>
<td align="left">									
									<?php 
/* tag "INPUT" from line 46 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->PPI, 'getNameProduct')))):  ;
$_tmp_1 = ' value="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<INPUT readonly="readonly" size="20" type="text" name="NameProduct"<?php echo $_tmp_1 ?>
/>
								</td>									
							</tr>														
							<?php /* tag "tr" from line 49 */; ?>
<tr>
								<?php /* tag "td" from line 50 */; ?>
<td align="right"><?php /* tag "LABEL" from line 50 */; ?>
<LABEL>Giá gia công: </LABEL></td> 
								<?php /* tag "td" from line 51 */; ?>
<td align="left"><?php 
/* tag "INPUT" from line 51 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->PPI, 'getPrice')))):  ;
$_tmp_1 = ' value="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<INPUT size="20" type="text" name="Price" id="Price"<?php echo $_tmp_1 ?>
/></td>
							</tr>
							
						</table>
						<?php /* tag "div" from line 55 */; ?>
<div id="button1">						
						<?php /* tag "table" from line 56 */; ?>
<table align="center">
							<?php /* tag "tr" from line 57 */; ?>
<tr>
								<?php /* tag "td" from line 58 */; ?>
<td style="padding-top:10px;">							
									<?php /* tag "a" from line 59 */; ?>
<a style="float:center;" href="#" onclick="document.getElementById('form').submit()" class="Button StateDefault ButtonIconLeft CornerAll">
										<?php /* tag "span" from line 60 */; ?>
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
/* tag "span" from line 71 */ ;
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

Generated by PHPTAL from /home/a23app/public_html/banhreht/mvc/templates/UpdatePriceProductImport.html (edit that file instead) */; ?>