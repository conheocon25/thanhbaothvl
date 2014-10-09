<?php 
function tpl_5006980f_macros__u8g0F5ljTNnnxBMVsG4AHA_page(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div>
		<?php /* tag "div" from line 504 */; ?>
<div class="Menupage">
		<?php 
/* tag "a" from line 505 */ ;
if (null !== ($_tmp_3 = ($ctx->firstpage))):  ;
$_tmp_3 = ' href="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<a<?php echo $_tmp_3 ?>
>&lt; Trang đầu</a>
		<?php 
/* tag "span" from line 506 */ ;
$_tmp_2 = $ctx->repeat ;
$_tmp_2->page = new PHPTAL_RepeatController($ctx->LinkPage)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_2->page as $ctx->page): ;
?>
<span>			
			<?php 
/* tag "a" from line 507 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->page, 'getLinked')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
if (null !== ($_tmp_3 = ($ctx->path($ctx->page, 'id')))):  ;
$_tmp_3 = ' id="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
<?php echo $_tmp_3 ?>
><?php echo phptal_escape($ctx->path($ctx->page, 'id')); ?>
</a>				
		</span><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

		<?php 
/* tag "a" from line 509 */ ;
if (null !== ($_tmp_1 = ($ctx->lastpage))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
>Trang cuối > </a>
		</div>		
	</div><?php 
}

 ?>
<?php 
function tpl_5006980f_macros__u8g0F5ljTNnnxBMVsG4AHA_MenuXemThem(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div style="border-top: 1px solid #63AFE0; padding: 0 5px 0 5px;">
						<?php /* tag "div" from line 499 */; ?>
<div id="tieude_main2">Xem Thêm:</div>
						<?php /* tag "p" from line 500 */; ?>
<p style="text-indent:30px;">- <?php /* tag "a" from line 500 */; ?>
<a href="/hai_sim24h/Command/Ynghiasim_2.php"> Ý nghĩa của các con số.</a></p><?php /* tag "br" from line 500 */; ?>
<br/>
						<?php /* tag "p" from line 501 */; ?>
<p style="text-indent:30px;">- <?php /* tag "a" from line 501 */; ?>
<a href="/hai_sim24h/Command/Ynghiasim_3.php"> Ý nghĩa các con số theo quan niệm Dân Gian.</a></p><?php /* tag "br" from line 501 */; ?>
<br/>
	</div><?php 
}

 ?>
<?php 
function tpl_5006980f_macros__u8g0F5ljTNnnxBMVsG4AHA_Main3of3Admin11(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div>
		<?php /* tag "div" from line 411 */; ?>
<div id="tieude1">Quản trị hệ thống</div>
				<?php /* tag "div" from line 412 */; ?>
<div class="margin_hethong" style="padding: 5px 0 5px 0; height: 200px;font-size:15px">							
					<?php /* tag "div" from line 413 */; ?>
<div style="padding:5px 0px 5px 20px;">	
						<?php /* tag "a" from line 414 */; ?>
<a style="padding:0px 15px 0px 0px;" href="../Command/edituser.php">
							<?php /* tag "b" from line 415 */; ?>
<b id="buttonAdmin2"><?php echo phptal_escape($ctx->UserName); ?>
</b></a>
						<?php /* tag "a" from line 416 */; ?>
<a href="../admin_hns/logout.php"><?php /* tag "b" from line 416 */; ?>
<b id="buttonAdmin2">Thoát</b></a>
					</div>
					<?php /* tag "div" from line 418 */; ?>
<div id="buttonAdmin" align="center" style="font-weight:bold;padding:2px 0 2px;color:black" class="RightButton">
						<?php /* tag "a" from line 419 */; ?>
<a href="../Command/themsim.php">Thêm sim số mới</a>
					</div>
					<?php /* tag "div" from line 421 */; ?>
<div id="buttonAdmin" align="center" style="font-weight:bold;padding:2px 0 2px;color:black" class="RightButton">
						<?php /* tag "a" from line 422 */; ?>
<a href="../Command/themsimformexcel.php">Thêm sim từ Excel</a>
					</div>
					<?php /* tag "div" from line 424 */; ?>
<div id="buttonAdmin" align="center" style="font-weight:bold;padding:2px 0 2px;color:black" class="RightButton">
						<?php /* tag "a" from line 425 */; ?>
<a href="../Command/vieworder.php">Xem Đơn hàng mua</a>
					</div>
					<?php /* tag "div" from line 427 */; ?>
<div id="buttonAdmin" align="center" style="font-weight:bold;padding:2px 0 2px;color:black" class="RightButton">
						<?php /* tag "a" from line 428 */; ?>
<a href="../Command/vieworderother.php">Xem Đơn hàng đặt</a>
					</div>					
					<?php /* tag "div" from line 430 */; ?>
<div id="buttonAdmin" align="center" style="font-weight:bold;padding:2px 0 2px;color:black" class="RightButton">
						<?php /* tag "a" from line 431 */; ?>
<a href="../Command/totalincome.php">Thống kê Doanh thu</a>
					</div>
					<?php /* tag "div" from line 433 */; ?>
<div id="buttonAdmin" align="center" style="font-weight:bold;padding:2px 0 2px;color:black" class="RightButton">
						<?php /* tag "a" from line 434 */; ?>
<a href="../Command/editsimbyprice.php">Thay đổi giá Sim</a>
					</div>
					<?php /* tag "div" from line 436 */; ?>
<div id="buttonAdmin" align="center" style="font-weight:bold;padding:2px 0 2px;color:black" class="RightButton">
						<?php /* tag "a" from line 437 */; ?>
<a href="../Command/viewhotnumber.php">Xem Sim Mới về</a>
					</div>
				</div>  
				<?php /* tag "div" from line 440 */; ?>
<div id="tieude1" style="margin-top: 10px;">Sim đẹp theo giá</div>
				<?php /* tag "div" from line 441 */; ?>
<div class="margin" style="height: 390px;">
					<?php /* tag "ul" from line 442 */; ?>
<ul id="menu_left" border="1">
						<?php /* tag "li" from line 443 */; ?>
<li class="odd"><?php /* tag "a" from line 443 */; ?>
<a href="../../hai_sim24h/index.php?SearchPrice=01">Sim Đẹp &lt; 500 Nghìn</a></li>
						<?php /* tag "li" from line 444 */; ?>
<li class="even"><?php /* tag "a" from line 444 */; ?>
<a href="../../hai_sim24h/index.php?SearchPrice=02">Sim Đẹp 500 ~ 1 Triệu</a></li>
						<?php /* tag "li" from line 445 */; ?>
<li class="odd"><?php /* tag "a" from line 445 */; ?>
<a href="../../hai_sim24h/index.php?SearchPrice=03">Sim Đẹp 1 ~ 3 Triệu</a></li>
						<?php /* tag "li" from line 446 */; ?>
<li class="even"><?php /* tag "a" from line 446 */; ?>
<a href="../../hai_sim24h/index.php?SearchPrice=04">Sim Đẹp 3 ~ 5 Triệu</a></li>
						<?php /* tag "li" from line 447 */; ?>
<li class="odd"><?php /* tag "a" from line 447 */; ?>
<a href="../../hai_sim24h/index.php?SearchPrice=05">Sim Đẹp 5 ~ 10 Triệu</a></li>
						<?php /* tag "li" from line 448 */; ?>
<li class="even"><?php /* tag "a" from line 448 */; ?>
<a href="../../hai_sim24h/index.php?SearchPrice=06">Sim Đẹp 10 ~ 30 Triệu</a></li>
						<?php /* tag "li" from line 449 */; ?>
<li class="odd"><?php /* tag "a" from line 449 */; ?>
<a href="../../hai_sim24h/index.php?SearchPrice=07">Sim Đẹp 30 ~ 50 Triệu</a></li>
						<?php /* tag "li" from line 450 */; ?>
<li class="even"><?php /* tag "a" from line 450 */; ?>
<a href="../../hai_sim24h/index.php?SearchPrice=08">Sim Đẹp Trên 50 Triệu</a></li>
					</ul>
				</div>
				<?php /* tag "div" from line 453 */; ?>
<div id="tieude1" style="margin-top: 10px;">Đơn đặt hàng mới</div>
				<?php /* tag "div" from line 454 */; ?>
<div class="margin">
					<?php /* tag "marquee" from line 455 */; ?>
<marquee height="168" style="overflow: hide" onmouseout="this.start();" onmouseover="this.stop();" scrollamount="1" scrolldelay="1" behavior="SCROLL" direction="down">
						<?php /* tag "table" from line 456 */; ?>
<table id="slidee" width="100%" cellpadding="5" bordercolor="#C0C0C0" border="1" style="border-collapse: collapse;background:#FFFFFF">
							<?php 
/* tag "tr" from line 457 */ ;
$_tmp_1 = $ctx->repeat ;
$_tmp_1->order = new PHPTAL_RepeatController($ctx->ListOrder)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->order as $ctx->order): ;
?>
<tr>
							<?php /* tag "td" from line 458 */; ?>
