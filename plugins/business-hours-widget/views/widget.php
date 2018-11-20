<!-- This file is used to markup the public-facing widget. -->
<div class="div-navbar">
<ul class="li-navbar">

<?php if (strlen (trim ($monday_friday))>0): ?>
	<li><span class="bold">Monday-Friday: </span><?php echo $monday_friday; ?>
</li>
<?php endif ?>
<?php if (strlen (trim ($saturday))>0): ?>
    <li><span class="bold">Saturday: </span><?php echo $saturday; ?></li>
<?php endif; ?>
<?php if (strlen (trim ($sunday))>0): ?>
    <li><span class="bold">Sunday: </span><?php echo $sunday; ?></li>
<?php endif; ?>
</ul>
</div>