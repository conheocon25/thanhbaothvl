<?php 
function tpl_51623f04_LibraryVideoMonk__LRlLDPLRDPTOUp9c2hpuxA(PHPTAL $tpl, PHPTAL_Context $ctx) {
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

				<?php 
/* tag "div" from line 14 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('macros.xhtml/TextGo', $_thistpl) ;
$ctx->popSlots() ;
?>

				
				<?php /* tag "div" from line 16 */; ?>
<div id="left-mini">
					<?php /* tag "div" from line 17 */; ?>
<div class="sidebar-box-mini">
						<?php /* tag "div" from line 18 */; ?>
<div class="box-title">
							<?php /* tag "img" from line 19 */; ?>
<img src="/data/images/icon.png" width="30"/>
							<?php /* tag "span" from line 20 */; ?>
<span>Chuyên Đề</span>
						</div>
						<?php /* tag "div" from line 22 */; ?>
<div class="sidebar-box-content">
							<?php /* tag "ul" from line 23 */; ?>
<ul>
								<?php 
/* tag "a" from line 24 */ ;
$_tmp_1 = $ctx->repeat ;
$_tmp_1->Category = new PHPTAL_RepeatController($ctx->CategoriesVideo)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->Category as $ctx->Category): ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Category, 'getURLRead')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
>
									<?php /* tag "li" from line 25 */; ?>
<li>
										<?php /* tag "span" from line 26 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Category, 'getName')); ?>
</span> (<?php /* tag "span" from line 26 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Category, 'getVLs/count')); ?>
</span>)
									</li>
								</a><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

							</ul>
						</div>
						<?php /* tag "div" from line 31 */; ?>
<div class="clear"></div>
					</div>
				</div>
				<?php /* tag "div" from line 34 */; ?>
<div id="mid-mini">
					<?php /* tag "div" from line 35 */; ?>
<div class="news-box-mini">
						<?php /* tag "div" from line 36 */; ?>
<div class="box-title">
							<?php /* tag "img" from line 37 */; ?>
<img src="/data/images/icon.png" width="30"/>
							<?php /* tag "span" from line 38 */; ?>
<span><?php /* tag "small" from line 38 */; ?>
<small style="font-size:15px;"><?php echo phptal_escape($ctx->path($ctx->Monk, 'getName')); ?>
</small> (<?php /* tag "small" from line 38 */; ?>
<small style="font-size:15px;"><?php echo phptal_escape($ctx->path($ctx->Monk, 'getVMs/count')); ?>
</small> Videos)</span>
						</div>
						<?php /* tag "div" from line 40 */; ?>
<div style="padding:10px;">
							<?php /* tag "ul" from line 41 */; ?>
<ul class="video-library">
								<?php 
/* tag "a" from line 42 */ ;
$_tmp_2 = $ctx->repeat ;
$_tmp_2->VM = new PHPTAL_RepeatController($ctx->VMs)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_2->VM as $ctx->VM): ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->VM, 'getURLView')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
>
									<?php /* tag "li" from line 43 */; ?>
<li>
										<?php /* tag "div" from line 44 */; ?>
<div class="demo">
											<?php 
/* tag "img" from line 45 */ ;
if (null !== ($_tmp_3 = ($ctx->path($ctx->VM, 'getVideo/getURLImage')))):  ;
$_tmp_3 = ' src="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<img width="150px" height="100px"<?php echo $_tmp_3 ?>
/>
										</div>
										<?php /* tag "div" from line 47 */; ?>
<div class="info">
											<?php /* tag "div" from line 48 */; ?>
<div class="name"><?php echo phptal_escape($ctx->path($ctx->VM, 'getVideo/getName')); ?>
</div>
											<?php /* tag "div" from line 49 */; ?>
<div class="monk">Giảng sư: <?php /* tag "span" from line 49 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Monk, 'getName')); ?>
</span></div>
											<?php /* tag "div" from line 50 */; ?>
<div class="view">
												<?php /* tag "span" from line 51 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->VM, 'getVideo/getCountPrint')); ?>
</span> lượt xem
											</div>
										</div>
										<?php /* tag "div" from line 54 */; ?>
<div class="clear"></div>
									</li>
								</a><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

							</ul>
							<?php /* tag "div" from line 58 */; ?>
<div class="clear"></div>
						</div>
					</div>
				</div>
				
				<?php /* tag "div" from line 63 */; ?>
<div id="right-mini">
					<?php /* tag "div" from line 64 */; ?>
<div class="sidebar-box-mini">
						<?php /* tag "div" from line 65 */; ?>
<div class="box-title">
							<?php /* tag "img" from line 66 */; ?>
<img src="/data/images/icon.png" width="30"/>
							<?php /* tag "span" from line 67 */; ?>
<span>Giảng Sư</span>
						</div>
						<?php /* tag "div" from line 69 */; ?>
<div class="sidebar-box-content">
							<?php /* tag "ul" from line 70 */; ?>
<ul>
								<?php 
/* tag "a" from line 71 */ ;
$_tmp_3 = $ctx->repeat ;
$_tmp_3->Monk1 = new PHPTAL_RepeatController($ctx->Monks)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_3->Monk1 as $ctx->Monk1): ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Monk1, 'getURLRead')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
>
									<?php 
/* tag "li" from line 72 */ ;
if (null !== ($_tmp_2 = ($ctx->Monk1->getId()==$ctx->Monk->getId()?'current-item':''))):  ;
$_tmp_2 = ' class="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<li<?php echo $_tmp_2 ?>
>
										<?php /* tag "span" from line 73 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Monk1, 'getName')); ?>
</span> (<?php /* tag "span" from line 73 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Monk1, 'getVMs/count')); ?>
</span>)
										<?php 
/* tag "span" from line 74 */ ;
if ($ctx->path($ctx->Monk1, 'isVIP')):  ;
?>
<span>
											<?php /* tag "img" from line 75 */; ?>
<img src="/data/images/vip.gif" border="0" width="20" style="position:absolute; margin-left:3px;"/>
										</span><?php endif; ?>

									</li>
								</a><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

							</ul>
						</div>
						<?php /* tag "div" from line 81 */; ?>
<div class="clear"></div>
					</div>	
					
					<?php 
/* tag "div" from line 84 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('macros.xhtml/CountBoxMini', $_thistpl) ;
$ctx->popSlots() ;
?>

					<!--
					<div metal:use-macro="macros.xhtml/EventBoxMini"/>
					-->
					<?php 
/* tag "div" from line 88 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('macros.xhtml/SponsorBoxMini', $_thistpl) ;
$ctx->popSlots() ;
?>

				</div>				
				<?php /* tag "div" from line 90 */; ?>
<div class="clear"></div>
			</div>
			<?php 
/* tag "div" from line 92 */ ;
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

Generated by PHPTAL from E:\AppWebServer\chuakhaituong.123app.net\mvc\templates\LibraryVideoMonk.html (edit that file instead) */; ?>