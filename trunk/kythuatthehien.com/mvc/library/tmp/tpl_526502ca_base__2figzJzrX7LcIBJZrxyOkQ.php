<?php 
function tpl_526502ca_base__2figzJzrX7LcIBJZrxyOkQ_Backontop(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div class="crunchify-top" data-toggle="tooltip" data-placement="left" data-original-title="Chuyển đến đầu trang"></div><?php 
}

 ?>
<?php 
function tpl_526502ca_base__2figzJzrX7LcIBJZrxyOkQ_Footer(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div class="row reset-margin footer">
		<?php /* tag "div" from line 465 */; ?>
<div class="top-menu">
			<?php /* tag "ul" from line 466 */; ?>
<ul class="nav nav-pills">
				<?php /* tag "li" from line 467 */; ?>
<li><?php /* tag "a" from line 467 */; ?>
<a href="/trang-chu">Trang chủ</a></li>								
				<?php /* tag "li" from line 468 */; ?>
<li><?php /* tag "a" from line 468 */; ?>
<a href="/tin-tuc">Tin tức</a></li>
				<?php /* tag "li" from line 469 */; ?>
<li><?php /* tag "a" from line 469 */; ?>
<a href="/dao-tao">Đào tạo</a></li>
				<?php /* tag "li" from line 470 */; ?>
<li><?php /* tag "a" from line 470 */; ?>
<a href="/su-kien">Sự kiện</a></li>				
				<?php /* tag "li" from line 471 */; ?>
<li><?php /* tag "a" from line 471 */; ?>
<a href="/phat-am">PHẬT ÂM</a></li>
				<?php /* tag "li" from line 472 */; ?>
<li><?php /* tag "a" from line 472 */; ?>
<a href="/hoi-dap/dat-cau-hoi">Hỏi đáp</a></li>
				<?php /* tag "li" from line 473 */; ?>
<li><?php /* tag "a" from line 473 */; ?>
<a href="/thu-vien-anh">Ảnh hoạt động</a></li>
				<?php /* tag "li" from line 474 */; ?>
<li><?php /* tag "a" from line 474 */; ?>
<a href="/chua-ban">Danh bạ</a></li>
				<?php /* tag "li" from line 475 */; ?>
<li><?php /* tag "a" from line 475 */; ?>
<a href="/lien-he">Liên hệ</a></li>
				<?php /* tag "li" from line 476 */; ?>
<li id="last"><?php /* tag "a" from line 476 */; ?>
<a href="/signin/load">Quản trị</a></li>
			</ul>
		</div>
		<?php /* tag "div" from line 479 */; ?>
<div class="row reset-margin">
			<?php /* tag "div" from line 480 */; ?>
<div class="span6 reset-margin">
				<?php /* tag "div" from line 481 */; ?>
<div class="f-left">
					<?php /* tag "p" from line 482 */; ?>
<p><?php /* tag "b" from line 482 */; ?>
<b>Địa chỉ:</b> 319B2 - Mỹ Phú - Mỹ Đức Đông - Cái Bè - Tiền Giang - Việt Nam</p>
					<?php /* tag "p" from line 483 */; ?>
<p><?php /* tag "b" from line 483 */; ?>
<b>Điện thoại:</b> (073) 3600 943 - <?php /* tag "b" from line 483 */; ?>
<b>Di Động:</b> 0918 852 102</p>
					<?php /* tag "p" from line 484 */; ?>
<p><?php /* tag "b" from line 484 */; ?>
<b>Email:</b> nhuantamkhaituong@gmail.com (nhuantam@chuakhaituong.com)</p>
					<?php /* tag "p" from line 485 */; ?>
<p><?php /* tag "b" from line 485 */; ?>
<b>Website:</b> <?php /* tag "i" from line 485 */; ?>
<i><?php /* tag "u" from line 485 */; ?>
<u>chuakhaituong.com</u></i>, <?php /* tag "i" from line 485 */; ?>
<i><?php /* tag "u" from line 485 */; ?>
<u>quocankhaituongtu.com</u></i>, <?php /* tag "i" from line 485 */; ?>
<i><?php /* tag "u" from line 485 */; ?>
<u>chuaquocankhaituong.vn</u></i></p>
				</div>
			</div>
			<?php /* tag "div" from line 488 */; ?>
<div class="span6 pull-right reset-margin">
				<?php /* tag "div" from line 489 */; ?>
<div class="f-right">
					<?php /* tag "p" from line 490 */; ?>
<p><?php /* tag "b" from line 490 */; ?>
<b>© 12/2012 Chùa Khải Tường</b></p>
					<?php /* tag "p" from line 491 */; ?>
<p>Biên tập - Đại Đức Thích Nhuận Tâm</p>
					<?php /* tag "p" from line 492 */; ?>
<p>Phát triển - SPN Co, Ltd &amp; Nguyên Phong Studio</p>
					<?php /* tag "p" from line 493 */; ?>
<p>Ghi rõ nguồn <?php /* tag "b" from line 493 */; ?>
<b><?php /* tag "i" from line 493 */; ?>
<i>chuakhaituong.com</i></b> khi phát hành thông tin từ website này</p>
				</div>
			</div>
		</div>
	</div><?php 
}

 ?>
