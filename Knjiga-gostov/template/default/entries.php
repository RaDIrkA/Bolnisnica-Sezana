<?php include_from_template('header.php'); ?>

<?php show_guestbook_add_form(); ?>

<h2>Trenutni vnos</h2>

<p class="entryCount">
Prikaz vnosov <?php show_entries_start_offset(); ?> od <?php show_entries_end_offset(); ?> 
(Skupni vnosi: <?php show_entry_count(); ?>)
</p>

<?php show_entries(); ?>

<?php include_from_template('footer.php'); ?>