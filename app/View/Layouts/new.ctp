<?php
/**
  * Developed by PHP language program, use Framework Cakephp.
  * Copyright (c) 2016 by  OREGON - VIET INVESTMENT DEVELOPMENT MEDIA TECHNOLOGY COMPANY LIMITED 
  * Developed by VOTC Company
  * Everything Copy are infringe copyright and must to have take full responsibility before law.
  * Short name: OREGON CO.,LTD
  * Website:http://votc.vn | http://votc.com.vn | http://vietoregon-tech.com
  * Email: votc.com.vn@gmail.com
  * Thanks and best regard !
  * —————————————————————————————————————
  * Phát triển bởi ngôn ngữ lập trình PHP, sử dụng Framework CakePHP
  * Quyền tác giả (c) 2016 CÔNG TY TNHH ĐẦU TƯ PHÁT TRIỂN CÔNG NGHỆ TRUYỀN THÔNG VIỆT NAM-OREGON HOA KỲ
  * Phát triển bởi Công Ty VOTC
  * Mọi sao chép đều là vi phạm quyền sở hữu trí tuệ và phải chịu trách nhiệm trước pháp luật.
  * Tên ngắn giao dịch: OREGON CO.,LTD
  * Website: http://votc.vn | http://votc.com.vn | http://vietoregon-tech.com
  * Địa chỉ Email: votc.com.vn@gmail.com
  * Cám ơn quý đối tác !
  **/
?>

<html id="" lang="vi">
	<head id="">
	<?php
		echo $this->element ( 'meta' );
		echo $this->element ( 'css' );
	?>
	</head>
	<body class="home">
		<div id="wrapper">
			<?php  echo $this->element('header')?>
			<!-- <div id="main"> -->
				<?php echo $this->fetch('content')?>
				
			<!-- </div> -->
		</div>
		<?php  echo $this->element('footer')?>
		<div class="scroll-up" style="display: none;">
			<i class="fa fa-chevron-up fa-3"></i>
		</div>
		<?php echo $this->element ( 'js' ); ?>
	</body>
</html>