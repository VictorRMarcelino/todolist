function ajax(settings) {

    $.extends({
        path      : '/',
        method    : 'POST',
        parameters: {},
        complete  : false
    }, settings);

    $.ajax({
        url      : 'http://localhost:8080' + settings.path, 
        method   : settings.method,
        data     : settings.parameters,
        complete : function(response) {
            if (settings.complete) {
                
            }
        } 
    });
}