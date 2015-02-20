var view = {
    init: function() {
        console.log('view init.')
    },
    criticalError: function() {
        alert('Error occur.');
    },
    form_success: function($form, data) {
        console.log($form);
        console.log(data);
    }
};

var actions = {
    init: function() {
        console.log('actions init.')
    }
};

var ajax = {

};

var model = {
    init: function() {
        console.log('model init.')
    },
    form_submit: function(event) {
        
        event.preventDefault();

        var $this = $(this),
            returnData = null;

        $.ajax({
            url: $this.attr("action"),
            type: $this.attr('method'),
            data: $this.serialize(),
            dataType: 'json',
            beforeSend: function() {

            },
            success: function(data) {

                returnData = data;

                if (data.status === "success")
                    view.form_success($this, returnData);
                else if (data.status === "fail")
                    view.form_fail($this, returnData);
                else
                    view.criticalError();

            },
            complete: function() {

            }
        });
    }
};

var controller = {
    
    init: function() {
        controller.common();
    },
    common: function() {
        
        console.log('controller init');

        $('form').on('submit', model.form_submit);

    }
};

$(document).ready(function() {

    view.init();
    actions.init();
    model.init();
    controller.init();

});
