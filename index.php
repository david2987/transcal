<?php

include_once('constant.php');

function esDispositivoMovil() {
    $userAgent = strtolower($_SERVER['HTTP_USER_AGENT']);

    // Lista básica de identificadores móviles
    $agentesMoviles = [
        'iphone', 'ipad', 'ipod', 'android', 'blackberry',
        'opera mini', 'windows phone', 'iemobile', 'mobile', 'tablet'
    ];

    foreach ($agentesMoviles as $movil) {
        if (strpos($userAgent, $movil) !== false) {
            return true;
        }
    }

    return false;
}

// Redirección según el tipo de dispositivo
if (esDispositivoMovil()) {
    header('Location: '.URL_HOST.'home.php');
    exit;
} else {
    header('Location: '.URL_HOST.'home.php');
    exit;
}
