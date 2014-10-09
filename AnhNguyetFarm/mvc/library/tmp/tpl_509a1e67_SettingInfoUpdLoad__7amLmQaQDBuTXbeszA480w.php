<?php 
function tpl_509a1e67_SettingInfoUpdLoad__7amLmQaQDBuTXbeszA480w(PHPTAL $tpl, PHPTAL_Context $ctx) {
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
<script type="text/javascript" language="javascript" src="/mvc/templates/script/user/Setting1.js"></script>
	</head>
<?php /* tag "body" from line 8 */; ?>
<body>						
	<?php /* tag "div" from line 9 */; ?>
<div id="info" data-role="page" class="type-interior">
		<?php /* tag "div" from line 10 */; ?>
<div data-role="header" data-theme="d">
			<?php /* tag "div" from line 11 */; ?>
<div align="center">
				<?php 
/* tag "a" from line 12 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLApp')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
 data-icon="back" data-rel="back">
					<?php /* tag "img" from line 13 */; ?>
<img border="0" width="100%" src="/data/images/app/banner.jpg"/>
				</a>
			</div>			
		</div>
		<?php /* tag "div" from line 17 */; ?>
<div data-role="content">
			<?php /* tag "div" from line 18 */; ?>
<div class="content-primary">
				<?php 
/* tag "form" from line 19 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->App, 'getURLSettingInfoUpdExe')))):  ;
$_tmp_1 = ' action="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<form id="FormSettingInfoUpdLoad" method="post" data-ajax="false" class="ui-body ui-body-b ui-corner-all"<?php echo $_tmp_1 ?>
>
					<?php /* tag "fieldset" from line 20 */; ?>
<fieldset>
						<?php /* tag "div" from line 21 */; ?>
<div data-role="fieldcontain">
							<?php /* tag "label" from line 22 */; ?>
<label for="Name" class="text">Tên:</label>
							<?php 
/* tag "input" from line 23 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->App, 'getName')))):  ;
$_tmp_2 = ' value="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<input class="required minlength:5" id="Name" name="Name" type="text"<?php echo $_tmp_2 ?>
/>
						</div>
						<?php /* tag "div" from line 25 */; ?>
<div data-role="fieldcontain">
							<?php /* tag "label" from line 26 */; ?>
<label for="Phone" class="text">Ðiện thoại:</label>
							<?php 
/* tag "input" from line 27 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->App, 'getPhone')))):  ;
$_tmp_2 = ' value="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<input class="required minlength:10" id="Phone" name="Phone" type="text"<?php echo $_tmp_2 ?>
/>
						</div>
						<?php /* tag "div" from line 29 */; ?>
<div data-role="fieldcontain">
							<?php /* tag "label" from line 30 */; ?>
<label for="Address" class="text">Ðịa chỉ:</label>
							<?php 
/* tag "input" from line 31 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->App, 'getAddress')))):  ;
$_tmp_2 = ' value="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<input class="required" id="Address" name="Address" type="text"<?php echo $_tmp_2 ?>
/>
						</div>
						<?php /* tag "div" from line 33 */; ?>
<div data-role="fieldcontain">
							<?php /* tag "label" from line 34 */; ?>
<label for="Email" class="text">Email:</label>
							<?php 
/* tag "input" from line 35 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->App, 'getEmail')))):  ;
$_tmp_2 = ' value="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<input class="required email" id="Email" name="Email" type="text"<?php echo $_tmp_2 ?>
/>
						</div>
					</fieldset>
					<?php /* tag "button" from line 38 */; ?>
<button type="submit" data-theme="b" data-icon="check" name="submit" value="submit-value">Luu</button>
				</form>
			</div>
			<?php /* tag "div" from line 41 */; ?>
<div class="content-secondary">
				<?php /* tag "div" from line 42 */; ?>
<div data-role="collapsible" data-collapsed="false" data-theme="b" data-content-theme="d">
					<?php /* tag "h3" from line 43 */; ?>
<h3>THIẾT LẬP</h3>
					<?php /* tag "ul" from line 44 */; ?>
<ul data-role="listview" data-theme="c" data-dividertheme="d">
						<?php /* tag "li" from line 45 */; ?>
<li data-theme="a"><?php 
/* tag "a" from line 45 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->User, 'getApp/getURLSettingInfo')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a data-ajax="false"<?php echo $_tmp_2 ?>
>THÔNG TIN</a></li>
						<?php /* tag "li" from line 46 */; ?>
<li><?php 
/* tag "a" from line 46 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLSettingPond')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a data-ajax="false"<?php echo $_tmp_1 ?>
>AO NUÔI</a></li>
						<?php /* tag "li" from line 47 */; ?>
<li><?php 
/* tag "a" from line 47 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->User, 'getApp/getURLSettingSupplier')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a data-ajax="false"<?php echo $_tmp_2 ?>
>NHÀ CUNG CẤP</a></li>
						<?php /* tag "li" from line 48 */; ?>
<li><?php 
/* tag "a" from line 48 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLSettingStore')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a data-ajax="false"<?php echo $_tmp_1 ?>
>KHO HÀNG</a></li>
						<?php /* tag "li" from line 49 */; ?>
<li><?php 
/* tag "a" from line 49 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->User, 'getApp/getURLSettingCategory')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a data-ajax="false"<?php echo $_tmp_2 ?>
>DANH MỤC</a></li>
						<?php /* tag "li" from line 50 */; ?>
<li><?php 
/* tag "a" from line 50 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLSettingUnit')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a data-ajax="false"<?php echo $_tmp_1 ?>
>ĐƠN VỊ TÍNH</a></li>
					</ul>
				</div>
			</div>
		</div>
		<?php /* tag "div" from line 55 */; ?>
<div data-role="footer" class="footer-docs" data-theme="c"><?php /* tag "p" from line 55 */; ?>
<p>&copy; 2012 SPN Co,ltd.</p></div>
	</div>
	
</body>
</html><?php 
/* end */ ;

}

?>
<?php /* 
*** DO NOT EDIT THIS FILE ***

Generated by PHPTAL from /home/a23app/public_html/anhnguyetfarm/mvc/templates/SettingInfoUpdLoad.html (edit that file instead) */; ?>