@extends('backend.layout.master')

@section('PageCSS')
<link rel="stylesheet" href="{{ asset('backend/assets/vendor/bootstrap-multiselect/bootstrap-multiselect.css') }}">
<link rel="stylesheet" href="{{ asset('backend/assets/vendor/parsleyjs/css/parsley.css') }}">
<link rel="stylesheet" href="{{ asset('backend/assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.min.css') }}">

@endsection

@section('MainSection')

<div class="block-header">
    <div class="row clearfix">
        <div class="col-md-6 col-sm-12">
            <h1>Form Validation</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">About Me</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Add About Me Information</li>
                </ol>
            </nav>
        </div>
        <div class="col-md-6 col-sm-12 text-right hidden-xs">
            <a href="javascript:void(0);" class="btn btn-sm btn-primary" title="">Create Campaign</a>
            <a href="https://themeforest.net/item/oculux-bootstrap-4x-admin-dashboard-clean-modern-ui-kit/23091507" class="btn btn-sm btn-success" title="Themeforest"><i class="icon-basket"></i> Buy Now</a>
        </div>
    </div>
</div>

<div class="row clearfix">
    <div class="col-md-6">
        <div class="card">
            <div class="header">
                <h2>Basic Validation</h2>
            </div>
            <div class="body">
                @if(session()->has('success'))
                    <p class="text-success"> {{ session('success') }}</p>
                @endif

                <form id="basic-form" action="{{ route('aboutme.store') }}"  method="post" enctype="multipart/form-data" novalidate>
                    @csrf
                    <div class="form-group">
                        <label>Full Name <span class="text-danger">*</span></label>
                        <input name="name" type="text" class="form-control" >

                        @error('name')
                        <p class="text-danger"> {{ $message }}</p>
                        @enderror

                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input name="email" type="email" class="form-control" >
                        @error('email')
                        <p class="text-danger"> {{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Phone</label>
                        <input name="phone" type="text" max="11" min="11" class="form-control" >
                        @error('phone')
                        <p class="text-danger"> {{ $message }}</p>
                        @enderror

                    </div>
                    <div class="form-group">
                        <label>About Me (Short)</label>
                        <textarea name="about_me_short" class="form-control" rows="5" cols="30" ></textarea>
                        @error('about_me_short')
                        <p class="text-danger"> {{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>About Me (Details)</label>
                        <textarea name="about_me_long" class="form-control" rows="5" cols="30" ></textarea>
                        @error('about_me_long')
                        <p class="text-danger"> {{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Gender</label>
                        <select class="custom-select" id="inputGroupSelect01" name="gender">
                            <option value="" selected>Choose...</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="other">Other</option>
                        </select>
                        @error('gender')
                        <p class="text-danger"> {{ $message }}</p>
                        @enderror                    </div>
                    <div class="form-group">
                        <label>Marital Status</label>
                         <select class="custom-select" id="inputGroupSelect01" name="marital_status">
                                <option value="" selected>Choose...</option>
                                <option value="married">Married</option>
                                <option value="unmarried">Unmarried</option>
                                <option value="single">Single</option>
                                <option value="divorce">Divorce</option>
                                <option value="widowed">Widowed</option>
                            </select>
                        @error('marital_status')
                        <p class="text-danger"> {{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Nationality</label>
                        <input name="nationality" type="text" class="form-control" >
                        @error('nationality')
                        <p class="text-danger"> {{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Date Of Birth</label>
                        <div class="input-group mb-3">
                            <input name="dob" data-provide="datepicker" data-date-autoclose="true" class="form-control">
                        </div>
                        @error('dob')
                        <p class="text-danger"> {{ $message }}</p>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">Add About Me Info </button>
                </form>
            </div>
        </div>
    </div>

</div>

@endsection

@section('PageJS')

<script src="{{ asset('backend/assets/vendor/bootstrap-multiselect/bootstrap-multiselect.js') }}"></script>
<script src="{{ asset('backend/assets/vendor/parsleyjs/js/parsley.min.js') }}"></script>
<script src="{{ asset('backend/assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>


    <script>
        $(function() {
            // validation needs name of the element
            $('#food').multiselect();

            // initialize after multiselect
            $('#basic-form').parsley();
        });
    </script>
@endsection
