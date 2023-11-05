
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
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

{{--    original linkings--}}

    <title>Agent Dashboard !</title>

</head>
<!-- NAVIGATION-SECTION -->
<header id="navigationSection">
    <nav id="navbar">
        <a href="{{route('agent.dashboard')}}"><div id="logo"><img src="{{asset('images/logo.png')}}" alt=""></div></a>
        <ul>
            <li><a href="#">Home</a></li>
            <li class="custom-dropdown">
                <a href="#">Pages<iconify-icon id="dropdownArrow" icon="iconamoon:arrow-down-2-thin"></iconify-icon></a>
                <div class="custom-dropdown-content">
                    <a href="{{route('agent.dashboard')}}">Dashboard</a>
                    <a href="{{route('agent.create')}}">Leads</a>
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
                        <a href="{{route('agent.dashboard')}}">Dashboard</a>
                        <a href="{{route('agent.create')}}">Leads</a>
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
<body >
@include('components.modall' )

<!-- Menace Start -->
<section id="profile">
    <div class="profile-inner">
        <div class="profile-btns">
            <div class="avatar">
                <img src="{{asset('images/bigMan.png')}}" alt="" />
            </div>
            <div class="greetings">
                <h1 style="text-transform: capitalize" ><span>Hi </span>{{auth()->user()->first_name}}</h1>
            </div>
            <div class="addNewListing">
                <a href="{{route('agent.create')}}"><button>+ Add New Leads</button></a>
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
                            <a href="{{route('agent.dashboard')}}">
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
    <iconify-icon id="connectionIcon" icon="fluent:connected-20-filled"></iconify-icon>
    <h1>Leads</h1>
</div>

