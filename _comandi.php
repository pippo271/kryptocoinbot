<?php
//Importo file array.php che utilizzerò per creare i bottoni Telegram
require 'array.php';

//Controllo del messaggio per avviare la scelta multilingua

if($msg == "/start")
{
  //Funzione che permette la creazione dei bottnoni Telegram
  sm($chatID, "⚠️ THE BOT IS CURRENTLY IN DEVELOPMENT ⚠️\n\nWelcome on **KryptoCoin** BOT.\n \n__Version 0.1a__\n \nFirst of all, select your language:", $select, 'Markdown', false, false, true);
}

//Avvio del menu del bot

switch($msg)
{
case "lan_english":
      sm($chatID, "Home", $menu, 'Markdown', false, false, true);
      break;
case "lan_italian":
      sm($chatID, "Home", $menu, 'Markdown', false, false, true);
      break;
case "lan_spanish":
      sm($chatID, "Home", $menu, 'Markdown', false, false, true);
      break;
case "lan_french":
      sm($chatID, "Home", $menu, 'Markdown', false, false, true);
      break;
case "lan_russian":
      sm($chatID, "Home", $menu, 'Markdown', false, false, true);
      break;
case "lan_arabic":
      sm($chatID, "Home", $menu, 'Markdown', false, false, true);
      break;
}

//Avvio delle impostazioni del bot 

if($msg == "/settings"){
      
      sm($chatID, "l", $buttons, 'Markdown', false, false, true);      
}

if($msg == "/statistics"){

	require("statsCoin.php");

}





