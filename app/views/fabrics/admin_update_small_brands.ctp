<?php
echo '<option>小カテゴリ</option>';
if (! empty ( $options )) {
	foreach ( $options as $k => $v ) {
		echo '<option value="' . $k . '">' . $v . '</option>';
	}
}
