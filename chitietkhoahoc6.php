<?php include('header.php'); ?>

<section class="mb-14">
    <div class="container">
        <a class="flex items-center hover:text-color-v2 arrow-back my-4 lg:my-6 text-[1.125rem] lg:text-[1.5rem] font-semibold">
            <i class="fa-solid fa-arrow-left mr-2 text-[0.875em]"></i>
            Tổng quan về khóa học
        </a>
        <div class="flex flex-wrap -mx-3">
            <div class="px-3 w-full xl:w-[calc(100%-461px)] max-xl:mb-6">
                <div class="p-4 bg-white shadow-[0_0_15px_rgba(0,0,0,0.25)] rounded-[10px] space-y-6 mb-6">
                    <div class="w-[min(250px,30%)] img__contain mx-auto">
                        <img src="theme/frontend/images/image37.png" alt="">
                    </div>
                    <span class="text-[#0F9408] text-[1.125rem] lg:text-[1.5rem] block text-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 lg:w-6 mr-1 inline-block" viewBox="0 0 24 25" fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M20.0489 6.49783C20.2739 6.72286 20.4002 7.02803 20.4002 7.34623C20.4002 7.66443 20.2739 7.96959 20.0489 8.19463L10.4489 17.7946C10.2239 18.0196 9.91869 18.146 9.60049 18.146C9.28229 18.146 8.97712 18.0196 8.75209 17.7946L3.95209 12.9946C3.7335 12.7683 3.61255 12.4652 3.61528 12.1505C3.61801 11.8359 3.74422 11.5349 3.96671 11.3124C4.1892 11.09 4.49017 10.9638 4.80481 10.961C5.11944 10.9583 5.42257 11.0792 5.64889 11.2978L9.60049 15.2494L18.3521 6.49783C18.5771 6.27286 18.8823 6.14648 19.2005 6.14648C19.5187 6.14648 19.8239 6.27286 20.0489 6.49783Z" fill="#0F9408" />
                        </svg> Hoàn thành khóa học
                    </span>
                    <a href="https://tuoitre.vn/chung-chi-ngoai-ngu-a-b-c-da-lac-hau-655903.htm" title="" data-fancybox class="icon icon-course-certificate font-nunito border border-color-v2 bg-color-v2 text-white font-semibold py-2 px-4 rounded-full w-fit mx-auto hover:bg-white hover:text-color-v2">
                        Chứng chỉ khóa học
                    </a>
                    <div class="sm:p-3 sm:rounded-[10px] sm:bg-[#EDF5FF]">
                        <span class="text-[1.25rem] font-semibold text-color-v1 mb-3">Nhận xét và đánh giá</span>
                        <div class="s-content">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Neque vel fugiat perspiciatis aperiam explicabo excepturi amet rem asperiores consequatur eaque. Beatae sed, quo voluptas est doloribus quod illo eius debitis!
                        </div>
                    </div>
                </div>
                <div class="px-3 p-4 bg-white shadow-[0_0_15px_rgba(0,0,0,0.25)] rounded-[10px] space-y-3">
                    <span class="text-[1.25rem] text-black font-semibold block">Tài liệu: </span>
                    <?php for ($i = 0; $i < 3; $i++) { ?>
                        <a href="" title="" download="" class="flex text-color-v2 hv_stroke-color-v3 hover:text-color-v3">
                            <?php echo ($i + 1) . ". " ?><span class="mr-2 ml-1 underline">Tài liệu tổng quan</span>
                            <span class="w-5 shrink-0 ml-auto">
                                <?php @include('template/svgs/downfile.php'); ?>
                            </span>
                        </a>
                    <?php } ?>
                </div>
            </div>
            <div class="px-3 w-full xl:w-[461px]">
                <div class="sticky top-[calc(var(--header-height)+1rem)] p-4 bg-white shadow-[0_0_15px_rgba(0,0,0,0.25)] rounded-[10px]">
                    <span class="block text-[1.25rem] text-black font-semibold pb-3 mb-4 border-b border-color-v5">
                        Chương trình khóa học
                    </span>
                    <div class="custom-scrollbar-grey max-h-[calc(100vh-10rem-var(--header-height))] overflow-y-auto">
                        <ul class="space-y-4 mr-1">
                            <?php for ($i = 0; $i < 6; $i++) {  ?>
                                <li class="tabline-items-course-program">
                                    <span class="block font-semibold icon icon-course-program cursor-pointer">
                                        Chương <?php echo $i + 1 ?>: Dẫn nhập
                                    </span>
                                    <ul class="pt-3 space-y-2" style="display: <?php echo $i == 0 ? '' : 'none' ?>">
                                        <?php for ($j = 0; $j < 4; $j++) { ?>
                                            <li class="flex justify-between course-program-items-play <?php echo ($i == 0) ? 'active-complete' : '' ?>">
                                                <a href="" title="" class="text-[0.875rem] title hover:text-color-v2">
                                                    Tổng quan về khóa học
                                                </a>
                                                <div class="flex items-center whitespace-nowrap ml-1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="mr-1 w-5 opacity-0" viewBox="0 0 22 22" fill="none">
                                                        <path d="M7 17V6H10V17H7ZM13 17V6H16V17H13Z" fill="#3D73B2" />
                                                    </svg>
                                                    12:00
                                                </div>
                                            </li>
                                        <?php } ?>
                                    </ul>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include('footer.php'); ?>