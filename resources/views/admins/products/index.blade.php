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
             Product data table
         </h2>
     </div>
     <div class=" container-fluid">
     	<a class="btn btn-primary" data-toggle="modal" href='#add'>Add new</a>
     </div>
        
     <div class="body">
      <div class="table-responsive">
       <table class="table table-bordered table-striped table-hover js-basic-example dataTable" id="product-table">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Image</th>
                <th>Created at</th> 
                <th>Updated at</th>
                <th>Action</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Image</th>
                <th>Created at</th>
                <th>Updated at</th>
                <th>Action</th>
            </tr>
        </tfoot>
        <tbody> 
        	@foreach ($products as $product)
        		<tr>
           <td>{{ $product->product_id}}</td>
           <td>{{ $product->product_name}}</td>
           <td><img src="{{ $product->thumbnail}}" width="100px" height="100px" alt=""></td>
           <td>{{ $product->created_at->diffForHumans()}}</td>
           <td>{{ $product->updated_at->diffForHumans()}}</td>
           <td>
           	<a class="btn btn-info btn-xs" data-toggle="modal" href='#view-{{$product->product_id}}' data-id="{{$product->product_id}}"><i class="material-icons">remove_red_eye</i></a>

           	<a class="btn btn-warning btn-xs" data-toggle="modal" data-url="{{route('admin.product.update', $product->product_id)}}"  data-target="#edit-{{$product->product_id}}"><i class="material-icons">edit</i></a>

            <a class="btn btn-success btn-xs btn-image" data-toggle="modal" data-url="{{route('admin.product.image', $product->product_id)}}"  data-target="#image-{{$product->product_id}}"><i class="material-icons">image</i></a>

           	{{-- <form onsubmit="return confirm('Do you really want to delete?');" style="display: inline-block;" method="post" action="product/{{ $product->product_id}}">
              {{csrf_field()}}
              <input type="hidden" name="_token" value="{{csrf_token()}}">
              {{method_field('delete')}}
              <button style="cursor: pointer;" class="btn btn-danger btn-xs" type="submit" role="button">
                  <i class="material-icons">delete</i>
              </button>
            </form> --}}
            <button type="button" class="btn btn-xs btn-danger btn-del-product" data-url="{{route('admin.product.delete', $product->product_id)}}" data-id="{{$product->product_id}}"><i class="material-icons">delete</i></button>      
            {{-- <button data-id="{{ $product->product_id }}" data-token="{{ csrf_token() }}" class="btn btn-danger btn-xs btn-delete" id="delete-{{$product->product_id}}" ><i class="material-icons">delete</i></button> --}}
                     
            {{-- modal view product --}}
            <div class="modal fade" id="view-{{$product->product_id}}">
             <div class="modal-dialog" style="width: 70%">
              <div class="modal-content" >
               <div class="modal-header">
                   <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                   <h4 class="modal-title">Infomation of product</h4>
               </div>
               <div class="modal-body">
                <div class="table-responsive">
                 <table class="table table-bordered table-striped">
                  <thead>
                   <tr>
                       <th>Product name</th>
                       <th>Manufacture</th>
                       <th>Category</th>
                       <th style="width: 30%">Description</th>
                       <th>Origin price</th>
                       <th>Sale price</th>
                   </tr>
                  </thead>
                  <tbody>
                   <tr>
                       <td>{{$product->product_name}}</td>
                       <td>{{$product->manufacture->manufacture_name}}</td>
                       <td>{{$product->category->category_name}}</td>
                       <td>{!!$product->description!!}</td>
                       <td>{{$product->origin_price}} VND</td>
                       <td>{{$product->sale_price}} VND</td>
                   </tr>
                  </tbody>
                 </table>
                </div>
                 
                <button class="btn bg-cyan waves-effect m-b-15" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false"
                        aria-controls="collapseExample">
                    Details product
                </button>

                <div class="collapse" id="collapseExample">
                 <div class="well">
                  <table class="table table-bordered table-hover">
                      <thead>
                          <tr>
                              <th>Size</th>
                              <th>Color</th>
                              <th>Quantity</th>
                              <th>Action</th>
                          </tr>
                      </thead>
                      <tbody>
                          @foreach ($productDetails as $productDetail)
                              @if ($productDetail->product_id == $product->product_id)
                                  <tr>
                                      <td>{{$productDetail->size->eu_size}}</td>
                                      <td><i class="material-icons" style="color: {{$productDetail->color->color_code}}; ">brightness_1</i>{{$productDetail->color->color_name}}</td>
                                      <td>{{$productDetail->quantity}}</td>
                                      <td>
                                          <a href="" class="btn btn-xs btn-primary"><i class="material-icons">add</i></a>
                                          <a href="" class="btn btn-xs btn-success"><i class="material-icons">remove</i></a>
                                          <a href="" class="btn btn-xs btn-danger"><i class="material-icons">delete</i></a>
                                      </td>
                                  </tr>
                              @endif
                              
                          @endforeach
                      </tbody>
                  </table>

                  {{-- form add dynamically --}}
                  <form name="add_name" id="add_name" action="productDetail/{{$product->product_id}}">  
                   {{csrf_field()}}
                   {{method_field('get')}}
                   <div class="alert alert-danger print-error-msg" style="display:none">

                   <ul></ul>

                   </div>
                   

                   <div class="alert alert-success print-success-msg" style="display:none">

                   <ul></ul>

                   </div>


                   <div class="table-responsive">  
                    <input type="hidden" name="product_id" value="{{$product->product_id}}">
                    <table class="table table-bordered" id="dynamic_field">  
                        <tr>    
                            <td>
                                SIZE
                            </td>
                            <td>    
                                COLOR
                            </td>
                            <td>    
                                QUANTITY
                            </td>
                            <td>    </td>
                        </tr>
                        <tr>  
                            
                            <td>        
                                <select name="size_id[]" id="" class="form-control name_list" required="required">
                                    @foreach ($sizes as $size)
                                        <option value="{{$size->size_id}}">{{$size->eu_size}}</option>
                                    @endforeach
                                </select>
                            </td>  
                            <td>
                                <select name="color_id[]" id="" class="form-control name_list" required="required">
                                    @foreach ($colors as $color)
                                        <option value="{{$color->color_id}}">{{$color->color_name}}<i style="color:{{$color->color_code}}" class="fa fa-circle" aria-hidden="true"></i></option>
                                    @endforeach
                                </select></td>  
                            <td><input type="number" name="quantity[]" placeholder="Enter quantity" class="form-control name_list" /></td>  

                            <td><button type="button" name="addPD" class="btn btn-success addPD">Add More</button></td>  

                        </tr>  

                    </table>  
                    <input type="submit" {{-- name="submit" --}} id="submitPD" class="btn btn-info submitPD" value="Save" />  
                       

                   </div>
                  </form>

                  {{-- end form add dynamically --}}
                 </div>
                </div>

               </div>
               <div class="modal-footer">
                   <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
               </div>
              </div>
             </div>
            </div>
            {{-- end modal view --}} 



            {{-- modal edit product detail --}}
            <div class="modal fade" id="edit-{{$product->product_id}}">
             {{-- {{csrf_token()}} --}}
             <div class="modal-dialog" style="width: 70%">
              <div class="modal-content" >
               <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Update information of product</h4>
               </div>
               <div class="modal-body">
                <form action="product/{{$product->product_id}}" data-id="{{$product->product_id}}" method="post" >
                 {{csrf_field()}}
                 {{method_field('put')}}
                 <input type="hidden" name="product_id" value="{{$product->product_id}}">
                 <div class="form-group form-float">
                   <label class="form-label">Name</label>
                   <div class="form-line">
                       <input type="text" class="form-control" name="product_name" value="{{$product->product_name}}">
                   </div>
                 </div>

                 <div class="form-group">
                   <label>Description</label>
                   <div class="row clearfix">
                       <div class="card">
                           <textarea id="ckeditor-content-3" name="description">{{$product->description}}
                           </textarea>
                       </div>
                   </div>
                 </div>
                 
                 <div class="form-group form-float">
                   <label class="form-label">Origin price</label>
                   <div class="form-line">
                       <input type="number" class="form-control" name="origin_price" value="{{$product->origin_price}}" >
                   </div>
                 </div>

                 <div class="form-group form-float">
                   <label class="form-label">Sale price</label>
                   <div class="form-line">
                       <input type="number" class="form-control" name="sale_price" value="{{$product->sale_price}}">
                   </div>
                 </div>

                 <div class="form-group">
                     {{-- <label class="form-label">Slug</label> --}}
                     {{-- <div class="form-line"> --}}
                         <input type="hidden" class="form-control" name="slug" required>
                     {{-- </div> --}}
                 </div>
                 <div class="body">
                   <div class="row clearfix">
                     <div class="col-sm-6">
                       <label>Category</label>
                       <select class="form-control show-tick" name="category_id" required="required">
                           <option value="">-- Please select --</option>
                           @foreach ($cates as $cate)
                               <option value="{{$cate->category_id}}">{{ $cate->category_name}}</option>
                           @endforeach
                           
                       </select>
                     </div>
                     <div class="col-sm-6">
                       <label>Manufacture</label>
                       <select class="form-control" name="manufacture_id" required="required">
                           <option value="">-- Please select --</option>
                           @foreach ($manus as $manu)
                               <option value="{{$manu->manufacture_id}}">{{$manu->manufacture_name}}</option>
                           @endforeach
                           
                       </select>
                     </div>
                   </div>
                 </div> 

                 <div class="modal-footer">
                     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                     <button type="submit" class="btn btn-primary">Save changes</button>
                     {{-- <input type="submit" name="submit" id="submitPD" class="btn btn-info submitPD" value="Save" />   --}}
                 </div>
                </form>

               </div>
              </div>
             </div>
            </div>
            {{-- end modal --}}




             {{-- upload image --}}
           <div class="modal fade" id="image-{{$product->product_id}}">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  <h4 class="modal-title" id="title-detail-image"></h4>
                </div>
                <div class="modal-body">
                  <form id="images-form" action="" method="POST" class="form-inline" data-url='' role="form" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="col-sm-4 form-group">
                      <label for="choose_color">Choose Color</label>
                      <select name="choose_color" id="choose_color" class="form-control" required="required">
                        
                          
                        
                      </select>
                    </div>
                    <input type="hidden" name="image_product_id" id="image_product_id" value="">
                    <div class="col-sm-6 form-group">
                      <label for="">Choose images</label>
                      <input  type="file" id="uploadFile" name="uploadFile[]" multiple class="form-control">
                    </div>
                  
                    
                  
                    <button type="submit" class="btn btn-primary" id="upload_submit" name='submitImage'>Upload</button>
                  </form>
                  <div class="col-sm-12" id="image_preview"></div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-xs btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div> 

            {{-- end upload image --}}
           </td>
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
        <div class="modal-dialog" style="width: 70%">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Add new product</h4>
                </div>
                <div class="modal-body">
                    <form action="{{route('admin.product.store')}}" method="POST" name="" >
                        {{csrf_field()}}
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="hidden" class="form-control" name="id">
                                <label class="form-label"></label>
                            </div>
                        </div>

                        <div class="form-group form-float">
                            <label class="form-label">Name</label>
                            <div class="form-line">
                                <input type="text" class="form-control" name="product_name" placeholder="Name of product..." required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Description</label>
                            <div class="row clearfix">
                                <div class="card">
                                    <textarea  id="ckeditor-content-4" name="description" placeholder="Description of product...">
                                    </textarea>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group form-float">
                            <label class="form-label">Origin price</label>
                            <div class="form-line">
                                <input type="number" class="form-control" name="origin_price" placeholder="" required>
                            </div>
                        </div>

                        <div class="form-group form-float">
                            <label class="form-label">Sale price</label>
                            <div class="form-line">
                                <input type="number" class="form-control" name="sale_price" placeholder="" required>
                                 </div>
                        </div>
                        

                        <div class="form-group">
                            {{-- <label class="form-label">Slug</label> --}}
                            {{-- <div class="form-line"> --}}
                                <input type="hidden" class="form-control" name="slug" required>
                            {{-- </div> --}}
                        </div>

                        <div class="body">
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                    <label>Category</label>
                                    <select class="form-control show-tick" name="category_id" required="required">
                                        <option value="">-- Please select --</option>
                                        @foreach ($cates as $cate)
                                            <option value="{{$cate->category_id}}">{{ $cate->category_name}}</option>
                                        @endforeach
                                        
                                    </select>
                                </div>
                                <div class="col-sm-6">
                                    <label>Manufacture</label>
                                    <select class="form-control" name="manufacture_id" required="required">
                                        <option value="">-- Please select --</option>
                                        @foreach ($manus as $manu)
                                            <option value="{{$manu->manufacture_id}}">{{$manu->manufacture_name}}</option>
                                        @endforeach
                                        
                                    </select>
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
<style type="text/css" media="screen">
  #add-new{
    margin-left: 30px;
  }
  .table-row td{
    vertical-align: middle !important;
  }
  #image_preview{
    margin-top: 30px;
  }
  .image-append{
     height:100px; 
     display:inline-block; 
     opacity: 0.8;
     transition: 0.2s;
  }
  .image-append:hover{
    opacity: 1;
  }
  .image-div{
    position: relative;
    display: inline-block;
    box-shadow: 0px 1px 1px 1px rgba(0,0,0,0.15);
    margin-right: 15px; 
    margin-bottom: 15px;
    border-radius: 6px;
  }
  .btn-del-image{
    position: absolute;
    transform: translate(50%, 50%);
    top: -20px ;
    right: 0px ;
    color: #D73925;
    font-size: 20px;
    cursor: pointer;
    background: white;
    border-radius: 50%;
  }
