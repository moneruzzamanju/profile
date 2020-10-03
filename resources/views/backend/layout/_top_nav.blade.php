<nav class="navbar top-navbar">
    <div class="container-fluid">

        <div class="navbar-left">
            <div class="navbar-btn">
                <a href="index.html"><img src="{{ asset('backend/assets/images/icon.svg') }}" alt="Oculux Logo" class="img-fluid logo"></a>
                <button type="button" class="btn-toggle-offcanvas"><i class="lnr lnr-menu fa fa-bars"></i></button>
            </div>
            <ul class="nav navbar-nav">
                <li class="dropdown">
                    <a href="javascript:void(0);" class="dropdown-toggle icon-menu" data-toggle="dropdown">
                        <i class="icon-envelope"></i>
                        <span class="notification-dot bg-green">4</span>
                    </a>
                    <ul class="dropdown-menu right_chat email vivify fadeIn">
                        <li class="header green">You have 4 New eMail</li>
                        <li>
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <div class="avtar-pic w35 bg-red"><span>FC</span></div>
                                    <div class="media-body">
                                        <span class="name">James Wert <small class="float-right text-muted">Just now</small></span>
                                        <span class="message">Update GitHub</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <div class="avtar-pic w35 bg-indigo"><span>FC</span></div>
                                    <div class="media-body">
                                        <span class="name">Folisise Chosielie <small class="float-right text-muted">12min ago</small></span>
                                        <span class="message">New Messages</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <img class="media-object " src="../assets/images/xs/avatar5.jpg" alt="">
                                    <div class="media-body">
                                        <span class="name">Louis Henry <small class="float-right text-muted">38min ago</small></span>
                                        <span class="message">Design bug fix</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);">
                                <div class="media mb-0">
                                    <img class="media-object " src="../assets/images/xs/avatar2.jpg" alt="">
                                    <div class="media-body">
                                        <span class="name">Debra Stewart <small class="float-right text-muted">2hr ago</small></span>
                                        <span class="message">Fix Bug</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="javascript:void(0);" class="dropdown-toggle icon-menu" data-toggle="dropdown">
                        <i class="icon-bell"></i>
                        <span class="notification-dot bg-azura">4</span>
                    </a>
                    <ul class="dropdown-menu feeds_widget vivify fadeIn">
                        <li class="header blue">You have 4 New Notifications</li>
                        <li>
                            <a href="javascript:void(0);">
                                <div class="feeds-left bg-red"><i class="fa fa-check"></i></div>
                                <div class="feeds-body">
                                    <h4 class="title text-danger">Issue Fixed <small class="float-right text-muted">9:10 AM</small></h4>
                                    <small>WE have fix all Design bug with Responsive</small>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);">
                                <div class="feeds-left bg-info"><i class="fa fa-user"></i></div>
                                <div class="feeds-body">
                                    <h4 class="title text-info">New User <small class="float-right text-muted">9:15 AM</small></h4>
                                    <small>I feel great! Thanks team</small>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);">
                                <div class="feeds-left bg-orange"><i class="fa fa-question-circle"></i></div>
                                <div class="feeds-body">
                                    <h4 class="title text-warning">Server Warning <small class="float-right text-muted">9:17 AM</small></h4>
                                    <small>Your connection is not private</small>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);">
                                <div class="feeds-left bg-green"><i class="fa fa-thumbs-o-up"></i></div>
                                <div class="feeds-body">
                                    <h4 class="title text-success">2 New Feedback <small class="float-right text-muted">9:22 AM</small></h4>
                                    <small>It will give a smart finishing to your site</small>
                                </div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown language-menu">
                    <a href="javascript:void(0);" class="dropdown-toggle icon-menu" data-toggle="dropdown">
                        <i class="fa fa-language"></i>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item pt-2 pb-2" href="#"><img src="../assets/images/flag/us.svg " class="w20 mr-2 rounded-circle"> US English</a>
                        <a class="dropdown-item pt-2 pb-2" href="#"><img src="../assets/images/flag/gb.svg " class="w20 mr-2 rounded-circle"> UK English</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item pt-2 pb-2" href="#"><img src="../assets/images/flag/russia.svg " class="w20 mr-2 rounded-circle"> Russian</a>
                        <a class="dropdown-item pt-2 pb-2" href="#"><img src="../assets/images/flag/arabia.svg " class="w20 mr-2 rounded-circle"> Arabic</a>
                        <a class="dropdown-item pt-2 pb-2" href="#"><img src="../assets/images/flag/france.svg " class="w20 mr-2 rounded-circle"> French</a>
                    </div>
                </li>
                <li><a href="javascript:void(0);" class="megamenu_toggle icon-menu" title="Mega Menu">Mega</a></li>
                <li class="p_social"><a href="page-social.html" class="social icon-menu" title="News">Social</a></li>
                <li class="p_news"><a href="page-news.html" class="news icon-menu" title="News">News</a></li>
                <li class="p_blog"><a href="page-blog.html" class="blog icon-menu" title="Blog">Blog</a></li>
            </ul>
        </div>

        <div class="navbar-right">
            <div id="navbar-menu">
                <ul class="nav navbar-nav">
                    <li><a href="javascript:void(0);" class="search_toggle icon-menu" title="Search Result"><i class="icon-magnifier"></i></a></li>
                    <li><a href="javascript:void(0);" class="right_toggle icon-menu" title="Right Menu"><i class="icon-bubbles"></i><span class="notification-dot bg-pink">2</span></a></li>
                    <li><a href="page-login.html" class="icon-menu"><i class="icon-power"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="progress-container"><div class="progress-bar" id="myBar"></div></div>
