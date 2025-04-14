<?php include "header.php"; ?>
<?php @include('template/breadcrumb.php') ?>

<section class="contact">
    <div class="container">
        <div class="sm:p-4 md:p-8 md:pt-6 mb-8 sm:bg-white drop-shadow-[0_0_15px_rgba(0,0,0,0.25)] rounded-[0.625rem]">
            <div class="flex flex-wrap -mx-3 gap-y-6">
                <div class="w-full lg:w-3/5 xl:w-2/3 px-3">
                    <div class="bg-white sm:bg-[#f3f3f3] rounded-[0.3125rem] p-4">
                        <h3 class="text-color-v1 text-[1.5rem] text-center font-bold uppercase mb-6">Liên hệ tư vấn</h3>
                        <form class="flex flex-wrap -mx-2 gap-y-4">
                            <div class="w-full xl:w-1/3 px-2">
                                <input type="text" placeholder="Họ và tên " name="" required
                                    class="px-4 py-3.5 block w-full bg-white border border-[#ddd] rounded-[0.3125rem] text-[#6b6c6f]">
                            </div>
                            <div class="w-full xl:w-1/3 px-2">
                                <input type="text" placeholder="Số điện thoại " name="" required
                                    class="px-4 py-3.5 block w-full bg-white border border-[#ddd] rounded-[0.3125rem] text-[#6b6c6f]">
                            </div>
                            <div class="w-full xl:w-1/3 px-2">
                                <input type="text" placeholder="Email " name="" required
                                    class="px-4 py-3.5 block w-full bg-white border border-[#ddd] rounded-[0.3125rem] text-[#6b6c6f]">
                            </div>
                            <div class="w-full px-2">
                                <textarea name="" rows="5" placeholder="Nội dung" required class="px-4 py-3.5 block w-full bg-white border border-[#ddd] rounded-[0.3125rem] text-[#6b6c6f]"></textarea>
                            </div>
                            <button type="submit" class="py-2.5 mx-auto px-6 text-white border border-color-v2 bg-color-v2 hover:bg-white hover:text-color-v2 duration-300 transition-all font-semibold font-nunito rounded-[0.3125rem]">
                                Liên hệ ngay
                            </button>
                        </form>
                    </div>
                </div>
                <div class="w-full lg:w-2/5 xl:w-1/3 px-3 space-y-6">
                    <div class="p-2 sm:p-4 bg-[#3D73B21A] rounded-[0.3125rem] text-[1.125rem] flex items-center gap-x-2 break-all">
                        <span class="w-10 shrink-0 map-form-contact">
                            <?php @include('template/svgs/map.php') ?>
                        </span>
                        <span>
                            <strong>Địa chỉ:</strong>
                            123, đường Điện Biên Phủ, Quận 1, Tp. Hồ Chí Minh
                        </span>
                    </div>
                    <a href="" class="p-2 sm:p-4 bg-[#3D73B21A] rounded-[0.3125rem] text-[1.125rem] flex items-center gap-x-2 hover:bg-color-v2 hv_path-white hover:text-white break-all">
                        <span class="w-10 shrink-0 email-form-contact">
                            <?php @include('template/svgs/emailform.php') ?>
                        </span>
                        <span>
                            <strong>Email:</strong>
                            trituenhanban@gmail.com
                        </span>
                    </a>
                    <a href="" class="p-2 sm:p-4 bg-[#3D73B21A] rounded-[0.3125rem] text-[1.125rem] flex items-center gap-x-2 hover:bg-color-v2 hv_path-white hover:text-white break-all">
                        <span class="w-10 shrink-0 phone-form-contact">
                            <?php @include('template/svgs/phoneform.php') ?>
                        </span>
                        <span>
                            <strong>Hotline:</strong>
                            +84 123 3431
                        </span>
                    </a>
                    <div class="flex flex-wrap gap-x-4 items-center">
                        <span class="text-[1.125rem] text-black font-semibold">Xã hội:</span>
                        <a href="#" title="" rel="nofollow" class="hv_path-color-v3 w-10 xl:w-14">
                            <?php @include('template/svgs/google.php') ?>
                        </a>
                        <a href="#" title="" rel="nofollow" class="hv_path-color-v3 w-10 xl:w-14">
                            <?php @include('template/svgs/youtubeform.php') ?>
                        </a>
                        <a href="#" title="" rel="nofollow" class="hv_path-color-v3 w-10 xl:w-14">
                            <?php @include('template/svgs/linkedin.php') ?>
                        </a>
                        <a href="#" title="" rel="nofollow" class="hv_path-color-v3 w-10 xl:w-14">
                            <?php @include('template/svgs/fbform.php') ?>
                        </a>
                    </div>
                </div>
                <div class="w-full px-3">
                    <div id="map" data-map="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.0520566593646!2d105.74367237612887!3d21.03060298771367!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313454d31c655555%3A0xee720f73c8f7985f!2zVGVjaDVTIC0gTOG6rXAgdHLDrG5oIHBo4bqnbiBt4buBbSB2w6AgdGhp4bq_dCBr4bq_IHdlYnNpdGUsIE1LVCBPbmxpbmU!5e0!3m2!1svi!2s!4v1734605757067!5m2!1svi!2s"></div>
                </div>
            </div>
        </div>
        <div class="max-w-[836px] mx-auto mb-12">
            <p class="text-[1.5rem] font-bold text-center text-color-v1 mb-4">
                Câu hỏi thường gặp
            </p>
            <?php for ($i = 1; $i <= 10; $i++) { ?>
                <div class="faq mb-2">
                    <div class="py-3 px-4 rounded-[0.3125rem] flex items-center bg-white btn-faq font-semibold cursor-pointer">
                        <span class="w-4 inline-block aspect-square mr-2 icon-faq relative"></span>
                        Cách đăng kí tài khoản affiliate ?
                    </div>
                    <div class="content-faq hidden pt-2">
                        <div class="s-content py-3 px-4 rounded-[0.3125rem] bg-white">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ratione quia dolor neque doloremque! Iure, cum? Deserunt impedit nobis temporibus officiis excepturi aut qui veniam, atque inventore ipsa alias vitae repellat!
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
</section>

<?php include "footer.php"; ?>