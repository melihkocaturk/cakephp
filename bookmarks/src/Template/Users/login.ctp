<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>

<div class="users form">
<?= $this->Flash->render('auth') ?>
<?= $this->Form->create() ?>
	<fieldset>
		<legend><?= __('Please enter your email and password') ?></legend>
	</fieldset>
	<?= $this->Form->input('email') ?>
	<?= $this->Form->input('password') ?>
<?= $this->Form->button(__('Login')) ?>
<?= $this->Form->end() ?>
</div>