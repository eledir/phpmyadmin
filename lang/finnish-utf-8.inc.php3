<?php
/* $Id$ */

/*
 * Finnish language file by Visa Kopu, visa@visakopu.net
 */

$charset = 'utf-8';
$allow_recoding = TRUE;
$text_dir = 'ltr';
$left_font_family = 'verdana, arial, helvetica, geneva, sans-serif';
$right_font_family = 'arial, helvetica, geneva, sans-serif';
$number_thousands_separator = ',';
$number_decimal_separator = '.';
// shortcuts for Byte, Kilo, Mega, Giga, Tera, Peta, Exa
$byteUnits = array('tavua', 'kt', 'Mt', 'Gt');

$day_of_week = array('Su', 'Ma', 'Ti', 'Ke', 'To', 'Pe', 'La');
$month = array('Tammi', 'Helmi', 'Maalis', 'Huhti', 'Touko', 'Kesä', 'Heinä', 'Elo', 'Syys', 'Loka', 'Marras', 'Joulu');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%d.%m.%Y klo %H:%M';

$strAPrimaryKey = 'Sarakkeelle %s on lisätty ensisijainen avain';
$strAccessDenied = 'Pääsy kielletty';
$strAction = 'Toiminto';
$strAddDeleteColumn = 'Lisää/poista sarakkeita';
$strAddDeleteRow = 'Lisää/poista hakuehtoja';
$strAddNewField = 'Lisää sarake';
$strAddPriv = 'Lisää käyttöoikeus';
$strAddPrivMessage = 'Olet lisännyt uuden käyttöoikeuden.';
$strAddSearchConditions = 'Lisää hakuehtoja ("where"-lauseen sisältö):';
$strAddToIndex = 'Lisää indeksi  %s sarakkeisiin';
$strAddUser = 'Lisää uusi käyttäjä';
$strAddUserMessage = 'Olet lisännyt uuden käyttäjän.';
$strAffectedRows = 'Rivejä:';
$strAfter = 'Jälkeen sarakkeen %s';
$strAfterInsertBack = 'Takaisin';
$strAfterInsertNewInsert = 'Lisää uusi rivi';
$strAll = 'Kaikki';
$strAllTableSameWidth = 'Näytä kaikki taulut samanlevyisinä?';
$strAlterOrderBy = 'Järjestä taulu';
$strAnIndex = 'Sarakkeelle %s on lisätty indeksi';
$strAnalyzeTable = 'Analysoi taulu';
$strAnd = 'Ja';
$strAny = 'Mikä tahansa';
$strAnyColumn = 'Mikä tahansa sarake';
$strAnyDatabase = 'Mikä tahansa tietokanta';
$strAnyHost = 'Mikä tahansa palvelin';
$strAnyTable = 'Mikä tahansa taulu';
$strAnyUser = 'Mikä tahansa käyttäjä';
$strAscending = 'Nouseva';
$strAtBeginningOfTable = 'Taulun alkuun';
$strAtEndOfTable = 'Taulun loppuun';
$strAttr = 'Attribuutit';

$strBack = 'Takaisin';
$strBeginCut = 'ALOITA CUT';
$strBeginRaw = 'ALOITA RAW';
$strBinary = 'Binääridata';
$strBinaryDoNotEdit = 'Binääridataa - älä muokkaa';
$strBookmarkDeleted = 'Tallennettu SQL-lause on poistettu.';
$strBookmarkLabel = 'Tunniste';
$strBookmarkQuery = 'Tallennettu SQL-lause';
$strBookmarkThis = 'Tallenna SQL-lause';
$strBookmarkView = 'Näytä';
$strBrowse = 'Selaa';
$strBzip = '"bzip-pakattu"';

