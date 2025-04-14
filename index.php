<?php include "header.php"; ?>

<div class="relative max-w-[1920px] mx-auto mb-6 before:left-0 before:w-full before:absolute before:-top-10 before:pt-[31%] before:z-[-1] before:bg-[linear-gradient(180deg,rgba(61,115,178,.2)_0%,rgba(61,115,178,0)_100%)]"></div>

<!-- Banner -->
<section class="overflow-x-hidden mb-16">
    <div class="container">
        <div class="swiper-banner-home relative">
            <div class="swiper swiper-banner-home">
                <div class="swiper-wrapper">
                    <?php for ($i = 0; $i < 3; $i++) { ?>
                        <div class="swiper-slide">
                            <span class="block c-img h-[18.75rem] md:h-[28.625rem] rounded-[10px] overflow-hidden">
                                <img src="theme/frontend/images/image2.jpg" alt="">
                            </span>
                        </div>
                    <?php } ?>
                </div>
                <div class="swiper-pagination-banner p-1 rounded-full bg-white/25 text-white absolute left-1/2 -translate-x-1/2 bottom-2 z-[1] size-10 flex items-center justify-center"></div>
            </div>
            <div class="swiper-button-prev-banner absolute top-1/2 -translate-y-1/2 left-2 md:-left-14 z-[1]">
                <i class="fa-solid fa-angle-left size-10 flex items-center justify-center drop-shadow-[0px_4px_10px_rgba(0,0,0,0.10)] border border-color-v2 text-color-v2 bg-white rounded-full hover:bg-color-v2 hover:text-white"></i>
            </div>
            <div class="swiper-button-next-banner absolute top-1/2 -translate-y-1/2 right-2 md:-right-14 z-[1]">
                <i class="fa-solid fa-angle-right size-10 flex items-center justify-center drop-shadow-[0px_4px_10px_rgba(0,0,0,0.10)] border border-color-v2 text-color-v2 bg-white rounded-full hover:bg-color-v2 hover:text-white"></i>
            </div>
        </div>
    </div>
</section>

<div class="relative max-w-[1920px] mx-auto before:inset-x-0 before:absolute before:top-40 before:pb-[54%] before:z-[-1] layout-home-page"></div>

