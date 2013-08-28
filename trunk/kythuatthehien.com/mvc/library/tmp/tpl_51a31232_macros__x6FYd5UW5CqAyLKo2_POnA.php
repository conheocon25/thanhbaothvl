<?php 
function tpl_51a31232_macros__x6FYd5UW5CqAyLKo2_POnA_NorthBox(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div class="sidebar-box">
		<?php /* tag "div" from line 637 */; ?>
<div class="box-title">
			<?php /* tag "img" from line 638 */; ?>
<img src="/data/images/icon.png" width="30"/>
			<?php /* tag "span" from line 639 */; ?>
<span>Phật Giáo Bắc Tông</span>
		</div>
		<?php /* tag "div" from line 641 */; ?>
<div style="text-align:center;">
			<?php /* tag "a" from line 642 */; ?>
<a href="/library/video/1">
				<?php /* tag "img" from line 643 */; ?>
<img width="100%" height="250" src="/data/images/bac_tong.jpg"/>
			</a>
		</div>
		<?php /* tag "div" from line 646 */; ?>
<div class="clear"></div>
	</div><?php 
}

 ?>
<?php 
function tpl_51a31232_macros__x6FYd5UW5CqAyLKo2_POnA_SouthBox(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div class="sidebar-box">
		<?php /* tag "div" from line 621 */; ?>
<div class="box-title">
			<?php /* tag "img" from line 622 */; ?>
<img src="/data/images/icon.png" width="30"/>
			<?php /* tag "span" from line 623 */; ?>
<span>Phật Giáo Nam Tông</span>
		</div>
		<?php /* tag "div" from line 625 */; ?>
<div style="text-align:center; padding:5px 5px 1px 5px; background-color:black;">
			<?php /* tag "a" from line 626 */; ?>
<a href="/library/video/2">
				<?php /* tag "img" from line 627 */; ?>
<img width="50%" height="250" src="/data/images/nam_tong.jpg"/>
			</a>
		</div>
		<?php /* tag "div" from line 630 */; ?>
<div class="clear"></div>
	</div><?php 
}

 ?>
<?php 
function tpl_51a31232_macros__x6FYd5UW5CqAyLKo2_POnA_TopPictureBox(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div class="sidebar-box">
		<?php /* tag "div" from line 605 */; ?>
<div class="box-title">
			<?php /* tag "img" from line 606 */; ?>
<img src="/data/images/icon.png" width="30"/>
			<?php /* tag "span" from line 607 */; ?>
<span>Ảnh Hoạt Động</span>
		</div>
		<?php /* tag "div" from line 609 */; ?>
<div style="text-align:center; padding:5px 5px 1px 5px;">
			<?php /* tag "a" from line 610 */; ?>
<a href="/library/album">
				<?php /* tag "img" from line 611 */; ?>
<img width="100%" src="/data/images/top_img.jpg"/>
			</a>
		</div>
		<?php /* tag "div" from line 614 */; ?>
<div class="clear"></div>
	</div><?php 
}

 ?>
<?php 
function tpl_51a31232_macros__x6FYd5UW5CqAyLKo2_POnA_BoxRightCategorys(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div class="sidebar-box">
		<?php /* tag "div" from line 585 */; ?>
<div class="box-title">
			<?php /* tag "img" from line 586 */; ?>
<img src="/data/images/icon.png" width="30"/>
			<?php /* tag "span" from line 587 */; ?>
<span>Những Chuyen Muc Video</span>
		</div>
		<?php /* tag "div" from line 589 */; ?>
<div class="BoxListNews">
			<?php /* tag "ul" from line 590 */; ?>
<ul>
				<?php 
/* tag "li" from line 591 */ ;
$_tmp_3 = $ctx->repeat ;
$_tmp_3->Category = new PHPTAL_RepeatController($ctx->CategorysArray)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_3->Category as $ctx->Category): ;
?>
<li class="subli">				
					<?php 
