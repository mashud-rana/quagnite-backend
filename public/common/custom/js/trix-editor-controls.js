 // Trix Editor file upload to the cloud start here
 addEventListener("trix-attachment-add", function(event) {

    if (event.attachment.file) {
        // if file attachement available initiate the file uploading process
        uploadFileAttachment(event.attachment)
    }
})
// Trix File Upload
function uploadFileAttachment(attachment) {

    const URL = "/trix/store";

    const formData = new FormData()

    formData.append("content-type", attachment.file.type);

    formData.append("file", attachment.file);

    axios.post(URL, formData, {
            onUploadProgress: function(progressEvent) {
                let progress = (progressEvent.loaded / progressEvent.total) * 100;
                attachment.setUploadProgress(progress);
            }
        })
        .then(response => {
            // Add Url and href attribute to the attachement node
            attachment.setAttributes({

                path: response.data.path,

                url: response.data.url,

                href: response.data.url + "?content-disposition=attachment"

            })
        })
        .catch(function(error) {
            // Handle error
        });
}

// Trix file remove start here
addEventListener("trix-attachment-remove", function(event) {

    // Get the Attachement node Url attribute
    const file_path = event.attachment.getAttribute('path');

    const URL = "/trix/delete";

    // delete file
    axios.post(URL, {
            file_path: file_path,
        })
        .then(response => {
            // handle respnse
            console.log(response);
        }).catch(error => {
            // handle error
        });

})
