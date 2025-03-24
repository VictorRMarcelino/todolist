var Todolist = {
    mainList: List,

    writeList: function() {
        let oTable = $('[name=table]');
    },

    openModalAddItem: function() {
        $('#exampleModalCenter').modal('show');
    },

    closeModalAddItem: function() {
        $('#exampleModalCenter').modal('hide');
    }
}