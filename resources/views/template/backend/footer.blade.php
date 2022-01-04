<!-- Footer -->
<footer class="footer pt-0">
    <div class="row align-items-center justify-content-lg-between">
      <div class="col-lg-6">
        <div class="copyright text-center  text-lg-left  text-muted">
          &copy; 2020 <a href="https://www.creative-tim.com" class="font-weight-bold ml-1" target="_blank">Creative Tim</a>
        </div>
      </div>
     
    </div>
  </footer>
</div>
</div>
<!-- Argon Scripts -->
<!-- Core -->
<script src="{{url('backend/assets/vendor/jquery/dist/jquery.min.js')}}"></script>
<script src="{{url('backend/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}></script>
<script src="{{url('backend/assets/vendor/js-cookie/js.cookie.js')}}></script>
<script src="{{url('backend/assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js')}}></script>
<script src="{{url('backend/assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js')}}></script>
<!-- Optional JS -->
<script src="{{url('backend/assets/vendor/chart.js/dist/Chart.min.js')}}></script>
<script src="{{url('backend/assets/vendor/chart.js/dist/Chart.extension.js')}}></script>
<!-- Argon JS -->
<script src="{{url('backend/assets/js/argon.js?v=1.2.0')}}></script>
<script type="text/javascript">

  $(document).ready(function() {

    $(".btn-success").click(function(){ 
        var html = $(".clone").html();
        $(".increment").after(html);
    });

    $("body").on("click",".btn-danger",function(){ 
        $(this).parents(".control-group").remove();
    });

  });

</script>
</body>

</html>