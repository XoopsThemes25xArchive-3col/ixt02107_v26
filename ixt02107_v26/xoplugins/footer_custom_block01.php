<?php
/*
* Qualitative Themes for XOOPS
*
* @license       http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU General Public License (GPL)
* @project       IXThemes Project, http://ixthemes.org
* @theme_name    ixt02107
* @theme_demo    http://ixthemes.sourceforge.net/demo/x/index.php?xoops_theme_select=ixt02107
* @theme_author  Alexander Galochkin (algalochkin at users.sourceforge.net)
* @version       $Id: footer_custom_block01.php 2654 2010-03-28 13:48:03Z algalochkin $
*
* Thanks you, that you have left this header untouched!!!
*/
$block = array(
	'id'        => '1001',
	'title'     => 'You like it?',
	'content'   => '
	<div align="center">
	<p>If you like these themes you can support IXThemes Project</p>
	<p>&nbsp;</p>
	<form action="https://www.paypal.com/cgi-bin/webscr" method="post" id="donate">
	<div align="center" class="paypal-donations">
	<input type="hidden" name="cmd" value="_donations" />
	<input type="hidden" name="business" value="support@ixthemes.org" />
	<input type="hidden" name="item_name" value="Support IXThemes Project" />
	<input type="image" src="https://www.paypal.com/en_US/i/btn/btn_donateCC_LG.gif" name="submit" alt="PayPal - The safer, easier way to pay online." />
	<img width="1" height="1" src="https://www.paypal.com/en_US/i/scr/pixel.gif" />
	</div>
	</form>
	<p>&nbsp;</p>
	<p>We will create many FREE fine themes for YOUR SITE!</p>
	<p>&nbsp;</p>
	<p style="filter: alpha(opacity=40); -moz-opacity:0.4; opacity:0.4;">(cookies should be enabled)</p>
	</div>
	',
);
$this->assign('fblock', $block);
?>
