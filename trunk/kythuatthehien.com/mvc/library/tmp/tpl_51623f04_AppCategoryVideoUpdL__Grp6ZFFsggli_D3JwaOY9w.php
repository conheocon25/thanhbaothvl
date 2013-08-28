<?php 
function tpl_51623f04_AppCategoryVideoUpdL__Grp6ZFFsggli_D3JwaOY9w(PHPTAL $tpl, PHPTAL_Context $ctx) {
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
<div id="box-editor">
					<?php /* tag "div" from line 15 */; ?>
<div class="box-title">
						<?php /* tag "img" from line 16 */; ?>
<img src="/data/images/icon.png" width="30"/>
						<?php /* tag "span" from line 17 */; ?>
<span><?php echo phptal_escape($ctx->Title); ?>
</span>
						<?php /* tag "a" from line 18 */; ?>
<a href="/app/category/video">&#8629; Trở lại</a>
					</div>
					<?php /* tag "div" from line 20 */; ?>
<div class="box-editor-left">
						<?php 
/* tag "form" from line 21 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Category, 'getURLUpdExe')))):  ;
$_tmp_1 = ' action="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<form class="form-editor" id="FormAppCategoryInsLoad" method="post"<?php echo $_tmp_1 ?>
>
							<?php /* tag "div" from line 22 */; ?>
<div class="row">
								<?php /* tag "div" from line 23 */; ?>
<div for="Name" class="label">Tên</div>
								<?php /* tag "div" from line 24 */; ?>
<div class="textbox">
									<?php 
/* tag "input" from line 25 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Category, 'getName')))):  ;
$_tmp_2 = ' value="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<input id="Name" name="Name" type="text"<?php echo $_tmp_2 ?>
/>
								</div>
								<?php /* tag "div" from line 27 */; ?>
<div class="clear"></div>
							</div>
							<?php /* tag "div" from line 29 */; ?>
<div class="row">
								<?php /* tag "div" from line 30 */; ?>
<div for="Type" class="label">Loại</div>
								<?php /* tag "div" from line 31 */; ?>
<div class="checkbox">
									<?php 
/* tag "input" from line 32 */ ;
if ($ctx->path($ctx->Category, 'getType')):  ;
$_tmp_2 = ' checked="checked"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<input id="Type" type="checkbox" name="Type"<?php echo $_tmp_2 ?>
/>Đặc biệt
								</div>
								<?php /* tag "div" from line 34 */; ?>
<div class="clear"></div>
							</div>
							<?php /* tag "div" from line 36 */; ?>
<div class="row">
								<?php /* tag "div" from line 37 */; ?>
<div for="Picture" class="label">URL hình ảnh</div>
								<?php /* tag "div" from line 38 */; ?>
<div class="textbox">
									<?php 
/* tag "input" from line 39 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Category, 'getPicture')))):  ;
$_tmp_2 = ' value="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<input id="Picture" name="Picture" type="text"<?php echo $_tmp_2 ?>
/>
								</div>
								<?php /* tag "div" from line 41 */; ?>
<div class="clear"></div>
							</div>
							<?php /* tag "div" from line 43 */; ?>
<div class="row">
								<?php /* tag "div" from line 44 */; ?>
<div for="Name" class="label">Thứ tự</div>
								<?php /* tag "div" from line 45 */; ?>
<div class="textbox">
									<?php 
/* tag "input" from line 46 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Category, 'getOrder')))):  ;
$_tmp_2 = ' value="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<input id="Order" name="Order" type="text"<?php echo $_tmp_2 ?>
/>
								</div>
								<?php /* tag "div" from line 48 */; ?>
<div class="clear"></div>
							</div>
							<?php /* tag "div" from line 50 */; ?>
<div class="row">
								<?php /* tag "div" from line 51 */; ?>
<div class="button">
									<?php /* tag "button" from line 52 */; ?>
<button type="submit" name="submit" value="submit-value">Cập Nhật</button>
								</div>
							</div>
						</form>
					</div>
					<?php /* tag "div" from line 57 */; ?>
<div class="box-editor-right">
						
					</div>
				</div>
				<?php /* tag "div" from line 61 */; ?>
<div class="clear"></div>
			</div>

			<?php 
/* tag "div" from line 64 */ ;
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

Generated by PHPTAL from E:\AppWebServer\chuakhaituong.123app.net\mvc\templates\AppCategoryVideoUpdLoad.html (edit that file instead) */; ?>