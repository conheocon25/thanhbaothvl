<?php 
function tpl_518cc2b9_Home__O1PbjDaBjrOrcDSf6MUhPg(PHPTAL $tpl, PHPTAL_Context $ctx) {
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

		<?php /* tag "link" from line 6 */; ?>
<link rel="stylesheet" type="text/css" href="/mvc/templates/theme/base/boxright.css"/>
	</head>	
	<?php /* tag "body" from line 8 */; ?>
<body>
		<?php /* tag "div" from line 9 */; ?>
<div id="wrapper">
			<?php 
/* tag "div" from line 10 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('macros.xhtml/Header', $_thistpl) ;
$ctx->popSlots() ;
?>

			<?php /* tag "div" from line 11 */; ?>
<div id="main">				
				<?php 
/* tag "div" from line 12 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('macros.xhtml/DateTimeBox', $_thistpl) ;
$ctx->popSlots() ;
?>

				<?php 
/* tag "div" from line 13 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('macros.xhtml/TextGo', $_thistpl) ;
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
<span>Tiêu điểm</span>							
						</div>
						<?php /* tag "div" from line 20 */; ?>
<div align="center" style="padding:10px;">
							<?php 
/* tag "div" from line 21 */ ;
if ($ctx->Course):  ;
?>
<div class="picture-banner parent">
								<?php 
/* tag "a" from line 22 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Course, 'getURLRead')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
>
									<?php 
/* tag "img" from line 23 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Course, 'getImage')))):  ;
$_tmp_2 = ' src="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<img width="100%"<?php echo $_tmp_2 ?>
/>
									<?php /* tag "div" from line 24 */; ?>
<div class="child"><?php echo phptal_escape($ctx->path($ctx->Course, 'getName')); ?>
</div>
								</a>
							</div><?php endif; ?>

							<?php 
/* tag "div" from line 27 */ ;
if (!($ctx->Course)):  ;
?>
<div class="picture-banner parent">
								<?php /* tag "a" from line 28 */; ?>
<a>
									<?php 
/* tag "img" from line 29 */ ;
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
/* tag "div" from line 33 */ ;
if ($ctx->Course):  ;
?>
<div class="list-picture">																
								<?php 
/* tag "div" from line 34 */ ;
if ($ctx->path($ctx->Course, 'getLessionNear')):  ;
?>
<div class="grid-left parent">
									<?php 
/* tag "a" from line 35 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Course, 'getLessionNear/getURLRead')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
>
										<?php 
/* tag "img" from line 36 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Course, 'getLessionNear/getImage')))):  ;
$_tmp_2 = ' src="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<img width="280" height="86"<?php echo $_tmp_2 ?>
/>
									</a>									
									<?php /* tag "div" from line 38 */; ?>
<div style="margin-top:-25px;">
										<?php /* tag "h3" from line 39 */; ?>
<h3 style="margin-bottom:5px; color:#FF0000; text-align:left; padding-left:15px; margin-top:30px;">
											LỚP ĐÃ
										</h3>
										<?php 
/* tag "div" from line 42 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Course, 'getLessionNear/getDateEnd')))):  ;
$_tmp_2 = ' alt="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<div id="class1Countdown" style="margin-left:5px;"<?php echo $_tmp_2 ?>
></div>
										<?php /* tag "h3" from line 43 */; ?>
<h3 style="position:absolute; right:15px; bottom:5px; color:#FF0000;">
											KẾT THÚC
										</h3>
									</div>
									<?php /* tag "script" from line 47 */; ?>
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
									<?php /* tag "div" from line 57 */; ?>
<div class="child"><?php echo phptal_escape($ctx->path($ctx->Course, 'getLessionNear/getName')); ?>
</div>
								</div><?php endif; ?>

								<?php 
/* tag "div" from line 59 */ ;
if (!($ctx->path($ctx->Course, 'getLessionNear'))):  ;
?>
<div class="grid-left parent">									
									<?php /* tag "span" from line 60 */; ?>
<span>
										<?php 
/* tag "img" from line 61 */ ;
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
/* tag "div" from line 64 */ ;
if ($ctx->path($ctx->Course, 'getLessionNext')):  ;
?>
<div class="grid-right parent">									
									<?php 
/* tag "a" from line 65 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Course, 'getLessionNext/getURLRead')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
>
										<?php 
/* tag "img" from line 66 */ ;
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
/* tag "div" from line 68 */ ;
if ($ctx->path($ctx->Course, 'getLessionNext')):  ;
?>
<div style="margin-top:-25px;">

										<?php 
/* tag "span" from line 70 */ ;
if ($ctx->path($ctx->Course, 'getLessionNext')):  ;
?>
<span>
											<?php /* tag "h3" from line 71 */; ?>
<h3 style="margin-bottom:5px; color:#0000FF; text-align:left; padding-left:15px; margin-top:30px;">
												CÒN
											</h3>
											<?php 
/* tag "div" from line 74 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Course, 'getLessionNext/getDateStart')))):  ;
$_tmp_1 = ' alt="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<div id="class2Countdown" style="margin-left:5px;"<?php echo $_tmp_1 ?>
></div>
											<?php /* tag "h3" from line 75 */; ?>
<h3 style="position:absolute; right:15px; bottom:5px; color:#0000FF;">
												LỚP BẮT ĐẦU
											</h3>
										</span><?php endif; ?>

									</div><?php endif; ?>

									<?php /* tag "script" from line 80 */; ?>
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
									<?php /* tag "div" from line 90 */; ?>
<div class="child"><?php echo phptal_escape($ctx->path($ctx->Course, 'getLessionNext/getName')); ?>
</div>
								</div><?php endif; ?>

								
								<?php /* tag "div" from line 93 */; ?>
<div class="clear"></div>
							</div><?php endif; ?>

							<?php /* tag "ul" from line 95 */; ?>
<ul class="list-video">							
								<?php 
/* tag "li" from line 96 */ ;
$_tmp_2 = $ctx->repeat ;
$_tmp_2->VL = new PHPTAL_RepeatController($ctx->VL8)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_2->VL as $ctx->VL): ;
?>
<li>
									<?php 
