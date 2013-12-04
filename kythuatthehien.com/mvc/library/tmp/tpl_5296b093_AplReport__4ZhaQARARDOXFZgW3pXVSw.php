<?php 
function tpl_5296b093_AplReport__4ZhaQARARDOXFZgW3pXVSw(PHPTAL $tpl, PHPTAL_Context $ctx) {
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
$tpl->_executeMacroOfTemplate('mApplication.xhtml/IncludeMETA', $_thistpl) ;
$ctx->popSlots() ;
?>

		<?php 
/* tag "span" from line 5 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mApplication.xhtml/IncludeCSS', $_thistpl) ;
$ctx->popSlots() ;
?>
		
		<?php 
/* tag "span" from line 6 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mApplication.xhtml/IncludeJS', $_thistpl) ;
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
$tpl->_executeMacroOfTemplate('mApplication.xhtml/Header', $_thistpl) ;
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
$tpl->_executeMacroOfTemplate('mApplication.xhtml/Menu', $_thistpl) ;
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
$tpl->_executeMacroOfTemplate('mApplication.xhtml/LocationBar', $_thistpl) ;
$ctx->popSlots() ;
?>
														
							<?php /* tag "table" from line 19 */; ?>
<table class="table table-striped table-hover">
								<?php /* tag "thead" from line 20 */; ?>
<thead>
									<?php /* tag "tr" from line 21 */; ?>
<tr>
										<?php /* tag "th" from line 22 */; ?>
<th width="35px">STT</th>										
										<?php /* tag "th" from line 23 */; ?>
<th align="center">Báo cáo</th>
										<?php /* tag "th" from line 24 */; ?>
<th align="center">Từ ngày</th>
										<?php /* tag "th" from line 25 */; ?>
<th width="center">Đến Ngày</th>										
										<?php /* tag "th" from line 26 */; ?>
<th align="center">Tồ CM</th>											
										<?php /* tag "th" from line 27 */; ?>
<th align="center">Cá Nhân</th>																													
										<?php /* tag "th" from line 28 */; ?>
<th align="center" width="35px">XÓA</th>																		
									</tr>
								</thead>
								<?php /* tag "tbody" from line 31 */; ?>
<tbody>
									<?php 
/* tag "tr" from line 32 */ ;
$_tmp_1 = $ctx->repeat ;
$_tmp_1->Report = new PHPTAL_RepeatController($ctx->Reports)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->Report as $ctx->Report): ;
?>
<tr>
										<?php /* tag "td" from line 33 */; ?>
<td width="35px" align="center">
											<?php /* tag "div" from line 34 */; ?>
<div><?php echo phptal_escape($ctx->path($ctx->repeat, 'Report/number')); ?>
</div>
										</td>
										<?php /* tag "td" from line 36 */; ?>
<td align="left">
											<?php 
/* tag "a" from line 37 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Report, 'getURLUpdLoad')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
>
												<?php /* tag "div" from line 38 */; ?>
<div><?php echo phptal_escape($ctx->path($ctx->Report, 'getName')); ?>
</div>
											</a>
										</td>
										<?php /* tag "td" from line 41 */; ?>
<td align="center"><?php echo phptal_escape($ctx->path($ctx->Report, 'getDateStartPrint')); ?>
</td>
										<?php /* tag "td" from line 42 */; ?>
<td align="center"><?php echo phptal_escape($ctx->path($ctx->Report, 'getDateEndPrint')); ?>
</td>
										
										<?php /* tag "td" from line 44 */; ?>
<td align="center">
											<?php 
/* tag "a" from line 45 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Report, 'getURLReportDepartment')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a target="blank"<?php echo $_tmp_2 ?>
><?php /* tag "span" from line 45 */; ?>
<span class="icon-print"></span></a>	
										</td>
										<?php /* tag "td" from line 47 */; ?>
<td align="center">
											<?php 
/* tag "a" from line 48 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Report, 'getURLReportUser')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a target="blank"<?php echo $_tmp_2 ?>
><?php /* tag "span" from line 48 */; ?>
<span class="icon-print"></span></a>	
										</td>
										
										<?php /* tag "td" from line 51 */; ?>
<td align="center" width="35px">
											<?php 
/* tag "a" from line 52 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Report, 'getURLDelLoad')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
><?php /* tag "span" from line 52 */; ?>
<span class="icon-remove"></span></a>
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
<td colspan="2">
											<?php 
/* tag "a" from line 59 */ ;
if (null !== ($_tmp_2 = ('thu-lao/report/ins/load'))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a class="btn"<?php echo $_tmp_2 ?>
>
												<?php /* tag "span" from line 60 */; ?>
<span class="icon-plus"></span> Thêm mới
											</a>
										</td>										
									</tr>									
								</tfoot>
							</table>					
							
						</div>
					</div>
				</div>
			</div>
			<?php 
/* tag "span" from line 71 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mApplication.xhtml/Footer', $_thistpl) ;
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

Generated by PHPTAL from D:\AppWebServer\MyCodePHP\kythuatthehien.com\mvc\templates\AplReport.html (edit that file instead) */; ?>