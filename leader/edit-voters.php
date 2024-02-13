<?php
$breadCrumbName = "Edit Voter";
?>
<?php include('../common/leader/head.php'); ?>
<body class="g-sidenav-show   bg-gray-100">
  <div class="min-height-300 bg-primary position-absolute w-100"></div>
<?php include('../common/leader/aside.php'); ?>
  <main class="main-content position-relative border-radius-lg ">
    <!-- Navbar -->
    <?php include('../common/leader/header.php'); ?>
    <!-- End Navbar -->
    <div class="container-fluid py-4">
      <div class="row mt-4">
        <div class="col-lg-12 mb-lg-0 mb-4">
          <div class="card ">
            <div class="card-header pb-0 p-3">
              <div class="row">
                <div class="col-lg-2 d-flex justify-content-between">
                    <h6 class="mb-2" style="margin-top:5%;">Update Voter</h6>
                </div>   
                <div class="col-lg-2">
                    <div class="mb-3">
                        <button type="button" onclick="$('#exampleModal').modal('show'); " id="loginBtn" class="btn btn-primary"><i class="fa fa-whatsapp"></i> Whatsapp</button>
                    </div>
                </div> 
                <div class="col-lg-2">
                    <div class="mb-3">
                        <button type="button" onclick="$('#exampleModal').modal('show'); " id="loginBtn" class="btn btn-primary"><i class="fa fa-mail-reply"></i> Email</button>
                    </div>
                </div>  
                <div class="col-lg-2">
                    <div class="mb-3">
                        <button type="button" onclick="$('#exampleModal').modal('show'); " id="loginBtn" class="btn btn-primary"><i class="fa fa-send"></i> SMS</button>
                    </div>
                </div> 
              </div>
            </div>
            <div class="card-body p-3">
              <form  id="userForm" enctype="multipart/form-data" role="form" method="post">
                <input type="hidden" name="user_id" value="<?php echo $_GET['id']; ?>" />
                <div class="row">
                    <div class="col-12">
                        <span id="message"></span>
                    </div>
                    <div class="col-4">
                        <div class="mb-3">
                            <label class="label">AC_NO</label>
                            <select id="AC_NO" onchange="load_part_no(this.value)" name="AC_NO" class="form-select" required>
                                <option value="" selected>Please Select</option>
                            </select>   
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="mb-3">
                            <label class="label">PART_NO</label>
                            <select id="PART_NO" onchange="load_section_no(this.value)" name="PART_NO" class="form-select" required>
                                <option value="" selected>Please Select</option>
                            </select>   
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="mb-3">
                            <label class="label">SECTION_NO</label>
                            <select id="SECTION_NO" onchange="load_SLNOINPART(this.value)" name="SECTION_NO"  class="form-select" required>
                                <option value="" selected>Please Select</option>
                            </select>   
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="mb-3">
                            <label class="label">SLNOINPART</label>
                            <select id="SLNOINPART" name="SLNOINPART"  class="form-select" required>
                                <option value="" selected>Please Select</option>
                            </select>   
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="mb-3">
                            <label class="label">C_HOUSE_NO</label>
                            <input type="text" id="C_HOUSE_NO" name="C_HOUSE_NO" class="form-control form-control-lg" placeholder="First Name" aria-label="Email" >
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="mb-3">
                            <label class="label">C_HOUSE_NO_V1</label>
                            <input type="text" id="C_HOUSE_NO_V1" name="C_HOUSE_NO_V1" class="form-control form-control-lg" placeholder="Last Name" aria-label="Password" >
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="mb-3">
                            <label class="label">FM_NAME_EN</label>
                            <input type="text" id="FM_NAME_EN" name="FM_NAME_EN" class="form-control form-control-lg" placeholder="FM_NAME_EN" aria-label="Password" >
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="mb-3">
                            <label class="label">LASTNAME_EN</label>
                            <input type="text" id="LASTNAME_EN" name="LASTNAME_EN" class="form-control form-control-lg" placeholder="LASTNAME_EN" aria-label="Password" >
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="mb-3">
                            <label class="label">FM_NAME_V1</label>
                            <input type="text" id="FM_NAME_V1" name="FM_NAME_V1" class="form-control form-control-lg" placeholder="FM_NAME_V1" aria-label="Password" >
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="mb-3">
                            <label class="label">LASTNAME_V1</label>
                            <input type="text" id="LASTNAME_V1" name="LASTNAME_V1" class="form-control form-control-lg" placeholder="LASTNAME_V1" aria-label="Password" >
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="mb-3">
                            <label class="label">RLN_TYPE</label>
                            <select id="RLN_TYPE" name="RLN_TYPE"  class="form-select" >
                                <option value="" selected>Please Select</option>
                                <option value="F">F</option>
                                <option value="H">H</option>
                                <option value="L">L</option>
                                <option value="O">O</option>
                                <option value="M">M</option>
                                <option value="W">W</option>
                            </select> 
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="mb-3">
                            <label class="label">RLN_FM_NM_EN</label>
                            <input type="text" id="RLN_FM_NM_EN" name="RLN_FM_NM_EN" class="form-control form-control-lg" placeholder="RLN_FM_NM_EN" aria-label="Password" >
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="mb-3">
                            <label class="label">RLN_L_NM_EN</label>
                            <input type="text" id="RLN_L_NM_EN" name="RLN_L_NM_EN" class="form-control form-control-lg" placeholder="RLN_L_NM_EN" aria-label="Password" >
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="mb-3">
                            <label class="label">RLN_FM_NM_V1</label>
                            <input type="text" id="RLN_FM_NM_V1" name="RLN_FM_NM_V1" class="form-control form-control-lg" placeholder="RLN_FM_NM_V1" aria-label="Password" >
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="mb-3">
                            <label class="label">RLN_L_NM_V1</label>
                            <input type="text" id="RLN_L_NM_V1" name="RLN_L_NM_V1" class="form-control form-control-lg" placeholder="RLN_L_NM_V1" aria-label="Password" >
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="mb-3">
                            <label class="label">EPIC_NO</label>
                            <input type="text" id="EPIC_NO" name="EPIC_NO" class="form-control form-control-lg" placeholder="EPIC_NO" aria-label="Password" >
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="mb-3">
                            <label class="label">GENDER</label>
                            <select id="GENDER" name="GENDER"  class="form-select" >
                                <option value="" selected>Please Select</option>
                                <option value="M">M</option>
                                <option value="F">F</option>
                            </select>   
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="mb-3">
                            <label class="label">AGE</label>
                            <input type="number" id="AGE" name="AGE" class="form-control form-control-lg" placeholder="AGE" aria-label="Password" >
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="mb-3">
                            <label class="label">DOB</label>
                            <input type="date" id="DOB" name="DOB" class="form-control form-control-lg" placeholder="DOB" aria-label="Password" >
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="mb-3">
                            <label class="label">MOBILE_NO</label>
                            <input type="text" id="MOBILE_NO" name="MOBILE_NO" class="form-control form-control-lg" placeholder="MOBILE_NO" aria-label="Password" >
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="mb-3">
                            <label class="label">AC_NAME_EN</label>
                            <input type="text" id="AC_NAME_EN" name="AC_NAME_EN" class="form-control form-control-lg" placeholder="AC_NAME_EN" aria-label="Password" >
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="mb-3">
                            <label class="label">AC_NAME_V1</label>
                            <input type="text" id="AC_NAME_V1" name="AC_NAME_V1" class="form-control form-control-lg" placeholder="AC_NAME_V1" aria-label="Password" >
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="mb-3">
                            <label class="label">SECTION_NAME_EN</label>
                            <textarea name="SECTION_NAME_EN" id="SECTION_NAME_EN" class="form-control form-control-lg" ></textarea>    
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="mb-3">
                            <label class="label">SECTION_NAME_V1</label>
                            <textarea name="SECTION_NAME_V1" id="SECTION_NAME_V1" class="form-control form-control-lg" ></textarea>    
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="mb-3">
                            <label class="label">PSBUILDING_NAME_EN</label>
                            <textarea name="PSBUILDING_NAME_EN" id="PSBUILDING_NAME_EN" class="form-control form-control-lg" ></textarea>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="mb-3">
                            <label class="label">PSBUILDING_NAME_V1</label>
                            <textarea name="PSBUILDING_NAME_V1" id="PSBUILDING_NAME_V1" class="form-control form-control-lg" ></textarea>    
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="mb-3">
                            <label class="label">PART_NAME_EN</label>
                            <input type="text" id="PART_NAME_EN" name="PART_NAME_EN" class="form-control form-control-lg" placeholder="PART_NAME_EN" aria-label="Password" >
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="mb-3">
                            <label class="label">PART_NAME_V1</label>
                            <input type="text" id="PART_NAME_V1" name="PART_NAME_V1" class="form-control form-control-lg" placeholder="PART_NAME_V1" aria-label="Password" >
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="mb-3">
                            <label class="label">Aadhar No.</label>
                            <input type="text" id="aadhar" name="aadhar" class="form-control form-control-lg" placeholder="Aadhar No." aria-label="Password" >
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="mb-3">
                            <label class="label">RELATIVE PART_NO</label>
                            <input type="text" id="RELATION_PART_NO" name="RELATION_PART_NO" class="form-control form-control-lg" placeholder="RELATIVE PART_NO" aria-label="Password" >
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="mb-3">
                            <label class="label">RELATION_SLNOINPART</label>
                            <input type="text" id="RELATION_SLNOINPART" name="RELATION_SLNOINPART" class="form-control form-control-lg" placeholder="RELATION_SLNOINPART" aria-label="Password" >
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="mb-3">
                            <label class="label">Caste</label>
                            <select id="caste" name="caste" class="form-select">
                                <option value="" selected="">Please Select</option>
                                <option value="0">Hindu</option>
                                <option value="1">Muslim</option>
                                <option value="2">Christian</option>
                                <option value="3">Sikh</option>
                                <option value="4">Buddhist</option>
                                <option value="5">Jain</option>
                                <option value="6">NRI</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="mb-3">
                            <label class="label">Married</label>
                            <select id="isMarried" name="isMarried" class="form-select">
                                <option value="" selected="">Please Select</option>
                                <option value="1">Yes</option>
                                <option value="0">No</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="mb-3">
                            <label class="label">Voter Label</label>
                            <select id="voter_label" name="voter_label" class="form-select">
                                <option value="" selected="">Please Select</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="mb-3">
                            <label class="label">Political Party Associated</label>
                            <select id="political_party" name="political_party" class="form-select">
                                <option value="" selected="">Please Select</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="mb-3">
                            <label class="label">Dead/Alive</label>
                            <select id="isDead" name="isDead" class="form-select">
                                <option value="" selected="">Please Select</option>
                                <option value="0">Alive</option>
                                <option value="1">Dead</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="mb-3">
                            <label class="label">Education</label>
                            <select id="education" onchange="changeEducation(this.value)" name="education" class="form-select">
                                <option value="" selected="">Please Select</option>
                                <option value="0">Uneducated</option>
                                <option value="1">10th</option>
                                <option value="2">12th</option>
                                <option value="3">Undergraduate</option>
                                <option value="4">Graduate</option>
                                <option value="5">Post Graduate</option>
                                <option value="6">PHD</option>
                                <option value="7">Other</option>
                            </select>
                            <input style="margin-top:2%;display:none;" type="text" id="education_other" name="education_other" class="form-control form-control-lg" placeholder="Other(Education)">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="mb-3">
                            <label class="label">Profile Image</label>
                            <input type="file" name="profile_image" class="form-control form-control-lg" placeholder="" aria-label="Password">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="mb-3">
                            <label class="label">Profession</label>
                            <select id="profession" onchange="changeProfession(this.value)" name="profession" class="form-select">
                                <option value="" selected="">Please Select</option>
                                <option value="0">Student</option>
                                <option value="1">Unemployed</option>
                                <option value="2">Self Employed</option>
                                <option value="3">Farmer</option>
                                <option value="4">Teacher</option>
                                <option value="5">Govt Forces</option>
                                <option value="6">Job Pvt Sector</option>
                                <option value="7">Job Govt Sector</option>
                                <option value="8">Police officer</option>
                                <option value="9">Dentist</option>
                                <option value="10">Doctor</option>
                                <option value="11">Journalist</option>
                                <option value="12">CA / Account</option>
                                <option value="13">Advocates</option>
                                <option value="14">Engineer</option>
                                <option value="15">Local Market Business</option>
                                <option value="16">Corporate Business</option>
                                <option value="17">School Owner</option>
                                <option value="18">Hospital Owner</option>
                                <option value="19">Multiple Business</option>
                                <option value="20">Barber Salon</option>
                                <option value="21">Driving Work Business</option>
                                <option value="22">GIG WORKER</option>
                                <option value="23">Daily Mazdoor</option>
                                <option value="24">Local Market Worker</option>
                                <option value="25">Other</option>
                            </select>
                            <input style="margin-top:2%;display:none;" type="text" id="profession_other" name="profession_other" class="form-control form-control-lg" placeholder="Other(Profession)">
                        </div>
                    </div>
                    <div class="row" style="border-style: dotted;margin-left: 0%;padding-bottom: 2%;">
                        <div class="col-4">
                            <label class="label">Home Shifted</label>
                            <select id="homeShifted" name="homeShifted" onchange="homeShiftedChange(this.value)" class="form-select">
                                <option value="" selected="">Please Select</option>
                                <option value="0">No</option>
                                <option value="1">Yes</option>
                            </select>
                        </div>
                        <div class="col-3" id="homeShiftedConstituency" style="margin-top:2%;display:none;">
                            <div class="form-check">
                                <input class="form-check-input constituency-label" type="radio" onchange="constituencyChange(this.value)" value="0" name="constituencyHomeShifted" id="constituencyHomeShifted">
                                <label class="form-check-label" for="flexRadioDefault1">
                                   Within Constituency
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input constituency-label" type="radio" onchange="constituencyChange(this.value)" value="1" name="constituencyHomeShifted" id="constituencyHomeShifted">
                                <label class="form-check-label" for="flexRadioDefault2">
                                    Outside Constituency
                                </label>
                            </div>
                        </div>
                        <div class="col-5" id="homeShiftedAddWithin" style="display:none;">
                            <label class="label">Address List</label>
                            <select id="homeShiftedAddress" name="homeShiftedAddress" class="form-select">
                                <option value="" selected="">Please Select</option>
                            </select>
                        </div>
                        <div class="col-5" id="homeShiftedAddOutside" style="display:none;">
                           <div class="row">
                                <div class="col-12">
                                    <div class="mb-3">
                                        <label class="label">Country</label>
                                        <select id="home_shifted_country" onchange="load_state(this.value,'#home_shifted_state','#home_shifted_city')" name="home_shifted_country" class="form-select">
                                            <option value="" selected>Please Select</option>
                                        </select>   
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-3">
                                        <label class="label">State</label>
                                        <select id="home_shifted_state" onchange="load_city(this.value,'#home_shifted_city')" name="home_shifted_state" class="form-select">
                                            <option value="" selected>Please Select</option>
                                        </select>   
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-3">
                                        <label class="label">City</label>
                                        <select id="home_shifted_city" name="home_shifted_city" class="form-select">
                                            <option value="" selected>Please Select</option>
                                        </select>   
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-3">
                                        <label class="label">Address</label>
                                        <textarea id="home_shifted_address" name="home_shifted_address" class="form-control form-control-lg"></textarea>
                                    </div>
                                </div>
                           </div> 
                        </div>
                    </div>
                    <div class="row" style="border-style: dotted;margin-left: 0%;padding-bottom: 2%;margin-top:2%">
                        <div class="col-4">
                            <label class="label">Outside Location</label>
                            <select id="outsideLocation" name="outsideLocation" onchange="outsideLocationChange(this.value)" class="form-select">
                                <option value="" selected="">Please Select</option>
                                <option value="0">No</option>
                                <option value="1">Yes</option>
                            </select>
                        </div>
                        <div class="col-3" id="outsideLocationConstituency" style="margin-top:2%;display:none;">
                            <div class="form-check">
                                <input class="form-check-input constituency-outside-label" type="radio" onchange="constituencyOutsideChange(this.value)" value="0" name="constituencyOutside" id="constituencyOutside">
                                <label class="form-check-label" for="flexRadioDefault1">
                                   Within Constituency
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input constituency-outside-label" type="radio" onchange="constituencyOutsideChange(this.value)" value="1" name="constituencyOutside" id="constituencyOutside">
                                <label class="form-check-label" for="flexRadioDefault2">
                                    Outside Constituency
                                </label>
                            </div>
                        </div>
                        <div class="col-5" id="outsideLocationAddWithin" style="display:none;">
                            <label class="label">Address List</label>
                            <select id="outsideLocationAddress" name="outsideLocationAddress" class="form-select">
                                <option value="" selected="">Please Select</option>
                            </select>
                        </div>
                        <div class="col-5" id="outsideLocationAddOutside" style="display:none;">
                           <div class="row">
                                <div class="col-12">
                                    <div class="mb-3">
                                        <label class="label">Country</label>
                                        <select id="outside_location_country" onchange="load_state(this.value,'#outside_location_state','#outside_location_city')" name="outside_location_country" class="form-select">
                                            <option value="" selected>Please Select</option>
                                        </select>   
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-3">
                                        <label class="label">State</label>
                                        <select id="outside_location_state" onchange="load_city(this.value,'#outside_location_city')" name="outside_location_state" class="form-select">
                                            <option value="" selected>Please Select</option>
                                        </select>   
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-3">
                                        <label class="label">City</label>
                                        <select id="outside_location_city" name="outside_location_city" class="form-select">
                                            <option value="" selected>Please Select</option>
                                        </select>   
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-3">
                                        <label class="label">Address</label>
                                        <textarea id="outside_location_address" name="outside_location_address" class="form-control form-control-lg"></textarea>
                                    </div>
                                </div>
                           </div> 
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="mb-3">
                            <label class="label">Labharthi(center)</label>
                            <select id="labharthi_center" name="labharthi_center" class="form-select">
                                <option value="" selected="">Please Select</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="mb-3">
                            <label class="label">Labharthi(state)</label>
                            <select id="labharthi_state" name="labharthi_state" class="form-select">
                                <option value="" selected="">Please Select</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="mb-3">
                            <label class="label">Labharthi(candidate)</label>
                            <select id="labharthi_candidate" name="labharthi_candidate" class="form-select">
                                <option value="" selected="">Please Select</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-4">
                        <button type="submit" id="loginBtn" class="btn btn-lg btn-primary btn-lg w-100 mt-4 mb-0">Submit</button>
                    </div>
                    <div class="col-4">
                        <a href="voters.php" class="btn btn-lg btn-secondary btn-lg w-100 mt-4 mb-0">Back</a>
                    </div>
                </div>
              </form>
            </div>
            
          </div>
        </div>
      </div>
      <?php include('../common/leader/footer.php'); ?>
    </div>
  </main>
  </body>
