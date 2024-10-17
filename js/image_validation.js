function fileValidation(a) {
   //alert(a);
            var fileInput =
                document.getElementById(a);
            var filePath = fileInput.value;
            // Allowing file type
            var allowedExtensions =
                    /(\.jpg|\.jpeg|\.png)$/i;
            if (!allowedExtensions.exec(filePath)) {
                alert('Please upload file having extensions .jpeg/.jpg/.png only');
                fileInput.value = '';
                return false;
            }
            else
            {
                             // Image preview
                if (fileInput.files && fileInput.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        
                        document.getElementById(
                            'imagePreview').innerHTML =
                            '<img src="' + e.target.result
                            + '"/>';                        
                    };                     
                    reader.readAsDataURL(fileInput.files[0]);
                }
        }
    }

function fileValid(b) {
   //alert(a);
            var fileInput =
                document.getElementById(b);
            var filePath = fileInput.value;
            // Allowing file type
            var allowedExtensions =
                    /(\.pdf)$/i;
            if (!allowedExtensions.exec(filePath)) {
                alert('Please upload file having extensions .pdf only');
                fileInput.value = '';
                return false;
            }
            else
            {
                             // Image preview
                if (fileInput.files && fileInput.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        
                        document.getElementById(
                            'imagePreview1').innerHTML =
                            '<img src="' + e.target.result
                            + '"/>';                        
                    };                     
                    reader.readAsDataURL(fileInput.files[0]);
                }
        }
    }

    function zipFile(c) {
   //alert(a);
            var fileInput =
                document.getElementById(c);
            var filePath = fileInput.value;
            // Allowing file type
            var allowedExtensions =
                    /(\.zip)$/i;
            if (!allowedExtensions.exec(filePath)) {
                alert('Please upload file having extensions .zip only');
                fileInput.value = '';
                return false;
            }
            else
            {
                             // Image preview
                if (fileInput.files && fileInput.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        
                        document.getElementById(
                            'imagePreview2').innerHTML =
                            '<img src="' + e.target.result
                            + '"/>';                        
                    };                     
                    reader.readAsDataURL(fileInput.files[0]);
                }
        }
    }