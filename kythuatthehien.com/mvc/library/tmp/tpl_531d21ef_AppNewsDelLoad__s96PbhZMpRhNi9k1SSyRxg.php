<?php 
function tpl_531d21ef_AppNewsDelLoad__s96PbhZMpRhNi9k1SSyRxg(PHPTAL $tpl, PHPTAL_Context $ctx) {
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

		<?php /* tag "script" from line 7 */; ?>
<script type="text/javascript" language="javascript" src="/mvc/templates/script/library/ckeditor/ckeditor.js"></script>
	</head>	
	<?php /* tag "body" from line 9 */; ?>
<body>
		<?php /* tag "div" from line 10 */; ?>
<div class="container-fluid">
			<?php 
/* tag "span" from line 11 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/Header', $_thistpl) ;
$ctx->popSlots() ;
?>

			<?php /* tag "div" from line 12 */; ?>
<div class="row-fluid">
				<?php /* tag "div" from line 13 */; ?>
<div class="span3"></div>
				<?php /* tag "div" from line 14 */; ?>
<div class="span9 main">
					<?php 
/* tag "span" from line 15 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/LocationBar', $_thistpl) ;
$ctx->popSlots() ;
?>

					<?php 
/* tag "form" from line 16 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->News, 'getURLDelExe')))):  ;
$_tmp_1 = ' action="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<form class="form-actions" method="post"<?php echo $_tmp_1 ?>
>
						<?php /* tag "p" from line 17 */; ?>
<p>Bạn có chắc chắn muốn xóa ?</p>
						<?php /* tag "button" from line 18 */; ?>
<button type="submit" class="btn" value="submit-value"><?php /* tag "span" from line 18 */; ?>
<span class="icon-remove"></span>Xóa</button>
					</form>
				</div>
			</div>
			<?php 
/* tag "span" from line 22 */ ;
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

Generated by PHPTAL from D:\AppWebServer\MyCodePHP\kythuatthehien.com\mvc\templates\AppNewsDelLoad.html (edit that file instead) */; ?>