<?php 
function tpl_52954589_AplReward___MuMyNKZuHLtY6xSt4JJGg(PHPTAL $tpl, PHPTAL_Context $ctx) {
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

		<?php /* tag "link" from line 6 */; ?>
<link rel="stylesheet" type="text/css" href="/mvc/templates/theme/base/jquery-ui-1.8.11.custom.css"/>
		<?php /* tag "link" from line 7 */; ?>
<link rel="stylesheet" type="text/css" href="/mvc/templates/theme/base/jquery-ui-timepicker-addon.css"/>
		
		<?php /* tag "script" from line 9 */; ?>
<script type="text/javascript" language="javascript" src="/mvc/templates/script/library/jquery-1.7.1.min.js"></script>
		<?php /* tag "script" from line 10 */; ?>
<script type="text/javascript" language="javascript" src="/mvc/templates/script/library/jquery.countdown.js"></script>
		<?php /* tag "script" from line 11 */; ?>
<script type="text/javascript" language="javascript" src="/mvc/templates/theme/bootstrap/js/bootstrap.js"></script>
		<?php /* tag "script" from line 12 */; ?>
<script type="text/javascript" language="javascript" src="/mvc/templates/script/user/base.js"></script>
		
		<?php /* tag "script" from line 14 */; ?>
<script type="text/javascript" language="javascript" src="/mvc/templates/script/library/jquery-ui-1.8.11.custom.min.js"></script>
		<?php /* tag "script" from line 15 */; ?>
<script type="text/javascript" language="javascript" src="/mvc/templates/script/library/jquery-ui-timepicker-addon.js"></script>
		<?php /* tag "script" from line 16 */; ?>
<script type="text/javascript" language="javascript" src="/mvc/templates/script/library/jquery.ui.datepicker-vi.js"></script>
		<?php /* tag "script" from line 17 */; ?>
<script type="text/javascript" language="javascript" src="/mvc/templates/script/library/jquery-ui-timepicker-vi.js"></script>		
		<?php /* tag "script" from line 18 */; ?>
<script type="text/javascript" language="javascript" src="/mvc/templates/script/library/ckeditor/ckeditor.js"></script>
		<?php /* tag "script" from line 19 */; ?>
<script type="text/javascript">
		/*<![CDATA[*/
				$(document).ready(function() {
					$(function() {$('#DateStart').datetimepicker({ dateFormat: 'yy-mm-dd' });});
					
				});				
		/*]]>*/
		</script>
	</head>
	<?php /* tag "body" from line 28 */; ?>
<body>
		<?php /* tag "div" from line 29 */; ?>
<div class="container-fluid">
			<?php 
/* tag "span" from line 30 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mApplication.xhtml/Header', $_thistpl) ;
$ctx->popSlots() ;
?>

			<?php /* tag "div" from line 31 */; ?>
<div class="row-fluid">
				<?php /* tag "div" from line 32 */; ?>
<div class="row-fluid">
					<?php /* tag "div" from line 33 */; ?>
<div class="span3">
						<?php 
/* tag "span" from line 34 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mApplication.xhtml/Menu', $_thistpl) ;
$ctx->popSlots() ;
?>

					</div>
					<?php /* tag "div" from line 36 */; ?>
<div class="span9">
						<?php /* tag "div" from line 37 */; ?>
<div class="content">
							<?php 
/* tag "span" from line 38 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mApplication.xhtml/LocationBar', $_thistpl) ;
$ctx->popSlots() ;
?>
							
							<?php 
/* tag "form" from line 39 */ ;
if (null !== ($_tmp_1 = ('thu-lao/reward/ins/exe'))):  ;
$_tmp_1 = ' action="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<form class="form-horizontal" method="post"<?php echo $_tmp_1 ?>
>														
								<?php /* tag "div" from line 40 */; ?>
<div class="control-group">
									<?php /* tag "label" from line 41 */; ?>
<label class="control-label" for="IdCategory">Tên Chương trình</label>
									<?php /* tag "div" from line 42 */; ?>
<div class="controls">
										<?php /* tag "select" from line 43 */; ?>
<select name="IdCategory">
											<?php 
/* tag "option" from line 44 */ ;
$_tmp_2 = $ctx->repeat ;
$_tmp_2->CategoryPrograme = new PHPTAL_RepeatController($ctx->CategoryProgrameAll)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_2->CategoryPrograme as $ctx->CategoryPrograme): ;
if (null !== ($_tmp_3 = ($ctx->path($ctx->CategoryPrograme, 'getId')))):  ;
$_tmp_3 = ' value="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<option<?php echo $_tmp_3 ?>
>
												<?php /* tag "span" from line 45 */; ?>
