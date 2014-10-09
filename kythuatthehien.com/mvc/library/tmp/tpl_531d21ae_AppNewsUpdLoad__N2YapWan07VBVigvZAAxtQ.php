<?php 
function tpl_531d21ae_AppNewsUpdLoad__N2YapWan07VBVigvZAAxtQ(PHPTAL $tpl, PHPTAL_Context $ctx) {
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

		<?php /* tag "link" from line 6 */; ?>
<link rel="stylesheet" type="text/css" href="/mvc/templates/theme/base/jquery-ui-1.8.11.custom.css"/> 
		<?php /* tag "link" from line 7 */; ?>
<link rel="stylesheet" type="text/css" href="/mvc/templates/theme/base/jquery-ui-timepicker-addon.css"/>
		
		<?php 
/* tag "span" from line 9 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/IncludeJS', $_thistpl) ;
$ctx->popSlots() ;
?>

		<?php /* tag "script" from line 10 */; ?>
<script type="text/javascript" language="javascript" src="/mvc/templates/script/library/jquery-ui-1.8.11.custom.min.js"></script>
		<?php /* tag "script" from line 11 */; ?>
<script type="text/javascript" language="javascript" src="/mvc/templates/script/library/jquery-ui-timepicker-addon.js"></script>
		<?php /* tag "script" from line 12 */; ?>
<script type="text/javascript" language="javascript" src="/mvc/templates/script/library/jquery.ui.datepicker-vi.js"></script>
		<?php /* tag "script" from line 13 */; ?>
<script type="text/javascript" language="javascript" src="/mvc/templates/script/library/jquery-ui-timepicker-vi.js"></script>
		
		<?php /* tag "script" from line 15 */; ?>
<script type="text/javascript" language="javascript" src="/mvc/templates/script/library/ckeditor/ckeditor.js"></script>
		<?php /* tag "script" from line 16 */; ?>
<script type="text/javascript">
			/*<![CDATA[*/
			$(function() {$('#Date').datetimepicker({ dateFormat: 'yy-mm-dd' });});
			/*]]>*/
		</script>
		
	</head>	
	<?php /* tag "body" from line 23 */; ?>
<body>
		<?php /* tag "div" from line 24 */; ?>
<div class="container-fluid">
			<?php 
/* tag "span" from line 25 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/Header', $_thistpl) ;
$ctx->popSlots() ;
?>

			<?php /* tag "div" from line 26 */; ?>
<div class="row-fluid">			
				<?php /* tag "div" from line 27 */; ?>
<div class="span9 main">
					<?php 
/* tag "span" from line 28 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/LocationBar', $_thistpl) ;
$ctx->popSlots() ;
?>

					<?php 
/* tag "form" from line 29 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->News, 'getURLUpdExe')))):  ;
$_tmp_1 = ' action="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<form class="form-horizontal" method="post"<?php echo $_tmp_1 ?>
>						
						<?php /* tag "div" from line 30 */; ?>
<div class="control-group">
							<?php /* tag "label" from line 31 */; ?>
<label class="control-label" for="Title">Tiêu đề</label>
							<?php /* tag "div" from line 32 */; ?>
<div class="controls">
								<?php 
/* tag "input" from line 33 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->News, 'getTitle')))):  ;
$_tmp_2 = ' value="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<input type="text" id="Title" name="Title" placeholder="Name"<?php echo $_tmp_2 ?>
/>
							</div>
						</div>
						<?php /* tag "div" from line 36 */; ?>
<div class="control-group">
							<?php /* tag "label" from line 37 */; ?>
<label class="control-label" for="Type">Loại tin VIP</label>
							<?php /* tag "div" from line 38 */; ?>
<div class="controls">									
								 <?php /* tag "input" from line 39 */; ?>
<input type="checkbox" id="Type" name="Type"/>
							</div>
						</div>
						<?php /* tag "div" from line 42 */; ?>
<div class="control-group">
							<?php /* tag "label" from line 43 */; ?>
<label class="control-label" for="Date">Thời gian</label>
							<?php /* tag "div" from line 44 */; ?>
<div class="controls">
								<?php 
/* tag "input" from line 45 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->News, 'getDate')))):  ;
$_tmp_2 = ' value="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<input type="text" id="Date" name="Date" placeholder="Thời gian"<?php echo $_tmp_2 ?>
/>
							</div>
						</div>
						<?php /* tag "div" from line 48 */; ?>
<div class="control-group">
							<?php /* tag "label" from line 49 */; ?>
<label class="control-label" for="Author">Tác giả</label>
							<?php /* tag "div" from line 50 */; ?>
<div class="controls">
								<?php 
/* tag "input" from line 51 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->News, 'getAuthor')))):  ;
$_tmp_2 = ' value="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<input type="text" id="Author" name="Author" placeholder="Tác giả"<?php echo $_tmp_2 ?>
/>
							</div>
						</div>
						<?php /* tag "div" from line 54 */; ?>
<div class="control-group">
							<?php /* tag "label" from line 55 */; ?>
<label class="control-label" for="Author">Nội dung</label>
							<?php /* tag "div" from line 56 */; ?>
<div class="controls">
								<?php /* tag "textarea" from line 57 */; ?>
<textarea id="Content" class="ckeditor" name="Content" placeholder="Nội dung"><?php echo phptal_escape($ctx->path($ctx->News, 'getContent')); ?>
</textarea>
							</div>
						</div>
						<?php /* tag "div" from line 60 */; ?>
<div class="control-group">
							<?php /* tag "div" from line 61 */; ?>
<div class="controls">
								<?php /* tag "button" from line 62 */; ?>
<button type="submit" class="btn" value="submit-value">Cập nhật</button>
							</div>
						</div>
					</form>
				</div>				
			</div>
			<?php 
/* tag "span" from line 68 */ ;
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

Generated by PHPTAL from D:\AppWebServer\MyCodePHP\kythuatthehien.com\mvc\templates\AppNewsUpdLoad.html (edit that file instead) */; ?>