<?php 
function tpl_53b76c6e_base__2figzJzrX7LcIBJZrxyOkQ_Backontop(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div class="crunchify-top" data-toggle="tooltip" data-placement="left" data-original-title="Trở về đầu trang"></div><?php 
}

 ?>
<?php 
function tpl_53b76c6e_base__2figzJzrX7LcIBJZrxyOkQ_Footer(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div class="row reset-margin footer">
		<?php /* tag "div" from line 366 */; ?>
<div class="top-menu">
			<?php /* tag "ul" from line 367 */; ?>
<ul class="nav nav-pills">
				<?php 
/* tag "li" from line 368 */ ;
if (null !== ($_tmp_2 = ($ctx->ActiveItem=='Home'?'active':'?'))):  ;
$_tmp_2 = ' class="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<li<?php echo $_tmp_2 ?>
><?php /* tag "a" from line 368 */; ?>
<a href="/trang-chu">Trang chủ</a></li>
				<?php 
/* tag "li" from line 369 */ ;
if (null !== ($_tmp_1 = ($ctx->ActiveItem=='Introduction'?'active':'?'))):  ;
$_tmp_1 = ' class="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<li<?php echo $_tmp_1 ?>
><?php /* tag "a" from line 369 */; ?>
<a href="/gioi-thieu">Giới thiệu</a></li>
				<?php 
/* tag "li" from line 370 */ ;
if (null !== ($_tmp_4 = ($ctx->ActiveItem=='ReadCategory'?'active dropdown':'dropdown'))):  ;
$_tmp_4 = ' class="'.phptal_escape($_tmp_4).'"' ;
else:  ;
$_tmp_4 = '' ;
endif ;
?>
<li<?php echo $_tmp_4 ?>
>
					<?php /* tag "a" from line 371 */; ?>
<a class="dropdown-toggle" data-toggle="dropdown">Tin tức<?php /* tag "b" from line 371 */; ?>
<b class="caret"></b></a>
					<?php /* tag "ul" from line 372 */; ?>
<ul class="dropdown-menu">
						<?php /* tag "li" from line 373 */; ?>
<li>
							<?php 
/* tag "a" from line 374 */ ;
if (null !== ($_tmp_3 = ('/tin-tuc/tin-dai-thvl'))):  ;
$_tmp_3 = ' href="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<a<?php echo $_tmp_3 ?>
>Cơ Quan</a>							
						</li>
						<?php /* tag "li" from line 376 */; ?>
<li>
							<?php 
/* tag "a" from line 377 */ ;
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
/* tag "li" from line 381 */ ;
if (null !== ($_tmp_1 = ($ctx->ActiveItem=='GroupProfessional'?'active dropdown':'dropdown'))):  ;
$_tmp_1 = ' class="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<li<?php echo $_tmp_1 ?>
>
					<?php /* tag "a" from line 382 */; ?>
<a class="dropdown-toggle" data-toggle="dropdown">Tổ CHuyên Môn<?php /* tag "b" from line 382 */; ?>
<b class="caret"></b></a>
					<?php /* tag "ul" from line 383 */; ?>
<ul class="dropdown-menu">
						<?php /* tag "li" from line 384 */; ?>
<li>
							<?php 
/* tag "a" from line 385 */ ;
if (null !== ($_tmp_3 = ('/to-chuyen-mon/kt-dung'))):  ;
$_tmp_3 = ' href="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<a<?php echo $_tmp_3 ?>
>Kỹ Thuật Dựng</a>							
						</li>
						<?php /* tag "li" from line 387 */; ?>
<li>
							<?php 
/* tag "a" from line 388 */ ;
if (null !== ($_tmp_2 = ('/to-chuyen-mon/kt-am-thanh'))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
>Kỹ Thuật Âm Thanh</a>
						</li>
						<?php /* tag "li" from line 390 */; ?>
<li>
							<?php 
/* tag "a" from line 391 */ ;
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
/* tag "li" from line 395 */ ;
if (null !== ($_tmp_3 = ($ctx->ActiveItem=='GroupAplication'?'active dropdown':'dropdown'))):  ;
$_tmp_3 = ' class="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<li<?php echo $_tmp_3 ?>
>
					<?php /* tag "a" from line 396 */; ?>
<a class="dropdown-toggle" data-toggle="dropdown">Ứng Dụng<?php /* tag "b" from line 396 */; ?>
<b class="caret"></b></a>
						<?php /* tag "ul" from line 397 */; ?>
<ul class="dropdown-menu">
						<?php /* tag "li" from line 398 */; ?>
<li>
							<?php 
/* tag "a" from line 399 */ ;
if (null !== ($_tmp_2 = ('/thu-lao'))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
>Quản lý Điểm Thù Lao</a>
						</li>		
						<?php /* tag "li" from line 401 */; ?>
<li>
							<?php 
/* tag "a" from line 402 */ ;
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
/* tag "li" from line 406 */ ;
if (null !== ($_tmp_1 = ($ctx->ActiveItem=='LibraryAlbum'?'active':'?'))):  ;
$_tmp_1 = ' class="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<li<?php echo $_tmp_1 ?>
><?php /* tag "a" from line 406 */; ?>
<a href="/thu-vien-anh">Ảnh hoạt động</a></li>							
				<?php 
/* tag "li" from line 407 */ ;
if (null !== ($_tmp_2 = ($ctx->ActiveItem=='Contact'?'active':'?'))):  ;
$_tmp_2 = ' class="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<li<?php echo $_tmp_2 ?>
><?php /* tag "a" from line 407 */; ?>
<a href="/lien-he">Liên hệ</a></li>							
				<?php 
/* tag "li" from line 408 */ ;
if (null !== ($_tmp_4 = ($ctx->ActiveItem=='Admin'?'active':'?'))):  ;
$_tmp_4 = ' class="'.phptal_escape($_tmp_4).'"' ;
else:  ;
$_tmp_4 = '' ;
endif ;
?>
<li<?php echo $_tmp_4 ?>
><?php /* tag "a" from line 408 */; ?>
<a href="/signin/load">Quản trị</a></li>							
			</ul>
		</div>
		<?php /* tag "div" from line 411 */; ?>
<div class="row reset-margin">			
			<?php /* tag "div" from line 412 */; ?>
<div class="span6  reset-margin">
				<?php /* tag "div" from line 413 */; ?>
<div class="f-left">
					<?php /* tag "p" from line 414 */; ?>
<p><?php /* tag "b" from line 414 */; ?>
<b>© 11/2013 Phòng Kỹ Thuật Thể Hiện</b></p>
					<?php /* tag "p" from line 415 */; ?>
<p>Biên tập - Trưởng Phòng: Nguyễn Quang Phương</p>
					<?php /* tag "p" from line 416 */; ?>
<p>Phát triển - Kỹ Thuật: Nguyễn Thanh Bảo</p>					
				</div>
			</div>
			<?php /* tag "div" from line 419 */; ?>
<div class="span6 pull-right reset-margin">
				<?php /* tag "div" from line 420 */; ?>
<div class="f-right">
					<?php /* tag "p" from line 421 */; ?>
<p><?php /* tag "b" from line 421 */; ?>
<b>Địa chỉ:</b> 50 Phạm Thái Bường Phường 4, TP Vĩnh Long</p>
					<?php /* tag "p" from line 422 */; ?>
<p><?php /* tag "b" from line 422 */; ?>
<b>Điện thoại:</b> (073) 822 345</p>
					<?php /* tag "p" from line 423 */; ?>
<p><?php /* tag "b" from line 423 */; ?>
<b>Email:</b> ktthehienthvl@gmail.com</p>					
				</div>
			</div>
		</div>
	</div><?php 
}

 ?>
<?php 
function tpl_53b76c6e_base__2figzJzrX7LcIBJZrxyOkQ_Popup(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div>
		<?php /* tag "script" from line 304 */; ?>
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
/* tag "div" from line 337 */ ;
if ($ctx->path($ctx->Popup, 'getEnable')):  ;
?>
<div class="ads-popup ads-popup-center">
			<?php /* tag "div" from line 338 */; ?>
<div class="ads-close"><?php /* tag "i" from line 338 */; ?>
<i class="icon-chevron-down icon-white"></i></div>
			<?php /* tag "div" from line 339 */; ?>
<div id="PopupCarousel" class="carousel slide carousel-fade popup-slide reset-margin">
				<?php /* tag "ol" from line 340 */; ?>
<ol class="carousel-indicators">
					<?php /* tag "li" from line 341 */; ?>
<li data-target="#PopupCarousel" data-slide-to="0" class="active"></li>
				</ol>
				<?php /* tag "div" from line 343 */; ?>
<div class="carousel-inner">
					
					<?php /* tag "div" from line 345 */; ?>
<div class="active item">
						<?php 
/* tag "a" from line 346 */ ;
if (null !== ($_tmp_2 = ('#'))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
>
							<?php 
/* tag "img" from line 347 */ ;
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
/* tag "div" from line 351 */ ;
$_tmp_3 = $ctx->repeat ;
$_tmp_3->Sponsor = new PHPTAL_RepeatController($ctx->SponsorAll)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_3->Sponsor as $ctx->Sponsor): ;
?>
<div class="item">
						<?php 
/* tag "a" from line 352 */ ;
if (null !== ($_tmp_4 = ($ctx->path($ctx->Sponsor, 'getURLView')))):  ;
$_tmp_4 = ' href="'.phptal_escape($_tmp_4).'"' ;
else:  ;
$_tmp_4 = '' ;
endif ;
?>
<a<?php echo $_tmp_4 ?>
>
							<?php 
/* tag "img" from line 353 */ ;
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

		<?php /* tag "div" from line 359 */; ?>
<div id="ads-open" class="ads-open-center"><?php /* tag "i" from line 359 */; ?>
<i class="icon-chevron-up icon-white"></i></div>
	</div><?php 
}

 ?>
<?php 
function tpl_53b76c6e_base__2figzJzrX7LcIBJZrxyOkQ_CallendarBox(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div class="box radius">
		<?php /* tag "div" from line 267 */; ?>
<div class="b-title">
			<?php /* tag "div" from line 268 */; ?>
<div class="b-t-icon-content">Hôm Nay</div>
		</div>
		<?php /* tag "div" from line 270 */; ?>
<div class="b-content padding-content">
			<?php /* tag "table" from line 271 */; ?>
<table class="calendar-paper" width="100%" border="0" cellpadding="1" cellspacing="1">
				<?php /* tag "tbody" from line 272 */; ?>
<tbody>
					<?php /* tag "tr" from line 273 */; ?>
<tr><?php /* tag "td" from line 273 */; ?>
<td colspan="2" id="thangduong" class="thangduong"></td></tr>
					<?php /* tag "tr" from line 274 */; ?>
<tr><?php /* tag "td" from line 274 */; ?>
<td colspan="2" id="ngayduong" class="ngayduong"></td></tr>
					<?php /* tag "tr" from line 275 */; ?>
<tr><?php /* tag "td" from line 275 */; ?>
<td colspan="2" id="thuduong" class="thuduong"></td></tr>
					<?php /* tag "tr" from line 276 */; ?>
<tr>
						<?php /* tag "td" from line 277 */; ?>
<td> 
							<?php /* tag "div" from line 278 */; ?>
<div id="thangam" class="thangam"></div>
							<?php /* tag "div" from line 279 */; ?>
<div id="ngayam" class="ngayam"></div>
							<?php /* tag "div" from line 280 */; ?>
<div id="namam" class="namam"></div>
						</td>
						<?php /* tag "td" from line 282 */; ?>
<td class="canchi">
							<?php /* tag "div" from line 283 */; ?>
<div id="canchithang" class="gioam"></div>
							<?php /* tag "div" from line 284 */; ?>
<div id="canchingay" class="gioam"></div>
						</td>
					</tr>
					<?php /* tag "tr" from line 287 */; ?>
<tr><?php /* tag "td" from line 287 */; ?>
<td colspan="2" id="hoangdao" class="hoangdao"></td></tr>
				</tbody>
			</table>
			<?php /* tag "script" from line 290 */; ?>
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
function tpl_53b76c6e_base__2figzJzrX7LcIBJZrxyOkQ_ContactBox(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div class="box">
		<?php /* tag "div" from line 260 */; ?>
<div class="b-content"><?php /* tag "a" from line 260 */; ?>
<a href="/lien-he"><?php /* tag "img" from line 260 */; ?>
<img width="100%" src="/data/images/logo/contact.jpg"/></a></div>
	</div><?php 
}

 ?>
<?php 
function tpl_53b76c6e_base__2figzJzrX7LcIBJZrxyOkQ_FixedFunction(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div class="fixed-function">
		
		<?php /* tag "div" from line 246 */; ?>
<div class="bubble"><?php echo phptal_escape(\MVC\Library\Statistic::getCountPrint()); ?>
</div>
		<?php /* tag "p" from line 247 */; ?>
<p class="bubble-item">Truy cập</p>
		<?php /* tag "div" from line 248 */; ?>
<div class="bubble">
			<?php /* tag "img" from line 249 */; ?>
<img src="/data/images/logo/count_logo.gif"/>
			<?php /* tag "span" from line 250 */; ?>
<span><?php echo phptal_escape(\MVC\Library\Statistic::getOnlinePrint()); ?>
</span>
		</div>
		<?php /* tag "p" from line 252 */; ?>
<p class="bubble-item">Trực tuyến</p>
	</div><?php 
}

 ?>
<?php 
function tpl_53b76c6e_base__2figzJzrX7LcIBJZrxyOkQ_AskBox(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div class="box radius">
		<?php /* tag "div" from line 231 */; ?>
<div class="b-title">
			<?php /* tag "div" from line 232 */; ?>
<div class="b-t-icon-content">Hỏi &amp; Đáp</div>
		</div>
		<?php /* tag "div" from line 234 */; ?>
<div class="b-content">
			<?php /* tag "a" from line 235 */; ?>
<a href="/hoi-dap/dat-cau-hoi">
				<?php /* tag "img" from line 236 */; ?>
<img width="100%" src="/data/images/logo/question.jpg"/>
			</a>
		</div>
	</div><?php 
}

 ?>
<?php 
function tpl_53b76c6e_base__2figzJzrX7LcIBJZrxyOkQ_TopMonkBox(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div class="box radius">
		<?php /* tag "div" from line 211 */; ?>
<div class="b-title">
			<?php /* tag "div" from line 212 */; ?>
<div class="b-t-icon-content">GIẢNG SƯ NỔI BẬT</div>
		</div>
		<?php /* tag "div" from line 214 */; ?>
<div class="b-content">
			<?php /* tag "ul" from line 215 */; ?>
<ul class="grid-item-3 thumbnails reset-margin">
				<?php 
/* tag "li" from line 216 */ ;
$_tmp_4 = $ctx->repeat ;
$_tmp_4->Monk = new PHPTAL_RepeatController($ctx->MonkAll)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_4->Monk as $ctx->Monk): ;
?>
<li class="span2">
					<?php 
/* tag "a" from line 217 */ ;
if (null !== ($_tmp_3 = ($ctx->path($ctx->Monk, 'getURLRead')))):  ;
$_tmp_3 = ' href="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<a<?php echo $_tmp_3 ?>
>
						<?php /* tag "div" from line 218 */; ?>
<div class="thumbnail">
							<?php 
/* tag "img" from line 219 */ ;
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
function tpl_53b76c6e_base__2figzJzrX7LcIBJZrxyOkQ_TopVideoBox(PHPTAL $_thistpl, PHPTAL $tpl) {
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
		<?php /* tag "div" from line 190 */; ?>
<div class="b-title">
			<?php /* tag "div" from line 191 */; ?>
<div class="b-t-icon-content"><?php echo phptal_escape($ctx->path($ctx->Panel, 'getName')); ?>
</div>
		</div>
		<?php /* tag "div" from line 193 */; ?>
<div class="b-content">
			<?php /* tag "ul" from line 194 */; ?>
<ul class="grid-item-2 thumbnails reset-margin">
				<?php 
/* tag "li" from line 195 */ ;
$_tmp_2 = $ctx->repeat ;
$_tmp_2->Category = new PHPTAL_RepeatController($ctx->path($ctx->Panel, 'getDetailAll'))
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_2->Category as $ctx->Category): ;
?>
<li class="span2">
					<?php 
/* tag "a" from line 196 */ ;
if (null !== ($_tmp_3 = ($ctx->path($ctx->Category, 'getCategoryVideo/getURLRead')))):  ;
$_tmp_3 = ' href="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<a<?php echo $_tmp_3 ?>
>
						<?php /* tag "div" from line 197 */; ?>
<div class="thumbnail">
							<?php 
/* tag "img" from line 198 */ ;
if (null !== ($_tmp_4 = ($ctx->path($ctx->Category, 'getCategoryVideo/getPicture')))):  ;
$_tmp_4 = ' src="'.phptal_escape($_tmp_4).'"' ;
else:  ;
$_tmp_4 = '' ;
endif ;
?>
<img<?php echo $_tmp_4 ?>
/>
							<?php /* tag "p" from line 199 */; ?>
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
function tpl_53b76c6e_base__2figzJzrX7LcIBJZrxyOkQ_TopNewsBox(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div class="box radius">
		<?php /* tag "div" from line 165 */; ?>
<div class="b-title">
			<?php /* tag "div" from line 166 */; ?>
<div class="b-t-icon-content">Tin tức nổi bật</div>
		</div>
		<?php /* tag "div" from line 168 */; ?>
<div class="b-content">			
			<?php /* tag "div" from line 169 */; ?>
<div id="BoxNewsCarousel" class="carousel slide sidebar-slide reset-margin">
				<?php /* tag "div" from line 170 */; ?>
<div class="carousel-inner">
					<?php /* tag "div" from line 171 */; ?>
<div class="active item">
						<?php 
/* tag "a" from line 172 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->PanelNewsAll, 'current/getNews/getURLRead')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
>
							<?php 
/* tag "img" from line 173 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->PanelNewsAll, 'current/getNews/getImage')))):  ;
$_tmp_1 = ' src="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<img<?php echo $_tmp_1 ?>
/>
							<?php /* tag "div" from line 174 */; ?>
<div class="carousel-caption">
								<?php /* tag "p" from line 175 */; ?>
<p><?php echo phptal_escape($ctx->path($ctx->PanelNewsAll, 'current/getNews/getTitle')); ?>
</p>
							</div>
						</a>
					</div>					
				</div>
				<?php /* tag "a" from line 180 */; ?>
<a class="carousel-control left" href="#BoxNewsCarousel" data-slide="prev">&lsaquo;</a>
				<?php /* tag "a" from line 181 */; ?>
<a class="carousel-control right" href="#BoxNewsCarousel" data-slide="next">&rsaquo;</a>
			</div>			
		</div>
	</div><?php 
}

 ?>
<?php 
function tpl_53b76c6e_base__2figzJzrX7LcIBJZrxyOkQ_PictureBox(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div class="box radius">
		<?php /* tag "div" from line 151 */; ?>
<div class="b-title">
			<?php /* tag "div" from line 152 */; ?>
<div class="b-t-icon-content">Ảnh Hoạt Động</div>
		</div>
		<?php /* tag "div" from line 154 */; ?>
<div class="b-content">
			<?php /* tag "a" from line 155 */; ?>
<a href="/thu-vien-anh">
				<?php /* tag "img" from line 156 */; ?>
<img width="100%" src="/data/images/logo/top_img.jpg"/>
			</a>
		</div>
	</div><?php 
}

 ?>
<?php 
function tpl_53b76c6e_base__2figzJzrX7LcIBJZrxyOkQ_BuddhaBox(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div class="box radius">
		<?php /* tag "div" from line 124 */; ?>
<div class="b-title">
			<?php /* tag "div" from line 125 */; ?>
<div class="b-t-icon-content">Tổ Chuyên Môn</div>
		</div>
		<?php /* tag "div" from line 127 */; ?>
<div class="b-content">
			<?php /* tag "div" from line 128 */; ?>
<div id="BuddhaCarousel" class="carousel slide carousel-fade sidebar-slide reset-margin">
				
				<?php /* tag "div" from line 130 */; ?>
<div class="carousel-inner">
					<?php /* tag "div" from line 131 */; ?>
<div class="active item">
						<?php /* tag "a" from line 132 */; ?>
<a href="/to-chuyen-mon/kt-dung"><?php /* tag "img" from line 132 */; ?>
<img src="/data/images/logo/kt_dung.jpg"/></a>
					</div>
					<?php /* tag "div" from line 134 */; ?>
<div class="item">
						<?php /* tag "a" from line 135 */; ?>
<a href="/to-chuyen-mon/kt-am-thanh"><?php /* tag "img" from line 135 */; ?>
<img src="/data/images/logo/kt_amthanh.jpg"/></a>
					</div>
					<?php /* tag "div" from line 137 */; ?>
<div class="item">
						<?php /* tag "a" from line 138 */; ?>
<a href="/to-chuyen-mon/do-hoa"><?php /* tag "img" from line 138 */; ?>
<img src="/data/images/logo/dohoa.jpg"/></a>
					</div>
				</div>
				<?php /* tag "a" from line 141 */; ?>
<a class="carousel-control left" href="#BuddhaCarousel" data-slide="prev">&lsaquo;</a>
				<?php /* tag "a" from line 142 */; ?>
<a class="carousel-control right" href="#BuddhaCarousel" data-slide="next">&rsaquo;</a>
			</div>
		</div>
	</div><?php 
}

 ?>
<?php 
function tpl_53b76c6e_base__2figzJzrX7LcIBJZrxyOkQ_CallendarBar(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div class="row reset-margin date-time">
		<?php /* tag "div" from line 111 */; ?>
<div id="date-time" class="span6 fix-width">
			<?php /* tag "script" from line 112 */; ?>
<script type="text/javascript">getLunarDateString(09,11,2012,16,39,13);</script>
		</div>
		<?php /* tag "div" from line 114 */; ?>
<div class="span6 fix-width">
			<?php /* tag "marquee" from line 115 */; ?>
<marquee behavior="scroll" direction="left" scrollamount="2">
				DVE-WEBSITE - Trang thông tin nội bộ của Phòng Kỹ thuật Thể hiện - Đài Phát Thanh - Truyền Hình Vĩnh Long - www.ktthehien.com
			</marquee>
		</div>
	</div><?php 
}

 ?>
<?php 
function tpl_53b76c6e_base__2figzJzrX7LcIBJZrxyOkQ_Header(PHPTAL $_thistpl, PHPTAL $tpl) {
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
if (null !== ($_tmp_1 = ($ctx->ActiveItem=='GroupProfessional'?'active dropdown':'dropdown'))):  ;
$_tmp_1 = ' class="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<li<?php echo $_tmp_1 ?>
>
					<?php /* tag "a" from line 64 */; ?>
<a class="dropdown-toggle" data-toggle="dropdown">Tổ Chuyên Môn<?php /* tag "b" from line 64 */; ?>
<b class="caret"></b></a>
					<?php /* tag "ul" from line 65 */; ?>
<ul class="dropdown-menu">
						<?php /* tag "li" from line 66 */; ?>
<li>
							<?php 
/* tag "a" from line 67 */ ;
if (null !== ($_tmp_2 = ('/to-chuyen-mon/kt-dung'))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
>Kỹ Thuật Dựng</a>							
						</li>
						<?php /* tag "li" from line 69 */; ?>
<li>
							<?php 
/* tag "a" from line 70 */ ;
if (null !== ($_tmp_2 = ('/to-chuyen-mon/kt-am-thanh'))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
>Kỹ Thuật Âm Thanh</a>
						</li>
						<?php /* tag "li" from line 72 */; ?>
<li>
							<?php 
/* tag "a" from line 73 */ ;
if (null !== ($_tmp_2 = ('/to-chuyen-mon/do-hoa'))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
>Đồ Họa</a>
						</li>
					</ul>
				</li>
				<?php 
/* tag "li" from line 77 */ ;
if (null !== ($_tmp_2 = ($ctx->ActiveItem=='ReadCategory'?'active dropdown':'dropdown'))):  ;
$_tmp_2 = ' class="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<li<?php echo $_tmp_2 ?>
>
					<?php /* tag "a" from line 78 */; ?>
<a class="dropdown-toggle" data-toggle="dropdown">Tin tức<?php /* tag "b" from line 78 */; ?>
<b class="caret"></b></a>
					<?php /* tag "ul" from line 79 */; ?>
<ul class="dropdown-menu">
						<?php /* tag "li" from line 80 */; ?>
<li>
							<?php 
/* tag "a" from line 81 */ ;
if (null !== ($_tmp_1 = ('/tin-tuc/tin-dia-phuong'))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
>Tin Địa Phương</a>							
						</li>
						<?php /* tag "li" from line 83 */; ?>
<li>
							<?php 
/* tag "a" from line 84 */ ;
if (null !== ($_tmp_1 = ('/tin-tuc/tin-trong-nuoc'))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
>Tin Trong nước</a>
						</li>
						<?php /* tag "li" from line 86 */; ?>
<li>
							<?php 
/* tag "a" from line 87 */ ;
if (null !== ($_tmp_1 = ('/tin-tuc/tin-the-thao'))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
>Tin Thể Thao</a>
						</li>
					</ul>
				</li>
				<?php 
/* tag "li" from line 91 */ ;
if (null !== ($_tmp_1 = ($ctx->ActiveItem=='Subject'?'active':'?'))):  ;
$_tmp_1 = ' class="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<li<?php echo $_tmp_1 ?>
><?php /* tag "a" from line 91 */; ?>
<a href="/chuyen-de">Chuyên đề</a></li>
				<?php 
/* tag "li" from line 92 */ ;
if (null !== ($_tmp_2 = ($ctx->ActiveItem=='VideoClip'?'active':'?'))):  ;
$_tmp_2 = ' class="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<li<?php echo $_tmp_2 ?>
><?php /* tag "a" from line 92 */; ?>
<a href="/video-clip">Video clip</a></li>				
				<?php 
/* tag "li" from line 93 */ ;
if (null !== ($_tmp_1 = ($ctx->ActiveItem=='GroupAplication'?'active dropdown':'dropdown'))):  ;
$_tmp_1 = ' class="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<li<?php echo $_tmp_1 ?>
>
					<?php /* tag "a" from line 94 */; ?>
<a class="dropdown-toggle" data-toggle="dropdown">Ứng Dụng<?php /* tag "b" from line 94 */; ?>
<b class="caret"></b></a>
						<?php /* tag "ul" from line 95 */; ?>
<ul class="dropdown-menu">
						<?php /* tag "li" from line 96 */; ?>
<li>
							<?php 
/* tag "a" from line 97 */ ;
if (null !== ($_tmp_2 = ('/thu-lao'))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
>Quản lý Điểm Thù Lao</a>
						</li>						
					</ul>
				</li>				
				<?php 
/* tag "li" from line 101 */ ;
if (null !== ($_tmp_2 = ($ctx->ActiveItem=='LibraryAlbum'?'active':'?'))):  ;
$_tmp_2 = ' class="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<li<?php echo $_tmp_2 ?>
><?php /* tag "a" from line 101 */; ?>
<a href="/thu-vien-anh">Ảnh hoạt động</a></li>							
				<?php 
/* tag "li" from line 102 */ ;
if (null !== ($_tmp_1 = ($ctx->ActiveItem=='Contact'?'active':'?'))):  ;
$_tmp_1 = ' class="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<li<?php echo $_tmp_1 ?>
><?php /* tag "a" from line 102 */; ?>
<a href="/lien-he">Liên hệ</a></li>							
			</ul>
		</div>
	</div><?php 
}

 ?>
<?php 
function tpl_53b76c6e_base__2figzJzrX7LcIBJZrxyOkQ_IncludeJS(PHPTAL $_thistpl, PHPTAL $tpl) {
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
function tpl_53b76c6e_base__2figzJzrX7LcIBJZrxyOkQ_IncludeCSS(PHPTAL $_thistpl, PHPTAL $tpl) {
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
function tpl_53b76c6e_base__2figzJzrX7LcIBJZrxyOkQ_IncludeMETA(PHPTAL $_thistpl, PHPTAL $tpl) {
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
<link rel="icon" href="http://www.ktthehien.com/data/images/icon/favicon.ico" type="image/x-icon"/>
	</span><?php 
}

 ?>
<?php 
function tpl_53b76c6e_base__2figzJzrX7LcIBJZrxyOkQ(PHPTAL $tpl, PHPTAL_Context $ctx) {
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
	<?php /* tag "div" from line 110 */; ?>

	<!-- ======================================================================== -->
	<!-- PHẬT ÂM 																  -->
	<!-- ======================================================================== -->
	<?php /* tag "div" from line 123 */; ?>

	
	<!-- ======================================================================== -->
	<!-- ẢNH HOẠT ĐỘNG															  -->
	<!-- ======================================================================== -->
	<?php /* tag "div" from line 150 */; ?>

	
	<!-- ======================================================================== -->
	<!-- TIN TỨC MỚI CẬP NHẬT													  -->
	<!-- ======================================================================== -->
	<?php /* tag "div" from line 164 */; ?>

	
	<!-- ======================================================================== -->
	<!-- VIDEO MỚI CẬP NHẬT														  -->
	<!-- ======================================================================== -->
	<?php /* tag "div" from line 189 */; ?>

	
	<!-- ======================================================================== -->
	<!-- GIẢNG SƯ NỔI BẬT														  -->
	<!-- ======================================================================== -->
	<?php /* tag "div" from line 210 */; ?>

	
	<!-- ======================================================================== -->
	<!-- HỎI - ĐÁP PHẬT HỌC														  -->
	<!-- ======================================================================== -->
	<?php /* tag "div" from line 230 */; ?>

	
	<!-- ======================================================================== -->
	<!-- FIXED FUNCTION															  -->
	<!-- ======================================================================== -->
	<?php /* tag "div" from line 244 */; ?>

	
	
	<!-- ======================================================================== -->
	<!-- LIÊN HỆ																  -->
	<!-- ======================================================================== -->
	<?php /* tag "div" from line 259 */; ?>

	
	<!-- ======================================================================== -->
	<!-- LỊCH																	  -->
	<!-- ======================================================================== -->
	<?php /* tag "div" from line 266 */; ?>

	
	<!-- ======================================================================== -->
	<!-- POPUP QUẢNG CÁO														  -->
	<!-- ======================================================================== -->
	<?php /* tag "div" from line 303 */; ?>

	
	<!-- ======================================================================== -->
	<!-- FOOTER																	  -->
	<!-- ======================================================================== -->
	<?php /* tag "div" from line 365 */; ?>

	
	<!-- ======================================================================== -->
	<!-- BACK ON TOP															  -->
	<!-- ======================================================================== -->
	<?php /* tag "div" from line 432 */; ?>

	
</body>
</html><?php 
/* end */ ;

}

?>
<?php /* 
*** DO NOT EDIT THIS FILE ***

Generated by PHPTAL from D:\AppWebServer\MyCodePHP\kythuatthehien.com\mvc\templates\base.xhtml (edit that file instead) */; ?>