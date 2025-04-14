<?php include "header.php"; ?>

<section class="ourse-detail">

    <div class=" w-full bg-cover bg-right bg-no-repeat"

        style="background-image: url(theme/frontend/images/bg-course.png)">

        <div class="container ">

            <div class="py-6 lg:w-1/2 text-white">breadcrumbs</div>

            <div class="lg:w-1class="-y-4 pb-8">

                <h1 class="text-white text-[1.5rem] font-semibold">

                    Khóa Đào Tạo - C&B Nghiệp Vụ Tiền Lương Và Bảo Hiểm Xã Hội Gen 121

                </h1>

                <div class="flex items-center flex-wrap gap-y-2 gap-x-6 text-[#949494]">

                    <div class="flex gap-x-2 pr-6 border-r border-r-[#949494] items-center">

                        <span class=" flex gap-x-2 items-center">

                            5.0

                            <span class="flex gap-x-1 ">

                        class="<?php for ($i = 0; $i < 5; $i++) { ?>

                                <span class="w-5">

                                    <?php @include("template/svgs/iconstar.php") ?>

                                </span>

                                <?php } ?>

                            </span>

                            <span class="">(123 đánh giá)</span>

                    </div>

                    <span class="pr-6 border-r border-r-[#949494] icon news-detail-date">26/05/2024</span>

                    <span class="pr-6 border-r border-r-[#949494] icon icon-eye">324 người xem</span>



                </div>

                <div class="flex flex-wrap gap-2">

                    <?php for ($i = 0; $i < 3; $i++) { ?>

                    <a href="" title=""

                        class=" block py-2 px-3  bg-[#FFFFFF33] rounded-[3.625rem] text-[0.875rem] text-white transition-all duration-200  hover:bg-color-v2  ">

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

    </div>

    <div class="container mt-6 mb-[4.375rem]">

        <div class="flex max-lg:flex-col -mx-4  ">

            <div class="lg:w-[calc(100%-285px)] xl:w-[calc(100%-494px)]  space-y-6 px-4 max-lg:mb-8">

                <div

                    class="p-4 rounded-[0.625rem] bg-white module-tabs-document-detail drop-shadow-[0_0_15px_rgba(0,0,0,0.25)]">

                    <?php $list_doc_detail = ['Giới thiệu', 'Chương trình khóa học'];

                    ?>

                    <ul class="flex gap-x-8 tab-document-detail-container relative overflow-x-auto">

                        <?php foreach ($list_doc_detail as $key => $item) { ?>

                        <li class="tab-document-detail-items tab-link text-[1.125rem] text-color-v5 pb-2 font-semibold  transition-all cursor-pointer duration-300 whitespace-nowrap <?php echo $key == 0 ? 'active' : ''; ?>"

                            data-electronic="tab-doc-detail-<?php echo $key; ?>">

                            <?php echo $item; ?>

                        </li>

                        <span class="underline-tab-doc-detail"></span>

                        <?php } ?>

                    </ul>



                    <div class="document-detail-content-box pt-2 border-t border-t-[#ddd]">



                        <div id="tab-doc-detail-0" class="document-detail-content-items active">

                            Chưa nắm được quy chế lương, hệ thống thang bảng lương Chưa biết cách kí kết các hợp đồng

                            sao cho hợp lí, hạn chế các rủi ro pháp lí, xử lí quan hệ lao động Chưa nắm được công tác

                            bảo hiểm xã hội trong doanh nghiệp: tổng quan BHXH trong doanh nghiệp, tối ưu các khoản phải

                            đóng, thủ tục đối chiếu tăng, giảm, điều chỉnh, giải quyết chế độ ốm đau, thai sản, sổ thẻ

                            Chưa biết tổng quan và phương pháp tính thuế, quyết toán thuế thu nhập cá nhân Chưa biết xây

                            dựng, thiết kế bảng chấm công, bảng lương logic, tự động và tối ưu Kĩ năng excel chỉ ở mức

                            hiểu, chưa áp dụng được trong thực tế công việc

                        </div>

                        <div id="tab-doc-detail-1" class="document-detail-content-items">

                            <?php $course_program = [

                                [

                                    'id' => 1,

                                    'name' => 'Chương I: Dẫn nhập',

                                    'link' => '',

                                    'content' => [

                                        'title' => [

                                            'Tổng quan về khoá học 1',

                                            'Tổng quan về khoá học 2',

                                            'Tổng quan về khoá học 3',



                                        ],

                                        'content_item' => [

                                            'Lorem ipsum dolor sit amet consectetur. Viverra sed fermentum enim orci morbi. Donec porttitor iaculis quisque ipsum viverra 1.',

                                            'Lorem ipsum dolor sit amet consectetur. Viverra sed fermentum enim orci morbi. Donec porttitor iaculis quisque ipsum viverra 2.',

                                            'Lorem ipsum dolor sit amet consectetur. Viverra sed fermentum enim orci morbi. Donec porttitor iaculis quisque ipsum viverra 3.',

                                        ],

                                        'img_course_item' => [

                                            'theme/frontend/images/image34.png',

                                            'theme/frontend/images/image34.png',

                                            'theme/frontend/images/image34.png',

                                        ],

                                        'time_item' => [

                                            '10:00',

                                            '12:00',

                                            '20:00',

                                        ]

                                    ]

                                ],

                                [

                                    'id' => 2,

                                    'name' => 'Chương II: Tổng quan về hệ thống lương 3P',
class="
                                    'link' => '',

                        class="    'content' => [

                                        'title' => [

                                            'Tổng quan về khoá học 1',

                                            'Tổng quan về khoá học 2',

                                            'Tổng quan về khoá học 3',



                                        ],

                                        'content_item' => [

                                            'Lorem ipsum dolor sit amet consectetur. Viverra sed fermentum enim orci morbi. Donec porttitor iaculis quisque ipsum viverra 1.',
class="
                                            'Lorem ipsum dolor sit amet consectetur. Viverra sed fermentum enim orci morbi. Donec porttitor iaculis quisque ipsum viverra 2.',

                                            'Lorem ipsum dolor sit amet consectetur. Viverra sed fermentum enim orci morbi. Donec porttitor iaculis quisque ipsum viverra 3.',

                                        ],

                                        'img_course_item' => [

                                            'theme/frontend/images/image34.png',

                                            'theme/frontend/images/image34.png',

                                            'theme/frontend/images/image34.png',

                                        ],

                                        'time_item' => [

                                          class="',

                                            '12:00',

                                            '20:00',

                                        ]

                                    ]

                                ],

                                [

                                    'id' => 3,

                                    'name' => 'Chương III: Quy trình triển khai lương 3P',

                                    'link' => '',

                                    'content' => [

                                        'title' => [

                                            'Tổng quan về khoá học 1',

                                            'Tổng quan về khoá học 2',

                                            'Tổng quan về khoá học 3',



                                        ],

                                        'content_item' => [

                                            'Lorem ipsum dolor sit amet consectetur. Viverra sed fermentum enim orci morbi. Donec porttitor iaculis quisque ipsum viverra 1.',

                                            'Lorem ipsum dolor sit amet consectetur. Viverra sed fermentum enim orci morbi. Donec porttitor iaculis quisque ipsum viverra 2.',

                                            'Lorem ipsum dolor sit amet consectetur. Viverra sed fermentum enim orci morbi. Donec porttitor iaculis quisque ipsum viverra 3.',

                                        ],

                                        'img_course_item' => [

                                            'theme/frontend/images/image34.png',

                                            'theme/frontend/images/image34.png',

                                            'theme/frontend/images/image34.png',

                                        ],

                                        'time_item' => [

                                            '10:00',

                                            '12:00',

                                            '20:00',

                                        ]

                                    ]

                                ],

                            ];

                            ?>

                            <ul>



                                <?php foreach ($course_program as $item) : ?>

                                <li class="tabline-items-course-program">

                                    <span class="font-semibold icon icon-course-program">

                                        <?php echo $item['name'] ?>

                                    </span>

                                    <ul class="mt-2">

                                        <?php for ($i = 0; $i < count($item['content']['title']); $i++) : ?>

                                        <li class="mb-2">

                                            <div class="flex items-center gap-2">

                                                <div

                                                    class="w-[min(149px_,30%)] c-img img__ shrink-0 rounded-[5px] pt-[20%] xs:pt-[13%]">

                                                    <img src="<?php echo $item['content']['img_course_item'][$i] ?>"

                                                        alt="">

                                                </div>

                                                <div class="flex justify-between items-center">

                                                    <div class="xl:mr-14 mr-5">

                                                        <span

                                                            class="line-clamp-1 font-semibold hover:text-color-v2 mb-2">

                                                            <?php echo $item['content']['title'][$i] ?>

                                                        </span>

                                                        <p class="text-[0.875rem] line-clamp-2 ">

                                                            <?php echo $item['content']['content_item'][$i] ?>

                                                        </p>

                                                    </div>

                                                    <span

                                                        class="text-[0.875rem] font-semibold mr-2 <?php echo ($i === 0 && $item['id'] === 1) ? 'text-[#0F9408]' : 'text-color-main' ?>">

                                                        <?php echo $item['content']['time_item'][$i] ?>

                                                    </span>

                                                    <span class="min-w-6 text-[0.875rem] text-[#0F9408]">

                                                        <?php

                                                                if ($i === 0 && $item['id'] === 1) {

                                                                    echo 'Free';

                                                                } else {

                                                                    include('template/svgs/lock.php');

                                                                }

                                                                ?>

                                                    </span>



                                                </div>

                                            </div>

                                        </li>

                                        <?php endfor; ?>

                                    </ul>

                                </li>

                                <?php endforeach; ?>

                            </ul>



                        </div>

                    </div>

                </div>

                <div class="bg-white px-8 py-6 rounded-[0.625rem] drop-shadow-[0_0_15px_rgba(0,0,0,0.25)]">

                    <?php @include "template/rate/item.php"; ?>

                </div>

                <div class="bg-white px-4 py-6 rounded-[0.625rem] drop-shadow-[0_0_15px_rgba(0,0,0,0.25)]">

                    <?php @include "template/comment/item.php"; ?>

                </div>

            </div>

            <div class=" lg:mt-[-16rem] px-4 lg:w-[543px]">

                <div class="lg:sticky md:top-20  space-y-6">

                    <div

                        class="  space-y-4 p-4 pb-6 bg-white rounded-[0.625rem] drop-shadow-[0_0_15px_rgba(0,0,0,0.25)]">

                        <div class="flex flex-col items-center justify-center py-[82px] space-y-4"

                            style="background: url('theme/frontend/images/image30.png') center no-repeat;">

                            <button

                                class="flex cursor-pointer justify-center items-center bg-white rounded-full w-[82px] aspect-square">

                                <span class="w-6 aspect-square">

                                    <?php @include("template/svgs/iconplay.php") ?>

                                </span>

                            </button>

                            <span class="text-[1.125rem] text-white font-bold">Xem trailer khóa học này</span>

                        </div>



                        <div class="flex ">

                            <p class="text-[2rem] mr-3 text-[#e03535] font-bold flex items-center leading-none"><span

                                    class="underline  text-[1rem] mr-1 pb-[0.1875rem]">đ</span> 250.000

                            </p>

                            <p class="text-[1.125rem] mr-3 text-color-v5 flex items-center mt-auto ">

                                <span class=" underline text-[0.75rem] mr-1 pb-[0.1875rem]">đ</span>

                                <span class="line-through">250.000</span>

                            </p>

                            <span

                                class="py-[0.125rem] px-[0.375rem] bg-[#EFC22E] rounded-[5px] text-center text-color-main font-semibold text-[0.75rem] mt-auto mb-1">-68%

                            </span>

                        </div>

                        <a href="" title=""

                            class="block bg-color-v2 w-full p-4 text-center rounded-[5px] text-white text-[1.125rem] font-semibold font-nunito border  border-color-v2 hover:bg-white hover:text-color-v2">

                            Mua lẻ

                        </a>

                        <button

                            class="cursor-pointer w-full border border-color-v2 p-4 text-center rounded-[5px] text-color-v2 text-[1.125rem] font-semibold font-nunito hover:text-white hover:bg-color-v2">

                            Thêm vào giỏ hàng

                        </button>

                        <div class="space-y-3">

                            <span class="text-[1.125rem] font-semibold">Khóa học này bao gồm:</span>

                            <div class="flex flex-wrap font-semibold gap-y-3">

                                <div class="mr-3 ">

                                    <span class="  icon icon-star-course mb-3">

                                        20 giờ video theo yêu cầu

                                    </span>

                                    <span class="icon icon-star-course ">

                                        Truy cập di động & website

                                    </span>

                                </div>

                                <div>

                                    <span class="icon icon-star-course mb-3">

                                        Hỗ trợ 24/7

                                    </span>



                                    <span class="icon icon-star-course ">

                                        Tài liệu đi kèm

                                    </span>

                                </div>



                            </div>

                        </div>

                    </div>

                    <div class="p-4 bg-white rounded-[0.625rem] drop-shadow-[0_0_15px_rgba(0,0,0,0.25)]">

                        <div class="flex items-center pb-4 border-b-[0.5px] border-b-[#d1d1d1] ">

                            <div class="w-[83px] aspect-square rounded-[5px] mr-3">

                                <img src="theme/frontend/images/image33.png" alt="">

                            </div>

                            <div class="text-black">

                                <p>Giảng viên: <span class="font-semibold mb-3">Nguyễn Thanh Nam</span></p>

                                <p>Chức năng: <span class="font-semibold">Thạc sĩ</span></p>

                            </div>

                        </div>

                        <div class="pt-4 text-black">

                            <span class="font-semibold">Tóm tắt</span>

                            <div class="s-content">

                                s-content

                            </div>

                        </div>

                    </div>

                </div>



            </div>

        </div>

    </div>

</section>

<?php include "footer.php"; ?>