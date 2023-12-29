(function ($) {
    $(document).ready(function () {

        // var url = action_url_ajax.ajax_url;
        var altezza = document.getElementById('altezza');

        altezza.noUiSlider.on('change', function (values, handle) {
            console.log('Instant Value:', values);
        });


        // product processing as reference 
        $("body").delegate('.noUi-handle-lower', 'drag', function (event) {
            // $.ajax({
            //     url: url,
            //     data: {
            //         action: 'display_product_as_reference',
            //         ref_id: ref_id,
            //     },
            //     type: 'post',
            //     dataType: 'JSON',
            //     success: function (data) {
            //         if (data.error == true) {
            //             alert(data.message);
            //         } else {
            //             $("#wb_product_id").html(data.data);
            //         }
            //     },
            // });
        });
        // end product processing as reference 



    });
})(jQuery)