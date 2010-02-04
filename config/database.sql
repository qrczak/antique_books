-- 
-- Table `tl_cds`
-- 

CREATE TABLE `tl_antique_books` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `tstamp` int(10) unsigned NOT NULL default '0',
  -- kolumny charakterystyczne dla woluminu
  `zbior` varchar(64) NOT NULL default '',
  `nrInwent` smallint(5) unsigned NOT NULL default '0',
  `zdjecie do numeru inwentazrowego`
  `sygnatury` blob NULL,
  `oldSygnatury` varchar(255) NOT NULL default '',
  `height` varchar(64) NOT NULL default '',
  `width` varchar(64) NOT NULL default '',
  `eksl`
  `supEksl`
  `znakiWlas`
  `drRekMarg`
  `arkMat`
  `zdobKraw`
  `oblMat`
  `oblKolor`
  `okladziny`
  `zdobOprawy`
  `zapWiazOkucia`
  `charZapWiaz`
   -- stan zachowania
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
  `oslPapier` smallint(5) unsigned NOT NULL default '0',
  `kruPapier` smallint(5) unsigned NOT NULL default '0',
  `zacZal` smallint(5) unsigned NOT NULL default '0',
  `mikroOrg` smallint(5) unsigned NOT NULL default '0',
  `foxing` smallint(5) unsigned NOT NULL default '0',
  `owady` smallint(5) unsigned NOT NULL default '0',
  `sumaNum` smallint(5) unsigned NOT NULL default '0',
   -- uwagi koncowe
  `dezynfek` varchar(64) NOT NULL default '',
  `napKonserw` varchar(64) NOT NULL default '',
  `uwagi` mediumtext NULL,
  PRIMARY KEY  (`id`),
) ENGINE=MyISAM DEFAULT CHARSET=utf8;