<?php 
function tpl_526502ca_base__2figzJzrX7LcIBJZrxyOkQ_Popup(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div>
		<?php /* tag "script" from line 403 */; ?>
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
/* tag "div" from line 436 */ ;
if ($ctx->path($ctx->Popup, 'getEnable')):  ;
?>
<div class="ads-popup ads-popup-center">
			<?php /* tag "div" from line 437 */; ?>
<div class="ads-close"><?php /* tag "i" from line 437 */; ?>
<i class="icon-chevron-down icon-white"></i></div>
			<?php /* tag "div" from line 438 */; ?>
<div id="PopupCarousel" class="carousel slide carousel-fade popup-slide reset-margin">
				<?php /* tag "ol" from line 439 */; ?>
<ol class="carousel-indicators">
					<?php /* tag "li" from line 440 */; ?>
<li data-target="#PopupCarousel" data-slide-to="0" class="active"></li>
				</ol>
				<?php /* tag "div" from line 442 */; ?>
<div class="carousel-inner">
					
					<?php /* tag "div" from line 444 */; ?>
<div class="active item">
						<?php 
/* tag "a" from line 445 */ ;
if (null !== ($_tmp_3 = ('#'))):  ;
$_tmp_3 = ' href="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<a<?php echo $_tmp_3 ?>
>
							<?php 
/* tag "img" from line 446 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->SponsorAll, 'current/getPicture')))):  ;
$_tmp_1 = ' src="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<img width="100%" class="img-rounded"<?php echo $_tmp_1 ?>
/>
						</a>
					</div>
					
					<?php 
/* tag "div" from line 450 */ ;
$_tmp_2 = $ctx->repeat ;
$_tmp_2->Sponsor = new PHPTAL_RepeatController($ctx->SponsorAll)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_2->Sponsor as $ctx->Sponsor): ;
?>
<div class="item">
						<?php 
/* tag "a" from line 451 */ ;
if (null !== ($_tmp_4 = ($ctx->path($ctx->Sponsor, 'getURLView')))):  ;
$_tmp_4 = ' href="'.phptal_escape($_tmp_4).'"' ;
else:  ;
$_tmp_4 = '' ;
endif ;
?>
<a<?php echo $_tmp_4 ?>
>
							<?php 
/* tag "img" from line 452 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Sponsor, 'getPicture')))):  ;
$_tmp_1 = ' src="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<img width="100%" class="img-rounded"<?php echo $_tmp_1 ?>
/>
						</a>
					</div><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>
					
				</div>
			</div>
		</div><?php endif; ?>

		<?php /* tag "div" from line 458 */; ?>
<div id="ads-open" class="ads-open-center"><?php /* tag "i" from line 458 */; ?>
<i class="icon-chevron-up icon-white"></i></div>
	</div><?php 
}

 ?>
<?php 
function tpl_526502ca_base__2figzJzrX7LcIBJZrxyOkQ_CourseBox(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
if ($ctx->path($ctx->Course, 'getLessionNext')):  ;
?>
<div class="box radius">
		<?php /* tag "div" from line 378 */; ?>
<div class="b-title">
			<?php /* tag "div" from line 379 */; ?>
<div class="b-t-icon-content">Sắp khai giảng</div>
		</div>
		<?php /* tag "div" from line 381 */; ?>
<div class="b-content">
			<?php /* tag "div" from line 382 */; ?>
<div align="center" style="padding-top:10px;">
				<?php 
/* tag "a" from line 383 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Course, 'getLessionNext/getURLRead')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
>
					<?php 
/* tag "img" from line 384 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Course, 'getLessionNext/getImage')))):  ;
$_tmp_1 = ' src="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<img width="300"<?php echo $_tmp_1 ?>
/>
				</a>
			</div>
			<?php /* tag "div" from line 387 */; ?>
<div align="center" style="padding:10px;">
				<?php 
/* tag "a" from line 388 */ ;
if (null !== ($_tmp_4 = ($ctx->path($ctx->Course, 'getLessionNext/getURLRead')))):  ;
$_tmp_4 = ' href="'.phptal_escape($_tmp_4).'"' ;
else:  ;
$_tmp_4 = '' ;
endif ;
?>
<a style="font-size:12px; color:#980707; line-height:30px;"<?php echo $_tmp_4 ?>
>
					<?php /* tag "h1" from line 389 */; ?>
<h1><?php echo phptal_escape($ctx->path($ctx->Course, 'getLessionNext/getName')); ?>
</h1>
				</a>
			</div>
			<?php /* tag "div" from line 392 */; ?>
<div style="margin-left:10px;">
				<?php /* tag "div" from line 393 */; ?>
<div id="CourseCountdown"></div>
			</div>
			<?php /* tag "script" from line 395 */; ?>
<script type="text/javascript">/*<![CDATA[*/$(function(){var d1 = $("#CourseBox").attr('alt');var parts = d1.match(/(\d+)/g);var d2 = new Date(parts[0], parts[1]-1, parts[2]);var austDay = new Date();austDay = new Date(austDay.getFullYear() + 1, 1 - 1, 26);$('#CourseCountdown').countdown({until: d2});});/*]]>*/</script>
		</div>
	</div><?php 
endif ;

}

