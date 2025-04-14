<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lấy lại mật khẩu</title>
    <link rel="stylesheet" href="theme/frontend/css/all.min.css">
    <link rel="stylesheet" href="theme/frontend/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="theme/frontend/css/animate.css">
    <link rel="stylesheet" href="theme/frontend/css/output.css">
    <link rel="stylesheet" href="theme/frontend/css/main.css">
</head>

<section class="min-h-screen flex w-full">
    <div class="max-lg:hidden w-full bg-cover bg-center bg-no-repeat" style="background-image: url(theme/frontend/images/bg-login.jpg)"></div>
    <div class="lg:max-w-[700px] w-full shrink-0 bg-white relative z-[1] layout-login">
        <div class="max-w-[564px] mx-auto px-4 mt-6 md:mt-12">
            <a href="" class="max-w-[150px] md:max-w-[200px] lg:max-w-[260px] mx-auto block mb-6">
                <img src="theme/frontend/images/logo.png" alt="">
            </a>
            <h1 class="text-color-v1 text-[2rem] font-bold text-center mb-6">Lấy lại mật khẩu</h1>
            <form action="">
                <div class="input-password mb-3 relative rounded-[5px] border border-[#aaa] flex items-center overflow-hidden show-password">
                    <input type="password" placeholder="Mật khẩu mới" class="w-full block py-3 px-4">
                    <i class="fa-regular fa-eye-slash w-14 text-center py-3 text-[1.25rem] h-full cursor-pointer btn-show-password"></i>
                </div>
                <div class="input-password mb-3 relative rounded-[5px] border border-[#aaa] flex items-center overflow-hidden show-password">
                    <input type="password" placeholder="Nhập lại mật khẩu" class="w-full block py-3 px-4">
                    <i class="fa-regular fa-eye-slash w-14 text-center py-3 text-[1.25rem] h-full cursor-pointer btn-show-password"></i>
                </div>
                <button type="submit" class="w-full block py-3 px-4 rounded-full bg-color-v2 text-white text-[1rem] font-bold border border-color-v2 hover:bg-white hover:text-color-v1 uppercase">
                    Xác nhận
                </button>
            </form>
        </div>
    </div>
</section>


<script src="theme/frontend/js/script.js" defer></script>

</body>

</html>