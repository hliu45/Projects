var APPID = "79d05f988cc03aeda122eb6d9561d4a9";
var temp;
var loc;
var icon;
var humidity;
var wind;
var direction;
var time;
var d;
var xhttp;

function updateByZip(zip){
	var url = "http://api.openweathermap.org/data/2.5/weather?" +
		"zip=" + zip + 
		"&APPID=" + APPID;
		
	var url_uv = "http://api.openweathermap.org/data/2.5/forecast?zip=" 
		+ zip + "&APPID=" + APPID;
	
	sendRequest(url);
	sendRequestForUV(url_uv);
}

function updateByGeo(lat, lon){
    var url = "http://api.openweathermap.org/data/2.5/weather?" +
	"lat=" + Math.round(lat*10)/10 +
	"&lon=" + Math.round(lon*10)/10 +
	"&APPID=" + APPID;

	var url_uv = "http://api.openweathermap.org/v3/uvi/"
	+Math.round(lat*10)/10+","
	+Math.round(lon*10)/10
	+"/current.json?appid=" 
	+ APPID;
	
	var url_for = "http://api.openweathermap.org/data/2.5/forecast?lat="
	+Math.round(lat*10)/10+"&lon="
	+Math.round(lon*10)/10+ "&APPID="
	+ APPID;
	
	sendRequest(url); 
	sendRequestForUV(url_uv);
	sendRequestForcast(url_for);
}

function sendRequest(url){
	xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function(){
		if(xhttp.readyState == 4 && xhttp.status == 200){
			var data = JSON.parse(xhttp.responseText);
			var weather = {};
			weather.icon = data.weather[0].id;
			weather.humidity = data.main.humidity;
			weather.wind = data.wind.speed;
			weather.direction = degreesToDirection(data.wind.deg);
			weather.loc = data.name;
			weather.temp = K2F(data.main.temp);
			update(weather);
		}
	};
	xhttp.open("GET", url, true);
	xhttp.send();
}

function sendRequestForUV(url_uv){
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function(){
		if(xhttp.readyState == 4 && xhttp.status == 200){
			var info = JSON.parse(xhttp.responseText);
			var uv = info.data;
			
			var p = document.getElementById("uv");
			p.innerHTML = uv;
		}
	};
	xhttp.open("GET", url_uv, true);
	xhttp.send();
}

function sendRequestForcast(url_for){
	xhttpf = new XMLHttpRequest();
	xhttpf.onreadystatechange = function(){
		if(xhttpf.readyState == 4 && xhttpf.status == 200){
			var info = JSON.parse(xhttpf.responseText);
			
			var firstE = document.getElementById("first");
			var secondE = document.getElementById("second");
			var thirdE = document.getElementById("third");
			var fouthE = document.getElementById("fouth");
			var fifthE = document.getElementById("fivth");
			
			var firstI = document.getElementById("ftem");
			var secondI = document.getElementById("stem");
			var thirdI = document.getElementById("ttem");
			var fouthI = document.getElementById("fotem");
			var fifthI = document.getElementById("fitem");
			
			var ele = [firstE,secondE,thirdE,fouthE,fifthE];
			var el2 = [firstI,secondI,thirdI,fouthI,fifthI];
			
			var i;
			for(i=0;i<5;i++){
				ele[i].innerHTML = parseDate(info.list[6+i*7].dt_txt);
				el2[i].src = "http://openweathermap.org/img/w/"+ info.list[1+i*7].weather[0].icon +".png";
			}
		}
	};
	xhttpf.open("GET", url_for, true);
	xhttpf.send();
}

function parseDate(str){
	var str = str.split("-");
	var tem = str[1]+"/"+str[2].split(" ")[0];
	return tem;
}

function degreesToDirection(degrees){
    var range = 360/16;
    var low = 360 - range/2;
    var high = (low + range) % 360;
    var angles = ["N", "NNE", "NE", "ENE", "E", "ESE", "SE", "SSE", "S", "SSW", "SW", "WSW", "W", "WNW", "NW", "NNW"];
    for( i in angles ) {
	if(degrees >= low && degrees < high){
	    return angles[i];
	}
	low = (low + range) % 360;
	high = (high + range) % 360;
    }
    return "N";
    
}

function K2C(k){
	return Math.round(k-273.15);
}

function K2F(k){
		return Math.round(k*(9/5)-495.67);
}

function update(weather) {
    icon.src = "imgs/codes/" + weather.icon + ".png"
    humidity.innerHTML = weather.humidity;
    wind.innerHTML = weather.wind;
    direction.innerHTML = weather.direction;
    loc.innerHTML = weather.loc;
    temp.innerHTML = weather.temp;
	time.innerHTML = (d.getMonth()+1)+"/"+d.getDate()+"/"+d.getFullYear()+"@"+d.getHours()+":"+d.getMinutes();
	
	var j = weather.icon;
	updateBackgroundImage(j);
}

// update background image based on the id to the image in imgs/codes 
function updateBackgroundImage(j){
	var i = Math.floor(j);
	var blue = document.getElementById("blue");
	var deg = document.getElementById("deg");
	
	if(d.getHours()>=20 || d.getHours()<8){
		blue.style.backgroundImage = "url('imgs/night.jpg')";
		temp.style.color = "white";
		deg.style.color = "white";
	}else{
		if(j==800){
			blue.style.backgroundImage = "url('imgs/sun.png')";
		}else if(i==2 || i==3 || i==5 || i==9){
			blue.style.backgroundImage = "url('imgs/raindrop.png')";
		}else{
			blue.style.backgroundImage = "url('imgs/cloud.png')";
		}
	}
}

function showPosition(position){
	updateByGeo(position.coords.latitude, position.coords.longitude);
}

window.onload = function () {
    temp = document.getElementById("temperature");
    loc = document.getElementById("location");
    icon = document.getElementById("icon");
    humidity = document.getElementById("humidity");
    wind = document.getElementById("wind");
    direction = document.getElementById("direction");
	time = document.getElementById("time");
	d = new Date();

    //updateByZip(95035);
	if(navigator.geolocation){
		navigator.geolocation.getCurrentPosition(showPosition);
	}else {
		var zip = window.prompt("Could not locate your location, what is your zip code");
		updateByZip(zip);
	}
}

