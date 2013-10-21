<?php 
function tpl_52650db7_base__2figzJzrX7LcIBJZrxyOkQ_Backontop(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div class="crunchify-top" data-toggle="tooltip" data-placement="left" data-original-title="Chuyển đến đầu trang"></div><?php 
}

 ?>
<?php 
function tpl_52650db7_base__2figzJzrX7LcIBJZrxyOkQ_Footer(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div class="row reset-margin footer">
		<?php /* tag "div" from line 443 */; ?>
<div class="top-menu">
			<?php /* tag "ul" from line 444 */; ?>
<ul class="nav nav-pills">
				<?php /* tag "li" from line 445 */; ?>
<li><?php /* tag "a" from line 445 */; ?>
<a href="/trang-chu">Trang chủ</a></li>								
				<?php /* tag "li" from line 446 */; ?>
<li><?php /* tag "a" from line 446 */; ?>
<a href="/thong-bao">Tin tức nội bộ</a></li>
				<?php /* tag "li" from line 447 */; ?>
<li><?php /* tag "a" from line 447 */; ?>
<a href="/chuyen-mon">Góc Chuyên môn</a></li>
				<?php /* tag "li" from line 448 */; ?>
<li><?php /* tag "a" from line 448 */; ?>
<a href="/thao-luan">Góc Thao Luận</a></li>				
				<?php /* tag "li" from line 449 */; ?>
<li><?php /* tag "a" from line 449 */; ?>
<a href="/ung-dung">Ứng Dụng</a></li>
				<?php /* tag "li" from line 450 */; ?>
<li><?php /* tag "a" from line 450 */; ?>
<a href="/muc-hoi-dap">Mục Hỏi đáp</a></li>
				<?php /* tag "li" from line 451 */; ?>
<li><?php /* tag "a" from line 451 */; ?>
<a href="/thu-vien-anh">Ảnh hoạt động</a></li>				
				<?php /* tag "li" from line 452 */; ?>
<li id="last"><?php /* tag "a" from line 452 */; ?>
<a href="/signin/load">Quản trị</a></li>
			</ul>
		</div>
		<?php /* tag "div" from line 455 */; ?>
<div class="row reset-margin">			
			<?php /* tag "div" from line 456 */; ?>
<div class="span6  reset-margin">
				<?php /* tag "div" from line 457 */; ?>
<div class="f-left">
					<?php /* tag "p" from line 458 */; ?>
<p><?php /* tag "b" from line 458 */; ?>
<b>© 11/2013 Phòng Kỹ Thuật Thể Hiện</b></p>
					<?php /* tag "p" from line 459 */; ?>
<p>Biên tập - T.Phòng Nguyễn Quang Phương</p>
					<?php /* tag "p" from line 460 */; ?>
<p>Phát triển - KT. Nguyễn Thanh Bảo</p>					
				</div>
			</div>
			<?php /* tag "div" from line 463 */; ?>
<div class="span6 pull-right reset-margin">
				<?php /* tag "div" from line 464 */; ?>
<div class="f-right">
					<?php /* tag "p" from line 465 */; ?>
<p><?php /* tag "b" from line 465 */; ?>
<b>Địa chỉ:</b>50 Phạm Thái Bường Phường 4, TP Vĩnh Long</p>
					<?php /* tag "p" from line 466 */; ?>
<p><?php /* tag "b" from line 466 */; ?>
<b>Điện thoại:</b> (073) 822 345</p>
					<?php /* tag "p" from line 467 */; ?>
<p><?php /* tag "b" from line 467 */; ?>
<b>Email:</b> ktthehien@gmail.com</p>					
				</div>
			</div>
		</div>
	</div><?php 
}

 ?>
<?php 
function tpl_52650db7_base__2figzJzrX7LcIBJZrxyOkQ_Popup(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div>
		<?php /* tag "script" from line 381 */; ?>
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
/* tag "div" from line 414 */ ;
if ($ctx->path($ctx->Popup, 'getEnable')):  ;
?>
<div class="ads-popup ads-popup-center">
			<?php /* tag "div" from line 415 */; ?>
<div class="ads-close"><?php /* tag "i" from line 415 */; ?>
<i class="icon-chevron-down icon-white"></i></div>
			<?php /* tag "div" from line 416 */; ?>
<div id="PopupCarousel" class="carousel slide carousel-fade popup-slide reset-margin">
				<?php /* tag "ol" from line 417 */; ?>
<ol class="carousel-indicators">
					<?php /* tag "li" from line 418 */; ?>
<li data-target="#PopupCarousel" data-slide-to="0" class="active"></li>
				</ol>
				<?php /* tag "div" from line 420 */; ?>
<div class="carousel-inner">
					
					<?php /* tag "div" from line 422 */; ?>
<div class="active item">
						<?php 
/* tag "a" from line 423 */ ;
if (null !== ($_tmp_3 = ('#'))):  ;
$_tmp_3 = ' href="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<a<?php echo $_tmp_3 ?>
>
							<?php 
/* tag "img" from line 424 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->SponsorAll, 'current/getPicture')))):  ;
$_tmp_2 = ' src="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<img width="100%" class="img-rounded"<?php echo $_tmp_2 ?>
/>
						</a>
					</div>
					
					<?php 
/* tag "div" from line 428 */ ;
$_tmp_1 = $ctx->repeat ;
$_tmp_1->Sponsor = new PHPTAL_RepeatController($ctx->SponsorAll)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->Sponsor as $ctx->Sponsor): ;
?>
<div class="item">
						<?php 
