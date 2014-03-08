<?php 
function tpl_509733ea_ReportSupplierDetail__myw8CvAB4C1xDojsJ2kcgw(PHPTAL $tpl, PHPTAL_Context $ctx) {
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
<script type="text/javascript" language="javascript" src="/mvc/templates/script/user/ReportSupplierDetail.js"></script>
	</head>
<?php /* tag "body" from line 8 */; ?>
<body>
	<?php /* tag "div" from line 9 */; ?>
<div data-role="page" class="type-interior">
		<?php /* tag "div" from line 10 */; ?>
<div data-role="header" data-position="fixed" data-theme="f">
			<?php /* tag "h1" from line 11 */; ?>
<h1><?php echo phptal_escape($ctx->Title); ?>
</h1>
			<?php 
/* tag "a" from line 12 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLReportSupplier')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a data-icon="back" data-ajax="false"<?php echo $_tmp_1 ?>
>LUI</a>
			<?php /* tag "a" from line 13 */; ?>
<a href="/signout/load" data-icon="delete" data-transition="fade">THOÁT</a>
		</div>
		<?php /* tag "div" from line 15 */; ?>
<div data-role="content">
			<?php /* tag "div" from line 16 */; ?>
<div class="content-primary">
				<?php 
/* tag "div" from line 17 */ ;
$_tmp_1 = $ctx->repeat ;
$_tmp_1->Supplier = new PHPTAL_RepeatController($ctx->Suppliers)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->Supplier as $ctx->Supplier): ;
?>
<div data-role="collapsible" data-collapsed="true" data-theme="b" data-content-theme="d">
					<?php /* tag "h3" from line 18 */; ?>
<h3><?php /* tag "span" from line 18 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->repeat, 'Supplier/number')); ?>
</span>. <?php /* tag "span" from line 18 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Supplier, 'getName')); ?>
</span></h3>
					<?php /* tag "div" from line 19 */; ?>
<div data-role="collapsible" data-collapsed="true" data-theme="a" data-content-theme="d">
						<?php /* tag "h3" from line 20 */; ?>
<h3>1. NHẬP HÀNG</h3>
						<?php /* tag "ul" from line 21 */; ?>
<ul data-role="listview" data-inset="true">
							<?php 
/* tag "li" from line 22 */ ;
$_tmp_2 = $ctx->repeat ;
$_tmp_2->Order = new PHPTAL_RepeatController($ctx->path($ctx->Supplier, 'getOrdersTracking'))
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_2->Order as $ctx->Order): ;
?>
<li>
								<?php /* tag "strong" from line 23 */; ?>
<strong>
									<?php /* tag "span" from line 24 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->repeat, 'Order/number')); ?>
</span>. <?php /* tag "span" from line 24 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Order, 'getDatePrint')); ?>
</span>, 
									<?php /* tag "span" from line 25 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Order, 'getNote')); ?>
</span>
								</strong>								
								<?php /* tag "p" from line 27 */; ?>
<p class="ui-li-aside"><?php /* tag "strong" from line 27 */; ?>
<strong><?php echo phptal_escape($ctx->path($ctx->Order, 'getValuePrint')); ?>
</strong></p>
							</li><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

							<?php /* tag "li" from line 29 */; ?>
<li>
								<?php /* tag "h3" from line 30 */; ?>
<h3>TỔNG CỘNG</h3>
								<?php /* tag "p" from line 31 */; ?>
<p class="ui-li-aside"><?php /* tag "strong" from line 31 */; ?>
<strong><?php echo phptal_escape($ctx->path($ctx->Supplier, 'getOrdersTrackingValuePrint')); ?>
</strong></p>
							</li>
						</ul>
					</div>
					<?php /* tag "div" from line 35 */; ?>
<div data-role="collapsible" data-collapsed="true" data-theme="a" data-content-theme="d">
						<?php /* tag "h3" from line 36 */; ?>
<h3>2. TRẢ TIỀN</h3>
						<?php /* tag "ul" from line 37 */; ?>
<ul data-role="listview" data-inset="true">
							<?php 
/* tag "li" from line 38 */ ;
$_tmp_2 = $ctx->repeat ;
$_tmp_2->Paid = new PHPTAL_RepeatController($ctx->path($ctx->Supplier, 'getPaidsTracking'))
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_2->Paid as $ctx->Paid): ;
?>
<li>
								<?php /* tag "strong" from line 39 */; ?>
<strong>
									<?php /* tag "span" from line 40 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->repeat, 'Paid/number')); ?>
</span>. <?php /* tag "span" from line 40 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Paid, 'getDatePrint')); ?>
</span>, 
									<?php /* tag "span" from line 41 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Paid, 'getNote')); ?>
</span>
								</strong>								
								<?php /* tag "p" from line 43 */; ?>
<p class="ui-li-aside"><?php /* tag "strong" from line 43 */; ?>
<strong><?php echo phptal_escape($ctx->path($ctx->Paid, 'getValuePrint')); ?>
</strong></p>
							</li><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

							<?php /* tag "li" from line 45 */; ?>
<li>
								<?php /* tag "h3" from line 46 */; ?>
<h3>TỔNG CỘNG</h3>
								<?php /* tag "p" from line 47 */; ?>
<p class="ui-li-aside"><?php /* tag "strong" from line 47 */; ?>
<strong><?php echo phptal_escape($ctx->path($ctx->Supplier, 'getPaidsTrackingValuePrint')); ?>
</strong></p>
							</li>
						</ul>
					</div>
					<?php /* tag "div" from line 51 */; ?>
<div data-role="collapsible" data-collapsed="true" data-theme="a" data-content-theme="d">
						<?php /* tag "h3" from line 52 */; ?>
