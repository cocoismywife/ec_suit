<?phpclass SmallTracery extends AppModel {	var $name = 'EsSmallTracery';	var $belongsTo = array ('BigTracery' );	var $parent_name = array ('BigTracery' );		public $validate = array ('name' => array ('rule' => 'notEmpty', 'message' => 'SubCategory Name is required' ) );}