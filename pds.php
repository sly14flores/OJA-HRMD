<?php 
	require_once('essential/session.php');
	require_once('essential/connection.php');
	require_once('essential/errorDescription.php');
	$con=mysqli_connect($DB_HOST,$DB_USER,$DB_PASS,$DB_SCHEMA);

?>
 
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="../../../images/home/icon/pglu.ico" type="image/x-icon">
	
    <!-- Latest compiled and minified CSS -->
	<link href="css/bootstrap.css" rel="stylesheet"/>
	<link href="css/bootstrap-submenu.min.css" rel="stylesheet" />
	<link rel="stylesheet" type="text/css" href="css/bootstrap-select.css" />
	<link rel="stylesheet" type="text/css" href="css/jquery.growl.css" />
	<link rel="stylesheet" type="text/css" href="css/bootstrap-table.min.css" />
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="css/jquery.feedBackBox.css" />
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />

	<!-- Optional theme -->
	
	
	<!-- edit style css -->
	<link rel="stylesheet" href="css/style.css" type="text/css" />

	<!-- Latest compiled and minified JavaScript -->

 </head>
<body>
<!------------------------------------------------------------- header ------------------------------------------------------------>
<header class="navbar">
	<!-- Fixed navbar -->
    <div class="navbar navbar-default nav-bg navbar-fixed-top" role="navigation">
      <div class="container">
		  <div class="row">
			<div class="col-md-12">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="home.php" style="color: #e8e8e8;">PGLU OJA</a>
				</div>

				<div id="navHeader" class="navbar-collapse collapse">
					<?php
						require_once('essential/navigation.php');
					?>
				</div>
			</div>
		  </div>
	  </div>
    </div>
</header>
<!------------------------------------------------------------- end header ------------------------------------------------------------>


