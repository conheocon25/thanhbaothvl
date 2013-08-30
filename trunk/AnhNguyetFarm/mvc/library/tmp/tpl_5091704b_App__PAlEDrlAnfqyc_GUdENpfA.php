<?php 
function tpl_5091704b_App__PAlEDrlAnfqyc_GUdENpfA(PHPTAL $tpl, PHPTAL_Context $ctx) {
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
		
	</head>
<?php /* tag "body" from line 7 */; ?>
<body>
	<!-- EXPORT PAGE -->
	<?php /* tag "div" from line 9 */; ?>
<div id="export" data-role="page" class="type-interior">		
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
				<?php /* tag "div" from line 13 */; ?>
<div data-role="collapsible" data-inset="true" data-collapsed="false" data-theme="b" data-content-theme="d">
					<?php /* tag "h3" from line 14 */; ?>
<h3>CHỌN AO</h3>
					<?php /* tag "ul" from line 15 */; ?>
<ul data-role="listview" data-inset="true" data-theme="c" data-dividertheme="b">
						<?php 
/* tag "li" from line 16 */ ;
$_tmp_1 = $ctx->repeat ;
$_tmp_1->Pond = new PHPTAL_RepeatController($ctx->Ponds)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->Pond as $ctx->Pond): ;
?>
<li>
							<?php 
/* tag "a" from line 17 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Pond, 'getURLExport')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a data-ajax="false"<?php echo $_tmp_2 ?>
><?php echo phptal_escape($ctx->path($ctx->Pond, 'getName')); ?>
</a>
						</li><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

					</ul>
				</div>
			</div>
			<?php /* tag "div" from line 22 */; ?>
<div class="content-secondary">
				<?php /* tag "div" from line 23 */; ?>
<div data-role="collapsible" data-collapsed="false" data-theme="b" data-content-theme="d">
					<?php /* tag "h3" from line 24 */; ?>
<h3>CÁC MODULE</h3>
					<?php /* tag "ul" from line 25 */; ?>
<ul data-role="listview" data-theme="c" data-dividertheme="d">
						<?php /* tag "li" from line 26 */; ?>
<li data-theme="a"><?php 
/* tag "a" from line 26 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->User, 'getApp/getURLExport')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
>XUẤT HÀNG</a></li>
						<?php /* tag "li" from line 27 */; ?>
<li><?php 
/* tag "a" from line 27 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLImport')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a data-ajax="false"<?php echo $_tmp_1 ?>
>NHẬP HÀNG</a></li>
						<?php /* tag "li" from line 28 */; ?>
<li><?php 
/* tag "a" from line 28 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->User, 'getApp/getURLReport')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a data-ajax="false"<?php echo $_tmp_2 ?>
>BÁO CÁO</a></li>
						<?php /* tag "li" from line 29 */; ?>
<li><?php 
/* tag "a" from line 29 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLSetting')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a data-ajax="false"<?php echo $_tmp_1 ?>
>THIẾT LẬP</a></li>
					</ul>
				</div>
			</div>
		</div>
		<?php /* tag "div" from line 34 */; ?>
<div data-role="footer" class="footer-docs" data-theme="c"><?php /* tag "p" from line 34 */; ?>
<p>&copy; 2012 SPN Co, Ltd.</p></div>
	</div>
	
	<!-- IMPORT PAGE -->
	<?php /* tag "div" from line 38 */; ?>
<div id="import" data-role="page" class="type-interior">
		<?php 
/* tag "div" from line 39 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('macros.xhtml/header', $_thistpl) ;
$ctx->popSlots() ;
?>

		<?php /* tag "div" from line 40 */; ?>
<div data-role="content">
			<?php /* tag "div" from line 41 */; ?>
<div class="content-primary">				
				<?php /* tag "div" from line 42 */; ?>
<div data-role="collapsible" data-inset="true" data-collapsed="false" data-theme="b" data-content-theme="d">
					<?php /* tag "h3" from line 43 */; ?>
<h3>CHỌN NHÀ CUNG CẤP</h3>
					<?php /* tag "ul" from line 44 */; ?>
<ul data-role="listview" data-inset="true" data-theme="c" data-dividertheme="b">
						<?php 
/* tag "li" from line 45 */ ;
$_tmp_2 = $ctx->repeat ;
$_tmp_2->Supplier = new PHPTAL_RepeatController($ctx->Suppliers)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_2->Supplier as $ctx->Supplier): ;
?>
<li>
							<?php 