<?php include('../common/leader/footer-links.php') ?>
<script>
 $(document).ready(function(){  
      load_data();  
      $('#userForm').on('submit', function(event){
            $('#overlay').show()
            $('#message').html('');
            event.preventDefault();
            $.ajax({
                url:"https://admin.pracharstore.com/ajax/edit-voters.php",
                method:"POST",
                data: new FormData(this),
                dataType:"json",
                contentType:false,
                cache:false,
                processData:false,
                beforeSend:function(){
                    $('#import').attr('disabled','disabled');
                    $('#import').val('Importing');
                },
                success:function(data)
                {
                    $('#overlay').hide()
                    if(!data.error)
                    {
                        $('#total_data').text(data.total_line);
                        $('#message').html('<div class="alert alert-success" style="color:#fff">Voter Updated Successfully.</div>');
                       setTimeout(() => {
                            window.location.href="voters.php"
                        }, 2000);
                    }
                    if(data.error)
                    {
                        $('#message').html('<div class="alert alert-danger" style="color:#fff">'+data.error+'</div>');
                    }
                    setTimeout(() => {
                        $('#message').html('')
                    }, 5000);
                }
            })
        });
 }); 
 function load_data(page)  
      {  
        // $('#overlay').show()
           $.ajax({  
                url:"../ajax/master-data.php",  
                method:"POST",  
                data:{action:"voter_data",voter_id:"<?php echo $_GET['id']; ?>",leader_id:"<?php echo $_GET['candidate_id']; ?>"},  
                success:function(data){  
                    //AC_NO
                    let option = [];
                    option += '<option value="" selected>Please Select</option>'
                    for(let i=0; i < data.AC_NO.length; i++){
                        option += `<option value="${data.AC_NO[i].AC_NO}">${data.AC_NO[i].AC_NO}</option>`
                    }
        

                    //PART_NO
                    let option_part_no = [];
                    option_part_no += '<option value="" selected>Please Select</option>'
                    for(let i=0; i < data.PART_NO.length; i++){
                        option_part_no += `<option value="${data.PART_NO[i].PART_NO}">${data.PART_NO[i].PART_NO}</option>`
                    }
                    $('#PART_NO').html(option_part_no)
                    if(data.PART_NO.length==0){
                     $('#SECTION_NO').html(option_part_no)
                    }

                    //SECTION_NO
                    let option_section_no = [];
                    for(let i=0; i < data.SECTION_NO.length; i++){
                        option_section_no += `<option value="${data.SECTION_NO[i].SECTION_NO}">${data.SECTION_NO[i].SECTION_NO}</option>`
                    }

                    //SLNOINPART
                    let option_SLNOINPART_no = [];
                    option_SLNOINPART_no += '<option value="" selected>Please Select</option>'
                    for(let i=0; i < data.SLNOINPART.length; i++){
                        option_SLNOINPART_no += `<option value="${data.SLNOINPART[i].SLNOINPART}">${data.SLNOINPART[i].SLNOINPART}</option>`
                    }

                    //voter_label
                    let option_voter_label = [];
                    option_voter_label += '<option value="" selected>Please Select</option>'
                    for(let i=0; i < data.voter_label.length; i++){
                        option_voter_label += `<option value="${data.voter_label[i].id}">${data.voter_label[i].label}</option>`
                    }

                    //political party
                    let option_political_party = [];
                    option_political_party += '<option value="" selected>Please Select</option>'
                    for(let i=0; i < data.political_party.length; i++){
                        option_political_party += `<option value="${data.political_party[i].id}">${data.political_party[i].name}</option>`
                    }
 //country
 let option_country = [];
                    option_country += '<option value="" selected>Please Select</option>'
                    for(let i=0; i < data.country.length; i++){
                        option_country += `<option value="${data.country[i].id}">${data.country[i].name}</option>`
                    }

                    //address
                    let option_address = [];
                    option_address += '<option value="" selected>Please Select</option>'
                    for(let i=0; i < data.address.length; i++){
                        option_address += `<option value="${data.address[i].SECTION_NAME_EN}">${data.address[i].SECTION_NAME_EN}</option>`
                    }

                     //labharthi center
                     let option_labharthi_center = [];
                    option_labharthi_center += '<option value="" selected>Please Select</option>'
                    for(let i=0; i < data.labharthi_center.length; i++){
                        option_labharthi_center += `<option value="${data.labharthi_center[i].id}">${data.labharthi_center[i].scheme_name}</option>`
                    }

                     //labharthi state
                    let option_labharthi_state = [];
                    option_labharthi_state += '<option value="" selected>Please Select</option>'
                    for(let i=0; i < data.labharthi_state.length; i++){
                        option_labharthi_state += `<option value="${data.labharthi_state[i].id}">${data.labharthi_state[i].scheme_name}</option>`
                    }

                    //labharthi candidate
                    let option_labharthi_candidate = [];
                    option_labharthi_candidate += '<option value="" selected>Please Select</option>'
                    for(let i=0; i < data.labharthi_candidate.length; i++){
                        option_labharthi_candidate += `<option value="${data.labharthi_candidate[i].id}">${data.labharthi_candidate[i].scheme_name}</option>`
                    }


                    $('#labharthi_center').html(option_labharthi_center)
                    $('#labharthi_state').html(option_labharthi_state)
                    $('#labharthi_candidate').html(option_labharthi_candidate)
                    $('#home_shifted_country').html(option_country)
                    $('#homeShiftedAddress').html(option_address)
                    $('#outsideLocationAddress').html(option_address)
                    $('#outside_location_country').html(option_country)
                    $('#political_party').html(option_political_party)
                    $('#voter_label').html(option_voter_label)
                    $('#SLNOINPART').html(option_SLNOINPART_no)
                    $('#SECTION_NO').html(option_section_no)
                    $('#AC_NO').html(option)
                    $('#C_HOUSE_NO').val(data.voterData.C_HOUSE_NO)
                    $('#C_HOUSE_NO_V1').val(data.voterData.C_HOUSE_NO_V1)
                    $('#FM_NAME_EN').val(data.voterData.FM_NAME_EN)
                    $('#LASTNAME_EN').val(data.voterData.LASTNAME_EN)
                    $('#FM_NAME_V1').val(data.voterData.FM_NAME_V1)
                    $('#LASTNAME_V1').val(data.voterData.LASTNAME_V1)
                    $('#RLN_FM_NM_EN').val(data.voterData.RLN_FM_NM_EN)
                    $('#RLN_L_NM_EN').val(data.voterData.RLN_L_NM_EN)
                    $('#RLN_FM_NM_V1').val(data.voterData.RLN_FM_NM_V1)
                    $('#RLN_L_NM_V1').val(data.voterData.RLN_L_NM_V1)
                    $('#EPIC_NO').val(data.voterData.EPIC_NO)
                    // $('#GENDER').val(data.voterData.GENDER)
                    $('#AGE').val(data.voterData.AGE)
                    $('#DOB').val(data.voterData.DOB)
                    $('#MOBILE_NO').val(data.voterData.MOBILE_NO)
                    $('#AC_NAME_EN').val(data.voterData.AC_NAME_EN)
                    $('#AC_NAME_V1').val(data.voterData.AC_NAME_V1)
                    $('#SECTION_NAME_EN').val(data.voterData.SECTION_NAME_EN)
                    $('#SECTION_NAME_V1').val(data.voterData.SECTION_NAME_V1)
                    $('#PSBUILDING_NAME_EN').val(data.voterData.PSBUILDING_NAME_EN)
                    $('#PSBUILDING_NAME_V1').val(data.voterData.PSBUILDING_NAME_V1)
                    $('#PART_NAME_EN').val(data.voterData.PART_NAME_EN)
                    $('#PART_NAME_V1').val(data.voterData.PART_NAME_V1)
                    $('#aadhar').val(data.voterData.aadhar)
                    $('#RELATION_PART_NO').val(data.voterData.RELATION_PART_NO)
                    $('#RELATION_SLNOINPART').val(data.voterData.RELATION_SLNOINPART)

                    $('#education_other').val(data.voterData.other_education)
                    $('#profession_other').val(data.voterData.other_profession)
                    if(data.voterData.education=='7'){
                        $('#education_other').show()
                    }
                    if(data.voterData.profession=='25'){
                        $('#profession_other').show()
                    }

                    $('#AC_NO option[value="'+data.voterData.AC_NO+'"]').attr("selected", "selected");
                    $('#PART_NO option[value="'+data.voterData.PART_NO+'"]').attr("selected", "selected");
                    $('#SLNOINPART option[value="'+data.voterData.SLNOINPART+'"]').attr("selected", "selected");
                    $('#SECTION_NO option[value="'+data.voterData.SECTION_NO+'"]').attr("selected", "selected");
                    $('#GENDER option[value="'+data.voterData.GENDER+'"]').attr("selected", "selected");
                    $('#RLN_TYPE option[value="'+data.voterData.RLN_TYPE+'"]').attr("selected", "selected");
                    $('#voter_label option[value="'+data.voterData.voter_label+'"]').attr("selected", "selected");
                    $('#caste option[value="'+data.voterData.caste+'"]').attr("selected", "selected");
                    $('#isMarried option[value="'+data.voterData.isMarried+'"]').attr("selected", "selected");
                    $('#political_party option[value="'+data.voterData.political_party+'"]').attr("selected", "selected");
                    $('#isDead option[value="'+data.voterData.isDead+'"]').attr("selected", "selected");

                    $('#education option[value="'+data.voterData.education+'"]').attr("selected", "selected");
                    $('#profession option[value="'+data.voterData.profession+'"]').attr("selected", "selected");
                    $('#labharthi_center option[value="'+data.voterData.labharthi_center+'"]').attr("selected", "selected");
                    $('#labharthi_state option[value="'+data.voterData.labharthi_state+'"]').attr("selected", "selected");
                    $('#labharthi_candidate option[value="'+data.voterData.labharthi_candidate+'"]').attr("selected", "selected");

                    $('#homeShifted option[value="'+data.voterData.isHomeShifted+'"]').attr("selected", "selected");
                    if(data.voterData.isHomeShifted!=0){
                        homeShiftedChange(data.voterData.isHomeShifted)
                    }    
                    $("input[name=constituencyHomeShifted][value='"+data.voterData.isHomeShiftedWithin+"']").prop("checked",true);
                    if(data.voterData.isHomeShifted!=0){
                        constituencyChange(data.voterData.isHomeShiftedWithin)
                    }  
                    $('#homeShiftedAddress option[value="'+data.voterData.shiftedAddress+'"]').attr("selected", "selected");
                    $('#home_shifted_country option[value="'+data.voterData.shifted_country+'"]').attr("selected", "selected");
                    load_state(data.voterData.shifted_country,"#home_shifted_state",null)
                    load_city(data.voterData.shifted_state,"#home_shifted_city")
                    setTimeout(() => {
                        $('#home_shifted_state option[value="'+data.voterData.shifted_state+'"]').attr("selected", "selected");
                        $('#home_shifted_city option[value="'+data.voterData.shifted_city+'"]').attr("selected", "selected");
                    }, 1000);
                    $('#home_shifted_address').val(data.voterData.shifted_address)

                    $('#outsideLocation option[value="'+data.voterData.isStayingOutside+'"]').attr("selected", "selected");

                    if(data.voterData.isStayingOutside!=0){
                        outsideLocationChange(data.voterData.isStayingOutside)
                    }
                    $("input[name=constituencyOutside][value='"+data.voterData.isStayingOutsideWithin+"']").prop("checked",true);
                    if(data.voterData.isStayingOutside!=0){
                        constituencyOutsideChange(data.voterData.isStayingOutsideWithin)
                    }
                    $('#outsideLocationAddress option[value="'+data.voterData.stayingAddress+'"]').attr("selected", "selected");
                    $('#outside_location_country option[value="'+data.voterData.staying_country+'"]').attr("selected", "selected");
                    load_state(data.voterData.staying_country,"#outside_location_state",null)
                    load_city(data.voterData.staying_state,"#outside_location_city")
                    setTimeout(() => {
                        $('#outside_location_state option[value="'+data.voterData.staying_state+'"]').attr("selected", "selected");
                        $('#outside_location_city option[value="'+data.voterData.staying_city+'"]').attr("selected", "selected");
                    }, 1000);
                    $('#outside_location_address').val(data.voterData.staying_address)


                    $('#overlay').hide()
                }  
           })  
      } 

      function load_part_no(val)  
      {  
        $('#overlay').show()
           $.ajax({  
                url:"../ajax/master-data.php",  
                method:"POST",  
                data:{AC_NO:val},  
                success:function(data){  
                    let option = [];
                    option += '<option value="" selected>Please Select</option>'
                    for(let i=0; i < data.PART_NO.length; i++){
                        option += `<option value="${data.PART_NO[i].PART_NO}">${data.PART_NO[i].PART_NO}</option>`
                    }
                    $('#PART_NO').html(option)
                    if(data.PART_NO.length==0){
                     $('#SECTION_NO').html(option)
                    }
                    if(data.PART_NO.length==0){
                     $('#SLNOINPART').html(option)
                    }
                    $('#overlay').hide()
                }  
           })  
      } 

      function load_section_no(val)  
      {  
        $('#overlay').show()
           $.ajax({  
                url:"../ajax/master-data.php",  
                method:"POST",  
                data:{AC_NO:$('#AC_NO').val(), PART_NO:val},  
                success:function(data){  
                    let option = [];
                    let emptyOption = '<option value="" selected>Please Select</option>';
                    for(let i=0; i < data.SECTION_NO.length; i++){
                        option += `<option value="${data.SECTION_NO[i].SECTION_NO}">${data.SECTION_NO[i].SECTION_NO}</option>`
                    }
                    $('#SECTION_NO').html(option)
                    $('#SLNOINPART').html(emptyOption)
                    $('#overlay').hide()
                }  
           }) 
      } 

      function load_SLNOINPART(val)  
      {  
        $('#overlay').show()
           $.ajax({  
                url:"../ajax/master-data.php",  
                method:"POST",  
                data:{acNo:$('#AC_NO').val(),partNo:$('#PART_NO').val(),sectionNo:$('#SECTION_NO').val(),action:'SLNOINPART'},   
                success:function(data){  
                    let option = [];
                    option += '<option value="" selected>Please Select</option>'
                    for(let i=0; i < data.SLNOINPART.length; i++){
                        option += `<option value="${data.SLNOINPART[i].id}">${data.SLNOINPART[i].SLNOINPART}</option>`
                    }
                    $('#SLNOINPART').html(option)
                    $('#overlay').hide()
                }  
           })  
      } 

      function changeEducation(value){
    if(value=="7"){
        $('#education_other').show()
    }else{
        $('#education_other').hide()
    }
}  
function changeProfession(value){
    if(value=="25"){
        $('#profession_other').show()
    }else{
        $('#profession_other').hide()
    }
}  
function homeShiftedChange(value){
    if(value=="1"){
        $('#homeShiftedConstituency').show()
        $('#homeShiftedAddWithin').hide()
        $('#homeShiftedAddOutside').hide()
        $('.constituency-label').prop('checked',false);
    }else{
        $('#homeShiftedConstituency').hide()
        $('#homeShiftedAddWithin').hide()
        $('#homeShiftedAddOutside').hide()
    }
}   

