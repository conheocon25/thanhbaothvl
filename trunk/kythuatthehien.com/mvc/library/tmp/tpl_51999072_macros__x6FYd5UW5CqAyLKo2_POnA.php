<?php 
function tpl_51999072_macros__x6FYd5UW5CqAyLKo2_POnA_BoxRightCategorys(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div class="sidebar-box">
		<?php /* tag "div" from line 673 */; ?>
<div class="box-title">
			<?php /* tag "img" from line 674 */; ?>
<img src="/data/images/icon.png" width="30"/>
			<?php /* tag "span" from line 675 */; ?>
<span>Những Chuyen Muc Video</span>
		</div>
		<?php /* tag "div" from line 677 */; ?>
<div class="BoxListNews">
			<?php /* tag "ul" from line 678 */; ?>
<ul>
				<?php 
/* tag "li" from line 679 */ ;
$_tmp_4 = $ctx->repeat ;
$_tmp_4->Category = new PHPTAL_RepeatController($ctx->CategorysArray)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_4->Category as $ctx->Category): ;
?>
<li class="subli">				
					<?php 
/* tag "a" from line 680 */ ;
$ctx->noThrow(true) ;
if (!phptal_isempty($_tmp_1 = ($ctx->path($ctx->Category, 'getVLTop/current/getURLView', true)))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
elseif (null !== ($_tmp_1 = ('#'))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
endif ;
$ctx->noThrow(false) ;
$ctx->noThrow(true) ;
if (!phptal_isempty($_tmp_3 = ($ctx->path($ctx->Category, 'getVLTop/current/getVideo/getName', true)))):  ;
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
/* tag "img" from line 681 */ ;
$ctx->noThrow(true) ;
if (!phptal_isempty($_tmp_2 = ($ctx->path($ctx->Category, 'getVLTop/current/getVideo/getURLImage', true)))):  ;
$_tmp_2 = ' src="'.phptal_escape($_tmp_2).'"' ;
elseif (null !== ($_tmp_2 = ('/data/images/exit_picture.jpg'))):  ;
$_tmp_2 = ' src="'.phptal_escape($_tmp_2).'"' ;
endif ;
$ctx->noThrow(false) ;
?>
<img<?php echo $_tmp_2 ?>
/>								
						<?php /* tag "span" from line 682 */; ?>
<span class="BoxListNewsName"><?php 
$ctx->noThrow(true) ;
if (!phptal_isempty($_tmp_2 = $ctx->path($ctx->Category, 'getVLTop/current/getCategory/getName', true))):  ;
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
function tpl_51999072_macros__x6FYd5UW5CqAyLKo2_POnA_BoxRightNews(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div class="sidebar-box">
		<?php /* tag "div" from line 656 */; ?>
<div class="box-title">
			<?php /* tag "img" from line 657 */; ?>
<img src="/data/images/icon.png" width="30"/>
			<?php /* tag "span" from line 658 */; ?>
<span>Những Tin tuc</span>
		</div>
		<?php /* tag "div" from line 660 */; ?>
<div class="BoxListNews">
			<?php /* tag "ul" from line 661 */; ?>
<ul>
				<?php 
/* tag "li" from line 662 */ ;
$_tmp_2 = $ctx->repeat ;
$_tmp_2->New = new PHPTAL_RepeatController($ctx->NewsArray)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_2->New as $ctx->New): ;
?>
<li class="subli">
					<?php 
/* tag "a" from line 663 */ ;
$ctx->noThrow(true) ;
if (!phptal_isempty($_tmp_1 = ($ctx->path($ctx->New, 'getURLRead', true)))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
elseif (null !== ($_tmp_1 = ('#'))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
endif ;
$ctx->noThrow(false) ;
$ctx->noThrow(true) ;
if (!phptal_isempty($_tmp_3 = ($ctx->path($ctx->New, 'getTitle', true)))):  ;
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
/* tag "img" from line 664 */ ;
$ctx->noThrow(true) ;
if (!phptal_isempty($_tmp_4 = ($ctx->path($ctx->New, 'getImage', true)))):  ;
$_tmp_4 = ' src="'.phptal_escape($_tmp_4).'"' ;
elseif (null !== ($_tmp_4 = ('/data/images/exit_picture.jpg'))):  ;
$_tmp_4 = ' src="'.phptal_escape($_tmp_4).'"' ;
endif ;
$ctx->noThrow(false) ;
?>
<img<?php echo $_tmp_4 ?>
/>								
						<?php /* tag "span" from line 665 */; ?>
<span class="BoxListNewsName"><?php 
$ctx->noThrow(true) ;
if (!phptal_isempty($_tmp_4 = $ctx->path($ctx->New, 'getTitle', true))):  ;
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
function tpl_51999072_macros__x6FYd5UW5CqAyLKo2_POnA_TopVideoBox(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div class="sidebar-box">
		<?php /* tag "div" from line 572 */; ?>
<div class="box-title">
			<?php /* tag "img" from line 573 */; ?>
<img src="/data/images/icon.png" width="30"/>
			<?php /* tag "span" from line 574 */; ?>
<span>Những Video Mới Cập Nhật</span>
		</div>
		<?php /* tag "table" from line 576 */; ?>
<table border="0" cellpadding="0" cellspacing="0" width="100%">
			<?php /* tag "tr" from line 577 */; ?>
<tr><?php /* tag "td" from line 577 */; ?>
<td width="50%" align="left">
				<?php /* tag "div" from line 578 */; ?>
<div class="box-right">
					<?php 
/* tag "a" from line 579 */ ;
if (null !== ($_tmp_3 = ($ctx->path($ctx->CV11, 'getURLRead')))):  ;
$_tmp_3 = ' href="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<a<?php echo $_tmp_3 ?>
>
						<?php 
/* tag "img" from line 580 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->CV11, 'getPicture')))):  ;
$_tmp_1 = ' src="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<img width="96px"<?php echo $_tmp_1 ?>
/>
						<?php /* tag "span" from line 581 */; ?>
<span class="BoxListNewsName"><?php echo phptal_escape($ctx->path($ctx->CV11, 'getName')); ?>
</span>
					</a>
				</div>
			</td>
			<?php /* tag "td" from line 585 */; ?>
<td width="50%" align="right">
				<?php /* tag "div" from line 586 */; ?>
<div class="box-right">
					<?php /* tag "a" from line 587 */; ?>
<a href="#">
						Video 2
					</a>
				</div>
			</td></tr>
			
			<?php /* tag "tr" from line 593 */; ?>
<tr><?php /* tag "td" from line 593 */; ?>
<td width="50%" align="left">
				<?php /* tag "div" from line 594 */; ?>
<div class="box-right">
					<?php /* tag "a" from line 595 */; ?>
<a href="#">
						Video 3
					</a>
				</div>
			</td>
			<?php /* tag "td" from line 600 */; ?>
<td width="50%" align="right">
				<?php /* tag "div" from line 601 */; ?>
<div class="box-right">
					<?php /* tag "a" from line 602 */; ?>
<a href="#">
						Video 4
					</a>
				</div>
			</td></tr>
			
			<?php /* tag "tr" from line 608 */; ?>
<tr><?php /* tag "td" from line 608 */; ?>
<td width="50%" align="left">
				<?php /* tag "div" from line 609 */; ?>
<div class="box-right">
					<?php /* tag "a" from line 610 */; ?>
<a href="#">
						Video 5
					</a>
				</div>
			</td>
			<?php /* tag "td" from line 615 */; ?>
<td width="50%" align="right">
				<?php /* tag "div" from line 616 */; ?>
<div class="box-right">
					<?php /* tag "a" from line 617 */; ?>
<a href="#">
						Video 6
					</a>
				</div>
			</td></tr>
			
			<?php /* tag "tr" from line 623 */; ?>
<tr><?php /* tag "td" from line 623 */; ?>
<td width="50%" align="left">
				<?php /* tag "div" from line 624 */; ?>
<div class="box-right">
					<?php /* tag "a" from line 625 */; ?>
<a href="#">
						Video 7
					</a>
				</div>
			</td>
			<?php /* tag "td" from line 630 */; ?>
<td width="50%" align="right">
				<?php /* tag "div" from line 631 */; ?>
<div class="box-right">
					<?php /* tag "a" from line 632 */; ?>
<a href="#">
						Video 8
					</a>
				</div>
			</td></tr>
			
			<?php /* tag "tr" from line 638 */; ?>
<tr><?php /* tag "td" from line 638 */; ?>
<td width="50%" align="left">
				<?php /* tag "div" from line 639 */; ?>
<div class="box-right">
					<?php /* tag "a" from line 640 */; ?>
<a href="#">
						Video 9
					</a>
				</div>
			</td>
			<?php /* tag "td" from line 645 */; ?>
<td width="50%" align="right">
				<?php /* tag "div" from line 646 */; ?>
<div class="box-right">
					<?php /* tag "a" from line 647 */; ?>
<a href="#">
						Video 10
					</a>
				</div>
			</td></tr>
		</table>
	</div><?php 
}

 ?>
<?php 
function tpl_51999072_macros__x6FYd5UW5CqAyLKo2_POnA_BoxRight(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div>
		<?php /* tag "table" from line 532 */; ?>
<table border="0" cellpadding="0" cellspacing="0" width="335px">
			<?php /* tag "tr" from line 533 */; ?>
<tr><?php /* tag "td" from line 533 */; ?>
<td width="50%" align="left">
				<?php /* tag "div" from line 534 */; ?>
<div class="box-right">
					<?php 
/* tag "a" from line 535 */ ;
$ctx->noThrow(true) ;
if (!phptal_isempty($_tmp_2 = ($ctx->path($ctx->News1, 'getURLRead', true)))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
elseif (null !== ($_tmp_2 = ('#'))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
endif ;
$ctx->noThrow(false) ;
$ctx->noThrow(true) ;
if (!phptal_isempty($_tmp_3 = ($ctx->path($ctx->News1, 'getTitle', true)))):  ;
$_tmp_3 = ' title="'.phptal_escape($_tmp_3).'"' ;
elseif (null !== ($_tmp_3 = ('Chưa có tiêu đề'))):  ;
$_tmp_3 = ' title="'.phptal_escape($_tmp_3).'"' ;
endif ;
$ctx->noThrow(false) ;
?>
<a<?php echo $_tmp_2 ?>
<?php echo $_tmp_3 ?>
>
						<?php 
/* tag "img" from line 536 */ ;
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
						<?php /* tag "div" from line 537 */; ?>
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
			<?php /* tag "td" from line 541 */; ?>
<td width="50%" align="right">
				<?php /* tag "div" from line 542 */; ?>
<div class="box-right">
					<?php 
/* tag "a" from line 543 */ ;
$ctx->noThrow(true) ;
if (!phptal_isempty($_tmp_1 = ($ctx->path($ctx->News2, 'getURLRead', true)))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
elseif (null !== ($_tmp_1 = ('#'))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
endif ;
$ctx->noThrow(false) ;
$ctx->noThrow(true) ;
if (!phptal_isempty($_tmp_2 = ($ctx->path($ctx->News2, 'getTitle', true)))):  ;
$_tmp_2 = ' title="'.phptal_escape($_tmp_2).'"' ;
elseif (null !== ($_tmp_2 = ('Chưa có tiêu đề'))):  ;
$_tmp_2 = ' title="'.phptal_escape($_tmp_2).'"' ;
endif ;
$ctx->noThrow(false) ;
?>
<a<?php echo $_tmp_1 ?>
<?php echo $_tmp_2 ?>
>
						<?php 
/* tag "img" from line 544 */ ;
$ctx->noThrow(true) ;
if (!phptal_isempty($_tmp_3 = ($ctx->path($ctx->News2, 'getImage', true)))):  ;
$_tmp_3 = ' src="'.phptal_escape($_tmp_3).'"' ;
elseif (null !== ($_tmp_3 = ('/data/images/exit_picture.jpg'))):  ;
$_tmp_3 = ' src="'.phptal_escape($_tmp_3).'"' ;
endif ;
$ctx->noThrow(false) ;
?>
<img width="100%" height="124"<?php echo $_tmp_3 ?>
/>
						<?php /* tag "div" from line 545 */; ?>
<div class="box-right-title"><?php 
$ctx->noThrow(true) ;
if (!phptal_isempty($_tmp_3 = $ctx->path($ctx->News2, 'getTitle', true))):  ;
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
			</td></tr>
			<?php /* tag "tr" from line 549 */; ?>
<tr><?php /* tag "td" from line 549 */; ?>
<td width="50%" align="left">
				<?php /* tag "div" from line 550 */; ?>
<div class="box-right">
					<?php 
/* tag "a" from line 551 */ ;
$ctx->noThrow(true) ;
if (!phptal_isempty($_tmp_3 = ($ctx->path($ctx->News3, 'getURLRead', true)))):  ;
$_tmp_3 = ' href="'.phptal_escape($_tmp_3).'"' ;
elseif (null !== ($_tmp_3 = ('#'))):  ;
$_tmp_3 = ' href="'.phptal_escape($_tmp_3).'"' ;
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
<a<?php echo $_tmp_3 ?>
<?php echo $_tmp_1 ?>
>
						<?php 
/* tag "img" from line 552 */ ;
$ctx->noThrow(true) ;
if (!phptal_isempty($_tmp_2 = ($ctx->path($ctx->News3, 'getImage', true)))):  ;
$_tmp_2 = ' src="'.phptal_escape($_tmp_2).'"' ;
elseif (null !== ($_tmp_2 = ('/data/images/exit_picture.jpg'))):  ;
$_tmp_2 = ' src="'.phptal_escape($_tmp_2).'"' ;
endif ;
$ctx->noThrow(false) ;
?>
<img width="100%" height="124"<?php echo $_tmp_2 ?>
/>
						<?php /* tag "div" from line 553 */; ?>
<div class="box-right-title"><?php 
$ctx->noThrow(true) ;
if (!phptal_isempty($_tmp_2 = $ctx->path($ctx->News3, 'getTitle', true))):  ;
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
			</td>
			<?php /* tag "td" from line 557 */; ?>
<td width="50%" align="right">
				<?php /* tag "div" from line 558 */; ?>
<div class="box-right">
					<?php /* tag "a" from line 559 */; ?>
<a href="/intro/1" title="Số phận long đong của &quot;ngôi chùa hoàng tộc&quot; miền Tây">
						<?php 
/* tag "img" from line 560 */ ;
if (null !== ($_tmp_2 = ('/data/images/ChuaKhaiTuong.jpg'))):  ;
$_tmp_2 = ' src="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<img width="100%" height="124"<?php echo $_tmp_2 ?>
/>
						<?php /* tag "div" from line 561 */; ?>
<div class="box-right-title">Số phận long đong của "ngôi chùa hoàng tộc" miền Tây</div>
					</a>
				</div>
			</td></tr>
		</table>
	</div><?php 
}

 ?>
<?php 
function tpl_51999072_macros__x6FYd5UW5CqAyLKo2_POnA_AdminMenu(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div class="manager-menu">
		<?php /* tag "ul" from line 467 */; ?>
<ul>
			<?php 
/* tag "a" from line 468 */ ;
if (null !== ($_tmp_2 = ('/app/course'))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
>
				<?php 
/* tag "li" from line 469 */ ;
if (null !== ($_tmp_3 = ($ctx->ActiveAdmin=='Course'?'menu-select':'?'))):  ;
$_tmp_3 = ' class="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<li<?php echo $_tmp_3 ?>
>					
					<?php /* tag "div" from line 470 */; ?>
<div class="left">ĐÀO TẠO</div>
					<?php /* tag "div" from line 471 */; ?>
<div class="right"><?php echo phptal_escape($ctx->path($ctx->Courses, 'count')); ?>
</div>
				</li>
			</a>
			<?php 
/* tag "a" from line 474 */ ;
if (null !== ($_tmp_1 = ('/app/category/news'))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
>
				<?php 
/* tag "li" from line 475 */ ;
if (null !== ($_tmp_3 = ($ctx->ActiveAdmin=='News'?'menu-select':'?'))):  ;
$_tmp_3 = ' class="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<li<?php echo $_tmp_3 ?>
>
					<?php /* tag "div" from line 476 */; ?>
<div class="left">CHUYÊN MỤC TIN TỨC</div>
					<?php /* tag "div" from line 477 */; ?>
<div class="right"><?php echo phptal_escape($ctx->path($ctx->CategoriesNews, 'count')); ?>
</div>
				</li>
			</a>
			<?php 
/* tag "a" from line 480 */ ;
if (null !== ($_tmp_2 = ('/app/category/video'))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
>
				<?php 
/* tag "li" from line 481 */ ;
if (null !== ($_tmp_3 = ($ctx->ActiveAdmin=='Video'?'menu-select':'?'))):  ;
$_tmp_3 = ' class="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<li<?php echo $_tmp_3 ?>
>
					<?php /* tag "div" from line 482 */; ?>
<div class="left">CHUYÊN MỤC VIDEO</div>
					<?php /* tag "div" from line 483 */; ?>
<div class="right"><?php echo phptal_escape($ctx->path($ctx->CategoriesVideo, 'count')); ?>
</div>
				</li>
			</a>
			<?php 
/* tag "a" from line 486 */ ;
if (null !== ($_tmp_1 = ('/app/category/ask'))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
>
				<?php 
/* tag "li" from line 487 */ ;
if (null !== ($_tmp_3 = ($ctx->ActiveAdmin=='Ask'?'menu-select':'?'))):  ;
$_tmp_3 = ' class="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<li<?php echo $_tmp_3 ?>
>
					<?php /* tag "div" from line 488 */; ?>
<div class="left">CHUYÊN MỤC HỎI ĐÁP</div>
					<?php /* tag "div" from line 489 */; ?>
<div class="right"><?php echo phptal_escape($ctx->path($ctx->CategoriesAsk, 'count')); ?>
</div>
				</li>
			</a>
			<?php 
/* tag "a" from line 492 */ ;
if (null !== ($_tmp_2 = ('/app/monk'))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
>
				<?php 
/* tag "li" from line 493 */ ;
if (null !== ($_tmp_3 = ($ctx->ActiveAdmin=='Monk'?'menu-select':'?'))):  ;
$_tmp_3 = ' class="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<li<?php echo $_tmp_3 ?>
>
					<?php /* tag "div" from line 494 */; ?>
<div class="left">DANH SÁCH GIẢNG SƯ</div>
					<?php /* tag "div" from line 495 */; ?>
<div class="right"><?php echo phptal_escape($ctx->path($ctx->Monks, 'count')); ?>
</div>
				</li>
			</a>
			<?php 
/* tag "a" from line 498 */ ;
if (null !== ($_tmp_1 = ('/app/event'))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
>
				<?php 
/* tag "li" from line 499 */ ;
if (null !== ($_tmp_3 = ($ctx->ActiveAdmin=='Event'?'menu-select':'?'))):  ;
$_tmp_3 = ' class="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<li<?php echo $_tmp_3 ?>
>
					<?php /* tag "div" from line 500 */; ?>
<div class="left">DANH SÁCH SỰ KIỆN</div>
					<?php /* tag "div" from line 501 */; ?>
<div class="right"><?php echo phptal_escape($ctx->path($ctx->Events, 'count')); ?>
</div>
				</li>
			</a>
			<?php 
/* tag "a" from line 504 */ ;
if (null !== ($_tmp_2 = ('/app/pagoda'))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
>
				<?php 
/* tag "li" from line 505 */ ;
if (null !== ($_tmp_3 = ($ctx->ActiveAdmin=='Pagoda'?'menu-select':'?'))):  ;
$_tmp_3 = ' class="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<li<?php echo $_tmp_3 ?>
>
					<?php /* tag "div" from line 506 */; ?>
<div class="left">DANH SÁCH CHÙA</div>
					<?php /* tag "div" from line 507 */; ?>
<div class="right"><?php echo phptal_escape($ctx->path($ctx->Pagodas, 'count')); ?>
</div>
				</li>
			</a>
			<?php 
/* tag "a" from line 510 */ ;
if (null !== ($_tmp_1 = ('/app/album'))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
>
				<?php 
/* tag "li" from line 511 */ ;
if (null !== ($_tmp_3 = ($ctx->ActiveAdmin=='Album'?'menu-select':'?'))):  ;
$_tmp_3 = ' class="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<li<?php echo $_tmp_3 ?>
>
					<?php /* tag "div" from line 512 */; ?>
<div class="left">DANH SÁCH ALBUM</div>
					<?php /* tag "div" from line 513 */; ?>
<div class="right"><?php echo phptal_escape($ctx->path($ctx->Albums, 'count')); ?>
</div>
				</li>
			</a>
			<?php 
/* tag "a" from line 516 */ ;
if (null !== ($_tmp_2 = ('/app/sponsor'))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
>
				<?php 
/* tag "li" from line 517 */ ;
if (null !== ($_tmp_3 = ($ctx->ActiveAdmin=='Sponsor'?'menu-select':'?'))):  ;
$_tmp_3 = ' class="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<li<?php echo $_tmp_3 ?>
>
					<?php /* tag "div" from line 518 */; ?>
<div class="left">SỔ VÀNG ỦNG HỘ</div>
					<?php /* tag "div" from line 519 */; ?>
<div class="right"><?php echo '0'; ?>
</div>
				</li>
			</a>
			<?php 
/* tag "a" from line 522 */ ;
if (null !== ($_tmp_1 = ('/app/config'))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
>
				<?php 
/* tag "li" from line 523 */ ;
if (null !== ($_tmp_3 = ($ctx->ActiveAdmin=='Statistic'?'menu-select':'?'))):  ;
$_tmp_3 = ' class="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<li<?php echo $_tmp_3 ?>
>
					CẤU HÌNH
				</li>
			</a>			
		</ul>
	</div><?php 
}

 ?>
<?php 
function tpl_51999072_macros__x6FYd5UW5CqAyLKo2_POnA_Footer(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div id="footer">
		<?php /* tag "div" from line 433 */; ?>
<div id="bottom-menu">
			<?php /* tag "ul" from line 434 */; ?>
<ul class="top-nav">
				<?php /* tag "li" from line 435 */; ?>
<li><?php /* tag "a" from line 435 */; ?>
<a href="/home">Trang chủ</a></li>								
				<?php /* tag "li" from line 436 */; ?>
<li><?php /* tag "a" from line 436 */; ?>
<a href="/news">Tin tức</a></li>
				<?php /* tag "li" from line 437 */; ?>
<li><?php /* tag "a" from line 437 */; ?>
<a href="/course">Đào tạo</a></li>
				<?php /* tag "li" from line 438 */; ?>
<li><?php /* tag "a" from line 438 */; ?>
<a href="/event">Sự kiện</a></li>				
				<?php /* tag "li" from line 439 */; ?>
<li><?php /* tag "a" from line 439 */; ?>
<a href="/library/video">PHẬT ÂM</a></li>
				<?php /* tag "li" from line 440 */; ?>
<li><?php /* tag "a" from line 440 */; ?>
<a href="/ask/2/ins/load">Hỏi đáp</a></li>				
				<?php /* tag "li" from line 441 */; ?>
<li><?php /* tag "a" from line 441 */; ?>
<a href="/library/album">Ảnh hoạt động</a></li>
				<?php /* tag "li" from line 442 */; ?>
<li><?php /* tag "a" from line 442 */; ?>
<a href="/pagoda">Danh bạ</a></li>				
				<?php /* tag "li" from line 443 */; ?>
<li><?php /* tag "a" from line 443 */; ?>
<a href="/contact">Liên hệ</a></li>
				<?php /* tag "li" from line 444 */; ?>
<li id="last"><?php /* tag "a" from line 444 */; ?>
<a href="/signin/load">Quản trị</a></li>
			</ul>
		</div>
		<?php /* tag "div" from line 447 */; ?>
<div id="copy-right">
			<?php /* tag "div" from line 448 */; ?>
<div><?php /* tag "b" from line 448 */; ?>
<b>© 12/2012 Chùa Khải Tường</b></div>
			<?php /* tag "div" from line 449 */; ?>
<div>Biên tập - Đại Đức Thích Nhuận Tâm</div>
			<?php /* tag "div" from line 450 */; ?>
<div>Phát triển - SPN Co, Ltd &amp; Nguyên Phong ICT</div>
			<?php /* tag "div" from line 451 */; ?>
<div>Ghi rõ nguồn <?php /* tag "b" from line 451 */; ?>
<b><?php /* tag "i" from line 451 */; ?>
<i>chuakhaituong.com</i></b> khi phát hành thông tin từ website này</div>
		</div>
		<?php /* tag "div" from line 453 */; ?>
<div id="add-contact">
			<?php /* tag "div" from line 454 */; ?>
<div><?php /* tag "b" from line 454 */; ?>
<b>Chùa Khải Tường</b>, Số 319B2, ấp Mỹ Phú, xã Mỹ Đức Đông, Cái Bè, Tiền Giang, Việt Nam</div>
			<?php /* tag "div" from line 455 */; ?>
<div><?php /* tag "b" from line 455 */; ?>
<b>Điện thoại:</b> (073) 3600 943 - <?php /* tag "b" from line 455 */; ?>
<b>Di Động:</b> 0918 852 102</div>
			<?php /* tag "div" from line 456 */; ?>
<div><?php /* tag "b" from line 456 */; ?>
<b>Email:</b> nhuantamkhaituong@gmail.com (nhuantam@chuakhaituong.com)</div>
			<?php /* tag "div" from line 457 */; ?>
<div><?php /* tag "b" from line 457 */; ?>
<b>Website:</b> 
				<?php /* tag "a" from line 458 */; ?>
<a href="http://chuakhaituong.com">http://chuakhaituong.com</a> 
				<?php /* tag "small" from line 459 */; ?>
<small>(<?php /* tag "a" from line 459 */; ?>
<a href="http://quocankhaituongtu.com">http://quocankhaituongtu.com</a> -
				<?php /* tag "a" from line 460 */; ?>
<a href="http://chuaquocankhaituong.vn">http://chuaquocankhaituong.vn</a>)</small>
			</div>
		</div>
	</div><?php 
}

 ?>
<?php 
function tpl_51999072_macros__x6FYd5UW5CqAyLKo2_POnA_CountBoxMini(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div id="count" class="sidebar-box-mini">
		<?php /* tag "div" from line 402 */; ?>
<div class="box-title">
			<?php /* tag "img" from line 403 */; ?>
<img src="/data/images/icon.png" width="30"/>
			<?php /* tag "span" from line 404 */; ?>
<span>Thống kê</span>
		</div>
		<?php /* tag "div" from line 406 */; ?>
<div class="sidebar-box-content">
			<?php /* tag "div" from line 407 */; ?>
<div style="padding:10px; line-height:25px; font-size:12px">
				<?php /* tag "table" from line 408 */; ?>
<table border="0" cellpadding="0" cellspacing="0" width="100%"><?php /* tag "tr" from line 408 */; ?>
<tr>
					<?php /* tag "td" from line 409 */; ?>
<td width="55%" align="left">
						<?php /* tag "div" from line 410 */; ?>
<div style="color:#980707; font-size:13px;">
							<?php /* tag "span" from line 411 */; ?>
<span><?php /* tag "b" from line 411 */; ?>
<b>Online: </b></span>
							<?php /* tag "span" from line 412 */; ?>
<span><?php echo phptal_escape(\MVC\Library\Statistic::getOnlinePrint()); ?>
</span>
							<?php /* tag "br" from line 413 */; ?>
<br/>
							<?php /* tag "span" from line 414 */; ?>
<span><?php /* tag "b" from line 414 */; ?>
<b>Truy cập: </b></span>
							<?php /* tag "span" from line 415 */; ?>
<span><?php echo phptal_escape(\MVC\Library\Statistic::getCountPrint()); ?>
</span>
							<?php /* tag "span" from line 416 */; ?>
<span> lượt</span>
						</div>
					</td>
					<?php /* tag "td" from line 419 */; ?>
<td width="45%" align="left">
						<?php /* tag "a" from line 420 */; ?>
<a href="online" style="color: #980707;">
							<?php /* tag "img" from line 421 */; ?>
<img src="/data/images/online_logo.png" width="80px"/>
							<?php /* tag "div" from line 422 */; ?>
<div>G.lưu trực tuyến</div>
						</a>
					</td>
				</tr></table>
			</div>
		</div>
		<?php /* tag "div" from line 428 */; ?>
<div class="clear"></div>
	</div><?php 
}

 ?>
<?php 
function tpl_51999072_macros__x6FYd5UW5CqAyLKo2_POnA_CountBox(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div id="count" class="sidebar-box">
		<?php /* tag "div" from line 368 */; ?>
<div class="box-title">
			<?php /* tag "img" from line 369 */; ?>
<img src="/data/images/icon.png" width="30"/>
			<?php /* tag "span" from line 370 */; ?>
<span>Trực tuyến</span>
		</div>
		<?php /* tag "div" from line 372 */; ?>
<div class="sidebar-box-content">
			<?php /* tag "div" from line 373 */; ?>
<div style="padding:10px; line-height:25px; font-size:12px">
				<?php /* tag "table" from line 374 */; ?>
<table border="0" cellpadding="0" cellspacing="0" width="100%"><?php /* tag "tr" from line 374 */; ?>
<tr>
					<?php /* tag "td" from line 375 */; ?>
<td width="40%" align="center">
						<?php /* tag "a" from line 376 */; ?>
<a href="online" style="color: #980707;">
							<?php /* tag "img" from line 377 */; ?>
<img src="/data/images/online_logo.png" width="80px"/>
							<?php /* tag "h4" from line 378 */; ?>
<h4>Giao lưu trực tuyến</h4>
						</a>
					</td>
					<?php /* tag "td" from line 381 */; ?>
<td width="60%" align="left">
						<?php /* tag "div" from line 382 */; ?>
<div style="color:#980707; font-size:12px; margin-left:20px;">
							<?php /* tag "div" from line 383 */; ?>
<div style="text-align:center; font-size:12px;">Website được thành lập vào <?php /* tag "b" from line 383 */; ?>
<b>12/2012</b></div>
							<?php /* tag "hr" from line 384 */; ?>
<hr style="border-color:#980707; margin:5px;"/>
							<?php /* tag "span" from line 385 */; ?>
<span><?php /* tag "img" from line 385 */; ?>
<img src="/data/images/user_online_logo.png"/> <?php /* tag "b" from line 385 */; ?>
<b>Online: </b></span>
							<?php /* tag "span" from line 386 */; ?>
<span><?php echo phptal_escape(\MVC\Library\Statistic::getOnlinePrint()); ?>
</span>
							<?php /* tag "br" from line 387 */; ?>
<br/>
							<?php /* tag "span" from line 388 */; ?>
<span><?php /* tag "img" from line 388 */; ?>
<img src="/data/images/count_logo.gif"/> <?php /* tag "b" from line 388 */; ?>
<b>Truy cập: </b></span>
							<?php /* tag "span" from line 389 */; ?>
<span><?php echo phptal_escape(\MVC\Library\Statistic::getCountPrint()); ?>
</span>
							<?php /* tag "span" from line 390 */; ?>
<span> lượt</span>
						</div>
					</td>
				</tr>
				</table>
			</div>
		</div>
		<?php /* tag "div" from line 397 */; ?>
<div class="clear"></div>
	</div><?php 
}

 ?>
<?php 
function tpl_51999072_macros__x6FYd5UW5CqAyLKo2_POnA_SponsorBoxMini(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div id="count" class="sidebar-box-mini">
		<?php /* tag "div" from line 351 */; ?>
<div class="box-title">
			<?php /* tag "img" from line 352 */; ?>
<img src="/data/images/icon.png" width="30"/>
			<?php /* tag "span" from line 353 */; ?>
<span>Trợ duyên</span>
		</div>
		<?php /* tag "div" from line 355 */; ?>
<div class="sidebar-box-content">
			<?php /* tag "div" from line 356 */; ?>
<div align="center" style="padding:10px;">
				<?php /* tag "a" from line 357 */; ?>
<a href="/sponsor" style="color: #980707;">
					<?php /* tag "img" from line 358 */; ?>
<img src="/data/images/sponsor_logo.gif" width="120px"/>
					<?php /* tag "h3" from line 359 */; ?>
<h3>Ủng Hộ Website</h3>
				</a>
			</div>
		</div>
		<?php /* tag "div" from line 363 */; ?>
<div class="clear"></div>
	</div><?php 
}

 ?>
<?php 
function tpl_51999072_macros__x6FYd5UW5CqAyLKo2_POnA_SponsorBox(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div id="emty2" class="sidebar-box">
		<?php /* tag "div" from line 326 */; ?>
<div class="box-title">
			<?php /* tag "img" from line 327 */; ?>
<img src="/data/images/icon.png" width="30"/>
			<?php /* tag "span" from line 328 */; ?>
<span>Trợ duyên</span>
		</div>
		<?php /* tag "div" from line 330 */; ?>
<div class="sidebar-box-content">
			<?php /* tag "div" from line 331 */; ?>
<div align="center" style="padding:10px;">
				<?php /* tag "table" from line 332 */; ?>
<table border="0" cellpadding="0" cellspacing="0" width="100%"><?php /* tag "tr" from line 332 */; ?>
<tr>
					<?php /* tag "td" from line 333 */; ?>
<td width="50%" align="center">
						<?php /* tag "a" from line 334 */; ?>
<a href="/sponsor" style="color: #980707;">
							<?php /* tag "img" from line 335 */; ?>
<img src="/data/images/sponsor_logo.gif" width="150px"/>
						</a>
					</td>
					<?php /* tag "td" from line 338 */; ?>
<td width="50%" align="center">
						<?php /* tag "a" from line 339 */; ?>
<a href="/sponsor" style="color:#980707; line-height:40px;">
							<?php /* tag "h1" from line 340 */; ?>
<h1>Ủng Hộ Website</h1>
						</a>
					</td>
				</tr></table>
			</div>
		</div>
		<?php /* tag "div" from line 346 */; ?>
<div class="clear"></div>
	</div><?php 
}

 ?>
<?php 
function tpl_51999072_macros__x6FYd5UW5CqAyLKo2_POnA_TextGo(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div id="text-go">
		<?php /* tag "marquee" from line 321 */; ?>
<marquee>Kính chúc chư tôn đức tăng ni cùng quý phật tử thân tâm thường an lạc ! Nguyện đem công đức này hướng về khắp tất cả đệ tử và chúng sanh điều trọn thành Phật Đạo.</marquee>
	</div><?php 
}

 ?>
<?php 
function tpl_51999072_macros__x6FYd5UW5CqAyLKo2_POnA_DateTimeBox(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div id="date-time">
		<?php /* tag "script" from line 314 */; ?>
<script type="text/javascript">				
			getLunarDateString(09,11,2012,16,39,13);									
		</script>
	</div><?php 
}

 ?>
<?php 
function tpl_51999072_macros__x6FYd5UW5CqAyLKo2_POnA_CallendarBoxMini(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div id="calendar" class="sidebar-box-mini">
		<?php /* tag "div" from line 291 */; ?>
<div class="box-title">
			<?php /* tag "img" from line 292 */; ?>
<img src="/data/images/icon.png" width="30"/>
			<?php /* tag "span" from line 293 */; ?>
<span>Lịch Âm Dương</span>
		</div>
		<?php /* tag "div" from line 295 */; ?>
<div class="sidebar-box-content">
			<?php /* tag "div" from line 296 */; ?>
<div align="center">
				<?php /* tag "script" from line 297 */; ?>
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
		<?php /* tag "div" from line 309 */; ?>
<div class="clear"></div>
	</div><?php 
}

 ?>
<?php 
function tpl_51999072_macros__x6FYd5UW5CqAyLKo2_POnA_CallendarBox(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div id="calendar" class="sidebar-box">
		<?php /* tag "div" from line 269 */; ?>
<div class="box-title">
			<?php /* tag "img" from line 270 */; ?>
<img src="/data/images/icon.png" width="30"/>
			<?php /* tag "span" from line 271 */; ?>
<span>Lịch Dương <?php /* tag "small" from line 271 */; ?>
<small>Âm</small></span>
		</div>
		<?php /* tag "div" from line 273 */; ?>
<div class="sidebar-box-content">
			<?php /* tag "div" from line 274 */; ?>
<div align="center">
				<?php /* tag "script" from line 275 */; ?>
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
		<?php /* tag "div" from line 287 */; ?>
<div class="clear"></div>
	</div><?php 
}

 ?>
<?php 
function tpl_51999072_macros__x6FYd5UW5CqAyLKo2_POnA_AskBoxMini(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div id="question" class="sidebar-box-mini">
		<?php /* tag "div" from line 252 */; ?>
<div class="box-title">
			<?php /* tag "img" from line 253 */; ?>
<img src="/data/images/icon.png" width="30"/>
			<?php /* tag "span" from line 254 */; ?>
<span>Hỏi đáp PHẬT HỌC</span>
		</div>
		<?php /* tag "div" from line 256 */; ?>
<div class="sidebar-box-content">
			<?php /* tag "div" from line 257 */; ?>
<div align="center" style="padding:10px;">
				<?php /* tag "a" from line 258 */; ?>
<a href="/ask" style="color: #980707;">
					<?php /* tag "img" from line 259 */; ?>
<img src="/data/images/question_logo.png"/>
					<?php /* tag "div" from line 260 */; ?>
<div>Hỏi đáp PHẬT HỌC</div>
				</a>
			</div>
		</div>
		<?php /* tag "div" from line 264 */; ?>
<div class="clear"></div>
	</div><?php 
}

 ?>
<?php 
function tpl_51999072_macros__x6FYd5UW5CqAyLKo2_POnA_AskBox(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div id="question" class="sidebar-box">
		<?php /* tag "div" from line 227 */; ?>
<div class="box-title">
			<?php /* tag "img" from line 228 */; ?>
<img src="/data/images/icon.png" width="30"/>
			<?php /* tag "span" from line 229 */; ?>
<span>Hỏi đáp PHẬT HỌC</span>
		</div>
		<?php /* tag "div" from line 231 */; ?>
<div class="sidebar-box-content">
			<?php /* tag "div" from line 232 */; ?>
<div align="center" style="padding:10px;">
				<?php /* tag "table" from line 233 */; ?>
<table border="0" cellpadding="0" cellspacing="0" width="100%"><?php /* tag "tr" from line 233 */; ?>
<tr>
					<?php /* tag "td" from line 234 */; ?>
<td width="50%" align="center">
						<?php /* tag "a" from line 235 */; ?>
<a href="/ask/1" style="color: #980707;">
							<?php /* tag "img" from line 236 */; ?>
<img src="/data/images/question_logo.jpg" width="120px"/>
						</a>
					</td>
					<?php /* tag "td" from line 239 */; ?>
<td width="50%" align="center">
						<?php /* tag "a" from line 240 */; ?>
<a href="/ask/1" style="color: #980707; line-height:35px;">
							<?php /* tag "h3" from line 241 */; ?>
<h3>Hỏi <?php /* tag "small" from line 241 */; ?>
<small>&amp; </small>Đáp</h3>
							<?php /* tag "h1" from line 242 */; ?>
<h1>PHẬT HỌC</h1>
						</a>
					</td>
				</tr></table>
			</div>
		</div>
		<?php /* tag "div" from line 248 */; ?>
<div class="clear"></div>
	</div><?php 
}

 ?>
<?php 
function tpl_51999072_macros__x6FYd5UW5CqAyLKo2_POnA_VideoBox(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div id="phatam" class="sidebar-box">
		<?php /* tag "div" from line 202 */; ?>
<div class="box-title">
			<?php /* tag "img" from line 203 */; ?>
<img src="/data/images/icon.png" width="30"/>
			<?php /* tag "span" from line 204 */; ?>
<span>PHẬT ÂM</span>
		</div>
		<?php /* tag "div" from line 206 */; ?>
<div class="sidebar-box-content">
			<?php /* tag "div" from line 207 */; ?>
<div align="center" style="padding:10px;">
				<?php /* tag "table" from line 208 */; ?>
<table border="0" cellpadding="0" cellspacing="0" width="100%"><?php /* tag "tr" from line 208 */; ?>
<tr>
					<?php /* tag "td" from line 209 */; ?>
<td width="50%" align="center">
						<?php /* tag "a" from line 210 */; ?>
<a href="/library/video">
							<?php /* tag "img" from line 211 */; ?>
<img src="/data/images/phatam_logo.gif" width="150px"/>
						</a>
					</td>
					<?php /* tag "td" from line 214 */; ?>
<td width="50%" align="center">
						<?php /* tag "a" from line 215 */; ?>
<a href="/library/video" style="color:#980707; line-height:30px;">
							<?php /* tag "h3" from line 216 */; ?>
<h3>Giới thiệu trang chia sẻ PHẬT ÂM lớn &amp; phổ biến nhất</h3>
						</a>
					</td>
				</tr></table>
			</div>
		</div>
		<?php /* tag "div" from line 222 */; ?>
<div class="clear"></div>
	</div><?php 
}

 ?>
<?php 
function tpl_51999072_macros__x6FYd5UW5CqAyLKo2_POnA_CourseBox(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
if ($ctx->Course):  ;
?>
<div id="emty" class="sidebar-box">
		<?php 
/* tag "div" from line 164 */ ;
if ($ctx->path($ctx->Course, 'getLessionNext')):  ;
?>
<div>
			<?php 
/* tag "div" from line 165 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Course, 'getLessionNext/getDateEnd')))):  ;
$_tmp_1 = ' alt="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<div id="CourseBox" class="box-title"<?php echo $_tmp_1 ?>
>
				<?php /* tag "img" from line 166 */; ?>
<img src="/data/images/icon.png" width="30"/>
				<?php /* tag "span" from line 167 */; ?>
<span>SẮP KHAI GIẢNG</span>
			</div>
		</div><?php endif; ?>

		<?php 
/* tag "div" from line 170 */ ;
if ($ctx->path($ctx->Course, 'getLessionNext')):  ;
?>
<div class="sidebar-box-content">
			<?php /* tag "div" from line 171 */; ?>
<div align="center" style="padding-top:10px;">
				<?php 
/* tag "a" from line 172 */ ;
if (null !== ($_tmp_3 = ($ctx->path($ctx->Course, 'getLessionNext/getURLRead')))):  ;
$_tmp_3 = ' href="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<a<?php echo $_tmp_3 ?>
>
					<?php 
/* tag "img" from line 173 */ ;
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
			<?php /* tag "div" from line 176 */; ?>
<div align="center" style="padding:10px;">
				<?php 
/* tag "a" from line 177 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Course, 'getLessionNext/getURLRead')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a style="font-size:12px; color:#980707; line-height:30px;"<?php echo $_tmp_1 ?>
>
					<?php /* tag "h1" from line 178 */; ?>
<h1><?php echo phptal_escape($ctx->path($ctx->Course, 'getLessionNext/getName')); ?>
</h1>
				</a>
			</div>
			<?php /* tag "div" from line 181 */; ?>
<div style="margin-left:10px;">
				<?php /* tag "div" from line 182 */; ?>
<div id="CourseCountdown"></div>
			</div>
			<?php /* tag "script" from line 184 */; ?>
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
			<?php /* tag "div" from line 196 */; ?>
<div class="clear"></div>
		</div><?php endif; ?>

	</div><?php 
endif ;

}

?>
<?php 
function tpl_51999072_macros__x6FYd5UW5CqAyLKo2_POnA_EventBoxMini(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div id="emty" class="sidebar-box-mini">
		<?php 
/* tag "div" from line 129 */ ;
if (null !== ($_tmp_3 = ($ctx->path($ctx->Event, 'getDate')))):  ;
$_tmp_3 = ' alt="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<div id="Event" class="box-title"<?php echo $_tmp_3 ?>
>
			<?php /* tag "img" from line 130 */; ?>
<img src="/data/images/icon.png" width="30"/>
			<?php /* tag "span" from line 131 */; ?>
<span>Sự kiện sắp xảy ra</span>
		</div>
		<?php /* tag "div" from line 133 */; ?>
<div class="sidebar-box-content">
			<?php /* tag "div" from line 134 */; ?>
<div align="center" style="height:30px; padding-top:10px; margin-bottom:30px;">
				<?php 
/* tag "a" from line 135 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Event, 'getURLRead')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a style="font-size:15px; color:#980707; line-height:30px;"<?php echo $_tmp_2 ?>
>
					<?php /* tag "h3" from line 136 */; ?>
<h3><?php echo phptal_escape($ctx->path($ctx->Event, 'getTitle')); ?>
</h3>
				</a>
			</div>
			<?php /* tag "div" from line 139 */; ?>
<div style="margin-left:-3px;">
				<?php /* tag "div" from line 140 */; ?>
<div id="defaultCountdown"></div>
			</div>
			<?php /* tag "script" from line 142 */; ?>
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
			<?php /* tag "div" from line 156 */; ?>
<div class="clear"></div>
		</div>
	</div><?php 
}

 ?>
<?php 
function tpl_51999072_macros__x6FYd5UW5CqAyLKo2_POnA_EventBox(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div id="emty" class="sidebar-box">
		<?php 
/* tag "div" from line 92 */ ;
if ($ctx->Event):  ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Event, 'getDate')))):  ;
$_tmp_1 = ' alt="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<div id="Event" class="box-title"<?php echo $_tmp_1 ?>
>
			<?php /* tag "img" from line 93 */; ?>
<img src="/data/images/icon.png" width="30"/>
			<?php /* tag "span" from line 94 */; ?>
<span>Sự kiện sắp xảy ra</span>
		</div><?php endif; ?>
		
		<?php 
/* tag "div" from line 96 */ ;
if ($ctx->Event):  ;
?>
<div class="sidebar-box-content">
			<?php /* tag "div" from line 97 */; ?>
<div align="center" style="padding-top:10px;">
				<?php 
/* tag "a" from line 98 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Event, 'getURLRead')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
>
					<?php 
/* tag "img" from line 99 */ ;
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
			<?php /* tag "div" from line 102 */; ?>
<div align="center" style="padding:10px;">
				<?php 
/* tag "a" from line 103 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Event, 'getURLRead')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a style="font-size:12px; color:#980707; line-height:30px;"<?php echo $_tmp_1 ?>
>
					<?php /* tag "h1" from line 104 */; ?>
<h1><?php echo phptal_escape($ctx->path($ctx->Event, 'getTitle')); ?>
</h1>
				</a>
			</div>
			<?php /* tag "div" from line 107 */; ?>
<div style="margin-left:10px;">
				<?php /* tag "div" from line 108 */; ?>
<div id="defaultCountdown"></div>
			</div>
			<?php /* tag "script" from line 110 */; ?>
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
			<?php /* tag "div" from line 123 */; ?>
<div class="clear"></div>
		</div><?php endif; ?>

	</div><?php 
}

 ?>
<?php 
function tpl_51999072_macros__x6FYd5UW5CqAyLKo2_POnA_Header(PHPTAL $_thistpl, PHPTAL $tpl) {
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
function tpl_51999072_macros__x6FYd5UW5CqAyLKo2_POnA_IncludeJS(PHPTAL $_thistpl, PHPTAL $tpl) {
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
function tpl_51999072_macros__x6FYd5UW5CqAyLKo2_POnA_IncludeCSS(PHPTAL $_thistpl, PHPTAL $tpl) {
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
function tpl_51999072_macros__x6FYd5UW5CqAyLKo2_POnA(PHPTAL $tpl, PHPTAL_Context $ctx) {
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
	<?php /* tag "div" from line 91 */; ?>

	
	<!-- EVENT BOX MINI -->
	<?php /* tag "div" from line 128 */; ?>

	
	<!-- ================================================================================== -->
	<!-- COURSE BOX 																		-->
	<!-- ================================================================================== -->	
	<?php /* tag "div" from line 163 */; ?>


	<!-- PHATAM BOX Ở CỘT 2 -->
	<?php /* tag "div" from line 201 */; ?>

	
	<!-- QUESTION BOX Ở CỘT 2 -->
	<?php /* tag "div" from line 226 */; ?>

	
	<?php /* tag "div" from line 251 */; ?>


	<!-- CALENDAR BOX Ở CỘT 2 -->
	<?php /* tag "div" from line 268 */; ?>

	
	<?php /* tag "div" from line 290 */; ?>

	
	<!-- DATE TIME BOX -->
	<?php /* tag "div" from line 313 */; ?>

	
	<!-- TEXT GO -->
	<?php /* tag "div" from line 320 */; ?>

	
	<!-- SPONSOR BOX -->
	<?php /* tag "div" from line 325 */; ?>

	
	<!-- SPONSOR BOX MINI -->
	<?php /* tag "div" from line 350 */; ?>

	
	<!-- COUNT BOX Ở CỘT 2 -->
	<?php /* tag "div" from line 367 */; ?>

		
	<!-- COUNT MINI BOX Ở CỘT 3 -->
	<?php /* tag "div" from line 401 */; ?>

	
	<!-- FOOTER Ở DƯỚI TRANG -->
	<?php /* tag "div" from line 432 */; ?>

	
	<!-- ADMIN MENU -->
	<?php /* tag "div" from line 466 */; ?>


	<!-- BOX RIGHT -->
	<?php /* tag "div" from line 531 */; ?>

	
	<!-- ================================================================================== -->
	<!-- TOP VIDEO BOX 																		-->
	<!-- ================================================================================== -->
	<?php /* tag "div" from line 571 */; ?>

	
	<?php /* tag "div" from line 655 */; ?>

	
	<?php /* tag "div" from line 672 */; ?>

</body>
</html><?php 
/* end */ ;

}

?>
<?php /* 
*** DO NOT EDIT THIS FILE ***

Generated by PHPTAL from E:\AppWebServer\chuakhaituong.123app.net\mvc\templates\macros.xhtml (edit that file instead) */; ?>