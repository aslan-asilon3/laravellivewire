<div>
    <div class="content-body">
        <div class="container-fluid">
          @if(count($errors) > 0)
          <div class="alert alert-danger">
           Upload Validation Error<br><br>
           <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
           </ul>
          </div>
         @endif
  
         @if($message = Session::get('success'))
         <div class="alert alert-success alert-block">
          <button type="button" class="close" data-dismiss="alert">×</button>
                 <strong>{{ $message }}</strong>
         </div>
         @endif


         <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Data Member Raw</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <form action="/datamemberraw/import-excel/" method="POST" enctype="multipart/form-data">
                            @csrf
                           
                           {{-- Exporting....Please Wait --}}
{{-- 
                            <a wire:click="export" class="btn btn-outline-primary">Export</a> 
                            @if(exporting && !exportFinished)
                            <div class="d-inline" wire:poll="updateExportprogress">Exporting....please wait.</div>
                            @endif

                           @if($exportFinished)
                           Done. Download File <a class="stretched-link" wire:click="downloadExport">Here</a>
                           @endif  --}}

                           <br>
                           
                              <div class="btn-group" role="group">
                                  <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">Export</button>
                                  <div class="dropdown-menu">
                                      <a class="dropdown-item" href="{{ route('datamemberraw-export-excel') }}">Excel File</a>
                                      <a class="dropdown-item" href="">CSV File</a>
                                  </div>
                              </div>
                              <div class="btn-group" role="group">
                             <button type="button" class="btn btn-secondary mr-2">import</button>
                              <input type="file" name="file" class="form-control">
                              </div>


                          </form>
                        <table class="table table-responsive-md">
                            <thead>
                                <tr >
                                    <th style="width:50px;">
                                        <div class="custom-control custom-checkbox checkbox-success check-lg mr-3">
                                            <input type="checkbox" class="custom-control-input" id="checkAll" required="">
                                            <label class="custom-control-label" for="checkAll"></label>
                                        </div>
                                    </th>
                                    <th><strong>ID Member</strong></th>
                                    <th><strong>NO HP</strong></th>
                                    <th><strong>Status Cek Data</strong></th>
                                    <th><strong>Action</strong></th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (count($datamemberraws) > 0)
                                @foreach ($datamemberraws as $datamemberraw)
                                <tr>
                                    <td>
                                        <div class="custom-control custom-checkbox checkbox-success check-lg mr-3">
                                            <input type="checkbox" class="custom-control-input" id="customCheckBox2" required="">
                                            <label class="custom-control-label" for="customCheckBox2"></label>
                                        </div>
                                    </td>
                                    <td><strong>{{$datamemberraw->id_member}}</strong></td> 
                                    <td><strong>{{$datamemberraw->no_hp}}</strong></td> 
                                    <td><strong>{{$datamemberraw->statuc_cek_data}}</strong></td> 
                                    <td>
                                        <div class="d-flex">
                                            <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                            <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                                @else
                                    <tr>
                                        <td colspan="3" align="center">
                                            No Contact Found.
                                        </td>
                                    </tr>
                              @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    
        </div>
    </div>
              
  
  </div>