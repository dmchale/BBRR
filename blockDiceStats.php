<?php
require_once("classes/global_class_include.php");
require_once("inc/functions.php");
echo '<a href="/BBRR/">Home</a>';


showLogFileDropdown();

if ( isset( $_REQUEST["logFile"] ) ) {

    $arrLog = file( "replays/" . $_REQUEST["logFile"] );
    $arrTeams;

    showBlockDice();

}

/******************************************************************************************
 ******************************************************************************************
 ******************************************************************************************
 ******************************************************************************************
 */

/**
 *
 */
function showBlockDice()
{
    echo "<h3>Block Dice</h3>";

    putDiceStatsInTeamObject();

    printDiceStats();

}

function putDiceStatsInTeamObject()
{
    global $arrLog;
    $lastLine = "";

    $foundTeams = false;

    foreach ($arrLog as $line) {

        if ((!$foundTeams) && isTeamVsTeamDeclaration($line)) {
            $team1 = getTeam1FromTeamDeclaration($line);
            $team2 = getTeam2FromTeamDeclaration($line);

            initializeBlockDiceStats($team1, $team2);

            $foundTeams = true;

        } elseif (isBlockResult($line)) {
            trackBlockDice($line, $lastLine);
        }
        $lastLine = $line;
    }
}

function printDiceStats()
{
    global $arrTeams;

    // Now display the block dice data from the teams array
    foreach ($arrTeams as $team) {

        $totalDice          = $team["attacker down"] + $team["both down"] + $team["pushed"] + $team["defender stumbles"] + $team["defender down"];

        $skullAvg           = round($totalDice / 6, 2);
        $bothDownAvg        = round($totalDice / 6, 2);
        $pushedAvg          = round($totalDice / 3, 2);     // Remember there are 2x as many chances to roll a Push
        $powBangAvg         = round($totalDice / 6, 2);
        $powAvg             = round($totalDice / 6, 2);

        $skullClass         = getCSSColor( $team["attacker down"], $skullAvg, "green", "red" );
        $bothDownClass      = getCSSColor( $team["both down"], $bothDownAvg, "green", "red" );
        $pushedClass        = getCSSColor( $team["pushed"], $pushedAvg, "green", "red" );
        $powBangClass       = getCSSColor( $team["defender stumbles"], $powBangAvg, "green", "red" );
        $powClass           = getCSSColor( $team["defender down"], $powAvg, "green", "red" );
        $doubleSkullsClass  = getCSSColor( $team["double skulls"], 1, "red", "green" );
        $doublePowsClass    = getCSSColor( $team["double pows"], 1, "green", "black" );

        echo "<h3>" . $team["Name"] . "</h3>";
        echo "<ul>";
        echo "<li style=\"color:" . $skullClass . "\">Attacker Down: " . $team["attacker down"] . " (avg " . $skullAvg . ")</li>";
        echo "<li style=\"color:" . $bothDownClass . "\">Both Down: " . $team["both down"] . " (avg " . $bothDownAvg . ")</li>";
        echo "<li style=\"color:" . $pushedClass . "\">Pushed: " . $team["pushed"] . " (avg " . $pushedAvg . ")</li>";
        echo "<li style=\"color:" . $powBangClass . "\">Defender Stumbles: " . $team["defender stumbles"] . " (avg " . $powBangAvg . ")</li>";
        echo "<li style=\"color:" . $powClass . "\">Defender Down: " . $team["defender down"] . " (avg " . $powAvg . ")</li>";
        echo "<li style=\"color:" . $doubleSkullsClass . "\">Double Skulls: " . $team["double skulls"] . "</li>";
        echo "<li style=\"color:" . $doublePowsClass . "\">Double Pows: " . $team["double pows"] . "</li>";
        echo "<li>TOTAL DICE: " . $totalDice . "</li>";
        echo "</ul>";
    }
}

function getCSSColor( $dice, $average, $color1, $color2 ) {
    return $dice >= $average ? $color1 : $color2;
}
