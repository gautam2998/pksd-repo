<?php
/* Template Name: No fees Post Template
*  Template Post Type: post
*/ 
get_header(); ?>

<style>
    
@media (min-width: 992px){
    .pl-lg-0 {
        padding-left: 0 !important;
    }
}

.flex-grow {
    flex-grow: 1;
}

#page-no-fees .navbar {
    margin-bottom: 0;
}

#page-no-fees .section-lg {
    padding: 5rem 0 3rem 0;
}

#page-no-fees .hero-no-fees {
    position: relative;
    height: auto;
    background-color: #e9ecef;
    background-size: cover;
    background-repeat: no-repeat;
    display: flex;
    align-items: center;
    overflow: hidden;
    padding: 32px 0;
}

#page-no-fees .hero-no-fees .row {
    display: flex;
}

#page-no-fees .hero-no-fees .row::before,
#page-no-fees .hero-no-fees .row::after {
    display: none;
}




#page-no-fees .hero-no-fees-bg-wpb {
    position: relative;
    padding-right: 30px;
    height: 100%;
    background: rgba(255, 255, 255, 0.35);
}

#page-no-fees .hero-no-fees-bg-wpb img {
    position: relative;
    margin-left: 10px;
    z-index: 1;
    margin-bottom: -32px;
}

#page-no-fees .hero-no-fees-main-title {
    position: absolute;
    background: rgba(255, 255, 255, 0.5);
    width: 100%;
    left: 0;
    top: 50%;
    transform: translateY(-50%);
    padding: 1.5rem 1rem
}

#page-no-fees .hero-no-fees-main-title>div {
    width: 45%;
    margin-left: auto
}

#page-no-fees .hero-no-fees-main-title h1 {
    margin: 0;
    font-size: 38px;
    position: relative;
    font-weight: bold;
    color: #333333;
    text-align: center;
}

#page-no-fees .hero-no-fees-main-title h1::before,
#page-no-fees .hero-no-fees-main-title h1::after {
    content: url(wp-content/uploads/2021/07/icon-quote.svg);
    position: absolute;
    width: 40px;
    opacity: 0.5;
}

#page-no-fees .hero-no-fees-main-title h1::before {
    left: -10px;
    top: -14px;
}

#page-no-fees .hero-no-fees-main-title h1::after {
    transform: rotate(180deg);
    right: 0;
}

#page-no-fees .hero-no-fees-main-title p {
    margin: 0;
    text-align: right;
    font-weight: bold;
    color: #495057
}

#page-no-fees .hero-no-fees-key-benefits {
    background-color: #333333;
    height: 100%;
    padding: 24px;
    display: flex;
    align-items: center;
    position: relative;
    z-index: 1
}

#page-no-fees .hero-no-fees-key-benefits ul {
    color: #fff;
    margin-bottom: 0;
    border-top: 2px solid #00a6ff;
    border-bottom: 2px solid #00a6ff;
    padding-top: 24px;
    padding-bottom: 24px;
    padding-left: 24px;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    height: 100%;
    width: 100%;
}

#page-no-fees .hero-no-fees-key-benefits h2 {
    color: #fff;
    font-weight: bold;
    text-transform: uppercase;
    margin-bottom: 0;
    font-size: 32px;
    text-align: left;
    margin: 0;
}

#page-no-fees .hero-no-fees-key-benefits p {
    margin-bottom: 0;
    font-size: 18px;
}

#page-no-fees .btn-green-container {
    text-align: center;
    padding-top: 30px;
    padding-bottom: 30px;
}

#page-no-fees .btn-green {
    background-color: #17a217;
    box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
    z-index: 1;
    color: #ffffff;
    text-transform: uppercase;
    border: none;
    width: 320px;
    max-width: 100%;
    padding: 10px 16px;
}

.cta-hero .cta-hero-text div:last-child {
    font-size: 1.39em!important;
}



@media (max-width: 1199.98px) {
    #page-no-fees .hero-no-fees-main-title>div {
        width:55%
    }
    
    #page-no-fees .hero-no-fees-key-benefits h2 {
        font-size: 26px;
    }
    
    #page-no-fees .hero-no-fees-bg-wpb img {
        transform: translateX(-90px);
    }
}

