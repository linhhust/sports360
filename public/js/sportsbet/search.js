$(document).ready(function() {
    getList(1);
    $('.link-sub-menu').click(function() {
        $('.list-option').find('.active').removeClass('active');
        $('.esuosj').last().addClass('active');
        getList($(this).attr('data-type'))
    });

    $('.esuosj').click(function(){
        data = {1: "In-play", 2: "Today", 3:"Future"}
        $('.list-option').find('.active').removeClass('active');
        $(this).addClass('active');
        $('.status').text(data[$(this).attr('data-type')]);
        getList($(this).attr('data-type'))
    });
});

function getList(type) {
    // console.log('search ' + type)
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        url: `${window.location.pathname}/search`,
        method: "GET",
        data: {
            type
        },
        success: function(data) {
            // console.log(data)
            $('#content').html(data);
            if ($(window).width() < 600) {
                $('.bIUEeK').remove();
                $('.bxcQYe').remove();
                $('.iDUEcT').remove();
                $('.iKPMp').remove();
                $('.vzgLe').remove();
                $('.btXGYI').remove();
                $('.ijNPnK').remove();
                $('.ckgoaB').remove();
                $('.kHupyM').remove();
                $('.dAcRU').remove();
                $('.glEDYr').remove();
                $('.fcEWGd').remove();
                $('.DSIxD').remove();
                $('.eJstFh').remove();
                $('.cVQWRz').remove();
                $('.cnpGOH').remove();
                $('.vzgLe').remove();
                
                // $('.eJstFh').remove();
                // $('.eJstFh').remove();
                // $('.eJstFh').remove();
            }
            addEvent()
        },
        error: function(error, b, c) {
            console.log(error)
       
        }
    });
}