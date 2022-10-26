<div class="col-12 align-self-end">
    <!-- Footer -->
    <footer class="row">
        <div class="col-12 bg-dark text-white pb-3 pt-5">
            <div class="row">
                <div class="col-lg-2 col-sm-4 text-center text-sm-left mb-sm-0 mb-3">
                    <div class="row">
                        <div class="col-12">
                            <div class="footer-logo">
                                <a href="index.html">Double-H</a>
                            </div>
                        </div>
                        <div class="col-12">
                            <address>
                                18 Tam Trinh<br>
                                Hai Ba Trung, Ha Noi
                            </address>
                        </div>
                        <div class="col-12">
                            <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="social-icon"><i class="fab fa-pinterest-p"></i></a>
                            <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="social-icon"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-8 text-center text-sm-left mb-sm-0 mb-3">
                    <div class="row">
                        <div class="col-12 text-uppercase">
                            <h4>chúng tôi là ai?</h4>
                        </div>
                        <div class="col-12 text-justify">
                            <p>Website bán lẻ thời trang trực tuyến với các thiết kế được lấy
                                cảm hứng từ tinh thần của người trẻ và những màu sắc đặc
                                trưng của Thủ Đô Hà Nội.
                                Phong cách mà Double-H hướng tới là sự kết hợp giữa văn
                                hóa Hip Hop hiện đại với những món đồ có thể mặc thường
                                ngày. Với mong muốn truyền tải
                                nét văn hóa đặc trưng của Hà Nội rộng rãi hơn trong ngành
                                streetwear nói riêng và thời trang nói chung.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-sm-3 col-5 ms-lg-auto ms-sm-0 ms-auto mb-sm-0 mb-3">
                    <div class="row">
                        <div class="col-12 text-uppercase">
                            <h4>đường dẫn</h4>
                        </div>
                        <div class="col-12">
                            <ul class="footer-nav">
                                <li>
                                    <a href="#">Trang chủ</a>
                                </li>
                                <li>
                                    <a href="#">Thông tin liên hệ</a>
                                </li>
                                <li>
                                    <a href="#">Về chúng tôi</a>
                                </li>
                                <li>
                                    <a href="#">Chính sách bảo mật</a>
                                </li>
                                <li>
                                    <a href="#">Điều khoản và điều kiện</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-sm-2 col-4 me-auto mb-sm-0 mb-3">
                    <div class="row">
                        <div class="col-12 text-uppercase text-underline">
                            <h4>Hỗ trợ</h4>
                        </div>
                        <div class="col-12">
                            <ul class="footer-nav">
                                <li>
                                    <a href="#">FAQs</a>
                                </li>
                                <li>
                                    <a href="#">Shipping</a>
                                </li>
                                <li>
                                    <a href="#">Lợi nhuận</a>
                                </li>
                                <li>
                                    <a href="#">Theo dõi thứ tự</a>
                                </li>
                                <li>
                                    <a href="#">Báo cáo gian lận</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 text-center text-sm-left">
                    <div class="row">
                        <div class="col-12 text-uppercase">
                            <h4>bản tin</h4>
                        </div>
                        <div class="col-12">
                            <form action="#">
                                <div class="mb-3">
                                    <input type="text" class="form-control" placeholder="Điền email của bạn..." required>
                                </div>
                                <div class="mb-3">
                                    <button class="btn btn-outline-light text-uppercase">Subscribe</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer -->
</div>
</div>

