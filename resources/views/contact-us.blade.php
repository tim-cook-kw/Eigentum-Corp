@extends('layouts.homelayouts')
@section('content')
<!-- site_contact-us -->
<div class="site__body">
        <!-- page__body -->
        <div class="page__body">
            
        <div class="block__title">
            <h2 class="decor-header decor-header--align--center" style="margin: 40px;">Contact Us</h2>
        </div>
            <!-- block -->
            <div class="block">
                <div class="container">
                    <div class="card mb-0">
                        <div class="contact-us">
                            <div class="contact-us__map">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.7449196283337!2d106.76293431436004!3d-6.164905062133895!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f7a8abb4e4c5%3A0x7560212ab899c66b!2sSARKOM+INTRA!5e0!3m2!1sid!2sid!4v1554348969062!5m2!1sid!2sid" frameborder="0" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" allowfullscreen></iframe>
                            </div>
                            <div class="contact-us__container">
                                <div class="row">
                                    <div class="col-12 col-lg-6 pb-4 pb-lg-0">
                                        <h3 class="contact-us__header decor-header">Our Address</h3>
                                        <div class="contact-us__address">
                                            <p>Jl. Kedoya Raya No.7, RT.1/RW.1, Kedoya Utara, Kb. Jeruk, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta 11520
                                                <br>Email: eigentum@corp.com
                                                <br>Phone Number: +62888-111-222-333</p>
                                            <p><strong>Opening Hours</strong>
                                                <br>Monday to Friday: 8am-8pm
                                                <br>Saturday: 8am-6pm
                                                <br>Sunday: 10am-4pm</p>
                                            <p><strong>Comment</strong>
                                                <br>Tinggal pesan dan masukan untuk kami, atau Anda ingin menanyakan harga rumah?...</p>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <h3 class="contact-us__header decor-header">Leave us a Message</h3>
                                        <form>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="form-name">Your Name</label>
                                                    <input type="text" id="form-name" class="form-control" placeholder="Your Name">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="form-email">Email</label>
                                                    <input type="email" id="form-email" class="form-control" placeholder="Email Address">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="form-subject">Subject</label>
                                                <input type="text" id="form-subject" class="form-control" placeholder="Subject">
                                            </div>
                                            <div class="form-group">
                                                <label for="form-message">Message</label>
                                                <textarea id="form-message" class="form-control" rows="4"></textarea>
                                            </div>
                                            <button type="submit" class="btn btn-primary">Send Message</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- block / end -->
        </div>
        <!-- page__body / end -->
    </div>
    <!-- page / end -->
</div>
<!-- site_contact-us / end -->
@endsection