@media (max-width: 991.98px) {
    
    #page-no-fees .hero-no-fees {
        padding-bottom: 0;
    }
    
    #page-no-fees .hero-no-fees::after {
        content: '';
        background: #fff;
        background: linear-gradient(0deg, #efefef 0%, rgba(255, 255, 255, 0) 100%);
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        height: 200px
    }
    
    #page-no-fees .hero-no-fees .row {
        flex-direction: column;
    }
    
    #page-no-fees .hero-no-fees-bg-wpb img {
        transform: translateX(-10px);
    }
    
    #page-no-fees .hero-no-fees-main-title {
        padding-right: 30px;
    }
    
    #page-no-fees .hero-no-fees-main-title>div {
        width: 48%;
    }
    
    #page-no-fees .hero-no-fees-key-benefits {
        margin-top: 1rem
    }
    #page-no-fees .hero-no-fees-key-benefits ul {
        width: 100%
    }
}

@media (min-width: 768px) and (max-width: 991.98px) {
    #page-no-fees .container-absolute #two-col-layout .section-md {
        padding-top: 112px;
    }
    
    #page-no-fees .hero-no-fees-key-benefits ul {

        flex-direction: row;
        padding-left: 0;
        list-style: none
    }
    #page-no-fees .hero-no-fees-key-benefits ul li {
        flex: 0 0 31%
    }
    #page-no-fees .hero-no-fees-key-benefits ul li p {
        margin: 0;
        font-size: 14px;
    }
    #page-no-fees .hero-no-fees-key-benefits h2 {
        font-size: 20px
    }
}

@media (max-width: 767.98px) {
    
    #page-no-fees .hero-no-fees {
        padding-top: 15px;
    }
    
    #page-no-fees .container-absolute.hero-tall {
        position: relative;
        top: 0;
    }
    
    #page-no-fees .hero-no-fees-key-benefits ul li {
        margin-bottom: 24px;
    }
    
    #page-no-fees .hero-no-fees-key-benefits ul li:last-child {
        margin-bottom: 0;
    }
    
    #page-no-fees .hero-no-fees-key-benefits p {
        font-size: 16px;
    }
    
    .hidden-sm {
        display: none !important;
    }
    
    #page-no-fees .btn-green-container {
        padding-bottom: 0;
    }
    
    #page-no-fees .btn-green {
        width: 100%;
    }
}
</style>
    
    <!-- ================================== -->
    <!-- HERO ============================= -->
    <section class="hero hero-no-fees" style="background-image:url(<?php echo get_field('header_banner_image')['url']; ?>);">
        <div class="container">
            <div class="row">
                <div class="col-md-8 hidden-xs d-md-block flex-grow">
                    <div class="hero-no-fees-bg-wpb">
                        <picture>
                            <img src="<?php the_field('hero_banner_image'); ?>" alt="Clayeo Arnold torso">
                        </picture>
                        <div class="hero-no-fees-main-title">
                            <div>
                                <h1><?php the_field('h1_title'); ?></h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 pl-lg-0">
                    <div class="hero-no-fees-key-benefits">
                        <?php 
                        if( have_rows('key_benefits') ):
                            echo "<ul>";
                            $rowCount = count( get_field('key_benefits') );
                            $i = 1;
                            while( have_rows('key_benefits') ) : the_row(); ?>
                                <li>
                                    <h2><?php echo get_sub_field('key_benefit_title'); ?></h2>
                                    <?php if($i<$rowCount) {
                                        echo '<p class="mb-0">'.get_sub_field('key_benefit_description').'</p>';
                                    } else {
                                        echo '<p>'.get_sub_field('key_benefit_description').'</p>';
                                    }
                                    $i++;
                                    ?>
                                </li>
                            <?php
                            endwhile; 
                            echo '</ul>';
                        endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div id="wrapper">
        <div class="container">
             <div class="content">
                 <div class="row">
                    <div class="col-sm-12 btn-green-container">
                        <a class="btn btn-primary btn-lg btn-green" data-toggle="modal" href="#CaseEvaluationModal" role="button">Free Case Review</a>
                    </div>
                     <div class="col-md-12">
                         <div class="center-content">
                             <?php the_content(); ?>
                         </div>
                     </div>
                 </div>
             </div>
        </div>
    </div>

    <div class="btt">
        <div class="container">
            <div class="row">
                <div class="col-md-12" id="back-top"><a href="#top"><img src="<?php the_field('back_top_image', 'option'); ?>" alt="Back to top" class="img-responsive" /></a></div>
            </div>
        </div>
    </div>
    <div class="bottom-logo-section hidden-xs">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                <?php 
                    if( have_rows('cerificate_repeater','option') ):
                    while( have_rows('cerificate_repeater','option') ) : the_row(); ?>

                    <img src="<?php the_sub_field('certificate_image'); ?>" alt="Million Dollar Advocates" />
                <?php
                    endwhile; 
                    endif ?>
                </div>
            </div>
        </div>
    </div>
<?php get_footer(); ?>