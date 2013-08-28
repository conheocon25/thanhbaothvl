<?php 
function tpl_517f451b_Contact__UekumS98sKC5uelvFtVlOA(PHPTAL $tpl, PHPTAL_Context $ctx) {
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
<script src="http://maps.google.com/maps?file=api&amp;v=2&amp;sensor=true&amp;key=AIzaSyA2K377CdAYaYb89VbalhvSIIK7-MQSegY" type="text/javascript"></script>		
		<?php /* tag "script" from line 7 */; ?>
<script type="text/javascript" language="javascript" src="/mvc/templates/script/user/gps.jquery.js"></script>
		<?php /* tag "script" from line 8 */; ?>
<script type="text/javascript">
			$(function() {			
				$("#map").googleMap().load();				
			});
		</script>
	</head>	
	<?php /* tag "body" from line 14 */; ?>
<body onunload="GUnload()">
		<?php /* tag "div" from line 15 */; ?>
<div id="wrapper">		
			<?php 
/* tag "div" from line 16 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('macros.xhtml/Header', $_thistpl) ;
$ctx->popSlots() ;
?>

			<?php /* tag "div" from line 17 */; ?>
<div id="main">				
				<?php 
/* tag "div" from line 18 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('macros.xhtml/DateTimeBox', $_thistpl) ;
$ctx->popSlots() ;
?>

				<?php /* tag "div" from line 19 */; ?>
<div id="content">
					<?php /* tag "div" from line 20 */; ?>
<div class="news-box">
						<?php /* tag "div" from line 21 */; ?>
<div class="box-title">
							<?php /* tag "img" from line 22 */; ?>
<img src="/data/images/icon.png" width="30"/>
							<?php /* tag "span" from line 23 */; ?>
<span>Thông tin liên lạc</span>
						</div>
						<?php /* tag "div" from line 25 */; ?>
<div style="padding:10px;">
							<?php /* tag "img" from line 26 */; ?>
<img src="/data/images/name_card_new.jpg" width="600"/>
						</div>
						<?php /* tag "h3" from line 28 */; ?>
<h3>
							Quí Phật Tử có thể đặt câu hỏi trao đổi Phật Học <?php /* tag "a" from line 29 */; ?>
<a href="/ask/1">Click vào tại đây</a>
						</h3>
						<?php /* tag "h3" from line 31 */; ?>
<h3>
							Mọi thắc mắc có thể trao đổi trực tuyến <?php /* tag "a" from line 32 */; ?>
<a href="/online">Click vào tại đây</a>
						</h3>
						<?php /* tag "div" from line 34 */; ?>
<div class="clear"></div>
					</div>
					<?php /* tag "div" from line 36 */; ?>
<div class="news-box">
						<?php /* tag "div" from line 37 */; ?>
<div class="box-title">
							<?php /* tag "img" from line 38 */; ?>
<img src="/data/images/icon.png" width="30"/>
							<?php /* tag "span" from line 39 */; ?>
<span>HƯỚNG DẪN ĐƯỜNG ĐI</span>
						</div>
						<?php /* tag "div" from line 41 */; ?>
<div style="padding:10px;">
							<?php /* tag "div" from line 42 */; ?>
<div id="map" style="width:600px; height:470px;"></div>
							<?php /* tag "form" from line 43 */; ?>
<form class="form-editor" action="directions.php" method="post">								
								<?php /* tag "div" from line 44 */; ?>
<div class="row">
									<?php /* tag "div" from line 45 */; ?>
<div for="Name" class="label">Chọn vị trí</div>
									<?php /* tag "div" from line 46 */; ?>
<div class="selectbox">
										<?php /* tag "select" from line 47 */; ?>
<select name="cboTinhThanh" id="cboTinhThanh">
											<?php /* tag "option" from line 48 */; ?>
<option label="Vĩnh Long" value="Vĩnh Long">Vĩnh Long</option>
											<?php /* tag "option" from line 49 */; ?>
<option label="Hồ Chí Minh" value="Hồ Chí Minh">Hồ Chí Minh</option>
											<?php /* tag "option" from line 50 */; ?>
<option label="Hà Nội" value="Hà Nội">Hà Nội</option>													
											<?php /* tag "option" from line 51 */; ?>
<option label="Cần Thơ" value="Cần Thơ">Cần Thơ</option>
											<?php /* tag "option" from line 52 */; ?>
<option label="An Giang" value="An Giang">An Giang</option>
											<?php /* tag "option" from line 53 */; ?>
<option label="BR - Vũng Tàu" value="BR - Vũng Tàu">BR - Vũng Tàu</option>													
											<?php /* tag "option" from line 54 */; ?>
<option label="Bạc Liêu" value="Bạc Liêu">Bạc Liêu</option>													
											<?php /* tag "option" from line 55 */; ?>
<option label="Bến Tre" value="Bến Tre">Bến Tre</option>													
											<?php /* tag "option" from line 56 */; ?>
<option label="Bình Dương" value="Bình Dương">Bình Dương</option>
											<?php /* tag "option" from line 57 */; ?>
<option label="Bình Phước" value="Bình Phước">Bình Phước</option>
											<?php /* tag "option" from line 58 */; ?>
<option label="Cà Mau" value="Cà Mau">Cà Mau</option>													
											<?php /* tag "option" from line 59 */; ?>
<option label="Đồng Nai" value="Đồng Nai">Đồng Nai</option>
											<?php /* tag "option" from line 60 */; ?>
<option label="Đồng Tháp" value="Đồng Tháp">Đồng Tháp</option>
											<?php /* tag "option" from line 61 */; ?>
<option label="Kiên Giang" value="Kiên Giang">Kiên Giang</option>
											<?php /* tag "option" from line 62 */; ?>
<option label="Long An" value="Long An">Long An</option>													
											<?php /* tag "option" from line 63 */; ?>
<option label="Sóc Trăng" value="Sóc Trăng">Sóc Trăng</option>													
											<?php /* tag "option" from line 64 */; ?>
<option label="Tiền Giang" value="Tiền Giang">Tiền Giang</option>
											<?php /* tag "option" from line 65 */; ?>
<option label="Trà Vinh" value="Trà Vinh">Trà Vinh</option>
										</select>
									</div>
									<?php /* tag "div" from line 68 */; ?>
<div class="clear"></div>
								</div>
							</form>	
							
							<?php /* tag "form" from line 72 */; ?>
<form class="form-editor" action="directions.php" method="post">
								<?php /* tag "input" from line 73 */; ?>
<input id="end" type="hidden" value="Cau Co Co, Huyen Cai Be, Tien Giang, Viet Nam"/>
								<?php /* tag "div" from line 74 */; ?>
<div class="row">
									<?php /* tag "div" from line 75 */; ?>
<div for="Name" class="label">Vị trí của bạn</div>
									<?php /* tag "div" from line 76 */; ?>
<div class="textbox">
										<?php /* tag "input" from line 77 */; ?>
<input id="start" type="text" value="TP Vĩnh Long, Việt Nam"/>
									</div>
									<?php /* tag "div" from line 79 */; ?>
<div class="clear"></div>
								</div>
								<?php /* tag "div" from line 81 */; ?>
<div class="row">
									<?php /* tag "div" from line 82 */; ?>
<div class="button">
										<?php /* tag "button" from line 83 */; ?>
<button type="submit" id="getdirections" name="submit" value="submit-value">Tìm đường</button>
									</div>
								</div>
							</form>
							<?php /* tag "div" from line 87 */; ?>
<div id="directions"></div>
						</div>
					</div>
				</div>
				
				<?php /* tag "div" from line 92 */; ?>
<div id="sidebar">										
					<?php 
/* tag "div" from line 93 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('macros.xhtml/EventBox', $_thistpl) ;
$ctx->popSlots() ;
?>

					<?php 
/* tag "div" from line 94 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('macros.xhtml/CourseBox', $_thistpl) ;
$ctx->popSlots() ;
?>

					<?php 
/* tag "div" from line 95 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('macros.xhtml/BoxRight', $_thistpl) ;
$ctx->popSlots() ;
?>

					<?php 
/* tag "div" from line 96 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('macros.xhtml/VideoBox', $_thistpl) ;
$ctx->popSlots() ;
?>

					<?php 
/* tag "div" from line 97 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('macros.xhtml/AskBox', $_thistpl) ;
$ctx->popSlots() ;
?>

					<?php 
/* tag "div" from line 98 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('macros.xhtml/CountBox', $_thistpl) ;
$ctx->popSlots() ;
?>
					
					<?php 
/* tag "div" from line 99 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('macros.xhtml/SponsorBox', $_thistpl) ;
$ctx->popSlots() ;
?>

					<?php 
/* tag "div" from line 100 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('macros.xhtml/CallendarBox', $_thistpl) ;
$ctx->popSlots() ;
?>

					
				</div>
				
				<?php /* tag "div" from line 104 */; ?>
<div class="clear"></div>
			</div>

			<?php 
/* tag "div" from line 107 */ ;
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

Generated by PHPTAL from E:\AppWebServer\chuakhaituong.123app.net\mvc\templates\Contact.html (edit that file instead) */; ?>