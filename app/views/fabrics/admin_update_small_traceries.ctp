<?php
// update_select.(ctp|thtml)
	foreach ( $options as $k => $v ) {
		echo '<option value="' . $k . '">' . $v . '</option>';
	}
}
?>