<!------------------------------------------------------------- content ------------------------------------------------------------>
<div class="container content">
	<div class="row">
	<!-- col-md-12 -->
	<!-- breadcrumb -->
			<div id="div-breadcrumb" class="col-md-12">
				<?php
					require_once('essential/breadcrumb.php');
					Bpds();
				?>
			</div>
	<!-- end breadcrumb -->
	<!-- end col-md-12 -->
	</div>

	<div class="row">
		<div class="col-md-12">
			<div class="card bg-main">

				<ul class="nav nav-tabs" role="tablist" style="font-size:11px;">
					<li id="pInfo" class="active" role="presentation"><a href="#personalinfo" aria-controls="profile" role="tab" data-toggle="tab">I. Personal Information</a></li>
					<li role="presentation"><a href="#familybg" aria-controls="home" role="tab" data-toggle="tab">II. Family Background</a></li>
					<li role="presentation"><a href="#educationalbg" aria-controls="messages" role="tab" data-toggle="tab">III. Educational Background</a></li>
					<li role="presentation"><a href="#csc" aria-controls="messages" role="tab" data-toggle="tab">IV. Civil Service</a></li>
					<li role="presentation"><a href="#workexper" aria-controls="messages" role="tab" data-toggle="tab">V. Work Experience</a></li>
					<li role="presentation"><a href="#voluntary" aria-controls="messages" role="tab" data-toggle="tab">VI. Voluntary Work</a></li>
					<li role="presentation"><a href="#training" aria-controls="messages" role="tab" data-toggle="tab">VII. Training</a></li>
					<li role="presentation"><a href="#other" aria-controls="messages" role="tab" data-toggle="tab">VIII. Others</a></li>
				</ul>

				<div class="tab-content">
		
							<div id="personalinfo" class="tab-pane fade in active">

								<div class="row">
								
									<div class="col-sm-12">
										<div class="row">
											
											<div class="col-sm-12 form-group">
												<h4>I. Personal Information</h4>
												<hr>
											</div>
											
											<div class="col-sm-3 form-group">
												<label>Surename</label>
												<input type="text" placeholder="Sure Name" class="form-control" required>
											</div>
											
											<div class="col-sm-3 form-group">
												<label>First Name</label>
												<input type="text" placeholder="First Name" class="form-control" required>
											</div>
											
											<div class="col-sm-3 form-group">
												<label>Middle Name</label>
												<input type="text" placeholder="Middle Name" class="form-control">
											</div>
											
											<div class="col-sm-3 form-group">
												<label>Name Extension (e.g. Jr., Sr.)</label>
												<input type="text" placeholder="(e.g. Jr., Sr.)" class="form-control">
											</div>
				 
										</div>
								
								
										<div class="row">
											<div class="col-sm-3 form-group">
												<label>Date of Birth (mm/dd/yyyy)</label>
												<div id="datetimepicker4" class="input-append">
													<input class="form-control" data-format="yyyy/MM/dd" type="date">
													<span class="add-on">
													  <i data-time-icon="icon-time" data-date-icon="icon-calendar">
													  </i>
													</span>
												</div>
											</div>	
											<div class="col-sm-3 form-group">
												<label>Place of Birth</label>
												<input type="text" placeholder="Place of Birth" class="form-control" required>
												
											</div>	
											<div class="col-sm-2 form-group">
												<label>Sex</label>
												<select class="selectpicker form-control" data-live-search="true">
		                                              <option id="regSex" value="male">Male</option>
		                                              <option value="female">Female</option>
												</select>
											</div>	
											<div class="col-sm-2 form-group">
												<label>Civil Status</label>
												<select id="regCivilStatis" class="selectpicker form-control" data-live-search="true">
												  <option value="single">Single</option>
	                                              <option value="married">Married</option>
	                                              <option value="divorced">Divorced</option>
	                                               <option value="widowed">Widowed</option>
												</select>
											</div>
											<div class="col-sm-2 form-group">
												<label>Citizenship</label>											
												<input type="text" placeholder="Citizenship" class="form-control">
											</div>
										</div>
										
										<div class="row">	
											<div class="col-sm-1 form-group">
												<label>Height <small>(m)</small></label>
												<input type="text" placeholder="Height (m)" class="form-control" required>
												
											</div>	
											<div class="col-sm-1 form-group">
												<label>Weight <small>(kg)</small></label>
												<input type="text" placeholder="Weight (kg)" class="form-control" required>
											</div>	
											<div class="col-sm-2 form-group">
												<label>Blood Type</label>
												<input type="text" placeholder="Blood Type" class="form-control" required>
											</div>
											<div class="col-sm-2 form-group">
												<label>GSIS ID No.</label>
												<input type="text" placeholder="ID No." class="form-control" required>
											</div>
											<div class="col-sm-2 form-group">
												<label>PAG-IBIG ID No.</label>
												<input type="text" placeholder="ID No." class="form-control" required>
											</div>
											<div class="col-sm-2 form-group">
												<label>PhilHealth No.</label>
												<input type="text" placeholder="PhilHealth No." class="form-control" required>
											</div>
											<div class="col-sm-2 form-group">
												<label>SSS No.</label>
												<input type="text" placeholder="SSS No." class="form-control" required>
											</div>
										</div>
										
										<div class="row">
											<div class="col-sm-3 form-group">
												<label><strong style="color:#940101;">Residential Address</strong> Province</label>
												<select id='resProvince' class="selectpicker form-control" data-live-search="true">
                                                <?php
                                                    $sql="SELECT province_pk, province from m_province order by province";
                                                    $myQuery=mysqli_query($con,$sql);
                                                    while($myResult = mysqli_fetch_array($myQuery))
                                                    {
                                                        echo "<option value='".$myResult['province_pk']."' >".$myResult['province']."</option>";
                                                    }
                                                ?>
												</select>
											</div>	
											<div class="col-sm-3 form-group">
												<label>Municipality</label>
												<select id='resMunicipality' class="selectpicker form-control" data-live-search="true">
												  
												</select>
											</div>	
											<div class="col-sm-3 form-group">
												<label>Barangay</label>
												<select id='resBarangay' class="selectpicker form-control" data-live-search="true">
												  
												</select>
											</div>
											<div class="col-sm-1 form-group">
												<label>ZIP Code</label>
												<input type="number" placeholder="Code" class="form-control">
											</div>
											<div class="col-sm-2 form-group">
												<label>Telephone No.</label>
												<input type="text" placeholder="Tel. No." class="form-control">
											</div>
										</div>
										
										<div class="row">
											<div class="col-sm-3 form-group">
												<label><strong style="color:#940101;">Permanent Address</strong> Province</label>
												<select id="perProvince" class="selectpicker form-control" data-live-search="true">
												  <?php
                                                    $sql="SELECT province_pk, province from m_province order by province";
                                                    $myQuery=mysqli_query($con,$sql);
                                                    while($myResult = mysqli_fetch_array($myQuery))
                                                    {
                                                        echo "<option value='".$myResult['province_pk']."' >".$myResult['province']."</option>";
                                                    }
                                                ?>
												</select>
											</div>	
											<div class="col-sm-3 form-group">
												<label>Municipality</label>
												<select id='perMunicipality' class="selectpicker form-control" data-live-search="true">
												  
												</select>
											</div>	
											<div class="col-sm-3 form-group">
												<label>Barangay</label>
												<select id='perBarangay' class="selectpicker form-control" data-live-search="true">
												  
												</select>
											</div>
											<div class="col-sm-1 form-group">
												<label>ZIP Code</label>
												<input type="number" placeholder="Code" class="form-control">
											</div>
											<div class="col-sm-2 form-group">
												<label>Telephone No.</label>
												<input type="text" placeholder="Tel. No." class="form-control">
											</div>
										</div>
										
										<div class="row">
											<form role="form" id="formLogin">
											<div class="col-sm-3 form-group">
												<label>Email Address</label>
												<input type="email" id="loginTxtUsername" placeholder="Email Address Here.." class="form-control">

											</div>
											</form>
											<div class="col-sm-3 form-group">
												<label>Cellphone No.</label>
												<input type="text" placeholder="Phone Number Here.." class="form-control">
											</div>
											<div class="col-sm-3 form-group">
												<label>Agency Employee No.</label>
												<input type="text" placeholder="Employee No. Here.." class="form-control">
											</div>
											<div class="col-sm-3 form-group">
												<label>TIN</label>
												<input type="text" placeholder="TIN Here.." class="form-control">
											</div>
										</div>
									</div>
								</div>
							</div>
							<div id="familybg" class="tab-pane fade">
								<div class="row">
									<div class="col-sm-12">
										<div class="row">
											<div class="col-sm-12 form-group">
												<h4>II. Family Background</h4>
												<hr>
											</div>

										</div>
										<!-- group family -->
										<div class="row">
											<div class="col-sm-4 form-group">
												<label>Spouse's Lastname</label>
												<input id="fbSpouseLname" type="text" id="" placeholder="Lastname..." class="form-control" required>
											</div>
											<div class="col-sm-4 form-group">
												<label>Firstname</label>
												<input id="fbSpouseFname" type="text" id="" placeholder="Firstname..." class="form-control" required>
											</div>
											<div class="col-sm-4 form-group">
												<label>Middlename</label>
												<input id="fbSpouseMname" type="text" id="" placeholder="Middlename..." class="form-control" required>
											</div>
										</div>

										<div class="row">
											<div class="col-sm-3 form-group">
												<label>Occupation</label>
												<input id="fbOccupation" type="text" placeholder="Occupation..." class="form-control" required>
											</div>
											<div class="col-sm-3 form-group">
												<label>Employer/Bus. Name</label>
												<input id="fbEmployer" type="text" placeholder="Employer/Bus. Name..." class="form-control" required>
											</div>
											<div class="col-sm-3 form-group">
												<label>Business Address</label>
												<input id="fbBAdd" type="text" placeholder="Business Address..." class="form-control" required>
											</div>
											<div class="col-sm-3 form-group">
												<label>Telephone No.</label>
												<input id="fbBTel" type="text" placeholder="Tel. No..." class="form-control" required>
											</div>
										</div>
										
										<div class="row">
											<div class="col-sm-12">
												<div class="tableBG">
													<table id="fbtblChild" data-toggle="table"
												   	data-sort-name="no" class="table table-bordered">
														<thead>
															<tr>
																<th  data-visible="true" data-checkbox="true"></th>
																<th data-field="child_PK">child_PK</th>
																<th class="text-center form-group" data-field="childFname" data-sortable="true"> Firstname </th>
																<th class="text-center form-group" data-field="childMname" data-sortable="true"> Middlename </th>
																<th class="text-center form-group" data-field="childLname" data-sortable="true"> Lastname </th>
																<th class="text-center  form-group" data-field="childBirth" data-sortable="true">Date of Birth (mm/dd/yyyy)</th>
															</tr>
														</thead>
													</table>
													<div class="row">
														<div class="col-sm-3 form-group">
															<label>First Name</label>
															<input id="fbchildFname" type="text" placeholder="First Name..." class="form-control" >
														</div>
														<div class="col-sm-3 form-group">
															<label>Middle Name</label>
															<input id="fbchildMname" type="text" placeholder="Middle Name..." class="form-control" >
														</div>
														<div class="col-sm-3 form-group">
															<label>Last Name</label>
															<input id="fbchildLname" type="text" placeholder="Last Name..." class="form-control" >
														</div>
														<div class="col-sm-3 form-group">
															<label>Birth Date</label>
															<input id="fbchildBirth" type="date" placeholder="Birth Date..." class="form-control" >
														</div>
													</div>

													<button id="fbbtnDelChild" class="btn btn-danger pull-right tblBottom" style="margin-left: 4px;">Del</button>
													<button id="fbbtnAddChild" class="btn btn-primary pull-right tblBottom">Add</button>
													<button id="fbbtnTest" class="btn btn-primary pull-right tblBottom" onClick="">Save</button>
													<div class="tclear"></div>
												</div>
											</div>
										</div>

									<!-- 	<div class="row">
											<div class="col-sm-12 form-group">
												<label><font style="color:#940101;">(Continue on separate sheet if necessary)</font></label>
											</div>
										</div> -->
										
										<div class="row">
											<div class="col-sm-4 form-group">
												<label>Father's Lastname</label>
												<input type="text" placeholder="Father's Surename..." class="form-control" required>
											</div>
											<div class="col-sm-4 form-group">
												<label>Firstname</label>
												<input type="text" placeholder="Firstname..." class="form-control" required>
											</div>
											<div class="col-sm-4 form-group">
												<label>Middlename</label>
												<input type="text" placeholder="Middlename..." class="form-control" required>
											</div>
										</div>
										
										<div class="row">
											<div class="col-sm-4 form-group">
												<label>Mother's Maidenname</label>
												<input type="text" placeholder="Mother's Maidenname..." class="form-control" required>
											</div>
											<div class="col-sm-4 form-group">
												<label>Firstname</label>
												<input type="text" placeholder="Firstname..." class="form-control" required>
											</div>
											<div class="col-sm-4 form-group">
												<label>Middlename</label>
												<input type="text" placeholder="Middlename..." class="form-control" required>
											</div>
										</div>
										
									</div>
									
								</div>

							</div>
											
							<div id="educationalbg" class="tab-pane fade">
							
								<div class="row">
								
									<div class="col-sm-12">
										<div class="row">
											
											<div class="col-sm-12 form-group">
												<h4>III. Educational Background</h4>
												<hr>
											</div>

										</div>	
										
										<!-- group Educational -->
										<div class="row">
											<div class="col-sm-12">
												<div class="tableBG">
													<table id="#" data-toggle="table"
												   	data-sort-name="no" class="table table-bordered">
														<thead>
															<tr>
																<th class="text-center col-sm-1 form-group" data-field="level" data-sortable="false">Level</th>
																<th class="text-center col-sm-3 form-group" data-field="school" data-sortable="true">Name of School</th>
																<th class="text-center col-sm-2 form-group" data-field="course" data-sortable="true">Degree Course</th>
																<th class="text-center col-sm-1 form-group" data-field="year" data-sortable="true">Year Graduated</th>
																<th class="text-center col-sm-1 form-group" data-field="grade" data-sortable="true">Highest Grade</th>
																<th class="text-center col-sm-1 form-group" data-field="from" data-sortable="true">Inclusive Dates of Attendance From</th>
																<th class="text-center col-sm-1 form-group" data-field="to" data-sortable="true">Inclusive Dates of Attendance To</th>
																<th class="text-center col-sm-2 form-group" data-field="scholarship" data-sortable="true">Scholarship</th>
															</tr>
														</thead>
														
														<!-- group elementary -->
														
													</table>

													<div class="row">
														<div class="col-sm-2 form-group">
															<label>Level</label>
															<select class="form-control">
																<option>Elementary</option>
																<option>Secondary</option>
																<option>Vocational / Trade Course</option>
																<option>College</option>
																<option>Graduate Studies</option>
															</select>
															
														</div>
														<div class="col-sm-3 form-group">
															<label>Name of School</label>
															<input type="text" placeholder="School..." class="form-control" required>
														</div>
														<div class="col-sm-3 form-group">
															<label>Degree Course</label>
															<input type="text" placeholder="Course..." class="form-control" required>
														</div>
														<div class="col-sm-2 form-group">
															<label>Year Graduated</label>
															<input type="date" placeholder="Year..." class="form-control" required>
														</div>
														<div class="col-sm-2 form-group">
															<label>Highest Grade</label>
															<input type="number" placeholder="Grade..." class="form-control" required>
														</div>
														
													</div>
													<div class="row">

														<div class="col-sm-3 form-group">
															<label>Inclusive Dates of Attendance</label>
															<input type="date" placeholder="From..." class="form-control" required>
														</div>
														<div class="col-sm-3 form-group">
															<label>Inclusive Dates of Attendance</label>
															<input type="date" placeholder="To..." class="form-control" required>
														</div>
														<div class="col-sm-6 form-group">
															<label>Scholarship</label>
															<input type="text" placeholder="Scholarship..." class="form-control" required>
														</div>
													</div>

													<button id="btnDekChild" class="btn btn-danger pull-right tblBottom" style="margin-left: 4px;">Del</button>
													<button id="btnAddChild" class="btn btn-primary pull-right tblBottom">Add</button>
													<div class="tclear"></div>
												</div>
											</div>
										</div>
										
									</div>
									
								</div>
								
							</div>

							<div id="csc" class="tab-pane fade">
					
								<div class="row">
									<div class="col-sm-12">
										<div class="row">
											
											<div class="col-sm-12 form-group">
												<h4>IV. Civil Service Eligibility</h4>
												<hr>
											</div>
				 
										</div>
										
										<div class="row">
											<div class="col-sm-12">
												<div class="tableBG">
													<table id="#" data-toggle="table"
												   	data-sort-name="no" class="table table-bordered">
														<thead>
															<tr>
																<th class="text-center col-sm-3 form-group" data-field="service" data-sortable="false">Career Service / RA 1080</th>
																<th class="text-center col-sm-1 form-group" data-field="rating" data-sortable="true">Rating</th>
																<th class="text-center col-sm-1 form-group" data-field="dateexam" data-sortable="true">Date of Examination</th>
																<th class="text-center col-sm-3 form-group" data-field="placeexam" data-sortable="true">Place of Examination</th>
																<th class="text-center col-sm-2 form-group" data-field="license" data-sortable="true">License Number</th>
																<th class="text-center col-sm-2 form-group" data-field="release" data-sortable="true">Date of Release</th>
															</tr>
														</thead>
															
															<!-- group csc -->
													</table>

													<div class="row">
														<div class="col-sm-3 form-group">
															<label>Career Service / RA 1080</label>
															<input type="text" placeholder="Career Service..." class="form-control" required>
														</div>
														<div class="col-sm-1 form-group">
															<label>Rating</label>
															<input type="number" placeholder="Rating..." class="form-control" required>
														</div>
														<div class="col-sm-2 form-group">
															<label>Date of Examination</label>
															<input type="date" placeholder="Date..." class="form-control" required>
														</div>
														<div class="col-sm-2 form-group">
															<label>Place of Examination</label>
															<input type="text" placeholder="Place..." class="form-control" required>
														</div>
														<div class="col-sm-2 form-group">
															<label>License Number</label>
															<input type="number" placeholder="Number..." class="form-control" required>
														</div>
														<div class="col-sm-2 form-group">
															<label>Date of Release</label>
															<input type="date" placeholder="Release..." class="form-control" required>
														</div>
													</div>

														<button id="btnDekChild" class="btn btn-danger pull-right tblBottom" style="margin-left: 4px;">Del</button>
														<button id="btnAddChild" class="btn btn-primary pull-right tblBottom">Add</button>
														<div class="tclear"></div>
												</div>
											</div>
										</div>
												
									</div>
								</div>
								
							</div>
							
							<div id="workexper" class="tab-pane fade">
								
								<div class="row">
									<div class="col-sm-12">
										<div class="row">
											
											<div class="col-sm-12 form-group">
												<h4>V. Work Experience</h4>
												<hr>
											</div>
										
										</div>	

										<!-- group Educational -->
										<div class="row">
											<div class="col-sm-12">
												<div class="tableBG">
													<table id="#" data-toggle="table"
												   	data-sort-name="no" class="table table-bordered">
														<thead>
															<tr>
																<th class="text-center col-sm-1 form-group" data-field="from" data-sortable="false">Inclusive Dates (mm/dd/yyyy) From</th>
																<th class="text-center col-sm-1 form-group" data-field="to" data-sortable="true">Inclusive Dates (mm/dd/yyyy) To</th>
																<th class="text-center col-sm-2 form-group" data-field="position" data-sortable="true">Position Title</th>
																<th class="text-center col-sm-3 form-group" data-field="department" data-sortable="true">Department / Agency / Office / Company</th>
																<th class="text-center col-sm-1 form-group" data-field="monthly" data-sortable="true">Monthly Salary</th>
																<th class="text-center col-sm-1 form-group" data-field="salary" data-sortable="true">Salary Grade</th>
																<th class="text-center col-sm-2 form-group" data-field="status" data-sortable="true">Status of Appointment</th>
																<th class="text-center col-sm-1 form-group" data-field="service" data-sortable="true">Gov't Service</th>
															</tr>
														</thead>
														<!-- group work experience -->
																											
													</table>

													<div class="row">
														<div class="col-sm-3 form-group">
															<label>Inclusive Dates From</label>
															<input type="date" placeholder="From..." class="form-control" required>
														</div>
														<div class="col-sm-3 form-group">
															<label>Inclusive Dates To</label>
															<input type="date" placeholder="To..." class="form-control" required>
														</div>
														<div class="col-sm-6 form-group">
															<label>Position Title</label>
															<input type="text" placeholder="Title..." class="form-control" required>
														</div>
													</div>
													<div class="row">
														<div class="col-sm-4 form-group">
															<label>Department / Agency / Office / Company</label>
															<input type="text" placeholder="Department..." class="form-control" required>
														</div>
														<div class="col-sm-2 form-group">
															<label>Monthly Salary</label>
															<input type="number" placeholder="Salary..." class="form-control" required>
														</div>
														<div class="col-sm-3 form-group">
															<label>Status of Appointment</label>
															<input type="text" placeholder="Status..." class="form-control" required>
														</div>
														<div class="col-sm-3 form-group">
															<label>Gov't Service</label>
															<input type="text" placeholder="Service..." class="form-control" required>
														</div>
													</div>

													<button id="btnDekChild" class="btn btn-danger pull-right tblBottom" style="margin-left: 4px;">Del</button>
													<button id="btnAddChild" class="btn btn-primary pull-right tblBottom">Add</button>
													<div class="tclear"></div>
												</div>
											</div>
										</div>
										
									</div>
								</div>
								
							</div>
							
							<div id="voluntary" class="tab-pane fade">
								
								<div class="row">
									<div class="col-sm-12">
										<div class="row">
											
											<div class="col-sm-12 form-group">
												<h4>VI. Voluntary Work</h4>
												<hr>
											</div>
										
										</div>	

										<!-- group Voluntary Work -->
										<div class="row">
											<div class="col-sm-12">
												<div class="tableBG">
													<table id="#" data-toggle="table"
												   	data-sort-name="no" class="table table-bordered">
														<thead>
															<tr>
																<th class="text-center col-sm-5 form-group" data-field="organization" data-sortable="false">Name & Address of Organization</th>
																<th class="text-center col-sm-1 form-group" data-field="from" data-sortable="true">Inclusive Date From</th>
																<th class="text-center col-sm-1 form-group" data-field="to" data-sortable="true">Inclusive Date To</th>
																<th class="text-center col-sm-2 form-group" data-field="hours" data-sortable="true">Number of Hours</th>
																<th class="text-center col-sm-3 form-group" data-field="work" data-sortable="true">Position / Nature of Work</th>
															</tr>
														</thead>
														<!-- group work voluntary -->
														
													</table>

													<div class="row">
														<div class="col-sm-3 form-group">
															<label>Name & Address of Organization</label>
															<input type="text" placeholder="Address..." class="form-control" required>
														</div>
														<div class="col-sm-2 form-group">
															<label>Inclusive Dates From</label>
															<input type="date" placeholder="From..." class="form-control" required>
														</div>
														<div class="col-sm-2 form-group">
															<label>Inclusive Dates To</label>
															<input type="date" placeholder="To..." class="form-control" required>
														</div>
														<div class="col-sm-2 form-group">
															<label>Number of Hours</label>
															<input type="number" placeholder="Hours..." class="form-control" required>
														</div>
														<div class="col-sm-3 form-group">
															<label>Position / Nature of Work</label>
															<input type="text" placeholder="Position..." class="form-control" required>
														</div>
													</div>

													<button id="btnDekChild" class="btn btn-danger pull-right tblBottom" style="margin-left: 4px;">Del</button>
													<button id="btnAddChild" class="btn btn-primary pull-right tblBottom">Add</button>
													<div class="tclear"></div>
												</div>
											</div>
										</div>
										
									</div>
								</div>
								
							</div>
							
							<div id="training" class="tab-pane fade">
								
								<div class="row">
									<div class="col-sm-12">
										<div class="row">
											
											<div class="col-sm-12 form-group">
												<h4>VII. Training Programs</h4>
												<hr>
											</div>
										
										</div>	

										<!-- group Voluntary Work -->
										<div class="row">
											<div class="col-sm-12">
												<div class="tableBG">
													<table id="#" data-toggle="table"
												   	data-sort-name="no" class="table table-bordered">
														<thead>
															<tr>
																<th class="text-center col-sm-5 form-group" data-field="seminar" data-sortable="false">Title of Seminar</th>
																<th class="text-center col-sm-1 form-group" data-field="from" data-sortable="true">Inclusive Date of Attendance From</th>
																<th class="text-center col-sm-1 form-group" data-field="to" data-sortable="true">Inclusive Date of Attendance To</th>
																<th class="text-center col-sm-2 form-group" data-field="hours" data-sortable="true">Number of Hours</th>
																<th class="text-center col-sm-3 form-group" data-field="sponsored" data-sortable="true">Conducted / Sponsored By</th>
															</tr>
														</thead>
														<!-- group work voluntary -->
														
													</table>

													<div class="row">
														<div class="col-sm-3 form-group">
															<label>Title of Seminar</label>
															<input type="text" placeholder="Seminar..." class="form-control" required>
														</div>
														<div class="col-sm-2 form-group">
															<label>Inclusive Dates From</label>
															<input type="date" placeholder="From..." class="form-control" required>
														</div>
														<div class="col-sm-2 form-group">
															<label>Inclusive Dates To</label>
															<input type="date" placeholder="To..." class="form-control" required>
														</div>
														<div class="col-sm-2 form-group">
															<label>Number of Hours</label>
															<input type="number" placeholder="Hours..." class="form-control" required>
														</div>
														<div class="col-sm-3 form-group">
															<label>Conducted / Sponsored By</label>
															<input type="text" placeholder="Sponsored..." class="form-control" required>
														</div>
													</div>

													<button id="btnDekChild" class="btn btn-danger pull-right tblBottom" style="margin-left: 4px;">Del</button>
													<button id="btnAddChild" class="btn btn-primary pull-right tblBottom">Add</button>
													<div class="tclear"></div>
												</div>
											</div>
										</div>
										
									</div>
								</div>
								
							</div>
							
							<div id="other" class="tab-pane fade">
								
								<div class="row">
									<div class="col-sm-12">
										<div class="row">
											
											<div class="col-sm-12 form-group">
												<h4>VIII. Other Information</h4>
												<hr>
											</div>
										
										</div>	

										<!-- group Voluntary Work -->
										<div class="row">
											<div class="col-sm-12">
												<div class="tableBG">
													<table id="#" data-toggle="table"
												   	data-sort-name="no" class="table table-bordered">
														<thead>
															<tr>
																<th class="text-center col-sm-4 form-group" data-field="hobbies" data-sortable="false">Special Skills / Hobbies</th>
																<th class="text-center col-sm-4 form-group" data-field="recognition" data-sortable="true">Non-Academic Distinctions / Recognition</th>
																<th class="text-center col-sm-4 form-group" data-field="association" data-sortable="true">Membership in Association / Organization</th>
															</tr>
														</thead>
														<!-- group work voluntary -->
													</table>

													<div class="row">
														<div class="col-sm-4 form-group">
															<label>Special Skills / Hobbies</label>
															<input type="text" placeholder="Hobbies..." class="form-control" required>
														</div>
														<div class="col-sm-4 form-group">
															<label>Non-Academic Distinctions / Recognition</label>
															<input type="text" placeholder="Recognition..." class="form-control" required>
														</div>
														<div class="col-sm-4 form-group">
															<label>Membership in Association / Organization</label>
															<input type="text" placeholder="Membership..." class="form-control" required>
														</div>
													</div>

													<button id="btnDekChild" class="btn btn-danger pull-right tblBottom" style="margin-left: 4px;">Del</button>
													<button id="btnAddChild" class="btn btn-primary pull-right tblBottom">Add</button>
													<div class="tclear"></div>
												</div>
											</div>
										</div>
										
										<div class="row">
											
											<div class="col-sm-12 form-group">
												<label>36. Are you related by consanguinity or affinity to any of the following:</label>
											</div>
										</div>
										
										<div class="row">
											<div class="col-sm-6 form-group">
												<label>a. Within the third degree (for National Government Employees): appointing authority, 
													recommending authority, chief of office/bureau/department or person who has immediate 
													supervision over you in the Office, Bureau or Department where you will be appointed?</label>
												
												<label class="radio-inline">
												  <input type="radio" name="thirddegree" value="option1"> Yes
												</label>
												<label class="radio-inline">
												  <input type="radio" name="thirddegree" value="option2"> No
												</label>
												
												<input type="text" placeholder="If YES, give details:" class="form-control">
											</div>
											
											<div class="col-sm-6 form-group">
												<label>b. Within the fourth degree (for Local Government Employees): apoointing authority or 
												recommending authority where you will be appointed</label>
												
												<label class="radio-inline">
												  <input type="radio" name="fourthdegree" value="option1"> Yes
												</label>
												<label class="radio-inline">
												  <input type="radio" name="fourthdegree" value="option2"> No
												</label>
												
												<input type="text" placeholder="If YES, give details:" class="form-control">
											</div>
											
										</div>
										
										<div class="row">
											<div class="col-sm-6 form-group">
												<label>37. a. Have you ever been formally charged?</label>
												
												<label class="radio-inline">
												  <input type="radio" name="formally" value="option1"> Yes
												</label>
												<label class="radio-inline">
												  <input type="radio" name="formally" value="option2"> No
												</label>
												
												<input type="text" placeholder="If YES, give details:" class="form-control">
											</div>
											
											<div class="col-sm-6 form-group">
												<label>b. Have you ever been guilty of any administrative offense?</label>
												
												<label class="radio-inline">
												  <input type="radio" name="guilty" value="option1"> Yes
												</label>
												<label class="radio-inline">
												  <input type="radio" name="guilty" value="option2"> No
												</label>
												
												<input type="text" placeholder="If YES, give details:" class="form-control">
											</div>
											
										</div>
										
										<div class="row">
											<div class="col-sm-12 form-group">
												<label>38. Have you ever been convicted of any crime or vioiation of any law, decree, ordinance or regulation
												by any court or tribunal?</label>
												
												<label class="radio-inline">
												  <input type="radio" name="vioiation" value="option1"> Yes
												</label>
												<label class="radio-inline">
												  <input type="radio" name="vioiation" value="option2"> No
												</label>
												
												<input type="text" placeholder="If YES, give details:" class="form-control">
											</div>
										</div>
										
										<div class="row">
											<div class="col-sm-12 form-group">
												<label>39. Have you ever been separated from the service in any of the following modes: resignation, 
												retirement, dropped from the rolls, disissal, termination, end of term, finished contract, AWOL or 
												phased out, in the public or private sector?</label>
												
												<label class="radio-inline">
												  <input type="radio" name="separated" value="option1"> Yes
												</label>
												<label class="radio-inline">
												  <input type="radio" name="separated" value="option2"> No
												</label>
												
												<input type="text" placeholder="If YES, give details:" class="form-control">
											</div>
										</div>
										
										<div class="row">
											<div class="col-sm-12 form-group">
												<label>40. Have you ever been a candidate in a national or local election (except Barangay election)?</label>
												
												<label class="radio-inline">
												  <input type="radio" name="national" value="option1"> Yes
												</label>
												<label class="radio-inline">
												  <input type="radio" name="national" value="option2"> No
												</label>
												
												<input type="text" placeholder="If YES, give details:" class="form-control">
											</div>
										</div>
										
										<div class="row">
											
											<div class="col-sm-12 form-group">
												<label>41. Pursuant to: (a) Indigenous People's Act (RA 8371); (b) Magna Carta for Disabled Persons (RA 
												7277); and (c) Solo Parents Welfare Act of 2000 (RA 8972), please answer the following items:</label>
											</div>
										</div>
										
										<div class="row">
											<div class="col-sm-4 form-group">
												<label>a. Are you a member of any indigenous group?</label>
												
												<label class="radio-inline">
												  <input type="radio" name="indigenous" value="option1"> Yes
												</label>
												<label class="radio-inline">
												  <input type="radio" name="indigenous" value="option2"> No
												</label>
												
												<input type="text" placeholder="If YES, please specify:" class="form-control">
											</div>
											
											<div class="col-sm-4 form-group">
												<label>b. Are you differently abled?</label>
												
												<label class="radio-inline">
												  <input type="radio" name="differently" value="option1"> Yes
												</label>
												<label class="radio-inline">
												  <input type="radio" name="differently" value="option2"> No
												</label>
												
												<input type="text" placeholder="If YES, please specify:" class="form-control">
											</div>
											
											<div class="col-sm-4 form-group">
												<label>c. Are you a solo parent?</label>
												
												<label class="radio-inline">
												  <input type="radio" name="soloparent" value="option1"> Yes
												</label>
												<label class="radio-inline">
												  <input type="radio" name="soloparent" value="option2"> No
												</label>
												
												<input type="text" placeholder="If YES, please specify:" class="form-control">
											</div>
											
										</div>
										
									</div>
									
									<div class="col-md-12">
										<div class="row">
											<div class="col-sm-12 form-group">
												<label>42. References</label>
											</div>
										</div>
										<div class="row">
											<div class="col-md-12">
												<div class="tableBG" style="margin-bottom: 8px;">
													<table id="#" data-toggle="table"
												   	data-sort-name="no" class="table table-bordered">
														<thead>
															<tr>
																<th class="text-center col-sm-4 form-group" data-field="name" data-sortable="false">Name</th>
																<th class="text-center col-sm-6 form-group" data-field="address" data-sortable="true">Address</th>
																<th class="text-center col-sm-2 form-group" data-field="telno" data-sortable="true">Tel. No.</th>
															</tr>
														</thead>
														<!-- group References -->
													</table>

													<div class="row">
														<div class="col-sm-4 form-group">
															<label>Name</label>
															<input type="text" placeholder="Name..." class="form-control" required>
														</div>
														<div class="col-sm-4 form-group">
															<label>Address</label>
															<input type="text" placeholder="Address..." class="form-control" required>
														</div>
														<div class="col-sm-4 form-group">
															<label>Tel. No.</label>
															<input type="text" placeholder="Tel. No...." class="form-control" required>
														</div>
													</div>

													<button id="btnDelChild" class="btn btn-danger pull-right tblBottom" style="margin-left: 4px;">Del</button>
													<button id="btnAddChild" class="btn btn-primary pull-right tblBottom">Add</button>
													<div class="tclear"></div>
												</div>
											</div>
										</div>
										<button id="#" class="btn btn-primary pull-right tblBottom">Submit</button>
													<div class="tclear"></div>
									</div>
								</div>
								
							</div>
							<!--<button class="btn btn-primary btn-md btn-block" name="login">Sign In</button>
						</form>-->
					</div>
				</div>					  
			</div>
		</div>
			
		</div>
		<!--------- end col-md-12 ----------->
	</div>