$strCantLoadMySQL = 'MySQL-laajennusta ei voitu ladata,<br />tarkista PHP:n asetukset.';
$strCantLoadRecodeIconv = 'Merkistön konvertointiin tarvittavaa iconv- tai recode-laajennusta ei voitu ladata. Muokkaa PHP:n asetuksia ja salli näiden laajennusten käyttö tai muuta phpMyAdminin asetuksia niin ettei konvertointia suoriteta.';
$strCantRenameIdxToPrimary = 'Indeksiä ei voi muuttaa PRIMARY-nimiseksi!';
$strCantUseRecodeIconv = 'iconv-, libiconv- tai recode_string-funktioita ei voitu käyttää. Tarkista PHP:n asetukset.';
$strCardinality = 'Kardinaliteetti';
$strCarriage = 'CR-rivinvaihto: \\r';
$strChange = 'Muokkaa';
$strChangeDisplay = 'Valitse näytettävä sarake';
$strChangePassword = 'Vaihda salasanaa';
$strCharsetOfFile = 'Tiedoston merkistö:';
$strCheckAll = 'Valitse kaikki';
$strCheckDbPriv = 'Tarkista tietokannan käyttöoikeudet';
$strCheckTable = 'Tarkista taulu';
$strChoosePage = 'Valitse muokattava sivu';
$strColComFeat = 'Sarakkeiden kommentit näkyvissä';
$strColumn = 'Sarake';
$strColumnNames = 'Sarakkeiden nimet';
$strComments = 'Kommentit';
$strCompleteInserts = 'Täydelliset insert-lauseet';
$strConfigFileError = 'phpMyAdmin ei pysty lukemaan asetustiedostoa.<br />Tämä saattaa johtua virheestä, jonka PHP löysi tiedostosta tai tiedoston puuttumisesta.<br />Voit avata tiedoston allaolevasta linkistä ja lukea mahdolliset PHP-virheilmoituikset. Todennäköisimmin joltain riviltä puuttuu lainausmerkki tai puolipiste.<br />Jos linkistä avautuva sivu on tyhjä, asetustiedostosta ei löytynyt virhettä.';
$strConfigureTableCoord = 'Määrittele koordinaatit taululle %s';
$strConfirm = 'Oletko varma, että haluat tehdä tämän?';
$strCookiesRequired = 'Selaimessa pitää olla cookietuki päällä tästä eteenpäin.';
$strCopyTable = 'Kopioi taulu (tietokanta<b>.</b>taulu):';
$strCopyTableOK = 'Taulu %s on kopioitu nimelle %s.';
$strCreate = 'Luo';
$strCreateIndex = 'Luo sarakkeista indeksi';
$strCreateIndexTopic = 'Luo uusi indeksi';
$strCreateNewDatabase = 'Luo uusi tietokanta';
$strCreateNewTable = 'Luo uusi taulu tietokantaan %s';
$strCreatePage = 'Luo uusi sivu';
$strCreatePdfFeat = 'PDF-tiedostojen luonti';
$strCriteria = 'Hakuehdot';

$strData = 'Data';
$strDataOnly = 'Vain data';
$strDatabase = 'Tietokanta ';
$strDatabaseHasBeenDropped = 'Tietokanta %s on pudotettu.';
$strDatabaseWildcard = 'Tietokanta (voit käyttää jokerimerkkejä):';
$strDatabases = 'tietokantaa';
$strDatabasesStats = 'Tietokantastatistiikka';
$strDefault = 'Oletusarvo';
$strDelete = 'Poista';
$strDeleteFailed = 'Poistaminen epäonnistui!';
$strDeleteUserMessage = 'Käyttäjä %s on poistettu.';
$strDeleted = 'Rivi on poistettu';
$strDeletedRows = 'Poistetut rivit:';
$strDescending = 'Laskeva';
$strDisabled = 'Pois päältä';
$strDisplay = 'Näytä';
$strDisplayFeat = 'Ulkoasun asetukset';
$strDisplayOrder = 'Lajittelujärjestys:';
$strDisplayPDF = 'Näytä PDF-kaavio';
$strDoAQuery = 'Suorita "esimerkin mukainen haku" (jokerimerkki: "%")';
$strDoYouReally = 'Oletko varma että haluat ';
$strDocu = 'Ohjeet';
$strDrop = 'Pudota';
$strDropDB = 'Pudota tietokanta %s';
$strDropTable = 'Pudota taulu';
$strDumpXRows = 'Tee vedos %s rivistä, alkaen rivistä %s.';
$strDumpingData = 'Vedostan dataa taulusta';
$strDynamic = 'dynaaminen';

