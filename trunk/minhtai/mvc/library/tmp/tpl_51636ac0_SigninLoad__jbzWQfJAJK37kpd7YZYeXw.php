<?php 
function tpl_51636ac0_SigninLoad__jbzWQfJAJK37kpd7YZYeXw(PHPTAL $tpl, PHPTAL_Context $ctx) {
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
<script type="text/javascript" language="javascript" src="/mvc/templates/script/library/jquery.validate.min.js"></script>
	<?php /* tag "script" from line 7 */; ?>
<script type="text/javascript" language="javascript" src="/mvc/templates/script/library/jquery.validate.messages_vi.js"></script>
	
	<?php /* tag "script" from line 9 */; ?>
<script type="text/javascript" language="javascript" src="/mvc/templates/script/library/jquery.jqcrypt.pack.js"></script>
	<?php /* tag "script" from line 10 */; ?>
<script type="text/javascript" language="javascript" src="/mvc/templates/script/user/SigninLoad.js"></script>
</head>
<?php /* tag "body" from line 12 */; ?>
<body>
	<?php /* tag "div" from line 13 */; ?>
<div data-role="page" id="PageSignin">
		<?php /* tag "div" from line 14 */; ?>
<div data-role="header" data-theme="d">
			<?php /* tag "h1" from line 15 */; ?>
<h1><?php echo phptal_escape($ctx->Title); ?>
</h1>
			<?php /* tag "a" from line 16 */; ?>
<a href="#" data-icon="back" data-rel="back" data-role="button">Lui</a>
		</div>
		<?php /* tag "div" from line 18 */; ?>
<div data-role="content" data-theme="a">
			<?php 
/* tag "form" from line 19 */ ;
if (null !== ($_tmp_1 = ('/signin/exe'))):  ;
$_tmp_1 = ' action="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<form id="FormSignin" method="post" class="ui-body ui-body-a ui-corner-all"<?php echo $_tmp_1 ?>
>
				<?php /* tag "fieldset" from line 20 */; ?>
<fieldset>
					<?php /* tag "div" from line 21 */; ?>
<div data-role="fieldcontain">
						<?php /* tag "label" from line 22 */; ?>
<label for="Email" class="text">Email:</label>
						<?php /* tag "input" from line 23 */; ?>
<input id="Email" name="Email" type="text" class="email required" minlength="5"/>
					</div>
				</fieldset>	
				<?php /* tag "fieldset" from line 26 */; ?>
<fieldset>	
					<?php /* tag "div" from line 27 */; ?>
<div data-role="fieldcontain">
						<?php /* tag "label" from line 28 */; ?>
<label for="Pass" class="text">Mật khẩu:</label>
						<?php /* tag "input" from line 29 */; ?>
<input id="Pass" name="Pass" type="Password" class="required" minlength="5"/>
					</div>				
				</fieldset>
				<?php /* tag "button" from line 32 */; ?>
<button type="submit" data-theme="b" data-icon="check" name="submit" value="submit-value">Đăng nhập</button>
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

Generated by PHPTAL from /home/a23app/public_html/minhtai/mvc/templates/SigninLoad.html (edit that file instead) */; ?>