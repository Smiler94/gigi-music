## GigiMusic

a simple demo to get music of Liangyongqi which is based on metowolf

### usage

#### install

clone the resposity

`$ git clone https://github.com/Smiler94/gigi-music.git`

install the dependencies

`$ composer install`

#### use

``` php
require './vendor/autoload.php';
use \Gigi\GigiMusic;

// get a random list
$gigi = new GigiMusic(GigiMusic::GigiMusicType_Random);

$count = 1;

// get detail
print_r($gigi->getFirst($count));

/** output
Array
(
    [0] => Array
        (
            [id] => 255504
            [name] => 凹凸
            [artist] => Array
                (
                    [0] => 梁咏琪
                )

            [pic_id] => 100055558144839
            [url_id] => 255504
            [lyric_id] => 255504
            [source] => netease
            [pic_url] => https://p3.music.126.net/HxsmK2EGztx6SvAW50b-Hg==/100055558144839.jpg?param=300z300&quality=100
            [url] => https://m8.music.126.net/20170424171525/f587bed9cde1411790fafd78937fe303/ymusic/17c4/afe4/ad7d/8ffdae27bb8cdd637a7fccac03494aaa.mp3
        )

)
**/
```