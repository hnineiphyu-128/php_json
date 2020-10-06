<?php require "header.php"; ?>

<script>
	$(document).ready(function()
	{
		$('#editStudentdiv').hide();

		showStudentlist();

		function showStudentlist()
		{
			$.get('studentlist.json',function(response){
				// console.log(response);
				if (response) 
				{
					console.log(typeof(response));

					//string
					// var studentObjArray = JSON.parse(response);
					// console.log(studentObjArray);

					var j=1;
					var html = '';
					$.each(response,function(i,v){
						var name = v.name;
						var gender = v.gender;
						var email = v.email;
						var profile = v.profile;

						console.log(profile);

						html += `<tr>
						<td> ${j++} </td>
						<td> 
							<img src="${profile}" alt="Profile" width="100" height="70"/>
							${name} 
						</td>
						<td> ${gender} </td>
						<td> ${email} </td>
						<td>
						<button class="detail btn btn-outline-success border border-success" style="border: none; border-radius: 5px;" data-id="${i}" data-toggle="modal" data-target="#detailModal"><i class="fas fa-eye"></i></button>
						<button  class="edit btn btn-outline-warning border border-warning"  style="border: none; border-radius: 5px;" data-id="${i}"><i class="fas fa-edit"></i></button>
						<button  class="delete btn btn-outline-danger border border-danger" style="border: none; border-radius: 5px;" data-id="${i}"><i class="fas fa-trash"></i></button>
						</td>
						</tr>`;
					})
					$('tbody').html(html);
				}
			})
		}

		$('tbody').on('click','.edit',function(){
			var id = $(this).data('id');
			console.log(id);

			$.get('studentlist.json',function(response){
				if(response)
				{

					var studentObjArray = response;

					var name = studentObjArray[id].name;
					var email = studentObjArray[id].email;
					var address = studentObjArray[id].address;
					var gender = studentObjArray[id].gender;
					var profile = studentObjArray[id].profile;

					$('#edit_name').val(name);
					$('#edit_email').val(email);
					$('#edit_address').val(address);

					if (gender == "Male") 
					{
						$('#edit_male').attr('checked','checked');
					}
					else{
						$('#edit_female').attr('checked','checked');
					}

					// image show
					$('#showOldPhoto').attr('src',profile);

					//hidden value
					$('#edit_id').val(id);
					$('#edit_oldprofile').val(profile);

					$("#editStudentdiv").show();
					$("#addStudentdiv").hide();

					showStudentlist();
				}
			})
		})

		$('tbody').on('click','.detail',function(){
			var id = $(this).data('id');
			console.log(id);

			$.get('studentlist.json',function(response){
				var studentObjArray = response;

				var name = studentObjArray[id].name;
				var email = studentObjArray[id].email;
				var address = studentObjArray[id].address;
				var gender = studentObjArray[id].gender;
				var profile = studentObjArray[id].profile;

				$('#detail_name').text(name);
				$('#detail_email').text(email);
				$('#detail_address').text(address);
				$('#detail_gender').text(gender);
				
				// image show
				$('#detail_img').attr('src',profile);
			})
			$("#detailModal").modal('show');
		})

		$('tbody').on('click','.delete',function(){
			var id = $(this).data('id');
			var ans = confirm("Are You Sure To DELETE!!!");
			if (ans) {
				$.post('deletestudent.php',{id:id},function (response) {
					showStudentlist();
				})
			}
		})
		

	});
</script>

<div class="container" id="addStudentdiv">
	<div class="mt-5">
		<form action="addstudent.php" method="POST" enctype="multipart/form-data">
			<div class="row">
				<div class="col-12 text-center">
					<h1 class="display-4 text-info"> Add New Student</h1>
				</div>
				<div class="col-2 mt-3">
					Profile:
				</div>
				<div class="col-10 mt-3">
					<input type="file" name="profile" class="p-image">
				</div>
				<div class="col-2 mt-3">
					Name:
				</div>
				<div class="col-10 mt-3">
					<input type="text" name="name" class="p-blank" placeholder="Enter Name">
				</div>
				<div class="col-2 mt-3">
					Email:
				</div>
				<div class="col-10 mt-3">
					<input type="email" name="email" class="p-blank" placeholder="Enter Email">
				</div>
				<div class="col-2 mt-3">
					Gender:
				</div>
				<div class="col-10 mt-3">
					<input type="radio" name="gender" value="Male" class="p-gender" checked>Male<br>
					<input type="radio" name="gender" value="Female" class="p-gender">Female
				</div>
				<div class="col-2 mt-3">
					Address:
				</div>
				<div class="col-10 mt-3">
					<textarea type="text" name="address" class="p-blank" rows="5" placeholder="Enter Address"></textarea>
				</div>
				<div class="col-12 mt-3">
					<input type="submit" class="btn btn-outline-primary border border-primary" value="SEND" style="border: none; border-radius: 5px;">
				</div>
			</div>
		</form>
	</div>
