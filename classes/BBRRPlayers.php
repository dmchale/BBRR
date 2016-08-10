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
        $playerDefinitions[36]     = "Champion Garshnak";      
        $playerDefinitions[37]     = "Champion Griff";      
        $playerDefinitions[38]     = "Champion Grim";      
        $playerDefinitions[39]     = "Champion HeadSpliter";      
        $playerDefinitions[40]     = "Champion Jordell";      
        $playerDefinitions[41]     = "Champion Ripper";      
        $playerDefinitions[42]     = "Champion Slibli";      
        $playerDefinitions[43]     = "Champion Varag";      
        $playerDefinitions[44]     = "";      
        $playerDefinitions[45]     = "";      
        $playerDefinitions[46]     = "";

	//DARK ELF      
        $playerDefinitions[47]     = "Lineman";      
        $playerDefinitions[48]     = "";      
        $playerDefinitions[49]     = "";      
        $playerDefinitions[50]     = "Blitzer";      
        $playerDefinitions[51]     = "Witch Elf";      
        $playerDefinitions[52]     = "Champion Horkon";      
        $playerDefinitions[53]     = "Champion Morg";      
        $playerDefinitions[54]     = "";      
        $playerDefinitions[55]     = "";      
        $playerDefinitions[56]     = "";      
        $playerDefinitions[57]     = "";      
        $playerDefinitions[58]     = "";      
        $playerDefinitions[59]     = "Champion Count Luthor con Drakenborg";
	//HALFLING      
        $playerDefinitions[60]     = "Halfling";      
        $playerDefinitions[61]     = "Treeman";      
	//NORSE
        $playerDefinitions[62]     = "Linemen";  //SEEMS TO line up to order in purchase screen    
        $playerDefinitions[63]     = "Thrower"; //throw
        $playerDefinitions[64]     = "Runner"; //runner
        $playerDefinitions[65]     = "Berzerkers";
        $playerDefinitions[66]     = "Werewolves";
        $playerDefinitions[67]     = ""; //yhetee
	//AMAZON
        $playerDefinitions[68]     = "Linewoman";
        $playerDefinitions[69]     = "Thrower";
        $playerDefinitions[70]     = "Catcher";
        $playerDefinitions[71]     = "Blitzer";
        $playerDefinitions[72]     = "";
        $playerDefinitions[73]     = "";
        $playerDefinitions[74]     = "";
        $playerDefinitions[75]     = "";
        $playerDefinitions[76]     = "";
        $playerDefinitions[77]     = "";
        $playerDefinitions[78]     = "";
        $playerDefinitions[79]     = "";
        $playerDefinitions[80]     = "";
        $playerDefinitions[81]     = "";
        $playerDefinitions[82]     = "";
        $playerDefinitions[83]     = "";
        $playerDefinitions[84]     = "";
        $playerDefinitions[85]     = "";
        $playerDefinitions[86]     = "";
        $playerDefinitions[87]     = "";
        $playerDefinitions[88]     = "";
        $playerDefinitions[89]     = "";
        $playerDefinitions[90]     = "";
        $playerDefinitions[91]     = "";
        $playerDefinitions[92]     = "";
        $playerDefinitions[93]     = "";
        $playerDefinitions[94]     = "";
        $playerDefinitions[95]     = "";
        $playerDefinitions[96]     = "";
        $playerDefinitions[97]     = "";
        $playerDefinitions[98]     = "";
        $playerDefinitions[99]     = "Champion Zara";
        $playerDefinitions[100]     = "Champion Scrappa";
        $playerDefinitions[101]     = "Champion Eldril";
        $playerDefinitions[102]     = "Champion Borak";
        $playerDefinitions[103]     = "Champion Deeproot Strongbranch"; //Deeproot Strongbranch
        $playerDefinitions[104]     = "Champion Nekbrekerekh";
        $playerDefinitions[105]     = "Champion Ramtut";
        $playerDefinitions[106]     = "Champion Hammerblow";
        $playerDefinitions[107]     = "";
        $playerDefinitions[108]     = "";
        $playerDefinitions[109]     = "";
        $playerDefinitions[110]     = "";
        $playerDefinitions[111]     = "";
        $playerDefinitions[112]     = "";
        $playerDefinitions[113]     = "";
        $playerDefinitions[114]     = "";
        $playerDefinitions[115]     = "";
        $playerDefinitions[116]     = "";
        $playerDefinitions[117]     = "";
        $playerDefinitions[118]     = "";
        $playerDefinitions[119]     = "";
        $playerDefinitions[120]     = "";
        $playerDefinitions[121]     = "";
        $playerDefinitions[122]     = "";
        $playerDefinitions[123]     = "";
        $playerDefinitions[124]     = "";
        $playerDefinitions[125]     = "";
        $playerDefinitions[126]     = "";
        $playerDefinitions[127]     = "";
        $playerDefinitions[128]     = "";
        $playerDefinitions[129]     = "";
        $playerDefinitions[130]     = "";
        $playerDefinitions[131]     = "";
        $playerDefinitions[132]     = "";
        $playerDefinitions[133]     = "Champion Bomber Dribblesnot";
        $playerDefinitions[134]     = "Champion Zzharg Madeye";
        $playerDefinitions[135]     = "";


        // Remember this is 0-indexed!
        if ( (int)$playerid >= 0 && (int)$playerid < count( $playerDefinitions ) )
            return $playerDefinitions[$playerid];
        else
            return "Unknown player";

    }

}
