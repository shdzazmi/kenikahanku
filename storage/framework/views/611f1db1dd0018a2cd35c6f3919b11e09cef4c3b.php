<?php $__env->startSection('title', 'Bella & Adam'); ?>

<link href="<?php echo e(asset('assets/css/invitation-fullpic.css')); ?>" rel="stylesheet" type="text/css" />
<style>
    .font-utama {
        font-family: 'Gloock', serif;
        font-weight: normal;
    }
</style>

<?php $__env->startSection('content'); ?>

    <div class="content" style="width: 100%">

        <!--Header-->
        <?php echo $__env->make('invitation-fullpic.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <!--Divider-->
        <div class="divider disabled-element" data-aos="zoom-in" data-aos-duration="1500">
            <img src="<?php echo e(asset('image/divider4.png')); ?>" alt="divider4"
                style="--x-mobile: 50%; --x-desktop: 50%; max-width: 125px;">
        </div>

        <!--Text Intro-->
        <?php echo $__env->make('invitation-fullpic.intro', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <!--Divider-->
        <div class="divider disabled-element" data-aos="fade-right" data-aos-duration="1500">
            <img src="<?php echo e(asset('image/divider1.png')); ?>" alt="divider1" style="--x-mobile: 25%; --x-desktop: 25%;">
        </div>

        <!--Kedua mempelai-->
        <?php echo $__env->make('invitation-fullpic.mempelai_bini', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="divider disabled-element fly" data-aos="zoom-in" data-aos-duration="1500">
            <img src="<?php echo e(asset('image/divider7.png')); ?>" class="stepin" alt="divider7"
                style="--x-mobile: 50%; --x-desktop: 50%; max-width: 150px;">
        </div>
        <?php echo $__env->make('invitation-fullpic.mempelai_laki', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <!--Divider-->
        <div class="divider disabled-element fly" data-aos-offset="-10" data-aos="fade-left" data-aos-duration="1500">
            <img src="<?php echo e(asset('image/divider2.png')); ?>" alt="divider2" style="--x-mobile: 85%; --x-desktop: 70%;">
        </div>

        <!--Schedule-->
        <?php echo $__env->make('invitation-fullpic.schedule', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <!--Divider-->
        <div class="divider disabled-element fly" data-aos-offset="-10" data-aos="fade-left" data-aos-duration="1500">
            <img src="<?php echo e(asset('image/divider3.png')); ?>" class="stepin" alt="divider3"
                style="--x-mobile: 80%; --x-desktop: 80%; top: -30px;">
        </div>

        <!--Lokasi-->
        <?php echo $__env->make('invitation-fullpic.lokasi', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <!--Divider-->
        <div class="divider disabled-element fly" data-aos="fade-right" data-aos-duration="1500">
            <img src="<?php echo e(asset('image/divider5.png')); ?>" class="stepin" alt="divider5"
                style="--x-mobile: 20%; --x-desktop: 20%;">
        </div>

        <!--Gallery-->
        <?php echo $__env->make('invitation-fullpic.gallery', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <!--Divider muka bela-->
        <div class="divider disabled-element" data-aos="zoom-out-right" data-aos-duration="1500">
            <img src="<?php echo e(asset('image/divider10.png')); ?>" class="stepin" alt="divider10"
                style="--x-mobile: 25%; --x-desktop: 25%; max-width: 250px; top: 50px;">
        </div>
        <!--Kartu ucapan-->
        <?php echo $__env->make('invitation-fullpic.ucapan', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <!--Divider muka adam-->
        <div class="divider disabled-element" data-aos="zoom-out-left" data-aos-duration="1500">
            <img src="<?php echo e(asset('image/divider9.png')); ?>" class="stepin" alt="divider9"
                style="--x-mobile: 75%; --x-desktop: 75%; max-width: 250px; top: 20px;">
        </div>

        <?php echo $__env->make('invitation-fullpic.ucapan_mereka', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


        <!--Divider-->
        <div class="divider disabled-element" data-aos="fade-right" data-aos-duration="1500">
            <img src="<?php echo e(asset('image/divider4.png')); ?>" alt="divider4"
                style="--x-mobile: 25%; --x-desktop: 25%; max-width: 125px;">
        </div>

        <!--Footer-->
        <?php echo $__env->make('invitation-fullpic.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>


    <!--Modal opening-->
    <?php echo $__env->make('invitation-fullpic.modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <audio autoplay loop id="bgm">
        <source src="<?php echo e(asset('bgm.mp3')); ?>" type="audio/mpeg">
    </audio>

<?php $__env->stopSection(); ?>
<?php $__env->startPush('page_scripts'); ?>
    <script>
        var namainput = document.getElementById('namainput');
        var ucapaninput = document.getElementById('ucapaninput');
        var submitbutton = document.getElementById('submitbutton');
        var bgm = document.getElementById('bgm');
        var openbutton = document.getElementById('openbutton');

        submitbutton.addEventListener("click", function() {
            if (namainput.value !== '' && ucapaninput.value !== '') {
                var url = '<?php echo e(route('ucapan.put')); ?>';
                var data = {
                    nama: namainput.value,
                    ucapan: ucapaninput.value
                };

                $.ajax({
                    url: url,
                    method: "POST",
                    data: data,
                    headers: {
                        'X-CSRF-TOKEN': "<?php echo e(csrf_token()); ?>"
                    },
                    success: function(data) {
                        $('#messagebox').prepend(
                            '<div data-aos="zoom-in" data-aos-duration="1500" class="card p-3 m-2" style="border-radius: 16px">' +
                            '<li class="media p-0">' +
                            '<figure class="avatar mr-2 text-white" data-initial="' + data.nama[0] +
                            '" style="background-color: #b1a59e"></figure>' +
                            '<div class="media-body text-left">' +
                            '<h6 class="media-title">' + data.nama + '</h6>' +
                            '<div class="text-small">' + data.ucapan + '</div>' +
                            '<i class="far fa-clock text-small text-muted"></i><text class="text-small text-muted" style="font-size: 12px"> ' +
                            data.tanggal + '</text>' +
                            '</div>' +
                            '</li>' +
                            '</div>'
                        );
                        namainput.value = '';
                        ucapaninput.value = '';
                    }
                })
            } else {
                alert('Lengkapi nama dan ucapan!')
            }
        });

        (function() {
            const second = 1000,
                minute = second * 60,
                hour = minute * 60,
                day = hour * 24;

            let acara = "March 29, 2026 08:00:00",
                countDown = new Date(acara).getTime(),
                x = setInterval(function() {

                    let now = new Date().getTime(),
                        distance = countDown - now;

                    document.getElementById("days").innerText = Math.floor(distance / (day)),
                        document.getElementById("hours").innerText = Math.floor((distance % (day)) / (hour)),
                        document.getElementById("minutes").innerText = Math.floor((distance % (hour)) / (minute)),
                        document.getElementById("seconds").innerText = Math.floor((distance % (minute)) / second);

                    //do something later when date is reached
                    if (distance < 0) {
                        let headline = document.getElementById("headline"),
                            countdown = document.getElementById("countdown"),
                            content = document.getElementById("content");

                        headline.innerText = "It's our wedding day!";
                        countdown.style.display = "none";
                        content.style.display = "block";

                        clearInterval(x);
                    }
                    //seconds
                }, 0)
        }());
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\kenikahanku\resources\views/invitation-fullpic.blade.php ENDPATH**/ ?>