<?php
    get_header();
?>
 
    

        
<!-- New welcome section-->
    <section id="welcome" class="anchor-tag">

        <div class="welcome-background pb-4">


            <div class="container d-lg-none ">
              <div class="row mt-5 pt-2">
                <div data-aos="fade-up" data-aos-delay="200" data-aos-duration='800' >
                          <div>
                                  <h3 CLASS="display-1 mb-3">Welcome</h3>
                              <!--<h4 class="display-5">To Weare Academy</h4>-->
                              <p class="mt-4 mb-4">"I am delighted to welcome you to the Wessex Learning Trust.  Our family of sixteen Academies here in the South-West of England strive to offer a world class, 21st century education for all young people between the ages of 2 and 19, by providing outstanding learning opportunities and creating centres of educational excellence that meet the needs of all children"</p>
                              <a href="" class="">READ MORE</a>
                          </div>
                  </div>   

              </div>
            </div>

        

            <div class="container d-none d-lg-block">

                

                <div class="row">

                    <div class="col-lg-6 d-flex align-items-center pt-5" data-aos="fade-up" data-aos-delay="200" data-aos-duration='800' >
                        <div class="left-welcome-content col-10 p-0">
                                <h3 CLASS="display-1 mb-3" id="welcome-display-text">Welcome</h3>
                            <!--<h4 class="display-5" id="welcome-display-text">To Weare Academy</h4>-->
                            <p class="mt-4 mb-4">"I am delighted to welcome you to the Wessex Learning Trust.  Our family of sixteen Academies here in the South-West of England strive to offer a world class, 21st century education for all young people between the ages of 2 and 19, by providing outstanding learning opportunities and creating centres of educational excellence that meet the needs of all children"</p>
                            <a href="<?php
                            $page_object = get_page_by_path( '/welcome' );
                            $page_id = $page_object->ID;
                            $permalink = get_permalink( $page_id );
                            echo $permalink;
                            ?>">READ MORE</a>
                        </div>
                    </div>   
                    <div class="welcome-right-background col-lg-6 pt-5">
                        
                        <div class="welcome-video-container" data-aos="fade-left" data-aos-delay="600" data-aos-duration='800'>
                          <video width="800" controls class="img-fluid">
                          <source src="mov_bbb.mp4" type="video/mp4">
                          <source src="mov_bbb.ogg" type="video/ogg">
                            Your browser does not support HTML5 video.
                          </video>
                        </div>
                        
        
                    </div>

                </div>  


            </div>

        </div>
        </section>

        <!-- New links section-->

        <section id="img-links-section">

        <div class="container">
            <div class="row mb-5 row-cols-4">

            <div class="col">
                
                
          
              <div class="img-container img-link-1" id="img-container" data-aos="fade-up" data-aos-delay="500">


              <a href="<?php
                        /*
                          $page_object = get_page_by_path( '/calendar' );
                          $page_id = $page_object->ID;
                          $permalink = get_permalink( $page_id );
                          echo $permalink;
                          */
                          ?>">
              <div id="mask"></div>    

              <img src="" alt="Avatar" class="image welcome-img-link1 img-fluid" id="img-link-img">

              <div class="text h6" id="img-link-text">Calendar</div>

              <div class="overlay img-fluid" id="img-link-overlay" 
              onMouseOver="this.style.opacity='1'"
              onMouseOut="this.style.opacity='0'">

                <div class="text h6" id="img-link-text-top">Calendar</div>
              </div>
              </div>
              </a>
            </div>

            <div class="col">
                
                
          
                <div class="img-container img-link-1" id="img-container" data-aos="fade-up" data-aos-delay="500">
  
  
                <a href="<?php
                          /*
                            $page_object = get_page_by_path( '/calendar' );
                            $page_id = $page_object->ID;
                            $permalink = get_permalink( $page_id );
                            echo $permalink;
                            */
                            ?>">
                <div id="mask"></div>    
  
                <img src="" alt="Avatar" class="image welcome-img-link1 img-fluid" id="img-link-img">
  
                <div class="text h6" id="img-link-text">Calendar</div>
  
                <div class="overlay img-fluid" id="img-link-overlay" 
                onMouseOver="this.style.opacity='1'"
                onMouseOut="this.style.opacity='0'">
  
                  <div class="text h6" id="img-link-text-top">Calendar</div>
                </div>
                </div>
                </a>
              </div>

              <div class="col">
                
                
          
                <div class="img-container img-link-1" id="img-container" data-aos="fade-up" data-aos-delay="500">
  
  
                <a href="<?php
                          /*
                            $page_object = get_page_by_path( '/calendar' );
                            $page_id = $page_object->ID;
                            $permalink = get_permalink( $page_id );
                            echo $permalink;
                            */
                            ?>">
                <div id="mask"></div>    
  
                <img src="" alt="Avatar" class="image welcome-img-link1 img-fluid" id="img-link-img">
  
                <div class="text h6" id="img-link-text">Calendar</div>
  
                <div class="overlay img-fluid" id="img-link-overlay" 
                onMouseOver="this.style.opacity='1'"
                onMouseOut="this.style.opacity='0'">
  
                  <div class="text h6" id="img-link-text-top">Calendar</div>
                </div>
                </div>
                </a>
              </div>

              <div class="col">
                
                
          
                <div class="img-container img-link-1" id="img-container" data-aos="fade-up" data-aos-delay="500">
  
  
                <a href="<?php
                          /*
                            $page_object = get_page_by_path( '/calendar' );
                            $page_id = $page_object->ID;
                            $permalink = get_permalink( $page_id );
                            echo $permalink;
                            */
                            ?>">
                <div id="mask"></div>    
  
                <img src="" alt="Avatar" class="image welcome-img-link1 img-fluid" id="img-link-img">
  
                <div class="text h6" id="img-link-text">Calendar</div>
  
                <div class="overlay img-fluid" id="img-link-overlay" 
                onMouseOver="this.style.opacity='1'"
                onMouseOut="this.style.opacity='0'">
  
                  <div class="text h6" id="img-link-text-top">Calendar</div>
                </div>
                </div>
                </a>
              </div>
              
         

         
            
          </div>
          </div>

        </section>
          

            
         
              
      





        <!--NEWS LINKS SECTION-->

        <section id="news container">

            <div class="section-headings text-center row">
                <h2 class="mt-5 mb-3 section-title">Latest News</h2>
                <a href="<?php
                        $page_object = get_page_by_path( '/news' );
                        $page_id = $page_object->ID;
                        $permalink = get_permalink( $page_id );
                        echo $permalink;
                        ?>" class="mb-3 section-link">View all news</a>
            </div> 

            <div class="container mb-0 ps-3 pe-">
                
                
                <div class="row row-cols-1 row-cols-md-3 g-5 mb-4 mt-1 ps-2 pe-2" data-aos="fade-up" data-aos-delay="100">

                     


                  <?php
                    $newsPosts = new WP_Query( array( 'pagename' => 'news', 'posts_per_page' => '3' ) );
                    

                    while ($newsPosts->have_posts()) : $newsPosts->the_post(); ?>

                    
                      <div class="col d-flex align-items-stretch">
                          
                        <div id="#news-card-container">
                        
                          <div class="card h-100 news-card">
                              
                              
                            <div class="news-card-content">
                              <a class="news-card-link img-fluid" href="<?php the_permalink();?>">

                                  <div class="card-img-container img-fluid">
                                    <img src="" class="card-img-top" alt="Weare Logo">
                                  </div>

                                  <div class="card-body" id ="news-card-body">
                                    <!--<h6 class=""><?php the_tags('',' | ');?></h6>-->
                                    <h5 class="news-card-title"><?php the_title();?></h5>

                                    <div class="card-body-text">
                                      <p><?php the_excerpt();?></p>
                                      
                                      <p class="card-link-text news-card-date"><small><?php the_date(); ?></small></p>
                                    </div>

                                  </div>
                                  
                                
                            
                            
                              </a>
                            </div>

                            <div class="news-overlay"></div>
                          
                          </div>
                        
                        </div>
                        
                          
                      </div>
                    <?php endwhile; ?>

                    









