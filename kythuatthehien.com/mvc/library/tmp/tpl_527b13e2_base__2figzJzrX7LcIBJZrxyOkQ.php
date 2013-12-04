<?php 
function tpl_527b13e2_base__2figzJzrX7LcIBJZrxyOkQ_Backontop(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div class="crunchify-top" data-toggle="tooltip" data-placement="left" data-original-title="Trở về đầu trang"></div><?php 
}

 ?>
<?php 
function tpl_527b13e2_base__2figzJzrX7LcIBJZrxyOkQ_Footer(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div class="row reset-margin footer">
		<?php /* tag "div" from line 364 */; ?>
<div class="top-menu">
			<?php /* tag "ul" from line 365 */; ?>
<ul class="nav nav-pills">
				<?php 
/* tag "li" from line 366 */ ;
if (null !== ($_tmp_2 = ($ctx->ActiveItem=='Home'?'active':'?'))):  ;
$_tmp_2 = ' class="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<li<?php echo $_tmp_2 ?>
><?php /* tag "a" from line 366 */; ?>
<a href="/trang-chu">Trang chủ</a></li>
				<?php 
/* tag "li" from line 367 */ ;
if (null !== ($_tmp_1 = ($ctx->ActiveItem=='Introduction'?'active':'?'))):  ;
$_tmp_1 = ' class="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<li<?php echo $_tmp_1 ?>
><?php /* tag "a" from line 367 */; ?>
<a href="/gioi-thieu">Giới thiệu</a></li>
				<?php 
/* tag "li" from line 368 */ ;
if (null !== ($_tmp_4 = ($ctx->ActiveItem=='ReadCategory'?'active dropdown':'dropdown'))):  ;
$_tmp_4 = ' class="'.phptal_escape($_tmp_4).'"' ;
else:  ;
$_tmp_4 = '' ;
endif ;
?>
<li<?php echo $_tmp_4 ?>
>
					<?php /* tag "a" from line 369 */; ?>
<a class="dropdown-toggle" data-toggle="dropdown">Tin tức<?php /* tag "b" from line 369 */; ?>
<b class="caret"></b></a>
					<?php /* tag "ul" from line 370 */; ?>
<ul class="dropdown-menu">
						<?php /* tag "li" from line 371 */; ?>
<li>
							<?php 
/* tag "a" from line 372 */ ;
if (null !== ($_tmp_3 = ('/tin-tuc/tin-dai-thvl'))):  ;
$_tmp_3 = ' href="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<a<?php echo $_tmp_3 ?>
>Cơ Quan</a>							
						</li>
						<?php /* tag "li" from line 374 */; ?>
<li>
							<?php 
/* tag "a" from line 375 */ ;
if (null !== ($_tmp_2 = ('/tin-tuc/tin-noi-bo'))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
>Nội bộ</a>
						</li>
					</ul>
				</li>
				<?php 
/* tag "li" from line 379 */ ;
if (null !== ($_tmp_1 = ($ctx->ActiveItem=='GroupProfessional'?'active dropdown':'dropdown'))):  ;
$_tmp_1 = ' class="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<li<?php echo $_tmp_1 ?>
>
					<?php /* tag "a" from line 380 */; ?>
<a class="dropdown-toggle" data-toggle="dropdown">Tổ CHuyên Môn<?php /* tag "b" from line 380 */; ?>
<b class="caret"></b></a>
					<?php /* tag "ul" from line 381 */; ?>
<ul class="dropdown-menu">
						<?php /* tag "li" from line 382 */; ?>
<li>
							<?php 
/* tag "a" from line 383 */ ;
if (null !== ($_tmp_3 = ('/to-chuyen-mon/kt-dung'))):  ;
$_tmp_3 = ' href="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<a<?php echo $_tmp_3 ?>
>Kỹ Thuật Dựng</a>							
						</li>
						<?php /* tag "li" from line 385 */; ?>
<li>
							<?php 
/* tag "a" from line 386 */ ;
if (null !== ($_tmp_2 = ('/to-chuyen-mon/kt-am-thanh'))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
>Kỹ Thuật Âm Thanh</a>
						</li>
						<?php /* tag "li" from line 388 */; ?>
<li>
							<?php 
/* tag "a" from line 389 */ ;
if (null !== ($_tmp_4 = ('/to-chuyen-mon/do-hoa'))):  ;
$_tmp_4 = ' href="'.phptal_escape($_tmp_4).'"' ;
else:  ;
$_tmp_4 = '' ;
endif ;
?>
<a<?php echo $_tmp_4 ?>
>Đồ Họa</a>
						</li>
					</ul>
				</li>
				<?php 
/* tag "li" from line 393 */ ;
if (null !== ($_tmp_3 = ($ctx->ActiveItem=='GroupAplication'?'active dropdown':'dropdown'))):  ;
$_tmp_3 = ' class="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<li<?php echo $_tmp_3 ?>
>
					<?php /* tag "a" from line 394 */; ?>
<a class="dropdown-toggle" data-toggle="dropdown">Ứng Dụng<?php /* tag "b" from line 394 */; ?>
<b class="caret"></b></a>
						<?php /* tag "ul" from line 395 */; ?>
<ul class="dropdown-menu">
						<?php /* tag "li" from line 396 */; ?>
<li>
							<?php 
/* tag "a" from line 397 */ ;
if (null !== ($_tmp_2 = ('/thu-lao'))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
>Quản lý Điểm Thù Lao</a>
						</li>		
						<?php /* tag "li" from line 399 */; ?>
<li>
							<?php 
/* tag "a" from line 400 */ ;
if (null !== ($_tmp_4 = ('/nhan-su'))):  ;
$_tmp_4 = ' href="'.phptal_escape($_tmp_4).'"' ;
else:  ;
$_tmp_4 = '' ;
endif ;
?>
<a<?php echo $_tmp_4 ?>
>Quản lý Nhân Sự</a>
						</li>	
					</ul>
				</li>				
				<?php 
/* tag "li" from line 404 */ ;
if (null !== ($_tmp_1 = ($ctx->ActiveItem=='LibraryAlbum'?'active':'?'))):  ;
$_tmp_1 = ' class="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<li<?php echo $_tmp_1 ?>
><?php /* tag "a" from line 404 */; ?>
<a href="/thu-vien-anh">Ảnh hoạt động</a></li>							
				<?php 
/* tag "li" from line 405 */ ;
if (null !== ($_tmp_2 = ($ctx->ActiveItem=='Contact'?'active':'?'))):  ;
$_tmp_2 = ' class="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<li<?php echo $_tmp_2 ?>
><?php /* tag "a" from line 405 */; ?>
<a href="/lien-he">Liên hệ</a></li>							
				<?php 
/* tag "li" from line 406 */ ;
if (null !== ($_tmp_4 = ($ctx->ActiveItem=='Admin'?'active':'?'))):  ;
$_tmp_4 = ' class="'.phptal_escape($_tmp_4).'"' ;
else:  ;
$_tmp_4 = '' ;
endif ;
?>
<li<?php echo $_tmp_4 ?>
><?php /* tag "a" from line 406 */; ?>
<a href="/signin/load">Quản trị</a></li>							
			</ul>
		</div>
		<?php /* tag "div" from line 409 */; ?>
<div class="row reset-margin">			
			<?php /* tag "div" from line 410 */; ?>
<div class="span6  reset-margin">
				<?php /* tag "div" from line 411 */; ?>
<div class="f-left">
					<?php /* tag "p" from line 412 */; ?>
<p><?php /* tag "b" from line 412 */; ?>
<b>© 11/2013 Phòng Kỹ Thuật Thể Hiện</b></p>
					<?php /* tag "p" from line 413 */; ?>
<p>Biên tập - Trưởng Phòng: Nguyễn Quang Phương</p>
					<?php /* tag "p" from line 414 */; ?>
<p>Phát triển - Kỹ Thuật: Nguyễn Thanh Bảo</p>					
				</div>
			</div>
			<?php /* tag "div" from line 417 */; ?>
<div class="span6 pull-right reset-margin">
				<?php /* tag "div" from line 418 */; ?>
<div class="f-right">
					<?php /* tag "p" from line 419 */; ?>
<p><?php /* tag "b" from line 419 */; ?>
<b>Địa chỉ:</b> 50 Phạm Thái Bường Phường 4, TP Vĩnh Long</p>
					<?php /* tag "p" from line 420 */; ?>
<p><?php /* tag "b" from line 420 */; ?>
<b>Điện thoại:</b> (073) 822 345</p>
					<?php /* tag "p" from line 421 */; ?>
<p><?php /* tag "b" from line 421 */; ?>
<b>Email:</b> ktthehienthvl@gmail.com</p>					
				</div>
			</div>
		</div>
	</div><?php 
}

 ?>
<?php 
function tpl_527b13e2_base__2figzJzrX7LcIBJZrxyOkQ_Popup(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div>
		<?php /* tag "script" from line 302 */; ?>
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
/* tag "div" from line 335 */ ;
if ($ctx->path($ctx->Popup, 'getEnable')):  ;
?>
<div class="ads-popup ads-popup-center">
			<?php /* tag "div" from line 336 */; ?>
<div class="ads-close"><?php /* tag "i" from line 336 */; ?>
<i class="icon-chevron-down icon-white"></i></div>
			<?php /* tag "div" from line 337 */; ?>
<div id="PopupCarousel" class="carousel slide carousel-fade popup-slide reset-margin">
				<?php /* tag "ol" from line 338 */; ?>
<ol class="carousel-indicators">
					<?php /* tag "li" from line 339 */; ?>
<li data-target="#PopupCarousel" data-slide-to="0" class="active"></li>
				</ol>
				<?php /* tag "div" from line 341 */; ?>
<div class="carousel-inner">
					
					<?php /* tag "div" from line 343 */; ?>
<div class="active item">
						<?php 
/* tag "a" from line 344 */ ;
if (null !== ($_tmp_2 = ('#'))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
>
							<?php 
/* tag "img" from line 345 */ ;
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
/* tag "div" from line 349 */ ;
$_tmp_3 = $ctx->repeat ;
$_tmp_3->Sponsor = new PHPTAL_RepeatController($ctx->SponsorAll)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_3->Sponsor as $ctx->Sponsor): ;
?>
<div class="item">
						<?php 
/* tag "a" from line 350 */ ;
if (null !== ($_tmp_4 = ($ctx->path($ctx->Sponsor, 'getURLView')))):  ;
$_tmp_4 = ' href="'.phptal_escape($_tmp_4).'"' ;
else:  ;
$_tmp_4 = '' ;
endif ;
?>
<a<?php echo $_tmp_4 ?>
>
							<?php 
/* tag "img" from line 351 */ ;
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

		<?php /* tag "div" from line 357 */; ?>
<div id="ads-open" class="ads-open-center"><?php /* tag "i" from line 357 */; ?>
<i class="icon-chevron-up icon-white"></i></div>
	</div><?php 
}

 ?>
<?php 
function tpl_527b13e2_base__2figzJzrX7LcIBJZrxyOkQ_CallendarBox(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div class="box radius">
		<?php /* tag "div" from line 265 */; ?>
<div class="b-title">
			<?php /* tag "div" from line 266 */; ?>
<div class="b-t-icon-content">Hôm Nay</div>
		</div>
		<?php /* tag "div" from line 268 */; ?>
<div class="b-content padding-content">
			<?php /* tag "table" from line 269 */; ?>
<table class="calendar-paper" width="100%" border="0" cellpadding="1" cellspacing="1">
				<?php /* tag "tbody" from line 270 */; ?>
<tbody>
					<?php /* tag "tr" from line 271 */; ?>
<tr><?php /* tag "td" from line 271 */; ?>
<td colspan="2" id="thangduong" class="thangduong"></td></tr>
					<?php /* tag "tr" from line 272 */; ?>
<tr><?php /* tag "td" from line 272 */; ?>
<td colspan="2" id="ngayduong" class="ngayduong"></td></tr>
					<?php /* tag "tr" from line 273 */; ?>
<tr><?php /* tag "td" from line 273 */; ?>
<td colspan="2" id="thuduong" class="thuduong"></td></tr>
					<?php /* tag "tr" from line 274 */; ?>
<tr>
						<?php /* tag "td" from line 275 */; ?>
<td> 
							<?php /* tag "div" from line 276 */; ?>
<div id="thangam" class="thangam"></div>
							<?php /* tag "div" from line 277 */; ?>
<div id="ngayam" class="ngayam"></div>
							<?php /* tag "div" from line 278 */; ?>
<div id="namam" class="namam"></div>
						</td>
						<?php /* tag "td" from line 280 */; ?>
<td class="canchi">
							<?php /* tag "div" from line 281 */; ?>
<div id="canchithang" class="gioam"></div>
							<?php /* tag "div" from line 282 */; ?>
<div id="canchingay" class="gioam"></div>
						</td>
					</tr>
					<?php /* tag "tr" from line 285 */; ?>
<tr><?php /* tag "td" from line 285 */; ?>
<td colspan="2" id="hoangdao" class="hoangdao"></td></tr>
				</tbody>
			</table>
			<?php /* tag "script" from line 288 */; ?>
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
function tpl_527b13e2_base__2figzJzrX7LcIBJZrxyOkQ_ContactBox(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div class="box">
		<?php /* tag "div" from line 258 */; ?>
<div class="b-content"><?php /* tag "a" from line 258 */; ?>
<a href="/lien-he"><?php /* tag "img" from line 258 */; ?>
<img width="100%" src="/data/images/logo/contact.jpg"/></a></div>
	</div><?php 
}

 ?>
<?php 
function tpl_527b13e2_base__2figzJzrX7LcIBJZrxyOkQ_FixedFunction(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div class="fixed-function">
		
		<?php /* tag "div" from line 244 */; ?>
<div class="bubble"><?php echo phptal_escape(\MVC\Library\Statistic::getCountPrint()); ?>
</div>
		<?php /* tag "p" from line 245 */; ?>
<p class="bubble-item">Truy cập</p>
		<?php /* tag "div" from line 246 */; ?>
<div class="bubble">
			<?php /* tag "img" from line 247 */; ?>
<img src="/data/images/logo/count_logo.gif"/>
			<?php /* tag "span" from line 248 */; ?>
<span><?php echo phptal_escape(\MVC\Library\Statistic::getOnlinePrint()); ?>
</span>
		</div>
		<?php /* tag "p" from line 250 */; ?>
<p class="bubble-item">Trực tuyến</p>
	</div><?php 
}

 ?>
<?php 
function tpl_527b13e2_base__2figzJzrX7LcIBJZrxyOkQ_AskBox(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div class="box radius">
		<?php /* tag "div" from line 229 */; ?>
<div class="b-title">
			<?php /* tag "div" from line 230 */; ?>
<div class="b-t-icon-content">Hỏi &amp; Đáp</div>
		</div>
		<?php /* tag "div" from line 232 */; ?>
<div class="b-content">
			<?php /* tag "a" from line 233 */; ?>
<a href="/hoi-dap/dat-cau-hoi">
				<?php /* tag "img" from line 234 */; ?>
<img width="100%" src="/data/images/logo/question.jpg"/>
			</a>
		</div>
	</div><?php 
}

 ?>
<?php 
function tpl_527b13e2_base__2figzJzrX7LcIBJZrxyOkQ_TopMonkBox(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div class="box radius">
		<?php /* tag "div" from line 209 */; ?>
<div class="b-title">
			<?php /* tag "div" from line 210 */; ?>
<div class="b-t-icon-content">GIẢNG SƯ NỔI BẬT</div>
		</div>
		<?php /* tag "div" from line 212 */; ?>
<div class="b-content">
			<?php /* tag "ul" from line 213 */; ?>
<ul class="grid-item-3 thumbnails reset-margin">
				<?php 
/* tag "li" from line 214 */ ;
$_tmp_4 = $ctx->repeat ;
$_tmp_4->Monk = new PHPTAL_RepeatController($ctx->MonkAll)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_4->Monk as $ctx->Monk): ;
?>
<li class="span2">
					<?php 
/* tag "a" from line 215 */ ;
if (null !== ($_tmp_3 = ($ctx->path($ctx->Monk, 'getURLRead')))):  ;
$_tmp_3 = ' href="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<a<?php echo $_tmp_3 ?>
>
						<?php /* tag "div" from line 216 */; ?>
<div class="thumbnail">
							<?php 
/* tag "img" from line 217 */ ;
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
function tpl_527b13e2_base__2figzJzrX7LcIBJZrxyOkQ_TopVideoBox(PHPTAL $_thistpl, PHPTAL $tpl) {
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
		<?php /* tag "div" from line 188 */; ?>
<div class="b-title">
			<?php /* tag "div" from line 189 */; ?>
<div class="b-t-icon-content"><?php echo phptal_escape($ctx->path($ctx->Panel, 'getName')); ?>
</div>
		</div>
		<?php /* tag "div" from line 191 */; ?>
<div class="b-content">
			<?php /* tag "ul" from line 192 */; ?>
<ul class="grid-item-2 thumbnails reset-margin">
				<?php 
/* tag "li" from line 193 */ ;
$_tmp_2 = $ctx->repeat ;
$_tmp_2->Category = new PHPTAL_RepeatController($ctx->path($ctx->Panel, 'getDetailAll'))
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_2->Category as $ctx->Category): ;
?>
<li class="span2">
					<?php 
/* tag "a" from line 194 */ ;
if (null !== ($_tmp_3 = ($ctx->path($ctx->Category, 'getCategoryVideo/getURLRead')))):  ;
$_tmp_3 = ' href="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<a<?php echo $_tmp_3 ?>
>
						<?php /* tag "div" from line 195 */; ?>
<div class="thumbnail">
							<?php 
/* tag "img" from line 196 */ ;
if (null !== ($_tmp_4 = ($ctx->path($ctx->Category, 'getCategoryVideo/getPicture')))):  ;
$_tmp_4 = ' src="'.phptal_escape($_tmp_4).'"' ;
else:  ;
$_tmp_4 = '' ;
endif ;
?>
<img<?php echo $_tmp_4 ?>
/>
							<?php /* tag "p" from line 197 */; ?>
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
function tpl_527b13e2_base__2figzJzrX7LcIBJZrxyOkQ_TopNewsBox(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div class="box radius">
		<?php /* tag "div" from line 163 */; ?>
<div class="b-title">
			<?php /* tag "div" from line 164 */; ?>
<div class="b-t-icon-content">Tin tức nổi bật</div>
		</div>
		<?php /* tag "div" from line 166 */; ?>
<div class="b-content">			
			<?php /* tag "div" from line 167 */; ?>
<div id="BoxNewsCarousel" class="carousel slide sidebar-slide reset-margin">
				<?php /* tag "div" from line 168 */; ?>
<div class="carousel-inner">
					<?php /* tag "div" from line 169 */; ?>
<div class="active item">
						<?php 
/* tag "a" from line 170 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->PanelNewsAll, 'current/getNews/getURLRead')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
>
							<?php 
/* tag "img" from line 171 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->PanelNewsAll, 'current/getNews/getImage')))):  ;
$_tmp_1 = ' src="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<img<?php echo $_tmp_1 ?>
/>
							<?php /* tag "div" from line 172 */; ?>
<div class="carousel-caption">
								<?php /* tag "p" from line 173 */; ?>
<p><?php echo phptal_escape($ctx->path($ctx->PanelNewsAll, 'current/getNews/getTitle')); ?>
</p>
							</div>
						</a>
					</div>					
				</div>
				<?php /* tag "a" from line 178 */; ?>
<a class="carousel-control left" href="#BoxNewsCarousel" data-slide="prev">&lsaquo;</a>
				<?php /* tag "a" from line 179 */; ?>
<a class="carousel-control right" href="#BoxNewsCarousel" data-slide="next">&rsaquo;</a>
			</div>			
		</div>
	</div><?php 
}

 ?>
<?php 
function tpl_527b13e2_base__2figzJzrX7LcIBJZrxyOkQ_PictureBox(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div class="box radius">
		<?php /* tag "div" from line 149 */; ?>
<div class="b-title">
			<?php /* tag "div" from line 150 */; ?>
<div class="b-t-icon-content">Ảnh Hoạt Động</div>
		</div>
		<?php /* tag "div" from line 152 */; ?>
<div class="b-content">
			<?php /* tag "a" from line 153 */; ?>
<a href="/thu-vien-anh">
				<?php /* tag "img" from line 154 */; ?>
<img width="100%" src="/data/images/logo/top_img.jpg"/>
			</a>
		</div>
	</div><?php 
}

 ?>
<?php 
function tpl_527b13e2_base__2figzJzrX7LcIBJZrxyOkQ_BuddhaBox(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div class="box radius">
		<?php /* tag "div" from line 122 */; ?>
<div class="b-title">
			<?php /* tag "div" from line 123 */; ?>
<div class="b-t-icon-content">Tổ Chuyên Môn</div>
		</div>
		<?php /* tag "div" from line 125 */; ?>
<div class="b-content">
			<?php /* tag "div" from line 126 */; ?>
<div id="BuddhaCarousel" class="carousel slide carousel-fade sidebar-slide reset-margin">
				
				<?php /* tag "div" from line 128 */; ?>
<div class="carousel-inner">
					<?php /* tag "div" from line 129 */; ?>
<div class="active item">
						<?php /* tag "a" from line 130 */; ?>
<a href="/to-chuyen-mon/kt-dung"><?php /* tag "img" from line 130 */; ?>
<img src="/data/images/logo/kt_dung.jpg"/></a>
					</div>
					<?php /* tag "div" from line 132 */; ?>
<div class="item">
						<?php /* tag "a" from line 133 */; ?>
<a href="/to-chuyen-mon/kt-am-thanh"><?php /* tag "img" from line 133 */; ?>
<img src="/data/images/logo/kt_amthanh.jpg"/></a>
					</div>
					<?php /* tag "div" from line 135 */; ?>
<div class="item">
						<?php /* tag "a" from line 136 */; ?>
<a href="/to-chuyen-mon/do-hoa"><?php /* tag "img" from line 136 */; ?>
<img src="/data/images/logo/dohoa.jpg"/></a>
					</div>
				</div>
				<?php /* tag "a" from line 139 */; ?>
<a class="carousel-control left" href="#BuddhaCarousel" data-slide="prev">&lsaquo;</a>
				<?php /* tag "a" from line 140 */; ?>
<a class="carousel-control right" href="#BuddhaCarousel" data-slide="next">&rsaquo;</a>
			</div>
		</div>
	</div><?php 
}

 ?>
<?php 
function tpl_527b13e2_base__2figzJzrX7LcIBJZrxyOkQ_CallendarBar(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div class="row reset-margin date-time">
		<?php /* tag "div" from line 109 */; ?>
<div id="date-time" class="span6 fix-width">
			<?php /* tag "script" from line 110 */; ?>
<script type="text/javascript">getLunarDateString(09,11,2012,16,39,13);</script>
		</div>
		<?php /* tag "div" from line 112 */; ?>
<div class="span6 fix-width">
			<?php /* tag "marquee" from line 113 */; ?>
<marquee behavior="scroll" direction="left" scrollamount="2">
				DVE-WEBSITE - Trang thông tin nội bộ của Phòng Kỹ thuật Thể hiện - Đài Phát Thanh - Truyền Hình Vĩnh Long - www.ktthehien.com
			</marquee>
		</div>
	</div><?php 
}

 ?>
<?php 
function tpl_527b13e2_base__2figzJzrX7LcIBJZrxyOkQ_Header(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div class="row reset-margin">
		<?php /* tag "div" from line 50 */; ?>
<div class="header">
			<?php /* tag "a" from line 51 */; ?>
<a href="/trang-chu">
				<!-- <img height="200" width="940" src="/data/images/flash/Web_Banner.gif" /> -->
				<?php /* tag "div" from line 53 */; ?>
<div class="aleoflash-gif" style="display:none;"><?php /* tag "a" from line 53 */; ?>
<a href="http://www.ktthehien.com" target="_blank"><?php /* tag "img" from line 53 */; ?>
<img src="/data/images/flash/KTTH_Header.gif" border="0"/></a></div>
				<?php /* tag "div" from line 54 */; ?>
<div class="aleoflash-swf" style="display:block;"><?php /* tag "embed" from line 54 */; ?>
<embed src="/data/images/flash/KTTH_Header.swf" quality="high" type="application/x-shockwave-flash" wmode="transparent" width="1000" height="99" pluginspage="http://www.macromedia.com/go/getflashplayer" allowScriptAccess="always"></embed></div>
				
				<?php /* tag "script" from line 56 */; ?>
<script language="JavaScript">/*<![CDATA[*/var hasFlash=false;if(window.ActiveXObject){ try { if (new ActiveXObject("ShockwaveFlash.ShockwaveFlash")) hasFlash=true;} catch(e){}} else { if(navigator.plugins["Shockwave Flash"]){hasFlash=true;}}var elems=document.getElementsByTagName("div"); for(var i in elems){if(!hasFlash && elems[i].className=="aleoflash-gif") elems[i].style.display="block"; else if ((!hasFlash && elems[i].className=="aleoflash-swf") || elems[i].className=="aleoflash") elems[i].style.display="none";}/*]]>*/</script>
			</a>
		</div>
		<?php /* tag "div" from line 59 */; ?>
<div class="top-menu">
			<?php /* tag "ul" from line 60 */; ?>
<ul class="nav nav-pills">
				<?php 
/* tag "li" from line 61 */ ;
if (null !== ($_tmp_1 = ($ctx->ActiveItem=='Home'?'active':'?'))):  ;
$_tmp_1 = ' class="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<li<?php echo $_tmp_1 ?>
><?php /* tag "a" from line 61 */; ?>
<a href="/trang-chu">Trang chủ</a></li>
				<?php 
/* tag "li" from line 62 */ ;
if (null !== ($_tmp_1 = ($ctx->ActiveItem=='Introduction'?'active':'?'))):  ;
$_tmp_1 = ' class="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<li<?php echo $_tmp_1 ?>
><?php /* tag "a" from line 62 */; ?>
<a href="/gioi-thieu">Giới thiệu</a></li>
				<?php 
/* tag "li" from line 63 */ ;
if (null !== ($_tmp_1 = ($ctx->ActiveItem=='ReadCategory'?'active dropdown':'dropdown'))):  ;
$_tmp_1 = ' class="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<li<?php echo $_tmp_1 ?>
>
					<?php /* tag "a" from line 64 */; ?>
<a class="dropdown-toggle" data-toggle="dropdown">Tin tức<?php /* tag "b" from line 64 */; ?>
<b class="caret"></b></a>
					<?php /* tag "ul" from line 65 */; ?>
<ul class="dropdown-menu">
						<?php /* tag "li" from line 66 */; ?>
<li>
							<?php 
/* tag "a" from line 67 */ ;
if (null !== ($_tmp_2 = ('/tin-tuc/tin-dai-thvl'))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
>Cơ Quan</a>							
						</li>
						<?php /* tag "li" from line 69 */; ?>
<li>
							<?php 
/* tag "a" from line 70 */ ;
if (null !== ($_tmp_2 = ('/tin-tuc/tin-noi-bo'))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
>Nội bộ</a>
						</li>
					</ul>
				</li>
				<?php 
/* tag "li" from line 74 */ ;
if (null !== ($_tmp_2 = ($ctx->ActiveItem=='GroupProfessional'?'active dropdown':'dropdown'))):  ;
$_tmp_2 = ' class="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<li<?php echo $_tmp_2 ?>
>
					<?php /* tag "a" from line 75 */; ?>
<a class="dropdown-toggle" data-toggle="dropdown">Tổ CHuyên Môn<?php /* tag "b" from line 75 */; ?>
<b class="caret"></b></a>
					<?php /* tag "ul" from line 76 */; ?>
<ul class="dropdown-menu">
						<?php /* tag "li" from line 77 */; ?>
<li>
							<?php 
/* tag "a" from line 78 */ ;
if (null !== ($_tmp_1 = ('/to-chuyen-mon/kt-dung'))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
>Kỹ Thuật Dựng</a>							
						</li>
						<?php /* tag "li" from line 80 */; ?>
<li>
							<?php 
/* tag "a" from line 81 */ ;
if (null !== ($_tmp_1 = ('/to-chuyen-mon/kt-am-thanh'))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
>Kỹ Thuật Âm Thanh</a>
						</li>
						<?php /* tag "li" from line 83 */; ?>
<li>
							<?php 
/* tag "a" from line 84 */ ;
if (null !== ($_tmp_1 = ('/to-chuyen-mon/do-hoa'))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
>Đồ Họa</a>
						</li>
					</ul>
				</li>
				<?php 
/* tag "li" from line 88 */ ;
if (null !== ($_tmp_1 = ($ctx->ActiveItem=='GroupAplication'?'active dropdown':'dropdown'))):  ;
$_tmp_1 = ' class="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<li<?php echo $_tmp_1 ?>
>
					<?php /* tag "a" from line 89 */; ?>
<a class="dropdown-toggle" data-toggle="dropdown">Ứng Dụng<?php /* tag "b" from line 89 */; ?>
<b class="caret"></b></a>
						<?php /* tag "ul" from line 90 */; ?>
<ul class="dropdown-menu">
						<?php /* tag "li" from line 91 */; ?>
<li>
							<?php 
/* tag "a" from line 92 */ ;
if (null !== ($_tmp_2 = ('/thu-lao'))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
>Quản lý Điểm Thù Lao</a>
						</li>		
						<?php /* tag "li" from line 94 */; ?>
<li>
							<?php 
/* tag "a" from line 95 */ ;
if (null !== ($_tmp_2 = ('/nhan-su'))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
>Quản lý Nhân Sự</a>
						</li>	
					</ul>
				</li>				
				<?php 
/* tag "li" from line 99 */ ;
if (null !== ($_tmp_2 = ($ctx->ActiveItem=='LibraryAlbum'?'active':'?'))):  ;
$_tmp_2 = ' class="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<li<?php echo $_tmp_2 ?>
><?php /* tag "a" from line 99 */; ?>
<a href="/thu-vien-anh">Ảnh hoạt động</a></li>							
				<?php 
/* tag "li" from line 100 */ ;
if (null !== ($_tmp_1 = ($ctx->ActiveItem=='Contact'?'active':'?'))):  ;
$_tmp_1 = ' class="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<li<?php echo $_tmp_1 ?>
><?php /* tag "a" from line 100 */; ?>
<a href="/lien-he">Liên hệ</a></li>							
			</ul>
		</div>
	</div><?php 
}

 ?>
<?php 
function tpl_527b13e2_base__2figzJzrX7LcIBJZrxyOkQ_IncludeJS(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<span>		
		<?php /* tag "script" from line 36 */; ?>
<script type="text/javascript" language="javascript" src="/mvc/templates/script/library/jquery-1.7.1.min.js"></script>
		<?php /* tag "script" from line 37 */; ?>
<script type="text/javascript" language="javascript" src="/mvc/templates/script/library/jquery.countdown.js"></script>
		<?php /* tag "script" from line 38 */; ?>
<script type="text/javascript" language="javascript" src="/mvc/templates/script/library/amlich-hnd.js"></script>
		<?php /* tag "script" from line 39 */; ?>
<script type="text/javascript" language="javascript" src="/mvc/templates/script/library/jquery.eventCalendar.js"></script>
		<?php /* tag "script" from line 40 */; ?>
<script type="text/javascript" language="javascript" src="/mvc/templates/script/library/jquery.timeago.js"></script>		
		<?php /* tag "script" from line 41 */; ?>
<script type="text/javascript" language="javascript" src="/mvc/templates/script/library/jquery.session.js"></script>
		<?php /* tag "script" from line 42 */; ?>
<script type="text/javascript" language="javascript" src="/mvc/templates/theme/bootstrap/js/bootstrap.js"></script>
		<?php /* tag "script" from line 43 */; ?>
<script type="text/javascript" language="javascript" src="/mvc/templates/script/user/base.js"></script>
	</span><?php 
}

 ?>
<?php 
function tpl_527b13e2_base__2figzJzrX7LcIBJZrxyOkQ_IncludeCSS(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<span>
		<?php /* tag "link" from line 25 */; ?>
<link rel="stylesheet" type="text/css" href="/mvc/templates/theme/base/jquery.countdown.css"/> 
		<?php /* tag "link" from line 26 */; ?>
<link rel="stylesheet" type="text/css" href="/mvc/templates/theme/base/eventCalendar.css"/>
		<?php /* tag "link" from line 27 */; ?>
<link rel="stylesheet" type="text/css" href="/mvc/templates/theme/base/eventCalendar_theme.css"/>	
		<?php /* tag "link" from line 28 */; ?>
<link rel="stylesheet" type="text/css" href="/mvc/templates/theme/bootstrap/css/bootstrap.css" media="screen"/>
		<?php /* tag "link" from line 29 */; ?>
<link rel="stylesheet" type="text/css" href="/mvc/templates/theme/bootstrap/css/base.css"/>
	</span><?php 
}

 ?>
<?php 
function tpl_527b13e2_base__2figzJzrX7LcIBJZrxyOkQ_IncludeMETA(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<span>
		<?php /* tag "title" from line 7 */; ?>
<title><?php echo 'Website Phòng Kỹ Thuật Thể Hiện - Đài Phát Thanh Truyền Hình Vĩnh Long'; ?>
</title>
		<?php /* tag "base" from line 8 */; ?>
<base href="http://www.ktthehien.com/"/>
		<?php /* tag "meta" from line 9 */; ?>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>	
		<?php /* tag "meta" from line 10 */; ?>
<meta http-equiv="Pragma" content="no-cache"/>
		<?php /* tag "meta" from line 11 */; ?>
<meta http-equiv="Expires" content="-1"/>
		<?php /* tag "meta" from line 12 */; ?>
<meta http-equiv="Cache-Control" content="no-cache"/>
		<?php /* tag "meta" from line 13 */; ?>
<meta name="keywords" content="Phòng Kỹ Thuật Thể Hiện"/>
		<?php /* tag "meta" from line 14 */; ?>
<meta name="description" content="Website Phòng Kỹ Thuật Thể Hiện, Đài Phát Thanh Truyền Hình Vĩnh Long, Việt Nam"/>
		<?php /* tag "meta" from line 15 */; ?>
<meta name="page-topic" content="Quản lý thù lao"/>
		<?php /* tag "meta" from line 16 */; ?>
<meta name="Abstract" content="Website Phòng Kỹ Thuật Thể Hiện, Đài Phát Thanh Truyền Hình Vĩnh Long, Việt Nam"/>
		<?php /* tag "meta" from line 17 */; ?>
<meta name="classification" content="Kỹ Thuật Thể Hiện, dựng hình chuyên nghiệp, đồ họa 3d, kỹ thuật số, âm thanh chuyên nghiệp"/>
		<?php /* tag "link" from line 18 */; ?>
<link rel="icon" type="image/jpg" href="/data/images/icon/icon.jpg"/>
	</span><?php 
}

 ?>
<?php 
function tpl_527b13e2_base__2figzJzrX7LcIBJZrxyOkQ(PHPTAL $tpl, PHPTAL_Context $ctx) {
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
	<?php /* tag "span" from line 24 */; ?>

	
	<!-- ======================================================================== -->
	<!-- JAVASCRIPT INCLUDE														  -->
	<!-- ======================================================================== -->
	<?php /* tag "span" from line 35 */; ?>

	
	<!-- ======================================================================== -->
	<!-- HEADER																	  -->
	<!-- ======================================================================== -->
	<?php /* tag "div" from line 49 */; ?>

	
	<!-- ======================================================================== -->
	<!-- THANH TIÊU ĐỀ LỊCH DƯƠNG - ÂM											  -->
	<!-- ======================================================================== -->
	<?php /* tag "div" from line 108 */; ?>

	<!-- ======================================================================== -->
	<!-- PHẬT ÂM 																  -->
	<!-- ======================================================================== -->
	<?php /* tag "div" from line 121 */; ?>

	
	<!-- ======================================================================== -->
	<!-- ẢNH HOẠT ĐỘNG															  -->
	<!-- ======================================================================== -->
	<?php /* tag "div" from line 148 */; ?>

	
	<!-- ======================================================================== -->
	<!-- TIN TỨC MỚI CẬP NHẬT													  -->
	<!-- ======================================================================== -->
	<?php /* tag "div" from line 162 */; ?>

	
	<!-- ======================================================================== -->
	<!-- VIDEO MỚI CẬP NHẬT														  -->
	<!-- ======================================================================== -->
	<?php /* tag "div" from line 187 */; ?>

	
	<!-- ======================================================================== -->
	<!-- GIẢNG SƯ NỔI BẬT														  -->
	<!-- ======================================================================== -->
	<?php /* tag "div" from line 208 */; ?>

	
	<!-- ======================================================================== -->
	<!-- HỎI - ĐÁP PHẬT HỌC														  -->
	<!-- ======================================================================== -->
	<?php /* tag "div" from line 228 */; ?>

	
	<!-- ======================================================================== -->
	<!-- FIXED FUNCTION															  -->
	<!-- ======================================================================== -->
	<?php /* tag "div" from line 242 */; ?>

	
	
	<!-- ======================================================================== -->
	<!-- LIÊN HỆ																  -->
	<!-- ======================================================================== -->
	<?php /* tag "div" from line 257 */; ?>

	
	<!-- ======================================================================== -->
	<!-- LỊCH																	  -->
	<!-- ======================================================================== -->
	<?php /* tag "div" from line 264 */; ?>

	
	<!-- ======================================================================== -->
	<!-- POPUP QUẢNG CÁO														  -->
	<!-- ======================================================================== -->
	<?php /* tag "div" from line 301 */; ?>

	
	<!-- ======================================================================== -->
	<!-- FOOTER																	  -->
	<!-- ======================================================================== -->
	<?php /* tag "div" from line 363 */; ?>

	
	<!-- ======================================================================== -->
	<!-- BACK ON TOP															  -->
	<!-- ======================================================================== -->
	<?php /* tag "div" from line 430 */; ?>

	
</body>
</html><?php 
/* end */ ;

}

?>
<?php /* 
*** DO NOT EDIT THIS FILE ***

Generated by PHPTAL from D:\AppWebServer\MyCodePHP\kythuatthehien.com\mvc\templates\base.xhtml (edit that file instead) */; ?>