$(function () {
    "use strict"

    $(document).ready(function () {

       $('#datatable').DataTable({
            lengthChange: true,
            buttons: ['copy', 'excel', 'pdf', 'print']
        }).buttons().container().appendTo('#datatable_length').addClass('ms-2')
        $('#datatable_wrapper > .row').addClass('py-2 border-bottom')
    })

})