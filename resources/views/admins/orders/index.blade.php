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
                            Order data table
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
                                   	@foreach ($orders as $order)
                                   		<tr>
	                                        <td>{{ $order->order_id}}</td>
	                                        <td>{{ $order->order_name}}</td>
	                                        <td>{{ $order->created_at->diffForHumans()}}</td>
	                                        <td>{{ $order->updated_at->diffForHumans()}}</td>
                                            <td>
	                                        	<a class="btn btn-info btn-xs" data-toggle="modal" href='#view-{{$order->order_id}}'>View</a>
	                                        	<a class="btn btn-warning btn-xs" data-toggle="modal" href='#edit-{{$order->order_id}}'>Edit</a>
	                                        	<form onsubmit="return confirm('Do you really want to delete?');" style="display: inline-block;" method="post" action="order/{{$order->order_id}}">
                                                    {{csrf_field()}}
                                                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                                                    {{method_field('delete')}}
                                                    <button style="cursor: pointer;" class="btn btn-danger btn-xs" type="submit" role="button">
                                                        Delete
                                                    </button>
                                                </form>
	                                        </td>


	                                   
	                                       {{--  <div class="modal fade" id="view-{{$cate->category_id}}">
	                                        	<div class="modal-dialog">
	                                        		<div class="modal-content">
	                                        			<div class="modal-header">
	                                        				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	                                        				<h4 class="modal-title">Infomation of category</h4>
	                                        			</div>
	                                        			<div class="modal-body">
	                                        				<form action="" method="POST" role="form">
	                                        				
	                                        					<div class="form-group">
	                                        						<label for="">ID</label>
	                                        						<input type="text" class="form-control" id="" placeholder="" value="{{ $cate->category_id}}" disabled="" name="id">
	                                        					</div>

	                                        					<div class="form-group">
	                                        						<label for="">Name</label>
	                                        						<input type="text" class="form-control" id="" placeholder="" value="{{ $cate->category_name}}" name="name" disabled="">
	                                        					</div>

                                                                <div class="form-group">
                                                                    <label>Description</label>
                                                                    <div class="row clearfix">
                                                                        <div class="card">
                                                                            <textarea  id="ckeditor-content-1" name="description" placeholder="" disabled="">{{ $cate->description}}
                                                                            </textarea>
                                                                        </div>
                                                                    </div>
                                                                </div>


	                                        					<div class="form-group">
	                                        						{{-- <label for="">Slug</label> --}}
	                                        						<input type="hidden" class="form-control" id="" placeholder="" name="slug"  disabled="">
	                                        					</div>

                                                                <div class="form-group">
                                                                    <label for="">Status</label>
                                                                    <input type="text" class="form-control" id="" placeholder="" name="status" value="@if($cate->slug!=0) stocking @else Out of stock @endif" disabled="">
                                                                </div>


                
	                                        					<div class="form-group">
	                                        						<label for="">Created at</label>
	                                        						<input type="text" class="form-control" id="" placeholder="" value="{{ $cate->created_at}}" disabled="">
	                                        					</div>
	                                        					<div class="form-group">
	                                        						<label for="">Updated at</label>
	                                        						<input type="text" class="form-control" id="" placeholder="" value="{{ $cate->updated_at}}" disabled="">
	                                        					</div>
	                                        				
	                                        					

	                                        				</form>
	                                        			</div>
	                                        			<div class="modal-footer">
	                                        				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	                                        			</div>
	                                        		</div>
	                                        	</div>
	                                        {{-- </div>

	                                        <div class="modal fade" id="edit-{{$cate->category_id}}">
	                                        	{{csrf_token()}}
	                                        	<div class="modal-dialog">
	                                        		<div class="modal-content">
	                                        			<div class="modal-header">
	                                        				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	                                        				<h4 class="modal-title">Update infomation of category</h4>
	                                        			</div>
	                                        			<div class="modal-body">
	                                        				<form action="Category/{{$cate->category_id}}" method="POST" role="form">
	                                        					{{csrf_field()}}
	                                        					{{method_field('put')}}
	                                        					<div class="form-group">
	                                        						{{-- <label for="">ID</label> --}}
	                                        						<input type="hidden" class="form-control" id="" placeholder="" name="category_id" value="{{$cate->category_id}}">
	                                        					</div>
	                                        					<div class="form-group">
	                                        						<label for="">Name</label>
	                                        						<input type="text" class="form-control" id="" placeholder="" name="category_name" value="{{ $cate->category_name}}">
	                                        					</div>

                                                                <div class="form-group">
                                                                    <label>Description</label>
                                                                    <div class="row clearfix">
                                                                        <div class="card">
                                                                            <textarea  id="ckeditor-content-4" name="description" placeholder="">{{ $cate->description}}
                                                                            </textarea>
                                                                        </div>
                                                                    </div>
                                                                </div>

	                                        					<div class="form-group">
	                                        						<label for="">Slug</label>
	                                        						<input type="hidden" class="form-control" id="" placeholder="" name="slug" ">
	                                        					</div>

                                                                <div class="form-group">
                                                                    <input type="radio" name="status" class="with-gap" value="1" checked="">
                                                                    <label for="">Stocking</label>

                                                                    <input type="radio" name="status" class="with-gap" value="0">
                                                                    <label for="" class="m-l-20">Out of stocking</label>
                                                                </div>
                            
	                                        					<div class="modal-footer">
			                                        				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			                                        				<button type="submit" class="btn btn-primary">Save changes</button>
			                                        			</div>
	                                        				</form>
	                                        			</div>
	                                        			
	                                        		</div>
	                                        	</div>
	                                        {{-- </div> --}} 

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


    {{-- <div class="modal fade" id="add">
    	<div class="modal-dialog">
    		<div class="modal-content">
    			<div class="modal-header">
    				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    				<h4 class="modal-title">Add new category</h4>
    			</div>
    			<div class="modal-body">
    				<form action="{{ route('admin.category.store') }}" method="POST" role="form">
    					{{csrf_field()}}
                        <input type="hidden" class="form-control" name="id" >

    					<div class="form-group">
                            <label class="form-label">Name</label>
    						<div class="form-line">
                                <input type="text" class="form-control" name="category_name" placeholder="Category's name" required>
                            </div>
    					</div>

    					<div class="form-group form-float">
    						{{-- <label class="form-label">Slug</label>
    						{{-- <div class="form-line"> --}}
                                <input type="hidden" class="form-control" name="slug" placeholder="g" required>
                                
                            {{-- </div> --}}
    					</div>

                        <div class="form-group">
                            <label>Description</label>
                            <div class="row clearfix">
                                <div class="card">
                                    <textarea  id="ckeditor-content-5" name="description" placeholder="Description of category...">
                                    </textarea>
                                </div>
                            </div>
                        </div>

    				
                        <div class="form-group">
                            <input type="radio" name="status" class="with-gap" value="1" checked="">
                            <label for="">Stocking</label>

                            <input type="radio" name="status" class="with-gap" value="0">
                            <label for="" class="m-l-20">Out of stocking</label>
                        </div>

    					<div class="modal-footer">
		    				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		    				<button type="submit" class="btn btn-primary">Save</button>
		    			</div>
    				</form>
    			</div>
    			
    		</div>
    	</div>
    {{-- </div> --}} 
@endsection

{{-- @section('foot')
    <script type="text/javascript">
        CKEDITOR.replace('ckeditor-content-4');
    </script>

    <script type="text/javascript">
        CKEDITOR.replace('ckeditor-content-1');
    </script>

    <script type="text/javascript">
        CKEDITOR.replace('ckeditor-content-5');
    </script>
@endsection --}}