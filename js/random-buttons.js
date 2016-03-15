    var randomLink = function () {

        // first create an array of links
        var links = [
			"childhood.html",
            "personal.html",
            "philanthropy.html",
        ];

        // then work out the maximum random number size
        // by counting the number of links in the array
        var max = (links.length)

        // now generate a random number
        var randomNumber = Math.floor(Math.random()*max);

        // use that random number to retrieve a link from the array
        var link = links[randomNumber];

        // change the location of the window object
        window.location =  link;
    }
	
	var randomLink1 = function () {

        // first create an array of links
        var links1 = [
            "tesla.html",
            "spacex.html",
			"solarcity.html",
			"hyperloop.html"
        ];

        // then work out the maximum random number size
        // by counting the number of links in the array
        var max1 = (links1.length)

        // now generate a random number
        var randomNumber1 = Math.floor(Math.random()*max1);

        // use that random number to retrieve a link from the array
        var link1 = links1[randomNumber1];

        // change the location of the window object
        window.location =  link1;
    }
	
	var randomLink2 = function () {

        // first create an array of links
        var links2 = [
            "ai.html",
            "extraterrestrial.html",
        ];

        // then work out the maximum random number size
        // by counting the number of links in the array
        var max2 = (links2.length)

        // now generate a random number
        var randomNumber2 = Math.floor(Math.random()*max2);

        // use that random number to retrieve a link from the array
        var link2 = links2[randomNumber2];

        // change the location of the window object
        window.location =  link2;
    }