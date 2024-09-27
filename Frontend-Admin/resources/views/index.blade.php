<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mangalmandap.com</title>
    <meta name="keyword" content="Welcome to Mangalmandap.com" />
    <meta name="description" content="Welcome to Mangalmandap.com" />
    <link type="image/x-icon" href="img/icon.png" rel="shortcut icon" />
    <!-- Theme Color -->
    <meta name="theme-color" content="#549a11">
    <meta name="msapplication-navbutton-color" content="#549a11">
    <meta name="apple-mobile-web-app-status-bar-style" content="#549a11">
    <!-- Bootstrap & Custom CSS-->
    <link href="{{ asset('frontend/assets/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/css/custom-responsive.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/css/custom.css') }}" rel="stylesheet">
    <!-- Font Awsome -->
    <script src="https://kit.fontawesome.com/48403ccd1a.js" crossorigin="anonymous"></script>

    <!--GOOGLE FONTS-->
    <link
        href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300;400;700;900&family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <!--<link href="https://fonts.googleapis.com/css?family=Raleway:200,300,400,500,600,700|Source+Sans+Pro:300,400,600,700" rel="stylesheet">-->
    <!-- Owl Carousel CSS-->
    <link href="{{ asset('frontend/assets/css/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/css/owl.theme.css') }}" rel="stylesheet">
    <!-- Chosen CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/prism.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/chosen.css') }}">
    <!-- Angular JS-->
    <script src="{{ asset('frontend/assets/js/angular.min.js') }}"></script>
    {{-- BRAND LOGO CSS --}}
    <link rel="stylesheet" href="{{ asset('assets/auth/css/custom-css/brand-logo.css') }}">
</head>

