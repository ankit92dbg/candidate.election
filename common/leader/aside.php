<?php
$url = $_SERVER['REQUEST_URI'];
$endPart = end(explode('/', rtrim($url, '/')));
$endPart = str_replace(' ', '', $endPart);
$endPart = explode('.',$endPart);
?>
<aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 " id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href="dashboard.php">
      <img src="" alt="profile_image" class="navbar-brand-img h-100" id="prof-image">
        <!-- <img src="../assets/img/logo-ct-dark.png" class="navbar-brand-img h-100" alt="main_logo"> -->
        <span class="ms-1 font-weight-bold"><?php echo $_SESSION['f_name'].' '.$_SESSION['l_name']; ?></span><br/>
        <?php if($_SESSION['user_type']!=0){ ?>
        <span style="margin-left: 21% !important;" class="ms-1 font-weight-bold"> <?php echo $_SESSION['assembly_name']; ?></span>
        <?php } ?>
      </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link <?php echo ($endPart[0]=='dashboard') ? 'active' : ''; ?>" href="dashboard.php">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link dropdown-btn" href="javascript:void(0)">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa fa-address-book text-warning text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Master <i class="fa fa-caret-down"></i></span>
          </a>
          <ul class="submenu" style="display:none">
            <li class="nav-item">
                <a class="nav-link " href="./pages/tables.html">
                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="fa fa-user-circle-o text-warning text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Leader</span>
                </a>
                </li>
                <li class="nav-item">
                <a class="nav-link " href="./pages/tables.html">
                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="fa fa-user-circle-o text-warning text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Subleader</span>
                </a>
                </li>
          </ul>
        </li> --> 
        <li class="nav-item">
          <a class="nav-link <?php echo ($endPart[0]=='subleaders' || $endPart[0]=='add-subleaders' || $endPart[0]=='edit-subleaders') ? 'active' : ''; ?>" href="subleaders.php">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa fa-users text-success text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Booth Management</span>
          </a>
        </li>
        <li  class="nav-item">
        <a class="nav-link " href="voters.php">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa fa-search text-success text-sm opacity-10" style="color:#000 !important"></i>
            </div>
            <span class="nav-link-text ms-1">Search Voters</span>
          </a>
        </li>
       
        <!-- <li class="nav-item">
          <a class="nav-link <?php echo ($endPart[0]=='voters') ? 'active' : ''; ?>" href="voters.php">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa fa-address-book text-danger text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Voters</span>
          </a>
        </li> -->
        <li class="nav-item" onclick="showTab('#report_1','.tab-data','.casteTab');$('#r2Btn').hide();">
        <?php if($endPart[0]=='voters'){ ?>
          <a class="nav-link dropdown-btn" href="javascript:void(0)" onclick="$('#r2Btn').hide()">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa fa-address-book text-warning text-sm opacity-10" style="color:#196ec2 !important"></i>
            </div>
            <span class="nav-link-text ms-1">Report 1 <i class="fa fa-caret-down"></i></span>
          </a>
        <?php }else{ ?>
          <a class="nav-link dropdown-btn" href="voters.php?type=1" onclick="$('#r2Btn').hide()">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa fa-address-book text-warning text-sm opacity-10" style="color:#196ec2 !important"></i>
            </div>
            <span class="nav-link-text ms-1">Report 1 <i class="fa fa-caret-down"></i></span>
          </a>
        <?php } ?>
          <ul class="submenu"  <?php if($endPart[0]=='voters'){ ?> id="r1Btn" style="display:block" <?php }else{ ?> style="display:none" <?php } ?>>
                        <li class="nav-item sub-menu" onclick="showTab('#searchVoter','.inner-tab-data','.searchTab');$('#action').val('searchTab');load_data()">
                          <a class="nav-link" aria-current="page" href="javascript:void(0);">Search</a>
                        </li>
                        <li class="nav-item sub-menu" onclick="showTab('#alpha','.inner-tab-data','.alphaTab');$('#action').val('alphaTab');load_data()">
                          <a class="nav-link" href="javascript:void(0);">Alphabetical List</a>
                        </li>
                        <li class="nav-item sub-menu" onclick="showTab('#agewise','.inner-tab-data','.agewiseTab');$('#action').val('agewiseTab');load_data()">
                          <a class="nav-link" href="javascript:void(0);">Agewise List</a>
                        </li>
                        <li class="nav-item sub-menu" onclick="showTab('#family','.inner-tab-data','.familyTab');$('#action').val('familyTab');load_data()">
                          <a class="nav-link" href="javascript:void(0);">Family Report</a>
                        </li>
                        <li class="nav-item sub-menu" onclick="showTab('#familyHead','.inner-tab-data','.familyHeadTab');$('#action').val('familyHeadTab');load_data()">
                          <a class="nav-link" href="javascript:void(0);">Family Head Report</a>
                        </li>
                        <li class="nav-item sub-menu" onclick="showTab('#doubleName','.inner-tab-data','.doubleNameTab');$('#action').val('doubleNameTab');load_data()">
                          <a class="nav-link" href="javascript:void(0);">Double Name List</a>
                        </li>
                        <li class="nav-item sub-menu" onclick="showTab('#married','.inner-tab-data','.marriedTab');$('#action').val('marriedTab');load_data()">
                          <a class="nav-link" href="javascript:void(0);">Married Women Report</a>
                        </li>
                        <li class="nav-item sub-menu" onclick="showTab('#single','.inner-tab-data','.singleTab');$('#action').val('singleTab');load_data()">
                          <a class="nav-link" href="javascript:void(0);">Single Voter List</a>
                        </li>
                        <li class="nav-item sub-menu" onclick="showTab('#address','.inner-tab-data','.addressTab');$('#action').val('addressTab');load_data()">
                          <a class="nav-link" href="javascript:void(0);">Address Wise List</a>
                        </li>
                        <li class="nav-item sub-menu" onclick="showTab('#surname','.inner-tab-data','.surnameTab');$('#action').val('surnameTab');load_data()">
                          <a class="nav-link" href="javascript:void(0);">Surname Report</a>
                        </li>
                        <li class="nav-item sub-menu" onclick="showTab('#familyLabels','.inner-tab-data','.familyLabelsTab');$('#action').val('familyLabelsTab');load_data()">
                          <a class="nav-link" href="javascript:void(0);">Family Labels</a>
                        </li>
                        <li class="nav-item sub-menu" onclick="showTab('#sms','.inner-tab-data','.smsTab');$('#action').val('smsTab');load_data()">
                          <a class="nav-link" href="javascript:void(0);">SMS</a>
                        </li>
          </ul>
        </li>
        <li class="nav-item" onclick="showTab('#report_2','.tab-data','.searchTab');$('#r1Btn').hide()">
        <?php if($endPart[0]=='voters'){ ?>
          <a class="nav-link dropdown-btn" href="javascript:void(0)" onclick="$('#r1Btn').hide()">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa fa-address-book text-warning text-sm opacity-10" style="color:#c5b212 !important"></i>
            </div>
            <span class="nav-link-text ms-1">Report 2 <i class="fa fa-caret-down"></i></span>
          </a>
        <?php }else{ ?>
          <a class="nav-link dropdown-btn" href="voters.php?type=2" onclick="$('#r1Btn').hide()">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa fa-address-book text-warning text-sm opacity-10" style="color:#c5b212 !important"></i>
            </div>
            <span class="nav-link-text ms-1">Report 2 <i class="fa fa-caret-down"></i></span>
          </a>
        <?php } ?>
          <ul class="submenu" style="display:none" id="r2Btn" >
                        <li class="nav-item sub-menu" onclick="showTab('#caste','.inner-tab-data','.casteTab');$('#action').val('casteTab');load_data()">
                          <a class="nav-link" aria-current="page" href="javascript:void(0);">Caste Wise List</a>
                        </li>
                        <li class="nav-item sub-menu" onclick="showTab('#labelValue','.inner-tab-data','.labelValueTab');$('#action').val('labelValueTab');load_data()">
                          <a class="nav-link" aria-current="page" href="javascript:void(0);">Label Value Filter</a>
                        </li>
                        <li class="nav-item sub-menu" onclick="showTab('#areaWise','.inner-tab-data','.areaWiseTab');$('#action').val('areaWiseTab');load_data()">
                          <a class="nav-link" aria-current="page" href="javascript:void(0);">Area Wise List</a>
                        </li>
                        <li class="nav-item sub-menu" onclick="showTab('#partyWise','.inner-tab-data','.partyWiseTab');$('#action').val('partyWiseTab');load_data()">
                          <a class="nav-link" aria-current="page" href="javascript:void(0);">Party Wise List</a>
                        </li>
                        <li class="nav-item sub-menu" onclick="showTab('#deadList','.inner-tab-data','.deadListTab');$('#action').val('deadListTab');load_data()">
                          <a class="nav-link" aria-current="page" href="javascript:void(0);">Dead List</a>
                        </li>
                        <li class="nav-item sub-menu" onclick="showTab('#birthday','.inner-tab-data','.birthdayTab');$('#action').val('birthdayTab');load_data()">
                          <a class="nav-link" aria-current="page" href="javascript:void(0);">Birthday List</a>
                        </li>
                        <li class="nav-item sub-menu" onclick="showTab('#educationList','.inner-tab-data','.educationListTab');$('#action').val('educationListTab');load_data()">
                          <a class="nav-link" aria-current="page" href="javascript:void(0);">Education Wise List</a>
                        </li>
                        <li class="nav-item sub-menu" onclick="showTab('#homeShift','.inner-tab-data','.homeShiftTab');$('#action').val('homeShiftTab');load_data()">
                          <a class="nav-link" aria-current="page" href="javascript:void(0);">Home Shifted List</a>
                        </li>
                        <li class="nav-item sub-menu" onclick="showTab('#newVoters','.inner-tab-data','.newVotersTab');$('#action').val('newVotersTab');load_data()">
                          <a class="nav-link" aria-current="page" href="javascript:void(0);">New Voters List</a>
                        </li>
                        <li class="nav-item sub-menu" onclick="showTab('#professional','.inner-tab-data','.professionalTab');$('#action').val('professionalTab');load_data()">
                          <a class="nav-link" aria-current="page" href="javascript:void(0);">Profession Wise List</a>
                        </li>
                        <li class="nav-item sub-menu" onclick="showTab('#outsideLocation','.inner-tab-data','.outsideLocationTab');$('#action').val('outsideLocationTab');load_data()">
                          <a class="nav-link" aria-current="page" href="javascript:void(0);">Outside Location List</a>
                        </li>
                        <li class="nav-item sub-menu" onclick="showTab('#labharthi','.inner-tab-data','.labharthiTab');$('#action').val('labharthiTab');load_data()">
                          <a class="nav-link" aria-current="page" href="javascript:void(0);">Labharthi List</a>
                        </li>
                        <li class="nav-item sub-menu" onclick="showTab('#approach','.inner-tab-data','.approachTab');$('#action').val('approachTab');load_data()">
                          <a class="nav-link" aria-current="page" href="javascript:void(0);">Approach List</a>
                        </li>
                        <li class="nav-item sub-menu" onclick="showTab('#candidate','.inner-tab-data','.candidateTab');$('#action').val('candidateTab');load_data()">
                          <a class="nav-link" aria-current="page" href="javascript:void(0);">Candidate Like List</a>
                        </li>
                        <li class="nav-item sub-menu" onclick="showTab('#approach','.inner-tab-data','.approachTab');$('#action').val('approachTab');load_data()">
                          <a class="nav-link" aria-current="page" href="javascript:void(0);">Approach List</a>
                        </li>
                        <li class="nav-item sub-menu" onclick="showTab('#candidate','.inner-tab-data','.candidateTab');$('#action').val('candidateTab');load_data()">
                          <a class="nav-link" aria-current="page" href="javascript:void(0);">Voter Surey List</a>
                        </li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo ($endPart[0]=='scheme' || $endPart[0]=='add-scheme' || $endPart[0]=='edit-scheme') ? 'active' : ''; ?>" href="scheme.php">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa fa-list text-warning text-sm opacity-10" style="color:#8008e7 !important;"></i>
            </div>
            <span class="nav-link-text ms-1">Scheme</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo ($endPart[0]=='compaign' || $endPart[0]=='add-compaign') ? 'active' : ''; ?>" href="compaign.php">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa fa-volume-up text-warning text-sm opacity-10" style="color:#17ce02 !important;"></i>
            </div>
            <span class="nav-link-text ms-1">Campaign</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo ($endPart[0]=='social-media' || $endPart[0]=='add-social-media') ? 'active' : ''; ?>" href="social-media.php">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa fa-twitter text-warning text-sm opacity-10" style="color:#02a5d5 !important;"></i>
            </div>
            <span class="nav-link-text ms-1">Social Media</span>
          </a>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link" href="#">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa fa-file text-warning text-sm opacity-10" style="color:#c2c100 !important;"></i>
            </div>
            <span class="nav-link-text ms-1">Voter Survey</span>
          </a>
        </li> -->
        <!-- <li class="nav-item">
          <a class="nav-link <?php echo ($endPart[0]=='upload-csv') ? 'active' : ''; ?>" href="upload-csv.php">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa fa-upload text-info text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Upload CSV</span>
          </a>
        </li> -->
         <li >
       <a class="nav-link " href="sms.php">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa fa-envelope text-success text-sm opacity-10" style="color:#000 !important"></i>
            </div>
            <span class="nav-link-text ms-1">Send Sms</span>
          </a>
        </li>
         <li>
       <a class="nav-link " href="whatsapp.php">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa fa-whatsapp text-success text-sm opacity-10" style="color:#000 !important"></i>
            </div>
            <span class="nav-link-text ms-1">Send Whatsapp</span>
          </a>
        </li>
         <li>
       <a class="nav-link " href="">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa fa-phone text-success text-sm opacity-10" style="color:#000 !important"></i>
            </div>
            <span class="nav-link-text ms-1">IVR Call</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="voter-labels.php">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-world-2 text-danger text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Label Value</span>
          </a>
        </li>
        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Account pages</h6>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo ($endPart[0]=='profile') ? 'active' : ''; ?>" href="profile.php">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-single-02 text-dark text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Profile</span>
          </a>
        </li>
        <li class="nav-item">
          <a onClick="logout()" class="nav-link " href="javascript:void(0)">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa fa-sign-out text-warning text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Logout</span>
          </a>
        </li>
      </ul>
    </div>
  </aside>