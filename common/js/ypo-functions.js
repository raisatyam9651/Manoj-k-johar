(function ($, window) {
    $.fn.ypoPlugin = function (options) {
        var settings = $.extend({
            multiMedia: '',
            scroller: false,
            menuWidth: false,
            mobileMenu: false,
            slideMenu: false,
            slideType: '',
            mobileMenuStartsFrom: '',
            siteMap: false,
            siteMapUrl: '',
            countryCode: [],
            showCountryCode: false,
            phoneNumbers: [],
            phoneInfos: [],
            phoneLinks: [],
            faxNumbers: [],
            faxInfos: [],
            responseHeight: false,
            responseHeight_upto: '',
            responseList: [],
            swapBanner: false,
            swapBanner_after: '',
            accordion: false,
            tabAccord: false,
            tabAccord_upto: '',
            stickyHeader: false,
            stickyHieght: '',
            onView: false,
            onViewList: [],
            parallaxEffect: false,
            parallaxList: '',
            gdpr: false,
            accessibility: false,
            fontResize: false,
            fontResizeList: [],
            removeElements: [],
            removeId: [],
            removeChildId: [],
            removeClass: [],
            removeChildClass: [],
            removeAttrClass: [],
            removeAttrStyle: [],
            disableMobileLink: []
        }, options);

        return this.each(function () {
            var checkMode = getCookie("dfw_website");
            if (checkMode == '' || checkMode == 'undefined') {
                setCookie("dfw_website", "accessible_off");
            }
            var multiMedia = settings.multiMedia;
            var scroller = settings.scroller;
            var menuWidth = settings.menuWidth;
            var mobileMenu = settings.mobileMenu;
            var slideMenu = settings.slideMenu;
            var slideType = settings.slideType;
            var mobileMenuStartsFrom = settings.mobileMenuStartsFrom;
            var siteMap = settings.siteMap;
            var siteMapUrl = settings.siteMapUrl;
            var countryCode = settings.countryCode;
            var showCountryCode = settings.showCountryCode;
            var phoneNumbers = settings.phoneNumbers;
            var phoneInfos = settings.phoneInfos;
            var phoneLinks = settings.phoneLinks;
            var phoneNumbers_length = phoneNumbers.length;
            var countryCode_length = countryCode.length;
            var phoneInfos_length = phoneInfos.length;
            var phoneLinks_length = phoneLinks.length;
            var faxNumbers = settings.faxNumbers;
            var faxNumbers_length = faxNumbers.length;
            var faxInfos = settings.faxInfos;
            var faxInfos_length = faxInfos.length;
            var responseHeight = settings.responseHeight;
            var responseHeight_upto = settings.responseHeight_upto;
            var responseList = settings.responseList;
            var responseList_length = responseList.length;
            var swapBanner = settings.swapBanner;
            var swapBanner_after = settings.swapBanner_after;
            var accordion = settings.accordion;
            var tabAccord = settings.tabAccord;
            var tabAccord_upto = settings.tabAccord_upto;
            var stickyHeader = settings.stickyHeader;
            var stickyHieght = settings.stickyHieght;
            var onView = settings.onView;
            var onViewList = settings.onViewList;
            var parallaxEffect = settings.parallaxEffect;
            var parallaxList = settings.parallaxList;
            var host = window.location.origin;
            var url = window.location.href;
            var urlId = url.split('#').pop();
            var gdpr = settings.gdpr;
            var accessibility = settings.accessibility;
            var removeElements = settings.removeElements;
            var removeId = settings.removeId;
            var removeChildId = settings.removeChildId;
            var removeClass = settings.removeClass;
            var removeChildClass = settings.removeChildClass;
            var removeAttrClass = settings.removeAttrClass;
            var removeAttrStyle = settings.removeAttrStyle;
            var disableMobileLink = settings.disableMobileLink;
            var fontResize = settings.fontResize;
            var fontResizeList = settings.fontResizeList;
            var dfw = getCookie("dfw_website");
            var i, j, dfw_mode, dfw_font, msg, skipId, stickyAnchor;
            var Pcount = 1, Fcount = 1;
            if (stickyHieght === 0) {
                stickyAnchor = $('header').attr('data-sticky');
            }  else {
                stickyAnchor = stickyHieght;
            }

            function linkLength(linkUrl) {
                var srcLen = $('link').filter(function () {
                    return ($(this).attr('href') == linkUrl);
                }).length;
                return srcLen;
            }

            function addLink(linkUrl) {
                if (linkLength(linkUrl) === 0) {
                    var embedCSS = document.createElement('link');
                    var dateCSS = new Date();
                    embedCSS.rel = "stylesheet";
                    embedCSS.href = linkUrl + '?v=' + dateCSS.getTime();
                    document.getElementsByTagName('body')[0].appendChild(embedCSS);
                }
            }

            function scripLength(scriptUrl) {
                var srcLen = $('script').filter(function () {
                    return ($(this).attr('src') == scriptUrl);
                }).length;
                return srcLen;
            }

            function addScript(scriptUrl) {
                if (scripLength(scriptUrl) === 0) {
                    var addJS = document.createElement('script');
                    addJS.async = true;
                    addJS.src = scriptUrl;
                    document.getElementsByTagName('body')[0].appendChild(addJS);
                }
            }

            function callScript(scriptUrl, callback) {
                if (scripLength(scriptUrl) === 0) {
                    var callJS = document.createElement('script');
                    callJS.async = true;
                    callJS.src = scriptUrl;
                    callJS.onload = function () {
                        callback();
                    };
                    document.getElementsByTagName('body')[0].appendChild(callJS);
                }
            }

            var getUrlParameter = function getUrlParameter(Param) {
                var pageURL = window.location.search.substring(1);
                var URLVariables = pageURL.split('&');
                var ParameterName;
                for (i = 0; i < URLVariables.length; i++) {
                    ParameterName = URLVariables[i].split('=');
                    if (ParameterName[0] === Param) {
                        return ParameterName[1] === undefined ? true : decodeURIComponent(ParameterName[1]);
                    }
                }
            };

            if (scroller && dfw == 'accessible_off') {
                $('body').append('<div id="Scroller"><a href="javascript:void(0);"><span>Bottom</span></a></div>');
                var lastScrollTop = 0;
                $(window).on('scroll', function () {
                    var scollStatus = $(this).scrollTop();
                    var scrollPosition = $(this).scrollTop() + $(this).height();
                    var docHeight = $(document).height();
                    if (scollStatus > lastScrollTop) {
                        scrollDown();
                    } else if (scollStatus < lastScrollTop) {
                        scrollUp();
                    }

                    if (scollStatus < 150) {
                        $('#Scroller').hide('slow');
                    } else if (scrollPosition > docHeight - 200) {
                        scrollUp();
                    }  else {
                        $('#Scroller').show('fast');
                    }

                    function scrollUp() {
                        $('#Scroller').removeAttr('class');
                        $('#Scroller').addClass("scrollUp");
                        $('#Scroller').attr('aria-label', "Back to Top");
                        $('#Scroller span').text('Top');
                    }

                    function scrollDown() {
                        $('#Scroller').removeAttr('class');
                        $('#Scroller').addClass("scrollDown");
                        $('#Scroller').attr('aria-label', "Go to Down");
                        $('#Scroller span').text('Bottom');
                    }
                    lastScrollTop = scollStatus;
                });

                $(document).on('click','#Scroller', function () {
                    var scrollReport = $(this).attr('class');
                    if (scrollReport == 'scrollUp') {
                        $('body,html').animate({
                            'scrollTop': 0
                        }, 900);
                    } else if (scrollReport == 'scrollDown') {
                        $('body,html').animate({
                            'scrollTop': $(document).height()
                        }, 900);
                    }
                });
            }

            if (menuWidth) {
                $(window).resize(function mobile_width() {
                    var windowWidth, tempWidth;
                    windowWidth = $(window).width();
                    tempWidth = $('#Header').width();
                    if (windowWidth <= tempWidth) {
                        var lengths = [];
                        var licount = 0, i = 0, j = 0;
                        $('.menu li a').not('.menu li li a', '.menu li li li a', '.menu li li li li a').each(function () {
                            lengths[i] = $(this).text().length;
                            licount += lengths[i];
                            i++;
                        });
                        $('.menu li').not('.menu li li', '.menu li li li', '.menu li li li li').each(function () {
                            var liwidth = (lengths[j] / licount) * 100;
                            $(this).css("width", liwidth + "%");
                            j++;
                        });
                    }  else {
                        $('.menu li').removeAttr('style');
                    }
                }).trigger('resize');
            }

            $(".menu ul").not('.menu ul ul', '.menu ul ul ul').addClass('subMenu');
            $(".menu ul ul").not('.menu ul ul ul').addClass('subchildMenu');
            $(".menu ul ul ul").addClass('childsubMenu');

            // Mobile menu functions start
            var trigger_mobile_menu_click = true;
            var append_menu = true;
            // Bind to the resize event of the window object
            $(window).on("resize", function () {
                if($(window).width() <= mobileMenuStartsFrom){
                    ShowMobileMenu();
                }
            }).resize();
            function ShowMobileMenu(){
                if (mobileMenu || slideMenu) {
                    if (mobileMenu && slideMenu) {
                        alert('Please Select Either "Mobile Menu" OR "Slide Menu"');
                        return false;
                    }
                    if(append_menu){
                        $(".menu").clone().appendTo(".Wrapper");
                        $('.Wrapper').find('ul.menu').addClass('parentMenu');
                        $('.Wrapper').find('ul').removeClass('menu');
                        $('.Wrapper').find('li').removeAttr('class');
                        $('.Wrapper').find('li').removeAttr('style');
                        $('.Wrapper').find('a').removeAttr('class');
                        $('.Wrapper').find('*').removeAttr('accesskey');
                        $('.Wrapper').find('*').removeAttr('data-icon');
                        $('.Wrapper').find('span').contents().unwrap();
                        $(".Wrapper .subMenu").parent(this).addClass("parentList");
                        $(".Wrapper .subMenu ul").parent(this).addClass("subparentList").find('ul').removeClass('subMenu').addClass('childMenu');
                        var listHeight = $('.parentList').innerHeight();
                        if (listHeight == 0) {
                            listHeight = 40;
                        }
                        $(".parentMenu ul").parent('li').find('a:first').after('<span class="dropMenu" style="height:' + listHeight + 'px;"></span>');
                        $(".dropMenu").each(function () {
                            $(this).on('click', function () {
                                $(this).parent('li').toggleClass('actMenu');
                                $(this).next("ul").slideToggle();
                            });
                        });
                        append_menu = false;
                    }
                    if (mobileMenu) {
                        $(".Wrapper").hide('fast').addClass('mobileMenu');
                        if(trigger_mobile_menu_click){
                            $(document).on('click', '.toggleMenu', function () {
                                $(".Wrapper").slideToggle();
                            });
                            trigger_mobile_menu_click = false;
                        }
                    } else if (slideMenu) {
                        $(".Wrapper").show('fast').addClass('slideMenu');
                        $(".Wrapper").prepend('<div class="menuClose"><a href="javascript:void(0);">Close <span></span></a></div>');
                        if(trigger_mobile_menu_click){
                            $('.toggleMenu').click(function () {
                                $(".Wrapper").toggleClass('showMenu');
                                $("#Container").toggleClass('slideContainer');
                            });
                            trigger_mobile_menu_click = false;
                        }
                        $(document).on('click','.menuClose', function () {
                            $("#Container").removeClass('slideContainer');
                            $(".Wrapper").removeClass('showMenu');
                        });
                        if (slideType == 'right') {
                            $("#Container").addClass('slideRight');
                        } else if (slideType == 'left') {
                            $("#Container").addClass('slideLeft');
                        }
                    }
                }
            }
            // Mobile menu functions ends

            // Sitemap functions start
            if (siteMap && siteMapUrl == window.location.pathname) {
                $('.menu').clone().appendTo('#siteMap');
                $('#siteMap').find('*').removeAttr('class');
                $('#siteMap').find('*').removeAttr('accesskey');
                $('#siteMap').find('*').removeAttr('style');
                $('#siteMap').find('*').removeAttr('data-icon');
                $('#siteMap').find('span').contents().unwrap();
                var siteMap_length = $('#siteMap > ul > li').length;
                for (i = 1; i <= siteMap_length; i++) {
                    var siteMap_text = $('#siteMap > ul > li:nth-child(' + i + ') a').html().toLowerCase();
                    siteMap_text = siteMap_text.replace(/[^a-zA-Z0-9 ]+/g, '');
                    siteMap_text = siteMap_text.replace(/\s+/g, "-");
                    $('#siteMap > ul > li:nth-child(' + i + ')').attr('id', 'site-' + siteMap_text);
                }
            } else if (siteMap && siteMapUrl == '') {
                alert("Please provide sitemap page URL in config file");
            }
            // Sitemap functions ends

            if (phoneNumbers_length != 'undefined' || phoneNumbers != '') {
                var aria_label;
                var number_format = [];
                var number_length = [];
                var aria_number = [];
                var aria_format = [];
                for (i = 0; i < phoneNumbers_length; i++) {
                    aria_number[i] = phoneNumbers[i];
                    aria_number[i] = aria_number[i].replace(/\s/g, '');
                    aria_number[i] = aria_number[i].replace(/[^0-9 ]+/g, '');
                    aria_label = aria_number[i].split('').join(' ');
                    number_format[i] = aria_label;
                    aria_format[i] = number_format[i].substr(0, 6) + '.' + number_format[i].substr(5, 7) + '.' + number_format[i].substr(11, number_length[i]);
                }

                if (showCountryCode) {
                    if (countryCode_length > 1) {
                        for (i = 0; i < countryCode_length; i++) {
                            phoneNumbers[i] = countryCode[i] + ' ' + phoneNumbers[i];
                        }
                    }  else {
                        for (i = 0; i < phoneNumbers_length; i++) {
                            phoneNumbers[i] = countryCode + ' ' + phoneNumbers[i];
                        }
                    }
                }

                if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
                    if (countryCode_length > 1) {
                        for (i = 0; i < phoneNumbers_length; i++) {
                            j = Pcount++;
                            if (aria_number[i].substr(0, 1) == '0') {
                                aria_number[i] = aria_number[i].substr(1, number_length[i]);
                            }

                            if (phoneInfos_length > 1) {
                                $('.tel' + j).html('<a href="tel:' + countryCode[i] + aria_number[i] + '" aria-label="' + aria_format[i] + ' - ' + phoneInfos + '">' + phoneNumbers[i] + '</a>');
                            }  else {
                                $('.tel' + j).html('<a href="tel:' + countryCode[i] + aria_number[i] + '" aria-label="' + aria_format[i] + ' - ' + phoneInfos[i] + '">' + phoneNumbers[i] + '</a>');
                            }
                        }

                    }  else {
                        for (i = 0; i < phoneNumbers_length; i++) {
                            j = Pcount++;
                            if (aria_number[i].substr(0, 1) == '0') {
                                aria_number[i] = aria_number[i].substr(1, number_length[i]);
                            }
                            if (phoneInfos_length > 1) {
                                $('.tel' + j).html('<a href="tel:' + countryCode + aria_number[i] + '" aria-label="' + aria_format[i] + ' - ' + phoneInfos + '">' + phoneNumbers[i] + '</a>');
                            }  else {
                                $('.tel' + j).html('<a href="tel:' + countryCode + aria_number[i] + '" aria-label="' + aria_format[i] + ' - ' + phoneInfos[i] + '">' + phoneNumbers[i] + '</a>');
                            }
                        }
                    }

                }  else {
                    if (phoneLinks_length > 1) {
                        for (i = 0; i < phoneNumbers_length; i++) {
                            j = Pcount++;
                            if (phoneInfos_length > 1) {
                                $('.tel' + j).html('<a href="' + phoneLinks[i] + '" aria-label="' + aria_format[i] + ' - ' + phoneInfos[i] + '">' + phoneNumbers[i] + '</a>');
                            }  else {
                                $('.tel' + j).html('<a href="' + phoneLinks[i] + '" aria-label="' + aria_format[i] + ' - ' + phoneInfos + '">' + phoneNumbers[i] + '</a>');
                            }
                        }
                    }  else {
                        for (i = 0; i < phoneNumbers_length; i++) {
                            j = Pcount++;
                            if (phoneInfos_length > 1) {
                                $('.tel' + j).html('<a href="' + phoneLinks + '" aria-label="' + aria_format[i] + ' - ' + phoneInfos[i] + '">' + phoneNumbers[i] + '</a>');
                            }  else {
                                $('.tel' + j).html('<a href="' + phoneLinks + '" aria-label="' + aria_format[i] + ' - ' + phoneInfos + '">' + phoneNumbers[i] + '</a>');
                            }
                        }
                    }
                }
            }

            if (faxNumbers_length != 'undefined' || faxNumbers != '') {
                var aria_fax = [];
                for (i = 0; i < faxNumbers_length; i++) {
                    aria_fax[i] = faxNumbers[i];
                    aria_fax[i] = aria_fax[i].replace(/\s/g, '');
                    aria_fax[i] = aria_fax[i].replace(/[^0-9 ]+/g, '');
                }

                if (showCountryCode) {
                    if (countryCode_length > 1) {
                        for (i = 0; i < countryCode_length; i++) {
                            faxNumbers[i] = countryCode[i] + ' ' + faxNumbers[i];
                        }
                    }  else {
                        for (i = 0; i < faxNumbers_length; i++) {
                            faxNumbers[i] = countryCode + ' ' + faxNumbers[i];
                        }
                    }
                }

                for (i = 0; i < faxNumbers_length; i++) {
                    j = Fcount++;
                    if (faxInfos_length > 1) {
                        $('.fax' + j).html('<a href="javascript:void(0);" aria-label="' + faxInfos[i] + '">' + faxNumbers[i] + '</a>');
                    }  else {
                        $('.fax' + j).html('<a href="javascript:void(0);" aria-label="' + faxInfos + '">' + faxNumbers[i] + '</a>');
                    }
                }
            }

            if (stickyHeader && !(/Android|webOS|iPhone|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) && (dfw == 'accessible_off')) {
                $(window).resize(function () {
                    var windowWidth = $(window).width();
                    if (windowWidth > 640) {
                        var didScroll;
                        var lastScrollTop = 0;
                        var delta = 5;
                        var navbarHeight = $('header').outerHeight();
                        $('header').addClass('stickyHeader');
                        $(window).on('scroll', function (event) {
                            var $this = $(this);
                            if ($this.scrollTop() > (stickyAnchor / 2) && windowWidth > 640) {
                                $('header').addClass('stickyAnimate');
                            } else if ($this.scrollTop() <= stickyHieght) {
                                $('header').removeClass('stickyAnimate');
                            }
                            if ($this.scrollTop() > stickyHieght && windowWidth > 640) {
                                didScroll = true;
                            }  else {
                                $('header').removeClass('stickyDown');
                            }
                        });

                        setInterval(function () {
                            if (didScroll) {
                                hasScrolled();
                                didScroll = false;
                            }
                        }, 200);
                        hasScrolled();
                    }  else {
                        $('header').removeClass('stickyHeader stickyUp stickyDown stickyAnimate');
                    }

                    function hasScrolled() {
                        var st = $(this).scrollTop();
                        if (Math.abs(lastScrollTop - st) <= delta) {
                            return;
                        }
                        if (st > lastScrollTop && st > navbarHeight) {
                            $('header').removeClass('stickyDown').addClass("stickyUp");
                            $('header').css('top', -stickyHieght);
                        }  else {
                            if (st + $(window).height() < $(document).height()) {
                                $('header').removeClass('stickyUp').addClass('stickyDown');
                                $('header').css('top', '0px');
                            }
                        }
                        lastScrollTop = st;
                    }
                }).trigger('resize');
            }

            if ((urlId != '') && dfw == 'accessible_off') {
                if ((urlId != url) && (/^[a-zA-Z0-9- ]*$/.test(urlId) == true) && $('#' + urlId).length >= 1) {
                    if (stickyHeader && dfw == 'accessible_off') {
                        $('html, body').delay(200).animate({
                            'scrollTop': $('#' + urlId).offset().top - stickyAnchor
                        });
                    }  else {
                        $('html, body').delay(200).animate({
                            'scrollTop': $('#' + urlId).offset().top
                        });
                    }
                }
            }

            $(document).on('click','a[href*="#"]', function () {
                var linkId = $(this).attr('href');
                if (stickyHeader && dfw == 'accessible_off') {
                    $('html, body').animate({
                        'scrollTop': $(linkId).offset().top - stickyAnchor
                    });
                }  else {
                    $('html, body').animate({
                        'scrollTop': $(linkId).offset().top
                    });
                }
            });

            if ((onView || parallaxEffect) && dfw == 'accessible_off') {
                if (parallaxEffect && onView) {
                    if (onViewList != '' && parallaxList != '') {
                        $(onViewList).addClass('onView');
                        $(parallaxList).addClass('onView');
                    } else if (onViewList == '' && parallaxList != '') {
                        alert('Please add List to add class "onView"');
                    } else if (onViewList != '' && parallaxList == '') {
                        alert('Please add List to add class "Parallax"');
                    } else if (onViewList == '' && parallaxList == '') {
                        alert('Please add List to respective effect');
                    }
                } else if ((onView && !parallaxEffect)) {
                    if (onViewList != '') {
                        $(onViewList).addClass('onView');
                    }  else {
                        alert('Please add List to add class "onView"');
                    }
                } else if (parallaxEffect && !onView) {
                    if (parallaxList != '') {
                        $(parallaxList).addClass('onView');
                    }  else {
                        alert('Please add List to add class "Parallax"');
                    }
                }
                var $animation_elements = $('.onView');
                $(window).on('scroll resize', check_if_in_view);
                $(window).trigger('scroll');
            }

            function check_if_in_view() {
                var window_height = $(window).height();
                var window_top = $(window).scrollTop();
                var window_bottom = (window_top + window_height);
                $.each($animation_elements, function () {
                    var $element = $(this);
                    var element_height = $element.outerHeight();
                    var element_middle = $(window).scrollTop() + (window_height / 2);
                    var element_top = $element.offset().top;
                    var element_bottom = (element_top + element_height);
                    if ((element_top <= window_bottom) && (element_bottom >= window_top)) {
                        $element.addClass('inView');
                    }  else {
                        $element.removeClass('inView');
                    }
                    if ((element_top <= element_middle) && (element_bottom >= element_middle)) {
                        $element.addClass('inMidView');
                    }  else {
                        $element.removeClass('inMidView');
                    }
                });
            }

            if (parallaxEffect && dfw == 'accessible_off' && !(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent))) {
                if (parallaxList != '') {
                    $(parallaxList).attr('data-type', 'background');
                }
                $('[data-type="background"]').each(function () {
                    var $bgobj = $(this);
                    $(window).scroll(function () {
                        var yPos = -($(window).scrollTop() / $bgobj.data('speed'));
                        yPos = yPos;
                        var coords = '50% ' + yPos + 'px';
                        $bgobj.css({
                            backgroundPosition: coords
                        });
                    });
                });
            }

            $('[data-icon]').each(function () {
                $(this).addClass('font-icon');
            });

            if (accordion && dfw == 'accessible_off') {
                var urlAccord = getUrlParameter('accord');
                if (urlAccord != undefined) {
                    $(".accordion .accordTitle").removeClass('showAccord');
                    $(".accordion .accordContent").removeAttr('style');
                    $('#' + urlAccord).addClass("showAccord");
                    $('#' + urlAccord).next(".accordContent").slideDown('fast');
                    if (stickyHeader && dfw == 'accessible_off') {
                        $('html, body').delay(200).animate({
                            'scrollTop': $('#' + urlAccord).offset().top - stickyAnchor
                        });
                    }  else {
                        $('html, body').delay(200).animate({
                            'scrollTop': $('#' + urlAccord).offset().top
                        });
                    }
                }

                if ($('.accordTitle').hasClass('showAccord')) {
					$('.accordTitle.showAccord').next(".accordContent").slideDown("slow").siblings(".accordContent:visible").slideUp("slow");
                }

                $(document).on('click', '.accordion .accordTitle', function () {
					if(!$(this).hasClass("showAccord")){
						$(".accordContent").hide();
					}
					$(this).next(".accordContent").slideToggle("slow").siblings(".accordContent:visible").slideUp("fast");
					$(this).toggleClass("showAccord").siblings(".accordTitle").removeClass("showAccord");
                    if (stickyHeader && dfw == 'accessible_off') {
                        $('html,body').delay(200).animate({
                            'scrollTop': $(this).offset().top - stickyAnchor
                        });
                    }  else {
                        $('html,body').delay(200).animate({
                            'scrollTop': $(this).offset().top
                        });
                    }
                });
            }  else {
                $('.accordTitle a[href*="javascript:void(0);"]').each(function () {
                    $(this).contents().unwrap();
                });
            }

            if (tabAccord && dfw == 'accessible_off') {
                var tabLength = $('.tabAccordion > .tabTitle').not('.tabContent .tabTitle').length;
                var tabList = '<div class="tabList"><ul>';
                for (i = 0; i < tabLength; i++) {
                    $('.tabAccordion > .tabTitle:eq(' + i + ')').addClass('tab' + i);
                    $('.tabAccordion > .tabTitle:eq(' + i + ')').next('.tabContent').addClass('tab' + i);
                    var tabText = $('.tabAccordion > .tabTitle:eq(' + i + ')').not('.tabContent .tabTitle').text();
                    tabList += '<li class="tab' + i + '"><a href="javascript:void(0);">' + tabText + '</a></li>';
                }
                tabList += '</ul></div>';
                $('.tabAccordion').prepend(tabList);
                $(window).resize(function (e) {
                    var windowWidth = $(window).width();
                    if (windowWidth <= tabAccord_upto) {
                        $('.tabAccordion').removeClass('tabResponsive');
                        $('.tabAccordion').addClass('accordResponsive');
                        $('.tabTitle').show('fast');
                        $('.tabList').hide('fast');
                        $(document).on('click', ".accordResponsive .tabTitle", function () {
                            if(!$(this).hasClass("showAccord")){
                                $(".tabContent").hide();
                            }
                            $(this).next(".tabContent").slideToggle("slow").siblings(".tabContent:visible").slideUp("slow");
                            $(this).toggleClass("showAccord").siblings(".tabTitle").removeClass("showAccord");
                            if (stickyHeader && dfw == 'accessible_off') {
                                $('html,body').delay(200).animate({
                                    'scrollTop': $(this).offset().top - stickyAnchor
                                });
                            }  else {
                                $('html,body').delay(200).animate({
                                    'scrollTop': $(this).offset().top
                                });
                            }
                        });
                    }  else {
                        $('.tabAccordion').removeClass('accordResponsive');
                        $('.tabAccordion').addClass('tabResponsive');
                        $('.tabTitle').hide('fast');
                        $('.tabList li:eq(0)').addClass('tabActive');
                        $('.tabTitle:eq(0)').addClass('tabActive');
                        $('.tabContent:eq(0)').addClass('tabActive');
                        $(document).on('click', '.tabList li', function () {
                            var tabClass = $(this).attr('class');
                            $('.tabList li.' + tabClass).addClass('tabActive').siblings('.tabList li').removeClass('tabActive');
                            $('.' + tabClass).next('.tabContent').addClass('tabActive').siblings('.tabContent').removeClass('tabActive');
                            $('.' + tabClass).addClass('tabActive').siblings('.tabTitle').removeClass('tabActive');
                        });
                    }
                }).trigger('resize');
            }  else {
                $('.tabTitle a[href*="javascript:void(0);"]').each(function () {
                    $(this).contents().unwrap();
                });
            }

            if (responseHeight) {
                if (responseList != '') {
                    var bannerWidth = [];
                    var bannerHeight = [];
                    for (i = 0; i < responseList_length; i++) {
                        if ($(responseList[i]).length >= 1) {
                            $(responseList[i]).attr('data-height', $(responseList[i]).css('height').replace(/[^-\d\.]/g, ''));
                        }
                    }

                    $(window).resize(function responseBanner() {
                        for (i = 0; i < responseList_length; i++) {
                            if ($(responseList[i]).length >= 1) {
                                var windowWidth = $(window).width();
                                bannerWidth[i] = $(responseList[i]).css('max-width').replace(/[^-\d\.]/g, '');
                                bannerHeight[i] = $(responseList[i]).attr('data-height');
                                var resBan = (bannerHeight[i] / bannerWidth[i]) * windowWidth;
                                if (windowWidth < bannerWidth[i]) {
                                    if (windowWidth <= responseHeight_upto) {
                                        $(responseList[i]).removeAttr('style');
                                    }  else {
                                        $(responseList[i]).height(resBan);
                                    }
                                }  else {
                                    $(responseList[i]).removeAttr('style');
                                }
                            }
                        }
                    }).trigger('resize');
                }  else {
                    alert('Please mention which div you want response height');
                }
            }

            if (swapBanner && dfw == 'accessible_off') {
                $(window).resize(function checkWidth() {
                    var windowWidth = $(window).width();
                    if (windowWidth <= swapBanner_after) {
                        $('.home').find('#Banner-Container').attr('id', 'Banner-Container-S');
                    }  else {
                        $('.home').find('#Banner-Container-S').attr('id', 'Banner-Container');
                    }
                }).trigger('resize');
            }

            if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
                $(".menu li:has(ul)").hover(function () {
                    $(this).children("a").on('click', function () {
                        return false;
                    });
                });
                if (disableMobileLink != '') {
                    $(disableMobileLink).children('a').on('click', function (e) {
                        return false;
                    });
                }
            }

            function sendIframeMessage(type, value, action_type) {
                if (action_type == undefined) {
                    action_type = 'unload';
                }

                $('iframe').each(function (k, el) {
                    if (action_type == 'load') {
                        msg = '{"action":"' + type + '","action_type":"load","value":"' + value + '"}';
                    }  else {
                        msg = '{"action":"' + type + '","action_type":"unload","value":"' + value + '"}';
                    }
                    el.contentWindow.postMessage(msg, '*');
                });
            }
            sendIframeMessage('', '');

            

            if (gdpr) {
                addLink('https://common.yourpractice.online/gdpr/css/gdpr.css');
                addScript('https://common.yourpractice.online/gdpr/js/gdpr.js');
				$('body').append('<div class="gdpCookie" id="gdpCookie"></div>');
                var h1Tag = $.trim($('h1').text()).toLowerCase();
                if (h1Tag == 'privacy') {
                    addScript('https://common.yourpractice.online/gdpr/js/gdpr-privacy.js');
                }
                if (getCookie("accept-ypo-website-cookies") == '' || getCookie("accept-ypo-website-cookies") == undefined) {
                    $('footer').css('padding-bottom', '110px');
                }  else {
                    $('footer').removeAttr('style');
                }
            }

            if (accessibility) {
                $(window).resize(function () {
                    var windowWidth = $(window).width();
                    if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) || windowWidth <= 640) {
                        $('#Accessibility').hide('fast');
                    }  else {
                        $('#Accessibility').show('fast');
                    }
                }).trigger('resize');
                var adaBody = getCookie("ada_hide");
                var dfwBody = getCookie("dfw_hide");
                if (adaBody == 'adaHide') {
                    $("#adaClose").text('Unhide');
                }  else {
                    $("#adaClose").text('Hide');
                }

                if (dfwBody == 'dfwHide') {
                    $("#dfwClose").text('Unhide');
                }  else {
                    $("#dfwClose").text('Hide');
                }

                if ((adaBody == '' && dfwBody == 'dfwUnHide') || (adaBody == '' && dfwBody == 'dfwHide')) {
                    $('.dfwOn').addClass('dfwActive');
                    $('.dfwOff').removeClass('dfwActive');
                }

                if ((dfwBody == '' && adaBody == 'adaUnHide') || (dfwBody == '' && adaBody == 'adaHide')) {
                    $('.dfwOff').addClass('dfwActive');
                    $('.dfwOn').removeClass('dfwActive');
                }

                if (adaBody == '' && dfwBody == '') {
                    $('.dfwOff').addClass('dfwActive');
                    $("#dfwClose").text('Hide');
                }

                if (dfwBody == '' && adaBody == 'adaHide') {
                    $('.dfwOff').addClass('adaHide');
                    $('.dfwOff.dfwActive.adaHide .adaOn').find('a').attr('tabindex', -1);
                }

                if (adaBody == '' && dfwBody == 'dfwHide') {
                    $('.dfwOn').addClass('dfwHide');
                    $('.dfwOn.dfwActive.dfwHide li').find('a').attr('tabindex', -1);
                }

                $(document).on('click', '#dfwClose', function () {
                    $('.dfwOn').toggleClass('dfwHide');
                    var dfwClose = $(this).text();
                    if (dfwClose == 'Hide') {
                        $(this).text('Unhide');
                        setCookie("dfw_hide", "dfwHide");
                        $('.dfwOn.dfwActive.dfwHide li').find('a').attr('tabindex', -1);
                    }  else {
                        $(this).text('Hide');
                        setCookie("dfw_hide", "dfwUnHide");
                        $('.dfwOn.dfwActive li').find('a').removeAttr('tabindex');
                    }

                });

                $(document).on('click', '#adaClose', function () {
                    $('.dfwOff').toggleClass('adaHide');
                    var adaClose = $(this).text();
                    if (adaClose == 'Hide') {
                        $(this).text('Unhide');
                        setCookie("ada_hide", "adaHide");
                        $('.dfwOff.dfwActive.adaHide .adaOn').find('a').attr('tabindex', -1);
                    }  else {
                        $(this).text('Hide');
                        setCookie("ada_hide", "adaUnHide");
                        $('.dfwOff.dfwActive .adaOn').find('a').removeAttr('tabindex');
                    }
                });

                $(document).on('click', '.adaOn', function () {
					$('body').removeClass('accessible_off');
                    setCookie("ada_hide", "");
                    setCookie("dfw_hide", "dfwUnHide");
                    dfw_mode = getCookie('bkpmode');
                    dfw_font = getCookie('bkpfont');
                    if (dfw_mode != '') {
                        setCookie('dfw-body', dfw_mode, 30);
                        setCookie('dfw_website', 'accessible_on', 30);
                    } else {
                    	setCookie('dfw_website', 'accessible_on', 30);
						$('body').addClass('accessible_on dfw-whitemode');
						$('#dfw-WhiteMode').addClass('dfw-active');
						setCookie('dfw_website', 'accessible_on', 30);
						setCookie('dfw-body', 'dfw-whitemode', 30);
						sendIframeMessage('contrast', 'dfw-whitemode');
					}

                    if (dfw_font != '') {
                        setCookie('dfw-font', dfw_font, 30);
                    }
                });

                $(document).on('click','.adaOff', function () {
                    $('body').addClass('accessible_off');
                    $('body').removeClass('accessible_on dfw-greymode dfw-blackmode dfw-whitemode');
                    setCookie("dfw_hide", "");
                    setCookie("ada_hide", "adaUnHide");
                    setCookie('dfw_website', 'accessible_off', 30);
                    dfw_mode = getCookie('dfw-body');
                    setCookie('bkpmode', dfw_mode, 30);
                    setCookie('dfw-body', '', 30);
                    dfw_font = getCookie('dfw-font');
                    setCookie('bkpfont', dfw_font, 30);
                    setCookie('dfw-font', 'reset', 30);
                    sendIframeMessage('contrast', 'dfw-colormode');
                });

                $(document).on('click', '#dfw-WhiteMode', function () {
                    $('body').addClass('accessible_on dfw-whitemode');
                    $('body').removeClass('accessible_off dfw-blackmode dfw-greymode');
                    $(this).addClass('dfw-active');
                    $('#dfw-BlackMode').removeClass('dfw-active');
                    $('#dfw-GreyMode').removeClass('dfw-active');
                    setCookie('dfw_website', 'accessible_on', 30);
                    sendIframeMessage('contrast', 'dfw-whitemode');
					dfw_mode = getCookie('dfw-body');
                    setCookie('dfw-body', 'dfw-whitemode', 30);
                });

                $(document).on('click','#dfw-BlackMode', function () {
                    $('body').addClass('accessible_on dfw-blackmode');
                    $('body').removeClass('accessible_off dfw-whitemode dfw-greymode');
                    $(this).addClass('dfw-active');
                    $('#dfw-WhiteMode').removeClass('dfw-active');
                    $('#dfw-GreyMode').removeClass('dfw-active');
                    setCookie('dfw_website', 'accessible_on', 30);
                    sendIframeMessage('contrast', 'dfw-blackmode');
					dfw_mode = getCookie('dfw-body');
                    setCookie('dfw-body', 'dfw-blackmode', 30);
                });

                $(document).on('click','#dfw-GreyMode', function () {
                    $('body').addClass('accessible_on dfw-greymode');
                    $('body').removeClass('accessible_off dfw-whitemode dfw-blackmode');
                    $(this).addClass('dfw-active');
                    $('#dfw-BlackMode').removeClass('dfw-active');
                    $('#dfw-WhiteMode').removeClass('dfw-active');
                    setCookie('dfw_website', 'accessible_on', 30);
                    sendIframeMessage('contrast', 'dfw-greymode');
					dfw_mode = getCookie('dfw-body');
                    setCookie('dfw-body', 'dfw-greymode', 30);
                });

                var recordedBody = getCookie("dfw-body");
                if (recordedBody == 'dfw-whitemode') {
                    $('body').addClass('accessible_on dfw-whitemode');
                    $('body').removeClass('accessible_off dfw-blackmode dfw-greymode');
                    $('#dfw-WhiteMode').addClass('dfw-active');
                    $('#dfw-BlackMode').removeClass('dfw-active');
                    $('#dfw-GreyMode').removeClass('dfw-active');
                    sendIframeMessage('contrast', 'dfw-whitemode');
                } else if (recordedBody == 'dfw-blackmode') {
                    $('body').addClass('accessible_on dfw-blackmode');
                    $('body').removeClass('accessible_off dfw-whitemode dfw-greymode');
                    $('#dfw-BlackMode').addClass('dfw-active');
                    $('#dfw-WhiteMode').removeClass('dfw-active');
                    $('#dfw-GreyMode').removeClass('dfw-active');
                    sendIframeMessage('contrast', 'dfw-blackmode');
                } else if (recordedBody == 'dfw-greymode') {
                    $('body').addClass('accessible_on dfw-greymode');
                    $('body').removeClass('accessible_off dfw-whitemode dfw-blackmode');
                    $('#dfw-GreyMode').addClass('dfw-active');
                    $('#dfw-WhiteMode').removeClass('dfw-active');
                    $('#dfw-BlackMode').removeClass('dfw-active');
                    sendIframeMessage('contrast', 'dfw-greymode');
                } else {
                    sendIframeMessage('contrast', 'dfw-colormode');
                }

                if (dfw == 'accessible_on') {
                    $('body').addClass('accessible_on');
                    $('body').removeClass('accessible_off');
                }

                if (dfw == 'accessible_off') {
                    $('body').addClass('accessible_off');
                    $('body').removeClass('accessible_on');
                    sendIframeMessage('contrast', '');
                }

                $(".menu").clone().appendTo(".accessKeys");
                $('.accessKeys').find('ul').removeClass('menu').addClass('keysList');
                $('.keysList').find('ul').remove('ul');
                $('.accessKeys').find('li').removeAttr('class');
                $('.accessKeys').find('a').removeAttr('class');

                var keys_length = $('.accessKeys li').length;
                for (i = 1; i <= keys_length; i++) {
                    var key_text = $('.accessKeys li:nth-child(' + i + ')').html();
                    var key_attr = $('.accessKeys li:nth-child(' + i + ') a').attr('accesskey').toUpperCase();
                    $('.accessKeys li:nth-child(' + i + ')').html(key_text + ' - ' + key_attr);
                }

                $('.accessKeys ul').append('<li><a href="/accessibility.html">Accessibility</a> - K</li>');
                $('.accessKeys').find('a').removeAttr('accesskey');
                var skipCount = $('[data-skip]').length;
                var skipNum = 0;
                $('[data-skip]').each(function () {
                    var skipList = $(this).attr('data-skip');
                    if (skipCount == (skipNum + 1)) {
                        skipId = $('[data-skip]').eq(0).attr('id');
                    }  else {
                        skipId = $('[data-skip]').eq(skipNum + 1).attr('id');
                    }
                    $(this).prepend('<div class="dfw-skip"><a href="#' + skipId + '">Skip ' + skipList + '</a></div>');
                    skipNum++;
                });
            }

            if (accessibility || fontResize) {
                if (fontResizeList != '') {
                    $(fontResizeList).addClass('dfw-FontResize');
                }
                var actSize;
                var recordedFontActive = getCookie('dfw-font');
                if (recordedFontActive == 'undefined' || recordedFontActive == '') {
                    recordedFontActive = 'reset';
                }
                var recordedFontActiveNumber = 0;
                $('.fontsize span').removeClass('dfw-actSize');
                if (recordedFontActive == 'reset') {
                    $('.fontReset').addClass('dfw-actSize');
                    recordedFontActiveNumber = 0;
                } else if (recordedFontActive == 'larger') {
                    $('.fontPlus').addClass('dfw-actSize');
                    recordedFontActiveNumber = 2;
                } else if (recordedFontActive == 'largest') {
                    $('.fontPlus').addClass('dfw-actSize');
                    recordedFontActiveNumber = 4;
                } else if (recordedFontActive == 'smaller') {
                    $('.fontMinus').addClass('dfw-actSize');
                    recordedFontActiveNumber = -2;
                }

                changeFontSize(recordedFontActiveNumber);
                $(document).on('click', '.fontPlus', function () {
                    var recordedFontActive = getCookie('dfw-font');
                    if (recordedFontActive == 'undefined' || recordedFontActive == '') {
                        recordedFontActive = 'reset';
                    }
                    $('.fontsize span').removeClass('dfw-actSize');
                    if (recordedFontActive == 'reset') {
                        actSize = 'larger';
                        changeFontSize(2);
                        $('.fontPlus').addClass('dfw-actSize');
                    } else if (recordedFontActive == 'larger') {
                        actSize = 'largest';
                        changeFontSize(2);
                        $('.fontPlus').addClass('dfw-actSize');
                    } else if (recordedFontActive == 'smaller') {
                        actSize = 'reset';
                        changeFontSize(2);
                        $('.fontReset').addClass('dfw-actSize');
                    }  else {
                        $('.fontPlus').addClass('dfw-actSize');
                        actSize = recordedFontActive;
                    }
                    setCookie('dfw-font', actSize, 30);
                });

                $(document).on('click','.fontReset', function () {
                    var recordedFontActive = getCookie('dfw-font');
                    if (recordedFontActive == 'undefined' || recordedFontActive == '') {
                        recordedFontActive = 'reset';
                    }

                    $('.fontsize span').removeClass('dfw-actSize');
                    if (recordedFontActive == 'smaller') {
                        changeFontSize(2);
                    } else if (recordedFontActive == 'larger') {
                        changeFontSize(-2);
                    } else if (recordedFontActive == 'largest') {
                        changeFontSize(-4);
                    }
                    actSize = 'reset';
                    $('.fontReset').addClass('dfw-actSize');
                    setCookie('dfw-font', actSize, 30);
                });

                $(document).on('click', '.fontMinus', function () {
                    var recordedFontActive = getCookie('dfw-font');
                    if (recordedFontActive == 'undefined' || recordedFontActive == '') {
                        recordedFontActive = 'reset';
                    }
                    $('.fontsize span').removeClass('dfw-actSize');
                    if (recordedFontActive == 'reset') {
                        actSize = 'smaller';
                        changeFontSize(-2);
                        $('.fontMinus').addClass('dfw-actSize');
                    } else if (recordedFontActive == 'larger') {
                        actSize = 'reset';
                        changeFontSize(-2);
                        $('.fontReset').addClass('dfw-actSize');
                    } else if (recordedFontActive == 'largest') {
                        actSize = 'larger';
                        changeFontSize(-2);
                        $('.fontPlus').addClass('dfw-actSize');
                    }  else {
                        $('.fontMinus').addClass('dfw-actSize');
                        actSize = recordedFontActive;
                    }
                    setCookie('dfw-font', actSize, 30);
                });
            }

            function changeFontSize(direction) {
                var affectElements = $('.dfw-FontResize,.textMain p,.textMain li,.navigation');
                affectElements.each(function () {
                    var $this = $(this);
                    $this.css("font-size", parseInt($this.css("font-size")) + direction);
                });
                sendIframeMessage('font-size', direction);
            }

            if (dfw == 'accessible_on' && removeElements != '') {
                $(removeElements).remove();
            }

            if (dfw == 'accessible_on' && removeId != '') {
                $(removeId).removeAttr('id');
            }

            if (dfw == 'accessible_on' && removeChildId != '') {
                $(removeChildId).find('*').removeAttr('id');
            }

            if (dfw == 'accessible_on' && removeClass != '') {
                $('body').find('*').not('#Access-Container .table-cell').removeClass(removeClass);
            }

            if (dfw == 'accessible_on' && removeChildClass != '') {
                $(removeChildClass).find('*').removeAttr('class');
            }

            if (dfw == 'accessible_on' && removeAttrClass != '') {
                $(removeAttrClass).not('#Access-Container .table-div').removeAttr('class');
            }

            if (dfw == 'accessible_on' && removeAttrStyle != '') {
                $(removeAttrStyle).removeAttr('style');
            }


            if (accessibility || fontResize) {
                window.addEventListener("message", function (e) {
					if(isJson(e.data)){
						var data = JSON.parse(e.data);
						if (data.ada_type == 'load') {
							if (recordedBody == "dfw-blackmode") {
								sendIframeMessage('contrast', 'dfw-blackmode', 'load');
							} else if (recordedBody == "dfw-whitemode") {
								sendIframeMessage('contrast', 'dfw-whitemode', 'load');
							} else if (recordedBody == "dfw-greymode") {
								sendIframeMessage('contrast', 'dfw-greymode', 'load');
							}  else {
								sendIframeMessage('contrast', '', 'load');
							}
							sendIframeMessage('font-size', recordedFontActiveNumber, 'load');
						}
					}
                });
            }

            function setCookie(cname, cvalue, exdays) {
                var d = new Date();
                d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
                var expires = "expires=" + d.toGMTString();
                document.cookie = cname + "=" + cvalue + "; " + expires + ";path=/";
            }

            function getCookie(cname) {
                var name = cname + "=";
                var ca = document.cookie.split(';');
                for (i = 0; i < ca.length; i++) {
                    var c = ca[i];
                    while (c.charAt(0) == ' ') c = c.substring(1);
                    if (c.indexOf(name) != -1) return c.substring(name.length, c.length);
                }
                return "";
            }

            if ($('a[onClick*="javascript:getCodeTopic"]').length > 0) {
                var jsCode = document.createElement('script');
                jsCode.text = 'var cpiic = "' + multiMedia + '";';
                jsCode.async = true;
                document.getElementsByTagName('body')[0].appendChild(jsCode);
                addScript('https://www.ypo.education/js/jsembedcode.js');
            }

            if ($('iframe').length > 0) {
				var ifCondition = '($("iframe[src*="www.ypo.education"]").length > 0) || ($("iframe[data-src*="www.ypo.education"]").length > 0))';
                if (ifCondition) {
                    if (ifCondition) {
                        addScript('https://www.ypo.education/js/ypo-edu-embed.js');
                    }  else {
                        addScript('https://www.ypo.education/js/jsembedcode.js');
                    }

                    $('iframe[src*="www.ypo.education"]').delay(9000).each(function () {
						setYPOEduIframeHeight('iframe[src*="www.ypo.education"]');
                    });

                    $('iframe[data-src*="www.ypo.education"]').delay(9000).each(function () {
						setYPOEduIframeHeight('iframe[data-src*="www.ypo.education"]');
                    });
                }

                if ($('iframe[src*="google.com/maps/"]').length > 0) {
                    $('iframe[src*="google.com/maps/"]').delay(9000).each(function () {
                        var checkTitle = $(this).attr('title');
                        if (checkTitle == '' || checkTitle == undefined) {
                            $(this).attr('title', 'Google Map');
                        }
                    });
                }
            }
        });
    };
})($, this, 0);

function isJson(str) {
    try {
        JSON.parse(str);
    } catch (e) {
        return false;
    }
    return true;
}

// Function to set YPO Education Patient educations videos iframe height			
function setYPOEduIframeHeight(queryString){
	var checkTitle = $(queryString).attr('title');
	if (checkTitle == '' || checkTitle == undefined) {
		var iframeSrc, iframeVideo, iframeValue, iframeName, iframeLength, iframeFind, iframeGet, iframeTitle = '';
		var defaultTitle = 'Patient Education Video from Your Practice Online';
		iframeSrc = $(queryString).attr('src');
		iframeVideo = iframeSrc.split('/');
		iframeFind = iframeVideo.indexOf('video');
		iframeGet = iframeVideo[iframeFind - 1];
		if (iframeGet !== undefined) {
			iframeName = iframeGet.split('-');
			iframeLength = iframeName.length;
			for (i = 0; i < iframeLength - 1; i++) {
				iframeTitle += iframeName[i].substr(0, 1).toUpperCase() + iframeName[i].substr(1) + ' ';
			}
			iframeValue = iframeTitle + 'of ' + defaultTitle;
			$(queryString).attr('title', iframeValue);
		}  else {
			$(queryString).attr('title', defaultTitle);
		}
	}
}