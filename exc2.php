
<?php
$teams=[
    "Real Madrid" => ['Cristiano', 'Lionel', 'Neymar', 'Kylian', 'Luka', 'Mohamed', 'Sergio', 'Kevin', 'Robert', 'Sadio'],
    "FC Barcelona" => ['Luis', 'Virgil', 'Eden', 'Kevin', 'Paul', 'Toni', 'Sergio', 'Raheem', 'Harry', 'Joshua'],
    "Manchester United" => ['Romelu', 'Bruno', 'Harry', 'Edinson', 'Marcus', 'Jadon', 'Paul', 'Antoine', 'Jesse', 'Luke'],
    "Bayern Munich" => ['Robert', 'Manuel', 'Joshua', 'Serge', 'Thomas', 'Leon', 'Leroy', 'Benjamin', 'Alphonso', 'David'],
    "Liverpool FC" => ['Mohamed', 'Sadio', 'Virgil', 'Alisson', 'Fabinho', 'Trent', 'Thiago', 'Diogo', 'Jordan', 'Roberto'],
    "Juventus FC" => ['Cristiano', 'Paulo', 'Giorgio', 'Alvaro', 'Leonardo', 'Juan', 'Matthijs', 'Federico', 'Federico', 'Dejan'],
];

$match=[
    "firstmatch"=>[$teams["Real Madrid"], $teams["FC Barcelona"]],
    "scndmatch"=>[$teams["Manchester United"], $teams["Bayern Munich"]],
    "thirdmatch"=>[$teams["Liverpool FC"], $teams["Juventus FC"]],
   
];
echo "<pre>";print_r($match);echo"</pre>";
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul><?php foreach ($teams as $squad => $squad_list) {?>
        <li><?=$squad?>
        <ul>
            <?php
            foreach ($squad_list as $player_name) {?>
            <li><?= $player_name ?></li> <?php 
                }
            ?>
        </ul>
    </li><?php
   }
   foreach ($match as $match_name => $teams) {
    echo "<h3>$match_name</h3>";
    foreach ($teams as $team_index => $team_players) {
        echo "<h4>{$team_index} Team:</h4>";
        echo "<ul>";
        foreach ($team_players as $player) {
            echo "<li>$player</li>";
        }
        echo "</ul>";
    }
    echo "<hr>";
}
   
   ?>

 </ul>
</body>
</html>