<?php 
function tpl_518c4efe_Home__O1PbjDaBjrOrcDSf6MUhPg(PHPTAL $tpl, PHPTAL_Context $ctx) {
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

				<?php 
/* tag "div" from line 12 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('macros.xhtml/TextGo', $_thistpl) ;
$ctx->popSlots() ;
?>

				<?php /* tag "div" from line 13 */; ?>
<div id="content">																									
					<?php /* tag "div" from line 14 */; ?>
<div class="news-box">
						<?php /* tag "div" from line 15 */; ?>
<div class="box-title">
							<?php /* tag "img" from line 16 */; ?>
<img src="/data/images/icon.png" width="30"/>
							<?php /* tag "span" from line 17 */; ?>
<span>Tiêu điểm</span>							
						</div>
						<?php /* tag "div" from line 19 */; ?>
<div align="center" style="padding:10px;">
							<?php 
/* tag "div" from line 20 */ ;
if ($ctx->Course):  ;
?>
<div class="picture-banner parent">
								<?php 
/* tag "a" from line 21 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Course, 'getURLRead')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
>
									<?php 
/* tag "img" from line 22 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Course, 'getImage')))):  ;
$_tmp_2 = ' src="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<img width="100%"<?php echo $_tmp_2 ?>
/>
									<?php /* tag "div" from line 23 */; ?>
<div class="child"><?php echo phptal_escape($ctx->path($ctx->Course, 'getName')); ?>
</div>
								</a>
							</div><?php endif; ?>

							<?php 
/* tag "div" from line 26 */ ;
if (!($ctx->Course)):  ;
?>
<div class="picture-banner parent">
								<?php /* tag "a" from line 27 */; ?>
<a>
									<?php 
/* tag "img" from line 28 */ ;
if (null !== ($_tmp_2 = ('/data/images/temp.jpg'))):  ;
$_tmp_2 = ' src="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<img width="100%"<?php echo $_tmp_2 ?>
/>
									
								</a>
							</div><?php endif; ?>

							<?php 
/* tag "div" from line 32 */ ;
if ($ctx->Course):  ;
?>
<div class="list-picture">																
								<?php 
/* tag "div" from line 33 */ ;
if ($ctx->path($ctx->Course, 'getLessionNear')):  ;
?>
<div class="grid-left parent">
									<?php 
/* tag "a" from line 34 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Course, 'getLessionNear/getURLRead')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
>
										<?php 
/* tag "img" from line 35 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Course, 'getLessionNear/getImage')))):  ;
$_tmp_2 = ' src="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<img width="280" height="86"<?php echo $_tmp_2 ?>
/>
									</a>									
									<?php /* tag "div" from line 37 */; ?>
<div style="margin-top:-25px;">
										<?php /* tag "h3" from line 38 */; ?>
<h3 style="margin-bottom:5px; color:#FF0000; text-align:left; padding-left:15px; margin-top:30px;">
											LỚP ĐÃ
										</h3>
										<?php 
/* tag "div" from line 41 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Course, 'getLessionNear/getDateEnd')))):  ;
$_tmp_2 = ' alt="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<div id="class1Countdown" style="margin-left:5px;"<?php echo $_tmp_2 ?>
></div>
										<?php /* tag "h3" from line 42 */; ?>
<h3 style="position:absolute; right:15px; bottom:5px; color:#FF0000;">
											KẾT THÚC
										</h3>
									</div>
									<?php /* tag "script" from line 46 */; ?>
<script type="text/javascript">
										/*<![CDATA[*/
										$(function() {
											var d1 = $("#class1Countdown").attr('alt');
											var parts = d1.match(/(\d+)/g);										
											var d2 = new Date(parts[0], parts[1]-1, parts[2]); 										
											$('#class1Countdown').countdown({until: d2});											
										});
										/*]]>*/
									</script>
									<?php /* tag "div" from line 56 */; ?>
<div class="child"><?php echo phptal_escape($ctx->path($ctx->Course, 'getLessionNear/getName')); ?>
</div>
								</div><?php endif; ?>

								<?php 
/* tag "div" from line 58 */ ;
if (!($ctx->path($ctx->Course, 'getLessionNear'))):  ;
?>
<div class="grid-left parent">									
									<?php /* tag "span" from line 59 */; ?>
<span>
										<?php 
/* tag "img" from line 60 */ ;
if (null !== ($_tmp_1 = ('/data/images/temp.jpg'))):  ;
$_tmp_1 = ' src="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<img width="280" height="86"<?php echo $_tmp_1 ?>
/>
									</span>
								</div><?php endif; ?>

								<?php 
/* tag "div" from line 63 */ ;
if ($ctx->path($ctx->Course, 'getLessionNext')):  ;
?>
<div class="grid-right parent">									
									<?php 
/* tag "a" from line 64 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Course, 'getLessionNext/getURLRead')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
>
										<?php 
/* tag "img" from line 65 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Course, 'getLessionNext/getImage')))):  ;
$_tmp_1 = ' src="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<img width="280" height="86"<?php echo $_tmp_1 ?>
/>
									</a>									
									<?php 
/* tag "div" from line 67 */ ;
if ($ctx->path($ctx->Course, 'getLessionNext')):  ;
?>
<div style="margin-top:-25px;">

										<?php 
/* tag "span" from line 69 */ ;
if ($ctx->path($ctx->Course, 'getLessionNext')):  ;
?>
<span>
											<?php /* tag "h3" from line 70 */; ?>
<h3 style="margin-bottom:5px; color:#0000FF; text-align:left; padding-left:15px; margin-top:30px;">
												CÒN
											</h3>
											<?php 
/* tag "div" from line 73 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Course, 'getLessionNext/getDateStart')))):  ;
$_tmp_1 = ' alt="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<div id="class2Countdown" style="margin-left:5px;"<?php echo $_tmp_1 ?>
></div>
											<?php /* tag "h3" from line 74 */; ?>
<h3 style="position:absolute; right:15px; bottom:5px; color:#0000FF;">
												LỚP BẮT ĐẦU
											</h3>
										</span><?php endif; ?>

									</div><?php endif; ?>

									<?php /* tag "script" from line 79 */; ?>
<script type="text/javascript">
										/*<![CDATA[*/
										$(function() {
											var d1 = $("#class2Countdown").attr('alt');											
											var parts = d1.match(/(\d+)/g);											
											var d2 = new Date(parts[0], parts[1]-1, parts[2]);
											$('#class2Countdown').countdown({until: d2});
										});
										/*]]>*/
									</script>
									<?php /* tag "div" from line 89 */; ?>
<div class="child"><?php echo phptal_escape($ctx->path($ctx->Course, 'getLessionNext/getName')); ?>
</div>
								</div><?php endif; ?>

								
								<?php /* tag "div" from line 92 */; ?>
<div class="clear"></div>
							</div><?php endif; ?>

							<?php /* tag "ul" from line 94 */; ?>
<ul class="list-video">							
								<?php 
/* tag "li" from line 95 */ ;
$_tmp_2 = $ctx->repeat ;
$_tmp_2->VL = new PHPTAL_RepeatController($ctx->VL8)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_2->VL as $ctx->VL): ;
?>
<li>
									<?php 
