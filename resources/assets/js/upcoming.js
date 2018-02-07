$(function () {

    // Datatable initialize
    $('#upcomingTasks').DataTable({
        order: [1, 'desc'],
        columnDefs: [
            { targets: [0, 4, 7], orderable: false}
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

    // Delete a selected task
    $('.delete-task').on('click', function(){
        var url = '/upcoming/delete/' + $(this).data('id');

        axios.delete(url)
            .then(function (response) {
                if (response.data.message == 'Task was removed successfuly') {
                    location.reload();
                } else {
                    console.log(response.data);
                }
            })
            .catch(function (error) {
                console.log(error);
            });
    });

    // Delete the selected tasks
    $('#removeTasks').on('click', function(){
        var url = '/upcoming/delete-all';
        var ids = [];

        $('tbody input').each(function () {
            if($(this).is(':checked')) {
                ids.push($(this).data('id'));
            }
        });

        axios.post(url, ids)
            .then(function (response) {
                if (response.data.message == 'Tasks were removed successfuly') {
                    location.reload();
                } else {
                    console.log(response.data);
                }
            })
            .catch(function (error) {
                console.log(error);
            });
    });
})