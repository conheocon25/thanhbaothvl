<?php 
function tpl_508ad33c_Setting__AXJEAJnqMwVHcI46M4ViUA(PHPTAL $tpl, PHPTAL_Context $ctx) {
$_thistpl = $tpl ;
$_translator = $tpl->getTranslator() ;
/* tag "documentElement" from line 1 */ ;
$ctx->setDocType('<!DOCTYPE html>',false) ;
?>
 
<?php /* tag "html" from line 2 */; ?>
<html>
	<?php /* tag "head" from line 3 */; ?>
<head>
		<?php 
/* tag "span" from line 4 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('macros.xhtml/IncludeCSS_Mobile', $_thistpl) ;
$ctx->popSlots() ;
?>

		<?php 
/* tag "span" from line 5 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('macros.xhtml/IncludeJS_Mobile', $_thistpl) ;
$ctx->popSlots() ;
?>

		<?php /* tag "script" from line 6 */; ?>
<script type="text/javascript" language="javascript" src="/mvc/templates/script/user/Setting.js"></script>
	</head>
<?php /* tag "body" from line 8 */; ?>
<body>
	<!-- SETTING !-->
	<?php /* tag "div" from line 10 */; ?>
<div id="setting" data-role="page" class="type-interior"></div>
	
	<!-- UNIT !-->
	<?php /* tag "div" from line 13 */; ?>
<div id="unit" data-role="page" class="type-interior">
		<?php /* tag "div" from line 14 */; ?>
<div data-role="header" data-theme="d">
			<?php /* tag "div" from line 15 */; ?>
<div align="center">
				<?php 
/* tag "a" from line 16 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLApp')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
>
					<?php /* tag "img" from line 17 */; ?>
<img border="0" width="100%" src="/data/images/app/banner.jpg"/>
				</a>
			</div>
		</div>
		<?php /* tag "div" from line 21 */; ?>
<div data-role="content">
			<?php /* tag "div" from line 22 */; ?>
<div class="content-primary">			
				<?php /* tag "ul" from line 23 */; ?>
<ul data-role="listview" data-theme="c" data-inset="true">
					<?php 
/* tag "li" from line 24 */ ;
$_tmp_1 = $ctx->repeat ;
$_tmp_1->Unit = new PHPTAL_RepeatController($ctx->Units)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->Unit as $ctx->Unit): ;
?>
<li>
						<?php 
/* tag "a" from line 25 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Unit, 'getURLUpdLoad')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a data-ajax="false"<?php echo $_tmp_2 ?>
>
							<?php /* tag "strong" from line 26 */; ?>
<strong><?php echo phptal_escape($ctx->path($ctx->repeat, 'Unit/number')); ?>
</strong>. <?php /* tag "strong" from line 26 */; ?>
<strong><?php echo phptal_escape($ctx->path($ctx->Unit, 'getName')); ?>
</strong>
						</a>
						<?php 
/* tag "a" from line 28 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Unit, 'getURLDelLoad')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a data-theme="c" data-icon="delete"<?php echo $_tmp_2 ?>
></a>
					</li><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>
																
				</ul>
				<?php 
/* tag "a" from line 31 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->User, 'getApp/getURLSettingUnitInsLoad')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a data-ajax="false" data-theme="b" data-role="button" data-icon="plus"<?php echo $_tmp_2 ?>
>THÊM ĐƠN VỊ</a>
			</div>
			<?php /* tag "div" from line 33 */; ?>
<div class="content-secondary">				
				<?php /* tag "div" from line 34 */; ?>
<div data-role="collapsible" data-collapsed="false" data-theme="b" data-content-theme="d">
					<?php /* tag "h3" from line 35 */; ?>
<h3>THIẾT LẬP</h3>
					<?php /* tag "ul" from line 36 */; ?>
<ul data-role="listview" data-theme="c" data-dividertheme="d">												
						<?php /* tag "li" from line 37 */; ?>
<li><?php 
/* tag "a" from line 37 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLSettingInfo')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
>THÔNG TIN</a></li>
						<?php /* tag "li" from line 38 */; ?>
<li><?php 
/* tag "a" from line 38 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->User, 'getApp/getURLSettingPond')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
>AO NUÔI</a></li>
						<?php /* tag "li" from line 39 */; ?>
<li><?php 
/* tag "a" from line 39 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLSettingSupplier')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
>NHÀ CUNG CẤP</a></li>						
						<?php /* tag "li" from line 40 */; ?>
