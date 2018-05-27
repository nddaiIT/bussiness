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
                            Colors data table
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
                                        <th>Thumnail</th>
                                        <th>Name</th>
                                        <th>Code</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>#</th>
                                        <th>Thumnail</th>
                                        <th>Name</th>
                                        <th>Code</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                   	@foreach ($colors as $color)
                                   		<tr>
	                                        <td>{{ $color->color_id}}</td>
                                            <td><img src="{{$color->thumnail}}" alt="" width="100px" height="100px"></td>
	                                        <td>{{ $color->color_name}}</td>
                                            <th>{{ $color->color_code}}</th>
                                            <td>
	                                        	<a class="btn btn-warning btn-xs" data-toggle="modal" href='#edit-{{$color->color_id}}'><i class="material-icons">edit</i></a>
	                                        	<form onsubmit="return confirm('Do you really want to delete?');" style="display: inline-block;" method="post" action="color/{{$color->color_id}}">
                                                    {{csrf_field()}}
                                                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                                                    {{method_field('delete')}}
                                                    <button style="cursor: pointer;" class="btn btn-danger btn-xs" type="submit" role="button">
                                                        <i class="material-icons">delete</i>
                                                    </button>
                                                </form>
	                                        </td>


	                                   
	                                       

	                                        <div class="modal fade" id="edit-{{ $color->color_id}}">
	                                        	{{csrf_token()}}
	                                        	<div class="modal-dialog">
	                                        		<div class="modal-content">
	                                        			<div class="modal-header">
	                                        				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	                                        				<h4 class="modal-title">Update</h4>
	                                        			</div>
	                                        			<div class="modal-body">
	                                        				<form action="color/{{$color->color_id}}" method="POST" role="form">
	                                        					{{csrf_field()}}
	                                        					{{method_field('put')}}
	                                        					<div class="form-group">
	                                        						{{-- <label for="">ID</label> --}}
	                                        						<input type="hidden" class="form-control" id="" placeholder="" name="color_id" value="{{$color->color_id}}">
	                                        					</div>
	                                        					<div class="form-group">
	                                        						<label for="">Name</label>
	                                        						<input type="text" class="form-control" id="" placeholder="" name="color_name" value="{{ $color->color_name}}">
	                                        					</div>

                                                                <div class="form-group">
                                                                    <label for="">Code</label>
                                                                    <input type="text" class="form-control" id="" placeholder="" name="color_code" value="{{ $color->color_code}}">
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
    				<h4 class="modal-title">Add new color</h4>
    			</div>
    			<div class="modal-body">
    				<form action="{{ route('admin.color.store') }}" method="POST" role="form">
    					{{csrf_field()}}
                        <input type="hidden" class="form-control" name="color_id" >

                        <div class="form-group">
                            <label class="form-label">Name</label>
                            <div class="form-line">
                                <input type="text" class="form-control" name="color_name" placeholder="Color's name" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Code</label>
                            <div class="form-line">
                                <input type="text" class="form-control" name="color_code" placeholder="Color's code" required>
                            </div>
                        </div>

    					<div class="form-group">
                            <label class="form-label">Thumnail</label>
    						<div class="form-line">
                                <input type="text" class="form-control" name="thumnail" placeholder="Color's picture" required>
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
