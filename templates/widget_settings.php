<?php

?>
<div class = 'wrap'>
<h1>Widget Settings</h1>
<form method = 'post' action = 'options.php'>
<?php
settings_fields( 'general' );
do_settings_sections( 'general' );
submit_button();
?>
</form>
</div>