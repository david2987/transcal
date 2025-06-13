<?php
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
    header('Location: http://localhost/transcal2/mobile/home');
    exit;
} else {
    header('Location: http://localhost/transcal2/home/');
    exit;
}
