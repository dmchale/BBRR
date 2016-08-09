<?php
require_once("classes/global_class_include.php");
require_once("inc/functions.php");
echo '<link href="css/tables.css" rel="stylesheet">';
echo '<a href="/BBRR/">Home</a>';

showReplayDropdown();

if ( isset( $_REQUEST["replayFile"] ) ) {

    $myDB = new SQLiteDB( "replays/" . $_REQUEST["replayFile"] );
    if ( isset( $myDB->error ) )
        die( $myDB->error );

    showTeamData( "Home" );
    showTeamData( "Away" );

}

/******************************************************************************************
 ******************************************************************************************
 ******************************************************************************************
 ******************************************************************************************
 */

/**
 * @param string $strTeamType
 */
function showTeamData( $strTeamType = "Home" )
{
    global $myDB;

    echo "<h3>$strTeamType team</h3>";

//    $query = "SELECT ID, strName, idRaces, idPlayer_Types, iNumber, idPlayer_Levels, iExperience, iValue FROM " . $strTeamType . "_Player_Listing";
    $query = "SELECT ID, strName, idRaces, idPlayer_Types, iNumber, idPlayer_Levels, iExperience, Characteristics_fMovementAllowance, Characteristics_fStrength, Characteristics_fAgility, Characteristics_fArmourValue, iValue FROM " . $strTeamType . "_Player_Listing";
    $result = $myDB->query( $query );

    if ( ! $result ) {
        echo "Empty result";
        return;
    }

    $arrResult = $result->fetchAll();
    $strTeamRace = BBRRTeam::getTeamRace( $arrResult[0]["idRaces"] );
//    $strPosition = BBRRPlayers::getPlayer ($arrResult[0]["idPlayer_Types"] );


//        echo " Number : <strong>Race</strong>: Position : Name : PlayerMA : PlayerSTR : PlayerAG : PlayerAV<br>";

echo '<table cellpadding="0" cellspacing="0" class="db-table">';
echo '<tr><th>Number</th><th>Race</th><th>Position</th><th>Name</th><th>MA<th>STR</th><th>AG</th><th>AV</th><th>Level</th><th>SPP</th><th>Value</th></tr>';

    foreach ( $arrResult as $row ) {
	echo '<tr>';
        $intPlayerNumber = $row["iNumber"];
	echo '<td>',$intPlayerNumber,'</td>';

        $intPlayerID   = $row["ID"];
	
	echo '<td>',$strTeamRace,'</td>';

	$strPosition   = BBRRPlayers::getPlayer ($row["idPlayer_Types"] );
	echo '<td>',$strPosition,'</td>';

        $strName        = $row["strName"];	
	echo '<td>',$strName,'</td>';

        $intPlayerMA  = $row["Characteristics_fMovementAllowance"];
	echo '<td>',$intPlayerMA,'</td>';
        $intPlayerSTR  = $row["Characteristics_fStrength"];
	echo '<td>',$intPlayerSTR,'</td>';
        $intPlayerAG  = $row["Characteristics_fAgility"];
	echo '<td>',$intPlayerAG,'</td>';
        $intPlayerAV  = $row["Characteristics_fArmourValue"];
	echo '<td>',$intPlayerAV,'</td>';

        $intPlayerLevel  = $row["idPlayer_Levels"];
	echo '<td>',$intPlayerLevel,'</td>';

        $intPlayerSPP  = $row["iExperience"];
	echo '<td>',$intPlayerSPP,'</td>';

        $intPlayerValue  = $row["iValue"];
	echo '<td>',$intPlayerValue,'</td>';

        //echo " $intPlayerNumber : <strong>$strTeamRace</strong>: $strPosition : $strName : $intPlayerMA : $intPlayerSTR : $intPlayerAG : $intPlayerAV<br>";

	echo '</tr>';
    }
echo '</table><br />';

}
