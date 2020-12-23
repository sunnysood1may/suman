Ext.onReady(function () {

    if($('#grid_styling_products').length){

        var myStore = Ext.create('Ext.data.Store', {
            proxy: {
                type: 'ajax',
                url: 'fashomusers/listStylingProductsUser',
                actionMethods: {
                    read: 'POST'
                },
                reader: {
                    type: 'json',
                    rootProperty: 'data',
                    idProperty: 'id',
                    totalProperty: 'total'
                }
            },
            remoteSort: true,
            id: 'listStylingProductsUserStore',
            sorters: [
                { property: 'id', direction: 'DESC' },
                {property: 'id'}
            ],
            fields: [
                'id',
                'user_id',
                'product_image',
                'product_description',
                'product_notes',
                'created',
                'updated',
            ],

            pageSize: 10,
            autoLoad: true,
            listeners:{
                beforeload: function(store){
                    $('#grid_styling_products').LoadingOverlay('show');
                },
                load: function () {
                    $('#grid_styling_products').LoadingOverlay('hide');
                }
            }
        });

        var paging = new Ext.PagingToolbar({
            displayInfo: true,
            displayMsg : 'Show styling products {0} - {1} of {2}',
            emptyMsg   : 'No styling products',
            pageSize   : 10,
            store      : myStore
        });

        Ext.create('Ext.grid.Panel', {
            id: 'listStylingProductsUserGrid',
            title: 'Styling Products',
            store: myStore,
            plugins: 'gridfilters',
            tbar: [
                {
                    text: 'Details',
                    iconCls: 'fa fa-search-plus',
                    id: 'styling-details',
                    disabled: true,
                    scope: this,
                    handler: function () {
                        this.detailStyling();
                    },
                },
                {
                    text: 'Edit',
                    iconCls: 'fa fa-pencil',
                    id: 'styling-edit',
                    disabled: true,
                    scope: this,
                    handler: function () {
                        this.editStyling();
                    },
                },
                // {
                //     text: 'Delete',
                //     iconCls: 'fa fa-trash',
                //     id: 'styling-delete',
                //     disabled: true,
                //     scope: this,
                //     handler: function () {
                //         this.deleteStyling();
                //     },
                // },
            ],
            bbar: paging,
            columns: [
                {
                    text: 'Product Image',
                    dataIndex: 'product_image',
                    flex: 1,
                    renderer: function(value,m,record){
                        return '<img class="img-grid" src="../../img/outfits/' + value + '">';
                    },
                },
                {
                    text: 'Product Description',
                    dataIndex: 'product_description',
                    flex: 1,
                    filter: {
                        type: 'string',
                        itemDefaults: {
                            emptyText: 'Empty filters'
                        }
                    }
                },{
                    text: 'Product Notes',
                    dataIndex: 'product_notes',
                    flex: 1,
                    filter: {
                        type: 'string',
                        itemDefaults: {
                            emptyText: 'Empty filters'
                        }
                    }
                },{
                    text: 'Created',
                    dataIndex: 'created',
                    flex: 1,
                    filter: {
                        type: 'date',
                        itemDefaults: {
                            emptyText: 'Empty filters'
                        }
                    }
                },{
                    text: 'Updated',
                    dataIndex: 'updated',
                    flex: 1,
                    filter: {
                        type: 'date',
                        itemDefaults: {
                            emptyText: 'Empty filters'
                        }
                    }
                }
            ],
            resizable: false,
            columnLines: true,
            scrollable: true,
            renderTo: Ext.getElementById('grid_styling_products'),
            listeners:
                {
                    scope: this,
                    select: function (sm, record, rowIndex) {
                        onRowSelect(sm, record, rowIndex);
                    },
                    deselect: function (sm, record, rowIndex) {
                        onRowDeselect(sm, record, rowIndex);
                    },
                },
        });
    }



});

function onRowSelect(sm, record, rowIndex) {
    Ext.getCmp('styling-details').enable();
    Ext.getCmp('styling-edit').enable();
};

function onRowDeselect(sm, record, rowIndex) {
    Ext.getCmp('styling-details').disable();
    Ext.getCmp('styling-edit').disable();
};

