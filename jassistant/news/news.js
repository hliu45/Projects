var apiKey = "79fb3c7e7cb14dc9a5a5de17e04ebc1a";
var latest="latest";
var topNews="top";
var popular="popular";
var cnn = "cnn"
var espn = "espn";
var cnbc = "cnbc";
var googleNews="google-news";
var dailyMail = "daily-mail";
var nationalGeography = "national-geographic";
var verge = "the-verge";
var reuters = "reuters";
var bbcSport = "bbc-sport"
var arsTechnical = "ars-technica"
var newsSelect = [cnbc,arsTechnical,bbcSport,reuters,verge,espn];
var prev = "https://newsapi.org/v1/articles?source=";


var news1;
var news2;
var news3;
var news4;
var news5;
var news6;

var tpic1,tpic2,tpic3,tpic4,tpic5,tpic6;
var tit1,tit2,tit3,tit4,tit5,tit6;
var td1,td2,td3,td4,td5,td6;

var tpic;
var tit;
var td;

var pic1,pic2,pic3,pic4,pic5,pic6;
var des1,des2,des3,des4,des5,des6;
var aut1,aut2,aut3,aut4,aut5,aut6;
var tim1,tim2,tim3,tim4,tim5,tim6;

var pic;
var des;
var aut;
var tim;


window.onload = function(){
	
	initial();
	var i;
	var url;
	
	for(i=0;i<6;i++){
		url = prev + newsSelect[i] + "&sortBy=" + topNews + "&apiKey="+apiKey;
		sendRequest(url,i);
	}

}


function selectNews(x){
	updateNews(newsCol[x].articles);
}


function sendRequest(url,v){
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function(){
		if(xhttp.readyState == 4 && xhttp.status == 200){
	
			var news = JSON.parse(xhttp.responseText);
			updateHeadline(news.articles,v);
			
			if(v==3){
				updateNews(news.articles,0);
			}else if(v==1){
				updateNews(news.articles,1);
			}
		}
	};
	xhttp.open("GET", url, true);
	xhttp.send();
}

function updateHeadline(article,i){
	
	tpic[i].src = article[0].urlToImage;
	tit[i].innerHTML = article[0].title;
	td[i].innerHTML = article[0].description;
	
}

function updateNews(article,x){
	
	
	for(i=0;i<Math.min(6,article.length-1);i++){
		pic[i+x*6].src = article[i+1].urlToImage;
		des[i+x*6].innerHTML = article[i+1].description;
		aut[i+x*6].innerHTML = article[i+1].author;
		tim[i+x*6].innerHTML = article[i+1].publishedAt;
	}
}

function initial(){
	tpic1 = document.getElementById("tablepic1");
	tpic2 = document.getElementById("tablepic2");
	tpic3 = document.getElementById("tablepic3");
	tpic4 = document.getElementById("tablepic4");
	tpic5 = document.getElementById("tablepic5");
	tpic6 = document.getElementById("tablepic6");
	tpic = [tpic1,tpic2,tpic3,tpic4,tpic5,tpic6];
	
	tit1 = document.getElementById("tit1");
	tit2 = document.getElementById("tit2");
	tit3 = document.getElementById("tit3");
	tit4 = document.getElementById("tit4");
	tit5 = document.getElementById("tit5");
	tit6 = document.getElementById("tit6");
	tit = [tit1,tit2,tit3,tit4,tit5,tit6];
	
	td1 = document.getElementById("td1");
	td2 = document.getElementById("td2");
	td3 = document.getElementById("td3");
	td4 = document.getElementById("td4");
	td5 = document.getElementById("td5");
	td6 = document.getElementById("td6");
	td = [td1,td2,td3,td4,td5,td6];

	pic1 = document.getElementById("pic1");
	pic2 = document.getElementById("pic2");
	pic3 = document.getElementById("pic3");
	pic4 = document.getElementById("pic4");
	pic5 = document.getElementById("pic5");
	pic6 = document.getElementById("pic6");
	pic7 = document.getElementById("pic7");
	pic8 = document.getElementById("pic8");
	pic9 = document.getElementById("pic9");
	pic10 = document.getElementById("pic10");
	pic11 = document.getElementById("pic11");
	pic12 = document.getElementById("pic12");
	pic = [pic1,pic2,pic3,pic4,pic5,pic6,pic7,pic8,pic9,pic10,pic11,pic12];
	
	des1 = document.getElementById("description1");
	des2 = document.getElementById("description2");
	des3 = document.getElementById("description3");
	des4 = document.getElementById("description4");
	des5 = document.getElementById("description5");
	des6 = document.getElementById("description6");
	des7 = document.getElementById("description7");
	des8 = document.getElementById("description8");
	des9 = document.getElementById("description9");
	des10 = document.getElementById("description10");
	des11 = document.getElementById("description11");
	des12 = document.getElementById("description12");
	des = [des1,des2,des3,des4,des5,des6,des7,des8,des9,des10,des11,des12];
	
	aut1 = document.getElementById("author1");
	aut2 = document.getElementById("author2");
	aut3 = document.getElementById("author3");
	aut4 = document.getElementById("author4");
	aut5 = document.getElementById("author5");
	aut6 = document.getElementById("author6");
	aut7 = document.getElementById("author7");
	aut8 = document.getElementById("author8");
	aut9 = document.getElementById("author9");
	aut10 = document.getElementById("author10");
	aut11 = document.getElementById("author11");
	aut12 = document.getElementById("author12");
	aut = [aut1,aut2,aut3,aut4,aut5,aut6,aut7,aut8,aut9,aut10,aut11,aut12];
	
	tim1 = document.getElementById("time1");
	tim2 = document.getElementById("time2");
	tim3 = document.getElementById("time3");
	tim4 = document.getElementById("time4");
	tim5 = document.getElementById("time5");
	tim6 = document.getElementById("time6");
	tim7 = document.getElementById("time7");
	tim8 = document.getElementById("time8");
	tim9 = document.getElementById("time9");
	tim10 = document.getElementById("time10");
	tim11 = document.getElementById("time11");
	tim12 = document.getElementById("time12");
	tim = [tim1,tim2,tim3,tim4,tim5,tim6,tim7,tim8,tim9,tim10,tim11,tim12];

}