/* tag "a" from line 96 */ ;
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
/* tag "img" from line 97 */ ;
if (null !== ($_tmp_4 = ($ctx->path($ctx->VL, 'getVideo/getURLImage')))):  ;
$_tmp_4 = ' src="'.phptal_escape($_tmp_4).'"' ;
else:  ;
$_tmp_4 = '' ;
endif ;
?>
<img width="140px" height="110px"<?php echo $_tmp_4 ?>
/>
										<?php /* tag "div" from line 98 */; ?>
<div class="name"><?php echo phptal_escape($ctx->path($ctx->VL, 'getVideo/getName')); ?>
</div>
									</a>
								</li><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

							</ul>														
							<?php /* tag "div" from line 102 */; ?>
<div class="clear"></div>
						</div>
					</div>
					
					<?php /* tag "div" from line 106 */; ?>
<div class="news-box">
						<?php /* tag "div" from line 107 */; ?>
<div class="box-title">
							<?php /* tag "img" from line 108 */; ?>
<img src="/data/images/icon.png" width="30"/>
							<?php /* tag "span" from line 109 */; ?>
<span>TIN NỘI BỘ</span>							
						</div>
						<?php /* tag "div" from line 111 */; ?>
<div class="slider">
							<?php /* tag "div" from line 112 */; ?>
