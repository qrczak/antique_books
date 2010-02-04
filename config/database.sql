-- 
-- Table `tl_cds`
-- 

CREATE TABLE `tl_antique_books` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `tstamp` int(10) unsigned NOT NULL default '0',
  -- kolumny charakterystyczne dla woluminu
  `zbior` varchar(64) NOT NULL default '',
  `nrInwent` smallint(5) unsigned NOT NULL default '0',
   ???? zdjecie ????
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


Kolumny charakterystyczne dla woluminu:
zbiór – pole tekstowe
nr inwentarzowy – pole liczbowe
zdjêcie – hiper³¹cze do zdjêcia (nie musi to byæ osobne pole, zdjêcie mo¿e byæ przypisane do
nr inwentarzowego) ????
sygnatury
dawne sygnatury – pole tekstowe
wysokoœæ
szerokoœæ
ekslibris
superekslibris
inne znaki w³asnoœciowe
druk/rêkopis/marginalia
arkusze – materia³
zdobienia krawêdzi
obleczenie – materia³
obleczenie – kolor
ok³adziny
zdobienia oprawy
zapinki/wi¹zania/okucia
charakterystyka zapinek/wi¹zañ