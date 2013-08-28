<?php 
function tpl_51a31232_AskInsLoad__CpdBWXguG6ZR6jIixPnprw(PHPTAL $tpl, PHPTAL_Context $ctx) {
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

		<?php /* tag "script" from line 6 */; ?>
<script>
		/*<![CDATA[*/
			$(document).ready(function() {				
				$("#CaptchaSecurity").hide();
			});			
			function validateFormContactLoad() {
					var OldCode = $("#CaptchaSecurity").val();
					var KeydownCode = $("#CodeCaptcha").val();					
					if ( OldCode == KeydownCode) {	
						return true; 
					} else {
						$("#Mesenge").html("Mã Bảo vệ sai! Nhập lại!");
						$("#CodeCaptcha").val("");
						$("#CodeCaptcha").focus();
						return false;
					}
			}
		/*]]>*/
		</script>
	</head>	
	<?php /* tag "body" from line 26 */; ?>
<body>
		<?php /* tag "div" from line 27 */; ?>
<div id="wrapper">
		
			<?php 
/* tag "div" from line 29 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('macros.xhtml/Header', $_thistpl) ;
$ctx->popSlots() ;
?>
	

			<?php /* tag "div" from line 31 */; ?>
<div id="main">				
				<?php 
/* tag "div" from line 32 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('macros.xhtml/DateTimeBox', $_thistpl) ;
$ctx->popSlots() ;
?>

				<?php /* tag "div" from line 33 */; ?>
<div id="content">
					<?php /* tag "div" from line 34 */; ?>
<div class="news-box">
						<?php /* tag "div" from line 35 */; ?>
<div class="box-title">
							<?php /* tag "img" from line 36 */; ?>
<img src="/data/images/icon.png" width="30"/>
							<?php /* tag "span" from line 37 */; ?>
<span><?php echo 'DANH SÁCH CÂU HỎI'; ?>
</span>
						</div>
						<?php /* tag "div" from line 39 */; ?>
<div style="padding:10px 10px 5px 10px;">
							<?php 
/* tag "div" from line 40 */ ;
$_tmp_1 = $ctx->repeat ;
$_tmp_1->Ask = new PHPTAL_RepeatController($ctx->Asks)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->Ask as $ctx->Ask): ;
?>
<div class="ask" align="justify">
								<?php /* tag "b" from line 41 */; ?>
<b><?php /* tag "span" from line 41 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->repeat, 'Ask/number')); ?>
</span>. Hỏi về <?php /* tag "span" from line 41 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Ask, 'getCategory/getName')); ?>
</span></b>
								<?php /* tag "div" from line 42 */; ?>
<div style="text-indent:15px;">
									<?php /* tag "b" from line 43 */; ?>
<b><?php /* tag "div" from line 43 */; ?>
<div><?php echo phptal_tostring($ctx->path($ctx->Ask, 'getQuestion')); ?>
</div></b>
									<?php /* tag "div" from line 44 */; ?>