<td align="center">								
								<?php /* tag "div" from line 459 */; ?>
<div><?php echo phptal_escape($ctx->path($ctx->order, 'idcustomer')); ?>
</div>								
								<?php /* tag "div" from line 460 */; ?>
<div><?php echo phptal_escape($ctx->path($ctx->order, 'getTitleOrder')); ?>
</div>								
							</td>
						</tr><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>
					
						</table>
					</marquee>
				</div> 
		<?php /* tag "div" from line 466 */; ?>
<div id="tieude1" style="margin-top: 10px;">Thống kê</div>
				<?php /* tag "div" from line 467 */; ?>
<div class="margin">
					<?php /* tag "table" from line 468 */; ?>
<table width="100%" cellspacing="0" cellpadding="0" border="0" align="center" style="padding-left: 5px;">
						<?php /* tag "tr" from line 469 */; ?>
<tr>
							<?php /* tag "td" from line 470 */; ?>
<td height="30">
								<?php /* tag "font" from line 471 */; ?>
<font size="2" color="#800000">
									<?php /* tag "img" from line 472 */; ?>
<img width="11" src="../Template/images/tree_main_plus_active.gif"/>&nbsp;Trực tuyến
								</font>
							</td>
							<?php /* tag "td" from line 475 */; ?>
<td>
								<?php /* tag "font" from line 476 */; ?>
<font size="2" face="Arial" color="#FF3399">
									<?php /* tag "b" from line 477 */; ?>
<b>
										<?php /* tag "script" from line 478 */; ?>
<script language="Javascript" src="http://www.freeusersonline.com/?action=track&amp;siteurl=http://www.thegioisim24h.com"></script>
									</b>
								</font>
							</td>
						</tr>
						<?php /* tag "tr" from line 483 */; ?>
<tr>
							<?php /* tag "td" from line 484 */; ?>
<td height="30">
								<?php /* tag "font" from line 485 */; ?>
<font size="2" color="#800000">
									<?php /* tag "img" from line 486 */; ?>
<img width="11" src="../Template/images/tree_main_plus_active.gif"/>&nbsp;Lượt truy cập
								</font>
							</td>
							<?php /* tag "td" from line 489 */; ?>
<td>							
									<?php /* tag "div" from line 490 */; ?>
<div align="right">									
										<?php /* tag "img" from line 491 */; ?>
<img src="http://www.hit-counts.com/counter.php?t=13&amp;digits=6&amp;ic=1&amp;cid=944518" border="0" alt="hit counters"/>											
									</div>							
							</td>
						</tr>
					</table>
				</div>
	</div><?php 
}

 ?>
