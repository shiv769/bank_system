<?php
function execPrint($command) {
    $result = array();
    exec($command, $result);
    foreach ($result as $line) {
        print($line . "<br>");
    }
}
// Print the exec output inside of a pre element
print("<pre>" . execPrint("git pull https://sauravdevp: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@github.com/sauravdevp/oflep_card.git main") . "</pre>");
?> 