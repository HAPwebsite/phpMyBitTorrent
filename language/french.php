<?php
/*
*----------------------------phpMyBitTorrent V 2.0-beta4-----------------------*
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
*------              ?2005 phpMyBitTorrent Development Team              ------*
*-----------               http://phpmybittorrent.com               -----------*
*------------------------------------------------------------------------------*
*-----------------   Sunday, September 14, 2008 9:05 PM   ---------------------*
*/


if (eregi("french.php",$_SERVER["PHP_SELF"])) die ("You can't access this file directly");

define("_LOCALE","en_UK");

//News du site

define ( "_btsitenews", "Actualit�s");
define ( "_btstart", "Merci d'avoir choisi phpMyBitTorrent <br /> <br />
phpMyBitTorrent �l�ments � part enti�re Tracker BitTorrent �crit en PHP, torrent externes indexation, DHT, annoncent Compact, Autres liens (ed2k, Magnet), l'authentification HTTP de base, Passkey Authentication, and Embedded HTML Editor, Mass Torrent Upload et bien plus encore. Vous pouvez retirer ou de remplacer cette actualit� dans Administration> Param�tres ");

//Search Cloud
define ( "_btsearchcloud", "Search Cloud");
define ( "_btsearchcloudexplain", "Recherches les plus populaires. Une s�lection al�atoire de la population des termes de recherche, pes� par fr�quence.");
//Dons Block
define ( "_btdonations", "dons");
define ( "_btdonationsgoal", "Objectif:");
define ( "_btdonationscollected", "Collected:");
define ( "_btdonationsprogress", "Don Progress");
define ( "_btdonationsdonate", "DON");

//COMPLAINTS
function getcomplaints() {
        return Array(0=>"Legal Content, Good Quality",1=>"Fake or Corrupted",2=>"Copyrights Violation",3=>"Pornographic Content",4=>"Child Pornography",5=>"Offensive Content",6=>"Content Related to Illegal Activity");
}
//NewTorrent shout
define ( "_btuplshout", "Salut, je viens de nom Uploaded <b> ** ** </ b>. Profitez-en!");
define ( "_btnewtsh", "Shout Out New Torrent");
define ( "_btnewshex", "Cliquez ici si vous souhaitez ajouter une Shout Shout Box dans le propos de votre nouveau Envoyez sinon laissez l'absence!");

//CLASSI
define ( "_btclassuser", "Utilisateur");
define ( "_btclasspremium", "Premium User");
define ( "_btclassmoderator", "mod�rateur");
define ( "_btclassadmin", "Administrateur");

//ACCESSO NEGATO
define ( "_btaccdenied", "Acc�s refus�");
define ( "_btdenuser", "La zone que vous essayez d'acc�s est limit� aux utilisateurs enregistr�s <b> </ b>. <br> S'il vous pla�t fournir votre acc�s pouvoirs et essayez � nouveau. Si vous n'�tes pas encore inscrits, vous pouvez <a href=\"user.php?op=register\"> FAIRE </ a> gratuitement. ");
define ( "_btdenpremium", "La zone que vous essayez d'acc�s est limit� aux utilisateurs Premium <b> </ b>. <br>");
define ( "_btdenpremium1", "S'il vous pla�t fournir votre acc�s pouvoirs et essayez � nouveau. Si vous n'avez pas un compte Premium, s'il vous pla�t contacter notre personnel pour
des informations d�taill�es sur l'abonnement Premium. ");
define ( "_btdenpremium2", "Votre compte n'est pas activ� pour acc�der � des services Premium. S'il vous pla�t contacter notre personnel pour
des informations d�taill�es sur l'abonnement Premium. ");
define ( "_btdenadmin", "La zone que vous essayez d'acc�s est limit� aux administrateurs <b> </ b>. <br>");
define ( "_btdenadmin1", "Si vous avez d'administrateur s'il vous pla�t fournir les maintenant, sinon, nous vous demandons de quitter cette page et revenir �
<a href=\"index.php\"> Home Page </ a >.");
define ( "_btdenadmin2", "Votre compte ne dispose pas des privil�ges d'administrateur. S'il vous pla�t Connectez-vous avec les pouvoirs ou de quitter cette page et
revenir � la page d'accueil <a href=\"index.php\"> </ a >.");
define ( "_btbannedmsg", "Vous avez �t� bannis de ce site, parce que: la raison <b> ** ** </ b>");

//GENERICS
define ( "_DATESTRING", "% A,% B% Y% d @% T% Z");
define ( "_btpassword", "Mot de passe");
define ( "_btusername", "User Name");
define ( "_btremember", "Remember Me");
define ( "_btsecuritycode", "Code de la s�curit�");
define ( "_btusermenu", "Menu utilisateur");
define ( "_btmainmenu", "Menu principal");
define ( "_btgenerror", "phpMyBitTorrent Erreur");
define ( "_btmenu", "Menu");
define ( "_btumenu", "Menu utilisateur");
define ( "_btsyndicate", "syndication");
define ( "_btlegend", "Legend");
define ( "_btircchat", "Chat IRC");
define ( "_btchatnotenabled", "Chat IRC n'est pas activ�e sur ce site.");
define ( "_btlostpassword", "Mot de passe perdu?");
define ( "_btmakepoll", "Sondages");

//EMAIL SPELLING
define ( "_at", "au");
define ( "_dot", "dot");

//SQL ERREURS
define ( "_btsqlerror1", "Erreur d'ex�cution de requ�tes SQL");
define ( "_btsqlerror2", "Num�ro d'erreur:");
define ( "_btsqlerror3", "Message d'erreur:");

//ERREUR HTTP
define ( "_http400errttl", "Erreur HTTP 400 - Bad Request");
define ( "_http400errtxt", "A 400 Une erreur s'est produite lors du traitement de votre demande. \ n
S'il vous pla�t v�rifier les param�tres de votre navigateur et essayez � nouveau acc�der � la page demand�e. \ N
Contact e-mail ** ** Si vous rencontrez des probl�mes. ");
define ( "_http401errttl", "Erreur HTTP 401 - Access Denied");
define ( "_http401errtxt", "A HTTP 401 Erreur lors du traitement de votre demande. <br>
Vous ne pouvez pas acc�der � la page, car vous ne sont pas autoris�s. <br>
S'il vous pla�t fournir votre acc�s de v�rification des pouvoirs, si vous en avez. <br>
Contact e-mail ** ** Si vous rencontrez des probl�mes. ");
define ( "_http403errttl", "Erreur HTTP 403 - Interdit");
define ( "_http403errtxt", "A 403 HTTP erreur s'est produite lors du traitement de votre demande. <br>
Vous ne pouvez pas acc�der � la page demand�e parce que la configuration de serveur ne permet pas de vous. <br>
S'il vous pla�t v�rifier soigneusement l'adresse URL de votre navigateur, et le corriger si n�cessaire. <br>
Contact e-mail ** ** Si vous rencontrez des probl�mes. ");
define ( "_http404errttl", "HTTP Error 404 - Not Found");
define ( "_http404errtxt", "A 404 HTTP erreur s'est produite lors du traitement de votre demande. <br>
La page demand�e n'existe pas. <br>
S'il vous pla�t v�rifier l'URL dans votre navigateur avec soin, et les corriger si n�cessaire. <br>
Contact e-mail ** ** Si vous rencontrez des probl�mes. ");
define ( "_http500errttl", "HTTP Error 500 - Internal Server Error");
define ( "_http500errtxt", "A 500 HTTP erreur s'est produite lors du traitement de votre demande. <br>
Une erreur s'est produite lors du traitement de vos donn�es. <br>
Informations d�taill�es peuvent �tre trouv�es dans les logs du serveur. <br>
S'il vous pla�t envoyer un rapport d�taill� � ce sujet � ** email **");

//USER BLOC
define ( "_btyoureseeding", "vous �tes Torrents de semis");
define ( "_btyoureleeching", "Torrents vous Downloading");
define ( "_btuserstats", "Statistiques utilisateur");
define ( "_bttotusers", "Utilisateurs");
define ( "_btlastuser", "Dernier inscrit:");
define ( "_bttorrents", "Available Torrents:");
define ( "_bttotshare", "Partager Total:");
define ( "_bttotpeers", "Connected Peers:");
define ( "_bttotseed", "Total Semoirs:");
define ( "_bttotleech", "Total Peers:");


//TESTI COMPAIONO CHE DANS USER.PHP
define ( "_btregwelcome", "<P align=\"center\"> Bienvenue! </ P>
Inscrivez-<P> un compte pour rejoindre notre communaut�. Cela vous permettra d'utiliser la gamme compl�te de services de ce site, et il ne vous prendra que quelques minutes. Choisissez un nom d'utilisateur et un mot de passe, et de fournir une adresse e-mail. En quelques minutes, vous recevrez un e-mail, vous demandant de confirmer l'enregistrement. </ P> ");
define ( "_btreggfxcheck", "<P align=\"center\"> S'il vous pla�t aussi le code de s�curit� ci-apr�s (emp�che les bots de l'Enregistrement). <BR> Contact e-mail ** ** Si vous rencontrez des probl�mes de lecture de ce code. </ P> ");
define ( "_btemailaddress", "E-mail Address");
define ( "_btpasswd", "Mot de passe (5 Ombles minimum)");
define ( "_btpasswd2", "Confirmer le mot de passe");
define ( "_btsubmit", "Inscription");
define ( "_btreset", "Modifications Annuler");
define ( "_btdisclaimer", "Termes et Conditions:");
define ( "_btdisclaccept", "I Accept");
define ( "_btdisclrefuse", "Je n'accepte pas");
define ( "_btgfxcode", "Code de la s�curit�");
define ( "_btsignuperror", "Erreur lors de processus d'inscription");
define ( "_bterruserexists", "Nom d'utilisateur existe d�j�.");
define ( "_btfakemail", "L'Adresse e-mail que vous avez entr� n'est pas valide.");
define ( "_bterremailexists", "L'Adresse e-mail que vous avez saisi est d�j� enregistr�. souhaitez r�cup�rer votre mot de passe? Go <a href=\"user.php?op=lostpassword\"> ICI </ a>");
define ( "_btpasswnotsame", "Les mots de passe que vous avez entr�s ne sont pas les m�mes");
define ( "_bttooshortpass", "Le mot de passe que vous avez entr� est trop court. Longueur minimale est de 5.");
define ( "_bterrcode", "Le code de s�curit� que vous avez entr� est incorrect");
define("_btdisclerror","You MUST ACCEPT our Disclaimer in order to Sign Up.");
define ( "_btgoback", "S'il vous pla�t aller et v�rifier la forme");
define ( "_btregcomplete", "Signup presque termin�e. Vous avez 24 heures pour confirmer votre inscription. Si vous ne recevez pas le
E-mail de confirmation, sil vous pla�t v�rifier les donn�es que vous avez entr�s. Si vous rencontrez des probl�mes, sil vous pla�t contacter Webmaster � ** email **");
define ( "_bterrusernamenotset", "Nom d'utilisateur non sp�cifi�.");
define ( "_bterrkeynotset", "Cl� d'activation non sp�cifi�e");
define ( "_bterrusernotexists", "Ce nom d'utilisateur n'existe pas.");
define ( "_bterrinvalidactkey", "cl� d'activation n'est pas correcte.");
define ( "_btuseralreadyactive", "l'utilisateur est d�j� active. Plus Activation obligatoire");
define ( "_btacterror", "Erreur d'activation");
define ("_btactcomplete","Activation Complete. Your Account is now Permanently Active. From now on you can Access
our services using the Username and Password you provided. Have a nice download.");
define ( "_btusrpwdnotset", "Nom dutilisateur ou mot de passe non sp�cifi�.");
define ( "_bterremailnotset", "E-mail non sp�cifi�.");
define ( "_btuserpasswrong", "Nom d'utilisateur ou mot de passe incorrect !!");
define ( "_btuserinactive", "utilisateur enregistr�s mais non active !!");
define ( "_btloginsuccessful", "Connexion r�ussie. Vous avez maintenant priv ** ** privil�ges. Have a nice download!");
define ( "_btlogoutsuccessful", "D�connexion r�ussie.");
define ( "_btusernoexist", "D�sol�, lutilisateur que vous avez saisi n'existe pas.");
define ( "_btuserprofile", "User Control Panel");
define ( "_btedituserprofile", "Edit Profile");
define ( "_btusertorrents", "My Torrents");
define ( "_btcompletename", "Nom complet");
define ( "_btclass", "Niveau");
define ( "_btclassbanned", "Interdit!");
define ( "_btregistered", "inscription");
define ( "_btavatar", "Avatar");
define ( "_btcontacts", "Contacts");
define ( "_btnewavatargallery", "Avatar de la Nouvelle Galerie");
define ( "_btnewavatarupload", "Upload New Avatar");
define ( "_btinvalidimagefile", "Image non valide");
define ( "_btavatartoobig", "va au-del� de l'image permis Size");
define ( "_btlostpasswordintro", "Si vous avez perdu votre mot de passe, vous pouvez r�-acc�der � votre compte en entrant votre nom d'utilisateur et un nouveau mot de passe. <br />
Un mail de confirmation sera envoy� � ladresse e-mail associ�e � votre compte. Assurez-vous que vous pouvez recevoir du courrier (c'est-�-dire votre bo�te aux lettres n'est pas pleine) avant de soumettre votre demande. Si vous ne recevez pas ce mail, v�rifiez votre filtre de spam. ");
define ( "_btlostpasswordcheckmail", "Un message a �t� envoy� � votre adresse e-mail contenant un lien de confirmation. S'il vous pla�t cliquer sur ce lien pour le changement de mot de passe de prendre effet.");
define ( "_btlostpwdinvalid", "Code de confirmation incorrect ou user ID");
define ( "_btlostpwdcomplete", "Mot de passe modifi�. Maintenant, vous pouvez vous identifier avec votre nouveau mot de passe.");
define ( "_btdeluser", "Suppression du compte");
define ( "_btdeluserwarning", "<b> ATTENTION </ b>: vous �tes sur le point de d�finitivement et compl�tement supprimer votre compte. Vous perdrez Modification autorisations pour tous vos torrents que vous avez t�l�charg�. Vous serez en mesure de r�-enregistrer aupr�s de votre ancien nom d'utilisateur apr�s que. ");
define ( "_btdeluserwarningadm", "<b> ATTENTION </ b>: vous �tes sur le point de compl�tement et d�finitivement Supprimer utilisateur ** ** 's compte. ** ** �dition autorisations utilisateur pour tous les torrents, il / elle t�l�charg�s. Re - enregistrement avec le m�me nom d'utilisateur sera possible apr�s cette date. ");
define ( "_btaccountdeleted", "Compte supprim�");
define ( "_btconfirmdelete", "Confirmer la suppression du compte");
define ( "_btuserdelete", "Supprimer le compte");
define ( "_btuserban", "Interdiction de compte");

define ( "_btnewpassword", "Nouveau mot de passe <br /> (laisser en blanc si vous n'avez pas l'intention de le modifier)");
define ( "_btnewpasswordconfirm", "Confirmer le nouveau mot de passe");
define ( "_btaol", "AOL Instant Messenger");
define ( "_bticq", "ICQ");
define ( "_btjabber", "Jabber IM");
define ( "_btmsn", "MSN Messenger");
define ( "_btskype", "Skype");
define ( "_btyim", "Yahoo! Instant Messenger");
define ( "_btacceptmail", "Accepter E-mail par d'autres utilisateurs");
define ( "_btcustomlanguage", "Langue");
define ( "_btaccountstatus", "l'�tat du compte");
define ( "_btaccountstatusexplain", "Set utilisateur actif / inactif. ATTENTION! D�finition d'un utilisateur qui a �t� enregistr�e depuis plus de 48h � INACTIVE �galement supprimer le compte.");
define ( "_btaccountactive", "active");
define ( "_btaccountinactive", "inactifs");
define ( "_btcustomtheme", "Theme");
define ( "_btdefault", "par d�faut");
define ( "_btchooseavatar", "Choisir Avatar");
define ( "_btusepasskey", "Utiliser Passkey");
define ( "_btpasskeyexplain", "Cette option vous permet de t�l�charger des torrents en utilisant un code de s�curit� personnel. <br />
Utilisation d'un �tat de l'art-client, vous n'aurez plus � vous connecter au tracker ou l'utilisation du nom d'utilisateur et mot de passe afin d'obtenir votre Ratio Mise � jour pour l'int�rieur de chenilles Torrents. <br />
Un code personnalis� est automatiquement ins�r� dans le fichier. Torrent fichier que vous t�l�chargez, afin de permettre l'authentification Tracker. <br />
<b> ATTENTION </ b>: ne partagent pas. torrents avec Enabled Passkey Authentication out! Les utilisateurs non autoris�s, m�me sans connexion que vous, mai les utiliser et de l'influence de votre ratio, qui mai, � son tour, r�duire vos autorisations de t�l�chargement sur le Tracker. <br />
Dans le cas d'un. Torrent NE automne dans de mauvaises mains, vous pouvez r�initialiser le Passkey. ");
define ( "_btresetpasskey", "Reset Passkey");
define ( "_btresetpasskeywarning", "<b> ATTENTION </ b>: tous les fichiers torrent t�l�charg�s jusqu'� pr�sent ne seront pas valables plus!");
define ( "_btprofilesaved", "Profil Successfully Saved!");
define ( "_btaccesslevel", "Niveau d'acc�s");
define ( "_btdeleteaccount", "Supprimer le compte");

define ( "_btindex", "Index");
define ( "_bttorrentupload", "Upload Torrent");
define ( "_btupload", "Envoyer");
define ( "_btlogin", "Connexion");
define ( "_btlogout", "Log Out");
define ( "_btsignup", "Inscription");
define ( "_btpersonal", "Vos Torrents");
define ( "_btpm", "Messages");
define ( "_btadmod", "mod�rateur");
define ( "_btadmin", "Administration");
define ( "_btrulez", "R�glement");
define ( "_btforums", "Forum");
define ( "_bthelp", "Aide");
define ( "_btadvinst", "Install BitTorrent ou Shareaza T�l�charger");
define ( "_btaccessden", "Acc�s refus�. href=\"user.php?op=register\"> <A N�cessite le t�l�chargement d'inscription </ a>");
define ( "_btlegenda", "Aide � la vedette et la l�gende");
define ( "_btyourfilext", "Votre fichier externe Tracker");
define ( "_btfile", "fichier (s)");
define ( "_btexternal", "External Tracker");
define ( "_btyourfile", "Votre dossier");
define ( "_btsticky", "Sticky");
define ( "_btauthforreq", "Autorisation de la demande");
define ( "_btauthreq", "Demande d'autorisation");
define ( "_btdown", "T�l�charger");
define ( "_btunknown", "Unknown");
define ( "_btrefresh", "Update");
define ( "_btvisible", "visible");
define ( "_btsd", "SD");
define ( "_btlc", "LC");
define ( "_bttt", "TOTAL");
define ( "_btseedby", "Je suis Torrents semis");
define ( "_btleechby", "Je suis la lixiviation Torrents");
define ( "_btpersonalstats", "Personal Stats");
define ( "_btgeneral", "General");
define ( "_bthtml", "HTML");
define ( "_btcategory", "Categories");

//TESTI COMPAIONO CHE dans index.php
define("_btinfituh","<p>You have ".$user->invites." Invites</p>");
define ( "_btsendiv", "Envoyer une invitation");
define ( "_btinvites", "invite");
define ( "_btgames", "Jeux");
define ( "_btsedbs", "Seeding Bonus:");
define ( "_btviewrqst", "Voir Demande");
define ( "_btfaqs", "FAQ");
define ( "_bttorofferd", "Torrents offerts");
define ( "_btmemlist", "Liste des Membres");
define ( "_btwelcomebk", "Welcome Back");
define ( "_btwelcome", "Bienvenue sur $sitename");
define ( "_btneedseed", "les torrents qui ont besoin de semis");
define ( "_btifyhhelpthem", "S'il vous pla�t, aidez-les, si vous avez les fichiers sur votre disque dur. Thank you!");
define ( "_btntnseeded", "No Need Torrents semis");
define ( "_btsearch", "Recherche");
define ( "_btsearchname", "Recherche Torrents");
define ( "_btsearchfeed", "Feed pour ces r�sultats");
define ( "_btin", "in");
define ( "_btalltypes", "tout");
define ( "_btactivetorrents", "Active Torrents");
define ( "_btitm", "Include Dead Torrents");
define ( "_btstm", "Dead Torrents seulement");
define ( "_btgo", "Go!");
define ( "_btresfor", "Ordre:");
define ( "_btnotfound", "Pas de r�sultats <h2>! </ h2> \ n <p> Essayez de changer vos termes de recherche. </ p> \ n");
define ( "_btvoidcat", "<h2> Cette cat�gorie est vide! </ h2>");
define ( "_btorderby", "Ordre");
define ( "_btinsdate", "Date");
define ( "_btname", "Nom");
define ( "_btdim", "Taille");
define ( "_btnfile", "Nombre de fichiers");
define ( "_btevidence", "Sticky");
define ( "_btcomments", "Evaluation / Commentaires");
define ( "_btvote", "Evaluation");
define ( "_btdownloaded", "Downloaded");
define ( "_btprivacy", "Confidentialit�");
define ( "_bttotsorc", "Total Peers");
define ( "_btdesc", "Descendant");
define ( "_btord", "Ascendant");

define("_btnosearch","<center><h2>Search the files you would like to download</h2>If you need help, try asking in the Forums; if you cannot use Magnet:/eD2K: links you probably haven't installed the right software<br>We remind you that our Rules state that all files are Private, and it's up to whoever shares a file whether he/she Allows other people to download. It's Strictly Forbidden to Share Copyrighted, Porn, Child-Porn, Racist, Offending material or anything that Violates any Laws.<br>Any Copyright holder can Request the implementation of a free filename filter that allows to protect his/her Copyrights.</center>");
define ( "_bthelpfind", "Aide � la recherche");
define ( "_bttypeCAT", "Cat�gorie");
define ( "_bttypes", "Categories");
define ( "_bttopsource", "le t�l�chargement des sources TOP");
define ( "_btnotopsource", "Il n'y a pas d'Active Torrents en ce moment");
define ( "_btnotseeder_noneed", "Il n'y a pas de critique Torrents en ce moment");
define ( "_btnotseeder_desc", "Si vous avez un de ces fichiers, s'il vous pla�t Seed (part) avec des gens qui sont en attente pour le t�l�charger. T�l�charger le fichier. torrent, le point de votre client dans le r�pertoire qui contient le fichier complet, et il va commencer semis. <br> Merci d'�tre l'un des GOOD GUYS / GALS. </ b> ");
define ( "_btnoseedersontracker", "Vos Seeded Torrent n'est PAS!");
define ( "_btdeadtorrent", "Il semble que votre torrent <b> Seeded n'est PAS </ b>. Ce jugement pourrait ne pas �tre correcte, nous allons accepter le t�l�chargement pour le moment, mais <b> Mod�rateurs mai consid�rer ult�rieurement </ b>. <br> ");
define ( "_bthelpindex", "<p> <a name=\"HELP\"> </ a> <a href='index_help.php'> Installer Shareaza ou BitTorrent pour t�l�charger </ a>");
define ( "_btnet", "Sant� Swarm");
define ( "_btsource", "Seed");
define ( "_bttorrent", "Torrent");
define ( "_btview", "Vu");
define ( "_bthits", "Downloaded");
define ( "_btsnatch", "Termin�");
define ( "_btalternatesource", "seulement <b> Autres sources (Magnet/ed2K) disponible </ b>");
define ( "_btcantscrape", "Impossible de d�terminer <b> Peer donn�es </ b>");
define ( "_bteasy", "Well-Seeded <b> </ b>");
define ( "_btmedium", "Pas si <b> Grande </ b>");
define ( "_bthard", "<b> mal Seeded / Dead </ b>");
define ( "_btmisssearchkey", "Missing Key Search");
define ( "_btinfotracker", "Qui est en ligne?");
define ( "_btnouseronline", "il n'ya pas d'inscription Utilisateurs en ligne");
define ( "_btonlineusers", "Utilisateurs en ligne");
define ( "_btadvancedmode", "Advanced Mode");
define ( "_btsimplemode", "Simple Mode");
define ( "_btpagename", "Documents de navigation");
define ( "_btloggedinfor", "pour Logged");
define ( "_jscriptconfirmtext", "vous avez un nouveau PM, s'il vous pla�t cliquez sur OK pour acc�der � votre bo�te de r�ception AM.");
define ( "_newpm", "New PM");
define ( "_btpmwrote", "�crit:");
define ( "_nonewpm", "Non PM NEW");
define ( "_btbrowse", "Parcourir");

//PMBT PAGES
define ( "_btpage_donate.php", "dons");
define ( "_btpage_admin.php", "Administration");
define ( "_btpage_chat.php", "Chat");
define ( "_btpage_details.php", "Torrent Details Page");
define ( "_btpage_edit.php", "Edit Torrent");
define ( "_btpage_index.php", "Home");
define ( "_btpage_", "Home");
define ( "_btpage_mytorrents.php", "Panneau de configuration Torrent");
define ( "_btpage_search.php", "Recherche");
define ( "_btpage_upload.php", "Envoyer");
define ( "_btpage_phpBB.php", "Affichage Forum");
define ( "_btpage_pm.php", "Utilisation de la messagerie priv�e");
define ( "_btpage_games.php", "Affichage Game Panel");
define ( "_btpage_casino.php", "Jouer Casino");
define ( "_btpage_arcade.php", "Playing In The Game Room");
define ( "_btpage_keno.php", "Keno Jouer");
define ( "_btpage_blackjack.php", "Black-Jack Jouer");
define ( "_btpage_viewrequests.php", "Affichage Demande");
define ( "_btpage_faq.php", "Lecture F.A.Q");
define ( "_btpage_offers.php", "Affichage d'offres");
define ( "_btpage_offer.php", "Faire une offre");
define ( "_btpage_requests.php", "Faire une demande");
define ( "_btpage_memberslist.php", "Affichage de la liste des membres");
define ( "_btpage_rules.php", "les r�gles de lecture du site");
define ( "_btpage_torrents.php", "Affichage Torrent List");
define ( "_btpage_user.php", "Affichage de l'utilisateur Panneau de configuration");
define ( "_btpage_flash.php", "Lecture d'un jeu");
define ( "_btpage_flashscores.php", "Affichage des scores de jeux");
define ( "_btpage_flashscores2.php", "Affichage des scores de jeux");
define ( "_btpage_mybonus.php.php", "il ya des d�penses de points de bonus");
define ( "_btpage_mybonuse.php.php", "il ya des d�penses de points de bonus");







//TESTI COMPAIONO CHE DANS DETAILS.PHP
define ( "_btinfo", "Torrent Info");
define ( "_bttracker", "Tracker");
define ( "_btddownloaded", "Downloaded");
define ( "_btdcomplete", "Termin�");
define ( "_dtimeconnected", "Time Connected");
define ( "_btsourceurl", "disponible sur");
define ( "_btdidle", "Pause");
define ( "_btdsuccessfully", "Torrent Uploaded Successfully");
define ( "_btdsuccessfully2", "S'il vous pla�t de d�but de semis NOW. visibilit� d�pend du nombre de sources");
define ( "_btdsuccessfullye", "Edited Successfully");
define ( "_btdgobackto", "Retour � la page");
define ( "_btdwhenceyoucame", "o� l'on vient");
define ( "_btdyoursearchfor", "Your Search for");
define ( "_btnotorrent", "Torrent n'existe pas ou a �t� interdite");
define ( "_btdratingadded", "Rating Added");
define ( "_btdspytorrentupdate", "a SpyTorrent Mise � jour de la source");
define ( "_btdspytorrentupdate1", "Vous allez �tre redirig� vers la page en 3 secondes");
define ( "_btdspytorrentupdate2", "Si votre navigateur ne vous redirige pas, cliquez sur");
define ( "_btdspytorrentupdate3", "Ici");
define ( "_btdspytorrentnoupdate", "Il n'est pas n�cessaire d'ex�cuter SpyTorrent int�rieur Torrents dans les 15 minutes depuis le dernier scan.");
define ( "_btdownloadas", "T�l�charger le");
define ( "_btpieces", "Pieces");
define ( "_btpiecesstring ","** pi�ces n ** ** ** l de la taille");
define ( "_btauthstatus", "T�l�charger Autorisation");
define ( "_btdwauthpending", "en attente");
define ( "_btdwauthgranted", "Accord�!");
define ( "_btdwauthdenied", "Refus�!");
define ( "_btdwauthnorequest", "pas encore fait de demande");
define ( "_btpremiumdownload", "Seuls les utilisateurs peuvent Premium T�l�chargez ce Torrent File");
define ( "_btregistereddownload", "Vous devez Inscrivez-vous ou connectez-vous pour t�l�charger ce Torrent");
define ( "_btnetwork", "network");
define ( "_btdays", "d");
define ( "_bthours", "h");
define ( "_btmins", "m");
define ( "_btsecs", "s");
define ( "_btinfohash", "Info Hash");
define ( "_btinfohashnotice", "<b> ATTENTION </ b>: le Torrent a �t� modifi� de telle mani�re qu'il doit �tre re-t�l�charg�. Le fichier que vous avez t�l�charg�
n'est pas valable, pas plus. S'il vous pla�t utilisez le bouton de t�l�chargement pour obtenir la version de travail. ");
define ( "_btnodead", "<b> NO </ b> (Dead)");
define ( "_btfiles", "fichier (s)");
define ( "_btothersource", "Autres sources");
define ( "_btnoselected", "Pas de s�lection de la cat�gorie. S'il vous pla�t revenir au formulaire.");
define ( "_btago","avant");
define ( "_btlastseeder", "Last Seeder");
define ( "_btlastactivity", "Derni�re activit�");
define ( "_bttypetorrent", "Type");
define ( "_btsize", "Taille");
define ( "_btminvote", "Non voter (n�cessaire au moins __minvotes__ votes");
define ( "_btonly", "seulement");
define ( "_btnone", "none");
define ( "_btnovotes", "Non Rating");
define ( "_btoo5", "avec de 5");
define ( "_btvotestot", "Total Vote (s)");
define ( "_btcomplaints", "plaintes");
define("_btlogintorate","(<a href=\"user.php?op=loginform\">Log In</a> to Vote)");
define ( "_btvot1", "Bad");
define ( "_btvot2", "Pas bon");
define ( "_btvot3", "Not Bad");
define ( "_btvot4", "bon");
define ( "_btvot5", "Tr�s bien");
define ( "_btaddrating", "Vote");
define ( "_btvotenow", "Note");
define ( "_btrating", "taux");
define ( "_bthelpstat", "Statistiques Aide");
define ( "_btviews", "Vu");
define ( "_bttimes", "Time (s)");
define ( "_btleechspeed", "Speed Leech");
define ( "_bteta", "ETA");
define ( "_btuppedby", "En ligne depuis");
define ( "_btnumfiles", "Nombre de fichiers");
define ( "_btfilelist", "Fichiers");
define ( "_btlasttrackerupdate", "Derni�re mise � jour Tracker");
define ( "_btshowlist", "Afficher Peers");
define ( "_bthidelist", "Masquer les pairs");
define ( "_bthelpsource", "Peer Help");
define ( "_btseeds", "complet");
define ( "_btcommentsfortorrent", "Commentaires sur cette Torrent");
define ( "_btbacktofull", "Retour � la Full Details");
define("_btnotifyemailcom","If you want to be e-mailed when the First Comment is added, please click <a href=\"details.php?op=comment&trig=on&id=**id**#notify\">HERE</a>.");
define("_btnotnotifyemailcom","<p>You are currently listed to Receive Comment Email. If you Don't want to be e-mailed any more, please click <a href=\"details.php?op=comment&trig=off&id=**id**#notify\">HERE</a>.</p>");
define("_btclickhere","Cliquez Ici");
define("_btnotifyemail1s","If you want to be e-mailed when the First <b>SEED</b> shows up, please click <a href=\"details.php?op=seeder&trig=on&id=**id**#notify\">HERE</a>.");
define("_btnotnotifyemail1s","<p>You are currently listed to be Notified when a Seed pops up. If you don't want to be e-mailed any more, please click <a href=\"details.php?op=seeder&trig=off&id=**id**#notify\">HERE</a>.</p>");
define("_btnocommentsyet","There are NO Comments at this time");
define("_btcommheader","On **time**, <a href=\"user.php?op=profile&id=**uid**\" target=\"_top\">**user**</a> wrote:");
define("_btdgavesresult","has Returned One Result");
define ( "_btdnotifyemaildel", "Vous avez �t� supprim� de la Liste de notification");
define ( "_btdnotifyemaildel1", "Vous ne recevez pas plus d'e-mails quand un commentaire est ajout�!");
define ( "_btdnotifyemailadd1", "Vous recevrez un e-mail quand un commentaire est ajout�, mais vous ne recevrez plus d'e-mails avant de lire le commentaire!");
define ( "_btdnotifyemailadd", "Vous avez �t� ajout� � la Liste de notification");
define ( "_btdnotifyadd", "Vous avez �t� ajout� � la Liste Seeder Notification");
define ( "_btdnotifyadd2", "vous serez notifi� des nouveaux Semoirs avec un maximum d'un e-mail tous les jours,");
define ( "_btdnotifydel", "Vous avez �t� supprim� de la Liste Seeder Notification, vous n'allez pas recevoir plus d'e-mails.");
define ( "_btddetails", "Torrent Details");
define ( "_bteditthistorrent", "Modifier Torrent");
define ( "_btyes", "oui");
define ( "_btno", "non");
define ( "_btadded", "Uploaded");
define ( "_btaddedby", "En ligne depuis");
define ( "_bton", "up");
define ( "_bthelpothersource", "Aide Autres sources");
define ( "_btfilename", "Nom de fichier");
define ( "_btpeers", "Sources");
define ( "_btpeerstot", "Total Source");
define ( "_bthelppeer", "Peer Help");
define ( "_btleecher", "Leecher");
define ( "_btleechers", "leechers");
define ( "_btdhelpdownload", "Aide pour le t�l�chargement");
define ( "_btyourate", "Vous avez vot�");
define ( "_btupdatesource", "Mise � jour Sources maintenant!");
define ( "_btseeder", "Seed");
define ( "_btseeders", "Seeds");
define ( "_btcompletion", "complet");
define ( "_btdirectlink", "Direct Link");
define ( "_btcomplyouvoted", "Vous avez dit que ce Torrent est:");
define ( "_btcomplexplain", "Le Torrent mai �tre interdits lorsque des r�sultats d'un certain nombre de plaintes.");
define ( "_btcomplaintform", "Torrent formulaire de plainte. <BR> Ce syst�me vous permet de Flag Torrents qui ne correspondent pas � notre r�glement. <BR>
Une fois un certain nombre de plaintes est atteint, le Torrent mai �tre bannis de la liste. <BR> S'il vous pla�t envoyer des commentaires positifs sur les torrents qui sont bonnes et juridiques. <BR> ");
define ( "_btcomplisay", "Ce n'est Torrent");
define ( "_btmagnetlink", "Magnet Link");
define ( "_btnomagnet", "Non Disponible Magnet Link");
define ( "_btmagnetlinkdownload", "T�l�charger le fichier en utilisant Magnet Link");
define ( "_bted2klink", "Lien ed2k");
define ( "_btnoed2k", "Non Disponible ed2k Link");
define ( "_bted2klinkdownload", "T�l�charger le fichier en utilisant ed2k Link");
define ( "_btcomplatthemoment", "Sent utilisateurs Evaluations positives <b> ** p ** </ b> fois et un feedback n�gatif <b> ** n ** </ b> fois. <BR>");
define ( "_btnotifications", "E-Mail Notifications");
define ( "_btreadcomms", "Lire les commentaires");
define ( "_btpostcomment", "Post a Comment");
define ( "_bttransfer", "transfert");
define ( "_btdownloadspeed", "Vitesse de t�l�chargement en aval");
define ( "_btuploadspeed", "Vitesse de t�l�chargement en amont");
define ( "_bttorrentpassword", "Protection par mot de passe");
define ( "_btpasswordquery", "Ce Torrent est prot�g� par mot de passe. Le propri�taire du Torrent a d�cid� de rendre visible qu'aux utilisateurs autoris�s. <br /> S'il vous pla�t fournir le mot de passe maintenant pour obtenir Torrent Instant Access.");
define ( "_btpasswordwrong", "Attention: Mot de passe incorrect. <br /> N'oubliez pas que les mots de passe sont sensibles � la casse.");
define("_btuploadedpassexplain","You Set the Password to: <b>**pass**</b>");
define ( "_btuploadedpassexplain2", "pour donner aux utilisateurs l'acc�s � votre Torrent, passer les suivantes Lien direct: <b> ** ** <b> url");
define ( "_btcompletedby", "Completed By");
define ( "_bttrackers", "Autres Trackers");
define ( "_bttrackergroup", "Group *");
define ( "_btexport", "Exporter");
define ( "_btexportexplain", "T�l�chargez ce Torrent sans votre Passkey, pour la distribution sur les sites qui fournissent BitTorrent Index Services");


define ( "_btinseriti", "ins�r�s");
define ( "_btand", "et");
define ( "_btnumerror", "leur nombre n'est pas �gal, et il n'est pas possible de proc�der � la cession Binary");
define ( "_btmaxchar", "ed2k URL ont un maximum de 200 caract�res");
define ( "_bted2kstart", "L'URL doit commencer par <b> ed2k ://</ b>");
define ( "_bt2par", "URL Lacks le deuxi�me param�tre:");
define ( "_bturlfile", "file");
define ( "_bturlcontent", "ne contient pas d'URL");
define ( "_btfname", "filename");
define ( "_bturlsize", "ne contient pas d'URL");
define ( "_btsz", "size");
define ( "_btidcode", "hash info");
define ( "_bturlparerror", "URL ne contient pas le param�tre:");
define ( "_bturlsureerror", "L'URL contient une source ill�gale");
define ( "_bturlnotinsert", "Faut-Ins�rer une ed2k Link");
define ( "_btnotip", "IP non sp�cifi�e");
define ( "_btinvip", "IP non valide");
define ( "_btnoport", "Non indiqu�e Port");
define ( "_btinvport", "Port incorrect");
define ( "_btparmag", "none");
define ( "_btnopresent", "Not Present");
define ( "_btmagchar", "MagnetURLs avoir un maximum de 200 caract�res");
define ( "_bftminlimit", "Vous ne pouvez pas partager des fichiers de taille inf�rieure �");
define ( "_btfmaxlimit", "Vos Torrent contient un fichier qui est trop grand.");
define ( "_btillegalword", "Vos Torrent n'a pas fait par l'interm�diaire du contenu du filtre automatique pour la raison suivante (si sp�cifi� ):.");
define ( "_btillegalwordinfo", "Si vous pensez que vous recevez ce message par erreur, s'il vous pla�t contacter $ admin_email");
define ( "_btnoreason", "(No Reason indiqu�e");
define ( "_bturlinserted1", "Uploaded Torrent. Vous allez �tre redirig� dans 3 secondes. <BR> Si votre navigateur ne transmet pas, cliquez");
define ( "_bturlinserted2", "ce lien");
define ( "_btaddnotifycomment", "Vous avez �t� ajout� � la liste de notification: vous envoyez un e-mail sur les nouveaux commentaires.");
define ( "_btaddnotifyseeder", "Vous avez �t� ajout� � la liste de notification: vous envoyez un e-mail des nouvelles semences.");
define ( "_btnolinkinsert", "Pas de lien ins�r�");

define ( "_btexnostartwt", "Start eXeem Liens avec exeem ://");
define ( "_btinvalidexeem", "Invalid eXeem Link!");
define ( "_btillegalcat", "Cat�gorie ill�gale!");
define ( "_bttorrentpresent", "Le Torrent que vous essayez de transf�rer a d�j� �t� envoy�s � ce site, ou il a �t� interdit.");
define ( "_btdescrrequired", "Description de champ est vide. S'il vous pla�t revenir en arri�re et entrer dans une description.");


define ( "_btuploadatorrent", "Envoyer un Torrent File");
define ( "_btphotoext", "Image de dossier doit �tre GIF, JPG ou PNG");
define ( "_btalertmsg", "formulaire n'a pas �t� remis en raison des erreurs suivantes:");
define ( "_btalertmsg2", "S'il vous pla�t le Fix erreurs et essayer d'Upload Again");
define ( "_btfnotselected", "ERREUR: Fichier non s�lectionn�s");
define ( "_btalertdesc", "S'il vous pla�t entrez la description qui indique le type de fichier et de la qualit�, en particulier en cas de Media Files");
define ( "_btalertcat", "S�lectionner une cat�gorie");
define ( "_btconferma", "pr�t � transf�rer Si votre Torrent contient plusieurs fichiers, s'il vous pla�t recr�er en tant que multi-Archive contenant le dossier. Sinon, elle pourrait �tre inutilisable.");
define ( "_btalerturl", "Ins�rer un lien ed2k ou AIMANT");
define ( "_btalerturlnum1", "Lien ed2k Number");
define ( "_btalerturlnum2", "tout est Nombre AIMANT Link");
define ( "_btalerturlnum3", "Le num�ro de l'Liens doit �tre la m�me - Torrents compose d'un couple de liens");
define ( "_btalert5char", "Nom de fichier doit �tre au moins 5 caract�res");
define ( "_btofficialurl", "Ce site officiel du Tracker est:");
define ( "_btseeded", "S'il vous pla�t seulement Envoyer Torrents qui sont Seeded. Torrents sans pairs ne seront pas affich�es sur la page principale.");
define ( "_btupfile", "Envoyer un fichier:");
define ( "_btupnfo", "Upload du fichier NFO:");
define ( "_bttorrentname", "Nom du Torrent");
define ( "_btfromtorrent", "sera g�n�r� � partir du fichier, si des Blancs.");
define ( "_btdescname", "Essayez de lui donner un nom");
define ( "_btsrc_url", "Source URL");
define ( "_btcompulsory", "(obligatoire)");
define ( "_btdescription", "Description (requis)");
define ( "_btnohtml", "NO HTML");
define ( "_btchooseone", "Choisir");
define ( "_bttype", "Type");
define ( "_btverduplicate", "Arriv�e de semblables Torrents");
define ( "_btduplicatinfo", "Transfert de Emp�che Torrents analogues � ceux d�j� inscrits sur la Liste. D�cochez la case � t�l�charger de toute fa�on. Rappelez-vous que le fait d'avoir en double pour les fichiers identiques Torrents R�duit l'efficacit� globale.");
define ( "_btupevidence", "Sticky");
define ( "_btupevidencinfo", "Mark Torrent comme Sticky et conservez-le sur le haut de la liste. Limit� aux Mod�rateurs / Administrateurs");
define ( "_btowner", "Display Name");
define ( "_btowner1", "Afficher l'Utilisateur");
define ( "_btowner2", " Mode Vie priv�e");
define ( "_btowner3", "mode furtif");
define ( "_btownerinfo", " 'SHOW USER' permet aux autres utilisateurs de voir votre nom d'utilisateur, la protection des renseignements personnels MODE� Cuirs, gardant Modifier / Supprimer les autorisations �, STEALTH MODE '(si disponibles) masque compl�tement le propri�taire du Syst�me, et �a 't permettre � tout Edit / Suppression par l'utilisateur. ");
define ( "_btupnotify", "Notifications");
define ( "_btupnotifynfo", "Recevoir par e-mail de notification quand un commentaire est ajout�");
define ( "_btupnotifyseed", "Recevoir par e-mail de notification quand une Leecher la fin du fichier (uniquement sur Torrents Tracker local)");
define ( "_btfsend", "Valider");
define ( "_btinserte2k", "Ins�rer ed2k Link");
define ( "_btmagnetinsert", "Ins�rer Magnet Link");
define ( "_btinsertlinktitle", "Ins�rer les liens pour les r�seaux Gnutella et eDonkey2000");
define ( "_btinsertlinktext", "Vous pouvez ajouter � votre eDonkey2000 Liens Torrent, pour augmenter la disponibilit�.");
define ( "_btinserttext2", "Vous pouvez soit seulement AIMANT Ajouter des liens ou des liens ed2k seulement. Si les deux listes sont remplis avec des entr�es, deux liens seront associ�s � chaque fichier: en d'autres termes, le premier lien ed2k et le premier lien sera AIMANT associ� au premier fichier, et ainsi de suite ...");
define ( "_bted2kurl", "Ins�rer ed2k Link");
define ( "_btsyntax", "Like");
define ( "_btfiletype", "extension");
define ( "_btfilesize", "size");
define ( "_btipport", "ip: port");
define ( "_btstatic", "indique que nous sommes seulement � l'aide du protocole eDonkey2000");
define ( "_btfinalname", "est le nom du fichier � t�l�charger");
define ( "_btfinalsize", "est la taille en octets du fichier");
define ( "_btfinalidcode", "un code de v�rification sp�ciale qui vous permet de trouver un seul fichier, et de ses copies, parmi beaucoup d'similaires");
define ( "_btfinalipport", "repr�sente la principale source stable (utilis� par Releasers)");
define ( "_btor", "ou");
define ( "_btaddmagnet", "Magnet Link");
define ( "_btadded2k", "Lien ed2k");
define ( "_btphoto", "Image");
define ( "_btexeemlink", "eXeem Link");
define ( "_btexeemlinkexplain", "en option. Si le Torrent peut �tre t�l�charg� par l'interm�diaire du R�seau eXeem, vous pouvez ins�rer le lien ici Autre");
define ( "_bttorrentpasswordexplain", "Vous mai choisir un mot de passe pour prot�ger votre Torrent non autoris�e de vue. Si un mot de passe est d�fini, Torrent NE
�tre visibles � personne, sauf Premium Utilisateurs et administrateur de la liste et Torrent Torrent Search. Vous devrez fournir un lien direct avec les personnes que vous souhaitez acc�der au Torrent.
Torrents seulement interne peut �tre prot�g� par mot de passe. ");
define ( "_btupadvopts", "Options avanc�es");
define ( "_btadvoptsexplain", "Afficher les options avanc�es, de contr�le technique de certains aspects de l'torrent. Utilisez ces options que si vous savez ce que vous faites!");
define ( "_btleaveintact", "Ne pas modifier ce param�tre");
define ( "_btdhtsupport", "DHT Support");
define ( "_btendht", "Force Backup DHT Tracking");
define ( "_btdisdht", "D�sactiver DHT Tracking");
define ( "_btdhtsupportexplain", "Ce Forces Tracking DHT Backup sur votre Torrent, ou le d�sactive. DHT est utile lorsque le principal est hors connexion ou Tracker est surcharg�");
define ( "_btprivatetorrent", "Private Torrent");
define ( "_btenpvt", "Mark Torrent que priv�");
define ( "_btdispvt", "Mark Torrent comme public");
define("_btprivatetorrentexplain","The \"Private\"-Option (which ONLY some Clients can handle), tells the Client to Deal only with Peers it receives from the Central Tracker. Enabling the Private Option Disables DHT");


define ( "_btuploadalinkarchive", "Soumettre eD2K/Magnet Link");
define ( "_btsharelink", "Envoyez SEULEMENT si le dossier est partag�.");
define ( "_btlinknotice", "Le lien ne sera pas accept�e si plus de la moiti� des fichiers que vous soumettez sont d�j� pr�sents sur l'indice. Duplicates R�duire l'efficacit� globale");
define ( "_btarchivename", "Nom");
define("_btinsert1file","Enter Link(s) for your File, and Hit 'Add File'. The eD2K Link is Obligatory. You can Add more than one File to your Submission.");
define("_btlinksnomatch","The Links you Entered do NOT Represent the same File");
define ( "_btinvalided2k", "Lien ed2k invalide");
define ( "_btinvalidmagnet", "Invalid Magnet Link");
define ( "_btaddnewfile", "Ajouter un fichier");
define ( "_btaddtoarchive", "Ajouter un fichier");
define ( "_btaddmd5", "hash MD5");
define ( "_btlinks", "Links");
define ( "_bterrduplicatelinks", "Dupliquer fichiers ne sont pas autoris�s");
define ( "_btduplicatelinks", "Duplicate File");
define ( "_btduplicateexplain", "Le dossier Repr�sent�e par le lien vous est d�j� partag�e sur ce site. Cliquez sur le Symbole d'avertissement � c�t� du dossier pour v�rifier les Torrent / collection dans laquelle il a �t� trouv�. Si plus de 50 % des liens que vous avez ajout�s sont d�j� pr�sents, votre demande ne seront PAS accept�s ");
define ( "_btinsertfilesfirst", "Vous devez vous pr�senter au moins un dossier � l'aide du bouton");
define ( "_btfilelistaltered", "La liste des fichiers a �t� modifi�! Il n'a pas �t� cr�� � l'aide de cet outil.");


define ( "_btuserhost", "Nom d'utilisateur / h�te");
define ( "_btuserip", "Nom d'utilisateur / IP");
define ( "_btport", "Port");
define ( "_btdownloadedbts", "Downloaded");
define ( "_btuploadedbts", "Uploaded");
define ( "_btratio", "Ratio");
define ( "_btpercent", "Termin�");
define ( "_btconnected", "Connected");
define ( "_btidle", "inactifs");
define ( "_btconn", "Connexion");
define ( "_btactive", "active");
define ( "_btpassive", "passif");
define ( "_btpeerspeed", "AVG vitesse");
define ( "_btnopeer", "Non Peers");


if (!eregi("admin.php",$_SERVER["PHP_SELF"])){
define ( "_admtrackers", "External Trackers");
define("_admtrackerurl","Announce URL");
define ( "_admtrkstatus", "Status");
define ( "_admtrkstatusactive", "active");
define ( "_admtrkstatusdead", "hors ligne");
define ( "_admtrklastupdate", "Mise � jour");
define ( "_admtrkscraping", "Mise � jour");
define ( "_admtrkassociatedtorrents", "Torrents");
define ( "_admtrkcannotopen", "Impossible de contacter l'adresse URL. Tracker sera mis en mode hors connexion");
define ( "_admtrkrawdata", "Tracker atteint. Voici la r�ponse de codage");
define ( "_admtrkinvalidbencode", "ne peut pas d�coder Tracker Response. Invalid Encoding");
define ( "_admtrkdata", "Decoding Termin�. Voici toutes les donn�es obtenues Raclez");
define("_admtrksummarystr","Found <b>**seed**</b> Seeders, <b>**leechers**</b> Leechers, <b>**completed**</b> Completed Downloads for Torrent **name** Info Hash **hash**.");
}


define ( "_btiderror", "ID invalide");
define ( "_btnotfoundid", "Torrent n'existe pas");
define ( "_btaddcomment", "Ajouter un commentaire �");
define ( "_btaddtime", "Uploaded");
define ( "_btby", "par");
define ( "_btsend", "Valider");
define ( "_btnotyourcomment", "Vous ne pouvez pas �diter les commentaires d'autres personnes.");
define("_btcommentinserted","Your Comment has been Posted. You are being Redirected to the Torrent Details page in 3 seconds.<br>Click <a href=\"details.php?id=**id**#comments\">HERE</a> if your Browser doesn't forward you.");
define("_btcommentdeleted","Comment Deleted. You are being Redirected to the Torrent Details page in 3 seconds.<br>Click <a href=\"details.php?id=**id**#comments\">HERE</a> if your Browser doesn't forward you.");


define ( "_bttorrentunavailable", "Torrent de dossier non disponible en raison d'une erreur de configuration du serveur. D�sol� pour le d�rangement.");
define ( "_btminseedrule", "Vous devez �tre au moins de semis ** ** min Torrents � t�l�charger.");
define ( "_btmaxdailydownloads", "Vous ne pouvez pas t�l�charger plus de fichiers ** ** max par jour. S'il vous pla�t essayer � nouveau demain.");
define ( "_btmaxweeklydownloads", "Vous ne pouvez pas t�l�charger plus de fichiers ** ** max par semaine. S'il vous pla�t essayez de nouveau la semaine prochaine.");
define ( "_bterrtoosmall", "Vous avez <li> de semences d'un fichier au moins <b> min_share ** ** </ b> de la taille. <br>");
define ( "_bterrtoobig", "La plus grande <b> dossier vous est Seed");
define ( "_bterrorprivate", "Ceci est un dossier priv�: vous avez d�j� demand� l'autorisation de t�l�chargement. Vous ne pouvez pas t�l�charger le fichier jusqu'� ce que le propri�taire accepte votre demande.");
define ( "_btrefused", "Le propri�taire a refus� votre demande d'autorisation. Vous ne serez pas en mesure de t�l�charger ce torrent.");
define ( "_bterrblacklist", "Le propri�taire a refus� de vous permettre de t�l�charger son Torrents. Vous ne serez pas en mesure de t�l�charger l'une d'elles.");
define ( "_btreqsent", "Ce Torrent est priv�. Vous ne serez pas en mesure de t�l�charger jusqu'� ce que le propri�taire vous donne l'autorisation.
Une demande a �t� envoy�e � l'Torrent propri�taire, qui doit autoriser le t�l�chargement: vous serez inform� du r�sultat par e-mail. ");


define ( "_btedittorrent", "Edit Torrent");
define ( "_bterreditnoowner", "<h1> Acc�s refus� </ h1> \ n <p> Torrent Seuls les propri�taires et les administrateurs peuvent modifier Torrents </ p> \ n");
define ( "_btbanned", "Interdit");
define ( "_btcancel", "Annuler");
define ( "_btdelcommand", "Ne pas modifier Torrent, MAIS <input type=\"submit\" value=\"DELETE IT!\" /> \ n");
define ( "_btsure", "Oui, je suis s�r de cela!");
define ( "_btban", "Ban Torrent");
define ( "_btareyousure", "Etes-vous s�r de vouloir supprimer le nom <b> ** ** </ b >?");
define ( "_btareyousure_ban", "Etes-vous s�r de vouloir BAN <b> ** Nom ** </ b >?");
define ( "_bttorrentnoexist", "Ce Torrent n'existe pas");
define ( "_btdelete", "Supprimer Torrent");
define ( "_btcannotdel", "Impossible de supprimer");
define ( "_btmissingdata", "donn�es requis manquant!");
define ( "_btdeldenied", "Seul le propri�taire ou Site Torrent administrateurs peuvent Supprimer ce Torrent");
define ( "_btnotconfirmed", "vous devez confirmer que vous �tes s�r de ce que vous vous appr�tez � faire.");
define ( "_btdeleted", "Torrent supprim�");
define ( "_btsuccessfullyedited", "Edited Torrent avec succ�s. Vous allez �tre redirig� vers le Torrent Details Page. N'oubliez pas que si vous avez s�lectionn� le mode furtif, vous ne serez pas en mesure de modifier ou de supprimer le Torrent plus!");


define ( "_btmytorrentsintrotitle", "Panneau de configuration Torrent");
define ( "_btmytorrentsintrotext", "Dans ce domaine, vous pouvez g�rer les torrents que vous avez t�l�charg� (� l'exception de ceux avec Stealth mode s�lectionn�). <br>
Vous pouvez �galement g�rer d'autres utilisateurs des requ�tes de t�l�chargement. En s�lectionnant l'ic�ne, vous pouvez visualiser toutes les demandes
qui vous sont envoy�s par d'autres utilisateurs. Vous aurez � d�cider s'il convient d'accepter ou de refuser la demande de t�l�chargement. <br>
Soyez attentif au Upload et Download Montants de l'utilisateur. Les gens qui t�l�chargent sans le partage sont d'aucune utilit� pour
le r�seau BitTorrent. Le refus de leur demande de t�l�chargement peut �tre un bon moyen de les encourager � plus d'action. ");
define ( "_btmytorrents", "My Torrents");
define ( "_btallauthorized", "Tous les utilisateurs ont �t� autoris�s");
define ( "_btauths", "Les demandes de t�l�chargement");
define ( "_btauthorized", "S�lection de l'utilisateur a �t� autoris�");
define ( "_bthasauthorized", "propri�taire vous a autoris� � t�l�charger des fichiers son");
define ( "_btnowcandownload", "Vous pouvez maintenant t�l�charger gratuitement tous les fichiers de l'utilisateur. \ nwe prot�ger votre vie priv�e.");
define ( "_pendingauths", "En attendant les autorisations:");
define ( "_btauthorizationrequested", "Les utilisateurs ont demand� l'autorisation de t�l�chargement:");
define ( "_btnotorrents", "Il n'ya pas de Torrents");
define ( "_btnotorrentuploaded", "Vous n'avez pas encore envoy� de Torrents");
define ( "_btactions", "Actions");
define ( "_bthasuploaded", "Uploaded: **");
define ( "_bthasdownloaded", "T�l�charg�: **");
define ( "_btauthgrant", "Autoriser");
define ( "_btauthalwaysgrant", "Toujours autoriser");
define ( "_btauthalwaysdeny", "Ne jamais autoriser");
define ( "_btauthdeny", "Ne pas autoriser");
define ( "_btcantseeothertorrents", "Vous ne pouvez pas voir les autres utilisateurs Torrents autorisations!");
define ( "_btauthpanel", "T�l�charger les autorisations Control Panel");
define ( "_btnoauthstomanage", "il n'ya pas de g�rer les autorisations");
define ( "_btmyglobals", "My Global autorisations");
define ( "_btnoglobals", "Il n'y a pas encore les autorisations Global");
define ( "_btstatus", "Status");
define ( "_btauthreset", "Reset");
define ( "_btwronginput", "Erreur lors de l'entr�e de donn�es");
define ( "_btgeneraloptions", "General Options");
define ( "_btprivate", "Priv�");
define ( "_btprivateexpl", "S�lectionnez cette option pour les utilisateurs de demander une autorisation d'acc�s T�l�charger ce Torrent. Vous serez avis� de chaque nouvelle en attente d'autorisation par e-mail.
Vous pourrez choisir d'accorder ou refuser l'autorisation pour ce seul Torrent ou pour toutes vos Torrents ");
define ( "_btminratio", "Minimum Ratio");
define ( "_btdisabled", "Disabled");
define ( "_btminratioexpl", "Vous pouvez d�finir un nombre minimum de valeur � l'auto-Autoriser les utilisateurs. Les utilisateurs ayant Ratio sup�rieur ou �gal � cela la possibilit� de t�l�charger sans demander d'autorisation.
La valeur du ratio minimal ne sera pas affich�e, sauf pour les administrateurs ");


define ( "_btcommentkeyfound", "Le syst�me a v�rifi� votre commentaire. Les mots ne sont pas autoris�s: <ol>");
define ( "_btcommentkeyfound2 ","</ ol> <p> Nous savons que le commentaire pourrait �tre OK, nous nous excusons pour le d�sagr�ment et vous demandons d'utiliser des termes diff�rents. </ p>");


define ( "_btmissingformdata", "Missing entr�e de donn�es!");
define ( "_bteditfailed", "Edit a �chou�");
define ( "_bteditdenied", "Vous ne pouvez pas modifier d'autres personnes Torrents.");
define ( "_btreturl", "avec succ�s sous la direction de dossier, vous �tes redirig� vers la page Torrent d�tails en 3 secondes .. <br> Cliquez <a href=\"**returl**\"> ICI </ a> si votre navigateur ne transmet pas vous ");


define ( "_btrate", "Evaluation Torrent");
define ( "_btratefailed", "Vote Failed!");
define ( "_btinvalidrating", "Votez non valide");
define ( "_btidnotorrent", "ID invalide. Torrent n'existe pas");
define ( "_btnovoteowntorrent", "Vous ne pouvez pas noter vos propres torrents");
define ( "_btalreadyrated", "D�j� Torrent Rated");
define ( "_btcantvotetwice", "Nous sommes d�sol�, mais vous ne pouvez pas �valuer deux fois");
define ( "_btvotedone", "Vote avec succ�s, vous �tes redirig� vers la page D�tails Torrent en 3 secondes. <br> <a href=\"details.php?id=**id**\"> Cliquez ICI </ a>, si votre navigateur ne transmet pas vous. ");


define ( "_btuploaderror", "�chec du transfert!");
define ( "_btemptyfname", "Nom de fichier vide");
define ( "_btinvalidfname", "Nom de fichier non valide");
define ( "_btinvalidnfofname", "Nom du fichier NFO invalide");
define ( "_btfnamenonfo", "Ce n'est pas un fichier NFO (. nfo)");
define ( "_btfnamenotorrent", "Ceci n'est pas une Torrent File (. torrent)");
define ( "_btferror", "File Error");
define ( "_bterrnofileupload", "Erreur fatale dans Uploaded dossier.");
define ( "_bterrnonfoupload", "Erreur fatale dans Uploaded NFO dossier.");
define ( "_btemptyfile", "dossier vide");
define ( "_btnobenc", "Fichier endommag�. �tes-vous s�r que c'est vraiment un Torrent?");
define ( "_btnodictionary", "Dictionnaire Torrent PAS pr�sent");
define ( "_btdictionarymisskey", "Missing Torrent Dictionnaire Keys");
define ( "_btdictionaryinventry", "donn�es non valide dans Torrent Dictionnaire");
define ( "_btdictionaryinvetype", "Types de donn�es non valide dans le Dictionnaire du Torrent");
define ( "_btinvannounce", "annoncent Invalid URL. Doit �tre");
define ( "_btactualannounce", "indiqu�e Tracker");
define ( "_bttrackerdisabled", "Notre Tracker a �t� d�sactiv�: Seuls Torrents ext�rieures peuvent �tre t�l�charg�s.");
define ( "_btinvpieces", "Invalid Torrent Parts");
define ( "_btmissinglength", "Missing Files et de la taille");
define ( "_btnofilesintorrent", "Missing Torrent Files");
define ( "_btfnamerror", "Nom de fichier non valide");
define ( "_btinvalidhtml", "Invalid code HTML. Assurez-vous que vous avez utilis� notre Code Editor sans entrer manuellement.");
define ( "_bttrackerblacklisted", "The Tracker utilis�s par ce Torrent (trk <b> ** ** </ b>) a �t� la liste noire. S'il vous pla�t utilisez un autre Tracker.");
define ( "_btfilenamerror", "Erreur dans le fichier");
define ( "_bttorrenttoosmall", "<p> vous ne pouvez pas partager un fichier plus petit que <b>");
define ( "_bttorrenttoosmall2 ","</ b> </ p> Votre Torrent contient un fichier avec la suite Taille: <b>");
define ( "_btmaxuploadexceeded", "Vous ne pouvez pas plus de Upload ** ** maxupload dans une p�riode de 24 heures.");
define ( "_btnumfileexceeded", "Vous ne pouvez pas <p> Envoyer plus de <b> maxupload ** ** </ b> les fichiers dans une p�riode de 24 heures. </ p> Vous avez d�j� Uploaded <b> rownum ** ** </ b> Fichiers, un montant total de <b> totsize ** ** </ b> ");
define ( "_btsearchdupl", "Selon la recherche, ces fichiers mai correspondent � ceux que vous �tes partage: <ol>");
define ( "_btduplinfo", "<p> Si votre dossier est dans cette liste, s'il vous pla�t un de ces semences Torrents! </ p>");
define ( "_btsocktout", "ERROR: Socket-Timed Out");
define ( "_bttrackernotresponding", "Tracker ne r�pond pas. \ n V�rifier l'orthographe Tracker (NO EMPTY SPACES INSIDE URL) et que le tracker est en cours. Le Tracker vous est indiqu�e:");
define ( "_bttrackerdata", "non valide � partir de donn�es externes Tracker. Le Tracker mai ont Server Problems. S'il vous pla�t essayer � nouveau plus tard.");
define ( "_bttorrentnotregistered", "Torrent ne semble pas �tre inscrit sur le Tracker externes. Vous pouvez t�l�charger des torrents externes seulement si ils sont actifs.");
define("_btuploadcomplete","Successfully Uploaded. You are being redirected to the Torrent Details Page in 3 seconds. Remember to Seed, or the Torrent won't be Visible on the Main Page.<br>Click <a href=\"**url**\">HERE</a> if your Browser doesn't forward you.");
define("_btpresent","This Torrent has Already been Uploaded");
define("_btscrapeerror","Can't get Peer Data from Tracker");


define ( "_btcomplisnowbanned", "Ce Torrent a �t� interdite en raison d'un certain nombre de plaintes");
define ( "_btcomplcantvotetwice", "nous sommes d�sol�s, mais vous ne pouvez pas envoyer une plainte � deux reprises.");
define ( "_btcomplainttaken", "Plainte Faite. Vous �tes redirig� vers la page D�tail du Torrent de 3 secondes. Si votre navigateur ne transmet pas, cliquez");
define ( "_btcomplsuccess", "une plainte a �t� enregistr�e. Nom d'utilisateur et IP sont connect�s: S'il vous pla�t ne pas abuser du syst�me. <BR>");


define ( "_btshoutbox", "Shoutbox <a href=\"javascript:popshout('shoutdetach.php');\"> (D�tacher) </ a>");
define ( "_btnoshouts", "Personne n'est Shouting ...");
define ( "_btshoutnow", "Shout!");
define ( "_btprivates", "[h]");
define ( "_btshoutnowprivate", "Private Shout!");
define ( "_btshoutboxshow", "ShoutBox");
define ( "_btshactive", "Actvie Users");
define ( "_btmoresmiles", "Plus Smiles");
define("_btshouthelp","what is Mode Normal/Mode Expert<ul><li>Mode Normal:<li>Mode Expert:</ul>What does the <img src=\"./themes/".$theme."/pics/drop.gif\" alt=\"\"> do<ul><li>Click this twice to delete your shout.<br />(note admins and mods can delete your shouts to)</ul>What does the <img src=\"./themes/".$theme."/pics/edit.gif\" alt=\"\"> do?<ul><li>Click this twice to edit your shout.<br />(note admins and mods can edit your shouts to)</ul>");



define ( "_btalt_banned", "Banned Torrent");
define ( "_btalt_auth_none", "Non Dans l'attente des autorisations");
define ( "_btalt_auth_pending", "En attendant les autorisations!");
define ( "_btalt_sticky", "Sticky Torrent");
define ( "_btalt_download", "T�l�charger");
define ( "_btalt_edit", "Edit");
define ( "_btalt_drop", "Delete");
define ( "_btalt_scrape", "Peer Refresh Data");
define ( "_btalt_noscrape", "Statistiques Mise � jour il ya moins de 30 minutes");
define ( "_btalt_logintoscrape", "Se connecter pour v�rifier ses donn�es par les pairs");
define ( "_btalt_duplicate", "Duplicate File");
define ( "_btalt_exeem", "T�l�charger avec eXeem");
define ( "_btalt_error.gif", "Erreur");
define ( "_btalt_icon_admin", "Administrateur");
define ( "_btalt_icon_moderator", "mod�rateur");
define ( "_btalt_icon_premium.gif", "Premium User");
define ( "_btalt_1.gif", "tr�s mauvais");
define ( "_btalt_1.5.gif", "tr�s mauvais");
define ( "_btalt_2.gif", "Bad");
define ( "_btalt_2.5.gif", "pauvres");
define ( "_btalt_3.gif", "moyenne");
define ( "_btalt_3.5.gif", "mieux que la moyenne");
define ( "_btalt_4.gif", "bon");
define ( "_btalt_4.5.gif", "Tr�s bien");
define ( "_btalt_5.gif", "Excellent");
define ( "_btalt_anon_tracker.gif", "Tracker Anonyme");
define ( "_btalt_button_aim.gif", "AOL Instant Messenger");
define ( "_btalt_button_icq.gif", "ICQ");
define ( "_btalt_button_irc.gif", "IRC");
define ( "_btalt_button_msn.gif", "MSN Messenger");
define ( "_btalt_button_yahoo.gif", "Yahoo!");
define ( "_btalt_ed2k_active.gif", "T�l�charger en utilisant ed2k URI");
define ( "_btalt_ed2k_inactive.gif", "Lien ed2k non disponible");
define ( "_btalt_magnet", "T�l�charger en utilisant des aimants URI");
define ( "_btalt_magnet_inactive.gif", "Autre lien non disponible");
define ( "_btalt_green.gif", "Fast");
define ( "_btalt_yellow.gif", "Slow");
define ( "_btalt_red.gif", "Stop");
define ( "_btalt_quest.gif", "Peer Data Unknown");
define ( "_btalt_lock", "En attendant l'autorisation");
define ( "_btalt_lock_request", "Demande d'autorisation");
define ( "_btalt_noavatar.gif", "Non Avatar");
define ( "_btalt_icon_active.gif", "active");
define ( "_btalt_icon_passive.gif", "passif");
define ( "_btalt_external", "External Tracker");

define ( "_btunknownclient", "Unknown Client");
define ( "_btalt_avatar", "Avatar de l'utilisateur ** **");


define ( "_btstats", "Statistiques");


define ( "_btyougotpm", "Vous avez des nouvelles / de messages non lus!");
define ( "_btpmintro", "Ici, vous pouvez lire des messages priv�s d'autres utilisateurs. Il n'ya pas de limite de stockage maximale.
Toutefois, nous vous sugg�rons de supprimer d'anciens messages p�riodiquement. Vous pouvez envoyer des messages � tous les utilisateurs enregistr�s. ");
define ( "_btinbox", "Inbox");
define ( "_btpmnomessages", "Pas de messages");
define ( "_btpmsub", "Objet");
define ( "_btpmfrom", "From");
define ( "_btpmdate", "Date");
define ( "_btplmselect", "Select");
define ( "_btpmread", "Read");
define ( "_btpmunread", "non lu");
define ( "_btimgdelete", "Supprimer l'image");
define ( "_btpmnewmsg", "Nouveau message");
define ( "_btpmdelete", "supprimer les messages");
define ( "_btpmdelall", "supprimer tous les messages");
define ( "_btpmdelconfirm", "Etes-vous s�r de vouloir supprimer tous les messages s�lectionn�s?");
define ( "_btpmdelbtn", "supprimer les messages");
define ( "_btpmdelallconfirm", "Etes-vous s�r de vouloir supprimer <b> ALL </ b> messages priv�s?");
define ( "_btpmdeletedsuccessfully", "Messages Successfully Selected");
define ( "_btnewpm", "Nouveau message");
define ( "_btpmto", "Destinataire");
define ( "_btpmtotip", "Si vous voulez envoyer le m�me message � plusieurs utilisateurs, s�parez-les en les s�parant par une virgule (;)");
define ( "_btpmshowbookmarks", "Afficher / Masquer la liste de contacts");
define ( "_btpmtext", "Message");
define ( "_btpmnorecipient", "Vous devez sp�cifier un b�n�ficiaire");
define ( "_btpmnosubject", "Vous devez sp�cifier un Sujet");
define ( "_btpmnomessage", "Empty Message");
define ( "_btpminvalidrecipients", "Un ou plusieurs des b�n�ficiaires que vous avez entr� n'existe pas");
define ( "_btpmsentsuccessfully", "Message envoy� avec succ�s");
define ( "_btpmuserblocked", "L'un des b�n�ficiaires de ne pas accepter des messages de vous. Vos a �crit: <br>");
define ( "_btmessage", "Message");
define ( "_btinvalidpm", "Message non valide");
define ( "_btpmnoexists", "message n'existe pas");
define ( "_btpmreply", "R�pondre");
define ( "_btuserlists", "Amis et ignor�s Users");
define ( "_btuserlistsintro", "Ici, vous pouvez g�rer la liste des Amis et ignor�s des utilisateurs. Les premiers sont disponibles dans votre liste de contacts pour un acc�s rapide lors de l'envoi d'un nouveau message.
Les messages envoy�s par des utilisateurs ignor�s sera bloqu�. Vous pouvez changer le statut d'un utilisateur dans son profil. Les utilisateurs n'ont pas tous les renseignements sur le statut qui leur ont �t� confi�es par d'autres. ");
define ( "_btpmbookmarkuser", "Ajouter aux Amis");
define ( "_btpmunbookmarkuser", "Supprimer de l'Amis");
define ( "_btpmblacklistuser", "Refuser cet utilisateur Messages");
define ( "_btpmunblacklistuser", "Ne pas refuser de cet utilisateur Messages");
define ( "_btpmbookmarks", "Amis");
define ( "_btpmblacklist", "ignor�s Users");


# NO-LINE BREAKS!
define ( "_btperformance", "Performance");
define ( "_btdht", "DHT Support");
define ( "_bttorrentspd", "Speed Total:");
define ( "_btleechspd", "Estimation de vitesse:");
define ( "_btedt", "Dur�e de t�l�chargement estim�e:");
define ( "_btinfohashhelp", "L'Info Hash est un abr�g�, code unique qui identifie un Torrent. <br>");
define ( "_btdhtexplanation", "Ce soutien de Torrent DHT. Avec un Etat de l'Art Client, vous serez en mesure de t�l�charger ce Torrent, m�me si une centrale Tracker descend.");
define ( "_btavatarnotice", "Uploaded avatars doivent �tre au format GIF, JPEG ou PNG, a sugg�r� de taille 100x100 et ne peut pas �tre plus grand que 300 Ko");
define ( "_btcustomsearch", "RSS / RDF Feed pour Custom Search");
define ( "_btcustomsearchexplain", "Abonnez-vous � ce flux RSS / RDF Feed pour rester � jour sur les envois qui correspondent � vos termes de recherche");


define("_btrules","Rules");
define("_brrulesadmin","Admin-Rules");
define("_btrulesmod","Moderator-Rules");
define("_btrulesprem","Premium-Rules");

define("_btrulesuser","User-Rules");
define("_btrulesgen","General-Rules");
define("_btrulesadd","Add New Rules Section");
define("_btrulesaddsect","Add Rule Section");
define("_btnamelevel","User Level for this Rule");
define("_bttitle","Section Title");
define("_btlevel","Level");
define("_btrulesedit","Edit Rules");
define("_btmodrulesadd","Add Rules Section");
define("_btmodrulesno","No");
define("_btmodrulesyes","Yes");
define("_btmodrulespublic","Public");
//massmail
define("_btmmbody","Body");
define("_btmmsendto","Send Mass E-mail to Selected Member Levels");
define("_btmmlinks","You May Use Links In Your e-mails");

define ( "_bb_tag_prompt", "Entrez un texte:");
define ( "_bb_img_prompt", "Ins�rer un lien � partir de l'image");
define ( "_bb_font_formatter_prompt", "Entrez un texte -");
define ( "_bb_link_text_prompt", "Entrez le nom du lien (facultatif ):");
define ( "_bb_link_url_prompt", "Entrez l'adresse compl�te � gauche:");
define ( "_bb_link_email_prompt", "Entrez votre Full Lien:");
define ( "_bb_list_type_prompt", "Quel type de liste souhaitez-vous? Donnez� 1 �pour une liste num�rique, 'a' pour une liste alphab�tique, ou rien du tout pour une simple liste de points.");
define ( "_bb_list_item_prompt", "Entrez un point de la liste. Appuyez sur OK pour entrer dans un autre point de la liste ou appuyez sur� Annuler �� la fin.");
define('_btmfreetorrentexplain','<img src="themes/'.$theme.'/pics/magic.gif" alt="FREE TORRENT" title="FREE TORRENT" border="0">Any Torrents with this Symbol are Ratio Boosters. Only your Upload is Recorded!!<br> This is a Great way to Boost your Ratio. Normal Site Seeding Rules Apply.<br>Seed to 1.0 or 36 hours to avoid Hit and Runs.');
define('_btmnuketorrentexplain','<img src="themes/'.$theme.'/pics/nuked.gif" alt="NUKED TORRENT" title="NUKED TORRENT" border="0">Any Torrents with this Symbol are Nuked. <br>This means that for some reason someone has determined that there is something wrong with the Release,<br>and it may or may not be viewable. Use your own discretion when downloading these torrents.<br>Normal Site Seeding Rules still Apply unless also made Free. Please Read Details for Reason');
define('_btactiontime','Time');
define('_btactionmark','Mark');

define ( "_btuploadexpl", "S�lectionnez le fichier que vous souhaitez ajouter � votre torrent et BitBucket. <br /> Vous m�me pas besoin de charger cette image dans le futuere. <br /> valide les extensions de fichier: bmp, jpeg, jpg, gif jpe png . ");
define ( "_btgalexpl", "Voici toutes les images que vous avez dans votre galerie <br /> Vous pouvez ajouter une de ces images en cliquant sur le Nmae de l'image ou l'image Voir l'int�gralit� en cliquant sur le pouce.");
define ( "_btvaliext", "valide les extensions de fichier: bmp, jpeg, jpg, gif jpe png");
define ( "_btattach", "Attach Files");
define ( "_btmantitle", "Cliquez ici pour ajouter l'image que vous avez t�l�charg� � partir d'images");
define ( "_btmanimage", "G�rer les images");
# offres
# requist
?>