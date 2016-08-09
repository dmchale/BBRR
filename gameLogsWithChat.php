<?php
require_once("classes/global_class_include.php");
require_once("inc/functions.php");
echo '<a href="/BBRR/">Home</a>';


showLogFileDropdown();

if ( isset( $_REQUEST["logFile"] ) ) {

    $arrLog = file( "replays/" . $_REQUEST["logFile"] );

    $arrTeams;

    showGameLog();

}

/******************************************************************************************
 ******************************************************************************************
 ******************************************************************************************
 ******************************************************************************************
 */

/**
 *
 */
function showGameLog()
{
    global $arrLog;
    global $arrTeams;

    $lastLine = "";
    $foundTeams = false;

    echo "<h3>Viewing Game Log: " . $_REQUEST["logFile"] . "</h3>";

    foreach ($arrLog as $line) {

        if ( ( ! $foundTeams ) && isTeamVsTeamDeclaration( $line ) ) {
            $team1 = getTeam1FromTeamDeclaration($line);
            $team2 = getTeam2FromTeamDeclaration($line);

            echo "<span style=\"color:#00f; font-weight:bold; \">" . $arrTeams[$team1]["Name"] . "</span><br />";
            echo "<span style=\"color:#00f; font-weight:bold; \">" . $arrTeams[$team2]["Name"] . "</span><br />";

            $foundTeams = true;

        } elseif ( isGameLog( $line ) ) {
            echo $line . "<br />";
        } elseif ( isChat( $line ) ) {
            echo "<span style=\"color: #f00;\">" . $line . "</span><br />";
        } elseif ( isBlockResult( $line ) ) {
            echo "<span style=\"font-weight: bold;\">" . $lastLine . "<br>" . $line . "</span><br />";
        }

        $lastLine = $line;

    }

}

