<?php 
function tpl_5264de9f_base___jiee0yc_BpSa6r2ubkZOQ_Backontop(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div class="crunchify-top" data-toggle="tooltip" data-placement="left" data-original-title="Chuyển đến đầu trang"></div><?php 
}

 ?><?php 
function tpl_5264de9f_base___jiee0yc_BpSa6r2ubkZOQ_Footer(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div class="row reset-margin footer">
		<div class="top-menu">
			<ul class="nav nav-pills">
				<li><a href="/trang-chu">Trang chủ</a></li>								
				<li><a href="/tin-tuc">Tin tức</a></li>
				<li><a href="/dao-tao">Đào tạo</a></li>
				<li><a href="/su-kien">Sự kiện</a></li>				
				<li><a href="/phat-am">PHẬT ÂM</a></li>
				<li><a href="/hoi-dap/dat-cau-hoi">Hỏi đáp</a></li>
				<li><a href="/thu-vien-anh">Ảnh hoạt động</a></li>
				<li><a href="/chua-ban">Danh bạ</a></li>
				<li><a href="/lien-he">Liên hệ</a></li>
				<li id="last"><a href="/signin/load">Quản trị</a></li>
			</ul>
		</div>
		<div class="row reset-margin">
			<div class="span6 reset-margin">
				<div class="f-left">
					<p><b>Địa chỉ:</b> 319B2 - Mỹ Phú - Mỹ Đức Đông - Cái Bè - Tiền Giang - Việt Nam</p>
					<p><b>Điện thoại:</b> (073) 3600 943 - <b>Di Động:</b> 0918 852 102</p>
					<p><b>Email:</b> nhuantamkhaituong@gmail.com (nhuantam@chuakhaituong.com)</p>
					<p><b>Website:</b> <i><u>chuakhaituong.com</u></i>, <i><u>quocankhaituongtu.com</u></i>, <i><u>chuaquocankhaituong.vn</u></i></p>
				</div>
			</div>
			<div class="span6 pull-right reset-margin">
				<div class="f-right">
					<p><b>© 12/2012 Chùa Khải Tường</b></p>
					<p>Biên tập - Đại Đức Thích Nhuận Tâm</p>
					<p>Phát triển - SPN Co, Ltd &amp; Nguyên Phong Studio</p>
					<p>Ghi rõ nguồn <b><i>chuakhaituong.com</i></b> khi phát hành thông tin từ website này</p>
				</div>
			</div>
		</div>
	</div><?php 
}

 ?><?php 
function tpl_5264de9f_base___jiee0yc_BpSa6r2ubkZOQ_Popup(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div>
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
		<?php if ($ctx->path($ctx->Popup, 'getEnable')): ; ?>
<div class="ads-popup ads-popup-center">
			<div class="ads-close"><i class="icon-chevron-down icon-white"></i></div>
			<div id="PopupCarousel" class="carousel slide carousel-fade popup-slide reset-margin">
				<ol class="carousel-indicators">
					<li data-target="#PopupCarousel" data-slide-to="0" class="active"></li>
				</ol>
				<div class="carousel-inner">
					
					<div class="active item">
						<?php 
if (NULL !== ($_tmp_1 = ('#'))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>>
							<?php 
if (NULL !== ($_tmp_2 = ($ctx->path($ctx->SponsorAll, 'current/getPicture')))):  ;
$_tmp_2 = ' src="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<img width="100%" class="img-rounded"<?php echo $_tmp_2 ?>/>
						</a>
					</div>
					
					<?php 
$_tmp_3 = $ctx->repeat ;
$_tmp_3->Sponsor = new PHPTAL_RepeatController($ctx->SponsorAll)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_3->Sponsor as $ctx->Sponsor): ;
?>
<div class="item">
						<?php 
if (NULL !== ($_tmp_4 = ($ctx->path($ctx->Sponsor, 'getURLView')))):  ;
$_tmp_4 = ' href="'.phptal_escape($_tmp_4).'"' ;
else:  ;
$_tmp_4 = '' ;
endif ;
?>
<a<?php echo $_tmp_4 ?>>
							<?php 
if (NULL !== ($_tmp_2 = ($ctx->path($ctx->Sponsor, 'getPicture')))):  ;
$_tmp_2 = ' src="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<img width="100%" class="img-rounded"<?php echo $_tmp_2 ?>/>
						</a>
					</div><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>
					
				</div>
			</div>
		</div><?php endif; ?>

		<div id="ads-open" class="ads-open-center"><i class="icon-chevron-up icon-white"></i></div>
	</div><?php 
}

 ?><?php 
