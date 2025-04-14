<footer class="bg-cover bg-center bg-no-repeat pt-10 font-inter pb-[var(--bottom-menu-sidebar-height)]" style="background-image: url('theme/frontend/images/bg-footer.jpg')">
    <div class="container">
        <div class="flex max-xl:flex-wrap justify-between -mx-4 gap-y-6">
            <div class="w-full sm:w-fit sm:max-w-[21.875rem] px-4">
                <a href="" class="max-w-[14.4375rem] block img__contain mb-8 max-sm:mx-auto">
                    <img src="theme/frontend/images/logo.png" alt="">
                </a>
                <div class="flex gap-2 mb-4">
                    <span class="w-6 shrink-0">
                        <?php include 'template/svgs/location.php' ?>
                    </span>
                    <span class="font-medium">
                        Địa chỉ: 123, đường Điện Biên Phủ, Quận 1, Tp. Hồ Chí Minh
                    </span>
                </div>
                <div class="flex gap-2 mb-4">
                    <span class="w-6 shrink-0">
                        <?php include 'template/svgs/email.php' ?>
                    </span>
                    <span class="font-medium">
                        Email: <a href="mailto:trituenhanban@gmail.com" class="hover:text-color-v2">trituenhanban@gmail.com</a>
                    </span>
                </div>
                <div class="flex gap-2 mb-4">
                    <span class="w-6 shrink-0">
                        <?php include 'template/svgs/call.php' ?>
                    </span>
                    <span class="font-medium">
                        Hotline: <a href="tel:+84 123 3431" class="hover:text-color-v2">+84 123 3431</a>
                    </span>
                </div>
            </div>
            <div class="w-1/2 px-4 sm:w-fit">
                <p class="text-[1.125rem] font-bold mb-4">Liên kết</p>
                <div class="menu-footer">
                    <ul>
                        <?php foreach (['Sách', 'Tài liệu', 'Khóa học', 'Tin tức', 'Liên hệ'] as $item) : ?>
                            <li>
                                <a href=""><?php echo $item ?></a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
            <div class="w-1/2 px-4 sm:w-fit">
                <p class="text-[1.125rem] font-bold mb-4">Chính sách</p>
                <div class="menu-footer">
                    <ul>
                        <?php foreach (['Chính sách bán hàng', 'Chính sách bảo mật', 'Chính sách mua hàng', 'Chính sách 4', 'Chính sách 5'] as $item) : ?>
                            <li>
                                <a href=""><?php echo $item ?></a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
            <div class="w-full xs:w-1/2 px-4 sm:w-fit">
                <p class="text-[1.125rem] font-bold mb-4">Hướng dẫn sử dụng</p>
                <div class="menu-footer">
                    <ul>
                        <?php foreach (['Hướng dẫn thanh toán', 'Hướng dẫn nạp tiền', 'Hướng dẫn rút tiền', 'Hướng dẫn 4', 'Hướng dẫn 5'] as $item) : ?>
                            <li>
                                <a href=""><?php echo $item ?></a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
            <div class="w-full xs:w-1/2 px-4 max-md:mx-0 max-xl:mx-auto xl:w-fit">
                <p class="text-[1.125rem] font-bold mb-4 max-md:text-start max-xl:text-center">Theo dõi chúng tôi</p>
                <a href="" class="flex gap-2 w-full group path-color-v2 hv_path-white mb-4" title="Youtube">
                    <span class="size-10 px-1.5 rounded-[5px] shadow-[0px_0px_10px_0px_rgba(0,0,0,0.11)] flex items-center justify-center shrink-0 bg-white text-[1.5rem] group-hover:bg-color-v2">
                        <?php include 'template/svgs/youtube.php' ?>
                    </span>
                    <span class="px-2 leading-10 bg-white rounded-[5px] w-full shadow-[0px_0px_10px_0px_rgba(0,0,0,0.11)] whitespace-nowrap group-hover:text-white group-hover:bg-color-v2 transition-all duration-300">
                        Xem kênh
                    </span>
                </a>
                <a href="" class="flex gap-2 w-full group path-color-v2 hv_path-white mb-4" title="Facebook">
                    <span class="size-10 px-1.5 rounded-[5px] shadow-[0px_0px_10px_0px_rgba(0,0,0,0.11)] flex items-center justify-center shrink-0 bg-white text-[1.5rem] group-hover:bg-color-v2">
                        <?php include 'template/svgs/facebook.php' ?>
                    </span>
                    <span class="px-2 leading-10 bg-white rounded-[5px] w-full shadow-[0px_0px_10px_0px_rgba(0,0,0,0.11)] whitespace-nowrap group-hover:text-white group-hover:bg-color-v2 transition-all duration-300">
                        Truy cập fanpage
                    </span>
                </a>
                <a href="" class="flex gap-2 w-full group path-color-v2 hv_path-white" title="Instagram">
                    <span class="size-10 px-1.5 rounded-[5px] shadow-[0px_0px_10px_0px_rgba(0,0,0,0.11)] flex items-center justify-center shrink-0 bg-white text-[1.5rem] group-hover:bg-color-v2">
                        <?php include 'template/svgs/instagram.php' ?>
                    </span>
                    <span class="px-2 leading-10 bg-white rounded-[5px] w-full shadow-[0px_0px_10px_0px_rgba(0,0,0,0.11)] whitespace-nowrap group-hover:text-white group-hover:bg-color-v2 transition-all duration-300">
                        Theo dõi chúng tôi
                    </span>
                </a>
            </div>
        </div>
        <p class="copy-right text-center pt-[8%] font-nunito text-[0.875rem] pb-4">
            Bản quyền thuộc về trituenhanban.com
        </p>
    </div>
