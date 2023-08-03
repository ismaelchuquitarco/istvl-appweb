<?php

return [
    /*
     * DataTables JavaScript global namespace.
     */

    'namespace' => 'LaravelDataTables',

    /*
     * Default table attributes when generating the table.
     */
    'table' => [
        'class' => 'table table-bordered table-sm ',
        'id'    => 'dataTableBuilder',
        'style' => 'width:100%'
    ],

    /*
     * Html builder script template.
     */
    'script' => 'datatables::script',

    /*
     * Html builder script template for DataTables Editor integration.
     */
    'editor' => 'datatables::editor',
];
