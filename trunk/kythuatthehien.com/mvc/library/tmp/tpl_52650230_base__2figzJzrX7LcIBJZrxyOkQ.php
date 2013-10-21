<?php 
function tpl_52650230_base__2figzJzrX7LcIBJZrxyOkQ_Backontop(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div class="crunchify-top" data-toggle="tooltip" data-placement="left" data-original-title="Chuyển đến đầu trang"></div><?php 
}

 ?>
<?php 
function tpl_52650230_base__2figzJzrX7LcIBJZrxyOkQ_Footer(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div class="row reset-margin footer">
		<?php /* tag "div" from line 488 */; ?>
<div class="top-menu">
			<?php /* tag "ul" from line 489 */; ?>
<ul class="nav nav-pills">
				<?php /* tag "li" from line 490 */; ?>
<li><?php /* tag "a" from line 490 */; ?>
<a href="/trang-chu">Trang chủ</a></li>								
				<?php /* tag "li" from line 491 */; ?>
<li><?php /* tag "a" from line 491 */; ?>
<a href="/tin-tuc">Tin tức</a></li>
				<?php /* tag "li" from line 492 */; ?>
<li><?php /* tag "a" from line 492 */; ?>
<a href="/dao-tao">Đào tạo</a></li>
				<?php /* tag "li" from line 493 */; ?>
<li><?php /* tag "a" from line 493 */; ?>
<a href="/su-kien">Sự kiện</a></li>				
				<?php /* tag "li" from line 494 */; ?>
<li><?php /* tag "a" from line 494 */; ?>
<a href="/phat-am">PHẬT ÂM</a></li>
				<?php /* tag "li" from line 495 */; ?>
<li><?php /* tag "a" from line 495 */; ?>
<a href="/hoi-dap/dat-cau-hoi">Hỏi đáp</a></li>
				<?php /* tag "li" from line 496 */; ?>
<li><?php /* tag "a" from line 496 */; ?>
<a href="/thu-vien-anh">Ảnh hoạt động</a></li>
				<?php /* tag "li" from line 497 */; ?>
<li><?php /* tag "a" from line 497 */; ?>
<a href="/chua-ban">Danh bạ</a></li>
				<?php /* tag "li" from line 498 */; ?>
<li><?php /* tag "a" from line 498 */; ?>
<a href="/lien-he">Liên hệ</a></li>
				<?php /* tag "li" from line 499 */; ?>
<li id="last"><?php /* tag "a" from line 499 */; ?>
<a href="/signin/load">Quản trị</a></li>
			</ul>
		</div>
		<?php /* tag "div" from line 502 */; ?>
<div class="row reset-margin">
			<?php /* tag "div" from line 503 */; ?>
<div class="span6 reset-margin">
				<?php /* tag "div" from line 504 */; ?>
<div class="f-left">
					<?php /* tag "p" from line 505 */; ?>
<p><?php /* tag "b" from line 505 */; ?>
<b>Địa chỉ:</b> 319B2 - Mỹ Phú - Mỹ Đức Đông - Cái Bè - Tiền Giang - Việt Nam</p>
					<?php /* tag "p" from line 506 */; ?>
<p><?php /* tag "b" from line 506 */; ?>
<b>Điện thoại:</b> (073) 3600 943 - <?php /* tag "b" from line 506 */; ?>
<b>Di Động:</b> 0918 852 102</p>
					<?php /* tag "p" from line 507 */; ?>
<p><?php /* tag "b" from line 507 */; ?>
<b>Email:</b> nhuantamkhaituong@gmail.com (nhuantam@chuakhaituong.com)</p>
					<?php /* tag "p" from line 508 */; ?>
<p><?php /* tag "b" from line 508 */; ?>
<b>Website:</b> <?php /* tag "i" from line 508 */; ?>
<i><?php /* tag "u" from line 508 */; ?>
<u>chuakhaituong.com</u></i>, <?php /* tag "i" from line 508 */; ?>
<i><?php /* tag "u" from line 508 */; ?>
<u>quocankhaituongtu.com</u></i>, <?php /* tag "i" from line 508 */; ?>
<i><?php /* tag "u" from line 508 */; ?>
<u>chuaquocankhaituong.vn</u></i></p>
				</div>
			</div>
			<?php /* tag "div" from line 511 */; ?>
<div class="span6 pull-right reset-margin">
				<?php /* tag "div" from line 512 */; ?>
<div class="f-right">
					<?php /* tag "p" from line 513 */; ?>
<p><?php /* tag "b" from line 513 */; ?>
<b>© 12/2012 Chùa Khải Tường</b></p>
					<?php /* tag "p" from line 514 */; ?>
<p>Biên tập - Đại Đức Thích Nhuận Tâm</p>
					<?php /* tag "p" from line 515 */; ?>
<p>Phát triển - SPN Co, Ltd &amp; Nguyên Phong Studio</p>
					<?php /* tag "p" from line 516 */; ?>
<p>Ghi rõ nguồn <?php /* tag "b" from line 516 */; ?>
<b><?php /* tag "i" from line 516 */; ?>
<i>chuakhaituong.com</i></b> khi phát hành thông tin từ website này</p>
				</div>
			</div>
		</div>
	</div><?php 
}

 ?>
