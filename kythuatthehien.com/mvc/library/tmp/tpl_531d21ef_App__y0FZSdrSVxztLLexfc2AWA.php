<?php 
function tpl_531d21ef_App__y0FZSdrSVxztLLexfc2AWA(PHPTAL $tpl, PHPTAL_Context $ctx) {
$_thistpl = $tpl ;
$_translator = $tpl->getTranslator() ;
/* tag "documentElement" from line 1 */ ;
$ctx->setDocType('<!DOCTYPE html>',false) ;
?>

<?php /* tag "html" from line 2 */; ?>
<html lang="en">
	<?php /* tag "head" from line 3 */; ?>
<head>
		<?php 
/* tag "span" from line 4 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/IncludeMETA', $_thistpl) ;
$ctx->popSlots() ;
?>

		<?php 
/* tag "span" from line 5 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/IncludeCSS', $_thistpl) ;
$ctx->popSlots() ;
?>
		
		<?php 
/* tag "span" from line 6 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/IncludeJS', $_thistpl) ;
$ctx->popSlots() ;
?>

	</head>
	<?php /* tag "body" from line 8 */; ?>
<body>
		<?php /* tag "div" from line 9 */; ?>
<div class="container-fluid">
			<?php 
/* tag "span" from line 10 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/Header', $_thistpl) ;
$ctx->popSlots() ;
?>

			<?php /* tag "div" from line 11 */; ?>
<div class="row-fluid">
				<?php /* tag "div" from line 12 */; ?>
<div class="row-fluid">
					<?php /* tag "div" from line 13 */; ?>
<div class="span3">
						<?php 
/* tag "span" from line 14 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/Menu', $_thistpl) ;
$ctx->popSlots() ;
?>

					</div>
					<?php /* tag "div" from line 16 */; ?>
<div class="span9">
						<?php /* tag "div" from line 17 */; ?>
<div class="content">
							<?php 
/* tag "span" from line 18 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/LocationBar', $_thistpl) ;
$ctx->popSlots() ;
?>

							<?php /* tag "center" from line 19 */; ?>
<center><?php /* tag "img" from line 19 */; ?>
<img src="/data/images/bg_manager.png" width="50%" style="opacity:.25;"/></center>
						</div>
					</div>
				</div>
			</div>
			<?php 
/* tag "span" from line 24 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/Footer', $_thistpl) ;
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

Generated by PHPTAL from D:\AppWebServer\MyCodePHP\kythuatthehien.com\mvc\templates\App.html (edit that file instead) */; ?>