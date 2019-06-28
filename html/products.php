<style>
    input {
        outline: none;
    }

    input[type=search] {
        -webkit-appearance: textfield;
        -webkit-box-sizing: content-box;
        font-family: inherit;
        font-size: 100%;
    }

    input::-webkit-search-decoration,
    input::-webkit-search-cancel-button {
        display: none;
    }

    input[type=search] {
        background: #ededed url(https://static.tumblr.com/ftv85bp/MIXmud4tx/search-icon.png) no-repeat 9px center;
        border: solid 1px #ccc;
        padding: 9px 10px 9px 32px;
        width: 55px;
        -webkit-border-radius: 10em;
        -moz-border-radius: 10em;
        border-radius: 10em;
        -webkit-transition: all .5s;
        -moz-transition: all .5s;
        transition: all .5s;
    }

    input[type=search]:focus {
        width: 130px;
        background-color: #fff;
        border-color: #66CC75;
        -webkit-box-shadow: 0 0 5px rgba(109, 207, 246, .5);
        -moz-box-shadow: 0 0 5px rgba(109, 207, 246, .5);
        box-shadow: 0 0 5px rgba(109, 207, 246, .5);
    }

    input:-moz-placeholder {
        color: #999;
    }

    input::-webkit-input-placeholder {
        color: #999;
    }


    /* Demo 2 */

    #demo-2 input[type=search] {
        width: 15px;
        padding-left: 10px;
        color: transparent;
        cursor: pointer;
    }

    #demo-2 input[type=search]:hover {
        background-color: #fff;
    }

    #demo-2 input[type=search]:focus {
        width: 130px;
        padding-left: 32px;
        color: #000;
        background-color: #fff;
        cursor: auto;
    }

    #demo-2 input:-moz-placeholder {
        color: transparent;
    }

    #demo-2 input::-webkit-input-placeholder {
        color: transparent;
    }
</style>
<style>
    .tabs {
        margin: 0;
        padding: 0;
        list-style: none;
        position: relative;
    }

    .tabs li {
        float: left;
        width: 25%;
    }

    .tabs a {
        position: relative;
        display: inline-block;
        background: rgba(218, 218, 218, 0.79);
        width: 100%;
        margin: 0;
        color: #9c94b5;
        padding: 16px 0;
        text-align: center;
        text-decoration: none;
        transition: 0.3s;
    }

    .tabs a p,
    .tabs a i {
        position: relative;
        margin: 0;
        background: transparent;
        padding: 0;
        z-index: 100;
        text-shadow: 0 2px 4px rgba(0, 0, 0, .12), 0 4px 8px rgba(0, 0, 0, .12);
        color: #000;
        font-size: 16px;
        font-family: 'Muli', sans-serif;
        font-weight: 300;
        line-height: 20px;
    }

    .tabs a.active,
    .tabs li a:hover {
        background: #fff;
    }

    #tabs-line {
        position: absolute;
        bottom: 0;
        height: 3px;
        transition: background 0.3s;
        z-index: 99;
    }

    #tabs-line.one {
        background: #fff;
    }

    #tabs-line.two {
        background: #fff;
    }

    #tabs-line.three {
        background: #fff;
    }

    #tabs-line.four {
        background: #fff;
    }

    #tabs-line.five {
        background: #fff;
    }
    .product-col {
        /* min-height: 300px */
    }
    .product-info{
        padding-left: 10px;
        padding-right: 10px;
        height: 295px;
        overflow: hidden;
    }
    .product-thumb {
        width: 260px;
        height: 350px;
    }
    .add-to-cart-btn{
        background: white !important;
    }

    @media screen and (max-width: 480px) {
        .tabs li {
            float: left;
            width: 100%;
        }
    }
