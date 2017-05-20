
var api_key = "b23b4b34d31613d1f7ee1a4b81e4615d";

function sendRequest (name)
{
	var artist = name;
    var xhr = new XMLHttpRequest();
    var method = "artist.getinfo";
    xhr.open("GET", "proxy.php?method="+method+"&artist="+artist+"&api_key="+api_key+"&format=json", true);

    var similarArtistXHR = new XMLHttpRequest();
    var similarArtistMethod = "artist.getSimilar";    
    similarArtistXHR.open("GET", "proxy.php?method="+similarArtistMethod+"&artist="+artist+"&api_key="+api_key+"&format=json", true);

    var albumsXHR = new XMLHttpRequest();
    var albumsMethod = "artist.getTopAlbums";
    albumsXHR.open("GET", "proxy.php?method="+albumsMethod+"&artist="+artist+"&api_key="+api_key+"&format=json", true);    

    xhr.setRequestHeader("Accept","application/json");
    similarArtistXHR.setRequestHeader("Accept","application/json");
    albumsXHR.setRequestHeader("Accept","application/json");
    
    xhr.onreadystatechange = function () 
    {
        if (this.readyState == 4) 
        {
            var json = JSON.parse(this.responseText);
            var str = JSON.stringify(json,undefined,2);
            var name = json.artist.name;
            var url = json.artist.url;
            var image = json.artist.image[2]["#text"];
            var content = json.artist.bio.content;
            
            document.getElementById("output").innerHTML =  "<h1>" + name + "</h1>";
            document.getElementById("outer").innerHTML =  "<img src = " + image + "></img>" + content;
            document.getElementById("url").innerHTML = "Click here to get more info on : " + "<a href = " + url + ">" + name + "</a>";
            
        }   
    
    };
    xhr.send(null);

    
    albumsXHR.onreadystatechange = function () 
    {
        if (this.readyState == 4) 
        {
            var json = JSON.parse(this.responseText);
            var str = JSON.stringify(json,undefined,2);
            console.log(str);
            var albums = "<h3> Top Albums </h3>";

            for (var i = 0; i < 3; i ++)
            {
                albums += "<figure><img src =" + json.topalbums.album[i].image[2]["#text"] + ">" + "<figcaption>" + json.topalbums.album[i].name + "</figcaption>" + "&emsp;";
             
            }

            document.getElementById("albums").innerHTML =  albums;
            
        }
    }
    albumsXHR.send(null);


    similarArtistXHR.onreadystatechange = function () 
    {
        if (this.readyState == 4) 
        {
            var json = JSON.parse(this.responseText);
           

            var similar = "<h3> Similar Artists </h3>";

            for (var i = 0; i < 3; i++)
            {
                similar += "<li>" + json.similarartists.artist[i].name + "</li>";
            }

            document.getElementById("similar").innerHTML =  similar;
        }
    }
    similarArtistXHR.send(null);
}