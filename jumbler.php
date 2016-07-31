<head>
	<meta charset="UTF-8">
	<title>Jumbler</title>

	<!-- responsive meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- master stylesheet -->
	<link rel="stylesheet" href="css/style.css">
	<!-- responsive stylesheet -->
	<link rel="stylesheet" href="css/responsive.css">



</head>
<?php
$host='localhost';
	$user='root';
	$pass='';
	$conn=mysql_connect($host,$user,$pass);
	mysql_select_db('jumbler');
	$ret=mysql_query("SELECT * from history where id=(SELECT max(id) from history)",$conn);
	$row=mysql_fetch_array($ret);
	$word=$row[1];
	$alpha=array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);
	$word=strtolower($word);
	for ($i=0; $i <strlen($word); $i++) { 
		switch ($word[$i]) {
			case 'a':
				$alpha[0]++;
				break;
			case 'b':
				$alpha[1]++;
				break;
			case 'c':
				$alpha[2]++;
				break;
			case 'd':
				$alpha[3]++;
				break;
			case 'e':
				$alpha[4]++;
				break;
			case 'f':
				$alpha[5]++;
				break;
			case 'g':
				$alpha[6]++;
				break;
			case 'h':
				$alpha[7]++;
				break;
			case 'i':
				$alpha[8]++;
				break;
			case 'j':
				$alpha[9]++;
				break;
			case 'k':
				$alpha[10]++;
				break;
			case 'l':
				$alpha[11]++;
				break;
			case 'm':
				$alpha[12]++;
				break;
			case 'n':
				$alpha[13]++;
				break;
			case 'o':
				$alpha[14]++;
				break;
			case 'p':
				$alpha[15]++;
				break;
			case 'q':
				$alpha[16]++;
				break;
			case 'r':
				$alpha[17]++;
				break;
			case 's':
				$alpha[18]++;
				break;
			case 't':
				$alpha[19]++;
				break;
			case 'u':
				$alpha[20]++;
				break;
			case 'v':
				$alpha[21]++;
				break;
			case 'w':
				$alpha[22]++;
				break;
			case 'x':
				$alpha[23]++;
				break;
			case 'y':
				$alpha[24]++;
				break;
			case 'z':
				$alpha[25]++;
				break;
		}
		
	}
	$sql="SELECT `word` FROM `database` WHERE a=$alpha[0] AND b=$alpha[1] AND c=$alpha[2] AND d=$alpha[3] AND e=$alpha[4] AND f=$alpha[5] AND g=$alpha[6] AND h=$alpha[7] AND i=$alpha[8] AND j=$alpha[9] AND k=$alpha[10] AND l=$alpha[11] AND m=$alpha[12] AND n=$alpha[13] AND o=$alpha[14] AND p=$alpha[15] AND q=$alpha[16] AND r=$alpha[17] AND s=$alpha[18] AND t=$alpha[19] AND u=$alpha[20] AND v=$alpha[21] AND w=$alpha[22] AND x=$alpha[23] AND y=$alpha[24] AND z=$alpha[25]";
	$ret=mysql_query($sql,$conn);

	$sql1="SELECT `word` FROM `database` WHERE a<=$alpha[0] AND b<=$alpha[1] AND c<=$alpha[2] AND d<=$alpha[3] AND e<=$alpha[4] AND f<=$alpha[5] AND g<=$alpha[6] AND h<=$alpha[7] AND i<=$alpha[8] AND j<=$alpha[9] AND k<=$alpha[10] AND l<=$alpha[11] AND m<=$alpha[12] AND n<=$alpha[13] AND o<=$alpha[14] AND p<=$alpha[15] AND q<=$alpha[16] AND r<=$alpha[17] AND s<=$alpha[18] AND t<=$alpha[19] AND u<=$alpha[20] AND v<=$alpha[21] AND w<=$alpha[22] AND x<=$alpha[23] AND y<=$alpha[24] AND z<=$alpha[25]";
	$ret1=mysql_query($sql1,$conn);

?>
<body>
	<section class="inner-header">
		<div class="container">
			<div class="row">
				<div class="col-md-12 sec-title colored text-center">
					<h1>Jumbler</h1>
					<h3>Give any word and we will give you list of meaningful jumble words<br> and all the possible meaning words which can be formed from it</h3>
					<span class="decor"><span class="inner"></span></span>
				</div>
			</div>
		</div>
	</section>

<section class="contact-content sec-padding">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<h2>Jumbler</h2>
					<form action="query.php" class="contact-form row" id="contact-page-contact-form" method="post">
						<div class="col-md-6">
							<input type="text" name="word" id="word" placeholder="<?php echo $word ; ?>">
							<div class="col-md-12"><button class="thm-btn" type="submit">Send</button></div>
							
							<input type="text" name="Jumble_words" id="Jumble_words" placeholder="<?php	while ($row=mysql_fetch_array($ret)) { echo $row['word']."\t"; } ?>">
						</div>
						<div class="col-md-6">
							<textarea name="words_inside" id="words_inside" placeholder="<?php while ($row1=mysql_fetch_array($ret1)) { echo $row1['word']."\t"; } ?>" cols="30" rows="10"></textarea>
						</div>
						
					</form>
				</div>
				<div class="col-md-4">
					<h2>Address</h2>
					<ul class="contact-info">
						<li>
							<div class="icon-box">
								<div class="inner">
									<i class="fa fa-map-marker"></i>
								</div>
							</div>
							<div class="content-box">
								<h4>Address</h4>
								<p>15-D-12 Parmar Bhavan<br>JUIT Waknaghat, Solan Pin-173234<br>India</p>
							</div>
						</li>
						<li>
							<div class="icon-box">
								<div class="inner">
									<i class="fa fa-phone"></i>
								</div>
							</div>
							<div class="content-box">
								<h4>Phone</h4>
								<p>+91-9805285353<br>+91-8005174925</p>
							</div>
						</li>
						<li>
							<div class="icon-box">
								<div class="inner">
									<i class="fa fa-envelope-o"></i>
								</div>
							</div>
							<div class="content-box">
								<h4>Email</h4>
								<p>arpitdappy@gmail.com</p>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</section>

	

</body>