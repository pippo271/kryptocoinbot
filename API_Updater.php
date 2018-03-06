<?php

    //questo script aggiorna il database con le API di coinmarket

    //ottengo le api in json
    $api = file_get_contents("https://api.coinmarketcap.com/v1/ticker/?convert=EUR&limit=0");
    //converto l'oggetto json in un array
    $api = json_decode($api,TRUE);
    //print_r($api);

    //parametri di connessione
    $servername = "localhost";
	$username = "user";
	$password = "";
    $dbname = "dbname";

    $table = "API";

    //eseguo la connessione
    $conn = mysqli_connect($servername,$username,$password,$dbname);
    
    //controllo la validità della connessione
    if(!$conn) die("Connessione col db non riuscita");

	//elimino i dati vecchi
    $query = "TRUNCATE TABLE ".$table;
    if (!mysqli_query($conn, $query)) die("non sono riuscito a ripulire la tabella!");
    
    //per ogni moneta inseriamo il record nel db
    for($i = 0; $i < count($api); $i++){
        $query = "INSERT INTO ".$table."(id,name,symbol,rank,price_usd,price_btc,24h_volume_usd,
                                        market_cap_usd,available_supply,total_supply,max_supply,
                                        percent_change_1h,percent_change_24h,percent_change_7d,
                                        last_updated,price_eur,24h_volume_eur,market_cap_eur) VALUES (";
        
        $query = $query .'"'.$api[$i]['id'].'","'.$api[$i]['name'].'","'.$api[$i]['symbol'].'","'.$api[$i]['rank'].'","';
        $query = $query.$api[$i]['price_usd'].'","'.$api[$i]['price_btc'].'","'.$api[$i]['24h_volume_usd'].'","'.$api[$i]['market_cap_usd'].'","';
        $query = $query.$api[$i]['available_supply'].'","'.$api[$i]['total_supply'].'","'.$api[$i]['max_supply'].'","'.$api[$i]['percent_change_1h'].'","';
        $query = $query.$api[$i]['percent_change_24h'].'","'.$api[$i]['percent_change_7d'].'","'.$api[$i]['last_updated'].'","'.$api[$i]['price_eur'].'","';
        $query = $query.$api[$i]['24h_volume_eur'].'","'.$api[$i]['market_cap_eur'].'");';
        
        //echo "\n".$query;
        if (!mysqli_query($conn, $query)) echo "errore: ".mysqli_error();

    }
?>
