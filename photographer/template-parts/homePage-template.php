<?php
/**
 * Template Name: HomePageTemplate
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package photographer
 */

get_header(); 
?>

<main class="main">
      <section class="main__intro">
        <h1 class="main__title">Stunning Client Photo Galleries</h1>
        <h2 class="main__subtitle"><span>Galleries | </span><span>Portraits | </span><span>Weddings | </span><span>Holidays</span></h2>

        <a  href="<?php echo get_permalink(get_page_by_path('Pricing')); ?>" class="get-started">GET STARTED</a>
        <div class="gallery-images">
        <img src="<?php echo get_template_directory_uri(); ?>/photos/index/home/gallery-1-hd.png" 
            alt="Gallery Image 1"
            class="gallery-image"
          />
          <img src="<?php echo get_template_directory_uri(); ?>/photos/index/home/gallery-2-hd.png" 

            alt="Gallery Image 2"
            class="gallery-image"
          />
          <img src="<?php echo get_template_directory_uri(); ?>/photos/index/home/add01.png" 

            alt="Gallery Image 3"
            class="gallery-image"
          />
        </div>

      </section>

<section class="comments-section">
  <h2 class="comments-section__title">Client Testimonials</h2>
  <div class="comments">
    <div class="comment">
      <div class="author">
        <img src="<?php echo get_template_directory_uri(); ?>/photos/testimonials/Nowak.png"  alt="Paulina Nowak" class="author__img" />
        <div class="author__name">Paulina Nowak</div>
      </div>
      <div class="rating">
        <svg class="bi bi-star-fill icon-small" xmlns="http://www.w3.org/2000/svg" fill="currentColor">
          <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
        </svg>
        
        <svg class="bi bi-star-fill icon-small" xmlns="http://www.w3.org/2000/svg" fill="currentColor">
          <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
        </svg>
        
        <svg class="bi bi-star-fill icon-small" xmlns="http://www.w3.org/2000/svg" fill="currentColor">
          <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
        </svg>
        
        <svg class="bi bi-star-fill icon-small" xmlns="http://www.w3.org/2000/svg" fill="currentColor">
          <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
        </svg>
        
        <svg class="bi bi-star-fill icon-small" xmlns="http://www.w3.org/2000/svg" fill="currentColor">
          <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
        </svg>
        
      </div>
      <div class="text">Our family had an amazing experience during our Aruba Sunset photoshoot!! Eyla was an incredible photographer...</div>
      <div class="time">23/7/2024</div>
    </div>

    <div class="comment">
      <div class="author">
        <img src="<?php echo get_template_directory_uri(); ?>/photos/testimonials/Sprids.png"  alt="Antonia Spyridis Trad" class="author__img" />
        <div class="author__name">Antonia Spyridis Trad</div>
      </div>
      <div class="rating">
        <svg class="bi bi-star-fill icon-small" xmlns="http://www.w3.org/2000/svg" fill="currentColor">
          <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
        </svg>
        
        <svg class="bi bi-star-fill icon-small" xmlns="http://www.w3.org/2000/svg" fill="currentColor">
          <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
        </svg>
        
        <svg class="bi bi-star-fill icon-small" xmlns="http://www.w3.org/2000/svg" fill="currentColor">
          <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
        </svg>
        
        <svg class="bi bi-star-fill icon-small" xmlns="http://www.w3.org/2000/svg" fill="currentColor">
          <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
        </svg>
        
      </div>
      <div class="text">Eyla is an amazing photographer who beautifully captured our family, despite our 2-year-old's dislike of taking photos...</div>
      <div class="time">22/7/2024</div>
    </div>

    <div class="comment">
      <div class="author">
        <img src="<?php echo get_template_directory_uri(); ?>/photos/testimonials/Kyle.png"  alt="Kyle Fisher" class="author__img" />
        <div class="author__name">Kyle Fisher</div>
      </div>
      <div class="rating">
        <svg class="bi bi-star-fill icon-small" xmlns="http://www.w3.org/2000/svg" fill="currentColor">
          <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
        </svg>
        
        <svg class="bi bi-star-fill icon-small" xmlns="http://www.w3.org/2000/svg" fill="currentColor">
          <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
        </svg>
        
        <svg class="bi bi-star-fill icon-small" xmlns="http://www.w3.org/2000/svg" fill="currentColor">
          <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
        </svg>
        
      </div>
      <div class="text">Eyla was very professional, easy to work with, and outgoing. She guided us on what poses work best...</div>
      <div class="time">17/7/2024</div>
    </div>

    <div class="comment">
      <div class="author">
        <img src="<?php echo get_template_directory_uri(); ?>/photos/testimonials/Leah.png"  alt="Leah Jurca" class="author__img" />
        <div class="author__name">Leah Jurca</div>
      </div>
      <div class="rating">
        <svg class="bi bi-star-fill icon-small" xmlns="http://www.w3.org/2000/svg" fill="currentColor">
          <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
        </svg>
        
        <svg class="bi bi-star-fill icon-small" xmlns="http://www.w3.org/2000/svg" fill="currentColor">
          <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
        </svg>
        
        <svg class="bi bi-star-fill icon-small" xmlns="http://www.w3.org/2000/svg" fill="currentColor">
          <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
        </svg>
        
      </div>
      <div class="text">Eyla was very professional, easy to work with, and outgoing. She guided us on what poses work best...</div>
      <div class="time">17/7/2024</div>
    </div>

    <div class="comment">
      <div class="author">
        <img src="<?php echo get_template_directory_uri(); ?>/photos/testimonials/Kacy.png"  alt="Kacy Hays" class="author__img" />
        <div class="author__name">Kacy Hays</div>
      </div>
      <div class="rating">
        <svg class="bi bi-star-fill icon-small" xmlns="http://www.w3.org/2000/svg" fill="currentColor">
          <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
        </svg>
        
        <svg class="bi bi-star-fill icon-small" xmlns="http://www.w3.org/2000/svg" fill="currentColor">
          <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
        </svg>
        
        <svg class="bi bi-star-fill icon-small" xmlns="http://www.w3.org/2000/svg" fill="currentColor">
          <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
        </svg>
        
      </div>
      <div class="text">Eyla was very professional, easy to work with, and outgoing. She guided us on what poses work best...</div>
      <div class="time">17/7/2024</div>
    </div>
    <div class="comment">
      <div class="author">
        <img src="<?php echo get_template_directory_uri(); ?>/photos/testimonials/Chris.png"  alt="Chris Cornell" class="author__img" />
        <div class="author__name">Chris Cornell</div>
      </div>
      <div class="rating">
        <svg class="bi bi-star-fill icon-small" xmlns="http://www.w3.org/2000/svg" fill="currentColor">
          <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
        </svg>
        
        <svg class="bi bi-star-fill icon-small" xmlns="http://www.w3.org/2000/svg" fill="currentColor">
          <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
        </svg>
        
        <svg class="bi bi-star-fill icon-small" xmlns="http://www.w3.org/2000/svg" fill="currentColor">
          <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
        </svg>
        
        <svg class="bi bi-star-fill icon-small" xmlns="http://www.w3.org/2000/svg" fill="currentColor">
          <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
        </svg>
        
        <svg class="bi bi-star-fill icon-small" xmlns="http://www.w3.org/2000/svg" fill="currentColor">
          <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
        </svg>
        
      </div>
      <div class="text">We had a fantastic time during our Aruba Sunset session! Eyla’s talent as a photographer.</div>
      <div class="time">30/2/2024</div>
    </div>


    <div class="comment">
      <div class="author">
        <img src="<?php echo get_template_directory_uri(); ?>/photos/testimonials/Karla.png"  alt="Karla Harrington" class="author__img" />
        <div class="author__name">Karla Harrington</div>
      </div>
      <div class="rating">
        <svg class="bi bi-star-fill icon-small" xmlns="http://www.w3.org/2000/svg" fill="currentColor">
          <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
        </svg>
        
        <svg class="bi bi-star-fill icon-small" xmlns="http://www.w3.org/2000/svg" fill="currentColor">
          <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
        </svg>
        
        <svg class="bi bi-star-fill icon-small" xmlns="http://www.w3.org/2000/svg" fill="currentColor">
          <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
        </svg>
        
        <svg class="bi bi-star-fill icon-small" xmlns="http://www.w3.org/2000/svg" fill="currentColor">
          <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
        </svg>
        
        <svg class="bi bi-star-fill icon-small" xmlns="http://www.w3.org/2000/svg" fill="currentColor">
          <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
        </svg>
        
      </div>
      <div class="text">Our family had an unforgettable time during our Aruba Sunset photoshoot! Eyla was an outstanding photographer...</div>
      <div class="time">5/10/2024</div>
    </div>


    <div class="comment">
      <div class="author">
        <img src="<?php echo get_template_directory_uri(); ?>/photos/testimonials/Chester.png"  alt="Chester Bennington" class="author__img" />
        <div class="author__name">Chester Bennington</div>
      </div>
      <div class="rating">
        <svg class="bi bi-star-fill icon-small" xmlns="http://www.w3.org/2000/svg" fill="currentColor">
          <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
        </svg>
        
        <svg class="bi bi-star-fill icon-small" xmlns="http://www.w3.org/2000/svg" fill="currentColor">
          <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
        </svg>
        
        <svg class="bi bi-star-fill icon-small" xmlns="http://www.w3.org/2000/svg" fill="currentColor">
          <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
        </svg>
        
        <svg class="bi bi-star-fill icon-small" xmlns="http://www.w3.org/2000/svg" fill="currentColor">
          <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
        </svg>
        
        <svg class="bi bi-star-fill icon-small" xmlns="http://www.w3.org/2000/svg" fill="currentColor">
          <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
        </svg>
        
      </div>
      <div class="text">The Aruba Sunset photoshoot was an incredible experience for our family! Eyla captured every moment beautifully...
      </div>
      <div class="time">2/3/2024</div>
    </div>
