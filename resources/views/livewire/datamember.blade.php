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

            <div class="row">
              <div class="col-10">
                  <div class="card">
                      <div class="card-header">
                        <h5>Data Member</h5>
                      </div>
                      <div class="card-body">
                          <div class="table-responsive">
                            <form action="/datamember/import-excel/" method="POST" enctype="multipart/form-data">
                              @csrf
                             <input type="file" name="file" class="form-control">
                             <br>
                                <div class="btn-group" role="group">
                                    <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">Export</button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="{{ route('datamember-export-excel') }}">Excel File</a>
                                        <a class="dropdown-item" href="">CSV File</a>
                                    </div>
                                </div>
                                <div class="btn-group" role="group">
                                    <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">Import</button>
                                    <div class="dropdown-menu">
                                        {{-- <a class="dropdown-item" href="javascript:void()">Excel File</a> --}}
                                        <button class="btn btn-success" type="submit"><i class="fas fa-download"></i>Import Excel</button>
                                        <a class="dropdown-item" href="javascript:void()">CSV File</a>
                                    </div>
                                </div>

                            </form>
                              <table id="example" class="display " style="min-width: 845px; border:1px; margin-top:20px; padding-top:20px;">
                                  <thead>
                                      <tr>
                                          <th>ID Member</th>
                                          <th>No HP</th>
                                          <th>Created At</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                    
                                    @if (count($datamembers) > 0)
                                        @foreach ($datamembers as $datamember)
                                          <tr>
                                              <td>{{$datamember->id_member}}</td>
                                              <td>{{$datamember->no_hp}}</td>
                                              <td>{{$datamember->created_at}}</td>
                                          </tr>
                                        @endforeach
                                      @else
                                          <tr>
                                              <td colspan="3" align="center">
                                                  No Categories Found.
                                              </td>
                                          </tr>
                                    @endif
                                  </tbody>
                                  <tfoot>
                                      <tr>
                                        <th>ID Member</th>
                                        <th>No HP</th>
                                        <th>Created At</th>
                                      </tr>
                                  </tfoot>
                              </table>
                          </div>
                      </div>
                  </div>
              </div>
            </div>
      </div>
  </div>
            

</div>