(function ($) {
    var adminJs = {
        init: function(){
            adminJs.otherOptionPage();
        },
        otherOptionPage:function () {
            if ( $('#other-option').length > 0 ) {
                $('#other-option select').on('change', function () {
                    var name = $(this).attr('name');
                    var value = $(this).val();
                    var post_id = $('#post_ID').val();
                    var data = {action:'admin_ajax', step:'save_attributes_page', post_id:post_id, name:name, value:value};
                    $.post(ajaxurl, data, function (res) {
                        console.log(res);
                    })
                })
            }
        }
    };

    $(document).ready(function () {
        adminJs.init();
    });
})(jQuery);