</div>
            

            
            </div>

    </section>

    

        <!--CALENDAR SECTION
        <section id="calendar-section">

            <div class="section-headings mb-5 text-center">
                <h2 class="section-title">Calendar</h2>
                <a class ="section-link" href="">VIEW FULL CALENDAR</a>
            </div>

            <div class="calendar-card-group justify-content-center row">

                <div class="calendar-card card col-sm-6 shadow" data-aos="fade-up" data-aos-delay="100">
                  
                  <div class="card-body text-center mt-5">
                        <h5 class="card-title h1 calendar-date">25</h5>
                        <p class="card-text calendar-month fw-bold">SEPT</p>
                        <p class="card-text calendar-event fw-bold">GCSE Results Day</p>
                        <p class="card-text calendar-time mt-5"><small>1800-1930</small></p>
                  </div>
                </div>

                <div class="calendar-card card col-sm-6 shadow" data-aos="fade-up" data-aos-delay="200">

                    <div class="card-body text-center mt-5">
                        <h5 class="card-title h1 calendar-date">25</h5>
                        <p class="card-text calendar-month fw-bold">JAN</p>
                        <p class="card-text calendar-event fw-bold">GCSE Results Day</p>
                        <p class="card-text calendar-time mt-5"><small>1800-1930</small></p>
                    </div>
                  
                  
                </div>
            </div>


        </section>

    -->

    <?php
    get_footer();
    ?>


