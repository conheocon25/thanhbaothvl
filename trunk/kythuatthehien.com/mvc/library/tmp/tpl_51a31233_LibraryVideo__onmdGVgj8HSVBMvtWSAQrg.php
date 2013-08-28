<?php 
function tpl_51a31233_LibraryVideo__onmdGVgj8HSVBMvtWSAQrg(PHPTAL $tpl, PHPTAL_Context $ctx) {
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
$_tmp_1->Category = new PHPTAL_RepeatController($ctx->path($ctx->CategoryBType, 'getCategoryAll'))
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
<li><?php /* tag "span" from line 25 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Category, 'getName')); ?>
</span> (<?php /* tag "span" from line 25 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Category, 'getVLs/count')); ?>
</span>) </li>
								</a><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

							</ul>
						</div>
						<?php /* tag "div" from line 29 */; ?>
<div class="clear"></div>
					</div>
				</div>
				
				<?php /* tag "div" from line 33 */; ?>
<div id="mid-mini">

					<?php /* tag "div" from line 35 */; ?>
<div class="news-box-mini">
						<?php /* tag "div" from line 36 */; ?>
<div class="box-title">
							<?php /* tag "img" from line 37 */; ?>
<img src="/data/images/icon.png" width="30"/>
							<?php /* tag "span" from line 38 */; ?>
<span><?php echo phptal_escape('PHẬT ÂM ' . $ctx->CategoryBType->getName()); ?>
</span> 
						</div>
						
						<?php /* tag "div" from line 41 */; ?>
<div align="center" class="video-screen">
							<?php 
/* tag "iframe" from line 46 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->VMUpdateTopAll, 'current/getVideo/getURL')))):  ;
$_tmp_2 = ' src="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<iframe width="450" height="350" frameborder="0" wmode="Opaque"<?php echo $_tmp_2 ?>
></iframe>
							<?php /* tag "script" from line 47 */; ?>
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
						<?php /* tag "div" from line 57 */; ?>
<div class="video-info">
							<?php /* tag "div" from line 58 */; ?>
<div class="name"><?php echo phptal_escape($ctx->path($ctx->VMUpdateTopAll, 'current/getVideo/getName')); ?>
</div>
							<?php /* tag "div" from line 59 */; ?>
<div class="monk">Giảng sư: 
								<?php 
/* tag "a" from line 60 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->VMUpdateTopAll, 'current/getMonk/getURLRead')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
>
									<?php /* tag "span" from line 61 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->VMUpdateTopAll, 'current/getMonk/getPreName')); ?>
</span> - 
									<?php /* tag "span" from line 62 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->VMUpdateTopAll, 'current/getMonk/getName')); ?>
</span>
								</a>
							</div>						
							<?php /* tag "div" from line 65 */; ?>
<div class="view">
								<?php /* tag "span" from line 66 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->VMUpdateTopAll, 'current/getVideo/getCountPrint')); ?>
</span> lượt xem
							</div>
							<?php /* tag "div" from line 68 */; ?>
<div class="clear"></div>
						</div>
					</div>

					<?php /* tag "div" from line 72 */; ?>
<div class="news-box-mini">
						<?php /* tag "div" from line 73 */; ?>
<div class="box-title">
							<?php /* tag "img" from line 74 */; ?>
<img src="/data/images/icon.png" width="30"/>
							<?php /* tag "span" from line 75 */; ?>
<span>Video mới cập nhật</span>
						</div>

						<?php /* tag "div" from line 78 */; ?>
<div style="margin-left:24px; margin-top:15px;">
							<?php /* tag "ul" from line 79 */; ?>
<ul class="list-video">	
								<?php 
/* tag "li" from line 80 */ ;
$_tmp_2 = $ctx->repeat ;
$_tmp_2->VM = new PHPTAL_RepeatController($ctx->VMUpdateTopAll)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_2->VM as $ctx->VM): ;
?>
<li>
									<?php 
/* tag "a" from line 81 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->VM, 'getURLView')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
if (null !== ($_tmp_3 = ($ctx->path($ctx->VM, 'getVideo/getName')))):  ;
$_tmp_3 = ' title="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
<?php echo $_tmp_3 ?>
>
										<?php 
/* tag "img" from line 82 */ ;
if (null !== ($_tmp_4 = ($ctx->path($ctx->VM, 'getVideo/getURLImage')))):  ;
$_tmp_4 = ' src="'.phptal_escape($_tmp_4).'"' ;
else:  ;
$_tmp_4 = '' ;
endif ;
?>
<img width="140px" height="110px"<?php echo $_tmp_4 ?>
/>
										<?php /* tag "div" from line 83 */; ?>
