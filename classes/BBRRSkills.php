<?php
class BBRRSkills {

    public static function getSkill( $idSkill ) {

        $skillDefinitions[0]     = "";      
        $skillDefinitions[1]     = "Strip Ball";      
        $skillDefinitions[2]     = "";      
        $skillDefinitions[3]     = "";      
        $skillDefinitions[4]     = "";      
        $skillDefinitions[5]     = "";      
        $skillDefinitions[6]     = "Catch";      
        $skillDefinitions[7]     = "Dodge";      
        $skillDefinitions[8]     = "Sprint";      
        $skillDefinitions[9]     = "Pass Block";      
        $skillDefinitions[10]     = "";      
        $skillDefinitions[11]     = "Leap";      
        $skillDefinitions[12]     = "";      
        $skillDefinitions[13]     = "Mighty Blow";      
        $skillDefinitions[14]     = "";      
        $skillDefinitions[15]     = "Horns";      
        $skillDefinitions[16]     = "";      
        $skillDefinitions[17]     = "Stand Firm";      
        $skillDefinitions[18]     = "";      
        $skillDefinitions[19]     = "Regeneration";      
        $skillDefinitions[20]     = "Take Root";      
        $skillDefinitions[21]     = "Accurate";      
        $skillDefinitions[22]     = "Break Tackle";      
        $skillDefinitions[23]     = "";      
        $skillDefinitions[24]     = "";      
        $skillDefinitions[25]     = "";      
        $skillDefinitions[26]     = "Dauntless";      
        $skillDefinitions[27]     = "Dirty Player";      
        $skillDefinitions[28]     = "Diving Catch";      
        $skillDefinitions[29]     = "";      
        $skillDefinitions[30]     = "Block";      
        $skillDefinitions[31]     = "";      
        $skillDefinitions[32]     = "Very Long Legs";      
        $skillDefinitions[33]     = "Disturbing Presence";      
        $skillDefinitions[34]     = "";      
        $skillDefinitions[35]     = "Fend";      
        $skillDefinitions[36]     = "Frenzy";      
        $skillDefinitions[37]     = "Grab";      
        $skillDefinitions[38]     = "Guard";      
        $skillDefinitions[39]     = "Hail Mary Pass";      
        $skillDefinitions[40]     = "Juggernaut";      
        $skillDefinitions[41]     = "Jump Up";      
        $skillDefinitions[42]     = "";      
        $skillDefinitions[43]     = "";      
        $skillDefinitions[44]     = "Loner";      
        $skillDefinitions[45]     = "Nerves of Steel";      
        $skillDefinitions[46]     = "";
        $skillDefinitions[47]     = "Pass";      
        $skillDefinitions[48]     = "";      
        $skillDefinitions[49]     = "Prehensile Tail";      
        $skillDefinitions[50]     = "";      
        $skillDefinitions[51]     = "";      
        $skillDefinitions[52]     = "Right Stuff";      
        $skillDefinitions[53]     = "";      
        $skillDefinitions[54]     = "Secret Weapon";      
        $skillDefinitions[55]     = "";      
        $skillDefinitions[56]     = "Side Step";      
        $skillDefinitions[57]     = "Tackle";      
        $skillDefinitions[58]     = "Strong Arm";      
        $skillDefinitions[59]     = "Stunty";      
        $skillDefinitions[60]     = "Sure Feet";      
        $skillDefinitions[61]     = "";      
        $skillDefinitions[62]     = "";      
        $skillDefinitions[63]     = "Thick Skull";
        $skillDefinitions[64]     = "Throw Teammate";
        $skillDefinitions[65]     = "";
        $skillDefinitions[66]     = "";
        $skillDefinitions[67]     = "Wild Animal";
        $skillDefinitions[68]     = "Wrestle";
        $skillDefinitions[69]     = "";
        $skillDefinitions[70]     = "Multiple Block";
        $skillDefinitions[71]     = "";
        $skillDefinitions[72]     = "";
        $skillDefinitions[73]     = "";
        $skillDefinitions[74]     = "";
        $skillDefinitions[75]     = "Claws";
        $skillDefinitions[76]     = "";
        $skillDefinitions[77]     = "Stab";
        $skillDefinitions[78]     = "Hyptnotic Gaze";
        $skillDefinitions[79]     = "Stakes";
        $skillDefinitions[80]     = "Bombardier";

        // Remember this is 0-indexed!
        if ( (int)$idSkill >= 0 && (int)$idSkill < count( $skillDefinitions ) )
            return $skillDefinitions[$idSkill];
        else
            return "Unknown skill";

    }

}