?>
<?php 
function tpl_526502ca_base__2figzJzrX7LcIBJZrxyOkQ_EventBox(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div class="box radius">
		<?php /* tag "div" from line 347 */; ?>
<div class="b-title">
			<?php /* tag "div" from line 348 */; ?>
<div class="b-t-icon-content">Đào tạo</div>
		</div>
		<?php /* tag "div" from line 350 */; ?>
<div id="LessionCarousel" class="carousel slide carousel-fade lession-slide reset-margin">
			<?php /* tag "div" from line 351 */; ?>
<div class="carousel-inner">
				<?php /* tag "div" from line 352 */; ?>
<div class="active item">
					<?php 
/* tag "a" from line 353 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Course, 'getLessions/current/getURLRead')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
>
						<?php 
/* tag "img" from line 354 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Course, 'getLessions/current/getImage')))):  ;
$_tmp_1 = ' src="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<img<?php echo $_tmp_1 ?>
/>
						<?php /* tag "div" from line 355 */; ?>
<div class="carousel-caption">
							<?php /* tag "p" from line 356 */; ?>
<p><?php echo phptal_escape($ctx->path($ctx->Course, 'getLessions/current/getName')); ?>
</p>
						</div>
					</a>
				</div>
				<?php 
/* tag "div" from line 360 */ ;
$_tmp_3 = $ctx->repeat ;
$_tmp_3->Lession = new PHPTAL_RepeatController($ctx->path($ctx->Course, 'getLessions'))
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_3->Lession as $ctx->Lession): ;
?>
<div class="item">
					<?php 
/* tag "a" from line 361 */ ;
if (null !== ($_tmp_4 = ($ctx->path($ctx->Lession, 'getURLRead')))):  ;
$_tmp_4 = ' href="'.phptal_escape($_tmp_4).'"' ;
else:  ;
$_tmp_4 = '' ;
endif ;
?>
<a<?php echo $_tmp_4 ?>
>
						<?php 
/* tag "img" from line 362 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Lession, 'getImage')))):  ;
$_tmp_1 = ' src="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<img<?php echo $_tmp_1 ?>
/>
						<?php /* tag "div" from line 363 */; ?>
<div class="carousel-caption">
							<?php /* tag "p" from line 364 */; ?>
<p><?php echo phptal_escape($ctx->path($ctx->Lession, 'getName')); ?>
</p>
						</div>
					</a>
				</div><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

			</div>
			<?php /* tag "a" from line 369 */; ?>
<a class="carousel-control left" href="#LessionCarousel" data-slide="prev">&lsaquo;</a>
			<?php /* tag "a" from line 370 */; ?>
<a class="carousel-control right" href="#LessionCarousel" data-slide="next">&rsaquo;</a>
		</div>
	</div><?php 
}

 ?>
<?php 
function tpl_526502ca_base__2figzJzrX7LcIBJZrxyOkQ_CallendarBar(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div class="row reset-margin date-time">
		<?php /* tag "div" from line 333 */; ?>
<div id="date-time" class="span6 fix-width">
			<?php /* tag "script" from line 334 */; ?>
<script type="text/javascript">getLunarDateString(09,11,2012,16,39,13);</script>
		</div>
		<?php /* tag "div" from line 336 */; ?>
<div class="span6 fix-width">
			<?php /* tag "marquee" from line 337 */; ?>
<marquee behavior="scroll" direction="left" scrollamount="1">
				Kính chúc chư tôn đức tăng ni cùng quý phật tử thân tâm thường an lạc ! Nguyện đem công đức này hướng về khắp tất cả đệ tử và chúng sanh đều trọn thành Phật Đạo.
			</marquee>
		</div>
	</div><?php 
}

 ?>