<li><?php 
/* tag "a" from line 40 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->User, 'getApp/getURLSettingStore')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
>KHO HÀNG</a></li>						
						<?php /* tag "li" from line 41 */; ?>
<li><?php 
/* tag "a" from line 41 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLSettingCategory')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
>DANH MỤC</a></li>
						<?php /* tag "li" from line 42 */; ?>
<li data-theme="a"><?php 
/* tag "a" from line 42 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->User, 'getApp/getURLSettingUnit')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
>ĐƠN VỊ TÍNH</a></li>
					</ul>
				</div>				
			</div>
		</div>
		<?php /* tag "div" from line 47 */; ?>
<div data-role="footer" class="footer-docs" data-theme="c"><?php /* tag "p" from line 47 */; ?>
<p>&copy; 2012 SPN Co,ltd.</p></div>
	</div>
	
	<!-- STORE !-->
	<?php /* tag "div" from line 51 */; ?>
<div id="store" data-role="page" class="type-interior">
		<?php /* tag "div" from line 52 */; ?>
<div data-role="header" data-theme="d">
			<?php /* tag "div" from line 53 */; ?>
<div align="center">
				<?php 
/* tag "a" from line 54 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLApp')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
>
					<?php /* tag "img" from line 55 */; ?>
<img border="0" width="100%" src="/data/images/app/banner.jpg"/>
				</a>
			</div>
		</div>
		<?php /* tag "div" from line 59 */; ?>
<div data-role="content">
			<?php /* tag "div" from line 60 */; ?>
<div class="content-primary">			
				<?php /* tag "ul" from line 61 */; ?>
<ul data-role="listview" data-theme="c" data-inset="true">
					<?php 
/* tag "li" from line 62 */ ;
$_tmp_2 = $ctx->repeat ;
$_tmp_2->Store = new PHPTAL_RepeatController($ctx->Stores)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_2->Store as $ctx->Store): ;
?>
<li>
						<?php 
/* tag "a" from line 63 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Store, 'getURLInit')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a data-ajax="false"<?php echo $_tmp_1 ?>
>
							<?php /* tag "strong" from line 64 */; ?>
<strong><?php echo phptal_escape($ctx->path($ctx->repeat, 'Store/number')); ?>
</strong>. <?php /* tag "strong" from line 64 */; ?>
<strong><?php echo phptal_escape($ctx->path($ctx->Store, 'getName')); ?>
</strong>
						</a>
						<?php 
/* tag "a" from line 66 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Store, 'getURLDelLoad')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a data-theme="c" data-icon="delete"<?php echo $_tmp_1 ?>
></a>
					</li><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

				</ul>
				<?php 
/* tag "a" from line 69 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLSettingStoreInsLoad')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a data-ajax="false" data-theme="b" data-role="button" data-icon="plus"<?php echo $_tmp_1 ?>
>THÊM KHO</a>
			</div>
			<?php /* tag "div" from line 71 */; ?>
<div class="content-secondary">				
				<?php /* tag "div" from line 72 */; ?>
<div data-role="collapsible" data-collapsed="false" data-theme="b" data-content-theme="d">
					<?php /* tag "h3" from line 73 */; ?>
<h3>THIẾT LẬP</h3>
					<?php /* tag "ul" from line 74 */; ?>
<ul data-role="listview" data-theme="c" data-dividertheme="d">												
						<?php /* tag "li" from line 75 */; ?>
<li><?php 
/* tag "a" from line 75 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->User, 'getApp/getURLSettingInfo')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
>THÔNG TIN</a></li>
						<?php /* tag "li" from line 76 */; ?>
<li><?php 
/* tag "a" from line 76 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLSettingPond')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
>AO NUÔI</a></li>
						<?php /* tag "li" from line 77 */; ?>
<li><?php 
/* tag "a" from line 77 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->User, 'getApp/getURLSettingSupplier')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
>NHÀ CUNG CẤP</a></li>
						<?php /* tag "li" from line 78 */; ?>
<li data-theme="a"><?php 
/* tag "a" from line 78 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLSettingStore')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
>KHO HÀNG</a></li>
						<?php /* tag "li" from line 79 */; ?>
<li><?php 
/* tag "a" from line 79 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->User, 'getApp/getURLSettingCategory')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
>DANH MỤC</a></li>
						<?php /* tag "li" from line 80 */; ?>