</style>
<?php
    
    
    
    
    $categories = [
        
        "son-trang-tri" => [
            [
                "name" => "Koresil 400",
                "description" => "là sơn lót tường khô nhanh, chất lượng cao với khả năng kháng kiềm phù hợp cho cả sử dụng nội ngoại thất.",
                "li" => "
                • Thi công dễ dàng <br>
                • Seals đẹp / Bề mặt đẹp <br>
                • Độ bám dính cao <br>
                ",
                "image" => "products/400.jpg",
                "file_pdf" => ""
            ],
            [
                "name" => "Koresil 450",
                "description" => "là sơn lót chống kiềm gốc nước acrylic styren cho các bức tường bên ngoài giúp bảo vệ chống lại UV, ẩm ướt, rêu mốc,...",
                "li" => "
                • Kháng kiềm lớn <br>
                • Sức đề kháng tốt
                ",
                "image" => "products/450.jpg",
                "file_pdf" => ""
            ],
            [
                "name" => "Wall Sealer 500",
                "description" => "là sơn lót chống kiềm gốc acrylic styrene với đặc tính chống thấm và bám dính tuyệt vời với khả năng chống kiềm tuyệt đối, tăng cường miễn dịch thời tiết.",
                "li" => "
                • Chống UV<br>
                • Kháng kiềm nổi bật<br>
                • Ứng dụng trên thạch cao tươi<br>
                • Chứng nhận xanh được Singapore chứng nhận.<br>
                • Đóng gói : 1L / 5L / 18L
                ",
                "image" => "products/500.jpg",
                "file_pdf" => ""
            ],
            [
                "name" => "AURORA Matt",
                "description" => "là sơn phủ nội thất hoàn thiện bóng mờ gốc Acrylic cao cấp. Có tính kháng khuẩn cao, khả năng lau chùi tuyệt vời, chà và chống vết bẩn để bảo trì dễ dàng. AURORA Matt được xây dựng với VOC thấp, không có APEO và được chứng nhận với SIRIM Eco Label.",
                "li" => "
                • Màu sắc bền lâu<br>
                • Dễ dàng làm sạch<br>
                • Kết thúc thanh lịch mượt mà<br>
                • Chống vi khuẩn<br>
                • Mùi thấp<br>
                • Không thêm chì hoặc thủy ngân<br>
                • Đóng gói : 1L / 5L / 18L
                ",
                "image" => "products/auroa_matt.jpg",
                "file_pdf" => ""
            ],
            [
                "name" => "Korevon Silk ",
                "description" => "là một kết thúc dựa trên nước acrylic đã được sửa đổi với một kết thúc satin được xây dựng để che các vết nứt chân tóc và làm đẹp nội thất nhà",
                "li" => "
                • Bao gồm các vết nứt chân chim<br>
                • Hợp chất hữu cơ dễ bay hơi thấp<br>
                • Không thêm chì hoặc thủy ngân<br>
                • Thân thiện với môi trường<br>
                • Đóng gói : 1L / 5L / 18L
                ",
                "image" => "products/korervom-sill.jpg",
                "file_pdf" => ""
            ],
            [
                "name" => "AURORA Sheen ",
                "description" => "là sơn hoàn thiện ánh sáng dựa trên gốc Acrylic đã được sửa đổi. AURORA Sheen có tính kháng khuẩn cao , khả năng lau chùi tuyệt vời, chà và chống vết bẩn để bảo trì dễ dàng.",
                "li" => "
                • Màu sắc bền lâu<br>
                • Dễ dàng làm sạch<br>
                • Kết thúc thanh lịch mượt mà<br>
                • Chống vi khuẩn<br>
                • Mùi thấp<br>
                • Không thêm chì hoặc thủy ngân<br>
                • Đóng gói : 1L / 5L / 18L
                ",
                "image" => "products/aurora_sheen.jpg",
                "file_pdf" => ""
            ],
            
            [
                "name" => "Koreton Pro ",
                "description" => "Koreton Pro là một loại sơn nhũ cao su cho nội thất nhà bạn. Nó có một kết thúc mịn mượt dễ dàng để áp dụng.",
                "li" => "
                • Độ mờ tốt<br>
                • Kháng nấm & tảo<br>
                • Đóng gói : 1L / 5L / 18L
                ",
                "image" => "products/koreton_pro.jpg",
                "file_pdf" => ""
            ],
            [
                "name" => "Koreton Plus",
                "description" => "là sơn hoàn thiện nội thất dựa trên nước vinyl acrylic được xây dựng để cung cấp cho bạn một ngôi nhà thanh lịch với kết thúc mịn màng của nó.",
                "li" => "
                • Độ phủ mượt mà<br>
                • Kháng ẩm và nấm mốc<br>
                • Dễ sử dụng<br>
                • Hợp chất hữu cơ dễ bay hơi thấp (VOC)<br>
                • Đóng gói : 1L / 5L / 18L
                ",
                "image" => "products/koreton_plus.jpg",
                "file_pdf" => ""
            ],
            
            [
                "name" => "Korevon Ezy-Clean",
                "description" => "là sơn nhũ nội thất acrylic có thêm các đặc tính chống làm sạch và lau chùi dễ dàng để giữ cho bức tường của bạn luôn sạch sẽ.",
                "li" => "
                • Kháng khuẩn<br>
                • Khả năng làm sạch tuyệt vời<br>
                • Hợp chất hữu cơ dễ bay hơi thấp (VOC)<br>
                • Bảo trì dễ dàng
                ",
                "image" => "products/Korevon-Ezy-Clean.jpg",
                "file_pdf" => ""
            ],
            [
                "name" => "Korevon Spotless All-In-1",
                "description" => "là một loại sơn gốc acrylic giúp hấp thụ formaldehyd và bảo vệ ngôi nhà của bạn khỏi vi khuẩn có hại, giảm các chất ô nhiễm không khí trong nhà để thúc đẩy môi trường trong nhà lành mạnh hơn.",
                "li" => "
                • Độ bền vượt trội<br>
                • Độ bám dính tuyệt vời<br>
                • Chống vi khuẩn<br>
                • Không thêm chì hoặc thủy ngân<br>
                • Thân thiện với môi trường<br>
                • Đóng gói : 1L / 5L / 18L
                ",
                "image" => "products/Korevon-spotless.jpg",
                "file_pdf" => ""
            ],
            [
                "name" => "AURORA Prestige",
                "description" => "là sơn hiệu ứng đặc biệt bán gốc Acrylic trong suốt cao cấp. Công thức để tạo ra một lớp tráng men hiệu ứng kim loại hoặc ngọc trai và thân thiện",
                "li" => "
                    • Mùi thấp<br>
                    • Tự làm thân thiện<br>
                    • Không thêm chì hoặc thủy ngân<br>
                    • VOC thấp<br>
                    • Màu sắc bền lâu<br>
                    • Sấy khô nhanh<br>
                    • Thân thiện với môi trường<br>
                    • Đóng gói : 1L / 5L / 18L
                ",
                "image" => "products/auroa_pres.jpg",
                "file_pdf" => ""
            ],
            [
                "name" => "Vinyl Fresh",
                "description" => "là sơn hoàn thiện nội thất tường  gốc Acrylic với độ phủ tuyệt vời và một hoàn thiện mờ mịn rất bền để cung cấp một môi trường mềm mại, ấm áp và ấm cúng.",
                "li" => "
                • Không thêm chì hoặc thủy ngân<br>
                • Hợp chất hữu cơ dễ bay hơi thấp (VOC)<br>
                • Kháng nấm mốc<br>
                • Khả năng làm sạch tốt<br>
                • Chống biến màu<br>
                • Thân thiện với môi trường<br>
                • Đóng gói : 1L / 5L / 15L
                ",
                "image" => "products/Vinyl-Fresh.jpg",
                "file_pdf" => ""
            ],
            [
                "name" => "Vinyl Glow",
                "description" => "là một loại sơn nhũ tương satin giống như ngọc trai được thiết kế để làm sáng các bức tường bên trong với một kết thúc tươi mới và quyến rũ.",
                "li" => "
                • Không thêm chì hoặc thủy ngân<br>
                • Hợp chất hữu cơ dễ bay hơi thấp (VOC)<br>
                • Kháng Tảo và nấm<br>
                • Khả năng làm sạch tốt<br>
                • Thân thiện với môi trường<br>
                • Đóng gói : 1L / 5L / 15L
                ",
                "image" => "products/Vinyl-Glow.jpg",
                "file_pdf" => ""
            ],
            [
                "name" => "Korelite",
                "description" => "",
                "li" => "
                • Dành cho ngoại thất , Màng sơn mờ<br>
                • Chịu thời tiết tốt<br>
                • Bám dính tốt<br>
                • Chống rêu mốc<br>
                • Đọ phủ cao , dễ sử dụng<br>
                • Đóng gói : 1L / 5L / 18L
                ",
                "image" => "products/kore-lite.jpg",
                "file_pdf" => ""
            ],
            [
                "name" => "Koreshield",
                "description" => "",
                "li" => "
                • Sơn ngoại thất màng sơn bóng<br>
                • Chịu thời tiết tốt<br>
                • Bám dính tốt<br>
                • Chống rêu mốc<br>
                • Độ phủ cao , dễ sử dụng<br>
                • Đóng gói : 1L / 5L / 18L<br>
                ",
                "image" => "products/Kore-shield.jpg",
                "file_pdf" => ""
            ],
            [
                "name" => "Korever KOREVER",
                "description" => "",
                "li" => "
                • Sơn KCC cao cấp ngoại thất , màng sơn bóng<br>
                • Chống bám bụi<br>
                • Chống rêu mốc<br>
                • Chống bong tróc<br>
                • Chịu thời tiết tuyệt vời<br>
                • Đóng gói : 1L / 5L 18L
                ",
                "image" => "products/KOREVER.jpg",
                "file_pdf" => ""
            ],
            [
                "name" => "Bột trét nội",
                "description" => "",
                "li" => "
                • Độ phủ 1 – 1,2 kg / m² , phụ thuộc bề mặt trét.
                • Đóng gói : Bao 40Kg
                ",
                "image" => "products/bot-tret-noi.jpg",
                "file_pdf" => ""
            ],
            [
                "name" => "Bột trét ngoại",
                "description" => "",
                "li" => "
                • Độ phủ 1 – 1,2 kg / m² , phụ thuộc bề mặt trét.
                • Đóng gói : Bao 40Kg
                ",
                "image" => "products/tret-ngoai.jpg",
                "file_pdf" => ""
            ],
            [
                "name" => "Bột trét Nội & Ngoại cao cấp",
                "description" => "",
                "li" => "
                • Độ phủ 1 – 1,2 kg / m² , phụ thuộc bề mặt trét.
                • Đóng gói : Bao 40Kg
                ",
                "image" => "products/tret-noi-cao-cap.jpg",
                "file_pdf" => ""
            ],
        ],
        "chong-tham" => [
            [
                "name" => "SPORTHANE  PRIMER UP 166T",
                "description" => "Sơn lót bề mặt",
                "image" => "products/UC214.jpg",
                "file_pdf" => "pdf/SPORTHANE_PRIMER_UP_166T.pdf"
            ],
            [
                "name" => "SPORTHANE EXPOSURE KS UC214",
                "description" => "Chống thấm PU 2 thành phần lộ thiên",
                "image" => "products/UC214.jpg",
                "file_pdf" => "pdf/SPORTHANE_EXPOSURE_WATERPROOFING_KS_UC_214_KS_.pdf"
            ],
            [
                "name" => "SPORTHANE NON EXPOSURE KS UC215",
                "description" => "Chống thấm PU 2 thành phần không lộ thiên",
                "image" => "products/UC214.jpg",
                "file_pdf" => "pdf/SPORTHANE_NON_EXPOSURE_WATERPROOFING__KS_UC_215_KS_.pdf"
            ],
            [
                "name" => "SPORTHANE VERTICAL SURFACE EXPOSURE COAT",
                "description" => "Chống thấm PU 2 thành phần tường đứng",
                "image" => "products/UC214.jpg",
                "file_pdf" => "pdf/SPORTHANE_VERTICAL_SURFACE_EXPOSURE_WATERPROOFING_COAT.pdf"
            ],
            [
                "name" => "SPORTHANE TOP COAT UT577N",
                "description" => "Lớp phủ bảo vệ chống thấm chịu trọng tải",
                "image" => "products/UC214.jpg",
                "file_pdf" => "pdf/SPORTHANE_TOP_COAT_UT577N.pdf"
            ],
            [
                "name" => "MAXBOND 328E",
                "description" => "Chống thấm PU lộ thiên 1 thành phần",
                "image" => "products/328E.jpg",
                "file_pdf" => ""
            ],
            [
                "name" => "MAXBOND 1211",
                "description" => "Chống thấm Polymer gốc xi măng 2 thành phần",
                "image" => "products/1211.jpg",
                "file_pdf" => "pdf/MAXBOND_1211.pdf"
            ],
            [
                "name" => "MAXBOND 650",
                "description" => "Vữa GROUT không co ngót Max500",
                "image" => "products/650.jpg",
                "file_pdf" => "pdf/CATALOGUE_MAXBOND_650_2016A.pdf"
            ],
            [
                "name" => "MAXCRETE 651",
                "description" => "Vữa sữa chữa bê tông Max650",
                "image" => "products/651.jpg",
                "file_pdf" => "pdf/CATALOGUE_MAXCRETE_651_2016A.pdf"
            ],
            [
                "name" => "DAVCO K10 POLYURETHANE PLUS",
                "description" => "Chống thấm PU gốc Acrylic 1 thành phần tường đứng",
                "image" => "",
                "file_pdf" => "pdf/Davco_K10_Polyurethane_Plus_Datasheet_Vn.pdf"
            ],
        ],
        "son-expoxy" => [],
        "hoa-chat" => [],
    ];
