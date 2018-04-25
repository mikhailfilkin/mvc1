<section class="tm-section tm-section-about" id="about">

    <div class="tm-page-content-width">
        <div class="tm-bg-black-translucent tm-content-box tm-content-box-right tm-flex-center">
            <div class="tm-content-box-inner">
                <?php
                foreach ($data as $row) {
                    echo '<h2>' . $row['Author'] . '</h2><p>' . $row['Description'] . '</p>';
                }
                ?>
            </div>                         
        </div>                    
    </div>                   

</section>