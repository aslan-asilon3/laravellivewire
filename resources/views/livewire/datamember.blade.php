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
                  <h4 class="card-title">Data Member</h4>
              </div>
              <div class="card-body">
                  <div class="table-responsive">
                    <form action="/datamember/import-excel/" method="POST" enctype="multipart/form-data">
                      @csrf
                     {{-- <input type="file" name="file" class="form-control"> --}}
                     <br>
                        <div class="btn-group" role="group">
                            <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">Export</button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="{{ route('datamember-export-excel') }}"><strong>Excel File</strong></a>
                                <a class="dropdown-item" href=""><strong>CSV File</strong></a>
                            </div>
                        </div>
                        {{-- <div class="btn-group" role="group">
                            <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">Import</button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="javascript:void()">Excel File</a>
                                <button class="btn btn-success" type="submit"><i class="fas fa-download"></i>Import Excel</button>
                                <a class="dropdown-item" href="javascript:void()">CSV File</a>
                            </div>
                        </div> --}}
  
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
                                  <th><strong>Created At</strong></th>
                              </tr>
                          </thead>
                          <tbody>
                            @if (count($datamembers) > 0)
                            @foreach ($datamembers as $datamember)
                              <tr>
                                  <td>
                                      <div class="custom-control custom-checkbox checkbox-success check-lg mr-3">
                                          <input type="checkbox" class="custom-control-input" id="customCheckBox2" required="">
                                          <label class="custom-control-label" for="customCheckBox2"></label>
                                      </div>
                                  </td>
                                  <td><strong>{{$datamember->id_member}}</strong></td> 
                                  <td><strong>{{$datamember->no_hp}}</strong></td> 
                                  <td><strong>{{$datamember->created_at}}</strong></td> 
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