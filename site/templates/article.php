<html lang="en">
    <head>
<?= css("../assets/css/style.css")?>
<?= css("../assets/css/article.css")?>
    </head>

    <body>
        <div class="main">
            <div class="article">
                <h1 class="article-title"><?=$page->Title() ?></h1>
                <p class="article-date"><?=$page->Date() ?></p>
                <p class="article-text"><?=$page->Text() ?></p>
                <div class="author-box">
                    <h4>Autor*in</h4>
                    <h3 class="author_name"><?=$page->Author_name() ?></h3>
                    <p class="author_bio"><?=$page->Author_bio() ?></p>
                </div>
            </div>
            <div class="article-widget" style="position: fixed; top: 0; right: 0;">
                <div class="image-article"> 
                    <a href="https://frei-day.org/magazin/artikel/" target="_self"> <img src="../assets/images/artikel.jpg" /></a>
                </div>
                <div class="image-podcasts"> 
                    <a href="https://frei-day.org/magazin/podcasts/" target="_self"> <img src="../assets/images/podcasts.jpg"  /></a>
                </div>
                <div class="image-videos"> 
                    <a href="https://frei-day.org/magazin/videos/" target="_self"> <img src="../assets/images/videos.jpg"/>
                </div>
                <div class="image-termine"> 
                    <a href="https://frei-day.org/magazin/termine/" target="_self"> <img src="../assets/images/termine.jpg"/>
                </div>
                

            </div>
        </div>