$strEdit = 'Muokkaa';
$strEditPDFPages = 'Muokkaa PDF-sivuja';
$strEditPrivileges = 'Muokkaa käyttöoikeuksia';
$strEffective = 'Varsinainen';
$strEmpty = 'Tyhjennä';
$strEmptyResultSet = 'MySQL palautti tyhjän vastauksen (ts. nolla riviä).';
$strEnabled = 'Päällä';
$strEnd = 'Loppu';
$strEndCut = 'LOPETA CUT';
$strEndRaw = 'LOPETA RAW';
$strEnglishPrivileges = ' Huom. MySQL-käyttöoikeuksien nimet ovat englanniksi ';
$strError = 'Virhe';
$strExplain = 'Selitä SQL-lause';
$strExport = 'Tulosta tiedostoksi/ruudulle';
$strExportToXML = 'Rakenne ja data XML-muodossa';
$strExtendedInserts = 'Yhteinen insert-lause';
$strExtra = 'Lisätiedot';

$strField = 'Sarake';
$strFieldHasBeenDropped = 'Sarake %s on pudotettu';
$strFields = 'Sarakkeet';
$strFieldsEmpty = ' Sarakkeiden lukumäärä on nolla! ';
$strFieldsEnclosedBy = 'Sarakkeiden ympäröintimerkki';
$strFieldsEscapedBy = 'Koodinvaihtomerkki (escape)';
$strFieldsTerminatedBy = 'Sarakkeiden erotinmerkki';
$strFixed = 'kiinteä';
$strFlushTable = 'Tyhjennä taulun välimuisti ("FLUSH")';
$strFormEmpty = 'Tarvittava tieto puuttuu lomakkeesta!';
$strFormat = 'Muoto';
$strFullText = 'Koko tekstit';
$strFunction = 'Funktio';

$strGenBy = 'Generoinut:';
$strGenTime = 'Luontiaika';
$strGeneralRelationFeat = 'Yleiset relaatio-ominaisuudet';
$strGo = 'Suorita';
$strGrants = 'Luvat';
$strGzip = '"gzip-pakattu"';

$strHasBeenAltered = 'on muutettu.';
$strHasBeenCreated = 'on luotu.';
$strHaveToShow = 'Valitse vähintään yksi sarake';
$strHome = 'Etusivu';
$strHomepageOfficial = 'phpMyAdminin viralliset sivut';
$strHomepageSourceforge = 'phpMyAdminin sivut SourceForge-palvelussa';
$strHost = 'Palvelin';
$strHostEmpty = 'Palvelimen nimi puuttuu!';

$strIdxFulltext = 'Koko teksti';
$strIfYouWish = 'Jos haluat hakea vain osan taulun sarakkeista, syötä pilkuilla erotettu lista sarakkeiden nimistä.';
$strIgnore = 'Jätä huomiotta';
$strInUse = 'käytössä';
$strIndex = 'Indeksi';
$strIndexHasBeenDropped = 'Indeksi %s on pudotettu';
$strIndexName = 'Indeksin nimi:';
$strIndexType = 'Indeksin tyyppi:';
$strIndexes = 'Indeksit';
$strInsecureMySQL = 'Asetustiedostosi käyttää asetuksia, jotka viittaavat MySQL:n oletusarvoiseen käyttäjään (root ilman salasanaa). Tällaisilla asetuksilla käytettäessä MySQL-palvelin on arka hyökkäyksille. Tämä tietoturvariski olisi syytä korjata pikimmiten!';
$strInsert = 'Lisää rivi';
$strInsertAsNewRow = 'Lisää uutena rivinä';
$strInsertNewRow = 'Lisää uusi rivi';
$strInsertTextfiles = 'Syötä tekstitiedosto tauluun';
$strInsertedRows = 'Lisätyt rivit:';
$strInstructions = 'komentoa';
$strInvalidName = '"%s" on varattu sana eikä sitä voi käyttää tietokannan, taulun tai sarakkeen nimenä.';

