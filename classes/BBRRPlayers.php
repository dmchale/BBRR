<?php
class BBRRPlayers {

    public static function getPlayer( $playerid ) {

        $playerDefinitions[0]     = "";      
        $playerDefinitions[1]     = "";      
        $playerDefinitions[2]     = "";      
        $playerDefinitions[3]     = "";      
        $playerDefinitions[4]     = "";      
        $playerDefinitions[5]     = "";      
        $playerDefinitions[6]     = "";      
        $playerDefinitions[7]     = "";      
        $playerDefinitions[8]     = "";      
        $playerDefinitions[9]     = "";      
        $playerDefinitions[10]     = "";      
        $playerDefinitions[11]     = "";      
        $playerDefinitions[12]     = "";      
        $playerDefinitions[13]     = "";      
        $playerDefinitions[14]     = "";      
        $playerDefinitions[15]     = "";      
        $playerDefinitions[16]     = "";      
        $playerDefinitions[17]     = "";      
        $playerDefinitions[18]     = "";      
        $playerDefinitions[19]     = "";      
        $playerDefinitions[20]     = "";      
        $playerDefinitions[21]     = "";      
        $playerDefinitions[22]     = "";      
        $playerDefinitions[23]     = "";      
        $playerDefinitions[24]     = "";      
        $playerDefinitions[25]     = "";      
        $playerDefinitions[26]     = "";      
        $playerDefinitions[27]     = "";      
        $playerDefinitions[28]     = "";      
        $playerDefinitions[29]     = "";      
        $playerDefinitions[30]     = "";      
        $playerDefinitions[31]     = "";      
        $playerDefinitions[32]     = "";      
        $playerDefinitions[33]     = "";      
        $playerDefinitions[34]     = "";      
        $playerDefinitions[35]     = "";      
        $playerDefinitions[36]     = "";      
        $playerDefinitions[37]     = "";      
        $playerDefinitions[38]     = "";      
        $playerDefinitions[39]     = "";      
        $playerDefinitions[40]     = "";      
        $playerDefinitions[41]     = "";      
        $playerDefinitions[42]     = "";      
        $playerDefinitions[43]     = "";      
        $playerDefinitions[44]     = "";      
        $playerDefinitions[45]     = "";      
        $playerDefinitions[46]     = "";

	//DARK ELF      
        $playerDefinitions[47]     = "Lineman";      
        $playerDefinitions[48]     = "";      
        $playerDefinitions[49]     = "";      
        $playerDefinitions[50]     = "Blitzer";      
        $playerDefinitions[51]     = "Runner";      
        $playerDefinitions[52]     = "";      
        $playerDefinitions[53]     = "";      
        $playerDefinitions[54]     = "";      
        $playerDefinitions[55]     = "";      
        $playerDefinitions[56]     = "";      
        $playerDefinitions[57]     = "";      
        $playerDefinitions[58]     = "";      
        $playerDefinitions[59]     = "";      
        $playerDefinitions[60]     = "";      
        $playerDefinitions[61]     = "";      
        $playerDefinitions[62]     = "";      
        $playerDefinitions[63]     = "";
        $playerDefinitions[64]     = "";
        $playerDefinitions[65]     = "";
        $playerDefinitions[66]     = "";
        $playerDefinitions[67]     = "";
	//AMAZON
        $playerDefinitions[68]     = "Linewoman";
        $playerDefinitions[69]     = "Thrower";
        $playerDefinitions[70]     = "Catcher";
        $playerDefinitions[71]     = "Blitzer";
        $playerDefinitions[72]     = "";
        $playerDefinitions[73]     = "";
        $playerDefinitions[74]     = "";
        $playerDefinitions[75]     = "";


        // Remember this is 0-indexed!
        if ( (int)$playerid >= 0 && (int)$playerid < count( $playerDefinitions ) )
            return $playerDefinitions[$playerid];
        else
            return "Unknown player";

    }

}
