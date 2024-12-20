<?php
/**
 * Template Name: PricingPage
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

<main class="main main--pricing">
      <section class="pricing-section">
        <div class="pricing-plan pricing-plan--basic">
          <h2 class="pricing-plan__title">Basic</h2>
          <p class="pricing-plan__price">$75 for 2 hours</p>
          <ul class="pricing-plan__features">
            <li class="pricing-plan__feature">3GB photo storage</li>
            <li class="pricing-plan__feature">+50 styled photos</li>
            <li
              class="pricing-plan__feature pricing-plan__feature--unavailable"
            >
              Designed digital album
            </li>
          </ul>
          <button class="button button--buy" data-package="basic">
            Buy Basic Pack
          </button>
          
        </div>

        <div class="pricing-plan pricing-plan--premium">
          <h2 class="pricing-plan__title">Premium</h2>
          <p class="pricing-plan__price">$145 for 5 hours</p>
          <ul class="pricing-plan__features">
            <li class="pricing-plan__feature">5GB photo storage</li>
            <li class="pricing-plan__feature">+80 styled photos</li>
            <li class="pricing-plan__feature">Designed digital album</li>
            <li class="pricing-plan__feature">Better photo quality</li>
          </ul>
          <button class="button button--buy" data-package="premium">
            Buy Premium Pack
          </button>
          
        </div>

        <div class="pricing-plan pricing-plan--platinum">
          <h2 class="pricing-plan__title">Platinum</h2>
          <p class="pricing-plan__price">$250 for 8 hours</p>
          <ul class="pricing-plan__features">
            <li class="pricing-plan__feature">8GB photo storage</li>
            <li class="pricing-plan__feature">+130 styled photos</li>
            <li class="pricing-plan__feature">Designed digital album</li>
            <li class="pricing-plan__feature">Priority Delivery</li>
            <li class="pricing-plan__feature">Social Media-Optimized Files</li>
          </ul>
          <button class="button button--buy" data-package="platinum">
            Buy Platinum Pack
          </button>
        </div>
      </section>

      <section class="contact-form-section">
        <span class="close-btn">&times;</span> 
        <h2>Buy Package</h2>
        <form class="contact-form">
          <label for="first-name">First Name:</label>
          <input type="text" id="first-name" name="first-name" placeholder="Your first name" required />
      
          <label for="last-name">Last Name:</label>
          <input type="text" id="last-name" name="last-name" placeholder="Your last name" required />
      
          <label for="email">Email:</label>
          <input type="email" id="email" name="email" placeholder="Your email" required />
      
          <label for="package">Selected Package:</label>
          <select id="package" name="package">
            <option value="basic">Basic</option>
            <option value="premium">Premium</option>
            <option value="platinum">Platinum</option>
          </select>
      
          <button type="submit" class="button button--submit">Submit</button>
        </form>
      </section>
      <div class="overlay"></div>
      
      
      <div class="overlay"></div>
      
    </main>


      <?php get_footer(); 
?>


