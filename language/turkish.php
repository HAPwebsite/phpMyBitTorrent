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
*------              �2005 phpMyBitTorrent Development Team              ------*
*-----------               http://phpmybittorrent.com               -----------*
*------------------------------------------------------------------------------*
*/

//COMPLAINTS
function getcomplaints() {
        return Array(0=>"Good quality and legal content",1=>"Fake or corrupted",2=>"Copyrightes",3=>"Porn content",4=>"Child-porn content",5=>"Offensive content",6=>"Content related to terroristic activities");
}
//Donations Block
define("_btdonations","Donations");
define("_btdonationsgoal","Goal:");
define("_btdonationscollected","Collected:");
define("_btdonationsprogress","Donation Progress");
define("_btdonationsdonate","DONATE");

//ERRORI SQL
define("_btsqlerror1","SQL Sorgusunu �al��t�rmada hata olu�tu ");
define("_btsqlerror2","Hata ID: ");
define("_btsqlerror3","Hata Mesaj�: ");

//NewTorrent shout
define("_btuplshout","Hi, I have just uploaded <b>**name**</b>. Enjoy it!");
define("_btnewtsh","Shout out New Torrent");
define("_btnewshex","Check Here if you would like to add a shout in the shout box about your new uploade if not then leave it unchecked!");

//TESTI CHE COMPAIONO IN INCLUDE/BITTORRENT.PHP
define("_btindex","Torrent Anasayfa");
define("_btupload","G�nder");
define("_btlogin","Giri�");
define("_btsignup","Kay�t Ol");
define("_btpersonal","Torrent by ");
define("_btrulez","Kurallar");
define("_btforums","Forum");
define("_bthelp","Yard�m");
define("_btadvinst","�ndirmek i�in Bit Torrent veya Shareaza y�kleyin");
define("_btaccessden","Eri�im Engellendi. �ndirmek i�in <A href=\"modules.php?name=Your_Account&op=new_user\">�ye</a> olman�z gerekmektedir");
define("_btlegenda","�zellikler Yard�m ve A��klamalar****");
define("_btyourfilext","Dosyan�z, harici tracker");
define("_btexternal","Harici Tracker");
define("_btyourfile","Dosyan�z");
define("_btsticky","Evidence");
define("_btauthforreq","Yetki ver");
define("_btauthreq","Yetki �ste�i");
define("_btdown","Download");
define("_btunknown","Bilinmeyen");
define("_btrefresh","G�ncelle");
define("_btvisible","G�r�lebilir");

