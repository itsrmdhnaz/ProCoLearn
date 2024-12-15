function showSweetAlert(config) {
    let title, text, icon;

    title = config.title ?? '';
    text = config.text ?? 'The action was executed successfully.';
    icon = config.icon ?? 'success';
    showConfirmButton = config.showConfirmButton ?? true
    confirmButtonText = config.confirmButtonText ?? 'OK';
    showCancelButton = config.showCancelButton ?? false
    cancelButtonText = config.cancelButtonText ?? 'Batal';

    customClass = {
        confirmButton: 'btn btn-primary',
    }

    if(showCancelButton) {
        customClass['cancelButton'] = 'btn btn-outline-danger';
    }

    return Swal.fire({
        html: '<h3>' + title + '</h3><p>' + text + '</p>',
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
                    (response.data == null) ||
                    (response.data != null && !response.data.ignore_alert)
                ) {
                    showSweetAlert({
                        title: response?.data?.title ?? 'Berhasil!',
                        text: response.message,
                        icon: response?.data?.icon ?? 'success',
                        showConfirmButton: response?.data?.showConfirmButton
                    });
                }

                if (typeof window[callback] === "function") window[callback](response);
            } else {
                showSweetAlert({
                    title: 'Gagal!',
                    text: response.message,
                    icon: 'error'
                });
            }
        },
        error: (xhr, status, error) => {
            btnBlock(button, false);
            let res = xhr.responseJSON;
            if (res.errors) {
                $.each(res.errors, function (key, value) {
                    // key = key.replace(/\.(\d+)\.(\w+)/g, "[$1][$2]");
                    // key = key.replace(/\./g, '[') + ']';

                    key = key.replace(/(\.\d+)(\.\w+)?/g, (match, p1, p2) => {
                        if (p2) {
                            return `[${p1.substring(1)}][${p2.substring(1)}]`;
                        } else if (p1) {
                            return `[${p1.substring(1)}]`;
                        }
                    });

                    if ($(`[name="${key}"]`, content).length > 0) {
                        $(`[name="${key}"]`, content).addClass('is-invalid');
                        $(`[name="${key}"]`, content).parents('.form-group').find('.invalid-feedback').html(value[0]).addClass('d-block');
                    } else {
                        $(`[name^="${key}"]`, content).addClass('is-invalid');
                        $(`[name^="${key}"]`, content).parents('.form-group').find('.invalid-feedback').html(value[0]).addClass('d-block');
                    }
                });
            } else {
                showSweetAlert({
                    title: 'Gagal!',
                    text: res.message,
                    icon: 'error'
                });
            }
        },
    }).always(function () {
        btnBlock(button, false);
    });
}

