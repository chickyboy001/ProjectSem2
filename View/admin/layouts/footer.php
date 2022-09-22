<!-- Footer Start -->
<div class="container-fluid pt-4 px-4">
    <div class="bg-light rounded-top p-4">
        <div class="row">
            <div class="col-12 col-sm-6 text-center text-sm-start">
                &copy; <a href="#">Double H</a>, All Right Reserved.
            </div>
            <div class="col-12 col-sm-6 text-center text-sm-end">
                <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                Designed By <a href="https://htmlcodex.com">HTML Codex</a>
                </br>
                Customized By <a class="border-bottom" href="https://themewagon.com" target="_blank">Chickyboy</a>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->
</div>
<!-- Content End -->


<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
</div>

<!-- script -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="../../../ProjectSem2/Assets/admin/lib/chart/chart.min.js"></script>
<script src="../../../ProjectSem2/Assets/admin/lib/easing/easing.min.js"></script>
<script src="../../../ProjectSem2/Assets/admin/lib/waypoints/waypoints.min.js"></script>
<script src="../../../ProjectSem2/Assets/admin/lib/owlcarousel/owl.carousel.min.js"></script>
<script src="../../../ProjectSem2/Assets/admin/lib/tempusdominus/js/moment.min.js"></script>
<script src="../../../ProjectSem2/Assets/admin/lib/tempusdominus/js/moment-timezone.min.js"></script>
<script src="../../../ProjectSem2/Assets/admin/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
<script src="https://cdn.lordicon.com/xdjxvujz.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js "></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js "></script>
<script src="https://kit.fontawesome.com/9e51136256.js" crossorigin="anonymous"></script>
<script>
$(document).ready(function() {
    $('#productTable').DataTable({
        columnDefs: [{
            targets: [0, 1, 2, 3, 4, 5, 6, 7],
            className: 'dt-head-center'
        }, {
            orderable: false,
            targets: [1, 2, 5, 6, 7]
        }, {
            "searchable": false,
            "targets": [5, 6, 7]
        }],

    });
    $('#categoryTable').DataTable({
        columnDefs: [{
            targets: [0, 1, 2, 3, 4, 5, 6, 7],
            className: 'dt-head-center'
        }, {
            orderable: false,
            targets: [1, 2, 5, 6, 7]
        }, {
            "searchable": false,
            "targets": [1, 2, 5, 6, 7]
        }]
    });
});
</script>
<script src="../../../ProjectSem2/Assets/admin/js/inputAccept.js"></script>
<!-- Template Javascript -->
<script src=" ../../../ProjectSem2/Assets/admin/js/main.js"></script>
</body>

</html>