@extends('admin.layouts.master')
@section('title', 'Add Post')
@section('maincontent')
<?php
$data['heading'] = 'Add Blog Post';
$data['title'] = 'Blog';
$data['title1'] = 'Add Post';
?>
@include('admin.layouts.topbar',$data)
<div class="contentbar">
    <div class="row">
@if ($errors->any())  
  <div class="alert alert-danger" role="alert">
  @foreach($errors->all() as $error)     
  <p>{{ $error}}<button type="button" class="close" data-dismiss="alert" aria-label="Close" title="{{ __('Close') }}">
  <span aria-hidden="true" style="color:red;">&times;</span></button></p>
      @endforeach  
  </div>
  @endif
  <!-- row started -->
    <div class="col-lg-12">
        <div class="card dashboard-card m-b-30">
            <!-- Card header will display you the heading -->
                <div class="card-header">
                    <h5 class="card-box"> {{ __('Add Post') }}</h5>
                    <div>
                        <div class="widgetbar">
                        <a href="{{url('blog')}}" class="btn btn-primary-rgba" title="{{ __('Back') }}"><i class="feather icon-arrow-left mr-2"></i>{{ __("Back")}}</a>
                        </div>
                      </div>
                </div> 
               
                <!-- card body started -->
                <div class="card-body">
                    <!-- form start -->
                    <form action="{{action('BlogController@store')}}" class="form" method="POST" novalidate enctype="multipart/form-data" class="openai_generator_form">
                        @csrf
                        <input  type="hidden" class="form-control" name="user_id" value="{{ Auth::User()->id }}" >
                        <!-- row start -->
                        <div class="row">
                            <div class="col-md-12">
                                <!-- card start -->
                                <div class="card">
                                    <!-- card body start -->
                                    <div class="card-body">
                                        <!-- row start -->
                                          <div class="row">                                              
                                              <div class="col-md-12">
                                                  <!-- row start -->
                                                  <div class="row">                                                    
                                                     <!-- Heading -->
                                                     <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label class="text-dark">{{ __('Heading') }} : <span class="text-danger">*</span></label>
                                                            <input type="text" id="heading" value="{{ old('heading') }}" autofocus="" class="form-control @error('heading') is-invalid @enderror" placeholder="{{ __('Enter Heading') }}" name="heading" required="">
                                                            @error('heading')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                      <!-- Slug -->
                                                      <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label class="text-dark">{{ __('Slug') }} : <span class="text-danger">*</span></label>
                                                            <input type="text" pattern="[/^\S*$/]+"  value="{{ old('slug') }}" autofocus="" class="form-control @error('slug') is-invalid @enderror" placeholder="{{ __('Enter Slug') }}" name="slug" required="">
                                                            @error('slug')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                     <!-- ButtonText -->
                                                     <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label class="text-dark">{{ __('Button Text') }} : <span class="text-danger">*</span></label>
                                                            <input type="text" value="{{ old('text') }}" autofocus="" class="form-control @error('title') is-invalid @enderror" placeholder="{{ __('Enter Button Text') }}" name="text" required="">
                                                            @error('text')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <!-- Date -->
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label class="text-dark">{{ __('Date') }} : <span class="text-danger">*</span></label>
                                                            <input type="date" class="form-control" name="date" id="inputDate" placeholder="{{ __('Select Date') }}" required>
                                                            
                                                            @error('date')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <!-- Description -->
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label class="text-dark">{{ __('Details') }}: <span class="text-danger">*</span></label>
                                                            <textarea  name="detail"  id="detail" class="@error('detail') is-invalid @enderror" placeholder="{{ __('Enter') }} {{ __('Detail') }}" required="">{{ old('detail') }}</textarea>
                                                            @error('detail')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                    
                                                    <!-- image -->

                                                    @if(Auth::user()->role == 'admin')
                                                    <div class="col-md-4">
                                                        <label class="text-dark">{{ __('Image') }}:<span class="text-danger">*</span></label><br>
                                                        <div class="input-group mb-3">
                                                            <input type="text" class="form-control" readonly id="image" name="image">
                                                            <div class="input-group-append">
                                                              <span data-input="image" class="midia-toggle btn-primary  input-group-text" id="basic-addon2">{{ __('Browse') }}</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @endif

                                                    @if(Auth::user()->role == 'instructor')
                                                    <div class="col-md-4">
                                                    <label class="text-dark">{{ __('Image') }}:<span class="text-danger">*</span></label><br>
                                                    <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="inputGroupFileAddon01">{{ __('Upload') }}</span>
                                                    </div>
                                                    <div class="custom-file">
                                                        <input accept="image/*" type="file" class="custom-file-input" name="image" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" required>
                                                        <label class="custom-file-label" for="inputGroupFile01">{{ __('Choose file') }}</label>
                                                    </div>
                                                    </div>
                                                    @endif

                                                    <!-- Approved -->
                                                    @if(Auth::user()->role == 'admin')
                                                    <div class="form-group col-md-3">
                                                        <label class="text-dark" for="exampleInputDetails">{{ __('Approved') }} : <sup class="redstar text-danger">*</sup></label><br>
                                                        <input type="checkbox" class="custom_toggle" name="approved" checked />
                                                        <input type="hidden"  name="free" value="0" for="status" id="status">
                                                    </div>

                                                    <!-- status -->
                                                    <div class="form-group col-md-3">
                                                    <label class="text-dark" for="exampleInputDetails">{{ __('Status') }} :</label><br>
                                                    <input type="checkbox" class="custom_toggle" name="status" checked />
                                                    <input type="hidden"  name="free" value="0" for="status" id="status">
                                                    </div>
                                                    @endif
                                                                      
                                                    <!-- create and close button -->
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <button type="reset" class="btn btn-danger-rgba mr-1" title="{{ __('Reset') }}"><i class="fa fa-ban"></i> {{ __("Reset")}}</button>
                                                            <button type="submit" class="btn btn-primary-rgba" title="{{ __('Create') }}"><i class="fa fa-check-circle"></i>
                                                            {{ __("Create")}}</button>
                                                        </div>
                                                    </div>

                                                  </div><!-- row end -->
                                              </div><!-- col end -->
                                          </div><!-- row end -->

                                    </div><!-- card body end -->
                                </div><!-- card end -->
                            </div><!-- col end -->
                        </div><!-- row end -->
                  </form>
                  <!-- form end -->
                </div><!-- card body end -->
            
        </div><!-- col end -->
    </div>