/* tag "a" from line 429 */ ;
if (null !== ($_tmp_4 = ($ctx->path($ctx->Sponsor, 'getURLView')))):  ;
$_tmp_4 = ' href="'.phptal_escape($_tmp_4).'"' ;
else:  ;
$_tmp_4 = '' ;
endif ;
?>
<a<?php echo $_tmp_4 ?>
>
							<?php 
/* tag "img" from line 430 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Sponsor, 'getPicture')))):  ;
$_tmp_2 = ' src="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<img width="100%" class="img-rounded"<?php echo $_tmp_2 ?>
/>
						</a>
					</div><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>
					
				</div>
			</div>
		</div><?php endif; ?>

		<?php /* tag "div" from line 436 */; ?>
<div id="ads-open" class="ads-open-center"><?php /* tag "i" from line 436 */; ?>
<i class="icon-chevron-up icon-white"></i></div>
	</div><?php 
}

 ?>
<?php 
function tpl_52650db7_base__2figzJzrX7LcIBJZrxyOkQ_CourseBox(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
if ($ctx->path($ctx->Course, 'getLessionNext')):  ;
?>
<div class="box radius">
		<?php /* tag "div" from line 356 */; ?>
<div class="b-title">
			<?php /* tag "div" from line 357 */; ?>
<div class="b-t-icon-content">Sắp khai giảng</div>
		</div>
		<?php /* tag "div" from line 359 */; ?>
<div class="b-content">
			<?php /* tag "div" from line 360 */; ?>
<div align="center" style="padding-top:10px;">
				<?php 
/* tag "a" from line 361 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Course, 'getLessionNext/getURLRead')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
>
					<?php 
/* tag "img" from line 362 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Course, 'getLessionNext/getImage')))):  ;
$_tmp_2 = ' src="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<img width="300"<?php echo $_tmp_2 ?>
/>
				</a>
			</div>
			<?php /* tag "div" from line 365 */; ?>
<div align="center" style="padding:10px;">
				<?php 
/* tag "a" from line 366 */ ;
if (null !== ($_tmp_4 = ($ctx->path($ctx->Course, 'getLessionNext/getURLRead')))):  ;
$_tmp_4 = ' href="'.phptal_escape($_tmp_4).'"' ;
else:  ;
$_tmp_4 = '' ;
endif ;
?>
<a style="font-size:12px; color:#980707; line-height:30px;"<?php echo $_tmp_4 ?>
>
					<?php /* tag "h1" from line 367 */; ?>
<h1><?php echo phptal_escape($ctx->path($ctx->Course, 'getLessionNext/getName')); ?>
</h1>
				</a>
			</div>
			<?php /* tag "div" from line 370 */; ?>
<div style="margin-left:10px;">
				<?php /* tag "div" from line 371 */; ?>
<div id="CourseCountdown"></div>
			</div>
			<?php /* tag "script" from line 373 */; ?>
<script type="text/javascript">/*<![CDATA[*/$(function(){var d1 = $("#CourseBox").attr('alt');var parts = d1.match(/(\d+)/g);var d2 = new Date(parts[0], parts[1]-1, parts[2]);var austDay = new Date();austDay = new Date(austDay.getFullYear() + 1, 1 - 1, 26);$('#CourseCountdown').countdown({until: d2});});/*]]>*/</script>
		</div>
	</div><?php 
endif ;

}

?>
<?php 
function tpl_52650db7_base__2figzJzrX7LcIBJZrxyOkQ_EventBox(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div class="box radius">
		<?php /* tag "div" from line 325 */; ?>
<div class="b-title">
			<?php /* tag "div" from line 326 */; ?>
<div class="b-t-icon-content">Đào tạo</div>
		</div>
		<?php /* tag "div" from line 328 */; ?>
<div id="LessionCarousel" class="carousel slide carousel-fade lession-slide reset-margin">
			<?php /* tag "div" from line 329 */; ?>
<div class="carousel-inner">
				<?php /* tag "div" from line 330 */; ?>
<div class="active item">
					<?php 
/* tag "a" from line 331 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Course, 'getLessions/current/getURLRead')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
>
						<?php 
/* tag "img" from line 332 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Course, 'getLessions/current/getImage')))):  ;
$_tmp_2 = ' src="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<img<?php echo $_tmp_2 ?>
/>
						<?php /* tag "div" from line 333 */; ?>
<div class="carousel-caption">
							<?php /* tag "p" from line 334 */; ?>
<p><?php echo phptal_escape($ctx->path($ctx->Course, 'getLessions/current/getName')); ?>
</p>
						</div>
					</a>
				</div>
				<?php 
/* tag "div" from line 338 */ ;
$_tmp_3 = $ctx->repeat ;
$_tmp_3->Lession = new PHPTAL_RepeatController($ctx->path($ctx->Course, 'getLessions'))
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_3->Lession as $ctx->Lession): ;
?>
<div class="item">
					<?php 
