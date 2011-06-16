<h1>Add <?php echo $model_name; ?></h1>
<?php
echo $this->Form->create ( $model_name, array ('action' => 'add', 'type' => 'file' ) );
echo $this->Form->input ( 'first_name', array ('label' => 'First Name' ) );
echo $this->Form->input ( 'last_name', array ('label' => 'Last Name' ) );
echo $this->Form->input ( 'first_name_kana', array ('label' => 'First Name Kana' ) );
echo $this->Form->input ( 'last_name_kana', array ('label' => 'Last Name Kana' ) );
echo $this->Form->input ( 'address', array ('label' => 'Address' ) );
echo $this->Form->input ( 'mobile_number', array ('label' => 'Mobile Number' ) );
echo $this->Form->input ( 'email', array ('label' => 'Email' ) );
echo $this->Form->input ( 'purchase_date', array ('label' => 'Purchase Date' ) );

echo $this->Form->input ( 'gender_id', array ('label' => 'Gender', 'type' => 'select', 'empty' => '------', 'options' => $parentList0) );
echo $this->Form->input ( 'style_id', array ('label' => 'Style', 'type' => 'select', 'empty' => '------', 'options' => $parentList1) );
echo $this->Form->input ( 'fabric_id', array ('label' => 'Fabric', 'type' => 'select', 'empty' => '------', 'options' => $parentList2) );
echo $this->Form->input ( 'collar_id', array ('label' => 'Collar', 'type' => 'select', 'empty' => '------', 'options' => $parentList3) );
echo $this->Form->input ( 'pocket_id', array ('label' => 'Pocket', 'type' => 'select', 'empty' => '------', 'options' => $parentList4) );
echo $this->Form->input ( 'hem_id', array ('label' => 'Hem', 'type' => 'select', 'empty' => '------', 'options' => $parentList5) );
echo $this->Form->input ( 'ty_id', array ('label' => 'Tie', 'type' => 'select', 'empty' => '------', 'options' => $parentList6) );
echo $this->Form->input ( 'shirt_id', array ('label' => 'Shirt', 'type' => 'select', 'empty' => '------', 'options' => $parentList7) );
echo $this->Form->end ( 'Save ' . $model_name );
?>