<li><?php 
/* tag "a" from line 80 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLSettingUnit')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
>ĐƠN VỊ TÍNH</a></li>
					</ul>
				</div>				
			</div>
		</div>
		<?php /* tag "div" from line 85 */; ?>
<div data-role="footer" class="footer-docs" data-theme="c"><?php /* tag "p" from line 85 */; ?>
<p>&copy; 2012 SPN Co,ltd.</p></div>
	</div>
	
	<!-- CATEGORY !-->
	<?php /* tag "div" from line 89 */; ?>
<div id="category" data-role="page" class="type-interior">
		<?php /* tag "div" from line 90 */; ?>
<div data-role="header" data-theme="d">
			<?php /* tag "div" from line 91 */; ?>
<div align="center">
				<?php 
/* tag "a" from line 92 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->User, 'getApp/getURLApp')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
>
					<?php /* tag "img" from line 93 */; ?>
<img border="0" width="100%" src="/data/images/app/banner.jpg"/>
				</a>
			</div>
		</div>
		<?php /* tag "div" from line 97 */; ?>
<div data-role="content">
			<?php /* tag "div" from line 98 */; ?>
<div class="content-primary">				
				<?php /* tag "ul" from line 99 */; ?>
<ul data-role="listview" data-theme="c" data-inset="true">
					<?php 
/* tag "li" from line 100 */ ;
$_tmp_1 = $ctx->repeat ;
$_tmp_1->Category = new PHPTAL_RepeatController($ctx->Categories)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->Category as $ctx->Category): ;
?>
<li>						
						<?php 
/* tag "a" from line 101 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Category, 'getURLUpdLoad')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a data-ajax="false"<?php echo $_tmp_2 ?>
>
							<?php /* tag "span" from line 102 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->repeat, 'Category/number')); ?>
</span>. <?php /* tag "span" from line 102 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Category, 'getName')); ?>
</span>
						</a>
						<?php 
/* tag "a" from line 104 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Category, 'getURLDelLoad')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a data-theme="c" data-icon="delete"<?php echo $_tmp_2 ?>
></a>
					</li><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>
																
				</ul>
				<?php 
/* tag "a" from line 107 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->User, 'getApp/getURLSettingCategoryInsLoad')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a data-ajax="false" data-theme="b" data-role="button" data-icon="plus"<?php echo $_tmp_2 ?>
>THÊM DANH MỤC</a>
			</div>
			<?php /* tag "div" from line 109 */; ?>
<div class="content-secondary">				
				<?php /* tag "div" from line 110 */; ?>
<div data-role="collapsible" data-collapsed="false" data-theme="b" data-content-theme="d">
					<?php /* tag "h3" from line 111 */; ?>
<h3>THIẾT LẬP</h3>
					<?php /* tag "ul" from line 112 */; ?>
<ul data-role="listview" data-theme="c" data-dividertheme="d">												
						<?php /* tag "li" from line 113 */; ?>
<li><?php 
/* tag "a" from line 113 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLSettingInfo')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
>THÔNG TIN</a></li>
						<?php /* tag "li" from line 114 */; ?>
<li><?php 
/* tag "a" from line 114 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->User, 'getApp/getURLSettingPond')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
>AO NUÔI</a></li>
						<?php /* tag "li" from line 115 */; ?>
<li><?php 
/* tag "a" from line 115 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLSettingSupplier')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
>NHÀ CUNG CẤP</a></li>
						<?php /* tag "li" from line 116 */; ?>
<li><?php 
/* tag "a" from line 116 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->User, 'getApp/getURLSettingStore')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
>KHO HÀNG</a></li>
						<?php /* tag "li" from line 117 */; ?>
<li data-theme="a"><?php 
/* tag "a" from line 117 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLSettingCategory')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
>DANH MỤC</a></li>
						<?php /* tag "li" from line 118 */; ?>
<li><?php 
/* tag "a" from line 118 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->User, 'getApp/getURLSettingUnit')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
>ĐƠN VỊ TÍNH</a></li>
					</ul>
				</div>				
			</div>
		</div>
		<?php /* tag "div" from line 123 */; ?>
<div data-role="footer" class="footer-docs" data-theme="c"><?php /* tag "p" from line 123 */; ?>
<p>&copy; 2012 SPN Co,ltd.</p></div>
	</div>
			
	<!-- INFO !-->
	<?php /* tag "div" from line 127 */; ?>
<div id="info" data-role="page" class="type-interior">
		<?php /* tag "div" from line 128 */; ?>
