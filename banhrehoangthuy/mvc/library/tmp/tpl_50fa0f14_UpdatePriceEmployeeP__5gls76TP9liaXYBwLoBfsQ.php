<?php 
function tpl_50fa0f14_UpdatePriceEmployeeP__5gls76TP9liaXYBwLoBfsQ(PHPTAL $tpl, PHPTAL_Context $ctx) {
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
	</head>
<?php /* tag "body" from line 8 */; ?>
<body>
<?php /* tag "div" from line 9 */; ?>
<div id="frame">
	<?php /* tag "div" from line 10 */; ?>
<div id="page">
		<?php 
/* tag "span" from line 11 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('macros.xhtml/HeaderModuleFactories', $_thistpl) ;
$ctx->popSlots() ;
?>

		<?php /* tag "div" from line 12 */; ?>
<div id="module2">
			<?php /* tag "div" from line 13 */; ?>
<div id="nav">
				<?php /* tag "div" from line 14 */; ?>
<div id="Title">
					<?php /* tag "div" from line 15 */; ?>
<div id="Text"><?php echo phptal_escape($ctx->Title); ?>
</div>
				</div>				
			</div>
			<?php /* tag "div" from line 18 */; ?>
<div id="Column1of1">
				<?php /* tag "div" from line 19 */; ?>
<div id="Title">
					<?php 
/* tag "a" from line 21 */ ;
if (null !== ($_tmp_1 = ($ctx->ParentsLinked))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a title="Quay lại" id="TitleButton" class="Button StateDefault ButtonIconSolo CornerAll"<?php echo $_tmp_1 ?>
>
						<?php /* tag "span" from line 22 */; ?>
<span class="ButtonIcon ButtonIconArrowreturn1-n"></span>X
					</a>											
				</div>					
					<?php /* tag "div" from line 25 */; ?>
<div id="form1">
						<?php /* tag "form" from line 26 */; ?>
<form id="form" method="post" class="form" style="margin: 10px 0px 0px 10px;padding: 5px 5px 5px 5px;">
							<?php /* tag "table" from line 27 */; ?>
<table align="center">																					
								<?php 
/* tag "INPUT" from line 28 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->PEP, 'getId')))):  ;
$_tmp_1 = ' value="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<INPUT type="hidden" size="20" name="Id"<?php echo $_tmp_1 ?>
/>
								<?php /* tag "tr" from line 29 */; ?>
<tr>
									<?php /* tag "td" from line 30 */; ?>
<td align="right"><?php /* tag "LABEL" from line 30 */; ?>
<LABEL>Sản phẩm: </LABEL></td> 
									<?php /* tag "td" from line 31 */; ?>
<td align="left">									
										<?php 
/* tag "INPUT" from line 32 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->PEP, 'getNameProduct')))):  ;
$_tmp_1 = ' value="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<INPUT readonly="readonly" size="20" type="text" name="NameProduct"<?php echo $_tmp_1 ?>
/>
									</td>									
								</tr>														
								<?php /* tag "tr" from line 35 */; ?>
<tr>
									<?php /* tag "td" from line 36 */; ?>
<td align="right"><?php /* tag "LABEL" from line 36 */; ?>
<LABEL>Giá gia công: </LABEL></td> 
									<?php /* tag "td" from line 37 */; ?>
<td align="left"><?php 
/* tag "INPUT" from line 37 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->PEP, 'getPrice')))):  ;
$_tmp_1 = ' value="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<INPUT size="20" type="text" name="Price" id="Price"<?php echo $_tmp_1 ?>
/></td>
								</tr>
								
							</table>
							<?php /* tag "div" from line 41 */; ?>
<div id="button1">						
							<?php /* tag "table" from line 42 */; ?>
<table align="center">
								<?php /* tag "tr" from line 43 */; ?>
<tr>
									<?php /* tag "td" from line 44 */; ?>
<td style="padding-top:10px;">							
										<?php /* tag "a" from line 45 */; ?>
<a style="float:center;" href="#" onclick="document.getElementById('form').submit()" class="Button StateDefault ButtonIconLeft CornerAll">
											<?php /* tag "span" from line 46 */; ?>
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
		<?php 
/* tag "span" from line 56 */ ;
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

Generated by PHPTAL from /home/a23app/public_html/banhreht/mvc/templates/UpdatePriceEmployeeProduce.html (edit that file instead) */; ?>