<?php 
function tpl_52650230_base__2figzJzrX7LcIBJZrxyOkQ_Popup(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div>
		<?php /* tag "script" from line 426 */; ?>
<script>
		/*<![CDATA[*/
			$(document).ready(function(){								
				$("#ads-open").click( function(){
					//alert("Mở");
					$.session.set('ads-box', 'true');
					$("#ads-open").slideUp('slow', function(){
						$(".ads-popup").slideDown('slow');
					});
				});
				$(".ads-close").click( function(){
					//alert("Đóng");
					$.session.set('ads-box', 'false');
					$(".ads-popup").slideUp('slow', function(){
						$("#ads-open").slideDown('slow');
					});
				});
				$("#ads-open").hide();
				
				if ($.session.get('ads-box')=='true'){
					//$("#ads-open").show();
					$("#ads-open").slideUp('slow', function(){
						$(".ads-popup").slideDown('slow');
					});
				}else{
					//$("#ads-open").hide();
					$(".ads-popup").slideUp('slow', function(){
						$("#ads-open").slideDown('slow');
					});
				}
			});
		/*]]>*/
		</script>
		<?php 
/* tag "div" from line 459 */ ;
if ($ctx->path($ctx->Popup, 'getEnable')):  ;
?>
<div class="ads-popup ads-popup-center">
			<?php /* tag "div" from line 460 */; ?>
<div class="ads-close"><?php /* tag "i" from line 460 */; ?>
<i class="icon-chevron-down icon-white"></i></div>
			<?php /* tag "div" from line 461 */; ?>
<div id="PopupCarousel" class="carousel slide carousel-fade popup-slide reset-margin">
				<?php /* tag "ol" from line 462 */; ?>
<ol class="carousel-indicators">
					<?php /* tag "li" from line 463 */; ?>
<li data-target="#PopupCarousel" data-slide-to="0" class="active"></li>
				</ol>
				<?php /* tag "div" from line 465 */; ?>
<div class="carousel-inner">
					
					<?php /* tag "div" from line 467 */; ?>
<div class="active item">
						<?php 
/* tag "a" from line 468 */ ;
if (null !== ($_tmp_2 = ('#'))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
>
							<?php 
/* tag "img" from line 469 */ ;
if (null !== ($_tmp_3 = ($ctx->path($ctx->SponsorAll, 'current/getPicture')))):  ;
$_tmp_3 = ' src="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<img width="100%" class="img-rounded"<?php echo $_tmp_3 ?>
/>
						</a>
					</div>
					
					<?php 
/* tag "div" from line 473 */ ;
$_tmp_1 = $ctx->repeat ;
$_tmp_1->Sponsor = new PHPTAL_RepeatController($ctx->SponsorAll)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->Sponsor as $ctx->Sponsor): ;
?>
<div class="item">
						<?php 
/* tag "a" from line 474 */ ;
if (null !== ($_tmp_4 = ($ctx->path($ctx->Sponsor, 'getURLView')))):  ;
$_tmp_4 = ' href="'.phptal_escape($_tmp_4).'"' ;
else:  ;
$_tmp_4 = '' ;
endif ;
?>
<a<?php echo $_tmp_4 ?>
>
							<?php 
/* tag "img" from line 475 */ ;
if (null !== ($_tmp_3 = ($ctx->path($ctx->Sponsor, 'getPicture')))):  ;
$_tmp_3 = ' src="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<img width="100%" class="img-rounded"<?php echo $_tmp_3 ?>
/>
						</a>
					</div><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>
					
				</div>
			</div>
		</div><?php endif; ?>

		<?php /* tag "div" from line 481 */; ?>
<div id="ads-open" class="ads-open-center"><?php /* tag "i" from line 481 */; ?>
<i class="icon-chevron-up icon-white"></i></div>
	</div><?php 
}

 ?>
<?php 
function tpl_52650230_base__2figzJzrX7LcIBJZrxyOkQ_CourseBox(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
if ($ctx->path($ctx->Course, 'getLessionNext')):  ;
?>
<div class="box radius">
		<?php /* tag "div" from line 401 */; ?>
<div class="b-title">
			<?php /* tag "div" from line 402 */; ?>
<div class="b-t-icon-content">Sắp khai giảng</div>
		</div>
		<?php /* tag "div" from line 404 */; ?>
<div class="b-content">
			<?php /* tag "div" from line 405 */; ?>
<div align="center" style="padding-top:10px;">
				<?php 
/* tag "a" from line 406 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Course, 'getLessionNext/getURLRead')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
>
					<?php 
/* tag "img" from line 407 */ ;
if (null !== ($_tmp_3 = ($ctx->path($ctx->Course, 'getLessionNext/getImage')))):  ;
$_tmp_3 = ' src="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<img width="300"<?php echo $_tmp_3 ?>
/>
				</a>
			</div>
			<?php /* tag "div" from line 410 */; ?>
<div align="center" style="padding:10px;">
				<?php 
/* tag "a" from line 411 */ ;
if (null !== ($_tmp_4 = ($ctx->path($ctx->Course, 'getLessionNext/getURLRead')))):  ;
$_tmp_4 = ' href="'.phptal_escape($_tmp_4).'"' ;
else:  ;
$_tmp_4 = '' ;
endif ;
?>
<a style="font-size:12px; color:#980707; line-height:30px;"<?php echo $_tmp_4 ?>
>
					<?php /* tag "h1" from line 412 */; ?>
<h1><?php echo phptal_escape($ctx->path($ctx->Course, 'getLessionNext/getName')); ?>
</h1>
				</a>
			</div>
			<?php /* tag "div" from line 415 */; ?>
<div style="margin-left:10px;">
				<?php /* tag "div" from line 416 */; ?>
<div id="CourseCountdown"></div>
			</div>
			<?php /* tag "script" from line 418 */; ?>
<script type="text/javascript">/*<![CDATA[*/$(function(){var d1 = $("#CourseBox").attr('alt');var parts = d1.match(/(\d+)/g);var d2 = new Date(parts[0], parts[1]-1, parts[2]);var austDay = new Date();austDay = new Date(austDay.getFullYear() + 1, 1 - 1, 26);$('#CourseCountdown').countdown({until: d2});});/*]]>*/</script>
		</div>
	</div><?php 
endif ;

}

?>
<?php 
function tpl_52650230_base__2figzJzrX7LcIBJZrxyOkQ_EventBox(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div class="box radius">
		<?php /* tag "div" from line 370 */; ?>
<div class="b-title">
			<?php /* tag "div" from line 371 */; ?>
<div class="b-t-icon-content">Đào tạo</div>
		</div>
		<?php /* tag "div" from line 373 */; ?>
<div id="LessionCarousel" class="carousel slide carousel-fade lession-slide reset-margin">
			<?php /* tag "div" from line 374 */; ?>
<div class="carousel-inner">
				<?php /* tag "div" from line 375 */; ?>
<div class="active item">
					<?php 
/* tag "a" from line 376 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Course, 'getLessions/current/getURLRead')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
>
						<?php 
/* tag "img" from line 377 */ ;
if (null !== ($_tmp_3 = ($ctx->path($ctx->Course, 'getLessions/current/getImage')))):  ;
$_tmp_3 = ' src="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<img<?php echo $_tmp_3 ?>
/>
						<?php /* tag "div" from line 378 */; ?>
<div class="carousel-caption">
							<?php /* tag "p" from line 379 */; ?>
<p><?php echo phptal_escape($ctx->path($ctx->Course, 'getLessions/current/getName')); ?>
</p>
						</div>
					</a>
				</div>
				<?php 
/* tag "div" from line 383 */ ;
$_tmp_2 = $ctx->repeat ;
$_tmp_2->Lession = new PHPTAL_RepeatController($ctx->path($ctx->Course, 'getLessions'))
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_2->Lession as $ctx->Lession): ;
?>
<div class="item">
					<?php 
