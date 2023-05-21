$(document).on('click','.cs-remove-trash', function (e) {
    e.preventDefault();
    var url = $(this).attr('cs-delete-route');
    var id = $(this).attr('data-value');
    Swal.fire({
        html: '<div class="mt-2">' +
            '<lord-icon src="https://cdn.lordicon.com/tdrtiskw.json"' +
            ' trigger="loop" colors="primary:#f06548,secondary:#f7b84b" ' +
            'style="width:120px;height:120px"></lord-icon>' +
            '<div class="mt-4 pt-2 fs-15">' +
            '<h4>Are your sure? </h4>' +
            '<p class="text-muted mx-4 mb-0">' +
            'Removing this data might affect other relared data</p>' +
            '</div>' +
            '</div>',
        showCancelButton: !0,
        confirmButtonClass: "btn btn-primary w-xs me-2 mt-2",
        cancelButtonClass: "btn btn-danger w-xs mt-2",
        confirmButtonText: "Yes!",
        buttonsStyling: !1,
        showCloseButton: !0
    }).then(function(t)
    {
        t.value
            ?
            $.ajax({
                url: url,
                type: "DELETE",
                cache: false,
                data: {
                    "_token": $('meta[name="csrf-token"]').attr('content'),
                    "id": id,
                },
                success: function (url){
                    window.location.href = url;
                },
                error: function (e){
                    console.log(e);
                }
            })
            :
            t.dismiss === Swal.DismissReason.cancel &&
            Swal.fire({
                title: "Cancelled",
                text: "Data was not removed.",
                icon: "error",
                confirmButtonClass: "btn btn-primary mt-2",
                buttonsStyling: !1
            });
    });







})

