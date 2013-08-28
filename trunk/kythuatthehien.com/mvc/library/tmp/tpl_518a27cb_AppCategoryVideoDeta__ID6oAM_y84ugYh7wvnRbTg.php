<?php 
function tpl_518a27cb_AppCategoryVideoDeta__ID6oAM_y84ugYh7wvnRbTg(PHPTAL $tpl, PHPTAL_Context $ctx) {
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
/* tag "div" from line 9 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('macros.xhtml/Header', $_thistpl) ;
$ctx->popSlots() ;
?>
	
			<?php /* tag "div" from line 10 */; ?>
<div id="main">
				<?php 
/* tag "div" from line 11 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('macros.xhtml/DateTimeBox', $_thistpl) ;
$ctx->popSlots() ;
?>

				<?php /* tag "div" from line 12 */; ?>
<div id="box-editor">
					<?php /* tag "div" from line 13 */; ?>
<div class="box-title">
						<?php /* tag "img" from line 14 */; ?>
<img src="/data/images/icon.png" width="30"/>
						<?php /* tag "span" from line 15 */; ?>
<span><?php echo phptal_escape($ctx->Title); ?>
</span>
						<?php 
/* tag "a" from line 16 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->VL, 'getCategory/getURLVideo')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
>&#8629; Trở lại</a>
					</div>
					<?php /* tag "div" from line 18 */; ?>
<div class="box-editor-left">
						<?php 
/* tag "form" from line 19 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->VL, 'getURLUpdExe')))):  ;
$_tmp_1 = ' action="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<form class="form-editor" id="FormAppCategoryVideoDetailUpdLoad" method="post"<?php echo $_tmp_1 ?>
>
							<?php /* tag "div" from line 20 */; ?>
<div class="row">
								<?php /* tag "div" from line 21 */; ?>
<div for="Name" class="label">Tên</div>
								<?php /* tag "div" from line 22 */; ?>
<div class="textbox">
									<?php 
/* tag "input" from line 23 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->VL, 'getVideo/getName')))):  ;
$_tmp_2 = ' value="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<input id="Name" name="Name" type="text"<?php echo $_tmp_2 ?>
/>
								</div>
								<?php /* tag "div" from line 25 */; ?>
<div class="clear"></div>
							</div>							
							<?php /* tag "div" from line 27 */; ?>
<div class="row">
								<?php /* tag "div" from line 28 */; ?>
<div for="URL" class="label">URL nhúng</div>
								<?php /* tag "div" from line 29 */; ?>
<div class="textbox">
									<?php 
/* tag "input" from line 30 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->VL, 'getVideo/getURL')))):  ;
$_tmp_2 = ' value="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<input id="URL" name="URL" type="text" class="form-textbox"<?php echo $_tmp_2 ?>
/>
								</div>
								<?php /* tag "div" from line 32 */; ?>
<div class="clear"></div>
							</div>
							<?php /* tag "div" from line 34 */; ?>
<div class="row">
								<?php /* tag "div" from line 35 */; ?>
<div for="Date" class="label">Ngày cập nhật</div>
								<?php /* tag "div" from line 36 */; ?>
<div class="textbox">
									<?php 
/* tag "input" from line 37 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->VL, 'getVideo/getTime')))):  ;
$_tmp_2 = ' value="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<input id="Date" name="Date" type="text" class="form-textbox"<?php echo $_tmp_2 ?>
/>
								</div>
								<?php /* tag "div" from line 39 */; ?>
<div class="clear"></div>
							</div>
							<?php /* tag "div" from line 41 */; ?>
<div class="row">
								<?php /* tag "div" from line 42 */; ?>
<div for="Note" class="label">Ghi chú</div>
								<?php /* tag "div" from line 43 */; ?>
<div class="textbox">
									<?php 
/* tag "input" from line 44 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->VL, 'getVideo/getNote')))):  ;
$_tmp_2 = ' value="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<input id="Note" name="Note" type="text" class="form-textbox"<?php echo $_tmp_2 ?>
/>
								</div>
								<?php /* tag "div" from line 46 */; ?>
<div class="clear"></div>
							</div>
							<?php /* tag "div" from line 48 */; ?>
<div class="row">
								<?php /* tag "div" from line 49 */; ?>
<div for="Count" class="label">Lượt xem</div>
								<?php /* tag "div" from line 50 */; ?>
<div class="textbox">
									<?php 
/* tag "input" from line 51 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->VL, 'getVideo/getCount')))):  ;
$_tmp_2 = ' value="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<input id="Count" name="Count" type="text" class="form-textbox"<?php echo $_tmp_2 ?>
/>
								</div>
								<?php /* tag "div" from line 53 */; ?>
<div class="clear"></div>
							</div>							
							<?php /* tag "div" from line 55 */; ?>
<div class="row">
								<?php /* tag "div" from line 56 */; ?>
<div class="button">
									<?php /* tag "button" from line 57 */; ?>
<button type="submit" name="submit" value="submit-value">Cập nhật</button>
								</div>
							</div>
						</form>
					</div>
					<?php /* tag "div" from line 62 */; ?>
<div class="box-editor-right">
						<?php /* tag "div" from line 63 */; ?>
<div align="center" class="video-screen">
							<?php 
/* tag "iframe" from line 64 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->VL, 'getVideo/getURL')))):  ;
$_tmp_2 = ' src="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<iframe width="300" height="270" frameborder="0"<?php echo $_tmp_2 ?>
></iframe>
							<?php /* tag "script" from line 65 */; ?>
<script>
								/*<![CDATA[*/
								$("iframe").each(function(){
									  var ifr_source = $(this).attr('src');
									  var wmode = "?wmode=transparent";
									  $(this).attr('src',ifr_source+wmode);
								});
								/*]]>*/
							</script>
						</div>
					</div>
				</div>
				<?php /* tag "div" from line 77 */; ?>
<div class="clear"></div>
			</div>
			<?php 
/* tag "div" from line 79 */ ;
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

Generated by PHPTAL from E:\AppWebServer\chuakhaituong.123app.net\mvc\templates\AppCategoryVideoDetailUpdLoad.html (edit that file instead) */; ?>