<html lang="en">
    <head>
<?= css("../assets/css/team.css")?>
    </head>

    <body>
        <div class="team">
            <div class="team-member">
                <div class="team-left">
                    <div class="team-image" style="background-image: url('<?= $page->image()->url() ?>')">
                    </div>
                    <div class="email">
                    <a href="mailto:tobias.feitkenhauer@schule-im-aufbruch.de"><span>E-Mail schreiben</span></a>
                    </div>
                </div>
                <div class="team-content"> 
                    <div class="name-box">
                        <h3 class="team-name"><?=$page->Title() ?></h3>
                        <p class="team-pos"><?= $page->Position() ?></p>     
                    </div>
                <div class="team-text">
                        <p><?= $page->Description()->kt() ?>
                    
                        </p> 
                </div>
            </div>
        </div>
    </body>


    
