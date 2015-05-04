var view = {
    init: function() {
        console.log('view init.')
    }
};

var actions = {
    init: function() {
        console.log('actions init.');
        actions.chat_toggle();
        actions.viewers_polling();
    },
    chat_toggle: function() {

        var $chat_toggle = $('.fa-comments'),
            $chat_room = $('.twitch-chat');

        $chat_toggle.click(function(e) {
            e.preventDefault();

            $chat_toggle.toggleClass('chat-opened');
            $chat_room.toggleClass('hidden-chat');
        });
    },
    viewers_polling: function() {

        var $viewers =  $('.viewers')
            $counter = $viewers.find(' > span'),
            $stream_title = $('.stream-title'),
            default_title = $stream_title.data('title'),
            hidden = null;

        if (typeof document.hidden !== "undefined") { 
          hidden = "hidden";
        } else if (typeof document.mozHidden !== "undefined") {
          hidden = "mozHidden";
        } else if (typeof document.msHidden !== "undefined") {
          hidden = "msHidden";
        } else if (typeof document.webkitHidden !== "undefined") {
          hidden = "webkitHidden";
        }

        function check_status() {

            if (document[hidden])
                return;

            $.ajax({
                url: $viewers.attr('action'),
                type: 'get',
                dataType: 'json',
                success: function(data) {
                    if (data.stream !== null) {
                        $counter.text(data.stream.viewers);
                        $viewers.addClass('live');
                        $stream_title.text(data.stream.channel.status);
                    } else {
                        $stream_title.text(default_title);
                        $viewers.removeClass('live');
                        $counter.text(0);
                    }
                }
            });
        }

        setInterval(check_status, 30000);
    }
};

var model = {
    init: function() {
        console.log('model init.')
    }
};

var controller = {
    
    init: function() {
        controller.common();
    },
    common: function() {        
    }
};

$(document).ready(function() {

    view.init();
    actions.init();
    model.init();
    controller.init();

});
