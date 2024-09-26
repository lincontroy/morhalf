@extends('layouts.main')
@section('content')
 <!-- Section content -->
 <div class="wt-contact-wrap row ">
            
            <!-- MAP BLOCK START -->
            <div class="contact-left-part">
                <div class="gmap-outline">
                    <div id="gmap_canvas" class="google-map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2483.010148022944!2d-0.13445098404809602!3d51.51302981811226!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487604d31cdfefbb%3A0x27d5339f1859d7f1!2s62%20Dean%20St%2C%20London%20W1D%204QF%2C%20UK!5e0!3m2!1sen!2sin!4v1666266891426!5m2!1sen!2sin" width="600" height="450"></iframe>
                    </div>
                </div>
            </div>
            <!-- MAP BLOCK END -->
            
            <!-- RIGHT PART START -->
            <div class="contact-right-part">
            
                <!-- CONTACT DETAIL -->
                <div class="p-a30  wt-box">
                    <h4 class="text-uppercase">Contact Detail </h4>
                    <div class="wt-separator-outer m-b30">
                        <div class="wt-separator style-square">
                           <span class="separator-left site-bg-primary"></span>
                           <span class="separator-right site-bg-primary"></span>
                       </div>
                   </div>
                    <div class="row">
                    
                        <div class="col-lg-4 col-md-6 col-sm-6 m-b30">
                                <div class="wt-icon-box-wraper center p-a30 bdr-2 bdr-gray-light">
                                    <div class="wt-icon-box-sm site-bg-primary m-b20">
                                        <span class="icon-cell text-white">
                                            <i class="fa fa-phone"></i>
                                        </span>
                                    </div>
                                    <div class="icon-content">
                                        <h5>Phone</h5>
                                        <p>+91 564 548 4854</p>
                                    </div>
                                </div>
                        </div>
                        
                        <div class="col-lg-4 col-md-6 col-sm-6 m-b30">
                            <div class="wt-icon-box-wraper center p-a30 bdr-2 bdr-gray-light">
                                <div class="wt-icon-box-sm site-bg-primary m-b20">
                                    <span class="icon-cell text-white">
                                        <i class="fa fa-envelope"></i>
                                    </span>
                                </div>
                                <div class="icon-content">
                                    <h6>Email</h6>
                                    <p>demo@gmail.com</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-lg-4 col-md-12 col-sm-12 m-b30">
                            <div class="wt-icon-box-wraper center p-a30 bdr-2 bdr-gray-light">
                                <div class="wt-icon-box-sm site-bg-primary m-b20">
                                    <span class="icon-cell text-white">
                                        <i class="fa fa-map-marker"></i>
                                    </span>
                                </div>
                                <div class="icon-content">
                                    <h5>Address</h5>
                                    <p>252 W 43rd St New York, NY</p>
                                </div>
                            </div>
                        </div>
                    
                    </div>
                </div>
                
                <!-- CONTACT FORM -->
                <div class="p-lr30">
                    <h4 class="text-uppercase">Contact Form </h4>
                    <div class="wt-separator-outer m-b30">
                        <div class="wt-separator style-square">
                            <span class="separator-left site-bg-primary"></span>
                            <span class="separator-right site-bg-primary"></span>
                        </div>
                    </div>
                </div>
                <div class="m-a30 wt-box border-2">
                
                    <form class="cons-contact-form" method="post" action="https://thewebmax.org/build/phpmailer/mail.php">
                    
                        <div class="row">
                        
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                        <input name="username" type="text" required class="form-control" placeholder="Neme">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                        <input name="email" type="text" class="form-control" required placeholder="Email">
                                    </div>
                                </div>

                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon v-align-m"><i class="fa fa-pencil"></i></span>
                                        <textarea name="message" rows="4" class="form-control " required placeholder="Message" ></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 text-right">
                                <button name="submit" type="submit" value="Submit" class="site-button  m-r15">Submit  <i class="fa fa-angle-double-right"></i></button>
                                <button name="Resat" type="reset" value="Reset"  class="site-button " >Reset  <i class="fa fa-angle-double-right"></i></button>
                            </div>

                        </div>

                    </form>
                    
                </div>
                
            </div>
            <!-- RIGHT PART END -->
        
        </div>
        <!-- Section content END -->  
@endsection