<span style="width:100%;"><?php echo phptal_escape($ctx->path($ctx->CategoryPrograme, 'getName')); ?>
</span>
											</option><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

										</select>
									</div>
								</div>
								<?php /* tag "div" from line 50 */; ?>
<div class="control-group">
									<?php /* tag "label" from line 51 */; ?>
<label class="control-label" for="DateStart">Ngày làm</label>
									<?php /* tag "div" from line 52 */; ?>
<div class="controls">
										<?php /* tag "input" from line 53 */; ?>
<input id="DateStart" readonly="readonly" name="DateStart" type="text"/>
									</div>
								</div>
								<?php /* tag "div" from line 56 */; ?>
<div class="control-group">
									<?php /* tag "label" from line 57 */; ?>
<label class="control-label" for="Count">Số lượng</label>
									<?php /* tag "div" from line 58 */; ?>
<div class="controls">										
										<?php /* tag "select" from line 59 */; ?>
<select name="Count">
											<?php /* tag "option" from line 60 */; ?>
<option value="1">
												<?php /* tag "span" from line 61 */; ?>
<span>1 Lần/ngày</span>
											</option>
											<?php /* tag "option" from line 63 */; ?>
<option value="2">
												<?php /* tag "span" from line 64 */; ?>
<span>2 Lần/ngày</span>
											</option>
											<?php /* tag "option" from line 66 */; ?>
<option value="3">
												<?php /* tag "span" from line 67 */; ?>
<span>3 Lần/ngày</span>
											</option>
											<?php /* tag "option" from line 69 */; ?>
<option value="4">
												<?php /* tag "span" from line 70 */; ?>
<span>4 Lần/ngày</span>
											</option>
											<?php /* tag "option" from line 72 */; ?>
<option value="5">
												<?php /* tag "span" from line 73 */; ?>
<span>5 Lần/ngày</span>
											</option>
										</select>
									</div>
								</div>
								<?php /* tag "div" from line 78 */; ?>
<div class="control-group">
									<?php /* tag "label" from line 79 */; ?>
<label class="control-label" for="Content">Nội dung</label>
									<?php /* tag "div" from line 80 */; ?>
<div class="controls">
										<?php /* tag "textarea" from line 81 */; ?>
<textarea class="ckeditor" name="Content"></textarea>
									</div>
								</div>
								<?php /* tag "div" from line 84 */; ?>
<div class="control-group">
									<?php /* tag "label" from line 85 */; ?>
<label class="control-label" for="Note">Ghi chú</label>
									<?php /* tag "div" from line 86 */; ?>
<div class="controls">										
										<?php /* tag "textarea" from line 87 */; ?>
<textarea id="Note" name="Note"></textarea>
									</div>
								</div>
								<?php /* tag "div" from line 90 */; ?>
<div class="control-group">
									<?php /* tag "div" from line 91 */; ?>
<div class="controls">
										<?php /* tag "button" from line 92 */; ?>
<button type="submit" class="btn" value="submit-value">Thêm mới</button>
									</div>
								</div>						
							</form>
							<?php 