?>
<main style="padding-top: 80px;">
    <div class="nav">
        <ul class="tabs">
            <li>
                <a href="#son-trang-tri" class="product-category">
                    <p>Sơn Trang Trí</p>
                </a>
            </li>
            <li>
                <a href="#chong-tham" class="product-category">
                    <p>Chống Thấm</p>
                </a>
            </li>
            
            <li>
                <a href="#son-expoxy" class="product-category">
                    <p>Sơn Epoxy</p>
                </a>
            </li>
            <li>
                <a href="#hoa-chat" class="product-category">
                    <p>Hóa Chất</p>
                </a>
            </li>
            <li id="tabs-line" class="one"></li>
        </ul>
    </div>
</main>
<!-- END HEADER -->


<section class="page-title parallax-section">
    <div class="row-parallax-bg">
        <div class="parallax-wrapper">
            <div class="parallax-bg" style="background-position: 50% 100%; top:-100px;">
                <img src="images/InteriorBanner.jpg" alt="">
            </div>
        </div>
        <div class="parallax-overlay"></div>
    </div>
    <div class="centrize">
        <div class="v-center">
            <div class="container">
                <div class="title text-center">
                    <!--<h1 style="letter-spacing: 2px; color:#999;">Interior</h1>-->
                </div>
            </div>
        </div>
    </div>
