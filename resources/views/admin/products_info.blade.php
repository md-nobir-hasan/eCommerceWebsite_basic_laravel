@extends('admin.layout.master')
<!-- Page wrapper  -->
<!-- ============================================================== -->
@section('content')


<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-5 align-self-center">
                <h4 class="title_page">Product page</h4>
            </div>

            <div class="col-7 align-self-center">
                <div class="d-flex align-items-center justify-content-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="#">Admin</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Product Page</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>



    @if(session()->has('message'))

    @if(session()->get('message')=='inserted')
        <div class="alert alert-success">
            <p>সফলভাবে যোগ করা হয়েছে</p>
        </div>

    @elseif(session()->get('message')=='updated')
        <div class="alert alert-success">
            <p>সফলভাবে আপডেট করা হয়েছে</p>
        </div>

    @elseif(session()->get('message')=='existed')
        <div class="alert alert-danger">
            <p>আপনার দেওয়া তথ্য বিদ্যমান আছে</p>
        </div>

    @elseif(session()->get('message')=='deleted')
        <div class="alert alert-danger">
            <p>সফলভাবে ডিলেট হয়েছে</p>
        </div>
    @else
        <div class="alert alert-danger">
            <p>{{session()->get('message')}}</p>
        </div>
    @endif
    @endif

