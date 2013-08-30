<?php 
function tpl_508ad312_ExportPondOrder__fVrAYFmci5VZlPjSkYbxjw(PHPTAL $tpl, PHPTAL_Context $ctx) {
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
<script type="text/javascript" language="javascript" src="/mvc/templates/script/user/ExportPondOrder.js"></script>
	</head>
<?php /* tag "body" from line 8 */; ?>
<body>	
	<?php /* tag "div" from line 9 */; ?>
<div id="main" data-role="page" class="order type-interior">
		<?php /* tag "div" from line 10 */; ?>
<div data-role="header" data-position="fixed" data-theme="c">			
			<?php /* tag "div" from line 11 */; ?>
<div align="center">
				<?php 
/* tag "a" from line 12 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Pond, 'getURLExport')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a data-ajax="false"<?php echo $_tmp_1 ?>
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
				<?php /* tag "div" from line 19 */; ?>
<div data-role="collapsible" data-collapsed="false" data-theme="b" data-content-theme="d">
					<?php /* tag "h3" from line 20 */; ?>
<h3><?php echo phptal_escape($ctx->Title); ?>
</h3>
					<?php 
/* tag "ul" from line 21 */ ;
if ($ctx->OE):  ;
?>
<ul data-role="listview" data-theme="c" data-dividertheme="d" data-inset="true">
						<?php 
/* tag "li" from line 22 */ ;
$_tmp_1 = $ctx->repeat ;
$_tmp_1->Detail = new PHPTAL_RepeatController($ctx->path($ctx->OE, 'getDetails'))
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->Detail as $ctx->Detail): ;
?>
<li>
							<?php 
/* tag "a" from line 23 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Detail, 'getURLUpdLoad')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
>
								<?php /* tag "h3" from line 24 */; ?>
<h3>
									<?php /* tag "span" from line 25 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->repeat, 'Detail/number')); ?>
</span>. <?php /* tag "span" from line 25 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Detail, 'getResource/getName')); ?>
</span>
									<?php /* tag "span" from line 26 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Detail, 'getCount')); ?>
</span>(<?php /* tag "span" from line 26 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Detail, 'getResource/getUnit/getName')); ?>
</span>) x<?php /* tag "span" from line 26 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Detail, 'getPricePrint')); ?>
</span>
								</h3>
								<?php /* tag "span" from line 28 */; ?>
<span class="ui-li-count"><?php echo phptal_escape($ctx->path($ctx->Detail, 'getValuePrint')); ?>
</span>
							</a>
							<?php 
/* tag "a" from line 30 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Detail, 'getURLDelLoad')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a data-icon="delete" data-theme="c"<?php echo $_tmp_2 ?>
></a>
						</li><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

						<?php /* tag "li" from line 32 */; ?>
<li data-theme="b">
							<?php /* tag "h3" from line 33 */; ?>
<h3>TỔNG CỘNG:</h3><?php /* tag "span" from line 33 */; ?>
<span class="ui-li-count"><?php echo phptal_escape($ctx->path($ctx->OE, 'getValuePrint')); ?>
</span>
							<?php /* tag "p" from line 34 */; ?>
<p>( <?php /* tag "span" from line 34 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->OE, 'getValueStrPrint')); ?>
</span> )</p>
						</li>
					</ul><?php endif; ?>

				</div>			
			</div>
			<?php /* tag "div" from line 39 */; ?>
<div class="content-secondary">
				<?php 
/* tag "a" from line 40 */ ;
if (null !== ($_tmp_2 = ($ctx->URLCall))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a data-theme="b" data-ajax="false" data-role="button" data-icon="plus"<?php echo $_tmp_2 ?>
>THÊM MỚI</a>
			</div>
		</div>
		<?php /* tag "div" from line 43 */; ?>
<div data-role="footer" class="footer-docs" data-theme="c"><?php /* tag "p" from line 43 */; ?>
<p>&copy; 2012 SPN Co,ltd.</p></div>
	</div>
</body>
</html><?php 
/* end */ ;

}

?>
<?php /* 
*** DO NOT EDIT THIS FILE ***

Generated by PHPTAL from /home/a23app/public_html/anhnguyetfarm/mvc/templates/ExportPondOrder.html (edit that file instead) */; ?>