Ext.onReady(function () {

    if($('#grid_users').length){

        var myStore = Ext.create('Ext.data.Store', {
            proxy: {
                type: 'ajax',
                url: 'fashomusers/sessionsNotStyledList',
                actionMethods: {
                    read: 'POST'
                },
                reader: {
                    type: 'json',
                    rootProperty: 'data',
                    idProperty: 'session_id',
                    totalProperty: 'total'
                }
            },
            remoteSort: true,
            id: 'sessionsNotStyledListStore',
            sorters: [
                { property: 'session_id', direction: 'DESC' },
                {property: 'session_id'}
            ],
            fields: [
                'session_id',
                'requester_firstname',
                'requester_lasstname',
                'session_createdate',
                'requester_id',
                'rank',
                'requester_id',
                'is_youtuber',
                'state',
            ],
            listeners:{
                beforeload: function(store){
                    $('#grid_users').LoadingOverlay('show');
                },
                load: function () {
                    $('#grid_users').LoadingOverlay('hide');
                }
            },
            pageSize: 10,
            autoLoad: true
        });

        var paging = new Ext.PagingToolbar({
            displayInfo: true,
            displayMsg : 'Show sessions not styled {0} - {1} of {2}',
            emptyMsg   : 'No sessions not styled',
            pageSize   : 10,
            store      : myStore
        });

        Ext.create('Ext.grid.Panel', {
            id: 'sessionsNotStyledListGrid',
            title: 'Sessions Not Styled',
            store: myStore,
            plugins: 'gridfilters',
            bbar: paging,
            columns: [
                {
                    text: 'User Name',
                    dataIndex: 'session_id',
                    filter: {
                        type: 'numeric',
                        itemDefaults: {
                            emptyText: 'Empty filters'
                        }
                    }
                },
                {
                    text: 'First Name',
                    dataIndex: 'requester_firstname',
                    filter: {
                        type: 'string',
                        itemDefaults: {
                            emptyText: 'Empty filters'
                        }
                    }
                },{
                    text: 'Last Name',
                    dataIndex: 'requester_lasstname',
                    filter: {
                        type: 'string',
                        itemDefaults: {
                            emptyText: 'Empty filters'
                        }
                    }
                },{
                    text: 'Request Time',
                    dataIndex: 'session_createdate',
                    filter: {
                        type: 'date',
                        itemDefaults: {
                            emptyText: 'Empty filters'
                        }
                    }
                },{
                    text: 'User Profile',
                    dataIndex: 'requester_id',
                    renderer: function(value,m,record){
                        return '<a href="#" class="user_personal_details" data-toggle="modal" data-target="#largeModal" data-id="' + value + '">' + value + '</a>';
                    },
                    filter: {
                        type: 'numeric',
                        itemDefaults: {
                            emptyText: 'Empty filters'
                        }
                    }
                },{
                    text: 'No of Sessions',
                    dataIndex: 'rank',
                    filter: {
                        type: 'numeric',
                        itemDefaults: {
                            emptyText: 'Empty filters'
                        }
                    }
                },{
                    text: 'Styling History',
                    dataIndex: 'requester_id',
                    renderer: function(value,m,record){
                        return '<a href="#" class="user_sessions_history" data-toggle="modal" data-target="#largeModal" data-id="' + value + '">' + value + '</a>';
                    },
                    filter: {
                        type: 'numeric',
                        itemDefaults: {
                            emptyText: 'Empty filters'
                        }
                    }
                },{
                    text: 'Influencer',
                    dataIndex: 'is_youtuber',
                    renderer: function(value,m,record){
                        return (value == 1) ? 'YES' : 'NO';
                    },
                    filter: {
                        type: 'string',
                        itemDefaults: {
                            emptyText: 'Empty filters'
                        }
                    }
                },
                {
                    text: 'Styling Status',
                    dataIndex: 'date_of_birth',
                    filter: {
                        type: 'string',
                        itemDefaults: {
                            emptyText: 'Empty filters'
                        }
                    }
                },
                {
                    text: 'Assigned Stylist',
                    dataIndex: 'business_category',
                    filter: {
                        type: 'string',
                        itemDefaults: {
                            emptyText: 'Empty filters'
                        }
                    }
                },
                {
                    text: 'Notes',
                    dataIndex: 'address',
                    filter: {
                        type: 'string',
                        itemDefaults: {
                            emptyText: 'Empty filters'
                        }
                    }
                },
                {
                    text: 'Send Outfits',
                    dataIndex: 'country',
                    filter: {
                        type: 'string',
                        itemDefaults: {
                            emptyText: 'Empty filters'
                        }
                    }
                },
                {
                    text: 'More Options',
                    dataIndex: 'state',
                    filter: {
                        type: 'string',
                        itemDefaults: {
                            emptyText: 'Empty filters'
                        }
                    }
                },
                {
                    text: 'Notes',
                    dataIndex: 'city',
                    filter: {
                        type: 'string',
                        itemDefaults: {
                            emptyText: 'Empty filters'
                        }
                    }
                },
                {
                    text: 'Time for Styling',
                    dataIndex: 'zip_code',
                    filter: {
                        type: 'string',
                        itemDefaults: {
                            emptyText: 'Empty filters'
                        }
                    }
                },


                {
                    text: 'Current Status',
                    dataIndex: 'state',
                    filter: {
                        type: 'string',
                        itemDefaults: {
                            emptyText: 'Empty filters'
                        }
                    }
                }
            ],
            resizable: false,
            columnLines: true,
            scrollable: true,
            renderTo: Ext.getElementById('grid_users'),
            listeners:
                {
                    scope: this
                }
        });
    }
});