/* tag "a" from line 339 */ ;
if (null !== ($_tmp_4 = ($ctx->path($ctx->Lession, 'getURLRead')))):  ;
$_tmp_4 = ' href="'.phptal_escape($_tmp_4).'"' ;
else:  ;
$_tmp_4 = '' ;
endif ;
?>
<a<?php echo $_tmp_4 ?>
>
						<?php 
/* tag "img" from line 340 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Lession, 'getImage')))):  ;
$_tmp_2 = ' src="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<img<?php echo $_tmp_2 ?>
/>
						<?php /* tag "div" from line 341 */; ?>
<div class="carousel-caption">
							<?php /* tag "p" from line 342 */; ?>
<p><?php echo phptal_escape($ctx->path($ctx->Lession, 'getName')); ?>
</p>
						</div>
					</a>
				</div><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

			</div>
			<?php /* tag "a" from line 347 */; ?>
<a class="carousel-control left" href="#LessionCarousel" data-slide="prev">&lsaquo;</a>
			<?php /* tag "a" from line 348 */; ?>
<a class="carousel-control right" href="#LessionCarousel" data-slide="next">&rsaquo;</a>
		</div>
	</div><?php 
}

 ?>
<?php 
function tpl_52650db7_base__2figzJzrX7LcIBJZrxyOkQ_CallendarBar(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div class="row reset-margin date-time">
		<?php /* tag "div" from line 311 */; ?>
<div id="date-time" class="span6 fix-width">
			<?php /* tag "script" from line 312 */; ?>
<script type="text/javascript">getLunarDateString(09,11,2012,16,39,13);</script>
		</div>
		<?php /* tag "div" from line 314 */; ?>
<div class="span6 fix-width">
			<?php /* tag "marquee" from line 315 */; ?>
<marquee behavior="scroll" direction="left" scrollamount="1">
				Kính chúc chư tôn đức tăng ni cùng quý phật tử thân tâm thường an lạc ! Nguyện đem công đức này hướng về khắp tất cả đệ tử và chúng sanh đều trọn thành Phật Đạo.
			</marquee>
		</div>
	</div><?php 
}

 ?>
