<?php include "header.php"; ?>

<section>
    <div class="bg-white mb-6">
        <div class="container">
            <div class="xl:w-[calc(100%-428px)] pb-6 space-y-3">
                <div class="*:px-0 *:pb-2">
                    <?php @include('template/breadcrumb.php') ?>
                </div>
                <h1 class="text-[1.25rem] lg:text-[1.5rem] uppercase font-semibold">
                    Khóa Đào Tạo - C&B Nghiệp Vụ Tiền Lương Và Bảo Hiểm Xã Hội Gen 121
                </h1>
                <div class="flex flex-wrap text-[#949494]">
                    <div class="flex space-x-1.5 items-center max-sm:mr-4 max-sm:after:hidden after:h-4 after:w-[1px] after:bg-[#949494] after:mx-6">
                        <span>5.0</span>
                        <div class="flex items-center -translate-y-0.5 space-x-1">
                            <span class="icon icon-star"></span>
                            <span class="icon icon-star"></span>
                            <span class="icon icon-star"></span>
                            <span class="icon icon-star"></span>
                            <span class="icon icon-star"></span>
                        </div>
                        <span class="">(123 đánh giá)</span>
                    </div>
                    <span class="icon news-detail-date max-sm:mr-4 max-sm:after:hidden after:h-4 after:w-[1px] after:bg-[#949494] after:mx-6">26/05/2024</span>
                    <span class="icon icon-eye max-sm:mr-4 max-sm:after:hidden after:h-4 after:w-[1px] after:bg-[#949494] after:mx-6">324 người xem</span>
                    <span class="icon icon-download max-sm:mr-4 max-sm:after:hidden after:h-4 after:w-[1px] after:bg-[#949494] after:mx-6">324 lượt tải</span>
                    <span>Lượt tải: <strong class="text-color-v3">PDF</strong></span>
                </div>
                <div class="flex flex-wrap">
                    <?php foreach (['Kinh doanh', 'Tài chính', 'Kế toán'] as $item) : ?>
                        <a href="" title="<?php echo $item; ?>" class="py-1 px-3 bg-color-v4 rounded-full text-[0.875rem] hover:text-white hover:bg-color-v2 mr-2 last:mr-0 mb-2">
                            <?php echo $item; ?>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
    <div class="container xl:flex mb-[4.4375rem]">
        <div class="xl:w-[calc(100%-416px)] space-y-6 xl:mr-6 max-xl:mb-6">
            <div class="flex max-lg:flex-wrap justify-between items-center gap-4">
                <div class="flex items-center shrink-0">
                    <a href="" class="relative mr-2">
                        <span class="size-12 c-img rounded-full overflow-hidden">
                            <img src="theme/frontend/images/image12.png" alt="">
                        </span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 absolute -bottom-1 -right-1" viewBox="0 0 24 24" fill="none">
                            <path d="M19.5 12C19.5 16.1421 16.1421 19.5 12 19.5C7.85786 19.5 4.5 16.1421 4.5 12C4.5 7.85786 7.85786 4.5 12 4.5C16.1421 4.5 19.5 7.85786 19.5 12Z" fill="#3977BC" stroke="white"></path>
                            <path d="M9.5 12L11.394 13.894C11.4221 13.9221 11.4602 13.9379 11.5 13.9379C11.5398 13.9379 11.5779 13.9221 11.606 13.894L15.5 10" stroke="white" stroke-width="1.2"></path>
                        </svg>
                    </a>
                    <span class="font-semibold mr-2">Nguyễn Thanh Ngân</span>
                    <button class="py-1 px-2 text-[0.875rem] flex items-center border border-color-v2 rounded-[2.375rem] text-color-v2 hover:bg-color-v2 hv_path-white hover:text-white">
                        Theo dõi
                        <span class="w-4 ml-1"><?php @include("template/svgs/iconfollow.php") ?></span>
                    </button>
                </div>

                <?php if (isset($screen) && $screen == 1) : ?> <!-- chi tiết tài liệu/Cho xem miễn phí -->
                    <a href="" title="Xem ngay" class="bg-color-v2 text-white max-xs:w-full text-center px-4 py-2 rounded-[5px] text-[1.125rem] font-semibold font-nunito border border-color-v2 hover:bg-white hover:text-color-v2">
                        Xem ngay
                    </a>
                <?php elseif (isset($screen) && $screen == 2) : ?><!-- chi tiết tài liệu/Cho xem miễn phí và được tải xuống -->
                    <div class="flex max-sm:w-full">
                        <a href="" title="Xem ngay" class="flex-auto bg-color-v2 text-white mr-2 text-center px-4 py-2 rounded-[5px] text-[1.125rem] font-semibold font-nunito border border-color-v2 hover:bg-white hover:text-color-v2">
                            Xem ngay
                        </a>
                        <a href="" title="Tải xuống" download="" class="flex-auto bg-white text-color-v2 text-center px-4 py-2 rounded-[5px] text-[1.125rem] font-semibold font-nunito border border-color-v2 hover:bg-color-v2 hover:text-white flex items-center justify-center group">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 mr-1" viewBox="0 0 24 25" fill="none">
                                <path d="M12 4.5H14V10.5H16.5L12 15M12 4.5H10V10.5H7.5L12 15" class="group-hover:fill-white fill-color-v2" />
                                <path d="M12 4.5H14V10.5H16.5L12 15L7.5 10.5H10V4.5H12Z" class="group-hover:stroke-white stroke-color-v2" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M6 19.5H18" class="group-hover:stroke-white stroke-color-v2" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            Tải xuống
                        </a>
                    </div>
                <?php else : ?> <!-- chi tiết tài liệu/ Trả phí mới được tải về -->
                    <div class="flex max-sm:flex-wrap max-lg:w-full xl:flex-col 2xl:flex-row gap-3 justify-between">
                        <div class="flex items-center space-x-3 mt-auto">
                            <p class="text-[2rem] text-[#e03535] font-bold flex items-center leading-none">
                                <span class="underline text-[1rem] mr-1 pb-[0.1875rem]">đ</span> 250.000
                            </p>
                            <p class="text-[1.125rem] text-color-v5 flex items-center">
                                <span class="underline text-[0.75rem] mr-1 pb-[0.1875rem]">đ</span>
                                <span class="line-through">250.000</span>
                            </p>
                            <span class="py-[0.125rem] px-[0.375rem] bg-[#EFC22E] rounded-[5px] text-center text-color-main font-semibold text-[12px]">
                                -68%
                            </span>
                        </div>
                        <div class="flex h-full">
                            <a href="" title="" class="bg-color-v2 h-full mr-3 py-2 px-4 text-center flex items-center rounded-[5px] text-white text-[1.125rem] font-semibold font-nunito border border-color-v2 hover:bg-white hover:text-color-v2">
                                Mua trọn bộ
                            </a>
                            <button class="border border-color-v2 h-full py-2 px-4 text-center flex items-center rounded-[5px] text-color-v2 text-[1.125rem] font-semibold font-nunito hover:text-white hover:bg-color-v2">
                                Thêm vào giỏ
                            </button>
                        </div>
                    </div>
                <?php endif; ?>
            </div>

            <div class="p-4 rounded-[10px] bg-white shadow-[0_0_15px_rgba(0,0,0,0.25)] module-tabs module-tabs-document-detail">
                <ul class="flex text-[1.125rem] text-color-v5 font-semibold mb-6 border-b border-[#ddd]">
                    <li class="tab-link transition-all cursor-pointer duration-300 whitespace-nowrap mr-8 pb-2 last:mr-0 relative before:absolute before:w-full before:scale-x-0 before:origin-center before:h-0.5 before:bg-color-v2 before:-bottom-0.5 before:left-0 before:transition-all before:duration-300 active" data-electronic="tab-doc-detail-intro">
                        Giới thiệu
                    </li>
                    <li class="tab-link transition-all cursor-pointer duration-300 whitespace-nowrap mr-8 pb-2 last:mr-0 relative before:absolute before:w-full before:scale-x-0 before:origin-center before:h-0.5 before:bg-color-v2 before:-bottom-0.5 before:left-0 before:transition-all before:duration-300" data-electronic="tab-doc-detail-doc" onclick="toggleShowPayDocument()">
                        Bộ tài liệu
                    </li>
                </ul>
                <div id="tab-doc-detail-intro" class="tab-content s-content hidden active">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vitae modi odio amet, deserunt possimus itaque suscipit voluptas. Dolorum, inventore. Exercitationem assumenda corporis obcaecati tempora porro alias quisquam fugiat architecto officiis?
                </div>
                <div id="tab-doc-detail-doc" class="tab-content hidden max-h-[500px] overflow-y-auto custom-scrollbar-grey">
                    <?php for ($i = 0; $i < 9; $i++) { ?>
                        <label for="doc-<?php echo $i; ?>" class="flex justify-between mb-3 last:mb-0 py-3 px-2 rounded cursor-pointer">
                            <input type="checkbox" id="doc-<?php echo $i; ?>" class="mr-2 mb-0.5">
                            <p class="font-semibold mr-2 icon icon-pdf before:!-translate-y-0.5 line-clamp-2">Lorem ipsum dolor sit amet consectetur. </p>
                            <span class="text-[1.125rem] text-color-v3 font-semibold ml-auto">482.736đ</span>
                        </label>
                    <?php } ?>
                </div>
            </div>

            <div class="mt-4 mb-6 hidden justify-end items-center" id="pay-document">
                <span class="mr-6 text-[1.125rem] font-semibold">
                    Tổng: <strong class="text-[1.25rem] text-[#E03535] ml-1">482.736 đ</strong>
                </span>
                <a href="" title="Thanh toán" class="bg-color-v2 text-white text-center px-4 py-2 rounded-[5px] text-[1.125rem] font-semibold font-nunito border border-color-v2 hover:bg-white hover:text-color-v2">
                    Thanh toán
                </a>
            </div>

            <!-- Khối xem file PDF -->
            <div>
                Khối PDF
            </div>

            <!-- tag -->
            <div class="flex gap-2">
                <span>Tag:</span>
                <?php foreach (['Kinh doanh', 'Tài chính', 'Kế toán'] as $item) : ?>
                    <a href="" class="inline-block text-[0.875rem] bg-white rounded-[3.625rem] px-4 py-1 drop-shadow-[0_0_15px_rgba(0,0,0,0.25)] transition-all duration-200 hover:text-white hover:bg-color-v2">
                        <?php echo $item; ?>
                    </a>
                <?php endforeach; ?>
            </div>

            <!-- rate -->
            <div class="bg-white p-4 md:px-8 md:py-6 rounded-[0.625rem] shadow-[0_0_15px_rgba(0,0,0,0.25)]">
                <?php @include "template/comment/rate.php"; ?>
            </div>

            <!-- comment -->
            <div class="bg-white px-4 py-6 rounded-[0.625rem] shadow-[0_0_15px_rgba(0,0,0,0.25)]">
                <?php @include "template/comment/send_form.php"; ?>
                <?php @include "template/comment/list_comments.php"; ?>
            </div>
        </div>
        <div class="xl:w-[416px] xl:-mt-80 2xl:-mt-56">
            <div class="sticky top-[calc(var(--header-height)+1rem)] p-4 bg-white rounded-[0.625rem] shadow-[0_0_15px_rgba(0,0,0,0.25)]">
                <span class="text-[1.25rem] block lg:text-[1.5rem] text-center font-semibold mb-6">Tài liệu liên quan</span>
                <div class="max-h-[calc(100vh-var(--header-height)-8rem)] overflow-y-auto custom-scrollbar-grey space-y-6">
                    <?php for ($i = 0; $i < 9; $i++) { ?>
                        <?php @include("template/document/item.php") ?>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include "footer.php"; ?>