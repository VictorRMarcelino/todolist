var Todolist = {
    
    /**
     * Open the modal to add an item
     */
    openModalAddItem: function(){
        Modal.open('modal_add_item');
    },

    /**
     * Open the modal to remove an item
     */
    closeModalAddItem: function(){
        Modal.close('modal_add_item');
    },

    onConfirmAddItem: function() {
        ajax();
    }
}