<!DOCTYPE HTML>
<html>
	<head>
		<title>Student Home Page</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="style2.css">
		<link rel="stylesheet" type="text/css" href="profile1.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script type="text/javascript" src="effects.js"></script>		
	</head>
	<body>
		<div class="header">
			<div class="logo">
				<a href="#"><img src="logo.jpeg"></a>
			</div>
			<ul>
				<li><a href="#here">Features</a></li>
				<li><a href="#">How To</a></li>
				<!--<span class="glyphicon glyphicon-search"></span>-->
				<!--<li class="SignUp"><a href="A:\Programming Files\Project X\Register\signup1.html" color="white">Sign Up</a></li>-->
				<li class="Logout"><a href="A:\Programming Files\Project X\Register\signup1.html" color="white"><span class="glyphicon glyphicon-off"></span> Logout</a></li>
			</ul>
		</div>
		<div class="content">
			<button id="resume">DOWNLOAD RESUME</button>
			<div id="design">
				<div id="one">
				</div>
				<div id="two">
				</div>
				<div id="three">
				</div>
				<div id="four">
				</div>
				<div id="five">
				</div>
				<div id="six">
				</div>
			</div>
			<div class="container">
				<div class="modify">
					<div class="inner">
						<p style="font-size: 30px ;margin-top: 50px;"><strong>Saish Mohare</strong></p>
						<p id="p1" style="margin-top: 15px;">saishmohare8797@gmail.com</p>
						<p>9167485516</p>
						<p>Kalyan</p>
						<hr/>
						<div class="activities">
							<div class="subheading">
								<p>COCURRICULAR</p>
							</div>
							<div class="main">
								<p><strong>Big Data Workshop</strong></p>
								<p>A workshop on big data</p>
								<p><strong>Data collection system</strong></p>
								<p>A web development project on data collection system</p>
							</div>
							<div class="links" style="margin-left:60%;"  >
								<link ><a  style="cursor:pointer;list-style-type:none;"  onclick="cocurrics()">+view more</a></link>
								<a href="#" style="margin-right: 30px; text-decoration: none;">+add actitivity</a>
							</div>
							<div id ="detailcoinfo" class="detailcoinfo">
								<a href="javascript:void(0)" class="closeCobtn" onclick="closeCo()">&times;</a>

								<p>The Co-curricular detail  of the student will be displayed in this section</p>
							</div>
						</div>
						<hr>
						<div class="activities">	
							<br>
							<div class="subheading">
								<p>EXTRACURRICULAR</p>
							</div>
							<div class="main">
								<p><strong>Member of SoRT Council</strong></p>
								<p>Active member or the SoRT student council</p>
								<p><strong>Literature events</strong></p>
								<p>Active participation in the literature events</p>
							</div>
							<div class="links" style="margin-left:60%;"  >
								<link ><a  style="cursor:pointer;list-style-type:none;"  onclick="extracurrics()">+view more</a></link>
								<a href="#" style="margin-right: 30px; text-decoration: none;">+add actitivity</a>
							</div>
							<br>
						</div>
						<div id ="detailextrainfo" class="detailextrainfo">
							<a href="javascript:void(0)" class="closeExtrabtn" onclick="closeExtra()">&times;</a>

							<p>The extra-curricular detail  of the student will be displayed in this section</p>
						</div>
					</div>
				</div>
			</div>
			<div class="chart">
		
                <!--Varun's code here-->    
            </div>
		</div>
		<div class="footer">
			<div class="links" style="margin-left:40%;"  >
							<a href="#" style="margin-right: 30px; text-decoration: none;">About us</a>
							<a href="#" style="margin-right: 30px; text-decoration: none;">Contact us</a>
							<a href="#" style="margin-right: 30px; text-decoration: none;">Top</a>
			</div>
		</div>
	<script>	
		function extracurrics(){
		document.getElementById("detailextrainfo").style.width = "100%";
		window.scrollTo(0,0);
	}
	function closeExtra() {
		document.getElementById("detailextrainfo").style.width = "0%";
	}
	function cocurrics(){
		document.getElementById("detailcoinfo").style.width = "100%";
		window.scrollTo(0,0);
	}
	function closeCo() {
		document.getElementById("detailcoinfo").style.width = "0%";
	}
	</script>
	</body>

</html>