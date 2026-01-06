<?php
// bloquepc.php — bloqueio forte de PC

$ua = strtolower($_SERVER['HTTP_USER_AGENT'] ?? '');

// Detectar sistemas de PC
$pcAgents = [
    'windows nt',
    'macintosh',
    'mac os',
    'linux x86',
    'x11',
    'cros' // ChromeOS
];

// Detectar mobile
$mobileAgents = [
    'android',
    'iphone',
    'ipad',
    'ipod',
    'windows phone'
];

$isPC = false;
$isMobile = false;

// Verificar PC
foreach ($pcAgents as $pc) {
    if (strpos($ua, $pc) !== false) {
        $isPC = true;
        break;
    }
}

// Verificar Mobile
foreach ($mobileAgents as $m) {
    if (strpos($ua, $m) !== false) {
        $isMobile = true;
        break;
    }
}

// REGRA FINAL:
// Se for PC OU não for reconhecido como mobile → BLOQUEIA
if ($isPC || !$isMobile) {

    http_response_code(403);
    ?>
    <!DOCTYPE html>
    <html lang="pt">
    <head>
        <meta charset="UTF-8">
        <title>Acesso Bloqueado</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            body {
                margin: 0;
                font-family: Arial, Helvetica, sans-serif;
                background: #020617;
                color: #e5e7eb;
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
            }
            .box {
                background: #020617;
                padding: 40px;
                max-width: 500px;
                text-align: center;
                border-radius: 12px;
                box-shadow: 0 10px 30px rgba(0,0,0,.6);
                border: 1px solid #1e293b;
            }
            h1 {
                color: #ef4444;
            }
            p {
                line-height: 1.6;
                color: #cbd5f5;
            }
        </style>
    </head>
    <body>
        <div class="box">
            <h1>⛔ Acesso Bloqueado</h1>
            <p>Este sistema só pode ser acedido através de <strong>telemóveis</strong>.</p>
            <p>Por favor, utilize um dispositivo móvel para continuar.</p>
        </div>
    </body>
    </html>
    <?php
    exit;
}
