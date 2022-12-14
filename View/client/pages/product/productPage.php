<!-- Nav -->
<div class="row">
    <nav class="navbar navbar-expand-lg navbar-light bg-white col-12">
        <button class="navbar-toggler d-lg-none border-0" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="mainNav">
            <ul class="navbar-nav mx-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Trang chủ <span class="sr-only">(current)</span>
                    </a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="electronics" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sản
                        Phẩm</a>

                    <div class="dropdown-menu" aria-labelledby="electronics">
                        <?php
                        foreach ($categories as $category) {
                            if ($category['status'] == 0) {
                                continue;
                            }
                        ?>
                            <a class="dropdown-item" href="?controller=listProduct&category=<?= $category['category_id'] ?>">
                                <?= $category['category_name'] ?>
                            </a>
                        <?php } ?>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="fashion" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Tin
                        Tức</a>
                    <div class="dropdown-menu" aria-labelledby="fashion">

                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="books" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Liên hệ</a>

                    <div class="dropdown-menu" aria-labelledby="books">

                    </div>
                </li>
            </ul>
        </div>
    </nav>
</div>
<!-- Nav -->
</div>
<!-- Header -->
</header>
</div>

<div class="col-12">
    <!-- Main Content -->
    <?php if(empty($product) || $product['status']==0){?>
        <div class="row">
        <div class="col-12 mt-3 text-center text-uppercase">
            <h2>Sản phẩm không tồn tại</h2>
            <a class="d-flex justify-content-center" href="?controller=home" type="button">Quay lại trang chủ</a>
        </div>
    </div>
    <?php } else {?>
    <main class="row">
        <div class="col-12 bg-white py-3 my-3">
            <div class="row">
                <!-- Product Images -->
                <?php
                $count = 0;
                foreach ($colors as $color){
                    if ($color['status'] == 0) {
                        continue;
                    }
                ?>
                <div id="image<?= $color['color_id'] ?>" class="col-lg-5 col-md-12 mb-3 color_image">
                    <div class="col-12 mb-3">
                        <div class="img-large border" style="background-image: url('<?= link ?>Public/admin/upload/products/<?=$color['image_link']?>')"></div>
                    </div>
                    <div class="col-12">
                        <div class="row">
                            <div class="col-sm-2 col-3">
                                <div id="main-image" class="img-small border" style="background-image: url('<?= link ?>Public/admin/upload/products/<?=$color['image_link']?>'); background-size: contain;" data-src="<?= link ?>Public/admin/upload/products/<?=$color['image_link']?>"></div>
                            </div>
                            <?php if(!empty($color['image_link_1'])){ ?>
                            <div class="col-sm-2 col-3">
                                <div class="img-small border" style="background-image: url('<?= link ?>Public/admin/upload/products/<?=$color['image_link_1']?>'); background-size: contain;" data-src="<?= link ?>Public/admin/upload/products/<?=$color['image_link_1']?>"></div>
                            </div>
                            <?php }?>
                            <?php if(!empty($color['image_link_2'])){ ?>
                            <div class="col-sm-2 col-3">
                                <div class="img-small border" style="background-image: url('<?= link ?>Public/admin/upload/products/<?=$color['image_link_2']?>'); background-size: contain;" data-src="<?= link ?>Public/admin/upload/products/<?=$color['image_link_2']?>"></div>
                            </div>
                            <?php }?>
                            <?php if(!empty($color['image_link_3'])){ ?>
                            <div class="col-sm-2 col-3">
                                <div class="img-small border" style="background-image: url('<?= link ?>Public/admin/upload/products/<?=$color['image_link_3']?>'); background-size: contain;" data-src="<?= link ?>Public/admin/upload/products/<?=$color['image_link_3']?>"></div>
                            </div>
                            <?php }?>
                            <?php if(!empty($color['image_link_4'])){ ?>
                            <div class="col-sm-2 col-3">
                                <div class="img-small border" style="background-image: url('<?= link ?>Public/admin/upload/products/<?=$color['image_link_4']?>'); background-size: contain;" data-src="<?= link ?>Public/admin/upload/products/<?=$color['image_link_4']?>"></div>
                            </div>
                            <?php }?>
                        </div>
                    </div>
                </div>
                <?php
                } 
                ?>
                <!-- Product Images -->

                <!-- Product Info -->
                <div class="col-lg-4 col-md-9">
                    <div class="col-12 product-name large " style="font-size: 30px;">
                        <?= $product['product_name'] ?>
                        <small>By <a href="#">Store</a></small>
                    </div>
                    <div class="col-12 px-0">
                        <hr>
                    </div>
                    <div class="col-12">
                        <span><?= $product['description'] ?></span>
                    </div>
                </div>
                <!-- Product Info -->

                <!-- Sidebar -->
                <div class="col-lg-3 col-md-3 text-center">
                    <div class="col-12 sidebar h-100">
                        <div class="row">

                            <div class="col-12">
                                <span class="detail-price price" style="color:#f63b3b;">
                                    <?= getFormattedNumber($product['price']).VND ?>
                                </span>
                                <!-- <span class="detail-price-old">
                                    350,000đ
                                </span> -->
                            </div>
                            <form method="POST">
                                <input type="hidden" name="productId" value="<?= $product['product_id'] ?>" />
                                <input type="hidden" name="productName" value="<?= $product['product_name'] ?>" />
                                <input type="hidden" name="unit_price" value="<?= $product['price'] ?>" />

                                <div class="col-12">
                                    <span>Chọn màu: <span id="colorName" style="font-weight: 700;"></span></span>
                                    <div class="colors mt-2">
                                        <ul class="d-flex justify-content-center">
                                            <?php
                                            $stt = 0;
                                            $all_size = array();
                                            $colorId = array();
                                            $checked = "checked";
                                            $default = "defaultOpen";
                                            foreach ($colors as $color) {
                                                if ($color['status'] == 0) {
                                                    continue;
                                                }
                                                $colorId[$stt] = $color['color_id'];
                                                $sizes = $colorModel->getSizeOfColor($color['color_id']);
                                                $all_size[$stt] = $sizes;
                                            ?>
                                                <li class="mx-1">
                                                    <label>
                                                        <input type="hidden" id="getImage<?= $color['color_id'] ?>" name="image" disabled value="<?= $color['image_link'] ?>" />
                                                        <input type="radio" name="colorId" value="<?= $color['color_id'] ?>" <?= $checked ?>>
                                                        <span id="<?= $default ?>" onclick="showAvailableSize(event, <?= $color['color_id'] ?>)" class="swatch" style="background-image: url('<?= link ?>Public/admin/upload/products/<?= $color['image_link'] ?>')"></span>
                                                        <input type="hidden" disabled id="getColorName<?= $color['color_id'] ?>" name="colorName" value="<?= $color['color_name'] ?>" />
                                                    </label>
                                                </li>
                                            <?php
                                                $checked = "";
                                                $default = "";
                                                $stt++;
                                            } ?>
                                        </ul>
                                    </div>
                                </div>
                                <div class="mb-3 m-lg-1">
                                    <span>Chọn size:</span>
                                    <div class="sizes my-2">
                                        <?php
                                        $count = 0;
                                        foreach ($all_size as $key) {
                                        ?>
                                            <ul id="colorID<?= $colorId[$count] ?>" class="size_button">
                                                <?php
                                                $default = "defaultClick";
                                                $temp = 0;
                                                foreach ($key as $size) {
                                                    if ($size['status'] == 0 || $size['quantity'] <= 0)  {
                                                        continue;
                                                    }
                                                ?>
                                                    <li class="mx-1">
                                                        <label>
                                                            <input type="radio" name="sizeId" value="<?= $size['size_id'] ?>">
                                                            <span id="<?= $default . $colorId[$count] ?>" onclick="getMaxQuantity(<?= $size['quantity'] ?>)" class="swatch-size"><?= $size['size_name'] ?></span>
                                                        </label>
                                                    </li>
                                                <?php
                                                    $default = "";
                                                    $temp++;
                                                } ?>
                                            </ul>
                                        <?php
                                            $count++;
                                        } ?>
                                    </div>
                                    <span>Trong kho: <span id="quantityInStock"></span></span>
                                </div>
                                <div class="col-xl-5 col-md-9 col-sm-3 col-5 mx-auto mt-3">
                                    <div class="buttons_added">
                                        <input class="minus is-form" type="button" value="-">
                                        <input aria-label="quantity" id="myNumber" class="input-qty" min="1" max="100" name="quantity" type="number" value="1" required>
                                        <input class="plus is-form" type="button" value="+">
                                    </div>
                                </div>
                                <div class="col-12 mt-3">
                                    <button class="btn btn-outline-dark showcart" name="addToCart" type="submit"><i class="fas fa-cart-plus me-2"></i>Thêm vào giỏ hàng</button>
                                </div>
                                <div class="col-12 mt-3">
                                    <button class="btn-buy-now" type="button"></i>Mua ngay</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Sidebar -->
            </div>
        </div>

        <div class="col-12 mb-3 py-3 bg-white text-justify">
            <div class="row">

                <!-- Details -->
                <div class="col-md-7">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-12 text-uppercase">
                                <h2><u>chi tiết</u></h2>
                            </div>
                            <div class="col-12" id="details">
                                <h4>NHÀ SẢN XUẤT</h4>

                                <p><strong>Sản xuất tại xưởng may tại Việt Nam</strong></p>
                                <hr>
                                <h4>HƯỚNG DẪN GIẶT ÁO</h4>

                                <p>
                                    <li style="list-style-type: none ;">
                                        Lần đầu tiên giặt nên giặt tay và ngâm trong nước ấm để tiệt khuẩn
                                    </li>
                                    <li style="list-style-type: none ;">
                                        Giặt riêng áo sáng màu và tối màu
                                    </li>
                                    <li style="list-style-type: none ;">
                                        Không nên giặt áo trong nước nóng quá 40 độ
                                    </li>
                                </p>
                                <hr>
                                <h4>HƯỚNG DẪN PHƠI ÁO</h4>

                                <p>Một số cách để bạn có thể phơi áo hoodie nỉ bông đúng cách: Hãy lộn ngược
                                    áo hoodie trước khi phơi áo. Khi phơi áo hoodie, bạn hãy chọn loại móc
                                    có độ rộng vừa với form áo tránh các loại móc quá lớn làm dãn áo. Phơi
                                    áo hoodie ở những nơi thoáng mát, tránh tiếp xúc trực tiếp với ánh nắng
                                    mặt trời.</p>

                                <p>Áo khoác nỉ với chất liệu mềm mại và trẻ trung được các bạn trẻ sử dụng
                                    phổ biến hiện nay. Ngoài sự phóng khoáng và hiện đại, áo khoác nỉ có thể
                                    giữ ấm tốt nhờ lớp lông ngắn và mềm mượt bao phủ ở bề mặt. Tuy nhiên, áo
                                    nỉ trong quá trình sử dụng sẽ không tránh khỏi bị vấy bẩn, và nếu không
                                    biết cách xử lý thì bạn sẽ vô tình phá hỏng chiếc áo của mình. </p>

                                <p>Để áo không mau giãn và thậm chí vết bẩn không được đánh sạch hoàn toàn,
                                    bạn không nên cho áo khoác nỉ vào máy giặt. Giặt nhiều lần bằng máy sẽ
                                    khiến áo của bạn tệ đi vì loại vải này cần được xử lý một cách khéo léo
                                    để không bị mất màu và hư vải. </p>
                                <hr>
                                <h4>HƯỚNG DẪN ỦI ÁO CHO TỪNG LOẠI VẢI</h4>

                                <p>Tiến hành lót bên dưới lớp quần áo len – dạ cần ủi. Rồi mới tiến hành ủi
                                    như bình thường. Phương pháp này giúp hạn chế sự gia tăng nhiệt độ cao
                                    dẫn đến quần áo bị co rút lại. Đặc biệt với các loại trang phục có chất
                                    liệu “khó chiều” như: lụa, len, dạ, các loại quần áo cần tạo đường xếp
                                    ly như: áo sơ mi, quần tây..</p>
                                <hr>
                                <h4>HƯỚNG DẪN BẢO QUẢN SẢN PHẨM</h4>

                                <p>Vải len rất dễ bị xù do quá trình sử dụng, ma sát với bề mặt tiếp xúc,
                                    ngoài ra còn dễ bám lông động vật hay tóc người. Hãy dành chút thời gian
                                    vệ sinh cho quần áo len bằng cách chải sau mỗi lần sử dụng, Đối với hiện
                                    tượng xù lông, bạn hãy sắm cho mình một chiếc lượccạo hay dao điện tử
                                    chuyên dụng để xử lý vấn đề này.
                                </p>

                                <p><strong>ĐỂ Ý NƠI VÀ CÁCH LƯU TRỮ QUẦN ÁO</strong> Đây là một trong những
                                    điều quan trọng nhất trong các cánh bảo quản quần áo len mà bạn phải
                                    luôn ghi nhớ. Để giữ phom dáng lâu dài sau thời gian sử dụng, bạn nên
                                    xếp lại thay vì treo lên găng.

                                </p>

                                <p><strong>XỬ LÝ NHỮNG VẾT Ố BẨN</strong> Dùng vải thấm, khăn lông dày cùng
                                    với chút nước giặtnhẹ nhàng thoa đều và chà nhẹ lên vùng bị bẩn. Nếu vấn
                                    đề không được giải quyết triệt để, tốt nhất là đem chúng đến những tiệm
                                    giặt khô để các “thợ thầy” xử lý giùm bạn.

                                </p>

                                <p><strong>GIẶT ĐỒ</strong> Với việc giặt tay, ngâm với nước giặt tầm 5-10
                                    phút để làm bay bụi đất và mùi hôi và được. Vắt nhẹ nhàng, nhiều lần cho
                                    ráo nước nhưng đừng xoắn mạnh (sẽ làm biến dạng quần áo). Phơi nơi khô
                                    ráo và tránh ánh nắng trực tiếp.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Details -->

                <!-- Ratings & Reviews -->
                <div class="col-md-5">
                    <div class="col-12 px-md-4 sidebar h-100">
                        <!-- Rating -->
                        <div class="row">
                            <div class="col-12 mt-md-0 mt-3 text-uppercase">
                                <h2><u>Xếp hạng và đánh giá</u></h2>
                            </div>
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-sm-4 text-center">
                                        <div class="row">
                                            <div class="col-12 average-rating">
                                                4.1
                                            </div>
                                            <div class="col-12">
                                                trong số 100 nhận xét
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <ul class="rating-list mt-3">
                                            <li>
                                                <div class="progress">
                                                    <div class="progress-bar bg-dark" role="progressbar" style="width: 45%;" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100">45%</div>
                                                </div>
                                                <div class="rating-progress-label">
                                                    5<i class="fas fa-star ms-1"></i>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="progress">
                                                    <div class="progress-bar bg-dark" role="progressbar" style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">30%</div>
                                                </div>
                                                <div class="rating-progress-label">
                                                    4<i class="fas fa-star ms-1"></i>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="progress">
                                                    <div class="progress-bar bg-dark" role="progressbar" style="width: 15%;" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100">15%</div>
                                                </div>
                                                <div class="rating-progress-label">
                                                    3<i class="fas fa-star ms-1"></i>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="progress">
                                                    <div class="progress-bar bg-dark" role="progressbar" style="width: 7%;" aria-valuenow="7" aria-valuemin="0" aria-valuemax="100">7%</div>
                                                </div>
                                                <div class="rating-progress-label">
                                                    2<i class="fas fa-star ms-1"></i>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="progress">
                                                    <div class="progress-bar bg-dark" role="progressbar" style="width: 3%;" aria-valuenow="3" aria-valuemin="3" aria-valuemax="100">3%</div>
                                                </div>
                                                <div class="rating-progress-label">
                                                    1<i class="fas fa-star ms-1"></i>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Rating -->

                        <div class="row">
                            <div class="col-12 px-md-3 px-0">
                                <hr>
                            </div>
                        </div>

                        <!-- Add Review -->
                        <div class="row">
                            <div class="col-12">
                                <h4>Thêm đánh giá</h4>
                            </div>
                            <div class="col-12">
                                <form>
                                    <div class="mb-3">
                                        <textarea class="form-control" placeholder="Đánh giá của bạn"></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <div class="d-flex ratings justify-content-end flex-row-reverse">
                                            <input type="radio" value="5" name="rating" id="rating-5"><label for="rating-5"></label>
                                            <input type="radio" value="4" name="rating" id="rating-4"><label for="rating-4"></label>
                                            <input type="radio" value="3" name="rating" id="rating-3"><label for="rating-3"></label>
                                            <input type="radio" value="2" name="rating" id="rating-2"><label for="rating-2"></label>
                                            <input type="radio" value="1" name="rating" id="rating-1" checked><label for="rating-1"></label>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <button class="btn btn-outline-dark">Thêm đánh giá</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- Add Review -->
                        <div class="row">
                            <div class="col-12 px-md-3 px-0">
                                <hr>
                            </div>
                        </div>
                        <!-- Review -->
                        <div class="row">
                            <div class="col-12">
                                <!-- Comments -->
                                <div class="col-12 text-justify py-2 px-3 mb-3 bg-gray">
                                    <div class="row">
                                        <div class="col-12">
                                            <strong class="me-2">Hùng Bùi</strong>
                                            <small>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </small>
                                        </div>
                                        <div class="col-12">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce
                                            ut ullamcorper quam, non congue odio.
                                            <br>
                                            Fusce ligula augue, faucibus sed neque non, auctor rhoncus enim.
                                            Sed nec molestie turpis. Nullam accumsan porttitor rutrum.
                                            Curabitur eleifend venenatis volutpat.
                                            <br>
                                            Aenean faucibus posuere vehicula.
                                        </div>
                                        <div class="col-12">
                                            <small>
                                                <i class="fas fa-clock me-2"></i>5 hours ago
                                            </small>
                                        </div>
                                    </div>
                                </div>
                                <!-- Comments -->

                                <!-- Comments -->
                                <div class="col-12 text-justify py-2 px-3 mb-3 bg-gray">
                                    <div class="row">
                                        <div class="col-12">
                                            <strong class="me-2">Trang Nguyễn</strong>
                                            <small>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </small>
                                        </div>
                                        <div class="col-12">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce
                                            ut ullamcorper quam, non congue odio.
                                            <br>
                                            Aenean faucibus posuere vehicula.
                                        </div>
                                        <div class="col-12">
                                            <small>
                                                <i class="fas fa-clock me-2"></i>5 hours ago
                                            </small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
    </div>

</main>
<?php }?>
<!-- Main Content -->
</div>