<?php
// update_select.(ctp|thtml)if (! empty ( $options )) {
	foreach ( $options as $k => $v ) {
		echo '<option value="' . $k . '">' . $v . '</option>';
	}
}
?>