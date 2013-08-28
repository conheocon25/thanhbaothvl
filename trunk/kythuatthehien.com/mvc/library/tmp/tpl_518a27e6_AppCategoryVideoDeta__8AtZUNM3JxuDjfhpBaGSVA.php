<?php 
function tpl_518a27e6_AppCategoryVideoDeta__8AtZUNM3JxuDjfhpBaGSVA(PHPTAL $tpl, PHPTAL_Context $ctx) {
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
/* tag "span" from line 5 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('macros.xhtml/IncludeCSS', $_thistpl) ;
$ctx->popSlots() ;
?>

		<?php /* tag "link" from line 6 */; ?>
<link rel="stylesheet" type="text/css" href="/mvc/templates/theme/base/jquery-ui-1.8.11.custom.css"/> 
		<?php /* tag "link" from line 7 */; ?>
<link rel="stylesheet" type="text/css" href="/mvc/templates/theme/base/jquery-ui-timepicker-addon.css"/>
		
		<?php 
/* tag "span" from line 9 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('macros.xhtml/IncludeJS', $_thistpl) ;
$ctx->popSlots() ;
?>

		<?php /* tag "script" from line 10 */; ?>
<script type="text/javascript" language="javascript" src="/mvc/templates/script/library/jquery-ui-1.8.11.custom.min.js"></script>
		<?php /* tag "script" from line 11 */; ?>
<script type="text/javascript" language="javascript" src="/mvc/templates/script/library/jquery-ui-timepicker-addon.js"></script>
		<?php /* tag "script" from line 12 */; ?>
<script type="text/javascript" language="javascript" src="/mvc/templates/script/library/jquery.ui.datepicker-vi.js"></script>
		<?php /* tag "script" from line 13 */; ?>
<script type="text/javascript" language="javascript" src="/mvc/templates/script/library/jquery-ui-timepicker-vi.js"></script>
		<?php /* tag "script" from line 14 */; ?>
<script type="text/javascript">
			/*<![CDATA[*/
			$(function() {
				$('#Date').datetimepicker(
					{ dateFormat: 'yy-mm-dd' }
				);
			});
			/*]]>*/
		</script>
	</head>	
	<?php /* tag "body" from line 24 */; ?>
<body>
		<?php /* tag "div" from line 25 */; ?>
<div id="wrapper">		
			<?php 
/* tag "div" from line 26 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('macros.xhtml/Header', $_thistpl) ;
$ctx->popSlots() ;
?>

			<?php /* tag "div" from line 27 */; ?>
<div id="main">
				<?php 
/* tag "div" from line 28 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('macros.xhtml/DateTimeBox', $_thistpl) ;
$ctx->popSlots() ;
?>

				<?php /* tag "div" from line 29 */; ?>
<div id="content">
					<?php /* tag "div" from line 30 */; ?>
<div class="news-box">					
						<?php /* tag "div" from line 31 */; ?>
<div class="box-title">
							<?php /* tag "img" from line 32 */; ?>
<img src="/data/images/icon.png" width="30"/>
							<?php /* tag "span" from line 33 */; ?>
<span><?php echo phptal_escape($ctx->Title); ?>
</span>
							<?php /* tag "a" from line 34 */; ?>
<a href="/app/category/video">&#8629; Trở lại</a>
						</div>						
						<?php /* tag "div" from line 36 */; ?>
<div style="padding:10px;">
							<?php /* tag "table" from line 37 */; ?>
<table border="0" width="100%" cellpadding="0" cellspacing="1" class="manager-table">
								<?php /* tag "tbody" from line 38 */; ?>
<tbody>
									<?php 
/* tag "tr" from line 39 */ ;
$_tmp_1 = $ctx->repeat ;
$_tmp_1->VL = new PHPTAL_RepeatController($ctx->path($ctx->Category, 'getVLs'))
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->VL as $ctx->VL): ;
?>
<tr class="content-rows">
										<?php /* tag "td" from line 40 */; ?>
<td width="32" align="center">
											<?php /* tag "div" from line 41 */; ?>
<div><?php echo phptal_escape($ctx->path($ctx->repeat, 'VL/number')); ?>
</div>
										</td>
										<?php /* tag "td" from line 43 */; ?>
<td class="text-hightlight">
											<?php 
/* tag "a" from line 44 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->VL, 'getURLUpdLoad')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
>
												<?php /* tag "div" from line 45 */; ?>
<div><?php echo phptal_escape($ctx->path($ctx->VL, 'getVideo/getName')); ?>
</div>
											</a>
										</td>
										<?php /* tag "td" from line 48 */; ?>
<td><?php echo phptal_escape($ctx->path($ctx->VL, 'getVideo/getTime')); ?>
</td>
										<?php /* tag "td" from line 49 */; ?>
<td class="text-hightlight" width="32" align="center">
											<?php 
/* tag "a" from line 50 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->VL, 'getURLDelLoad')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
>
												<?php /* tag "div" from line 51 */; ?>
<div><?php /* tag "img" from line 51 */; ?>
<img src="/data/images/remove.png" width="20"/></div>
											</a>
										</td>
									</tr><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

								</tbody>
								<?php /* tag "tfoot" from line 56 */; ?>
<tfoot>
									<?php /* tag "tr" from line 57 */; ?>
<tr>
										<?php /* tag "td" from line 58 */; ?>
<td colspan="4" align="center">
											<?php 
/* tag "a" from line 59 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Category, 'getURLVideoInsLoad')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
>
												<?php /* tag "div" from line 60 */; ?>
<div><?php /* tag "img" from line 60 */; ?>
<img src="/data/images/add.png" width="20"/></div>
											</a>
										</td>
									</tr>
								</tfoot>
							</table>
						</div>
						<?php /* tag "div" from line 67 */; ?>
<div class="clear"></div>
					</div>
				</div>
				
				<?php /* tag "div" from line 71 */; ?>
<div id="sidebar">										
					<?php /* tag "div" from line 72 */; ?>
<div class="sidebar-box">
						<?php /* tag "div" from line 73 */; ?>
<div class="box-title">
							<?php /* tag "img" from line 74 */; ?>
<img src="/data/images/icon.png" width="30"/>
							<?php /* tag "span" from line 75 */; ?>
<span>Admin</span>
							<?php /* tag "a" from line 76 */; ?>
<a href="/signout/load">&#8629; Thoát</a>
						</div>						
						<?php /* tag "div" from line 78 */; ?>
<div class="manager-menu">
							<?php /* tag "ul" from line 79 */; ?>
<ul>
								<?php 
/* tag "a" from line 80 */ ;
$_tmp_1 = $ctx->repeat ;
$_tmp_1->Category1 = new PHPTAL_RepeatController($ctx->CategoriesVideo)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->Category1 as $ctx->Category1): ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Category1, 'getURLVideo')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
>
									<?php 
/* tag "li" from line 81 */ ;
if (null !== ($_tmp_3 = ($ctx->Category->getId()==$ctx->Category1->getId()?'menu-select':''))):  ;
$_tmp_3 = ' class="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<li<?php echo $_tmp_3 ?>
>
										<?php /* tag "span" from line 82 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Category1, 'getName')); ?>
</span> (<?php /* tag "span" from line 82 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Category1, 'getVLs/count')); ?>
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
				<?php /* tag "div" from line 89 */; ?>
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

Generated by PHPTAL from E:\AppWebServer\chuakhaituong.123app.net\mvc\templates\AppCategoryVideoDetail.html (edit that file instead) */; ?>