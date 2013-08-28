<?php 
function tpl_51a31232_Ask__nBRvdBb9lMkQVcfFkdvxFA(PHPTAL $tpl, PHPTAL_Context $ctx) {
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
					<?php 
/* tag "div" from line 15 */ ;
if ($ctx->Ask):  ;
?>
<div class="news-box">
						<?php /* tag "div" from line 16 */; ?>
<div class="box-title">
							<?php /* tag "img" from line 17 */; ?>
<img src="/data/images/icon.png" width="30"/>
							<?php /* tag "span" from line 18 */; ?>
<span><?php echo phptal_escape($ctx->Title); ?>
</span>
							<?php 
/* tag "a" from line 19 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Category, 'getURLAskInsLoad1')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
>Gửi câu hỏi</a>
						</div>
						<?php /* tag "div" from line 21 */; ?>
<div style="padding:10px;">
							
							<?php /* tag "div" from line 23 */; ?>
<div align="justify" class="ask">
								<?php /* tag "b" from line 24 */; ?>
<b><?php /* tag "span" from line 24 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Ask, 'getAuthor1')); ?>
</span>:</b>
								<?php /* tag "div" from line 25 */; ?>
<div><?php echo phptal_escape($ctx->path($ctx->Ask, 'getQuestion')); ?>
</div>
								(<?php /* tag "I" from line 26 */; ?>
<I><?php echo phptal_escape($ctx->path($ctx->Ask, 'getTimePrint')); ?>
</I>)
							</div>
							
							<?php /* tag "div" from line 29 */; ?>
<div align="justify" class="ask">
								<?php /* tag "b" from line 30 */; ?>
<b><?php /* tag "span" from line 30 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Ask, 'getAuthor2')); ?>
</span>:</b>
								<?php /* tag "div" from line 31 */; ?>
<div><?php echo phptal_tostring($ctx->path($ctx->Ask, 'getAnswer')); ?>
</div>
							</div>
							<?php /* tag "br" from line 33 */; ?>
<br/>
							<?php /* tag "div" from line 34 */; ?>
<div class="news-box-sub-title">Cùng chủ đề</div>
							<?php /* tag "ul" from line 35 */; ?>
<ul class="news-box-list">
								<?php 
/* tag "li" from line 36 */ ;
$_tmp_1 = $ctx->repeat ;
$_tmp_1->Ask = new PHPTAL_RepeatController($ctx->Asks)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->Ask as $ctx->Ask): ;
?>
<li>								
									<?php 
/* tag "a" from line 37 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Ask, 'getURLRead')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
>
										<?php /* tag "b" from line 38 */; ?>
<b>Hỏi:</b>
										<?php /* tag "span" from line 39 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Ask, 'getQuestionReduce')); ?>
</span>
									</a>
									<?php /* tag "span" from line 41 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Ask, 'getTimePrint')); ?>
</span>
								</li><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

							</ul>
							<?php /* tag "div" from line 44 */; ?>
<div class="clear"></div>
						</div>
					</div><?php endif; ?>

				</div>
				
				<?php /* tag "div" from line 49 */; ?>
<div id="sidebar">										
					<?php 
/* tag "div" from line 50 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('macros.xhtml/EventBox', $_thistpl) ;
$ctx->popSlots() ;
?>

					<?php 
/* tag "div" from line 51 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('macros.xhtml/TopPictureBox', $_thistpl) ;
$ctx->popSlots() ;
?>

					<?php 
/* tag "div" from line 52 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('macros.xhtml/NorthBox', $_thistpl) ;
$ctx->popSlots() ;
?>

					<?php 
/* tag "div" from line 53 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('macros.xhtml/SouthBox', $_thistpl) ;
$ctx->popSlots() ;
?>

					<?php 
/* tag "div" from line 54 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('macros.xhtml/BoxRight', $_thistpl) ;
$ctx->popSlots() ;
?>

					<?php 
/* tag "div" from line 55 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('macros.xhtml/TopVideoBox', $_thistpl) ;
$ctx->popSlots() ;
?>
					
					<?php 
/* tag "div" from line 56 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('macros.xhtml/AskBox', $_thistpl) ;
$ctx->popSlots() ;
?>

					<?php 
/* tag "div" from line 57 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('macros.xhtml/CountBox', $_thistpl) ;
$ctx->popSlots() ;
?>
					
					<?php 
/* tag "div" from line 58 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('macros.xhtml/SponsorBox', $_thistpl) ;
$ctx->popSlots() ;
?>

					<?php 
/* tag "div" from line 59 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('macros.xhtml/CallendarBox', $_thistpl) ;
$ctx->popSlots() ;
?>

					
				</div>				
				<?php /* tag "div" from line 62 */; ?>
<div class="clear"></div>
			</div>
			<?php 
/* tag "div" from line 64 */ ;
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

Generated by PHPTAL from E:\AppWebServer\chuakhaituong.123app.net\mvc\templates\Ask.html (edit that file instead) */; ?>