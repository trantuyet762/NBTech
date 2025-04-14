<?php $key; ?>
<div class="item flex-flex-col <?php echo $key == 0 ? 'swiper-slide' : ''; ?>">
    <a href="" class="c-img shrink-0 pt-[59%] img__ shadow-[0_4px_10px_0_rgba(0,0,0,.12)] rounded-[0.3125rem]">
        <img src="theme/frontend/images/image3.png" alt="">
        <span class="text-[12px] text-white py-1 px-3 rounded-full bg-color-v1 z-[1] absolute top-2 right-2">Kinh tế</span>
    </a>
    <a href="" class="text-[1.125rem] font-semibold line-clamp-2 mt-3  transition-colors duration-200 hover:text-color-v2">
        Cosmetic and clinical applications of botox and dermal fillers
    </a>
    <span class="text-[0.75rem] line-clamp-1  mt-2">
        Bởi: Nguyễn Quỳnh Trang
    </span>
    <div class="flex justify-between mt-2">
        <?php if ($key % 2 == 0) : ?>
            <span class="text-[#E03535] font-semibold text-[1.125rem]">
                300.000 đ
            </span>
        <?php else : ?>
            <span class="text-[#0F9408] font-semibold text-[1.125rem]">
                Free
            </span>
        <?php endif; ?>
        <span class="text-[0.875rem]  icon icon-star">5.0</span>
    </div>

    <div class="flex flex-wrap justify-between gap-2 text-color-v5 text-[0.75rem] mt-2">
        <span class="icon icon-clock">123 phút</span>
        <span class="icon icon-video">15 video</span>
        <span class="icon icon-lesson">3 bài giảng</span>
        <span>345 đã mua </span>
    </div>
    <div class="flex flex-wrap gap-2 mt-3">
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