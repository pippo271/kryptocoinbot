<?php
//Array copntenente le stringhe per la 
//scelta multilingua del bot
$select[] = array(
    array(
        "text" => "English 🇬🇧",
        "callback_data" => "lan_english"),
    array(
        "text" => "Italiano 🇮🇹",
        "callback_data" => "lan_italian"),
        );
    $select[]=array(
    array(
        "text" => "Español 🇪🇸",
        "callback_data" => "lan_spanish"),
    array(
        "text" => "François 🇫🇷",
        "callback_data" => "lan_french"),
    );
    $select[]=array(
    array(
        "text" => "Русский 🇷🇺",
        "callback_data" => "lan_russian"),
    array(
        "text" => "🇦🇪 العَرَبِيَّة",
        "callback_data" => "lan_arabic"),
    );

//Array copntenente le stringhe per la 
//Home del bot
$menu[] = array(
    array(
          "text" => "Statistiche monete",
          "callback_data" => "/statistics"),
    array(
          "text" => "Calendario ICO",
          "callback_data" => "/calendar"),
         );
$menu[] = array(
    array(
          "text" => "Convertitore",
          "callback_data" => "/converter"),
    array(
          "text" => "Impostazioni",
          "callback_data" => "/settings"),
         );
$menu[] = array(
    array(
          "text" => "Contattaci",
          "callback_data" => "/feedback"),
          );

//Array copntenente le stringhe per le 
//impostazioni del bot
$buttons[] = array(
    array(
        "text" => "Change Language",
        "callback_data" => "/test3"),
    array(
        "text" => "Edit Coin Section",
        "callback_data" => "/test3"),
        );
$buttons[] = array(
    array(
        "text" => "Edit Notification",
        "callback_data" => "/test3")
        );
//Array copntenente le stringhe per le 
//impostazioni del bot
$statisticMenu[] = array(
    array(
        "text" => "Ranking for value",
        "callback_data" => "/test3"),
    array(
        "text" => "Ranking for volume",
        "callback_data" => "/test3"),
        );
$statisticMenu[] = array(
    array(
        "text" => "Tranding gainers 24h",
        "callback_data" => "/test3"),
    array(
        "text" => "Tranding losers 24h",
        "callback_data" => "/test3"),
        );