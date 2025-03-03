(function($) {
    $.fn.countdown = function(options, callback) {

        //custom 'this' selector
        thisEl = $(this);

        //array of custom settings
        var settings = { 
            'date': null,
            'format': null
        };

        //append the settings array to options
        if(options) {
            $.extend(settings, options);
        }

        // Globális változó, hogy elkerüld a hibát
        var interval; 

        //main countdown function
        function countdown_proc() {
            
            var eventDate = Date.parse(settings['date']) / 1000;
            var currentDate = Math.floor($.now() / 1000);
            
            if(eventDate <= currentDate) {
                if (typeof callback === "function") {
                    callback.call(this);
                }
                clearInterval(interval);
            }
            
            var seconds = eventDate - currentDate;
            
            var days = Math.floor(seconds / (60 * 60 * 24)); 
            seconds -= days * 60 * 60 * 24; 
            
            var hours = Math.floor(seconds / (60 * 60));
            seconds -= hours * 60 * 60; 
            
            var minutes = Math.floor(seconds / 60);
            seconds -= minutes * 60; 
            
            // Conditional pluralization
            thisEl.find(".timeRefDays").text(days == 1 ? "day" : "days");
            thisEl.find(".timeRefHours").text(hours == 1 ? "hour" : "hours");
            thisEl.find(".timeRefMinutes").text(minutes == 1 ? "minute" : "minutes");
            thisEl.find(".timeRefSeconds").text(seconds == 1 ? "second" : "seconds");

            // Format settings
            if(settings['format'] == "on") {
                days = days.toString().padStart(2, '0');
                hours = hours.toString().padStart(2, '0');
                minutes = minutes.toString().padStart(2, '0');
                seconds = seconds.toString().padStart(2, '0');
            }

            // Update the countdown HTML values
            if(!isNaN(eventDate)) {
                thisEl.find(".days").text(days);
                thisEl.find(".hours").text(hours);
                thisEl.find(".minutes").text(minutes);
                thisEl.find(".seconds").text(seconds);
            } else { 
                alert("Invalid date. Example: 12 Tuesday 2012 17:30:00");
                clearInterval(interval);
            }
        }

        // Run the function once
        countdown_proc();

        // Start the interval
        interval = setInterval(countdown_proc, 1000);

    };
}) (jQuery);
