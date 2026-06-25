jQuery(function ($) {
    // Function to lazyload images
    if ('loading' in HTMLImageElement.prototype) {
        var images = document.querySelectorAll("img.lazyload");
		images.forEach(function(img) {
            img.src = img.dataset.src;
		});
    } else {
        // Dynamically import the LazySizes library
        var script = document.createElement("script");
        script.async = true;
        script.src = lazysizesFile;
        document.body.appendChild(script);
    }
    // Function to lazyload background images, videos
    $(function () {
        $(".lazy").lazy();
    });
});

// Function to check if browser supports webp or not
function WebpIsSupported(callback){
    // If the browser doesn't has the method createImageBitmap, you can't display webp format
    if(!window.createImageBitmap){
        callback(false);
        return;
    }

    // Base64 representation of a white point image
    var webpdata = 'data:image/webp;base64,UklGRiQAAABXRUJQVlA4IBgAAAAwAQCdASoCAAEAAQAcJaQAA3AA/v3AgAA=';

    // Retrieve the Image in Blob Format
    fetch(webpdata).then(function(response){
        return response.blob();
    }).then(function(blob){
        // If the createImageBitmap method succeeds, return true, otherwise false
        createImageBitmap(blob).then(function(){
            callback(true);
        }, function(){
            callback(false);
        });
    });
}

// Function to call and check browser supports webp or not
WebpIsSupported(function(isSupported){
    if(!isSupported){
		$('html').addClass('no-webp');
    }
});