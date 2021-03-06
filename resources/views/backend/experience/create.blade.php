@extends('backend.layout.master')

@section('PageCSS')
    <link rel="stylesheet" href="{{ asset('backend/assets/vendor/bootstrap-multiselect/bootstrap-multiselect.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets/vendor/parsleyjs/css/parsley.css') }}">
@endsection

@section('MainSection')
    <div class="block-header">
        <div class="row clearfix">
            <div class="col-md-6 col-sm-12">
                <h1>Experience</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Experience</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Add New Experience</li>
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
                    <form id="basic-form" method="post" action="{{ route('experience.store') }}" novalidate enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Company Name</label>
                            <input name="companyName" type="text" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Company Location</label>
                            <input name="companyLocation" type="text" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Designation</label>
                            <input name="designation" type="text" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Job Description</label>
                            <input name="job_description" type="text" class="form-control" required>
                        </div>

                        <!--
                        <div class="form-group">
                            <div class="row clearfix">
                                <div class="col-lg-6 col-md-12">
                                    <label>Checkbox</label>
                                    <br/>
                                    <label class="fancy-checkbox">
                                        <input type="checkbox" name="checkbox"  data-parsley-errors-container="#error-checkbox">
                                        <span>Option 1</span>
                                    </label>
                                    <label class="fancy-checkbox">
                                        <input type="checkbox" name="checkbox">
                                        <span>Option 2</span>
                                    </label>
                                    <label class="fancy-checkbox">
                                        <input type="checkbox" name="checkbox">
                                        <span>Option 3</span>
                                    </label>
                                    <p id="error-checkbox"></p>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <label>Radio Button</label>
                                    <br />
                                    <label class="fancy-radio">
                                        <input type="radio" name="gender" value="male" required data-parsley-errors-container="#error-radio">
                                        <span><i></i>Male</span>
                                    </label>
                                    <label class="fancy-radio">
                                        <input type="radio" name="gender" value="female">
                                        <span><i></i>Female</span>
                                    </label>
                                    <p id="error-radio"></p>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="food">Multiselect</label>
                            <br/>
                            <div class="form-group">
                                <select id="food" name="food[]" class="multiselect multiselect-custom" multiple="multiple" data-parsley-required data-parsley-trigger-after-failure="change" data-parsley-errors-container="#error-multiselect">
                                    <option value="cheese">Cheese</option>
                                    <option value="tomatoes">Tomatoes</option>
                                    <option value="mozarella">Mozzarella</option>
                                    <option value="mushrooms">Mushrooms</option>
                                    <option value="pepperoni">Pepperoni</option>
                                    <option value="onions">Onions</option>
                                </select>
                            </div>
                            <p id="error-multiselect"></p>
                        </div>
                        -->
                        <br>
                        <button type="submit" class="btn btn-primary">Add Experience</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('PageJS')
    <script src="{{ asset('backend/assets/vendor/bootstrap-multiselect/bootstrap-multiselect.js') }}"></script>
    <script src="{{ asset('backend/assets/vendor/parsleyjs/js/parsley.min.js') }}"></script>
@endsection

@section('pageScript')
    <script>
        $(function() {
            // validation needs name of the element
            $('#food').multiselect();

            // initialize after multiselect
            $('#basic-form').parsley();
        });
    </script>
@endsection

