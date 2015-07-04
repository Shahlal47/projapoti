<div class="row">
    <div class="col-md-5">
        <div class="portlet green-meadow box">
            <div class="portlet-title">
                <div class="caption"><i class="fa fa-cogs"></i>GEO Tree</div>
                <div class="tools">
                    <a href="javascript:;" class="collapse"></a>
                    <a href="#portlet-config" data-toggle="modal" class="config"></a>
                    <a href="javascript:;" class="reload"></a>
                    <a href="javascript:;" class="remove"></a>
                </div>
            </div>
            <div class="portlet-body">
                <div id="geotree">

                </div>
            </div>
        </div>
        <div class="col-md-7 id="geo_desc_div">
        </div>
    </div>

</div>

<script>
    var GeoTree = {
        gotoEdit:function(input)
        {
            var id = $(input).attr('data-id');
            var type = $(input).attr('data-type');
            var url = "<?php echo $this->request->webroot;?>";
            if(type == "division")
            {
                url += "geoDivisions/edit/"+id;
            }
            PROJAPOTI.ajaxSubmitDataCallback(url, "", function(response){
                $("#geo_desc_div").html(response);
            });
        }
    };

    $(function () {

        $('#geotree').jstree({
            "core" : {
                "themes" : {
                    "variant" : "large"
                },
                'data' : {
                    'url' : function (node) {
                        return node.id === '#' ?
                            'getDivisionsTree':'getDistrictsTree/';
                    },
                    'data' : function (node) {
                        return { 'id' : node.id };
                    }
                }
            }
        });
    });
</script>