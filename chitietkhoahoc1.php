<?php include "header.php"; ?>

<section class="bg-cover bg-center bg-no-repeat" style="background-image: url(theme/frontend/images/bg-course.png)">
    <?php @include('template/breadcrumb.php') ?>
    <div class="container">
        <div class="lg:w-1/2 space-y-4 pb-8">
            <h1 class="text-white text-[1.5rem] font-semibold">
                Khóa Đào Tạo - C&B Nghiệp Vụ Tiền Lương Và Bảo Hiểm Xã Hội Gen 121
            </h1>
            <div class="flex items-center flex-wrap gap-y-2 gap-x-6 text-[#949494]">
                <div class="flex gap-x-2 pr-6 relative after:right-0 after:w-[1px] after:h-4 after:bg-color-v5 after:absolute items-center">
                    <span class="flex gap-x-2 items-center">
                        5.0
                        <span class="flex">
                            <?php for ($i = 0; $i < 5; $i++) { ?>
                                <span class="w-5 mr-1 last:mr-0">
                                    <?php @include("template/svgs/iconstar.php") ?>
                                </span>
                            <?php } ?>
                        </span>
                        <span class="">(123 đánh giá)</span>
                </div>
                <span class="pr-6 relative after:right-0 after:w-[1px] after:h-4 after:bg-color-v5 after:absolute icon news-detail-date">26/05/2024</span>
                <span class="pr-6 icon icon-eye">324 người xem</span>
            </div>
            <div class="flex flex-wrap gap-2">
                <?php for ($i = 0; $i < 3; $i++) { ?>
                    <a href="" title=""
                        class="block py-2 px-3  bg-[#FFFFFF33] rounded-[3.625rem] text-[0.875rem] text-white transition-all duration-200  hover:bg-color-v2  ">
                        Kinh doanh
                    </a>
                <?php } ?>
            </div>
            <div class="flex gap-x-4 items-center">
                <p class="flex items-center gap-x-1 text-white text-[0.875rem]">Nguyễn Quỳnh Trang
                    <span class="w-5">
                        <?php @include("template/svgs/usercheck.php") ?>
                    </span>
                </p>
                <button
                    class="py-1 px-2 text-[0.875rem] flex gap-x-1 items-center justify-center border-[0.5px] bg-[#FFFFFF33] whitespace-nowrap border-white rounded-[2.375rem] text-white">
                    <span>Theo dõi</span>
                    <span class="w-4">
                        <?php @include("template/svgs/iconfollow2.php") ?>
                    </span>
                </button>
            </div>
        </div>
    </div>
</section>