<?php 
function tpl_526502ca_base__2figzJzrX7LcIBJZrxyOkQ_CallendarBox(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div class="box radius">
		<?php /* tag "div" from line 296 */; ?>
<div class="b-title">
			<?php /* tag "div" from line 297 */; ?>
<div class="b-t-icon-content">Lịch Dương <?php /* tag "small" from line 297 */; ?>
<small>Âm</small></div>
		</div>
		<?php /* tag "div" from line 299 */; ?>
<div class="b-content padding-content">
			<?php /* tag "table" from line 300 */; ?>
<table class="calendar-paper" width="100%" border="0" cellpadding="1" cellspacing="1">
				<?php /* tag "tbody" from line 301 */; ?>
<tbody>
					<?php /* tag "tr" from line 302 */; ?>
<tr><?php /* tag "td" from line 302 */; ?>
<td colspan="2" id="thangduong" class="thangduong"></td></tr>
					<?php /* tag "tr" from line 303 */; ?>
<tr><?php /* tag "td" from line 303 */; ?>
<td colspan="2" id="ngayduong" class="ngayduong"></td></tr>
					<?php /* tag "tr" from line 304 */; ?>
<tr><?php /* tag "td" from line 304 */; ?>
<td colspan="2" id="thuduong" class="thuduong"></td></tr>
					<?php /* tag "tr" from line 305 */; ?>
<tr>
						<?php /* tag "td" from line 306 */; ?>
<td> 
							<?php /* tag "div" from line 307 */; ?>
<div id="thangam" class="thangam"></div>
							<?php /* tag "div" from line 308 */; ?>
<div id="ngayam" class="ngayam"></div>
							<?php /* tag "div" from line 309 */; ?>
<div id="namam" class="namam"></div>
						</td>
						<?php /* tag "td" from line 311 */; ?>
<td class="canchi">
							<?php /* tag "div" from line 312 */; ?>
<div id="canchithang" class="gioam"></div>
							<?php /* tag "div" from line 313 */; ?>
<div id="canchingay" class="gioam"></div>
						</td>
					</tr>
					<?php /* tag "tr" from line 316 */; ?>
<tr><?php /* tag "td" from line 316 */; ?>
<td colspan="2" id="hoangdao" class="hoangdao"></td></tr>
				</tbody>
			</table>
			<?php /* tag "script" from line 319 */; ?>
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
function tpl_526502ca_base__2figzJzrX7LcIBJZrxyOkQ_ContactBox(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div class="box">
		<?php /* tag "div" from line 289 */; ?>
<div class="b-content"><?php /* tag "a" from line 289 */; ?>
<a href="/lien-he"><?php /* tag "img" from line 289 */; ?>
<img width="100%" src="/data/images/logo/contact.jpg"/></a></div>
	</div><?php 
}

 ?>
<?php 
function tpl_526502ca_base__2figzJzrX7LcIBJZrxyOkQ_SponsorBox(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div class="box radius">
		<?php /* tag "div" from line 275 */; ?>
<div class="b-title">
			<?php /* tag "div" from line 276 */; ?>
<div class="b-t-icon-content">Trợ Duyên</div>
		</div>
		<?php /* tag "div" from line 278 */; ?>
<div class="b-content">
			<?php /* tag "a" from line 279 */; ?>
<a href="/so-vang">
				<?php /* tag "img" from line 280 */; ?>
<img width="100%" src="/data/images/logo/sponsor.jpg"/>
			</a>
		</div>
	</div><?php 
}

 ?>
<?php 
function tpl_526502ca_base__2figzJzrX7LcIBJZrxyOkQ_FixedFunction(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div class="fixed-function">
		<?php /* tag "div" from line 261 */; ?>
<div class="fb-like fb_edge_widget_with_comment fb_iframe_widget" data-href="https://www.facebook.com/ChuaKhaiTuong" data-send="false" data-layout="box_count" data-width="450" data-show-faces="false" data-font="tahoma" fb-xfbml-state="rendered"></div>
		<?php /* tag "div" from line 262 */; ?>
<div class="bubble"><?php echo phptal_escape(\MVC\Library\Statistic::getCountPrint()); ?>
</div>
		<?php /* tag "p" from line 263 */; ?>
<p class="bubble-item">Truy cập</p>
		<?php /* tag "div" from line 264 */; ?>
<div class="bubble">
			<?php /* tag "img" from line 265 */; ?>
<img src="/data/images/logo/count_logo.gif"/>
			<?php /* tag "span" from line 266 */; ?>
<span><?php echo phptal_escape(\MVC\Library\Statistic::getOnlinePrint()); ?>
</span>
		</div>
		<?php /* tag "p" from line 268 */; ?>
<p class="bubble-item">Trực tuyến</p>
	</div><?php 
}

 ?>
<?php 
function tpl_526502ca_base__2figzJzrX7LcIBJZrxyOkQ_AskBox(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div class="box radius">
		<?php /* tag "div" from line 247 */; ?>
<div class="b-title">
			<?php /* tag "div" from line 248 */; ?>
<div class="b-t-icon-content">Hỏi &amp; Đáp PHẬT HỌC</div>
		</div>
		<?php /* tag "div" from line 250 */; ?>
<div class="b-content">
			<?php /* tag "a" from line 251 */; ?>
<a href="/hoi-dap/dat-cau-hoi">
				<?php /* tag "img" from line 252 */; ?>
<img width="100%" src="/data/images/logo/question.jpg"/>
			</a>
		</div>
	</div><?php 
}

 ?>
<?php 
function tpl_526502ca_base__2figzJzrX7LcIBJZrxyOkQ_TopMonkBox(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div class="box radius">
		<?php /* tag "div" from line 227 */; ?>
<div class="b-title">
			<?php /* tag "div" from line 228 */; ?>
<div class="b-t-icon-content">GIẢNG SƯ NỔI BẬT</div>
		</div>
		<?php /* tag "div" from line 230 */; ?>
<div class="b-content">
			<?php /* tag "ul" from line 231 */; ?>
<ul class="grid-item-3 thumbnails reset-margin">
				<?php 
/* tag "li" from line 232 */ ;
$_tmp_4 = $ctx->repeat ;
$_tmp_4->Monk = new PHPTAL_RepeatController($ctx->MonkAll)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_4->Monk as $ctx->Monk): ;
?>
<li class="span2">
					<?php 
/* tag "a" from line 233 */ ;
if (null !== ($_tmp_3 = ($ctx->path($ctx->Monk, 'getURLRead')))):  ;
$_tmp_3 = ' href="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<a<?php echo $_tmp_3 ?>
>
						<?php /* tag "div" from line 234 */; ?>
<div class="thumbnail">
							<?php 
/* tag "img" from line 235 */ ;
$ctx->noThrow(true) ;
if (!phptal_isempty($_tmp_2 = ($ctx->path($ctx->Monk, 'getURLPic', true)))):  ;
$_tmp_2 = ' src="'.phptal_escape($_tmp_2).'"' ;
elseif (null !== ($_tmp_2 = ('/data/images/exit_picture.jpg'))):  ;
$_tmp_2 = ' src="'.phptal_escape($_tmp_2).'"' ;
endif ;
$ctx->noThrow(false) ;
if (null !== ($_tmp_1 = ($ctx->Monk->getPreName() . ' ' . $ctx->Monk->getName() . ' ' . $ctx->Monk->getPagoda()))):  ;
$_tmp_1 = ' data-original-title="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<img class="monk-tooltip" data-toggle="tooltip" data-placement="bottom"<?php echo $_tmp_2 ?>
<?php echo $_tmp_1 ?>
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
function tpl_526502ca_base__2figzJzrX7LcIBJZrxyOkQ_TopVideoBox(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
$_tmp_1 = $ctx->repeat ;
$_tmp_1->Panel = new PHPTAL_RepeatController($ctx->PanelCategoryVideoAll)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->Panel as $ctx->Panel): ;
?>
<div class="box radius">
		<?php /* tag "div" from line 206 */; ?>
<div class="b-title">
			<?php /* tag "div" from line 207 */; ?>
<div class="b-t-icon-content"><?php echo phptal_escape($ctx->path($ctx->Panel, 'getName')); ?>
</div>
		</div>
		<?php /* tag "div" from line 209 */; ?>
<div class="b-content">
			<?php /* tag "ul" from line 210 */; ?>
<ul class="grid-item-2 thumbnails reset-margin">
				<?php 
/* tag "li" from line 211 */ ;
$_tmp_2 = $ctx->repeat ;
$_tmp_2->Category = new PHPTAL_RepeatController($ctx->path($ctx->Panel, 'getDetailAll'))
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_2->Category as $ctx->Category): ;
?>
<li class="span2">
					<?php 
