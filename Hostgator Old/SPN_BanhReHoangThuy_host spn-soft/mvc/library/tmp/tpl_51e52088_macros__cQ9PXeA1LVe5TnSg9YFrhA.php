<?php 
function tpl_51e52088_macros__cQ9PXeA1LVe5TnSg9YFrhA_DialogConfirm(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div>
		<?php 
/* tag "div" from line 155 */ ;
if (null !== ($_tmp_2 = ($ctx->DialogTitle))):  ;
$_tmp_2 = ' title="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<div id="DialogConfirm"<?php echo $_tmp_2 ?>
>		
			<?php /* tag "span" from line 156 */; ?>
<span><?php echo phptal_escape($ctx->Message); ?>
</span>
		</div>
	</div><?php 
}

 ?>
<?php 
function tpl_51e52088_macros__cQ9PXeA1LVe5TnSg9YFrhA_user(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div class="button">
			<?php /* tag "a" from line 149 */; ?>
<a href="?cmd=Signout"><?php 
/* tag "img" from line 149 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->User, 'getPictureLinked')))):  ;
$_tmp_2 = ' src="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
if (null !== ($_tmp_1 = ('48'))):  ;
$_tmp_1 = ' width="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<img alt=""<?php echo $_tmp_2 ?>
<?php echo $_tmp_1 ?>
/></a>
			<?php /* tag "BR" from line 150 */; ?>
<BR/>
			<?php /* tag "span" from line 151 */; ?>
<span class="text"><?php echo phptal_escape($ctx->path($ctx->User, 'getUser')); ?>
</span>
		</div><?php 
}

 ?>
<?php 
function tpl_51e52088_macros__cQ9PXeA1LVe5TnSg9YFrhA_footer(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div align="right" id="footer">
		<?php /* tag "small" from line 143 */; ?>
<small>Bản quyền ©2009-2011 SPN Co, Ltd. Giữ toàn quyền.</small>
	</div><?php 
}

 ?>
<?php 
function tpl_51e52088_macros__cQ9PXeA1LVe5TnSg9YFrhA_HeaderModuleSettings(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div id="header">
		<?php 
/* tag "span" from line 129 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('macros.xhtml/Logo', $_thistpl) ;
$ctx->popSlots() ;
?>

		<?php 
/* tag "span" from line 130 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('macros.xhtml/Info', $_thistpl) ;
$ctx->popSlots() ;
?>

		<?php 
/* tag "span" from line 131 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('macros.xhtml/UserInfo', $_thistpl) ;
$ctx->popSlots() ;
?>

		<?php /* tag "div" from line 132 */; ?>
<div id="MainMenu">
			<?php /* tag "div" from line 133 */; ?>
<div id="Content">												
				<?php /* tag "a" from line 134 */; ?>
<a class="MenuItemChecked CornerRight" href="?cmd=ViewSettings">CẤU HÌNH</a>
				<?php /* tag "a" from line 135 */; ?>
<a class="MenuItem" href="?cmd=ViewSuppliers">CUNG CẤP</a>
				<?php /* tag "a" from line 136 */; ?>
<a class="MenuItem" href="?cmd=ViewCustomers">KHÁCH HÀNG</a>
				<?php /* tag "a" from line 137 */; ?>
<a class="MenuItem CornerLeft" href="?cmd=ViewFactories">LÒ SẢN XUẤT</a>
			</div>
		</div>
	</div><?php 
}

 ?>
<?php 
function tpl_51e52088_macros__cQ9PXeA1LVe5TnSg9YFrhA_HeaderModuleSuppliers(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div id="header">
		<?php 
/* tag "span" from line 116 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('macros.xhtml/Logo', $_thistpl) ;
$ctx->popSlots() ;
?>

		<?php 
/* tag "span" from line 117 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('macros.xhtml/Info', $_thistpl) ;
$ctx->popSlots() ;
?>

		<?php 
/* tag "span" from line 118 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('macros.xhtml/UserInfo', $_thistpl) ;
$ctx->popSlots() ;
?>

		<?php /* tag "div" from line 119 */; ?>
<div id="MainMenu">
			<?php /* tag "div" from line 120 */; ?>
<div id="Content">												
				<?php /* tag "a" from line 121 */; ?>
<a class="MenuItem CornerRight" href="?cmd=ViewSettings">CẤU HÌNH</a>
				<?php /* tag "a" from line 122 */; ?>
<a class="MenuItemChecked" href="?cmd=ViewSuppliers">CUNG CẤP</a>
				<?php /* tag "a" from line 123 */; ?>
<a class="MenuItem" href="?cmd=ViewCustomers">KHÁCH HÀNG</a>
				<?php /* tag "a" from line 124 */; ?>
<a class="MenuItem CornerLeft" href="?cmd=ViewFactories">LÒ SẢN XUẤT</a>
			</div>
		</div>
	</div><?php 
}

 ?>
