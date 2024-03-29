<?php
$breadCrumbName = "Voter List";
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
          <div class="card " style="margin-top: -38px;">
            <div class="card-header pb-0 p-3" >
              <div class="row" >
                <div class="col-lg-6 d-flex justify-content-between">
                    <h6 class="mb-2">Voter List</h6>
                </div>
                <div class="col-lg-6">
                    <span style="float: right;
                        margin-right: 167px;
                        margin-top: 7px;">Language Change</span>
                                    <select class="form-select" onchange="setLanguage(this.value);" name="language" id="language" style="float: right;
                        right: 58px;
                        width: 120px;
                        font-size: 12px;
                        position: absolute;">
                    <option value="english">English</option>
                    <option value="hindi">Hindi</option>
                  </select>
                </div>
                <div class="col-lg-12">
                  <!-- <ul class="nav nav-pills">
                    <li class="nav-item" onclick="showTab('#report_1','.tab-data','')">
                      <a class="nav-link active" aria-current="page" href="javascript:void(0);">Report 1</a>
                    </li>
                    <li class="nav-item" onclick="showTab('#report_2','.tab-data','.searchTab')">
                      <a class="nav-link" href="javascript:void(0);">Report 2</a>
                    </li>
                  </ul> -->
                  <div class="tab-content" style="margin-top:2%;">
                    <input type="hidden" id="action" value="" />
                    <div id="report_1" class="tab-data">
                      <!-- <ul class="nav nav-underline">
                        <li class="nav-item" onclick="showTab('#searchVoter','.inner-tab-data','.searchTab');$('#action').val('searchTab');load_data(1)">
                          <a class="nav-link active" aria-current="page" href="javascript:void(0);">Search</a>
                        </li>
                        <li class="nav-item" onclick="showTab('#alpha','.inner-tab-data','.alphaTab');$('#action').val('alphaTab');load_data(1)">
                          <a class="nav-link" href="javascript:void(0);">Alphabetical List</a>
                        </li>
                        <li class="nav-item" onclick="showTab('#agewise','.inner-tab-data','.agewiseTab');$('#action').val('agewiseTab');load_data(1)">
                          <a class="nav-link" href="javascript:void(0);">Agewise List</a>
                        </li>
                        <li class="nav-item" onclick="showTab('#family','.inner-tab-data','.familyTab');$('#action').val('familyTab');load_data(1)">
                          <a class="nav-link" href="javascript:void(0);">Family Report</a>
                        </li>
                        <li class="nav-item" onclick="showTab('#familyHead','.inner-tab-data','.familyHeadTab');$('#action').val('familyHeadTab');load_data(1)">
                          <a class="nav-link" href="javascript:void(0);">Family Head Report</a>
                        </li>
                        <li class="nav-item" onclick="showTab('#doubleName','.inner-tab-data','.doubleNameTab');$('#action').val('doubleNameTab');load_data(1)">
                          <a class="nav-link" href="javascript:void(0);">Double Name List</a>
                        </li>
                        <li class="nav-item" onclick="showTab('#married','.inner-tab-data','.marriedTab');$('#action').val('marriedTab');load_data(1)">
                          <a class="nav-link" href="javascript:void(0);">Married Women Report</a>
                        </li>
                        <li class="nav-item" onclick="showTab('#single','.inner-tab-data','.singleTab');$('#action').val('singleTab');load_data(1)">
                          <a class="nav-link" href="javascript:void(0);">Single Voter List</a>
                        </li>
                        <li class="nav-item" onclick="showTab('#address','.inner-tab-data','.addressTab');$('#action').val('addressTab');load_data(1)">
                          <a class="nav-link" href="javascript:void(0);">Address Wise List</a>
                        </li>
                        <li class="nav-item" onclick="showTab('#surname','.inner-tab-data','.surnameTab');$('#action').val('surnameTab');load_data(1)">
                          <a class="nav-link" href="javascript:void(0);">Surname Report</a>
                        </li>
                        <li class="nav-item" onclick="showTab('#familyLabels','.inner-tab-data','.familyLabelsTab');$('#action').val('familyLabelsTab');load_data(1)">
                          <a class="nav-link" href="javascript:void(0);">Family Labels</a>
                        </li>
                        <li class="nav-item" onclick="showTab('#sms','.inner-tab-data','.smsTab');$('#action').val('smsTab');load_data(1)">
                          <a class="nav-link" href="javascript:void(0);">SMS</a>
                        </li>
                      </ul> -->
                      <div id="searchVoter" class="inner-tab-data" style="display:block;margin-top: 2%;margin-bottom: 2%;">
                        <h5>Search List</h5>
                        <div class="row">
                        <div class="col-2">
                              <div class="mb-3">
                                  <label class="label">Full Name/ Epic Id </label>
                                  <input type="text" id="fullName" class="form-control searchTab form-control-lg" placeholder="">
                              </div>
                          </div>
                          <div class="col-2">
                              <div class="mb-3">
                                  <label class="label">Father Name </label>
                                  <input type="text" id="RLN_FM_NM_EN" class="form-control searchTab form-control-lg" placeholder="">
                              </div>
                          </div>
                         
                          <div class="col-2">
                              <div class="mb-3">
                                  <label class="label">Mobile </label>
                                  <input type="text" id="MOBILE_NO" class="form-control searchTab form-control-lg" placeholder="">
                              </div>
                          </div>
                         
                          
                          <div class="col-1" style="width:10%">
                              <div class="mb-3">
                                  <label class="label">Part From</label>
                                  <input type="number" id="PART_NO_FROM" class="form-control searchTab form-control-lg" placeholder="">
                              </div>
                          </div>
                          <div class="col-1">
                              <div class="mb-3">
                                  <label class="label">Part To</label>
                                  <input type="number" id="PART_NO_TO" class="form-control searchTab form-control-lg" placeholder="">
                              </div>
                          </div>
                          <div class="col-2">
                              <div class="mb-3">
                                  <label class="label">Address </label>
                                  <input type="text" id="SECTION_NAME_EN" class="form-control searchTab form-control-lg" placeholder="">
                              </div>
                          </div>
                          <div class="col-1">
                              <div class="mb-3">
                                <button type="button" onclick="$('#action').val('searchTab');load_data(1)" style="margin-top: 50%;" id="loginBtn" class="btn btn-primary">Search</button>
                              </div>
                          </div>
                        </div>
                      </div>
                      <div id="alpha" class="inner-tab-data" style="display:none">
                        <h5>Alphabetical List</h5>
                        <div class="row">
                          <div class="col-1" style="width:10%">
                              <div class="mb-3">
                                  <label class="label">Part From</label>
                                  <input type="number" id="PART_NO_FROM_ALPHA" class="form-control alphaTab form-control-lg" placeholder="">
                              </div>
                          </div>
                          <div class="col-1">
                              <div class="mb-3">
                                  <label class="label">Part To</label>
                                  <input type="number" id="PART_NO_TO_ALPHA" class="form-control alphaTab form-control-lg" placeholder="">
                              </div>
                          </div>
                          <!-- <div class="col-2">
                              <div class="mb-3">
                                  <label class="label">Language </label>
                                  <select id="language_alphaTab" class="form-select alphaTab commonSearch">
                                      <option value="english" selected>English</option>
                                      <option value="hindi">Hindi</option>
                                  </select> 
                              </div>
                          </div> -->
                          <div class="col-2">
                              <div class="mb-3">
                                <button type="button" onclick="$('#action').val('alphaTab');load_data(1)" style="margin-top: 22%;" id="loginBtn" class="btn btn-primary">Search</button>
                              </div>
                          </div>
                        </div>  
                      </div>
                      <div id="agewise" class="inner-tab-data" style="display:none">
                        <h5>Agewise List</h5>
                        <div class="row">
                         
                          <div class="col-1">
                              <div class="mb-3">
                                  <label class="label">Age From</label>
                                  <input type="number" id="AGE_FROM" class="form-control agewiseTab form-control-lg" placeholder="">
                              </div>
                          </div>
                          <div class="col-1">
                              <div class="mb-3">
                                  <label class="label">Age To</label>
                                  <input type="number" id="AGE_TO" class="form-control agewiseTab form-control-lg" placeholder="">
                              </div>
                          </div>
                          <div class="col-2">
                              <div class="mb-3">
                                  <label class="label">GENDER</label>
                                  <select id="GENDER_AGE" class="form-select agewiseTab">
                                      <option value="" selected>Select</option>
                                      <option value="M">Male</option>
                                      <option value="F">Female</option>
                                  </select> 
                              </div>
                          </div>
                          <div class="col-2">
                              <div class="mb-3">
                                  <label class="label">SORT</label>
                                  <select id="SORT_AGE" class="form-select agewiseTab">
                                      <option value="" selected>Select</option>
                                      <option value="Alphabetical">Alphabetical</option>
                                      <option value="Normal">Normal</option>
                                  </select> 
                              </div>
                          </div>
                          <div class="col-1" style="width:10%">
                              <div class="mb-3">
                                  <label class="label">Part From</label>
                                  <input type="number" id="PART_NO_AGE_FROM" class="form-control agewiseTab form-control-lg" placeholder="">
                              </div>
                          </div>
                          <div class="col-1">
                              <div class="mb-3">
                                  <label class="label">Part To</label>
                                  <input type="number" id="PART_NO_AGE_TO" class="form-control agewiseTab form-control-lg" placeholder="">
                              </div>
                          </div>
                          <!-- <div class="col-2">
                              <div class="mb-3">
                                  <label class="label">Language </label>
                                  <select id="language_agewiseTab" class="form-select agewiseTab commonSearch">
                                      <option value="english" selected>English</option>
                                      <option value="hindi">Hindi</option>
                                  </select> 
                              </div>
                          </div> -->
                          <div class="col-2">
                              <div class="mb-3">
                                <button type="button" onclick="$('#action').val('agewiseTab');load_data(1)" style="margin-top: 22%;" id="loginBtn" class="btn btn-primary">Search</button>
                              </div>
                          </div>
                        </div> 
                      </div>
                      <div id="family" class="inner-tab-data" style="display:none">
                        <h5>Family Report</h5>
                        <div class="row">
                          <div class="col-2">
                              <div class="mb-3">
                                  <label class="label">Family Size From</label>
                                  <input type="number" id="FAMILY_SIZE_FROM" class="form-control familyTab form-control-lg" placeholder="">
                              </div>
                          </div>
                          <div class="col-2">
                              <div class="mb-3">
                                  <label class="label">Family Size To</label>
                                  <input type="number" id="FAMILY_SIZE_TO" class="form-control familyTab form-control-lg" placeholder="">
                              </div>
                          </div>
                          <div class="col-1" style="width:10%">
                              <div class="mb-3">
                                  <label class="label">Part From</label>
                                  <input type="number" id="PART_NO_FROM_FAMILY" class="form-control familyTab form-control-lg" placeholder="">
                              </div>
                          </div>
                          <div class="col-1">
                              <div class="mb-3">
                                  <label class="label">Part To</label>
                                  <input type="number" id="PART_NO_TO_FAMILY" class="form-control familyTab form-control-lg" placeholder="">
                              </div>
                          </div>
                          <!-- <div class="col-2">
                              <div class="mb-3">
                                  <label class="label">Surname</label>
                                  <input type="text" id="SURNAME_FAMILY" class="form-control familyTab form-control-lg" placeholder="">
                              </div>
                          </div> -->
                          <!-- <div class="col-2">
                              <div class="mb-3">
                                  <label class="label">Language </label>
                                  <select id="language_familyTab" class="form-select familyTab commonSearch">
                                      <option value="english" selected>English</option>
                                      <option value="hindi">Hindi</option>
                                  </select> 
                              </div>
                          </div> -->
                          <div class="col-2">
                              <div class="mb-3">
                                <button type="button" onclick="$('#action').val('familyTab');load_data(1)" style="margin-top: 22%;" id="loginBtn" class="btn btn-primary">Search</button>
                              </div>
                          </div>
                        </div> 
                      </div>
                      <div id="familyHead" class="inner-tab-data" style="display:none">
                        <h5>Family Head Report</h5>
                        <div class="row">
                          <!-- <div class="col-4">
                              <div class="mb-3">
                                  <label class="label">Part No. (Seperated by comma Example : 1,2,3)</label>
                                  <input type="text" id="PART_NO_FAMILY_HEAD" class="form-control familyHeadTab form-control-lg" placeholder="">
                              </div>
                          </div> -->
                          
                          <div class="col-2">
                              <div class="mb-3">
                                  <label class="label">Family Size From</label>
                                  <input type="number" id="FAMILY_HEAD_SIZE_FROM" class="form-control familyHeadTab form-control-lg" placeholder="">
                              </div>
                          </div>
                          <div class="col-2">
                              <div class="mb-3">
                                  <label class="label">Family Size To</label>
                                  <input type="number" id="FAMILY_HEAD_SIZE_TO" class="form-control familyHeadTab form-control-lg" placeholder="">
                              </div>
                          </div>
                          <div class="col-1">
                              <div class="mb-3">
                                  <label class="label">Age From</label>
                                  <input type="number" id="FAMILY_HEAD_AGE_FROM" class="form-control familyHeadTab form-control-lg" placeholder="">
                              </div>
                          </div>
                          <div class="col-1">
                              <div class="mb-3">
                                  <label class="label">Age To</label>
                                  <input type="number" id="FAMILY_HEAD_AGE_TO" class="form-control familyHeadTab form-control-lg" placeholder="">
                              </div>
                          </div>
                          <div class="col-1" style="width:10%">
                              <div class="mb-3">
                                  <label class="label">Part From</label>
                                  <input type="number" id="PART_NO_FROM_FAMILY_HEAD" class="form-control familyHeadTab form-control-lg" placeholder="">
                              </div>
                          </div>
                          <div class="col-1">
                              <div class="mb-3">
                                  <label class="label">Part To</label>
                                  <input type="number" id="PART_NO_TO_FAMILY_HEAD" class="form-control familyHeadTab form-control-lg" placeholder="">
                              </div>
                          </div>
                          <!-- <div class="col-2">
                              <div class="mb-3">
                                  <label class="label">Language </label>
                                  <select id="language_familyHeadTab" class="form-select familyHeadTab commonSearch">
                                      <option value="english" selected>English</option>
                                      <option value="hindi">Hindi</option>
                                  </select> 
                              </div>
                          </div> -->
                          <!-- <div class="col-2">
                              <div class="mb-3">
                                  <label class="label">Family Head Gender</label>
                                  <select id="FAMILY_HEAD_GENDER" class="form-select familyHeadTab">
                                      <option value="" selected>Select</option>
                                      <option value="M">Male</option>
                                      <option value="F">Female</option>
                                  </select> 
                              </div>
                          </div>
                          <div class="col-2">
                              <div class="mb-3">
                                  <label class="label">Select Caste</label>
                                  <select id="FAMILY_HEAD_CASTE" class="form-select familyHeadTab">
                                      <option value="" selected>Select</option>
                                      <option value="0">Hindu</option>
                                      <option value="1">Muslim</option>
                                  </select> 
                              </div>
                          </div> -->
                          <div class="col-2">
                              <div class="mb-3">
                                <button type="button" onclick="$('#action').val('familyHeadTab');load_data(1)" style="margin-top: 22%;" id="loginBtn" class="btn btn-primary">Search</button>
                              </div>
                          </div>
                        </div> 
                      </div>
                      <div id="doubleName" class="inner-tab-data" style="display:none">
                        <h5>Double Voter List</h5>
                        <div class="row">
                          <!-- <div class="col-4">
                              <div class="mb-3">
                                  <label class="label">Part No. (Seperated by comma Example : 1,2,3)</label>
                                  <input type="text" id="PART_NO_DOUBLE" class="form-control doubleNameTab form-control-lg" placeholder="">
                              </div>
                          </div> -->
                          <div class="col-1" style="width:10%">
                              <div class="mb-3">
                                  <label class="label">Part From</label>
                                  <input type="number" id="PART_NO_FROM_DOUBLE" class="form-control doubleNameTab form-control-lg" placeholder="">
                              </div>
                          </div>
                          <div class="col-1">
                              <div class="mb-3">
                                  <label class="label">Part To</label>
                                  <input type="number" id="PART_NO_TO_DOUBLE" class="form-control doubleNameTab form-control-lg" placeholder="">
                              </div>
                          </div>
                          <!-- <div class="col-2">
                              <div class="mb-3">
                                  <label class="label">Language </label>
                                  <select id="language_doubleNameTab" class="form-select doubleNameTab commonSearch">
                                      <option value="english" selected>English</option>
                                      <option value="hindi">Hindi</option>
                                  </select> 
                              </div>
                          </div> -->
                          <div class="col-2">
                              <div class="mb-3">
                                <button type="button" onclick="$('#action').val('doubleNameTab');load_data(1)" style="margin-top: 22%;" id="loginBtn" class="btn btn-primary">Search</button>
                              </div>
                          </div>                        
                         </div>  
                      </div>
                      <div id="married" class="inner-tab-data" style="display:none">
                        <h5>Married Women List</h5>
                        <div class="row">
                          <div class="col-2">
                              <div class="mb-3">
                                  <label class="label">Considering Marriage Age</label>
                                  <input type="number" id="AGE_MARRIED" class="form-control marriedTab form-control-lg" placeholder="">
                              </div>
                          </div>
                          
                          <div class="col-2">
                              <div class="mb-3">
                                  <label class="label">SORT</label>
                                  <select id="SORT_MARRIED" class="form-select marriedTab">
                                      <option value="" selected>Select</option>
                                      <option value="Alphabetical">Alphabetical</option>
                                      <option value="Normal">Normal</option>
                                  </select> 
                              </div>
                          </div>
                          <div class="col-1" style="width:10%">
                              <div class="mb-3">
                                  <label class="label">Part From</label>
                                  <input type="number" id="PART_NO_MARRIED_FROM" class="form-control marriedTab form-control-lg" placeholder="">
                              </div>
                          </div>
                          <div class="col-1">
                              <div class="mb-3">
                                  <label class="label">Part To</label>
                                  <input type="number" id="PART_NO_MARRIED_TO" class="form-control marriedTab form-control-lg" placeholder="">
                              </div>
                          </div>
                          <!-- <div class="col-2">
                              <div class="mb-3">
                                  <label class="label">Language </label>
                                  <select id="language_marriedTab" class="form-select marriedTab commonSearch">
                                      <option value="english" selected>English</option>
                                      <option value="hindi">Hindi</option>
                                  </select> 
                              </div>
                          </div> -->
                          <div class="col-2">
                              <div class="mb-3">
                                <button type="button" onclick="$('#action').val('marriedTab');load_data(1)" style="margin-top: 22%;" id="loginBtn" class="btn btn-primary">Search</button>
                              </div>
                          </div>
                        </div> 
                      </div>
                      <div id="single" class="inner-tab-data" style="display:none">
                        <h5>Single Voter List</h5>
                        <div class="row">
                          <div class="col-2">
                              <div class="mb-3">
                                  <label class="label">Age From</label>
                                  <input type="number" id="AGE_SINGLE_FROM" class="form-control singleTab form-control-lg" placeholder="">
                              </div>
                          </div>
                          <div class="col-2">
                              <div class="mb-3">
                                  <label class="label">Age To</label>
                                  <input type="number" id="AGE_SINGLE_TO" class="form-control singleTab form-control-lg" placeholder="">
                              </div>
                          </div>
                          
                          <div class="col-2">
                              <div class="mb-3">
                                  <label class="label">Gender</label>
                                  <select id="SORT_GENDER_SINGLE" class="form-select singleTab">
                                      <option value="" selected>Select</option>
                                      <option value="M">Male</option>
                                      <option value="F">Female</option>
                                  </select> 
                              </div>
                          </div>
                          <div class="col-1" style="width:10%">
                              <div class="mb-3">
                                  <label class="label">Part From</label>
                                  <input type="number" id="PART_NO_SINGLE_FROM" class="form-control singleTab form-control-lg" placeholder="">
                              </div>
                          </div>
                          <div class="col-1">
                              <div class="mb-3">
                                  <label class="label">Part To</label>
                                  <input type="number" id="PART_NO_SINGLE_TO" class="form-control singleTab form-control-lg" placeholder="">
                              </div>
                          </div>
                          <!-- <div class="col-2">
                              <div class="mb-3">
                                  <label class="label">Language </label>
                                  <select id="language_singleTab" class="form-select singleTab commonSearch">
                                      <option value="english" selected>English</option>
                                      <option value="hindi">Hindi</option>
                                  </select> 
                              </div>
                          </div> -->
                          <div class="col-2">
                              <div class="mb-3">
                                <button type="button" onclick="$('#action').val('singleTab');load_data(1)" style="margin-top: 22%;" id="loginBtn" class="btn btn-primary">Search</button>
                              </div>
                          </div>
                        </div> 
                      </div>
                      <div id="address" class="inner-tab-data" style="display:none">
                        <h5>Addresswise List</h5>
                        <div class="row">
                          <!-- <div class="col-4">
                              <div class="mb-3">
                                  <label class="label">Part No. (Seperated by comma Example : 1,2,3)</label>
                                  <input type="text" id="PART_NO_ADDRESS" class="form-control addressTab form-control-lg" placeholder="">
                              </div>
                          </div> -->
                         
                          <div class="col-4">
                              <div class="mb-3">
                                  <label class="label">Search</label>
                                  <input type="text" id="SEARCH_ADDRESS" class="form-control addressTab form-control-lg" placeholder="">
                              </div>
                          </div>
                          <div class="col-1" style="width:10%">
                              <div class="mb-3">
                                  <label class="label">Part From</label>
                                  <input type="number" id="PART_NO_FROM_ADDRESS" class="form-control addressTab form-control-lg" placeholder="">
                              </div>
                          </div>
                          <div class="col-1">
                              <div class="mb-3">
                                  <label class="label">Part To</label>
                                  <input type="number" id="PART_NO_TO_ADDRESS" class="form-control addressTab form-control-lg" placeholder="">
                              </div>
                          </div>
                          <!-- <div class="col-2">
                              <div class="mb-3">
                                  <label class="label">Language </label>
                                  <select id="language_addressTab" class="form-select addressTab commonSearch">
                                      <option value="english" selected>English</option>
                                      <option value="hindi">Hindi</option>
                                  </select> 
                              </div>
                          </div> -->
                          <div class="col-2">
                              <div class="mb-3">
                                <button type="button" onclick="$('#action').val('addressTab');load_data(1)" style="margin-top: 22%;" id="loginBtn" class="btn btn-primary">Search</button>
                              </div>
                          </div>
                        </div> 
                      </div>
                      <div id="surname" class="inner-tab-data" style="display:none">
                        <h5>Surname List</h5>
                        <div class="row">
                          <!-- <div class="col-4">
                              <div class="mb-3">
                                  <label class="label">Part No. (Seperated by comma Example : 1,2,3)</label>
                                  <input type="text" id="PART_NO_SURNAME" class="form-control surnameTab form-control-lg" placeholder="">
                              </div>
                          </div> -->
                        
                          <div class="col-4">
                              <div class="mb-3">
                                  <label class="label">Search</label>
                                  <input type="text" id="SEARCH_SURNAME" class="form-control surnameTab form-control-lg" placeholder="">
                              </div>
                          </div>
                          <div class="col-1" style="width:10%">
                              <div class="mb-3">
                                  <label class="label">Part From</label>
                                  <input type="number" id="PART_NO_FROM_SURNAME" class="form-control surnameTab form-control-lg" placeholder="">
                              </div>
                          </div>
                          <div class="col-1">
                              <div class="mb-3">
                                  <label class="label">Part To</label>
                                  <input type="number" id="PART_NO_TO_SURNAME" class="form-control surnameTab form-control-lg" placeholder="">
                              </div>
                          </div>
                          <!-- <div class="col-2">
                              <div class="mb-3">
                                  <label class="label">Language </label>
                                  <select id="language_surnameTab" class="form-select surnameTab commonSearch">
                                      <option value="english" selected>English</option>
                                      <option value="hindi">Hindi</option>
                                  </select> 
                              </div>
                          </div> -->
                          <div class="col-2">
                              <div class="mb-3">
                                <button type="button" onclick="$('#action').val('surnameTab');load_data(1)" style="margin-top: 22%;" id="loginBtn" class="btn btn-primary">Search</button>
                              </div>
                          </div>
                        </div> 
                      </div>
                      <div id="familyLabels" class="inner-tab-data" style="display:none">
                        <h5>Family Labels</h5>
                        <div class="row">
                          <div class="col-2">
                              <div class="mb-3">
                                  <label class="label">Family Size From</label>
                                  <input type="number" id="FAMILY_SIZE_FROM_LABEL" class="form-control familyLabelsTab form-control-lg" placeholder="">
                              </div>
                          </div>
                          <div class="col-2">
                              <div class="mb-3">
                                  <label class="label">Family Size To</label>
                                  <input type="number" id="FAMILY_SIZE_TO_LABEL" class="form-control familyLabelsTab form-control-lg" placeholder="">
                              </div>
                          </div>
                          <div class="col-1" style="width:10%">
                              <div class="mb-3">
                                  <label class="label">Part From</label>
                                  <input type="text" id="PART_NO_FROM_LABEL" class="form-control familyLabelsTab form-control-lg" placeholder="">
                              </div>
                          </div>
                          <div class="col-1">
                              <div class="mb-3">
                                  <label class="label">Part To</label>
                                  <input type="text" id="PART_NO_TO_LABEL" class="form-control familyLabelsTab form-control-lg" placeholder="">
                              </div>
                          </div>
                          <!-- <div class="col-2">
                              <div class="mb-3">
                                  <label class="label">Language </label>
                                  <select id="language_familyLabelsTab" class="form-select familyLabelsTab commonSearch">
                                      <option value="english" selected>English</option>
                                      <option value="hindi">Hindi</option>
                                  </select> 
                              </div>
                          </div> -->
                          <div class="col-2">
                              <div class="mb-3">
                                <button type="button" onclick="$('#action').val('familyLabelsTab');load_data(1)" style="margin-top: 22%;" id="loginBtn" class="btn btn-primary">Search</button>
                              </div>
                          </div>
                        </div> 
                      </div>
                      <div id="sms" class="inner-tab-data" style="display:none">
                        <h5>SMS Panel</h5>
                        <div class="row">
                          <div class="col-1" style="width:10%">
                              <div class="mb-3">
                                  <label class="label">Part From</label>
                                  <input type="number" id="PART_NO_FROM_SMS" class="form-control smsTab form-control-lg" placeholder="">
                              </div>
                          </div>
                          <div class="col-1">
                              <div class="mb-3">
                                  <label class="label">Part To</label>
                                  <input type="number" id="PART_NO_TO_SMS" class="form-control smsTab form-control-lg" placeholder="">
                              </div>
                          </div>
                          <div class="col-2">
                              <div class="mb-3">
                                  <label class="label">Name</label>
                                  <input type="text" id="NAME_SMS" class="form-control smsTab form-control-lg" placeholder="">
                              </div>
                          </div>
                          <div class="col-2">
                              <div class="mb-3">
                                  <label class="label">Surname</label>
                                  <input type="text" id="SURNAME_SMS" class="form-control smsTab form-control-lg" placeholder="">
                              </div>
                          </div>
                          <div class="col-2">
                              <div class="mb-3">
                                  <label class="label">Relative</label>
                                  <input type="text" id="RELATIVE_SMS" class="form-control smsTab form-control-lg" placeholder="">
                              </div>
                          </div>
                          <!-- <div class="col-2">
                              <div class="mb-3">
                                  <label class="label">Language </label>
                                  <select id="language_smsTab" class="form-select smsTab commonSearch">
                                      <option value="english" selected>English</option>
                                      <option value="hindi">Hindi</option>
                                  </select> 
                              </div>
                          </div> -->
                          <div class="col-2">
                              <div class="mb-3">
                                <button type="button" onclick="$('#action').val('smsTab');load_data(1)" style="margin-top: 20%;" id="loginBtn" class="btn btn-primary">Search</button>
                              </div>
                          </div>
            
                          <div class="col-2">
                              <div class="mb-3">
                                <button type="button" onclick="$('#exampleModal').modal('show'); " style="margin-top: 22%;" id="loginBtn" class="btn btn-primary"><i class="fa fa-send"></i> SMS</button>
                              </div>
                          </div>
                        </div> 
                      </div>
                    </div>
                    <div id="report_2" class="tab-data" style="display:none">
                      <!-- <ul class="nav nav-underline">
                        <li class="nav-item" onclick="showTab('#caste','.inner-tab-data','.casteTab');$('#action').val('casteTab');load_data(1)">
                          <a class="nav-link active" aria-current="page" href="javascript:void(0);">Caste Wise List</a>
                        </li>
                        <li class="nav-item" onclick="showTab('#labelValue','.inner-tab-data','.labelValueTab');$('#action').val('labelValueTab');load_data(1)">
                          <a class="nav-link active" aria-current="page" href="javascript:void(0);">Label Value Filter</a>
                        </li>
                        <li class="nav-item" onclick="showTab('#areaWise','.inner-tab-data','.areaWiseTab');$('#action').val('areaWiseTab');load_data(1)">
                          <a class="nav-link active" aria-current="page" href="javascript:void(0);">Area Wise List</a>
                        </li>
                        <li class="nav-item" onclick="showTab('#partyWise','.inner-tab-data','.partyWiseTab');$('#action').val('partyWiseTab');load_data(1)">
                          <a class="nav-link active" aria-current="page" href="javascript:void(0);">Party Wise List</a>
                        </li>
                        <li class="nav-item" onclick="showTab('#deadList','.inner-tab-data','.deadListTab');$('#action').val('deadListTab');load_data(1)">
                          <a class="nav-link active" aria-current="page" href="javascript:void(0);">Dead List</a>
                        </li>
                        <li class="nav-item" onclick="showTab('#birthday','.inner-tab-data','.birthdayTab');$('#action').val('birthdayTab');load_data(1)">
                          <a class="nav-link active" aria-current="page" href="javascript:void(0);">Birthday List</a>
                        </li>
                      </ul> -->
                      <div id="caste" class="inner-tab-data" style="display:none;margin-top: 2%;margin-bottom: 2%;">
                        <h5>Caste Wise List</h5>
                        <div class="row">
                          <div class="col-2">
                            <label class="label">Caste</label>
                            <select id="RELIGION_CASTE" class="form-select casteTab">
                                <option value="" selected>Select</option>
                                <option value="0">Hindu</option>
                                <option value="1">Muslim</option>
                            </select> 
                          </div>
                          <div class="col-1" style="width:10%">
                              <div class="mb-3">
                                  <label class="label">Part From</label>
                                  <input type="number" id="PART_NO_FROM_CASTE " class="form-control casteTab form-control-lg" placeholder="">
                              </div>
                          </div>
                          <div class="col-1">
                              <div class="mb-3">
                                  <label class="label">Part To</label>
                                  <input type="number" id="PART_NO_TO_CASTE" class="form-control casteTab form-control-lg" placeholder="">
                              </div>
                          </div>
                          <!-- <div class="col-2">
                              <div class="mb-3">
                                  <label class="label">Language </label>
                                  <select id="language_casteTab" class="form-select casteTab commonSearch">
                                      <option value="english" selected>English</option>
                                      <option value="hindi">Hindi</option>
                                  </select> 
                              </div>
                          </div> -->
                          <div class="col-2">
                              <div class="mb-3">
                                <button type="button" onclick="$('#action').val('casteTab');load_data(1)" style="margin-top: 22%;" id="loginBtn" class="btn btn-primary">Search</button>
                              </div>
                          </div>
                        </div>
                      </div>
                      <div id="labelValue" class="inner-tab-data" style="display:none;margin-top: 2%;margin-bottom: 2%;">
                        <h5>Lable Value Wise List</h5>
                        <div class="row">
                        
                          <div class="col-2">
                            <label class="label">Lable Value</label>
                            <select id="LABEL_VALUE" class="form-select labelValueTab">
                                <option value="" selected>Select</option>
                            </select> 
                          </div>
                          <div class="col-1" style="width:10%">
                              <div class="mb-3">
                                  <label class="label">Part From</label>
                                  <input type="number" id="PART_NO_FROM_LABEL_VALUE" class="form-control labelValueTab form-control-lg" placeholder="">
                              </div>
                          </div>
                          <div class="col-1">
                              <div class="mb-3">
                                  <label class="label">Part To</label>
                                  <input type="number" id="PART_NO_TO_LABEL_VALUE" class="form-control labelValueTab form-control-lg" placeholder="">
                              </div>
                          </div>
                          <!-- <div class="col-2">
                              <div class="mb-3">
                                  <label class="label">Language </label>
                                  <select id="language_labelValueTab" class="form-select labelValueTab commonSearch">
                                      <option value="english" selected>English</option>
                                      <option value="hindi">Hindi</option>
                                  </select> 
                              </div>
                          </div> -->
                          <div class="col-2">
                              <div class="mb-3">
                                <button type="button" onclick="$('#action').val('labelValueTab');load_data(1)" style="margin-top: 22%;" id="loginBtn" class="btn btn-primary">Search</button>
                              </div>
                          </div>
                        </div>
                      </div>
                      <div id="areaWise" class="inner-tab-data" style="display:none;margin-top: 2%;margin-bottom: 2%;">
                        <h5>Area Wise List</h5>
                        <div class="row">
                          
                          <div class="col-2">
                            <label class="label">Area</label>
                            <select id="AREA_LIST" class="form-select areaWiseTab">
                                <option value="" selected>Select</option>
                            </select> 
                          </div>
                          <div class="col-1" style="width:10%">
                              <div class="mb-3">
                                  <label class="label">Part From</label>
                                  <input type="number" id="PART_NO_FROM_AREA" class="form-control areaWiseTab form-control-lg" placeholder="">
                              </div>
                          </div>
                          <div class="col-1">
                              <div class="mb-3">
                                  <label class="label">Part To</label>
                                  <input type="number" id="PART_NO_TO_AREA" class="form-control areaWiseTab form-control-lg" placeholder="">
                              </div>
                          </div>
                          <!-- <div class="col-2">
                              <div class="mb-3">
                                  <label class="label">Language </label>
                                  <select id="language_areaWiseTab" class="form-select areaWiseTab commonSearch">
                                      <option value="english" selected>English</option>
                                      <option value="hindi">Hindi</option>
                                  </select> 
                              </div>
                          </div> -->
                          <div class="col-2">
                              <div class="mb-3">
                                <button type="button" onclick="$('#action').val('areaWiseTab');load_data(1)" style="margin-top: 22%;" id="loginBtn" class="btn btn-primary">Search</button>
                              </div>
                          </div>
                        </div>
                      </div>
                      <div id="partyWise" class="inner-tab-data" style="display:none;margin-top: 2%;margin-bottom: 2%;">
                        <h5>Party Wise List</h5>
                        <div class="row">
                         
                          <div class="col-2">
                            <label class="label">Area</label>
                            <select id="PARTY_LIST" class="form-select partyWiseTab">
                                <option value="" selected>Select</option>
                            </select> 
                          </div>
                          <div class="col-1" style="width:10%">
                              <div class="mb-3">
                                  <label class="label">Part From</label>
                                  <input type="number" id="PART_NO_FROM_PARTY" class="form-control partyWiseTab form-control-lg" placeholder="">
                              </div>
                          </div>
                          <div class="col-1">
                              <div class="mb-3">
                                  <label class="label">Part To</label>
                                  <input type="number" id="PART_NO_TO_PARTY" class="form-control partyWiseTab form-control-lg" placeholder="">
                              </div>
                          </div>
                          <!-- <div class="col-2">
                              <div class="mb-3">
                                  <label class="label">Language </label>
                                  <select id="language_partyWiseTab" class="form-select partyWiseTab commonSearch">
                                      <option value="english" selected>English</option>
                                      <option value="hindi">Hindi</option>
                                  </select> 
                              </div>
                          </div> -->
                          <div class="col-2">
                              <div class="mb-3">
                                <button type="button" onclick="$('#action').val('partyWiseTab');load_data(1)" style="margin-top: 22%;" id="loginBtn" class="btn btn-primary">Search</button>
                              </div>
                          </div>
                        </div>
                      </div>
                      <div id="deadList" class="inner-tab-data" style="display:none;margin-top: 2%;margin-bottom: 2%;">
                        <h5>Dead/Alive Voter List</h5>
                        <div class="row">
                         
                          <div class="col-2">
                            <label class="label">Dead/Alive</label>
                            <select id="DEAD_LIST" class="form-select deadListTab">
                                <option value="" selected>Select</option>
                                <option value="0">Alive</option>
                                <option value="1">Dead</option>
                            </select> 
                          </div>
                          <div class="col-1" style="width:10%">
                              <div class="mb-3">
                                  <label class="label">Part From</label>
                                  <input type="number" id="PART_NO_FROM_DEAD" class="form-control deadListTab form-control-lg" placeholder="">
                              </div>
                          </div>
                          <div class="col-1">
                              <div class="mb-3">
                                  <label class="label">Part To</label>
                                  <input type="number" id="PART_NO_TO_DEAD" class="form-control deadListTab form-control-lg" placeholder="">
                              </div>
                          </div>
                          <!-- <div class="col-2">
                              <div class="mb-3">
                                  <label class="label">Language </label>
                                  <select id="language_deadListTab" class="form-select deadListTab commonSearch">
                                      <option value="english" selected>English</option>
                                      <option value="hindi">Hindi</option>
                                  </select> 
                              </div>
                          </div> -->
                          <div class="col-2">
                              <div class="mb-3">
                                <button type="button" onclick="$('#action').val('deadListTab');load_data(1)" style="margin-top: 22%;" id="loginBtn" class="btn btn-primary">Search</button>
                              </div>
                          </div>
                        </div>
                      </div>
                      <div id="birthday" class="inner-tab-data" style="display:none;margin-top: 2%;margin-bottom: 2%;">
                        <h5>Birthday Wise List</h5>
                        <div class="row">
                         
                          <div class="col-1">
                              <div class="mb-3">
                                  <label class="label">Date From</label>
                                  <input type="number" id="DATE_FROM_BIRTHDAY" class="form-control birthdayTab form-control-lg" placeholder="">
                              </div>
                          </div>
                          <div class="col-1">
                              <div class="mb-3">
                                  <label class="label">Date To</label>
                                  <input type="number" id="DATE_TO_BIRTHDAY" class="form-control birthdayTab form-control-lg" placeholder="">
                              </div>
                          </div>
                          <div class="col-2">
                            <label class="label">Month</label>
                            <select id="MONTH_LIST" class="form-select birthdayTab">
                                <option value="" selected>Select</option>
                                <option value="01">JANUARY</option>
                                <option value="02">FEBRUARY</option>
                                <option value="03">MARCH</option>
                                <option value="04">APRIL</option>
                                <option value="05">MAY</option>
                                <option value="06">JUNE</option>
                                <option value="07">JULY</option>
                                <option value="08">AUGUST</option>
                                <option value="09">SEPTEMBER</option>
                                <option value="10">OCTOBER</option>
                                <option value="11">NOVEMBER</option>
                                <option value="12">DECEMBER</option>
                            </select> 
                          </div>
                          <div class="col-1" style="width:10%">
                              <div class="mb-3">
                                  <label class="label">Part From</label>
                                  <input type="number" id="PART_NO_FROM_BIRTHDAY" class="form-control birthdayTab form-control-lg" placeholder="">
                              </div>
                          </div>
                          <div class="col-1">
                              <div class="mb-3">
                                  <label class="label">Part To</label>
                                  <input type="number" id="PART_NO_TO_BIRTHDAY" class="form-control birthdayTab form-control-lg" placeholder="">
                              </div>
                          </div>
                          <!-- <div class="col-2">
                              <div class="mb-3">
                                  <label class="label">Language </label>
                                  <select id="language_birthdayTab" class="form-select birthdayTab commonSearch">
                                      <option value="english" selected>English</option>
                                      <option value="hindi">Hindi</option>
                                  </select> 
                              </div>
                          </div> -->
                          <div class="col-2">
                              <div class="mb-3">
                                <button type="button" onclick="$('#action').val('birthdayTab');load_data(1)" style="margin-top: 22%;" id="loginBtn" class="btn btn-primary">Search</button>
                              </div>
                          </div>
                        </div>
                      </div>
                      <div id="educationList" class="inner-tab-data" style="display:none;margin-top: 2%;margin-bottom: 2%;">
                        <h5>Education Wise Voter List</h5>
                        <div class="row">
                        <div class="col-2">
                            <label class="label">Education</label>
                            <select id="EDUCATION_LIST" class="form-select educationListTab">
                                <option value="" selected>Select</option>
                                <option value="0">Uneducated</option>
                                <option value="1">10th</option>
                                <option value="2">12th</option>
                                <option value="3">Undergraduate</option>
                                <option value="4">Graduate</option>
                                <option value="5">Post Graduate</option>
                                <option value="6">PHD</option>
                                <option value="7">Other</option>
                            </select> 
                          </div>
                          <div class="col-1" style="width:10%">
                              <div class="mb-3">
                                  <label class="label">Part From</label>
                                  <input type="number" id="PART_NO_FROM_EDUCATION" class="form-control educationListTab form-control-lg" placeholder="">
                              </div>
                          </div>
                          <div class="col-1">
                              <div class="mb-3">
                                  <label class="label">Part To</label>
                                  <input type="number" id="PART_NO_TO_EDUCATION" class="form-control educationListTab form-control-lg" placeholder="">
                              </div>
                          </div>
                          <div class="col-2">
                              <div class="mb-3">
                                <button type="button" onclick="$('#action').val('educationListTab');load_data(1)" style="margin-top:22%;" id="loginBtn" class="btn btn-primary">Search</button>
                              </div>
                          </div>
                        </div>
                      </div>
                      <div id="homeShift" class="inner-tab-data" style="display:none;margin-top: 2%;margin-bottom: 2%;">
                        <h5>Home Shifted Voter List</h5>
                        <div class="row">
                        <div class="col-2">
                            <label class="label">Home Shifted</label>
                            <select id="HOME_SHIFT" class="form-select homeShiftTab">
                                <option value="" selected>Select</option>
                                <option value="0">NO</option>
                                <option value="1">YES</option>
                            </select> 
                          </div>
                          <div class="col-1" style="width:10%">
                              <div class="mb-3">
                                  <label class="label">Part From</label>
                                  <input type="number" id="PART_NO_FROM_HOME_SHIFT" class="form-control homeShiftTab form-control-lg" placeholder="">
                              </div>
                          </div>
                          <div class="col-1">
                              <div class="mb-3">
                                  <label class="label">Part To</label>
                                  <input type="number" id="PART_NO_TO_HOME_SHIFT" class="form-control homeShiftTab form-control-lg" placeholder="">
                              </div>
                          </div>
                          <div class="col-2">
                              <div class="mb-3">
                                <button type="button" onclick="$('#action').val('homeShiftTab');load_data(1)" style="margin-top:22%;" id="loginBtn" class="btn btn-primary">Search</button>
                              </div>
                          </div>
                        </div>
                      </div>
                      <div id="newVoters" class="inner-tab-data" style="display:none;margin-top: 2%;margin-bottom: 2%;">
                        <h5>New Voter List</h5>
                        <div class="row">
                          <div class="col-1" style="width:10%">
                              <div class="mb-3">
                                  <label class="label">Part From</label>
                                  <input type="number" id="PART_NO_FROM_NEW_VOTER" class="form-control newVotersTab form-control-lg" placeholder="">
                              </div>
                          </div>
                          <div class="col-1">
                              <div class="mb-3">
                                  <label class="label">Part To</label>
                                  <input type="number" id="PART_NO_TO_NEW_VOTER" class="form-control newVotersTab form-control-lg" placeholder="">
                              </div>
                          </div>
                          <div class="col-2">
                              <div class="mb-3">
                                <button type="button" onclick="$('#action').val('newVotersTab');load_data(1)" style="margin-top:22%;" id="loginBtn" class="btn btn-primary">Search</button>
                              </div>
                          </div>
                        </div>
                      </div>
                      <div id="professional" class="inner-tab-data" style="display:none;margin-top: 2%;margin-bottom: 2%;">
                        <h5>Profession Voter List</h5>
                        <div class="row">
                        <div class="col-2">
                            <label class="label">Profession</label>
                            <select id="PROFESSION" class="form-select professionalTab">
                                <option value="" selected>Select</option>
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
                          </div>
                          <div class="col-1" style="width:10%">
                              <div class="mb-3">
                                  <label class="label">Part From</label>
                                  <input type="number" id="PART_NO_FROM_PROFESSION" class="form-control professionalTab form-control-lg" placeholder="">
                              </div>
                          </div>
                          <div class="col-1">
                              <div class="mb-3">
                                  <label class="label">Part To</label>
                                  <input type="number" id="PART_NO_TO_PROFESSION" class="form-control professionalTab form-control-lg" placeholder="">
                              </div>
                          </div>
                          <div class="col-2">
                              <div class="mb-3">
                                <button type="button" onclick="$('#action').val('professionalTab');load_data(1)" style="margin-top:22%;" id="loginBtn" class="btn btn-primary">Search</button>
                              </div>
                          </div>
                        </div>
                      </div>
                      <div id="outsideLocation" class="inner-tab-data" style="display:none;margin-top: 2%;margin-bottom: 2%;">
                        <h5>Outside Location Voter List</h5>
                        <div class="row">
                        <div class="col-2">
                            <label class="label">Outside Location</label>
                            <select id="OUTSIDE_LOCATION" class="form-select outsideLocationTab">
                                <option value="" selected>Select</option>
                                <option value="0">NO</option>
                                <option value="1">YES</option>
                            </select> 
                          </div>
                          <div class="col-1" style="width:10%">
                              <div class="mb-3">
                                  <label class="label">Part From</label>
                                  <input type="number" id="PART_NO_FROM_OUTSIDE_LOC" class="form-control outsideLocationTab form-control-lg" placeholder="">
                              </div>
                          </div>
                          <div class="col-1">
                              <div class="mb-3">
                                  <label class="label">Part To</label>
                                  <input type="number" id="PART_NO_TO_OUTSIDE_LOC" class="form-control outsideLocationTab form-control-lg" placeholder="">
                              </div>
                          </div>
                          <div class="col-2">
                              <div class="mb-3">
                                <button type="button" onclick="$('#action').val('outsideLocationTab');load_data(1)" style="margin-top:22%;" id="loginBtn" class="btn btn-primary">Search</button>
                              </div>
                          </div>
                        </div>
                      </div>
                      <div id="labharthi" class="inner-tab-data" style="display:none;margin-top: 2%;margin-bottom: 2%;">
                        <h5>Labharthi Voter List</h5>
                        <div class="row">
                          <div class="col-2">
                            <label class="label">Scheme(Center)</label>
                            <select id="SCHEME_CENTER" class="form-select labharthiTab">
                                <option value="" selected>Select</option>
                            </select> 
                          </div>
                          <div class="col-2">
                            <label class="label">Scheme(State)</label>
                            <select id="SCHEME_STATE" class="form-select labharthiTab">
                                <option value="" selected>Select</option>
                            </select> 
                          </div>
                          <div class="col-2">
                            <label class="label">Scheme(Candidate)</label>
                            <select id="SCHEME_CANDIDATE" class="form-select labharthiTab">
                                <option value="" selected>Select</option>
                            </select> 
                          </div>
                          <div class="col-1" style="width:10%">
                              <div class="mb-3">
                                  <label class="label">Part From</label>
                                  <input type="number" id="PART_NO_FROM_LABHARTHI" class="form-control labharthiTab form-control-lg" placeholder="">
                              </div>
                          </div>
                          <div class="col-1">
                              <div class="mb-3">
                                  <label class="label">Part To</label>
                                  <input type="number" id="PART_NO_TO_LABHARTHI" class="form-control labharthiTab form-control-lg" placeholder="">
                              </div>
                          </div>
                          <div class="col-2">
                              <div class="mb-3">
                                <button type="button" onclick="$('#action').val('labharthiTab');load_data(1)" style="margin-top:22%;" id="loginBtn" class="btn btn-primary">Search</button>
                              </div>
                          </div>
                        </div>
                      </div>

                      <div id="approach" class="inner-tab-data" style="display:none;margin-top: 2%;margin-bottom: 2%;">
                        <h5>Approach Qty Voter List</h5>
                        <div class="row">
                          <div class="col-2">
                              <div class="mb-3">
                                  <label class="label">Approach Qty</label>
                                  <input type="number" id="APPROACH_QTY" class="form-control approachTab form-control-lg" placeholder="">
                              </div>
                          </div>
                          <div class="col-3">
                              <div class="mb-3">
                                  <label class="label">Approach Reason</label>
                                  <input type="text" id="APPROACH_REASON" class="form-control approachTab form-control-lg" placeholder="">
                              </div>
                          </div>
                          <div class="col-1" style="width:10%">
                              <div class="mb-3">
                                  <label class="label">Part From</label>
                                  <input type="number" id="PART_NO_FROM_APPROACH_QTY" class="form-control approachTab form-control-lg" placeholder="">
                              </div>
                          </div>
                          <div class="col-1">
                              <div class="mb-3">
                                  <label class="label">Part To</label>
                                  <input type="number" id="PART_NO_TO_APPROACH_QTY" class="form-control approachTab form-control-lg" placeholder="">
                              </div>
                          </div>
                          <div class="col-2">
                              <div class="mb-3">
                                <button type="button" onclick="$('#action').val('approachTab');load_data(1)" style="margin-top:22%;" id="loginBtn" class="btn btn-primary">Search</button>
                              </div>
                          </div>
                        </div>
                      </div>
                      <div id="candidate" class="inner-tab-data" style="display:none;margin-top: 2%;margin-bottom: 2%;">
                        <h5>Voter Survey List</h5>
                        <div class="row">
                          <div class="col-3">
                              <div class="mb-3">
                                  <label class="label">Candidate Name</label>
                                  <input type="text" id="CANDIDATE_NAME" class="form-control candidateTab form-control-lg" placeholder="">
                              </div>
                          </div>
                          <div class="col-2">
                            <label class="label">Party List</label>
                            <select id="CANDIDATE_PARTY_LIST" class="form-select candidateTab">
                                <option value="" selected>Select</option>
                            </select> 
                          </div>
                          <div class="col-1" style="width:10%">
                              <div class="mb-3">
                                  <label class="label">Part From</label>
                                  <input type="number" id="PART_NO_FROM_CANDIDATE" class="form-control candidateTab form-control-lg" placeholder="">
                              </div>
                          </div>
                          <div class="col-1">
                              <div class="mb-3">
                                  <label class="label">Part To</label>
                                  <input type="number" id="PART_NO_TO_CANDIDATE" class="form-control candidateTab form-control-lg" placeholder="">
                              </div>
                          </div>
                          <div class="col-2">
                              <div class="mb-3">
                                <button type="button" onclick="$('#action').val('candidateTab');load_data(1)" style="margin-top:22%;" id="loginBtn" class="btn btn-primary">Search</button>
                              </div>
                          </div>
                        </div>
                      </div>


                     </div>
                    </div>
                  </div>
                </div> 
              </div>
            <div class="card-body p-3">
              <div class="row">
                <div class="col-12">
                    <div class="table-responsive" id="dataTbl"></div>
                </div>
              </div>
            </div>
            </div>
     
           <!-- Modal -->
           <div class="modal fade" style="z-index:9999" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">SMS PANEL</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <input type="hidden" id="message_user_id" value="" />
                    <div class="row">
                      <div class="col-12">
                          <div class="mb-3">
                              <label class="label">Message Body</label>
                              <textarea style="height: 200px;" name="message_box" id="message_box" class="form-control form-control-lg" required></textarea>    
                          </div>
                      </div>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">CANCEL</button>
                    <button type="button" class="btn btn-success">SEND</button>
                  </div>
                </div>
              </div>
            </div>
            <!-- Modal-->
            
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
    //   $('#action').val('searchTab')
      load_data(1);  
      load_other_data();  
       
      $(document).on('click', '.pagination_link', function(){  
           var page = $(this).attr("id");  
           load_data(page);  
      });  
      $(document).on('click', '.dp-menu', function(event) {
        $(this).next('.drop-menu').toggle();
        event.stopPropagation();
      }); 
 }); 
 function load_data(page)  
      {  
        // if(page==''){
        //     page=1
        // }
        if(page!=''){
          $('#overlay').show()
          // let total_records = $('#total_records').val()
          let search_str = $('#search_str').val()
            $.ajax({  
                  url:"../api/voter-list.php",  
                  method:"POST",  
                  data:{
                    page:page,
                    total_records:50,
                    search_str:search_str,
                    user_id:"<?php echo $_SESSION['user_id']; ?>",
                    language: $('#language').val(),
                    PART_NO_FROM: $('#PART_NO_FROM').val(),
                    PART_NO_TO: $('#PART_NO_TO').val(),
                    SECTION_NO: $('#SECTION_NO').val(),
                    C_HOUSE_NO: $('#C_HOUSE_NO').val(),
                    LASTNAME_EN: $('#LASTNAME_EN').val(),
                    FM_NAME_EN: $('#FM_NAME_EN').val(),
                    RLN_FM_NM_EN: $('#RLN_FM_NM_EN').val(),
                    EPIC_NO: $('#EPIC_NO').val(),
                    MOBILE_NO: $('#MOBILE_NO').val(),
                    PART_NO_FROM_ALPHA: $('#PART_NO_FROM_ALPHA').val(),
                    PART_NO_TO_ALPHA: $('#PART_NO_TO_ALPHA').val(),
                    fullName: $('#fullName').val(),
                    SECTION_NAME_EN: $('#SECTION_NAME_EN').val(),
                    filter_searchTab: $('#filter_searchTab').val(),
                    PART_NO_AGE_FROM: $('#PART_NO_AGE_FROM').val(),
                    PART_NO_AGE_TO: $('#PART_NO_AGE_TO').val(),
                    AGE_FROM: $('#AGE_FROM').val(),
                    AGE_TO: $('#AGE_TO').val(),
                    GENDER_AGE: $('#GENDER_AGE').val(),
                    SORT_AGE: $('#SORT_AGE').val(),         
                    PART_NO_FROM_FAMILY: $('#PART_NO_FROM_FAMILY').val(),         
                    PART_NO_TO_FAMILY: $('#PART_NO_TO_FAMILY').val(),         
                    FAMILY_SIZE_FROM: $('#FAMILY_SIZE_FROM').val(),         
                    FAMILY_SIZE_TO: $('#FAMILY_SIZE_TO').val(),         
                    SURNAME_FAMILY: $('#SURNAME_FAMILY').val(),         
                    PART_NO_FROM_FAMILY_HEAD: $('#PART_NO_FROM_FAMILY_HEAD').val(),         
                    PART_NO_TO_FAMILY_HEAD: $('#PART_NO_TO_FAMILY_HEAD').val(),         
                    FAMILY_HEAD_SIZE_FROM: $('#FAMILY_HEAD_SIZE_FROM').val(),         
                    FAMILY_HEAD_SIZE_TO: $('#FAMILY_HEAD_SIZE_TO').val(),         
                    FAMILY_HEAD_AGE_FROM: $('#FAMILY_HEAD_AGE_FROM').val(),         
                    FAMILY_HEAD_AGE_TO: $('#FAMILY_HEAD_AGE_TO').val(),         
                    FAMILY_HEAD_GENDER: $('#FAMILY_HEAD_GENDER').val(),         
                    FAMILY_HEAD_CASTE: $('#FAMILY_HEAD_CASTE').val(),         
                    PART_NO_FROM_DOUBLE: $('#PART_NO_FROM_DOUBLE').val(),         
                    PART_NO_TO_DOUBLE: $('#PART_NO_TO_DOUBLE').val(),         
                    AGE_MARRIED: $('#AGE_MARRIED').val(),         
                    PART_NO_MARRIED_FROM: $('#PART_NO_MARRIED_FROM').val(),         
                    PART_NO_MARRIED_TO: $('#PART_NO_MARRIED_TO').val(),         
                    SORT_MARRIED: $('#SORT_MARRIED').val(),         
                    AGE_SINGLE_FROM: $('#AGE_SINGLE_FROM').val(),         
                    AGE_SINGLE_TO: $('#AGE_SINGLE_TO').val(),         
                    PART_NO_SINGLE_FROM: $('#PART_NO_SINGLE_FROM').val(),         
                    PART_NO_SINGLE_TO: $('#PART_NO_SINGLE_TO').val(),         
                    SORT_GENDER_SINGLE: $('#SORT_GENDER_SINGLE').val(),         
                    PART_NO_FROM_ADDRESS: $('#PART_NO_FROM_ADDRESS').val(),         
                    PART_NO_TO_ADDRESS: $('#PART_NO_TO_ADDRESS').val(),         
                    SEARCH_ADDRESS: $('#SEARCH_ADDRESS').val(),         
                    PART_NO_FROM_SURNAME: $('#PART_NO_FROM_SURNAME').val(),         
                    PART_NO_TO_SURNAME: $('#PART_NO_TO_SURNAME').val(),         
                    SEARCH_SURNAME: $('#SEARCH_SURNAME').val(),         
                    PART_NO_FROM_LABEL: $('#PART_NO_FROM_LABEL').val(),         
                    PART_NO_TO_LABEL: $('#PART_NO_TO_LABEL').val(),         
                    FAMILY_SIZE_FROM_LABEL: $('#FAMILY_SIZE_FROM_LABEL').val(),         
                    FAMILY_SIZE_TO_LABEL: $('#FAMILY_SIZE_TO_LABEL').val(),         
                    PART_NO_FROM_SMS: $('#PART_NO_FROM_SMS').val(),         
                    PART_NO_TO_SMS: $('#PART_NO_TO_SMS').val(),         
                    NAME_SMS: $('#NAME_SMS').val(),         
                    SURNAME_SMS: $('#SURNAME_SMS').val(),         
                    RELATIVE_SMS: $('#RELATIVE_SMS').val(),         
                    PART_NO_FROM_CASTE: $('#PART_NO_FROM_CASTE').val(),         
                    PART_NO_TO_CASTE: $('#PART_NO_TO_CASTE').val(),         
                    RELIGION_CASTE: $('#RELIGION_CASTE').val(),         
                    PART_NO_FROM_LABEL_VALUE : $('#PART_NO_FROM_LABEL_VALUE').val(),         
                    PART_NO_TO_LABEL_VALUE: $('#PART_NO_TO_LABEL_VALUE').val(),         
                    LABEL_VALUE: $('#LABEL_VALUE').val(),         
                    PART_NO_FROM_AREA: $('#PART_NO_FROM_AREA').val(),         
                    PART_NO_TO_AREA: $('#PART_NO_TO_AREA').val(),         
                    AREA_LIST: $('#AREA_LIST').val(),         
                    PART_NO_FROM_PARTY: $('#PART_NO_FROM_PARTY').val(),         
                    PART_NO_TO_PARTY: $('#PART_NO_TO_PARTY').val(),         
                    PARTY_LIST: $('#PARTY_LIST').val(),         
                    PART_NO_FROM_DEAD: $('#PART_NO_FROM_DEAD').val(),         
                    PART_NO_TO_DEAD: $('#PART_NO_TO_DEAD').val(),         
                    DEAD_LIST: $('#DEAD_LIST').val(),         
                    PART_NO_FROM_BIRTHDAY: $('#PART_NO_FROM_BIRTHDAY').val(),         
                    PART_NO_TO_BIRTHDAY: $('#PART_NO_TO_BIRTHDAY').val(),         
                    DATE_FROM_BIRTHDAY: $('#DATE_FROM_BIRTHDAY').val(),         
                    DATE_TO_BIRTHDAY: $('#DATE_TO_BIRTHDAY').val(),         
                    MONTH_LIST: $('#MONTH_LIST').val(),         
                    EDUCATION_LIST: $('#EDUCATION_LIST').val(),         
                    PART_NO_FROM_EDUCATION: $('#PART_NO_FROM_EDUCATION').val(),         
                    PART_NO_TO_EDUCATION: $('#PART_NO_TO_EDUCATION').val(),         
                    HOME_SHIFT: $('#HOME_SHIFT').val(),         
                    PART_NO_FROM_HOME_SHIFT: $('#PART_NO_FROM_HOME_SHIFT').val(),         
                    PART_NO_TO_HOME_SHIFT: $('#PART_NO_TO_HOME_SHIFT').val(),         
                    PART_NO_FROM_NEW_VOTER: $('#PART_NO_FROM_NEW_VOTER').val(),         
                    PART_NO_TO_NEW_VOTER: $('#PART_NO_TO_NEW_VOTER').val(),         
                    PART_NO_FROM_PROFESSION: $('#PART_NO_FROM_PROFESSION').val(),         
                    PART_NO_TO_PROFESSION: $('#PART_NO_TO_PROFESSION').val(),         
                    PROFESSION: $('#PROFESSION').val(),         
                    PART_NO_FROM_OUTSIDE_LOC: $('#PART_NO_FROM_OUTSIDE_LOC').val(),         
                    PART_NO_TO_OUTSIDE_LOC: $('#PART_NO_TO_OUTSIDE_LOC').val(),         
                    OUTSIDE_LOCATION: $('#OUTSIDE_LOCATION').val(),         
                    SCHEME_CENTER: $('#SCHEME_CENTER').val(),         
                    SCHEME_STATE: $('#SCHEME_STATE').val(),         
                    SCHEME_CANDIDATE: $('#SCHEME_CANDIDATE').val(),         
                    PART_NO_FROM_LABHARTHI: $('#PART_NO_FROM_LABHARTHI').val(),         
                    PART_NO_TO_LABHARTHI: $('#PART_NO_TO_LABHARTHI').val(),   
                    APPROACH_QTY: $('#APPROACH_QTY').val(),  
                    APPROACH_REASON: $('#APPROACH_REASON').val(),  
                    PART_NO_FROM_APPROACH_QTY: $('#PART_NO_FROM_APPROACH_QTY').val(),  
                    PART_NO_TO_APPROACH_QTY: $('#PART_NO_TO_APPROACH_QTY').val(),  
                    CANDIDATE_NAME: $('#CANDIDATE_NAME').val(),  
                    CANDIDATE_PARTY_LIST: $('#CANDIDATE_PARTY_LIST').val(),  
                    PART_NO_FROM_CANDIDATE: $('#PART_NO_FROM_CANDIDATE').val(),  
                    PART_NO_TO_CANDIDATE: $('#PART_NO_TO_CANDIDATE').val(),  
                    action: $('#action').val()
                  },  
                  success:function(data){  
                      $('#dataTbl').html(data);  
                      $('#overlay').hide()
                  }  
            })  
        }
       
      }

