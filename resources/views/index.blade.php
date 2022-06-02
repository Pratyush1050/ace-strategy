@extends('layouts.app')
@section('contents')
      <!-- *********************************Hero Section  -->
      <div id="hero" class="img-fluid pt-5">
        
        <!-- ******************************hero sub-section -->
        
        <div class="container container-fluid hero " id="hero-subsection">
          <div class="row d-flex flex-column-reverse flex-md-row">
            <div class="col-md-6 mt-5 pt-5">
              <h1 class="hero-title">Contract of 2022/23</h1>
              <h2 class="hero-subtitle">33% ROI - 9 months</h2>
              <p class="mt-3 hero-p">
                The following are the steps that will be taken: 
            </p>
              <ul class="hero-ul">             
                <li>We will set you up in a meeting with our executive team,</li>
                <li>Then will provide you with the agendas,</li>
                <li>Following with the agendas they will also answer your queries and doubts,</li>
                <li>We will then provide you with 24 hours confirmation time for your decision and a follow up,</li>
                <li>Finally, we will have a contract with both the parties agreeing the terms and condition.</li>
              </ul>                
              <button type="button" class=" hero-btn1 hero-btn btn btn-primary btn-lg mt-4 mb-4 m-2 openButton" data-toggle="modal" data-target="#exampleModal">Book Now</button>
              <a href="#contact"><button type="button" class=" hero-btn2 hero-btn btn btn-primary btn-lg mt-4 mb-4 m-2">Contact Us</button></a>
              <h2 class="hero-contracts line anim-typewriter mt-2">*5 contract offers remaining</h2>
            </div>
            <div class="col-md-6 d-flex justify-content-md-end align-items-center justify-content-center">
              <div class="hero-house-img">
                <img src="{{asset('images/hero-house.png')}}" alt="" class="img-fluid">
              </div>
            </div>
          </div>
        </div>

      </div>
      
      <!-- ***********************About Us  -->
      <div class="container-fluid about-us-section" id="about">
        
          <div class="container">
            <div class="row about-us-row1 mt-5 ">
              <div class="section-break">
                <span class="bar" style="background:linear-gradient(90deg, #DE645E,#B43B8B);"></span>
              </div>            
                <div class="col-md-6 col-sm-12 col-left">
                  <h4>WHO WE ARE</h4>
                </div>
                <div class="col-md-6 col-sm-12 col-right">
                  <h5 class="testimonial-description">
                    Learn more about our organization
                </h5>
                </div>
            </div>
          </div>
          <div class="row about-us-row2">
            <div class="col-md-5 col-left">
              <div class="about-us-img-div">
                <img src="{{asset('images/about.jpg')}}" class="about-us-img mx-auto" alt="">
              </div>              
            </div>
            <div class="col-md-4 col-right">
              <h4>OUR MOTIVES LINE UP WITH YOUR INTERESTS</h4>
              <p class="mt-5">We are a team of professional financial analysts with a wide range of ideas and expertise to provide the maximum return to our clients with a very effective risk management system. With our portfolio management system, we specialize in diversifying investments using stocks, commodities, futures, 
                options, and the forex market, ensuring a guaranteed return within the provided time period.</p>
            </div>
          </div>
      </div>

     <!-- gap between who we are and testimonial  -->
      <div class="gap-who-test"></div>

     <!-- *****************Testimonial Section  -->
     <div class="test-section" id="test">
        
        <div class="testimonials">
            <div class="container">
                  
                <div class="section-break d-flex">
                    <span class="bar" style="background:linear-gradient(90deg, #DE645E,#B43B8B);"></span>
                </div>    
                <div class="row">
                    <div class="col-md-6 mb-2">
                        <h4 class="section-header text-capitalize">
                            TESTIMONIALS
                        </h4>
                    </div>
                    <div class="col-md-6 mb-2">
                        <h4 class="testimonial-description">
                            Hear from some of our investors
                        </h4>
                    </div>
                </div>
            </div>
        </div> 
        <div class="testimonial-texts">
            <div class="testi ">
                <div class="container">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-3 mt-5">
                            <h5 class="fname">
                              John P.
                            </h5>
                            <span class="test-card-stars">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </span>

                            <p class="name-text mt-2">I invested a total of $7000 in the year 2020 during the time of pandemic.The contract was of 6 
                              months which I received both my capital on time with 100% of theirs promised return of my investment..</p>
                        </div>
                        <div class="col-md-1"></div>
                        <div class="col-lg-3 mt-5">
                            <h5 class="fname">Davis S.</h5>
                            <span class="test-card-stars">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star-half-stroke"></i>
                              </span>
                            <p class="name-text mt-2">A perfect way to hedge and diversify capital professionally. 
                              Great team and excellent customer service.
                            </p>
                        </div>
                    </div>
                    
                </div>
            </div>
            <div class="testi ">
                <div class="container">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-3 mt-5">
                            <h5 class="fname">
                              Kamala B.
                            </h5>
                            <span class="test-card-stars">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star fa-star-grey"></i>
                            </span>

                            <p class="name-text mt-2">I like the service they provided and had a wonderful experience. I was first suspicious of the service however, I decided to give it a shot. I invested $10000 and received the promised return within the agreed-upon time frame. The level of customer service is 
                              outstanding and I would strongly advise you to use their services. </p>
                        </div>
                        <div class="col-md-1"></div>
                        <div class="col-lg-3 mt-5">
                            <h5 class="fname">King A.</h5>
                            <span class="test-card-stars">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                              </span>
                            <p class="name-text mt-2">Timely payment and perfect reporting of the contract status. wonderful to
                              work with them and will continue to work with Ace Strategy to grow my assets</p>
                        </div>
                    </div>
                    
                </div>
            </div>
            <div class="testi ">
                <div class="container">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-3 mt-5">
                            <h5 class="fname">
                              Adam S.
                            </h5>
                            <span class="test-card-stars">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star-half-stroke"></i>
                            </span>

                            <p class="name-text mt-2">Absolutely loved customer service.
                               The return for the payment was also great.</p>
                        </div>
                        <div class="col-md-1"></div>
                        <div class="col-lg-3 mt-5">
                            <h5 class="fname">Ava L.</h5>
                            <span class="test-card-stars">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star fa-star-grey"></i>
                              </span>
                            <p class="name-text mt-2">A great place to invest your money with minimum 
                              risk. Exemplary return. recommended ðŸ‘Œ</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     </div>

     <!-- gap between report and testimonial  -->
     <div class="gap-test-report"></div>
    
     <!-- **********************Report section  -->
     <div class="report-section">
        <div class="heading-section">
            <div class="container">
                
                <div class="row">
                    <div class="col-md-6 mb-2">
                        <div class="section-break ">
                            <span class="bar" style="background:linear-gradient(90deg, #DE645E,#B43B8B);"></span>
                        </div> 
                        <h4 class="section-header text-capitalize ">
                            INVESTEMENT REPORTS
                        </h4>
                    </div>
                    <div class="col-md-6 mb-2">
                        <h4 class="testimonial-description">
                            See our investement yeilds
                        </h4>
                    </div>

                    
                </div>
            </div>
        </div> 
        <div class="image-section">
            <div class="container">
                <h5 class="image-description">Some glimpses of our past projects</h5>
                <div class="row d-flex align-items-center">
                    <div class="col-lg-4 lod-md-12">
                        <img src="{{asset('images/report1.JPG')}}" alt="" class="img-fluid image1">
                    </div>
                    <div class="col-lg-4 lod-md-12">
                        <img src="{{asset('images/report4.jpg')}}" alt="" class="img-fluid image1">
                    </div>
                    <div class="col-lg-4 lod-md-12">
                        <img src="{{asset('images/report2.JPG')}}" alt="" class="img-fluid image1">
                    </div>
                </div>
            </div>
        </div>
     </div>

     <!-- gap between contact and testimonial  -->
     <!-- <div class="gap-report-contact"></div> -->

     <!--************************* Contact section  -->
     <div class="container-fluid contact-section" id="contact">
        
      <div class="container">
        <div class="header-section">
          <div class="row">
            <div class="col-md-6 mb-2">
                <div class="section-break ">
                    <span class="bar" style="background:linear-gradient(90deg, #DE645E,#B43B8B);"></span>
                </div> 
                <h4 class="section-header text-capitalize ">
                    CONTACT US
                </h4>
            </div>
            <div class="col-md-6 mb-2">
                <h4 class="contact-description">
                    Here is how you can reach us
                </h4>
            </div>
  
            
        </div>
  
        </div>
      </div>
        <div class="row contact-row">
              
          <div class="col-md-3 col-left">

            <ul>
              <h6><i class="fa-solid fa-compass "></i>LOCATION</h6>
              <li>Queens</li>
              <li>New York,USA</li>
            </ul>

            
            <ul>
              <i class="fa-solid fa-building "></i>HOURS</h6>
              <li>Remains open except Saturdays and Sundays</li>
              <li>From 9am-10pm</li>
            </ul>

            <h6><i class="fa-solid fa-envelope-circle-check"></i>EMAIL</h6>
            <a href="mailto:shakya.ruel@gmail.com" id="company-mail">acestrategy123@gmail.com</a>
          </div>
          <div class="col-md-6 col-right">
            <div class="card contact-map">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d193730.64899242556!2d-73.871192!3d40.65101799999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24369470a592b%3A0x4109d18b6c5c7b05!2sQueens%2C%20NY%2C%20USA!5e0!3m2!1sen!2snp!4v1653843691376!5m2!1sen!2snp" height="450" style="border:none;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>           
          </div>
        </div>
     </div>


              <!-- Modal -->
    <div class="modal fade formPopup" id="exampleModal"  role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog formPopup-dialog" role="document">
                  <div class="modal-content formPopup-content">
                         
                      <!-- modal header  -->
                    <div class="modal-header formPopup-header">
                      <div class="formPopup-heading-div-top" id="exampleModalLabel">
                        <h3 class="formPopup-heading-div-h3">Fill up the form</h3>
                        <button type="button" class="close formPopup-heading-div-crossBtn" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="formPopup-heading-div-bottom">
                        <h6 class="formPopup-heading-div-h6">Our mail team will be in contact with you </h6>
                      </div>
                     
                    </div>
                    
                    <!-- modal body  -->
                    <div class="modal-body formPopup-body">
                      <form action="{{route('buyers.store')}}" method="POST" id="buyer-form">
                        @csrf
                        <div class="row bottom">
                          <div class="col-md-6 bottom-left">
                            <label for="first-name" class="formPopup-label">First Name</label>
                            <input type="text" name="first_name" id="first-name" class="form-control formPopup-input" placeholder="FirstName">                       
                          </div>
                          <div class="col-md-6 bottom-right">
                            <label for="last-name"  class="formPopup-label">Last Name</label>
                            <input type="text" name="last_name" id="last-name" class="form-control formPopup-input" placeholder="LastName">                        
                          </div>
                          <div class="col-lg-6 col-md-12">
                            <label for="email-address"  class="formPopup-label">Email Address</label>
                            <input type="email" name="email" id="email-address" placeholder="example@gmail.com" class="form-control formPopup-input">
                          </div>
                          <div class="col-md-6">
                            <label for="country"  class="formPopup-label">Country</label>
                            <br>
                            <select name="country" id="country" class="form-control" style="width:100%">
                              <option selected disabled>Select Your Country</option>
                            </select>
                          </div>  
                          <div class="col-md-6" id="contact_div">
                            <label for="contact-number"  class="formPopup-label">Contact Number</label>
                            <input type="tel" name="contact_number" id="contact-number" placeholder=" " class="form-control formPopup-input"> 
                            <p id="error-msg" class="hide"></p>
                          </div>
                      
                        </div> 
                        <div class="py-2 formPopup-footer">
    
                          <span class="formPopup-span-button"><button type="submit" id="buyer-submit" class="btn btn-primary formPopup-book-button ">Book Now</button></span>
                        </div>
                                
                      </form>
                    </div>
    
                  </div>
                </div>
    </div> 
@endsection
@section('scripts')
  <script src="{{asset('js/intl-tel-input.js')}}"></script>
  <script src="https://www.google.com/recaptcha/api.js?render={{env('GOOGLE_CAPTCHA_SITE_KEY')}}"></script>
  <script>
    $('#buyer-form').submit(function(event) {
        event.preventDefault();
        grecaptcha.ready(function() {
            grecaptcha.execute('{{env('GOOGLE_CAPTCHA_SITE_KEY')}}', {action: 'buyer_form_submit'}).then(function(token) {
                $('#buyer-form').prepend('<input type="hidden" name="token" value="' + token + '">');
                $('#buyer-form').prepend('<input type="hidden" name="action" value="download_project">');
                $('#buyer-form').unbind('submit').submit();
            });;
        });
  });
  </script>
@endsection