/* tag "a" from line 212 */ ;
if (null !== ($_tmp_3 = ($ctx->path($ctx->Category, 'getCategoryVideo/getURLRead')))):  ;
$_tmp_3 = ' href="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<a<?php echo $_tmp_3 ?>
>
						<?php /* tag "div" from line 213 */; ?>
<div class="thumbnail">
							<?php 
/* tag "img" from line 214 */ ;
if (null !== ($_tmp_4 = ($ctx->path($ctx->Category, 'getCategoryVideo/getPicture')))):  ;
$_tmp_4 = ' src="'.phptal_escape($_tmp_4).'"' ;
else:  ;
$_tmp_4 = '' ;
endif ;
?>
<img<?php echo $_tmp_4 ?>
/>
							<?php /* tag "p" from line 215 */; ?>
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
function tpl_526502ca_base__2figzJzrX7LcIBJZrxyOkQ_TopNewsBox(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div class="box radius">
		<?php /* tag "div" from line 181 */; ?>
<div class="b-title">
			<?php /* tag "div" from line 182 */; ?>
<div class="b-t-icon-content">Tin tức nổi bật</div>
		</div>
		<?php /* tag "div" from line 184 */; ?>
<div class="b-content">			
			<?php /* tag "div" from line 185 */; ?>
<div id="BoxNewsCarousel" class="carousel slide sidebar-slide reset-margin">
				<?php /* tag "div" from line 186 */; ?>
<div class="carousel-inner">
					<?php /* tag "div" from line 187 */; ?>
<div class="active item">
						<?php 
/* tag "a" from line 188 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->PanelNewsAll, 'current/getNews/getURLRead')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
>
							<?php 
/* tag "img" from line 189 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->PanelNewsAll, 'current/getNews/getImage')))):  ;
$_tmp_1 = ' src="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<img<?php echo $_tmp_1 ?>
/>
							<?php /* tag "div" from line 190 */; ?>
<div class="carousel-caption">
								<?php /* tag "p" from line 191 */; ?>
<p><?php echo phptal_escape($ctx->path($ctx->PanelNewsAll, 'current/getNews/getTitle')); ?>
</p>
							</div>
						</a>
					</div>					
				</div>
				<?php /* tag "a" from line 196 */; ?>
<a class="carousel-control left" href="#BoxNewsCarousel" data-slide="prev">&lsaquo;</a>
				<?php /* tag "a" from line 197 */; ?>
<a class="carousel-control right" href="#BoxNewsCarousel" data-slide="next">&rsaquo;</a>
			</div>			
		</div>
	</div><?php 
}

 ?>
<?php 
function tpl_526502ca_base__2figzJzrX7LcIBJZrxyOkQ_PictureBox(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div class="box radius">
		<?php /* tag "div" from line 167 */; ?>
<div class="b-title">
			<?php /* tag "div" from line 168 */; ?>
<div class="b-t-icon-content">Ảnh Hoạt Động</div>
		</div>
		<?php /* tag "div" from line 170 */; ?>
<div class="b-content">
			<?php /* tag "a" from line 171 */; ?>
<a href="/thu-vien-anh">
				<?php /* tag "img" from line 172 */; ?>
<img width="100%" src="/data/images/logo/top_img.jpg"/>
			</a>
		</div>
	</div><?php 
}

 ?>
