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
 * This is the data container array for table tl_cds.
 *
 * PHP version 5
 * @copyright  Marcin Lachowski 2010
 * @author     Marcin Lachowski <marcin@typolight.pl>
 * @package    AntiqueBooks
 * @license    GPL
 * @filesource
 */
class tl_antique_books
{
	public function countofsygnatury()
	{
		$a=array('sygnatury');
		$arrImageSize = false;
		if ($res) {
			$arrImageSize = array($res[0], $res[1], 13);
		}
		return $arrImageSize;
	}
}

/**
 * Table tl_antique_books
 */
$GLOBALS['TL_DCA']['tl_antique_books'] = array
(

	// Config
	'config' => array
	(
		'dataContainer'               => 'Table',
		'enableVersioning'            => true
	),

	// List
	'list' => array
	(
		'sorting' => array
		(
			'mode'                    => 1,
			'fields'                  => array('nrInwent'),
			'flag'                    => 1,
			'panelLayout'             => 'filter;search,limit'
		),
		'label' => array
		(
			'fields'                  => array('zbior', 'sygnatury'),
			'format'                  => '%s <span style="color:#b3b3b3; padding-left:3px;">[%s]</span>'
		),
		'global_operations' => array
		(
			'all' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['MSC']['all'],
				'href'                => 'act=select',
				'class'               => 'header_edit_all',
				'attributes'          => 'onclick="Backend.getScrollOffset();"'
			)
		),
		'operations' => array
		(
			'edit' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_antique_books']['edit'],
				'href'                => 'act=edit',
				'icon'                => 'edit.gif'
			),
			'copy' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_antique_books']['copy'],
				'href'                => 'act=copy',
				'icon'                => 'copy.gif'
			),
			'delete' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_antique_books']['delete'],
				'href'                => 'act=delete',
				'icon'                => 'delete.gif',
				'attributes'          => 'onclick="if (!confirm(\'' . $GLOBALS['TL_LANG']['MSC']['deleteConfirm'] . '\')) return false; Backend.getScrollOffset();"'
			),
			'show' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_antique_books']['show'],
				'href'                => 'act=show',
				'icon'                => 'show.gif'
			)
		)
	),

	// Palettes
	'palettes' => array
	(
		'default'                     => '{zbiorLeg_legend},zbior,nrInwent;{imgInwent_legend},image;{sygOpis_legend},sygnatury;{wolumin_legend},oldSygnatury,height,width,eksl,supEksl,pieczatki,znakiWlas,zewOznacz,drRekMarg,arkMat,zdobKraw,oblMat,oblKolor,okladziny,zdobOprawy,zapWiazOkucia,charZapWiaz,galIdent;{stZachow_legend},cover,grzbiet,konstru,szycie,kapitalki,oblUbyt,oblZnisz,zapWiaz,zabOpr,blokKompl,defBloku,zMechBloku,zabBlokuWykl,oslPapier,kruPapier,zacZal,mikroOrg,foxing,owady,sumaNum,galZach;{uwKonc_legend},dezynfek,napKonserw,uwagi,galUwagi,paczkaDownl',
	),

	// Fields
	'fields' => array
	(
		'zbior' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_antique_books']['zbior'],
			'inputType'               => 'text',
			'search'                  => true,
			'eval'                    => array('mandatory'=>true, 'maxlength'=>64, 'tl_class'=>'w50')
		),
		'nrInwent' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_antique_books']['nrInwent'],
			'default'                 => 3,
			'exclude'                 => true,
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>true, 'rgxp'=>'digit', 'tl_class'=>'w50')
		),
		// 'image' => array
		// (
			// 'label'                   => &$GLOBALS['TL_LANG']['tl_antique_books']['image'],
			// 'inputType'               => 'fileTree',
			// 'eval'                    => array('files'=>true, 'fieldType'=>'radio')
		// ), have to see how it works in other modules
		'sygnatury' => array
		(
		'label'                   => &$GLOBALS['TL_LANG']['tl_antique_books']['sygnatury'],
		'inputType' => 'multitextWizard',
		'eval'      => array
		  (
			'mandatory' => false, 
			'doNotSaveEmpty'=>true, 
			'style'=>'width:700px;', 
			'columns' => 7, 
			'labels' => array
			  (
				&$GLOBALS['TL_LANG']['tl_antique_books']['sygAuthor'], 
				&$GLOBALS['TL_LANG']['tl_antique_books']['sygTitle'], 
				&$GLOBALS['TL_LANG']['tl_antique_books']['sygDatePub'], 
				&$GLOBALS['TL_LANG']['tl_antique_books']['sygPlacePub'], 
				&$GLOBALS['TL_LANG']['tl_antique_books']['sygPublisher'], 
				&$GLOBALS['TL_LANG']['tl_antique_books']['sygSubject'], 
				&$GLOBALS['TL_LANG']['tl_antique_books']['sygIll']
			  )
		   )
		),
		'oldSygnatury' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_antique_books']['oldSygnatury'],
			'inputType'               => 'text',
			'search'                  => true,
			'eval'                    => array('maxlength'=>64, 'tl_class'=>'w50')
		),
		'height' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_antique_books']['height'],
			'inputType'               => 'text',
			'search'                  => true,
			'eval'                    => array('maxlength'=>64, 'tl_class'=>'w50')
		),
		'width' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_antique_books']['width'],
			'inputType'               => 'text',
			'search'                  => true,
			'eval'                    => array('maxlength'=>64, 'tl_class'=>'w50')
		),
		'eksl' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_antique_books']['eksl'],
			'inputType'               => 'text',
			'search'                  => true,
			'eval'                    => array('maxlength'=>64, 'tl_class'=>'w50')
		),
		'supEksl' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_antique_books']['supEksl'],
			'inputType'               => 'text',
			'search'                  => true,
			'eval'                    => array('maxlength'=>64, 'tl_class'=>'w50')
		),
		'pieczatki' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_antique_books']['pieczatki'],
			'inputType'               => 'text',
			'search'                  => true,
			'eval'                    => array('maxlength'=>64, 'tl_class'=>'w50')
		),
		'znakiWlas' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_antique_books']['znakiWlas'],
			'exclude'                 => true,
			'search'                  => true,
			'inputType'               => 'textarea',
			'eval'                    => array('style'=>'height:60px;', 'allowHtml'=>true, 'tl_class'=>'clr')
		),
		'zewOznacz' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_antique_books']['zewOznacz'],
			'exclude'                 => true,
			'filter'                  => true,
			'inputType'               => 'select',
			'options'                 => array('B', 'G', 'R', 'N', 'I'),
			'reference'				  => &$GLOBALS['TL_LANG']['tl_antique_books']['listZewOznacz'],
			'eval'                    => array('tl_class'=>'w50')
		),
		'drRekMarg' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_antique_books']['drRekMarg'],
			'exclude'                 => true,
			'filter'                  => true,
			'inputType'               => 'select',
			'options'                 => array('D', 'R', 'M'),
			'reference'				  => &$GLOBALS['TL_LANG']['tl_antique_books']['listdrRekMarg'],
			'eval'                    => array('tl_class'=>'w50')
		),
		'arkMat' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_antique_books']['arkMat'],
			'exclude'                 => true,
			'filter'                  => true,
			'inputType'               => 'select',
			'options'                 => array('P', 'PG'),
			'reference'				  => &$GLOBALS['TL_LANG']['tl_antique_books']['listArkMat'],
			'eval'                    => array('tl_class'=>'w50')
		),
		'zdobKraw' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_antique_books']['zdobKraw'],
			'exclude'                 => true,
			'filter'                  => true,
			'inputType'               => 'select',
			'options'                 => array('B', 'M', 'C', 'Z', 'BC', 'ZC'),
			'reference'				  => &$GLOBALS['TL_LANG']['tl_antique_books']['listZdobKraw'],
			'eval'                    => array('tl_class'=>'w50')
		),
		'oblMat' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_antique_books']['oblMat'],
			'exclude'                 => true,
			'filter'                  => true,
			'inputType'               => 'select',
			'options'                 => array('S', 'PG', 'PŁ', 'P', 'S+P', 'PG+P', 'PŁ+P', 'B', 'NZ'),
			'reference'				  => &$GLOBALS['TL_LANG']['tl_antique_books']['listOblMat'],
			'eval'                    => array('tl_class'=>'w50')
		),
		'oblKolor' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_antique_books']['oblKolor'],
			'inputType'               => 'text',
			'search'                  => true,
			'eval'                    => array('maxlength'=>64, 'tl_class'=>'w50')
		),
		'okladziny' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_antique_books']['okladziny'],
			'exclude'                 => true,
			'filter'                  => true,
			'inputType'               => 'select',
			'options'                 => array('DS', 'TK', 'B', 'NZ'),
			'reference'				  => &$GLOBALS['TL_LANG']['tl_antique_books']['listOkladziny'],
			'eval'                    => array('tl_class'=>'w50')
		),
		'zdobOprawy' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_antique_books']['zdobOprawy'],
			'exclude'                 => true,
			'filter'                  => true,
			'inputType'               => 'select',
			'options'                 => array('B', 'T', 'TZ', 'TB', 'R', 'M'),
			'reference'				  => &$GLOBALS['TL_LANG']['tl_antique_books']['listZdobOprawy'],
			'eval'                    => array('tl_class'=>'w50')
		),
		'zapWiazOkucia' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_antique_books']['zapWiazOkucia'],
			'exclude'                 => true,
			'filter'                  => true,
			'inputType'               => 'select',
			'options'                 => array('Z', 'W', 'O', 'Ł'),
			'reference'				  => &$GLOBALS['TL_LANG']['tl_antique_books']['listZapWiazOkucia'],
			'eval'                    => array('tl_class'=>'w50')
		),
		'charZapWiaz' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_antique_books']['charZapWiaz'],
			'inputType'               => 'text',
			'search'                  => true,
			'eval'                    => array('maxlength'=>64, 'tl_class'=>'w50')
		),
		'galIdent' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_content']['galIdent'],
			'exclude'                 => true,
			'inputType'               => 'fileTree',
			'eval'                    => array('fieldType'=>'checkbox', 'files'=>true, 'extensions'=>'jpg,jpeg,gif,png', 'tl_class'=>'clr')
		),
		'cover' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_antique_books']['cover'],
			'exclude'                 => true,
			'filter'                  => true,
			'inputType'               => 'select',
			'options'                 => array('0', '1', '2', '3'),
			'reference'				  => &$GLOBALS['TL_LANG']['tl_antique_books']['listCover'],
			'eval'                    => array('tl_class'=>'w50')
		),
		'grzbiet' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_antique_books']['grzbiet'],
			'exclude'                 => true,
			'filter'                  => true,
			'inputType'               => 'select',
			'options'                 => array('1', '2', '3'),
			'reference'				  => &$GLOBALS['TL_LANG']['tl_antique_books']['listGrzbiet'],
			'eval'                    => array('tl_class'=>'w50')
		),
		'konstru' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_antique_books']['konstru'],
			'exclude'                 => true,
			'filter'                  => true,
			'inputType'               => 'select',
			'options'                 => array('0', '1', '2', '3'),
			'reference'				  => &$GLOBALS['TL_LANG']['tl_antique_books']['listKonstru'],
			'eval'                    => array('tl_class'=>'w50')
		),
		'szycie' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_antique_books']['szycie'],
			'exclude'                 => true,
			'filter'                  => true,
			'inputType'               => 'select',
			'options'                 => array('0', '1', '2', '3'),
			'reference'				  => &$GLOBALS['TL_LANG']['tl_antique_books']['listSzycie'],
			'eval'                    => array('tl_class'=>'w50')
		),
		'kapitalki' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_antique_books']['kapitalki'],
			'exclude'                 => true,
			'filter'                  => true,
			'inputType'               => 'select',
			'options'                 => array('0', '1', '2', '3'),
			'reference'				  => &$GLOBALS['TL_LANG']['tl_antique_books']['listKapitalki'],
			'eval'                    => array('tl_class'=>'w50')
		),
		'oblUbyt' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_antique_books']['oblUbyt'],
			'exclude'                 => true,
			'filter'                  => true,
			'inputType'               => 'select',
			'options'                 => array('0', '1', '2', '3'),
			'reference'				  => &$GLOBALS['TL_LANG']['tl_antique_books']['listOblUbyt'],
			'eval'                    => array('tl_class'=>'w50')
		),
		'oblZnisz' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_antique_books']['oblZnisz'],
			'exclude'                 => true,
			'filter'                  => true,
			'inputType'               => 'select',
			'options'                 => array('0', '1', '2', '3'),
			'reference'				  => &$GLOBALS['TL_LANG']['tl_antique_books']['listOblZnisz'],
			'eval'                    => array('tl_class'=>'w50')
		),
		'zapWiaz' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_antique_books']['zapWiaz'],
			'exclude'                 => true,
			'filter'                  => true,
			'inputType'               => 'select',
			'options'                 => array('0', '1', '2', '3'),
			'reference'				  => &$GLOBALS['TL_LANG']['tl_antique_books']['listZapWiaz'],
			'eval'                    => array('tl_class'=>'w50')
		),
		'zabOpr' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_antique_books']['zabOpr'],
			'exclude'                 => true,
			'filter'                  => true,
			'inputType'               => 'select',
			'options'                 => array('1', '2', '3'),
			'reference'				  => &$GLOBALS['TL_LANG']['tl_antique_books']['listZabOpr'],
			'eval'                    => array('tl_class'=>'w50')
		),
		'blokKompl' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_antique_books']['blokKompl'],
			'exclude'                 => true,
			'filter'                  => true,
			'inputType'               => 'select',
			'options'                 => array('1', '2', '3'),
			'reference'				  => &$GLOBALS['TL_LANG']['tl_antique_books']['listBlokKompl'],
			'eval'                    => array('tl_class'=>'w50')
		),
		'defBloku' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_antique_books']['defBloku'],
			'exclude'                 => true,
			'filter'                  => true,
			'inputType'               => 'select',
			'options'                 => array('1', '2', '3'),
			'reference'				  => &$GLOBALS['TL_LANG']['tl_antique_books']['listDefBloku'],
			'eval'                    => array('tl_class'=>'w50')
		),
		'zMechBloku' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_antique_books']['zMechBloku'],
			'exclude'                 => true,
			'filter'                  => true,
			'inputType'               => 'select',
			'options'                 => array('1', '2', '3'),
			'reference'				  => &$GLOBALS['TL_LANG']['tl_antique_books']['listZMechBloku'],
			'eval'                    => array('tl_class'=>'w50')
		),
		'zabBlokuWykl' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_antique_books']['zabBlokuWykl'],
			'exclude'                 => true,
			'filter'                  => true,
			'inputType'               => 'select',
			'options'                 => array('1', '2', '3'),
			'reference'				  => &$GLOBALS['TL_LANG']['tl_antique_books']['listZabBlokuWykl'],
			'eval'                    => array('tl_class'=>'w50')
		),
		'oslPapier' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_antique_books']['oslPapier'],
			'exclude'                 => true,
			'filter'                  => true,
			'inputType'               => 'select',
			'options'                 => array('0', '1'),
			'reference'				  => &$GLOBALS['TL_LANG']['tl_antique_books']['listOslPapier'],
			'eval'                    => array('tl_class'=>'w50')
		),
		'kruPapier' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_antique_books']['kruPapier'],
			'exclude'                 => true,
			'filter'                  => true,
			'inputType'               => 'select',
			'options'                 => array('0', '1'),
			'reference'				  => &$GLOBALS['TL_LANG']['tl_antique_books']['listKruPapier'],
			'eval'                    => array('tl_class'=>'w50')
		),
		'zacZal' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_antique_books']['zacZal'],
			'exclude'                 => true,
			'filter'                  => true,
			'inputType'               => 'select',
			'options'                 => array('0', '1', '2', '3'),
			'reference'				  => &$GLOBALS['TL_LANG']['tl_antique_books']['listZacZal'],
			'eval'                    => array('tl_class'=>'w50')
		),
		'mikroOrg' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_antique_books']['mikroOrg'],
			'exclude'                 => true,
			'filter'                  => true,
			'inputType'               => 'select',
			'options'                 => array('0', '1', '2', '3'),
			'reference'				  => &$GLOBALS['TL_LANG']['tl_antique_books']['listMikroOrg'],
			'eval'                    => array('tl_class'=>'w50')
		),
		'foxing' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_antique_books']['foxing'],
			'exclude'                 => true,
			'filter'                  => true,
			'inputType'               => 'select',
			'options'                 => array('0', '1'),
			'reference'				  => &$GLOBALS['TL_LANG']['tl_antique_books']['listFoxing'],
			'eval'                    => array('tl_class'=>'w50')
		),
		'owady' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_antique_books']['owady'],
			'exclude'                 => true,
			'filter'                  => true,
			'inputType'               => 'select',
			'options'                 => array('0', '1', '2', '3'),
			'reference'				  => &$GLOBALS['TL_LANG']['tl_antique_books']['listOwady'],
			'eval'                    => array('tl_class'=>'w50')
		),
		'sumaNum' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_antique_books']['sumaNum'],
			'inputType'               => 'text',
			'eval'                    => array('rgxp'=>'digit', 'disabled'=>true, 'tl_class'=>'w50 sumnum')
		),
		'galZach' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_content']['galZach'],
			'exclude'                 => true,
			'inputType'               => 'fileTree',
			'eval'                    => array('fieldType'=>'checkbox', 'files'=>true, 'extensions'=>'jpg,jpeg,gif,png')
		),
		'dezynfek' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_antique_books']['dezynfek'],
			'inputType'               => 'text',
			'search'                  => true,
			'eval'                    => array('maxlength'=>64, 'tl_class'=>'w50')
		),
		'napKonserw' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_antique_books']['napKonserw'],
			'exclude'                 => true,
			'filter'                  => true,
			'inputType'               => 'select',
			'options'                 => array('N', 'NK', 'K'),
			'reference'				  => &$GLOBALS['TL_LANG']['tl_antique_books']['listNapKonserw'],
			'eval'                    => array('tl_class'=>'w50')
		),
		'uwagi' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_antique_books']['uwagi'],
			'exclude'                 => true,
			'search'                  => true,
			'inputType'               => 'textarea',
			'eval'                    => array('rte'=>'tinyMCE'),
			'explanation'             => 'insertTags'
		),
		'galUwagi' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_content']['galUwagi'],
			'exclude'                 => true,
			'inputType'               => 'fileTree',
			'eval'                    => array('fieldType'=>'checkbox', 'files'=>true, 'extensions'=>'jpg,jpeg,gif,png')
		),
		'paczkaDownl' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_content']['paczkaDownl'],
			'exclude'                 => true,
			'inputType'               => 'fileTree',
			'eval'                    => array('fieldType'=>'radio', 'files'=>true, 'extensions'=>'zip,rar', 'tl_class'=>'clr')
		)
	)
);

?>