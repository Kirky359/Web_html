<?php
/**
 * Template Name: ContactPage
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


<div class="menu">  
      <div class="menu__container">
        <ion-icon name="menu-outline" class="menu-icon menu-icon--open" onclick="openMenu()"></ion-icon>
        <ion-icon name="close-outline" class="menu-icon menu-icon--close" onclick="closeMenu()"></ion-icon>
      </div>
      <nav class="menu__nav">
        <ul class="menu__list popup">
          <li class="menu__item"><a href="index.html">Gallery</a></li>
          <li class="menu__item"><a href="pricing.html">Pricing</a></li>
          <li class="menu__item"><a href="contact.html">Contact us</a></li>
        </ul>
      </nav>
    </div>
    

    <main class="main main--contact">
      <section class="contact-section">
        <h2 class="contact-section__title">We're Here for You</h2>
        <p class="contact-section__description">
          A team full of photographers is ready to help you reach your goals.
          Call or email us using the information below!
        </p>
        <div class="contact-section__support">
          <h2 class="support__title">Call your support team</h2>
          
          <p class="support__info support__phone">
            Tel: 
            <span class="phone-number">
              <a href="tel:+380954269128" class="contact-link"> +38095426912</a>
            </span>
          </p>
          
          <p class="support__info support__email">
            Email: 
            <span class="email-address">
              <a href="mailto:support.photoscape@gmail.com" class="contact-link">   support.photoscape@gmail.com</a>
            </span>
          </p>
          
          <p class="support__info support__faq">
            Find answers to your questions here: 
            <a href="mailto:questthephoto@gmail.com" class="contact-link">   questthephoto@gmail.com</a>
          </p>

          <p class="support__info"> Working hours:
            "Our team is available Monday through Friday, 9:00 AM - 6:00 PM (GMT+2)."
          </p>
            
          <p class="additional__info-1"> We believe in providing fast, reliable, and friendly support to help you get the most out of your photography.

          </p>
              
        </div>
      </section>
    </main>
    

<?php get_footer(); 
?>