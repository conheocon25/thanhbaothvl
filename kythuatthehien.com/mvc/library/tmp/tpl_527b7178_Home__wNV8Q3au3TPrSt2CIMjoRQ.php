<?php 
function tpl_527b7178_Home__wNV8Q3au3TPrSt2CIMjoRQ(PHPTAL $tpl, PHPTAL_Context $ctx) {
$_thistpl = $tpl ;
$_translator = $tpl->getTranslator() ;
/* tag "documentElement" from line 1 */ ;
$ctx->setDocType('<!DOCTYPE html>',false) ;
?>

<?php /* tag "html" from line 2 */; ?>
<html lang="en">
	<?php /* tag "head" from line 3 */; ?>
<head>
		<?php 
/* tag "span" from line 4 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('base.xhtml/IncludeMETA', $_thistpl) ;
$ctx->popSlots() ;
?>

		<?php 
/* tag "span" from line 5 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('base.xhtml/IncludeCSS', $_thistpl) ;
$ctx->popSlots() ;
?>

		<?php 
/* tag "span" from line 6 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('base.xhtml/IncludeJS', $_thistpl) ;
$ctx->popSlots() ;
?>

	</head>

	<?php /* tag "body" from line 9 */; ?>
<body>
		<?php /* tag "div" from line 10 */; ?>
<div class="container">
			<?php 
/* tag "div" from line 11 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('base.xhtml/Header', $_thistpl) ;
$ctx->popSlots() ;
?>

			<?php 
/* tag "div" from line 12 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('base.xhtml/CallendarBar', $_thistpl) ;
$ctx->popSlots() ;
?>

			<?php /* tag "div" from line 13 */; ?>
<div class="row reset-margin main">				
				<?php /* tag "div" from line 14 */; ?>
<div class="span8 fix-width">
					<?php /* tag "div" from line 15 */; ?>
<div class="accordion accordion-fix" id="accordion2">
						<?php /* tag "div" from line 16 */; ?>
<div class="accordion-group box radius">
							<?php /* tag "div" from line 17 */; ?>
<div class="accordion-heading b-title clearfix">
								<?php /* tag "div" from line 18 */; ?>
<div class="b-t-icon-content">Truyền hình trực tuyến</div>								
								<?php /* tag "table" from line 19 */; ?>
<table width="100%" height="325px" border="1" cellspacing="0">
									<?php /* tag "tr" from line 20 */; ?>
<tr>
										<?php /* tag "td" from line 21 */; ?>
<td align="center" colspan="5" width="395px" height="325px" background="data/images/logo/tvonline.jpg">
											<?php /* tag "div" from line 22 */; ?>
<div align="center" id="mediaspace" style="padding:0px 0px 0px 0px; border:0px solid; border-color: #dadadc; width:395px; height:325px;"></div>
										</td>									
										<?php /* tag "td" from line 24 */; ?>
<td width="395px" background="#FFFFFF">
											<?php /* tag "table" from line 25 */; ?>
<table width="100%" height="325px" border="1" cellspacing="0" bgcolor="#FFFFFF">
												<?php /* tag "tr" from line 26 */; ?>
<tr>
													<?php /* tag "td" from line 27 */; ?>
<td style="background-color: white; color:black; font-weight:bold;text-shadow: 1px 1px 1px #5AD3BD !important;" align="center">TIN TỨC MỚI CẬP NHẬT</td>
												</tr>
												<?php 
/* tag "tr" from line 29 */ ;
$_tmp_1 = $ctx->repeat ;
$_tmp_1->New = new PHPTAL_RepeatController($ctx->New10)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->New as $ctx->New): ;
?>
<tr style="background-color: white;color:#084DAD;font-size:12px;">
													<?php /* tag "td" from line 30 */; ?>
<td style="padding-left:5px;" align="left">
														<?php 
/* tag "a" from line 31 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->New, 'getURLRead')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
><?php echo phptal_escape($ctx->path($ctx->New, 'getTitleReduce')); ?>
</a>
													</td>
												</tr><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

											</table>
										</td>
									</tr>									
								</table>								
							</div>
							<?php /* tag "div" from line 39 */; ?>
<div style="padding-left:65px;" id="collapseOne" class="accordion-body collapse in b-content">
								<?php /* tag "a" from line 40 */; ?>
<a href="#" onclick="playit('rtmp://123.30.108.77/livepkgr/livestream1?adbe-live-event=liveevent','http://kythuathehien.com/data/images/logo/LG_THVL-1.gif');">
									<?php /* tag "img" from line 41 */; ?>
<img src="data/images/logo/LG_THVL-1.gif" width="85" height="30" border="0" class="img-channel"/>
								</a>
								<?php /* tag "a" from line 43 */; ?>