</div>
<!--- end content ------->


<!------------------------------------------------------------- footer ------------------------------------------------------------>
<footer class="">
	<div class="container">
		<div class="row">
		
			<div class="col-md-6 pull-left">
				<p style="color:#fff; padding-top:5px;">Copyright &copy; 2016 HRMD</p>
			</div>
			<div class="col-md-6 pull-right text-right">
				<img src="images/logo/iluvlaunion.gif" width="46" height="35" alt="I Love La Union" title="I Love La Union" class="img-circle" />&nbsp;
				<img src="images/logo/pglu.png" width="40" height="35" alt="PGLU" title="PGLU" class="img-circle" />&nbsp;
				<img src="images/logo/hr_logo.gif" width="40" height="35" alt="HR" title="HR" class="img-circle" />
			</div>
			
		</div>
	</div>
</footer>
<!------------------------------------------------------------- end footer ------------------------------------------------------------>

<?php
	// includes modal
	include('essential/modal.php');
?>

<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.growl.js"></script>
<script type="text/javascript" src="js/bootstrap-table.min.js"></script>
<script type="text/javascript" src="js/jquery.feedBackBox.js"></script>
<script type="text/javascript" src="js/blockUI.js"></script>
<script type="text/javascript" src="js/bootstrap-select.js"></script>
<script type="text/javascript" src="script/loginScript.js"></script>