<div class="slider-wrap">
								<?php /* tag "ul" from line 113 */; ?>
<ul>
									<?php 
/* tag "li" from line 114 */ ;
$_tmp_4 = $ctx->repeat ;
$_tmp_4->News = new PHPTAL_RepeatController($ctx->NewsList1)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_4->News as $ctx->News): ;
?>
<li>
										<?php 
/* tag "img" from line 115 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->News, 'getImage')))):  ;
$_tmp_1 = ' src="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<img width="385" height="300"<?php echo $_tmp_1 ?>
/>
										<?php 
/* tag "a" from line 116 */ ;
if (null !== ($_tmp_3 = ($ctx->path($ctx->News, 'getURLRead')))):  ;
$_tmp_3 = ' href="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<a<?php echo $_tmp_3 ?>
>
											<?php /* tag "div" from line 117 */; ?>
<div><?php echo phptal_escape($ctx->path($ctx->News, 'getTitle')); ?>
</div>
										</a>
									</li><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

								</ul>
							</div>
						</div>
						<?php /* tag "div" from line 123 */; ?>
<div class="top-list">
							<?php /* tag "div" from line 124 */; ?>
<div class="list-title">TIN MỚI CẬP NHẬT</div>
							<?php /* tag "ul" from line 125 */; ?>
<ul>
								<?php 
/* tag "a" from line 126 */ ;
$_tmp_2 = $ctx->repeat ;
$_tmp_2->News = new PHPTAL_RepeatController($ctx->NewsList1)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_2->News as $ctx->News): ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->News, 'getURLRead')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
>
									<?php /* tag "li" from line 127 */; ?>
<li><?php echo phptal_escape($ctx->path($ctx->News, 'getTitle')); ?>
</li>
								</a><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

							</ul>
						</div>
						<?php /* tag "div" from line 131 */; ?>
<div class="clear"></div>
					</div>
					<?php /* tag "div" from line 133 */; ?>
<div class="news-box">
						<?php /* tag "div" from line 134 */; ?>
<div class="box-title">
							<?php /* tag "img" from line 135 */; ?>
<img src="/data/images/icon.png" width="30"/>
							<?php /* tag "span" from line 136 */; ?>
<span>TIN TỪ THIỆN XÃ HỘI</span>							
						</div>
						<?php /* tag "div" from line 138 */; ?>
<div class="slider">
							<?php /* tag "div" from line 139 */; ?>
<div class="slider-wrap">
								<?php /* tag "ul" from line 140 */; ?>
<ul>
									<?php 
/* tag "li" from line 141 */ ;
$_tmp_3 = $ctx->repeat ;
$_tmp_3->News = new PHPTAL_RepeatController($ctx->NewsList2)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_3->News as $ctx->News): ;
?>
<li>
										<?php 
/* tag "img" from line 142 */ ;
if (null !== ($_tmp_4 = ($ctx->path($ctx->News, 'getImage')))):  ;
$_tmp_4 = ' src="'.phptal_escape($_tmp_4).'"' ;
else:  ;
$_tmp_4 = '' ;
endif ;
?>
<img width="385" height="300"<?php echo $_tmp_4 ?>
/>
										<?php 
/* tag "a" from line 143 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->News, 'getURLRead')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
>
											<?php /* tag "div" from line 144 */; ?>
<div><?php echo phptal_escape($ctx->path($ctx->News, 'getTitle')); ?>
</div>
										</a>
									</li><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

								</ul>
							</div>
						</div>
						<?php /* tag "div" from line 150 */; ?>
<div class="top-list">
							<?php /* tag "div" from line 151 */; ?>
<div class="list-title">TIN MỚI CẬP NHẬT</div>
							<?php /* tag "ul" from line 152 */; ?>
<ul>
								<?php 
/* tag "a" from line 153 */ ;
$_tmp_2 = $ctx->repeat ;
$_tmp_2->News = new PHPTAL_RepeatController($ctx->NewsList2)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_2->News as $ctx->News): ;
if (null !== ($_tmp_4 = ($ctx->path($ctx->News, 'getURLRead')))):  ;
$_tmp_4 = ' href="'.phptal_escape($_tmp_4).'"' ;
else:  ;
$_tmp_4 = '' ;
endif ;
?>
<a<?php echo $_tmp_4 ?>
>
									<?php /* tag "li" from line 154 */; ?>
