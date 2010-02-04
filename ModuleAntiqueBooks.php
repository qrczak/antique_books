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
 * PHP version 5
 * @copyright  Leo Feyer 2007
 * @author     Leo Feyer <leo@typolight.org>
 * @package    CdCollection
 * @license    GPL
 * @filesource
 */


/**
 * Class ModuleCdCollection
 *
 * Front end module "CD collection".
 * @copyright  Leo Feyer 2007
 * @author     Leo Feyer <leo@typolight.org>
 * @package    Controller
 */
class ModuleAntiqueBooks extends Module
{

	/**
	 * Template file
	 * @var string
	 */
	protected $strTemplate = 'mod_antique_books';


	/**
	 * Get all records and add them to an array
	 */
	protected function compile()
	{
		$arrAntiqBook = array();
		$objAntiqBook = $this->Database->execute("SELECT * FROM tl_antique_books ORDER BY title");

		while ($objAntiqBook->next())
		{
			$arrAntiqBook[] = array
			(
				'zbior' => $objAntiqBook->zbior,
				'nrinwent' => $objAntiqBook->nrInwent,
				'comment' => $objAntiqBook->comment,
				'src' => 'image.php?src=' . $objAntiqBook->image . '&amp;width=120',
				'alt' => specialchars($objAntiqBook->title),
			);
		}

		$this->Template->antique_books = $arrAntiqBook;
	}
}

?>