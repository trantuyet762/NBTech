<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
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
            <h1 class="text-color-v1 text-[2rem] font-bold text-center mb-6">Đăng nhập</h1>
            <form action="" class="mb-4">
                <input type="text" placeholder="Email/Số điện thoại" class="w-full block py-3 px-4 rounded-[5px] border border-[#aaa] mb-3">
                <div class="input-password mb-3 relative rounded-[5px] border border-[#aaa] flex items-center overflow-hidden show-password">
                    <input type="password" placeholder="Mật khẩu" class="w-full block py-3 px-4">
                    <i class="fa-regular fa-eye-slash w-14 text-center py-3 text-[1.25rem] h-full cursor-pointer btn-show-password"></i>
                </div>
                <span class="text-[#828282] lg:text-[0.875rem] hover:text-color-v1 ml-auto hover:underline block w-fit mb-4 cursor-pointer" onclick="showBlock()">Quên mật khẩu ?</span>
                <button type="submit" class="w-full block py-3 px-4 rounded-full bg-color-v2 text-white text-[1rem] font-bold border border-color-v2 hover:bg-white hover:text-color-v1 uppercase">
                    Đăng nhập
                </button>
            </form>
            <div class="p-4 rounded-[5px] bg-[rgba(61,115,178,.05)] mb-6 recover-password-email hidden">
                <p class="text-center text-[#828282] text-[0.875rem] mb-4">Vui lòng nhập Email của bạn để lấy lại mật khẩu!</p>
                <form action="" class="flex">
                    <input type="email" name="" class="w-full placeholder:text-[#828282] rounded-l-[5px] border border-[#aaa] border-r-0 px-2" placeholder="Email của bạn" id="">
                    <button type="submit" class="py-2 px-4 whitespace-nowrap text-color-v2 rounded-r-[5px] border border-color-v2 shrink-0">Lấy lại mật khẩu</button>
                </form>
            </div>
            <span class="block text-center text-[#828282] lg:text-[0.875rem] mb-4">or</span>
            <div class="flex gap-4 justify-center mb-6">
                <a href="" title="facebook" class="icon-fb size-8 rounded-full bg-cover bg-center bg-no-repeat"></a>
                <a href="" title="google" class="icon-gg size-8 rounded-full bg-cover bg-center bg-no-repeat"></a>
            </div>
            <span class="block text-center text-[#303030] lg:text-[0.875rem]">
                Bạn chưa có tài khoản? <a href="" class="text-color-v2 font-semibold hover:underline">Đăng kí</a>
            </span>
        </div>
    </div>
</section>


<script src="theme/frontend/js/script.js" defer></script>

</body>

</html>