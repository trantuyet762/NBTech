<div class="lg:sticky lg:top-[calc(var(--header-height)+1rem)] bg-white lg:rounded-[0.625rem] p-4 sidebar-type">
    <span class="text-color-v2 text-center text-[1.25rem] font-semibold mb-6 block w-fit mx-auto pb-4 border-b-2 border-color-v2 relative before:size-2 before:border-2 before:border-color-v2 before:rounded-full before:absolute before:-bottom-[5px] before:bg-white before:left-1/2 before:-translate-x-1/2">Thể loại</span>
    <div class="menu-type">
        <ul>
            <?php foreach ($menu as $item) : ?>
                <li class="relative group mb-2 last:mb-0">
                    <a href="<?php echo $item['link'] ?>" class="w-full py-1 px-2 title-image" style="--data-course: url('<?php echo $item['icon-css'] ?>')">
                        <?php echo $item['name'] ?>
                    </a>
                    <ul class="ml-2 hidden">
                        <?php for ($i = 1; $i <= 4; $i++) : ?>
                            <li class="mb-2 last:mb-0">
                                <a href="" class="block py-1 px-2">
                                    <?php echo $item['name'] . ' ' . $i ?>
                                </a>
                            </li>
                        <?php endfor; ?>
                    </ul>
                    <span class="absolute top-0 right-0 cursor-pointer z-[1] btn-toggle-sub-menu">
                        <i class="fa-solid fa-chevron-down p-2 text-[0.875rem]"></i>
                    </span>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
    <div class="py-3 space-y-2 border-b-[0.5px] border-[#bbb]">
        <span class="font-semibold">Giá</span>
        <label for="price-free" class="flex py-1 space-x-2 items-center cursor-pointer">
            <input type="radio" id="price-free" name="price" hidden value="Miễn phí">
            <span class="size-4 border border-[#979797] bg-white checked"></span>
            <span>Miễn phí</span>
        </label>
        <label for="price-low" class="flex py-1 space-x-2 items-center cursor-pointer">
            <input type="radio" id="price-low" name="price" hidden value="Thấp nhất">
            <span class="size-4 border border-[#979797] bg-white checked"></span>
            <span>Thấp nhất</span>
        </label>
        <label for="price-high" class="flex py-1 space-x-2 items-center cursor-pointer">
            <input type="radio" id="price-high" name="price" hidden value="Cao nhất">
            <span class="size-4 border border-[#979797] bg-white checked"></span>
            <span>Cao nhất</span>
        </label>
        <label for="price-0-200" class="flex py-1 space-x-2 items-center cursor-pointer">
            <input type="radio" id="price-0-200" name="price" hidden value="0 - 200.000đ">
            <span class="size-4 border border-[#979797] bg-white checked"></span>
            <span>0 - 200.000đ</span>
        </label>
        <label for="price-200-500" class="flex py-1 space-x-2 items-center cursor-pointer">
            <input type="radio" id="price-200-500" name="price" hidden value="200.00đ - 500.000đ">
            <span class="size-4 border border-[#979797] bg-white checked"></span>
            <span>200.00đ - 500.000đ</span>
        </label>
        <label for="price-500-1000" class="flex py-1 space-x-2 items-center cursor-pointer">
            <input type="radio" id="price-500-1000" name="price" hidden value="500.000đ - 1.000.000đ">
            <span class="size-4 border border-[#979797] bg-white checked"></span>
            <span>500.000đ - 1.000.000đ</span>
        </label>
    </div>
    <div class="pt-3 space-y-2">
        <p class="font-semibold">Tác giả</p>
        <select name="" id=""
            class="p-2 border border-[#b7bdc6] rounded-[0.3125rem] w-full text-[12px] text-[#616161] font-nunito">
            <option value="">Nguyễn Văn A</option>
            <option value="">Nguyễn Văn B</option>
            <option value="">Nguyễn Văn C</option>
            <option value="">Nguyễn Văn D</option>
        </select>
    </div>
</div>
<div class="bg-layout-sidebar fixed inset-y-0 right-0 lg:hidden bg-black/50 w-full z-[100]"></div>

<i class="fa-solid fa-sliders lg:hidden fixed top-[20vh] right-6 size-10 rounded-full bg-white flex items-center justify-center cursor-pointer z-50 shadow-[rgba(0,0,0,0.35)_0px_5px_15px] btn-toggle-sidebar"></i>