</div>

<div class="container" id="editStudentdiv">
	<div class="mt-5">
		<form action="updatestudent.php" method="POST" enctype="multipart/form-data">
			<input type="hidden" name="edit_id" id="edit_id">
			<input type="hidden" name="edit_oldprofile" id="edit_oldprofile">
			<div class="row">
				<div class="col-12 text-center">
					<h1 class="display-4 text-success"> Edit Existing Student</h1>
				</div>
				<div class="col-2 mt-3">
					Profile:
				</div>
				<div class="col-10 mt-3">
					<ul class="nav nav-tabs">
						<li class="nav-item">
							<a href="#old" class="nav-link active" data-toggle="tab">Old Profile</a>
						</li>
						<li class="nav-item">
							<a href="#new" class="nav-link" data-toggle="tab">New Profile</a>
						</li>
					</ul>	

					<div class="tab-content">
						<div class="tab-pane fade show active" id="old">
							<img src="" id="showOldPhoto" class="img-fluid">
						</div>
						<div class="tab-pane fade" id="new">
							<div class="col-10 mt-3">
								<input type="file" name="edit_newprofile" class="p-image">
							</div>
						</div>
					</div>		
				</div>
				<div class="col-2 mt-3">
					Name:
				</div>
				<div class="col-10 mt-3">
					<input type="text" name="edit_name" id="edit_name" class="p-blank" placeholder="Enter Name">
				</div>
				<div class="col-2 mt-3">
					Email:
				</div>
				<div class="col-10 mt-3">
					<input type="email" name="edit_email" id="edit_email" class="p-blank" placeholder="Enter Email">
				</div>
				<div class="col-2 mt-3">
					Gender:
				</div>
				<div class="col-10 mt-3">
					<input type="radio" name="edit_gender" id="edit_male" class="p-gender" value="Male">Male<br>
					<input type="radio" name="edit_gender" id="edit_female" class="p-gender" value="Female">Female
				</div>
				<div class="col-2 mt-3">
					Address:
				</div>
				<div class="col-10 mt-3">
					<textarea type="text" name="edit_address" id="edit_address" class="p-blank" rows="5" placeholder="Enter Address"></textarea>
				</div>
				<div class="col-12 mt-3">
					<input type="submit" class="btn btn-outline-primary border border-primary" value="UPDATE" style="border: none; border-radius: 5px;">
				</div>
			</div>
		</form>
	</div>
</div>

<div class="container" id="StudnetList">
	<div class="row">
		<div class="col-12 mt-3 mb-3">
			<table cellpadding="10px">
				<thead>
					<tr>
						<th>#</th>
						<th>Name</th>
						<th>Gender</th>
						<th>Email</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					
				</tbody>
				<!-- <tr>
					<td>1</td>
					<td>Min Khant</td>
					<td>Male</td>
					<td>minkhant22334456@gmail.com</td>
					<td>
						<input type="submit" class="btn bg-success" value="Detail" style="border: none; border-radius: 5px;">
						<input onclick="myfunction()" type="submit" class="btn bg-warning" value="Edit" style="border: none; border-radius: 5px;">
						<input type="submit" class="btn bg-danger" value="Delete" style="border: none; border-radius: 5px;">
					</td>
				</tr> -->
			</table>
		</div>
	</div>
</div>



<!-- Modal -->
<div class="modal fade" id="detailModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel">Student Detail</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      	<div class="row">
      		<div class="col-md-12">
      			<img src="" class="img-fluid" id="detail_img">
      		</div>
      		<div class="row col-md-12 mt-3">
				<div class="col-md-3">
					<h6>Name is </h6>
				</div>
				<div class="col-md-9">
					<p id="detail_name"></p>
				</div>

	  			<div class="col-md-3">
					<h6>Email is </h6>
				</div>
				<div class="col-md-9">
					<p id="detail_email"></p>
				</div>

	  			<div class="col-md-3">
					<h6>Gender is </h6>
				</div>
				<div class="col-md-9">
					<p id="detail_gender"></p>
				</div>

	  			<div class="col-md-3">
					<h6>Address is </h6>
				</div>
				<div class="col-md-9">
					<p id="detail_address"></p>
				</div>	  			
      		</div>
      	</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<?php require "footer.php"; ?>

