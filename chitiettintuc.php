<?php include "header.php"; ?>

<?php include "template/breadcrumb.php"; ?>

<section class="news-detail mb-[3.75rem]">
    <div class="container">
        <div class="flex flex-col lg:flex-row  gap-6 justify-between">
            <div class="lg:w-2/3 space-y-6">
                <div class="p-4 pb-8 bg-white shadow-[0_0_15px_rgba(0,0,0,0.25)] rounded-[0.625rem]">
                    <h1 class="font-nunito text-color-v1 text-[1.25rem] sm:text-[1.5rem] font-bold uppercase mb-4">
                        Hội thảo: Tháo gỡ vướng mắc Pháp luật lao động trong tuyển dụng và sử dụng lao động
                    </h1>
                    <div class="flex flex-wrap items-center gap-y-2 gap-x-4 mb-6">
                        <p class="text-[0.875rem] line-clamp-2">
                            Bởi: <span class="font-semibold ">Nguyễn Quỳnh Trang</span>
                        </p>
                        <span class="text-[#949494] icon news-detail-date">
                            26/05/2024
                        </span>
                        <span class="text-[#949494] icon icon-eye">
                            1234
                        </span>
                        <span class="text-[#a8a8a8] icon icon-tym text-[0.875rem] md:ml-auto">
                            234 yêu thích
                        </span>
                    </div>
                    <div class="s-content">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque delectus architecto culpa similique asperiores rerum maiores unde esse cum distinctio, at quasi, iste minus quos cupiditate hic quis. Ducimus, consequatur!
                    </div>
                </div>

                <div class="flex justify-between items-center flex-wrap gap-y-2 gap-x-4">
                    <div class="flex flex-wrap gap-x-3 gap-y-2">
                        <span class="text-black">Tag:</span>
                        <?php for ($i = 0; $i < 3; $i++) { ?>
                            <a href="#" alt="" class="text-[0.875rem] bg-white rounded-[3.625rem] px-4 py-1 shadow-[0_0_15px_rgba(0,0,0,0.25)] hover:text-white hover:bg-color-v2">
                                Tư vấn
                            </a>
                        <?php } ?>
                    </div>
                    <a href="#" title="" class="text-color-v3 text-[0.875rem] icon icon-report">Report</a>
                </div>

                <div class="flex justify-between items-center bg-white rounded-[0.625rem] drop-shadow-[0_0_15px_rgba(0,0,0,0.25)] px-4 py-[0.6875rem]">
                    <a href="#" title="" class="icon-next-news icon text-color-v2 hover:text-color-v3 duration-200 transition-all">
                        Trở lại tin tổng hợp
                    </a>
                    <div class="flex items-center">
                        <span class="text-black mr-4">Chia sẻ:</span>
                        <a href="#" rel="nofollow" title="Facebook" class="w-7 mr-2" title="">
                            <svg viewBox="0 0 28 28" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M25.6668 14.0007C25.6668 7.56065 20.4402 2.33398 14.0002 2.33398C7.56016 2.33398 2.3335 7.56065 2.3335 14.0007C2.3335 19.6473 6.34683 24.349 11.6668 25.434V17.5007H9.3335V14.0007H11.6668V11.084C11.6668 8.83232 13.4985 7.00065 15.7502 7.00065H18.6668V10.5007H16.3335C15.6918 10.5007 15.1668 11.0257 15.1668 11.6673V14.0007H18.6668V17.5007H15.1668V25.609C21.0585 25.0257 25.6668 20.0557 25.6668 14.0007Z"
                                    fill="#1877F2" />
                            </svg>
                        </a>
                        <a href="#" rel="nofollow" title="Zalo" class="w-7 img__contain mr-2">
                            <img src="theme/frontend/images/zalo.png" alt="">
                        </a>
                        <a href="#" rel="nofollow" title="Twitter" class="w-7">
                            <svg viewBox="0 0 28 28" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect width="28" height="28" rx="14" fill="black" />
                                <path
                                    d="M18.6536 6.6875H21.1346L15.7144 12.8825L22.0909 21.3125H17.0974L13.1869 16.1997L8.71238 21.3125H6.22988L12.0274 14.6862L5.91113 6.6875H11.0299L14.5646 11.3608L18.6536 6.6875ZM17.7829 19.8275H19.1576L10.2836 8.0945H8.80838L17.7829 19.8275Z"
                                    fill="white" />
                            </svg>

                        </a>
                    </div>
                </div>

                <!-- Comment -->
                <div class="bg-white drop-shadow-[0_0_15px_rgba(0,0,0,0.25)] rounded-[0.625rem] px-4 py-6 space-y-6">
                    <span class="text-[1.5rem] font-semibold block">Bình luận bài viết</span>
                    <?php @include "template/comment/list_comments.php"; ?>
                </div>
            </div>
            <div class="lg:w-1/3">
                <div class="sticky top-[calc(var(--header-height)+1rem)]">
                    <div class="font-nunito p-4 pb-6 bg-white shadow-[0_0_15px_rgba(0,0,0,0.25)] rounded-[0.625rem] mb-4">
                        <p class="text-color-v1 text-[1.5rem] font-bold text-center mb-4">Danh mục tin</p>
                        <ul class="font-medium text-[1.125rem] space-y-4 text-color-v2">
                            <?php foreach (['Tin sự kiện', 'Tin tư vấn', 'Kinh nghiệm hay'] as $key => $item) { ?>
                                <li>
                                    <a href="#" title="" class="block hover:text-color-v3"><?= $key + 1 . ". " . $item ?></a>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>

                    <div class="px-3 pt-4 pb-6 bg-white shadow-[0_0_15px_rgba(0,0,0,0.25)] rounded-[0.625rem]">
                        <h3 class="text-color-v1 text-[1.5rem] font-bold font-nunito text-center mb-4">Tin liên quan</h3>
                        <?php for ($i = 0; $i < 5; $i++) { ?>
                            <div class="flex gap-x-2 mb-3 last:mb-0">
                                <a href="#" title="" class="img__ c-img shrink-0 rounded-[5px] w-[min(181px,40%)] aspect-[7/5]">
                                    <img src="theme/frontend/images/new-relate.png" alt="">
                                </a>
                                <div class="space-y-2">
                                    <a href="#" title="" class="font-semibold line-clamp-2 hover:text-color-v2">
                                        Tiêu đề tin tức tối đa 2 dòng nếu quá hai dòng tự động rút gọn
                                    </a>
                                    <span class="line-clamp-2 text-[0.875rem] text-[#6d6d6d]">
                                        Lorem ipsum dolor sit amet consectetur. Senectus sagittis sed laoreet lacus
                                        pellentesque.
                                    </span>
                                    <span class="text-[0.875rem] text-[#6d6d6d] block">12/02/2024</span>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include "footer.php"; ?>