<?php 
function tpl_5006980f_macros__u8g0F5ljTNnnxBMVsG4AHA_Main3of3Admin(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div>
		<?php /* tag "div" from line 323 */; ?>
<div id="tieude1">Quản trị hệ thống</div>
				<?php /* tag "div" from line 324 */; ?>
<div class="margin_hethong" style="padding: 5px 0 5px 0; height: 200px;font-size:15px">							
					<?php /* tag "div" from line 325 */; ?>
<div style="padding:5px 0px 5px 20px;">	
						<?php /* tag "a" from line 326 */; ?>
<a style="padding:0px 15px 0px 0px;" href="../hai_sim24h/Command/edituser.php">
							<?php /* tag "b" from line 327 */; ?>
<b id="buttonAdmin2"><?php echo phptal_escape($ctx->UserName); ?>
</b></a>
						<?php /* tag "a" from line 328 */; ?>
<a href="../hai_sim24h/admin_hns/logout.php"><?php /* tag "b" from line 328 */; ?>
<b id="buttonAdmin2">Thoát</b></a>
					</div>
					<?php /* tag "div" from line 330 */; ?>
<div id="buttonAdmin" align="center" style="font-weight:bold;padding:2px 0 2px;color:black" class="RightButton">
						<?php /* tag "a" from line 331 */; ?>
<a href="../hai_sim24h/Command/themsim.php">Thêm sim số mới</a>
					</div>
					<?php /* tag "div" from line 333 */; ?>
<div id="buttonAdmin" align="center" style="font-weight:bold;padding:2px 0 2px;color:black" class="RightButton">
						<?php /* tag "a" from line 334 */; ?>
<a href="../hai_sim24h/Command/themsimformexcel.php">Thêm sim từ Excel</a>
					</div>
					<?php /* tag "div" from line 336 */; ?>
<div id="buttonAdmin" align="center" style="font-weight:bold;padding:2px 0 2px;color:black" class="RightButton">
						<?php /* tag "a" from line 337 */; ?>
<a href="../hai_sim24h/Command/vieworder.php">Xem Đơn hàng mua</a>
					</div>
					<?php /* tag "div" from line 339 */; ?>
<div id="buttonAdmin" align="center" style="font-weight:bold;padding:2px 0 2px;color:black" class="RightButton">
						<?php /* tag "a" from line 340 */; ?>
<a href="../hai_sim24h/Command/vieworderother.php">Xem Đơn hàng đặt</a>
					</div>					
					<?php /* tag "div" from line 342 */; ?>
<div id="buttonAdmin" align="center" style="font-weight:bold;padding:2px 0 2px;color:black" class="RightButton">
						<?php /* tag "a" from line 343 */; ?>
<a href="../hai_sim24h/Command/totalincome.php">Thống kê Doanh thu</a>
					</div>
					<?php /* tag "div" from line 345 */; ?>
<div id="buttonAdmin" align="center" style="font-weight:bold;padding:2px 0 2px;color:black" class="RightButton">
						<?php /* tag "a" from line 346 */; ?>
<a href="../hai_sim24h/Command/editsimbyprice.php">Thay đổi giá Sim</a>
					</div>
					<?php /* tag "div" from line 348 */; ?>
<div id="buttonAdmin" align="center" style="font-weight:bold;padding:2px 0 2px;color:black" class="RightButton">
						<?php /* tag "a" from line 349 */; ?>
<a href="../hai_sim24h/Command/viewhotnumber.php">Xem Sim Mới về</a>
					</div>
				</div>  
				<?php /* tag "div" from line 352 */; ?>
<div id="tieude1" style="margin-top: 10px;">Sim đẹp theo giá</div>
				<?php /* tag "div" from line 353 */; ?>
<div class="margin" style="height: 390px;">
					<?php /* tag "ul" from line 354 */; ?>
<ul id="menu_left" border="1">
						<?php /* tag "li" from line 355 */; ?>
<li class="odd"><?php /* tag "a" from line 355 */; ?>
<a href="../../hai_sim24h/index.php?SearchPrice=01">Sim Đẹp &lt; 500 Nghìn</a></li>
						<?php /* tag "li" from line 356 */; ?>
<li class="even"><?php /* tag "a" from line 356 */; ?>
<a href="../../hai_sim24h/index.php?SearchPrice=02">Sim Đẹp 500 ~ 1 Triệu</a></li>
						<?php /* tag "li" from line 357 */; ?>
<li class="odd"><?php /* tag "a" from line 357 */; ?>
<a href="../../hai_sim24h/index.php?SearchPrice=03">Sim Đẹp 1 ~ 3 Triệu</a></li>
						<?php /* tag "li" from line 358 */; ?>
<li class="even"><?php /* tag "a" from line 358 */; ?>
<a href="../../hai_sim24h/index.php?SearchPrice=04">Sim Đẹp 3 ~ 5 Triệu</a></li>
						<?php /* tag "li" from line 359 */; ?>
<li class="odd"><?php /* tag "a" from line 359 */; ?>
<a href="../../hai_sim24h/index.php?SearchPrice=05">Sim Đẹp 5 ~ 10 Triệu</a></li>
						<?php /* tag "li" from line 360 */; ?>
<li class="even"><?php /* tag "a" from line 360 */; ?>
<a href="../../hai_sim24h/index.php?SearchPrice=06">Sim Đẹp 10 ~ 30 Triệu</a></li>
						<?php /* tag "li" from line 361 */; ?>
<li class="odd"><?php /* tag "a" from line 361 */; ?>
<a href="../../hai_sim24h/index.php?SearchPrice=07">Sim Đẹp 30 ~ 50 Triệu</a></li>
						<?php /* tag "li" from line 362 */; ?>
<li class="even"><?php /* tag "a" from line 362 */; ?>
<a href="../../hai_sim24h/index.php?SearchPrice=08">Sim Đẹp Trên 50 Triệu</a></li>
					</ul>
				</div>
				<?php /* tag "div" from line 365 */; ?>
<div id="tieude1" style="margin-top: 10px;">Đơn đặt hàng mới</div>
				<?php /* tag "div" from line 366 */; ?>
<div class="margin">
					<?php /* tag "marquee" from line 367 */; ?>
<marquee height="168" style="overflow: hide" onmouseout="this.start();" onmouseover="this.stop();" scrollamount="1" scrolldelay="1" behavior="SCROLL" direction="down">
						<?php /* tag "table" from line 368 */; ?>
<table id="slidee" width="100%" cellpadding="5" bordercolor="#C0C0C0" border="1" style="border-collapse: collapse;background:#FFFFFF">
							<?php 
/* tag "tr" from line 369 */ ;
$_tmp_2 = $ctx->repeat ;
$_tmp_2->order = new PHPTAL_RepeatController($ctx->ListOrder)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_2->order as $ctx->order): ;
?>
<tr>
							<?php /* tag "td" from line 370 */; ?>
<td align="center">								
								<?php /* tag "div" from line 371 */; ?>
<div><?php echo phptal_escape($ctx->path($ctx->order, 'idcustomer')); ?>
</div>								
								<?php /* tag "div" from line 372 */; ?>
<div><?php echo phptal_escape($ctx->path($ctx->order, 'getTitleOrder')); ?>
</div>								
							</td>
						</tr><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>
					
						</table>
					</marquee>
				</div> 
		<?php /* tag "div" from line 378 */; ?>
<div id="tieude1" style="margin-top: 10px;">Thống kê</div>
				<?php /* tag "div" from line 379 */; ?>
<div class="margin">
					<?php /* tag "table" from line 380 */; ?>
<table width="100%" cellspacing="0" cellpadding="0" border="0" align="center" style="padding-left: 5px;">
						<?php /* tag "tr" from line 381 */; ?>
<tr>
							<?php /* tag "td" from line 382 */; ?>
<td height="30">
								<?php /* tag "font" from line 383 */; ?>
<font size="2" color="#800000">
									<?php /* tag "img" from line 384 */; ?>
<img width="11" src="../Template/images/tree_main_plus_active.gif"/>&nbsp;Trực tuyến
								</font>
							</td>
							<?php /* tag "td" from line 387 */; ?>
<td>
								<?php /* tag "font" from line 388 */; ?>
<font size="2" face="Arial" color="#FF3399">
									<?php /* tag "b" from line 389 */; ?>
<b>
										<?php /* tag "script" from line 390 */; ?>
<script language="Javascript" src="http://www.freeusersonline.com/?action=track&amp;siteurl=http://www.thegioisim24h.com"></script>
									</b>
								</font>
							</td>
						</tr>
						<?php /* tag "tr" from line 395 */; ?>
<tr>
							<?php /* tag "td" from line 396 */; ?>
<td height="30">
								<?php /* tag "font" from line 397 */; ?>
<font size="2" color="#800000">
									<?php /* tag "img" from line 398 */; ?>
<img width="11" src="../Template/images/tree_main_plus_active.gif"/>&nbsp;Lượt truy cập
								</font>
							</td>
							<?php /* tag "td" from line 401 */; ?>
<td>							
									<?php /* tag "div" from line 402 */; ?>
<div align="right">									
										<?php /* tag "img" from line 403 */; ?>
<img src="http://www.hit-counts.com/counter.php?t=13&amp;digits=6&amp;ic=1&amp;cid=944518" border="0" alt="hit counters"/>											
									</div>							
							</td>
						</tr>
					</table>
				</div>
	</div><?php 
}

 ?>