/* tag "div" from line 96 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mApplication.xhtml/PageBar', $_thistpl) ;
$ctx->popSlots() ;
?>

							<?php /* tag "table" from line 97 */; ?>
<table class="table table-striped table-hover">
								<?php /* tag "thead" from line 98 */; ?>
<thead>
									<?php /* tag "tr" from line 99 */; ?>
<tr>
										<?php /* tag "th" from line 100 */; ?>
<th width="30px">STT</th>										
										<?php /* tag "th" from line 101 */; ?>
<th align="left">Tên Chương Trình</th>
										<?php /* tag "th" from line 102 */; ?>
<th align="left">Ngày Làm CT</th>
										<?php /* tag "th" from line 103 */; ?>
<th width="30px">SL</th>
										<?php /* tag "th" from line 104 */; ?>
<th align="left">Nội dung</th>										
										<?php /* tag "th" from line 105 */; ?>
<th width="30px">Xóa</th>
									</tr>
								</thead>
								<?php /* tag "tbody" from line 108 */; ?>
<tbody>
									<?php 
/* tag "tr" from line 109 */ ;
$_tmp_3 = $ctx->repeat ;
$_tmp_3->Salarydaily = new PHPTAL_RepeatController($ctx->SalarydailyAll)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_3->Salarydaily as $ctx->Salarydaily): ;
?>
<tr>
										<?php /* tag "td" from line 110 */; ?>
<td width="32" align="center">
											<?php /* tag "div" from line 111 */; ?>
<div><?php echo phptal_escape($ctx->path($ctx->repeat, 'Salarydaily/number')); ?>
</div>
										</td>
										<?php /* tag "td" from line 113 */; ?>
<td>
											<?php 
/* tag "a" from line 114 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Salarydaily, 'getURLRewardUpdateLoad')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
>
												<?php /* tag "div" from line 115 */; ?>
<div><?php echo phptal_escape($ctx->path($ctx->Salarydaily, 'getCategory/getName')); ?>
</div>
											</a>
										</td>
										<?php /* tag "td" from line 118 */; ?>
<td><?php echo phptal_escape($ctx->path($ctx->Salarydaily, 'getDateWorkPrint')); ?>
</td>
										<?php /* tag "td" from line 119 */; ?>
<td><?php echo phptal_escape($ctx->path($ctx->Salarydaily, 'getCount')); ?>
</td>
										<?php /* tag "td" from line 120 */; ?>
<td><?php echo phptal_tostring($ctx->path($ctx->Salarydaily, 'getContent')); ?>
</td>
										<?php /* tag "td" from line 121 */; ?>
<td>
											<?php 
/* tag "a" from line 122 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Salarydaily, 'getURLRewardDeleteLoad')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
><?php /* tag "span" from line 122 */; ?>
<span class="icon-remove"></span></a>
										</td>
									</tr><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

								</tbody>
								<?php /* tag "tfoot" from line 126 */; ?>
<tfoot>
									<?php /* tag "tr" from line 127 */; ?>
<tr>
										<?php /* tag "td" from line 128 */; ?>
<td colspan="2">
											<?php 
/* tag "a" from line 129 */ ;
if (null !== ($_tmp_2 = ('thu-lao/'))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a class="btn"<?php echo $_tmp_2 ?>
>
												<?php /* tag "span" from line 130 */; ?>
<span class="icon-plus"></span> Thêm mới
											</a>
										</td>										
									</tr>
								</tfoot>
							</table>					
							<?php 
/* tag "div" from line 136 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mApplication.xhtml/PageBar', $_thistpl) ;
$ctx->popSlots() ;
?>

						</div>
					</div>
				</div>
			</div>
			<?php 
/* tag "span" from line 141 */ ;
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

Generated by PHPTAL from D:\AppWebServer\MyCodePHP\kythuatthehien.com\mvc\templates\AplReward.html (edit that file instead) */; ?>