<?php 
function tpl_512f4512_SellingCustomerInsLo__tUQ1jx0Z8TAjtUsHQXj4pQ(PHPTAL $tpl, PHPTAL_Context $ctx) {
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
<script type="text/javascript" language="javascript" src="/mvc/templates/script/user/SellingCustomerInsLoad.js"></script>
	</head>
<?php /* tag "body" from line 8 */; ?>
<body>
	<?php /* tag "div" from line 9 */; ?>
<div id="PageSellingCustomerInsLoad" data-role="page">
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
if (null !== ($_tmp_1 = ($ctx->path($ctx->Customer, 'getURLSellingInsExe')))):  ;
$_tmp_1 = ' action="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<form id="FormSellingCustomerInsLoad" data-ajax="false" method="post" class="ui-body ui-body-a ui-corner-all"<?php echo $_tmp_1 ?>
>
				<?php /* tag "fieldset" from line 16 */; ?>
<fieldset>
					<?php /* tag "div" from line 17 */; ?>
<div data-role="fieldcontain">
						<?php /* tag "label" from line 18 */; ?>
<label for="IdStore" class="text">Kho hàng:</label>
						<?php /* tag "select" from line 19 */; ?>
<select name="IdStore" id="IdStore" data-native-menu="false">
							<?php 
/* tag "option" from line 20 */ ;
$_tmp_2 = $ctx->repeat ;
$_tmp_2->Store = new PHPTAL_RepeatController($ctx->Stores)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_2->Store as $ctx->Store): ;
if (null !== ($_tmp_3 = ($ctx->path($ctx->Store, 'getId')))):  ;
$_tmp_3 = ' value="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<option<?php echo $_tmp_3 ?>
>
								<?php /* tag "span" from line 21 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Store, 'getName')); ?>
</span>
							</option><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

						</select>
					</div>
					<?php /* tag "div" from line 25 */; ?>
<div data-role="fieldcontain">
						<?php /* tag "label" from line 26 */; ?>
<label for="Date">Ngày:</label>
						<?php /* tag "input" from line 27 */; ?>
<input name="Date" id="Date"/>
					</div>								
					<?php /* tag "div" from line 29 */; ?>
<div data-role="fieldcontain">
						<?php /* tag "label" from line 30 */; ?>
<label for="Note" class="text">Diễn giải:</label>
						<?php /* tag "textarea" from line 31 */; ?>
<textarea cols="40" rows="8" name="Note" id="Note" data-mini="true"></textarea>
					</div>				
				</fieldset>
				<?php /* tag "button" from line 34 */; ?>
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

Generated by PHPTAL from /home/a23app/public_html/minhtai/mvc/templates/SellingCustomerInsLoad.html (edit that file instead) */; ?>