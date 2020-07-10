<script src="/amigosproanimal/assets/plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap tether Core JavaScript -->
    <script src="/amigosproanimal/assets/plugins/bootstrap/js/popper.min.js"></script>
    <script src="/amigosproanimal/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <!--Wave Effects -->
    <script src="/amigosproanimal/assets/js/waves.js"></script>
    

    <!--stickey kit -->
    <script src="/amigosproanimal/assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <script src="/amigosproanimal/assets/plugins/sparkline/jquery.sparkline.min.js"></script>
    <!--Custom JavaScript -->
    <script src="/amigosproanimal/js/custom.min.js"></script> 
    <!-- Footable -->
    <script src="/amigosproanimal/assets/plugins/footable/js/footable.all.min.js"></script>
    <script src="/amigosproanimal/assets/plugins/bootstrap-select/bootstrap-select.min.js" type="text/javascript"></script>
    <!--FooTable init-->
    <script src="/amigosproanimal/assets/js/footable-init.js"></script>
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="/amigosproanimal/js/jquery.PrintArea.js"></script>
    <script >
    
    $(document).ready(function() {
        $("#print").click(function() {
            var mode = 'iframe'; //popup
            var close = mode == "popup";
            var options = {
                mode: mode,
                popClose: close
            };
            $("div.printableArea").printArea(options);
        });
    });
    
    </script>
    <script src="/amigosproanimal/assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>