<?php 
function tpl_51879712_macros__x6FYd5UW5CqAyLKo2_POnA_BoxRight(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div>
		<?php /* tag "table" from line 581 */; ?>
<table border="0" cellpadding="0" cellspacing="0" width="335px">
			<?php /* tag "tr" from line 582 */; ?>
<tr><?php /* tag "td" from line 582 */; ?>
<td width="50%" align="left">
				<?php /* tag "div" from line 583 */; ?>
<div class="box-right">
					<?php 
/* tag "a" from line 584 */ ;
$ctx->noThrow(true) ;
if (!phptal_isempty($_tmp_3 = ($ctx->path($ctx->News1, 'getURLRead', true)))):  ;
$_tmp_3 = ' href="'.phptal_escape($_tmp_3).'"' ;
elseif (null !== ($_tmp_3 = ('#'))):  ;
$_tmp_3 = ' href="'.phptal_escape($_tmp_3).'"' ;
endif ;
$ctx->noThrow(false) ;
$ctx->noThrow(true) ;
if (!phptal_isempty($_tmp_2 = ($ctx->path($ctx->News1, 'getTitle', true)))):  ;
$_tmp_2 = ' title="'.phptal_escape($_tmp_2).'"' ;
elseif (null !== ($_tmp_2 = ('Chưa có tiêu đề'))):  ;
$_tmp_2 = ' title="'.phptal_escape($_tmp_2).'"' ;
endif ;
$ctx->noThrow(false) ;
?>
<a<?php echo $_tmp_3 ?>
<?php echo $_tmp_2 ?>
>
						<?php 
/* tag "img" from line 585 */ ;
$ctx->noThrow(true) ;
if (!phptal_isempty($_tmp_1 = ($ctx->path($ctx->News1, 'getImage', true)))):  ;
$_tmp_1 = ' src="'.phptal_escape($_tmp_1).'"' ;
elseif (null !== ($_tmp_1 = ('/data/images/exit_picture.jpg'))):  ;
$_tmp_1 = ' src="'.phptal_escape($_tmp_1).'"' ;
endif ;
$ctx->noThrow(false) ;
?>
<img width="100%" height="124"<?php echo $_tmp_1 ?>
/>
						<?php /* tag "div" from line 586 */; ?>
<div class="box-right-title"><?php 
$ctx->noThrow(true) ;
if (!phptal_isempty($_tmp_1 = $ctx->path($ctx->News1, 'getTitle', true))):  ;
?>
<?php 
echo phptal_escape($_tmp_1) ;
else:  ;
?>
<?php 
echo 'Chưa có tiêu đề' ;
endif ;
$ctx->noThrow(false) ;
?>
</div>
					</a>
				</div>
			</td>
			<?php /* tag "td" from line 590 */; ?>
<td width="50%" align="right">
				<?php /* tag "div" from line 591 */; ?>
<div class="box-right">
					<?php 
/* tag "a" from line 592 */ ;
$ctx->noThrow(true) ;
if (!phptal_isempty($_tmp_1 = ($ctx->path($ctx->News2, 'getURLRead', true)))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
elseif (null !== ($_tmp_1 = ('#'))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
endif ;
$ctx->noThrow(false) ;
$ctx->noThrow(true) ;
if (!phptal_isempty($_tmp_3 = ($ctx->path($ctx->News2, 'getTitle', true)))):  ;
$_tmp_3 = ' title="'.phptal_escape($_tmp_3).'"' ;
elseif (null !== ($_tmp_3 = ('Chưa có tiêu đề'))):  ;
$_tmp_3 = ' title="'.phptal_escape($_tmp_3).'"' ;
endif ;
$ctx->noThrow(false) ;
?>
<a<?php echo $_tmp_1 ?>
<?php echo $_tmp_3 ?>
>
						<?php 
/* tag "img" from line 593 */ ;
$ctx->noThrow(true) ;
if (!phptal_isempty($_tmp_2 = ($ctx->path($ctx->News2, 'getImage', true)))):  ;
$_tmp_2 = ' src="'.phptal_escape($_tmp_2).'"' ;
elseif (null !== ($_tmp_2 = ('/data/images/exit_picture.jpg'))):  ;
$_tmp_2 = ' src="'.phptal_escape($_tmp_2).'"' ;
endif ;
$ctx->noThrow(false) ;
?>
<img width="100%" height="124"<?php echo $_tmp_2 ?>
/>
						<?php /* tag "div" from line 594 */; ?>
<div class="box-right-title"><?php 
$ctx->noThrow(true) ;
if (!phptal_isempty($_tmp_2 = $ctx->path($ctx->News2, 'getTitle', true))):  ;
?>
<?php 
echo phptal_escape($_tmp_2) ;
else:  ;
?>
<?php 
echo 'Chưa có tiêu đề' ;
endif ;
$ctx->noThrow(false) ;
?>
</div>
					</a>
				</div>
			</td></tr>
			<?php /* tag "tr" from line 598 */; ?>
<tr><?php /* tag "td" from line 598 */; ?>
<td width="50%" align="left">
				<?php /* tag "div" from line 599 */; ?>
<div class="box-right">
					<?php 
/* tag "a" from line 600 */ ;
$ctx->noThrow(true) ;
if (!phptal_isempty($_tmp_2 = ($ctx->path($ctx->News3, 'getURLRead', true)))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
elseif (null !== ($_tmp_2 = ('#'))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
endif ;
$ctx->noThrow(false) ;
$ctx->noThrow(true) ;
if (!phptal_isempty($_tmp_1 = ($ctx->path($ctx->News3, 'getTitle', true)))):  ;
$_tmp_1 = ' title="'.phptal_escape($_tmp_1).'"' ;
elseif (null !== ($_tmp_1 = ('Chưa có tiêu đề'))):  ;
$_tmp_1 = ' title="'.phptal_escape($_tmp_1).'"' ;
endif ;
$ctx->noThrow(false) ;
?>
<a<?php echo $_tmp_2 ?>
<?php echo $_tmp_1 ?>
>
						<?php 
/* tag "img" from line 601 */ ;
$ctx->noThrow(true) ;
if (!phptal_isempty($_tmp_3 = ($ctx->path($ctx->News3, 'getImage', true)))):  ;
$_tmp_3 = ' src="'.phptal_escape($_tmp_3).'"' ;
elseif (null !== ($_tmp_3 = ('/data/images/exit_picture.jpg'))):  ;
$_tmp_3 = ' src="'.phptal_escape($_tmp_3).'"' ;
endif ;
$ctx->noThrow(false) ;
?>
<img width="100%" height="124"<?php echo $_tmp_3 ?>
/>
						<?php /* tag "div" from line 602 */; ?>
<div class="box-right-title"><?php 
$ctx->noThrow(true) ;
if (!phptal_isempty($_tmp_3 = $ctx->path($ctx->News3, 'getTitle', true))):  ;
?>
<?php 
echo phptal_escape($_tmp_3) ;
else:  ;
?>
<?php 
echo 'Chưa có tiêu đề' ;
endif ;
$ctx->noThrow(false) ;
?>
</div>
					</a>
				</div>
			</td>
			<?php /* tag "td" from line 606 */; ?>
<td width="50%" align="right">
				<?php /* tag "div" from line 607 */; ?>
<div class="box-right">
					<?php /* tag "a" from line 608 */; ?>
<a href="/intro/1" title="Số phận long đong của &quot;ngôi chùa hoàng tộc&quot; miền Tây">
						<?php 
/* tag "img" from line 609 */ ;
if (null !== ($_tmp_3 = ('/data/images/ChuaKhaiTuong.jpg'))):  ;
$_tmp_3 = ' src="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<img width="100%" height="124"<?php echo $_tmp_3 ?>
/>
						<?php /* tag "div" from line 610 */; ?>
<div class="box-right-title">Số phận long đong của "ngôi chùa hoàng tộc" miền Tây</div>
					</a>
				</div>
			</td></tr>
		</table>
	</div><?php 
}

 ?>
<?php 
function tpl_51879712_macros__x6FYd5UW5CqAyLKo2_POnA_AdminMenu(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div class="manager-menu">
		<?php /* tag "ul" from line 516 */; ?>
<ul>
			<?php 
/* tag "a" from line 517 */ ;
if (null !== ($_tmp_3 = ('/app/course'))):  ;
$_tmp_3 = ' href="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<a<?php echo $_tmp_3 ?>
>
				<?php 
/* tag "li" from line 518 */ ;
if (null !== ($_tmp_2 = ($ctx->ActiveAdmin=='Course'?'menu-select':'?'))):  ;
$_tmp_2 = ' class="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<li<?php echo $_tmp_2 ?>
>					
					<?php /* tag "div" from line 519 */; ?>
<div class="left">ĐÀO TẠO</div>
					<?php /* tag "div" from line 520 */; ?>
<div class="right"><?php echo phptal_escape($ctx->path($ctx->Courses, 'count')); ?>
</div>
				</li>
			</a>
			<?php 
/* tag "a" from line 523 */ ;
if (null !== ($_tmp_1 = ('/app/category/news'))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
>
				<?php 
/* tag "li" from line 524 */ ;
if (null !== ($_tmp_2 = ($ctx->ActiveAdmin=='News'?'menu-select':'?'))):  ;
$_tmp_2 = ' class="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<li<?php echo $_tmp_2 ?>
>
					<?php /* tag "div" from line 525 */; ?>
<div class="left">CHUYÊN MỤC TIN TỨC</div>
					<?php /* tag "div" from line 526 */; ?>
<div class="right"><?php echo phptal_escape($ctx->path($ctx->CategoriesNews, 'count')); ?>
</div>
				</li>
			</a>
			<?php 
/* tag "a" from line 529 */ ;
if (null !== ($_tmp_3 = ('/app/category/video'))):  ;
$_tmp_3 = ' href="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<a<?php echo $_tmp_3 ?>
>
				<?php 
/* tag "li" from line 530 */ ;
if (null !== ($_tmp_2 = ($ctx->ActiveAdmin=='Video'?'menu-select':'?'))):  ;
$_tmp_2 = ' class="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<li<?php echo $_tmp_2 ?>
>
					<?php /* tag "div" from line 531 */; ?>
<div class="left">CHUYÊN MỤC VIDEO</div>
					<?php /* tag "div" from line 532 */; ?>
<div class="right"><?php echo phptal_escape($ctx->path($ctx->CategoriesVideo, 'count')); ?>
</div>
				</li>
			</a>
			<?php 
/* tag "a" from line 535 */ ;
if (null !== ($_tmp_1 = ('/app/category/ask'))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
>
				<?php 
/* tag "li" from line 536 */ ;
if (null !== ($_tmp_2 = ($ctx->ActiveAdmin=='Ask'?'menu-select':'?'))):  ;
$_tmp_2 = ' class="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<li<?php echo $_tmp_2 ?>
>
					<?php /* tag "div" from line 537 */; ?>
<div class="left">CHUYÊN MỤC HỎI ĐÁP</div>
					<?php /* tag "div" from line 538 */; ?>
<div class="right"><?php echo phptal_escape($ctx->path($ctx->CategoriesAsk, 'count')); ?>
</div>
				</li>
			</a>
			<?php 
/* tag "a" from line 541 */ ;
if (null !== ($_tmp_3 = ('/app/monk'))):  ;
$_tmp_3 = ' href="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<a<?php echo $_tmp_3 ?>
>
				<?php 
/* tag "li" from line 542 */ ;
if (null !== ($_tmp_2 = ($ctx->ActiveAdmin=='Monk'?'menu-select':'?'))):  ;
$_tmp_2 = ' class="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<li<?php echo $_tmp_2 ?>
>
					<?php /* tag "div" from line 543 */; ?>
<div class="left">DANH SÁCH GIẢNG SƯ</div>
					<?php /* tag "div" from line 544 */; ?>
<div class="right"><?php echo phptal_escape($ctx->path($ctx->Monks, 'count')); ?>
</div>
				</li>
			</a>
			<?php 
/* tag "a" from line 547 */ ;
if (null !== ($_tmp_1 = ('/app/event'))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
>
				<?php 
/* tag "li" from line 548 */ ;
if (null !== ($_tmp_2 = ($ctx->ActiveAdmin=='Event'?'menu-select':'?'))):  ;
$_tmp_2 = ' class="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<li<?php echo $_tmp_2 ?>
>
					<?php /* tag "div" from line 549 */; ?>
<div class="left">DANH SÁCH SỰ KIỆN</div>
					<?php /* tag "div" from line 550 */; ?>
<div class="right"><?php echo phptal_escape($ctx->path($ctx->Events, 'count')); ?>
</div>
				</li>
			</a>
			<?php 
/* tag "a" from line 553 */ ;
if (null !== ($_tmp_3 = ('/app/pagoda'))):  ;
$_tmp_3 = ' href="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<a<?php echo $_tmp_3 ?>
>
				<?php 
/* tag "li" from line 554 */ ;
if (null !== ($_tmp_2 = ($ctx->ActiveAdmin=='Pagoda'?'menu-select':'?'))):  ;
$_tmp_2 = ' class="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<li<?php echo $_tmp_2 ?>
>
					<?php /* tag "div" from line 555 */; ?>
<div class="left">DANH SÁCH CHÙA</div>
					<?php /* tag "div" from line 556 */; ?>
<div class="right"><?php echo phptal_escape($ctx->path($ctx->Pagodas, 'count')); ?>
</div>
				</li>
			</a>
			<?php 
/* tag "a" from line 559 */ ;
if (null !== ($_tmp_1 = ('/app/album'))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
>
				<?php 
/* tag "li" from line 560 */ ;
if (null !== ($_tmp_2 = ($ctx->ActiveAdmin=='Album'?'menu-select':'?'))):  ;
$_tmp_2 = ' class="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<li<?php echo $_tmp_2 ?>
>
					<?php /* tag "div" from line 561 */; ?>
<div class="left">DANH SÁCH ALBUM</div>
					<?php /* tag "div" from line 562 */; ?>
<div class="right"><?php echo phptal_escape($ctx->path($ctx->Albums, 'count')); ?>
</div>
				</li>
			</a>
			<?php 
/* tag "a" from line 565 */ ;
if (null !== ($_tmp_3 = ('/app/sponsor'))):  ;
$_tmp_3 = ' href="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<a<?php echo $_tmp_3 ?>
>
				<?php 
/* tag "li" from line 566 */ ;
if (null !== ($_tmp_2 = ($ctx->ActiveAdmin=='Sponsor'?'menu-select':'?'))):  ;
$_tmp_2 = ' class="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<li<?php echo $_tmp_2 ?>
>
					<?php /* tag "div" from line 567 */; ?>
<div class="left">SỔ VÀNG ỦNG HỘ</div>
					<?php /* tag "div" from line 568 */; ?>
<div class="right"><?php echo '0'; ?>
</div>
				</li>
			</a>
			<?php 
/* tag "a" from line 571 */ ;
if (null !== ($_tmp_1 = ('/app/config'))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
>
				<?php 
/* tag "li" from line 572 */ ;
if (null !== ($_tmp_2 = ($ctx->ActiveAdmin=='Statistic'?'menu-select':'?'))):  ;
$_tmp_2 = ' class="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<li<?php echo $_tmp_2 ?>
>
					CẤU HÌNH
				</li>
			</a>			
		</ul>
	</div><?php 
}

 ?>
<?php 
function tpl_51879712_macros__x6FYd5UW5CqAyLKo2_POnA_Footer(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div id="footer">
		<?php /* tag "div" from line 482 */; ?>
<div id="bottom-menu">
			<?php /* tag "ul" from line 483 */; ?>
<ul class="top-nav">
				<?php /* tag "li" from line 484 */; ?>
<li><?php /* tag "a" from line 484 */; ?>
<a href="/home">Trang chủ</a></li>								
				<?php /* tag "li" from line 485 */; ?>
<li><?php /* tag "a" from line 485 */; ?>
<a href="/news">Tin tức</a></li>
				<?php /* tag "li" from line 486 */; ?>
<li><?php /* tag "a" from line 486 */; ?>
<a href="/course">Đào tạo</a></li>
				<?php /* tag "li" from line 487 */; ?>
<li><?php /* tag "a" from line 487 */; ?>
<a href="/event">Sự kiện</a></li>				
				<?php /* tag "li" from line 488 */; ?>
<li><?php /* tag "a" from line 488 */; ?>
<a href="/library/video">PHẬT ÂM</a></li>
				<?php /* tag "li" from line 489 */; ?>
<li><?php /* tag "a" from line 489 */; ?>
<a href="/ask/2/ins/load">Hỏi đáp</a></li>				
				<?php /* tag "li" from line 490 */; ?>
<li><?php /* tag "a" from line 490 */; ?>
<a href="/library/album">Ảnh hoạt động</a></li>
				<?php /* tag "li" from line 491 */; ?>
<li><?php /* tag "a" from line 491 */; ?>
<a href="/pagoda">Danh bạ</a></li>				
				<?php /* tag "li" from line 492 */; ?>
<li><?php /* tag "a" from line 492 */; ?>
<a href="/contact">Liên hệ</a></li>
				<?php /* tag "li" from line 493 */; ?>
<li id="last"><?php /* tag "a" from line 493 */; ?>
<a href="/signin/load">Quản trị</a></li>
			</ul>
		</div>
		<?php /* tag "div" from line 496 */; ?>
<div id="copy-right">
			<?php /* tag "div" from line 497 */; ?>
<div><?php /* tag "b" from line 497 */; ?>
<b>© 12/2012 Chùa Khải Tường</b></div>
			<?php /* tag "div" from line 498 */; ?>
<div>Biên tập - Đại Đức Thích Nhuận Tâm</div>
			<?php /* tag "div" from line 499 */; ?>
<div>Phát triển - SPN Co, Ltd &amp; Nguyên Phong ICT</div>
			<?php /* tag "div" from line 500 */; ?>
<div>Ghi rõ nguồn <?php /* tag "b" from line 500 */; ?>
<b><?php /* tag "i" from line 500 */; ?>
<i>chuakhaituong.com</i></b> khi phát hành thông tin từ website này</div>
		</div>
		<?php /* tag "div" from line 502 */; ?>
<div id="add-contact">
			<?php /* tag "div" from line 503 */; ?>
<div><?php /* tag "b" from line 503 */; ?>
<b>Chùa Khải Tường</b>, Số 319B2, ấp Mỹ Phú, xã Mỹ Đức Đông, Cái Bè, Tiền Giang, Việt Nam</div>
			<?php /* tag "div" from line 504 */; ?>
<div><?php /* tag "b" from line 504 */; ?>
<b>Điện thoại:</b> (073) 3600 943 - <?php /* tag "b" from line 504 */; ?>
<b>Di Động:</b> 0918 852 102</div>
			<?php /* tag "div" from line 505 */; ?>
<div><?php /* tag "b" from line 505 */; ?>
<b>Email:</b> nhuantamkhaituong@gmail.com (nhuantam@chuakhaituong.com)</div>
			<?php /* tag "div" from line 506 */; ?>
<div><?php /* tag "b" from line 506 */; ?>
<b>Website:</b> 
				<?php /* tag "a" from line 507 */; ?>
<a href="http://chuakhaituong.com">http://chuakhaituong.com</a> 
				<?php /* tag "small" from line 508 */; ?>
<small>(<?php /* tag "a" from line 508 */; ?>
<a href="http://quocankhaituongtu.com">http://quocankhaituongtu.com</a> -
				<?php /* tag "a" from line 509 */; ?>
<a href="http://chuaquocankhaituong.vn">http://chuaquocankhaituong.vn</a>)</small>
			</div>
		</div>
	</div><?php 
}

 ?>
<?php 
function tpl_51879712_macros__x6FYd5UW5CqAyLKo2_POnA_CountBoxMini(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div id="count" class="sidebar-box-mini">
		<?php /* tag "div" from line 451 */; ?>
<div class="box-title">
			<?php /* tag "img" from line 452 */; ?>
<img src="/data/images/icon.png" width="30"/>
			<?php /* tag "span" from line 453 */; ?>
<span>Thống kê</span>
		</div>
		<?php /* tag "div" from line 455 */; ?>
<div class="sidebar-box-content">
			<?php /* tag "div" from line 456 */; ?>
<div style="padding:10px; line-height:25px; font-size:12px">
				<?php /* tag "table" from line 457 */; ?>
<table border="0" cellpadding="0" cellspacing="0" width="100%"><?php /* tag "tr" from line 457 */; ?>
<tr>
					<?php /* tag "td" from line 458 */; ?>
<td width="55%" align="left">
						<?php /* tag "div" from line 459 */; ?>
<div style="color:#980707; font-size:13px;">
							<?php /* tag "span" from line 460 */; ?>
<span><?php /* tag "b" from line 460 */; ?>
<b>Online: </b></span>
							<?php /* tag "span" from line 461 */; ?>
<span><?php echo phptal_escape(\MVC\Library\Statistic::getOnlinePrint()); ?>
</span>
							<?php /* tag "br" from line 462 */; ?>
<br/>
							<?php /* tag "span" from line 463 */; ?>
<span><?php /* tag "b" from line 463 */; ?>
<b>Truy cập: </b></span>
							<?php /* tag "span" from line 464 */; ?>
<span><?php echo phptal_escape(\MVC\Library\Statistic::getCountPrint()); ?>
</span>
							<?php /* tag "span" from line 465 */; ?>
<span> lượt</span>
						</div>
					</td>
					<?php /* tag "td" from line 468 */; ?>
<td width="45%" align="left">
						<?php /* tag "a" from line 469 */; ?>
<a href="online" style="color: #980707;">
							<?php /* tag "img" from line 470 */; ?>
<img src="/data/images/online_logo.png" width="80px"/>
							<?php /* tag "div" from line 471 */; ?>
<div>G.lưu trực tuyến</div>
						</a>
					</td>
				</tr></table>
			</div>
		</div>
		<?php /* tag "div" from line 477 */; ?>
<div class="clear"></div>
	</div><?php 
}

 ?>
<?php 
function tpl_51879712_macros__x6FYd5UW5CqAyLKo2_POnA_CountBox(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div id="count" class="sidebar-box">
		<?php /* tag "div" from line 417 */; ?>
<div class="box-title">
			<?php /* tag "img" from line 418 */; ?>
<img src="/data/images/icon.png" width="30"/>
			<?php /* tag "span" from line 419 */; ?>
<span>Trực tuyến</span>
		</div>
		<?php /* tag "div" from line 421 */; ?>
<div class="sidebar-box-content">
			<?php /* tag "div" from line 422 */; ?>
<div style="padding:10px; line-height:25px; font-size:12px">
				<?php /* tag "table" from line 423 */; ?>
<table border="0" cellpadding="0" cellspacing="0" width="100%"><?php /* tag "tr" from line 423 */; ?>
<tr>
					<?php /* tag "td" from line 424 */; ?>
<td width="40%" align="center">
						<?php /* tag "a" from line 425 */; ?>
<a href="online" style="color: #980707;">
							<?php /* tag "img" from line 426 */; ?>
<img src="/data/images/online_logo.png" width="80px"/>
							<?php /* tag "h4" from line 427 */; ?>
<h4>Giao lưu trực tuyến</h4>
						</a>
					</td>
					<?php /* tag "td" from line 430 */; ?>
<td width="60%" align="left">
						<?php /* tag "div" from line 431 */; ?>
<div style="color:#980707; font-size:12px; margin-left:20px;">
							<?php /* tag "div" from line 432 */; ?>
<div style="text-align:center; font-size:12px;">Website được thành lập vào <?php /* tag "b" from line 432 */; ?>
<b>12/2012</b></div>
							<?php /* tag "hr" from line 433 */; ?>
<hr style="border-color:#980707; margin:5px;"/>
							<?php /* tag "span" from line 434 */; ?>
<span><?php /* tag "img" from line 434 */; ?>
<img src="/data/images/user_online_logo.png"/> <?php /* tag "b" from line 434 */; ?>
<b>Online: </b></span>
							<?php /* tag "span" from line 435 */; ?>
<span><?php echo phptal_escape(\MVC\Library\Statistic::getOnlinePrint()); ?>
</span>
							<?php /* tag "br" from line 436 */; ?>
<br/>
							<?php /* tag "span" from line 437 */; ?>
<span><?php /* tag "img" from line 437 */; ?>
<img src="/data/images/count_logo.gif"/> <?php /* tag "b" from line 437 */; ?>
<b>Truy cập: </b></span>
							<?php /* tag "span" from line 438 */; ?>
<span><?php echo phptal_escape(\MVC\Library\Statistic::getCountPrint()); ?>
</span>
							<?php /* tag "span" from line 439 */; ?>
<span> lượt</span>
						</div>
					</td>
				</tr>
				</table>
			</div>
		</div>
		<?php /* tag "div" from line 446 */; ?>
<div class="clear"></div>
	</div><?php 
}

 ?>
<?php 
function tpl_51879712_macros__x6FYd5UW5CqAyLKo2_POnA_SponsorBoxMini(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div id="count" class="sidebar-box-mini">
		<?php /* tag "div" from line 400 */; ?>
<div class="box-title">
			<?php /* tag "img" from line 401 */; ?>
<img src="/data/images/icon.png" width="30"/>
			<?php /* tag "span" from line 402 */; ?>
<span>Trợ duyên</span>
		</div>
		<?php /* tag "div" from line 404 */; ?>
<div class="sidebar-box-content">
			<?php /* tag "div" from line 405 */; ?>
<div align="center" style="padding:10px;">
				<?php /* tag "a" from line 406 */; ?>
<a href="/sponsor" style="color: #980707;">
					<?php /* tag "img" from line 407 */; ?>
<img src="/data/images/sponsor_logo.gif" width="120px"/>
					<?php /* tag "h3" from line 408 */; ?>
<h3>Ủng Hộ Website</h3>
				</a>
			</div>
		</div>
		<?php /* tag "div" from line 412 */; ?>
<div class="clear"></div>
	</div><?php 
}

 ?>
<?php 
function tpl_51879712_macros__x6FYd5UW5CqAyLKo2_POnA_SponsorBox(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div id="emty2" class="sidebar-box">
		<?php /* tag "div" from line 375 */; ?>
<div class="box-title">
			<?php /* tag "img" from line 376 */; ?>
<img src="/data/images/icon.png" width="30"/>
			<?php /* tag "span" from line 377 */; ?>
<span>Trợ duyên</span>
		</div>
		<?php /* tag "div" from line 379 */; ?>
<div class="sidebar-box-content">
			<?php /* tag "div" from line 380 */; ?>
<div align="center" style="padding:10px;">
				<?php /* tag "table" from line 381 */; ?>
<table border="0" cellpadding="0" cellspacing="0" width="100%"><?php /* tag "tr" from line 381 */; ?>
<tr>
					<?php /* tag "td" from line 382 */; ?>
<td width="50%" align="center">
						<?php /* tag "a" from line 383 */; ?>
<a href="/sponsor" style="color: #980707;">
							<?php /* tag "img" from line 384 */; ?>
<img src="/data/images/sponsor_logo.gif" width="150px"/>
						</a>
					</td>
					<?php /* tag "td" from line 387 */; ?>
<td width="50%" align="center">
						<?php /* tag "a" from line 388 */; ?>
<a href="/sponsor" style="color:#980707; line-height:40px;">
							<?php /* tag "h1" from line 389 */; ?>
<h1>Ủng Hộ Website</h1>
						</a>
					</td>
				</tr></table>
			</div>
		</div>
		<?php /* tag "div" from line 395 */; ?>
<div class="clear"></div>
	</div><?php 
}

 ?>
<?php 
function tpl_51879712_macros__x6FYd5UW5CqAyLKo2_POnA_TextGo(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div id="text-go">
		<?php /* tag "marquee" from line 370 */; ?>
<marquee>Kính chúc chư tôn đức tăng ni cùng quý phật tử thân tâm thường an lạc ! Nguyện đem công đức này hướng về khắp tất cả đệ tử và chúng sanh điều trọn thành Phật Đạo.</marquee>
	</div><?php 
}

 ?>
<?php 
function tpl_51879712_macros__x6FYd5UW5CqAyLKo2_POnA_DateTimeBox(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div id="date-time">
		<?php /* tag "script" from line 363 */; ?>
<script type="text/javascript">				
			getLunarDateString(09,11,2012,16,39,13);									
		</script>
	</div><?php 
}

 ?>
<?php 
function tpl_51879712_macros__x6FYd5UW5CqAyLKo2_POnA_CallendarBoxMini(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div id="calendar" class="sidebar-box-mini">
		<?php /* tag "div" from line 340 */; ?>
<div class="box-title">
			<?php /* tag "img" from line 341 */; ?>
<img src="/data/images/icon.png" width="30"/>
			<?php /* tag "span" from line 342 */; ?>
<span>Lịch Âm Dương</span>
		</div>
		<?php /* tag "div" from line 344 */; ?>
<div class="sidebar-box-content">
			<?php /* tag "div" from line 345 */; ?>
<div align="center">
				<?php /* tag "script" from line 346 */; ?>
<script type="text/javascript">				
					function viewSelectedMonth() {
						setOutputSize("");
						var s = printSelectedMonth();
						document.open();
						document.writeln(s);
						document.close();
					}
					viewSelectedMonth();				
				</script>
			</div>
		</div>
		<?php /* tag "div" from line 358 */; ?>
<div class="clear"></div>
	</div><?php 
}

 ?>
<?php 
function tpl_51879712_macros__x6FYd5UW5CqAyLKo2_POnA_CallendarBox(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div id="calendar" class="sidebar-box">
		<?php /* tag "div" from line 318 */; ?>
<div class="box-title">
			<?php /* tag "img" from line 319 */; ?>
<img src="/data/images/icon.png" width="30"/>
			<?php /* tag "span" from line 320 */; ?>
<span>Lịch Dương <?php /* tag "small" from line 320 */; ?>
<small>Âm</small></span>
		</div>
		<?php /* tag "div" from line 322 */; ?>
<div class="sidebar-box-content">
			<?php /* tag "div" from line 323 */; ?>
<div align="center">
				<?php /* tag "script" from line 324 */; ?>
<script type="text/javascript">				
					function viewSelectedMonth() {
						setOutputSize("small");
						var s = printSelectedMonth();
						document.open();
						document.writeln(s);
						document.close();
					}
					viewSelectedMonth();				
				</script>
			</div>
		</div>
		<?php /* tag "div" from line 336 */; ?>
<div class="clear"></div>
	</div><?php 
}

 ?>
<?php 
function tpl_51879712_macros__x6FYd5UW5CqAyLKo2_POnA_AdsBox(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div id="ads" class="ads-box">
		<?php /* tag "table" from line 287 */; ?>
<table border="0" cellspacing="5" cellpadding="0" width="100%">
			<?php /* tag "tbody" from line 288 */; ?>
<tbody>
				<?php /* tag "tr" from line 289 */; ?>
<tr>
					<?php /* tag "td" from line 290 */; ?>
<td align="center" colspan="2">
						<?php /* tag "a" from line 291 */; ?>
<a href="/ads">
							<?php /* tag "img" from line 292 */; ?>
<img width="300" src="/data/images/ads_images/NguyenPhongCard.jpg"/>
						</a>
					</td>
				</tr>
				<?php /* tag "tr" from line 296 */; ?>
<tr>
					<?php /* tag "td" from line 297 */; ?>
<td align="center">
						<?php /* tag "img" from line 298 */; ?>
<img src="/data/images/quangcao.jpg" width="150"/>
					</td>
					<?php /* tag "td" from line 300 */; ?>
<td align="center">
						<?php /* tag "img" from line 301 */; ?>
<img src="/data/images/quangcao.jpg" width="150"/>
					</td>
				</tr>
				<?php /* tag "tr" from line 304 */; ?>
<tr>
					<?php /* tag "td" from line 305 */; ?>
<td align="center">
						<?php /* tag "img" from line 306 */; ?>
<img src="/data/images/quangcao.jpg" width="150"/>
					</td>
					<?php /* tag "td" from line 308 */; ?>
<td align="center">
						<?php /* tag "img" from line 309 */; ?>
<img src="/data/images/quangcao.jpg" width="150"/>
					</td>
				</tr>						
			</tbody>
		</table>
	</div><?php 
}

 ?>
<?php 
function tpl_51879712_macros__x6FYd5UW5CqAyLKo2_POnA_AskBoxMini(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div id="question" class="sidebar-box-mini">
		<?php /* tag "div" from line 270 */; ?>
<div class="box-title">
			<?php /* tag "img" from line 271 */; ?>
<img src="/data/images/icon.png" width="30"/>
			<?php /* tag "span" from line 272 */; ?>
<span>Hỏi đáp PHẬT HỌC</span>
		</div>
		<?php /* tag "div" from line 274 */; ?>
<div class="sidebar-box-content">
			<?php /* tag "div" from line 275 */; ?>
<div align="center" style="padding:10px;">
				<?php /* tag "a" from line 276 */; ?>
<a href="/ask" style="color: #980707;">
					<?php /* tag "img" from line 277 */; ?>
<img src="/data/images/question_logo.png"/>
					<?php /* tag "div" from line 278 */; ?>
<div>Hỏi đáp PHẬT HỌC</div>
				</a>
			</div>
		</div>
		<?php /* tag "div" from line 282 */; ?>
<div class="clear"></div>
	</div><?php 
}

 ?>
<?php 
function tpl_51879712_macros__x6FYd5UW5CqAyLKo2_POnA_AskBox(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div id="question" class="sidebar-box">
		<?php /* tag "div" from line 245 */; ?>
<div class="box-title">
			<?php /* tag "img" from line 246 */; ?>
<img src="/data/images/icon.png" width="30"/>
			<?php /* tag "span" from line 247 */; ?>
<span>Hỏi đáp PHẬT HỌC</span>
		</div>
		<?php /* tag "div" from line 249 */; ?>
<div class="sidebar-box-content">
			<?php /* tag "div" from line 250 */; ?>
<div align="center" style="padding:10px;">
				<?php /* tag "table" from line 251 */; ?>
<table border="0" cellpadding="0" cellspacing="0" width="100%"><?php /* tag "tr" from line 251 */; ?>
<tr>
					<?php /* tag "td" from line 252 */; ?>
<td width="50%" align="center">
						<?php /* tag "a" from line 253 */; ?>
<a href="/ask/1" style="color: #980707;">
							<?php /* tag "img" from line 254 */; ?>
<img src="/data/images/question_logo.jpg" width="120px"/>
						</a>
					</td>
					<?php /* tag "td" from line 257 */; ?>
<td width="50%" align="center">
						<?php /* tag "a" from line 258 */; ?>
<a href="/ask/1" style="color: #980707; line-height:35px;">
							<?php /* tag "h3" from line 259 */; ?>
<h3>Hỏi <?php /* tag "small" from line 259 */; ?>
<small>&amp; </small>Đáp</h3>
							<?php /* tag "h1" from line 260 */; ?>
<h1>PHẬT HỌC</h1>
						</a>
					</td>
				</tr></table>
			</div>
		</div>
		<?php /* tag "div" from line 266 */; ?>
<div class="clear"></div>
	</div><?php 
}

 ?>
<?php 
function tpl_51879712_macros__x6FYd5UW5CqAyLKo2_POnA_VideoBox(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div id="phatam" class="sidebar-box">
		<?php /* tag "div" from line 220 */; ?>
<div class="box-title">
			<?php /* tag "img" from line 221 */; ?>
<img src="/data/images/icon.png" width="30"/>
			<?php /* tag "span" from line 222 */; ?>
<span>PHẬT ÂM</span>
		</div>
		<?php /* tag "div" from line 224 */; ?>
<div class="sidebar-box-content">
			<?php /* tag "div" from line 225 */; ?>
<div align="center" style="padding:10px;">
				<?php /* tag "table" from line 226 */; ?>
<table border="0" cellpadding="0" cellspacing="0" width="100%"><?php /* tag "tr" from line 226 */; ?>
<tr>
					<?php /* tag "td" from line 227 */; ?>
<td width="50%" align="center">
						<?php /* tag "a" from line 228 */; ?>
<a href="/library/video">
							<?php /* tag "img" from line 229 */; ?>
<img src="/data/images/phatam_logo.gif" width="150px"/>
						</a>
					</td>
					<?php /* tag "td" from line 232 */; ?>
<td width="50%" align="center">
						<?php /* tag "a" from line 233 */; ?>
<a href="/library/video" style="color:#980707; line-height:30px;">
							<?php /* tag "h3" from line 234 */; ?>
<h3>Giới thiệu trang chia sẻ PHẬT ÂM lớn &amp; phổ biến nhất</h3>
						</a>
					</td>
				</tr></table>
			</div>
		</div>
		<?php /* tag "div" from line 240 */; ?>
<div class="clear"></div>
	</div><?php 
}

 ?>
<?php 
function tpl_51879712_macros__x6FYd5UW5CqAyLKo2_POnA_CourseBox(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div id="emty" class="sidebar-box">
		<?php 
/* tag "div" from line 172 */ ;
if (!($ctx->Course)):  ;
?>
<div id="CourseBox" class="box-title">
			<?php /* tag "img" from line 173 */; ?>
<img src="/data/images/icon.png" width="30"/>
			<?php /* tag "span" from line 174 */; ?>
<span>CHƯA CÓ LỚP NÀO SẮP KHAI GIẢNG</span>
		</div><?php endif; ?>

		<?php 
/* tag "div" from line 176 */ ;
if ($ctx->path($ctx->Course, 'getLessionNext')):  ;
?>
<div>
			<?php 
/* tag "div" from line 177 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Course, 'getLessionNext/getDateEnd')))):  ;
$_tmp_1 = ' alt="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<div id="CourseBox" class="box-title"<?php echo $_tmp_1 ?>
>
				<?php /* tag "img" from line 178 */; ?>
<img src="/data/images/icon.png" width="30"/>
				<?php /* tag "span" from line 179 */; ?>
<span>SẮP KHAI GIẢNG</span>
			</div>
		</div><?php endif; ?>

		<?php 
/* tag "div" from line 182 */ ;
if ($ctx->Course):  ;
?>
<div class="sidebar-box-content">
			<?php /* tag "div" from line 183 */; ?>
<div align="center" style="padding-top:10px;">
				<?php 
/* tag "a" from line 184 */ ;
$ctx->noThrow(true) ;
if (!phptal_isempty($_tmp_3 = ($ctx->path($ctx->Course, 'getLessionNext/getURLRead', true)))):  ;
$_tmp_3 = ' href="'.phptal_escape($_tmp_3).'"' ;
elseif (null !== ($_tmp_3 = ('/home'))):  ;
$_tmp_3 = ' href="'.phptal_escape($_tmp_3).'"' ;
endif ;
$ctx->noThrow(false) ;
?>
<a<?php echo $_tmp_3 ?>
>
					<?php 
/* tag "img" from line 185 */ ;
$ctx->noThrow(true) ;
if (!phptal_isempty($_tmp_2 = ($ctx->path($ctx->Course, 'getLessionNext/getImage', true)))):  ;
$_tmp_2 = ' src="'.phptal_escape($_tmp_2).'"' ;
elseif (null !== ($_tmp_2 = ('/data/images/temp.jpg'))):  ;
$_tmp_2 = ' src="'.phptal_escape($_tmp_2).'"' ;
endif ;
$ctx->noThrow(false) ;
?>
<img width="300"<?php echo $_tmp_2 ?>
/>
				</a>
			</div>
			<?php /* tag "div" from line 188 */; ?>
<div align="center" style="padding:10px;">
				<?php 
/* tag "a" from line 189 */ ;
$ctx->noThrow(true) ;
if (!phptal_isempty($_tmp_1 = ($ctx->path($ctx->Course, 'getLessionNext/getURLRead', true)))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
elseif (null !== ($_tmp_1 = ('/home'))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
endif ;
$ctx->noThrow(false) ;
?>
<a style="font-size:12px; color:#980707; line-height:30px;"<?php echo $_tmp_1 ?>
>
					<?php /* tag "h1" from line 190 */; ?>
<h1><?php 
$ctx->noThrow(true) ;
if (!phptal_isempty($_tmp_2 = $ctx->path($ctx->Course, 'getLessionNext/getName', true))):  ;
?>
<?php 
echo phptal_escape($_tmp_2) ;
else:  ;
?>
<?php 
echo 'Không lớp nào kế tiếp' ;
endif ;
$ctx->noThrow(false) ;
?>
</h1>
				</a>
			</div>
			<?php /* tag "div" from line 193 */; ?>
<div style="margin-left:10px;">
				<?php /* tag "div" from line 194 */; ?>
<div id="CourseCountdown"></div>
			</div>
			<?php /* tag "script" from line 196 */; ?>
<script type="text/javascript">
				/*<![CDATA[*/
				$(function() {
					var d1 = $("#CourseBox").attr('alt');
					var parts = d1.match(/(\d+)/g);					
					var d2 = new Date(parts[0], parts[1]-1, parts[2]); // months are 0-based
					var austDay = new Date();
					austDay = new Date(austDay.getFullYear() + 1, 1 - 1, 26);
					$('#CourseCountdown').countdown({until: d2});
				});
				/*]]>*/
			</script>
			<?php /* tag "div" from line 208 */; ?>
<div class="clear"></div>
		</div><?php endif; ?>

		<?php 
/* tag "div" from line 210 */ ;
if (!($ctx->Course)):  ;
?>
<div class="sidebar-box-content">
			<?php 
/* tag "div" from line 211 */ ;
if (!($ctx->Course)):  ;
?>
<div id="CourseBox" class="box-title">
			<?php /* tag "img" from line 212 */; ?>
<img src="/data/images/icon.png" width="30"/>
			<?php /* tag "span" from line 213 */; ?>
<span>CHƯA CÓ LỚP NÀO SẮP KHAI GIẢNG</span>
		</div><?php endif; ?>

		</div><?php endif; ?>

	</div><?php 
}

 ?>
<?php 
function tpl_51879712_macros__x6FYd5UW5CqAyLKo2_POnA_EventBoxMini(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div id="emty" class="sidebar-box-mini">
		<?php 
/* tag "div" from line 139 */ ;
if (null !== ($_tmp_3 = ($ctx->path($ctx->Event, 'getDate')))):  ;
$_tmp_3 = ' alt="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<div id="Event" class="box-title"<?php echo $_tmp_3 ?>
>
			<?php /* tag "img" from line 140 */; ?>
<img src="/data/images/icon.png" width="30"/>
			<?php /* tag "span" from line 141 */; ?>
<span>Sự kiện sắp xảy ra</span>
		</div>
		<?php /* tag "div" from line 143 */; ?>
<div class="sidebar-box-content">
			<?php /* tag "div" from line 144 */; ?>
<div align="center" style="height:30px; padding-top:10px; margin-bottom:30px;">
				<?php 
/* tag "a" from line 145 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Event, 'getURLRead')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a style="font-size:15px; color:#980707; line-height:30px;"<?php echo $_tmp_2 ?>
>
					<?php /* tag "h3" from line 146 */; ?>
<h3><?php echo phptal_escape($ctx->path($ctx->Event, 'getTitle')); ?>
</h3>
				</a>
			</div>
			<?php /* tag "div" from line 149 */; ?>
<div style="margin-left:-3px;">
				<?php /* tag "div" from line 150 */; ?>
<div id="defaultCountdown"></div>
			</div>
			<?php /* tag "script" from line 152 */; ?>
<script type="text/javascript">
				/*<![CDATA[*/
				$(function() {
					var d1 = $("#Event").attr('alt');
					var parts = d1.match(/(\d+)/g);
					// new Date(year, month [, date [, hours[, minutes[, seconds[, ms]]]]])
					var d2 = new Date(parts[0], parts[1]-1, parts[2]); // months are 0-based
					var austDay = new Date();
					austDay = new Date(austDay.getFullYear() + 1, 1 - 1, 26);
					$('#defaultCountdown').countdown({until: d2});
					$('#defaultCountdown1').countdown({until: d2});
				});
				/*]]>*/
			</script>
			<?php /* tag "div" from line 166 */; ?>
<div class="clear"></div>
		</div>
	</div><?php 
}

 ?>
<?php 
function tpl_51879712_macros__x6FYd5UW5CqAyLKo2_POnA_EventBox(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div id="emty" class="sidebar-box">
		<?php 
/* tag "div" from line 90 */ ;
if ($ctx->Event):  ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Event, 'getDate')))):  ;
$_tmp_1 = ' alt="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<div id="Event" class="box-title"<?php echo $_tmp_1 ?>
>
			<?php /* tag "img" from line 91 */; ?>
<img src="/data/images/icon.png" width="30"/>
			<?php /* tag "span" from line 92 */; ?>
<span>Sự kiện sắp xảy ra</span>
		</div><?php endif; ?>

		<?php 
/* tag "div" from line 94 */ ;
if (!($ctx->Event)):  ;
?>
<div id="Event" class="box-title">
			<?php /* tag "img" from line 95 */; ?>
<img src="/data/images/icon.png" width="30"/>
			<?php /* tag "span" from line 96 */; ?>
<span>Sự kiện sắp xảy ra</span>
		</div><?php endif; ?>

		<?php 
/* tag "div" from line 98 */ ;
if ($ctx->Event):  ;
?>
<div class="sidebar-box-content">
			<?php /* tag "div" from line 99 */; ?>
<div align="center" style="padding-top:10px;">
				<?php 
/* tag "a" from line 100 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Event, 'getURLRead')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
>
					<?php 
/* tag "img" from line 101 */ ;
if (null !== ($_tmp_3 = ($ctx->path($ctx->Event, 'getImage')))):  ;
$_tmp_3 = ' src="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<img width="300"<?php echo $_tmp_3 ?>
/>
				</a>
			</div>
			<?php /* tag "div" from line 104 */; ?>
<div align="center" style="padding:10px;">
				<?php 
/* tag "a" from line 105 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Event, 'getURLRead')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a style="font-size:12px; color:#980707; line-height:30px;"<?php echo $_tmp_1 ?>
>
					<?php /* tag "h1" from line 106 */; ?>
<h1><?php echo phptal_escape($ctx->path($ctx->Event, 'getTitle')); ?>
</h1>
				</a>
			</div>
			<?php /* tag "div" from line 109 */; ?>
<div style="margin-left:10px;">
				<?php /* tag "div" from line 110 */; ?>
<div id="defaultCountdown"></div>
			</div>
			<?php /* tag "script" from line 112 */; ?>
<script type="text/javascript">
				/*<![CDATA[*/
				$(function() {
					var d1 = $("#Event").attr('alt');
					var parts = d1.match(/(\d+)/g);
					// new Date(year, month [, date [, hours[, minutes[, seconds[, ms]]]]])
					var d2 = new Date(parts[0], parts[1]-1, parts[2]); // months are 0-based
					var austDay = new Date();
					austDay = new Date(austDay.getFullYear() + 1, 1 - 1, 26);
					$('#defaultCountdown').countdown({until: d2});
					$('#defaultCountdown1').countdown({until: d2});
				});
				/*]]>*/
			</script>
			<?php /* tag "div" from line 126 */; ?>
<div class="clear"></div>
		</div><?php endif; ?>

		<?php 
/* tag "div" from line 128 */ ;
if (!($ctx->Event)):  ;
?>
<div class="sidebar-box-content">
			<?php /* tag "div" from line 129 */; ?>
<div align="center" style="padding-top:10px;">
				<?php /* tag "p" from line 130 */; ?>
<p>SẮP CÓ SỰ KIỆN</p>
			</div>
			
			<?php /* tag "div" from line 133 */; ?>
<div class="clear"></div>
		</div><?php endif; ?>

	</div><?php 
}

 ?>
<?php 
function tpl_51879712_macros__x6FYd5UW5CqAyLKo2_POnA_Header(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div id="header">
		<?php /* tag "div" from line 32 */; ?>
<div id="logo">
			<?php /* tag "a" from line 33 */; ?>
<a href="/intro/1">
				<?php /* tag "img" from line 34 */; ?>
<img src="/data/images/logo.jpg" width="500px" height="165px" border="0"/>
			</a>
		</div>
		<?php /* tag "div" from line 37 */; ?>
<div id="banner">
			<?php /* tag "a" from line 38 */; ?>
<a href="/intro/2">
				<?php /* tag "img" from line 39 */; ?>
<img src="/data/images/banner.jpg" width="500px" height="165px" border="0"/>
			</a>
		</div>
		<?php /* tag "div" from line 42 */; ?>
<div class="clear"></div>
		<?php /* tag "div" from line 43 */; ?>
<div id="menu-top">
			<?php /* tag "ul" from line 44 */; ?>
<ul class="top-nav">
				<?php 
/* tag "li" from line 45 */ ;
if (null !== ($_tmp_1 = ($ctx->ActiveItem=='Home'?'current':'?'))):  ;
$_tmp_1 = ' class="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<li<?php echo $_tmp_1 ?>
><?php /* tag "a" from line 45 */; ?>
<a href="/home">Trang chủ</a></li>
				<?php 
/* tag "li" from line 46 */ ;
if (null !== ($_tmp_1 = ($ctx->ActiveItem=='Introduction'?'current':'?'))):  ;
$_tmp_1 = ' class="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<li<?php echo $_tmp_1 ?>
><?php /* tag "a" from line 46 */; ?>
<a href="/intro">Giới thiệu</a></li>
				<?php 
/* tag "li" from line 47 */ ;
if (null !== ($_tmp_1 = ($ctx->ActiveItem=='ReadCategory'?'current':'?'))):  ;
$_tmp_1 = ' class="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<li<?php echo $_tmp_1 ?>
>
					<?php /* tag "a" from line 48 */; ?>
<a style="cursor:pointer;">Tin tức</a>
					<?php /* tag "ul" from line 49 */; ?>
<ul class="sub-menu">
						<?php 
/* tag "li" from line 50 */ ;
$_tmp_2 = $ctx->repeat ;
$_tmp_2->Category = new PHPTAL_RepeatController($ctx->CategoriesNews)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_2->Category as $ctx->Category): ;
?>
<li>
							<?php 
/* tag "a" from line 51 */ ;
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
/* tag "li" from line 55 */ ;
if (null !== ($_tmp_3 = ($ctx->ActiveItem=='Course'?'current':'?'))):  ;
$_tmp_3 = ' class="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<li<?php echo $_tmp_3 ?>
><?php /* tag "a" from line 55 */; ?>
<a href="/course">Đào tạo</a></li>
				<?php 
/* tag "li" from line 56 */ ;
if (null !== ($_tmp_2 = ($ctx->ActiveItem=='Event'?'current':'?'))):  ;
$_tmp_2 = ' class="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<li<?php echo $_tmp_2 ?>
><?php /* tag "a" from line 56 */; ?>
<a href="/event">Sự kiện</a></li>
				<?php 
/* tag "li" from line 57 */ ;
if (null !== ($_tmp_1 = ($ctx->ActiveItem=='LibraryVideo'?'current':'?'))):  ;
$_tmp_1 = ' class="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<li<?php echo $_tmp_1 ?>
><?php /* tag "a" from line 57 */; ?>
<a href="/library/video">PHẬT ÂM</a></li>
				<?php 
/* tag "li" from line 58 */ ;
if (null !== ($_tmp_3 = ($ctx->ActiveItem=='Ask'?'current':'?'))):  ;
$_tmp_3 = ' class="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<li<?php echo $_tmp_3 ?>
>
					<?php /* tag "a" from line 59 */; ?>
<a style="cursor:pointer;">Hỏi đáp</a>
					<?php /* tag "ul" from line 60 */; ?>
<ul class="sub-menu">
						<?php /* tag "li" from line 61 */; ?>
<li>
							<?php 
/* tag "a" from line 62 */ ;
if (null !== ($_tmp_2 = ('/ask/2/ins/load'))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
>Đặt câu hỏi</a>
						</li>
						<?php 
/* tag "li" from line 64 */ ;
$_tmp_1 = $ctx->repeat ;
$_tmp_1->Category = new PHPTAL_RepeatController($ctx->CategoriesAsk)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->Category as $ctx->Category): ;
?>
<li>
							<?php 
/* tag "a" from line 65 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Category, 'getURLRead')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
><?php echo phptal_escape($ctx->path($ctx->Category, 'getName')); ?>
</a>
						</li><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

					</ul>
				</li>	
				<?php 
/* tag "li" from line 69 */ ;
if (null !== ($_tmp_2 = ($ctx->ActiveItem=='LibraryAlbum'?'current':'?'))):  ;
$_tmp_2 = ' class="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<li<?php echo $_tmp_2 ?>
><?php /* tag "a" from line 69 */; ?>
<a href="/library/album">Ảnh hoạt động</a></li>
				<?php 
/* tag "li" from line 70 */ ;
if (null !== ($_tmp_1 = ($ctx->ActiveItem=='Pagoda'?'current':'?'))):  ;
$_tmp_1 = ' class="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<li<?php echo $_tmp_1 ?>
>
					<?php /* tag "a" from line 71 */; ?>
<a style="cursor:pointer;">Danh bạ Chùa</a>
					<?php /* tag "ul" from line 72 */; ?>
<ul class="sub-menu">
						<?php 
/* tag "li" from line 73 */ ;
$_tmp_3 = $ctx->repeat ;
$_tmp_3->Pagoda = new PHPTAL_RepeatController($ctx->Pagodas)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_3->Pagoda as $ctx->Pagoda): ;
?>
<li>
							<?php 
/* tag "a" from line 74 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Pagoda, 'getURLRead')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
><?php echo phptal_escape($ctx->path($ctx->Pagoda, 'getName')); ?>
</a>
						</li><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

					</ul>
				</li>
				<?php 
/* tag "li" from line 78 */ ;
if (null !== ($_tmp_2 = ($ctx->ActiveItem=='Sponsor'?'current':'?'))):  ;
$_tmp_2 = ' class="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<li id="last"<?php echo $_tmp_2 ?>
>
					<?php /* tag "a" from line 79 */; ?>
<a href="/sponsor">Sổ Vàng</a>
				</li>
				<?php 
/* tag "li" from line 81 */ ;
if (null !== ($_tmp_3 = ($ctx->ActiveItem=='Contact'?'current':'?'))):  ;
$_tmp_3 = ' class="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<li id="last"<?php echo $_tmp_3 ?>
>
					<?php /* tag "a" from line 82 */; ?>
<a href="/contact">Liên hệ</a>
				</li>
			</ul>
		</div>
	</div><?php 
}

 ?>
<?php 
function tpl_51879712_macros__x6FYd5UW5CqAyLKo2_POnA_IncludeJS(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<span>
		<?php /* tag "script" from line 22 */; ?>
<script type="text/javascript" language="javascript" src="/mvc/templates/script/library/jquery-1.7.1.min.js"></script>
		<?php /* tag "script" from line 23 */; ?>
<script type="text/javascript" language="javascript" src="/mvc/templates/script/library/jquery.countdown.js"></script>
		<?php /* tag "script" from line 24 */; ?>
<script type="text/javascript" language="javascript" src="/mvc/templates/script/library/amlich-hnd.js"></script>
		
		<?php /* tag "script" from line 26 */; ?>
<script type="text/javascript" language="javascript" src="/mvc/templates/script/user/Home.js"></script>
		<?php /* tag "script" from line 27 */; ?>
<script type="text/javascript" language="javascript" src="/mvc/templates/script/user/SigninLoad.js"></script>		
	</span><?php 
}

 ?>
<?php 
function tpl_51879712_macros__x6FYd5UW5CqAyLKo2_POnA_IncludeCSS(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<span>
		<?php /* tag "title" from line 5 */; ?>
<title><?php echo 'Chùa Khải Tường'; ?>
</title>
		<?php /* tag "BASE" from line 6 */; ?>
<BASE href="http://chuakhaituong.123app.net"/>
		<?php /* tag "meta" from line 7 */; ?>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
		<?php /* tag "meta" from line 8 */; ?>
<meta http-equiv="X-UA-Compatible" content="IE=9"/>
		<?php /* tag "meta" from line 9 */; ?>
<meta http-equiv="Pragma" content="no-cache"/>
		<?php /* tag "meta" from line 10 */; ?>
<meta http-equiv="Expires" content="-1"/>
		<?php /* tag "meta" from line 11 */; ?>
<meta http-equiv="Cache-Control" content="no-cache"/>
		<?php /* tag "meta" from line 12 */; ?>
<meta name="keywords" content="Chùa Khải Tường"/>
		<?php /* tag "meta" from line 13 */; ?>
<meta name="description" content="Website Chùa Khải Tường giới thiệu về một ngôi chùa ở Số 319B2, ấp Mỹ Phú, xã Mỹ Đức Đông, Cái Bè, Tiền Giang, Việt Nam"/>
		<?php /* tag "meta" from line 14 */; ?>
<meta name="page-topic" content="Chùa Khải Tường"/>
		<?php /* tag "meta" from line 15 */; ?>
<meta name="Abstract" content="Website Chùa Khải Tường giới thiệu về một ngôi chùa ở Số 319B2, ấp Mỹ Phú, xã Mỹ Đức Đông, Cái Bè, Tiền Giang, Việt Nam"/>
		<?php /* tag "meta" from line 16 */; ?>
<meta name="classification" content="Chùa Khải Tường, thiết kế Web, SPN, Nguyên Phong, quay phim, chụp hình"/>
		<?php /* tag "link" from line 17 */; ?>
<link rel="icon" type="image/png" href="/data/images/icon.png"/>
		<?php /* tag "link" from line 18 */; ?>
<link rel="stylesheet" type="text/css" href="/mvc/templates/theme/base/layout.css"/>
		<?php /* tag "link" from line 19 */; ?>
<link rel="stylesheet" type="text/css" href="/mvc/templates/theme/base/jquery.countdown.css"/> 
	</span><?php 
}

 ?>
<?php 
function tpl_51879712_macros__x6FYd5UW5CqAyLKo2_POnA(PHPTAL $tpl, PHPTAL_Context $ctx) {
$_thistpl = $tpl ;
$_translator = $tpl->getTranslator() ;
/* tag "documentElement" from line 1 */ ;
/* tag "html" from line 1 */ ;
?>
<html lang="en" xml:lang="en">
<?php /* tag "body" from line 2 */; ?>
<body>
	<!-- ĐỊNH NGHĨA THƯ VIỆN CSS JAVASCRIPT -->
	<?php /* tag "span" from line 4 */; ?>

	<?php /* tag "span" from line 21 */; ?>

	
	<!-- HEADER -->
	<?php /* tag "div" from line 31 */; ?>

	
	<!-- EVENT BOX -->
	<?php /* tag "div" from line 89 */; ?>

	
	<!-- EVENT BOX MINI -->
	<?php /* tag "div" from line 138 */; ?>

	
	<!-- COURSE BOX -->
	<?php /* tag "div" from line 171 */; ?>


	<!-- PHATAM BOX Ở CỘT 2 -->
	<?php /* tag "div" from line 219 */; ?>

	
	<!-- QUESTION BOX Ở CỘT 2 -->
	<?php /* tag "div" from line 244 */; ?>

	
	<?php /* tag "div" from line 269 */; ?>

		
	<!-- ADS BOX Ở CỘT 2 -->
	<?php /* tag "div" from line 286 */; ?>

		
	<!-- CALENDAR BOX Ở CỘT 2 -->
	<?php /* tag "div" from line 317 */; ?>

	
	<?php /* tag "div" from line 339 */; ?>

	
	<!-- DATE TIME BOX -->
	<?php /* tag "div" from line 362 */; ?>

	
	<!-- TEXT GO -->
	<?php /* tag "div" from line 369 */; ?>

	
	<!-- SPONSOR BOX -->
	<?php /* tag "div" from line 374 */; ?>

	
	<!-- SPONSOR BOX MINI -->
	<?php /* tag "div" from line 399 */; ?>

	
	<!-- COUNT BOX Ở CỘT 2 -->
	<?php /* tag "div" from line 416 */; ?>

		
	<!-- COUNT MINI BOX Ở CỘT 3 -->
	<?php /* tag "div" from line 450 */; ?>

	
	<!-- FOOTER Ở DƯỚI TRANG -->
	<?php /* tag "div" from line 481 */; ?>

	
	<!-- ADMIN MENU -->
	<?php /* tag "div" from line 515 */; ?>


	<!-- BOX RIGHT -->
	<?php /* tag "div" from line 580 */; ?>

</body>
</html><?php 
/* end */ ;

}

?>
<?php /* 
*** DO NOT EDIT THIS FILE ***

Generated by PHPTAL from E:\AppWebServer\chuakhaituong.123app.net\mvc\templates\macros.xhtml (edit that file instead) */; ?>