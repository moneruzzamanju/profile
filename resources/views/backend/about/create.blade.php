@extends('backend.layout.master')

@section('PageCSS')
<link rel="stylesheet" href="{{ asset('backend/assets/vendor/bootstrap-multiselect/bootstrap-multiselect.css') }}">
<link rel="stylesheet" href="{{ asset('backend/assets/vendor/parsleyjs/css/parsley.css') }}">
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
    <div class="col-md-12">
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
                        <label>Full Name</label>
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
                        <label>About Me (Short)</label>
                        <textarea name="aboutme1" class="form-control" rows="5" cols="30" ></textarea>
                        @error('aboutme1')
                        <p class="text-danger"> {{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>About Me (Details)</label>
                        <textarea name="aboutme2" class="form-control" rows="5" cols="30" ></textarea>
                        @error('aboutme2')
                        <p class="text-danger"> {{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Gender</label>
                        <br />
                        <label class="fancy-radio">
                            <input type="radio" name="gender" value="male" required data-parsley-errors-container="#error-radio">
                            <span><i></i>Male</span>
                        </label>
                        <label class="fancy-radio">
                            <input type="radio" name="gender" value="female">
                            <span><i></i>Female</span>
                        </label>
                        @error('radio')
                        <p class="text-danger"> {{ $message }}</p>
                        @enderror                    </div>
                    <div class="form-group">
                        <label>Marital Status</label>
                        <br />
                        <label class="fancy-radio">
                            <input type="radio" name="gender" value="male" required data-parsley-errors-container="#error-radio">
                            <span><i></i>Married</span>
                        </label>
                        <label class="fancy-radio">
                            <input type="radio" name="gender" value="female">
                            <span><i></i>Unmarried</span>
                        </label>
                        @error('radio')
                        <p class="text-danger"> {{ $message }}</p>
                        @enderror                    </div>
                    <div class="form-group">
                        <label>Nationality</label>
                        <input name="nationality" type="text" class="form-control" >
                        @error('nationality')
                        <p class="text-danger"> {{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Date Of Birth</label>
                        <input type="date" id="dob" name="dob">
                        @error('dob')
                        <p class="text-danger"> {{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Phone</label>
                        <input type="text" id="phone" name="phone">
                        @error('phone')
                        <p class="text-danger"> {{ $message }}</p>
                        @enderror
                    </div>





                    {{--                    <div class="form-group">--}}
{{--                        <div class="row clearfix">--}}
{{--                            <div class="col-lg-6 col-md-12">--}}
{{--                                <label>Checkbox</label>--}}
{{--                                <br/>--}}
{{--                                <label class="fancy-checkbox">--}}
{{--                                    <input type="checkbox" name="checkbox" required data-parsley-errors-container="#error-checkbox">--}}
{{--                                    <span>Option 1</span>--}}
{{--                                </label>--}}
{{--                                <label class="fancy-checkbox">--}}
{{--                                    <input type="checkbox" name="checkbox">--}}
{{--                                    <span>Option 2</span>--}}
{{--                                </label>--}}
{{--                                <label class="fancy-checkbox">--}}
{{--                                    <input type="checkbox" name="checkbox">--}}
{{--                                    <span>Option 3</span>--}}
{{--                                </label>--}}
{{--                                <p id="error-checkbox"></p>--}}
{{--                            </div>--}}

{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="form-group">--}}
{{--                        <label for="food">Multiselect</label>--}}
{{--                        <br/>--}}
{{--                        <div class="form-group">--}}
{{--                            <select id="food" name="food[]" class="multiselect multiselect-custom" multiple="multiple" data-parsley-required data-parsley-trigger-after-failure="change" data-parsley-errors-container="#error-multiselect">--}}
{{--                                <option value="cheese">Cheese</option>--}}
{{--                                <option value="tomatoes">Tomatoes</option>--}}
{{--                                <option value="mozarella">Mozzarella</option>--}}
{{--                                <option value="mushrooms">Mushrooms</option>--}}
{{--                                <option value="pepperoni">Pepperoni</option>--}}
{{--                                <option value="onions">Onions</option>--}}
{{--                            </select>--}}
{{--                        </div>--}}
{{--                        <p id="error-multiselect"></p>--}}
{{--                    </div>--}}
                    <br>
                    <button type="submit" class="btn btn-primary">Add</button>
                </form>
            </div>
        </div>
    </div>
    <!--
    <div class="col-md-12">
        <div class="card">
            <div class="header">
                <h2>Advanced Validation</h2>
            </div>
            <div class="body">
                <form id="advanced-form" data-parsley-validate novalidate>
                    <div class="form-group">
                        <label for="text-input1">Min. 8 Characters</label>
                        <input type="text" id="text-input1" class="form-control" required data-parsley-minlength="8">
                    </div>
                    <div class="form-group">
                        <label for="text-input2">Between 5-10 Characters</label>
                        <input type="text" id="text-input2" class="form-control" required data-parsley-length="[5,10]">
                    </div>
                    <div class="form-group">
                        <label for="text-input3">Min. Number ( >= 5 )</label>
                        <input type="text" id="text-input3" class="form-control" required data-parsley-min="5">
                    </div>
                    <div class="form-group">
                        <label for="text-input4">Between 20-30</label>
                        <input type="text" id="text-input4" class="form-control" required data-parsley-range="[20,30]">
                    </div>
                    <div class="form-group">
                        <div class="row clearfix">
                            <div class="col-lg-6 col-md-12">
                                <label>Select Min. 2 Options</label>
                                <br />
                                <label class="control-inline fancy-checkbox">
                                    <input type="checkbox" name="checkbox2" required data-parsley-mincheck="2" data-parsley-errors-container="#error-checkbox2">
                                    <span>Option 1</span>
                                </label>
                                <label class="control-inline fancy-checkbox">
                                    <input type="checkbox" name="checkbox2">
                                    <span>Option 2</span>
                                </label>
                                <label class="control-inline fancy-checkbox">
                                    <input type="checkbox" name="checkbox2">
                                    <span>Option 3</span>
                                </label>
                                <p id="error-checkbox2"></p>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <label>Select Between 1-2 Options</label>
                                <br />
                                <label class="control-inline fancy-checkbox">
                                    <input type="checkbox" name="checkbox3" required data-parsley-check="[1,2]" data-parsley-errors-container="#error-checkbox3">
                                    <span>Option 1</span>
                                </label>
                                <label class="control-inline fancy-checkbox">
                                    <input type="checkbox" name="checkbox3">
                                    <span>Option 2</span>
                                </label>
                                <label class="control-inline fancy-checkbox">
                                    <input type="checkbox" name="checkbox3">
                                    <span>Option 3</span>
                                </label>
                                <p id="error-checkbox3"></p>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Validate</button>
                </form>
            </div>
        </div>
    </div>
    -->
</div>

@endsection

@section('PageJS')

<script src="{{ asset('backend/assets/vendor/bootstrap-multiselect/bootstrap-multiselect.js') }}"></script>
<script src="{{ asset('backend/assets/vendor/parsleyjs/js/parsley.min.js') }}"></script>
    <script>
        $(function() {
            // validation needs name of the element
            $('#food').multiselect();

            // initialize after multiselect
            $('#basic-form').parsley();
        });
    </script>
@endsection