function load_other_data(){
   
        // $('#overlay').show()
           $.ajax({  
                url:"../ajax/master-data.php",  
                method:"POST",  
                data:{action:"voter_political",leader_id:"<?php echo $_SESSION['user_id']; ?>"},  
                success:function(data){  
                   
                    //voter_label
                    let option_voter_label = [];
                    option_voter_label += '<option value="" selected>Please Select</option>'
                    for(let i=0; i < data.voter_label.length; i++){
                        option_voter_label += `<option value="${data.voter_label[i].id}">${data.voter_label[i].label}</option>`
                    }

                    //political_party
                    let option_political_party = [];
                    option_political_party += '<option value="" selected>Please Select</option>'
                    for(let i=0; i < data.political_party.length; i++){
                        option_political_party += `<option value="${data.political_party[i].id}">${data.political_party[i].name}</option>`
                    }

                     //area
                     let option_area_list = [];
                    option_area_list += '<option value="" selected>Please Select</option>'
                    for(let i=0; i < data.area_list.length; i++){
                      option_area_list += `<option value="${data.area_list[i].AC_NAME_EN}">${data.area_list[i].AC_NAME_EN}</option>`
                    }

                                      //labharthi center
                                      let option_labharthi_list_center = [];
                    option_labharthi_list_center += '<option value="" selected>Please Select</option>'
                    for(let i=0; i < data.labharthi_center.length; i++){
                      option_labharthi_list_center += `<option value="${data.labharthi_center[i].id}">${data.labharthi_center[i].scheme_name}</option>`
                    }

                    //labharthi state
                    let option_labharthi_list_state = [];
                    option_labharthi_list_state += '<option value="" selected>Please Select</option>'
                    for(let i=0; i < data.labharthi_state.length; i++){
                      option_labharthi_list_state += `<option value="${data.labharthi_state[i].id}">${data.labharthi_state[i].scheme_name}</option>`
                    }

                    //labharthi candidate
                    let option_labharthi_list_candidate = [];
                    option_labharthi_list_candidate += '<option value="" selected>Please Select</option>'
                    for(let i=0; i < data.labharthi_candidate.length; i++){
                      option_labharthi_list_candidate += `<option value="${data.labharthi_candidate[i].id}">${data.labharthi_candidate[i].scheme_name}</option>`
                    }

                  
                    $('#SCHEME_CENTER').html(option_labharthi_list_center)
                    $('#SCHEME_STATE').html(option_labharthi_list_state)
                    $('#SCHEME_CANDIDATE').html(option_labharthi_list_candidate)
                    $('#PARTY_LIST').html(option_political_party)
                    $('#CANDIDATE_PARTY_LIST').html(option_political_party)
                    $('#LABEL_VALUE').html(option_voter_label)
                    $('#AREA_LIST').html(option_area_list)
                    $('#overlay').hide()
                }  
           })  
      
}
      function delUser(){
        $('#overlay').show()
        $('#exampleModal').modal('hide');          
        $.ajax({  
                url:"../ajax/master-data.php",  
                method:"POST",  
                data:{user_id:$('#delete_id').val(),action:"delete_user"},  
                success:function(data){  
                    load_data(1)
                }  
           }) 
      }

      function showTab(id,className,tabClass){
        let tab = ['.searchTab','.alphaTab','.agewiseTab','.familyTab',
        '.familyHeadTab','.doubleNameTab','.marriedTab','.singleTab',
        '.addressTab','.surnameTab','.familyLabelsTab','.smsTab',
        '.casteTab','.labelValueTab','.areaWiseTab','.wardWiseTab',
        '.partyWiseTab','.deadListTab','.birthdayTab','.educationListTab'
        ,'.homeShiftTab','.newVotersTab','.professionalTab'
        ,'.outsideLocationTab','.labharthiTab','.approachTab','.candidateTab'
        ]
        const index = tab.indexOf(tabClass);
        if (index > -1) { // only splice array when item is found
          tab.splice(index, 1); // 2nd parameter means remove one item only
        }
        for(let i=0;i<tab.length;i++){
          $(tab[i]).val('')
        }
        if(tabClass=='.doubleNameTab'){
          $('#action').val('doubleNameTab')
        }
        $(className).hide()
        $(id).show()
        $('.commonSearch').val('english')
        $('.commonSearch option[value="english"]').attr("selected", "selected");
      }

      function setType(){
        const type="<?php echo $_GET['type']; ?>"
        if(type=="1"){
            $('#r2Btn').hide()
        }
        if(type=="2"){
            $('#r1Btn').hide()
            $('#r2Btn').show()
            $('#action').val('casteTab')
            showTab('#caste','.inner-tab-data','.casteTab');$('#action').val('casteTab');
            load_data(1)
        }
      }
  
    function setLanguage(val){
        localStorage.setItem('language',val)
        $('#language option[value="'+val+'"]').attr("selected", "selected");
        load_data(1)
      }
      function setFirstLanguage(){
    
        if(localStorage.getItem('language')==undefined){
            localStorage.setItem('language','english')
        }
        $('#language option[value="'+localStorage.getItem('language')+'"]').attr("selected", "selected");
      }
      setFirstLanguage()
      setType()
</script>