/* tag "a" from line 384 */ ;
if (null !== ($_tmp_4 = ($ctx->path($ctx->Lession, 'getURLRead')))):  ;
$_tmp_4 = ' href="'.phptal_escape($_tmp_4).'"' ;
else:  ;
$_tmp_4 = '' ;
endif ;
?>
<a<?php echo $_tmp_4 ?>
>
						<?php 
/* tag "img" from line 385 */ ;
if (null !== ($_tmp_3 = ($ctx->path($ctx->Lession, 'getImage')))):  ;
$_tmp_3 = ' src="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<img<?php echo $_tmp_3 ?>
/>
						<?php /* tag "div" from line 386 */; ?>
<div class="carousel-caption">
							<?php /* tag "p" from line 387 */; ?>
<p><?php echo phptal_escape($ctx->path($ctx->Lession, 'getName')); ?>
</p>
						</div>
					</a>
				</div><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

			</div>
			<?php /* tag "a" from line 392 */; ?>
<a class="carousel-control left" href="#LessionCarousel" data-slide="prev">&lsaquo;</a>
			<?php /* tag "a" from line 393 */; ?>
<a class="carousel-control right" href="#LessionCarousel" data-slide="next">&rsaquo;</a>
		</div>
	</div><?php 
}

 ?>
<?php 
function tpl_52650230_base__2figzJzrX7LcIBJZrxyOkQ_CallendarBar(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div class="row reset-margin date-time">
		<?php /* tag "div" from line 356 */; ?>
<div id="date-time" class="span6 fix-width">
			<?php /* tag "script" from line 357 */; ?>
<script type="text/javascript">getLunarDateString(09,11,2012,16,39,13);</script>
		</div>
		<?php /* tag "div" from line 359 */; ?>
<div class="span6 fix-width">
			<?php /* tag "marquee" from line 360 */; ?>
<marquee behavior="scroll" direction="left" scrollamount="1">
				Kính chúc chư tôn đức tăng ni cùng quý phật tử thân tâm thường an lạc ! Nguyện đem công đức này hướng về khắp tất cả đệ tử và chúng sanh đều trọn thành Phật Đạo.
			</marquee>
		</div>
	</div><?php 
}

 ?>
<?php 
function tpl_52650230_base__2figzJzrX7LcIBJZrxyOkQ_CallendarBox(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div class="box radius">
		<?php /* tag "div" from line 319 */; ?>
<div class="b-title">
			<?php /* tag "div" from line 320 */; ?>
<div class="b-t-icon-content">Lịch Dương <?php /* tag "small" from line 320 */; ?>
<small>Âm</small></div>
		</div>
		<?php /* tag "div" from line 322 */; ?>
<div class="b-content padding-content">
			<?php /* tag "table" from line 323 */; ?>
<table class="calendar-paper" width="100%" border="0" cellpadding="1" cellspacing="1">
				<?php /* tag "tbody" from line 324 */; ?>
<tbody>
					<?php /* tag "tr" from line 325 */; ?>
<tr><?php /* tag "td" from line 325 */; ?>
<td colspan="2" id="thangduong" class="thangduong"></td></tr>
					<?php /* tag "tr" from line 326 */; ?>
<tr><?php /* tag "td" from line 326 */; ?>
<td colspan="2" id="ngayduong" class="ngayduong"></td></tr>
					<?php /* tag "tr" from line 327 */; ?>
<tr><?php /* tag "td" from line 327 */; ?>
<td colspan="2" id="thuduong" class="thuduong"></td></tr>
					<?php /* tag "tr" from line 328 */; ?>
<tr>
						<?php /* tag "td" from line 329 */; ?>
<td> 
							<?php /* tag "div" from line 330 */; ?>
<div id="thangam" class="thangam"></div>
							<?php /* tag "div" from line 331 */; ?>
<div id="ngayam" class="ngayam"></div>
							<?php /* tag "div" from line 332 */; ?>
<div id="namam" class="namam"></div>
						</td>
						<?php /* tag "td" from line 334 */; ?>
<td class="canchi">
							<?php /* tag "div" from line 335 */; ?>
<div id="canchithang" class="gioam"></div>
							<?php /* tag "div" from line 336 */; ?>
<div id="canchingay" class="gioam"></div>
						</td>
					</tr>
					<?php /* tag "tr" from line 339 */; ?>
<tr><?php /* tag "td" from line 339 */; ?>
<td colspan="2" id="hoangdao" class="hoangdao"></td></tr>
				</tbody>
			</table>
			<?php /* tag "script" from line 342 */; ?>
<script language="JavaScript">
			<!--
				setOutputSize("small");
				document.writeln(printSelectedMonth());
				loadToDay();
			-->
			</script>
		</div>
	</div><?php 
}

 ?>
<?php 
function tpl_52650230_base__2figzJzrX7LcIBJZrxyOkQ_ContactBox(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div class="box">
		<?php /* tag "div" from line 312 */; ?>
<div class="b-content"><?php /* tag "a" from line 312 */; ?>
<a href="/lien-he"><?php /* tag "img" from line 312 */; ?>
<img width="100%" src="/data/images/logo/contact.jpg"/></a></div>
	</div><?php 
}

 ?>
