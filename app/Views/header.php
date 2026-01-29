<?php if (!isset($session)) $session = session(); ?>

<?php
$tabs = [
    'home' => ['label' => 'Home', 'url' => base_url('home')],
    'employee-book' => ['label' => 'Employee Book',         'url' => base_url('employees/list') ],
    'resource_data_center' => ['label' => 'Resource & Data Center', 'url' => base_url('resources')],
    'dashboard' => ['label' => 'Dashboard', 'url' => base_url('dashboard')],
    'eventover' => ['label' => 'Event Overview', 'url' => base_url('events/overview')],
    'tools' => ['label' => 'Tools', 'url' => base_url('tools')],
    'hr' => ['label' => 'HR Department', 'url' => base_url('hr')],
    'creative' => ['label' => 'Creative/Design', 'url' => base_url('creative')],
];

$userType = $session->get('user_type');

if ($userType === 'admin' || $userType === 'hr') {
    $availableTabs = array_keys($tabs);
} elseif ($userType === 'general') {
    $availableTabs = ['communication', 'employee-book', 'resource_data_center', 'dashboard', 'tools'];
} else {
    $availableTabs = ['communication', 'tools', 'creative'];
}

$currentURL = current_url(true)->getPath();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= esc($title ?? 'Admin Panel') ?></title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }

        header {
            position: relative;
            background: #222;
            padding: 10px 0;
        }

        .logout {
            position: absolute;
            top: 10px;
            right: 10px;
            color: orange;
            font-weight: bold;
        }

        .logout a {
            color: orange;
            text-decoration: none;
        }

        .center-container {
            position: fixed;
            top: 8%;
            left: 50%;
            transform: translate(-50%, -50%);
            cursor: pointer;
            z-index: 1010;
        }

        #logo {
            height: 50px;
            width: auto;
            position: relative;
            z-index: 1010;
        }

        #pulse-wave {
            position: fixed;
            top: 8%;
            left: 50%;
            height: 50px;
            width: 0;
            background: rgba(255, 255, 0, 0.5);
            border-radius: 250px;
            transform: translateX(-50%);
            pointer-events: none;
            opacity: 0;
            z-index: 1000;
        }

        @keyframes expandPulse {
            0% { width: 0; opacity: 0.7; }
            100% { width: 100vw; opacity: 0; }
        }

        .tabs {
            display: flex;
            gap: 10px;
            justify-content: center;
            margin-top: 80px;
        }

        .tab-link {
            padding: 8px 16px;
            background: #222;
            color: #fff;
            text-decoration: none;
            border-radius: 4px;
            transition: background 0.3s, color 0.3s;
        }

        .tab-link:hover,
        .tab-link.active {
            background: orange;
            color: #000;
        }

        .center-box {
    width: 90%;
    margin: 0 auto;          /* centers the div itself */
    text-align: center;      /* centers text & inline elements */
}

    </style>
</head>
<body>

<div class="logout">
    <?= esc($session->get('username')) ?> | <a href="<?= base_url('logout') ?>">Logout</a>
</div>

<header>
 <div class="header-container">
    <div class="center-container">
        <div id="pulse-wave"></div>
        <img id="logo" src="https://spheretravelmedia.com/wp-content/uploads/2025/03/cropped-cropped-38x38inch-Sphere-Logo-Copy-min_prev_ui-300x100.png" alt="Company Logo">
    </div>

    <div class="logout">
        <?= esc($session->get('username')) ?> | <a href="<?= base_url('logout') ?>">Logout</a>
    </div>

    <div class="tabs" role="tablist">
        <?php foreach ($availableTabs as $tabKey): ?>
            <a href="<?= esc($tabs[$tabKey]['url']) ?>" class="tab-link <?= ($currentURL === parse_url($tabs[$tabKey]['url'], PHP_URL_PATH)) ? 'active' : '' ?>">
                <?= esc($tabs[$tabKey]['label']) ?>
            </a>
        <?php endforeach; ?>
    </div>
</div>
</header>

<script>
    const centerContainer = document.querySelector('.center-container');
    const pulse = document.getElementById('pulse-wave');
    const logo = document.getElementById('logo');

    // Fade logo on scroll
    window.addEventListener('scroll', () => {
        let opacity = 1 - window.scrollY / 40;
        opacity = Math.max(0, Math.min(1, opacity));
        centerContainer.style.opacity = opacity;
        centerContainer.style.pointerEvents = opacity === 0 ? 'none' : 'auto';
    });

    // Pulse effect on logo click
    logo.addEventListener('click', () => {
        pulse.style.animation = 'none';
        pulse.offsetHeight; // trigger reflow
        pulse.style.opacity = '0.7';
        pulse.style.animation = 'expandPulse 0.8s forwards ease-out';
    });

    pulse.addEventListener('animationend', () => {
        pulse.style.opacity = '0';
        pulse.style.width = '0';
        pulse.style.animation = 'none';
    });
</script>


<div class="center-box">