</section>
<section class="main__recent-gallery">
  <h2 class="recent-gallery__title">
    Recent Gallery
  </h2>
  
  <div class="recent-gallery__filters">
    <div class="filter__container">
      <label class="label__name" for="category-select">Category:</label>
      <select id="category-select" class="filter__select">
      </select>
    </div>
  
    <div class="filter__container">
      <label class="label__name" for="tag-select">Tag:</label>
      <select id="tag-select" class="filter__select">
      </select>
    </div>    
  </div>


</section>

        <div class="recent-gallery__photos">
          <div class="photo-item">
          <img src="<?php echo get_template_directory_uri(); ?>/photos/index/wedding-blacknwhite/img-1.png"
              alt="Photo 1"
              class="photo-item__image"
              />
             
            />
          </div>
          <div class="photo-item">
          <img src="<?php echo get_template_directory_uri(); ?>/photos/index/wedding-blacknwhite/img-2.png"
              alt="Photo 2"
              class="photo-item__image"
            />
          </div>
          <div class="photo-item">
          <img src="<?php echo get_template_directory_uri(); ?>/photos/index/wedding-blacknwhite/img-3.png"
              alt="Photo 3"
              class="photo-item__image"
            />
          </div>
          <div class="photo-item">
          <img src="<?php echo get_template_directory_uri(); ?>/photos/index/wedding-blacknwhite/img-4.png"
              alt="Photo 4"
              class="photo-item__image"
            />
          </div>
          <div class="photo-item">
          <img src="<?php echo get_template_directory_uri(); ?>/photos/index/wedding-blacknwhite/img-5.png"
              alt="Photo 5"
              class="photo-item__image"
            />
          </div>
          <div class="photo-item">
          <img src="<?php echo get_template_directory_uri(); ?>/photos/index/wedding-blacknwhite/img-6.png"
              alt="Photo 6"
              class="photo-item__image"
            />
          </div>
          <div class="photo-item">
          <img src="<?php echo get_template_directory_uri(); ?>/photos/index/wedding-blacknwhite/img-7.png"
             alt="Photo 7" class="photo-item__image"/>
          </div>
          <div class="photo-item">
          <img src="<?php echo get_template_directory_uri(); ?>/photos/index/wedding-blacknwhite/img-8.png"
              alt="Photo 8"
              class="photo-item__image"
            />
          </div>

          <div class="photo-item">
          <img src="<?php echo get_template_directory_uri(); ?>/photos/index/wedding-blacknwhite/img-9.png"
            alt="Photo 9" class="photo-item__image"/>
          </div>
        </div>
      </section>
    </main>



    
<?php
get_footer(); 
?>