<?php 
function tpl_531d21ad_ReadCategoryDetail__shCCfUeP9go7K79irkWBYg(PHPTAL $tpl, PHPTAL_Context $ctx) {
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
<div class="page-header pg-header pg-header-news reset-margin">
							<?php /* tag "h4" from line 18 */; ?>
<h4 class="reset-margin"><?php echo phptal_escape($ctx->Title); ?>
</h4>
							<?php /* tag "i" from line 19 */; ?>
<i class="pull-right">Cập nhật: <?php /* tag "span" from line 19 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->News, 'getDatePrint')); ?>
</span></i>
						</div>
						<?php /* tag "div" from line 21 */; ?>
<div class="b-content news-content padding-content">
							<?php /* tag "div" from line 22 */; ?>
<div class="news-main"><?php echo phptal_tostring($ctx->path($ctx->News, 'getContent')); ?>
</div>
							<?php /* tag "div" from line 23 */; ?>
<div class="news-author">
								<?php /* tag "div" from line 24 */; ?>
<div class="news-tools">
									<?php /* tag "a" from line 25 */; ?>
<a class="btn btn-success pull-right" href="https://www.facebook.com/sharer/sharer.php?u=http://www.ktthehien.com/tin-tuc/noi-bo" target="_blank"><?php /* tag "i" from line 25 */; ?>
<i class="icon-share icon-white"></i> Chia sẻ</a>
									<?php /* tag "a" from line 26 */; ?>
<a class="btn btn-primary pull-right" href="https://www.facebook.com/sharer/sharer.php?u=http://www.ktthehien.com/tin-tuc/noi-bo" target="_blank"><?php /* tag "i" from line 26 */; ?>
<i class="icon-thumbs-up icon-white"></i> Thích</a>
								</div>
								<?php /* tag "p" from line 28 */; ?>
<p><?php echo phptal_escape($ctx->path($ctx->News, 'getAuthor')); ?>
</p>
							</div>
							
							<?php /* tag "ul" from line 31 */; ?>
<ul class="nav nav-tabs nav-stacked reset-margin">
								<?php /* tag "li" from line 32 */; ?>
<li class="active news-list-title"><?php /* tag "a" from line 32 */; ?>
<a>Các bài khác</a></li>
								<?php 
/* tag "li" from line 33 */ ;
$_tmp_1 = $ctx->repeat ;
$_tmp_1->News = new PHPTAL_RepeatController($ctx->path($ctx->Category, 'getNewsLimit2'))
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->News as $ctx->News): ;
?>
<li class="news-list-item">
									<?php 
/* tag "a" from line 34 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->News, 'getURLRead')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
>
										<?php /* tag "span" from line 35 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->News, 'getTitle')); ?>
</span>
										<?php /* tag "span" from line 36 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->News, 'getDatePrint')); ?>
</span>
										<?php /* tag "i" from line 37 */; ?>
<i class="icon-chevron-right pull-right"></i>
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
<div class="span4 fix-width">
					<?php 
/* tag "div" from line 46 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('base.xhtml/CallendarBox', $_thistpl) ;
$ctx->popSlots() ;
?>

					<?php 
/* tag "div" from line 47 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('base.xhtml/BuddhaBox', $_thistpl) ;
$ctx->popSlots() ;
?>

					<?php 
/* tag "div" from line 48 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('base.xhtml/PictureBox', $_thistpl) ;
$ctx->popSlots() ;
?>

					<?php 
/* tag "div" from line 49 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('base.xhtml/ContactBox', $_thistpl) ;
$ctx->popSlots() ;
?>
	
				</div>
			</div>
			<?php 
/* tag "div" from line 52 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('base.xhtml/Footer', $_thistpl) ;
$ctx->popSlots() ;
?>
			
			<?php 
/* tag "div" from line 53 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('base.xhtml/FixedFunction', $_thistpl) ;
$ctx->popSlots() ;
?>

			<?php 
/* tag "div" from line 54 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('base.xhtml/Backontop', $_thistpl) ;
$ctx->popSlots() ;
?>
			
		</div>
	</body>
</html><?php 
/* end */ ;

}

?>
<?php /* 
*** DO NOT EDIT THIS FILE ***

Generated by PHPTAL from D:\AppWebServer\MyCodePHP\kythuatthehien.com\mvc\templates\ReadCategoryDetail.html (edit that file instead) */; ?>