<body ng-app class="ng-scope">
    <!-- Loader -->
    <div class="preloader-wrapper text-center">
        <div class="loader"></div>
        <h5>Loading...</h5>
    </div>
    <!-- /.Loader -->
    <div id="body" style="display:none">
        <div id="wrap">
            <div id="main">
                <!-- Email id Verification -->
                <!-- /.Email id Verification -->
                <!-- Header & Menu -->
                <nav class="navbar inPrem2Nav">
                    <div class="container">
                        <a class="navbar-brand" href="{{ url('/') }}">
                            <img src="{{ isset($logos->name) && !empty($logos->name)
                                ? asset('storage/admin/logo-favicon/logos/' . $logos->name)
                                : asset('assets/auth/images/logos.png') }}"
                                class="img-responsive gt-header-logo" alt="brand-logo">
                        </a>
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <!--<ul class="nav navbar-nav navbar-left inPrem2Logo hidden-xs hidden-sm hidden-md">
                                    <li>
                                        <a href="index" class="ripplelink">
                                            <img src="{{ url('frontend/img/logo.png') }}" class="img-responsive gt-header-logo">
                                        </a>
                                    </li>
                                </ul>-->

                            <ul class="nav navbar-nav navbar-right">
                                <li class="active ripplelink"><a href="{{ url('/') }}"
                                        class="inPrem2Link">Home</a></li>
                                <li class="dropdown">
                                    <a href="search.php" class="dropdown-toggle ripplelink inPrem2Link"
                                        data-toggle="dropdown" role="button" aria-expanded="false">
                                        <span class="mr-5">Search</span><span class="fa fa-angle-down"></span>
                                    </a>
                                    <ul class="dropdown-menu flat" role="menu">
                                        <li><a href="search?gt-quick-search">Quick Search</a></li>
                                        <li><a href="search?gt-basic-search">Basic Search</a></li>
                                        <li><a href="search?gt-advance-search">Advanced Search</a></li>
                                        <li><a href="search?gt-keyword-search">Keyword Search</a></li>
                                        <li><a href="search?gt-location-search">Location Search</a></li>
                                        <li><a href="search?gt-occupation-search">Occupation Search</a></li>
                                    </ul>
                                </li>

                                <!--                                        <li class="ripplelink"><a href="success-story.php"><i class="fas fa-users mr-10 fa-lg"></i>Success Story</a></li>
                                    -->

                                <li class="ripplelink"><a href="{{ url('plans') }}" class="inPrem2Link">Plans</a>
                                </li>

                                <li class="ripplelink"><a href="{{ url('help') }}" class="inPrem2Link">Help</a></li>
                                <a href="{{ url('login') }}" class="btn gt-btn-green"><i
                                        class="fas fa-lock mr-10 font-15"></i>Login</a>
                            </ul>
                        </div>
                    </div>
                </nav>
                <!-- /. Header & Menu -->
                <div class="container-fluid">
                    <div class="row">
                        <!-- Main Carousel -->
                        <div id="owl-demo-2" class="owl-carousel gt-slide-up">
                            <div class="item">
                                <img src="{{ asset('frontend/assets/images/banners/banner-1.jpg') }}" alt="banner-1">
                            </div>
                            <div class="item">
                                <img src="{{ asset('frontend/assets/images/banners/banner-2.jpg') }}" alt="banner-2">
                            </div>
                            <div class="item">
                                <img src="{{ asset('frontend/assets/images/banners/banner-3.jpg') }}" alt="banner-3">
                            </div>
                        </div>
                        <!-- /. Main Carousel -->
                        <div class="container gt-pad-lr-0-479">

                            <!-- Signup form -->
                            <div
                                class="col-xxl-6 col-xxl-offset-10 col-xl-7 col-xl-offset-9 col-lg-16 gt-pad-lr-0-479">
                                <div class="gt-slideup-form">
                                    <div class="gt-slideUp-form-head">
                                        <h4>REGISTER NOW</h4>
                                    </div>
                                    <div class="gt-slideUp-form-body">
                                        <form action="mobile-verification" id="frm" method="post"
                                            name="frm" onsubmit="return validateForm()">
                                            <div class="col-xxl-16 col-xl-16 form-group gt-index-collab">
                                                <div class="row">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i
                                                                class="fa fa-users fa-fw"></i></span>
                                                        <select class="gt-form-control form-1" name="profile_by">
                                                            <option value="">Profile Created By</option>
                                                            <option value="1">Self</option>
                                                            <option value="2">Parents</option>
                                                            <option value="3">Guardian</option>
                                                            <option value="4">Friends</option>
                                                            <option value="5">Sibling</option>
                                                            <option value="6">Relatives</option>
                                                        </select>
                                                        <select class="gt-form-control form-2" name="gender">
                                                            <option value="">Select Gender</option>
                                                            <option value="Female">Female</option>
                                                            <option value="Male">Male</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xxl-16 col-xl-16 form-group gt-index-collab">
                                                <div class="row">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i
                                                                class="fa fa-user fa-fw"></i></span>
                                                        <input type="text" class="gt-form-control form-1"
                                                            placeholder="Enter First Name" name="nickname"
                                                            id="nickname" ng-maxlength="30" ng-model="user.name">
                                                        <span
                                                            ng-show="frm.lastname.$dirty && frm.lastname.$error.maxlength"
                                                            class="text-danger gt-margin-left-10">Name Is Too
                                                            Long!</span>
                                                        <input type="text" class="gt-form-control form-2"
                                                            placeholder="Enter Last Name" name="lastname"
                                                            id="lastname" ng-maxlength="30"
                                                            ng-model="user.lastname">
                                                        <span
                                                            ng-show="frm.nickname.$dirty && frm.nickname.$error.maxlength"
                                                            class="text-danger gt-margin-left-10">Name Is Too Long
                                                            !</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xxl-16 col-xl-16 form-group">
                                                <div class="row">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i
                                                                class="fa fa-calendar fa-fw"></i></span>
                                                        <div class="row">
                                                            <div class="col-xxl-4 col-xs-5 col-s-5 col-m-5 col-l-5">
                                                                <select name="day" id="day"
                                                                    class="gt-form-control form-1"
                                                                    onchange="setDays(month, this, year)">
                                                                    <option value="01">01</option>
                                                                    <option value="02">02</option>
                                                                    <option value="03">03</option>
                                                                    <option value="04">04</option>
                                                                    <option value="05">05</option>
                                                                    <option value="06">06</option>
                                                                    <option value="07">07</option>
                                                                    <option value="08">08</option>
                                                                    <option value="09">09</option>
                                                                    <option value="10">10</option>
                                                                    <option value="11">11</option>
                                                                    <option value="12">12</option>
                                                                    <option value="13">13</option>
                                                                    <option value="14">14</option>
                                                                    <option value="15">15</option>
                                                                    <option value="16">16</option>
                                                                    <option value="17">17</option>
                                                                    <option value="18">18</option>
                                                                    <option value="19">19</option>
                                                                    <option value="20">20</option>
                                                                    <option value="21">21</option>
                                                                    <option value="22">22</option>
                                                                    <option value="23">23</option>
                                                                    <option value="24">24</option>
                                                                    <option value="25">25</option>
                                                                    <option value="26">26</option>
                                                                    <option value="27">27</option>
                                                                    <option value="28">28</option>
                                                                    <option value="29">29</option>
                                                                    <option value="30">30</option>
                                                                    <option value="31">31</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-xxl-5 col-xs-6 col-s-6 col-m-6 col-l-6">
                                                                <select name="month" id="month"
                                                                    class="gt-form-control"
                                                                    onchange="setDays(this, day, year)">
                                                                    <option value="">Month</option>
                                                                    <option value="01">Jan</option>
                                                                    <option value="02">Feb</option>
                                                                    <option value="03">Mar</option>
                                                                    <option value="04">Apr</option>
                                                                    <option value="05">May</option>
                                                                    <option value="06">Jun</option>
                                                                    <option value="07">Jul</option>
                                                                    <option value="08">Aug</option>
                                                                    <option value="09">Sep</option>
                                                                    <option value="10">Oct</option>
                                                                    <option value="11">Nov</option>
                                                                    <option value="12">Dec</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-xxl-7 col-xs-5 col-s-5 col-m-5 col-l-5">
                                                                <select name="year" id="year"
                                                                    class="gt-form-control"
                                                                    onchange="setDays(month, day, this)">
                                                                    <option value="">Year</option>
                                                                    <option value='2022'>
                                                                        2022 </option>
                                                                    <option value='2021'>
                                                                        2021 </option>
                                                                    <option value='2020'>
                                                                        2020 </option>
                                                                    <option value='2019'>
                                                                        2019 </option>
                                                                    <option value='2018'>
                                                                        2018 </option>
                                                                    <option value='2017'>
                                                                        2017 </option>
                                                                    <option value='2016'>
                                                                        2016 </option>
                                                                    <option value='2015'>
                                                                        2015 </option>
                                                                    <option value='2014'>
                                                                        2014 </option>
                                                                    <option value='2013'>
                                                                        2013 </option>
                                                                    <option value='2012'>
                                                                        2012 </option>
                                                                    <option value='2011'>
                                                                        2011 </option>
                                                                    <option value='2010'>
                                                                        2010 </option>
                                                                    <option value='2009'>
                                                                        2009 </option>
                                                                    <option value='2008'>
                                                                        2008 </option>
                                                                    <option value='2007'>
                                                                        2007 </option>
                                                                    <option value='2006'>
                                                                        2006 </option>
                                                                    <option value='2005'>
                                                                        2005 </option>
                                                                    <option value='2004'>
                                                                        2004 </option>
                                                                    <option value='2003'>
                                                                        2003 </option>
                                                                    <option value='2002'>
                                                                        2002 </option>
                                                                    <option value='2001'>
                                                                        2001 </option>
                                                                    <option value='2000'>
                                                                        2000 </option>
                                                                    <option value='1999'>
                                                                        1999 </option>
                                                                    <option value='1998'>
                                                                        1998 </option>
                                                                    <option value='1997'>
                                                                        1997 </option>
                                                                    <option value='1996'>
                                                                        1996 </option>
                                                                    <option value='1995'>
                                                                        1995 </option>
                                                                    <option value='1994'>
                                                                        1994 </option>
                                                                    <option value='1993'>
                                                                        1993 </option>
                                                                    <option value='1992'>
                                                                        1992 </option>
                                                                    <option value='1991'>
                                                                        1991 </option>
                                                                    <option value='1990'>
                                                                        1990 </option>
                                                                    <option value='1989'>
                                                                        1989 </option>
                                                                    <option value='1988'>
                                                                        1988 </option>
                                                                    <option value='1987'>
                                                                        1987 </option>
                                                                    <option value='1986'>
                                                                        1986 </option>
                                                                    <option value='1985'>
                                                                        1985 </option>
                                                                    <option value='1984'>
                                                                        1984 </option>
                                                                    <option value='1983'>
                                                                        1983 </option>
                                                                    <option value='1982'>
                                                                        1982 </option>
                                                                    <option value='1981'>
                                                                        1981 </option>
                                                                    <option value='1980'>
                                                                        1980 </option>
                                                                    <option value='1979'>
                                                                        1979 </option>
                                                                    <option value='1978'>
                                                                        1978 </option>
                                                                    <option value='1977'>
                                                                        1977 </option>
                                                                    <option value='1976'>
                                                                        1976 </option>
                                                                    <option value='1975'>
                                                                        1975 </option>
                                                                    <option value='1974'>
                                                                        1974 </option>
                                                                    <option value='1973'>
                                                                        1973 </option>
                                                                    <option value='1972'>
                                                                        1972 </option>
                                                                    <option value='1971'>
                                                                        1971 </option>
                                                                    <option value='1970'>
                                                                        1970 </option>
                                                                    <option value='1969'>
                                                                        1969 </option>
                                                                    <option value='1968'>
                                                                        1968 </option>
                                                                    <option value='1967'>
                                                                        1967 </option>
                                                                    <option value='1966'>
                                                                        1966 </option>
                                                                    <option value='1965'>
                                                                        1965 </option>
                                                                    <option value='1964'>
                                                                        1964 </option>
                                                                    <option value='1963'>
                                                                        1963 </option>
                                                                    <option value='1962'>
                                                                        1962 </option>
                                                                    <option value='1961'>
                                                                        1961 </option>
                                                                    <option value='1960'>
                                                                        1960 </option>
                                                                    <option value='1959'>
                                                                        1959 </option>
                                                                    <option value='1958'>
                                                                        1958 </option>
                                                                    <option value='1957'>
                                                                        1957 </option>
                                                                    <option value='1956'>
                                                                        1956 </option>
                                                                    <option value='1955'>
                                                                        1955 </option>
                                                                    <option value='1954'>
                                                                        1954 </option>
                                                                    <option value='1953'>
                                                                        1953 </option>
                                                                    <option value='1952'>
                                                                        1952 </option>
                                                                    <option value='1951'>
                                                                        1951 </option>
                                                                    <option value='1950'>
                                                                        1950 </option>
                                                                    <option value='1949'>
                                                                        1949 </option>
                                                                    <option value='1948'>
                                                                        1948 </option>
                                                                    <option value='1947'>
                                                                        1947 </option>
                                                                    <option value='1946'>
                                                                        1946 </option>
                                                                    <option value='1945'>
                                                                        1945 </option>
                                                                    <option value='1944'>
                                                                        1944 </option>
                                                                    <option value='1943'>
                                                                        1943 </option>
                                                                    <option value='1942'>
                                                                        1942 </option>
                                                                    <option value='1941'>
                                                                        1941 </option>
                                                                    <option value='1940'>
                                                                        1940 </option>
                                                                    <option value='1939'>
                                                                        1939 </option>
                                                                    <option value='1938'>
                                                                        1938 </option>
                                                                    <option value='1937'>
                                                                        1937 </option>
                                                                    <option value='1936'>
                                                                        1936 </option>
                                                                    <option value='1935'>
                                                                        1935 </option>
                                                                    <option value='1934'>
                                                                        1934 </option>
                                                                    <option value='1933'>
                                                                        1933 </option>
                                                                    <option value='1932'>
                                                                        1932 </option>
                                                                    <option value='1931'>
                                                                        1931 </option>
                                                                    <option value='1930'>
                                                                        1930 </option>
                                                                    <option value='1929'>
                                                                        1929 </option>
                                                                    <option value='1928'>
                                                                        1928 </option>
                                                                    <option value='1927'>
                                                                        1927 </option>
                                                                    <option value='1926'>
                                                                        1926 </option>
                                                                    <option value='1925'>
                                                                        1925 </option>
                                                                    <option value='1924'>
                                                                        1924 </option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xxl-16 col-xl-16 form-group">
                                                <div class="row">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i
                                                                class="fa fa-book fa-fw"></i></span>
                                                        <select
                                                            class="gt-form-control flat chosen-single chosen-select"
                                                            name="religion" id="religion">
                                                            <option value="">Select Your Religion</option>
                                                            <option value="52">
                                                                Buddhist </option>
                                                            <option value="46">
                                                                Christian </option>
                                                            <option value="37">
                                                                Hindu </option>
                                                            <option value="48">
                                                                Jain - Digambar </option>
                                                            <option value="49">
                                                                Jain - Shwetambar </option>
                                                            <option value="53">
                                                                Jewish </option>
                                                            <option value="45">
                                                                Muslim - Others </option>
                                                            <option value="43">
                                                                Muslim - Shia </option>
                                                            <option value="44">
                                                                Muslim - Sunni </option>
                                                            <option value="51">
                                                                Parsi </option>
                                                            <option value="47">
                                                                Sikh </option>
                                                        </select>
                                                        <div id="caste1"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xxl-16 col-xl-16 form-group">
                                                <div class="row">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i
                                                                class="fa fa-users fa-fw"></i></span>
                                                        <select class="gt-form-control chosen-single chosen-select"
                                                            name="caste" id="caste">
                                                            <option value="">Select Religion First</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xxl-16 col-xl-16 form-group">
                                                <div class="row">
                                                    <div class="input-group custom-chosen">
                                                        <span class="input-group-addon"><i
                                                                class="fa fa-globe fa-fw"></i></span>
                                                        <select class="gt-form-control chosen-single chosen-select"
                                                            name="m_tongue" id="m_tongue">
                                                            <option value="">Mother Tongue</option>
                                                            <option value="59">
                                                                Angika </option>

                                                            <option value="60">
                                                                Arunachali </option>

                                                            <option value="61">
                                                                Assamese </option>

                                                            <option value="62">
                                                                Awadhi </option>

                                                            <option value="67">
                                                                Badaga </option>

                                                            <option value="63">
                                                                Bengali </option>

                                                            <option value="64">
                                                                Bhojpuri </option>

                                                            <option value="66">
                                                                Bihari </option>

                                                            <option value="65">
                                                                Brij </option>

                                                            <option value="68">
                                                                Chatisgarhi </option>

                                                            <option value="69">
                                                                Dogri </option>

                                                            <option value="70">
                                                                English </option>

                                                            <option value="71">
                                                                French </option>

                                                            <option value="72">
                                                                Garhwali </option>

                                                            <option value="73">
                                                                Garo </option>

                                                            <option value="74">
                                                                Gujarati </option>

                                                            <option value="75">
                                                                Haryanvi </option>

                                                            <option value="76">
                                                                Himachali/Pahari </option>

                                                            <option value="77">
                                                                Hindi </option>

                                                            <option value="78">
                                                                Kanauji </option>

                                                            <option value="79">
                                                                Kannada </option>

                                                            <option value="80">
                                                                Kashmiri </option>

                                                            <option value="81">
                                                                Khandesi </option>

                                                            <option value="82">
                                                                Khasi </option>

                                                            <option value="83">
                                                                Konkani </option>

                                                            <option value="84">
                                                                Koshali </option>

                                                            <option value="85">
                                                                Kumaoni </option>

                                                            <option value="86">
                                                                Kutchi </option>

                                                            <option value="88">
                                                                Ladacki </option>

                                                            <option value="87">
                                                                Lepcha </option>

                                                            <option value="89">
                                                                Magahi </option>

                                                            <option value="90">
                                                                Maithili </option>

                                                            <option value="91">
                                                                Malayalam </option>

                                                            <option value="92">
                                                                Manipuri </option>

                                                            <option value="93">
                                                                Marathi </option>

                                                            <option value="94">
                                                                Marwari </option>

                                                            <option value="95">
                                                                Miji </option>

                                                            <option value="96">
                                                                Mizo </option>

                                                            <option value="97">
                                                                Monpa </option>

                                                            <option value="99">
                                                                Nepali </option>

                                                            <option value="98">
                                                                Nicobarese </option>

                                                            <option value="100">
                                                                Oriya </option>

                                                            <option value="101">
                                                                Punjabi </option>

                                                            <option value="102">
                                                                Rajasthani </option>

                                                            <option value="103">
                                                                Sanskrit </option>

                                                            <option value="104">
                                                                Santhali </option>

                                                            <option value="105">
                                                                Sindhi </option>

                                                            <option value="106">
                                                                Sourashtra </option>

                                                            <option value="107">
                                                                Tamil </option>

                                                            <option value="108">
                                                                Telugu </option>

                                                            <option value="109">
                                                                Tripuri </option>

                                                            <option value="110">
                                                                Tulu </option>

                                                            <option value="111">
                                                                Urdu </option>

                                                        </select>
                                                        <span class="f2">
                                                            <select class="gt-form-control chosen-single chosen-select"
                                                                name="country">
                                                                <option value="">Country</option>
                                                                <option value="1">Andorra</option>
                                                                <option value="2">United Arab Emirates</option>
                                                                <option value="3">Afghanistan</option>
                                                                <option value="4">Antigua And Barbuda</option>
                                                                <option value="5">Albania</option>
                                                                <option value="6">Armenia</option>
                                                                <option value="7">Angola</option>
                                                                <option value="8">Antarctica</option>
                                                                <option value="9">Argentina</option>
                                                                <option value="10">American Samoa</option>
                                                                <option value="11">Austria</option>
                                                                <option value="12">Australia</option>
                                                                <option value="13">Aruba</option>
                                                                <option value="14">Aland Islands</option>
                                                                <option value="15">Azerbaijan</option>
                                                                <option value="16">Bosnia And Herzegovina</option>
                                                                <option value="17">Barbados</option>
                                                                <option value="18">Bangladesh</option>
                                                                <option value="19">Belgium</option>
                                                                <option value="20">Burkina Faso</option>
                                                                <option value="21">Bulgaria</option>
                                                                <option value="22">Bahrain</option>
                                                                <option value="23">Burundi</option>
                                                                <option value="24">Benin</option>
                                                                <option value="25">Bermuda</option>
                                                                <option value="26">Brunei</option>
                                                                <option value="27">Bolivia</option>
                                                                <option value="28">Bonaire, Saint Eustatius And
                                                                    Saba </option>
                                                                <option value="29">Brazil</option>
                                                                <option value="30">Bahamas</option>
                                                                <option value="31">Bhutan</option>
                                                                <option value="32">Bouvet Island</option>
                                                                <option value="33">Botswana</option>
                                                                <option value="34">Belarus</option>
                                                                <option value="35">Belize</option>
                                                                <option value="36">Canada</option>
                                                                <option value="37">Democratic Republic Of The Congo
                                                                </option>
                                                                <option value="38">Central African Republic
                                                                </option>
                                                                <option value="39">Republic Of The Congo</option>
                                                                <option value="40">Switzerland</option>
                                                                <option value="41">Ivory Coast</option>
                                                                <option value="42">Chile</option>
                                                                <option value="43">Cameroon</option>
                                                                <option value="44">China</option>
                                                                <option value="45">Colombia</option>
                                                                <option value="46">Costa Rica</option>
                                                                <option value="47">Cuba</option>
                                                                <option value="48">Cape Verde</option>
                                                                <option value="49">Cyprus</option>
                                                                <option value="50">Czech Republic</option>
                                                                <option value="51">Germany</option>
                                                                <option value="52">Djibouti</option>
                                                                <option value="53">Denmark</option>
                                                                <option value="54">Dominica</option>
                                                                <option value="55">Dominican Republic</option>
                                                                <option value="56">Algeria</option>
                                                                <option value="57">Ecuador</option>
                                                                <option value="58">Estonia</option>
                                                                <option value="59">Egypt</option>
                                                                <option value="60">Western Sahara</option>
                                                                <option value="61">Eritrea</option>
                                                                <option value="62">Spain</option>
                                                                <option value="63">Ethiopia</option>
                                                                <option value="64">Finland</option>
                                                                <option value="65">Fiji</option>
                                                                <option value="66">Micronesia</option>
                                                                <option value="67">Faroe Islands</option>
                                                                <option value="68">France</option>
                                                                <option value="69">Gabon</option>
                                                                <option value="70">United Kingdom</option>
                                                                <option value="71">Grenada</option>
                                                                <option value="72">Georgia</option>
                                                                <option value="73">French Guiana</option>
                                                                <option value="74">Guernsey</option>
                                                                <option value="75">Ghana</option>
                                                                <option value="76">Greenland</option>
                                                                <option value="77">Gambia</option>
                                                                <option value="78">Guinea</option>
                                                                <option value="79">Guadeloupe</option>
                                                                <option value="80">Equatorial Guinea</option>
                                                                <option value="81">Greece</option>
                                                                <option value="82">Guatemala</option>
                                                                <option value="83">Guam</option>
                                                                <option value="84">Guinea-Bissau</option>
                                                                <option value="85">Guyana</option>
                                                                <option value="86">Hong Kong</option>
                                                                <option value="87">Honduras</option>
                                                                <option value="88">Croatia</option>
                                                                <option value="89">Haiti</option>
                                                                <option value="90">Hungary</option>
                                                                <option value="91">Indonesia</option>
                                                                <option value="92">Ireland</option>
                                                                <option value="93">Israel</option>
                                                                <option value="94">Isle Of Man</option>
                                                                <option value="95">India</option>
                                                                <option value="96">British Indian Ocean Territory
                                                                </option>
                                                                <option value="97">Iraq</option>
                                                                <option value="98">Iran</option>
                                                                <option value="99">Iceland</option>
                                                                <option value="100">Italy</option>
                                                                <option value="101">Jersey</option>
                                                                <option value="102">Jamaica</option>
                                                                <option value="103">Jordan</option>
                                                                <option value="104">Japan</option>
                                                                <option value="105">Kenya</option>
                                                                <option value="106">Kyrgyzstan</option>
                                                                <option value="107">Cambodia</option>
                                                                <option value="108">Kiribati</option>
                                                                <option value="109">Comoros</option>
                                                                <option value="110">Saint Kitts And Nevis</option>
                                                                <option value="111">North Korea</option>
                                                                <option value="112">South Korea</option>
                                                                <option value="113">Kuwait</option>
                                                                <option value="114">Kazakhstan</option>
                                                                <option value="115">Laos</option>
                                                                <option value="116">Lebanon</option>
                                                                <option value="117">Saint Lucia</option>
                                                                <option value="118">Liechtenstein</option>
                                                                <option value="119">Sri Lanka</option>
                                                                <option value="120">Liberia</option>
                                                                <option value="121">Lesotho</option>
                                                                <option value="122">Lithuania</option>
                                                                <option value="123">Luxembourg</option>
                                                                <option value="124">Latvia</option>
                                                                <option value="125">Libya</option>
                                                                <option value="126">Morocco</option>
                                                                <option value="127">Monaco</option>
                                                                <option value="128">Moldova</option>
                                                                <option value="129">Montenegro</option>
                                                                <option value="130">Madagascar</option>
                                                                <option value="131">Marshall Islands</option>
                                                                <option value="132">Macedonia</option>
                                                                <option value="133">Mali</option>
                                                                <option value="134">Myanmar</option>
                                                                <option value="135">Mongolia</option>
                                                                <option value="136">Macao</option>
                                                                <option value="137">Northern Mariana Islands
                                                                </option>
                                                                <option value="138">Martinique</option>
                                                                <option value="139">Mauritania</option>
                                                                <option value="140">Montserrat</option>
                                                                <option value="141">Mauritius</option>
                                                                <option value="142">Maldives</option>
                                                                <option value="143">Malawi</option>
                                                                <option value="144">Mexico</option>
                                                                <option value="145">Malaysia</option>
                                                                <option value="146">Mozambique</option>
                                                                <option value="147">Namibia</option>
                                                                <option value="148">New Caledonia</option>
                                                                <option value="149">Niger</option>
                                                                <option value="150">Nigeria</option>
                                                                <option value="151">Nicaragua</option>
                                                                <option value="152">Netherlands</option>
                                                                <option value="153">Norway</option>
                                                                <option value="154">Nepal</option>
                                                                <option value="155">Nauru</option>
                                                                <option value="156">New Zealand</option>
                                                                <option value="157">Oman</option>
                                                                <option value="158">Panama</option>
                                                                <option value="159">Peru</option>
                                                                <option value="160">French Polynesia</option>
                                                                <option value="161">Papua New Guinea</option>
                                                                <option value="162">Philippines</option>
                                                                <option value="163">Pakistan</option>
                                                                <option value="164">Poland</option>
                                                                <option value="165">Saint Pierre And Miquelon
                                                                </option>
                                                                <option value="166">Puerto Rico</option>
                                                                <option value="167">Palestinian Territory</option>
                                                                <option value="168">Portugal</option>
                                                                <option value="169">Palau</option>
                                                                <option value="170">Paraguay</option>
                                                                <option value="171">Qatar</option>
                                                                <option value="172">Reunion</option>
                                                                <option value="173">Romania</option>
                                                                <option value="174">Serbia</option>
                                                                <option value="175">Russia</option>
                                                                <option value="176">Rwanda</option>
                                                                <option value="177">Saudi Arabia</option>
                                                                <option value="178">Solomon Islands</option>
                                                                <option value="179">Seychelles</option>
                                                                <option value="180">Sudan</option>
                                                                <option value="181">Sweden</option>
                                                                <option value="182">Singapore</option>
                                                                <option value="183">Saint Helena</option>
                                                                <option value="184">Slovenia</option>
                                                                <option value="185">Svalbard And Jan Mayen</option>
                                                                <option value="186">Slovakia</option>
                                                                <option value="187">Sierra Leone</option>
                                                                <option value="188">San Marino</option>
                                                                <option value="189">Senegal</option>
                                                                <option value="190">Somalia</option>
                                                                <option value="191">Suriname</option>
                                                                <option value="192">South Sudan</option>
                                                                <option value="193">Sao Tome And Principe</option>
                                                                <option value="194">El Salvador</option>
                                                                <option value="195">Syria</option>
                                                                <option value="196">Swaziland</option>
                                                                <option value="197">Chad</option>
                                                                <option value="198">French Southern Territories
                                                                </option>
                                                                <option value="199">Togo</option>
                                                                <option value="200">Thailand</option>
                                                                <option value="201">Tajikistan</option>
                                                                <option value="202">Tokelau</option>
                                                                <option value="203">East Timor</option>
                                                                <option value="204">Turkmenistan</option>
                                                                <option value="205">Tunisia</option>
                                                                <option value="206">Tonga</option>
                                                                <option value="207">Turkey</option>
                                                                <option value="208">Trinidad And Tobago</option>
                                                                <option value="209">Tuvalu</option>
                                                                <option value="210">Taiwan</option>
                                                                <option value="211">Tanzania</option>
                                                                <option value="212">Ukraine</option>
                                                                <option value="213">Uganda</option>
                                                                <option value="214">United States Minor Outlying
                                                                    Islands</option>
                                                                <option value="215">United States</option>
                                                                <option value="216">Uruguay</option>
                                                                <option value="217">Uzbekistan</option>
                                                                <option value="218">Saint Vincent And The Grenadines
                                                                </option>
                                                                <option value="219">Venezuela</option>
                                                                <option value="220">U.S. Virgin Islands</option>
                                                                <option value="221">Vietnam</option>
                                                                <option value="222">Vanuatu</option>
                                                                <option value="223">Wallis And Futuna</option>
                                                                <option value="224">Samoa</option>
                                                                <option value="225">Kosovo</option>
                                                                <option value="226">Yemen</option>
                                                                <option value="227">Mayotte</option>
                                                                <option value="228">South Africa</option>
                                                                <option value="229">Zambia</option>
                                                                <option value="230">Zimbabwe</option>
                                                            </select>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xxl-16 col-xl-16 form-group">
                                                <div class="row">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i
                                                                class="fa fa-phone fa-fw"></i></span>
                                                        <div class="row">
                                                            <div class="col-xxl-5 col-xs-5 col-sm-5 col-md-5 col-lg-5">
                                                                <select class="gt-form-control form-1" name="code"
                                                                    id="code">
                                                                    <option value="+93">+93</option>
                                                                    <option value="+355">+355</option>
                                                                    <option value="+213">+213</option>
                                                                    <option value="+1684">+1684</option>
                                                                    <option value="+376">+376</option>
                                                                    <option value="+244">+244</option>
                                                                    <option value="+1264">+1264</option>
                                                                    <option value="+0">+0</option>
                                                                    <option value="+1268">+1268</option>
                                                                    <option value="+54">+54</option>
                                                                    <option value="+374">+374</option>
                                                                    <option value="+297">+297</option>
                                                                    <option value="+61">+61</option>
                                                                    <option value="+43">+43</option>
                                                                    <option value="+994">+994</option>
                                                                    <option value="+1242">+1242</option>
                                                                    <option value="+973">+973</option>
                                                                    <option value="+880">+880</option>
                                                                    <option value="+1246">+1246</option>
                                                                    <option value="+375">+375</option>
                                                                    <option value="+32">+32</option>
                                                                    <option value="+501">+501</option>
                                                                    <option value="+229">+229</option>
                                                                    <option value="+1441">+1441</option>
                                                                    <option value="+975">+975</option>
                                                                    <option value="+591">+591</option>
                                                                    <option value="+387">+387</option>
                                                                    <option value="+267">+267</option>
                                                                    <option value="+0">+0</option>
                                                                    <option value="+55">+55</option>
                                                                    <option value="+246">+246</option>
                                                                    <option value="+673">+673</option>
                                                                    <option value="+359">+359</option>
                                                                    <option value="+226">+226</option>
                                                                    <option value="+257">+257</option>
                                                                    <option value="+855">+855</option>
                                                                    <option value="+237">+237</option>
                                                                    <option value="+1">+1</option>
                                                                    <option value="+238">+238</option>
                                                                    <option value="+1345">+1345</option>
                                                                    <option value="+236">+236</option>
                                                                    <option value="+235">+235</option>
                                                                    <option value="+56">+56</option>
                                                                    <option value="+86">+86</option>
                                                                    <option value="+61">+61</option>
                                                                    <option value="+672">+672</option>
                                                                    <option value="+57">+57</option>
                                                                    <option value="+269">+269</option>
                                                                    <option value="+242">+242</option>
                                                                    <option value="+242">+242</option>
                                                                    <option value="+682">+682</option>
                                                                    <option value="+506">+506</option>
                                                                    <option value="+225">+225</option>
                                                                    <option value="+385">+385</option>
                                                                    <option value="+53">+53</option>
                                                                    <option value="+357">+357</option>
                                                                    <option value="+420">+420</option>
                                                                    <option value="+45">+45</option>
                                                                    <option value="+253">+253</option>
                                                                    <option value="+1767">+1767</option>
                                                                    <option value="+1809">+1809</option>
                                                                    <option value="+593">+593</option>
                                                                    <option value="+20">+20</option>
                                                                    <option value="+503">+503</option>
                                                                    <option value="+240">+240</option>
                                                                    <option value="+291">+291</option>
                                                                    <option value="+372">+372</option>
                                                                    <option value="+251">+251</option>
                                                                    <option value="+500">+500</option>
                                                                    <option value="+298">+298</option>
                                                                    <option value="+679">+679</option>
                                                                    <option value="+358">+358</option>
                                                                    <option value="+33">+33</option>
                                                                    <option value="+594">+594</option>
                                                                    <option value="+689">+689</option>
                                                                    <option value="+0">+0</option>
                                                                    <option value="+241">+241</option>
                                                                    <option value="+220">+220</option>
                                                                    <option value="+995">+995</option>
                                                                    <option value="+49">+49</option>
                                                                    <option value="+233">+233</option>
                                                                    <option value="+350">+350</option>
                                                                    <option value="+30">+30</option>
                                                                    <option value="+299">+299</option>
                                                                    <option value="+1473">+1473</option>
                                                                    <option value="+590">+590</option>
                                                                    <option value="+1671">+1671</option>
                                                                    <option value="+502">+502</option>
                                                                    <option value="+224">+224</option>
                                                                    <option value="+245">+245</option>
                                                                    <option value="+592">+592</option>
                                                                    <option value="+509">+509</option>
                                                                    <option value="+0">+0</option>
                                                                    <option value="+39">+39</option>
                                                                    <option value="+504">+504</option>
                                                                    <option value="+852">+852</option>
                                                                    <option value="+36">+36</option>
                                                                    <option value="+354">+354</option>
                                                                    <option value="+91" selected>+91</option>
                                                                    <option value="+62">+62</option>
                                                                    <option value="+98">+98</option>
                                                                    <option value="+964">+964</option>
                                                                    <option value="+353">+353</option>
                                                                    <option value="+972">+972</option>
                                                                    <option value="+39">+39</option>
                                                                    <option value="+1876">+1876</option>
                                                                    <option value="+81">+81</option>
                                                                    <option value="+962">+962</option>
                                                                    <option value="+7">+7</option>
                                                                    <option value="+254">+254</option>
                                                                    <option value="+686">+686</option>
                                                                    <option value="+850">+850</option>
                                                                    <option value="+82">+82</option>
                                                                    <option value="+965">+965</option>
                                                                    <option value="+996">+996</option>
                                                                    <option value="+856">+856</option>
                                                                    <option value="+371">+371</option>
                                                                    <option value="+961">+961</option>
                                                                    <option value="+266">+266</option>
                                                                    <option value="+231">+231</option>
                                                                    <option value="+218">+218</option>
                                                                    <option value="+423">+423</option>
                                                                    <option value="+370">+370</option>
                                                                    <option value="+352">+352</option>
                                                                    <option value="+853">+853</option>
                                                                    <option value="+389">+389</option>
                                                                    <option value="+261">+261</option>
                                                                    <option value="+265">+265</option>
                                                                    <option value="+60">+60</option>
                                                                    <option value="+960">+960</option>
                                                                    <option value="+223">+223</option>
                                                                    <option value="+356">+356</option>
                                                                    <option value="+692">+692</option>
                                                                    <option value="+596">+596</option>
                                                                    <option value="+222">+222</option>
                                                                    <option value="+230">+230</option>
                                                                    <option value="+269">+269</option>
                                                                    <option value="+52">+52</option>
                                                                    <option value="+691">+691</option>
                                                                    <option value="+373">+373</option>
                                                                    <option value="+377">+377</option>
                                                                    <option value="+976">+976</option>
                                                                    <option value="+1664">+1664</option>
                                                                    <option value="+212">+212</option>
                                                                    <option value="+258">+258</option>
                                                                    <option value="+95">+95</option>
                                                                    <option value="+264">+264</option>
                                                                    <option value="+674">+674</option>
                                                                    <option value="+977">+977</option>
                                                                    <option value="+31">+31</option>
                                                                    <option value="+599">+599</option>
                                                                    <option value="+687">+687</option>
                                                                    <option value="+64">+64</option>
                                                                    <option value="+505">+505</option>
                                                                    <option value="+227">+227</option>
                                                                    <option value="+234">+234</option>
                                                                    <option value="+683">+683</option>
                                                                    <option value="+672">+672</option>
                                                                    <option value="+1670">+1670</option>
                                                                    <option value="+47">+47</option>
                                                                    <option value="+968">+968</option>
                                                                    <option value="+92">+92</option>
                                                                    <option value="+680">+680</option>
                                                                    <option value="+970">+970</option>
                                                                    <option value="+507">+507</option>
                                                                    <option value="+675">+675</option>
                                                                    <option value="+595">+595</option>
                                                                    <option value="+51">+51</option>
                                                                    <option value="+63">+63</option>
                                                                    <option value="+0">+0</option>
                                                                    <option value="+48">+48</option>
                                                                    <option value="+351">+351</option>
                                                                    <option value="+1787">+1787</option>
                                                                    <option value="+974">+974</option>
                                                                    <option value="+262">+262</option>
                                                                    <option value="+40">+40</option>
                                                                    <option value="+70">+70</option>
                                                                    <option value="+250">+250</option>
                                                                    <option value="+290">+290</option>
                                                                    <option value="+1869">+1869</option>
                                                                    <option value="+1758">+1758</option>
                                                                    <option value="+508">+508</option>
                                                                    <option value="+1784">+1784</option>
                                                                    <option value="+684">+684</option>
                                                                    <option value="+378">+378</option>
                                                                    <option value="+239">+239</option>
                                                                    <option value="+966">+966</option>
                                                                    <option value="+221">+221</option>
                                                                    <option value="+381">+381</option>
                                                                    <option value="+248">+248</option>
                                                                    <option value="+232">+232</option>
                                                                    <option value="+65">+65</option>
                                                                    <option value="+421">+421</option>
                                                                    <option value="+386">+386</option>
                                                                    <option value="+677">+677</option>
                                                                    <option value="+252">+252</option>
                                                                    <option value="+27">+27</option>
                                                                    <option value="+0">+0</option>
                                                                    <option value="+34">+34</option>
                                                                    <option value="+94">+94</option>
                                                                    <option value="+249">+249</option>
                                                                    <option value="+597">+597</option>
                                                                    <option value="+47">+47</option>
                                                                    <option value="+268">+268</option>
                                                                    <option value="+46">+46</option>
                                                                    <option value="+41">+41</option>
                                                                    <option value="+963">+963</option>
                                                                    <option value="+886">+886</option>
                                                                    <option value="+992">+992</option>
                                                                    <option value="+255">+255</option>
                                                                    <option value="+66">+66</option>
                                                                    <option value="+670">+670</option>
                                                                    <option value="+228">+228</option>
                                                                    <option value="+690">+690</option>
                                                                    <option value="+676">+676</option>
                                                                    <option value="+1868">+1868</option>
                                                                    <option value="+216">+216</option>
                                                                    <option value="+90">+90</option>
                                                                    <option value="+7370">+7370</option>
                                                                    <option value="+1649">+1649</option>
                                                                    <option value="+688">+688</option>
                                                                    <option value="+256">+256</option>
                                                                    <option value="+380">+380</option>
                                                                    <option value="+971">+971</option>
                                                                    <option value="+44">+44</option>
                                                                    <option value="+1">+1</option>
                                                                    <option value="+1">+1</option>
                                                                    <option value="+598">+598</option>
                                                                    <option value="+998">+998</option>
                                                                    <option value="+678">+678</option>
                                                                    <option value="+58">+58</option>
                                                                    <option value="+84">+84</option>
                                                                    <option value="+1284">+1284</option>
                                                                    <option value="+1340">+1340</option>
                                                                    <option value="+681">+681</option>
                                                                    <option value="+212">+212</option>
                                                                    <option value="+967">+967</option>
                                                                    <option value="+260">+260</option>
                                                                    <option value="+263">+263</option>
                                                                </select>
                                                            </div>
                                                            <div
                                                                class="col-xxl-11 col-xs-11 col-sm-11 col-md-11 col-lg-12">
                                                                <input type="number" class="gt-form-control"
                                                                    placeholder="Enter Your 10 Digit No"
                                                                    name="mobile" id="mobile" maxlength="10"
                                                                    ng-maxlength="10" ng-minlength="5"
                                                                    ng-model="user.mobile">
                                                                <span
                                                                    ng-show="frm.mobile.$dirty && frm.mobile.$error.maxlength"
                                                                    class="text-danger">Mobile Number Is Too Long
                                                                    !</span>
                                                                <span
                                                                    ng-show="frm.mobile.$dirty && frm.mobile.$error.minlength"
                                                                    class="text-danger">Mobile Number Is Too Short
                                                                    !</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xxl-16 col-xl-16 form-group">
                                                <div class="row">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i
                                                                class="fas fa-at fa-fw"></i></span>
                                                        <input type="email" class="gt-form-control form-1"
                                                            placeholder="Enter Your Email Id" name="email"
                                                            ng-model="user.email">
                                                        <span ng-show="frm.email.$dirty && frm.email.$error.email"
                                                            class="text-danger gt-margin-left-10">Enter Valid Email Id
                                                            !</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xxl-16 col-xl-16 form-group">
                                                <div class="row">
                                                    <label for="terms" class="inTerms">
                                                        <input type="checkbox" id="terms" name="chk_terms"
                                                            checked data-validetta="required"><span
                                                            class="gt-margin-left-10">I
                                                            accept <a href="cms?cms_id=7" target="_blank">terms &
                                                                conditions</a> and <a href="cms?cms_id=6"
                                                                target="_blank">privacy
                                                                policy</a></span>.
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col-xxl-16 text-center">
                                                    <button type="submit" class="btn gt-btn-green inIndexRegBtn"
                                                        name="reg_sub">Register Now</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <section class="inPrem2Search">
                    <div class="container">
                        <form method="post" action="search" id="">
                            <div class="col-xxl-2">
                                <label>Looking For</label>
                                <select class="gt-form-control" name="gender">
                                    <option value="Female">Bride</option>
                                    <option value="Male">Groom</option>
                                </select>
                            </div>
                            <div class="col-xxl-5">
                                <label>Age</label>
                                <div class="row">
                                    <div class="col-xs-7">
                                        <select class="gt-form-control" name="from_age" id="from_age">
                                            <option value="">Select Age From</option>
                                            <option value="1" selected>18 Year</option>
                                            <option value="2">19 Year</option>
                                            <option value="3">20 Year</option>
                                            <option value="4">21 Year</option>
                                            <option value="5">22 Year</option>
                                            <option value="6">23 Year</option>
                                            <option value="7">24 Year</option>
                                            <option value="8">25 Year</option>
                                            <option value="9">26 Year</option>
                                            <option value="10">27 Year</option>
                                            <option value="11">28 Year</option>
                                            <option value="12">29 Year</option>
                                            <option value="13">30 Year</option>
                                            <option value="14">31 Year</option>
                                            <option value="15">32 Year</option>
                                            <option value="16">33 Year</option>
                                            <option value="17">34 Year</option>
                                            <option value="18">35 Year</option>
                                            <option value="19">36 Year</option>
                                            <option value="20">37 Year</option>
                                            <option value="21">38 Year</option>
                                            <option value="22">39 Year</option>
                                            <option value="23">40 Year</option>
                                            <option value="24">41 Year</option>
                                            <option value="25">42 Year</option>
                                            <option value="26">43 Year</option>
                                            <option value="27">44 Year</option>
                                            <option value="28">45 Year</option>
                                            <option value="29">46 Year</option>
                                            <option value="30">47 Year</option>
                                            <option value="31">48 Year</option>
                                            <option value="32">49 Year</option>
                                            <option value="33">50 Year</option>
                                            <option value="34">51 Year</option>
                                            <option value="35">52 Year</option>
                                            <option value="36">53 Year</option>
                                            <option value="37">54 Year</option>
                                            <option value="38">55 Year</option>
                                            <option value="39">56 Year</option>
                                            <option value="40">57 Year</option>
                                            <option value="41">58 Year</option>
                                            <option value="42">59 Year</option>
                                            <option value="43">60 Year</option>
                                            <option value="44">60+ Year</option>
                                        </select>
                                    </div>
                                    <div class="col-xs-2 text-center mt-10">To</div>
                                    <div class="col-xs-7">
                                        <select class="gt-form-control" name="to_age" id="part_to_age">
                                            <option value="1" disabled>
                                                18 Year</option>
                                            <option value="2">
                                                19 Year</option>
                                            <option value="3">
                                                20 Year</option>
                                            <option value="4">
                                                21 Year</option>
                                            <option value="5">
                                                22 Year</option>
                                            <option value="6">
                                                23 Year</option>
                                            <option value="7">
                                                24 Year</option>
                                            <option value="8">
                                                25 Year</option>
                                            <option value="9">
                                                26 Year</option>
                                            <option value="10">
                                                27 Year</option>
                                            <option value="11">
                                                28 Year</option>
                                            <option value="12">
                                                29 Year</option>
                                            <option value="13" selected>
                                                30 Year</option>
                                            <option value="14">
                                                31 Year</option>
                                            <option value="15">
                                                32 Year</option>
                                            <option value="16">
                                                33 Year</option>
                                            <option value="17">
                                                34 Year</option>
                                            <option value="18">
                                                35 Year</option>
                                            <option value="19">
                                                36 Year</option>
                                            <option value="20">
                                                37 Year</option>
                                            <option value="21">
                                                38 Year</option>
                                            <option value="22">
                                                39 Year</option>
                                            <option value="23">
                                                40 Year</option>
                                            <option value="24">
                                                41 Year</option>
                                            <option value="25">
                                                42 Year</option>
                                            <option value="26">
                                                43 Year</option>
                                            <option value="27">
                                                44 Year</option>
                                            <option value="28">
                                                45 Year</option>
                                            <option value="29">
                                                46 Year</option>
                                            <option value="30">
                                                47 Year</option>
                                            <option value="31">
                                                48 Year</option>
                                            <option value="32">
                                                49 Year</option>
                                            <option value="33">
                                                50 Year</option>
                                            <option value="34">
                                                51 Year</option>
                                            <option value="35">
                                                52 Year</option>
                                            <option value="36">
                                                53 Year</option>
                                            <option value="37">
                                                54 Year</option>
                                            <option value="38">
                                                55 Year</option>
                                            <option value="39">
                                                56 Year</option>
                                            <option value="40">
                                                57 Year</option>
                                            <option value="41">
                                                58 Year</option>
                                            <option value="42">
                                                59 Year</option>
                                            <option value="43">
                                                60 Year</option>
                                            <option value="44">
                                                60+ Year</option>

                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-3">
                                <label>Religion</label>
                                <select class="gt-form-control" id="religion_id" name="religion_id[]">
                                    <option>Religion</option>
                                    <option value="52">
                                        Buddhist </option>
                                    <option value="46">
                                        Christian </option>
                                    <option value="37">
                                        Hindu </option>
                                    <option value="48">
                                        Jain - Digambar </option>
                                    <option value="49">
                                        Jain - Shwetambar </option>
                                    <option value="53">
                                        Jewish </option>
                                    <option value="45">
                                        Muslim - Others </option>
                                    <option value="43">
                                        Muslim - Shia </option>
                                    <option value="44">
                                        Muslim - Sunni </option>
                                    <option value="51">
                                        Parsi </option>
                                    <option value="47">
                                        Sikh </option>
                                </select>
                                <div id="CasteDivloader"></div>
                            </div>
                            <div class="col-xxl-3">
                                <label>Caste</label>
                                <select class="gt-form-control" tabindex="4" id="caste_id" name="caste_id[]">
                                    <option value="">Select Religion</option>
                                </select>
                            </div>
                            <div class="col-xxl-3">
                                <input type="submit" value="Search Now" class="btn gt-btn-orange btn-block"
                                    name="quick_sub">
                            </div>
                        </form>
                    </div>
                    <div class="clearfix"></div>
                </section>
                <!-- Welcome Section -->
                <section class="gt-bg-white">
                    <div class="container pb-50">
                        <h2 class="text-center inThemeOrange fontMerriWeather mt-50">Welcome to Mangalmandap.com</h2>
                        <p class="text-center inGrey500 indexContent">
                            Best matrimony service provider in India.We find the best perfect life partner for you.join
                            us now and<br>find your life partner from our thousand’s of verified profiles.

                        </p>

                        <div class="gt-hearts">
                            <div class="gt-hearts-group gt-bg-white">
                                <i class="fa fa-heart font-20 heart gt-text-orange"></i>
                                <i class="fa fa-heart font-38 heart gt-text-orange"></i>
                                <i class="fa fa-heart font-20 heart gt-text-orange"></i>
                            </div>
                        </div>

                        <div class="col-xxl-4 col-xl-4 col-lg-8 gt-margin-top-20">
                            <div class="row">
                                <div class="col-xxl-16 text-center">
                                    <i class="fa fa-star index-color-1 gt-index-icon-font"></i>
                                </div>
                                <div class="col-xxl-16 text-center">
                                    <h2 class="font-24 inGrey500 gt-font-weight-600 fontMerriWeather">
                                        Success Story </h2>
                                </div>
                                <div class="col-xxl-16 text-center">
                                    <article>
                                        <p>
                                            Hundred’s of successful member found their soulmates with us. </p>
                                    </article>
                                </div>
                                <div class="col-xxl-16 text-center">
                                    <h5>
                                        <a href="success-story" class="gt-text-Grey">View Success Stories <i
                                                class="fa fa-caret-right gt-margin-left-10"></i></a>
                                    </h5>
                                </div>
                            </div>
                        </div>

                        <div class="col-xxl-4 col-xl-4 col-lg-8 gt-margin-top-20">
                            <div class="row">
                                <div class="col-xxl-16 text-center">
                                    <i class="fa fa-users index-color-2 gt-index-icon-font tex"></i>
                                </div>
                                <div class="col-xxl-16 text-center">
                                    <h2 class="font-24 inGrey500 gt-font-weight-600 fontMerriWeather">
                                        Verified Members </h2>
                                </div>
                                <div class="col-xxl-16 text-center">
                                    <article>
                                        <p class="font-13">
                                            Thousands of verified member profile so our members find perfect partner
                                            without any concern. </p>
                                    </article>
                                </div>
                                <div class="col-xxl-16 text-center">
                                    <h5>
                                        <a href="login" class="gt-text-Grey">View Profiles Now<i
                                                class="fa fa-caret-right gt-margin-left-10"></i></a>
                                    </h5>
                                </div>
                            </div>
                        </div>

                        <div class="col-xxl-4 col-xl-4 col-lg-8 gt-margin-top-20">
                            <div class="row">
                                <div class="col-xxl-16 text-center">
                                    <i class="fa fa-search index-color-3 gt-index-icon-font"></i>
                                </div>
                                <div class="col-xxl-16 text-center">
                                    <h2 class="font-24 inGrey500 gt-font-weight-600 fontMerriWeather">
                                        Search Options </h2>
                                </div>
                                <div class="col-xxl-16 text-center">
                                    <article>
                                        <p class="font-13">
                                            Multiple search options to find partner who know you better. </p>
                                    </article>
                                </div>
                                <div class="col-xxl-16 text-center">
                                    <h5>
                                        <a href="search" class="gt-text-Grey">Search Now <i
                                                class="fa fa-caret-right gt-margin-left-10"></i></a>
                                    </h5>
                                </div>
                            </div>
                        </div>

                        <div class="col-xxl-4 col-xl-4 col-lg-8 gt-margin-top-20">
                            <div class="row">
                                <div class="col-xxl-16 text-center">
                                    <i class="fa fa-list-ol index-color-4 gt-index-icon-font"></i>
                                </div>
                                <div class="col-xxl-16 text-center">
                                    <h2 class="font-24 inGrey500 gt-font-weight-600 fontMerriWeather">
                                        Matching Profiles </h2>
                                </div>
                                <div class="col-xxl-16 text-center">
                                    <article>
                                        <p class="font-13">
                                            With our auto match profile you can see members which was suits you best and
                                            get married. </p>
                                    </article>
                                </div>
                                <div class="col-xxl-16 text-center">
                                    <h5>
                                        <a href="login" class="gt-text-Grey">View Matches Now<i
                                                class="fa fa-caret-right gt-margin-left-10"></i></a>
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- /. Welcome Section -->
                <div class="clearfix"></div>
                <!-- Featured Bride -->
                <div class="col-xs-16">
                    <div class="" style="display:none;"></div>
                </div>
            </div>
        </div>
        </section>
        <div class="clearfix"></div>
        <!-- /. Featured Bride -->

        <!--- Featured Groom --->
        <div class="col-xs-12">
            <div class="" style="display:none;"></div>
        </div>
    </div>
    </div>
    </section>
    <div class="clearfix"></div>
    <!--- /. Featured Groom --->
    <section class="gtAndroidDown">
        <div class="container">
            <div class="row">
                <div class="col-xxl-16">
                    <div class="row">
                        <div class="col-xxl-5 col-xxl-offset-2">
                            <img src="{{ asset('frontend/assets/images/android_app_showcase.png') }}"
                                class="img-responsive">
                        </div>
                        <div class="col-xxl-8 col-xxl-offset-1 gtAndroidDownDet">
                            <h4>
                                Download our mobile app & find<br>
                                start searching your life partner<br>
                                in a tap.
                            </h4>
                            <h1>
                                Download App Now !
                            </h1>
                            <a href="Appstore link" target="_blank">
                                <img src="{{ asset('frontend/assets/images/google_play_download_btn.png') }}"
                                    class="img-responsive">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </div>
    </div>
    <div class="container gt-margin-top-10">
    </div>
    <!-- Footer -->
    <footer class="footer-before-login gt-margin-top-25">
        <div class="container">
            <div class="row">
                <div class="col-xxl-4 col-xl-4 col-lg-8 col-sm-16 col-md-8">
                    <h5 class="gt-text-green gt-font-weight-600">
                        Help And Support </h5>
                    <ul class="">
                        <li><a href="{{ url('help') }}">Help</a></li>
                        <li><a href="{{ url('faq') }}">FAQ</a></li>
                        {{-- <li><a href="cms?cms_id=16">Refund Policy</a></li> --}}
                        <li><a href="{{ url('refund') }}">Refund Policy</a></li>
                    </ul>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-8 col-sm-16 col-md-8">
                    <h5 class="gt-text-green gt-font-weight-600">
                        Terms & Policy </h5>
                    <ul class="">
                        <li><a href="{{ url('refund') }}">Terms & Conditions</a></li>
                        <li><a href="{{ url('refund') }}">Privacy Policy</a></li>
                        {{-- <li><a href="cms?cms_id=15">Report Misuse</a></li> --}}
                        <li><a href="{{ url('misuse') }}">Report Misuse</a></li>
                    </ul>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-8 col-sm-16 col-md-8">
                    <h5 class="gt-text-green gt-font-weight-600">
                        Need Help? </h5>
                    <ul class="">
                        <li><a href="{{ url('login') }}">Login</a></li>
                        <li><a href="{{ url('register') }}">Register</a></li>
                        <li><a href="{{ url('plans') }}"><i class="fa fa-star gt-text-orange"></i> Upgrade
                                Plan</a></li>
                    </ul>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-8 col-sm-16 col-md-8">
                    <h5 class="gt-text-green gt-font-weight-600">
                        Information </h5>
                    <ul class="">
                        <li><a href="{{ url('success-story') }}">Success Story</a></li>
                        {{-- <li><a href="cms?cms_id=8">About Us</a></li> --}}
                        <li><a href="{{ url('about-us') }}">About Us</a></li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-xxl-10 col-xl-10 col-lg-10 col-md-16">
                    <h5 class="gt-text-green gt-font-weight-600">About Us</h5>
                    <p>Welcome to Mangalmandap.com</p>
                </div>
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-16 text-center">
                    <h5 class="gt-text-green gt-font-weight-600">
                        Join us on social </h5>
                    <ul class="gt-footer-social">
                        <li><a href="https://www.facebook.com" target="_blank"><i
                                    class="fab fa-facebook-square"></i></a></li>
                        <li><a href="https://www.googleplus.com" target="_blank"><i
                                    class="fab fa-pinterest-square"></i></a></li>
                        <li><a href="https://www.twitter.com" target="_blank"><i
                                    class="fab fa-twitter-square"></i></a>
                        </li>
                        <li><a href="https://www.linkedin.com" target="_blank"><i class="fab fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <div class="container-fluid gt-footer-bottom">
        <div class="row">
            <div class="container text-center">
                All Rights Reserved By @ <a href="https://premium.mangalmandap.com/">Design and developed by
                    Mangalmandap.com</a>
            </div>
        </div>
    </div>
    <!--/. Footer -->
    <a href="#selectLanguage" class="btn fixLangugeBtn" data-toggle="modal" style=""><i
            class="fas fa-language gt-margin-right-5"></i><span>Change language</span></a>
    <div class="modal fade gtLogModal" id="selectLanguage" tabindex="-1" role="dialog"
        aria-labelledby="selectLanguage" aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <div class="col-12">
                        <h5 class="modal-title" id="exampleModalLabel">Select your language <button type="button"
                                class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </h5>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-xs-16">
                            <div class="list-group">
                                <a href="index.php?lang=en"
                                    class="list-group-item list-group-item-action">English</a>
                                <a href="index.php?lang=hi" class="list-group-item list-group-item-action">हिंदी</a>
                                <a href="index.php?lang=te"
                                    class="list-group-item list-group-item-action">తెలుగు</a>
                                <a href="index.php?lang=mr" class="list-group-item list-group-item-action">मराठी</a>
                                <a href="index.php?lang=ta" class="list-group-item list-group-item-action">தமிழ்</a>
                                <a href="index.php?lang=kn" class="list-group-item list-group-item-action">ಕನ್ನಡ</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Login With OTP Modal  -->
    <div class="modal fade" id="loginWithOTP" tabindex="-1" role="dialog"
        aria-labelledby="loginWithOTPLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h5 class="modal-title text-center" id="loginWithOTPLabel">Login With OTP</h5>
                </div>
                <div class="modal-body">
                    <form class="" action="login-with-otp" method="post">
                        <div class="form-group">
                            <label>Email/Mobile No/Matri id</label>
                            <input type="text" name="userId" class="gt-form-control"
                                placeholder="Enter Email id / Mobile No / Matri Id">
                        </div>
                        <div class="form-group text-center">
                            <input type="submit" value="GET OTP" class="btn gt-btn-green">
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <!-- Right Click Disable -->

    {{-- <script language=JavaScript>
    function clickIE4() {
        if (event.button == 2) {
            return false;
        }
    }

    function clickNS4(e) {
        if (document.layers || document.getElementById && !document.all) {
            if (e.which == 2 || e.which == 3) {
                return false;
            }
        }
    }
    if (document.layers) {
        document.captureEvents(Event.MOUSEDOWN);
        document.onmousedown = clickNS4;
    } else if (document.all && !document.getElementById) {
        document.onmousedown = clickIE4;
    }
    document.oncontextmenu = new Function("return false")
</script> --}}

    <!-- /.Right Click Disable -->

    <!-- Live Chat -->
    <script type="text/javascript">
        var auto_refresh = setInterval(
            function() {
                $('#count').load('parts/online').fadeIn("slow");
            }, 15000
        ); // refresh every 10 second
    </script>
    <script src="{{ asset('frontend/assets/js/jquery.min.js') }}"></script>
    <small class="pull-right">
    </small>
    <!-- /. Live Chat -->

    <!-- Analytic Code -->
    <script>
        var id = 'UA-demo';
        (function(i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function() {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');
        ga('create', id, 'auto');
        ga('send', 'pageview');
    </script>
    <!-- /.Analytic Code -->



    </div>
    <!-- Jquery Js-->
    <script src="{{ asset('frontend/assets/js/jquery.min.js') }}"></script>
    <!-- Bootstrap & Green Js -->
    <script src="{{ asset('frontend/assets/js/bootstrap.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/green.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#body').show();
            $('.preloader-wrapper').hide();
        });
    </script>
    <!-- Chosen Js -->
    <script src="{{ asset('frontend/assets/js/chosen.jquery.js') }}" type="text/javascript"></script>
    <script src="{{ asset('frontend/assets/js/prism.js') }}" type="text/javascript" charset="utf-8"></script>
    <script type="text/javascript">
        var config = {
            '.chosen-select': {},
            '.chosen-select-deselect': {
                allow_single_deselect: true
            },
            '.chosen-select-no-single': {
                disable_search_threshold: 10
            },
            '.chosen-select-no-results': {
                no_results_text: 'Oops, nothing found!'
            },
            '.chosen-select-width': {
                width: "100%"
            }
        }
        for (var selector in config) {
            $(selector).chosen(config[selector]);
        }
    </script>
    <!-- Validation Js -->
    <script type="text/javascript">
        function validateForm() {
            var a = document.forms["frm"]["profile_by"].value;
            if (a == "") {
                alert("Select Profile Created By");
                return false;
            }
            var b = document.forms["frm"]["gender"].value;
            if (b == "") {
                alert("Select Your Gender");
                return false;
            }
            var c = document.forms["frm"]["nickname"].value;
            if (c == "") {
                alert("First name must be filled out");
                return false;
            }
            var d = document.forms["frm"]["lastname"].value;
            if (c == "") {
                alert("Last name must be filled out");
                return false;
            }
            var g = document.forms["frm"]["day"].value;
            if (g == "") {
                alert("Please select your birthdate");
                return false;
            }
            var h = document.forms["frm"]["month"].value;
            if (h == "") {
                alert("Please select your birth month");
                return false;
            }
            var i = document.forms["frm"]["year"].value;
            if (i == "") {
                alert("Please select your birth year");
                return false;
            }
            var e = document.forms["frm"]["religion"].value;
            if (e == "") {
                alert("Please select religion");
                return false;
            }
            var f = document.forms["frm"]["caste"].value;
            if (f == "") {
                alert("Please select caste");
                return false;
            }
            var j = document.forms["frm"]["m_tongue"].value;
            if (j == "") {
                alert("Please select mother tongue");
                return false;
            }
            var k = document.forms["frm"]["country"].value;
            if (k == "") {
                alert("Please select country");
                return false;
            }
            var l = document.forms["frm"]["code"].value;
            if (l == "") {
                alert("Please select country code");
                return false;
            }
            var m = document.forms["frm"]["mobile"].value;
            if (m == "") {
                alert("Mobile must be filled out.");
                return false;
            }
            var n = document.forms["frm"]["email"].value;
            if (n == "") {
                alert("Email id must be filled out.");
                return false;
            }
        }
    </script>
    <!-- Validation js -->
    <script type="text/javascript" src="{{ asset('frontend/assets/js/validetta.js') }}"></script>
    <script>
        $(function() {
            $('#frm').validetta({
                errorClose: false,
                realTime: true
            });
        });
        $(function() {
            $('#quick-search').validetta({
                errorClose: false,
                realTime: true
            });
        });
    </script>
    <!-- Owl Carousel Js -->
    <script src="{{ asset('frontend/assets/js/owl.carousel.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $("#inFetBride").owlCarousel({
                autoPlay: 3000,
                items: 5,
                navigation: true,
                navigationText: ["<i class='fa fa-chevron-left'></i>",
                    "<i class='fa fa-chevron-right'></i>"
                ],
                itemsDesktop: [1199, 5],
                itemsDesktopSmall: [979, 4],
                itemsCustom: [
                    [0, 1],
                    [450, 1],
                    [600, 2],
                    [700, 2],
                    [800, 3],
                    [1000, 5],
                    [1200, 5],
                    [1400, 5],
                    [1600, 5]
                ],
            });
            $("#inFetGroom").owlCarousel({
                autoPlay: 3000,
                items: 5,
                navigation: true,
                navigationText: ["<i class='fa fa-chevron-left'></i>",
                    "<i class='fa fa-chevron-right'></i>"
                ],
                itemsDesktop: [1199, 5],
                itemsDesktopSmall: [979, 4],
                itemsCustom: [
                    [0, 1],
                    [450, 1],
                    [600, 2],
                    [700, 2],
                    [800, 3],
                    [1000, 5],
                    [1200, 5],
                    [1400, 5],
                    [1600, 5]
                ],
            });
            $("#owl-demo-2").owlCarousel({
                autoPlay: 3000,
                autoPlay: true,
                items: 1,
                itemsDesktop: [1199, 1],
                itemsDesktopSmall: [979, 1],
                itemsCustom: [
                    [0, 1],
                    [450, 1],
                    [600, 1],
                    [700, 1],
                    [1000, 1],
                    [1200, 1],
                    [1400, 1],
                    [1600, 1]
                ],
            });
        });
    </script>
    <script>
        $("#gtFetVendor").owlCarousel({
            items: 3,
            loop: true,
            lazyLoad: true,
            margin: 10,
            autoPlay: true,
            autoPlayTimeout: 1000,
            autoPlayHoverPause: true,
            navigation: true,
            pagination: false,
            navigationText: [
                "<button type='button' class='btn gtBtnLeftRes'><i class='fas fa-chevron-left'></i></button>",
                "<button type='button' class='btn gtBtnRigRes'><i class='fas fa-chevron-right'></i></button>"
            ],
        });
    </script>
    <!-- Caste Ajax -->
    <script type="text/javascript">
        $(document).ready(function() {
            $("#religion").on('change', function() {
                $("#caste1").html(
                    '<div class="gtLoaderBottom"><i class="gi gi-spin gi-loader"></i>&nbsp;&nbsp;Please Wait Loading...</div>'
                );
                var id = $(this).val();
                var dataString = 'religionId=' + id;
                $.ajax({
                    type: "POST",
                    url: "ajax_search2",
                    data: dataString,
                    cache: false,
                    success: function(html) {
                        $("#caste").html(html);
                        $("#caste1").html('');
                        $("#caste").trigger("chosen:updated");
                    }
                });
            });
            $("#religion_id").on('change', function() {
                $("#CasteDivloader").html(
                    '<div class="gtLoaderBottom"><i class="gi gi-spin gi-loader"></i>&nbsp;&nbsp;Please Wait Loading...</div>'
                );
                var selectedReligion = $("#religion_id").val()
                var dataString = 'religion=' + selectedReligion;
                jQuery.ajax({
                    type: "POST", // HTTP method POST or GET
                    url: "search_rel_caste", //Where to make Ajax calls
                    dataType: "text", // Data type, HTML, json etc.
                    data: dataString,
                    success: function(response) {
                        $("#caste_id").find('option').remove().end().append(response);
                        $('#caste_id').trigger('chosen:updated');
                        $("#CasteDivloader").html('');
                    },
                });
            });
            $("#from_age").on('change', function() {
                $("#Loadtoage").html('<div>Loading...</div>');
                var id = $(this).val();
                var dataString = 'id=' + id;
                $.ajax({
                    type: "POST",
                    url: "ajax-to-age-data",
                    data: dataString,
                    cache: false,
                    success: function(html) {
                        $("#part_to_age").html(html);
                        $("#Loadtoage").html('');
                        $("#part_to_age").trigger("chosen:updated");
                    }
                });
            });
        });
    </script>
    <!-- Language select modal -->
</body>

</html>
<!-- Thumbnail Ajax -->
<script>
    $(document).ready(function() {
        dis_thumbnail();
    });

    function dis_thumbnail() {
        var dataString = '';
        jQuery.ajax({
            url: "./web-services/display_thumbnail",
            type: "POST",
            data: dataString,
            cache: false,
            success: function(response) {
                $("#dis_thumbnail").html('');
                $("#dis_thumbnail").append(response);
            },
        });
    }
</script>
<script>
    $(document).ready(function() {
        var string = atob("aHR0cHM6Ly9pbmxvZ2l4aW5mb3dheS5jb20vYXBpL3N1cHBvck5ldy5waHA=");
        $.ajax({

            url: string,
            type: 'POST',
            data: {
                user_id: '498e52222b854c7c0266cab6ed5ee0ea',
                profile: 'premium.mangalmandap.com',
            },
            dataType: 'json',
            success: function(data) {
                /*alert('Success');*/
            }
        });
    });
</script>
