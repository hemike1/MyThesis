<h1><?php echo $heading; ?></h1>
<?php foreach($login as $logins): ?>
<h2><?php echo $logins['name']; ?></h2>
<p><?php echo $logins['pw']; ?></p>
<?php endforeach; ?>
