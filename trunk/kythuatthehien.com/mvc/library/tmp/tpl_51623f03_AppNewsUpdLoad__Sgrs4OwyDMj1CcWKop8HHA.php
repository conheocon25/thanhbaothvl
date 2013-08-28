<?php 
function tpl_51623f03_AppNewsUpdLoad__Sgrs4OwyDMj1CcWKop8HHA(PHPTAL $tpl, PHPTAL_Context $ctx) {
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

		<?php /* tag "link" from line 5 */; ?>
<link rel="stylesheet" type="text/css" href="/mvc/templates/theme/base/jquery-ui-1.8.11.custom.css"/> 
		<?php /* tag "link" from line 6 */; ?>
<link rel="stylesheet" type="text/css" href="/mvc/templates/theme/base/jquery-ui-timepicker-addon.css"/>
		
		<?php 
/* tag "span" from line 8 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('macros.xhtml/IncludeJS', $_thistpl) ;
$ctx->popSlots() ;
?>

		<?php /* tag "script" from line 9 */; ?>
<script type="text/javascript" language="javascript" src="/mvc/templates/script/library/jquery-ui-1.8.11.custom.min.js"></script>
		<?php /* tag "script" from line 10 */; ?>
<script type="text/javascript" language="javascript" src="/mvc/templates/script/library/jquery-ui-timepicker-addon.js"></script>
		<?php /* tag "script" from line 11 */; ?>
<script type="text/javascript" language="javascript" src="/mvc/templates/script/library/jquery.ui.datepicker-vi.js"></script>
		<?php /* tag "script" from line 12 */; ?>
<script type="text/javascript" language="javascript" src="/mvc/templates/script/library/jquery-ui-timepicker-vi.js"></script>
		
		<?php /* tag "script" from line 14 */; ?>
<script type="text/javascript" language="javascript" src="/mvc/templates/script/library/ckeditor/ckeditor.js"></script>
		<?php /* tag "script" from line 15 */; ?>
<script type="text/javascript">
			/*<![CDATA[*/
			$(function() {
				$('#Date').datetimepicker(
					{ dateFormat: 'yy-mm-dd' }
				);
			});
			/*]]>*/
		</script>
		
	</head>	
	<?php /* tag "body" from line 26 */; ?>
<body>
		<?php /* tag "div" from line 27 */; ?>
<div id="wrapper">

			<?php 
/* tag "div" from line 29 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('macros.xhtml/Header', $_thistpl) ;
$ctx->popSlots() ;
?>
	

			<?php /* tag "div" from line 31 */; ?>
<div id="main">				
				<?php 
/* tag "div" from line 32 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('macros.xhtml/DateTimeBox', $_thistpl) ;
$ctx->popSlots() ;
?>

				<?php /* tag "div" from line 33 */; ?>
<div id="box-editor">
					<?php /* tag "div" from line 34 */; ?>
<div class="box-title">
						<?php /* tag "img" from line 35 */; ?>
<img src="/data/images/icon.png" width="30"/>
						<?php /* tag "span" from line 36 */; ?>
<span><?php echo phptal_escape($ctx->Title); ?>
</span>
						<?php 
/* tag "a" from line 37 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->News, 'getCategory/getURLView')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
>&#8629; Trở lại</a>
					</div>
					<?php /* tag "div" from line 39 */; ?>
<div class="box-editor-left">
						<?php 
/* tag "form" from line 40 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->News, 'getURLUpdExe')))):  ;
$_tmp_1 = ' action="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<form class="form-editor" id="FormAppCategoryNewsUpdLoad" method="post"<?php echo $_tmp_1 ?>
>
							<?php /* tag "div" from line 41 */; ?>
<div class="row">
								<?php /* tag "div" from line 42 */; ?>
<div for="Name" class="label">Tiêu đề</div>
								<?php /* tag "div" from line 43 */; ?>
<div class="textbox">
									<?php 
/* tag "input" from line 44 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->News, 'getTitle')))):  ;
$_tmp_2 = ' value="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<input id="Title" name="Title" type="text"<?php echo $_tmp_2 ?>
/>
								</div>
								<?php /* tag "div" from line 46 */; ?>
<div class="clear"></div>
							</div>
							<?php /* tag "div" from line 48 */; ?>
<div class="row">
								<?php /* tag "div" from line 49 */; ?>
<div for="Name" class="label">Loại</div>
								<?php /* tag "div" from line 50 */; ?>
<div class="checkbox">
									<?php 
/* tag "input" from line 51 */ ;
if ($ctx->path($ctx->News, 'getType')):  ;
$_tmp_2 = ' checked="checked"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<input id="Type" type="checkbox" name="Type"<?php echo $_tmp_2 ?>
/> Tin VIP
								</div>
								<?php /* tag "div" from line 53 */; ?>
<div class="clear"></div>
							</div>
							<?php /* tag "div" from line 55 */; ?>
<div class="row">
								<?php /* tag "div" from line 56 */; ?>
<div for="Date" class="label">Thời gian</div>
								<?php /* tag "div" from line 57 */; ?>
<div class="textbox">
									<?php 
/* tag "input" from line 58 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->News, 'getDate')))):  ;
$_tmp_2 = ' value="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<input id="Date" name="Date" type="text"<?php echo $_tmp_2 ?>
/>
								</div>
								<?php /* tag "div" from line 60 */; ?>
<div class="clear"></div>
							</div>
							<?php /* tag "div" from line 62 */; ?>
<div class="row">
								<?php /* tag "div" from line 63 */; ?>
<div for="Name" class="label">Tác giả</div>
								<?php /* tag "div" from line 64 */; ?>
<div class="textbox">
									<?php 
/* tag "input" from line 65 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->News, 'getAuthor')))):  ;
$_tmp_2 = ' value="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<input id="Author" name="Author" type="text"<?php echo $_tmp_2 ?>
/>
								</div>
								<?php /* tag "div" from line 67 */; ?>
<div class="clear"></div>
							</div>
							<?php /* tag "div" from line 69 */; ?>
<div class="row">
								<?php /* tag "div" from line 70 */; ?>
<div class="label-random">Nội dung</div>
								<?php /* tag "div" from line 71 */; ?>
<div class="textarea">
									<?php /* tag "textarea" from line 72 */; ?>
<textarea class="ckeditor" name="Content"><?php echo phptal_escape($ctx->path($ctx->News, 'getContent')); ?>
</textarea>
								</div>
								<?php /* tag "div" from line 74 */; ?>
<div class="clear"></div>
							</div>
							<?php /* tag "div" from line 76 */; ?>
<div class="row">
								<?php /* tag "div" from line 77 */; ?>
<div class="button">
									<?php /* tag "button" from line 78 */; ?>
<button type="submit" name="submit" value="submit-value">Lưu</button>
								</div>
							</div>
						</form>
					</div>
					<?php /* tag "div" from line 83 */; ?>
<div class="box-editor-right">
						
					</div>
				</div>
				<?php /* tag "div" from line 87 */; ?>
<div class="clear"></div>
			</div>

			<?php 
/* tag "div" from line 90 */ ;
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

Generated by PHPTAL from E:\AppWebServer\chuakhaituong.123app.net\mvc\templates\AppNewsUpdLoad.html (edit that file instead) */; ?>