<?php

require('../../includes/init.php');

$UserId = $_SESSION['UserId'];
$permissions = authenticate('Expenses', $UserId);
if ($permissions['AddPermission'] != 1)
    header('Location: ./index');


include pathOf('includes/header.php');
include pathOf('includes/navbar.php');

?>

<div class="page-wrapper">
			<div class="page-content">
		<div class="section-authentication-cover">
			<div class="">
				<div class="row g-0">

					<div class="col-12 col-xl-7 col-xxl-8 auth-cover-left align-items-center justify-content-center d-none d-xl-flex">

                        <div class="card shadow-none bg-transparent shadow-none rounded-0 mb-0">
							<div class="card-body">
                                 <img src="<?= urlOf('assets/images/login-images/login-cover.svg') ?>" class="img-fluid auth-img-cover-login" width="650" alt=""/>
							</div>
						</div>
						
					</div>

					<div class="col-12 col-xl-5 col-xxl-4 auth-cover-right bg-light align-items-center justify-content-center">
						<div class="card rounded-0 m-3 shadow-none bg-transparent mb-0">
							<div class="card-body p-sm-5">
								<div class="">
									<div class="mb-3 text-center">
										<img src="<?= urlOf('assets/images/logo-icon.png') ?>" width="60" alt="">
									</div>
									<div class="text-center mb-4">
										<h5 class="">Add Expense</h5>
									</div>
									<div class="form-body">
										<form class="row g-3">
											<!-- <div class="col-12">
												<label for="inputEmailAddress" class="form-label">Sr.No</label>
												<input type="text" class="form-control" id="id" placeholder="Enter Sr.No">
											</div> -->
											<div class="col-12">
												<label for="inputChoosePassword" class="form-label">Name</label>
													<input type="text" class="form-control border-end-0" id="name"  placeholder="Enter Expense Name" autofocus>
											</div>
                                            <div class="col-12">
												<label for="inputChoosePassword" class="form-label">Amount</label>
													<input type="text" class="form-control border-end-0" id="amount"  placeholder="Enter Amount">
											</div>
											<div class="col-12">
												<div class="d-grid">
													<button type="submit" class="btn btn-light" onclick="sendData()">ADD</button>
												</div>
											</div>
											
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>
				<!--end row-->
			</div>
		</div>
	</div>
	<!--end wrapper-->
	<!--start switcher-->
<?php

include pathOf('includes/footer.php');
include pathOf('includes/scripts.php');

?>

<script>
	function sendData(){
		
		$.ajax({
			url:'../../api/Expenses/insert.php',
			type:'POST',
			data:{
				name:$('#name').val(),
				amount:$('#amount').val()	
			},
			success:function(response){
				if(response==0)
				// window.location='../../pages/Expenses';

				window.alert("Data Added Successfully......");
				window.location.href='../../pages/Expenses';

			}

		})

	}
</script>

<?php

include pathOf('includes/pageEnd.php');

?>