<div><?php /* tag "small" from line 44 */; ?>
<small>(<?php /* tag "span" from line 44 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Ask, 'getTimePrint')); ?>
</span>)</small></div>
								</div>
							</div><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

						</div>
					</div>	
					<?php /* tag "div" from line 49 */; ?>
<div class="news-box">
						<?php /* tag "div" from line 50 */; ?>
<div class="box-title">
							<?php /* tag "img" from line 51 */; ?>
<img src="/data/images/icon.png" width="30"/>
							<?php /* tag "span" from line 52 */; ?>
<span><?php echo phptal_escape($ctx->Title); ?>
</span>
						</div>
						<?php /* tag "div" from line 54 */; ?>
<div style="padding:10px;">
							<?php /* tag "div" from line 55 */; ?>
<div align="center">
								<?php /* tag "table" from line 56 */; ?>
<table style="font-size:15px" align="left" border="0" cellpadding="0" cellspacing="5">
									<?php /* tag "tbody" from line 57 */; ?>
<tbody>										
										<?php /* tag "tr" from line 58 */; ?>
<tr>
											<?php /* tag "td" from line 59 */; ?>
<td align="center" colspan="2"><?php /* tag "br" from line 59 */; ?>
<br/></td>
										</tr>
										<?php /* tag "tr" from line 61 */; ?>
<tr>
											<?php /* tag "td" from line 62 */; ?>
<td align="center" colspan="2" style="font-size:15px; color:#980707; line-height:20px;">
												Quí <?php /* tag "B" from line 63 */; ?>
<B>PHẬT TỬ</B> có thể điền nội dung câu hỏi vào mẫu form ở dưới đây.
											</td>
										</tr>
										<?php /* tag "tr" from line 66 */; ?>
<tr>
											<?php /* tag "td" from line 67 */; ?>
<td align="center" colspan="2">
												<?php 
/* tag "form" from line 68 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Category, 'getURLAskInsExe1')))):  ;
$_tmp_1 = ' action="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<form class="form-editor" id="FormAppCategoryInsLoad" onsubmit="return validateFormContactLoad()" method="post"<?php echo $_tmp_1 ?>
>
													<?php /* tag "div" from line 69 */; ?>
<div class="row">
														<?php /* tag "div" from line 70 */; ?>
<div for="Author1" class="label">Họ &amp; Tên</div>
														<?php /* tag "div" from line 71 */; ?>
<div class="textbox">
															<?php /* tag "input" from line 72 */; ?>
<input name="Author1" type="text" id="Author1"/>
														</div>
														<?php /* tag "div" from line 74 */; ?>
<div class="clear"></div>
													</div>
													<?php /* tag "div" from line 76 */; ?>
<div class="row">
														<?php /* tag "div" from line 77 */; ?>
<div for="IdCategory" class="label">Chủ đề</div>
														<?php /* tag "div" from line 78 */; ?>
<div class="selectbox">
															<?php /* tag "select" from line 79 */; ?>
<select id="IdCategory" name="IdCategory">
																<?php 
/* tag "option" from line 80 */ ;
$_tmp_2 = $ctx->repeat ;
$_tmp_2->Category = new PHPTAL_RepeatController($ctx->CategoriesAsk)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_2->Category as $ctx->Category): ;
if (null !== ($_tmp_3 = ($ctx->path($ctx->Category, 'getId')))):  ;
$_tmp_3 = ' value="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<option<?php echo $_tmp_3 ?>
>
																	<?php /* tag "span" from line 81 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Category, 'getName')); ?>
</span>
																</option><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

															</select>
														</div>
														<?php /* tag "div" from line 85 */; ?>
<div class="clear"></div>
													</div>
													<?php /* tag "div" from line 87 */; ?>
<div class="row">
														<?php /* tag "div" from line 88 */; ?>
<div for="Question" class="label">Câu hỏi</div>
														<?php /* tag "div" from line 89 */; ?>
<div class="textbox">
															<?php /* tag "textarea" from line 90 */; ?>
<textarea name="Question" id="Question" cols="52" rows="2"></textarea>
														</div>
														<?php /* tag "div" from line 92 */; ?>
<div class="clear"></div>
													</div>
													<?php 
/* tag "input" from line 94 */ ;
if (null !== ($_tmp_3 = ($ctx->CaptchaSecurity))):  ;
$_tmp_3 = ' value="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<input id="CaptchaSecurity"<?php echo $_tmp_3 ?>
/>
													<?php /* tag "div" from line 95 */; ?>
<div class="row">
														<?php /* tag "div" from line 96 */; ?>
<div for="Name" class="label">Mã bảo mật</div>																												
															<?php /* tag "div" from line 97 */; ?>
<div class="textbox">																
																<?php /* tag "img" from line 98 */; ?>
<img style="padding-left:20px;" align="left" src="/data/captcha.jpg" height="36px" width="150px"/>														
																<?php /* tag "br" from line 99 */; ?>
