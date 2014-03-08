<?php 
function tpl_509733e9_Report__nXMyrXiVt3eZAO429G_fjw(PHPTAL $tpl, PHPTAL_Context $ctx) {
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
<script type="text/javascript" language="javascript" src="/mvc/templates/script/user/Report.js"></script>
	</head>
<?php /* tag "body" from line 8 */; ?>
<body>
	<!-- REPORT -->
	<?php /* tag "div" from line 10 */; ?>
<div id="report" data-role="page" class="type-interior"></div>

	<!-- POND -->
	<?php /* tag "div" from line 13 */; ?>
<div id="pond" data-role="page" class="type-interior">
		<?php /* tag "div" from line 14 */; ?>
<div data-role="header" data-theme="d">
			<?php /* tag "div" from line 15 */; ?>
<div align="center">
				<?php 
/* tag "a" from line 16 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLApp')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
>
					<?php /* tag "img" from line 17 */; ?>
<img border="0" width="100%" src="/data/images/app/banner.jpg"/>
				</a>
			</div>
		</div>
		<?php /* tag "div" from line 21 */; ?>
<div data-role="content">
			<?php /* tag "div" from line 22 */; ?>
<div class="content-primary">
				<?php 
/* tag "div" from line 23 */ ;
$_tmp_1 = $ctx->repeat ;
$_tmp_1->Pond = new PHPTAL_RepeatController($ctx->Ponds)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->Pond as $ctx->Pond): ;
?>
<div data-role="collapsible" data-inset="true" data-collapsed="true" data-theme="b" data-content-theme="d">
					<?php /* tag "h3" from line 24 */; ?>
<h3><?php /* tag "span" from line 24 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Pond, 'getName')); ?>
</span> ( <?php /* tag "span" from line 24 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Pond, 'getSessions/count')); ?>
</span> VỤ) </h3>
					<?php /* tag "ul" from line 25 */; ?>
<ul data-inset="true" data-role="listview" data-theme="c" data-dividertheme="d">						
						<?php 
/* tag "li" from line 26 */ ;
$_tmp_2 = $ctx->repeat ;
$_tmp_2->Session = new PHPTAL_RepeatController($ctx->path($ctx->Pond, 'getSessions'))
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_2->Session as $ctx->Session): ;
?>
<li>
							<?php /* tag "h3" from line 27 */; ?>
<h3>Bắt đầu <?php /* tag "span" from line 27 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Session, 'getDateStartPrint')); ?>
</span> kết thúc <?php /* tag "span" from line 27 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Session, 'getDateEndPrint')); ?>
</span></h3>
							<?php /* tag "ul" from line 28 */; ?>
<ul>
								<?php /* tag "li" from line 29 */; ?>
<li><?php 
/* tag "a" from line 29 */ ;
if (null !== ($_tmp_3 = ($ctx->path($ctx->Session, 'getURLPrintGeneral')))):  ;
$_tmp_3 = ' href="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<a target="blank" data-ajax="false"<?php echo $_tmp_3 ?>
>IN TỔNG HỢP</a></li>
								<?php /* tag "li" from line 30 */; ?>
<li><?php 
/* tag "a" from line 30 */ ;
if (null !== ($_tmp_3 = ($ctx->path($ctx->Session, 'getURLPrintLog')))):  ;
$_tmp_3 = ' href="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<a target="blank" data-ajax="false"<?php echo $_tmp_3 ?>
>IN NHẬT KÝ</a></li>
							</ul>
						</li><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

					</ul>
				</div><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

			</div><!--/content-primary -->
			<?php /* tag "div" from line 36 */; ?>
<div class="content-secondary">				
				<?php /* tag "div" from line 37 */; ?>
<div data-role="collapsible" data-collapsed="true" data-theme="b" data-content-theme="d">
				<?php /* tag "h3" from line 38 */; ?>
<h3>BÁO CÁO</h3>
				<?php /* tag "ul" from line 39 */; ?>
<ul data-role="listview" data-theme="c" data-dividertheme="d">
					<?php /* tag "li" from line 40 */; ?>
<li data-theme="a"><?php 
/* tag "a" from line 40 */ ;
if (null !== ($_tmp_3 = ($ctx->path($ctx->User, 'getApp/getURLReportPond')))):  ;
$_tmp_3 = ' href="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<a data-transition="none"<?php echo $_tmp_3 ?>
>1. VỤ AO</a></li>
					<?php /* tag "li" from line 41 */; ?>
<li><?php 
/* tag "a" from line 41 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->User, 'getApp/getURLReportSupplier')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a data-transition="none"<?php echo $_tmp_2 ?>
>2. NHẬP HÀNG</a></li>					
				</ul>
				</div>
			</div>
		</div>
		<?php /* tag "div" from line 46 */; ?>