<div data-role="header" data-theme="d">
			<?php /* tag "div" from line 129 */; ?>
<div align="center">
				<?php 
/* tag "a" from line 130 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLApp')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
>
					<?php /* tag "img" from line 131 */; ?>
<img border="0" width="100%" src="/data/images/app/banner.jpg"/>
				</a>
			</div>
		</div>
		<?php /* tag "div" from line 135 */; ?>
<div data-role="content">
			<?php /* tag "div" from line 136 */; ?>
<div class="content-primary">
				<?php /* tag "ul" from line 137 */; ?>
<ul data-role="listview" data-inset="true">
					<?php /* tag "li" from line 138 */; ?>
<li>
						<?php 
/* tag "a" from line 139 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->User, 'getApp/getURLSettingInfoUpdLoad')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a data-ajax="false"<?php echo $_tmp_2 ?>
>
							<?php /* tag "h3" from line 140 */; ?>
<h3><?php echo phptal_escape($ctx->path($ctx->User, 'getApp/getName')); ?>
</h3>
							<?php /* tag "p" from line 141 */; ?>
<p><?php /* tag "strong" from line 141 */; ?>
<strong><?php echo phptal_escape($ctx->path($ctx->User, 'getApp/getAddress')); ?>
</strong>, <?php /* tag "strong" from line 141 */; ?>
<strong><?php echo phptal_escape($ctx->path($ctx->User, 'getApp/getEmail')); ?>
</strong></p>
							<?php /* tag "p" from line 142 */; ?>
<p class="ui-li-aside">
								<?php /* tag "strong" from line 143 */; ?>
<strong><?php echo phptal_escape($ctx->path($ctx->User, 'getApp/getPhone')); ?>
</strong>
							</p>
						</a>
					</li>
					<?php /* tag "li" from line 147 */; ?>
<li>
						<?php /* tag "p" from line 148 */; ?>
<p>
							Sử dụng <?php /* tag "strong" from line 149 */; ?>
<strong><?php echo phptal_escape($ctx->path($ctx->User, 'getApp/getDateCreatedPrint')); ?>
</strong>,							
							Kích hoạt đến <?php /* tag "strong" from line 150 */; ?>
<strong><?php echo phptal_escape($ctx->path($ctx->User, 'getApp/getDateActivityPrint')); ?>
</strong>,
							còn <?php /* tag "strong" from line 151 */; ?>
<strong><?php echo phptal_escape($ctx->path($ctx->User, 'getApp/remainPercentUpdated')); ?>
</strong> giờ để cập nhật
						</p>						
					</li>
					<?php /* tag "li" from line 154 */; ?>
<li><?php 
/* tag "a" from line 154 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLSettingInfoPasswdLoad')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a data-ajax="false"<?php echo $_tmp_1 ?>
>Đổi mật khẩu</a></li>
				</ul>
			</div>
			<?php /* tag "div" from line 157 */; ?>
<div class="content-secondary">
				<?php /* tag "div" from line 158 */; ?>
<div data-role="collapsible" data-collapsed="false" data-theme="b" data-content-theme="d">
					<?php /* tag "h3" from line 159 */; ?>
<h3>THIẾT LẬP</h3>
					<?php /* tag "ul" from line 160 */; ?>
<ul data-role="listview" data-theme="c" data-dividertheme="d">
						<?php /* tag "li" from line 161 */; ?>
<li data-theme="a"><?php 
/* tag "a" from line 161 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->User, 'getApp/getURLSettingInfo')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
>THÔNG TIN</a></li>
						<?php /* tag "li" from line 162 */; ?>
<li><?php 
/* tag "a" from line 162 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLSettingPond')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
>AO NUÔI</a></li>
						<?php /* tag "li" from line 163 */; ?>
<li><?php 
/* tag "a" from line 163 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->User, 'getApp/getURLSettingSupplier')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
>NHÀ CUNG CẤP</a></li>
						<?php /* tag "li" from line 164 */; ?>
<li><?php 
/* tag "a" from line 164 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLSettingStore')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
>KHO HÀNG</a></li>
						<?php /* tag "li" from line 165 */; ?>
<li><?php 
/* tag "a" from line 165 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->User, 'getApp/getURLSettingCategory')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
>DANH MỤC</a></li>
						<?php /* tag "li" from line 166 */; ?>
<li><?php 
/* tag "a" from line 166 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLSettingUnit')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
>ĐƠN VỊ TÍNH</a></li>
					</ul>
				</div>
			</div>
		</div>
		<?php /* tag "div" from line 171 */; ?>
