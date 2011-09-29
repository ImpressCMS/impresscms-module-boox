<?php
/**
 * ****************************************************************************
 * boox - MODULE FOR XOOPS
 * Copyright (c) Hervé Thouzard of Instant Zero (http://www.instant-zero.com)
 *
 * You may not change or alter any portion of this comment or credits
 * of supporting developers from this source code or any supporting source code
 * which is considered copyrighted (c) material of the original comment or credit authors.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * @copyright       Hervé Thouzard of Instant Zero (http://www.instant-zero.com)
 * @license         http://www.fsf.org/copyleft/gpl.html GNU public license
 * @package         boox
 * @author 			Hervé Thouzard of Instant Zero (http://www.instant-zero.com)
 *
 * Version : $Id:
 * ****************************************************************************
 */

if (!defined('XOOPS_ROOT_PATH')) {
	die("XOOPS root path not defined");
}

$modversion['name'] = _MI_BOOX_NAME;
$modversion['version'] = 1.7;
$modversion['description'] = _MI_BOOX_DESC;
$modversion['credits'] = 'wilson';
$modversion['author'] = 'Instant Zero - http://xoops.instant-zero.com';
$modversion['help'] = '';
$modversion['license'] = 'GPL';
$modversion['official'] = 0;
$modversion['image'] = 'images/boox_logo.png';
$modversion['dirname'] = 'boox';

$modversion['sqlfile']['mysql'] = '';


// Admin things
$modversion['hasAdmin'] = 1;
$modversion['adminindex'] = 'admin/index.php';
$modversion['adminmenu'] = 'admin/menu.php';

// Templates

// Blocks

// Menu
$modversion['hasMain'] = 0;

// Search
$modversion['hasSearch'] = 0;

// Comments
$modversion['hasComments'] = 0;


/**
 * Where do you want to save your files ?
 */
$i=0;
$modversion['config'][$i]['name'] = 'foldertosave';
$modversion['config'][$i]['title'] = '_MI_BOOX_OPT0';
$modversion['config'][$i]['description'] = '_MI_BOOX_OPT0_DSC';
$modversion['config'][$i]['formtype'] = 'textbox';
$modversion['config'][$i]['valuetype'] = 'text';
$modversion['config'][$i]['default'] = XOOPS_UPLOAD_PATH;

/**
 * Which editor to use ?
 */
$i++;
$modversion['config'][$i]['name'] = 'form_options';
$modversion['config'][$i]['title'] = "_MI_BOOX_FORM_OPTIONS";
$modversion['config'][$i]['description'] = '';
$modversion['config'][$i]['formtype'] = 'select';
$modversion['config'][$i]['valuetype'] = 'text';
$modversion['config'][$i]['default'] = 'dhtml';
xoops_load('xoopseditorhandler');
$modversion['config'][$i]['options'] = array_flip(xoopsEditorHandler::getList());

/**
 * Trim file's content before to save it ?
 */
$i++;
$modversion['config'][$i]['name'] = 'trimcontent';
$modversion['config'][$i]['title'] = '_MI_BOOX_OPT1';
$modversion['config'][$i]['description'] = '_MI_BOOX_OP1_DSC';
$modversion['config'][$i]['formtype'] = 'yesno';
$modversion['config'][$i]['valuetype'] = 'int';
$modversion['config'][$i]['default'] = 0;


// Notifications
$modversion['hasNotification'] = 0;
?>