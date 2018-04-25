<section class="tm-section tm-section-services" id="services">

    <div class="tm-page-content-width">
        <div class="tm-bg-black-translucent tm-content-box tm-flex-center">
            <div class="tm-content-box-inner">
                <h2 class="tm-section-title">Our Services</h2>
                <?php
                foreach ($data as $row) {
                    echo '<h2>' . $row['Author'] . '</h2><p>' . $row['Description'] . '</p>';
                }
                ?>
            </div>                         
        </div> 
    </div> 
    
</section>    