<a href="#" onclick="playit('rtmp://123.30.108.77/livepkgr/livestream2?adbe-live-event=liveevent','http://kythuathehien.com/data/images/logo/LG_THVL-2.gif');">
									<?php /* tag "img" from line 44 */; ?>
<img src="data/images/logo/LG_THVL-2.gif" width="85" height="30" border="0" class="img-channel"/>
								</a>
								<?php /* tag "a" from line 46 */; ?>
<a href="#" onclick="playit('rtmp://123.30.108.77/livepkgr/livestream3?adbe-live-event=liveevent','data/images/logo/LG_Radio.gif');">
									<?php /* tag "img" from line 47 */; ?>
<img src="data/images/logo/LG_Radio.gif" width="85" height="30" border="0" class="img-channel"/>
								</a> 
							</div>
						</div>
					</div>
					
					<?php /* tag "div" from line 53 */; ?>
<div class="accordion accordion-fix" id="accordion3">
						<?php /* tag "div" from line 54 */; ?>
<div class="accordion-group box radius">
							<?php /* tag "div" from line 55 */; ?>
<div class="accordion-heading b-title clearfix">
								<?php /* tag "div" from line 56 */; ?>
<div class="b-t-icon-content">VIDEO CLIP HOT</div>
								<?php /* tag "a" from line 57 */; ?>
<a class="accordion-toggle pull-right hidden-accordion icon-chevron-up icon-white hidden-control" data-toggle="collapse" data-parent="#accordion3" href="#collapse3"></a>
							</div>
							<?php /* tag "div" from line 59 */; ?>
<div id="collapse3" class="accordion-body collapse in b-content">
								<?php /* tag "ul" from line 60 */; ?>
<ul class="thumbnails grid-item reset-margin">
									<?php 
/* tag "li" from line 61 */ ;
$_tmp_2 = $ctx->repeat ;
$_tmp_2->VL = new PHPTAL_RepeatController($ctx->VL8)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_2->VL as $ctx->VL): ;
?>
<li class="span2">
										<?php /* tag "div" from line 62 */; ?>
<div class="thumbnail">
											<?php 
/* tag "a" from line 63 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->VL, 'getURLView')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
>
												<?php 
/* tag "img" from line 64 */ ;
if (null !== ($_tmp_3 = ($ctx->path($ctx->VL, 'getVideo/getURLImage')))):  ;
$_tmp_3 = ' src="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<img<?php echo $_tmp_3 ?>
/>
												<?php /* tag "p" from line 65 */; ?>
<p><?php echo phptal_escape($ctx->path($ctx->VL, 'getVideo/getName')); ?>
</p>
											</a>
										</div>
									</li><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

								</ul>
							</div>
						</div>
					</div>
					
					<?php 
/* tag "div" from line 74 */ ;
$_tmp_3 = $ctx->repeat ;
$_tmp_3->Category = new PHPTAL_RepeatController($ctx->CategoryNewsAll)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_3->Category as $ctx->Category): ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Category, 'getIdPrint')))):  ;
$_tmp_1 = ' id="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<div class="accordion accordion-fix"<?php echo $_tmp_1 ?>
>
						<?php /* tag "div" from line 75 */; ?>
<div class="accordion-group box radius">
							<?php /* tag "div" from line 76 */; ?>
<div class="accordion-heading b-title clearfix">
								<?php /* tag "div" from line 77 */; ?>
<div class="b-t-icon-content"><?php echo phptal_escape($ctx->path($ctx->Category, 'getName')); ?>
</div>
								<?php 
/* tag "a" from line 78 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Category, 'getIdPrint')))):  ;
$_tmp_2 = ' data-parent="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
if (null !== ($_tmp_4 = ('#collapse' . $ctx->Category->getIdPrint()))):  ;
$_tmp_4 = ' href="'.phptal_escape($_tmp_4).'"' ;
else:  ;
$_tmp_4 = '' ;
endif ;
?>
<a class="accordion-toggle pull-right hidden-accordion icon-chevron-up icon-white hidden-control" data-toggle="collapse"<?php echo $_tmp_2 ?>
<?php echo $_tmp_4 ?>
></a>
							</div>
							<?php 
/* tag "div" from line 80 */ ;
if (null !== ($_tmp_2 = ('collapse' . $ctx->Category->getIdPrint()))):  ;
$_tmp_2 = ' id="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<div class="accordion-body collapse in b-content"<?php echo $_tmp_2 ?>
>
								<?php /* tag "div" from line 81 */; ?>
<div class="row reset-margin">
									<?php /* tag "div" from line 82 */; ?>
<div class="span4 reset-margin">
										<?php /* tag "div" from line 83 */; ?>
<div class="carousel slide carousel-fade img-polaroid news-slide">
											<?php /* tag "div" from line 84 */; ?>
<div class="carousel-inner">
												<?php 
