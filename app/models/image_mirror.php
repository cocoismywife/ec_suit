<?php
class ImageMirror extends AppModel {
	var $name = 'EsImage';
	
	var $validate = array(
	    'name' => array(
	        'InvalidExt' => array('message' => 'This file extension isn\'t allowed, it should be jpg, jpeg or gif.'),
	        'UploadError' => array('message' => 'Image uploading failed.'),
			'MaxSize' => array('message' => 'Exceed 5 MB.')
	    )
	);
	
	var $actsAs = array (// models/behaviors/meio_upload.php
		'MeioUpload' => array (
			 'name' => array (
				'dir' => 'files{DS}images{DS}mirror', 
				'allowed_mime' => array ('image/jpeg', 'image/pjpeg', 'image/gif' ), 
				'allowed_ext' => array ('.jpg', '.jpeg', '.gif' ),
				'max_size' => '5Mb',
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