$strKeepPass = 'Älä vaihda salasanaa';
$strKeyname = 'Avaimen nimi';
$strKill = 'Tapa';

$strLength = 'Pituus';
$strLengthSet = 'Pituus/Arvot*';
$strLimitNumRows = 'Rivejä/sivu';
$strLineFeed = 'LF-rivinvaihto: \\n';
$strLines = 'Rivit';
$strLinesTerminatedBy = 'Rivien erotinmerkki';
$strLinkNotFound = 'Linkkiä ei löydy';
$strLinksTo = 'Linkitys sarakkeeseen:';
$strLocationTextfile = 'Tiedoston sijainti';
$strLogPassword = 'Salasana:';
$strLogUsername = 'Käyttäjätunnus:';
$strLogin = 'Kirjaudu sisään';
$strLogout = 'Poistu';

$strMissingBracket = 'Hakasulku puuttuu';
$strModifications = 'Muutokset tallennettu';
$strModify = 'Muokkaa';
$strModifyIndexTopic = 'Muokkaa indeksiä';
$strMoveTable = 'Siirrä taulu (tietokanta<b>.</b>taulu):';
$strMoveTableOK = 'Taulu %s on siirretty %s.';
$strMySQLCharset = 'MySQL:n merkistö';
$strMySQLReloaded = 'MySQL uudelleenladattu.';
$strMySQLSaid = 'MySQL ilmoittaa: ';
$strMySQLServerProcess = 'MySQL %pma_s1% palvelimella %pma_s2% käyttäjänä %pma_s3%';
$strMySQLShowProcess = 'Näytä prosessit';
$strMySQLShowStatus = 'Näytä MySQL:n ajonaikaiset tiedot';
$strMySQLShowVars = 'Näytä MySQL:n järjestelmämuuttujat';

$strName = 'Nimi';
$strNext = 'Seuraava';
$strNo = 'Ei';
$strNoDatabases = 'Ei tietokantoja';
$strNoDescription = 'ei selitystä';
$strNoDropDatabases = '"DROP DATABASE"-lauseiden käyttö on estetty.';
$strNoExplain = 'Älä selitä SQL-lausetta';
$strNoFrames = 'phpMyAdmin toimii parhaiten <b>kehyksiä</b> tukevalla selaimella.';
$strNoIndex = 'Indeksiä ei ole määritelty!';
$strNoIndexPartsDefined = 'Indeksin osia ei ole määritelty!';
$strNoModification = 'Ei muutoksia';
$strNoPassword = 'Ei salasanaa';
$strNoPhp = 'Piilota PHP-koodi';
$strNoPrivileges = 'Ei käyttöoikeuksia';
$strNoQuery = 'Ei SQL lausetta!';
$strNoRights = 'Sinulla ei ole tarpeeksi oikeuksia!';
$strNoTablesFound = 'Tietokannasta ei löytynyt yhtään taulua.';
$strNoUsersFound = 'Käyttäjiä ei löytynyt.';
$strNoValidateSQL = 'Älä tarkista SQL-lausetta';
$strNone = 'Ei mitään';
$strNotNumber = 'Tämä ei ole numero!';
$strNotOK = 'Ei kunnossa';
$strNotSet = '<b>%s</b>-taulua ei löytynyt tai sitä ei ole määritelty %s-tiedostossa';
$strNotValidNumber = ' ei ole hyväksyttävä rivin numero!';
$strNull = 'Tyhjä';
$strNumSearchResultsInTable = '%s hakutulosta taulussa <i>%s</i>';
$strNumSearchResultsTotal = '<b>Yhteensä:</b> <i>%s</i> hakutulosta';

