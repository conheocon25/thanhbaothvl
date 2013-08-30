<?php 
function tpl_5129fe98_PaidEmployeeList__S9hblTO_4jTKqXnoOUEP3A(PHPTAL $tpl, PHPTAL_Context $ctx) {
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
<script type="text/javascript" language="javascript" src="/mvc/templates/script/user/PaidEmployeeList.js"></script>
	</head>
<?php /* tag "body" from line 8 */; ?>
<body>
	<?php /* tag "div" from line 9 */; ?>
<div id="main" data-role="page" class="type-interior"></div>
	<?php 
/* tag "div" from line 10 */ ;
$_tmp_1 = $ctx->repeat ;
$_tmp_1->Employee = new PHPTAL_RepeatController($ctx->Employees)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->Employee as $ctx->Employee): ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Employee, 'getIdPrint')))):  ;
$_tmp_2 = ' id="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<div data-role="page" class="employee type-interior"<?php echo $_tmp_2 ?>
>
		<?php /* tag "div" from line 11 */; ?>
<div data-role="header" data-position="fixed" data-theme="f">
			<?php /* tag "h1" from line 12 */; ?>
<h1><?php echo phptal_escape('TRẢ TIỀN CHO '.$ctx->Employee->getName()); ?>
</h1>
			<?php 
/* tag "a" from line 13 */ ;
if (null !== ($_tmp_3 = ($ctx->path($ctx->User, 'getApp/getURLPaid')))):  ;
$_tmp_3 = ' href="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<a data-icon="back" data-ajax="false"<?php echo $_tmp_3 ?>
>LUI</a>
			<?php 
/* tag "a" from line 14 */ ;
if (null !== ($_tmp_3 = ($ctx->path($ctx->User, 'getApp/getURLSettingEmployee')))):  ;
$_tmp_3 = ' href="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<a data-icon="gear" data-transition="none" data-ajax="false"<?php echo $_tmp_3 ?>
>THIẾT LẬP</a>
		</div>
		<?php /* tag "div" from line 16 */; ?>
<div data-role="content">
			<?php /* tag "div" from line 17 */; ?>
<div class="content-primary">
				<?php 
/* tag "a" from line 18 */ ;
if (null !== ($_tmp_3 = ($ctx->path($ctx->Employee, 'getURLPaidInsLoad')))):  ;
$_tmp_3 = ' href="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<a data-ajax="false" data-role="button" data-icon="plus" data-theme="b"<?php echo $_tmp_3 ?>
>THÊM TRẢ TIỀN</a>
				<?php /* tag "ul" from line 19 */; ?>
<ul data-role="listview" data-inset="true">
					<?php 
/* tag "li" from line 20 */ ;
$_tmp_3 = $ctx->repeat ;
$_tmp_3->Paid = new PHPTAL_RepeatController($ctx->path($ctx->Employee, 'getPaidsTop10'))
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_3->Paid as $ctx->Paid): ;
?>
<li>
						<?php 
/* tag "a" from line 21 */ ;
if (null !== ($_tmp_4 = ($ctx->path($ctx->Paid, 'getURLUpdLoad')))):  ;
$_tmp_4 = ' href="'.phptal_escape($_tmp_4).'"' ;
else:  ;
$_tmp_4 = '' ;
endif ;
?>
<a data-ajax="false"<?php echo $_tmp_4 ?>
>
							<?php /* tag "strong" from line 22 */; ?>
<strong>
								<?php /* tag "span" from line 23 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->repeat, 'Paid/number')); ?>
</span>. <?php /* tag "span" from line 23 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Paid, 'getDatePrint')); ?>
</span>
							</strong>
							<?php /* tag "p" from line 25 */; ?>
<p class="ui-li-aside"><?php /* tag "strong" from line 25 */; ?>
<strong><?php echo phptal_escape($ctx->path($ctx->Paid, 'getValuePrint')); ?>
</strong></p>
						</a>
						<?php 
/* tag "a" from line 27 */ ;
if (null !== ($_tmp_4 = ($ctx->path($ctx->Paid, 'getURLDelLoad')))):  ;
$_tmp_4 = ' href="'.phptal_escape($_tmp_4).'"' ;
else:  ;
$_tmp_4 = '' ;
endif ;
?>
<a data-theme="c" data-icon="delete"<?php echo $_tmp_4 ?>
></a>
					</li><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

				</ul>
				<?php 
/* tag "a" from line 30 */ ;
if (null !== ($_tmp_4 = ($ctx->path($ctx->Employee, 'getURLPaidInsLoad')))):  ;
$_tmp_4 = ' href="'.phptal_escape($_tmp_4).'"' ;
else:  ;
$_tmp_4 = '' ;
endif ;
?>
<a data-ajax="false" data-role="button" data-icon="plus" data-theme="b"<?php echo $_tmp_4 ?>
>THÊM TRẢ TIỀN</a>
			</div><!--/content-primary -->
			<?php /* tag "div" from line 32 */; ?>
<div class="content-secondary">
				<?php /* tag "div" from line 33 */; ?>
<div data-role="collapsible" data-collapsed="false" data-theme="b" data-content-theme="d">
					<?php /* tag "h3" from line 34 */; ?>
<h3>NHÂN VIÊN</h3>
					<?php /* tag "ul" from line 35 */; ?>
<ul data-role="listview" data-theme="c" data-dividertheme="d">
						<?php 
/* tag "li" from line 36 */ ;
$_tmp_3 = $ctx->repeat ;
$_tmp_3->Employee1 = new PHPTAL_RepeatController($ctx->Employees1)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_3->Employee1 as $ctx->Employee1): ;
if (null !== ($_tmp_4 = ($ctx->Employee1->getId()==$ctx->Employee->getId() ? 'a' : 'c'))):  ;
$_tmp_4 = ' data-theme="'.phptal_escape($_tmp_4).'"' ;
else:  ;
$_tmp_4 = '' ;
endif ;
?>
<li<?php echo $_tmp_4 ?>
>
							<?php 
/* tag "a" from line 37 */ ;
if (null !== ($_tmp_5 = ($ctx->path($ctx->Employee1, 'getURLPaid')))):  ;
$_tmp_5 = ' href="'.phptal_escape($_tmp_5).'"' ;
else:  ;
$_tmp_5 = '' ;
endif ;
?>
<a data-transition="none"<?php echo $_tmp_5 ?>
>
								<?php /* tag "span" from line 38 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->repeat, 'Employee1/number')); ?>
</span>. <?php /* tag "span" from line 38 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Employee1, 'getName')); ?>
</span>
							</a>							
						</li><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

					</ul>
				</div>
			</div>
		</div>
		<?php /* tag "div" from line 45 */; ?>
<div data-role="footer" class="footer-docs" data-theme="c"><?php /* tag "p" from line 45 */; ?>
<p>&copy; 2012 SPN Co,ltd.</p></div>
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

Generated by PHPTAL from /home/a23app/public_html/minhtai/mvc/templates/PaidEmployeeList.html (edit that file instead) */; ?>