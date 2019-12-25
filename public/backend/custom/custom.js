

$(document).ready(function () {
    $('#user_search').on('keyup',function(){
        let get_data=$('#user_search').val();
        let send_url=MAIN_URL+'admin/user-search/'+get_data;

        $.ajax({
            type:'get',
            url:send_url,
            success:function (response) {
                console.log(response)
            }
        })


    });

    setTimeout(function () {
        $('.alert').hide('slow')

    },2000);
});