</nav>

<div class="search_div">
    <div class="card">
        <div class="body">
            <form id="navbar-search" class="navbar-form search-form">
                <div class="input-group mb-0">
                    <input type="text" class="form-control" placeholder="Search...">
                    <div class="input-group-append">
                        <span class="input-group-text"><i class="icon-magnifier"></i></span>
                        <a href="javascript:void(0);" class="search_toggle btn btn-danger"><i class="icon-close"></i></a>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <span>Search Result <small class="float-right text-muted">About 90 results (0.47 seconds)</small></span>
    <div class="table-responsive">
        <table class="table table-hover table-custom spacing5">
            <tbody>
            <tr>
                <td class="w40">
                    <span>01</span>
                </td>
                <td>
                    <div class="d-flex align-items-center">
                        <div class="avtar-pic w35 bg-red" data-toggle="tooltip" data-placement="top" title="" data-original-title="Avatar Name"><span>SS</span></div>
                        <div class="ml-3">
                            <a href="page-invoices-detail.html" title="">South Shyanne</a>
                            <p class="mb-0">south.shyanne@example.com</p>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <span>02</span>
                </td>
                <td>
                    <div class="d-flex align-items-center">
                        <img src="../assets/images/xs/avatar2.jpg" data-toggle="tooltip" data-placement="top" title="" alt="Avatar" class="w35 h35 rounded" data-original-title="Avatar Name">
                        <div class="ml-3">
                            <a href="javascript:void(0);" title="">Zoe Baker</a>
                            <p class="mb-0">zoe.baker@example.com</p>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <span>03</span>
                </td>
                <td>
                    <div class="d-flex align-items-center">
                        <div class="avtar-pic w35 bg-indigo" data-toggle="tooltip" data-placement="top" title="" data-original-title="Avatar Name"><span>CB</span></div>
                        <div class="ml-3">
                            <a href="javascript:void(0);" title="">Colin Brown</a>
                            <p class="mb-0">colinbrown@example.com</p>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <span>04</span>
                </td>
                <td>
                    <div class="d-flex align-items-center">
                        <div class="avtar-pic w35 bg-green" data-toggle="tooltip" data-placement="top" title="" data-original-title="Avatar Name"><span>KG</span></div>
                        <div class="ml-3">
                            <a href="javascript:void(0);" title="">Kevin Gill</a>
                            <p class="mb-0">kevin.gill@example.com</p>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <span>05</span>
                </td>
                <td>
                    <div class="d-flex align-items-center">
                        <img src="../assets/images/xs/avatar5.jpg" data-toggle="tooltip" data-placement="top" title="" alt="Avatar" class="w35 h35 rounded" data-original-title="Avatar Name">
                        <div class="ml-3">
                            <a href="javascript:void(0);" title="">Brandon Smith</a>
                            <p class="mb-0">Maria.gill@example.com</p>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <span>06</span>
                </td>
                <td>
                    <div class="d-flex align-items-center">
                        <img src="../assets/images/xs/avatar6.jpg" data-toggle="tooltip" data-placement="top" title="" alt="Avatar" class="w35 h35 rounded" data-original-title="Avatar Name">
                        <div class="ml-3">
                            <a href="javascript:void(0);" title="">Kevin Baker</a>
                            <p class="mb-0">kevin.baker@example.com</p>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <span>07</span>
                </td>
                <td>
                    <div class="d-flex align-items-center">
                        <img src="../assets/images/xs/avatar2.jpg" data-toggle="tooltip" data-placement="top" title="" alt="Avatar" class="w35 h35 rounded" data-original-title="Avatar Name">
                        <div class="ml-3">
                            <a href="javascript:void(0);" title="">Zoe Baker</a>
                            <p class="mb-0">zoe.baker@example.com</p>
                        </div>
                    </div>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</div>

