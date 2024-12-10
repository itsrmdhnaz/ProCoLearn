let overlayMenu = document.getElementById("overlay-menu");
let overlayMenuButton = document.getElementById("overlay-menu-button");
let overlayMenuClose = document.getElementById("overlay-menu-close");
const messageChat = document.getElementById("message-chat");
const contactChat = document.getElementById("contact-chat");
const profileMenuButton = document.getElementById("profile-menu");
const profileBar = document.getElementById("profile-bar");
const profileButton = document.getElementById("profile-button");
const overlayMenuCloseMobile = document.getElementById(
    "overlay-menu-close-mobile"
);
const profileBarClose = document.getElementById(
    "profile-bar-close-tablet"
);
const NewChatButton = document.getElementById("new-chat-button");
const NewChatPage = document.getElementById("new-chat-page");
const NewChatPageClose = document.getElementById("new-chat-page-close");

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

window.addEventListener("resize", () => {
    overlayMenu.classList.add("hidden");
});

// screen logic

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
            "border",
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

document.addEventListener("DOMContentLoaded", function () {
    const searchContainerMessage = document.getElementById("searchContainerMessage");
    const searchWrapperMessage = document.getElementById("searchWrapperMessage");
    const searchInputMessage = document.getElementById("searchInputMessage");
    const searchIconMessage = document.getElementById("searchIconMessage");

    let isExpanded = false;

    // Function to expand search
    function expandSearch() {
        if (window.innerWidth >= 768) return;

        searchWrapperMessage.classList.remove(
            "rounded-none",
            "border-0",
            "py-0",
            "px-0"
        );

        searchWrapperMessage.classList.add(
            "flex-1",
            "rounded-full",
            "border",
            "border-2",
            "py-2",
            "px-4",
            "gap-2"
        );

        setTimeout(() => {
            searchInputMessage.classList.remove("hidden", "w-0");
            searchInputMessage.classList.add("w-full");
        }, 10);

        isExpanded = true;
    }

    // Function to collapse search
    function collapseSearch() {
        if (window.innerWidth >= 768) return;

        searchWrapperMessage.classList.remove(
            "flex-1",
            "rounded-full",
            "border-white",
            "border-2",
            "py-2",
            "px-4",
            "gap-2"
        );
        searchInputMessage.classList.add("hidden", "w-0");
        searchInputMessage.classList.remove("w-full");
        searchWrapperMessage.classList.add("rounded-none", "border-0", "py-0", "px-0");
        isExpanded = false;
    }

    searchIconMessage.addEventListener("click", function (e) {
        if (window.innerWidth >= 768) return;

        e.stopPropagation();
        if (!isExpanded) {
            expandSearch();
            searchInputMessage.focus();
        }
    });

    searchInputMessage.addEventListener("click", function (e) {
        if (window.innerWidth >= 768) return;
        e.stopPropagation();
    });

    document.addEventListener("click", function (e) {
        if (window.innerWidth >= 768) return;

        if (isExpanded && !searchContainerMessage.contains(e.target)) {
            collapseSearch();
        }
    });

    window.addEventListener("resize", function () {
        if (window.innerWidth >= 768) {
            searchWrapperMessage.classList.remove(
                "flex-1",
                "rounded-full",
                "border-white",
                "border-2",
                "py-2",
                "px-4",
                "gap-2"
            );
            searchInputMessage.classList.remove("hidden", "w-0");
            isExpanded = false;
        } else {
            collapseSearch();
        }
    });
});


profileMenuButton.addEventListener("click", () => {
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
profileButton.addEventListener("click", () => {
    profileBar.classList.remove("hidden");
});


// new chat logic
NewChatButton.addEventListener("click", () => {
    NewChatPage.classList.remove("hidden");
    NewChatPage.classList.add("flex");
    requestAnimationFrame(() => {
        NewChatPage.classList.remove("translate-y-full");
    });
});

NewChatPageClose.addEventListener("click", () => {
    NewChatPage.classList.add("translate-y-full");
    setTimeout(() => {
        NewChatPage.classList.remove("flex");
        NewChatPage.classList.add("hidden");
    }, 300);
});
