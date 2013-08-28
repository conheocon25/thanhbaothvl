<?php 
function tpl_51a31232_AppCategoryNews__gPCoq3aXAsBuvHpbj27y4Q(PHPTAL $tpl, PHPTAL_Context $ctx) {
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
/* tag "div" from line 10 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('macros.xhtml/Header', $_thistpl) ;
$ctx->popSlots() ;
?>
	

			<?php /* tag "div" from line 12 */; ?>
<div id="main">				
				<?php 
/* tag "div" from line 13 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('macros.xhtml/DateTimeBox', $_thistpl) ;
$ctx->popSlots() ;
?>

				
				<?php /* tag "div" from line 15 */; ?>
<div id="content">					
					<?php /* tag "div" from line 16 */; ?>
<div class="news-box">
					
						<?php /* tag "div" from line 18 */; ?>
<div class="box-title">
							<?php /* tag "img" from line 19 */; ?>
<img src="/data/images/icon.png" width="30"/>
							<?php /* tag "span" from line 20 */; ?>
<span><?php echo phptal_escape($ctx->Title); ?>
</span>
							<?php /* tag "a" from line 21 */; ?>
<a href="/app">&#8629; Trở lại</a>
						</div>						
						<?php /* tag "div" from line 23 */; ?>
<div style="padding:10px;">
							<?php /* tag "table" from line 24 */; ?>
<table border="0" width="100%" cellpadding="0" cellspacing="1" class="manager-table">
								<?php /* tag "tbody" from line 25 */; ?>
<tbody>
									<?php 
/* tag "tr" from line 26 */ ;
$_tmp_1 = $ctx->repeat ;
$_tmp_1->Category = new PHPTAL_RepeatController($ctx->CategoriesNews)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->Category as $ctx->Category): ;
?>
<tr class="content-rows">
										<?php /* tag "td" from line 27 */; ?>
<td width="32" align="center">
											<?php /* tag "div" from line 28 */; ?>
<div><?php echo phptal_escape($ctx->path($ctx->repeat, 'Category/number')); ?>
</div>
										</td>
										<?php /* tag "td" from line 30 */; ?>
<td class="text-hightlight">
											<?php 
/* tag "a" from line 31 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Category, 'getURLUpdLoad')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
>
												<?php /* tag "div" from line 32 */; ?>
<div><?php echo phptal_escape($ctx->path($ctx->Category, 'getName')); ?>
</div>
											</a>
										</td>
										<?php /* tag "td" from line 35 */; ?>
<td class="text-hightlight" align="center">
											<?php 
/* tag "a" from line 36 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Category, 'getURLView')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
>
												<?php /* tag "div" from line 37 */; ?>
<div>Xem tin (<?php /* tag "span" from line 37 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Category, 'getNews/count')); ?>
</span>)</div>
											</a>
										</td>
										<?php /* tag "td" from line 40 */; ?>
<td class="text-hightlight" width="32" align="center">
											<?php 
/* tag "a" from line 41 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Category, 'getURLDelLoad')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
>
												<?php /* tag "div" from line 42 */; ?>
<div><?php /* tag "img" from line 42 */; ?>
<img src="/data/images/remove.png" width="20"/></div>
											</a>
										</td>
									</tr><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

								</tbody>
								<?php /* tag "tfoot" from line 47 */; ?>
<tfoot>
									<?php /* tag "tr" from line 48 */; ?>
<tr>
										<?php /* tag "td" from line 49 */; ?>
<td colspan="4" align="center">
											<?php /* tag "a" from line 50 */; ?>
<a href="/app/category/news/ins/load">
												Thêm mới danh mục
											</a>
										</td>
									</tr>
								</tfoot>
							</table>
						</div>
						<?php /* tag "div" from line 58 */; ?>
<div class="clear"></div>
					</div>
				</div>
				
				<?php /* tag "div" from line 62 */; ?>
<div id="sidebar">										
					<?php /* tag "div" from line 63 */; ?>
<div class="sidebar-box">
						<?php /* tag "div" from line 64 */; ?>
<div class="box-title">
							<?php /* tag "img" from line 65 */; ?>
<img src="/data/images/icon.png" width="30"/>
							<?php /* tag "span" from line 66 */; ?>
<span><?php /* tag "a" from line 66 */; ?>
<a href="/app">Admin</a></span>
							<?php /* tag "a" from line 67 */; ?>
<a href="/signout/load">&#8629; Thoát</a>
						</div>
						<?php 
/* tag "div" from line 69 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('macros.xhtml/AdminMenu', $_thistpl) ;
$ctx->popSlots() ;
?>

					</div>
				</div>				
				<?php /* tag "div" from line 72 */; ?>
<div class="clear"></div>
			</div>
			<?php 
/* tag "div" from line 74 */ ;
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

Generated by PHPTAL from E:\AppWebServer\chuakhaituong.123app.net\mvc\templates\AppCategoryNews.html (edit that file instead) */; ?>