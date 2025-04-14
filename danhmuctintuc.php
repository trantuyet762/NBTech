<?php include "header.php"; ?>

<?php @include('template/breadcrumb.php') ?>

<section class="category-news mb-[5.5625rem]">
    <div class="container">
        <div class="lg:flex gap-x-4">
            <div class="max-xl:hidden w-[18%]">
                <div class="sticky top-[calc(var(--header-height)+1rem)]">
                    <div class="p-4 mb-4 bg-white rounded-[0.625rem]">
                        <h2 class="text-color-v2 font-semibold text-[1.25rem] border-b border-color-v5 pb-2 mb-4">Danh mục tin</h2>
                        <ul class="space-y-2">
                            <?php foreach (['Làm đẹp', 'Sáng tạo', 'Nấu ăn', 'Kỹ năng', 'Kỹ năng'] as $item) { ?>
                                <li
                                    class="hv_fillter-color-v1">
                                    <a href="#" alt="" class="title-image px-2 py-1 w-full hover:text-color-v1 hover:bg-color-v7" style="--data-course: url('../images/icon.png')">
                                        <?= $item ?>
                                    </a>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>
                    <div class="p-4 mb-6 bg-white rounded-[0.625rem]">
                        <h2 class="text-color-v2 font-semibold text-[1.25rem] border-b border-color-v5 pb-2 mb-4">Thành viên nổi bật</h2>
                        <ul class="space-y-6">
                            <?php
                            for ($i = 0; $i < 5; $i++) { ?>
                                <li class="flex">
                                    <span class="w-6 rounded-full aspect-square c-img overflow-hidden shrink-0 mr-2">
                                        <img src="theme/frontend/images/image12.png" alt="">
                                    </span>
                                    <a href="#" alt="" class="">Lê Minh Tuấn</a>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="lg:w-2/3 xl:w-1/2 news-outstanding max-lg:mb-4">
                <p class="text-[1.5rem] font-semibold text-color-v1 mb-4 md:hidden">Nổi bật</p>
                <div class="swiper swiper-outstanding-news mb-4 flex flex-col gap-3">
                    <div class="swiper-wrapper">
                        <?php
                        for ($i = 0; $i < 12; $i++) { ?>
                            <div class="swiper-slide">
                                <?php @include('template/new/item.php') ?>
                            </div>
                        <?php } ?>
                    </div>
                    <div class="w-full md:-order-1 flex justify-between items-center">
                        <p class="text-[1.5rem] font-semibold text-color-v1 leading-[2.5rem] max-md:hidden">Nổi bật</p>
                        <div class="flex items-center gap-2 max-md:w-full">
                            <div class="swiper-news-outstanding-pagination relative flex-auto md:!w-[258px] *:!bg-color-v2"></div>
                            <div class="swiper-news-outstanding-prev max-md:-order-1">
                                <i class="fa-solid fa-arrow-left size-7 p-1 rounded-full border-2 border-color-v2 text-color-v2 flex items-center justify-center bg-white"></i>
                            </div>
                            <div class="swiper-news-outstanding-next">
                                <i class="fa-solid fa-arrow-right size-7 p-1 rounded-full border-2 border-color-v2 text-color-v2 flex items-center justify-center bg-white"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="rounded-[0.625rem] mb-4">
                    <img src="theme/frontend/images/image7.png" alt="">
                </div>
                <?php
                for ($i = 0; $i < 6; $i++) { ?>
                    <div class="flex bg-white rounded-[0.3125rem] overflow-hidden mb-4 last:mb-0">
                        <a href="" alt="" class="img__ c-img shrink-0 pt-[22%] w-[min(260px,40%)] aspect-[8/5] mr-4">
                            <img src="theme/frontend/images/new2.png" alt="">
                        </a>
                        <div class="space-y-2 py-2 pr-4">
                            <a href="" alt="" class="text-[1.125rem] line-clamp-2 font-semibold hover:text-color-v2">
                                Tiêu đề tin tức tối đa 2 dòng nếu quá hai dòng tự động rút gọn
                            </a>
                            <p class="line-clamp-2 text-color-v5 max-md:!hidden">
                                Lorem ipsum docors it amet consectetur. Senectus sagittis sed laoreet lacus pellentesque.
                            </p>
                            <div class="flex flex-wrap gap-y-2 gap-x-3 justify-between text-color-v5">
                                <span>Bởi: Nguyễn Quỳnh Trang</span>
                                <span>12/02/2024</span>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <div class="lg:w-1/3 xl:w-[32%]">
                <div class="p-4 mb-4 bg-white rounded-[0.625rem] xl:hidden">
                    <h2 class="text-color-v2 font-semibold text-[1.25rem] border-b border-color-v5 pb-2 mb-4">Danh mục tin</h2>
                    <ul class="space-y-2">
                        <?php foreach (['Làm đẹp', 'Sáng tạo', 'Nấu ăn', 'Kỹ năng', 'Kỹ năng'] as $item) { ?>
                            <li
                                class="hv_fillter-color-v1">
                                <a href="#" alt="" class="title-image px-2 py-1 w-full hover:text-color-v1 hover:bg-color-v7" style="--data-course: url('../images/icon.png')">
                                    <?= $item ?>
                                </a>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
                <div class="p-4 mb-6 bg-white rounded-[0.625rem] xl:hidden">
                    <h2 class="text-color-v2 font-semibold text-[1.25rem] border-b border-color-v5 pb-2 mb-4">Thành viên nổi bật</h2>
                    <ul class="space-y-6">
                        <?php
                        for ($i = 0; $i < 5; $i++) { ?>
                            <li class="flex">
                                <span class="w-6 rounded-full aspect-square c-img overflow-hidden shrink-0 mr-2">
                                    <img src="theme/frontend/images/image12.png" alt="">
                                </span>
                                <a href="#" alt="" class="">Lê Minh Tuấn</a>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
                <p class="text-[1.5rem] font-semibold text-color-v1 mb-3">Phổ biến</p>
                <div class="bg-white p-2 shadow-[0_0_10px_rgba(0,0,0,0.11)] rounded-[5px] border border-[#f0f0f0] mb-4">
                    <?php for ($i = 0; $i < 9; $i++) { ?>
                        <div class="flex rounded-[5px] mb-3 last:mb-0">
                            <a href="#" alt="" class="2xl:w-[min(178px,50%)] w-[min(178px,40%)] aspect-video c-img shrink-0 img__ rounded-[0.3125rem] mr-2">
                                <img src="theme/frontend/images/new2.png" alt="">
                            </a>
                            <div class="space-y-1.5 lg:space-y-2.5">
                                <a href="#" alt="" class="line-clamp-2 font-semibold hover:text-color-v2">
                                    Tiêu đề tin tức tối đa 2 dòng nếu quá hai dòng tự động rút gọn
                                </a>
                                <span class="block text-[0.875rem] text-color-v5">
                                    Bởi: Nguyễn Quỳnh Trang
                                </span>
                                <span class="text-[0.875rem] text-color-v5 block">
                                    12/02/2024
                                </span>
                            </div>
                        </div>
                    <?php  } ?>
                </div>
                <div class="flex flex-wrap xs:flex-nowrap lg:flex-wrap gap-4">
                    <div class="rounded-[0.3125rem] img__contain overflow-hidden flex-auto">
                        <img src="theme/frontend/images/siadebar1.png" alt="">
                    </div>
                    <div class="rounded-[0.3125rem] img__contain overflow-hidden flex-auto">
                        <img src="theme/frontend/images/sidebar2.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include "footer.php"; ?>