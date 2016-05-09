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


	<a href="<?php echo  "$_SERVER[PHP_SELF]?id=$id&f=1&t=《侣行》第三季 01 第一期 再出发"?>">1</a> | 
    <a href="<?php echo  "$_SERVER[PHP_SELF]?id=$id&f=2&t=《侣行》第三季 02 第二期 穿越罗布泊"?>">2</a> |
    <a href="<?php echo  "$_SERVER[PHP_SELF]?id=$id&f=3&t=《侣行》第三季 03 第三期 走出罗布泊"?>">3</a> |
    <a href="<?php echo  "$_SERVER[PHP_SELF]?id=$id&f=4&t=《侣行》第三季 04 第四期 跨越红其拉甫·巴基斯坦"?>">4</a> |
    <a href="<?php echo  "$_SERVER[PHP_SELF]?id=$id&f=5&t=《侣行》第三季 05 第五期 被困堰塞湖·巴基斯坦"?>">5</a> |
    <a href="<?php echo  "$_SERVER[PHP_SELF]?id=$id&f=6&t=《侣行》第三季 06 第六期 闯入恐怖之路·巴基斯坦"?>">6</a> |
    <a href="<?php echo  "$_SERVER[PHP_SELF]?id=$id&f=7&t=《侣行》第三季 07 第七期 270的礼物·巴基斯坦"?>">7</a> |
    <a href="<?php echo  "$_SERVER[PHP_SELF]?id=$id&f=8&t=《侣行》第三季 08 第八期 逃离白沙瓦·巴基斯坦"?>">8</a> |
    <a href="<?php echo  "$_SERVER[PHP_SELF]?id=$id&f=9&t=《侣行》第三季 09 第九期 活在枪口下·阿富汗"?>">9</a> |
    <a href="<?php echo  "$_SERVER[PHP_SELF]?id=$id&f=10&t=《侣行》第三季 10 第十期 喀布尔的女人·阿富汗"?>">10</a> |
    <a href="<?php echo  "$_SERVER[PHP_SELF]?id=$id&f=11&t=《侣行》第三季 11 第十一期 大佛我们来了·阿富汗"?>">11</a> |
    <a href="<?php echo  "$_SERVER[PHP_SELF]?id=$id&f=12&t=《侣行》第三季 12 第十二期 点亮巴米扬·阿富汗"?>">12</a> |
    <a href="<?php echo  "$_SERVER[PHP_SELF]?id=$id&f=13&t=《侣行》第三季 13 第十三期 冲出喀布尔·阿富汗"?>">13</a> |
    <a href="<?php echo  "$_SERVER[PHP_SELF]?id=$id&f=14&t=《侣行》第三季 14 第十四期 危险巴格达·伊拉克"?>">14</a> |
    <a href="<?php echo  "$_SERVER[PHP_SELF]?id=$id&f=15&t=《侣行》第三季 15 第十五期 拆弹部队·伊拉克"?>">15</a> |
    <a href="<?php echo  "$_SERVER[PHP_SELF]?id=$id&f=16&t=《侣行》第三季 16 第十六期 古文明之殇·伊拉克"?>">16</a> |
    <a href="<?php echo  "$_SERVER[PHP_SELF]?id=$id&f=17&t=《侣行》第三季 17 第十七期 探访难民营·伊拉克"?>">17</a> |
    <a href="<?php echo  "$_SERVER[PHP_SELF]?id=$id&f=18&t=《侣行》第三季 18 第十八期 坚守科巴尼上·叙利亚"?>">18</a> |
    <a href="<?php echo  "$_SERVER[PHP_SELF]?id=$id&f=19&t=《侣行》第三季 19 第十九期 坚守科巴尼下·叙利亚"?>">19</a> |
    <a href="<?php echo  "$_SERVER[PHP_SELF]?id=$id&f=20&t=《侣行》第三季 20 第二十期 朝圣之路·伊拉克"?>">20</a> |
    <a href="<?php echo  "$_SERVER[PHP_SELF]?id=$id&f=21&t=《侣行》第三季 21 第二十一期 欧亚的十字路口·伊拉克&土耳其"?>">21</a> 



        <hr>

	<div style="text-align:center;font-family:\5fae\8f6f\96c5\9ed1;clear:both;">&nbsp;&nbsp;&nbsp;
  		<p>Copyright &copy 2015.6 Aebeisi All rights reserved. Powered by <a  href="mailto:509447546@qq.com">QuanshengZhang </a>
<script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1259021917'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s4.cnzz.com/z_stat.php%3Fid%3D1259021917%26show%3Dpic' type='text/javascript'%3E%3C/script%3E"));        </script>
  		<p>&nbsp;</p>
	</div>

    </body>
</html>
