<?php if (!defined('TL_ROOT')) die('You can not access this file directly!');

/**
 * TYPOlight webCMS
 *
 * The TYPOlight webCMS is an accessible web content management system that 
 * specializes in accessibility and generates W3C-compliant HTML code. It 
 * provides a wide range of functionality to develop professional websites 
 * including a built-in search engine, form generator, file and user manager, 
 * CSS engine, multi-language support and many more. For more information and 
 * additional TYPOlight applications like the TYPOlight MVC Framework please 
 * visit the project website http://www.typolight.org.
 *
 * This is the CD collection configuration file.
 *
 * PHP version 5
 * @copyright  Leo Feyer 2007
 * @author     Leo Feyer <leo@typolight.org>
 * @package    CdCollection
 * @license    GPL
 * @filesource
 */


/**
 * -------------------------------------------------------------------------
 * BACK END MODULES
 * -------------------------------------------------------------------------
 *
 * Insert the module into the back end modules array using array_insert().

$GLOBALS['BE_MOD']['content']['antique_books'] = array
(
	'tables' => array('tl_antique_books'),
	'icon'   => 'system/modules/antique_books/html/book_open.png'
);
 */

array_insert($GLOBALS['BE_MOD'], 0, array(
            'biblio' => array
						(
							'tables' => array('tl_antique_books'),
							'icon'   => 'system/modules/antique_books/html/book_open.png'
						)
					)
			);


/**
 * -------------------------------------------------------------------------
 * FRONT END MODULES
 * -------------------------------------------------------------------------
 *
 * List all fontend modules and their class names.
 */
array_insert($GLOBALS['FE_MOD']['miscellaneous'], 0, array
(
	'antique_books' => 'ModuleAntiqueBooks')
);

?>