<script type="text/javascript">

$(document).ready(function(){
	$('#feedbackDiv').feedBackBox();
	

});


//ADD DEPENDENTS
	$('#fbbtnAddChild').click(function(){
		$.blockUI();
		var rows = [];
	  	rows.push({
                childFname: $('#fbchildFname').val(),
                childMname: $('#fbchildMname').val(),
                childLname: $('#fbchildLname').val(),
                childBirth: $('#fbchildBirth').val()
            });
		$('#fbtblChild').bootstrapTable('append', rows);
		$('#fbtblChild').bootstrapTable('scrollTo', 'bottom');
		$('#fbchildFname').val('');
		$('#fbchildMname').val('');
		$('#fbchildLname').val('');
		$('#fbchildBirth').val('');
		$.unblockUI();
	});

//DELETE DEPENDENTS
$('#fbbtnDelChild').click(function () {
            var ids = $.map($('#fbtblChild').bootstrapTable('getSelections'), function (row) {
            	// alert(row.Qualifications);
                return row.childFname;
            });
            // alert($('#lstRequirement').bootstrapTable('getSelections'));
            $('#fbtblChild').bootstrapTable('remove', {
                field: 'childFname',
                values: ids
            });
        });


// function changeProvince(addType)
// {
// 	if (addtype == '')
// 	{
		