<?php 
function tpl_52650db7_base__2figzJzrX7LcIBJZrxyOkQ_CallendarBox(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div class="box radius">
		<?php /* tag "div" from line 274 */; ?>
<div class="b-title">
			<?php /* tag "div" from line 275 */; ?>
<div class="b-t-icon-content">Lịch Dương <?php /* tag "small" from line 275 */; ?>
<small>Âm</small></div>
		</div>
		<?php /* tag "div" from line 277 */; ?>
<div class="b-content padding-content">
			<?php /* tag "table" from line 278 */; ?>
<table class="calendar-paper" width="100%" border="0" cellpadding="1" cellspacing="1">
				<?php /* tag "tbody" from line 279 */; ?>
<tbody>
					<?php /* tag "tr" from line 280 */; ?>
<tr><?php /* tag "td" from line 280 */; ?>
<td colspan="2" id="thangduong" class="thangduong"></td></tr>
					<?php /* tag "tr" from line 281 */; ?>
<tr><?php /* tag "td" from line 281 */; ?>
<td colspan="2" id="ngayduong" class="ngayduong"></td></tr>
					<?php /* tag "tr" from line 282 */; ?>
<tr><?php /* tag "td" from line 282 */; ?>
<td colspan="2" id="thuduong" class="thuduong"></td></tr>
					<?php /* tag "tr" from line 283 */; ?>
<tr>
						<?php /* tag "td" from line 284 */; ?>
<td> 
							<?php /* tag "div" from line 285 */; ?>
<div id="thangam" class="thangam"></div>
							<?php /* tag "div" from line 286 */; ?>
<div id="ngayam" class="ngayam"></div>
							<?php /* tag "div" from line 287 */; ?>
<div id="namam" class="namam"></div>
						</td>
						<?php /* tag "td" from line 289 */; ?>
<td class="canchi">
							<?php /* tag "div" from line 290 */; ?>
<div id="canchithang" class="gioam"></div>
							<?php /* tag "div" from line 291 */; ?>
<div id="canchingay" class="gioam"></div>
						</td>
					</tr>
					<?php /* tag "tr" from line 294 */; ?>
<tr><?php /* tag "td" from line 294 */; ?>
<td colspan="2" id="hoangdao" class="hoangdao"></td></tr>
				</tbody>
			</table>
			<?php /* tag "script" from line 297 */; ?>
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
function tpl_52650db7_base__2figzJzrX7LcIBJZrxyOkQ_ContactBox(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div class="box">
		<?php /* tag "div" from line 267 */; ?>
<div class="b-content"><?php /* tag "a" from line 267 */; ?>
<a href="/lien-he"><?php /* tag "img" from line 267 */; ?>
<img width="100%" src="/data/images/logo/contact.jpg"/></a></div>
	</div><?php 
}

 ?>
<?php 
function tpl_52650db7_base__2figzJzrX7LcIBJZrxyOkQ_SponsorBox(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div class="box radius">
		<?php /* tag "div" from line 253 */; ?>
<div class="b-title">
			<?php /* tag "div" from line 254 */; ?>
<div class="b-t-icon-content">Trợ Duyên</div>
		</div>
		<?php /* tag "div" from line 256 */; ?>
<div class="b-content">
			<?php /* tag "a" from line 257 */; ?>
<a href="/so-vang">
				<?php /* tag "img" from line 258 */; ?>
<img width="100%" src="/data/images/logo/sponsor.jpg"/>
			</a>
		</div>
	</div><?php 
}

 ?>
<?php 
function tpl_52650db7_base__2figzJzrX7LcIBJZrxyOkQ_FixedFunction(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div class="fixed-function">
		<?php /* tag "div" from line 239 */; ?>
<div class="fb-like fb_edge_widget_with_comment fb_iframe_widget" data-href="https://www.facebook.com/ChuaKhaiTuong" data-send="false" data-layout="box_count" data-width="450" data-show-faces="false" data-font="tahoma" fb-xfbml-state="rendered"></div>
		<?php /* tag "div" from line 240 */; ?>
<div class="bubble"><?php echo phptal_escape(\MVC\Library\Statistic::getCountPrint()); ?>
</div>
		<?php /* tag "p" from line 241 */; ?>
<p class="bubble-item">Truy cập</p>
		<?php /* tag "div" from line 242 */; ?>
<div class="bubble">
			<?php /* tag "img" from line 243 */; ?>
<img src="/data/images/logo/count_logo.gif"/>
			<?php /* tag "span" from line 244 */; ?>
<span><?php echo phptal_escape(\MVC\Library\Statistic::getOnlinePrint()); ?>
</span>
		</div>
		<?php /* tag "p" from line 246 */; ?>
<p class="bubble-item">Trực tuyến</p>
	</div><?php 
}

 ?>
<?php 
function tpl_52650db7_base__2figzJzrX7LcIBJZrxyOkQ_AskBox(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div class="box radius">
		<?php /* tag "div" from line 225 */; ?>
<div class="b-title">
			<?php /* tag "div" from line 226 */; ?>
<div class="b-t-icon-content">Hỏi &amp; Đáp PHẬT HỌC</div>
		</div>
		<?php /* tag "div" from line 228 */; ?>
<div class="b-content">
			<?php /* tag "a" from line 229 */; ?>
<a href="/hoi-dap/dat-cau-hoi">
				<?php /* tag "img" from line 230 */; ?>
<img width="100%" src="/data/images/logo/question.jpg"/>
			</a>
		</div>
	</div><?php 
}

 ?>
<?php 
function tpl_52650db7_base__2figzJzrX7LcIBJZrxyOkQ_TopMonkBox(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div class="box radius">
		<?php /* tag "div" from line 205 */; ?>
<div class="b-title">
			<?php /* tag "div" from line 206 */; ?>
<div class="b-t-icon-content">GIẢNG SƯ NỔI BẬT</div>
		</div>
		<?php /* tag "div" from line 208 */; ?>
<div class="b-content">
			<?php /* tag "ul" from line 209 */; ?>
<ul class="grid-item-3 thumbnails reset-margin">
				<?php 
/* tag "li" from line 210 */ ;
$_tmp_4 = $ctx->repeat ;
$_tmp_4->Monk = new PHPTAL_RepeatController($ctx->MonkAll)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_4->Monk as $ctx->Monk): ;
?>
<li class="span2">
					<?php 
/* tag "a" from line 211 */ ;
if (null !== ($_tmp_3 = ($ctx->path($ctx->Monk, 'getURLRead')))):  ;
$_tmp_3 = ' href="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<a<?php echo $_tmp_3 ?>
>
						<?php /* tag "div" from line 212 */; ?>
<div class="thumbnail">
							<?php 
/* tag "img" from line 213 */ ;
$ctx->noThrow(true) ;
if (!phptal_isempty($_tmp_1 = ($ctx->path($ctx->Monk, 'getURLPic', true)))):  ;
$_tmp_1 = ' src="'.phptal_escape($_tmp_1).'"' ;
elseif (null !== ($_tmp_1 = ('/data/images/exit_picture.jpg'))):  ;
$_tmp_1 = ' src="'.phptal_escape($_tmp_1).'"' ;
endif ;
$ctx->noThrow(false) ;
if (null !== ($_tmp_2 = ($ctx->Monk->getPreName() . ' ' . $ctx->Monk->getName() . ' ' . $ctx->Monk->getPagoda()))):  ;
$_tmp_2 = ' data-original-title="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<img class="monk-tooltip" data-toggle="tooltip" data-placement="bottom"<?php echo $_tmp_1 ?>
<?php echo $_tmp_2 ?>
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
function tpl_52650db7_base__2figzJzrX7LcIBJZrxyOkQ_TopVideoBox(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
$_tmp_2 = $ctx->repeat ;
$_tmp_2->Panel = new PHPTAL_RepeatController($ctx->PanelCategoryVideoAll)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_2->Panel as $ctx->Panel): ;
?>
<div class="box radius">
		<?php /* tag "div" from line 184 */; ?>
<div class="b-title">
			<?php /* tag "div" from line 185 */; ?>
<div class="b-t-icon-content"><?php echo phptal_escape($ctx->path($ctx->Panel, 'getName')); ?>
</div>
		</div>
		<?php /* tag "div" from line 187 */; ?>
<div class="b-content">
			<?php /* tag "ul" from line 188 */; ?>
<ul class="grid-item-2 thumbnails reset-margin">
				<?php 
/* tag "li" from line 189 */ ;
$_tmp_1 = $ctx->repeat ;
$_tmp_1->Category = new PHPTAL_RepeatController($ctx->path($ctx->Panel, 'getDetailAll'))
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->Category as $ctx->Category): ;
?>
<li class="span2">
					<?php 