/* tag "div" from line 85 */ ;
if ($ctx->path($ctx->Category, 'getNewsLimit1/current')):  ;
?>
<div class="active item">													
													<?php 
/* tag "a" from line 86 */ ;
if (null !== ($_tmp_4 = ($ctx->path($ctx->Category, 'getNewsLimit1/current/getURLRead')))):  ;
$_tmp_4 = ' href="'.phptal_escape($_tmp_4).'"' ;
else:  ;
$_tmp_4 = '' ;
endif ;
?>
<a<?php echo $_tmp_4 ?>
>
														<?php 
/* tag "img" from line 87 */ ;
if (null !== ($_tmp_5 = ($ctx->path($ctx->Category, 'getNewsLimit1/current/getImage')))):  ;
$_tmp_5 = ' src="'.phptal_escape($_tmp_5).'"' ;
else:  ;
$_tmp_5 = '' ;
endif ;
?>
<img<?php echo $_tmp_5 ?>
/>
														<?php /* tag "div" from line 88 */; ?>
<div class="carousel-caption">
															<?php /* tag "p" from line 89 */; ?>
<p><?php echo phptal_escape($ctx->path($ctx->Category, 'getNewsLimit1/current/getTitleReduce')); ?>
</p>
														</div>
													</a>
												</div><?php endif; ?>

												<?php 
/* tag "div" from line 93 */ ;
if ($ctx->path($ctx->Category, 'getNewsLimit1')):  ;
$_tmp_5 = $ctx->repeat ;
$_tmp_5->News = new PHPTAL_RepeatController($ctx->path($ctx->Category, 'getNewsLimit1'))
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_5->News as $ctx->News): ;
?>
<div class="item">
													<?php 
/* tag "a" from line 94 */ ;
if (null !== ($_tmp_4 = ($ctx->path($ctx->News, 'getURLRead')))):  ;
$_tmp_4 = ' href="'.phptal_escape($_tmp_4).'"' ;
else:  ;
$_tmp_4 = '' ;
endif ;
?>
<a<?php echo $_tmp_4 ?>
>
														<?php 
/* tag "img" from line 95 */ ;
if (null !== ($_tmp_6 = ($ctx->path($ctx->News, 'getImage')))):  ;
$_tmp_6 = ' src="'.phptal_escape($_tmp_6).'"' ;
else:  ;
$_tmp_6 = '' ;
endif ;
?>
<img<?php echo $_tmp_6 ?>
/>
														<?php /* tag "div" from line 96 */; ?>
<div class="carousel-caption">
															<?php /* tag "p" from line 97 */; ?>
<p><?php echo phptal_escape($ctx->path($ctx->News, 'getTitleReduce')); ?>
</p>
														</div>
													</a>
												</div><?php 
endforeach ;
$ctx = $tpl->popContext() ;
endif ;
?>

											</div>
										</div>
									</div>
									<?php /* tag "div" from line 104 */; ?>
<div class="span4 reset-margin pull-right news-list">
										<?php /* tag "ul" from line 105 */; ?>
<ul class="nav nav-tabs nav-stacked">
											<?php /* tag "li" from line 106 */; ?>
<li class="active news-list-title"><?php /* tag "a" from line 106 */; ?>
<a>MỚI CẬP NHẬT</a></li>
											<?php 
/* tag "li" from line 107 */ ;
$_tmp_6 = $ctx->repeat ;
$_tmp_6->News = new PHPTAL_RepeatController($ctx->path($ctx->Category, 'getNewsLimit1'))
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_6->News as $ctx->News): ;
?>
<li class="news-list-item">
												<?php 
/* tag "a" from line 108 */ ;
if (null !== ($_tmp_4 = ($ctx->path($ctx->News, 'getURLRead')))):  ;
$_tmp_4 = ' href="'.phptal_escape($_tmp_4).'"' ;
else:  ;
$_tmp_4 = '' ;
endif ;
?>
<a<?php echo $_tmp_4 ?>
><?php echo phptal_escape($ctx->path($ctx->News, 'getTitleReduce')); ?>
</a>
											</li><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

										</ul>
									</div>
								</div>
							</div>
						</div>
					</div><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

				</div>
				<?php /* tag "div" from line 117 */; ?>
<div class="span4 fix-width">
					<?php 