<h3>3. TỔNG KẾT</h3>
						<?php /* tag "ul" from line 53 */; ?>
<ul data-role="listview" data-inset="true">
							<?php /* tag "li" from line 54 */; ?>
<li><?php /* tag "strong" from line 54 */; ?>
<strong>NỢ TRƯỚC</strong><?php /* tag "p" from line 54 */; ?>
<p class="ui-li-aside"><?php /* tag "strong" from line 54 */; ?>
<strong><?php echo phptal_escape($ctx->path($ctx->Supplier, 'getOldDebtPrint')); ?>
</strong></p></li>
							<?php /* tag "li" from line 55 */; ?>
<li><?php /* tag "strong" from line 55 */; ?>
<strong>NHẬP HÀNG</strong><?php /* tag "p" from line 55 */; ?>
<p class="ui-li-aside"><?php /* tag "strong" from line 55 */; ?>
<strong><?php echo phptal_escape($ctx->path($ctx->Supplier, 'getOrdersTrackingValuePrint')); ?>
</strong></p></li>
							<?php /* tag "li" from line 56 */; ?>
<li><?php /* tag "strong" from line 56 */; ?>
<strong>TRẢ TIỀN</strong><?php /* tag "p" from line 56 */; ?>
<p class="ui-li-aside"><?php /* tag "strong" from line 56 */; ?>
<strong><?php echo phptal_escape($ctx->path($ctx->Supplier, 'getPaidsTrackingValuePrint')); ?>
</strong></p></li>
							<?php /* tag "li" from line 57 */; ?>
<li><?php /* tag "strong" from line 57 */; ?>
<strong>DƯ NỢ MỚI</strong><?php /* tag "p" from line 57 */; ?>
<p class="ui-li-aside"><?php /* tag "strong" from line 57 */; ?>
<strong><?php echo phptal_escape($ctx->path($ctx->Supplier, 'getNewDebtPrint')); ?>
</strong></p></li>
						</ul>
					</div>
				</div><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

				<?php /* tag "div" from line 61 */; ?>
<div data-role="collapsible" data-collapsed="false" data-theme="b" data-content-theme="d">
					<?php /* tag "h3" from line 62 */; ?>
<h3>TỔNG KẾT</h3>
					<?php /* tag "ul" from line 63 */; ?>
<ul data-role="listview" data-inset="true">
						<?php 
/* tag "li" from line 64 */ ;
$_tmp_2 = $ctx->repeat ;
$_tmp_2->Supplier = new PHPTAL_RepeatController($ctx->Suppliers)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_2->Supplier as $ctx->Supplier): ;
?>
<li>
							<?php /* tag "strong" from line 65 */; ?>
<strong>
								<?php /* tag "span" from line 66 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->repeat, 'Supplier/number')); ?>
</span>. <?php /* tag "span" from line 66 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Supplier, 'getName')); ?>
</span>
							</strong>
							<?php /* tag "p" from line 68 */; ?>
<p class="ui-li-aside"><?php /* tag "strong" from line 68 */; ?>
<strong><?php echo phptal_escape($ctx->path($ctx->Supplier, 'getNewDebtPrint')); ?>
</strong></p>
						</li><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

						<?php /* tag "li" from line 70 */; ?>
<li>
							<?php /* tag "strong" from line 71 */; ?>
<strong>
								TỔNG DƯ NỢ MỚI
							</strong>
							<?php /* tag "p" from line 74 */; ?>
<p class="ui-li-aside"><?php /* tag "strong" from line 74 */; ?>
<strong><?php echo phptal_escape($ctx->SNewDebt); ?>
</strong></p>
						</li>
					</ul>
				</div>				
			</div><!--/content-primary -->
			<?php /* tag "div" from line 79 */; ?>
<div class="content-secondary">
				<?php /* tag "div" from line 80 */; ?>
<div data-role="collapsible" data-collapsed="false" data-theme="b" data-content-theme="d">
					<?php /* tag "h3" from line 81 */; ?>
<h3>BÁO CÁO</h3>
					<?php /* tag "ul" from line 82 */; ?>
<ul data-role="listview" data-theme="c" data-dividertheme="d">
						<?php /* tag "li" from line 83 */; ?>
<li><?php 
/* tag "a" from line 83 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLReportExport')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a data-ajax="false"<?php echo $_tmp_1 ?>
>XUẤT HÀNG</a></li>
						<?php /* tag "li" from line 84 */; ?>
<li data-theme="a"><?php 
/* tag "a" from line 84 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->User, 'getApp/getURLReportSupplier')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a data-ajax="false"<?php echo $_tmp_2 ?>
>NHẬP HÀNG</a></li>
						<?php /* tag "li" from line 85 */; ?>
<li><?php 
/* tag "a" from line 85 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLReportEmployee')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a data-ajax="false"<?php echo $_tmp_1 ?>
>NHÂN VIÊN</a></li>
						<?php /* tag "li" from line 86 */; ?>
<li><?php 
/* tag "a" from line 86 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->User, 'getApp/getURLReportOther')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a data-ajax="false"<?php echo $_tmp_2 ?>
>CHI KHÁC</a></li>
					</ul>			
				</div>				
			</div>
		</div>
		<?php /* tag "div" from line 91 */; ?>
<div data-role="footer" class="footer-docs" data-theme="c"><?php /* tag "p" from line 91 */; ?>
<p>&copy; 2012 SPN Co,ltd.</p></div>
	</div>
</body>
</html><?php 
/* end */ ;

}

?>
<?php /* 
*** DO NOT EDIT THIS FILE ***

Generated by PHPTAL from /home/a23app/public_html/anhnguyetfarm/mvc/templates/ReportSupplierDetail.html (edit that file instead) */; ?>