</style>

@section('foot')
    <script type="text/javascript">
        $(document).ready( function () {
            $('#product-table').DataTable();
        } );
        var productTable=$('#product-table').DataTable();
            $(document).on('click','.btn-del-product',function(){
             swal({
              title:"Are you sure?",
              text:"Once delete, you will not be able to recover this product!",
              icon:"warning",
              buttons:true,
              dangerMode:true,
             })
             .then((willDelete)=>{
              if(willDelete){
               swal("Poof! Your product has been deleted!",{
                icon:"success",
               });
               var url=$(this).attr('data-url');
               $.ajax({
                type:'delete',
                url: url,
                success:function(response){
                 toastr.error('The product has been deleted!');
                 productTable.ajax.reload();
                },
                error:function(error){

                }
               })
              }else{

              }
             })
            });
        
    </script>
    <script type="text/javascript">
        CKEDITOR.replace('ckeditor-content-3');

        $(document).on('click','.btn-image',function () {
          $('#upload').modal('show');
          $('#image_preview').html("");
          document.getElementById("images-form").reset();
          var url=$(this).attr('data-url');
          var urlImage=$(this).attr('data-url-image');
          $("#image_preview").attr('data-url-image',urlImage)
          var id=$(this).attr('data-id');
          var name=$(this).attr('data-name');


          $('#image_product_id').val(id);
          $('#title-detail-image').text(name);

          //console.log(url);
          $.ajax({
            type: 'get',
            url: url,
            success: function (response) {
              // $('#choose_color').append('<option value="'+ response.id +'">'+ response.name +'</option>');
              //console.log(response);
              $("#choose_color").empty();

              response.data.map(function(color, index){
                $('#choose_color').append('<option value="'+ color.color_id +'">'+ color.color_name +'</option>');
              })
            },
            error: function (error) {
            }
          })
          $.ajax({
            type: 'get',
            url: urlImage,
            success: function (response) {
              // $('#choose_color').append('<option value="'+ response.id +'">'+ response.name +'</option>');
              //console.log(response);
              $("#image_preview").html("");

              response.data.map(function(image, index){
                var src=image.link;
                src = src.replace("public", "http://tungdeptrai.vn/storage");
                $('#image_preview').append("<div class='image-div'><img class='img-responsive img-rounded image-append' src='"+src+"'><i class='fa fa-times-circle btn-del-image' aria-hidden='true' data-url='http://tungdeptrai.vn/admin/delImages/"+image.id+"' data-id='"+image.id+"' data-link='"+image.link+"'></i></div>");
              })
            },
            error: function (error) {
            }
          })
      })
    </script>

    <script type="text/javascript">
        CKEDITOR.replace('ckeditor-content-4');
    </script>
    <script type="text/javascript">
        var i=1;  
         $('#product-table').on('click', '.addPD', function(){
                i++;  

               $('#dynamic_field').append('<tr id="row'+i+'" class="dynamic-added"><td><select name="size_id[]" id="" class="form-control name_list" required="required">@foreach ($sizes as $size)<option value="{{$size->size_id}}">{{$size->eu_size}}</option>@endforeach</select></td><td><select name="color_id[]" id="" class="form-control name_list" required="required">@foreach ($colors as $color)<option value="{{$color->color_id}}">{{$color->color_name}}<i style="color:{{$color->color_code}}" class="fa fa-circle" aria-hidden="true"></i></option>@endforeach</select></td><td><input type="number" name="quantity[]" placeholder="Enter quantity" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove_x">X</button></td></tr>');   
          });
             $(document).on('click', '.btn_remove_x', function(){  

                   var button_id = $(this).attr("id");
                   $('#row'+button_id+'').remove();  

              });  
        $(document).ready(function(){      

          var postURL = "<?php echo url('addmore'); ?>"; 
          



          $.ajaxSetup({

              headers: {

                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

              }

          });

        });  

    </script>


@endsection
