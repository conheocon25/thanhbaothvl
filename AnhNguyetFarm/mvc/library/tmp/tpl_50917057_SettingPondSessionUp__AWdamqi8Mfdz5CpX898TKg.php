<?php 
function tpl_50917057_SettingPondSessionUp__AWdamqi8Mfdz5CpX898TKg(PHPTAL $tpl, PHPTAL_Context $ctx) {
$_thistpl = $tpl ;
$_translator = $tpl->getTranslator() ;
/* tag "documentElement" from line 1 */ ;
$ctx->setDocType('<!DOCTYPE html>',false) ;
?>
 
<?php /* tag "html" from line 2 */; ?>
<html>
	<?php /* tag "head" from line 3 */; ?>
<head>
		<?php 
/* tag "span" from line 4 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('macros.xhtml/IncludeCSS_Mobile', $_thistpl) ;
$ctx->popSlots() ;
?>

		<?php 
/* tag "span" from line 5 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('macros.xhtml/IncludeJS_Mobile', $_thistpl) ;
$ctx->popSlots() ;
?>

		<?php /* tag "script" from line 6 */; ?>
<script type="text/javascript" language="javascript" src="/mvc/templates/script/user/SettingPondSessionUpdLoad.js"></script>
	</head>
<?php /* tag "body" from line 8 */; ?>
<body>
	<?php /* tag "div" from line 9 */; ?>
<div id="PageSettingPondSessionUpdLoad" data-role="page" class="type-interior">
		<?php /* tag "div" from line 10 */; ?>
<div data-role="header" data-theme="d">
			<?php /* tag "h1" from line 11 */; ?>
<h1><?php echo phptal_escape($ctx->Title); ?>
</h1>
			<?php /* tag "a" from line 12 */; ?>
<a href="#" data-icon="back" data-rel="back" data-role="button">Lui</a>
		</div>
		<?php /* tag "div" from line 14 */; ?>
<div data-role="content" data-theme="a">
			<?php 
/* tag "form" from line 15 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->PondSession, 'getURLUpdExe')))):  ;
$_tmp_1 = ' action="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<form id="FormSettingPondSessionUpdLoad" method="post" data-ajax="false" class="ui-body ui-body-a"<?php echo $_tmp_1 ?>
>
				<?php /* tag "fieldset" from line 16 */; ?>
<fieldset>				
					<?php /* tag "div" from line 17 */; ?>
<div data-role="fieldcontain">
						<?php /* tag "label" from line 18 */; ?>
<label for="Type" class="text">Loại hình:</label>
						<?php /* tag "select" from line 19 */; ?>
<select name="Type" id="Type" data-native-menu="false">
							<?php 
/* tag "option" from line 20 */ ;
if ($ctx->PondSession->getType()==1):  ;
$_tmp_2 = ' selected="selected"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<option value="1"<?php echo $_tmp_2 ?>
>
								THƯƠNG MẠI
							</option>
							<?php 
/* tag "option" from line 23 */ ;
if ($ctx->PondSession->getType()==2):  ;
$_tmp_2 = ' selected="selected"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<option value="2"<?php echo $_tmp_2 ?>
>
								GIA CÔNG
							</option>
						</select>
					</div>
					<?php /* tag "div" from line 28 */; ?>
<div data-role="fieldcontain">
						<?php /* tag "label" from line 29 */; ?>
<label for="DateStart" class="text">Bắt đầu:</label>
						<?php 
/* tag "input" from line 30 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->PondSession, 'getDateStart')))):  ;
$_tmp_2 = ' value="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<input id="DateStart" name="DateStart" type="text" class="required"<?php echo $_tmp_2 ?>
/>
					</div>
					<?php /* tag "div" from line 32 */; ?>
<div data-role="fieldcontain">
						<?php /* tag "label" from line 33 */; ?>
<label for="DateEnd" class="text">Kết thúc:</label>
						<?php 
/* tag "input" from line 34 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->PondSession, 'getDateEnd')))):  ;
$_tmp_2 = ' value="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<input id="DateEnd" name="DateEnd" type="text" class="required"<?php echo $_tmp_2 ?>
/>
					</div>
					<?php /* tag "div" from line 36 */; ?>
<div data-role="fieldcontain">
						<?php /* tag "label" from line 37 */; ?>
<label for="CountStart" class="text">Số lượng con giống:</label>
						<?php 
/* tag "input" from line 38 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->PondSession, 'getCountStart')))):  ;
$_tmp_2 = ' value="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<input id="CountStart" name="CountStart" type="text" class="required"<?php echo $_tmp_2 ?>
/>
					</div>
					<?php /* tag "div" from line 40 */; ?>
<div data-role="fieldcontain">
						<?php /* tag "label" from line 41 */; ?>
<label for="ValueStart" class="text">Tiền con giống:</label>
						<?php 
/* tag "input" from line 42 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->PondSession, 'getValueStart')))):  ;
$_tmp_2 = ' value="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<input id="ValueStart" name="ValueStart" type="text" class="required"<?php echo $_tmp_2 ?>
/>
					</div>
					<?php /* tag "div" from line 44 */; ?>
<div data-role="fieldcontain">
						<?php /* tag "label" from line 45 */; ?>
<label for="SampleStart" class="text">Mẫu ban đầu:</label>
						<?php 
/* tag "input" from line 46 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->PondSession, 'getSampleStart')))):  ;
$_tmp_2 = ' value="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<input id="SampleStart" name="SampleStart" type="text" class="required"<?php echo $_tmp_2 ?>
/>
					</div>
					<?php /* tag "div" from line 48 */; ?>
<div data-role="fieldcontain">
						<?php /* tag "label" from line 49 */; ?>
<label for="ShipStart" class="text">Vận chuyển giống:</label>
						<?php 
/* tag "input" from line 50 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->PondSession, 'getShipStart')))):  ;
$_tmp_2 = ' value="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<input id="ShipStart" name="ShipStart" type="text" class="required"<?php echo $_tmp_2 ?>
/>
					</div>
					<?php /* tag "div" from line 52 */; ?>
<div data-role="fieldcontain">
						<?php /* tag "label" from line 53 */; ?>
<label for="CountExport" class="text">Số lượng xuất:</label>
						<?php 
/* tag "input" from line 54 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->PondSession, 'getCountExport')))):  ;
$_tmp_2 = ' value="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<input id="CountExport" name="CountExport" type="text" class="required"<?php echo $_tmp_2 ?>
/>
					</div>
					<?php /* tag "div" from line 56 */; ?>
<div data-role="fieldcontain">
						<?php /* tag "label" from line 57 */; ?>
<label for="PriceExport" class="text">Giá xuất:</label>
						<?php 
/* tag "input" from line 58 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->PondSession, 'getPriceExport')))):  ;
$_tmp_2 = ' value="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<input id="PriceExport" name="PriceExport" type="text" class="required"<?php echo $_tmp_2 ?>
/>
					</div>
					<?php /* tag "div" from line 60 */; ?>
<div data-role="fieldcontain">
						<?php /* tag "label" from line 61 */; ?>
<label for="BankRate" class="text">Lãi suất ngân hàng:</label>
						<?php 
/* tag "input" from line 62 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->PondSession, 'getBankRate')))):  ;
$_tmp_2 = ' value="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<input id="BankRate" name="BankRate" type="text" class="required"<?php echo $_tmp_2 ?>
/>
					</div>
					<?php /* tag "div" from line 64 */; ?>
<div data-role="fieldcontain">
						<?php /* tag "label" from line 65 */; ?>
<label for="CountWaste" class="text">Số lượng cá ngộp:</label>
						<?php 
/* tag "input" from line 66 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->PondSession, 'getCountWaste')))):  ;
$_tmp_2 = ' value="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<input id="CountWaste" name="CountWaste" type="text" class="required"<?php echo $_tmp_2 ?>
/>
					</div>
					<?php /* tag "div" from line 68 */; ?>
<div data-role="fieldcontain">
						<?php /* tag "label" from line 69 */; ?>
<label for="PriceWaste" class="text">Giá cá ngộp:</label>
						<?php 
/* tag "input" from line 70 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->PondSession, 'getPriceWaste')))):  ;
$_tmp_2 = ' value="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<input id="PriceWaste" name="PriceWaste" type="text" class="required"<?php echo $_tmp_2 ?>
/>
					</div>
				</fieldset>
				<?php /* tag "button" from line 73 */; ?>
<button type="submit" data-theme="b" data-icon="check" name="submit" value="submit-value">Lưu</button>
			</form>
		</div>
	</div>
</body>
</html><?php 
/* end */ ;

}

?>
<?php /* 
*** DO NOT EDIT THIS FILE ***

Generated by PHPTAL from /home/a23app/public_html/anhnguyetfarm/mvc/templates/SettingPondSessionUpdLoad.html (edit that file instead) */; ?>