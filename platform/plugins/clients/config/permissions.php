<?php

return [
    [
        'name' => 'Clients',
        'flag' => 'clients.index',
    ],
    [
        'name'        => 'Create',
        'flag'        => 'clients.create',
        'parent_flag' => 'clients.index',
    ],
    [
        'name'        => 'Edit',
        'flag'        => 'clients.edit',
        'parent_flag' => 'clients.index',
    ],
    [
        'name'        => 'Delete',
        'flag'        => 'clients.destroy',
        'parent_flag' => 'clients.index',
    ],
];
