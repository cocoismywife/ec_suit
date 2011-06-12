<?php
class Gender extends AppModel {
	var $name = 'EsGenders';
	
	public $validate = array ('name' => array ('rule' => 'notEmpty', 'message' => 'Gender Name is required' ) );
	
	var $actsAs = array (// models/behaviors/meio_upload.php
		'MeioUpload' => array (
			 'upload_file_url' => array (
				'dir' => 'files{DS}images', 
				'allowed_mime' => array ('image/jpeg', 'image/pjpeg', 'image/gif', 'image/png' ), 
				'allowed_ext' => array ('.jpg', '.jpeg', '.png', '.gif' ),
				'zoomCrop' => true,
			    'thumbsizes' => array(
			      'normal' => array('width' => 400, 'height' => 300),
			      'small' => array('width' => 80, 'height' => 80,'maxDimension' => '', 'thumbnailQuality' => 100, 'zoomCrop' => true),
			    )
			)
		));
}