<li><?php echo phptal_escape($ctx->path($ctx->News, 'getTitle')); ?>
</li>
								</a><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

							</ul>
						</div>
						<?php /* tag "div" from line 158 */; ?>
<div class="clear"></div>
					</div>
					<?php /* tag "div" from line 160 */; ?>
<div class="news-box">
						<?php /* tag "div" from line 161 */; ?>
<div class="box-title">
							<?php /* tag "img" from line 162 */; ?>
<img src="/data/images/icon.png" width="30"/>
							<?php /* tag "span" from line 163 */; ?>
<span>PHÒNG THUỐC ĐÔNG Y</span>
						</div>
						<?php /* tag "div" from line 165 */; ?>
<div class="slider">
							<?php /* tag "div" from line 166 */; ?>
<div class="slider-wrap">
								<?php /* tag "ul" from line 167 */; ?>
<ul>
									<?php 
/* tag "li" from line 168 */ ;
$_tmp_1 = $ctx->repeat ;
$_tmp_1->News = new PHPTAL_RepeatController($ctx->NewsList3)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->News as $ctx->News): ;
?>
<li>
										<?php 
/* tag "img" from line 169 */ ;
if (null !== ($_tmp_3 = ($ctx->path($ctx->News, 'getImage')))):  ;
$_tmp_3 = ' src="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<img width="385" height="300"<?php echo $_tmp_3 ?>
/>
										<?php 
/* tag "a" from line 170 */ ;
if (null !== ($_tmp_4 = ($ctx->path($ctx->News, 'getURLRead')))):  ;
$_tmp_4 = ' href="'.phptal_escape($_tmp_4).'"' ;
else:  ;
$_tmp_4 = '' ;
endif ;
?>
<a<?php echo $_tmp_4 ?>
>
											<?php /* tag "div" from line 171 */; ?>
<div><?php echo phptal_escape($ctx->path($ctx->News, 'getTitle')); ?>
</div>
										</a>
									</li><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

								</ul>
							</div>
						</div>
						<?php /* tag "div" from line 177 */; ?>
<div class="top-list">
							<?php /* tag "div" from line 178 */; ?>
<div class="list-title">TIN MỚI CẬP NHẬT</div>
							<?php /* tag "ul" from line 179 */; ?>
<ul>
								<?php 
/* tag "a" from line 180 */ ;
$_tmp_2 = $ctx->repeat ;
$_tmp_2->News = new PHPTAL_RepeatController($ctx->NewsList3)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_2->News as $ctx->News): ;
if (null !== ($_tmp_3 = ($ctx->path($ctx->News, 'getURLRead')))):  ;
$_tmp_3 = ' href="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<a<?php echo $_tmp_3 ?>
>
									<?php /* tag "li" from line 181 */; ?>
<li><?php echo phptal_escape($ctx->path($ctx->News, 'getTitle')); ?>
</li>
								</a><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

							</ul>
						</div>
						<?php /* tag "div" from line 185 */; ?>
<div class="clear"></div>
					</div>
					
					<?php /* tag "div" from line 188 */; ?>
<div class="news-box">
						<?php /* tag "div" from line 189 */; ?>
<div class="box-title">
							<?php /* tag "img" from line 190 */; ?>
<img src="/data/images/icon.png" width="30"/>
							<?php /* tag "span" from line 191 */; ?>
<span>Bài giảng mới nhất</span>
						</div>
						<?php /* tag "div" from line 193 */; ?>
<div align="center" style="padding:10px;">
							<?php /* tag "ul" from line 194 */; ?>
<ul class="list-video">
								<?php 
/* tag "li" from line 195 */ ;
$_tmp_4 = $ctx->repeat ;
$_tmp_4->VM = new PHPTAL_RepeatController($ctx->VM24)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_4->VM as $ctx->VM): ;
?>
<li>
									<?php 
