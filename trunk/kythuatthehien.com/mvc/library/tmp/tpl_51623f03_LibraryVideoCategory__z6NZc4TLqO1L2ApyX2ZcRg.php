<?php 
function tpl_51623f03_LibraryVideoCategory__z6NZc4TLqO1L2ApyX2ZcRg(PHPTAL $tpl, PHPTAL_Context $ctx) {
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
						<?php /* tag "ul" from line 22 */; ?>
<ul>
							<?php 
/* tag "a" from line 23 */ ;
$_tmp_1 = $ctx->repeat ;
$_tmp_1->Category1 = new PHPTAL_RepeatController($ctx->CategoriesVideo)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->Category1 as $ctx->Category1): ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Category1, 'getURLRead')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
>
								<?php 
/* tag "li" from line 24 */ ;
if (null !== ($_tmp_3 = ($ctx->Category1->getId()==$ctx->Category->getId()?'current-item':''))):  ;
$_tmp_3 = ' class="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<li<?php echo $_tmp_3 ?>
>
									<?php /* tag "span" from line 25 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Category1, 'getName')); ?>
</span> (<?php /* tag "span" from line 25 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Category1, 'getVLs/count')); ?>
</span>)
								</li>
							</a><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

						</ul>
						<?php /* tag "div" from line 29 */; ?>
<div class="clear"></div>
					</div>
				</div>				
				<?php /* tag "div" from line 32 */; ?>
<div id="mid-mini">
					<?php /* tag "div" from line 33 */; ?>
<div class="news-box-mini">
						<?php /* tag "div" from line 34 */; ?>
<div class="box-title">
							<?php /* tag "img" from line 35 */; ?>
<img src="/data/images/icon.png" width="30"/>
							<?php /* tag "span" from line 36 */; ?>
<span>Chuyên đề <?php /* tag "small" from line 36 */; ?>
<small style="font-size:15px;"><?php echo phptal_escape($ctx->path($ctx->Category, 'getName')); ?>
</small></span>
						</div>
						<?php /* tag "div" from line 38 */; ?>
<div style="padding:10px 10px 0px 10px;">							
							<?php 
/* tag "img" from line 39 */ ;
if (null !== ($_tmp_3 = ($ctx->path($ctx->Category, 'getPicture')))):  ;
$_tmp_3 = ' src="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<img width="100%"<?php echo $_tmp_3 ?>
/>
							<?php /* tag "ul" from line 40 */; ?>
<ul class="video-library">
								<?php 
/* tag "a" from line 41 */ ;
$_tmp_2 = $ctx->repeat ;
$_tmp_2->VL = new PHPTAL_RepeatController($ctx->VLs)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_2->VL as $ctx->VL): ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->VL, 'getURLView')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
>
									<?php /* tag "li" from line 42 */; ?>
<li>
										<?php /* tag "div" from line 43 */; ?>
<div class="demo">
											<?php 
/* tag "img" from line 44 */ ;
if (null !== ($_tmp_3 = ($ctx->path($ctx->VL, 'getVideo/getURLImage')))):  ;
$_tmp_3 = ' src="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<img width="150px" height="100px"<?php echo $_tmp_3 ?>
/>
										</div>
										<?php /* tag "div" from line 46 */; ?>
<div class="info">
											<?php /* tag "div" from line 47 */; ?>
<div class="name"><?php echo phptal_escape($ctx->path($ctx->VL, 'getVideo/getName')); ?>
</div>
											<?php /* tag "div" from line 48 */; ?>
<div class="monk">Danh mục: <?php /* tag "span" from line 48 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->VL, 'getCategory/getName')); ?>
</span></div>
											<?php /* tag "div" from line 49 */; ?>
<div class="view">
												<?php /* tag "span" from line 50 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->VL, 'getVideo/getCountPrint')); ?>
</span> lượt xem
											</div>
										</div>
										<?php /* tag "div" from line 53 */; ?>
<div class="clear"></div>
									</li>
								</a><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

							</ul>
							<?php /* tag "div" from line 57 */; ?>
<div class="clear"></div>
						</div>
					</div>
				</div>				
				<?php /* tag "div" from line 61 */; ?>
<div id="right-mini">
					<?php /* tag "div" from line 62 */; ?>
<div class="sidebar-box-mini">
						<?php /* tag "div" from line 63 */; ?>
<div class="box-title">
							<?php /* tag "img" from line 64 */; ?>
<img src="/data/images/icon.png" width="30"/>
							<?php /* tag "span" from line 65 */; ?>
<span>Giảng Sư</span>
						</div>
						<?php /* tag "div" from line 67 */; ?>
<div class="sidebar-box-content">
							<?php /* tag "ul" from line 68 */; ?>
<ul>
								<?php 
/* tag "a" from line 69 */ ;
$_tmp_3 = $ctx->repeat ;
$_tmp_3->Monk = new PHPTAL_RepeatController($ctx->Monks)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_3->Monk as $ctx->Monk): ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Monk, 'getURLRead')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
>
									<?php /* tag "li" from line 70 */; ?>
<li>
										<?php /* tag "span" from line 71 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Monk, 'getName')); ?>
</span> (<?php /* tag "span" from line 71 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Monk, 'getVMs/count')); ?>
</span>)
										<?php 
/* tag "span" from line 72 */ ;
if ($ctx->path($ctx->Monk, 'isVIP')):  ;
?>
<span>
											<?php /* tag "img" from line 73 */; ?>
<img src="/data/images/vip.gif" border="0" width="20" style="position:absolute; margin-left:3px;"/>
										</span><?php endif; ?>

									</li>
								</a><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

							</ul>
						</div>
						<?php /* tag "div" from line 79 */; ?>
<div class="clear"></div>
					</div>					
					<?php 
/* tag "div" from line 81 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('macros.xhtml/CountBoxMini', $_thistpl) ;
$ctx->popSlots() ;
?>

					<?php 
/* tag "div" from line 82 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('macros.xhtml/SponsorBoxMini', $_thistpl) ;
$ctx->popSlots() ;
?>

				</div>				
				<?php /* tag "div" from line 84 */; ?>
<div class="clear"></div>
			</div>
			<?php 
/* tag "div" from line 86 */ ;
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

Generated by PHPTAL from E:\AppWebServer\chuakhaituong.123app.net\mvc\templates\LibraryVideoCategory.html (edit that file instead) */; ?>