function tpl_5264de9f_base___jiee0yc_BpSa6r2ubkZOQ_CourseBox(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
if ($ctx->path($ctx->Course, 'getLessionNext')):  ;
?>
<div class="box radius">
		<div class="b-title">
			<div class="b-t-icon-content">Sắp khai giảng</div>
		</div>
		<div class="b-content">
			<div align="center" style="padding-top:10px;">
				<?php 
if (NULL !== ($_tmp_3 = ($ctx->path($ctx->Course, 'getLessionNext/getURLRead')))):  ;
$_tmp_3 = ' href="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<a<?php echo $_tmp_3 ?>>
					<?php 
if (NULL !== ($_tmp_2 = ($ctx->path($ctx->Course, 'getLessionNext/getImage')))):  ;
$_tmp_2 = ' src="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<img width="300"<?php echo $_tmp_2 ?>/>
				</a>
			</div>
			<div align="center" style="padding:10px;">
				<?php 
if (NULL !== ($_tmp_4 = ($ctx->path($ctx->Course, 'getLessionNext/getURLRead')))):  ;
$_tmp_4 = ' href="'.phptal_escape($_tmp_4).'"' ;
else:  ;
$_tmp_4 = '' ;
endif ;
?>
<a style="font-size:12px; color:#980707; line-height:30px;"<?php echo $_tmp_4 ?>>
					<h1><?php echo phptal_escape($ctx->path($ctx->Course, 'getLessionNext/getName')); ?>
</h1>
				</a>
			</div>
			<div style="margin-left:10px;">
				<div id="CourseCountdown"></div>
			</div>
			<script type="text/javascript">/*<![CDATA[*/$(function(){var d1 = $("#CourseBox").attr('alt');var parts = d1.match(/(\d+)/g);var d2 = new Date(parts[0], parts[1]-1, parts[2]);var austDay = new Date();austDay = new Date(austDay.getFullYear() + 1, 1 - 1, 26);$('#CourseCountdown').countdown({until: d2});});/*]]>*/</script>
		</div>
	</div><?php 
endif ;

}

?><?php 
function tpl_5264de9f_base___jiee0yc_BpSa6r2ubkZOQ_EventBox(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div class="box radius">
		<div class="b-title">
			<div class="b-t-icon-content">Đào tạo</div>
		</div>
		<div id="LessionCarousel" class="carousel slide carousel-fade lession-slide reset-margin">
			<div class="carousel-inner">
				<div class="active item">
					<?php 
if (NULL !== ($_tmp_3 = ($ctx->path($ctx->Course, 'getLessions/current/getURLRead')))):  ;
$_tmp_3 = ' href="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<a<?php echo $_tmp_3 ?>>
						<?php 
if (NULL !== ($_tmp_2 = ($ctx->path($ctx->Course, 'getLessions/current/getImage')))):  ;
$_tmp_2 = ' src="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<img<?php echo $_tmp_2 ?>/>
						<div class="carousel-caption">
							<p><?php echo phptal_escape($ctx->path($ctx->Course, 'getLessions/current/getName')); ?>
</p>
						</div>
					</a>
				</div>
				<?php 
$_tmp_1 = $ctx->repeat ;
$_tmp_1->Lession = new PHPTAL_RepeatController($ctx->path($ctx->Course, 'getLessions'))
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->Lession as $ctx->Lession): ;
?>
<div class="item">
					<?php 
if (NULL !== ($_tmp_4 = ($ctx->path($ctx->Lession, 'getURLRead')))):  ;
$_tmp_4 = ' href="'.phptal_escape($_tmp_4).'"' ;
else:  ;
$_tmp_4 = '' ;
endif ;
?>
<a<?php echo $_tmp_4 ?>>
						<?php 
