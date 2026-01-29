<?php if (!isset($session)) $session = session(); ?>

<!-- Add Employee Button -->
<button id="openFormBtn" class="btn-primary">Add Employee</button>
<?php if (!isset($session)) $session = session(); ?>

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
    </tbody>
</table>

<!-- Modal Form Container -->
<div id="popupForm" class="modal">

  <!-- Inner Form -->
  <div class="modal-content">
    <h3>Add New Employee</h3>
    <form method="POST" action="<?= base_url('users/addUser') ?>" class="employee-form">

      <label>
        Employee ID:<br>
        <input type="text" name="employee_id" required>
      </label>

      <label>
        Name:<br>
        <input type="text" name="name" required>
      </label>

      <label>
        Designation:<br>
        <input type="text" name="designation" required>
      </label>

      <label>
        Phone:<br>
        <input type="text" name="phone">
      </label>

      <label>
        Address:<br>
        <input type="text" name="address">
      </label>

      <label>
        Email:<br>
        <input type="email" name="email">
      </label>

      <label>
        Password:<br>
        <input type="password" name="password">
      </label>

      <label>
        Department:<br>
        <input type="text" name="department">
      </label>

      <label>
        Date of Joining:<br>
        <input type="date" name="doj">
      </label>

      <label>
        UAN No:<br>
        <input type="text" name="uan_no">
      </label>

      <label>
        Father's Name:<br>
        <input type="text" name="fathers_name">
      </label>

      <label>
        Aadhaar Card:<br>
        <input type="text" name="aadhaar_card">
      </label>

      <label>
        PAN Card:<br>
        <input type="text" name="pan_card">
      </label>

      <label>
        Bank Account Number:<br>
        <input type="text" name="bank_account_number">
      </label>

      <label>
        IFSC Code:<br>
        <input type="text" name="ifsc_code">
      </label>

      <!-- Buttons -->
      <div class="form-buttons">
        <button type="submit" class="btn-submit">Submit</button>
        <button type="button" id="closeFormBtn" class="btn-cancel">Cancel</button>
      </div>

    </form>
  </div>
</div>

<style>
/* Button styles */
.btn-primary {
  margin-bottom: 15px;
  padding: 8px 16px;
  background: #222;
  color: #fff;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
.btn-primary:hover {
  background: orange;
}

/* Modal styles */
.modal {
  display: none;
  position: fixed;
  top: 0; left: 0;
  width: 100vw;
  height: 100vh;
  background: rgba(0,0,0,0.5);
  backdrop-filter: blur(2px);
  justify-content: center;
  align-items: center;
  z-index: 9999;
}

.modal-content {
  background: #fff;
  padding: 20px;
  border-radius: 8px;
  min-width: 320px;
  max-width: 800px;
  width: 90%;
  color: #000;
}

/* Form layout */
.employee-form {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
  gap: 12px 24px;
}

.employee-form label {
  display: flex;
  flex-direction: column;
}

.form-buttons {
  grid-column: 1 / -1; /* span all columns */
  display: flex;
  gap: 10px;
  margin-top: 10px;
}

.btn-submit, .btn-cancel {
  padding: 8px 16px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

.btn-submit {
  background: #222;
  color: #fff;
}

.btn-submit:hover {
  background: orange;
  color: #000;
}

.btn-cancel {
  background: #aaa;
  color: #000;
}

.btn-cancel:hover {
  background: #888;
}
</style>

<script>
const openFormBtn = document.getElementById('openFormBtn');
const closeFormBtn = document.getElementById('closeFormBtn');
const popupForm = document.getElementById('popupForm');

openFormBtn.addEventListener('click', () => {
  popupForm.style.display = 'flex';
});

closeFormBtn.addEventListener('click', () => {
  popupForm.style.display = 'none';
});

// Close popup if clicking outside the form
popupForm.addEventListener('click', (e) => {
  if (e.target === popupForm) {
    popupForm.style.display = 'none';
  }
});
</script>