// 	}
// }

// function changeProvince(addType)
// {
// 	if (addtype == '')
// 	{
		
// 	}
// }



$('#resProvince').change(function(e){

$('#resMunicipality').empty();
e.preventDefault();
    var moduleName = 'registerMunicipality';
    var provinceName = this.value;
    jQuery.ajax({
        type: "POST",
        url:"lib/getData/dropdown.php",
        dataType:'html',
        data:{module:moduleName,provinceName:provinceName},
        success:function(response)
        {
            $('#resMunicipality').empty();
            $('#resMunicipality').append(response);
            $('#resMunicipality').selectpicker('refresh');
        },
        error:function (xhr, ajaxOptions, thrownError)
        {
            $.growl.error({ message: thrownError });
        }
        });
});


$('#resMunicipality').change(function(e){

	$('#resBarangay').empty();
	e.preventDefault();
    var moduleName = 'registerBarangay';
    var municipalityName = this.value;
    jQuery.ajax({
        type: "POST",
        url:"lib/getData/dropdown.php",
        dataType:'html',
        data:{module:moduleName,municipalityName:municipalityName},
        success:function(response)
        {
            $('#resBarangay').empty();
            $('#resBarangay').append(response);
            $('#resBarangay').selectpicker('refresh');
        },
        error:function (xhr, ajaxOptions, thrownError)
        {
            $.growl.error({ message: thrownError });
        }
        });
});



