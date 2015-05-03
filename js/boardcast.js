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
            $counter = $viewers.find(' > span');

        function check_current_viewers() {

            setTimeout(function() {
                $.ajax({
                    url: $viewers.attr('action'),
                    type: 'get',
                    dataType: 'json',
                    success: function(data) {
                        $counter.text(data.chatroom.chatter_count);
                    },
                    complete: check_current_viewers
                });
            }, 30000);
        }

        check_current_viewers();
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
