<?php 
function tpl_531d21ef_AppCategoryNews__UuAhOA5zGWBbQLoBNhgQtQ(PHPTAL $tpl, PHPTAL_Context $ctx) {
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
						<?php 
/* tag "span" from line 14 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/Menu', $_thistpl) ;
$ctx->popSlots() ;
?>

					</div>
					<?php /* tag "div" from line 16 */; ?>
<div class="span9">
						<?php /* tag "div" from line 17 */; ?>
<div class="content">
							<?php 
/* tag "span" from line 18 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/LocationBar', $_thistpl) ;
$ctx->popSlots() ;
?>

							<?php /* tag "table" from line 19 */; ?>
<table class="table table-striped table-hover">
								<?php /* tag "thead" from line 20 */; ?>
<thead>
									<?php /* tag "tr" from line 21 */; ?>
<tr>
										<?php /* tag "th" from line 22 */; ?>
<th width="32">STT</th>
										<?php /* tag "th" from line 23 */; ?>
<th>TÊN</th>
										<?php /* tag "th" from line 24 */; ?>
<th width="150">TIN TỨC</th>										
										<?php /* tag "th" from line 25 */; ?>
<th width="32">XÓA</th>
									</tr>
								</thead>
								<?php /* tag "tbody" from line 28 */; ?>
<tbody>
									<?php 
/* tag "tr" from line 29 */ ;
$_tmp_1 = $ctx->repeat ;
$_tmp_1->Category = new PHPTAL_RepeatController($ctx->CategoryAll)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->Category as $ctx->Category): ;
?>
<tr class="content-rows">
										<?php /* tag "td" from line 30 */; ?>
<td width="32" align="center">
											<?php /* tag "div" from line 31 */; ?>
<div><?php echo phptal_escape($ctx->path($ctx->repeat, 'Category/number')); ?>
</div>
										</td>
										<?php /* tag "td" from line 33 */; ?>
<td>
											<?php 
/* tag "a" from line 34 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Category, 'getURLUpdLoad')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
>
												<?php /* tag "div" from line 35 */; ?>
<div><?php echo phptal_escape($ctx->path($ctx->Category, 'getName')); ?>
</div>
											</a>
										</td>
										<?php /* tag "td" from line 38 */; ?>
<td>
											<?php 
/* tag "a" from line 39 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Category, 'getURLView')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
>
												<?php /* tag "div" from line 40 */; ?>
<div>Số tin (<?php /* tag "span" from line 40 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Category, 'getNews/count')); ?>
</span>)</div>
											</a>
										</td>
										
										<?php /* tag "td" from line 44 */; ?>
<td><?php 
/* tag "a" from line 44 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Category, 'getURLDelLoad')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
><?php /* tag "span" from line 44 */; ?>
<span class="icon-remove"></span></a></td>
									</tr><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

								</tbody>
								<?php /* tag "tfoot" from line 47 */; ?>
<tfoot>
									<?php /* tag "tr" from line 48 */; ?>
<tr>
										<?php /* tag "td" from line 49 */; ?>
<td colspan="2" align="center">
											<?php /* tag "a" from line 50 */; ?>
<a class="btn" href="/app/category/news/ins/load">
												<?php /* tag "span" from line 51 */; ?>
<span class="icon-plus"></span> Thêm mới
											</a>
										</td>
										<?php /* tag "td" from line 54 */; ?>
<td colspan="2" align="center">
											<?php /* tag "a" from line 55 */; ?>
<a class="btn" href="/app/news/update/all">
												<?php /* tag "span" from line 56 */; ?>
<span class="icon-edit"></span> Cập nhật tin
											</a>
										</td>
									</tr>
								</tfoot>
							</table>
							<?php 
/* tag "span" from line 62 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/PageBar', $_thistpl) ;
$ctx->popSlots() ;
?>

						</div>
					</div>
				</div>
			</div>
			<?php 
/* tag "span" from line 67 */ ;
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

Generated by PHPTAL from D:\AppWebServer\MyCodePHP\kythuatthehien.com\mvc\templates\AppCategoryNews.html (edit that file instead) */; ?>