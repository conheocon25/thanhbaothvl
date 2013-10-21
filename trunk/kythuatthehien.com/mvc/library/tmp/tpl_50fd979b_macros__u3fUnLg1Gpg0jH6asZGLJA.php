<?php 
function tpl_50fd979b_macros__u3fUnLg1Gpg0jH6asZGLJA_Footer(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div id="footer">
		<!--<div id="icon_footer">
			<span tal:condition="isLogin">
				<ul class="menu">					
					<li><a href="">Tiện ích</a>													
						<ul>
							<li><a href="?cmd=Search" >Tìm nhanh</a></li>
							<li><a href="?cmd=SearchByPrice" >Tìm theo giá</a></li>
							<li><a href="?cmd=ViewNumbers" >Kho Số</a></li>
							<li><a href="?cmd=ViewNetworks" >Nhà Mạng</a></li>
							<li><a href="?cmd=ViewCategorys" >Loại Sim</a></li>
						</ul>						
					</li>
				</ul>																						
				
			</span>
		</div>-->
		<small>Bản quyền ©2009-2011 SPN Co, Ltd. Giữ toàn quyền.</small>
	</div><?php 
}

 ?><?php 
function tpl_50fd979b_macros__u3fUnLg1Gpg0jH6asZGLJA_page(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div>
		<div class="Menupage">
		<a>&lt; Trang đầu</a>
			<?php 
$_tmp_3 = $ctx->repeat ;
$_tmp_3->Page = new PHPTAL_RepeatController($ctx->Pages)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_3->Page as $ctx->Page): ;
?>
<span>
				<?php 
