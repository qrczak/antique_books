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
 * @copyright  Marcin Lachowski 2010
 * @author     Marcin Lachowski <marcin@typolight.pl>
 * @package    AntiqueBooks
 * @license    GPL
 * @filesource
 */


/**
 * Class ModuleAntiqueBooks
 *
 * Front end module "Antique Books".
 * @copyright  Marcin Lachowski 2010
 * @author     Marcin Lachowski <marcin@typolight.pl>
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
				'image' => $objAntiqBook->nrInwent,
				'sygnatury' => $objAntiqBook->sygnatury,
				'oldSygnatury' => $objAntiqBook->oldSygnatury,
				'height' => $objAntiqBook->nrInwent,
				'width' => $objAntiqBook->nrInwent,
				'eksl' => $objAntiqBook->nrInwent,
				'supEksl' => $objAntiqBook->nrInwent,
				'znakiWlas' => $objAntiqBook->nrInwent,
				'drRekMarg' => $objAntiqBook->nrInwent,
				'arkMat' => $objAntiqBook->nrInwent,
				'zdobKraw' => $objAntiqBook->nrInwent,
				'oblMat' => $objAntiqBook->nrInwent,
				'oblKolor' => $objAntiqBook->nrInwent,
				'okladziny' => $objAntiqBook->nrInwent,
				'zdobOprawy' => $objAntiqBook->nrInwent,
				'zapWiazOkucia' => $objAntiqBook->nrInwent,
				'charZapWiaz' => $objAntiqBook->nrInwent,
				'cover' => $objAntiqBook->nrInwent,
				'grzbiet' => $objAntiqBook->nrInwent,
				'konstru' => $objAntiqBook->nrInwent,
				'szycie' => $objAntiqBook->nrInwent,
				'kapitalki' => $objAntiqBook->nrInwent,
				'oblUbyt' => $objAntiqBook->nrInwent,
				'oblZnisz' => $objAntiqBook->nrInwent,
				'zapWiaz' => $objAntiqBook->nrInwent,
				'zabOpr' => $objAntiqBook->nrInwent,
				'blokKompl' => $objAntiqBook->nrInwent,
				'defBloku' => $objAntiqBook->nrInwent,
				'zMechBloku' => $objAntiqBook->nrInwent,
				'oslPapier' => $objAntiqBook->nrInwent,
				'kruPapier' => $objAntiqBook->nrInwent,
				'zacZal' => $objAntiqBook->nrInwent,
				'mikroOrg' => $objAntiqBook->nrInwent,
				'foxing' => $objAntiqBook->nrInwent,
				'owady' => $objAntiqBook->nrInwent,
				'sumaNum' => $objAntiqBook->nrInwent,
				'dezynfek' => $objAntiqBook->nrInwent,
				'napKonserw' => $objAntiqBook->nrInwent,
				'uwagi' => $objAntiqBook->nrInwent,
			);
		}

		$this->Template->antique_books = $arrAntiqBook;
	}
}

?>