<?php 
function tpl_51e52088_macros__cQ9PXeA1LVe5TnSg9YFrhA_HeaderModuleCustomers(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div id="header">
		<?php 
/* tag "span" from line 103 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('macros.xhtml/Logo', $_thistpl) ;
$ctx->popSlots() ;
?>

		<?php 
/* tag "span" from line 104 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('macros.xhtml/Info', $_thistpl) ;
$ctx->popSlots() ;
?>

		<?php 
/* tag "span" from line 105 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('macros.xhtml/UserInfo', $_thistpl) ;
$ctx->popSlots() ;
?>

		<?php /* tag "div" from line 106 */; ?>
<div id="MainMenu">
			<?php /* tag "div" from line 107 */; ?>
<div id="Content">												
				<?php /* tag "a" from line 108 */; ?>
<a class="MenuItem CornerRight" href="?cmd=ViewSettings">CẤU HÌNH</a>
				<?php /* tag "a" from line 109 */; ?>
<a class="MenuItem" href="?cmd=ViewSuppliers">CUNG CẤP</a>
				<?php /* tag "a" from line 110 */; ?>
<a class="MenuItemChecked" href="?cmd=ViewCustomers">KHÁCH HÀNG</a>
				<?php /* tag "a" from line 111 */; ?>
<a class="MenuItem CornerLeft" href="?cmd=ViewFactories">LÒ SẢN XUẤT</a>
			</div>
		</div>
	</div><?php 
}

 ?>
<?php 
function tpl_51e52088_macros__cQ9PXeA1LVe5TnSg9YFrhA_HeaderModuleFactories(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div id="header">
		<?php 
/* tag "span" from line 89 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('macros.xhtml/Logo', $_thistpl) ;
$ctx->popSlots() ;
?>

		<?php 
/* tag "span" from line 90 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('macros.xhtml/Info', $_thistpl) ;
$ctx->popSlots() ;
?>

		<?php 
/* tag "span" from line 91 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('macros.xhtml/UserInfo', $_thistpl) ;
$ctx->popSlots() ;
?>

		<?php /* tag "div" from line 92 */; ?>
<div id="MainMenu">
			<?php /* tag "div" from line 93 */; ?>
<div id="Content">												
				<?php /* tag "a" from line 94 */; ?>
<a class="MenuItem CornerRight" href="?cmd=ViewSettings">CẤU HÌNH</a>
				<?php /* tag "a" from line 95 */; ?>
<a class="MenuItem" href="?cmd=ViewSuppliers">CUNG CẤP</a>
				<?php /* tag "a" from line 96 */; ?>
<a class="MenuItem" href="?cmd=ViewCustomers">KHÁCH HÀNG</a>
				<?php /* tag "a" from line 97 */; ?>
<a class="MenuItemChecked CornerLeft" href="?cmd=ViewFactories">LÒ SẢN XUẤT</a>
			</div>
		</div>
	</div><?php 
}

 ?>
<?php 
function tpl_51e52088_macros__cQ9PXeA1LVe5TnSg9YFrhA_HeaderModuleMain(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div id="header">
		<?php 
/* tag "span" from line 75 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('macros.xhtml/Logo', $_thistpl) ;
$ctx->popSlots() ;
?>

		<?php 
/* tag "span" from line 76 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('macros.xhtml/Info', $_thistpl) ;
$ctx->popSlots() ;
?>

		<?php 
/* tag "span" from line 77 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('macros.xhtml/UserInfo', $_thistpl) ;
$ctx->popSlots() ;
?>

		<?php /* tag "div" from line 78 */; ?>
<div id="MainMenu">
			<?php /* tag "div" from line 79 */; ?>
<div id="Content">
				<?php /* tag "a" from line 80 */; ?>
<a class="MenuItem CornerRight" href="?cmd=ViewSettings">CẤU HÌNH</a>	
				<?php /* tag "a" from line 81 */; ?>
<a class="MenuItem" href="?cmd=ViewSuppliers">CUNG CẤP</a>
				<?php /* tag "a" from line 82 */; ?>
<a class="MenuItem" href="?cmd=ViewCustomers">KHÁCH HÀNG</a>
				<?php /* tag "a" from line 83 */; ?>
<a class="MenuItem CornerLeft" href="?cmd=ViewFactories">LÒ SẢN XUẤT</a>
			</div>
		</div>
	</div><?php 
}

 ?>
