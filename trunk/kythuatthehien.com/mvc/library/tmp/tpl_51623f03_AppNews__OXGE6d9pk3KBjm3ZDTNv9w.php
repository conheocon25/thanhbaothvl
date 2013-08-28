<?php 
function tpl_51623f03_AppNews__OXGE6d9pk3KBjm3ZDTNv9w(PHPTAL $tpl, PHPTAL_Context $ctx) {
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

				<?php /* tag "div" from line 14 */; ?>
<div id="content">
					<?php /* tag "div" from line 15 */; ?>
<div class="news-box">
						<?php /* tag "div" from line 16 */; ?>
<div class="box-title">
							<?php /* tag "img" from line 17 */; ?>
<img src="/data/images/icon.png" width="30"/>
							<?php /* tag "span" from line 18 */; ?>
<span><?php echo phptal_escape($ctx->Title); ?>
</span>
							<?php /* tag "a" from line 19 */; ?>
<a href="/app/category/news">&#8629; Trở lại</a>
						</div>						
						<?php /* tag "div" from line 21 */; ?>
<div style="padding:10px;">
							<?php /* tag "table" from line 22 */; ?>
<table border="0" width="100%" cellpadding="0" cellspacing="1" class="manager-table">
								<?php /* tag "tbody" from line 23 */; ?>
<tbody>
									<?php 
/* tag "tr" from line 24 */ ;
$_tmp_1 = $ctx->repeat ;
$_tmp_1->News = new PHPTAL_RepeatController($ctx->path($ctx->Category, 'getNews'))
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->News as $ctx->News): ;
?>
<tr class="content-rows">
										<?php /* tag "td" from line 25 */; ?>
<td width="32" align="center">
											<?php /* tag "div" from line 26 */; ?>
<div><?php echo phptal_escape($ctx->path($ctx->repeat, 'News/number')); ?>
</div>
										</td>
										<?php /* tag "td" from line 28 */; ?>
<td width="32" align="center">
											<?php 
/* tag "span" from line 29 */ ;
if ($ctx->path($ctx->News, 'isVIP')):  ;
?>
<span>
												<?php /* tag "img" from line 30 */; ?>
<img src="/data/images/vip.gif" border="0" width="20" style="position:absolute; margin-left:3px;"/>
											</span><?php endif; ?>

										</td>
										<?php /* tag "td" from line 33 */; ?>
<td class="text-hightlight">											
											<?php 
/* tag "a" from line 34 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->News, 'getURLUpdLoad')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
>
												<?php /* tag "div" from line 35 */; ?>
<div><?php echo phptal_escape($ctx->path($ctx->News, 'getTitle')); ?>
</div>
											</a>
										</td>
										<?php /* tag "td" from line 38 */; ?>
<td width="32" align="center" class="text-hightlight">
											<?php 
/* tag "a" from line 39 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->News, 'getURLDelLoad')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
>
												<?php /* tag "div" from line 40 */; ?>
<div><?php /* tag "img" from line 40 */; ?>
<img src="/data/images/remove.png" width="20"/></div>
											</a>
										</td>
									</tr><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

								</tbody>
								<?php /* tag "tfoot" from line 45 */; ?>
<tfoot>
									<?php /* tag "tr" from line 46 */; ?>
<tr>
										<?php /* tag "td" from line 47 */; ?>
<td colspan="4" align="center">
											<?php 
/* tag "a" from line 48 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Category, 'getURLNewsInsLoad')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
>
												Thêm mới tin tức
											</a>
										</td>
									</tr>
								</tfoot>
							</table>
						</div>
						<?php /* tag "div" from line 56 */; ?>
<div class="clear"></div>
					</div>
				</div>
				
				<?php /* tag "div" from line 60 */; ?>
<div id="sidebar">										
					<?php /* tag "div" from line 61 */; ?>
<div class="sidebar-box">
						<?php /* tag "div" from line 62 */; ?>
<div class="box-title">
							<?php /* tag "img" from line 63 */; ?>
<img src="/data/images/icon.png" width="30"/>
							<?php /* tag "span" from line 64 */; ?>
<span>Admin</span>
							<?php /* tag "a" from line 65 */; ?>
<a href="/signout/load">&#8629; Thoát</a>
						</div>
						
						<?php /* tag "div" from line 68 */; ?>
<div class="manager-menu">
							<?php /* tag "ul" from line 69 */; ?>
<ul>
								<?php 
/* tag "a" from line 70 */ ;
$_tmp_1 = $ctx->repeat ;
$_tmp_1->Category1 = new PHPTAL_RepeatController($ctx->Categories)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->Category1 as $ctx->Category1): ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Category1, 'getURLView')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
>
									<?php 
/* tag "li" from line 71 */ ;
if (null !== ($_tmp_3 = ($ctx->Category->getId()==$ctx->Category1->getId()?'menu-select':'normal'))):  ;
$_tmp_3 = ' class="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<li<?php echo $_tmp_3 ?>
>
										<?php /* tag "span" from line 72 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Category1, 'getName')); ?>
</span> (<?php /* tag "span" from line 72 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Category1, 'getNews/count')); ?>
</span>)
									</li>
								</a><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>
												
							</ul>
						</div>
					</div>
				</div>
				<?php /* tag "div" from line 79 */; ?>
<div class="clear"></div>
			</div>

			<?php 
/* tag "div" from line 82 */ ;
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

Generated by PHPTAL from E:\AppWebServer\chuakhaituong.123app.net\mvc\templates\AppNews.html (edit that file instead) */; ?>