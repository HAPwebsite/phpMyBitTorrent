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

#  Brazilian Portuguese Translation by Elessar > http://www.tux-br.org         -


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
define("_btsqlerror1","Erro ao executar a consulta SQL ");
define("_btsqlerror2","Erro n�: ");
define("_btsqlerror3","Mensagem de erro: ");

//TESTI CHE COMPAIONO IN INCLUDE/BITTORRENT.PHP
define("_btindex","�ndice de torrentes");
define("_btupload","Enviar");
define("_btlogin","Login");
define("_btsignup","Registrar-se");
define("_btpersonal","Torrente por ");
define("_btrulez","Regras");
define("_btforums","F�rum");
define("_bthelp","Ajuda");
define("_btadvinst","Instale o Bit Torrent ou o Shareaza para baixar os arquivos");
define("_btaccessden","Acesso Negado ! Os downloads requerem <A href=\"modules.php?name=Your_Account&op=new_user\">registro no site</a>");
define("_btlegenda","Recursos de ajuda e legenda");
define("_btyourfilext","Seu arquivo, tracker externo");
define("_btexternal","Tracker externo");
define("_btyourfile","Seu arquivo");
define("_btsticky","Evidencia");
define("_btauthforreq","Authorization to request");
define("_btauthreq","Pedido de autoriza��o");
define("_btdown","Download");
define("_btunknown","Desconhecido");
define("_btrefresh","Atualizar");
define("_btvisible","Vis�vel");

