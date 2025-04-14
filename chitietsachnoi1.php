<?php include('header.php'); ?>

<?php @include('template/breadcrumb.php'); ?>

<div class="container">
    <div class="flex max-lg:flex-col gap-x-6 gap-y-6">

        <div class="mx-auto w-[300px] xl:w-[370px]">

            <div class=" w-full img__w-full rounded-[0.625rem] shadow-[0px_4px_10px_rgba(0,0,0,0.12)]">

                <img src="theme/frontend/images/sach1.png" alt="">

            </div>

            <div class="mt-3 bg-white py-4 px-3 shadow-[0_0_15px_rgba(0,0,0,0.25)] rounded-[0.625rem]">

                <label class="text-[1.5rem] text-color-v1 font-semibold mb-2">Bộ sách</label>

                <ul class="space-y-3">

                    <?php for ($i = 0; $i < 5; $i++) { ?>

                    <li class="flex p-2">

                        <a href="" title=""
                            class="w-[min(25%_,4.625rem)] c-img img__ shrink-0 mr-2 shadow-[0px_4px_10px_rgba(0,0,0,0.12)] rounded-[0.3125rem]">

                            <img src="theme/frontend/images/sach2.png" alt="">

                        </a>

                        <span
                            class="text-[1.125rem]  line-clamp-3 font-semibold  transition-colors duration-200 hover:text-color-v2">

                            Cosmeti and clinical applications of botox and dermal fillers

                        </span>

                    </li>

                    <?php } ?>

                </ul>

            </div>

            <a href="" title=""
                class="mt-3 btn-share-fb flex items-center justify-center px-6 py-3 gap-x-2 text-color-v2 hover:text-white hover:bg-color-v2 rounded-[0.625rem] shadow-[0_0_15px_rgba(0,0,0,0.25)]">

                <span>Chia sẻ:</span>

                <span class="w-6 ">

                    <?php @include("template/svgs/iconfb.php") ?>

                </span>

            </a>
        </div>

        <div class="lg:w-[calc(100%-300px)] xl:w-[calc(100%-370px)] space-y-6">

            <div class="bg-white p-4 rounded-[0.625rem] shadow-[0_0_15px_rgba(0,0,0,0.25)] space-y-4">

                <div class="flex max-md:flex-col gap-x-4 gap-y-4">

                    <div class="space-y-4 flex-1">
                        class="
                        <h3 class="text-black text-[1.5rem] font-semibold">

                            Nhìn lại 12 ngày đêm “săn” b52 trên vùng trời thủ đô

                        </h3>

                        <div class="flex flex-wrap gap-y-2 gap-x-4 text-[#949494]">

                            <div class="flex gap-2 items-center  ">

                                <div class=" flex gap-x-2 items-center flex-wrap">

                                    5.0

                                    <span class="flex gap-x-1 ">

                                        <?php for ($i = 0; $i < 5; $i++) { ?>

                                        <span class="w-5">

                                            <?php @include("template/svgs/iconstar.php") ?>

                                        </span>

                                        <?php } ?>

                                    </span>

                                </div>

                                <span>(123 đánh giá)</span>

                            </div>

                            <span class="icon news-detail-date">26/05/2024</span>

                        </div>

                        <p class="text-[0.875rem]">Bởi:

                            <span class="font-semibold">Nguyễn Quỳnh Trang</span>

                        </p>

                        <div class="text-[0.875rem] flex flex-wrap gap-2 items-center">

                            <span class="mr-4">Thể loại: </span>

                            <?php for ($i = 0; $i < 3; $i++) { ?>

                            <a href="" title=""
                                class=" inline-block py-2 px-3 mr-2  bg-color-v4 rounded-[3.625rem] text-[0.875rem] hover:text-white hover:bg-color-v2  ">

                                Kinh doanh

                            </a>

                            <?php } ?>



                        </div>

                        <div class="flex flex-wrap gap-y-2 items-center  module-tabs module-tabs-book text-[0.875rem]">

                            <span class="mr-4 ">Chọn loại sách: </span>



                            <form id="" for=""
                                class=" p-[2px] rounded-full md:bg-[#efefef] flex gap-x-2 gap-y-2 flex-wrap">

                                <label>

                                    <input type="radio" name="book-category" id="" class="hidden peer" />

                                    <span
                                        class="py-1 px-3 max-md:bg-[#efefef] rounded-full inline-block min-w-[130px] text-center text-color-v5 transition-colors cursor-pointer duration-300 whitespace-nowrap peer-checked:bg-color-v2 peer-checked:text-white ">Sách

                                        nói

                                    </span>

                                </label>

                                <label>

                                    <input type="radio" name="book-category" id="" class="hidden peer" />

                                    <span
                                        class="py-1 px-3 max-md:bg-[#efefef] rounded-full inline-block min-w-[130px] text-center text-color-v5 transition-colors cursor-pointer duration-300 whitespace-nowrap peer-checked:bg-color-v2 peer-checked:text-white ">Sách

                                        điện tử

                                    </span>

                                </label>

                                <label>

                                    <input type="radio" name="book-category" id="" class="hidden peer" />

                                    <span
                                        class="py-1 px-3 max-md:bg-[#efefef] rounded-full inline-block min-w-[130px] text-center text-color-v5 transition-colors cursor-pointer duration-300 whitespace-nowrap peer-checked:bg-color-v2 peer-checked:text-white ">Sách

                                        viết

                                    </span>

                                </label>

                            </form>

                        </div>

                    </div>

                    <div
                        class="py-2 px-3 space-y-2 bg-[#F1F8FF] rounded-[5px] border-[0.5px] border-[#bbb] md:max-w-[13.5rem] h-fit">

                        <div class="flex mx-auto justify-center w-[2.875rem] h-[2.4375rem] img__h-full img__w-full">

                            <img src="theme/frontend/images/sach3.png" alt="">

                        </div>

                        <p class="text-center">

                            <span class="text-[0.75rem]">Mua trọn bộ sách sẽ tiết kiệm chi phí lên đến </span>

                            <span
                                class="px-[2px] rounded-[2px] bg-[#EFC53A] text-center mx-auto text-[#C62828] text-[0.625rem]  ">30%

                            </span>

                        </p>

                        <a href="" title=""
                            class=" w-full justify-center py-1 px-4 rounded-[5px] bg-color-v2 border border-color-v2 text-white hover:bg-white hover:text-color-v2  font-nunito font-semibold icon icon-bling">

                            Mua trọn bộ

                        </a>

                        <button
                            class=" w-full py-1 font-semibold font-nunito px-4 text-color-v2 border border-color-v2 bg-white hover:bg-color-v2 hover:text-white rounded-[0.3125rem]">

                            Thêm vào giỏ

                        </button>

                    </div>

                </div>

                <span class="text-[#e03535] text-[1.5rem] font-semibold block">300.000 đ</span>

                <div class="flex flex-wrap gap-y-2 justify-between">

                    <div class="flex flex-wrap gap-2 font-nunito font-semibold">

                        <button
                            class="btn-book-listen flex bg-color-v3 border border-color-v3 hover:bg-white hover:text-color-v3  items-center justify-center px-4 py-1 text-white rounded-[0.3125rem]">

                            <span class="w-6 mr-2">

                                <?php @include('template/svgs/iconlisten.php') ?>

                            </span>

                            Nghe sách

                        </button>

                        <a href="" title=""
                            class="py-[0.5625rem] px-[2.75rem] text-white border border-color-v2 bg-color-v2 hover:bg-white hover:text-color-v2 rounded-[0.3125rem]">

                            Mua ngay

                        </a>

                    </div>

                    <a href="#" title="" class="text-color-v3 text-[0.875rem] icon icon-report">Report</a>

                </div>

            </div>



            <div
                class="p-4 bg-white rounded-[0.625rem] module-tabs-document-detail shadow-[0_0_15px_rgba(0,0,0,0.25)] ">

                <?php $list_paper_book = ['Giới thiệu', 'Danh sách chương', 'Đánh giá và nhận xét'];

                ?>

                <ul class="flex gap-x-8 tab-document-detail-container relative overflow-x-auto">

                    <?php foreach ($list_paper_book as $key => $item) { ?>

                    <li class="tab-document-detail-items tab-link text-[1.125rem] text-color-v5 pb-2 font-semibold  transition-all cursor-pointer duration-300 whitespace-nowrap <?php echo $key == 0 ? 'active' : ''; ?>"
                        data-electronic="tab-doc-detail-<?php echo $key; ?>">

                        <?php echo $item; ?>

                    </li>

                    <span class="underline-tab-doc-detail"></span>

                    <?php } ?>

                </ul>



                <div class="document-detail-content-box pt-6 border-t border-t-[#ddd]">

                    <div id="tab-doc-detail-0" class="document-detail-content-items active">

                        Chưa nắm được quy chế lương, hệ thống thang bảng lương Chưa biết cách kí kết các hợp đồng

                        sao cho hợp lí, hạn chế các rủi ro pháp lí, xử lí quan hệ lao động Chưa nắm được công tác

                        bảo hiểm xã hội trong doanh nghiệp: tổng quan BHXH trong doanh nghiệp, tối ưu các khoản phải

                        đóng, thủ tục đối chiếu tăng, giảm, điều chỉnh, giải quyết chế độ ốm đau, thai sản, sổ thẻ

                        Chưa biết tổng quan và phương pháp tính thuế, quyết toán thuế thu nhập cá nhân Chưa biết xây

                        dựng, thiết kế bảng chấm công, bảng lương logic, tự động và tối ưu Kĩ năng excel chỉ ở mức

                        hiểu, chưa áp dụng được trong thực tế công việc

                    </div>

                    <div id="tab-doc-detail-1" class="document-detail-content-items ">

                        <ul class="space-y-4">

                            <?php for ($i = 1; $i < 15; $i++) { ?>

                            <li class="py-1 px-2 flex items-center gap-x-1 ">

                                <span class="font-semibold">Chương 1: </span>

                                <span class="line-clamp-1 font-semibold flex-1">

                                    Tất Cả Mọi Thứ Ở Trong Tay Bạn - Hãy Vô Tư Đi

                                </span>

                                <span class="text-[0.875rem] text-color-v5">12:09s</span>

                                <span class="text-[0.875rem] text-color-v5 px-1">26/05/2024</span>

                                <span class="min-w-6 text-[0.875rem] text-[#0F9408]">

                                    <?php

                                        if ($i === 1) {

                                            echo 'Miễn phí';
                                        } else {

                                            include('template/svgs/lock.php');
                                        }

                                        ?>

                                </span>

                                <span
                                    class="rounded-full size-6 cursor-pointer bg-color-v2 text-white flex justify-center items-center ml-1">

                                    <?php @include('template/svgs/iconlisten.php') ?>

                                </span>

                            </li>

                            <?php } ?>

                        </ul>

                        <div class="flex justify-end mt-6">pagination</div>

                    </div>

                    <div id="tab-doc-detail-2" class="document-detail-content-items space-y-6">

                        <?php include "template/rate/item.php"; ?>

                        <?php include "template/comment/item.php"; ?>



                    </div>

                </div>

            </div>

        </div>

    </div>

    <div
        class="p-4 mt-6  lg:mt-[6.625rem] mb-[8.3125rem] bg-white rounded-[0.625rem] shadow-[0_0_15px_rgba(0,0,0,0.25)] space-y-6">

        <h3 class="text-[1.5rem] font-semibold">Sách liên quan </h3>

        <div class="flex flex-wrap -mx-3 gap-y-6">

            <?php for ($j = 0; $j < 9; $j++) { ?>

            <div class="w-full sm:w-1/2 2xl:w-1/3 px-3">

                <div class="item flex gap-3">

                    <a href="" class="w-[7.375rem] shrink-0">

                        <span
                            class="c-img block h-full pt-[134%] img__ shadow-[0_4px_10px_0_rgba(0,0,0,.12)] rounded-[5px] overflow-hidden">

                            <img src="theme/frontend/images/image5.png" alt="">

                        </span>

                    </a>

                    <div class="flex-col flex">

                        <a href="" class="line-clamp-2 font-semibold hover:text-color-v2 mb-2"
                            title="Cosmetic and clinical applications of botox and dermal fillers">

                            Cosmetic and clinical applications of botox and dermal fillers

                        </a>

                        <span class="block text-[0.75rem] mb-1.5">

                            Bởi: Nguyễn Quỳnh Trang

                        </span>

                        <div class="flex items-center justify-between mb-1.5">

                            <span class="text-[#E03535] font-semibold">

                                300.000 đ

                            </span>

                            <span class="text-[0.875rem] icon icon-star">

                                5.0

                            </span>

                        </div>

                        <div class="flex flex-wrap gap-2 mt-auto">

                            <a href="" title="Mua ngay"
                                class="flex-auto border border-color-v2 bg-color-v2 text-white rounded-[5px] py-1 px-4 text-center font-nunito font-semibold hover:bg-white hover:text-color-v2">

                                Mua ngay

                            </a>

                            <a href="" title="Thêm vào giỏ"
                                class="flex-auto border border-color-v2 text-color-v2 rounded-[5px] py-1 px-4 font-nunito font-semibold hover:bg-color-v2 hover:text-white icon-add-cart icon justify-center">

                                Thêm vào giỏ

                            </a>

                        </div>

                    </div>

                </div>

            </div>

            <?php } ?>

        </div>

    </div>



</div>

<?php include('footer.php'); ?>