</div>
</div><!-- row end -->
    <br><br>
@endsection
<!-- main content section ended -->
<!-- This section will contain javacsript start -->
@section('script')
    <script>
        $(".midia-toggle").midia({
            base_url: '{{url('')}}',
            title : 'Choose Blog Image',
        dropzone : {
          acceptedFiles: '.jpg,.png,.jpeg,.webp,.bmp,.gif'
        },
            directory_name : 'blog'
        });
    </script>
    <script>
    $("#babyname_generator").on('submit',function(e) {
        alert('hello');
    e.preventDefault();
    $('.babyname_generator_btn').text('Please Wait...');
    $('.babyname_generator_btn').prop("disabled", true);
    var formData = new FormData();
    var t = formData.append('heading', $("#heading").val());
    var baseUrl = "{{ url('/') }}";
    var urlLike = baseUrl+'/blog/openai'; 
    $.ajax({
        type: "post",
        url: urlLike,
        data: formData,
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        contentType: false,
        processData: false,
        success: function (data) {
            console.log(data);
            // if(data && data.html){
            //     toastr.success('Generated Successfully!');
            //     console.log(data.html);
            //     $("#generator_sidebar_table").html(data.html);
            //     $('.babyname_generator_btn').prop("disabled", false);
            //     $('.babyname_generator_btn').text('Generate');
            //     $('.fruit').html(function(_, oldHTML) {
            //             return '<ul><li>' + oldHTML.split('\n').join('</li><li>') + '</li></ul>';
            //     });
            // } else {
            //     $('.babyname_generator_btn').text('Generate');
            //     toastr.error('Your word limit has been exceeded.');
            // }
        },
        error: function (data) {
            console.log(data+"ssssss");
        }
    });
});
    </script>
@endsection
<!-- This section will contain javacsript end -->