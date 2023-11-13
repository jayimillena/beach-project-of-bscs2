@extends('layouts.app')

@section('title', 'B.E.A.C.H')
@section('section')
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center justify-content-center">
    <div class="container" data-aos="fade-up">

      <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
        <div class="col-xl-6 col-lg-8">
          <h1><p style="font-family:Garamond, Georgia, Times, Serif">Book Your Beach Trips Now!</p></h1>
          <h2><p style="font-family:Garamond, Georgia, Times, Serif">Best Escape Anyone Can Have</p></h2>
        </div>
      </div>

      <div class="row mt-5 justify-content-center" data-aos="zoom-in" data-aos-delay="250">
        <div class="col-xl-2 col-md-4 col-6">
          <div class="icon-box">
            <i class="ri-store-line"></i>
            <h3><a href="">Store Availables</a></h3>
          </div>
        </div>
        <div class="col-xl-2 col-md-4 col-6 ">
          <div class="icon-box">
            <i class="ri-bar-chart-box-line"></i>
            <h3><a href="">Monitored Ratings</a></h3>
          </div>
        </div>
        <div class="col-xl-2 col-md-4 col-6 mt-4 mt-md-0">
          <div class="icon-box">
            <i class="ri-calendar-todo-line"></i>
            <h3><a href="">Time and Date</a></h3>
          </div>
        </div>
        <div class="col-xl-2 col-md-4 col-6 mt-4 mt-xl-0">
          <div class="icon-box">
            <i class="ri-sun-foggy-line"></i>
            <h3><a href="">Scenic Views</a></h3>
          </div>
        </div>
        <div class="col-xl-2 col-md-4 col-6 mt-4 mt-xl-0">
          <div class="icon-box">
            <i class="ri-coins-fill"></i>
            <h3><a href="">Beach Fee</a></h3>
          </div>
        </div>
      </div>

    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="assets/img/about5.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right" data-aos-delay="100">
            <h3>This is the best escape that people must have in their life.</h3>
            <p class="font-italic">
              It is important to relax and have some fun. To get some positive vibes and fresh air.
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i> The best place to celebrate Birthdays, Christmas, Weddings, and other events</li>
              <li><i class="ri-check-double-line"></i> Fine sand and calm waves that are perfect for relaxing.</li>
              <li><i class="ri-check-double-line"></i> A beach where you can enjoy the serenity of the mesmerizing ambiance is perfect for viewing the sunset.</li>
            </ul>
            <p>
            People can bond with family, friends and love ones. Can improve mental health healing, lessen anxiety, inspiring place for many people, offering relaxation and creative inspiration.
              The calming sound of waves, the warmth of the sun, and the beauty of nature can all contribute to a sense of healing and creativity.
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

  

    <!-- ======= Features Section ======= -->
    <section id="features" class="features">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="image col-lg-6" style='background-image: url("assets/img/features3.jpg");' data-aos="fade-right"></div>
          <div class="col-lg-6" data-aos="fade-left" data-aos-delay="100">
            <div class="icon-box mt-5 mt-lg-0" data-aos="zoom-in" data-aos-delay="150">
              <i class="bx bx-happy-heart-eyes"></i>
              <h4>Stress Free</h4>
              <p>Can help to heal spiritual, mental, and physical health. The sound of waves has also been proven to relax the mind.</p>
            </div>
            <div class="icon-box mt-5" data-aos="zoom-in" data-aos-delay="150">
              <i class="bx bx-image-alt"></i>
              <h4>Best View</h4>
              <p>Quiet, calming place and fresh air coming from the sea watching sunset and sea waves can make us feel better. </p>
            </div>
            <div class="icon-box mt-5" data-aos="zoom-in" data-aos-delay="150">
              <i class="bx bx-home"></i>
              <h4>Great for Events</h4>
              <p>Beach parties, picnics or any sort of such as outdoorsy events, there fun events surely make the most out of nature and get everyone in a good mood.</p>
            </div>
            <div class="icon-box mt-5" data-aos="zoom-in" data-aos-delay="150">
              <i class="bx bx-shield"></i>
              <h4>Safe Escape</h4>
              <p>A place where you can feel relaxed and most willing to express yourself freely. It will assured you a 100% security and safety. </p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Features Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Services</h2>
          <p>Check our Services</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-door-open"></i></div>
              <h4><a href="">Rooms</a></h4>
              <p>Presidential Room, Bridal Room, Family Room, Casita for 2, Friendship Room </p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-dollar"></i></div>
              <h4><a href="">Tent Rental</a></h4>
              <p>Tent for Single, Tent for Couple, Tent for Family, Tent for Group of Friends</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-home"></i></div>
              <h4><a href="">Color Coding Cottage</a></h4>
              <p>Red for Couples, Yellow for Fresh Air, White for Peace, Purple for Family Day, Green for Friends Bonding </p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-water"></i></div>
              <h4><a href="">Beach Activities</a></h4>
              <p>Surfing, Wind Surfing, Kayaking, Beach Volleyball, Scuba Diving, Jet Skiing, Skimboarding</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-sun"></i></div>
              <h4><a href="">Day and Overnight Stay</a></h4>
              <p>We are available 24/7 to help, Day and Overnight stay is the best offer you can get</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-check"></i></div>
              <h4><a href="">Pets Allowed</a></h4>
              <p>Dogs, Cats, and other pets are allowed, but make sure to keep the beach clean. We believe that even the pets deserve to relaxed and feel free</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Portfolio</h2>
          <p>Check our Portfolio</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">Sports</li>
              <li data-filter=".filter-card">Views</li>
              <li data-filter=".filter-web">Relax</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio15.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Sports 1</h4>
                <p>Sports</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio15.jpg" data-gall="portfolioGallery" class="venobox" title="App 1"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio11.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Relax 3</h4>
                <p>Relax</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio11.jpg" data-gall="portfolioGallery" class="venobox" title="Web 3"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio16.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Sports 2</h4>
                <p>Sports</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio16.jpg" data-gall="portfolioGallery" class="venobox" title="App 2"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio18.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Views 2</h4>
                <p>Views</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio18.jpg" data-gall="portfolioGallery" class="venobox" title="Card 2"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio17.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Relax 2</h4>
                <p>Relax</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio17.jpg" data-gall="portfolioGallery" class="venobox" title="Web 2"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio14.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Sports 3</h4>
                <p>Sports</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio14.jpg" data-gall="portfolioGallery" class="venobox" title="App 3"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio19.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Views 1</h4>
                <p>Views</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio19.jpg" data-gall="portfolioGallery" class="venobox" title="Card 1"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio12.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Views 3</h4>
                <p>Views</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio12.jpg" data-gall="portfolioGallery" class="venobox" title="Card 3"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio20.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Relax 2</h4>
                <p>Relax</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio20.jpg" data-gall="portfolioGallery" class="venobox" title="Web 3"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container" data-aos="fade-up">

        <div class="row no-gutters">
          <div class="image col-xl-5 d-flex align-items-stretch justify-content-center justify-content-lg-start" data-aos="fade-right" data-aos-delay="100"></div>
          <div class="col-xl-7 pl-0 pl-lg-5 pr-lg-1 d-flex align-items-stretch" data-aos="fade-left" data-aos-delay="100">
            <div class="content d-flex flex-column justify-content-center">
              <h3><p style="font-family:Garamond, Georgia, Times, Serif">Customer Feedbacks</p></h3>
              <p>
                This section encompasses an assortment of customer feedback pertaining to our establishment. It is thoughtfully divided into four distinct categories:
                </p>
              <div class="row">
                <div class="col-md-6 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    <i class="icofont-simple-smile"></i>
                    <span data-toggle="counter-up">95</span>
                    <p><strong>Satisfaction</strong> </p>
                  </div>
                </div>

                <div class="col-md-6 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    <i class="icofont-document-folder"></i>
                    <span data-toggle="counter-up">85</span>
                    <p><strong>Accomodation</strong> </p>
                  </div>
                </div>

                <div class="col-md-6 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    <i class="icofont-clock-time"></i>
                    <span data-toggle="counter-up">12</span>
                    <p><strong>Years of Service</strong> </p>
                  </div>
                </div>

                <div class="col-md-6 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    <i class="icofont-chart-bar-graph"></i>
                    <span data-toggle="counter-up">15</span>
                    <p><strong>Ratings</strong> </p>
                  </div>
                </div>
                <div class="content d-flex flex-column justify-content-center">
                <p>This organized structure allows for a comprehensive analysis of our patrons' experiences, facilitating both strategic enhancements and a deeper understanding of their perspectives. We value and take pride in the invaluable insights shared by our customers, as they help us continually refine and elevate the quality of our services.</p>
              </div>
            </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container" data-aos="zoom-in">

        <div class="owl-carousel testimonials-carousel">

          <div class="testimonial-item">
            <img src="assets/img/testimonials/testimonials1.jpg" class="testimonial-img" alt="">
            <h3>Dominic Azupardo</h3>
            <h4>Project Manager</h4>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Leadership is like the ocean, guiding and inspiring others with the constant, yet gentle, force of your example.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>

          <div class="testimonial-item">
            <img src="assets/img/testimonials/testimonials2.jpg" class="testimonial-img" alt="">
            <h3>Elyssa Espinosa</h3>
            <h4>Lead Developer</h4>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Sun, sand, and the sound of waves is the perfect symphony for a beach trip that nourishes the soul.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>

          <div class="testimonial-item">
            <img src="assets/img/testimonials/testimonials3.jpg" class="testimonial-img" alt="">
            <h3>Drans Kurt Miraflor</h3>
            <h4>Developer</h4>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Let the waves wash away your worries, and the sand embrace your soul.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>

          <div class="testimonial-item">
            <img src="assets/img/testimonials/testimonials4.jpg" class="testimonial-img" alt="">
            <h3>Jubert Artiaga</h3>
            <h4>Contributor</h4>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              To escape and sit quietly on the beach—that's my idea of paradise.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>

          <div class="testimonial-item">
            <img src="assets/img/testimonials/testimonials5.jpg" class="testimonial-img" alt="">
            <h3>Marygrace Belludo</h3>
            <h4>Contributor</h4>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Sometimes in the waves of change we find our true direction.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>

          <div class="testimonial-item">
            <img src="assets/img/testimonials/testimonials7.jpg" class="testimonial-img" alt="">
            <h3>Mildred Sarturio</h3>
            <h4>Contributor</h4>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              When the warm grains of sand touch our hearts, we know we’re in the right place.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>

        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Team</h2>
          <p>Check our Team</p>
        </div>

        <div class="row">

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="100">
              <div class="member-img">
                <img src="assets/img/team/team1.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Dominic Azupardo</h4>
                <span>Project Manager</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="200">
              <div class="member-img">
                <img src="assets/img/team/team2.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Elyssa Espinosa</h4>
                <span>Lead Developer</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="300">
              <div class="member-img">
                <img src="assets/img/team/team3.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Drans Kurt Miraflor</h4>
                <span>Developer</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="400">
              <div class="member-img">
                <img src="assets/img/team/team4.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Marygrace Belludo</h4>
                <span>Contributor</span>
              </div>
            </div>
          </div>

        </div>

      </div>

      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="100">
              <div class="member-img">
                <img src="assets/img/team/team5.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Jubert Artiaga</h4>
                <span>Contributor</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="200">
              <div class="member-img">
                <img src="assets/img/team/team6.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Mildred Sarturio</h4>
                <span>Contributor</span>
              </div>
            </div>
          </div>


        </div>

      </div>
    </section><!-- End Team Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Contact Us</p>
        </div>

        

        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="icofont-google-map"></i>
                <h4>Location:</h4>
                <p>Block103 San Jose Street, DA 12345, Legazpi City, Albay </p>
              </div>

              <div class="email">
                <i class="icofont-envelope"></i>
                <h4>Email:</h4>
                <p>bestescape@gmail.com</p>
              </div>

              <div class="phone">
                <i class="icofont-phone"></i>
                <h4>Call:</h4>
                <p>+639123456789</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="form-row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->
@endsection