</footer>

<a href="javascript:void(0)" title="Lên đầu trang" class="btn-to-top fixed z-30 w-10 lg:w-14 right-8 lg:right-6 bottom-20 md:bottom-10 hidden">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 56 56" fill="none">
        <path d="M40.2504 47.25C40.2504 47.7141 40.066 48.1593 39.7378 48.4874C39.4097 48.8156 38.9645 49 38.5004 49H17.5004C17.0363 49 16.5912 48.8156 16.263 48.4874C15.9348 48.1593 15.7504 47.7141 15.7504 47.25C15.7504 46.7859 15.9348 46.3408 16.263 46.0126C16.5912 45.6844 17.0363 45.5 17.5004 45.5H38.5004C38.9645 45.5 39.4097 45.6844 39.7378 46.0126C40.066 46.3408 40.2504 46.7859 40.2504 47.25ZM50.2385 25.0119L29.2385 4.01188C29.076 3.84917 28.883 3.72009 28.6705 3.63202C28.4581 3.54396 28.2304 3.49863 28.0004 3.49863C27.7704 3.49863 27.5427 3.54396 27.3303 3.63202C27.1178 3.72009 26.9248 3.84917 26.7623 4.01188L5.76228 25.0119C5.51726 25.2566 5.35036 25.5686 5.28273 25.9082C5.21509 26.2479 5.24975 26.5999 5.38231 26.9199C5.51488 27.2398 5.73939 27.5132 6.02743 27.7055C6.31547 27.8978 6.65408 28.0003 7.0004 28H15.7504V40.25C15.7504 40.7141 15.9348 41.1593 16.263 41.4874C16.5912 41.8156 17.0363 42 17.5004 42H38.5004C38.9645 42 39.4097 41.8156 39.7378 41.4874C40.066 41.1593 40.2504 40.7141 40.2504 40.25V28H49.0004C49.3467 28.0003 49.6853 27.8978 49.9734 27.7055C50.2614 27.5132 50.4859 27.2398 50.6185 26.9199C50.7511 26.5999 50.7857 26.2479 50.7181 25.9082C50.6504 25.5686 50.4835 25.2566 50.2385 25.0119Z" fill="#3D73B2" />
    </svg>
</a>

<div class="update-infomation fixed z-30 right-5 bottom-32">
    <div class="size-[3.75rem] lg:size-[4.375rem] relative notification-bell flex items-center justify-center">
        <span class="pulse-animation absolute rounded-full left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 w-full aspect-square bg-[rgba(61,115,178,.15)]"></span>
        <span class="pulse-animation absolute rounded-full left-1/2 top-1/2 w-4/5 aspect-square -translate-x-1/2 -translate-y-1/2 bg-[rgba(61,115,178,.15)]"></span>
        <span class="pulse-animation absolute rounded-full left-1/2 top-1/2 w-3/5 aspect-square -translate-x-1/2 -translate-y-1/2 bg-[rgba(61,115,178,.15)]"></span>
        <span class="w-11 shake-animation">
            <?php @include('template/svgs/notification_bell.php') ?>
        </span>
    </div>
</div>