/* tag "a" from line 46 */ ;
if (null !== ($_tmp_1 = ('#'))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a data-ajax="false"<?php echo $_tmp_1 ?>
><?php echo phptal_escape($ctx->path($ctx->Supplier, 'getName')); ?>
</a>
						</li><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

					</ul>
				</div>
			</div>
			<?php /* tag "div" from line 51 */; ?>
<div class="content-secondary">
				<?php /* tag "div" from line 52 */; ?>
<div data-role="collapsible" data-collapsed="false" data-theme="b" data-content-theme="d">
					<?php /* tag "h3" from line 53 */; ?>
<h3>CÁC MODULE</h3>
					<?php /* tag "ul" from line 54 */; ?>
<ul data-role="listview" data-theme="c" data-dividertheme="d">
						<?php /* tag "li" from line 55 */; ?>
<li><?php 
/* tag "a" from line 55 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLExport')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
>XUẤT HÀNG</a></li>
						<?php /* tag "li" from line 56 */; ?>
<li data-theme="a"><?php 
/* tag "a" from line 56 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->User, 'getApp/getURLImport')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
>NHẬP HÀNG</a></li>
						<?php /* tag "li" from line 57 */; ?>
<li><?php 
/* tag "a" from line 57 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLReport')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a data-ajax="false"<?php echo $_tmp_1 ?>
>BÁO CÁO</a></li>
						<?php /* tag "li" from line 58 */; ?>
<li><?php 
/* tag "a" from line 58 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->User, 'getApp/getURLSetting')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a data-ajax="false"<?php echo $_tmp_2 ?>
>THIẾT LẬP</a></li>
					</ul>
				</div>
			</div>
		</div>
		<?php /* tag "div" from line 63 */; ?>
<div data-role="footer" class="footer-docs" data-theme="c"><?php /* tag "p" from line 63 */; ?>
<p>&copy; 2012 SPN Co, Ltd.</p></div>
	</div>
	
	<!-- REPORT PAGE -->
	<?php /* tag "div" from line 67 */; ?>
<div id="report" data-role="page" class="type-interior">
		<?php 
/* tag "div" from line 68 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('macros.xhtml/header', $_thistpl) ;
$ctx->popSlots() ;
?>

		<?php /* tag "div" from line 69 */; ?>
<div data-role="content">
			<?php /* tag "div" from line 70 */; ?>
<div class="content-primary">				
				<?php /* tag "div" from line 71 */; ?>
<div data-role="collapsible" data-collapsed="false" data-theme="b" data-content-theme="d">
					<?php /* tag "h3" from line 72 */; ?>
<h3>CHỌN LOẠI</h3>
					<?php /* tag "ul" from line 73 */; ?>
<ul data-role="listview" data-inset="true" data-theme="c" data-dividertheme="d">
						<?php /* tag "li" from line 74 */; ?>
<li><?php 
/* tag "a" from line 74 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLReportPond')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a data-ajax="false" data-transition="none"<?php echo $_tmp_1 ?>
>1. VỤ AO</a></li>
						<?php /* tag "li" from line 75 */; ?>
<li><?php 
/* tag "a" from line 75 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->User, 'getApp/getURLReportSupplier')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a data-ajax="false" data-transition="none"<?php echo $_tmp_2 ?>
>2. NHẬP HÀNG</a></li>
					</ul>
				</div>
			</div>
			<?php /* tag "div" from line 79 */; ?>
<div class="content-secondary">
				<?php /* tag "div" from line 80 */; ?>
<div data-role="collapsible" data-collapsed="false" data-theme="b" data-content-theme="d">
					<?php /* tag "h3" from line 81 */; ?>
<h3>CÁC MODULE</h3>
					<?php /* tag "ul" from line 82 */; ?>
<ul data-role="listview" data-theme="c" data-dividertheme="d">
						<?php /* tag "li" from line 83 */; ?>
<li><?php 
/* tag "a" from line 83 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLExport')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a data-ajax="false"<?php echo $_tmp_1 ?>
>XUẤT HÀNG</a></li>
						<?php /* tag "li" from line 84 */; ?>
<li><?php 
/* tag "a" from line 84 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->User, 'getApp/getURLImport')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a data-ajax="false"<?php echo $_tmp_2 ?>
>NHẬP HÀNG</a></li>
						<?php /* tag "li" from line 85 */; ?>
<li data-theme="a"><?php 
/* tag "a" from line 85 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLReport')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a data-ajax="false"<?php echo $_tmp_1 ?>
>BÁO CÁO</a></li>
						<?php /* tag "li" from line 86 */; ?>
<li><?php 
/* tag "a" from line 86 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->User, 'getApp/getURLSetting')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a data-ajax="false"<?php echo $_tmp_2 ?>
>THIẾT LẬP</a></li>
					</ul>
				</div>
			</div>
		</div>
		<?php /* tag "div" from line 91 */; ?>
<div data-role="footer" class="footer-docs" data-theme="c"><?php /* tag "p" from line 91 */; ?>
<p>&copy; 2012 SPN Co, Ltd.</p></div>
	</div>
</body>
</html><?php 
/* end */ ;

}

?>
<?php /* 
*** DO NOT EDIT THIS FILE ***

Generated by PHPTAL from /home/a23app/public_html/anhnguyetfarm/mvc/templates/App.html (edit that file instead) */; ?>