$strOK = 'Kunnossa';
$strOftenQuotation = 'Yleensä lainausmerkki. "Valinnaisesti" tarkoittaa, että vain char- ja varchar-tyyppiset sarakkeet ympäröidään annetulla ympäröintimerkillä.';
$strOperations = 'Toiminnot';
$strOptimizeTable = 'Optimoi taulu';
$strOptionalControls = 'Valinnainen. Ohjaa erikoismerkkien lukua ja kirjoitusta.';
$strOptionally = 'Valinnaisesti';
$strOptions = 'Lisävalinnat';
$strOr = 'Tai';
$strOverhead = 'Käyttämätön';

$strPHPVersion = 'PHP:n versio';
$strPageNumber = 'Sivunnumero:';
$strPartialText = 'Osittaiset tekstit';
$strPassword = 'Salasana';
$strPasswordEmpty = 'Salasana puuttuu!';
$strPasswordNotSame = 'Salasanat eivät ole samat!';
$strPdfDbSchema = 'Kaavio tietokannasta "%s" - Sivu %s';
$strPdfInvalidPageNum = 'PDF:n sivunumeroa ei ole määritelty!';
$strPdfInvalidTblName = 'Taulua "%s" ei löydy!';
$strPdfNoTables = 'Ei tauluja';
$strPhp = 'Näytä PHP-koodi';
$strPmaDocumentation = 'phpMyAdminin dokumentaatio';
$strPmaUriError = '<tt>$cfg[\'PmaAbsoluteUri\']</tt> täytyy määritellä asetustiedostossa!';
$strPos1 = 'Alku';
$strPrevious = 'Edellinen';
$strPrimary = 'Ensisijainen';
$strPrimaryKey = 'Ensisijainen avain';
$strPrimaryKeyHasBeenDropped = 'Ensisijainen avain on pudotettu';
$strPrimaryKeyName = 'Ensisijaisen avaimen nimenä pitää olla PRIMARY!';
$strPrimaryKeyWarning = '("PRIMARY" saa olla <b>vain ja ainoastaan</b>ensisijaisen avaimen nimenä!)';
$strPrintView = 'Tulostusversio';
$strPrivileges = 'Käyttöoikeudet';
$strProperties = 'Asetukset';
$strPutColNames = 'Laita sarakkeiden nimet ensimmäiselle riville';

$strQBE = 'Esimerkin mukainen haku';
$strQBEDel = 'Poista';
$strQBEIns = 'Lisää';
$strQueryOnDb = 'Suorita SQL-lause tietokannassa <b>%s</b>:';

$strReType = 'Kirjoita uudelleen';
$strRecords = 'riviä';
$strReferentialIntegrity = 'Tarkista viitteiden eheys:';
$strRelationNotWorking = 'Relaatioihin ja linkitettyihin tauluihin liittyvät lisäominaisuudet ovat pois päältä. Katso %stäältä%s lisätietoja.';
$strRelationView = 'Relaationäkymä';
$strReloadFailed = 'MySQL:n uudelleenlataus epäonnistui.';
$strReloadMySQL = 'Lataa MySQL uudelleen';
$strRememberReload = 'Muista käynnistää palvelin uudestaan.';
$strRenameTable = 'Nimeä taulu uudelleen';
$strRenameTableOK = 'Taulun %s nimi on nyt %s';
$strRepairTable = 'Korjaa taulu';
$strReplace = 'Korvaa';
$strReplaceTable = 'Korvaa taulun nykyiset rivit tiedostolla';
$strReset = 'Tyhjennä';
$strRevoke = 'Mitätöi';
$strRevokeGrant = 'Mitätöi lupa';
$strRevokeGrantMessage = 'Olet peruuttanut käyttäjän %s GRANT-oikeuden';
$strRevokeMessage = 'Olet peruuttanut käyttäjän %s käyttöoikeudet';
$strRevokePriv = 'Mitätöi käyttöoikeudet';
$strRowLength = 'Rivin pituus';
$strRowSize = ' Rivin koko ';
$strRows = 'riviä';
$strRowsFrom = 'riviä alkaen rivistä';
$strRowsModeHorizontal= 'vaakasuora';
$strRowsModeOptions= '%ssti, otsikoita toistetaan %s:n rivin välein';
$strRowsModeVertical= 'pystysuora';
$strRowsStatistic = 'Rivistatistiikka';
$strRunQuery = 'Suorita';
$strRunSQLQuery = 'Suorita SQL-lauseita tietokannassa %s';
$strRunning = 'palvelimella %s';

