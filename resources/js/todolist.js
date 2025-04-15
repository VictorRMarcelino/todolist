var Todolist = {

    itens: [],
    
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

    /**
     * Methods called when confirm the modal to add an item
     */
    onConfirmAddItem: function() {
        Todolist.createNewItem();
        Todolist.closeModalAddItem();
    },

    /**
     * Create a new item for the todolist
     */
    createNewItem: function() {
        let oInputDescription = $('#modal_add_item_input_description')[0];
        let oNewItem = {};
        oNewItem.id = Todolist.itens.length + 1;
        oNewItem.description = oInputDescription.value;
        oNewItem.situation = 'Todo';
        Todolist.createNewLineTableTodolist(oNewItem);
    },

    /**
     * Create a new line in the todolist table
     * @param {object} oNewLine
     */
    createNewLineTableTodolist: function(oNewItem) {
        let oNewLineId = $(`<td>${oNewItem.id}</td>`);
        let oNewLineDescription = $(`<td>${oNewItem.description}</td>`);
        let oNewLineSituation = $(`<td>${oNewItem.situation}</td>`);
        let oNewLineBtnUpdate = $('<td><button class="btn btn-primary">Update</button></td>');
        let oNewLineBtnDelete = $('<td><button class="btn btn-danger">Delete</button></td>');
        let oNewLineRow = $('<tr></tr>');
        oNewLineRow.append(oNewLineId);
        oNewLineRow.append(oNewLineDescription);
        oNewLineRow.append(oNewLineSituation);
        oNewLineRow.append(oNewLineBtnUpdate);
        oNewLineRow.append(oNewLineBtnDelete);
        $('#todolist_content_table_body')[0].append(oNewLineRow[0]);
        Todolist.itens.push(oNewItem);
    }
}