<?php
/*
*------------------------------phpMyBitTorrent V 2.0.4-------------------------*
*--- The Ultimate BitTorrent Tracker and BMS (Bittorrent Management System) ---*
*--------------   Created By Antonio Anzivino (aka DJ Echelon)   --------------*
*-------------               http://www.p2pmania.it               -------------*
*------------ Based on the Bit Torrent Protocol made by Bram Cohen ------------*
*-------------              http://www.bittorrent.com             -------------*
*------------------------------------------------------------------------------*
*------------------------------------------------------------------------------*
*--   This program is free software; you can redistribute it and/or modify   --*
*--   it under the terms of the GNU General Public License as published by   --*
*--   the Free Software Foundation; either version 2 of the License, or      --*
*--   (at your option) any later version.                                    --*
*--                                                                          --*
*--   This program is distributed in the hope that it will be useful,        --*
*--   but WITHOUT ANY WARRANTY; without even the implied warranty of         --*
*--   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the          --*
*--   GNU General Public License for more details.                           --*
*--                                                                          --*
*--   You should have received a copy of the GNU General Public License      --*
*--   along with this program; if not, write to the Free Software            --*
*-- Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307 USA --*
*--                                                                          --*
*------------------------------------------------------------------------------*
*------              �2009 phpMyBitTorrent Development Team              ------*
*-----------               http://phpmybittorrent.com               -----------*
*------------------------------------------------------------------------------*
*-----------------   Sunday, September 14, 2008 9:05 PM   ---------------------*
*/


//if (!defined('IN_PMBT')) die ("You can't access this file directly");

define("_LOCALE","en_UK");

//Site News