/* tag "a" from line 592 */ ;
$ctx->noThrow(true) ;
if (!phptal_isempty($_tmp_2 = ($ctx->path($ctx->Category, 'getVLTop/current/getURLView', true)))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
elseif (null !== ($_tmp_2 = ('#'))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
endif ;
$ctx->noThrow(false) ;
$ctx->noThrow(true) ;
if (!phptal_isempty($_tmp_1 = ($ctx->path($ctx->Category, 'getVLTop/current/getVideo/getName', true)))):  ;
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
/* tag "img" from line 593 */ ;
$ctx->noThrow(true) ;
if (!phptal_isempty($_tmp_4 = ($ctx->path($ctx->Category, 'getVLTop/current/getVideo/getURLImage', true)))):  ;
$_tmp_4 = ' src="'.phptal_escape($_tmp_4).'"' ;
elseif (null !== ($_tmp_4 = ('/data/images/exit_picture.jpg'))):  ;
$_tmp_4 = ' src="'.phptal_escape($_tmp_4).'"' ;
endif ;
$ctx->noThrow(false) ;
?>
<img<?php echo $_tmp_4 ?>
/>								
						<?php /* tag "span" from line 594 */; ?>
<span class="BoxListNewsName"><?php 
$ctx->noThrow(true) ;
if (!phptal_isempty($_tmp_4 = $ctx->path($ctx->Category, 'getVLTop/current/getCategory/getName', true))):  ;
?>
<?php 
echo phptal_escape($_tmp_4) ;
else:  ;
?>
<?php 
echo 'Chưa có tiêu đề' ;
endif ;
$ctx->noThrow(false) ;
?>
</span>						
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
function tpl_51a31232_macros__x6FYd5UW5CqAyLKo2_POnA_TopVideoBox(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div class="sidebar-box">
		<?php /* tag "div" from line 571 */; ?>
<div class="box-title">
			<?php /* tag "img" from line 572 */; ?>
<img src="/data/images/icon.png" width="30"/>
			<?php /* tag "span" from line 573 */; ?>
<span>Những Video Nổi Bật</span>
		</div>
		<?php 
/* tag "div" from line 575 */ ;
$_tmp_4 = $ctx->repeat ;
$_tmp_4->Category = new PHPTAL_RepeatController($ctx->PanelCategoriesVideo)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_4->Category as $ctx->Category): ;
?>
<div class="box-right">
			<?php 
/* tag "a" from line 576 */ ;
$ctx->noThrow(true) ;
if (!phptal_isempty($_tmp_2 = ($ctx->path($ctx->Category, 'getCategoryVideo/getURLRead', true)))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
elseif (null !== ($_tmp_2 = ('#'))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
endif ;
$ctx->noThrow(false) ;
$ctx->noThrow(true) ;
if (!phptal_isempty($_tmp_1 = ($ctx->path($ctx->Category, 'getCategoryVideo/getName', true)))):  ;
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
/* tag "img" from line 577 */ ;
$ctx->noThrow(true) ;
if (!phptal_isempty($_tmp_3 = ($ctx->path($ctx->Category, 'getCategoryVideo/getPicture', true)))):  ;
$_tmp_3 = ' src="'.phptal_escape($_tmp_3).'"' ;
elseif (null !== ($_tmp_3 = ('/data/images/exit_picture.jpg'))):  ;
$_tmp_3 = ' src="'.phptal_escape($_tmp_3).'"' ;
endif ;
$ctx->noThrow(false) ;
?>
<img width="100%" height="124"<?php echo $_tmp_3 ?>
/>
				<?php /* tag "div" from line 578 */; ?>
<div class="box-right-title"><?php 
$ctx->noThrow(true) ;
if (!phptal_isempty($_tmp_3 = $ctx->path($ctx->Category, 'getCategoryVideo/getName', true))):  ;
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
		</div><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

		<?php /* tag "div" from line 581 */; ?>
<div class="clear"></div>
	</div><?php 
}

 ?>
<?php 
function tpl_51a31232_macros__x6FYd5UW5CqAyLKo2_POnA_BoxRight(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div class="sidebar-box">
		<?php /* tag "div" from line 554 */; ?>
<div class="box-title">
			<?php /* tag "img" from line 555 */; ?>
<img src="/data/images/icon.png" width="30"/>
			<?php /* tag "span" from line 556 */; ?>
<span>Những Tin Tức Mới Cập Nhật</span>
		</div>
		<?php 
/* tag "div" from line 558 */ ;
$_tmp_3 = $ctx->repeat ;
$_tmp_3->TopNews = new PHPTAL_RepeatController($ctx->PanelNews)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_3->TopNews as $ctx->TopNews): ;
?>
<div class="box-right">
			<?php 
/* tag "a" from line 559 */ ;
$ctx->noThrow(true) ;
if (!phptal_isempty($_tmp_2 = ($ctx->path($ctx->TopNews, 'getNews/getURLRead', true)))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
elseif (null !== ($_tmp_2 = ('#'))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
endif ;
$ctx->noThrow(false) ;
$ctx->noThrow(true) ;
if (!phptal_isempty($_tmp_1 = ($ctx->path($ctx->TopNews, 'getNews/getTitle', true)))):  ;
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
/* tag "img" from line 560 */ ;
$ctx->noThrow(true) ;
if (!phptal_isempty($_tmp_4 = ($ctx->path($ctx->TopNews, 'getNews/getImage', true)))):  ;
$_tmp_4 = ' src="'.phptal_escape($_tmp_4).'"' ;
elseif (null !== ($_tmp_4 = ('/data/images/exit_picture.jpg'))):  ;
$_tmp_4 = ' src="'.phptal_escape($_tmp_4).'"' ;
endif ;
$ctx->noThrow(false) ;
?>
<img width="100%" height="124"<?php echo $_tmp_4 ?>
/>
				<?php /* tag "div" from line 561 */; ?>
<div class="box-right-title"><?php 
$ctx->noThrow(true) ;
if (!phptal_isempty($_tmp_4 = $ctx->path($ctx->TopNews, 'getNews/getTitle', true))):  ;
?>
<?php 
echo phptal_escape($_tmp_4) ;
else:  ;
?>
<?php 
echo 'Chưa có tiêu đề' ;
endif ;
$ctx->noThrow(false) ;
?>
</div>
			</a>
		</div><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

		<?php /* tag "div" from line 564 */; ?>
<div class="clear"></div>
	</div><?php 
}

 ?>
<?php 
function tpl_51a31232_macros__x6FYd5UW5CqAyLKo2_POnA_AdminMenu(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div class="manager-menu">
		<?php /* tag "ul" from line 474 */; ?>
<ul>
			<?php 
/* tag "a" from line 475 */ ;
if (null !== ($_tmp_3 = ('/app/course'))):  ;
$_tmp_3 = ' href="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<a<?php echo $_tmp_3 ?>
>
				<?php 
/* tag "li" from line 476 */ ;
if (null !== ($_tmp_2 = ($ctx->ActiveAdmin=='Course'?'menu-select':'?'))):  ;
$_tmp_2 = ' class="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<li<?php echo $_tmp_2 ?>
>					
					<?php /* tag "div" from line 477 */; ?>
<div class="left">ĐÀO TẠO</div>
					<?php /* tag "div" from line 478 */; ?>
<div class="right"><?php echo phptal_escape($ctx->path($ctx->Courses, 'count')); ?>
</div>
				</li>
			</a>
			<?php 
/* tag "a" from line 481 */ ;
if (null !== ($_tmp_1 = ('/app/category/news'))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
>
				<?php 
/* tag "li" from line 482 */ ;
if (null !== ($_tmp_2 = ($ctx->ActiveAdmin=='News'?'menu-select':'?'))):  ;
$_tmp_2 = ' class="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<li<?php echo $_tmp_2 ?>
>
					<?php /* tag "div" from line 483 */; ?>
<div class="left">CHUYÊN MỤC TIN TỨC</div>
					<?php /* tag "div" from line 484 */; ?>
<div class="right"><?php echo phptal_escape($ctx->path($ctx->CategoriesNews, 'count')); ?>
</div>
				</li>
			</a>
			<?php 
/* tag "a" from line 487 */ ;
if (null !== ($_tmp_3 = ('/app/category/video'))):  ;
$_tmp_3 = ' href="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<a<?php echo $_tmp_3 ?>
>
				<?php 
/* tag "li" from line 488 */ ;
if (null !== ($_tmp_2 = ($ctx->ActiveAdmin=='Video'?'menu-select':'?'))):  ;
$_tmp_2 = ' class="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<li<?php echo $_tmp_2 ?>
>
					<?php /* tag "div" from line 489 */; ?>
<div class="left">CHUYÊN MỤC VIDEO</div>
					<?php /* tag "div" from line 490 */; ?>
<div class="right"><?php echo phptal_escape($ctx->path($ctx->CategoriesVideo, 'count')); ?>
</div>
				</li>
			</a>
			<?php 
/* tag "a" from line 493 */ ;
if (null !== ($_tmp_1 = ('/app/category/ask'))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
>
				<?php 
/* tag "li" from line 494 */ ;
if (null !== ($_tmp_2 = ($ctx->ActiveAdmin=='Ask'?'menu-select':'?'))):  ;
$_tmp_2 = ' class="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<li<?php echo $_tmp_2 ?>
>
					<?php /* tag "div" from line 495 */; ?>
<div class="left">CHUYÊN MỤC HỎI ĐÁP</div>
					<?php /* tag "div" from line 496 */; ?>
<div class="right"><?php echo phptal_escape($ctx->path($ctx->CategoriesAsk, 'count')); ?>
</div>
				</li>
			</a>
			<?php 
/* tag "a" from line 499 */ ;
if (null !== ($_tmp_3 = ('/app/monk'))):  ;
$_tmp_3 = ' href="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<a<?php echo $_tmp_3 ?>
>
				<?php 
/* tag "li" from line 500 */ ;
if (null !== ($_tmp_2 = ($ctx->ActiveAdmin=='Monk'?'menu-select':'?'))):  ;
$_tmp_2 = ' class="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<li<?php echo $_tmp_2 ?>
>
					<?php /* tag "div" from line 501 */; ?>
<div class="left">DANH SÁCH GIẢNG SƯ</div>
					<?php /* tag "div" from line 502 */; ?>
<div class="right"><?php echo phptal_escape($ctx->path($ctx->Monks, 'count')); ?>
</div>
				</li>
			</a>
			<?php 
/* tag "a" from line 505 */ ;
if (null !== ($_tmp_1 = ('/app/event'))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
>
				<?php 
/* tag "li" from line 506 */ ;
if (null !== ($_tmp_2 = ($ctx->ActiveAdmin=='Event'?'menu-select':'?'))):  ;
$_tmp_2 = ' class="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<li<?php echo $_tmp_2 ?>
>
					<?php /* tag "div" from line 507 */; ?>
<div class="left">DANH SÁCH SỰ KIỆN</div>
					<?php /* tag "div" from line 508 */; ?>
<div class="right"><?php echo phptal_escape($ctx->path($ctx->Events, 'count')); ?>
</div>
				</li>
			</a>
			<?php 
/* tag "a" from line 511 */ ;
if (null !== ($_tmp_3 = ('/app/pagoda'))):  ;
$_tmp_3 = ' href="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<a<?php echo $_tmp_3 ?>
>
				<?php 
/* tag "li" from line 512 */ ;
if (null !== ($_tmp_2 = ($ctx->ActiveAdmin=='Pagoda'?'menu-select':'?'))):  ;
$_tmp_2 = ' class="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<li<?php echo $_tmp_2 ?>
>
					<?php /* tag "div" from line 513 */; ?>
<div class="left">DANH SÁCH CHÙA</div>
					<?php /* tag "div" from line 514 */; ?>
<div class="right"><?php echo phptal_escape($ctx->path($ctx->Pagodas, 'count')); ?>
</div>
				</li>
			</a>
			<?php 
/* tag "a" from line 517 */ ;
if (null !== ($_tmp_1 = ('/app/album'))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
>
				<?php 
/* tag "li" from line 518 */ ;
if (null !== ($_tmp_2 = ($ctx->ActiveAdmin=='Album'?'menu-select':'?'))):  ;
$_tmp_2 = ' class="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<li<?php echo $_tmp_2 ?>
>
					<?php /* tag "div" from line 519 */; ?>
<div class="left">DANH SÁCH ALBUM</div>
					<?php /* tag "div" from line 520 */; ?>
<div class="right"><?php echo phptal_escape($ctx->path($ctx->Albums, 'count')); ?>
</div>
				</li>
			</a>
			<?php 
/* tag "a" from line 523 */ ;
if (null !== ($_tmp_3 = ('/app/sponsor'))):  ;
$_tmp_3 = ' href="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<a<?php echo $_tmp_3 ?>
>
				<?php 
/* tag "li" from line 524 */ ;
if (null !== ($_tmp_2 = ($ctx->ActiveAdmin=='Sponsor'?'menu-select':'?'))):  ;
$_tmp_2 = ' class="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<li<?php echo $_tmp_2 ?>
>
					<?php /* tag "div" from line 525 */; ?>
<div class="left">SỔ VÀNG ỦNG HỘ</div>
					<?php /* tag "div" from line 526 */; ?>
<div class="right"><?php echo phptal_escape($ctx->path($ctx->Sponsors, 'count')); ?>
</div>
				</li>
			</a>
			<?php 
/* tag "a" from line 529 */ ;
if (null !== ($_tmp_1 = ('/app/panel/news'))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
>
				<?php 
/* tag "li" from line 530 */ ;
if (null !== ($_tmp_2 = ($ctx->ActiveAdmin=='PanelNews'?'menu-select':'?'))):  ;
$_tmp_2 = ' class="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<li<?php echo $_tmp_2 ?>
>
					<?php /* tag "div" from line 531 */; ?>
<div class="left">PANEL NEWS</div>
					<?php /* tag "div" from line 532 */; ?>
<div class="right"><?php echo phptal_escape($ctx->path($ctx->PanelNews, 'count')); ?>
</div>
				</li>
			</a>
			<?php 
/* tag "a" from line 535 */ ;
if (null !== ($_tmp_3 = ('/app/panel/category/video'))):  ;
$_tmp_3 = ' href="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<a<?php echo $_tmp_3 ?>
>
				<?php 
/* tag "li" from line 536 */ ;
if (null !== ($_tmp_2 = ($ctx->ActiveAdmin=='PanelCategoryVideo'?'menu-select':'?'))):  ;
$_tmp_2 = ' class="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<li<?php echo $_tmp_2 ?>
>
					<?php /* tag "div" from line 537 */; ?>
<div class="left">PANEL CATEGORY VIDEO</div>
					<?php /* tag "div" from line 538 */; ?>
<div class="right"><?php echo phptal_escape($ctx->path($ctx->PanelCategoryVideos, 'count')); ?>
</div>
				</li>
			</a>
			<?php 
/* tag "a" from line 541 */ ;
if (null !== ($_tmp_1 = ('/app/config'))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
>
				<?php 
/* tag "li" from line 542 */ ;
if (null !== ($_tmp_2 = ($ctx->ActiveAdmin=='Statistic'?'menu-select':'?'))):  ;
$_tmp_2 = ' class="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<li<?php echo $_tmp_2 ?>
>
					<?php /* tag "div" from line 543 */; ?>
<div class="left">CẤU HÌNH</div>
					<?php /* tag "div" from line 544 */; ?>
<div class="right"><?php echo phptal_escape($ctx->path($ctx->Configs, 'count')); ?>
</div>
				</li>
			</a>
		</ul>
	</div><?php 
}

 ?>
<?php 
function tpl_51a31232_macros__x6FYd5UW5CqAyLKo2_POnA_Footer(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div id="footer">
		<?php /* tag "div" from line 440 */; ?>
<div id="bottom-menu">
			<?php /* tag "ul" from line 441 */; ?>
<ul class="top-nav">
				<?php /* tag "li" from line 442 */; ?>
<li><?php /* tag "a" from line 442 */; ?>
<a href="/home">Trang chủ</a></li>								
				<?php /* tag "li" from line 443 */; ?>
<li><?php /* tag "a" from line 443 */; ?>
<a href="/news">Tin tức</a></li>
				<?php /* tag "li" from line 444 */; ?>
<li><?php /* tag "a" from line 444 */; ?>
<a href="/course">Đào tạo</a></li>
				<?php /* tag "li" from line 445 */; ?>
<li><?php /* tag "a" from line 445 */; ?>
<a href="/event">Sự kiện</a></li>				
				<?php /* tag "li" from line 446 */; ?>
<li><?php /* tag "a" from line 446 */; ?>
<a href="/library/video">PHẬT ÂM</a></li>
				<?php /* tag "li" from line 447 */; ?>
<li><?php /* tag "a" from line 447 */; ?>
<a href="/ask/2/ins/load">Hỏi đáp</a></li>				
				<?php /* tag "li" from line 448 */; ?>
<li><?php /* tag "a" from line 448 */; ?>
<a href="/library/album">Ảnh hoạt động</a></li>
				<?php /* tag "li" from line 449 */; ?>
<li><?php /* tag "a" from line 449 */; ?>
<a href="/pagoda">Danh bạ</a></li>				
				<?php /* tag "li" from line 450 */; ?>
<li><?php /* tag "a" from line 450 */; ?>
<a href="/contact">Liên hệ</a></li>
				<?php /* tag "li" from line 451 */; ?>
<li id="last"><?php /* tag "a" from line 451 */; ?>
<a href="/signin/load">Quản trị</a></li>
			</ul>
		</div>
		<?php /* tag "div" from line 454 */; ?>
<div id="copy-right">
			<?php /* tag "div" from line 455 */; ?>
<div><?php /* tag "b" from line 455 */; ?>
<b>© 12/2012 Chùa Khải Tường</b></div>
			<?php /* tag "div" from line 456 */; ?>
<div>Biên tập - Đại Đức Thích Nhuận Tâm</div>
			<?php /* tag "div" from line 457 */; ?>
<div>Phát triển - SPN Co, Ltd &amp; Nguyên Phong ICT</div>
			<?php /* tag "div" from line 458 */; ?>
<div>Ghi rõ nguồn <?php /* tag "b" from line 458 */; ?>
<b><?php /* tag "i" from line 458 */; ?>
<i>chuakhaituong.com</i></b> khi phát hành thông tin từ website này</div>
		</div>
		<?php /* tag "div" from line 460 */; ?>
<div id="add-contact">
			<?php /* tag "div" from line 461 */; ?>
<div><?php /* tag "b" from line 461 */; ?>
<b>Chùa Khải Tường</b>, Số 319B2, ấp Mỹ Phú, xã Mỹ Đức Đông, Cái Bè, Tiền Giang, Việt Nam</div>
			<?php /* tag "div" from line 462 */; ?>
<div><?php /* tag "b" from line 462 */; ?>
<b>Điện thoại:</b> (073) 3600 943 - <?php /* tag "b" from line 462 */; ?>
<b>Di Động:</b> 0918 852 102</div>
			<?php /* tag "div" from line 463 */; ?>
<div><?php /* tag "b" from line 463 */; ?>
<b>Email:</b> nhuantamkhaituong@gmail.com (nhuantam@chuakhaituong.com)</div>
			<?php /* tag "div" from line 464 */; ?>
<div><?php /* tag "b" from line 464 */; ?>
<b>Website:</b> 
				<?php /* tag "a" from line 465 */; ?>
<a href="http://chuakhaituong.com">http://chuakhaituong.com</a> 
				<?php /* tag "small" from line 466 */; ?>
<small>(<?php /* tag "a" from line 466 */; ?>
<a href="http://quocankhaituongtu.com">http://quocankhaituongtu.com</a> -
				<?php /* tag "a" from line 467 */; ?>
<a href="http://chuaquocankhaituong.vn">http://chuaquocankhaituong.vn</a>)</small>
			</div>
		</div>
	</div><?php 
}

 ?>
<?php 
function tpl_51a31232_macros__x6FYd5UW5CqAyLKo2_POnA_CountBoxMini(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div id="count" class="sidebar-box-mini">
		<?php /* tag "div" from line 409 */; ?>
<div class="box-title">
			<?php /* tag "img" from line 410 */; ?>
<img src="/data/images/icon.png" width="30"/>
			<?php /* tag "span" from line 411 */; ?>
<span>Thống kê</span>
		</div>
		<?php /* tag "div" from line 413 */; ?>
<div class="sidebar-box-content">
			<?php /* tag "div" from line 414 */; ?>
<div style="padding:10px; line-height:25px; font-size:12px">
				<?php /* tag "table" from line 415 */; ?>
<table border="0" cellpadding="0" cellspacing="0" width="100%"><?php /* tag "tr" from line 415 */; ?>
<tr>
					<?php /* tag "td" from line 416 */; ?>
<td width="55%" align="left">
						<?php /* tag "div" from line 417 */; ?>
<div style="color:#980707; font-size:13px;">
							<?php /* tag "span" from line 418 */; ?>
<span><?php /* tag "b" from line 418 */; ?>
<b>Online: </b></span>
							<?php /* tag "span" from line 419 */; ?>
<span><?php echo phptal_escape(\MVC\Library\Statistic::getOnlinePrint()); ?>
</span>
							<?php /* tag "br" from line 420 */; ?>
<br/>
							<?php /* tag "span" from line 421 */; ?>
<span><?php /* tag "b" from line 421 */; ?>
<b>Truy cập: </b></span>
							<?php /* tag "span" from line 422 */; ?>
<span><?php echo phptal_escape(\MVC\Library\Statistic::getCountPrint()); ?>
</span>
							<?php /* tag "span" from line 423 */; ?>
<span> lượt</span>
						</div>
					</td>
					<?php /* tag "td" from line 426 */; ?>
<td width="45%" align="left">
						<?php /* tag "a" from line 427 */; ?>
<a href="online" style="color: #980707;">
							<?php /* tag "img" from line 428 */; ?>
<img src="/data/images/online_logo.png" width="80px"/>
							<?php /* tag "div" from line 429 */; ?>
<div>G.lưu trực tuyến</div>
						</a>
					</td>
				</tr></table>
			</div>
		</div>
		<?php /* tag "div" from line 435 */; ?>
<div class="clear"></div>
	</div><?php 
}

 ?>
<?php 
function tpl_51a31232_macros__x6FYd5UW5CqAyLKo2_POnA_CountBox(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div id="count" class="sidebar-box">
		<?php /* tag "div" from line 375 */; ?>
<div class="box-title">
			<?php /* tag "img" from line 376 */; ?>
<img src="/data/images/icon.png" width="30"/>
			<?php /* tag "span" from line 377 */; ?>
<span>Trực tuyến</span>
		</div>
		<?php /* tag "div" from line 379 */; ?>
<div class="sidebar-box-content">
			<?php /* tag "div" from line 380 */; ?>
<div style="padding:10px; line-height:25px; font-size:12px">
				<?php /* tag "table" from line 381 */; ?>
<table border="0" cellpadding="0" cellspacing="0" width="100%"><?php /* tag "tr" from line 381 */; ?>
<tr>
					<?php /* tag "td" from line 382 */; ?>
<td width="40%" align="center">
						<?php /* tag "a" from line 383 */; ?>
<a href="online" style="color: #980707;">
							<?php /* tag "img" from line 384 */; ?>
<img src="/data/images/online_logo.png" width="80px"/>
							<?php /* tag "h4" from line 385 */; ?>
<h4>Giao lưu trực tuyến</h4>
						</a>
					</td>
					<?php /* tag "td" from line 388 */; ?>
<td width="60%" align="left">
						<?php /* tag "div" from line 389 */; ?>
<div style="color:#980707; font-size:12px; margin-left:20px;">
							<?php /* tag "div" from line 390 */; ?>
<div style="text-align:center; font-size:12px;">Website được thành lập vào <?php /* tag "b" from line 390 */; ?>
<b>12/2012</b></div>
							<?php /* tag "hr" from line 391 */; ?>
<hr style="border-color:#980707; margin:5px;"/>
							<?php /* tag "span" from line 392 */; ?>
<span><?php /* tag "img" from line 392 */; ?>
<img src="/data/images/user_online_logo.png"/> <?php /* tag "b" from line 392 */; ?>
<b>Online: </b></span>
							<?php /* tag "span" from line 393 */; ?>
<span><?php echo phptal_escape(\MVC\Library\Statistic::getOnlinePrint()); ?>
</span>
							<?php /* tag "br" from line 394 */; ?>
<br/>
							<?php /* tag "span" from line 395 */; ?>
<span><?php /* tag "img" from line 395 */; ?>
<img src="/data/images/count_logo.gif"/> <?php /* tag "b" from line 395 */; ?>
<b>Truy cập: </b></span>
							<?php /* tag "span" from line 396 */; ?>
<span><?php echo phptal_escape(\MVC\Library\Statistic::getCountPrint()); ?>
</span>
							<?php /* tag "span" from line 397 */; ?>
<span> lượt</span>
						</div>
					</td>
				</tr>
				</table>
			</div>
		</div>
		<?php /* tag "div" from line 404 */; ?>
<div class="clear"></div>
	</div><?php 
}

 ?>
<?php 
function tpl_51a31232_macros__x6FYd5UW5CqAyLKo2_POnA_SponsorBoxMini(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div id="count" class="sidebar-box-mini">
		<?php /* tag "div" from line 358 */; ?>
<div class="box-title">
			<?php /* tag "img" from line 359 */; ?>
<img src="/data/images/icon.png" width="30"/>
			<?php /* tag "span" from line 360 */; ?>
<span>Trợ duyên</span>
		</div>
		<?php /* tag "div" from line 362 */; ?>
<div class="sidebar-box-content">
			<?php /* tag "div" from line 363 */; ?>
<div align="center" style="padding:10px;">
				<?php /* tag "a" from line 364 */; ?>
<a href="/sponsor" style="color: #980707;">
					<?php /* tag "img" from line 365 */; ?>
<img src="/data/images/sponsor_logo.gif" width="120px"/>
					<?php /* tag "h3" from line 366 */; ?>
<h3>Ủng Hộ Website</h3>
				</a>
			</div>
		</div>
		<?php /* tag "div" from line 370 */; ?>
<div class="clear"></div>
	</div><?php 
}

 ?>
<?php 
function tpl_51a31232_macros__x6FYd5UW5CqAyLKo2_POnA_SponsorBox(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div id="emty2" class="sidebar-box">
		<?php /* tag "div" from line 333 */; ?>
<div class="box-title">
			<?php /* tag "img" from line 334 */; ?>
<img src="/data/images/icon.png" width="30"/>
			<?php /* tag "span" from line 335 */; ?>
<span>Trợ duyên</span>
		</div>
		<?php /* tag "div" from line 337 */; ?>
<div class="sidebar-box-content">
			<?php /* tag "div" from line 338 */; ?>
<div align="center" style="padding:10px;">
				<?php /* tag "table" from line 339 */; ?>
<table border="0" cellpadding="0" cellspacing="0" width="100%"><?php /* tag "tr" from line 339 */; ?>
<tr>
					<?php /* tag "td" from line 340 */; ?>
<td width="50%" align="center">
						<?php /* tag "a" from line 341 */; ?>
<a href="/sponsor" style="color: #980707;">
							<?php /* tag "img" from line 342 */; ?>
<img src="/data/images/sponsor_logo.gif" width="150px"/>
						</a>
					</td>
					<?php /* tag "td" from line 345 */; ?>
<td width="50%" align="center">
						<?php /* tag "a" from line 346 */; ?>
<a href="/sponsor" style="color:#980707; line-height:40px;">
							<?php /* tag "h1" from line 347 */; ?>
<h1>Ủng Hộ Website</h1>
						</a>
					</td>
				</tr></table>
			</div>
		</div>
		<?php /* tag "div" from line 353 */; ?>
<div class="clear"></div>
	</div><?php 
}

 ?>
<?php 
function tpl_51a31232_macros__x6FYd5UW5CqAyLKo2_POnA_TextGo(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div id="text-go">
		<?php /* tag "marquee" from line 328 */; ?>
<marquee>Kính chúc chư tôn đức tăng ni cùng quý phật tử thân tâm thường an lạc ! Nguyện đem công đức này hướng về khắp tất cả đệ tử và chúng sanh điều trọn thành Phật Đạo.</marquee>
	</div><?php 
}

 ?>
<?php 
function tpl_51a31232_macros__x6FYd5UW5CqAyLKo2_POnA_DateTimeBox(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div id="date-time">
		<?php /* tag "script" from line 321 */; ?>
<script type="text/javascript">				
			getLunarDateString(09,11,2012,16,39,13);									
		</script>
	</div><?php 
}

 ?>
<?php 
function tpl_51a31232_macros__x6FYd5UW5CqAyLKo2_POnA_CallendarBoxMini(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div id="calendar" class="sidebar-box-mini">
		<?php /* tag "div" from line 298 */; ?>
<div class="box-title">
			<?php /* tag "img" from line 299 */; ?>
<img src="/data/images/icon.png" width="30"/>
			<?php /* tag "span" from line 300 */; ?>
<span>Lịch Âm Dương</span>
		</div>
		<?php /* tag "div" from line 302 */; ?>
<div class="sidebar-box-content">
			<?php /* tag "div" from line 303 */; ?>
<div align="center">
				<?php /* tag "script" from line 304 */; ?>
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
		<?php /* tag "div" from line 316 */; ?>
<div class="clear"></div>
	</div><?php 
}

 ?>
<?php 
function tpl_51a31232_macros__x6FYd5UW5CqAyLKo2_POnA_CallendarBox(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div id="calendar" class="sidebar-box">
		<?php /* tag "div" from line 276 */; ?>
<div class="box-title">
			<?php /* tag "img" from line 277 */; ?>
<img src="/data/images/icon.png" width="30"/>
			<?php /* tag "span" from line 278 */; ?>
<span>Lịch Dương <?php /* tag "small" from line 278 */; ?>
<small>Âm</small></span>
		</div>
		<?php /* tag "div" from line 280 */; ?>
<div class="sidebar-box-content">
			<?php /* tag "div" from line 281 */; ?>
<div align="center">
				<?php /* tag "script" from line 282 */; ?>
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
		<?php /* tag "div" from line 294 */; ?>
<div class="clear"></div>
	</div><?php 
}

 ?>
<?php 
function tpl_51a31232_macros__x6FYd5UW5CqAyLKo2_POnA_AskBoxMini(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div id="question" class="sidebar-box-mini">
		<?php /* tag "div" from line 259 */; ?>
<div class="box-title">
			<?php /* tag "img" from line 260 */; ?>
<img src="/data/images/icon.png" width="30"/>
			<?php /* tag "span" from line 261 */; ?>
<span>Hỏi đáp PHẬT HỌC</span>
		</div>
		<?php /* tag "div" from line 263 */; ?>
<div class="sidebar-box-content">
			<?php /* tag "div" from line 264 */; ?>
<div align="center" style="padding:10px;">
				<?php /* tag "a" from line 265 */; ?>
<a href="/ask" style="color: #980707;">
					<?php /* tag "img" from line 266 */; ?>
<img src="/data/images/question_logo.png"/>
					<?php /* tag "div" from line 267 */; ?>
<div>Hỏi đáp PHẬT HỌC</div>
				</a>
			</div>
		</div>
		<?php /* tag "div" from line 271 */; ?>
<div class="clear"></div>
	</div><?php 
}

 ?>
<?php 
function tpl_51a31232_macros__x6FYd5UW5CqAyLKo2_POnA_AskBox(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div id="question" class="sidebar-box">
		<?php /* tag "div" from line 234 */; ?>
<div class="box-title">
			<?php /* tag "img" from line 235 */; ?>
<img src="/data/images/icon.png" width="30"/>
			<?php /* tag "span" from line 236 */; ?>
<span>Hỏi đáp PHẬT HỌC</span>
		</div>
		<?php /* tag "div" from line 238 */; ?>
<div class="sidebar-box-content">
			<?php /* tag "div" from line 239 */; ?>
<div align="center" style="padding:10px;">
				<?php /* tag "table" from line 240 */; ?>
<table border="0" cellpadding="0" cellspacing="0" width="100%"><?php /* tag "tr" from line 240 */; ?>
<tr>
					<?php /* tag "td" from line 241 */; ?>
<td width="50%" align="center">
						<?php /* tag "a" from line 242 */; ?>
<a href="/ask/1" style="color: #980707;">
							<?php /* tag "img" from line 243 */; ?>
<img src="/data/images/question_logo.jpg" width="120px"/>
						</a>
					</td>
					<?php /* tag "td" from line 246 */; ?>
<td width="50%" align="center">
						<?php /* tag "a" from line 247 */; ?>
<a href="/ask/1" style="color: #980707; line-height:35px;">
							<?php /* tag "h3" from line 248 */; ?>
<h3>Hỏi <?php /* tag "small" from line 248 */; ?>
<small>&amp; </small>Đáp</h3>
							<?php /* tag "h1" from line 249 */; ?>
<h1>PHẬT HỌC</h1>
						</a>
					</td>
				</tr></table>
			</div>
		</div>
		<?php /* tag "div" from line 255 */; ?>
<div class="clear"></div>
	</div><?php 
}

 ?>
<?php 
function tpl_51a31232_macros__x6FYd5UW5CqAyLKo2_POnA_VideoBox(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div id="phatam" class="sidebar-box">
		<?php /* tag "div" from line 209 */; ?>
<div class="box-title">
			<?php /* tag "img" from line 210 */; ?>
<img src="/data/images/icon.png" width="30"/>
			<?php /* tag "span" from line 211 */; ?>
<span>PHẬT ÂM</span>
		</div>
		<?php /* tag "div" from line 213 */; ?>
<div class="sidebar-box-content">
			<?php /* tag "div" from line 214 */; ?>
<div align="center" style="padding:10px;">
				<?php /* tag "table" from line 215 */; ?>
<table border="0" cellpadding="0" cellspacing="0" width="100%"><?php /* tag "tr" from line 215 */; ?>
<tr>
					<?php /* tag "td" from line 216 */; ?>
<td width="50%" align="center">
						<?php /* tag "a" from line 217 */; ?>
<a href="/library/video">
							<?php /* tag "img" from line 218 */; ?>
<img src="/data/images/phatam_logo.gif" width="150px"/>
						</a>
					</td>
					<?php /* tag "td" from line 221 */; ?>
<td width="50%" align="center">
						<?php /* tag "a" from line 222 */; ?>
<a href="/library/video" style="color:#980707; line-height:30px;">
							<?php /* tag "h3" from line 223 */; ?>
<h3>Giới thiệu trang chia sẻ PHẬT ÂM lớn &amp; phổ biến nhất</h3>
						</a>
					</td>
				</tr></table>
			</div>
		</div>
		<?php /* tag "div" from line 229 */; ?>
<div class="clear"></div>
	</div><?php 
}

 ?>
<?php 
function tpl_51a31232_macros__x6FYd5UW5CqAyLKo2_POnA_CourseBox(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
if ($ctx->Course):  ;
?>
<div id="emty" class="sidebar-box">
		<?php 
/* tag "div" from line 171 */ ;
if ($ctx->path($ctx->Course, 'getLessionNext')):  ;
?>
<div>
			<?php 
/* tag "div" from line 172 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Course, 'getLessionNext/getDateEnd')))):  ;
$_tmp_1 = ' alt="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<div id="CourseBox" class="box-title"<?php echo $_tmp_1 ?>
>
				<?php /* tag "img" from line 173 */; ?>
<img src="/data/images/icon.png" width="30"/>
				<?php /* tag "span" from line 174 */; ?>
<span>SẮP KHAI GIẢNG</span>
			</div>
		</div><?php endif; ?>

		<?php 
/* tag "div" from line 177 */ ;
if ($ctx->path($ctx->Course, 'getLessionNext')):  ;
?>
<div class="sidebar-box-content">
			<?php /* tag "div" from line 178 */; ?>
<div align="center" style="padding-top:10px;">
				<?php 
/* tag "a" from line 179 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Course, 'getLessionNext/getURLRead')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
>
					<?php 
/* tag "img" from line 180 */ ;
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
			<?php /* tag "div" from line 183 */; ?>
<div align="center" style="padding:10px;">
				<?php 
/* tag "a" from line 184 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Course, 'getLessionNext/getURLRead')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a style="font-size:12px; color:#980707; line-height:30px;"<?php echo $_tmp_1 ?>
>
					<?php /* tag "h1" from line 185 */; ?>
<h1><?php echo phptal_escape($ctx->path($ctx->Course, 'getLessionNext/getName')); ?>
</h1>
				</a>
			</div>
			<?php /* tag "div" from line 188 */; ?>
<div style="margin-left:10px;">
				<?php /* tag "div" from line 189 */; ?>
<div id="CourseCountdown"></div>
			</div>
			<?php /* tag "script" from line 191 */; ?>
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
			<?php /* tag "div" from line 203 */; ?>
<div class="clear"></div>
		</div><?php endif; ?>

	</div><?php 
endif ;

}

?>
<?php 
function tpl_51a31232_macros__x6FYd5UW5CqAyLKo2_POnA_EventBoxMini(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div id="emty" class="sidebar-box-mini">
		<?php 
/* tag "div" from line 136 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Event, 'getDate')))):  ;
$_tmp_2 = ' alt="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<div id="Event" class="box-title"<?php echo $_tmp_2 ?>
>
			<?php /* tag "img" from line 137 */; ?>
<img src="/data/images/icon.png" width="30"/>
			<?php /* tag "span" from line 138 */; ?>
<span>Sự kiện sắp xảy ra</span>
		</div>
		<?php /* tag "div" from line 140 */; ?>
<div class="sidebar-box-content">
			<?php /* tag "div" from line 141 */; ?>
<div align="center" style="height:30px; padding-top:10px; margin-bottom:30px;">
				<?php 
/* tag "a" from line 142 */ ;
if (null !== ($_tmp_3 = ($ctx->path($ctx->Event, 'getURLRead')))):  ;
$_tmp_3 = ' href="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<a style="font-size:15px; color:#980707; line-height:30px;"<?php echo $_tmp_3 ?>
>
					<?php /* tag "h3" from line 143 */; ?>
<h3><?php echo phptal_escape($ctx->path($ctx->Event, 'getTitle')); ?>
</h3>
				</a>
			</div>
			<?php /* tag "div" from line 146 */; ?>
<div style="margin-left:-3px;">
				<?php /* tag "div" from line 147 */; ?>
<div id="defaultCountdown"></div>
			</div>
			<?php /* tag "script" from line 149 */; ?>
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
			<?php /* tag "div" from line 163 */; ?>
<div class="clear"></div>
		</div>
	</div><?php 
}

 ?>
<?php 
function tpl_51a31232_macros__x6FYd5UW5CqAyLKo2_POnA_EventBox(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div id="emty" class="sidebar-box">
		<?php 
/* tag "div" from line 99 */ ;
if ($ctx->Event):  ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Event, 'getDate')))):  ;
$_tmp_1 = ' alt="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<div id="Event" class="box-title"<?php echo $_tmp_1 ?>
>
			<?php /* tag "img" from line 100 */; ?>
<img src="/data/images/icon.png" width="30"/>
			<?php /* tag "span" from line 101 */; ?>
<span>Sự kiện sắp xảy ra</span>
		</div><?php endif; ?>

		<?php 
/* tag "div" from line 103 */ ;
if ($ctx->Event):  ;
?>
<div class="sidebar-box-content">
			<?php /* tag "div" from line 104 */; ?>
<div align="center" style="padding-top:10px;">
				<?php 
/* tag "a" from line 105 */ ;
if (null !== ($_tmp_3 = ($ctx->path($ctx->Event, 'getURLRead')))):  ;
$_tmp_3 = ' href="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<a<?php echo $_tmp_3 ?>
>
					<?php 
/* tag "img" from line 106 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Event, 'getImage')))):  ;
$_tmp_2 = ' src="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<img width="300"<?php echo $_tmp_2 ?>
/>
				</a>
			</div>
			<?php /* tag "div" from line 109 */; ?>
<div align="center" style="padding:10px;">
				<?php 
/* tag "a" from line 110 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Event, 'getURLRead')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a style="font-size:12px; color:#980707; line-height:30px;"<?php echo $_tmp_1 ?>
>
					<?php /* tag "h1" from line 111 */; ?>
<h1><?php echo phptal_escape($ctx->path($ctx->Event, 'getTitle')); ?>
</h1>
				</a>
			</div>
			<?php /* tag "div" from line 114 */; ?>
<div style="margin-left:10px;">
				<?php /* tag "div" from line 115 */; ?>
<div id="defaultCountdown"></div>
			</div>
			<?php /* tag "script" from line 117 */; ?>
<script type="text/javascript">
				/*<![CDATA[*/
				$(function() {
					var d1 = $("#Event").attr('alt');
					var parts = d1.match(/(\d+)/g);					
					var d2 = new Date(parts[0], parts[1]-1, parts[2]); // months are 0-based
					var austDay = new Date();
					austDay = new Date(austDay.getFullYear() + 1, 1 - 1, 26);
					$('#defaultCountdown').countdown({until: d2});
					$('#defaultCountdown1').countdown({until: d2});
				});
				/*]]>*/
			</script>
			<?php /* tag "div" from line 130 */; ?>
<div class="clear"></div>
		</div><?php endif; ?>

	</div><?php 
}

 ?>
<?php 
function tpl_51a31232_macros__x6FYd5UW5CqAyLKo2_POnA_Header(PHPTAL $_thistpl, PHPTAL $tpl) {
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
if (null !== ($_tmp_1 = ($ctx->ActiveItem=='Ask'?'current':'?'))):  ;
$_tmp_1 = ' class="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<li<?php echo $_tmp_1 ?>
>
					<?php /* tag "a" from line 58 */; ?>
<a style="cursor:pointer;">PHẬT ÂM</a>
					<?php /* tag "ul" from line 59 */; ?>
<ul class="sub-menu">						
						<?php 
/* tag "li" from line 60 */ ;
$_tmp_3 = $ctx->repeat ;
$_tmp_3->Category = new PHPTAL_RepeatController($ctx->CategoriesBType)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_3->Category as $ctx->Category): ;
?>
<li>
							<?php 
/* tag "a" from line 61 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Category, 'getURLView')))):  ;
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
/* tag "li" from line 65 */ ;
if (null !== ($_tmp_2 = ($ctx->ActiveItem=='Ask'?'current':'?'))):  ;
$_tmp_2 = ' class="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<li<?php echo $_tmp_2 ?>
>
					<?php /* tag "a" from line 66 */; ?>
<a style="cursor:pointer;">Hỏi đáp</a>
					<?php /* tag "ul" from line 67 */; ?>
<ul class="sub-menu">
						<?php /* tag "li" from line 68 */; ?>
<li>
							<?php 
/* tag "a" from line 69 */ ;
if (null !== ($_tmp_3 = ('/ask/2/ins/load'))):  ;
$_tmp_3 = ' href="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<a<?php echo $_tmp_3 ?>
>Đặt câu hỏi</a>
						</li>
						<?php 
/* tag "li" from line 71 */ ;
$_tmp_1 = $ctx->repeat ;
$_tmp_1->Category = new PHPTAL_RepeatController($ctx->CategoriesAsk)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->Category as $ctx->Category): ;
?>
<li>
							<?php 
/* tag "a" from line 72 */ ;
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
/* tag "li" from line 76 */ ;
if (null !== ($_tmp_3 = ($ctx->ActiveItem=='LibraryAlbum'?'current':'?'))):  ;
$_tmp_3 = ' class="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<li<?php echo $_tmp_3 ?>
><?php /* tag "a" from line 76 */; ?>
<a href="/library/album">Ảnh hoạt động</a></li>
				<?php 
/* tag "li" from line 77 */ ;
if (null !== ($_tmp_1 = ($ctx->ActiveItem=='Pagoda'?'current':'?'))):  ;
$_tmp_1 = ' class="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<li<?php echo $_tmp_1 ?>
>
					<?php /* tag "a" from line 78 */; ?>
<a style="cursor:pointer;">Danh bạ Chùa</a>
					<?php /* tag "ul" from line 79 */; ?>
<ul class="sub-menu">
						<?php 
/* tag "li" from line 80 */ ;
$_tmp_2 = $ctx->repeat ;
$_tmp_2->Pagoda = new PHPTAL_RepeatController($ctx->Pagodas)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_2->Pagoda as $ctx->Pagoda): ;
?>
<li>
							<?php 
/* tag "a" from line 81 */ ;
if (null !== ($_tmp_3 = ($ctx->path($ctx->Pagoda, 'getURLRead')))):  ;
$_tmp_3 = ' href="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<a<?php echo $_tmp_3 ?>
><?php echo phptal_escape($ctx->path($ctx->Pagoda, 'getName')); ?>
</a>
						</li><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

					</ul>
				</li>
				<?php 
/* tag "li" from line 85 */ ;
if (null !== ($_tmp_3 = ($ctx->ActiveItem=='Sponsor'?'current':'?'))):  ;
$_tmp_3 = ' class="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<li id="last"<?php echo $_tmp_3 ?>
>
					<?php /* tag "a" from line 86 */; ?>
<a href="/sponsor">Sổ Vàng</a>
				</li>
				<?php 
/* tag "li" from line 88 */ ;
if (null !== ($_tmp_2 = ($ctx->ActiveItem=='Contact'?'current':'?'))):  ;
$_tmp_2 = ' class="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<li id="last"<?php echo $_tmp_2 ?>
>
					<?php /* tag "a" from line 89 */; ?>
<a href="/contact">Liên hệ</a>
				</li>
			</ul>
		</div>
	</div><?php 
}

 ?>
<?php 
function tpl_51a31232_macros__x6FYd5UW5CqAyLKo2_POnA_IncludeJS(PHPTAL $_thistpl, PHPTAL $tpl) {
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
function tpl_51a31232_macros__x6FYd5UW5CqAyLKo2_POnA_IncludeCSS(PHPTAL $_thistpl, PHPTAL $tpl) {
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
function tpl_51a31232_macros__x6FYd5UW5CqAyLKo2_POnA(PHPTAL $tpl, PHPTAL_Context $ctx) {
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

	
	<!-- ================================================================================== -->
	<!-- EVENT BOX 																			-->
	<!-- ================================================================================== -->
	<?php /* tag "div" from line 98 */; ?>

	
	<!-- EVENT BOX MINI -->
	<?php /* tag "div" from line 135 */; ?>

	
	<!-- ================================================================================== -->
	<!-- COURSE BOX 																		-->
	<!-- ================================================================================== -->	
	<?php /* tag "div" from line 170 */; ?>


	<!-- PHATAM BOX Ở CỘT 2 -->
	<?php /* tag "div" from line 208 */; ?>

	
	<!-- QUESTION BOX Ở CỘT 2 -->
	<?php /* tag "div" from line 233 */; ?>

	
	<?php /* tag "div" from line 258 */; ?>


	<!-- CALENDAR BOX Ở CỘT 2 -->
	<?php /* tag "div" from line 275 */; ?>

	
	<?php /* tag "div" from line 297 */; ?>

	
	<!-- DATE TIME BOX -->
	<?php /* tag "div" from line 320 */; ?>

	
	<!-- TEXT GO -->
	<?php /* tag "div" from line 327 */; ?>

	
	<!-- SPONSOR BOX -->
	<?php /* tag "div" from line 332 */; ?>

	
	<!-- SPONSOR BOX MINI -->
	<?php /* tag "div" from line 357 */; ?>

	
	<!-- COUNT BOX Ở CỘT 2 -->
	<?php /* tag "div" from line 374 */; ?>

		
	<!-- COUNT MINI BOX Ở CỘT 3 -->
	<?php /* tag "div" from line 408 */; ?>

	
	<!-- FOOTER Ở DƯỚI TRANG -->
	<?php /* tag "div" from line 439 */; ?>

	
	<!-- ADMIN MENU -->
	<?php /* tag "div" from line 473 */; ?>


	<!-- ================================================================================== -->
	<!-- TOP NEWS BOX 																		-->
	<!-- ================================================================================== -->
	<?php /* tag "div" from line 553 */; ?>

	
	<!-- ================================================================================== -->
	<!-- TOP VIDEO BOX 																		-->
	<!-- ================================================================================== -->
	<?php /* tag "div" from line 570 */; ?>

			
	<?php /* tag "div" from line 584 */; ?>

	
	<!-- ================================================================================== -->
	<!-- TOP PICTURE BOX 																		-->
	<!-- ================================================================================== -->
	<?php /* tag "div" from line 604 */; ?>

	
	<!-- ================================================================================== -->
	<!-- SOUTH BUDDHA																	-->
	<!-- ================================================================================== -->
	<?php /* tag "div" from line 620 */; ?>

	
	<!-- ================================================================================== -->
	<!-- NORTH BUDDHA																	-->
	<!-- ================================================================================== -->
	<?php /* tag "div" from line 636 */; ?>

	
</body>
</html><?php 
/* end */ ;

}

?>
<?php /* 
*** DO NOT EDIT THIS FILE ***

Generated by PHPTAL from E:\AppWebServer\chuakhaituong.123app.net\mvc\templates\macros.xhtml (edit that file instead) */; ?>