<?php 
function tpl_51e52086_InsertCustomerLog__8sMTqFS3HPLOEzJBQCg4fA(PHPTAL $tpl, PHPTAL_Context $ctx) {
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

		<?php /* tag "link" from line 5 */; ?>
<link rel="stylesheet" type="text/css" href="mvc/templates/theme/css/form.css"/>
		<?php /* tag "script" from line 6 */; ?>
<script type="text/javascript">
		/*<![CDATA[*/
		$(document).ready(function(){
				var DateStart = $('#DateStart').val();
				var DateEnd = $('#DateEnd').val();
				$('#DateStart').datepicker({dateFormat: 'yy-mm-dd'});
				$('#DateEnd').datepicker({dateFormat: 'yy-mm-dd'});
		});
		/*]]>*/
		</script>
	</head>	
<?php /* tag "body" from line 17 */; ?>
<body>	
<?php /* tag "div" from line 18 */; ?>
<div id="frame">
	<?php /* tag "div" from line 19 */; ?>
<div id="page">
		<?php 
/* tag "span" from line 20 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('macros.xhtml/HeaderModuleCustomers', $_thistpl) ;
$ctx->popSlots() ;
?>

		<?php /* tag "div" from line 21 */; ?>
<div id="module2">
			<?php /* tag "div" from line 22 */; ?>
<div id="nav">
				<?php /* tag "div" from line 23 */; ?>
<div id="Title">
					<?php /* tag "div" from line 24 */; ?>
<div id="Text"><?php echo phptal_escape($ctx->Title); ?>
</div>
				</div>
			</div>
			<?php /* tag "div" from line 27 */; ?>
<div id="Column1of1">
				<?php /* tag "div" from line 28 */; ?>
<div id="Title">					
					<?php /* tag "a" from line 30 */; ?>
<a title="Quay lại" class="Button StateDefault ButtonIconSolo CornerAll" href="?cmd=ViewCustomers">
						<?php /* tag "span" from line 31 */; ?>
<span class="ButtonIcon ButtonIconArrowreturn1-n"></span>
					</a>
				</div>
				<?php /* tag "div" from line 34 */; ?>
<div id="form1">
				<?php /* tag "form" from line 35 */; ?>
<form id="form" method="post" class="form" style="margin: 10px 0px 0px 10px;padding: 5px 5px 5px 5px;">
					<?php /* tag "table" from line 36 */; ?>
<table align="center">
						<?php /* tag "tr" from line 37 */; ?>
<tr>
							<?php /* tag "td" from line 38 */; ?>
<td align="right"><?php /* tag "LABEL" from line 38 */; ?>
<LABEL>Bắt đầu: </LABEL></td> 
							<?php /* tag "td" from line 39 */; ?>
<td align="left"><?php /* tag "INPUT" from line 39 */; ?>
<INPUT size="10" type="text" id="DateStart" name="DateStart"/></td>
						</tr>
						<?php /* tag "tr" from line 41 */; ?>
<tr>
							<?php /* tag "td" from line 42 */; ?>
<td align="right"><?php /* tag "LABEL" from line 42 */; ?>
<LABEL>Kết thúc: </LABEL></td> 
							<?php /* tag "td" from line 43 */; ?>
<td align="left"><?php /* tag "INPUT" from line 43 */; ?>
<INPUT size="10" type="text" id="DateEnd" name="DateEnd"/></td>
						</tr>
					</table>
					<?php /* tag "div" from line 46 */; ?>
<div id="button1">	
					<?php /* tag "table" from line 47 */; ?>
<table align="center">
						<?php /* tag "tr" from line 48 */; ?>
<tr>
							<?php /* tag "td" from line 49 */; ?>
<td>
								<?php /* tag "a" from line 50 */; ?>
<a id="PrintLinked" href="#" onclick="document.getElementById('form').submit()" style="float:center;" class="Button StateDefault ButtonIconLeft CornerAll">
									<?php /* tag "span" from line 51 */; ?>
<span class="ButtonIcon ButtonIconDisk"></span>Thêm
								</a>
							</td>
						</tr>
					</table>
					</div>
				</form>
				</div>
			</div>
		</div>
		<?php 
/* tag "span" from line 61 */ ;
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

Generated by PHPTAL from /home/banhreht/public_html/mvc/templates/InsertCustomerLog.html (edit that file instead) */; ?>