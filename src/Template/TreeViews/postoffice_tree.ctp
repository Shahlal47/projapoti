<div class="row">
    <div class="col-md-5">
        <div class="portlet green-meadow box">
            <div class="portlet-title">
                <div class="caption"><i class="fa fa-cogs"></i>GEO Tree | Division to Post Office</div>
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

    </div>
    <div class="col-md-7" id="geo_desc_div">
    </div>
</div>

<script>
    var GeoTree = {
        gotoEdit:function(input)
        {
            var id = $(input).attr('data-id');
            var type = $(input).attr('data-type');
            var url = "<?php echo $this->request->webroot;?>";

            if(type == "division") { url += "geoDivisions/edit/"+id+"/ajax"; }
            if(type == "dist") { url += "geoDistricts/edit/"+id+"/ajax"; }
            if(type == "upazila") { url += "geoUpazilas/edit/"+id+"/ajax"; }
            if(type == "thana") { url += "geoThanas/edit/"+id+"/ajax"; }
            if(type == "union") { url += "geoUnions/edit/"+id+"/ajax"; }
            if(type == "postoffice") { url += "geoPostOffices/edit/"+id+"/ajax"; }
            if(type == "municipality") { url += "geoMunicipalities/edit/"+id+"/ajax"; }
            if(type == "municipalityward") { url += "geoMunicipalityWards/edit/"+id+"/ajax"; }
            if(type == "city") { url += "geoCityCorporations/edit/"+id+"/ajax"; }
            if(type == "cityward") { url += "geoCityCorporationWards/edit/"+id+"/ajax"; }

            PROJAPOTI.ajaxLoadCallback(url, function(response){
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
                            'getDivisionsTree':'getPostOfficesTree/';
                    },
                    'data' : function (node) {
                        return { 'id' : node.id };
                    }
                }
            }
        });
    });
</script>