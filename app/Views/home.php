<?php
include 'header.php';
?>
<?php if(session()->getFlashdata('message')): ?>
    <p style="color: green;"><?= session()->getFlashdata('message') ?></p>
<?php endif; ?>

<?php if (!empty($announcements) && is_array($announcements)): ?>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Date</th>
                <th>Topic</th>
                <th>Info</th>
                <th>Department</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($announcements as $announcement): ?>
                <tr>
                    <td><?= esc($announcement['id']) ?></td>
                    <td><?= esc($announcement['date']) ?></td>
                    <td><?= esc($announcement['topic']) ?></td>
                    <td><?= esc($announcement['info']) ?></td>
                    <td><?= esc($announcement['department']) ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?php else: ?>
    <p>No announcements found.</p>
<?php endif; ?>

<!-- 
<link rel="stylesheet" href="<?= base_url('public/css/home.css') ?>">
<link rel="stylesheet" href="<?= base_url('public/css/tools.css') ?>">
<link rel="stylesheet" href="<?= base_url('public/css/chat.css') ?>">
<link rel="stylesheet" href="<?= base_url('public/css/communication.css') ?>">
<link rel="stylesheet" href="<?= base_url('public/css/creative.css') ?>">
<link rel="stylesheet" href="<?= base_url('public/css/event.css') ?>"> -->