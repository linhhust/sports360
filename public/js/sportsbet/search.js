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
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    var current_date = new Date();
    curent_zone = -current_date.getTimezoneOffset() * 60;
    $.ajax({
        url: `${window.location.pathname}/search`,
        method: "GET",
        data: {
            type,
            size: $(window).width(),
            curent_zone: curent_zone 
        },
        success: function(data) {
            $('#content').html(data);
            // if ($(window).width() < 600) {
            //     $('.ijNPnK').remove();
            //     $('.ckgoaB').remove();
            //     $('.kHupyM').remove();
            //     $('.dAcRU').remove();
            //     $('.glEDYr').remove();
            //     $('.fcEWGd').remove();
            //     $('.DSIxD').remove();
            //     $('.eJstFh').remove();
            //     $('.cVQWRz').remove();
            //     $('.cnpGOH').remove();
            //     $('.lgINkj').remove();
            // }
            // if ($(window).width() < 1024) {
            //     $('.gukBNl').remove();
            //     $('.gAMcB').remove();
            //     $('.dWfbIS').remove();
            //     $('.iMvrrg').remove();
            // }
            addEvent()
        },
        error: function(error, b, c) {
            console.log(error)
       
        }
    });
}