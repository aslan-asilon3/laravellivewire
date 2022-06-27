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
                              <form action="" method="GET" enctype="multipart/form-data">
                                @csrf
                               <input type="file" name="file" class="form-control">
                               <br>
                                  <div class="btn-group" role="group">
                                      <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">Export</button>
                                      <div class="dropdown-menu">
                                          <a class="dropdown-item" href="{{ route('datasales-export-excel') }}">Excel File</a>
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
                                            <th>Batch</th>
                                            <th>Poin</th>
                                            <th>No HP</th>
                                            <th>Tanggal</th>
                                            <th>Source</th>
                                            <th>Recipient</th>
                                            <th>Status member</th>
                                            <th>Status cek is member</th>
                                          </tr>
                                    </thead>
                                    <tbody>
                                      
                                      @if (count($datasaleses) > 0)
                                          @foreach ($datasaleses as $datasale)
                                            <tr>
                                                <td>{{$datasale->id_member}}</td>
                                                <td>{{$datasale->batch}}</td>
                                                <td>{{$datasale->poin}}</td>
                                                <td>{{$datasale->no_hp}}</td>
                                                <td>{{$datasale->tanggal}}</td>
                                                <td>{{$datasale->source}}</td>
                                                <td>{{$datasale->recipient}}</td>
                                                <td>{{$datasale->status_member}}</td>
                                                <td>{{$datasale->status_cek_is_member}}</td>
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
                                          <th>Batch</th>
                                          <th>Poin</th>
                                          <th>No HP</th>
                                          <th>Tanggal</th>
                                          <th>Source</th>
                                          <th>Recipient</th>
                                          <th>Status member</th>
                                          <th>Status cek is member</th>
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