<div data-role="footer" class="footer-docs" data-theme="c"><?php /* tag "p" from line 171 */; ?>
<p>&copy; 2012 SPN Co,ltd.</p></div>
	</div>
		
	<!-- POND !-->
	<?php /* tag "div" from line 175 */; ?>
<div id="pond" data-role="page" class="type-interior">
		<?php /* tag "div" from line 176 */; ?>
<div data-role="header" data-theme="d">
			<?php /* tag "div" from line 177 */; ?>
<div align="center">
				<?php 
/* tag "a" from line 178 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->User, 'getApp/getURLApp')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
>
					<?php /* tag "img" from line 179 */; ?>
<img border="0" width="100%" src="/data/images/app/banner.jpg"/>
				</a>
			</div>
		</div>
		<?php /* tag "div" from line 183 */; ?>
<div data-role="content">
			<?php /* tag "div" from line 184 */; ?>
<div class="content-primary">				
				<?php /* tag "ul" from line 185 */; ?>
<ul data-role="listview" data-inset="true">
					<?php 
/* tag "li" from line 186 */ ;
$_tmp_1 = $ctx->repeat ;
$_tmp_1->Pond = new PHPTAL_RepeatController($ctx->Ponds)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->Pond as $ctx->Pond): ;
?>
<li>
						<?php 
/* tag "a" from line 187 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Pond, 'getURLSession')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a data-ajax="false"<?php echo $_tmp_2 ?>
>
							<?php /* tag "span" from line 188 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->repeat, 'Pond/number')); ?>
</span>. [<?php /* tag "span" from line 188 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Pond, 'getName')); ?>
</span>]
							<?php /* tag "span" from line 189 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Pond, 'getAddress')); ?>
</span>
							<?php /* tag "p" from line 190 */; ?>
<p class="ui-li-count"><?php /* tag "strong" from line 190 */; ?>
<strong><?php echo phptal_escape($ctx->path($ctx->Pond, 'getSessions/count')); ?>
</strong></p>
						</a>						
						<?php 
/* tag "a" from line 192 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Pond, 'getURLDelLoad')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a data-theme="c" data-icon="delete"<?php echo $_tmp_2 ?>
></a>
					</li><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

				</ul>
				<?php 
/* tag "a" from line 195 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->User, 'getApp/getURLSettingPondInsLoad')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a data-ajax="false" data-role="button" data-icon="plus" data-theme="b"<?php echo $_tmp_2 ?>
>THÊM AO</a>
			</div>
			<?php /* tag "div" from line 197 */; ?>
<div class="content-secondary">
				<?php /* tag "div" from line 198 */; ?>
<div data-role="collapsible" data-collapsed="false" data-theme="b" data-content-theme="d">
					<?php /* tag "h3" from line 199 */; ?>
<h3>THIẾT LẬP</h3>
					<?php /* tag "ul" from line 200 */; ?>
<ul data-role="listview" data-theme="c" data-dividertheme="d">
						<?php /* tag "li" from line 201 */; ?>
<li><?php 
/* tag "a" from line 201 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLSettingInfo')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
>THÔNG TIN</a></li>
						<?php /* tag "li" from line 202 */; ?>
<li data-theme="a"><?php 
/* tag "a" from line 202 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->User, 'getApp/getURLSettingPond')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
>AO NUÔI</a></li>
						<?php /* tag "li" from line 203 */; ?>
<li><?php 
/* tag "a" from line 203 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLSettingSupplier')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
>NHÀ CUNG CẤP</a></li>
						<?php /* tag "li" from line 204 */; ?>
<li><?php 
/* tag "a" from line 204 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->User, 'getApp/getURLSettingStore')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
>KHO HÀNG</a></li>						
						<?php /* tag "li" from line 205 */; ?>
<li><?php 
/* tag "a" from line 205 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLSettingCategory')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
>DANH MỤC</a></li>
						<?php /* tag "li" from line 206 */; ?>
<li><?php 
/* tag "a" from line 206 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->User, 'getApp/getURLSettingUnit')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
>ĐƠN VỊ TÍNH</a></li>
					</ul>
				</div>
			</div>
		</div>
		<?php /* tag "div" from line 211 */; ?>
<div data-role="footer" class="footer-docs" data-theme="c"><?php /* tag "p" from line 211 */; ?>
<p>&copy; 2012 SPN Co,ltd.</p></div>
	</div>
			
	<!-- SUPPLIER !-->
	<?php /* tag "div" from line 215 */; ?>