//TESTI CHE COMPAIONO IN INDEX.PHP
define("_btstart","Por favor, mantenha o seu Bit Torrent aberto ap�s baixar arquivos o m�ximo que voc� puder ! Isto ir� acelerar todos os downloads.<br />
Para acelerar a velocidade dos downloads, tente usar o modo <b>ATIVO</b>.<br />");
define("_btsearch","Pesquisar");
define("_btin","em");
define("_btalltypes","qualquer");
define("_btactivetorrents","Torrentes ativos");
define("_btitm","incluir torrentes inativos");
define("_btstm","apenas torrentes inativos");
define("_btgo","Ok");
define("_btresfor","Resultados encontrados para");
define("_btnotfound","<h2>Nenhum resultado!</h2>\n<p>Tente novamente com outras palavras-chave.</p>\n");
define("_btvoidcat","<h2>Empty!</h2>\n<p>Escolher outra categoria</p>\n");
define("_btorderby","Ordenar por");
define("_btinsdate","Inserir data");
define("_btname","Nome");
define("_btdim","Tamanho");
define("_btnfile","N�mero de arquivos:");
define("_btevidence","Evidencia");
define("_btcomments","Coment�rios");
define("_btvote","Nota");
define("_btdownloaded","Baixado");
define("_btprivacy","Privacidade");
define("_bttotsorc","Total peers");
define("_btdesc","decrescente");
define("_btord","crescente");
define("_btnosearch","<center><h2>Pesquise pelos arquivos que voc� gostaria de baixar</h2>Se precisar ajuda, procure os F�runs; Se voc� n�o pode baixar links Magnet:/eD2K: voc� provavelmente n�o instalou ainda o Shareaza.<br>N�s te lembramos de que nossas regras determinam que todos os arquivos s�o privados, e � de responsabilidade de quem compartilha permitir outras pessoas o download, e � estritamente proibido compartilhar recursos com copyright, porn�s, pedofilia, racismo, material que ofenda ou qualquer coisa que poderia violar as leis (Ex. Tutoriais de cria��o de bombas).<br>Qualquer um pode solicitar um filtro nos arquivos que permita que seja protegido as suas marcas registradas.</center>");
define("_bthelpfind","Ajuda nas pesquisas");
define("_bttype","Categorias");
define("_bttopsource","O mais baixados");
define("_btnotopsource","N�o existem torrentes para download neste momento");
define("_btnotseeder_noneed","N�o existem torrentes cr�ticas neste momento");
define("_btnotseeder_desc","Se voc� possui um destes arquivos, por favor compartilhe-o com quem est� precisando baix�-lo ! Fa�a-o tentando baixar o arquivo novamente, o seu software ir� detectar a a��o e nunca ir� toc�-lo.<br>Obrigado a todos pela ajuda. Pense bem, podem haver pessoas esperando por este arquivo h� horas/dias !!");
define("_btnoseeder","Fonte de upload n�o completa");
define("_bthelpindex","<p><a name=\"HELP\"></a><a href='modules.php?name=$name&file=index_help'>Instale o Bit Torrent ou Shareaza para fazer os downloads</a>");
define("_btnet","Rede");
define("_btsource","Fontes");
define("_bttorrent","Torrente");
define("_btview","Visto");
define("_bthits","Baixado");
define("_btsnatch","Completado");
define("_btalternatesource","Somente fontes alternativas dispon�veis");
define("_bteasy","Download r�pido");
define("_btmedium","Download lento");
define("_bthard","Dif�cil para baixar");
define("_btstats","Estat�sticas");

//TESTI CHE COMPAIONO IN DETAILS.PHP
define("_btddownloaded","Baixados");
define("_btdcomplete","Completados");
define("_dtimeconnected","Tempo conectado");
define("_btsourceurl","Dispon�vel em");
define("_btdidle","Pausado");
define("_btdsuccessfully","Torrente enviado com sucesso");
define("_btdsuccessfully2","Por favor, compartilhe agora. A visibilidade depende do n�mero de fontes dispon�veis");
define("_btdsuccessfullye","Altera��es bem sucedidas");
define("_btdgobackto","Voltar para a p�gina");
define("_btdwhenceyoucame","desde que voc� veio de");
define("_btdyoursearchfor","Sua pesquisa por");
define("_btnotorrent","O Torrente n�o existe ou foi banido");
define("_btdratingadded","Avalia��o adicionada");
define("_btdspytorrentupdate","O SpyTorrent atualizou as fontes");
define("_btdspytorrentupdate1","Em 3 segundos voc� ser� redirecionado para a p�gina");
define("_btdspytorrentupdate2","Se algo sair errado, voc� pode acessar a p�gina ");
define("_btdspytorrentupdate3","daqui");
define("_btdspytorrentnoupdate","N�o � necess�rio executar o SpyTorrent em Torrentes internas, ou antes de 15 minutos desde o �ltimo escaneamento.");
define("_btdownloadas","Baixar como");
define("_btnetwork","rede");
define("_btinfohash","Informa��o Hash");
define("_btdescription","Descri��o");
define("_btnodead","<b>n�o</b> inativa");
define("_btbanned","Banido");
define("_btothersource","Alterar fonte");
define("_btnoselected","Nenhuma categoria selecionada");
define("_btago","atr�s");
define("_btlastseeder","�ltimo compartilhador");
define("_btlastactivity","�ltima atividade");
define("_bttypetorrent","Tipo");
define("_btsize","Tamanho");
define("_btminvote","N�o votado (requer no m�nimo __minvotes__ votos");
define("_btonly","apenas");
define("_btnone","nenhum");
define("_btnovotes","Sem avalia��o");
define("_btoo5","de 5 com");
define("_btvotestot","voto(s) no total");
define("_btlogintorate","Conecte-se</a> para votar");
define("_btvot1","Muito ruim");
define("_btvot2","Nada bom");
define("_btvot3","N�o ruim");
define("_btvot4","Bom");
define("_btvot5","Muito bom");
define("_btaddrating","votar");
define("_btvote","Votar!");
define("_btrating","Avaliar");
define("_bthelpstat","Ajuda de Estatisticas");
define("_btviews","visto");
define("_bttimes","vezes");
define("_btleechspeed","Velocidade de download");
define("_bteta","ETA");
define("_btuppedby","Enviado por");
define("_btnumfiles","N�mero de arquivos");
define("_btfilelist","Lista de arquivos");
define("_btlasttrackerupdate","�ltima atualiza��o do tracker");
define("_bthidelist","Esconder lista");
define("_btleechers","Imcompleta");
define("_bthelpsource","Ajuda no peer");
define("_btseeds","Completo");
define("_btcommentsfortorrent","Coment�rios das torrentes");
define("_btbacktofull","Voltar aos detalhes completos");
define("_btnotifyemailcom","Se voc� quiser receber e-mails quando coment�rios forem enviados");
define("_btnotnotifyemailcom","Voc� configurou o servi�o para enviar-te email quando chegarem coment�rios aos torrentes. Se n�o quiser mais receber mensagens");
define("_btclickhere","clique aqui");
define("_btnotifyemail1s","Se voc� quiser ser notificado por email quando o primeiro <b>SEEDER</b> for adicionado");
define("_btnotnotifyemail1s","Voc� configurou o servi�o para enviar-te email quando chegarem compartilhadores aos torrentes. Se n�o quiser mais receber mensagens");
define("_btaddcomment","Adicionar coment�rio");
define("_btnocommentsyet","Ainda n�o existem coment�rios para esta torrente");
define("_btnotnotifyemail1s","para ser notificado quando o primeiro SEEDER for adicionado");
define("_btdgavesresult","retornou um registro");
define("_btdnotifyemaildel","Voc� foi removido da lista de notifica��o de novos coment�rios");
define("_btdnotifyemaildel1","Voc� n�o ir� receber mais e-mails quando um coment�rio for adicionado");
define("_btdnotifyemailadd1","Voc� ir� receber um e-mail quando coment�rios forem adicionados, e voc� n�o ir� receber mais nenhum antes de ler o mesmo!");
define("_btdnotifyemailadd","Voc� foi adicionado para a lista de notifica��o de coment�rios");
define("_btdnotifyadd","Voc� foi adicionado para a lista de notifica��o de compartilhadores (seeders)");
define("_btdnotifyadd2","voc� ser� notificado de novos compartilhadores em no m�ximo 1 (um) email por dia!");
define("_btdnotifydel","Voc� foi removido da lista de notifica��o de novos compartilhadores e n�o receber� mais mensagens!");
define("_btddetails","Detalhes do torrente");
define("_bteditthistorrent","Editar este Torrente");
define("_btyes","sim");
define("_btno","n�o");
define("_btadded","Uploaded");
define("_btaddedby","Enviado por");
define("_bton","em");
define("_bthelpothersource","Ajuda de fontes alternativas");
define("_btfilename","Nome de arquivo");
define("_btpeers","Fontes");
define("_btpeerstot","Total de compartilhadores");
define("_bthelppeer","Ajuda de compartilhamento");
define("_btleechers","Pessoas baixando");
define("_btdhelpdownload","Ajuda de download");
define("_btyourate","Voc� votou");
define("_btupdatesource","Atualizar fontes agora!");
define("_btseeders","Alimentadores");
define("_btcomplyouvoted","You said this Torrent is: ");
define("_btcomplexplain","The Torrent will be banned when getting a number of complaints.");
define("_btcomplaintform","Torrent complaint form.<BR>This system, different from score rating, allows you to vote Torrents that not fit our rules.<BR>
Torrent that will get a number of complaint will be automatically banned by the system.<BR>Please send positive feedback on Torrents that are good and legal.<BR>");
define("_btcomplisay","This Torrent is ");
//Marker p means positive feedback, n means negative
define("_btcomplatthemoment","Right now users sent <b>**p**</b> positive feedbacks and <b>**n**</b> negative feedbacks<BR>");

//TESTI PRESENTI IN TAKEUPLOADURL.PHP
define("_btinseriti","Inserido");
define("_btand","e");
define("_btnumerror","o n�mero deles n�o � igual, e n�o foi poss�vel proceder com assimila��o bin�ria");
define("_btmaxchar","A URL ED2K deve ter no m�ximo 200 caracteres");
define("_bted2kstart","A URL n�o come�a com <b>ed2k://</b>");
define("_bt2par","A URL n�o tem o segundo par�metro: ");
define("_bturlfile","arquivo");
define("_bturlcontent","A URL n�o cont�m");
define("_btfname","nome de arquivo");
define("_bturlsize","A URL n�o cont�m");
define("_btsz","tamanho");
define("_btidcode","informa��es de hash");
define("_bturlparerror","A URL n�o tem o segundo par�metro: ");
define("_bturlsureerror","A URL cont�m uma fonte inv�lida");
define("_bturlnotinsert","� obrigat�rio um Link ED2K");
define("_btnotip","IP n�o especificado");
define("_btinvip","IP inv�lido");
define("_btnoport","Nenhuma porta especificada");
define("_btinvport","Porta inv�lida");
define("_btparmag","nenhum");
define("_btnopresent","n�o presente");
define("_btmagchar","O MagnetURL tem que ter no m�ximo 200 caracteres");
define("_bftminlimit","Voc� n�o pode compartilhar arquivos menores que");
define("_btfmaxlimit","O seu arquivo de torrente � muito grande !");
define("_btillegalword","As palavras chave do arquivo parecem demonstrar um arquivo ilegal.");
define("_btillegalwordinfo","Nosso portal usa um filtro especial de palavras-chave para prevenir a a��o de atividades ilegais. N�s sabemos que, mesmo que seu arquivo contenha palavras ilegais, ele ainda pode ser totalmente legal. Por favor, aceite nossas desculpas e tente fazer o upload de um arquivo um pouco diferente em nome.");
define("_bturlinserted1","Torrente enviado. Voc� ser� redirecionado em 3 segundos.<BR>Se voc� n�o for redirecionado, abra a p�gina");
define("_bturlinserted2","neste link");
define("_btnotify","Voc� foi adicionado para a lista de notifica��o: voc� ter� contatado por email em novos coment�rios.");
define("_btnolinkinsert","Nenhum link inserido");
define("_btexnostartwt","eXeem links start with exeem://");
define("_btillegalcat"," Illegal category!");

//TESTI PRESENTI IN UPLOAD.PHP
define("_btphotoext","A imagem n�o tem as extens�es GIF, JPG ou PNG");
define("_btalertmsg","O formul�rio n�o foi enviado pelos seguintes erros:");
define("_btalertmsg2","Por favor, volte, acerte os erros e tente novamente");
define("_btfnotselected","ERRO: arquivo nao selecionado");
define("_btalertdesc","Por favor, digite uma descri��o que indique o tipo de arquivo e qualidade, em particular no caso de arquivos multim�dia");
define("_btalertcat","Selecione uma categoria");
define("_btconferma","Voc� est� pronto para enviar o arquivo? Se o seu torrente � composto por mais arquivos, por favor, recrie-o como um \"multi-arquivos\" contendo toda a pasta, sen�o ele ser� inutiliz�vel, ou poderia gerar problemas para quem tentar baix�-lo.");
define("_btalerturl","Insira um link MAGNET ou ED2K");
define("_btalerturlnum1","link ED2K de n�mero");
define("_btalerturlnum2","enquanto links MAGNET s�o");
define("_btalerturlnum3","O n�mero de links deve ser o mesmo desde que Torrentes s�o feitos de pares de links");
define("_btalert5char","O nome do arquivo deve conter pelo menos 5 caracteres");
define("_btofficialurl","O trackers oficiais deste site s�o:");
define("_btseeded","Apenas envie Torrentes se voc� est� compartilhando os arquivos!!! Um torrente sem arquivos dispon�veis n�o ser� exibido na lista.");
define("_btupfile","Enviar arquivo:");
define("_bttorrentname","Nome do torrente");
define("_btfromtorrent","N�o se preocupe em n�o preencher o campo: ele ser� automaticamente preenchido a partir do arquivo.");
define("_btdescname","Teste fornecer um nome descritivo");
define("_btsrc_url","URL da fonte");
define("_btcompulsory"," (Compuls�rio)");
define("_btdescription","Descri��o de torrente (requerido)");
define("_btnohtml","SEM UTILIZAR HTML");
define("_btchooseone","Escolha");
define("_bttype","Tipo");
define("_btverduplicate","Por favor, verifique se j� n�o existem torrentes similares");
define("_btduplicatinfo","Se for detectado, o sistema ir� brecar o upload de torrentes que j� existirem. Desmarque apenas se voc� quiser faze o upload de qualquer maneira. Lembre-se que torrentes duplicadas apenas confundem usu�rios, ent�o � melhor termos apenas uma torrente de cada produto.");
define("_btupevidence","Evidencia");
define("_btupevidencinfo","Use com responsabilidade: use-o apenas quando o arquivo poder� ser considerado interessante para mais pessoas, e uma semente confi�vel est� presente (talvez 24/7 se poss�vel, por pelo menos uma semana...)");
define("_btowner","Dono");
define("_btowner1","Exibir usu�rio");
define("_btowner2","Modo privativo");
define("_btowner3","Modo invis�vel");
define("_btownerinfo","A op��o 'Exibir usu�rio' permite que outros visualizem seu nome de usu�rio, 'Modo privativo' o escondem, mas mant�m as fun��es de edi��o/exclus�o de torrentes pr�prias, 'Modo invis�vel' esconde completamente o dono do sistema, e n�o permite fun��es de edi��o/exclus�o pelos usu�rios.");
define("_btupnotify","Notificar");
define("_btupnotifynfo","Voc� receber� um email quando coment�rios forem adicionados");
define("_btfsend","Enviar torrente");
define("_btinserte2k","Inserir link ED2K");
define("_btmagnetinsert","Inserir link Magnet");
define("_btinsertlinktitle","Inserir links para as redes GNutella e eDonkey2000");
define("_btinsertlinktext","Voc� pode inserir um link eDonkey2000 para o seu Bit Torrent para envitar erros de tracker. Seus links ser�o ativados a menos que sejam falsos ou n�o rote�veis para nossa equipe");
define("_btinserttext2","Voc� pode inserir apenas links MAGNET ou ED2K. Se os dois campos estiverem preenchidos, dois ser�o associados a cada arquivo: Em outras palavras, o primeiro link ED2K e o primeiro MAGNET ser�o associados com o primeiro arquivo, e assim em diante... Ao criar listas de arquivos longas, existir�o mais arquivos prontos para download: este � um recurso muito interessante, �til quando voc� divide seus downloads em partes pequenas e voc� n�o utiliza o Shareaza (que identifica ambos os tipos de links).");
define("_bted2kurl","Inserir link ED2K");
define("_btsyntax","Como");
define("_btfiletype","extens�o");
define("_btfilesize","tamanho");
define("_btidcode","infohash");
define("_btipport","ip:porta");
define("_btstatic","indica apenas que estamos usando o protocolo eDonkey2000");
define("_btfinalname","� o nome do arquivo para downloads");
define("_btfinalsize","� o n�mero de bytes do arquivo");
define("_btfinalidcode","� um c�digo de verifica��o especial que permite encontrar apenas UM ARQUIVO, e suas c�pias, entre muitos similares");
define("_btfinalipport","representa a fonte mais est�vel (usada por releasers)");
define("_btor","ou");
define("_btaddmagnet","Adicionar link MAGNET");
define("_btadded2k","Adicionar link ED2K");
define("_bthelpupload","Precisa de ajuda? D� uma olhada no nosso <a href='modules.php?name=$name&file=upload_help'>tutorial</a>");
define("_btphoto","Imagem");

//TESTI CHE COMPAIONO IN ADDCOMMENT.PHP
define("_btiderror","ID Inv�lido");
define("_btnotfoundid","O torrente n�o existe");
define("_btaddcomment","Adicionar coment�rio para");
define("_btaddtime","Enviado ");
define("_btby","por");
define("_btsend","Enviar");

//TESTI CHE COMPAIONO IN DELETE.PHP
define("_btcannotdel","Imposs�vel deletar!");
define("_btmissingdata","Existem dados faltando!");
define("_btdeldenied","Apenas o dono ou o administrador do site podem deletar esta torrente");
define("_btnotconfirmed","Voc� deve estar certo do que est� prestes a fazer");
define("_btdeleted","Torrente exclu�da");
define("_btgoback","Voltar");


//TESTI CHE COMPAIONO IN DOWNLOAD.PHP
//LE PAROLE TRA "** **" SONO INDICATORI
define("_btantiscrocco","<p>Se voc� quiser continuar baixando voc� pode compartilhar outros **min_num** torrentes, contendo, cada uma, pelo menos **min_size** de dados e manter pelo menos um arquivo ativo e compartilhando. Lembre-se de usar um tracker externo e envie o arquivo aqui. Lembre-se que apenas arquivos legais s�o aceitos, e voc� n�o pode setar o modo Invis�vel de privacidade, ou o sistema n�o te reconhecer� como alimentador, e voc� deve ser capaz de moderar as permiss�es do arquivo. Apenas arquivos enviados por voc� podem ser contados entre as sementes. Este servidor sincroniza as Torrentes todas as horas.</p>");
define("_btnogratis","Voc� n�o pode viver para sempre de gra�a !");
define("_bttodayused","Hoje voc� usou");
define("_bttomorrow","Torrentes e n�o � poss�vel usar mais. Volte amanh� e lembre-se de que voc� pode usar no m�ximo **maxfile** torrentes por dia.</p>");
define("_btlantoday","Hoje voc� ou algu�m dentro de sua rede com o IP **ip** j� usou ");
define("_btlantomorrow"," Torrentes e n�o � poss�vel usar mais. Volte amanh� e lembre-se de que voc� pode usar no m�ximo **maxfile** torrentes por dia. Sabemos que LANs s�o penalizadas, mas temos que prevenir o abuso de banda.</p>");
define("_btthisweek","Esta semana voc� j� usou ");
define("_btnextweek"," Torrentes e n�o � poss�vel usar mais. Volte na pr�xima semana e lembre-se que voc� pode usar no m�ximo **max_num** torrentes semanais.</p>");
define("_btthisweeklan","Este semana, voc� ou algu�m que possuia o seu mesmo IP **ip** j� usou ");
define("_btnextweeklan"," Torrentes e n�o � poss�vel usar mais. Volte na pr�xima semana e lembre-se que voc� pode usar no m�ximo **max_num** torrentes semanais.</p>");
define("_btmsgbody1","O dono permitiu a voc� baixar os arquivos que ele est� compartilhando no Bit Torrent pela URL **nukeurl** , o qual voc� solicitou autoriza��o: ");
define("_btmsgbody2","De agora em diante voc� poder� baixar todos os arquivos do usu�rio. **nukeurl** protege sua privacidade.");
define("_btmsgsubject","Autoriza��o de acesso para arquivos Bit Torrent por **nukeurl**");
define("_btauthreqbody","O usu�rio **username** solicitou autoriza��o para visualizar um arquivo que voc� est� compartilhando no Bit Torrent em **nukeurl**: Para autoriz�-lo, v� para:\n\n   **nukeurl**/modules.php?name=$name&file=mytorrents&privacy=**userid**\n\n\nSe voc� quiser autorizar todas as autoriza��es pendentes clique aqui:\n\n$nukeurl/modules.php?name=$name&file=mytorrents&privacy=all\n\n\nVoc� n�o ir� receber mais e-mails no caso de permitir ou negar todas as autoriza��es pendentes.\nPara ver todos os usu�rios que est�o solicitando autoriza��o, clique:\n\n**nukeurl**/modules.php?name=$name&file=mytorrents\n\n\n**sname** protege sua privacidade, seu direito mais importante depois da Liberdade!");
define("_btautherrpending","Voc� j� solicitou a autoriza��o para este usu�rio. Enquanto ele n�o se decidir/autorizar o seu pedido, voc� n�o ser� capaz de solicitar mais arquivos. Existe um total de **tot** autoriza��o(�es) pendente(s).");
define("_bterrminseed","<li>Voc� precisa alimentar pelo menos <b>**min_share**</b> de dados.<br>");
define("_btruleok","Regra est� OK");
define("_btruleko","<b>ALERTA: Voc� n�o se enquadra nesta regra</b>. ");
define("_bterrnoseeder","<b>Voc� n�o est� compartilhando nada!</b>");
define("_bterrnotenoughshare1","<b>Voc� est� alimentando");
define("_bterrnotenoughshare2"," de dados, e precisa alimentar mais ");
define("_bterrtoosmall","<li>Voc� precisa alimentar pelo menos um arquivo de <b>**min_share**</b> de tamanho.<br>");
define("_bterrtoobig","<b>Seu maior arquivo compartilhado � ");
define("_bterrmaxnumnoseed", "<li>Voc� pode baixar um m�ximo de <b>**maxfile**</b> sem ser um compartilhador.<br> ");
define("_bterrmaxdownloadsize","<li>Voc� n�o pode mais baixar arquivos ap�s o limite de <b>**maxsize**</b>.<br>");
define("_btfinalerrmsg1","Neste instante, voc�, usando o IP <b>**ip**</b> (voc� � o �nico a ler isto) ou outros usu�rios dentro da sua LAN ultrapassaram o limite de downloads <b>livres</b> para este site!<br>Os limites do site s�o:<ol>");
define("_btfinalerrmsg2","</ol>Para continuar baixando <b>sem limita��es</b> voc� precisa cumprir as seguintes regras:<ol>");
define("_btfinalerrmsg3","</ol><p>Alimentar significa compartilhar <b>um arquivo 100% completo</b> especificando o seu arquivo completo como um alvo para o download (ele n�o ser� tocado pelo Bit Torrent).<br></p><p>Voc� pode tamb�m <a href='modules.php?name=**name**&file=upload'>ENVIAR</a> novas torrentes e execut�-las.</p><p>Voc� ainda poder� esperar pelo fim dos seus downloads atuais, que automaticamente se tornam sementes <i>\"seeds\"</i>, se voc� N�O FECHAR a sua janela de download.</p><p>Se voc� cumprir todas as pequenas regras, poder� baixar mais e mais novamente.</p>");
define("_bterrorprivate","Este � um arquivo privado: voc� j� pediu pela autoriza��o de download. Enquanto o dono ainda n�o aceitou seu pedido, voc� n�o poder� acessar o arquivo.");
define("_btrefused","O dono se recusou a permitir o seu acesso ao arquivo. Voc� n�o poder� enviar mais pedidos de autoriza��o para este usu�rio.");
define("_btreqsent","Um e-mail foi enviado para o dono da torrente, solicitando autoriza��oin para baixar o arquivo: voc� ser� notificado do resultado por e-mail.");

//TESTI CHE COMPAIONO IN EDIT.PHP
define("_btedittorrent","Editar a torrente \"");
define("_bterreditnoowner","<h1>Acesso Negado</h1>\n<p>Apenas o dono ou administradores podem modificar torrentes</p>\n");
define("_btbanned","Banido");
define("_btcancel","Cancelar");

//TESTI CHE COMPAIONO IN MYTORRENTS.PHP
define("_btallauthorized","Todos os usu�rios foram autorizados");
define("_btauthorized","O usu�rio selecionado foi autorizado");
define("_bthasauthorized","O dono da torrente te autorizou a baixar este arquivo");
define("_btnowcandownload","Voc� poder� agora baixar livremente todos os arquivos do usu�rio.\nN�s protegemos sua privacidade.");
define("_btauthmailsubj","Autoriza��o de acesso a arquivo - Bit Torrent");
define("_btauthorizationrequested","Os seguintes usu�rios solicitaram autoriza��o para baixar seus arquivos:");
define("_btnotorrents","N�o existem torrentes");
define("_btnotorrentuploaded","Voc� ainda n�o enviou nenhuma torrente");

//TESTI CHE COMPAIONO IN TAKECOMMENT.PHP
define("_btcommentkeyfound","O sistema checou as palavras do seu coment�rio. As seguintes palavras podem estar ligadas a atividades ilegais:<ol>");
define("_btcommentkeyfound2","</ol><p>N�s sabemos que o coment�rio pode ainda ser legal, pedimos desculpas pelo inconveniente e que use palavras diferentes. Este � um filtro autom�tico, e est� sujeito a alguns erros.</p>");
define("_btcommentinserted","Coment�rio inserido com sucesso, voc� ser� redirecionado em 3 segundos para a p�gina do Torrente.<br>Voc� poder� acessar a p�gina clicando <a href=\"modules.php?name=**name**&file=details&id=**id**&viewcomm=**newid**#comm**newid**\">aqui</a> se o redirecionamento falhar.");

//TESTI CHE COMPAIONO IN TAKEEDIT.PHP
define("_btmissingformdata","Faltam dados de entrada!");
define("_bteditfailed","Edi��o falhou");
define("_bteditdenied","Incapaz de editar Torrentes de outras pessoas.");
define("_btreturl","Arquivo editado com sucesso, voc� ser� redirecionado em 3 segundos para a p�gina do Torrente.<br>Voc� pode ver a p�gina clicando <a href=\"**returl**\">aqui</a> se o redirecionamente falhar");

//TESTI CHE COMPAIONO IN TAKERATE.PHP
define("_btratefailed","O voto falhou!");
define("_btinvalidrating","Voto inv�lido");
define("_btidnotorrent","ID inv�lido. O torrente n�o existe");
define("_btnovoteowntorrent","Voc� n�o pode votar em seus pr�prios Torrentes");
define("_btalreadyrated","Torrente j� avaliado");
define("_btvotedone","Voto bem sucedido ! Voc� ser� redirecionado em 3 segundos para a p�gina do Torrente.<br>Voc� pode ver a p�gina clicando <a href=\"modules.php?name=**name**&details.php&id=**id**&rated=1\">aqui</a> se o redirecionamente falhar");

//TESTI CHE COMPAIONO IN TAKEUPLOAD.PHP
define("_btuploadfailed","Falha no envio!");
define("_btemptyfname","Nome de arquivo em branco");
define("_btinvalidfname","Nome de arquivo inv�lido");
define("_btfnamenotorrent","Este n�o � um arquivo de Torrente (.torrent)");
define("_btferror","Erro de arquivo");
define("_bterrnofileupload","Erro fatal no arquivo.");
define("_btemptyfile","Arquivo vazio");
define("_btnobenc","Arquivo danificado. Tem certeza que ele � mesmo uma torrente?");
define("_btnodictionary","Dicion�rio de Torrente n�o presente");
define("_btdictionarymisskey","Chaves do dicion�rio de torrente ausentes");
define("_btdictionaryinventry","Dados inv�lidos dentro do dicion�rio de Torrentes");
define("_btdictionaryinvetype","Tipo de dados inv�lidos dentro do dicion�rio de Torrentes");
define("_btinvannounce","URL de an�ncio inv�lida. Precisa ser ");
define("_btactualannounce","Tracker especificado ");
define("_bttrackerdisabled","Nosso tracker foi desabilitado, <a href='modules.php?name=**name**&file=upload_help'>leia os tutoriais</a> para aprender a usar trackers externos");
define("_btinvpieces","Partes de torrente inv�lida");
define("_btmissinglength","Arquivos e tamanho ausentes");
define("_btnofilesintorrent","Arquivos de torrente ausentes");
define("_btfnamerror","Nome de arquivo inv�lido");
define("_btfilenamerror","Erro no nome do arquivo");
define("_bttorrenttoosmall","<p>Voc� n�o pode compartilhar um arquivo menor que <b>");
define("_bttorrenttoosmall2","</b></p><p>Seu torrente possui um arquivo de <b>");
define("_btmaxuploadexceeded","N�o � poss�vel enviar mais que **maxupload** a cada 24 horas.");
define("_btnumfileexceeded","<p>N�o � poss�vel enviar mais que <b>**maxupload**</b> arquivos a cada 24 horas.</p><p>At� o presente momento, voc� j� enviou <b>**rownum**</b> arquivos num total de <b>**totsize**</b> de tamanho");
define("_btsearchdupl","A busca resultou que estes arquivos podem corresponder aos que voc� est� compartilhando:<ol>");
define("_btduplinfo","<p>Se o seu arquivo est� nesta lista, por favor, alimente uma destas Torrentes!</p>");
define("_btsocktout","ERRO: Tempo limite de Socket expirou");
define("_bttrackernotresponding","O Tracker n�o est� respondendo.\n Voc� precisa checar o endere�o do tracker (SEM ESPA�OS DENTRO DE URLs) e se ele est� rodando. Tracker especificado:");
define("_bttrackerdata","Dados inv�lidos no tracker externo. Podem existir problemas neste servidor, favor tentar novamente mais tarde.");
define("_btuploadcomplete","Enviado com sucesso, voc� ser� redirecionado em 3 segundos para a p�gina do arquivo. Lembre-se de aliment�-lo ou o Torrente n�o ser� visualizado na p�gina principal!<br>Voc� pode visualizar a p�gina clicando <a href=\"**url**\">aqui</a> se o redirecionamento falhar");

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