if (NULL !== ($_tmp_2 = ($ctx->path($ctx->Lession, 'getImage')))):  ;
$_tmp_2 = ' src="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<img<?php echo $_tmp_2 ?>/>
						<div class="carousel-caption">
							<p><?php echo phptal_escape($ctx->path($ctx->Lession, 'getName')); ?>
</p>
						</div>
					</a>
				</div><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

			</div>
			<a class="carousel-control left" href="#LessionCarousel" data-slide="prev">&lsaquo;</a>
			<a class="carousel-control right" href="#LessionCarousel" data-slide="next">&rsaquo;</a>
		</div>
	</div><?php 
}

 ?><?php 
function tpl_5264de9f_base___jiee0yc_BpSa6r2ubkZOQ_CallendarBar(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div class="row reset-margin date-time">
		<div id="date-time" class="span6 fix-width">
			<script type="text/javascript">getLunarDateString(09,11,2012,16,39,13);</script>
		</div>
		<div class="span6 fix-width">
			<marquee behavior="scroll" direction="left" scrollamount="1">
				Kính chúc chư tôn đức tăng ni cùng quý phật tử thân tâm thường an lạc ! Nguyện đem công đức này hướng về khắp tất cả đệ tử và chúng sanh đều trọn thành Phật Đạo.
			</marquee>
		</div>
	</div><?php 
}

 ?><?php 
