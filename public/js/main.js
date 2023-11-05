

function openNav() {
    console.log("opened");
    document.getElementById("myNav").style.height = "100%";
};

function closeNav() {
    document.getElementById("myNav").style.height = "0%";
};

const grid = document.getElementById("menuGridIcon")
const gridContent = document.querySelector('.grid-content')
let isOpen = false;
grid.addEventListener('click',()=>{
if (!isOpen){
    gridContent.style.display = 'block !important';
    dropdownContent.style.opacity = "1";
    dropdownContent.style.pointerEvents = "auto";
    dropdownContent.style.visibility = "visible";
    isOpen = !isOpen;
}else{
    dropdownContent.style.opacity = "0";
    dropdownContent.style.pointerEvents = "none";
    dropdownContent.style.visibility = "hidden";
    gridContent.style.display = 'none !important';
    isOpen = !isOpen;

}
})

// const menuButton = document.querySelector('.menu-button');
// const deleteModal = document.querySelector('.modal-id');
//
//
// menuButton.addEventListener("click", function (e) {
//     console.log("clicked");
//     deleteModal.classList.toggle("hide");
// });
// menuButton2.addEventListener("click", function (e) {
//     console.log("clicked");
//     menu2.classList.toggle("hide");
// });
const navButton = document.querySelectorAll('.nav-button');
const navigation = document.querySelector('.navigation')

navButton.forEach(button => {
    //  button.classList.remove("active");
    button.addEventListener('click', (event) => {
        // event.preventDefault();
        navButton.forEach(button => {
            button.classList.remove('active');

        });
        if (event.target.classList == 'nav-button') {
            event.target.classList.add('active');
        };
    });
});
// RESPECT-NAV-DROPDOWN
document.addEventListener("DOMContentLoaded", function () {
    const dropdownTriggers = document.querySelectorAll(".custom-dropdown");

    dropdownTriggers.forEach((trigger) => {
        const dropdownContent = trigger.querySelector(".custom-dropdown-content");

        trigger.addEventListener("mouseover", () => {
            console.log('hovering')
            dropdownContent.style.opacity = "1";
            dropdownContent.style.pointerEvents = "auto";
            dropdownContent.style.visibility = "visible";
        });

        trigger.addEventListener("mouseout", () => {
            dropdownContent.style.opacity = "0";
            dropdownContent.style.pointerEvents = "none";
            dropdownContent.style.visibility = "hidden";
        });
    });
});

//MANACE-HI-ADAM-SECTION
var hamburger_menu = document.querySelector(".hamburger_menu");
var dd_wrap = document.querySelector(".dd_wrap");
var a_parent = document.querySelectorAll(".a_parent");

hamburger_menu.addEventListener("click", function () {
    dd_wrap.classList.toggle("active");
    a_parent.forEach(function (aitem) {
        aitem.classList.remove("active");
    })
})



a_parent.forEach(function (aitem) {

    aitem.addEventListener("click", function () {
        a_parent.forEach(function (aitem) {
            aitem.classList.remove("active");
        })
        aitem.classList.add("active");
    })
})

//MANACE-CHARTS-SECTION
var options = {
    series: [{
        name: 'calls',
        data: [200, 280, 250, 420, 480, 450, 760, 650, 840, 950, 900, 750]
    }],
    chart: {
        height: 350,
        minwidth: 320,
        maxwidth: 750,
        type: 'area'
    },
    colors: [
        '#06BA93',
    ],
    dataLabels: {
        enabled: false
    },
    stroke: {
        curve: 'smooth',
    },
    xaxis: {
        type: 'category',
        categories: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"]
    },
    tooltip: {
        x: {
            format: 'dd/MM/yy HH:mm'
        },
    },
};

var chart = new ApexCharts(document.querySelector(".area-chart"), options);
chart.render();

// AREA CHART END

// PIE CHART START

var options = {
    series: [33, 66, 13, 33],
    chart: {
        maxwidth: 450,
        type: 'donut',
    },
    labels: [
        'Google',
        'Organic',
        'Social Media',
        'Referral Program'
    ],
    colors: [
        '#F9FC77',
        '#70ED8B',
        '#01BD82',
        '#70A9ED',
    ],
    dataLabels: {
        enabled: false
    },
    responsive: [{
        breakpoint: 992,
        options: {
            chart: {
                maxwidth: 350
            },
            legend: {
                show: true,
                position: 'right',
            }
        }
    }],
    legend: {
        position: 'bottom',
    },
};

var chart = new ApexCharts(document.querySelector(".pie-chart"), options);
chart.render();

// respect sort-div
function toggleDropdown() {
    var dropdownContent = document.getElementById("dropdown-content");
    var dropdown = document.getElementById("dropdown");
    if (dropdownContent.style.display === "block") {
        dropdownContent.style.display = "none";
        dropdown.classList.remove("active");
    } else {
        dropdownContent.style.display = "block";
        dropdown.classList.add("active");
    }
}

// respect-dropdown
document.addEventListener("click", function (event) {
    var dropdown = document.getElementById("dropdown");
    var dropdownContent = document.getElementById("dropdown-content");

    if (!dropdown.contains(event.target)) {
        dropdownContent.style.display = "none";
        dropdown.classList.remove("active");
    }
});

document.addEventListener("DOMContentLoaded", function () {
    const menuGridIcon = document.getElementById("menuGridIcon");
    const dropdownContent = document.getElementById("dropdownContent");

    menuGridIcon.addEventListener("click", () => {
        if (dropdownContent.classList.contains("dropdown-open")) {
            dropdownContent.classList.remove("dropdown-open");
        } else {
            dropdownContent.classList.add("dropdown-open");
        }
    });

    document.addEventListener("click", (event) => {
        if (!menuGridIcon.contains(event.target) && !dropdownContent.contains(event.target)) {
            dropdownContent.classList.remove("dropdown-open");
        }
    });
});





// respect-table-checkbox
const checkboxes = document.querySelectorAll('input[type="checkbox"]');

checkboxes.forEach(checkbox => {
    checkbox.addEventListener('change', function() {

        const parentTR = this.closest('tr');

        if (this.checked) {
            parentTR.style.backgroundColor = 'rgb(156, 154, 154)';
        } else {
            parentTR.style.backgroundColor = '';
        }
    });
});
const closebtn = document.querySelector('.closebtn');
closebtn.addEventListener('click', closeNav);

// const button = document.querySelectorAll('');
