<?php
function showReplayDropdown() {
    echo "<form action='' method='post' onchange='this.submit()'>\n";
    echo "<select name='replayFile'>\n";
    echo "<option value=''></option>\n";

    $arrFiles = scandir("replays");
    foreach ($arrFiles as $file) {
        if ( strrchr($file, '.') == ".sqlite" ||
	     strrchr($file, '.') == ".db" ) {
            $selected = "";
            if ($_REQUEST["replayFile"] == $file)
                $selected = "selected";
            echo "<option value='$file' $selected>$file</option>\n";
        }
    }

    echo "</select>";
}

function showLogFileDropdown() {
    echo "<form action='' method='post' onchange='this.submit()'>\n";
    echo "<select name='logFile'>\n";
    echo "<option value=''></option>\n";

    $arrFiles = scandir("replays");
    foreach ($arrFiles as $file) {
        if ( strrchr($file, '.') == ".log" ) {
            $selected = "";
            if ($_REQUEST["replayFile"] == $file)
                $selected = "selected";
            echo "<option value='$file' $selected>$file</option>\n";
        }
    }

    echo "</select>";
    echo "</form>";
}

/**
 * Returns the 3-letter shorthand for the team who should be credited with the block dice
 *
 * @param $lastLine
 * @returns string
 */
function getTeamFromThrownBlockDice( $lastLine ) {
    $shorthand = substr( $lastLine, 19, 3 );    // Pulls only the 3-character shortcode for the team
    return $shorthand;
}

/**
 * Used to trap and store the block dice results so we can see what type of rolls each team got
 *
 * @param $line
 * @param $lastLine
 */
function trackBlockDice( $line, $lastLine ) {
    global $arrTeams;

    $team = getTeamFromThrownBlockDice( $lastLine );

    // Track individual dice thrown
    $arrDice = explode( " - ", $line );
    foreach ( $arrDice as $die ) {
        $dieResult = strtolower( str_replace( "]", "", str_replace( "[", "", trim($die) ) ) );
        $arrTeams[$team][$dieResult] += 1;
    }

    // Gather extra stats. Just DS's and DP's for now
    if ( strtolower( trim( $line ) ) == "[attacker down] - [attacker down]" )
        $arrTeams[$team]["double skulls"] += 1;
    elseif ( strtolower( trim( $line ) ) == "[defender down] - [defender down]" )
        $arrTeams[$team]["double pows"] += 1;

}


// | | GameLog(06): Nihilistic Mystics(NIH) vs Big Enough For Your Mom(ENO)
function getTeam1FromTeamDeclaration( $line ) {
    global $arrTeams;

    $tmpString = substr( $line, 18 );                                       // Trim ` | | GameLog(06): ` off the beginning
    $tmpString = substr( $tmpString, 0, strpos( $tmpString, " vs " ) );     // Get everything up to "vs"

    $teamName = substr( $tmpString, 0, strlen( $tmpString ) - 5 );          // Trim off the `(NNN)` at the end
    $teamShorthand = substr( $tmpString, strlen( $tmpString ) - 4, 3);      // Get NNN from inside of `(NNN)`

    $arrTeams[$teamShorthand]["Name"] = $teamName;

    return $teamShorthand;
}

// | | GameLog(06): Nihilistic Mystics(NIH) vs Big Enough For Your Mom(ENO)
function getTeam2FromTeamDeclaration( $line ) {
    global $arrTeams;

    $tmpString = trim( strrev( substr( strrev( $line ), 0, strpos( strrev( $line ), " sv " ) ) ) );     // Get everything after " vs "

    $teamName = substr( $tmpString, 0, strlen( $tmpString ) - 5 );          // Trim off the `(NNN)` at the end
    $teamShorthand = substr( $tmpString, strlen( $tmpString ) - 4, 3);      // Get NNN from inside of `(NNN)`

    $arrTeams[$teamShorthand]["Name"] = $teamName;

    return $teamShorthand;
}

function isTeamVsTeamDeclaration( $line ) {
    if ( substr( $line, 0, 17 ) == " |  | GameLog(06)" && strpos( $line, " vs ") )
        return true;
    else
        return false;
}

function isGameLog( $line ) {
    if ( substr( $line, 0, 14 ) == " |  | GameLog(" )
        return true;
    else
        return false;
}

function isChat( $line ) {
    if ( substr( $line, 0, 11 ) == " |  | Chat:" )
        return true;
    else
        return false;
}

function isBlockResult( $line ) {
    if ( substr( $line, 0, 1 ) == "[" )
        return true;
    else
        return false;
}

function initializeBlockDiceStats($team1, $team2) {
    global $arrTeams;

    $arrTeams[$team1]["attacker down"] = 0;
    $arrTeams[$team1]["both down"] = 0;
    $arrTeams[$team1]["pushed"] = 0;
    $arrTeams[$team1]["defender stumbles"] = 0;
    $arrTeams[$team1]["defender down"] = 0;
    $arrTeams[$team1]["double skulls"] = 0;
    $arrTeams[$team1]["double pows"] = 0;

    $arrTeams[$team2]["attacker down"] = 0;
    $arrTeams[$team2]["both down"] = 0;
    $arrTeams[$team2]["pushed"] = 0;
    $arrTeams[$team2]["defender stumbles"] = 0;
    $arrTeams[$team2]["defender down"] = 0;
    $arrTeams[$team2]["double skulls"] = 0;
    $arrTeams[$team2]["double pows"] = 0;
}
