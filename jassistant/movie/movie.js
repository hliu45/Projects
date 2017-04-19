var apiKey = "44aedb83a509a0d286ca9d98540cf018";
var url;
var result;
var imag;
var slideIndex = 0;
var imagePrevious = "https://image.tmdb.org/t/p/";
var image1,image2,image3,image4;
var img;
var movieObj = new Array(3);
var icon1,icon2,icon3,icon4;
var icon;  						// icon for introduction
var release1,release2,release3,release4;
var release; 					//release_date
var id1,id2,id3,id4;
var id; 						// id 
var ov1,ov2,ov3,ov4;
var ov; 						// overview
var pl1,pl2,pl3,pl4;
var pl; 						// popularity
var search;
var rate;

window.onload = function (){
	searchFunction("star");
	rate = [[document.getElementById("rate1_1"),document.getElementById("rate1_2"),document.getElementById("rate1_3"),
			document.getElementById("rate1_4"),document.getElementById("rate1_5")],
			[document.getElementById("rate2_1"),document.getElementById("rate2_2"),document.getElementById("rate2_3"),
			document.getElementById("rate2_4"),document.getElementById("rate2_5")],
			[document.getElementById("rate3_1"),document.getElementById("rate3_2"),document.getElementById("rate3_3"),
			document.getElementById("rate3_4"),document.getElementById("rate3_5")],
			[document.getElementById("rate4_1"),document.getElementById("rate4_2"),document.getElementById("rate4_3"),
			document.getElementById("rate4_4"),document.getElementById("rate4_5")]];
}

function hover(x,y) {
    var i;
	for(i=0;i<=y;i++){
		rate[x][i].src="yes_oscar.png";
	}
	for(i=y+1;i<5;i++){
		rate[x][i].src="no_oscar.png";
	}
}

function leave(x){
	var i;
	for(i=0;i<5;i++){
		rate[x][i].src = "no_oscar.png";
	}
}

function searchBegin(){
	search = document.getElementById("movieSearch").value;
	searchFunction(search);
}

function searchFunction(search){
	url = "https://api.themoviedb.org/3/search/movie?api_key="+apiKey+"&query="+search;
	image1 = document.getElementById("pic1");
	image2 = document.getElementById("pic2");
	image3 = document.getElementById("pic3");
	image4 = document.getElementById("pic4");
	img = [image1, image2, image3,image4];
	
	icon1 = document.getElementById("icon1");
	icon2 = document.getElementById("icon2");
	icon3 = document.getElementById("icon3");
	icon4 = document.getElementById("icon4");
	icon = [icon1, icon2, icon3,icon4];
	
	release1 = document.getElementById("releaseDate1");
	release2 = document.getElementById("releaseDate2");
	release3 = document.getElementById("releaseDate3");
	release4 = document.getElementById("releaseDate4");
	release = [release1,release2,release3,release4];
	
	ov1 = document.getElementById("overView1");
	ov2 = document.getElementById("overView2");
	ov3 = document.getElementById("overView3");
	ov4 = document.getElementById("overView4");
	ov = [ov1,ov2,ov3,ov4];
	
	pl1 = document.getElementById("popularity1");
	pl2 = document.getElementById("popularity2");
	pl3 = document.getElementById("popularity3");
	pl4 = document.getElementById("popularity4");
	pl = [pl1,pl2,pl3,pl4];
	
	sendRequest(url);
}
function sendRequest(url_for){
	var xhttpf = new XMLHttpRequest();
	xhttpf.onreadystatechange = function(){
		if(xhttpf.readyState == 4 && xhttpf.status == 200){
			var info = JSON.parse(xhttpf.responseText);
			
			result = info.results;
			
			var i;
			for(i=0;i<4;i++){
				if(slideIndex<result.length){
					if(result[slideIndex].poster_path!=null){
						img[i].src = imagePrevious + "w500" + result[slideIndex].poster_path;
						icon[i].src = imagePrevious + "w185" + result[slideIndex].poster_path;
						release[i].innerHTML = result[slideIndex].release_date;
						ov[i].innerHTML = result[slideIndex].overview;
						pl[i].innerHTML = Math.floor(result[slideIndex].popularity*1000)/1000;
						movieObj[i]= result[slideIndex];
					}else{
						img[i].src = "not_found.png";	
						movieObj[i]= null;
					}
				}
				slideIndex++;
			}
			
		}
	};
	xhttpf.open("GET", url_for, true);
	xhttpf.send();
}

function minusDivs() {
	slideIndex--;
	if (slideIndex >= result.length) {slideIndex = 0;}    
	if (slideIndex < 0) {slideIndex = result.length-1;}
	
	img[0].src = img[1].src;
	img[1].src = img[2].src;
	img[2].src = img[3].src;
	
	movieObj[0] = movieObj[1];
	movieObj[1] = movieObj[2];
	movieObj[2] = movieObj[3];
	
	updateLastImage(slideIndex,3);
	
}

function plusDivs() {
	slideIndex++;
	if (slideIndex >= result.length) {slideIndex = 0;}    
	if (slideIndex < 0) {slideIndex = result.length-1;}
	
	img[3].src = img[2].src;
	img[2].src = img[1].src;
	img[1].src = img[0].src;
	
	movieObj[3] = movieObj[2];
	movieObj[2] = movieObj[1];
	movieObj[1] = movieObj[0];
	
	updateLastImage(slideIndex-4,0);
}

function updateLastImage(x,idx){
	while(x<0){
		x+=result.length;
	}
	if(result[x].poster_path!=null){
		img[idx].src = imagePrevious + "w500" + result[x].poster_path;
		movieObj[idx] = result[x];
	}else{
		img[idx].src = "not_found.png";
		movieObj[idx]=null;
	}
}

