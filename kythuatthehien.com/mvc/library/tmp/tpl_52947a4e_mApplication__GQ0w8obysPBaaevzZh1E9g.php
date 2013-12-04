<?php 
function tpl_52947a4e_mApplication__GQ0w8obysPBaaevzZh1E9g_Footer(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div>
		<?php /* tag "div" from line 111 */; ?>
<div class="row-fluid footer">
			<?php /* tag "span" from line 112 */; ?>
<span class="label pull-right copyright">&#169; 2013 KTTH - THVL</span>
		</div>
	</div><?php 
}

 ?>
<?php 
function tpl_52947a4e_mApplication__GQ0w8obysPBaaevzZh1E9g_Menu(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div class="menu">
		<?php /* tag "ul" from line 86 */; ?>
<ul class="nav nav-list config-number"><!-- tal:condition="php: @\MVC\Base\SessionRegistry::instance()->getCurrentUser()->isAdmin()"> -->
			<?php /* tag "li" from line 87 */; ?>
<li class="nav-header">CHỨC NĂNG</li>
			<?php 
/* tag "li" from line 88 */ ;
if (null !== ($_tmp_3 = ($ctx->ActiveAdmin=='Reward'?'active':'disable'))):  ;
$_tmp_3 = ' class="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<li<?php echo $_tmp_3 ?>
>
				<?php 
/* tag "a" from line 89 */ ;
if (null !== ($_tmp_1 = ('/thu-lao/reward'))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
>NHẬP ĐIỂM THÙ LAO<?php /* tag "span" from line 89 */; ?>
<span class="badge badge-info pull-right"></span></a>
			</li>				
			<?php 
/* tag "li" from line 91 */ ;
if (null !== ($_tmp_2 = ($ctx->ActiveAdmin=='Report'?'active':'disable'))):  ;
$_tmp_2 = ' class="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<li<?php echo $_tmp_2 ?>
>
				<?php 
/* tag "a" from line 92 */ ;
if (null !== ($_tmp_1 = ('/thu-lao/report'))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
>THÔNG KÊ ĐIỂM THÙ LAO<?php /* tag "span" from line 92 */; ?>
<span class="badge badge-info pull-right"></span></a>
			</li>			
			<?php 
/* tag "li" from line 94 */ ;
if (null !== ($_tmp_3 = ($ctx->ActiveAdmin=='Manager'?'active':'disable'))):  ;
$_tmp_3 = ' class="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<li<?php echo $_tmp_3 ?>
>
				<?php 
/* tag "a" from line 95 */ ;
if (null !== ($_tmp_1 = ('/thu-lao/manager'))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
>QUẢN LÝ DANH MỤC<?php /* tag "span" from line 95 */; ?>
<span class="badge badge-info pull-right"></span></a>
			</li>
			<?php 
/* tag "li" from line 97 */ ;
if (null !== ($_tmp_2 = ($ctx->ActiveAdmin=='ChangePass'?'active':'disable'))):  ;
$_tmp_2 = ' class="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<li<?php echo $_tmp_2 ?>
>
				<?php 
/* tag "a" from line 98 */ ;
if (null !== ($_tmp_1 = ('/thu-lao/changepass'))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
>ĐỔI MẬT KHẨU <?php /* tag "span" from line 98 */; ?>
<span class="badge badge-info pull-right"></span></a>
			</li>
			<?php 
/* tag "li" from line 100 */ ;
if (\MVC\Base\SessionRegistry::instance()->getCurrentUser()->isAdmin()):  ;
if (null !== ($_tmp_3 = ($ctx->ActiveAdmin=='Statistic'?'active':'disable'))):  ;
$_tmp_3 = ' class="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<li<?php echo $_tmp_3 ?>
>
				<?php 
/* tag "a" from line 101 */ ;
if (null !== ($_tmp_1 = ('/app'))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
>QUẢN TRỊ WEB</a>
			</li><?php endif; ?>

			<?php /* tag "li" from line 103 */; ?>
<li class="nav-header">Hỗ trợ: THANH BẢO - 0903 062 068</li>
		</ul>
	</div><?php 
}

 ?>
<?php 
function tpl_52947a4e_mApplication__GQ0w8obysPBaaevzZh1E9g_PageBar(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div class="pagination">
		<?php /* tag "ul" from line 78 */; ?>
<ul>
			<?php 
/* tag "li" from line 79 */ ;
$_tmp_2 = $ctx->repeat ;
$_tmp_2->P = new PHPTAL_RepeatController($ctx->path($ctx->PN, 'getPages'))
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_2->P as $ctx->P): ;
if (null !== ($_tmp_1 = ($ctx->Page==$ctx->P->getId()?'disabled':'active'))):  ;
$_tmp_1 = ' class="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<li<?php echo $_tmp_1 ?>
>
				<?php 
/* tag "a" from line 80 */ ;
if (null !== ($_tmp_3 = ($ctx->path($ctx->P, 'getURL')))):  ;
$_tmp_3 = ' href="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<a<?php echo $_tmp_3 ?>
><?php echo phptal_escape($ctx->path($ctx->P, 'getName')); ?>
</a>
			</li><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

		</ul>
	</div><?php 
}

 ?>
<?php 
function tpl_52947a4e_mApplication__GQ0w8obysPBaaevzZh1E9g_LocationBar(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div>
		<?php /* tag "div" from line 64 */; ?>
<div class="row-fluid">			
			<?php /* tag "ul" from line 65 */; ?>
<ul class="span12 breadcrumb">
				<?php 
/* tag "li" from line 66 */ ;
$_tmp_1 = $ctx->repeat ;
$_tmp_1->Item = new PHPTAL_RepeatController($ctx->Navigation)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->Item as $ctx->Item): ;
?>
<li>
					<?php 
/* tag "a" from line 67 */ ;
if (null !== ($_tmp_2 = ($ctx->Item[1]))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
><?php echo phptal_escape($ctx->Item[0]); ?>
</a> <?php /* tag "span" from line 67 */; ?>
<span class="divider">/</span>
				</li><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

				<?php /* tag "li" from line 69 */; ?>
<li class="active"><?php echo phptal_escape($ctx->Title); ?>
</li>
			</ul>
		</div>
	</div><?php 
}

 ?>
<?php 
function tpl_52947a4e_mApplication__GQ0w8obysPBaaevzZh1E9g_Header(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div>
		<?php /* tag "div" from line 49 */; ?>
<div class="navbar navbar-inverse">
			<?php /* tag "div" from line 50 */; ?>
<div class="navbar-inner">
				<?php /* tag "a" from line 51 */; ?>
<a class="brand" href="/thu-lao">Ứng dụng Quản lý thù lao - www.ktthehien.com</a> 
				<?php /* tag "a" from line 52 */; ?>
<a class="brand" href="/thu-lao/app">Đang Chọn Tháng <?php /* tag "span" from line 52 */; ?>
<span><?php echo phptal_escape(\MVC\Base\SessionRegistry::instance()->getCurrentMonth()); ?>
</span> Năm: <?php /* tag "span" from line 52 */; ?>
<span><?php echo phptal_escape(\MVC\Base\SessionRegistry::instance()->getCurrentYear()); ?>
</span></a>
				<?php /* tag "p" from line 53 */; ?>
<p class="navbar-text pull-right">				
					<?php /* tag "a" from line 54 */; ?>
<a class="navbar-link" href="thu-lao/signout/load"><?php 
/* tag "span" from line 54 */ ;
if (\MVC\Base\SessionRegistry::instance()->getCurrentUser()):  ;
?>
<span><?php echo phptal_escape(\MVC\Base\SessionRegistry::instance()->getCurrentUser()->getUser()); ?>
</span><?php endif; ?>
</a> Đăng xuất
				</p>
			</div>
		</div>
	</div><?php 
}

 ?>
<?php 
function tpl_52947a4e_mApplication__GQ0w8obysPBaaevzZh1E9g_IncludeJS(PHPTAL $_thistpl, PHPTAL $tpl) {
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
<script type="text/javascript" language="javascript" src="/mvc/templates/theme/bootstrap/js/bootstrap.js"></script>
		<?php /* tag "script" from line 42 */; ?>
<script type="text/javascript" language="javascript" src="/mvc/templates/script/user/base.js"></script>
	</span><?php 
}

 ?>
<?php 
function tpl_52947a4e_mApplication__GQ0w8obysPBaaevzZh1E9g_IncludeCSS(PHPTAL $_thistpl, PHPTAL $tpl) {
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
<link rel="stylesheet" type="text/css" href="/mvc/templates/theme/bootstrap/css/handle.css"/>
	</span><?php 
}

 ?>
<?php 
function tpl_52947a4e_mApplication__GQ0w8obysPBaaevzZh1E9g_IncludeMETA(PHPTAL $_thistpl, PHPTAL $tpl) {
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
function tpl_52947a4e_mApplication__GQ0w8obysPBaaevzZh1E9g(PHPTAL $tpl, PHPTAL_Context $ctx) {
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
	<?php /* tag "div" from line 48 */; ?>

	
	<!-- ======================================================================== -->
	<!-- LOCATION BAR															  -->
	<!-- ======================================================================== -->
	<?php /* tag "div" from line 63 */; ?>

	
	<!-- ======================================================================== -->
	<!-- LOCATION BAR															  -->
	<!-- ======================================================================== -->
	<?php /* tag "div" from line 77 */; ?>

							
	<?php /* tag "div" from line 85 */; ?>

	
	<!-- ======================================================================== -->
	<!-- FOOTER																	  -->
	<!-- ======================================================================== -->
	<?php /* tag "div" from line 110 */; ?>
	
</body>
</html><?php 
/* end */ ;

}

?>
<?php /* 
*** DO NOT EDIT THIS FILE ***

Generated by PHPTAL from D:\AppWebServer\MyCodePHP\kythuatthehien.com\mvc\templates\mApplication.xhtml (edit that file instead) */; ?>