<br/>
																<?php /* tag "span" from line 100 */; ?>
<span style="padding-left:-50px;color:red;padding-top:30px;" align="left" id="Mesenge"><?php echo phptal_escape($ctx->MsgCaptcha); ?>
</span>
															</div>
														<?php /* tag "div" from line 102 */; ?>
<div class="clear"></div>
													</div>
													<?php /* tag "div" from line 104 */; ?>
<div class="row">
														<?php /* tag "div" from line 105 */; ?>
<div for="CodeCaptcha" class="label">Nhập mã</div>
														<?php /* tag "div" from line 106 */; ?>
<div class="textbox">
															<?php /* tag "input" from line 107 */; ?>
<input name="CodeCaptcha" type="text" id="CodeCaptcha"/>
															
														</div>
														<?php /* tag "div" from line 110 */; ?>
<div class="clear"></div>
													</div>
													<?php /* tag "div" from line 112 */; ?>
<div class="row">
														<?php /* tag "div" from line 113 */; ?>
<div class="button">
															<?php /* tag "button" from line 114 */; ?>
<button type="submit" name="submit" value="submit-value">Gửi</button>
														</div>
													</div>
												</form>
											</td>
										</tr>
										<?php /* tag "tr" from line 120 */; ?>
<tr>
											<?php /* tag "td" from line 121 */; ?>
<td align="center" colspan="2" style="font-size:15px; color:#980707; line-height:20px;">
												Ngoài ra, quí <?php /* tag "B" from line 122 */; ?>
<B>PHẬT TỬ</B> có thể gửi CÂU HỎI hoặc KẾT QUẢ trả lời CÂU HỎI đến email <?php /* tag "B" from line 122 */; ?>
<B>nhuantamkhaituong@gmail.com</B>.
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
						<?php /* tag "div" from line 129 */; ?>
<div class="clear"></div>
					</div>
				</div>
				<?php /* tag "div" from line 132 */; ?>
<div id="sidebar">										
					<?php 
/* tag "div" from line 133 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('macros.xhtml/EventBox', $_thistpl) ;
$ctx->popSlots() ;
?>

					<?php 
/* tag "div" from line 134 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('macros.xhtml/TopPictureBox', $_thistpl) ;
$ctx->popSlots() ;
?>

					<?php 
/* tag "div" from line 135 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('macros.xhtml/NorthBox', $_thistpl) ;
$ctx->popSlots() ;
?>

					<?php 
/* tag "div" from line 136 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('macros.xhtml/SouthBox', $_thistpl) ;
$ctx->popSlots() ;
?>

					<?php 
/* tag "div" from line 137 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('macros.xhtml/BoxRight', $_thistpl) ;
$ctx->popSlots() ;
?>

					<?php 
/* tag "div" from line 138 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('macros.xhtml/TopVideoBox', $_thistpl) ;
$ctx->popSlots() ;
?>
					
					<?php 
/* tag "div" from line 139 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('macros.xhtml/AskBox', $_thistpl) ;
$ctx->popSlots() ;
?>

					<?php 
/* tag "div" from line 140 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('macros.xhtml/CountBox', $_thistpl) ;
$ctx->popSlots() ;
?>
					
					<?php 
/* tag "div" from line 141 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('macros.xhtml/SponsorBox', $_thistpl) ;
$ctx->popSlots() ;
?>

					<?php 
/* tag "div" from line 142 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('macros.xhtml/CallendarBox', $_thistpl) ;
$ctx->popSlots() ;
?>

					
				</div>				
				<?php /* tag "div" from line 145 */; ?>
<div class="clear"></div>
			</div>
			<?php 
/* tag "div" from line 147 */ ;
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

Generated by PHPTAL from E:\AppWebServer\chuakhaituong.123app.net\mvc\templates\AskInsLoad.html (edit that file instead) */; ?>