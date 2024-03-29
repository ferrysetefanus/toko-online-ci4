<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<?php 
$username = [
	'name' => 'username',
	'id' => 'username',
	'value' => null,
	'class' => 'form-control'
];

$password = [
	'name' => 'password',
	'id' => 'password',
	'value' => null,
	'class' => 'form-control'
];

?>
<div class="col-md-3"></div>
<div class="col-md-6 mx-auto">
	<h1>Lgoin Form</h1>
	<?= form_open('auth/login') ?>
		<div class="form-group">
			<?= form_label('Username', 'username') ?>
			<?= form_input($username) ?>
		</div>
		<div class="form-group">
			<?= form_label('Password', 'password') ?>
			<?= form_password($password) ?>
		</div>
		<div class="text-right">
			<?= form_submit('submit', 'Submit', ['class' => 'btn btn-primary']) ?>
		</div>
	<?= form_close() ?>
</div>
<div class="col-md-3"></div>
<?= $this->endSection() ?>