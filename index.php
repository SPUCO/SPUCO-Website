<?php
include('layouts/header.php');
?>

<!------------- Website Messages----------->
<p style="color: red; font-weight: bold; text-align: center" class="text-center"><?php if(isset($_GET['error'])){ echo $_GET['error']; }?></p>
<p style="color: green" class="text-center"><?php if(isset($_GET['message'])){ echo $_GET['message']; }?></p>

<!------------- Body Header ----------->
<div class="container">
	<div class="bodydiv1" style="margin-left: 5vw; margin-top: 10vh">
		<h1>Welcome To SPU CODERS</h1>
		<p style="font-weight: bold">Shaping the future with technology</p>
		<a href="<?php echo "about.php"; ?>" class="btn" style="background-color: green">Learn More &#8594;</a>
	</div>
</div>

<!------- Slideshow ----------->
<div class="categories">
   <h3 class="title">SPU CODERS</h3>
	<div class="small-container">
		<div class="row">
			<div class="col-3">
				<img src="assets/images/coding_pics1.jpeg" alt="Snow" style="border-radius: 11%">
			</div>
			<div class="col-3">
				<img src="assets/images/coding_pics2.jpg" alt="Snow" style="border-radius: 11%">
			</div>
			<div class="col-3">
				<img src="assets/images/coding_pics3.jpg" alt="Snow" style="border-radius: 11%">
			</div>
		</div>
	</div>
</div>

<!------- Club Details ----------->
<h2 class="title">What is SPUCO?</h2>
<div class="container">
	<div class="row">
		<p>The SPUCO Is Established As An Organization That Aims To Foster, Aid, Inspire And Motivate Students To Broaden Their Skill And Knowledge In Coding. The University Main Focus Is Theory Aspect Of Programming, The SPUCO Is A Platform That Aims To Improve And Focus On The Technical Aspect Of Programming, Which Is Coding. In Achieving This The Club Aims To Organize And Promote Social Activities For Students Specifically Coding Competitions.<br><br></p>
	</div>
</div>


<!----------- Programming Languages ---------->
<h3 class="title">PROGRAMMING LANGUAGES</h3>
<div class="container">
    <div class="programming_languages">
		<div class="row">
			<div class="col-5">
				<img src="assets/images/html_pic.png" alt="Snow">
			</div>
			<div class="col-5">
				<img src="assets/images/css_pic.png" alt="Snow">
			</div>
			<div class="col-5">
				<img src="assets/images/javascript_pic.jpg" alt="Snow">
			</div>
			<div class="col-5">
				<img src="assets/images/php_pic.png" alt="Snow">
			</div>
			<div class="col-5">
				<img src="assets/images/sql_pic.png" alt="Snow">
			</div>
			<div class="col-5">
				<img src="assets/images/python_pic.png" alt="Snow">
			</div>
			<div class="col-5">
				<img src="assets/images/java_pic.png" alt="Snow">
			</div>
			<div class="col-5">
				<img src="assets/images/c++_pic.jpg" alt="Snow">
			</div>
			<div class="col-5">
				<img src="assets/images/csharp_pic.png" alt="Snow">
			</div>
			<div class="col-5">
				<img src="assets/images/github_pic.png" alt="Snow">
			</div>
		</div>
	</div>
</div>
	  
<!----------- Coding Resources ---------->
<h3 class="title">CODING RESOURCES</h3>
<div class="container">
    <div class="row">
		<div class="col-5">
			<img src="assets/images/google_pic.png" alt="Snow">
		</div>
		<div class="col-5">
			<img src="assets/images/microsoft_pic.png" alt="Snow">
		</div>
		<div class="col-5">
			<img src="assets/images/ibm_pic.jpg" alt="Snow">
		</div>
		<div class="col-5">
			<img src="assets/images/cisco_pic.png" alt="Snow">
		</div>
		<div class="col-5">
			<img src="assets/images/moodle_pic.png" alt="Snow">
		</div>
	</div>
</div>

<?php
include('layouts/footer.php');
?>