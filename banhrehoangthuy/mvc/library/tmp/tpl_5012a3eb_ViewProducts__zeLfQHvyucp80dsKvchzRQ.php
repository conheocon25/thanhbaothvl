<?php 
function tpl_5012a3eb_ViewProducts__zeLfQHvyucp80dsKvchzRQ(PHPTAL $tpl, PHPTAL_Context $ctx) {
$_thistpl = $tpl ;
$_translator = $tpl->getTranslator() ;
/* tag "documentElement" from line 1 */ ;
$ctx->setDocType('<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">',false) ;
?>

<?php /* tag "html" from line 2 */; ?>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
	<?php /* tag "head" from line 3 */; ?>
<head>
		<?php /* tag "meta" from line 4 */; ?>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>		
		<?php /* tag "link" from line 5 */; ?>
<link rel="icon" type="image/ico" href="mvc/templates/theme/image/favicon.ico"/>
		<?php /* tag "script" from line 6 */; ?>
<script type="text/javascript" language="javascript" src="mvc/templates/script/jquery.js"></script>	
		<?php /* tag "script" from line 7 */; ?>
<script type="text/javascript" language="javascript" src="mvc/templates/script/jquery.dataTables.js"></script>
		<?php /* tag "script" from line 8 */; ?>
<script type="text/javascript" language="javascript" src="mvc/templates/script/jquery.init.dataTables.js"></script>		
		<?php /* tag "script" from line 9 */; ?>
<script type="text/javascript" language="javascript" src="mvc/templates/script/main.js"></script>
		<?php /* tag "script" from line 10 */; ?>
<script type="text/javascript" language="javascript" src="mvc/templates/script/Button.js"></script>
				
		<?php /* tag "link" from line 12 */; ?>
<link rel="stylesheet" type="text/css" href="mvc/templates/theme/css/data_table.css"/>
		<?php /* tag "link" from line 13 */; ?>
<link rel="stylesheet" type="text/css" href="mvc/templates/theme/css/main_2.css"/>							
		<?php /* tag "link" from line 14 */; ?>
<link rel="stylesheet" type="text/css" href="mvc/templates/theme/css/ButtonTheme.css"/>
	</head>	
<?php /* tag "body" from line 16 */; ?>
<body>	
<?php /* tag "div" from line 17 */; ?>
<div id="frame">
	<?php /* tag "div" from line 18 */; ?>
<div id="page">
		<?php 
/* tag "span" from line 19 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('macros.xhtml/HeaderModuleSettings', $_thistpl) ;
$ctx->popSlots() ;
?>

		<?php /* tag "div" from line 20 */; ?>
<div id="module">
			<?php /* tag "div" from line 21 */; ?>
<div id="nav">
				<?php /* tag "div" from line 22 */; ?>
<div id="Title">
					<?php /* tag "div" from line 23 */; ?>
<div id="Text"><?php echo phptal_escape($ctx->Title); ?>
</div>
				</div>				
				<?php /* tag "div" from line 25 */; ?>
<div id="Button">										
					<?php /* tag "a" from line 27 */; ?>
<a title="Sản phẩm gia công" style="margin:6% 4% 0% 3%;width:70%" class="ButtonRight StateDefault ButtonIconRight CornerAll" href="?cmd=ViewProducts&amp;TypeProduct=1">Loại gia công<?php /* tag "span" from line 27 */; ?>
<span class="ButtonIcon ButtonIconInfo"></span>
					</a>
					<?php /* tag "a" from line 30 */; ?>
<a title="Sản phẩm thương mại" style="margin:3% 4% 0% 3%;width:70%" class="ButtonRight StateDefault ButtonIconRight CornerAll" href="?cmd=ViewProducts&amp;TypeProduct=2">Loại thương phẩm<?php /* tag "span" from line 30 */; ?>
<span class="ButtonIcon ButtonIconInfo"></span>
					</a>
					
					<?php /* tag "a" from line 34 */; ?>
<a title="Thêm mới sản phẩm" style="margin:3% 4% 4% 3%;width:70%" class="ButtonRight StateDefault ButtonIconRight CornerAll" href="">Thêm<?php /* tag "span" from line 34 */; ?>
<span class="ButtonIcon ButtonIconPlusthick"></span>
					</a>
				</div>
			</div>
			<?php /* tag "div" from line 38 */; ?>
<div id="Column1of1">
				<?php /* tag "div" from line 39 */; ?>
<div id="Table">
					<?php /* tag "table" from line 40 */; ?>
<table cellpadding="0" cellspacing="0" border="0" class="display" id="DataTable">
						<?php /* tag "thead" from line 41 */; ?>
<thead>					
							<?php /* tag "tr" from line 42 */; ?>
<tr>
								<?php /* tag "th" from line 43 */; ?>
<th align="center">STT</th>								
								<?php /* tag "th" from line 44 */; ?>
<th align="left">TÊN</th>								
								<?php /* tag "th" from line 45 */; ?>
<th align="left">TL(g)</th>
								<?php /* tag "th" from line 46 */; ?>
<th align="left">SL(cái)</th>
								<?php /* tag "th" from line 47 */; ?>
<th align="left">TÊN ĐẦY ĐỦ</th>
								<?php /* tag "th" from line 48 */; ?>
<th align="left"></th>
							</tr>
						</thead>
						<?php /* tag "tbody" from line 51 */; ?>
<tbody>
							<?php 
/* tag "tr" from line 52 */ ;
$_tmp_1 = $ctx->repeat ;
$_tmp_1->Product = new PHPTAL_RepeatController($ctx->Products)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->Product as $ctx->Product): ;
?>
<tr>
								<?php /* tag "td" from line 53 */; ?>
<td align="center"></td>								
								<?php /* tag "td" from line 54 */; ?>
<td align="left"><?php echo phptal_escape($ctx->path($ctx->Product, 'getName')); ?>
</td>
								<?php /* tag "td" from line 55 */; ?>
<td align="left"><?php echo phptal_escape($ctx->path($ctx->Product, 'getWeight')); ?>
</td>
								<?php /* tag "td" from line 56 */; ?>
<td align="left"><?php echo phptal_escape($ctx->path($ctx->Product, 'getQuantity')); ?>
</td>
								<?php /* tag "td" from line 57 */; ?>
<td align="left"><?php echo phptal_escape($ctx->path($ctx->Product, 'getFullName')); ?>
</td>
								<?php /* tag "td" from line 58 */; ?>
<td align="center">
									<?php 
/* tag "a" from line 60 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Product, 'getURLUpdate')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a title="Cập nhật sản phẩm" class="Button StateDefault ButtonIconSolo CornerAll"<?php echo $_tmp_2 ?>
>
										<?php /* tag "span" from line 61 */; ?>
<span class="ButtonIcon ButtonIconPencil"></span>
									</a>
									<?php 
/* tag "a" from line 64 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Product, 'getURLViewLabel')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a title="In nhãn" class="Button StateDefault ButtonIconSolo CornerAll"<?php echo $_tmp_2 ?>
>
										<?php /* tag "span" from line 65 */; ?>
<span class="ButtonIcon ButtonIconInfo"></span>
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
/* tag "span" from line 74 */ ;
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

Generated by PHPTAL from /home/a23app/public_html/bra/mvc/templates/ViewProducts.html (edit that file instead) */; ?>