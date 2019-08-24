<nav class="navbar navbar-transparent navbar-fixed-bottom hide" id="tag">
    <div class="col-md-12">
        <input type="text" value="Amsterdam,Washington,Sydney,Beijing,Hiếu" class="tagsinput" data-role="tagsinput"
            data-color="danger" />
            {{-- <span >Test</span> --}}

        <!-- You can change data-color="rose" with one of our colors primary | warning | info | danger | success -->
    </div>
</nav>

<script>
    function myFunction5(){
        if (document.getElementById('attr_tag').checked) {
        $('#tag').removeClass("hide")
        }
    }
    
    
</script>