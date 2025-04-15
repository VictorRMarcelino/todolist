var Modal = {

    /**
     * Open a modal with the specified ID
     * @param {string} sId 
     */
    open: function(sId) {
        let oModal = $('#' + sId);

        if (oModal) {
            oModal[0].classList.remove('modal_todo_list_closed');
            oModal[0].classList.add('modal_todo_list_opened');
            $('#todolist')[0].style.opacity = 0.1;
        }
    },

    /**
     * Close a modal with the specified ID
     * @param {string} sId 
     */
    close: function(sId) {
        let oModal = $('#' + sId);

        if (oModal) {
            oModal[0].classList.remove('modal_todo_list_opened');
            oModal[0].classList.add('modal_todo_list_closed');
            $('#todolist')[0].style.opacity = 1;
        }
    }
}