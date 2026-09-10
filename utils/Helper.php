<?php
//PERMET L'AFFICHAGE CORRECT EN HTML (UTF-8)
function escape($s) {
    return htmlspecialchars($s, ENT_QUOTES, 'UTF-8');
}
?>