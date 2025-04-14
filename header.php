<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nhân bản</title>
    <link rel="stylesheet" href="theme/frontend/css/all.min.css">
    <link rel="stylesheet" href="theme/frontend/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="theme/frontend/css/animate.css">
    <link rel="stylesheet" href="theme/frontend/css/fancybox.min.css">
    <link rel="stylesheet" href="theme/frontend/css/output.css">
    <link rel="stylesheet" href="theme/frontend/css/main.css">
</head>

<body class="bg-[#F3F3F4]">
    <?php $menu = [
        [
            'name' => 'Khóa học',
            'icon' => 'theme/frontend/images/image4.png',
            'icon-css' => '../images/image4.png',
            'link' => '',
            'child' => [
                [
                    'name' => 'Đầu tư',
                    'link' => '',
                    'number_type' => 5
                ],
                [
                    'name' => 'Kỹ năng',
                    'link' => '',
                    'number_type' => 5
                ],
                [
                    'name' => 'Ngôn ngữ',
                    'link' => '',
                    'number_type' => 5
                ],
                [
                    'name' => 'Kinh doanh',
                    'link' => '',
                    'number_type' => 5
                ]
            ]
        ],
        [
            'name' => 'Tài liệu',
            'icon' => 'theme/frontend/images/image11.png',
            'icon-css' => '../images/image11.png',
            'link' => '',
            'child' => [
                [
                    'name' => 'Đầu tư',
                    'link' => '',
                    'number_type' => 5
                ],
                [
                    'name' => 'Kỹ năng',
                    'link' => '',
                    'number_type' => 5
                ],
                [
                    'name' => 'Ngôn ngữ',
                    'link' => '',
                    'number_type' => 5
                ],
                [
                    'name' => 'Kinh doanh',
                    'link' => '',
                    'number_type' => 5
                ]
            ]
        ],
        [
            'name' => 'Sách',
            'icon' => 'theme/frontend/images/image10.png',
            'icon-css' => '../images/image10.png',
            'link' => '',
            'child' => [
                [
                    'name' => 'Đầu tư',
                    'link' => '',
                    'number_type' => 5
                ],
                [
                    'name' => 'Kỹ năng',
                    'link' => '',
                    'number_type' => 5
                ],
                [
                    'name' => 'Ngôn ngữ',
                    'link' => '',
                    'number_type' => 5
                ],
                [
                    'name' => 'Kinh doanh',
                    'link' => '',
                    'number_type' => 5
                ]
            ]
        ]
    ];
    $login = true;
    $course_buy = false;
    ?>
    <div class="header-scroll-watcher"></div>
    <header class="bg-white relative z-[100]">
        <div class="header__top transition-all duration-300 ease-in-out">
            <div class="container py-2">
                <div class="flex items-center justify-between gap-4">
                    <div class="w-1/2 max-md:hidden">
                        <div class="header__top-menu">
                            <ul>
                                <li><a href="">Trang chủ</a></li>
                                <li><a href="">Tin tức</a></li>
                                <li><a href="">Liên hệ</a></li>
                            </ul>
                        </div>
                    </div>
                    <a href="" title="" class="w-[77px] md:w-[130px] lg::w-[161px] shrink-0 img__contain">
                        <img src="theme/frontend/images/logo.png" alt="">
                    </a>
                    <div class="md:w-1/2 flex items-center justify-end gap-3">
                        <a href="" class="py-1.5 px-6 rounded-full bg-[#D0595B] text-white border border-[#D0595B] hover:bg-white hover:text-[#D0595B]">
                            Nâng hạng <span class="max-lg:hidden">thành viên</span>
                        </a>
                        <?php if ($login): ?>
                            <a href="" class="hidden md:flex items-center gap-2 xl:py-1.5 xl:px-6 rounded-full xl:border xl:-color-v2 text-color-v2 font-semibold xl:hover:bg-color-v2 xl:hover:text-white" title="Đăng nhập/ Đăng kí">
                                <i class="fa-solid fa-arrow-up-from-bracket max-xl:text-[1.25rem]"></i>
                                <span class="max-xl:hidden">Tải lên</span>
                            </a>
                            <a href="" class="relative max-md:hidden">
                                <span class="size-12 c-img rounded-full overflow-hidden">
                                    <img src="theme/frontend/images/image12.png" alt="">
                                </span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 absolute -bottom-1 -right-1" viewBox="0 0 24 24" fill="none">
                                    <path d="M19.5 12C19.5 16.1421 16.1421 19.5 12 19.5C7.85786 19.5 4.5 16.1421 4.5 12C4.5 7.85786 7.85786 4.5 12 4.5C16.1421 4.5 19.5 7.85786 19.5 12Z" fill="#3977BC" stroke="white" />
                                    <path d="M9.5 12L11.394 13.894C11.4221 13.9221 11.4602 13.9379 11.5 13.9379C11.5398 13.9379 11.5779 13.9221 11.606 13.894L15.5 10" stroke="white" stroke-width="1.2" />
                                </svg>
                            </a>
                        <?php else: ?>
                            <a href="" class="hidden md:flex items-center gap-2 xl:py-1.5 xl:px-6 rounded-full xl:border xl:-color-v2 text-color-v2 xl:hover:bg-color-v2 xl:hover:text-white" title="Đăng nhập/ Đăng kí">
                                <i class="fa-solid fa-user max-xl:text-[1.25rem]"></i>
                                <span class="max-xl:hidden">Đăng nhập/ Đăng kí</span>
                            </a>
                        <?php endif; ?>
                        <span class="w-6 cursor-pointer relative">
                            <?php include "template/svgs/shopping_cart.php"; ?>
                            <span class="absolute -top-2 -right-2 bg-[#A52424] text-white rounded-full w-5 h-5 flex items-center justify-center text-xs">1</span>
                        </span>
                        <div class="relative">
                            <span class="w-6 block cursor-pointer" onclick="toggleClassActive('list-notification')">
                                <?php include "template/svgs/notification.php"; ?>
                            </span>
                            <div class="absolute overflow-hidden z-[1] top-[calc(100%+1rem)] right-0 w-[308px] bg-white font-nunito shadow-[0px_0px_10px_0px_rgba(0,0,0,0.25)] rounded-[5px] hidden-effect" data-active="list-notification">
                                <span class="block font-semibold text-black p-3 pt-4 border-b border-[#dadada]">Thông báo</span>
                                <div class="max-h-[385px] overflow-y-auto overflow-x-hidden custom-scrollbar-grey mr-1 notification-list">
                                    <?php for ($i = 0; $i < 10; $i++): ?>
                                        <div class="px-1 mx-2 py-2 border-b border-[#dadada] last:border-none relative <?php echo $i < 2 ? 'no-seen' : '' ?>">
                                            <p class="mb-1 text-black text-[0.875rem]">
                                                <span class="text-color-v2">Nguyễn Văn A</span> đã mua sách Tiểu thuyết <a href="" class="font-bold text-color-v2 underline hover:text-color-v3">Nàng thơ</a>
                                            </p>
                                            <span class="italic text-[0.75rem] text-[#B5B5B5]">15:00 - 26/05/2024</span>
                                        </div>
                                    <?php endfor ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header__bottom bg-[#D0595B] md:text-white relative">
            <div class="container flex items-center justify-between max-md:py-3">
                <!-- Start menu desktop -->
                <div class="category_block transition-all duration-300 md:w-1/2 md:flex md:gap-2 md:items-center relative max-md:fixed max-md:top-[var(--header-height)] max-md:h-[calc(100dvh-var(--header-height)-var(--bottom-menu-sidebar-height)-0.5px)] max-md:left-0 w-full max-md:bg-white max-md:z-[99]">
                    <button class="hidden md:flex items-center gap-1 p-2 bg-white/15 btn-menu-category">
                        <i class="fa-solid fa-bars"></i>
                        Thể loại
                    </button>
                    <div class="menu__category-list max-md:container">
                        <ul class="relative max-sm:-mx-4 max-md:flex md:overflow-hidden md:rounded-[5px] max-md:overflow-x-auto">
                            <?php foreach ($menu as $key => $item) : ?>
                                <li class="max-md:flex-auto <?php echo $key == 0 ? 'active' : '' ?>" data-menu-type="menu-type-<?php echo $key ?>">
                                    <a href="javascript:void(0)" class="title-image bg-white p-2 w-full max-md:justify-center hover:bg-color-v2 hover:text-white" style="--data-course: url('<?php echo $item['icon-css'] ?>')">
                                        <?php echo $item['name'] ?>
                                    </a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                        <?php foreach ($menu as $key => $item) : ?>
                            <div class="menu-item md:absolute md:top-0 left-0 md:left-[calc(100%+6px)] md:shadow-[0_6px_20px_0_rgba(0,0,0,.3)] md:p-4 bg-white md:w-[37.5rem] lg:w-[50rem] rounded-[5px] transition-all duration-300 max-md:hidden md:invisible md:opacity-0 md:translate-y-2 <?php echo $key == 0 ? 'active' : '' ?>" id="menu-type-<?php echo $key ?>">
                                <div class="md:flex gap-4 md:size-full overflow-y-auto max-h-[calc(100dvh-var(--header-height)-var(--bottom-menu-sidebar-height)-34.5px)] md:max-h-[411px] custom-scrollbar-grey">
                                    <div class="w-full max-md:my-4 md:w-3/5 lg:w-2/3 flex flex-wrap gap-y-2 md:gap-y-4 md:-mx-2 text-[#393939]">
                                        <?php foreach ($item['child'] as $key => $child) : ?>
                                            <div class="w-full md:w-1/3 md:px-2">
                                                <a href="" class="font-semibold mb-1  md:mb-2 before:size-[5px] before:rounded-full before:bg-color-v2 flex items-center gap-2 hover:text-color-v2"><?php echo $item['name'] ?></a>
                                                <ul class="flex md:flex-col max-md:overflow-x-auto custom-scrollbar-grey-horizontal">
                                                    <?php for ($j = 0; $j < $child['number_type']; $j++) : ?>
                                                        <li><a href="" class="block text-[0.875rem] md:mb-2 max-md:mr-4 hover:text-color-v2 hover:underline underline-offset-2 max-md:whitespace-nowrap"><?php echo $child['name'] ?> <?php echo $j ?></a></li>
                                                    <?php endfor; ?>
                                                </ul>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                    <div class="w-full md:w-2/5 lg:w-1/3 max-md:overflow-y-auto custom-scrollbar-grey-horizontal max-md:flex max-md:mb-4">
                                        <?php for ($i = 0; $i < 8; $i++) : ?>
                                            <div class="flex max-md:w-[215px] shrink-0 gap-2 md:mb-4 last:mb-0">
                                                <a href="" class="w-[59px] md:w-[78px] shrink-0 shadow-[2px_4px_3px_0_rgba(0,0,0,.6)] rounded-[5px] overflow-hidden c-img">
                                                    <img src="theme/frontend/images/image3.png" alt="">
                                                </a>
                                                <div class="space-y-1.5">
                                                    <a href="" class="line-clamp-2 font-semibold text-black hover:text-color-v2 text-[0.875rem]">
                                                        Cosmetic and clinical applications of botox and dermal fillers
                                                    </a>
                                                    <span class="block text-[0.75rem] text-color-v5">
                                                        Bởi: Nguyễn Quỳnh Trang
                                                    </span>
                                                    <div class="flex items-center gap-2">
                                                        <span class="text-[0.625rem] line-through text-color-v5">300.000 đ</span>
                                                        <span class="text-[#E03535] font-semibold text-[0.875rem]">
                                                            300.000 đ
                                                        </span>
                                                    </div>
                                                    <div class="flex flex-wrap gap-2">

                                                    </div>
                                                </div>
                                            </div>
                                        <?php endfor; ?>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <a href="tel:+842344123456" class="hidden xl:flex items-center gap-1 p-2 hv_path-color-v2 hover:text-color-v2">
                        <span class="w-6 path-white ">
                            <?php include "template/svgs/call.php"; ?>
                        </span>
                        Hotline: +84 2344 123 456
                    </a>
                </div>
                <div class="w-[450px] shrink-0 header__bottom-menu max-lg:hidden">
                    <ul>
                        <?php foreach ($menu as $item) : ?>
                            <li>
                                <a href="<?php echo $item['link'] ?>">
                                    <img src="<?php echo $item['icon'] ?>" alt="">
                                    <?php echo $item['name'] ?>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <div class="w-1/2 hidden md:flex justify-end items-center gap-2">
                    <span class="w-9 p-1 cursor-pointer hv_stroke-color-v2 btn-modal-search">
                        <?php include "template/svgs/search.php"; ?>
                    </span>
                    <a href="" title="Youtube" class="w-9 p-1 hv_path-color-v2">
                        <?php include "template/svgs/youtube.php"; ?>
                    </a>
                    <a href="" title="" class="w-9 p-1 hv_path-color-v2">
                        <?php include "template/svgs/instagram.php"; ?>
                    </a>
                    <a href="" title="Facebook" class="w-9 p-1 hv_path-color-v2">
                        <?php include "template/svgs/facebook.php"; ?>
                    </a>
                    <a href="tel:+842344123456" title="Facebook" class="w-9 p-1 path-white hv_path-color-v2 xl:hidden">
                        <?php include "template/svgs/call.php"; ?>
                    </a>
                </div>
                <!-- End menu desktop -->

                <!-- Start menu moblie -->
                <form action="" class="flex-auto p-2 bg-white rounded-[5px] flex md:hidden items-center">
                    <i class="fa-solid fa-magnifying-glass mr-1 text-black/30"></i>
                    <input type="text" placeholder="Tìm kiếm" class="w-full">
                </form>
                <span class="w-7 shrink-0 cursor-pointer ml-2.5 btn-menu-mobile md:hidden" onclick="toggleClassActive('menu-mobile'), toggleClassScroll()">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 25" fill="none">
                        <path d="M20 12.5H10M20 5.5H4M20 19.5H4" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </span>
                <div class="menu-mobile bg-white border-t border-color-v2 absolute flex md:hidden flex-col top-0 left-0 w-full h-[calc(100dvh-var(--header-top-height))] z-[100] hidden-effect" data-active="menu-mobile">
                    <div class="container py-4 text-[1.13rem] font-semibold flex flex-col">
                        <div class="flex items-center justify-between mb-6">
                            <span class="text-color-v1">Menu</span>
                            <span class="cursor-pointer p-2" onclick="toggleClassActive('menu-mobile'), toggleClassScroll()">
                                <i class="fa-solid fa-xmark"></i>
                            </span>
                        </div>
                        <ul>
                            <li><a href="">Trang chủ</a></li>
                            <?php foreach ($menu as $item) : ?>
                                <li>
                                    <a href="<?php echo $item['link'] ?>">
                                        <img src="<?php echo $item['icon'] ?>" alt="">
                                        <?php echo $item['name'] ?>
                                    </a>
                                </li>
                            <?php endforeach; ?>
                            <li><a href="">Tin tức</a></li>
                            <li><a href="">Liên hệ</a></li>
                        </ul>
                    </div>
                    <div class="mt-auto bg-[#D0595B]">
                        <div class="container flex justify-between py-4">
                            <a href="tel:+842344123456" class="flex items-center gap-1 text-[1.13rem] text-white whitespace-nowrap">
                                <span class="w-6 path-white ">
                                    <?php include "template/svgs/call.php"; ?>
                                </span>
                                Hotline: +84 2344 123 456
                            </a>
                            <div class="w-1/2 flex justify-end items-center">
                                <a href="" title="Youtube" class="w-6 mr-4">
                                    <?php include "template/svgs/youtube.php"; ?>
                                </a>
                                <a href="" title="" class="w-6 mr-4">
                                    <?php include "template/svgs/instagram.php"; ?>
                                </a>
                                <a href="" title="Facebook" class="w-6">
                                    <?php include "template/svgs/facebook.php"; ?>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End menu mobile -->
            </div>
        </div>
    </header>
    <div class="bg-overlay fixed inset-0 z-[5] bg-black/35 invisible opacity-0 pointer-events-none transition-all duration-300"></div>

    <!-- Modal search -->
    <div class="modal-search fixed inset-0 z-[9999]">
        <div class="flex flex-col justify-between items-center size-full bg-black/65">
            <div class="btn-modal-search w-full text-end p-6 cursor-pointer">
                <i class="fa-solid fa-xmark text-3xl text-white"></i>
            </div>
            <div class="px-10 max-w-[40rem] w-full">
                <form action="https://eyebank.vn" method="GET" name="searchform" class="rounded-md border-b border-white text-white flex w-full">
                    <input type="text" placeholder="Search" name="s" class="bg-transparent grow p-3 focus:bg-transparent placeholder-white">
                    <button type="submit" class="p-3">
                        <i class="fa-solid fa-magnifying-glass text-xl"></i>
                    </button>
                </form>
            </div>
            <span></span>
        </div>
    </div>