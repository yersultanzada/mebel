$(document).ready(function(){
    var timerId = 0;
    $(".main-btn").fancybox({
        buttons : [
            'close'
        ],
        iframe : {
            css : {
                width : '100%',
                maxWidth: '1170px'
            }
        },
        afterLoad: function () {
            $('iframe').on('load', function(event) {
                event.preventDefault();
                frameHeight();
            });

            setTimeout(function() {
                frameHeightRec();
            }, 300);

            $(window).on('resize', function() {
                frameHeight();
            });
        },
        afterClose: function () {
            clearTimeout(timerId);
            // console.log('clear');
        }
    });

    function frameHeight () {
        var height = $('iframe').contents().find('html').height();
        $('iframe').height(height);
    }

    function frameHeightRec () {
        var height = $('iframe').contents().find('html').height();
        $('iframe').height(height);
        timerId = setTimeout(function() {
            frameHeightRec();
        }, 100);
        // console.log('call');
    }
})