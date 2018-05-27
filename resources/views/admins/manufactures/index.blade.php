@extends('admins.layouts.master')
@section('content')
	<div class="container-fluid">
        <div class="block-header">
            <h2>
                DATATABLES
            </h2>
        </div>
        <!-- Basic Examples -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Manufacture data table
                        </h2>
                    </div>
                    <div class=" container-fluid">
                    	<a class="btn btn-primary" data-toggle="modal" href='#add'>Add new</a>
                    </div>
                    
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable" >
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Created at</th>  
                                        <th>Updated at</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Created at</th>
                                        <th>Updated at</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                   	@foreach ($manus as $manu)
                                   		<tr>
	                                        <td>{{ $manu->manufacture_id}}</td>
	                                        <td>{{ $manu->manufacture_name}}</td>
	                                        <td>{{ $manu->created_at->diffForHumans()}}</td>
	                                        <td>{{ $manu->updated_at->diffForHumans()}}</td>
                                            <td>
	                                        	<a class="btn btn-info btn-xs" data-toggle="modal" href='#view-{{$manu->manufacture_id}}'><i class="material-icons">remove_red_eye</i></a>
	                                        	<a class="btn btn-warning btn-xs" data-toggle="modal" href='#edit-{{$manu->manufacture_id}}'><i class="material-icons">edit</i></a>
	                                        	<form onsubmit="return confirm('Do you really want to delete?');" style="display: inline-block;" method="post" action="manufacture/{{$manu->manufacture_id}}">
                                                    {{csrf_field()}}
                                                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                                                    {{method_field('delete')}}
                                                    <button style="cursor: pointer;" class="btn btn-danger btn-xs" type="submit" role="button">
                                                        <i class="material-icons">delete</i>
                                                    </button>
                                                </form>
	                                        </td>


	                                   
	                                        <div class="modal fade" id="view-{{$manu->manufacture_id}}">
	                                        	<div class="modal-dialog">
	                                        		<div class="modal-content">
	                                        			<div class="modal-header">
	                                        				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	                                        				<h4 class="modal-title">Infomation of manufacture</h4>
	                                        			</div>
	                                        			<div class="modal-body">
	                                        				<form action="" method="POST" role="form">
	                                        				

	                                        					<div class="form-group">
	                                        						<label for="">Manufacture's name</label>
	                                        						<input type="text" class="form-control" id="" placeholder="" value="{{ $manu->manufacture_name}}" name="name" disabled="">
	                                        					</div>

                                                                <div class="form-group">
                                                                    <label>Description</label>
                                                                    <div class="row clearfix">
                                                                        <div class="card">
                                                                            <textarea  id="ckeditor-content-2" name="description" placeholder="" disabled="">{{ $manu->description}}
                                                                            </textarea>
                                                                        </div>
                                                                    </div>
                                                                </div>

	                                        					<div class="form-group">
	                                        						<label for="">Created at</label>
	                                        						<input type="text" class="form-control" id="" placeholder="" value="{{ $manu->created_at}}" disabled="">
	                                        					</div>
	                                        					<div class="form-group">
	                                        						<label for="">Updated at</label>
	                                        						<input type="text" class="form-control" id="" placeholder="" value="{{ $manu->updated_at}}" disabled="">
	                                        					</div>
	                                        				
	                                        					

	                                        				</form>
	                                        			</div>
	                                        			<div class="modal-footer">
	                                        				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	                                        			</div>
	                                        		</div>
	                                        	</div>
	                                        </div>

	                                        <div class="modal fade" id="edit-{{$manu->manufacture_id}}">
	                                        	{{csrf_token()}}
	                                        	<div class="modal-dialog">
	                                        		<div class="modal-content">
	                                        			<div class="modal-header">
	                                        				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	                                        				<h4 class="modal-title">Update infomation of manufacture</h4>
	                                        			</div>
	                                        			<div class="modal-body">
	                                        				<form action="manufacture/{{$manu->manufacture_id}}" method="POST" role="form">
	                                        					{{csrf_field()}}
	                                        					{{method_field('put')}}
	                                        					<div class="form-group">
	                                        						{{-- <label for="">ID</label> --}}
	                                        						<input type="hidden" class="form-control" id="" placeholder="" name="manufacture_idmanu" value="{{$manu->manufacture_id}}">
	                                        					</div>
	                                        					<div class="form-group">
	                                        						<label for="">Manufacture's name</label>
	                                        						<input type="text" class="form-control" id="" placeholder="" name="manufacture_name" value="{{ $manu->manufacture_name}}">
	                                        					</div>

                                                                <div class="form-group">
                                                                    <label>Description</label>
                                                                    <div class="row clearfix">
                                                                        <div class="card">
                                                                            <textarea  id="ckeditor-content-6" name="description" placeholder="">{{ $manu->description}}
                                                                            </textarea>
                                                                        </div>
                                                                    </div>
                                                                </div>
                            
	                                        					<div class="modal-footer">
			                                        				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			                                        				<button type="submit" class="btn btn-primary">Save changes</button>
			                                        			</div>
	                                        				</form>
	                                        			</div>
	                                        			
	                                        		</div>
	                                        	</div>
	                                        </div>

	                                    </tr>
                                    @endforeach
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Basic Examples -->
    </div>


    <div class="modal fade" id="add">
    	<div class="modal-dialog">
    		<div class="modal-content">
    			<div class="modal-header">
    				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    				<h4 class="modal-title">Add new manufacture</h4>
    			</div>
    			<div class="modal-body">
    				<form action="{{ route('admin.manufacture.store') }}" method="POST" role="form">
    					{{csrf_field()}}
                        <input type="hidden" class="form-control" name="id" >

    					<div class="form-group">
                            <label class="form-label">Manufacture's name</label>
    						<div class="form-line">
                                <input type="text" class="form-control" name="manufacture_name" placeholder="Manufacture's name" required>
                            </div>
    					</div>

                        <div class="form-group">
                            <label>Description</label>
                            <div class="row clearfix">
                                <div class="card">
                                    <textarea  id="ckeditor-content-7" name="description" placeholder="Description of manufacture...">
                                    </textarea>
                                </div>
                            </div>
                        </div>

    					<div class="modal-footer">
		    				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		    				<button type="submit" class="btn btn-primary">Save</button>
		    			</div>
    				</form>
    			</div>
    			
    		</div>
    	</div>
    </div>
@endsection

@section('foot')
    <script type="text/javascript">
        CKEDITOR.replace('ckeditor-content-6');
    </script>

    <script type="text/javascript">
        CKEDITOR.replace('ckeditor-content-2');
    </script>

    <script type="text/javascript">
        CKEDITOR.replace('ckeditor-content-7');
    </script>
@endsection