define("_btsitenews","<h3>Nyheter</h3>");
define("_btstart","Thank you for choosing phpMyBitTorrent<br /><br />
phpMyBitTorrent features a full-fledged BitTorrent Tracker written in PHP, external torrent indexing, DHT, Compact Announce, Alternate Links (eD2K, Magnet), HTTP-Basic Authentication, Passkey Authentication, and Embedded HTML Editor, Mass Torrent Upload and much more. You can Remove or Replace this News Item in Administration > Settings");
//Unatherized
define("_btnoautherizeddownload","<p>Du har inte till�telse att ladda ner f�r tillf�llet</p>");
define("_btnoautherized","Du har inte till�telse att se sidan **page** ");
define("_btnoautherized_noedit","Du kan inte editera den h�r torrenten");
define("_btnoautherized_nodelete","Du kan inte radera den h�r torrenten");
define("_btnoautherized_delete_off","Du kan inte radera det h�r erbjudandet");
define("_btnoautherized_ml","Du har inte till�telse att se medlemslistan");
//Search Cloud
define("_btsearchcloud","S�kmoln");
define("_btsearchcloudexplain","Popul�ra s�kningar. A random selection of people's search terms, weighed by frequency.");
//Donations Block
define("_btdonations","Donationer");
define("_btdonationsgoal","<h3>Donationsm�l:</h3>");
define("_btdonationscollected","<h3>Insamlat:</h3>");
define("_btdonationsprogress","Donationsframsteg");
define("_btdonationsdonate","DONERA");

//COMPLAINTS
function getcomplaints() {
        return Array(0=>"Lagligt Inneh�ll, Bra Kvalite",1=>"Falskt eller Korrupt",2=>"Copyrights�vertr�delse",3=>"Pornografiskt Inneh�ll",4=>"Barnporr",5=>"St�tande Inneh�ll",6=>"Inneh�ll relaterat till olaglig aktivitet");
}

//NewTorrent shout
define("_btuplshout","Hej, jag har precis lagt upp [url=".$siteurl."/details.php?id=**id**][b]**name**[/b][/url]. H�ll Till Godo!");
define("_btnewtsh","Tjata ut nya torrents i tjatbox");
define("_btnewshex","Klicka i rutan om du vill att din upload ska tjatas ut i tjatboxen.");

//CLASSI
define("_btclassuser","User");
define("_btclasspremium","Premium User");
define("_btclassmoderator","Moderator");
define("_btclassadmin","Administrator");

//ACCESSO NEGATO
define("_btaccdenied","Tilltr�de Nekat");
define("_btdenuser","Platsen kan endast n�s av <b>Registrerade anv�ndare</b>.<br>Uppge dina uppgifter igen. Om du inte har reggat dig �n, kan du <a href=\"user.php?op=register\">g�ra det h�r</a> gratis.");
define("_btdenpremium","Platsen kan endast n�s av<b>Premium Anv�ndare</b>.<br>");
define("_btdenpremium1","Uppge dina uppgifter och f�rs�k igen. Om du inte har ett Premiumkonto, kontakta Staff f�r detaljer.");
define("_btdenpremium2","Du har ej tilltr�de till Premium-tj�nsten. Kontakta Staff f�r detaljer.");
define("_btdenadmin","Platsen kan endast n�s av <b>Administrat�rer</b>.<br>");
define("_btdenadmin1","Om du �r Administrat�r s� uppge dina uppgifter nu, annars ber vi dig l�mna den h�r sidan och tar dig
<a href=\"index.php\">Hem</a>.");
define("_btdenadmin2","Du har inte Adminr�ttigheter. Logga in med r�tt uppgifter eller l�mna sidan och ta dig <a href=\"index.php\">Hem</a>.");
define("_btbannedmsg","Du har bannats: <b>**reason**</b>");
define("_btmissing","Saknas formul�rdata.");
define("_btprivelages","Du har ej r�ttigheterna.");
define("_bt_not_authorized","Ej Till�ten!");
define("_btokay","Okej");

//GENERICS
define("_bt_redirect","<Omdirigera");
define("_btgoback1","Tillbaka");
define("_bterror","Fel");
define("_btsorry","F�rl�t");
define("_DATESTRING","%A, %B %d %Y @ %T %Z");
define("_btpassword","L�senord");
define("_btusername","Anv�ndarnamn");
define("_btremember","Kom ih�g mig");
define("_btsecuritycode","S�kerhetskod");
define("_btusermenu","Anv�ndarmeny");
define("_btmainmenu","Huvudmeny");
define("_btgenerror","phpMyBitTorrent Error");
define("_btmenu","Meny");
define("_btumenu","Anv�ndarmeny");
define("_btsyndicate","Syndikation");
define("_btlegend","Legend");
define("_btircchat","IRC Chat");
define("_btchatnotenabled","IRC Chat �r INTE aktiverad.");
define("_btlostpassword","F�rlorat l�senordet?");
define("_btmakepoll","Omr�stning");

//EMAIL SPELLING
define("_at"," at ");
define("_dot"," dot ");

//SQL ERRORS
define("_btsqlerror1","Error Executing SQL Query ");
define("_btsqlerror2","Error ID: ");
define("_btsqlerror3","Error Message: ");

//HTTP ERRORS
define("_http400errttl","HTTP 400 Error - Bad Request");
define("_http400errtxt","A 400 Error Occurred while Processing Your Request.\n
Please check your Browser Settings and try again Accessing the Requested Page.\n
Contact **email** if you're having problems.");
define("_http401errttl","HTTP 401 Error - Access Denied");
define("_http401errtxt","A 401 HTTP Error occurred while processing your request.<br>
You can't Access the Requested Page because you are NOT Authorized.<br>
Please provide your Access Credentials, if you have any.<br>
Contact **email** if you're having problems.");
define("_http403errttl","HTTP 403 Error - Forbidden");
define("_http403errtxt","A 403 HTTP Error Occurred while Processing Your Request.<br>
You can't Access the Requested Page because the Server Configuration doesn't allow you to.<br>
Please check carefully the URL Address on your Browser, and correct it if needed.<br>
Contact **email** if you're having problems.");
define("_http404errttl","HTTP 404 Error - Not Found");
define("_http404errtxt","A 404 HTTP Error Occurred while Processing Your Request.<br>
The Requested Page Does Not Exist.<br>
Please check the URL in your Browser carefully, and correct it if needed.<br>
Contact **email** if you're having problems.");
define("_http500errttl","HTTP 500 Error - Internal Server Error");
define("_http500errtxt","A 500 HTTP Error Occurred while Processing Your Request.<br>
An error Occurred while Processing Your Data.<br>
Detailed info can be found in the Server Logs.<br>
Please send a detailed report about this to **email**");

//USER BLOCK
define("_btyoureseeding","Torrents du seedar");
define("_btyoureleeching","Torrents du leechar");
define("_btuserstats","Anv�ndarstatistik");
define("_bttotusers","Reggade Anv�ndare:");
define("_btlastuser","Senast Reggade:");
define("_bttorrents","Tillg�ngliga Torrents:");
define("_bttotshare","Total Utdelning:");
define("_bttotpeers","Anslutna Peers:");
define("_bttotseed","Totalt Antal Seeders:");
define("_bttotleech","Totalt Antal Peers:");

//ViewSnatch


//TESTI CHE COMPAIONO IN USER.PHP
define("_btregwelcome","<P align=\"center\">V�lkommen!</P>
<P>Registrera dig f�r ett konto. D� f�r du tillg�ng till sidan, och det tar bara n�gra minuter. V�lj ett anv�ndarnamn och ett l�senord, och en giltig mailadress. Inom n�gra minuter f�r du ett mail, f�r att bekr�fta ditt konto.</P>");
define("_btreggfxcheck","<P align=\"center\"> Ange s�kerhetskoden (prevents Bots from Registering).<BR>Kontakta **email** om du har problem med koden.</P>");
define("_btemailaddress","Email");
define("_btpasswd","L�senord (5 tecken minimum)");
define("_btpasswd2","Bekr�fta L�senord");
define("_btsubmit","Registrera");
define("_btreset","Avbryt");
define("_btdisclaimer","Villkor och Best�mmelser:");
define("_btdisclaccept","Jag Godtar");
define("_btdisclrefuse","Jag Godtar Inte ");
define("_btgfxcode","S�kerhetskod");
define("_btsignuperror","Registreringsfel");
define("_bterruserexists","Anv�ndarnamn Upptaget.");
define("_btfakemail","Ogiltig Mailadress.");
define("_bterremailexists","Mailadressen du angav �r redan reggad. Vill du �terst�lla ditt l�senord? Klicka <a href=\"user.php?op=lostpassword\">H�R</a>");
define("_btpasswnotsame","L�senorden du angav �r inte identiska");
define("_bttooshortpass","Angivet l�senord �r f�r kort. Minsta l�ngd �r 5.");
define("_bterrcode","Felaktig S�kerhetskod");
define("_btdisclerror","Du M�STE ACCEPTERA v�ra Villkor f�r att kunna regga dig.");
define("_btgoback","G� tillbaka och kontrollera blanketten");
define("_btregcomplete","Reggning snart klar. Du har 24h p� dig att bekr�fta reggningen. Om du inte f�r reggningsmailet, kontrollera dina angivna uppgifter. F�r du problem ta kontakt p�, **email**");
define("_bterrusernamenotset","Anv�ndarnamn ej angivet.");
define("_bterrkeynotset","Aktiveringsnyckel ej angiven");
define("_bterrusernotexists","Anv�ndarnamnet existerar ej.");
define("_bterrinvalidactkey","Aktiveringsnyckel ej korrekt.");
define("_btuseralreadyactive","Anv�ndaren �r redan aktiv. Ingen mer aktivering beh�vs");
define("_btacterror","Aktiveringsfel");
define("_btactcomplete","Aktivering Klar. Ditt konto �r nu permanent aktiverat. Nu kan du anv�nda v�ra tj�nster genom att
logga in med dina uppgifter. Ha en trevlig stund.");
define("_btusrpwdnotset","Anv�ndarnamn eller L�sen ej angivet.");
define("_bterremailnotset","Mailadress ej angiven.");
define("_btuserpasswrong","Fel Anv�ndarnamn eller L�senord!!");
define("_btuserinactive","Anv�ndare reggad men EJ aktiverad!!");
define("_btloginsuccessful","Lyckad Inloggning. Ha en trevlig vistelse!");
define("_btlogoutsuccessful","Lyckad Utloggning.");
define("_btusernoexist","Anv�ndaren du angav existerar ej.");
define("_btuserprofile","Anv�ndarpanel");
define("_btedituserprofile","Editera Profil");
define("_btusertorrents","Mina Torrents");
define("_btcompletename","Fullst�ndigt Namn");
define("_btclass","Niv�");
define("_btclassbanned","Bannad!");
define("_btregistered","Registrerad");
define("_btavatar","Avatar");
define("_btcontacts","Kontakter");
define("_btnewavatargallery","Ny Avatar fr�n Galleriet");
define("_btnewavatarupload","Ladda Upp Ny Avatar");
define("_btinvalidimagefile","Ogiltig Bildfil");
define("_btavatartoobig","Otill�ten Bildstorlek");
define("_btlostpasswordintro","Om du har f�rlorat ditt l�sen, kan du �terf� tillg�ng till ditt konto genom att ange ditt anv�ndarnamn och ett NYTT l�senord.<br />
Ett mail kommer skickas till din reggade mail. Om du inte f�r mailet, kontrollera ditt Spam Filter.");
define("_btlostpasswordcheckmail","Ett meddelande har skickats till din mail med en l�nk. Klicka p� l�nken f�r att bekr�fta ditt nya l�senord.");
define("_btlostpwdinvalid","Ogiltig Kod eller Anv�ndarID.");
define("_btlostpwdcomplete","L�senord �ndrat. Nu kan du logga in med det nya l�senordet.");
define("_btdeluser","Kontoradering");
define("_btdeluserwarning","<b>VARNING</b>: Du �r p� v�g att radera ditt konto permanent. Du kan regga om dig med ditt gamla anv�ndarnamn efter raderingen.");
define("_btdeluserwarningadm","<b>VARNING</b>: Du �r p� v�g att permanent radera **user**'s konto. Du kan regga om dig med samma namn igen efter raderingen.");
define("_btaccountdeleted","Konto Raderat");
define("_btconfirmdelete","Bekr�fta Radering");
define("_btuserdelete","Radera Konto");
define("_btuserban","Banna Konto");
define("_btuserban_shout","Du har inte tillg�ng till Shout banning");
define("_btuserban_shoutban","Shout Banning");
define("_btuserban_shoutbanned","Anv�ndare �r bannad fr�n ShoutBoxen");
define("_btuserban_hnr","Anv�ndare har blivit nergraderad f�r HitNRun");
define("_btuserban_shoutunban","Anv�ndare har blivit unbanned fr�n ShoutBoxen");
define("_btusershout_welcome","/notis :V�lkomna: V�r nyaste medlem ");
define("_btuserban_userban","Anv�ndare �r Bannad, radera ej");
define("_btuser_edit","Du kan inte editera den h�r personen");

//USER/EDITPROFILE.PHP
define("_btnewpassword","Nytt L�senord<br />(L�mna or�rt om du inte vill �ndra)");
define("_btnewpasswordconfirm","Bekr�fta nytt l�senord");
define("_btaol","AOL Instant Messenger");
define("_bticq","ICQ");
define("_btjabber","Jabber IM");
define("_btmsn","MSN Messenger");
define("_btskype","Skype");
define("_btyim","Yahoo! Instant Messenger");
define("_btacceptmail","Acceptera mail fr�n andra anv�ndare");
define("_btcustomlanguage","Spr�k");
define("_btaccountstatus","Kontostatus");
define("_btaccountstatusexplain","S�tt anv�ndare som Aktiv/Inaktiv. Varning! Att s�tta en anv�ndare som reggat sig f�r mindre �n 48h sedan som INAKTIV kommer radera dess konto.");
define("_btaccountactive","Aktiv");
define("_btaccountinactive","Inaktiv");
define("_btcustomtheme","Tema");
define("_btdefault","Standard");
define("_btchooseavatar","V�lj Avatar");
define("_btusepasskey","Anv�nd Passkey");
define("_btpasskeyexplain","Det h�r valet till�ter dig att ladda ner torrents med en personlig s�kerhetskod.<br />
Med den h�r nya klienten, beh�ver du inte l�ngre logga in p� trackern med l�sen och anv�ndarnamn f�r att din ratio ska uppdateras f�r interna torrents.<br />
En personlig kod s�tts automatiskt till den .torrent fil du laddar ner, f�r godk�nnas av trackern.<br />
<b>Varning</b>: Dela inte ut .torrents med aktiv Passkey! Otill�tna anv�ndare, kan anv�nda dem utan att logga in, och kan dp p�verka din ratio, vilket kan minska din till�tna nerladdning p� trackern.<br />
Ifall en .torrent hamnar i fel h�nder, kan du �terst�lla din Passkey.");
define("_btresetpasskey","�terst�lla Passkey");
define("_btresetpasskeywarning","<b>Varning</b>: alla torrents du laddat ner tills nu kommer INTE var giltiga l�ngre!");
define("_btprofilesaved","Lyckad �ndring av profil!");
define("_btaccesslevel","Niv�tillg�ng");
define("_btdeleteaccount","Radera Konto");

//TESTI CHE COMPAIONO IN INCLUDE/BITTORRENT.PHP
define("_btindex","Index ");
define("_bttorrentupload","Torrentuppladdning");
define("_btupload","Uppladdning");
define("_btlogin","Inloggning");
define("_btlogout","Utloggning");
define("_btsignup","Registrera");
define("_btpersonal","Dina Torrents");
define("_btpm","Privata PM");
define("_btadmod","Moderator");
define("_btadmin","Administration");
define("_btrulez","Regler");
define("_btforums","Forum");
define("_bthelp","Hj�lp");
define("_btadvinst","Installera BitTorrent eller Shareaza f�r nerladdning");
define("_btaccessden","Tillg�ng nekad. Nerladdning kr�ver <A href=\"user.php?op=register\">Registrering</a>");
define("_btlegenda","Hj�lp med funktioner och teckenf�rklaringar");
define("_btyourfilext","Din Fil, Extern Tracker");
define("_btfile","fil(er)");
define("_btexternal","Extern Tracker");
define("_btyourfile","Din Fil");
define("_btsticky","Klistrad");
define("_btauthforreq","Befogenhet f�r Request");
define("_btauthreq","Befogenhet Request");
define("_btdown","Nerladdning");
define("_btunknown","Ok�nd");
define("_btrefresh","Uppdatering");
define("_btvisible","Synlig");
define("_btsd","SD");
define("_btlc","LC");
define("_bttt","TOT");
define("_btseedby","Torrents Jag Seedar");
define("_btleechby","Torrents Jag Leechar");
define("_btpersonalstats","Personlig Statistik");
define("_btgeneral","Allm�n");
define("_bthtml","HTML");
define("_btcategory","Kategorier");

//TESTI CHE COMPAIONO IN INDEX.PHP
define("_btinfituh","<p>Du har ".$user->invites." Invites</p>");
define("_btsendiv","Skicka en Invite");
define("_btinvites","Invites");
define("_btgames","Spel");
define("_btsedbs","SeedBonus:");
define("_btviewrqst","Visa Requester");
define("_btfaqs","FAQ'S");
define("_bttorofferd","Torrents Erbjudna");
define("_btmemlist","Medlemslista");
define("_btwelcomebk","V�lkommen Tillbaka");
define("_btwelcome","V�lkommen till $PlayMe");
define("_btneedseed","Torrents i behov av Seedning");
define("_btifyhhelpthem","Hj�lp g�rna till, om du har filerna p� din h�rddisk. Tackar �dmjukast!");
define("_btntnseeded","Inga torrents i behov av seedning");
define("_btsearch","S�k");
define("_btsearchname","S�k Torrents");
define("_btsearchfeed","S�kresultat");
define("_btin","i");
define("_btalltypes","Vad som helst");
define("_btactivetorrents","Aktiva Torrents");
define("_btitm","Inkludera D�da Torrents");
define("_btstm","Endast D�da Torrents");
define("_btgo","S�k!");
define("_btresfor","<i f�ljande Ordning :");
define("_btnotfound","<h2>Inga Resultat!</h2>\n<p>�ndra dina s�ktermer.</p>\n");
define("_btvoidcat","<h2>Kategorin �r Tom!</h2>");
define("_btorderby","I F�ljande Ordning");
define("_btinsdate","Datum");
define("_btname","Namn");
define("_btdim","Storlek");
define("_btnfile","Antal Filer");
define("_btevidence","Klistrad");
define("_btcomments","Betyg / Kommentarer");
define("_btvote","Betyg");
define("_btdownloaded","Nerladdad");
define("_btprivacy","Privat");
define("_bttotsorc","Totalt Antal Peers");
define("_btdesc","Nedstigande");
define("_btord","Stigande");
define("_btnosearch","<center><h2>S�k efter filerna du vill ladda ner</h2>Om du beh�ver hj�lp, fr�ga i Forumet; om du inte kan anv�nda Magnet:/eD2K: l�nkarna s� har du inte r�tt mjukvara<br>Vi p�minner om att filer �r Privata enligt reglerna, och det �r helt upp till den som delar ut om den personen vill dela med sig till andra. Det �r f�rbjudet att dela ut upphovsr�ttsliga verk, Pornografi, Barnporr, Rasistiskt material, Kr�nkande material eller annat som bryter mot lagen.<br></center>");
define("_bthelpfind","S�khj�lp");
define("_bttypeCAT","Kategori");
define("_bttypes","Kategorier");
define("_bttopsource","Nedladdningstoppen");
define("_btnotopsource","Det finns inga aktiva torrents nu");
define("_btnotseeder_noneed","Finns inga kritiska torrents nu");
define("_btnotseeder_desc","Om du har n�gon av filerna, seeda g�rna (share) s� personer som v�ntar kan ladda ner. Ladda ner .torrent, peka klienten mot m�lmappen som inneh�ller den kompletta filen, och det b�rjar seedas.<br>Tack f�r att du �r en riktig fildelare.</b>");
define("_btnoseedersontracker","Din torrent saknar seed!");
define("_btdeadtorrent","Det verkar som att <b>din torrent saknar seed</b>. Bed�mmningen kan vara korrekt, s� uppladdningen till�ts f�r nu, men <b>Moderatorerna kanske tar bort den senare</b>.<br>");
define("_bthelpindex","<p><a name=\"HJ�LP\"></a><a href='index_help.php'>Installera BitTorrent eller Shareaza f�r nerladdning</a>");
define("_btnet","Sv�rmh�lsa");
define("_btsource","Peers");
define("_bttorrent","Torrent");
define("_btview","Seen");
define("_bthits","Nerladdad");
define("_btsnatch","Komplett");
define("_btalternatesource","<b>Bara alternativa k�llor (Magnet/ed2K) tillg�ngliga</b>");
define("_btcantscrape","<b>Kan ej fastst�lla Peer Data</b>");
define("_bteasy","<b>V�lseedad</b>");
define("_btmedium","<b>Inte s� bra</b>");
define("_bthard","<b>D�ligt seedad/D�d</b>");
define("_btmisssearchkey","Saknar s�knyckel");
define("_btinfotracker","Vilka �r online?");
define("_btnouseronline","Finns inga reggade medlemmar Online");
define("_btonlineusers","Anv�ndare Online");
define("_btadvancedmode","Avancerat L�ge");
define("_btsimplemode","Normalt L�ge");
define("_btpagename","Bl�ddrar just nu");
define("_btloggedinfor","Inloggad i");
define("_jscriptconfirmtext","Du har ett NYTT PM, klicka OK f�r att n� din  PM Inbox.");
define("_newpm","Nytt PM");
define("_btpmwrote","&nbsp;skrev:");
define("_nonewpm","Inga Nya PMs");
define("_btbrowse","Bl�ddra");

//PMBT PAGES
define("_btpage_youtube.php","Tittar p� Trailers");
define("_btpage_outside.php","Adminomr�de");
define("_btpage_donate.php","Donationer");
define("_btpage_admin.php","Administration");
define("_btpage_chat.php","Chat");
define("_btpage_details.php","Torrentdetaljer");
define("_btpage_edit.php","Editera Torrent");
define("_btpage_index.php","Hem");
define("_btpage_modcp.php","Moderatorpanel");
define("_btpage_viewsnatches.php","Tittar p� Torrent Snatch list");
define("_btpage_tickets.php","K�per en lotteribong");
define("_btpage_polloverview.php","Tittar p� omr�stningen");
define("_btpage_","Hem");
define("_btpage_mytorrents.php","TorrentPanel");
define("_btpage_search.php","S�k");
define("_btpage_upload.php","Ladda Upp");
define("_btpage_phpBB.php","Tittar i Forum");
define("_btpage_pm.php","Skickar PM");
define("_btpage_games.php","Tittar p� SpelPanelen");
define("_btpage_casino.php","Spelar i Casinot");
define("_btpage_arcade.php","Leker i Spelrummet");
define("_btpage_keno.php","Spelar Keno");
define("_btpage_blackjack.php","Spelar Black-Jack");
define("_btpage_viewrequests.php","Tittar p� Requester");
define("_btpage_faq.php","L�ser F.A.Q's");
define("_btpage_offers.php","Tittar p� Erbjudanden");
define("_btpage_offer.php","L�gger ett Erbjudande");
define("_btpage_requests.php","L�gger en Request");
define("_btpage_memberslist.php","Tittar i Medlemslistan");
define("_btpage_rules.php","L�ser sidans Regler");
define("_btpage_torrents.php","Tittar i Torrentlistan");
define("_btpage_user.php","Kikar i sin Anv�ndarpanel");
define("_btpage_flash.php","Spelar ett Spel");
define("_btpage_flashscores.php","Tittar p� Spelstatistik");
define("_btpage_flashscores2.php","Tittar p� Spelstatistik");
define("_btpage_mybonus.php","Spenderar Bonuspo�ng");
define("_btpage_mybonuse.php","Spenderar Bonuspo�ng");
define("_btpage_faqactions.php","FAQ hanterare");







//TESTI CHE COMPAIONO IN DETAILS.PHP
define("_btimdb","IMDB");
define("_btview_comments","Titta p� Torrentkommentarer");
define("_btview_imdb","Titta p� IMDB Info");
define("_btview_details","Titta p� Torrentdetlajer");
define("_btnfo","NFO");
define("_btnfo_view","Titta p� NFO");
define("_btview_btrate","Titta p� Torrentbetyg");
define("_btview_filelist","Titta p� Fillista");
define("_btview_source","Titta p� Peers");
define("_btinfo","TorrentInfo");
define("_bttracker","Tracker");
define("_btddownloaded","Nerladdad");
define("_btdcomplete","Kompletta");
define("_dtimeconnected","Tid Ansluten");
define("_btsourceurl","Tillg�nglig p�");
define("_btdidle","Pausad");
define("_btdsuccessfully","Lyckad Torrentuppladdning");
define("_btdsuccessfully2","B�rja seeda NU. Synlighet beror p� natal k�llor");
define("_btdsuccessfullye","Lyckad Editering");
define("_btdgobackto","Tillbaka");
define("_btdwhenceyoucame","D�r du kom ifr�n");
define("_btdyoursearchfor","Din s�kning efter");
define("_btnotorrent","Torrent existerar inte eller har bannats");
define("_btdratingadded","Betygsatt");
define("_btdspytorrentupdate","SpyTorrent har uppdaterat k�llorna");
define("_btdspytorrentupdate1","Du f�rflyttas inom 3 sekunder ");
define("_btdspytorrentupdate2","Om webbl�saren inte f�rflyttar dig, klicka");
define("_btdspytorrentupdate3","H�R");
define("_btdspytorrentnoupdate","Det �r inte n�dv�ndigt att anv�nda SpyTorrent p� Interna Torrents inom 15 minuter sen senaste scan.");
define("_btdownloadas","Ladda ner som");
define("_btpieces","Bitar");
define("_btpiecesstring","**n** bitar av **l** av storlek");
define("_btauthstatus","Nerladdningsbekr�ftelse");
define("_btdwauthpending","P�g�ende");
define("_btdwauthgranted","Beviljad!");
define("_btdwauthdenied","Nekad!");
define("_btdwauthnorequest","Ej Reguestad");
define("_btpremiumdownload","Endast Premiumanv�ndare kan ladda ner den h�r Torrentfilen");
define("_btregistereddownload","Du m�ste regga dig eller logga in f�r att ladda ner den h�r Torrenten");
define("_btnetwork","n�tverk");
define("_btdays","d ");
define("_bthours","h ");
define("_btmins","m ");
define("_btsecs","s ");
define("_btinfohash","Info Hash");
define("_btinfohashnotice","<b>VARNING</b>: Torrenten har modifierats och m�ste nerladdas igen. Filen du laddade upp �r ogiltig. Anv�nd nerladdningsknappen f�r att ta ner den fungerande filen.");
define("_btnodead","<b>Nej</b> (D�d)");
define("_btfiles","fil(er)");
define("_btothersource","Annan k�lla");
define("_btnoselected","Ingen vald kategori. �terg� till uppladdningsformul�ret.");
define("_btago","Sedan");
define("_btlastseeder","Senaste Seeder");
define("_btlastactivity","Senaste Aktivitet");
define("_bttypetorrent","Typ");
define("_btsize","Storlek");
define("_btminvote","Inte r�stat (required at least __minvotes__ votes");
define("_btonly","endast");
define("_btnone","ingen");
define("_btnovotes","Inget Betyg");
define("_btoo5","av 5 med");
define("_btvotestot","Totalt antal betyg");
define("_btcomplaints","Klagom�l");
define("_btlogintorate","(<a href=\"user.php?op=loginform\">Logga In</a> f�r att r�sta)");
define("_btvot1","D�lig");
define("_btvot2","Inte S� Bra");
define("_btvot3","Godk�nd");
define("_btvot4","Bra");
define("_btvot5","Mycket Bra");
define("_btaddrating","R�sta");
define("_btvotenow","Betygs�tt!");
define("_btrating","Betyg");
define("_bthelpstat","Statistikhj�lp");
define("_btviews","Sett");
define("_bttimes","G�ng(er)");
define("_btleechspeed","Nerladdningsfart");
define("_bteta","TTL");
define("_btuppedby","Uppladdad Av");
define("_btnumfiles","Antal Filer");
define("_btfilelist","Filer");
define("_btlasttrackerupdate","Senaste Trackeruppdatering");
define("_btshowlist","Visa Peers");
define("_bthidelist","G�m Peers");
define("_bthelpsource","Peerhj�lp");
define("_btseeds","Kompletta");
define("_btcommentsfortorrent","Torrentkommentarer");
define("_btbacktofull","Tillbaka till beskrivning");
define("_btnotifyemailcom","Om du vill f� ett mail n�r f�rsta kommentaren �r lagd, klicka <a href=\"details.php?op=comment&trig=on&id=**id**#notify\">H�R</a>.");
define("_btnotnotifyemailcom","<p>Du tar nu emot mail f�r kommentarer. Om du inte vill ha fler email, klicka <a href=\"details.php?op=comment&trig=off&id=**id**#notify\">H�R</a>.</p>");
define("_btclickhere","Klicka H�r");
define("_btnotifyemail1s","Om du vill f� ett email n�r f�rsta <b>SEEDER</b> visas, klicka <a href=\"details.php?op=seeder&trig=on&id=**id**#notify\">H�R</a>.");
define("_btnotnotifyemail1s","<p>Du f�r nu mail n�r en seeder visas. Om du inte vill f� mail mer, klicka <a href=\"details.php?op=seeder&trig=off&id=**id**#notify\">H�R</a>.</p>");
define("_btnocommentsyet","Finns inga kommentarer �n");
define("_btcommheader","Vid **time**, <a href=\"user.php?op=profile&id=**uid**\" target=\"_top\">**user**</a> skrev:");
define("_btdgavesresult","har gett ett resultat");
define("_btdnotifyemaildel","Du har blivit borttagen");
define("_btdnotifyemaildel1","Du f�r inga mer mail n�r en kommentar ges!");
define("_btdnotifyemailadd1","Du f�r ett mail n�r en kommentar ges, men du f�r inga fler innan du tittat p� kommentaren!");
define("_btdnotifyemailadd","Du blivit tillagd i listan f�r kommentarmail");
define("_btdnotifyadd","Du har blivit tillagd i listan f�r seedermail");
define("_btdnotifyadd2","Du blir meddelad om nya seeders, max ett mail per dag,");
define("_btdnotifydel","Du �r bortplockad ur listan; du f�r inga fler mail.");
define("_btddetails","Torrentdetaljer");
define("_bteditthistorrent","Editera Torrent");
define("_btyes","ja");
define("_btno","nej");
define("_btadded","Uppladdad");
define("_btaddedby","Uppladdad av");
define("_bton","upp");
define("_bthelpothersource","Hj�lp alternativ k�lla");
define("_btfilename","Filnamn");
define("_btpeers","Peers");
define("_btpeerstot","Totalt antal Peers");
define("_bthelppeer","Peerhj�lp");
define("_btleecher","Leecher");
define("_btleechers","Leechers");
define("_btdhelpdownload","Nedladdningshj�lp");
define("_btyourate","You Voted");
define("_btupdatesource","Uppdatera k�llor NU!");
define("_btseeder","Seed");
define("_btseeders","Seeds");
define("_btcompletion","Komplett");
define("_btdirectlink","Direktl�nk");
define("_btcomplyouvoted","Du sa att Torrenten �r: ");
define("_btcomplexplain","Torrenten kan bannas om den f�r ett visst antal klagom�l.");
define("_btcomplaintform","Torrentklagom�lsformul�r.<BR>Systemet till�ter dig att flagga torrents som inte f�ljer reglerna.<BR>
N�r ett visst antal klagom�l getts, kan torrenten bannas.<BR>Ge positiv feedback om torrenten �r bra.<BR>");
define("_btcomplisay","Den h�r torrenten �r ");
define("_btmagnetlink","Magnetl�nk");
define("_btnomagnet","Ingen magnetl�nk tillg�nglig");
define("_btmagnetlinkdownload","Ladda ner torrent med magnetl�nk");
define("_bted2klink","eD2K l�nk");
define("_btnoed2k","Ingen ed2K l�nk tillg�nglig");
define("_bted2klinkdownload","Ladda ner filen med eD2K l�nk");
define("_btcomplatthemoment","Anv�ndare gav positiv feedback<b>**p**</b> tider och negativ feedback <b>**n**</b> g�nger.<BR>");
define("_btnotifications","E-Mail Notifications");
define("_btreadcomms","L�s Kommentarer");
define("_btpostcomment","Posta En Kommentar");
define("_bttransfer","�verf�r");
define("_btdownloadspeed","Nerladdningsfart");
define("_btuploadspeed","Uppladdningsfart");
define("_bttorrentpassword","L�senordsskydd");
define("_btpasswordquery","Den h�r torrenten �r l�senordsskyddad. �garen till torrenten valde att endast ge till�tna anv�ndare tillg�ng.<br />Uppge l�senord f�r tillg�ng till torrenten.");
define("_btpasswordwrong","Varning: Fel L�senord.<br />Kom ih�g att l�senorden �r skiftl�ges-k�nsliga.");
define("_btuploadedpassexplain","Du satte l�senordet till: <b>**pass**</b>");
define("_btuploadedpassexplain2","F�r att ge anv�ndare tillg�ng till torrenten, ge dem f�rljande direktl�nk: <b>**url**<b>");
define("_btcompletedby","Klar av");
define("_bttrackers","Ytterligare Trackers");
define("_bttrackergroup","Grupp *");
define("_btexport","Exportera");
define("_btexportexplain","Ladda ner den h�r torrenten med din Passkey, f�r utdelning p� andra BitTorrent Index Services");

//TESTI PRESENTI IN TAKEUPLOADURL.PHP
define("_btinseriti","Inserted");
define("_btand","and");
define("_btnumerror","their Number is NOT equal and it is NOT Possible to Proceed with Binary Assignment");
define("_btmaxchar","ED2K URLs har 200 tecken Maximum");
define("_bted2kstart","URL ska b�rja med <b>ed2k://</b>");
define("_bt2par","URL Lacks the Second Parameter: ");
define("_bturlfile","fil");
define("_bturlcontent","URL inneh�ller inte");
define("_btfname","filnamn");
define("_bturlsize","URL inneh�ller inte");
define("_btsz","storlek");
define("_btidcode","hash info");
define("_bturlparerror","URL doesn't contain the Parameter:");
define("_bturlsureerror","URL inneh�ller illegal k�lla");
define("_bturlnotinsert","M�ste vara en ED2K Link");
define("_btnotip","IP inte specifierat");
define("_btinvip","Ogiltig IP");
define("_btnoport","Ingen Port Specifierad");
define("_btinvport","Ogiltig Port");
define("_btparmag","ingen");
define("_btnopresent","NOT Present");
define("_btmagchar","MagnetURLs har max 200 tecken");
define("_bftminlimit","Du kan inte dela ut filer mindre �n");
define("_btfmaxlimit","Din torrent inneh�ller filer som �r f�r stora.");
define("_btillegalword","Din torrent klarade sig inte igenom det automatiska filtret (if specified):.");
define("_btillegalwordinfo","If you feel that you're getting this message in error, please contact $admin_email");
define("_btnoreason","(Ingen orsak angiven");
define("_bturlinserted1","Torrent Uppladdad. Du f�rflyttas inom 3 sekunder.<BR>Om din webbl�sare inte f�rflyttar dig, klicka p� ");
define("_bturlinserted2","den h�r l�nken");
define("_btaddnotifycomment","Du har blivit tillagd i listan: du f�r mail om ny kommentar.");
define("_btaddnotifyseeder","Du har blivit tillagd i listan: du f�r mail om nya seeders.");
define("_btnolinkinsert","No Link Inserted");
define("_btexnostartwt","eXeem-l�nkar startar med exeem://");
define("_btinvalidexeem","Ogiltig eXeem-l�nk!");
define("_btillegalcat","Ogiltig Kategori!");
define("_bttorrentpresent","Torrenten du f�rs�ker l�gga upp finns redan p� trackern, eller har blivit bannad.");
define("_btdescrrequired","Beskrivningen �r tom. G� tillbaka och fyll i beskrivningen.");

//TESTI PRESENTI IN UPLOAD.PHP
define("_btuploadatorrent","Ladda upp en torrentfil");
define("_btphotoext","Bildfilen m�ste vara GIF, JPG eller PNG");
define("_btalertmsg","Formul�ret har inte skickats p� grund av f�ljande fel:");
define("_btalertmsg2","Please Fixa till felen och ladda upp igen");
define("_btfnotselected","FEL: Fil ej vald");
define("_btalertdesc","G�r en beskrivning som visar Filtyp och Kvalite, speciellt om det g�ller mediafiler");
define("_btalertcat","V�lj Kategori");
define("_btconferma","Redo att ladda upp? Om din Torrent inneh�ller flera filer, skapa torrentenfilen genom att v�lja hela mappen. Annars kan den bli obrukbar.");
define("_btalerturl","Insert a MAGNET or ED2K Link");
define("_btalerturlnum1","ED2K-l�nknummer");
define("_btalerturlnum2","medans MAGNET-l�nknummer �r");
define("_btalerturlnum3","L�nkens nummer m�ste var identiska-- Torrents best�r av flera l�nkar");
define("_btalert5char","Filnamn m�ste vara minst 5 tecken");
define("_btofficialurl","Sidans officiella Announce URL: ");
define("_btseeded","Ladda bara upp torrents som seedas. Torrents utan seeders kommer ej synas p� sidan.");
define("_btupfile","Ladda upp fil:");
define("_btupnfo","Ladda upp NFO:");
define("_bttorrentname","Torrentnamn");
define("_btfromtorrent","Kommer genereras fr�n filnamn om det l�mnas tomt. ");
define("_btdescname","F�rs�k ge ett beskrivande namn");
define("_btsrc_url","K�llans URL");
define("_btcompulsory"," (Obligatoriskt)");
define("_btdescription","Beskrivning (Kr�vs)");
define("_btdescriptionsemple","Beskrivning");
define("_btnohtml","INGEN HTML");
define("_btchooseone","V�lj");
define("_bttype","Typ");
define("_btverduplicate","G�r kontroll f�r liknande torrents");
define("_btduplicatinfo","F�rhindrar uppladdning av redan existerande torrents. Bocka ur f�r uppladdning �nd�. Kom ih�g att dubbletter s�nker effektiviteten.");
define("_btupevidence","Klistrad");
define("_btupevidencinfo","S�tt torrent som Klistrad s� den ligger fast i toppen p� listan. Endast f�r Moderatorer/Admins");
define("_btowner","Visningsnamn");
define("_btowner1","Visa Anv�ndare");
define("_btowner2","Privat");
define("_btowner3","Stealth");
define("_btownerinfo","'VISA ANV�NDARE' Till�ter andra anv�ndare att se ditt anv�ndarnamn, 'PRIVAT' D�ljer namnet, bibeh�ller Editering/Radering, 'STEALTH' (Om tillg�ngligt) D�ljer helt �garen av systemet, och till�ter ingen Editering/Radering av anv�ndaren.");
define("_btupnotify","Aviseringar");
define("_btupnotifynfo","F� mail n�r en kommentar �r lagd");
define("_btupnotifyseed","F� mail n�r en leecher laddat ner klart (Only Torrents on Local Tracker)");
define("_btfsend","Skicka");
define("_btinserte2k","Insert ED2K Link");
define("_btmagnetinsert","Insert Magnet Link");
define("_btinsertlinktitle","Insert Links for GNutella and eDonkey2000 Networks");
define("_btinsertlinktext","Du kan l�gga till eDonkey2000-l�nkar till din Torrent, f�r att �ka tillg�nglighet.");
define("_btinserttext2","Du kan endast l�gga till MAGNET-l�nkar eller bara ED2K-l�nkar. If both Lists are filled with entries, two Links will be Associated to each file: in other words the first ED2K Link and the first MAGNET Link will be Associated to the first file, and so on...");
define("_bted2kurl","Insert ED2K Link");
define("_btsyntax","Like");
define("_btfiletype","extension");
define("_btfilesize","storlek");
define("_btipport","ip:port");
define("_btstatic","indicates that we're only using the eDonkey2000 Protocol");
define("_btfinalname","�r namnet p� filen du ska ladda ner");
define("_btfinalsize","�r storleken p� filen du ska ladda ner");
define("_btfinalidcode","a Special Verification Code that Allows you to find ONLY ONE FILE, and its Copies, among many Similar");
define("_btfinalipport","represents the Main Stable Source (used by Releasers)");
define("_btor","or");
define("_btaddmagnet","Magnet Link");
define("_btadded2k","eD2K Link");
define("_btphoto","Bild");
define("_btexeemlink","eXeem Link");
define("_btexeemlinkexplain","Optional. If the Torrent can be downloaded through the eXeem Network, you can insert the Alternate Link HERE");
define("_bttorrentpasswordexplain","You may choose a Password to Protect your Torrent from Unauthorized View. If a Password is Set, Torrent will NOT
be Visible to Anyone Except Premium Users and Administrator in Torrent List and Torrent Search. You will have to provide a Direct Link to the people that you want to Access the Torrent.
Only Internal Torrents can be Password Protected.");
define("_btupadvopts","Advanced Options");
define("_btadvoptsexplain","Show Advanced Options, Controlling some Technical Aspects of the torrent. Use these Options ONLY if you know what you're doing!");
define("_btleaveintact","Editera inte inst�llningarna");
define("_btdhtsupport","DHT-Support");
define("_btendht","Force Backup DHT Tracking");
define("_btdisdht","Disable DHT Tracking");
define("_btdhtsupportexplain","This Forces DHT Backup Tracking on your Torrent, or Disables it. DHT is useful when the Main Tracker goes Offline or is Overloaded");
define("_btprivatetorrent","Privat Torrent");
define("_btenpvt","S�tt torrent som Privat");
define("_btdispvt","S�tt torrent som Publik");
define("_btprivatetorrentexplain","Det \"Privata\"-valet (som bara vissa klienter kan hantera), s�ger till klienten att bara kontakta Peers fr�n denna tracker. Aktivering av det Privta valet st�nger av DHT");
define("_btnoperms","Du har ej till�telse att ladda upp");

//UPLOAD-LINK
define("_btuploadalinkarchive","L�gg till eD2K/Magne-L�nk");
define("_btsharelink","Ladda bara upp om filen kommer delas ut.");
define("_btlinknotice","L�nken kommer inte godk�nnas om mer �n h�lften av filerna redan finns uppe. Dubbletter s�nker effektiviteten");
define("_btarchivename","Namn");
define("_btinsert1file","V�lj L�nk(ar) f�r din fil, och klicka 'L�gg till fil'. eD2K Link is Obligatory. You can Add more than one File to your Submission.");
define("_btlinksnomatch","The Links you Entered do NOT Represent the same File");
define("_btinvalided2k","Ogiltig eD2K-l�nk");
define("_btinvalidmagnet","Ogiltig Magnet-l�nk");
define("_btaddnewfile","L�gg till fil");
define("_btaddtoarchive","L�gg till fil");
define("_btaddmd5","MD5 Hash");
define("_btlinks","L�nkar");
define("_bterrduplicatelinks","Dubbletter ej till�tna");
define("_btduplicatelinks","Dubblett");
define("_btduplicateexplain","The File Represented by the Link you Submitted is Already being Shared on this Site. Click on the Warning Symbol next to the File to check out the Torrent/Collection in which it has been Found. If more that 50% of the Links you added are already present, your submission will NOT be Accepted");
define("_btinsertfilesfirst","You have to Submit at least One File using the Appropriate Button");
define("_btfilelistaltered","The File List has been Altered! It has NOT been created using this Tool.");

//INTERNAL TRACKER
define("_btuserhost","Anv�ndarnamn/host");
define("_btuserip","Anv�ndarnamn/IP");
define("_btport","Port");
define("_btdownloadedbts","Nerladdat");
define("_btuploadedbts","Uppladdat");
define("_btratio","Ratio");
define("_btpercent","F�rdiga");
define("_btconnected","Ansluten");
define("_btidle","Inaktiv");
define("_btconn","Anslutning");
define("_btactive","Aktiv");
define("_btpassive","Passiv");
define("_btpeerspeed","Medelhastighet");
define("_btnopeer","Inga Peers");
define("_btIP","IP");

//Add Offer
define("_btoffer","Erbjudande");
define("_btofferdeleted","Ditt Erbjudande **name** raderades av ".$user->name);
define("_btoffersvote","Erbjudander�stning");
define("_bt_nocheat","Fuska inte!!!");
define("_bt_Offer_voted","<h3>Du har redan r�stat</h3><p>Du har redan r�stat, endast 1 r�st per medlem</p><p>Return To <a href=offers.php><b>Offers List</b></a></p>");
define("_bt_off_vote_th","Tack f�r din r�st");
define("_bt_off_take_vote","<h3>R�stning godk�nd</h3><Din r�st har r�knats</p><p>Back to <a href=offers.php><b>Offer List</b></a></p>");
define("_bt_off_canupload","Ditt erbjudande \"**torrent**\" har f�tt 3 r�ster.\nDu kan nu l�gga upp torrenten");
define("_bt_off_denied","Du har ej tillg�ng till Erbjudanden �n");
define("_bt_off_name","Skriv in ett namn p� ditt erbjudande");
define("_bt_off_making"," is making a offer for ");

//Scrape external torrents
if (!eregi("admin.php",$_SERVER["PHP_SELF"])){
define("_admtrackers","Externa Trackers");
define("_admtrackerurl","Announce URL");
define("_admtrkstatus","Status");
define("_admtrkstatusactive","Aktiv");
define("_admtrkstatusdead","Offline");
define("_admtrklastupdate","Uppdaterad");
define("_admtrkscraping","Uppdaterar");
define("_admtrkassociatedtorrents","Torrents");
define("_admtrkcannotopen","Kan ej kontakta URL-adressen. Tracker s�tts som Offline");
define("_admtrkrawdata","Tracker n�dd. Here is the Encoded Response");
define("_admtrkinvalidbencode","Cannot Decode Tracker Response. Invalid Encoding");
define("_admtrkdata","Decoding Completed. Here is all the Scrape Data obtained");
define("_admtrksummarystr","Found <b>**seed**</b> Seeders, <b>**leechers**</b> Leechers, <b>**completed**</b> Completed Downloads for Torrent **name** Info Hash **hash**.");
}

//TESTI CHE COMPAIONO IN COMMENT.PHP
define("_btiderror","Ogiltigt ID");
define("_btnotfoundid","Torrent existerar ej");
define("_btaddcomment","L�gg till kommentar");
define("_btaddtime","Uppladdad ");
define("_btby","av");
define("_btsend","S�nd");
define("_btnotyourcomment","Du kan editera andras kommentarer.");
define("_btcommentinserted","Din kommentar har lagts till. Du f�rflyttas till Torrentdetaljer inom 3 sekunder.<br>Klicka <a href=\"details.php?id=**id**#comments\">H�R</a> om din webbl�sare inte f�rflyttar dig.");
define("_btcommentdeleted","Kommentar raderad. Du f�rflyttas till Torrentdetaljer inom 3 sekunder.<br>Klicka <a href=\"details.php?id=**id**#comments\">H�R</a> om din webbl�sre inte f�rflyttar dig.");

//TESTI CHE COMPAIONO IN DOWNLOAD.PHP
define("_bttorrentunavailable","Torrentfil ej tillg�nglig p� grund av serverfel. Urs�kta besv�ret.");
define("_btminseedrule","Du m�ste seeda minst **min** Torrents f�r att ladda ner.");
define("_btmaxdailydownloads","Du kan inte ladda ner mer �n **max** filer per dag. F�rs�k igen imorgon.");
define("_btmaxweeklydownloads","Du kan inte ladda ner mer �n **max** filer per vecka. F�rs�k igen n�sta vecka.");
define("_bterrtoosmall","<li>Du m�ste seeda en fil i en storlek av minst <b>**min_share**</b> osv.<br>");
define("_bterrtoobig","<b>Den st�rsta fil du seedar �r ");
define("_bterrorprivate","Detta �r en privat fil: du har redan bett om nerladdningstill�telse. Du kan ej ladda ner innan �garen gett dig till�telse.");
define("_btrefused","�garen nekade dig. Dan ej ladda ner denna torrent.");
define("_bterrblacklist","�garen nekar dig till�telse att ladda ner hans/hennes torrents. Du kan ej ladda ner n�n av dem.");
define("_btreqsent","Den h�r torrenten �r privat. Du kan ej ladda ner innan �garen gett dig tillst�nd.
En f�rfr�gan har skickats till �garen, som sen tar st�llning till din f�rfr�gan: du mailas om svaret.");

//TESTI CHE COMPAIONO IN EDIT.PHP
define("_btedittorrent","Editera Torrent");
define("_bterreditnoowner","<h1>Tillg�ng Nekad</h1>\n<p>Bara �garen och admins kan editera torrenten</p>\n");
define("_btbanned","Bannad");
define("_btcancel","Avbryt");
define("_btdelcommand","Editera ej torrenten, MEN <input type=\"submit\" value=\"RADERA DEN!\" />\n");
define("_btsure","Ja: Jag �r s�ker!");
define("_btban","Banna Torrenten");
define("_btareyousure","�r du s�ker p� att du vill radera <b>**name**</b>?");
define("_btareyousure_ban","�r du s�ker p� att du vill banna <b>**name**</b>?");
define("_bttorrentnoexist","Torrenten existerar ej");
define("_btdelete","Radera Torrent");
define("_btcannotdel","Kan ej radera");
define("_btmissingdata","N�dv�ndig Data Saknas!");
define("_btdeldenied","Bara �garen och admins kan radera torrenten");
define("_btnotconfirmed","Du m�ste bekr�fta din handling.");
define("_btdeleted","Torrent Raderad");
define("_btsuccessfullyedited","Lyckad Torrenteditering. Du f�rflyttas till torrentdetaljer. Om du har valt Stealth, kan du inte l�ngre editera eller radera torrenten!");

//TESTI CHE COMPAIONO IN MYTORRENTS.PHP
define("_btmytorrentsintrotitle","Kontrollpanel f�r Torrents");
define("_btmytorrentsintrotext","H�r kan du hantera dina uppladdade torrents (utom dem med Stealth).<br>
Du kan ocks� hantera andra anv�ndare' Ladda ner Requester. Genom att v�lja korrekt Ikon, du kan se alla requester som s�nts till dig fr�n andra anv�ndare. Du m�ste v�lja om du vill acceptera eller ej.<br>
H�ll koll p� anv�ndares Nerladdning och Uppladdning. Medlemmar som inte delar med sig �r ej till godo f�r trackern. Att v�gra dem nerladdningsr�ttigheter kan f� dem att vilja dela med sig.");
define("_btmytorrents","Mina Torrents");
define("_btallauthorized","Alla anv�ndare har godk�nts");
define("_btauths","Ladda ner Requester");
define("_btauthorized","Vald anv�ndare har godk�nts");
define("_bthasauthorized","�garen har godk�nt dig att ladda ner");
define("_btnowcandownload","Du kan nu ladda ner anv�ndarens alla torrents.\nWe Skydda din intrigitet.");
define("_pendingauths","V�ntade av godk�nnande: ");
define("_btauthorizationrequested","F�ljande anv�ndare har beg�rt till�telse:");
define("_btnotorrents","Det finns inga torrents");
define("_btnotorrentuploaded","Du har inte laddat upp n�gra torrents �n");
define("_btactions","Handlingar");
define("_bthasuploaded","Uppladdat: **");
define("_bthasdownloaded","Nerladdat: **");
define("_btauthgrant","Godk�nn");
define("_btauthalwaysgrant","Alltid godk�nna");
define("_btauthalwaysdeny","Aldrig godk�nna");
define("_btauthdeny","Godk�nn inte");
define("_btcantseeothertorrents","Du kan inte se andra anv�ndares torrentbefogenheter!");
define("_btauthpanel","Kontrollpanel f�r nerladdningsbefogenheter");
define("_btnoauthstomanage","Inga till�telser att se �ver");
define("_btmyglobals","Mina globala befogenheter");
define("_btnoglobals","Det finns inga globala befogenheter �n");
define("_btstatus","Status");
define("_btauthreset","�terst�ll");
define("_btwronginput","Fel");
define("_btgeneraloptions","�vergripande meny");
define("_btprivate","Privat");
define("_btprivateexpl","V�lj detta val f�r kr�va att anv�ndare fr�gar om nerladdningstill�telser. Du mailas om v�ntade f�rfr�gningar.
Du kan v�lja att till�ta eller neka till�telse f�r en eller alla torrents");
define("_btminratio","Minimum Ratio");
define("_btdisabled","Inaktiverad");
define("_btminratioexpl","Du kan s�tta ett Minimum Ratiov�rde f�r att Auto-till�ta anv�ndare. Anv�ndare med Ratio �ver eller lika med minimum kan ladda ner utan till�telse.
V�rdet av Minimum Ration visas ej, utom f�r Admins");

//TESTI CHE COMPAIONO IN TAKECOMMENT.PHP
define("_btcommentkeyfound","Systemet har kontrollerat din kommentar. F�ljande ord �r ej till�tna:<ol>");
define("_btcommentkeyfound2","</ol><p>We know that the Comment could still be OK, we apologize for the inconvenience and ask you to use different wording.</p>");

//TESTI CHE COMPAIONO IN TAKEEDIT.PHP
define("_btmissingformdata","Saknar ing�ngsdata!");
define("_bteditfailed","Editering Misslyckades");
define("_bteditdenied","Du kan ej editera andras torrents.");
define("_btreturl","Lyckad editering, du f�rflyttas till torrentdetaljer inom 3 sekunder..<br>Klicka <a href=\"**returl**\">H�R</a> om din webbl�sare inte f�rflyttar dig");

//TESTI CHE COMPAIONO IN RATE.PHP
define("_btrate","Torrentbetyg");
define("_btratefailed","R�stning misslyckades!");
define("_btinvalidrating","Ogiltig r�stning");
define("_btidnotorrent","Ogiltigt ID. Torrent existerar ej");
define("_btnovoteowntorrent","Du kan inte betygs�tta dina egna torrents");
define("_btalreadyrated","Torrent redan betygsatt");
define("_btcantvotetwice","Du kan inte r�sta 2 g�nger p� samma torrent");
define("_btvotedone","Lyckad r�stning, du f�rflyttas till torrentdetaljer inom 3 sekunder.<br>Klicka <a href=\"details.php?id=**id**\">H�R</a> om din webbl�sare inte f�rflyttar dig.");

//TESTI CHE COMPAIONO IN TAKEUPLOAD.PHP
define("_btuploaderror","Uppladdning misslyckades!");
define("_btemptyfname","Tomt filnamn");
define("_btinvalidfname","Ogiltigt Filnamn");
define("_btinvalidnfofname","Ogiltigt NFO-filnamn");
define("_btfnamenonfo","Detta �r ingen NFO-Fil (.nfo)");
define("_btfnamenotorrent","Detta �r ingen torrentfil (.torrent)");
define("_btferror","Filfel");
define("_bterrnofileupload","Fel p� uppladdad fil.");
define("_bterrnonfoupload","Fel p� uppladdad NFO.");
define("_btemptyfile","Fil tom");
define("_btnobenc","Fil skadad. �r du s�ker p� att det �r en torrentfil?");
define("_btnodictionary","Torrent Dictionary finns ej");
define("_btdictionarymisskey","Saknar Torrent Dictionary Keys");
define("_btdictionaryinventry","Ogiltig Data inuti Torrent Dictionary");
define("_btdictionaryinvetype","Ogiltiga Datatyper i Torrent Dictionary");
define("_btinvannounce","Ogiltig Announce URL. M�ste vara ");
define("_btactualannounce","Specifierad Tracker ");
define("_bttrackerdisabled","V�r tracker har inaktiverats: Endast externa torrents kan laddas upp.");
define("_btinvpieces","Ogiltiga Torrentdelar");
define("_btmissinglength","Saknas Filer och Storlek");
define("_btnofilesintorrent","Saknas Torrentfiler");
define("_btfnamerror","Ogiltigt Filnamn");
define("_btinvalidhtml","Ogiltig HTML-kod. Se till att du anv�nt v�r editor och inte skrivit in n�t manuellt.");
define("_bttrackerblacklisted","Trackern som anv�nds av den h�r torrenten (<b>**trk**</b>) har blivit svartlistad. Anv�nd en annan tracker.");
define("_btfilenamerror","Fel i filnamn");
define("_bttorrenttoosmall","<p>Du kan inte dela ut en fil som �r mindre �n <b>");
define("_bttorrenttoosmall2","</b></p><p>Din torrent inneh�ller en fil i f�ljande storlek: <b>");
define("_btmaxuploadexceeded","Du kan ej ladda upp mer �n **maxupload** inom en period av 24h.");
define("_btnumfileexceeded","<p>Du kan inte ladda upp mer �n <b>**maxupload**</b> Filer inom en period av 24h.</p><p>Du har redan laddat upp <b>**rownum**</b> Filer p� totalt <b>**totsize**</b>");
define("_btsearchdupl","Enligt s�kningen kan dessa filer vara samma som du delar ut:<ol>");
define("_btduplinfo","<p>Om din fil �r en av dessa i listan, seeda en av dem!</p>");
define("_btsocktout","FEL: Socket Timed-Out");
define("_bttrackernotresponding","Trackern svarar ej.\n Kontrollera Trackerstavning (INGA TOMMA MELLANRUM I URLs) och att trackern �r aktiv och ig�ng. Trackern du angav:");
define("_bttrackerdata","Ogiltig Data fr�n Extern Tracker. Trackern kan ha serverproblem. F�rs�k igen senare.");
define("_bttorrentnotregistered","Torrenten verkar ej vara reggas som extern. Du kan bara ladda upp externa torrents om de �r aktiva.");
define("_btuploadcomplete","Lyckad Uppladdning. Du f�rflyttas till torrentdetaljer inom 3 sekunder. Gl�m ej att seeda, annars syns ej torrenten p� bl�ddra.<br>Klicka <a href=\"**url**\">H�R</a> om inte webbl�saren f�rflyttar dig.");
define("_btpresent","Torrenten finns redan uppladdad");
define("_btscrapeerror","F�r ingen PeerData fr�n Trackern");

//TESTI CHE COMPAIONO IN TAKECOMPLAINT.PHP
define("_btcomplisnowbanned","Torrenten har bannats p� grund av flera klagom�l");
define("_btcomplcantvotetwice","Du kan ej skicka ett klagom�l tv� g�nger.");
define("_btcomplainttaken","Klagom�l mottaget. Du f�rflyttas till torrentdetaljer inom 3 sekunder. Om din webbl�sare inte f�rflyttar dig, klicka ");
define("_btcomplsuccess","Ditt klagom�l har mottagits. Anv�ndarnamn och IP �r loggat: Missbruka inte systemet.<BR>");

//SHOUTBOX
define("_btshoutbox","Tjatbox <a href=\"javascript:popshout('shoutdetach.php');\">(L�sg�r)</a> &bull; <a href=\"shoutboxarchive.php\">(Arkiv)</a>");
define("_btnoshouts","Ingen som tjatar...");
define("_btshoutnow","Tjata!");
define("_btprivates","[PM]");
define("_btshoutnowprivate","Privat Shout!");
define("_btshoutboxshow","TjatBox");
define("_btshactive","Aktiva Anv�ndare");
define("_btmoresmiles","Mer Smiles");
define("_btshouthelp","Vad �r Mode Normal/Mode Expert<ul><li>Mode Normal:<ul><li>Om Normal mode �r p� kommer du f� BBcode hj�lp fr�n systemet.</ul><li>Mode Expert:<ul><li>Om Expert mode �r p� kommer inte systemet hj�lpa dig utan kommer bara s�tta in taggar BBcodes.</ul></ul>Vad g�r <img src=\"./teman/".$theme."/pics/drop.gif\" alt=\"\"> do<ul><li>Klicka 2 g�nger f�r att radera tjat.<br />(admins och moderatorer kan radera ditt tjat ocks�)</ul>What does the <img src=\"./themes/".$theme."/pics/edit.gif\" alt=\"\"> do?<ul><li>Klicka 2 g�nger f�r att editera ditt tjat.<br />(admins och moderatorer kan editera ditt tjat ocks�)</ul>");



//IMAGE ALTERNATES
define("_btalt_banned","Bannad Torrent");
define("_btalt_auth_none","Inga v�ntande till�telser ");
define("_btalt_auth_pending","V�ntande till�telser!");
define("_btalt_sticky","Klistrad Torrent");
define("_btalt_download","Ladda Ner");
define("_btalt_edit","Editera");
define("_btalt_drop","Radera");
define("_btalt_viewed","Granska");
define("_btalt_scrape","Uppdatera Peer Data");
define("_btalt_noscrape","Stats uppdaterade f�r mindre �n 30 minuter sen");
define("_btalt_logintoscrape","Logga in f�r att kontrollera Peer Data");
define("_btalt_duplicate","Dubblett");
define("_btalt_exeem","Ladda ner med eXeem");
define("_btalt_error.gif","Fel");
define("_btalt_icon_admin","Administrator");
define("_btalt_icon_moderator","Moderator");
define("_btalt_icon_premium.gif","Premium User");
define("_btalt_1.gif","Riktigt d�lig");
define("_btalt_1.5.gif","Mycket d�lig");
define("_btalt_2.gif","D�lig");
define("_btalt_2.5.gif","S�d�r");
define("_btalt_3.gif","Godk�nd");
define("_btalt_3.5.gif","B�ttre �n godk�nd");
define("_btalt_4.gif","Bra");
define("_btalt_4.5.gif","Mycket bra");
define("_btalt_5.gif","Utm�rkt");
define("_btalt_anon_tracker.gif","Tracker Anonymous");
define("_btalt_button_aim.gif","AOL Instant Messenger");
define("_btalt_button_icq.gif","ICQ");
define("_btalt_button_irc.gif","IRC");
define("_btalt_button_msn.gif","MSN Messenger");
define("_btalt_button_yahoo.gif","Yahoo! Messenger");
define("_btalt_ed2k_active.gif","Download using eD2K URI");
define("_btalt_ed2k_inactive.gif","eD2K Link Unavailable");
define("_btalt_magnet","Download using Magnet URI");
define("_btalt_magnet_inactive.gif","Alternate Link Unavailable");
define("_btalt_green.gif","Snabb");
define("_btalt_yellow.gif","Sl�");
define("_btalt_red.gif","Stopp");
define("_btalt_quest.gif","Peerdata ok�nd");
define("_btalt_lock","V�ntande till�telse");
define("_btalt_lock_request","Be om till�telse");
define("_btalt_noavatar.gif","Ingen Avatar");
define("_btalt_icon_active.gif","Aktiv");
define("_btalt_icon_passive.gif","Passiv");
define("_btalt_external","Extern Tracker");

define("_btunknownclient","Ok�nd Klient");
define("_btalt_avatar","Avatar f�r **user**");


//PRIVATE MESSAGES
define("_btyougotpm","Du har ett nytt PM/Ol�sta PM!");
define("_btpmintro","H�r kan du l�sa privata PM fr�n andra anv�ndare. Det finns ingen gr�ns f�r sparade PM.
Men vi f�resl�r att du raderar dina Pm med j�mna mellanrum. Du kan skicka PM till alla reggade medlemmar.");
define("_btinbox","Inkorg");
define("_btpmnomessages","Inga PM");
define("_btpmsub","�mne");
define("_btpmfrom","Fr�n");
define("_btpmdate","Datum");
define("_btplmselect","V�lj");
define("_btpmread","L�s");
define("_btpmunread","Ol�st");
define("_btimgdelete","Radera Bild");
define("_btpmnewmsg","Nytt PM");
define("_btpmdelete","Radera PM");
define("_btpmdelall","Radera ALLA PM");
define("_btpmdelconfirm","�r du s�ker p� att du vill radera valda PM?");
define("_btpmdelbtn","Radera PM");
define("_btpmdelallconfirm","�r du s�ker p� att du vill radera <b>ALLA</b> dina PM?");
define("_btpmdeletedsuccessfully","PM valt korrekt");
define("_btnewpm","Nytt PM");
define("_btpmto","Mottagare");
define("_btpmtotip","Om du vill skicka samma PM till flera anv�ndare, separera dem med semikolon (;)");
define("_btpmshowbookmarks","Visa/D�lj Kontaktlista");
define("_btpmtext","Meddelandetext");
define("_btpmnorecipient","Du m�ste ange mottagare");
define("_btpmnosubject","Du m�ste ange �mne");
define("_btpmnomessage","Tomt meddelande");
define("_btpminvalidrecipients","En eller flera av mottagarna du angav finns ej");
define("_btpmsentsuccessfully","PM skickat korrekt");
define("_btpmuserblocked","En av mottagarna accepterar ej PM fr�n dig. Du skrev:<br><br>");
define("_btmessage","Meddelande");
define("_btinvalidpm","Ogiltigt Meddelande");
define("_btpmnoexists","Meddelande existerar ej");
define("_btpmreply","Svara");
define("_btuserlists","V�nner och ignorerade anv�ndare");
define("_btuserlistsintro","H�r kan du hantera v�nner och ignorerade anv�ndare. V�nnerna finns i din kontaktlista f�r snabb hantering vid s�ndande av PM.
PM fr�n ignorerade blockas. Du kan �ndra en anv�ndares status i  hans/hennes Profil. Anv�ndare vet inte andras status.");
define("_btpmbookmarkuser","L�gg till som v�n");
define("_btpmunbookmarkuser","Ta bort som v�n");
define("_btpmblacklistuser","V�gra PM fr�n den h�r anv�ndaren");
define("_btpmunblacklistuser","V�gra inte PM fr�n den h�r anv�ndaren");
define("_btpmbookmarks","V�nner");
define("_btpmblacklist","Ignorerade");

//OVERLIB HELP
#NO LINE-BREAKS!!!!
define("_btperformance","Prestanda");
define("_btdht","DHT Support");
define("_bttorrentspd","Total Hastighet:");
define("_btleechspd","F�rv�ntad Hastighet: ");
define("_btedt","F�rv�ntad Nerladdningshastighet: ");
define("_btinfohashhelp","Info Hash �r en kort, unik kod som identifierar en Torrent.<br>");
define("_btdhtexplanation","Den h�r torrenten anv�nder DHT. Med en ny klient kan du ladda ner denna torrent �ven om trackern �r nere.");
define("_btavatarnotice","Uppladdade Avatarer m�ste vara GIF, JPEG eller PNG format, f�reslagen storlek 100x100 och inte st�rre �n 300KB");
define("_btcustomsearch","RSS/RDF Feed for Custom Search");
define("_btcustomsearchexplain","Subscribe to this RSS/RDF Feed to stay Updated on Uploads that match your Search Terms");

// Rules
define("_btrules","Regler");
define("_brrulesadmin","Adminregler");
define("_btrulesmod","Moderatorregler");
define("_btrulesprem","Premiumregler");
define("_btrulesuser","Userregler");
define("_btrulesgen","Allm�nna Regler");
define("_btrulesadd","L�gg till ny regelsektion");
define("_btrulesaddsect","L�gg till regelsektion");
define("_btnamelevel","Anv�ndarniv� f�r denna regel");
define("_bttitle","Sektionstitel");
define("_btlevel","Niv�");
define("_btrulesedit","Editera Regler");
define("_btmodrulesadd","L�gg till regelsektion");
define("_btmodrulesno","Nej");
define("_btmodrulesyes","Ja");
define("_btmodrulespublic","Publik");
//massmail
define("_btmmbody","Body");
define("_btmmsendto","Skicka mass-email till niv� av anv�ndare");
define("_btmmlinks","Du kan anv�nda denna l�nk i email");
//BBcode
define("_bb_tag_prompt","Skriv en text:");
define("_bb_img_prompt","L�gg in l�nk till bild");
define("_bb_font_formatter_prompt","L�gg till en text - ");
define("_bb_link_text_prompt","L�gg till ett l�nknamn (Optional):");
define("_bb_link_url_prompt","L�gg till en fullst�ndig adress till v�nster om:");
define("_bb_link_email_prompt","L�gg till en fullst�ndig l�nk:");
define("_bb_list_type_prompt","Vilken typ av lista vill du ha? Ange ' 1 ' f�r en Numerisk Lista, 'a' f�r en Alfabetisk Lista, eller inget alls f�r en simpel Point List.");
define("_bb_list_item_prompt","Enter one point of list. Press OK to enter another point of list or press 'Cancel' to Finish.");
define('_btmfreetorrentexplain','<img src="themes/'.$theme.'/pics/magic.gif" alt="GRATIS TORRENT" title="GRATIS TORRENT" border="0">Torrents med den h�r symbolen �r Ratio Boosters. Endast din upload r�knas!!<br> Det h�r �r ett perfekt s�tt att boosta din Ratio. Vanliga seedregler g�ller �ven dessa.<br>Seeda till 1:1 eller 24h f�r att undvika Hit and Runs.');
define('_btmnuketorrentexplain','<img src="themes/'.$theme.'/pics/nuked.gif" alt="NUKED TORRENT" title="NUKED TORRENT" border="0">Torrents med den h�r symbolen �r Nuked. <br>Det betyder att n�got �r fel med Releasen,<br>och att den kanske inte kan anv�ndas. Ladda ner p� egen risk.<br>Normala seedregler g�ller p� dessa torrents. L�s i torrentdetaljer g�llande anledning till NUKED');
define('_btactiontime','Tid');
define('_btactionmark','M�rk');
//BitBucket
define("_btuploadexpl","V�lj filen du vill l�gga till din torrent och till BitBucket.<br />Du kommer inte beh�va ladda upp denna bild i framtiden.<br />Giltig fil�ndelse: bmp gif jpe jpeg jpg png.");
define("_btgalexpl","H�r �r alla bilder du har i Galleriet<br />Du kan l�gga till en bild genom att klicka p� namnet eller titta p� hela bilden genom att klicka p� Thumb.<br>Du kan ocks� anv�nda den n�gon annanstans med [img]".$siteurl."/UserFiles/$user->name/image[/img]");
define("_btvaliext","Giltig fil�ndelse: bmp gif jpe jpeg jpg png");
define("_btattach","F�st filer");
define("_btmantitle","Klicka h�r f�r att l�gga till en bild fr�n dina uppladdade bilder");
define("_btmanimage","Hantera bilder");
define("_brupwait","Laddar upp Fil(er) - Var god v�nta");
define("_btuploading","Laddar upp");
define("_btselecatt","V�lj en fil att f�sta");
define("_btgalery","Bildgalleri");
define("_btbuclosed","Vi till�ter inte Bit-Bucket uppladdningar just nu","Bit-Bucket st�ngd");
define("_btgaltyp","Du f�r bara ladda upp filer med �ndelsen bmp gif jpe jpeg jpg png");
define("_btgalwful","BitBucket �r full");
define("_btgalful","Din BitBucket �r full!<br />Radera n�gra av dina bilder och f�rs�k igen.");
define("_btgalitobig","Fil f�r stor");
define("_btgalwitobig","Filstorlek �r f�r stor!");

#offers
#arcade
define("_btarc","SPELH�RNA");
define("_btarcadeclosed","SPELH�RNAN �r st�ngd.");
define("_btarc_play_Asteroids","Spela Asteroids");
define("_btarc_play_Breakout","Spela Breakout");
define("_btarc_play_Hexxagon","Spela Hexxagon");
define("_btarc_play_Interactive","Spela Interactive Buddy");
define("_btarc_play_Invaders","Spela Space Invaders");
define("_btarc_play_Moonlander","Spela Moonlander");
define("_btarc_play_Pac_Man","Spela Pac-Man");
define("_btarc_play_Solitaire","Spela Solitaire");
define("_btarc_play_Simon","Spela Simon");
define("_btarc_play_Snake","Spela Snake");
define("_btarc_play_Free_kick","Spela James Original Free-kick Challenge");
define("_btarc_play_Starcraft","Spela Starcraft Flash Action 3");
define("_btarc_play_Tetris","Spela Tetris");
define("_btarc_tittle",$sitename." Flash Arcade");
define("_btarc_high","Titta p� Highscores");
define("_btarc_stats","Titta p� Highscorestatistik");
#blackjack
define("_btblj_tittle","BlackJack");
define("_btblj_start_game","Starta Spel");
define("_btblj_rule","<h3>Regler</h3><p style=\"color:#000033\">Kom s� n�rma 21 po�ng du kan...<br/>har du mer �n 21 f�rlorar du<bd/><br/>Du kan vinna eller f�rlora 100MB</p>");
define("_btblj_stand","Pass");
define("_btblj_wratio","Ledsen **user**, din ratio �r under **userratio**");
define("_btblj_banned","Du �r bannad fr�n Kasinot.");
define("_btblj_play_tover","Din spelstund �r �ver **maxtry** ,du m�ste v�nta 5h.");
define("_btblj_max_download_passed","Du har n�tt max antal nerladdningar f�r en anv�ndare.");
define("_btblj_max_profit","men den maximala f�rtj�nsten �r h�gre ");
define("_btblj_wait_next_player","Du m�ste v�nta p� en annan spelare");
define("_btblj_open_game","Du m�ste g�ra klart ditt �ppnade spel. <form method=post name=form action=".$_SERVER['PHP_SELF']."><input type=hidden name=game value=cont><input type=submit value='Continue old game'></form>");
define("_btblj_anothercard","Ge mig ett kort");
define("_btblj_you_win","Du vann **won** av **opon** (Du hade **youpoint** po�ng, **opon** hade **oppoint** po�ng). <a href=blackjack.php>Spela Igen</a>");
define("_btblj_points","Po�ng");
define("_btblj_you_won_points","Du vann ");
define("_btblj_you_lost","Du f�rlorade ");
define("_btblj_who_won","Du har **ypoint** po�ng, din motst�ndare var **opon**, han/hon hade **tpoint** po�ng, **won** <a href=blackjack.php>Spela Igen</a> ");
define("_btblj_you_lost_points","Du f�rlorade **lost** till **opon** (Du hade **youpoint** po�ng, **opon** hade 21 po�ng) <a href=blackjack.php>Spela Igen</a>");
define("_btblj_you_lost_points2","Du f�rlorade **lost** till **opon** (Du hade **youpoint** po�ng, **opon** hade **oppoint** po�ng) <a href=blackjack.php>Spela Igen</a>");
define("_btblj_no_winner","Ingen Vann");
define("_btblj_no_winner2","Din motst�ndare var **opon**, ingen vann <a href=blackjack.php>Spela Igen</a>");
define("_btblj_points_wait","Du har **points** po�ng, det finns inga andra spelare, s� du f�r v�nta p� en annan spelare. Du f�r ett PM om resultatet");
define("_btblj_over","Game over");
#Casino
define("_btco_","Kasino");
define("_btco_maxwin","Maxvinst �r h�gre ");
define("_btco_upload_low","Ledsen **username** du har inte laddat upp **upload**");
define("_btco_win","VINNARE!!!");
define("_btco_win_exp","Ja **wincolor** �r resultatet **user** du fick det och vann **vinst**");
define("_btco_loose","F�RLORARE!!!");
define("_btco_loose_exp","Ledsen **facwincolor** �r vinnare och inte **wincolor**, **user** du **loose**");
#casino_player_edit.php
define("_btcs_edit_noplr","Ingen med anv�ndarID **id**\n");
define("_btcs_edit_stupdt","Statistik f�r anv�ndare **id** �r nu uppdaterade");
define("_btcs_edit_bktl","Tillbaka till spelarlistan");
define("_btcs_edit_pledok","Spelare editerad");
define("_btcs_edit_bktc","Tillbaka till Kasinot");
define("_btcs_edit_yaediting","Du editerar nu en anv�ndare");
define("_btcs_edit_lost","F�rlorade");
define("_btcs_edit_pls","Spelar");
define("_btcs_edit_alow","Till�t spelare att anv�nda Kasino");
define("_btcs_edit_laac","Senaste tilltr�de");
define("_btcs_edit_wing","Vinster");
#confirminvite.php
define("_btreadrules","Jag har l�st <a href=/rules.php/ target=_blank font color=red>rules</a> page.");
define("_btreadfaqs","jag g�r med p� att l�sa <a href=/faq.php/ target=_blank font color=red>FAQ</a> innan jag st�ller fr�gor.");
define("_btofage","Jag �r minst 13 �r gammal.");
define("_btcookies","Notis: Du m�ste ha cookies aktiverat f�r att regga dig eller logga in.");
define("_btconinvite","Bekr�fta Inbjudning");
define("_btdupip","Dubblett av Ip");
define("_bterridnotset","Id �r inte satt, kolla l�nk");
define("_btusercount","Anv�ndargr�nsen (**count**) �r n�dd. Inaktiva konton tas bort hela tiden, f�rs�k igen senare...");
#requist

#bbcode
define("_btbb_header","<p>Formul�ren st�djer ett antal <i>BB tags</i> som du kan modifiera dina postningar med.</p>");
define("_btadd_code","testa h�r");
#faqaction.php
define("_bt_faqmang","FAQ Hantering");
define("_bt_faq_additem","L�gg till sak");
define("_bt_faq_update","Uppdaterad");
define("_bt_faq_normal","Normal");
define("_bt_faq_hidden","G�md");
define("_bt_faq_answer","Svar:");
define("_bt_faq_status","Status:");
define("_bt_faq_catergory","Kategori:");
define("_bt_faq_new","Ny");
define("_bt_faq_id","ID:");
define("_bt_faq_title","Titel:");
define("_bt_faq_confer_req","Bekr�ftelse kr�vs");
define("_bt_faq_confer_ok","Klicka <a href=\"faqactions.php?action=delete&amp;id=**id**&amp;confirm=yes\">H�R</a> f�r att bekr�fta.");
define("_bt_faq_add_section","L�gg till sektion");
#flash.php
define("_bt_flash_closed","Spelh�rnan �r avst�ngd.");
define("_bt_flash_game_ast","Asteroids");
define("_bt_flash_game_bre","Breakout");
define("_bt_flash_game_hex","Hexxagon");
define("_bt_flash_game_inv","Invaders");
define("_bt_flash_game_moo","Moonlander");
define("_bt_flash_game_pac","Pacman");
define("_bt_flash_game_sol","Solitaire");
define("_bt_flash_game_sim","Simon");
define("_bt_flash_game_sna","Snake");
define("_bt_flash_game_tet","Tetris");
define("_bt_flash_rank","Ranking");
define("_bt_flash_level","Niv�");
define("_bt_flash_name","Namn");
define("_bt_flash_not_saveable","Kan ej spara highscore f�r spelet!");
define("_bt_flash_set_rez","V�lj uppl�sning:");
define("_btcasino_ban","Ledsen ".$user->name."du �r bannad fr�n kasinot.");
#flashscore.php
#youtube
define("_btvid_clip","Videoklipp");
define("_btvid_choose","V�lj en video till h�ger.");
define("_btvid_fun","Ha det kul");
define("_btvid_list","Lista");
define("_btvid_info","Klippinfo");
define("_btvid_url","F�r URL: ");
define("_btvid_link","bara l�gg in: qppuuQrklHg i l�nken");
define("_btvid_add","Klistra endast in tecknen efter =");
define("_btvid_id","ID");
define("_btvid_name","Namn");
define("_btvid_link1","L�nk");
define("_btvid_addedby","Tillagd av");
define("_btvid_added","Tillagd");
define("_btvid_delete","Radera");
define("_btvid_remove","Ta Bort");
#Votes
define("_btvote_votes","R�ster");
define("_btvote_vote"," R�STER :");
define("_btvote_for","R�STA P� DENNA");
define("_btvote_request","REQUEST");
define("_btvote_notfound","Inget funnet");
#Lottery
define("_btlottery_sold","S�lda biljetter");
define("_btlottery_purchased","K�pta lotteribiljetter");
define("_btlottery_disabled","Lotteriet �r avst�ngt.");
define("_btlottery_end","Lotteriet avslutas:");
define("_btlottery_tickets"," Antal biljetter ");
define("_btlottery_uploaded","Du m�ste ha laddat upp minst ");
define("_btlottery_buy"," f�r att kunna k�pa en biljett!");
define("_btlottery_page"," Biljettsidan");
define("_btlottery_purchase"," K�p lotter");
define("_btlottery_nonrefund"," K�pt lott kan ej �terl�mnas.");
define("_btlottery_cost"," Varje lott kostar");
define("_btlottery_taken","  vilket tas fr�n din upload.");
define("_btlottery_purchaseable"," det visas hur m�nga lotter du kan k�pa.");
define("_btlottery_amount"," Du kan bara k�pa s� m�nga lotter som visas.");
define("_btlottery_compend"," T�vlingen slutar: ");
define("_btlottery_willbe"," Det kommer finnas ");
define("_btlottery_winners","  vinnare som v�ljs p� m�f�");
define("_btlottery_eachwinner"," Varje vinnare kommer f� ");
define("_btlottery_added","  till sin upload.");
define("_btlottery_announced"," Vinnarna kommer utropas n�r lotteriet �r slut och omn�mnas p� startsidan.");
define("_btlottery_pot"," Ju fler lotter som s�ljs desto st�rre pott!");
define("_btlottery_own"," S� m�nga lotter har du: ");
define("_btlottery_goodluck","Lycka Till!");
define("_btlottery_purchase1","K�p");
define("_btlottery_totalpot","Total Pott");
define("_btlottery_totalpurchased","Totalt antal s�lda lotter");
define("_btlottery_owned","Lotter du k�pt");
define("_btlottery_allowed","Kan k�pas");
define("_btlottery_allowed_tickets", " Lotter");
define("_btlottery_closed"," Lotteriet �r st�ngt!");
define("_btlottery_sorry"," Ledsen, jag kan ej s�lja dig n�gra lotter!");
define("_btlottery_error"," FEL");
define("_btlottery_max"," Max antal lotter du kan k�pa ");
define("_btlottery_noupload"," Du har inte tillr�ckligt med upload f�r att k�pa en lott");
define("_btlottery_lottery","Lotteri");
define("_btlottery_just_purchased","Du har precis k�pt ");
define("_btlottery_newtotal","Ditt nya antal �r ");
define("_btlottery_newupload","Din nya uploadstatus �r ");
define("_btlottery_goback","G� Tillbaka");
define("_btlottery_ticket"," Lott");
#request
define("_btrequestvote","R�sta");
define("_btrequestvoted","<br><p>Du har redan r�stat p� den h�r Requesten, endast 1 r�st per request</p><p>Tillbaka till <a href=viewrequests.php><b>Requests</b></a></p><br><br>");
define("_btrequestvotetaken","<br><p>Lyckad r�stning p� Request **requestid**</p><p>Tillbaka till <a href=viewrequests.php><b>Requests</b></a></p><br><br>");
define("_btrequest","Requester");
define("_btrequest_add","L�gg Till Request");
define("_btrequest_view","Titta p� mina Requester");
define("_btrequest_votes","R�ster");
define("_btrequest_sort","SORTERA ");
define("_btrequest_added","Datum Tillagd");
define("_btrequest_name","Requestnamn");
define("_btrequest_display","Display");
define("_btrequest_search","S�k");
define("_btrequest_addedby","Tillagd av");
define("_btrequest_type","Typ");
define("_btrequest_date","Datum Tillagd");
define("_btrequest_filled","Uppladdad");
define("_btrequest_filledby","Uppladdad Av");
define("_btrequest_delete","Del");
define("_btrequest_dodel","Radera");
define("_btrequest_made","har gjort en request p� ");
define("_btrequest_closed","Requestsystemet �r st�ngt, �terkom senare... ");
define("_btrequest_offers","Titta p� alla erbjudanden");
define("_btrequest_make","L�gg Regquest");
//ViewSnatch
define("_btsnatch_fin_order","Anv�ndarna i toppen var klara senast");
define("_btsnatch_seed_sp","Upphastighet");
define("_btsnatch_leech_sp","Nerhastighet");
define("_btsnatch_time_cmpl","Klar");
define("_btsnatch_last_action","Senaste Aktivitet");
define("_btsnatch_time_seeding","Seedtid");
define("_btsnatch_cmpl","Seedar");
define("_btsnatch_pmu","PM:a Anv�ndare");
define("_btsnatch_here","P�/Av");
define("_btsnatch_prev","F�reg�ende");
define("_btsnatch_next","N�sta");
define("_btsnatch_details","Snatch Details");
define("_btsnatch_global","Global");
define("_btsnatch_torrents","Torrent");
define("_btsnatch_online","Online");
define("_btsnatch_offline","Offline");
#userfind
define("_buserfind_found","Hittad");
define("_buserfind_tryagain","medlemmar. F�rs�k igen.");
define("_buserfind_retry","[F�rs�k igen]");
define("_buserfind_member","medlem");
define("_buserfind_specific","medlemmar. F�rs�k vara med specifik.");
define("_buserfind_recip","medlemmar - v�lj mottagare");
define("_buserfind_recipt","Mottagare");
define("_buserfind_Pseudo","Namn");
#signup
define("_btsignup_include","Du kan ej inkludera denna fil");
define("_btsignup_limit_reached","Ledsen, den nuvarande anv�ndargr�nsen ");
define("_btsignup_reached"," har n�tts. Inaktiva konton raderas hela tiden, �terkom senare...");
define("_btsignup_limit","Gr�ns n�dd");
define("_btsignup_noinvites","Ledsen, inga inbjudningar!");
define("_btsignup_message","Du m�ste skriva ett meddelande!");
define("_btsignup_invalid_email","Verkar inte vara en giltig mail.");
define("_btsignup_tryagain","Ledsen, anv�ndargr�ns n�dd. F�rs�k igen senare.");
define("_btsignup_password_mismatch","L�senorden matchar ej");
define("_btsignup_blank_fields","L�mna inga f�lt tomma.");
define("_btsignup_toolong","Anv�ndarnamn f�r l�ngt (max �r 45 tecken)");
define("_btsignup_wrong_pass","L�senorden matchade inte! F�rs�k igen.");
define("_btsignup_tooshort","L�senord f�r kort (min �r 6 tecken)");
define("_btsignup_pass_toolong","L�senord f�r l�ngt (max �r 40 tecken)");
define("_btsignup_pass_name","L�senordet kan ej vara likadant som anv�ndarnamnet.");
define("_btsignup_invalid_username","Ogiltigt anv�ndarnamn.");
define("_btsignup_not_qualified","Du har inte det som kr�vs f�r att bli medlem h�r.");
define("_btsignup_signup_fail","Reggning misslyckades");
#delete requests
define("_btdelrequest_select_delete","Du m�ste v�lja minst en request att radera.");
define("_btrdelequest_dodel","Request raderad OK");
define("_btrdelequest_id","Request ID ");
define("_btrdelequest_table","Request");
define("_btdelrequest_deleted","Raderad");
define("_btrdelequest_noperms","Ej till�telse att radera Request ID ");
define("_btdelrequest_done","Klart");
define("_btdelrequest_messages"," meddelande.");
define("_btdelrequest_staffcp","Tillbaka till Staffpanelen");
//STATISTICS
define("_btstats","Statistik");
define("_btstats_rank","Kontoniv�");
define("_btstats_user","Kontoanv�ndare");
define("_btstats_uploaded","Uppladdat ");
define("_btstats_downloaded","Nerladdat ");
define("_btstats_ratio","Ratio");
define("_btstats_noshow","INGET ATT VISA");
define("_btstats_completed","F�rdigt");
define("_btstats_seeds","Seeders ");
define("_btstats_leech","Leechers ");
define("_btstats_peers","Peers");
define("_btstats_country","L�nder");
define("_btstats_users","Anv�ndare");
define("_btstats_posted","Torrents upplagda");
define("_btstats_extra","Extra Statistik");
define("_btstats_welcome","V�lkomna ny ");
define("_btstats_total","Totalt antal medlemmar ");
define("_btstats_new_today","Nya anv�ndare idag ");
define("_btstats_active","Aktiva �verf�ringar idag ");
define("_btstats_tracking","Tracking ");
define("_btstats_local","Lokala Torrents ");
define("_btstats_external","Externa Torrents ");
define("_btstats_seed_ratio","Seed Ratio ");
define("_btstats_torrents","Torrents");
define("_btstats_top10_posters","Top 10 Postare");
define("_btstats_top10_uploaders","Top 10 Uploaders");
define("_btstats_top10_leechers","Top 10 Leechers");
define("_btstats_top10_best_shares","Top 10 B�sta delare ");
define("_btstats_100mb","(med minst 100 MB nerladdat)");
define("_btstats_top10_worst_shares","Top 10 S�msta delare ");

define("_btstats_top10_active","Top 10 Mest Aktiva Torrents");
define("_btstats_top10_best_seed","Top 10 B�st Seedade Torrents  ");
define("_btstats_top10_5seeds","(med minimum 5 seeders)");
define("_btstats_top10_worst_seeded","Top 10 S�mst Seedade Torrents  ");
define("_btstats_top10_5leech","(med minimum 5 leechers, excluding unsnatched torrents) ");
define("_btstats_top10_most_complete","Top 10 Mest Nerladdade Torrents  ");
define("_btstats_top10_countries","Top 10 L�nder ");
#staff
define("_btstaff","Staff");
define("_btstaff_support","Alla fr�gor som finns besvarade i <a href=faq.php><b>FAQ</b></a> kommer ignoreras.");
define("_btstaff_admin","Administrat�rer");
define("_btstaff_mods","Moderatorer");
define("_btstaff_premium","Premium Anv�ndare");
define("_btstaff_fls","Firstline Support");
define("_btstaff_general","Fr�gor ska framf�rallt st�llas till dessa anv�ndare.<br/>De �r frivilliga, som l�gger ner sin fritid p� att hj�lpa er.
Treat them accordingly. (Spr�k listade �r de som finns f�rutom Engelska.)");
define("_btstaff_username","Anv�ndarnamn");
define("_btstaff_active","Aktiv");
define("_btstaff_contact","Kontakt");
define("_btstaff_language","Spr�k");
define("_btstaff_supportfor","Support f�r");
#snatch warning
define("_btsnatchwarn_warn","Du har precis varnats!\n en vecka f�r hit and run!\n Du har misslyckats att seeda tillbaka **tname** minst 1:1 eller seedat 24h!\nOm du b�rjar seeda kommer varningen tas bort.");
define("_btsnatchwarn__hnr","Hit And Run'");
define("_btsnatchwarn_pm","Det h�r �r en varning f�r hit and run!\n Du har inte seedat tillbaka **tname** minst 1:1\n eller 24h!\nOm du inte b�rjar seeda kommer du varnas.");
#shoutbox
define("_btshout_noperms","Du f�r ej anv�nda Tjatboxen");
define("_btshout_delete","'Radera Tjat");
define("_btshout_shout","Tjata");
define("_btshout_bold","Bold&nbsp;Text");
define("_btshout_underlined","Underlined&nbsp;Text");
define("_btshout_italic","Italic&nbsp;Text");
define("_btshout_quote","Quote&nbsp;Text");
define("_btshout_image","Image&nbsp;Text");
define("_btshout_link","Link&nbsp;Text");
define("_btshout_font","FONT");
define("_btshout_arial","Arial");
define("_btshout_comic","Comic");
define("_btshout_courier","Courier New");
define("_btshout_tahoma","Tahoma");
define("_btshout_times","Times New Roman");
define("_btshout_verdana","Verdana");
define("_btshout_size","Size");
define("_btshout_verysmall","Very Small");
define("_btshout_small","Small");
define("_btshout_normal","Normal");
define("_btshout_large","Large");
define("_btshout_xlarge","X-Large");
define("_btshout_color","COLOR");
define("_btshout_skyblue","Sky Blue");
define("_btshout_royalblue","Royal Blue");
define("_btshout_blue","Blue");
define("_btshout_darkblue","Dark Blue");
define("_btshout_orange","Orange");
define("_btshout_orangered","Orange-Red");
define("_btshout_crimson","Crimson");
define("_btshout_red","Red");
define("_btshout_firebrick","Firebrick");
define("_btshout_darkred","Dark Red");
define("_btshout_green","Green");
define("_btshout_limegreen","Lime Green");
define("_btshout_seagreen","Sea Green");
define("_btshout_deeppink","Deep Pink");
define("_btshout_tomato","Tomato");
define("_btshout_coral","Coral");
define("_btshout_purple","Purple");
define("_btshout_indigo","Indigo");
define("_btshout_burlywood","Burly Wood");
define("_btshout_sandybrown","Samdy Brown");
define("_btshout_sienna","Sienna");
define("_btshout_chocolate","Chocolate");
define("_btshout_teal","Teal");
define("_btshout_silver","Silver");
define("_btshout_normalmode","Mode Normal");
define("_btshout_expertmode","Mode Expert");

#shoutbox archive
define("_btshout_archive","Tjatbox arkiv");
define("_btshout_deleteed","Radera");
define("_btshout_edit","Editera");
define("_btshout_statistics","Statistik");
define("_btshout_total_posted","Totala tjat Postade:");
define("_btshout_last24","Tjat senaste 24h:");
define("_btshout_yourshout","Dina Tjat:");
define("_btshout_search","S�k tjat");
define("_btshout_search_terms","S�ktermer");
define("_btshout_contains","Tjat inneh�ller:");
define("_btshout_usercontains","Anv�ndarnamn inneh�ller:");
define("_btshout_within","Inom senaste ");
define("_btshout_hours"," Timmarna:");
define("_btshout_sort","Sortera resultat:");
define("_btshout_newest","Nyaste f�rst");
define("_btshout_oldest","�ldsta f�rst");
define("_btshout_top15","Top 15 Tjatare");
#scrape
define("_btscrape_sqlerror","SQL ERROR: ");
define("_btscrape_notreg","Torrent ej reggad p� trackern.");
#reseed req
define("_btreseed_reg","�terseeda Request");
define("_btreseed_msg","Du har nyss bett om �terseed. V�nta lite l�ngre.");
define("_btreseed_seeders"," seedare p� denna torrent ");
define("_btreseed_noneed","No need for this Request there are");
define("_btreseed_sent","Din f�rfr�gan om �terseed har skickats till dem som har laddat ner torrenten:");
define("_btreseed_pm"," har fr�gat om �terseed p� torrenten f�r det finns f� eller inga seeders: 
	   klicka h�r f�r mer info om torrenten");
define("_btreseed_pm_thankyou","Tackar!");
define("_btreseed_pm_subject","F�rfr�gan om �terseed");
#reset requests
define("_btrequest_filled_errmsg1","Ingen uppladdningsplats angiven");
define("_btrequest_filled_errmsg2","Inget Request id angivet");
define("_btrequest_reset","�terst�ll");
define("_btrequest_sent","Request ");
define("_btrequest_success"," lyckad �terst�llning.");
define("_btrequest_sorry","Du kan ej �terst�lla en request");
#filled requests
define("_btrequest_filled_filled","Request Uppladdad");
define("_btrequest_filled_thanks","<BR><BR>Tack f�r att du la upp requesten :)<br><br><a href=viewrequests.php>View More Requests</a>");
define("_btrequest_filled_msg1","Din request, <a href=" . $siteurl . "/reqdetails.php?id=**rqid**><b>**filledturl**</b></a>,
 har lagts upp av <a href=" . $siteurl . "/user.php?op=profile&id=".$user->id."><b>" . $user->name . "</b></a>. 
 Du kan ladda ner din request fr�n <a href=**filledurl**><b>**filledturl**</b></a>.  
 Gl�m inte tacka.  
 Om detta inte �r vad du requestade, �terst�ll din request s� n�n annan kan l�gga upp den 
 <a href=" . $siteurl . "/reqreset.php?requestid=**rqid**>this</a> link.  
 Do <b>NOT</b> follow this link unless you are sure that this does not match your request.");
define("_btrequest_filled_msg6","<br><BR><div align=left>Request **rqid** successfully filled with <a href=**filledurl**>**filledturl**</a>.  User <a href=user.php?op=profile&id=**requester**><b>**requestername**</b></a> was automatically PMd.  <br> Filled that accidently? No worries, <a href=reqreset.php?requestid=**rqid**>CLICK HERE</a> to mark the request as unfilled.  Do <b>NOT</b> follow this link unless you are sure there is a problem.<br><BR></div>");
#requests details
define("_btrequestdetails","REQUEST DETALJER");
define("_btrequestdetails_request","Request: ");
define("_btrequestdetails_desc","Beskrivning");
define("_btrequestdetails_date","Datum requestad");
define("_btrequestdetails_req","Requestad av");
define("_btrequestdetails_vote","R�sta");
define("_btrequestdetails_reqs","REQUESTS");
define("_btrequestdetails_comments","KOMMENTARer");
define("_btrequestdetails_dateadded","Datum tillagd");
define("_btrequestdetails_addedby","TILLAGD AV");
define("_btrequestdetails_tofill","<B>To L�gg upp requesten:</B> </td><td>Fyll i <b>full</b> URLen f�r torrenten i.e. http://www.mysite.com/torrents-details.php?id=134 (bara kopiera/klistra fr�n ett annat f�nster/flik) eller modifiera existerande URL f�r korrekt ID nummer");
define("_btrequestdetails_url","SKRIV-DIRECT-URL-H�R");
define("_btrequestdetails_fill","Ladda upp request");
define("_btrequestdetails_or"," ELLER ");
define("_btrequestdetails_add","L�gg till ny Request");
#ratio warn
define("_btratiowarn_msg","Varning. Din ratio �r f�r l�g och har s� varit i ");
define("_btratiowarn_msg1"," dagar. Du har ");
define("_btratiowarn_msg2"," dagar p� dig att n� ");
define("_btratiowarn_msg3"," annars kommer du bannas!");
define("_btratiowarn_msg4"," f�r l�g ratio ***Low Ratio*** f�r  ");
define("_btratiowarn_msg5"," dagar du var varnad");
#polls
define("_btpolls_delete","Vill du verkligen radera omr�stningen? Klicka\n");
define("_btpolls_delete_here","H�R");
define("_btpolls_delete_sure"," om du �r s�ker.");
define("_btpolls_delete_poll","Radera omr�stning");
define("_btpolls_delete_nopolls","Det finns inga omr�stningar!");
define("_btpolls_delete_error","FEL");
define("_btpolls_index_edit","Editera");
define("_btpolls_index_delete","Radera");
define("_btpolls_index_votes","R�ster: ");
define("_btpolls_overview","Omr�stnings�versikt");
define("_btpolls_overview_id","ID");
define("_btpolls_overview_added","Tillagd");
define("_btpolls_overview_question","Fr�ga!");
define("_btpolls_overview_gmt","GMT");
define("_btpolls_overview_sorry","Sorry...Finns inga omr�stningar med det ID!");
define("_btpolls_overview_ago","ago");
define("_btpolls_overview_questions","Omr�stningsfr�gor");
define("_btpolls_overview_option_no","Val Nej");
define("_btpolls_overview_user","Polls User Overview");
define("_btpolls_overview_userid","UserID");
define("_btpolls_overview_selection","Selection");
define("_btpolls_overview_novotes","Sorry...Inga anv�ndare har r�stat!");
define("_btpolls_overview_back","Tillbaka");
define("_btpolls_polls_notcounted","Ett fel har intr�ffat. Din r�st har inte r�knats");
define("_btpolls_polls_mod","Moderator Val - ");
define("_btpolls_polls_new","Ny");
define("_btpolls_polls_results","Visa Resultat");
define("_btpolls_polls_vote","R�sta");
define("_btpolls_polls_login","Du m�ste logga in f�r att r�sta");
#phpBB.php
define("_btforum_closed","Forumet �r st�ngt");
#paypal
define("_btpaypal_donation","Donation");
define("_btpaypal_giftmsg","Din request p� FTP nekades p� grund av f�r lite donationer\nDu f�r Free Leech f�r din Donation.\nDet kommer vara aktivt i en dag f�r varje $0.323 du Donerar.");
define("_btpaypal_ftp","Din f�rfr�gan p� FTP godk�ndes och kommer aktiveras inom 24h");
define("_btpaypal_giftmsg1","Din Free Leech �r nu aktiv.\nDet kommer vara aktivt i en dag f�r varje $0.323 du Donerar.");
define("_btpaypal_giftmsg2","Din f�rfr�gan efter Ingen Hit And Run varning �r nu aktiv.\nDet kommer vara aktivt i en dag f�r varje $0.323 du Donerar.");
define("_btpaypal_donation_ftp","Donation F�r FTP");
define("_btpaypal_donation_ftp_req"," har Donerat och bett om FTP Access");
define("_btpaypal_donation_thanks",":tackar:\nF�r donationen p�  ");
#offers
define("_bt_voteoffer_noaccess",">Du har inte tillg�ng till erbjudanden just nu");
define("_bt_voteoffer_votesfor",">R�ster p� ");
define("_bt_voteoffer_novotes","Inga r�ster �n");
define("_bt_voteoffer_member","Medlem");
define("_bt_voteoffer_uploaded","Uppladdad");
define("_bt_voteoffer_downloaded","Nerladdad");
define("_bt_voteoffer_ratio","Ratio");
define("_bt_voteoffer_joined","Blev medlem");
define("_bt_voteoffer_ago","sen");
define("_bt_voteoffer_yes","Ja");
define("_bt_voteoffer_no","Nej");
define("_bt_voteoffer_back","Tillbaka");
define("_bt_offers_closed",">Erbjudanden �r st�ngt, �terkom senare...");
define("_bt_offers_offers","Erbjudanden");
define("_bt_offers_make","L�gg ett erbjudande");
define("_bt_offers_ok","Erbjudande OK");
define("_bt_offers_showall","(Visa alla)");
define("_bt_offers_category","Kategori");
define("_bt_offers_torrentname","Torrentnamn");
define("_bt_offers_date","Erbjudandedatum");
define("_bt_offers_uploader","Uploader");
define("_bt_offers_comments","Kommentar");
define("_bt_offers_votes","R�ster");
define("_bt_offers_pm","Skicka PM");
define("_bt_offers_edit","[Editera]");
define("_bt_offers_seeall","Se alla erbjudanden");
define("_bt_offeredit_owner","Du �r inte �garen!");
define("_bt_offeredit_owner1","Du �r inte �garen! Hur gick det till?");
define("_bt_offeredit_edit","Editera Erbjudanden");
define("_bt_offeredit_release","Editera Release ");
define("_bt_offerdetails_deluser","Radera Anv�ndare");
define("_bt_offerdetails_delacc","Raderat Konto");
define("_bt_offerdetails_comemnt","Kommentarer");
define("_bt_offerdetails_level","Niv�: ");
define("_bt_offerdetails_posts","Postningar");
define("_bt_offerdetails_edited","Editerad Av: ");
define("_bt_offerdetails_delete","RADERA KOMMENTAR");
define("_bt_offerdetails_details","Detaljer");
define("_bt_offerdetails_detailsfor","Detaljer f�r");
define("_bt_offerdetails_name","Namn");
define("_bt_offerdetails_desc","Beskrivning");
define("_bt_offerdetails_date","Erbjudandedatum");
define("_bt_offerdetails_by","Erbjudande av");
define("_bt_offerdetails_vote","R�sta");
define("_bt_offerdetails_nocomment","Inga Kommentarer");
define("_bt_offerdetails_addcomment","L�gg till kommentar");

define("_bt_offercomment_id","Fel eller inget ID.");
define("_bt_offercomment_noid","Inga erbjudande med ID **id**.");
define("_bt_offercomment_added","Kommentar tillagd");
define("_bt_offercomment_added1","TILLAGD");
define("_bt_offercomment_addedcomment","L�gg till kommentar f�r ");
define("_bt_offercomment_send","Skicka");
define("_bt_offercomment_reverse","Sista kommentarerna i omv�nd ordning.");
define("_bt_offercomment_wrongid","Fel ID **id**.");
define("_bt_offercomment_edited","Kommentar editerad");
define("_bt_offercomment_edit","EDITERA");
define("_bt_offercomment_editcomment","Editera kommentar f�r ");
define("_bt_offercomment_edit1","Editera");
define("_bt_offercomment_aboutdelete","Du �r p� v�g att radera kommentaren. Klicka");
define("_bt_offercomment_here","H�R");
define("_bt_offercomment_ifsure",", om du �r s�ker.");
define("_bt_offercomment_delcom","Radera kommentar");
define("_bt_offercomment_comdeleted","Kommentar raderad");
define("_bt_offercomment_delete","RADERA");
define("_bt_offercomment_invalid","Ogiltigt ID **id**.");
define("_bt_offercomment_original","Ursprunglig");
define("_bt_offercomment_origid","Ursprunglig kommentar: ");
define("_bt_offercomment_unknown","Unknown action **action**");
define("_bt_offercomment_back","Tillbaka");
#bonus system
define("_btbonus_exchange","Bonus V�xling");
define("_btbonus_exchange_closed","Bonussystemet �r st�ngt");
define("_btbonus_exchange_closed_msg","Bonussytemet �r ej i bruk f�r tillf�llet<br />If you feel you have reached this error By Mistake please contact on of the sites moderatores so the may assest you");
define("_btbonus_","Seedbonus");
define("_btbonus_what_is","H�r kan du v�xla in din seedbonus (currently: ".$user->seedbonus.")<br>(Om knappen �r avaktiverad, s� har du ej tillr�ckligt med bonus.)<br>");
define("_btbonus_option","Val");
define("_btbonus_wb","vad handlar det h�r om?");
define("_btbonus_t","Byt");
define("_btbonus_exchange_now","V�xla!");
define("_btbonus_how_get","Hur f�r jag po�ng?");
define("_btbonus_et"," (varje torrent) ");
define("_btbonus_all"," (totalt) ");
define("_btbonus_how1","Du f�r {1}{2} po�ng f�r varje 10-minuters period systemet registrerar dig som seeder.<br>");
define("_btbonus_how2","Du f�r {1} po�ng f�r att ladda upp en torrent.<br>");
define("_btbonus_how3","Du f�r {1} po�ng f�r att l�mna en kommentar p� en torrent (som inkluderar ett snabbt tack).<br>");
define("_btbonus_how4","Du f�r {1} po�ng f�r att l�gga ett erbjudande<br />");
define("_btbonus_how5","Du f�r {1} po�ng f�r att l�gga upp en request<br />(du f�rlorar po�ngen om din kommentar raderas av dig eller staff)");
define("_btbonus_btp","Tillbaka till din profil");
define("_btbonus_notenouph","Inte tillr�ckligt med po�ng...");
define("_btbonus_no_type","Ingen giltig typ");
define("_btbonus_adm_msg1"," - Anv�ndare har v�xlat {1} Po�ng mot trafik.\n {2}\n");
define("_btbonus_sucs_trafic","Du har v�xlat {1} Po�ng mot trafik");
define("_btbonus__adm_msg2"," - Anv�ndare har v�xlat {1} Po�ng mot inbjudningar.\n ");
define("_btbonus_sucs_invite","Du har v�xlat {1} Po�ng mot inbjudningar");
#memberslist.php
define("_btmemberlist_gp","Anv�ndargruppsinfo");
define("_btmemberlist_gp_gn","Gruppnamn:");
define("_btmemberlist_gp_gd","Gruppbeskrivning:");
define("_btmemberlist","Medlemmar");
define("_btmemberlist_gp_mems","Gruppmedlemmar");
#polls
if(!isset($t))$t = '';
if(!isset($pollid))$pollid = '';
define("_btpolls_nopollid","No poll found with ID ".(isset($pollid))? $pollid : '');
define("_btpolls_missing","Saknas formul�rdata!");
define("_btpolls_current","Note: Nuvarande omr�stning ");
define("_btpolls_old"," �r endast $t gammal.");
define("_btpolls_polls","Omr�stningar");
define("_btpolls_required","Kr�vs");
define("_btpolls_edit","Editera Omr�stning");
define("_btpolls_create","Skapa Omr�stning");
define("_btpolls_yes","Ja");
define("_btpolls_no","Nej");
define("_btpolls_question","Fr�ga ");
define("_btpolls_option1","Alternativ 1 ");
define("_btpolls_option2","Alternativ 2 ");
define("_btpolls_option3","Alternativ 3 ");
define("_btpolls_option4","Alternativ 4 ");
define("_btpolls_option5","Alternativ 5 ");
define("_btpolls_option6","Alternativ 6 ");
define("_btpolls_option7","Alternativ 7 ");
define("_btpolls_option8","Alternativ 8 ");
define("_btpolls_option9","Alternativ 9 ");
define("_btpolls_sort","Sortera");

#invite
define("_btinvite_disbaled","Inbjudningar �r avst�ngda, anv�nd reggningsl�nken.");
define("_btinvite_invite","Inbjudning");
define("_btinvite_noinvite","Inga inbjudningar!");
define("_btinvite_email","Email:");
define("_btinvite_valid","Se till att det �r en giltig mail, mottagaren kommer f� ett bekr�ftelsemail.");
define("_btinvite_message","Meddelande:");
define("_btinvite_send","Skicka inbjudan (Klicka bara en g�ng)");
#index
define("_btindex_video","Spel-Trailers");
define("_btindex_legend","Totalt finns " );
define("_btindex_legend1"," anv�ndare online (baserat p� aktivitet senaste 5 minuterna)<br>Flest anv�ndare online var " );
define("_btindex_total24","Totalt antal anv�ndare online senaste 24h:");
define("_btindex_register7","Totalt reggade senaste 7 dagarna:");
define("_btindex_register24","Totalt reggade senaste 24h:");
define("_btindex_totalregister","Totalt reggade:");
define("_btindex_totaltorrents","Totalt antal torrents:");
define("_btindex_totalshare","Totalt utdelat:");
define("_btindex_totalpeers","Totalt antal Peers:");
define("_btindex_speed","Total �verf�ringshastighet:");
define("_btindex_totalseeders","Totalt antal seeders:");
define("_btindex_totalleechers","Totalt antal leechers");
define("_btindex_client","Mest anv�nda klient:");
#HIT AND RUN
define("_bt_hnrremoved","Din Hit and Run varning har blivit borttagen f�r att du b�rjat seeda igen. Seeda i minst 24h annars aktiveras varningen igen");
define("_bt_HNR","Hit and Run");
define("_btmod_HNR_mesage_a",gmdate("d-m-Y")." - Varnad av systemet f�r Hit and Run.\n");
define("_bt_HNR_WARN_PM","Du har upprepade g�nger varnats f�r Hit and RUN och om det forts�tter kommer du att bannas och ha tillg�ng till trackern igen.");
define("_btmod_HNR_mesage_b",gmdate("d-m-Y")." - Varning borttagen av systemet f�r Hit and Run.\n");
define("_BT_HNR_NOTICE_PM","Det verkar som att du har gjort en hit and run p� {hnrtot} torrent{hnrcount}.\n\nVi f�resl�r att du b�rjar seeda {dessa} torrents{hnrcount} inom 30 minuter annars riskerar du en varning, eller om det h�nder upprepade g�nger att ditt konto st�ngs av.\n\nTorrenten{hnrcount} som du har gjort en Hit and Run p� {�r}:\n{hnrtorrents}");
/*define("","");
define("","");
define("","");
define("","");
define("","");
define("","");
define("","");
define("","");
define("","");
define("","");
define("","");
define("","");
define("","");
define("","");
define("","");
define("","");
define("","");
define("","");
define("","");
define("","");
define("","");
define("","");
define("","");
define("","");
define("","");
define("","");
define("","");
define("","");*/

?>