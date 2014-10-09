<?php 
function tpl_531d21ef_AppNews__euQ4VK6iJMIlgPueN3YeFQ(PHPTAL $tpl, PHPTAL_Context $ctx) {
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
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/IncludeMETA', $_thistpl) ;
$ctx->popSlots() ;
?>

		<?php 
/* tag "span" from line 5 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/IncludeCSS', $_thistpl) ;
$ctx->popSlots() ;
?>
		
		<?php 
/* tag "span" from line 6 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/IncludeJS', $_thistpl) ;
$ctx->popSlots() ;
?>

	</head>
	<?php /* tag "body" from line 8 */; ?>
<body>
		<?php /* tag "div" from line 9 */; ?>
<div class="container-fluid">
			<?php 
/* tag "span" from line 10 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/Header', $_thistpl) ;
$ctx->popSlots() ;
?>

			<?php /* tag "div" from line 11 */; ?>
<div class="row-fluid">
				<?php /* tag "div" from line 12 */; ?>
<div class="row-fluid">
					<?php /* tag "div" from line 13 */; ?>
<div class="span3">
						<?php /* tag "div" from line 14 */; ?>
<div class="menu">
							<?php /* tag "ul" from line 15 */; ?>
<ul class="nav nav-list">
								<?php /* tag "li" from line 16 */; ?>
<li class="nav-header">DANH MỤC</li>
								<?php 
/* tag "li" from line 17 */ ;
$_tmp_1 = $ctx->repeat ;
$_tmp_1->Category1 = new PHPTAL_RepeatController($ctx->CategoryNewsAll)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->Category1 as $ctx->Category1): ;
if (null !== ($_tmp_2 = ($ctx->Category->getId()==$ctx->Category1->getId()?'active':'disabled'))):  ;
$_tmp_2 = ' class="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<li<?php echo $_tmp_2 ?>
>
									<?php 
/* tag "a" from line 18 */ ;
if (null !== ($_tmp_3 = ($ctx->path($ctx->Category1, 'getURLView')))):  ;
$_tmp_3 = ' href="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<a<?php echo $_tmp_3 ?>
>
										<?php /* tag "span" from line 19 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Category1, 'getName')); ?>
</span> <?php /* tag "span" from line 19 */; ?>
<span class="badge badge-info pull-right"><?php echo phptal_escape($ctx->path($ctx->Category1, 'getNews/count')); ?>
</span> 
									</a>
								</li><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

							</ul>
						</div>
					</div>
					<?php /* tag "div" from line 25 */; ?>
<div class="span9">
						<?php /* tag "div" from line 26 */; ?>
<div class="content">
							<?php 
/* tag "span" from line 27 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/LocationBar', $_thistpl) ;
$ctx->popSlots() ;
?>

							<?php /* tag "table" from line 28 */; ?>
<table class="table table-striped table-hover">
								<?php /* tag "thead" from line 29 */; ?>
<thead>
									<?php /* tag "tr" from line 30 */; ?>
<tr>
										<?php /* tag "th" from line 31 */; ?>
<th width="30px">STT</th>
										<?php /* tag "th" from line 32 */; ?>
<th></th>
										<?php /* tag "th" from line 33 */; ?>
<th align="left">TIÊU ĐỀ</th>
										<?php /* tag "th" from line 34 */; ?>
<th width="30px">XÓA</th>
									</tr>
								</thead>
								<?php /* tag "tbody" from line 37 */; ?>
<tbody>
									<?php 
/* tag "tr" from line 38 */ ;
$_tmp_3 = $ctx->repeat ;
$_tmp_3->News = new PHPTAL_RepeatController($ctx->NewsAll)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_3->News as $ctx->News): ;
?>
<tr>
										<?php /* tag "td" from line 39 */; ?>
<td><?php /* tag "div" from line 39 */; ?>
<div><?php echo phptal_escape($ctx->path($ctx->repeat, 'News/number')); ?>
</div></td>
										<?php /* tag "td" from line 40 */; ?>
<td>
											<?php 
/* tag "span" from line 41 */ ;
if ($ctx->path($ctx->News, 'isVIP')):  ;
?>
<span class="icon-star"></span><?php endif; ?>
																						
										</td>
										<?php /* tag "td" from line 43 */; ?>
<td>
											<?php 
/* tag "a" from line 44 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->News, 'getURLUpdLoad')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
>
												<?php /* tag "div" from line 45 */; ?>
<div><?php echo phptal_escape($ctx->path($ctx->News, 'getTitleReduce')); ?>
</div>
											</a>
										</td>
										<?php /* tag "td" from line 48 */; ?>
<td>
											<?php 
/* tag "a" from line 49 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->News, 'getURLDelLoad')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
><?php /* tag "span" from line 49 */; ?>
<span class="icon-remove"></span></a>
										</td>
									</tr><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

								</tbody>
								<?php /* tag "tfoot" from line 53 */; ?>
<tfoot>
									<?php /* tag "tr" from line 54 */; ?>
<tr>
										<?php /* tag "td" from line 55 */; ?>
<td colspan="4" align="center">
											<?php 
/* tag "a" from line 56 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Category, 'getURLNewsInsLoad')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a class="btn"<?php echo $_tmp_2 ?>
>
												<?php /* tag "span" from line 57 */; ?>
<span class="icon-plus"></span> Thêm mới
											</a>
											<?php 
/* tag "a" from line 59 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Category, 'getURLNewsAutoLoad')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a class="btn"<?php echo $_tmp_1 ?>
>
												<?php /* tag "span" from line 60 */; ?>
<span class="icon-star"></span> Cập nhật tự động
											</a>
										</td>
									</tr>
								</tfoot>
							</table>
							<?php /* tag "div" from line 66 */; ?>
<div class="pagination">
								<?php /* tag "ul" from line 67 */; ?>
<ul>
									<?php 
/* tag "li" from line 68 */ ;
$_tmp_3 = $ctx->repeat ;
$_tmp_3->P = new PHPTAL_RepeatController($ctx->path($ctx->PN, 'getPages'))
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_3->P as $ctx->P): ;
if (null !== ($_tmp_2 = ($ctx->Page==$ctx->P->getId()?'disabled':'active'))):  ;
$_tmp_2 = ' class="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<li<?php echo $_tmp_2 ?>
>
										<?php 
/* tag "a" from line 69 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->P, 'getURL')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
><?php echo phptal_escape($ctx->path($ctx->P, 'getName')); ?>
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
			</div>
			<?php 
/* tag "span" from line 77 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/Footer', $_thistpl) ;
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

Generated by PHPTAL from D:\AppWebServer\MyCodePHP\kythuatthehien.com\mvc\templates\AppNews.html (edit that file instead) */; ?>