<section class="mt-6 mb-16">
    <div class="container">
        <div class="flex flex-wrap-reverse -mx-4">
            <div class="w-full xl:w-[calc(100%-494px)] space-y-6 px-4">
                <div class="p-4 rounded-[0.625rem] bg-white module-tabs shadow-[0_0_15px_rgba(0,0,0,0.25)]">
                    <ul class="flex gap-x-8 tab-custom-border relative text-[1.125rem] font-semibold text-color-v5 border-b border-[#ddd] mb-6">
                        <li class="tab-link pb-2 transition-all cursor-pointer duration-300 whitespace-nowrap active"
                            data-electronic="tab-course-intro">
                            Giới thiệu
                        </li>
                        <li class="tab-link pb-2 transition-all cursor-pointer duration-300 whitespace-nowrap"
                            data-electronic="tab-course-program">
                            Chương trình khóa học
                        </li>
                    </ul>
                    <div class="tab-content active" id="tab-course-intro">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque laudantium velit inventore nostrum minus eum optio adipisci facilis dolores. Quis laudantium explicabo soluta, nisi veniam modi ipsa debitis mollitia tempora!
                    </div>
                    <div class="tab-content list-chapter-course" id="tab-course-program">
                        <?php for ($k = 0; $k < 3; $k++) { ?>
                            <div class="mb-4 last:mb-0 text-[#303030] item">
                                <button class="font-nunito font-semibold">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 mr-2 inline-block -translate-y-0.5" viewBox="0 0 24 24" fill="none">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M7.34483 4.01717C10.4387 3.67462 13.561 3.67462 16.6548 4.01717C18.3678 4.20917 19.7498 5.55817 19.9508 7.27717C20.3175 10.4152 20.3175 13.5852 19.9508 16.7232C19.7498 18.4422 18.3678 19.7912 16.6548 19.9832C13.561 20.3257 10.4387 20.3257 7.34483 19.9832C5.63183 19.7912 4.24983 18.4422 4.04883 16.7232C3.68229 13.5855 3.68229 10.4158 4.04883 7.27817C4.1505 6.44304 4.53121 5.66671 5.12927 5.07501C5.72732 4.48331 6.50767 4.11091 7.34383 4.01817M11.9998 7.00717C12.1987 7.00717 12.3895 7.08619 12.5302 7.22684C12.6708 7.36749 12.7498 7.55826 12.7498 7.75717V11.2502H16.2428C16.4417 11.2502 16.6325 11.3292 16.7732 11.4698C16.9138 11.6105 16.9928 11.8013 16.9928 12.0002C16.9928 12.1991 16.9138 12.3898 16.7732 12.5305C16.6325 12.6712 16.4417 12.7502 16.2428 12.7502H12.7498V16.2432C12.7498 16.4421 12.6708 16.6328 12.5302 16.7735C12.3895 16.9142 12.1987 16.9932 11.9998 16.9932C11.8009 16.9932 11.6102 16.9142 11.4695 16.7735C11.3289 16.6328 11.2498 16.4421 11.2498 16.2432V12.7502H7.75683C7.55792 12.7502 7.36716 12.6712 7.2265 12.5305C7.08585 12.3898 7.00683 12.1991 7.00683 12.0002C7.00683 11.8013 7.08585 11.6105 7.2265 11.4698C7.36716 11.3292 7.55792 11.2502 7.75683 11.2502H11.2498V7.75717C11.2498 7.55826 11.3289 7.36749 11.4695 7.22684C11.6102 7.08619 11.8009 7.00717 11.9998 7.00717Z" fill="#3D73B2" />
                                    </svg>
                                    Chương I: Dẫn nhập
                                </button>
                                <div class="content" style="display: none;">
                                    <?php for ($i = 0; $i < 3; $i++) { ?>
                                        <div class="flex mt-2">
                                            <a href="" class="c-img w-[110px] sm:w-[149px] shrink-0 aspect-[8/5] rounded-[5px] overflow-hidden before:inset-0 before:bg-black/50 before:absolute mr-2">
                                                <img src="theme/frontend/images/image30.png" alt="">
                                                <span class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 z-[1] size-9 flex items-center justify-center bg-white text-color-v2 rounded-full">
                                                    <i class="fa-solid fa-play translate-x-0.5"></i>
                                                </span>
                                            </a>
                                            <div>
                                                <a href="" class="line-clamp-1 font-semibold hover:text-color-v3 mb-2">
                                                    Tổng quan về khóa học
                                                </a>
                                                <p class="line-clamp-2 md:line-clamp-3 max-md:hidden">
                                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Inventore, officia rem, impedit ab sed rerum nisi corrupti deleniti dolores fugit molestias maiores molestiae quo aspernatur magnam laudantium repellat maxime officiis.
                                                </p>
                                                <?php if ($course_buy) : ?>
                                                    <span class="font-semibold whitespace-nowrap sm:hidden">
                                                        12:00
                                                    </span>
                                                <?php else : ?>
                                                    <?php if ($i == 0) : ?>
                                                        <span class="text-[#3A8518] font-semibold whitespace-nowrap sm:hidden">
                                                            12:00 Free
                                                        </span>
                                                    <?php else : ?>
                                                        <span class="text-[#303030] font-semibold whitespace-nowrap sm:hidden">
                                                            12:00
                                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 ml-1 inline-block -translate-y-1" viewBox="0 0 24 24" fill="none">
                                                                <path d="M6.616 21C6.168 21 5.78667 20.8427 5.472 20.528C5.15733 20.2133 5 19.8323 5 19.385V10.615C5 10.1683 5.15733 9.78733 5.472 9.472C5.78667 9.15733 6.168 9 6.616 9H8V7C8 5.886 8.38833 4.941 9.165 4.165C9.941 3.38833 10.886 3 12 3C13.114 3 14.0593 3.38833 14.836 4.165C15.6127 4.94167 16.0007 5.88667 16 7V9H17.385C17.8317 9 18.2127 9.15733 18.528 9.472C18.8427 9.78667 19 10.168 19 10.616V19.385C19 19.8317 18.8427 20.2127 18.528 20.528C18.2133 20.8427 17.8323 21 17.385 21H6.616ZM6.616 20H17.385C17.5643 20 17.7117 19.9423 17.827 19.827C17.9423 19.7117 18 19.5643 18 19.385V10.615C18 10.4357 17.9423 10.2883 17.827 10.173C17.7117 10.0577 17.5643 10 17.385 10H6.615C6.43567 10 6.28833 10.0577 6.173 10.173C6.05767 10.2883 6 10.436 6 10.616V19.385C6 19.5643 6.05767 19.7117 6.173 19.827C6.28833 19.9423 6.436 20 6.616 20ZM12 16.5C12.422 16.5 12.7773 16.3553 13.066 16.066C13.3553 15.7773 13.5 15.422 13.5 15C13.5 14.578 13.3553 14.2227 13.066 13.934C12.7767 13.6453 12.4213 13.5007 12 13.5C11.5787 13.4993 11.2233 13.644 10.934 13.934C10.6447 14.2227 10.5 14.578 10.5 15C10.5 15.422 10.6447 15.7773 10.934 16.066C11.2227 16.3553 11.578 16.5 12 16.5ZM9 9H15V7C15 6.16667 14.7083 5.45833 14.125 4.875C13.5417 4.29167 12.8333 4 12 4C11.1667 4 10.4583 4.29167 9.875 4.875C9.29167 5.45833 9 6.16667 9 7V9Z" fill="#3D73B2" />
                                                            </svg>
                                                        </span>
                                                    <?php endif; ?>
                                                <?php endif; ?>
                                            </div>
                                            <?php if ($course_buy) : ?>
                                                <span class="font-semibold whitespace-nowrap self-center max-sm:hidden ml-5 lg:ml-10">
                                                    12:00
                                                </span>
                                            <?php else : ?>
                                                <?php if ($i == 0) : ?>
                                                    <span class="text-[#3A8518] font-semibold whitespace-nowrap self-center max-sm:hidden ml-5 lg:ml-10">
                                                        12:00 Free
                                                    </span>
                                                <?php else : ?>
                                                    <span class="text-[#303030] font-semibold whitespace-nowrap self-center max-sm:hidden ml-5 lg:ml-10">
                                                        12:00
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 ml-1 inline-block -translate-y-1" viewBox="0 0 24 24" fill="none">
                                                            <path d="M6.616 21C6.168 21 5.78667 20.8427 5.472 20.528C5.15733 20.2133 5 19.8323 5 19.385V10.615C5 10.1683 5.15733 9.78733 5.472 9.472C5.78667 9.15733 6.168 9 6.616 9H8V7C8 5.886 8.38833 4.941 9.165 4.165C9.941 3.38833 10.886 3 12 3C13.114 3 14.0593 3.38833 14.836 4.165C15.6127 4.94167 16.0007 5.88667 16 7V9H17.385C17.8317 9 18.2127 9.15733 18.528 9.472C18.8427 9.78667 19 10.168 19 10.616V19.385C19 19.8317 18.8427 20.2127 18.528 20.528C18.2133 20.8427 17.8323 21 17.385 21H6.616ZM6.616 20H17.385C17.5643 20 17.7117 19.9423 17.827 19.827C17.9423 19.7117 18 19.5643 18 19.385V10.615C18 10.4357 17.9423 10.2883 17.827 10.173C17.7117 10.0577 17.5643 10 17.385 10H6.615C6.43567 10 6.28833 10.0577 6.173 10.173C6.05767 10.2883 6 10.436 6 10.616V19.385C6 19.5643 6.05767 19.7117 6.173 19.827C6.28833 19.9423 6.436 20 6.616 20ZM12 16.5C12.422 16.5 12.7773 16.3553 13.066 16.066C13.3553 15.7773 13.5 15.422 13.5 15C13.5 14.578 13.3553 14.2227 13.066 13.934C12.7767 13.6453 12.4213 13.5007 12 13.5C11.5787 13.4993 11.2233 13.644 10.934 13.934C10.6447 14.2227 10.5 14.578 10.5 15C10.5 15.422 10.6447 15.7773 10.934 16.066C11.2227 16.3553 11.578 16.5 12 16.5ZM9 9H15V7C15 6.16667 14.7083 5.45833 14.125 4.875C13.5417 4.29167 12.8333 4 12 4C11.1667 4 10.4583 4.29167 9.875 4.875C9.29167 5.45833 9 6.16667 9 7V9Z" fill="#3D73B2" />
                                                        </svg>
                                                    </span>
                                                <?php endif; ?>
                                            <?php endif; ?>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
                <div class="bg-white p-4 md:px-8 md:py-6 rounded-[0.625rem] shadow-[0_0_15px_rgba(0,0,0,0.25)]">
                    <?php @include "template/comment/rate.php"; ?>
                </div>
                <div class="bg-white px-4 py-6 rounded-[0.625rem] shadow-[0_0_15px_rgba(0,0,0,0.25)]">
                    <?php @include "template/comment/send_form.php"; ?>
                    <?php @include "template/comment/list_comments.php"; ?>
                </div>
            </div>
            <div class="xl:-mt-[16rem] px-4 w-full xl:w-[494px] max-xl:mb-8">
                <div class="sticky top-[calc(var(--header-height)+1rem)] space-y-6">
                    <div class="space-y-4 p-4 bg-white rounded-[0.625rem] drop-shadow-[0_0_15px_rgba(0,0,0,0.25)]">
                        <a href="" data-fancybox="video" class="c-img pt-[62%] rounded-[5px] overflow-hidden before:inset-0 before:bg-black/50 before:absolute">
                            <img src="theme/frontend/images/image30.png" alt="">
                            <span class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 z-[1]">
                                <span class="size-20 text-[1.5rem] mx-auto flex items-center justify-center bg-white text-color-v2 rounded-full mb-4">
                                    <i class="fa-solid fa-play translate-x-0.5"></i>
                                </span>
                                <strong class="text-[1.125rem] text-white whitespace-nowrap">Xem trailer khóa học này</strong>
                            </span>
                        </a>
                        <div class="flex items-center">
                            <p class="text-[2rem] mr-3 text-[#e03535] font-bold flex items-center leading-none">
                                <span class="underline text-[1rem] mr-1 pb-[0.1875rem]">đ</span> 250.000
                            </p>
                            <p class="text-[1.125rem] mr-3 text-color-v5 flex items-center">
                                <span class="underline text-[0.75rem] mr-1 pb-[0.1875rem]">đ</span>
                                <span class="line-through">250.000</span>
                            </p>
                            <span class="py-[0.125rem] px-[0.375rem] bg-[#EFC22E] rounded-[5px] text-center  font-semibold text-[0.75rem]">
                                -68%
                            </span>
                        </div>
                        <?php if ($course_buy) : ?>
                            <a href="" title="VÀO HỌC NGAY" class="block bg-color-v6 w-full px-4 py-3 text-center rounded-[5px] text-white text-[1.125rem] font-semibold font-nunito border  border-color-v6 hover:bg-white hover:text-color-v6">
                                VÀO HỌC NGAY
                            </a>
                        <?php else : ?>
                            <a href="" title="Mua lẻ" class="block bg-color-v2 w-full px-4 py-3 text-center rounded-[5px] text-white text-[1.125rem] font-semibold font-nunito border  border-color-v2 hover:bg-white hover:text-color-v2">
                                Mua lẻ
                            </a>
                            <button class="cursor-pointer w-full border border-color-v2 px-4 py-3 text-center rounded-[5px] text-color-v2 text-[1.125rem] font-semibold font-nunito hover:text-white hover:bg-color-v2">
                                Thêm vào giỏ hàng
                            </button>
                        <?php endif; ?>
                        <span class="text-[1.125rem] block font-semibold mb-3">Khóa học này bao gồm:</span>
                        <div class="flex flex-wrap font-semibold -mx-2 -mb-2">
                            <?php foreach (['20 giờ video theo yêu cầu', 'Hỗ trợ 24/7', 'Truy cập di động & website', 'Tài liệu đi kèm'] as $item) { ?>
                                <span class="icon icon-star-course flex-auto px-2 mb-4">
                                    <?php echo $item; ?>
                                </span>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="p-4 bg-white rounded-[10px] shadow-[0_0_15px_rgba(0,0,0,0.25)] text-black">
                        <div class="flex items-center pb-4 mb-4 border-b-[0.5px] border-b-[#d1d1d1] ">
                            <div class="w-[83px] aspect-square rounded-[5px] mr-3">
                                <img src="theme/frontend/images/image33.png" alt="">
                            </div>
                            <div>
                                <span class="block mb-3">Giảng viên: <strong class="font-semibold">Nguyễn Thanh Nam</strong></span>
                                <span class="block">Chức danh: <strong class="font-semibold">Thạc sĩ</strong></span>
                            </div>
                        </div>
                        <span class="font-semibold block mb-2">Tóm tắt</span>
                        <div class="s-content">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores hic nobis consectetur qui debitis. Nobis tenetur alias amet eligendi veritatis. Earum quia eum praesentium at minus deleniti, assumenda provident ipsam.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include "footer.php" ?>