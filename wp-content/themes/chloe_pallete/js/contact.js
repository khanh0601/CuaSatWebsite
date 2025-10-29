 $('#fileUpload').on('change', function() {
        var $label = $('label[for="fileUpload"]');
        
        if (this.files.length > 0) {
            $label.addClass('has-file');
        } else {
            $label.removeClass('has-file');
        }
    });