/* tag "a" from line 97 */ ;
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
/* tag "img" from line 98 */ ;
if (null !== ($_tmp_4 = ($ctx->path($ctx->VL, 'getVideo/getURLImage')))):  ;
$_tmp_4 = ' src="'.phptal_escape($_tmp_4).'"' ;
else:  ;
$_tmp_4 = '' ;
endif ;
?>
<img width="140px" height="110px"<?php echo $_tmp_4 ?>
/>
										<?php /* tag "div" from line 99 */; ?>
<div class="name"><?php echo phptal_escape($ctx->path($ctx->VL, 'getVideo/getName')); ?>
</div>
									</a>
								</li><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

							</ul>														
							<?php /* tag "div" from line 103 */; ?>
<div class="clear"></div>
						</div>
					</div>
					
					<?php /* tag "div" from line 107 */; ?>
<div class="news-box">
						<?php /* tag "div" from line 108 */; ?>
<div class="box-title">
							<?php /* tag "img" from line 109 */; ?>
<img src="/data/images/icon.png" width="30"/>
							<?php /* tag "span" from line 110 */; ?>
<span>TIN NỘI BỘ</span>							
						</div>
						<?php /* tag "div" from line 112 */; ?>
<div class="slider">
							<?php /* tag "div" from line 113 */; ?>
<div class="slider-wrap">
								<?php /* tag "ul" from line 114 */; ?>
<ul>
									<?php 
/* tag "li" from line 115 */ ;
$_tmp_4 = $ctx->repeat ;
$_tmp_4->News = new PHPTAL_RepeatController($ctx->NewsList1)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_4->News as $ctx->News): ;
?>
<li>
										<?php 
/* tag "img" from line 116 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->News, 'getImage')))):  ;
$_tmp_1 = ' src="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<img width="385" height="300"<?php echo $_tmp_1 ?>
/>
										<?php 
/* tag "a" from line 117 */ ;
if (null !== ($_tmp_3 = ($ctx->path($ctx->News, 'getURLRead')))):  ;
$_tmp_3 = ' href="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<a<?php echo $_tmp_3 ?>
>
											<?php /* tag "div" from line 118 */; ?>
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
						<?php /* tag "div" from line 124 */; ?>
<div class="top-list">
							<?php /* tag "div" from line 125 */; ?>
<div class="list-title">TIN MỚI CẬP NHẬT</div>
							<?php /* tag "ul" from line 126 */; ?>
<ul>
								<?php 
/* tag "a" from line 127 */ ;
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
									<?php /* tag "li" from line 128 */; ?>
<li><?php echo phptal_escape($ctx->path($ctx->News, 'getTitle')); ?>
</li>
								</a><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

							</ul>
						</div>
						<?php /* tag "div" from line 132 */; ?>
<div class="clear"></div>
					</div>
					<?php /* tag "div" from line 134 */; ?>
<div class="news-box">
						<?php /* tag "div" from line 135 */; ?>
<div class="box-title">
							<?php /* tag "img" from line 136 */; ?>