$strSQL = 'SQL';
$strSQLParserBugMessage = 'Olet mahdollisesti löytänyt ohjelmointivirheen SQL-parserista. Tarkista SQL-lauseesi, erityisesti lainausmerkit merkkijonojen alusta ja lopusta. Toinen mahdollinen virheen aiheuttaja on se, että olet siirtämässä tiedostoa, jossa on binääridataa lainausmerkkien ulkopuolella. Jos mahdollista, kokeile SQL-lausettasi suoraan komentoriviltä. MySQL:n antama virheilmoitus näkyy alla, jos serveri sellaisen antoi. Jos lause toimi komentorivillä, mutta ei phpMyAdminissa, kokeile etsiä se rivi, joka virheilmoituksen aiheutti ja lähetä meille bugiraportti, johon liität alla olevan koodin:';
$strSQLParserUserError = 'SQL-lauseessasi oli virhe. There seems to be an error in your SQL query. MySQL:n antama virheilmoitus näkyy alla, jos serveri sellaisen antoi';
$strSQLQuery = 'SQL-lause';
$strSQLResult = 'SQL-lauseen tulos';
$strSQPBugInvalidIdentifer = 'Epäkelpo tunniste';
$strSQPBugUnclosedQuote = 'Toinen lainausmerkki puuttuu merkkijonon lopusta';
$strSQPBugUnknownPunctation = 'Tuntematon välimerkki';
$strSave = 'Tallenna';
$strScaleFactorSmall = 'Kaavio ei mahdu yhdelle sivulle tällä skaalauksella';
$strSearch = 'Hae';
$strSearchFormTitle = 'Hae tietokannassa';
$strSearchInTables = 'Tauluista:';
$strSearchNeedle = 'Haettavat sanat tai arvot (%-merkkiä voi käyttää jokerimerkkinä):';
$strSearchOption1 = 'vähintään yksi sanoista';
$strSearchOption2 = 'kaikki sanat';
$strSearchOption3 = 'koko lause';
$strSearchOption4 = 'regexp-haku';
$strSearchResultsFor = 'Tulokset hakusanalla "<i>%s</i>" %s:';
$strSearchType = 'Hae:';
$strSelect = 'Hae';
$strSelectADb = 'Valitse tietokanta';
$strSelectAll = 'Valitse kaikki';
$strSelectFields = 'Valitse sarakkeet (vähintään yksi):';
$strSelectNumRows = 'lauseessa';
$strSelectTables = 'Valitse taulut';
$strSend = 'Tallenna tiedostoksi';
$strServer = 'Palvelin %s';
$strServerChoice = 'Valitse palvelin';
$strServerVersion = 'Palvelimen versio';
$strSetEnumVal = 'Jos sarakkeen tietotyyppi on "enum" tai "set", syötä vaaditut arvot tässä muodossa: \'a\',\'b\',\'c\'...<br />Jos tarvitset arvoissa kenoviivaa ("\") tai heittomerkkiä ("\'"), laita merkin eteen kenoviiva (esim. \'\\\\xyz\' tai \'a\\\'b\').';
$strShow = 'Näytä';
$strShowAll = 'Näytä kaikki';
$strShowColor = 'Näytä värit';
$strShowCols = 'Näytä sarakkeet';
$strShowGrid = 'Näytä ruudukko';
$strShowPHPInfo = 'Näytä tietoja PHP:n asetuksista';
$strShowTableDimension = 'Näytä taulujen ulottuvuus';
$strShowTables = 'Näytä taulut';
$strShowThisQuery = ' Näytä lause uudelleen ';
$strShowingRecords = 'Näkyvillä rivit ';
$strSingly = '(yksitellen)';
$strSize = 'Koko';
$strSort = 'Järjestys';
$strSpaceUsage = 'Levytilan käyttö';
$strSplitWordsWithSpace = 'Sanat erotellaan välilyönnillä.';
$strStatement = 'Tieto';
$strStrucCSV = 'CSV-muotoinen data';
$strStrucData = 'Rakenne ja data';
$strStrucDrop = 'Lisää \'DROP TABLE\'-rivit';
$strStrucExcelCSV = 'CSV-muoto MS Exceliä varten';
$strStrucOnly = 'Vain rakenne';
$strStructPropose = 'Ehdota taulun rakennetta';
$strStructure = 'Rakenne';
$strSubmit = 'Lähetä';
$strSuccess = 'SQL-lause on suoritettu';
$strSum = 'Summa';

