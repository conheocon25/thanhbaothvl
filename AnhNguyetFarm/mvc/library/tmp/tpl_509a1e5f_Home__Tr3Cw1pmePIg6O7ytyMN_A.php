<?php 
function tpl_509a1e5f_Home__Tr3Cw1pmePIg6O7ytyMN_A(PHPTAL $tpl, PHPTAL_Context $ctx) {
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
<script type="text/javascript" language="javascript" src="/mvc/templates/script/user/Home.js"></script>
	</head>
<?php /* tag "body" from line 8 */; ?>
<body>
	<?php /* tag "div" from line 9 */; ?>
<div data-role="page" class="type-interior" id="PageHome">
		<?php 
/* tag "div" from line 10 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('macros.xhtml/header', $_thistpl) ;
$ctx->popSlots() ;
?>

		<?php /* tag "div" from line 11 */; ?>
<div data-role="content">
			<?php /* tag "div" from line 12 */; ?>
<div class="content-primary">
				<?php 
/* tag "a" from line 13 */ ;
if (null !== ($_tmp_1 = ('/signin/load'))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a data-ajax="false" data-theme="b" data-role="button" data-icon="star"<?php echo $_tmp_1 ?>
>Đăng nhập hệ thống</a>
				<?php 
/* tag "div" from line 14 */ ;
if ($ctx->Feedback == 'error'):  ;
?>
<div data-role="collapsible" data-inset="true" data-collapsed="false" data-theme="e" data-content-theme="d">
					<?php /* tag "h3" from line 15 */; ?>
<h3>CẢNH BÁO</h3>
					<?php /* tag "ul" from line 16 */; ?>
<ul data-role="listview" data-inset="true" data-theme="d" data-dividertheme="e">
						<?php /* tag "li" from line 17 */; ?>
<li>Email hoặc mật khẩu gõ sai. Vui lòng xác định lại cho đúng trước khi đăng nhập !</li>
						<?php 
/* tag "a" from line 18 */ ;
if (null !== ($_tmp_1 = ('/signin/load'))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a data-ajax="false" data-role="button" data-icon="star"<?php echo $_tmp_1 ?>
>Đăng nhập</a>
					</ul>
				</div><?php endif; ?>

				<?php 
/* tag "div" from line 21 */ ;
if ($ctx->Feedback == 'error_update'):  ;
?>
<div data-role="collapsible" data-inset="true" data-collapsed="false" data-theme="e" data-content-theme="d">
					<?php /* tag "h3" from line 22 */; ?>
<h3>CẢNH BÁO</h3>
					<?php /* tag "ul" from line 23 */; ?>
<ul data-role="listview" data-inset="true" data-theme="d" data-dividertheme="e">
						<?php /* tag "li" from line 24 */; ?>
<li>Kiểm tra lại đường truyền Internet !</li>
						<?php 
/* tag "a" from line 25 */ ;
if (null !== ($_tmp_1 = ('/signin/load'))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a data-ajax="false" data-role="button" data-icon="star"<?php echo $_tmp_1 ?>
>Đăng nhập</a>
					</ul>
				</div><?php endif; ?>

			</div>
		</div>
		<?php /* tag "div" from line 30 */; ?>
<div data-role="footer" class="footer-docs" data-theme="c"><?php /* tag "p" from line 30 */; ?>
<p>&copy; 2012 SPN Co,ltd.</p></div>
	</div>
</body>
</html><?php 
/* end */ ;

}

?>
<?php /* 
*** DO NOT EDIT THIS FILE ***

Generated by PHPTAL from /home/a23app/public_html/anhnguyetfarm/mvc/templates/Home.html (edit that file instead) */; ?>