<?php 
function tpl_526502ca_base__2figzJzrX7LcIBJZrxyOkQ_BuddhaBox(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div class="box radius">
		<?php /* tag "div" from line 136 */; ?>
<div class="b-title">
			<?php /* tag "div" from line 137 */; ?>
<div class="b-t-icon-content">Phật Âm</div>
		</div>
		<?php /* tag "div" from line 139 */; ?>
<div class="b-content">
			<?php /* tag "div" from line 140 */; ?>
<div id="BuddhaCarousel" class="carousel slide carousel-fade sidebar-slide reset-margin">
				<?php /* tag "ol" from line 141 */; ?>
<ol class="carousel-indicators">
					<?php /* tag "li" from line 142 */; ?>
<li data-target="#BuddhaCarousel" data-slide-to="0" class="active"></li>
					<?php /* tag "li" from line 143 */; ?>
<li data-target="#BuddhaCarousel" data-slide-to="1"></li>
					<?php /* tag "li" from line 144 */; ?>
<li data-target="#BuddhaCarousel" data-slide-to="2"></li>
				</ol>
				<?php /* tag "div" from line 146 */; ?>
<div class="carousel-inner">
					<?php /* tag "div" from line 147 */; ?>
<div class="active item">
						<?php /* tag "a" from line 148 */; ?>
<a href="/phat-am/bac-tong"><?php /* tag "img" from line 148 */; ?>
<img src="/data/images/logo/bac_tong.jpg"/></a>
					</div>
					<?php /* tag "div" from line 150 */; ?>
<div class="item">
						<?php /* tag "a" from line 151 */; ?>
<a href="/phat-am/nam-tong"><?php /* tag "img" from line 151 */; ?>
<img src="/data/images/logo/nam_tong.jpg"/></a>
					</div>
					<?php /* tag "div" from line 153 */; ?>
<div class="item">
						<?php /* tag "a" from line 154 */; ?>
<a href="/phat-am/tong-hop"><?php /* tag "img" from line 154 */; ?>
<img src="/data/images/logo/tong_hop.jpg"/></a>
					</div>
				</div>
				<?php /* tag "a" from line 157 */; ?>
<a class="carousel-control left" href="#BuddhaCarousel" data-slide="prev">&lsaquo;</a>
				<?php /* tag "a" from line 158 */; ?>
<a class="carousel-control right" href="#BuddhaCarousel" data-slide="next">&rsaquo;</a>
			</div>
		</div>
	</div><?php 
}

 ?>
