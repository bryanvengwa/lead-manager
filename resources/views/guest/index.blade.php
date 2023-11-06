<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('fonts/poppinsFont/stylesheet.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
    <link rel="stylesheet" href="{{asset('css2/styles.css')}}" />
    <link rel="canonical" href="https://tailwindcomponents.com/component/tailwind-css-modal-popup" itemprop="URL">
    <script src="https://cdn.tailwindcss.com"></script>

    <title>Eco Grant Dashboard</title>

</head>
<!-- NAVIGATION-SECTION -->
<header id="navigationSection">
    <nav id="navbar">
        <a href="{{route('admin.dashboard')}}"><div id="logo"><img src="{{asset('images/logo.png')}}" alt=""></div></a>
        <ul>
            <li><a href="#">Home</a></li>
            <li class="custom-dropdown">
                <a href="#">Pages<iconify-icon id="dropdownArrow" icon="iconamoon:arrow-down-2-thin"></iconify-icon></a>
                <div class="custom-dropdown-content">
                    <a href="{{route('admin.dashboard')}}">Dashboard</a>
                    <a href="{{route('admin.create')}}">Leads</a>
                    <a href="#">Reviews</a>
                </div>
            </li>
            <li class="custom-dropdown">
                <a href="#">About Us<iconify-icon id="dropdownArrow" icon="iconamoon:arrow-down-2-thin"></iconify-icon></a>
                <div class="custom-dropdown-content">
                    <a href="#">Mission</a>
                    <a href="#">Team</a>
                    <a href="#">History</a>
                </div>
            </li>
            <li><a href="#">Contact Us</a></li>
        </ul>
        <div class="hamMenu-navIcons-pImage">
            <a href="#" class="toggle-button" onclick="openNav()">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </a>
            <div class="darkModeIconContainer">
                <iconify-icon id="changeModeIcon" icon="ph:sun-bold"></iconify-icon>
            </div>
            <iconify-icon id="notificationIcon" icon="ic:outline-notifications"></iconify-icon>
            <!-- <iconify-icon id="menuGridIcon" icon="gg:menu-grid-o"></iconify-icon>  -->
            <div class="dropdown-container">
                <iconify-icon id="menuGridIcon" icon="gg:menu-grid-o" class="icon"></iconify-icon>
                <div style=" flex-direction: column" class="dropdown-content grid-content" id="dropdownContent">
                    <a href="#">Profile</a>
                    <form  style="color: white ; background: none; " action="{{route('logout')}}"  method="post">
                        @csrf
                        <button type="submit" style="color: white ; background: none; ">Log out</button>
                    </form>
                </div>
            </div>
            <img src="{{asset('images/bigMan.png')}}" alt="">
        </div>
    </nav>

    <div id="myNav" class="overlay">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <div class="overlay-content">
            <ul>
                <li><a href="#">Home</a></li>
                <li class="custom-dropdown">
                    <a href="#">Pages <iconify-icon icon="ep:arrow-down" style="color: white;" rotate="270deg"></iconify-icon></a>
                    <div class="custom-dropdown-content content1">
                        <a href="{{route('admin.dashboard')}}">Dashboard</a>
                        <a href="{{route('admin.create')}}">Leads</a>
                        <a href="#">Reviews</a>
                    </div>
                </li>
                <li class="custom-dropdown">
                    <a href="#">About Us <iconify-icon icon="ep:arrow-down" style="color: white;" rotate="270deg"></iconify-icon></a>
                    <div class="custom-dropdown-content content2">
                        <a href="#">Mission</a>
                        <a href="#">Team</a>
                        <a href="#">History</a>
                    </div>
                </li>
                <li><a href="#">Contact Us</a></li>
            </ul>
            <!-- <div class="darkModeIconContainer">
                <iconify-icon id="changeModeIcon" icon="ph:sun-bold"></iconify-icon>
            </div> -->
        </div>
    </div>
</header>

<body>

<!-- Menace Start -->
<section id="profile">
    <div class="profile-inner">
        <div class="profile-btns">
            <div class="avatar">
                <img src="./images/bigMan.png" alt="" />
            </div>
            <div class="greetings">
                <h1 style="text-transform: capitalize" ><span>Hi </span>{{auth()->user()->first_name}}</h1>
            </div>
            <div class="addNewListing">
                <a href="./form.html"><button>+ Add New Leads</button></a>
            </div>
        </div>
        <div class="dashboard-menu">
            <div class="menu">
                <div class="hamburger_menu">
                    <iconify-icon id="bulletsIcon" icon="ph:list-bullets-thin"></iconify-icon>
                    <span>Dashboard Menu</span>
                </div>
                <div class="dd_wrap">
                    <ul>
                        <li>
                            <a href="">
                                <div class="wrap">
                                    <iconify-icon id="houseIcon" icon="bi:house"></iconify-icon>
                                    <span class="text">Dashboard</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="./listings.html">
                                <div class="wrap">
                                    <iconify-icon id="noteIcon" icon="fluent:notepad-28-regular"></iconify-icon>
                                    <span class="text">Listings</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="./leads.html">
                                <div class="wrap">
                                    <iconify-icon id="leadIcon" icon="arcticons:magnetometer"></iconify-icon>
                                    <span class="text">Leads</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="./reviews.html">
                                <div class="wrap">
                                    <iconify-icon id="reviewsIcon" icon="iconamoon:star-thin"></iconify-icon>
                                    <span class="text">Reviews</span>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="dashboard-menu-expanded">
            <div class="menu">
                <div class="dd_wrap">
                    <ul>
                        <li>
                            <a href="./index.html">
                                <div class="wrap">
                                    <iconify-icon id="houseIcon" icon="bi:house"></iconify-icon>
                                    <span class="text">Dashboard</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="./listings.html">
                                <div class="wrap">
                                    <iconify-icon id="noteIcon" icon="fluent:notepad-28-regular"></iconify-icon>
                                    <span class="text">Listings</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="./leads.html">
                                <div class="wrap">
                                    <iconify-icon id="leadIcon" icon="arcticons:magnetometer"></iconify-icon>
                                    <span class="text">Leads</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="./reviews.html">
                                <div class="wrap">
                                    <iconify-icon id="reviewsIcon" icon="iconamoon:star-thin"></iconify-icon>
                                    <span class="text">Reviews</span>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- respect -->
<div class="listHeadingContainer">
    <iconify-icon id="houseIcon" icon="bi:house"></iconify-icon>
    <h1>Dashboard</h1>
</div>

<!-- RESPECT'S CARDS SECTION -->
<section class="cardsSection">
    <div class="row">
        <div class="col-lg-3 col-md-6">
            <div class="cards">
                <div class="backgroundRectangle">
                    <iconify-icon id="note" icon="fluent:notepad-28-regular"></iconify-icon>
                </div>
                <div class="cardsTextContainer">
                    <p class="number">84</p>
                    <p>Total Listings</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="cards">
                <div class="backgroundRectangle1">
                    <iconify-icon icon="fluent:connected-20-filled"></iconify-icon>
                </div>
                <div class="cardsTextContainer">
                    <p class="number">330</p>
                    <p>Leads</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="cards">
                <div class="backgroundRectangle2">
                    <iconify-icon icon="codicon:call-incoming"></iconify-icon>
                </div>
                <div class="cardsTextContainer">
                    <p class="number">15k</p>
                    <p>Customers</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="cards">
                <div class="backgroundRectangle3">
                    <iconify-icon id="reviewsIcon" icon="iconamoon:star-thin"></iconify-icon>
                </div>
                <div class="cardsTextContainer">
                    <p class="number">12k</p>
                    <p>Total Reviews</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- MANACE -->
<section id="charts" class="container">
    <div class="row">
        <div class="area-chart p col-lg-7 col-sm-12">
            <div class="area-chart-inner">
                <h2>Leads Stats</h2>
                <a href="">View All</a>
            </div>
        </div>
        <div class="pie-chart col-lg-5 col-sm-12">
            <div class="pie-chart-inner">
                <h2>Leads Traffic</h2>
                <div class="dropdown">
                    <button class="dropdown-btn">
                        Last 30 days
                        <iconify-icon
                            id="dropdownArrow"
                            icon="iconamoon:arrow-down-2-thin"
                        ></iconify-icon>
                    </button>
                    <div class="dropdown-content">
                        <a href="#">Last 60 days</a>
                        <a href="#">Last 6 months</a>
                        <a href="#">Last year</a>
                        <a href="#">Last 3 years</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




<footer>
    <div class="footerContents">
        <div class="col-lg-4 col-md-4">
            <div class="footerLogoContainer">
                <a href="#navigationSection"><img src="{{asset('images/footerLogo.png')}}" alt=""></a>
            </div>
        </div>
        <div class="col-lg-4 col-md-4">
            <div class="copyrightText">
                <p>Copyrights ©2023 Booking. Build by Youpro Contact</p>
            </div>
        </div>
        <div class="col-lg-4 col-md-4">
            <div class="footerIconsContainer">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-linkedin-in"></i></a>
            </div>
        </div>
    </div>
</footer>


<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
<script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
<script src="{{asset('js/script.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>
</body>
</html>
