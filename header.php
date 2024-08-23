<?php // этот php-код компилирует less/style.less в css/style.css	
	require "./assets/less/lessc.inc.php";	
	function autoCompileLess($inputFile, $outputFile) {
	  // load the cache
	  $cacheFile = $inputFile.".cache";
	  if (file_exists($cacheFile)) {
		$cache = unserialize(file_get_contents($cacheFile));
	  } else {
		$cache = $inputFile;
	  }
	  $less = new lessc;
	  $newCache = $less->cachedCompile($cache);
	  if (!is_array($cache) || $newCache["updated"] > $cache["updated"]) {
		file_put_contents($cacheFile, serialize($newCache));
		file_put_contents($outputFile, $newCache['compiled']);
	  }
	}
	autoCompileLess('./assets/less/style.less', './assets/css/style.css');
// class="col-xs-6 wow fadeIn" data-wow-delay="0.3s" data-wow-duration="0.6s"
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="./assets/css/style.css" type="text/css" />
</head>

<body>
    <div class="wrapper">
        <div id="mobile-menu">
            <div class="block df">
                <ul>
                    <li><a href=""><span>Link</span></a></li>
                    <li><a href=""><span>Link</span></a></li>
                    <li><a href=""><span>Link</span></a></li>
                    <li><a href=""><span>Link</span></a></li>
                </ul>
            </div>
        </div>
        <div class="top"  id = "heder">
            <div class="container">
                <div class="icons">
                    <div class="icon">
                        <a href="#">
                            <img src="./assets/img/facebook.svg" alt="">
                        </a>
                    </div>
                    <div class="icon">
                        <a href="#">
                            <img src="./assets/img/instagram.svg" alt="">
                        </a>
                    </div>
                    <div class="icon">
                        <a href="#">
                            <img src="./assets/img/tiktok.svg" alt="">
                        </a>
                    </div>
                    <div class="icon">
                        <a href="#">
                            <img src="./assets/img/youtube.svg" alt="">
                        </a>
                    </div>
                </div>
                <div class="phone">
                    <a href="">+38 (096) 098 1111</a>
                </div>
            </div>
        </div>
        <header id = "header2">
            <div class="container">
                <div class="block df jb">
                    <div class="bot">
                        <div class="menu-btn">
                            <span></span>
                        </div>
                        <div class="logo">
                            <a href="index.php">D-TAC</a>
                        </div>
                        <ul>
                            <li>
                                <a href="mens_news.php">NEW</a>
                            </li>
                            <li>
                                <a href="mens_news.php">MEN'S</a>
                            </li>
                            <li>
                                <a href="mens_news.php">WOMEN'S</a>
                            </li>
                            <li>
                                <a href="mens_news.php">PACKS & BAGS</a>
                            </li>
                            <li>
                                <a href="mens_news.php">FOOTWEAR</a>
                            </li>
                            <li>
                                <a href="mens_news.php">ACCESSORIES</a>
                            </li>
                        </ul>
                        <div class="search">
                            <form action="">
                                <img src="./assets/img/search.svg" alt="">
                                <input type="text" placeholder="SEARCH">
                            </form>
                        </div>
                        <div class="icons">
                            <div class="icon">
                                <a href="#">
                                    <img src="./assets/img/search.svg" alt="">
                                </a>
                            </div>
                            <div class="icon md-trigger" data-modal="modal-1">
                                <a>
                                    <img src="./assets/img/korzina.svg" alt="">
                                </a>
                            </div>
                            <div class="icon">
                                <a href="#">
                                    <img src="./assets/img/user.svg" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </header>