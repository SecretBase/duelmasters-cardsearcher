var view = {
    init: function() {
        console.log('view init.')
    }
};

var actions = {
    init: function() {
        console.log('actions init.');
        // actions.chat_toggle();
    },
    chat_toggle: function() {

        var $chat_toggle = $('.fa-comments'),
            $chat_room = $('.twitch-chat');

        $chat_toggle.click(function(e) {
            e.preventDefault();

            $chat_toggle.toggleClass('chat-opened');
            $chat_room.toggleClass('hidden-chat');
        });
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
