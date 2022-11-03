$('#table_id').DataTable({
    ajax: 'api/documents',
    columns: [
        { data: 'title' },
        { data: 'description' },
        { data: 'customer' },
        { data: 'classification' },
        { data: 'user' },
        { data: 'created_at' },
        { data: 'view' },
    ],
});

$('#table-document').DataTable({
    ajax: 'api/documents/docs',
    columns: [
        { data: 'title' },
        { data: 'description' },
        { data: 'customer' },
        { data: 'classification' },
        { data: 'view' },
        { data: 'update' },
    ],
});

$('#table').DataTable();