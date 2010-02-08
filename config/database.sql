-- 
-- Table `tl_antique_books`
-- 

CREATE TABLE `tl_antique_books` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `tstamp` int(10) unsigned NOT NULL default '0',
  `zbior` varchar(64) NOT NULL default '',
  `nrInwent` smallint(5) unsigned NOT NULL default '0',
  `sygnatury` blob NULL,
  `oldSygnatury` varchar(255) NOT NULL default '',
  `height` varchar(64) NOT NULL default '',
  `width` varchar(64) NOT NULL default '',
  `eksl` varchar(64) NOT NULL default '',
  `supEksl` varchar(64) NOT NULL default '',
  `znakiWlas` varchar(64) NOT NULL default '',
  `drRekMarg` smallint(5) unsigned NOT NULL default '0',
  `arkMat` smallint(5) unsigned NOT NULL default '0',
  `zdobKraw` smallint(5) unsigned NOT NULL default '0',
  `oblMat` smallint(5) unsigned NOT NULL default '0',
  `oblKolor` smallint(5) unsigned NOT NULL default '0',
  `okladziny` smallint(5) unsigned NOT NULL default '0',
  `zdobOprawy` smallint(5) unsigned NOT NULL default '0',
  `zapWiazOkucia` smallint(5) unsigned NOT NULL default '0',
  `charZapWiaz` smallint(5) unsigned NOT NULL default '0',
  `cover` smallint(5) unsigned NOT NULL default '0',
  `grzbiet` smallint(5) unsigned NOT NULL default '0',
  `konstru` smallint(5) unsigned NOT NULL default '0',
  `szycie` smallint(5) unsigned NOT NULL default '0',
  `kapitalki` smallint(5) unsigned NOT NULL default '0',
  `oblUbyt` smallint(5) unsigned NOT NULL default '0',
  `oblZnisz` smallint(5) unsigned NOT NULL default '0',
  `zapWiaz` smallint(5) unsigned NOT NULL default '0',
  `zabOpr` smallint(5) unsigned NOT NULL default '0',
  `blokKompl` smallint(5) unsigned NOT NULL default '0',
  `defBloku` smallint(5) unsigned NOT NULL default '0',
  `zMechBloku` smallint(5) unsigned NOT NULL default '0',
  `zabBlokuWykl` smallint(5) unsigned NOT NULL default '0',
  `oslPapier` smallint(5) unsigned NOT NULL default '0',
  `kruPapier` smallint(5) unsigned NOT NULL default '0',
  `zacZal` smallint(5) unsigned NOT NULL default '0',
  `mikroOrg` smallint(5) unsigned NOT NULL default '0',
  `foxing` smallint(5) unsigned NOT NULL default '0',
  `owady` smallint(5) unsigned NOT NULL default '0',
  `sumaNum` smallint(5) unsigned NOT NULL default '0',
  `dezynfek` varchar(64) NOT NULL default '',
  `napKonserw` smallint(5) unsigned NOT NULL default '0',
  `uwagi` mediumtext NULL,
  `paczkaDownl` varchar(255) NOT NULL default '',
  `galIdent` blob NULL,
  `galZach` blob NULL,
  `galUwagi` blob NULL,
  PRIMARY KEY  (`id`),
) ENGINE=MyISAM DEFAULT CHARSET=utf8;