<!-- SideBarNgang -->
<div class="fixed z-[99] sidebar-menu-bottom inset-x-0 bottom-0 bg-white md:hidden border-t border-color-v2 overflow-hidden">
    <div class="container py-3">
        <div class="flex gap-2 font-semibold">
            <a href="" class="flex-auto active flex flex-col items-center justify-center text-center text-[12px] text-color-v5 relative before:size-4 before:bg-color-v2 before:rounded-sm before:rotate-45 before:absolute before:left-1/2 before:-translate-x-1/2 before:-top-6 before:opacity-0 before:transition-all before:duration-300">
                <span class="size-6 mb-1">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none">
                        <path d="M9.99961 19V14H13.9996V19C13.9996 19.55 14.4496 20 14.9996 20H17.9996C18.5496 20 18.9996 19.55 18.9996 19V12H20.6996C21.1596 12 21.3796 11.43 21.0296 11.13L12.6696 3.6C12.2896 3.26 11.7096 3.26 11.3296 3.6L2.96961 11.13C2.62961 11.43 2.83961 12 3.29961 12H4.99961V19C4.99961 19.55 5.44961 20 5.99961 20H8.99961C9.54961 20 9.99961 19.55 9.99961 19Z" fill="#828282" />
                    </svg>
                </span>
                Trang chủ
            </a>
            <a href="javascript:void(0)" class="flex-auto flex flex-col items-center justify-center text-center text-[12px] text-color-v5 relative before:size-4 before:bg-color-v2 before:rounded-sm before:rotate-45 before:absolute before:left-1/2 before:-translate-x-1/2 before:-top-6 before:opacity-0 before:transition-all before:duration-300 btn-menu-category-type">
                <span class="size-6 mb-1">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none">
                        <path d="M4 18H20C20.55 18 21 17.55 21 17C21 16.45 20.55 16 20 16H4C3.45 16 3 16.45 3 17C3 17.55 3.45 18 4 18ZM4 13H20C20.55 13 21 12.55 21 12C21 11.45 20.55 11 20 11H4C3.45 11 3 11.45 3 12C3 12.55 3.45 13 4 13ZM3 7C3 7.55 3.45 8 4 8H20C20.55 8 21 7.55 21 7C21 6.45 20.55 6 20 6H4C3.45 6 3 6.45 3 7Z" fill="#828282" />
                    </svg>
                </span>
                Thể loại
            </a>
            <a href="" class="flex-auto flex flex-col items-center justify-center text-center text-[12px] text-color-v5 relative before:size-4 before:bg-color-v2 before:rounded-sm before:rotate-45 before:absolute before:left-1/2 before:-translate-x-1/2 before:-top-6 before:opacity-0 before:transition-all before:duration-300">
                <span class="size-6 mb-1">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none">
                        <path d="M6.00002 14.4V12H8.40002V14.4H6.00002ZM18 5.39281C17.9981 4.91667 17.8076 4.46068 17.4703 4.12467C17.1329 3.78866 16.6762 3.6 16.2 3.60001H4.10762C3.63023 3.60001 3.17239 3.78965 2.83482 4.12721C2.49726 4.46478 2.30762 4.92262 2.30762 5.40001V16.2C2.30762 16.9957 2.62369 17.7587 3.1863 18.3213C3.74891 18.8839 4.51197 19.2 5.30762 19.2H18.6924C19.4881 19.2 20.2511 18.8839 20.8137 18.3213C21.3763 17.7587 21.6924 16.9957 21.6924 16.2V9.00001C21.6924 8.52262 21.5028 8.06478 21.1652 7.72721C20.8276 7.38965 20.3698 7.20001 19.8924 7.20001H19.2V15.876C19.2 16.0351 19.1368 16.1877 19.0243 16.3003C18.9118 16.4128 18.7591 16.476 18.6 16.476C18.4409 16.476 18.2883 16.4128 18.1758 16.3003C18.0632 16.1877 18 16.0351 18 15.876V5.39281ZM4.80002 7.80001C4.80002 7.64088 4.86323 7.48826 4.97575 7.37574C5.08828 7.26322 5.24089 7.20001 5.40002 7.20001H15C15.1591 7.20001 15.3118 7.26322 15.4243 7.37574C15.5368 7.48826 15.6 7.64088 15.6 7.80001C15.6 7.95914 15.5368 8.11175 15.4243 8.22427C15.3118 8.33679 15.1591 8.40001 15 8.40001H5.40002C5.24089 8.40001 5.08828 8.33679 4.97575 8.22427C4.86323 8.11175 4.80002 7.95914 4.80002 7.80001ZM11.4 10.8H15C15.1591 10.8 15.3118 10.8632 15.4243 10.9757C15.5368 11.0883 15.6 11.2409 15.6 11.4C15.6 11.5591 15.5368 11.7117 15.4243 11.8243C15.3118 11.9368 15.1591 12 15 12H11.4C11.2409 12 11.0883 11.9368 10.9758 11.8243C10.8632 11.7117 10.8 11.5591 10.8 11.4C10.8 11.2409 10.8632 11.0883 10.9758 10.9757C11.0883 10.8632 11.2409 10.8 11.4 10.8ZM10.8 15C10.8 14.8409 10.8632 14.6883 10.9758 14.5757C11.0883 14.4632 11.2409 14.4 11.4 14.4H15C15.1591 14.4 15.3118 14.4632 15.4243 14.5757C15.5368 14.6883 15.6 14.8409 15.6 15C15.6 15.1591 15.5368 15.3117 15.4243 15.4243C15.3118 15.5368 15.1591 15.6 15 15.6H11.4C11.2409 15.6 11.0883 15.5368 10.9758 15.4243C10.8632 15.3117 10.8 15.1591 10.8 15ZM5.40002 10.8H9.00002C9.15915 10.8 9.31176 10.8632 9.42428 10.9757C9.5368 11.0883 9.60002 11.2409 9.60002 11.4V15C9.60002 15.1591 9.5368 15.3117 9.42428 15.4243C9.31176 15.5368 9.15915 15.6 9.00002 15.6H5.40002C5.24089 15.6 5.08828 15.5368 4.97575 15.4243C4.86323 15.3117 4.80002 15.1591 4.80002 15V11.4C4.80002 11.2409 4.86323 11.0883 4.97575 10.9757C5.08828 10.8632 5.24089 10.8 5.40002 10.8Z" fill="#828282" />
                    </svg>
                </span>
                Tin tức
            </a>
            <a href="" class="flex-auto flex flex-col items-center justify-center text-center text-[12px] text-color-v5 relative before:size-4 before:bg-color-v2 before:rounded-sm before:rotate-45 before:absolute before:left-1/2 before:-translate-x-1/2 before:-top-6 before:opacity-0 before:transition-all before:duration-300">
                <span class="size-6 mb-1">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none">
                        <path d="M12 22L11.75 19H11.5C9.13333 19 7.125 18.175 5.475 16.525C3.825 14.875 3 12.8667 3 10.5C3 8.13333 3.825 6.125 5.475 4.475C7.125 2.825 9.13333 2 11.5 2C12.6833 2 13.7877 2.22067 14.813 2.662C15.8383 3.10333 16.7383 3.71167 17.513 4.487C18.2877 5.26233 18.8957 6.16233 19.337 7.187C19.7783 8.21167 19.9993 9.316 20 10.5C20 11.75 19.796 12.95 19.388 14.1C18.98 15.25 18.4213 16.3167 17.712 17.3C17.0027 18.2833 16.161 19.175 15.187 19.975C14.213 20.775 13.1507 21.45 12 22ZM11.475 15.975C11.7583 15.975 12 15.875 12.2 15.675C12.4 15.475 12.5 15.2333 12.5 14.95C12.5 14.6667 12.4 14.425 12.2 14.225C12 14.025 11.7583 13.925 11.475 13.925C11.1917 13.925 10.95 14.025 10.75 14.225C10.55 14.425 10.45 14.6667 10.45 14.95C10.45 15.2333 10.55 15.475 10.75 15.675C10.95 15.875 11.1917 15.975 11.475 15.975ZM10.75 12.8H12.25C12.25 12.3 12.3 11.95 12.4 11.75C12.5 11.55 12.8167 11.1833 13.35 10.65C13.65 10.35 13.9 10.025 14.1 9.675C14.3 9.325 14.4 8.95 14.4 8.55C14.4 7.7 14.1127 7.06233 13.538 6.637C12.9633 6.21167 12.284 5.99933 11.5 6C10.7667 6 10.15 6.20433 9.65 6.613C9.15 7.02167 8.8 7.51733 8.6 8.1L10 8.65C10.0833 8.36667 10.2417 8.08767 10.475 7.813C10.7083 7.53833 11.05 7.40067 11.5 7.4C11.95 7.39933 12.2877 7.52433 12.513 7.775C12.7383 8.02567 12.8507 8.30067 12.85 8.6C12.85 8.88333 12.7667 9.13767 12.6 9.363C12.4333 9.58833 12.2333 9.81733 12 10.05C11.4167 10.55 11.0627 10.946 10.938 11.238C10.8133 11.53 10.7507 12.0507 10.75 12.8Z" fill="#828282" />
                    </svg>
                </span>
                Liên hệ
            </a>
            <a href="" class="flex-auto flex flex-col items-center justify-center text-center text-[12px] text-color-v5 relative before:size-4 before:bg-color-v2 before:rounded-sm before:rotate-45 before:absolute before:left-1/2 before:-translate-x-1/2 before:-top-6 before:opacity-0 before:transition-all before:duration-300">
                <span class="size-6 mb-1 c-img rounded-full overflow-hidden">
                    <img src="theme/frontend/images/image12.png" alt="">
                </span>
                Cá nhân
            </a>
        </div>
    </div>
</div>

<script src="theme/frontend/js/swiper-bundle.min.js" defer></script>
<script src="theme/frontend/js/fancybox.umd.js" defer></script>
<script src="theme/frontend/js/wow.min.js" defer></script>
<script src="theme/frontend/js/script.js" defer></script>

</body>

</html>