<div id="megamenu" class="megamenu particles_js">
    <a href="javascript:void(0);" class="megamenu_toggle btn btn-danger"><i class="icon-close"></i></a>
    <div class="container">
        <div class="row clearfix">
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="mega-card">
                    <h6 class="title">General Settings</h6>
                    <ul class="setting-list list-unstyled mb-0">
                        <li>
                            <label class="switch">
                                <input type="checkbox">
                                <span class="slider round"></span>
                            </label>
                            <span>Anyone follow me</span>
                        </li>
                        <li>
                            <label class="switch">
                                <input type="checkbox" checked>
                                <span class="slider round"></span>
                            </label>
                            <span>Email Redirect</span>
                        </li>
                        <li>
                            <label class="switch">
                                <input type="checkbox" checked>
                                <span class="slider round"></span>
                            </label>
                            <span>Notifications</span>
                        </li>
                        <li>
                            <label class="switch">
                                <input type="checkbox">
                                <span class="slider round"></span>
                            </label>
                            <span>Auto Updates</span>
                        </li>
                        <li>
                            <label class="switch">
                                <input type="checkbox" checked>
                                <span class="slider round"></span>
                            </label>
                            <span>Offline</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="mega-card">
                    <h6 class="title">Quick Link</h6>
                    <ul class="guick_link">
                        <li><a href="javascript:void(0);" title="">Home</a></li>
                        <li><a href="javascript:void(0);" title="">About Us</a></li>
                        <li><a href="javascript:void(0);" title="">FAQs</a></li>
                        <li><a href="javascript:void(0);" title="">Privacy Policy</a></li>
                        <li><a href="javascript:void(0);" title="">Sitemap</a></li>
                        <li><a href="javascript:void(0);" title="">Contact Us</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="mega-card">
                    <h6 class="title">Contact Us</h6>
                    <form>
                        <div class="input-group mb-2">
                            <input type="text" class="form-control" placeholder="Enter Name">
                        </div>
                        <div class="input-group mb-2">
                            <input type="text" class="form-control" placeholder="Enter Email">
                        </div>
                        <div class="input-group mb-2">
                            <textarea type="text" class="form-control" placeholder="Message" rows="2"></textarea>
                        </div>
                        <button type="button" class="btn btn-primary btn-round">Submit</button>
                    </form>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="mega-card">
                    <h6 class="title">Image Gallery</h6>
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="../assets/images/image-gallery/7.jpg" alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="../assets/images/image-gallery/8.jpg" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="../assets/images/image-gallery/9.jpg" alt="Third slide">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="card mt-4">
                <div class="header">
                    <h2>FAQs</h2>
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
                    <div class="accordion" id="accordion-faqs">
                        <div>
                            <div class="card-header" id="headingOne">
                                <h5 class="mb-0">
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne-faqs" aria-expanded="true" aria-controls="collapseOne">
                                        Q: How to use SCSS variables to build custom color <span class="float-right badge  badge-primary">23</span>
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseOne-faqs" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion-faqs">
                                <div class="body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="card-header" id="headingTwo">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo-faqs" aria-expanded="false" aria-controls="collapseTwo">
                                        Q: Four questions to ask about your DevOps strategy <span class="float-right badge  badge-success">8</span>
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseTwo-faqs" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion-faqs">
                                <div class="body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="card-header" id="headingThree">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree-faqs" aria-expanded="false" aria-controls="collapseThree">
                                        Q: A comparison of microservices and functional programming concepts <span class="float-right badge  badge-danger">13</span>
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseThree-faqs" class="collapse" aria-labelledby="headingThree" data-parent="#accordion-faqs">
                                <div class="body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="particles-js"></div>
