<?php 
function tpl_50ad09cf_Report__nXMyrXiVt3eZAO429G_fjw(PHPTAL $tpl, PHPTAL_Context $ctx) {
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

	</head>
<?php /* tag "body" from line 7 */; ?>
<body>	
	<!-- POND -->
	<?php 
/* tag "div" from line 9 */ ;
$_tmp_1 = $ctx->repeat ;
$_tmp_1->Pond = new PHPTAL_RepeatController($ctx->Ponds)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->Pond as $ctx->Pond): ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Pond, 'getIdPrint')))):  ;
$_tmp_2 = ' id="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<div data-role="page" class="type-interior"<?php echo $_tmp_2 ?>
>
		<?php /* tag "div" from line 10 */; ?>
<div data-role="header" data-theme="d">
			<?php /* tag "div" from line 11 */; ?>
<div align="center">
				<?php 
/* tag "a" from line 12 */ ;
if (null !== ($_tmp_3 = ($ctx->path($ctx->User, 'getApp/getURLApp')))):  ;
$_tmp_3 = ' href="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<a<?php echo $_tmp_3 ?>
>
					<?php /* tag "img" from line 13 */; ?>
<img border="0" width="100%" src="/data/images/app/banner.jpg"/>
				</a>
			</div>
		</div>
		<?php /* tag "div" from line 17 */; ?>
<div data-role="content">
			<?php /* tag "div" from line 18 */; ?>
<div class="content-primary">				
				<?php 
/* tag "ul" from line 19 */ ;
$_tmp_3 = $ctx->repeat ;
$_tmp_3->Session = new PHPTAL_RepeatController($ctx->path($ctx->Pond, 'getSessions'))
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_3->Session as $ctx->Session): ;
?>
<ul data-inset="true" data-role="listview" data-theme="c" data-dividertheme="b">
					<?php /* tag "li" from line 20 */; ?>
<li data-theme="b" data-role="divider">
						Bắt đầu <?php /* tag "span" from line 21 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Session, 'getDateStartPrint')); ?>
</span> kết thúc <?php /* tag "span" from line 21 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Session, 'getDateEndPrint')); ?>
</span>
					</li>
					<?php /* tag "li" from line 23 */; ?>
<li><?php 
/* tag "a" from line 23 */ ;
if (null !== ($_tmp_4 = ($ctx->path($ctx->Session, 'getURLPrintGeneral')))):  ;
$_tmp_4 = ' href="'.phptal_escape($_tmp_4).'"' ;
else:  ;
$_tmp_4 = '' ;
endif ;
?>
<a target="blank" data-ajax="false"<?php echo $_tmp_4 ?>
>IN TỔNG HỢP</a></li>
					<?php /* tag "li" from line 24 */; ?>
<li><?php 
/* tag "a" from line 24 */ ;
if (null !== ($_tmp_4 = ($ctx->path($ctx->Session, 'getURLPrintLog')))):  ;
$_tmp_4 = ' href="'.phptal_escape($_tmp_4).'"' ;
else:  ;
$_tmp_4 = '' ;
endif ;
?>
<a target="blank" data-ajax="false"<?php echo $_tmp_4 ?>
>IN NHẬT KÝ</a></li>
					<?php /* tag "li" from line 25 */; ?>
<li><?php 
/* tag "a" from line 25 */ ;
if (null !== ($_tmp_4 = ($ctx->path($ctx->Session, 'getURLViewByWeek')))):  ;
$_tmp_4 = ' href="'.phptal_escape($_tmp_4).'"' ;
else:  ;
$_tmp_4 = '' ;
endif ;
?>
<a data-ajax="false"<?php echo $_tmp_4 ?>
>XEM THEO TUẦN</a></li>
				</ul><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

			</div>
			<?php /* tag "div" from line 28 */; ?>
<div class="content-secondary">
				<?php /* tag "div" from line 29 */; ?>
<div data-role="collapsible" data-collapsed="true" data-theme="b" data-content-theme="d">
				<?php /* tag "h3" from line 30 */; ?>
<h3>BÁO CÁO</h3>
				<?php /* tag "ul" from line 31 */; ?>
<ul data-role="listview" data-theme="c" data-dividertheme="d">
					<?php 
/* tag "li" from line 32 */ ;
$_tmp_4 = $ctx->repeat ;
$_tmp_4->Pond1 = new PHPTAL_RepeatController($ctx->Ponds1)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_4->Pond1 as $ctx->Pond1): ;
if (null !== ($_tmp_3 = ($ctx->Pond->getId()==$ctx->Pond1->getId()?'a':'c'))):  ;
$_tmp_3 = ' data-theme="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<li<?php echo $_tmp_3 ?>
>
						<?php 
/* tag "a" from line 33 */ ;
if (null !== ($_tmp_5 = ('#'.$ctx->Pond1->getIdPrint()))):  ;
$_tmp_5 = ' href="'.phptal_escape($_tmp_5).'"' ;
else:  ;
$_tmp_5 = '' ;
endif ;
?>
<a data-transition="none"<?php echo $_tmp_5 ?>
><?php echo phptal_escape($ctx->path($ctx->Pond1, 'getName')); ?>
</a>
					</li><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

				</ul>
				</div>
			</div>
		</div>
		<?php /* tag "div" from line 39 */; ?>
<div data-role="footer" class="footer-docs" data-theme="c"><?php /* tag "p" from line 39 */; ?>
<p>&copy; 2012 SPN Co,Ltd.</p></div>
	</div><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>
			
</body>
</html><?php 
/* end */ ;

}

?>
<?php /* 
*** DO NOT EDIT THIS FILE ***

Generated by PHPTAL from /home/a23app/public_html/anhnguyetfarm/mvc/templates/Report.html (edit that file instead) */; ?>