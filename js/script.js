var animationSpeed = 600;

var easing = "easeOutCubic";

var photos = [{
    "title": "Games",
    "cssclass": "games",
    "image": "img5.jpg",
    "text": "PC games, also known as computer games or personal computer games, are video games played on a personal computer rather than a dedicated video game console or arcade machine. Their defining characteristics include a lack of any centralized controlling authority, a greater degree of user control over the video-gaming hardware and software used and a generally greater capacity in input, processing, and output.",
    "url": 'http://localhost/website%20cw/cw/php/buyGames.php',
    "urltext": 'Get it now'
}, {
    "title": "Laptops",
    "cssclass": "laptops",
    "image": "img3.jpg",
    "text": "A gaming computer (also gaming rig and sometimes called a gaming PC) is a personal computer designed for playing computationally demanding video games. Gaming computers are very similar to conventional PCs, with the main difference being the addition of gaming-oriented components such as one or more high-end video cards. Gaming computers are often associated with enthusiast computing due to an overlap in interests. However, while a gaming PC is built to achieve performance for actual gameplay, enthusiast PCs are built to maximize performance, using games as a benchmark.",
    "url": 'http://localhost/website%20cw/cw/php/buyLaptop.php',
    "urltext": 'Get it now'
}, {
    "title": "Accessories",
    "cssclass": "accessories",
    "image": "img4.jpg",
    "text": "The incredibly thin Apple Wireless Keyboard sits on your desk surrounded by nothing but glorious space. It’s cable-free, so you’re free to type wherever you like — with the keyboard in front of your computer or even on your lap. Not only does the Apple Wireless Keyboard come standard with the new iMac, it’s perfect for any Mac with Bluetooth wireless technology.",
    "url": 'http://localhost/website%20cw/cw/php/BuyAccessories.php',
    "urltext": 'Get it now'
}, {
    "title": "Gaming PC",
    "cssclass": "gamingpc",
    "image": "img2.jpg",
    "text": "A gaming computer (also gaming rig and sometimes called a gaming PC) is a personal computer designed for playing computationally demanding video games. Gaming computers are very similar to conventional PCs, with the main difference being the addition of gaming-oriented components such as one or more high-end video cards. Gaming computers are often associated with enthusiast computing due to an overlap in interests. However, while a gaming PC is built to achieve performance for actual gameplay, enthusiast PCs are built to maximize performance, using games as a benchmark.",
    "url": 'http://localhost/website%20cw/cw/php/buyPCs.php',
    "urltext": 'Get it now'
}];

// 0-based index to set which picture to show first
var activeIndex = 0;

$(function() {

    // Variable to store if the animation is playing or not
    var isAnimating = false;

    // Register keypress events on the whole document
    $(document).keypress(function(e) {

        // Keypress navigation
        // More info: http://stackoverflow.com/questions/302122/jquery-event-keypress-which-key-was-pressed
        if (!e.which && ((e.charCode || e.charCode === 0) ? e.charCode : e.keyCode)) {
            e.which = e.charCode || e.keyCode;
        }

        var imageIndex = e.which - 49; // The number "1" returns the keycode 49. We need to retrieve the 0-based index.
        startAnimation(imageIndex);
    });

    // Add the navigation boxes
    $.template("navboxTemplate", "<div class='navbox ${cssclass}'><ul></ul><h2>${title}</h2><p>${text}</p><p class='bottom'><a href='${url}' title='${title}'>${urltext}</a></p></div>");
    $.tmpl("navboxTemplate", photos).appendTo("#navigationBoxes");

    // Add the navigation, based on the Photos
    // We can't use templating here, since we need the index + append events etc.
    var cache = [];
    for (var i = 1; i < photos.length + 1; i++) {
        $("<a />")
            .html(i)
            .data("index", i - 1)
            .attr("title", photos[i - 1].title)
            .click(function() {
                showImage($(this));
            })
            .appendTo(
                $("<li />")
                .appendTo(".navbox ul")
            );

        // Preload the images
        // More info: http://engineeredweb.com/blog/09/12/preloading-images-jquery-and-javascript
        var cacheImage = $("<img />").attr("src", "images/" + photos[i - 1]);
        cache.push(cacheImage);
    }

    // Set the correct "Active" classes to determine which navbox we're currently showing
    $(".navbox").each(function(index) {
        var parentIndex = index + 1;
        $("ul li a", this).each(function(index) {
            if (parentIndex == (index + 1)) {
                $(this).addClass("active");
            }
        });
    });

    // Hide all the navigation boxes, except the one from current index
    $(".navbox:not(:eq(" + activeIndex + "))").css('left', '-450px');

    // Set the proper background image, based on the active index
    $("<div />")
        .css({
            'background-image': "url(images/" + photos[activeIndex].image + ")"
        })
        .prependTo("#pictureSlider");

    //
    // Shows an image and plays the animation
    //
    var showImage = function(docElem) {
        // Retrieve the index we need to use
        var imageIndex = docElem.data("index");

        startAnimation(imageIndex);
    };

    //
    // Starts the animation, based on the image index
    //
    var startAnimation = function(imageIndex) {
        // If the same number has been chosen, or the index is outside the
        // photos range, or we're already animating, do nothing
        if (activeIndex == imageIndex ||
            imageIndex > photos.length - 1 ||
            imageIndex < 0 ||
            isAnimating) {
            return;
        }

        isAnimating = true;
        animateNavigationBox(imageIndex);
        slideBackgroundPhoto(imageIndex);

        // Set the active index to the used image index
        activeIndex = imageIndex;
    };

    //
    // Animate the navigation box
    //
    var animateNavigationBox = function(imageIndex) {

        // Hide the current navigation box
        $(".navbox").eq(activeIndex)
            .css({
                'z-index': '998'
            }) // Push back
            .animate({
                left: '-450px'
            }, animationSpeed, easing);

        // Show the accompanying navigation box
        $(".navbox").eq(imageIndex)
            .css({
                'z-index': '999'
            }) // Push forward
            .animate({
                left: '0px'
            }, animationSpeed, easing);
    };

    //
    // Slides the background photos
    //
    var slideBackgroundPhoto = function(imageIndex) {
        // Retrieve the accompanying photo based on the index
        var photo = photos[imageIndex];

        // Create a new div and apply the CSS
        $("<div />")
            .css({
                'left': '-2000px',
                'background-image': "url(images/" + photo.image + ")"
            })
            .addClass(photo.cssclass)
            .prependTo("#pictureSlider");

        // Slide all the pictures to the right
        $("#pictureSlider div").animate({
            left: '+=2000px'
        }, animationSpeed, easing, function() {
            // Remove any picture that is currently outside the screen, only the first is visible
            $("#pictureSlider div:not(:first)").remove();

            // Animation is complete
            isAnimating = false;
        });
    };

});