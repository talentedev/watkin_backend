$(function () {

    // Datatable initialize
    $('#completedTasks').DataTable({
        order: [1, 'desc'],
        columnDefs: [
            { targets: [0, 4, 6], orderable: false}
        ],
        paging: false,
        info: false
    });

    // Select all rows.
    $('thead input').on('ifChecked', function(event){
        $('tbody input').each(function () {
            $(this).iCheck('check');
        });
    });

    // Deselect all rows.
    $('thead input').on('ifUnchecked', function(event){
        $('tbody input').each(function () {
            $(this).iCheck('uncheck');
        });
    });
})