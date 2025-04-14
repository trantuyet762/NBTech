<?php include('header.php'); ?>

<section class="mb-14">
    <div class="container">
        <a class="flex items-center hover:text-color-v2 arrow-back my-4 lg:my-6 text-[1.125rem] lg:text-[1.5rem] font-semibold">
            <i class="fa-solid fa-arrow-left mr-2 text-[0.875em]"></i>
            Tổng quan về khóa học
        </a>
        <div class="flex flex-wrap -mx-3">
            <div class="px-3 w-full xl:w-[calc(100%-461px)] max-xl:mb-6">
                <div class="flex items-center justify-center space-y-4 rounded-[5px] shadow-[0px_4px_10px_0px_rgba(0,0,0,0.15)] mb-6">
                    <div class="w-full img__w-full">
                        <img src="theme/frontend/images/image30.png" alt="">
                    </div>
                    <div class="absolute flex cursor-pointer justify-center items-center bg-white rounded-full w-[min(82px,20%)] aspect-square">
                        <span class="w-1/4">
                            <?php @include("template/svgs/iconplay.php") ?>
                        </span>
                    </div>
                </div>
                <div class="p-4 bg-white shadow-[0_0_15px_rgba(0,0,0,0.25)] rounded-[10px] xl:hidden mb-6">
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
                                            <li class="flex justify-between course-program-items-play <?php echo ($i == 0 && $j == 0) ? 'active' : '' ?>">
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
                <div class="p-4 bg-white shadow-[0_0_15px_rgba(0,0,0,0.25)] rounded-[10px] space-y-2.5 mb-6">
                    <span class="font-semibold text-[1.25rem] text-black">Bài tập ứng dụng</span>
                    <div class="text-black s-content">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Debitis atque modi placeat repudiandae ad amet perspiciatis? Ab quo recusandae autem magnam exercitationem perferendis omnis ipsam voluptas? Illum libero quis autem.
                    </div>
                    <a href="" class="block text-color-v2 hover:text-color-v3 hv_stroke-color-v3" download="">
                        1.Bài tập ứng dụng <span class="ml-1 inline-block w-5 translate-y-1"><?php @include('template/svgs/downfile.php'); ?></span>
                    </a>
                    <form action="" method="POST">
                        <label for="upload_file" class="relative border border-dashed border-color-v2 rounded-[5px] h-48 justify-center items-center flex">
                            <input type="file" name="file" id="upload_file" class="absolute top-1/2 -translate-x-1/2 left-1/2 -translate-y-1/2 opacity-0" />
                            <span class="img_contain input-icon-down absolute top-1/2 -translate-x-1/2 left-1/2 -translate-y-1/2 w-[min(20%,115px)]">
                                <img src="theme/frontend/images/image36.png" alt="">
                            </span>
                        </label>
                        <button type="submit" class="w-fit block mx-auto mt-4 px-5 py-2 border border-color-v2 font-semibold rounded-full bg-color-v2 text-white font-nunito hover:bg-white hover:text-color-v2">
                            Gửi bài
                        </button>
                    </form>
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
            <div class="px-3 xl:w-[461px] max-xl:hidden">
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
                                            <li class="flex justify-between course-program-items-play <?php echo ($i == 0 && $j == 0) ? 'active' : '' ?>">
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