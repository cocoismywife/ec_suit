<?php
if (! empty ( $options )) {    echo '<option>小カテゴリ</option>';
	foreach ( $options as $k => $v ) {
		echo '<option value="' . $k . '">' . $v . '</option>';
	}
}
