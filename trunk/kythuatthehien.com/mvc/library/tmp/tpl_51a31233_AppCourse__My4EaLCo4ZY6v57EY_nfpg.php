<?php 
function tpl_51a31233_AppCourse__My4EaLCo4ZY6v57EY_nfpg(PHPTAL $tpl, PHPTAL_Context $ctx) {
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
$_tmp_1->Course = new PHPTAL_RepeatController($ctx->Courses)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->Course as $ctx->Course): ;
?>
<tr class="content-rows">
										<?php /* tag "td" from line 23 */; ?>
<td width="32" align="center">
											<?php /* tag "div" from line 24 */; ?>
<div><?php echo phptal_escape($ctx->path($ctx->repeat, 'Course/number')); ?>
</div>
										</td>
										<?php /* tag "td" from line 26 */; ?>
<td class="text-hightlight">
											<?php 
/* tag "a" from line 27 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Course, 'getURLUpdLoad')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
>
												<?php /* tag "div" from line 28 */; ?>
<div><?php echo phptal_escape($ctx->path($ctx->Course, 'getName')); ?>
</div>
											</a>
										</td>
										<?php /* tag "td" from line 31 */; ?>
<td width="48"><?php echo phptal_escape($ctx->path($ctx->Course, 'getDateStartPrint')); ?>
</td>
										<?php /* tag "td" from line 32 */; ?>
<td width="48"><?php echo phptal_escape($ctx->path($ctx->Course, 'getDateEndPrint')); ?>
</td>
										<?php /* tag "td" from line 33 */; ?>
<td class="text-hightlight" width="80" align="center">
											<?php 
/* tag "a" from line 34 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Course, 'getURLLession')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
>
												Bài học (<?php /* tag "span" from line 35 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Course, 'getLessions/count')); ?>
</span>)
											</a>
										</td>
										<?php /* tag "td" from line 38 */; ?>
<td class="text-hightlight" width="32" align="center">
											<?php 
/* tag "a" from line 39 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Course, 'getURLDelLoad')))):  ;
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
<td colspan="7" align="center">
											<?php /* tag "a" from line 48 */; ?>
<a href="/app/course/ins/load">Thêm khóa học</a>
										</td>
									</tr>
								</tfoot>
							</table>							
						</div>
						<?php /* tag "div" from line 54 */; ?>
<div class="clear"></div>
					</div>
				</div>
				
				<?php /* tag "div" from line 58 */; ?>
<div id="sidebar">										
					<?php /* tag "div" from line 59 */; ?>
<div class="sidebar-box">
						<?php /* tag "div" from line 60 */; ?>
<div class="box-title">
							<?php /* tag "img" from line 61 */; ?>
<img src="/data/images/icon.png" width="30"/>
							<?php /* tag "span" from line 62 */; ?>
<span><?php /* tag "a" from line 62 */; ?>
<a href="/app">Admin</a></span>
							<?php /* tag "a" from line 63 */; ?>
<a href="/signout/load">&#8629; Thoát</a>
						</div>
						<?php 
/* tag "div" from line 65 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('macros.xhtml/AdminMenu', $_thistpl) ;
$ctx->popSlots() ;
?>

					</div>
				</div>
				<?php /* tag "div" from line 68 */; ?>
<div class="clear"></div>
			</div>
			<?php 
/* tag "div" from line 70 */ ;
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

Generated by PHPTAL from E:\AppWebServer\chuakhaituong.123app.net\mvc\templates\AppCourse.html (edit that file instead) */; ?>