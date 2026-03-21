<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>" />
    <title>Kenikahanku <?php echo $__env->yieldContent('title'); ?></title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 4.1.1 -->
    <link href="<?php echo e(asset('assets/css/bootstrap.min.css')); ?>" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link href="<?php echo e(asset('assets/css/@fortawesome/fontawesome-free/css/all.css')); ?>" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/iziToast.min.css')); ?>">
    <link href="<?php echo e(asset('assets/css/sweetalert.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(asset('assets/css/select2.min.css')); ?>" rel="stylesheet" type="text/css" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Gloock&display=swap" rel="stylesheet">
    <?php echo $__env->yieldContent('page_css'); ?>
    <!-- Template CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('web/css/style.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('web/css/components.css')); ?>">
    <?php echo $__env->yieldContent('page_css'); ?>

    <!--AOS Animate on scroll-->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- GLightbox CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css" />

    <?php echo $__env->yieldContent('css'); ?>
</head>

<body class="sidebar-gone m-0 p-0" style="font-family: 'Montserrat Alternates', sans-serif;">

    

    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            <!-- Main Content -->
            <div class="content">
                <?php echo $__env->yieldContent('content'); ?>
            </div>
        </div>
    </div>

    <?php echo $__env->yieldPushContent('page_scripts'); ?>

</body>
<script src="<?php echo e(asset('assets/js/jquery.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/popper.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/bootstrap.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/sweetalert.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/iziToast.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/select2.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/jquery.nicescroll.js')); ?>"></script>

<!-- Template JS File -->
<script src="<?php echo e(asset('web/js/stisla.js')); ?>"></script>
<script src="<?php echo e(asset('web/js/scripts.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/profile.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/custom/custom.js')); ?>"></script>
<!-- GLightbox JS -->
<script src="https://cdn.jsdelivr.net/gh/mcstudios/glightbox/dist/js/glightbox.min.js"></script>
<?php echo $__env->yieldContent('page_js'); ?>
<?php echo $__env->yieldContent('scripts'); ?>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>


<script>
    const lightbox = GLightbox({
        selector: '.glightbox'
    });

    $(document).ready(function() {
        $(this).scrollTop(0);
    });

    $(document).ready(function() {
        $("#modalbuka").modal();
    });

    // var sakura = new Sakura('sakura-wrapper', {
    //     // options here
    //     colors: [{
    //             gradientColorStart: 'rgb(217,203,203)',
    //             gradientColorEnd: 'rgb(217,203,203)',
    //             gradientColorDegree: 120,
    //         },
    //         {
    //             gradientColorStart: 'rgb(217,203,203)',
    //             gradientColorEnd: 'rgb(217,203,203)',
    //             gradientColorDegree: 120,
    //         },
    //         {
    //             gradientColorStart: 'rgb(217,203,203)',
    //             gradientColorEnd: 'rgb(217,203,203)',
    //             gradientColorDegree: 120,
    //         },
    //     ],
    // });

    openbutton.addEventListener("click", function() {
        $("#modalbuka").modal('hide');
        document.getElementById("bgm").play();

        setTimeout(function() {
            AOS.init();
        }, 500);
        openFullscreen();
    });

    var elem = document.documentElement;

    function openFullscreen() {
        if (elem.requestFullscreen) {
            elem.requestFullscreen();
        } else if (elem.webkitRequestFullscreen) {
            /* Safari */
            elem.webkitRequestFullscreen();
        } else if (elem.msRequestFullscreen) {
            /* IE11 */
            elem.msRequestFullscreen();
        }
    }

    let loggedInUser = <?php echo json_encode(\Illuminate\Support\Facades\Auth::user(), 15, 512) ?>;
    let loginUrl = '<?php echo e(route('login')); ?>';
    // Loading button plugin (removed from BS4)
    (function($) {
        $.fn.button = function(action) {
            if (action === 'loading' && this.data('loading-text')) {
                this.data('original-text', this.html()).html(this.data('loading-text')).prop('disabled', true);
            }
            if (action === 'reset' && this.data('original-text')) {
                this.html(this.data('original-text')).prop('disabled', false);
            }
        };
    }(jQuery));
</script>

</html>
<?php /**PATH C:\wamp64\www\kenikahanku\resources\views/layouts/main.blade.php ENDPATH**/ ?>