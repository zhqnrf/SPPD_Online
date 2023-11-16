<script src="{{ asset('/') }}vendor/global/global.min.js"></script>
<script src="{{ asset('/') }}vendor/chart.js/Chart.bundle.min.js"></script>
<script src="{{ asset('/') }}vendor/jquery-nice-select/js/jquery.nice-select.min.js"></script>

<!-- Apex Chart -->
<script src="{{ asset('/') }}vendor/apexchart/apexchart.js"></script>

<script src="{{ asset('/') }}vendor/chart.js/Chart.bundle.min.js"></script>

<!-- Chart piety plugin files -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="{{ asset('/') }}vendor/peity/jquery.peity.min.js"></script>
<!-- Dashboard 1 -->
<script src="{{ asset('/vendor/ckeditor/ckeditor.js') }}"></script>
<script src="{{ asset('/') }}vendor/toastr/js/toastr.min.js"></script>
<script src="{{ asset('/') }}js/dashboard/dashboard-1.js"></script>
<script src="{{ asset('/') }}vendor/jquery-nice-select/js/jquery.nice-select.min.js"></script>
<script src="{{ asset('/') }}js/plugins-init/chartist-init.js"></script>
<script src="{{ asset('/') }}vendor/owl-carousel/owl.carousel.js"></script>
<script src="{{ asset('/') }}vendor/jquery-nice-select/js/jquery.nice-select.min.js"></script>
<script src="{{ asset('/') }}vendor/datatables/js/jquery.dataTables.min.js"></script>
<script src="{{ asset('/') }}js/plugins-init/datatables.init.js"></script>
<script src="{{ asset('/') }}js/custom.min.js"></script>
<script src="{{ asset('/') }}js/dlabnav-init.js"></script>
<script src="{{ asset('/') }}js/demo.js"></script>

<script src="{{ asset('/') }}js/styleSwitcher.js"></script>
<script>
    function cardsCenter() {

        /*  testimonial one function by = owl.carousel.js */

        jQuery('.card-slider').owlCarousel({
            loop: true,
            margin: 0,
            nav: true,
            //center:true,
            slideSpeed: 3000,
            paginationSpeed: 3000,
            dots: true,
            navText: ['<i class="fas fa-arrow-left"></i>', '<i class="fas fa-arrow-right"></i>'],
            responsive: {
                0: {
                    items: 1
                },
                576: {
                    items: 1
                },
                800: {
                    items: 1
                },
                991: {
                    items: 1
                },
                1200: {
                    items: 1
                },
                1600: {
                    items: 1
                }
            }
        })
    }

    jQuery(window).on('load', function() {
        setTimeout(function() {
            cardsCenter();
        }, 1000);
    });
</script>

@if ($errors->any())
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script>
        (function($) {
            "use strict";
            $(document).ready(function() {
                toastr.error("{{ $errors->first() }}", "Error", {
                    positionClass: "toast-top-right",
                    timeOut: 5e3,
                    closeButton: true,
                    debug: false,
                    newestOnTop: true,
                    progressBar: true,
                    preventDuplicates: true,
                    onclick: null,
                    showDuration: "300",
                    hideDuration: "1000",
                    extendedTimeOut: "1000",
                    showEasing: "swing",
                    hideEasing: "linear",
                    showMethod: "fadeIn",
                    hideMethod: "fadeOut",
                    tapToDismiss: false
                });
            });
        })(jQuery);
    </script>
@endif


</body>

</html>
