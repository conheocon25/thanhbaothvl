<?php 
function tpl_51623f03_LibraryVideoCategory__MC0YbgXBSFeAi1jZvN1fgg(PHPTAL $tpl, PHPTAL_Context $ctx) {
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
/* tag "li" from line 25 */ ;
if (null !== ($_tmp_3 = ($ctx->Category1->getId()==$ctx->CategorySelected->getId()?'current-item':''))):  ;
$_tmp_3 = ' class="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<li<?php echo $_tmp_3 ?>
>
										<?php /* tag "span" from line 26 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Category1, 'getName')); ?>
</span> (<?php /* tag "span" from line 26 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Category1, 'getVLs/count')); ?>
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
				
				<?php /* tag "div" from line 35 */; ?>
<div id="mid-mini">

					<?php /* tag "div" from line 37 */; ?>
<div class="news-box-mini">
						<?php /* tag "div" from line 38 */; ?>
<div class="box-title">
							<?php /* tag "img" from line 39 */; ?>
<img src="/data/images/icon.png" width="30"/>
							<?php /* tag "span" from line 40 */; ?>
<span>Phật âm</span> 
						</div>

						<?php /* tag "div" from line 43 */; ?>
<div align="center" class="video-screen">
							<?php 
/* tag "iframe" from line 44 */ ;
if (null !== ($_tmp_3 = ($ctx->path($ctx->VL, 'getVideo/getURL')))):  ;
$_tmp_3 = ' src="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<iframe width="450" height="350" frameborder="0"<?php echo $_tmp_3 ?>
></iframe>
							<?php /* tag "script" from line 45 */; ?>
<script>
								/*<![CDATA[*/
								$("iframe").each(function(){
									  var ifr_source = $(this).attr('src');
									  var wmode = "?wmode=transparent";
									  $(this).attr('src',ifr_source+wmode);
								});
								/*]]>*/
							</script>
						</div>						
						<?php /* tag "div" from line 55 */; ?>
<div class="video-info">
							<?php /* tag "div" from line 56 */; ?>
<div class="name"><?php echo phptal_escape($ctx->path($ctx->VL, 'getVideo/getName')); ?>
</div>
							<?php /* tag "div" from line 57 */; ?>
<div class="monk">Chuyên đề: 
								<?php /* tag "span" from line 58 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->VL, 'getCategory/getName')); ?>
</span>
							</div>						
							<?php /* tag "div" from line 60 */; ?>
<div class="view">
								<?php /* tag "span" from line 61 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->VL, 'getVideo/getCountPrint')); ?>
</span> lượt xem
							</div>
							<?php /* tag "div" from line 63 */; ?>
<div class="clear"></div>
						</div>
						<?php /* tag "div" from line 65 */; ?>
<div class="news-box-sub-title">Cùng chuyên đề</div>
						<?php /* tag "div" from line 66 */; ?>
<div style="margin-left:24px;">
							<?php /* tag "ul" from line 67 */; ?>
<ul class="list-video">	
								<?php 
/* tag "li" from line 68 */ ;
$_tmp_2 = $ctx->repeat ;
$_tmp_2->VL = new PHPTAL_RepeatController($ctx->path($ctx->CategorySelected, 'getVLs'))
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_2->VL as $ctx->VL): ;
?>
<li>
									<?php 
/* tag "a" from line 69 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->VL, 'getURLView')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
if (null !== ($_tmp_3 = ($ctx->path($ctx->VL, 'getVideo/getName')))):  ;
$_tmp_3 = ' title="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
<?php echo $_tmp_3 ?>
>
										<?php 
/* tag "img" from line 70 */ ;
if (null !== ($_tmp_4 = ($ctx->path($ctx->VL, 'getVideo/getURLImage')))):  ;
$_tmp_4 = ' src="'.phptal_escape($_tmp_4).'"' ;
else:  ;
$_tmp_4 = '' ;
endif ;
?>
<img width="140px" height="110px"<?php echo $_tmp_4 ?>
/>
										<?php /* tag "div" from line 71 */; ?>
<div class="name"><?php echo phptal_escape($ctx->path($ctx->VL, 'getVideo/getName')); ?>
</div>
									</a>
								</li><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

							</ul>
							<?php /* tag "div" from line 75 */; ?>
<div class="clear"></div>
						</div>
					</div>
				</div>
				
				<?php /* tag "div" from line 80 */; ?>
<div id="right-mini">
					<?php /* tag "div" from line 81 */; ?>
<div class="sidebar-box-mini">
						<?php /* tag "div" from line 82 */; ?>
<div class="box-title">
							<?php /* tag "img" from line 83 */; ?>
<img src="/data/images/icon.png" width="30"/>
							<?php /* tag "span" from line 84 */; ?>
<span>Giảng Sư</span>
						</div>
						<?php /* tag "div" from line 86 */; ?>
<div class="sidebar-box-content">
							<?php /* tag "ul" from line 87 */; ?>
<ul>
								<?php 
/* tag "a" from line 88 */ ;
$_tmp_4 = $ctx->repeat ;
$_tmp_4->Monk1 = new PHPTAL_RepeatController($ctx->Monks)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_4->Monk1 as $ctx->Monk1): ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Monk1, 'getURLRead')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
>
									<?php /* tag "li" from line 89 */; ?>
<li>
										<?php /* tag "span" from line 90 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Monk1, 'getName')); ?>
</span> (<?php /* tag "span" from line 90 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Monk1, 'getVMs/count')); ?>
</span>)
										<?php 
/* tag "span" from line 91 */ ;
if ($ctx->path($ctx->Monk1, 'isVIP')):  ;
?>
<span>
											<?php /* tag "img" from line 92 */; ?>
<img src="/data/images/vip.gif" border="0" width="20" style="position:absolute; margin-left:3px;"/>
										</span><?php endif; ?>

									</li>
								</a><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

							</ul>
						</div>
						<?php /* tag "div" from line 98 */; ?>
<div class="clear"></div>
					</div>					
					<?php 
/* tag "div" from line 100 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('macros.xhtml/CountBoxMini', $_thistpl) ;
$ctx->popSlots() ;
?>

					<?php 
/* tag "div" from line 101 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('macros.xhtml/SponsorBoxMini', $_thistpl) ;
$ctx->popSlots() ;
?>

				</div>				
				<?php /* tag "div" from line 103 */; ?>
<div class="clear"></div>
			</div>
			<?php 
/* tag "div" from line 105 */ ;
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

Generated by PHPTAL from E:\AppWebServer\chuakhaituong.123app.net\mvc\templates\LibraryVideoCategoryPlay.html (edit that file instead) */; ?>