<?php 
function tpl_526502ca_base__2figzJzrX7LcIBJZrxyOkQ_TaskBox(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div class="box radius">
		<?php /* tag "div" from line 105 */; ?>
<div class="b-title"><?php /* tag "div" from line 105 */; ?>
<div class="b-t-icon-content">Các hoạt động</div></div>
		<?php /* tag "div" from line 106 */; ?>
<div class="b-content">
			<?php /* tag "div" from line 107 */; ?>
<div class="g4"><?php /* tag "div" from line 107 */; ?>
<div id="eventCalendarLocale"></div></div>
			<?php /* tag "script" from line 108 */; ?>
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
function tpl_526502ca_base__2figzJzrX7LcIBJZrxyOkQ_Header(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div class="row reset-margin">
		<?php /* tag "div" from line 45 */; ?>
<div class="header">
			<?php /* tag "a" from line 46 */; ?>
<a href="/trang-chu">
				
			</a>
		</div>
		<?php /* tag "div" from line 50 */; ?>
<div class="top-menu">
			<?php /* tag "ul" from line 51 */; ?>
<ul class="nav nav-pills">
				<?php 
/* tag "li" from line 52 */ ;
if (null !== ($_tmp_1 = ($ctx->ActiveItem=='Home'?'active':'?'))):  ;
$_tmp_1 = ' class="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<li<?php echo $_tmp_1 ?>
><?php /* tag "a" from line 52 */; ?>
<a href="/trang-chu">Trang chủ</a></li>
				<?php 
/* tag "li" from line 53 */ ;
if (null !== ($_tmp_1 = ($ctx->ActiveItem=='Introduction'?'active':'?'))):  ;
$_tmp_1 = ' class="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<li<?php echo $_tmp_1 ?>
><?php /* tag "a" from line 53 */; ?>
<a href="/gioi-thieu">Giới thiệu</a></li>
				<?php 
/* tag "li" from line 54 */ ;
if (null !== ($_tmp_1 = ($ctx->ActiveItem=='ReadCategory'?'active dropdown':'dropdown'))):  ;
$_tmp_1 = ' class="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<li<?php echo $_tmp_1 ?>
>
					<?php /* tag "a" from line 55 */; ?>
<a class="dropdown-toggle" data-toggle="dropdown">Tin tức <?php /* tag "b" from line 55 */; ?>
<b class="caret"></b></a>
					<?php /* tag "ul" from line 56 */; ?>
<ul class="dropdown-menu">
						<?php /* tag "li" from line 57 */; ?>
<li>
							
						</li>
					</ul>
				</li>
				<?php 
/* tag "li" from line 62 */ ;
if (null !== ($_tmp_1 = ($ctx->ActiveItem=='Course'?'active':'?'))):  ;
$_tmp_1 = ' class="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<li<?php echo $_tmp_1 ?>
><?php /* tag "a" from line 62 */; ?>
<a href="/dao-tao">Đào tạo</a></li>
				<?php 
/* tag "li" from line 63 */ ;
if (null !== ($_tmp_1 = ($ctx->ActiveItem=='Event'?'active':'?'))):  ;
$_tmp_1 = ' class="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<li<?php echo $_tmp_1 ?>
><?php /* tag "a" from line 63 */; ?>
<a href="/su-kien">Sự kiện</a></li>
				<?php 
/* tag "li" from line 64 */ ;
if (null !== ($_tmp_1 = ($ctx->ActiveItem=='LibraryVideo'?'active dropdown':'dropdown'))):  ;
$_tmp_1 = ' class="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<li<?php echo $_tmp_1 ?>
>
					<?php /* tag "a" from line 65 */; ?>
<a class="dropdown-toggle" data-toggle="dropdown">PHẬT ÂM <?php /* tag "b" from line 65 */; ?>
<b class="caret"></b></a>					
				</li>
				<?php 
/* tag "li" from line 67 */ ;
if (null !== ($_tmp_1 = ($ctx->ActiveItem=='Ask'?'active dropdown':'dropdown'))):  ;
$_tmp_1 = ' class="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<li<?php echo $_tmp_1 ?>
>
					<?php /* tag "a" from line 68 */; ?>
<a class="dropdown-toggle" data-toggle="dropdown">Hỏi đáp <?php /* tag "b" from line 68 */; ?>
<b class="caret"></b></a>
					<?php /* tag "ul" from line 69 */; ?>
<ul class="dropdown-menu">
						<?php /* tag "li" from line 70 */; ?>
<li>
							<?php 
/* tag "a" from line 71 */ ;
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
/* tag "li" from line 75 */ ;
if (null !== ($_tmp_2 = ($ctx->ActiveItem=='LibraryAlbum'?'active':'?'))):  ;
$_tmp_2 = ' class="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<li<?php echo $_tmp_2 ?>
><?php /* tag "a" from line 75 */; ?>
<a href="/thu-vien-anh">Ảnh hoạt động</a></li>
				<?php 
/* tag "li" from line 76 */ ;
if (null !== ($_tmp_1 = ($ctx->ActiveItem=='Pagoda'?'active dropdown':'dropdown'))):  ;
$_tmp_1 = ' class="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<li<?php echo $_tmp_1 ?>
>
					<?php /* tag "a" from line 77 */; ?>
<a class="dropdown-toggle" data-toggle="dropdown">Danh bạ Chùa <?php /* tag "b" from line 77 */; ?>
<b class="caret"></b></a>
					<?php /* tag "ul" from line 78 */; ?>
<ul class="dropdown-menu">
						<?php /* tag "li" from line 79 */; ?>
<li>
							<?php 
/* tag "a" from line 80 */ ;
if (null !== ($_tmp_2 = ('#'))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
><?php echo '&#039;chùa 1&#039;'; ?>
</a>
						</li>
					</ul>
				</li>
				<?php 
/* tag "li" from line 84 */ ;
if (null !== ($_tmp_2 = ($ctx->ActiveItem=='Sponsor'?'active dropdown':'dropdown'))):  ;
$_tmp_2 = ' class="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<li<?php echo $_tmp_2 ?>
>
					
					<?php /* tag "a" from line 86 */; ?>
<a class="dropdown-toggle" data-toggle="dropdown">Từ thiện <?php /* tag "b" from line 86 */; ?>
<b class="caret"></b></a>
					<?php /* tag "ul" from line 87 */; ?>
<ul class="dropdown-menu">
						<?php /* tag "li" from line 88 */; ?>
<li><?php /* tag "a" from line 88 */; ?>
<a href="/so-vang">Sổ vàng</a></li>
						<!--
						<li tal:repeat="Sponsor SponsorAll">
							<a tal:attributes="href Sponsor/getURLView" tal:content="Sponsor/getName"></a>
						</li>
						!-->
					</ul>
				</li>
				<?php 
/* tag "li" from line 96 */ ;
if (null !== ($_tmp_1 = ($ctx->ActiveItem=='Contact'?'active':'?'))):  ;
$_tmp_1 = ' class="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<li<?php echo $_tmp_1 ?>
><?php /* tag "a" from line 96 */; ?>
<a href="/lien-he">Liên hệ</a></li>				
			</ul>
		</div>
	</div><?php 
}

 ?>
<?php 
function tpl_526502ca_base__2figzJzrX7LcIBJZrxyOkQ_IncludeJS(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<span>
		<!--
		<script type="text/javascript" language="javascript" src="/mvc/templates/script/library/jquery-1.7.1.min.js"/>
		!-->
		<?php /* tag "script" from line 31 */; ?>
<script type="text/javascript" language="javascript" src="/mvc/templates/script/library/jquery-1.7.1.min.js"></script>
		<?php /* tag "script" from line 32 */; ?>
<script type="text/javascript" language="javascript" src="/mvc/templates/script/library/jquery.countdown.js"></script>
		<?php /* tag "script" from line 33 */; ?>
<script type="text/javascript" language="javascript" src="/mvc/templates/script/library/amlich-hnd.js"></script>
		<?php /* tag "script" from line 34 */; ?>
<script type="text/javascript" language="javascript" src="/mvc/templates/script/library/jquery.eventCalendar.js"></script>
		<?php /* tag "script" from line 35 */; ?>
<script type="text/javascript" language="javascript" src="/mvc/templates/script/library/jquery.timeago.js"></script>		
		<?php /* tag "script" from line 36 */; ?>
<script type="text/javascript" language="javascript" src="/mvc/templates/script/library/jquery.session.js"></script>
		<?php /* tag "script" from line 37 */; ?>
<script type="text/javascript" language="javascript" src="/mvc/templates/theme/bootstrap/js/bootstrap.js"></script>
		<?php /* tag "script" from line 38 */; ?>
<script type="text/javascript" language="javascript" src="/mvc/templates/script/user/base.js"></script>
	</span><?php 
}

 ?>
<?php 
function tpl_526502ca_base__2figzJzrX7LcIBJZrxyOkQ_IncludeCSS(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<span>
		<?php /* tag "link" from line 17 */; ?>
<link rel="stylesheet" type="text/css" href="/mvc/templates/theme/base/jquery.countdown.css"/> 
		<?php /* tag "link" from line 18 */; ?>
<link rel="stylesheet" type="text/css" href="/mvc/templates/theme/base/eventCalendar.css"/>
		<?php /* tag "link" from line 19 */; ?>
<link rel="stylesheet" type="text/css" href="/mvc/templates/theme/base/eventCalendar_theme.css"/>	
		<?php /* tag "link" from line 20 */; ?>
<link rel="stylesheet" type="text/css" href="/mvc/templates/theme/bootstrap/css/bootstrap.css" media="screen"/>
		<?php /* tag "link" from line 21 */; ?>
<link rel="stylesheet" type="text/css" href="/mvc/templates/theme/bootstrap/css/base.css"/>
	</span><?php 
}

 ?>
<?php 
function tpl_526502ca_base__2figzJzrX7LcIBJZrxyOkQ_IncludeMETA(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<span>
		<?php /* tag "title" from line 7 */; ?>
<title><?php echo 'Website Phòng Kỹ Thuật Thể Hiện - Đài Phát Thanh Truyền Hình Vĩnh Long'; ?>
</title>
		<?php /* tag "base" from line 8 */; ?>
<base href="http://kythuathehien.com"/>
		<?php /* tag "meta" from line 9 */; ?>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>		
		<?php /* tag "link" from line 10 */; ?>
<link rel="shortcut icon" href="/data/images/logo/favicon.ico" type="image/x-icon"/>
	</span><?php 
}

 ?>
<?php 
function tpl_526502ca_base__2figzJzrX7LcIBJZrxyOkQ(PHPTAL $tpl, PHPTAL_Context $ctx) {
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
	<?php /* tag "span" from line 16 */; ?>

	
	<!-- ======================================================================== -->
	<!-- JAVASCRIPT INCLUDE														  -->
	<!-- ======================================================================== -->
	<?php /* tag "span" from line 27 */; ?>

	
	<!-- ======================================================================== -->
	<!-- HEADER																	  -->
	<!-- ======================================================================== -->
	<?php /* tag "div" from line 44 */; ?>

	
	<!-- ======================================================================== -->
	<!-- LỊCH CÔNG TÁC															  -->
	<!-- ======================================================================== -->
	<?php /* tag "div" from line 104 */; ?>

	
	<!-- ======================================================================== -->
	<!-- PHẬT ÂM 																  -->
	<!-- ======================================================================== -->
	<?php /* tag "div" from line 135 */; ?>

	
	<!-- ======================================================================== -->
	<!-- ẢNH HOẠT ĐỘNG															  -->
	<!-- ======================================================================== -->
	<?php /* tag "div" from line 166 */; ?>

	
	<!-- ======================================================================== -->
	<!-- TIN TỨC MỚI CẬP NHẬT													  -->
	<!-- ======================================================================== -->
	<?php /* tag "div" from line 180 */; ?>

	
	<!-- ======================================================================== -->
	<!-- VIDEO MỚI CẬP NHẬT														  -->
	<!-- ======================================================================== -->
	<?php /* tag "div" from line 205 */; ?>

	
	<!-- ======================================================================== -->
	<!-- GIẢNG SƯ NỔI BẬT														  -->
	<!-- ======================================================================== -->
	<?php /* tag "div" from line 226 */; ?>

	
	<!-- ======================================================================== -->
	<!-- HỎI - ĐÁP PHẬT HỌC														  -->
	<!-- ======================================================================== -->
	<?php /* tag "div" from line 246 */; ?>

	
	<!-- ======================================================================== -->
	<!-- FIXED FUNCTION															  -->
	<!-- ======================================================================== -->
	<?php /* tag "div" from line 260 */; ?>

	
	<!-- ======================================================================== -->
	<!-- TRỢ DUYÊN - ỦNG HỘ														  -->
	<!-- ======================================================================== -->
	<?php /* tag "div" from line 274 */; ?>

	
	<!-- ======================================================================== -->
	<!-- LIÊN HỆ																  -->
	<!-- ======================================================================== -->
	<?php /* tag "div" from line 288 */; ?>

	
	<!-- ======================================================================== -->
	<!-- LỊCH																	  -->
	<!-- ======================================================================== -->
	<?php /* tag "div" from line 295 */; ?>

	
	<!-- ======================================================================== -->
	<!-- THANH TIÊU ĐỀ LỊCH DƯƠNG - ÂM											  -->
	<!-- ======================================================================== -->
	<?php /* tag "div" from line 332 */; ?>

	
	<!-- ======================================================================== -->
	<!-- SỰ KIỆN																  -->
	<!-- ======================================================================== -->
	<?php /* tag "div" from line 346 */; ?>

	
	<!-- ======================================================================== -->
	<!-- KHÓA HỌC SẮP KHAI GIẢNG												  -->
	<!-- ======================================================================== -->
	<?php /* tag "div" from line 377 */; ?>

	
	<!-- ======================================================================== -->
	<!-- POPUP QUẢNG CÁO														  -->
	<!-- ======================================================================== -->
	<?php /* tag "div" from line 402 */; ?>

	
	<!-- ======================================================================== -->
	<!-- FOOTER																	  -->
	<!-- ======================================================================== -->
	<?php /* tag "div" from line 464 */; ?>

	
	<!-- ======================================================================== -->
	<!-- BACK ON TOP															  -->
	<!-- ======================================================================== -->
	<?php /* tag "div" from line 502 */; ?>

	
</body>
</html><?php 
/* end */ ;

}

?>
<?php /* 
*** DO NOT EDIT THIS FILE ***

Generated by PHPTAL from D:\AppWebServer\MyCodePHP\kythuatthehien.com\mvc\templates\base.xhtml (edit that file instead) */; ?>