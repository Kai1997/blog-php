<?php 
	function sw_get_current_weekday() {
		date_default_timezone_set('Asia/Ho_Chi_Minh');
		$weekday = date("l");
		$weekday = strtolower($weekday);
		switch($weekday) {
				case 'monday':
						$weekday = 'Thứ hai';
						break;
				case 'tuesday':
						$weekday = 'Thứ ba';
						break;
				case 'wednesday':
						$weekday = 'Thứ tư';
						break;
				case 'thursday':
						$weekday = 'Thứ năm';
						break;
				case 'friday':
						$weekday = 'Thứ sáu';
						break;
				case 'saturday':
						$weekday = 'Thứ bảy';
						break;
				default:
						$weekday = 'Chủ nhật';
						break;
		}
		echo $weekday.', Ngày '.date('d/m/Y');
	}
?>						
		<hr>
		<footer>
		<span class="icon"><i class="fa fa-clock-o" aria-hidden="true"></i></span>
		<?php sw_get_current_weekday(); ?> 
		</footer>
	</div>

	<?php 
	if($enableOB) {
		echo "JSBOTTOM";
		ob_end_flush();
	}
	echo html_helpers::jsFooter();
	?>
</body>
</html>