<?php 
function tpl_52650230_base__2figzJzrX7LcIBJZrxyOkQ_SponsorBox(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div class="box radius">
		<?php /* tag "div" from line 298 */; ?>
<div class="b-title">
			<?php /* tag "div" from line 299 */; ?>
<div class="b-t-icon-content">Trợ Duyên</div>
		</div>
		<?php /* tag "div" from line 301 */; ?>
<div class="b-content">
			<?php /* tag "a" from line 302 */; ?>
<a href="/so-vang">
				<?php /* tag "img" from line 303 */; ?>
<img width="100%" src="/data/images/logo/sponsor.jpg"/>
			</a>
		</div>
	</div><?php 
}

 ?>
<?php 
function tpl_52650230_base__2figzJzrX7LcIBJZrxyOkQ_FixedFunction(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div class="fixed-function">
		<?php /* tag "div" from line 284 */; ?>
<div class="fb-like fb_edge_widget_with_comment fb_iframe_widget" data-href="https://www.facebook.com/ChuaKhaiTuong" data-send="false" data-layout="box_count" data-width="450" data-show-faces="false" data-font="tahoma" fb-xfbml-state="rendered"></div>
		<?php /* tag "div" from line 285 */; ?>
<div class="bubble"><?php echo phptal_escape(\MVC\Library\Statistic::getCountPrint()); ?>
</div>
		<?php /* tag "p" from line 286 */; ?>
<p class="bubble-item">Truy cập</p>
		<?php /* tag "div" from line 287 */; ?>
<div class="bubble">
			<?php /* tag "img" from line 288 */; ?>
<img src="/data/images/logo/count_logo.gif"/>
			<?php /* tag "span" from line 289 */; ?>
<span><?php echo phptal_escape(\MVC\Library\Statistic::getOnlinePrint()); ?>
</span>
		</div>
		<?php /* tag "p" from line 291 */; ?>
<p class="bubble-item">Trực tuyến</p>
	</div><?php 
}

 ?>
<?php 
function tpl_52650230_base__2figzJzrX7LcIBJZrxyOkQ_AskBox(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div class="box radius">
		<?php /* tag "div" from line 270 */; ?>
<div class="b-title">
			<?php /* tag "div" from line 271 */; ?>
<div class="b-t-icon-content">Hỏi &amp; Đáp PHẬT HỌC</div>
		</div>
		<?php /* tag "div" from line 273 */; ?>
<div class="b-content">
			<?php /* tag "a" from line 274 */; ?>
<a href="/hoi-dap/dat-cau-hoi">
				<?php /* tag "img" from line 275 */; ?>
<img width="100%" src="/data/images/logo/question.jpg"/>
			</a>
		</div>
	</div><?php 
}

 ?>
<?php 
function tpl_52650230_base__2figzJzrX7LcIBJZrxyOkQ_TopMonkBox(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div class="box radius">
		<?php /* tag "div" from line 250 */; ?>
<div class="b-title">
			<?php /* tag "div" from line 251 */; ?>
<div class="b-t-icon-content">GIẢNG SƯ NỔI BẬT</div>
		</div>
		<?php /* tag "div" from line 253 */; ?>
<div class="b-content">
			<?php /* tag "ul" from line 254 */; ?>
<ul class="grid-item-3 thumbnails reset-margin">
				<?php 
/* tag "li" from line 255 */ ;
$_tmp_4 = $ctx->repeat ;
$_tmp_4->Monk = new PHPTAL_RepeatController($ctx->MonkAll)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_4->Monk as $ctx->Monk): ;
?>
<li class="span2">
					<?php 
/* tag "a" from line 256 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Monk, 'getURLRead')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
>
						<?php /* tag "div" from line 257 */; ?>
<div class="thumbnail">
							<?php 
/* tag "img" from line 258 */ ;
$ctx->noThrow(true) ;
if (!phptal_isempty($_tmp_1 = ($ctx->path($ctx->Monk, 'getURLPic', true)))):  ;
$_tmp_1 = ' src="'.phptal_escape($_tmp_1).'"' ;
elseif (null !== ($_tmp_1 = ('/data/images/exit_picture.jpg'))):  ;
$_tmp_1 = ' src="'.phptal_escape($_tmp_1).'"' ;
endif ;
$ctx->noThrow(false) ;
if (null !== ($_tmp_3 = ($ctx->Monk->getPreName() . ' ' . $ctx->Monk->getName() . ' ' . $ctx->Monk->getPagoda()))):  ;
$_tmp_3 = ' data-original-title="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<img class="monk-tooltip" data-toggle="tooltip" data-placement="bottom"<?php echo $_tmp_1 ?>
<?php echo $_tmp_3 ?>
/>
						</div>
					</a>
				</li><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

			</ul>
		</div>
	</div><?php 
}

 ?>
<?php 
function tpl_52650230_base__2figzJzrX7LcIBJZrxyOkQ_TopVideoBox(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
$_tmp_3 = $ctx->repeat ;
$_tmp_3->Panel = new PHPTAL_RepeatController($ctx->PanelCategoryVideoAll)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_3->Panel as $ctx->Panel): ;
?>
<div class="box radius">
		<?php /* tag "div" from line 229 */; ?>
<div class="b-title">
			<?php /* tag "div" from line 230 */; ?>
<div class="b-t-icon-content"><?php echo phptal_escape($ctx->path($ctx->Panel, 'getName')); ?>
</div>
		</div>
		<?php /* tag "div" from line 232 */; ?>
<div class="b-content">
			<?php /* tag "ul" from line 233 */; ?>
<ul class="grid-item-2 thumbnails reset-margin">
				<?php 
/* tag "li" from line 234 */ ;
$_tmp_1 = $ctx->repeat ;
$_tmp_1->Category = new PHPTAL_RepeatController($ctx->path($ctx->Panel, 'getDetailAll'))
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->Category as $ctx->Category): ;
?>
<li class="span2">
					<?php 
/* tag "a" from line 235 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Category, 'getCategoryVideo/getURLRead')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
>
						<?php /* tag "div" from line 236 */; ?>
<div class="thumbnail">
							<?php 