<div class="monk"><?php echo phptal_escape($ctx->path($ctx->VM, 'getMonk/getName')); ?>
</div>
										<?php /* tag "div" from line 84 */; ?>
<div class="name"><?php echo phptal_escape($ctx->path($ctx->VM, 'getVideo/getName')); ?>
</div>
									</a>
								</li><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

							</ul>
							<?php /* tag "div" from line 88 */; ?>
<div class="clear"></div>
						</div>
					</div>
					
					
					<?php /* tag "div" from line 93 */; ?>
<div class="news-box-mini">
						<?php /* tag "div" from line 94 */; ?>
<div class="box-title">
							<?php /* tag "img" from line 95 */; ?>
<img src="/data/images/icon.png" width="30"/>
							<?php /* tag "span" from line 96 */; ?>
<span>Video xem nhiều nhất</span>
						</div>

						<?php /* tag "div" from line 99 */; ?>
<div style="margin-left:24px; margin-top:15px;">
							<?php /* tag "ul" from line 100 */; ?>
<ul class="list-video">	
								<?php 
/* tag "li" from line 101 */ ;
$_tmp_4 = $ctx->repeat ;
$_tmp_4->VM = new PHPTAL_RepeatController($ctx->VMViewTopAll)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_4->VM as $ctx->VM): ;
?>
<li>
									<?php 
/* tag "a" from line 102 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->VM, 'getURLView')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
if (null !== ($_tmp_3 = ($ctx->path($ctx->VM, 'getVideo/getName')))):  ;
$_tmp_3 = ' title="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
<?php echo $_tmp_3 ?>
>
										<?php 
/* tag "img" from line 103 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->VM, 'getVideo/getURLImage')))):  ;
$_tmp_2 = ' src="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<img width="140px" height="110px"<?php echo $_tmp_2 ?>
/>
										<?php /* tag "div" from line 104 */; ?>
<div class="monk"><?php echo phptal_escape($ctx->path($ctx->VM, 'getMonk/getName')); ?>
</div>
										<?php /* tag "div" from line 105 */; ?>
<div class="name"><?php echo phptal_escape($ctx->path($ctx->VM, 'getVideo/getName')); ?>
</div>
									</a>
								</li><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

							</ul>
							<?php /* tag "div" from line 109 */; ?>
<div class="clear"></div>
						</div>
					</div>
				</div>
				
				<?php /* tag "div" from line 114 */; ?>
<div id="right-mini">
					<?php /* tag "div" from line 115 */; ?>
<div class="sidebar-box-mini">
						<?php /* tag "div" from line 116 */; ?>
<div class="box-title">
							<?php /* tag "img" from line 117 */; ?>
<img src="/data/images/icon.png" width="30"/>
							<?php /* tag "span" from line 118 */; ?>
<span>Giảng Sư</span>
						</div>
						<?php /* tag "ul" from line 120 */; ?>
<ul>
							<?php 
/* tag "a" from line 121 */ ;
$_tmp_2 = $ctx->repeat ;
$_tmp_2->Monk = new PHPTAL_RepeatController($ctx->path($ctx->CategoryBType, 'getMonkAll'))
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_2->Monk as $ctx->Monk): ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Monk, 'getURLRead')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
>
								<?php /* tag "li" from line 122 */; ?>
<li>
									<?php /* tag "span" from line 123 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Monk, 'getName')); ?>
</span> (<?php /* tag "span" from line 123 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Monk, 'getVMs/count')); ?>
</span>)
									<?php 
/* tag "span" from line 124 */ ;
if ($ctx->path($ctx->Monk, 'isVIP')):  ;
?>
<span>
										<?php /* tag "img" from line 125 */; ?>
<img src="/data/images/vip.gif" border="0" width="20" style="position:absolute; margin-left:3px;"/>
									</span><?php endif; ?>

								</li>
							</a><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

						</ul>
						<?php /* tag "div" from line 130 */; ?>
<div class="clear"></div>
					</div>
					<?php 
/* tag "div" from line 132 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('macros.xhtml/CountBoxMini', $_thistpl) ;
$ctx->popSlots() ;
?>
					
					<?php 
/* tag "div" from line 133 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('macros.xhtml/SponsorBoxMini', $_thistpl) ;
$ctx->popSlots() ;
?>

				</div>
				
				<?php /* tag "div" from line 136 */; ?>
<div class="clear"></div>
			</div>

			<?php 
/* tag "div" from line 139 */ ;
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

Generated by PHPTAL from E:\AppWebServer\chuakhaituong.123app.net\mvc\templates\LibraryVideo.html (edit that file instead) */; ?>