$strTable = 'taulu ';
$strTableComments = 'Kommentoi taulua';
$strTableEmpty = 'Taulun nimi puuttuu!';
$strTableHasBeenDropped = 'Taulu %s on pudotettu';
$strTableHasBeenEmptied = 'Taulu %s on tyhjennetty';
$strTableHasBeenFlushed = 'Taulun %s välimuisti on tyhjennetty';
$strTableMaintenance = 'Taulun huolto';
$strTableStructure = 'Rakenne taululle';
$strTableType = 'Taulun muoto';
$strTables = '%s taulu(a)';
$strTextAreaLength = ' Pituudestaan johtuen<br /> tätä saraketta ei ehkä voi muokata ';
$strTheContent = 'Tiedoston sisältö on syötetty.';
$strTheContents = 'Tiedoston sisältö korvaa valitusta taulusta ne rivit, joissa on sama ensisijainen (primary) tai yksikäsitteinen (unique) avain kuin tiedoston riveissä.';
$strTheTerminator = 'Sarakkeiden erotin.';
$strTotal = 'yhteensä';
$strType = 'Tyyppi';

$strUncheckAll = 'Poista valinta kaikista';
$strUnique = 'Uniikki';
$strUnselectAll = 'Poista valinta kaikista';
$strUpdatePrivMessage = 'Käyttäjän %s käyttöoikeudet on päivitetty.';
$strUpdateProfile = 'Päivitä profiili:';
$strUpdateProfileMessage = 'Profiili on päivitetty.';
$strUpdateQuery = 'Päivitä lause';
$strUsage = 'Tila';
$strUseBackquotes = 'Laita taulujen ja sarakkeiden nimet lainausmerkkeihin';
$strUseTables = 'Käytä tauluja';
$strUser = 'Käyttäjä';
$strUserEmpty = 'Käyttäjän nimi puuttuu!';
$strUserName = 'Käyttäjänimi';
$strUsers = 'Käyttäjät';

$strValidateSQL = 'Tarkista SQL-lause';
$strValidatorError = 'SQL-validaattoria ei voitu käynnistää. Tarkista, että olet asentanut tarpeelliset PHP-laajennukset. Lisää tietoa löytyy %sdokumentaatiosta%s.';
$strValue = 'Arvo';
$strViewDump = 'Tee vedos (dump) taulusta';
$strViewDumpDB = 'Tee vedos (dump) tietokannasta';

$strWebServerUploadDirectory = 'palvelimen hakemisto tiedostojen siirtoa varten';
$strWebServerUploadDirectoryError = 'Valitsemaasi hakemistoa ei voitu käyttää tiedostojen siirtämiseen';
$strWelcome = 'Tervetuloa, toivottaa %s';
$strWithChecked = 'Valitut:';
$strWrongUser = 'Väärä käyttäjätunnus tai salasana. Pääsy kielletty.';

$strYes = 'Kyllä';

$strZip = '"zip-pakattu"';

$strImportDocSQL = 'Import docSQL Files';  //to translate
$strDataDict = 'Data Dictionary';  //to translate
$strPrint = 'Print';  //to translate
$strPHP40203 = 'You are using PHP 4.2.3, which has a serious bug with multi-byte strings (mbstring). See PHP bug report 19404. This version of PHP is not recommended for use with phpMyAdmin.';  //to translate
?>