/* tag "img" from line 237 */ ;
if (null !== ($_tmp_4 = ($ctx->path($ctx->Category, 'getCategoryVideo/getPicture')))):  ;
$_tmp_4 = ' src="'.phptal_escape($_tmp_4).'"' ;
else:  ;
$_tmp_4 = '' ;
endif ;
?>
<img<?php echo $_tmp_4 ?>
/>
							<?php /* tag "p" from line 238 */; ?>
<p><?php echo phptal_escape($ctx->path($ctx->Category, 'getCategoryVideo/getName')); ?>
</p>
						</div>
					</a>
				</li><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

			</ul>
		</div>
	</div><?php 
endforeach ;
$ctx = $tpl->popContext() ;

}

?>
<?php 
function tpl_52650230_base__2figzJzrX7LcIBJZrxyOkQ_TopNewsBox(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div class="box radius">
		<?php /* tag "div" from line 204 */; ?>
<div class="b-title">
			<?php /* tag "div" from line 205 */; ?>
<div class="b-t-icon-content">Tin tức nổi bật</div>
		</div>
		<?php /* tag "div" from line 207 */; ?>
<div class="b-content">			
			<?php /* tag "div" from line 208 */; ?>
<div id="BoxNewsCarousel" class="carousel slide sidebar-slide reset-margin">
				<?php /* tag "div" from line 209 */; ?>
<div class="carousel-inner">
					<?php /* tag "div" from line 210 */; ?>
<div class="active item">
						<?php 
/* tag "a" from line 211 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->PanelNewsAll, 'current/getNews/getURLRead')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
>
							<?php 
/* tag "img" from line 212 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->PanelNewsAll, 'current/getNews/getImage')))):  ;
$_tmp_1 = ' src="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<img<?php echo $_tmp_1 ?>
/>
							<?php /* tag "div" from line 213 */; ?>
<div class="carousel-caption">
								<?php /* tag "p" from line 214 */; ?>
<p><?php echo phptal_escape($ctx->path($ctx->PanelNewsAll, 'current/getNews/getTitle')); ?>
</p>
							</div>
						</a>
					</div>					
				</div>
				<?php /* tag "a" from line 219 */; ?>
<a class="carousel-control left" href="#BoxNewsCarousel" data-slide="prev">&lsaquo;</a>
				<?php /* tag "a" from line 220 */; ?>
<a class="carousel-control right" href="#BoxNewsCarousel" data-slide="next">&rsaquo;</a>
			</div>			
		</div>
	</div><?php 
}

 ?>
<?php 
function tpl_52650230_base__2figzJzrX7LcIBJZrxyOkQ_PictureBox(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div class="box radius">
		<?php /* tag "div" from line 190 */; ?>
<div class="b-title">
			<?php /* tag "div" from line 191 */; ?>
<div class="b-t-icon-content">Ảnh Hoạt Động</div>
		</div>
		<?php /* tag "div" from line 193 */; ?>
<div class="b-content">
			<?php /* tag "a" from line 194 */; ?>
<a href="/thu-vien-anh">
				<?php /* tag "img" from line 195 */; ?>
<img width="100%" src="/data/images/logo/top_img.jpg"/>
			</a>
		</div>
	</div><?php 
}

 ?>
<?php 
function tpl_52650230_base__2figzJzrX7LcIBJZrxyOkQ_BuddhaBox(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div class="box radius">
		<?php /* tag "div" from line 159 */; ?>
<div class="b-title">
			<?php /* tag "div" from line 160 */; ?>
<div class="b-t-icon-content">Phật Âm</div>
		</div>
		<?php /* tag "div" from line 162 */; ?>
<div class="b-content">
			<?php /* tag "div" from line 163 */; ?>
<div id="BuddhaCarousel" class="carousel slide carousel-fade sidebar-slide reset-margin">
				<?php /* tag "ol" from line 164 */; ?>
<ol class="carousel-indicators">
					<?php /* tag "li" from line 165 */; ?>
<li data-target="#BuddhaCarousel" data-slide-to="0" class="active"></li>
					<?php /* tag "li" from line 166 */; ?>
<li data-target="#BuddhaCarousel" data-slide-to="1"></li>
					<?php /* tag "li" from line 167 */; ?>
<li data-target="#BuddhaCarousel" data-slide-to="2"></li>
				</ol>
				<?php /* tag "div" from line 169 */; ?>
<div class="carousel-inner">
					<?php /* tag "div" from line 170 */; ?>
<div class="active item">
						<?php /* tag "a" from line 171 */; ?>
<a href="/phat-am/bac-tong"><?php /* tag "img" from line 171 */; ?>
<img src="/data/images/logo/bac_tong.jpg"/></a>
					</div>
					<?php /* tag "div" from line 173 */; ?>
<div class="item">
						<?php /* tag "a" from line 174 */; ?>
<a href="/phat-am/nam-tong"><?php /* tag "img" from line 174 */; ?>
<img src="/data/images/logo/nam_tong.jpg"/></a>
					</div>
					<?php /* tag "div" from line 176 */; ?>
<div class="item">
						<?php /* tag "a" from line 177 */; ?>
<a href="/phat-am/tong-hop"><?php /* tag "img" from line 177 */; ?>
<img src="/data/images/logo/tong_hop.jpg"/></a>
					</div>
				</div>
				<?php /* tag "a" from line 180 */; ?>
<a class="carousel-control left" href="#BuddhaCarousel" data-slide="prev">&lsaquo;</a>
				<?php /* tag "a" from line 181 */; ?>
<a class="carousel-control right" href="#BuddhaCarousel" data-slide="next">&rsaquo;</a>
			</div>
		</div>
	</div><?php 
}

 ?>
