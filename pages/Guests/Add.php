<?php

require('../../includes/init.php');
include pathOf('includes/header.php');
include pathOf('includes/navbar.php');

?>

	<!--wrapper-->
	<div class="page-wrapper">
			<div class="page-content">
		<div class="section-authentication-cover">
			<div class="">
				<div class="row g-0">

					<div class="col-12 col-xl-7 col-xxl-8 auth-cover-left align-items-center justify-content-center d-none d-xl-flex">

                        <div class="card shadow-none bg-transparent shadow-none rounded-0 mb-0">
							<div class="card-body">
                                 <img src="<?= urlOf('assets/images/login-images/guest.jpg') ?>" class="img-fluid auth-img-cover-login" width="1000" alt=""/>
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
										<h5 class="">Add Guest</h5>
									</div>
									<div class="form-body">
										<form class="row g-3">
											<div class="col-12">
												<label for="inputEmailAddress" class="form-label">Sr.No</label>
												<input type="text" class="form-control" id="id" placeholder="Enter Sr.No">
											</div>
                                            <div class="col-12">
												<label for="inputEmailAddress" class="form-label">AllotedRoomNo</label>
												<input type="text" class="form-control" id="allotedroomid" placeholder="Enter AllotedRoomNo">
											</div>
											<div class="col-12">
												<label for="inputChoosePassword" class="form-label">Name</label>
													<input type="text" class="form-control border-end-0" id="name"  placeholder="Enter Name">
											</div>
                                            <div class="col-12">
												<label for="inputChoosePassword" class="form-label">Mobile No</label>
													<input type="text" class="form-control border-end-0" id="mobile"  placeholder="Enter Mobile No">
											</div>
                                            <div class="col-12">
												<label for="inputChoosePassword" class="form-label">Address</label>
													<input type="text" class="form-control border-end-0" id="address"  placeholder="Enter Address">
											</div>
                                            <div class="col-12">
												<label for="inputChoosePassword" class="form-label">E-mail</label>
													<input type="text" class="form-control border-end-0" id="email"  placeholder="Enter E-mail">
											</div>
											<div class="col-12">
												<label for="inputChoosePassword" class="form-label">CheckInTime</label>
													<input type="text" class="form-control border-end-0" id="intime"  placeholder="Enter CheckInTime">
											</div> <div class="col-12">
												<label for="inputChoosePassword" class="form-label">CheckOutTime</label>
													<input type="text" class="form-control border-end-0" id="outtime"  placeholder="Enter CheckOutTime">
											</div>
											<div class="col-12">
												<label for="inputChoosePassword" class="form-label">TotalPrice</label>
													<input type="text" class="form-control border-end-0" id="totalprice"  placeholder="Enter TotalPrice">
											</div>
											<div class="col-12">
												<label for="inputChoosePassword" class="form-label">IdentityImageFile</label>
													<input type="text" class="form-control border-end-0" id="imagefile"  placeholder="Enter IdentityImageFile">
											</div>
											
											
											<div class="col-12">
												<div class="d-grid">
													<button type="submit" class="btn btn-light">ADD</button>
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
include pathOf('includes/pageEnd.php');

?>
