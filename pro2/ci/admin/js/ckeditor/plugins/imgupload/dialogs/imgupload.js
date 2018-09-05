CKEDITOR.dialog.add('imgupload', function(editor) {
    CKEDITOR.skins.load(editor, 'imgupload');
    return {
        title : editor.lang.common.image + ' ' + editor.lang.common.upload,
        minWidth : CKEDITOR.env.ie ? 150 : 120,
        minHeight : 100,
        contents : [ {
            id : 'image_upload',
            label : '',
            title : '',
            expand : true,
            padding : 0,
            elements : [ 
                {
                    type : 'file',
                    id : 'upload',
                    label : 'Select file from your computer',
                    size : 38
                },
                {
                    type : 'fileButton',
                    id : 'fileId',
                    label : 'Upload file',
                    'for' : [ 'tab1', 'upload' ],
                    filebrowser : {
                        onSelect : function( fileUrl, data ) {
                            alert( 'Successfully uploaded: ' + fileUrl );
                        }
                    }
                }
            ]
        } ]
    };
});