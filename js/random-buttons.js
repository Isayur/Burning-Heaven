    var randomLink = function () {

        var links = [
			"index.php?page=childhood",
            "index.php?page=personal",
            "index.php?page=philanthropy",
        ];
        var max = (links.length)
        var randomNumber = Math.floor(Math.random()*max);
        var link = links[randomNumber];
        window.location =  link;
    }
	
	var randomLink1 = function () {

        var links1 = [
            "index.php?page=tesla",
            "index.php?page=spacex",
			"index.php?page=solarcity",
			"index.php?page=hyperloop"
        ];
        var max1 = (links1.length)
        var randomNumber1 = Math.floor(Math.random()*max1);
        var link1 = links1[randomNumber1];
        window.location =  link1;
    }
	
	var randomLink2 = function () {

        var links2 = [
            "index.php?page=ai",
            "index.php?page=extraterrestrial",
        ];
        var max2 = (links2.length)
        var randomNumber2 = Math.floor(Math.random()*max2);
        var link2 = links2[randomNumber2];
        window.location =  link2;
    }