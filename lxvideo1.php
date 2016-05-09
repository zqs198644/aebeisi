<!doctype html>
<?php
extract($_GET);
$file_path = 'video/lx/'.$id.'/'.$f.'.mp4';
$file_img = 'video/lx/'.$id.'/'.$f.'.jpg';
?>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>阿尔卑斯</title>
        <meta name="description" content="阿尔卑斯">
        <meta name="author" content="quansheng">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Styles -->
        <link rel="stylesheet" href="plyr/dist/plyr.css">

        <!-- Docs styles -->
        <link rel="stylesheet" href="plyr/dist/docs.css">
	<h2><?echo $t ?></h2>
    </head>
    <body>
            <section>
                <div class="js-media-player">
                    <video  width="880" height="505" poster="<?echo $file_img?>" controls crossorigin>
                        <!-- Video files -->
                        <source src="<?php echo $file_path;?>" type="video/mp4">

                        <!-- Fallback for browsers that don't support the <video> element -->
                        <a href="https://cdn.selz.com/plyr/1.0/movie.mp4">Download</a>
                    </video>
                </div>

            </section>
        <!-- Load SVG defs -->
        <!-- You should bundle all SVG/Icons into one file using a build tool such as gulp and svg store -->
        <script>
        (function() {
            [
                'plyr/dist/sprite.svg',
                'plyr/dist/docs.svg'
            ]
            .forEach(function(u) {
                var x = new XMLHttpRequest(),
                    b = document.body;

                // Check for CORS support
                // If you're loading from same domain, you can remove the whole if/else statement
                // XHR for Chrome/Firefox/Opera/Safari/IE10+
                if ('withCredentials' in x) {
                    x.open('GET', u, true);
                }
                // XDomainRequest for IE8 & IE9
                else if (typeof XDomainRequest == 'function') {
                    x = new XDomainRequest();
                    x.open('GET', u);
                }
                else { return; }

                // Inject hidden div with sprite on load
                x.onload = function() {
                    var c = document.createElement('div');
                    c.setAttribute('hidden', '');
                    c.innerHTML = x.responseText;
                    b.insertBefore(c, b.childNodes[0]);
                }

                // Timeout for IE9
        		setTimeout(function () {
        			x.send();
        		}, 0);
            });
        })();
        </script>

        <!-- Plyr core script -->
        <script src="plyr/dist/plyr.js"></script>

        <!-- Docs script -->
        <script src="plry/dist/docs.js"></script>

        <!-- Rangetouch to fix <input type="range"> on touch devices (see https://rangetouch.com) -->
        <script src="https://cdn.rangetouch.com/0.0.9/rangetouch.js"></script>

        <!-- Sharing libary (https://shr.one) -->
        <script src="https://cdn.shr.one/0.1.9/shr.js"></script>
        <script>if(window.shr) { window.shr.setup({ count: { classname: 'btn__count' } }); }</script>


	<a href="<?php echo  "$_SERVER[PHP_SELF]?id=$id&f=1&t=《侣行》第一季 01 初探摩城 恐怖之都·索马里 (一)"?>">1</a> | 
    <a href="<?php echo  "$_SERVER[PHP_SELF]?id=$id&f=2&t=《侣行》第一季 02 初探摩城 恐怖之都·索马里 (二)"?>">2</a> |
    <a href="<?php echo  "$_SERVER[PHP_SELF]?id=$id&f=3&t=《侣行》第一季 03 初探摩城 恐怖之都·索马里 (三)"?>">3</a> |
    <a href="<?php echo  "$_SERVER[PHP_SELF]?id=$id&f=4&t=《侣行》第一季 04 枪口下的笑脸 恐怖之都·索马里 (四)"?>">4</a> |
    <a href="<?php echo  "$_SERVER[PHP_SELF]?id=$id&f=5&t=《侣行》第一季 05 来到最冷的地方 世界寒极·奥伊米亚康 (一)"?>">5</a> |
    <a href="<?php echo  "$_SERVER[PHP_SELF]?id=$id&f=6&t=《侣行》第一季 06 做一天的寒极人 世界寒极·奥伊米亚康 (二)"?>">6</a> |
    <a href="<?php echo  "$_SERVER[PHP_SELF]?id=$id&f=7&t=《侣行》第一季 07 最冷的露营最暖的求婚 世界寒极·奥伊米亚康 (三)"?>">7</a> |
    <a href="<?php echo  "$_SERVER[PHP_SELF]?id=$id&f=8&t=《侣行》第一季 08 逼近核辐射 鬼城·切尔诺贝利 (一)"?>">8</a> |
    <a href="<?php echo  "$_SERVER[PHP_SELF]?id=$id&f=9&t=《侣行》第一季 09 石棺的诱惑 鬼城·切尔诺贝利 (二)"?>">9</a> |
    <a href="<?php echo  "$_SERVER[PHP_SELF]?id=$id&f=10&t=《侣行》第一季 10 烈火熔岩 天堂之门·马鲁姆火山 (一)"?>">10</a> |
    <a href="<?php echo  "$_SERVER[PHP_SELF]?id=$id&f=11&t=《侣行》第一季 11 风暴之巅 天堂之门·马鲁姆火山 (二)"?>">11</a> |
    <a href="<?php echo  "$_SERVER[PHP_SELF]?id=$id&f=12&t=《侣行》第一季 12 炼狱边缘 天堂之门·马鲁姆火山 (三)"?>">12</a> |
    <a href="<?php echo  "$_SERVER[PHP_SELF]?id=$id&f=13&t=《侣行》第一季 13 火山兄弟 天堂之门·马鲁姆火山 (四)"?>">13</a> |
    <a href="<?php echo  "$_SERVER[PHP_SELF]?id=$id&f=14&t=《侣行》第一季 14 270为什么出发 侣行的意义 (一)"?>">14</a> |
    <a href="<?php echo  "$_SERVER[PHP_SELF]?id=$id&f=15&t=《侣行》第一季 15 270的爱情故事 侣行的意义 (二)"?>">15</a> |



        <hr>

	<div style="text-align:center;font-family:\5fae\8f6f\96c5\9ed1;clear:both;">&nbsp;&nbsp;&nbsp;
  		<p>Copyright &copy 2015.6 Aebeisi All rights reserved. Powered by <a  href="mailto:509447546@qq.com">QuanshengZhang </a>
<script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1259021917'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s4.cnzz.com/z_stat.php%3Fid%3D1259021917%26show%3Dpic' type='text/javascript'%3E%3C/script%3E"));        </script>
  		<p>&nbsp;</p>
	</div>

    </body>
</html>
