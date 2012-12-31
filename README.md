
#DOCUMENTATION#


# CLI Installation #

* Use Laravel framework
* Chane pwd to laravel directory
* Type the following command

# Usage #

```bash
php artisan nhacso song_id_1 song_id_2
```

EX: to fetch songs whose id's range from 1000000 to 1010000

```bash
php artisan nhacso 1000000 1010000
```

# Introduction #

## Nhacso.net ##

Their link's ids are encrypted in simple ways. They can be cracked by utilizing these arrays

* _If Id > 1.000.000, use this one:_
```coffeescript
ONES = ['bw','bg','bQ','bA','aw','ag','aQ','aA','Zw','Zg']
TENS = ['f','e','d','c','b','a','Z','Y','X','W']
HUNDREDS = ['N','J','F','B','d','Z','V','R','t','p']
THOUSANDS = ['U0','Uk','UU','UE','V0','Vk','VU','VE','W0','Wk']
TENSOFTHOUSANDS = ['R','Q','T','S','V','U','X','W','Z','Y']
HUNDREDSOFTHOUSANDS = ['h','l','p']
MILLIONS = ['','X1']  
```
EX: Id: **1234567** should be translated into **X1pSV0ZZaA**

* _If Id < 1.000.000, use the following:_
```coffeescript
ONES = ['f','e','d','c','b','a','Z','Y','X','W']
TENS = ['N','J','F','B','d','Z','V','R','t','p']
HUNDREDS = ['U0','Uk','UU','UE','V0','Vk','VU','VE','W0','Wk']
THOUSANDS = ['R','Q','T','S','V','U','X','W','Z','Y']
TENSOFTHOUSANDS = ['h','l','p','t','x','1','5','9','B','F']
HUNDREDSOFTHOUSANDS = ['','X1','XF','XV','Wl','W1','WF','WV','Vl','V1']
```
EX: Id : **345678** will become **XVxUVURX**

> Notice: `XF` in `HUNDREDSOFTHOUSAND` 'maybe' true, coming from interpolation...

### Get links automatically###

We can grasp data with these links

* Song:  
	[http://nhacso.net/flash/song/xnl/1/id/XVxUVURX](http://nhacso.net/flash/song/xnl/1/id/XVxUVURX)
	> View page source to get the structure. XML Format
* Video  
	[http://nhacso.net/flash/video/xnl/1/id/X1xSV0Y](http://nhacso.net/flash/video/xnl/1/id/X1xSV0Y)  
	`/id/X1xSV0Y` can be replaced by `id/14345`  
* Album:  
	[http://nhacso.net/flash/album/xnl/1/uid/X1lWW0NabwIBAw==,W1pZWkVe](http://nhacso.net/flash/album/xnl/1/uid/X1lWW0NabwIBAw==,W1pZWkVe)
	> Use on the last parameter only
* Get Lyric  
	[http://nhacso.net/song/lyric?song_id=934343](http://nhacso.net/song/lyric?song_id=934343)

* Lastest Songs:  
	[http://nhacso.net/top/latestsong?xnl=1](http://nhacso.net/top/latestsong?xnl=1)

* Get Parse Amount Album:  
	[http://nhacso.net/artist/parseamountalbum?listIds=54 ](http://nhacso.net/artist/parseamountalbum?listIds=54 )

* Get Parse Amount Song of Artist  
	[http://nhacso.net/artist/parseamountsong?listIds=54](http://nhacso.net/artist/parseamountsong?listIds=54)

* Get Artist  
	[http://nhacso.net/artist/parseamountsong?listIds=54](http://nhacso.net/artist/parseamountsong?listIds=54)
	[http://nhacso.net/artist/desc?listIds=54](http://nhacso.net/artist/desc?listIds=54)
* Get Suggestion  
	[http://nhacso.net/artist/parsesuggest?listIds=54](http://nhacso.net/artist/parsesuggest?listIds=54)
* Get issued time  
	[http://nhacso.net/album/getdescandissuetime?listIds=347553](http://nhacso.net/album/getdescandissuetime?listIds=347553)

*UPDATE:* Get song_id from 300.000 to 1.250.000 on December 31, 2012  
*Stats:* ~849998 songs ~14016 videos

## Music.go.vn##

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

## Hcm.nhac.vui.vn ##

* Get Song  
	[http://hcm.nhac.vui.vn/asx2.php?type=1&id=299321](http://hcm.nhac.vui.vn/asx2.php?type=1&id=299321)  
	`type=1` => song
* Get Album  
	[http://hcm.nhac.vui.vn/asx2.php?type=3&id=24000](http://hcm.nhac.vui.vn/asx2.php?type=3&id=24000)  
	`type=3` => album

##Chacha.vn##
* Get Song  
	[http://www.chacha.vn/song/play/399999](http://www.chacha.vn/song/play/399999)  
	`song/play` <= insert `song_id`  
* Get Album  
	[http://www.chacha.vn/album/play/7039](http://www.chacha.vn/album/play/7039)  
	`play/id` <= insert `album_id`