if (NULL !== ($_tmp_1 = ($ctx->path($ctx->Page, 'getURL')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>><?php echo phptal_escape($ctx->path($ctx->Page, 'getName')); ?>
</a>
			</span><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

		<a>Trang cuối > </a>
		</div>		
	</div><?php 
}

 ?><?php 
function tpl_50fd979b_macros__u3fUnLg1Gpg0jH6asZGLJA_main3_of3(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div>
		<div id="main3_of3">
			<div id="tieude1">Hỗ trợ Mua Sim</div>
			<div class="margin" style="height: 170px; color:red; text-align: center; font-size: 20px; padding: 10px 0 0 0;">
				<p style="margin: 10px 0 10px 0; padding-left: 33px;"><b>0989 88 78 78</b></p><br/>
				<p style="padding-left: 33px;"><b>0977 666 098 </b></p><br/>
				<p style="margin: 0 0 15px 0; padding-left: 60px;padding-top: 10px;font-size: 19px;"><font color="blue" size="2">Hỗ trợ 24/24</font></p>
				<p style="margin: 0 0 15px 0; padding-left: 15px;"><a href="?cmd=PutSimOnDemand"><font color="blue" size="3"><b>Đặt sim theo yêu cầu</b></font></a></p>
			</div>
		<div id="tieude1" style="margin-top: 7px;">Sim đẹp theo giá</div>
				<div class="margin" style="height: 390px;">
					<ul id="menu_left" border="1">
						<li class="odd"><a href="?cmd=SearchByPrice&amp;Price=0&amp;Price1=499999">Sim Đẹp &lt; 500 Nghìn</a></li>
						<li class="even"><a href="?cmd=SearchByPrice&amp;Price=500000&amp;Price1=1000000">Sim Đẹp 500 ~ 1 Triệu</a></li>
						<li class="odd"><a href="?cmd=SearchByPrice&amp;Price=1000000&amp;Price1=3000000">Sim Đẹp 1 ~ 3 Triệu</a></li>
						<li class="even"><a href="?cmd=SearchByPrice&amp;Price=3000000&amp;Price1=5000000">Sim Đẹp 3 ~ 5 Triệu</a></li>
						<li class="odd"><a href="?cmd=SearchByPrice&amp;Price=5000000&amp;Price1=10000000">Sim Đẹp 5 ~ 10 Triệu</a></li>
						<li class="even"><a href="?cmd=SearchByPrice&amp;Price=10000000&amp;Price1=30000000">Sim Đẹp 10 ~ 30 Triệu</a></li>
						<li class="odd"><a href="?cmd=SearchByPrice&amp;Price=30000000&amp;Price1=50000000">Sim Đẹp 30 ~ 50 Triệu</a></li>
						<li class="even"><a href="?cmd=SearchByPrice&amp;Price=50000000&amp;Price1=100000000000">Sim Đẹp Trên 50 Triệu</a></li>
					</ul>
				</div>
				<div id="tieude1" style="margin-top: 7px;">Đơn đặt hàng mới</div>
				<div class="margin">
					<marquee height="171" style="overflow: hide" onmouseout="this.start();" onmouseover="this.stop();" scrollamount="1" scrolldelay="1" behavior="SCROLL" direction="down">
						<table id="slidee" width="100%" cellpadding="5" bordercolor="#C0C0C0" border="1" style="border-collapse: collapse;background:#FFFFFF">
							<?php 
$_tmp_2 = $ctx->repeat ;
$_tmp_2->Order = new PHPTAL_RepeatController($ctx->Orders)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_2->Order as $ctx->Order): ;
?>
<tr>
							<td align="center">								
								<div><?php echo phptal_escape($ctx->path($ctx->Order, 'getCustomer/getName')); ?>
</div>								
								<div><?php echo phptal_escape($ctx->path($ctx->Order, 'getTitleOrder')); ?>
</div>								
							</td>
						</tr><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>
					
						</table>
					</marquee>
				</div> 
				<div id="tieude1" style="margin-top: 7px;">Thống kê</div>
				<div class="margin">
					<table width="100%" cellspacing="0" cellpadding="0" border="0" align="center" style="padding-left: 5px;margin-top:0px;">
						<tr>
							<td height="30" style="padding-left:5px;">
								<font size="2" color="#800000">
									<img width="11" src="mvc/templates/theme/base/images/app/tree_main_plus_active.gif"/>&nbsp;Trực tuyến
								</font>
							</td>
							<td>
								<font size="2" face="Arial" color="#FF3399">
									<b>
										<script language="Javascript" src="http://www.freeusersonline.com/?action=track&amp;siteurl=http://www.thegioisim24h.com"></script>
									</b>
								</font>
							</td>
						</tr>
						<tr>
							<td height="30" style="padding-left:5px;">
								<font size="2" color="#800000">
									<img width="11" src="mvc/templates/theme/base/images/app/tree_main_plus_active.gif"/>&nbsp;Lượt truy cập
								</font>
							</td>
							<td>							
									<div align="right">									
										<img src="http://www.hit-counts.com/counter.php?t=13&amp;digits=6&amp;ic=1&amp;cid=944518" border="0" alt="hit counters"/>											
									</div>							
							</td>
						</tr>
					</table>
				</div>
				<div style="border: 1px solid #999; height: 202px;">
					<a href="http://tkpc.vn/" target="_blank"><img width="100%" height="50%" border="0" src="mvc/templates/theme/base/images/app/tinkhoa.gif" alt="Quang Cao"/></a><br/>
					<a href="http://sncpc.com/home/" target="_blank"><img width="100%" height="50%" border="0" src="mvc/templates/theme/base/images/app/snc.gif" alt="Quang Cao"/></a><br/>
				</div>
		</div>
	</div><?php 
}

 ?><?php 
function tpl_50fd979b_macros__u3fUnLg1Gpg0jH6asZGLJA_main3_of1(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div>
		<div id="main3_of1">
					<div id="tieude1"><?php echo phptal_escape($ctx->Title_Network); ?>
</div>
					<div class="margin">
						<?php 
$_tmp_1 = $ctx->repeat ;
$_tmp_1->Network = new PHPTAL_RepeatController($ctx->Networks)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->Network as $ctx->Network): ;
?>
<ul id="menu_left">
							<li>
								<?php 
if (NULL !== ($_tmp_2 = ($ctx->path($ctx->Network, 'getURLNumber')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>><?php echo phptal_escape($ctx->path($ctx->Network, 'getName')); ?>
</a>
							</li>
						</ul><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

					</div>
					<div id="tieude1" style="margin-top: 7px;"><?php echo phptal_escape($ctx->Title_Category); ?>
</div>
					<div class="margin">
						<?php 
$_tmp_2 = $ctx->repeat ;
$_tmp_2->Category = new PHPTAL_RepeatController($ctx->Categorys)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_2->Category as $ctx->Category): ;
?>
<ul id="menu_left">
							<li>
								<?php 
if (NULL !== ($_tmp_1 = ($ctx->path($ctx->Category, 'getURLNumber')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>><?php echo phptal_escape($ctx->path($ctx->Category, 'getName')); ?>
</a>
							</li>
						</ul><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

					</div>
				<div id="tieude1" style="margin-top: 7px;">Sim đẹp mới về</div>
				<div class="margin">
					<marquee height="490" style="overflow: hide;" onmouseout="this.start();" onmouseover="this.stop();" scrollamount="1" scrolldelay="1" behavior="SCROLL" direction="down">
					<table id="slidee" width="100%" cellpadding="5" bordercolor="#C0C0C0" border="1" style="border-collapse: collapse;background:#FFFFFF">
						<?php 
$_tmp_1 = $ctx->repeat ;
$_tmp_1->HotNumber = new PHPTAL_RepeatController($ctx->HotNumbers)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->HotNumber as $ctx->HotNumber): ;
?>
<tr>
							<td align="center" width="180px">
								<?php 
if (NULL !== ($_tmp_2 = ($ctx->path($ctx->HotNumber, 'getTitleCartLinked')))):  ;
$_tmp_2 = ' title="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
if (NULL !== ($_tmp_3 = ($ctx->path($ctx->HotNumber, 'getNumberCart')))):  ;
$_tmp_3 = ' href="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?><?php echo $_tmp_3 ?>>
								<b><?php echo phptal_escape($ctx->path($ctx->HotNumber, 'getNumber')); ?>
</b>
								</a>
								<br/>
								<span><?php echo phptal_escape($ctx->path($ctx->HotNumber, 'getPrice')); ?>
</span>
								<sup>vnd</sup>
							</td>
						</tr><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>
					
					</table>
					</marquee>
				</div>	
		</div>
	</div><?php 
}

 ?><?php 
function tpl_50fd979b_macros__u3fUnLg1Gpg0jH6asZGLJA_MenuXemThem(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div style="border-top: 1px solid #63AFE0; padding: 0 5px 0 5px;">
						<div id="tieude_main2">Xem Thêm:</div>
						<p style="text-indent:30px;">- <a href="?cmd=Introduction2"> Ý nghĩa của các con số.</a></p><br/>
						<p style="text-indent:30px;">- <a href="?cmd=Introduction3"> Ý nghĩa các con số theo quan niệm Dân Gian.</a></p><br/>
	</div><?php 
}

 ?><?php 
function tpl_50fd979b_macros__u3fUnLg1Gpg0jH6asZGLJA_MenuSearch(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div id="MenuSearch">
					<form bgcolor="#fff;" id="name" onsubmit="formsubmit('name','homesimlist');return false" name="tim" action="?cmd=Search" method="post">
						<table style="padding-left:7%">
							<tr height="35px">								
								<td id="icon-search" style="margin-top: 2px; border: 1px solid #277CBF;">
									<input id="txtSearch" type="text" name="Content" onblur="if (this.value == '') {this.value = 'Nhập số Sim bạn cần tìm!';$('num').setStyle({color:'#45b6f5'})}" onfocus="if (this.value = 'Nhập số Sim bạn cần tìm!') {this.value = '';$('num').setStyle({color:'red'})}" value="Nhập số Sim bạn cần tìm!" style="width:350px; font-size: 17px; color: blue;"/>									
								</td>
								<td>
									<input type="image" name="submit" src="mvc/templates/theme/base/images/app/timkiem20.jpg" style="border:0px; height: 33px;" onmouseout="this.src='mvc/templates/theme/base/images/app/timkiem20.jpg';" onmouseover="this.src='mvc/templates/theme/base/images/app/timkiem22.jpg';"/>
								</td>
							</tr>
						</table>
					</form>
	</div><?php 
}

 ?><?php 
function tpl_50fd979b_macros__u3fUnLg1Gpg0jH6asZGLJA_MenuIndex(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div id="menu">				
		<ul id="nav">
			<li class="current"><a href="?cmd=ViewNumbers">Trang chủ</a></li>
			<li><a href="?cmd=Introduction">Giới thiệu</a></li>
			<li><a href="?cmd=Payment">Thanh toán</a></li>
			<li><a href="?cmd=PutSimOnDemand">Ðặt sim theo yêu cầu</a></li>
			<li><a href="?cmd=RecordNight">Chấm điểm cho sim</a></li>
			<li><a href="?cmd=Contact">Liên hệ</a></li>
		</ul>			
	</div><?php 
}

 ?><?php 
function tpl_50fd979b_macros__u3fUnLg1Gpg0jH6asZGLJA_Navigation(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div id="Navigation">
		
	</div><?php 
}

 ?><?php 
function tpl_50fd979b_macros__u3fUnLg1Gpg0jH6asZGLJA_Header(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div id="header">
		<!--<div id="header" tal:condition="isLogin">
			<h1>
				<a href="/">
					<img src="mvc/templates/theme/base/images/app/card_chip.png" width="45"/>
				</a>
			</h1>
			<h2 tal:content="string:Hệ thống bán sim online" />
			<div id="line_Phone">
				<p tal:content="string:Phiên bản Beta 1.0" />
			</div>
			<div id="date_time">
				<span id="clock"></span>
			</div>
			<div id="User">
				<a href="?cmd=Signout"><img src="mvc/templates/theme/base/images/app/user.png" style="width:50px; height:50px;" /></a>
				<div class="user_name" tal:content="User" />
			</div>
		</div>
		<div id="header" tal:condition="not: isLogin">
			<h1>
				<a href="/">
					<img src="mvc/templates/theme/base/images/app/card_chip.png" width="45"/>
				</a>
			</h1>
			<h2 tal:content="string:Hệ thống bán sim online"/>
			<div id="line_1">
				<p tal:content="string:Phiên bản 1.0"/>
			</div>
			<div id="line_2">
				<p tal:content="string:Phát triển bởi SPN Group"/>
			</div>
		</div>-->
	</div><?php 
}

 ?><?php 
function tpl_50fd979b_macros__u3fUnLg1Gpg0jH6asZGLJA_Include(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<span>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
		<link rel="icon" type="image/ico" href="mvc/templates/theme/base/images/app/card_chip.png"/>

		<link rel="stylesheet" type="text/css" href="mvc/templates/theme/base/jquery.ui.all.css"/>
		<link rel="stylesheet" type="text/css" href="mvc/templates/theme/base/jquery.ui.datepicker.css"/>
		<link rel="stylesheet" type="text/css" href="mvc/templates/theme/base/Form.css"/>
		<link rel="stylesheet" type="text/css" href="mvc/templates/theme/base/ButtonTheme.css"/>
		<link rel="stylesheet" type="text/css" href="mvc/templates/theme/base/FooterMenu.css"/>
		<link rel="stylesheet" type="text/css" href="mvc/templates/theme/base/Main.css"/>
		<link rel="stylesheet" type="text/css" href="mvc/templates/theme/base/DataTable.css"/>
		<link rel="stylesheet" type="text/css" href="mvc/templates/theme/base/default.css"/>		
		<link rel="stylesheet" type="text/css" href="mvc/templates/theme/base/Course.css"/>
												
		<script type="text/javascript" src="mvc/templates/script/jquery.js"></script>
		<script type="text/javascript" src="mvc/templates/script/jquery.dataTables.js"></script>
				
		<script type="text/javascript" language="javascript" src="mvc/templates/script/DateTime.js"></script>				
		<script type="text/javascript" language="javascript" src="mvc/templates/script/MenuFooter.js"></script>
		<script type="text/javascript" language="javascript" src="mvc/templates/script/Button.js"></script>
		<script type="text/javascript" language="javascript" src="mvc/templates/script/FixedColumns.js"></script>
		<script type="text/javascript" language="javascript" src="mvc/templates/script/FixedHeader.min.js"></script>
		
		<script type="text/javascript" language="javascript" src="mvc/templates/script/jquery.jeditable.js"></script>
		<script type="text/javascript" language="javascript" src="mvc/templates/script/jquery.dataTables.editable.js"></script>	
		<script type="text/javascript" language="javascript" src="mvc/templates/script/KeyTable.js"></script>
		
		<script type="text/javascript" language="javascript" src="mvc/templates/script/jquery-ui.custom.min.js"></script>	
		<script type="text/javascript" language="javascript" src="mvc/templates/script/jquery.ui.core.js"></script>
		<script type="text/javascript" language="javascript" src="mvc/templates/script/jquery.ui.accordion.js"></script>
		<script type="text/javascript" language="javascript" src="mvc/templates/script/jquery.ui.widget.js"></script>
		<script type="text/javascript" language="javascript" src="mvc/templates/script/jquery.ui.datepicker-vi.js"></script>
		<script type="text/javascript" language="javascript" src="mvc/templates/script/jquery.ui.datepicker.min.js"></script>
		
	</span><?php 
}

 ?><?php 
function tpl_50fd979b_macros__u3fUnLg1Gpg0jH6asZGLJA($tpl, $ctx) {
$_thistpl = $tpl ;
$_translator = $tpl->getTranslator() ;
?>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<body>
	<!-- ĐỊNH NGHĨA THƯ VIỆN CSS JAVASCRIPT -->
	

	<!-- ĐỊNH NGHĨA MACRO TIÊU ĐỀ CHO TRANG WEB -->	
	

	<!-- ĐỊNH NGHĨA MENU CHÍNH CỦA HỆ THỐNG -->
	
	
	
	<!-- Xem Thêm -->			
	
	<!-- Colume Left -->
	
	<!-- Colume Right -->
	
	
	
	<!-- ĐỊNH NGHĨA MENU GỌI MÓN CỦA HỆ THỐNG -->	
	
	<!-- ĐỊNH NGHĨA MACRO THÔNG TIN NGƯỜI DÙNG -->
</body>
</html><?php 
/* end */ ;

}

?><?php /* 
*** DO NOT EDIT THIS FILE ***

Generated by PHPTAL from D:\AppWebServer\MyCodePHP\kythuatthehien.com\mvc\templates\macros.xhtml (edit that file instead) */; ?>