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
                 
                  <div class="tab-content" style="margin-top:2%;">
                    <input type="hidden" id="action" value="" />
                    <div id="report_1" class="tab-data">
                      
                      <div id="searchVoter" class="inner-tab-data" style="display:block;margin-top: 2%;margin-bottom: 2%;">
                       
                        
                      <div id="sms" class="inner-tab-data">
                        <h5>Whatsapp Panel</h5>
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
                                <button type="button" onclick="$('#action').val('smsTab');load_data()" style="margin-top: 20%;" id="loginBtn" class="btn btn-primary">Search</button>
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
      load_data();  
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
        if(page==''){
            page=1
        }
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

                  
                    $('#PARTY_LIST').html(option_political_party)
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
                    load_data()
                }  
           }) 
      }

      function showTab(id,className,tabClass){
        let tab = ['.searchTab','.alphaTab','.agewiseTab','.familyTab',
        '.familyHeadTab','.doubleNameTab','.marriedTab','.singleTab',
        '.addressTab','.surnameTab','.familyLabelsTab','.smsTab',
        '.casteTab','.labelValueTab','.areaWiseTab','.wardWiseTab',
        '.partyWiseTab','.deadListTab','.birthdayTab'
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
            load_data()
        }
      }
  
    function setLanguage(val){
        localStorage.setItem('language',val)
        $('#language option[value="'+val+'"]').attr("selected", "selected");
        load_data()
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