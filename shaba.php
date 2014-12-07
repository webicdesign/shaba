<?php
class shaba {
	public static function to_shaba ($account) {
		$count_l 			= strlen($account);
		$zero_add_counter	= 19 - $count_l;
		if ($zero_add_counter) {
			for ($i=0;$i<$zero_add_counter;$i++){
				$account = '0'.$account;
			}
		}
		$account			= "017".$account;
		$num 				= $account."182700";
		$mod 				= bcmod($num, "97");
		$rn  				= bcsub(98, $mod);
		$acc_num			= $rn.$account;
		$count_ln			= strlen($acc_num);
		$aero				= 24-$count_ln;
		if ($aero) {
			for ($i=0;$i<$aero;$i++){
				$acc_num = '0'.$acc_num;
			}
		}
		return 'IR'.$acc_num;
	}
}