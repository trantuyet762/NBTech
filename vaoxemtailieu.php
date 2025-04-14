<?php include("header.php"); ?>
<section class="document-detail mt-6 mb-[27.5rem]">
    <div class="container space-y-6">
        <div class="">Breadcrumbs</div>
        <button
            class="btn-down flex items-center gap-x-2 border border-color-v2 py-3 px-4 text-center rounded-[5px] text-color-v2 text-[1.125rem] font-semibold font-nunito  transition-all duration-200 hover:text-white hover:bg-color-v2">
            <span class="w-6 aspect-square">
                <?php @include("template/svgs/icondown.php") ?>
            </span>
            <span class="text-nowrap">Tải xuống</span>
        </button>
        <div>PDF</div>
        <div class="p-4 bg-white rounded-[0.625rem] drop-shadow-[0_0_15px_rgba(0,0,0,0.25)] ">
            <label class="text-[1.125rem] text-color-v2 font-semibold">Đính kèm</label>
            <span class="flex-1 my-3 mx-2 icon-doc icon-pdf-doc text-color-main font-semibold line-clamp-1">
                Innovative Uses of Botox and Dermal Fillers
            </span>
            <a href="" title=""
                class="text-color-v2 underline my-3 mx-2 transition-colors duration-200 hover:text-color-v1 line-clamp-1">link.driver.com/sdjkahsdalskdjlqowiruicovcpxasdjhsjhsdsh/dsdhgha
            </a>
            <span class="flex-1 my-3 mx-2 icon-doc icon-pdf-doc text-color-main font-semibold line-clamp-1">
                Botox and Dermal Fillers: Their Cosmetic and Clinical Significance
            </span>
        </div>
        <div
            class="p-4 rounded-[0.625rem] bg-white module-tabs-document-detail drop-shadow-[0_0_15px_rgba(0,0,0,0.25)]">
            <?php $list_doc_detail = ['Giới thiệu', 'Bộ tài liệu'];
            ?>
            <ul class="flex gap-x-8 tab-document-detail-container relative">
                <?php foreach ($list_doc_detail as $key => $item) { ?>
                    <li class="tab-document-detail-items tab-link text-[1.125rem] text-color-v5 pb-2 font-semibold  transition-all cursor-pointer duration-300 whitespace-nowrap <?php echo $key == 0 ? 'active' : ''; ?>"
                        data-electronic="tab-doc-detail-<?php echo $key; ?>">
                        <?php echo $item; ?>
                    </li>
                    <span class="underline-tab-doc-detail"></span>
                <?php } ?>
            </ul>

            <div class="document-detail-content-box pt-2 border-t border-t-[#ddd]">
                <?php
                $list_set_documents = [
                    'Innovative Uses of Botox and Dermal Fillers' => '482.736',
                    'Exploring Botox and Dermal Fillers: A Comprehensive Guide' => '159.204',
                    'The Versatile Applications of Botox and Dermal Fillers' => '645.372',
                    'Botox and Dermal Fillers: Clinical and Cosmetic Insights' => '217.845',
                    'Understanding the Cosmetic and Clinical Roles of Botox and Fillers' => '823.910',
                    'A Deep Dive into Botox and Dermal Fillers Applications' => '908.156',
                    'Botox and Dermal Fillers: Their Cosmetic and Clinical Significance' => '374.589',
                ];
                ?>
                <div id="tab-doc-detail-0" class="document-detail-content-items active">
                    Chưa nắm được quy chế lương, hệ thống thang bảng lương Chưa biết cách kí kết các hợp đồng
                    sao cho hợp lí, hạn chế các rủi ro pháp lí, xử lí quan hệ lao động Chưa nắm được công tác
                    bảo hiểm xã hội trong doanh nghiệp: tổng quan BHXH trong doanh nghiệp, tối ưu các khoản phải
                    đóng, thủ tục đối chiếu tăng, giảm, điều chỉnh, giải quyết chế độ ốm đau, thai sản, sổ thẻ
                    Chưa biết tổng quan và phương pháp tính thuế, quyết toán thuế thu nhập cá nhân Chưa biết xây
                    dựng, thiết kế bảng chấm công, bảng lương logic, tự động và tối ưu Kĩ năng excel chỉ ở mức
                    hiểu, chưa áp dụng được trong thực tế công việc
                </div>
                <div id="tab-doc-detail-1" class="document-detail-content-items flex flex-col gap-y-3">

                    <?php foreach ($list_set_documents as $document => $price) { ?>
                        <a href="" title=""
                            class="flex-1 mx-2 my-3 icon-doc icon-pdf-doc text-color-main font-semibold line-clamp-1 transition-colors duration-200 hover:text-color-v2"><?php echo $document; ?>
                        </a>
                    <?php } ?>

                </div>
            </div>
        </div>
    </div>
</section>
<?php include("footer.php"); ?>