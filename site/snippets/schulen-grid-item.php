<li>
    <a href="<?= $school->url() ?>">
        <div class="schools-grid-item">
            <div class="schools-grid-item-cover" style="background-image: url('../assets/images/index.jpg')"/>
            </div>
            <div class="schools-grid-item-details">
                <div class="schools-grid-item-details-logo" style="background-image: url('<?= $school->logo() ?>')"/>
                </div>
                <div class="schools-grid-item-details-content">  
                    <h3 class="title-schule"><?= $school->title() ?></h3>
                    <p class="bundesland"><?= $school->region() ?></p>
                    <p class="schulform"><?= $school->schulform() ?></p>
                </div>
            </div>
        </div>
    </a>
</li>