function tpl_5264de9f_base___jiee0yc_BpSa6r2ubkZOQ_CallendarBox(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div class="box radius">
		<div class="b-title">
			<div class="b-t-icon-content">Lịch Dương <small>Âm</small></div>
		</div>
		<div class="b-content padding-content">
			<table class="calendar-paper" width="100%" border="0" cellpadding="1" cellspacing="1">
				<tbody>
					<tr><td colspan="2" id="thangduong" class="thangduong"></td></tr>
					<tr><td colspan="2" id="ngayduong" class="ngayduong"></td></tr>
					<tr><td colspan="2" id="thuduong" class="thuduong"></td></tr>
					<tr>
						<td> 
							<div id="thangam" class="thangam"></div>
							<div id="ngayam" class="ngayam"></div>
							<div id="namam" class="namam"></div>
						</td>
						<td class="canchi">
							<div id="canchithang" class="gioam"></div>
							<div id="canchingay" class="gioam"></div>
						</td>
					</tr>
					<tr><td colspan="2" id="hoangdao" class="hoangdao"></td></tr>
				</tbody>
			</table>
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

 ?><?php 
function tpl_5264de9f_base___jiee0yc_BpSa6r2ubkZOQ_ContactBox(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div class="box">
		<div class="b-content"><a href="/lien-he"><img width="100%" src="/data/images/logo/contact.jpg"/></a></div>
	</div><?php 
}

 ?><?php 
function tpl_5264de9f_base___jiee0yc_BpSa6r2ubkZOQ_SponsorBox(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div class="box radius">
		<div class="b-title">
			<div class="b-t-icon-content">Trợ Duyên</div>
		</div>
		<div class="b-content">
			<a href="/so-vang">
				<img width="100%" src="/data/images/logo/sponsor.jpg"/>
			</a>
		</div>
	</div><?php 
}

 ?><?php 
function tpl_5264de9f_base___jiee0yc_BpSa6r2ubkZOQ_FixedFunction(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div class="fixed-function">
		<div class="fb-like fb_edge_widget_with_comment fb_iframe_widget" data-href="https://www.facebook.com/ChuaKhaiTuong" data-send="false" data-layout="box_count" data-width="450" data-show-faces="false" data-font="tahoma" fb-xfbml-state="rendered"></div>
		<div class="bubble"><?php echo phptal_escape(\$ctx->MVC\$ctx->Library\Statistic::getCountPrint()); ?>
</div>
		<p class="bubble-item">Truy cập</p>
		<div class="bubble">
			<img src="/data/images/logo/count_logo.gif"/>
			<span><?php echo phptal_escape(\$ctx->MVC\$ctx->Library\Statistic::getOnlinePrint()); ?>
</span>
		</div>
		<p class="bubble-item">Trực tuyến</p>
	</div><?php 
}

 ?><?php 
function tpl_5264de9f_base___jiee0yc_BpSa6r2ubkZOQ_AskBox(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div class="box radius">
		<div class="b-title">
			<div class="b-t-icon-content">Hỏi &amp; Đáp PHẬT HỌC</div>
		</div>
		<div class="b-content">
			<a href="/hoi-dap/dat-cau-hoi">
				<img width="100%" src="/data/images/logo/question.jpg"/>
			</a>
		</div>
	</div><?php 
}

 ?><?php 
function tpl_5264de9f_base___jiee0yc_BpSa6r2ubkZOQ_TopMonkBox(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div class="box radius">
		<div class="b-title">
			<div class="b-t-icon-content">GIẢNG SƯ NỔI BẬT</div>
		</div>
		<div class="b-content">
			<ul class="grid-item-3 thumbnails reset-margin">
				<?php 
$_tmp_4 = $ctx->repeat ;
$_tmp_4->Monk = new PHPTAL_RepeatController($ctx->MonkAll)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_4->Monk as $ctx->Monk): ;
?>
<li class="span2">
					<?php 
if (NULL !== ($_tmp_1 = ($ctx->path($ctx->Monk, 'getURLRead')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>>
						<div class="thumbnail">
							<?php 
$ctx->noThrow(true) ;
if (!phptal_isempty($_tmp_3 = ($ctx->path($ctx->Monk, 'getURLPic', true)))):  ;
$_tmp_3 = ' src="'.phptal_escape($_tmp_3).'"' ;
elseif (NULL !== ($_tmp_3 = ('/data/images/exit_picture.jpg'))):  ;
$_tmp_3 = ' src="'.phptal_escape($_tmp_3).'"' ;
endif ;
$ctx->noThrow(false) ;
if (NULL !== ($_tmp_2 = ($ctx->Monk->getPreName() . ' ' . $ctx->Monk->getName() . ' ' . $ctx->Monk->getPagoda()))):  ;
$_tmp_2 = ' data-original-title="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<img class="monk-tooltip" data-toggle="tooltip" data-placement="bottom"<?php echo $_tmp_3 ?><?php echo $_tmp_2 ?>/>
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

 ?><?php 
function tpl_5264de9f_base___jiee0yc_BpSa6r2ubkZOQ_TopVideoBox(PHPTAL $_thistpl, PHPTAL $tpl) {
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
		<div class="b-title">
			<div class="b-t-icon-content"><?php echo phptal_escape($ctx->path($ctx->Panel, 'getName')); ?>
</div>
		</div>
		<div class="b-content">
			<ul class="grid-item-2 thumbnails reset-margin">
				<?php 
$_tmp_3 = $ctx->repeat ;
$_tmp_3->Category = new PHPTAL_RepeatController($ctx->path($ctx->Panel, 'getDetailAll'))
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_3->Category as $ctx->Category): ;
?>
<li class="span2">
					<?php 
if (NULL !== ($_tmp_1 = ($ctx->path($ctx->Category, 'getCategoryVideo/getURLRead')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>>
						<div class="thumbnail">
							<?php 
if (NULL !== ($_tmp_4 = ($ctx->path($ctx->Category, 'getCategoryVideo/getPicture')))):  ;
$_tmp_4 = ' src="'.phptal_escape($_tmp_4).'"' ;
else:  ;
$_tmp_4 = '' ;
endif ;
?>
<img<?php echo $_tmp_4 ?>/>
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

?><?php 
function tpl_5264de9f_base___jiee0yc_BpSa6r2ubkZOQ_TopNewsBox(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div class="box radius">
		<div class="b-title">
			<div class="b-t-icon-content">Tin tức nổi bật</div>
		</div>
		<div class="b-content">			
			<div id="BoxNewsCarousel" class="carousel slide sidebar-slide reset-margin">
				<div class="carousel-inner">
					<div class="active item">
						<?php 
if (NULL !== ($_tmp_1 = ($ctx->path($ctx->PanelNewsAll, 'current/getNews/getURLRead')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>>
							<?php 
if (NULL !== ($_tmp_3 = ($ctx->path($ctx->PanelNewsAll, 'current/getNews/getImage')))):  ;
$_tmp_3 = ' src="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<img<?php echo $_tmp_3 ?>/>
							<div class="carousel-caption">
								<p><?php echo phptal_escape($ctx->path($ctx->PanelNewsAll, 'current/getNews/getTitle')); ?>
</p>
							</div>
						</a>
					</div>					
				</div>
				<a class="carousel-control left" href="#BoxNewsCarousel" data-slide="prev">&lsaquo;</a>
				<a class="carousel-control right" href="#BoxNewsCarousel" data-slide="next">&rsaquo;</a>
			</div>			
		</div>
	</div><?php 
}

 ?><?php 
function tpl_5264de9f_base___jiee0yc_BpSa6r2ubkZOQ_PictureBox(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div class="box radius">
		<div class="b-title">
			<div class="b-t-icon-content">Ảnh Hoạt Động</div>
		</div>
		<div class="b-content">
			<a href="/thu-vien-anh">
				<img width="100%" src="/data/images/logo/top_img.jpg"/>
			</a>
		</div>
	</div><?php 
}

 ?><?php 
function tpl_5264de9f_base___jiee0yc_BpSa6r2ubkZOQ_BuddhaBox(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div class="box radius">
		<div class="b-title">
			<div class="b-t-icon-content">Phật Âm</div>
		</div>
		<div class="b-content">
			<div id="BuddhaCarousel" class="carousel slide carousel-fade sidebar-slide reset-margin">
				<ol class="carousel-indicators">
					<li data-target="#BuddhaCarousel" data-slide-to="0" class="active"></li>
					<li data-target="#BuddhaCarousel" data-slide-to="1"></li>
					<li data-target="#BuddhaCarousel" data-slide-to="2"></li>
				</ol>
				<div class="carousel-inner">
					<div class="active item">
						<a href="/phat-am/bac-tong"><img src="/data/images/logo/bac_tong.jpg"/></a>
					</div>
					<div class="item">
						<a href="/phat-am/nam-tong"><img src="/data/images/logo/nam_tong.jpg"/></a>
					</div>
					<div class="item">
						<a href="/phat-am/tong-hop"><img src="/data/images/logo/tong_hop.jpg"/></a>
					</div>
				</div>
				<a class="carousel-control left" href="#BuddhaCarousel" data-slide="prev">&lsaquo;</a>
				<a class="carousel-control right" href="#BuddhaCarousel" data-slide="next">&rsaquo;</a>
			</div>
		</div>
	</div><?php 
}

 ?><?php 
function tpl_5264de9f_base___jiee0yc_BpSa6r2ubkZOQ_TaskBox(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div class="box radius">
		<div class="b-title"><div class="b-t-icon-content">Các hoạt động</div></div>
		<div class="b-content">
			<div class="g4"><div id="eventCalendarLocale"></div></div>
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

 ?><?php 
function tpl_5264de9f_base___jiee0yc_BpSa6r2ubkZOQ_Header(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div class="row reset-margin">
		<div class="header">
			<a href="/gate">
				<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" title="Chùa Khải Tường" height="282" width="940">
					<param name="movie" value="/data/images/flash/banner.swf"/>
					<param name="quality" value="high"/>
					<embed src="/data/images/flash/banner.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" height="282" width="940"></embed>
				</object>
			</a>
		</div>
		<div class="top-menu">
			<ul class="nav nav-pills">
				<?php 
if (NULL !== ($_tmp_1 = ($ctx->ActiveItem=='Home'?'active':'?'))):  ;
$_tmp_1 = ' class="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<li<?php echo $_tmp_1 ?>><a href="/trang-chu">Trang chủ</a></li>
				<?php 
if (NULL !== ($_tmp_1 = ($ctx->ActiveItem=='Introduction'?'active':'?'))):  ;
$_tmp_1 = ' class="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<li<?php echo $_tmp_1 ?>><a href="/gioi-thieu">Giới thiệu</a></li>
				<?php 
if (NULL !== ($_tmp_1 = ($ctx->ActiveItem=='ReadCategory'?'active dropdown':'dropdown'))):  ;
$_tmp_1 = ' class="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<li<?php echo $_tmp_1 ?>>
					<a class="dropdown-toggle" data-toggle="dropdown">Tin tức <b class="caret"></b></a>
					<ul class="dropdown-menu">
						<?php 
$_tmp_2 = $ctx->repeat ;
$_tmp_2->Category = new PHPTAL_RepeatController($ctx->CategoryNewsAll)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_2->Category as $ctx->Category): ;
?>
<li>
							<?php 
if (NULL !== ($_tmp_3 = ($ctx->path($ctx->Category, 'getURLRead')))):  ;
$_tmp_3 = ' href="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<a<?php echo $_tmp_3 ?>><?php echo phptal_escape($ctx->path($ctx->Category, 'getName')); ?>
</a>
						</li><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

					</ul>
				</li>
				<?php 
if (NULL !== ($_tmp_3 = ($ctx->ActiveItem=='Course'?'active':'?'))):  ;
$_tmp_3 = ' class="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<li<?php echo $_tmp_3 ?>><a href="/dao-tao">Đào tạo</a></li>
				<?php 
if (NULL !== ($_tmp_2 = ($ctx->ActiveItem=='Event'?'active':'?'))):  ;
$_tmp_2 = ' class="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<li<?php echo $_tmp_2 ?>><a href="/su-kien">Sự kiện</a></li>
				<?php 
if (NULL !== ($_tmp_1 = ($ctx->ActiveItem=='LibraryVideo'?'active dropdown':'dropdown'))):  ;
$_tmp_1 = ' class="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<li<?php echo $_tmp_1 ?>>
					<a class="dropdown-toggle" data-toggle="dropdown">PHẬT ÂM <b class="caret"></b></a>
					<ul class="dropdown-menu">
						<?php 
$_tmp_3 = $ctx->repeat ;
$_tmp_3->Category = new PHPTAL_RepeatController($ctx->CategoryBTypeAll)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_3->Category as $ctx->Category): ;
?>
<li>
							<?php 
if (NULL !== ($_tmp_2 = ($ctx->path($ctx->Category, 'getURLView')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>><?php echo phptal_escape($ctx->Category->getName() . '(' . $ctx->Category->getVideoAllCountPrint() . ')'); ?>
</a>
						</li><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

					</ul>
				</li>
				<?php 
if (NULL !== ($_tmp_2 = ($ctx->ActiveItem=='Ask'?'active dropdown':'dropdown'))):  ;
$_tmp_2 = ' class="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<li<?php echo $_tmp_2 ?>>
					<a class="dropdown-toggle" data-toggle="dropdown">Hỏi đáp <b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li>
							<?php 
if (NULL !== ($_tmp_3 = ('/hoi-dap/dat-cau-hoi'))):  ;
$_tmp_3 = ' href="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<a<?php echo $_tmp_3 ?>>Đặt câu hỏi</a>
						</li>
						<?php 
$_tmp_1 = $ctx->repeat ;
$_tmp_1->Category = new PHPTAL_RepeatController($ctx->CategoryAskAll)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->Category as $ctx->Category): ;
?>
<li>
							<?php 
if (NULL !== ($_tmp_3 = ($ctx->path($ctx->Category, 'getURLRead')))):  ;
$_tmp_3 = ' href="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<a<?php echo $_tmp_3 ?>><?php echo phptal_escape($ctx->path($ctx->Category, 'getName')); ?>
</a>
						</li><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

					</ul>
				</li>	
				<?php 
if (NULL !== ($_tmp_3 = ($ctx->ActiveItem=='LibraryAlbum'?'active':'?'))):  ;
$_tmp_3 = ' class="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<li<?php echo $_tmp_3 ?>><a href="/thu-vien-anh">Ảnh hoạt động</a></li>
				<?php 
if (NULL !== ($_tmp_1 = ($ctx->ActiveItem=='Pagoda'?'active dropdown':'dropdown'))):  ;
$_tmp_1 = ' class="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<li<?php echo $_tmp_1 ?>>
					<a class="dropdown-toggle" data-toggle="dropdown">Danh bạ Chùa <b class="caret"></b></a>
					<ul class="dropdown-menu">
						<?php 
$_tmp_2 = $ctx->repeat ;
$_tmp_2->Pagoda = new PHPTAL_RepeatController($ctx->PagodaAll)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_2->Pagoda as $ctx->Pagoda): ;
?>
<li>
							<?php 
if (NULL !== ($_tmp_3 = ($ctx->path($ctx->Pagoda, 'getURLRead')))):  ;
$_tmp_3 = ' href="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<a<?php echo $_tmp_3 ?>><?php echo phptal_escape($ctx->path($ctx->Pagoda, 'getName')); ?>
</a>
						</li><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

					</ul>
				</li>
				<?php 
if (NULL !== ($_tmp_3 = ($ctx->ActiveItem=='Sponsor'?'active dropdown':'dropdown'))):  ;
$_tmp_3 = ' class="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<li<?php echo $_tmp_3 ?>>
					
					<a class="dropdown-toggle" data-toggle="dropdown">Từ thiện <b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a href="/so-vang">Sổ vàng</a></li>
						<!--
						<li tal:repeat="Sponsor SponsorAll">
							<a tal:attributes="href Sponsor/getURLView" tal:content="Sponsor/getName"></a>
						</li>
						!-->
					</ul>
				</li>
				<?php 
if (NULL !== ($_tmp_2 = ($ctx->ActiveItem=='Contact'?'active':'?'))):  ;
$_tmp_2 = ' class="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<li<?php echo $_tmp_2 ?>><a href="/lien-he">Liên hệ</a></li>				
			</ul>
		</div>
	</div><?php 
}

 ?><?php 
function tpl_5264de9f_base___jiee0yc_BpSa6r2ubkZOQ_IncludeJS(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<span>
		<!--
		<script type="text/javascript" language="javascript" src="/mvc/templates/script/library/jquery-1.7.1.min.js"/>
		!-->
		<script type="text/javascript" language="javascript" src="/mvc/templates/script/library/jquery-1.7.1.min.js"></script>
		<script type="text/javascript" language="javascript" src="/mvc/templates/script/library/jquery.countdown.js"></script>
		<script type="text/javascript" language="javascript" src="/mvc/templates/script/library/amlich-hnd.js"></script>
		<script type="text/javascript" language="javascript" src="/mvc/templates/script/library/jquery.eventCalendar.js"></script>
		<script type="text/javascript" language="javascript" src="/mvc/templates/script/library/jquery.timeago.js"></script>		
		<script type="text/javascript" language="javascript" src="/mvc/templates/script/library/jquery.session.js"></script>
		<script type="text/javascript" language="javascript" src="/mvc/templates/theme/bootstrap/js/bootstrap.js"></script>
		<script type="text/javascript" language="javascript" src="/mvc/templates/script/user/base.js"></script>
	</span><?php 
}

 ?><?php 
function tpl_5264de9f_base___jiee0yc_BpSa6r2ubkZOQ_IncludeCSS(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<span>
		<link rel="stylesheet" type="text/css" href="/mvc/templates/theme/base/jquery.countdown.css"/> 
		<link rel="stylesheet" type="text/css" href="/mvc/templates/theme/base/eventCalendar.css"/>
		<link rel="stylesheet" type="text/css" href="/mvc/templates/theme/base/eventCalendar_theme.css"/>	
		<link rel="stylesheet" type="text/css" href="/mvc/templates/theme/bootstrap/css/bootstrap.css" media="screen"/>
		<link rel="stylesheet" type="text/css" href="/mvc/templates/theme/bootstrap/css/base.css"/>
	</span><?php 
}

 ?><?php 
function tpl_5264de9f_base___jiee0yc_BpSa6r2ubkZOQ_IncludeMETA(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<span>
		<title><?php echo 'Website Phòng Kỹ Thuật Thể Hiện - Đài Phát Thanh Truyền Hình Vĩnh Long'; ?>
</title>
		<base href="http://kythuatthehien.com"/>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	
		<meta name="keywords" content="Phòng Kỹ Thuật Thể Hiện - Đài Phát Thanh Truyền Hình Vĩnh Long"/>
		<meta name="description" content="Website Phòng Kỹ Thuật Thể Hiện - Đài Phát Thanh Truyền Hình Vĩnh Long, 50 Phạm Thái Bường, Phường 4, Thành Phố Vĩnh  Việt Nam"/>
		<meta name="page-topic" content="Phòng Kỹ Thuật Thể Hiện"/>
		<meta name="Abstract" content="Website Phòng Kỹ Thuật Thể Hiện - Đài Phát Thanh Truyền Hình Vĩnh Long, 50 Phạm Thái Bường, Phường 4, Thành Phố Vĩnh  Việt Nam"/>
		<meta name="classification" content="Phòng Kỹ Thuật Thể Hiện"/>
		<link rel="shortcut icon" href="/data/images/logo/favicon.ico" type="image/x-icon"/>
	</span><?php 
}

 ?><?php 
function tpl_5264de9f_base___jiee0yc_BpSa6r2ubkZOQ($tpl, $ctx) {
$_thistpl = $tpl ;
$_translator = $tpl->getTranslator() ;
?>
<html lang="en" xml:lang="en">
<body>
	<!-- ======================================================================== -->
	<!-- META TAG INCLUDE														  -->
	<!-- ======================================================================== -->
	
	
	<!-- ======================================================================== -->
	<!-- CASCADING STYLE SHEETS INCLUDE											  -->
	<!-- ======================================================================== -->
	
	
	<!-- ======================================================================== -->
	<!-- JAVASCRIPT INCLUDE														  -->
	<!-- ======================================================================== -->
	
	
	<!-- ======================================================================== -->
	<!-- HEADER																	  -->
	<!-- ======================================================================== -->
	
	
	<!-- ======================================================================== -->
	<!-- LỊCH CÔNG TÁC															  -->
	<!-- ======================================================================== -->
	
	
	<!-- ======================================================================== -->
	<!-- PHẬT ÂM 																  -->
	<!-- ======================================================================== -->
	
	
	<!-- ======================================================================== -->
	<!-- ẢNH HOẠT ĐỘNG															  -->
	<!-- ======================================================================== -->
	
	
	<!-- ======================================================================== -->
	<!-- TIN TỨC MỚI CẬP NHẬT													  -->
	<!-- ======================================================================== -->
	
	
	<!-- ======================================================================== -->
	<!-- VIDEO MỚI CẬP NHẬT														  -->
	<!-- ======================================================================== -->
	
	
	<!-- ======================================================================== -->
	<!-- GIẢNG SƯ NỔI BẬT														  -->
	<!-- ======================================================================== -->
	
	
	<!-- ======================================================================== -->
	<!-- HỎI - ĐÁP PHẬT HỌC														  -->
	<!-- ======================================================================== -->
	
	
	<!-- ======================================================================== -->
	<!-- FIXED FUNCTION															  -->
	<!-- ======================================================================== -->
	
	
	<!-- ======================================================================== -->
	<!-- TRỢ DUYÊN - ỦNG HỘ														  -->
	<!-- ======================================================================== -->
	
	
	<!-- ======================================================================== -->
	<!-- LIÊN HỆ																  -->
	<!-- ======================================================================== -->
	
	
	<!-- ======================================================================== -->
	<!-- LỊCH																	  -->
	<!-- ======================================================================== -->
	
	
	<!-- ======================================================================== -->
	<!-- THANH TIÊU ĐỀ LỊCH DƯƠNG - ÂM											  -->
	<!-- ======================================================================== -->
	
	
	<!-- ======================================================================== -->
	<!-- SỰ KIỆN																  -->
	<!-- ======================================================================== -->
	
	
	<!-- ======================================================================== -->
	<!-- KHÓA HỌC SẮP KHAI GIẢNG												  -->
	<!-- ======================================================================== -->
	
	
	<!-- ======================================================================== -->
	<!-- POPUP QUẢNG CÁO														  -->
	<!-- ======================================================================== -->
	
	
	<!-- ======================================================================== -->
	<!-- FOOTER																	  -->
	<!-- ======================================================================== -->
	
	
	<!-- ======================================================================== -->
	<!-- BACK ON TOP															  -->
	<!-- ======================================================================== -->
	
	
</body>
</html><?php 
/* end */ ;

}

?><?php /* 
*** DO NOT EDIT THIS FILE ***

Generated by PHPTAL from D:\AppWebServer\MyCodePHP\kythuatthehien.com\mvc\templates\base.xhtml (edit that file instead) */; ?>