<!-- RESPECT -->
<section class="leadsSection">
    <div class="leadsSectionDiv">
        <div class="leads-viewAllButton">
            <div id="leads576-createleads-div">
                <h2>{{$totalLeads  }} Leads</h2>
                <a href="{{route('agent.create')}}"><button>Create Leads</button></a>
            </div>
            <div class="divisionLine"></div>
        </div>
        <div class="search-sort-div">
            <div class="row">
                <div class="col-lg-8 col-md-8">
                    <div class="searchLeadsDiv">
                        <input type="text" class="search-bar" placeholder="Search...">
                        <iconify-icon id="searchIcon" icon="ei:search"></iconify-icon>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="dropdown" id="dropdown">
                        <div class="dropdown-toggle " onclick="toggleDropdown()">Sort by <i class="fa fa-caret-down"></i></div>
                        <div class="dropdown-content" id="dropdown-content">
                            <a href="#">Leads</a>
                            <a href="#">Calls</a>
                            <a href="#">Email</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- THE TABLE  -->
        <div class="table-wrapper">
            <table class="fl-table">
                <thead>
                <tr>
                    <th>
                        <div class="nameHeading columnheading">
                            <input type="checkbox">
                            <h3>Name</h3>
                            <div class="up-downArrows">
                                <iconify-icon id="upArrow" icon="ep:arrow-up"></iconify-icon>
                                <iconify-icon id="dropdownArrow" icon="iconamoon:arrow-down-2-thin"></iconify-icon>
                            </div>
                        </div>
                    </th>
                    <th>
                        <div class="contactHeading columnheading">
                            <h3>Contact</h3>
                            <div class="up-downArrows">
                                <iconify-icon id="upArrow" icon="ep:arrow-up"></iconify-icon>
                                <iconify-icon id="dropdownArrow" icon="iconamoon:arrow-down-2-thin"></iconify-icon>
                            </div>
                        </div>
                    </th>
                    <th>
                        <div class="leadsSourceHeading columnheading">
                            <h3>Leads Source</h3>
                            <div class="up-downArrows">
                                <iconify-icon id="upArrow" icon="ep:arrow-up"></iconify-icon>
                                <iconify-icon id="dropdownArrow" icon="iconamoon:arrow-down-2-thin"></iconify-icon>
                            </div>
                        </div>
                    </th>
                    <th>
                        <div class="leadsStatusHeading columnheading">
                            <h3>Leads Status</h3>
                            <div class="up-downArrows">
                                <iconify-icon id="upArrow" icon="ep:arrow-up"></iconify-icon>
                                <iconify-icon id="dropdownArrow" icon="iconamoon:arrow-down-2-thin"></iconify-icon>
                            </div>
                        </div>
                    </th>
                    <th>
                        <div class="actionHeading columnheading">
                            <h3>Action</h3>
                        </div>
                    </th>
                </tr>
                </thead>
                <tbody>

                @foreach($leads as $lead )
                    <tr>
                        <td>
                            <div class="checkBox-leadName">
                                <input type="checkbox">
                                <img src="{{asset('images/agProfile.png')}}" alt="">
                                <div class="personName-date-div">
                                    <p>{{$lead->first_name}}</p>
                                    <div class="clockIcon-date-div">
                                        <iconify-icon id="clockIcon" icon="ph:clock-thin"></iconify-icon>
                                        <p>{{$lead->created_at->diffForHumans()}}</p>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="email-telephone-div">
                                <div class="messageIcon-email-div email-telephone-common-div">
                                    <iconify-icon id="messageIcon" icon="ep:message"></iconify-icon>
                                    <p>{{$lead->email_address}}</p>
                                </div>
                                <div class="telephoneIcon-phoneNumer-div email-telephone-common-div">
                                    <iconify-icon id="telephoneIcon" icon="ph:phone-thin"></iconify-icon>
                                    <p>{{$lead->contact_number_1}}</p>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="leadSourcebuttons">
                                <p>call</p>
                            </div>
                        </td>
                        <td>
                            <div class="leadStatusButtons1">
                                <p>. Deal unqualified</p>
                            </div>
                        </td>
                        <td>
                            <div class="writeOrDelete-div">

                                <form method="GET" style="background: none; box-shadow: none"  action="{{ route('agent.edit', ['id' => $lead->id]) }}">
                                    @csrf
                                <button type="submit" ><iconify-icon id="writingIcon" class="actionIcon" icon="streamline:interface-edit-write-2-change-document-edit-modify-paper-pencil-write-writing"></iconify-icon></button>
                                </form>

                                <button class="open-modal" onclick="openDeleteLeadModal({{$lead->id}})" class="menu-button"><iconify-icon id="deleteIcon" class="actionIcon " icon="material-symbols:delete-outline"></iconify-icon></button>
                            </div>
                        </td>
                    </tr>

                @endforeach

                <tbody>
            </table>
        </div>
    </div>
    <div class="next-prev-div">
        <a href="{{$prevPageLink}}">     <button class="next-prev-buttons">Prev</button></a>
        <a href="{{$nextPageLink}}" >  <button class="next-prev-buttons">Next</button></a>
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

<script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
<script src="{{asset('js/script.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>
<script>
    const buttons = document.querySelectorAll(".open-modal")
    const deleteButton = document.getElementById('deleteButton');
    const closebutton2 = document.querySelector('.close-button2');
    const closebutton3 = document.getElementById('close-button3')
    const form = document.getElementById('form-a')
    const modal = document.querySelector('.delete-modal')
    let currentId = null;

    function openDeleteLeadModal(id){
        console.log('function ran')
                console.log(id)
        buttons.forEach(button =>{
            if(button.dataset.id = id){
                console.log('they are the same' , button.dataset.id , id )
                modal.classList.remove('hide')
                currentId = id
                const url = `leads/${currentId}`
                deleteButton.href = url


            }
        })
    }

    deleteButton.addEventListener('click',(e)=> {
        const newUrl = `/agent/leads/${currentId}`;
        window.location.href = newUrl;


    })

function hide(){
    modal.classList.add('hide')

}
    closebutton3.addEventListener('click',()=>modal.classList.add('hide'))
</script>

</body>
</html>
