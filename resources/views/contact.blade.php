<!DOCTYPE html>
<html lang="en">
    <head>
        <!--Start of Google Analytics script-->
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-137437974-2"></script>
        <!--End of Google Analytics script-->
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Star-labs, société de transformation digitale">
        <meta name="keywords" content="Star-labs">
        <meta name="csrf-token" content="MojPpMj40RwLzzXLe9DdKWX4wZ6Ez5ufjQb2qvVq">
        <title>Star-Labs - La croissance par la transformation digital </title>
        <!-- favicon -->
        <link rel="shortcut icon" href="{{ asset('assets/front/img/logo11.png') }}" width="600px" height="320px" type="image/x-icon">
        <!-- bootstrap css -->
        <link rel="stylesheet" href="{{ asset('assets/front/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    
    
        <!-- plugin css -->
        <link rel="stylesheet" href="{{ asset('assets/front/css/plugin.min.css') }}">
        <!--default css-->
        <link rel="stylesheet" href="{{asset('assets/front/css/default.css')}}">
        <!-- common css -->
        <link rel="stylesheet" href="{{asset('assets/front/css/common-style.css')}}">
        <!-- main css -->
        <link rel="stylesheet" href="{{asset('assets/front/css/car-style.css')}}">
        <link rel="stylesheet" href="{{asset('assets/front/css/styles.css')}}">
        <!-- responsive css -->
        <link rel="stylesheet" href="{{ asset('assets/front/css/responsive.css') }}">
        <!-- car responsive css -->
        <link rel="stylesheet" href="{{asset('assets/front/css/car-responsive.css')}}">
    
        <style>
            #scroll_up {
                right: auto;
                left: 20px;
            }
        </style>
        <!-- base color change -->
        <link href="{{ asset('assets/front/css/car-base-colorcf56.css?color=FF3737') }}" rel="stylesheet">
        <!-- common base color change -->
        <link href="{{ asset('assets/front/css/common-base-colorcf56.css?color=FF3737') }}" rel="stylesheet">
        <!-- jquery js -->
        <script src="{{ asset('assets/front/js/jquery-3.3.1.min.js') }}"></script>
    
        <!-- Start of Facebook Pixel Code -->
        <!-- End of Facebook Pixel Code -->
    
        <!--Start of Appzi script-->
        <!--End of Appzi script-->
    </head>