<?php 
function tpl_52650230_base__2figzJzrX7LcIBJZrxyOkQ_TaskBox(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div class="box radius">
		<?php /* tag "div" from line 128 */; ?>
<div class="b-title"><?php /* tag "div" from line 128 */; ?>
<div class="b-t-icon-content">Các hoạt động</div></div>
		<?php /* tag "div" from line 129 */; ?>
<div class="b-content">
			<?php /* tag "div" from line 130 */; ?>
<div class="g4"><?php /* tag "div" from line 130 */; ?>
<div id="eventCalendarLocale"></div></div>
			<?php /* tag "script" from line 131 */; ?>
<script type="text/javascript">
				/*<![CDATA[*/
				$(document).ready(function() {
					$("#eventCalendarLocale").eventCalendar({
						eventsjson: '/mvc/templates/script/events.json.php',
						eventsjson: '/task',
						monthNames: [ "Tháng 1", "Tháng 2", "Tháng 3", "Tháng 4", "Tháng 5", "Tháng 6",
							"Tháng 7", "Tháng 8", "Tháng 9", "Tháng 10", "Tháng 11", "Tháng 12" ],
						dayNames: [ 'Chủ Nhật','Thứ 2','Thứ 3','Thứ 4', 'Thứ 5','Thứ 6','Thứ 7' ],
						dayNamesShort: [ 'CN','Th2','Th3','Th4', 'Th5','Th6','Th7' ],
						txt_noEvents: "Không có sự kiện nào xảy ra",
						txt_SpecificEvents_prev: "",
						txt_SpecificEvents_after: "sự kiện:",
						txt_next: "Tới",
						txt_prev: "Lui",
						txt_NextEvents: "Sự kiện sắp xảy ra:",
						txt_GoToEventUrl: "đi đến sự kiện"
					});
				});
				/*]]>*/
			</script>
		</div>
	</div><?php 
}

 ?>
<?php 
function tpl_52650230_base__2figzJzrX7LcIBJZrxyOkQ_Header(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div class="row reset-margin">
		<?php /* tag "div" from line 55 */; ?>
<div class="header">
			<?php /* tag "a" from line 56 */; ?>
<a href="/gate">
				<?php /* tag "object" from line 61 */; ?>
<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" title="Chùa Khải Tường" height="282" width="940">
					<?php /* tag "param" from line 62 */; ?>
<param name="movie" value="/data/images/flash/banner.swf"/>
					<?php /* tag "param" from line 63 */; ?>
<param name="quality" value="high"/>
					<?php /* tag "embed" from line 69 */; ?>
<embed src="/data/images/flash/banner.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" height="282" width="940"></embed>
				</object>
			</a>
		</div>
		<?php /* tag "div" from line 73 */; ?>
<div class="top-menu">
			<?php /* tag "ul" from line 74 */; ?>
<ul class="nav nav-pills">
				<?php 
/* tag "li" from line 75 */ ;
if (null !== ($_tmp_1 = ($ctx->ActiveItem=='Home'?'active':'?'))):  ;
$_tmp_1 = ' class="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<li<?php echo $_tmp_1 ?>
><?php /* tag "a" from line 75 */; ?>
<a href="/trang-chu">Trang chủ</a></li>
				<?php 
/* tag "li" from line 76 */ ;
if (null !== ($_tmp_1 = ($ctx->ActiveItem=='Introduction'?'active':'?'))):  ;
$_tmp_1 = ' class="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<li<?php echo $_tmp_1 ?>
><?php /* tag "a" from line 76 */; ?>
<a href="/gioi-thieu">Giới thiệu</a></li>
				<?php 
/* tag "li" from line 77 */ ;
if (null !== ($_tmp_1 = ($ctx->ActiveItem=='ReadCategory'?'active dropdown':'dropdown'))):  ;
$_tmp_1 = ' class="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<li<?php echo $_tmp_1 ?>
>
					<?php /* tag "a" from line 78 */; ?>
<a class="dropdown-toggle" data-toggle="dropdown">Tin tức <?php /* tag "b" from line 78 */; ?>
<b class="caret"></b></a>
					<?php /* tag "ul" from line 79 */; ?>
<ul class="dropdown-menu">
						<?php 
/* tag "li" from line 80 */ ;
$_tmp_2 = $ctx->repeat ;
$_tmp_2->Category = new PHPTAL_RepeatController($ctx->CategoryNewsAll)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_2->Category as $ctx->Category): ;
?>
<li>
							<?php 
/* tag "a" from line 81 */ ;
if (null !== ($_tmp_3 = ($ctx->path($ctx->Category, 'getURLRead')))):  ;
$_tmp_3 = ' href="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<a<?php echo $_tmp_3 ?>
><?php echo phptal_escape($ctx->path($ctx->Category, 'getName')); ?>
</a>
						</li><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

					</ul>
				</li>
				<?php 
/* tag "li" from line 85 */ ;
if (null !== ($_tmp_3 = ($ctx->ActiveItem=='Course'?'active':'?'))):  ;
$_tmp_3 = ' class="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<li<?php echo $_tmp_3 ?>
><?php /* tag "a" from line 85 */; ?>
<a href="/dao-tao">Đào tạo</a></li>
				<?php 
/* tag "li" from line 86 */ ;
if (null !== ($_tmp_2 = ($ctx->ActiveItem=='Event'?'active':'?'))):  ;
$_tmp_2 = ' class="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<li<?php echo $_tmp_2 ?>
><?php /* tag "a" from line 86 */; ?>
<a href="/su-kien">Sự kiện</a></li>
				<?php 
/* tag "li" from line 87 */ ;
if (null !== ($_tmp_1 = ($ctx->ActiveItem=='LibraryVideo'?'active dropdown':'dropdown'))):  ;
$_tmp_1 = ' class="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<li<?php echo $_tmp_1 ?>
>
					<?php /* tag "a" from line 88 */; ?>
<a class="dropdown-toggle" data-toggle="dropdown">PHẬT ÂM <?php /* tag "b" from line 88 */; ?>
<b class="caret"></b></a>					
				</li>
				<?php 
/* tag "li" from line 90 */ ;
if (null !== ($_tmp_3 = ($ctx->ActiveItem=='Ask'?'active dropdown':'dropdown'))):  ;
$_tmp_3 = ' class="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<li<?php echo $_tmp_3 ?>
>
					<?php /* tag "a" from line 91 */; ?>
<a class="dropdown-toggle" data-toggle="dropdown">Hỏi đáp <?php /* tag "b" from line 91 */; ?>
<b class="caret"></b></a>
					<?php /* tag "ul" from line 92 */; ?>
<ul class="dropdown-menu">
						<?php /* tag "li" from line 93 */; ?>
<li>
							<?php 
