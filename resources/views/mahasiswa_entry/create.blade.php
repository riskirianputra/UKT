@section('js')

<script type="text/javascript">

$(document).ready(function() {
    $(".users").select2();
});

</script>
@stop

@extends('layouts.applay')

@section('content')

<form method="POST" action="{{ route('mahasiswa_entry.store') }}" enctype="multipart/form-data">
    {{ csrf_field() }}
<div class="row">
            <div class="col-md-12 d-flex align-items-stretch grid-margin">
              <div class="row flex-grow">
                <div class="col-12">
                  <div class="card">
                    <div class="card-body">                         
                        <div class="form-row">                                                                                    
                            <div class="form-group col-md-6">
                                <label for="idKategory" class="col-md-6 control-label">ID Kategory</label>
                                    <select class="form-control" name="idKategory" id="idKategory" required="">
                                        <option value="">(Cari Kategory)</option>
                                            @foreach($kategory as $kate)
                                        <option value="{{$kate->id}}">{{$kate->namaKategory}}</option>
                                            @endforeach
                                    </select>
                            </div>                          
                        </div>           

                       <div class="form-row">                                                                                    
                            <div class="form-group col-md-6">
                                <label for="idKategory_detail" class="col-md-6 control-label">ID Kategory</label>
                                    <select class="form-control" name="idKategory_detail" id="idKategory_detail" required="">
                                        <option value="">(Cari Kategory)</option>
                                            @foreach($kategory_detail as $kate_detail)
                                        <option value="{{$kate_detail->id}}">{{$kate_detail->isiKategory}}</option>
                                            @endforeach
                                    </select>
                            </div>                          
                        </div> 
                                                                                             
                        <button type="submit" class="btn btn-primary" id="submit">
                                    Submit
                        </button>
                        <button type="reset" class="btn btn-danger">
                                    Reset
                        </button>
                        <a href="{{route('mahasiswa_entry.index')}}" class="btn btn-light pull-right">Back</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

</div>

<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

                        <script type="text/javascript">
                            $('#idKategory').on('change', function(e){
                                console.log(e);

                                var cat_id = e.target.value;

                                $('#idKategory_detail').empty();
                                $.get('/ajax-subcat?cat_id=' +cat_id, function(data){
                                   
                                   $.each(data, function(index, subcatObj){

                                    $('#idKategory_detail').append('<option value="' +subcatObj.id+ '">' +subcatObj.name+'</option>');

                                   });
                                });
                            });


                            // $(document).ready(function(){

                            //     $(document).on('change','.idKategory', function(){
                            //         console.log("hmm its change");

                            //         var cat_id=$(this).val();
                            //         console.log(cat_id );

                            //     });
                            // });

                        </script> -->
</form>
@endsection