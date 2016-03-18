    var randomLink = function () {

        var links = [
			"childhood.html",
            "personal.html",
            "philanthropy.html",
        ];
        var max = (links.length)
        var randomNumber = Math.floor(Math.random()*max);
        var link = links[randomNumber];
        window.location =  link;
    }
	
	var randomLink1 = function () {

        var links1 = [
            "tesla.html",
            "spacex.html",
			"solarcity.html",
			"hyperloop.html"
        ];
        var max1 = (links1.length)
        var randomNumber1 = Math.floor(Math.random()*max1);
        var link1 = links1[randomNumber1];
        window.location =  link1;
    }
	
	var randomLink2 = function () {

        var links2 = [
            "ai.html",
            "extraterrestrial.html",
        ];
        var max2 = (links2.length)
        var randomNumber2 = Math.floor(Math.random()*max2);
        var link2 = links2[randomNumber2];
        window.location =  link2;
    }