@if($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach($errors->all() as $error)
        <li>
            {{$error}}
        </li>
        @endforeach
    </ul>
</div>
@endif
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">


        <!-- ============================================================== -->
        <!-- Add Police Station -->
        <div class="col-12  w-75 m-auto">
            <div class="card">
                <div class="card-body">
                    {{-- ============================================================================================================
                    =======================================  Insert Form  ======================================================
                    ============================================================================================================ --}}
                    <form action="{{route('admin.pInsert')}}"  method="POST" id="insert_form" class="form-horizontal form-material mx-2" enctype="multipart/form-data">
                        {{-- {{route('admin/insert')}} --}}
                      @csrf

                        <div class="form-group d-flex">
                            <label class="col-sm-12" style="width: 25%;">নাম</label>
                            <div class="col-sm-12" style="width: 75%;">
                                <input name='name' type="text" placeholder="নাম" class="form-control form-control-line">
                            </div>
                        </div>


                        <div class="form-group d-flex">
                            <label class="col-sm-12" style="width: 25%;">price</label>
                            <div class="col-sm-12" style="width: 75%;">
                                <input name='price' type="number" placeholder="Insert Product Price" class="form-control form-control-line">
                            </div>
                        </div>

                        <div class="form-group d-flex">
                            <label class="col-sm-12" style="width: 25%;">Discount</label>
                            <div class="col-sm-12" style="width: 75%;">
                                <input name='discount' type="number" placeholder="Add Discount Price" class="form-control form-control-line">
                            </div>
                        </div>



                        <div class="form-group d-flex">
                            <label class="col-sm-12" style="width: 25%;">Product Image</label>
                            <div class="col-sm-12" style="width: 75%;">
                                <input name='img' type="file" placeholder="Insert Product Image" class="form-control form-control-line">
                            </div>
                        </div>

                        <div class="form-group d-flex">
                            <div class="col-sm-12" style="width: 25%;"></div>
                            <div class="col-sm-12" style="width: 75%;">
                                <button class="btn btn-success text-white">Submit</button>
                            </div>
                        </div>
                    </form>



                     {{-- ============================================================================================================
                    =======================================  Edit Form  ======================================================
                    ============================================================================================================ --}}


                    <form action="{{route('admin.pUpdate')}}"  method="POST" id="edit_form" class="form-horizontal form-material mx-2" enctype="multipart/form-data" style="display: none">
                        {{-- {{route('admin/update')}} --}}
                      @csrf
                      @method('PUT');

                        <div class="form-group d-flex">
                            <label class="col-sm-12" style="width: 25%;">নাম</label>
                            <div class="col-sm-12" style="width: 75%;">
                                <input id="input1" name='name' type="text" placeholder="নাম" class="form-control form-control-line">
                            </div>
                        </div>


                        <div class="form-group d-flex">
                            <label class="col-sm-12" style="width: 25%;">price</label>
                            <div class="col-sm-12" style="width: 75%;">
                                <input id="input2" name='price' type="number" placeholder="Insert Product Price" class="form-control form-control-line">
                            </div>
                        </div>

                        <div class="form-group d-flex">
                            <label class="col-sm-12" style="width: 25%;">Discount</label>
                            <div class="col-sm-12" style="width: 75%;">
                                <input id="input3" name='discount' type="number" placeholder="Add Discount Price" class="form-control form-control-line">
                            </div>
                        </div>



                        <div class="form-group d-flex">
                            <label class="col-sm-12" style="width: 25%;">Product Image</label>
                            <div class="col-sm-12" style="width: 75%;">
                                <input id="input4" name='img' type="file" placeholder="Insert Product Image" class="form-control form-control-line">
                            </div>
                        </div>

                        <input id="id" type="hidden" name='id' type="number" class="form-control form-control-line">

                        <div class="form-group d-flex">
                            <div class="col-sm-12" style="width: 25%;"></div>
                            <div class="col-sm-12" style="width: 75%;">
                                <button class="btn btn-success text-white">Edit</button>
                                <button type="button" id="back" href='back_insert' class="btn btn-success text-white">Back</button>
                            </div>
                        </div>


                </div>
            </div>
        </div>





{{-- =======================================================================================================
==============================       Show show table        ===========================================
==================================================================================================== --}}
        <div class="row">
            <!-- column -->
            <div class="col-12  m-auto">
                <div class="card">
                    <div class="table-responsive">
                        <table id="datatable" class="table table-hover table-bordered">
                            <thead>
                                <tr>
                                    <th class="border-top-0 text-center">SL.</th>

                                    <th class="border-top-0 text-center"> Product's Name</th>
                                    <th class="border-top-0 text-center"> Product's Price</th>
                                    <th class="border-top-0 text-center"> Discount Price</th>

                                    <th class="border-top-0 text-center">Product's Image</th>
                                    <th class="border-top-0 text-center">অপারেশন</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($db_data as $data)
                                <tr>
                                    <td>{{$loop->index+1}}
                                    </td>
                                    <td >{{$data->name}}</td>
                                    <td >{{$data->price}}</td>
                                    <td >{{$data->discount}}</td>
                                    <td class="td_n_img">
                                        <img class="img img-control" src="{{asset("storage/images/products/$data->img")}}" alt="">
                                    </td>

                                    <td class="td_css">

                                        {{-- <a class="edit_btn" pid='{{$data->id}}' class="btn btn-info"><i class="bi bi-pen"></i></a> --}}


                                     <form  method="POST" action="/admin/delete/model1/{{$data->id}}"  class="spacing">
                                        @csrf
                                        @method('delete')
                                            {{-- <button  id='custom-btn' class="btn btn-danger" onclick="return confirm('Are you sure??')"><i class="bi bi-trash"></i></button> --}}
                                     </form>

                                    </td>
                                    <td class="td_css">
                                        <a class="edit_btn" pid="{{$data->id}}" class="btn btn-info"><i class="bi bi-pen"></i></a>
                                        <form  action="/admin/delete/model1/{{$data->id}}"  method="POST" class="spacing">
                                            @csrf
                                            @method('delete')
                                            <button id="custom-btn" onclick="return confirm('Are you sure to  delete')" class="btn btn-danger"><i class="bi bi-trash"></i></button>
                                        </form>
                                    </td>

                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        {{-- =======================================================================================================
==============================     End Show show table        ===========================================
==================================================================================================== --}}







    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- footer -->
    <!-- ============================================================== -->
   {{-- <footer> --}}
        <footer class="footer text-center">
           <div class="footer_login">
            <span>Design and Development by</span> <br>
            <a href="http://www.nazmuljewel.com/" target="_blank" style="color:blue; font-size:23px; text-decoration:none;">Md. Nobir Hasan </a><br>
          <span>=======================================</span>   <br>
           <span> All Rights Reserved by</span> <br>
             <a href="https://www.albd-dcn.org/" target="_blank" style="color:green; font-size:23px; text-decoration:red;">eWebName</a>
           </div>
        </footer>
    <!-- ============================================================== -->
    <!-- End footer -->
    <!-- ============================================================== -->
</div>


@endsection

@section('javaScript')
<script>

        $('.edit_btn').each(function()
        {

            $(this).on('click',function()
            {

                //Scrolling
                document.body.scrollTop = 0;
                document.documentElement.scrollTop = 0;

                var id = $(this).attr('pid');
                var tr = $(this).closest("tr");
                var length = $(tr).find("td").length;

                $('#insert_form').hide();
                $('#edit_form').show();

                for(let i=1;i<length-1;i++)
                {
                     $("#input"+i+"").val($(tr).find("td:eq("+i+")").text());
                }

                $('#id').val(id);
               });

        });




    $('#back').on('click',function(){

        $('#edit_form').hide();
        $('#insert_form').show();
    });

</script>

@endsection



