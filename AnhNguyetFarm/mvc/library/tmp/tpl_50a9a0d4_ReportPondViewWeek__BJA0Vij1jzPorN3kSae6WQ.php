<?php 
function tpl_50a9a0d4_ReportPondViewWeek__BJA0Vij1jzPorN3kSae6WQ(PHPTAL $tpl, PHPTAL_Context $ctx) {
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
	<!-- WEEK -->
	<?php 
/* tag "div" from line 9 */ ;
$_tmp_1 = $ctx->repeat ;
$_tmp_1->Track = new PHPTAL_RepeatController($ctx->path($ctx->PondSession, 'getLogTrackings'))
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->Track as $ctx->Track): ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Track, 'getIdPrint')))):  ;
$_tmp_2 = ' id="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<div data-role="page" class="type-interior"<?php echo $_tmp_2 ?>
>
		<?php /* tag "div" from line 10 */; ?>
<div data-role="header" data-theme="d">
			<?php /* tag "div" from line 11 */; ?>
<div align="center">
				<?php 
/* tag "a" from line 12 */ ;
if (null !== ($_tmp_3 = ($ctx->path($ctx->User, 'getApp/getURLApp')))):  ;
$_tmp_3 = ' href="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<a<?php echo $_tmp_3 ?>
>
					<?php /* tag "img" from line 13 */; ?>
<img border="0" width="100%" src="/data/images/app/banner.jpg"/>
				</a>
			</div>
		</div>
		<?php /* tag "div" from line 17 */; ?>
<div data-role="content">
			<?php /* tag "div" from line 18 */; ?>
<div class="content-primary">
				<?php /* tag "H3" from line 19 */; ?>
<H3>TỔNG HỢP <?php /* tag "span" from line 19 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Track, 'getDateRangePrint')); ?>
</span> CỦA <?php /* tag "span" from line 19 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Pond, 'getName')); ?>
</span></H3>
				<?php /* tag "div" from line 20 */; ?>
<div data-role="collapsible" data-collapsed="true" data-theme="b" data-content-theme="d">
					<?php /* tag "h3" from line 21 */; ?>
<h3>THỨC ĂN NHẬP VÀO</h3>
					<?php /* tag "ul" from line 22 */; ?>
<ul data-role="listview" data-theme="c" data-dividertheme="d">
						<?php 
/* tag "li" from line 23 */ ;
$_tmp_3 = $ctx->repeat ;
$_tmp_3->Order = new PHPTAL_RepeatController($ctx->path($ctx->Track, 'getOrderImports'))
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_3->Order as $ctx->Order): ;
?>
<li>
							<?php /* tag "div" from line 24 */; ?>
<div data-role="collapsible" data-collapsed="true" data-theme="c" data-content-theme="d">
								<?php /* tag "h3" from line 25 */; ?>
<h3><?php echo phptal_escape($ctx->path($ctx->Order, 'getDatePrint')); ?>
</h3>
								<?php /* tag "ul" from line 26 */; ?>
<ul data-role="listview" data-theme="d" data-dividertheme="d">
									<?php 
/* tag "li" from line 27 */ ;
$_tmp_4 = $ctx->repeat ;
$_tmp_4->Detail = new PHPTAL_RepeatController($ctx->path($ctx->Order, 'getDetails'))
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_4->Detail as $ctx->Detail): ;
?>
<li>										
										<?php /* tag "span" from line 28 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->repeat, 'Detail/number')); ?>
</span>. <?php /* tag "span" from line 28 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Detail, 'getResource/getName')); ?>
</span>
										<?php /* tag "span" from line 29 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Detail, 'getCount')); ?>
</span>(<?php /* tag "span" from line 29 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Detail, 'getResource/getUnit/getName')); ?>
</span>) x<?php /* tag "span" from line 29 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Detail, 'getPricePrint')); ?>
</span>
										<?php /* tag "span" from line 30 */; ?>
<span class="ui-li-count"><?php echo phptal_escape($ctx->path($ctx->Detail, 'getValuePrint')); ?>
</span>
									</li><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

									<?php /* tag "li" from line 32 */; ?>
<li data-theme="b">
										<?php /* tag "h3" from line 33 */; ?>
<h3>TỔNG CỘNG:</h3><?php /* tag "span" from line 33 */; ?>
<span class="ui-li-count"><?php echo phptal_escape($ctx->path($ctx->Order, 'getValuePrint')); ?>
</span>
										<?php /* tag "p" from line 34 */; ?>
<p>( <?php /* tag "span" from line 34 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Order, 'getValueStrPrint')); ?>
</span> )</p>
									</li>
								</ul>						
							</div>
						</li><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

					</ul>
				</div>
				<?php /* tag "div" from line 41 */; ?>
<div data-role="collapsible" data-collapsed="true" data-theme="b" data-content-theme="d">
					<?php /* tag "h3" from line 42 */; ?>
<h3>THỨC ĂN XUẤT AO</h3>
					<?php /* tag "ul" from line 43 */; ?>
<ul data-role="listview" data-theme="c" data-dividertheme="d">
						<?php 
/* tag "li" from line 44 */ ;
$_tmp_4 = $ctx->repeat ;
$_tmp_4->Order = new PHPTAL_RepeatController($ctx->path($ctx->Track, 'getOrders'))
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_4->Order as $ctx->Order): ;
?>
<li>
							<?php /* tag "div" from line 45 */; ?>
