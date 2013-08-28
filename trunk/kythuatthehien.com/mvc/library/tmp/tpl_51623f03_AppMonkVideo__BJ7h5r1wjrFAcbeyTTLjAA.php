<?php 
function tpl_51623f03_AppMonkVideo__BJ7h5r1wjrFAcbeyTTLjAA(PHPTAL $tpl, PHPTAL_Context $ctx) {
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
					
						<?php /* tag "div" from line 17 */; ?>
<div class="box-title">
							<?php /* tag "img" from line 18 */; ?>
<img src="/data/images/icon.png" width="30"/>
							<?php /* tag "span" from line 19 */; ?>
<span><?php echo phptal_escape($ctx->Title); ?>
</span>
							<?php /* tag "a" from line 20 */; ?>
<a href="/app/monk">&#8629; Trở lại</a>
						</div>						
						<?php /* tag "div" from line 22 */; ?>
<div style="padding:10px;">
							<?php /* tag "table" from line 23 */; ?>
<table border="0" width="100%" cellpadding="0" cellspacing="1" class="manager-table">
								<?php /* tag "tbody" from line 24 */; ?>
<tbody>
									<?php 
/* tag "tr" from line 25 */ ;
$_tmp_1 = $ctx->repeat ;
$_tmp_1->VM = new PHPTAL_RepeatController($ctx->path($ctx->Monk, 'getVMs'))
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->VM as $ctx->VM): ;
?>
<tr class="content-rows">
										<?php /* tag "td" from line 26 */; ?>
<td width="32" align="center">
											<?php /* tag "div" from line 27 */; ?>
<div><?php echo phptal_escape($ctx->path($ctx->repeat, 'VM/number')); ?>
</div>
										</td>
										<?php /* tag "td" from line 29 */; ?>
<td class="text-hightlight">
											<?php 
/* tag "a" from line 30 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->VM, 'getURLUpdLoad')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
>
												<?php /* tag "div" from line 31 */; ?>
<div><?php echo phptal_escape($ctx->path($ctx->VM, 'getVideo/getName')); ?>
</div>
											</a>
										</td>
										<?php /* tag "td" from line 34 */; ?>
<td><?php echo phptal_escape($ctx->path($ctx->VM, 'getVideo/getTime')); ?>
</td>
										<?php /* tag "td" from line 35 */; ?>
<td class="text-hightlight" width="32" align="center">
											<?php 
/* tag "a" from line 36 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->VM, 'getURLDelLoad')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
>
												<?php /* tag "div" from line 37 */; ?>
<div><?php /* tag "img" from line 37 */; ?>
<img src="/data/images/remove.png" width="20"/></div>
											</a>
										</td>
									</tr><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

								</tbody>
								<?php /* tag "tfoot" from line 42 */; ?>
<tfoot>
									<?php /* tag "tr" from line 43 */; ?>
<tr>
										<?php /* tag "td" from line 44 */; ?>
<td colspan="4" align="center">
											<?php 
/* tag "a" from line 45 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Monk, 'getURLVideoInsLoad')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
>
												<?php /* tag "div" from line 46 */; ?>
<div><?php /* tag "img" from line 46 */; ?>
<img src="/data/images/add.png" width="20"/></div>
											</a>
										</td>
									</tr>
								</tfoot>
							</table>
						</div>
						<?php /* tag "div" from line 53 */; ?>
<div class="clear"></div>
					</div>
				</div>
				
				<?php /* tag "div" from line 57 */; ?>
<div id="sidebar">										
					<?php /* tag "div" from line 58 */; ?>
<div class="sidebar-box">
						<?php /* tag "div" from line 59 */; ?>
<div class="box-title">
							<?php /* tag "img" from line 60 */; ?>
<img src="/data/images/icon.png" width="30"/>
							<?php /* tag "span" from line 61 */; ?>
<span>Admin</span>
							<?php /* tag "a" from line 62 */; ?>
<a href="/signout/load">&#8629; Thoát</a>
						</div>						
						<?php /* tag "div" from line 64 */; ?>
<div class="manager-menu">
							<?php /* tag "ul" from line 65 */; ?>
<ul>
								<?php 
/* tag "a" from line 66 */ ;
$_tmp_1 = $ctx->repeat ;
$_tmp_1->Monk1 = new PHPTAL_RepeatController($ctx->Monks)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->Monk1 as $ctx->Monk1): ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Monk1, 'getURLVideo')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
>
									<?php 
/* tag "li" from line 67 */ ;
if (null !== ($_tmp_3 = ($ctx->Monk->getId()==$ctx->Monk1->getId()?'menu-select':''))):  ;
$_tmp_3 = ' class="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<li<?php echo $_tmp_3 ?>
>
										<?php /* tag "span" from line 68 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Monk1, 'getName')); ?>
</span> (<?php /* tag "span" from line 68 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Monk1, 'getVMs/count')); ?>
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
				<?php /* tag "div" from line 75 */; ?>
<div class="clear"></div>
			</div>
			<?php 
/* tag "div" from line 77 */ ;
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

Generated by PHPTAL from E:\AppWebServer\chuakhaituong.123app.net\mvc\templates\AppMonkVideo.html (edit that file instead) */; ?>