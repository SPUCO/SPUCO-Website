<?php
include('layouts/header.php');
//if user is not logged in then take user to login page
if(!isset($_SESSION['logged_in'])){
  header('location: login.php');
  exit;
}
include('server/getmembershipaccount.php');
?>

<!--------- Account-page ------------>
	<section class="my-5 py-5" id="account-page">
		<div class="container my-5 py-3">
			<div class="text-center mt-3 pt-5 col-lg-6 col-md-12 col-sm-12">
				<p class="text-center" style="color: green"><?php if(isset($_GET['registermessage'])){ echo $_GET['registermessage']; }?></p>
				<p class="text-center" style="color: green"><?php if(isset($_GET['loginmessage'])){ echo $_GET['loginmessage']; }?></p>
				<p class="text-center" style="color: green"><?php if(isset($_GET['paymentmessage'])){ echo $_GET['paymentmessage']; }?></p>
				<h3 class="font-weight-bold">Account Info</h3>
				<hr class="mx-auto">
				<div class="accountinfo">
					<span><img style="width: 140px; height: 140px; border-radius: 50%" src="<?php if(isset($_SESSION['flduserimage'])){ echo "assets/images/".$_SESSION['flduserimage']; }else{ echo "assets/images/unknownimage.png"; }?>" alt="snow"></span>
					<p>Name: <span><?php if(isset($_SESSION['flduserfirstname'])){ echo $_SESSION['flduserfirstname']; echo " "; if(isset($_SESSION['flduserlastname'])){ echo $_SESSION['flduserlastname']; }}?></span></p>
					<p>Email: <span><?php if(isset($_SESSION['flduseremail'])){ echo $_SESSION['flduseremail']; }?></span></p>
					<p><a href="editprofile.php?flduserid=<?php if(isset($_SESSION['flduserid'])){ echo $_SESSION['flduserid']; }else{ header('location: editprofile.php?error=Opps error, try again.'); } ?>" id="logoutbtn" name="editprofile">Edit Profile</a></p>
					<p><a href="#orders" id="ordersbtn">Updates</a></p>
					<p><a href="codingcourses.php?flduserid=<?php if(isset($_SESSION['flduserid'])){ echo $_SESSION['flduserid']; }else{ header('location: editprofile.php?error=Opps error, try again.'); } ?>" id="logoutbtn" name="codingcourses">Coding Courses</a></p>
					<p><a href="learnprogramminglanguageindex.php?flduserid=<?php if(isset($_SESSION['flduserid'])){ echo $_SESSION['flduserid']; }else{ header('location: editprofile.php?error=Opps error, try again.'); } ?>" id="logoutbtn" name="learnprogramminglanguageindex">Learn a Programming Language</a></p>
					<p><a href="settings.php?flduserid=<?php if(isset($_SESSION['flduserid'])){ echo $_SESSION['flduserid']; }else{ header('location: editprofile.php?error=Opps error, try again.'); } ?>" id="logoutbtn" name="settings">Settings</a></p>						
					<p><a href="membershipaccount.php?logout=1" id="logoutbtn" name="logout">Logout</a></p>
				</div>
			</div>
		</div>
	</section><br><br><br><br><br><br><br><br><br>

	<!--------- Updates --------->
	<section id="orders" class="orders container my-5 py-3">
		<div class="container mt-2">
			<h2 class="font-weight-bold text-center">Updates</h2>
			<hr class="mx-auto">
		</div>
		<table class="mt-5 pt-5">
			<tr>
				<th>Update Info</th>
				<th>Update Date</th>
			</tr>
			<?php while($row = $updates->fetch_assoc()) { ?>
				<tr>
					<td>
						<span><?php echo $row['fldupdatestext']; ?></span>
					</td>
					<td>
						<span><?php echo $row['fldupdatesdate']; ?></span>
					</td>
					<td>
						<form method="POST" action="membershipaccount.php">
							<input type="hidden" name="flduserid" value="<?php echo $row['flduserid']; ?>"/>
							<input class="btn" name="refreshbtn" type="submit" value="Refresh.."/>
						</form>
					</td>
				</tr>
			<?php }?>
		</table>
		<div id="accountbottomspace"></div>
	</section>
</body>
</html>