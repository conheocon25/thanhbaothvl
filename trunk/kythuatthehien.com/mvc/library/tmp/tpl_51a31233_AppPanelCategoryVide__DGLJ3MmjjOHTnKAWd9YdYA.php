<?php 
function tpl_51a31233_AppPanelCategoryVide__DGLJ3MmjjOHTnKAWd9YdYA(PHPTAL $tpl, PHPTAL_Context $ctx) {
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
/* tag "div" from line 9 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('macros.xhtml/Header', $_thistpl) ;
$ctx->popSlots() ;
?>
	
			<?php /* tag "div" from line 10 */; ?>
<div id="main">
				<?php 
/* tag "div" from line 11 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('macros.xhtml/DateTimeBox', $_thistpl) ;
$ctx->popSlots() ;
?>

				<?php /* tag "div" from line 12 */; ?>
<div id="content">
					<?php /* tag "div" from line 13 */; ?>
<div class="news-box">
						<?php /* tag "div" from line 14 */; ?>
<div class="box-title">
							<?php /* tag "img" from line 15 */; ?>
<img src="/data/images/icon.png" width="30"/>
							<?php /* tag "span" from line 16 */; ?>
<span><?php echo phptal_escape($ctx->Title); ?>
</span>
							<?php /* tag "a" from line 17 */; ?>
<a href="/app">&#8629; Trở lại</a>
						</div>						
						<?php /* tag "div" from line 19 */; ?>
<div style="padding:10px;">
							<?php /* tag "table" from line 20 */; ?>
<table border="0" width="100%" cellpadding="0" cellspacing="1" class="manager-table">
								<?php /* tag "tbody" from line 21 */; ?>
<tbody>
									<?php 
/* tag "tr" from line 22 */ ;
$_tmp_1 = $ctx->repeat ;
$_tmp_1->PanelCategoryVideo = new PHPTAL_RepeatController($ctx->PanelCategoryVideos)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->PanelCategoryVideo as $ctx->PanelCategoryVideo): ;
?>
<tr class="content-rows">
										<?php /* tag "td" from line 23 */; ?>
<td width="32" align="center">
											<?php /* tag "div" from line 24 */; ?>
<div><?php echo phptal_escape($ctx->path($ctx->repeat, 'PanelCategoryVideo/number')); ?>
</div>
										</td>
										<?php /* tag "td" from line 26 */; ?>
<td>
											<?php /* tag "div" from line 27 */; ?>
<div><?php echo phptal_escape($ctx->path($ctx->PanelCategoryVideo, 'getCategoryVideo/getName')); ?>
</div>
										</td>
										<?php /* tag "td" from line 29 */; ?>
<td class="text-hightlight" width="32" align="center">
											<?php 
/* tag "a" from line 30 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->PanelCategoryVideo, 'getURLDelLoad')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
>
												<?php /* tag "div" from line 31 */; ?>
<div><?php /* tag "img" from line 31 */; ?>
<img src="/data/images/remove.png" width="20"/></div>
											</a>
										</td>
									</tr><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

								</tbody>
								<?php /* tag "tfoot" from line 36 */; ?>
<tfoot>
									<?php /* tag "tr" from line 37 */; ?>
<tr>
										<?php /* tag "td" from line 38 */; ?>
<td colspan="5" align="center">
											<?php /* tag "a" from line 39 */; ?>
<a href="app/panel/category/video/ins/load">
												<?php /* tag "div" from line 40 */; ?>
<div><?php /* tag "img" from line 40 */; ?>
<img src="/data/images/add.png" width="20"/></div>
											</a>
										</td>
									</tr>
								</tfoot>
							</table>
						</div>
						<?php /* tag "div" from line 47 */; ?>
<div class="clear"></div>
					</div>
				</div>
				
				<?php /* tag "div" from line 51 */; ?>
<div id="sidebar">										
					<?php /* tag "div" from line 52 */; ?>
<div class="sidebar-box">
						<?php /* tag "div" from line 53 */; ?>
<div class="box-title">
							<?php /* tag "img" from line 54 */; ?>
<img src="/data/images/icon.png" width="30"/>
							<?php /* tag "span" from line 55 */; ?>
<span><?php /* tag "a" from line 55 */; ?>
<a href="/changepass/load">Admin</a></span>
							<?php /* tag "a" from line 56 */; ?>
<a href="/signout/load">&#8629; Thoát</a>
						</div>
						<?php 
/* tag "div" from line 58 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('macros.xhtml/AdminMenu', $_thistpl) ;
$ctx->popSlots() ;
?>

					</div>
				</div>
				<?php /* tag "div" from line 61 */; ?>
<div class="clear"></div>
			</div>
			<?php 
/* tag "div" from line 63 */ ;
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

Generated by PHPTAL from E:\AppWebServer\chuakhaituong.123app.net\mvc\templates\AppPanelCategoryVideo.html (edit that file instead) */; ?>