<div data-role="collapsible" data-collapsed="true" data-theme="c" data-content-theme="d">
								<?php /* tag "h3" from line 46 */; ?>
<h3><?php echo phptal_escape($ctx->path($ctx->Order, 'getDatePrint')); ?>
</h3>
								<?php /* tag "ul" from line 47 */; ?>
<ul data-role="listview" data-theme="d" data-dividertheme="d">
									<?php 
/* tag "li" from line 48 */ ;
$_tmp_3 = $ctx->repeat ;
$_tmp_3->Detail = new PHPTAL_RepeatController($ctx->path($ctx->Order, 'getDetails'))
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_3->Detail as $ctx->Detail): ;
?>
<li>										
										<?php /* tag "span" from line 49 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->repeat, 'Detail/number')); ?>
</span>. <?php /* tag "span" from line 49 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Detail, 'getResource/getName')); ?>
</span>
										<?php /* tag "span" from line 50 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Detail, 'getCount')); ?>
</span>(<?php /* tag "span" from line 50 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Detail, 'getResource/getUnit/getName')); ?>
</span>) x<?php /* tag "span" from line 50 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Detail, 'getPricePrint')); ?>
</span>
										<?php /* tag "span" from line 51 */; ?>
<span class="ui-li-count"><?php echo phptal_escape($ctx->path($ctx->Detail, 'getValuePrint')); ?>
</span>
									</li><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

									<?php /* tag "li" from line 53 */; ?>
<li data-theme="b">
										<?php /* tag "h3" from line 54 */; ?>
<h3>TỔNG CỘNG:</h3><?php /* tag "span" from line 54 */; ?>
<span class="ui-li-count"><?php echo phptal_escape($ctx->path($ctx->Order, 'getValuePrint')); ?>
</span>
										<?php /* tag "p" from line 55 */; ?>
<p>( <?php /* tag "span" from line 55 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Order, 'getValueStrPrint')); ?>
</span> )</p>
									</li>
								</ul>						
							</div>
						</li><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

					</ul>
				</div>				
				<!--
				<div data-role="collapsible" data-collapsed="true" data-theme="b" data-content-theme="d">
					<h3>THUỐC XUẤT AO</h3>
					<ul data-role="listview" data-theme="c" data-dividertheme="d">
						<li tal:repeat="Order Track/getOrders1">
							<div data-role="collapsible" data-collapsed="true" data-theme="c" data-content-theme="d">
								<h3 tal:content="Order/getDatePrint"/>
								<ul data-role="listview" data-theme="d" data-dividertheme="d">
									<li tal:repeat="Detail Order/getDetails">										
										<span tal:content="repeat/Detail/number" />. <span tal:content="Detail/getResource/getName" />
										<span tal:content="Detail/getCount"/>(<span tal:content="Detail/getResource/getUnit/getName"/>) x<span tal:content="Detail/getPricePrint"/>
										<span class="ui-li-count" tal:content="Detail/getValuePrint" />
									</li>
									<li data-theme="b">
										<h3>TỔNG CỘNG:</h3><span class="ui-li-count" tal:content="Order/getValuePrint"/>
										<p>( <span tal:content="Order/getValueStrPrint"/> )</p>
									</li>
								</ul>						
							</div>
						</li>
					</ul>
				</div>
				!-->
			</div>
			<?php /* tag "div" from line 86 */; ?>
<div class="content-secondary">
				<?php /* tag "div" from line 87 */; ?>
<div data-role="collapsible" data-collapsed="true" data-theme="b" data-content-theme="d">
					<?php /* tag "h3" from line 88 */; ?>
<h3>DANH SÁCH TUẦN</h3>
					<?php /* tag "ul" from line 89 */; ?>
<ul data-role="listview" data-theme="c" data-dividertheme="d">
						<?php 
/* tag "li" from line 90 */ ;
$_tmp_3 = $ctx->repeat ;
$_tmp_3->Track1 = new PHPTAL_RepeatController($ctx->path($ctx->PondSession1, 'getLogTrackings'))
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_3->Track1 as $ctx->Track1): ;
if (null !== ($_tmp_4 = ($ctx->Track->getIdPrint()==$ctx->Track1->getIdPrint()?'a':'c'))):  ;
$_tmp_4 = ' data-theme="'.phptal_escape($_tmp_4).'"' ;
else:  ;
$_tmp_4 = '' ;
endif ;
?>
<li<?php echo $_tmp_4 ?>
>
							<?php 
/* tag "a" from line 91 */ ;
if (null !== ($_tmp_5 = ('#'.$ctx->Track1->getIdPrint()))):  ;
$_tmp_5 = ' href="'.phptal_escape($_tmp_5).'"' ;
else:  ;
$_tmp_5 = '' ;
endif ;
?>
<a data-ajax="false"<?php echo $_tmp_5 ?>
><?php echo phptal_escape($ctx->path($ctx->Track1, 'getDateRangePrint')); ?>
</a>
						</li><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

					</ul>
				</div>
			</div>
		</div>
		<?php /* tag "div" from line 97 */; ?>
<div data-role="footer" class="footer-docs" data-theme="c"><?php /* tag "p" from line 97 */; ?>
<p>&copy; 2012 SPN Co,Ltd.</p></div>
	</div><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>
			
</body>
</html><?php 
/* end */ ;

}

?>
<?php /* 
*** DO NOT EDIT THIS FILE ***

Generated by PHPTAL from /home/a23app/public_html/anhnguyetfarm/mvc/templates/ReportPondViewWeek.html (edit that file instead) */; ?>