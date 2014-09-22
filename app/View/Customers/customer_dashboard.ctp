
<style>

h2   {color:black;
	  background-color:lightgrey;
	  }
#header {
    background-color:white;
    color:white;
    text-align:center;
    padding:5px;
}
#nav{
	 background-color:white;
    color:white;
    text-align:center;
    padding:5px;
}
.Brand {
    line-height:30px;
    background-color:#eeeeee;
    height:1300px;
    width:200px;
    float:left;
    padding:5px;	      
}
.section {
    width:77%;
    float:left;
    padding:10px;	   
}
#display_img{
	float:left;
}
</style>
<div id="header">
<?php echo  $this->Html->link($this->Html->image('bestprice.jpg',array('width'=>'1200')),'/customers/customer_dashboard/'.$mobiledetail['Customer']['id'],array('escape' => false)); ?>
</div>
<?php echo $this->Form->create('User'); ?>

<div class="Brand">
<h2>Brand</h2>
<?php foreach($MobileBrands as $mobilebrand)
{
	echo $this->Form->checkbox($mobilebrand['MobileBrand']['id'],array('value'=>$mobilebrand['MobileBrand']['id'],'id'=>$mobilebrand['MobileBrand']['id'])).$mobilebrand['MobileBrand']['brand'].'<br>';	
	$this->Js->get('#'.$mobilebrand['MobileBrand']['id'])->event('change',$this->Js->request(array('controller'=>'customers','action' => 'customer_dashboard1'), array('update'=>'#updatediv', 'async'=>true, 'dataExpression'=>true, 'method'=>'post', 'data'=>$this->Js->serializeForm(array('isForm'=>false,'inline'=>true)))));
}
?>
<br>
<h2>price range</h2>
<?php {
	echo $this->Form->checkbox('MobileDetail.price1',array('value'=>'5000','id'=>p1)).'Rs. 5001 - Rs. 10000'.'<br>';	
	$this->Js->get('#'.p1)->event('change',$this->Js->request(array('controller'=>'customers','action' => 'customer_dashboard1'), array('update'=>'#updatediv', 'async'=>true, 'dataExpression'=>true, 'method'=>'post', 'data'=>$this->Js->serializeForm(array('isForm'=>false,'inline'=>true)))));
} ?>
<?php {
	echo $this->Form->checkbox('MobileDetail.price2',array('value'=>'10001','id'=>p2)).'Rs. 10001 - Rs. 15000'.'<br>';	
	$this->Js->get('#'.p2)->event('change',$this->Js->request(array('controller'=>'customers','action' => 'customer_dashboard1'), array('update'=>'#updatediv', 'async'=>true, 'dataExpression'=>true, 'method'=>'post', 'data'=>$this->Js->serializeForm(array('isForm'=>false,'inline'=>true)))));
} ?>
<?php {
	echo $this->Form->checkbox('MobileDetail.price3',array('value'=>'15001','id'=>p3)).'Rs. 15001 - Rs. 20000'.'<br>';	
	$this->Js->get('#'.p3)->event('change',$this->Js->request(array('controller'=>'customers','action' => 'customer_dashboard1'), array('update'=>'#updatediv', 'async'=>true, 'dataExpression'=>true, 'method'=>'post', 'data'=>$this->Js->serializeForm(array('isForm'=>false,'inline'=>true)))));
} ?>
<?php {
	echo $this->Form->checkbox('MobileDetail.price4',array('value'=>'20000','id'=>p4)).'Rs. 20000 - Rs. 30000'.'<br>';	
	$this->Js->get('#'.p4)->event('change',$this->Js->request(array('controller'=>'customers','action' => 'customer_dashboard1'), array('update'=>'#updatediv', 'async'=>true, 'dataExpression'=>true, 'method'=>'post', 'data'=>$this->Js->serializeForm(array('isForm'=>false,'inline'=>true)))));
} ?>
<?php {
	echo $this->Form->checkbox('MobileDetail.price5',array('value'=>'30000','id'=>p5)).'Rs. 30001 - Rs. 40000'.'<br>';	
	$this->Js->get('#'.p5)->event('change',$this->Js->request(array('controller'=>'customers','action' => 'customer_dashboard1'), array('update'=>'#updatediv', 'async'=>true, 'dataExpression'=>true, 'method'=>'post', 'data'=>$this->Js->serializeForm(array('isForm'=>false,'inline'=>true)))));
} ?>
<br>
<br>
<br>
<h2>Screen Size</h2>
<?php {
	echo $this->Form->checkbox('Specification.screen1',array('value'=>'4/4.5','id'=>s1)).'4 to 4.5 inch'.'<br>';	
	$this->Js->get('#'.s1)->event('change',$this->Js->request(array('controller'=>'customers','action' => 'customer_dashboard1'), array('update'=>'#updatediv', 'async'=>true, 'dataExpression'=>true, 'method'=>'post', 'data'=>$this->Js->serializeForm(array('isForm'=>false,'inline'=>true)))));
} ?>
<?php {
	echo $this->Form->checkbox('Specification.screen2',array('value'=>'4.5/5','id'=>s2)).'4.5 to 5 inch'.'<br>';	
	$this->Js->get('#'.s2)->event('change',$this->Js->request(array('controller'=>'customers','action' => 'customer_dashboard1'), array('update'=>'#updatediv', 'async'=>true, 'dataExpression'=>true, 'method'=>'post', 'data'=>$this->Js->serializeForm(array('isForm'=>false,'inline'=>true)))));
} ?>
<?php {
	echo $this->Form->checkbox('Specification.screen3',array('value'=>'5/5.5','id'=>s3)).'5 to 5.5 inch'.'<br>';	
	$this->Js->get('#'.s3)->event('change',$this->Js->request(array('controller'=>'customers','action' => 'customer_dashboard1'), array('update'=>'#updatediv', 'async'=>true, 'dataExpression'=>true, 'method'=>'post', 'data'=>$this->Js->serializeForm(array('isForm'=>false,'inline'=>true)))));
} ?>
<?php {
	echo $this->Form->checkbox('Specification.screen4',array('value'=>'5.5/6','id'=>s4)).'5.5 to 6 inch'.'<br>';	
	$this->Js->get('#'.s4)->event('change',$this->Js->request(array('controller'=>'customers','action' => 'customer_dashboard1'), array('update'=>'#updatediv', 'async'=>true, 'dataExpression'=>true, 'method'=>'post', 'data'=>$this->Js->serializeForm(array('isForm'=>false,'inline'=>true)))));
} ?>
</div>
<?php echo $this->Form->end(); ?>
<div id="updatediv" class="section">
<h3> Mobiles</h3>
<hr width=1005 color=grey>
<br>
<br>
<?php
	 foreach ($MobileDetails as $mobiledetail){ 
	 	echo '<span id="display_img">';
	echo $this->Html->link($this->Html->image($mobiledetail['MobileDetail']['image'],array('width'=>'200px','height'=>'300')),'/mobile_details/mobile_view/'.$mobiledetail['MobileDetail']['id'],array('escape' => false));
		echo '</span>';
	 }
	 ?>
</div>
<?php echo $this->Js->writeBuffer();?>
