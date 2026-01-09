<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>API DOCS</title>
     <link rel="shortcut icon" href="{{ url('public/assets/img/favicon.png')}}" type="image/x-icon">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="{{ url('public/assets/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{ url('public/assets/css/style.css')}}">
<link rel="stylesheet" href="{{ url('public/assets/css/responsive.css')}}">
    <style>
        header {
            width: 100% !important;
            background: #180054 !important;
            transition: all 0.1s ease-in-out !important;
            position: relative !important;
        }

        .header_logo_div {
            display: flex;
            align-items: center;
        }

        body.no-scroll {
            overflow: hidden;
        }
    </style>
</head>

<body>
    <!-- Header Section Start -->

    <header class="header">
        <div class="container">
            <nav class="navbar navbar-expand-lg">
                <div class="header_logo_div">
                    <a class="navbar-brand" href="#">
                        <img src="{{ url('public/assets/img/Logo.svg')}}" alt="logo" class="img-fluid">
                    </a>

                    <a class="navbar-brand" href="#">
                        <a href="#" class="sidebar_menu_toggle"><img src="{{ url('public/assets/img/sidebar-menu-bar.png')}}"
                                alt="sidebar-menu-bar" class="img-fluid"></a>
                </div>

                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                       <li class="nav-item ">
                            <a class="nav-link" href="{{url('/')}}">Home</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="{{url('/')}}#features">FEATURES</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/')}}#download">DOWNLOAD</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="{{url('/api-doc')}}">API DOCS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link landing_login_btn" href="{{url('login')}}">LOGIN</a>
                        </li>

                        <li class="nav-item dropdown">
                            <div class="drodwn_flg">
                                <div class="dropdown">
                                    <button class="btn dropdown-toggle" type="button" data-toggle="dropdown"
                                        aria-expanded="false">
                                        <img src="{{ url('public/assets/img/UK-Flag.svg')}}" alt="UK-Flag" class="img-fluid">
                                        <span class="pl-2">United States</span>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="en-us/index.html"><img
                                                src="{{ url('public/assets/img/UK-Flag.svg')}}" alt="UK-Flag"
                                                class="img-fluid"><span>United States</span></a>
                                        <a class="dropdown-item" href="en-au/index.html"><img
                                                src="{{ url('public/assets/img/australia-flag.png')}}" alt="australia-flag"
                                                class="img-fluid"><span>Australia</span></a>
                                        <a class="dropdown-item" href="en-ca/index.html"><img
                                                src="{{ url('public/assets/img/canada-flag.png')}}" alt="canada-flag"
                                                class="img-fluid"><span>Canada</span></a>

                                        <a class="dropdown-item" href="en-gb/index.html"><img
                                                src="{{ url('public/assets/img/united-kingdom-flag.png')}}" alt="united-kingdom-flag"
                                                class="img-fluid"><span>Great
                                                Britain</span></a>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>

                </div>
            </nav>
        </div>
    </header>
    <!-- Header Section End -->
    <!-- API DOCS Section Start -->
    <div class="api_main_wrapper">
        <div class="api_sub_wrapper">
            <div class="api_left_slidebar">
                <div class="api_key_slidebar_form">
                    <div class="slidebar_form_input">
                        <input type="text" placeholder="Search API" data-toggle="modal" data-target="#exampleModal">
                        <a href="#"><i class="fa fa-search"></i></a>
                    </div>
                    <div class="slidebar_chats_show">
                        <button onclick="openApiAssistant()"><img src="{{ url('public/assets/img/chat-icon.svg')}}" alt="chat-icon" class="img-fluid"></button>
                        <div id="blurOverlay"></div>
                    </div>
                    <a href="#" class="sidebar_close"><i class="fa fa-times"></i></a>
                </div>
                <!-- ****** -->
                <div class="api_left_slidebar_ttl">
                    <h4>Online payments</h4>
                </div>
                <!-- <div class="menu menu_border"> -->
                <div class="menu ">
                    <div class="item">
                        <a class="sub-btn">
                            <i class="fas fa-table"></i><span class="drop_span_active">Category</span><i
                                class="fa fa-angle-right dropdown"></i></a>
                        <div class="sub-menu">
                            <a href="#" class="sub-item ">Category list</a>
                        </div>

                    </div>

                    <div class="item">
                        <a class="sub-btn">
                            <i class="fas fa-table"></i><span class="drop_span_active">Offer</span><i
                                class="fa fa-angle-right dropdown"></i></a>
                        <div class="sub-menu">
                            <a href="#" class="sub-item" id="createOfferBtn">Create Offer</a>
                            <a href="#" class="sub-item" id="createOfferBtn1">Edit Offer</a>
                            <a href="#" class="sub-item" id="createOfferBtn2">View Offer</a>
                            <a href="#" class="sub-item" id="createOfferBtn3">Pause and Resume Offer</a>
                            <a href="#" class="sub-item" id="createOfferBtn4">Delete Offer</a>
                        </div>
                    </div>
                </div>

                <div class="menu">

                </div>
                <!-- ****** -->
            </div>
            <div class="api_rihgt_slidebar " id="createOfferSection">
                <div class="api_rihgt_slidebar-ttl">
                    <h2>Category List</h2>

                </div>

                <div class="row">

                    <div class="col-12 col-sm-12 col-md-6">
                        <div>
                            <p style="margin-top: 10px;">The Category List API allows you to fetch all  active categories <br/> that belong to the organisation of the API key owner.This API <br/> is typically used before creating an offer, because offer creation <br/> requires a valid category ID returned by this endpoint.</p>
                            <h6>header : { x-api-key } </h6>
                        </div>
                        <div class="api_rihgt_slidebar_lft ">
                            <h6 style="margin-top: 20px;">Parameters</h6>
                        </div>
                        <div class="api_rihgt_slidebar_lft">
                            <h4> Category ID <span class="span_muted">string, mandatory</span></h4>
                           <!-- <p> "Offer Category ID" : "1"</p> -->
                            <h6>This is the unique ID of the category selected from the Category List API.The category of the offer. Example: <span class="span_highlight">"1"</span>
                            </h6>
                        </div>
                        <div class="api_rihgt_slidebar_lft">
                            <h4> Category name <span class="span_muted">string, mandatory</span></h4>

                            <h6>It must match the category name shown in the Category List. Example: <span class="span_highlight">"summer sale"</span>
                            </h6>
                        </div>

                    </div>

                    <div class="col-12 col-sm-12 col-md-6">
                        <!-- *********** -->
                        <!-- Header1 -->
                        <div class="header-api">
                            <div class="header-api-left"><span class="span_green pr-3">GET </span><span>
                                    /v1/customers</span></div>
                            <div class="header-api-right">
                                <select id="langSelector" class="mr-3">
                                    <option value="python">Python</option>
                                    <option value="node">Node.js</option>
                                    <option value="php">PHP</option>
                                </select>
                                <a href="#" id="api_copy_btn"><i class="fa fa-clone"></i></a>
                            </div>
                        </div>

                        <!-- Request Box -->
                        <div class="request-box " id="requestBox">
                            1 &nbsp; <span class="highlist-gulabi"> import</span> requests
                            2 &nbsp; url = <span class="highlist-gulabi">"https://api.example.com/v1/offers"</span>
                            3 &nbsp; headers = {"Authorization": <span
                                class="highlist-gulabi">"x-api-key "</span>}
                            4 &nbsp; $category = Category::create([
                            5&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"Category ID"=> <span
                                class="highlist-gulabi">"1"</span>,
                            6&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"Category Name"=> <span
                                class="highlist-gulabi">"summer sale"</span>,])


                        </div>

                        <!-- Response Box -->
                        <div class="response-box">
                            <div class="response-title" id="responseTitle">
                                <span>Response (Python)</span>
                                <a href="#" id="ResponeCopyBtn"><i class="fa fa-clone"></i></a>
                            </div>

                            <div class="response-content pt-0" id="responseContent">
                                {
                                    "id": <span class='highlight'>"1"</span>,
                                    "name":<span class='highlight'> "summer sale"</span>,

                                  }



                            </div>
                        </div>
                        <!-- *********** -->
                    </div>

                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="api_rihgt_slidebar_lft" >

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-6">
                        <div class="api_rihgt_slidebar-ttl " id="createOfferSectionid">

                            <h2>Create Offer</h2>
                        </div>
                        <div class="api_rihgt_slidebar_lft">
                            <div>
                                <p>This field contains the details required to create a new offer in the system.It allows businesses to define the offer's title, description, validity, terms, image, and other essential information.</p>
                                <h6>header : { x-api-key } </h6>
                            </div>
                            <h6>Parameters</h6>
                        </div>
                        <div class="api_rihgt_slidebar_lft mt-3">
                            <h4>Offer Category ID <span class="span_muted">string, mandatory</span></h4>
                            <h6>The Offer Category ID uniquely identifies which category the offer belongs to.It links the offer to the correct category in your backend system. Example: <span class="span_highlight">"2"</span>
                            </h6>
                        </div>

                        <div class="api_rihgt_slidebar_lft mt-2">
                            <h4>Offer Title <span class="span_muted">string, mandatory</span></h4>
                            <h6>The Offer Title is a short, clear, and attention-grabbing headline that summarises the main benefit of the offer.The title of your offer. Example: <span class="span_highlight">"20% off summer sale"</span></h6>
                        </div>

                        <div class="api_rihgt_slidebar_lft mt-2">
                            <h4>Offer Description <span class="span_muted">string, mandatory</span></h4>
                            <h6>A well-written description helps users understand the full value of the offer and encourages them to take action.Discount valid through July</h6>
                            <h6>Example: <span class="span_highlight">“https://advertiseroffer.com"</span></h6>
                        </div>

                        <div class="api_rihgt_slidebar_lft mt-2">
                            <h4>Offer URL <span class="span_muted">string, mandatory</span></h4>
                            <h6>This link can point to your website, landing page, or any promotional page related to the offer.A link where users can view the offer.</h6>
                            <h6>Example: <span class="span_highlight">"https://example.com/offer"</span></h6>
                        </div>

                        <div class="api_rihgt_slidebar_lft mt-2">
                            <h4>Offer Image <span class="span_muted">string, mandatory</span></h4>
                            <h6>The Offer Image visually represents the offer and helps attract user attention.An image representing the offer. Recommended size: <span
                                    class="span_highlight">"1080x1080px"</span></h6>
                        </div>

                        <div class="api_rihgt_slidebar_lft mt-2">
                            <h4>Offer Location <span class="span_muted">string, mandatory</span></h4>
                            <h6>This field specifies the primary target location where the offer is applicable.Target location for the offer. Example:<span class="span_highlight">"New York"</span>
                            </h6>
                        </div>

                        <div class="api_rihgt_slidebar_lft mt-2">
                            <h4>Offer Location radius in miles. <span class="span_muted">string, mandatory</span></h4>
                            <h6>The radius defines how far from the specified location the offer remains valid or visible.Radius in miles around the target location. Example: <span
                                    class="span_highlight">"10"</span></h6>
                        </div>

                        <div class="api_rihgt_slidebar_lft mt-2">
                            <h4>Offer Start Date & UTC Time <span class="span_muted">string, mandatory</span></h4>
                            <h6>This indicates when the offer becomes active and visible to users. <span
                                    class="span_highlight">"YYYY-MM-DD"</span></h6>
                        </div>

                        <div class="api_rihgt_slidebar_lft mt-2">
                            <h4>Offer Expiry Date & UTC Time <span class="span_muted">string, optional</span></h4>
                            <h6>This defines when the offer automatically ends or becomes unavailable.<span class="span_highlight">"HH:mm"</span>
                            </h6>
                        </div>

                        <div class="api_rihgt_slidebar_lft mt-2">
                            <h4>Offer Terms & Conditions <span class="span_muted">string, optional</span></h4>
                            <h6>It helps users understand the boundaries of the offer, such as refund policies, usage limits, or eligibility criteria.This offer only applies to purchases through our website.</h6>
                        </div>

                    </div>

                    <div class="col-12 col-sm-12 col-md-6">
                        <!-- Header2 -->
                        <div class="header-apis">
                            <div><span class="span_green pr-3">POST </span><span> /v1/customers</span></div>
                            <div class="header-api-right">
                                <select id="langSelectors" class="mr-3">
                                    <option value="python">Python</option>
                                    <option value="node">Node.js</option>
                                    <option value="php">PHP</option>
                                </select>
                                <a href="#" id="ResponeCopyBtnone"><i class="fa fa-clone"></i></a>
                            </div>
                        </div>

                        <!-- Request Box -->
                        <div class="request-box" id="requestBoxs">
                            1 &nbsp; <span class="highlist-gulabi"> import</span> requests
                            2 &nbsp; url = <span class="highlist-gulabi">"https://api.example.com/v1/offers"</span>
                            3 &nbsp; headers = {"Authorization": <span
                                class="highlist-gulabi">"x-api-key "</span>}
                            4 &nbsp; payload = {
                            5&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"Offer Category ID":<span
                                class="highlist-gulabi">"1"</span>,
                            6&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"Offer Title":<span
                                class="highlist-gulabi">"20% off summer sale"</span>,
                            7&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"Offer Description":<span
                                class="highlist-gulabi">"Discount valid through July"</span>,
                            8&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"Offer URL":<span
                                class="highlist-gulabi">"https://advertiseroffer.com"</span>,
                            9&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"Offer Location as array containing latitude and longitude;":<span
                                class="highlist-gulabi">"[37.7749, -122.4194]"</span>,
                            10&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"Offer Expiry Date & UTC Time in ISO 8601 form":<span
                                class="highlist-gulabi">"2025-07-12T20:30:00Z"</span>,
                            11&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"Offer Start Date & UTC Time in ISO 8601 format":<span
                                class="highlist-gulabi">"2025-07-10T08:00:00Z"</span>,
                            12&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"Offer Terms & Conditions":<span
                                class="highlist-gulabi">"This offer only applies to purchases through our website."</span>,
                            13&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"radius":<span
                                class="highlist-gulabi">"10"</span>,
                            14&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}

                            15&nbsp;&nbsp;&nbsp;files = {
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"Offer Image":<span
                                class="highlist-gulabi">"@/path/to/image.jpg"</span>,
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
                            16&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"payment_method":<span
                            class="highlist-gulabi">"E"</span>,
                            17&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"environment":<span
                            class="highlist-gulabi">"TEST"</span>,



                        </div>

                        <!-- Response Box -->
                        <div class="response-box">
                            <div class="response-title" id="responseTitles">
                                <span>Response (Python)</span>
                                <a href="#" id="ResponeCopyBtntwo"><i class="fa fa-clone"></i></a>
                            </div>
                            <div class="response-content" id="responseContents">
                                {
                                    "title": <span class='highlight'>"20% off summer sale"</span>,
                                    "description":<span class='highlight'> "Discount valid through July"</span>,
                                    "terms_and_conditions": <span class='highlight'>"This offer only applies to purchases through our website."</span>
                                    "category_id": <span class='highlight'>1</span>,
                                    "image":<span class='highlight'> "@/path/to/image.jpg"</span>,
                                    "url": <span class='highlight'>"https://advertiseroffer.com"</span>
                                    "start_datetime":<span class='highlight'> "2025-07-10T08:00:00Z"</span>,
                                    "expiry_datetime": <span class='highlight'>"2025-07-12T20:30:00Z"</span>,
                                    "location":<span class='highlight'> [37.7749, -122.4194]</span>,
                                    "radius": <span class='highlight-red'>10</span>,
                                    "payment_method": <span class='highlight'>"E"</span>,
                                    "environment": <span class='highlight'>"TEST"</span>
                                }
                            </div>
                        </div>
                        <!-- *********** -->
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="api_rihgt_slidebar_lft" >

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-6">
                        <div class="api_rihgt_slidebar-ttl " id="editOfferSectionid">
                            <h2>Edit Offer</h2>
                        </div>
                        <div class="api_rihgt_slidebar_lft">
                            <div>
                                <h6>header : { x-api-key } </h6>
                            </div>
                            <h6>Parameters</h6>
                        </div>
                        <div class="api_rihgt_slidebar_lft mt-3">
                            <h4>Offer Category ID <span class="span_muted">string, mandatory</span></h4>
                            <h6>The category of the offer. Example: <span class="span_highlight">"2"</span>
                            </h6>
                        </div>

                        <div class="api_rihgt_slidebar_lft mt-2">
                            <h4>Offer Title <span class="span_muted">string, mandatory</span></h4>
                            <h6>The title of your offer. Example: <span class="span_highlight">"20% off summer sale"</span></h6>
                        </div>

                        <div class="api_rihgt_slidebar_lft mt-2">
                            <h4>Offer Description <span class="span_muted">string, mandatory</span></h4>
                            <h6>Discount valid through July</h6>
                            <h6>Example: <span class="span_highlight">“https://advertiseroffer.com"</span></h6>
                        </div>

                        <div class="api_rihgt_slidebar_lft mt-2">
                            <h4>Offer URL <span class="span_muted">string, mandatory</span></h4>
                            <h6>A link where users can view the offer.</h6>
                            <h6>Example: <span class="span_highlight">"https://example.com/offer"</span></h6>
                        </div>

                        <div class="api_rihgt_slidebar_lft mt-2">
                            <h4>Offer Image <span class="span_muted">string, mandatory</span></h4>
                            <h6>An image representing the offer. Recommended size: <span
                                    class="span_highlight">"1080x1080px"</span></h6>
                        </div>

                        <div class="api_rihgt_slidebar_lft mt-2">
                            <h4>Offer Location <span class="span_muted">string, mandatory</span></h4>
                            <h6>Target location for the offer. Example:<span class="span_highlight">"New York"</span>
                            </h6>
                        </div>

                        <div class="api_rihgt_slidebar_lft mt-2">
                            <h4>Offer Location radius in miles. <span class="span_muted">string, mandatory</span></h4>
                            <h6>Radius in miles around the target location. Example: <span
                                    class="span_highlight">"10"</span></h6>
                        </div>

                        <div class="api_rihgt_slidebar_lft mt-2">
                            <h4>Offer Start Date & UTC Time <span class="span_muted">string, mandatory</span></h4>
                            <h6>2025-07-10T08:00:00Z <span
                                    class="span_highlight">"YYYY-MM-DD"</span></h6>
                        </div>

                        <div class="api_rihgt_slidebar_lft mt-2">
                            <h4>Offer Expiry Date & UTC Time <span class="span_muted">string, optional</span></h4>
                            <h6>2025-07-12T20:30:00Z<span class="span_highlight">"HH:mm"</span>
                            </h6>
                        </div>

                        <div class="api_rihgt_slidebar_lft mt-2">
                            <h4>Offer Terms & Conditions <span class="span_muted">string, optional</span></h4>
                            <h6>This offer only applies to purchases through our website.</h6>
                        </div>

                    </div>

                    <div class="col-12 col-sm-12 col-md-6">
                        <!-- Header2 -->
                        <div class="header-apis">
                            <div><span class="span_green pr-3">POST </span><span> /v1/customers</span></div>
                            <div class="header-api-right">
                                <select id="langSelectors" class="mr-3">
                                    <option value="python">Python</option>
                                    <option value="node">Node.js</option>
                                    <option value="php">PHP</option>
                                </select>
                                <a href="#" id="ResponeCopyBtnone"><i class="fa fa-clone"></i></a>
                            </div>
                        </div>

                        <!-- Request Box -->
                        <div class="request-box" id="requestBoxs">
                            1 &nbsp; <span class="highlist-gulabi"> import</span> requests
                            2 &nbsp; url = <span class="highlist-gulabi">"https://api.example.com/v1/offers"</span>
                            3 &nbsp; headers = {"Authorization": <span class="highlist-gulabi">"x-api-key"</span>}
                            4 &nbsp; payload = {
                            5&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"category":
                            <span class="highlist-gulabi">"Summer Sale"</span>,
                            6&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"title":<span
                                class="highlist-gulabi">"50% Off Everything"</span>,
                            7&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"description":<span
                                class="highlist-gulabi">"Get half price off on all summer items."</span>,
                            8&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"offer_url":<span
                                class="highlist-gulabi">"https://example.com/offer"</span>,
                            9&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"radius":
                            <span class="highlist-gulabi">"10"</span>,
                            10&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"expiry_date":<span
                                class="highlist-gulabi">"2025-08-31"</span>,
                            11&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"expiry_time":<span
                                class="highlist-gulabi">"23:59"</span>,
                            12&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"terms_conditions":<span
                                class="highlist-gulabi">"Valid until stocks last. Non-refundable."</span>,
                            13&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"category":<span
                                class="highlist-gulabi">"Summer Sale"</span>,
                            14&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}

                            15&nbsp;&nbsp;&nbsp;files = {
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"image":<span
                                class="highlist-gulabi">"open("offer_banner.jpg", "rb")"</span>,
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            }
                        </div>

                        <!-- Response Box -->
                        <div class="response-box">
                            <div class="response-title" id="responseTitles">
                                <span>Response (Python)</span>
                                <a href="#" id="ResponeCopyBtntwo"><i class="fa fa-clone"></i></a>
                            </div>
                            <div class="response-content" id="responseContents">
                                {
                                "i12d": <span class="highlight">"offer_123456789"</span>,
                                "category": <span class='highlight'> "Summer Sale"</span>,
                                "title": <span class='highlight'> "50% Off Everything"</span>,
                                "description": <span class='highlight'>"Get half price off on all summeritems for a
                                    limited time only."</span>,
                                "image_url": <span
                                    class='highlight'>"https://cdn.example.com/offers/offer_123456789.jpg."</span>,
                                "location": <span class='highlight'>"New York"</span>,
                                "radius": <span class='highlight-red'>"10"</span>,
                                "expiry_date": <span class='highlight'>"2025-08-31"</span>,
                                "expiry_time": <span class='highlight'>"23:59"</span>,
                                "terms_conditions": <span class='highlight'>"Valid until stocks last.
                                    Non-refundable."</span>,
                                "created_at": <span class='highlight'>"2025-08-19T10:30:00Z"</span>,
                                "status": <span class='highlight-blue'>"true"</span>
                                }
                            </div>
                        </div>
                        <!-- *********** -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="api_rihgt_slidebar_lft" >

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-6">
                        <div class="api_rihgt_slidebar-ttl " id="viewOfferSectionid">
                            <h2>View Offer</h2>
                        </div>
                        <div class="api_rihgt_slidebar_lft">
                            <div>
                                <h6>header : { x-api-key } </h6>
                            </div>
                            <h6>Parameters</h6>
                        </div>
                        <div class="api_rihgt_slidebar_lft mt-3">
                            <h4>Offer Category ID <span class="span_muted">string, mandatory</span></h4>
                            <h6>The category of the offer. Example: <span class="span_highlight">"2"</span>
                            </h6>
                        </div>

                        <div class="api_rihgt_slidebar_lft mt-2">
                            <h4>Offer Title <span class="span_muted">string, mandatory</span></h4>
                            <h6>The title of your offer. Example: <span class="span_highlight">"20% off summer sale"</span></h6>
                        </div>

                        <div class="api_rihgt_slidebar_lft mt-2">
                            <h4>Offer Description <span class="span_muted">string, mandatory</span></h4>
                            <h6>Discount valid through July</h6>
                            <h6>Example: <span class="span_highlight">“https://advertiseroffer.com"</span></h6>
                        </div>

                        <div class="api_rihgt_slidebar_lft mt-2">
                            <h4>Offer URL <span class="span_muted">string, mandatory</span></h4>
                            <h6>A link where users can view the offer.</h6>
                            <h6>Example: <span class="span_highlight">"https://example.com/offer"</span></h6>
                        </div>

                        <div class="api_rihgt_slidebar_lft mt-2">
                            <h4>Offer Image <span class="span_muted">string, mandatory</span></h4>
                            <h6>An image representing the offer. Recommended size: <span
                                    class="span_highlight">"1080x1080px"</span></h6>
                        </div>

                        <div class="api_rihgt_slidebar_lft mt-2">
                            <h4>Offer Location <span class="span_muted">string, mandatory</span></h4>
                            <h6>Target location for the offer. Example:<span class="span_highlight">"New York"</span>
                            </h6>
                        </div>

                        <div class="api_rihgt_slidebar_lft mt-2">
                            <h4>Offer Location radius in miles. <span class="span_muted">string, mandatory</span></h4>
                            <h6>Radius in miles around the target location. Example: <span
                                    class="span_highlight">"10"</span></h6>
                        </div>

                        <div class="api_rihgt_slidebar_lft mt-2">
                            <h4>Offer Start Date & UTC Time <span class="span_muted">string, mandatory</span></h4>
                            <h6>2025-07-10T08:00:00Z <span
                                    class="span_highlight">"YYYY-MM-DD"</span></h6>
                        </div>

                        <div class="api_rihgt_slidebar_lft mt-2">
                            <h4>Offer Expiry Date & UTC Time <span class="span_muted">string, optional</span></h4>
                            <h6>2025-07-12T20:30:00Z<span class="span_highlight">"HH:mm"</span>
                            </h6>
                        </div>

                        <div class="api_rihgt_slidebar_lft mt-2">
                            <h4>Offer Terms & Conditions <span class="span_muted">string, optional</span></h4>
                            <h6>This offer only applies to purchases through our website.</h6>
                        </div>

                    </div>

                    <div class="col-12 col-sm-12 col-md-6">
                        <!-- Header2 -->
                        <div class="header-apis">
                            <div><span class="span_green pr-3">POST </span><span> /v1/customers</span></div>
                            <div class="header-api-right">
                                <select id="langSelectors" class="mr-3">
                                    <option value="python">Python</option>
                                    <option value="node">Node.js</option>
                                    <option value="php">PHP</option>
                                </select>
                                <a href="#" id="ResponeCopyBtnone"><i class="fa fa-clone"></i></a>
                            </div>
                        </div>

                        <!-- Request Box -->
                        <div class="request-box" id="requestBoxs">
                            1 &nbsp; <span class="highlist-gulabi"> import</span> requests
                            2 &nbsp; url = <span class="highlist-gulabi">"https://api.example.com/v1/offers"</span>
                            3 &nbsp; headers = {"Authorization": <span class="highlist-gulabi">"x-api-key"</span>}
                            4 &nbsp; payload = {
                            5&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"category":
                            <span class="highlist-gulabi">"Summer Sale"</span>,
                            6&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"title":<span
                                class="highlist-gulabi">"50% Off Everything"</span>,
                            7&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"description":<span
                                class="highlist-gulabi">"Get half price off on all summer items."</span>,
                            8&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"offer_url":<span
                                class="highlist-gulabi">"https://example.com/offer"</span>,
                            9&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"radius":
                            <span class="highlist-gulabi">"10"</span>,
                            10&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"expiry_date":<span
                                class="highlist-gulabi">"2025-08-31"</span>,
                            11&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"expiry_time":<span
                                class="highlist-gulabi">"23:59"</span>,
                            12&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"terms_conditions":<span
                                class="highlist-gulabi">"Valid until stocks last. Non-refundable."</span>,
                            13&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"category":<span
                                class="highlist-gulabi">"Summer Sale"</span>,
                            14&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}

                            15&nbsp;&nbsp;&nbsp;files = {
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"image":<span
                                class="highlist-gulabi">"open("offer_banner.jpg", "rb")"</span>,
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            }
                        </div>

                        <!-- Response Box -->
                        <div class="response-box">
                            <div class="response-title" id="responseTitles">
                                <span>Response (Python)</span>
                                <a href="#" id="ResponeCopyBtntwo"><i class="fa fa-clone"></i></a>
                            </div>
                            <div class="response-content" id="responseContents">
                                {
                                "i12d": <span class="highlight">"offer_123456789"</span>,
                                "category": <span class='highlight'> "Summer Sale"</span>,
                                "title": <span class='highlight'> "50% Off Everything"</span>,
                                "description": <span class='highlight'>"Get half price off on all summeritems for a
                                    limited time only."</span>,
                                "image_url": <span
                                    class='highlight'>"https://cdn.example.com/offers/offer_123456789.jpg."</span>,
                                "location": <span class='highlight'>"New York"</span>,
                                "radius": <span class='highlight-red'>"10"</span>,
                                "expiry_date": <span class='highlight'>"2025-08-31"</span>,
                                "expiry_time": <span class='highlight'>"23:59"</span>,
                                "terms_conditions": <span class='highlight'>"Valid until stocks last.
                                    Non-refundable."</span>,
                                "created_at": <span class='highlight'>"2025-08-19T10:30:00Z"</span>,
                                "status": <span class='highlight-blue'>"true"</span>
                                }
                            </div>
                        </div>
                        <!-- *********** -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="api_rihgt_slidebar_lft" >

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-6">
                        <div class="api_rihgt_slidebar-ttl " id="pauseResumeOfferSectionid">
                            <h2>Pause and Resume Offer</h2>
                        </div>
                        <div class="api_rihgt_slidebar_lft">
                            <div>
                                <h6>header : { x-api-key } </h6>
                            </div>
                            <h6>Parameters</h6>
                        </div>
                        <div class="api_rihgt_slidebar_lft mt-3">
                            <h4>Offer Category ID <span class="span_muted">string, mandatory</span></h4>
                            <h6>The category of the offer. Example: <span class="span_highlight">"2"</span>
                            </h6>
                        </div>

                        <div class="api_rihgt_slidebar_lft mt-2">
                            <h4>Offer Title <span class="span_muted">string, mandatory</span></h4>
                            <h6>The title of your offer. Example: <span class="span_highlight">"20% off summer sale"</span></h6>
                        </div>

                        <div class="api_rihgt_slidebar_lft mt-2">
                            <h4>Offer Description <span class="span_muted">string, mandatory</span></h4>
                            <h6>Discount valid through July</h6>
                            <h6>Example: <span class="span_highlight">“https://advertiseroffer.com"</span></h6>
                        </div>

                        <div class="api_rihgt_slidebar_lft mt-2">
                            <h4>Offer URL <span class="span_muted">string, mandatory</span></h4>
                            <h6>A link where users can view the offer.</h6>
                            <h6>Example: <span class="span_highlight">"https://example.com/offer"</span></h6>
                        </div>

                        <div class="api_rihgt_slidebar_lft mt-2">
                            <h4>Offer Image <span class="span_muted">string, mandatory</span></h4>
                            <h6>An image representing the offer. Recommended size: <span
                                    class="span_highlight">"1080x1080px"</span></h6>
                        </div>

                        <div class="api_rihgt_slidebar_lft mt-2">
                            <h4>Offer Location <span class="span_muted">string, mandatory</span></h4>
                            <h6>Target location for the offer. Example:<span class="span_highlight">"New York"</span>
                            </h6>
                        </div>

                        <div class="api_rihgt_slidebar_lft mt-2">
                            <h4>Offer Location radius in miles. <span class="span_muted">string, mandatory</span></h4>
                            <h6>Radius in miles around the target location. Example: <span
                                    class="span_highlight">"10"</span></h6>
                        </div>

                        <div class="api_rihgt_slidebar_lft mt-2">
                            <h4>Offer Start Date & UTC Time <span class="span_muted">string, mandatory</span></h4>
                            <h6>2025-07-10T08:00:00Z <span
                                    class="span_highlight">"YYYY-MM-DD"</span></h6>
                        </div>

                        <div class="api_rihgt_slidebar_lft mt-2">
                            <h4>Offer Expiry Date & UTC Time <span class="span_muted">string, optional</span></h4>
                            <h6>2025-07-12T20:30:00Z<span class="span_highlight">"HH:mm"</span>
                            </h6>
                        </div>

                        <div class="api_rihgt_slidebar_lft mt-2">
                            <h4>Offer Terms & Conditions <span class="span_muted">string, optional</span></h4>
                            <h6>This offer only applies to purchases through our website.</h6>
                        </div>

                    </div>

                    <div class="col-12 col-sm-12 col-md-6">
                        <!-- Header2 -->
                        <div class="header-apis">
                            <div><span class="span_green pr-3">POST </span><span> /v1/customers</span></div>
                            <div class="header-api-right">
                                <select id="langSelectors" class="mr-3">
                                    <option value="python">Python</option>
                                    <option value="node">Node.js</option>
                                    <option value="php">PHP</option>
                                </select>
                                <a href="#" id="ResponeCopyBtnone"><i class="fa fa-clone"></i></a>
                            </div>
                        </div>

                        <!-- Request Box -->
                        <div class="request-box" id="requestBoxs">
                            1 &nbsp; <span class="highlist-gulabi"> import</span> requests
                            2 &nbsp; url = <span class="highlist-gulabi">"https://api.example.com/v1/offers"</span>
                            3 &nbsp; headers = {"Authorization": <span class="highlist-gulabi">"x-api-key"</span>}
                            4 &nbsp; payload = {
                            5&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"category":
                            <span class="highlist-gulabi">"Summer Sale"</span>,
                            6&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"title":<span
                                class="highlist-gulabi">"50% Off Everything"</span>,
                            7&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"description":<span
                                class="highlist-gulabi">"Get half price off on all summer items."</span>,
                            8&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"offer_url":<span
                                class="highlist-gulabi">"https://example.com/offer"</span>,
                            9&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"radius":
                            <span class="highlist-gulabi">"10"</span>,
                            10&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"expiry_date":<span
                                class="highlist-gulabi">"2025-08-31"</span>,
                            11&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"expiry_time":<span
                                class="highlist-gulabi">"23:59"</span>,
                            12&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"terms_conditions":<span
                                class="highlist-gulabi">"Valid until stocks last. Non-refundable."</span>,
                            13&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"category":<span
                                class="highlist-gulabi">"Summer Sale"</span>,
                            14&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}

                            15&nbsp;&nbsp;&nbsp;files = {
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"image":<span
                                class="highlist-gulabi">"open("offer_banner.jpg", "rb")"</span>,
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            }
                        </div>

                        <!-- Response Box -->
                        <div class="response-box">
                            <div class="response-title" id="responseTitles">
                                <span>Response (Python)</span>
                                <a href="#" id="ResponeCopyBtntwo"><i class="fa fa-clone"></i></a>
                            </div>
                            <div class="response-content" id="responseContents">
                                {
                                "i12d": <span class="highlight">"offer_123456789"</span>,
                                "category": <span class='highlight'> "Summer Sale"</span>,
                                "title": <span class='highlight'> "50% Off Everything"</span>,
                                "description": <span class='highlight'>"Get half price off on all summeritems for a
                                    limited time only."</span>,
                                "image_url": <span
                                    class='highlight'>"https://cdn.example.com/offers/offer_123456789.jpg."</span>,
                                "location": <span class='highlight'>"New York"</span>,
                                "radius": <span class='highlight-red'>"10"</span>,
                                "expiry_date": <span class='highlight'>"2025-08-31"</span>,
                                "expiry_time": <span class='highlight'>"23:59"</span>,
                                "terms_conditions": <span class='highlight'>"Valid until stocks last.
                                    Non-refundable."</span>,
                                "created_at": <span class='highlight'>"2025-08-19T10:30:00Z"</span>,
                                "status": <span class='highlight-blue'>"true"</span>
                                }
                            </div>
                        </div>
                        <!-- *********** -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="api_rihgt_slidebar_lft" >

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-6">
                        <div class="api_rihgt_slidebar-ttl " id="deleteOfferSectionid">
                            <h2>Delete Offer</h2>
                        </div>
                        <div class="api_rihgt_slidebar_lft">
                            <div>
                                <h6>header : { x-api-key } </h6>
                            </div>
                            <h6>Parameters</h6>
                        </div>
                        <div class="api_rihgt_slidebar_lft mt-3">
                            <h4>Offer Category ID <span class="span_muted">string, mandatory</span></h4>
                            <h6>The category of the offer. Example: <span class="span_highlight">"2"</span>
                            </h6>
                        </div>

                        <div class="api_rihgt_slidebar_lft mt-2">
                            <h4>Offer Title <span class="span_muted">string, mandatory</span></h4>
                            <h6>The title of your offer. Example: <span class="span_highlight">"20% off summer sale"</span></h6>
                        </div>

                        <div class="api_rihgt_slidebar_lft mt-2">
                            <h4>Offer Description <span class="span_muted">string, mandatory</span></h4>
                            <h6>Discount valid through July</h6>
                            <h6>Example: <span class="span_highlight">“https://advertiseroffer.com"</span></h6>
                        </div>

                        <div class="api_rihgt_slidebar_lft mt-2">
                            <h4>Offer URL <span class="span_muted">string, mandatory</span></h4>
                            <h6>A link where users can view the offer.</h6>
                            <h6>Example: <span class="span_highlight">"https://example.com/offer"</span></h6>
                        </div>

                        <div class="api_rihgt_slidebar_lft mt-2">
                            <h4>Offer Image <span class="span_muted">string, mandatory</span></h4>
                            <h6>An image representing the offer. Recommended size: <span
                                    class="span_highlight">"1080x1080px"</span></h6>
                        </div>

                        <div class="api_rihgt_slidebar_lft mt-2">
                            <h4>Offer Location <span class="span_muted">string, mandatory</span></h4>
                            <h6>Target location for the offer. Example:<span class="span_highlight">"New York"</span>
                            </h6>
                        </div>

                        <div class="api_rihgt_slidebar_lft mt-2">
                            <h4>Offer Location radius in miles. <span class="span_muted">string, mandatory</span></h4>
                            <h6>Radius in miles around the target location. Example: <span
                                    class="span_highlight">"10"</span></h6>
                        </div>

                        <div class="api_rihgt_slidebar_lft mt-2">
                            <h4>Offer Start Date & UTC Time <span class="span_muted">string, mandatory</span></h4>
                            <h6>2025-07-10T08:00:00Z <span
                                    class="span_highlight">"YYYY-MM-DD"</span></h6>
                        </div>

                        <div class="api_rihgt_slidebar_lft mt-2">
                            <h4>Offer Expiry Date & UTC Time <span class="span_muted">string, optional</span></h4>
                            <h6>2025-07-12T20:30:00Z<span class="span_highlight">"HH:mm"</span>
                            </h6>
                        </div>

                        <div class="api_rihgt_slidebar_lft mt-2">
                            <h4>Offer Terms & Conditions <span class="span_muted">string, optional</span></h4>
                            <h6>This offer only applies to purchases through our website.</h6>
                        </div>

                    </div>

                    <div class="col-12 col-sm-12 col-md-6">
                        <!-- Header2 -->
                        <div class="header-apis">
                            <div><span class="span_green pr-3">POST </span><span> /v1/customers</span></div>
                            <div class="header-api-right">
                                <select id="langSelectors" class="mr-3">
                                    <option value="python">Python</option>
                                    <option value="node">Node.js</option>
                                    <option value="php">PHP</option>
                                </select>
                                <a href="#" id="ResponeCopyBtnone"><i class="fa fa-clone"></i></a>
                            </div>
                        </div>

                        <!-- Request Box -->
                        <div class="request-box" id="requestBoxs">
                            1 &nbsp; <span class="highlist-gulabi"> import</span> requests
                            2 &nbsp; url = <span class="highlist-gulabi">"https://api.example.com/v1/offers"</span>
                            3 &nbsp; headers = {"Authorization": <span class="highlist-gulabi">"x-api-key"</span>}
                            4 &nbsp; payload = {
                            5&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"category":
                            <span class="highlist-gulabi">"Summer Sale"</span>,
                            6&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"title":<span
                                class="highlist-gulabi">"50% Off Everything"</span>,
                            7&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"description":<span
                                class="highlist-gulabi">"Get half price off on all summer items."</span>,
                            8&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"offer_url":<span
                                class="highlist-gulabi">"https://example.com/offer"</span>,
                            9&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"radius":
                            <span class="highlist-gulabi">"10"</span>,
                            10&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"expiry_date":<span
                                class="highlist-gulabi">"2025-08-31"</span>,
                            11&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"expiry_time":<span
                                class="highlist-gulabi">"23:59"</span>,
                            12&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"terms_conditions":<span
                                class="highlist-gulabi">"Valid until stocks last. Non-refundable."</span>,
                            13&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"category":<span
                                class="highlist-gulabi">"Summer Sale"</span>,
                            14&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}

                            15&nbsp;&nbsp;&nbsp;files = {
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"image":<span
                                class="highlist-gulabi">"open("offer_banner.jpg", "rb")"</span>,
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            }
                        </div>

                        <!-- Response Box -->
                        <div class="response-box">
                            <div class="response-title" id="responseTitles">
                                <span>Response (Python)</span>
                                <a href="#" id="ResponeCopyBtntwo"><i class="fa fa-clone"></i></a>
                            </div>
                            <div class="response-content" id="responseContents">
                                {
                                "i12d": <span class="highlight">"offer_123456789"</span>,
                                "category": <span class='highlight'> "Summer Sale"</span>,
                                "title": <span class='highlight'> "50% Off Everything"</span>,
                                "description": <span class='highlight'>"Get half price off on all summeritems for a
                                    limited time only."</span>,
                                "image_url": <span
                                    class='highlight'>"https://cdn.example.com/offers/offer_123456789.jpg."</span>,
                                "location": <span class='highlight'>"New York"</span>,
                                "radius": <span class='highlight-red'>"10"</span>,
                                "expiry_date": <span class='highlight'>"2025-08-31"</span>,
                                "expiry_time": <span class='highlight'>"23:59"</span>,
                                "terms_conditions": <span class='highlight'>"Valid until stocks last.
                                    Non-refundable."</span>,
                                "created_at": <span class='highlight'>"2025-08-19T10:30:00Z"</span>,
                                "status": <span class='highlight-blue'>"true"</span>
                                }
                            </div>
                        </div>
                        <!-- *********** -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Section CSS Start -->
    <footer>
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-xs-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
                        <div class="footer_bx">
                            <img src="{{ url('public/assets/img/footer-logo.svg')}}" alt="footer-logo" class="footer-logo">
                        </div>
                    </div>

                    <div class="col-12 col-xs-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
                        <div class="footer_bx">
                            <h6>Company</h6>
                            <ul>
                               <li><a href="{{url('/')}}">Home</a></li>
                                <li><a href="{{url('/about-us')}}">About Us</a></li>
                                <li><a href="mailto:help@agilis.dating">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-12 col-xs-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
                        <div class="footer_bx">
                            <h6>FOR BUSINESS</h6>
                            <ul>
                                <li><a href="{{ url('/offers') }}">Offers</a></li>
                                <li><a href="https://chessmafia.com/php/M-0402/Ad-Agilis/Ad-agilis">Ad Portal</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-12 col-xs-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
                        <div class="footer_bx">
                            <h6>Legal & Policies</h6>
                            <ul>
                               <li><a href="{{url('/terms-and-conditions')}}">Terms & Conditions</a></li>
                                <li><a href="{{url('/privacy-policy')}}">Privacy Policy</a></li>
                                <li><a href="{{url('/cookie-policy')}}">Cookie Policy</a></li>
                                <li><a href="{{url('/app-terms')}}">App Terms</a></li>
                                <li><a href="{{url('/acceptable-use-policy')}}">Acceptable Use Policy</a></li>
                                <li><a href="{{url('/slavery')}}">Modern Slavery Statement</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-12 col-xs-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
                        <div class="footer_bx">
                            <h6>Settings</h6>
                            <ul>
                                <li><a href="{{url('/choose-your-country')}}">Change Location</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-12 col-xs-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
                        <div class="footer_bx">
                            <h6>Apps</h6>
                            <ul>
                              <li><a href="https://apps.apple.com/gb/app/agilis/id6479391708"><img src="{{ url('public/assets/img/appstore.svg') }}" alt="appstore" class="img-fluid"></a>
                                </li>
                                <li><a href="https://play.google.com/store/apps/details?id=com.app.agilis"><img src="{{ url('public/assets/img/playstore.svg') }}" alt="playstore"
                                            class="img-fluid"></a></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="footer_bottom">
            <div class="container">
                <div class="footer_bottom_main">
                    <div class="header_bottom_lft">
                        <p>Copyright © 2025 - All rights reserved</p>
                    </div>
                    <div class="header_bottom_rht">
                        <div class="drodwn_flg">
                            <div class="dropdown">
                                <button class="btn dropdown-toggle" type="button" data-toggle="dropdown"
                                    aria-expanded="false">
                                    <img src="{{ url('public/assets/img/UK-Flag.svg')}}" alt="UK-Flag" class="img-fluid">
                                    <span class="pl-2">United States</span>
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="{{ url('en-us') }}"><img src="{{ url('public/assets/img/UK-Flag.svg')}}"
                                                alt="UK-Flag" class="img-fluid"><span>United States</span></a>
                                        <a class="dropdown-item" href="{{ url('en-au') }}"><img src="{{ url('public/assets/img/australia-flag.png')}}"
                                                alt="australia-flag" class="img-fluid"><span>Australia</span></a>
                                        <a class="dropdown-item" href="{{ url('en-ca') }}"><img src="{{ url('public/assets/img/canada-flag.png')}}"
                                                alt="canada-flag" class="img-fluid"><span>Canada</span></a>

                                        <a class="dropdown-item" href="{{ url('en-gb') }}"><img src="{{ url('public/assets/img/united-kingdom-flag.png')}}"
                                                alt="united-kingdom-flag" class="img-fluid"><span>Great
                                                Britain</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section CSS End -->

    <!-- Chat Box Start -->
    <div id="apiAssistantModal"
     style="
        display: none;
        position: fixed;
        inset: 0;
        background: rgba(0,0,0,0.5);
        z-index: 10000;
        align-items: center;
        justify-content: center;
     ">

    <div style="
        background: #fff;
        width: 95%;
        max-width: 1200px;
        height: 90vh;
        border-radius: 12px;
        position: relative;
        overflow: hidden;
    ">

        <!-- CLOSE BUTTON -->
        <button onclick="closeApiAssistant()"
                style="
                    position: absolute;
                    top: 10px;
                    right: 15px;
                    font-size: 22px;
                    background: none;
                    border: none;
                    cursor: pointer;
                    z-index: 10;
                ">
            ✕
        </button>

        <!-- ================= IFRAME ================= -->
        <iframe
            id="apiAssistantIframe"
            src=""
            style="width:100%; height:100%; border:none;">
        </iframe>

    </div>
</div>
    <!-- Chat Box End -->

    <!-- Modal -->
    <div class="modal fade api_suggection_mdl" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <form>
                        <div class="form-group api_suggection_form-group position-relative">
                            <a href="#" class="apisuggection_SearchBtn"><i class="fa fa-search"></i></a>
                            <input type="email" class="form-control" placeholder="Go to...">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <a href="#"><img src="{{ url('public/assets/img/navigate-icon.svg')}}" alt="navigate-icon"
                            class="img-fluid mr-2"><span>Navigate</span></a>
                    <a href="#" class="ml-4"><img src="{{ url('public/assets/img/go-icon.svg')}}" alt="go-icon"
                            class="img-fluid mr-2"><span>Go</span></a>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="{{ url('public/assets/js/jquery.js')}}"></script>
<script src="{{ url('public/assets/js/popper.min.js')}}"></script>
<script src="{{ url('public/assets/js/bootstrap.min.js')}}"></script>
<script src="{{ url('public/assets/js/custom.js')}}"></script>
<script>
    function openApiAssistant() {
        const modal = document.getElementById('apiAssistantModal');
        const iframe = document.getElementById('apiAssistantIframe');

        iframe.src = "{{ route('api-assistant.index') }}"; // your assistant page
        modal.style.display = 'flex';
        document.body.style.overflow = 'hidden';
    }

    function closeApiAssistant() {
        const modal = document.getElementById('apiAssistantModal');
        const iframe = document.getElementById('apiAssistantIframe');

        modal.style.display = 'none';
        iframe.src = '';
        document.body.style.overflow = 'auto';
    }

    // Optional: Close on ESC
    document.addEventListener('keydown', function (e) {
        if (e.key === 'Escape') {
            closeApiAssistant();
        }
    });
</script>
<script>
    $(document).ready(function () {
        $("#langSelector").on("change", function () {
            let lang = $(this).val();

            if (lang === "python") {
                $("#requestBox").html(
                    `1 &nbsp; <span class="highlist-gulabi"> import</span> requests
                            2 &nbsp; url = <span class="highlist-gulabi">"https://api.example.com/v1/offers"</span>
                            3 &nbsp; headers = {"Authorization": <span
                                class="highlist-gulabi">"x-api-key "</span>}
                            4 &nbsp; $category = Category::create([
                            5&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"Category ID"=> <span
                                class="highlist-gulabi">"1"</span>,
                            6&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"Category Name"=> <span
                                class="highlist-gulabi">"summer sale"</span>,])`
                );
                $("#responseTitle").text("Response (Python)");
                $("#responseContent").html(`{

                    "id": <span class="highlight">"1"</span>,
                    "name": <span class='highlight'> "Summer Sale"</span>,



                    }`);
            }

            if (lang === "node") {
                $("#requestBox").text(
                    `const axios = require("axios");
                        axios.post("https://api.example.com/v1/offers", {
                        category: "Summer Sale"
                        }, {
                        headers: { Authorization: "Bearer <API_KEY>" }
                        });`
                );
                $("#responseTitle").text("Response (Node.js)");
                $("#responseContent").html(`{

                        "<span class='highlight'>id</span>": "1",
                        "<span class='highlight'>name</span>": "Summer Sale",

                        }`);
            }

            if (lang === "php") {
                $("#requestBox").text(
                    `<?php
                    $ch = curl_init("https://api.example.com/v1/offers");
                    curl_setopt($ch, CURLOPT_HTTPHEADER, ["Authorization: Bearer <API_KEY>"]);
                    $data = ["category" => "Summer Sale"];
                    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
                    $response = curl_exec($ch);
                    ?>`
                );
                $("#responseTitle").text("Response (PHP)");
                $("#responseContent").html(`{
                "<span class='highlight'>id</span>": "1",
                "<span class='highlight'>name</span>": "Summer Sale",

                }`);
            }
        });
    });
</script>
<script>
    $("#api_copy_btn").click(function () {
        // Get the text from the div
        var text = $("#requestBox").text();

        // Create a temporary input element
        var tempInput = $("<textarea>");
        $("body").append(tempInput);
        tempInput.val(text).select();

        // Copy the text
        document.execCommand("copy");

        // Remove the temporary input
        tempInput.remove();

    });
</script>
<script>
    $("#ResponeCopyBtn").click(function () {
        var text = $("#responseContent").text();
        var tempInput = $("<textarea>");
        $("body").append(tempInput);
        tempInput.val(text).select();
        document.execCommand("copy");
        tempInput.remove();
    });
</script>

<script>
    $("#ResponeCopyBtnone").click(function () {
        var text = $("#requestBoxs").text();
        // Create a temporary input element
        var tempInput = $("<textarea>");
        $("body").append(tempInput);
        tempInput.val(text).select();

        // Copy the text
        document.execCommand("copy");

        tempInput.remove();

    });
</script>


<script>

    $("#ResponeCopyBtntwo").click(function () {
        var text = $("#responseContents").text();
        // Create a temporary input element
        var tempInput = $("<textarea>");
        $("body").append(tempInput);
        tempInput.val(text).select();

        // Copy the text
        document.execCommand("copy");

        tempInput.remove();

    });
</script>



        <script>
    $(document).ready(function () {
        $("#langSelectors").on("change", function () {
            let lang = $(this).val();

            if (lang === "python") {
                $("#requestBoxs").text(
                    `import requests
url = "https://api.example.com/v1/offers"
headers = {"Authorization": "Bearer <API_KEY>"}
payload = { "category": "Summer Sale" }`
                );
                $("#responseTitles").text("Response (Python)");
                $("#responseContents").html(`{
  "<span class='highlight'>id</span>": "offer_123456789",
  "<span class='highlight'>category</span>": "Summer Sale",
  "<span class='highlight'>title</span>": "50% Off Everything",
  "<span class='highlight'>status</span>": true
}`);
            }

            if (lang === "node") {
                $("#requestBoxs").text(
                    `const axios = require("axios");
axios.post("https://api.example.com/v1/offers", {
  category: "Summer Sale"
}, {
  headers: { Authorization: "Bearer <API_KEY>" }
});`
                );
                $("#responseTitles").text("Response (Node.js)");
                $("#responseContents").html(`{
  "<span class='highlight'>id</span>": "offer_NODE_987654321",
  "<span class='highlight'>category</span>": "Summer Sale",
  "<span class='highlight'>title</span>": "Special Discount",
  "<span class='highlight'>status</span>": true
}`);
            }

            if (lang === "php") {
                $("#requestBoxs").text(
                    `<?php
$ch = curl_init("https://api.example.com/v1/offers");
curl_setopt($ch, CURLOPT_HTTPHEADER, ["Authorization: Bearer <API_KEY>"]);
$data = ["category" => "Summer Sale"];
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
$response = curl_exec($ch);
?>`
                );
                $("#responseTitles").text("Response (PHP)");
                $("#responseContents").html(`{
  "<span class='highlight'>id</span>": "offer_PHP_555555",
  "<span class='highlight'>category</span>": "Summer Sale",
  "<span class='highlight'>title</span>": "Half Price Offer",
  "<span class='highlight'>status</span>": true
}`);
            }
        });
    });
</script>

<script>
    $(document).ready(function () {
        $(".sidebar_menu_toggle").click(function () {
            $(".api_left_slidebar").addClass("sidebar_left");
            $("body").addClass("no-scroll");  // ✅ FIXED
        });

        $(".sidebar_close").click(function () {
            $(".api_left_slidebar").removeClass("sidebar_left");
            $("body").removeClass("no-scroll");  // ✅ enable scroll again
        });
    });
</script>

<script>
  document.addEventListener("DOMContentLoaded", function () {

// Map button IDs → section IDs
const scrollMap = {
    createOfferBtn: "createOfferSectionid",
    createOfferBtn1: "editOfferSectionid",
    createOfferBtn2: "viewOfferSectionid",
    createOfferBtn3: "pauseResumeOfferSectionid",
    createOfferBtn4: "deleteOfferSectionid"
};

// Loop through all buttons
Object.keys(scrollMap).forEach(btnId => {
    const btn = document.getElementById(btnId);

    if (btn) {
        btn.addEventListener("click", function (e) {
            e.preventDefault();

            const targetId = scrollMap[btnId];
            const target = document.getElementById(targetId);

            if (target) {
                target.scrollIntoView({
                    behavior: "smooth",
                    block: "start"
                });
            }
        });
    }
});

});




</script>

</html>
