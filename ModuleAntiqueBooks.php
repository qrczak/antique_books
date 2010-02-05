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
				'sygnatury' => $objAntiqBook->sygnatury,
				'oldSygnatury' => $objAntiqBook->oldSygnatury,
				'height' => $objAntiqBook->height,
				'width' => $objAntiqBook->width,
				'eksl' => $objAntiqBook->eksl,
				'supEksl' => $objAntiqBook->supEksl,
				'znakiWlas' => $objAntiqBook->znakiWlas,
				'drRekMarg' => $objAntiqBook->drRekMarg,
				'arkMat' => $objAntiqBook->arkMat,
				'zdobKraw' => $objAntiqBook->zdobKraw,
				'oblMat' => $objAntiqBook->oblMat,
				'oblKolor' => $objAntiqBook->oblKolor,
				'okladziny' => $objAntiqBook->okladziny,
				'zdobOprawy' => $objAntiqBook->zdobOprawy,
				'zapWiazOkucia' => $objAntiqBook->zapWiazOkucia,
				'charZapWiaz' => $objAntiqBook->charZapWiaz,
				'cover' => $objAntiqBook->cover,
				'grzbiet' => $objAntiqBook->grzbiet,
				'konstru' => $objAntiqBook->konstru,
				'szycie' => $objAntiqBook->szycie,
				'kapitalki' => $objAntiqBook->kapitalki,
				'oblUbyt' => $objAntiqBook->oblUbyt,
				'oblZnisz' => $objAntiqBook->oblZnisz,
				'zapWiaz' => $objAntiqBook->zapWiaz,
				'zabOpr' => $objAntiqBook->zabOpr,
				'blokKompl' => $objAntiqBook->blokKompl,
				'defBloku' => $objAntiqBook->defBloku,
				'zMechBloku' => $objAntiqBook->zMechBloku,
				'oslPapier' => $objAntiqBook->oslPapier,
				'kruPapier' => $objAntiqBook->kruPapier,
				'kruPapier' => $objAntiqBook->kruPapier,
				'mikroOrg' => $objAntiqBook->mikroOrg,
				'foxing' => $objAntiqBook->foxing,
				'owady' => $objAntiqBook->owady,
				'sumaNum' => $objAntiqBook->sumaNum,
				'dezynfek' => $objAntiqBook->dezynfek,
				'napKonserw' => $objAntiqBook->napKonserw,
				'uwagi' => $objAntiqBook->uwagi,
			);
		}

		$this->Template->antique_books = $arrAntiqBook;
	}
}

?>