/* tag "a" from line 190 */ ;
if (null !== ($_tmp_3 = ($ctx->path($ctx->Category, 'getCategoryVideo/getURLRead')))):  ;
$_tmp_3 = ' href="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<a<?php echo $_tmp_3 ?>
>
						<?php /* tag "div" from line 191 */; ?>
<div class="thumbnail">
							<?php 
/* tag "img" from line 192 */ ;
if (null !== ($_tmp_4 = ($ctx->path($ctx->Category, 'getCategoryVideo/getPicture')))):  ;
$_tmp_4 = ' src="'.phptal_escape($_tmp_4).'"' ;
else:  ;
$_tmp_4 = '' ;
endif ;
?>
<img<?php echo $_tmp_4 ?>
/>
							<?php /* tag "p" from line 193 */; ?>
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
function tpl_52650db7_base__2figzJzrX7LcIBJZrxyOkQ_TopNewsBox(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div class="box radius">
		<?php /* tag "div" from line 159 */; ?>
<div class="b-title">
			<?php /* tag "div" from line 160 */; ?>
<div class="b-t-icon-content">Tin tức nổi bật</div>
		</div>
		<?php /* tag "div" from line 162 */; ?>
<div class="b-content">			
			<?php /* tag "div" from line 163 */; ?>
<div id="BoxNewsCarousel" class="carousel slide sidebar-slide reset-margin">
				<?php /* tag "div" from line 164 */; ?>
<div class="carousel-inner">
					<?php /* tag "div" from line 165 */; ?>
<div class="active item">
						<?php 
/* tag "a" from line 166 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->PanelNewsAll, 'current/getNews/getURLRead')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
>
							<?php 
/* tag "img" from line 167 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->PanelNewsAll, 'current/getNews/getImage')))):  ;
$_tmp_2 = ' src="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<img<?php echo $_tmp_2 ?>
/>
							<?php /* tag "div" from line 168 */; ?>
<div class="carousel-caption">
								<?php /* tag "p" from line 169 */; ?>
<p><?php echo phptal_escape($ctx->path($ctx->PanelNewsAll, 'current/getNews/getTitle')); ?>
</p>
							</div>
						</a>
					</div>					
				</div>
				<?php /* tag "a" from line 174 */; ?>
<a class="carousel-control left" href="#BoxNewsCarousel" data-slide="prev">&lsaquo;</a>
				<?php /* tag "a" from line 175 */; ?>
<a class="carousel-control right" href="#BoxNewsCarousel" data-slide="next">&rsaquo;</a>
			</div>			
		</div>
	</div><?php 
}

 ?>
<?php 
function tpl_52650db7_base__2figzJzrX7LcIBJZrxyOkQ_PictureBox(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div class="box radius">
		<?php /* tag "div" from line 145 */; ?>
<div class="b-title">
			<?php /* tag "div" from line 146 */; ?>
<div class="b-t-icon-content">Ảnh Hoạt Động</div>
		</div>
		<?php /* tag "div" from line 148 */; ?>
<div class="b-content">
			<?php /* tag "a" from line 149 */; ?>
<a href="/thu-vien-anh">
				<?php /* tag "img" from line 150 */; ?>
<img width="100%" src="/data/images/logo/top_img.jpg"/>
			</a>
		</div>
	</div><?php 
}

 ?>
