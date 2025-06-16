<?php
$red = "\033[31m";
$bold = "\033[1m";
$reset = "\033[0m";

echo $bold . $red . "NOTICE:\n";
echo "This game was created using PHP and is intended to be distributed only in open-source form.\n";
echo "If you are seeing this message after running an executable file, please be aware that the original code may have been modified.\n";
echo "Proceed with caution, as the integrity of the software cannot be guaranteed in such cases.\n";
echo $reset;

$colors = [
    "\033[31m",
    "\033[32m",
    "\033[33m",
    "\033[34m",
    "\033[35m",
    "\033[36m",
    "\033[91m",
    "\033[92m",
    "\033[93m",
    "\033[94m",
];

$title = "                                         _                                             
  __ _ _   _  ___  ___ ___   _ __  _   _ _ __ ___ | |__   ___ _ __ 
 / _` | | | |/ _ \/ __/ __| | '_ \| | | | '_ ` _ \| '_ \ / _ \ '__|
| (_| | |_| |  __/\__ \__ \ | | | | |_| | | | | | | |_) |  __/ |   
 \__, |\__,_|\___||___/___/ |_| |_|\__,_|_| |_| |_|_.__/ \___|_|   
  __/ |                                                            
 |___/                                                             
";










$greeting = "";
$color_index = 0;

for ($i = 0; $i < strlen($title); $i++) {
    $char = $title[$i];
    if ($char !== ' ') {
        $greeting .= $colors[$color_index % count($colors)] . $char;
        $color_index++;
    } else {
        $greeting .= $char;
    }
}

$greeting .= $reset;
echo "\n" . $greeting;

function playGame() {
$first = readline("Enter the minimum value for the random number: ");
$second = readline("Enter the maximum value for the random number: ");
$num = rand($first, $second);
$UI = readline("Now enter your number: ");

if ($num != $UI) {
    echo "You did not guess the number. The correct number was $num.\n";
} else {
    echo "You guessed the number!\n";
}}
playGame();
$again = readline("wanna play again? y/n:  ");
if ($again == "y") {
    playGame();
} else {
    echo "good bye!";
}
?>                 
