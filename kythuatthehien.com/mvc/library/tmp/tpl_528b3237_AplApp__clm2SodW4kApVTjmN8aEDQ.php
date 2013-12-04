<?php 
function tpl_528b3237_AplApp__clm2SodW4kApVTjmN8aEDQ(PHPTAL $tpl, PHPTAL_Context $ctx) {
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

		<?php /* tag "script" from line 7 */; ?>
<script type="text/javascript">
		/*<![CDATA[*/
				$(document).ready(function() {
					
					$(".bg_manager").hover(function(){
							$(this).css('opacity', 1);
						}, function(){
							$(this).css('opacity', 0.25);
					});
				});
				
		/*]]>*/
		</script>
	</head>
	<?php /* tag "body" from line 21 */; ?>
<body>
		<?php /* tag "div" from line 22 */; ?>
<div class="container-fluid">
			<?php 
/* tag "span" from line 23 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mApplication.xhtml/Header', $_thistpl) ;
$ctx->popSlots() ;
?>

			<?php /* tag "div" from line 24 */; ?>
<div class="row-fluid">
				<?php /* tag "div" from line 25 */; ?>
<div class="row-fluid">
					<?php /* tag "div" from line 26 */; ?>
<div class="span3">
						<?php 
/* tag "span" from line 27 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mApplication.xhtml/Menu', $_thistpl) ;
$ctx->popSlots() ;
?>

					</div>
					<?php /* tag "div" from line 29 */; ?>
<div class="span9">
						<?php /* tag "div" from line 30 */; ?>
<div class="content">
							<?php 
/* tag "span" from line 31 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mApplication.xhtml/LocationBar', $_thistpl) ;
$ctx->popSlots() ;
?>
							
							<?php /* tag "center" from line 32 */; ?>
<center><?php /* tag "img" from line 32 */; ?>
<img class="bg_manager" src="/data/images/bg/bg_manager.jpg" width="50%" style="opacity:.25;"/></center>
							<?php 
/* tag "form" from line 33 */ ;
if (null !== ($_tmp_1 = ('thu-lao/app/changetime'))):  ;
$_tmp_1 = ' action="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<form class="form-horizontal" method="post"<?php echo $_tmp_1 ?>
>								
								<?php /* tag "div" from line 34 */; ?>
<div class="control-group">
									<?php /* tag "label" from line 35 */; ?>
<label class="control-label" for="mMonth">Chọn Tháng</label>
									<?php /* tag "div" from line 36 */; ?>
<div class="controls">
										<?php /* tag "select" from line 37 */; ?>
<select name="mMonth">
											<?php /* tag "option" from line 38 */; ?>
<option value="1">
												<?php /* tag "span" from line 39 */; ?>
<span>Tháng 01</span>
											</option>										
											<?php /* tag "option" from line 41 */; ?>
<option value="2">
												<?php /* tag "span" from line 42 */; ?>
<span>Tháng 02</span>
											</option>										
											<?php /* tag "option" from line 44 */; ?>
<option value="3">
												<?php /* tag "span" from line 45 */; ?>
<span>Tháng 03</span>
											</option>										
											<?php /* tag "option" from line 47 */; ?>
<option value="4">
												<?php /* tag "span" from line 48 */; ?>
<span>Tháng 04</span>
											</option>
											<?php /* tag "option" from line 50 */; ?>
<option value="5">
												<?php /* tag "span" from line 51 */; ?>
<span>Tháng 05</span>
											</option>
											<?php /* tag "option" from line 53 */; ?>
<option value="6">
												<?php /* tag "span" from line 54 */; ?>
<span>Tháng 06</span>
											</option>										
											<?php /* tag "option" from line 56 */; ?>
<option value="7">
												<?php /* tag "span" from line 57 */; ?>
<span>Tháng 07</span>
											</option>										
											<?php /* tag "option" from line 59 */; ?>
<option value="8">
												<?php /* tag "span" from line 60 */; ?>
<span>Tháng 08</span>
											</option>										
											<?php /* tag "option" from line 62 */; ?>
<option value="9">
												<?php /* tag "span" from line 63 */; ?>
<span>Tháng 09</span>
											</option>
											<?php /* tag "option" from line 65 */; ?>
<option value="10">
												<?php /* tag "span" from line 66 */; ?>
<span>Tháng 10</span>
											</option>
											<?php /* tag "option" from line 68 */; ?>
<option value="11">
												<?php /* tag "span" from line 69 */; ?>
<span>Tháng 11</span>
											</option>
											<?php /* tag "option" from line 71 */; ?>
<option value="12">
												<?php /* tag "span" from line 72 */; ?>
<span>Tháng 12</span>
											</option>
										</select>
									</div>
									<?php /* tag "label" from line 76 */; ?>
<label class="control-label" for="mYear">Chọn Năm</label>
									<?php /* tag "div" from line 77 */; ?>
<div class="controls">
										<?php /* tag "select" from line 78 */; ?>
<select name="mYear">
											<?php /* tag "option" from line 79 */; ?>
<option value="2013">
												<?php /* tag "span" from line 80 */; ?>
<span>Năm 2013</span>
											</option>
											<?php /* tag "option" from line 82 */; ?>
<option value="2014">
												<?php /* tag "span" from line 83 */; ?>
<span>Năm 2014</span>
											</option>
											<?php /* tag "option" from line 85 */; ?>
<option value="2015">
												<?php /* tag "span" from line 86 */; ?>
<span>Năm 2015</span>
											</option>
											<?php /* tag "option" from line 88 */; ?>
<option value="2016">
												<?php /* tag "span" from line 89 */; ?>
<span>Năm 2016</span>
											</option>
											<?php /* tag "option" from line 91 */; ?>
<option value="2017">
												<?php /* tag "span" from line 92 */; ?>
<span>Năm 2017</span>
											</option>
											<?php /* tag "option" from line 94 */; ?>
<option value="2018">
												<?php /* tag "span" from line 95 */; ?>
<span>Năm 2018</span>
											</option>
											<?php /* tag "option" from line 97 */; ?>
<option value="2019">
												<?php /* tag "span" from line 98 */; ?>
<span>Năm 2019</span>
											</option>
											<?php /* tag "option" from line 100 */; ?>
<option value="2020">
												<?php /* tag "span" from line 101 */; ?>
<span>Năm 2020</span>
											</option>
										</select>
									</div>
								</div>								
								<?php /* tag "div" from line 106 */; ?>
<div class="control-group">
									<?php /* tag "div" from line 107 */; ?>
<div class="controls">
										<?php /* tag "button" from line 108 */; ?>
<button type="submit" class="btn" value="submit-value">Thay Đổi</button>
									</div>
								</div>						
							</form>
						</div>
					</div>
				</div>
			</div>
			<?php 
/* tag "span" from line 116 */ ;
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

Generated by PHPTAL from D:\AppWebServer\MyCodePHP\kythuatthehien.com\mvc\templates\AplApp.html (edit that file instead) */; ?>