<img src="/data/images/icon.png" width="30"/>
							<?php /* tag "span" from line 137 */; ?>
<span>TIN TỪ THIỆN XÃ HỘI</span>							
						</div>
						<?php /* tag "div" from line 139 */; ?>
<div class="slider">
							<?php /* tag "div" from line 140 */; ?>
<div class="slider-wrap">
								<?php /* tag "ul" from line 141 */; ?>
<ul>
									<?php 
/* tag "li" from line 142 */ ;
$_tmp_3 = $ctx->repeat ;
$_tmp_3->News = new PHPTAL_RepeatController($ctx->NewsList2)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_3->News as $ctx->News): ;
?>
<li>
										<?php 
/* tag "img" from line 143 */ ;
if (null !== ($_tmp_4 = ($ctx->path($ctx->News, 'getImage')))):  ;
$_tmp_4 = ' src="'.phptal_escape($_tmp_4).'"' ;
else:  ;
$_tmp_4 = '' ;
endif ;
?>
<img width="385" height="300"<?php echo $_tmp_4 ?>
/>
										<?php 
/* tag "a" from line 144 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->News, 'getURLRead')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
>
											<?php /* tag "div" from line 145 */; ?>
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
						<?php /* tag "div" from line 151 */; ?>
<div class="top-list">
							<?php /* tag "div" from line 152 */; ?>
<div class="list-title">TIN MỚI CẬP NHẬT</div>
							<?php /* tag "ul" from line 153 */; ?>
<ul>
								<?php 
/* tag "a" from line 154 */ ;
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
									<?php /* tag "li" from line 155 */; ?>
<li><?php echo phptal_escape($ctx->path($ctx->News, 'getTitle')); ?>
</li>
								</a><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

							</ul>
						</div>
						<?php /* tag "div" from line 159 */; ?>
<div class="clear"></div>
					</div>
					<?php /* tag "div" from line 161 */; ?>
<div class="news-box">
						<?php /* tag "div" from line 162 */; ?>
<div class="box-title">
							<?php /* tag "img" from line 163 */; ?>
<img src="/data/images/icon.png" width="30"/>
							<?php /* tag "span" from line 164 */; ?>
<span>PHÒNG THUỐC ĐÔNG Y</span>
						</div>
						<?php /* tag "div" from line 166 */; ?>
<div class="slider">
							<?php /* tag "div" from line 167 */; ?>
<div class="slider-wrap">
								<?php /* tag "ul" from line 168 */; ?>
<ul>
									<?php 
/* tag "li" from line 169 */ ;
$_tmp_1 = $ctx->repeat ;
$_tmp_1->News = new PHPTAL_RepeatController($ctx->NewsList3)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->News as $ctx->News): ;
?>
<li>
										<?php 
/* tag "img" from line 170 */ ;
if (null !== ($_tmp_3 = ($ctx->path($ctx->News, 'getImage')))):  ;
$_tmp_3 = ' src="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<img width="385" height="300"<?php echo $_tmp_3 ?>
/>
										<?php 
/* tag "a" from line 171 */ ;
if (null !== ($_tmp_4 = ($ctx->path($ctx->News, 'getURLRead')))):  ;
$_tmp_4 = ' href="'.phptal_escape($_tmp_4).'"' ;
else:  ;
$_tmp_4 = '' ;
endif ;
?>
<a<?php echo $_tmp_4 ?>
>
											<?php /* tag "div" from line 172 */; ?>
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
						<?php /* tag "div" from line 178 */; ?>
<div class="top-list">
							<?php /* tag "div" from line 179 */; ?>
<div class="list-title">TIN MỚI CẬP NHẬT</div>
							<?php /* tag "ul" from line 180 */; ?>
<ul>
								<?php 
/* tag "a" from line 181 */ ;
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
									<?php /* tag "li" from line 182 */; ?>
<li><?php echo phptal_escape($ctx->path($ctx->News, 'getTitle')); ?>
</li>
								</a><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

							</ul>
						</div>
						<?php /* tag "div" from line 186 */; ?>
<div class="clear"></div>
					</div>
					
					<?php /* tag "div" from line 189 */; ?>
<div class="news-box">
						<?php /* tag "div" from line 190 */; ?>
<div class="box-title">
							<?php /* tag "img" from line 191 */; ?>
<img src="/data/images/icon.png" width="30"/>
							<?php /* tag "span" from line 192 */; ?>
<span>Bài giảng mới nhất</span>
						</div>
						<?php /* tag "div" from line 194 */; ?>
<div align="center" style="padding:10px;">
							<?php /* tag "ul" from line 195 */; ?>
<ul class="list-video">
								<?php 