<div id="supplier" data-role="page" class="type-interior">
		<?php /* tag "div" from line 216 */; ?>
<div data-role="header" data-theme="d">
			<?php /* tag "div" from line 217 */; ?>
<div align="center">
				<?php 
/* tag "a" from line 218 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLApp')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
>
					<?php /* tag "img" from line 219 */; ?>
<img border="0" width="100%" src="/data/images/app/banner.jpg"/>
				</a>
			</div>
		</div>
		<?php /* tag "div" from line 223 */; ?>
<div data-role="content">
			<?php /* tag "div" from line 224 */; ?>
<div class="content-primary">				
				<?php /* tag "ul" from line 225 */; ?>
<ul data-role="listview" data-theme="c" data-inset="true">
					<?php 
/* tag "li" from line 226 */ ;
$_tmp_2 = $ctx->repeat ;
$_tmp_2->Supplier = new PHPTAL_RepeatController($ctx->Suppliers)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_2->Supplier as $ctx->Supplier): ;
?>
<li>
						<?php 
/* tag "a" from line 227 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Supplier, 'getURLResource')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a data-ajax="false"<?php echo $_tmp_1 ?>
>
							<?php /* tag "span" from line 228 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->repeat, 'Supplier/number')); ?>
</span>. <?php /* tag "span" from line 228 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Supplier, 'getName')); ?>
</span>
							<?php /* tag "p" from line 229 */; ?>
<p class="ui-li-aside"><?php /* tag "strong" from line 229 */; ?>
<strong><?php echo phptal_escape($ctx->path($ctx->Supplier, 'getPhone')); ?>
</strong></p>
						</a>
						<?php 
/* tag "a" from line 231 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Supplier, 'getURLDelLoad')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a data-theme="c" data-icon="delete"<?php echo $_tmp_1 ?>
></a>
					</li><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>
					
				</ul>
				<?php 
/* tag "a" from line 234 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLSettingSupplierInsLoad')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a data-ajax="false" data-role="button" data-icon="plus" data-theme="b"<?php echo $_tmp_1 ?>
>THÊM NHÀ CUNG CẤP</a>
			</div>
			<?php /* tag "div" from line 236 */; ?>
<div class="content-secondary">
				<?php /* tag "div" from line 237 */; ?>
<div data-role="collapsible" data-collapsed="false" data-theme="b" data-content-theme="d">
					<?php /* tag "h3" from line 238 */; ?>
<h3>THIẾT LẬP</h3>
					<?php /* tag "ul" from line 239 */; ?>
<ul data-role="listview" data-theme="c" data-dividertheme="d">
						<?php /* tag "li" from line 240 */; ?>
<li><?php 
/* tag "a" from line 240 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->User, 'getApp/getURLSettingInfo')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
>THÔNG TIN</a></li>
						<?php /* tag "li" from line 241 */; ?>
<li><?php 
/* tag "a" from line 241 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLSettingPond')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
>AO NUÔI</a></li>
						<?php /* tag "li" from line 242 */; ?>
<li data-theme="a"><?php 
/* tag "a" from line 242 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->User, 'getApp/getURLSettingSupplier')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
>NHÀ CUNG CẤP</a></li>
						<?php /* tag "li" from line 243 */; ?>
<li><?php 
/* tag "a" from line 243 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLSettingStore')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
>KHO HÀNG</a></li>						
						<?php /* tag "li" from line 244 */; ?>
<li><?php 
/* tag "a" from line 244 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->User, 'getApp/getURLSettingCategory')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
>DANH MỤC</a></li>
						<?php /* tag "li" from line 245 */; ?>
<li><?php 
/* tag "a" from line 245 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLSettingUnit')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
>ĐƠN VỊ TÍNH</a></li>
					</ul>
				</div>
			</div>
		</div>
		<?php /* tag "div" from line 250 */; ?>
<div data-role="footer" class="footer-docs" data-theme="c"><?php /* tag "p" from line 250 */; ?>
<p>&copy; 2012 SPN Co,ltd.</p></div>
	</div>
</body>
</html><?php 
/* end */ ;

}

?>
<?php /* 
*** DO NOT EDIT THIS FILE ***

Generated by PHPTAL from /home/a23app/public_html/anhnguyetfarm/mvc/templates/Setting.html (edit that file instead) */; ?>