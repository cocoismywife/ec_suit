<?php
echo '<h1>Add ' . $model_name . '</h1>';
echo $this->Form->create ( $model_name, array ('action' => 'add', 'type' => 'file' ) );
echo $this->Form->input ( 'first_name', array ('label' => 'First Name', 'value' => 'test' ) );
echo $this->Form->input ( 'last_name', array ('label' => 'Last Name', 'value' => 'test' ) );
echo $this->Form->input ( 'first_name_kana', array ('label' => 'First Name Kana', 'value' => 'test' ) );
echo $this->Form->input ( 'last_name_kana', array ('label' => 'Last Name Kana', 'value' => 'test' ) );
echo $this->Form->input ( 'address', array ('label' => 'Address', 'value' => 'test' ) );
echo $this->Form->input ( 'mobile_number', array ('label' => 'Mobile Number', 'value' => '12345678901' ) );
echo $this->Form->input ( 'email', array ('label' => 'Email', 'value' => 'test@test.test' ) );
echo $this->Form->input ( 'purchase_date', array ('label' => 'Purchase Date', 'type' => 'text', 'default' => date("Y-m-d H:i:s")) );

echo $this->Form->input ( 'OrderDetail.gender_id', array ('label' => 'Gender', 'type' => 'select', 'empty' => '------', 'options' => $parentList0, 'default' => 1 ) );
echo $this->Form->input ( 'OrderDetail.style_id', array ('label' => 'Style', 'type' => 'select', 'empty' => '------', 'options' => $parentList1, 'default' => 1 ) );
echo $this->Form->input ( 'OrderDetail.fabric_id', array ('label' => 'Fabric', 'type' => 'select', 'empty' => '------', 'options' => $parentList2, 'default' => 1 ) );
echo $this->Form->input ( 'OrderDetail.collar_id', array ('label' => 'Collar', 'type' => 'select', 'empty' => '------', 'options' => $parentList3, 'default' => 1 ) );
echo $this->Form->input ( 'OrderDetail.pocket_id', array ('label' => 'Pocket', 'type' => 'select', 'empty' => '------', 'options' => $parentList4, 'default' => 1 ) );
echo $this->Form->input ( 'OrderDetail.hem_id', array ('label' => 'Hem', 'type' => 'select', 'empty' => '------', 'options' => $parentList5, 'default' => 1 ) );
echo $this->Form->input ( 'OrderDetail.button_id', array ('label' => 'Buton', 'type' => 'select', 'empty' => '------', 'options' => $parentList6, 'default' => 1 ) );
echo $this->Form->input ( 'OrderDetail.ty_id', array ('label' => 'Tie', 'type' => 'select', 'empty' => '------', 'options' => $parentList7, 'default' => 1 ) );
echo $this->Form->input ( 'OrderDetail.shirt_id', array ('label' => 'Shirt', 'type' => 'select', 'empty' => '------', 'options' => $parentList8, 'default' => 1 ) );
echo $this->Form->input ( 'OrderDetail.lining_id', array ('label' => 'Lining', 'type' => 'select', 'empty' => '------', 'options' => $parentList9, 'default' => 1 ) );
echo $this->Form->input ( 'OrderDetail.lining_fabric_id', array ('label' => 'Lining Fabric', 'type' => 'select', 'empty' => '------', 'options' => $parentList10, 'default' => 1 ) );

echo $this->Form->input ( 'survey_id', array ('type' => 'hidden', 'value' => $survey ['Survey'] [id] ) );
echo $survey ['Survey'] ['name'] . '<br/>';
for($i = 0; $i < sizeof ( $survey ['Question'] ); $i ++) {
	$question = $survey ['Question'] [$i];
	echo $this->Form->input ( 'Question.' . $i . '.id', array ('type' => 'hidden', 'value' => $question ['id'] ) );
	echo ($i + 1) . '. ' . $question ['name'] . '<br/>';
	
	$radio_option = array ();
	for($j = 0; $j < sizeof ( $question ['Option'] ); $j ++) {
		$option = $question ['Option'] [$j];
		$radio_option [$option ['id']] = $option ['text'];
	}
	echo $this->Form->radio ( 'Answer.' . $i . '.option_id', $radio_option, array ('legend' => false, 'value' => $question ['Option'] [0] ['id'] ) );
	echo '<br/>';
}
echo $this->Form->end ( 'Save ' . $model_name );
?>