/* tag "li" from line 196 */ ;
$_tmp_4 = $ctx->repeat ;
$_tmp_4->VM = new PHPTAL_RepeatController($ctx->VM24)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_4->VM as $ctx->VM): ;
?>
<li>
									<?php 
/* tag "a" from line 197 */ ;
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
/* tag "img" from line 198 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->VM, 'getVideo/getURLImage')))):  ;
$_tmp_2 = ' src="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<img width="140px" height="110px"<?php echo $_tmp_2 ?>
/>
										<?php /* tag "div" from line 199 */; ?>
<div class="monk"><?php echo phptal_escape($ctx->path($ctx->VM, 'getMonk/getName')); ?>
</div>
										<?php /* tag "div" from line 200 */; ?>
<div class="name"><?php echo phptal_escape($ctx->path($ctx->VM, 'getVideo/getName')); ?>
</div>
									</a>
								</li><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>
								
							</ul>
							<?php /* tag "div" from line 204 */; ?>
<div class="clear"></div>
						</div>
					</div>
					<?php /* tag "div" from line 207 */; ?>
<div class="news-box">
						<?php /* tag "div" from line 208 */; ?>
<div class="box-title">
							<?php /* tag "img" from line 209 */; ?>
<img src="/data/images/icon.png" width="30"/>
							<?php /* tag "span" from line 210 */; ?>
<span>Chuyên đề mới nhất</span>
						</div>
						<?php /* tag "div" from line 212 */; ?>
<div align="center" style="padding:10px;">
							<?php /* tag "ul" from line 213 */; ?>
<ul class="list-video">
								<?php 
/* tag "li" from line 214 */ ;
$_tmp_2 = $ctx->repeat ;
$_tmp_2->VL = new PHPTAL_RepeatController($ctx->VL24)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_2->VL as $ctx->VL): ;
?>
<li>
									<?php 
/* tag "a" from line 215 */ ;
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
/* tag "img" from line 216 */ ;
if (null !== ($_tmp_4 = ($ctx->path($ctx->VL, 'getVideo/getURLImage')))):  ;
$_tmp_4 = ' src="'.phptal_escape($_tmp_4).'"' ;
else:  ;
$_tmp_4 = '' ;
endif ;
?>
<img width="140px" height="110px"<?php echo $_tmp_4 ?>
/>
										<?php /* tag "div" from line 217 */; ?>
<div class="monk"><?php echo phptal_escape($ctx->path($ctx->VL, 'getCategory/getName')); ?>
</div>
										<?php /* tag "div" from line 218 */; ?>
<div class="name"><?php echo phptal_escape($ctx->path($ctx->VL, 'getVideo/getName')); ?>
</div>
									</a>
								</li><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

							</ul>
							<?php /* tag "div" from line 222 */; ?>
<div class="clear"></div>
						</div>
					</div>
				</div>				
				<?php /* tag "div" from line 226 */; ?>
<div id="sidebar">
					<?php 
/* tag "div" from line 227 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('macros.xhtml/EventBox', $_thistpl) ;
$ctx->popSlots() ;
?>

					<?php 
/* tag "div" from line 228 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('macros.xhtml/CourseBox', $_thistpl) ;
$ctx->popSlots() ;
?>

					<?php 
/* tag "div" from line 229 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('macros.xhtml/BoxRight', $_thistpl) ;
$ctx->popSlots() ;
?>

					<?php 
/* tag "div" from line 230 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('macros.xhtml/VideoBox', $_thistpl) ;
$ctx->popSlots() ;
?>

					<?php 
/* tag "div" from line 231 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('macros.xhtml/AskBox', $_thistpl) ;
$ctx->popSlots() ;
?>

					<?php 
/* tag "div" from line 232 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('macros.xhtml/CountBox', $_thistpl) ;
$ctx->popSlots() ;
?>
					
					<?php 
/* tag "div" from line 233 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('macros.xhtml/SponsorBox', $_thistpl) ;
$ctx->popSlots() ;
?>

					<?php 
/* tag "div" from line 234 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('macros.xhtml/CallendarBox', $_thistpl) ;
$ctx->popSlots() ;
?>

					<?php 
/* tag "div" from line 235 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('macros.xhtml/AdsBox', $_thistpl) ;
$ctx->popSlots() ;
?>

					<?php 
/* tag "div" from line 236 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('macros.xhtml/BoxRightNews', $_thistpl) ;
$ctx->popSlots() ;
?>
					
					
				</div>				
				<?php /* tag "div" from line 239 */; ?>
<div class="clear"></div>
			</div>
			<?php 
/* tag "div" from line 241 */ ;
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