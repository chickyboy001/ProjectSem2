<div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sign In Start -->
        <div class="container-fluid">
            <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
                <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                    <div class="bg-light rounded p-4 p-sm-5 my-4 mx-3">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <h3 class="text-primary fs-4" >DOUBLE H</h3>
                            <h3 class="fs-4" >Đăng nhập</h3>
                        </div>
                        <form method="POST">
                        <div class="form-floating mb-3">
                            <input autofocus autocomplete="on" type="text" class="form-control" id="floatingInput" placeholder="Tên người dùng" name="username">
                            <label for="floatingInput ">Tên người dùng</label>
                        </div>
                        <div class="form-floating mb-4 ">
                            <input autocomplete="on" type="password" class="form-control" id="floatingPassword" placeholder="Mật khẩu" name="password">
                            <label for="floatingPassword ">Mật khẩu</label>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <div class="form-check ">
                                <input autocomplete="on" type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1 ">Lưu đăng nhập</label>
                            </div>
                            <a href="">Quên mật khẩu</a>
                        </div>
                        <button type="submit" name="loginAdmin" class="btn btn-primary py-3 w-100 ">Đăng nhập</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Sign In End -->
    </div>