<?php 
function tpl_52650db7_base__2figzJzrX7LcIBJZrxyOkQ_BuddhaBox(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div class="box radius">
		<?php /* tag "div" from line 114 */; ?>
<div class="b-title">
			<?php /* tag "div" from line 115 */; ?>
<div class="b-t-icon-content">Phật Âm</div>
		</div>
		<?php /* tag "div" from line 117 */; ?>
<div class="b-content">
			<?php /* tag "div" from line 118 */; ?>
<div id="BuddhaCarousel" class="carousel slide carousel-fade sidebar-slide reset-margin">
				<?php /* tag "ol" from line 119 */; ?>
<ol class="carousel-indicators">
					<?php /* tag "li" from line 120 */; ?>
<li data-target="#BuddhaCarousel" data-slide-to="0" class="active"></li>
					<?php /* tag "li" from line 121 */; ?>
<li data-target="#BuddhaCarousel" data-slide-to="1"></li>
					<?php /* tag "li" from line 122 */; ?>
<li data-target="#BuddhaCarousel" data-slide-to="2"></li>
				</ol>
				<?php /* tag "div" from line 124 */; ?>
<div class="carousel-inner">
					<?php /* tag "div" from line 125 */; ?>
<div class="active item">
						<?php /* tag "a" from line 126 */; ?>
<a href="/phat-am/bac-tong"><?php /* tag "img" from line 126 */; ?>
<img src="/data/images/logo/bac_tong.jpg"/></a>
					</div>
					<?php /* tag "div" from line 128 */; ?>
<div class="item">
						<?php /* tag "a" from line 129 */; ?>
<a href="/phat-am/nam-tong"><?php /* tag "img" from line 129 */; ?>
<img src="/data/images/logo/nam_tong.jpg"/></a>
					</div>
					<?php /* tag "div" from line 131 */; ?>
<div class="item">
						<?php /* tag "a" from line 132 */; ?>
<a href="/phat-am/tong-hop"><?php /* tag "img" from line 132 */; ?>
<img src="/data/images/logo/tong_hop.jpg"/></a>
					</div>
				</div>
				<?php /* tag "a" from line 135 */; ?>
<a class="carousel-control left" href="#BuddhaCarousel" data-slide="prev">&lsaquo;</a>
				<?php /* tag "a" from line 136 */; ?>
<a class="carousel-control right" href="#BuddhaCarousel" data-slide="next">&rsaquo;</a>
			</div>
		</div>
	</div><?php 
}

 ?>
