<div class="space-y-3">
    <h3 class="text-[1.5rem] font-semibold">Đánh giá và bình luận</h3>
    <div class="flex gap-x-[0.375rem]">
        <?php for ($i = 0; $i < 5; $i++) { ?>
            <input type="radio" name="star" id="star-<?php echo $i; ?>" class="hidden" />
            <label for="star-<?php echo $i; ?>" class="users-star-rate w-[2.875rem]">
                <?php @include("template/svgs/starrate.php") ?>
            </label>
        <?php } ?>
    </div>
    <p class="text-[0.875rem] text-[#616161]">
        Đánh giá của bạn có thể giúp khách hàng chúng tôi có sự lựa chọn sản phẩm dễ dang hơn
    </p>
    <form class="relative" action="" method="post">
        <textarea name="" id="" rows="4"
            class="w-full pt-3 pl-3 pr-4 pb-4 bg-[#f3f3f3] rounded-[0.3125rem] text-color-v5">
        </textarea>
        <label for="input-upload-img" class="cursor-pointer absolute right-4 bottom-4 w-6">
            <input type="file" hidden id="input-upload-img" class="cursor-pointer" />
            <?php @include("template/svgs/imgupload.php") ?>
        </label>
    </form>
    <button
        class="mb-3 border rounded-[3.3125rem] border-color-v2 bg-color-v2 text-white py-3 px-4 font-nunito font-semibold transition-all duration-200 hover:bg-white hover:text-color-v2">
        Gửi đánh giá
    </button>
    <div class="pt-3 space-y-2">
        <?php for ($i = 1; $i <= 4; $i++) { ?>
            <div class="font-nunito space-y-2">
                <div class="flex items-center">
                    <div class="size-8 shrink-0 overflow-hidden c-img rounded-full mr-2">
                        <img src="theme/frontend/images/avt.png" alt="">
                    </div>
                    <span class="font-semibold mr-4">David TEO</span>
                    <div class="star-comment">
                        <?php for ($j = 0; $j < $i; $j++) { ?>
                            <span></span>
                        <?php } ?>
                    </div>
                </div>
                <div class="text-[0.875rem] s-content capitalize text-[#323232]">
                    Lorem ipsum dolor sit amet constetur. Purus elit coequat posue feugat euismod sed ac.
                    Ipsum
                    vitae sed posuere.
                </div>
                <div class="flex items-center">
                    <span class="text-color-v5 text-[12px]">10/8</span>
                    <span class="w-[0.5px] h-4 ml-auto mr-2 bg-color-v2"></span>
                    <span class="icon icon-comment text-[#545454] text-[0.875rem] mr-2">123</span>
                    <span class="icon icon-like text-[#545454] text-[0.875rem] cursor-pointer">123</span>
                </div>
                <?php if ($i == 1) { ?>
                    <div class="py-2 px-4 bg-[#f3f3f3] space-y-2 rounded-[5px]">
                        <?php for ($k = 0; $k < 2; $k++) { ?>
                            <div>
                                <div class="flex items-center">
                                    <div class="size-8 c-img rounded-full shrink-0 overflow-hidden">
                                        <img src="theme/frontend/images/avt2.png" alt="">
                                    </div>
                                    <span class="ml-2 font-semibold ">David TEO</span>
                                </div>
                                <p class="text-[0.875rem] capitalize text-[#323232]">
                                    Lorem ipsum dolor sit amet constetur. Purus elit coequat posue feugat euismod sed
                                    ac.
                                    Ipsum
                                    vitae sed posuere.
                                </p>
                                <div class="flex items-center">
                                    <span class="text-color-v5 text-[12px]">10/8</span>
                                    <span class="icon icon-comment text-[#545454] text-[0.875rem] mr-2 ml-auto">123</span>
                                    <span class="icon icon-like text-[#545454] text-[0.875rem] cursor-pointer">123</span>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                <?php } ?>
            </div>
        <?php } ?>
        <form action="" method="post" class="pt-2 flex items-center gap-x-2">
            <input type="text" name="" placeholder="Viết gì đó"
                class="p-2 flex-1 text-[0.875rem] text-[#7c7c7c] bg-[#eee] rounded-[0.3125rem]">
            <label for="input-upload" class="cursor-pointer w-6">
                <input type="file" hidden id="input-upload" class="cursor-pointer" />
                <?php @include("template/svgs/imgupload.php") ?>
            </label>
            <button type="submit" class="cursor-pointer w-6">
                <?php @include("template/svgs/iconsend.php") ?>
            </button>
        </form>
    </div>
</div>