<?php 
function tpl_50faa872_SettingInfoPasswdLoa__N3rnsBRLeBA85qWsJHOm8g(PHPTAL $tpl, PHPTAL_Context $ctx) {
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
<script type="text/javascript" language="javascript" src="/mvc/templates/script/user/SettingInfoPasswdLoad.js"></script>
	</head>
<?php /* tag "body" from line 8 */; ?>
<body>
	<?php /* tag "div" from line 9 */; ?>
<div id="PageSettingInfoPasswdLoad" data-role="page">
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
if (null !== ($_tmp_1 = ($ctx->path($ctx->App, 'getURLSettingInfoPasswdExe')))):  ;
$_tmp_1 = ' action="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<form id="FormSettingInfoPasswdLoad" method="post" ajax="false" class="ui-body ui-body-a ui-corner-all"<?php echo $_tmp_1 ?>
>
				<?php /* tag "fieldset" from line 16 */; ?>
<fieldset>
					<?php /* tag "div" from line 17 */; ?>
<div data-role="fieldcontain">
						<?php /* tag "label" from line 18 */; ?>
<label for="Passwd1" class="text">Mật khẩu mới:</label>
						<?php /* tag "input" from line 19 */; ?>
<input class="required" id="Passwd1" name="Passwd1" type="password"/>
					</div>
					<?php /* tag "div" from line 21 */; ?>
<div data-role="fieldcontain">
						<?php /* tag "label" from line 22 */; ?>
<label for="Passwd2" class="text">Lập lại mật khẩu:</label>
						<?php /* tag "input" from line 23 */; ?>
<input class="required" id="Passwd2" name="Passwd2" type="password"/>
					</div>				
				</fieldset>
				<?php /* tag "button" from line 26 */; ?>
<button type="submit" data-theme="b" data-icon="check" name="submit" value="submit-value">Thay đổi</button>
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

Generated by PHPTAL from /home/a23app/public_html/minhtai/mvc/templates/SettingInfoPasswdLoad.html (edit that file instead) */; ?>