<?php 
function tpl_52650db7_base__2figzJzrX7LcIBJZrxyOkQ_TaskBox(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div class="box radius">
		<?php /* tag "div" from line 83 */; ?>
<div class="b-title"><?php /* tag "div" from line 83 */; ?>
<div class="b-t-icon-content">Các hoạt động</div></div>
		<?php /* tag "div" from line 84 */; ?>
<div class="b-content">
			<?php /* tag "div" from line 85 */; ?>
<div class="g4"><?php /* tag "div" from line 85 */; ?>
<div id="eventCalendarLocale"></div></div>
			<?php /* tag "script" from line 86 */; ?>
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
function tpl_52650db7_base__2figzJzrX7LcIBJZrxyOkQ_Header(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div class="row reset-margin">
		<?php /* tag "div" from line 42 */; ?>
<div class="header">
			<?php /* tag "a" from line 43 */; ?>
<a href="/trang-chu">
				<?php /* tag "img" from line 44 */; ?>
<img height="200" width="940" src="/data/images/flash/Web_Banner.gif"/>
			</a>
		</div>
		<?php /* tag "div" from line 47 */; ?>
<div class="top-menu">
			<?php /* tag "ul" from line 48 */; ?>
<ul class="nav nav-pills">
				<?php 
/* tag "li" from line 49 */ ;
if (null !== ($_tmp_1 = ($ctx->ActiveItem=='Home'?'active':'?'))):  ;
$_tmp_1 = ' class="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<li<?php echo $_tmp_1 ?>
><?php /* tag "a" from line 49 */; ?>
<a href="/trang-chu">Trang chủ</a></li>
				<?php 
/* tag "li" from line 50 */ ;
if (null !== ($_tmp_1 = ($ctx->ActiveItem=='Introduction'?'active':'?'))):  ;
$_tmp_1 = ' class="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<li<?php echo $_tmp_1 ?>
><?php /* tag "a" from line 50 */; ?>
<a href="/gioi-thieu">Giới thiệu</a></li>
				<?php 
/* tag "li" from line 51 */ ;
if (null !== ($_tmp_1 = ($ctx->ActiveItem=='ReadCategory'?'active dropdown':'dropdown'))):  ;
$_tmp_1 = ' class="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<li<?php echo $_tmp_1 ?>
>
					<?php /* tag "a" from line 52 */; ?>
<a class="dropdown-toggle" data-toggle="dropdown">Thông Báo<?php /* tag "b" from line 52 */; ?>
<b class="caret"></b></a>
					<?php /* tag "ul" from line 53 */; ?>
<ul class="dropdown-menu">
						<?php /* tag "li" from line 54 */; ?>
<li>
							<?php 
/* tag "a" from line 55 */ ;
if (null !== ($_tmp_2 = ('/thong-bao/coquan'))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
>Cơ Quan</a>							
						</li>
						<?php /* tag "li" from line 57 */; ?>
<li>
							<?php 
/* tag "a" from line 58 */ ;
if (null !== ($_tmp_2 = ('/thong-bao/phong'))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
>Phòng Ban</a>
						</li>
					</ul>
				</li>	
				
				<?php 
/* tag "li" from line 63 */ ;
if (null !== ($_tmp_2 = ($ctx->ActiveItem=='Course'?'active':'?'))):  ;
$_tmp_2 = ' class="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<li<?php echo $_tmp_2 ?>
><?php /* tag "a" from line 63 */; ?>
<a href="/chuyen-mon">Góc Chuyên môn</a></li>
				<?php 
/* tag "li" from line 64 */ ;
if (null !== ($_tmp_1 = ($ctx->ActiveItem=='Event'?'active':'?'))):  ;
$_tmp_1 = ' class="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<li<?php echo $_tmp_1 ?>
><?php /* tag "a" from line 64 */; ?>
<a href="/thao-luan">Góc Thảo Luận</a></li>
				<?php 
/* tag "li" from line 65 */ ;
if (null !== ($_tmp_2 = ($ctx->ActiveItem=='LibraryVideo'?'active dropdown':'dropdown'))):  ;
$_tmp_2 = ' class="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<li<?php echo $_tmp_2 ?>
>
					<?php /* tag "a" from line 66 */; ?>
<a class="dropdown-toggle" data-toggle="dropdown">Ứng Dụng<?php /* tag "b" from line 66 */; ?>
<b class="caret"></b></a>
						<?php /* tag "ul" from line 67 */; ?>
<ul class="dropdown-menu">
						<?php /* tag "li" from line 68 */; ?>
<li>
							<?php 
/* tag "a" from line 69 */ ;
if (null !== ($_tmp_1 = ('/ung-dung/qly-thulao'))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
>Quản lý Điểm CM</a>
						</li>						
					</ul>
				</li>
				<?php 
/* tag "li" from line 73 */ ;
if (null !== ($_tmp_1 = ($ctx->ActiveItem=='Ask'?'active dropdown':'dropdown'))):  ;
$_tmp_1 = ' class="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<li<?php echo $_tmp_1 ?>
><?php /* tag "a" from line 73 */; ?>
<a href="/muc-hoi-dap">Mục Hỏi đáp</a></li>	
				<?php 
/* tag "li" from line 74 */ ;
if (null !== ($_tmp_2 = ($ctx->ActiveItem=='LibraryAlbum'?'active':'?'))):  ;
$_tmp_2 = ' class="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<li<?php echo $_tmp_2 ?>
><?php /* tag "a" from line 74 */; ?>
<a href="/thu-vien-anh">Ảnh hoạt động</a></li>							
			</ul>
		</div>
	</div><?php 
}

 ?>
<?php 
function tpl_52650db7_base__2figzJzrX7LcIBJZrxyOkQ_IncludeJS(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<span>		
		<?php /* tag "script" from line 28 */; ?>
<script type="text/javascript" language="javascript" src="/mvc/templates/script/library/jquery-1.7.1.min.js"></script>
		<?php /* tag "script" from line 29 */; ?>
<script type="text/javascript" language="javascript" src="/mvc/templates/script/library/jquery.countdown.js"></script>
		<?php /* tag "script" from line 30 */; ?>
<script type="text/javascript" language="javascript" src="/mvc/templates/script/library/amlich-hnd.js"></script>
		<?php /* tag "script" from line 31 */; ?>
<script type="text/javascript" language="javascript" src="/mvc/templates/script/library/jquery.eventCalendar.js"></script>
		<?php /* tag "script" from line 32 */; ?>
<script type="text/javascript" language="javascript" src="/mvc/templates/script/library/jquery.timeago.js"></script>		
		<?php /* tag "script" from line 33 */; ?>
<script type="text/javascript" language="javascript" src="/mvc/templates/script/library/jquery.session.js"></script>
		<?php /* tag "script" from line 34 */; ?>
<script type="text/javascript" language="javascript" src="/mvc/templates/theme/bootstrap/js/bootstrap.js"></script>
		<?php /* tag "script" from line 35 */; ?>
<script type="text/javascript" language="javascript" src="/mvc/templates/script/user/base.js"></script>
	</span><?php 
}

 ?>
<?php 
function tpl_52650db7_base__2figzJzrX7LcIBJZrxyOkQ_IncludeCSS(PHPTAL $_thistpl, PHPTAL $tpl) {
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
function tpl_52650db7_base__2figzJzrX7LcIBJZrxyOkQ_IncludeMETA(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<span>
		<?php /* tag "title" from line 7 */; ?>
<title><?php echo 'Website Phòng Kỹ Thuật Thể Hiện - Đài Phát Thanh Truyền Hình Vĩnh Long'; ?>
</title>
		<?php /* tag "base" from line 8 */; ?>
<base href="http://kythuatthehien.com/"/>
		<?php /* tag "meta" from line 9 */; ?>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>		
		<?php /* tag "link" from line 10 */; ?>
<link rel="shortcut icon" href="/data/images/logo/favicon.ico" type="image/x-icon"/>
	</span><?php 
}

 ?>
<?php 
function tpl_52650db7_base__2figzJzrX7LcIBJZrxyOkQ(PHPTAL $tpl, PHPTAL_Context $ctx) {
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
	<?php /* tag "div" from line 41 */; ?>

	
	<!-- ======================================================================== -->
	<!-- LỊCH CÔNG TÁC															  -->
	<!-- ======================================================================== -->
	<?php /* tag "div" from line 82 */; ?>

	
	<!-- ======================================================================== -->
	<!-- PHẬT ÂM 																  -->
	<!-- ======================================================================== -->
	<?php /* tag "div" from line 113 */; ?>

	
	<!-- ======================================================================== -->
	<!-- ẢNH HOẠT ĐỘNG															  -->
	<!-- ======================================================================== -->
	<?php /* tag "div" from line 144 */; ?>

	
	<!-- ======================================================================== -->
	<!-- TIN TỨC MỚI CẬP NHẬT													  -->
	<!-- ======================================================================== -->
	<?php /* tag "div" from line 158 */; ?>

	
	<!-- ======================================================================== -->
	<!-- VIDEO MỚI CẬP NHẬT														  -->
	<!-- ======================================================================== -->
	<?php /* tag "div" from line 183 */; ?>

	
	<!-- ======================================================================== -->
	<!-- GIẢNG SƯ NỔI BẬT														  -->
	<!-- ======================================================================== -->
	<?php /* tag "div" from line 204 */; ?>

	
	<!-- ======================================================================== -->
	<!-- HỎI - ĐÁP PHẬT HỌC														  -->
	<!-- ======================================================================== -->
	<?php /* tag "div" from line 224 */; ?>

	
	<!-- ======================================================================== -->
	<!-- FIXED FUNCTION															  -->
	<!-- ======================================================================== -->
	<?php /* tag "div" from line 238 */; ?>

	
	<!-- ======================================================================== -->
	<!-- TRỢ DUYÊN - ỦNG HỘ														  -->
	<!-- ======================================================================== -->
	<?php /* tag "div" from line 252 */; ?>

	
	<!-- ======================================================================== -->
	<!-- LIÊN HỆ																  -->
	<!-- ======================================================================== -->
	<?php /* tag "div" from line 266 */; ?>

	
	<!-- ======================================================================== -->
	<!-- LỊCH																	  -->
	<!-- ======================================================================== -->
	<?php /* tag "div" from line 273 */; ?>

	
	<!-- ======================================================================== -->
	<!-- THANH TIÊU ĐỀ LỊCH DƯƠNG - ÂM											  -->
	<!-- ======================================================================== -->
	<?php /* tag "div" from line 310 */; ?>

	
	<!-- ======================================================================== -->
	<!-- SỰ KIỆN																  -->
	<!-- ======================================================================== -->
	<?php /* tag "div" from line 324 */; ?>

	
	<!-- ======================================================================== -->
	<!-- KHÓA HỌC SẮP KHAI GIẢNG												  -->
	<!-- ======================================================================== -->
	<?php /* tag "div" from line 355 */; ?>

	
	<!-- ======================================================================== -->
	<!-- POPUP QUẢNG CÁO														  -->
	<!-- ======================================================================== -->
	<?php /* tag "div" from line 380 */; ?>

	
	<!-- ======================================================================== -->
	<!-- FOOTER																	  -->
	<!-- ======================================================================== -->
	<?php /* tag "div" from line 442 */; ?>

	
	<!-- ======================================================================== -->
	<!-- BACK ON TOP															  -->
	<!-- ======================================================================== -->
	<?php /* tag "div" from line 476 */; ?>

	
</body>
</html><?php 
/* end */ ;

}

?>
<?php /* 
*** DO NOT EDIT THIS FILE ***

Generated by PHPTAL from D:\AppWebServer\MyCodePHP\kythuatthehien.com\mvc\templates\base.xhtml (edit that file instead) */; ?>