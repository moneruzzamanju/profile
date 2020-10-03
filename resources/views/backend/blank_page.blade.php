@extends('backend.layout.master')

@section('MainSection')

<div class="block-header">
    <div class="row clearfix">
        <div class="col-md-6 col-sm-12">
            <h2>Stater Page</h2>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Stater Page</li>
                </ol>
            </nav>
        </div>
        <div class="col-md-6 col-sm-12 text-right hidden-xs">
            <a href="javascript:void(0);" class="btn btn-sm btn-primary btn-round" title="">Add New</a>
        </div>
    </div>
</div>   <!-- Block Header with Breadcrumb -->

<div class="row clearfix">
    <div class="col-lg-12 col-md-12">
        <div class="card planned_task">
            <div class="header">
                <h2>Stater Page</h2>
                <ul class="header-dropdown dropdown">
                    <li><a href="javascript:void(0);" class="full-screen"><i class="icon-frame"></i></a></li>
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></a>
                        <ul class="dropdown-menu">
                            <li><a href="javascript:void(0);">Action</a></li>
                            <li><a href="javascript:void(0);">Another Action</a></li>
                            <li><a href="javascript:void(0);">Something else</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="body">
                <h4>Stater Page</h4>
            </div>
        </div>
    </div>

</div>

@endsection
