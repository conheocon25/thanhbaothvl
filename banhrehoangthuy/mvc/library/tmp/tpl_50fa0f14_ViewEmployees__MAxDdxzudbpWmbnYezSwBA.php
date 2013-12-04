<?php 
function tpl_50fa0f14_ViewEmployees__MAxDdxzudbpWmbnYezSwBA(PHPTAL $tpl, PHPTAL_Context $ctx) {
$_thistpl = $tpl ;
$_translator = $tpl->getTranslator() ;
/* tag "documentElement" from line 1 */ ;
$ctx->setDocType('<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">',false) ;
?>

<?php /* tag "html" from line 2 */; ?>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
	<?php /* tag "head" from line 3 */; ?>
<head>
		<?php 
/* tag "span" from line 4 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('macros.xhtml/IncludeBase', $_thistpl) ;
$ctx->popSlots() ;
?>

		<?php /* tag "script" from line 5 */; ?>
<script type="text/javascript" language="javascript" src="mvc/templates/script/jquery.init.dataTables.js"></script>
	</head>
<?php /* tag "body" from line 7 */; ?>
<body>	
<?php /* tag "div" from line 8 */; ?>
<div id="frame">
	<?php /* tag "div" from line 9 */; ?>
<div id="page">
		<?php 
/* tag "span" from line 10 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('macros.xhtml/HeaderModuleFactories', $_thistpl) ;
$ctx->popSlots() ;
?>

		<?php /* tag "div" from line 11 */; ?>
<div id="module">
			<?php /* tag "div" from line 12 */; ?>
<div id="nav">
				<?php /* tag "div" from line 13 */; ?>
<div id="Title">
					<?php /* tag "div" from line 14 */; ?>
<div id="Text"><?php echo phptal_escape($ctx->Title); ?>
</div>
				</div>
				<?php /* tag "div" from line 16 */; ?>
<div id="Button">
					<?php 
/* tag "a" from line 18 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Factory, 'getURLViewEmployeeProduceTrackings')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a title="Bảng chấm công hàng ngày" style="margin:6% 4% 0% 3%;width:70%" class="ButtonRight StateDefault ButtonIconRight CornerAll"<?php echo $_tmp_1 ?>
>Bảng chấm công<?php /* tag "span" from line 18 */; ?>
<span class="ButtonIcon ButtonIconFolderOpen"></span>
					</a>					
					<?php 
/* tag "a" from line 21 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Factory, 'getURLViewEmployeeLoanTrackings')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a title="Xem bảng ứng tiền" style="margin:3% 4% 0% 3%;width:70%" class="ButtonRight StateDefault ButtonIconRight CornerAll"<?php echo $_tmp_1 ?>
>Bảng ứng tiền<?php /* tag "span" from line 21 */; ?>
<span class="ButtonIcon ButtonIconFolderOpen"></span>
					</a>
					<?php 
/* tag "a" from line 24 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Factory, 'getURLViewPriceEmployeeProduceTrackings')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a title="Bảng giá gia công của công nhân" style="margin:3% 4% 0% 3%;width:70%" class="ButtonRight StateDefault ButtonIconRight CornerAll"<?php echo $_tmp_1 ?>
>Bảng giá gia công<?php /* tag "span" from line 24 */; ?>
<span class="ButtonIcon ButtonIconStar"></span>
					</a>
				</div>	
			</div>
			<?php /* tag "div" from line 28 */; ?>
<div id="Column1of1">
				<?php /* tag "div" from line 29 */; ?>
<div id="Title">
					<?php 
/* tag "a" from line 31 */ ;
if (null !== ($_tmp_1 = ($ctx->ParentsLinked))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a title="Quay lại" id="TitleButton" class="Button StateDefault ButtonIconSolo CornerAll"<?php echo $_tmp_1 ?>
>
							<?php /* tag "span" from line 32 */; ?>
<span class="ButtonIcon ButtonIconArrowreturn1-n"></span>quay lại
					</a>
					<?php 
/* tag "a" from line 35 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Factory, 'getURLInsertEmployee')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a title="Thêm mới nhân viên" id="TitleButton" class="Button StateDefault ButtonIconSolo CornerAll"<?php echo $_tmp_1 ?>
>
							<?php /* tag "span" from line 36 */; ?>
<span class="ButtonIcon ButtonIconPlusthick"></span>
					</a>
				</div>
				<?php /* tag "div" from line 39 */; ?>
<div id="Table">
					<?php /* tag "table" from line 40 */; ?>
<table cellpadding="0" cellspacing="0" border="0" class="display" id="DataTable">
						<?php /* tag "thead" from line 41 */; ?>
<thead>					
							<?php /* tag "tr" from line 42 */; ?>
<tr>
								<?php /* tag "th" from line 43 */; ?>
<th align="center" width="7%">STT</th>								
								<?php /* tag "th" from line 44 */; ?>
<th align="left">TÊN</th>
								<?php /* tag "th" from line 45 */; ?>
<th align="left">GIỚI TÍNH</th>
								<?php /* tag "th" from line 46 */; ?>
<th align="left">PHONE</th>								
								<?php /* tag "th" from line 47 */; ?>
<th align="left" width="7%"> </th>
							</tr>
						</thead>
						<?php /* tag "tbody" from line 50 */; ?>
<tbody>
							<?php 
/* tag "tr" from line 51 */ ;
$_tmp_1 = $ctx->repeat ;
$_tmp_1->Employee = new PHPTAL_RepeatController($ctx->Employees)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->Employee as $ctx->Employee): ;
?>
<tr>
								<?php /* tag "td" from line 52 */; ?>
<td align="center"></td>
								<?php /* tag "td" from line 53 */; ?>
<td align="left"><?php 
/* tag "a" from line 53 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Employee, 'getURLUpdate')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
><?php echo phptal_escape($ctx->path($ctx->Employee, 'getName')); ?>
</a></td>
								<?php /* tag "td" from line 54 */; ?>
<td align="left"><?php echo phptal_escape($ctx->path($ctx->Employee, 'getSexPrint')); ?>
</td>
								<?php /* tag "td" from line 55 */; ?>
<td align="left"><?php echo phptal_escape($ctx->path($ctx->Employee, 'getPhone')); ?>
</td>
								<?php /* tag "td" from line 56 */; ?>
<td align="center">									
									<?php 
/* tag "a" from line 58 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Employee, 'getURLDelete')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a title="Xóa nhân viên" class="Button StateDefault ButtonIconSolo CornerAll"<?php echo $_tmp_2 ?>
>
										<?php /* tag "span" from line 59 */; ?>
<span class="ButtonIcon ButtonIconClose"></span>
									</a>
								</td>
							</tr><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

						</tbody>
				</table>										
				</div>
			</div>
		</div>
		<?php 
/* tag "span" from line 68 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('macros.xhtml/footer', $_thistpl) ;
$ctx->popSlots() ;
?>

	</div>
</div>		

</body>
</html><?php 
/* end */ ;

}

?>
<?php /* 
*** DO NOT EDIT THIS FILE ***

Generated by PHPTAL from /home/a23app/public_html/banhreht/mvc/templates/ViewEmployees.html (edit that file instead) */; ?>