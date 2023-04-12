<!-- Footer Start -->
<div id="contact" class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-4 col-md-6">
                <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Company</h4>
                <a class="btn btn-link" href="#about">About Us</a>
                <a class="btn btn-link" href="#service">Services</a>
                <a class="btn btn-link" href="#reservation">Reservation</a>
                <a class="btn btn-link" href="#">Privacy Policy</a>
                <a class="btn btn-link" href="#">Terms & Condition</a>
            </div>
            <div class="col-lg-4 col-md-6">
                <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Contact</h4>
                <p class="mb-2"><i
                        class="fa fa-map-marker-alt me-3"></i>{{ $contact ? $contact->address : 'Wireless Road, Moghbazar, Dhaka: 1217' }}
                </p>
                <p class="mb-2"><i
                        class="fa fa-phone-alt me-3"></i>{{ $contact ? '+880 ' . $contact->phone : '+8801630406235' }}
                </p>
                <p class="mb-2"><i
                        class="fa fa-envelope me-3"></i>{{ $contact ? $contact->email : 'info@doamin.com' }}
                </p>
                <div class="d-flex pt-2">
                    <a class="btn btn-outline-light btn-social" target="_blank"
                        href="{{ $contact ? $contact->twitter_link : '#' }}"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-light btn-social" target="_blank"
                        href="{{ $contact ? $contact->fb_link : '#' }}"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-light btn-social" target="_blank"
                        href="{{ $contact ? $contact->yt_link : '#' }}"><i class="fab fa-youtube"></i></a>
                    <a class="btn btn-outline-light btn-social" target="_blank"
                        href="{{ $contact ? $contact->linkedin_link : '#' }}"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Newsletter</h4>
                <p>Stay up-to-date with our newsletter.</p>
                <div class="position-relative mx-auto" style="max-width: 400px;">
                    <input class="form-control border-primary w-100 py-3 ps-4 pe-5" type="text"
                        placeholder="Your email">
                    <button type="button"
                        class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="copyright">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; 2023 <a href="#">laraResta</a>. All Right Reserved |
                    Developed By <a href="https://www.facebook.com/itzAla71" target="_blank">MdRasen</a>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <div class="footer-menu">
                        <a href="#">Home</a>
                        <a href="#about">About</a>
                        <a href="#service">Service</a>
                        <a href="#reservation">Reservation</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->
