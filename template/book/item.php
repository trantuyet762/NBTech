<?php global $data; ?>
<div class="item flex gap-3">
    <div class="w-[7.375rem] shrink-0 relative rounded-[5px] overflow-hidden">
        <a href="" class="c-img block h-full pt-[134%] shadow-[0_4px_10px_0_rgba(0,0,0,.12)]">
            <img src="theme/frontend/images/image5.png" alt="">
        </a>
        <button class="w-6 absolute bottom-2 right-2 z-[1]">
            <?php include "template/svgs/play-review.php"; ?>
        </button>
        <?php if (isset($data['combo'])) : ?>
            <span class="bg-[#EEB13E] text-white py-[2px] text-[12px] px-3 rounded-br-[10px] block absolute top-0 left-0 z-[1]">
                Combo
            </span>
        <?php endif; ?>
    </div>
    <div class="flex-col flex">
        <a href="" class="line-clamp-2 font-semibold hover:text-color-v2 mb-2" title="Cosmetic and clinical applications of botox and dermal fillers">
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
            <a href="" title="Mua ngay" class="flex-auto border border-color-v2 bg-color-v2 text-white rounded-[5px] p-1 text-center font-nunito font-semibold hover:bg-white hover:text-color-v2">
                Mua ngay
            </a>
            <a href="" title="Thêm vào giỏ" class="flex-auto border border-color-v2 text-color-v2 rounded-[5px] p-1 font-nunito font-semibold hover:bg-color-v2 hover:text-white icon-add-cart icon justify-center">
                Thêm vào giỏ
            </a>
        </div>
    </div>
</div>