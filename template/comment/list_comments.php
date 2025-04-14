<?php for ($i = 1; $i <= 4; $i++) { ?>
    <div class="font-nunito view-comment-parent space-y-2 mb-3 pb-2 border-b border-[#D1D1D1]">
        <div class="flex items-center">
            <div class="size-8 shrink-0 overflow-hidden c-img rounded-full mr-2">
                <img src="theme/frontend/images/image12.png" alt="">
            </div>
            <span class="font-semibold mr-4">David TEO</span>
            <div class="flex items-center -translate-y-0.5 space-x-1">
                <span class="icon icon-star"></span>
                <span class="icon icon-star"></span>
                <span class="icon icon-star"></span>
                <span class="icon icon-star"></span>
                <span class="icon icon-star"></span>
            </div>
        </div>
        <div class="text-[0.875rem] s-content capitalize text-[#323232]">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium officia ullam atque optio nulla dolore veritatis, quis inventore, modi consequuntur eligendi repellendus incidunt, illo totam temporibus rem voluptas sit placeat.
        </div>
        <div class="flex items-center">
            <span class="text-color-v5 text-[12px]">10/8</span>
            <span class="w-[1px] h-4 ml-auto mr-2 bg-color-v2"></span>
            <span class="icon icon-comment text-[#545454] text-[0.875rem] mr-2">123</span>
            <span class="icon icon-like text-[#545454] text-[0.875rem] cursor-pointer">123</span>
        </div>
        <?php if ($i == 1) { ?>
            <div class="py-2 px-4 bg-[#f3f3f3] rounded-[5px] view-comment-child">
                <?php for ($k = 0; $k < 2; $k++) { ?>
                    <div class="mb-3 last:mb-0 space-y-2">
                        <div class="flex items-center">
                            <div class="size-8 c-img rounded-full shrink-0 overflow-hidden">
                                <img src="theme/frontend/images/image12.png" alt="">
                            </div>
                            <span class="ml-2 font-semibold ">David TEO</span>
                        </div>
                        <p class="text-[0.875rem] capitalize text-[#323232]">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate, sequi accusantium dignissimos vero voluptatibus cumque sed recusandae quam nulla laboriosam sint harum rerum! Nam sit at, quod porro quisquam unde.
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
<form action="" method="post" class="pt-2 flex items-center space-x-2">
    <input type="text" name="" placeholder="Viết gì đó" class="p-2 flex-1 font-nunito bg-[#eee] rounded-[5px]">
    <label for="input-upload" class="cursor-pointer w-6">
        <input type="file" hidden id="input-upload" class="cursor-pointer" />
        <?php @include("template/svgs/imgupload.php") ?>
    </label>
    <button type="submit" class="cursor-pointer w-6">
        <?php @include("template/svgs/iconsend.php") ?>
    </button>
</form>