/* tag "a" from line 196 */ ;
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
/* tag "img" from line 197 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->VM, 'getVideo/getURLImage')))):  ;
$_tmp_2 = ' src="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<img width="140px" height="110px"<?php echo $_tmp_2 ?>
/>
										<?php /* tag "div" from line 198 */; ?>
<div class="monk"><?php echo phptal_escape($ctx->path($ctx->VM, 'getMonk/getName')); ?>
</div>
										<?php /* tag "div" from line 199 */; ?>
<div class="name"><?php echo phptal_escape($ctx->path($ctx->VM, 'getVideo/getName')); ?>
</div>
									</a>
								</li><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>
								
							</ul>
							<?php /* tag "div" from line 203 */; ?>
<div class="clear"></div>
						</div>
					</div>
					<?php /* tag "div" from line 206 */; ?>
<div class="news-box">
						<?php /* tag "div" from line 207 */; ?>
<div class="box-title">
							<?php /* tag "img" from line 208 */; ?>
<img src="/data/images/icon.png" width="30"/>
							<?php /* tag "span" from line 209 */; ?>
<span>Chuyên đề mới nhất</span>
						</div>
						<?php /* tag "div" from line 211 */; ?>
<div align="center" style="padding:10px;">
							<?php /* tag "ul" from line 212 */; ?>
<ul class="list-video">
								<?php 
/* tag "li" from line 213 */ ;
$_tmp_2 = $ctx->repeat ;
$_tmp_2->VL = new PHPTAL_RepeatController($ctx->VL24)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_2->VL as $ctx->VL): ;
?>
<li>
									<?php 
/* tag "a" from line 214 */ ;
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
/* tag "img" from line 215 */ ;
if (null !== ($_tmp_4 = ($ctx->path($ctx->VL, 'getVideo/getURLImage')))):  ;
$_tmp_4 = ' src="'.phptal_escape($_tmp_4).'"' ;
else:  ;
$_tmp_4 = '' ;
endif ;
?>
<img width="140px" height="110px"<?php echo $_tmp_4 ?>
/>
										<?php /* tag "div" from line 216 */; ?>
<div class="monk"><?php echo phptal_escape($ctx->path($ctx->VL, 'getCategory/getName')); ?>
</div>
										<?php /* tag "div" from line 217 */; ?>
<div class="name"><?php echo phptal_escape($ctx->path($ctx->VL, 'getVideo/getName')); ?>
</div>
									</a>
								</li><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

							</ul>
							<?php /* tag "div" from line 221 */; ?>
<div class="clear"></div>
						</div>
					</div>
				</div>				
				<?php /* tag "div" from line 225 */; ?>
<div id="sidebar">
					<?php 
/* tag "div" from line 226 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('macros.xhtml/EventBox', $_thistpl) ;
$ctx->popSlots() ;
?>

					<?php 
/* tag "div" from line 227 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('macros.xhtml/CourseBox', $_thistpl) ;
$ctx->popSlots() ;
?>

					<?php 
/* tag "div" from line 228 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('macros.xhtml/BoxRight', $_thistpl) ;
$ctx->popSlots() ;
?>

					<?php 
/* tag "div" from line 229 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('macros.xhtml/VideoBox', $_thistpl) ;
$ctx->popSlots() ;
?>

					<?php 
/* tag "div" from line 230 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('macros.xhtml/AskBox', $_thistpl) ;
$ctx->popSlots() ;
?>

					<?php 
/* tag "div" from line 231 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('macros.xhtml/CountBox', $_thistpl) ;
$ctx->popSlots() ;
?>
					
					<?php 
/* tag "div" from line 232 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('macros.xhtml/SponsorBox', $_thistpl) ;
$ctx->popSlots() ;
?>

					<?php 
/* tag "div" from line 233 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('macros.xhtml/CallendarBox', $_thistpl) ;
$ctx->popSlots() ;
?>

					<?php 
/* tag "div" from line 234 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('macros.xhtml/AdsBox', $_thistpl) ;
$ctx->popSlots() ;
?>

					
				</div>				
				<?php /* tag "div" from line 237 */; ?>
<div class="clear"></div>
			</div>
			<?php 
/* tag "div" from line 239 */ ;
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

Generated by PHPTAL from E:\AppWebServer\chuakhaituong.123app.net\mvc\templates\Home.html (edit that file instead) */; ?>