/* tag "a" from line 94 */ ;
if (null !== ($_tmp_2 = ('/hoi-dap/dat-cau-hoi'))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
>Đặt câu hỏi</a>
						</li>						
					</ul>
				</li>	
				<?php 
/* tag "li" from line 98 */ ;
if (null !== ($_tmp_1 = ($ctx->ActiveItem=='LibraryAlbum'?'active':'?'))):  ;
$_tmp_1 = ' class="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<li<?php echo $_tmp_1 ?>
><?php /* tag "a" from line 98 */; ?>
<a href="/thu-vien-anh">Ảnh hoạt động</a></li>
				<?php 
/* tag "li" from line 99 */ ;
if (null !== ($_tmp_2 = ($ctx->ActiveItem=='Pagoda'?'active dropdown':'dropdown'))):  ;
$_tmp_2 = ' class="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<li<?php echo $_tmp_2 ?>
>
					<?php /* tag "a" from line 100 */; ?>
<a class="dropdown-toggle" data-toggle="dropdown">Danh bạ Chùa <?php /* tag "b" from line 100 */; ?>
<b class="caret"></b></a>
					<?php /* tag "ul" from line 101 */; ?>
<ul class="dropdown-menu">
						<?php /* tag "li" from line 102 */; ?>
<li>
							<?php 
/* tag "a" from line 103 */ ;
if (null !== ($_tmp_3 = ('#'))):  ;
$_tmp_3 = ' href="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<a<?php echo $_tmp_3 ?>
><?php echo '&#039;chùa 1&#039;'; ?>
</a>
						</li>
					</ul>
				</li>
				<?php 
/* tag "li" from line 107 */ ;
if (null !== ($_tmp_1 = ($ctx->ActiveItem=='Sponsor'?'active dropdown':'dropdown'))):  ;
$_tmp_1 = ' class="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<li<?php echo $_tmp_1 ?>
>
					
					<?php /* tag "a" from line 109 */; ?>
<a class="dropdown-toggle" data-toggle="dropdown">Từ thiện <?php /* tag "b" from line 109 */; ?>
<b class="caret"></b></a>
					<?php /* tag "ul" from line 110 */; ?>
<ul class="dropdown-menu">
						<?php /* tag "li" from line 111 */; ?>
<li><?php /* tag "a" from line 111 */; ?>
<a href="/so-vang">Sổ vàng</a></li>
						<!--
						<li tal:repeat="Sponsor SponsorAll">
							<a tal:attributes="href Sponsor/getURLView" tal:content="Sponsor/getName"></a>
						</li>
						!-->
					</ul>
				</li>
				<?php 
/* tag "li" from line 119 */ ;
if (null !== ($_tmp_3 = ($ctx->ActiveItem=='Contact'?'active':'?'))):  ;
$_tmp_3 = ' class="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<li<?php echo $_tmp_3 ?>
><?php /* tag "a" from line 119 */; ?>
<a href="/lien-he">Liên hệ</a></li>				
			</ul>
		</div>
	</div><?php 
}

 ?>
<?php 
function tpl_52650230_base__2figzJzrX7LcIBJZrxyOkQ_IncludeJS(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<span>
		<!--
		<script type="text/javascript" language="javascript" src="/mvc/templates/script/library/jquery-1.7.1.min.js"/>
		!-->
		<?php /* tag "script" from line 41 */; ?>
<script type="text/javascript" language="javascript" src="/mvc/templates/script/library/jquery-1.7.1.min.js"></script>
		<?php /* tag "script" from line 42 */; ?>
<script type="text/javascript" language="javascript" src="/mvc/templates/script/library/jquery.countdown.js"></script>
		<?php /* tag "script" from line 43 */; ?>
<script type="text/javascript" language="javascript" src="/mvc/templates/script/library/amlich-hnd.js"></script>
		<?php /* tag "script" from line 44 */; ?>
<script type="text/javascript" language="javascript" src="/mvc/templates/script/library/jquery.eventCalendar.js"></script>
		<?php /* tag "script" from line 45 */; ?>
<script type="text/javascript" language="javascript" src="/mvc/templates/script/library/jquery.timeago.js"></script>		
		<?php /* tag "script" from line 46 */; ?>
<script type="text/javascript" language="javascript" src="/mvc/templates/script/library/jquery.session.js"></script>
		<?php /* tag "script" from line 47 */; ?>
<script type="text/javascript" language="javascript" src="/mvc/templates/theme/bootstrap/js/bootstrap.js"></script>
		<?php /* tag "script" from line 48 */; ?>
<script type="text/javascript" language="javascript" src="/mvc/templates/script/user/base.js"></script>
	</span><?php 
}

 ?>
<?php 
function tpl_52650230_base__2figzJzrX7LcIBJZrxyOkQ_IncludeCSS(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<span>
		<?php /* tag "link" from line 27 */; ?>
<link rel="stylesheet" type="text/css" href="/mvc/templates/theme/base/jquery.countdown.css"/> 
		<?php /* tag "link" from line 28 */; ?>
<link rel="stylesheet" type="text/css" href="/mvc/templates/theme/base/eventCalendar.css"/>
		<?php /* tag "link" from line 29 */; ?>
<link rel="stylesheet" type="text/css" href="/mvc/templates/theme/base/eventCalendar_theme.css"/>	
		<?php /* tag "link" from line 30 */; ?>
<link rel="stylesheet" type="text/css" href="/mvc/templates/theme/bootstrap/css/bootstrap.css" media="screen"/>
		<?php /* tag "link" from line 31 */; ?>
<link rel="stylesheet" type="text/css" href="/mvc/templates/theme/bootstrap/css/base.css"/>
	</span><?php 
}

 ?>
