<?php

header('Content-Type: text/javascript');

function interpret($command)
{
    $outputLines = array();

    $lines = preg_split('/;/', $command);
    foreach ($lines as $line) {
        $command = trim($line);
        $outputLines[] = '> ' . $command;

        if (preg_match('/MAKE (\d)+/', $command, $matches)) {
            $outputLines[] = "Made {$matches[1]} widgets.";
        } elseif ($command === 'KILL') {
            $outputLines[] = 'Server killed!';
        } else {
            $outputLines[] = 'Syntax error!';
        }
    }

    return $outputLines;
}

$resultLines = interpret('MAKE ' . $_GET['request']);

echo 'displayOutput("' . join('\n"+"', $resultLines) . '\n");';