// $(document).on('click', '#id_add_user_button_submit', function () {
//     $(".users-add > form").ajaxSubmit({url: '../users/add', type: 'post'});
//     Ext.getCmp('sessionsNotStyledListGrid').getStore().load();
// });
//
// $(document).on('click', '#id_edit_user_button_submit', function () {
//     $(".users-edit > form").ajaxSubmit({url: '../users/edit', type: 'post'});
//     Ext.getCmp('sessionsNotStyledListGrid').getStore().load();
// });

$(document).on('click', '.user_sessions_history', function () {

    $('.modal-body').html('');
    $('.modal-footer').addClass('d-none');
    $('.modal-body').addClass('hide-modal-body');
    $('#myModalLabel').text('Sessions History');
    var id = $(this).attr('data-id');

    $('.modal-body').append('<div id="containerSessionHistoryGrid"></div>');

    Ext.onReady(function () {
        if($('#containerSessionHistoryGrid').length){

            var sessionsHistoryStore = Ext.create('Ext.data.Store', {
                proxy: {
                    type: 'ajax',
                    url: 'fashomusers/sessionsHistory',
                    actionMethods: {
                        read: 'POST'
                    },
                    reader: {
                        type: 'json',
                        rootProperty: 'data',
                        idProperty: 'id',
                        totalProperty: 'total'
                    },
                },
                remoteSort: true,
                sorters: [
                    { property: 'id', direction: 'DESC' },
                    {property: 'id'}
                ],
                fields: [
                    'id',
                    'state',
                    'user_name',
                    'user_name_stylist',
                    'session_state',
                    'description',
                    'review_text',
                ],

                pageSize: 10,
                autoLoad: true,
                listeners:{
                    beforeload: function(store){
                        $('#largeModal').LoadingOverlay('show');
                        store.proxy.setExtraParams({
                            id: id
                        });
                    },
                    load: function () {
                        $('.modal-body').removeClass('hide-modal-body');
                        $('#largeModal').LoadingOverlay('hide');
                    }
                }
            });

            var pagingHistoryStore = new Ext.PagingToolbar({
                displayInfo: true,
                displayMsg : 'Show sessions history {0} - {1} of {2}',
                emptyMsg   : 'No sessions history',
                pageSize   : 10,
                store      : sessionsHistoryStore
            });


            Ext.create('Ext.grid.Panel', {
                title: 'Sessions History',
                store: sessionsHistoryStore,
                plugins: 'gridfilters',
                bbar: pagingHistoryStore,
                columns: [
                    {
                        text: 'id',
                        dataIndex: 'id',
                        filter: {
                            type: 'numeric',
                            itemDefaults: {
                                emptyText: 'Empty filters'
                            }
                        }
                    },
                    {
                        text: 'State',
                        dataIndex: 'state',
                        filter: {
                            type: 'numeric',
                            itemDefaults: {
                                emptyText: 'Empty filters'
                            }
                        }
                    },{
                        text: 'User Name',
                        dataIndex: 'user_name',
                        filter: {
                            type: 'string',
                            itemDefaults: {
                                emptyText: 'Empty filters'
                            }
                        }
                    },{
                        text: 'Stylist User Name',
                        dataIndex: 'user_name_stylist',
                        filter: {
                            type: 'string',
                            itemDefaults: {
                                emptyText: 'Empty filters'
                            }
                        }
                    },{
                        text: 'Session State',
                        dataIndex: 'session_state',
                        filter: {
                            type: 'numeric',
                            itemDefaults: {
                                emptyText: 'Empty filters'
                            }
                        }
                    },
                    {
                        text: 'Description',
                        dataIndex: 'description',
                        filter: {
                            type: 'string',
                            itemDefaults: {
                                emptyText: 'Empty filters'
                            }
                        }
                    },
                    {
                        text: 'Review Text',
                        dataIndex: 'review_text',
                        filter: {
                            type: 'string',
                            itemDefaults: {
                                emptyText: 'Empty filters'
                            }
                        }
                    }
                ],
                resizable: false,
                columnLines: true,
                scrollable: true,
                renderTo: Ext.getElementById('containerSessionHistoryGrid'),
                listeners:
                    {
                        scope: this,
                    }
            });
        }
    })
});

$(document).on('click', '.user_personal_details', function () {

    $('.modal-body').html('');
    $('.modal-footer').addClass('d-none');
    $('.modal-body').addClass('hide-modal-body');
    $('#myModalLabel').text('Personal Details');
    $('#largeModal').LoadingOverlay('show');
    var id = $(this).attr('data-id');

    if(id != ''){
        $.ajax({
            type: "POST",
            url: "fashomusers/userPersonalDetails/",
            data: "id="+id,
            success: function(response){
                $('.container-modal-footer').addClass('d-none');
                $('.modal-body').html(response)
                $('.modal-body').removeClass('hide-modal-body');
                $('#largeModal').LoadingOverlay('hide');
            }
        });
    }
});



