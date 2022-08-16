<html lang="en">
    <head>
<?= css("../assets/css/quote.css")?>
</head>

<body>
    <div class="quote">
        <div class="quote-image" style="background-image: url('<?= $page->image()?>')">
        </div>
        <div class="quote-content">
            <div class="quote-text">
                <p><?= $page->zitat() ?></p>
            </div>
            <div class="quote-info">  
                <p><?= $page->name() ?></p>
            </div>
            <div class="quote-desc">
                <p><?= $page->position() ?></p>
            </div>
        </div>  
    </div>
</body>