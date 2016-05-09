<!doctype html>
<?php
extract($_GET);

$file_path = $p.'/'.$id.'/'.$f.'.mp4';
$file_img  = $p.'/'.$id.'/'.$f.'.jpg';
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



        <hr>

	<div style="text-align:center;font-family:\5fae\8f6f\96c5\9ed1;clear:both;">&nbsp;&nbsp;&nbsp;
  		<p>Copyright &copy 2015.6 Aebeisi All rights reserved. Powered by <a  href="mailto:509447546@qq.com">QuanshengZhang </a>
<script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1259021917'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s4.cnzz.com/z_stat.php%3Fid%3D1259021917%26show%3Dpic' type='text/javascript'%3E%3C/script%3E"));        </script>
  		<p>&nbsp;</p>
	</div>

    </body>
</html>
