function ajax(settings) {
    let options = {
        method: 'post',
        async: false
    }

    $.extend(options, settings);

    $.ajax({
        url: 'http://127.0.0.1:5500/public/index.php',
        type: options.method,
        async: options.async,
        complete: function(aReturn) {
            console.log(aReturn);
        }
    });
}