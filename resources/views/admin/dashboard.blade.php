        @extends('admin.layouts.master')
        @section('content')
        <!-- START PAGE CONTENT -->
        <div class="content ">          
          <!-- START CONTAINER FLUID -->
          <div class=" container-fluid   container-fixed-lg">
            <!-- START BREADCRUMB -->
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">{{ $_pgtitle }}</li>
            </ol>
            <!-- END BREADCRUMB -->            
            <div id="rootwizard" class="m-t-10">
              <!-- Nav tabs -->
              <ul class="nav nav-tabs nav-tabs-linetriangle nav-tabs-separator nav-stack-sm" role="tablist" data-init-reponsive-tabs="dropdownfx">
                <li class="nav-item">
                  <a class="active" data-toggle="tab" href="#tab1" role="tab"><i class="fa fa-shopping-cart tab-icon"></i> <span>Daftar</span></a>
                </li>
                <li class="nav-item">
                  <a class="" data-toggle="tab" href="#tab2" role="tab"><i class="fa fa-check tab-icon"></i> <span>Tab 2</span></a>
                </li>
                <li class="nav-item">
                  <a class="" data-toggle="tab" href="#tab3" role="tab"><i class="fa fa-check tab-icon"></i> <span>Tab 3</span></a>
                </li>
                <li class="nav-item">
                  <a class="" data-toggle="tab" href="#tab4" role="tab"><i class="fa fa-check tab-icon"></i> <span>Tab 4</span></a>
                </li>
              </ul>
              <!-- Tab panes -->
              <div class="tab-content">
                <div class="tab-pane padding-20 sm-no-padding active slide-left" id="tab1">
                  <div class="row row-same-height">
                    
                    <!-- START card -->
                    <div class="card card-transparent">
                      <!-- <div class="card-header ">
                        <div class="card-title">Pages Default Tables Style</div>
                        <div class="pull-right">
                          <div class="col-xs-12">
                            <input type="text" id="search-table" class="form-control pull-right" placeholder="Search">
                          </div>
                        </div>
                        <div class="clearfix"></div>
                      </div> -->
                      <div class="card-block">
                        <table class="table table-hover demo-table-search table-responsive-block" id="id_datatable">
                          <thead>
                            <tr>
                              <th>ID</th>
                              <th>NAME</th>
                              <th>POSITION</th>
                              <th>SALARY</th>
                              <th>START DATE</th>
                              <th>OFFICE</th>
                              <th>EXTN</th>
                            </tr>
                          </thead>
                          <tbody>
                            <!-- data -->
                          </tbody>
                        </table>
                      </div>
                    </div>
                    <!-- END card -->

                  </div>
                </div>
                <div class="tab-pane slide-left padding-20 sm-no-padding" id="tab2">
                  <div class="row row-same-height">
                    tab 2                    
                  </div>
                </div>
                <div class="tab-pane slide-left padding-20 sm-no-padding" id="tab3">
                  <div class="row row-same-height">
                    tab 3
                  </div>
                </div>
                <div class="tab-pane slide-left padding-20 sm-no-padding" id="tab4">
                  <div class="row row-same-height">
                    tab 4
                  </div>
                </div>

                <div class="wizard-footer padding-20 bg-master-light">
                  <p class="small hint-text pull-left no-margin">
                    The Top Content Is Soley Created using pages UI Elements such as Invoice, Tabs, Form Layouts etc. and are prior for representation Purpose Only.
                  </p>
                  <div class="pull-right">
                    {{ Html::image('assets/theme/assets/img/logo.png', 'logo', ['alt'=>'logo', 'data-src'=>'assets/theme/assets/img/logo.png', 'data-src-retina'=>'assets/theme/assets/img/logo_2x.png', 'width'=>'78', 'height'=>'22']) }}
                  </div>
                  <div class="clearfix"></div>
                </div>
              </div>
            </div>
          </div>
          <!-- END CONTAINER FLUID -->
        </div>
        <!-- END PAGE CONTENT -->
        @endsection

        @section('scripts')            
            {{ Html::script('assets/modules/employee/js/general.js') }}
        @endsection