<body>


    <!-- Start finlance_header area -->
    <!-- Start finlance_header area -->
    
    @include('header')
    <!-- End finlance_header area -->
    <!-- End finlance_header area -->

    <!--   breadcrumb area start   -->
    <div class="breadcrumb-area lazy" data-bg="https://codecanyon.kreativdev.com/plusagency/car/assets/front/img/60518e00a7049.jpg" style="background-size:cover;">
        <div class="container">
            <div class="breadcrumb-txt">
                <div class="row">
                    <div class="col-xl-7 col-lg-8 col-sm-10">
                        <span>Contactez-nous</span>
                        <h1 style="font-size: 25px;">Vous avez un projet, une préocupation ? contactez-nous </h1>
                        <ul class="breadcumb">
                            <li><a href="./">Accueil</a></li>
                            <li>Contactez-nous</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="breadcrumb-area-overlay" style="background-color: #09090B;opacity: 0.60;"></div>
    </div>
    <!--   breadcrumb area end    -->




    <!--    contact form and map start   -->
    <div class="contact-form-section">
        <div class="container">
            <div class="contact-infos mb-5">
                <div class="row no-gutters">
                    <div class="col-lg-4 single-info-col">
                        <div class="single-info wow fadeInRight" data-wow-duration="1s" style="visibility: visible; animation-duration: 1s; animation-name: fadeInRight;">
                            <div class="icon-wrapper"><i class="fas fa-home"></i></div>
                            <div class="info-txt">
                                <p><i class="fas fa-map-pin base-color mr-1"></i>Arconville Abomey-calavi à proximité du tribunal de calavi

                                </p>
                                <p><i class="fas fa-map-pin base-color mr-1"></i> Bénin, Calavi
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 single-info-col">
                        <div class="single-info wow fadeInRight" data-wow-duration="1s" data-wow-delay=".2s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.2s; animation-name: fadeInRight;">
                            <div class="icon-wrapper"><i class="fas fa-phone"></i></div>
                            <div class="info-txt">
                                <p>+229 656 534 68</p>
                                <p>+229 656 534 68</p>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 single-info-col">
                        <div class="single-info wow fadeInRight" data-wow-duration="1s" data-wow-delay=".4s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.4s; animation-name: fadeInRight;">
                            <div class="icon-wrapper"><i class="far fa-envelope"></i></div>
                            <div class="info-txt">
                                <p>info@star-labs.org</p>
                                <p>mail@star-labs.org</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            
      
            <div class="row">
                <div class="col-lg-6">
                    @include('apicontact')
                    <span class="section-title">Contactez-nous</span>
                    <h2 class="section-summary">Veuillez nous fournir vos infomations</h2>
                    <form action="#" class="contact-form" method="POST">
                        <input type="hidden" name="_token" value="F9mQPEFf8QLTUwkYlX9Izca4r8onv2BbPFH211uM">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-element">
                                    <input name="name" type="text" placeholder="Nom" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-element">
                                    <input name="email" type="email" placeholder="Email" required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-element">
                                    <input name="subject" type="text" placeholder="Sujet" required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-element">
                                    <textarea name="message" id="comment" cols="30" rows="10" placeholder="Comment" required></textarea>
                                </div>
                            </div>
                            <!-- <div class="col-lg-12 mb-4">
                                <script src="https://www.google.com/recaptcha/api.js?" async defer></script>

                                <div data-sitekey="6LcJcGUaAAAAAPoPN81G-nMnG-Wmlwq3ILjJdfT2" class="g-recaptcha"></div>
                            </div> -->

                            <div class="col-md-12">
                                <div class="form-element no-margin">
                                    <input type="submit" value="Envoyer" name="contacter">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6">
                    <div class="map-wrapper">
                        <div id="map">
                            <iframe width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.3798795447988!2d2.34977671512683!3d6.473472895316941!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1024a9ba9a971e13%3A0x26146ed1d94e1475!2sSTAR%20LABS!5e0!3m2!1sfr!2sbj!4v1624956815883!5m2!1sfr!2sbj"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--    contact form and map end   -->


    <!-- Start finlance_footer section -->
    @include('footer')
    <!-- End finlance_footer section -->



    <div id=" WAButton">
    </div>


    <!--====== PRELOADER PART START ======-->
    <div id="preloader">
        <div class="loader revolve">
            <img src="{{ asset('assets/front/img/608900813a3b1.gif') }}" alt="">
        </div>
    </div>
    <!--====== PRELOADER PART ENDS ======-->

    <!--Scroll-up-->
    <a id="scroll_up"><i class="fas fa-angle-up"></i></a>

    <script>
        var mainbs = [];
        var mainurl = "https://codecanyon.kreativdev.com/plusagency/car";
        var vap_pub_key = "BBZdfYl-AY6KtIkFldiBi8_Fwrzq7Y30Ib6N76FgSY5UBHmXku_2zR690B2UtBEyvwiNiix3qZPINeTm4YZCK-o";

        var rtl = 0;
    </script>
    <!-- popper js -->
    <!-- bootstrap js -->
    <!-- Plugin js -->

    <!-- main js -->
    <!-- pagebuilder custom js -->
    <!-- popper js -->
   <!-- popper js -->
   <script src="{{ asset('assets/front/js/popper.min.js') }}"></script>
   <!-- bootstrap js -->
   <script src="{{asset('assets/front/js/bootstrap.min.js')}}"></script>
   <!-- Plugin js -->
   <script src="{{asset('assets/front/js/plugin.min.js')}}"></script>

   <!-- main js -->
   <script src="{{asset('assets/front/js/car-main.js')}}"></script>
   <!-- pagebuilder custom js -->
   <script src="{{asset('assets/front/js/common-main.js')}}"></script>


   <script type="text/javascript">
       var whatsapp_popup = 1;
       var whatsappImg = "{{ asset('assets/front/img/whatsapp.svg') }}";
       $(function() {
           $('#WAButton').floatingWhatsApp({
               phone: "+229 95403031", //WhatsApp Business phone number
               headerTitle: "Bienvenu à Star-Labs", //Popup Title
               popupMessage: `Discuter avec Star-Labs<br />
           Vous avez un projet ? Expliquez-nous tout et obtenez votre devis gratuitement !<br />
Bonjour ! Comment puis-je vous aider ?`, //Popup Message
               showPopup: whatsapp_popup == 1 ? true : false, //Enables popup display
               buttonImage: '<img src="' + whatsappImg + '" />', //Button Image
               position: "right" //Position: left | right

           });
       });
   </script>






    <!--Start of subscribe functionality-->
    <script>
        $(document).ready(function() {
            $("#subscribeForm, #footerSubscribeForm").on('submit', function(e) {
                // console.log($(this).attr('id'));

                e.preventDefault();

                let formId = $(this).attr('id');
                let fd = new FormData(document.getElementById(formId));
                let $this = $(this);

                $.ajax({
                    url: $(this).attr('action'),
                    type: $(this).attr('method'),
                    data: fd,
                    contentType: false,
                    processData: false,
                    success: function(data) {
                        // console.log(data);
                        if ((data.errors)) {
                            $this.find(".err-email").html(data.errors.email[0]);
                        } else {
                            toastr["success"]("You are subscribed successfully!");
                            $this.trigger('reset');
                            $this.find(".err-email").html('');
                        }
                    }
                });
            });

            // lory slider responsive
            $(".gjs-lory-frame").each(function() {
                let id = $(this).parent().attr('id');
                $("#" + id).attr('style', 'width: 100% !important');
            });
        });
    </script>
    <!--End of subscribe functionality-->

    <!--Start of Tawk.to script-->
    <!--End of Tawk.to script-->

    <!--Start of AddThis script-->
    <!--End of AddThis script-->
</body>

</html>