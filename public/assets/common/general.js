//handle form requests via ajax
$( document ).ready(function() {
    $('.select2').select2();

    // $('.select2').select2({
    //     dropdownParent: $('#myModal')
    // });
});


$("form.submit_form").on('submit', function (e){
   e.preventDefault();

   let button = $(this).find("[type=submit]");

   button.prop('disabled', true);

   if (typeof CKEDITOR !== "undefined"){
       for (instance in CKEDITOR.instances){
           CKEDITOR.instances[instance].updateElement();
       }
   }

   let route = $(this).attr('action');
   let method = $(this).attr('method');
   let data = new FormData(this);

   $.ajax({
       url:route,
       data:data,
       method:method,
       dataType:"JSON",
       cache:false,
       contentType:false,
       processData: false,
       success: function (url){
           window.location.href = url;
       },
       error: function (error){
           button.prop("disabled", false);
           $('span.text-danger').remove();
           if(error.responseJSON.errors){
               $.each(error.responseJSON.errors, function (index, error){
                   let html = document.createElement('span');
                   html.className = index + ' text-danger';
                   html.innerText = error[0];
                   if($("[name='"+index+"[]']").length){
                       $("[name='"+index+"[]']").after(html);
                   }else if($("[name='"+index.split('.')[0]+"[]']").length){
                       $("[name='"+index.split('.')[0]+"[]']")[index.split('.')[1]].after(html);
                   }else if($("[name='"+index.split('.')[0]+"["+ index.split('.')[1] +"]"+"[]']").length){
                       $("[name='"+index.split('.')[0]+"["+ index.split('.')[1] +"]"+"[]']")[index.split('.')[2]].after(html);
                   }else{
                       console.log(index);
                       $("[name='"+index+"']:first").after(html);
                   }
               })
           }

       }
   })


});

$(document).on('click','.cs-remove-data', function (e) {
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

