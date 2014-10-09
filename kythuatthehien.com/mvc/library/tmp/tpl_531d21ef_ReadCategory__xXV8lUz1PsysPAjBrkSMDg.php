<?php 
function tpl_531d21ef_ReadCategory__xXV8lUz1PsysPAjBrkSMDg(PHPTAL $tpl, PHPTAL_Context $ctx) {
$_thistpl = $tpl ;
$_translator = $tpl->getTranslator() ;
/* tag "documentElement" from line 1 */ ;
$ctx->setDocType('<!DOCTYPE html>',false) ;
?>

<?php /* tag "html" from line 2 */; ?>
<html lang="en">
	<?php /* tag "head" from line 3 */; ?>
<head>
		<?php 
/* tag "span" from line 4 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('base.xhtml/IncludeMETA', $_thistpl) ;
$ctx->popSlots() ;
?>

		<?php 
/* tag "span" from line 5 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('base.xhtml/IncludeCSS', $_thistpl) ;
$ctx->popSlots() ;
?>

		<?php 
/* tag "span" from line 6 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('base.xhtml/IncludeJS', $_thistpl) ;
$ctx->popSlots() ;
?>

	</head>

	<?php /* tag "body" from line 9 */; ?>
<body>
		<?php /* tag "div" from line 10 */; ?>
<div class="container">
			<?php 
/* tag "div" from line 11 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('base.xhtml/Header', $_thistpl) ;
$ctx->popSlots() ;
?>

			<?php /* tag "div" from line 12 */; ?>
<div class="row reset-margin main">
				<?php 
/* tag "div" from line 13 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('base.xhtml/CallendarBar', $_thistpl) ;
$ctx->popSlots() ;
?>

				<?php /* tag "div" from line 14 */; ?>
<div class="span8 fix-width">
					
					<?php /* tag "div" from line 16 */; ?>
<div class="box radius">
						<?php /* tag "div" from line 17 */; ?>
<div class="b-title">
							<?php /* tag "div" from line 18 */; ?>
<div class="b-t-icon-content"><?php echo phptal_escape($ctx->Title); ?>
</div>
						</div>
						<?php /* tag "div" from line 20 */; ?>
<div class="b-content padding-content">
							<?php 
/* tag "div" from line 21 */ ;
$_tmp_1 = $ctx->repeat ;
$_tmp_1->News = new PHPTAL_RepeatController($ctx->NewsAll)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->News as $ctx->News): ;
?>
<div class="media img-polaroid new-list-polaroid">
								<?php 
/* tag "a" from line 22 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->News, 'getURLRead')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a class="pull-left"<?php echo $_tmp_2 ?>
>
									<?php 
/* tag "img" from line 23 */ ;
if (null !== ($_tmp_3 = ($ctx->path($ctx->News, 'getImage')))):  ;
$_tmp_3 = ' src="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<img class="media-object img-rounded"<?php echo $_tmp_3 ?>
/>
								</a>
								<?php /* tag "div" from line 25 */; ?>
<div class="media-body">
									<?php /* tag "h4" from line 26 */; ?>
<h4 class="media-heading"><?php echo phptal_escape($ctx->path($ctx->News, 'getTitle')); ?>
</h4>
									<?php /* tag "p" from line 27 */; ?>
<p class="media-time">Cập nhật: <?php /* tag "i" from line 27 */; ?>
<i><?php echo phptal_escape($ctx->path($ctx->News, 'getDatePrint')); ?>
</i></p>
									<?php /* tag "p" from line 28 */; ?>
<p class="media-reduce"><?php echo phptal_tostring($ctx->path($ctx->News, 'getContentReduce')); ?>
</p>
									<?php 
/* tag "a" from line 29 */ ;
if (null !== ($_tmp_3 = ($ctx->path($ctx->News, 'getURLRead')))):  ;
$_tmp_3 = ' href="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<a class="btn btn-info"<?php echo $_tmp_3 ?>
><?php /* tag "i" from line 29 */; ?>
<i class="icon-edit icon-white"></i> Xem chi tiết</a>
								</div>
							</div><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>


							<?php /* tag "center" from line 33 */; ?>
<center>
								<?php /* tag "div" from line 34 */; ?>
<div class="pagination page-number">
									<?php /* tag "ul" from line 35 */; ?>
<ul>
										<?php 
/* tag "li" from line 36 */ ;
$_tmp_2 = $ctx->repeat ;
$_tmp_2->P = new PHPTAL_RepeatController($ctx->path($ctx->PN, 'getPages'))
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_2->P as $ctx->P): ;
?>
<li>
											<?php 
/* tag "a" from line 37 */ ;
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
								</div>
							</center>
						</div>
					</div>

				</div>
				<?php /* tag "div" from line 46 */; ?>
<div class="span4 fix-width">
					<?php 
/* tag "div" from line 47 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('base.xhtml/CallendarBox', $_thistpl) ;
$ctx->popSlots() ;
?>

					<?php 
/* tag "div" from line 48 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('base.xhtml/BuddhaBox', $_thistpl) ;
$ctx->popSlots() ;
?>

					<?php 
/* tag "div" from line 49 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('base.xhtml/PictureBox', $_thistpl) ;
$ctx->popSlots() ;
?>

					<?php 
/* tag "div" from line 50 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('base.xhtml/ContactBox', $_thistpl) ;
$ctx->popSlots() ;
?>
	
				</div>
			</div>
			<?php 
/* tag "div" from line 53 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('base.xhtml/Footer', $_thistpl) ;
$ctx->popSlots() ;
?>
			
			<?php 
/* tag "div" from line 54 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('base.xhtml/FixedFunction', $_thistpl) ;
$ctx->popSlots() ;
?>

			<?php 
/* tag "div" from line 55 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('base.xhtml/Backontop', $_thistpl) ;
$ctx->popSlots() ;
?>

			<?php /* tag "div" from line 56 */; ?>
<div id="fb-root"></div>
		</div>
	</body>
</html><?php 
/* end */ ;

}

?>
<?php /* 
*** DO NOT EDIT THIS FILE ***

Generated by PHPTAL from D:\AppWebServer\MyCodePHP\kythuatthehien.com\mvc\templates\ReadCategory.html (edit that file instead) */; ?>