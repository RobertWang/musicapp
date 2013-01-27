#DOCUMENTATION#


# CLI Installation #

None

# Usage #

Using nodejs

# Introduction #

## Nhacso.net ##

Their link's ids are encrypted in simple ways. They can be cracked by utilizing this func

```coffeescript
decodeId = (songId) ->
	arr = Array::slice.call songId.toString()
	arr = arr.map (value) -> parseInt(value)
	a = []
	songid = ""
	a[1] = ['bw','bg','bQ','bA','aw','ag','aQ','aA','Zw','Zg']
	a[2] = ['f','e','d','c','b','a','Z','Y','X','W']
	a[3] = ['N','J','F','B','d','Z','V','R','t','p']
	a[4] = ['U0','Uk','UU','UE','V0','Vk','VU','VE','W0','Wk']
	a[5] = ['R','Q','T','S','V','U','X','W','Z','Y']
	a[6] = ['h','l','p','t','x','1','5','9','B','F']
	a[7] = ['','X1','XF','XV','Wl','W1','WF','WV','Vl','V1']
	songid += a[7-i+1][arr[i-1]] for i in [1..arr.length]
	songid
```

EX: `song_id` : **345678** will become **XVxUVURX**


### Get links automatically###

We can grasp data with these links  

**Using CLI**  
[http://nhacso.net/download-nhac/link-tu-tao/=.1250000.html](http://nhacso.net/download-nhac/link-tu-tao/=.1250000.html)  
`1250000` is `songid`. 

**Get cookie** `FPTID` and **Hash** `hash`
```bash
curl  https://id.fpt.net/\?display\=iframe -v
```
*USING `grep` and `sed`*  
```
curl -s https://id.fpt.net/\?display\=iframe -i | grep -i -E "FPTID\=[0-9a-zA-Z]+|id\=\"hash\" value\=\"" | sed -e 's/Set\\-Cookie\: //' -e 's/\; path=\///' -e 's/\<input type\=\"hidden\" name\=\"hash\" id\=\"hash\" value\=\"//' -e 's/\" \/\>//'
```
**Get cookie** `Auth`  
```bash
curl  https://id.fpt.net/?display=iframe -d "hash=a9785186138d519050ea35a178b749ff&username=goofyfpt%40outlook.com&password=goofyfpt" -b "FPTID=j96g6to8r0qvcvgsmlnn04he43" -v
```
`bash` and `FPTID` have to be consitent  


```
curl -s https://id.fpt.net/\?display\=iframe -d "hash=a9785186138d519050ea35a178b749ff&username=goofyfpt%40outlook.com&password=goofyfpt" -b "FPTID=j96g6to8r0qvcvgsmlnn04he43" -i| grep -i 'Auth\=[0-9a-zA-Z\%]\\+'| sed -e 's/Set\\-Cookie\: //' -e 's/\; path\=\/\; domain\=\\.fpt\\.net\; httponly//'
```
**Get song** 
```bash
curl "http://nhacso.net/download-nhac/link-tu-tao/=.1250000.html" -o sample.mp3 -b Auth=V0JAaVlcZkNEXlwAECkcCzVFAgNVAhwuXgtnBwdbAkkEPF1UbQ
```
Remember to use cookie. EX: `Auth=V0JAaVlcZkNEXlwAECkcCzVFAgNVAhwuXgtnBwdbAkkEPF1UbQ`. 

**BONUS**  
Auto login  
[http://nhacso.net/sso.php?id=1240090058&value=2&action=login&sid=V0JAb1ldb0NGV1wWQzIZUDtEQFoAAh81Bg1oRRBbFhwfLAMQag%3D%3D](http://nhacso.net/sso.php?id=1240090058&value=2&action=login&sid=V0JAb1ldb0NGV1wWQzIZUDtEQFoAAh81Bg1oRRBbFhwfLAMQag%3D%3D)  
Insert proper `Auth`  

### Song ###  
[http://nhacso.net/flash/song/xnl/1/id/XVxUVURX](http://nhacso.net/flash/song/xnl/1/id/XVxUVURX)  
  


[http://nhacso.net/song/parse?listIds=1250000](http://nhacso.net/song/parse?listIds=1250000)  

> `listIds`means you can pass parameters with the following pattern : `para1,para2,para3`  

[http://nhacso.net/artist/parse?listIds=5092,186,131,47,2088,2130,80,2407,17,55](http://nhacso.net/artist/parse?listIds=5092,186,131,47,2088,2130,80,2407,17,55)  
> Get similar songs w.r.t. `song_id` X1pUUkFdaA , `5092,186,131,47,2088,2130,80,2407,17,55`are `artistId`

[http://nhacso.net/statistic/songlike?listIds=1251227](http://nhacso.net/statistic/songlike?listIds=1251227)  
> Get `songlike`  

[http://nhacso.net/statistic/songtotallisten?listIds=1260796,1260795](http://nhacso.net/statistic/songtotallisten?listIds=1260796,1260795)  

> Get `songtotallisten` ; `1260796,1260795`are songIds  

[http://nhacso.net/statistic/songstatistic?listIds=1260796,1260795](http://nhacso.net/statistic/songstatistic?listIds=1260796,1260795)  

> Get `songstatistic`; `1260796,1260795` are songIds  

> View page source to get the structure. XML Format  

### Video ### 
[http://nhacso.net/flash/video/xnl/1/id/X1xSV0Y](http://nhacso.net/flash/video/xnl/1/id/X1xSV0Y) 
> `/id/X1xSV0Y` can be replaced by `id/14345`  

[http://nhacso.net/video/parse?listIds=14345](http://nhacso.net/video/parse?listIds=14345)  

[http://nhacso.net/video/numbersub?listIds=14502%2C14506](http://nhacso.net/video/numbersub?listIds=14502%2C14506)  

> Get Subtitles 

[http://nhacso.net/statistic/videostatistic?listIds=14449](http://nhacso.net/statistic/videostatistic?listIds=14449)  

> Get `videostatistic`  

MISC:  
[http://nhacso.net/video/statisticview](http://nhacso.net/video/statisticview)  
> Request Method: `POST` , form data: `id:14449` <= increase song plays. Use cURL command `curl -XPOST http://nhacso.net/video/statisticview -d  "id=14449"`  

[http://nhacso.net/producer/getproducer](http://nhacso.net/producer/getproducer)  
> Request Method: `POST` , form data: `listIds:10` <= get procedure. Use cURL command `curl -XPOST http://nhacso.net/producer/getproducer  -d "listIds=10"`  


### Album ###
[http://nhacso.net/flash/album/xnl/1/uid/X1lWW0NabwIBAw==,W1pZWkVe](http://nhacso.net/flash/album/xnl/1/uid/X1lWW0NabwIBAw==,W1pZWkVe)  

> Use on the last parameter only  

[http://nhacso.net/album/parse?listIds=17000](http://nhacso.net/album/parse?listIds=17000)  

[http://nhacso.net/album/getstatistic?listIds=543996,543700,543565,542242](http://nhacso.net/album/getstatistic?listIds=543996,543700,543565,542242)  

> Get album list stats  `543996,543700,543565,542242` are albumIds

[http://nhacso.net/statistic/albumtotallisten?listIds=543700](http://nhacso.net/statistic/albumtotallisten?listIds=543700)  

> Get `albumtotallisten`  

[http://nhacso.net/album/getstatistic?listIds=6884](http://nhacso.net/album/getstatistic?listIds=6884)  

> `getstatistic` of an album  

[http://nhacso.net/statistic/albumtotallisten?listIds=543700](http://nhacso.net/statistic/albumtotallisten?listIds=543700)  

> Get `albumtotallisten` <= aggregation of included songs

[http://nhacso.net/album/gettotalsong?listIds=533138%2C535960](http://nhacso.net/album/gettotalsong?listIds=533138%2C535960)  

> `gettotalsong` of an album  

[http://nhacso.net/album/getdescandissuetime?listIds=543996,543700,543565,542242](http://nhacso.net/album/getdescandissuetime?listIds=543996,543700,543565,542242)  

> `getdescandissuetime`: get description and issued moment  

[http://nhacso.net/album/getissuetime?listIds=447529,321676,310104,310102](http://nhacso.net/album/getissuetime?listIds=447529,321676,310104,310102)  

> `getissuetime`

*DEFAULT ALBUMS*:   
[http://st.nhacso.net/images/album/thumb_album_120x120.jpg](http://st.nhacso.net/images/album/thumb_album_120x120.jpg)  

### MISC ###
**Get Category**
	
[http://nhacso.net/category/getcategory?listIds=1,2,4,5](http://nhacso.net/category/getcategory?listIds=1,2,4,5)  
> `getcategory` <= get list

**Get Lyric**
[http://nhacso.net/song/lyric?song_id=1100539](http://nhacso.net/song/lyric?song_id=1100539)

**Lastest Songs:**
[http://nhacso.net/top/latestsong?xnl=1](http://nhacso.net/top/latestsong?xnl=1)

**Get Parse Amount Album:**
[http://nhacso.net/artist/parseamountalbum?listIds=54 ](http://nhacso.net/artist/parseamountalbum?listIds=54 )

**Get Parse Amount Song of Artist**  
[http://nhacso.net/artist/parseamountsong?listIds=54](http://nhacso.net/artist/parseamountsong?listIds=54)

**Get Artist**
[http://nhacso.net/artist/parseamountsong?listIds=54](http://nhacso.net/artist/parseamountsong?listIds=54)  
[http://nhacso.net/artist/desc?listIds=54](http://nhacso.net/artist/desc?listIds=54)  
[http://nhacso.net/artist/parse?listIds=311](http://nhacso.net/artist/parse?listIds=311)  
**Get Suggestion**
[http://nhacso.net/artist/parsesuggest?listIds=54](http://nhacso.net/artist/parsesuggest?listIds=54)
**Get issued time** 
[http://nhacso.net/album/getdescandissuetime?listIds=347553](http://nhacso.net/album/getdescandissuetime?listIds=347553)

*UPDATE:* Get song_id from 1 to 1.261.000 on January 11, 2012. On Jan 08, scan 541148 albums, filter and insert 165465 albums into database
*Stats:* 977721 songs on Jan 11; ~14016 videos ~500000 abums

*MICS :* Check these links again

[http://nhacso.net/song/getobjectsong?id=945455](http://nhacso.net/song/getobjectsong?id=945455)  
[http://nhacso.net/video/getobjectvideo?id=14300](http://nhacso.net/video/getobjectvideo?id=14300)  
> `type=POST` <= check in server script. Functions `getObjectVideo()`and `getObjectSong()`  

[http://nhacso.net/song/listen](http://nhacso.net/song/listen)  

> Request Method: `POST` , form data: `id:1142573` <= increase song plays. Use cURL command `curl -XPOST http://nhacso.net/song/listen -d  "id=1260645"`

---

## Music.go.vn##

[http://music.go.vn/Ajax/RenderXmlHandler.ashx?sid=47278](http://music.go.vn/Ajax/RenderXmlHandler.ashx?sid=47278)

* Get Song Data  
	[http://music.go.vn/Ajax/SongHandler.ashx?type=getsonginfo&sid=12343](http://music.go.vn/Ajax/SongHandler.ashx?type=getsonginfo&sid=12343)  
	`type=getsonginfo`  
* Get Album Data  
	[http://music.go.vn/Ajax/AlbumHandler.ashx?type=getinfo&album=12999](http://music.go.vn/Ajax/AlbumHandler.ashx?type=getinfo&album=12999)  
	`type=getinfo`  
	[http://music.go.vn/Ajax/AlbumHandler.ashx?type=getsongbyalbum&album=17556](http://music.go.vn/Ajax/AlbumHandler.ashx?type=getsongbyalbum&album=17556)  
	`type=getsongbyalbum` - `album=[1..17556]` on 12-12-12
* Get Artist  
	[http://music.go.vn/Ajax/ArtistHandler.ashx?type=getsongartist&artist=23641](http://music.go.vn/Ajax/ArtistHandler.ashx?type=getsongartist&artist=23641)  
	`type=getsongartist`   
	[http://music.go.vn/Ajax/ArtistHandler.ashx?type=getalbumartist&artist=23641](http://music.go.vn/Ajax/ArtistHandler.ashx?type=getalbumartist&artist=23641)  
	`type=getalbumartist`  
* Get Suggestion    
	[http://music.go.vn/Ajax/Suggestion.ashx?jsoncallback=&keyword=em%20ve%20dau&top=1&per=8&blacklist=Artist](http://music.go.vn/Ajax/Suggestion.ashx?jsoncallback=&keyword=em%20ve%20dau&top=1&per=8&blacklist=Artist)  
	`keyword=em ve dau` -- `top=[1..100]` -- `per =`  
	[http://music.go.vn/Ajax/Suggestion.ashx?jsoncallback=&keyword=toi&top=100&per=4&blacklist=Artist](http://music.go.vn/Ajax/Suggestion.ashx?jsoncallback=&keyword=toi&top=100&per=4&blacklist=Artist)

*STATS:* Total songs: 173733. Total albums: 17556 .  
Updated on December 12, 2012

---

## Hcm.nhac.vui.vn ##

* Get Song  
	[http://hcm.nhac.vui.vn/asx2.php?type=1&id=299321](http://hcm.nhac.vui.vn/asx2.php?type=1&id=299321)  
	`type=1` => song  

	[http://hcm.nhac.vui.vn/asx2.php?type=5&id=297053](http://hcm.nhac.vui.vn/asx2.php?type=5&id=297053)  
	`type=5` => secret 320 kbps links  
* Get Album  
	[http://hcm.nhac.vui.vn/asx2.php?type=3&id=24000](http://hcm.nhac.vui.vn/asx2.php?type=3&id=24000)  
	`type=3` => album  

*STATS:* ~300995 songs, ~25160 albums

---

##Chacha.vn##
* Get Song  
	[http://www.chacha.vn/song/play/420343](http://www.chacha.vn/song/play/420343)  
	`song/play` <= insert `song_id`  

* Get Album  
	[http://www.chacha.vn/album/play/7333](http://www.chacha.vn/album/play/7333)  
	`play/id` <= insert `album_id`  
	NOTE: `http://s2.chacha.vn/artists//s5/309/309.jpg?v=0` <= look at property `thumb` to get  artist id  
* Get Thumbnail  
	[http://s2.chacha.vn/albums//s3/7223/7223.jpg?v=0](http://s2.chacha.vn/albums//s3/7223/7223.jpg?v=0)  
	Note: get thumbnail from albums  

--- 

##Nghenhac.info ##
* Get Album
	[http://nghenhac.info/Farm/PlayAlbumJson.ashx?p=7BB61600815BA707](http://nghenhac.info/Farm/PlayAlbumJson.ashx?p=7BB61600815BA707)  
	note complete

---

##Vietgiaitri.com ##
* Get Album
	[http://img.vietgiaitri.com/music.php?act=xml&sm=a593b5ed00bd1442bc6741cab4bdda2b&time=1357584049&uid=0&gid=2&aid=6899&repeat=always](http://img.vietgiaitri.com/music.php?act=xml&sm=a593b5ed00bd1442bc6741cab4bdda2b&time=1357584049&uid=0&gid=2&aid=6899&repeat=always)  
	`aid=` <= insert number  

---

## Nhac.hay365.com ##
* Get Song  
	[http://static.hay365.com/song_43151.xml](http://static.hay365.com/song_43151.xml)  

* Get Album
	[http://static.hay365.com/album_3369.xml](http://static.hay365.com/album_3369.xml)  
	`album_3369` <= change number  --- ~3300 albums

---

## Music.vnn.vn##
* Get Album  
	[http://music.vnn.vn//XML/Album/2013/1/album-huong-lan-mo-lai-vang-trang20130108020942.xml](http://music.vnn.vn//XML/Album/2013/1/album-huong-lan-mo-lai-vang-trang20130108020942.xml)  
	not complete  

---

## Nghenhacmoi.net##
* Get Album  
	[http://nghenhacmoi.net/music/xml/3/701.xml](http://nghenhacmoi.net/music/xml/3/701.xml)  
	Note: just thousands of songs, ~700 albums 

---

## Nhacvang.net ##
* Get Album  
	[http://nghenhacvang.net/playplaylist/5725.xml](http://nghenhacvang.net/playplaylist/5725.xml)  
	~5000 albums  

---

## Store.zing.vn ##

```coffeescript
ONES = ['A','E','I','M','Q','U','Y','c','g','k']
TENS = ['MD','MT','Mj','Mz','ND','NT','Nj','Nz','OD','OT']
HUNDREDS = ['w','x','y','z','0','1','2','3','4','5']
THOUSANDS = ['A','E','I','M','Q','U','Y','c','g','k']
TENSOFTHOUSANDS = ['MD','MT','Mj','Mz','ND','NT','Nj','Nz','OD','OT']
HUNDREDSOFTHOUSANDS = ['','MC0x','MC0y','MC0z','MC00','MC01','MC02','MC03','MC04']
```
* Get Song  
	[http://store.zing.vn/mediaxml?mediaId=MC02MzU2MDc=](http://store.zing.vn/mediaxml?mediaId=MC02MzU2MDc=)  
	`mediaId=MC02MzU2MDc=` <=> `mediaId=735607=` . Notice the equal sign  
---

# FETCH ALL ALBUMS FROM NHASO.NET WITH NODE.JS

Type in CLI, change the directory which contains these files, default is `~/Box Documents/Sites/nodejs`

- To create tables : `node createAlbumTable.js add`
- To delete tables : `node createAlbumTable.js delete`
- To get all albums from id 1 to id 2: `node fetchdatafromNS.js No1 No2`    
where `No1` is the first Id and `No2` is the last
EX: `node fetchdatafromNS.js 500000 502000` <- can run parallelly 3 programs 


# ELASTICSEARCH

## Couchbase

Install the couchbase nosql database

## MySQL

Run `bin/elasticsearch -f` , install plugin on [github](https://github.com/jprante/elasticsearch-river-jdbc), read the introduction then crawl the following databse for example:

```
curl -XPUT 'localhost:9200/_river/ns_song/_meta' -d '{
    "type" : "jdbc",
    "jdbc" : {
        "driver" : "com.mysql.jdbc.Driver",
        "url" : "jdbc:mysql://localhost:8889/anbinh",
        "user" : "root",
        "password" : "root",
        "sql" : "select * from ns_song"
    },
    "index" : {
        "index" : "jdbc",
        "type" : "jdbc"
    }
}'
```

Notice: `ns_song`, choose `localhost:8889`, database `anbinh` , username `root`, password `root`, select all from table `ns_song`, choose index `jdbc` and type `jdbci`


