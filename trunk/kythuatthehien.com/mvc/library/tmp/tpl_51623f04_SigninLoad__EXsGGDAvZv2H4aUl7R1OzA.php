<?php 
function tpl_51623f04_SigninLoad__EXsGGDAvZv2H4aUl7R1OzA(PHPTAL $tpl, PHPTAL_Context $ctx) {
$_thistpl = $tpl ;
$_translator = $tpl->getTranslator() ;
/* tag "documentElement" from line 1 */ ;
$ctx->setDocType('<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">',false) ;
?>

<?php /* tag "html" from line 2 */; ?>
<html xmlns="http://www.w3.org/1999/xhtml">
	<?php /* tag "head" from line 3 */; ?>
<head>
		<?php 
/* tag "span" from line 4 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('macros.xhtml/IncludeCSS', $_thistpl) ;
$ctx->popSlots() ;
?>
		
		<?php 
/* tag "span" from line 5 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('macros.xhtml/IncludeJS', $_thistpl) ;
$ctx->popSlots() ;
?>

	</head>
	<?php /* tag "body" from line 7 */; ?>
<body>
		<?php /* tag "div" from line 8 */; ?>
<div id="wrapper">
		
			<?php 
/* tag "div" from line 10 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('macros.xhtml/Header', $_thistpl) ;
$ctx->popSlots() ;
?>
	

			<?php /* tag "div" from line 12 */; ?>
<div id="main">				
				<?php 
/* tag "div" from line 13 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('macros.xhtml/DateTimeBox', $_thistpl) ;
$ctx->popSlots() ;
?>

				<?php /* tag "div" from line 14 */; ?>
<div class="clear"></div>
				<?php /* tag "div" from line 15 */; ?>
<div class="signin-frame">
					<?php 
/* tag "form" from line 16 */ ;
if (null !== ($_tmp_1 = ('/signin/exe'))):  ;
$_tmp_1 = ' action="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<form id="FormSignin" name="FormSignin" method="post" autocomplete="off"<?php echo $_tmp_1 ?>
>
						<?php /* tag "h1" from line 17 */; ?>
<h1 align="center">© 2012 Chùa Khải Tường</h1>
						<?php /* tag "div" from line 18 */; ?>
<div align="center">
							<?php /* tag "label" from line 19 */; ?>
<label id="SigninEmailLabel" class="signin-label">email@example.com</label>
							<?php /* tag "input" from line 20 */; ?>
<input id="SigninEmail" name="Email" type="text" class="signin-textbox"/>
						</div>
						<?php /* tag "div" from line 22 */; ?>
<div align="center">
							<?php /* tag "label" from line 23 */; ?>
<label id="SigninPassLabel" class="signin-label">Mật khẩu</label>
							<?php /* tag "input" from line 24 */; ?>
<input id="SigninPass" name="Pass" type="Password" class="signin-textbox"/>
						</div>
						<?php /* tag "div" from line 26 */; ?>
<div align="center">
							<?php /* tag "input" from line 27 */; ?>
<input id="SigninSubmit" type="submit" name="submit" value="Đăng Nhập" class="signin-button"/>
						</div>
						<?php /* tag "div" from line 29 */; ?>
<div align="center" id="SigninError">Vui lòng nhập đầy đủ tài khoản và mật khẩu</div>
					</form>
				</div>
				<?php /* tag "div" from line 32 */; ?>
<div class="enter"></div>
			</div>

			<?php 
/* tag "div" from line 35 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('macros.xhtml/Footer', $_thistpl) ;
$ctx->popSlots() ;
?>


		</div>
	</body>
</html><?php 
/* end */ ;

}

?>
<?php /* 
*** DO NOT EDIT THIS FILE ***

Generated by PHPTAL from E:\AppWebServer\chuakhaituong.123app.net\mvc\templates\SigninLoad.html (edit that file instead) */; ?>