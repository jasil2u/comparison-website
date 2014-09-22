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
	 