$('#perProvince').change(function(e){

$('#perMunicipality').empty();
e.preventDefault();
    var moduleName = 'registerMunicipality';
    var provinceName = this.value;
    jQuery.ajax({
        type: "POST",
        url:"lib/getData/dropdown.php",
        dataType:'html',
        data:{module:moduleName,provinceName:provinceName},
        success:function(response)
        {
            $('#perMunicipality').empty();
            $('#perMunicipality').append(response);
            $('#perMunicipality').selectpicker('refresh');
        },
        error:function (xhr, ajaxOptions, thrownError)
        {
            $.growl.error({ message: thrownError });
        }
        });
});


$('#perMunicipality').change(function(e){

	$('#perBarangay').empty();
	e.preventDefault();
    var moduleName = 'registerBarangay';
    var municipalityName = this.value;
    jQuery.ajax({
        type: "POST",
        url:"lib/getData/dropdown.php",
        dataType:'html',
        data:{module:moduleName,municipalityName:municipalityName},
        success:function(response)
        {
            $('#perBarangay').empty();
            $('#perBarangay').append(response);
            $('#perBarangay').selectpicker('refresh');
        },
        error:function (xhr, ajaxOptions, thrownError)
        {
            $.growl.error({ message: thrownError });
        }
        });
});


$('li').click(function(e){
	
});

function saveFam() {
	
	
	
}

</script>
<!-- Steps Progress and Details - END -->





</body>
</html>