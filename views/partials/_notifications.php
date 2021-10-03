<?php if ( ! empty( $_SESSION['errors'] ) ): ?>
    <div class="alert alert-danger">
		<?php foreach ( $_SESSION['errors'] as $errors ): ?>
            <li><?php echo $errors; ?></li>
		<?php endforeach; ?>
    </div>
	<?php unset( $_SESSION['errors'] ) ?>
<?php endif; ?>

<?php if ( isset( $_SESSION['success'] ) ): ?>
    <div class="alert alert-success">
		<?php echo $_SESSION['success']; ?>
    </div>
	<?php unset( $_SESSION['success'] ) ?>
<?php endif; ?>