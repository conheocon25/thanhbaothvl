<?php 
function tpl_51877906_Sponsor__tYySlLseCjoiFROh1KKnJg(PHPTAL $tpl, PHPTAL_Context $ctx) {
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
					<?php /* tag "div" from line 15 */; ?>
<div class="history-box">
						<?php /* tag "div" from line 16 */; ?>
<div class="history-top">
							<?php /* tag "br" from line 17 */; ?>
<br/>
							<?php /* tag "h1" from line 18 */; ?>
<h1 align="center">Trợ duyên</h1>
						</div>
						<?php /* tag "div" from line 20 */; ?>
<div class="history-mid" style="font-size:11pt;">
							<?php /* tag "h2" from line 21 */; ?>
<h2>DANH SÁCH CÁC NHÀ TRỢ DUYÊN</h2>
							<?php /* tag "table" from line 22 */; ?>
<table border="0" width="100%" cellpadding="0" cellspacing="1" class="manager-table">
								<?php /* tag "thead" from line 23 */; ?>
<thead>
									<?php /* tag "th" from line 24 */; ?>
<th align="center" width="5%">STT</th>
									<?php /* tag "th" from line 25 */; ?>
<th align="center" width="35%">Họ Tên</th>
									<?php /* tag "th" from line 26 */; ?>
<th align="center" width="35%">Địa chỉ</th>									
									<?php /* tag "th" from line 27 */; ?>
<th align="center" width="25%">Giá trị</th>									
								</thead>
								<?php /* tag "tbody" from line 29 */; ?>
<tbody>
									<?php 
/* tag "tr" from line 30 */ ;
$_tmp_1 = $ctx->repeat ;
$_tmp_1->SP = new PHPTAL_RepeatController($ctx->SponsorPerson)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->SP as $ctx->SP): ;
?>
<tr>
										<?php /* tag "td" from line 31 */; ?>
<td><?php echo phptal_escape($ctx->path($ctx->repeat, 'SP/index')); ?>
</td>
										<?php /* tag "td" from line 32 */; ?>
<td align="left"><?php echo phptal_escape($ctx->path($ctx->SP, 'getName')); ?>
</td>
										<?php /* tag "td" from line 33 */; ?>
<td align="left"><?php echo phptal_escape($ctx->path($ctx->SP, 'getAddress')); ?>
</td>										
										<?php /* tag "td" from line 34 */; ?>
<td align="right"><?php /* tag "b" from line 34 */; ?>
<b><?php echo phptal_escape($ctx->path($ctx->SP, 'getValue')); ?>
</b></td>									
									</tr><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

								</tbody>
							</table>
						</div>
						<?php /* tag "div" from line 39 */; ?>
<div class="history-bot"></div>
						<?php /* tag "br" from line 40 */; ?>
<br/>
					</div>
				</div>
				<?php /* tag "div" from line 43 */; ?>
<div id="sidebar">
					<?php 
/* tag "div" from line 44 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('macros.xhtml/EventBox', $_thistpl) ;
$ctx->popSlots() ;
?>

					<?php 
/* tag "div" from line 45 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('macros.xhtml/CourseBox', $_thistpl) ;
$ctx->popSlots() ;
?>

					<?php 
/* tag "div" from line 46 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('macros.xhtml/BoxRight', $_thistpl) ;
$ctx->popSlots() ;
?>

					<?php 
/* tag "div" from line 47 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('macros.xhtml/VideoBox', $_thistpl) ;
$ctx->popSlots() ;
?>

					<?php 
/* tag "div" from line 48 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('macros.xhtml/AskBox', $_thistpl) ;
$ctx->popSlots() ;
?>

					<?php 
/* tag "div" from line 49 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('macros.xhtml/CountBox', $_thistpl) ;
$ctx->popSlots() ;
?>
					
					<?php 
/* tag "div" from line 50 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('macros.xhtml/SponsorBox', $_thistpl) ;
$ctx->popSlots() ;
?>

					<?php 
/* tag "div" from line 51 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('macros.xhtml/CallendarBox', $_thistpl) ;
$ctx->popSlots() ;
?>

					
				</div>				
				<?php /* tag "div" from line 54 */; ?>
<div class="clear"></div>
			</div>
			<?php 
/* tag "div" from line 56 */ ;
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

Generated by PHPTAL from E:\AppWebServer\chuakhaituong.123app.net\mvc\templates\Sponsor.html (edit that file instead) */; ?>