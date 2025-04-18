var Message = {

    /**
     * Show a message
     * @param {string} title 
     * @param {string} type 
     * @param {string} sMessage 
     */
    show: function (sTitle, sIcon, sMessage) {
        Swal.fire({
            title: sTitle,
            icon: sIcon,
            text: sMessage
        });
    },

    /**
     * Show an info message
     * @param {string} sMessage 
     */
    info: function(sMessage) {
        Message.show(Message.INFO_TITLE, Message.INFO_ICON, sMessage);
    },

    /**
     * Show a warning message
     * @param {string} sMessage 
     */
    warn: function(sMessage) {
        Message.show(Message.INFO_TITLE, Message.INFO_ICON, sMessage);
    },

    /**
     * Show an error message
     * @param {string} sMessage 
     */
    error: function(sMessage) {
        Message.show(Message.INFO_TITLE, Message.INFO_ICON, sMessage);
    },
}

Message.INFO_TITLE  = 'Information';
Message.WARN_TITLE  = 'Warning';
Message.ERROR_TITLE  = 'Error';

Message.INFO_ICON  = 'info';
Message.WARN_ICON  = 'warn';
Message.ERROR_ICON = 'error';