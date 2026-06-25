$(document).ready(function () {
    /* ----- Banner JS ----- */
    $("#Slider1").responsiveSlides({
        auto: true
        , pause: true
        , controller: false
        , speed: 1000
        , timeout: 6000
        , namespace: 'Banner'
        , manualControls: '.Banner-Tabs'
    }); 
    $("#Map-Slider1").responsiveSlides({
        auto: true
        , pause: true
        , controller: false
        , speed: 1000
        , timeout: 6000
        , namespace: 'Map'
        , manualControls: '.Map-Tabs'
    });
    $("#Slider2").responsiveSlides({
        auto: true
        , pause: true
        , controller: false
        , speed: 1000
        , timeout: 6000
        , namespace: 'surg-trmnt'
        , manualControls: '.surg-trmnt-tabs'
    });
    $("#Images_Slide").responsiveSlides({
        auto: true
        , pause: true
        , controller: false
        , speed: 1000
        , timeout: 6000
        , namespace: 'Images'
        , manualControls: '.Images-Tabs'
    });
    $("#patient-testimonials").responsiveSlides({
        auto:true,
        pause:true,
        controller:false,
        speed:1000,
        timeout:6000,
        namespace:'patient-say',
        manualControls:'.Intra-Tabs'
    });
    /* ----- Scroll JS ----- */
    $("#flexisel1").flexisel({
        visibleItems: 5
        , itemsToScroll: 1
        , animationSpeed: 1500
        , infinite: true
        , navigationTargetSelector: null
        , autoPlay: {
            enable: true
            , interval: 5000
            , pauseOnHover: true
        }
        , responsiveBreakpoints: {
            portrait: {
                changePoint: 480
                , visibleItems: 1
                , itemsToScroll: 1
            }
            , landscape: {
                changePoint: 640
                , visibleItems: 2
                , itemsToScroll: 1
            }
            , phablet: {
                changePoint: 780
                , visibleItems: 3
                , itemsToScroll: 1
            }
            , tablet: {
                changePoint: 840
                , visibleItems: 4
                , itemsToScroll: 1
            }
        }
    });
    $("#flexisel2").flexisel({
        visibleItems: 3
        , itemsToScroll: 1
        , animationSpeed: 1500
        , infinite: true
        , navigationTargetSelector: null
        , autoPlay: {
            enable: true
            , interval: 5000
            , pauseOnHover: true
        }
        , responsiveBreakpoints: {
            portrait: {
                changePoint: 480
                , visibleItems: 1
                , itemsToScroll: 1
            }
            , landscape: {
                changePoint: 640
                , visibleItems: 2
                , itemsToScroll: 1
            }
            , phablet: {
                changePoint: 780
                , visibleItems: 2
                , itemsToScroll: 1
            }
            , tablet: {
                changePoint: 840
                , visibleItems: 2
                , itemsToScroll: 1
            }
        }
    });
    $("#flexisel3").flexisel({
        visibleItems: 4
        , itemsToScroll: 1
        , animationSpeed: 1500
        , infinite: true
        , navigationTargetSelector: null
        , autoPlay: {
            enable: true
            , interval: 5000
            , pauseOnHover: true
        }
        , responsiveBreakpoints: {
            portrait: {
                changePoint: 480
                , visibleItems: 1
                , itemsToScroll: 1
            }
            , landscape: {
                changePoint: 640
                , visibleItems: 2
                , itemsToScroll: 1
            }
            , phablet: {
                changePoint: 780
                , visibleItems: 3
                , itemsToScroll: 1
            }
            , tablet: {
                changePoint: 840
                , visibleItems: 4
                , itemsToScroll: 1
            }
        }
    });
    $(function () {
    if ($(window).width() < 640) {
    $("#flexisel4").flexisel({
        visibleItems: 2
        , itemsToScroll: 1
        , animationSpeed: 1500
        , infinite: true
        , navigationTargetSelector: null
        , autoPlay: {
            enable: true
            , interval: 5000
            , pauseOnHover: true
        }
        , responsiveBreakpoints: {
            portrait: {
                changePoint: 480
                , visibleItems: 1
                , itemsToScroll: 1
            }
            , landscape: {
                changePoint: 640
                , visibleItems: 2
                , itemsToScroll: 1
            }
            
        }
    });
 }    
    });        
        
    $('#HorizontalTab').easyResponsiveTabs({
        tabidentify: 'docTab'
    });
});
        

// Related Links JS ----------
    $(document).ready(function() {

        var text, i;
        var services = [];
    if ($(".surgical-treatments").attr('id') == 'surgical-treatments'){
         services = ["Cleft &amp; Craniofacial Surgery","Breast Surgery","Amputation Prevention","Cancer Reconstruction Surgery","Children Plastic Surgery","Facial Plastic and Maxillofacial Surgery","Lymphedema","Cosmetic Surgery"];
          urls =["/cleft-and-craniofacial-surgery-plastic-reconstructive-surgeon-noida-up/","/breast-surgery-plastic-reconstructive-surgeon-noida-up/","/amputation-prevention-plastic-reconstructive-surgeon-noida-up/","/cancer-reconstruction-surgery-plastic-reconstructive-surgeon-noida-up/","/children-plastic-surgery-plastic-reconstructive-surgeon-noida-up/","/facial-plastic-and-maxillofacial-surgery-plastic-reconstructive-surgeon-noida-up/","/lymphedema-plastic-reconstructive-surgeon-noida-up/","/cosmetic-surgery-plastic-reconstructive-surgeon-noida-up/"];
        } else if ($(".other-").attr('id') == 'other-') {
        services = [];
        urls = [];
        } else if ($("").attr('id') == '') {
	         services = [];
	         urls = [];
         }
        
        if (services.length > 0) {
            text = "<ul class='relList'>";
            for (i = 0; i < services.length; i++) {
                text += "<li><a href=" + urls[i] + ">" + services[i] + "</a></li>";
            }
            text += "</ul>";
            document.getElementById("services-list").innerHTML = text;
            $(function() {
                    setRelatedLinks();
                }


            );
        }

        function setRelatedLinks() {
            var current_path = window.location.pathname;
            $(".relList li a").each(function() {
                var href = $(this).attr('href').slice(1);
                if (current_path === "/" + href || current_path === href) {
                    $(this).css('background-color', '#f00');
                    $(this).parent().hide();
                }
            });
        }
    }); 