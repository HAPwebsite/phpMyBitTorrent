<?php
/*
*-------------------------------phpMyBitTorrent--------------------------------*
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
*------              2005 phpMyBitTorrent Development Team              ------*
*-----------               http://phpmybittorrent.com               -----------*
*------------------------------------------------------------------------------*
*/


if (eregi("czech.php",$_SERVER["PHP_SELF"])) die ("You can't access this file directly");

define("_LOCALE","cz_CZ");

//WELCOME MESSAGE :-D
define("_btstart","Welcome to phpMyBitTorrent!<br />
D�ky technologii Bit Torrent, sd�len� va�ich dat s lidmi po cel�m sv�t�
nikdy nebylo jednodu���! Sta�� p�r minut ka za��tku sd�len� a
stahov�n� v�ech soubor� co chcete! N� tracker m��ete voln� pou��vat ke sd�len� va�ich soubor�,
 nebo m��ete nahr�t Torrenty ulo�en� na jin�ch trackerech k
zv��en� jejich d�le�itosti. A tak�, Vy rozhodujete kdo m��e stahovat torrenty! Chr�n�me
va�e soukrom�, nejd�le�it�j�� v�c hned po �ivot�!");

//Donations Block
define("_btdonations","P��sp�vky");
define("_btdonationsgoal","C�l:");
define("_btdonationscollected","Nasb�r�no:");
define("_btdonationsprogress","V�voj p��sp�vk�");
define("_btdonationsdonate","P�ISP�T");

//COMPLAINTS
function getcomplaints() {
        return Array(0=>"Leg�ln� obsah, dobr� kvalita",1=>"Podvrh nebo po�kozen�",2=>"Poru�en� copyrightu",3=>"Pornografick� obsah",4=>"D�tsk� pornografie",5=>"Ur�liv� obsah",6=>"Obsah spojen� s neleg�ln� �innost�");
}

//CLASSI
define("_btclassuser","U�ivatel");
define("_btclasspremium","Premiov� U�ivatel");
define("_btclassmoderator","Moder�tor");
define("_btclassadmin","Administr�tor");

//ACCESSO NEGATO
define("_btaccdenied","P��stup zak�z�n");
define("_btdenuser","Oblast do kter� se sna��te vstoupit je p��stupn� pro <b>registrovan� u�ivatele</b>.<br>Pros�m zadejte va�e �daje a zkuste to znovu. Nebo, se m��ete <a href=\"user.php?op=signup\">zaregistrovat</a> zdarma.");
define("_btdenpremium","Oblast do kter� se sna��te vstoupit je p��stupn� pro <b>Pr�miov� u�ivatele</b>.<br>");
define("_btdenpremium1","Pros�m zadejte Va�e p��stupov� �daje a zkuste to znovu. Pokud nem�te Pr�miov� ��et, pros�m kontaktujte n�e pracovn�ky pro
detailn� informace o schv�len� Premiov�ho ��tu.");
define("_btdenpremium2","V� ��et nen� nastaven pro p��stup k Premiov�m slu�b�m. Pros�m kontaktujte n�e pracovn�ky pro
detailn� informace o schv�len� Premiov�ho ��tu.");
define("_btdenadmin","Oblast do kter� se sna��te vstoupit je p��stupn� pro <b>administr�tory</b>.<br>");
define("_btdenadmin1","Pokud m�te administr�torsk� p��stupov� �daje pros�m zadejte je nyn�, jinak v�s ��d�me k opu�t�n� t�to str�nky a k n�vratu na
<a href=\"index.php\">Domovskou str�nku</a>.");
define("_btdenadmin2","V� ��et nem� administr�torsk� pr�va. Pros�m p�ihla�te se se spr�vn�mi �daji nebo opus�te tuto str�nku a 
vra�te se zp�t na <a href=\"index.php\">Domovskou str�nku</a>.");
define("_btbannedmsg","Byl jste vypov�zen z t�to str�nky proto�e: <b>**reason**</b>");

//GENERICS
define("_DATESTRING","%A, %B %d %Y @ %T %Z");
define("_btpassword","Heslo");
define("_btusername","U�ivatelsk� jm�no");
define("_btsecuritycode","Bezpe�nostn� k�d");
define("_btusermenu","U�ivatelsk� menu");
define("_btmainmenu","Hlavn� menu");
define("_btgenerror","phpMyBitTorrent Error");
define("_btmenu","Menu");
define("_btumenu","U�ivatelsk� Menu");
define("_btsyndicate","Spolupr�ce");
define("_btlegend","Legenda");
define("_btircchat","IRC Chat");
define("_btchatnotenabled","IRC Chat nen� povolen na t�to str�nce.");
define("_btlostpassword","Zapomn�li jste heslo?");
define("_btpm","Soukrom� zpr�vy");

//EMAIL SPELLING
define("_at"," zavin�� ");
define("_dot"," te�ka ");

//SQL ERRORS
define("_btsqlerror1","Error p�i prov�d�n� SQL dotazu ");
define("_btsqlerror2","Error ID: ");
define("_btsqlerror3","Zpr�va Erroru: ");

//HTTP ERRORS
define("_http400errttl","HTTP 400 Error - �patn� po�adavek");
define("_http400errtxt","400 Error nastal p�i zpracov�n� va�� ��dosti.\n
Pros�m zkontrolujte nastaven� va�eho prohl�e�e a zkuste znovu p�istoupit k po�adovan� str�nce.\n
Kontaktujte **email** pokud m�te probl�my.");
define("_http401errttl","HTTP 401 Error - P��stup zak�z�n");
define("_http401errtxt","401 HTTP Error nastal p�i zpracov�n� va�� ��dosti.<br>
Nem��ete vstoupit na po�adovanou str�nku proto�e nejste opr�vn�ni.<br>
Pros�m poskytn�te va�e p��stupov� �daje, pokud n�jak� m�te.<br>
Kontaktujte **email** pokud m�te pot�e.");
define("_http403errttl","HTTP 403 Error - Zak�z�no");
define("_http403errtxt","403 HTTP Error nastal p�i zpracov�n� va�� ��dosti.<br>
Nem��ete p�istoupit k po�adovan� str�nce, proto�e v�m to konfigurace serveru nedovoluje.<br>
Pros�m pe�liv� zkontrolujte URL adresu ve va�em prohl�e�i, a opravte ji pokud je t�eba.<br>
Kontaktujte **email** pokud m�te probl�my.");
define("_http404errttl","HTTP 404 Error - Nenalezeno");
define("_http404errtxt","404 HTTP Error nastal p�i zpracov�n� va�� ��dosti.<br>
Po�adovan� str�nka neexistuje.<br>
Pros�m zkontrolujte pe�liv� URL ve va�em prohl�e�i, a pokud je t�eba opravte.<br>
Kontaktujte **email** pokud m�te probl�my.");
define("_http500errttl","HTTP 500 Error - Vnit�n� Error serveru");
define("_http500errtxt","500 HTTP Error nastal p�i zpracov�n� va�� ��dosti.<br>
Nastala chyba p�i zpracov�n� va�ich dat.<br>
Detailn� info m��ete nal�zt v z�znamech serveru.<br>
Pros�m po�lete o tomtu detailn� zpr�vu na **email**");

//USER BLOCK
define("_btyoureseeding","Torrenty kter� seedujete");
define("_btyoureleeching","Torrenty kter� stahujete");
define("_btuserstats","U�ivatelsk� Statistiky");
define("_bttotusers","Registrovan� u�ivatel�:");
define("_btlastuser","Posledn� registrovan�:");
define("_bttorrents","Dostupn� torrenty:");
define("_bttotshare","Celkov� sd�leno:");
define("_bttotpeers","P�ipojeno Peer�:");
define("_bttotseed","Celkem Seeder�:");
define("_bttotleech","Celkem Peer�:");


//TESTI CHE COMPAIONO IN USER.PHP
define("_btregwelcome","<P align=\"center\">V�tejte!</P>
<P>Zaregistrujte si ��et a p�idejte se do na�� komunity. To v�m umo�n� pln� vyu�it� slu�eb na t�to str�nce, a zabere to jen p�r minut. Zvolte si u�ivatelsk� jm�no a heslo a poskytn�te platnou e-mailovou adresu. B�hem p�r minut obdr��te mail, ��daj�c� v�s potvrdit registraci.</P>");
define("_btreggfxcheck","<P align=\"center\"> Pros�m zadejte n�sleduj�c� bezpe�nostn� k�d (zabra�uje bot�m v registraci).<BR>Kontaktujte **email** pokud m�te probl�my s p�e�ten�m k�du.</P>");
define("_btemailaddress","E-Mailov� adresa");
define("_btpasswd","Heslo (5 znak� minimum)");
define("_btpasswd2","Potvrzen� password");
define("_btsubmit","Registruj");
define("_btreset","Zru� �pravy");
define("_btdisclaimer","Podm�nky:");
define("_btdisclaccept","Souhlas�m");
define("_btdisclrefuse","Nesouhlas�m");
define("_btgfxcode","Bezpe�nostn� k�d");
define("_btsignuperror","Error b�hem procesu registrace");
define("_bterruserexists","U�ivatelsk� jm�no u� existuje.");
define("_btfakemail","Emailov� adresa kterou jste zadali nen� platn�.");
define("_bterremailexists","Emailov� adresa kterou jste zadali je ji� registrovan�. Chcete zjistit heslo? Klikn�te <a href=\"user.php?op=lostpassword\">SEM</a>");
define("_btpasswnotsame","Hesla kter� jste zadala nejsou shodn�");
define("_bttooshortpass","Heslo kter� jste zadal/a je moc kr�tk�. Minim�ln� d�lka je 5.");
define("_bterrcode","Bezpe�nostn� k�d kter� jste zadal/a je �patn�");
define("_btdisclerror","MUS�TE P�IJMOUT na�e Pr�va a ustanoven� aby ste se mohli registrovat.");
define("_btgoback","Pros�m vra�te se a zkontrolujte �daje");
define("_btregcomplete","Registrace skoro dokon�ena. M�te 24 hodin na potvrzen� va�� registrace. Pokud neobdr��te
emailov� potvrzen�, pros�m zkontrolujte data kter� ste zadal/a. Pokud m�te probl�my, pros�m kontaktujte Webmastera na **email**");
define("_bterrusernamenotset","U�ivatelsk� jm�no nevypln�no.");
define("_bterrkeynotset","Aktiva�n� kl�� nespecifikov�n");
define("_bterrusernotexists","Toto u�ivatelsk� jm�no neexistuje.");
define("_bterrinvalidactkey","Aktiva�n� kl�� nen� spr�vn�.");
define("_btuseralreadyactive","U�ivatel je ji� aktivov�n. ��dn� dal�� aktivace nen� t�eba");
define("_btacterror","Error aktivace");
define("_btactcomplete","Aktivace dokon�ena. V� ��et je nyn� trvale aktivov�n. Od te�, m��ete p�istupovat
k na�im slu�b�m pomoc� u�ivatelsk�ho jm�na a hesla kter� jste zadali. P�ejeme p��jemn� stahov�n�.");
define("_btusrpwdnotset","U�ivatelsk� jm�no nebo heslo nespecifikov�no.");
define("_bterremailnotset","E-Mailov� adresa nespecifikov�na.");
define("_btuserpasswrong","Nespr�vn� u�ivatelsk� jm�no nebo heslo!!");
define("_btuserinactive","U�ivatel registrov�n ale neaktivov�n!!");
define("_btloginsuccessful","P�ihl�en� �sp�n�. Nyn� m�te **priv** pr�va. P�ejeme p��jemn� stahov�n�!");
define("_btlogoutsuccessful","Odhl�en� �sp�n�. Data o va�� session byla smaz�na z va�eho PC.");
define("_btusernoexist","Omlouv�me se, ale po�adovan� u�ivatel neexistuje.");
define("_btuserprofile","U�ivatelsk� profil");
define("_btedituserprofile","Editace profilu");
define("_btusertorrents","Torrenty u�ivatele **user**");
define("_btcompletename","Cel� jm�no");
define("_btclass","Level");
define("_btclassbanned","Zak�z�n!");
define("_btclassuser","U�ivatel");
define("_btclasspremium","Premiov� U�ivatel");
define("_btclassadmin","Administr�tor");
define("_btregistered","Registerovan�");
define("_btavatar","Avatar");
define("_btcontacts","Kontakty");
define("_btnewavatargallery","Nov� Avatar z Galerie");
define("_btnewavatarupload","Upload nov�ho Avataru");
define("_btinvalidimagefile","�patn� soubor obr�zku");
define("_btavatartoobig","Obr�zek p�esahuje povolenou velikost");
define("_btlostpasswordintro","Pokud jste ztratili heslo, m��ete znovu z�skat p��stup k va�emu ��tu po zad�n� u�ivatelsk�ho jm�na a NOV�HO hesla.<br />
Potvrzovac� mail bude zasl�n na e-mailovou adresu spojenou s va��m ��tem. Ujist�te se �e m��ete p�ij�mat maily (nap�. va�e schr�nka nen� pln�) ne� potvrd�te svou ��dost. Pokud neobdr��te tento mail, zkuste zkontrolovat v� spamov�-filtr.");
define("_btlostpasswordcheckmail","Zpr�va obsahuj�c� potvrzovac� odkaz byla odesl�na na emailovou adresu. Pros�m klikn�te na odkaz aby nastala zm�na hesla.");
define("_btlostpwdinvalid","�patn� potvrzovac� k�d nebo u�ivatelsk� ID");
define("_btlostpwdcomplete","Heslo zm�n�no. Nyn� se m��ete p�ihl�sit s va��m nov�m heslem.");
define("_btdeluser","Smaz�n� ��tu");
define("_btdeluserwarning","<b>VAROV�N�</b>: chyst�te se trvale a �pln� smazat v� ��et. Ztrat�te editovac� pr�va pro v�echny torrenty kter� ste nauploadoval/a. Bude mo�n� se n�sledn� znovu registrovat s va��m star�m u�ivatelsk�m jm�nem.");
define("_btdeluserwarningadm","<b>VAROV�N�</b>: chyst�te se trvale a �pln� smazat ��et u�ivatele **user**. Pr�va u�ivatele **user** editovat v�echny torrenty kter� on/ona nauploadoval/a budou ztraceny. Registrace znovu se stejn�m u�ivatelsk�m jm�nem bude potom mo�n�.");
define("_btaccountdeleted","��et smaz�n");
define("_btconfirmdelete","Potvr�te smaz�n� ��tu");

//USER/EDITPROFILE.PHP
define("_btnewpassword","Nov� heslo<br />(nechte pr�zdn� pokud ho nechcete m�nit)");
define("_btnewpasswordconfirm","Potvr�te nov� heslo");
define("_btaol","AOL Instant Messenger");
define("_bticq","ICQ");
define("_btjabber","Jabber IM");
define("_btmsn","MSN Messenger");
define("_btskype","Skype");
define("_btyim","Yahoo! Instant Messenger");
define("_btacceptmail","P�ij�mat emaily od ostatn�ch u�ivatel�");
define("_btcustomlanguage","Jazyk");
define("_btaccountstatus","Stav ��tu");
define("_btaccountstatusexplain","Zaktivuje/deaktivuje u�ivatele. POZOR! Nastaven�m u�ivatele kter� byl registrovan� v�ce jak 48 hodin na DEAKTIVOVAN�HO mu tak� sma�e jeho ��et.");
define("_btaccountactive","Aktivn�");
define("_btaccountinactive","Neaktivn�");
define("_btcustomtheme","Vzhled");
define("_btdefault","V�choz�");
define("_btchooseavatar","Zvolte si Avatar");
define("_btusepasskey","Pou��t Passkey (�ifrovan� kl��)");
define("_btpasskeyexplain","Tato mo�nost v�m umo��uje stahovat Torrenty pomoc� osobn�ho bezpe�nostn�o k�du.<br />
Pou�it�m klienta state-of-the-art (stavu techniky), se u� nebudete muset p�ihla�ovat k trackeru nebo pou��vat u�ivatelsk� jm�no a heslo aby ste zaktualizovali ratio (pom�r u/d) pro intern� torrenty trackeru.<br />
Osobn� k�d se automaticky vkl�d� do souboru .torrent kter� st�hnete, z d�vodu autentikace trackeru.<br />
<b>VAROV�N�</b>: NED�VEJTE .torrenty s bezpe�nostn�m k�dem z ruky! Neautorizovan� u�ivatel�, i bez p�ihl�en� na v� ��et, by je mohli pou��t k ovlivn�n� va�eho ratia, kter� m��e v d�sledku sn�it va�e pr�va stahovat z trackeru.<br />
V p��pad� �e se .torrent DOSTANE do �patn�ch rukou, m��ete resetovat passkey.");
define("_btresetpasskey","Resetovat Passkey");
define("_btresetpasskeywarning","<b>VAROV�N�</b>: v�echny torrenty kter� jste dosud st�hli ji� nebudou platn�!");
define("_btprofilesaved","Profil �sp�n� ulo�en!");
define("_btaccesslevel","P��stupov� level");
define("_btdeleteaccount","Smazat ��et");

//TESTI CHE COMPAIONO IN INCLUDE/BITTORRENT.PHP
define("_btindex","Index Torrent�");
define("_bttorrentupload","Upload Torrentu");
define("_btupload","Upload");
define("_btlogin","P�ihl�en�");
define("_btlogout","Odhl�en�");
define("_btsignup","Registrace");
define("_btpersonal","Torrenty od ");
define("_btpm","Soukrom� Zpr�vy");
define("_btadmin","Administrace");
define("_btrulez","Pravidla");
define("_btforums","Forum");
define("_bthelp","Pomoc");
define("_btadvinst","Nainstalujte BitTorrent nebo Shareazu ke st�hnut�");
define("_btaccessden","P��stup zam�tnut. Sta�en� vy�aduje <A href=\"user.php?op=register\">registraci</a>");
define("_btlegenda","Pomoc s vlastnostmi a legendou");
define("_btyourfilext","V� soubor, extern� tracker");
define("_btfile","soubor(y)");
define("_btexternal","Extern� Tracker");
define("_btyourfile","V� soubor");
define("_btsticky","St�l�");
define("_btauthforreq","Authorizace k ��dosti");
define("_btauthreq","Authorizace ��dosti");
define("_btdown","Download");
define("_btunknown","Nezn�m�");
define("_btrefresh","Aktualizace");
define("_btvisible","Viditeln�");
define("_btsd","SD");
define("_btlc","LC");
define("_bttt","TOT");
define("_btseedby","Torrenty seedovan� u�ivatelem");
define("_btleechby","Torrenty stahovan� u�ivatelem ");

//TESTI CHE COMPAIONO IN INDEX.PHP
define("_btwelcome","V�tejte v phpMyBitTorrent");
define("_btsearch","Hledat");
define("_btsearchname","Hledat torrenty");
define("_btin","v");
define("_btalltypes","jak�koli");
define("_btactivetorrents","Aktivn� Torrenty");
define("_btitm","zahrnout mrtv� torrenty");
define("_btstm","Jen mrtv� Torrenty");
define("_btgo","Hledej!");
define("_btresfor","v�sledky t��d�ny podle:");
define("_btnotfound","<h2>��dn� v�sledek!</h2>\n<p>Zkuste zm�nit vyhled�van� v�raz.</p>\n");
define("_btvoidcat","<h2>Tato kategorie je pr�zdn�!</h2>");
define("_btorderby","�a� podle");
define("_btinsdate","Datum vlo�en�");
define("_btname","Jm�no");
define("_btdim","Velikost");
define("_btnfile","Po�et soubor�:");
define("_btevidence","St�l�");
define("_btcomments","Hodnocen� / Koment��e");
define("_btvote","Hodnocen�");
define("_btdownloaded","Sta�eno");
define("_btprivacy","Soukrom�");
define("_bttotsorc","Celkov� po�et peer�");
define("_btdesc","sestupn�");
define("_btord","vzestupn�");
define("_btnosearch","<center><h2>Hledejte soubory kter� chcete stahovat</h2>Pokud pot�ebujete pomoc, zkuste se zeptat ve F�ru; pokud nem��ete pou��t Magnet:/eD2K: odkazy pravd�podobn� nem�te nainstalovan� spr�vn� software<br>P�ipom�n�me �e na�e pravidla ��kaj�, �e v�echny soubory jsou soukrom�, a z�le�� na tom kdo sd�l� soubory zda dovol� ostatn�m lidem stahovat. Je p��sn� zak�z�no sd�let materi�l s copyrightem, porno, d�tsk�-porno, rasistick�, ur�liv� materi�l nebo cokoli co poru�uje z�kony.<br>Jak�koli dr�itel ochran� zn�mky se m��e do�adovat p�id�n� voln�ho filtru jm�na souboru kter� mu umo�n� chr�nit jeho/jej� ochranou zn�mku.</center>");
define("_bthelpfind","Pomoc p�i hled�n�");
define("_bttype","Kategorie");
define("_bttypes","Kategorie");
define("_bttopsource","NEJLEP�� zdroje stahov�n�");
define("_btnotopsource","Zat�m nejsou ��dn� aktivn� torrenty");
define("_btnotseeder_noneed","Zat�m nejsou ��dn� kritick� torrenty");
define("_btnotseeder_desc","Pokud m�te jeden z t�chto soubor�, pros�m seedujte (sd�lejte) je s lidmi kte�� �ekaj� na sta�en�. St�hn�te .torrent, nastavte va�emu klientovi adres�� s kompletn�m souborem, a on za�ne seedovat.<br>D�ky �e jste jeden/a z t�ch HODN�CH KLUK�/HOLEK.</b>");
define("_btnoseedersontracker","V� torrent nen� seedov�n!");
define("_btdeadtorrent","Vypad� to �e <b>v� torrent nen� seedov�n</b>. Tento p�edpoklad nemus� b�t spr�vn�, tak�e prozat�m p�ijmeme v� upload, ale <b>moder�to�i ho mohou pozd�ji odebrat</b>.<br>");
define("_bthelpindex","<p><a name=\"HELP\"></a><a href='index_help.php'>Nainstalujte BitTorrent nebo Shareaza ke st�hnut�</a>");
define("_btnet","Zdrav� Swarmu");
define("_btsource","Zroje");
define("_btvisible","Viditeln�");
define("_bttorrent","Torrent");
define("_btview","Vid�n");
define("_bthits","St�hnut");
define("_btsnatch","Dokon�en");
define("_btalternatesource","<b>Jen alternativn� zdroje (Magnet/ed2K) k dispozici</b>");
define("_btcantscrape","<b>Nepoda�ilo se ur�it data o peeru</b>");
define("_bteasy","<b>Dob�e-seedov�no</b>");
define("_btmedium","<b>Ne tak skv�le</b>");
define("_bthard","<b>�patn� seedov�no/mrtv�</b>");
define("_btstats","Statistiky");
define("_btmisssearchkey","Sch�z� kl�� k hled�n�");
define("_btinfotracker","Kdo je online?");
define("_btnouseronline","Nikdo z registrovan�ch u�ivatel� nen� online");
define("_btonlineusers","Online u�ivatel�");
define("_btadvancedmode","Roz���en� M�d");
define("_btsimplemode","Jednoduch� M�d");
define("_btpagename","Nyn� prohl��");
define("_btloggedinfor","P�ihl�en po dobu");

//PMBT PAGES
define("_btpage_admin.php","Administrace");
define("_btpage_chat.php","Chat");
define("_btpage_details.php","Str�nka s detaily Torrentu");
define("_btpage_edit.php","Editovat Torrent");
define("_btpage_index.php","Domovsk� str�nka");
define("_btpage_mytorrents.php","Torrent Panel");
define("_btpage_search.php","Hledat");
define("_btpage_upload.php","Upload");
define("_btpage_user.php","U�ivatelsk� Panel");

//TESTI CHE COMPAIONO IN DETAILS.PHP
define("_btinfo","Info o Torrentu");
define("_bttracker","Tracker");
define("_btddownloaded","St�hnuto");
define("_btdcomplete","Dokon�eno");
define("_dtimeconnected","�as p�ipojen�");
define("_btsourceurl","Dostupn� na");
define("_btdidle","Pozastaveno");
define("_btdsuccessfully","Torrent nahr�n �sp�n�");
define("_btdsuccessfully2","Pros�m za�n�te seedovat. Viditelnost z�vis� na po�tu zdroj�");
define("_btdsuccessfullye","Editace �sp�n�");
define("_btdgobackto","Zp�tky na str�nku");
define("_btdwhenceyoucame","odkud jste p�i�li");
define("_btdyoursearchfor","Va�e hled�n� pro");
define("_btnotorrent","Torrent neexistuje nebo byl zak�z�n");
define("_btdratingadded","Hodnocen� p�id�no");
define("_btdspytorrentupdate","SpyTorrent aktualizoval zdroje");
define("_btdspytorrentupdate1","B�hem 3 sekund jste p�esm�rov�n� na str�nku ");
define("_btdspytorrentupdate2","Pokud v�s v� prohl�e� nep�esm�ruje, klikn�te");
define("_btdspytorrentupdate3","zde");
define("_btdspytorrentnoupdate","Nen� t�eba spou�t�t SpyTorrent na intern�ch Torrentech d��ve ne� 15 minut p�ed posledn�m scanov�n�m.");
define("_btname","Jm�no");
define("_btdownloadas","St�hnout jako");
define("_btpieces","��sti");
define("_btpiecesstring","**n** ��sti po **l** velikosti");
define("_btauthstatus","Povolen� ke sta�en�");
define("_btdwauthpending","V ��zen�");
define("_btdwauthgranted","Schv�leno!");
define("_btdwauthdenied","Zam�tnuto!");
define("_btdwauthnorequest","Zat�m nevy��d�no");
define("_btpremiumdownload","Pouze pr�miov� u�ivatel� sm�j� st�hnout tento soubor torrent");
define("_btregistereddownload","Mus�te se p�ihl�sit nebo zaregistrovat abyste mohli st�hnout tento torrent");
define("_btnetwork","s�");
define("_btdays","d ");
define("_bthours","h ");
define("_btmins","m ");
define("_btsecs","s ");
define("_btinfohash","Info Hash");
define("_btinfohashnotice","<b>VAROV�N�</b>: Torrent byl modifikov�n tak �e MUS� b�t znovu st�hnut. Soubor kter� ste nahr�li
nen� ji� d�le platn�. Pros�m pou�ijte tla��tko st�hnout abyste dostali funkn�� verzi.");
define("_btdescription","Popis");
define("_btnodead","<b>ne</b> (mrtv�)");
define("_btvisible","Viditeln�");
define("_btbanned","Zak�zan�");
define("_btfiles","soubor(y)");
define("_btothersource","Jin� Zdroje");
define("_btnoselected","Nezvolena ��dn� kategorie");
define("_btago","p�ed");
define("_btlastseeder","Posledn� seeder");
define("_btlastactivity","Posledn� Aktivita");
define("_bttypetorrent","Typ");
define("_btsize","Velikost");
define("_btminvote","Nezvoleno (po�adov�no alespo� __minvotes__ hlas�");
define("_btonly","jen");
define("_btnone","��dn�");
define("_btnovotes","Bez hodnocen�");
define("_btoo5","z 5 s");
define("_btvotestot","celkem hlas�");
define("_btcomplaints","St�nosti");
define("_btlogintorate","(<a href=\"user.php?op=loginform\">P�ihla�te se</a> aby ste mohli volit)");
define("_btvot1","�patn�");
define("_btvot2","Hor��");
define("_btvot3","Ne tak �patn�");
define("_btvot4","Dobr�");
define("_btvot5","Nejlep��");
define("_btaddrating","hlasuj");
define("_btvotenow","Hodno�!");
define("_btrating","Hodnocen�");
define("_bthelpstat","Pomoc se Statistikou");
define("_btviews","vid�no");
define("_bttimes","kr�t");
define("_btleechspeed","Rychlost stahov�n�");
define("_bteta","ETA");
define("_btuppedby","N�hrano u�ivatelem");
define("_btnumfiles","Po�et soubor�");
define("_btfilelist","Soubory");
define("_btlasttrackerupdate","Posledn� update trackeru");
define("_btshowlist","Uka� Peery");
define("_bthidelist","Schovej Peery");
define("_bthelpsource","Pomoc s Peery");
define("_btseeds","Dokon�eno");
define("_btcommentsfortorrent","Komen��e na tomto torrentu");
define("_btbacktofull","Vra�te se zp�t pro pln� detaily");
define("_btnotifyemailcom","Pokud chcete obdr�et email jakmile je p�id�n prvn� koment��, pros�m klikn�te <a href=\"details.php?op=comment&trig=on&id=**id**#notify\">SEM</a>.");
define("_btnotnotifyemailcom","<p>Nyn� jste zaps�ni aby ste obdr�eli email o koment��i. Pokud d�le nechcete dost�vat e-maily, pros�m klikn�te <a href=\"details.php?op=comment&trig=off&id=**id**#notify\">SEM</a>.</p>");
define("_btclickhere","klikn�te sem");
define("_btnotifyemail1s","Pokud chcete obdr�et email jakmile se objev� prvn� <b>SEEDER</b>, pros�m klikn�te <a href=\"details.php?op=seeder&trig=on&id=**id**#notify\">SEM</a>.");
define("_btnotnotifyemail1s","<p>Nyn� jste zaps�ni aby ste obdr�eli email jakmile se objev� seeder. Pokud d�le nechcete dost�vat e-maily, pros�m klikn�te <a href=\"details.php?op=seeder&trig=off&id=**id**#notify\">SEM</a>.</p>");
define("_btaddcomment","P�idat koment��");
define("_btnocommentsyet","Zat�m nejsou ��dn� koment��e");
define("_btcommheader","**time**, <a href=\"user.php?op=profile&id=**uid**\" target=\"_top\">**user**</a> napsal/a:");
define("_btnotnotifyemail1s","aby ste dostal/a e-mail jakmile se prvn� SEEDER objev�");
define("_btdgavesresult","vr�til jeden v�sledek");
define("_btdnotifyemaildel","Byl/a jste odebr�n/a ze seznamu notifikac� koment���");
define("_btdnotifyemaildel1","Ji� neobdr��te dal�� e-maily pokud bude p�id�n koment��!");
define("_btdnotifyemailadd1","Obdr��te e-mail jakmile bude p�id�n koment��, ale neobdr��te dal�� emaily ne� si p�e�tete koment��!");
define("_btdnotifyemailadd","Byl/a jste p�id�n/a ze seznamu notifikac� koment���");
define("_btdnotifyadd","Byl/a jste p�id�n/a ze seznamu notifikac� seeder�");
define("_btdnotifyadd2","dostanete ozn�men� o nov�ch seederech s maximem jednoho emailu denn�,");
define("_btdnotifydel","Byl/a jste odebr�n/a ze seznamu notifikac� seeder�; neobdr��te ��dn� dal�� e-maily.");
define("_btddetails","Detaily Torrentu");
define("_bteditthistorrent","Editovat tento Torrent");
define("_btyes","ano");
define("_btno","ne");
define("_btadded","Nahr�no");
define("_btaddedby","Nahr�no u�ivatelem");
define("_bton","nahoru");
define("_bthelpothersource","Pomoc k Alternativn�m zdroj�m");
define("_btfilename","Jm�no souboru");
define("_btpeers","Peer�");
define("_btpeerstot","Celkem peer�");
define("_bthelppeer","Pomoc k Peer�m");
define("_btleecher","Stahuj�c�");
define("_btleechers","Stahuj�c�ch");
define("_btdhelpdownload","Pomoc k downloadu");
define("_btyourate","Hlasovali jste");
define("_btupdatesource","Aktualizovat zdroje nyn�!");
define("_btseeder","Seeder");
define("_btseeders","Seeder�");
define("_btcompletion","Dokon�eno");
define("_btdirectlink","P��m� odkaz");
define("_btcomplyouvoted","�ekl/a jste �e torrent je: ");
define("_btcomplexplain","Torrent m��e b�t zak�z�n pokud dos�hne ur�it�ho po�tu st�nost�.");
define("_btcomplaintform","Formul�� st�nosti na torrent.<BR>Tento syst�m umo��uje ozna�it torrenty kter� nevyhovuj� na�im pravidl�m.<BR>
Jakmile je dosa�en ur�it� po�et st�nost�, torrent m��e b�t zak�z�n v seznamu.<BR>Pros�m pos�lejte pozitivn� ohlasy na torrenty kter� jsou dobr� a leg�ln�.<BR>");
define("_btcomplisay","Tento Torrent je ");
define("_btmagnetlink","Odkaz na Magnet");
define("_bted2klink","eD2K odkaz");
define("_btcomplatthemoment","U�ivatel� poslali pozitivn� ohlas <b>**p**</b> kr�t and negativn� ohlas <b>**n**</b> kr�t.<BR>");
define("_btnotifications","E-Mailov� Upozorn�n�");
define("_btreadcomms","��st koment��e");
define("_btpostcomment","P�idat koment��");
define("_bttransfer","P�enos");
define("_btdownloadspeed","Rychlost downloadu");
define("_btuploadspeed","Rychlost uploadu");
define("_bttorrentpassword","Ochrana heslem");
define("_btpasswordquery","Tento torrent je chr�n�n heslem. Majitel torrentu se rozhodl �e bude viditeln� pouze opr�vn�n�m u�ivatel�m.<br />Pros�m poskytn�te heslo nyn� aby ste z�skali bezprost�edn� p��stup k torrentu.");
define("_btpasswordwrong","Varov�n�: �patn� heslo.<br />Pamatujte �e hesla jsou case-sensitive.");
define("_btuploadedpassexplain","Nastavili jste heslo na: <b>**pass**</b>");
define("_btuploadedpassexplain2","Aby u�ivatel� mohli p�istupovat k va�emu torrentu, roz�i�te mezi n� n�sleduj�c� p��m� odkaz: <b>**url**<b>");
define("_btcompletedby","Dokon�eno u�ivatelem");
define("_bttrackers","Dal�� Trackery");
define("_bttrackergroup","Skupina *");
define("_btexport","Export");
define("_btexportexplain","St�hnout tento Torrent bez va�eho Passkey, pro distribuci na str�nk�ch kter� poskytuj� BitTorrent index services");

//TESTI PRESENTI IN TAKEUPLOADURL.PHP
define("_btinseriti","Vlo�eno");
define("_btand","a");
define("_btnumerror","jejich ��slo se nerovn� a tak nen� mo�n� pokra�ovat s bin�rn�m p�i�azen�m");
define("_btmaxchar","ED2K URL maj� maximum 200 znak�");
define("_bted2kstart","URL by m�la za��nat <b>ed2k://</b>");
define("_bt2par","URL sch�z� druh� parametr: ");
define("_bturlfile","soubor");
define("_bturlcontent","URL neobsahuje");
define("_btfname","jm�no souboru");
define("_bturlsize","URL neobsahuje");
define("_btsz","velikost");
define("_btidcode","hash info");
define("_bturlparerror","URL neobsahuje parametr:");
define("_bturlsureerror","URL obsahuje ileg�ln� zdroj");
define("_bturlnotinsert","Mus�te vlo�it ED2K Link");
define("_btnotip","IP nespecifikov�na");
define("_btinvip","Neplatn� IP");
define("_btnoport","Nespecifikov�n port");
define("_btinvport","Neplatn� Port");
define("_btparmag","��dn�");
define("_btnopresent","nen� p��tomn�");
define("_btmagchar","MagnetURL maj� maximum 200 znak�");
define("_bftminlimit","Nem��ete sd�let soubory men�� ne�");
define("_btfmaxlimit","V� torrent obsahuje soubor, kter� je p��li� velk�.");
define("_btillegalword","Kl��ov� slova n�zvu souboru nazna�uj� ileg�ln� aktivitu spojenou s t�mto uploadem.");
define("_btillegalwordinfo","N� port�l pou��v� filtr kl��ov�ch slov k zabr�n�n� ileg�ln�ch upload�. V�me, �e i kdy� v� upload obsahuje slova, kter� m��ou aktivovat filtr, m��e b�t po��d naprosto leg�ln�. Pros�m p�ijm�te na�e omluvy a zkuste upload s jin�m jm�nem souboru.");
define("_bturlinserted1","Torrent nauploadov�n. Budete p�esm�rov�ni b�hem 3 sekund.<BR>Pokud v�s v� prohl�ec nep�esm�ruje, klikn�te ");
define("_bturlinserted2","na tento odkaz");
define("_btaddnotifycomment","Byl jste p�id�n do listu notifikac�: obdr��te e-mail o nov�ch koment���ch.");
define("_btaddnotifyseeder","Byl jste p�id�n do listu notifikac�: obdr��te e-mail o nov�ch seedrech.");
define("_btnolinkinsert","Nevlo�en ��dn� odkaz");
define("_btexnostartwt","eXeem odkazy za��naj� exeem://");
define("_btinvalidexeem","Neplatn� eXeem odkaz!");
define("_btillegalcat","Ileg�ln� kategorie!");
define("_bttorrentpresent","Torrent, kter� se sna��te uploadovat u� byl nauploadov�n na tuto str�nku, nebo byl zak�z�n.");
define("_btdescrrequired","Pole popisu je pr�zdn�. Pros�m vra�te se a dopl�te popis.");

//TESTI PRESENTI IN UPLOAD.PHP
define("_btuploadatorrent","Uploadovat Torrent");
define("_btphotoext","Soubor obr�zku mus� b�t GIF, JPG nebo PNG");
define("_btalertmsg","Formul�� nebyl odesl�n kv�li n�sleduj�c�m chyb�m:");
define("_btalertmsg2","Pros�m opravte chyby a zkuste upload znovu");
define("_btfnotselected","ERROR: nebyl vybr�n soubor");
define("_btalertdesc","Pros�m zadejte popis, kter� ud�v� typ souboru a kvalitu, zvl᚝ v p��padu sobor� m�di�");
define("_btalertcat","Zvolte kategorii");
define("_btconferma","P�ipraveni na upload? Pokud torrent obsahuje v�ce soubor�, pros�m vytvo�te ho znovu jako multiarchiv obsahuj�c� cel� adres��. Jinak by mohl b�t nepou�iteln�.");
define("_btalerturl","Vlo�te MAGNET nebo ED2K link (odkaz)");
define("_btalerturlnum1","��slo ED2K odkazu ");
define("_btalerturlnum2","zat�mco ��slo MAGNET odkazu je");
define("_btalerturlnum3","��slo odkaz� mus� b�t stejn� -- torrenty se skl�daj� z p�r� odkaz�");
define("_btalert5char","N�zev souboru mus� m�t alespo� 5 znak�");
define("_btofficialurl","Official tracker t�to str�nky je: ");
define("_btseeded","Pros�m uploadujte pouze torrenty, kter� jsou seedov�ny. Torrenty bez peer� se nezobraz� na hlavn� str�nce.");
define("_btupfile","Uploadovat soubor:");
define("_btupnfo","Uploadovat NFO soubor:");
define("_bttorrentname","Jm�no Torrentu");
define("_btfromtorrent","Bude generov�no z jm�na souboru pokud bude ponech�no pr�zdn�. ");
define("_btdescname","Zkuste d�t popisn� jm�no");
define("_btsrc_url","Zdrojov� URL");
define("_btcompulsory"," (Povinn�)");
define("_btdescription","Popis (vy�adov�n)");
define("_btnohtml","��DN� HTML");
define("_btchooseone","Zvolte");
define("_bttype","Typ");
define("_btverduplicate","Kontrolovat pro podobn� torrenty");
define("_btduplicatinfo","Zabra�uje uploadov�n� torrent� podobn�m t�m, kter� u� jsou v seznamu. Od�krtn�te pokud i p�esto chcete uploadovat. Pamatujte �e duplik�tn� torrenty pro stejn� soubory sni�uj� celkovou efektivitu.");
define("_btupevidence","St�l�");
define("_btupevidencinfo","Ozna�it torrent jako St�l� aby se dr�el na vrchu v seznamu. Vyhrazeno pro moder�tory/adminy");
define("_btowner","Zobrazit Jm�no");
define("_btowner1","Uk�zat U�ivatele");
define("_btowner2","D�v�rn� M�d");
define("_btowner3","Neviditeln� M�d");
define("_btownerinfo","'UK�ZAT U�IVATELE' umo�n� ostatn�m u�ivatel�m vid�t va�e u�ivatelsk� jm�no, 'D�V�RN� M�D' ho schov�, ponech� editovac�/mazac� pr�va, 'NEVIDITELN� M�D' (pokud dostupn�) kompletn� schov� vlastn�ka syst�mu, a nepovoluje ��dn� editace/maz�n� u�ivatelem.");
define("_btupnotify","Notifikace");
define("_btupnotifynfo","Obdr�et e-mailovou-notifikaci p�i p�id�n� koment��e");
define("_btupnotifyseed","Obdr�et e-mailovou-notifikaci jakmile leecher dokon�� soubor (pouze torrenty na lok�ln�m trackeru)");
define("_btfsend","Potvrdit");
define("_btinserte2k","Vlo�it ED2K Odkaz");
define("_btmagnetinsert","Vlo�it Magnet Odkaz");
define("_btinsertlinktitle","Vlo�it odkazy pro s�t� GNutella a eDonkey2000");
define("_btinsertlinktext","M��ete p�idat odkazy eDonkey2000 k va�emu torrentu, pro zv��en� dostupnosti.");
define("_btinserttext2","M��ete vlo�it bu� jen MAGNET odkazy nebo jen ED2K odkazy. Pokud jsou oba vypln�ny, dva odkazy budou asociov�ny ke ka�d�mu souboru: jin�mi slovy prvn� ED2K odkaz a prvn� MAGNET odkaz bude asociov�n na prvn� soubor, a tak d�le...");
define("_bted2kurl","Vlo�it ED2K odkaz");
define("_btsyntax","Jako");
define("_btfiletype","p��pona");
define("_btfilesize","velikost");
define("_btidcode","infohash");
define("_btipport","ip:port");
define("_btstatic","ukazuje �e pou��v�me pouze protokol eDonkey2000");
define("_btfinalname","je jm�no souboru ke sta�en�");
define("_btfinalsize","je velikost bytu souboru");
define("_btfinalidcode","je speci�ln� ov��ovac� k�d, kter� umo��uje naj�t POUZE JEDEN SOUBOR, a jeho kopie, mezi mnoh�mi podobn�mi");
define("_btfinalipport","reprezentuje hlavn� stabiln� zdroj (pou��van� vydavateli)");
define("_btor","nebo");
define("_btaddmagnet","Magnet odkaz");
define("_btadded2k","eD2K odkaz");
define("_btphoto","Obr�zek");
define("_btexeemlink","eXeem odkaz");
define("_btexeemlinkexplain","Voliteln�. Pokud torrent m��e b�t st�hnut skrz s� eXeem, m��ete vlo�it alternativn� odkaz sem");
define("_bttorrentpasswordexplain","M��ete zvolit heslo k ochran� va�eho Torrentu od nepovolen�ch p��stup�. Pokud je heslo nastaveno, Torrent nebude
viditeln� nikomu krom� Premiov�ch U�ivatel� a Administr�tor� v Torrent Listu a Hled�n� Torrent�. Budete muset poskytnout p��m� odkaz lidem, kter�m chcete d�t p��stup k Torrentu.
Pouze Intern� Torrenty m��ou b�t Chr�n�ny Heslem.");
define("_btupadvopts","Roz���en� Mo�nosti");
define("_btadvoptsexplain","Uk�zat roz���en� mo�nosti, ovl�daj�c� n�kter� technick� aspekty torrentu. Pou�ijte tyto mo�nosti pouze pokud v�te co d�l�te!");
define("_btleaveintact","Nem�nit toto nastaven�");
define("_btdhtsupport","Podpora DHT");
define("_btendht","Vynutit z�lo�n� DHT");
define("_btdisdht","Vypnout DHT");
define("_btdhtsupportexplain","Toto vynut� z�lo�n� DHT na va�em torrentu, nebo ho vypne. DHT je u�ite�n� pokud m� hlavn� tracker v�padek nebo je p�et�en�");
define("_btprivatetorrent","Soukrom� Torrent");
define("_btenpvt","Ozna�it torrent jako soukrom�");
define("_btdispvt","Ozna�it torrent jako ve�ejn�");
define("_btprivatetorrentexplain","\"soukrom�\"-mo�nost (kterou zvl�dnou jen n�kte�� klienti), ��k� klientovi aby pracoval pouze s peery, kter� obdr�� od centr�ln�ho trackeru. Zapnut� mo�nosti Soukrom� vypne DHT");

//UPLOAD-LINK
define("_btuploadalinkarchive","Uploadovat eD2K/Magnet odkaz");
define("_btsharelink","Uploadovat pouze pokud je soubor sd�len.");
define("_btlinknotice","Odkaz NEBUDE p�ijat pokud v�ce ne� p�lka soubor�, kter� pos�late u� je p��tomna v indexu. Duplik�ty sni�uj� celkovou efektivitu");
define("_btarchivename","Jm�no");
define("_btlinks","Odkazy na soubor");
define("_btinsert1file","Vlo�te odkaz(y) pro v� soubor, a stiskn�te 'P�idat Soubor'. eD2K odkaz je povinn�. M��ete p�idat v�c jak jeden soubor k va�emu p��sp�vku.");
define("_btlinksnomatch","Odkazy, kter� jste zadal nereprezentuj� stejn� soubor");
define("_btinvalided2k","Neplatn� eD2K odkaz");
define("_btinvalidmagnet","Neplatn� Magnet odkaz");
define("_btaddnewfile","P�idat Soubor");
define("_btaddtoarchive","P�idat Soubor");
define("_btaddmd5","MD5 Hash");
define("_btlinks","Odkazy");
define("_bterrduplicatelinks","Duplikovan� soubory nejsou povoleny");
define("_btduplicatelinks","Duplikovan� Soubor");
define("_btduplicateexplain","Soubor reprezentovan� odkazem v�mi poslan�m je u� sd�len na t�to str�nce. Klikn�te na symbol varov�n� vedle souboru ke zkontrolov�n� torrentu/kolekce v kter� byl nalezen. Pokud je v�ce ne� 50% odkaz� v�mi p�idan�ch u� p��tomno, v� p��sp�v�k nebude p�ijat");
define("_btinsertfilesfirst","Mus�te poslat alespo� jeden soubor pou�it�m p��slu�n�ho tla��tka");
define("_btfilelistaltered","Seznam soubor� byl zm�n�n! Nebyl vytvo�en za u�it� tohoto n�stroje.");

//INTERNAL TRACKER
define("_btuserip","U�ivatelsk� jm�n�/IP");
define("_btport","Port");
define("_btdownloadedbts","Sta�eno");
define("_btuploadedbts","Uploadov�no");
define("_btratio","Pom�r");
define("_btpercent","Kompletn� Zdroje");
define("_btconnected","P�ipojeno");
define("_btidle","Neaktivn�");
define("_btconn","P�ipojen�");
define("_btactive","Aktivn�");
define("_btpassive","Pasivn�");
define("_btpeerspeed","Pr�m. Rychlost");
define("_btnopeer","��dn� pee�i");

//Scrape external torrents

define("_admtrackers","Extern� Trackery");
define("_admtrackerurl","Oznamovac� URL");
define("_admtrkstatus","Status");
define("_admtrkstatusactive","Aktivn�");
define("_admtrkstatusdead","Offline");
define("_admtrklastupdate","Aktualizov�n");
define("_admtrkscraping","Aktualizuji");
define("_admtrkassociatedtorrents","Torrenty");
define("_admtrkscraping","Aktualizuji Tracker...");
define("_admtrkcannotopen","Nemohu kontaktovat URL Adresu. Tracker bude nastaven jako Offline");
define("_admtrkrawdata","Tracker dosa�en. Zde je k�dovan� odpov��");
define("_admtrkinvalidbencode","Nem��u dek�dovat odpov�� Trackeru. Neplatn� k�dov�n�");
define("_admtrkdata","Dek�dov�n� dokon�eno. Zde jsou obdr�en� Scrape data");
define("_admtrksummarystr","Nalezeno <b>**seed**</b> seeder�, <b>**leechers**</b> leecher�, <b>**completed**</b> dokon�en�ch download� pro Torrent **name** Info Hash **hash**.");


//TESTI CHE COMPAIONO IN COMMENT.PHP
define("_btiderror","Neplatn� ID");
define("_btnotfoundid","Torrent neexistuje");
define("_btaddcomment","P�idat koment�� k");
define("_btaddtime","Upload ");
define("_btby","od");
define("_btsend","P�ijmout");
define("_btnotyourcomment","Nem��ete m�nit koment��e jin�ch lid�.");
define("_btcommentinserted","V� koment�� byl vlo�en. Budete p�esm�rov�n� na str�nku s detaily torrentu b�hem 3 sekund.<br>Klikn�te <a href=\"details.php?id=**id**#comments\">ZDE</a> pokud v�s prohl�e� nep�esm�ruje.");
define("_btcommentdeleted","Koment�� smaz�n. Budete p�esm�rov�n� na str�nku s detaily torrentu b�hem 3 sekund.<br>Klikn�te <a href=\"details.php?id=**id**#comments\">ZDE</a> pokud v�s prohl�e� nep�esm�ruje.");

//TESTI CHE COMPAIONO IN DOWNLOAD.PHP
define("_bttorrentunavailable","Torrent nen� dostupn� kv�li chyb� v konfiguraci serveru. Omlouv�me se za nep��jemnosti.");
define("_btminseedrule","Mus�te seedovat minim�ln� **min** torrent� aby ste mohl stahovat.");
define("_btmaxdailydownloads","Nem��ete st�hnout v�ce ne� **max** soubor� denn�. Pros�m zkuste to znovu z�tra.");
define("_btmaxweeklydownloads","Nem��ete st�hnout v�ce ne� **max** soubor� t�dn�. Pros�m zkuste to znovu p��t� t�den.");
define("_bterrtoosmall","<li>Mus�te seedovat soubor alespo� <b>**min_share**</b> velik�.<br>");
define("_bterrtoobig","<b>Nejv�t�� soubor, kter� seedujete je ");
define("_bterrorprivate","Toto je soukrom� soubor: ji� jste ��dal o povolen� st�hnout. Nem��ete st�hnout soubor dokud vlastn�k nep�ijme va�i ��dost.");
define("_btrefused","Vlastn�k zam�tl va�i ��dost. Nebudete si moci st�hnout tento torrent.");
define("_bterrblacklist","Vlastn�k v�m zak�zal st�hnout si jeho torrenty. Nebudete moci si st�hnout jak�koli z nich.");
define("_btreqsent","Tento Torrent je soukrom�. Nebudete si ho moci st�hnout dokud v�m vlastn�k ned� povolen�.
��dost byla posl�na vlastn�kovi torrentur, kter� mus� povolit v� download: v�sledek v�m bude ozn�men e-mailem.");

//TESTI CHE COMPAIONO IN EDIT.PHP
define("_btedittorrent","Zm�nit Torrent");
define("_bterreditnoowner","<h1>P��stup Zam�tnut</h1>\n<p>Jen vlastn�k torrentu a administr�to�i mohou m�nit torrenty</p>\n");
define("_btbanned","Zak�z�no");
define("_btcancel","Zru�it");
define("_btdelcommand","Needitovat torrent, ale <input type=\"submit\" value=\"SMAZAT HO!\" />\n");
define("_btsure","Ano: Jsem si t�m jist�!");
define("_btban","Zak�zat Torrent");
define("_btareyousure","Jste si jist� �e chcete smazat <b>**name**</b>?");
define("_btareyousure_ban","Jste si jist� �e chcete zak�zat <b>**name**</b>?");
define("_bttorrentnoexist","Tento torrent neexistuje");
define("_btdelete","Smazat torrent");
define("_btcannotdel","Nemohu smazat");
define("_btmissingdata","Po�adovan� data chyb�!");
define("_btdeldenied","Jen vlastn�k torrentu nebo administr�to�i mohou mazat tento torrent");
define("_btnotconfirmed","Mus�te potvrdit �e si jste jist� co se chyst�te ud�lat.");
define("_btdeleted","Torrent smaz�n");
define("_btgoback","Vr�tit se zp�t");
define("_btsuccessfullyedited","Torrent �sp�n� zm�n�n. Budete p�esm�rov�ni na str�nku s detaily torrentu. Zapamatujte si �e pokud jste zvolili Neviditeln� M�d, nebudete u� moci m�nit nebo mazat torrent!");

//TESTI CHE COMPAIONO IN MYTORRENTS.PHP
define("_btmytorrentsintrotitle","Kontroln� Panel Torrent�");
define("_btmytorrentsintrotext","V t�to oblasti m��ete spravovat va�e nauploadovan� torrenty (krom� t�ch se zvolen�m Neviditeln�m M�dem).<br>
Take m��ete spravovat ��dosti ostatn�ch u�ivatel� na st�hnut�. Vybr�n�m spr�vn� ikony, m��ete vid�t v�echny ��dosti ostatn�ch u�ivatel�
poslan�ch v�m. Budete se muset rozhodnout jestli p�ijmout nebo odm�tnout ��dost ke sta�en�.<br>
D�vejte pozor na velikost uploadu a downloadu u�ivatele. Lid�, kte�� stahuj� a nesd�lej� nejsou ��dn�m p��nosem pro
S� BitTorrent. Odm�tnut� jejich ��dost� ke sta�en� m��e b�t p�im��en� cesta povzbudit je sd�let v�ce.");
define("_btmytorrents","M� Torrenty");
define("_btallauthorized","V�ichni u�ivatel� byli autorizov�ni");
define("_btauths","��dosti o sta�en�");
define("_btauthorized","Zvolen� u�ivatel� byli autorizov�ni");
define("_bthasauthorized","Vlastn�k v�s autorizoval st�hnout si jeho soubory");
define("_btnowcandownload","M��ete nyn� voln� stahovat v�echny u�ivatelovi soubory.\nOchra�ujeme va�e soukrom�.");
define("_pendingauths","Nerozhodnut� Autorizace: ");
define("_btauthorizationrequested","N�sleduj�c� u�ivatel� po��dali o autorizaci ke sta�en�:");
define("_btnotorrents","Nejsou ��dn� torrenty");
define("_btnotorrentuploaded","Nenauploadoval jste je�t� ��dn� torrenty");
define("_btactions","Akce");
define("_bthasuploaded","Uploadov�no: **");
define("_bthasdownloaded","Sta�eno: **");
define("_btauthgrant","Autorizovat");
define("_btauthalwaysgrant","V�dy Autorizovat");
define("_btauthalwaysdeny","Nikdy Neautorizovat");
define("_btauthdeny","Neautorizovat");
define("_btcantseeothertorrents","Nem��ete prohl�et povolen� u torrent� ostatn�ch u�ivatel�!");
define("_btauthpanel","Kontoln� Panel Autorizac� Sta�en�");
define("_btnoauthstomanage","Nejsou autorizace ke spravov�n�");
define("_btmyglobals","M� Glob�ln� Autorizace");
define("_btnoglobals","Zat�m nejsou ��dn� Globln� Autorizace");
define("_btstatus","Status");
define("_btauthreset","Reset");
define("_btwronginput","Error p�i zad�v�n� dat");
define("_btgeneraloptions","Hlavn� Mo�nosti");
define("_btprivate","Soukrom�");
define("_btprivateexpl","Ozna�te tuto mo�nost pro u�ivatele k vy��d�n� authorizace k p��stupu ke sta�en� tohoto Torrentu. Budete upozorn�ni na ka�dou nerozhodnutou authorizace emailem.
Budete moci vybrat jestli povolit nebo zam�tnout authorizaci pro tento jeden torrent nebo pro v�echny va�e torrenty");
define("_btminratio","Minim�ln� Pom�r");
define("_btdisabled","Zak�z�no");
define("_btminratioexpl","M��ete nastavit minim�ln� hodnotu pom�ru pro auto-autorizov�n� u�ivatel�. U�ivatel� s pom�rem v�t��m nebo stejn�m jako je nastaven� budou moci st�hnout bez vy�adov�n� autorizace.
Hodnota minim�ln�ho pom�ru nebude zobrazena nikomu, pouze s v�jimkou Administrator�");

//TESTI CHE COMPAIONO IN TAKECOMMENT.PHP
define("_btcommentkeyfound","Syst�m zkontroloval v� koment��. N�sleduj�c� slova nejsou povolena:<ol>");
define("_btcommentkeyfound2","</ol><p>V�me �e koment�� m��e b�t i tak v po��dku, omlouv�me se za pot�e a ��d�me v�s o pou�it� jin�ch slov.</p>");
define("_btcommentinserted","Koment�� �sp�n� vlo�en, budete p�esm�rov�n na str�nku s detaily torrentu b�hem 3 sekund...<br>Klikn�te <a href=\"details.php?id=**id**#comm**newid**\">SEM</a> pokud v�s v� prohl�ec nep�esm�ruje.");

//TESTI CHE COMPAIONO IN TAKEEDIT.PHP
define("_btmissingformdata","Chyb�j�c� vstupn� data!");
define("_bteditfailed","�prava selhala");
define("_bteditdenied","Nem��ete upravovat torrenty ostatn�ch lid�.");
define("_btreturl","Soubor �sp�n� zm�n�n, budete p�esm�rov�n na str�nku s detaily torrentu b�hem 3 sekund...<br>Klikn�te <a href=\"**returl**\">SEM</a> pokud v�s v� prohl�ec nep�esm�ruje.");

//TESTI CHE COMPAIONO IN RATE.PHP
define("_btrate","Hodnocen� Torrentu");
define("_btratefailed","Hlasov�n� selhalo!");
define("_btinvalidrating","Neplatn� hlas");
define("_btidnotorrent","Neplatn� ID. Torrent neexistuje");
define("_btnovoteowntorrent","Nm��ete hodnotit vlastn� torrenty");
define("_btalreadyrated","Torrent u� byl hodnocen");
define("_btcantvotetwice","Je n�m l�to, ale nem��ete hodnotit torrent dvakr�t");
define("_btvotedone","Hlasov�n� �sp�n�, budete p�esm�rov�n na str�nku s detaily torrentu b�hem 3 sekund.<br>Klikn�te <a href=\"details.php?id=**id**\">SEM</a> pokud v�s v� prohl�ec nep�esm�ruje.");

//TESTI CHE COMPAIONO IN TAKEUPLOAD.PHP
define("_btuploaderror","Upload selhal!");
define("_btemptyfname","Pr�zdn� jm�no souboru");
define("_btinvalidfname","Neplatn� jm�no souboru");
define("_btinvalidnfofname","Neplatn� NFO soubor");
define("_btfnamenonfo","Toto nen� NFO soubor (.nfo)");
define("_btfnamenotorrent","Toto nen� soubor torrentu (.torrent)");
define("_btferror","Error Souboru");
define("_bterrnofileupload","Kritick� error v uploadovan�m souboru.");
define("_bterrnonfoupload","Kritick� error v uploadovan�m NFO souboru.");
define("_btemptyfile","Pr�zdn� soubor");
define("_btnobenc","Soubor po�kozen. Jste si opravdu jist �e to je soubor torrentu?");
define("_btnodictionary","Slovn�k Torrentu chyb�");
define("_btdictionarymisskey","Chybej� Kl��e Slovn�ku Torrentu");
define("_btdictionaryinventry","Neplatn� data uvnit� Slovn�ku Torrentu");
define("_btdictionaryinvetype","Neplatn� datov� typy ve Slovn�ku Torrentu");
define("_btinvannounce","Neplatn� Announce URL. Mus� b�t ");
define("_btactualannounce","Specifikovan� tracker ");
define("_bttrackerdisabled","N� tracker byl vypnut: pouze extern� torrenty mohou b�t uploadov�ny.");
define("_btinvpieces","Neplatn� ��sti torrentu");
define("_btmissinglength","Chyb� soubory a velikost");
define("_btnofilesintorrent","Chyb� soubory Torrentu");
define("_btfnamerror","Neplatn� jm�no souboru");
define("_btinvalidhtml","Neplatn� HTML K�d. Ujist�te se �e jste pou�ili n� editor m�sto ru�n�ho zad�v�n� k�du.");
define("_bttrackerblacklisted","Tracker pou��van� t�mto torrentem (<b>**trk**</b>) byl zak�z�n. Pros�m pou�ijte jin� tracker.");
define("_btfilenamerror","Error v n�zvu souboru");
define("_bttorrenttoosmall","<p>Nem��ete sd�let soubor men�� ne� <b>");
define("_bttorrenttoosmall2","</b></p><p>V� torrent obsahuje soubor s n�sleduj�c� velikost�: <b>");
define("_btmaxuploadexceeded","Nem��ete uploadovat v�ce ne� **maxupload** b�hem 24 hodin.");
define("_btnumfileexceeded","<p>Nem��ete uploadovat v�ce ne� <b>**maxupload**</b> soubor� b�hem 24 hodin.</p><p>U� jste uploadoval <b>**rownum**</b> soubor�, o celkov� velikosti <b>**totsize**</b>");
define("_btsearchdupl","Podle hled�n�, tyto soubory mohou odpov�dat t�m co sd�l�te:<ol>");
define("_btduplinfo","<p>Pokud je v� soubor v tomto seznamu, pros�m seedujte jeden z t�chto torrent�!</p>");
define("_btsocktout","ERROR: Socketu vypr�el �as");
define("_bttrackernotresponding","Tracker neodpov�d�.\n Ov��te hl�skov�n� trackeru (��DN� PR�ZDN� M�STA UVNIT� URL) a �e tracker b�� a funguje. Tracker v�mi specifikovan� je:");
define("_bttrackerdata","Neplatn� data z extern�ho trackeru. Tracker m��e m�t pot�e se serverem. Pros�m zkuste to pozd�ji znovu.");
define("_bttorrentnotregistered","Torrent se nezd� b�t registrov�n na extern�m trackeru. M��ete uploadovat extern� torrenty pouze pokud jsou aktivn�.");
define("_btuploadcomplete","�sp�n� nauploadov�no. Budete p�esm�rov�n na str�nku s detaily torrentu b�hem 3 sekund. Nezapome�te seedovat, jinak nebude torrent viditeln� na hlavn� str�nce.<br>Klikn�te <a href=\"**url**\">SEM</a> pokud v�s v� prohl�e� nep�esm�ruje.");
define("_btpresent","Tento torrent u� byl nauploadov�n");
define("_btscrapeerror","Nem��u z�skat data o peerech z trackeru");

//TESTI CHE COMPAIONO IN TAKECOMPLAINT.PHP
define("_btcomplisnowbanned","Tento Torrent byl zak�z�n kv�li mno�stv� st�nost�");
define("_btcomplcantvotetwice","Je n�m l�to, ale nem��ete poslat st�nost dvakr�t.");
define("_btcomplainttaken","St�nost zaregistrov�na. Budete p�esm�rov�n na str�nku s detaily torrentu b�hem 3 sekund. Pokud v�s v� prohl�e� nep�esm�ruje, klikn�te ");
define("_btcomplsuccess","Va�e st�nost byla zaregistrov�na. U�ivatelsk� jm�no a IP jsou zaznamen�ny: pros�m nezneu��vejte syst�m.<BR>");

//SHOUTBOX
define("_btshoutbox","Shoutbox");
define("_btnoshouts","Nikdo nek�i��...");
define("_btshoutnow","Vyk�iknout!");

//Donations Block
define("_btdonations","P��sp�vky");
define("_btdonationsgoal","C�l:");
define("_btdonationscollected","Shrom�d�no:");
define("_btdonationsprogress","V�voj P��sp�vk�");
define("_btdonationsdonate","P�ISP�T");

//IMAGE ALTERNATES
define("_btalt_banned","Zak�zan� torrent");
define("_btalt_auth_none","��dn� nevy��zen� Autorizace");
define("_btalt_auth_pending","Nevy��zen� Autorizace!");
define("_btalt_sticky","St�l� torrent");
define("_btalt_download","St�hnout");
define("_btalt_edit","Zm�nit");
define("_btalt_drop","Smazat");
define("_btalt_scrape","Zkontrolovat Data Peer�");
define("_btalt_duplicate","Duplikovat soubor");
define("_btalt_exeem","St�hnout pomoc� eXeemu");
define("_btalt_error.gif","Error");
define("_btalt_icon_admin","Administr�tor");
define("_btalt_icon_moderator","Moder�tor");
define("_btalt_icon_premium.gif","Premov� U�ivatel");
define("_btalt_1.gif","OPRAVDU �patn�");
define("_btalt_1.5.gif","Velmi �patn�");
define("_btalt_2.gif","�patn�");
define("_btalt_2.5.gif","Slab�");
define("_btalt_3.gif","Pr�m�rn�");
define("_btalt_3.5.gif","Lep�� ne� Pr�m�rn�");
define("_btalt_4.gif","Dobr�");
define("_btalt_4.5.gif","Velmi Dobr�");
define("_btalt_5.gif","Vynikaj�c�");
define("_btalt_anon_tracker.gif","Animace Trackeru");
define("_btalt_button_aim.gif","AOL Instant Messenger");
define("_btalt_button_icq.gif","ICQ");
define("_btalt_button_irc.gif","IRC");
define("_btalt_button_msn.gif","MSN Messenger");
define("_btalt_button_yahoo.gif","Yahoo! Messenger");
define("_btalt_ed2k_active.gif","St�hnout pomoc� eD2K URI");
define("_btalt_ed2k_inactive.gif","eD2K odkaz Nedostupn�");
define("_btalt_magnet","St�hnout pomoc� Magnet URI");
define("_btalt_magnet_inactive.gif","Alternativn� odkaz Nedostupn�");
define("_btalt_green.gif","Rychl�");
define("_btalt_yellow.gif","Pomal�");
define("_btalt_red.gif","Zastaveno");
define("_btalt_quest.gif","Data o Peerech nezn�m�");
define("_btalt_lock","Nevy��zen� Autorizace");
define("_btalt_lock_request","Po��dat o Autorizaci");
define("_btalt_noavatar.gif","��dn� Avatar");
define("_btalt_icon_active.gif","Aktivn�");
define("_btalt_icon_passive.gif","Pasivn�");
define("_btalt_external","Extern� Tracker");

define("_btunknownclient","Nezn�m� Klient");
define("_btalt_avatar","Avatar pro **user**");

//STATISTICS
define("_btstats","Statistiky");

//PRIVATE MESSAGES
define("_btyougotpm","M�te nov�/nep�e�ten� zpr�vy!");
define("_btpmintro","Zde si m��ete p�e��st soukrom� zpr�vy od ostatn�ch u�ivatel�. Nen� maxim�ln� sladovac� limit.
Nicm�n� v�m doporu�ujeme pravideln� mazat star� zpr�vy. M��ete pos�lat zpr�vy v�em registrovan�m u�ivatel�m.");
define("_btinbox","Schr�nka");
define("_btpmnomessages","��dn� zpr�vy");
define("_btpmsub","P�edm�t");
define("_btpmfrom","Od");
define("_btpmdate","Datum");
define("_btplmselect","Ozna�it");
define("_btpmread","P�e�ten�");
define("_btpmunread","Nep�e�ten�");
define("_btpmnewmsg","Nov� zpr�va");
define("_btpmdelete","Smazat zpr�vy");
define("_btpmdelall","Smazat v�echny zpr�vy");
define("_btpmdelconfirm","Jste si jist� �e chcete smazat v�echny ozna�en� zpr�vy?");
define("_btpmdelbtn","Smazat zpr�vy");
define("_btpmdelallconfirm","Jste si jist� �e chcete smazat <b>v�echny</b> va�e soukrom� zpr�vy?");
define("_btpmdeletedsuccessfully","Zpr�vy �sp�n� smaz�ny");
define("_btnewpm","Nov� zpr�va");
define("_btpmto","P��jemce");
define("_btpmtotip","Pokud chcete poslat stejnou zpr�vu v�ce u�ivatel�m, odd�lte je pomoc� st�edn�ku (;)");
define("_btpmshowbookmarks","Uk�zat/Schovat seznam kontakt�");
define("_btpmtext","Text zpr�vy");
define("_btpmnorecipient","Mus�te specifikovat p��jemce");
define("_btpmnosubject","Mus�te specifikovat p�edm�t");
define("_btpmnomessage","Pr�zdn� zpr�va");
define("_btpminvalidrecipients","Jeden nebo v�ce p��jemc�, kter� jste uvedl, neexistuj�");
define("_btpmsentsuccessfully","Zpr�va �sp�n� posl�na");
define("_btpmuserblocked","Jeden z p��jemc� od v�s nep�ij�m� zpr�vy. Napsal jste:<br><br>");
define("_btmessage","Zpr�va");
define("_btinvalidpm","Neplatn� zpr�va");
define("_btpmnoexists","Zpr�va neexistuje");
define("_btpmreply","Odpov�d�t");
define("_btuserlists","P��tel� a ignorovan� u�ivatel�");
define("_btuserlistsintro","Zde m��ete spravovat seznam p��tel a ignorovan�ch u�ivatel�. Tito jsou dostupn� ve va�em seznamu kontakt� pro rychl� p��stup p�i pos�l�n� zpr�vy.
V�echny zpr�vy od ignorovan�ch u�ivatel� budou blokov�ny. M��ete zm�nit stav u�ivatele v jeho/jej�m profilu. U�ivatel� nemaj� informaci o stavu p�i�azen�m ostatn�mi.");
define("_btpmbookmarkuser","P�idat do P��tel");
define("_btpmunbookmarkuser","Odstranit z P��tel");
define("_btpmblacklistuser","Odm�tnout zpr�vy tohoto u�ivatele");
define("_btpmunblacklistuser","Neodm�tat zpr�vy tohoto u�ivatele");
define("_btpmbookmarks","P��tel�");
define("_btpmblacklist","Ignorovan� u�ivatel�");

//OVERLIB HELP
#NO LINE-BREAKS!!!!
define("_btperformance","V�kon");
define("_btdht","Podpora DHT");
define("_bttorrentspd","Celkov� Rychlost:");
define("_btleechspd","Odhadovan� Rychlost: ");
define("_btedt","Odhadovan� �as Sta�en�: ");
define("_btinfohashhelp","Info Hash je kr�tk�, unik�tn� k�d indentifikuj�c� torrent.<br>");
define("_btdhtexplanation","Tento torrent podporuje DHT. S klientem schopn�m tohoto vyu��t, budete schopni st�hnout tento torrent i kdy� centr�ln� tracker bude m�t v�padek.");
define("_btavatarnotice","Uploadovan� avata�i mus� b�t ve form�tu GIF, JPEG nebo PNG, doporu�en� velikost 100x100 a nem��e b�t v�t�� ne� 300KB");
define("_btcustomsearch","RSS/RDF zdroj pro vlastn� vyhled�v�n�");
define("_btcustomsearchexplain","Podepi�te se k tomuto RSS/RDF zdroji aby jste byl aktualizov�n o uploadech odpov�daj�c�m va��m term�n�m");

// Rules
define("_btrules","Pravidla");
define("_brrulesadmin","Admin-Pravidla");
define("_btrulesmod","Moder�tor-Pravidla");
define("_btrulesprem","Premium-Pravidla");
define("_btrulesuser","U�ivatel-Pravidla");
define("_btrulesgen","Obecn�-Pravidla");
define("_btrulesadd","P�idat Sekci Nov� Pravidla");
define("_btrulesaddsect","P�idat Sekci Pravidlo");
define("_btnamelevel","U�ivatelsk� Level pro toto pravidlo");
define("_bttitle","Titulek Sekce");
define("_btlevel","Level");
define("_btrulesedit","Zm�nit Pravidla");
define("_btmodrulesadd","P�idat Sekci Pravidel");
define("__btmodrulesno","Ne");
define("_btmodrulesyes","Ano");
define("_btmodrulespublic","Ve�ejn�");
//massmail
define("_btmmbody","T�lo");
define("_btmmsendto","Poslat hromadn� e-mail ozna�en�m �len�m levelu");
define("_btmmlinks","M��ete pou��vat odkazy ve Va�ich emailech");

?>
