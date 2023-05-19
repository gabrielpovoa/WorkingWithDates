<?php
function callWeek($dateFormat) {
$data = $dateFormat;
$time = date('l', strtotime($data));

switch($time) {
    case 'Monday':
        echo "SEGUNDA-FEIRA";
        break;
    case 'Tuesday':
        echo "TERÇA-FEIRA";
        break;
    case 'Wednesday':
        echo "QUARTA-FEIRA";
        break;
    case 'Thursday':
        echo "QUINTA-FEIRA";
        break;
    case 'Friday':
        echo "SEXTA-FEIRA";
        break;
    case 'Saturday':
        echo "SÁBADO";
        break;
    case 'Sunday':
        echo "DOMINGO";
        break;
    }
}

callWeek('2002-06-12');

?>