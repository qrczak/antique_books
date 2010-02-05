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
 * @copyright  Leo Feyer 2007
 * @author     Leo Feyer <leo@typolight.org>
 * @package    CdCollection
 * @license    GPL
 * @filesource
 */


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
			'fields'                  => array('zbior'),
			'flag'                    => 1,
			'panelLayout'             => 'search,limit'
		),
		'label' => array
		(
			'fields'                  => array('zbior', 'nrInwent'),
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
		'default'                     => '{zbiorLeg_legend},zbior,nrInwent;{imgInwent_legend},image;{sygOpis_legend},sygnatury;{wolumin_legend},oldSygnatury,height,width,eksl,supEksl,znakiWlas,drRekMarg,arkMat,zdobKraw,oblMat,oblKolor,okladziny,zdobOprawy,zapWiazOkucia,charZapWiaz;{stZachow_legend},cover,grzbiet,konstru,szycie,kapitalki,oblUbyt,oblZnisz,zapWiaz,zabOpr,blokKompl,defBloku,zMechBloku,oslPapier,kruPapier,zacZal,mikroOrg,foxing,owady,sumaNum;{uwKonc_legend},dezynfek,napKonserw,uwagi',
	),

	// Fields
	'fields' => array
	(
		'zbior' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_antique_books']['zbior'],
			'inputType'               => 'text',
			'search'                  => true,
			'eval'                    => array('mandatory'=>true, 'maxlength'=>64)
		),
		'nrInwent' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_antique_books']['nrInwent'],
			'default'                 => 3,
			'exclude'                 => true,
			'inputType'               => 'text',
			'eval'                    => array('rgxp'=>'digit', 'tl_class'=>'w50')
		),
		// 'image' => array
		// (
			// 'label'                   => &$GLOBALS['TL_LANG']['tl_antique_books']['images'],
			// 'inputType'               => 'fileTree',
			// 'eval'                    => array('files'=>true, 'fieldType'=>'radio')
		// ),
		'sygnatury' => array
		(
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
		'znakiWlas' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_antique_books']['znakiWlas'],
			'inputType'               => 'text',
			'search'                  => true,
			'eval'                    => array('maxlength'=>64, 'tl_class'=>'w50')
		),
		'drRekMarg' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_antique_books']['drRekMarg'],
			'inputType'               => 'text',
			'search'                  => true,
			'eval'                    => array('maxlength'=>64, 'tl_class'=>'w50')
		),
		'arkMat' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_antique_books']['arkMat'],
			'inputType'               => 'text',
			'search'                  => true,
			'eval'                    => array('maxlength'=>64, 'tl_class'=>'w50')
		),
		'zdobKraw' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_antique_books']['zdobKraw'],
			'inputType'               => 'text',
			'search'                  => true,
			'eval'                    => array('maxlength'=>64, 'tl_class'=>'w50')
		),
		'oblMat' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_antique_books']['oblMat'],
			'inputType'               => 'text',
			'search'                  => true,
			'eval'                    => array('maxlength'=>64, 'tl_class'=>'w50')
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
			'inputType'               => 'text',
			'search'                  => true,
			'eval'                    => array('maxlength'=>64, 'tl_class'=>'w50')
		),
		'zdobOprawy' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_antique_books']['zdobOprawy'],
			'inputType'               => 'text',
			'search'                  => true,
			'eval'                    => array('maxlength'=>64, 'tl_class'=>'w50')
		),
		'zapWiazOkucia' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_antique_books']['zapWiazOkucia'],
			'inputType'               => 'text',
			'search'                  => true,
			'eval'                    => array('maxlength'=>64, 'tl_class'=>'w50')
		),
		'charZapWiaz' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_antique_books']['charZapWiaz'],
			'inputType'               => 'text',
			'search'                  => true,
			'eval'                    => array('maxlength'=>64, 'tl_class'=>'w50')
		),
		'cover' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_antique_books']['cover'],
			'default'                 => 0,
			'inputType'               => 'text',
			'eval'                    => array('rgxp'=>'digit', 'tl_class'=>'w50')
		),
		'grzbiet' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_antique_books']['grzbiet'],
			'default'                 => 0,
			'exclude'                 => true,
			'inputType'               => 'text',
			'eval'                    => array('rgxp'=>'digit', 'tl_class'=>'w50')
		),
		'konstru' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_antique_books']['konstru'],
			'default'                 => 0,
			'exclude'                 => true,
			'inputType'               => 'text',
			'eval'                    => array('rgxp'=>'digit', 'tl_class'=>'w50')
		),
		'szycie' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_antique_books']['szycie'],
			'default'                 => 0,
			'exclude'                 => true,
			'inputType'               => 'text',
			'eval'                    => array('rgxp'=>'digit', 'tl_class'=>'w50')
		),
		'kapitalki' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_antique_books']['kapitalki'],
			'default'                 => 0,
			'exclude'                 => true,
			'inputType'               => 'text',
			'eval'                    => array('rgxp'=>'digit', 'tl_class'=>'w50')
		),
		'oblUbyt' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_antique_books']['oblUbyt'],
			'default'                 => 0,
			'exclude'                 => true,
			'inputType'               => 'text',
			'eval'                    => array('rgxp'=>'digit', 'tl_class'=>'w50')
		),
		'oblZnisz' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_antique_books']['oblZnisz'],
			'default'                 => 0,
			'exclude'                 => true,
			'inputType'               => 'text',
			'eval'                    => array('rgxp'=>'digit', 'tl_class'=>'w50')
		),
		'zapWiaz' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_antique_books']['zapWiaz'],
			'default'                 => 0,
			'exclude'                 => true,
			'inputType'               => 'text',
			'eval'                    => array('rgxp'=>'digit', 'tl_class'=>'w50')
		),
		'zabOpr' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_antique_books']['zabOpr'],
			'default'                 => 0,
			'exclude'                 => true,
			'inputType'               => 'text',
			'eval'                    => array('rgxp'=>'digit', 'tl_class'=>'w50')
		),
		'blokKompl' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_antique_books']['blokKompl'],
			'default'                 => 0,
			'exclude'                 => true,
			'inputType'               => 'text',
			'eval'                    => array('rgxp'=>'digit', 'tl_class'=>'w50')
		),
		'defBloku' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_antique_books']['defBloku'],
			'default'                 => 0,
			'exclude'                 => true,
			'inputType'               => 'text',
			'eval'                    => array('rgxp'=>'digit', 'tl_class'=>'w50')
		),
		'zMechBloku' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_antique_books']['zMechBloku'],
			'default'                 => 0,
			'exclude'                 => true,
			'inputType'               => 'text',
			'eval'                    => array('rgxp'=>'digit', 'tl_class'=>'w50')
		),
		'oslPapier' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_antique_books']['oslPapier'],
			'default'                 => 0,
			'exclude'                 => true,
			'inputType'               => 'text',
			'eval'                    => array('rgxp'=>'digit', 'tl_class'=>'w50')
		),
		'kruPapier' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_antique_books']['kruPapier'],
			'default'                 => 0,
			'exclude'                 => true,
			'inputType'               => 'text',
			'eval'                    => array('rgxp'=>'digit', 'tl_class'=>'w50')
		),
		'zacZal' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_antique_books']['zacZal'],
			'default'                 => 0,
			'exclude'                 => true,
			'inputType'               => 'text',
			'eval'                    => array('rgxp'=>'digit', 'tl_class'=>'w50')
		),
		'mikroOrg' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_antique_books']['mikroOrg'],
			'default'                 => 0,
			'exclude'                 => true,
			'inputType'               => 'text',
			'eval'                    => array('rgxp'=>'digit', 'tl_class'=>'w50')
		),
		'foxing' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_antique_books']['foxing'],
			'default'                 => 0,
			'exclude'                 => true,
			'inputType'               => 'text',
			'eval'                    => array('rgxp'=>'digit', 'tl_class'=>'w50')
		),
		'owady' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_antique_books']['owady'],
			'default'                 => 0,
			'exclude'                 => true,
			'inputType'               => 'text',
			'eval'                    => array('rgxp'=>'digit', 'tl_class'=>'w50')
		),
		'sumaNum' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_antique_books']['sumaNum'],
			'default'                 => 0,
			'inputType'               => 'text',
			'eval'                    => array('rgxp'=>'digit', 'tl_class'=>'w50 sumnum')
		),
		'dezynfek' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_antique_books']['dezynfek'],
			'inputType'               => 'text',
			'search'                  => true,
			'eval'                    => array('maxlength'=>64, 'tl_class'=>'w50 sumnum')
		),
		'napKonserw' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_antique_books']['napKonserw'],
			'inputType'               => 'text',
			'search'                  => true,
			'eval'                    => array('maxlength'=>64, 'tl_class'=>'w50 sumnum')
		),
		'uwagi' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_antique_books']['uwagi'],
			'exclude'                 => true,
			'search'                  => true,
			'inputType'               => 'textarea',
			'eval'                    => array('rte'=>'tinyMCE'),
			'explanation'             => 'insertTags'
		)
	)
);

?>