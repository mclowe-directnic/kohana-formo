<?php echo $open; ?>
	<label<?php if ($id = $this->attr('id')) echo ' for="'.$id.'"'; ?>>
		<?php echo $label; ?>
		<span class="field">
			<?php if ($field->get('editable') === TRUE): ?>
				<?php echo $this->add_class('input')->html(); ?>
			<?php else: ?>
				<span><?php echo $field->val(); ?></span>
			<?php endif; ?>
		</span>
	</label>
	<?php echo $message; ?>
<?php echo $close; ?>