<?php 
function tpl_5006980f_macros__u8g0F5ljTNnnxBMVsG4AHA_Main3of3Index(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div>
		<?php /* tag "div" from line 257 */; ?>
<div id="tieude1">Hỗ trợ Mua Sim</div>
			<?php /* tag "div" from line 258 */; ?>
<div class="margin" style="height: 200px; color:red; text-align: center; font-size: 20px; padding: 10px 0 0 0;">
				<?php /* tag "p" from line 259 */; ?>
<p style="margin: 10px 0 10px 0; padding-left: 33px;"><?php /* tag "b" from line 259 */; ?>
<b>0989 88 78 78</b></p><?php /* tag "br" from line 259 */; ?>
<br/>
				<?php /* tag "p" from line 260 */; ?>
<p style="padding-left: 33px;"><?php /* tag "b" from line 260 */; ?>
<b>0977 666 098 </b></p><?php /* tag "br" from line 260 */; ?>
<br/>
				<?php /* tag "p" from line 261 */; ?>
<p style="margin: 0 0 15px 0; padding-left: 60px;padding-top: 10px;font-size: 19px;"><?php /* tag "font" from line 261 */; ?>
<font color="blue" size="2">Hỗ trợ 24/24</font></p>
				<?php /* tag "p" from line 262 */; ?>
<p style="margin: 0 0 15px 0; padding-left: 15px;"><?php /* tag "a" from line 262 */; ?>
<a href="/hai_sim24h/Command/datsim.php"><?php /* tag "font" from line 262 */; ?>
<font color="blue" size="3"><?php /* tag "b" from line 262 */; ?>
<b>Đặt sim theo yêu cầu</b></font></a></p>
			</div>
		<?php /* tag "div" from line 264 */; ?>
<div id="tieude1" style="margin-top: 10px;">Sim đẹp theo giá</div>
				<?php /* tag "div" from line 265 */; ?>
<div class="margin" style="height: 390px;">
					<?php /* tag "ul" from line 266 */; ?>
<ul id="menu_left" border="1">
						<?php /* tag "li" from line 267 */; ?>
<li class="odd"><?php /* tag "a" from line 267 */; ?>
<a href="../../hai_sim24h/index.php?SearchPrice=01">Sim Đẹp &lt; 500 Nghìn</a></li>
						<?php /* tag "li" from line 268 */; ?>
<li class="even"><?php /* tag "a" from line 268 */; ?>
<a href="../../hai_sim24h/index.php?SearchPrice=02">Sim Đẹp 500 ~ 1 Triệu</a></li>
						<?php /* tag "li" from line 269 */; ?>
<li class="odd"><?php /* tag "a" from line 269 */; ?>
<a href="../../hai_sim24h/index.php?SearchPrice=03">Sim Đẹp 1 ~ 3 Triệu</a></li>
						<?php /* tag "li" from line 270 */; ?>
<li class="even"><?php /* tag "a" from line 270 */; ?>
<a href="../../hai_sim24h/index.php?SearchPrice=04">Sim Đẹp 3 ~ 5 Triệu</a></li>
						<?php /* tag "li" from line 271 */; ?>
<li class="odd"><?php /* tag "a" from line 271 */; ?>
<a href="../../hai_sim24h/index.php?SearchPrice=05">Sim Đẹp 5 ~ 10 Triệu</a></li>
						<?php /* tag "li" from line 272 */; ?>
<li class="even"><?php /* tag "a" from line 272 */; ?>
<a href="../../hai_sim24h/index.php?SearchPrice=06">Sim Đẹp 10 ~ 30 Triệu</a></li>
						<?php /* tag "li" from line 273 */; ?>
<li class="odd"><?php /* tag "a" from line 273 */; ?>
<a href="../../hai_sim24h/index.php?SearchPrice=07">Sim Đẹp 30 ~ 50 Triệu</a></li>
						<?php /* tag "li" from line 274 */; ?>
<li class="even"><?php /* tag "a" from line 274 */; ?>
<a href="../../hai_sim24h/index.php?SearchPrice=08">Sim Đẹp Trên 50 Triệu</a></li>
					</ul>
				</div>
				<?php /* tag "div" from line 277 */; ?>
<div id="tieude1" style="margin-top: 10px;">Đơn đặt hàng mới</div>
				<?php /* tag "div" from line 278 */; ?>
<div class="margin">
					<?php /* tag "marquee" from line 279 */; ?>
<marquee height="168" style="overflow: hide" onmouseout="this.start();" onmouseover="this.stop();" scrollamount="1" scrolldelay="1" behavior="SCROLL" direction="down">
						<?php /* tag "table" from line 280 */; ?>
<table id="slidee" width="100%" cellpadding="5" bordercolor="#C0C0C0" border="1" style="border-collapse: collapse;background:#FFFFFF">
							<?php 
/* tag "tr" from line 281 */ ;
$_tmp_3 = $ctx->repeat ;
$_tmp_3->order = new PHPTAL_RepeatController($ctx->ListOrder)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_3->order as $ctx->order): ;
?>
<tr>
							<?php /* tag "td" from line 282 */; ?>
<td align="center">								
								<?php /* tag "div" from line 283 */; ?>
<div><?php echo phptal_escape($ctx->path($ctx->order, 'idcustomer')); ?>
</div>								
								<?php /* tag "div" from line 284 */; ?>
<div><?php echo phptal_escape($ctx->path($ctx->order, 'getTitleOrder')); ?>
</div>								
							</td>
						</tr><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>
					
						</table>
					</marquee>
				</div> 
				<?php /* tag "div" from line 290 */; ?>
<div id="tieude1" style="margin-top: 10px;">Thống kê</div>
				<?php /* tag "div" from line 291 */; ?>
<div class="margin">
					<?php /* tag "table" from line 292 */; ?>
<table width="100%" cellspacing="0" cellpadding="0" border="0" align="center" style="padding-left: 5px;">
						<?php /* tag "tr" from line 293 */; ?>
<tr>
							<?php /* tag "td" from line 294 */; ?>
<td height="30">
								<?php /* tag "font" from line 295 */; ?>
<font size="2" color="#800000">
									<?php /* tag "img" from line 296 */; ?>
<img width="11" src="../Template/images/tree_main_plus_active.gif"/>&nbsp;Trực tuyến
								</font>
							</td>
							<?php /* tag "td" from line 299 */; ?>
<td>
								<?php /* tag "font" from line 300 */; ?>
<font size="2" face="Arial" color="#FF3399">
									<?php /* tag "b" from line 301 */; ?>
<b>
										<?php /* tag "script" from line 302 */; ?>
<script language="Javascript" src="http://www.freeusersonline.com/?action=track&amp;siteurl=http://www.thegioisim24h.com"></script>
									</b>
								</font>
							</td>
						</tr>
						<?php /* tag "tr" from line 307 */; ?>
<tr>
							<?php /* tag "td" from line 308 */; ?>
<td height="30">
								<?php /* tag "font" from line 309 */; ?>
<font size="2" color="#800000">
									<?php /* tag "img" from line 310 */; ?>
<img width="11" src="../Template/images/tree_main_plus_active.gif"/>&nbsp;Lượt truy cập
								</font>
							</td>
							<?php /* tag "td" from line 313 */; ?>
<td>							
									<?php /* tag "div" from line 314 */; ?>
<div align="right">									
										<?php /* tag "img" from line 315 */; ?>
<img src="http://www.hit-counts.com/counter.php?t=13&amp;digits=6&amp;ic=1&amp;cid=944518" border="0" alt="hit counters"/>											
									</div>							
							</td>
						</tr>
					</table>
				</div>
	</div><?php 
}

 ?>
