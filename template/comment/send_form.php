<p class="text-[1.5rem] font-semibold mb-3">Đánh giá và bình luận</p>
<form class="mb-5" action="" method="post">
    <div class="flex mb-3 list-rate-rating">
        <?php for ($i = 0; $i < 5; $i++) { ?>
            <span class="item w-11 cursor-pointer">
                <?php @include("template/svgs/starrate.php") ?>
            </span>
        <?php } ?>
        <input type="radio" name="star" value="0" hidden />
    </div>
    <p class="text-[0.875rem] text-[#616161] mb-3">
        Đánh giá của bạn có thể giúp khách hàng chúng tôi có sự lựa chọn sản phẩm dễ dang hơn
    </p>
    <div class="relative mb-3">
        <textarea name="" id="" rows="4" class="w-full p-3 bg-[#f3f3f3] rounded-[5px] text-color-v5" placeholder="Bạn có thích khóa học không? Bạn sẽ làm gì sau khóa học?"></textarea>
        <label for="input-upload-file" class="cursor-pointer absolute right-4 bottom-4 w-6">
            <input type="file" hidden id="input-upload-file" accept="image/*" class="cursor-pointer" />
            <?php @include("template/svgs/imgupload.php") ?>
        </label>
    </div>
    <button type="submit" class="border rounded-full border-color-v2 bg-color-v2 text-white py-2.5 px-4 font-nunito font-semibold hover:bg-white hover:text-color-v2">
        Gửi đánh giá
    </button>
</form>