<?php
/* $Id$ */

$charset = 'utf-8';
$allow_recoding = TRUE;
$text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)
$left_font_family = 'verdana, arial, helvetica, geneva, sans-serif';
$right_font_family = 'arial, helvetica, geneva, sans-serif';
$number_thousands_separator = ',';
$number_decimal_separator = '.';
// shortcuts for Byte, Kilo, Mega, Giga, Tera, Peta, Exa
$byteUnits = array('Baiti', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB');

$day_of_week = array('Püh', 'Esm', 'Tei', 'Kol', 'Nel', 'Ree', 'Lau');
$month = array('Jan', 'Veb', 'Mär', 'Apr', 'Mai', 'Jun', 'Jul', 'Aug', 'Sep', 'Okt', 'Nov', 'Det');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%d.%m.%Y kell %H:%M:%S';

$strAPrimaryKey = 'Primaarne võti lisati %s';
$strAccessDenied = 'Ligipääs keelatud';
$strAction = 'Tegevus';
$strAddDeleteColumn = 'Lisa/Kustuta välja veerud';
$strAddDeleteRow = 'Lisa/Kustuta kriteeriumirida';
$strAddNewField = 'Lisa uus väli';
$strAddPriv = 'Lisa uus privileeg';
$strAddPrivMessage = 'Te lisasite uue privileegi.';
$strAddSearchConditions = 'Lisa otsinguparameetrid ("where" lause sisu):';
$strAddToIndex = 'Lisa indeksisse &nbsp;%s&nbsp;rida(ead)';
$strAddUser = 'Lisa uus kasutaja';
$strAddUserMessage = 'Te lisasite uue kasutaja.';
$strAffectedRows = 'Mõjutatud read:';
$strAfter = 'Peale %s';
$strAfterInsertBack = 'Mine eelmisele lehele tagasi';
$strAfterInsertNewInsert = 'Lisa järgmine uus rida';
$strAll = 'Kõik';
$strAllTableSameWidth = 'kuva kõik tabelid sama laiusega?';
$strAlterOrderBy = 'Muuda tabeli sorteeringut';
$strAnIndex = 'Indeks lisati %s';
$strAnalyzeTable = 'Analüüsi tabelit';
$strAnd = 'ja';
$strAny = 'kõik';
$strAnyColumn = 'Kõik väljad';
$strAnyDatabase = 'Kõik andmebaasid';
$strAnyHost = 'Kõik masinad';
$strAnyTable = 'Kõik tabelid';
$strAnyUser = 'Kõik kasutajad';
$strAscending = 'Kasvav';
$strAtBeginningOfTable = 'Tabeli algusesse';
$strAtEndOfTable = 'Tabeli lõppu';
$strAttr = 'Parameetrid';

$strBack = 'Tagasi';
$strBeginCut = 'ALUSTA LÕIGET';
$strBeginRaw = 'ALUSTA PUHAST';
$strBinary = 'Binaarne';
$strBinaryDoNotEdit = 'Binaarne - ärge muutke';
$strBookmarkDeleted = 'Märgistus kustutati.';
$strBookmarkLabel = 'Nimetus';
$strBookmarkQuery = 'Märgistatud SQL päring';
$strBookmarkThis = 'Märgista see SQL päring';
$strBookmarkView = 'Vaata ainult';
$strBrowse = 'Vaata';
$strBzip = '"bzipitud"';

$strCantLoadMySQL = 'ei suutnud lugeda MySql laiendit,<br />palun kontrollige PHP konfiguratsiooni.';
$strCantLoadRecodeIconv = 'Ei suuda lugeda iconv või recode moodulit mida on vaja tähetabeli konvertimiseks, konfigureeriga php-d nii, et see sisaldaks antud mooduleid või keelake tähetabeli konvertimine phpMyAdminis.';
$strCantRenameIdxToPrimary = 'Ei suuda muuta indeksit PRIMAARSEKS!';
$strCantUseRecodeIconv = 'Ei suuda kasutada iconv-d või libiconvi või recode_string funktsiooni kuigi moodul on installitud Kontrollige oma php konfiguratsiooni.';
$strCardinality = 'Kasulikkus';
$strCarriage = 'Reavahetus: \\r';
$strChange = 'Muuda';
$strChangeDisplay = 'Vali väli mida kuvada';
$strChangePassword = 'Muuda parooli';
$strCharsetOfFile = 'Faili tähekodeering:';
$strCheckAll = 'Märgista kõik';
$strCheckDbPriv = 'Vaata andmebaasi privileege';
$strCheckTable = 'Kontrolli tabelit';
$strChoosePage = 'Palun valige leht muutmiseks';
$strColComFeat = 'Näitan veeru kommentaare';
$strColumn = 'Väli';
$strColumnNames = 'Väljade nimed';
$strComments = 'Kommentaarid';
$strCompleteInserts = 'Täispikk INSERT';
$strConfigFileError = 'phpMyAdmin ei suutnud lugeda Teie konfiguratsioonifaili!<br />See võib juhtuda kui php leiab parsemisvea selles või php ei leia antud faili üles.<br />Palun kutsuga konfiguratsioonifail välja otseselt kasutades linki allpool ja lugege php veateadet(eid) mis teile öeldakse. Enamustel juhtudel on kuskilt puudu ülakoma või semikoolon.<br />Kui Teile kuvatakse tühi leht on kõik korras.';
$strConfigureTableCoord = 'Palun seadke koordinaadid tabelile %s';
$strConfirm = 'Kas Te tõesti tahate seda teha?';
$strCookiesRequired = 'Küpsised(cookies) peavad alates sellest momendist lubatud olema.';
$strCopyTable = 'Kopeeri tabel (andmebaas<b>.</b>tabel):';
$strCopyTableOK = 'Tabel %s on kopeeritud andmebaasi %s.';
$strCreate = 'Loo';
$strCreateIndex = 'Loo indeks &nbsp;%s&nbsp;väljadest';
$strCreateIndexTopic = 'Loo uus indeks';
$strCreateNewDatabase = 'Loo uus andmebaas';
$strCreateNewTable = 'Loo uus tabel andmebaasi %s';
$strCreatePage = 'Loo uus leht';
$strCreatePdfFeat = 'PDF-ide tegemine';
$strCriteria = 'Kriteerium';

$strData = 'Andmed';
$strDataOnly = 'Ainult andmed';
$strDatabase = 'Andmebaas ';
$strDatabaseHasBeenDropped = 'Andmebaas %s kustutatud.';
$strDatabaseWildcard = 'Andmebaas (lühendid lubatud):';
$strDatabases = 'andmebaasid';
$strDatabasesStats = 'Andmebaaside statistika';
$strDefault = 'Vaikimisi';
$strDelete = 'Kustuta';
$strDeleteFailed = 'Kustutamine ebaõnnestus!';
$strDeleteUserMessage = 'Te kustutasite kasutaja %s.';
$strDeleted = 'Rida kustutatud';
$strDeletedRows = 'Kustuta read:';
$strDescending = 'Kahanev';
$strDisabled = 'Keelatud';
$strDisplay = 'Näita';
$strDisplayFeat = 'Kuva võimalused';
$strDisplayOrder = 'Näitamise järjekord:';
$strDisplayPDF = 'Näita PDF skeemi';
$strDoAQuery = 'Tee "päring näite järgi" (lühend: "%")';
$strDoYouReally = 'Kas te tõesti tahate ';
$strDocu = 'Dokumentatsioon';
$strDrop = 'Kustuta';
$strDropDB = 'Kustuta andmebaas ';
$strDropTable = 'Kustuta tabel';
$strDumpXRows = 'Päri %s rida alustades reast %s.';
$strDumpingData = 'Tabeli andmete salvestamine';
$strDynamic = 'dünaamiline';

$strEdit = 'Muuda';
$strEditPDFPages = 'Muuda PDF lehti';
$strEditPrivileges = 'Muuda privileege';
$strEffective = 'Efektiivne';
$strEmpty = 'Tühjenda';
$strEmptyResultSet = 'MySQL tagastas tühja tulemuse (s.t. null rida).';
$strEnabled = 'Lubatud';
$strEnd = 'Lõpp';
$strEndCut = 'LÕPETA LÕIGE';
$strEndRaw = 'LÕPETA PUHAS';
$strEnglishPrivileges = ' Märkus: MySQL privileegide nimed on ingliskeelsed ';
$strError = 'Viga';
$strExplain = 'Selete SQL-i';
$strExport = 'Ekspordi';
$strExportToXML = 'Ekspordi XML formaatt';
$strExtendedInserts = 'Laiendatud lisamised';
$strExtra = 'Ekstra';

$strField = 'Väli';
$strFieldHasBeenDropped = 'Väli %s kustutatud';
$strFields = 'Väljade arv';
$strFieldsEmpty = ' Väljade loetelu on tühi! ';
$strFieldsEnclosedBy = 'Väljad ümbritsetud';
$strFieldsEscapedBy = 'Väljad varjatud';
$strFieldsTerminatedBy = 'Väljad eraldatud';
$strFixed = 'parandatud';
$strFlushTable = 'Ühtlusta tabelid ("FLUSH")';
$strFormEmpty = 'Puuduv väärtus vormis !';
$strFormat = 'Formaat';
$strFullText = 'Täistekstid';
$strFunction = 'Funktsioon';

$strGenBy = 'Genereerija ';
$strGenTime = 'Tegemisaeg';
$strGeneralRelationFeat = 'Peamised seoste võimalused';
$strGo = 'Mine';
$strGrants = 'Õigused';
$strGzip = '"gzipitud"';

$strHasBeenAltered = 'on muudetud.';
$strHasBeenCreated = 'on loodud.';
$strHaveToShow = 'Te peate valima vähemalt ühe veeru kuvamiseks';
$strHome = 'Esileht';
$strHomepageOfficial = 'Ametlik phpMyAdmini koduleht';
$strHomepageSourceforge = 'Sourceforge phpMyAdmini allalaadimisleht';
$strHost = 'Masin';
$strHostEmpty = 'Masin on tühi!';

$strIdxFulltext = 'Täistekst';
$strIfYouWish = 'Kui soovite lugeda ainult mõningaid tabeli välju, sisestage komaga eraldatud väljade loetelu.';
$strIgnore = 'Ignoreeri';
$strImportDocSQL = 'docSQL failide importimine';
$strInUse = 'kasutusel';
$strIndex = 'Indeks';
$strIndexHasBeenDropped = 'Indeks %s kustutatud';
$strIndexName = 'Indeksi nimi&nbsp;:';
$strIndexType = 'Indeksi tüüp&nbsp;:';
$strIndexes = 'Indeksid';
$strInsecureMySQL = 'Teie konfiguratsioonifail sisaldab seadeid (root kasutaja ilma paroolita) mis vastab MySQL-i vaikimisi priviligeeritud kasutajale. Kui Teie MySQL-i server jookseb sellise seadega on ta avatud rünnakutele, soovitav on see turvaauk kiiresti parandada.';
$strInsert = 'Lisa';
$strInsertAsNewRow = 'Lisa uue reana';
$strInsertNewRow = 'Lisa uus rida';
$strInsertTextfiles = 'Lisa andmed tekstifailist tabelisse';
$strInsertedRows = 'Lisatud read:';
$strInstructions = 'sisestused';
$strInvalidName = '"%s" on reserveeritud sõna, te ei saa seda kasutada andmebaasi/tabeli/välja nimena.';

$strKeepPass = 'Ärge muutke parooli';
$strKeyname = 'Võtme nimi';
$strKill = 'Tapa';

$strLength = 'Pikkus';
$strLengthSet = 'Pikkus/Väärtused*';
$strLimitNumRows = 'Ridade arv lehel';
$strLineFeed = 'Realõpp: \\n';
$strLines = 'Read';
$strLinesTerminatedBy = 'Read lõpetatud';
$strLinkNotFound = 'Linki ei leitud';
$strLinksTo = 'Lingib ';
$strLocationTextfile = 'tekstifaili asukoht';
$strLogPassword = 'Parool:';
$strLogUsername = 'Kasutajanimi:';
$strLogin = 'Sisselogimine';
$strLogout = 'Logi välja';

$strMissingBracket = 'Puuduv ülakoma';
$strModifications = 'Muutused salvestatud';
$strModify = 'Muuda';
$strModifyIndexTopic = 'Muude indeksit';
$strMoveTable = 'Vii tabel üle (andmebaas<b>.</b>tabel):';
$strMoveTableOK = 'Tabel %s viidu üle andmebaasi %s.';
$strMySQLCharset = 'MySQLi tähetabel';
$strMySQLReloaded = 'MySQL uuesti laetud.';
$strMySQLSaid = 'MySQL ütles: ';
$strMySQLServerProcess = 'MySQL %pma_s1% jookseb %pma_s2%\'is - %pma_s3%';
$strMySQLShowProcess = 'Näita protsesse';
$strMySQLShowStatus = 'Näita MySQL-i jooksvat informatsiooni';
$strMySQLShowVars = 'Näita MySQL süsteemseid muutujaid';

$strName = 'Nimi';
$strNext = 'Järgmine';
$strNo = 'Ei';
$strNoDatabases = 'Pole andmebaase';
$strNoDescription = 'pole kirjeldust';
$strNoDropDatabases = '"DROP DATABASE" käsud keelatud.';
$strNoExplain = 'Jäta SQL-i seletamine vahele';
$strNoFrames = 'phpMyAdmin on sõbralikum <b>frame toetava</b> browseriga.';
$strNoIndex = 'Indeksit pole defineeritud!';
$strNoIndexPartsDefined = 'Indeksi osad pole defineeritud!';
$strNoModification = 'Ei muudetud';
$strNoPassword = 'Ilma paroolita';
$strNoPhp = 'ilma PHP koodita';
$strNoPrivileges = 'Ei oma ühtegi privileegi';
$strNoQuery = 'Ühtegi SQL päringut!';
$strNoRights = 'Teil pole piisavalt õigusi, et hetkel siin olla!';
$strNoTablesFound = 'Andmebaasist ei leitud tabeleid.';
$strNoUsersFound = 'Ei leitud ühtegi kasutajat.';
$strNoValidateSQL = 'Jäta SQL-i kontroll vahele';
$strNone = 'Pole';
$strNotNumber = 'See pole number!';
$strNotOK = 'Ei ole korras';
$strNotSet = '<b>%s</b> tabelit ei leitud või ei eksisteeri %s';
$strNotValidNumber = ' pole korrektne reanumber!';
$strNull = 'Null';
$strNumSearchResultsInTable = '%s vaste(t) tabelis <i>%s</i>';
$strNumSearchResultsTotal = '<b>Kokku:</b> <i>%s</i> vaste(t)';

$strOK = 'Korras';
$strOftenQuotation = 'Kasuta jutumärke koguaeg. VALIKULISELT tähendab, et ainult char ja varchar tüüpi väljad ümbritsetakse määratud märkidega.';
$strOperations = 'Tegevused';
$strOptimizeTable = 'Optimiseeri tabelit';
$strOptionalControls = 'Mittekohustuslik. Kontrollib kuidas kirjutada või lugeda erimärke.';
$strOptionally = 'VALIKULISELT';
$strOptions = 'Valikud';
$strOr = 'või';
$strOverhead = 'Ülejääv';

$strPHPVersion = 'PHP versioon';
$strPageNumber = 'Lehenumber:';
$strPartialText = 'Lühendatud tekstid';
$strPassword = 'Parool';
$strPasswordEmpty = 'Parool on tühi!';
$strPasswordNotSame = 'Paroolid ei ühti!';
$strPdfDbSchema = 'Andmebaasi "%s" skeem - lehekülg %s';
$strPdfInvalidPageNum = 'Defineerimata PDF lehe number!';
$strPdfInvalidTblName = '"%s" tabel ei eksisteeri!';
$strPdfNoTables = 'Pole tabeleid';
$strPhp = 'Loo PHP kood';
$strPmaDocumentation = 'phpMyAdmini dokumentatsioon';
$strPmaUriError = '<tt>$cfg[\'PmaAbsoluteUri\']</tt> konstant peab teie konfiguratsioonifailis määratud olema!';
$strPos1 = 'Algus';
$strPrevious = 'Eelmine';
$strPrimary = 'Primaarne';
$strPrimaryKey = 'Primaarne võti';
$strPrimaryKeyHasBeenDropped = 'Primaarne võti kustutatud';
$strPrimaryKeyName = 'Primaarse võtme nimi peab olema... PRIMARY!';
$strPrimaryKeyWarning = '("PRIMARY" <b>peab</b> olema ja <b>ainult</b> olema primaarse võtme nimi!)';
$strPrintView = 'Trükivaade';
$strPrivileges = 'Privileegid';
$strProperties = 'Seaded';
$strPutColNames = 'Pange väljade nimed esimesse ritta';

$strQBE = 'Päring näite järgi';
$strQBEDel = 'Del';
$strQBEIns = 'Ins';
$strQueryOnDb = 'SQL-päring andmebaasist <b>%s</b>:';

$strReType = 'Sisesta uuesti';
$strRecords = 'Kirjeid';
$strReferentialIntegrity = 'Kontrolli pärinevust:';
$strRelationNotWorking = 'Lisavõimalused töötamiseks lingitud tabelitega on deaktiveeritud. Et lugeda miks see nii on, vajutage %ssiia%s.';
$strRelationView = 'Pärinevuse vaade';
$strReloadFailed = 'MySQL taaslaadimine ebaõnnestus.';
$strReloadMySQL = 'Taaslae MySQL';
$strRememberReload = 'Ärge unustage serverit taaslaadida.';
$strRenameTable = 'Nimeta tabel ümber';
$strRenameTableOK = 'Tabel %s on ümber nimetatud %s';
$strRepairTable = 'Paranda tabelit';
$strReplace = 'Asenda';
$strReplaceTable = 'Asenda tabeli andmed failiga';
$strReset = 'Tühista';
$strRevoke = 'Võta tagasi';
$strRevokeGrant = 'Võta nõudmine tagasi';
$strRevokeGrantMessage = 'Te võtsite privileegi andmise %s -le tagasi';
$strRevokeMessage = 'Te võtsite tagasi privileegid %s-lt';
$strRevokePriv = 'Võtke privileegid';
$strRowLength = 'Rea pikkus';
$strRowSize = ' rea suurus ';
$strRows = 'Ridu';
$strRowsFrom = 'read alates';
$strRowsModeHorizontal = 'horisontaalselt';
$strRowsModeOptions = 'näita %s and korda pealkirju iga %s järel';
$strRowsModeVertical = 'vertikaalselt';
$strRowsStatistic = 'Rea statistika';
$strRunQuery = 'Lae päring';
$strRunSQLQuery = 'Päri SQL päring(uid) andmebaasist %s';
$strRunning = 'jookseb masinas %s';

$strSQL = 'SQL';
$strSQLParserBugMessage = 'On võimalus, et te leidsite vea SQL parseris. Palun kontrollige oma päringut täpsemalt ja kontrollige, et jutumärgid/ülakomad oleks korrektselt lõpetatud. Veel on võimalik, et te loete sisse faili kus on binaarne info väljaspool varjestatud tekstiala. Samuti võiksite te proovida oma päringut MySQLi käsureal. MySQLi viga väljastatakse päringu all, kui seal tõesti on mõni viga, siis see võib aidata teil leida vea algpõhjuseid. Kui teil on peale seda ikka veel probleeme või kui mu parser keeldub töötamast ning MySQL käsurida töötab, siis palun vähendage oma päringuid üksiku päringuni, mis põhjustab probleeme ja sisestage vea raport koos viga põhjustanud päringuga LÕIGET sektsioonis allpool:';
$strSQLParserUserError = 'Tundub, et teie SQL päringus on viga. MySQLi serveri error peaks ilmuma allpool, kui seal on midagi, siis peaks see teil aitama leia vea põhjust.';
$strSQLQuery = 'SQL-päring';
$strSQLResult = 'SQL tulemus';
$strSQPBugInvalidIdentifer = 'Vigane identifikaator';
$strSQPBugUnclosedQuote = 'Sulgemata jutumärk/ülakoma';
$strSQPBugUnknownPunctuation = 'Tundmatu suunav tekst';
$strSave = 'Salvesta';
$strScaleFactorSmall = 'Skalaarfaktor on liiga väike, et skeem mahuks ühele lehele.';
$strSearch = 'Otsi';
$strSearchFormTitle = 'Otsi andmebaasist';
$strSearchInTables = 'Otsi tabeli(te)st:';
$strSearchNeedle = 'Sõna(d) või väärtus(ed) otsinguks (lühend: "%"):';
$strSearchOption1 = 'vähemalt üks sõnadest';
$strSearchOption2 = 'kõik sõnadest';
$strSearchOption3 = 'täpne fraas';
$strSearchOption4 = 'regulaaravaldisena';
$strSearchResultsFor = 'Otsingu tulemused "<i>%s</i>" %s:';
$strSearchType = 'Leia:';
$strSelect = 'Vali';
$strSelectADb = 'Valige andmebaas';
$strSelectAll = 'Märgista kõik';
$strSelectFields = 'Vali väljad (vähemalt üks):';
$strSelectNumRows = 'päringus';
$strSelectTables = 'Vali tabelid';
$strSend = 'Salvesta failina';
$strServer = 'Server %s';
$strServerChoice = 'Serveri valik';
$strServerVersion = 'Serveri versioon';
$strSetEnumVal = 'Kui välja tüüp on "enum" või "set", palun sisestage väärtused kasutades järgmist paigutust: \'a\',\'b\',\'c\'...<br />Kui te peate lisama kaldkriipsu ("\") või ülakoma ("\'") sinna paigutusse, varjestage see tagurpidi kaldkriipsuga (näiteks \'\\\\xyz\' või \'a\\\'b\').';
$strShow = 'Näita';
$strShowAll = 'Näita kõiki';
$strShowColor = 'Näita värvi';
$strShowCols = 'Näita välju';
$strShowGrid = 'Näita võrgustiku';
$strShowPHPInfo = 'Näita PHP informatsiooni';
$strShowTableDimension = 'Näita tabelite dimensiooni';
$strShowTables = 'Näita tabeleid';
$strShowThisQuery = ' Näita päringut siin uuesti ';
$strShowingRecords = 'Näita ridu';
$strSingly = '(üksikult)';
$strSize = 'Suurus';
$strSort = 'Sorteeri';
$strSpaceUsage = 'Ruumivõtt';
$strSplitWordsWithSpace = 'Sõnad on eraldatud tühikuga (" ").';
$strStatement = 'Parameerid';
$strStrucCSV = 'CSV andmed';
$strStrucData = 'Struktuur ja andmed';
$strStrucDrop = 'Lisa \'drop table\'';
$strStrucExcelCSV = 'CSV Ms Exceli jaoks';
$strStrucOnly = 'Ainult struktuur';
$strStructPropose = 'Soovita tabeli struktuuri';
$strStructure = 'Struktuur';
$strSubmit = 'Vali';
$strSuccess = 'Teie SQL päring täideti edukalt';
$strSum = 'Summa';

$strTable = 'tabel ';
$strTableComments = 'Tabeli kommentaarid';
$strTableEmpty = 'Tabeli nimi on tühi!';
$strTableHasBeenDropped = 'Tabel %s kustutatud';
$strTableHasBeenEmptied = 'Tabel %s tühjendatud';
$strTableHasBeenFlushed = 'Tabel %s ühtlustatud';
$strTableMaintenance = 'Tabeli hooldus';
$strTableStructure = 'Struktuur tabelile';
$strTableType = 'Tabeli tüüp';
$strTables = '%s tabel(it)';
$strTextAreaLength = ' Oma suuruse tõttu<br /> võib see väli olla mittemuudetav ';
$strTheContent = 'Teie faili sisu on lisatud.';
$strTheContents = 'Faili sisu asendab valitud tabeli sisu ridades kus on identsed primaarsed või unikaalsed võtmed.';
$strTheTerminator = 'Väljade eraldaja.';
$strTotal = 'kokku';
$strType = 'Tüüp';

$strUncheckAll = 'Puhasta kõik';
$strUnique = 'Unikaalne';
$strUnselectAll = 'Puhasta kõik';
$strUpdatePrivMessage = 'Te uuendasite privileege %s-l.';
$strUpdateProfile = 'Uuendatav profiil:';
$strUpdateProfileMessage = 'Profiil uuendatud.';
$strUpdateQuery = 'Uuenda päringut';
$strUsage = 'Kasutus';
$strUseBackquotes = 'Kasutage tagurpidi kaldkriipse tabelites või tabelinimedes';
$strUseTables = 'Kasuta tabeleid';
$strUser = 'Kasutaja';
$strUserEmpty = 'Kasutajanimi on tühi!';
$strUserName = 'Kasutajanimi';
$strUsers = 'Kasutajad';

$strValidateSQL = 'Kontrolli SQL-i';
$strValidatorError = 'SQL-i valideerijat ei suudetud avada. Palun kontrollige, et te olete installinud vastavad php moodulid nagu on kirjeldatud %sdokumentatsioonis%s.';
$strValue = 'Väärtus';
$strViewDump = 'Vaata tabeli väljundit(skeemi)';
$strViewDumpDB = 'Vaata andmebaasi väljundit (skeemi)';

$strWebServerUploadDirectory = 'webiserveri üleslaadimiskataloogi';
$strWebServerUploadDirectoryError = 'Kataloog mille Te üleslaadimiseks sättisite ei ole ligipääsetav';
$strWelcome = 'Tere tulemast %s';
$strWithChecked = 'Valitud:';
$strWrongUser = 'Vale kasutajanimi/parool. Ligipääd keelatud.';

$strYes = 'Jah';

$strZip = '"zipitud"';
// To translate

$strDataDict = 'Data Dictionary';  //to translate
$strPrint = 'Print';  //to translate
$strPHP40203 = 'You are using PHP 4.2.3, which has a serious bug with multi-byte strings (mbstring). See PHP bug report 19404. This version of PHP is not recommended for use with phpMyAdmin.';  //to translate
?>
