<?php include('header.php'); ?>

<?php @include('template/breadcrumb.php'); ?>

<section>class="

    <div class="container">

        <div class=" flex justify-between items-center flex-wrap gap-x-6 gap-y-2 mb-6 relative">

            <a class="flex  items-center hover:text-color-v2 arrow-back ">

                <span class="w-6 aspect-square ">

                    <?php @include('template/svgs/arrowleft.php'); ?>

                </span>

                <span clclass="t-[1.25rem] sm:text-[1.5rem] font-semibold ml-2 ">Nguyện cùng em đi qua gió sương</span>

            </a>


            class="
            <div>



                <label for="ebook-read-content-toggle"

                    class="ebook-read-content-toggle cursor-pointer flex items-center justify-center peer relative">

                    <input type="checkbox" hidden name="radio" id="ebook-read-content-toggle" class="appearance-none ">

                    <div

                        class=" bg-color-v2 border border-color-v2 text-white px-6 py-2 rounded-full flex items-center justify-center ">

                        <span>Nguyện cùng em đi qua gió sương</span>

                        <span class="ml-2"><i class="fa-solid fa-angle-down"></i></span>

                    </div>

                    <div

                        class=" hidden ebook-read-content-items absolute  py-4 px-3 bg-white rounded-[0.625rem] shadow-[0_0_15px_rgba(0,0,0,0.25)] z-10 max-sm:left-0 sm:right-0 top-[calc(100%_+8px)]  ">

                        <div class="w-[300px] sm:w-[434px] h-[380px]  overflow-y-scroll">

                            <?php for ($i = 0; $i < 15; $i++) { ?>

                                <div class="p-1 flex items-start hover:bg-[#f1f8ff] transition-all duration-200 ">

                                    <a href="" title=""

                                        class="shrink-0 c-img img__ rounded-[0.3125rem] shadow-[0_4px_10px_0_rgba(0,0,0,.12)] pt-[19%] w-[min(30%,_61px)]">

                                        <img src="theme/frontend/images/sach2.png" alt="">

                                    </a>

                                    <a href="" title=""

                                        class="text-[1.125rem] line-clamp-2 font-semibold hover:text-color-v2 ml-2">

                                        Cosmetic and clinical applications of botox and dermal fillersclinical

                                        applications

                                        of botox and dermal fillersclinical applications of botox and dermal fillers

                                    </a>

                                </div>

                            <?php } ?>

                        </div>

                    </div>

                </label>









            </div>





        </div>

        <div class="mt-6 px-[3.75rem] py-8 bg-white rounded-[0.625rem] shadow-[0_0_15px_rgba(0,0,0,0.25)] ">

            s-content

        </div>

        <a href=" #" title="" class="text-color-v3 mt-6 text-[0.875rem] icon icon-report justify-end">Report</a>



</section>

<?php include('footer.php'); ?>