<?php

    function getStats($criterio)
    {

        $server = "servername";
        $user = "username";
        $pass = "pass";
        $dbname = "dbname";
        
        $tableName = "tableName";
        $conn = mysqli_connect($server,$user,$pass,$dbname);

        if(!$conn) die("failed to connect");
    

        sm($chatID,"The following data is NOT up to date, this is only a test!");
        
        $toSend = "";
        $index = 1;

        if($criterio = "price_usd"){

            $query = "SELECT `name`,`symbol`,`price_usd`,`price_eur`,`percent_change_24h` FROM `$tableName` ORDER BY `$tableName`.`$criterio` DESC LIMIT 10;";
            echo $query;
            $result = mysqli_query($conn,$query);

            if(!$result) die("failed to retrieve data");

            while($row = $result->fetch_assoc()){

                $nome = $row['name'];
                $sigla = $row['symbol'];
                $prezzoUSD = $row['price_usd'];
                $prezzoEUR = $row['price_eur'];
                $percentuale = $row['percent_change_24h'];

                $toSend = $toSend."#".$index." $nome ($sigla)\nPercent change in 24h: $percentuale\nPrice (USD): $prezzoUSD\nPrice (EUR): $prezzoEUR\n\n";

                $index++;

        }

        }
        else if($criterio = "volume"){

            $query = "SELECT `name`,`symbol`,`volume` FROM `$tableName` ORDER BY `$tableName`.`$criterio` DESC LIMIT 10;";
            echo $query;
            $result = mysqli_query($conn,$query);

            if(!$result) die("failed to retrieve data");

            while($row = $result->fetch_assoc()){

                $nome = $row['name'];
                $sigla = $row['symbol'];
                $volume = $row['volume'];

                $toSend = $toSend."#".$index." $nome ($sigla)\nVolume: $volume\n";

                $index++;

        }

        }

        
        sm($chatID,$toSend);
    }
?>