<?php 
function tpl_51e52088_macros__cQ9PXeA1LVe5TnSg9YFrhA_IncludeBase(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
if (($_tmp_1 = !($ctx->true))):  ;
?>
<span><?php endif; ?>

		<?php /* tag "meta" from line 51 */; ?>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
		<?php /* tag "link" from line 52 */; ?>
<link rel="icon" type="image/ico" href="mvc/templates/theme/image/favicon.ico"/>
		<?php /* tag "script" from line 53 */; ?>
<script type="text/javascript" language="javascript" src="mvc/templates/script/jquery.js"></script>	
		<?php /* tag "script" from line 54 */; ?>
<script type="text/javascript" language="javascript" src="mvc/templates/script/jquery.dataTables.js"></script>		
		<?php /* tag "script" from line 55 */; ?>
<script type="text/javascript" language="javascript" src="mvc/templates/script/jquery.jeditable.js"></script>
		<?php /* tag "script" from line 56 */; ?>
<script type="text/javascript" language="javascript" src="mvc/templates/script/jquery.dataTables.editable.js"></script>	
		<?php /* tag "script" from line 57 */; ?>
<script type="text/javascript" language="javascript" src="mvc/templates/script/KeyTable.js"></script>
		<?php /* tag "script" from line 58 */; ?>
<script type="text/javascript" language="javascript" src="mvc/templates/script/Button.js"></script>		
		<?php /* tag "script" from line 59 */; ?>
<script type="text/javascript" language="javascript" src="mvc/templates/script/main.js"></script>				
		<?php /* tag "script" from line 60 */; ?>
<script type="text/javascript" language="javascript" src="mvc/templates/script/jquery.ui.core.js"></script>
		<?php /* tag "script" from line 61 */; ?>
<script type="text/javascript" language="javascript" src="mvc/templates/script/jquery.ui.datepicker-vi.js"></script>
		<?php /* tag "script" from line 62 */; ?>
<script type="text/javascript" language="javascript" src="mvc/templates/script/jquery.ui.datepicker.min.js"></script>
		<?php /* tag "script" from line 63 */; ?>
<script type="text/javascript" language="javascript" src="mvc/templates/script/FixedColumns.js"></script>
		<?php /* tag "script" from line 64 */; ?>
<script type="text/javascript" language="javascript" src="mvc/templates/script/FixedHeader.min.js"></script>
		
		<?php /* tag "link" from line 66 */; ?>
<link rel="stylesheet" type="text/css" href="mvc/templates/theme/css/data_table.css"/>
		<?php /* tag "link" from line 67 */; ?>
<link rel="stylesheet" type="text/css" href="mvc/templates/theme/css/main_2.css"/>							
		<?php /* tag "link" from line 68 */; ?>
<link rel="stylesheet" type="text/css" href="mvc/templates/theme/css/ButtonTheme.css"/>
		<?php /* tag "link" from line 69 */; ?>
<link rel="stylesheet" type="text/css" href="mvc/templates/theme/css/jquery.ui.theme.css"/>
		<?php /* tag "link" from line 70 */; ?>
<link rel="stylesheet" type="text/css" href="mvc/templates/theme/css/jquery.ui.datepicker.css"/>
		<?php /* tag "link" from line 71 */; ?>
<link rel="stylesheet" type="text/css" href="mvc/templates/theme/css/data_table.css"/>		
	<?php if ($_tmp_1): ; ?>
</span><?php 
endif ;

}