<?php 
function tpl_5006980f_macros__u8g0F5ljTNnnxBMVsG4AHA_Main3of3(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div>
		<?php /* tag "div" from line 191 */; ?>
<div id="tieude1">Hỗ trợ Mua Sim</div>
			<?php /* tag "div" from line 192 */; ?>
<div class="margin" style="height: 200px; color:red; text-align: center; font-size: 20px; padding: 10px 0 0 0;">
				<?php /* tag "p" from line 193 */; ?>
<p style="margin: 10px 0 10px 0; padding-left: 33px;"><?php /* tag "b" from line 193 */; ?>
<b>0989 88 78 78</b></p><?php /* tag "br" from line 193 */; ?>
<br/>
				<?php /* tag "p" from line 194 */; ?>
<p style="padding-left: 33px;"><?php /* tag "b" from line 194 */; ?>
<b>0977 666 098 </b></p><?php /* tag "br" from line 194 */; ?>
<br/>
				<?php /* tag "p" from line 195 */; ?>
<p style="margin: 0 0 15px 0; padding-left: 60px;padding-top: 10px;font-size: 19px;"><?php /* tag "font" from line 195 */; ?>
<font color="blue" size="2">Hỗ trợ 24/24</font></p>
				<?php /* tag "p" from line 196 */; ?>
<p style="margin: 0 0 15px 0; padding-left: 15px;"><?php /* tag "a" from line 196 */; ?>
<a href="datsim.php"><?php /* tag "font" from line 196 */; ?>
<font color="blue" size="3"><?php /* tag "b" from line 196 */; ?>
<b>Đặt sim theo yêu cầu</b></font></a></p>
			</div>
		<?php /* tag "div" from line 198 */; ?>
<div id="tieude1" style="margin-top: 10px;">Sim đẹp theo giá</div>
				<?php /* tag "div" from line 199 */; ?>
<div class="margin" style="height: 390px;">
					<?php /* tag "ul" from line 200 */; ?>
<ul id="menu_left" border="1">
						<?php /* tag "li" from line 201 */; ?>
<li class="odd"><?php /* tag "a" from line 201 */; ?>
<a href="../../hai_sim24h/index.php?SearchPrice=01">Sim Đẹp &lt; 500 Nghìn</a></li>
						<?php /* tag "li" from line 202 */; ?>
<li class="even"><?php /* tag "a" from line 202 */; ?>
<a href="../../hai_sim24h/index.php?SearchPrice=02">Sim Đẹp 500 ~ 1 Triệu</a></li>
						<?php /* tag "li" from line 203 */; ?>
<li class="odd"><?php /* tag "a" from line 203 */; ?>
<a href="../../hai_sim24h/index.php?SearchPrice=03">Sim Đẹp 1 ~ 3 Triệu</a></li>
						<?php /* tag "li" from line 204 */; ?>
<li class="even"><?php /* tag "a" from line 204 */; ?>
<a href="../../hai_sim24h/index.php?SearchPrice=04">Sim Đẹp 3 ~ 5 Triệu</a></li>
						<?php /* tag "li" from line 205 */; ?>
<li class="odd"><?php /* tag "a" from line 205 */; ?>
<a href="../../hai_sim24h/index.php?SearchPrice=05">Sim Đẹp 5 ~ 10 Triệu</a></li>
						<?php /* tag "li" from line 206 */; ?>
<li class="even"><?php /* tag "a" from line 206 */; ?>
<a href="../../hai_sim24h/index.php?SearchPrice=06">Sim Đẹp 10 ~ 30 Triệu</a></li>
						<?php /* tag "li" from line 207 */; ?>
<li class="odd"><?php /* tag "a" from line 207 */; ?>
<a href="../../hai_sim24h/index.php?SearchPrice=07">Sim Đẹp 30 ~ 50 Triệu</a></li>
						<?php /* tag "li" from line 208 */; ?>
<li class="even"><?php /* tag "a" from line 208 */; ?>
<a href="../../hai_sim24h/index.php?SearchPrice=08">Sim Đẹp Trên 50 Triệu</a></li>
					</ul>
				</div>
				<?php /* tag "div" from line 211 */; ?>
<div id="tieude1" style="margin-top: 10px;">Đơn đặt hàng mới</div>
				<?php /* tag "div" from line 212 */; ?>
<div class="margin">
					<?php /* tag "marquee" from line 213 */; ?>
<marquee height="168" style="overflow: hide" onmouseout="this.start();" onmouseover="this.stop();" scrollamount="1" scrolldelay="1" behavior="SCROLL" direction="down">
						<?php /* tag "table" from line 214 */; ?>
<table id="slidee" width="100%" cellpadding="5" bordercolor="#C0C0C0" border="1" style="border-collapse: collapse;background:#FFFFFF">
							<?php 
/* tag "tr" from line 215 */ ;
$_tmp_1 = $ctx->repeat ;
$_tmp_1->order = new PHPTAL_RepeatController($ctx->ListOrder)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->order as $ctx->order): ;
?>
<tr>
							<?php /* tag "td" from line 216 */; ?>
<td align="center">								
								<?php /* tag "div" from line 217 */; ?>
<div><?php echo phptal_escape($ctx->path($ctx->order, 'idcustomer')); ?>
</div>								
								<?php /* tag "div" from line 218 */; ?>
<div><?php echo phptal_escape($ctx->path($ctx->order, 'getTitleOrder')); ?>
</div>								
							</td>
						</tr><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>
					
						</table>
					</marquee>
				</div> 
				<?php /* tag "div" from line 224 */; ?>
<div id="tieude1" style="margin-top: 10px;">Thống kê</div>
				<?php /* tag "div" from line 225 */; ?>
<div class="margin">
					<?php /* tag "table" from line 226 */; ?>
<table width="100%" cellspacing="0" cellpadding="0" border="0" align="center" style="padding-left: 5px;">
						<?php /* tag "tr" from line 227 */; ?>
<tr>
							<?php /* tag "td" from line 228 */; ?>
<td height="30">
								<?php /* tag "font" from line 229 */; ?>
<font size="2" color="#800000">
									<?php /* tag "img" from line 230 */; ?>
<img width="11" src="../Template/images/tree_main_plus_active.gif"/>&nbsp;Trực tuyến
								</font>
							</td>
							<?php /* tag "td" from line 233 */; ?>
<td>
								<?php /* tag "font" from line 234 */; ?>
<font size="2" face="Arial" color="#FF3399">
									<?php /* tag "b" from line 235 */; ?>
<b>
										<?php /* tag "script" from line 236 */; ?>
<script language="Javascript" src="http://www.freeusersonline.com/?action=track&amp;siteurl=http://www.thegioisim24h.com"></script>
									</b>
								</font>
							</td>
						</tr>
						<?php /* tag "tr" from line 241 */; ?>
<tr>
							<?php /* tag "td" from line 242 */; ?>
<td height="30">
								<?php /* tag "font" from line 243 */; ?>
<font size="2" color="#800000">
									<?php /* tag "img" from line 244 */; ?>
<img width="11" src="../Template/images/tree_main_plus_active.gif"/>&nbsp;Lượt truy cập
								</font>
							</td>
							<?php /* tag "td" from line 247 */; ?>
<td>							
									<?php /* tag "div" from line 248 */; ?>
<div align="right">									
										<?php /* tag "img" from line 249 */; ?>
<img src="http://www.hit-counts.com/counter.php?t=13&amp;digits=6&amp;ic=1&amp;cid=944518" border="0" alt="hit counters"/>											
									</div>							
							</td>
						</tr>
					</table>
				</div>
	</div><?php 
}

 ?>