//TESTI CHE COMPAIONO IN INDEX.PHP
define("_btwelcome","BIT TORRENT'e Ho�geldiniz");
define("_btstart","L�tfen Bit Torrent penceresini indirmeden sonra olabildi�ince a��k tutunuz! Bu t�m indirmeleri h�zland�racakt�r.<br />
�ndirme h�z�n�z� art�rmak i�in, <b>ACTIVE</b> modunu kullanmay� deneyin");
define("_btsearch","Arama");
define("_btin","i�inde");
define("_btalltypes","herhangi");
define("_btactivetorrents","Aktif Torrent'ler");
define("_btitm","�l� Torrents'leri i�er");
define("_btstm","sadece �l� Torrent'ler");
define("_btgo","Git!");
define("_btresfor","Bulunan sonu�lar");
define("_btnotfound","<h2>Sonu� bulunamad�!</h2>\n<p>Arama anahtar kelimelerini g�zden ge�irin.</p>\n");
define("_btvoidcat","<h2>Bo�!</h2>\n<p>Ba�ka kategori se�iniz</p>\n");
define("_btorderby","Bu s�rayla");
define("_btinsdate","Tarih girin");
define("_btname","Ad�");
define("_btdim","Boyut");
define("_btnfile","Dosya say�s�:");
define("_btevidence","�fade");
define("_btcomments","Yorumlar");
define("_btvote","Derece");
define("_btdownloaded","�ndirildi");
define("_btprivacy","Gizlilik");
define("_bttotsorc","Toplam peer");
define("_btdesc","azalan");
define("_btord","artan");
define("_btnosearch","<center><h2>�ndirmek istedi�iniz dosyalar i�in arama yap�n</h2>Yard�m gerektirdi�i takdirde Forum'lara sormay� deneyin; e�er Magnet:/eD2K: linklerinden indiremiyorsan�z muhtemelen Shareaza y�klememi�sinizdir.<br>Size hat�rlat�r�z ki kurallar�m�z t�m dosyalar�n gizli oldu�unu belirtir ve di�er ki�ilerin kullan�m�na a�anlar i�in de ge�erlidir ve kesinlikle payla��m� tescilli, porno, �ocuk pornosu, �rk��l�k, rahats�z edici i�erik ve yasalara ayk�r� her�ey i�in (�r. bomba yap�m ��retimi) yasakt�r.<br>Herkes kendine ait markas�n� korumak amac�yla �cretsiz dosyaad� filtreleme arac�n� kullanabilir.</center>");
define("_bthelpfind","Arama Yard�m");
define("_bttype","Kategoriler");
define("_bttopsource","En iyi download kaynaklar�");
define("_btnotopsource","�u anda indirilen Torrent yok");
define("_btnotseeder_noneed","�u anda kritik Torrent yok");
define("_btnotseeder_desc","E�er bu dosyalardan biri sizde varsa, l�tfen bekleyenler i�in payla��ma a��n. Dosyay� kendi dosyan�za hedefleyin ve tekrar indirmeyi deneyin, istemciniz bunu bulacak ve ASLA dokunmayacakt�r.<br>Yard�m�n�z i�in herkes taraf�ndan te�ekk�r ederiz. G�nlerdir/saatlerdir bekleyen kullan�c�lar olabilir. <b>DOSYA PAYLA�IM FELFES� ���M�ZDE</b>");
define("_btnoseeder","TAM OLMAYAN g�nderi kayna��");
define("_bthelpindex","<p><a name=\"HELP\"></a><a href='modules.php?name=$name&file=index_help'>�ndirmek i�in Bit Torrent veya Shareaza y�kleyin</a>");
define("_btnet","A�");
define("_btsource","Kaynaklar");
define("_btvisible","G�r�lebilir");
define("_bttorrent","Torrent");
define("_btview","G�r�lm��");
define("_bthits","�ndirilmi�");
define("_btsnatch","Tamamlanm��");
define("_btalternatesource","Sadece altenatif kaynaklar mevcut");
define("_bteasy","H�zl� indirme");
define("_btmedium","Yava� indirme");
define("_bthard","�ndirmesi zor");
define("_btstats","�statistikler");

//TESTI CHE COMPAIONO IN DETAILS.PHP
define("_btddownloaded","�ndirilmi�");
define("_btdcomplete","Tamamlanm��");
define("_dtimeconnected","Ba�l� kal�nan s�re");
define("_btdidle","Beklemede");
define("_btdsuccessfully","Torrent ba�ar�yla g�nderildi");
define("_btdsuccessfully2","L�tfen payla��ma �imdi ba�lay�n. G�r�lebilirlik kaynaklar�n say�s�na ba�l�d�r");
define("_btdsuccessfullye","Ba�ar�yla d�zenlendi");
define("_btdgobackto","Sayfaya geri d�n");
define("_btdwhenceyoucame","geldi�inizden beri");
define("_btdyoursearchfor","Araman�z i�in");
define("_btnotorrent","Torrent bulunamad� veya yasakland�");
define("_btdratingadded","De�erlendirme eklendi");
define("_btdspytorrentupdate","SpyTorrent kaynaklar� g�ncelledi");
define("_btdspytorrentupdate1","3 saniye i�inde sayfaya y�nlendirileceksiniz");
define("_btdspytorrentupdate2","Bir�ey yanl�� giderse, sayfaya buradan ula�abilirsiniz");
define("_btdspytorrentupdate3","burada");
define("_btdspytorrentnoupdate","Dahili Torrent'lerden veya son taramadan 15 saniye �nce SpyTorrent'i �al��t�rmak gerekli de�ildir.");
define("_btname","Ad�");
define("_btdownloadas","Olarak indir");
define("_btnetwork","a�");
define("_bthelpinfohash","Kar���k Bilgi Yard�m");
define("_btdescription","A��klama");
define("_btnodead","(�l�) <b>yok</b>");
define("_btvisible","G�r�lebilir");
define("_btbanned","Yasaklanm��");
define("_btnoselected","Kategori Se�ilmedi");
define("_btfiles","dosya");
define("_btago","�nce");
define("_btlastseeder","Son Da��t�c�");
define("_btlastactivity","Son Aktivite");
define("_bttypetorrent","T�r");
define("_btsize","Boyut");
define("_btminvote","Oylanmam�� (enaz __minvotes__ oy gerekli");
define("_btonly","sadece");
define("_btnone","hi�biri");
define("_btnovotes","De�erlendirilmemi�");
define("_btoo5","of 5 with");
define("_btvotestot","toplam oylama");
define("_btlogintorate","Giri�</a> oylama i�in");
define("_btvot1","�ok k�t�");
define("_btvot2","�yi de�il");
define("_btvot3","K�t� de�il");
define("_btvot4","�yi");
define("_btvot5","�ok �yi");
define("_btaddrating","oyla");
define("_btvote","Oyla!");
define("_btrating","De�erlendir");
define("_bthelpstat","�statistik Yard�m");
define("_btviews","g�r�lm��");
define("_bttimes","kere");
define("_btleechspeed","Leech H�z�");
define("_bteta","ETA");
define("_btuppedby","G�nderen");
define("_btnumfiles","Dosya say�s�");
define("_btfilelist","Dosya listesi");
define("_btlasttrackerupdate","Son tracker g�ncellemesi");
define("_bthidelist","Listeyi Sakla");
define("_btleechers","Tamamlanmam��");
define("_bthelpsource","Peer Yard�m");
define("_btseeds","Tamamlanm��");
define("_btcommentsfortorrent","Torrent Yorumlar�");
define("_btbacktofull","Tam detaylara geri d�n");
define("_btnotifyemailcom","Yorum eklendi�i zaman e-posta ile haberdar edilmek i�in");
define("_btnotnotifyemailcom","�u an yorumlar e-posta servisi listesi i�inde yeralmaktas�n�z, e�er daha fazla e-posta ile bilgilendirilmek istemiyorsan�z");
define("_btclickhere","buraya t�klay�n");
define("_btnotifyemail1s","�lk <b>DA�ITICI</b> eklendi�i zaman e-posta ile bilgilendirilmek istiyorsan�z");
define("_btnotnotifyemail1s","�u an da��t�c� e-porta servisi listesi i�inde yeralmaktas�n�z, e�er daha fazla e-posta ile bilgilendirilmek istemiyorsan�z");
define("_btaddcomment","Yorum Ekle");
define("_btnocommentsyet","�u an herhangi bir yorum yok");
define("_btnotnotifyemail1s","ilk DA�ITICI eklendi�i zaman e-posta ile bilgilendirilmek i�in");
define("_btdgavesresult","bir sonu� d�nd�rd�");
define("_btdnotifyemaildel","Yorum bildiri listesinden ��kar�ld�n�z");
define("_btdnotifyemaildel1","Yorum eklendi�i zaman herhangi bir e-posta almayacaks�n�z!");
define("_btdnotifyemailadd1","Yorum eklendi�i zaman e-posta ile haberdar edileceksiniz ve birdaha yorum okumadan e-posta almayacaks�n�z!");
define("_btdnotifyemailadd","Yorum bildiri listesine eklendiniz");
define("_btdnotifyadd","Da��t�c� bildiri listesine eklendiniz");
define("_btdnotifyadd2","Yeni da��t�c�lardan haberdar olman�z i�in g�nde en fazla 1 e-posta alacaks�n�z!");
define("_btdnotifydel","Da��t�c� bildiri listesinden ��kar�ld�n�z ve bir daha e-posta almayacaks�n�z!");
define("_btddetails","Torrent detaylar�");
define("_bteditthistorrent","Bu Torrent'i d�zenle");
define("_btyes","evet");
define("_btno","hay�r");
define("_btaddedby","G�nderen");
define("_bton","up");
define("_bthelpothersource","Alternatif Kaynaklar Yard�m");
define("_btadded","Uploaded");
define("_btfilename","Dosya Ad�");
define("_btpeers","Kaynaklar");
define("_btpeerstot","Toplam peer");
define("_bthelppeer","Peer Yard�m");
define("_btleechers","Leecher'lar");
define("_btdhelpdownload","Dosya �ndirme Yard�m");
define("_btyourate","Oylama yapt�n�z");
define("_btupdatesource","Kaynaklar� �imdi g�ncelle!");
define("_btseeders","Da��t�c�lar");
define("_btcomplyouvoted","You said this Torrent is: ");
define("_btcomplexplain","The Torrent will be banned when getting a number of complaints.");
define("_btcomplaintform","Torrent complaint form.<BR>This system, different from score rating, allows you to vote Torrents that not fit our rules.<BR>
Torrent that will get a number of complaint will be automatically banned by the system.<BR>Please send positive feedback on Torrents that are good and legal.<BR>");
define("_btcomplisay","This Torrent is ");
//Marker p means positive feedback, n means negative
define("_btcomplatthemoment","Right now users sent <b>**p**</b> positive feedbacks and <b>**n**</b> negative feedbacks<BR>");

//TESTI PRESENTI IN TAKEUPLOADURL.PHP
define("_btinseriti","Girilmi�");
define("_btand","ve");
define("_btnumerror","say�lar� e�it de�il ve binary assignment ile devam etmek m�mk�n de�il");
define("_btmaxchar","ED2K URL en fazla 200 karakter uzunlu�unda olmal�");
define("_bted2kstart","URL <b>ed2k://</b> ile ba�layamaz");
define("_bt2par","URL ikinci parametreyi i�ermiyor: ");
define("_bturlfile","dosya");
define("_bturlcontent","URL i�ermiyor");
define("_btfname","dosyaad�");
define("_bturlsize","URL i�ermiyor");
define("_btsz","boyut");
define("_btidcode","kar���k bilgi");
define("_bturlparerror","URL parametre i�ermiyor:");
define("_bturlsureerror","URL kaynak i�eriyor");
define("_bturlnotinsert","ED2K Link eklenmeli");
define("_btnotip","IP tan�mlanmam��");
define("_btinvip","Ge�ersiz IP");
define("_btnoport","Herhangi bir port tan�mlanmam��");
define("_btinvport","Ge�ersiz Port");
define("_btparmag","hi�bir");
define("_btnopresent","bulunmuyor");
define("_btmagchar","MagnetURL en fazla 200 karakter uzunlu�unda olmal�");
define("_bftminlimit","Bu boyuttan daha k���k dosyalar� payla�amazs�n�z");
define("_btfmaxlimit","Torrent �ok b�y�k dosya i�eriyor");
define("_btillegalword","Dosyaad� anahtar kelimeleri yasal olmayan aktiviteleri i�eriyor gibi g�r�n�yor.");
define("_btillegalwordinfo","Portal�m�z illegal aktiviteleri engellemek i�in �zel bir kelime filtresi kullanmaktad�r. Biliyoruz ki, e�er dosyan�z illegal kelimeler i�erse bile, hala tamamen yasal olabilir. L�tfen �z�rlerimizi kabul edin ve dosyay� farkl� bir isim alt�nda g�nderin.");
define("_bturlinserted1","Torrent g�nderildi. 3 saniye i�inde y�nlendirileceksiniz.<BR>E�er y�nlendirme ger�ekle�memi�se, sayfaya buradan ula�abilirsiniz");
define("_bturlinserted2","bu link");
define("_btnotify","Bildiri listesine eklendiniz: yeni yorumlar e-posta adresinize g�nderilecektir.");
define("_btnolinkinsert","Link girilmemi�");
define("_btexnostartwt","eXeem links start with exeem://");
define("_btillegalcat"," Illegal category!");

//TESTI PRESENTI IN UPLOAD.PHP
define("_btphotoext","Resim dosyas� GIF, JPG veya PNG uzant�lar�na sahip de�il");
define("_btalertmsg","Form bu hatalardan dolay� i�leme giremedi:");
define("_btalertmsg2","L�tfen hatalar� d�zeltip tekrar g�ndermeyi deneyin");
define("_btfnotselected","HATA: dosya se�ilmedi");
define("_btalertdesc","L�tfen dosyan�n tipini ve niteli�ini belirten bir a��klama yaz�n, �zellikle multimedya dosyas� oldu�u zaman");
define("_btalertcat","Kategori se�in");
define("_btconferma","G�ndermeye haz�r m�s�n�z? E�er Torrent birden fazla dosyadan olu�mu�sa, l�tfen b�t�n klas�r� i�eren bir ar�iv yarat�n�z. E�er ar�iv de�ilse, kullan�lamayabilir veya indirecek ki�iye sorunlar yaratabilir.");
define("_btalerturl","MAGNET veya ED2K linki giriniz");
define("_btalerturlnum1","ED2K link numaras�");
define("_btalerturlnum2","MAGNET link numaras� �u oldu�u s�rece");
define("_btalerturlnum3","Torrent'ler birka� linkten yap�lm��sa link say�lar� ayn� olmal�d�r");
define("_btalert5char","Dosyaad� en az 5 karakter uzunlu�unda olmal�d�r");
define("_btofficialurl","Bu sitenin resmi tracker'lar�:");
define("_btseeded","E�er payla��yorsan�z sadece Torrent'leri g�nderin!!! E�siz bir Torrent anasayfada g�r�lmeyecektir.");
define("_btupfile","Dosyay� g�nder:");
define("_bttorrentname","Torrent ad�");
define("_btfromtorrent","Alan� doldurmak i�in u�ra�may�n: dosyaad�ndan otomatik olarak doldurulacakt�r.");
define("_btdescname","A��klay�c� bir isim vermeye �al���n");
define("_btdescription","Torrent a��klamas� (gerekli)");
define("_btnohtml","HTML KULLANMADAN");
define("_btsrc_url","Kaynak URL");
define("_btcompulsory"," (Mecburi)");
define("_btchooseone","Se�iniz");
define("_bttype","Tipi");
define("_btverduplicate","Benzer Torrent'ler i�in kontrol ediniz");
define("_btduplicatinfo","E�er i�aretlenmi�se ve e�er benzer Torrent bulunursa sistem g�nderimi durduracakt�r. E�er hala Torrent'i g�ndermek istiyorsan�z ozaman i�areti kald�r�n. Birbirinin ayn�s� Torrent'ler sadece kullan�c�n�n kafas�n� kar��t�r�r, bu y�zden her �r�n i�in bir Torrent olmas� daha iyidir.");
define("_btupevidence","�fade");
define("_btupevidencinfo","Bu sorumlulukla kullan�n: sadece dosyan�n halk i�in �nemli oldu�unu d���nd���n�z zaman ve sa�lam da��t�m verdi�inizde kullan�n (en az bir hafta i�in m�mk�n oldu�unca 24/7 olabilir...)");
define("_btowner","Sahip");
define("_btowner1","Kullan�c�y� G�ster");
define("_btowner2","Gizlilik Modu");
define("_btowner3","G�r�nmezlik Modu");
define("_btownerinfo","'KULLANICI G�STER' se�ene�i di�er kullan�c�lara kullan�c� ad�n�z�n g�sterilmesini sa�lar, 'G�ZL�L�K MODU' kullan�c� ad�n�z� saklar fakat kendi Torrent'lerinin d�zenle/sil fonksiyonlar�n� elde tutar, 'G�R�NMEZL�K MODU' sahip olan� tamamen sisteme saklar ve herhangi bir d�zenleme/sil fonksiyonu kullan�lamaz.");
define("_btupnotify","Bilgilendir");
define("_btupnotifynfo","Herhangi bir yorum eklendi�i zaman e-posta ile bilgilendirileceksiniz");
define("_btfsend","Torrent G�nder");
define("_btinserte2k","ED2K Linki Giri�i");
define("_btmagnetinsert","Magnet Linki Giri�i");
define("_btinsertlinktitle","GNutella ve eDonkey2000 A�lar� i�in link giriniz");
define("_btinsertlinktext","Tracker hatalar�n� �nlemek i�in Bit Torrent dosyalar�n�za eDonkey2000 linki ekleyebilirsiniz. Sahte veya eleman�m�zla ayn� olmad��� s�rece linkleriniz aktif olacakt�r");
define("_btinserttext2","Sadece ya MAGNET linki yada ED2K linki ekleyebilirsiniz. E�er her iki liste de giri�le doldurulmu�sa, tek bir dosyaya iki link atanm�� olacakt�r: di�er bir deyi�le ilk ED2K linki ve ilk MAGNET linki ilk dosyaya atanm�� olacakt�r, vb... Uzun dosya listeleri yarat�rsan�z daha fazla dosya indirilmeye haz�r olacakt�r: bu �ok ilgin� bir �zelliktir, indirilenleri daha k���k par�alara ay�rd���ndan daha kullan��l�d�r ve Shareaza kullanmazs�n�z (bu her iki t�r link i�in de ge�erlidir).");
define("_bted2kurl","ED2K link giriniz");
define("_btsyntax","Benzer");
define("_btfiletype","uzant�");
define("_btfilesize","boyut");
define("_btidcode","infohash");
define("_btipport","ip:port");
define("_btstatic","sadece eDonkey2000 protokol� kulland���m�z� belirtir");
define("_btfinalname","indirilecek dosyan�n ad�d�r");
define("_btfinalsize","dosyan�n byte boyutudur");
define("_btfinalidcode","benzer dosyalar i�erisinden SADECE B�R DOSYA bulmam�za olanak tan�yan �zel do�rulama kodudur");
define("_btfinalipport","ana stabil kayna�� sunar (yay�nlay�c�lar taraf�ndan kullan�l�r)");
define("_btor","veya");
define("_btaddmagnet","MAGNET linki ekle");
define("_btadded2k","eD2K linki ekle");
define("_bthelpupload","Yard�ma ihtiyac�n�z m� var? <a href='modules.php?name=$name&file=upload_help'>��retimize</a> bir bak�n");
define("_btphoto","Resim");

//TESTI CHE COMPAIONO IN ADDCOMMENT.PHP
define("_btiderror","Ge�ersiz ID");
define("_btnotfoundid","Torrent bulunamad�");
define("_btaddcomment","Buna yorum ekle");
define("_btaddtime","G�nderildi ");
define("_btby","taraf�ndan");
define("_btsend","G�nder");

//TESTI CHE COMPAIONO IN DELETE.PHP
define("_btcannotdel","Silinemiyor!");
define("_btmissingdata","�stek bilgisi eksik!");
define("_btdeldenied","Bu Torrent'i sadece sahibi veya site Y�neticisi silebilir");
define("_btnotconfirmed","Ne yap�yor oldu�unuzdan emin olmal�s�n�z");
define("_btdeleted","Torrent silindi");
define("_btgoback","Geri d�n");


//TESTI CHE COMPAIONO IN DOWNLOAD.PHP
//LE PAROLE TRA "** **" SONO INDICATORI
define("_btantiscrocco","<p>�ndirme hakk�n�z sakl� tutmak istiyorsan�z herbiri en az **min_size** bilgi i�eren di�er **min_num** Torrent'leri payla�abilir ve en az�ndan da��t�c� olarak kalabilirsiniz. Harici tracker kullanmay� ve dosyay� buraya g�ndermeyi unutmay�n. Sadece YASAL dosyalar� kabul etti�imizi ve gizlilik i�in G�R�NMEZL�K MODU'nda olmaman�z� veya sistem sizi da��t�c� olarak tan�mazsa dosya izinlerini y�netebilece�iniz durumda olman�z gerekti�ini size hat�rlatmak isteriz. Sadece sizin taraf�n�zdan g�nderilen dosyalar da��t�m olarak say�lacakt�r. Gereksiz ve kap�lm�� Torrent'ler hesap iptaline sebep olabilir. Bu sunucu her saat Torrent'lerin kaynaklar�n� senkronize eder, bu y�zden bazen sorunlarla kar��la�abilirsiniz (SpyTorrent'i da��t�lm�� Torrent'lerde zorlamay� deneyin). Bu insanlar� payla��ma zorlayarak toplulu�un b�y�mesini sa�layacakt�r.</p><P>Yapabildi�iniz kadar �ok Torrent da��tmaya �al���n. Farkl� bir kullan�c� ad�yla kay�t olmay�n, ��nk� IP'leri izliyoruz.
 Ba��� yapan ki�iler TAMAMEN k�s�tlamas�z indirme �zelliklerini kazanacaklard�r. Kullan�c� ad�n�z� a��k�a belirtmeyi unutmay�n. Torrent'lerin i�eri�inden sorumlu olmad���m�z� ve kullan�c�lar istedikleri gibi Torrent'leri payla�abildiklerini unutmay�n: kimin indirme yap�p yapamayaca��na karar verebilirler. $nukeurl sadece istatistikleri tutar ve her payla��lan Torrent'in kontrol�n� sa�layamaz fakat binlerce ki�i portal�m�z� kullanmaktan memnun olur.</p>");
define("_btnogratis","Herzaman bedava i�in ya�ayamazs�n�z!");
define("_bttodayused","Bug�n kulland���n�z");
define("_bttomorrow","Torrentler ve o daha fazla kullan�m i�in m�mk�n g�r�nm�yor. Yar�n yine gelin ve g�nl�k en fazla **maxfile** Torrent kullanabilece�inizi unutmay�n.</p>");
define("_btlantoday","Bug�n **ip** IP'siyle siz veya sizin a��n�zdaki bir ba�ka ki�i bunu zaten kullan�yor ");
define("_btlantomorrow"," Torrentler ve o daha fazla kullan�m i�in m�mk�n g�r�nm�yor. Yar�n yine gelin ve g�nl�k en fazla **maxfile** Torrent kullanabilece�inizi unutmay�n. LAN'lar�n cezaland�r�ld���n� biliyoruz, fakat a��n k�t�ye kullan�lmas�n� �nlemek istiyoruz.</p>");
define("_btthisweek","Zaten zaten bu kadar kulland�n�z ");
define("_btnextweek"," Torrentler ve o daha fazla kullan�m i�in m�mk�n g�r�nm�yor. Haftaya yine gelin ve haftal�k en fazla **maxfile** Torrent kullanabilece�inizi unutmay�n.</p>");
define("_btthisweeklan","Bu hafta, siz veya sizinkine benzer **ip** IP'sini kullanan biri bu kadar kulland� ");
define("_btnextweeklan"," Torrentler ve o daha fazla kullan�m i�in m�mk�n g�r�nm�yor. Haftaya yine gelin ve haftal�k en fazla **maxfile** Torrent kullanabilece�inizi unutmay�n.</p>");
define("_btmsgbody1","**nukeurl** taraf�ndan BIT TORRENT �zerinden payla��lan dosyay� indirmek i�in izin istedi�iniz kullan�c� iste�inizi kabul etti: ");
define("_btmsgbody2","�u andan itibaren t�m kullan�c�lar�n dosyalar�n� indirebilirisiniz. **nukeurl** gizlili�inizi korur.");
define("_btmsgsubject","BIT TORRENT i�in **nukeurl** taraf�ndan Eri�im Yetkisi");
define("_btauthreqbody","**nukeurl** taraf�ndan BIT TORRENT �zerinden payla�t���n�z dosyay� g�rebilmek i�in kullan�c� **username** yetkili olmak istiyor: Yetkili yapmak i�in:\n\n   **nukeurl**/modules.php?name=$name&file=mytorrents&privacy=**userid**\n\n\nT�m beklemedeki izin isteklerine onay vermek i�in buraya t�klay�n:\n\n$nukeurl/modules.php?name=$name&file=mytorrents&privacy=all\n\n\nBekleyen dosyalara indirme izni verdikten veya reddetmeden �nce hi�bir e-posta almayacaks�n�z.\n�zin isteyen kullan�c�lar� g�rmek i�in:\n\n**nukeurl**/modules.php?name=$name&file=mytorrents\n\n\n**sname** gizlili�inizi korur, �zg�rl�kten sonra en �nemli hak!");
define("_btautherrpending","Bu kullan�c� i�in zaten indirme izni istediniz. Kabul veya reddetmesi durumunda daha fazla indirme izni i�in yetki isteyemezsiniz. **tot** bekleyen yetki izni var.");
define("_bterrminseed","<li>En az <b>**min_share**</b> bilgi da��tmal�s�n�z.<br>");
define("_btruleok","Kural Tamam");
define("_btruleko","<b>UYARI: bu kurala uymuyorsunuz</b>. ");
define("_bterrnoseeder","<b>Hi�bir�ey da��tm�yorsunuz!</b>");
define("_bterrnotenoughshare1","<b>Da��t�yorsunuz");
define("_bterrnotenoughshare2"," bilgisi, daha fazla da��tmal�s�n�z ");
define("_bterrtoosmall","<li>En az <b>**min_share**</b> boyutunda dosya da��tmal�s�n�z.<br>");
define("_bterrtoobig","<b>En b�y�k da��tt���n�z dosya ");
define("_bterrmaxnumnoseed", "<li>Da��t�c� olmadan en fazla <b>**maxfile**</b> indirme yapabilirsiniz.<br> ");
define("_bterrmaxdownloadsize","<li><b>**maxsize**</b> limitini a�t���n�z zaman indirme yapamazs�n�z.<br>");
define("_btfinalerrmsg1","�u andan itibaren, kullan�lan ip <b>**ip**</b> (bunu okuyan sadece sizsiniz) veya LAN'�n�n�zdaki di�er kullan�c�lar bu site i�in <b>bedava</b> indirme limitini a�t�!<br>Site limitleri:<ol>");
define("_btfinalerrmsg2","</ol><b>Limitsiz</b> indirmeye devam edebilmek i�in a�a��daki kurallara uymal�s�n�z:<ol>");
define("_btfinalerrmsg3","</ol><p>Da��tmak demek <b>100% tam bir dosyay�</b> indirme i�in sizin tam dosyan�z� a��k�a hedef dosya olarak payla�man�zd�r (Bit Torrent taraf�ndan dokunulmayacakt�r).<br></p><p>Ayr�ca yeni Torrent'ler <a href='modules.php?name=**name**&file=upload'>G�NDEREB�L�R</a> ve �al��t�rabilirsiniz.</p><p>Yada e�er indirme pencerenizi KAPAMAMI�SANIZ otomatik olarak da��t�lan �imdiki indirmelerinizin bitmesini bekleyebilirsiniz.</p><p>Kurallara uydu�unuz s�rece, tekrar dosya indirebilirsiniz</p>");
define("_bterrorprivate","Bu �zel bir dosya: zaten indirme izni istediniz. E�er dosyan�n sahibi hen�z iste�inizi kabul etmemi�se, dosyay� indiremezsiniz.");
define("_btrefused","Dosyan�n sahibi izin iste�inizi reddetti. Bu kullan�c�ya bir daha istek g�nderemezsiniz.");
define("_btreqsent","Torrent sahibine indirme izni i�in bir e-posta g�nderilmi�tir: sonu� bir e-posta ile bilginize sunulacakt�r.");

//TESTI CHE COMPAIONO IN EDIT.PHP
define("_btedittorrent","Torrent'i D�zenle \"");
define("_bterreditnoowner","<h1>Eri�im Engellendi</h1>\n<p>Sadece sahipleri veya site y�neticileri bu Torrent'i silebilir</p>\n");
define("_btbanned","Yasakl�");
define("_btcancel","�ptal");
//define("_btdelcommand","Torrent'i d�zenlemedi, fakat <input type=\"submit\" value=\"S�LD�!\" />\n");
//define("_btsure","Evet: Bundan eminim!");

//TESTI CHE COMPAIONO IN MYTORRENTS.PHP
define("_btallauthorized","T�m kullan�c�lar yetkilendirildi");
define("_btauthorized","Se�ilen kullan�c�lar yetkilendirildi");
define("_bthasauthorized","Kullan�c� dosyalar�n� indirmenize yetki verdi");
define("_btnowcandownload","�imdi t�m kullan�c� dosyalar�n� serbest�e indirebilirsiniz.\nGizlili�inizi koruyaca��z.");
define("_btauthmailsubj","BIT TORRENT dosya eri�im Yetkisi");
define("_btauthorizationrequested","Bu kullan�c�lar indirme yetkisi istedi:");
define("_btnotorrents","Torrent yok");
define("_btnotorrentuploaded","Hen�z bir Torrent g�ndermediniz");

//TESTI CHE COMPAIONO IN TAKECOMMENT.PHP
define("_btcommentkeyfound","Sistem yorumunuz kelimelerini kontrol etti. A�a��daki s�zc�kler illegal aktivitelerle ba�lant�l� olabilir:<ol>");
define("_btcommentkeyfound2","</ol><p>Yorumunuzun hala yasal olabilece�ini biliyoruz, verdi�imiz rahats�zl�k i�in �z�r dileriz ve kelimelerinizi de�i�tirmenizi rica ediyoruz. Bu otomatik bir filtrelemedir ve bazen yanl��l�k s�zkonusu olabilir.</p>");
define("_bttorrentmailbody","Merhaba, Bu mesaj� almay� BIT TORRENT servisinde TORRENT **nome** hakk�nda yapt���n�z istekten beri al�yorsunuz\n\nBuraya t�klayarak yorumunuzu g�rebilirsiniz:\n\n**url_site**/modules.php?name=**name**&file=details&id=**id**&viewcomm=**newid**&sn=u#comm**newid**\n\n\nG�rebilmeniz i�in siteye giri� yapman�z gerekmektedir.\n\nE�er bu Torrent'i okumad�ysan�z bir daha bu Torrent hakk�nda e-posta almayacaks�n�z.\n\n\nE�er bu Torrent hakk�nda bildiri almak istemiyorsan�z buraya t�klay�n:\n**url_site**/modules.php?name=**name**&file=details&id=**id**&cn=n");
define("_btcommentiserted","Yorum ba�ar�yla girildi, Torrent sayfas�nda 3 saniye i�inde y�nlendirileceksiniz.<br>Sorun ya��yorsan�z sayfaya <a href=\"modules.php?name=**name**&file=details&id=**id**&viewcomm=**newid**#comm**newid**\">buradan</a> eri�ebilirsiniz");

//TESTI CHE COMPAIONO IN TAKEEDIT.PHP
define("_btmissingformdata","Kay�p veri giri�i!");
define("_bteditfailed","D�zenle yap�lamad�");
define("_bteditdenied","Di�er ki�ilerin Torrent'lerini d�zenleme yap�lamad�");
define("_btreturl","Dosya ba�ar�yla d�zenlendi, 3 saniye i�inde Torrent sayfas�na y�nlendirileceksiniz.<br>You can reach the page from <a href=\"**returl**\">here</a> if you have troubles");

//TESTI CHE COMPAIONO IN TAKERATE.PHP
define("_btratefailed","Oylama ba�ar�s�z!");
define("_btinvalidrating","Ge�ersiz oy");
define("_btidnotorrent","Ge�ersiz ID. Torrent bulunamad�");
define("_btnovoteowntorrent","Kendi Torrent'lerinizi oylayamazs�n�z");
define("_btalreadyrated","Torrent zaten derecelendirilmi�");
define("_btvotedone","Oylama ba�ar�l�, 3 saniye i�inde Torrent sayfas�na y�nlendirileceksiniz.<br>Sorun ya��yorsan�z sayfaya <a href=\"modules.php?name=**name**&details.php&id=**id**&rated=1\">buradan</a> eri�ebilirsiniz");

//TESTI CHE COMPAIONO IN TAKEUPLOAD.PHP
define("_btuploadfailed","G�nderim ba�ar�s�z!");
define("_btemptyfname","Bo� dosyaad�");
define("_btinvalidfname","Ge�ersiz dosyaad�");
define("_btfnamenotorrent","Bu bir Torrent dosyas� de�il (.torrent)");
define("_btferror","Dosya Hatas�");
define("_bterrnofileupload","Dosyada �l�mc�l hata.");
define("_btemptyfile","Dosya bo�");
define("_btnobenc","Dosya zarar g�rm��. Ger�ekten Torrent oldu�una emin misiniz?");
define("_btnodictionary","Torrent s�zl��� bulunamad�");
define("_btdictionarymisskey","Kay�p Torrent S�zl��� Anahtar Kelimeleri");
define("_btdictionaryinventry","Torrent S�zl���'nde ge�ersiz veri");
define("_btdictionaryinvetype","Torrent S�zl���'nde ge�ersiz veri tipleri");
define("_btinvannounce","Ge�ersiz Bildiri URL'si. ��yle olmal� ");
define("_btactualannounce","A��k�a belirtilen tracker ");
define("_bttrackerdisabled","Tracker'�m�z pasifle�tirildi, harici tracker'lar�n nas�l kullan�ld���n� ��renmek i�in <a href='modules.php?name=**name**&file=upload_help'>bu ��retileri</a> okuyunuz");
define("_btinvpieces","Ge�ersiz Torrent b�l�mleri");
define("_btmissinglength","Kay�p dosyalar boyutlar�");
define("_btnofilesintorrent","Kay�p Torrent dosyalar�");
define("_btfnamerror","Ge�ersiz dosyaad�");
define("_btfilenamerror","Dosyaad�nda hata");
define("_bttorrenttoosmall","<p>Bu boyuttan daha k���k dosya payla�amazs�n�z <b>");
define("_bttorrenttoosmall2","</b></p><p>Torrent'iniz bu isimde dosya i�eriyor <b>");
define("_btmaxuploadexceeded","Her 24 saatte bir **maxupload**'dan daha �ok g�nderim yapman�z m�mk�n de�il.");
define("_btnumfileexceeded","<p>24 saat i�inde <b>**maxupload**</b>'dan fazla dosya g�nderemezsiniz.</p><p>�u anda zaten toplam <b>**totsize**</b> boyutunda <b>**rownum**</b> dosya g�ndermi�siniz");
define("_btsearchdupl","Arama sonu�lar�na g�re bu dosyalar payla�t�klar�n�zla uyu�abilir:<ol>");
define("_btduplinfo","<p>E�er dosyan�z listedeyse, Bu Torrent'lerden birini payla��n!</p>");
define("_btsocktout","HATA: Socket timed-out");
define("_bttrackernotresponding","Tracker yan�t vermiyor.\n Tracker yaz�m�n� kontrol etmelisiniz (URL'lerde BO�LUKLAR OLMAMALI) and �al��t���na bakmal�s�n�z. A��k�a belirtilen tracker:");
define("_bttrackerdata","Harici tracker'da ge�ersiz bilgi. Tracker'da sunucu problemleri olabilir. Daha sonra tekrar deneyiniz.");
define("_btuploadcomplete","Ba�ar�yla g�nderildi, dosya sayfas�na 3 saniye i�inde y�nlendirileceksiniz. Remember to seed it or the Torrent won't be visible on main page!<br>Sorun ya��yorsan�z sayfaya <a href=\"**url**\">buradan</a> eri�ebilirsiniz");

//TESTI CHE COMPAIONO IN TAKECOMPLAINT.PHP
define("_btcomplisnowbanned","This Torrent has been banned due to the number of complaints");
define("_btcomplcantvotetwice","We're sorry, but you can't send a complaint twice.");
define("_btcomplainttaken","Complaint registered. You are being redirected to the Torrent's page in 3 seconds. Else click on ");
define("_btcomplsuccess","Your opinion has been logged. User name and IP are logged too, do not abuse of the system.<BR>");

//eXeem
define("_btaddexeem","Add eXeem link");
define("_btsegment","segment");
define("_btexeeminsert","Insert eXeem link");
define("_btlinkstart","Link doesn't start with ");
define("_btumagneturl","Insert Magnet link");
define("_btexeemurl","Insert eXeem link");
define("_btalerturlnum4","while Magnet is");
define("_btalerturlnum5","Magnet links number is");
define("_btinserttext3","You may insert either only eXeem links or combinations of the three types. Remember there must be as many eXeem links as many other netowrks' links. If you insert 3 eXeem links and you want to insert eD2K links you must insert 3 eDonkey2000 links and they will be associated.");
define("_btalerturlnum5","Magnet link number is");
define("_btuploadurl","Send Links");
define("_btlinkmaxchar","Beyond maximum link size");
define("_btalertmsg1","The form has not been submitted due to the following errors.");
define("_btalertmsg2","Plaese correct the form and submit it again.");
define("_btconferma2","Are you ready to upload? If your package is made by more files, please include them in the same submission.");
define("_btevidenced","Sticky");
define("_btinsertlinktitle","Insert GNutella - eDonkey2000 - eXeem links");
define("_btalerturlnum3","Links number must be equal since each file is composed by pairs of links");

// Rules
define("_btrules","Rules");
define("_brrulesadmin","Admin-Rules");
define("_btrulesmod","Moderator-Rules");
define("_btrulesprem","Premium-Rules");
define("_btrulesuser","User-Rules");
define("_btrulesgen","General-Rules");
define("_btrulesadd","Add New Rules Section");
define("_btrulesaddsect","Add Rule Section");
define("_btnamelevel","User Level for this rule");
define("_bttitle","Section Title");
define("_btlevel","Level");
define("_btrulesedit","Edit Rules");

//massmail
define("_btmmbody","Body");
define("_btmmsendto","Send mass e-mail to selected member levels");
define("_btmmlinks","You May Use Links In Your emails");

?>
