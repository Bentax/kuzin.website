<?php
$user = 'cf98197_mainbd';
$pass = '12345';
$db = new PDO('mysql:host=localhost;dbname=cf98197_mainbd', $user, $pass);
$stmt = $db->query('SELECT * from requests');
//Установка fetch mode
$stmt->setFetchMode(PDO::FETCH_ASSOC);
while($row = $stmt->fetch())
{
    echo "<p>" . $row['time'] ."&nbsp;". $row['name'] . "&nbsp;" . $row['phone'] ."&nbsp;". $row['email'] . "</p>";
    echo "<p>" . "</p><br />";
}
function print_special($message, $mode)
{
    if($mode===1){
        $decorator = str_repeat('-=', strlen($message)/2) . "\n";
    }
    else{
        $decorator = str_repeat('\/', strlen($message)/2) . "\n";
    }
    return $decorator.$message.PHP_EOL.$decorator;
}
echo print_special("qwerty", 2);