<?php 
function tpl_5006980f_macros__u8g0F5ljTNnnxBMVsG4AHA_Main3of1(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div>
		<?php /* tag "div" from line 141 */; ?>
<div id="tieude1">Danh sách nhà mạng</div>
				<?php /* tag "div" from line 142 */; ?>
<div class="margin">
					<?php /* tag "ul" from line 143 */; ?>
<ul id="menu_left">
						<?php /* tag "li" from line 144 */; ?>
<li class="odd"><?php /* tag "a" from line 144 */; ?>
<a href="../../hai_sim24h/index.php?SearchNetwork=2">MobiFone</a></li>
						<?php /* tag "li" from line 145 */; ?>
<li class="even"><?php /* tag "a" from line 145 */; ?>
<a href="../../hai_sim24h/index.php?SearchNetwork=3">VinaPhone</a></li>
						<?php /* tag "li" from line 146 */; ?>
<li class="odd"><?php /* tag "a" from line 146 */; ?>
<a href="../../hai_sim24h/index.php?SearchNetwork=1">Viettel</a></li>
						<?php /* tag "li" from line 147 */; ?>
<li class="even"><?php /* tag "a" from line 147 */; ?>
<a href="../../hai_sim24h/index.php?SearchNetwork=4">Vietnamobile</a></li>
						<?php /* tag "li" from line 148 */; ?>
<li class="odd"><?php /* tag "a" from line 148 */; ?>
<a href="../../hai_sim24h/index.php?SearchNetwork=5">Beeline</a></li>
						<?php /* tag "li" from line 149 */; ?>
<li class="even"><?php /* tag "a" from line 149 */; ?>
<a href="../../hai_sim24h/index.php?SearchNetwork=6">SFone</a></li>
						<?php /* tag "li" from line 150 */; ?>
<li class="odd"><?php /* tag "a" from line 150 */; ?>
<a href="../../hai_sim24h/index.php?SearchNetwork=7">EVN Telecom</a></li>
					</ul>
				</div>
				<?php /* tag "div" from line 153 */; ?>
<div id="tieude1" style="margin-top: 10px;">Sim đẹp phân loại</div>
				<?php /* tag "div" from line 154 */; ?>
<div class="margin">
					<?php /* tag "ul" from line 155 */; ?>
<ul id="menu_left" border="1">
						<?php /* tag "li" from line 156 */; ?>
<li class="odd"><?php /* tag "a" from line 156 */; ?>
<a href="../../hai_sim24h/index.php?idcategory=2">Sim Ngũ-Lục-Quý</a></li>
						<?php /* tag "li" from line 157 */; ?>
<li class="even"><?php /* tag "a" from line 157 */; ?>
<a href="../../hai_sim24h/index.php?idcategory=3">Sim Đẹp Tứ Quý</a></li>
						<?php /* tag "li" from line 158 */; ?>
<li class="odd"><?php /* tag "a" from line 158 */; ?>
<a href="../../hai_sim24h/index.php?idcategory=4">Sim Đẹp Taxi</a></li>
						<?php /* tag "li" from line 159 */; ?>
<li class="even"><?php /* tag "a" from line 159 */; ?>
<a href="../../hai_sim24h/index.php?idcategory=5">Sim Đẹp Tam Hoa</a></li>
						<?php /* tag "li" from line 160 */; ?>
<li class="odd"><?php /* tag "a" from line 160 */; ?>
<a href="../../hai_sim24h/index.php?idcategory=6">Sim Đẹp Số Tiến</a></li>
						<?php /* tag "li" from line 161 */; ?>
<li class="even"><?php /* tag "a" from line 161 */; ?>
<a href="../../hai_sim24h/index.php?idcategory=7">Sim Đẹp Lộc Phát</a></li>
						<?php /* tag "li" from line 162 */; ?>
<li class="odd"><?php /* tag "a" from line 162 */; ?>
<a href="../../hai_sim24h/index.php?idcategory=8">Sim Đẹp Thần Tài</a></li>
						<?php /* tag "li" from line 163 */; ?>
<li class="even"><?php /* tag "a" from line 163 */; ?>
<a href="../../hai_sim24h/index.php?idcategory=12">Sim Thổ Địa</a></li>
						<?php /* tag "li" from line 164 */; ?>
<li class="odd"><?php /* tag "a" from line 164 */; ?>
<a href="../../hai_sim24h/index.php?idcategory=9">Sim Đẹp Gánh Lặp Kép</a></li>
						<?php /* tag "li" from line 165 */; ?>
<li class="even"><?php /* tag "a" from line 165 */; ?>
<a href="../../hai_sim24h/index.php?idcategory=13">Sim Số Cặp</a></li>
						<?php /* tag "li" from line 166 */; ?>
<li class="odd"><?php /* tag "a" from line 166 */; ?>
<a href="../../hai_sim24h/index.php?idcategory=10">Sim Đẹp Năm Sinh</a></li>
						<?php /* tag "li" from line 167 */; ?>
<li class="even"><?php /* tag "a" from line 167 */; ?>
<a href="../../hai_sim24h/index.php?idcategory=11">Sim Đẹp Dễ Nhớ Độc Đáo</a></li>						
						<?php /* tag "li" from line 168 */; ?>
<li class="odd"><?php /* tag "a" from line 168 */; ?>
<a href="../../hai_sim24h/index.php?idcategory=1">Sim Đẹp Tự Nhiên</a></li>						
					</ul>
				</div>
				<?php /* tag "div" from line 171 */; ?>
<div id="tieude1" style="margin-top: 10px;">Sim đẹp mới về</div>
				<?php /* tag "div" from line 172 */; ?>
<div class="margin">
					<?php /* tag "marquee" from line 173 */; ?>
<marquee height="530" style="overflow: hide;" onmouseout="this.start();" onmouseover="this.stop();" scrollamount="1" scrolldelay="1" behavior="SCROLL" direction="down">
					<?php /* tag "table" from line 174 */; ?>
<table id="slidee" width="100%" cellpadding="5" bordercolor="#C0C0C0" border="1" style="border-collapse: collapse;background:#FFFFFF">
						<?php 
/* tag "tr" from line 175 */ ;
$_tmp_2 = $ctx->repeat ;
$_tmp_2->NumberHot = new PHPTAL_RepeatController($ctx->PhoneNumberHotLine)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_2->NumberHot as $ctx->NumberHot): ;
?>
<tr>
							<?php /* tag "td" from line 176 */; ?>
<td align="center" width="180px">
								<?php 
/* tag "a" from line 177 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->NumberHot, 'getTitleCartLinked')))):  ;
$_tmp_1 = ' title="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
if (null !== ($_tmp_3 = ($ctx->path($ctx->NumberHot, 'getCartLinked')))):  ;
$_tmp_3 = ' href="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
<?php echo $_tmp_3 ?>
>
								<?php /* tag "b" from line 178 */; ?>
<b><?php echo phptal_escape($ctx->path($ctx->NumberHot, 'number')); ?>
</b>
								</a>
								<?php /* tag "br" from line 180 */; ?>
<br/>
								<?php /* tag "span" from line 181 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->NumberHot, 'getPrice')); ?>
</span>
								<?php /* tag "sup" from line 182 */; ?>
<sup>vnd</sup>
							</td>
						</tr><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>
					
					</table>
					</marquee>
				</div>
	</div><?php 
}

 ?>
<?php 
function tpl_5006980f_macros__u8g0F5ljTNnnxBMVsG4AHA_MenuEditSimByPrice(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div style="height: 50px; margin-top:10px;" align="center">
					<?php /* tag "form" from line 106 */; ?>
<form id="form_LH" action="editsimbyprice.php" method="post">
						<?php /* tag "div" from line 107 */; ?>
<div style="padding-bottom:10px">
						<?php /* tag "ol" from line 108 */; ?>
<ol>
							<?php /* tag "li" from line 109 */; ?>
<li>
							<?php /* tag "div" from line 110 */; ?>
<div style="padding-top:5px;padding-bottom:10px">
								<?php /* tag "h2" from line 111 */; ?>
<h2>Thay đổi tất cả các Sim hiện có</h2>
							</div>
							</li>
							<?php /* tag "li" from line 114 */; ?>
<li>
							<?php /* tag "div" from line 115 */; ?>
<div style="padding-top:10px">
								Loại Mạng:
								<?php /* tag "select" from line 117 */; ?>
<select style="font-size: 16px;" id="idNetwork_" name="idNetwork_">
									<?php 
/* tag "option" from line 118 */ ;
$_tmp_1 = $ctx->repeat ;
$_tmp_1->Network = new PHPTAL_RepeatController($ctx->Networks)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->Network as $ctx->Network): ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Network, 'id')))):  ;
$_tmp_2 = ' value="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<option<?php echo $_tmp_2 ?>
><?php echo phptal_escape($ctx->path($ctx->Network, 'name')); ?>
</option><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

								</select>
							</div>
							</li>
							<?php /* tag "li" from line 122 */; ?>
