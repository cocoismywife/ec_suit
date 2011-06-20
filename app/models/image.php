<?php
class Image extends AppModel {
	var $name = 'EsImage';
	
	var $actsAs = array (// models/behaviors/meio_upload.php
		'MeioUpload' => array (
			 'name' => array (
				'dir' => 'files{DS}images', 
				'allowed_mime' => array ('image/jpeg', 'image/pjpeg', 'image/gif', 'image/png' ), 
				'allowed_ext' => array ('.jpg', '.jpeg', '.png', '.gif' ),
				'fields' => array(
					'filesize' => 'size',
					'mimetype' => 'mime',
					'dir' => 'path'
				)
//				'zoomCrop' => true,
//			    'thumbsizes' => array(
//			      'normal' => array('width' => 400, 'height' => 300),
//			      'small' => array('width' => 80, 'height' => 80,'maxDimension' => '', 'thumbnailQuality' => 100, 'zoomCrop' => true),
//			    )
			)
		));
}