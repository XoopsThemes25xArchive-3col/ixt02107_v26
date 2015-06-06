<?php
/*
* Qualitative Themes for XOOPS
*
* @license       http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU General Public License (GPL)
* @project       IXThemes Project, http://ixthemes.org
* @theme_name    ixt02107
* @theme_demo    http://ixthemes.sourceforge.net/demo/x/index.php?xoops_theme_select=ixt02107
* @theme_author  Alexander Galochkin (algalochkin at users.sourceforge.net)
* @version       $Id: footer_custom_block03.php 2654 2010-03-28 13:48:03Z algalochkin $
*
* Thanks you, that you have left this header untouched!!!
*/
$block = array(
	'id'        => '1003',
	'title'     => 'Free Themes',
	'content'   => '
<div align="center">
<span class="ixt-button-wrapper">
<span class="l"></span><span class="r"></span>
<input type="submit" value="DOWNLOAD" class="ixt-button" onclick="location=\'http://ixthemes.com/modules/TDMDownloads/viewcat.php?cid=1\'" />
</span>
</div>
	',
);
$this->assign('fblock', $block);
?>