<li>
							<?php /* tag "div" from line 123 */; ?>
<div style="padding-top:10px">
								Giá bán cũ: <?php /* tag "input" from line 124 */; ?>
<input type="text" id="fromprice" name="fromprice" size="5" value="200000" style="font-size: 16px;"/>
							</div>
							</li>
							<?php /* tag "li" from line 127 */; ?>
<li>
							<?php /* tag "div" from line 128 */; ?>
<div style="padding-top:10px"> 
								Giá bán mới:<?php /* tag "input" from line 129 */; ?>
<input type="text" id="toprice" name="toprice" size="5" value="300000" style="font-size: 16px;"/>
							</div>
							</li>
							<?php /* tag "li" from line 132 */; ?>
<li id="send">
								<?php /* tag "button" from line 133 */; ?>
<button class="send1" type="submit" onclick="return CheckSubmit();">Cập nhật Giá"</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php /* tag "button" from line 133 */; ?>
<button class="send2" type="reset">Nhập lại</button>
							</li>																	
						</ol>
						</div>
					</form>
	</div><?php 
}

 ?>
<?php 
function tpl_5006980f_macros__u8g0F5ljTNnnxBMVsG4AHA_MenuTotalIncome(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div style="height: 50px; margin-top:10px;" align="center">
					<?php /* tag "form" from line 89 */; ?>
<form bgcolor="#fff;" id="name" action="totalincome.php" method="post">
						<?php /* tag "div" from line 90 */; ?>
<div style="padding-bottom:10px">
							<?php /* tag "div" from line 91 */; ?>
<div style="padding-top:2px">
								Từ ngày: <?php /* tag "input" from line 92 */; ?>
<input type="text" id="fromdate" name="fromdate" size="15" value="2011-07-01" style="font-size: 16px;"/>
							</div>
							<?php /* tag "div" from line 94 */; ?>
<div style="padding-top:10px"> 
								Đến ngày:<?php /* tag "input" from line 95 */; ?>
<input type="text" id="todate" name="todate" size="15" value="2011-08-30" style="font-size: 16px;"/>
							</div>
							<?php /* tag "div" from line 97 */; ?>
<div style="padding-top:10px">
								<?php /* tag "input" from line 98 */; ?>
<input type="submit" value="Lọc doanh thu" name="submit"/>
							</div>
							<?php /* tag "div" from line 100 */; ?>
<div align="right" style="font-size:19px;color:red;padding-right:10px;padding-top:15px;"><?php echo phptal_escape($ctx->SumTotal); ?>
</div>
						</div>
					</form>
	</div><?php 
}

 ?>
<?php 
function tpl_5006980f_macros__u8g0F5ljTNnnxBMVsG4AHA_MenuSearch(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div id="MenuSearch">
					<?php /* tag "form" from line 75 */; ?>
<form bgcolor="#fff;" id="name" onsubmit="formsubmit('name','homesimlist');return false" name="tim" action="../hai_sim24h/index.php" method="post">
						<?php /* tag "table" from line 76 */; ?>
<table style="padding-left:7%">
							<?php /* tag "tr" from line 77 */; ?>
<tr height="35px">								
								<?php /* tag "td" from line 78 */; ?>
<td id="icon-search" style="margin-top: 2px; border: 1px solid #277CBF;">
									<?php /* tag "input" from line 79 */; ?>
<input id="txtSearch" type="text" name="num" onblur="if (this.value == '') {this.value = 'Nhập số Sim bạn cần tìm!';$('num').setStyle({color:'#45b6f5'})}" onfocus="if (this.value = 'Nhập số Sim bạn cần tìm!') {this.value = '';$('num').setStyle({color:'red'})}" value="Nhập số Sim bạn cần tìm!" style="width:350px; font-size: 17px; color: blue;"/>									
								</td>
								<?php /* tag "td" from line 81 */; ?>
<td>
									<?php /* tag "input" from line 82 */; ?>
<input type="image" name="submit" src="Template/images/timkiem20.jpg" style="border:0px; height: 33px;" onmouseout="this.src='Template/images/timkiem20.jpg';" onmouseover="this.src='Template/images/timkiem22.jpg';"/>
								</td>
							</tr>
						</table>
					</form>
	</div><?php 
}

 ?>
<?php 
function tpl_5006980f_macros__u8g0F5ljTNnnxBMVsG4AHA_MenuLienhe(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div id="menu">				
		<?php /* tag "ul" from line 64 */; ?>
<ul id="nav">
			<?php /* tag "li" from line 65 */; ?>
<li><?php /* tag "a" from line 65 */; ?>
<a href="../index.php">Trang chủ</a></li>
			<?php /* tag "li" from line 66 */; ?>
<li><?php /* tag "a" from line 66 */; ?>
<a href="../Command/gioithieu.php">Giới thiệu</a></li>
			<?php /* tag "li" from line 67 */; ?>
<li><?php /* tag "a" from line 67 */; ?>
<a href="../Command/thanhtoan.php">Thanh toán</a></li>
			<?php /* tag "li" from line 68 */; ?>
<li><?php /* tag "a" from line 68 */; ?>
<a href="../Command/datsim.php">Ðặt sim theo yêu cầu</a></li>
			<?php /* tag "li" from line 69 */; ?>
<li><?php /* tag "a" from line 69 */; ?>
<a href="../Command/chamdiem.php">Chấm điểm cho sim</a></li>
			<?php /* tag "li" from line 70 */; ?>
<li class="current"><?php /* tag "a" from line 70 */; ?>
<a href="../Command/lienhe.php">Liên hệ</a></li>
		</ul>			
	</div><?php 
}

 ?>
<?php 
function tpl_5006980f_macros__u8g0F5ljTNnnxBMVsG4AHA_MenuChamdiem(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div id="menu">				
		<?php /* tag "ul" from line 53 */; ?>
<ul id="nav">
			<?php /* tag "li" from line 54 */; ?>
<li><?php /* tag "a" from line 54 */; ?>
<a href="../index.php">Trang chủ</a></li>
			<?php /* tag "li" from line 55 */; ?>
<li><?php /* tag "a" from line 55 */; ?>
<a href="../Command/gioithieu.php">Giới thiệu</a></li>
			<?php /* tag "li" from line 56 */; ?>
<li><?php /* tag "a" from line 56 */; ?>
<a href="../Command/thanhtoan.php">Thanh toán</a></li>
			<?php /* tag "li" from line 57 */; ?>
<li><?php /* tag "a" from line 57 */; ?>
<a href="../Command/datsim.php">Ðặt sim theo yêu cầu</a></li>
			<?php /* tag "li" from line 58 */; ?>
<li class="current"><?php /* tag "a" from line 58 */; ?>
<a href="../Command/chamdiem.php">Chấm điểm cho sim</a></li>
			<?php /* tag "li" from line 59 */; ?>
<li><?php /* tag "a" from line 59 */; ?>
<a href="../Command/lienhe.php">Liên hệ</a></li>
		</ul>			
	</div><?php 
}

 ?>