/* tag "div" from line 118 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('base.xhtml/CallendarBox', $_thistpl) ;
$ctx->popSlots() ;
?>

					<?php 
/* tag "div" from line 119 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('base.xhtml/BuddhaBox', $_thistpl) ;
$ctx->popSlots() ;
?>

					<?php 
/* tag "div" from line 120 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('base.xhtml/PictureBox', $_thistpl) ;
$ctx->popSlots() ;
?>

					<?php 
/* tag "div" from line 121 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('base.xhtml/ContactBox', $_thistpl) ;
$ctx->popSlots() ;
?>
					
					<!-- <div metal:use-macro="base.xhtml/AskBox"/>					
					<div metal:use-macro="base.xhtml/TaskBox"/>
					<div metal:use-macro="base.xhtml/EventBox"/>
					<div metal:use-macro="base.xhtml/CourseBox"/>
					<div metal:use-macro="base.xhtml/TopNewsBox"/>
					<div metal:use-macro="base.xhtml/TopVideoBox"/>
					<div metal:use-macro="base.xhtml/TopMonkBox"/>										
					-->
				</div>
			</div>
			<?php 
/* tag "div" from line 132 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('base.xhtml/Footer', $_thistpl) ;
$ctx->popSlots() ;
?>

			<?php 
/* tag "div" from line 133 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('base.xhtml/FixedFunction', $_thistpl) ;
$ctx->popSlots() ;
?>

			<?php 
/* tag "div" from line 134 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('base.xhtml/Backontop', $_thistpl) ;
$ctx->popSlots() ;
?>
			
			<?php /* tag "div" from line 135 */; ?>
<div id="fb-root"></div>
		</div>
		<?php /* tag "script" from line 137 */; ?>
<script type="text/javascript" language="javascript" src="/mvc/templates/script/user/swfobject.js"></script>	

			<?php /* tag "script" from line 139 */; ?>
<script type="text/javascript">
		
			function playit2(url,myimg){
			  var so = new SWFObject('http://thvl.vn/vplayer.swf','mpl','395','325','9');

			  so.addParam('allowfullscreen','true');

			  so.addParam('allowscriptaccess','always');
			  so.addVariable('stretching','fill');
			  so.addParam('wmode','opaque');
			  
				if(url.indexOf('rtmp')>-1)
				{
					so.addVariable('streamer',url.substring(0,url.lastIndexOf("/")+1));
					so.addVariable('file',url.substring(url.lastIndexOf("/")+1));
					
					so.addVariable('file',url);
					so.addVariable('stretching','fill');
					so.addVariable('image','TV-Online.gif');
					so.addVariable('controlbar','bottom');
					so.addVariable('autostart','false');
					so.addVariable('volume','90');
					so.write('mediaspace');
					
				}else
				{
					so.addVariable('file',url);
					so.addVariable('stretching','fill');
					so.addVariable('image','TV-Online.gif');
					so.addVariable('controlbar','bottom');
					so.addVariable('autostart','false');
					so.addVariable('volume','90');
					so.write('mediaspace');
					document.getElementById('mediaspace2').innerHTML="";
				}
			}
			function playit(url,myimg){

			 
			  var so = new SWFObject('http://thvl.vn/vplayer.swf','mpl','395','325','9');

			  so.addParam('allowfullscreen','true');
			so.addVariable('stretching','fill');
			  so.addParam('allowscriptaccess','always');

			  so.addParam('wmode','opaque');
			if(url.indexOf('rtmp')>-1){
			  so.addVariable('streamer',url.substring(0,url.lastIndexOf("/")+1));
			  so.addVariable('file',url.substring(url.lastIndexOf("/")+1));
			}else
			  so.addVariable('file',url);
			  so.addVariable('image','TV-Online.gif');
			  so.addVariable('controlbar','bottom');
			  so.addVariable('volume','90');
			  so.addVariable('autostart','true');
			  so.write('mediaspace');

			document.getElementById('mediaspace2').innerHTML="";

			}

			function radioit(radio,url){

			playit(radio);
			return ;

			  var so = new SWFObject('player.swf','mpl','395','325','9');

			  so.addParam('allowfullscreen','true');
			  so.addParam('allowscriptaccess','always');
			  so.addParam('wmode','opaque');
			  so.addVariable('file',url);
			  so.addVariable('image','TV-Online.gif');
			  so.addVariable('controlbar','none');
			  so.addVariable('autostart','true');
			  so.addVariable('mute','true');
			  so.write('mediaspace');

			  var so2 = new SWFObject('_player.swf','mpl','0','0','9');

			  so2.addParam('allowfullscreen','true');
			  so2.addParam('allowscriptaccess','always');
			  so2.addParam('wmode','opaque');
			if(url.indexOf('rtmp')>-1){
			  so2.addVariable('streamer',radio.substring(0,radio.lastIndexOf("/")+1));
			  so2.addVariable('file',radio.substring(radio.lastIndexOf("/")+1));
			}else
			  so2.addVariable('file',radio);
			  so2.addVariable('controlbar','none');
			  so2.addVariable('autostart','true');
			  so2.write('mediaspace2'); 
			}
			</script>	
	</body>
</html><?php 
/* end */ ;

}

?>
<?php /* 
*** DO NOT EDIT THIS FILE ***

Generated by PHPTAL from D:\AppWebServer\MyCodePHP\kythuatthehien.com\mvc\templates\Home.html (edit that file instead) */; ?>