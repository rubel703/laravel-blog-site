@extends('frontend.master')
@section('title')
Contact
@endsection
@section('contact-page')
    <!-- content
    ================================================== -->
    <section class="s-content">

        <div class="row">
            <div class="column large-12">

                <article class="s-content__entry">

                    <div class="s-content__media">
                        <img src="{{asset('assets/frontend-assets/')}}/images/thumbs/contact/contact-1050.jpg" 
                                srcset="{{asset('assets/frontend-assets/')}}/images/thumbs/contact/contact-2100.jpg 2100w, 
                                {{asset('assets/frontend-assets/')}}/images/thumbs/contact/contact-1050.jpg 1050w, 
                                {{asset('assets/frontend-assets/')}}/images/thumbs/contact/contact-525.jpg 525w" sizes="(max-width: 2100px) 100vw, 2100px" alt="">
                    </div> <!-- end s-content__media -->

                    <div class="s-content__entry-header">
                        <h1 class="s-content__title">Get In Touch With Us.</h1>
                    </div> <!-- end s-content__entry-header -->

                    <div class="s-content__primary">

                        <div class="s-content__page-content">

                            <p class="lead">
                            Lorem ipsum Deserunt est dolore Ut Excepteur nulla occaecat magna occaecat Excepteur nisi esse veniam 
                            dolor consectetur minim qui nisi esse deserunt commodo ea enim ullamco non voluptate consectetur minim 
                            aliquip Ut incididunt amet ut cupidatat.
                            </p> 

                            <p>
                            Duis ex ad cupidatat tempor Excepteur cillum cupidatat fugiat nostrud cupidatat dolor sunt sint sit 
                            nisi est eu exercitation incididunt adipisicing veniam velit id fugiat enim mollit amet anim veniam 
                            dolor dolor irure velit commodo cillum sit nulla ullamco magna amet magna cupidatat qui labore cillum 
                            sit in tempor veniam consequat non laborum adipisicing aliqua ea nisi sint ut quis proident ullamco 
                            ut dolore culpa occaecat ut laboris in sit minim cupidatat ut dolor voluptate enim veniam consequat 
                            occaecat fugiat in adipisicing in amet Ut nulla nisi non ut enim aliqua laborum mollit quis nostrud sed sed.
                            </p>

                            <br>

                            <div class="row block-large-1-2 block-tab-full s-content__blocks">
                                <div class="column">
                                    <h4>Where to Find Us</h4>
                                    <p>
                                    <br>
                                    Banani, Dhaka-1210<br>
                                    Bangladesh
                                    </p>
                                </div>

                                <div class="column">
                                    <h4>Contact Info</h4>
                                    <p>
                                    rubel@yourdomain.com<br>
                                    info@yourdomain.com <br>
                                    Phone: (+880) 1824098482
                                    </p> 
                                </div>
                            </div> <!-- end s-content__blocks -->

                            <form name="cForm" id="cForm" class="s-content__form" method="post" action="">
                                @csrf
                                <fieldset>

                                    <div class="form-field">
                                        <input name="cName" type="text" id="cName" class="h-full-width h-remove-bottom" placeholder="Your Name*" value="" required>
                                    </div>

                                    <div class="form-field">
                                        <input name="cEmail" type="text" id="cEmail" class="h-full-width h-remove-bottom" placeholder="Your Email*" value="" required>
                                    </div>

                                    <div class="form-field">
                                        <input name="cWebsite" type="text" id="cWebsite" class="h-full-width h-remove-bottom" placeholder="Website"  value="">
                                    </div>

                                    <div class="message form-field">
                                        <textarea name="cMessage" id="cMessage" class="h-full-width" placeholder="Your Message*" required></textarea>
                                    </div>

                                    <br>
                                    <button type="submit" class="submit btn btn--primary ">Submit</button>

                                </fieldset>
                            </form> <!-- end form -->

                        </div> <!-- end s-entry__page-content -->

                    </div> <!-- end s-content__primary -->
                </article> <!-- end entry -->

            </div> <!-- end column -->
        </div> <!-- end row -->

    </section> <!-- end s-content -->
@endsection