<!-- Khóa học -->
<section class="mb-10">
    <div class="container max-sm:px-0">
        <div class="bg-white sm:rounded-[10px] shadow-[0px_0px_15px_0px_rgba(0,0,0,.15)] py-4 module-tabs module-tabs-course">
            <div class="swiper-sale-books flex gap-3 lg:gap-4 items-center sm:-mt-10 px-4 pb-8 mb-8 border-b border-[#BEBEBE]">
                <div class="swiper-prev-book">
                    <i class="fa-solid fa-arrow-left text-[1.25rem]"></i>
                </div>
                <div class="swiper">
                    <div class="swiper-wrapper">
                        <?php for ($i = 0; $i < 5; $i++) { ?>
                            <div class="swiper-slide">
                                <div class="flex">
                                    <div class="w-[7.125rem] shrink-0 mr-3 relative shadow-[0_4px_10px_0_rgba(0,0,0,.12)] rounded-[5px] overflow-hidden text-white group">
                                        <a href="" class="block c-img pt-[138%]">
                                            <img src="theme/frontend/images/image3.png" alt="">
                                        </a>
                                        <span class="tag-sale text-[12px] font-semibold absolute -top-2 left-1 p-0.5 leading-[2.8125rem] h-[2.8125rem] bg-[#EB4040] z-[2]">
                                            -30%
                                        </span>
                                        <div class="bg-black/30 absolute inset-0 z-[1] opacity-0 group-hover:opacity-100 group-hover:visible transition-all duration-300">
                                            <a href="" class="bg-white/50 rounded-full px-2 py-1 text-[0.875rem] absolute bottom-1/2 left-1/2 -translate-x-1/2 whitespace-nowrap translate-y-2 group-hover:translate-y-0">
                                                Mua ngay
                                            </a>
                                            <button class="icon-add-cart absolute top-[55%] left-1/2 size-8 p-1 bg-white/50 rounded-full -translate-x-1/2 translate-y-2 group-hover:translate-y-0">
                                                <?php include "template/svgs/add-cart.php"; ?>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="text-black space-y-1.5 sm:self-end">
                                        <a href="" class="line-clamp-2 font-semibold hover:text-color-v2">
                                            Cosmetic and clinical applications of botox and dermal fillers
                                        </a>
                                        <span class="block text-[0.875rem]">
                                            Bởi: Nguyễn Quỳnh Trang
                                        </span>
                                        <span class="text-[0.875rem] icon icon-star">
                                            5.0
                                        </span>
                                        <div class="flex items-center gap-2">
                                            <span class="text-[0.75rem] line-through text-color-v5">300.000 đ</span>
                                            <span class="text-[#E03535] font-semibold">
                                                300.000 đ
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
                <div class="swiper-next-book">
                    <i class="fa-solid fa-arrow-right text-[1.25rem]"></i>
                </div>
            </div>
            <div class="flex flex-wrap items-center justify-between gap-4 font-nunito px-4 mb-6">
                <h2 class="text-[1.5rem] font-bold uppercase text-color-v1 title-image" style="--data-course: url('../images/image4.png')">
                    Khoá học
                </h2>
                <ul class="flex gap-3 overflow-x-auto">
                    <li class="tab-link text-color-v2 font-medium py-1 px-4 rounded-full transition-colors cursor-pointer duration-300 whitespace-nowrap active" data-electronic="new-course-1">Khóa học mới</li>
                    <li class="tab-link text-color-v2 font-medium py-1 px-4 rounded-full transition-colors cursor-pointer duration-300 whitespace-nowrap" data-electronic="new-course-2">Khóa học nổi bật</li>
                    <li class="tab-link text-color-v2 font-medium py-1 px-4 rounded-full transition-colors cursor-pointer duration-300 whitespace-nowrap" data-electronic="new-course-3">Khóa học bán chạy</li>
                </ul>
            </div>
            <?php for ($i = 1; $i <= 3; $i++) { ?>
                <div class="tab-content px-4 <?php echo $i == 1 ? 'active' : ''; ?>" id="new-course-<?php echo $i; ?>">
                    <div class="flex flex-wrap -mx-2 sm:-mx-3 gap-y-6 mb-5">
                        <?php for ($j = 0; $j < 8; $j++) { ?>
                            <div class="w-full xs:w-1/2 lg:w-1/3 xl:w-1/4 px-2 sm:px-3">
                                <?php include "template/course/item.php"; ?>
                            </div>
                        <?php } ?>
                    </div>
                    <a href="" class="block w-fit mx-auto text-color-v2 font-semibold hover:text-color-v3 hover:underline">
                        Xem tất cả
                    </a>
                </div>
            <?php } ?>
        </div>
    </div>
</section>

<!-- Sách -->
<section class="mb-8">
    <div class="container max-sm:px-0">
        <div class="bg-white py-6 px-4 sm:rounded-[10px] mb-6">
            <div class="flex flex-wrap items-center justify-between gap-4 font-nunito px-4 mb-6">
                <h2 class="text-[1.5rem] font-bold uppercase text-color-v1 title-image" style="--data-course: url('../images/image6.png')">
                    Sách
                </h2>
                <a href="" class="inline-flex gap-2 items-center text-color-v2 font-semibold font-nunito hover:text-color-v3 group" title="Xem tất cả">
                    Xem tất cả <i class="fa-solid fa-arrow-right group-hover:text-color-v3"></i>
                </a>
            </div>
            <div class="module-tabs module-tabs-book">
                <?php $list_cat = ['Sách nói', 'Sách điện tử', 'Sách Giấy'];
                $list_item = ['Sách mới', 'Sách nổi bật', 'Sách bán chạy'];
                ?>
                <div class="all-btn-click-tab flex flex-wrap justify-between gap-x-4 gap-y-3 items-center mb-6">
                    <ul class="list-tab-cat flex gap-2 md:gap-1 overflow-x-auto p-2 rounded-full bg-[#F1F1F1] max-md:w-full">
                        <?php foreach ($list_cat as $key => $item) { ?>
                            <li class="tab-link py-1 px-3 rounded-full max-md:flex-auto lg:min-w-[130px] text-center transition-colors cursor-pointer duration-300 whitespace-nowrap <?php echo $key == 0 ? 'active' : ''; ?>" data-electronic="tab-cat-<?php echo $key; ?>">
                                <?php echo $item; ?>
                            </li>
                        <?php } ?>
                    </ul>
                    <ul class="list-tab-item flex gap-3 overflow-x-auto">
                        <?php foreach ($list_item as $key => $item) { ?>
                            <li class="tab-link-item text-color-v2 font-medium py-1 px-4 rounded-full transition-colors cursor-pointer duration-300 whitespace-nowrap <?php echo $key == 0 ? 'active' : ''; ?>" data-electronic="tab-item-<?php echo $key; ?>">
                                <?php echo $item; ?>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
                <?php foreach ($list_cat as $key => $item) { ?>
                    <div class="tab-content <?php echo $key == 0 ? 'active' : ''; ?>" id="tab-cat-<?php echo $key; ?>">
                        <?php foreach ($list_item as $index => $item) { ?>
                            <div class="tab-content-item <?php echo $index == 0 ? 'active' : ''; ?>" id="tab-item-<?php echo $index; ?>">
                                <div class="flex flex-wrap -mx-3 gap-y-6">
                                    <?php for ($j = 0; $j < 9; $j++) { ?>
                                        <div class="w-full sm:w-1/2 lg:w-1/3 px-3">
                                            <?php include "template/book/item.php"; ?>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>

<!-- Ảnh bìa -->
<div class="mb-8 img__contain container rounded-[10px] overflow-hidden">
    <img src="theme/frontend/images/image7.png" alt="">
</div>

<!-- Tài liệu -->
<section class="mb-10">
    <div class="container max-sm:px-0">
        <div class="bg-white sm:rounded-[10px] shadow-[0px_0px_15px_0px_rgba(0,0,0,.15)] p-4 lg:p-6 module-tabs module-tabs-course">
            <div class="flex flex-wrap items-center justify-between gap-4 font-nunito mb-6">
                <h2 class="text-[1.5rem] font-bold uppercase text-color-v1 title-image" style="--data-course: url('../images/image11.png')">
                    Tài liệu
                </h2>
                <ul class="flex gap-3 overflow-x-auto">
                    <li class="tab-link text-color-v2 font-medium py-1 px-4 rounded-full transition-colors cursor-pointer duration-300 whitespace-nowrap active" data-electronic="new-doc-1">Tài liệu mới</li>
                    <li class="tab-link text-color-v2 font-medium py-1 px-4 rounded-full transition-colors cursor-pointer duration-300 whitespace-nowrap" data-electronic="new-doc-2">Tài liệu nổi bật</li>
                    <li class="tab-link text-color-v2 font-medium py-1 px-4 rounded-full transition-colors cursor-pointer duration-300 whitespace-nowrap" data-electronic="new-doc-3">Tài liệu bán chạy</li>
                </ul>
            </div>
            <?php for ($i = 1; $i <= 3; $i++) { ?>
                <div class="tab-content <?php echo $i == 1 ? 'active' : ''; ?>" id="new-doc-<?php echo $i; ?>">
                    <div class="flex flex-wrap gap-y-6 -mx-3 mb-6">
                        <div class="w-full lg:w-3/4 px-3">
                            <div class="flex flex-wrap -mx-2 gap-y-6">
                                <?php for ($j = 0; $j < 15; $j++) { ?>
                                    <div class="w-full sm:w-1/2 xl:w-1/3 px-2">
                                        <?php @include("template/document/item.php");
                                        $j; ?>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="w-full lg:w-1/4 px-3">
                            <?php for ($j = 0; $j < 7; $j++) { ?>
                                <div class="pb-2.5 mb-2.5 border-b border-color-v5 last:pb-0 last:mb-0 last:border-none">
                                    <a href="" class="line-clamp-2 text-[1.125rem] font-semibold icon-before hover:text-color-v3 mb-1 <?php echo $j % 2 == 0 ? 'icon-pdf' : 'icon-word'; ?>" title="">
                                        Cosmetic and clinical applications of botox and dermal fillers
                                    </a>
                                    <div class="flex max-xl:flex-wrap justify-between gap-y-1 gap-3">
                                        <span class="block text-[0.875rem]">
                                            Bởi: Nguyễn Quỳnh Trang
                                        </span>
                                        <div class="flex gap-2 text-color-v5 text-[0.75rem] whitespace-nowrap">
                                            <span class="icon icon-eye">123</span>
                                            <span class="icon icon-download">87</span>
                                            <span class="icon icon-document">30 trang</span>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                    <a href="" class="block w-fit mx-auto text-color-v2 font-semibold hover:text-color-v3 hover:underline">
                        Xem tất cả
                    </a>
                </div>
            <?php } ?>
        </div>
    </div>
</section>

<!-- Ảnh bìa -->
<div class="mb-10 img__contain container rounded-[10px] overflow-hidden">
    <img src="theme/frontend/images/image8.png" alt="">
</div>

<!-- Tin tức -->
<section class="mb-8">
    <div class="container">
        <div class="flex flex-wrap items-center justify-between gap-4 font-nunito mb-4">
            <h2 class="text-[1.5rem] font-bold uppercase text-color-v1">
                Tin tức
            </h2>
            <a href="" class="inline-flex gap-2 items-center text-color-v2 font-semibold font-nunito hover:text-color-v3" title="Xem tất cả">
                Xem tất cả
            </a>
        </div>
        <div class="swiper swiper-news-home">
            <div class="swiper-wrapper">
                <?php for ($i = 0; $i < 7; $i++) { ?>
                    <div class="swiper-slide">
                        <?php include "template/new/item.php"; ?>
                    </div>
                <?php } ?>
            </div>
            <div class="swiper-pagination-news text-center mt-2"></div>
        </div>
    </div>
</section>

<!-- Đăng ký nhận tin -->
<section class="bg-cover bg-center bg-no-repeat py-10" style="background-image: url('theme/frontend/images/image9.png');">
    <div class="container max-w-screen-md text-center text-white">
        <h2 class="text-[2rem] lg:text-[2.5rem] font-bold mb-3">
            Đăng ký nhận tin ngay
        </h2>
        <p class="text-center mb-6">
            Lorem ipsum dolor sit amet consectetur. Interdum consectetur nunc commodo amet. Mauris risus ullamcorper commodo lacus eros parturient eleifend congue nulla.
        </p>
        <form action="" class="font-nunito bg-white flex gap-2 items-center p-2 rounded-[5px]">
            <input type="text" placeholder="Nhập địa chỉ email của bạn" class="bg-transparent w-full text-color-main">
            <button type="submit" class="bg-color-v2 rounded-[5px] py-1.5 px-6 border border-color-v2 text-white font-semibold hover:bg-white hover:text-color-v2 whitespace-nowrap">
                Gửi ngay
            </button>
        </form>
    </div>
</section>

<?php include "footer.php"; ?>