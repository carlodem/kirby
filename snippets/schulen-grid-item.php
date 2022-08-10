<li>
    <a href="<?= $school->url() ?>">
        <div class="schools-grid-item">
            <div class="schools-grid-item-cover" style="background-image: url('../assets/images/index.jpg')"/>
            </div>
            <div class="schools-grid-item-details">
                <div class="schools-grid-item-logo" style="background-image: url('<?= $school->logo() ?>')"/>
                </div>
                <div class="schools-grid-item-content">
                    <h3 class="title-schul"><?= $school->title() ?></h3>
                    <a href="" class="schulform"><?= $school->schulform() ?></a>
                    <a href="" class="bundesland"><?= $school->region() ?></a>
                </div>
            </div>
        </div>
    </a>
</li>