<?php 
function tpl_52650230_base__2figzJzrX7LcIBJZrxyOkQ_IncludeMETA(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<span>
		<?php /* tag "title" from line 7 */; ?>
<title><?php echo 'Website Chùa Khải Tường Cái Bè Tiền Giang'; ?>
</title>
		<?php /* tag "base" from line 8 */; ?>
<base href="http://chuakhaituong.com"/>
		<?php /* tag "meta" from line 9 */; ?>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
		<!--
		<meta http-equiv="Pragma" content="no-cache"/>
		<meta http-equiv="Expires" content="-1"/>
		<meta http-equiv="Cache-Control" content="no-cache"/>
		!-->
		<?php /* tag "meta" from line 15 */; ?>
<meta name="keywords" content="Chùa Khải Tường"/>
		<?php /* tag "meta" from line 16 */; ?>
<meta name="description" content="Website Chùa Khải Tường giới thiệu về một ngôi chùa ở Số 319B2, ấp Mỹ Phú, xã Mỹ Đức Đông, Cái Bè, Tiền Giang, Việt Nam"/>
		<?php /* tag "meta" from line 17 */; ?>
<meta name="page-topic" content="Chùa Khải Tường"/>
		<?php /* tag "meta" from line 18 */; ?>
<meta name="Abstract" content="Website Chùa Khải Tường giới thiệu về một ngôi chùa ở Số 319B2, ấp Mỹ Phú, xã Mỹ Đức Đông, Cái Bè, Tiền Giang, Việt Nam"/>
		<?php /* tag "meta" from line 19 */; ?>
<meta name="classification" content="Chùa Khải Tường, thiết kế Web, SPN, Nguyên Phong, quay phim, chụp hình"/>
		<?php /* tag "link" from line 20 */; ?>
<link rel="shortcut icon" href="/data/images/logo/favicon.ico" type="image/x-icon"/>
	</span><?php 
}

 ?>
<?php 
function tpl_52650230_base__2figzJzrX7LcIBJZrxyOkQ(PHPTAL $tpl, PHPTAL_Context $ctx) {
$_thistpl = $tpl ;
$_translator = $tpl->getTranslator() ;
/* tag "documentElement" from line 1 */ ;
/* tag "html" from line 1 */ ;
?>
<html lang="en" xml:lang="en">
<?php /* tag "body" from line 2 */; ?>
<body>
	<!-- ======================================================================== -->
	<!-- META TAG INCLUDE														  -->
	<!-- ======================================================================== -->
	<?php /* tag "span" from line 6 */; ?>

	
	<!-- ======================================================================== -->
	<!-- CASCADING STYLE SHEETS INCLUDE											  -->
	<!-- ======================================================================== -->
	<?php /* tag "span" from line 26 */; ?>

	
	<!-- ======================================================================== -->
	<!-- JAVASCRIPT INCLUDE														  -->
	<!-- ======================================================================== -->
	<?php /* tag "span" from line 37 */; ?>

	
	<!-- ======================================================================== -->
	<!-- HEADER																	  -->
	<!-- ======================================================================== -->
	<?php /* tag "div" from line 54 */; ?>

	
	<!-- ======================================================================== -->
	<!-- LỊCH CÔNG TÁC															  -->
	<!-- ======================================================================== -->
	<?php /* tag "div" from line 127 */; ?>

	
	<!-- ======================================================================== -->
	<!-- PHẬT ÂM 																  -->
	<!-- ======================================================================== -->
	<?php /* tag "div" from line 158 */; ?>

	
	<!-- ======================================================================== -->
	<!-- ẢNH HOẠT ĐỘNG															  -->
	<!-- ======================================================================== -->
	<?php /* tag "div" from line 189 */; ?>

	
	<!-- ======================================================================== -->
	<!-- TIN TỨC MỚI CẬP NHẬT													  -->
	<!-- ======================================================================== -->
	<?php /* tag "div" from line 203 */; ?>

	
	<!-- ======================================================================== -->
	<!-- VIDEO MỚI CẬP NHẬT														  -->
	<!-- ======================================================================== -->
	<?php /* tag "div" from line 228 */; ?>

	
	<!-- ======================================================================== -->
	<!-- GIẢNG SƯ NỔI BẬT														  -->
	<!-- ======================================================================== -->
	<?php /* tag "div" from line 249 */; ?>

	
	<!-- ======================================================================== -->
	<!-- HỎI - ĐÁP PHẬT HỌC														  -->
	<!-- ======================================================================== -->
	<?php /* tag "div" from line 269 */; ?>

	
	<!-- ======================================================================== -->
	<!-- FIXED FUNCTION															  -->
	<!-- ======================================================================== -->
	<?php /* tag "div" from line 283 */; ?>

	
	<!-- ======================================================================== -->
	<!-- TRỢ DUYÊN - ỦNG HỘ														  -->
	<!-- ======================================================================== -->
	<?php /* tag "div" from line 297 */; ?>

	
	<!-- ======================================================================== -->
	<!-- LIÊN HỆ																  -->
	<!-- ======================================================================== -->
	<?php /* tag "div" from line 311 */; ?>

	
	<!-- ======================================================================== -->
	<!-- LỊCH																	  -->
	<!-- ======================================================================== -->
	<?php /* tag "div" from line 318 */; ?>

	
	<!-- ======================================================================== -->
	<!-- THANH TIÊU ĐỀ LỊCH DƯƠNG - ÂM											  -->
	<!-- ======================================================================== -->
	<?php /* tag "div" from line 355 */; ?>

	
	<!-- ======================================================================== -->
	<!-- SỰ KIỆN																  -->
	<!-- ======================================================================== -->
	<?php /* tag "div" from line 369 */; ?>

	
	<!-- ======================================================================== -->
	<!-- KHÓA HỌC SẮP KHAI GIẢNG												  -->
	<!-- ======================================================================== -->
	<?php /* tag "div" from line 400 */; ?>

	
	<!-- ======================================================================== -->
	<!-- POPUP QUẢNG CÁO														  -->
	<!-- ======================================================================== -->
	<?php /* tag "div" from line 425 */; ?>

	
	<!-- ======================================================================== -->
	<!-- FOOTER																	  -->
	<!-- ======================================================================== -->
	<?php /* tag "div" from line 487 */; ?>

	
	<!-- ======================================================================== -->
	<!-- BACK ON TOP															  -->
	<!-- ======================================================================== -->
	<?php /* tag "div" from line 525 */; ?>

	
</body>
</html><?php 
/* end */ ;

}

?>
<?php /* 
*** DO NOT EDIT THIS FILE ***

Generated by PHPTAL from D:\AppWebServer\MyCodePHP\kythuatthehien.com\mvc\templates\base.xhtml (edit that file instead) */; ?>