</div>

<div id="rightbar" class="rightbar">
    <div class="body">
        <ul class="nav nav-tabs2">
            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#Chat-one">Chat</a></li>
            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Chat-list">List</a></li>
            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Chat-groups">Groups</a></li>
        </ul>
        <hr>
        <div class="tab-content">
            <div class="tab-pane vivify fadeIn delay-100 active" id="Chat-one">
                <div class="slim_scroll">
                    <div class="chat_detail">
                        <ul class="chat-widget clearfix">
                            <li class="left float-left">
                                <div class="avtar-pic w35 bg-pink"><span>KG</span></div>
                                <div class="chat-info">
                                    <span class="message">Hello, John<br>What is the update on Project X?</span>
                                </div>
                            </li>
                            <li class="right">
                                <img src="../assets/images/xs/avatar1.jpg" class="rounded" alt="">
                                <div class="chat-info">
                                    <span class="message">Hi, Alizee<br> It is almost completed. I will send you an email later today.</span>
                                </div>
                            </li>
                            <li class="left float-left">
                                <div class="avtar-pic w35 bg-pink"><span>KG</span></div>
                                <div class="chat-info">
                                    <span class="message">That's great. Will catch you in evening.</span>
                                </div>
                            </li>
                            <li class="right">
                                <img src="../assets/images/xs/avatar1.jpg" class="rounded" alt="">
                                <div class="chat-info">
                                    <span class="message">Sure we'will have a blast today.</span>
                                </div>
                            </li>
                        </ul>
                        <div class="input-group p-t-15">
                            <textarea rows="3" class="form-control" placeholder="Enter text here..."></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane vvivify fadeIn delay-100" id="Chat-list">
                <ul class="right_chat list-unstyled mb-0">
                    <li class="offline">
                        <a href="javascript:void(0);">
                            <div class="media">
                                <div class="avtar-pic w35 bg-red"><span>FC</span></div>
                                <div class="media-body">
                                    <span class="name">Folisise Chosielie</span>
                                    <span class="message">offline</span>
                                    <span class="badge badge-outline status"></span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="online">
                        <a href="javascript:void(0);">
                            <div class="media">
                                <img class="media-object " src="../assets/images/xs/avatar3.jpg" alt="">
                                <div class="media-body">
                                    <span class="name">Marshall Nichols</span>
                                    <span class="message">online</span>
                                    <span class="badge badge-outline status"></span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="online">
                        <a href="javascript:void(0);">
                            <div class="media">
                                <div class="avtar-pic w35 bg-red"><span>FC</span></div>
                                <div class="media-body">
                                    <span class="name">Louis Henry</span>
                                    <span class="message">online</span>
                                    <span class="badge badge-outline status"></span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="online">
                        <a href="javascript:void(0);">
                            <div class="media">
                                <div class="avtar-pic w35 bg-orange"><span>DS</span></div>
                                <div class="media-body">
                                    <span class="name">Debra Stewart</span>
                                    <span class="message">online</span>
                                    <span class="badge badge-outline status"></span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="offline">
                        <a href="javascript:void(0);">
                            <div class="media">
                                <div class="avtar-pic w35 bg-green"><span>SW</span></div>
                                <div class="media-body">
                                    <span class="name">Lisa Garett</span>
                                    <span class="message">offline since May 12</span>
                                    <span class="badge badge-outline status"></span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="online">
                        <a href="javascript:void(0);">
                            <div class="media">
                                <img class="media-object " src="../assets/images/xs/avatar5.jpg" alt="">
                                <div class="media-body">
                                    <span class="name">Debra Stewart</span>
                                    <span class="message">online</span>
                                    <span class="badge badge-outline status"></span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="offline">
                        <a href="javascript:void(0);">
                            <div class="media">
                                <img class="media-object " src="../assets/images/xs/avatar2.jpg" alt="">
                                <div class="media-body">
                                    <span class="name">Lisa Garett</span>
                                    <span class="message">offline since Jan 18</span>
                                    <span class="badge badge-outline status"></span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="online">
                        <a href="javascript:void(0);">
                            <div class="media">
                                <div class="avtar-pic w35 bg-indigo"><span>FC</span></div>
                                <div class="media-body">
                                    <span class="name">Louis Henry</span>
                                    <span class="message">online</span>
                                    <span class="badge badge-outline status"></span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="online">
                        <a href="javascript:void(0);">
                            <div class="media">
                                <div class="avtar-pic w35 bg-pink"><span>DS</span></div>
                                <div class="media-body">
                                    <span class="name">Debra Stewart</span>
                                    <span class="message">online</span>
                                    <span class="badge badge-outline status"></span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="offline">
                        <a href="javascript:void(0);">
                            <div class="media">
                                <div class="avtar-pic w35 bg-info"><span>SW</span></div>
                                <div class="media-body">
                                    <span class="name">Lisa Garett</span>
                                    <span class="message">offline since May 12</span>
                                    <span class="badge badge-outline status"></span>
                                </div>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="tab-pane vivify fadeIn delay-100" id="Chat-groups">
                <ul class="right_chat list-unstyled mb-0">
                    <li class="offline">
                        <a href="javascript:void(0);">
                            <div class="media">
                                <div class="avtar-pic w35 bg-cyan"><span>DT</span></div>
                                <div class="media-body">
                                    <span class="name">Designer Team</span>
                                    <span class="message">offline</span>
                                    <span class="badge badge-outline status"></span>
                                </div>
                            </div>
                        </a>
                    <li class="online">
                        <a href="javascript:void(0);">
                            <div class="media">
                                <div class="avtar-pic w35 bg-azura"><span>SG</span></div>
                                <div class="media-body">
                                    <span class="name">Sale Groups</span>
                                    <span class="message">online</span>
                                    <span class="badge badge-outline status"></span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="online">
                        <a href="javascript:void(0);">
                            <div class="media">
                                <div class="avtar-pic w35 bg-orange"><span>NF</span></div>
                                <div class="media-body">
                                    <span class="name">New Fresher</span>
                                    <span class="message">online</span>
                                    <span class="badge badge-outline status"></span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="offline">
                        <a href="javascript:void(0);">
                            <div class="media">
                                <div class="avtar-pic w35 bg-indigo"><span>PL</span></div>
                                <div class="media-body">
                                    <span class="name">Project Lead</span>
                                    <span class="message">offline since May 12</span>
                                    <span class="badge badge-outline status"></span>
                                </div>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
