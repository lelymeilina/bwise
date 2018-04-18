$(function(){
    // Initialize datatable showing a search box at the top right corner
    var table = $('#id_datatable');
    var settings = {
        "sDom": "<'row'<fT>><'table-responsive't><'row'<p i>>",
        "scrollCollapse": true,
        "oLanguage": {
            "sLengthMenu": "_MENU_ ",
            "sInfo": "Showing <b>_START_ to _END_</b> of _TOTAL_ entries"
        },
        "iDisplayLength": 3,
        /*"processing": true,
        "serverSide": true,*/
        "ajax": {
            "url": "assets/modules/employee/js/datatable-data.txt",
            "dataType": "json"
        },
        "columns": [
            { "data": "id" },
            { "data": "name" },
            { "data": "position" },
            { "data": "salary" },
            { "data": "start_date" },
            { "data": "office" },
            { "data": "extn" }
        ],
        "oTableTools": {
            "sSwfPath": "assets/theme/assets/plugins/jquery-datatable/extensions/TableTools/swf/copy_csv_xls_pdf.swf",
            "aButtons": [{
                "sExtends": "csv",
                "sButtonText": "<i class='pg-grid'></i>",
            }, {
                "sExtends": "xls",
                "sButtonText": "<i class='fa fa-file-excel-o'></i>",
            }, {
                "sExtends": "pdf",
                "sButtonText": "<i class='fa fa-file-pdf-o'></i>",
            }, {
                "sExtends": "copy",
                "sButtonText": "<i class='fa fa-copy'></i>",
            }]
        },
        fnDrawCallback: function(oSettings) {
            $('.export-options-container').append($('.exportOptions'));

            $('#ToolTables_tableWithExportOptions_0').tooltip({
                title: 'Export as CSV',
                container: 'body'
            });

            $('#ToolTables_tableWithExportOptions_1').tooltip({
                title: 'Export as Excel',
                container: 'body'
            });

            $('#ToolTables_tableWithExportOptions_2').tooltip({
                title: 'Export as PDF',
                container: 'body'
            });

            $('#ToolTables_tableWithExportOptions_3').tooltip({
                title: 'Copy data',
                container: 'body'
            });
        }
    };
    table.dataTable(settings);
    
    // search box for table
    $('#search-table').keyup(function() {
        table.fnFilter($(this).val());
    });
});