<div data-role="footer" class="footer-docs" data-theme="c"><?php /* tag "p" from line 46 */; ?>
<p>&copy; 2012 SPN Co,Ltd.</p></div>
	</div>
	
	<!-- SUPPLIER -->
	<?php /* tag "div" from line 50 */; ?>
<div id="supplier" data-role="page" class="type-interior">
		<?php /* tag "div" from line 51 */; ?>
<div data-role="header" data-theme="d">						
			<?php /* tag "div" from line 52 */; ?>
<div align="center">
				<?php 
/* tag "a" from line 53 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLApp')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
>
					<?php /* tag "img" from line 54 */; ?>
<img border="0" width="100%" src="/data/images/app/banner.jpg"/>
				</a>
			</div>
		</div>
		<?php /* tag "div" from line 58 */; ?>
<div data-role="content">
			<?php /* tag "div" from line 59 */; ?>
<div class="content-primary">				
				<?php /* tag "div" from line 60 */; ?>
<div data-role="collapsible" data-collapsed="false" data-theme="b" data-content-theme="d">
					<?php /* tag "h3" from line 61 */; ?>
<h3>CHỌN SẴN</h3>
					<?php /* tag "ul" from line 62 */; ?>
<ul data-role="listview" data-inset="true" data-theme="c" data-dividertheme="d">						
						<?php /* tag "li" from line 63 */; ?>
<li><?php 
/* tag "a" from line 63 */ ;
if (null !== ($_tmp_3 = ($ctx->path($ctx->User, 'getApp/getURLReportSupplierThisMonth')))):  ;
$_tmp_3 = ' href="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<a data-ajax="false"<?php echo $_tmp_3 ?>
>THÁNG NÀY</a></li>
					</ul>
				</div>
				<?php /* tag "div" from line 66 */; ?>
<div data-role="collapsible" data-collapsed="true" data-theme="b" data-content-theme="d">
					<?php /* tag "h3" from line 67 */; ?>
<h3>TÙY CHỈNH</h3>
					<?php 
/* tag "form" from line 68 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->User, 'getApp/getURLReportSupplierCustom')))):  ;
$_tmp_2 = ' action="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<form method="post"<?php echo $_tmp_2 ?>
>
						<?php /* tag "ul" from line 69 */; ?>
<ul data-role="listview" data-inset="true" data-theme="c" data-dividertheme="d">
							<?php /* tag "li" from line 70 */; ?>
<li data-role="fieldcontain">
								<?php /* tag "label" from line 71 */; ?>
<label for="DateStart_Supplier">Bắt đầu:</label>
								<?php /* tag "input" from line 72 */; ?>
<input type="text" name="DateStart_Supplier" id="DateStart_Supplier" value=""/>
							</li>
							<?php /* tag "li" from line 74 */; ?>
<li data-role="fieldcontain">
								<?php /* tag "label" from line 75 */; ?>
<label for="DateEnd_Supplier">Kết thúc:</label>
								<?php /* tag "input" from line 76 */; ?>
<input type="text" name="DateEnd_Supplier" id="DateEnd_Supplier" value=""/>
							</li>
							<?php /* tag "button" from line 78 */; ?>
<button type="submit" data-theme="c">XEM</button>
						</ul>
					</form>
				</div>				
			</div>
			<?php /* tag "div" from line 83 */; ?>
<div class="content-secondary">
				<?php /* tag "div" from line 84 */; ?>
<div data-role="collapsible" data-collapsed="true" data-theme="b" data-content-theme="d">
					<?php /* tag "h3" from line 85 */; ?>
<h3>BÁO CÁO</h3>
					<?php /* tag "ul" from line 86 */; ?>
<ul data-role="listview" data-theme="c" data-dividertheme="d">
						<?php /* tag "li" from line 87 */; ?>
<li><?php 
/* tag "a" from line 87 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLReportPond')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a data-transition="none"<?php echo $_tmp_1 ?>
>1. VỤ AO</a></li>
						<?php /* tag "li" from line 88 */; ?>
<li data-theme="a"><?php 
/* tag "a" from line 88 */ ;
if (null !== ($_tmp_3 = ($ctx->path($ctx->User, 'getApp/getURLReportSupplier')))):  ;
$_tmp_3 = ' href="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<a data-transition="none"<?php echo $_tmp_3 ?>
>2. NHẬP HÀNG</a></li>
					</ul>
				</div>
			</div>
		</div>
		<?php /* tag "div" from line 93 */; ?>
<div data-role="footer" class="footer-docs" data-theme="c"><?php /* tag "p" from line 93 */; ?>
<p>&copy; 2012 SPN Co,ltd.</p></div>
	</div>	
</body>
</html><?php 
/* end */ ;

}

?>
<?php /* 
*** DO NOT EDIT THIS FILE ***

Generated by PHPTAL from /home/a23app/public_html/anhnguyetfarm/mvc/templates/Report.html (edit that file instead) */; ?>