</section>

<section class="grey-bg">
    <div class="container">
        <div class="row">
        <?php
        
        foreach($categories as $key => $category) {
        ?>
            <div class="products-row columns-4 tab-product" id="<?= $key?>" >
                <?php foreach($category as $product) {  ?>
                <div class="product-col">
                    <div class="shop-product">
                        <div class="product-thumb">
                            <a href="#">
                                <img src="<?php echo $product['image']; ?>" alt="<?php echo $product['name'] ?>">
                                
                            </a>
                        </div>
                        <div class="product-info">
                            <h3><a href="#"><?php echo $product['name'] ?></a></h3>
                            <p> <p><?php echo $product['description']; ?></p>
                            <p style="text-align: left;"><?= isset($product['li']) ? $product['li'] : ""; ?></p>
                            <?php if(!empty($product['file_pdf'])) {?>
                            <div class="add-to-cart-btn"><a target="_blank" href="<?php echo $product['file_pdf']; ?>"><i class="hc-color-filter"></i><span>Chi tiết</span></a>
                            
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        <?php } ?>
            
        </div>
    </div>
</section>
<script>
$(document).ready(function() {
    $(".product-category").click(function(event) {
        // event.preventDefault();
        $(".tab-product").hide();
        href = $(this).attr("href");
        console.log(href);
        $(href).show();
    })
})
</script>