-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--

-- Server-Version: 10.1.38-MariaDB
-- PHP-Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";




CREATE TABLE `accounts` (
  `USERNAME` varchar(255) DEFAULT NULL,
  `PASSWORD` varchar(255) DEFAULT NULL,
  `EMAIL` varchar(255) DEFAULT NULL,
  `TOKEN` varchar(255) DEFAULT NULL,
  `SERVERRANK` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `news`
--

CREATE TABLE `news` (
  `ID` int(11) NOT NULL,
  `TITEL` varchar(255) DEFAULT NULL,
  `NEWS` varchar(5000) DEFAULT NULL,
  `CREATED_AT` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `news`
--

INSERT INTO `news` (`ID`, `TITEL`, `NEWS`, `CREATED_AT`) VALUES
(1, 'Test', 'Hallo Welt', '1570814685'),
(2, 'Das ist ein Test', 'Die dunkeln richtig anrufen stiefel gewesen war. Argerte zweimal schones was zur oha abwarts tod. Heut da sa orte neue weit. So gepflegt am erzahlen ri zuweilen aufgeben abziehen schlafen. Andres hat der begann gefegt ihr aussah ruhten. Aufgeben nebenaus se ei launisch wohlfeil brauerei gelernte te. En starke jedoch je warmer. Wei das labsal sie lachen sirach stunde ehe fruher. Ab gehabt einlud wirtin gebaut ri ku in. Alten gro nur zehen mut indem den adieu neben. \r\n\r\nWasserkrug arbeitsame vorsichtig lehrlingen mu pa wo. Schones beinahe uberall besorgt ja schlief ku. Fremde ja lassig ja ei kunste ri ganzen hockte grunde. Dann seid ku wu oder viel hast. Bestand frieden ja in hubsche. Schritt unrecht ort samstag dus. Neunzehn indessen da kurioses konntest se uberging hinunter in. Diese oha vor nicht bibel flick orten. Da ists ganz esse buch auch so en rand. \r\n\r\nBist darf gott eile se fu mund nach. Vollends sparlich je bi geschirr abziehen irgendwo sprachen. Zu frohlicher launischen mi mancherlei zaunpfahle sa. Weg mancherlei grashalden zueinander federdecke sog alt. Essen wo wo fu jetzt knopf ei. Alt freundes brauchen tut zuweilen geschirr wei gib. Schade hockte warmen unterm redete vor tod nur. So hatt sieh grob denn klar zwei du. Gerberei tod brauchst getrennt manchmal erschien gut geschirr. \r\n\r\nRuhmte mit morgen harten und als fraget selber ein. Jede frei en wohl da hals ihre. Dort eile muhe mu wahr habt dort ab es. Verwohnt ab betrubte hinabsah gefallts am er. Mir tun wachsamen schwarzes verharrte mannsbild nie gewandert ach. Angerufen wu geblieben es schranken um eintreten geheimnis. Du so im vergnugter verstehsts wasserkrug auskleiden. Landsleute fu wohlgefuhl verstehsts im zaunpfahle unsicherer. \r\n\r\nGern pa da uber kerl frei kaum um grad en. Hol bis euern habet gro viere hoher trost. Schnupfen das sag die aufraumen des plotzlich bettstatt. Tat hinuber mit kleines ein fingern das nachher unruhig. Gewandert er bekummert er uberhaupt vogelnest pa stadtchen. Eigentlich ubelnehmen vertreiben schuttelte em he wohlgefuhl dammerigen zu wo. Stillen des nun lichten gerbers langsam. Sa wanderer lampchen so arbeiter lauschte se. Indem du alten reden in deren am funfe um faden. Wunschte wo gerberei rabatten gesellen du konntest schmalen je so. \r\n\r\nKind ware ganz drin er gehe um teil mu. Warm las ein denk tag mude. Magdebett ten lieblinge sei kellnerin blo betrubtes verodeten turnhalle. Wie wind chen aber hell gut. Wasserkrug verbergend wir grundstuck vormittags arbeitsame zaunpfahle als. Regnet an da lassen in willst seinen volles ja. Hinunter nachsten konntest begehrte blattern leichter wo fu ku. \r\n\r\nSirach seiner langen stunde vielen husten tut wei. Arbeiter te nebenaus zu erschrak herunter blaulich schlafet. Horte empor da ob kuche leber alten haute. Kleines ist filzhut drunten gesicht grausam lebhaft geh. Flo wohnstube sag wir oha spazieren schleiche. Oben bi er rief hier in sind wo. In la kaum er trat gewu mund dich. Seiest besuch in gelang ri fraget sirach du. \r\n\r\nFischen wollten gut gar stunden. Ernst drauf stamm zum gluck gehts mir szene. Tal sprachen gerochen spateren getrennt kurioses aufstand auf blo das. Da schmales wanderer es achtzehn marschen la. Hof gegenden gelernte verwohnt mir leuchter vor halblaut zugvogel. Spielen es da lacheln he antwort seufzer mu. An bi einen jeden danke pfiff se. Ganzen es starke denkst im fragte hinten ku. Wette er neuen es weich alles glitt. \r\n\r\nEia schreibet zuschauen vorbeugte furchtete mir gestrigen schranken tag. Er en te brummte es stiefel raschen sagerei leuchte. Bangigkeit geheiratet handarbeit was lattenzaun todesfalle sag gab dachkammer. Landsleute ordentlich nur gut sah ungerechte her werkstatte. Gerber wiegte andern luftig ein und lebtag was hellen. Deren glitt nacht en ruhte pfiff er du. Verstehen her gegenteil schlanken wei nun. \r\n\r\nSchuchtern leuchtturm neidgefuhl la se dienstmagd im flusterton erkundigte. Fragen beeten werdet ordnen wochen oha loffel tod gar zur. Knabenhaft arbeitsame verdrossen mi sauberlich hinstellte flusterton he. Immer halbe blo pfiff stirn tal nadel wenns. Schlecht blaulich horchend zu erkannte du marschen. Schuttelte so er brotkugeln hereintrat. Auskleiden alt aufgespart abendsuppe vor. ', '1570815163');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `accounts`
--
ALTER TABLE `accounts`
  ADD UNIQUE KEY `USERNAME` (`USERNAME`);

--
-- Indizes für die Tabelle `news`
--
ALTER TABLE `news`
  ADD UNIQUE KEY `ID` (`ID`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `news`
--
ALTER TABLE `news`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
