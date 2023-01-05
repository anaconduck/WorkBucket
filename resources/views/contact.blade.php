@extends ('layouts.kontak')

@section ('content')
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <div class="row">
                <!-- Start Contact -->
                <section class="container py-5">
                    <h1 class="col-12 col-xl-8 h2 text-left text-primary pt-3">Create success campaign with us!<br><br></h1>
                    <div class="row pb-4">
                        <div class="col-lg-4">

                            <div class="contact row mb-4">
                                <div class="contact-icon col-lg-3 col-3">
                                    <div class="py-3 mb-2 text-center border rounded text-secondary">
                                        <i class='display-6 bx bx-news'></i>
                                    </div>
                                </div>
                                <ul class="contact-info list-unstyled col-lg-9 col-9  light-300">
                                    <li class="h5 mb-0">Media Contact</li>
                                    <li class="text-muted">Mr. John Doe</li>
                                    <li class="text-muted">010-020-0340</li>
                                </ul>
                            </div>

                            <div class="contact row mb-4">
                                <div class="contact-icon col-lg-3 col-3">
                                    <div class="border py-3 mb-2 text-center border rounded text-secondary">
                                        <i class='bx bx-laptop display-6'></i>
                                    </div>
                                </div>
                                <ul class="contact-info list-unstyled col-lg-9 col-9 light-300">
                                    <li class="h5 mb-0">Technical Contact</li>
                                    <li class="text-muted">Mr. John Stiles</li>
                                    <li class="text-muted">010-020-0340</li>
                                </ul>
                            </div>

                            <div class="contact row mb-4">
                                <div class="contact-icon col-lg-3 col-3">
                                    <div class="border py-3 mb-2 text-center border rounded text-secondary">
                                        <i class='bx bx-money display-6'></i>
                                    </div>
                                </div>
                                <ul class="contact-info list-unstyled col-lg-9 col-9 light-300">
                                    <li class="h5 mb-0">Billing Contact</li>
                                    <li class="text-muted">Mr. Richard Miles</li>
                                    <li class="text-muted">010-020-0340</li>
                                </ul>
                            </div>

                        </div>


                        <!-- Start Contact Form -->
                        <div class="col-lg-8 ">
                            <form class="contact-form row" method="head" action="#" role="form">

                                <div class="col-lg-6 mb-4">
                                    <div class="form-floating">
                                        <input type="text" class="form-control form-control-lg light-300" id="floatingname" name="inputname" placeholder="Name">
                                        <label for="floatingname light-300">Name</label>
                                    </div>
                                </div><!-- End Input Name -->

                                <div class="col-lg-6 mb-4">
                                    <div class="form-floating">
                                        <input type="text" class="form-control form-control-lg light-300" id="floatingemail" name="inputemail" placeholder="Email">
                                        <label for="floatingemail light-300">Email</label>
                                    </div>
                                </div><!-- End Input Email -->

                                <div class="col-lg-6 mb-4">
                                    <div class="form-floating">
                                        <input type="text" class="form-control form-control-lg light-300" id="floatingphone" name="inputphone" placeholder="Phone">
                                        <label for="floatingphone light-300">Phone</label>
                                    </div>
                                </div><!-- End Input Phone -->

                                <div class="col-lg-6 mb-4">
                                    <div class="form-floating">
                                        <input type="text" class="form-control form-control-lg light-300" id="floatingcompany" name="inputcompany" placeholder="Company Name">
                                        <label for="floatingcompany light-300">Company Name</label>
                                    </div>
                                </div><!-- End Input Company Name -->

                                <div class="col-12">
                                    <div class="form-floating mb-4">
                                        <input type="text" class="form-control form-control-lg light-300" id="floatingsubject" name="inputsubject" placeholder="Subject">
                                        <label for="floatingsubject light-300">Subject</label>
                                    </div>
                                </div><!-- End Input Subject -->

                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <textarea class="form-control light-300" rows="8" placeholder="Message" id="floatingtextarea"></textarea>
                                        <label for="floatingtextarea light-300">Message</label>
                                    </div>
                                </div><!-- End Textarea Message -->

                                <div class="col-md-12 col-12 m-auto text-end">
                                    <button type="submit" class="btn btn-secondary rounded-pill px-md-5 px-4 py-2 radius-0 text-light light-300">Send Message</button>
                                </div>

                            </form>
                        </div>
                        <!-- End Contact Form -->


                    </div>
                </section>
                <!-- End Contact -->
                <section>
                    <div>
                    </div>
            </div>
        </div>
    </main>
    @endsection