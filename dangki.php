<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng kí</title>
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
            <h1 class="text-color-v1 text-[2rem] font-bold text-center mb-6">Đăng kí</h1>
            <form action="" class="mb-4">
                <input type="email" placeholder="Email" class="w-full block py-3 px-4 rounded-[5px] border border-[#aaa] mb-3">
                <input type="tel" placeholder="Số điện thoại" class="w-full block py-3 px-4 rounded-[5px] border border-[#aaa] mb-3">
                <div class="input-password mb-3 relative rounded-[5px] border border-[#aaa] flex items-center overflow-hidden show-password">
                    <input type="password" placeholder="Mật khẩu" class="w-full block py-3 px-4">
                    <i class="fa-regular fa-eye-slash w-14 text-center py-3 text-[1.25rem] h-full cursor-pointer btn-show-password"></i>
                </div>
                <div class="input-password mb-6 relative rounded-[5px] border border-[#aaa] flex items-center overflow-hidden show-password">
                    <input type="password" placeholder="Nhập lại mật khẩu" class="w-full block py-3 px-4">
                    <i class="fa-regular fa-eye-slash w-14 text-center py-3 text-[1.25rem] h-full cursor-pointer btn-show-password"></i>
                </div>
                <span class="text-[#828282] mb-2 block">
                    Loại tài khoản:
                </span>
                <div class="flex flex-wrap -mx-2 mb-6 gap-y-2">
                    <div class="w-full md:w-1/2 px-2">
                        <label for="account-type-1" class="p-4 md:p-6 transition-all duration-300 account-type bg-[#F6F6F6] border border-[#D6D6D6] rounded-[5px] text-[#828282] block w-full cursor-pointer">
                            <input type="radio" name="account-type" id="account-type-1" checked>
                            Dành cho cá nhân
                        </label>
                    </div>
                    <div class="w-full md:w-1/2 px-2">
                        <label for="account-type-2" class="p-4 md:p-6 transition-all duration-300 account-type bg-[#F6F6F6] border border-[#D6D6D6] rounded-[5px] text-[#828282] block w-full cursor-pointer">
                            <input type="radio" name="account-type" id="account-type-2">
                            Dành cho doanh nghiệp
                        </label>
                    </div>
                </div>
                <label for="checked-clause" class="block mb-4 text-[0.875rem] text-[#616161] cursor-pointer whitespace-nowrap *:break-all">
                    <input type="checkbox" name="checked-clause" class="mr-1 translate-y-0.5" id="checked-clause">
                    Đồng ý với các <a href="" class="text-color-v2 hover:underline inline-block"> điều khoản sử dụng </a> và <a href="" class="text-color-v2 hover:underline inline-block"> chính sách bảo mật </a>
                </label>
                <button type="submit" class="w-full block py-3 px-4 rounded-full bg-color-v2 text-white text-[1rem] font-bold border border-color-v2 hover:bg-white hover:text-color-v1 uppercase">
                    Đăng kí
                </button>
            </form>
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