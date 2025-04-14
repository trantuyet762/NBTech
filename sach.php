<?php include("header.php"); ?>

<?php @include('template/breadcrumb.php') ?>

<section class="mb-20">
    <div class="container">
        <div class="flex flex-wrap">
            <div class="w-full lg:w-[268px] lg:mr-6 shrink-0">
                <?php @include('template/sidebarCat.php') ?>
            </div>
            <div class="w-full lg:w-[calc(100%-292px)]">
                <div class="sm:flex sm:justify-between mb-6 items-center">
                    <h1 class="text-[1.5rem] font-semibold text-[#303030] title-image before:!w-10 max-sm:mb-4" style="--data-course: url('../images/logo.png')">
                        Sách
                    </h1>
                    <div class="flex p-1 rounded-full bg-color-v2 text-white text-[0.875rem] list-link-book">
                        <?php foreach (['Sách nói', 'Sách điện tử', 'Sách Giấy'] as $key => $item) { ?>
                            <a href="" class="item py-1 mr-1 max-sm:flex-1 last:mr-0 px-3 rounded-full sm:min-w-[9.375rem] text-center whitespace-nowrap <?php echo $key == 0 ? 'active' : ''; ?>">
                                <?php echo $item; ?>
                            </a>
                        <?php } ?>
                    </div>
                </div>
                <div class="bg-white rounded-[0.625rem] p-4 border border-[#95b3d6] swiper-books-page mb-6">
                    <div class="sm:flex gap-x-4 mb-4">
                        <span class="mr-auto text-[1.5rem] font-semibold text-color-v1">Thương hiệu đảm bảo</span>
                        <div class="hidden md:flex items-center">
                            <div class="swiper-pagination-progressbar-books relative !w-[16.125rem] mr-3"></div>
                            <div class="swiper-books-page-prev mr-1">
                                <i class="fa-solid fa-arrow-left size-7 flex items-center justify-center border-2 border-color-v2 rounded-full bg-white text-color-v2"></i>
                            </div>
                            <div class="swiper-books-page-next">
                                <i class="fa-solid fa-arrow-right size-7 flex items-center justify-center border-2 border-color-v2 rounded-full bg-white text-color-v2"></i>
                            </div>
                        </div>
                    </div>
                    <div class="swiper">
                        <div class="swiper-wrapper">
                            <?php for ($i = 0; $i < 12; $i++) { ?>
                                <div class="swiper-slide">
                                    <?php
                                    @include('template/book/item.php');
                                    ?>
                                </div>
                            <?php } ?>
                        </div>
                        <div class="w-full text-center md:hidden mt-4">
                            <div class="swiper-pagination-bullets-books"></div>
                        </div>
                    </div>
                </div>
                <div class="bg-white rounded-[0.625rem] p-4 border border-[#95b3d6] swiper-books-page mb-6">
                    <div class="sm:flex gap-x-4 mb-4">
                        <span class="mr-auto text-[1.5rem] font-semibold text-color-v1">Combo sách</span>
                        <div class="hidden md:flex items-center">
                            <div class="swiper-pagination-progressbar-books relative !w-[16.125rem] mr-3"></div>
                            <div class="swiper-books-page-prev mr-1">
                                <i class="fa-solid fa-arrow-left size-7 flex items-center justify-center border-2 border-color-v2 rounded-full bg-white text-color-v2"></i>
                            </div>
                            <div class="swiper-books-page-next">
                                <i class="fa-solid fa-arrow-right size-7 flex items-center justify-center border-2 border-color-v2 rounded-full bg-white text-color-v2"></i>
                            </div>
                        </div>
                    </div>
                    <div class="swiper">
                        <div class="swiper-wrapper">
                            <?php for ($i = 0; $i < 12; $i++) { ?>
                                <div class="swiper-slide">
                                    <?php $data = ['combo' => true];
                                    @include('template/book/item.php');
                                    ?>
                                </div>
                            <?php } ?>
                        </div>
                        <div class="w-full text-center md:hidden mt-4">
                            <div class="swiper-pagination-bullets-books"></div>
                        </div>
                    </div>
                </div>
                <div class="bg-white rounded-[0.625rem] p-4 border border-[#95b3d6] swiper-books-page">
                    <div class="sm:flex gap-x-4 mb-4">
                        <span class="mr-auto text-[1.5rem] font-semibold text-color-v1">Miễn phí</span>
                        <div class="hidden md:flex items-center">
                            <div class="swiper-pagination-progressbar-books relative !w-[16.125rem] mr-3"></div>
                            <div class="swiper-books-page-prev mr-1">
                                <i class="fa-solid fa-arrow-left size-7 flex items-center justify-center border-2 border-color-v2 rounded-full bg-white text-color-v2"></i>
                            </div>
                            <div class="swiper-books-page-next">
                                <i class="fa-solid fa-arrow-right size-7 flex items-center justify-center border-2 border-color-v2 rounded-full bg-white text-color-v2"></i>
                            </div>
                        </div>
                    </div>
                    <div class="swiper">
                        <div class="swiper-wrapper">
                            <?php for ($i = 0; $i < 12; $i++) { ?>
                                <div class="swiper-slide">
                                    <?php
                                    @include('template/book/item_free.php');
                                    ?>
                                </div>
                            <?php } ?>
                        </div>
                        <div class="w-full text-center md:hidden mt-4">
                            <div class="swiper-pagination-bullets-books"></div>
                        </div>
                    </div>
                </div>
                <div class="swiper swiper-document-tabline px-2.5 w-[calc(100%+1.25rem)] -ml-2.5">
                    <div class="swiper-wrapper">
                        <?php for ($i = 0; $i < 8; $i++) { ?>
                            <div class="swiper-slide h-auto py-6">
                                <div class="h-full px-3 py-4 bg-white rounded-[0.3125rem] shadow-[0px_0px_15px_0px_rgba(0,0,0,0.25)]">
                                    <div class="h-[3.5rem] img__h-full img__center">
                                        <img src="theme/frontend/images/icondc.png" alt="">
                                    </div>
                                    <span class="text-center line-clamp-2 mt-1">Kinh doanh</span>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
                <div class="module-tabs mb-4">
                    <?php $list_doc = ['Tất cả', 'Sách nổi bật', 'Top 10 Sách mua nhiều', 'Sách miễn phí']; ?>
                    <div class="all-btn-tab-doc flex flex-wrap justify-between gap-x-4 gap-y-3 items-center mb-6">
                        <ul class="list-tab-document flex overflow-x-auto">
                            <?php foreach ($list_doc as $key => $item) { ?>
                                <li class="tab-link text-[0.875rem] text-[#8d8d8d] transition-colors cursor-pointer duration-300 whitespace-nowrap mr-4 last:mr-0 <?php echo $key == 0 ? 'active' : ''; ?>"
                                    data-electronic="tab-doc-<?php echo $key; ?>">
                                    <?php echo $item; ?>
                                </li>
                            <?php } ?>
                        </ul>
                        <form class="text-[0.875rem] text-color-v5">
                            <label for="latest" class="mr-4 cursor-pointer hover:text-color-v2">
                                <input type="radio" name="time" id="latest" checked hidden>
                                <span>Mới nhất</span>
                            </label>
                            <label for="oldest" class="mr-4 cursor-pointer hover:text-color-v2">
                                <input type="radio" name="time" id="oldest" hidden>
                                <span>Cũ nhất</span>
                            </label>
                            <select name="" id="" class="bg-transparent cursor-pointer hover:text-color-v2">
                                <option value="">Lượt xem</option>
                                <option value="">Đánh giá</option>
                                <option value="">Lượt mua</option>
                            </select>
                        </form>
                    </div>
                    <div class="p-4 bg-white rounded-[0.625rem]">
                        <?php foreach ($list_doc as $key => $item) { ?>
                            <div class="tab-content <?php echo $key == 0 ? 'active' : ''; ?>"
                                id="tab-doc-<?php echo $key; ?>">
                                <span class="text-color-v1 text-[1.5rem] font-semibold mb-4 block"><?php echo $item; ?></span>
                                <div class="flex flex-wrap -mx-2 -mb-6">
                                    <?php for ($i = 0; $i < 15; $i++) { ?>
                                        <div class="w-full md:w-1/2 xl:w-1/3 px-2 mb-6">
                                            <?php @include("template/book/item.php") ?>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
                <div class="bg-white rounded-[0.625rem] p-4 relative mb-6">
                    <span class="text-color-v1 text-[1rem] md:text-[1.5rem] font-semibold mb-4 block">
                        NHÀ SÁCH, NHÀ XUẤT BẢN ĐƯỢC ĐẢM BẢO
                    </span>
                    <div class="swiper-lecturer-expert relative">
                        <div class="swiper">
                            <div class="swiper-wrapper">
                                <?php for ($i = 0; $i < 10; $i++) { ?>
                                    <div class="swiper-slide">
                                        <div class="text-center p-4 relative before:absolute before:inset-x-0 before:-z-[1] z-[1] before:bottom-0 before:rounded-[10px] before:h-[calc(100%-5rem)] before:border before:border-color-v5">
                                            <a href="" title="" class="block c-img overflow-hidden border-4 border-color-v2 rounded-full w-32 aspect-square mx-auto mb-4">
                                                <img src="theme/frontend/images/image50.png" alt="">
                                            </a>
                                            <span class="font-semibold text-black block mb-4">B Company</span>
                                            <button class="w-full flex items-center justify-center p-1 border border-color-v2 rounded-full text-color-v2 cursor-pointer hover:text-white hover:bg-color-v2 hv_path-white">
                                                Theo dõi
                                                <span class="w-4 ml-1">
                                                    <?php @include("template/svgs/iconfollow.php") ?>
                                                </span>
                                            </button>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="absolute z-[1] swiper-lecturer-expert-prev -left-5 top-[65%]">
                            <i class="fa-solid fa-arrow-left size-8 flex items-center justify-center border-2 border-color-v2 rounded-full bg-white text-color-v2"></i>
                        </div>
                        <div class="absolute z-[1] swiper-lecturer-expert-next -right-5 top-[65%]">
                            <i class="fa-solid fa-arrow-right size-8 flex items-center justify-center border-2 border-color-v2 rounded-full bg-white text-color-v2"></i>
                        </div>
                    </div>
                </div>
                <div class="bg-white rounded-[0.625rem] p-4 border border-[#95b3d6] swiper-books-page">
                    <div class="sm:flex gap-x-4 mb-4">
                        <span class="mr-auto text-[1.5rem] font-semibold text-color-v1">Đã xem trước đây</span>
                        <div class="hidden md:flex items-center">
                            <div class="swiper-pagination-progressbar-books relative !w-[16.125rem] mr-3"></div>
                            <div class="swiper-books-page-prev mr-1">
                                <i class="fa-solid fa-arrow-left size-7 flex items-center justify-center border-2 border-color-v2 rounded-full bg-white text-color-v2"></i>
                            </div>
                            <div class="swiper-books-page-next">
                                <i class="fa-solid fa-arrow-right size-7 flex items-center justify-center border-2 border-color-v2 rounded-full bg-white text-color-v2"></i>
                            </div>
                        </div>
                    </div>
                    <div class="swiper">
                        <div class="swiper-wrapper">
                            <?php for ($i = 0; $i < 12; $i++) { ?>
                                <div class="swiper-slide">
                                    <?php
                                    @include('template/book/item_free.php');
                                    ?>
                                </div>
                            <?php } ?>
                        </div>
                        <div class="w-full text-center md:hidden mt-4">
                            <div class="swiper-pagination-bullets-books"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include("footer.php"); ?>