<?php 
function tpl_5162381f_AppSponsorDelLoad__perl0rLDBmzyfUmFkWoxGw(PHPTAL $tpl, PHPTAL_Context $ctx) {
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
				
				<?php /* tag "div" from line 14 */; ?>
<div id="box-editor">
					<?php /* tag "div" from line 15 */; ?>
<div class="box-title">
						<?php /* tag "img" from line 16 */; ?>
<img src="/data/images/manager.png" width="30"/>
						<?php /* tag "span" from line 17 */; ?>
<span><?php echo phptal_escape($ctx->Title); ?>
</span>
						<?php 
/* tag "a" from line 18 */ ;
if (null !== ($_tmp_1 = ('/app/sponsor'))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
>&#8629; Trở lại</a>
					</div>
					<?php /* tag "div" from line 20 */; ?>
<div class="box-editor-left">
						<?php 
/* tag "form" from line 21 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Sponsor, 'getURLDelExe')))):  ;
$_tmp_1 = ' action="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<form class="form-editor" id="FormAppSponsorDelLoad" method="post"<?php echo $_tmp_1 ?>
>
							<?php /* tag "div" from line 22 */; ?>
<div class="row">
								<?php /* tag "H3" from line 23 */; ?>
<H3>Bạn có chắc chắn muốn xóa ỦNG HỘ này không ?</H3>
							</div>
							<?php /* tag "div" from line 25 */; ?>
<div class="row">
								<?php /* tag "div" from line 26 */; ?>
<div class="button">
									<?php /* tag "button" from line 27 */; ?>
<button type="submit" name="submit" value="submit-value">Xóa</button>
								</div>
							</div>
						</form>
					</div>
					<?php /* tag "div" from line 32 */; ?>
<div class="box-editor-right">
						
					</div>
				</div>
				<?php /* tag "div" from line 36 */; ?>
<div class="clear"></div>
			</div>
			<?php 
/* tag "div" from line 38 */ ;
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

Generated by PHPTAL from E:\AppWebServer\chuakhaituong.123app.net\mvc\templates\AppSponsorDelLoad.html (edit that file instead) */; ?>