function btnBlock(element, bool = true) {
    if (bool) {
        element.addClass('relative');
        // Menambahkan overlay dengan spinner
        element.attr("disabled", true).append(`
           <div class="absolute inset-0 flex gap-3 justify-center items-center backdrop-blur-sm bg-black z-10">
    <svg class="animate-spin h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
    </svg>
    Processing...
</div>
        `);
    } else {
        // Menghapus overlay dan spinner, serta mengaktifkan tombol
        element.removeClass('relative');
        element.removeAttr("disabled").find(".absolute").remove();
    }
}

function showSweetAlert(config) {
    let title, text, icon;

    title = config.title ?? "";
    text = config.text ?? "The action was executed successfully.";
    icon = config.icon ?? "success";
    showConfirmButton = config.showConfirmButton ?? true;
    confirmButtonText = config.confirmButtonText ?? "OK";
    showCancelButton = config.showCancelButton ?? false;
    cancelButtonText = config.cancelButtonText ?? "Batal";

    customClass = {
        confirmButton: "btn btn-primary",
    };

    if (showCancelButton) {
        customClass["cancelButton"] = "btn btn-outline-danger";
    }

    return Swal.fire({
        html: "<h3>" + title + "</h3><p>" + text + "</p>",
        icon: icon,
        showConfirmButton: showConfirmButton,
        confirmButtonText: confirmButtonText,
        showCancelButton: showCancelButton,
        cancelButtonText: cancelButtonText,
        customClass: customClass,
    });
}

$(document).on("submit", ".default-form", function (event) {
    event.preventDefault();
    var button = $(this).find(":submit");
    btnBlock(button);
    store_data(this, button);
});

function store_data(content, button) {
    $("input").blur();

    let form_data = new FormData(content);
    let action = $(content).attr("action");
    let callback = $(content).attr("function-callback") ?? null;

    $.ajax({
        url: action,
        type: "POST",
        data: form_data,
        processData: false, // tell jQuery not to process the data
        contentType: false, // tell jQuery not to set contentType
        cache: false,
        success: function (response) {
            btnBlock(button, false);
            if (!response.error) {
                if (
                    response.data == null ||
                    (response.data != null && !response.data.ignore_alert)
                ) {
                    showSweetAlert({
                        title: response?.data?.title ?? "Berhasil!",
                        text: response.message,
                        icon: response?.data?.icon ?? "success",
                        showConfirmButton: response?.data?.showConfirmButton,
                    });
                }

                $(content).trigger("reset");

                if (typeof window[callback] === "function")
                    window[callback](response);
            } else {
                showSweetAlert({
                    title: "Gagal!",
                    text: response.message,
                    icon: "error",
                });
            }
        },
        error: (xhr, status, error) => {
            btnBlock(button, false);
            let res = xhr.responseJSON;
            if (res.errors) {
                // Clear previous invalid-feedback messages
                $(".invalid-feedback").addClass("hidden").removeClass("block");

                $.each(res.errors, function (key, value) {
                    key = key.replace(/(\.\d+)(\.\w+)?/g, (match, p1, p2) => {
                        if (p2) {
                            return `[${p1.substring(1)}][${p2.substring(1)}]`;
                        } else if (p1) {
                            return `[${p1.substring(1)}]`;
                        }
                    });

                    let inputElement = $(`[name="${key}"]`, content);
                    if (inputElement.length > 0) {
                        inputElement.addClass("is-invalid");
                        inputElement
                            .siblings(".invalid-feedback")
                            .removeClass("hidden")
                            .addClass("block")
                            .html(value[0]);
                    }
                });
            } else {
                showSweetAlert({
                    title: "Gagal!",
                    text: res.message,
                    icon: "error",
                });
            }
        },
    }).always(function () {
        btnBlock(button, false);
    });
}
