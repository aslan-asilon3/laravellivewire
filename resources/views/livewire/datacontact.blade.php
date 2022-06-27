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
                    <h4 class="card-title">Data Contact</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-responsive-md">
                            <thead>
                                <tr>
                                    <th style="width:50px;">
                                        <div class="custom-control custom-checkbox checkbox-success check-lg mr-3">
                                            <input type="checkbox" class="custom-control-input" id="checkAll" required="">
                                            <label class="custom-control-label" for="checkAll"></label>
                                        </div>
                                    </th>
                                    <th><strong>Name</strong></th>
                                    <th><strong>phone</strong></th>
                                    <th><strong>action</strong></th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (count($datacontacts) > 0)
                                @foreach ($datacontacts as $datacontact)
                                <tr>
                                    <td>
                                        <div class="custom-control custom-checkbox checkbox-success check-lg mr-3">
                                            <input type="checkbox" class="custom-control-input" id="customCheckBox2" required="">
                                            <label class="custom-control-label" for="customCheckBox2"></label>
                                        </div>
                                    </td>
                                    <td><strong>{{$datacontact->name}}</strong></td> 
                                    <td><strong>{{$datacontact->phone}}</strong></td> 
                                    <td>
                                        <div class="d-flex">
                                            <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                            <button wire:click="destroy({{$datacontact->id}})" href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></button>
                                            {{-- <button wire:click="delete({{ $datacontacts->id }})" href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></button> --}}
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