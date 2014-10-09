<?php 
function tpl_53b770d9_Contact__W9gAL7ff7uAOURUvfDmtqg(PHPTAL $tpl, PHPTAL_Context $ctx) {
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
$tpl->_executeMacroOfTemplate('base.xhtml/IncludeMETA', $_thistpl) ;
$ctx->popSlots() ;
?>

		<?php 
/* tag "span" from line 5 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('base.xhtml/IncludeCSS', $_thistpl) ;
$ctx->popSlots() ;
?>

		<?php 
/* tag "span" from line 6 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('base.xhtml/IncludeJS', $_thistpl) ;
$ctx->popSlots() ;
?>

		<?php /* tag "link" from line 7 */; ?>
<link rel="stylesheet" type="text/css" href="/mvc/templates/theme/bootstrap/css/font-awesome.min.css"/>	
		<?php /* tag "script" from line 8 */; ?>
<script src="http://maps.google.com/maps?file=api&amp;v=2&amp;sensor=true&amp;key=AIzaSyA2K377CdAYaYb89VbalhvSIIK7-MQSegY" type="text/javascript"></script>				
		<?php /* tag "script" from line 9 */; ?>
<script type="text/javascript" language="javascript" src="/mvc/templates/script/user/gps.jquery.js"></script>
		
	</head>

	<?php /* tag "body" from line 13 */; ?>
<body onload="$('#map').googleMap().load()" onunload="GUnload()">
		<?php /* tag "div" from line 14 */; ?>
<div class="container">
			<?php 
/* tag "div" from line 15 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('base.xhtml/Header', $_thistpl) ;
$ctx->popSlots() ;
?>

			<?php 
/* tag "div" from line 16 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('base.xhtml/CallendarBar', $_thistpl) ;
$ctx->popSlots() ;
?>

			<?php /* tag "div" from line 17 */; ?>
<div class="row reset-margin main">				
				<?php /* tag "div" from line 18 */; ?>
<div class="span8 fix-width">
					
					<?php /* tag "div" from line 20 */; ?>
<div class="box radius">
						<?php /* tag "div" from line 21 */; ?>
<div class="page-header pg-header pg-header-paper reset-margin">
							<?php /* tag "h4" from line 22 */; ?>
<h4 class="reset-margin">Thông tin liên hệ</h4>
						</div>
						<?php /* tag "div" from line 24 */; ?>
<div class="b-content padding-content news-content">
							
							<?php /* tag "div" from line 26 */; ?>
<div class="padding-content name-card">
								<?php /* tag "center" from line 27 */; ?>
<center>
									<?php /* tag "h2" from line 28 */; ?>
<h2>Website Phòng Kỹ Thuật Thể Hiện </h2>
									<?php /* tag "h2" from line 29 */; ?>
<h2>Đài PTTH Vĩnh Long</h2>
									<?php /* tag "p" from line 30 */; ?>
<p>Địa chỉ: tầng 3.5, 50 Phạm Thái Bường - Phường 4 - TP Vĩnh Long - tỉnh Vĩnh Long - Việt Nam</p>
									<?php /* tag "hr" from line 31 */; ?>
<hr/>
								</center>
								<?php /* tag "p" from line 33 */; ?>
<p><?php /* tag "i" from line 33 */; ?>
<i class="icon-user"></i> Trưởng Phòng: Nguyễn Quang Phương</p>
								<?php /* tag "p" from line 34 */; ?>
<p><?php /* tag "i" from line 34 */; ?>
<i class="icon-phone"></i> Điện thoại: 0913 71 81 56</p>
								<?php /* tag "p" from line 35 */; ?>
<p><?php /* tag "i" from line 35 */; ?>
<i class="icon-envelope"></i> Email: quangphuong@thvl.vn</p>								
							</div>							
						</div>
					</div>
					
					<?php /* tag "div" from line 40 */; ?>
<div class="box radius">						
						<?php /* tag "div" from line 41 */; ?>
<div class="b-content padding-content news-content">
							<?php /* tag "div" from line 42 */; ?>
<div id="map" class="img-polaroid" style="width:588px; height:700px;"></div>							
						</div>
					</div>
						
				</div>
				<?php /* tag "div" from line 47 */; ?>
<div class="span4 fix-width">
					<?php 
/* tag "div" from line 48 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('base.xhtml/CallendarBox', $_thistpl) ;
$ctx->popSlots() ;
?>

					<?php 
/* tag "div" from line 49 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('base.xhtml/BuddhaBox', $_thistpl) ;
$ctx->popSlots() ;
?>

					<?php 
/* tag "div" from line 50 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('base.xhtml/PictureBox', $_thistpl) ;
$ctx->popSlots() ;
?>
									
					<!-- <div metal:use-macro="base.xhtml/TaskBox"/>
					<div metal:use-macro="base.xhtml/EventBox"/>
					<div metal:use-macro="base.xhtml/CourseBox"/>
					<div metal:use-macro="base.xhtml/TopNewsBox"/>
					<div metal:use-macro="base.xhtml/TopVideoBox"/>
					<div metal:use-macro="base.xhtml/TopMonkBox"/>
					-->
				</div>
			</div>
			<?php 
/* tag "div" from line 60 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('base.xhtml/Footer', $_thistpl) ;
$ctx->popSlots() ;
?>
			
			<?php 
/* tag "div" from line 61 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('base.xhtml/FixedFunction', $_thistpl) ;
$ctx->popSlots() ;
?>

			<?php 
/* tag "div" from line 62 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('base.xhtml/Backontop', $_thistpl) ;
$ctx->popSlots() ;
?>

			<?php /* tag "div" from line 63 */; ?>
<div id="fb-root"></div>
		</div>
	</body>
</html><?php 
/* end */ ;

}

?>
<?php /* 
*** DO NOT EDIT THIS FILE ***

Generated by PHPTAL from D:\AppWebServer\MyCodePHP\kythuatthehien.com\mvc\templates\Contact.html (edit that file instead) */; ?>