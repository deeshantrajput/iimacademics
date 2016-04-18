
<div class="container-fluid" style="background-color: white">
    
    <div  class="container-fluid" style="background-color: white">

        <div class="row shade" style="padding:0">
            <div class="col-12 col-md-8 col-sm-8" style="">

                <a title="Image 1" href="#"> 
                    <img class="thumbnai img-responsive" id="image-1" src="<?= base_url(); ?>css/images/1.jpg">
                </a>
            </div>

            <div class="col-12 col-md-4 col-sm-4" style="">
                <a title="Image 2" href="#"> 
                    <img class="thumbnai img-responsive" id="image-2" src="<?= base_url(); ?>css/images/2.jpg">
                </a>

            </div>
            <div class="col-12 col-md-4 col-sm-6" style="">
                <a title="Image 3" href="#"> 
                    <img class="thumbnai img-responsive" id="image-3" src="<?= base_url(); ?>css/images/background.jpg">
                </a>
            </div>
        </div>
    </div>
     
    <div  class="container-fluid" style="background-color: white">
        <div class="col-12 col-md-8 col-sm-8" style="">
        <iframe width="100%" height="400px" src="https://www.youtube.com/embed/rAoZ6QksXnY" frameborder="0" allowfullscreen></iframe>
        </div>
        <div class="col-12 col-md-4 col-sm-4" style="">
            <iframe  width="100%" height="190px" src="https://www.youtube.com/embed/Z2MfPShEyBo" frameborder="0" allowfullscreen></iframe>
        </div>
         <div class="col-12 col-md-4 col-sm-4" style="padding-top: 10px">
       <iframe width="100%" height="190px" src="https://www.youtube.com/embed/JAwYeipbfHE" frameborder="0" allowfullscreen></iframe>
         </div>
        
        
        
        
   </div>



</div>

<div class="hidden" id="img-repo">

    <!-- #image-1 -->
    <div class="item" id="image-1">
        <img class="thumbnail img-responsive" title="Skill Vehicle" src="<?= base_url(); ?>css/images/1.jpg">
    </div>
    <div class="item" id="image-1">
        <img class="thumbnail img-responsive" title="Skill Vehicle" src="<?= base_url(); ?>css/images/2.jpg">
    </div>
    <div class="item" id="image-1">
        <img class="thumbnail img-responsive" title="Skill Vehicle" src="<?= base_url(); ?>css/images/3.jpg">
    </div>

    <!-- #image-2 -->
    <div class="item" id="image-2">
        <img class="thumbnail img-responsive" title="Image 11" src="<?= base_url(); ?>css/images/1.jpg">
    </div>
    <div class="item" id="image-2">
        <img class="thumbnail img-responsive" title="Image 12" src="<?= base_url(); ?>css/images/2.jpg">
    </div>
    <div class="item" id="image-2">
        <img class="thumbnail img-responsive" title="Image 13" src="<?= base_url(); ?>css/images/3.jpg">
    </div>

    <!-- #image-3-->
    <div class="item" id="image-3">
        <img class="thumbnail img-responsive" title="Image 11" src="<?= base_url(); ?>css/images/1.jpg">
    </div>
    <div class="item" id="image-3">
        <img class="thumbnail img-responsive" title="Image 12" src="<?= base_url(); ?>css/images/2.jpg">
    </div>
    <div class="item" id="image-3">
        <img class="thumbnail img-responsive" title="Image 13" src="<?= base_url(); ?>css/images/3.jpg">
    </div>       

</div>

<div class="modal" id="modal-gallery" role="dialog">
    <div class="modal-dialog" style="padding-top: 80px">
        <div class="modal-content">
            <div class="modal-header">
                <button class="close" type="button" data-dismiss="modal">×</button>
                <h3 class="modal-title"></h3>
            </div>
            <div class="modal-body">
                <div id="modal-carousel" class="carousel">

                    <div class="carousel-inner">           
                    </div>

                    <a class="carousel-control left" href="#modal-carousel" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
                    <a class="carousel-control right" href="#modal-carousel" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>

                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {

        /* activate the carousel */
        $("#modal-carousel").carousel({interval: false});

        /* change modal title when slide changes */
        $("#modal-carousel").on("slid.bs.carousel", function() {
            $(".modal-title")
                    .html($(this)
                            .find(".active img")
                            .attr("title"));
        });

        /* when clicking a thumbnail */
        $(".row .thumbnai").click(function() {
            var content = $(".carousel-inner");
            var title = $(".modal-title");

            content.empty();
            title.empty();

            var id = this.id;
            var repo = $("#img-repo .item");
            var repoCopy = repo.filter("#" + id).clone();
            var active = repoCopy.first();

            active.addClass("active");
            title.html(active.find("img").attr("title"));
            content.append(repoCopy);

            // show the modal
            $("#modal-gallery").modal("show");
        });

    });
</script>
