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


// search logic
document.addEventListener('DOMContentLoaded', function() {
    const searchContainer = document.getElementById('searchContainer');
    const searchWrapper = document.getElementById('searchWrapper');
    const searchInput = document.getElementById('searchInput');
    const searchIcon = document.getElementById('searchIcon');

    let isExpanded = false;

    // Function to expand search
    function expandSearch() {
        if (window.innerWidth >= 640) return; // Jangan expand jika dalam mode desktop

        searchWrapper.classList.remove('rounded-none', 'border-0', 'py-0', 'px-0');
        setTimeout(() => {
            searchWrapper.classList.add('flex-1', 'rounded-full', 'border-white', 'border-2', 'py-2', 'px-4', 'gap-2');
            searchInput.classList.remove('hidden', 'w-0');
            searchInput.classList.add('w-full');
        }, 10);
        isExpanded = true;
    }

    // Function to collapse search
    function collapseSearch() {
        if (window.innerWidth >= 640) return; // Jangan collapse jika dalam mode desktop

        searchWrapper.classList.remove('flex-1', 'rounded-full', 'border-white', 'border-2', 'py-2', 'px-4', 'gap-2');
        searchInput.classList.add('hidden', 'w-0');
        searchInput.classList.remove('w-full');
        searchWrapper.classList.add('rounded-none', 'border-0', 'py-0', 'px-0');
        isExpanded = false;
    }

    // Click event for search icon
    searchIcon.addEventListener('click', function(e) {
        if (window.innerWidth >= 640) return; // Nonaktifkan click event pada desktop

        e.stopPropagation();
        if (!isExpanded) {
            expandSearch();
            searchInput.focus();
        }
    });

    // Click event for input to prevent collapse when clicking inside
    searchInput.addEventListener('click', function(e) {
        if (window.innerWidth >= 640) return; // Nonaktifkan click event pada desktop
        e.stopPropagation();
    });

    // Click event for document to collapse when clicking outside
    document.addEventListener('click', function(e) {
        if (window.innerWidth >= 640) return; // Nonaktifkan click event pada desktop

        if (isExpanded && !searchContainer.contains(e.target)) {
            collapseSearch();
        }
    });

    // Handle window resize
    window.addEventListener('resize', function() {
        if (window.innerWidth >= 640) {
            // Reset ke tampilan desktop
            searchWrapper.classList.remove('flex-1', 'rounded-full', 'border-white', 'border-2', 'py-2', 'px-4', 'gap-2');
            searchInput.classList.remove('hidden', 'w-0');
            isExpanded = false;
        } else {
            // Reset ke tampilan mobile
            collapseSearch();
        }
    });
});
