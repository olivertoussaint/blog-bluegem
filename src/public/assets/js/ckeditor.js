CKEDITOR.plugins.addExternal('timestamp', 'https://ckeditor.com/docs/ckeditor4/4.14.0/examples/assets/plugins/timestamp/', 'plugin.js');

CKEDITOR.replace( 'editor1', {
    language: 'fr',
    height: 500,
    uiColor: '#CCEAEE',
    extraPlugins: 'timestamp',
    filebrowserUploadUrl: 'appli/ckfinder/ckfinder.html',
    filebrowserUploadUrl: 'appli/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files'
    
} );