</div>
<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
<script type="text/javascript" src="<?= link ?>Assets/client/js/jquery.min.js"></script>
<script type="text/javascript" src="<?= link ?>Assets/client/js/bootstrap.min.js"></script>
<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script src="https://cdn.lordicon.com/xdjxvujz.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
</script>
<script>
    //<![CDATA[
    $('input.input-qty').each(function() {
        var $this = $(this),
            qty = $this.parent().find('.is-form'),
            min = Number($this.attr('min')),
            max = Number($this.attr('max'))
        if (min == 0) {
            var d = 0
        } else d = min
        $(qty).on('click', function() {
            if ($(this).hasClass('minus')) {
                if (d > min) d += -1
            } else if ($(this).hasClass('plus')) {
                var x = Number($this.val()) + 1
                if (x <= max) d += 1
            }
            $this.attr('value', d).val(d)
        })
    })
    //]]>

    //============================================================
    var currentBoxNum = 1;

    function changeColor(background, boxNum) {
        document.getElementById("box" + currentBoxNum).style.borderStyle = "none";
        currentBoxNum = boxNum;
        document.getElementById("box" + currentBoxNum).style.borderStyle = "solid";
        document.getElementById("box" + currentBoxNum).style.borderColor = "black";
    }

    document.getElementById("box1").addEventListener("click", function() {
        changeColor("#e6e2cf", 1);
    });
    document.getElementById("box2").addEventListener("click", function() {
        changeColor("#dbcaac", 2);
    });
    document.getElementById("box3").addEventListener("click", function() {
        changeColor("#c9cbb3", 3);
    });

    // ===================================================================================

    var curentSelectNum = 1;

    function changeBorder(border, selectNum) {
        document.getElementById("select" + curentSelectNum).style.borderStyle = "none";
        curentSelectNum = selectNum;
        document.getElementById("select" + curentSelectNum).style.borderStyle = "solid";
        document.getElementById("select" + curentSelectNum).style.borderColor = "black";
    }

    document.getElementById("select1").addEventListener("click", function() {
        changeBorder("#e6e2cf", 1);
    });
    document.getElementById("select2").addEventListener("click", function() {
        changeBorder("#dbcaac", 2);
    });

    //============================================================

    // JS Vertical

    // function openCity(evt, cityName) {
    //   var i, tabcontent, tablinks;
    //   tabcontent = document.getElementsByClassName("tabcontent");
    //   for (i = 0; i < tabcontent.length; i++) {
    //     tabcontent[i].style.display = "none";
    //   }
    //   tablinks = document.getElementsByClassName("tablinks");
    //   for (i = 0; i < tablinks.length; i++) {
    //     tablinks[i].className = tablinks[i].className.replace(" active", "");
    //   }
    //   document.getElementById(cityName).style.display = "block";
    //   evt.currentTarget.className += " active";
    // }

    // Get the element with id="defaultOpen" and click on it
    document.getElementById("defaultOpen").click();
</script>

<script>
    var currentSelectNum1 = 1;

    function changeColor1(background1, selectNum) {
        document.getElementById("select" + currentSelectNum1).style.borderStyle = "none";
        currentSelectNum1 = selectNum;
        document.getElementById("select" + currentSelectNum1).style.borderStyle = "solid";
        document.getElementById("select" + currentSelectNum1).style.borderColor = "black";
    }

    document.getElementById("select1").addEventListener("click", function() {
        changeColor1("#e6e2cf", 1);
    });
    document.getElementById("select2").addEventListener("click", function() {
        changeColor1("#dbcaac", 2);
    });
    // document.getElementById("select3").addEventListener("click", function(){ changeColor1("#dbcaac", 3); });
</script>
<script>
    const clID = new Array();

    function showAvailableSize(evt, colorId) {
        clID.push(colorId);
        let result = clID.reduce(function(accumulator, element) {
            if (accumulator.indexOf(element) === -1) {
                accumulator.push(element)
            }
            return accumulator
        }, [])
        var i, tabcontent, tablinks, image;
        tabcontent = document.getElementsByClassName("size_button");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        image = document.getElementsByClassName("color_image");
        for (i = 0; i < tabcontent.length; i++) {
            image[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("swatch");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        for (i = 0; i < clID.length; i++) {
            if (clID[i] == colorId) {
                document.getElementById('getColorName' + clID[i]).disabled = false;
                document.getElementById('getImage' + clID[i]).disabled = false;
                continue;
            }
            document.getElementById('getColorName' + clID[i]).disabled = true;
            document.getElementById('getImage' + clID[i]).disabled = true;
        }
        document.getElementById('colorID' + colorId).style.display = "block";
        document.getElementById('image' + colorId).style.display = "block";
        evt.currentTarget.className += " active";
        document.getElementById('defaultClick' + colorId).click();
        var colorName = document.getElementById('getColorName' + colorId).value;
        document.getElementById('colorName').innerText = colorName;
    }

    function getMaxQuantity(quantity) {
        document.getElementById("myNumber").max = quantity;
        document.getElementById('quantityInStock').innerText = quantity+" sản phẩm";
        
    }

    // Get the element with id="defaultOpen" and click on it
    document.getElementById("defaultOpen").click();
    document.getElementById("main-image").click();
</script>
<script>
    $(".toggle-password").click(function() {

        $(this).toggleClass("fa-eye fa-eye-slash");
        var input = $($(this).attr("toggle"));
        if (input.attr("type") == "password") {
            input.attr("type", "text");
        } else {
            input.attr("type", "password");
        }
    });
</script>

<script>
    $(".toggle-password2").click(function() {

        $(this).toggleClass("fa-eye fa-eye-slash");
        var input = $($(this).attr("toggle"));
        if (input.attr("type") == "password") {
            input.attr("type", "text");
        } else {
            input.attr("type", "password");
        }
    });
</script>
<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
<script type="text/javascript" src="<?= link ?>Assets/client/js/script.js"></script>
</body>

</html>