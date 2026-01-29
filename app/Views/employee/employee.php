<?= $this->include('header') ?>  <!-- no .php needed -->

<?php if (!isset($session)) $session = session(); ?>

<!-- Add Employee Button -->
<button id="openFormBtn" class="btn-primary">Add Employee</button>

<h2>Employee List</h2>

<table border="1" cellpadding="6" cellspacing="0" style="width:100%; border-collapse: collapse;">
    <thead style="background: #222; color: #fff;">
        <tr>
            <th>ID</th>
            <th>Employee ID</th>
            <th>Name</th>
            <th>Designation</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Department</th>
            <th>Date of Joining</th>
        </tr>
    </thead>
    <tbody>
        <?php if (!empty($users)): ?>
            <?php foreach($users as $user): ?>
                <tr>
                    <td><?= esc($user['id']) ?></td>
                    <td><?= esc($user['employee_id']) ?></td>
                    <td><?= esc($user['name']) ?></td>
                    <td><?= esc($user['designation']) ?></td>
                    <td><?= esc($user['phone']) ?></td>
                    <td><?= esc($user['email']) ?></td>
                    <td><?= esc($user['department']) ?></td>
                    <td><?= esc($user['doj']) ?></td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="8" style="text-align:center;">No employees found.</td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>