?>
<?php 
function tpl_51e52088_macros__cQ9PXeA1LVe5TnSg9YFrhA_UserInfo(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div>
		<?php 
/* tag "div" from line 40 */ ;
if ($ctx->isLogin):  ;
?>
<div id="UserInfo">
			<?php /* tag "div" from line 41 */; ?>
<div align="right">				
				<?php 
/* tag "a" from line 42 */ ;
if (null !== ($_tmp_2 = ('?cmd=Signout'))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a class="CornerAll" id="NameLogin"<?php echo $_tmp_2 ?>
><?php echo phptal_escape($ctx->User); ?>
</a>
			</div>
		</div><?php endif; ?>

		<?php 
/* tag "div" from line 45 */ ;
if (!($ctx->isLogin)):  ;
?>
<div id="UserInfo">			
			<?php 
/* tag "span" from line 46 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('macros.xhtml/DialogSignin', $_thistpl) ;
$ctx->popSlots() ;
?>

		</div><?php endif; ?>

	</div><?php 
}

 ?>
<?php 
function tpl_51e52088_macros__cQ9PXeA1LVe5TnSg9YFrhA_DialogSignin(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div>
		<?php 
/* tag "div" from line 17 */ ;
if (null !== ($_tmp_1 = ('Đăng nhập hệ thống'))):  ;
$_tmp_1 = ' title="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<div id="DialogSignin"<?php echo $_tmp_1 ?>
>
			<?php /* tag "form" from line 18 */; ?>
<form id="frmUserInfo" name="frmUserInfo" action="?cmd=Signin" method="post">								
				<?php /* tag "table" from line 19 */; ?>
<table width="100%" align="center">
				<?php /* tag "tbody" from line 20 */; ?>
<tbody>					
					<?php /* tag "tr" from line 21 */; ?>
<tr>
						<?php /* tag "td" from line 22 */; ?>
<td align="right">TÊN NGƯỜI DÙNG</td>
						<?php /* tag "td" from line 23 */; ?>
<td align="left">
							<?php /* tag "INPUT" from line 24 */; ?>
<INPUT size="20" type="text" id="frmuser" name="User"/>
						</td>						 
					</tr>
					<?php /* tag "tr" from line 27 */; ?>
<tr>
						<?php /* tag "td" from line 28 */; ?>
<td align="right">MẬT KHẨU</td>
						<?php /* tag "td" from line 29 */; ?>
<td align="left">							
							<?php /* tag "INPUT" from line 30 */; ?>
<INPUT id="UserKeyDown" size="20" type="password" name="Pass"/>
						</td>						
					</tr>													
				</tbody>
				</table>			
			</form>
		</div>	
	</div><?php 
}

 ?>
<?php 
function tpl_51e52088_macros__cQ9PXeA1LVe5TnSg9YFrhA_Logo(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div>
		<?php /* tag "div" from line 12 */; ?>
<div id="Logo">
			<?php 
/* tag "img" from line 13 */ ;
if (null !== ($_tmp_1 = ('mvc/templates/theme/image/logobanhre_yellow.png'))):  ;
$_tmp_1 = ' src="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
if (null !== ($_tmp_2 = ('55'))):  ;
$_tmp_2 = ' width="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<img<?php echo $_tmp_1 ?>
<?php echo $_tmp_2 ?>
/>
		</div>	
	</div><?php 
}

 ?>
<?php 
function tpl_51e52088_macros__cQ9PXeA1LVe5TnSg9YFrhA_Info(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div>
		<?php /* tag "div" from line 4 */; ?>
<div id="Info">
				<?php /* tag "small" from line 5 */; ?>
<small>HỆ THỐNG QUẢN LÝ THÔNG TIN</small><?php /* tag "br" from line 5 */; ?>
<br/>
				<?php /* tag "small" from line 6 */; ?>
<small><?php /* tag "b" from line 6 */; ?>
<b>CSSX Bánh Rế HOÀNG THÚY</b></small><?php /* tag "br" from line 6 */; ?>
<br/>
				<?php /* tag "small" from line 7 */; ?>
<small>QL1A Cái Bè - Tiền Giang</small><?php /* tag "br" from line 7 */; ?>
<br/>
				<?php /* tag "small" from line 8 */; ?>
<small>(0733) 746 026</small>
		</div>
	</div><?php 
}

 ?>
<?php 
function tpl_51e52088_macros__cQ9PXeA1LVe5TnSg9YFrhA(PHPTAL $tpl, PHPTAL_Context $ctx) {
$_thistpl = $tpl ;
$_translator = $tpl->getTranslator() ;
/* tag "documentElement" from line 1 */ ;
/* tag "html" from line 1 */ ;
?>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<?php /* tag "body" from line 2 */; ?>
<body>
	<?php /* tag "div" from line 3 */; ?>
	
	<?php /* tag "div" from line 11 */; ?>

	<?php /* tag "div" from line 16 */; ?>
	
	
	<?php /* tag "div" from line 39 */; ?>

	<!-- ĐỊNH NGHĨA INCLUDE CHUẨN CHO TRANG WEB -->
	<?php /* tag "span" from line 50 */; ?>
	
	<!-- ĐỊNH NGHĨA MACRO TIÊU ĐỀ CHO TRANG WEB -->		
	<?php /* tag "div" from line 74 */; ?>

	
	<?php /* tag "div" from line 88 */; ?>

	
	<?php /* tag "div" from line 102 */; ?>

	<?php /* tag "div" from line 115 */; ?>
	
	<?php /* tag "div" from line 128 */; ?>
	
	
	<?php /* tag "div" from line 142 */; ?>
	
	
	<!-- ĐỊNH NGHĨA MACRO THÔNG TIN NGƯỜI DÙNG -->
	
		<?php /* tag "div" from line 148 */; ?>
	
	
	<?php /* tag "div" from line 154 */; ?>

</body>
</html><?php 
/* end */ ;

}

?>
<?php /* 
*** DO NOT EDIT THIS FILE ***

Generated by PHPTAL from /home/banhreht/public_html/mvc/templates/macros.xhtml (edit that file instead) */; ?>