function detailStyling(){
    var product = Ext.getCmp('listStylingProductsUserGrid').getSelection()[0].data;

    $('#largeModal').modal('show');
    $('.modal-body').addClass('hide-modal-body');
    $('.modal-body').html('');
    $('.modal-body').html('<div class="d-flex product-img"><img src="../../img/outfits/' + product.product_image + '"></div>' +
                          '<div class="d-flex product-description"><b class="subtitle mr-5">Styling Note: </b><span class="subtitle-text">' + product.product_description + '</span></div>' +
                          '<div class="d-flex product-notes"><b class="subtitle mr-5">Invoice Note: </b><span class="subtitle-text">' + product.product_notes + '</span></div>');
    $('.modal-footer').addClass('d-none');
    $('#myModalLabel').text('Detail Styling');
    var id = product.id;

    $('.modal-body').append('<div id="containerItemDetails"></div>');

    Ext.onReady(function () {
        if($('#containerItemDetails').length){

            var itemsProductsStore = Ext.create('Ext.data.Store', {
                proxy: {
                    type: 'ajax',
                    url: 'fashomusers/listItemsProducts',
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

            var pagingItemsProducts = new Ext.PagingToolbar({
                displayInfo: true,
                displayMsg : 'Show items product {0} - {1} of {2}',
                emptyMsg   : 'No items product',
                pageSize   : 10,
                store      : itemsProductsStore
            });


            Ext.create('Ext.grid.Panel', {
                title: 'Items of product',
                store: itemsProductsStore,
                plugins: 'gridfilters',
                bbar: pagingItemsProducts,
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
                renderTo: Ext.getElementById('containerItemDetails'),
                listeners:
                    {
                        scope: this,
                    }
            });
        }
    })

}

function editStyling(){
    var product = Ext.getCmp('listStylingProductsUserGrid').getSelection()[0].data;

    $('#largeModal').modal('show');
    $('.modal-body').addClass('hide-modal-body');
    $('.modal-body').html('');
    $('.modal-body').html('<input id="stylingProdId" type="hidden" value="'+ product.id +'"><div class="d-flex product-img"><img src="../../img/outfits/' + product.product_image + '"></div>' +
        '<div class="product-description"><b class="subtitle">Styling Note: </b><textarea id="id_product_description" rows="3" cols="10">' + product.product_description + '</textarea></div>' +
        '<div class="product-notes"><b class="subtitle">Invoice Note: </b><textarea id="id_product_notes" rows="3" cols="10">' + product.product_notes + '</textarea></div>');
    $('#myModalLabel').text('Edit Styling');
    $('.modal-footer').removeClass('d-none');
    $('.modal-save-changes').attr('id', 'submit_edit_styling');
    var id = product.id;

    $('.modal-body').append('<div id="containerItemEdit"></div>');

    Ext.onReady(function () {
        if($('#containerItemEdit').length){

            var itemsProductsStore = Ext.create('Ext.data.Store', {
                proxy: {
                    type: 'ajax',
                    url: 'fashomusers/listItemsProducts',
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
                    'image',
                    'title',
                    'option1',
                    'option2',
                    'option3',
                    'price',
                    'input_desc',
                    'default_send'
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

            var pagingItemsProducts = new Ext.PagingToolbar({
                displayInfo: true,
                displayMsg : 'Show items product {0} - {1} of {2}',
                emptyMsg   : 'No items product',
                pageSize   : 10,
                store      : itemsProductsStore
            });


            Ext.create('Ext.grid.Panel', {
                title: 'Items of product',
                store: itemsProductsStore,
                plugins: 'gridfilters',
                bbar: pagingItemsProducts,
                tbar: [
                    {
                        text: 'Add',
                        iconCls: 'fa fa-plus',
                        id: 'styling-item-add',
                        scope: this,
                        handler: function () {
                            this.addItem();
                        },
                    }
                ],
                columns: [
                    {
                        text: 'Image',
                        dataIndex: 'image',
                        renderer: function(value,m,record){
                            return '<img class="img-grid" src="../../img/outfits/' + value + '">';
                        },
                    },
                    {
                        text: 'Title',
                        dataIndex: 'title',
                        filter: {
                            type: 'string',
                            itemDefaults: {
                                emptyText: 'Empty filters'
                            }
                        }
                    },{
                        text: 'Option 1',
                        dataIndex: 'option1',
                        filter: {
                            type: 'string',
                            itemDefaults: {
                                emptyText: 'Empty filters'
                            }
                        }
                    },{
                        text: 'Option 2',
                        dataIndex: 'option2',
                        filter: {
                            type: 'string',
                            itemDefaults: {
                                emptyText: 'Empty filters'
                            }
                        }
                    },{
                        text: 'Option 3',
                        dataIndex: 'option3',
                        filter: {
                            type: 'string',
                            itemDefaults: {
                                emptyText: 'Empty filters'
                            }
                        }
                    },
                    {
                        text: 'Price',
                        dataIndex: 'price',
                        filter: {
                            type: 'numeric',
                            itemDefaults: {
                                emptyText: 'Empty filters'
                            }
                        }
                    },
                    {
                        text: 'Input Desc',
                        dataIndex: 'input_desc',
                        filter: {
                            type: 'string',
                            itemDefaults: {
                                emptyText: 'Empty filters'
                            }
                        }
                    },
                    {
                        text: 'Default Send',
                        dataIndex: 'default_send',
                        // filter: {
                        //     type: 'string',
                        //     itemDefaults: {
                        //         emptyText: 'Empty filters'
                        //     }
                        // }
                    }
                ],
                resizable: false,
                columnLines: true,
                scrollable: true,
                renderTo: Ext.getElementById('containerItemEdit'),
                listeners:
                    {
                        scope: this,
                    }
            });
        }
    })
}

$(document).on('click', '#submit_edit_styling', function () {
    $('#grid_styling_products').LoadingOverlay('show');
    var id = $('#stylingProdId').val();
    var description = $('#id_product_description').val();
    var notes = $('#id_product_notes').val();

    $.ajax({
        type: "POST",
        url: "fashomusers/editStylingProd/",
        data: {id: id, description: description, notes: notes},
        success: function(response){
            Ext.getCmp('listStylingProductsUserGrid').getStore().load();
            $('#grid_styling_products').LoadingOverlay('hide');

            var res = JSON.parse(response);

            if(res.status != undefined && res.msg != undefined){

                if(res.status == 1){
                    swal(res.msg, {
                        icon: "success",
                        buttons: false,
                        timer: 1500,
                    });
                }else{
                    swal(res.msg, {
                        icon: "error",
                        buttons: false,
                        timer: 1500,
                    });
                }
            }
        }
    });

});

$(document).on('keypress', ".just_numbers", function (e) {
    if (e.keyCode >= 48 && e.keyCode <= 57) {
        return;
    }
    e.preventDefault();
});

function addItem() {
    $('#largeModal1').modal('show');
    $('#largeModal1').LoadingOverlay('show');
    $('#largeModal1 .modal-body').addClass('hide-modal-body');
    $('#largeModal1 .modal-save-changes').attr('id', 'submit_add_item_product');

    var product = Ext.getCmp('listStylingProductsUserGrid').getSelection()[0].data;
    var id = product.id;

    $('#largeModal1 .modal-body').html('');

    $('#largeModal1 .modal-body').html('<form id="form-add-item" method="post" action="#" enctype="multipart/form-data">' +
        '<div class="form-label"><b class="subtitle mr-5">Imagen: </b><input type="file" name="new_product_item_image" accept="image/*"></div>' +
        '<div class="form-label"><b class="subtitle mr-5">Description: </b><textarea name="new_product_item_description" rows="3" cols="10"></textarea></div>' +
        '<div class="form-label"><b class="subtitle mr-5">Price: </b><input class="just_numbers" type="number" name="new_product_item_price"></div>' +
        '<div class="form-label"><b class="subtitle mr-5">Brand: </b><input class="just_numbers" type="number" name="new_product_item_brand"></div>' +
        '<div class="form-label"><b class="subtitle mr-5">Color: </b><input class="just_numbers" type="number" name="new_product_item_color"></div>' +
        '<div class="form-label"><b class="subtitle mr-5">Code: </b><input type="text" name="new_product_item_code"></div>' +
        '<div class="form-label"><b class="subtitle mr-5">Link : </b><input type="text" name="new_product_item_link"></div>' +

        '<div class="form-label"><b class="subtitle mr-5">Shopify Id: </b><input type="text" name="new_product_item_shopify_id"></div>' +
        '<div class="form-label"><b class="subtitle mr-5">Shopify Title: </b><input type="text" name="new_product_item_shopify_title"></div>' +
        '<div class="form-label"><b class="subtitle mr-5">Shopify Description: </b><input type="text" name="new_product_item_shopify_description"></div>' +
        '<div class="form-label"><b class="subtitle mr-5">Shopify Image: </b><input name="new_product_item_shopify_image" type="file" accept="image/*" /></div>' +
        '<div class="form-label"><b class="subtitle mr-5">Shopify Vendor: </b><input type="text" name="new_product_item_shopify_vendor"></div>' +
        '<div class="form-label"><b class="subtitle mr-5">Shopify Product Type: </b><input type="text" name="new_product_item_shopify_product_type"></div>' +
        '<input type="hidden" name="new_product_id_parent_prod" value="'+ id +'">' +
        '</form>');

    $('#largeModal1 .modal-footer').removeClass('d-none');
    $('#myModalLabel1').text('Add Item');
    $('#largeModal1 .modal-body').removeClass('hide-modal-body');
    $('#largeModal1').LoadingOverlay('hide');
}

$(document).on('click', '.product-img', function () {

    var img = $(this).children('img')

    swal({
        content: {
            element: "img",
            attributes: {
                src: "../../img/outfits/Classic-Business-Outfit.png"
            },
        },
    });
});

$(document).on('click', '#submit_add_item_product', function () {
    var test = $("#form-add-item").ajaxSubmit({url: 'fashomusers/addItemStylingProd/', type: 'post'});

    console.log(test)

    var gridId = $('#containerItemEdit .x-grid').attr('id');
    Ext.getCmp(gridId).getStore().load();

});








