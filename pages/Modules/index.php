<?php

require ('../../includes/init.php');

$query="SELECT * FROM `modules`";
$row=select($query);
$index=1;

include pathOf('includes/header.php');
include pathOf('includes/navbar.php');

?>

		   <!--end header wrapper-->
		<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Tables</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Data Table</li>
							</ol>
						</nav>
					</div>
					<div class="ms-auto">
							<button type="button" class="btn btn-light"><a href="Add.php">ADD MODULE</a></button>
					</div>
					
				</div>
				<!--end breadcrumb-->
				<h6 class="mb-0 text-uppercase">MODULES DATA</h6>
				<hr/>
				<div class="card">
					<div class="card-body">
						<div class="table-responsive">
							<table id="example" class="table table-striped table-bordered" style="width:100%">
								<thead>
									<tr>
										<th>Sr.No</th>
										<th>Module Name</th>
										<th>Modify</th>
										<th>Delete</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach($row as $data) { ?>
									<tr>
										<td><?= $index++ ?></td>
										<td><?= $data['Name'] ?></td>
										<td><a href="Update.php?updateid=<?=$data['Id']?>" class="btn btn-primary active" aria-current="page">Update</a></td>
										<td><button type="button" class="btn btn-danger active" aria-current="page" onclick="deleteData(<?= $data['Id']?>)">Delete</button></td>
									</tr>
									<?php } ?>
								<tfoot>
								<tr>
										<th>Sr.No</th>
										<th>Module Name</th>
										<th>Modify</th>
										<th>Delete</th>
									</tr>
								</tfoot>
							</table>
						</div>
					</div>
				</div>
	
<?php

include pathOf('includes/footer.php');
include pathOf('includes/scripts.php');

?>

<script>
	function deleteData(id){
		if(confirm("Are you sure you want delete this data....??"));

		$.post('../../api/Modules/delete.php',{
			id:id,
			success:function(response){
				if(response==0)
				return window.location='../../pages/Modules';

				window.alert("Module deleted successfully....!!!");
				window.location.href='../../pages/Modules';
			}
		})
	}
</script>

<?php

include pathOf('includes/pageEnd.php');

?>
