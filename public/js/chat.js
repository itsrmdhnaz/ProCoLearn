let overlayMenu = document.getElementById("overlay-menu");
let overlayMenuButton = document.getElementById("overlay-menu-button");
let overlayMenuClose = document.getElementById("overlay-menu-close");

overlayMenuButton.addEventListener("click", () => {
    setTimeout(() => {
        overlayMenu.classList.remove("opacity-0");
    }, 10);
    overlayMenu.classList.remove("hidden");
});

overlayMenuClose.addEventListener("click", () => {
    setTimeout(() => {
        overlayMenu.classList.add("opacity-0");
    }, 10);
    overlayMenu.classList.add("hidden");
});

// screen logic
const messageChat = document.getElementById("message-chat");
const contactChat = document.getElementById("contact-chat");

messageChat.addEventListener("click", function () {
    messageChat.classList.remove("text-lightDark");
    messageChat.classList.add("text-white");
    contactChat.classList.remove("text-white");
    contactChat.classList.add("text-lightDark");
});

contactChat.addEventListener("click", function () {
    messageChat.classList.remove("text-white");
    messageChat.classList.add("text-lightDark");
    contactChat.classList.remove("text-lightDark");
    contactChat.classList.add("text-white");
});

// search logic
document.addEventListener("DOMContentLoaded", function () {
    const searchContainer = document.getElementById("searchContainer");
    const searchWrapper = document.getElementById("searchWrapper");
    const searchInput = document.getElementById("searchInput");
    const searchIcon = document.getElementById("searchIcon");

    let isExpanded = false;

    // Function to expand search
    function expandSearch() {
        if (window.innerWidth >= 768) return;

        searchWrapper.classList.remove(
            "rounded-none",
            "border-0",
            "py-0",
            "px-0"
        );

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
        if (window.innerWidth >= 768) return;

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
        if (window.innerWidth >= 768) return;

        e.stopPropagation();
        if (!isExpanded) {
            expandSearch();
            searchInput.focus();
        }
    });

    searchInput.addEventListener("click", function (e) {
        if (window.innerWidth >= 768) return;
        e.stopPropagation();
    });

    document.addEventListener("click", function (e) {
        if (window.innerWidth >= 768) return;

        if (isExpanded && !searchContainer.contains(e.target)) {
            collapseSearch();
        }
    });

    window.addEventListener("resize", function () {
        if (window.innerWidth >= 768) {
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
});
