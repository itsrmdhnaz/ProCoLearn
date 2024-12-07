const overlayMenu = document.getElementById("overlay-menu");
const overlayMenuButton = document.getElementById("overlay-menu-button");
const overlayMenuClose = document.getElementById("overlay-menu-close");
const searchContainer = document.getElementById("searchContainer");
const searchWrapper = document.getElementById("searchWrapper");
const searchInput = document.getElementById("searchInput");
const searchIcon = document.getElementById("searchIcon");
const myFriendsTabletContainer = document.getElementById("my-friends-tablet");
const profileMenuButton = document.getElementById("profile-menu");
const profileBar = document.getElementById("profile-bar");
const profileButton = document.getElementById("profile-button");
const overlayMenuCloseMobile = document.getElementById(
    "overlay-menu-close-mobile"
);
const profileBarClose = document.getElementById(
    "profile-bar-close-tablet"
);

// overlay menu logic
overlayMenuButton.addEventListener("click", () => {
    setTimeout(() => {
        overlayMenu.classList.remove("opacity-0");
    }, 10);
    overlayMenu.classList.remove("hidden");
});

overlayMenuClose.addEventListener("click", () => {
    console.log("clicked menu mobile");
    setTimeout(() => {
        overlayMenu.classList.add("opacity-0");
    }, 10);
    overlayMenu.classList.add("hidden");
});
window.addEventListener("resize", () => {
    overlayMenu.classList.add("hidden");
});

// search logic
let isExpanded = false;

// Function to expand search
function expandSearch() {
    if (window.innerWidth >= 640) return;

    searchWrapper.classList.remove("rounded-none", "border-0", "py-0", "px-0");

    searchWrapper.classList.add(
        "flex-1",
        "rounded-full",
        "border-white",
        "border-2",
        "py-2",
        "px-4",
        "gap-2"
    );

    setTimeout(() => {
        searchInput.classList.remove("hidden", "w-0");
        searchInput.classList.add("w-full");
    }, 10);

    isExpanded = true;
}

// Function to collapse search
function collapseSearch() {
    if (window.innerWidth >= 640) return;

    searchWrapper.classList.remove(
        "flex-1",
        "rounded-full",
        "border-white",
        "border-2",
        "py-2",
        "px-4",
        "gap-2"
    );
    searchInput.classList.add("hidden", "w-0");
    searchInput.classList.remove("w-full");
    searchWrapper.classList.add("rounded-none", "border-0", "py-0", "px-0");
    isExpanded = false;
}

searchIcon.addEventListener("click", function (e) {
    if (window.innerWidth >= 640) return;

    e.stopPropagation();
    if (!isExpanded) {
        expandSearch();
        searchInput.focus();
    }
});

searchInput.addEventListener("click", function (e) {
    if (window.innerWidth >= 640) return;
    e.stopPropagation();
});

document.addEventListener("click", function (e) {
    if (window.innerWidth >= 640) return;

    if (isExpanded && !searchContainer.contains(e.target)) {
        collapseSearch();
    }
});

window.addEventListener("resize", function () {
    if (window.innerWidth >= 640) {
        searchWrapper.classList.remove(
            "flex-1",
            "rounded-full",
            "border-white",
            "border-2",
            "py-2",
            "px-4",
            "gap-2"
        );
        searchInput.classList.remove("hidden", "w-0");
        isExpanded = false;
    } else {
        collapseSearch();
    }
});

// scroll logic otomatitation
let prevWidth = window.innerWidth;

function showScrollHint() {
    let startTime;
    const duration = 2000;
    const scrollAmount = 100;

    function animate(currentTime) {
        if (!startTime) startTime = currentTime;
        const timeElapsed = currentTime - startTime;
        const progress = timeElapsed / duration;

        const scrollPosition = Math.sin(progress * Math.PI) * scrollAmount;

        myFriendsTabletContainer.scrollLeft = scrollPosition;

        if (timeElapsed < duration) {
            requestAnimationFrame(animate);
        } else {
            // Reset ke posisi awal
            myFriendsTabletContainer.scrollLeft = 0;
        }
    }

    requestAnimationFrame(animate);
}

// Jalankan saat halaman dimuat
setTimeout(showScrollHint, 1000);

// Tambahkan event listener untuk window resize
window.addEventListener("resize", () => {
    const currentWidth = window.innerWidth;

    if (prevWidth < 639 && currentWidth >= 640) {
        showScrollHint();
    }
    // Kondisi ketika memasuki breakpoint dari atas ke bawah (<= 907px)
    else if (prevWidth > 907 && currentWidth <= 907) {
        showScrollHint();
    }

    prevWidth = currentWidth;
});

// profile menu logic
profileMenuButton.addEventListener("click", () => {
    profileBar.classList.remove("hidden");
});

profileButton.addEventListener("click", () => {
    profileBar.classList.remove("hidden");
});

overlayMenuCloseMobile.addEventListener("click", () => {
    console.log("clicked");
    profileBar.classList.add("hidden");
});

profileBarClose.addEventListener("click", () => {
    console.log("clicked");
    profileBar.classList.add("hidden");
});
