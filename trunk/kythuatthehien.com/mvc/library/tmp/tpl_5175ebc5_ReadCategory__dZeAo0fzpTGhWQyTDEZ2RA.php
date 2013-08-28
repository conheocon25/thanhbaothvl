<?php 
function tpl_5175ebc5_ReadCategory__dZeAo0fzpTGhWQyTDEZ2RA(PHPTAL $tpl, PHPTAL_Context $ctx) {
$_thistpl = $tpl ;
$_translator = $tpl->getTranslator() ;
/* tag "documentElement" from line 1 */ ;
$ctx->setDocType('<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">',false) ;
?>

<?php /* tag "html" from line 2 */; ?>
<html xmlns="http://www.w3.org/1999/xhtml">
	<?php /* tag "head" from line 3 */; ?>
<head>
		<?php 
/* tag "span" from line 4 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('macros.xhtml/IncludeCSS', $_thistpl) ;
$ctx->popSlots() ;
?>

		<?php 
/* tag "span" from line 5 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('macros.xhtml/IncludeJS', $_thistpl) ;
$ctx->popSlots() ;
?>

	</head>	
	<?php /* tag "body" from line 7 */; ?>
<body>
		<?php /* tag "div" from line 8 */; ?>
<div id="wrapper">
		
			<?php 
/* tag "div" from line 10 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('macros.xhtml/Header', $_thistpl) ;
$ctx->popSlots() ;
?>
	

			<?php /* tag "div" from line 12 */; ?>
<div id="main">				
				<?php 
/* tag "div" from line 13 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('macros.xhtml/DateTimeBox', $_thistpl) ;
$ctx->popSlots() ;
?>

				<?php /* tag "div" from line 14 */; ?>
<div id="content">
				
					<?php /* tag "div" from line 16 */; ?>
<div class="news-box">
						<?php /* tag "div" from line 17 */; ?>
<div class="box-title">
							<?php /* tag "img" from line 18 */; ?>
<img src="/data/images/icon.png" width="30"/>
							<?php /* tag "span" from line 19 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->News, 'getTitle')); ?>
</span>
						</div>
						
						<?php /* tag "div" from line 22 */; ?>
<div style="padding:10px;">
							<?php /* tag "i" from line 23 */; ?>
<i>Tin tức được cập nhật vào: <?php /* tag "span" from line 23 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->News, 'getDatePrint')); ?>
</span></i><?php /* tag "br" from line 23 */; ?>
<br/><?php /* tag "br" from line 23 */; ?>
<br/>
							<?php /* tag "div" from line 24 */; ?>
<div><?php echo phptal_tostring($ctx->path($ctx->News, 'getContent')); ?>
</div>
							<?php /* tag "i" from line 25 */; ?>
<i><?php /* tag "h4" from line 25 */; ?>
<h4 align="right"><?php echo phptal_escape($ctx->path($ctx->News, 'getAuthor')); ?>
</h4></i>
						</div>
						
						<?php /* tag "div" from line 28 */; ?>
<div class="news-box-sub-title">Các tin khác</div>
						<?php /* tag "ul" from line 29 */; ?>
<ul class="news-box-list">
							<?php 
/* tag "li" from line 30 */ ;
$_tmp_1 = $ctx->repeat ;
$_tmp_1->News = new PHPTAL_RepeatController($ctx->path($ctx->Category, 'getNews'))
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->News as $ctx->News): ;
?>
<li>
								<?php 
/* tag "a" from line 31 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->News, 'getURLRead')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
>
									<?php /* tag "span" from line 32 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->News, 'getTitle')); ?>
</span>
								</a>
								<?php /* tag "span" from line 34 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->News, 'getDatePrint')); ?>
</span>
							</li><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

						</ul>
						<?php /* tag "br" from line 37 */; ?>
<br/>
						<?php /* tag "div" from line 38 */; ?>
<div class="clear"></div>

					</div>
				</div>				
				<?php /* tag "div" from line 42 */; ?>
<div id="sidebar">										
					<?php 
/* tag "div" from line 43 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('macros.xhtml/EventBox', $_thistpl) ;
$ctx->popSlots() ;
?>

					<?php 
/* tag "div" from line 44 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('macros.xhtml/CourseBox', $_thistpl) ;
$ctx->popSlots() ;
?>

					<?php 
/* tag "div" from line 45 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('macros.xhtml/BoxRight', $_thistpl) ;
$ctx->popSlots() ;
?>

					<?php 
/* tag "div" from line 46 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('macros.xhtml/VideoBox', $_thistpl) ;
$ctx->popSlots() ;
?>

					<?php 
/* tag "div" from line 47 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('macros.xhtml/AskBox', $_thistpl) ;
$ctx->popSlots() ;
?>

					<?php 
/* tag "div" from line 48 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('macros.xhtml/CountBox', $_thistpl) ;
$ctx->popSlots() ;
?>
					
					<?php 
/* tag "div" from line 49 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('macros.xhtml/SponsorBox', $_thistpl) ;
$ctx->popSlots() ;
?>

					<?php 
/* tag "div" from line 50 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('macros.xhtml/CallendarBox', $_thistpl) ;
$ctx->popSlots() ;
?>

					
				</div>				
				<?php /* tag "div" from line 53 */; ?>
<div class="clear"></div>
			</div>
			<?php 
/* tag "div" from line 55 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('macros.xhtml/Footer', $_thistpl) ;
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

Generated by PHPTAL from E:\AppWebServer\chuakhaituong.123app.net\mvc\templates\ReadCategory.html (edit that file instead) */; ?>