function constituencyChange(value){
    if(value=="0"){
        $('#homeShiftedAddWithin').show()
        $('#homeShiftedAddOutside').hide()
    }else{
        $('#homeShiftedAddWithin').hide()
        $('#homeShiftedAddOutside').show()
    }
} 

function outsideLocationChange(value){
    if(value=="1"){
        $('#outsideLocationConstituency').show()
        $('#outsideLocationAddWithin').hide()
        $('#outsideLocationAddOutside').hide()
        $('.constituency-outside-label').prop('checked',false);
    }else{
        $('#outsideLocationConstituency').hide()
        $('#outsideLocationAddWithin').hide()
        $('#outsideLocationAddOutside').hide()
    }
}   

function constituencyOutsideChange(value){
    if(value=="0"){
        $('#outsideLocationAddWithin').show()
        $('#outsideLocationAddOutside').hide()
    }else{
        $('#outsideLocationAddWithin').hide()
        $('#outsideLocationAddOutside').show()
    }
} 

function load_state(val,id,resetId)  
      {  
        $('#overlay').show()
           $.ajax({  
                url:"../ajax/master-data.php",  
                method:"POST",  
                data:{country:val},   
                success:function(data){  
                    let option = [];
                    option += '<option value="" selected>Please Select</option>'
                    for(let i=0; i < data.state.length; i++){
                        option += `<option value="${data.state[i].id}">${data.state[i].name}</option>`
                    }
                    $(id).html(option)
                    if(resetId!=null){
                        let optionReset = [];
                        optionReset += '<option value="" selected>Please Select</option>'
                        $(resetId).html(optionReset)
                    }
                    $('#overlay').hide()
                }  
           })  
      }

function load_city(val,id)  
      {  
        $('#overlay').show()
           $.ajax({  
                url:"../ajax/master-data.php",  
                method:"POST",  
                data:{state:val},   
                success:function(data){  
                    let option = [];
                    option += '<option value="" selected>Please Select</option>'
                    for(let i=0; i < data.city.length; i++){
                        option += `<option value="${data.city[i].id}">${data.city[i].city}</option>`
                    }
                    $(id).html(option)
                    $('#overlay').hide()
                }  
           })  
      }
      
</script>