<?php 
function tpl_5006980f_macros__u8g0F5ljTNnnxBMVsG4AHA_MenuDatsim(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div id="menu">				
		<?php /* tag "ul" from line 42 */; ?>
<ul id="nav">
			<?php /* tag "li" from line 43 */; ?>
<li><?php /* tag "a" from line 43 */; ?>
<a href="../index.php">Trang chủ</a></li>
			<?php /* tag "li" from line 44 */; ?>
<li><?php /* tag "a" from line 44 */; ?>
<a href="../Command/gioithieu.php">Giới thiệu</a></li>
			<?php /* tag "li" from line 45 */; ?>
<li><?php /* tag "a" from line 45 */; ?>
<a href="../Command/thanhtoan.php">Thanh toán</a></li>
			<?php /* tag "li" from line 46 */; ?>
<li class="current"><?php /* tag "a" from line 46 */; ?>
<a href="../Command/datsim.php">Ðặt sim theo yêu cầu</a></li>
			<?php /* tag "li" from line 47 */; ?>
<li><?php /* tag "a" from line 47 */; ?>
<a href="../Command/chamdiem.php">Chấm điểm cho sim</a></li>
			<?php /* tag "li" from line 48 */; ?>
<li><?php /* tag "a" from line 48 */; ?>
<a href="../Command/lienhe.php">Liên hệ</a></li>
		</ul>			
	</div><?php 
}

 ?>
<?php 
function tpl_5006980f_macros__u8g0F5ljTNnnxBMVsG4AHA_MenuMuasim(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div id="menu">				
		<?php /* tag "ul" from line 31 */; ?>
<ul id="nav">
			<?php /* tag "li" from line 32 */; ?>
<li><?php /* tag "a" from line 32 */; ?>
<a href="../index.php">Trang chủ</a></li>
			<?php /* tag "li" from line 33 */; ?>
<li><?php /* tag "a" from line 33 */; ?>
<a href="../Command/gioithieu.php">Giới thiệu</a></li>
			<?php /* tag "li" from line 34 */; ?>
<li class="current"><?php /* tag "a" from line 34 */; ?>
<a href="../Command/thanhtoan.php">Thanh toán</a></li>
			<?php /* tag "li" from line 35 */; ?>
<li><?php /* tag "a" from line 35 */; ?>
<a href="../Command/datsim.php">Ðặt sim theo yêu cầu</a></li>
			<?php /* tag "li" from line 36 */; ?>
<li><?php /* tag "a" from line 36 */; ?>
<a href="../Command/chamdiem.php">Chấm điểm cho sim</a></li>
			<?php /* tag "li" from line 37 */; ?>
<li><?php /* tag "a" from line 37 */; ?>
<a href="../Command/lienhe.php">Liên hệ</a></li>
		</ul>			
	</div><?php 
}

 ?>
<?php 
function tpl_5006980f_macros__u8g0F5ljTNnnxBMVsG4AHA_MenuGioithieu(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div id="menu">				
		<?php /* tag "ul" from line 20 */; ?>
<ul id="nav">
			<?php /* tag "li" from line 21 */; ?>
<li><?php /* tag "a" from line 21 */; ?>
<a href="../index.php">Trang chủ</a></li>
			<?php /* tag "li" from line 22 */; ?>
<li class="current"><?php /* tag "a" from line 22 */; ?>
<a href="../Command/gioithieu.php">Giới thiệu</a></li>
			<?php /* tag "li" from line 23 */; ?>
<li><?php /* tag "a" from line 23 */; ?>
<a href="../Command/thanhtoan.php">Thanh toán</a></li>
			<?php /* tag "li" from line 24 */; ?>
<li><?php /* tag "a" from line 24 */; ?>
<a href="../Command/datsim.php">Ðặt sim theo yêu cầu</a></li>
			<?php /* tag "li" from line 25 */; ?>
<li><?php /* tag "a" from line 25 */; ?>
<a href="../Command/chamdiem.php">Chấm điểm cho sim</a></li>
			<?php /* tag "li" from line 26 */; ?>
<li><?php /* tag "a" from line 26 */; ?>
<a href="../Command/lienhe.php">Liên hệ</a></li>
		</ul>			
	</div><?php 
}

 ?>
<?php 
function tpl_5006980f_macros__u8g0F5ljTNnnxBMVsG4AHA_MenuIndex(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div id="menu">				
		<?php /* tag "ul" from line 9 */; ?>
<ul id="nav">
			<?php /* tag "li" from line 10 */; ?>
<li class="current"><?php /* tag "a" from line 10 */; ?>
<a href="../hai_sim24h/index.php">Trang chủ</a></li>
			<?php /* tag "li" from line 11 */; ?>
<li><?php /* tag "a" from line 11 */; ?>
<a href="../hai_sim24h/Command/gioithieu.php">Giới thiệu</a></li>
			<?php /* tag "li" from line 12 */; ?>
<li><?php /* tag "a" from line 12 */; ?>
<a href="../hai_sim24h/Command/thanhtoan.php">Thanh toán</a></li>
			<?php /* tag "li" from line 13 */; ?>
<li><?php /* tag "a" from line 13 */; ?>
<a href="../hai_sim24h/Command/datsim.php">Ðặt sim theo yêu cầu</a></li>
			<?php /* tag "li" from line 14 */; ?>
<li><?php /* tag "a" from line 14 */; ?>
<a href="../hai_sim24h/Command/chamdiem.php">Chấm điểm cho sim</a></li>
			<?php /* tag "li" from line 15 */; ?>
<li><?php /* tag "a" from line 15 */; ?>
<a href="../hai_sim24h/Command/lienhe.php">Liên hệ</a></li>
		</ul>			
	</div><?php 
}

 ?>
<?php 
function tpl_5006980f_macros__u8g0F5ljTNnnxBMVsG4AHA_footer(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div id="footer">
			<?php /* tag "div" from line 4 */; ?>
<div>© Copyright 2011 </div>
			<?php /* tag "div" from line 5 */; ?>
<div> Design By: SPN Co,Ltd </div>
	</div><?php 
}

 ?>
<?php 
function tpl_5006980f_macros__u8g0F5ljTNnnxBMVsG4AHA(PHPTAL $tpl, PHPTAL_Context $ctx) {
$_thistpl = $tpl ;
$_translator = $tpl->getTranslator() ;
/* tag "documentElement" from line 1 */ ;
/* tag "html" from line 1 */ ;
?>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<?php /* tag "body" from line 2 */; ?>
<body>
	<?php /* tag "div" from line 3 */; ?>

	
	<?php /* tag "div" from line 8 */; ?>

	
	<?php /* tag "div" from line 19 */; ?>

	
	<?php /* tag "div" from line 30 */; ?>

	
	<?php /* tag "div" from line 41 */; ?>

	
	<?php /* tag "div" from line 52 */; ?>

	
	<?php /* tag "div" from line 63 */; ?>

	
	<?php /* tag "div" from line 74 */; ?>
		
	<?php /* tag "div" from line 88 */; ?>

	
	<?php /* tag "div" from line 105 */; ?>

	
	<?php /* tag "div" from line 140 */; ?>

	
	<?php /* tag "div" from line 190 */; ?>

	<?php /* tag "div" from line 256 */; ?>
	
	<?php /* tag "div" from line 322 */; ?>

	<?php /* tag "div" from line 410 */; ?>

	<?php /* tag "div" from line 498 */; ?>

	<?php /* tag "div" from line 503 */; ?>

		
</body>
</html><?php 
/* end */ ;

}

?>
<?php /* 
*** DO NOT EDIT THIS FILE ***

Generated by PHPTAL from D:\AppWebServer\SimShopping\hai_sim24h\Template\macros.xhtml (edit that file instead) */; ?>