<?php 
function tpl_50a9a0d1_PaidPondListUpdLoad__ghlhcT_1v8ry1iwAgnXXjg(PHPTAL $tpl, PHPTAL_Context $ctx) {
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
<script type="text/javascript" language="javascript" src="/mvc/templates/script/user/PaidPondListUpdLoad.js"></script>
	</head>
<?php /* tag "body" from line 8 */; ?>
<body>
	<?php /* tag "div" from line 9 */; ?>
<div id="PagePaidPondListUpdLoad" data-role="page">
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
if (null !== ($_tmp_1 = ($ctx->path($ctx->PaidPond, 'getURLUpdExe')))):  ;
$_tmp_1 = ' action="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<form id="FormPaidPondListUpdLoad" data-ajax="false" method="post" class="ui-body ui-body-a ui-corner-all"<?php echo $_tmp_1 ?>
>
				<?php /* tag "fieldset" from line 16 */; ?>
<fieldset>				
					<?php /* tag "div" from line 17 */; ?>
<div data-role="fieldcontain">
						<?php /* tag "label" from line 18 */; ?>
<label for="Date">Ngày:</label>
						<?php 
/* tag "input" from line 19 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->PaidPond, 'getDate')))):  ;
$_tmp_2 = ' value="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<input class="required" type="date" name="Date" id="Date"<?php echo $_tmp_2 ?>
/>
					</div>
					<?php /* tag "div" from line 21 */; ?>
<div data-role="fieldcontain">
						<?php /* tag "label" from line 22 */; ?>
<label for="Value" class="text">Giá trị:</label>
						<?php 
/* tag "input" from line 23 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->PaidPond, 'getValue')))):  ;
$_tmp_2 = ' value="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<input class="required" id="Value" name="Value" type="text"<?php echo $_tmp_2 ?>
/>
					</div>
					
					<?php /* tag "div" from line 26 */; ?>
<div data-role="fieldcontain">
						<?php /* tag "label" from line 27 */; ?>
<label for="Note" class="text">Diễn giải:</label>
						<?php /* tag "textarea" from line 28 */; ?>
<textarea cols="40" rows="8" name="Note" id="Note" data-mini="true"><?php echo phptal_escape($ctx->path($ctx->PaidPond, 'getNote')); ?>
</textarea>
					</div>				
				</fieldset>
				<?php /* tag "button" from line 31 */; ?>
<button type="submit" data-theme="b" data-icon="check" name="submit" value="submit-value">Lưu</button>
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

Generated by PHPTAL from /home/a23app/public_html/anhnguyetfarm/mvc/templates/PaidPondListUpdLoad.html (edit that file instead) */; ?>