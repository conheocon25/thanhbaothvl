<?php 
function tpl_51a31232_LibraryAlbum__G64Dghus1l4cJlImxdUlfg(PHPTAL $tpl, PHPTAL_Context $ctx) {
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
<span><?php echo phptal_escape($ctx->path($ctx->Album, 'getName')); ?>
</span>
						</div>
						
						<?php /* tag "div" from line 22 */; ?>
<div align="center" style="padding-top:5px;">
							<?php 
/* tag "embed" from line 30 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Album, 'getURL')))):  ;
$_tmp_1 = ' flashvars="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<embed type="application/x-shockwave-flash" src="https://picasaweb.google.com/s/c/bin/slideshow.swf" width="610px" height="400px" pluginspage="http://www.macromedia.com/go/getflashplayer" wmode="Opaque"<?php echo $_tmp_1 ?>
>
							</embed>
						</div>
						
						<?php /* tag "div" from line 34 */; ?>
<div class="news-box-sub-title">Hình ảnh khác</div>

						<?php /* tag "ul" from line 36 */; ?>
<ul class="news-box-list">
							<?php 
/* tag "li" from line 37 */ ;
$_tmp_1 = $ctx->repeat ;
$_tmp_1->Album = new PHPTAL_RepeatController($ctx->Albums)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->Album as $ctx->Album): ;
?>
<li>
								<?php 
/* tag "a" from line 38 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Album, 'getURLView')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
>
									<?php /* tag "span" from line 39 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Album, 'getName')); ?>
</span>
								</a> (<?php /* tag "span" from line 40 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Album, 'getTimePrint')); ?>
</span>)
							</li><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

						</ul>
						
						<?php /* tag "div" from line 44 */; ?>
<div class="clear"></div>

					</div>
				</div>				
				<?php /* tag "div" from line 48 */; ?>
<div id="sidebar">										
					<?php 
/* tag "div" from line 49 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('macros.xhtml/EventBox', $_thistpl) ;
$ctx->popSlots() ;
?>

					<?php 
/* tag "div" from line 50 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('macros.xhtml/TopPictureBox', $_thistpl) ;
$ctx->popSlots() ;
?>

					<?php 
/* tag "div" from line 51 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('macros.xhtml/NorthBox', $_thistpl) ;
$ctx->popSlots() ;
?>

					<?php 
/* tag "div" from line 52 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('macros.xhtml/SouthBox', $_thistpl) ;
$ctx->popSlots() ;
?>

					<?php 
/* tag "div" from line 53 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('macros.xhtml/BoxRight', $_thistpl) ;
$ctx->popSlots() ;
?>

					<?php 
/* tag "div" from line 54 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('macros.xhtml/TopVideoBox', $_thistpl) ;
$ctx->popSlots() ;
?>
					
					<?php 
/* tag "div" from line 55 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('macros.xhtml/AskBox', $_thistpl) ;
$ctx->popSlots() ;
?>

					<?php 
/* tag "div" from line 56 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('macros.xhtml/CountBox', $_thistpl) ;
$ctx->popSlots() ;
?>
					
					<?php 
/* tag "div" from line 57 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('macros.xhtml/SponsorBox', $_thistpl) ;
$ctx->popSlots() ;
?>

					<?php 
/* tag "div" from line 58 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('macros.xhtml/CallendarBox', $_thistpl) ;
$ctx->popSlots() ;
?>

					
				</div>
				<?php /* tag "div" from line 61 */; ?>
<div class="clear"></div>
			</div>
			<?php 
/* tag "div" from line 63 */ ;
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

Generated by PHPTAL from E:\AppWebServer\chuakhaituong.123app.net\mvc\templates\LibraryAlbum.html (edit that file instead) */; ?>