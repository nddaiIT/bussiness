
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